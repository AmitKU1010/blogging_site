-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 12:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogging_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

CREATE TABLE `apps_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `hasLiked` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `catagory_name` varchar(255) DEFAULT NULL,
  `subcatagory_name` varchar(255) DEFAULT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `post_caption` text DEFAULT NULL,
  `post_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `hasLiked`, `title`, `catagory_name`, `subcatagory_name`, `post_image`, `post_caption`, `post_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '37', NULL, NULL, '17', '11', '1584425893.jpg', NULL, '<div><b><table class=\"table-1\"><tbody><tr><td>Can alternatives be found to Huawei? After we decided not to rule Huawei out of our 5G network, Boris asked: “If people oppose one brand or another then they have to tell us what is the alternative, right?” Answering that question the day before yesterday in Munich</td><td> </td></tr><tr><td>asdasd</td><td> </td></tr></tbody></table></b></div>', '2020-03-17 00:48:13', '2020-03-17 00:48:13', '2020-03-17 06:18:13'),
(2, '37', NULL, NULL, '16', NULL, '1584426242.PNG', NULL, '<div>was US defence secretary Mark Esper who said: “We are encouraging allied and U.S. tech companies to develop alternative 5G solutions and we are working alongside them to test these technologies at our military bases as we speak.</div>', '2020-03-17 00:54:02', '2020-03-17 00:54:02', '2020-03-17 06:24:02'),
(3, '37', NULL, NULL, '17', '11', '1584448181.PNG', NULL, '<div><b>Intel is reported to be in talks to sell its home connectivity unit to MaxLinear. In November, Bloomberg reported that Intel had appointed a financial adviser</b></div>', '2020-03-17 06:59:41', '2020-03-17 06:59:41', '2020-03-17 12:29:41'),
(7, NULL, NULL, 'codechief.org', NULL, NULL, NULL, NULL, NULL, '2020-03-18 02:18:22', '2020-03-18 02:18:22', '2020-03-18 07:48:23'),
(8, NULL, NULL, 'wordpress.org', NULL, NULL, NULL, NULL, NULL, '2020-03-18 02:18:23', '2020-03-18 02:18:23', '2020-03-18 07:48:23'),
(9, NULL, NULL, 'laramust.com', NULL, NULL, NULL, NULL, NULL, '2020-03-18 02:18:23', '2020-03-18 02:18:23', '2020-03-18 07:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory_lists`
--

