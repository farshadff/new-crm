-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2018 at 12:18 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

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
-- Table structure for table `abilities`
--

DROP TABLE IF EXISTS `abilities`;
CREATE TABLE IF NOT EXISTS `abilities` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity_id` int(10) UNSIGNED DEFAULT NULL,
  `entity_type` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `only_owned` tinyint(1) NOT NULL DEFAULT '0',
  `scope` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `abilities_scope_index` (`scope`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abilities`
--

INSERT INTO `abilities` (`id`, `name`, `title`, `entity_id`, `entity_type`, `only_owned`, `scope`, `created_at`, `updated_at`) VALUES
(1, 'ban-users', 'Ban users', NULL, NULL, 0, NULL, '2018-07-09 11:35:26', '2018-07-09 11:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_roles`
--

DROP TABLE IF EXISTS `assigned_roles`;
CREATE TABLE IF NOT EXISTS `assigned_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `entity_id` int(10) UNSIGNED NOT NULL,
  `entity_type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `scope` int(11) DEFAULT NULL,
  KEY `assigned_roles_entity_index` (`entity_id`,`entity_type`,`scope`),
  KEY `assigned_roles_role_id_index` (`role_id`),
  KEY `assigned_roles_scope_index` (`scope`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assigned_roles`
--

INSERT INTO `assigned_roles` (`role_id`, `entity_id`, `entity_type`, `scope`) VALUES
(1, 1, 'App\\User', NULL),
(1, 2, 'App\\User', NULL);

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
  `sellpercent` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agreement` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `description`, `fax`, `adrress1`, `adrress2`, `adrress3`, `adrress4`, `adrress5`, `telephone1`, `telephone2`, `telephone3`, `telephone4`, `telephone5`, `client_type`, `sellpercent`, `agreement`, `created_at`, `updated_at`) VALUES
(25, 'کارت گرافیک مناسب گیم حتما بخونید لطفا', 'توضیحات', 123, 'تهران', 'ری', NULL, NULL, NULL, 123, NULL, NULL, NULL, NULL, 'بالفعل', '20', 'subfolder/es3j7CSeoiZx5DcmKXNDOwaCTpeaJ9m1wXzznYnv.jpeg', '2018-07-21 09:20:12', '2018-07-21 09:20:12'),
(24, 'کارت گرافیک مناسب گیم حتما بخونید لطفا', 'توضیحات', 123, 'تهران', 'ری', NULL, NULL, NULL, 123, NULL, NULL, NULL, NULL, 'بالفعل', '20', 'subfolder/XOUsMYeipAnra8vcX4FMmHM8Eo50QR15gvFMJvze.jpeg', '2018-07-21 09:17:01', '2018-07-23 07:32:54');

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
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client_user`
--

INSERT INTO `client_user` (`id`, `client_id`, `user_id`, `created_at`, `updated_at`) VALUES
(82, 25, 1, NULL, NULL),
(80, 2, 1, NULL, NULL),
(81, 2, 1, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(21, 'hhhhh', 'hhhhhhh', 3, '2018-07-05 02:35:07', '2018-07-05 02:35:07'),
(22, 'فاکتور پزوهشکده', 'توضیحات', 1, '2018-07-17 07:01:13', '2018-07-17 07:01:13'),
(23, 'asdasd', 'asdasd', 1, '2018-07-17 07:58:19', '2018-07-17 07:58:19');

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
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoice_product`
--

INSERT INTO `invoice_product` (`id`, `invoice_id`, `product_id`, `product_quantity`, `created_at`, `updated_at`) VALUES
(36, 21, 3, 123, NULL, NULL),
(35, 21, 1, 22, NULL, NULL),
(34, 20, 1, 123, NULL, NULL),
(33, 19, 1, 123, NULL, NULL),
(37, 22, 8, 2, NULL, NULL),
(38, 23, 8, 3, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(26, '2014_10_12_000000_create_users_table', 10),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_23_173026_create_tasks_table', 1),
(20, '2018_06_15_084723_create_invoices_table', 4),
(5, '2018_05_23_182059_create_products_table', 1),
(6, '2018_05_23_201105_create_product_cats_table', 1),
(28, '2018_05_24_162410_create_clients_table', 12),
(8, '2018_05_25_105211_create_phonebooks_table', 1),
(27, '2018_07_18_131155_create_notifications_table', 11),
(21, '2018_06_29_192748_invoice_product', 5),
(23, '2018_07_02_201641_client_user', 7),
(24, '2017_07_13_194000_create_smsir_log_table', 8),
(25, '2018_07_09_150332_create_bouncer_tables', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('e6e44b58-b49a-4e5a-9b13-5de66ae66622', 'App\\Notifications\\ClientAdded', 'App\\User', 2, '{\"client_id\":\"25\",\"user_id\":\"1\"}', NULL, '2018-07-23 07:32:18', '2018-07-23 07:32:18'),
('be4234c9-e8ca-40b6-990b-5ded4fcb5f23', 'App\\Notifications\\ClientAdded', 'App\\User', 2, '{\"client_id\":2,\"client_name\":\"ASD\"}', NULL, '2018-07-18 09:26:46', '2018-07-18 09:26:46'),
('6d702997-3362-44a7-8bd9-b58bed6f5375', 'App\\Notifications\\ClientAdded', 'App\\User', 2, '{\"client_id\":\"moshtari 2\",\"user_id\":2,\"client_name\":\"ASD\"}', NULL, '2018-07-18 09:27:14', '2018-07-18 09:27:14'),
('061d023f-af7f-4b94-8908-c4b8f2193f8c', 'App\\Notifications\\ClientAdded', 'App\\User', 2, '{\"client_id\":\"moshtari 2\",\"user_id\":2,\"client_name\":\"ASD\"}', NULL, '2018-07-18 09:29:57', '2018-07-18 09:29:57');

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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `ability_id` int(10) UNSIGNED NOT NULL,
  `entity_id` int(10) UNSIGNED NOT NULL,
  `entity_type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `forbidden` tinyint(1) NOT NULL DEFAULT '0',
  `scope` int(11) DEFAULT NULL,
  KEY `permissions_entity_index` (`entity_id`,`entity_type`,`scope`),
  KEY `permissions_ability_id_index` (`ability_id`),
  KEY `permissions_scope_index` (`scope`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`ability_id`, `entity_id`, `entity_type`, `forbidden`, `scope`) VALUES
(1, 1, 'roles', 0, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phonebooks`
--

INSERT INTO `phonebooks` (`id`, `title`, `description`, `client_id`, `calldate`, `rememberdate`, `created_at`, `updated_at`) VALUES
(21, 'کارت گرافیک مناسب گیم حتما بخونید لطفا', 'توضیحات', 1, '1397-04-23 11:21:16', '2011-08-19 13:45:00', '2018-07-14 06:51:16', '2018-07-14 06:51:16');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(7, 'asd', 'asd', 123, 4, 1.00, '2018-06-21 16:52:36', '2018-06-21 16:52:36'),
(8, 'سیستم آموزش مجازی سیام', 'سیستم آموزش مجازی سیام', 20000000, 5, 1.00, '2018-07-17 04:24:27', '2018-07-17 04:24:27');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_cats`
--

INSERT INTO `product_cats` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'تسک اولss', 'asdasdas', '2018-06-12 07:55:59', '2018-07-12 02:27:39'),
(2, 'asd', 'asd', '2018-06-18 10:08:59', '2018-06-18 10:08:59'),
(3, 'asd', 'asd', '2018-06-18 10:09:39', '2018-06-18 10:09:39'),
(4, 'jjjjjj', 'jjjjjjj', '2018-06-18 10:09:51', '2018-06-18 10:09:51'),
(5, 'دیجیتال', 'دیجیتال', '2018-07-17 04:24:01', '2018-07-17 04:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(10) UNSIGNED DEFAULT NULL,
  `scope` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`,`scope`),
  KEY `roles_scope_index` (`scope`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `title`, `level`, `scope`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', NULL, NULL, '2018-07-09 11:35:26', '2018-07-09 11:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `smsir_logs`
--

DROP TABLE IF EXISTS `smsir_logs`;
CREATE TABLE IF NOT EXISTS `smsir_logs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `from` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `to` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `response` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `smsir_logs`
--

INSERT INTO `smsir_logs` (`id`, `from`, `to`, `message`, `status`, `response`, `created_at`, `updated_at`) VALUES
(11, '30004747479280', '09192244689', 'شما یک تماس جدید برای امروز دارید', 1, 'ارسال با موفقیت انجام گردید', '2018-07-08 04:55:41', '2018-07-08 04:55:41'),
(12, '30004747479280', '09192244689', 'moshtari 1شما یک تماس جدید برای امروز دارید', 1, 'ارسال با موفقیت انجام گردید', '2018-07-08 04:58:49', '2018-07-08 04:58:49'),
(13, '30004747479280', '09192244689', 'تماس بگیریدmoshtari 1شما امروز باید با آقای/خانوم ', 1, 'ارسال با موفقیت انجام گردید', '2018-07-08 04:59:43', '2018-07-08 04:59:43'),
(14, '30004747479280', '09192244689', 'تماس بگیریدmoshtari 1شما امروز باید با آقای/خانوم ', 1, 'ارسال با موفقیت انجام گردید', '2018-07-08 05:36:22', '2018-07-08 05:36:22'),
(15, '30004747479280', '09192244689', 'تماس بگیریدmoshtari 1شما امروز باید با آقای/خانوم ', 1, 'ارسال با موفقیت انجام گردید', '2018-07-08 13:55:45', '2018-07-08 13:55:45'),
(10, '30004747479280', '09192244689', 'test1', 1, 'ارسال با موفقیت انجام گردید', '2018-07-08 04:37:12', '2018-07-08 04:37:12'),
(16, '30004747479280', '09192244689', 'تماس بگیریدmoshtari 1شما امروز باید با آقای/خانوم ', 1, 'ارسال با موفقیت انجام گردید', '2018-07-08 13:58:01', '2018-07-08 13:58:01'),
(17, '30004747479280', '09192244689', '1یک کاربر جدید به شما ارجاع شده لطفا صفحه کاربران من را مشاهده کنید', 1, 'ارسال با موفقیت انجام گردید', '2018-07-23 07:32:18', '2018-07-23 07:32:18');

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
  `image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `melicode` bigint(20) DEFAULT NULL,
  `personeli` bigint(20) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `mobile`, `melicode`, `personeli`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'admin@gmail.com', '$2y$10$ncD5/nk/C6cCDpg4.cwI/eRURh2rCuWDVSzAjDJahOhEZldS7QaGu', 'asd', 192156, 1561825, 56463, 'cfrIfhHaSGjpPcl3oLpXCmAylBXtt9Dw6Bmt9hLqsmO6pGOXrecr4Sm0WWfI', '2018-07-16 05:40:14', '2018-07-16 05:40:14'),
(2, 'عادل', 'adel@gmail.com', '$2y$10$GPl8ShBE0nLjhylklHiXuOrE5d4zQbZmlfkd1lLakGzOZww6.kDjS', 'asd', 9192244, 9192244, 22, 'spJJHpudEairfRVi3x3oWQ86HV5IyZ8g1d5tptotghrATMsIS2UahcXhbxQC', '2018-07-18 04:27:02', '2018-07-18 04:27:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
