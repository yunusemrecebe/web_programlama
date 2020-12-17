-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Ara 2020, 20:42:05
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
-- Veritabanı: `bkbskblog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `Name` varchar(140) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`Id`, `Name`) VALUES
(1, 'Rota'),
(2, 'Haber'),
(3, 'Test');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `Id` int(11) NOT NULL,
  `Owner` int(11) NOT NULL,
  `Content` int(11) NOT NULL,
  `Topic` varchar(140) COLLATE utf8_turkish_ci NOT NULL,
  `Text` longtext COLLATE utf8_turkish_ci NOT NULL,
  `CreationDate` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Confirm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`Id`, `Owner`, `Content`, `Topic`, `Text`, `CreationDate`, `Confirm`) VALUES
(22, 1, 6, 'Hayırlı işler dilerim', '<p>ben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimben mazot içmeyi severimV</p>\r\n', '23.11.2020 13:19:11', 1),
(25, 3, 6, 'sa', 'sa', '23.11.2020 14:07:37', 1),
(26, 3, 6, 'sa', '<p>sasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasa</p>\r\n', '23.11.2020 14:07:37', 0),
(34, 3, 9, 'test', 'yorum', '24.11.2020 12:06:31', 1),
(35, 1, 97, 'Deeneme yorumu', 'as', '06.12.2020 00:09:31', 1),
(36, 1, 97, 'marab', 'nsa', '06.12.2020 00:10:01', 1),
(37, 1, 97, 'Gerçek bir yorum', '<p>Evet bu konu çok hoşuma gitti gayet güzel hazırlanmış bir konu gerçekten tebrik eder başarılarınızın devamını dilerim 100 hak eden bir proje&nbsp;Evet bu konu çok hoşuma gitti gayet güzel hazırlanmış bir konu gerçekten tebrik eder başarılarınızın devamını dilerim 100 hak eden bir proje</p>\r\n', '06.12.2020 00:36:15', 1),
(42, 16, 99, 'Ben ahmet', 'Ahmet bey bir deneme yorumu yolladı', '06.12.2020 21:42:27', 1),
(45, 17, 119, 'Yorum mu bu', 'evet bi bir yorum', '06.12.2020 22:14:31', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(140) COLLATE utf8_turkish_ci NOT NULL,
  `EMail` varchar(140) COLLATE utf8_turkish_ci NOT NULL,
  `Message` varchar(540) COLLATE utf8_turkish_ci NOT NULL,
  `SendDate` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `EMail`, `Message`, `SendDate`) VALUES
(1, 'jonas', 'jonas@gmail.net', 'Ich bin Jonas', '06.12.2020 16:06:21'),
(4, 'Yunus Emre Cebe', 'yunusemrecebe@gmail.com', 'Bu bir iletişim mesajıdır', '06.12.2020 21:23:15'),
(5, 'Yunus Emre Cebe', 'yunusemrecebe@gmail.com', 'bu bir iletişim için test mesajıdır', '06.12.2020 21:40:19'),
(6, 'Yunus Emre Cebe', 'yunus@cebe.net', 'mesaj gönderdim geldi mi?', '06.12.2020 22:07:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contents`
--

