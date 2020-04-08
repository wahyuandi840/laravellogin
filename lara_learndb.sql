-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2020 at 04:17 PM
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
-- Database: `lara_learndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `usernm` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `userlv` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `userap` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `userpw` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tglupd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usrupd` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `kode` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `passexp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `host` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `usernm`, `userlv`, `userap`, `userpw`, `tglupd`, `usrupd`, `kode`, `passexp`, `host`) VALUES
('1', 'coba', '1', '1', '123456', '2020-04-08 12:18:18', '', '', '2020-04-08 12:18:18', '127.0.0.1'),
('2', 'coba2', '2', '2', '123456', '2020-04-08 12:18:18', '', '', '2020-04-08 12:18:18', '127.0.0.1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
