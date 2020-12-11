-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 02:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_chicken`
--

-- --------------------------------------------------------

--
-- Table structure for table `apidatas`
--

CREATE TABLE `apidatas` (
  `id` int(11) NOT NULL,
  `branch_id` text NOT NULL,
  `machine_id` text NOT NULL,
  `port` text NOT NULL,
  `total_weight` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apidatas`
--

INSERT INTO `apidatas` (`id`, `branch_id`, `machine_id`, `port`, `total_weight`) VALUES
(1, 'fsdfsafd', 'fsdfa', '23', '2345');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Srirampur', 'Mancherial', '0', '2020-12-01 04:07:14', '2020-12-01 04:07:14'),
(2, 'Madhapur', 'Hyderabad', '0', '2020-12-01 05:59:51', '2020-12-01 05:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2020-12-11 05:40:36', '2020-12-11 05:40:36'),
(2, 1, '2020-12-11 05:40:39', '2020-12-11 05:40:39'),
(3, 12, '2020-12-11 05:40:59', '2020-12-11 05:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CHICKEN', '1', '2020-11-17 02:23:39', '2020-11-24 07:26:57'),
(2, 'MUTTON', '1', '2020-11-17 02:23:50', '2020-11-24 07:27:07'),
(5, 'FISH', '0', '2020-12-07 23:52:03', '2020-12-07 23:52:03'),
(6, 'OTHERS', '1', '2020-12-07 23:52:21', '2020-12-08 03:12:05'),
(7, 'COMBO', '0', '2020-12-08 04:32:37', '2020-12-08 04:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `franchisee_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exformrates`
--

CREATE TABLE `exformrates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `cur_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exformrates`
--

INSERT INTO `exformrates` (`id`, `type`, `rate`, `cur_date`, `created_at`, `updated_at`) VALUES
(7, 'MUTTON', '800.00', '2020-12-08', '2020-12-08 01:20:59', '2020-12-08 01:20:59'),
(8, 'FISH', '400.00', '2020-12-08', '2020-12-08 01:21:08', '2020-12-08 01:21:08'),
(9, 'CHICKEN', '200.00', '2020-12-10', '2020-12-10 00:20:32', '2020-12-10 00:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `franchisee_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cur_date` date NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `in_words` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `franchisees`
--

CREATE TABLE `franchisees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addhar_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `franchisees`
--

INSERT INTO `franchisees` (`id`, `name`, `addhar_no`, `ref_id`, `account_no`, `mobile`, `city`, `start_date`, `remarks`, `address`, `user_name`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Vishal', '132456789', 'FRN002', 'asdfj', '13245679', '2', '2020-12-01', 'asdfjh', '', NULL, NULL, '2020-12-01 06:00:18', '2020-12-01 06:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cur_date` date NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `in_words` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `liveamounts`
--

CREATE TABLE `liveamounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(11) UNSIGNED NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `ratedate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `liveamounts`
--

INSERT INTO `liveamounts` (`id`, `category_id`, `product_id`, `branch_id`, `rate`, `ratedate`, `created_at`, `updated_at`) VALUES
(11, 2, 12, 2, '800.00', '2020-12-11', '2020-12-11 05:35:12', '2020-12-11 05:35:12'),
(12, 1, 2, 2, '250.00', '2020-12-11', '2020-12-11 05:37:49', '2020-12-11 05:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_04_104852_create_customers_table', 1),
(5, '2020_11_06_120602_create_categories_table', 1),
(6, '2020_11_07_092138_create_roles_table', 1),
(7, '2020_11_07_095114_create_branches_table', 1),
(8, '2020_11_07_101757_create_products_table', 1),
(9, '2020_11_09_124529_create_franchisees_table', 1),
(10, '2020_11_13_102911_create_stocks_table', 1),
(11, '2020_11_17_071537_create_liveamounts_table', 1),
(12, '2020_11_17_071608_create_exformrates_table', 1),
(13, '2020_11_17_103641_create_purchaseorders_table', 2),
(14, '2020_11_21_052025_create_carts_table', 3),
(15, '2020_11_23_045927_create_orders_table', 4),
(16, '2020_11_23_174308_create_orderitems_table', 4),
(17, '2020_11_25_091611_create_expenses_table', 5),
(18, '2020_11_25_112745_create_incomes_table', 6),
(19, '2020_12_11_055259_create_paymentmethods_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `item_name` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` decimal(10,2) NOT NULL,
  `cur_rate` decimal(10,2) NOT NULL,
  `rate_array` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `order_id`, `user_id`, `item_name`, `qty`, `cur_rate`, `rate_array`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2', '10000.00', '250.00', '2500.00', NULL, NULL),
(2, 2, 3, '13', '10000.00', '400.00', '4000.00', NULL, NULL),
(3, 3, 3, '2', '5000.00', '250.00', '1250.00', NULL, NULL),
(4, 3, 3, '12', '1000.00', '800.00', '800.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cust_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `cus_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cus_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `cus_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `total_items` bigint(20) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `tax` bigint(20) NOT NULL,
  `grandtotal` decimal(10,2) NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `card_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amt` decimal(10,2) NOT NULL,
  `return_change` decimal(10,2) NOT NULL DEFAULT '0.00',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `frans_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cust_id`, `cus_name`, `cus_email`, `cus_mobile`, `total_items`, `subtotal`, `discount`, `tax`, `grandtotal`, `payment_method`, `card_number`, `paid_amt`, `return_change`, `user_id`, `frans_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'sankar', 'NULL', '7661910404', 1, '2500.00', '500.00', 125, '2125.00', 'CASH', NULL, '2125.00', '0.00', 3, 0, '2020-12-10 06:45:16', '2020-12-10 06:45:16'),
(2, 0, 'sankar', 'NULL', '7661910404', 1, '4000.00', '0.00', 0, '4000.00', 'CASH', NULL, '4000.00', '0.00', 3, 0, '2020-12-10 06:51:30', '2020-12-10 06:51:30'),
(3, 0, 'sankar', 'NULL', '7661910404', 2, '2050.00', '0.00', 0, '2050.00', 'CASH', NULL, '2050.00', '0.00', 3, 0, '2020-12-11 05:41:37', '2020-12-11 05:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethods`
--

CREATE TABLE `paymentmethods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paymentmethods`
--

INSERT INTO `paymentmethods` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Debit', '0', '2020-12-11 00:51:12', '2020-12-11 01:30:44'),
(2, 'CASH', '1', '2020-12-11 01:14:33', '2020-12-11 01:14:33'),
(3, 'VISA', '1', '2020-12-11 01:14:53', '2020-12-11 01:14:53'),
(4, 'CREDIT', '1', '2020-12-11 01:15:06', '2020-12-11 01:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` bigint(20) DEFAULT NULL,
  `amount` decimal(5,2) DEFAULT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_img`, `qty`, `amount`, `branch_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'LIVE', 'LIVEproduct1606548864.png', NULL, NULL, NULL, NULL, '2020-11-26 00:44:55', '2020-11-28 02:04:24'),
(2, 1, 'DRESSED', 'DRESSEDproduct1606548892.png', NULL, NULL, NULL, NULL, '2020-11-26 00:45:05', '2020-11-28 02:04:52'),
(3, 1, 'LIVER', 'LIVERproduct1606548916.png', NULL, NULL, NULL, NULL, '2020-11-26 01:00:34', '2020-11-28 02:05:16'),
(8, 1, 'LOLLIPOPS', 'LOLLIPOPSproduct1606548986.jpg', NULL, NULL, NULL, NULL, '2020-11-28 02:06:26', '2020-11-28 02:06:26'),
(9, 1, 'BONELESS', 'BONELESSproduct1606549033.png', NULL, NULL, NULL, NULL, '2020-11-28 02:07:13', '2020-11-28 02:07:13'),
(10, 1, 'BREAST&LEGS', 'BREAST&LEGSproduct1606549059.png', NULL, NULL, NULL, NULL, '2020-11-28 02:07:39', '2020-11-28 02:07:39'),
(11, 1, 'DRUMSTICKS', 'DRUMSTICKSproduct1606549089.png', NULL, NULL, NULL, NULL, '2020-11-28 02:08:09', '2020-11-28 02:08:09'),
(12, 2, 'DRESSED', 'DRESSEDproduct1607332793.jpg', NULL, NULL, NULL, NULL, '2020-12-07 03:49:54', '2020-12-07 03:49:54'),
(13, 5, 'LIVE', 'LIVEproduct1607405188.png', NULL, NULL, NULL, NULL, '2020-12-07 23:56:28', '2020-12-07 23:56:28'),
(14, 6, 'milk', 'milkproduct1607416718.png', NULL, NULL, NULL, NULL, '2020-12-08 03:08:38', '2020-12-08 03:08:38'),
(15, 6, 'EGGS', 'EGGSproduct1607416966.png', NULL, NULL, NULL, NULL, '2020-12-08 03:12:46', '2020-12-08 03:12:46'),
(16, 7, 'COMBO 2- 500gm Ch+250gm Mut', 'COMBO 2- 500gm Ch+250gm Mutproduct1607421805.jpg', NULL, NULL, NULL, NULL, '2020-12-08 04:33:25', '2020-12-08 04:33:25'),
(18, 7, 'Combo-3-500gm ch + 6 eggs', 'Combo-3-500gm ch + 6 eggsproduct1607421908.png', NULL, NULL, NULL, NULL, '2020-12-08 04:35:08', '2020-12-08 04:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorders`
--

CREATE TABLE `purchaseorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `franchisee_id` int(10) UNSIGNED NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `sup_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pur_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchaseorders`
--

INSERT INTO `purchaseorders` (`id`, `branch_id`, `franchisee_id`, `qty`, `rate`, `total_amount`, `sup_name`, `sup_mobile`, `pur_date`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '10.00', '200.00', '2000.00', 'sankar', '7661910404', '2020-12-11', '2020-12-11 01:49:03', '2020-12-11 01:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'STOREMANAGER', '2020-11-24 06:28:01', '2020-11-25 09:00:59'),
(2, 'FRANCHISEEOWNER', '2020-11-24 06:28:14', '2020-11-25 09:02:26'),
(4, 'SUPERADMIN', '2020-11-25 09:00:41', '2020-11-25 09:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `stocklists`
--

CREATE TABLE `stocklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `franchisee_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocklists`
--

INSERT INTO `stocklists` (`id`, `category_id`, `product_id`, `qty`, `rate`, `amount`, `franchisee_id`, `created_at`, `updated_at`) VALUES
(5, 1, 1, '50.00', '200.00', '10000.00', 2, '2020-12-11 05:34:03', '2020-12-11 05:34:03'),
(6, 2, 12, '5.00', '800.00', '4000.00', 2, '2020-12-11 05:35:32', '2020-12-11 05:35:32'),
(7, 1, 2, '40.00', '250.00', '10000.00', 2, '2020-12-11 05:39:38', '2020-12-11 05:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `rate` decimal(5,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `franchisee_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `category_id`, `product_id`, `qty`, `rate`, `amount`, `franchisee_id`, `created_at`, `updated_at`) VALUES
(4, 1, 1, '10.00', '200.00', '10000.00', 2, '2020-12-11 05:34:03', '2020-12-11 05:39:38'),
(5, 2, 12, '4.00', '800.00', '4000.00', 2, '2020-12-11 05:35:32', '2020-12-11 05:41:37'),
(6, 1, 2, '35.00', '250.00', '10000.00', 2, '2020-12-11 05:39:38', '2020-12-11 05:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frans_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `role_id`, `frans_id`, `user_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'sankar', 'sankar0064@gmail.com', '7661910404', NULL, '$2y$10$pzZZWP2AuXuRsoR6gM/EquetILbkrE/cvbXB4eRpmJcheqMy5vrIO', 'SUPERADMIN', 0, NULL, '1', NULL, '2020-11-25 23:17:38', '2020-11-25 23:17:38'),
(10, 'vishal', 'vishal@gmail.com', '132456789', NULL, '$2y$10$ZdaZS7fiYTD0GnhFRXoRXusGLeBUxxQjmlcS8SjQeLQYxACGitIOi', 'FRANCHISEEOWNER', 2, NULL, '1', NULL, '2020-12-01 06:00:49', '2020-12-01 06:00:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apidatas`
--
ALTER TABLE `apidatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exformrates`
--
ALTER TABLE `exformrates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `franchisees`
--
ALTER TABLE `franchisees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liveamounts`
--
ALTER TABLE `liveamounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
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
-- Indexes for table `paymentmethods`
--
ALTER TABLE `paymentmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseorders`
--
ALTER TABLE `purchaseorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocklists`
--
ALTER TABLE `stocklists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apidatas`
--
ALTER TABLE `apidatas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exformrates`
--
ALTER TABLE `exformrates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `franchisees`
--
ALTER TABLE `franchisees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liveamounts`
--
ALTER TABLE `liveamounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paymentmethods`
--
ALTER TABLE `paymentmethods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `purchaseorders`
--
ALTER TABLE `purchaseorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stocklists`
--
ALTER TABLE `stocklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
