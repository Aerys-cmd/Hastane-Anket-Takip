<?php
if (!(yetkiDondur($_SESSION['YetkiNo'], 5) || yetkiDondur($_SESSION['YetkiNo'], 4))) {
    header("Location:main.php");
}
?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card card-primary">
                <form action="" method="POST">
                    <div class="card-header">
                        <h1 class="m-0"><span class="badge badge-light">Menüden bir hoca seçin ve sorunuzu gönderin.</span></h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Listeden soru sormak istediğiniz kişiyi seçin.</label>
                            <select class="combobox form-control" name="inline">
                                <?php
                                $sql3 = "select * from kullanici where YetkiNo=2";
                                $result3 = mysqli_query($con, $sql3);
                                while ($row3 = mysqli_fetch_array($result3)) {
                                    $adsoyad = $row3['KullaniciAd'] . " " . $row3['KullaniciSoyad'];
                                    $ID = $row3['ID'];
                                    echo  "<option value=" . "$ID" . ">$adsoyad" . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <label>Soru Başlığı</label>
                        <input type="text" name="soruBaslik" placeholder="Soru Başlığı" class="form-control">
                        <label>Mesaj İçeriği</label>
                        <div class="input-group">

                            <textarea class="form-control" name="soruIcerik" placeholder="Mesaj İçeriği"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">

                        <button name="sendQuestion" value="<?php echo ""; ?>" type="submit" class="btn btn-primary btn-block">Gönder</button>
                       
                    </div>
                    <div><?php
                    
                    if (isset($_GET['questionAdded'])) {
                        $str = $_GET['questionAdded'] == "true" ? "Mesaj başarıyla eklendi." : "Mesaj Eklenemedi.";
                        echo "<h1 class=" . "m-0" . "><span class=" . "badge badge-light" . ">" . $str . "</span></h1>";
                    }
                   
                    ?></div>
                </form>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

</div>

<?php
 
 
 
if (isset($_POST['sendQuestion'])) {
    $AtananID = $_POST['inline'];
    $Soru = $_POST['soruIcerik'];
    $SoruBaslik = $_POST['soruBaslik'];
    $ID = $_SESSION['ID'];

    $sql = "insert into soru(SoruBaslik,SoruIcerik,AtananID,YollayanID) values ('$SoruBaslik','$Soru',$AtananID,$ID)";
    if (mysqli_query($con, $sql))
        header("Location: main.php?sayfaadi=sorusor&questionAdded=true");
    else {
        header("Location: main.php?sayfaadi=sorusor&questionAdded=false");
    }
}
?>