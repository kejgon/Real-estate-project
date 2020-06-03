-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2020 at 02:22 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estates`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `prop_id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_title` varchar(255) NOT NULL,
  `prop_owner` varchar(255) NOT NULL,
  `prop_type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prop_img` varchar(255) NOT NULL,
  `sold` varchar(255) NOT NULL,
  `bedroom` int(50) NOT NULL,
  `kitchen` int(50) NOT NULL,
  `balcony` int(50) NOT NULL,
  `swimming_pool` varchar(30) NOT NULL,
  `bathroom` int(5) NOT NULL,
  `price` int(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`prop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`prop_id`, `prop_title`, `prop_owner`, `prop_type`, `address`, `description`, `prop_img`, `sold`, `bedroom`, `kitchen`, `balcony`, `swimming_pool`, `bathroom`, `price`, `date`) VALUES
(9, 'Starland', 'kejgon', 'Apartment', 'Valley arcade', 'Decedent and Amazing  ', 'living-room-1643855_1920.jpg', 'yes', 5, 2, 2, 'yes', 2, 500000000, '2017-06-03'),
(12, 'All Stars', 'Wanioki', 'Apartment', 'Langata', 'dkkskjsdkjsd', 'kitchen-1543487_1920.jpg', 'No', 9, 4, 5, 'yes', 3, 500999, '2019-02-07'),
(11, 'Lenana', 'james', 'Apartment', 'Kilimani', 'djskndkfnjsdksndkj', '2.jpg', 'yes', 8, 3, 4, 'yes', 3, 2939020, '2022-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(1, 'kejgon@gmail.com', 'admin', 'admin'),
(2, 'kimo@gmail.com', 'kimo', 'kimo'),
(3, 'jwokdoog@gmail.com', 'jwoki', 'jwoki'),
(101, 'newnew@gmail.com', 'newnew', 'newr'),
(100, 'bumbum@gmail.com', 'bumbum', 'bumbum'),
(103, 'kimo@gmail.com', 'kimo', 'kimo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
