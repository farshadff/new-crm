-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2018 at 06:50 PM
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
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `fax` int(11) DEFAULT NULL,
  `adrress1` text COLLATE utf8_unicode_ci,
  `adrress2` text COLLATE utf8_unicode_ci,
  `adrress3` text COLLATE utf8_unicode_ci,
  `adrress4` text COLLATE utf8_unicode_ci,
  `adrress5` text COLLATE utf8_unicode_ci,
  `telephone1` int(11) DEFAULT NULL,
  `telephone2` int(11) DEFAULT NULL,
  `telephone3` int(11) DEFAULT NULL,
  `telephone4` int(11) DEFAULT NULL,
  `telephone5` int(11) DEFAULT NULL,
  `client_type` text COLLATE utf8_unicode_ci,
  `sellman` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `description`, `fax`, `adrress1`, `adrress2`, `adrress3`, `adrress4`, `adrress5`, `telephone1`, `telephone2`, `telephone3`, `telephone4`, `telephone5`, `client_type`, `sellman`, `created_at`, `updated_at`) VALUES
(1, 'moshtari 1', 'moshtari 1', 1, 'moshtari 1', NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, 'بالفعل', '1', '2018-07-02 08:00:29', '2018-07-02 08:00:29'),
(2, 'moshtari 2', 'moshtari 2', 1, 'moshtari 1', NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, 'بالقوه', '1', '2018-07-02 08:00:29', '2018-07-02 08:00:29'),
(3, 'moshtari 3', 'moshtari 2', 1, 'moshtari 1', NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, 'بالقوه', '1', '2018-07-02 08:00:29', '2018-07-02 08:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `client_user`
--

DROP TABLE IF EXISTS `client_user`;
CREATE TABLE IF NOT EXISTS `client_user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client_user`
--

INSERT INTO `client_user` (`id`, `client_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 2, NULL, NULL),
(5, 2, 4, NULL, NULL),
(6, 2, 1, NULL, NULL),
(7, 1, 1, NULL, NULL),
(8, 1, 1, NULL, NULL),
(9, 1, 1, NULL, NULL),
(10, 1, 1, NULL, NULL),
(11, 1, 1, NULL, NULL),
(12, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `title`, `description`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'asdadsad', 1, '2018-06-29 15:02:30', '2018-06-29 15:02:30'),
(2, 'asdasd', 'asdadsad', 1, '2018-06-29 15:02:55', '2018-06-29 15:02:55'),
(3, 'asdasdasd', 'asdasd', 1, '2018-06-29 15:03:46', '2018-06-29 15:03:46'),
(4, 'asdasdasd', 'asdasd', 1, '2018-06-29 15:04:07', '2018-06-29 15:04:07'),
(5, 'asdتسک اولasd', 'شسیشسی', 1, '2018-06-29 15:05:23', '2018-06-29 15:05:23'),
(6, 'شسی', 'شسی', 1, '2018-06-29 15:06:31', '2018-06-29 15:06:31'),
(7, 'شسی', 'شسی', 1, '2018-06-29 15:25:00', '2018-06-29 15:25:00'),
(8, 'شسی', 'شسی', 1, '2018-06-29 15:25:05', '2018-06-29 15:25:05'),
(9, 'شسی', 'شسی', 1, '2018-06-29 15:28:20', '2018-06-29 15:28:20'),
(10, 'شسی', 'شسی', 1, '2018-06-29 15:28:44', '2018-06-29 15:28:44'),
(11, 'شسی', 'شسی', 1, '2018-06-29 15:31:05', '2018-06-29 15:31:05'),
(12, 'شسی', 'شسی', 1, '2018-06-29 15:32:13', '2018-06-29 15:32:13'),
(13, 'شسی', 'شسی', 1, '2018-06-29 15:32:30', '2018-06-29 15:32:30'),
(14, 'شسی', 'شسی', 1, '2018-06-29 15:32:53', '2018-06-29 15:32:53'),
(15, 'شسی', 'شسی', 1, '2018-06-29 15:33:16', '2018-06-29 15:33:16'),
(16, 'xxxxxxx', 'xzzxz', 1, '2018-06-29 15:33:40', '2018-06-29 15:33:40'),
(17, 'تست سالم', 'شسیشسی', 1, '2018-06-29 15:36:40', '2018-06-29 15:36:40'),
(18, 'فاکتور بدیعی', 'بدیعی', 2, '2018-06-29 15:48:13', '2018-06-29 15:48:13'),
(19, 'asd', 'asda', 1, '2018-06-29 15:50:03', '2018-06-29 15:50:03'),
(20, 'فرشاد', 'تسک اول', 1, '2018-07-05 02:34:21', '2018-07-05 02:34:21'),
(21, 'hhhhh', 'hhhhhhh', 3, '2018-07-05 02:35:07', '2018-07-05 02:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_product`
--

DROP TABLE IF EXISTS `invoice_product`;
CREATE TABLE IF NOT EXISTS `invoice_product` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoice_product`
--

INSERT INTO `invoice_product` (`id`, `invoice_id`, `product_id`, `product_quantity`, `created_at`, `updated_at`) VALUES
(36, 21, 3, 123, NULL, NULL),
(35, 21, 1, 22, NULL, NULL),
(34, 20, 1, 123, NULL, NULL),
(33, 19, 1, 123, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_23_173026_create_tasks_table', 1),
(20, '2018_06_15_084723_create_invoices_table', 4),
(5, '2018_05_23_182059_create_products_table', 1),
(6, '2018_05_23_201105_create_product_cats_table', 1),
(22, '2018_05_24_162410_create_clients_table', 6),
(8, '2018_05_25_105211_create_phonebooks_table', 1),
(9, '2018_06_07_063332_create_notifications_table', 2),
(21, '2018_06_29_192748_invoice_product', 5),
(23, '2018_07_02_201641_client_user', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phonebooks`
--

INSERT INTO `phonebooks` (`id`, `title`, `description`, `client_id`, `calldate`, `rememberdate`, `created_at`, `updated_at`) VALUES
(13, 'titr 1 ', 'titr1 ', 123, '2018-06-25 00:00:00', '2018-06-25 00:00:00', NULL, NULL),
(12, 'titr 1 ', 'titr1 ', 1, '2018-06-25 00:00:00', '2018-06-25 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `stock` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `Description`, `price`, `cat_id`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'محصول اول', 'محصول اول', 250000, 1, 1.00, '2018-06-12 08:01:26', '2018-06-12 08:01:26'),
(2, 'دوم محصول ', 'دوم محصول ', 980000, 1, 1.00, '2018-06-12 08:01:26', '2018-06-12 08:01:26'),
(3, 'محصول سوم', 'محصول سوم', 890000, 1, 1.00, '2018-06-18 09:57:09', '2018-06-18 09:57:09'),
(4, '4', '4', 123, 1, 1.00, '2018-06-18 10:06:41', '2018-06-18 10:06:41'),
(5, 'oooo', 'asd', 123, 1, 1.00, '2018-06-18 10:08:14', '2018-06-18 10:08:14'),
(6, 'kkkkk', '68', 658, 1, 1.00, '2018-06-18 10:08:33', '2018-06-18 10:08:33'),
(7, 'asd', 'asd', 123, 4, 1.00, '2018-06-21 16:52:36', '2018-06-21 16:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_cats`
--

DROP TABLE IF EXISTS `product_cats`;
CREATE TABLE IF NOT EXISTS `product_cats` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_cats`
--

INSERT INTO `product_cats` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'تسک اول', 'asdasdas', '2018-06-12 07:55:59', '2018-06-12 07:55:59'),
(2, 'asd', 'asd', '2018-06-18 10:08:59', '2018-06-18 10:08:59'),
(3, 'asd', 'asd', '2018-06-18 10:09:39', '2018-06-18 10:09:39'),
(4, 'jjjjjj', 'jjjjjjj', '2018-06-18 10:09:51', '2018-06-18 10:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'farshad', 'farshad@gmail.com', '123', NULL, NULL, NULL),
(2, 'farshad2', 'farshad2@gmail.com', '123', NULL, NULL, NULL),
(3, 'farshad3', 'farshad32@gmail.com', '123', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
