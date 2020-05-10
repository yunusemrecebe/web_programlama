-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 May 2020, 18:11:34
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
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gruplar`
--

INSERT INTO `gruplar` (`grup_id`, `ad`) VALUES
(1, 'Okul'),
(3, 'İş'),
(4, 'Dans Kursu'),
(10, 'Tester'),
(23, 'sadede gel');

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
(2, 'Emirhan', 'Karahan', 'Dpü', 'Öğrenci', 5554717403, 5554717404, 'Okul', 'ek@gmail.net', 'emo'),
(3, 'Yunus Emre', 'Cebe', 'Çomü', 'Öğrenci', 5554717400, 1111111111, 'İş', 'yunusemrecebe@gmail.com', 'sahip'),
(4, 'Domatesçi', 'Adem', 'Manav A.Ş', 'Manav', 1111111111, 1111111111, 'İş', 'domates@manav.net', 'domatesler güzeldir'),
(5, 'Çetin', 'Ceviz', 'Ağaç', 'Meyve', 1111111111, 1111111111, 'Tester', 'cetin@ceviz.com', 'Çetin bir cevizdir o.'),
(27, 'Mahmut', 'Tuncer', 'Flash TV', 'Halaybaşı', 1111111112, 1111111112, 'Dans Kursu', 's@gmail.com', 'Halay çeker insanları eğlendirir'),
(28, '556', '554', 'Htg', '65h', 5555555555, 5555555555, 'Okul', '666644hh@vgt', 'Hhry56'),
(29, 'mahmut', 'zincirkıran', 'wefwe', 'fewf', 3333333333, 3333333333, 'sadede gel', 'awd@gag', 'ada'),
(30, 'semiko', 'dagiho', 'bugündendüne', 'çaylak', 5512717875, 5222222222, 'Yok', 'adamimsemih-26-26@hotmail.com', 'asfasf');

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
(1, 'Kullanıcı ekranına giriş yapıldı.', '08.05.2020', 'yunusemrecebe@gmail.com', '127.0.0.1'),
(2, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 13:59:37', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(3, 'Kişiler ekranına giriş yapıldımı.', '08.05.2020 14:01:00', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(4, 'Kişiler ekranına giriş yapıldımıki.', '08.05.2020 14:05:06', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(5, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 14:06:28', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(6, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 14:08:31', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(7, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 14:08:31', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(8, 'Kişi silme işlemi yapıldı.', '08.05.2020 14:08:38', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(9, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 14:09:37', 'emirhan.k001@gmail.com', '88.233.55.122'),
(10, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 14:09:37', 'emirhan.k001@gmail.com', '88.233.55.122'),
(11, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 14:14:08', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(12, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 14:14:08', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(13, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 14:14:51', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(14, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 14:14:51', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(15, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 15:27:27', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(16, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 15:27:27', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(17, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 15:29:57', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(18, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 15:29:57', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(19, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 15:34:42', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(20, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 15:34:42', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(21, 'Kişi silme işlemi yapıldı.', '08.05.2020 15:34:53', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(22, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 15:37:47', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(23, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 15:39:20', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(24, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 15:56:35', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(25, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 15:57:12', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(26, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 15:57:27', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(27, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 15:57:33', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(28, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 15:57:41', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(29, ' adlı kişi  adlı gruptan çıkartıldı.', '08.05.2020 15:57:44', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(30, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 15:57:45', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(31, 'Çetin adlı kişi  adlı gruptan çıkartıldı.', '08.05.2020 16:00:06', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(32, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:00:07', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(33, 'Domatesçi adlı kişi  adlı gruptan çıkartıldı.', '08.05.2020 16:00:30', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(34, 'Domatesçi adlı kişi  adlı gruptan çıkartıldı.', '08.05.2020 16:03:05', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(35, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:03:39', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(36, 'Yunus Emre adlı kişi  adlı gruptan çıkartıldı.', '08.05.2020 16:03:42', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(37, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:05:02', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(38, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:05:02', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(39, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:05:05', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(40, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:05:06', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(41, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:05:07', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(42, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:05:10', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(43, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:05:34', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(44, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:05:42', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(45, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:05:46', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(46, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:05:49', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(47, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:05:54', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(48, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:06:10', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(49, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:06:26', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(50, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:06:32', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(51, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:06:34', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(52, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:08:59', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(53, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:09:08', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(54, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:09:13', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(55, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:09:17', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(56, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:09:21', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(57, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:09:24', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(58, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:09:27', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(59, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:09:32', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(60, ' adlı kişi  adlı gruptan çıkartıldı.', '08.05.2020 16:12:00', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(61, 'Emirhan adlı kişi  adlı gruptan çıkartıldı.', '08.05.2020 16:12:24', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(62, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:21:47', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(63, 'Çetin adlı kişi  adlı gruptan çıkartıldı.', '08.05.2020 16:21:50', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(64, 'Semih adlı kişi Okul adlı gruptan çıkartıldı.', '08.05.2020 16:25:28', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(65, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:25:52', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(66, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:25:58', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(67, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:26:02', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(68, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:26:07', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(69, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:26:12', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(70, 'Kişiler ekranına giriş yapıldı.', '08.05.2020 16:26:18', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(71, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:26:24', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(72, '\'Çetin\' adlı kişi \'Dans Kursu\' adlı gruptan çıkart', '08.05.2020 16:26:27', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(73, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:27:38', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(74, '\'Domatesçi Adem\' adlı kişi \'Okul\' adlı gruptan çıkartıldı.', '08.05.2020 16:28:38', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(75, 'Gruplar ekranına giriş yapıldı.', '08.05.2020 16:28:39', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(76, '\'Tester\' adlı grubun adı\'\' olarak güncellendi.', '08.05.2020 16:36:41', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(77, '\'Tester\' adlı grubun adı\'Testere\' olarak güncellendi.', '08.05.2020 16:37:57', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(78, '\'Testere\' adlı grubun adı\'Tester\' olarak güncellendi.', '08.05.2020 16:38:19', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(79, '\'Patso\' adlı grup silindi.', '08.05.2020 16:43:56', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(80, '\'Patso\' adlı grup oluşturuldu.', '08.05.2020 16:46:09', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(81, '\'Patso\' adlı grup oluşturuldu.', '08.05.2020 16:48:28', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(82, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 16:49:14', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(83, '\'Patso\' adlı grup silindi.', '08.05.2020 16:49:26', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(84, '\'Mahmut Tuncer\' kişi rehbere eklendi.', '08.05.2020 16:54:46', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(85, '\'Mahmut Tuncer\' adlı kişinin bilgilerinde güncelleme yapıldı.', '08.05.2020 16:58:24', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(86, '\'Mahmut Tuncer\' adlı kişi rehbere eklendi.', '08.05.2020 17:04:10', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(87, '\'Mahmut Tuncer\' adlı kişi rehbere eklendi.', '08.05.2020 17:04:34', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(88, '\'Mahmut Tuncer\' adlı kişi rehbere eklendi.', '08.05.2020 17:07:23', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(89, '\'Mahmut Tuncer\' adlı kişi rehbere eklendi.', '08.05.2020 17:08:23', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(90, '\'Mahmut Tuncer\' adlı kişi rehbere eklendi.', '08.05.2020 17:08:34', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(91, '\'Mahmut Tuncer\' adlı kişi rehbere eklendi.', '08.05.2020 17:09:33', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(92, '\'Mahmut Tuncer\' adlı kişi rehberden silindi.', '08.05.2020 17:09:42', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(93, '\'Mahmut Tuncer\' adlı kişi rehbere eklendi.', '08.05.2020 17:09:58', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(94, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:10:50', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(95, '\'Yunus Emre Cebe\' adlı kişi \'Okul\' adlı gruptan çıkartıldı.', '08.05.2020 17:11:07', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(96, '\'Ev\' adlı grubun adı \'Eve\' olarak güncellendi.', '08.05.2020 17:11:18', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(97, '\'Eve\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:11:32', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(98, '\'Eve\' adlı grup silindi.', '08.05.2020 17:11:38', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(99, '\'Ev\' adlı grup oluşturuldu.', '08.05.2020 17:11:51', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(100, '\'Mahmut Tuncer\' adlı kişi yeni üyelik oluşturdu.', '08.05.2020 17:18:12', 'mahmut@gmail.net', '88.238.198.155'),
(101, '\'Mahmut Tuncer\' adlı kişinin bilgileri güncellendi.', '08.05.2020 17:19:05', 'mahmut@gmail.net', '88.238.198.155'),
(102, '\'Ev\' adlı grup oluşturuldu.', '08.05.2020 17:24:30', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(103, '\'Ev\' adlı grup silindi.', '08.05.2020 17:24:54', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(104, '\'Ev\' adlı grup oluşturuldu.', '08.05.2020 17:24:56', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(105, '\'Ev\' adlı grup oluşturuldu.', '08.05.2020 17:24:58', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(106, '\'Ev\' adlı grup silindi.', '08.05.2020 17:25:03', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(107, '\'Ev\' adlı grup oluşturuldu.', '08.05.2020 17:25:08', 'yunusemrecebe@gmail.com', '88.238.198.155'),
(108, '\'Yunus Emre Cebe\' adlı kişinin bilgileri güncellendi.', '08.05.2020 17:32:14', 'yunusemrecebe@gmail.com', '::1'),
(109, '\'Domatesçi Adem\' adlı kişinin bilgileri güncellendi.', '08.05.2020 17:32:20', 'yunusemrecebe@gmail.com', '::1'),
(110, '\'Çetin Ceviz\' adlı kişinin bilgileri güncellendi.', '08.05.2020 17:32:25', 'yunusemrecebe@gmail.com', '::1'),
(111, '\'Dans Kursu\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:32:31', 'yunusemrecebe@gmail.com', '::1'),
(112, '\'Mahmut Tuncer\' adlı kişi \'Dans Kursu\' adlı gruptan çıkartıldı.', '08.05.2020 17:32:34', 'yunusemrecebe@gmail.com', '::1'),
(113, '\'Mahmut Tuncer\' adlı kişinin bilgileri güncellendi.', '08.05.2020 17:32:48', 'yunusemrecebe@gmail.com', '::1'),
(114, '\'Deneme\' adlı kişi yeni üyelik oluşturdu.', '08.05.2020 17:36:48', 'deneme@gmail.com.com', '88.233.55.122'),
(115, '\'556 554\' adlı kişi rehbere eklendi.', '08.05.2020 17:38:21', 'deneme@gmail.com.com', '88.233.55.122'),
(116, '\'3454\' adlı grup oluşturuldu.', '08.05.2020 17:39:26', 'deneme@gmail.com.com', '88.233.55.122'),
(117, '\'3454\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:42:32', 'yunusemrecebe@gmail.com', '::1'),
(118, '\'3454\' adlı grup silindi.', '08.05.2020 17:46:38', 'deneme@gmail.com.com', '88.233.55.122'),
(119, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:47:48', 'deneme@gmail.com.com', '88.233.55.122'),
(120, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:47:55', 'yunusemrecebe@gmail.com', '::1'),
(121, '\'Dans Kursu\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:48:00', 'deneme@gmail.com.com', '88.233.55.122'),
(122, '\'Ev\' adlı grup silindi.', '08.05.2020 17:48:02', 'deneme@gmail.com.com', '88.233.55.122'),
(123, '\'Dans Kursu\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:48:10', 'yunusemrecebe@gmail.com', '::1'),
(124, '\'Tester\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:48:15', 'deneme@gmail.com.com', '88.233.55.122'),
(125, '\'halay_bağımlıları\' adlı grup oluşturuldu.', '08.05.2020 17:48:53', 'deneme@gmail.com.com', '88.233.55.122'),
(126, '\'halay_bağımlıları\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:48:58', 'deneme@gmail.com.com', '88.233.55.122'),
(127, '\'halay_bağımlıları\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:49:02', 'deneme@gmail.com.com', '88.233.55.122'),
(128, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:49:05', 'deneme@gmail.com.com', '88.233.55.122'),
(129, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:49:45', 'yunusemrecebe@gmail.com', '::1'),
(130, '\'mahmut zincirkıran\' adlı kişi rehbere eklendi.', '08.05.2020 17:50:03', 'deneme@gmail.com.com', '88.233.55.122'),
(131, '\'halay_bağımlıları\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:50:25', 'deneme@gmail.com.com', '88.233.55.122'),
(132, '\'halay_bağımlıları\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:50:36', 'yunusemrecebe@gmail.com', '::1'),
(133, '\'halay_bağımlıları\' adlı grup silindi.', '08.05.2020 17:50:39', 'yunusemrecebe@gmail.com', '::1'),
(134, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:52:05', 'yunusemrecebe@gmail.com', '::1'),
(135, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:52:08', 'yunusemrecebe@gmail.com', '::1'),
(136, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:52:24', 'yunusemrecebe@gmail.com', '::1'),
(137, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:52:27', 'yunusemrecebe@gmail.com', '::1'),
(138, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:52:30', 'yunusemrecebe@gmail.com', '::1'),
(139, '\'Dans Kursu\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:55:42', 'yunusemrecebe@gmail.com', '::1'),
(140, '\'Dans Kursu\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:55:45', 'yunusemrecebe@gmail.com', '::1'),
(141, '\'Dans Kursu\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:55:53', 'yunusemrecebe@gmail.com', '::1'),
(142, '\'İş\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:55:59', 'yunusemrecebe@gmail.com', '::1'),
(143, '\'İş\' adlı grubun adı \'Is\' olarak güncellendi.', '08.05.2020 17:56:08', 'yunusemrecebe@gmail.com', '::1'),
(144, '\'Is\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 17:56:11', 'yunusemrecebe@gmail.com', '::1'),
(145, '\'Is\' adlı grubun adı \'İş\' olarak güncellendi.', '08.05.2020 17:56:20', 'yunusemrecebe@gmail.com', '::1'),
(146, '\'Dans Kursu\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 18:01:14', 'yunusemrecebe@gmail.com', '::1'),
(147, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 20:16:31', 'yunusemrecebe@gmail.com', '178.241.212.138'),
(148, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '08.05.2020 20:41:45', 'yunusemrecebe@gmail.com', '178.241.212.138'),
(149, '\'Ömer Hayyam\' adlı kişi yeni üyelik oluşturdu.', '09.05.2020 15:53:22', 'hayyam@omer.net', '88.244.99.44'),
(150, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:17:11', 'yunusemrecebe@gmail.com', '178.241.212.138'),
(151, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:17:15', 'yunusemrecebe@gmail.com', '178.241.212.138'),
(152, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:17:42', 'yunusemrecebe@gmail.com', '178.241.212.138'),
(153, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:17:51', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(154, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:17:58', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(155, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:18:26', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(156, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:18:56', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(157, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:19:01', 'yunusemrecebe@gmail.com', '178.241.212.138'),
(158, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:19:17', 'yunusemrecebe@gmail.com', '178.241.212.138'),
(159, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:20:00', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(160, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:20:02', 'yunusemrecebe@gmail.com', '178.241.212.138'),
(161, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:20:42', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(162, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:20:44', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(163, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:21:02', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(164, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:55:04', 'deneme@gmail.com.com', '88.233.55.122'),
(165, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:55:20', 'deneme@gmail.com.com', '88.233.55.122'),
(166, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:55:49', 'deneme@gmail.com.com', '88.233.55.122'),
(167, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:56:23', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(168, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '09.05.2020 16:56:36', 'yunusemrecebe@gmail.com', '178.241.212.138'),
(169, '\'Yeşil Yol\' adlı grup oluşturuldu.', '10.05.2020 00:25:04', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(170, '\'Yeşil Yol\' adlı grup için listeleme işlemi yapıldı.', '10.05.2020 00:25:07', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(171, '\'mahmut zincirkıran\' adlı kişinin bilgileri güncellendi.', '10.05.2020 00:25:19', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(172, '\'Yeşil Yol\' adlı grup için listeleme işlemi yapıldı.', '10.05.2020 00:25:32', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(173, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '10.05.2020 01:33:08', 'yunusemrecebe@gmail.com', '88.244.99.44'),
(174, '\'Microsoft Edge\' adlı kişi yeni üyelik oluşturdu.', '10.05.2020 02:01:57', 'edge@microsoft.net', '88.244.99.44'),
(175, '\'Semih Dağhan\' adlı kişi yeni üyelik oluşturdu.', '10.05.2020 18:20:16', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(176, '\'Semih Dağhan\' adlı kişi rehberden silindi.', '10.05.2020 18:30:45', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(177, '\'Semih Dağhan\' adlı kişi rehbere eklendi.', '10.05.2020 18:33:29', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(178, '\'semiko dagiho\' adlı kişinin bilgileri güncellendi.', '10.05.2020 18:34:09', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(179, '\'Dönence\' adlı grup oluşturuldu.', '10.05.2020 18:34:35', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(180, '\'semiko dagiho\' adlı kişinin bilgileri güncellendi.', '10.05.2020 18:34:45', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(181, '\'Dönence\' adlı grup için listeleme işlemi yapıldı.', '10.05.2020 18:34:50', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(182, '\'Dönence\' adlı grup için listeleme işlemi yapıldı.', '10.05.2020 18:35:11', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(183, '\'semiko dagiho\' adlı kişi \'Dönence\' adlı gruptan çıkartıldı.', '10.05.2020 18:35:13', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(184, '\'Dönence\' adlı grup silindi.', '10.05.2020 18:35:17', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(185, '\'Yeşil Yol\' adlı grup için listeleme işlemi yapıldı.', '10.05.2020 18:35:29', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(186, '\'Yeşil Yol\' adlı grubun adı \'sadede gel\' olarak güncellendi.', '10.05.2020 18:35:36', 'adamimsemih-26@hotmail.com', '24.133.98.33'),
(187, '\'Okul\' adlı grup için listeleme işlemi yapıldı.', '10.05.2020 18:57:51', 'edge@microsoft.net', '88.244.99.44'),
(188, '\'Tester\' adlı grup için listeleme işlemi yapıldı.', '10.05.2020 18:57:59', 'edge@microsoft.net', '88.244.99.44');

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
(1, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 15:29:56', '88.238.198.155'),
(2, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 15:31:56', '88.238.198.155'),
(3, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 15:34:41', '88.238.198.155'),
(4, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 17:16:37', '88.238.198.155'),
(5, 'Giriş yapıldı.', 'mahmut@gmail.net', '08.05.2020 17:18:51', '88.238.198.155'),
(6, 'Çıkış yapıldı.', 'mahmut@gmail.net', '08.05.2020 17:19:22', '88.238.198.155'),
(7, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 17:24:22', '88.238.198.155'),
(8, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 17:30:07', '88.238.198.155'),
(9, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 17:31:36', '::1'),
(10, 'Giriş yapıldı.', 'deneme@gmail.com.com', '08.05.2020 17:37:15', '88.233.55.122'),
(11, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 17:41:54', '::1'),
(12, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 17:42:08', '::1'),
(13, 'Giriş yapıldı.', 'deneme@gmail.com.com', '08.05.2020 17:46:32', '88.233.55.122'),
(14, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 18:36:51', '::1'),
(15, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 18:37:09', '::1'),
(16, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 19:21:38', '::1'),
(17, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '08.05.2020 20:16:24', '178.241.212.138'),
(18, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '09.05.2020 15:13:12', '88.244.99.44'),
(19, 'Giriş yapıldı.', 'hayyam@omer.net', '09.05.2020 15:53:34', '88.244.99.44'),
(20, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '09.05.2020 16:36:39', '88.244.99.44'),
(21, 'Giriş yapıldı.', 'deneme@gmail.com.com', '09.05.2020 16:54:41', '88.233.55.122'),
(22, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '09.05.2020 16:55:51', '88.244.99.44'),
(23, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '09.05.2020 19:33:49', '88.244.99.44'),
(24, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '09.05.2020 19:44:15', '88.244.99.44'),
(25, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '09.05.2020 23:21:44', '::1'),
(26, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 00:22:18', '88.244.99.44'),
(27, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 00:22:41', '88.244.99.44'),
(28, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 00:26:37', '88.244.99.44'),
(29, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 00:40:59', '88.244.99.44'),
(30, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 00:41:30', '178.241.212.138'),
(31, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 01:30:49', '88.244.99.44'),
(32, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 01:33:21', '88.244.99.44'),
(33, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 01:36:57', '88.244.99.44'),
(34, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 01:37:01', '88.244.99.44'),
(35, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 01:41:23', '88.244.99.44'),
(36, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 01:41:26', '88.244.99.44'),
(37, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 01:47:20', '88.244.99.44'),
(38, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 01:52:44', '88.244.99.44'),
(39, 'Giriş yapıldı.', 'edge@microsoft.net', '10.05.2020 02:02:16', '88.244.99.44'),
(40, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 02:04:45', '::1'),
(41, 'Giriş yapıldı.', 'adamimsemih-26@hotmail.com', '10.05.2020 18:20:32', '24.133.98.33'),
(42, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 18:21:34', '88.244.99.44'),
(43, 'Çıkış yapıldı.', 'adamimsemih-26@hotmail.com', '10.05.2020 18:24:46', '24.133.98.33'),
(44, 'Giriş yapıldı.', 'adamimsemih-26@hotmail.com', '10.05.2020 18:26:28', '24.133.98.33'),
(45, 'Giriş yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 18:26:32', '178.245.62.22'),
(46, 'Çıkış yapıldı.', 'yunusemrecebe@gmail.com', '10.05.2020 18:28:08', '88.244.99.44'),
(47, 'Çıkış yapıldı.', 'adamimsemih-26@hotmail.com', '10.05.2020 18:39:00', '24.133.98.33'),
(48, 'Giriş yapıldı.', 'edge@microsoft.net', '10.05.2020 18:57:14', '88.244.99.44'),
(49, 'Çıkış yapıldı.', 'edge@microsoft.net', '10.05.2020 18:58:14', '88.244.99.44');

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
(14, 'Semih Dağhan', 'adamimsemih-26@hotmail.com', 5412717875, 'Eskişehir köy', '123456');

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
  MODIFY `grup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `log_islem`
--
ALTER TABLE `log_islem`
  MODIFY `log_islem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- Tablo için AUTO_INCREMENT değeri `log_islem_uyeler`
--
ALTER TABLE `log_islem_uyeler`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
