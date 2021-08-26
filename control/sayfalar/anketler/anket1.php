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
              <h1 class="m-0"><span class="badge badge-light">Barthel Günlük Yaşam Aktiviteleri İndeksi</h1></span></h1>
            </h4>
          </div>
          <div class="card-body">
            <form action="sayfalar/anketekle/insert.php" , method="POST">
              <br>
              <ol>
                <table>
                  <thead>
                    <label>1-Beslenme</label>
                  </thead>
                  <tbody>


                    <tr>
                      <td>Tam bağımsız yemek yemek için gerekli aletleri kullanabilir.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s1c1" name="a" value="10">
                          <label for="s1c1"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Bir miktar yardıma ihtiyaç duyar.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s1c2" name="a" value="5">
                          <label for="s1c2"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Tam Bağımlıdır.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s1c3" name="a" value="0">
                          <label for="s1c3"></label>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>

                <br>

                <table>
                  <thead>
                    <label>2-Yıkanma</label>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Hasta yardımsız olarak küvette yıkanabilir, duş alabilir ya da keselenebilir.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s2c1" name="b" value="5">
                          <label for="s2c1"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Yardıma ihtiyacı vardır</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s2c2" name="b" value="0">
                          <label for="s2c2"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>


                <br>


                <table>
                  <thead>
                    <label>3-Kendine Bakım</label>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Elini yüzünü yıkayabilir dişlerini fırçalayabilir, tıraş olabilir, makyaj yapabilir.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s3c1" name="c" value="5">
                          <label for="s3c1"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Kişisel bakımda yardıma ihtiyaç duyar.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s3c2" name="c" value="0">
                          <label for="s3c2"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>


                <br>


                <table>
                  <thead>
                    <label>4-Giyinip Soyunma</label>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Hasta giyinip soyunabilir. Ayakkabı bağlarını çözebilir.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s4c1" name="d" value="10">
                          <label for="s4c1"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Yardıma gereksinim duyar (İşin en az %50’sini kendisi yapabilmelidir.)</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s4c2" name="d" value="5">
                          <label for="s4c2"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Tam Bağımlıdır.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s4c3" name="d" value="0">
                          <label for="s4c3"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>


                <br>


                <table>
                  <thead>
                    <label>5-Bağırsak Bakımı</label>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Suppozituvar kullanabilir ya da gerekirse lavman yapabilir.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s5c1" name="e" value="10">
                          <label for="s5c1"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Hasta belirtilen aktiviteler için yardıma gereksinim duyar.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s5c2" name="e" value="5">
                          <label for="s5c2"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>İnkontinansı mevcuttur.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s5c3" name="e" value="0">
                          <label for="s5c3"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>


                <br>


                <table>
                  <thead>
                    <label>6-Mesane Bakımı</label>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Hasta gece ve gündüz mesanesini kontrol edebilmelidir. Sonda bakımını bağımsız bir şekilde kendisi yapabilmelidir.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s6c1" name="f" value="10">
                          <label for="s6c1"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Bazen tuvalete yetişemez ya da sürgüyü bekleyemez altına kaçırır.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s6c2" name="f" value="5">
                          <label for="s6c2"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>İnkontinandır veya kateterlidir ve mesanesini kontrol edemez.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s6c3" name="f" value="0">
                          <label for="s6c3"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>


                <br>


                <table>
                  <thead>
                    <label>7-Tuvalet Kullanımı</label>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Duvardan ya da bardan destek alabilir tuvalet kâğıdını kendi kullanabilir.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s7c1" name="g" value="10">
                          <label for="s7c1"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Elbiselerini giyip çıkarmak, tuvalet kâğıdını kullanmak için bir miktar yardım</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s7c2" name="g" value="5">
                          <label for="s7c2"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Tam Bağımlıdır.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s7c3" name="g" value="0">
                          <label for="s7c3"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>


                <br>


                <table>
                  <thead>
                    <label>8-Tekerlekli Sandalyeden Yatağa Ve Tersi Transferler</label>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tam bağımsızdır.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s8c1" name="h" value="15">
                          <label for="s8c1"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Geçişler sırasında minimal yardım alır (sözel veya fiziksel).</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s8c2" name="h" value="10">
                          <label for="s8c2"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Tek başına yatakta oturma pozisyonuna geçebilir ama geçiş için yardım alır.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s8c3" name="h" value="5">
                          <label for="s8c3"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Tam Bağımlıdır.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s8c4" name="h" value="0">
                          <label for="s8c4"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>


                <br>


                <table>
                  <thead>
                    <label>9-Düzgün yüzeyde yürüme Tekerlekli sandalyeyi kullanabilme (uygunsa)</label>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Hasta yardımsız olarak 45 metre yürüyebilir. Bireys, baston, koltuk değneği, yürüteç kullanabilir (Bireys kullanıyorsa kilitleyip açabilmeli, oturup kalkabilmeli, mekanik destekleri yardımsız kullanabilmelidir.)</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s9c1" name="i" value="15">
                          <label for="s9c1"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Hasta bir kişinin sözel veya fiziksel yardımıyla 45 metre yürüyebilir.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s9c2" name="i" value="10">
                          <label for="s9c2"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Hasta yürüyemez ama tekerlekli sandalyeyi kullanabilir. Hasta köşeleri dönebilir. Yatağa, tuvalete yanaşabilir.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s9c3" name="i" value="5">
                          <label for="s9c3"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Tekerlekli sandalyede oturabilir ancak kullanamaz.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s9c4" name="i" value="0">
                          <label for="s9c4"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>


                <br>


                <table>
                  <thead>
                    <label>10-Merdiven inip çıkma</label>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Bağımsız inip çıkabilir, ancak destek kullanabilir (tırabzan, baston, koltuk değneği…)</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s10c1" name="j" value="10">
                          <label for="s10c1"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Hasta yukardaki işleri yapmak için yardıma veya gözetime ihtiyaç duyar.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s10c2" name="j" value="5">
                          <label for="s10c2"></label>
                        </div>
                      </td>
                    </tr><br>
                    <tr>
                      <td>Yapamaz.</td>
                      <td>
                        <div class="icheck-primary">
                          <input type="radio" id="s10c3" name="j" value="0">
                          <label for="s10c3"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </ol>

              <br>

             
           
          <?php
        } else
          echo "<script>alert('Yetkiniz yok.');</script>";
          ?>
          </div>
          <div class="card-footer">
          <nav id="mainav" class="fl_right">
                <input style="margin:5px" type="submit" class="btn btn-block btn-primary " name="btn_gndr" value="Gönder">
              </nav>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>