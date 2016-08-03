-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Ağu 2016, 17:42:00
-- Sunucu sürümü: 5.7.9
-- PHP Sürümü: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `muhasebe`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_ay`
--

DROP TABLE IF EXISTS `tlg_ay`;
CREATE TABLE IF NOT EXISTS `tlg_ay` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ay` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tlg_ay`
--

INSERT INTO `tlg_ay` (`id`, `ay`) VALUES
(1, 'Ocak'),
(2, 'Şubat'),
(3, 'Mart'),
(4, 'Nisan'),
(5, 'Mayıs'),
(6, 'Haziran'),
(7, 'Temmuz'),
(8, 'Ağustos'),
(9, 'Eylül'),
(10, 'Ekim'),
(11, 'Kasım'),
(12, 'Aralık');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_ayarlar`
--

DROP TABLE IF EXISTS `tlg_ayarlar`;
CREATE TABLE IF NOT EXISTS `tlg_ayarlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `keywords` text NOT NULL,
  `aciklama` text NOT NULL,
  `tema` text,
  `yayindami` text NOT NULL,
  `analytics` text,
  `facebook` text,
  `twitter` text,
  `plus` text,
  `linkedin` text,
  `pinterest` text,
  `skype` text,
  `youtube` text,
  `instagram` text,
  `favicon_link` text,
  `adres` text,
  `email` text,
  `telefon` text,
  `fax` text,
  `gsm` text,
  `latitude` text,
  `langitude` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tlg_ayarlar`
--

INSERT INTO `tlg_ayarlar` (`id`, `title`, `keywords`, `aciklama`, `tema`, `yayindami`, `analytics`, `facebook`, `twitter`, `plus`, `linkedin`, `pinterest`, `skype`, `youtube`, `instagram`, `favicon_link`, `adres`, `email`, `telefon`, `fax`, `gsm`, `latitude`, `langitude`) VALUES
(1, 'Erdal Erkan ', 'Erdal Erkan', 'Erdal Erkan ', '1', '1', 'Analytic Kodlarınızı Buraya Yazınız', 'https://www.facebook.com/', 'http://twitter.com', 'http://google.com.tr', 'http://linkedin.com', 'http://pinterest.com', '', 'http://youtube.com', 'http://instagram.com', 'favicon.ico', 'denizli', 'info@pointgorsel.com', '0258 ', '0258', '0543 ', '37.701207', '29.185181');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_calisan`
--

DROP TABLE IF EXISTS `tlg_calisan`;
CREATE TABLE IF NOT EXISTS `tlg_calisan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(500) CHARACTER SET utf8 NOT NULL,
  `giris_tarihi` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `cikis_tarihi` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `kategori` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tlg_calisan`
--

INSERT INTO `tlg_calisan` (`id`, `adi`, `email`, `giris_tarihi`, `cikis_tarihi`, `kategori`) VALUES
(1, 'tolga2', 'toolgaege@gmail.com', '12-12-12', '13-13-13', NULL),
(2, 'tolga ege2', 'toolgaege@gmail.com22', '21-05-16 09:19:36', NULL, 'yazilim2'),
(3, 'tolga ege33', 'toolgaege@gmail.com33', '09-06-16 12:57:31', NULL, 'dded33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_cari`
--

