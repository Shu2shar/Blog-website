-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2025 at 04:34 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:24:{i:0;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:15:\"read permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:1;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:17:\"update permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:2;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:17:\"create permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:3;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:17:\"delete permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:4;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:9:\"read role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:5;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:11:\"update role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:6;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:11:\"create role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:7;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:11:\"delete role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:8;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:9:\"read user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:9;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:9:\"edit user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:10;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:11:\"create user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:11;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:11:\"delete user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:12;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:15:\"read categories\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:4;}}i:13;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:17:\"create categories\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:14;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:17:\"update categories\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:15;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:17:\"delete categories\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:16;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:11:\"delete blog\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:4;}}i:17;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:11:\"create blog\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:4;}}i:18;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:11:\"update blog\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:4;}}i:19;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:9:\"read blog\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:4;}}i:20;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:8:\"read tag\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:4;}}i:21;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:10:\"create tag\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:22;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:10:\"update tag\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:23;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:10:\"delete tag\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:4:\"user\";s:1:\"c\";s:3:\"web\";}}}', 1752835328);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'alias', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(2, 'ducimus', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(3, 'est', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(4, 'non', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(5, 'molestias', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(6, 'voluptatem', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(7, 'laudantium', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(8, 'dolor', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(9, 'quam', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(10, 'iure', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(11, 'numquam', '2025-07-14 06:48:17', '2025-07-14 06:48:17'),
(12, 'et', '2025-07-14 06:49:13', '2025-07-14 06:49:13'),
(13, 'non', '2025-07-14 06:49:13', '2025-07-14 06:49:13'),
(14, 'expedita', '2025-07-14 06:49:13', '2025-07-14 06:49:13'),
(15, 'totam', '2025-07-14 06:49:14', '2025-07-14 06:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_29_041504_create_permission_tables', 1),
(5, '2025_06_29_174123_create_articles_table', 1),
(6, '2025_07_02_083844_create_categories_table', 2),
(7, '2025_07_02_083906_create_posts_table', 2),
(8, '2025_07_02_083918_create_tags_table', 2),
(9, '2025_07_02_083927_create_post_tag_table', 2),
(10, '2025_07_02_163155_create_notifications_table', 3),
(11, '2025_07_04_154434_add_points_to_users_table', 4),
(12, '2025_07_05_083906_create_personal_access_tokens_table', 5),
(13, '2025_07_07_092942_add_image_to_posts_table', 6),
(14, '2025_07_07_161900_add_soft_deletes_to_posts_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 24),
(4, 'App\\Models\\User', 25),
(4, 'App\\Models\\User', 26);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0a4e44da-54b2-4325-8faa-68123fa7af5b', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 18, '{\"post_id\":33,\"title\":\"HELL..........O.......\"}', NULL, '2025-07-02 23:11:38', '2025-07-02 23:11:38'),
('11c3b531-6756-401d-8835-a72f4c69c7ec', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 24, '{\"post_id\":63,\"title\":\"NEW\"}', NULL, '2025-07-07 08:49:32', '2025-07-07 08:49:32'),
('27a9e751-91cf-477e-a386-865e30557fac', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 3, '{\"post_id\":33,\"title\":\"HELL..........O.......\"}', NULL, '2025-07-02 23:11:37', '2025-07-02 23:11:37'),
('451035e7-714f-4ff0-a0e0-3c3d264856cb', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 3, '{\"post_id\":36,\"title\":\"ADMINN SAY HELLO TO ALL!\"}', NULL, '2025-07-03 00:48:09', '2025-07-03 00:48:09'),
('4bcbcee5-3bbd-4f0a-8018-34380b494bf0', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 2, '{\"post_id\":32,\"title\":\"HELL..........O.......\"}', NULL, '2025-07-02 23:04:35', '2025-07-02 23:04:35'),
('4e5cc097-2ddc-4377-ae72-ba3fc6c31625', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 20, '{\"post_id\":36,\"title\":\"ADMINN SAY HELLO TO ALL!\"}', NULL, '2025-07-03 00:48:17', '2025-07-03 00:48:17'),
('58e0401f-faf0-447a-829a-1f9f95080b29', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 28, '{\"post_id\":67,\"title\":\"MY TEST POST\"}', NULL, '2025-07-14 06:49:13', '2025-07-14 06:49:13'),
('67b52899-0c4c-47a6-ba65-6158071e07fa', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 35, '{\"post_id\":70,\"title\":\"DEMO\"}', NULL, '2025-07-14 07:22:20', '2025-07-14 07:22:20'),
('68ba867f-5e2d-421b-a0ae-1707f37f8e19', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 2, '{\"post_id\":35,\"title\":\"TUSHAR HELLO!\"}', NULL, '2025-07-03 00:45:17', '2025-07-03 00:45:17'),
('6a6a2efc-82e0-48a1-864c-38800f2e7305', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 2, '{\"post_id\":36,\"title\":\"ADMINN SAY HELLO TO ALL!\"}', NULL, '2025-07-03 00:48:01', '2025-07-03 00:48:01'),
('6db4f7a1-e7c4-485d-81c7-7f6923e7b3e0', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 24, '{\"post_id\":67,\"title\":\"MY TEST POST\"}', NULL, '2025-07-14 06:49:13', '2025-07-14 06:49:13'),
('711a0f8c-2346-4a2d-bd52-1f4b591b2a95', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 27, '{\"post_id\":66,\"title\":\"MY TEST POST\"}', NULL, '2025-07-14 06:48:18', '2025-07-14 06:48:18'),
('77f3a71c-fad5-475a-afe0-3adfbb085571', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 2, '{\"post_id\":33,\"title\":\"HELL..........O.......\"}', NULL, '2025-07-02 23:11:35', '2025-07-02 23:11:35'),
('78c491d6-41b5-4b3c-a4c9-8ca1bf848aee', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 24, '{\"post_id\":70,\"title\":\"DEMO\"}', NULL, '2025-07-14 07:22:16', '2025-07-14 07:22:16'),
('92b9b777-5254-4706-9f11-bb7b66c06ff7', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 25, '{\"post_id\":67,\"title\":\"MY TEST POST\"}', NULL, '2025-07-14 06:49:13', '2025-07-14 06:49:13'),
('a0fdf688-aba0-44e4-a415-268f2ab88e01', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 24, '{\"post_id\":66,\"title\":\"MY TEST POST\"}', NULL, '2025-07-14 06:48:18', '2025-07-14 06:48:18'),
('a65fbed1-fb2f-46c0-b860-59aa0dec7563', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 25, '{\"post_id\":66,\"title\":\"MY TEST POST\"}', NULL, '2025-07-14 06:48:18', '2025-07-14 06:48:18'),
('b7788fa1-f96c-4800-8d43-9f1f1e6b9bc9', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 18, '{\"post_id\":32,\"title\":\"HELL..........O.......\"}', NULL, '2025-07-02 23:04:38', '2025-07-02 23:04:38'),
('c555d4d4-a9ee-4877-847c-182e8125f1cc', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 25, '{\"post_id\":63,\"title\":\"NEW\"}', NULL, '2025-07-07 08:49:34', '2025-07-07 08:49:34'),
('d1be901b-5543-4462-80a8-69067b9e3ae6', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 3, '{\"post_id\":35,\"title\":\"TUSHAR HELLO!\"}', NULL, '2025-07-03 00:45:24', '2025-07-03 00:45:24'),
('e26e7a93-2a56-4bcc-aed0-834915baa897', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 3, '{\"post_id\":34,\"title\":\"HELLO TUSHAR\"}', NULL, '2025-07-03 00:39:43', '2025-07-03 00:39:43'),
('ebb644f0-91a9-4d2c-a781-a701ebb0ed07', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 25, '{\"post_id\":70,\"title\":\"DEMO\"}', NULL, '2025-07-14 07:22:18', '2025-07-14 07:22:18'),
('f539cdbb-8694-4ce8-9a9e-fe94a02c482f', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 2, '{\"post_id\":34,\"title\":\"HELLO TUSHAR\"}', NULL, '2025-07-03 00:39:34', '2025-07-03 00:39:34'),
('ff83c559-5814-48cc-af60-bb699aba73b1', 'App\\Notifications\\PostPublishedNotification', 'App\\Models\\User', 3, '{\"post_id\":32,\"title\":\"HELL..........O.......\"}', NULL, '2025-07-02 23:04:36', '2025-07-02 23:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(5, 'read permission', 'web', '2025-07-02 02:50:49', '2025-07-02 02:50:49'),
(6, 'update permission', 'web', '2025-07-02 02:50:56', '2025-07-02 02:50:56'),
(7, 'create permission', 'web', '2025-07-02 02:51:03', '2025-07-02 02:51:03'),
(8, 'delete permission', 'web', '2025-07-02 02:51:10', '2025-07-02 02:51:10'),
(9, 'read role', 'web', '2025-07-02 02:51:20', '2025-07-02 02:51:20'),
(10, 'update role', 'web', '2025-07-02 02:51:28', '2025-07-02 02:51:28'),
(11, 'create role', 'web', '2025-07-02 02:51:36', '2025-07-02 02:51:36'),
(12, 'delete role', 'web', '2025-07-02 02:51:44', '2025-07-02 02:51:44'),
(13, 'read user', 'web', '2025-07-02 02:51:57', '2025-07-02 02:51:57'),
(14, 'edit user', 'web', '2025-07-02 02:52:04', '2025-07-02 02:52:04'),
(15, 'create user', 'web', '2025-07-02 02:52:12', '2025-07-02 02:52:12'),
(16, 'delete user', 'web', '2025-07-02 02:52:21', '2025-07-02 02:52:21'),
(17, 'read categories', 'web', '2025-07-02 03:29:54', '2025-07-02 03:29:54'),
(18, 'create categories', 'web', '2025-07-02 03:30:06', '2025-07-02 03:30:06'),
(19, 'update categories', 'web', '2025-07-02 03:30:16', '2025-07-02 03:30:16'),
(20, 'delete categories', 'web', '2025-07-02 03:30:25', '2025-07-02 03:30:25'),
(21, 'delete blog', 'web', '2025-07-02 03:30:35', '2025-07-02 03:30:35'),
(22, 'create blog', 'web', '2025-07-02 03:30:41', '2025-07-02 03:30:41'),
(23, 'update blog', 'web', '2025-07-02 03:30:50', '2025-07-02 03:30:50'),
(24, 'read blog', 'web', '2025-07-02 03:31:07', '2025-07-02 03:31:07'),
(25, 'read tag', 'web', '2025-07-02 03:31:18', '2025-07-02 03:31:18'),
(26, 'create tag', 'web', '2025-07-02 03:31:33', '2025-07-02 03:31:33'),
(27, 'update tag', 'web', '2025-07-02 03:31:40', '2025-07-02 03:31:40'),
(28, 'delete tag', 'web', '2025-07-02 03:31:46', '2025-07-02 03:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 21, 'api', 'a6d273a64681750046866f9957c85eff197e2422f3be0650f2fba2febeccfa02', '[\"*\"]', NULL, NULL, '2025-07-05 03:16:46', '2025-07-05 03:16:46'),
(2, 'App\\Models\\User', 22, 'api', 'bbef359a58fdc8771e0db0d8d4a84ef1d33a7eeb874ab3cb124f8f535b653d1d', '[\"*\"]', NULL, NULL, '2025-07-05 03:18:16', '2025-07-05 03:18:16'),
(3, 'App\\Models\\User', 22, 'api', 'abe80e6deead7c91b2da445bdac95a549a9752e304cf036ea1026ba32c86e394', '[\"*\"]', NULL, NULL, '2025-07-05 03:18:34', '2025-07-05 03:18:34'),
(4, 'App\\Models\\User', 22, 'api', 'cf98d8b1f4c80fbfa90da688162b85acfe61ba2accfce21a600dae364fc0421d', '[\"*\"]', '2025-07-05 03:23:38', NULL, '2025-07-05 03:20:30', '2025-07-05 03:23:38'),
(5, 'App\\Models\\User', 26, 'api', 'eda8fb4ad0d92a93f2e4e49c0eb4164b2e99a7129f6ac3c864d8cfcf1709b24d', '[\"*\"]', NULL, NULL, '2025-07-14 01:21:16', '2025-07-14 01:21:16'),
(6, 'App\\Models\\User', 26, 'api', 'f9018dcaf801b41a1675a7400791ef7ed306bfd2f2db7369b58bcfc8403a3133', '[\"*\"]', '2025-07-14 01:29:18', NULL, '2025-07-14 01:21:31', '2025-07-14 01:29:18'),
(7, 'App\\Models\\User', 24, 'api', '6d3ab8f756fde1131efcd620b51ad0cd1926bf0a0cc68ac2e59957a9b15ff649', '[\"*\"]', '2025-07-14 01:30:18', NULL, '2025-07-14 01:29:58', '2025-07-14 01:30:18'),
(8, 'App\\Models\\User', 26, 'api', '776f210adf9bee2fb7453ea324513e234627b2123e12385dd5707353ac0c89e0', '[\"*\"]', '2025-07-14 01:38:28', NULL, '2025-07-14 01:30:48', '2025-07-14 01:38:28'),
(9, 'App\\Models\\User', 36, 'api', '263ffb0bc0b1ba229fb67ef360aa164f3d9fcbbeb525bc584304d417d09e6e7e', '[\"*\"]', NULL, NULL, '2025-07-14 07:37:17', '2025-07-14 07:37:17'),
(10, 'App\\Models\\User', 36, 'api', '4344771b0b47d922dac25d16979832ef9f73e6cd2b8d74919f2dfe65586fcfc5', '[\"*\"]', '2025-07-14 07:40:02', NULL, '2025-07-14 07:37:29', '2025-07-14 07:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `slug`, `body`, `created_at`, `updated_at`, `image`, `deleted_at`) VALUES
(43, 24, 5, 'COMMODI EOS TEMPORA QUI AMET ESSE ANIMI.', 'commodi-eos-tempora-qui-amet-esse-animi', 'Vitae non molestiae omnis dolorum. Nemo est laboriosam facilis enim. Voluptatibus placeat dicta reiciendis illum consequatur sed dignissimos. Omnis id eveniet quia dolorem. Molestiae adipisci quo laudantium excepturi mollitia. Qui est minus quos animi et. Doloremque consequuntur voluptas quisquam ipsa. Voluptatem explicabo quo omnis natus impedit culpa et fugiat. Fuga nesciunt voluptatem earum omnis quia. Saepe repellat vel dolorem commodi. Ipsam ullam nemo iure quas. Quis nesciunt sit voluptatem quo dolorem commodi et sequi. Est consequatur tempora quam. Ipsum rerum sint totam culpa.', '2025-07-07 05:08:04', '2025-07-07 05:17:05', 'posts/kabir_1751885225.jpg', NULL),
(44, 24, 7, 'Et non aspernatur recusandae sed consequuntur et enim.', 'et-non-aspernatur-recusandae-sed-consequuntur-et-enim', 'Minus neque ipsa ut velit dolorem aperiam iste. Reiciendis quia qui sed voluptas voluptatem. Pariatur nemo numquam officiis vel autem corrupti cumque fugiat. Tenetur perspiciatis quae soluta. Eius rem dolor dolorem ipsam optio et. Sunt ea et enim impedit. Dolorum officiis sed quos quasi incidunt quibusdam. Velit accusamus enim doloremque voluptas qui sint et voluptate. A sint non voluptatem quas fugiat qui doloribus. Non est et commodi nisi architecto. Quo sed et ipsam facere. Quia dolor voluptatem voluptas aut sit fugit.', '2025-07-07 05:08:04', '2025-07-07 05:08:04', 'posts/kabir_1751885225.jpg', NULL),
(45, 24, 5, 'Rerum saepe nulla neque tempora necessitatibus accusantium qui.', 'rerum-saepe-nulla-neque-tempora-necessitatibus-accusantium-qui', 'Alias deserunt aperiam et rerum est minima quas. Deserunt repellat eum quas minima aut cum vitae. Voluptatem accusantium et ratione vero ab est. Architecto aperiam culpa sit quia repudiandae voluptatem qui. Numquam dolores dolorem veniam ad iure dolor numquam. Aut quam ducimus corporis ratione voluptatem. Ut facere et voluptatum nobis ut fugit eum quam. Minus blanditiis cumque provident quis sapiente. Quasi tempore voluptas ut iure. Et aliquam ea eum enim in. Excepturi nulla sed neque voluptas et saepe nesciunt.', '2025-07-07 05:08:04', '2025-07-07 05:08:04', 'posts/kabir_1751885225.jpg', NULL),
(46, 24, 4, 'Corporis hic corrupti modi est incidunt fugit unde.', 'corporis-hic-corrupti-modi-est-incidunt-fugit-unde', 'Est quis voluptatum nihil molestiae odit fuga. Est earum quibusdam voluptatem doloribus. Pariatur quia laudantium exercitationem vitae cum et ut quibusdam. Autem odit sed voluptatibus. Nulla a quas consequuntur neque. Dicta fuga quae qui. Dolorum nostrum quibusdam maxime voluptatibus. Asperiores ullam alias labore hic. Possimus sequi excepturi est sit exercitationem ut. Pariatur ullam sit reprehenderit. Odio numquam fugit assumenda dolor adipisci.', '2025-07-07 05:08:04', '2025-07-07 05:08:04', 'posts/kabir_1751885225.jpg', NULL),
(47, 24, 9, 'AUT MAGNI VOLUPTATE ALIQUID BLANDITIIS QUIS.', 'aut-magni-voluptate-aliquid-blanditiis-quis', 'Quia voluptas officiis molestiae nihil fugiat consequatur laborum expedita. Debitis qui esse aut libero nostrum hic. Voluptas odit quo mollitia rerum. Harum fuga deserunt vero eos nostrum vitae voluptas. Dolor aut pariatur odio tempora. Unde possimus est perspiciatis voluptas ut et itaque. Cupiditate ad consequatur numquam aperiam deserunt tenetur. Doloremque voluptate dolor qui occaecati et quaerat. Alias eaque id eveniet perspiciatis. Consequuntur vero laborum sapiente aliquid dicta praesentium. Quia voluptates perspiciatis hic. Velit magnam libero nobis. Quibusdam exercitationem et temporibus similique dignissimos non. Quis officiis suscipit voluptate numquam beatae voluptatibus voluptatem.', '2025-07-07 05:08:04', '2025-07-07 05:11:45', 'posts/kabir_1751885225.jpg', NULL),
(48, 24, 7, 'Adipisci ab voluptatum qui consequuntur repellendus maxime sunt est.', 'adipisci-ab-voluptatum-qui-consequuntur-repellendus-maxime-sunt-est', 'Non quo ut cumque cumque consectetur voluptatibus rerum. Excepturi omnis saepe dolorem eum eveniet qui voluptas. Sed beatae ipsa est corrupti reiciendis quia. Velit deserunt molestias illum incidunt voluptatem. Quo perspiciatis sed rerum nesciunt nemo aliquid. Expedita quae quasi voluptatem quas tempore dolores. Ut nostrum qui qui aut. Laudantium excepturi velit provident. Et atque quidem et numquam sed. Harum explicabo aut dignissimos qui repellat aliquid sed. Dignissimos ex quis aliquam cupiditate itaque ratione natus. Non sed velit dignissimos reprehenderit non odit. Modi non excepturi dolores quam reiciendis. Qui consequatur sed omnis hic veniam quo ad officiis.', '2025-07-07 05:08:04', '2025-07-07 05:08:04', 'posts/kabir_1751885225.jpg', NULL),
(49, 24, 10, 'Ipsam reprehenderit asperiores corrupti et delectus.', 'ipsam-reprehenderit-asperiores-corrupti-et-delectus', 'Et laborum laudantium reprehenderit et ut rerum officia. Facere ratione eius nihil sed nisi cumque. Laborum architecto voluptatem nihil qui qui excepturi et autem. Non et praesentium hic dolor voluptates. Consectetur quas velit explicabo assumenda. Velit harum vero id omnis laborum voluptate ad. Dolor architecto reiciendis eum iste. Ipsam debitis autem id consequatur. Eligendi quasi quisquam minima praesentium.', '2025-07-07 05:08:04', '2025-07-07 05:08:04', 'posts/kabir_1751885225.jpg', NULL),
(50, 24, 7, 'Et id cupiditate vel deleniti.', 'et-id-cupiditate-vel-deleniti', 'Aut non eum autem molestias reiciendis voluptatem temporibus aut. Molestiae nihil illo consequatur eos modi. Repellendus minima eaque deleniti inventore unde ab eaque asperiores. Repellat voluptate quis earum enim ab. Consequuntur nemo animi alias praesentium libero illo maxime. Nihil fuga omnis aut vel nulla aspernatur. Architecto quisquam temporibus quia temporibus. Quibusdam sit iusto similique incidunt libero architecto officiis. Quis voluptates sint minus velit expedita.', '2025-07-07 05:08:04', '2025-07-07 05:08:04', 'posts/kabir_1751885225.jpg', NULL),
(51, 24, 7, 'Perspiciatis molestias rerum dolor expedita neque fuga eos impedit.', 'perspiciatis-molestias-rerum-dolor-expedita-neque-fuga-eos-impedit', 'Qui consequuntur tempore consectetur doloremque eos adipisci nobis. Quia est dolorem maiores dolorem. Et repellendus voluptate vel velit. Sequi rerum provident ut aliquid autem ea fugit. Quis enim dolorem occaecati ad perferendis dolorem. Inventore eligendi vel aut quis fugiat assumenda. Accusamus enim fugit neque odit aspernatur a. Ab ex ipsum deleniti sunt laudantium sint inventore. Corporis nesciunt quis consequatur et. Asperiores voluptate suscipit sapiente aspernatur voluptatem libero. Dolores numquam in est eius aut eum. Id molestiae repudiandae placeat ex quia qui. Porro pariatur deserunt libero voluptate. Qui natus officia maxime quae error.', '2025-07-07 05:08:04', '2025-07-07 05:08:04', 'posts/kabir_1751885225.jpg', NULL),
(52, 24, 4, 'REPUDIANDAE DOLOR SAPIENTE UNDE RECUSANDAE MINUS MAXIME NEMO DICTA.', 'repudiandae-dolor-sapiente-unde-recusandae-minus-maxime-nemo-dicta', 'Voluptate voluptatem et placeat sequi. Possimus voluptatum sapiente temporibus velit cum. Quisquam aut dolorem nemo sint. Quia et sit enim natus nulla laboriosam. Voluptatem atque itaque tempora voluptas. Quo illum laudantium officia quod hic ducimus molestiae ea. Quasi quibusdam ea voluptas repudiandae. Inventore et quis quam sed.', '2025-07-07 05:08:05', '2025-07-07 05:10:07', 'posts/kabir_1751885225.jpg', NULL),
(53, 24, 10, 'AUTEM EOS DIGNISSIMOS EOS FUGIT MAGNAM QUI IMPEDIT.', 'autem-eos-dignissimos-eos-fugit-magnam-qui-impedit', 'Quas quia repellendus quia et. Error ullam recusandae voluptatum quod. Similique sed nostrum laudantium quo id non qui. Et voluptate unde et aut et quo. Voluptas rem omnis et deleniti velit. Sit aut ut porro ipsam tenetur aut quia. Ratione sed reprehenderit libero sed non aut qui. Labore voluptatem quia ut. Ut quas officia facere commodi delectus non. Qui dolorum qui inventore non omnis accusantium.', '2025-07-07 05:08:05', '2025-07-07 05:12:07', 'posts/kabir_1751885225.jpg', NULL),
(54, 24, 6, 'Molestiae in vel eius vero non animi.', 'molestiae-in-vel-eius-vero-non-animi', 'Sapiente optio sed eos reprehenderit. Enim fugit ab consectetur earum expedita inventore eum blanditiis. Ut iste tempora perferendis sit. Qui enim soluta voluptas saepe laborum. Deleniti fugit quia quibusdam qui mollitia. Possimus debitis quis ut ea iure ut sunt. Iusto quidem sit non tenetur esse. Velit delectus voluptates non. Molestiae blanditiis consequuntur praesentium iste qui voluptatem debitis. Consequuntur sint esse ratione aut. Commodi aut ullam ipsam rem.', '2025-07-07 05:08:05', '2025-07-07 05:08:05', 'posts/kabir_1751885225.jpg', NULL),
(55, 24, 6, 'Ab molestias omnis quam incidunt quia odio.', 'ab-molestias-omnis-quam-incidunt-quia-odio', 'Vero perferendis eveniet fuga quo. Ut itaque ex rerum sed vitae. Omnis rem molestias necessitatibus. Aut voluptatem omnis odit sunt voluptas tempore. Sit amet placeat quia. Sapiente exercitationem molestiae nulla odit excepturi. Enim commodi labore nam earum maxime ratione excepturi. Quo tenetur non dignissimos ea asperiores iure unde incidunt.', '2025-07-07 05:08:05', '2025-07-07 05:08:05', 'posts/kabir_1751885225.jpg', NULL),
(56, 24, 3, 'Eum labore et et quaerat maxime rerum veniam.', 'eum-labore-et-et-quaerat-maxime-rerum-veniam', 'Asperiores est asperiores ad voluptates odit. Numquam quia molestiae placeat sapiente ipsam sit. Libero aut aut aut. Vel nam aut ipsa error cupiditate corporis. Quia iure odio aut. Est aliquid consequatur consequuntur in aut et. Pariatur sit ducimus ea.', '2025-07-07 05:08:05', '2025-07-07 05:08:05', 'posts/kabir_1751885225.jpg', NULL),
(57, 24, 1, 'Aut maxime et inventore non.', 'aut-maxime-et-inventore-non', 'Ea quae consequatur rerum distinctio officia. Dolor ipsam laudantium non architecto necessitatibus. Laborum sed ut repellat laborum nulla et quo ut. Qui similique veritatis voluptate excepturi quis. Est est quae facilis id blanditiis. Suscipit illo dolorem quia quibusdam quia autem aut maiores. Voluptas animi rerum ducimus assumenda accusantium pariatur. Quos dolore odit reprehenderit et dicta quia ut. Dolore dolores dolorum qui autem esse qui a. Quia minima velit iusto omnis molestias id est. Temporibus consequatur expedita molestias hic officia. Voluptas repellat maxime velit sit. Nemo laboriosam beatae magnam sunt impedit minus. Alias unde explicabo dolorum temporibus dolores et voluptas eveniet.', '2025-07-07 05:08:05', '2025-07-07 05:08:05', 'posts/kabir_1751885225.jpg', NULL),
(58, 24, 6, 'Accusamus consequuntur labore quis officiis pariatur.', 'accusamus-consequuntur-labore-quis-officiis-pariatur', 'Quibusdam dolorem consequuntur aliquam molestiae. Dignissimos nam nemo sit sed eos atque. Iusto saepe ut esse corrupti. Et molestiae cum nemo at distinctio ducimus optio aliquam. Enim sunt eum fugit nemo possimus. Ratione porro quo est debitis. Cum corrupti sed officiis totam consequatur eligendi laborum. Sed quia illo quae est eos recusandae dicta laboriosam. Voluptatem dolorem dolores sit neque minus. Dolor voluptas dolores aut itaque impedit eligendi. Vel nobis inventore et aut eum eligendi alias.', '2025-07-07 05:08:05', '2025-07-07 05:08:05', 'posts/kabir_1751885225.jpg', NULL),
(59, 24, 2, 'Dolor laborum et quia est.', 'dolor-laborum-et-quia-est', 'Rerum illum facilis laudantium accusamus. Fuga voluptatibus et est aut explicabo voluptatem ducimus. Est sunt dignissimos debitis vel. Qui impedit ut laudantium sed. Eos similique sint sit et qui. Veniam quas repudiandae rerum hic velit tempora qui. Ut ex sapiente quaerat quia doloribus ex. Doloremque occaecati exercitationem vero officia. Ducimus explicabo ut aliquam nam.', '2025-07-07 05:08:05', '2025-07-07 05:08:05', 'posts/kabir_1751885225.jpg', NULL),
(60, 24, 5, 'Eum aut fuga iure placeat minus libero cum ut.', 'eum-aut-fuga-iure-placeat-minus-libero-cum-ut', 'Aspernatur soluta vel eaque assumenda et. Nam aspernatur consequatur sit eius. Dolor id corporis corrupti nostrum ducimus sunt nobis. Laboriosam nesciunt voluptatum repellat ratione et. Iste saepe maiores earum maxime id voluptatem. Beatae voluptatem provident placeat et ducimus. Ex maxime alias consequuntur aut. Molestiae id praesentium ducimus. Assumenda dolorum illum qui voluptatem. Rerum velit sunt rerum omnis sit quidem. Eveniet sunt et ratione magnam qui voluptatibus aut perferendis. Totam quia sit minus facere. Officia est et repellat qui deleniti. Nobis tempore omnis occaecati suscipit quidem vel.', '2025-07-07 05:08:05', '2025-07-07 05:08:05', 'posts/kabir_1751885225.jpg', NULL),
(61, 24, 4, 'Quas et eum laudantium veniam libero.', 'quas-et-eum-laudantium-veniam-libero', 'Repellendus aut tenetur doloribus ducimus quia eum debitis. Facilis asperiores dolores et nam aut dolorem. Unde perspiciatis voluptates assumenda. Minus est consequuntur enim tempora eius neque. Pariatur optio ex ullam dolorum sint non. Excepturi recusandae at debitis. Quas provident omnis ducimus aut. Distinctio quis velit temporibus eos. Quidem voluptas ex et aut blanditiis fugiat nobis. Quasi blanditiis consequuntur quia omnis.', '2025-07-07 05:08:05', '2025-07-07 05:08:05', 'posts/kabir_1751885225.jpg', NULL),
(62, 24, 2, 'Velit cumque quia accusamus optio qui.', 'velit-cumque-quia-accusamus-optio-qui', 'Facilis dolore commodi mollitia asperiores quo ut est. Magnam et ut est explicabo. Ut omnis et ut. Incidunt reiciendis molestiae expedita sed modi tempora quia. Necessitatibus est facilis qui et animi autem. Similique ea expedita voluptatibus iusto praesentium animi et. Unde nobis reiciendis est nulla a repudiandae eum. Officiis maxime nisi non repellat iusto inventore eius dolore. Id quia voluptatem nulla enim doloremque sit beatae. Animi quasi quos qui molestias voluptatum. Et iusto assumenda sint sunt iusto. Autem tempore eaque aut voluptates nihil dolorum.', '2025-07-07 05:08:05', '2025-07-07 05:08:05', 'posts/kabir_1751885225.jpg', NULL),
(64, 24, 8, 'Tushar', 'tushar', 'Hwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v TusharHwemk xsjfe shuir v Tushar', '2025-07-07 09:53:33', '2025-07-07 10:58:05', 'posts/tushar_1751901812.jpg', '2025-07-07 10:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(127, 43, 18, NULL, NULL),
(128, 43, 2, NULL, NULL),
(129, 44, 14, NULL, NULL),
(130, 44, 11, NULL, NULL),
(131, 45, 3, NULL, NULL),
(132, 45, 7, NULL, NULL),
(133, 45, 11, NULL, NULL),
(134, 46, 4, NULL, NULL),
(135, 47, 10, NULL, NULL),
(136, 48, 12, NULL, NULL),
(137, 48, 13, NULL, NULL),
(138, 49, 2, NULL, NULL),
(139, 50, 4, NULL, NULL),
(140, 50, 18, NULL, NULL),
(141, 50, 7, NULL, NULL),
(142, 51, 18, NULL, NULL),
(143, 52, 2, NULL, NULL),
(144, 52, 18, NULL, NULL),
(145, 53, 13, NULL, NULL),
(146, 53, 17, NULL, NULL),
(147, 53, 2, NULL, NULL),
(148, 54, 3, NULL, NULL),
(149, 54, 13, NULL, NULL),
(150, 54, 18, NULL, NULL),
(151, 55, 15, NULL, NULL),
(152, 56, 13, NULL, NULL),
(153, 56, 2, NULL, NULL),
(154, 56, 9, NULL, NULL),
(155, 57, 7, NULL, NULL),
(156, 57, 2, NULL, NULL),
(157, 57, 15, NULL, NULL),
(158, 58, 8, NULL, NULL),
(159, 58, 13, NULL, NULL),
(160, 58, 1, NULL, NULL),
(161, 59, 5, NULL, NULL),
(162, 59, 1, NULL, NULL),
(163, 59, 16, NULL, NULL),
(164, 60, 16, NULL, NULL),
(165, 60, 2, NULL, NULL),
(166, 61, 19, NULL, NULL),
(167, 62, 18, NULL, NULL),
(168, 62, 9, NULL, NULL),
(170, 64, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2025-07-02 02:52:46', '2025-07-02 02:52:46'),
(2, 'admin', 'web', '2025-07-02 02:56:03', '2025-07-02 02:56:03'),
(4, 'user', 'web', '2025-07-02 03:35:36', '2025-07-02 03:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(17, 4),
(21, 4),
(22, 4),
(23, 4),
(24, 4),
(25, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aX116x0HMhUfUP4OAuTxn6MYoCQEsI9I0momSi6J', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiekI4QlliTUQ2bDM5YWp5dGZOS2kzd0w0OEkzeHF1bGRrTnFrTUs1bSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1752501975),
('edWLCBmsft03YPjujYaMhiSnJuQkveKnLRqncEAV', NULL, '127.0.0.1', 'PostmanRuntime/7.44.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVhXaU5HZEZUMjlFUE5PODRkY2UzZVUyODBLOG9rS1JEeWRwdlBPViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1752498591),
('gGDWufxb2gYVtNCquryIYWLMgtKkzftO9DdOzAcg', 24, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidDVSS0RYbWNhQU82NEl1RnRCbTBzSm1uVk4zQ3FURWlZaG5VUEdmbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyNDt9', 1752555873),
('oPUSig0fDVVgIiy4FTWEJNWW2Bsj8Cyvm4mNM9gh', 24, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT0FXTnk0V2g4Rkoza3dhYzFFSUJyZmFKVWoySnRUcGJUaDdPYlVxNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZXJtaXNzaW9ucyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI0O30=', 1752748936),
('pERgv5uAfXfDY3fE4kSom4AbFv01fvvjQKAT3C6a', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVFHNXVlM1Rqczdwb2ZOd29weHM4QWhoeWVHeW5HWW83V2czanV3NiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1752501921),
('RdEgjYUF3UVrj9XRJrA6B4y1lOElvMfYxJu4wWPs', 24, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidGVha2pPSDRCOHdHeGdpUE50YkJWUnduUnEydE9PTHpodEF5eWNJOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3N0cyI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyNDt9', 1752498091);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'recusandae', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(2, 'nemo', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(3, 'ad', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(4, 'id', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(5, 'recusandae', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(6, 'voluptate', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(7, 'non', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(8, 'quis', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(9, 'repellat', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(10, 'voluptas', '2025-07-02 03:27:32', '2025-07-02 03:27:32'),
(11, 'minima', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(12, 'ipsum', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(13, 'quia', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(14, 'suscipit', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(15, 'dolore', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(16, 'ad', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(17, 'dolorem', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(18, 'magnam', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(19, 'aut', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(20, 'est', '2025-07-07 05:08:04', '2025-07-07 05:08:04'),
(21, 'harum', '2025-07-14 06:48:17', '2025-07-14 06:48:17'),
(22, 'eum', '2025-07-14 06:48:17', '2025-07-14 06:48:17'),
(23, 'delectus', '2025-07-14 06:49:13', '2025-07-14 06:49:13'),
(24, 'reiciendis', '2025-07-14 06:49:13', '2025-07-14 06:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `points` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `points`) VALUES
(24, 'Tushar', 'tsamritsar@gmail.com', NULL, '$2y$12$EqEEqUzEnHLsxVMplF2rtO9OZEJF.H9JSlF3Caz93tS9Ra55dE8Wy', NULL, '2025-07-07 04:55:52', '2025-07-07 04:55:52', 0),
(25, 'nimish', 'nimishmehra8@gmail.com', NULL, '$2y$12$WuHd6cXC/TWPaj7TgtIazeVpCd.5p3aQYYZQTmEJghSkP13ypB9Iu', NULL, '2025-07-07 08:42:49', '2025-07-07 08:42:49', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
