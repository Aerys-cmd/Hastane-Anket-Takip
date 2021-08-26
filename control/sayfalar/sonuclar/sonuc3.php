<?php error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<div class="content-wrapper">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-9">
      <div class="card card-primary">
        <div class="card-header">
          <h4 class="card-title">
            <h1 class="m-0"><span class="badge badge-light">Pittsburgh uyku kalite indeksi</h1></span></h1>
            <br>
            <label>Aşağıdaki sorulara vereceğiniz cevaplar için son bir ayı göz önünde bulundurun. </label>
            <br>
            <label>Lütfen tüm soruları cevaplandırın</label>
          </h4>
        </div>
        <div class="card-body">
          <form action="insert3.php" , method="POST">
            <?php
            if (empty($_GET['SonucID']))
              header("Location:main.php");
            else
              $SonucID = $_GET['SonucID'];
            ?>      
            <label> Adınız Soyadınız:</label>
            <?php

            $sql = "select * from  pittsburgh where ID=$SonucID";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            echo $row['Adi'];

            ?><br>
            <label> Tarih:</label>

            <?php
            echo $row['Tarih'];

            ?>

            <br>
            <label> 1.Geçen ay geceleri genellikle ne zaman yattınız?</label>
            <br>
            <?php


            echo $row['soru1'];

            ?>


            <br>

            <label>2.Geçen ay geceleri uykuya dalmanız genellikle ne kadar zaman (dakika) aldı?</label>
            <br>
            <?php


            echo $row['soru2'];

            ?>
            dakika

            <br>

            <label>3.Geçen ay sabahları genellikle ne zaman kalktınız?</label>
            <br>
            <?php


            echo $row['soru3'];

            ?>
            <br>

            <label>4.Geçen ay geceleri kaç saat uyudunuz (bu süre yatakta geçerdiğiniz süreden farklı olabilir)</label>
            <br>
            <?php


            echo $row['soru4'];

            ?>
            saat

            <br>

            <label>5.Geçen ay aşağıdaki durumlarda belirtilen uyku problemlerini ne sıklıkla yaşadınız?</label>
            <br>

            <table>
              <tr>
                <td>Haftada</td>
                <td>Hiç &nbsp;</td>
                <td>1'den az &nbsp;</td>
                <td>1-2 kez &nbsp;</td>
                <td>3'ten çok &nbsp;</td>
              </tr>


              <tr>
                <td>a.30 dakika içinde uykuya dalamadınız</td>
                &nbsp;


                <td>
                  <?php
                  if ($row['soru5'] == 1) {
                  ?>

                    <div class="icheck-primary">
                      <input type="radio" id="s5c1" name="s5" value="1" checked>
                      <label for="s5c1"></label>
                    </div>
                </td>
              <?php
                  }
              ?>

              <td>
                <?php
                if ($row['soru5'] == 2) {
                ?>
                  <div class="icheck-primary">
                    <input type="radio" id="s5c2" name="s5" value="2" checked>
                    <label for="s5c1"></label>
                  </div>
              </td>
            <?php
                }
            ?>

            <td>
              <?php
              if ($row['soru5'] == 3) {
              ?>
                <div class="icheck-primary">
                  <input type="radio" id="s5c3" name="s5" value="3" checked>
                  <label for="s5c1"></label>
                </div>
            </td>
          <?php
              }
          ?>

          <td>
            <?php
            if ($row['soru5'] == 4) {
            ?>
              <div class="icheck-primary">
                <input type="radio" id="s5c4" name="s5" value="4" checked>
                <label for="s5c1"></label>
              </div>
          </td>
        <?php
            }
        ?>


              </tr>

              <tr>
                <td>b.Gece yarısı veya sabah erkenden uyandınız </td>
                &nbsp;

                <?php



                ?>
                <td>
                  <?php
                  if ($row['soru6'] == 1) {
                  ?>

                    <div class="icheck-primary">
                      <input type="radio" id="s6c1" name="s6" value="1" checked>
                      <label for="s6c1"></label>
                    </div>
                </td>
              <?php
                  }
              ?>

              <td>
                <?php
                if ($row['soru6'] == 2) {
                ?>
                  <div class="icheck-primary">
                    <input type="radio" id="s6c2" name="s6" value="2" checked>
                    <label for="s6c2"></label>
                  </div>
              </td>
            <?php
                }
            ?>

            <td>
              <?php
              if ($row['soru6'] == 3) {
              ?>
                <div class="icheck-primary">
                  <input type="radio" id="s6c3" name="s6" value="3" checked>
                  <label for="s6c3"></label>
                </div>
            </td>
          <?php
              }
          ?>

          <td>
            <?php
            if ($row['soru6'] == 4) {
            ?>
              <div class="icheck-primary">
                <input type="radio" id="s6c4" name="s6" value="4" checked>
                <label for="s6c4"></label>
              </div>
          </td>
        <?php
            }
        ?>


              </tr>


              </tr>
              <tr>
                <td>c.Tuvalete gittiniz
                </td>
                &nbsp;


                <td>
                  <?php
                  if ($row['soru7'] == 1) {
                  ?>

                    <div class="icheck-primary">
                      <input type="radio" id="s7c1" name="s7" value="1" checked>
                      <label for="s7c1"></label>
                    </div>
                </td>
              <?php
                  }
              ?>

              <td>
                <?php
                if ($row['soru7'] == 2) {
                ?>
                  <div class="icheck-primary">
                    <input type="radio" id="s7c2" name="s7" value="2" checked>
                    <label for="s7c2"></label>
                  </div>
              </td>
            <?php
                }
            ?>

            <td>
              <?php
              if ($row['soru7'] == 3) {
              ?>
                <div class="icheck-primary">
                  <input type="radio" id="s7c3" name="s7" value="3" checked>
                  <label for="s7c3"></label>
                </div>
            </td>
          <?php
              }
          ?>

          <td>
            <?php
            if ($row['soru7'] == 4) {
            ?>
              <div class="icheck-primary">
                <input type="radio" id="s7c4" name="s7" value="4" checked>
                <label for="s7c4"></label>
              </div>
          </td>
        <?php
            }
        ?>


              </tr>


              </tr>
              <tr>
                <td>d.Rahat bir şekilde nefes alıp veremediniz</td>
                &nbsp;


                <td>
                  <?php
                  if ($row['soru8'] == 1) {
                  ?>

                    <div class="icheck-primary">
                      <input type="radio" id="s8c1" name="s8" value="1" checked>
                      <label for="s8c1"></label>
                    </div>
                </td>
              <?php
                  }
              ?>

              <td>
                <?php
                if ($row['soru8'] == 2) {
                ?>
                  <div class="icheck-primary">
                    <input type="radio" id="s8c2" name="s8" value="2" checked>
                    <label for="s8c2"></label>
                  </div>
              </td>
            <?php
                }
            ?>

            <td>
              <?php
              if ($row['soru8'] == 3) {
              ?>
                <div class="icheck-primary">
                  <input type="radio" id="s8c3" name="s8" value="3" checked>
                  <label for="s8c3"></label>
                </div>
            </td>
          <?php
              }
          ?>

          <td>
            <?php
            if ($row['soru8'] == 4) {
            ?>
              <div class="icheck-primary">
                <input type="radio" id="s8c4" name="s8" value="4" checked>
                <label for="s8c4"></label>
              </div>
          </td>
        <?php
            }
        ?>


              </tr>
              <tr>
                <td>e.Aşırı derecede üşüdünüz</td>
                &nbsp;
                <?php

                ?>
                <td>
                  <?php
                  if ($row['soru9'] == 1) {
                  ?>

                    <div class="icheck-primary">
                      <input type="radio" id="s9c1" name="s9" value="1" checked>
                      <label for="s9c1"></label>
                    </div>
                </td>
              <?php
                  }
              ?>

              <td>
                <?php
                if ($row['soru9'] == 2) {
                ?>
                  <div class="icheck-primary">
                    <input type="radio" id="s9c2" name="s9" value="2" checked>
                    <label for="s9c2"></label>
                  </div>
              </td>
            <?php
                }
            ?>

            <td>
              <?php
              if ($row['soru9'] == 3) {
              ?>
                <div class="icheck-primary">
                  <input type="radio" id="s9c3" name="s9" value="3" checked>
                  <label for="s9c3"></label>
                </div>
            </td>
          <?php
              }
          ?>

          <td>
            <?php
            if ($row['soru9'] == 4) {
            ?>
              <div class="icheck-primary">
                <input type="radio" id="s9c4" name="s9" value="4" checked>
                <label for="s9c4"></label>
              </div>
          </td>
        <?php
            }
        ?>



              </tr>
              <tr>
                <td>f.Aşırı derecede sıcaklık hissettiniz</td>
                &nbsp;


                <td>
                  <?php
                  if ($row['soru10'] == 1) {
                  ?>

                    <div class="icheck-primary">
                      <input type="radio" id="s10c1" name="s10" value="1" checked>
                      <label for="s10c1"></label>
                    </div>
                </td>
              <?php
                  }
              ?>

              <td>
                <?php
                if ($row['soru10'] == 2) {
                ?>
                  <div class="icheck-primary">
                    <input type="radio" id="s10c2" name="s10" value="2" checked>
                    <label for="s10c2"></label>
                  </div>
              </td>
            <?php
                }
            ?>

            <td>
              <?php
              if ($row['soru10'] == 3) {
              ?>
                <div class="icheck-primary">
                  <input type="radio" id="s10c3" name="s10" value="3" checked>
                  <label for="s10c3"></label>
                </div>
            </td>
          <?php
              }
          ?>

          <td>
            <?php
            if ($row['soru10'] == 4) {
            ?>
              <div class="icheck-primary">
                <input type="radio" id="s10c4" name="s10" value="4" checked>
                <label for="s10c4"></label>
              </div>
          </td>
        <?php
            }
        ?>


              </tr>
              <tr>
                <td>g.Kötü rüyalar gördünüz</td>
                &nbsp;

                <td>
                  <?php
                  if ($row['soru11'] == 1) {
                  ?>

                    <div class="icheck-primary">
                      <input type="radio" id="s11c1" name="s11" value="1" checked>
                      <label for="s11c1"></label>
                    </div>
                </td>
              <?php
                  }
              ?>

              <td>
                <?php
                if ($row['soru11'] == 2) {
                ?>
                  <div class="icheck-primary">
                    <input type="radio" id="s11c2" name="s11" value="2" checked>
                    <label for="s11c2"></label>
                  </div>
              </td>
            <?php
                }
            ?>

            <td>
              <?php
              if ($row['soru11'] == 3) {
              ?>
                <div class="icheck-primary">
                  <input type="radio" id="s11c3" name="s11" value="3" checked>
                  <label for="s11c3"></label>
                </div>
            </td>
          <?php
              }
          ?>

          <td>
            <?php
            if ($row['soru11'] == 4) {
            ?>
              <div class="icheck-primary">
                <input type="radio" id="s11c4" name="s11" value="4" checked>
                <label for="s11c4"></label>
              </div>
          </td>
        <?php
            }
        ?>


              </tr>
              <tr>
                <td>h.Ağrı duydunuz</td>
                &nbsp;


                <td>
                  <?php
                  if ($row['soru12'] == 1) {
                  ?>

                    <div class="icheck-primary">
                      <input type="radio" id="s12c1" name="s12" value="1" checked>
                      <label for="s12c1"></label>
                    </div>
                </td>
              <?php
                  }
              ?>

              <td>
                <?php
                if ($row['soru12'] == 2) {
                ?>
                  <div class="icheck-primary">
                    <input type="radio" id="s12c2" name="s12" value="2" checked>
                    <label for="s12c2"></label>
                  </div>
              </td>
            <?php
                }
            ?>

            <td>
              <?php
              if ($row['soru12'] == 3) {
              ?>
                <div class="icheck-primary">
                  <input type="radio" id="s12c3" name="s12" value="3" checked>
                  <label for="s12c3"></label>
                </div>
            </td>
          <?php
              }
          ?>

          <td>
            <?php
            if ($row['soru12'] == 4) {
            ?>
              <div class="icheck-primary">
                <input type="radio" id="s12c4" name="s12" value="4" checked>
                <label for="s12c4"></label>
              </div>
          </td>
        <?php
            }
        ?>


              </tr>
              <tr>
                <td>i.Diğer nedenler</td>
                &nbsp;

                <td>
                  <?php
                  if ($row['soru13'] == 1) {
                  ?>

                    <div class="icheck-primary">
                      <input type="radio" id="s13c1" name="s13" value="1" checked>
                      <label for="s13c1"></label>
                    </div>
                </td>
              <?php
                  }
              ?>

              <td>
                <?php
                if ($row['soru13'] == 2) {
                ?>
                  <div class="icheck-primary">
                    <input type="radio" id="s13c2" name="s13" value="2" checked>
                    <label for="s13c2"></label>
                  </div>
              </td>
            <?php
                }
            ?>

            <td>
              <?php
              if ($row['soru13'] == 3) {
              ?>
                <div class="icheck-primary">
                  <input type="radio" id="s13c3" name="s13" value="3" checked>
                  <label for="s13c3"></label>
                </div>
            </td>
          <?php
              }
          ?>

          <td>
            <?php
            if ($row['soru13'] == 4) {
            ?>
              <div class="icheck-primary">
                <input type="radio" id="s13c4" name="s13" value="4" checked>
                <label for="s13c4"></label>
              </div>
          </td>
        <?php
            }
        ?>


              </tr>
              <tr>
                <td>j.Öksürdünüz veya gürültülü bir şekilde horladınız</td>
                &nbsp;

                <td>
                  <?php
                  if ($row['soru14'] == 1) {
                  ?>

                    <div class="icheck-primary">
                      <input type="radio" id="s14c1" name="s14" value="1" checked>
                      <label for="s14c1"></label>
                    </div>
                </td>
              <?php
                  }
              ?>

              <td>
                <?php
                if ($row['soru14'] == 2) {
                ?>
                  <div class="icheck-primary">
                    <input type="radio" id="s14c2" name="s14" value="2" checked>
                    <label for="s14c2"></label>
                  </div>
              </td>
            <?php
                }
            ?>

            <td>
              <?php
              if ($row['soru14'] == 3) {
              ?>
                <div class="icheck-primary">
                  <input type="radio" id="s14c3" name="s14" value="3" checked>
                  <label for="s14c3"></label>
                </div>
            </td>
          <?php
              }
          ?>

          <td>
            <?php
            if ($row['soru14'] == 4) {
            ?>
              <div class="icheck-primary">
                <input type="radio" id="s14c4" name="s14" value="4" checked>
                <label for="s14c4"></label>
              </div>
          </td>
        <?php
            }
        ?>


              </tr>
            </table>
            <br>
            <label>6.Geçen ay uyku kalitenizi bütünü ile nasıl değerlendirirsiniz.</label>





            <div class="icheck-primary">
              Çok iyi
              <?php
              if ($row['soru15'] == 1) {
              ?>
                <input type="radio" id="s15c1" name="s15" value="1" checked>
                <label for="s15c1"></label>
            </div>
          <?php
              }
          ?>
          <div class="icheck-primary">
            Oldukça iyi
            <?php
            if ($row['soru15'] == 2) {
            ?>
              <input type="radio" id="s15c2" name="s15" value="2" checked>
              <label for="s15c2"></label>
          </div>
        <?php
            }
        ?>
        <div class="icheck-primary">
          Oldukça kötü
          <?php
          if ($row['soru15'] == 3) {
          ?>
            <input type="radio" id="s15c3" name="s15" value="3" checked>
            <label for="s15c3"></label>
        </div>
      <?php
          }
      ?>
      <div class="icheck-primary">
        Çok kötü
        <?php
        if ($row['soru15'] == 4) {
        ?>
          <input type="radio" id="s15c4" name="s15" value="4" checked>
          <label for="s15c4"></label>
      </div>
    <?php
        }
    ?>
    <br>
    <br>
    <label>7.Geçen ay uyumanıza yardımcı olması için ne sıklıkta(reçeteli veya reçetesiz) uyku ilacı aldınız?</label>


    <br>



    <div class="icheck-primary">
      Hiç
      <?php
      if ($row['soru16'] == 1) {
      ?>
        <input type="radio" id="s16c1" name="s16" value="1" checked>
        <label for="s16c1"></label>
    </div>
  <?php
      }
  ?>
  <div class="icheck-primary">
    Haftada 1'den az
    <?php
    if ($row['soru16'] == 2) {
    ?>
      <input type="radio" id="s16c2" name="s16" value="2" checked>
      <label for="s16c2"></label>
  </div>
<?php
    }
