-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 06:40 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel5_product`
--

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2017_06_20_111748_products_tbl', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productstbl`
--

CREATE TABLE `productstbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(11,2) NOT NULL,
  `home_office` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productstbl`
--

INSERT INTO `productstbl` (`id`, `title`, `description`, `photo`, `price`, `home_office`, `type`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Test', 'Test Desc', '1498207949_3420.jpg', '1.00', 0, '2', 0, '2017-06-21 00:25:23', '2017-06-23 03:44:01'),
(8, 'Testing', 'About Product', '1498040409_1446.jpg', '76887.00', 1, '2', 1, '2017-06-21 03:50:09', '2017-06-21 03:50:09'),
(9, 'Test2', 'Desc2', '1498042960_6421.jpg', '10000.00', 1, '1', 0, '2017-06-21 04:32:40', '2017-06-21 04:32:40'),
(10, 'TestingTitle', 'TenTestDescription', '1498207473_5222.jpg', '2.00', 1, '2', 1, '2017-06-21 04:38:24', '2017-06-23 04:19:08'),
(11, 'Picture11', 'Home use', '1498187763_4036.jpg', '400.00', 1, '1', 1, '2017-06-22 20:46:03', '2017-06-27 02:57:05'),
(13, 'Pic', 'Description Test', '1498187954_9513.jpg', '80000.00', 0, '1', 0, '2017-06-22 20:49:14', '2017-06-22 20:49:14'),
(14, 'FlowerPic', 'Test', '1498187990_9104.jpg', '10000.00', 1, '1', 1, '2017-06-22 20:49:50', '2017-06-22 20:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dWTQ2eh7UL', 'hw6pZrLpMf@gmail.com', '$2y$10$uBnxVN6npuiXRnaGFYycQ.UGeKA8DSe4.8dEJz2rnl7JN4JwxbIp2', NULL, NULL, NULL),
(2, 'WaiMar', 'waimar@gmail.com', '$2y$10$sZw54wTNrkpb/N3hv3jnQupUKnciosLJ1EBf3EG/DWT7ljZjawKdq', 'yTPPDkLUwTMIJlToATCRlgUCLR6352cdr4OxYRMiZ68N3cEQjhXvlZG4b4CX', '2017-06-20 04:13:06', '2017-06-20 04:13:06');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `productstbl`
--
ALTER TABLE `productstbl`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `productstbl`
--
ALTER TABLE `productstbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
