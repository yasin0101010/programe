-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2025 at 09:39 AM
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
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `phone_number` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `gmail`, `phone_number`, `password`) VALUES
('yasin0101010', 'yasyngym2200@gmail.com', '09138087378', 'yasin12345'),
('yasin0101010', 'yasyngym2200@gmail.com', '09138087378', 'yasin12345'),
('yasin', 'yasin@gmail.com', '09', '12345'),
('yasin', 'yasin@gmail.com', '09', ''),
('yasin0101010', 'yasyngym2200@gmail.com', '09138087378', 'yasin12345'),
('yasin0101010', 'yasyngym2200@gmail.com', '09138087378', 'yasin12345'),
('yasin0101010', 'yasyngym2200@gmail.com', '09138087378', 'yasin12345'),
('hassan', '1233@gmail.com', '1232', 'yasin12345'),
('a', '1233@gmail.com', '1232', 'yasin12345'),
('', 'yasyngym2200@gmail.com', '09138087378', 'yasin12345'),
('', 'yasyngym2200@gmail.com', '09138087378', 'yasin12345'),
('yasin0101010', 'yasyngym2200@gmail.com', '12213123213', 'yasin12345'),
('yasin0101010', 'yasyngym2200@gmail.com', '12344433345', 'yasin12345'),
('yasin0101010', 'yasyngym2200@gmail.com', '09138087378', 'yasin12345'),
('yasin0101010', 'yasyngym2200@gmail.com', '09138087378', 'yasin12345'),
('yasin0101010', 'yasyngym2200@gmail.com', '09138087378', 'yasin12345'),
('yasin0101010', 'yasyngym2200@gmail.com', '09138087370', 'yasin12345'),
('yasin0101010', '', '', 'yasin12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