?>
<div class="icheck-primary">
  Haftada 1-2 kez
  <?php
  if ($row['soru16'] == 3) {
  ?>
    <input type="radio" id="s16c3" name="s16" value="3" checked>
    <label for="s16c3"></label>
</div>
<?php
  }
?>
<div class="icheck-primary">
  Haftada 3'ten çok
  <?php
  if ($row['soru16'] == 4) {
  ?>
    <input type="radio" id="s16c4" name="s16" value="4" checked>
    <label for="s16c4"></label>
</div>
<?php
  }
?>
<br>



<label>8.Geçen ay araba sürerken, yemek yerken veya sosyal bir aktivite esnasında ne kadar sıklıkla uyanık kalmak için zorlandınız?</label>



<div class="icheck-primary">
  Hiç
  <?php
  if ($row['soru17'] == 1) {
  ?>
    <input type="radio" id="s17c1" name="s17" value="1" checked>
    <label for="s17c1"></label>
</div>
<?php
  }
?>
<div class="icheck-primary">
  Haftada 1'den az
  <?php
  if ($row['soru17'] == 2) {
  ?>
    <input type="radio" id="s17c2" name="s17" value="2" checked>
    <label for="s17c2"></label>
</div>
<?php
  }
?>
<div class="icheck-primary">
  Haftada 1-2 kez
  <?php
  if ($row['soru17'] == 3) {
  ?>
    <input type="radio" id="s17c3" name="s17" value="3" checked>
    <label for="s17c3"></label>
</div>
<?php
  }