DROP TABLE IF EXISTS `tlg_cari`;
CREATE TABLE IF NOT EXISTS `tlg_cari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firmaunvani` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `kisaismi` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `telefon` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `fax` text CHARACTER SET utf8,
  `acikadres` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `il` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `turu` int(11) DEFAULT '0',
  `vergino` text CHARACTER SET utf8,
  `vergidairesi` text CHARACTER SET utf8,
  `tckimlik` text COLLATE utf8_unicode_ci,
  `yetkiliadi` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `yetkiliemail` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `yetkilitelefon` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `yetkilinot` text CHARACTER SET utf8,
  `tarih` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tlg_cari`
--

INSERT INTO `tlg_cari` (`id`, `firmaunvani`, `kisaismi`, `kategori`, `email`, `telefon`, `fax`, `acikadres`, `il`, `turu`, `vergino`, `vergidairesi`, `tckimlik`, `yetkiliadi`, `yetkiliemail`, `yetkilitelefon`, `yetkilinot`, `tarih`) VALUES
(2, 'Point G&ouml;rsel', 'werwr', 'mesela', 'info@pointgorsel.com', '05553044400', '0000', 'Saraylar Mh.Selcuk Cd,  Polat &#304;&#351; Merkezi No:27  Kat:4 Y&ouml;n AVM &Uuml;zeri, Bayramyeri/DEN&#304;ZL&#304;', 'denizli', 0, '555 555555', 'saraylar', '0', NULL, NULL, NULL, NULL, '12-12-12'),
(3, 'Muhammed &Ouml;&ccedil;al Firmas&#305;', 'werwr', '', 'muhammed@gmail.com', 'asdasd', '0000', 'asdasd', '', 0, '555 555555', 'saraylar', '0', NULL, NULL, NULL, NULL, '12-12-12'),
(4, 'kayra', 'werwr', '', 'kayra@info.com', '00000000000000000', '0000', '00000000000000', '', 0, '555 555555', 'saraylar', '0', NULL, NULL, NULL, NULL, '25-04-16 15:29:24'),
(5, 'Uğurlu', 'werwr', '', 'sule@kayramim.com', '0000000000', '0000', '0000000000000', '', 0, '555 555555', 'saraylar', '0', NULL, NULL, NULL, NULL, '25-04-16 16:28:07'),
(6, 'servo', 'werwr', '', 's@s.com', '555555555555', '00000', 'denizli', '', 0, '555 555555', 'saraylar', '0', NULL, NULL, NULL, NULL, '27-04-16 16:19:15'),
(10, 'metin &ouml;zcan', 'metinday&#305;', 'deneme', 'toolgaege@gmail.com', '0258 264 99 90', '0258 267 67 67', 'nam&#305;k kemal caddesi', 'denizli', 0, '21023312384', 'saraylar', '0', 'tolga', 'tolga@mail.com', '0258 262 627 278', 'dednmeme', '17-05-16 12:27:52'),
(11, 'deneme firma112', 'deneme112', 'mesela112', 'toolgaege@gmail.com112', '0258 264 99 90112', '0258 267 67 67112', 'deneme adres tir sdcsdcdwedwedwdwdwedwdwed112', 'denizli112', 1, '2102331238412', 'saraylar2', '2192331238422', 'tolga2', 'tolga@mail.comt2', '0258 262 627 2782', 'deneme2', '17-05-16 13:01:57'),
(13, 'sdcsdc', 'sdcsdc', 'sdcsdcsdc', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '0', NULL, NULL, NULL, NULL, '23-07-16 11:12:23'),
(14, 'asda', 'sdasd', 'asda', 'sdasd', 'asd', 'asda', 'sdasdasdadadasdadadasdad', 'adadadadasdasdadad', 0, NULL, NULL, '0', NULL, NULL, NULL, NULL, '23-07-16 11:12:58'),
(15, 'asdasda', 'sdasd', 'asdasdasd', 'asdada', 'asdasd', 'asdasdas', 'dasdadasdadadadadadadadad', 'adsadadadadasdadadasdadadad', 1, NULL, NULL, '0', NULL, NULL, NULL, NULL, '23-07-16 11:14:29'),
(16, 'deneme firma', 'deneme firma', 'deneme firma', 'deneme firma', 'deneme firma', 'deneme firma', 'deneme firmaasdasdasdadasdasdadad', 'deneme firma', 1, '12312313', NULL, '0', NULL, NULL, NULL, NULL, '23-07-16 11:15:51'),
(17, 'deneme firma2', 'deneme firma2', 'deneme firma2', 'deneme firma2', 'deneme firma2', 'deneme firma2', 'deneme firma2deneme firma2deneme firma2deneme firma2', 'deneme firma2deneme firma2', 1, '23423424', 'saraylar', '0', NULL, NULL, NULL, NULL, '23-07-16 11:17:33'),
(18, 'deneme firma3', 'deneme firma3', 'deneme firma3', 'deneme firma3', 'deneme firma3', 'deneme firma3', 'deneme firma3deneme firma3deneme firma3', 'deneme firma3', 1, '34242342424', 'deneme firma3', '0', 'deneme firma3', 'deneme firma3', 'deneme firma3', 'deneme firma3', '23-07-16 11:18:17'),
(19, 'deneme firma4', 'deneme firma4', 'deneme firma4', 'deneme firma4', 'deneme firma4', 'deneme firma4', 'deneme firma4deneme firma4deneme firma4deneme firma4deneme firma4', 'deneme firma4', 2, '', '', '0', 'deneme firma4', 'deneme firma4', 'deneme firma4', 'deneme firma4', '23-07-16 11:19:45'),
(20, 'deneme firma55', 'deneme firma5', 'deneme firma5', 'deneme firma5', 'deneme firma5', 'deneme firma5', 'deneme firma5deneme firma5deneme firma5deneme firma5deneme firma5', 'deneme firma5', 2, '', '', '21923312384', 'deneme firma5', 'deneme firma5', 'deneme firma5', 'deneme firma5', '23-07-16 11:21:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_fatura`
--

