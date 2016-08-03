-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 May 2016, 13:08:05
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `muhasebe`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_ayarlar`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `tlg_ayarlar`
--

INSERT INTO `tlg_ayarlar` (`id`, `title`, `keywords`, `aciklama`, `tema`, `yayindami`, `analytics`, `facebook`, `twitter`, `plus`, `linkedin`, `pinterest`, `skype`, `youtube`, `instagram`, `favicon_link`, `adres`, `email`, `telefon`, `fax`, `gsm`, `latitude`, `langitude`) VALUES
(1, 'Erdal Erkan ', 'Erdal Erkan', 'Erdal Erkan ', '1', '1', 'Analytic Kodlarınızı Buraya Yazınız', 'https://www.facebook.com/', 'http://twitter.com', 'http://google.com.tr', 'http://linkedin.com', 'http://pinterest.com', '', 'http://youtube.com', 'http://instagram.com', 'favicon.ico', 'denizli', 'info@pointgorsel.com', '0258 ', '0258', '0543 ', '37.701207', '29.185181');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_cari`
--

CREATE TABLE IF NOT EXISTS `tlg_cari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `soyad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `telefon` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fax` text COLLATE utf8_unicode_ci,
  `adres` varchar(500) CHARACTER SET utf8 NOT NULL,
  `odenen` int(11) NOT NULL,
  `borc` int(11) NOT NULL,
  `tarih` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `sirketadi` varchar(500) CHARACTER SET utf8 NOT NULL,
  `presmi` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `vergi_dairesi` text COLLATE utf8_unicode_ci,
  `vergi_no` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `tlg_cari`
--

INSERT INTO `tlg_cari` (`id`, `ad`, `soyad`, `email`, `telefon`, `fax`, `adres`, `odenen`, `borc`, `tarih`, `sirketadi`, `presmi`, `vergi_dairesi`, `vergi_no`) VALUES
(1, 'Tolga', 'EGE', 'toolgaege@gmail.com', '05398147260', '0000', 'NAMIK KEMAL CADDES&#304; PAMUKKALE MAHALLES&#304; NO:8/2', 0, 0, '07-04-16 12:33:45', 'Tlg Ajans', NULL, 'saraylar', '555 555555'),
(2, 'Erdal', 'Erkan', 'info@pointgorsel.com', '05553044400', '0000', 'Saraylar Mh.Selcuk Cd,  Polat &#304;&#351; Merkezi No:27  Kat:4 Y&ouml;n AVM &Uuml;zeri, Bayramyeri/DEN&#304;ZL&#304;', 0, 0, '12-12-12', 'Point G&ouml;rsel', 'yok', 'saraylar', '555 555555'),
(3, 'Muhammed', '&Ouml;&ccedil;al', 'muhammed@gmail.com', 'asdasd', '0000', 'asdasd', 0, 0, '12-12-12', 'Muhammed &Ouml;&ccedil;al Firmas&#305;', 'yok', 'saraylar', '555 555555'),
(4, 'kayra', 'kayra', 'kayra@info.com', '00000000000000000', '0000', '00000000000000', 0, 0, '25-04-16 15:29:24', 'kayra', NULL, 'saraylar', '555 555555'),
(5, 'Sultan', 'Uğurlu', 'sule@kayramim.com', '0000000000', '0000', '0000000000000', 0, 0, '25-04-16 16:28:07', 'Uğurlu', NULL, 'saraylar', '555 555555'),
(6, 'Servet', 'Özok', 's@s.com', '555555555555', '00000', 'denizli', 0, 0, '27-04-16 16:19:15', 'servo', NULL, 'saraylar', '555 555555');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_kasa`
--

CREATE TABLE IF NOT EXISTS `tlg_kasa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kasa_id` int(11) NOT NULL,
  `evrak_no` text NOT NULL,
  `aciklama` text NOT NULL,
  `gelir` int(11) NOT NULL,
  `gider` int(11) NOT NULL,
  `devir` int(11) NOT NULL,
  `tarih` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `tlg_kasa`
--

