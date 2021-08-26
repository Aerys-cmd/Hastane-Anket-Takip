<?php error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<header>
</header>
<h2> ---// Panel Giriş \\---</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="POST" action="control/sayfalar/fonksiyon/userFunc.php">
            <h1>Öğrenci Hesabı Oluştur</h1>
            <a href="index.php"><span>Hesabın var mı ? Hemen giriş yap.</span></a>
            <input class="form-control" id="inputsm" name="usermail" type="email" placeholder="Mail Adresiniz" />
            <div class="input-group">
            <input class="form-control"  name="username" type="text" placeholder="Adınız" />
            <input  class="form-control"  name="userlastname" type="text" placeholder="Soyadınız" />
            </div>
           <div class="input-group">
           <input class="form-control" id="inputsm" name="password" type="password" placeholder="Şifre" />
            <input class="form-control" id="inputsm" name="passwordr" type="password" placeholder="Şifre Tekrar" />
                </div>
            <input class="form-control" id="inputsm" name="Adres" type="text" placeholder="Adresiniz" />
            <input class="form-control" id="inputsm" name="Saat" type="text" placeholder="Bakım verebileceğiniz saatler. örn/ 15.00-21.00" />

            <label>Bölümünüz</label>
            <select name="Bolum" class="form-select" aria-label="Default select example">
                <option value="1">Fizyoterapi</option>
                <option value="2">Rehabilitasyon</option>
            </select>
            <label>Sınıfınız</label>
            <select name="Sinif" class="form-select" aria-label="Default select example">
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <label>Cinsiyet</label>
            <select name="Cinsiyet" class="form-select" aria-label="Default select example">
                <option value="1">Erkek</option>
                <option value="2">Kadın</option>
            </select>
            <button name="signupOgrenci">Kayıt Ol</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="POST" action="control/sayfalar/fonksiyon/userFunc.php">
            <h4>Hasta Yakını Kayıt Formu</h4>
            <a href="index.php"><span>Hesabın var mı ? Hemen giriş yap.</span></a>
            <input class="form-control" id="inputsm" name="usermail" type="email" placeholder="Mail Adresiniz" />
            <div class="input-group">
            <input class="form-control"  name="username" type="text" placeholder="Adınız" />
            <input  class="form-control"  name="userlastname" type="text" placeholder="Soyadınız" />
            </div>
           <div class="input-group">
           <input class="form-control" id="inputsm" name="password" type="password" placeholder="Şifre" />
            <input class="form-control" id="inputsm" name="passwordr" type="password" placeholder="Şifre Tekrar" />
                </div>
                <div class="input-group">
            <input class="form-control" id="inputsm" name="yas" type="text" placeholder="Yaşınız" />
            <input class="form-control" id="inputsm" name="meslek" type="text" placeholder="Mesleğiniz" />
            </div>
            <h5>Gelir Düzeyi</h5>
            <div>
           
            <label class="radio inline">
                    <input name="gelir" type="radio" id="inlineRadio01" value="İyi"> İyi
                </label>
                <label class="radio inline">
                    <input  name="gelir" type="radio" id="inlineRadio02" value="Orta" checked> Orta
                </label>
                <label class="radio inline">
                    <input  name="gelir" type="radio" id="inlineRadio03" value="Düşük" > Düşük
                </label>
            </div>
            <br>
            <h5>Eğitim Düzeyi</h5>
            <div>
                <label class="radio inline">
                    <input type="radio" name="egitim" value="İlkokul"> İlkokul
                </label>
                <label class="radio inline">
                    <input type="radio" name="egitim" value="Ortaokul"> Ortaokul
                </label>
                <label class="radio inline">
                    <input type="radio" name="egitim" value="Lise" checked > Lise
                </label>
                <label class="radio inline">
                    <input type="radio" name="egitim" value="Lisans"  > Lisans
                </label>
                <label class="radio inline">
                    <input type="radio" name="egitim" value="Lisansüstü ve sonrası" > Lisansüstü ve sonrası
                </label>
            </div>
            <h5>Cinsiyet</h5>
            <select name="Cinsiyet" class="form-select" aria-label="Default select example">
                <option value="1">Erkek</option>
                <option value="2">Kadın</option>
            </select>
            <br>
            <button name="signupHasta">Kayıt Ol</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1> Öğrenci Kayıt Formu için Butona tıklayın.</h1>
                <p></p>
                <button class="ghost" id="signUp">Öğrenci Kaydı</button>
            </div>
            <div class="overlay-panel overlay-left">
                <h1> Hasta Yakını Kayıt Formu için Butona tıklayın.</h1>
                <p></p>
                <button class="ghost" id="signInButton">Hasta Yakını Kaydı</button>
            </div>
        </div>
    </div>
</div>


<h2><?php
    $getURLData = "";
    if (isset($_GET['signup']))
        $getURLData = $_GET['signup'];
    else
        $getURLData = "tanımlanmadı.";

    if ($getURLData == "no")
        echo "Yanlış veya hatalı giriş yaptınız.Lütfen kontrol ediniz.";
    else if ($getURLData == "yes")
        echo "Kaydınız başarıyla oluşturuldu . Lütfen giriş yapın.";
    ?> </h2>

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
</style>

<link rel="stylesheet" href="cssjs/style.css">
<script src="cssjs/script.js"></script>