DROP TABLE IF EXISTS `tlg_fatura`;
CREATE TABLE IF NOT EXISTS `tlg_fatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `satis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `adet` int(11) NOT NULL,
  `birim_fiyat` int(11) NOT NULL DEFAULT '0',
  `vergi` int(11) NOT NULL DEFAULT '0',
  `toplam` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tlg_fatura`
--

INSERT INTO `tlg_fatura` (`id`, `satis_id`, `urun_id`, `adet`, `birim_fiyat`, `vergi`, `toplam`) VALUES
(1, 1, 1, 3, 0, 0, 0),
(2, 2, 4, 5, 0, 0, 0),
(3, 3, 2, 5, 0, 0, 0),
(4, 1, 1, 5, 0, 0, 0),
(6, 4, 2, 1, 0, 0, 0),
(7, 5, 1, 1, 0, 0, 0),
(8, 2, 3, 1, 0, 0, 0),
(9, 5, 2, 2, 0, 0, 0),
(10, 5, 3, 5, 0, 0, 0),
(11, 1, 1, 1, 0, 0, 0),
(12, 6, 2, 6, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_gider`
--

DROP TABLE IF EXISTS `tlg_gider`;
CREATE TABLE IF NOT EXISTS `tlg_gider` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aciklama` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `tarih` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `toplamtutar` int(11) NOT NULL DEFAULT '0',
  `kdv` int(11) NOT NULL DEFAULT '0',
  `odemedurumu` int(11) NOT NULL DEFAULT '0',
  `odemetarihi` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `tedarikci` int(11) NOT NULL DEFAULT '0',
  `tipi` int(11) NOT NULL DEFAULT '0',
  `calisan` int(11) NOT NULL DEFAULT '0',
  `hakedistarihi` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `vergiay` int(11) NOT NULL DEFAULT '0',
  `vergiyil` int(11) NOT NULL DEFAULT '0',
  `duzenlemetarihi` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tlg_gider`
--

