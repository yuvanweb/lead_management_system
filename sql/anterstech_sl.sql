-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 10.123.0.91:3306
-- Generation Time: Dec 07, 2024 at 06:53 AM
-- Server version: 8.0.22
-- PHP Version: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anterstech_sl`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `aadhar_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pf_joining_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pf_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `est_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `user_id`, `aadhar_number`, `pan_number`, `bank_number`, `account_number`, `ifsc_number`, `pf_joining_date`, `pf_number`, `est_number`, `created_at`, `updated_at`) VALUES
(1, 3, '2341523453', 'APK34RT', 'Indian Bank', '35467899', '34543534', '2024-10-07', '345345345', '565465465', '2024-10-07 21:53:44', '2024-10-07 21:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `c_id`, `brand_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-PLANT-1', 'MIN', 0, '2024-09-24 07:20:16', '2024-12-03 12:06:05'),
(2, 'SARA-PLANT-2', 'MAX', 0, '2024-09-24 07:20:16', '2024-12-03 12:12:10'),
(3, 'SARA-PLANT-3', 'Steel', 0, '2024-09-24 07:20:16', '2024-12-03 12:12:13'),
(4, 'SARA-PLANT-4', 'Radiance', 1, '2024-09-24 07:20:16', '2024-09-24 07:22:29'),
(5, 'SARA-PLANT-5', 'Colouron Plus', 1, '2024-09-24 07:20:16', '2024-09-24 07:22:29'),
(6, 'SARA-PLANT-6', 'Pragathi', 1, '2024-12-03 12:12:30', '2024-12-03 12:12:30'),
(7, 'SARA-PLANT-7', 'Alu Colour', 1, '2024-12-03 12:12:42', '2024-12-03 12:12:42'),
(8, 'SARA-PLANT-8', 'Silveron Plus', 1, '2024-12-03 12:13:11', '2024-12-03 12:13:11'),
(9, 'SARA-PLANT-9', 'Steel Ltd', 1, '2024-12-03 12:13:22', '2024-12-03 12:13:22'),
(10, 'SARA-PLANT-10', 'NA', 1, '2024-12-03 12:14:22', '2024-12-03 12:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_id`, `categorie_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-CAT-1', 'CAT ON', 0, '2024-09-30 09:59:57', '2024-12-03 12:15:00'),
(2, 'SARA-CAT-2', 'Lifts and Elevators', 1, '2024-09-30 09:59:57', '2024-12-03 12:15:13'),
(3, 'SARA-CAT-3', 'Appliance', 1, '2024-12-04 06:37:49', '2024-12-04 06:37:49'),
(4, 'SARA-CAT-4', 'False ceiling', 1, '2024-12-04 06:38:03', '2024-12-04 06:38:03'),
(5, 'SARA-CAT-5', 'Other OEM - Large', 1, '2024-12-04 06:38:20', '2024-12-04 06:38:20'),
(6, 'SARA-CAT-6', 'Other OEM - Medium and small', 1, '2024-12-04 06:38:37', '2024-12-04 06:38:37'),
(7, 'SARA-CAT-7', 'Retail', 1, '2024-12-04 06:38:47', '2024-12-04 06:38:47'),
(8, 'SARA-CAT-8', 'Ducting and HVAC', 1, '2024-12-04 06:38:58', '2024-12-04 06:38:58'),
(9, 'SARA-CAT-9', 'PEB', 1, '2024-12-04 06:39:09', '2024-12-04 06:39:09'),
(10, 'SARA-CAT-10', 'Fabricators and contractors', 1, '2024-12-04 06:39:26', '2024-12-04 06:39:26'),
(11, 'SARA-CAT-11', 'Profilers', 1, '2024-12-04 06:39:43', '2024-12-04 06:39:43'),
(12, 'SARA-CAT-12', 'End customers', 1, '2024-12-04 06:39:52', '2024-12-04 06:39:52'),
(13, 'SARA-CAT-13', 'End customers', 0, '2024-12-04 06:59:55', '2024-12-04 07:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `c_id`, `color_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-PLANT-1', 'TCRMPLIGHTBLUE', 1, '2024-09-24 05:38:13', '2024-12-04 07:50:22'),
(2, 'SARA-PLANT-2', 'TCRMPOFFWHITE', 1, '2024-09-24 05:38:13', '2024-12-04 07:50:42'),
(3, 'SARA-PLANT-3', 'TCRMPNUVABLUE', 1, '2024-09-24 05:38:13', '2024-12-04 07:50:59'),
(4, 'SARA-PLANT-4', 'TCRMPGRAPHITEGREY', 1, '2024-12-04 07:51:17', '2024-12-04 07:51:17'),
(5, 'SARA-PLANT-5', 'TCRMPTAURUSBLUE', 1, '2024-12-04 07:52:57', '2024-12-04 07:52:57'),
(6, 'SARA-PLANT-6', 'TCRMPTURQUOISEBLUE', 1, '2024-12-04 07:53:50', '2024-12-04 07:53:50'),
(7, 'SARA-PLANT-7', 'TCRMPCFGGREEN-2', 1, '2024-12-04 07:54:26', '2024-12-04 07:54:26'),
(8, 'SARA-PLANT-8', 'TCRMPMISTGREEN', 1, '2024-12-04 07:55:06', '2024-12-04 07:55:06'),
(9, 'SARA-PLANT-9', 'TCRMPBRICKRED', 1, '2024-12-04 07:55:39', '2024-12-04 07:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_code` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci TABLESPACE `anterstech_sl`;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `c_id`, `company_name`, `company_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-COMP-1', 'Saro', 'SARO', 1, '2024-09-25 06:58:54', '2024-10-01 00:52:07'),
(2, 'SARA-COMP-2', 'SAR', 'SAR', 1, '2024-10-01 00:30:32', '2024-10-01 00:30:32'),
(3, 'SARA-COMP-3', 'SPSN', 'SPSN', 1, '2024-10-01 00:30:32', '2024-10-01 00:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gst_number` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_contact_no` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_contact_no_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_contact_no_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_categoty` int NOT NULL DEFAULT '0',
  `customer_unique_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `converted_lead` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `gst_number`, `customer_email`, `customer_contact_no`, `customer_contact_no_2`, `customer_name_2`, `customer_contact_no_3`, `customer_name_3`, `customer_categoty`, `customer_unique_code`, `converted_lead`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fujitec', 'DFSGFSD4534GFFH', 'tesla@gmail.com', '8989895656', '4355', 'erer', '56546', '565', 2, 'SARO-CAT-4', 2, 1, '2024-09-30 04:55:14', '2024-11-11 00:50:21'),
(2, 'Teja Projects', '09AAACH7409R1ZZ', 'jagan@gmail.com', '7878787878', '3534', 'sdsa', '435', 'ddfg', 1, 'SARO-CAT-1', 2, 1, '2024-09-30 06:01:23', '2024-10-02 21:22:53'),
(3, 'Irfana Steel', '29AAACH7409R1ZX', 'ja@gmail.com', '9898989898', '9898989898', 'tem', '9898989898', 'tem', 1, 'SARO-CAT-2', 0, 1, '2024-10-02 07:07:13', '2024-10-02 07:07:13'),
(4, 'Jhonson', '36AAACH7409R1Z2', 'Jhonson@gmail.com', '9898989898', '9898989898', 'tem', '9898989898', 'tem', 1, 'SARO-CAT-3', 0, 1, '2024-10-02 07:07:13', '2024-10-02 07:07:13'),
(5, 'LCP Building products', '33AAACH7409R1Z8', 'NA', '7823979992', NULL, NULL, NULL, NULL, 0, 'SARA-CUS-5', 5, 1, '2024-11-27 12:11:03', '2024-11-27 12:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `c_id`, `form_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-FORM-1', 'CTL', 1, '2024-09-24 07:38:33', '2024-09-24 08:03:16'),
(2, 'SARA-FORM-2', 'Profile sheet', 1, '2024-09-24 07:38:33', '2024-09-24 08:03:16'),
(3, 'SARA-FORM-3', 'Blanks', 1, '2024-09-24 07:38:33', '2024-09-24 08:03:16'),
(4, 'SARA-FORM-4', 'Slit Coil', 1, '2024-12-04 08:56:42', '2024-12-04 08:56:42'),
(5, 'SARA-FORM-5', 'Full Coil', 1, '2024-12-04 08:56:57', '2024-12-04 08:56:57'),
(6, 'SARA-FORM-6', 'C Purlin', 1, '2024-12-04 08:57:09', '2024-12-04 08:57:09'),
(7, 'SARA-FORM-7', 'Z Purlin', 1, '2024-12-04 08:57:16', '2024-12-04 08:57:16'),
(8, 'SARA-FORM-8', 'Deck Sheet', 1, '2024-12-04 08:57:32', '2024-12-04 08:57:32'),
(9, 'SARA-FORM-9', 'Accessories', 1, '2024-12-04 08:58:13', '2024-12-04 08:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint UNSIGNED NOT NULL,
  `holiday` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_holiday` date DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `holiday`, `date_of_holiday`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New Year', '2024-01-01', 1, '2024-10-07 23:33:29', '2024-10-07 23:33:29'),
(2, 'Pongal', '2024-01-15', 1, '2024-10-08 00:10:21', '2024-10-08 00:10:21'),
(3, 'Republic day', '2024-01-26', 1, '2024-10-08 00:11:23', '2024-10-08 00:11:23'),
(4, 'Cristmax', '2023-12-25', 1, '2024-10-08 00:11:51', '2024-10-08 00:11:51'),
(5, 'Gandhi Jayanthi', '2024-10-02', 1, '2024-10-08 00:13:38', '2024-10-08 00:13:38'),
(6, 'Diwali', '2024-10-31', 1, '2024-10-08 00:14:29', '2024-10-08 00:14:29'),
(7, NULL, NULL, 1, '2024-10-09 05:18:36', '2024-10-09 05:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint UNSIGNED NOT NULL,
  `date_enquires` date DEFAULT NULL,
  `lead_created_by_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_contact_no` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_enquired` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_quoted` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lead_source` int NOT NULL,
  `lead_status` int NOT NULL DEFAULT '1',
  `reason` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci TABLESPACE `anterstech_sl`;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `date_enquires`, `lead_created_by_name`, `customer_name`, `customer_email`, `customer_contact_no`, `item_enquired`, `price_quoted`, `qty`, `lead_source`, `lead_status`, `reason`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-09-29', 'Yuva', 'raj', 'raj@gmail.com', '7878786767', 'test one', '34.5', '45.6', 1, 3, 'Test', 0, '2024-09-27 20:48:07', '2024-11-27 12:03:10'),
(2, '2024-09-29', 'Ramesh', 'Tesla', 'tesla@gmail.com', '8989895656', '56', '456', '54', 1, 2, NULL, 0, '2024-09-27 21:09:09', '2024-11-27 12:03:23'),
(3, '2024-10-15', 'Test', 'Jagan', 'jagan@gmail.com', '7878787878', 'XXX XXXX xxxxx', '400', '45', 1, 2, NULL, 0, '2024-09-30 06:00:19', '2024-11-27 12:03:28'),
(4, '2024-10-21', 'Teat 2', 'CUS Test 2', 'cus2@gmail.com', '9898979796', 'test', '56765', '10', 2, 1, NULL, 0, '2024-10-20 23:43:22', '2024-11-27 12:03:34'),
(5, '2024-11-27', 'Abhinandh', 'LCP Building products', 'NA', '7823979992', 'GPC - 1.00 x 1220', '63,500', '10', 1, 2, NULL, 1, '2024-11-27 11:46:40', '2024-11-27 12:11:03'),
(6, '2024-11-27', 'Srihari', 'XYZ', 'NA', '9884633376', 'PPGL - 0.47 SB', '360', '1000', 4, 3, 'Price is high', 1, '2024-11-27 12:50:07', '2024-11-27 12:50:24'),
(7, '2024-11-27', 'Kali', 'Steel World', 'NA', '9884633376', 'GPS - 1.2 x 1500 x 3050', '64000', '2', 1, 1, NULL, 1, '2024-11-27 12:52:47', '2024-11-27 12:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `lead_sources`
--

CREATE TABLE `lead_sources` (
  `id` bigint UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_source_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lead_sources`
--

INSERT INTO `lead_sources` (`id`, `c_id`, `l_source_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-UNIT-1', 'Existing customer', 1, '2024-09-24 08:57:54', '2024-11-27 12:04:02'),
(2, 'SARA-UNIT-2', 'NEW CUSTOMER', 0, '2024-10-20 23:41:44', '2024-11-27 05:19:28'),
(3, 'SARA-UNIT-3', 'Indiamart', 1, '2024-11-27 05:19:39', '2024-11-27 05:19:39'),
(4, 'SARA-UNIT-4', 'Email', 1, '2024-11-27 12:05:55', '2024-11-27 12:05:55'),
(5, 'SARA-UNIT-5', 'Phone', 1, '2024-11-27 12:06:04', '2024-11-27 12:06:04'),
(6, 'SARA-UNIT-6', 'Justdial', 1, '2024-11-27 12:06:17', '2024-11-27 12:06:17'),
(7, 'SARA-UNIT-7', 'E-commerce platform', 1, '2024-11-27 12:10:12', '2024-11-27 12:10:12'),
(8, 'SARA-UNIT-8', 'Reference', 1, '2024-11-27 12:10:36', '2024-11-27 12:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `loan_dues`
--

CREATE TABLE `loan_dues` (
  `id` bigint UNSIGNED NOT NULL,
  `loan_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `amount` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` int DEFAULT NULL,
  `year` int DEFAULT NULL,
  `payslip_id` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_dues`
--

INSERT INTO `loan_dues` (`id`, `loan_id`, `user_id`, `amount`, `month`, `year`, `payslip_id`, `status`, `created_at`, `updated_at`) VALUES
(13, 3, 3, '5000.00', 3, 2025, NULL, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(12, 3, 3, '5000.00', 2, 2025, NULL, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(10, 3, 3, '5000.00', 12, 2024, NULL, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(11, 3, 3, '5000.00', 1, 2025, NULL, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(14, 3, 3, '5000.00', 4, 2025, NULL, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(15, 3, 3, '5000.00', 5, 2025, NULL, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(16, 3, 3, '5000.00', 6, 2025, NULL, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(17, 3, 3, '5000.00', 7, 2025, NULL, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(18, 3, 3, '5000.00', 8, 2025, NULL, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(19, 3, 3, '5000.00', 9, 2025, NULL, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(20, 4, 4, '4000.00', 11, 2024, 10, 1, '2024-11-20 11:10:08', '2024-11-20 11:21:15'),
(21, 4, 4, '4000.00', 1, 2025, NULL, 1, '2024-11-20 11:10:08', '2024-11-20 11:10:08'),
(22, 4, 4, '4000.00', 2, 2025, NULL, 1, '2024-11-20 11:10:08', '2024-11-20 11:10:08'),
(23, 4, 4, '4000.00', 3, 2025, NULL, 1, '2024-11-20 11:10:08', '2024-11-20 11:10:08'),
(24, 4, 4, '4000.00', 4, 2025, NULL, 1, '2024-11-20 11:10:08', '2024-11-20 11:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `loan_masters`
--

CREATE TABLE `loan_masters` (
  `id` bigint UNSIGNED NOT NULL,
  `loan_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT NULL,
  `amount` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_month` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emi_per_monthly` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loan_start_date` date DEFAULT NULL,
  `loan_end_date` date DEFAULT NULL,
  `payment_completed` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_masters`
--

INSERT INTO `loan_masters` (`id`, `loan_name`, `user_id`, `amount`, `due_month`, `emi_per_monthly`, `loan_start_date`, `loan_end_date`, `payment_completed`, `status`, `created_at`, `updated_at`) VALUES
(3, 'HOUSING Loan', 3, '50000', '10', '5000.00', '2024-12-20', '2025-10-20', 0, 1, '2024-11-20 05:01:45', '2024-11-20 05:01:45'),
(4, 'Bike', 4, '20000', '5', '4000.00', '2024-12-20', '2025-05-20', 0, 1, '2024-11-20 11:10:08', '2024-11-20 11:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `c_id`, `location_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-CAT-1', 'Chenna', 0, '2024-09-30 23:53:03', '2024-10-22 02:22:37'),
(2, 'SARA-CAT-2', 'PGR', 1, '2024-10-05 01:55:09', '2024-12-04 09:00:21'),
(3, 'SARA-CAT-3', 'MER', 1, '2024-12-04 09:00:28', '2024-12-04 09:00:28'),
(4, 'SARA-CAT-4', 'B24', 1, '2024-12-04 09:00:43', '2024-12-04 09:00:43'),
(5, 'SARA-CAT-5', 'G12', 1, '2024-12-04 09:00:50', '2024-12-04 09:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2024_09_23_062650_create_plants_table', 2),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2024_09_23_080816_create_companies_table', 4),
(7, '2014_10_12_000000_create_users_table', 2),
(10, '2024_09_23_075953_create_colors_table', 3),
(11, '2024_09_23_080011_create_products_table', 3),
(12, '2024_09_23_080035_create_brands_table', 3),
(13, '2024_09_23_080053_create_units_table', 3),
(14, '2024_09_23_080114_create_forms_table', 3),
(15, '2024_09_23_080157_create_lead_sources_table', 3),
(17, '2024_09_25_051239_create_modules_table', 5),
(18, '2024_09_25_052653_create_roles_table', 6),
(19, '2024_09_27_090655_create_leads_table', 7),
(20, '2024_09_30_092751_create_customers_table', 8),
(21, '2024_09_30_131917_create_categories_table', 9),
(22, '2024_09_30_132726_create_locations_table', 9),
(23, '2024_10_03_025517_create_sales_table', 10),
(24, '2024_10_04_124247_create_purchases_table', 11),
(25, '2024_10_07_072328_create_personal_details_table', 12),
(26, '2024_10_07_074109_create_bank_details_table', 13),
(27, '2024_10_08_043830_create_holidays_table', 14),
(28, '2024_10_08_083908_create_staff_attendances_table', 15),
(29, '2024_10_10_100546_create_staff_monthly_leaves_table', 16),
(30, '2024_10_14_031014_create_staff_pay_scales_table', 17),
(31, '2024_10_15_045440_create_staff_pay_slips_table', 18),
(32, '2024_10_22_070011_create_types_table', 19),
(33, '2024_11_19_061041_create_loan_masters_table', 20),
(34, '2024_11_19_071113_create_loan_dues_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint UNSIGNED NOT NULL,
  `module_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `field_name` varchar(130) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_name`, `status`, `field_name`, `created_at`, `updated_at`) VALUES
(1, 'Role Management', 1, 'role_management', NULL, NULL),
(2, 'User Management', 1, 'user_management', NULL, NULL),
(3, 'Lead Management', 1, 'lead_management', NULL, NULL),
(4, 'Sales Management', 1, 'sales_management', NULL, NULL),
(5, 'Purchase Management', 1, 'purchase_management', NULL, NULL),
(6, 'Hr Management', 1, 'hr_management', NULL, NULL),
(7, 'Customer Management', 1, 'customer_management', NULL, NULL),
(8, 'Master Management', 1, 'master_management', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `personal_mail_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_mobile_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_mobile_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `shift_detailes` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `user_id`, `personal_mail_id`, `personal_mobile_number`, `emergency_mobile_number`, `date_of_birth`, `shift_detailes`, `gender`, `blood_group`, `father_name`, `spouse_name`, `address`, `created_at`, `updated_at`) VALUES
(1, 3, 'yuvaraj@istudiotech.in', '9898787867', '9570040033', '2003-08-05', 'Day', 'Male', 'A1', 'Selvam', 'Poovizhi', 'Thanjavur', '2024-10-07 21:37:55', '2024-10-07 21:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` bigint UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `plant_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `c_id`, `plant_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-PLANT-1', 'VJN', 1, '2024-09-24 04:09:08', '2024-09-24 04:19:19'),
(2, 'SARA-PLANT-2', 'KLM', 1, '2024-09-24 04:19:41', '2024-09-24 04:19:41'),
(3, 'SARA-PLANT-3', 'VSD', 1, '2024-09-24 04:19:41', '2024-09-24 04:19:41'),
(4, 'SARA-PLANT-4', 'KLM', 0, '2024-09-24 04:19:41', '2024-12-04 09:10:35'),
(5, 'SARA-PLANT-5', 'TAR', 1, '2024-12-04 09:10:44', '2024-12-04 09:10:44'),
(6, 'SARA-PLANT-6', 'BPSL', 1, '2024-12-04 09:12:01', '2024-12-04 09:12:01'),
(7, 'SARA-PLANT-7', 'KHO', 1, '2024-12-04 09:12:33', '2024-12-04 09:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `c_id`, `product_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-PRODUCT-1', 'GP Coil', 0, '2024-09-24 07:54:53', '2024-12-04 09:14:51'),
(2, 'SARA-PRODUCT-2', 'PPGL Coil', 1, '2024-09-24 07:54:53', '2024-09-24 08:32:50'),
(3, 'SARA-PRODUCT-3', 'ZM COILS', 1, '2024-09-24 07:54:53', '2024-09-24 08:32:50'),
(4, 'SARA-PRODUCT-4', 'GP (Soft) Coil', 1, '2024-09-24 07:54:53', '2024-12-04 09:13:00'),
(5, 'SARA-PRODUCT-5', 'Galvalume Coil', 1, '2024-09-24 07:54:53', '2024-09-24 08:32:50'),
(6, 'SARA-PRODUCT-6', 'PPGI Coil', 1, '2024-12-04 09:17:27', '2024-12-04 09:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint UNSIGNED NOT NULL,
  `purchase_date` date NOT NULL,
  `company` int NOT NULL,
  `plant` int NOT NULL,
  `unit` int NOT NULL,
  `product` int NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` int NOT NULL,
  `qnt` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `purchase_date`, `company`, `plant`, `unit`, `product`, `type`, `brand`, `qnt`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-10-18', 2, 1, 1, 1, '2', 1, '24', 1, '2024-10-05 00:25:05', '2024-10-05 01:32:22'),
(2, '2024-10-23', 2, 1, 1, 1, '1', 1, '10', 1, '2024-10-22 02:38:32', '2024-10-22 02:38:32'),
(3, '2024-10-23', 1, 1, 1, 3, '2', 1, '45', 1, '2024-10-24 01:40:56', '2024-10-24 01:40:56'),
(4, '2024-08-07', 1, 1, 1, 4, '1', 3, '11.374', 1, '2024-08-06 18:30:00', '2024-08-06 18:30:00'),
(5, '2024-08-07', 1, 1, 1, 4, '1', 3, '12.062', 1, '2024-08-06 18:30:00', '2024-08-06 18:30:00'),
(6, '2024-08-07', 1, 1, 1, 4, '1', 3, '13.846', 1, '2024-08-06 18:30:00', '2024-08-06 18:30:00'),
(7, '2024-07-30', 1, 4, 1, 2, '5', 3, '4.315', 1, '2024-07-29 18:30:00', '2024-07-29 18:30:00'),
(8, '2024-07-30', 1, 4, 1, 2, '5', 3, '4.35', 1, '2024-07-29 18:30:00', '2024-07-29 18:30:00'),
(9, '2024-07-30', 1, 4, 1, 2, '5', 5, '4.565', 1, '2024-07-29 18:30:00', '2024-07-29 18:30:00'),
(10, '2024-07-30', 1, 4, 1, 2, '5', 5, '4.04', 1, '2024-07-29 18:30:00', '2024-07-29 18:30:00'),
(11, '2024-08-06', 3, 1, 1, 4, '4', 4, '9.604', 1, '2024-08-05 18:30:00', '2024-08-05 18:30:00'),
(12, '2024-08-06', 3, 1, 1, 4, '4', 4, '9.998', 1, '2024-08-05 18:30:00', '2024-08-05 18:30:00'),
(13, '2024-08-06', 3, 1, 2, 4, '4', 4, '9.026', 1, '2024-08-05 18:30:00', '2024-08-05 18:30:00'),
(14, '2024-08-06', 3, 1, 2, 4, '4', 4, '9.594', 1, '2024-08-05 18:30:00', '2024-08-05 18:30:00'),
(15, '2024-07-27', 3, 1, 2, 4, '4', 4, '12.38', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(16, '2024-07-27', 3, 1, 2, 3, '4', 4, '10.385', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(17, '2024-07-27', 3, 1, 2, 3, '4', 4, '10.754', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(18, '2024-07-27', 2, 3, 2, 5, '7', 3, '4.285', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(19, '2024-07-27', 2, 3, 2, 5, '7', 3, '4.37', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(20, '2024-07-27', 2, 3, 2, 5, '7', 3, '4.325', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(21, '2024-07-27', 2, 3, 2, 5, '7', 3, '4.36', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(22, '2024-07-27', 2, 3, 2, 5, '7', 3, '4.355', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(23, '2024-07-27', 2, 3, 2, 5, '7', 3, '4.4', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(24, '2024-07-27', 2, 3, 2, 5, '7', 3, '4.35', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(25, '2024-07-27', 2, 3, 3, 5, '7', 3, '4.445', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(26, '2024-07-27', 2, 3, 3, 5, '7', 3, '4.44', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(27, '2024-07-27', 2, 3, 3, 5, '7', 3, '3.215', 1, '2024-07-26 18:30:00', '2024-07-26 18:30:00'),
(28, '2024-07-24', 2, 4, 3, 2, '6', 4, '4.885', 1, '2024-07-23 18:30:00', '2024-07-23 18:30:00'),
(29, '2024-07-24', 2, 4, 3, 2, '6', 4, '4.73', 1, '2024-07-23 18:30:00', '2024-07-23 18:30:00'),
(30, '2024-07-24', 2, 4, 3, 2, '5', 4, '4.2', 1, '2024-07-23 18:30:00', '2024-07-23 18:30:00'),
(31, '2024-07-24', 2, 4, 3, 2, '5', 4, '3.985', 1, '2024-07-23 18:30:00', '2024-07-23 18:30:00'),
(32, '2024-07-24', 2, 4, 3, 2, '5', 4, '4.86', 1, '2024-07-23 18:30:00', '2024-07-23 18:30:00'),
(33, '2024-07-24', 2, 4, 3, 2, '5', 4, '4.81', 1, '2024-07-23 18:30:00', '2024-07-23 18:30:00'),
(34, '2024-07-24', 2, 4, 3, 2, '8', 4, '5.035', 1, '2024-07-23 18:30:00', '2024-07-23 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `role_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_management` int NOT NULL DEFAULT '0',
  `user_management` int NOT NULL DEFAULT '0',
  `lead_management` int NOT NULL DEFAULT '0',
  `sales_management` int NOT NULL DEFAULT '0',
  `purchase_management` int NOT NULL DEFAULT '0',
  `hr_management` int NOT NULL DEFAULT '0',
  `customer_management` int NOT NULL DEFAULT '0',
  `master_management` int NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci TABLESPACE `anterstech_sl`;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_management`, `user_management`, `lead_management`, `sales_management`, `purchase_management`, `hr_management`, `customer_management`, `master_management`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2024-09-25 01:22:51', '2024-09-25 23:40:47'),
(2, 'Hr', 1, 1, 0, 0, 0, 1, 0, 1, 1, '2024-09-25 05:25:23', '2024-10-05 01:58:52'),
(3, 'Accounts', 1, 0, 1, 0, 1, 0, 1, 0, 1, '2024-09-25 06:57:54', '2024-09-25 23:41:10'),
(4, 'Sales Rep', 0, 0, 1, 1, 1, 0, 1, 0, 1, '2024-10-05 01:51:13', '2024-10-05 01:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int UNSIGNED NOT NULL,
  `sales_date` date NOT NULL,
  `company` int UNSIGNED NOT NULL,
  `product` int NOT NULL,
  `unit` int NOT NULL,
  `type` int NOT NULL,
  `brand` int NOT NULL,
  `color` int NOT NULL,
  `form` int NOT NULL,
  `customer` int NOT NULL,
  `qnt` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_rep` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci TABLESPACE `anterstech_sl`;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sales_date`, `company`, `product`, `unit`, `type`, `brand`, `color`, `form`, `customer`, `qnt`, `sales_rep`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-10-15', 1, 1, 1, 2, 1, 1, 1, 3, '54', 4, 1, '2024-10-23 05:54:59', '2024-10-23 05:54:59'),
(2, '2024-09-10', 2, 2, 2, 2, 2, 1, 2, 3, '657', 5, 1, '2024-10-23 05:55:34', '2024-10-23 05:55:34'),
(3, '2024-10-09', 1, 1, 2, 1, 1, 1, 2, 3, '46', 4, 1, '2024-10-23 05:54:59', '2024-10-23 05:54:59'),
(16, '2024-04-05', 1, 1, 3, 1, 1, 1, 1, 1, '23.6', NULL, 1, '2024-04-04 18:30:00', '2024-04-04 18:30:00'),
(17, '2024-04-06', 1, 1, 1, 2, 2, 2, 1, 2, '2.65', NULL, 1, '2024-04-05 18:30:00', '2024-04-05 18:30:00'),
(18, '2024-04-07', 2, 2, 2, 3, 2, 3, 2, 3, '5.63', NULL, 1, '2024-04-06 18:30:00', '2024-04-06 18:30:00'),
(19, '2024-04-08', 3, 1, 3, 4, 1, 1, 3, 4, '35.21', NULL, 1, '2024-04-07 18:30:00', '2024-04-07 18:30:00'),
(20, '2024-04-05', 1, 1, 3, 1, 1, 1, 1, 1, '23.6', NULL, 1, '2024-04-04 18:30:00', '2024-04-04 18:30:00'),
(21, '2024-04-06', 1, 1, 1, 2, 2, 2, 1, 2, '2.65', NULL, 1, '2024-04-05 18:30:00', '2024-04-05 18:30:00'),
(22, '2024-04-07', 2, 2, 2, 3, 2, 3, 2, 3, '5.63', NULL, 1, '2024-04-06 18:30:00', '2024-04-06 18:30:00'),
(23, '2024-04-08', 3, 1, 3, 4, 1, 1, 3, 4, '35.21', NULL, 1, '2024-04-07 18:30:00', '2024-04-07 18:30:00'),
(24, '2024-12-04', 1, 4, 1, 32, 10, 2, 1, 2, '2', 3, 1, '2024-12-04 09:31:15', '2024-12-04 09:31:15'),
(27, '2024-12-05', 1, 6, 4, 32, 4, 8, 5, 5, '23.6', NULL, 1, '2024-12-05 00:00:00', '2024-12-05 00:00:00'),
(28, '2024-12-06', 1, 6, 2, 33, 5, 8, 7, 3, '2.65', NULL, 1, '2024-12-06 00:00:00', '2024-12-06 00:00:00'),
(29, '2024-12-04', 2, 2, 2, 31, 6, 6, 9, 2, '5.63', NULL, 1, '2024-12-04 00:00:00', '2024-12-04 00:00:00'),
(30, '2024-12-05', 3, 5, 4, 34, 4, 8, 1, 4, '35.21', NULL, 1, '2024-12-05 00:00:00', '2024-12-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendances`
--

CREATE TABLE `staff_attendances` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `location_id` int DEFAULT NULL,
  `attendance_status` int NOT NULL,
  `attendance_date` date DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_attendances`
--

INSERT INTO `staff_attendances` (`id`, `user_id`, `location_id`, `attendance_status`, `attendance_date`, `status`, `created_at`, `updated_at`) VALUES
(10, 4, 1, 0, '2024-10-15', 1, '2024-10-14 04:43:43', '2024-10-14 04:43:43'),
(9, 3, 1, 1, '2024-10-15', 1, '2024-10-14 04:43:43', '2024-10-14 04:43:43'),
(7, 4, 1, 1, '2024-10-09', 1, '2024-10-09 06:08:19', '2024-10-10 01:46:42'),
(8, 3, 1, 2, '2024-10-09', 1, '2024-10-09 06:08:19', '2024-10-10 01:46:42'),
(11, 3, 1, 1, '2024-10-14', 1, '2024-10-14 04:49:13', '2024-10-14 04:49:13'),
(12, 4, 1, 2, '2024-10-14', 1, '2024-10-14 04:49:13', '2024-10-14 04:49:13'),
(13, 3, 1, 1, '2024-10-11', 1, '2024-10-14 04:49:27', '2024-10-14 04:49:27'),
(14, 4, 1, 0, '2024-10-11', 1, '2024-10-14 04:49:27', '2024-10-14 04:49:27'),
(15, 3, 1, 0, '2024-10-16', 1, '2024-10-16 00:43:32', '2024-10-16 00:43:32'),
(16, 4, 1, 1, '2024-10-16', 1, '2024-10-16 00:43:32', '2024-10-16 00:43:32'),
(17, 3, 1, 1, '2024-10-17', 1, '2024-10-16 01:20:58', '2024-10-16 01:21:23'),
(18, 4, 1, 0, '2024-10-17', 1, '2024-10-16 01:20:58', '2024-10-16 01:21:23'),
(19, 3, 1, 1, '2024-11-01', 1, '2024-11-17 22:50:52', '2024-11-17 22:50:52'),
(20, 4, 1, 1, '2024-11-01', 1, '2024-11-17 22:50:52', '2024-11-17 22:50:52'),
(21, 3, 1, 1, '2024-11-02', 1, '2024-11-17 22:51:03', '2024-11-17 22:51:03'),
(22, 4, 1, 1, '2024-11-02', 1, '2024-11-17 22:51:03', '2024-11-17 22:51:03'),
(23, 3, 1, 1, '2024-11-04', 1, '2024-11-17 22:51:13', '2024-11-17 22:51:13'),
(24, 4, 1, 1, '2024-11-04', 1, '2024-11-17 22:51:13', '2024-11-17 22:51:13'),
(25, 3, 1, 1, '2024-11-05', 1, '2024-11-17 22:51:24', '2024-11-17 22:51:24'),
(26, 4, 1, 0, '2024-11-05', 1, '2024-11-17 22:51:24', '2024-11-17 22:51:24'),
(27, 3, 1, 1, '2024-11-06', 1, '2024-11-17 22:51:38', '2024-11-17 22:51:38'),
(28, 4, 1, 1, '2024-11-06', 1, '2024-11-17 22:51:38', '2024-11-17 22:51:38'),
(29, 3, 1, 1, '2024-11-07', 1, '2024-11-17 22:51:52', '2024-11-17 22:51:52'),
(30, 4, 1, 0, '2024-11-07', 1, '2024-11-17 22:51:52', '2024-11-17 22:51:52'),
(31, 3, 1, 1, '2024-11-08', 1, '2024-11-17 22:52:02', '2024-11-17 22:52:02'),
(32, 4, 1, 1, '2024-11-08', 1, '2024-11-17 22:52:02', '2024-11-17 22:52:02'),
(33, 3, 1, 1, '2024-11-09', 1, '2024-11-17 22:53:11', '2024-11-17 22:53:11'),
(34, 4, 1, 1, '2024-11-09', 1, '2024-11-17 22:53:11', '2024-11-17 22:53:11'),
(35, 3, 1, 2, '2024-11-11', 1, '2024-11-17 22:53:30', '2024-11-17 22:53:30'),
(36, 4, 1, 1, '2024-11-11', 1, '2024-11-17 22:53:30', '2024-11-17 22:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `staff_monthly_leaves`
--

CREATE TABLE `staff_monthly_leaves` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `leave_per_month` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_monthly_leaves`
--

INSERT INTO `staff_monthly_leaves` (`id`, `user_id`, `leave_per_month`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 1, '2024-10-10 09:57:39', '2024-10-10 09:57:39'),
(2, 4, 1, 1, '2024-10-10 10:00:13', '2024-10-10 10:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `staff_pay_scales`
--

CREATE TABLE `staff_pay_scales` (
  `id` bigint UNSIGNED NOT NULL,
  `paypmonth` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `basic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `da` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `hra` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `conveyance` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `cca` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `bonus` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `incentive` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `gtotal` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epf_deduction` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `esi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `income_tax` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `loan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_pay_scales`
--

INSERT INTO `staff_pay_scales` (`id`, `paypmonth`, `user_id`, `basic`, `da`, `hra`, `conveyance`, `cca`, `bonus`, `incentive`, `gtotal`, `epf_deduction`, `esi`, `income_tax`, `loan`, `total`, `status`, `created_at`, `updated_at`) VALUES
(2, '23000', 4, '8740.00', '4370.00', '6440.00', '1610.00', '1840.00', '500', '0', '23500.00', '2820.00', '176.25', '500', '0', '20003.75', 1, '2024-11-16 05:00:12', '2024-11-16 05:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `staff_pay_slips`
--

CREATE TABLE `staff_pay_slips` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `month` int DEFAULT NULL,
  `year` int DEFAULT NULL,
  `employee_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `emp_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhar_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pf_joining_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pf_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `est_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_taken` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_per_month` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_day_present` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `da` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hra` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conveyance` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cca` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incentive` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gtotal` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epf_deduction` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `esi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_tax` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gross_earning` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gross_deduction` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lop` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lop_deduction` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthlt_total` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_slip_genrated_gate` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_pay_slips`
--

INSERT INTO `staff_pay_slips` (`id`, `user_id`, `month`, `year`, `employee_id`, `join_date`, `emp_name`, `roll`, `company`, `location`, `aadhar_number`, `pan_number`, `bank_number`, `account_number`, `ifsc_number`, `pf_joining_date`, `pf_number`, `est_number`, `leave_taken`, `leave_per_month`, `total_day_present`, `basic`, `da`, `hra`, `conveyance`, `cca`, `bonus`, `incentive`, `gtotal`, `epf_deduction`, `esi`, `income_tax`, `loan`, `gross_earning`, `gross_deduction`, `lop`, `lop_deduction`, `monthlt_total`, `pay_slip_genrated_gate`, `status`, `created_at`, `updated_at`) VALUES
(10, 4, 11, 2024, 'EMP-TCP-3', NULL, 'SalesRepC', 'Sales Rep', 'SAR', 'Chenna', 'Not-Updated', 'Not-Updated', 'Not-Updated', 'Not-Updated', 'Not-Updated', 'Not-Updated', 'Not-Updated', 'Not-Updated', '2', '1', '7', '8740.00', '4370.00', '6440.00', '1610.00', '1840.00', '500', '0', '23500.00', '2820.00', '176.25', '500', '4000.00', '20003.75', '3496.25', '1', '666.79', '19336.96', '20-Nov-2024', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `c_id`, `type_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-TYPE-1', 'Minimised', 0, '2024-10-22 02:09:19', '2024-12-04 08:00:34'),
(2, 'SARA-TYPE-2', 'Regular', 0, '2024-10-22 02:51:35', '2024-12-04 08:00:38'),
(3, 'SARA-TYPE-3', 'Off whtite', 0, '2024-10-22 02:51:35', '2024-12-04 08:00:42'),
(4, 'SARA-TYPE-4', 'Zero', 0, '2024-10-22 02:51:35', '2024-12-04 08:00:45'),
(5, 'SARA-TYPE-5', 'TCRMPOFFWHITE', 0, '2024-10-22 02:51:35', '2024-12-04 08:00:48'),
(6, 'SARA-TYPE-6', 'TCSMPWHITEALUMINUM', 0, '2024-10-22 02:51:35', '2024-12-04 08:00:52'),
(7, 'SARA-TYPE-7', 'BGL', 0, '2024-10-22 02:51:35', '2024-12-04 08:00:55'),
(8, 'SARA-TYPE-8', 'TCRMPLIGHTBLUE', 0, '2024-10-22 02:51:35', '2024-12-04 08:00:58'),
(9, 'SARA-TYPE-9', 'TCRMPLIGHTBLUE', 1, '2024-12-04 08:01:16', '2024-12-04 08:01:16'),
(10, 'SARA-TYPE-10', 'TCRMPOFFWHITE', 1, '2024-12-04 08:01:32', '2024-12-04 08:01:32'),
(11, 'SARA-TYPE-11', 'TCRMPNUVABLUE', 1, '2024-12-04 08:01:46', '2024-12-04 08:01:46'),
(12, 'SARA-TYPE-12', 'TCRMPGRAPHITEGREY', 1, '2024-12-04 08:02:06', '2024-12-04 08:02:06'),
(13, 'SARA-TYPE-13', 'TCRMPBRICKRED', 1, '2024-12-04 08:02:22', '2024-12-04 08:02:22'),
(14, 'SARA-TYPE-14', 'TCRMPTURQUOISEBLUE', 1, '2024-12-04 08:02:59', '2024-12-04 08:02:59'),
(15, 'SARA-TYPE-15', 'TCRMPTAURUSBLUE', 1, '2024-12-04 08:03:15', '2024-12-04 08:03:15'),
(16, 'SARA-TYPE-16', 'TCRMPCFGGREEN-2', 1, '2024-12-04 08:03:47', '2024-12-04 08:03:47'),
(17, 'SARA-TYPE-17', 'TCRMPMISTGREEN', 1, '2024-12-04 08:03:57', '2024-12-04 08:03:57'),
(18, 'SARA-TYPE-18', 'TCRMPCENIZAGREY', 1, '2024-12-04 08:04:37', '2024-12-04 08:04:37'),
(19, 'SARA-TYPE-19', 'TCSMPWHITEALUMINUM', 1, '2024-12-04 08:05:15', '2024-12-04 08:05:15'),
(20, 'SARA-TYPE-20', 'TCRMPCREAMORANGE', 1, '2024-12-04 08:05:48', '2024-12-04 08:05:48'),
(21, 'SARA-TYPE-21', 'TCSMPOFFWHITE', 1, '2024-12-04 08:06:21', '2024-12-04 08:06:21'),
(22, 'SARA-TYPE-22', 'TCRMPCHESTNUTBROWN', 1, '2024-12-04 08:06:39', '2024-12-04 08:06:39'),
(23, 'SARA-TYPE-23', 'TCRMPGREYALUMINIUM', 1, '2024-12-04 08:07:46', '2024-12-04 08:07:46'),
(24, 'SARA-TYPE-24', 'TCRMPTELEGREY', 1, '2024-12-04 08:08:53', '2024-12-04 08:08:53'),
(25, 'SARA-TYPE-25', 'TCRMPDUSTYGREY', 1, '2024-12-04 08:09:14', '2024-12-04 08:09:14'),
(26, 'SARA-TYPE-26', 'TCRMPIVORY', 1, '2024-12-04 08:09:28', '2024-12-04 08:09:28'),
(27, 'SARA-TYPE-27', 'TCRMPWHITEALUMINIUM', 1, '2024-12-04 08:10:04', '2024-12-04 08:10:04'),
(28, 'SARA-TYPE-28', 'TCRMPPUREWHITE', 1, '2024-12-04 08:25:56', '2024-12-04 08:25:56'),
(29, 'SARA-TYPE-29', 'TCSMPPUREWHITE', 1, '2024-12-04 08:26:23', '2024-12-04 08:26:23'),
(30, 'SARA-TYPE-30', 'TCRMPCREAM', 1, '2024-12-04 08:27:22', '2024-12-04 08:27:22'),
(31, 'SARA-TYPE-31', 'TCSMPCREAM', 1, '2024-12-04 08:27:49', '2024-12-04 08:27:49'),
(32, 'SARA-TYPE-32', 'Minimised', 1, '2024-12-04 08:53:50', '2024-12-04 08:53:50'),
(33, 'SARA-TYPE-33', 'Regular', 1, '2024-12-04 08:54:03', '2024-12-04 08:54:03'),
(34, 'SARA-TYPE-34', 'Zero', 1, '2024-12-04 08:54:20', '2024-12-04 08:54:20'),
(35, 'SARA-TYPE-35', 'SPM', 1, '2024-12-04 08:54:40', '2024-12-04 08:54:40'),
(36, 'SARA-TYPE-36', 'BGL', 1, '2024-12-04 08:55:55', '2024-12-04 08:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint UNSIGNED NOT NULL,
  `c_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `c_id`, `unit_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SARA-UNIT-1', 'MER', 1, '2024-09-24 08:24:09', '2024-09-24 08:34:33'),
(2, 'SARA-UNIT-2', 'B24', 1, '2024-09-24 08:24:09', '2024-12-04 09:18:38'),
(3, 'SARA-UNIT-3', 'G12', 1, '2024-09-24 08:24:09', '2024-12-04 09:18:46'),
(4, 'SARA-UNIT-4', 'PGR', 1, '2024-12-04 09:18:53', '2024-12-04 09:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `role` int NOT NULL DEFAULT '0',
  `company_id` int NOT NULL DEFAULT '0',
  `location_id` int NOT NULL DEFAULT '0',
  `employee_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci TABLESPACE `anterstech_sl`;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `status`, `role`, `company_id`, `location_id`, `employee_id`, `joining_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, NULL, '$2y$10$rrzb9g/QXsaN3ocWlK/hseVXc0RxtM1IUvWSxW892lbWz2vvItrjG', 1, 1, 0, 0, NULL, NULL, 'lGkyE9BTbcmGuifcKU1KR1WpEJLwUSUT60kGAk877ILmPwsj8k6DV1TXRLHi', '2024-09-23 01:25:39', '2024-09-23 01:25:39'),
(2, 'dfhg', 'be.yuvaraj@gmail.com', '4645645654', NULL, '$2y$10$rrzb9g/QXsaN3ocWlK/hseVXc0RxtM1IUvWSxW892lbWz2vvItrjG', 0, 2, 1, 1, NULL, NULL, NULL, '2024-09-26 01:55:53', '2024-10-02 04:37:13'),
(3, 'Yuvarajs', 'yuvaraj@istudiotech.com', '9898787867', NULL, '$2y$10$qsQeSmYRYEIuQ.z3ZnSK2umQwKgfjqZgSPJI.64ZSDRYeNO0E5UWu', 1, 2, 2, 1, 'EMP-TCP-2', '2023-09-13', NULL, '2024-10-01 22:55:09', '2024-10-07 19:58:56'),
(4, 'SalesRepC', 'salesrepc@gmail.com', '9898989898', NULL, '$2y$10$9TrEAG9YvvZk7AnHh5zQ6.vmyk9K7KuWBa6Xv4C1NaM6MHEAugYfq', 1, 4, 2, 1, 'EMP-TCP-3', NULL, NULL, '2024-10-05 01:54:18', '2024-10-05 01:54:18'),
(5, 'SalesRepCo', 'salesrepco@gmail.com', '9898787878', NULL, '$2y$10$qsQeSmYRYEIuQ.z3ZnSK2umQwKgfjqZgSPJI.64ZSDRYeNO0E5UWu', 1, 4, 2, 2, 'EMP-TCP-1', NULL, NULL, '2024-10-05 01:57:15', '2024-10-05 01:57:15'),
(6, 'Anusshka', 'info@sarosteel.com', '6374757404', NULL, '$2y$10$Ph8JhLGzw9l1qlQ202RjwO6JfQEa7LgvVBMDH.rSgsZKeKAEK8ua2', 1, 1, 1, 5, 'EMP-SARO-1', NULL, NULL, '2024-12-06 07:45:44', '2024-12-06 07:45:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_c_id_unique` (`c_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_id_unique` (`c_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_c_id_unique` (`c_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_c_id_unique` (`c_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_unique_code` (`customer_unique_code`),
  ADD UNIQUE KEY `gst_number` (`gst_number`),
  ADD UNIQUE KEY `gst_num` (`gst_number`(24));

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forms_c_id_unique` (`c_id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_sources`
--
ALTER TABLE `lead_sources`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lead_sources_c_id_unique` (`c_id`);

--
-- Indexes for table `loan_dues`
--
ALTER TABLE `loan_dues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_masters`
--
ALTER TABLE `loan_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locations_c_id_unique` (`c_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plants_c_id_unique` (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_c_id_unique` (`c_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comp_name` (`company`);

--
-- Indexes for table `staff_attendances`
--
ALTER TABLE `staff_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_date` (`attendance_date`);

--
-- Indexes for table `staff_monthly_leaves`
--
ALTER TABLE `staff_monthly_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_pay_scales`
--
ALTER TABLE `staff_pay_scales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_pay_slips`
--
ALTER TABLE `staff_pay_slips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_c_id_unique` (`c_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `units_c_id_unique` (`c_id`);

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
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lead_sources`
--
ALTER TABLE `lead_sources`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loan_dues`
--
ALTER TABLE `loan_dues`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `loan_masters`
--
ALTER TABLE `loan_masters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `staff_attendances`
--
ALTER TABLE `staff_attendances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `staff_monthly_leaves`
--
ALTER TABLE `staff_monthly_leaves`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_pay_scales`
--
ALTER TABLE `staff_pay_scales`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_pay_slips`
--
ALTER TABLE `staff_pay_slips`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `comp_name` FOREIGN KEY (`company`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
