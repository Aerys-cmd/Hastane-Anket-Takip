<?php


$sql = "select * from kullanici where ID={$_SESSION['ID']}";
$sqlek = "";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if ($row['YetkiNo'] == 1)
    $yetkiDurum = "Admin";
else if ($row['YetkiNo'] == 2) {
    $yetkiDurum = "Hoca";
    $sqlek = "akademisyenkullanici";
} else if ($row['YetkiNo'] == 3) {
    $yetkiDurum = "Asistan";
    $sqlek = "akademisyenkullanici";
} else if ($row['YetkiNo'] == 4) {
    $yetkiDurum = "Öğrenci";
    $sqlek = "ogrencikullanici";
} else {
    $yetkiDurum = "Hasta Yakını";
    $sqlek = "hastayakinikullanici";
}
if (isset($_POST['btn_Update'])) {
    $ad = $_POST['s1'];
    $soyad = $_POST['s2'];
    $sql = "UPDATE kullanici set KullaniciAd='$ad' ,KullaniciSoyad='$soyad' where ID={$_SESSION['ID']}";
    if (mysqli_query($con, $sql))
    header("Refresh:0");
    else
        header("Location:main.php?sayfaadi=hesabim");
} else if (isset($_POST['btn_Update']) && $sqlek == "ogrencikullanici") {
    $Bolum = $_POST['s8'];
    $Sinif = $_POST['s9'];
    $Adres = $_POST['s10'];
    $BakimSaat = $_POST['s11'];

    $sql = "UPDATE ogrencikullanici set Bolum='$Bolum' ,Sinif='$Sinif',Adres='$Adres', BakimSaat='$BakimSaat' where KullaniciID={$_SESSION['ID']}";

    if (mysqli_query($con, $sql))
        header("Refresh:0");
    else
        header("Location:main.php?sayfaadi=hesabim&isUpdated=false");
} else if (isset($_POST['btn_Update']) && $sqlek == "hastayakinikullanici") {
    $yas = $_POST['s4'];
    $gelirduzey = $_POST['s5'];
    $meslek = $_POST['s6'];
    $egitim = $_POST['s7'];

    $sql = "UPDATE hastayakinikullanici set Yas='$yas' ,GelirDuzey='$gelirduzey',Meslek='$meslek', Egitim='$egitim' where KullaniciID={$_SESSION['ID']}";

    if (mysqli_query($con, $sql))
        header("Refresh:0");
    else
        header("Location:main.php?sayfaadi=hesabim&isUpdated=false");
}
?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-9">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Hesabım</h3>
                </div>
                <form action="" method="post">
                    <div class="card-body">
                        <h1>Kullanıcı Bilgileri</h1>
                        <br>
                        <label>ADI SOYADI</label>
                        <div class="input-group">
                            <input type="text" name="s1" class="form-control" id="s1" value="<?php echo $row['KullaniciAd']; ?>">
                            <input type="text" name="s2" class="form-control" id="s1" value="<?php echo $row['KullaniciSoyad']; ?>">
                        </div>

                        <label>Cinsiyet</label>
                        <br>
                        <div class="input-group">
                            <input type="text" name="s2" class="form-control" id="s2" value="<?php echo $row['Cinsiyet']; ?>" disabled>
                        </div>
                        <label>Yetki Durumu</label>
                        <br>
                        <div class="input-group">
                            <input type="text" class="form-control" name="s3" id="s3" value="<?php echo $yetkiDurum; ?>" disabled>
                        </div>
                        <?php
                        if ($sqlek != "") {
                            $sql = "select * from $sqlek where KullaniciID={$row['ID']}";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            if ($sqlek == "hastayakinikullanici") {
                        ?>
                                <label>Hasta Yakınının Yaşı</label>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="s4" class="form-control" id="s4" value="<?php echo $row['Yas']; ?>">
                                </div>
                                <label>Gelir Düzeyi</label>
                                <br>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="s5" id="s5" value="<?php echo $row['GelirDuzey']; ?>">
                                </div>
                                <label>Meslek</label>
                                <br>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="s6" id="s6" value="<?php echo $row['Meslek']; ?>">
                                </div>
                                <label>Eğitim Durumu</label>
                                <br>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="s7" id="s7" value="<?php echo $row['Egitim']; ?>">
                                </div>
                                <br>


                            <?php
                            } else if ($sqlek == "ogrencikullanici") {
                            ?>
                                <label>Bölüm</label>
                                <div class="input-group">
                                    <input type="text" name="s8" class="form-control" id="s8" value="<?php echo $row['Bolum']; ?>">
                                </div>
                                <label>Sınıf</label>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="s9" class="form-control" id="s9" value="<?php echo $row['Sinif']; ?>">
                                </div>
                                <label>Adres</label>
                                <br>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="s10" id="s10" value="<?php echo $row['Adres']; ?>">
                                </div>
                                <label>Bakım verebileceği saat aralığı</label>
                                <br>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="s11" id="s11" value="<?php echo $row['BakimSaat']; ?>">
                                </div>
                            <?php

                            } else {
                            ?>
                                <label>Uzmanlık Alanı</label>
                                <div class="input-group">
                                    <input type="text" name="s1" class="form-control" id="s1" value="<?php echo $row['UzmanlikAlani']; ?>" disabled>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>

                    <div class="card-footer">
                        <nav id="mainav" class="fl_right">
                            <input style="margin:5px" type="submit" class="btn btn-block btn-primary " name="btn_Update" value="Gönder">
                        </nav>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>