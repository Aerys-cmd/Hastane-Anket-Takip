<?php
if (yetkiDondur($_SESSION['YetkiNo'], 1) || yetkiDondur($_SESSION['YetkiNo'], 2)) {
  $SonucID = $_GET['SonucID'];
?>

  <div class="content-wrapper">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-9">
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="card-title">
              <h1 class="m-0"><span class="badge badge-light">Hasta Değerlendirme Formu</h1></span></h1>
            </h4>
          </div>
          <div class="card-body">
            <br>
            <form action="" method="">

              <div class="form-group">
                <label for="text">ADI SOYADI:</label>
                <?php
                $sql = "select * from hasta where id=$SonucID";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                echo $row['soru1'];
                ?>
              </div>


              <div class="form-group">
                <label for="text">TARİH: </label>
                <?php

                echo $row['soru2'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">YAŞ:</label>
                <?php

                echo $row['soru3'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">BOY/KİLO:</label>
                <?php

                echo $row['soru4'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">VKİ:</label>
                <?php

                echo $row['soru5'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">CİNSİYET:</label>
                <?php
                echo $row['soru6'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">EĞİTİM DURUMU:</label>
                <?php
                echo $row['soru7'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">KRONİK HASTALIKLAR:</label>
                <?php

                echo $row['soru8'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">KULLANDIĞI İLAÇLAR:</label>
                <?php

                echo $row['soru9'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">SİGARA KULLANIYOR MUSUNUZ?:</label>
                <?php
                echo $row['soru10'];
                ?>
              </div>


              <label for="text">ALKOL KULLANIMI:</label>
              <?php
              echo $row['soru11'];
              ?>


              <div class="form-group">
                <label for="text">MESLEK</label>
                <?php
                echo $row['soru12'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">HASTAYA YAKINLIK DERECESİ </label>
                <?php
                echo $row['soru13'];
                ?>
              </div>

              <div class="form-group">
                <label for="text"> HASTANIN TANISI</label>
                <?php
                echo $row['soru14'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">HASTALIK DURASYONU </label>
                <?php
                echo $row['soru15'];
                ?>
              </div>

              <div class="form-group">
                <label for="text">HASTAYA KAÇ YILDIR BAKIM HİZMETİ SAĞLIYORSUNUZ </label>
                <?php
                echo $row['soru16'];
                ?>
              </div>
              <label>BU ÇALIŞMADAN MEMNUN MUSUNUZ?</label>
              <br>

              <label>1 HİÇ MEMNUN DEĞİLİM --------- 10 ÇOK MEMNUNUM</label>
              <div class="slidecontainer">
                <p>Puanınız:
                  <?php
                  echo $row['soru17'];
                  ?>
                  <span id="demo">
                  </span>
                </p>
              </div>

              <label> SİZCE BU ÇALIŞMA YAYGINLAŞTIRILMALI MIDIR? </label>
              <div class="form-group">
                <?php
                echo $row['soru18'];
                ?>
              </div>

            <?php
          } else
            echo "<script>alert('Yetkiniz yok.');</script>";
            ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>