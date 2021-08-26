<?php
  include 'function.php';
  include 'config.php';
if (isset($_POST['signIn'])) {
  //Tek seferlik giriş ve kayıt formu olduğundan config include edildi ve session açıldı.
  session_start();
  $user_name = $_POST['signinname'];
  $password = $_POST['signinpassword'];
  $md5Sifre = md5(md5($password));
  $md5mail=md5(md5($user_name));

  if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

    //read from database
    $query = "select * from kullanici where Mail = '$md5mail' limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
      if (mysqli_num_rows($result) > 0) {

        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['KullaniciSifre'] === $md5Sifre) {
          $_SESSION['ID'] = $user_data['ID'];
          $_SESSION['YetkiNo'] = $user_data['YetkiNo'];
          $_SESSION['kullaniciAd'] = $user_data['KullaniciAd'];
          $_SESSION['kullaniciSoyad'] = $user_data['KullaniciSoyad'];
          header("Location: /../portal/control/main.php");
          die;
        }
      }
    }
    header("Location: /../portal/index.php?Login=no");
  } else {
    header("Location: /../portal/index.php?Login=no");
  }
}

if (isset($_POST['signupOgrenci'])) {
  $username = $_POST['username'];
  $userlastname = $_POST['userlastname'];
  $usermail = $_POST['usermail'];
  $password = $_POST['password'];
  $passwordc= $_POST['passwordr'];
  $Adres= $_POST['Adres'];
  $Saat= $_POST['Saat'];
  $Sinif= $_POST['Sinif'];
  $Cinsiyet= $_POST['Cinsiyet']==1 ? "Erkek" : "Kadın";
  $Bolum= $_POST['Bolum']==1 ? "Fizyoterapi" : "Rehabilitasyon";

if ($password==$passwordc) {
  $md5mail=md5(md5($usermail));
  $md5password=md5(md5($password));
  $sql = "insert into kullanici(KullaniciAd,KullaniciSoyad,Cinsiyet,Mail,KullaniciSifre,YetkiNo) values ('$username','$userlastname','$Cinsiyet','$md5mail','$md5password','4')";
  if (mysqli_query($con, $sql)){
    $getLatestID=getLatestUserID();
    $sql1 = "insert into ogrencikullanici(Bolum,Sinif,Adres,BakimSaat,KullaniciID) values ('$Bolum','$Sinif','$Adres','$Saat',$getLatestID)";
    if (mysqli_query($con, $sql1)){
      header("Location: /../portal/index.php?signup=yes");
    }
    else
    header("Location: /../portal/index.php?signup=no");
  }
  else
  header("Location: /../portal/index.php?signup=no");
}
else
{
  header("Location: /../portal/index.php?signup=no");
}

}

if (isset($_POST['signupHasta'])) {
  $username = $_POST['username'];
  $userlastname = $_POST['userlastname'];
  $usermail = $_POST['usermail'];
  $password = $_POST['password'];
  $passwordc= $_POST['passwordr'];
  $Yas= $_POST['yas'];
  $Meslek= $_POST['meslek'];
  $GelirDurum= $_POST['gelir'];
  $Cinsiyet= $_POST['Cinsiyet']== 1 ? "Erkek" : "Kadın";
  $EgitimDurum= $_POST['egitim'];

if ($password==$passwordc) {
  $md5mail=md5(md5($usermail));
  $md5password=md5(md5($password));
  $sql = "insert into kullanici(KullaniciAd,KullaniciSoyad,Cinsiyet,Mail,KullaniciSifre,YetkiNo) values ('$username','$userlastname','$Cinsiyet','$md5mail','$md5password','5')";
  if (mysqli_query($con, $sql)){
    $getLatestID=getLatestUserID();
    $sql1 = "insert into hastayakinikullanici(Yas,GelirDuzey,Meslek,Egitim,KullaniciID) values ('$Yas','$GelirDurum','$Meslek','$EgitimDurum',$getLatestID)";
    if (mysqli_query($con, $sql1)){
      header("Location: /../portal/index.php?signup=yes");
    }
    else
    header("Location: /../portal/index.php?signup=no");
  }
  else
  header("Location: /../portal/index.php?signup=no");
}
else
{
  header("Location: /../portal/index.php?signup=no");
}

}

