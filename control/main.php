<?php
ob_start();
include 'header.php';
if (!isset($_SESSION['ID']))
  header("Location: /../portal/index.php?Login=PleaseLogin");
else {
  if (!empty($_GET['sayfaadi']))
    $sayfaadi = $_GET['sayfaadi'] . '.php';
  else
    include 'sayfalar/mainpage.php';

  if (strpos($sayfaadi, 'sonuc') !== false && file_exists('sayfalar/sonuclar/' . $sayfaadi))
    include 'sayfalar/sonuclar/' . $sayfaadi;
  else if (strpos($sayfaadi, 'anket') !== false && file_exists('sayfalar/anketler/' . $sayfaadi))
    include 'sayfalar/anketler/' . $sayfaadi;
  else if (strpos($sayfaadi, 'tablo') !== false && file_exists('sayfalar/tablolar/' . $sayfaadi))
    include 'sayfalar/tablolar/' . $sayfaadi;
  else if (file_exists('sayfalar/' . $sayfaadi))
    include 'sayfalar/' . $sayfaadi;
  else
    include 'sayfalar/' . '404.php';

  include 'footer.php';
}
