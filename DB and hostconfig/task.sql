-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2014 at 06:05 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `task`
--
CREATE DATABASE IF NOT EXISTS `task` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `task`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_64C19C15E237E06` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(6, 'category0'),
(7, 'category1'),
(8, 'category2'),
(9, 'category3'),
(10, 'category4');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04AD12469DE2` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `price`) VALUES
(1, 8, 'fr:name0;en:name0', '1396'),
(2, 7, 'fr:name1;en:name1', '553'),
(3, 8, 'fr:name2;en:name2', '1269'),
(4, 9, 'fr:name3;en:name3', '419'),
(5, 8, 'fr:name4;en:name4', '945'),
(6, 6, 'fr:name5;en:name5', '1110'),
(7, 9, 'fr:name6;en:name6', '68'),
(8, 9, 'fr:name7;en:name7', '126'),
(9, 7, 'fr:name8;en:name8', '1235'),
(10, 9, 'fr:name9;en:name9', '280'),
(11, 9, 'fr:name10;en:name10', '569'),
(12, 6, 'fr:name11;en:name11', '526'),
(13, 6, 'fr:name12;en:name12', '108'),
(14, 7, 'fr:name13;en:name13', '432'),
(15, 9, 'fr:name14;en:name14', '294'),
(16, 8, 'fr:name15;en:name15', '1066'),
(17, 9, 'fr:name16;en:name16', '1479'),
(18, 9, 'fr:name17;en:name17', '1095'),
(19, 9, 'fr:name18;en:name18', '844'),
(20, 10, 'fr:name19;en:name19', '296'),
(21, 8, 'fr:name20;en:name20', '399'),
(22, 8, 'fr:name21;en:name21', '413'),
(23, 10, 'fr:name22;en:name22', '118'),
(24, 10, 'fr:name23;en:name23', '423'),
(25, 10, 'fr:name24;en:name24', '654'),
(26, 7, 'fr:name25;en:name25', '777'),
(27, 8, 'fr:name26;en:name26', '1487'),
(28, 7, 'fr:name27;en:name27', '1497'),
(29, 9, 'fr:name28;en:name28', '597'),
(30, 8, 'fr:name29;en:name29', '620'),
(31, 10, 'fr:name30;en:name30', '577'),
(32, 6, 'fr:name31;en:name31', '890'),
(33, 8, 'fr:name32;en:name32', '1186'),
(34, 7, 'fr:name33;en:name33', '1340'),
(35, 7, 'fr:name34;en:name34', '790'),
(36, 10, 'fr:name35;en:name35', '1138'),
(37, 8, 'fr:name36;en:name36', '715'),
(38, 8, 'fr:name37;en:name37', '1094'),
(39, 10, 'fr:name38;en:name38', '592'),
(40, 6, 'fr:name39;en:name39', '969'),
(41, 7, 'fr:name40;en:name40', '1255'),
(42, 8, 'fr:name41;en:name41', '329'),
(43, 6, 'fr:name42;en:name42', '978'),
(44, 9, 'fr:name43;en:name43', '1357'),
(45, 7, 'fr:name44;en:name44', '648'),
(46, 10, 'fr:name45;en:name45', '1144'),
(47, 6, 'fr:name46;en:name46', '149'),
(48, 8, 'fr:name47;en:name47', '510'),
(49, 7, 'fr:name48;en:name48', '268'),
(50, 7, 'fr:name49;en:name49', '1253'),
(51, 6, 'fr:name50;en:name50', '485'),
(52, 10, 'fr:name51;en:name51', '313'),
(53, 9, 'fr:name52;en:name52', '456'),
(54, 10, 'fr:name53;en:name53', '142'),
(55, 9, 'fr:name54;en:name54', '357'),
(56, 6, 'fr:name55;en:name55', '1261'),
(57, 9, 'fr:name56;en:name56', '798'),
(58, 10, 'fr:name57;en:name57', '1321'),
(59, 10, 'fr:name58;en:name58', '657'),
(60, 10, 'fr:name59;en:name59', '1053'),
(61, 6, 'fr:name60;en:name60', '1429'),
(62, 10, 'fr:name61;en:name61', '942'),
(63, 9, 'fr:name62;en:name62', '477'),
(64, 9, 'fr:name63;en:name63', '505'),
(65, 8, 'fr:name64;en:name64', '632'),
(66, 6, 'fr:name65;en:name65', '1329'),
(67, 6, 'fr:name66;en:name66', '973'),
(68, 8, 'fr:name67;en:name67', '1143'),
(69, 6, 'fr:name68;en:name68', '415'),
(70, 8, 'fr:name69;en:name69', '149'),
(71, 10, 'fr:name70;en:name70', '1382'),
(72, 10, 'fr:name71;en:name71', '798'),
(73, 6, 'fr:name72;en:name72', '995'),
(74, 9, 'fr:name73;en:name73', '1353'),
(75, 8, 'fr:name74;en:name74', '1329'),
(76, 8, 'fr:name75;en:name75', '550'),
(77, 7, 'fr:name76;en:name76', '505'),
(78, 6, 'fr:name77;en:name77', '1319'),
(79, 10, 'fr:name78;en:name78', '796'),
(80, 7, 'fr:name79;en:name79', '821'),
(81, 6, 'fr:name80;en:name80', '453'),
(82, 8, 'fr:name81;en:name81', '1104'),
(83, 10, 'fr:name82;en:name82', '888'),
(84, 7, 'fr:name83;en:name83', '331'),
(85, 8, 'fr:name84;en:name84', '1041'),
(86, 10, 'fr:name85;en:name85', '346'),
(87, 8, 'fr:name86;en:name86', '924'),
(88, 9, 'fr:name87;en:name87', '331'),
(89, 10, 'fr:name88;en:name88', '1368'),
(90, 6, 'fr:name89;en:name89', '1245'),
(91, 10, 'fr:name90;en:name90', '1070'),
(92, 8, 'fr:name91;en:name91', '982'),
(93, 8, 'fr:name92;en:name92', '1195'),
(94, 7, 'fr:name93;en:name93', '892'),
(95, 9, 'fr:name94;en:name94', '821'),
(96, 8, 'fr:name95;en:name95', '834'),
(97, 9, 'fr:name96;en:name96', '1127'),
(98, 10, 'fr:name97;en:name97', '957'),
(99, 8, 'fr:name98;en:name98', '1187'),
(100, 10, 'fr:name99;en:name99', '1198');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
