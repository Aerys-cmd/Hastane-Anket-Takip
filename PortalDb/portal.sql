-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 24 Ağu 2021, 10:36:05
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `portal`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `akademisyenkullanici`
--

CREATE TABLE `akademisyenkullanici` (
  `ID` int(11) NOT NULL,
  `UzmanlikAlani` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `KullaniciID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `akademisyenkullanici`
--

INSERT INTO `akademisyenkullanici` (`ID`, `UzmanlikAlani`, `KullaniciID`) VALUES
(1, 'Web Teknolojileri', 37),
(2, 'Yapay Zeka', 39);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cdo`
--

CREATE TABLE `cdo` (
  `ID` int(11) NOT NULL,
  `soru1` int(11) DEFAULT NULL,
  `soru2` int(11) DEFAULT NULL,
  `soru3` int(11) DEFAULT NULL,
  `soru4` int(11) DEFAULT NULL,
  `soru5` int(11) DEFAULT NULL,
  `soru6` int(11) DEFAULT NULL,
  `soru7` int(11) DEFAULT NULL,
  `soru8` int(11) DEFAULT NULL,
  `soru9` int(11) DEFAULT NULL,
  `soru10` int(11) DEFAULT NULL,
  `soru11` int(11) DEFAULT NULL,
  `soru12` int(11) DEFAULT NULL,
  `soru13` int(11) DEFAULT NULL,
  `soru14` int(11) DEFAULT NULL,
  `soru15` int(11) DEFAULT NULL,
  `soru16` int(11) DEFAULT NULL,
  `soru17` int(11) DEFAULT NULL,
  `soru18` int(11) DEFAULT NULL,
  `soru19` int(11) DEFAULT NULL,
  `soru20` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `cdo`
--

INSERT INTO `cdo` (`ID`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`, `soru6`, `soru7`, `soru8`, `soru9`, `soru10`, `soru11`, `soru12`, `soru13`, `soru14`, `soru15`, `soru16`, `soru17`, `soru18`, `soru19`, `soru20`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 1, 2, 4, 5, 5, 4, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cevap`
--

CREATE TABLE `cevap` (
  `ID` int(11) NOT NULL,
  `CevapIcerik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `SoruID` int(11) NOT NULL,
  `YollayanID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cevap`
--

INSERT INTO `cevap` (`ID`, `CevapIcerik`, `SoruID`, `YollayanID`) VALUES
(41, 'Cevap1', 12, 37);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hasta`
--

CREATE TABLE `hasta` (
  `id` int(11) NOT NULL,
  `soru1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru5` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru6` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru7` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru8` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru9` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru10` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru11` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru12` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru13` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru14` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru15` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru16` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru17` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru18` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hasta`
--

INSERT INTO `hasta` (`id`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`, `soru6`, `soru7`, `soru8`, `soru9`, `soru10`, `soru11`, `soru12`, `soru13`, `soru14`, `soru15`, `soru16`, `soru17`, `soru18`) VALUES
(2, 'enes yağız', '11/22/3333', '23', '190/120', '155', 'erkek', 'lisans', 'tansiyon ', 'dilaltı', '180', 'HAYIR', 'öğrenci', '1.dereceden', 'covid19', 'stabil', '3', '10', 'eleştri geliştirir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hastayakini`
--

CREATE TABLE `hastayakini` (
  `id` int(11) NOT NULL,
  `soru1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru5` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru6` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru7` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru8` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru9` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru10` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru11` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru12` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru13` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru14` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru15` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru16` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru17` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru18` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hastayakini`
--

INSERT INTO `hastayakini` (`id`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`, `soru6`, `soru7`, `soru8`, `soru9`, `soru10`, `soru11`, `soru12`, `soru13`, `soru14`, `soru15`, `soru16`, `soru17`, `soru18`) VALUES
(17, '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', 'EVET', '123', '123', '123', '123', '123', '8', '123'),
(49, 'enes yağız', '11/22/3333', '21', '190/120', '155', 'erkek', 'lisans', 'yok', 'yok', '155', 'HAYIR', 'öğrenci', '1.dereceden', 'covid19', 'stabil', '3', '10', 'eleştri geliştirir'),
(51, 'enes yağız', '11/22/3333', '21', '190/120', '155', 'erkek', 'lisans', 'yok', 'yok', '155', 'HAYIR', 'öğrenci', '1.dereceden', 'covid19', 'stabil', '3', '10', 'eleştri geliştirir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hastayakinikullanici`
--

CREATE TABLE `hastayakinikullanici` (
  `ID` int(11) NOT NULL,
  `HastaAdSoyad` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Yas` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `GelirDuzey` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `Meslek` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Egitim` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `HastaDogumTarih` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `HastaCinsiyet` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `HastalikTanisi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `KullandigiIlaclar` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `EngelDuzeyi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `EngelDuzeyiAciklama` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `MentalDikkat` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `MentalAlgi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `MentalHafiza` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `MentalAkilYurutme` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `MentalMuhakeme` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `MentalProblemCozme` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `HastaMeslek` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `HastaEgitimDurum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `KullaniciID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hastayakinikullanici`
--

INSERT INTO `hastayakinikullanici` (`ID`, `HastaAdSoyad`, `Yas`, `GelirDuzey`, `Meslek`, `Egitim`, `HastaDogumTarih`, `HastaCinsiyet`, `HastalikTanisi`, `KullandigiIlaclar`, `EngelDuzeyi`, `EngelDuzeyiAciklama`, `MentalDikkat`, `MentalAlgi`, `MentalHafiza`, `MentalAkilYurutme`, `MentalMuhakeme`, `MentalProblemCozme`, `HastaMeslek`, `HastaEgitimDurum`, `KullaniciID`) VALUES
(11, 'Recep OBUT', '21', 'İyi', 'Pazarcı', 'Lisans', '09.10.1990', 'Erkek', 'Covid', 'Nane Limon', '5', 'Yürüyemiyor', '4', '4', '4', '4', '4', '4', 'Mühendis', 'Lisans', 41),
(14, '', '22', 'Orta', 'Mühendis', 'Lise', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 44);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `ID` int(11) NOT NULL,
  `KullaniciAd` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `KullaniciSoyad` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `Cinsiyet` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `KullaniciSifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `YetkiNo` enum('1','2','3','4','5') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`ID`, `KullaniciAd`, `KullaniciSoyad`, `Cinsiyet`, `Mail`, `KullaniciSifre`, `YetkiNo`) VALUES
(1, 'Recep', 'Obut', 'Erkek', 'e9b9929c3f11344c874cf40c24e94c19', 'c3284d0f94606de1fd2af172aba15bf3', '1'),
(37, 'Yakup', 'Kutlu', 'Erkek', '6491fe4ef252e8e72e4b81e14a8ba618', 'd9b1d7db4cd6e70935368a1efb10e377', '2'),
(39, 'Ezgi', 'Duran', 'Kadın', 'e214f0fdd214ccd61ba79a0bca60d664', 'd9b1d7db4cd6e70935368a1efb10e377', '3'),
(40, 'Enes', 'Şenoğlu', 'Erkek', '537fc2defb7d7d62abd1837c9d32c893', 'd9b1d7db4cd6e70935368a1efb10e377', '4'),
(41, 'Ramazan', 'Kurt', 'Erkek', 'f60e55db28ce071b38cd2cacd9653b72', 'd9b1d7db4cd6e70935368a1efb10e377', '5'),
(44, 'Cemalcan', 'Bıyıklıoğlu', 'Erkek', '9c389a0addc3be90f14b395220b5f05c', 'd9b1d7db4cd6e70935368a1efb10e377', '5');

--
-- Tetikleyiciler `kullanici`
--
DELIMITER $$
CREATE TRIGGER `kullanicilog` BEFORE INSERT ON `kullanici` FOR EACH ROW BEGIN
  INSERT INTO log(log) VALUES(CONCAT(NEW.KullaniciAd,' ',NEW.KullaniciSoyad, ' adlı kullanıcı kayıt oldu.'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log`
--

CREATE TABLE `log` (
  `ID` int(11) NOT NULL,
  `Log` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `OkunduMu` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `log`
--

INSERT INTO `log` (`ID`, `Log`, `OkunduMu`) VALUES
(5, 'Deneme  Hesap adlı kullanıcı kayıt oldu.', b'1'),
(6, 'Yakup Kutlu adlı kullanıcı kayıt oldu.', b'1'),
(7, 'Yakup Kutlu adlı kullanıcı kayıt oldu.', b'1'),
(8, 'Ezgi Duran adlı kullanıcı kayıt oldu.', b'1'),
(9, 'Enes Şenoğlu adlı kullanıcı kayıt oldu.', b'1'),
(10, 'Ramazan Kurt adlı kullanıcı kayıt oldu.', b'1'),
(11, 'Cemalcan Bıyıklıoğlu adlı kullanıcı kayıt oldu.', b'1'),
(12, 'Cemalcan Bıyıklıoğlu adlı kullanıcı kayıt oldu.', b'1'),
(13, 'Cemalcan Bıyıklıoğlu adlı kullanıcı kayıt oldu.', b'1'),
(14, 'Yeni Soru Eklendi', b'1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `MenuBaslik` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `MenuURL` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `YetkiNo` enum('1','2','3','4','5') COLLATE utf8_turkish_ci NOT NULL,
  `MenuAktif` bit(1) NOT NULL DEFAULT b'1',
  `Aciklama` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`ID`, `MenuBaslik`, `MenuURL`, `YetkiNo`, `MenuAktif`, `Aciklama`) VALUES
(1, 'Sorular', 'soruliste', '2', b'1', ''),
(2, 'Hesabım', 'hesabim', '4', b'1', ''),
(3, 'Site Bilgileri', 'sitebilgileri', '1', b'1', ''),
(4, 'Hesabım', 'hesabim', '2', b'1', ''),
(7, 'Asistan İşlemleri', 'asistanislemleri', '3', b'1', ''),
(8, 'Anket-1', 'anket1', '5', b'1', ''),
(9, 'Anket-2', 'anket2', '5', b'1', ''),
(10, 'Anket-3', 'anket3', '5', b'1', ''),
(11, 'Anket-4', 'anket4', '4', b'1', ''),
(12, 'Anket-5', 'anket5', '5', b'1', ''),
(13, 'Anket-6', 'anket6', '5', b'1', ''),
(14, 'Anket-7', 'anket7', '5', b'1', ''),
(15, 'Anket-8', 'anket8', '5', b'1', ''),
(16, 'Anket Sonuç-1', 'tablo1', '1', b'1', ''),
(17, 'Anket Sonuç-2', 'tablo2', '1', b'1', ''),
(18, 'Anket Sonuç-3', 'tablo3', '1', b'1', ''),
(19, 'Anket Sonuç-4', 'tablo4', '1', b'1', ''),
(20, 'Anket Sonuç-5', 'tablo5', '1', b'1', ''),
(21, 'Anket Sonuç-6', 'tablo6', '1', b'1', ''),
(22, 'Anket Sonuç-7', 'tablo7', '1', b'1', ''),
(23, 'Anket Sonuç-8', 'tablo8', '1', b'1', ''),
(26, 'Anket Sonuç-6', 'tablo6', '2', b'1', ''),
(29, 'Anket Sonuç-5', 'tablo5', '2', b'1', ''),
(30, 'Anket Sonuç-4', 'tablo4', '2', b'1', ''),
(31, 'Anket Sonuç-3', 'tablo3', '2', b'1', ''),
(32, 'Anket Sonuç-2', 'tablo2', '2', b'1', ''),
(33, 'Anket Sonuç-1', 'tablo1', '2', b'1', ''),
(34, 'Sorulan Sorular', 'soruliste', '4', b'1', ''),
(35, 'Sorulan Sorular', 'soruliste', '5', b'1', ''),
(36, 'Yeni Soru', 'sorusor', '4', b'1', ''),
(37, 'Yeni Soru', 'sorusor', '5', b'1', ''),
(38, 'Anket Sonuç-7', 'tablo7', '2', b'1', ''),
(39, 'Anket Sonuç-8', 'tablo8', '2', b'1', ''),
(40, 'Hesabım', 'hesabim', '1', b'1', ''),
(41, 'Hesabım', 'hesabim', '3', b'1', ''),
(42, 'Hesabım', 'hesabim', '5', b'1', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odf`
--

CREATE TABLE `odf` (
  `ID` int(11) NOT NULL,
  `soru1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru7` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru8` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru9` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru10` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru11` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru12` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru13` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru14` int(11) DEFAULT NULL,
  `soru15` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `odf`
--

INSERT INTO `odf` (`ID`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`, `soru6`, `soru7`, `soru8`, `soru9`, `soru10`, `soru11`, `soru12`, `soru13`, `soru14`, `soru15`) VALUES
(4, 'Sampiyon Galatasaray', '19/05/1905', '1905', '1905', '1905', 'Erkek', 'Sampiyon', 'FatihTerim', '0', 'HAYIR', '1905', 'Sampiyon', 'Sampiyon', 10, ''),
(5, '20:00', '20', '08:00', '8', 'vki', 'Erkek', 'Deli', 'Aspirin', '700', 'EVET', '4', 'Ölücek', 'Öldü', 4, 'Hayır'),
(6, '', '', '', '', '', '', '', '', '1213', '', '', '', '', 0, ''),
(7, '', '', '', '', '', '', '', '', '1', '', '', '', '', 0, ''),
(8, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'dasdasd', 'asdasd', 'asdasd', 'asdasd', 'EVET', 'asdasd', 'asdasd', 'asdas', 0, ''),
(9, 'Deneme Deneme', '01.09.11', '23', '79', 'Hastalık Tanısı', 'Erkek', 'Kalp', 'Nane Limon', '1*5', 'EVET', '4', 'Kalp yetmezliği', '2', 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrencikullanici`
--

CREATE TABLE `ogrencikullanici` (
  `ID` int(11) NOT NULL,
  `Bolum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Sinif` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `Adres` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `BakimSaat` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `KullaniciID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogrencikullanici`
--

INSERT INTO `ogrencikullanici` (`ID`, `Bolum`, `Sinif`, `Adres`, `BakimSaat`, `KullaniciID`) VALUES
(5, 'Rehabilitasyon', '4', 'İstanbul', '15.00-20.00', 40);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pittsburgh`
--

CREATE TABLE `pittsburgh` (
  `ID` int(11) NOT NULL,
  `Adi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `Tarih` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `soru5` int(11) DEFAULT NULL,
  `soru6` int(11) DEFAULT NULL,
  `soru7` int(11) DEFAULT NULL,
  `soru8` int(11) DEFAULT NULL,
  `soru9` int(11) DEFAULT NULL,
  `soru10` int(11) DEFAULT NULL,
  `soru11` int(11) DEFAULT NULL,
  `soru12` int(11) DEFAULT NULL,
  `soru13` int(11) DEFAULT NULL,
  `soru14` int(11) DEFAULT NULL,
  `soru15` int(11) DEFAULT NULL,
  `soru16` int(11) DEFAULT NULL,
  `soru17` int(11) DEFAULT NULL,
  `soru18` int(11) DEFAULT NULL,
  `soru19` int(11) DEFAULT NULL,
  `soru20` int(11) DEFAULT NULL,
  `soru21` int(11) DEFAULT NULL,
  `soru22` int(11) DEFAULT NULL,
  `soru23` int(11) DEFAULT NULL,
  `soru24` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `pittsburgh`
--

INSERT INTO `pittsburgh` (`ID`, `Adi`, `Tarih`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`, `soru6`, `soru7`, `soru8`, `soru9`, `soru10`, `soru11`, `soru12`, `soru13`, `soru14`, `soru15`, `soru16`, `soru17`, `soru18`, `soru19`, `soru20`, `soru21`, `soru22`, `soru23`, `soru24`) VALUES
(1, 'Cemalcan Bıyıklıoğlu', '22.01.1999', '20:00', '20', '08:00', '8', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 2, 4, 2, 2, 3, 3, 3, 3, 3),
(2, 'Recep OBUT', '01/01/1990', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Recep OBUT 2 ', '01/01/1990', '03.00', '120', '08.00', '5', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 2, 2, 4, 4, 1, 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `soru`
--

CREATE TABLE `soru` (
  `ID` int(11) NOT NULL,
  `SoruBaslik` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `SoruIcerik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `AtananID` int(11) NOT NULL,
  `YollayanID` int(11) NOT NULL,
  `OkunduMu` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `soru`
--

INSERT INTO `soru` (`ID`, `SoruBaslik`, `SoruIcerik`, `AtananID`, `YollayanID`, `OkunduMu`) VALUES
(12, 'Deneme', 'Deneme', 37, 41, b'1'),
(13, 'Öğrenci Deneme Mesajı', 'Mesaj içeriği', 37, 40, b'0'),
(14, 'Anketler hk.', '123', 37, 41, b'0');

--
-- Tetikleyiciler `soru`
--
DELIMITER $$
CREATE TRIGGER `sorulog` AFTER INSERT ON `soru` FOR EACH ROW BEGIN
  INSERT INTO log(log) VALUES('Yeni Soru Eklendi');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorucevaplari`
--

CREATE TABLE `sorucevaplari` (
  `id` int(11) NOT NULL,
  `soru1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru5` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru6` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru7` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru8` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru9` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru10` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru11` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru12` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru13` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru14` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru15` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru16` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru17` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru18` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru19` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru20` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru21` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru22` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru23` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru24` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru25` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru26` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru27` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru28` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru29` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru30` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru31` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru32` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru33` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru34` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru35` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soru36` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `sorucevaplari`
--

INSERT INTO `sorucevaplari` (`id`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`, `soru6`, `soru7`, `soru8`, `soru9`, `soru10`, `soru11`, `soru12`, `soru13`, `soru14`, `soru15`, `soru16`, `soru17`, `soru18`, `soru19`, `soru20`, `soru21`, `soru22`, `soru23`, `soru24`, `soru25`, `soru26`, `soru27`, `soru28`, `soru29`, `soru30`, `soru31`, `soru32`, `soru33`, `soru34`, `soru35`, `soru36`) VALUES
(1, 'S1C1', 'S2C1', 'S3C1', 'S4C1', 'S5C1', 'S6C1', 'S7C1', 'S8C1', 'S9C1', 'S10C1', 'S11C1', 'S12C1', 'S13C1', 'S14C1', 'S15C1', 'S16C1', 'S17C1', 'S18C1', 'S19C1', 'S20C1', 'S21C1', 'S22C1', 'S23C1', 'S24C1', 'S25C1', 'S26C1', 'S27C1', 'S28C1', 'S29C1', 'S30C1', 'S31C1', 'S32C1', 'S33C1', 'S34C1', 'S35C1', 'S36C1'),
(4, 'S1C1', 'S2C1', 'S3C1', 'S4C1', 'S5C1', 'S6C1', 'S7C1', 'S8C1', 'S9C1', 'S10C1', 'S11C1', 'S12C1', 'S13C1', 'S14C1', 'S15C1', 'S16C1', 'S17C1', 'S18C1', 'S19C1', 'S20C1', 'S21C1', 'S22C1', 'S23C1', 'S24C1', 'S25C1', 'S26C1', 'S27C1', 'S28C1', 'S29C1', 'S30C1', 'S31C1', 'S32C1', 'S33C1', 'S34C1', 'S35C1', 'S36C1'),
(5, 'S1C1', 'S2C1', 'S3C1', 'S4C1', 'S5C1', 'S6C1', 'S7C3', 'S8C1', 'S9C1', 'S10C1', 'S11C1', 'S12C1', 'S13C1', 'S14C1', 'S15C1', 'S16C1', 'S17C1', 'S18C1', 'S19C1', 'S20C1', 'S21C1', 'S22C1', 'S23C1', 'S24C1', 'S25C1', 'S26C1', 'S27C1', 'S28C1', 'S29C1', 'S30C1', 'S31C1', 'S32C1', 'S33C1', 'S34C1', 'S35C1', 'S36C1'),
(6, 'S1C2', 'S2C2', 'S3C3', 'S4C2', 'S5C2', 'S6C3', 'S7C2', 'S8C3', 'S9C2', 'S10C3', 'S11C2', 'S12C3', 'S13C2', 'S14C2', 'S15C2', 'S16C2', 'S17C2', 'S18C2', 'S19C2', 'S20C5', 'S21C4', 'S22C3', 'S23C1', 'S24C2', 'S25C3', 'S26C4', 'S27C5', 'S28C6', 'S29C5', 'S30C4', 'S31C3', 'S32C4', 'S33C2', 'S34C3', 'S35C4', 'S36C5'),
(7, 'S1C1', 'S2C1', 'S3C1', 'S4C1', 'S5C1', 'S6C1', 'S7C1', 'S8C1', 'S9C1', 'S10C1', 'S11C1', 'S12C1', 'S13C1', 'S14C1', 'S15C1', 'S16C1', 'S17C1', 'S18C1', 'S19C1', 'S20C1', 'S21C1', 'S22C1', 'S23C1', 'S24C1', 'S25C1', 'S26C1', 'S27C1', 'S28C1', 'S29C1', 'S30C1', 'S31C1', 'S32C1', 'S33C1', 'S34C1', 'S35C1', 'S36C1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE `sorular` (
  `ID` int(11) NOT NULL,
  `soru1` int(11) DEFAULT NULL,
  `soru2` int(11) DEFAULT NULL,
  `soru3` int(11) DEFAULT NULL,
  `soru4` int(11) DEFAULT NULL,
  `soru5` int(11) DEFAULT NULL,
  `soru6` int(11) DEFAULT NULL,
  `soru7` int(11) DEFAULT NULL,
  `soru8` int(11) DEFAULT NULL,
  `soru9` int(11) DEFAULT NULL,
  `soru10` int(11) DEFAULT NULL,
  `toplam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`ID`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`, `soru6`, `soru7`, `soru8`, `soru9`, `soru10`, `toplam`) VALUES
(1, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 100),
(2, 0, 5, 0, 10, 10, 10, 10, 15, 15, 10, 85),
(3, 5, 5, 0, 10, 5, 5, 0, 0, 15, 0, 45),
(4, 5, 5, 0, 10, 5, 5, 0, 0, 15, 0, 45),
(5, 0, 5, 0, 0, 10, 10, 5, 5, 10, 10, 55),
(9, 10, 5, 5, 10, 10, 0, 10, 15, 15, 10, 90),
(10, 10, 0, 5, 0, 0, 10, 10, 5, 15, 5, 60),
(11, 10, 5, 5, 10, 10, 10, 10, 0, 0, 10, 70),
(15, 5, 5, 0, 10, 10, 0, 10, 0, 15, 5, 60),
(16, 5, 5, 0, 10, 10, 0, 10, 0, 15, 5, 60),
(17, 5, 5, 0, 0, 10, 10, 10, 10, 15, 5, 70),
(18, 0, 0, 5, 10, 10, 0, 0, 0, 15, 10, 50);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `warwick`
--

CREATE TABLE `warwick` (
  `soru1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru5` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru6` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru7` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru8` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru9` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru10` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru11` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru12` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru13` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soru14` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `warwick`
--

INSERT INTO `warwick` (`soru1`, `soru2`, `soru3`, `soru4`, `soru5`, `soru6`, `soru7`, `soru8`, `soru9`, `soru10`, `soru11`, `soru12`, `soru13`, `soru14`, `id`) VALUES
('s1s1', 's2s1', 's3s1', 's4s2', 's5s1', 's6s3', 's7s1', 's8s1', 's9s3', 's10s1', 's11s1', 's12s1', 's13s1', 's14s1', 1),
('s1s5', 's2s4', 's3s5', 's4s5', 's5s5', 's6s5', 's7s5', 's8s5', 's9s5', 's10s5', 's11s5', 's12s5', 's13s5', 's14s5', 2),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 3),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 4),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 5),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 6),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 7),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 8),
('s1s1', 's2s1', 's3s1', 's4s1', 's5s1', 's6s1', 's7s1', 's8s1', 's9s1', 's10s1', 's11s1', 's12s1', 's13s1', 's14s1', 9),
('s1s2', 's2s2', 's3s2', 's4s2', 's5s2', 's6s2', 's7s2', 's8s2', 's9s2', 's10s2', 's11s2', 's12s2', 's13s2', 's14s2', 10),
('s1s3', 's2s3', 's3s3', 's4s3', 's5s3', 's6s3', 's7s3', 's8s3', 's9s3', 's10s3', 's11s3', 's12s3', 's13s3', 's14s3', 11),
('s1s4', 's2s4', 's3s4', 's4s4', 's5s4', 's6s4', 's7s4', 's8s4', 's9s4', 's10s4', 's11s4', 's12s4', 's13s4', 's14s4', 12),
('s1s5', 's2s5', 's3s5', 's4s5', 's5s5', 's6s5', 's7s5', 's8s5', 's9s5', 's10s5', 's11s5', 's12s5', 's13s5', 's14s5', 13),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 14),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 15),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 16),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 17),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 18),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 19);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `akademisyenkullanici`
--
ALTER TABLE `akademisyenkullanici`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `cdo`
--
ALTER TABLE `cdo`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `cevap`
--
ALTER TABLE `cevap`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `hasta`
--
ALTER TABLE `hasta`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hastayakini`
--
ALTER TABLE `hastayakini`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hastayakinikullanici`
--
ALTER TABLE `hastayakinikullanici`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `odf`
--
ALTER TABLE `odf`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `ogrencikullanici`
--
ALTER TABLE `ogrencikullanici`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `pittsburgh`
--
ALTER TABLE `pittsburgh`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `soru`
--
ALTER TABLE `soru`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `sorucevaplari`
--
ALTER TABLE `sorucevaplari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sorular`
--
ALTER TABLE `sorular`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `warwick`
--
ALTER TABLE `warwick`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `akademisyenkullanici`
--
ALTER TABLE `akademisyenkullanici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `cdo`
--
ALTER TABLE `cdo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `cevap`
--
ALTER TABLE `cevap`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tablo için AUTO_INCREMENT değeri `hasta`
--
ALTER TABLE `hasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `hastayakini`
--
ALTER TABLE `hastayakini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Tablo için AUTO_INCREMENT değeri `hastayakinikullanici`
--
ALTER TABLE `hastayakinikullanici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `log`
--
ALTER TABLE `log`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `odf`
--
ALTER TABLE `odf`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `ogrencikullanici`
--
ALTER TABLE `ogrencikullanici`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `pittsburgh`
--
ALTER TABLE `pittsburgh`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `soru`
--
ALTER TABLE `soru`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `sorucevaplari`
--
ALTER TABLE `sorucevaplari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `sorular`
--
ALTER TABLE `sorular`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `warwick`
--
ALTER TABLE `warwick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
