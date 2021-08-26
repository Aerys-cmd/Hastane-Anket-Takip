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
              <h1 class="m-0"><span class="badge badge-light">Yeni Cinsel Doyum Ölçeği</h1></span></h1>
            </h4>
          </div>
          <form action="sayfalar/anketekle/insert.php" , method="POST">
            <div class="card-body">
              <br>
              Aşağıda yer alan maddeleri okurken son altı ay içindeki cinsel yaşamınızı düşününüz. Son 6 ay içindeki cinsel yaşamınızı en iyi yansıtan, memnuniyet derecenizi belirten numarayı daire içine alınız.
              <br>
              <ol>
                <table>
                  <tr>
                    <td></td>
                    <td>Ölçek Maddeleri </td>
                    <td>Hiç Memnun Değilim &nbsp;</td>
                    <td>Biraz Memnunum &nbsp;</td>
                    <td>Orta Düzeyde Memnunum &nbsp;</td>
                    <td>Çok Memnunum &nbsp;</td>
                    <td>Son Derece Memnunum &nbsp;</td>
                  </tr>
                  <br>
                  <tr>
                    <td>1.</td>
                    <td>Cinsel uyarılma yoğunluğum</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s1c1" name="s1" value="1">
                        <label for="s1c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s1c2" name="s1" value="2">
                        <label for="s1c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s1c3" name="s1" value="3">
                        <label for="s1c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s1c4" name="s1" value="4">
                        <label for="s1c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s1c5" name="s1" value="5">
                        <label for="s1c5"></label>
                      </div>
                    </td>

                  </tr>

                  <tr>
                    <td>2.</td>
                    <td>Cinsel boşalmamın (orgazm) kalitesi</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s2c1" name="s2" value="1">
                        <label for="s2c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s2c2" name="s2" value="2">
                        <label for="s2c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s2c3" name="s2" value="3">
                        <label for="s2c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s2c4" name="s2" value="4">
                        <label for="s2c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s2c5" name="s2" value="5">
                        <label for="s2c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Cinsel ilişki boyunca kendimi cinsel zevke teslim etme ve bırakmam
                    </td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s3c1" name="s3" value="1">
                        <label for="s3c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s3c2" name="s3" value="2">
                        <label for="s3c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s3c3" name="s3" value="3">
                        <label for="s3c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s3c4" name="s3" value="4">
                        <label for="s3c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s3c5" name="s3" value="5">
                        <label for="s3c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Cinsel ilişki boyunca odaklanmam/konsantrasyonum</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s4c1" name="s4" value="1">
                        <label for="s4c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s4c2" name="s4" value="2">
                        <label for="s4c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s4c3" name="s4" value="3">
                        <label for="s4c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s4c4" name="s4" value="4">
                        <label for="s4c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s4c5" name="s4" value="5">
                        <label for="s4c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Eşime/partnerime cinsel tepki biçimim</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s5c1" name="s5" value="1">
                        <label for="s5c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s5c2" name="s5" value="2">
                        <label for="s5c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s5c3" name="s5" value="3">
                        <label for="s5c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s5c4" name="s5" value="4">
                        <label for="s5c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s5c5" name="s5" value="5">
                        <label for="s5c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>6.</td>
                    <td>Vücudumun cinsel açıdan fonksiyonelliği (işlevselliği)</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s6c1" name="s6" value="1">
                        <label for="s6c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s6c2" name="s6" value="2">
                        <label for="s6c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s6c3" name="s6" value="3">
                        <label for="s6c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s6c4" name="s6" value="4">
                        <label for="s6c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s6c5" name="s6" value="5">
                        <label for="s6c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>7.</td>
                    <td>Cinsel ilişki sırasında duygusal serbestliğim (açılmam)</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s7c1" name="s7" value="1">
                        <label for="s7c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s7c2" name="s7" value="2">
                        <label for="s7c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s7c3" name="s7" value="3">
                        <label for="s7c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s7c4" name="s7" value="4">
                        <label for="s7c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s7c5" name="s7" value="5">
                        <label for="s7c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>8.</td>
                    <td>Cinsel ilişki sonrasındaki ruh halim</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s8c1" name="s8" value="1">
                        <label for="s8c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s8c2" name="s8" value="2">
                        <label for="s8c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s8c3" name="s8" value="3">
                        <label for="s8c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s8c4" name="s8" value="4">
                        <label for="s8c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s8c5" name="s8" value="5">
                        <label for="s8c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>9.</td>
                    <td>Cinsel boşalma (orgazm) sıklığı</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s9c1" name="s9" value="1">
                        <label for="s9c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s9c2" name="s9" value="2">
                        <label for="s9c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s9c3" name="s9" value="3">
                        <label for="s9c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s9c4" name="s9" value="4">
                        <label for="s9c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s9c5" name="s9" value="5">
                        <label for="s9c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>10.</td>
                    <td>Eşime/partnerime tattırdığım zevk</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s10c1" name="s10" value="1">
                        <label for="s10c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s10c2" name="s10" value="2">
                        <label for="s10c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s10c3" name="s10" value="3">
                        <label for="s10c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s10c4" name="s10" value="4">
                        <label for="s10c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s10c5" name="s10" value="5">
                        <label for="s10c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>11.</td>
                    <td>Cinsel ilişki sırasında aldığım ve verdiğim arasındaki denge
                    </td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s11c1" name="s11" value="1">
                        <label for="s11c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s11c2" name="s11" value="2">
                        <label for="s11c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s11c3" name="s11" value="3">
                        <label for="s11c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s11c4" name="s11" value="4">
                        <label for="s11c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s11c5" name="s11" value="5">
                        <label for="s11c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>12.</td>
                    <td>Cinsel ilişki boyunca eşimin/partnerimin duygusal paylaşımı (açılması)
                    </td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s12c1" name="s12" value="1">
                        <label for="s12c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s12c2" name="s12" value="2">
                        <label for="s12c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s12c3" name="s12" value="3">
                        <label for="s12c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s12c4" name="s12" value="4">
                        <label for="s12c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s12c5" name="s12" value="5">
                        <label for="s12c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>13.</td>
                    <td>Cinsel ilişkiyi eşimin/partnerimin başlatması</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s13c1" name="s13" value="1">
                        <label for="s13c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s13c2" name="s13" value="2">
                        <label for="s13c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s13c3" name="s13" value="3">
                        <label for="s13c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s13c4" name="s13" value="4">
                        <label for="s13c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s13c5" name="s13" value="5">
                        <label for="s13c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>14.</td>
                    <td>Eşimin/partnerimin cinsel boşalma (orgazm) becerisi</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s14c1" name="s14" value="1">
                        <label for="s14c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s14c2" name="s14" value="2">
                        <label for="s14c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s14c3" name="s14" value="3">
                        <label for="s14c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s14c4" name="s14" value="4">
                        <label for="s14c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s14c5" name="s14" value="5">
                        <label for="s14c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>15.</td>
                    <td>Eşimin/partnerimin kendisini cinsel zevk için teslim etmesi (bırakması)
                    </td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s15c1" name="s15" value="1">
                        <label for="s15c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s15c2" name="s15" value="2">
                        <label for="s15c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s15c3" name="s15" value="3">
                        <label for="s15c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s15c4" name="s15" value="4">
                        <label for="s15c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s15c5" name="s15" value="5">
                        <label for="s15c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>16.</td>
                    <td>Eşimin/partnerimin benim cinsel ihtiyaçlarımla ilgilenme tarzı
                    </td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s16c1" name="s16" value="1">
                        <label for="s16c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s16c2" name="s16" value="2">
                        <label for="s16c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s16c3" name="s16" value="3">
                        <label for="s16c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s16c4" name="s16" value="4">
                        <label for="s16c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s16c5" name="s16" value="5">
                        <label for="s16c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>17.</td>
                    <td>Eşimin/partnerimin cinsel yaratıcılığı</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s17c1" name="s17" value="1">
                        <label for="s17c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s17c2" name="s17" value="2">
                        <label for="s17c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s17c3" name="s17" value="3">
                        <label for="s17c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s17c4" name="s17" value="4">
                        <label for="s17c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s17c5" name="s17" value="5">
                        <label for="s17c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>18.</td>
                    <td>Eşimin/partnerimin cinsel ilişkiye hazır olması</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s18c1" name="s18" value="1">
                        <label for="s18c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s18c2" name="s18" value="2">
                        <label for="s18c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s18c3" name="s18" value="3">
                        <label for="s18c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s18c4" name="s18" value="4">
                        <label for="s18c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s18c5" name="s18" value="5">
                        <label for="s18c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>19.</td>
                    <td>Cinsel ilişkimin çeşitliliği</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s19c1" name="s19" value="1">
                        <label for="s19c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s19c2" name="s19" value="2">
                        <label for="s19c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s19c3" name="s19" value="3">
                        <label for="s19c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s19c4" name="s19" value="4">
                        <label for="s19c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s19c5" name="s19" value="5">
                        <label for="s19c5"></label>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>20.</td>
                    <td>Cinsel ilişkimin sıklığı</td>

                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s20c1" name="s20" value="1">
                        <label for="s20c1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s20c2" name="s20" value="2">
                        <label for="s20c2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s20c3" name="s20" value="3">
                        <label for="s20c3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s20c4" name="s20" value="4">
                        <label for="s20c4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s20c5" name="s20" value="5">
                        <label for="s20c5"></label>
                      </div>
                    </td>

                  </tr>
                  </tbody>
                </table>
            </div>
            <div class="card-footer">
              <nav id="mainav" class="fl_right">
                <input style="margin:5px" type="submit" class="btn btn-block btn-primary " name="btn_gndr2" value="Gönder">
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