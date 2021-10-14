-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 01:32 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `address`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'boipotro@gmail.com', NULL, 'qwqw', 1234, '$2y$10$0B70lHP0TdcbMrJtzyXXT.X0fEbhGyBocnJcBd8cpwjsubDMvAru6', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Science', '2019-09-18 01:05:35', '2019-09-18 01:05:35'),
(2, 'Commerce', '2019-09-18 01:05:42', '2019-09-18 01:05:42'),
(3, 'Physics', '2019-09-18 01:05:49', '2019-09-18 01:05:49'),
(4, 'Mathematics', '2019-09-18 01:05:57', '2019-09-18 01:05:57'),
(5, 'Biology', '2019-09-18 01:06:03', '2019-09-18 01:06:03'),
(6, 'Geography', '2019-09-18 01:06:10', '2019-09-18 01:06:10'),
(7, 'History', '2019-09-18 01:06:24', '2019-09-18 01:06:24'),
(8, 'Islamic Books', '2019-09-18 01:06:38', '2019-09-18 01:06:38'),
(9, 'Programming', '2019-09-18 01:07:12', '2019-09-18 01:07:12'),
(10, 'Data Structure', '2019-09-18 01:07:18', '2019-09-18 01:07:18'),
(11, 'Mythology', '2019-09-18 01:07:43', '2019-09-18 01:07:43'),
(12, 'Science Fiction', '2019-09-18 01:07:58', '2019-09-18 01:07:58'),
(13, 'Finance & Banking', '2019-09-18 01:08:26', '2019-09-18 01:08:26'),
(14, 'Marketting', '2019-09-18 01:08:32', '2019-09-18 01:08:32'),
(15, 'Electronics', '2019-09-18 01:10:23', '2019-09-18 01:10:23'),
(16, 'Social Science', '2019-09-18 01:10:39', '2019-09-18 01:10:39'),
(17, 'Sociology', '2019-09-18 01:10:45', '2019-09-18 01:10:45'),
(18, 'Poetry', '2019-09-18 01:11:25', '2019-09-18 01:11:25'),
(19, 'Anthology', '2019-09-18 01:11:32', '2019-09-18 01:11:32'),
(20, 'Fantasy', '2019-09-18 01:14:18', '2019-09-18 01:14:18'),
(21, 'Drama', '2019-09-18 01:14:22', '2019-09-18 01:14:22'),
(22, 'Comic', '2019-09-18 01:23:18', '2019-09-18 01:23:18'),
(23, 'Short Strory', '2019-09-18 01:23:44', '2019-09-18 01:23:44'),
(24, 'Political Science', '2019-09-18 01:23:54', '2019-09-18 01:23:54'),
(25, 'English', '2019-09-18 01:24:06', '2019-09-18 01:24:06'),
(26, 'Biotechnology', '2019-09-18 01:24:16', '2019-09-18 01:24:16'),
(28, 'Horror', '2019-09-18 02:15:53', '2019-09-18 02:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `post_id`, `Created_at`, `Updated_at`) VALUES
(1, 'How much does this book cost?', 1, 1, '2019-10-30 21:07:40', '2019-10-30 21:07:40'),
(2, 'I need this book', 1, 2, '2019-10-30 21:16:51', '2019-10-30 21:16:51'),
(3, 'Tell me the last price', 1, 2, '2019-10-30 21:17:11', '2019-10-30 21:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `message` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_03_080642_create_admintable', 1),
(4, '2019_08_07_052335_create_categories_table', 1),
(5, '2019_08_21_110016_create_posts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(20) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `category_id` int(30) NOT NULL,
  `description` varchar(150) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `price` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `comment_id` int(10) DEFAULT NULL,
  `rating_id` int(10) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `bookname`, `category_id`, `description`, `phonenumber`, `image`, `price`, `user_id`, `comment_id`, `rating_id`, `Created_at`, `Updated_at`) VALUES
(1, 'The Complete Reference Java by Herbert Schield', 9, 'I bought this book 1 years ago. Now i want to sell this book. if anyone wants to buy then contact with me', 1987876233, '1572489448.jpg', '200 taka', 1, NULL, NULL, '2019-10-30 20:37:28', '2019-10-30 20:37:28'),
(2, 'A textbook of Biotechnology', 26, 'Its a rare book. Old version version is not available. If you need this book then contact with me.', 1234567, '1572489590.jpg', '400 taka', 1, NULL, NULL, '2019-10-30 20:39:50', '2019-10-30 20:39:50'),
(3, 'Mythology by Jim Tierney', 11, 'It is an antique book. You cant find it in all bookstore.', 1987871212, '1572489800.jpg', '400 taka', 1, NULL, NULL, '2019-10-30 20:43:20', '2019-10-30 20:43:20'),
(4, 'Discrete Mathematics by Seymour Lipschutz', 4, 'I want to sell this book .if you wants to buy then contact with me.', 19878762, '1572490118.jpg', '200 taka', 1, NULL, NULL, '2019-10-30 20:48:38', '2019-10-30 20:48:38'),
(5, 'From Mtahematics to Generic Programming', 4, 'I bought this two years ago. Overall book condition is good. if you wants to buy then contact with me.', 1234567, '1572490396.jpg', '300 taka', 1, NULL, NULL, '2019-10-30 20:53:16', '2019-10-30 20:53:16'),
(6, 'C programming Language by Darrel L. Graham', 9, 'I want  to sell this book. if you need this then contact.', 1987876267, '1572490785.jpg', '300 taka', 1, NULL, NULL, '2019-10-30 20:59:45', '2019-10-30 20:59:45'),
(7, 'Islam-An introduction by Yusuf Al - Qaradawi', 8, 'I want to sell this book.', 1987871212, '1572491445.jpg', '500 taka', 3, NULL, NULL, '2019-10-30 21:10:45', '2019-10-30 21:10:45'),
(8, 'World Histroy by Krisna Reddy', 7, 'I want to sell this book.', 1987876233, '1572491556.jpg', '500 taka', 3, NULL, NULL, '2019-10-30 21:12:36', '2019-10-30 21:12:36'),
(9, 'Quantum Physics by Carl Weston', 3, 'Its a rare book. you cant find this book in all market. if you need it then contact with me.', 1987871212, '1572491733.jpg', '600 taka', 3, NULL, NULL, '2019-10-30 21:15:33', '2019-10-30 21:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) NOT NULL,
  `rating` int(10) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `Created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating`, `user_id`, `post_id`, `Created_at`, `Updated_at`) VALUES
(1, 5, 1, 1, '2019-10-30 21:07:44', '2019-10-30 21:07:44'),
(2, 3, 1, 1, '2019-10-30 21:16:34', '2019-10-30 21:16:34'),
(3, 5, 1, 2, '2019-10-30 21:17:23', '2019-10-30 21:17:23'),
(4, 3, 1, 2, '2019-10-30 21:17:30', '2019-10-30 21:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `address`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sunjid', 'sarwarsunjid@gmail.com', NULL, '1234', 1, '$2y$10$LpcjOsI/6b/qe9o5WmRe9OY7YnDk76FlM587MrK9gY.hweYsYCLey', NULL, '2019-08-21 05:50:53', '2019-08-21 05:50:53'),
(2, 'Opi', 'ssunjid@yahoo.com', NULL, 'Khilgaon', 191, '$2y$10$0B70lHP0TdcbMrJtzyXXT.X0fEbhGyBocnJcBd8cpwjsubDMvAru6', NULL, '2019-08-24 01:38:56', '2019-08-24 01:38:56'),
(3, 'pool', 's@gmail.com', NULL, 'farmgate', 123, '$2y$10$t4rjim0a5plSGSjD.hw8RO4nqTlBVmfUeAwbfOMjDb9lHvbQGUD16', NULL, '2019-08-27 12:29:01', '2019-08-27 12:29:01'),
(4, 'shamim', 'a@gmail.com', NULL, 'khil', 19145, '$2y$10$tplMLvei4hUlObYcbl1A7eYWuAk6bhAAlkJzBE6SRVMrUuM3eTFxm', NULL, '2019-10-30 20:06:56', '2019-10-30 20:06:56');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
