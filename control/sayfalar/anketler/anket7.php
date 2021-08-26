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
                     <h1 class="m-0"><span class="badge badge-light">RAND 36 Maddelik Sağlık Anketi 1.0 Anket Maddeleri</h1></span></h1>
                  </h4>
               </div>
               <form action="sayfalar/anketekle/insert.php" method="POST">
                  <div class="card-body">


                     <label>1-Genel olarak sağlığınızın şöyle olduğunu söyler misiniz:</label>

                     <ol>
                        <table>

                           <tr>
                              <td>1 - Mükemmel </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s1s1" name="s1" value="S1C1" checked>
                                    <label for="s1s1"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 2 - Çok iyi</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s1s2" name="s1" value="S1C2">
                                    <label for="s1s2"></label>
                                 </div>

                           <tr>
                              <td> 3 - İyi</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s1s3" name="s1" value="S1C3">
                                    <label for="s1s3"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 4 - Fuar</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s1s4" name="s1" value="S1C4">
                                    <label for="s1s4"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 5 - Zayıf< </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s1s5" name="s1" value="S1C5">
                                    <label for="s1s5"></label>
                                 </div>
                              </td>
                           </tr> <br>
                        </table>
                     </ol>

                     <p><label>2- Bir yıl öncesine kıyasla , şimdiki sağlığınızı genel olarak nasıl değerlendirirsiniz?</p>
                     <ol>
                        <table>
                           <tr>
                              <td>1 - Şimdi bir yıl öncesine göre çok daha iyi </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s2s1" name="s2" value="S2C1" checked="">
                                    <label for="s2s1"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 2 - Bir yıl öncesine göre biraz daha iyi</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s2s2" name="s2" value="S2C2">
                                    <label for="s2s2"></label>
                              </td>
                           </tr>
                           <tr>
                              <td> 3 - Yaklaşık olarak aynı</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s2s3" name="s2" value="S2C3">
                                    <label for="s2s3"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 4 - Bir yıl öncesine göre biraz daha kötü </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s2s4" name="s2" value="S2C4">
                                    <label for="s2s4"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>5 - Bir yıl öncesine göre çok daha kötü</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s2s5" name="s2" value="S2C5">
                                    <label for="s2s5"></label>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </ol>

                     <br>
                     <p><label>Aşağıdaki öğeler, tipik bir gün boyunca yapabileceğiniz etkinliklerle ilgilidir. Does sağlık
                           şimdi sınırlamak bu faaliyetlere? Eğer öyleyse, ne kadar?</label></p>
                     <ol>
                        <table>
                           <tr>
                              <td></td>
                              <td>Evet Çok Kısıtlı </td>
                              <td>Evet Biraz Kısıtlı </td>
                              <td>Hayır Hiç Sınırlı Değil</td>
                           </tr>

                           <tr>
                              <td><label>3. Koşmak , ağır cisimleri kaldırmak, yorucu sporlara katılmak gibi yoğun aktiviteler</label></td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s3s1" name="s3" value="S3C1" checked>
                                    <label for="s3s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s3s2" name="s3" value="S3C2">
                                    <label for="s3s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s3s3" name="s3" value="S3C3">
                                    <label for="s3s3"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>s4. Masayı hareket ettirmek, elektrikli süpürgeyi itmek, bowling oynamak veya golf oynamak gibi orta düzeyde aktiviteler</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s4s1" name="s4" value="S4C1" checked>
                                    <label for="s4s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s4s2" name="s4" value="S4C2">
                                    <label for="s4s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s4s3" name="s4" value="S4C3">
                                    <label for="s4s3"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td>5. Yiyecekleri kaldırmak veya taşımak</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s5s1" name="s5" value="S5C1" checked>
                                    <label for="s5s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s5s2" name="s5" value="S5C2">
                                    <label for="s5s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s5s3" name="s5" value="S5C3">
                                    <label for="s5s3"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td>6. Birkaç kat merdiven çıkmak</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s6s1" name="s6" value="S6C1" checked>
                                    <label for="s6s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s6s2" name="s6" value="S6C2">
                                    <label for="s6s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s6s3" name="s6" value="S6C3">
                                    <label for="s6s3"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td>7. Bir kat merdiven çıkmak</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s7s1" name="s7" value="S7C1" checked>
                                    <label for="s7s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s7s2" name="s7" value="S7C2">
                                    <label for="s7s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s7s3" name="s7" value="S7C3">
                                    <label for="s7s3"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td>8. Eğilme, diz çökme veya eğilme</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s8s1" name="s8" value="S8C1" checked>
                                    <label for="s8s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s8s2" name="s8" value="S8C2">
                                    <label for="s8s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s8s3" name="s8" value="S8C3">
                                    <label for="s8s3"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td>9. Bir milden fazla yürümek</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s9s1" name="s9" value="S9C1" checked>
                                    <label for="s9s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s9s2" name="s9" value="S9C2">
                                    <label for="s9s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s9s3" name="s9" value="S9C3">
                                    <label for="s9s3"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td>10. Birkaç blok yürümek</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s10s1" name="s10" value="S10C1" checked>
                                    <label for="s10s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s10s2" name="s10" value="S10C2">
                                    <label for="s10s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s10s3" name="s10" value="S10C3">
                                    <label for="s10s3"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td>11. Bir blok yürümek</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s11s1" name="s11" value="S11C1" checked>
                                    <label for="s11s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s11s2" name="s11" value="S11C2">
                                    <label for="s11s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s11s3" name="s11" value="S11C3">,
                                    <label for="s11s3"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td>12.Kendiniz yıkanmak veya giyinmek</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s12s1" name="s12" value="S12C1" checked>
                                    <label for="s12s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s12s2" name="s12" value="S12C2">
                                    <label for="s12s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s12s3" name="s12" value="S12C3">
                                    <label for="s12s3"></label>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </ol>
                     <br>


                     <label>Sırasında Son 4 hafta , iş yeri veya diğer normal günlük aktiviteler ile aşağıdaki sorunlardan herhangi oldu mu fiziksel sağlığı sonucu ?</label>
                     <br>
                     <br>
                     <ol>
                        <table>

                           <tr>
                              <td></td>
                              <td>Evet </td>
                              <td>Hayır</td>
                           </tr>

                           <tr>
                              <td><label>13. İşe veya diğer faaliyetlere harcadığınız zamanı azaltın</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s13s1" name="s13" value="S13C1" checked>
                                    <label for="s13s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s13s2" name="s13" value="S13C2">
                                    <label for="s13s2"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>14. İstediğinizden daha azını başardınız</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s14s1" name="s14" value="S14C1" checked>
                                    <label for="s14s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s14s2" name="s14" value="S14C2">
                                    <label for="s14s2"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>15. İşin türünde veya diğer faaliyetlerde sınırlıydı</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s15s1" name="s15" value="S15C1" checked>
                                    <label for="s15s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s15s2" name="s15" value="S15C2">
                                    <label for="s15s2"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>16. İşi veya diğer etkinlikleri yapmakta zorluk yaşadı (örneğin, ekstra çaba gerektirdi)</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s16s1" name="s16" value="S16C1" checked>
                                    <label for="s16s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s16s2" name="s16" value="S16C2">
                                    <label for="s16s2"></label>
                                 </div>
                              </td>
                           </tr>

                        </table>
                     </ol>
                     <br>



                     <p><label>Sırasında Son 4 hafta , iş yeri veya diğer normal günlük aktiviteler ile aşağıdaki sorunlardan herhangi oldu mu duygusal sorunların bir sonucu olarak (örneğin depresif ya da endişeli duygu gibi)?</label></p>

                     <ol>
                        <table>

                           <tr>
                              <td></td>
                              <td>Evet </td>
                              <td>Hayır</td>
                           </tr>

                           <tr>
                              <td><label>17. İşe veya diğer faaliyetlere harcadığınız zamanı azaltın</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s17s1" name="s17" value="S17C1" checked>
                                    <label for="s17s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s17s2" name="s17" value="S17C2">
                                    <label for="s17s2"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>18. İstediğinizden daha azını başardınız</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s18s1" name="s18" value="S18C1" checked>
                                    <label for="s18s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s18s2" name="s18" value="S18C2">
                                    <label for="s18s2"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>19. İşi veya diğer faaliyetleri her zamanki kadar dikkatli yapmadı</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s19s1" name="s19" value="S19C1" checked>
                                    <label for="s19s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s19s2" name="s19" value="S19C2">
                                    <label for="s19s2"></label>
                                 </div>
                              </td>
                           </tr>

                        </table>
                     </ol>
                     <br>

                     <p><label>20. Son 4 hafta içinde , fiziksel sağlığınız veya duygusal sorunlarınız, aileniz, arkadaşlarınız, komşularınız veya gruplarınızla normal sosyal aktivitelerinizi ne ölçüde etkiledi?</label></p>

                     <ol>
                        <table>

                           <tr>
                              <td> 1 - Hiç</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s20s1" name="s20" value="S20C1" checked>
                                    <label for="s20s1"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 2 - Az</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s20s2" name="s20" value="S20C2">
                                    <label for="s20s2"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 3 - Orta derecede</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s20s3" name="s20" value="S20C3">
                                    <label for="s20s3"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 4 - Biraz</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s20s4" name="s20" value="S20C4">
                                    <label for="s20s4"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 5 - Son derece</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s20s5" name="s20" value="S20C5">
                                    <label for="s20s5"></label>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </ol>
                     <br>

                     <p><label>21. Son 4 hafta içinde ne kadar bedensel ağrınız oldu ?</label></p>

                     <ol>
                        <table>
                           <tr>
                              <td> 1 - Hiç</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s21s1" name="s21" value="S21C1" checked>
                                    <label for="s21s1"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 2 - Az</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s21s2" name="s21" value="S21C2">
                                    <label for="s21s2"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 3 - Orta derecede </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s21s3" name="s21" value="S21C3">
                                    <label for="s21s3"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 4 - Biraz</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s21s4" name="s21" value="S21C4">
                                    <label for="s21s4"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 5 - Son derece</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s21s5" name="s21" value="S21C5">
                                    <label for="s21s5"></label>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </ol>
                     <br>

                     <p><label>22. Son 4 hafta içinde ağrı normal işinizi ne kadar etkiledi (hem ev işi hem de ev işi dahil)?</label></p>
                     <ol>
                        <table>
                           <tr>
                              <td> 1 - Hiç</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s22s1" name="s22" value="S22C1" checked>
                                    <label for="s22s1"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 2 - Az</td>
                              <td>
                                 <div class="icheck-primary">
                                    <div class="icheck-primary">
                                       <input type="radio" id="s22s2" name="s22" value="S22C2">
                                       <label for="s22s2"></label>
                                    </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 3 - Orta derecede </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s22s3" name="s22" value="S22C3">
                                    <label for="s22s3"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 4 - Biraz</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s22s4" name="s22" value="S22C4">
                                    <label for="s22s4"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 5 - Son derece</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s22s5" name="s22" value="S22C5">
                                    <label for="s22s5"></label>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </ol>
                     <br>

                     <label>Bu sorular son 4 hafta içinde nasıl hissettiğiniz ve işlerin nasıl gittiği ile ilgilidir . Her soru için, lütfen hissettiğiniz yola en yakın olan yanıtı verin.</label>

                     <ol>
                        <table>
                           <tr>
                              <td>Son 4 haftadaki zamanın ne kadarı </td>
                              <td>Tüm Zamanların </td>
                              <td>Çoğu Zaman </td>
                              <td>İyi Bir Zaman </td>
                              <td>Bazen </td>
                              <td> Bazı Zaman </td>
                              <td> Hiçbir Zaman</td>
                           </tr>

                           <tr>
                              <td><label>23. Kendinizi moral dolu hissettiniz mi?</label></td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s23s1" name="s23" value="S23C1" checked>
                                    <label for="s23s1"></label>
                                 </div>
                              </td>

                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s23s2" name="s23" value="S23C2">
                                    <label for="s23s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s23s3" name="s23" value="S23C3">
                                    <label for="s23s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s23s4" name="s23" value="S23C4">
                                    <label for="s23s4"></label>
                                 </div>

                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s23s5" name="s23" value="S23C5">
                                    <label for="s23s5"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s23s6" name="s23" value="S23C6">
                                    <label for="s23s6"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>24. Çok gergin bir insan mıydınız?</label></td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s24s1" name="s24" value="S24C1" checked>
                                    <label for="s24s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s24s2" name="s24" value="S24C2">
                                    <label for="s24s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s24s3" name="s24" value="S24C3">
                                    <label for="s24s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s24s4" name="s24" value="S24C4">
                                    <label for="s24s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s24s5" name="s24" value="S24C5">
                                    <label for="s24s5"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s24s6" name="s24" value="S24C6">
                                    <label for="s24s6"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>25. Hiçbir şeyin sizi neşelendiremeyeceği çöplükte kendinizi çok kötü hissettiniz mi?</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s25s1" name="s25" value="S25C1" checked>
                                    <label for="s25s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s25s2" name="s25" value="S25C2">
                                    <label for="s25s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s25s3" name="s25" value="S25C3">
                                    <label for="s25s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s25s4" name="s25" value="S25C4">
                                    <label for="s25s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s25s5" name="s25" value="S25C5">
                                    <label for="s25s5"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s25s6" name="s25" value="S25C6">
                                    <label for="s25s6"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>26. Kendinizi sakin ve huzurlu hissettiniz mi?</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s26s1" name="s26" value="S26C1" checked>
                                    <label for="s26s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s26s2" name="s26" value="S26C2">
                                    <label for="s26s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s26s3" name="s26" value="S26C3">
                                    <label for="s26s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s26s4" name="s26" value="S26C4">
                                    <label for="s26s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s26s5" name="s26" value="S26C5">
                                    <label for="s26s5"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s26s6" name="s26" value="S26C6">
                                    <label for="s26s6"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>27. Çok enerjiniz var mıydı?</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s27s1" name="s27" value="S27C1" checked>
                                    <label for="s27s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s27s2" name="s27" value="S27C2">
                                    <label for="s27s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s27s3" name="s27" value="S27C3">
                                    <label for="s27s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s27s4" name="s27" value="S27C4">
                                    <label for="s27s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s27s5" name="s27" value="S27C5">
                                    <label for="s27s5"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s27s6" name="s27" value="S27C6">
                                    <label for="s27s6"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>28. Moraliniz bozuk ve moraliniz bozuldu mu?</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s28s1" name="s28" value="S28C1" checked>
                                    <label for="s28s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s28s2" name="s28" value="S28C2">
                                    <label for="s28s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">

                                    <input type="radio" id="s28s3" name="s28" value="S28C3">
                                    <label for="s28s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s28s4" name="s28" value="S28C4">
                                    <label for="s28s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s28s5" name="s28" value="S28C5">
                                    <label for="s28s5"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s28s6" name="s28" value="S28C6">
                                    <label for="s28s6"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>29. Kendinizi yıpranmış hissettiniz mi?</label></td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s29s1" name="s29" value="S29C1" checked>
                                    <label for="s29s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s29s2" name="s29" value="S29C2">
                                    <label for="s29s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s29s3" name="s29" value="S29C3">
                                    <label for="s29s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s29s4" name="s29" value="S29C4">
                                    <label for="s29s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s29s5" name="s29" value="S29C5">
                                    <label for="s29s5"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s29s6" name="s29" value="S29C6">
                                    <label for="s29s6"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>30. Mutlu bir insan oldunuz mu?</label></td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s30s1" name="s30" value="S30C1" checked>
                                    <label for="s30s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s30s2" name="s30" value="S30C2">
                                    <label for="s30s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s30s3" name="s30" value="S30C3">
                                    <label for="s30s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s30s4" name="s30" value="S30C4">
                                    <label for="s30s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s30s5" name="s30" value="S30C5">
                                    <label for="s30s5"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s30s6" name="s30" value="S30C6">
                                    <label for="s30s6"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>31. Kendinizi yorgun hissettiniz mi?</label></td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s31s1" name="s31" value="S31C1" checked>
                                    <label for="s31s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s31s2" name="s31" value="S31C2">
                                    <label for="s31s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s31s3" name="s31" value="S31C3">
                                    <label for="s31s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s31s4" name="s31" value="S31C4">
                                    <label for="s31s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s31s5" name="s31" value="S31C5">
                                    <label for="s31s5"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s31s6" name="s31" value="S31C6">
                                    <label for="s31s6"></label>
                                 </div>
                              </td>
                           </tr>

                        </table>
                     </ol>
                     <br>

                     <label>32. Son 4 hafta içinde , fiziksel sağlığınız veya duygusal sorunlarınız ne kadar zaman sosyal aktivitelerinizi (arkadaş, akraba ziyareti vb.) etkiledi ?</label>
                     <ol>
                        <table>
                           <tr>
                              <td> 1 - Her Zaman</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s32s1" name="s32" value="S32C1" checked>
                                    <label for="s32s1"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td> 2 - Çoğu Zaman</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s32s2" name="s32" value="S32C2">
                                    <label for="s32s2"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 3 - Bazen </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s32s3" name="s32" value="S32C3">
                                    <label for="s32s3"></label>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 4 - Az Bir Zaman</td>
                              <td>
                                 <div class="icheck-primary">
                                    <div class="icheck-primary">
                                       <input type="radio" id="s32s4" name="s32" value="S32C4">
                                       <label for="s32s4"></label>
                                    </div>
                              </td>
                           </tr>
                           <tr>
                              <td> 5 - Hiçbir Zaman</td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s32s5" name="s32" value="S32C5">
                                    <label for="s32s5"></label>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </ol>
                     <br>

                     <label>Aşağıdaki ifadelerin her biri sizin için ne kadar DOĞRU veya YANLIŞTIR .</label>

                     <ol>
                        <table>
                           <tr>
                              <td></td>
                              <td>Kesinlikle Doğru </td>
                              <td>Çoğunlukla Doğru</td>
                              <td>Bilmiyorum </td>
                              <td>Çoğunlukla Yanlış </td>
                              <td>Kesinlikle Yanlış</td>
                           </tr>

                           <tr>
                              <td><label>33. Diğer insanlardan biraz daha kolay hastalanıyor gibiyim</label></td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s33s1" name="s33" value="S33C1" checked>
                                    <label for="s33s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s33s2" name="s33" value="S33C2">
                                    <label for="s33s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s33s3" name="s33" value="S33C3">
                                    <label for="s33s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s33s4" name="s33" value="S33C4">
                                    <label for="s33s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s33s5" name="s33" value="S33C5">
                                    <label for="s33s5"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td>
                                 <label>34. Tanıdığım herkes kadar sağlıklıyım</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s34s1" name="s34" value="S34C1" checked>
                                    <label for="s34s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s34s2" name="s34" value="S34C2">
                                    <label for="s34s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s34s3" name="s34" value="S34C3">
                                    <label for="s34s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s34s4" name="s34" value="S34C4">
                                    <label for="s34s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s34s5" name="s34" value="S34C5">
                                    <label for="s34s5"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>35. Sağlığımın kötüye gitmesini bekliyorum</label></td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s35s1" name="s35" value="S35C1" checked>
                                    <label for="s35s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s35s2" name="s35" value="S35C2">
                                    <label for="s35s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s35s3" name="s35" value="S35C3">
                                    <label for="s35s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s35s4" name="s35" value="S35C4">
                                    <label for="s35s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s35s5" name="s35" value="S35C5">
                                    <label for="s35s5"></label>
                                 </div>
                              </td>
                           </tr>

                           <tr>
                              <td><label>36. Sağlığım mükemmel</label>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s36s1" name="s36" value="S36C1" checked>
                                    <label for="s36s1"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s36s2" name="s36" value="S36C2">
                                    <label for="s36s2"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s36s3" name="s36" value="S36C3">
                                    <label for="s36s3"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s36s4" name="s36" value="S36C4">
                                    <label for="s36s4"></label>
                                 </div>
                              </td>
                              <td>
                                 <div class="icheck-primary">
                                    <input type="radio" id="s36s5" name="s36" value="S36C5">
                                    <label for="s36s5"></label>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </ol>
                     <br>





                  </div>
                  <div class="card-footer">
                     <nav id="mainav" class="fl_right">

                        <input style="margin: 5px" type="submit" class="btn btn-block btn-primary" name="insert7" value="Gönder">
                     </nav>
                  </div>
               </form>
            </div>
         </div>

      </div>

      <br>
      <br>
      <br>
   </div>
<?php
} else
   echo "<script>alert('Yetkiniz yok.');</script>";
?>