INSERT INTO `tlg_kasa` (`id`, `kasa_id`, `evrak_no`, `aciklama`, `gelir`, `gider`, `devir`, `tarih`) VALUES
(1, 1, '11111111', 'deneme', 5, 5, 0, '12-12-12 12:12:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_odeme`
--

CREATE TABLE IF NOT EXISTS `tlg_odeme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `satis_id` int(11) NOT NULL,
  `cari_id` int(11) NOT NULL,
  `odeme` int(11) NOT NULL,
  `tarih` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

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
-- Tablo için tablo yapısı `tlg_personel`
--

CREATE TABLE IF NOT EXISTS `tlg_personel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adres` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `telefon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `eposta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `maas_tutari` int(11) NOT NULL,
  `giris_tarihi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `cikis_tarihi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tarih` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `soyadi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `tlg_personel`
--

INSERT INTO `tlg_personel` (`id`, `adi`, `adres`, `telefon`, `eposta`, `maas_tutari`, `giris_tarihi`, `cikis_tarihi`, `tarih`, `soyadi`) VALUES
(1, 'tolga2', 'namık kemal', '05398147260', 'toolgaege@gmail.com', 1000, '12-12-12', '13-13-13', '12-12-12', 'ege');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_resim`
--

CREATE TABLE IF NOT EXISTS `tlg_resim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik_id` int(11) NOT NULL,
  `resim_link` text NOT NULL,
  `title` text NOT NULL,
  `boyutkod` text,
  `boyut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_satis`
--

CREATE TABLE IF NOT EXISTS `tlg_satis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cari_id` int(11) NOT NULL,
  `adi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `en` int(11) DEFAULT NULL,
  `boy` int(11) DEFAULT NULL,
  `adet` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `m2` int(11) DEFAULT NULL,
  `birim_fiyat` int(11) NOT NULL,
  `odenen` int(11) DEFAULT NULL,
  `borc` int(11) DEFAULT NULL,
  `tarih` varchar(500) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Tablo döküm verisi `tlg_satis`
--

INSERT INTO `tlg_satis` (`id`, `cari_id`, `adi`, `en`, `boy`, `adet`, `urun_id`, `m2`, `birim_fiyat`, `odenen`, `borc`, `tarih`) VALUES
(1, 1, 'alacati garden', 5, 5, 3, 1, 5, 580, NULL, 1740, '07-04-16 11:38:44'),
(2, 2, 'point', 5, 5, 5, 4, 5, 550, NULL, 2750, '07-04-16 11:38:44'),
(3, 3, 'selam garden', 5, 5, 5, 2, 5, 500, NULL, 2500, '07-04-16 11:38:44'),
(4, 1, 'deneme proje', 5, 5, 5, 1, 5, 50, NULL, 250, '25-04-16 14:33:50'),
(6, 4, 'kayrabili&#351;im.com', 0, 0, 1, 2, 0, 3500, NULL, 3500, '25-04-16 15:29:50'),
(7, 5, 'sultanugurlu.com', 0, 0, 1, 1, 0, 3500, NULL, 3500, '25-04-16 16:28:52'),
(8, 2, 'denden', 0, 0, 1, 3, 0, 10000, NULL, 10000, '26-04-16 13:34:08'),
(9, 5, 'porje', 0, 0, 2, 2, 0, 250, NULL, 500, '26-04-16 13:54:37'),
(10, 5, 'mesel', 1, 2, 5, 3, 3, 55, NULL, 275, '26-04-16 13:56:37'),
(11, 1, 'tan tekstil web sitesi', 0, 0, 1, 1, 0, 1000, NULL, 1000, '27-04-16 16:22:57'),
(12, 6, 'deneme servo', 0, 0, 6, 2, 0, 80, NULL, 480, '27-04-16 16:52:53');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_urun`
--

CREATE TABLE IF NOT EXISTS `tlg_urun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tarih` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `tlg_urun`
--

INSERT INTO `tlg_urun` (`id`, `adi`, `tarih`) VALUES
(1, 'Web Tasarım', '08-04-16 09:06:52'),
(2, 'Grafik Tasarım', '08-04-16 09:06:52'),
(3, 'Tabela Tasarım', '08-04-16 09:06:52'),
(4, 'Marka', '08-04-16 09:06:52'),
(5, 'Deneme', '08-04-16 09:07:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tlg_uyeler`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

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

CREATE TABLE IF NOT EXISTS `tlg_yetki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yetki` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `tlg_yetki`
--

INSERT INTO `tlg_yetki` (`id`, `yetki`) VALUES
(0, 'Kullanıcı'),
(1, 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
