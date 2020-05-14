-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 May 2020, 14:51:39
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sahip` varchar(140) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gruplar`
--

INSERT INTO `gruplar` (`grup_id`, `ad`, `sahip`) VALUES
(3, 'İş', 'yunusemrecebe@gmail.com'),
(10, 'Tester', 'yunusemrecebe@gmail.com'),
(36, 'SolarTeam', 'adamimsemih-26@hotmail.comm'),
(37, 'Dönence', 'adamimsemih-26@hotmail.comm'),
(38, 'Ev', 'hasan@kaya.net'),
(39, 'Patso', 'hasan@kaya.net');

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
  `aciklama` varchar(140) COLLATE utf8_turkish_ci NOT NULL,
  `sahip` varchar(140) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`id`, `ad`, `soyad`, `kurulus`, `unvan`, `cep_no`, `ev_tel`, `grup`, `mail`, `aciklama`, `sahip`) VALUES
(2, 'Emirhan', 'Karahan', 'Dpü', 'Öğrenci', 5554717403, 5554717404, 'İş', 'ek@gmail.net', 'emo', 'yunusemrecebe@gmail.com'),
(3, 'Yunus Emre', 'Cebe', 'Çomü', 'Öğrenci', 5554717400, 1111111111, 'İş', 'yunusemrecebe@gmail.com', 'sahip', 'yunusemrecebe@gmail.com'),
(4, 'Domatesçi', 'Adem', 'Manav A.Ş', 'Manav', 1111111111, 1111111111, 'İş', 'domates@manav.net', 'domatesler güzeldir', 'yunusemrecebe@gmail.com'),
(5, 'Çetin', 'Ceviz', 'Ağaç', 'Meyve', 1111111111, 1111111111, 'Tester', 'cetin@ceviz.com', 'Çetin bir cevizdir o.', 'yunusemrecebe@gmail.com'),
(27, 'Mahmut', 'Tuncer', 'Flash TV', 'Halaybaşı', 1111111112, 1111111112, 'İş', 's@gmail.com', 'Halay çeker insanları eğlendirir', 'yunusemrecebe@gmail.com'),
(28, '556', '554', 'Htg', '65h', 5555555555, 5555555555, 'İş', '666644hh@vgt', 'Hhry56', 'yunusemrecebe@gmail.com'),
(29, 'mahmut', 'zincirkıran', 'wefwe', 'fewf', 3333333333, 3333333333, 'Tester', 'awd@gag', 'ada', 'yunusemrecebe@gmail.com'),
(30, 'semiko', 'dagiho', 'bugündendüne', 'çaylak', 5512717875, 5222222222, 'Tester', 'adamimsemih-26-26@hotmail.com', 'asfasf', 'yunusemrecebe@gmail.com'),
(31, 'Çetin', 'Ceviz', 'Ağaç', 'Meyve', 9876543210, 1234568790, 'Ev', 'cetin@ceviz.net', 'Çetin bir cevizdir o.', 'hasan@kaya.net'),
(32, 'Semih', 'Dağhan', 'dündenberi', 'Master', 2600056156, 2222222222, 'Yok', 'adamimsemih-26@hotmail.com', 'asgasgasg', 'adamimsemih-26@hotmail.comm'),
(33, 'Emirhan', 'Karahan', 'lkasnglaksg', 'naslkgnklas', 2600045345, 2222222222, 'Yok', 'adamimsemih-26@hotmail.comm', 'asgasgasg', 'adamimsemih-26@hotmail.comm');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log_islem`
--

CREATE TABLE `log_islem` (
  `log_islem_id` int(11) NOT NULL,
  `islem_tipi` varchar(140) COLLATE utf8_turkish_ci NOT NULL,
  `islem_zaman` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `islem_kisi` varchar(140) COLLATE utf8_turkish_ci NOT NULL,
  `islem_ip` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `log_islem`
--

INSERT INTO `log_islem` (`log_islem_id`, `islem_tipi`, `islem_zaman`, `islem_kisi`, `islem_ip`) VALUES
(189, '\'İş\' adlı grup oluşturuldu.', '14.05.2020 13:06:58', 'hasan@kaya.net', '88.244.99.44'),
(190, '\'Çetin Ceviz\' adlı kişi rehbere eklendi.', '14.05.2020 13:07:47', 'hasan@kaya.net', '88.244.99.44'),
(191, '\'İş\' adlı grubun adı \'İş Hasan\' olarak güncellendi.', '14.05.2020 13:08:26', 'hasan@kaya.net', '88.244.99.44'),
(192, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:46:38', 'hasan@kaya.net', '88.244.99.44'),
(193, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:46:42', 'hasan@kaya.net', '88.244.99.44'),
(194, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:47:53', 'hasan@kaya.net', '88.244.99.44'),
(195, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:47:57', 'hasan@kaya.net', '88.244.99.44'),
(196, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:48:03', 'hasan@kaya.net', '88.244.99.44'),
(197, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:48:35', 'hasan@kaya.net', '88.244.99.44'),
(198, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:49:08', 'hasan@kaya.net', '88.244.99.44'),
(199, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:49:17', 'hasan@kaya.net', '88.244.99.44'),
(200, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:49:18', 'hasan@kaya.net', '88.244.99.44'),
(201, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:49:22', 'hasan@kaya.net', '88.244.99.44'),
(202, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:49:24', 'hasan@kaya.net', '88.244.99.44'),
(203, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:49:44', 'hasan@kaya.net', '88.244.99.44'),
(204, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:49:50', 'hasan@kaya.net', '88.244.99.44'),
(205, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:49:56', 'hasan@kaya.net', '88.244.99.44'),
(206, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:49:58', 'hasan@kaya.net', '88.244.99.44'),
(207, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:50:06', 'hasan@kaya.net', '88.244.99.44'),
(208, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:50:22', 'hasan@kaya.net', '88.244.99.44'),
(209, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:51:59', 'hasan@kaya.net', '88.244.99.44'),
(210, '\'sadede gel\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 13:53:45', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(211, '\'mahmut zincirkıran\' adlı kişi \'sadede gel\' adlı gruptan çıkartıldı.', '14.05.2020 13:53:47', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(212, '\'sadede gel\' adlı grup silindi.', '14.05.2020 13:53:49', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(213, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:53:58', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(214, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:54:09', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(215, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:55:17', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(216, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:55:52', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(217, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:56:03', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(218, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 13:56:42', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(219, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 14:03:03', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(220, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 14:03:07', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(221, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 14:03:57', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(222, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 14:03:57', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(223, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 14:04:03', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(224, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:00:10', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(225, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:00:14', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(226, '\' \' adlı kişi \'\' adlı gruptan çıkartıldı.', '14.05.2020 15:00:15', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(227, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:00:17', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(228, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:00:31', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(229, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:00:32', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(230, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:00:42', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(231, '\' \' adlı kişi \'\' adlı gruptan çıkartıldı.', '14.05.2020 15:00:43', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(232, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:00:47', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(233, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:01:13', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(234, '\'Emirhan Karahan\' adlı kişi \'Okul\' adlı gruptan çıkartıldı.', '14.05.2020 15:01:14', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(235, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:01:16', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(236, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:01:24', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(237, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:02:35', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(238, '\'Emirhan Karahan\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:02:54', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(239, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:02:58', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(240, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:03:09', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(241, '\'Emirhan Karahan\' adlı kişi \'İş\' adlı gruptan çıkartıldı.', '14.05.2020 15:03:13', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(242, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:03:16', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(243, '\'Emirhan Karahan\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:03:25', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(244, '\'mahmut zincirkıran\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:03:34', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(245, '\'semiko dagiho\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:03:39', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(246, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:04:09', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(247, '\'İş\' adlı grubun adı \'İşler\' olarak güncellendi.', '14.05.2020 15:12:07', 'hasan@kaya.net', '88.244.99.44'),
(248, '\'İşler\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:12:10', 'hasan@kaya.net', '88.244.99.44'),
(249, '\'Çetin Ceviz\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:12:17', 'hasan@kaya.net', '88.244.99.44'),
(250, '\'İşler\' adlı grubun adı \'İşlersa\' olarak güncellendi.', '14.05.2020 15:19:20', 'hasan@kaya.net', '88.244.99.44'),
(251, '\'İşlersa\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:19:39', 'hasan@kaya.net', '88.244.99.44'),
(252, '\'Çetin Ceviz\' adlı kişi \'İşlersa\' adlı gruptan çıkartıldı.', '14.05.2020 15:19:41', 'hasan@kaya.net', '88.244.99.44'),
(253, '\'İşlersa\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:19:43', 'hasan@kaya.net', '88.244.99.44'),
(254, '\'İşlersa\' adlı grup silindi.', '14.05.2020 15:20:17', 'hasan@kaya.net', '88.244.99.44'),
(255, '\'Semih Dağhan\' adlı kişi rehbere eklendi.', '14.05.2020 15:20:36', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(256, '\'Patates\' adlı grup oluşturuldu.', '14.05.2020 15:20:49', 'hasan@kaya.net', '88.244.99.44'),
(257, '\'Dönence\' adlı grup oluşturuldu.', '14.05.2020 15:20:51', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(258, '\'Çetin Ceviz\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:20:58', 'hasan@kaya.net', '88.244.99.44'),
(259, '\'Ev\' adlı grup oluşturuldu.', '14.05.2020 15:21:14', 'hasan@kaya.net', '88.244.99.44'),
(260, '\'SolarTeam\' adlı grup oluşturuldu.', '14.05.2020 15:22:06', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(261, '\'SolarTeam\' adlı grubun adı \'Dönencee\' olarak güncellendi.', '14.05.2020 15:22:16', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(262, '\'Dönencee\' adlı grubun adı \'Dönence\' olarak güncellendi.', '14.05.2020 15:22:21', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(263, '\'SolarTeam\' adlı grup oluşturuldu.', '14.05.2020 15:22:37', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(264, '\'SolarTeam\' adlı grubun adı \'Dönence\' olarak güncellendi.', '14.05.2020 15:22:42', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(265, '\'Dönence\' adlı grup silindi.', '14.05.2020 15:22:50', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(266, '\'Emirhan Karahan\' adlı kişi rehbere eklendi.', '14.05.2020 15:23:35', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(267, '\'SolarTeam\' adlı grup oluşturuldu.', '14.05.2020 15:23:43', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(268, '\'Dönence\' adlı grup oluşturuldu.', '14.05.2020 15:23:45', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(269, '\'Semih Dağhan\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:23:52', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(270, '\'SolarTeam\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:24:02', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(271, '\'Semih Dağhan\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:24:41', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(272, '\'Emirhan Karahan\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:24:49', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(273, '\'SolarTeam\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:25:02', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(274, '\'Dönence\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:25:05', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(275, '\'SolarTeam\' adlı grubun adı \'Dönence\' olarak güncellendi.', '14.05.2020 15:25:16', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(276, '\'Dönence\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:25:18', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(277, '\'Emirhan Karahan\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:25:44', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(278, '\'Dönence\' adlı grubun adı \'SolarTeam\' olarak güncellendi.', '14.05.2020 15:26:37', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(279, '\'SolarTeam\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:26:40', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(280, '\'SolarTeam\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:26:47', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(281, '\'Dönence\' adlı grup oluşturuldu.', '14.05.2020 15:27:02', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(282, '\'SolarTeam\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:27:14', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(283, '\'Semih Dağhan\' adlı kişi \'SolarTeam\' adlı gruptan çıkartıldı.', '14.05.2020 15:27:15', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(284, '\'SolarTeam\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:27:17', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(285, '\'Emirhan Karahan\' adlı kişi \'SolarTeam\' adlı gruptan çıkartıldı.', '14.05.2020 15:27:18', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(286, '\'SolarTeam\' adlı grup silindi.', '14.05.2020 15:27:20', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(287, '\'Dönence\' adlı grup silindi.', '14.05.2020 15:27:23', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(288, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 15:27:28', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(289, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 15:27:48', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(290, '\'Semih Dağhan\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:28:15', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(291, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 15:28:37', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(292, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 15:29:43', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(293, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 15:33:57', 'hasan@kaya.net', '88.244.99.44'),
(294, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 15:34:19', 'hasan@kaya.net', '88.244.99.44'),
(295, '\'SolarTeam\' adlı grup oluşturuldu.', '14.05.2020 15:34:32', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(296, '\'Dönence\' adlı grup oluşturuldu.', '14.05.2020 15:34:42', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(297, '\'SolarTeam\' adlı grubun adı \'Dönence\' olarak güncellendi.', '14.05.2020 15:38:58', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(298, '\'Dönence\' adlı grup silindi.', '14.05.2020 15:39:22', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(299, '\'SolarTeam\' adlı grup oluşturuldu.', '14.05.2020 15:39:25', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(300, '\'Dönence\' adlı grup oluşturuldu.', '14.05.2020 15:39:27', 'adamimsemih-26@hotmail.comm', '24.133.98.33'),
(301, '\'Patates\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:40:21', 'hasan@kaya.net', '88.244.99.44'),
(302, '\'Ev\' adlı grubun adı \'Patates\' olarak güncellendi.', '14.05.2020 15:40:29', 'hasan@kaya.net', '88.244.99.44'),
(303, '\'Patates\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:41:53', 'hasan@kaya.net', '88.244.99.44'),
(304, '\'Çetin Ceviz\' adlı kişi \'Patates\' adlı gruptan çıkartıldı.', '14.05.2020 15:41:54', 'hasan@kaya.net', '88.244.99.44'),
(305, '\'Patates\' adlı grup silindi.', '14.05.2020 15:41:56', 'hasan@kaya.net', '88.244.99.44'),
(306, '\'Ev\' adlı grup oluşturuldu.', '14.05.2020 15:41:59', 'hasan@kaya.net', '88.244.99.44'),
(307, '\'Patso\' adlı grup oluşturuldu.', '14.05.2020 15:42:02', 'hasan@kaya.net', '88.244.99.44'),
(308, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 15:45:40', 'hasan@kaya.net', '88.244.99.44'),
(309, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 15:45:49', 'hasan@kaya.net', '88.244.99.44'),
(310, '\'Ev\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:45:57', 'hasan@kaya.net', '88.244.99.44'),
(311, '\'Çetin Ceviz\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:46:09', 'hasan@kaya.net', '88.244.99.44'),
(312, '\'Ev\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:46:21', 'hasan@kaya.net', '88.244.99.44'),
(313, 'Üye Giriş/Çıkış İşlemleri Log Tablosu Listelendi.', '14.05.2020 15:47:20', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(314, '\'Dans Kursu\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:47:34', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(315, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:47:47', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(316, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:47:49', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(317, '\'Dans Kursu\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:47:50', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(318, '\'Dans Kursu\' adlı grubun adı \'Okul \' olarak güncellendi.', '14.05.2020 15:47:56', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(319, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:47:59', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(320, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '14.05.2020 15:48:01', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(321, '\'Mahmut Tuncer\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:49:31', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(322, '\'Emirhan Karahan\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:49:36', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(323, '\'556 554\' adlı kişinin bilgileri güncellendi.', '14.05.2020 15:49:41', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(324, '\'Okul\' adlı grup silindi.', '14.05.2020 15:49:50', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(325, 'Rehber Kişileri İşlemleri Log Tablosu Listelendi.', '14.05.2020 15:50:11', 'yunusemrecebe@gmail.com', '88.244.99.44');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log_islem_uyeler`
--