INSERT INTO `tlg_gider` (`id`, `aciklama`, `tarih`, `toplamtutar`, `kdv`, `odemedurumu`, `odemetarihi`, `tedarikci`, `tipi`, `calisan`, `hakedistarihi`, `vergiay`, `vergiyil`, `duzenlemetarihi`) VALUES
(3, 'Özel Balon Turu', '2016-06-11', 600, 8, 0, '2016-06-18', 1, 1, 0, '0', 0, 0, '0'),
(4, 'sonda', '2016-06-18', 350, 18, 1, '2016-06-11', 1, 1, 0, '0', 0, 0, '0'),
(5, 'zasdasdads', '2016-06-12', 590, 18, 1, '2016-06-11', 1, 1, 0, 'adsasdad', 0, 0, '0'),
(8, 'aasadad', '09-06-16 13:22:38', 1300, 0, 0, '2016-06-11', 0, 3, 1, '2016-06-11', 0, 0, '0'),
(9, 'yeni sgk', '09-06-16 13:54:36', 1300, 0, 1, '2016-06-08', 0, 4, 0, NULL, 6, 4, '0'),
(10, 'yeni banka gideri', '09-06-16 14:08:52', 12344, 0, 0, '2016-06-10', 0, 5, 0, NULL, 0, 0, '2016-06-11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_kasa`
--

DROP TABLE IF EXISTS `tlg_kasa`;
CREATE TABLE IF NOT EXISTS `tlg_kasa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kasa_id` int(11) DEFAULT NULL,
  `hesapismi` text,
  `dovizcinsi` text,
  `acilisbakiyesi` int(11) NOT NULL,
  `abtarihi` text,
  `bankaismi` text,
  `bankasubesi` text,
  `hesapnumarasi` text,
  `iban` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tlg_kasa`
--

INSERT INTO `tlg_kasa` (`id`, `kasa_id`, `hesapismi`, `dovizcinsi`, `acilisbakiyesi`, `abtarihi`, `bankaismi`, `bankasubesi`, `hesapnumarasi`, `iban`) VALUES
(2, 1, 'Kasa1', 'TL', 500, '21-05-2016 17:16:00', NULL, NULL, NULL, NULL),
(4, 2, 'Banka222', 'TL', 500, '21-05-2016 17:16:00', 'Garanti', 'denizli', '222', '222'),
(5, 1, 'deneme kasa2', 'TL', 300, '21-05-2016 17:16:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_odeme`
--

DROP TABLE IF EXISTS `tlg_odeme`;
CREATE TABLE IF NOT EXISTS `tlg_odeme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `satis_id` int(11) NOT NULL,
  `cari_id` int(11) NOT NULL,
  `odeme` int(11) NOT NULL,
  `tarih` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tlg_odeme`
--

INSERT INTO `tlg_odeme` (`id`, `satis_id`, `cari_id`, `odeme`, `tarih`) VALUES
(1, 1, 1, 1500, '12-12-12 12:12:12'),
(2, 2, 2, 1000, '12-12-12 12:12:12'),
(3, 3, 3, 500, '12-12-12 12:12:12'),
(5, 2, 2, 60, '08-04-16 09:21:20'),
(7, 3, 3, 132, '08-04-16 09:42:44'),
(9, 2, 2, 5, '25-04-16 15:17:31'),
(10, 6, 4, 2500, '25-04-16 15:30:17'),
(11, 7, 5, 1000, '25-04-16 16:29:17'),
(12, 6, 4, 500, '26-04-16 12:39:39'),
(13, 8, 2, 5000, '26-04-16 13:34:50'),
(14, 10, 5, 275, '26-04-16 14:23:20'),
(15, 11, 1, 250, '27-04-16 16:23:14'),
(16, 12, 6, 80, '27-04-16 16:53:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_resim`
--

DROP TABLE IF EXISTS `tlg_resim`;
CREATE TABLE IF NOT EXISTS `tlg_resim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik_id` int(11) NOT NULL,
  `resim_link` text NOT NULL,
  `title` text NOT NULL,
  `boyutkod` text,
  `boyut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_satis`
--

DROP TABLE IF EXISTS `tlg_satis`;
CREATE TABLE IF NOT EXISTS `tlg_satis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cari_id` int(11) NOT NULL,
  `tarih` varchar(500) CHARACTER SET utf8 NOT NULL,
  `tahsiltarih` text COLLATE utf8_unicode_ci,
  `odenen` int(11) DEFAULT NULL,
  `borc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tlg_satis`
--

INSERT INTO `tlg_satis` (`id`, `adi`, `cari_id`, `tarih`, `tahsiltarih`, `odenen`, `borc`) VALUES
(1, 'alacati garden', 1, '07-04-16 11:38:44', NULL, NULL, 1740),
(2, 'point', 2, '07-04-16 11:38:44', NULL, NULL, 2750),
(3, 'selam garden', 3, '07-04-16 11:38:44', NULL, NULL, 2500),
(4, 'deneme proje', 1, '25-04-16 14:33:50', NULL, NULL, 250),
(6, 'kayrabili&#351;im.com', 4, '25-04-16 15:29:50', NULL, NULL, 3500),
(7, 'sultanugurlu.com', 5, '25-04-16 16:28:52', NULL, NULL, 3500),
(8, 'denden', 2, '26-04-16 13:34:08', NULL, NULL, 10000),
(9, 'porje', 5, '26-04-16 13:54:37', NULL, NULL, 500),
(10, 'mesel', 5, '26-04-16 13:56:37', NULL, NULL, 275),
(11, 'tan tekstil web sitesi', 1, '27-04-16 16:22:57', NULL, NULL, 1000),
(12, 'deneme servo', 6, '27-04-16 16:52:53', NULL, NULL, 480);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_urun`
--

DROP TABLE IF EXISTS `tlg_urun`;
CREATE TABLE IF NOT EXISTS `tlg_urun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tarih` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `kodu` int(11) NOT NULL DEFAULT '0',
  `kategori` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `asbirimi` int(11) NOT NULL DEFAULT '0',
  `alisfiyati` int(11) NOT NULL DEFAULT '0',
  `satisfiyati` int(11) NOT NULL DEFAULT '0',
  `kdv` int(11) NOT NULL DEFAULT '0',
  `oiv` int(11) NOT NULL DEFAULT '0',
  `satisotv` int(11) NOT NULL DEFAULT '0',
  `alisotv` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tlg_urun`
--

INSERT INTO `tlg_urun` (`id`, `adi`, `tarih`, `kodu`, `kategori`, `asbirimi`, `alisfiyati`, `satisfiyati`, `kdv`, `oiv`, `satisotv`, `alisotv`) VALUES
(1, 'Web Tasar&#305;m', '21-05-16 10:05:14', 123, 'yaz&#305;l&#305;m', 500, 500, 650, 18, 0, 0, 0),
(2, 'Tabela', '21-05-16 10:08:09', 123, 'saha', 400, 400, 600, 18, 0, 0, 0),
(3, 'deneme urun22', '23-07-16 11:41:36', 20000002, 'mesela11222', 50022, 50022, 57022, 1822, 1822, 1822, 1822);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_uyeler`
--

DROP TABLE IF EXISTS `tlg_uyeler`;
CREATE TABLE IF NOT EXISTS `tlg_uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `k_adi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `adi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `parola` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `eposta` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tarih` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `yetki` int(11) NOT NULL,
  `presmi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tlg_uyeler`
--

INSERT INTO `tlg_uyeler` (`id`, `k_adi`, `adi`, `parola`, `eposta`, `tarih`, `yetki`, `presmi`) VALUES
(1, 'toolgaege', 'Tolga Ege', '6968fd4c2783e9748dad4f814b829ab0', 'toolga@gmail.com', '12-12-12', 1, ''),
(7, 'erdal', 'erdal erkan', '9efe8f9c8fda666b17d9e0e95424c091', 'erdal@erdal.com', '08-04-16 15:39:50', 1, 'yok'),
(9, 'muhammed', 'Muhammed &Ouml;&ccedil;al', '4c38d1e8b74e6b51252e4f1ca16fa94c', 'muhammed@hotmail.com', '26-04-16 11:26:42', 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_yetki`
--

DROP TABLE IF EXISTS `tlg_yetki`;
CREATE TABLE IF NOT EXISTS `tlg_yetki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yetki` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tlg_yetki`
--

INSERT INTO `tlg_yetki` (`id`, `yetki`) VALUES
(0, 'Kullanıcı'),
(1, 'Admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_yil`
--

DROP TABLE IF EXISTS `tlg_yil`;
CREATE TABLE IF NOT EXISTS `tlg_yil` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ay` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `tlg_yil`
--

INSERT INTO `tlg_yil` (`id`, `ay`) VALUES
(1, '2013'),
(2, '2014'),
(3, '2015'),
(4, '2016'),
(5, '2017');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