?>
<div class="icheck-primary">
  Haftada 3'ten çok
  <?php
  if ($row['soru17'] == 4) {
  ?>
    <input type="radio" id="s17c4" name="s17" value="4" checked>
    <label for="s17c4"></label>
</div>
<?php
  }
?>
<br>
<br>
<label>9.Geçen ay durum işlerinizi yeteri kadar istekle yapmanızda ne derecede problem oluşturdu?</label>




<div class="icheck-primary">
  Hiç problem oluşturmadı
  <?php
  if ($row['soru18'] == 1) {
  ?>
    <input type="radio" id="s18c1" name="s18" value="1" checked>
    <label for="s18c1"></label>
</div>
<?php
  }
?>
<div class="icheck-primary">
  Bir dereceye kadar problem oluşturdu
  <?php
  if ($row['soru18'] == 2) {
  ?>
    <input type="radio" id="s18c2" name="s18" value="2" checked>
    <label for="s18c2"></label>
</div>
<?php
  }
?>
<div class="icheck-primary">
  Yalnızca çok az bir problem oluşturdu
  <?php
  if ($row['soru18'] == 3) {
  ?>
    <input type="radio" id="s18c3" name="s18" value="3" checked>
    <label for="s18c3"></label>
</div>
<?php
  }
?>
<div class="icheck-primary">
  Çok büyük bir problem oluşturdu
  <?php
  if ($row['soru18'] == 4) {
  ?>
    <input type="radio" id="s18c4" name="s18" value="4" checked>
    <label for="s18c4"></label>
</div>
<?php
  }
