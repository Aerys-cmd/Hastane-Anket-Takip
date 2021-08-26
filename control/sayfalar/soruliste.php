<?php
if (!(yetkiDondur($_SESSION['YetkiNo'], 2) || yetkiDondur($_SESSION['YetkiNo'], 4) || yetkiDondur($_SESSION['YetkiNo'], 5)))
  header("Location:main.php")
?>
<div style="padding-top:1%" class="content-wrapper">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="card card-primary">
        <div class="card-header">
        <h1 class="m-0"><span class="badge badge-light"><?php echo $_SESSION['YetkiNo'] > 2 ? "Gönderilen Mesajlar" : "Gelen Mesajlar" ?> </span></h1>
        </div>
        <div class="card-body">
          <form action="" , method="POST">
            <?php
            $sqlek = $_SESSION['YetkiNo'] > 2 ? "YollayanID" : "AtananID";
            $sql = "select * from soru where $sqlek={$_SESSION['ID']} order by OkunduMu asc ";
            $sqlek = $_SESSION['YetkiNo'] > 2 ? "AtananID" : "YollayanID";
            $result = mysqli_query($con, $sql);
            ?>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col"><?php echo $sqlek == "YollayanID" ? "Gönderen Kişi" : "Yollanan Kişi" ?></th>
                  <th scope="col">Soru Başlığı</th>
                  <th scope="col">İçerik</th>
                  <th scope="col">Ayrıntıya git</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($rowSoru = mysqli_fetch_assoc($result)) {
                  $sqlek = $_SESSION['YetkiNo'] > 2 ? "AtananID" : "YollayanID";
                  $Sorgu = $rowSoru[$sqlek];
                  $sql = "select * from kullanici where ID={$Sorgu}";
                  $result1 = mysqli_query($con, $sql);
                  $rowKullanici = mysqli_fetch_assoc($result1);
                ?>
                  <tr>
                    <td><?php echo $rowKullanici['KullaniciAd'] . " " . $rowKullanici['KullaniciSoyad']; ?></td>
                    <td><?php echo $rowSoru['SoruBaslik']; ?></td>
                    <td><?php echo $rowSoru['SoruIcerik']; ?></td>
                    <td>
                      <button class="btn btn-primary" onclick="location.href='./main.php?sayfaadi=sorucevap&SoruID=<?php echo $rowSoru['ID']; ?>'" type="button">
                        Detay <span class="badge badge-dark"><?php echo $rowSoru['OkunduMu'] == 0 ? "Cevaplanmadı" : "Cevaplandı"; ?></span></button>
                    </td>
                  </tr>
                <?php
                }

                ?>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>