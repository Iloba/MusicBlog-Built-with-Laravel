-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 01:25 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `ad_image`, `body`, `created_at`, `updated_at`) VALUES
(9, 'Ummi\'s Cakes and Bakes', 'fem_artwork_1600355098.jpg', 'Ummi\'s Cakes and Bakes Ummi\'s Cakes and Bakes Ummi\'s Cakes and Bakes Ummi\'s Cakes and Bakes', '2020-09-17 14:04:58', '2020-09-17 14:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Emeka Iloba', 'Good Song', '2020-09-15 14:36:54', '2020-09-15 14:36:54'),
(2, 'Timothy Iloba', 'Mad Jam Joor you try Guy', '2020-09-15 14:40:47', '2020-09-15 14:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_09_09_202934_create_posts_table', 1),
(5, '2020_09_15_123809_add_user_id_to_posts', 2),
(6, '2020_09_15_152321_create_comments_table', 3),
(7, '2020_09_16_092100_create_ads_table', 4);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `audiomack_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artiste_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `cover_image`, `heading_text`, `body`, `audiomack_link`, `music`, `youtube_link`, `artiste_link`, `created_at`, `updated_at`) VALUES
(11, 1, 'WIzkid', '64248610_312066929696539_1306011801964921638_n_1600180997.jpg', 'Davido  Drops Fem Latest Single', 'The baddest Releases a New Song Titled Fem', 'https://audiomack.com', 'Davido-Fem-(JustNaija.com).mp3', 'Obo', 'Obo', '2020-09-14 15:44:27', '2020-09-15 13:43:18'),
(12, 1, 'Mayorkun Betty Butter', 'betty_butter_1600162991.jpg', 'Mayorkun Realses New Banger with DMW Boss Titled Bettty Butter', 'Mayorkun Realses New Banger with DMW Boss Titled Bettty Butter', 'audiomack.com/mayorkun', 'Mayorkun-Ft.-Davido-Betty-Butter.mp3', 'youtube.com/dmw', 'instagram.com/icejo', '2020-09-15 08:43:14', '2020-09-15 08:43:14'),
(14, 1, 'Betty Butter By Mayorkun Ft Davido Remix', 'betty_butter_1600174678.jpg', 'DMW Lords Out now with a banger titled Betty Butter Remix', 'DMW Lords Out now with a banger titled Betty Butter Remix', 'https://audiomack.com', 'Mayorkun-Ft.-Davido-Betty-Butter.mp3', 'Obo', 'Obo', '2020-09-15 11:58:01', '2020-09-15 11:58:01'),
(16, 1, 'Olaskira In My Maserati', 'olakira-in-my-maserati_1600255278.jpg', 'Olaskira Drops a Banger Titled In My Maserati', 'Olaskira In My Maserati', 'https://audiomack.com', 'Olakira-In-My-Maserati.mp3', 'youtube.com/dmw', 'instagram.com/icejo', '2020-09-16 10:21:19', '2020-09-16 10:21:19'),
(17, 1, 'Davido Fem', 'fem_artwork_1600330217.jpg', 'The baddest Releases a New Song Titled Fem', 'The baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled FemThe baddest Releases a New Song Titled Fem', 'https://audiomack.com', 'Davido-Fem-(JustNaija.com).mp3', 'youtube.com/dmw', 'instagram.com/icejo', '2020-09-17 07:10:17', '2020-09-17 07:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Emeka Iloba', 'scarlettsney@gmail.com', NULL, '$2y$10$KN8j6vwp18A3QzI5PVLlp.zMriCmqpII0aZo87tBsQHCfZl7VJlF2', NULL, '2020-09-15 10:44:19', '2020-09-15 10:44:19'),
(2, 'Timothy Iloba', 'ilobatimothy@gmail.com', NULL, '$2y$10$ygvbDhcAjDfxAnnkE6imL.7eUrpB9MlooZqx57KjqA0rzxt4UTLk6', NULL, '2020-09-15 12:17:53', '2020-09-15 12:17:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
