<?php
if (yetkiDondur($_SESSION['YetkiNo'], 5)) {
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
          <form action="sayfalar/anketekle/insert.php" method="POST">
            <div class="card-body">
              <br>



              <label>ADI SOYADI</label>
              <div class="input-group">
                <input type="text" name="s1" class="form-control" id="s1" placeholder="ADI SOYADI">
              </div>



              <label>TARİH </label>
              <div class="input-group">
                <input type="text" name="s2" class="form-control" id="s2" placeholder="GG/AA/YYYY">
              </div>


              <label>YAŞ</label>
              <div class="input-group">
                <input type="text" class="form-control" name="s3" id="s3" placeholder="YAŞ ">
              </div>


              <label>BOY/KİLO</label>
              <div class="input-group">
                <input type="text" class="form-control" name="s4" id="s4" placeholder="BOY/KİLO">
              </div>


              <label>VKİ</label>
              <div class="input-group">
                <input type="text" class="form-control" name="s5" id="s5" placeholder="VKİ ">
              </div>


              <label>CİNSİYET</label>
              <div class="input-group">
                <input type="text" class="form-control" name="s6" id="s6" placeholder=" CİNSİYET">
              </div>


              <label>EĞİTİM DURUMU</label>
              <div class="input-group">
                <input type="text" class="form-control" name="s7" id="s7" placeholder="EĞİTİM DURUMU">
              </div>

              <label>KRONİK HASTALIKLAR</label>
              <div class="input-group">
                <input type="text" class="form-control" name="s8" id="s8" placeholder="KRONİK HASTALIKLAR">
              </div>


              <label>KULLANDIĞI İLAÇLAR</label>
              <div class="input-group">
                <input type="text" class="form-control" name="s9" id="s9" placeholder="KULLANDIĞI İLAÇLAR">
              </div>


              <label>SİGARA KULLANIYOR MUSUNUZ?</label>
              <div class="input-group">
                <input type="text" class="form-control" name="s10s1" id="s10s1" placeholder="EVET İSE  PAKET*YIL">
                <input type="text" class="form-control" name="s10s2" id="s10s2" placeholder=" HAYIR İSE 0 GİRİNİZ. ">
              </div>


              <label>ALKOL KULLANIMI</label>
              <div class="input-group">
                <td>
                  <div class="icheck-primary">
                    <input type="radio" id="s11s1" name="s11" value="EVET">
                    <label for="s11s1">EVET</label>
                  </div>
                </td>

                <td>
                  <div class="icheck-primary">
                    <input type="radio" id="s11s2" name="s11" value="HAYIR">
                    <label for="s11s2">HAYIR</label>
                  </div>
                </td>
              </div>


              <label>MESLEK</label>
              <div class="input-group">
                <input type="text" class="form-control" name="s12" id="s12" placeholder="MESLEK ">
              </div>


              <label>HASTAYA YAKINLIK DERECESİ </label>
              <div class="input-group">
                <input type="text" class="form-control" name="s13" id="s13" placeholder="YAKINLIK DERECESİ">
              </div>


              <label> HASTANIN TANISI</label>
              <div class="input-group">
                <input type="text" class="form-control" name="s14" id="s14" placeholder="HASTANIN TANISI">
              </div>

              <label>HASTALIK DURASYONU </label>
              <div class="input-group">
                <input type="text" class="form-control" name="s15" id="s15" placeholder="HASTALIK DURASYONU">
              </div>


              <label>HASTAYA KAÇ YILDIR BAKIM HİZMETİ SAĞLIYORSUNUZ </label>
              <div class="input-group">
                <input type="text" class="form-control" name="s16" id="s16" placeholder="HİZMET YILI">
              </div>
              <br>


              <label>BU ÇALIŞMADAN MEMNUN MUSUNUZ?</label>
              <br>

              <label>1 HİÇ MEMNUN DEĞİLİM --------- 10 ÇOK MEMNUNUM</label>
              <div class="slidecontainer">
                <input type="range" min="1" max="10" value="5" class="custom-range" name="s17" id="myRange">
                <p>Puanınız:
                  <span id="demo">
                  </span>
                </p>
              </div>



              <label> SİZCE BU ÇALIŞMA YAYGINLAŞTIRILMALI MIDIR? </label>
              <div class="input-group">
                <label>EVET </label>
                <input type="text" class="form-control" name="s18s1" id="s18s1" placeholder="NEDENİ İLE AÇIKLAYINIZ">
              </div>

              <div class="input-group">
                <label>HAYIR </label>
                <input type="text" class="form-control" name="s18s2" id="s18s2" placeholder="NEDENİ İLE AÇIKLAYINIZ">
              </div>



            </div>
            <div class="card-footer">
              <nav id="mainav" class="fl_right">
                <input style="margin: 5px" type="submit" class="btn btn-block btn-primary" name="insert5" value="Gönder">
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