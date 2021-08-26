<?php
function anketdata($sorusayi, $poststring, $nameinitial)
{
    $dizim = array($sorusayi);
    if (isset($_POST[$poststring])) {


        for ($i = 1; $i < $sorusayi + 1; $i++) {
            $dizim[$i - 1] = $_POST[$nameinitial . $i];
        }
        return $dizim;
    }
}
function yetkiDondur($Yetki, $SayfaYetki)
{
    if ($Yetki == $SayfaYetki)
        return 1;
    else
        return 0;
}
function getLatestUserID()
{
    if (!isset($con))
        include 'config.php';

    $sql = "SELECT MAX(ID) as 'ID' FROM kullanici";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['ID'];
    } else {
        return 0;
    }
}
function checkifHastaAdded($ID)
{
    if (!isset($con))
        include 'config.php';

    $sql = "SELECT * FROM hastayakinikullanici where KullaniciID=$ID and HastaAdSoyad = ''";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['ID'];
    } else {
        return 0;
    }
}
function AddHastaName($ID, $dizim)
{
    if (!isset($con))
        include 'config.php';

    $sql = "UPDATE hastayakinikullanici SET HastaAdSoyad='$dizim[0]',HastaDogumTarih='$dizim[1]',HastaCinsiyet='$dizim[2]',HastalikTanisi='$dizim[3]',KullandigiIlaclar='$dizim[4]',EngelDuzeyi='$dizim[5]',EngelDuzeyiAciklama='$dizim[6]',MentalDikkat='$dizim[7]',MentalAlgi='$dizim[8]',MentalHafiza='$dizim[9]',MentalAkilYurutme='$dizim[10]',MentalMuhakeme='$dizim[11]',MentalProblemCozme='$dizim[12]',HastaMeslek='$dizim[13]',HastaEgitimDurum='$dizim[14]' WHERE KullaniciID={$ID}";
    if (mysqli_query($con, $sql))
        return 1;
    else
        return  0;
}
function markasreaded(){
    if (!isset($con))
        include 'config.php';

    $sql1 = "Update log set OkunduMu=1";
    $result1 = mysqli_query($con, $sql1);
    $data1 = mysqli_fetch_assoc($result1);
}
