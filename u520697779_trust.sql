-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2025 at 04:15 PM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u520697779_trust`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test Admin', 'support@trustedgeoptions.com', 'admin', '$2y$12$B4bA2Aw3LAqnohCddexMi.ALHAD.gP20ouVtvkRRW/lFuKn3hIR7a', NULL, '2025-01-05 12:54:46', '2025-01-05 12:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `bots`
--

CREATE TABLE `bots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `profit` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bots`
--

INSERT INTO `bots` (`id`, `name`, `amount`, `profit`, `duration`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Smart Bot', '500', '250', '1', 'active', '2024-02-08 22:46:47', '2024-10-02 10:19:06'),
(6, 'Expert Bot', '1000', '350', '1', 'active', '2024-02-08 22:47:25', '2024-10-02 10:20:27'),
(7, 'Professional Bot', '5000', '500', '1', 'active', '2024-02-08 22:49:12', '2024-10-02 10:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `copy_tradings`
--

CREATE TABLE `copy_tradings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `profit_percentage` varchar(255) DEFAULT NULL,
  `response_rate` varchar(255) DEFAULT NULL,
  `trailer` varchar(255) DEFAULT NULL,
  `minumum` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `copy_tradings`
--

INSERT INTO `copy_tradings` (`id`, `name`, `description`, `image`, `profit_percentage`, `response_rate`, `trailer`, `minumum`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ong Lily', 'Manager at Binance', 'public/traders/TDiGyZ4eA1UHwjcgsY16CUJoRYdeUtiPYJIkfD6U.png', '5.7', '4', '599', '100', 'active', '2025-02-19 17:41:28', '2025-02-21 17:13:17'),
(2, 'CodigoJota+', 'Ayuda con MIGRACION', 'public/traders/L27nzxk5J29PwO5o22OjZfyRZ3lB8SW7p70rgN4C.jpg', '75', '6', '5761', '100', 'active', '2025-02-19 18:48:07', '2025-02-21 15:22:49'),
(3, 'CoreStone Capital', 'Aprende trading gratis\r\nAnálisis en vivo\r\nConectamos traders y brokers', 'public/traders/6Pc8oPDzLE4Q9m7I5fFavhN7oidJJ3c7ePUL4UhF.jpg', '56', '4', '5241', '100', 'active', '2025-02-21 16:53:44', '2025-02-21 16:53:44'),
(4, 'John Snow', 'Binance trader', 'public/traders/SYYcIeIC4hsphFeBEUIuUYWbx46IJOoaeYpL44RR.jpg', '5.7', '4', '599', '2000', 'active', '2025-02-21 18:01:20', '2025-02-21 18:01:20'),
(5, 'John Mike', 'Top Binance Trader', 'public/traders/myy54Y9cbudU5Z1LV5MddfHeuiRDf7X3CrzJdIh6.jpg', '7.1', '4', '599', '500', 'active', '2025-02-21 18:17:06', '2025-02-21 18:17:06'),
(6, 'Josetraderclub', 'Te enseño a generar ingresos por Internet\r\nEscríbeme para ayudarte', 'public/traders/yEN1eM3CujV13Xq46BkqWvqcevLTyiVHTzjKMXHh.jpg', '56', '3', '3421', '100', 'active', '2025-02-22 04:08:08', '2025-02-22 04:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_currencies`
--

CREATE TABLE `crypto_currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crypto_currencies`
--

INSERT INTO `crypto_currencies` (`id`, `name`, `symbol`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bitcoin', 'BTC', 'images (1).png', 'active', '2021-09-08 20:39:22', '2024-02-12 15:10:14'),
(2, 'Ethereum', 'ETH', 'Ethereum-Icon-Purple-Logo.wine.png', 'active', '2021-09-16 19:50:15', '2021-09-16 19:50:15'),
(3, 'Tether USD', 'Uusdt Trc20', 'tether-usdt-logo.png', 'active', '2024-02-08 22:43:07', '2024-02-08 22:43:07'),
(4, 'BNB Smart Chain', 'BEP20', 'images.png', 'active', '2024-02-12 15:04:14', '2024-02-12 15:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `demohistory`
--

CREATE TABLE `demohistory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crypto_currency` varchar(255) DEFAULT NULL,
  `crypto_symbol` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `high/low` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demo_trades`
--

CREATE TABLE `demo_trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposithistory`
--

CREATE TABLE `deposithistory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trx_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `charge` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `payable` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `trx_id`, `user_id`, `username`, `method`, `amount`, `charge`, `total`, `rate`, `payable`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'bvQpFpfeywJx', 1, 'testuser', 'Bitcoin', '1000', NULL, NULL, NULL, NULL, 'approved', 'tebg.png', '2025-02-14 14:53:30', '2025-02-14 14:53:59'),
(2, 'bIrLPhgNsYwT', 2, 'gregdiamond', 'Bitcoin', '100', NULL, NULL, NULL, NULL, 'pending', 'IMG-20250206-WA0002.jpg', '2025-02-15 01:44:13', '2025-02-15 01:44:13'),
(3, '4K8jviiAtF7m', 16, 'sandhu', 'Bitcoin', '1000', NULL, NULL, NULL, NULL, 'approved', 'IMG-20250722-WA0004.jpg', '2025-08-06 11:29:50', '2025-08-06 11:30:42'),
(4, 'N26OjsuWnA6Y', 16, 'sandhu', 'USDT TR20', '1000', NULL, NULL, NULL, NULL, 'approved', 'navstrades-20250806-0001.jpg', '2025-08-06 11:48:51', '2025-08-06 11:49:30'),
(5, 'TUqYXGAsDck7', 35, 'Turbooo', 'Bitcoin', '100', NULL, NULL, NULL, NULL, 'approved', 'IMG-20250907-WA0016.jpg', '2025-09-07 16:27:12', '2025-09-07 16:28:35'),
(6, '7BhKE4DqyDYA', 34, 'Turbo', 'Bitcoin', '100', NULL, NULL, NULL, NULL, 'rejected', 'IMG-20250907-WA0009(1).jpg', '2025-09-07 16:44:15', '2025-09-07 16:50:01'),
(7, '3LusasD9LS5N', 16, 'sandhu', 'Bitcoin', '5000', NULL, NULL, NULL, NULL, 'approved', 'IMG-20250907-WA0126.jpg', '2025-09-07 16:49:21', '2025-09-07 16:50:11'),
(8, 'lQqrwPA7OPKu', 36, 'turbo', 'Bitcoin', '100', NULL, NULL, NULL, NULL, 'approved', 'IMG-20250907-WA0126.jpg', '2025-09-07 18:55:59', '2025-09-07 18:57:20'),
(9, 'yar25URcGpGA', 37, 'Mohamed_15', 'Bitcoin', '100', NULL, NULL, NULL, NULL, 'pending', 'IMG-20250907-WA0009(1).jpg', '2025-09-07 19:16:18', '2025-09-07 19:16:18'),
(10, 'NRy6oK9JG8Jr', 36, 'turbo', 'Bitcoin', '100', NULL, NULL, NULL, NULL, 'pending', 'IMG-20250907-WA0009.jpg', '2025-09-07 19:24:26', '2025-09-07 19:24:26'),
(11, '5gyMY9SE5HqC', 37, 'Mohamed_15', 'Bitcoin', '100', NULL, NULL, NULL, NULL, 'pending', 'IMG-20250907-WA0016.jpg', '2025-09-07 19:28:01', '2025-09-07 19:28:01'),
(12, 'QWh8rdQxjvcT', 36, 'turbo', 'Select Option', '100', NULL, NULL, NULL, NULL, 'pending', 'IMG-20250907-WA0009(1).jpg', '2025-09-07 19:39:27', '2025-09-07 19:39:27'),
(13, 'Pn4BkuZ0AT16', 16, 'sandhu', 'Bitcoin', '2000', NULL, NULL, NULL, NULL, 'approved', 'Screenshot_20250907-175116.jpg', '2025-09-08 07:10:01', '2025-09-08 07:15:03'),
(14, 'oa0ffyd6vGO3', 40, 'G9-8373_777', 'Bitcoin', '300.00', NULL, NULL, NULL, NULL, 'approved', 'Your withdrawal of 0.0027876 BTC is now confirmed on the blockchain. - gs2garrett@gmail.com - Gmail.mhtml', '2025-09-10 01:25:28', '2025-09-10 01:31:08'),
(15, '2P6s3haGZSwY', 46, 'Danteiy27', 'Bitcoin', '179', NULL, NULL, NULL, NULL, 'approved', 'Screenshot_20250917_162105_Messages.jpg', '2025-09-17 20:25:48', '2025-09-17 20:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `minimum` varchar(255) NOT NULL,
  `maximum` varchar(255) NOT NULL,
  `instruction` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'wallet.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `name`, `minimum`, `maximum`, `instruction`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bitcoin', '10', '100000', 'bc1q4s6cu4804mhnt8uu0t5neqk40av3d0wqvugxrj', 'active', 'IMG-20250806-WA0000.jpg', '2021-09-09 15:08:11', '2025-08-06 11:37:14'),
(14, 'USDT TR20', '10', '100000', 'TEFAC1KCxgWNyXEsYwaarjtJP15FEbWUE3', 'active', 'Screenshot_20250724-194938.jpg', '2025-02-19 20:17:29', '2025-07-24 18:49:57'),
(16, 'USDT ERC20', '10', '100000', '0x7fb4d15B1B12bb0c03b768cfCFc9EB6db277042b', 'active', 'IMG-20250807-WA0000.jpg', '2025-08-07 17:50:27', '2025-08-07 17:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `invests`
--

CREATE TABLE `invests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `plan_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `method` varchar(225) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `roi` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `time_left` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invests`
--

INSERT INTO `invests` (`id`, `user_id`, `plan_id`, `amount`, `method`, `image`, `roi`, `duration`, `trx_id`, `time_left`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '21', '100', '1461', NULL, '100', 'Weekly', 'pILScSb4bnne', '7', 'running', '2025-02-15 01:42:14', '2025-02-15 01:42:14'),
(2, '7', '23', '2000', '95000', NULL, '150', 'Weekly', 'sOSvS9do5jU0', '7', 'running', '2025-04-24 15:57:06', '2025-04-24 15:57:06'),
(3, '16', '23', '2000', '2000', NULL, '150', '1 Month', 'tHhqpT3ltoOf', '30', 'rejected', '2025-08-06 11:44:02', '2025-09-10 16:20:04'),
(4, '16', '22', '1000', '2500', NULL, '150', '1 Month', 'tIlooUGHIcbO', '30', 'running', '2025-08-06 11:54:36', '2025-08-06 11:54:36'),
(5, '40', '21', '300', '300', NULL, '100', '1 Month', 'OrlRb0nZsAoF', '30', 'running', '2025-09-10 14:49:21', '2025-09-10 14:49:21'),
(6, '46', '21', '178', '179', NULL, '100', '1 Month', 'fjYg2wkFc9n9', '30', 'running', '2025-09-17 20:36:44', '2025-09-17 20:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `livehistory`
--

CREATE TABLE `livehistory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crypto_currency` varchar(255) DEFAULT NULL,
  `crypto_symbol` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `high/low` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manualgateway`
--

CREATE TABLE `manualgateway` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gateway_name` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `min_amount` varchar(255) DEFAULT NULL,
  `max_amount` varchar(255) DEFAULT NULL,
  `fixed_charge` varchar(255) DEFAULT NULL,
  `percent_charge` varchar(255) DEFAULT NULL,
  `deposit_instruction` varchar(255) DEFAULT NULL,
  `gateway_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_25_170746_create_trade_settings_table', 1),
(7, '2021_08_25_171424_create_deposits_table', 1),
(8, '2021_08_25_171447_create_withdraws_table', 1),
(9, '2021_08_25_172201_create_manualgateway_table', 1),
(10, '2021_08_25_172942_create_site_settings_table', 2),
(11, '2021_08_25_173543_create_trades_table', 3),
(12, '2021_08_25_174050_create_withdrawhistory_table', 3),
(13, '2021_08_25_174339_create_deposithistory_table', 3),
(14, '2021_08_25_174631_create_transactions_table', 3),
(15, '2021_08_25_174701_create_demohistory_table', 3),
(16, '2021_08_25_174724_create_livehistory_table', 3),
(17, '2021_08_28_210636_create_sessions_table', 3),
(18, '2021_09_07_061634_create_gateway_table', 3),
(19, '2021_09_08_174511_create_crypto_currencies_table', 3),
(20, '2021_09_08_175227_create_admins_table', 3),
(21, '2021_09_08_175355_create_withdrawmethods_table', 3),
(22, '2021_09_08_180623_create_demo_trades_table', 4),
(23, '2021_09_10_163022_create_plans_table', 5),
(24, '2021_09_11_104424_create_invests_table', 6),
(25, '2024_02_08_091653_create_bots_table', 7),
(26, '2024_02_08_125255_create_user_bots_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `capital` varchar(255) DEFAULT NULL,
  `min` varchar(255) DEFAULT NULL,
  `max` varchar(255) DEFAULT NULL,
  `duration` varchar(255) NOT NULL,
  `roi` varchar(255) NOT NULL,
  `time_left` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `capital`, `min`, `max`, `duration`, `roi`, `time_left`, `created_at`, `updated_at`) VALUES
(21, 'Bronze', NULL, '100', '500', '1 Month', '100', '30', '2024-02-08 22:35:41', '2025-07-24 18:52:22'),
(22, 'Silver', NULL, '500', '1000', '1 Month', '150', '30', '2024-02-08 22:36:40', '2025-07-24 18:52:52'),
(23, 'Gold', NULL, '1000', '2500', '1 Month', '150', '30', '2024-02-08 22:37:42', '2025-07-24 18:53:06'),
(24, 'Diamond', NULL, '2500', '10000', '1 Month', '150', '30', '2024-02-08 22:38:08', '2025-07-24 18:53:20'),
(25, 'Platinum', NULL, '10000', '100000', '1 Month', '200', '30', '2024-02-08 22:38:55', '2025-07-24 18:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0f72hzpxasQwNKA13QZMGf1ZFNA2GgW6ArfWDOcR', NULL, '43.157.153.236', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXplaTFLa3pXb1J4ek5rZWdzOGJmQ0MwMVhNOVpuSVRyUFE2REV6VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vZmFxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759762860),
('1QxOD3YBVEwPfJgt0IDAcCdiVFcdcEePnygzTuU0', NULL, '170.106.113.159', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSjVMeG51UmRoVWlEc0g2SlRYTlR5NmtLWkdoZlhHRXVEQ3VHM1RDOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vYV90cmFkaW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759765315),
('5inMt502yQuud53LkXGvRHgVQi9He3xKVg4eI6nH', NULL, '102.90.102.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36 OPR/120.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia0dhd1R2OFhtMWtndTZmakxpNUxOUGF5VmRRNjdwWTRLcnpYc2JMTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1759762860),
('720A8Iow8d7kMeywCtzJVXhBIbFyB0euPzLlS7k6', NULL, '43.157.188.74', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSW5kSUFpUlNqbnFUTm03S1ZmU1RMbkNEVjlrZlFaaHVBNnMxc0ZlTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vY2ZkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759763420),
('8GWLVplsuqKwbyVUpDT3Hp17Qv2coyhZ2nmWY0HP', 55, '143.105.49.179', 'Mozilla/5.0 (Linux; Android 10; PPA-LX2; HMSCore 6.15.0.331) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5735.196 HuaweiBrowser/16.0.6.300 Mobile Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiR0lEcG9wYXJMdWtCdTZPYTNGY2txdHIxdU9NSVZxR1ZRTVNmTnVuUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vdHJhZGluZy9ib3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTU7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRSWXMwTWVod2ExQkN1aVgvQ1RPQk9lWVBpMk5kVy95NXR5TUdCUXdoSDRHOEtlLlN0Q2RvLiI7fQ==', 1759760228),
('B24DMDzzCIOD2Kj2lU6tlhYJwjVU017FsZ0uJCld', NULL, '43.159.139.164', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEZYWVQwMzZORERyeDJObUR3M2JKMUZ3MFFIU1VBTnViWUgzQWR6ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vbV9hZ3JpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1759764686),
('Bt8oyzs1hCaxOpW01OZMYtDbkkZeTTKN1HYLTWXw', NULL, '43.143.248.236', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUM0V2IzVlhsaGk5djRZWHFUR3JDSnY0eFpNYUthWnl0ZWxKNUpTbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vd3d3LnRydXN0ZWRnZW9wdGlvbnMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759756161),
('dxUC4potsLdkYjoGaPdrR7XN8top2uH0iZnGMsQu', NULL, '43.164.195.17', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXE5ZlM3N3ZvYnY2SzJhdE9DUVRLWkNIUjZ5VjNFUEZONkJrSmRjNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1759754266),
('ewuG1W0qGSIz3buKdmJc0bXGnuaPwVi9FItv2XQD', NULL, '43.153.135.208', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0pWSWVwOGlxdzF1ZDhqWVBMWFR5T0RMWFJMdTNHRDJMT2RTZ0RlaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd3d3LnRydXN0ZWRnZW9wdGlvbnMuY29tL3RfbGV2ZXJhZ2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1759748124),
('FHCZqMxIfTCHIWWWb2If19HsgIEp2Md2LrtgZL4u', NULL, '149.50.107.14', 'Mozilla/5.0 (compatible; GoParserBot/1.0)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibDc1aXFTb08ySEZGd3lWM21nZmJYSjNSaGJYSW1GQjZZZjVSQmE4RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1759760817),
('FpEluapVxpHaQEs7lWbDEdaCbgoyytzJPKZ6Jmc3', NULL, '150.109.119.38', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV0xRbXNaYWFIenZseTk3ekJvRnlnemFjMGNSQ1BWRDc5WUJ5VktiZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vZmFxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759759266),
('FQMjmMQJIEHjaqR2PktOJydfjYWNquUviVOp7p5D', NULL, '43.130.74.193', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWVGY2k1Mk4yM1dvaERFQW1xcE1ZWGszRmhsMmY3QTRnNkd5ZUh3diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vbV9mb3JleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1759755165),
('K8XoFv3q7xyF04SvBNYwjQXLfzoHF4lvxcz9qPPI', NULL, '43.153.86.78', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1FhZlVwUmZTTkpMNGMyd0E0QnlGdTFPaG9NTlJvc3dOTUxBRXlNRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vYV9mZWVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759760524),
('KVxLKDicq36xA1Ozb2544AJRLKq9L1iLi6sU9rf0', NULL, '170.106.180.153', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWc4bndlZm9veWZFMmZkZXVCMmJ4UUlrUzN6ZzZYTUM2YzJrdEV5ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vbmV3c19sZWFybiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1759761669),
('lFpI2qpGSBiljAQe3IBNIYGFx8Iik40lqj0DEzSf', NULL, '61.2.26.243', 'Mozilla/5.0 (Windows; U; Windows 95) AppleWebKit/533.12.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.12.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTndHdFhSWEVtWm4zaXpyMmduNXpPM1M3MXdkRnpNdlFXbXFyOTV5biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vdHJhZGVzZWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1759755900),
('of0LuwCLfNfwUIWnyJuRo0SgBU3qF4JkD6A7DOrf', NULL, '43.153.192.98', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzVZZXl1NjExVmZLUEtTSTAyVUJ1cWM4M3dybTN0ZVBmUnc5WHphTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vbV9zdG9jayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1759755796),
('QE8y0wALypjh3p43ZmAtxYcO6ILVdjm0kO0DBCsU', NULL, '43.159.152.184', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlVNSWRROTdFenFZQzdIUmRwNlU5TjdNbkJyb2tLemJ1dnRsNUpPMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vcF9ldXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1759759896),
('T9qI26J9D63R0KwofOGiAYGA8MKwKnkWv3tbKbA6', NULL, '43.159.135.203', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMXVGcmY5ZjNNT1ZIN0ZBYmVXSk43Qm5qWExHZmlYaWVqZU0zRmRmTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vd3d3LnRydXN0ZWRnZW9wdGlvbnMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759747354),
('Ts8duBf12h398GehlfZkTn9k4EBJ2eUvuHCLfQ8e', NULL, '43.153.102.138', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakJFZEhyV0ljbWxIYjdGdjlxMGxKQ3dFZlpmbm1PM2xESnhBTXFGZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vYV9mZWVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759764039),
('tUvIvE203QnApsDQsuFwibv8VATE3jlorK4A8EP3', NULL, '43.153.27.244', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZms2aWFHRlhmMlVaNVpqVXFkQXhJZWhudzZHVnRSS1VPb3dkTUN0byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd3d3LnRydXN0ZWRnZW9wdGlvbnMuY29tL3RfbGV2ZXJhZ2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1759750356),
('vsL5143KvD8WfGBzdbxBYsKteYDMVYIfd2XmWkKP', NULL, '105.113.110.111', 'WhatsApp/2.23.20.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkdGM1dMclBQRW4zZEpVZGxLU0E4Nnlhekw0VXpFMFloVUFlSEJ5aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1759755575),
('XaZyISPvyoep53APst2nOhE6vhvubDGeZehcQAvo', NULL, '43.153.135.208', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0t6Y2V0eGx1RHRNb1oyVUJzMFk1ckNYOGZCdzJNb3pnUGxQdUhZYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vbmV3c19sZWFybiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1759758077),
('XiEWuI89jCbyajOoHVcCK2ajdFJU2ON95an4ge8a', NULL, '43.156.204.134', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibUhTWEswdWJ5SnpYcHE5V1lXOHozM0VLREdKWHZmQW1Jd2N2RFRXdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vZV9wcmF0aWNhbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1759761016),
('XreV2fyh4RXdDw6bN0QCwDsFhZXCGy8Y5Hf2eUhY', NULL, '170.106.140.110', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUxkTDcxemhROE5MUFczR2JxUkVORVNlTnNld0xKR2lxZ0dURFY0aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vYV9kZXBvc2l0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759756954),
('yEv8leDpfR5bCvZZcw5VIiJL89Ip5jyEvPbQntQk', NULL, '170.106.84.136', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWk5HR3p2dTFySmNabDJSczlDMG45MXc0TFVBVU8zQkltTXlmZndoaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vZmFxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759762356),
('z3d4rLxAU66Y86UmYQ6jYn4t4FcsVW1MDAe388oR', NULL, '43.135.182.43', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiblA5MThTVW9oSFhOamNyMG42WXBmUjF2ZUt5cjF4VzF1Mmpmc29QMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vd3d3LnRydXN0ZWRnZW9wdGlvbnMuY29tL3RfbGV2ZXJhZ2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1759749569),
('ZD9CEFF7yopmHR2ugbvT4jMXmzdsvdCsXCcvWph4', NULL, '43.135.172.89', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlZTamo1OEJPdDBFWkVSRGNqUTl1bkNacWpZbDU3N1hQM0RFSVJMNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vdHJ1c3RlZGdlb3B0aW9ucy5jb20vZV9wcmF0aWNhbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1759757630);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_description` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `user_registration` varchar(255) DEFAULT NULL,
  `email_verification` varchar(255) DEFAULT NULL,
  `referral_status` varchar(255) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_phone` varchar(255) DEFAULT NULL,
  `site_address` varchar(255) DEFAULT NULL,
  `primary_colour` varchar(255) DEFAULT NULL,
  `secondary_colour` varchar(255) DEFAULT NULL,
  `demo_balance` varchar(255) DEFAULT NULL,
  `trade_profit` varchar(255) DEFAULT NULL,
  `referral_bonus` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `site_description`, `currency`, `currency_symbol`, `user_registration`, `email_verification`, `referral_status`, `site_email`, `site_phone`, `site_address`, `primary_colour`, `secondary_colour`, `demo_balance`, `trade_profit`, `referral_bonus`, `created_at`, `updated_at`) VALUES
(1, 'TrustEdge Options', 'Cryptocurrency and Forex Trade Website', 'EURO', '€', 'Enabled', 'Enabled', 'Enabled', 'support@trustedgeoptions.com', '+43 680 54000297', 'Getreidegasse 15 5020 Salzburg Österreich, Austria.', '#0b5394', 'black', '1000', '55', '20', NULL, '2025-07-24 19:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` int(11) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `in_time` varchar(255) NOT NULL,
  `high/low` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `username`, `currency`, `symbol`, `amount`, `in_time`, `high/low`, `result`, `status`, `date`, `created_at`, `updated_at`) VALUES
(1, 16, 'Bitcoin', 'BTC', '290', '1', NULL, '1', 'win', NULL, '2025-08-31 15:50:17', '2025-08-31 15:50:17'),
(2, 16, 'Bitcoin', 'BTC', '200', '1', NULL, '1', 'win', NULL, '2025-08-31 15:57:18', '2025-08-31 15:57:18'),
(3, 16, 'Bitcoin', 'BTC', '100', '1', NULL, '1', 'win', NULL, '2025-09-02 12:44:46', '2025-09-02 12:44:46'),
(4, 34, 'Bitcoin', 'BTC', '10', '1', NULL, '1', 'win', NULL, '2025-09-07 11:44:42', '2025-09-07 11:44:42'),
(5, 34, 'Bitcoin', 'BTC', '20', '1', NULL, '0', 'win', NULL, '2025-09-07 11:51:13', '2025-09-07 11:51:13'),
(6, 34, 'Bitcoin', 'BTC', '20', '1', NULL, '0', 'win', NULL, '2025-09-07 12:31:33', '2025-09-07 12:31:33'),
(7, 34, 'Bitcoin', 'BTC', '10', '1', NULL, '0', 'loss', NULL, '2025-09-07 12:37:02', '2025-09-07 12:37:02'),
(8, 34, 'Bitcoin', 'BTC', '15', '1', NULL, '0', 'win', NULL, '2025-09-07 12:48:13', '2025-09-07 12:48:13'),
(9, 34, 'Bitcoin', 'BTC', '25', '1', NULL, '1', 'win', NULL, '2025-09-07 12:50:49', '2025-09-07 12:50:49'),
(10, 35, 'Bitcoin', 'BTC', '50', '1', NULL, '1', 'win', NULL, '2025-09-07 16:37:50', '2025-09-07 16:37:50'),
(11, 36, 'Bitcoin', 'BTC', '50', '1', NULL, '0', 'loss', NULL, '2025-09-07 19:11:41', '2025-09-07 19:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `trade_settings`
--

CREATE TABLE `trade_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trade_settings`
--

INSERT INTO `trade_settings` (`id`, `time`, `unit`, `created_at`, `updated_at`) VALUES
(1, '30', 'Seconds', '2021-09-08 20:36:06', '2025-08-31 16:12:30'),
(2, '5', 'Minutes', '2021-09-08 20:36:48', '2021-09-08 20:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `username` int(11) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `balance` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `trx_id`, `username`, `amount`, `type`, `balance`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'bva6nEi2nln1', 1, '1000', '1', '1000', 'Profit', '2025-02-14 14:49:57', '2025-02-14 14:49:57'),
(2, 'F3jxpkyXMC4B', 2, '1461', '1', '1461', 'Successful', '2025-02-15 01:37:34', '2025-02-15 01:37:34'),
(3, 'pILScSb4bnne', 2, NULL, NULL, NULL, 'Trading Bot Purchase', '2025-02-15 01:42:14', '2025-02-15 01:42:14'),
(4, 'YafHOtlGIPG8', 2, '4831', '1', '6192', NULL, '2025-02-16 12:26:01', '2025-02-16 12:26:01'),
(5, 'Ncb0GUWYZbFJ', 2, '24811', '1', '24811', NULL, '2025-02-16 12:26:20', '2025-02-16 12:26:20'),
(6, 'eqHAot90mt13', 1, '1000', NULL, NULL, 'debit', '2025-02-19 16:48:20', '2025-02-19 16:48:20'),
(7, 'p02fZF3AkpFJ', 2, '1000', NULL, NULL, 'debit', '2025-02-19 17:57:29', '2025-02-19 17:57:29'),
(8, 'RWwGVlXxZlYY', 2, '100', NULL, NULL, 'debit', '2025-02-19 18:07:39', '2025-02-19 18:07:39'),
(9, 'e89Dbf9TxG8h', 2, '100', NULL, NULL, 'debit', '2025-02-19 18:39:10', '2025-02-19 18:39:10'),
(10, 'BazIzLPHbAHl', 2, '222', NULL, NULL, 'debit', '2025-02-19 18:42:32', '2025-02-19 18:42:32'),
(11, 'HVttryX3UjBq', 2, '100', NULL, NULL, 'debit', '2025-02-21 11:19:54', '2025-02-21 11:19:54'),
(12, 'JDUIrU2gTPS8', 2, '75', NULL, NULL, 'credit', '2025-02-21 11:23:06', '2025-02-21 11:23:06'),
(13, 'okhSsT81VtSF', 2, '57', NULL, NULL, 'credit', '2025-02-21 11:23:51', '2025-02-21 11:23:51'),
(14, 'BSJmcUixfYGr', 2, '5.7', NULL, NULL, 'credit', '2025-02-21 11:23:51', '2025-02-21 11:23:51'),
(15, 'uEUNCm3yq4Ys', 2, '5.7', NULL, NULL, 'credit', '2025-02-21 11:23:51', '2025-02-21 11:23:51'),
(16, '6Kz5dTcNhutJ', 2, '12.654', NULL, NULL, 'credit', '2025-02-21 11:23:51', '2025-02-21 11:23:51'),
(17, 'iCu7TiC0Zb0P', 2, '100', NULL, NULL, 'debit', '2025-02-21 11:26:05', '2025-02-21 11:26:05'),
(18, '8j4HbkAcC1Mp', 2, '200', NULL, NULL, 'debit', '2025-02-21 11:33:28', '2025-02-21 11:33:28'),
(19, 'KaDy8KTuyW3G', 2, '150', NULL, NULL, 'credit', '2025-02-21 11:33:58', '2025-02-21 11:33:58'),
(20, '4y7yLgubjW0O', 2, '1000', NULL, NULL, 'Trading Bot Purchase', '2025-02-21 13:21:47', '2025-02-21 13:21:47'),
(21, 'ml30ovrMvOEv', 2, '100', NULL, NULL, 'debit', '2025-02-21 15:23:11', '2025-02-21 15:23:11'),
(22, '6WmB0oPAkQMa', 4, '100', NULL, NULL, 'debit', '2025-04-01 23:33:09', '2025-04-01 23:33:09'),
(23, 'kLS1YIX435W1', 4, '94.3', NULL, NULL, 'credit', '2025-04-02 13:00:11', '2025-04-02 13:00:11'),
(24, 'pQlYTj28gcJk', 7, '100000', '1', '100000', 'Initial Deposit', '2025-04-24 15:41:48', '2025-04-24 15:41:48'),
(25, 'Nvbivn902Ajw', 7, '72000', '1', '72000', 'ROI', '2025-04-24 15:42:29', '2025-04-24 15:42:29'),
(26, 'bALIdmJ4bKUZ', 7, '3750', '1', '3750', 'Referrer Bonus', '2025-04-24 15:50:18', '2025-04-24 15:50:18'),
(27, 'dksO16uDnsWY', 7, '5000', NULL, NULL, 'Trading Bot Purchase', '2025-04-24 15:56:14', '2025-04-24 15:56:14'),
(28, 'sOSvS9do5jU0', 7, NULL, NULL, NULL, 'Trading Bot Purchase', '2025-04-24 15:57:06', '2025-04-24 15:57:06'),
(29, 'DndGcSY2YUa5', 7, '1900', NULL, NULL, 'debit', '2025-04-24 15:57:50', '2025-04-24 15:57:50'),
(30, 'tHhqpT3ltoOf', 16, NULL, NULL, NULL, 'Trading Bot Purchase', '2025-08-06 11:44:02', '2025-08-06 11:44:02'),
(31, 'sstFMzhKE2cZ', 16, '500', NULL, NULL, 'Trading Bot Purchase', '2025-08-06 11:50:17', '2025-08-06 11:50:17'),
(32, 'XGl6sQxSHjOM', 16, '2500', '1', '2500', NULL, '2025-08-06 11:52:55', '2025-08-06 11:52:55'),
(33, 'LJTG3X9g5mpB', 16, '4500', '1', '4500', NULL, '2025-08-06 11:53:20', '2025-08-06 11:53:20'),
(34, 'tIlooUGHIcbO', 16, NULL, NULL, NULL, 'Trading Bot Purchase', '2025-08-06 11:54:36', '2025-08-06 11:54:36'),
(35, 'b5n209mdoOLN', 17, '1200', '1', '1200', NULL, '2025-08-06 17:16:37', '2025-08-06 17:16:37'),
(36, 'DnMJAhKRUOcS', 20, '17043', '1', '17043', NULL, '2025-08-12 20:36:15', '2025-08-12 20:36:15'),
(37, 'tKYl2dgvz7GX', 27, '50', '1', '50', NULL, '2025-08-24 16:15:15', '2025-08-24 16:15:15'),
(38, 'QKwdmfnca4pB', 27, '300', '1', '350', NULL, '2025-08-25 09:56:05', '2025-08-25 09:56:05'),
(39, 'ue3akV6lfJf1', 27, '300', '0', '50', NULL, '2025-08-25 09:56:26', '2025-08-25 09:56:26'),
(40, 'xkuq4tldjq9Z', 27, '350', '1', '350', NULL, '2025-08-25 09:56:38', '2025-08-25 09:56:38'),
(41, '0xW4jiHCA2dL', 27, '2000', '1', '2350', NULL, '2025-08-25 12:51:50', '2025-08-25 12:51:50'),
(42, 'XOxjcbLXRFQ5', 16, '8000', '1', '8500', NULL, '2025-08-25 13:01:50', '2025-08-25 13:01:50'),
(43, 'vxAUvloM7q5h', 27, '1500', '1', '3850', NULL, '2025-08-25 19:07:01', '2025-08-25 19:07:01'),
(44, 'KVhLtWbZgvCV', 27, '1000', '1', '4850', NULL, '2025-08-29 14:34:10', '2025-08-29 14:34:10'),
(45, '3lcRQh34mNb3', 16, '300', NULL, NULL, 'debit', '2025-08-31 16:09:51', '2025-08-31 16:09:51'),
(46, 'x9SR6veF5Usp', 16, '132', NULL, NULL, 'credit', '2025-08-31 16:19:48', '2025-08-31 16:19:48'),
(47, '3ydkp2vVdYSi', 16, '500', NULL, NULL, 'debit', '2025-08-31 16:49:08', '2025-08-31 16:49:08'),
(48, 'eVoAdK9oFZou', 16, '125', NULL, NULL, 'credit', '2025-08-31 16:52:09', '2025-08-31 16:52:09'),
(49, 'BHtVs4xZ1m8a', 16, '5000', '1', '5010', NULL, '2025-09-02 12:09:33', '2025-09-02 12:09:33'),
(50, 'XtzR1zexau9I', 16, '500', NULL, NULL, 'debit', '2025-09-02 12:46:23', '2025-09-02 12:46:23'),
(51, 'D5rvZmYMnnWH', 16, '464.5', NULL, NULL, 'credit', '2025-09-02 12:46:39', '2025-09-02 12:46:39'),
(52, 'UXpvLknDwtwm', 16, '500', NULL, NULL, 'Trading Bot Purchase', '2025-09-02 12:47:21', '2025-09-02 12:47:21'),
(53, 'DcaTCxNZtowo', 33, '8000', '1', '8000', 'Profit linked to your new account is successful', '2025-09-06 07:00:48', '2025-09-06 07:00:48'),
(54, 'StpoI8gyCoaD', 34, '100', '1', '100', NULL, '2025-09-07 11:09:17', '2025-09-07 11:09:17'),
(55, '0RPcJiTBk4d9', 35, '50', '0', '50', 'Payments received was $50', '2025-09-07 16:29:28', '2025-09-07 16:29:28'),
(56, 'DEfABkVvogUG', 36, '350', '0', '50', NULL, '2025-09-07 19:00:43', '2025-09-07 19:00:43'),
(57, 'DuM6DwX3Cden', 40, '320', '1', '320', 'Profit from recent trades credited.', '2025-09-10 03:23:20', '2025-09-10 03:23:20'),
(58, 'Fyefj5h43kky', 40, '320', '1', '640', NULL, '2025-09-10 09:11:04', '2025-09-10 09:11:04'),
(59, 'SSlD3dZhxDbP', 40, '640', '0', '0', NULL, '2025-09-10 09:11:23', '2025-09-10 09:11:23'),
(60, 'pLQhQhf73Zjz', 16, '800', '0', '6688.5', NULL, '2025-09-10 09:13:02', '2025-09-10 09:13:02'),
(61, 'OrlRb0nZsAoF', 40, NULL, NULL, NULL, 'Trading Bot Purchase', '2025-09-10 14:49:21', '2025-09-10 14:49:21'),
(62, 'S2KE81jxYOaY', 40, '320', '1', '320', 'Profit from recent trades credited.', '2025-09-10 23:15:35', '2025-09-10 23:15:35'),
(63, 'v4MJbwiuZKIE', 40, '455', '1', '775', 'Profit from Recent Trades Credited', '2025-09-11 14:15:09', '2025-09-11 14:15:09'),
(64, 'YJOIabCZWlbe', 42, '58', '1', '58', NULL, '2025-09-11 21:43:56', '2025-09-11 21:43:56'),
(65, 'fdvLKo37UZAq', 40, '850', '1', '1625', NULL, '2025-09-11 21:44:39', '2025-09-11 21:44:39'),
(66, 'WI8qp1GPRNWp', 40, '586', '1', '2211', NULL, '2025-09-12 10:18:31', '2025-09-12 10:18:31'),
(67, 'TlF87N6eMBLz', 43, '10000', '1', '10000', NULL, '2025-09-12 13:51:11', '2025-09-12 13:51:11'),
(68, 'fjYg2wkFc9n9', 46, NULL, NULL, NULL, 'Trading Bot Purchase', '2025-09-17 20:36:44', '2025-09-17 20:36:44'),
(69, 'sE5XC0XODgU2', 46, '80', '1', '80', 'Profit from recent trades credited.', '2025-09-17 22:41:24', '2025-09-17 22:41:24'),
(70, 'bV5hiKCOxQvs', 46, '95', '1', '175', NULL, '2025-09-18 05:49:31', '2025-09-18 05:49:31'),
(71, 'QjhTgMpXbs0t', 46, '200', '1', '375', NULL, '2025-09-19 07:57:45', '2025-09-19 07:57:45'),
(72, 'cmLPei9rRzqy', 46, '230', '1', '605', NULL, '2025-09-22 14:49:58', '2025-09-22 14:49:58'),
(73, 'neqDkRcw4QeA', 46, '150', '1', '755', NULL, '2025-09-24 14:14:47', '2025-09-24 14:14:47'),
(74, 'upi244vp2XUq', 46, '255', '1', '1010', NULL, '2025-09-25 14:39:11', '2025-09-25 14:39:11'),
(75, 'Jx3UBMAF0LFe', 46, '750', '1', '1760', NULL, '2025-09-27 10:19:15', '2025-09-27 10:19:15'),
(76, 'FPv0wSveH9eT', 46, '380', '1', '2140', NULL, '2025-09-27 10:20:27', '2025-09-27 10:20:27'),
(77, 'kSTTD1qtBKFS', 46, '250', '0', '1840', 'Lose in present trade (lack of signal)', '2025-09-29 22:15:15', '2025-09-29 22:15:15'),
(78, 'miQTJNX4wnap', 16, '10000', '1', '11688.5', NULL, '2025-10-03 18:02:09', '2025-10-03 18:02:09'),
(79, 'TDr9LiZOFaiv', 16, '50000', '1', '61688.5', NULL, '2025-10-05 08:07:31', '2025-10-05 08:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `referrer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `tbalance` varchar(255) NOT NULL DEFAULT '0',
  `rbalance` varchar(255) NOT NULL DEFAULT '0',
  `dbalance` varchar(255) NOT NULL DEFAULT '1000',
  `profit` varchar(255) NOT NULL DEFAULT '0',
  `bonus` varchar(255) NOT NULL DEFAULT '0',
  `roi` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `kyc_status` varchar(255) DEFAULT NULL,
  `signal_strenght` int(11) NOT NULL DEFAULT 0,
  `allow_withdrawal` varchar(225) NOT NULL DEFAULT 'yes',
  `withdrawal_fee` varchar(225) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `phone`, `referrer_id`, `country`, `tbalance`, `rbalance`, `dbalance`, `profit`, `bonus`, `roi`, `email`, `email_verified_at`, `status`, `kyc_status`, `signal_strenght`, `allow_withdrawal`, `withdrawal_fee`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `image`, `created_at`, `updated_at`) VALUES
(13, 'David', 'Williamson', 'kwilson7723', '140955590', NULL, 'Afghanistan', '0', '0', '1000', '0', '0', '0', 'ranc.e.cos.t.en.al.o@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$jL8gh6467bUhgyd5DNRb2Oi/Fa2nEOijjewxe4YfD9OQD0ArgDelu', NULL, NULL, NULL, NULL, 'user.png', '2025-07-30 04:49:10', '2025-07-30 04:49:10'),
(14, 'OMOLLO KEVIN', 'OMONDI', 'kevin1987', '254 726 754 557', NULL, 'Kenya', '0', '0', '1000', '0', '0', '0', 'omollokevinomondi@gmail.com', '2025-08-02 12:11:28', 'active', NULL, 10, 'yes', '0', '$2y$10$5LVCUYiu1LVhRkuj5LJDPuadSRi3c5861d6w5tWa1qVUCZ5JxkG96', NULL, NULL, NULL, NULL, 'user.png', '2025-08-02 11:57:45', '2025-08-02 12:11:28'),
(16, 'Nav', 'Sandhu', 'sandhu', '07065271646', NULL, 'United States', '0', '12410', '1000', '11688.5', '1000', '0', 'dikeisrael001@gmail.com', '2025-08-06 11:52:22', 'active', NULL, 95, 'yes', '0', '$2y$10$1TKdKM1nmd5abH3OI3WyceBw32wlnw4YjAIcIn5p.S0j460AAIro2', NULL, NULL, 'BqH6ZitVCVaH0zeapMNi3EO8JZIXawJBIcKu3Lcse1pvUEhgCLDs6BZEy4i2', NULL, 'navstrades-20250806-0001.jpg', '2025-08-06 11:23:21', '2025-10-05 08:14:37'),
(17, 'John', 'Mintor', 'Bas', '0734929636', NULL, 'South Africa', '0', '1200', '1000', '0', '0', '0', 'mintorjohn146@hmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$RmpjtTFeUy42D87QSXG9D.mOrd2M10x.kSNCalS2k.c/Yn37cL0MS', NULL, NULL, NULL, NULL, 'user.png', '2025-08-06 15:56:54', '2025-08-06 17:16:37'),
(18, 'Garvin', 'Felix', 'Curtis911-G', '17587131966', NULL, 'St. Lucia', '0', '0', '1000', '0', '0', '0', 'Felixgarvin52@gmil.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$rmJ9WPPQFe60jsCc2bf6yewqPqkZvcGUkTKEDIgBJpVYHoQvBNr0a', NULL, NULL, NULL, NULL, 'user.png', '2025-08-07 01:24:33', '2025-08-07 01:24:33'),
(19, 'Agnes', 'Dorthe', 'Agnes30', '46769326534', NULL, 'Sweden', '0', '0', '1000', '0', '0', '0', 'agnesdorthe1@gmail.com', '2025-08-07 11:03:23', 'active', NULL, 10, 'yes', '0', '$2y$10$.Rav0fqLcVQhyPbH.8BZhOYtI4WC5vudVN7.50P7sYemCCfz.CHIe', NULL, NULL, NULL, NULL, 'user.png', '2025-08-07 11:02:50', '2025-08-07 11:03:23'),
(20, 'Tiffany', 'Crable', 'Tiffany81', '7656963140', NULL, 'United States', '0', '0', '1000', '17043', '0', '0', 'tiffanycrable@yahoo.com', '2025-08-12 20:37:22', 'active', NULL, 10, 'no', '0', '$2y$10$6NY7KqRbyuaMHqIxG741hO1VMADEjCqzZMMhHKHT2ef1/Rc9BG3XG', NULL, NULL, NULL, NULL, 'IMG_1318.jpeg', '2025-08-08 02:05:17', '2025-08-12 20:37:22'),
(24, 'Ola', 'Mide', 'Manbaby', '+1 245 361 2788', NULL, 'United States', '0', '0', '1000', '0', '0', '0', 'Vipmembership6@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$Yq1zdFRiyjhm9rJcFnGpYOGNOnn42CJwg2NiCzYkPN0yI0DMy5sl.', NULL, NULL, NULL, NULL, 'user.png', '2025-08-13 09:48:36', '2025-08-13 09:48:36'),
(25, 'Thokozani', 'Mzizi', 'thokozani', '0650678978', NULL, 'South Africa', '0', '0', '1000', '0', '0', '0', 'thokozaniamos@gmail.com', '2025-08-16 03:48:37', 'active', NULL, 10, 'yes', '0', '$2y$10$DYK866r0VSk80bYnxkQDGe8nnZHzDIra0QhnzbIQLDW8WSazuIcsa', NULL, NULL, 'YZnRMVwKaCW6ONdBiwnjNZprJxeGj0nP8AAfgpr6Hr4kw0bYFN1a3Ri7HkGK', NULL, 'user.png', '2025-08-16 03:20:15', '2025-08-16 03:48:37'),
(26, 'Max', 'Jeszke', 'max', '96688002', NULL, 'Norway', '0', '0', '1000', '0', '0', '0', 'maxjeszke4@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$KxzDpkzdVKIsmKPOVzhQcuZkvayTW.J7gEcn.gboGB09lqpQOFH9q', NULL, NULL, NULL, NULL, 'user.png', '2025-08-24 00:06:15', '2025-08-24 00:06:15'),
(27, 'Thembekile', 'Siko', 'SIKTHE01', '0731131544', NULL, 'South Africa', '0', '50', '1000', '4850', '0', '0', 'thembekilesiko04@gmail.com', NULL, 'active', NULL, 10, 'no', '380', '$2y$10$iBkj9BDP8DvVe7ccFt7b9Ovso9025DuWjvyfkPQbztV3Gal68XSIS', NULL, NULL, 'INL5MBrfbNj9hykStob6qMWrypuQHr6ICBMNU6SUteOhH4ge3ZdjccDJgFlC', NULL, 'user.png', '2025-08-24 13:46:40', '2025-08-29 14:34:10'),
(29, 'Ndoyi', 'Samalie', 'Beverly001', '07570488471', NULL, 'United Kingdom', '0', '0', '1000', '0', '0', '0', 'ndoyisamalie@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$Q7Di.ocOEm7kVFH5.2.3.eMs68jliWNOV/D9I0pyMEmGlVrWnmuVm', NULL, NULL, NULL, NULL, 'user.png', '2025-08-25 20:22:36', '2025-08-25 20:22:36'),
(30, 'Spencer', 'Thomas', 'Thomas', '+12136360427', NULL, 'United States', '0', '0', '1000', '0', '0', '0', 'spencer.thomas37@mx-mailsrv.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$tlHLbuiDh/pOrTq2WEKAeOBeY3eR71Q91ovkoFoy6xkE6byCXPKaO', NULL, NULL, NULL, NULL, 'user.png', '2025-08-28 18:26:22', '2025-08-28 18:26:22'),
(31, 'Moeketsi', 'Lehoko', 'Moeketsi', '(+27)793544878', NULL, 'South Africa', '0', '0', '1000', '0', '0', '0', 'smalehoko@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$jt0mNGGjeq7jBCHHF5Q/OexPaXr6/tG.X7FA688Sz7x4av6X6fuTS', NULL, NULL, NULL, NULL, 'user.png', '2025-09-01 14:16:42', '2025-09-01 14:16:42'),
(32, 'Meshack Tshimangadzo', 'Mudau', 'Meshack', '0761228752', NULL, 'South Africa', '0', '0', '1000', '0', '0', '0', 'mikemish665@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$VqWMSQ4hQdgKbpjoFvU/J.5WDTyFKTvChcRqRwxDBdudteUcsn8fK', NULL, NULL, NULL, NULL, 'user.png', '2025-09-02 11:22:19', '2025-09-02 11:22:19'),
(33, 'Zebron Dumisa', 'Nkosi', 'Dumisa', '0822219530', NULL, 'South Africa', '0', '0', '1000', '8000', '0', '0', 'nkosidumisa02@gmail.com', '2025-09-05 18:14:10', 'active', NULL, 68, 'no', '800', '$2y$10$hUqOXuzs.fvfR8Sd3p029.us/zyW7qbXdCRAJWKfJCnuvg7MHaX86', NULL, NULL, '7E7Sz6cmmmlwzrIHrJ3Kra5u9nFScWtMJKzhVnZ3b8QZXNQBybbhZFmtUX0j', NULL, 'user.png', '2025-09-05 18:04:56', '2025-09-06 07:00:48'),
(36, 'Marwan', 'Eid', 'turbo', '+971 52 707 5493', NULL, 'United Arab Emirates', '0', '0', '1000', '0', '0', '0', 'maroturbo80@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$dlIr3cJ8jBxnCZhGFkVi/uItPPEpsYOlLvVDKJNIFa8c/.NyNmqwm', NULL, NULL, NULL, NULL, 'user.png', '2025-09-07 18:52:37', '2025-09-07 19:11:10'),
(37, 'Mohamed', 'Ahmed', 'Mohamed_15', '971553315388', NULL, 'United Arab Emirates', '0', '0', '1000', '0', '0', '0', 'billachao750@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$4PaXph6GeJQlhh1/rfH4Qumf4thL39EnmgAMZC0JxiQY6rJtF8Oc6', NULL, NULL, NULL, NULL, 'user.png', '2025-09-07 19:15:42', '2025-09-07 19:15:42'),
(40, 'George', 'Garrett', 'G9-8373_777', '13372088828', NULL, 'United States', '0', '0', '1000', '2211', '0', '0', 'gs2garrett@gmail.com', '2025-09-10 23:15:52', 'active', NULL, 10, 'yes', '0', '$2y$10$Ms01A3nVKENWntVcM7hTO.S4I23KZUEkH5x/.PO.LvFoFKKdGmm5a', NULL, NULL, NULL, NULL, 'user.png', '2025-09-10 00:17:30', '2025-09-12 10:18:31'),
(41, 'Cunningham', 'Majola', 'Cunningham', '0736589961', NULL, 'South Africa', '0', '0', '1000', '0', '0', '0', 'csmajola95@gmail.com', '2025-09-10 06:35:16', 'active', NULL, 10, 'yes', '0', '$2y$10$FAkpXk4wWhx9iY1kY.Q61.pB4S5c3gkShMRhDj0jbDwN1gkHLNYVK', NULL, NULL, NULL, NULL, 'user.png', '2025-09-10 05:54:09', '2025-09-10 06:35:16'),
(42, 'Lindelwa', 'Maphalala', 'maps', '+27 0739435083', NULL, 'South Africa', '0', '58', '1000', '0', '0', '0', 'lindelwamaphalala5@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$1hAM81YLgpG0PJs8oX1iquyHu2cCegug/4QzT4N3gT2FI04fjS55q', NULL, NULL, NULL, NULL, 'user.png', '2025-09-11 21:08:10', '2025-09-11 21:43:56'),
(43, 'Sophy', 'Mmako', '0760813572', '+27760813571', NULL, 'South Africa', '0', '0', '1000', '10000', '0', '0', 'sramolokoane@gmail.com', '2025-09-12 13:29:38', 'active', NULL, 10, 'yes', '0', '$2y$10$bqUIkREVstvvTbBYkILUU.ufpiWmhZYBjhCGxAZNoIFhfAXMBbgsW', NULL, NULL, NULL, NULL, 'user.png', '2025-09-12 13:22:45', '2025-09-12 13:51:11'),
(44, 'Mundango', 'Nyirenda', 'Tiyamike', '0888366418', NULL, 'Malawi', '0', '0', '1000', '0', '0', '0', 'nyirendamundango@gmail.comt', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$qbWSRe53TtTAOTk0cFvDJuz22k4eZUDg0f9.3VAsDVeLTIowGDap.', NULL, NULL, NULL, NULL, 'user.png', '2025-09-14 14:04:58', '2025-09-14 14:04:58'),
(45, 'GIDEON', 'LOURENS', 'Jcdeonlo', '+27792727371', NULL, 'South Africa', '0', '0', '1000', '0', '0', '0', 'jcdeonlo@gmail.com', '2025-09-14 16:00:24', 'active', NULL, 10, 'yes', '0', '$2y$10$J3yOwL5qmCefixhQV3xcIenyBhosdxoZ1nunKPbF6KWE45cuOmGSi', NULL, NULL, '5HOz2Cq0KyR05MfV6mXxgKQNUtyNxqIqYOseDkwV7wjpn361YdSsHyIUF5MA', NULL, 'user.png', '2025-09-14 15:31:55', '2025-09-14 16:00:24'),
(46, 'Dave', 'Saintil', 'Danteiy27', '514 233 8268', NULL, 'Canada', '0', '1', '1000', '1840', '0', '0', 'Dboi327@hotmail.com', '2025-09-16 15:54:53', 'active', NULL, 10, 'yes', '0', '$2y$10$/yOo0yvQ0kvxWcljWxmMNukqHjlSSuuVQ8jWvXPnZmpUsPcnR1uzS', NULL, NULL, 'rWTXv7TEsBYTnmJBGoac1Hs8K8vUkOIEHOfZWSb4Ky7QjOUgi04JdnrtQ9V7', NULL, 'user.png', '2025-09-16 15:46:27', '2025-09-29 22:15:15'),
(48, 'Ana', 'Cepero', 'aceps87', '+15204481751', NULL, 'United States', '0', '0', '1000', '0', '0', '0', 'Anacepero4.AC@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$KfCOu2BJH0HgOLCI/RJFsu7jaNqFP8T4oLmUZy9zDUH9DZ9uvwp7O', NULL, NULL, NULL, NULL, 'user.png', '2025-09-18 14:24:31', '2025-09-18 14:24:31'),
(49, 'Gontse', 'Sempa', 'GG27k', '0678638254', NULL, 'South Africa', '0', '0', '1000', '0', '0', '0', 'freeygontz@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$yyP.VKG58.8MHf1FiOV5.emH3y7ElRKNNmPJSFgzWD82duVG./sby', NULL, NULL, NULL, NULL, 'user.png', '2025-09-19 17:12:53', '2025-09-19 17:12:53'),
(50, 'Dajanira', 'Deberry', 'DDeberry', '6099223992', NULL, 'United States', '0', '0', '1000', '0', '0', '0', 'deberry_dajanira@yahoo.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$mWK4woN7BtImW0dU3nN/m.wW4qV4MWCu6XlcYT0yjQake0dml4W6.', NULL, NULL, 'zl4V8sXqLvh3JgGdSld0dQjIjqTCZTPWBDYanvCli9Nxz5JyqJdYRmXReXvz', NULL, 'user.png', '2025-09-21 00:52:11', '2025-09-21 00:52:11'),
(53, 'Ronald', 'García', 'ronaldjG_2', '54996815460', NULL, 'Brazil', '0', '0', '700', '0', '0', '0', 'garciariveroronald@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$6PmwEsAHsMFtQtvBQgOM1uqHbW/4bopDKsPwWC5qJxl2Y.0JPDQDa', NULL, NULL, NULL, NULL, 'user.png', '2025-09-25 19:11:48', '2025-09-25 20:10:15'),
(54, 'Selebaleng Louis', 'Lekoatsa', 'Selebaleng', '0603088070', NULL, 'South Africa', '0', '0', '1000', '0', '0', '0', 'louislekoatsa@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$AUh.ypR/HiWSmzIJObMsCOSGA4rINl4HgZ29APK2sX89jSePwiTNe', NULL, NULL, 'rmZqqHShg53HnckZXhTMZvQza7kSYSnQdoE6m8sON5h3oI5TRvM5EvsBDtMQ', NULL, 'user.png', '2025-09-26 15:57:30', '2025-09-26 15:57:30'),
(55, 'Kago', 'Kgagara', 'Kaygee', '75662901', NULL, 'Botswana', '0', '0', '1000', '0', '0', '0', 'kagokgagara9@gmail.com', NULL, 'active', NULL, 10, 'yes', '0', '$2y$10$RYs0Mehwa1BCuiX/CTOBOeYPi2NdW/y5tyMGBQwhH4G8Ke.StCdo.', NULL, NULL, NULL, NULL, 'user.png', '2025-10-06 13:54:34', '2025-10-06 13:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_bots`
--

CREATE TABLE `user_bots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bot_name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `time_left` varchar(255) NOT NULL,
  `profit` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_bots`
--

INSERT INTO `user_bots` (`id`, `user_id`, `bot_name`, `amount`, `transaction_id`, `time_left`, `profit`, `status`, `created_at`, `updated_at`) VALUES
(3, 16, 'Smart Bot', '500', 'sstFMzhKE2cZ', '1', '250', 'running', '2025-08-06 11:50:17', '2025-08-06 11:50:17'),
(4, 16, 'Smart Bot', '500', 'UXpvLknDwtwm', '1', '250', 'running', '2025-09-02 12:47:21', '2025-09-02 12:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_k_y_c_s`
--

CREATE TABLE `user_k_y_c_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `id_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `front` varchar(255) NOT NULL,
  `back` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_traders`
--

CREATE TABLE `user_traders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `copy_trading_id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `profit` varchar(255) DEFAULT NULL,
  `profit_margin` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_traders`
--

INSERT INTO `user_traders` (`id`, `user_id`, `copy_trading_id`, `amount`, `profit`, `profit_margin`, `status`, `created_at`, `updated_at`) VALUES
(11, 16, 3, '300', '168', NULL, 'won', '2025-08-31 16:09:51', '2025-08-31 16:19:48'),
(12, 16, 2, '500', '375', NULL, 'won', '2025-08-31 16:49:08', '2025-08-31 16:52:09'),
(13, 16, 5, '500', '35.5', NULL, 'won', '2025-09-02 12:46:23', '2025-09-02 12:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawhistory`
--

CREATE TABLE `withdrawhistory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `charge` varchar(255) DEFAULT NULL,
  `after_charge` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `receivable` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawmethods`
--

CREATE TABLE `withdrawmethods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method_name` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `processing_time` varchar(255) DEFAULT NULL,
  `min_amount` varchar(255) DEFAULT NULL,
  `max_amount` varchar(255) DEFAULT NULL,
  `fixed_charge` varchar(255) DEFAULT NULL,
  `percent_charge` varchar(255) DEFAULT NULL,
  `withdraw_instruction` varchar(255) DEFAULT NULL,
  `method_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `trx_id` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT 'Bitcoin',
  `amount` varchar(255) DEFAULT NULL,
  `wallet_address` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `payable` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `user_id`, `trx_id`, `username`, `method`, `amount`, `wallet_address`, `total`, `note`, `payable`, `status`, `created_at`, `updated_at`) VALUES
(1, 16, '#c5wdy8az6vtc5wdy8az6vt1756126113457', 'Nav Sandhu', 'Bitcoin', '4000', '1hgjdhgfvsjndkdmjdhhshjuhvbb', NULL, NULL, 'profit', 'approved', '2025-08-25 12:48:58', '2025-08-25 12:50:58'),
(2, 34, '#rq7qhbshp3drq7qhbshp3d1757246868359', 'Marwan Eid', 'Tether USD (USDT)', '25', 'TXXG3ZJEsNKgVdRTUYABKau4GyHZ5EDgjZ', NULL, NULL, 'profit', 'rejected', '2025-09-07 12:09:25', '2025-09-07 14:14:12'),
(3, 34, '#5f41ayis8al5f41ayis8al1757248860037', 'Marwan Eid', 'Bitcoin', '25', '0x370b242c862c50934c5db4917dd3ea0e73274530', NULL, NULL, 'profit', 'rejected', '2025-09-07 12:42:18', '2025-09-07 14:14:23'),
(4, 34, '#vv256hn5wdsvv256hn5wds1757249328943', 'Marwan Eid', 'Tether USD (USDT)', '20', '0x370b242c862c50934c5db4917dd3ea0e73274530', NULL, NULL, 'profit', 'rejected', '2025-09-07 12:48:57', '2025-09-07 14:14:36'),
(5, 34, '#u6ec4os13uau6ec4os13ua1757249547892', 'Marwan Eid', 'Tether USD (USDT)', '30', '0x370b242c862c50934c5db4917dd3ea0e73274530', NULL, NULL, 'profit', 'rejected', '2025-09-07 12:52:39', '2025-09-07 14:14:46'),
(6, 34, '#86e2kroefac86e2kroefac1757250001892', 'Marwan Eid', 'Tether USD (USDT)', '15', '0x370b242c862c50934c5db4917dd3ea0e73274530', NULL, NULL, 'profit', 'rejected', '2025-09-07 13:00:08', '2025-09-07 14:14:56'),
(7, 35, '#fq92sypy24jfq92sypy24j1757263276852', 'Maro Turbo', 'Ethereum', '25', '0x9173b92b76360a8cffc9b408bca4e4c1d7c690f7', NULL, NULL, 'profit', 'pending', '2025-09-07 16:41:32', '2025-09-07 16:41:32'),
(8, 16, '#ixfra2gxfyaixfra2gxfya1757315627687', 'Nav Sandhu', 'Bitcoin', '2000', '1hgjdhgfvsjndkdmjdhhshjuhvbb', NULL, NULL, 'profit', 'approved', '2025-09-08 07:13:56', '2025-09-08 07:15:31'),
(9, 46, '#xb50t9slkdoxb50t9slkdo1759015229958', 'Dave Saintil', 'Bitcoin', '50', '32dQBvz93juL45oVhgJhqr3xEgk4PQ1z7', NULL, NULL, 'profit', 'pending', '2025-09-27 23:24:10', '2025-09-27 23:24:10'),
(10, 16, '#v1be7ho8dpbv1be7ho8dpb1759514332999', 'Nav Sandhu', 'Bitcoin', '5000', '1hgjdhgfvsjndkdmjdhhshjuhvbb', NULL, NULL, 'profit', 'pending', '2025-10-03 17:59:15', '2025-10-03 17:59:15'),
(11, 16, '#my1ngap7hqmmy1ngap7hqm1759651915282', 'Nav Sandhu', 'Bitcoin', '50000', '1hgjdhgfvsjndkdmjdhhshjuhvbb', NULL, NULL, 'profit', 'rejected', '2025-10-05 08:12:08', '2025-10-05 08:13:43'),
(12, 16, '#j7x34ow8c7j7x34ow8c71759652055110', 'Nav Sandhu', 'Bitcoin', '50000', '1hgjdhgfvsjndkdmjdhhshjuhvbb', NULL, NULL, 'profit', 'pending', '2025-10-05 08:14:37', '2025-10-05 08:14:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bots`
--
ALTER TABLE `bots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copy_tradings`
--
ALTER TABLE `copy_tradings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_currencies`
--
ALTER TABLE `crypto_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demohistory`
--
ALTER TABLE `demohistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo_trades`
--
ALTER TABLE `demo_trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposithistory`
--
ALTER TABLE `deposithistory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deposithistory_trx_id_unique` (`trx_id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invests`
--
ALTER TABLE `invests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livehistory`
--
ALTER TABLE `livehistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manualgateway`
--
ALTER TABLE `manualgateway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade_settings`
--
ALTER TABLE `trade_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_referrer_id_foreign` (`referrer_id`);

--
-- Indexes for table `user_bots`
--
ALTER TABLE `user_bots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_bots_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_k_y_c_s`
--
ALTER TABLE `user_k_y_c_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_k_y_c_s_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_traders`
--
ALTER TABLE `user_traders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_traders_user_id_foreign` (`user_id`),
  ADD KEY `user_traders_copy_trading_id_foreign` (`copy_trading_id`);

--
-- Indexes for table `withdrawhistory`
--
ALTER TABLE `withdrawhistory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `withdrawhistory_trx_id_unique` (`trx_id`);

--
-- Indexes for table `withdrawmethods`
--
ALTER TABLE `withdrawmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bots`
--
ALTER TABLE `bots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `copy_tradings`
--
ALTER TABLE `copy_tradings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crypto_currencies`
--
ALTER TABLE `crypto_currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `demohistory`
--
ALTER TABLE `demohistory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demo_trades`
--
ALTER TABLE `demo_trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposithistory`
--
ALTER TABLE `deposithistory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `invests`
--
ALTER TABLE `invests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `livehistory`
--
ALTER TABLE `livehistory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manualgateway`
--
ALTER TABLE `manualgateway`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trade_settings`
--
ALTER TABLE `trade_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_bots`
--
ALTER TABLE `user_bots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_k_y_c_s`
--
ALTER TABLE `user_k_y_c_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_traders`
--
ALTER TABLE `user_traders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `withdrawhistory`
--
ALTER TABLE `withdrawhistory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdrawmethods`
--
ALTER TABLE `withdrawmethods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_referrer_id_foreign` FOREIGN KEY (`referrer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_bots`
--
ALTER TABLE `user_bots`
  ADD CONSTRAINT `user_bots_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_k_y_c_s`
--
ALTER TABLE `user_k_y_c_s`
  ADD CONSTRAINT `user_k_y_c_s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_traders`
--
ALTER TABLE `user_traders`
  ADD CONSTRAINT `user_traders_copy_trading_id_foreign` FOREIGN KEY (`copy_trading_id`) REFERENCES `copy_tradings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_traders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
