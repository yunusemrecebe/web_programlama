-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Nis 2020, 03:23:20
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rehber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gruplar`
--

CREATE TABLE `gruplar` (
  `grup_id` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gruplar`
--

INSERT INTO `gruplar` (`grup_id`, `ad`) VALUES
(1, 'Okul'),
(2, 'Ev'),
(3, 'İş'),
(4, 'Dans Kursu'),
(6, 'Tester'),
(7, 'Kayseri');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE `kisiler` (
  `id` int(11) NOT NULL,
  `ad` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `kurulus` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `unvan` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `cep_no` bigint(11) NOT NULL,
  `ev_tel` bigint(11) NOT NULL,
  `grup` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(140) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`id`, `ad`, `soyad`, `kurulus`, `unvan`, `cep_no`, `ev_tel`, `grup`, `mail`, `aciklama`) VALUES
(1, 'Semih', 'Dağhan', 'Çomü', 'Öğrenci', 54127178750, 54127178740, 'Okul', 'semihd@gmail.com', 'patates'),
(2, 'Emirhan', 'Karahan', 'Dpü', 'Öğrenci', 5554717403, 5554717404, 'Okul', 'ek@gmail.net', 'emo'),
(3, 'Yunus Emre', 'Cebe', 'Çomü', 'Öğrenci', 5554717400, 5554717415, 'İş', 'yunusemrecebe@gmail.com', 'sahip'),
(4, 'Domatesçi', 'Adem', 'Manav A.Ş', 'Manav', 2020202, 2020200, 'İş', 'domates@manav.net', 'domatesler güzeldir'),
(5, 'Çetin', 'Ceviz', 'Ağaç', 'Meyve', 0, 1111, 'İş', 'çetin@ceviz.com', 'Çetin bir cevizdir o.'),
(7, 'Mahmut', 'Tuncer', 'Flash TV', 'Halay ve Türkü Uzmanı', 20202020, 5005505, 'Yok', 'mahmut@tuncer.net', 'Halay'),
(8, 'Tester', 'Mehmet', 'Testing A.Ş', 'Testçi', 202020, 202020, 'Tester', 'tester@mehmet.net', 'test mehmeti');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` bigint(11) NOT NULL,
  `kullanici_adres` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `kullanici_adi`, `kullanici_mail`, `kullanici_tel`, `kullanici_adres`, `kullanici_sifre`) VALUES
(1, 'Yunus Emre Cebe', 'yunusemrecebe@gmail.com', 5554717400, 'Avcılar', '123'),
(2, 'Ruveyda Cebe', 'ruveydacebe@gmail.com', 5532571013, 'knksksk', 'rc123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `gruplar`
--
ALTER TABLE `gruplar`
  ADD PRIMARY KEY (`grup_id`);

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `gruplar`
--
ALTER TABLE `gruplar`
  MODIFY `grup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
