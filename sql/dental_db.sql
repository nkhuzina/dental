-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2023 at 07:02 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `appontments`
--

DROP TABLE IF EXISTS `appontments`;
CREATE TABLE IF NOT EXISTS `appontments` (
  `email` varchar(64) NOT NULL,
  `name` varchar(128) NOT NULL,
  `first_visit` tinyint(1) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` text NOT NULL,
  `pref_name` varchar(128) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` date NOT NULL,
  `service` varchar(512) NOT NULL,
  `message` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appontments`
--

INSERT INTO `appontments` (`email`, `name`, `first_visit`, `app_date`, `app_time`, `pref_name`, `gender`, `dob`, `service`, `message`) VALUES
('jsmit@gmail.com', 'John Smith', 0, '2023-08-18', '12:00', 'J', 'm', '1990-08-15', 'checkup,xray,', 'no'),
('agrey@gmail.com', 'Adel Gray', 0, '2023-08-23', '14:00', 'Adel', 'f', '2000-08-23', 'root,', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `role` varchar(8) DEFAULT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `phone`, `role`) VALUES
('admin', 'etwbok', 'admin@dental.co', '(929) 234-4567', 'admin'),
('John Smith', 'qwerty', 'jsmit@gmail.com', '(347) 234 - 5678', 'user'),
('Sarah Green', 'qazqaz', 'sgreen@gmail.com', '(347) 234 - 9999', 'user'),
('Adel Gray', 'wsxwsx', 'agrey@gmail.com', '(347) 234 - 5678', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
