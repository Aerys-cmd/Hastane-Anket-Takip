<?php
if (yetkiDondur($_SESSION['YetkiNo'], 1) || yetkiDondur($_SESSION['YetkiNo'], 2)) {
  if (isset($_GET['SonucID'])) {
    $SoruID = $_GET['SonucID'];
    $sqlek = "and ID=$SoruID";
  } else {
    $sqlek = "";
  }
?>
  <div class="content-wrapper">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-9">
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="card-title">
              <h1 class="m-0"><span class="badge badge-light">Yeni Cinsel Doyum Ölçeği</h1></span></h1>
              <br>
              <h5> Aşağıda yer alan maddeleri okurken son altı ay içindeki cinsel yaşamınızı düşününüz. Son 6 ay içindeki cinsel yaşamınızı en iyi yansıtan, memnuniyet derecenizi belirten numarayı daire içine alınız.
              </h5>
            </h4>
          </div>
          <div class="card-body">
            <form action="insert2.php" , method="POST">
              <ol>
                <table>
                  <tr>
                    <td></td>
                    <td>Ölçek Maddeleri </td>
                    <td>Hiç Memnun Değilim &nbsp;</td>
                    <td>Biraz Memnunum &nbsp;</td>
                    <td>Orta Düzeyde Memnunum &nbsp; </td>
                    <td>Çok Memnunum &nbsp; </td>
                    <td>Son Derece Memnunum &nbsp;</td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>Cinsel uyarılma yoğunluğum</td>

                    <td>
                      <?php
                      $sql = "select count(soru1) as 'sayi' from cdo where soru1=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru1) as 'sayi' from cdo where soru1=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru1) as 'sayi' from cdo where soru1=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru1) as 'sayi' from cdo where soru1=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru1) as 'sayi' from cdo where soru1=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>

                  <tr>
                    <td>2.</td>
                    <td>Cinsel boşalmamın (orgazm) kalitesi</td>

                    <td>
                      <?php
                      $sql = "select count(soru2) as 'sayi' from cdo where soru2=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru2) as 'sayi' from cdo where soru2=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru2) as 'sayi' from cdo where soru2=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru2) as 'sayi' from cdo where soru2=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru2) as 'sayi' from cdo where soru2=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Cinsel ilişki boyunca kendimi cinsel zevke teslim etme ve bırakmam
                    </td>

                    <td>
                      <?php
                      $sql = "select count(soru3) as 'sayi' from cdo where soru3=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru3) as 'sayi' from cdo where soru3=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru3) as 'sayi' from cdo where soru3=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru3) as 'sayi' from cdo where soru3=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru3) as 'sayi' from cdo where soru3=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Cinsel ilişki boyunca odaklanmam/konsantrasyonum</td>

                    <td>
                      <?php
                      $sql = "select count(soru4) as 'sayi' from cdo where soru4=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru4) as 'sayi' from cdo where soru4=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru4) as 'sayi' from cdo where soru4=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru4) as 'sayi' from cdo where soru4=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru4) as 'sayi' from cdo where soru4=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Eşime/partnerime cinsel tepki biçimim</td>

                    <td>
                      <?php
                      $sql = "select count(soru5) as 'sayi' from cdo where soru5=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru5) as 'sayi' from cdo where soru5=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru5) as 'sayi' from cdo where soru5=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru5) as 'sayi' from cdo where soru5=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru5) as 'sayi' from cdo where soru5=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>6.</td>
                    <td>Vücudumun cinsel açıdan fonksiyonelliği (işlevselliği)</td>

                    <td>
                      <?php
                      $sql = "select count(soru6) as 'sayi' from cdo where soru6=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru6) as 'sayi' from cdo where soru6=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru6) as 'sayi' from cdo where soru6=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru6) as 'sayi' from cdo where soru6=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru6) as 'sayi' from cdo where soru6=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>7.</td>
                    <td>Cinsel ilişki sırasında duygusal serbestliğim (açılmam)</td>

                    <td>
                      <?php
                      $sql = "select count(soru7) as 'sayi' from cdo where soru7=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru7) as 'sayi' from cdo where soru7=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru7) as 'sayi' from cdo where soru7=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru7) as 'sayi' from cdo where soru7=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru7) as 'sayi' from cdo where soru7=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>8.</td>
                    <td>Cinsel ilişki sonrasındaki ruh halim</td>

                    <td>
                      <?php
                      $sql = "select count(soru8) as 'sayi' from cdo where soru8=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru8) as 'sayi' from cdo where soru8=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru8) as 'sayi' from cdo where soru8=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru8) as 'sayi' from cdo where soru8=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru8) as 'sayi' from cdo where soru8=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>9.</td>
                    <td>Cinsel boşalma (orgazm) sıklığı</td>

                    <td>
                      <?php
                      $sql = "select count(soru9) as 'sayi' from cdo where soru9=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru9) as 'sayi' from cdo where soru9=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru9) as 'sayi' from cdo where soru9=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru9) as 'sayi' from cdo where soru9=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru9) as 'sayi' from cdo where soru9=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>10.</td>
                    <td>Eşime/partnerime tattırdığım zevk</td>

                    <td>
                      <?php
                      $sql = "select count(soru10) as 'sayi' from cdo where soru10=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru10) as 'sayi' from cdo where soru10=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru10) as 'sayi' from cdo where soru10=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru10) as 'sayi' from cdo where soru10=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru10) as 'sayi' from cdo where soru10=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>11.</td>
                    <td>Cinsel ilişki sırasında aldığım ve verdiğim arasındaki denge
                    </td>

                    <td>
                      <?php
                      $sql = "select count(soru11) as 'sayi' from cdo where soru11=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru11) as 'sayi' from cdo where soru11=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru11) as 'sayi' from cdo where soru11=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru11) as 'sayi' from cdo where soru11=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru11) as 'sayi' from cdo where soru11=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>12.</td>
                    <td>Cinsel ilişki boyunca eşimin/partnerimin duygusal paylaşımı (açılması)
                    </td>

                    <td>
                      <?php
                      $sql = "select count(soru12) as 'sayi' from cdo where soru12=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru12) as 'sayi' from cdo where soru12=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru12) as 'sayi' from cdo where soru12=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru12) as 'sayi' from cdo where soru12=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru12) as 'sayi' from cdo where soru12=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>13.</td>
                    <td>Cinsel ilişkiyi eşimin/partnerimin başlatması</td>

                    <td>
                      <?php
                      $sql = "select count(soru13) as 'sayi' from cdo where soru13=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru13) as 'sayi' from cdo where soru13=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru13) as 'sayi' from cdo where soru13=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru13) as 'sayi' from cdo where soru13=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru13) as 'sayi' from cdo where soru13=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>14.</td>
                    <td>Eşimin/partnerimin cinsel boşalma (orgazm) becerisi</td>

                    <td>
                      <?php
                      $sql = "select count(soru14) as 'sayi' from cdo where soru14=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru14) as 'sayi' from cdo where soru14=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru14) as 'sayi' from cdo where soru14=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru14) as 'sayi' from cdo where soru14=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru14) as 'sayi' from cdo where soru14=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>15.</td>
                    <td>Eşimin/partnerimin kendisini cinsel zevk için teslim etmesi (bırakması)
                    </td>

                    <td>
                      <?php
                      $sql = "select count(soru15) as 'sayi' from cdo where soru15=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru15) as 'sayi' from cdo where soru15=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru15) as 'sayi' from cdo where soru15=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru15) as 'sayi' from cdo where soru15=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru15) as 'sayi' from cdo where soru15=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>16.</td>
                    <td>Eşimin/partnerimin benim cinsel ihtiyaçlarımla ilgilenme tarzı
                    </td>

                    <td>
                      <?php
                      $sql = "select count(soru16) as 'sayi' from cdo where soru16=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru16) as 'sayi' from cdo where soru16=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru16) as 'sayi' from cdo where soru16=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru16) as 'sayi' from cdo where soru16=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru16) as 'sayi' from cdo where soru16=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>17.</td>
                    <td>Eşimin/partnerimin cinsel yaratıcılığı</td>

                    <td>
                      <?php
                      $sql = "select count(soru17) as 'sayi' from cdo where soru17=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru17) as 'sayi' from cdo where soru17=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru17) as 'sayi' from cdo where soru17=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru17) as 'sayi' from cdo where soru17=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru17) as 'sayi' from cdo where soru17=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>18.</td>
                    <td>Eşimin/partnerimin cinsel ilişkiye hazır olması</td>

                    <td>
                      <?php
                      $sql = "select count(soru18) as 'sayi' from cdo where soru18=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru18) as 'sayi' from cdo where soru18=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru18) as 'sayi' from cdo where soru18=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru18) as 'sayi' from cdo where soru18=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru18) as 'sayi' from cdo where soru18=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>19.</td>
                    <td>Cinsel ilişkimin çeşitliliği</td>

                    <td>
                      <?php
                      $sql = "select count(soru19) as 'sayi' from cdo where soru19=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru19) as 'sayi' from cdo where soru19=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru19) as 'sayi' from cdo where soru19=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru19) as 'sayi' from cdo where soru19=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru19) as 'sayi' from cdo where soru19=5 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  <tr>
                    <td>20.</td>
                    <td>Cinsel ilişkimin sıklığı</td>

                    <td>
                      <?php
                      $sql = "select count(soru20) as 'sayi' from cdo where soru20=1 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru20) as 'sayi' from cdo where soru20=2 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru20) as 'sayi' from cdo where soru20=3 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru20) as 'sayi' from cdo where soru20=4 $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru20) as 'sayi' from cdo where soru20=5  $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>

                  </tr>
                  </tbody>
                </table>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
} else
  echo "<script>alert('Yetkiniz yok.');</script>";
?>