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
              <h1 class="m-0"><span class="badge badge-light">Warwick-Edinburgh Mental İyi Oluş Ölçeği</h1></span></h1>
            </h4>
          </div>
          <form action="sayfalar/anketekle/insert.php" method="POST">
            <div class="card-body">
              <label>1-Genel olarak sağlığınızın şöyle olduğunu söyler misiniz:</label>

              <ol>
                <table>
                  <tr>
                    <td></td>
                    <td> Hiç Katılmıyorum &nbsp; </td>
                    <td> Katılmıyorum &nbsp; </td>
                    <td> Biraz Katılıyorum &nbsp;</td>
                    <td> Katılıyorum &nbsp; </td>
                    <td> Tamamen Katılıyorum &nbsp; </td>
                  </tr>

                  <tr>
                    <td><label>1.Gelecekle ilgili iyimserim.</label></td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s1s1" name="s1" value="s1s1" checked>
                        <label for="s1s1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s1s2" name="s1" value="s1s2">
                        <label for="s1s2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s1s3" name="s1" value="s1s3">
                        <label for="s1s3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s1s4" name="s1" value="s1s4">
                        <label for="s1s4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s1s5" name="s1" value="s1s5">
                        <label for="s1s5"></label>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>2. Kendimi işe yarar ( faydalı) hissediyorum.</label>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s2s1" name="s2" value="s2s1" checked>
                        <label for="s2s1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s2s2" name="s2" value="s2s2">
                        <label for="s2s2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s2s3" name="s2" value="s2s3">
                        <label for="s2s3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s2s4" name="s2" value="s2s4">
                        <label for="s2s4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s2s5" name="s2" value="s2s5">
                        <label for="s2s5"></label>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>3. Kendimi rahatlamış hissediyorum.</label>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s3s1" name="s3" value="s3s1" checked>
                        <label for="s3s1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s3s2" name="s3" value="s3s2">
                        <label for="s3s2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s3s3" name="s3" value="s3s3">
                        <label for="s3s3"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s3s4" name="s3" value="s3s4">
                        <label for="s3s4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s3s5" name="s3" value="s3s5">
                        <label for="s3s5"></label>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><label>4. Diğer insanlara karşı ilgiliyim.</label>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s4s1" name="s4" value="s4s1" checked>
                        <label for="s4s1"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s4s2" name="s4" value="s4s2">
                        <label for="s4s2"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s4s3" name="s4" value="s4s3">
                        <label for="s4s3"></label>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s4s4" name="s4" value="s4s4">
                        <label for="s4s4"></label>
                      </div>
                    </td>
                    <td>
                      <div class="icheck-primary">
                        <input type="radio" id="s4s5" name="s4" value="s4s5">
                        <label for="s4s5"></label>
                      </div>

            </div>
            </td>
            </tr>

            <tr>
              <td><label>5. Farklı işlere zaman ayırabilecek enerjim var.</label>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s5s1" name="s5" value="s5s1" checked>
                  <label for="s5s1"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s5s2" name="s5" value="s5s2">
                  <label for="s5s2"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s5s3" name="s5" value="s5s3">
                  <label for="s5s3"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s5s4" name="s5" value="s5s4">
                  <label for="s5s4"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s5s5" name="s5" value="s5s5">
                  <label for="s5s5"></label>
                </div>
              </td>
            </tr>


            <tr>
              <td><label>6. Sorunlarla iyi bir şekilde başa çıkabilirim.</label>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s6s1" name="s6" value="s6s1" checked>
                  <label for="s6s1"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s6s2" name="s6" value="s6s2">
                  <label for="s6s2"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s6s3" name="s6" value="s6s3">
                  <label for="s6s3"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s6s4" name="s6" value="s6s4">
                  <label for="s6s4"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s6s5" name="s6" value="s6s5">
                  <label for="s6s5"></label>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>7. Açık ve net bir biçimde düşünebiliyorum.</label>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s7s1" name="s7" value="s7s1" checked>
                  <label for="s7s1"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s7s2" name="s7" value="s7s2">
                  <label for="s7s2"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s7s3" name="s7" value="s7s3">
                  <label for="s7s3"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s7s4" name="s7" value="s7s4">
                  <label for="s7s4"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s7s5" name="s7" value="s7s5">
                  <label for="s7s5"></label>
                </div>

              </td>
            </tr>

            <tr>
              <td><label>8. Kendimden memnunum.</label>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s8s1" name="s8" value="s8s1" checked>
                  <label for="s8s1"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s8s2" name="s8" value="s8s2">
                  <label for="s8s2"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s8s3" name="s8" value="s8s3">
                  <label for="s8s3"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s8s4" name="s8" value="s8s4">
                  <label for="s8s4"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s8s5" name="s8" value="s8s5">
                  <label for="s8s5"></label>
                </div>

              </td>
            </tr>

            <tr>
              <td><label>9. Kendimi diğer insanlara yakın hissediyorum.</label>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s9s1" name="s9" value="s9s1" checked>
                  <label for="s9s1"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s9s2" name="s9" value="s9s2">
                  <label for="s9s2"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s9s3" name="s9" value="s9s3">
                  <label for="s9s3"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s9s4" name="s9" value="s9s4">
                  <label for="s9s4"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s9s5" name="s9" value="s9s5">
                  <label for="s9s5"></label>
                </div>

              </td>
            </tr>

            <tr>
              <td><label>10. Kendime güveniyorum.</label>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s10s1" name="s10" value="s10s1" checked>
                  <label for="s10s1"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s10s2" name="s10" value="s10s2">
                  <label for="s10s2"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s10s3" name="s10" value="s10s3">
                  <label for="s10s3"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s10s4" name="s10" value="s10s4">
                  <label for="s10s4"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s10s5" name="s10" value="s10s5">
                  <label for="s10s5"></label>
                </div>
              </td>
            </tr>
            <tr>
              <td><label>11. Kendi kararlarımı kendim verebiliyorum.</label>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s11s1" name="s11" value="s11s1" checked>
                  <label for="s11s1"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s11s2" name="s11" value="s11s2">
                  <label for="s11s2"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s11s3" name="s11" value="s11s3">
                  <label for="s11s3"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s11s4" name="s11" value="s11s4">
                  <label for="s11s4"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s11s5" name="s11" value="s11s5">
                  <label for="s11s5"></label>
                </div>

              </td>
            </tr>
            <tr>
              <td><label>12. Sevildiğimi hissediyorum.</label>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s12s1" name="s12" value="s12s1" checked>
                  <label for="s12s1"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s12s2" name="s12" value="s12s2">
                  <label for="s12s2"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s12s3" name="s12" value="s12s3">
                  <label for="s12s3"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s12s4" name="s12" value="s12s4">
                  <label for="s12s4"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s12s5" name="s12" value="s12s5">
                  <label for="s12s5"></label>
                </div>

              </td>
            </tr>
            <tr>
              <td><label>13. Yeni şeylere karşı ilgiliyim.</label>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s13s1" name="s13" value="s13s1" checked>
                  <label for="s13s1"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s13s2" name="s13" value="s13s2">
                  <label for="s13s2"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s13s3" name="s13" value="s13s3">
                  <label for="s13s3"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s13s4" name="s13" value="s13s4">
                  <label for="s13s4"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s13s5" name="s13" value="s13s5">
                  <label for="s13s5"></label>
                </div>

              </td>
            </tr>
            <tr>
              <td><label>14. Neşeli hissediyorum.</label>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s14s1" name="s14" value="s14s1" checked>
                  <label for="s14s1"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s14s2" name="s14" value="s14s2">
                  <label for="s14s2"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s14s3" name="s14" value="s14s3">
                  <label for="s14s3"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s14s4" name="s14" value="s14s4">
                  <label for="s14s4"></label>
                </div>
              </td>
              <td>
                <div class="icheck-primary">
                  <input type="radio" id="s14s5" name="s14" value="s14s5">
                  <label for="s14s5"></label>
                </div>

              </td>
            </tr>
            </table>
            </ol>
            <br>





        </div>
       
        <div class="card-footer">
          <nav id="mainav" class="fl_right">
            <input style="margin: 5px" type="submit" class="btn btn-block btn-primary" name="insert8" value="Gönder">
          </nav>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php
} else
  echo "<script>alert('Yetkiniz yok.');</script>";
?>