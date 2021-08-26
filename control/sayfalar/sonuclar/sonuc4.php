<div class="content-wrapper">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-9">
      <div class="card card-primary">
        <div class="card-header">
          <h4 class="card-title">
            <h1 class="m-0"><span class="badge badge-light">Öğrenci Değerlendirme Formu</h1></span></h1>
          </h4>
        </div>
        <div class="card-body">
          <?php
          if (empty($_GET['SonucID']))
            header("Location:main.php");
          else
            $SonucID = $_GET['SonucID'];
          ?>
          <form action="" , method="POST">
            <label>ADI SOYADI: &nbsp;</label>
            <?php
            $sql = "select * from  odf where ID=$SonucID";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            echo $row['soru1'];
            ?>
            <br>
            <label>TARİH: &nbsp;</label>
            <?php
            echo $row['soru2'];
            ?> <br>
            <label>YAŞ: &nbsp;</label>
            <?php
            echo $row['soru3'];
            ?>
            <br>
            <label>BOY/KİLO: &nbsp;</label>
            <?php
            echo $row['soru4'];
            ?>
            <br>
            <label>VKİ: &nbsp;</label>
            <?php
            echo $row['soru5'];
            ?><br>
            <label>CİNSİYET: &nbsp;</label>
            <?php
            echo $row['soru6'];
            ?>
            <br>
            <label>KRONİK HASTALIKLAR: &nbsp;</label>
            <?php
            echo $row['soru7'];
            ?>
            <br>
            <label>KULLANDIĞI İLAÇLAR: &nbsp;</label>
            <?php
            echo $row['soru8'];
            ?>
            <br>
            <label>SİGARA KULLANIYOR MUSUNUZ?: &nbsp;</label>
            <?php
            echo $row['soru9'];
            ?>
            <br>
            <label>ALKOL KULLANIMI: &nbsp;</label>
            <?php
            echo $row['soru10'];
            ?>
            <br>
            <label>KAÇINCI SINIF FTR ÖĞRENCİSİ: &nbsp;</label>
            <?php
            echo $row['soru11'];
            ?>
            <br>
            <label> HASTANIN TANISI: &nbsp;</label>
            <?php
            echo $row['soru12'];
            ?>
            <br>
            <label>HASTALIK DURASYONU: &nbsp;</label>
            <?php
            echo $row['soru13'];
            ?>
            <br>
            <label>BU ÇALIŞMADAN MEMNUN MUSUNUZ?: &nbsp;</label>
            <label>1 HİÇ MEMNUN DEĞİLİM --------- 10 ÇOK MEMNUNUM</label>
            <?php
            echo $row['soru14'];
            ?>
            <br>
            <label> SİZCE BU ÇALIŞMA YAYGINLAŞTIRILMALI MIDIR?: &nbsp;</label>
            <?php
            echo $row['soru15'];
            ?>
            <br>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
