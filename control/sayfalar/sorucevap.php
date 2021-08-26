<?php
if (!(yetkiDondur($_SESSION['YetkiNo'], 2) || yetkiDondur($_SESSION['YetkiNo'], 4) || yetkiDondur($_SESSION['YetkiNo'], 5)))
  header("Location: main.php");
else if (!(isset($_GET['SoruID'])))
  header("Location: main.php");
?>


<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="card-title">Soru Cevap Panel</h4>
          </div>
          <div class="card-body">
            <div>
              <div class="card direct-chat direct-chat-primary">
              </div>
              <?php
              $sql = "select * from soru where ID={$_GET['SoruID']}";
              $result = mysqli_query($con, $sql);
              if (mysqli_num_rows($result)) {
                $row = mysqli_fetch_assoc($result);
              ?>
                <div class="card direct-chat direct-chat-primary">
                  <div class="card-header">
                    <h2 class="card-title"> <?php echo $row['SoruBaslik']; ?></h2>
                    <div class="card-tools">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="direct-chat-messages">
                      <?php
                      $sql1 = "select * from kullanici where ID={$row['YollayanID']}";
                      $result1 = mysqli_query($con, $sql1);
                      $data = mysqli_fetch_assoc($result1);
                      ?>

                      <?php
                      $sql1 = "select * from cevap where SoruID={$_GET['SoruID']} Order By ID DESC";
                      $result1 = mysqli_query($con, $sql1);
                      while ($cevap = mysqli_fetch_assoc($result1)) {
                        if ($cevap['YollayanID'] == $_SESSION['ID'])
                          $clss = "direct-chat-msg right";
                        else
                          $clss = "direct-chat-msg";

                        $sql2 = "select * from kullanici where ID={$cevap['YollayanID']}";
                        $result2 = mysqli_query($con, $sql2);
                        $cevapad = mysqli_fetch_assoc($result2);
                      ?>
                        <div class="<?php echo $clss; ?>">
                          <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                          </div>
                          <div class="direct-chat-text">
                            <?php
                            echo $cevap['CevapIcerik'];
                            ?>
                            <h5 style="float:right"><?php echo $cevapad['KullaniciAd'] . " " . $cevapad['KullaniciSoyad']; ?></h5>
                          </div>
                        </div>


                      <?php
                      }
                      if ($row['YollayanID'] == $_SESSION['ID'])
                        $clss = "direct-chat-msg right";
                      else
                        $clss = "direct-chat-msg";
                      ?>

                      <div class="<?php echo $clss; ?>">
                        <div class="direct-chat-text">
                          <div class="direct-chat-infos clearfix">
                          </div>
                          <?php echo $row['SoruIcerik'] ?>
                          <h5 style="float:right"><?php echo $data['KullaniciAd'] . " " . $data['KullaniciSoyad']; ?></h5>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <form method="POST" action="">
                        <div class="input-group">
                          <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                          <span class="input-group-append">
                            <button name="sendButton" value="<?php echo $row['ID']; ?>" type="submit" class="btn btn-primary">Gönder</button>
                          </span>

                        </div>
                        <br>
                      </form>
                    </div>

                  </div>
                <?php
              }
                ?>

                </div>
                <div>
                  <?php
                  if (isset($_GET['AnswerAdded'])) {
                    $str = $_GET['AnswerAdded'] == "yes" ? " Cevap başarıyla eklendi." : "Cevap Eklenemedi.";
                    echo "<h1 class=" . "m-0" . "><span class=" . "badge badge-light" . ">" . $str . "</span></h1>";
                  }
                  ?>
                </div>

            </div>
          </div>
        </div>

      </div>

    </div>

  </div><!-- /.container-fluid -->


</div>

<?php
if (isset($_POST['sendButton'])) {
  $SoruID = $_POST['sendButton'];
  $Mesaj = $_POST['message'];
  $ID = $_SESSION['ID'];
  $sql = "insert into cevap(CevapIcerik,SoruID,YollayanID) values ('$Mesaj',$SoruID,$ID)";
  if (mysqli_query($con, $sql)) {
    header("Location: main.php?sayfaadi=sorucevap&SoruID=" . $_GET['SoruID']) . "&AnswerAdded=yes";
    if ($_SESSION['YetkiNo'] == 2) {
      $sql = "update soru set OkunduMu=1 where ID=" . $SoruID;
      mysqli_query($con, $sql);
    } else {
      $sql = "update soru set OkunduMu=0 where ID=" . $SoruID;
      mysqli_query($con, $sql);
    }
  } else {
    header("Location: main.php?sayfaadi=sorucevap&SoruID=" . $_GET['SoruID']) . "&AnswerAdded=no";
  }
}



?>

<!-- /.content-wrapper -->