?>
<br>
<br>
<label>10.Bir yatak partneriniz veya oda arkadaşınız var mı?</label>


<br>

<div class="icheck-primary">
  Bir yatak partneri veya oda arkadaşı yok
  <?php
  if ($row['soru19'] == 1) {
  ?>
    <input type="radio" id="s19c1" name="s19" value="1" checked>
    <label for="s19c1"></label>
</div>
<?php
  }
?>
<div class="icheck-primary">
  Partneri ayrı odada fakat aynı yatakta değil
  <?php
  if ($row['soru19'] == 2) {
  ?>
    <input type="radio" id="s19c2" name="s19" value="2" checked>
    <label for="s19c2"></label>
</div>
<?php
  }
?>
<div class="icheck-primary">
  Diğer odada bir partneri veya oda arkadaşı var
  <?php
  if ($row['soru19'] == 3) {
  ?>
    <input type="radio" id="s19c3" name="s19" value="3" checked>
    <label for="s19c3"></label>
</div>
<?php
  }
?>
<div class="icheck-primary">
  Partner aynı yatakta
  <?php
  if ($row['soru19'] == 4) {
  ?>
    <input type="radio" id="s19c4" name="s19" value="4" checked>
    <label for="s19c4"></label>
</div>
<?php
  }
?>
<br>
<br>
<label>11.Eğer bir oda arkadaşı veya yatak partneriniz varsa son bir ayda ona aşağıdaki durumları ne sıklıkta yaşadığınızı sorun</label>
<br>
<table>
  <tr>
    <td>Haftada</td>
    <td>Hiç &nbsp;</td>
    <td>1'den az &nbsp;</td>
    <td>1-2 kez &nbsp;</td>
    <td>3'ten çok &nbsp;</td>
  </tr>


  <tr>
    <td>a.Eşimin/partnerimin cinsel yaratıcılığı</td>
    &nbsp;

    <td>
      <?php
      if ($row['soru20'] == 1) {
      ?>

        <div class="icheck-primary">
          <input type="radio" id="s20c1" name="s20" value="1" checked>
          <label for="s20c1"></label>
        </div>
    </td>
  <?php
      }
  ?>

  <td>
    <?php
    if ($row['soru20'] == 2) {
    ?>
      <div class="icheck-primary">
        <input type="radio" id="s20c2" name="s20" value="2" checked>
        <label for="s20c2"></label>
      </div>
  </td>
<?php
    }
