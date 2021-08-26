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
              <h1 class="m-0"><span class="badge badge-light">RAND 36 Maddelik Sağlık Anketi 1.0 Anket Maddeleri</h1></span></h1>
            </h4>
          </div>
          <div class="card-body">
            <form action="baglanti.php" method="POST">
            <p>1-Genel olarak sağlığınızın şöyle olduğunu söyler misiniz:</p>

              <ol>
                <table>
                  <tr>
                    <td><label>1 - Mükemmel </label></td>
                    <td>
                      <?php
                      $sql = "select count(soru1) as 'sayi' from sorucevaplari where soru1='S1C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label>2 - Çok iyi</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru1) as 'sayi' from sorucevaplari where soru1='S1C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>

                    </td>
                  </tr>
                  <tr>
                    <td><label>3 - İyi</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru1) as 'sayi' from sorucevaplari where soru1='S1C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label>4 - Fuar</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru1) as 'sayi' from sorucevaplari where soru1='S1C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>


                    </td>
                  </tr>
                  <tr>
                    <td><label>5 - Zayıf</label>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru1) as 'sayi' from sorucevaplari where soru1='S1C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                  </tr> <br>
                </table>
              </ol>

              <p>2- Bir yıl öncesine kıyasla , şimdiki sağlığınızı genel olarak nasıl değerlendirirsiniz?</p>
              <ol>
                <table>
                  <tr>
                    <td><label>1 - Şimdi bir yıl öncesine göre çok daha iyi </label></td>
                    <td>
                      <?php
                      $sql = "select count(soru2) as 'sayi' from sorucevaplari where soru2='S2C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 2 - Bir yıl öncesine göre biraz daha iyi</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru2) as 'sayi' from sorucevaplari where soru2='S2C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 3 - Yaklaşık olarak aynı</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru2) as 'sayi' from sorucevaplari where soru2='S2C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 4 - Bir yıl öncesine göre biraz daha kötü </label></td>
                    <td>
                      <?php
                      $sql = "select count(soru2) as 'sayi' from sorucevaplari where soru2='S2C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                  </tr>
                  <tr>
                    <td><label> 5 - Bir yıl öncesine göre çok daha kötü</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru2) as 'sayi' from sorucevaplari where soru2='S2C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>

                    </td>
                  </tr>
                </table>
              </ol>

              <br>
              <p>Aşağıdaki öğeler, tipik bir gün boyunca yapabileceğiniz etkinliklerle ilgilidir. Does sağlık
                şimdi sınırlamak bu faaliyetlere? Eğer öyleyse, ne kadar?</p>
              <ol>
                <table>
                  <tr>
                    <td></td>
                    <td><label>Evet Çok Kısıtlı </label></td>
                    <td><label>Evet Biraz Kısıtlı </label></td>
                    <td><label>Hayır Hiç Sınırlı Değil</label></td>
                  </tr>

                  <tr>
                    <td>3. Koşmak , ağır cisimleri kaldırmak, yorucu sporlara katılmak gibi yoğun aktiviteler</td>
                    <td>
                      <?php
                      $sql = "select count(soru3) as 'sayi' from sorucevaplari where soru3='S3C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru3) as 'sayi' from sorucevaplari where soru3='S3C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                    <td>

                      <?php
                      $sql = "select count(soru3) as 'sayi' from sorucevaplari where soru3='S3C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                  </tr>

                  <tr>
                    <td>4. Masayı hareket ettirmek, elektrikli süpürgeyi

                      itmek, bowling oynamak veya golf oynamak gibi orta düzeyde aktiviteler
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru4) as 'sayi' from sorucevaplari where soru4='S4C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php

                      $sql = "select count(soru4) as 'sayi' from sorucevaplari where soru4='S4C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php

                      $sql = "select count(soru4) as 'sayi' from sorucevaplari where soru4='S4C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>5. Yiyecekleri kaldırmak veya taşımak
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru5) as 'sayi' from sorucevaplari where soru5='S5C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru5) as 'sayi' from sorucevaplari where soru5='S5C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru5) as 'sayi' from sorucevaplari where soru5='S5C3'  $sqlek ";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>6. Birkaç kat merdiven çıkmak
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru6) as 'sayi' from sorucevaplari where soru6='S6C1'  $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru6) as 'sayi' from sorucevaplari where soru6='S6C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru6) as 'sayi' from sorucevaplari where soru6='S6C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                  </tr>

                  <tr>
                    <td>7. Bir kat merdiven çıkmak


                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru7) as 'sayi' from sorucevaplari where soru7='S7C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru7) as 'sayi' from sorucevaplari where soru7='S7C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>

                      <?php
                      $sql = "select count(soru7) as 'sayi' from sorucevaplari where soru7='S7C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                  </tr>

                  <tr>
                    <td>8. Eğilme, diz çökme veya eğilme
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru8) as 'sayi' from sorucevaplari where soru8='S8C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru8) as 'sayi' from sorucevaplari where soru8='S8C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru8) as 'sayi' from sorucevaplari where soru8='S8C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>9. Bir milden fazla yürümek
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru9) as 'sayi' from sorucevaplari where soru9='S9C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru9) as 'sayi' from sorucevaplari where soru9='S9C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru9) as 'sayi' from sorucevaplari where soru9='S9C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                  </tr>

                  <tr>
                    <td>10. Birkaç blok yürümek
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru10) as 'sayi' from sorucevaplari where soru10='S10C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru10) as 'sayi' from sorucevaplari where soru10='S10C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru10) as 'sayi' from sorucevaplari where soru10='S10C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>11. Bir blok yürümek
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru11) as 'sayi' from sorucevaplari where soru11='S11C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru11) as 'sayi' from sorucevaplari where soru11='S11C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru11) as 'sayi' from sorucevaplari where soru11='S11C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>12.Kendiniz yıkanmak veya giyinmek
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru12) as 'sayi' from sorucevaplari where soru12='S12C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru12) as 'sayi' from sorucevaplari where soru12='S12C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru12) as 'sayi' from sorucevaplari where soru12='S12C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                </table>
              </ol>
              <br>


              <p>Sırasında Son 4 hafta , iş yeri veya diğer normal günlük aktiviteler ile aşağıdaki sorunlardan herhangi oldu mu fiziksel sağlığı sonucu ?</p>

              <ol>
                <table>

                  <tr>
                    <td></td>
                    <td><label>Evet </label></td>
                    <td><label>Hayır</label></td>
                  </tr>

                  <tr>
                    <td>13. İşe veya diğer faaliyetlere harcadığınız zamanı azaltın
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru13) as 'sayi' from sorucevaplari where soru13='S13C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru13) as 'sayi' from sorucevaplari where soru13='S13C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>14. İstediğinizden daha azını başardınız
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru14) as 'sayi' from sorucevaplari where soru14='S14C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru14) as 'sayi' from sorucevaplari where soru14='S14C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>15. İşin türünde veya diğer faaliyetlerde sınırlıydı
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru15) as 'sayi' from sorucevaplari where soru15='S15C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru15) as 'sayi' from sorucevaplari where soru15='S15C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>16. İşi veya diğer etkinlikleri yapmakta zorluk yaşadı (örneğin, ekstra çaba gerektirdi)
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru16) as 'sayi' from sorucevaplari where soru16='S16C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru16) as 'sayi' from sorucevaplari where soru16='S16C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                </table>
              </ol>
              <br>



              <p>Sırasında Son 4 hafta , iş yeri veya diğer normal günlük aktiviteler ile aşağıdaki sorunlardan herhangi oldu mu duygusal sorunların bir sonucu olarak (örneğin depresif ya da endişeli duygu gibi)?</p>

              <ol>
                <table>

                  <tr>
                    <td></td>
                    <td><label>Evet </label></td>
                    <td><label>Hayır</label></td>
                  </tr>

                  <tr>
                    <td>17. İşe veya diğer faaliyetlere harcadığınız zamanı azaltın
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru17) as 'sayi' from sorucevaplari where soru17='S17C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>

                      <?php
                      $sql = "select count(soru17) as 'sayi' from sorucevaplari where soru17='S17C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>18. İstediğinizden daha azını başardınız
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru17) as 'sayi' from sorucevaplari where soru1='S18C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru17) as 'sayi' from sorucevaplari where soru1='S18C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>19. İşi veya diğer faaliyetleri her zamanki kadar dikkatli yapmadı
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru19) as 'sayi' from sorucevaplari where soru1='S19C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru19) as 'sayi' from sorucevaplari where soru1='S19C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                </table>
              </ol>
              <br>

              <p>20. Son 4 hafta içinde , fiziksel sağlığınız veya duygusal sorunlarınız, aileniz, arkadaşlarınız, komşularınız veya gruplarınızla normal sosyal aktivitelerinizi ne ölçüde etkiledi?</p>

              <ol>
                <table>

                  <tr>
                    <td><label> 1 - Hiç</label></td>
                    <td>

                      <?php
                      $sql = "select count(soru20) as 'sayi' from sorucevaplari where soru20='S20C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 2 - Az</label></td>
                    <td>

                      <?php
                      $sql = "select count(soru20) as 'sayi' from sorucevaplari where soru20='S20C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 3 - Orta derecede </label></td>
                    <td>

                      <?php
                      $sql = "select count(soru20) as 'sayi' from sorucevaplari where soru20='S20C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 4 - Biraz</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru20) as 'sayi' from sorucevaplari where soru20='S20C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 5 - Son derece</label></td>
                    <td>

                      <?php
                      $sql = "select count(soru20) as 'sayi' from sorucevaplari where soru20='S20C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                </table>
              </ol>
              <br>

              <p>21. Son 4 hafta içinde ne kadar bedensel ağrınız oldu ?</p>

              <ol>
                <table>
                  <tr>
                    <td><label> 1 - Hiç</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru21) as 'sayi' from sorucevaplari where soru21='S21C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                  </tr>
                  <tr>
                    <td><label> 2 - Az</label></td>
                    <td>

                      <?php
                      $sql = "select count(soru21) as 'sayi' from sorucevaplari where soru21='S21C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                  </tr>
                  <tr>
                    <td><label> 3 - Orta derecede </label></td>
                    <td>
                      <?php
                      $sql = "select count(soru21) as 'sayi' from sorucevaplari where soru21='S21C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                  </tr>
                  <tr>
                    <td><label> 4 - Biraz</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru21) as 'sayi' from sorucevaplari where soru21='S21C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                  </tr>
                  <tr>
                    <td><label> 5 - Son derece</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru21) as 'sayi' from sorucevaplari where soru21='S21C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                  </tr>
                </table>
              </ol>
              <br>

              <p>22. Son 4 hafta içinde ağrı normal işinizi ne kadar etkiledi (hem ev işi hem de ev işi dahil)?</p>
              <ol>
                <table>
                  <tr>
                    <td><label> 1 - Hiç</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru22) as 'sayi' from sorucevaplari where soru22='S22C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 2 - Az</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru22) as 'sayi' from sorucevaplari where soru22='S22C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 3 - Orta derecede </label></td>
                    <td>
                      <?php
                      $sql = "select count(soru22) as 'sayi' from sorucevaplari where soru22='S22C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 4 - Biraz</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru22) as 'sayi' from sorucevaplari where soru22='S22C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 5 - Son derece</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru22) as 'sayi' from sorucevaplari where soru22='S22C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                </table>
              </ol>
              <br>

              Bu sorular son 4 hafta içinde nasıl hissettiğiniz ve işlerin nasıl gittiği ile ilgilidir . Her soru için, lütfen hissettiğiniz yola en yakın olan yanıtı verin.

              <ol>
                <table>
                  <tr>
                    <td>Son 4 haftadaki zamanın ne kadarı </td>
                    <td><label>Tüm Zamanların </label></td>
                    <td><label>Çoğu Zaman </label></td>
                    <td><label>İyi Bir Zaman </label></td>
                    <td><label>Bazen </label></td>
                    <td><label> Bazı Zaman </label></td>
                    <td><label> Hiçbir Zaman</label></td>
                  </tr>

                  <tr>
                    <td>23. Kendinizi moral dolu hissettiniz mi?</td>
                    <td>
                      <?php
                      $sql = "select count(soru23) as 'sayi' from sorucevaplari where soru23='S23C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru23) as 'sayi' from sorucevaplari where soru23='S23C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td><?php
                        $sql = "select count(soru23) as 'sayi' from sorucevaplari where soru23='S23C3' $sqlek";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru23) as 'sayi' from sorucevaplari where soru23='S23C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru23) as 'sayi' from sorucevaplari where soru23='S23C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td><?php
                        $sql = "select count(soru23) as 'sayi' from sorucevaplari where soru23='S23C6' $sqlek";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>24. Çok gergin bir insan mıydınız?</td>
                    <td>
                      <?php
                      $sql = "select count(soru24) as 'sayi' from sorucevaplari where soru24='S24C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru24) as 'sayi' from sorucevaplari where soru24='S24C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru24) as 'sayi' from sorucevaplari where soru24='S24C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru24) as 'sayi' from sorucevaplari where soru24='S24C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                    <td><?php
                        $sql = "select count(soru24) as 'sayi' from sorucevaplari where soru24='S24C5' $sqlek";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['sayi']; ?>

                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru24) as 'sayi' from sorucevaplari where soru24='S24C6' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>

                    </td>
                  </tr>

                  <tr>
                    <td>25. Hiçbir şeyin sizi neşelendiremeyeceği çöplükte kendinizi çok kötü hissettiniz mi?
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S25C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S25C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S25C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S25C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S25C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S25C6' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>26. Kendinizi sakin ve huzurlu hissettiniz mi?
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S26C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S26C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?></td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S26C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S26C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S26C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td><?php
                        $sql = "select count(soru25) as 'sayi' from sorucevaplari where soru25='S26C6' $sqlek";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>27. Çok enerjiniz var mıydı?
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru27) as 'sayi' from sorucevaplari where soru27='S27C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru27) as 'sayi' from sorucevaplari where soru27='S27C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru27) as 'sayi' from sorucevaplari where soru27='S27C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru27) as 'sayi' from sorucevaplari where soru27='S27C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru27) as 'sayi' from sorucevaplari where soru27='S27C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru27) as 'sayi' from sorucevaplari where soru27='S27C6' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>28. Moraliniz bozuk ve moraliniz bozuldu mu?
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru28) as 'sayi' from sorucevaplari where soru28='S28C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru28) as 'sayi' from sorucevaplari where soru28='S28C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru28) as 'sayi' from sorucevaplari where soru28='S28C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru28) as 'sayi' from sorucevaplari where soru28='S28C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru28) as 'sayi' from sorucevaplari where soru28='S28C5' $sqlek ";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru28) as 'sayi' from sorucevaplari where soru28='S28C6' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>29. Kendinizi yıpranmış hissettiniz mi?
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru29) as 'sayi' from sorucevaplari where soru29='S29C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru29) as 'sayi' from sorucevaplari where soru29='S29C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru29) as 'sayi' from sorucevaplari where soru29='S29C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>


                    <td>
                      <?php
                      $sql = "select count(soru29) as 'sayi' from sorucevaplari where soru29='S29C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi'];
                      ?>
                    </td>


                    <td>
                      <?php
                      $sql = "select count(soru29) as 'sayi' from sorucevaplari where soru29='S29C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru29) as 'sayi' from sorucevaplari where soru29='S29C6' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>30. Mutlu bir insan oldunuz mu?</td>
                    <td>
                      <?php
                      $sql = "select count(soru30) as 'sayi' from sorucevaplari where soru30='S30C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru30) as 'sayi' from sorucevaplari where soru30='S30C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru30) as 'sayi' from sorucevaplari where soru30='S30C3' $sqlek";
                      $result = mysqli_query($con, $sql);

                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru30) as 'sayi' from sorucevaplari where soru30='S30C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru30) as 'sayi' from sorucevaplari where soru30='S30C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru30) as 'sayi' from sorucevaplari where soru30='S30C6' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>31. Kendinizi yorgun hissettiniz mi?</td>
                    <td>
                      <?php
                      $sql = "select count(soru31) as 'sayi' from sorucevaplari where soru31='S31C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td><?php
                        $sql = "select count(soru31) as 'sayi' from sorucevaplari where soru31='S31C2' $sqlek";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru31) as 'sayi' from sorucevaplari where soru31='S31C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru31) as 'sayi' from sorucevaplari where soru31='S31C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru31) as 'sayi' from sorucevaplari where soru31='S31C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru31) as 'sayi' from sorucevaplari where soru31='S31C6' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                </table>
              </ol>
              <br>

              <p>32. Son 4 hafta içinde , fiziksel sağlığınız veya duygusal sorunlarınız ne kadar zaman sosyal aktivitelerinizi (arkadaş, akraba ziyareti vb.) etkiledi ?</p>
              <ol>
                <table>
                  <tr>
                    <td><label> 1 - Her Zaman</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru32) as 'sayi' from sorucevaplari where soru32='S32C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 2 - Çoğu Zaman</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru32) as 'sayi' from sorucevaplari where soru32='S32C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 3 - Bazen </label></td>
                    <td>
                      <?php
                      $sql = "select count(soru32) as 'sayi' from sorucevaplari where soru32='S32C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 4 - Az Bir Zaman</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru32) as 'sayi' from sorucevaplari where soru32='S32C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td><label> 5 - Hiçbir Zaman</label></td>
                    <td>
                      <?php
                      $sql = "select count(soru32) as 'sayi' from sorucevaplari where soru32='S32C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                </table>
              </ol>
              <br>

              <p>Aşağıdaki ifadelerin her biri sizin için ne kadar DOĞRU veya YANLIŞTIR .</p>

              <ol>
                <table>
                  <tr>
                    <td></td>
                    <td><label>Kesinlikle Doğru </label></td>
                    <td><label>Çoğunlukla Doğru</label></td>
                    <td><label>Bilmiyorum </label></td>
                    <td><label>Çoğunlukla Yanlış </label></td>
                    <td><label>Kesinlikle Yanlış</label></td>
                  </tr>

                  <tr>
                    <td>33. Diğer insanlardan biraz daha kolay hastalanıyor gibiyim</td>
                    <td>
                      <?php
                      $sql = "select count(soru33) as 'sayi' from sorucevaplari where soru33='S33C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru33) as 'sayi' from sorucevaplari where soru33='S33C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru33) as 'sayi' from sorucevaplari where soru33='S33C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru33) as 'sayi' from sorucevaplari where soru33='S33C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru33) as 'sayi' from sorucevaplari where soru33='S33C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      34. Tanıdığım herkes kadar sağlıklıyım</td>
                    <td>
                      <?php
                      $sql = "select count(soru34) as 'sayi' from sorucevaplari where soru34='S34C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru34) as 'sayi' from sorucevaplari where soru34='S34C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru34) as 'sayi' from sorucevaplari where soru34='S34C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru34) as 'sayi' from sorucevaplari where soru34='S34C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru34) as 'sayi' from sorucevaplari where soru34='S34C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>35. Sağlığımın kötüye gitmesini bekliyorum</td>
                    <td>
                      <?php
                      $sql = "select count(soru35) as 'sayi' from sorucevaplari where soru35='S35C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru35) as 'sayi' from sorucevaplari where soru35='S35C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru35) as 'sayi' from sorucevaplari where soru35='S35C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru35) as 'sayi' from sorucevaplari where soru35='S35C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru35) as 'sayi' from sorucevaplari where soru35='S35C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>

                  <tr>
                    <td>36. Sağlığım mükemmel
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru36) as 'sayi' from sorucevaplari where soru36='S36C1' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru36) as 'sayi' from sorucevaplari where soru36='S36C2' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru36) as 'sayi' from sorucevaplari where soru36='S36C3' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru36) as 'sayi' from sorucevaplari where soru36='S36C4' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                    <td>
                      <?php
                      $sql = "select count(soru36) as 'sayi' from sorucevaplari where soru36='S36C5' $sqlek";
                      $result = mysqli_query($con, $sql);
                      $row = mysqli_fetch_assoc($result);
                      echo $row['sayi']; ?>
                    </td>
                  </tr>
                </table>
              </ol>
            </form>


          <?php
        } else
          echo "<script>alert('Yetkiniz yok.');</script>";

          ?>
          </div>
        </div>
      </div>
    </div>
  </div>