CREATE TABLE `contents` (
  `Id` int(11) NOT NULL,
  `Owner` int(11) NOT NULL,
  `Category` int(11) NOT NULL,
  `Topic` varchar(140) COLLATE utf8_turkish_ci NOT NULL,
  `Text` longtext COLLATE utf8_turkish_ci NOT NULL,
  `Pictures` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `CreationDate` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Confirm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contents`
--

INSERT INTO `contents` (`Id`, `Owner`, `Category`, `Topic`, `Text`, `Pictures`, `CreationDate`, `Confirm`) VALUES
(6, 1, 3, 'Benzin', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '../images/3.jpg', '2', 1),
(7, 6, 2, 'Where does it come from?', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', '../images/2.jpg', '11/22/20 14:43', 1),
(9, 1, 3, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '../images/1.jpg', '11/22/20 14:44', 1),
(97, 3, 1, 'Deneme konusu paylaşımı', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales ut eu sem integer. Cras adipiscing enim eu turpis egestas pretium aenean pharetra magna. Quam nulla porttitor massa id neque aliquam. Nunc sed augue lacus viverra vitae congue. Nibh sed pulvinar proin gravida hendrerit lectus. Aenean sed adipiscing diam donec adipiscing. Duis ut diam quam nulla. Imperdiet dui accumsan sit amet nulla facilisi. Scelerisque viverra mauris in aliquam sem fringilla ut morbi. Tristique risus nec feugiat in fermentum posuere. Vivamus arcu felis bibendum ut tristique. Elit ut aliquam purus sit amet luctus venenatis lectus magna. Sit amet commodo nulla facilisi.</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/files/122428421_10220934625810445_5405071018844579281_o.jpg\" style=\"height:1072px; width:1440px\" /></p>\r\n\r\n<p>Senectus et netus et malesuada fames ac. Faucibus et molestie ac feugiat sed lectus. Lacinia at quis risus sed vulputate odio ut enim. Diam quis enim lobortis scelerisque. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sit amet facilisis magna etiam tempor orci eu. Hac habitasse platea dictumst quisque sagittis purus sit amet. Purus sit amet luctus venenatis lectus magna fringilla urna porttitor. Morbi tristique senectus et netus et malesuada fames ac turpis. Semper viverra nam libero justo laoreet sit. Sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Semper auctor neque vitae tempus quam pellentesque nec nam aliquam. Senectus et netus et malesuada fames ac turpis.</p>\r\n\r\n<p>Massa vitae tortor condimentum lacinia quis vel eros. Magna ac placerat vestibulum lectus mauris ultrices eros in. Tortor condimentum lacinia quis vel. Pellentesque pulvinar pellentesque habitant morbi tristique senectus. Diam sollicitudin tempor id eu nisl nunc mi. Convallis posuere morbi leo urna molestie at elementum eu facilisis. At volutpat diam ut venenatis. Sollicitudin ac orci phasellus egestas tellus rutrum tellus. Urna molestie at elementum eu facilisis sed odio morbi quis. Vulputate odio ut enim blandit volutpat. Quisque non tellus orci ac. Bibendum enim facilisis gravida neque. Nibh nisl condimentum id venenatis a. Erat pellentesque adipiscing commodo elit. Ut venenatis tellus in metus vulputate eu scelerisque felis imperdiet.</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/files/122428421_10220934625810445_5405071018844579281_o.jpg\" style=\"height:1072px; width:1440px\" /></p>\r\n\r\n<p>Ut ornare lectus sit amet. Aliquam vestibulum morbi blandit cursus. Libero justo laoreet sit amet cursus. Nibh ipsum consequat nisl vel. Ultrices eros in cursus turpis massa tincidunt. Quis viverra nibh cras pulvinar. In fermentum et sollicitudin ac. Tortor posuere ac ut consequat. Sed adipiscing diam donec adipiscing tristique. Tincidunt augue interdum velit euismod in pellentesque massa placerat. Lectus arcu bibendum at varius vel. Consectetur a erat nam at lectus. Sit amet luctus venenatis lectus. Elementum nibh tellus molestie nunc non blandit. Gravida rutrum quisque non tellus orci ac auctor augue mauris. Felis imperdiet proin fermentum leo vel. Sagittis vitae et leo duis ut diam quam nulla. At consectetur lorem donec massa sapien faucibus et molestie ac. Diam in arcu cursus euismod. Tortor posuere ac ut consequat semper viverra nam.</p>\r\n\r\n<p>Volutpat blandit aliquam etiam erat velit scelerisque in. Porttitor lacus luctus accumsan tortor. Eu lobortis elementum nibh tellus molestie. Etiam erat velit scelerisque in dictum non consectetur a. Nibh mauris cursus mattis molestie a iaculis. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae. Aliquet sagittis id consectetur purus ut faucibus. Non nisi est sit amet facilisis magna etiam tempor orci. Commodo odio aenean sed adipiscing. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Varius duis at consectetur lorem donec. Quam lacus suspendisse faucibus interdum. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget. Ut eu sem integer vitae justo eget magna. Sed augue lacus viverra vitae congue eu consequat ac. Nibh tellus molestie nunc non. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Egestas quis ipsum suspendisse ultrices gravida dictum fusce ut. Aliquet nibh praesent tristique magna. Elit at imperdiet dui accumsan sit amet nulla.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '../uploads/55ea44bbf018fbb8f87506bc.jpg', '06.12.2020 00:01:16', 1),
(98, 3, 2, 'Semih Siteyi Gördü', '<p>ŞOK ŞOK ŞOK !!! SEMİH SİTEYİ GÖRDÜ</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/files/55ea44bbf018fbb8f87506bc.jpg\" style=\"height:422px; width:750px\" /></p>\r\n\r\n<p>Mauris ultrices eros in cursus turpis massa. Id velit ut tortor pretium viverra suspendisse potenti. Tristique nulla aliquet enim tortor at auctor urna nunc. Vitae congue eu consequat ac felis donec et. Sit amet nisl suscipit adipiscing bibendum est. Euismod in pellentesque massa placerat duis ultricies. Morbi non arcu risus quis varius quam quisque id diam. A arcu cursus vitae congue mauris rhoncus aenean. Massa tincidunt nunc pulvinar sapien et. Fames ac turpis egestas integer eget aliquet nibh praesent tristique. Enim eu turpis egestas pretium aenean pharetra magna ac placerat. Leo in vitae turpis massa sed elementum tempus egestas sed. Nec feugiat nisl pretium fusce id velit. Aliquet nibh praesent tristique magna sit amet purus. Turpis egestas integer eget aliquet nibh praesent tristique magna. Dictum fusce ut placerat orci nulla. Dolor morbi non arcu risus. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Egestas fringilla phasellus faucibus scelerisque.</p>\r\n', '../uploads/Untitled.png', '06.12.2020 11:24:23', 1),
(99, 3, 2, 'Kırlangıç sitesi hayırlı olsun', '<p>&nbsp;Kırlangıç bisikletin sitesi açıldı&nbsp;&nbsp;Kırlangıç bisikletin sitesi açıldı&nbsp;&nbsp;Kırlangıç bisikletin sitesi açıldı&nbsp;&nbsp;Kırlangıç bisikletin sitesi açıldı&nbsp;&nbsp;Kırlangıç bisikletin sitesi açıldı&nbsp;&nbsp;Kırlangıç bisikletin sitesi açıldı&nbsp;&nbsp;Kırlangıç bisikletin sitesi açıldı&nbsp;&nbsp;Kırlangıç bisikletin sitesi açıldı&nbsp;<img alt=\"\" src=\"/ckfinder/userfiles/files/122428421_10220934625810445_5405071018844579281_o(1).jpg\" style=\"height:1072px; width:1440px\" /></p>\r\n', '../uploads/DSC_6608_2.jpg', '06.12.2020 21:30:47', 1),
(119, 17, 1, 'Test konusu', '<p>merhaba</p>\r\n', '../uploads/baslik2.jpg', '06.12.2020 22:13:51', 1),
(120, 1, 1, 'sa', '<p>as</p>\r\n', '../uploads/baslik2.jpg', '06.12.2020 22:30:38', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(140) COLLATE utf8_turkish_ci NOT NULL,
  `Password` varchar(140) COLLATE utf8_turkish_ci NOT NULL,
  `GSM` bigint(10) NOT NULL,
  `Level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `Email`, `Password`, `GSM`, `Level`) VALUES