?>

<td>
  <?php
  if ($row['soru20'] == 3) {
  ?>
    <div class="icheck-primary">
      <input type="radio" id="s20c3" name="s20" value="3" checked>
      <label for="s20c3"></label>
    </div>
</td>
<?php
  }
?>

<td>
  <?php
  if ($row['soru20'] == 4) {
  ?>
    <div class="icheck-primary">
      <input type="radio" id="s20c4" name="s20" value="4" checked>
      <label for="s20c4"></label>
    </div>
</td>
<?php
  }
?>


  </tr>
  <tr>
    <td>b.Eşimin/partnerimin cinsel ilişkiye hazır olması</td>
    &nbsp;

    <td>
      <?php
      if ($row['soru21'] == 1) {
      ?>

        <div class="icheck-primary">
          <input type="radio" id="s21c1" name="s21" value="1" checked>
          <label for="s21c1"></label>
        </div>
    </td>
  <?php
      }
  ?>

  <td>
    <?php
    if ($row['soru21'] == 2) {
    ?>
      <div class="icheck-primary">
        <input type="radio" id="s21c2" name="s21" value="2" checked>
        <label for="s21c2"></label>
      </div>
  </td>
<?php
    }
?>

<td>
  <?php
  if ($row['soru21'] == 3) {
  ?>
    <div class="icheck-primary">
      <input type="radio" id="s21c3" name="s21" value="3" checked>
      <label for="s21c3"></label>
    </div>
</td>
<?php
  }
