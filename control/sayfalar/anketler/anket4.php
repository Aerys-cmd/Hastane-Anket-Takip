<?php
if (yetkiDondur($_SESSION['YetkiNo'], 4)) {
?>

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
          <form action="sayfalar/anketekle/insert.php" , method="POST">
            <div class="card-body">
              <br>

              <label>ADI SOYADI</label>
              <br>
              <div class="input-group">
                <input type="text" name="s1" class="form-control" id="s1" placeholder="ADI SOYADI">
              </div>


              <label>TARİH </label>
              <br>
              <div class="input-group">
                <input type="text" name="s2" class="form-control" id="s2" placeholder="GG/AA/YYYY">
              </div>


              <label>YAŞ</label>
              <br>
              <div class="input-group">
                <input type="text" class="form-control" name="s3" id="s3" placeholder="YAŞ ">
              </div>


              <label>BOY/KİLO</label>
              <br>
              <div class="input-group">
                <input type="text" class="form-control" name="s4" id="s4" placeholder="BOY/KİLO">
              </div>


              <label>VKİ</label>
              <br>
              <div class="input-group">
                <input type="text" class="form-control" name="s5" id="s5" placeholder="VKİ ">
              </div>


              <label>CİNSİYET</label>
              <br>
              <div class="input-group">
                <input type="text" class="form-control" name="s6" id="s6" placeholder=" CİNSİYET">
              </div>


              <label>KRONİK HASTALIKLAR</label>
              <br>
              <div class="input-group">
                <input type="text" class="form-control" name="s7" id="s7" placeholder="KRONİK HASTALIKLAR">
              </div>


              <label>KULLANDIĞI İLAÇLAR</label>
              <br>
              <div class="input-group">
                <input type="text" class="form-control" name="s8" id="s8" placeholder="KULLANDIĞI İLAÇLAR">
              </div>


              <label>SİGARA KULLANIYOR MUSUNUZ?</label>
              <br>
              <div class="input-group">
                <input type="text" class="form-control" name="s9s1" id="s9s1" placeholder="EVET İSE  PAKET*YIL">
                <br>
                <input type="text" class="form-control" name="s9s2" id="s9s2" placeholder=" HAYIR İSE 0 GİRİNİZ. ">
              </div>


              <label>ALKOL KULLANIMI</label>
              <br>
              <div class="form-group">

                <div class="icheck-primary">
                  <input type="radio" id="s10s1" name="s10" value="EVET">
                  <label for="s10s1">EVET</label>
                </div>



                <div class="icheck-primary">
                  <input type="radio" id="s10s2" name="s10" value="HAYIR">
                  <label for="s10s2">HAYIR</label>
                </div>



                <label>KAÇINCI SINIF FTR ÖĞRENCİSİ</label>
                <br>
                <div class="input-group">
                  <input type="text" class="form-control" name="s11" id="s11" placeholder="SINIF ">
                </div>


                <label> HASTANIN TANISI</label>
                <br>
                <div class="input-group">
                  <input type="text" class="form-control" name="s12" id="s12" placeholder="HASTANIN TANISI">
                </div>


                <label>HASTALIK DURASYONU </label>
                <br>
                <div class="input-group">
                  <input type="text" class="form-control" name="s13" id="s13" placeholder="HASTALIK DURASYONU">
                </div>

                <label>BU ÇALIŞMADAN MEMNUN MUSUNUZ?</label>
                <br>

                <label>1 HİÇ MEMNUN DEĞİLİM --------- 10 ÇOK MEMNUNUM</label>
                <div class="slidecontainer">
                  <input type="range" min="1" max="10" value="5" class="custom-range" name="myRange" id="myRange">
                  <p>Puanınız:
                    <span id="demo">
                    </span>
                  </p>
                </div>



                <label> SİZCE BU ÇALIŞMA YAYGINLAŞTIRILMALI MIDIR? </label>
                <br>
                <div class="input-group">
                  <label>EVET &nbsp; &nbsp; </label>
                  <input type="text" class="form-control" name="s15" id="s15s1" placeholder="NEDENİ İLE AÇIKLAYINIZ">
                </div>
                <br>
                <div class="input-group">
                  <label>HAYIR &nbsp;</label>
                  <input type="text" class="form-control" name="s15" id="s15s2" placeholder="NEDENİ İLE AÇIKLAYINIZ">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <nav id="mainav" class="fl_right">
                <input style="margin: 5px" type="submit" class="btn btn-block btn-primary" name="btn_gndr4" value="Gönder">
              </nav>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
} else
  echo "<script>alert('Yetkiniz yok.');</script>";
?>