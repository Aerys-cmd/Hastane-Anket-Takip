<?php

if (isset($_POST['hastaFormBtn'])) {
    $dizim = anketdata(15, 'hastaFormBtn', 's');

    if (AddHastaName($_SESSION['ID'], $dizim))
        header("Location: main.php?isAdded=true");
    else
        header("Location: main.php?isAdded=false");



    
}
$sql = "select * from hastayakinikullanici where KullaniciID={$_SESSION['ID']}";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Hasta Kayıt Form</h3>
                </div>
                <div class="card-body">
                    <form action="" , method="POST">
                        <?php
                        ?>
                        <h1 class="m-0">Hastanızın Bilgilerini Düzenleyin</h1>

                        <br>

                        <label>ADI SOYADI</label>
                        <br>
                        <div class="input-group">
                            <input type="text" name="s1" class="form-control" id="s1" value="<?php echo $data['HastaAdSoyad']; ?>">
                        </div>
                        <br>
                        <label>DOĞUM TARİHİ</label>
                        <br>
                        <div class="input-group">
                            <input type="text" name="s2" class="form-control" id="s2" value="<?php echo $data['HastaDogumTarih']; ?>">
                        </div>
                        <br>
                        <label>CİNSİYET</label>
                        <br>
                        <div class="input-group">
                            <input type="text" name="s3" class="form-control" id="s3" value="<?php echo $data['HastaCinsiyet']; ?>">
                        </div>
                        <br>
                        <label>HASTALIK TANISI</label>
                        <br>
                        <div class="input-group">
                            <input type="text" name="s4" class="form-control" id="s4" value="<?php echo $data['HastalikTanisi']; ?>">
                        </div>
                        <br>
                        <label>KULLANDIĞI İLAÇLAR</label>
                        <br>
                        <div class="input-group">
                            <input type="text" name="s5" class="form-control" id="s5" value="<?php echo $data['KullandigiIlaclar']; ?>">
                        </div>
                        <br>
                        <label>ENGEL DÜZEYİ</label>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s7c1" name="s6" value="1" <?php echo $data['EngelDuzeyi']==1 ? "checked" : ""; ?>>
                                            <label for="s7c1"></label>
                                            <label>Hafif düzeyde özel gereksinimi vardır.</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s7c2" name="s6" value="2" <?php echo $data['EngelDuzeyi']==2 ? "checked" : ""; ?>>
                                            <label for="s7c2"></label>
                                            <label>İleri düzeyde özel gereksinimi vardır.</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s7c3" name="s6" value="3" <?php echo $data['EngelDuzeyi']==3 ? "checked" : ""; ?>>
                                            <label for="s7c3"></label>
                                            <label>Çok ileri düzeyde özel gereksinimi vardır.</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s7c4" name="s6" value="4" <?php echo $data['EngelDuzeyi']==4 ? "checked" : ""; ?>>
                                            <label for="s7c4"></label>
                                            <label>Belirgin düzeyde özel gereksinimi vardır.</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s7c5" name="s6" value="5" <?php echo $data['EngelDuzeyi']==5 ? "checked" : ""; ?>>
                                            <label for="s7c5"></label>
                                            <label>Özle koşul gereksinimi vardır.</label>
                                        </div>
                                    </td>
                                </tr>

                            </thead>
                            <tbody>



                            </tbody>
                        </table>

                        <br>
                        <label>Engel düzeyini açıklayınız.</label>
                        <br>
                        <div class="input-group">
                            <input type="text" name="s7" class="form-control" id="s7" value="<?php echo $data['EngelDuzeyiAciklama']; ?>">
                        </div>
                        <br>
                        <label>MENTAL DÜZEYİ</label>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <td>
                                        ÇOK KÖTÜ-ÇOK İYİ
                                    </td>

                                    <td>
                                        1
                                    </td>

                                    <td>
                                        2
                                    </td>

                                    <td>
                                        3
                                    </td>

                                    <td>
                                        4
                                    </td>

                                    <td>
                                        5
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        DİKKAT
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s9c1" name="s8" value="1" <?php echo $data['MentalDikkat']==1 ? "checked" : ""; ?>>
                                            <label for="s9c1"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s9c2" name="s8" value="2" <?php echo $data['MentalDikkat']==2 ? "checked" : ""; ?>>
                                            <label for="s9c2"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s9c3" name="s8" value="3" <?php echo $data['MentalDikkat']==3 ? "checked" : ""; ?>>
                                            <label for="s9c3"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s9c4" name="s8" value="4" <?php echo $data['MentalDikkat']==4 ? "checked" : ""; ?>>
                                            <label for="s9c4"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s9c5" name="s8" value="5" <?php echo $data['MentalDikkat']==5 ? "checked" : ""; ?>>
                                            <label for="s9c5"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ALGI
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s10c1" name="s9" value="1" <?php echo $data['MentalAlgi']==1 ? "checked" : ""; ?>>
                                            <label for="s10c1"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s10c2" name="s9" value="2" <?php echo $data['MentalAlgi']==2 ? "checked" : ""; ?>>
                                            <label for="s10c2"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s10c3" name="s9" value="3" <?php echo $data['MentalAlgi']==3 ? "checked" : ""; ?>>
                                            <label for="s10c3"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s10c4" name="s9" value="4" <?php echo $data['MentalAlgi']==4 ? "checked" : ""; ?>>
                                            <label for="s10c4"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s10c5" name="s9" value="5" <?php echo $data['MentalAlgi']==5 ? "checked" : ""; ?>>
                                            <label for="s10c5"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        HAFIZA
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s11c1" name="s10" value="1" <?php echo $data['MentalHafiza']==1 ? "checked" : ""; ?>>
                                            <label for="s11c1"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s11c2" name="s10" value="2" <?php echo $data['MentalHafiza']==2 ? "checked" : ""; ?>>
                                            <label for="s11c2"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s11c3" name="s10" value="3" <?php echo $data['MentalHafiza']==3 ? "checked" : ""; ?>>
                                            <label for="s11c3"></label>

                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s11c4" name="s10" value="4" <?php echo $data['MentalHafiza']==4 ? "checked" : ""; ?>>
                                            <label for="s11c4"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s11c5" name="s10" value="5" <?php echo $data['MentalHafiza']==5 ? "checked" : ""; ?>>
                                            <label for="s11c5"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        AKIL YÜRÜTME
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s12c1" name="s11" value="1"  <?php echo $data['MentalAkilYurutme']==1 ? "checked" : ""; ?>>
                                            <label for="s12c1"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s12c2" name="s11" value="2" <?php echo $data['MentalAkilYurutme']==2 ? "checked" : ""; ?>>
                                            <label for="s12c2"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s12c3" name="s11" value="3" <?php echo $data['MentalAkilYurutme']==3 ? "checked" : ""; ?>>
                                            <label for="s12c3"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s12c4" name="s11" value="4" <?php echo $data['MentalAkilYurutme']==4 ? "checked" : ""; ?>>
                                            <label for="s12c4"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s12c5" name="s11" value="5" <?php echo $data['MentalAkilYurutme']==5 ? "checked" : ""; ?>>
                                            <label for="s12c5"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MUHAKEME
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s13c1" name="s12" value="1" <?php echo $data['MentalMuhakeme']==1 ? "checked" : ""; ?>>
                                            <label for="s13c1"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s13c2" name="s12" value="2" <?php echo $data['MentalMuhakeme']==2 ? "checked" : ""; ?>>
                                            <label for="s13c2"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s13c3" name="s12" value="3" <?php echo $data['MentalMuhakeme']==3 ? "checked" : ""; ?>>
                                            <label for="s13c3"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s13c4" name="s12" value="4" <?php echo $data['MentalMuhakeme']==4 ? "checked" : ""; ?>>
                                            <label for="s13c4"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s13c5" name="s12" value="5" <?php echo $data['MentalMuhakeme']==5 ? "checked" : ""; ?>>
                                            <label for="s13c5"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        PROBLEM ÇÖZME BECERİLERİ
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s14c1" name="s13" value="1" <?php echo $data['MentalProblemCozme']==1 ? "checked" : ""; ?>>
                                            <label for="s14c1"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s14c2" name="s13" value="2" <?php echo $data['MentalProblemCozme']==2 ? "checked" : ""; ?>>
                                            <label for="s14c2"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s14c3" name="s13" value="3" <?php echo $data['MentalProblemCozme']==3 ? "checked" : ""; ?>>
                                            <label for="s14c3"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s14c4" name="s13" value="4" <?php echo $data['MentalProblemCozme']==4 ? "checked" : ""; ?>>
                                            <label for="s14c4"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="icheck-primary">
                                            <input type="radio" id="s14c5" name="s13" value="5" <?php echo $data['MentalProblemCozme']==5 ? "checked" : ""; ?>>
                                            <label for="s14c5"></label>
                                        </div>
                                    </td>
                                </tr>
                        </table>
                        </thead>

                        <br>

                        <label>MESLEK</label>
                        <div class="input-group">
                            <input type="text" name="s14" class="form-control" id="s14" value="<?php echo $data['HastaMeslek']; ?>">
                        </div>
                        <br>


                        <h5>Eğitim Düzeyi</h5>
                        <div>
                            <label class="radio inline">
                                <input type="radio" name="s15" value="İlkokul" <?php echo $data['HastaEgitimDurum']=='İlkokul' ? "checked" : ""; ?>> İlkokul
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="s15" value="Ortaokul" <?php echo $data['HastaEgitimDurum']=='Ortaokul' ? "checked" : ""; ?>> Ortaokul
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="s15" value="Lise" <?php echo $data['HastaEgitimDurum']=='Lise' ? "checked" : ""; ?>> Lise
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="s15" value="Lisans" <?php echo $data['HastaEgitimDurum']=='Lisans' ? "checked" : ""; ?>> Lisans
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="s15" value="Lisansüstü ve sonrası" <?php echo $data['HastaEgitimDurum']=='Lisansüstü ve sonrası' ? "checked" : ""; ?>> Lisansüstü ve sonrası
                            </label>
                        </div>
                        <input style="margin:5px" type="submit" class="btn btn-primary " name="hastaFormBtn" value="Gönder">
                    </form>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>