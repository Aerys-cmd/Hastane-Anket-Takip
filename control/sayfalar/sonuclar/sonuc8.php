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
                     <h1 class="m-0"><span class="badge badge-light">Warwick-Edinburgh Mental İyi Oluş Ölçeği</h1></span></h1>
                  </h4>
               </div>
               <div class="card-body">
                  <br>
                  <form action="baglanti.php" method="POST">
                     <ol>
                        <table>
                           <tr>
                              <td></td>
                              <td> Hiç Katılmıyorum &nbsp;</td>
                              <td> Katılmıyorum &nbsp;</td>
                              <td> Biraz Katılıyorum &nbsp;</td>
                              <td> Katılıyorum &nbsp;</td>
                              <td> Tamamen Katılıyorum &nbsp;</td>
                           </tr>

                           <tr>
                              <td><label>1.Gelecekle ilgili iyimserim.</label></td>
                              <td>
                                 <?php
                                 $sql = "select count(soru1) as 'sayi' from warwick where soru1='s1s1' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru1) as 'sayi' from warwick where soru1='s1s2' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru1) as 'sayi' from warwick where soru1='s1s3' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru1) as 'sayi' from warwick where soru1='s1s4' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru1) as 'sayi' from warwick where soru1='s1s5' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                           </tr>

                           <tr>
                              <td><label>2. Kendimi işe yarar ( faydalı) hissediyorum.</label>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru2) as 'sayi' from warwick where soru2='s2s1' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru2) as 'sayi' from warwick where soru2='s2s2' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru2) as 'sayi' from warwick where soru2='s2s3' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru2) as 'sayi' from warwick where soru2='s2s4' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru2) as 'sayi' from warwick where soru2='s2s5' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                           </tr>

                           <tr>
                              <td><label>3. Kendimi rahatlamış hissediyorum.</label>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru3) as 'sayi' from warwick where soru3='s3s1' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>

                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru3) as 'sayi' from warwick where soru3='s3s2' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>

                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru3) as 'sayi' from warwick where soru3='s3s3' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru3) as 'sayi' from warwick where soru3='s3s4' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru3) as 'sayi' from warwick where soru3='s3s5' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                           </tr>

                           <tr>
                              <td><label>4. Diğer insanlara karşı ilgiliyim.</label>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru4) as 'sayi' from warwick where soru4='s4s1' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru4) as 'sayi' from warwick where soru4='s4s2' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>

                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru4) as 'sayi' from warwick where soru4='s4s3' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru4) as 'sayi' from warwick where soru4='s4s4' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru4) as 'sayi' from warwick where soru4='s4s5' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                           </tr>

                           <tr>
                              <td><label>5. Farklı işlere zaman ayırabilecek enerjim var.</label>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru5) as 'sayi' from warwick where soru5='s5s1' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?></td>
                              <td>
                                 <?php
                                 $sql = "select count(soru5) as 'sayi' from warwick where soru5='s5s2' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?></td>
                              <td>
                                 <?php
                                 $sql = "select count(soru5) as 'sayi' from warwick where soru5='s5s3' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru5) as 'sayi' from warwick where soru5='s5s4' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru5) as 'sayi' from warwick where soru5='s5s5' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                           </tr>


                           <tr>
                              <td><label>6. Sorunlarla iyi bir şekilde başa çıkabilirim.</label>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru6) as 'sayi' from warwick where soru6='s6s1' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?></td>
                              <td>
                                 <?php
                                 $sql = "select count(soru6) as 'sayi' from warwick where soru6='s6s2' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>

                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru6) as 'sayi' from warwick where soru6='s6s3' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru6) as 'sayi' from warwick where soru6='s6s4' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru6) as 'sayi' from warwick where soru6='s6s5' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                           </tr>

                           <tr>
                              <td><label>7. Açık ve net bir biçimde düşünebiliyorum.</label>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru7) as 'sayi' from warwick where soru7='s7s1' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?></td>
                              <td>
                                 <?php
                                 $sql = "select count(soru7) as 'sayi' from warwick where soru7='s7s2' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>

                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru7) as 'sayi' from warwick where soru7='s7s3' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru7) as 'sayi' from warwick where soru7='s7s4' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru7) as 'sayi' from warwick where soru7='s7s5' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>

                              </td>
                           </tr>

                           <tr>
                              <td><label>8. Kendimden memnunum.</label>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru8) as 'sayi' from warwick where soru8='s8s1' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>

                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru8) as 'sayi' from warwick where soru8='s8s2' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?></td>
                              <td>
                                 <?php
                                 $sql = "select count(soru8) as 'sayi' from warwick where soru8='s8s3' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $sql = "select count(soru8) as 'sayi' from warwick where soru8='s8s4' $sqlek";
                                 $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                 echo $row['sayi'];
                                 ?>
               </div>
               </td>
               <td>
                  <?php
                  $sql = "select count(soru8) as 'sayi' from warwick where soru8='s8s5' $sqlek";
                  $result = mysqli_query($con, $sql);
                  $row = mysqli_fetch_assoc($result);
                  echo $row['sayi'];
                  ?>

               </td>
               </tr>

               <tr>
                  <td><label>9. Kendimi diğer insanlara yakın hissediyorum.</label>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru9) as 'sayi' from warwick where soru9='s9s1' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru9) as 'sayi' from warwick where soru9='s9s2' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru9) as 'sayi' from warwick where soru9='s9s3' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru9) as 'sayi' from warwick where soru9='s9s4' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru9) as 'sayi' from warwick where soru9='s9s5' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
               </tr>

               <tr>
                  <td><label>10. Kendime güveniyorum.</label>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru10) as 'sayi' from warwick where soru10='s10s1' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?></td>
                  <td>
                     <?php
                     $sql = "select count(soru10) as 'sayi' from warwick where soru10='s10s2' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?></td>
                  <td>
                     <?php
                     $sql = "select count(soru10) as 'sayi' from warwick where soru10='s10s3' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru10) as 'sayi' from warwick where soru10='s10s4' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru10) as 'sayi' from warwick where soru10='s10s5' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
               </tr>
               <tr>
                  <td><label>11. Kendi kararlarımı kendim verebiliyorum.</label>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru11) as 'sayi' from warwick where soru11='s11s1' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru11) as 'sayi' from warwick where soru11='s11s2' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru11) as 'sayi' from warwick where soru11='s11s3' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru11) as 'sayi' from warwick where soru11='s11s4' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru11) as 'sayi' from warwick where soru11='s11s5' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
               </tr>
               <tr>
                  <td><label>12. Sevildiğimi hissediyorum.</label>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru12) as 'sayi' from warwick where soru12='s12s1' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru12) as 'sayi' from warwick where soru12='s12s2' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?></td>
                  <td>
                     <?php
                     $sql = "select count(soru12) as 'sayi' from warwick where soru12='s12s3' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru12) as 'sayi' from warwick where soru12='s12s4' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru12) as 'sayi' from warwick where soru12='s12s5' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
               </tr>
               <tr>
                  <td><label>13. Yeni şeylere karşı ilgiliyim.</label>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru13) as 'sayi' from warwick where soru13='s13s1' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru13) as 'sayi' from warwick where soru13='s13s2' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru13) as 'sayi' from warwick where soru13='s13s3' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru13) as 'sayi' from warwick where soru13='s13s4' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru13) as 'sayi' from warwick where soru13='s13s5' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
               </tr>
               <tr>
                  <td><label>14. Neşeli hissediyorum.</label>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru14) as 'sayi' from warwick where soru14='s14s1' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru14) as 'sayi' from warwick where soru14='s14s2' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru14) as 'sayi' from warwick where soru14='s14s3' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru14) as 'sayi' from warwick where soru14='s14s4' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>
                  </td>
                  <td>
                     <?php
                     $sql = "select count(soru14) as 'sayi' from warwick where soru14='s14s5' $sqlek";
                     $result = mysqli_query($con, $sql);
                     $row = mysqli_fetch_assoc($result);
                     echo $row['sayi'];
                     ?>

                  </td>
               </tr>
               </table>
               </ol>
               <br>




               </form>

               <br>
               <br>
               <br>
            <?php
         } else
            echo "<script>alert('Yetkiniz yok.');</script>";
            ?>
            </div>
         </div>
      </div>
   </div>
   </div>