?>

<td>
  <?php
  if ($row['soru21'] == 4) {
  ?>
    <div class="icheck-primary">
      <input type="radio" id="s21c4" name="s21" value="4" checked>
      <label for="s21c4"></label>
    </div>
</td>
<?php
  }
?>


  </tr>
  <tr>
    <td>c.Cinsel ilişkimin çeşitliliği</td>
    &nbsp;


    <td>
      <?php
      if ($row['soru22'] == 1) {
      ?>

        <div class="icheck-primary">
          <input type="radio" id="s22c1" name="s22" value="1" checked>
          <label for="s22c1"></label>
        </div>
    </td>
  <?php
      }
  ?>

  <td>
    <?php
    if ($row['soru22'] == 2) {
    ?>
      <div class="icheck-primary">
        <input type="radio" id="s22c2" name="s22" value="2" checked>
        <label for="s22c2"></label>
      </div>
  </td>
<?php
    }
?>

<td>
  <?php
  if ($row['soru22'] == 3) {
  ?>
    <div class="icheck-primary">
      <input type="radio" id="s22c3" name="s22" value="3" checked>
      <label for="s22c3"></label>
    </div>
</td>
<?php
  }
?>

<td>
  <?php
  if ($row['soru22'] == 4) {
  ?>
    <div class="icheck-primary">
      <input type="radio" id="s22c4" name="s22" value="4" checked>
      <label for="s22c4"></label>
    </div>
</td>
<?php
  }
