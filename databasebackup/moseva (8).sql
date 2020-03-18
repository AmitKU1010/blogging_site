-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 11:39 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moseva`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `pin` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address`, `pin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22, 'sambalpur', 'sam', '654321', '2019-10-17 15:09:28', '2019-10-17 15:09:28', NULL),
(20, 'jjkr', 'jajpur', '755015', '2019-10-17 15:03:07', '2019-10-17 15:03:07', NULL),
(7, 'puri', 'near puri manidr', '859979', '2019-10-02 15:05:08', '2019-10-03 02:13:26', NULL),
(8, 'baleswar', 'remuna', '123456,123456,123456', '2019-10-02 15:08:47', '2019-10-03 02:13:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catagory_lists`
--

CREATE TABLE `catagory_lists` (
  `id` int(11) NOT NULL,
  `department_name` varchar(50) DEFAULT NULL,
  `catagory_name` varchar(50) DEFAULT NULL,
  `subcatagory_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory_lists`
--

INSERT INTO `catagory_lists` (`id`, `department_name`, `catagory_name`, `subcatagory_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, '3', '8', '5', '2019-10-14 02:03:17', '2019-10-14 02:03:17', '2019-10-14 07:33:17'),
(7, '3', '8', '6', '2019-10-14 03:51:09', '2019-10-14 03:51:09', '2019-10-14 09:21:09'),
(13, '3', '7', '4', '2019-10-14 13:51:58', '2019-10-14 13:51:58', '2019-10-14 19:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `catagory_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catagory_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, 'AC', NULL, '2019-10-10 14:25:02', '2019-10-10 14:25:02'),
(7, 'FAN', NULL, '2019-10-10 14:24:53', '2019-10-10 14:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `category_parent`
--

CREATE TABLE `category_parent` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_parent`
--

INSERT INTO `category_parent` (`id`, `parent_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 0, 1, '2019-09-13 22:09:56', '2019-09-13 22:09:56'),
(2, 1, 2, '2019-09-13 22:10:41', '2019-09-13 22:10:41'),
(3, 3, 4, '2019-09-14 05:44:05', '2019-09-14 05:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Electrical', '2019-10-08 11:55:17', '2019-10-08 11:55:17', '2019-10-08 17:25:17'),
(4, 'Software', '2019-10-10 14:21:13', '2019-10-10 14:21:13', '2019-10-10 19:51:13'),
(5, 'SOLAR', '2019-10-19 17:24:54', '2019-10-19 17:24:54', '2019-10-19 17:24:54'),
(6, 'INTERIOR DESIGN', '2019-10-19 17:24:54', '2019-10-19 17:24:54', '2019-10-19 17:24:54'),
(7, 'PAINTERS', '2019-10-19 17:26:41', '2019-10-19 17:26:41', '2019-10-19 17:26:41'),
(8, 'PLUMBER', '2019-10-19 17:26:41', '2019-10-19 17:26:41', '2019-10-19 17:26:41'),
(9, 'PACKERS AND MOVERS', '2019-10-19 17:26:41', '2019-10-19 17:26:41', '2019-10-19 17:26:41'),
(10, 'EVENT MANAGEMENT', '2019-10-19 17:26:41', '2019-10-19 17:26:41', '2019-10-19 17:26:41'),
(11, 'PHOTO SHOOTING', '2019-10-19 17:26:41', '2019-10-19 17:26:41', '2019-10-19 17:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_12_051615_create_products_table', 1),
(4, '2019_09_12_053939_create_profiles_table', 1),
(5, '2019_09_12_054228_create_orders_table', 1),
(6, '2019_09_12_055719_create_payments_table', 1),
(7, '2019_09_12_055918_create_roles_table', 1),
(8, '2019_09_12_055959_create_categories_table', 1),
(9, '2019_09_12_060030_create_branches_table', 1),
(10, '2019_09_12_111954_create_category_product_table', 1),
(11, '2019_09_12_113738_create_category_parent_table', 1),
(12, '2019_09_13_170054_create_pins_table', 1),
(13, '2019_09_13_193951_create_managers_table', 2),
(14, '2019_09_13_194207_create_vendors_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE `pins` (
  `id` int(10) UNSIGNED NOT NULL,
  `pin_codes` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pins`
--

INSERT INTO `pins` (`id`, `pin_codes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(45, 654321, '2019-10-17 15:09:03', '2019-10-17 15:09:03', NULL),
(44, 755015, '2019-10-17 14:30:22', '2019-10-17 14:30:22', NULL),
(43, 755019, '2019-10-17 14:28:35', '2019-10-17 14:28:35', NULL),
(33, 123456, '2019-09-29 15:05:06', '2019-09-29 15:05:06', NULL),
(32, 123456, '2019-09-29 15:04:58', '2019-09-29 15:04:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `department_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catagory_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcatagory_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availbale` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_synonyms` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `video_link` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_service` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `service_name`, `slug`, `description`, `department_name`, `catagory_name`, `subcatagory_name`, `service_type`, `price`, `offer_price`, `tax`, `availbale`, `product_synonyms`, `images`, `video_link`, `booking_time`, `faq`, `related_service`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'home construction', 'construction', NULL, '3', '8', '5', '1', '13399', '1234', '100', 'sambalpur,jjkr', 'sadfsd,dsfsd,fddf,dsfsd,sdf', '1571502473.png', 'video link', '1 Hours', NULL, 'fxfx,sdfsdf,sdfsd,dsf', '2019-10-19 10:57:53', '2019-10-19 10:57:53', NULL),
(2, 'Jio Mobile Repair service', NULL, '<div>sdfgdfg</div>', '3', '8', '5', '2', '1000', '2432', '10', 'puri,baleswar', 'sadfsd', '1571340814.png', 'sdfsdf', '3:30am', NULL, NULL, '2019-10-14 14:42:29', '2019-10-14 14:42:29', NULL),
(3, 'Plumber service', NULL, '<div>vgdff</div>', '3', '8', '5', '1', '15821', '2432', '100', 'puri,baleswar', 'sadfsd', '1571503302.jpg', 'sdfsdfsfsdf', '1:00am', NULL, NULL, '2019-10-14 15:01:23', '2019-10-14 15:01:23', NULL),
(4, 'Saloon And Massage', 'sdfsdf', '<div>sdfsdf</div>', '3', '8', '5', '1', '15821', '2432', '100', 'puri', 'sadfsd', '1571340814.png', 'adsdf', '1:00am', 'what', 'hfg', '2019-10-17 14:03:34', '2019-10-17 14:03:34', NULL),
(6, 'kiwi', 'nfgh', '<div><u style=\"\"><b>amit des</b></u></div>', '4', '8', '5', '2', '15821', '8056', '12', 'puri,baleswar', 'sadfsd,dsfsd,fddf,dsfsd,sdf', '1571503302.jpg', 'sfssdf', '3:30am', 'fsdfsdfsdfsdfsdfsddfdsfsdfsdfdsfdsfsf', 'fxfx,sdfsdf,sdfsd,dsf', '2019-10-19 11:11:42', '2019-10-19 11:11:42', NULL),
(7, 'test service', 'test service', '<div>nmhgfhhfgfhfhgfhgfgf gncfc&nbsp; hgfghf hgfhf chgg ghghf</div>', '3', '8', '5', '1', '250000', '12000', '100', 'sambalpur,puri', 'bbb,sdfsdfd', '1571844612.bmp', 'ghdgh', 'below 1 Hours', 'vgfb', 'bvbvxvb', '2019-10-23 10:00:12', '2019-10-23 10:00:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `pin` int(10) UNSIGNED DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `name`, `gender`, `address`, `pin`, `phone`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-13 11:36:00', '2019-09-13 11:36:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'customer', ' Customer Role', '2019-09-13 11:36:00', '2019-09-13 11:36:00', NULL),
(2, 'admin', 'Admin Role', '2019-09-13 11:36:00', '2019-09-13 11:36:00', NULL),
(3, 'vendor', 'Vendor', '0000-00-00 00:00:00', NULL, NULL),
(4, 'manager', 'manager', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE `service_types` (
  `id` int(11) NOT NULL,
  `service_type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_types`
--

INSERT INTO `service_types` (`id`, `service_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'INSTALLATION', '2019-10-10 18:17:53', '2019-10-10 18:17:53', '2019-10-10 18:17:53'),
(2, 'REPAIR', '2019-10-10 18:17:53', '2019-10-10 18:17:53', '2019-10-10 18:17:53'),
(3, 'SERVICE', '2019-10-10 18:18:13', '2019-10-10 18:18:13', '2019-10-10 18:18:13'),
(5, 'Massage', '2019-10-11 12:18:27', '2019-10-11 12:18:27', '2019-10-11 17:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `subcatagories`
--

CREATE TABLE `subcatagories` (
  `id` int(11) NOT NULL,
  `subcatagory_name` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `deleted_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcatagories`
--

INSERT INTO `subcatagories` (`id`, `subcatagory_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'STAND FAN', '2019-10-10 19:55:15', '2019-10-10 19:55:15', NULL),
(5, 'SPLIT AC', '2019-10-10 19:55:23', '2019-10-10 19:55:23', NULL),
(6, 'WINDOW AC', '2019-10-10 19:55:28', '2019-10-10 19:55:28', NULL),
(7, 'sdfs', '2019-10-11 17:45:30', '2019-10-11 17:45:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(59) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_name_user` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_proof` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_days` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_time_in` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_time_out` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doj` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strength` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `email`, `password`, `show_password`, `remember_token`, `name`, `phone_number`, `gender`, `address`, `pincode`, `dob`, `profile_image`, `qualification`, `department_name_user`, `branch`, `id_proof`, `working_days`, `working_time_in`, `working_time_out`, `account_number`, `ifsc_code`, `doj`, `priority`, `strength`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'admin@admin.com', '$2y$10$atehryuTwgjMCcR3i/20QuimKHMJugw7nB0vCHVY1/dnIMUXDkwPS', NULL, 'tvHye8hF2z8QtOsaq0KCoLxBbxxvv05Vz6jvsKcX3s3vpIyiW547S43A4CAi', 'admin', '8763909110', 'MALE', 'bbsr', '751012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-13 11:36:00', '2019-09-13 11:36:00', NULL),
(2, 1, 'sahoosomanath468@gmail.com', '$2y$10$G3i9Y646g9eqlHxwP3bmWeCyQq3WJgC/pf0Gf/a..1GT352l8jwwG', NULL, NULL, 'somanath', '8763909110', 'MALE', 'puri', '198123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-16 14:41:59', '2019-09-16 14:41:59', NULL),
(3, 1, 'mahendrapratapjena@gmail.com', '$2y$10$wBXcoUabc9TYI2AzbVF0HuAdKZUDiltDnSbZNbRzr0N1YcVw9ZuDi', NULL, NULL, 'mahendra', '8763909110', 'MALE', 'ctc', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-21 22:13:58', '2019-09-21 22:13:58', NULL),
(4, 1, 'narayan.shaw121@gmail.com', '$2y$10$7qWw3.2Ioqo2rHl3WyR2D.HmLHrXpVXoiJgO6GjM9gdABxrnWvmM2', NULL, 'WWRhCdal2WxjkOmcAeWcBwBx6nWdrNQdIZFL2L3qqgHeLXKDSQUVq2SLEBiI', 'narayan', '8763909110', 'MALE', 'jjkr', '654321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:38:04', '2019-09-24 05:38:04', NULL),
(5, 1, 'customer@customer.com', '$2y$10$JVG1mTzoviQjaPbx8QDQGuc7BSQ4N5Cge4jD3Hhj36erDq7dwdKeu', NULL, NULL, 'customer', '8763909110', 'MALE', 'sambalpur', '899067', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-24 08:57:51', '2019-09-24 08:57:51', NULL),
(11, 1, 'sahoosambit@gmail.com', '$2y$10$ahyiKL1gF9eN.ZYaIiSLMOpzWEkYSbgpLqt/MNuvUuX/FsE5MvoAK', NULL, 'qFYz97AuRyGCz2EGdCCRuOWDS29123c0NY4gVfe6if8LxyU11Yi2aTADywOd', 'sambit kumar sahoo', '8763909110', 'MALE', 'sankhachila', '751019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-27 05:27:29', '2019-09-27 05:27:29', NULL),
(12, 1, 'ss@gmail.com', '$2y$10$UE9.gOupDXUDnOLnmzlU6uq9h6M/EhzMN2Dm.3g9AlHtEpq1c.IX.', NULL, 'Vh8L6XfICkuLfFsFv9V2Df9DbeSzt1bRlBK7UjEf1iiddYMuL4EGfu9hZecL', 'Amit', '4455', 'male', 'sank', '66666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-27 05:48:15', '2019-09-27 14:49:24', NULL),
(13, 3, 'vendor@gmail.com', '$2y$10$fCXIRBAyXyZApPnb5Xra6eXCRcNkdae2w8GK6t1QS7/FOySsVde.O', NULL, 'U5dDC6JWScCgJJ46RezLwjFvVmrkxpMfagf2WMGqPxSW56tKqPvpQQsHSKtw', 'vendor', '4556667', 'male', 'bbsr', '555554', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-27 13:43:43', '2019-09-30 01:05:56', NULL),
(14, 1, 'k@gmail.com', '$2y$10$tCfZ13aKvvQUi5ftolipB.RkZGVoWEbOsD5CZUjMrMTDhavAS5thO', NULL, 'wtbdg1BVmxhGw3PAGcSu4ogoFIkL0YOpUqex9XQ9DhPHpN1PIkMQkg9ZEv5v', 'kashmira', '786565444', 'female', 'baleswar', '987654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-30 01:12:16', '2019-09-30 01:13:00', NULL),
(15, 4, 'manager@gmail.com', '$2y$10$l9766ySQ77x2GNLNC/L.8.ckTcBOJlcMu5SFN2EA859tvlbnmmGbq', NULL, 'icwGPBUsMX2PIJrM1lOyTgT7skI7UrBwyoDuKFCTcIZ3Q3dTA9FGKqJvPytY', 'manager', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-11 09:49:03', '2019-10-11 09:49:03', NULL),
(16, 1, 'sahoosujit@gmail.com', '$2y$10$atehryuTwgjMCcR3i/20QuimKHMJugw7nB0vCHVY1/dnIMUXDkwPS', NULL, 'dur5qHLRANLJNMMUsE8jfpesfRVxf9CHqQsVBV2B9kEFivI3GFsJ8BG4Bq3Q', 'IMFO CITY', '8763909110', 'male', 'sanka', '751019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1, 'sahoosamjbhgnfbit@gmail.com', '$2y$10$a2RR7aB/1v48wL/whZlAle9f7EH30iHe3JxKUQFBxLYje2OhTH90C', NULL, NULL, 'sambit kumar sahoo', '(876) 390-9110', 'male', 'sankhachila', NULL, '2019-10-07', NULL, 'hgfngf', 'manager', 'Chrome selected', NULL, '10/22/2019', NULL, '10', '1010-1001-0100-1000', 'nbng', NULL, NULL, NULL, '2019-10-21 23:57:34', '2019-10-21 23:57:34', NULL),
(18, 4, 'sahoo@gmail.com', '$2y$10$Bu0eXsVsZsJlJN2crzzV5OjAqu4jiNQoO2/BIIcKqwaICUjTUwgye', '123456', 'UgcYfGX2RnLCohGMVmbhLAeQbzIYXRQ506XNnJetaPiNjmJlXE3FQjZ0MY9M', 'mhvgfdn', '(876) 390-9110', 'male', 'sankhachila', NULL, '2019-10-16', NULL, 'hvgfd', 'account', 'Chrome selected', NULL, '10/22/2019', '1:00am', '10', '1111-1111-1111-1111', 'hgfg', NULL, NULL, NULL, '2019-10-22 00:09:15', '2019-10-22 00:09:15', NULL),
(19, 4, 'sahoosamasdsdbit@gmail.com', '$2y$10$/fshdpLsiwtsjlr4DHnBmeOnqqhA2pnOdA/m6KqY5s.cU6hvFyApC', '123456', NULL, 'hfngfgnf', '(876) 390-9110', 'male', 'sankhachila', NULL, '2000-01-01', NULL, 'bvngn', 'manager', 'Chrome selected', NULL, '10/07/2019', '3:30am', '10', '1111-1111-1111-1111', 'nbng', NULL, NULL, NULL, '2019-10-22 01:50:14', '2019-10-22 01:50:14', NULL),
(23, 3, 'sss@gmail.com', '$2y$10$02GtnY4X.5CE0sgr8Gkdf.rsahOW0277PUmrdMOkWm5Ei7oLwOHji', '123456', NULL, 'mathur sahrma', '8763909110', 'male', 'sankhachila', NULL, '2019-10-27', NULL, 'hgffhf', '3,4', 'Firefox', 'DSC_0693.jpg', 'Monday', '02:02', '01:20', '1111-1111-1111-1111', '11111111111111', '2019-10-27', 'account', NULL, '2019-10-27 02:17:46', '2019-10-27 02:17:46', NULL),
(22, 3, 'kkk@gmail.com', '$2y$10$SA/Z5iM.NPEwJZgtIgK7nuC3gc6TzrEblU/W0tiNtSlvrCMFWd4iK', '123456', 'lNo7eRb0I4IIv6WWZYlHOXuD29VzbTEzKRtHh5HcBYWo1wxq7YkcEgWwLHVu', 'kkk', '(876) 390-9110', 'male', 'sankhachila', NULL, '11/11/1111', NULL, 'asdada', 'Web Solution selected', 'Firefox', NULL, '10/09/2019', NULL, '10', '1111-1111-1111-1111', 'hgfg', '11/11/1111', 'account', NULL, '2019-10-22 06:38:20', '2019-10-22 06:38:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory_lists`
--
ALTER TABLE `catagory_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_parent`
--
ALTER TABLE `category_parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pins`
--
ALTER TABLE `pins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcatagories`
--
ALTER TABLE `subcatagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `catagory_lists`
--
ALTER TABLE `catagory_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category_parent`
--
ALTER TABLE `category_parent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pins`
--
ALTER TABLE `pins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcatagories`
--
ALTER TABLE `subcatagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