CREATE TABLE `log_islem_uyeler` (
  `log_id` int(11) NOT NULL,
  `uye_islem_tipi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_islem_kisi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_islem_zaman` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_islem_ip` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `log_islem_uyeler`
--

INSERT INTO `log_islem_uyeler` (`log_id`, `uye_islem_tipi`, `uye_islem_kisi`, `uye_islem_zaman`, `uye_islem_ip`) VALUES
(52, '\'Hasan Kaya\' adlı kişi yeni üyelik oluşturdu.', 'hasan@kaya.net', '14.05.2020 13:06:27', '88.244.99.44'),
(53, 'Giriş yapıldı.', 'hasan@kaya.net', '14.05.2020 13:06:48', '88.244.99.44'),
(54, 'Çıkış yapıldı.', 'hasan@kaya.net', '14.05.2020 13:53:25', '88.244.99.44'),
(55, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '14.05.2020 13:53:32', '88.244.99.44'),
(56, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '14.05.2020 15:09:00', '88.244.99.44'),
(57, 'Giriş yapıldı.', 'hasan@kaya.net', '14.05.2020 15:09:49', '88.244.99.44'),
(58, 'Çıkış yapıldı.', 'hasan@kaya.net', '14.05.2020 15:13:42', '88.244.99.44'),
(59, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '14.05.2020 15:13:49', '88.244.99.44'),
(60, 'Giriş yapıldı.', 'hasan@kaya.net', '14.05.2020 15:18:45', '88.244.99.44'),
(61, '\'Semih Dağhann\' adlı kişi yeni üyelik oluşturdu.', 'adamimsemih-26@hotmail.comm', '14.05.2020 15:19:42', '24.133.98.33'),
(62, 'Giriş yapıldı.', 'adamimsemih-26@hotmail.comm', '14.05.2020 15:19:59', '24.133.98.33'),
(63, 'Giriş yapıldı.', 'adamimsemih-26@hotmail.comm', '14.05.2020 15:21:54', '24.133.98.33'),
(64, 'Giriş yapıldı.', 'adamimsemih-26@hotmail.comm', '14.05.2020 15:26:24', '24.133.98.33'),
(65, 'Giriş yapıldı.', 'adamimsemih-26@hotmail.comm', '14.05.2020 15:42:21', '24.133.98.33'),
(66, 'Çıkış yapıldı.', 'hasan@kaya.net', '14.05.2020 15:47:09', '88.244.99.44'),
(67, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '14.05.2020 15:47:14', '88.244.99.44'),
(68, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '14.05.2020 15:50:52', '88.244.99.44');

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
(2, 'Ruveyda Cebe', 'ruveydacebe@gmail.com', 5532571013, 'knksksk', 'rc123'),
(3, 'Test', 'test@gmail.com', 15443345, 'Dünya', '123'),
(10, 'Mahmut Tuncer', 'mahmut@gmail.net', 1111111111, 'Dünya', '123'),
(11, 'Deneme', 'deneme@gmail.com.com', 5555555555, '6288jei339en', '1234'),
(12, 'Ömer Hayyam', 'hayyam@omer.net', 9876543210, 'Bağ', '123'),
(13, 'Microsoft Edge', 'edge@microsoft.net', 9976543210, 'USA', '123'),
(14, 'Semih Dağhan', 'adamimsemih-26@hotmail.com', 5412717875, 'Eskişehir köy', '123456'),
(15, 'Hasan Kaya', 'hasan@kaya.net', 7896541230, 'Dünya', '123'),
(16, 'Semih Dağhann', 'adamimsemih-26@hotmail.comm', 5412717878, 'Eskişehir köy', '123456');

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
-- Tablo için indeksler `log_islem`
--
ALTER TABLE `log_islem`
  ADD PRIMARY KEY (`log_islem_id`);

--
-- Tablo için indeksler `log_islem_uyeler`
--
ALTER TABLE `log_islem_uyeler`
  ADD PRIMARY KEY (`log_id`);

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
  MODIFY `grup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Tablo için AUTO_INCREMENT değeri `log_islem`
--
ALTER TABLE `log_islem`
  MODIFY `log_islem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- Tablo için AUTO_INCREMENT değeri `log_islem_uyeler`
--
ALTER TABLE `log_islem_uyeler`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