?>


  </tr>
  <tr>
    <td>d.Cinsel ilişkimin sıklığı</td>
    &nbsp;

    <td>
      <?php
      if ($row['soru23'] == 1) {
      ?>

        <div class="icheck-primary">
          <input type="radio" id="s23c1" name="s23" value="1" checked>
          <label for="s23c1"></label>
        </div>
    </td>
  <?php
      }
  ?>

  <td>
    <?php
    if ($row['soru23'] == 2) {
    ?>
      <div class="icheck-primary">
        <input type="radio" id="s23c2" name="s23" value="2" checked>
        <label for="s23c2"></label>
      </div>
  </td>
<?php
    }
?>

<td>
  <?php
  if ($row['soru23'] == 3) {
  ?>
    <div class="icheck-primary">
      <input type="radio" id="s23c3" name="s23" value="3" checked>
      <label for="s23c3"></label>
    </div>
</td>
<?php
  }
?>

<td>
  <?php
  if ($row['soru23'] == 4) {
  ?>
    <div class="icheck-primary">
      <input type="radio" id="s23c4" name="s23" value="4" checked>
      <label for="s23c4"></label>
    </div>
</td>
<?php
  }
?>
  </tr>
  <tr>
    <td>e.Diğer huzursuzluklarınız</td>
    &nbsp;

    <td>
      <?php
      if ($row['soru24'] == 1) {
      ?>

        <div class="icheck-primary">
          <input type="radio" id="s24c1" name="s24" value="1" checked>
          <label for="s24c1"></label>
        </div>
    </td>
  <?php
      }
  ?>

  <td>
    <?php
    if ($row['soru24'] == 2) {
    ?>
      <div class="icheck-primary">
        <input type="radio" id="s24c2" name="s24" value="2" checked>
        <label for="s24c2"></label>
      </div>
  </td>
<?php
    }
?>

<td>
  <?php
  if ($row['soru24'] == 3) {
  ?>
    <div class="icheck-primary">
      <input type="radio" id="s24c3" name="s24" value="3" checked>
      <label for="s24c3"></label>
    </div>
</td>
<?php
  }
?>

<td>
  <?php
  if ($row['soru24'] == 4) {
  ?>
    <div class="icheck-primary">
      <input type="radio" id="s24c4" name="s24" value="4" checked>
      <label for="s24c4"></label>
    </div>
</td>
<?php
  }
?>
  </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>