(1, 'Yunus Emre', 'Cebe', 'yunusemrecebe@gmail.com', 'yunus123', 5554717400, 3),
(3, 'Test55', 'Test2', 'test@gmail.com', '123', 1234567890, 2),
(5, 'Mahmut', 'Tuncer', 'mahmut@dunya.net', '123', 1111111111, 1),
(6, 'Aziz', 'Muhterem', 'Aziz@muhterem.net', 'yunus123', 9876543215, 1),
(7, 'Çetin', 'Ceviz', 'cetinceviz@gmail.com', 'yunus123', 1234567894, 1),
(8, 'Çetin', 'Ceviz', 'cetinceviz@gmail.coms', 'yunus123', 1234567893, 1),
(9, 'Çetin', 'Ceviz', 'cetinceviz@gmail.comsa', 'yunus123', 1234567891, 1),
(10, 'sad', 'awd', 'sad@gmail.com', 'yunus123', 987654321, 1),
(13, 'Mahmut', 'Erdem', 'mahmut@erdem.net', 'yunus123', 9876543217, 1),
(16, 'Ahmet', 'Üner', 'ahmet@uner.net', '123', 4561237890, 2),
(17, 'Recep', 'Çetin', 'recep@cetin.net', '123', 5558793210, 2),
(18, 'Ahmet', 'Mehmet', 'a@mehmet.net', 'yunus123', 9876544561, 1),
(19, 'murç', 'ali', 'mrc@ali.net', '123', 5554717402, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Owner` (`Owner`),
  ADD KEY `Content` (`Content`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Owner` (`Owner`,`Category`),
  ADD KEY `Category` (`Category`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `contents`
--
ALTER TABLE `contents`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`Owner`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`Content`) REFERENCES `contents` (`Id`);

--
-- Tablo kısıtlamaları `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`Owner`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `contents_ibfk_2` FOREIGN KEY (`Category`) REFERENCES `categories` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
