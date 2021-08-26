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
              <h1 class="m-0"><span class="badge badge-light">Pittsburgh uyku kalite indeksi</h1></span></h1>
            </h4>
          </div>
          <form action="sayfalar/anketekle/insert.php" , method="POST">
            <div class="card-body">
              <label>Aşağıdaki sorulara vereceğiniz cevaplar için son bir ayı göz önünde bulundurun. </label>
              <br>
              <label>Lütfen tüm soruları cevaplandırın</label>
              <br>
              <label> Adınız Soyadınız:</label>

              <div class="input-group">
                <input type="text" name="adi" placeholder="ADI SOYADI" class="form-control">
              </div>
              <br>
              <label> Tarih:</label>

              <div class="input-group">
                <input type="text" name="datetime" placeholder="GG/AA/YYYY" class="form-control">
              </div>
              <br>
              <label> 1.Geçen ay geceleri genellikle ne zaman yattınız?</label>
              <br>
              <div class="input-group">
                <input type="text" name="s1" placeholder="" class="form-control">
              </div>
              <br>

              <label>2.Geçen ay geceleri uykuya dalmanız genellikle ne kadar zaman (dakika) aldı?</label>
              <br>
              <div class="input-group">
                <input type="text" name="s2" placeholder="" class="form-control">

                <label>dakika </label>
              </div>
              <br>

              <label>3.Geçen ay sabahları genellikle ne zaman kalktınız?</label>
              <br>
              <div class="input-group">
                <input type="text" name="s3" placeholder="" class="form-control">
              </div>
              <br>

              <label>4.Geçen ay geceleri kaç saat uyudunuz (bu süre yatakta geçerdiğiniz süreden farklı olabilir)</label>
              <br>
              <div class="input-group">
                <input type="text" name="s4" placeholder="" class="form-control">

                <label>saat</label>
              </div>
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


                </tr>

                <tr>
                  <td>b.Gece yarısı veya sabah erkenden uyandınız </td>
                  &nbsp;
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


                </tr>
                <tr>
                  <td>c.Tuvalete gittiniz
                  </td>
                  &nbsp;
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


                </tr>
                <tr>
                  <td>d.Rahat bir şekilde nefes alıp veremediniz</td>
                  &nbsp;
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


                </tr>
                <tr>
                  <td>e.Aşırı derecede üşüdünüz</td>
                  &nbsp;
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


                </tr>
                <tr>
                  <td>f.Aşırı derecede sıcaklık hissettiniz</td>
                  &nbsp;
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


                </tr>
                <tr>
                  <td>g.Kötü rüyalar gördünüz</td>
                  &nbsp;
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


                </tr>
                <tr>
                  <td>h.Ağrı duydunuz</td>
                  &nbsp;
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


                </tr>
                <tr>
                  <td>i.Diğer nedenler</td>
                  &nbsp;
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


                </tr>
                <tr>
                  <td>j.Öksürdünüz veya gürültülü bir şekilde horladınız</td>
                  &nbsp;
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


                </tr>
              </table>
              <br>
              <label>6.Geçen ay uyku kalitenizi bütünü ile nasıl değerlendirirsiniz.</label>


              <div class="icheck-primary">
                Çok iyi
                <input type="radio" id="s15c1" name="s15" value="1">
                <label for="s15c1"></label>
              </div>

              <div class="icheck-primary">
                Oldukça iyi
                <input type="radio" id="s15c2" name="s15" value="2">
                <label for="s15c2"></label>
              </div>

              <div class="icheck-primary">
                Oldukça kötü
                <input type="radio" id="s15c3" name="s15" value="3">
                <label for="s15c3"></label>
              </div>

              <div class="icheck-primary">
                Çok kötü
                <input type="radio" id="s15c4" name="s15" value="4">
                <label for="s15c4"></label>
              </div>


              <br>

              <label>7.Geçen ay uyumanıza yardımcı olması için ne sıklıkta(reçeteli veya reçetesiz) uyku ilacı aldınız?</label>

              <div class="icheck-primary">
                Hiç
                <input type="radio" id="s16c1" name="s16" value="1">
                <label for="s16c1"></label>
              </div>

              <div class="icheck-primary">
                Haftada 1'den az
                <input type="radio" id="s16c2" name="s16" value="2">
                <label for="s16c2"></label>
              </div>

              <div class="icheck-primary">
                Haftada 1-2 kez
                <input type="radio" id="s16c3" name="s16" value="3">
                <label for="s16c3"></label>
              </div>

              <div class="icheck-primary">
                Haftada 3'ten çok
                <input type="radio" id="s16c4" name="s16" value="4">
                <label for="s16c4"></label>
              </div>

              <br>

              <label>8.Geçen ay araba sürerken, yemek yerken veya sosyal bir aktivite esnasında ne kadar sıklıkla uyanık kalmak için zorlandınız?</label>


              <div class="icheck-primary">
                Hiç
                <input type="radio" id="s17c1" name="s17" value="1">
                <label for="s17c1"></label>
              </div>

              <div class="icheck-primary">
                Haftada 1'den az
                <input type="radio" id="s17c2" name="s17" value="2">
                <label for="s17c2"></label>
              </div>

              <div class="icheck-primary">
                Haftada 1-2 kez
                <input type="radio" id="s17c3" name="s17" value="3">
                <label for="s17c3"></label>
              </div>

              <div class="icheck-primary">
                Haftada 3'ten çok
                <input type="radio" id="s17c4" name="s17" value="4">
                <label for="s17c4"></label>
              </div>

              <br>
              <label>9.Geçen ay durum işlerinizi yeteri kadar istekle yapmanızda ne derecede problem oluşturdu?</label>


              <div class="icheck-primary">
                Hiç problem oluşturmadı
                <input type="radio" id="s18c1" name="s18" value="1">
                <label for="s18c1"></label>
              </div>

              <div class="icheck-primary">
                Bir dereceye kadar problem oluşturdu
                <input type="radio" id="s18c2" name="s18" value="2">
                <label for="s18c2"></label>
              </div>

              <div class="icheck-primary">
                Yalnızca çok az bir problem oluşturdu
                <input type="radio" id="s18c3" name="s18" value="3">
                <label for="s18c3"></label>
              </div>

              <div class="icheck-primary">
                Çok büyük bir problem oluşturdu
                <input type="radio" id="s18c4" name="s18" value="4">
                <label for="s18c4"></label>
              </div>
              <br>
              <label>10.Bir yatak partneriniz veya oda arkadaşınız var mı?</label>


              <div class="icheck-primary">
                Bir yatak partneri veya oda arkadaşı yok
                <input type="radio" id="s19c1" name="s19" value="1">
                <label for="s19c1"></label>
              </div>

              <div class="icheck-primary">
                Partneri ayrı odada fakat aynı yatakta değil
                <input type="radio" id="s19c2" name="s19" value="2">
                <label for="s19c2"></label>
              </div>

              <div class="icheck-primary">
                Diğer odada bir partneri veya oda arkadaşı var
                <input type="radio" id="s19c3" name="s19" value="3">
                <label for="s19c3"></label>
              </div>

              <div class="icheck-primary">
                Partner aynı yatakta
                <input type="radio" id="s19c4" name="s19" value="4">
                <label for="s19c4"></label>
              </div>

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


                </tr>
                <tr>
                  <td>b.Eşimin/partnerimin cinsel ilişkiye hazır olması</td>
                  &nbsp;
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s21c1" name="s21" value="1">
                      <label for="s21c1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s21c2" name="s21" value="2">
                      <label for="s21c2"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s21c3" name="s21" value="3">
                      <label for="s21c3"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s21c4" name="s21" value="4">
                      <label for="s21c4"></label>
                    </div>
                  </td>


                </tr>
                <tr>
                  <td>c.Cinsel ilişkimin çeşitliliği</td>
                  &nbsp;
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s22c1" name="s22" value="1">
                      <label for="s22c1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s22c2" name="s22" value="2">
                      <label for="s22c2"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s22c3" name="s22" value="3">
                      <label for="s22c3"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s22c4" name="s22" value="4">
                      <label for="s22c4"></label>
                    </div>
                  </td>


                </tr>
                <tr>
                  <td>d.Cinsel ilişkimin sıklığı</td>
                  &nbsp;
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s23c1" name="s23" value="1">
                      <label for="s23c1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s23c2" name="s23" value="2">
                      <label for="s23c2"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s23c3" name="s23" value="3">
                      <label for="s23c3"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s23c4" name="s23" value="4">
                      <label for="s23c4"></label>
                    </div>
                  </td>


                </tr>
                <tr>
                  <td>e.Diğer huzursuzluklarınız</td>
                  &nbsp;
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s24c1" name="s24" value="1">
                      <label for="s24c1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s24c2" name="s24" value="2">
                      <label for="s24c2"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s24c3" name="s24" value="3">
                      <label for="s24c3"></label>
                    </div>
                  </td>
                  <td>
                    <div class="icheck-primary">
                      <input type="radio" id="s24c4" name="s24" value="4">
                      <label for="s24c4"></label>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <nav id="mainav" class="fl_right">
                <input style="margin:5px" type="submit" class="btn btn-block btn-primary " name="btn_gndr3" value="Gönder">
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