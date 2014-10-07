-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2014. Okt 07. 21:43
-- Szerver verzió: 5.5.32
-- PHP verzió: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `timedm`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `intravena_hirlev`
--

CREATE TABLE IF NOT EXISTS `intravena_hirlev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hirlev_id` int(11) NOT NULL,
  `sendingdate` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `folder` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `analytics_source` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `analytics_medium` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu1` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu1_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu1_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu2` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu2_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu2_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu3` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu3_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu3_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu4` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu4_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu4_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu5` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu5_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `menu5_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `bp_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `bp_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1ok` tinytext,
  `1l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1l_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `1r_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2ok` tinytext,
  `2l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2l_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `2r_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3ok` tinytext,
  `3l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3l_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `3r_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4ok` tinytext,
  `4l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4l_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `4r_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5ok` tinytext,
  `5l_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5l_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_link` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_analytics` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_pic` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_subtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_text` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_orig_price` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `5r_discount` tinytext CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
