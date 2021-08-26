
<?php error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<header>
	</header>
<h2> ---// Panel Giriş \\---</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action="control/sayfalar/fonksiyon/userFunc.php">
			<h1>Giriş Yap</h1>
			<br>
			<br>
			<span>Hesabın yok mu ? Hemen kayıt ol.</span>
			<input name="signinname" type="text" placeholder="Kullanıcı Adı" />
			<input name="signinpassword" type="password" placeholder="************" />
			<button name="signIn">Giriş Yap</button>
		</form>
	</div>
	
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Tekrar Hoşgeldin</h1>
				<p>Kullanıcı bilgilerini girip giriş yapabilir veya kayıt olabilirsin.</p>
				<button class="ghost" onclick="window.location.href='signup.php'" id="signUp1">Kayıt Ol</button>
			</div>
			<div class="overlay-panel overlay-left">
				<h1> Merhaba</h1>
				<p>Lütfen gerçek bilgilerin ile kayıt ol.</p>
				<button class="ghost" id="signInButton1">Giriş Yap</button>
			</div>
		</div>
	</div>
</div>


<h2><?php
$getURLData="";
if(isset( $_GET['signup']))
$getURLData = $_GET['signup'];
else
$getURLData="tanımlanmadı.";

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