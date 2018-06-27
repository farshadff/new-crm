-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2018 at 08:17 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `phonebooks`
--

DROP TABLE IF EXISTS `phonebooks`;
CREATE TABLE IF NOT EXISTS `phonebooks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL,
  `calldate` datetime NOT NULL,
  `rememberdate` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phonebooks`
--

INSERT INTO `phonebooks` (`id`, `title`, `description`, `client_id`, `calldate`, `rememberdate`, `created_at`, `updated_at`) VALUES
(1, 'شسی', 'تسک اول ویراییش شده', 1, '2018-05-26 01:00:00', '2018-05-26 01:00:00', '2018-05-25 07:24:20', '2018-05-25 07:52:33'),
(2, 'شسی', 'تسک اول', 1, '2011-08-19 13:45:00', '2011-08-19 13:45:00', '2018-05-25 07:28:24', '2018-05-25 07:28:24'),
(3, 'تست ذینل', 'تست ذینل', 2, '2011-08-20 13:45:00', '2011-08-20 13:45:00', '2018-05-27 07:44:05', '2018-05-27 07:44:05'),
(4, 'شسی', 'تسک اول ویراییش شده', 1, '2018-05-26 01:00:00', '2018-05-26 01:00:00', '2018-05-25 07:24:20', '2018-05-25 07:52:33'),
(5, 'شسی', 'تسک اول ویراییش شده', 3, '2018-05-26 01:00:00', '2018-05-26 01:00:00', '2018-05-25 07:24:20', '2018-05-25 07:52:33'),
(6, 'asd', 'asd', 2, '2011-08-19 13:45:00', '2011-08-19 13:45:00', '2018-05-27 15:24:47', '2018-05-27 15:24:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
