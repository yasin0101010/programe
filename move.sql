-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2025 at 06:55 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moves`
--

-- --------------------------------------------------------

--
-- Table structure for table `move`
--

DROP TABLE IF EXISTS `move`;
CREATE TABLE IF NOT EXISTS `move` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pic_move` varchar(255) COLLATE utf8mb3_persian_ci NOT NULL,
  `name_move` varchar(22) COLLATE utf8mb3_persian_ci NOT NULL,
  `time_move` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `move`
--

INSERT INTO `move` (`id`, `pic_move`, `name_move`, `time_move`) VALUES
(5, 'uploads/67c5f6996627dfilm 4.png', 'خانواده', '7:15'),
(8, 'uploads/67c5f6db28f8bfilm 1.png', 'انسان بر علیه طبیعت', '3:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
