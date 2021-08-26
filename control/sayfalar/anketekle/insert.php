<?php
//Sayfa post edildiğinden Header'daki include edilen dosyalara ulaşamıyor. Bu sebeple tek seferlik burada include edildi.
//Ekleme işlemi bittikten sonra AnaSayfaya aktarıldı.
include '../fonksiyon/config.php';
include '../fonksiyon/function.php';
session_start();

if (isset($_POST['btn_gndr'])) {
    $soru1 = $_POST['a'];
    $soru2 = $_POST['b'];
    $soru3 = $_POST['c'];
    $soru4 = $_POST['d'];
    $soru5 = $_POST['e'];
    $soru6 = $_POST['f'];
    $soru7 = $_POST['g'];
    $soru8 = $_POST['h'];
    $soru9 = $_POST['i'];
    $soru10 = $_POST['j'];
    $toplam = $soru1 + $soru2 + $soru3 + $soru4 + $soru5 + $soru6 + $soru7 + $soru8 + $soru9 + $soru10;


    $sql = "INSERT INTO sorular (soru1, soru2, soru3, soru4, soru5, soru6, soru7, soru8, soru9, soru10, toplam) VALUES ($soru1,$soru2,$soru3,$soru4,$soru5,$soru6,$soru7,$soru8,$soru9,$soru10,$toplam)";

    if (mysqli_query($con, $sql))
        header("Location: ../../main.php?isAdded=true");
    else
        header("Location: ../../main.php?isAdded=false");
}
if (isset($_POST['btn_gndr2'])) {
    $dizim = anketdata(20, 'btn_gndr2', 's');

    $sql = "INSERT INTO cdo (soru1, soru2, soru3, soru4, soru5, soru6, soru7, soru8, soru9, soru10,soru11, soru12, soru13, soru14, soru15, soru16, soru17, soru18, soru19, soru20) VALUES ('$dizim[0]','$dizim[1]','$dizim[2]','$dizim[3]','$dizim[4]','$dizim[5]','$dizim[6]','$dizim[7]','$dizim[8]','$dizim[9]','$dizim[10]','$dizim[11]','$dizim[12]','$dizim[13]','$dizim[14]','$dizim[15]','$dizim[16]','$dizim[17]','$dizim[18]','$dizim[19]')";
    if (mysqli_query($con, $sql))
        header("Location: ../../main.php?isAdded=true");
    else
        header("Location: ../../main.php?isAdded=false");
}
if (isset($_POST['btn_gndr3'])) {
    $dizim = anketdata(24, 'btn_gndr3', 's');
    $ad = $_POST["adi"];
    $date = $_POST['datetime'];
    $sql = "INSERT INTO pittsburgh (Adi, Tarih, soru1, soru2, soru3, soru4, soru5, soru6, soru7, soru8, soru9, soru10,soru11, soru12, soru13, soru14, soru15, soru16, soru17, soru18, soru19, soru20, soru21, soru22, soru23, soru24) VALUES ('$ad','$date','$dizim[0]','$dizim[1]','$dizim[2]','$dizim[3]','$dizim[4]','$dizim[5]','$dizim[6]','$dizim[7]','$dizim[8]','$dizim[9]','$dizim[10]','$dizim[11]','$dizim[12]','$dizim[13]','$dizim[14]','$dizim[15]','$dizim[16]','$dizim[17]','$dizim[18]','$dizim[19]','$dizim[20]','$dizim[21]','$dizim[22]','$dizim[23]')";
    if (mysqli_query($con, $sql))
        header("Location: ../../main.php?isAdded=true");
    else
        header("Location: ../../main.php?isAdded=false");
}
if (isset($_POST['btn_gndr4'])) {
    $dizim = anketdata(15, 'btn_gndr4', 's');

    $soru9s1 = $_POST['s9s1'];
    $soru9s2 = $_POST['s9s2'];

    if ($soru9s1 != "") {
        $soru9 = $soru9s1;
    } else {
        $soru9 = $soru9s2;
    }


    $sql = "INSERT INTO odf (soru1, soru2, soru3, soru4, soru5, soru6, soru7, soru8, soru9, soru10,soru11, soru12, soru13, soru14, soru15) VALUES ('$dizim[0]','$dizim[1]','$dizim[2]','$dizim[3]','$dizim[4]','$dizim[5]','$dizim[6]','$dizim[7]','$soru9','$dizim[9]','$dizim[10]','$dizim[11]','$dizim[12]','$dizim[13]','$dizim[14]')";



    if (mysqli_query($con, $sql))
        header("Location: ../../main.php?isAdded=true");
    else
        header("Location: ../../main.php?isAdded=false");
}
if (isset($_POST['insert5'])) {
    $dizim = anketdata(18, 'insert5', 's');
    $soru10s1 = $_POST['s10s1'];
    $soru10s2 = $_POST['s10s2'];

    if ($soru10s1 != "") {
        $soru10 = $soru10s1;
    } else {
        $soru10 = $soru10s2;
    }
    $soru18s1 = $_POST['s18s1'];
    $soru18s2 = $_POST['s18s2'];

    if ($soru18s1 != "") {
        $soru18 = $soru18s1;
    } else {
        $soru18 = $soru18s2;
    }

    $sql = "INSERT INTO hasta(soru1,soru2,soru3,soru4,soru5,soru6,soru7,soru8,soru9,soru10,soru11,soru12,soru13,soru14,soru15,soru16,soru17,soru18) VALUES ('$dizim[0]','$dizim[1]','$dizim[2]','$dizim[3]','$dizim[4]','$dizim[5]','$dizim[6]','$dizim[7]','$dizim[8]','$soru10','$dizim[10]','$dizim[11]','$dizim[12]','$dizim[13]','$dizim[14]','$dizim[15]','$dizim[16]','$soru18')";

    if (mysqli_query($con, $sql))
        header("Location: ../../main.php?isAdded=true");
    else
        header("Location: ../../main.php?isAdded=false");
}
if (isset($_POST['insert6'])) {
    $dizim = anketdata(18, 'insert6', 's');
    $soru10s1 = $_POST['s10s1'];
    $soru10s2 = $_POST['s10s2'];

    if ($soru10s1 != "") {
        $soru10 = $soru10s1;
    } else {
        $soru10 = $soru10s2;
    }
    $soru18s1 = $_POST['s18s1'];
    $soru18s2 = $_POST['s18s2'];

    if ($soru18s1 != "") {
        $soru18 = $soru18s1;
    } else {
        $soru18 = $soru18s2;
    }

    $sql = "INSERT INTO hastayakini(soru1,soru2,soru3,soru4,soru5,soru6,soru7,soru8,soru9,soru10,soru11,soru12,soru13,soru14,soru15,soru16,soru17,soru18) VALUES ('$dizim[0]','$dizim[1]','$dizim[2]','$dizim[3]','$dizim[4]','$dizim[5]','$dizim[6]','$dizim[7]','$dizim[8]','$soru10','$dizim[10]','$dizim[11]','$dizim[12]','$dizim[13]','$dizim[14]','$dizim[15]','$dizim[16]','$soru18')";

    if (mysqli_query($con, $sql))
        header("Location: ../../main.php?isAdded=true");
    else
        header("Location: ../../main.php?isAdded=false");
}
if (isset($_POST['insert7'])) {
    $cevapi = $_POST['si'];
    $cevap2 = $_POST['s2'];
    $cevap3 = $_POST['s3'];
    $cevap4 = $_POST['s4'];
    $cevap5 = $_POST['s5'];
    $cevap6 = $_POST['s6'];
    $cevap7 = $_POST['s7'];
    $cevap8 = $_POST['s8'];
    $cevap9 = $_POST['s9'];
    $cevap10 = $_POST['s10'];
    $cevap11 = $_POST['s11'];
    $cevap12 = $_POST['s12'];
    $cevap13 = $_POST['s13'];
    $cevap14 = $_POST['s14'];
    $cevap15 = $_POST['s15'];
    $cevap16 = $_POST['s16'];
    $cevap17 = $_POST['s17'];
    $cevap18 = $_POST['s18'];
    $cevap19 = $_POST['s19'];
    $cevap20 = $_POST['s20'];
    $cevap21 = $_POST['s21'];
    $cevap22 = $_POST['s22'];
    $cevap23 = $_POST['s23'];
    $cevap24 = $_POST['s24'];
    $cevap25 = $_POST['s25'];
    $cevap26 = $_POST['s26'];
    $cevap27 = $_POST['s27'];
    $cevap28 = $_POST['s28'];
    $cevap29 = $_POST['s29'];
    $cevap30 = $_POST['s30'];
    $cevap31 = $_POST['s31'];
    $cevap32 = $_POST['s32'];
    $cevap33 = $_POST['s33'];
    $cevap34 = $_POST['s34'];
    $cevap35 = $_POST['s35'];
    $cevap36 = $_POST['s36'];




    $sql = "INSERT INTO sorucevaplari (soru1,soru2,soru3,soru4,soru5,soru6,soru7,soru8,soru9,soru10,soru11,soru12,soru13,soru14,soru15	,soru16,soru17,soru18,soru19,soru20,soru21,soru22,soru23,soru24,soru25,soru26,soru27,soru28,soru29,soru30,soru31,soru32,soru33,	soru34,soru35,soru36) VALUES ('$cevap1','$cevap2','$cevap3','$cevap4','$cevap5','$cevap6','$cevap7','$cevap8','$cevap9','$cevap10',
      '$cevap11','$cevap12','$cevap13','$cevap14','$cevap15','$cevap16','$cevap17','$cevap18','$cevap19','$cevap20','$cevap21','$cevap22',
      '$cevap23','$cevap24','$cevap25','$cevap26','$cevap27','$cevap28','$cevap29','$cevap30','$cevap31','$cevap32','$cevap33','$cevap34','$cevap35','$cevap36')";

    if (mysqli_query($con, $sql))
        header("Location: ../../main.php?isAdded=true");
    else
        header("Location: ../../main.php?isAdded=false");
}
if (isset($_POST['insert8'])) {

    $dizim = anketdata(14, 'insert8', 's');
    $sql = "INSERT INTO warwick(soru1,soru2,soru3,soru4,soru5,soru6,soru7,soru8,soru9,soru10,soru11,soru12,soru13,soru14) VALUES ('$dizim[0]','$dizim[1]','$dizim[2]','$dizim[3]','$dizim[4]','$dizim[5]','$dizim[6]','$dizim[7]','$dizim[8]','$dizim[9]','$dizim[10]','$dizim[11]','$dizim[12]','$dizim[13]')";

    if (mysqli_query($con, $sql))
        header("Location: ../../main.php?isAdded=true");
    else
        header("Location: ../../main.php?isAdded=false");
}