INSERT INTO `catagory_lists` (`id`, `department_name`, `catagory_name`, `subcatagory_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, '3', '8', '5', '2019-10-14 02:03:17', '2019-10-14 02:03:17', '2019-10-14 07:33:17'),
(7, '3', '8', '6', '2019-10-14 03:51:09', '2019-10-14 03:51:09', '2019-10-14 09:21:09'),
(13, '3', '7', '4', '2019-10-14 13:51:58', '2019-10-14 13:51:58', '2019-10-14 19:21:58'),
(14, '3', '17', '11', '2020-03-16 07:05:38', '2020-03-16 07:05:38', '2020-03-16 12:35:38'),
(16, '3', '16', '13', '2020-03-16 07:06:57', '2020-03-16 07:06:57', '2020-03-16 12:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `catagory_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catagory_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catagory_name`, `catagory_img`, `deleted_at`, `created_at`, `updated_at`) VALUES
(17, 'APPLIANCE', '1583997171.jpg', NULL, '2020-03-12 01:42:51', '2020-03-12 01:42:51'),
(16, 'web solutions', '1583930270.jpg', NULL, '2020-03-11 07:07:50', '2020-03-11 07:07:50');

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
-- Table structure for table `choosen_topics`
--

CREATE TABLE `choosen_topics` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `choosen_topics` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choosen_topics`
--

INSERT INTO `choosen_topics` (`id`, `user_id`, `choosen_topics`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, '54', '17', '1', '2020-03-13 04:29:47', '2020-03-13 04:29:47', '2020-03-13 09:59:47'),
(19, '54', '16', '1', '2020-03-13 04:29:47', '2020-03-13 04:29:47', '2020-03-13 09:59:47'),
(20, '55', '17', 'Following..', '2020-03-13 04:37:32', '2020-03-13 04:37:32', '2020-03-13 10:07:32'),
(21, '55', '16', 'Following..', '2020-03-13 04:37:32', '2020-03-13 04:37:32', '2020-03-13 10:07:32'),
(22, '56', '17', 'Follow', '2020-03-13 04:37:51', '2020-03-13 04:37:51', '2020-03-13 10:07:51'),
(23, '56', '16', 'Following..', '2020-03-13 04:37:51', '2020-03-13 04:37:51', '2020-03-13 10:07:51'),
(24, '57', '17', '1', '2020-03-13 04:47:32', '2020-03-13 04:47:32', '2020-03-13 10:17:32'),
(25, '57', '16', '0', '2020-03-13 04:47:32', '2020-03-13 04:47:32', '2020-03-13 10:17:32'),
(26, '58', '17', '1', '2020-03-13 04:49:35', '2020-03-13 04:49:35', '2020-03-13 10:19:35'),
(27, '58', '16', '1', '2020-03-13 04:49:35', '2020-03-13 04:49:35', '2020-03-13 10:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
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
-- Table structure for table `followables`
--

CREATE TABLE `followables` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `followable_id` int(10) UNSIGNED NOT NULL,
  `followable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'follow' COMMENT 'follow/like/subscribe/favorite/upvote/downvote',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catagory_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcatagory_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availbale` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_synonyms` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
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
  `catagory_name` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `deleted_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcatagories`
--

INSERT INTO `subcatagories` (`id`, `subcatagory_name`, `catagory_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'ELECTRONICS', '17', '2020-03-12 07:13:18', '2020-03-12 07:13:18', NULL),
(12, 'it and software', '16', '2020-03-12 07:27:00', '2020-03-12 07:27:00', NULL),
(13, 'AIR CONDITIONER', '17', '2020-03-16 07:59:26', '2020-03-16 07:59:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_new` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(59) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `email`, `email_new`, `password`, `show_password`, `remember_token`, `name`, `image`, `provider_id`, `provider`, `phone_number`, `gender`, `address`, `pincode`, `dob`, `profile_image`, `about_me`, `qualification`, `department_name_user`, `branch`, `id_proof`, `working_days`, `working_time_in`, `working_time_out`, `account_number`, `ifsc_code`, `doj`, `priority`, `strength`, `country`, `city`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, '9658909110', '', '$2y$10$lSub0XZOgZpn50Kq9sNmheh4Ukg5oJ1rOi3.ctZtAGk4Udw1MqwOm', NULL, 'gm8DQ6G9Rs5lRvDP1fY5GLf1iFZ9SPWG9Ju3NCijkXbqBJloCttj1uPyVvG6', 'Admin', NULL, NULL, NULL, '7008', 'MALE', 'bbsr', '751012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-13 11:36:00', '2019-09-13 11:36:00', NULL),
(3, 1, 'mahendrapratapjena@gmail.com', '', '$2y$10$wBXcoUabc9TYI2AzbVF0HuAdKZUDiltDnSbZNbRzr0N1YcVw9ZuDi', NULL, NULL, 'mahendra', NULL, NULL, NULL, '8763909110', 'MALE', 'ctc', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-21 22:13:58', '2019-09-21 22:13:58', NULL),
(4, 1, 'narayan.shaw121@gmail.com', '', '$2y$10$7qWw3.2Ioqo2rHl3WyR2D.HmLHrXpVXoiJgO6GjM9gdABxrnWvmM2', NULL, 'WWRhCdal2WxjkOmcAeWcBwBx6nWdrNQdIZFL2L3qqgHeLXKDSQUVq2SLEBiI', 'narayan', NULL, NULL, NULL, '8763909110', 'MALE', 'jjkr', '654321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:38:04', '2019-09-24 05:38:04', NULL),
(5, 1, 'customer@customer.com', '', '$2y$10$JVG1mTzoviQjaPbx8QDQGuc7BSQ4N5Cge4jD3Hhj36erDq7dwdKeu', NULL, NULL, 'customer', NULL, NULL, NULL, '8763909110', 'MALE', 'sambalpur', '899067', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-24 08:57:51', '2019-09-24 08:57:51', NULL),
(11, 1, 'sahoosambit@gmail.com', '', '$2y$10$ahyiKL1gF9eN.ZYaIiSLMOpzWEkYSbgpLqt/MNuvUuX/FsE5MvoAK', NULL, 'qFYz97AuRyGCz2EGdCCRuOWDS29123c0NY4gVfe6if8LxyU11Yi2aTADywOd', 'sambit kumar sahoo', NULL, NULL, NULL, '8763909110', 'MALE', 'sankhachila', '751019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-27 05:27:29', '2019-09-27 05:27:29', NULL),
(12, 1, 'ss@gmail.com', '', '$2y$10$UE9.gOupDXUDnOLnmzlU6uq9h6M/EhzMN2Dm.3g9AlHtEpq1c.IX.', NULL, 'Vh8L6XfICkuLfFsFv9V2Df9DbeSzt1bRlBK7UjEf1iiddYMuL4EGfu9hZecL', 'Amit', NULL, NULL, NULL, '4455', 'male', 'sank', '66666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-27 05:48:15', '2019-09-27 14:49:24', NULL),
(13, 3, 'vendor@gmail.com', '', '$2y$10$fCXIRBAyXyZApPnb5Xra6eXCRcNkdae2w8GK6t1QS7/FOySsVde.O', NULL, 'U5dDC6JWScCgJJ46RezLwjFvVmrkxpMfagf2WMGqPxSW56tKqPvpQQsHSKtw', 'vendor', NULL, NULL, NULL, '4556667', 'male', 'bbsr', '555554', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-27 13:43:43', '2019-09-30 01:05:56', NULL),
(14, 1, 'k@gmail.com', '', '$2y$10$tCfZ13aKvvQUi5ftolipB.RkZGVoWEbOsD5CZUjMrMTDhavAS5thO', NULL, 'wtbdg1BVmxhGw3PAGcSu4ogoFIkL0YOpUqex9XQ9DhPHpN1PIkMQkg9ZEv5v', 'kashmira', NULL, NULL, NULL, '786565444', 'female', 'baleswar', '987654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-30 01:12:16', '2019-09-30 01:13:00', NULL),
(15, 4, 'manager@gmail.com', '', '$2y$10$l9766ySQ77x2GNLNC/L.8.ckTcBOJlcMu5SFN2EA859tvlbnmmGbq', NULL, 'icwGPBUsMX2PIJrM1lOyTgT7skI7UrBwyoDuKFCTcIZ3Q3dTA9FGKqJvPytY', 'manager', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-11 09:49:03', '2019-10-11 09:49:03', NULL),
(16, 1, 'sahoosujit@gmail.com', '', '$2y$10$atehryuTwgjMCcR3i/20QuimKHMJugw7nB0vCHVY1/dnIMUXDkwPS', NULL, 'dur5qHLRANLJNMMUsE8jfpesfRVxf9CHqQsVBV2B9kEFivI3GFsJ8BG4Bq3Q', 'IMFO CITY', NULL, NULL, NULL, '8763909110', 'male', 'sanka', '751019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1, 'sahoosamjbhgnfbit@gmail.com', '', '$2y$10$a2RR7aB/1v48wL/whZlAle9f7EH30iHe3JxKUQFBxLYje2OhTH90C', NULL, NULL, 'sambit kumar sahoo', NULL, NULL, NULL, '(876) 390-9110', 'male', 'sankhachila', NULL, '2019-10-07', NULL, NULL, 'hgfngf', 'manager', 'Chrome selected', NULL, '10/22/2019', NULL, '10', '1010-1001-0100-1000', 'nbng', NULL, NULL, NULL, NULL, NULL, '2019-10-21 23:57:34', '2019-10-21 23:57:34', NULL),
(18, 4, 'sahoo@gmail.com', '', '$2y$10$Bu0eXsVsZsJlJN2crzzV5OjAqu4jiNQoO2/BIIcKqwaICUjTUwgye', '123456', 'UgcYfGX2RnLCohGMVmbhLAeQbzIYXRQ506XNnJetaPiNjmJlXE3FQjZ0MY9M', 'mhvgfdn', NULL, NULL, NULL, '(876) 390-9110', 'male', 'sankhachila', NULL, '2019-10-16', NULL, NULL, 'hvgfd', 'account', 'Chrome selected', NULL, '10/22/2019', '1:00am', '10', '1111-1111-1111-1111', 'hgfg', NULL, NULL, NULL, NULL, NULL, '2019-10-22 00:09:15', '2019-10-22 00:09:15', NULL),
(19, 4, 'sahoosamasdsdbit@gmail.com', '', '$2y$10$/fshdpLsiwtsjlr4DHnBmeOnqqhA2pnOdA/m6KqY5s.cU6hvFyApC', '123456', NULL, 'hfngfgnf', NULL, NULL, NULL, '(876) 390-9110', 'male', 'sankhachila', NULL, '2000-01-01', NULL, NULL, 'bvngn', 'manager', 'Chrome selected', NULL, '10/07/2019', '3:30am', '10', '1111-1111-1111-1111', 'nbng', NULL, NULL, NULL, NULL, NULL, '2019-10-22 01:50:14', '2019-10-22 01:50:14', NULL),
(23, 3, 'sss@gmail.com', '', '$2y$10$02GtnY4X.5CE0sgr8Gkdf.rsahOW0277PUmrdMOkWm5Ei7oLwOHji', '123456', NULL, 'mathur sahrma', NULL, NULL, NULL, '8763909110', 'male', 'sankhachila', NULL, '2019-10-27', NULL, NULL, 'hgffhf', '3,4', 'Firefox', 'DSC_0693.jpg', 'Monday', '02:02', '01:20', '1111-1111-1111-1111', '11111111111111', '2019-10-27', 'account', NULL, NULL, NULL, '2019-10-27 02:17:46', '2019-10-27 02:17:46', NULL),
(22, 1, 'user@gmail.com', '', '$2y$10$lSub0XZOgZpn50Kq9sNmheh4Ukg5oJ1rOi3.ctZtAGk4Udw1MqwOm', '123456', 'ffHOEuEaBTFgikaqp227AKHhPH8jkuCZf2JUfGf9qBXoi2zyKuTKheboOwU3', 'User', NULL, NULL, NULL, '(876) 390-9110', 'male', 'sankhachila', NULL, '11/11/1111', NULL, NULL, 'asdada', 'Web Solution selected', 'Firefox', NULL, '10/09/2019', NULL, '10', '1111-1111-1111-1111', 'hgfg', '11/11/1111', 'account', NULL, NULL, NULL, '2019-10-22 06:38:20', '2019-10-22 06:38:20', NULL),
(27, 1, 'pradeep@g.com', '', '$2y$10$km2VV.rHq9hOC2xu/8LGqupn3wJUhg9y6XVlAGslhe30.uD7YhRJK', NULL, '9aMkBX3bt3gAJBC3U0lRPpDP64Dv4YCCdDRnfGJs4j8TWa3mFr64wfNTIFvE', 'pradeep', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-05 02:40:28', '2020-03-05 02:40:28', NULL),
(28, 1, '8745512342', '', '$2y$10$Bss76/8oAFm7lcqUDdAXb.CBTbRAsIifzY4jTpgA6LIyHDS3vfznO', NULL, 'LzLieVxKRLuqqPATXZVmnF5ua3TH3FOhpSGpZ7ULNfhdSZp2uc62LEF9CB46', 'san', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-05 02:43:15', '2020-03-05 02:43:15', NULL),
(35, 1, '9658326371', '', '$2y$10$t5VT6XOdCa3Kz43MVOqHfueVptPHiPvk2rSCowFcR6yTqmb1NDazW', NULL, 'zUnsWylSnKuvmDst5Htxv8Lq3UdV1A8aUktYUnbP6m2dNCcvsWpxeDtouOEQ', 'Amit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-06 06:25:59', '2020-03-06 06:25:59', NULL),
(40, 1, NULL, '', NULL, NULL, 'gu3NO9t3PDsfJMe1Pg4xQsvIHiJCSCFRmKtiuHVV8wN5A8uU6qKIueuzHmuH', 'Vivaan Prusty', 'https://graph.facebook.com/v3.0/2555663238024260/picture?type=normal', '2555663238024260', 'facebook', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-08 04:08:49', '2020-03-08 04:08:49', NULL),
(37, 1, '9437276713', 'sa@gmail.com', '$2y$10$yxgtaDO3dXb67wvJtYSOpOE47r.Vr8BkRhywZ/8NGhvDiM7hTqMkO', NULL, 'QjpnMHMld4LTl0BnfVaEkS7Lcp8BEtJgNe3nxBpMu0sjpSsP5boEO35zwFEs', 'Sujit Rathor', NULL, NULL, NULL, NULL, 'Select', NULL, NULL, '2020-03-20', '1584182416.jpg', 'I am passionate about my work. ...\r\nI am ambitious and driven. ...\r\nI am highly organized. ...\r\nI\'m a people-person. ...\r\nI\'m a natural leader. ...\r\nI am results-oriented. ...\r\nI am an excellent communicator. ...\r\nWords to describe your work style:', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USA', 'Bhubaneswar', '2020-03-07 03:33:02', '2020-03-14 05:10:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `world_cities_free`
--

CREATE TABLE `world_cities_free` (
  `cc_fips` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `cc_iso` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `full_name_nd` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps_countries`
--
ALTER TABLE `apps_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `choosen_topics`
--
ALTER TABLE `choosen_topics`
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
-- Indexes for table `world_cities_free`
--
ALTER TABLE `world_cities_free`
  ADD KEY `idx_cc_iso` (`cc_iso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps_countries`
--
ALTER TABLE `apps_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `catagory_lists`
--
ALTER TABLE `catagory_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- AUTO_INCREMENT for table `choosen_topics`
--
ALTER TABLE `choosen_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
