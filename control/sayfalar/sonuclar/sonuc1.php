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
              <h1 class="m-0"><span class="badge badge-light">Barthel Günlük Yaşam Aktiviteleri İndeksi</h1></span></h1>
            </h4>
          </div>
          <div class="card-body">
            <form action="insert.php" , method="POST">
              <?php
              ?>
              <ol>
                <table>
                  <thead>
                    1-Beslenme
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Tam bağımsız yemek yemek için gerekli aletleri kullanabilir.</label></td>
                      <td><?php
                          $sql = "select count(soru1) as 'sayi' from sorular where soru1='10' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                    <br>
                    <tr>
                      <td><label>Bir miktar yardıma ihtiyaç duyar.</label></td>
                      <td><?php
                          $sql = "select count(soru1) as 'sayi' from sorular where soru1='5' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Tam Bağımlıdır.</label></td>
                      <td><?php
                          $sql = "select count(soru1) as 'sayi' from sorular where soru1='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table>
                  <thead>
                    2-Yıkanma
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Hasta yardımsız olarak küvette yıkanabilir, duş alabilir ya da keselenebilir.</label></td>
                      <td><?php
                          $sql = "select count(soru2) as 'sayi' from sorular where soru2='5' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Yardıma ihtiyacı vardır</label></td>
                      <td><?php
                          $sql = "select count(soru2) as 'sayi' from sorular where soru2='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table>
                  <thead>
                    3-Kendine Bakım
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Elini yüzünü yıkayabilir dişlerini fırçalayabilir, tıraş olabilir, makyaj yapabilir.</label></td>
                      <td><?php
                          $sql = "select count(soru3) as 'sayi' from sorular where soru3='5' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Kişisel bakımda yardıma ihtiyaç duyar.</label></td>
                      <td><?php
                          $sql = "select count(soru3) as 'sayi' from sorular where soru3='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table>
                  <thead>
                    4-Giyinip Soyunma
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Hasta giyinip soyunabilir. Ayakkabı bağlarını çözebilir.</label></td>
                      <td><?php
                          $sql = "select count(soru4) as 'sayi' from sorular where soru4='10' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Yardıma gereksinim duyar (İşin en az %50’sini kendisi yapabilmelidir.)</label></td>
                      <td><?php
                          $sql = "select count(soru4) as 'sayi' from sorular where soru4='5' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Tam Bağımlıdır.</label></td>
                      <td><?php
                          $sql = "select count(soru4) as 'sayi' from sorular where soru4='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table>
                  <thead>
                    5-Bağırsak Bakımı
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Suppozituvar kullanabilir ya da gerekirse lavman yapabilir.</label></td>
                      <td><?php
                          $sql = "select count(soru5) as 'sayi' from sorular where soru5='10' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Hasta belirtilen aktiviteler için yardıma gereksinim duyar.</label></td>
                      <td><?php
                          $sql = "select count(soru5) as 'sayi' from sorular where soru5='5' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>İnkontinansı mevcuttur.</label></td>
                      <td><?php
                          $sql = "select count(soru5) as 'sayi' from sorular where soru5='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table>
                  <thead>
                    6-Mesane Bakımı
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Hasta gece ve gündüz mesanesini kontrol edebilmelidir. Sonda bakımını bağımsız bir şekilde kendisi yapabilmelidir.</label></td>
                      <td><?php
                          $sql = "select count(soru5) as 'sayi' from sorular where soru5='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Bazen tuvalete yetişemez ya da sürgüyü bekleyemez altına kaçırır.</label></td>
                      <td><?php
                          $sql = "select count(soru6) as 'sayi' from sorular where soru6='5' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>İnkont inandır veya kateterlidir ve mesanesini kontrol edemez.</label></td>
                      <td><?php
                          $sql = "select count(soru6) as 'sayi' from sorular where soru6='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table>
                  <thead>
                    7-Tuvalet Kullanımı
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Duvardan ya da bardan destek alabilir tuvalet kâğıdını kendi kullanabilir.</label></td>
                      <td><?php
                          $sql = "select count(soru7) as 'sayi' from sorular where soru7='10' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                    <br>
                    <tr>
                      <td><label>Elbiselerini giyip çıkarmak, tuvalet kâğıdını kullanmak için bir miktar yardım</label></td>
                      <td><?php
                          $sql = "select count(soru7) as 'sayi' from sorular where soru7='5' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                    <br>
                    <tr>
                      <td><label>Tam Bağımlıdır.</label></td>
                      <td><?php
                          $sql = "select count(soru7) as 'sayi' from sorular where soru7='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table>
                  <thead>
                    8-Tekerlekli Sandalyeden Yatağa Ve Tersi Transferler
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Tam bağımsızdır.</label></td>
                      <td><?php
                          $sql = "select count(soru8) as 'sayi' from sorular where soru8='15' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Geçişler sırasında minimal yardım alır (sözel veya fiziksel).</label></td>
                      <td><?php
                          $sql = "select count(soru8) as 'sayi' from sorular where soru8='10' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Tek başına yatakta oturma pozisyonuna geçebilir ama geçiş için yardım alır.</label></td>
                      <td><?php
                          $sql = "select count(soru8) as 'sayi' from sorular where soru8='5' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Tam Bağımlıdır.</label></td>
                      <td><?php
                          $sql = "select count(soru8) as 'sayi' from sorular where soru8='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table>
                  <thead>
                    9-Düzgün yüzeyde yürüme Tekerlekli sandalyeyi kullanabilme (uygunsa)
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Hasta yardımsız olarak 45 metre yürüyebilir. Bireys, baston, koltuk değneği, yürüteç kullanabilir (Bireys kullanıyorsa kilitleyip açabilmeli, oturup kalkabilmeli, mekanik destekleri yardımsız kullanabilmelidir.)</label></td>
                      <td><?php
                          $sql = "select count(soru9) as 'sayi' from sorular where soru9='15' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Hasta bir kişinin sözel veya fiziksel yardımıyla 45 metre yürüyebilir.</label></td>
                      <td><?php
                          $sql = "select count(soru9) as 'sayi' from sorular where soru9='10' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Hasta yürüyemez ama tekerlekli sandalyeyi kullanabilir. Hasta köşeleri dönebilir. Yatağa, tuvalete yanaşabilir.</label></td>
                      <td><?php
                          $sql = "select count(soru9) as 'sayi' from sorular where soru9='5' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Tekerlekli sandalyede oturabilir ancak kullanamaz.</label></td>
                      <td><?php
                          $sql = "select count(soru9) as 'sayi' from sorular where soru9='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table>
                  <thead>
                    10-Merdiven inip çıkma
                  </thead>
                  <tbody>
                    <tr>
                      <td><label>Bağımsız inip çıkabilir, ancak destek kullanabilir (tırabzan, baston, koltuk değneği…)</label></td>
                      <td><?php
                          $sql = "select count(soru10) as 'sayi' from sorular where soru10='10' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Hasta yukardaki işleri yapmak için yardıma veya gözetime ihtiyaç duyar.</label></td>
                      <td><?php
                          $sql = "select count(soru10) as 'sayi' from sorular where soru10='5' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr><br>
                    <tr>
                      <td><label>Yapamaz.</label></td>
                      <td><?php
                          $sql = "select count(soru10) as 'sayi' from sorular where soru10='0' $sqlek";
                          $result = mysqli_query($con, $sql);
                          $row = mysqli_fetch_assoc($result);
                          echo $row['sayi'];
                          ?></td>
                    </tr>
                  </tbody>
                </table>
              </ol>
              <br>
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