-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2022 at 04:47 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `header`, `paragraph`, `created_at`, `updated_at`) VALUES
(1, 'Best FastFood', 'Best fas food delivery in your City!', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Burgers', '2022-06-29 10:44:58', '2022-07-24 17:41:48'),
(2, 'Pizza', '2022-06-30 12:03:29', '2022-06-30 12:03:29'),
(5, 'Drinks', '2022-07-07 07:50:01', '2022-07-07 07:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `location`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Praha 5', '775332885', 'best@fastfood.eu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hours`
--

CREATE TABLE `hours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`id`, `days`, `hours`, `created_at`, `updated_at`) VALUES
(1, 'everyday', '10.0 am - 11.0 pm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_29_113212_create_categories_table', 2),
(6, '2022_06_30_141349_create_products_table', 3),
(7, '2022_07_11_104912_create_orders_table', 4),
(8, '2022_07_11_105407_create_order_items_table', 4),
(9, '2022_07_24_113822_create_about_table', 5),
(10, '2022_07_24_124938_create_slider_table', 6),
(11, '2022_07_25_111856_create_reviews_table', 7),
(12, '2022_07_25_124255_create_contact_table', 8),
(13, '2022_07_25_124421_create_social_table', 9),
(14, '2022_07_25_124609_create_hours_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cost` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cost`, `name`, `email`, `status`, `city`, `address`, `phone`, `date`, `created_at`, `updated_at`) VALUES
(36, '20', 'Petr Bělohoubek', 'petr.zelinka95@gmail.com', 'Delivered', 'Praha', 'Vrážská 2 Radotín 153 00', '608387092', '2022-07-24', NULL, '2022-07-24 17:27:56'),
(37, '200', 'Petr Bělohoubek', 'petr.zelinka95@gmail.com', 'Delivered', 'Praha', 'Vrážská 2 Radotín 153 00', '608387092', '2022-07-24', NULL, '2022-07-24 17:28:00'),
(38, '20', 'Petr Bělohoubek', 'petr.zelinka95@gmail.com', 'Delivered', 'Praha', 'Vrážská 2 Radotín 153 00', '777888555', '2022-07-24', NULL, '2022-07-24 17:28:05'),
(40, '20', 'Burger', 'ahoj@email.com', 'Delivered', 'Brno', 'Vrážská 2 Radotín 153 00', '608387092', '2022-07-24', NULL, '2022-07-25 11:56:40'),
(41, '25', 'Tomáš Hlad', 'tomas@hlad.com', 'Delivered', 'Praha 5', 'Barrandov 15', '88563215', '2022-07-24', NULL, '2022-07-24 18:49:05'),
(42, '90', 'Zdenek Zbořil', 'zdenek@zboril.com', 'Delivered', 'Praha', 'Ulice v Praze', '523658965', '2022-07-24', NULL, '2022-07-25 11:56:43'),
(43, '100', 'Petr Bělohoubek', 'petr.zelinka95@gmail.com', 'Delivered', 'Praha', 'Vrážská 2 Radotín 153 00', '608387092', '2022-07-25', NULL, '2022-07-25 11:56:45'),
(44, '160', 'Josev Hladný', 'hladny@josev.com', 'Delivered', 'Praha 5', 'Plzeňská 15', '885236452', '2022-07-25', NULL, '2022-07-25 12:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_image`, `product_quantity`, `order_date`, `created_at`, `updated_at`) VALUES
(1, 21, 1, 'Chesseburger', '21.9', 'images/62c449588fec5.jpg', 3, '2022-07-11', NULL, NULL),
(2, 21, 2, 'Pizza', '20', 'images/62bddd0bd07c5.jpg', 2, '2022-07-11', NULL, NULL),
(3, 21, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 1, '2022-07-11', NULL, NULL),
(4, 22, 1, 'Chesseburger', '21.9', 'images/62c449588fec5.jpg', 3, '2022-07-11', NULL, NULL),
(5, 22, 2, 'Pizza', '20', 'images/62bddd0bd07c5.jpg', 2, '2022-07-11', NULL, NULL),
(6, 22, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 1, '2022-07-11', NULL, NULL),
(7, 23, 2, 'Pizza', '20', 'images/62bddd0bd07c5.jpg', 2, '2022-07-11', NULL, NULL),
(8, 23, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 1, '2022-07-11', NULL, NULL),
(9, 24, 1, 'Chesseburger', '21.9', 'images/62c449588fec5.jpg', 4, '2022-07-11', NULL, NULL),
(10, 24, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 1, '2022-07-11', NULL, NULL),
(11, 25, 1, 'Chesseburger', '21.9', 'images/62c449588fec5.jpg', 2, '2022-07-11', NULL, NULL),
(12, 25, 2, 'Pizza', '20', 'images/62bddd0bd07c5.jpg', 1, '2022-07-11', NULL, NULL),
(13, 26, 1, 'Chesseburger', '21.9', 'images/62c449588fec5.jpg', 4, '2022-07-11', NULL, NULL),
(14, 26, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 2, '2022-07-11', NULL, NULL),
(15, 27, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 2, '2022-07-11', NULL, NULL),
(16, 27, 1, 'Chesseburger', '21.9', 'images/62c449588fec5.jpg', 4, '2022-07-11', NULL, NULL),
(17, 28, 1, 'Chesseburger', '21.9', 'images/62c449588fec5.jpg', 2, '2022-07-22', NULL, NULL),
(18, 28, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 1, '2022-07-22', NULL, NULL),
(19, 29, 1, 'Chesseburger', '21.9', 'images/62c449588fec5.jpg', 1, '2022-07-24', NULL, NULL),
(20, 30, 1, 'Chesseburger', '21.9', 'images/62c449588fec5.jpg', 2, '2022-07-24', NULL, NULL),
(21, 34, 2, 'Pizza', '20', 'images/62bddd0bd07c5.jpg', 1, '2022-07-24', NULL, NULL),
(22, 35, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 1, '2022-07-24', NULL, NULL),
(23, 36, 2, 'Pizza', '20', 'images/62bddd0bd07c5.jpg', 1, '2022-07-24', NULL, NULL),
(24, 37, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 2, '2022-07-24', NULL, NULL),
(25, 38, 2, 'Pizza', '20', 'images/62bddd0bd07c5.jpg', 1, '2022-07-24', NULL, NULL),
(26, 39, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 1, '2022-07-24', NULL, NULL),
(27, 39, 5, 'Cola', '5', 'images/62dd9bdb933f2.jpg', 1, '2022-07-24', NULL, NULL),
(28, 40, 2, 'Pizza', '20', 'images/62bddd0bd07c5.jpg', 1, '2022-07-24', NULL, NULL),
(29, 41, 2, 'Pizza', '20', 'images/62bddd0bd07c5.jpg', 1, '2022-07-24', NULL, NULL),
(30, 41, 5, 'Cola', '5', 'images/62dd9bdb933f2.jpg', 1, '2022-07-24', NULL, NULL),
(31, 42, 5, 'Cola', '5', 'images/62dd9bdb933f2.jpg', 2, '2022-07-24', NULL, NULL),
(32, 42, 1, 'Chesseburger', '20', 'images/62c449588fec5.jpg', 4, '2022-07-24', NULL, NULL),
(33, 43, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 1, '2022-07-25', NULL, NULL),
(34, 44, 4, 'Royal chesse', '100', 'images/62c6b77f79318.png', 1, '2022-07-25', NULL, NULL),
(35, 44, 1, 'Chesseburger', '25', 'images/62c449588fec5.jpg', 2, '2022-07-25', NULL, NULL),
(36, 44, 5, 'Cola', '5', 'images/62dd9bdb933f2.jpg', 2, '2022-07-25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_price` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories_id`, `name`, `description`, `price`, `sale_price`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chesseburger', 'Z měkáče', '25', NULL, 5, 'images/62c449588fec5.jpg', '2022-06-30 15:26:56', '2022-07-25 12:03:37'),
(2, 2, 'Pizza', 'Ostrá pizza', '20', NULL, 6, 'images/62bddd0bd07c5.jpg', '2022-06-30 15:27:39', '2022-07-24 18:48:34'),
(4, 1, 'Royal chesse', 'Royal chesse z mekáče', '100', NULL, 9, 'images/62c6b77f79318.png', '2022-07-07 08:37:51', '2022-07-25 12:03:37'),
(5, 5, 'Cola', 'Coca-cola', '5', NULL, 4, 'images/62dd9bdb933f2.jpg', '2022-07-24 17:19:53', '2022-07-25 12:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `paragraph`, `name`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Pizza is the best!', 'Klára Nová', 'Local girl', 'images/62de8a9f27ed1.jpg', NULL, NULL),
(3, 'Burger is the best!', 'Jaroslav Vítek', 'Local guy', 'images/62de8abbb6c9e.jpg', NULL, NULL),
(4, 'The best project ever!', 'Petr Bělohoubek', 'CEO', 'images/62de8bedd3421.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `header`, `paragraph`, `created_at`, `updated_at`) VALUES
(1, 'Burgers', 'Great burgers!', NULL, NULL),
(2, 'Pizza', 'Awesome Pizza!', NULL, NULL),
(4, 'Soft Drinks', 'Sweet sweet drinks!', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `paragraph`, `facebook`, `twitter`, `linkedin`, `instagram`, `pinterest`, `created_at`, `updated_at`) VALUES
(1, 'Fallow social media for more!', 'https://facebook.com/restaurant', 'https://twitter.com/restaurant', 'https://linkedin.com/restaurant', 'https://instagram.com/restaurant', 'https://pinterest.com/restaurant', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$TZWaAZ6NVwzCPf5gBXDpEux3zojf1ZJ840vwYhUTwlqmqCKnOmOWa', NULL, '2022-06-29 08:56:19', '2022-06-29 08:56:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hours`
--
ALTER TABLE `hours`
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
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hours`
--
ALTER TABLE `hours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
