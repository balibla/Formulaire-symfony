-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2019 at 09:45 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetformulaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question7` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question8` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question9` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question10` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `formulaire`
--

INSERT INTO `formulaire` (`id`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`) VALUES
(1, '1', '2', '1', '2', '5', '1', '4', '1', '10', '2'),
(2, '2', '1', '3', '1', '2', '1', '1', '2', '1', '1'),
(3, '1', '2', '1', '1', '1', '1', '1', '1', '1', '1'),
(4, '2', '1', '1', '1', '1', '1', '1', '1', '1', '2'),
(5, '3', '1', '2', '3', '1', '1', '1', '1', '1', '1'),
(6, '1', '2', '1', '2', '1', '2', '2', '2', '3', '3'),
(7, '1', '2', '1', '2', '1', '2', '2', '2', '3', '3'),
(8, '1', '2', '2', '2', '1', '1', '2', '1', '3', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
