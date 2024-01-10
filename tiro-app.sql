-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 09:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiro-app`
--

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
-- Table structure for table `kapals`
--

CREATE TABLE `kapals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_kapal` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kapals`
--

INSERT INTO `kapals` (`id`, `nm_kapal`, `created_at`, `updated_at`) VALUES
(1, 'KM MUTIARA BARAT', NULL, NULL),
(2, 'KM MUTIARA PERSADA III', NULL, NULL),
(3, 'KM MUTIARA SENTOSA III', NULL, NULL);

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
(85, '2024_01_10_094932_create_kapal_table', 1),
(86, '2014_10_12_000000_create_users_table', 2),
(87, '2014_10_12_100000_create_password_resets_table', 2),
(88, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(89, '2019_08_19_000000_create_failed_jobs_table', 2),
(90, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(91, '2023_12_25_090610_create_sessions_table', 2),
(92, '2024_01_02_101206_create_tikets_table', 2),
(93, '2024_01_10_095248_create_kapals_table', 2);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0suUEJoGrYOUHNdVG3WFW0KCN4sO03S4xN0LpvFI', NULL, '10.13.3.25', 'Mozilla/5.0 (Linux; Android 12; SM-A025F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.88 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZTJNZ3pabUxJNWFwVWhLb3dtYjdrcDZpalMyeHVnWTBmTlg0bUUyUyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cDovLzEwLjEzLjMuMTQ0OjgwMDAvcHJpbnROb3RhIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMC4xMy4zLjE0NDo4MDAwL3ByaW50Tm90YSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1704876069),
('0yeqwTZbnQOqVZWOj1FIcn3yCmQVjvXIPceaPYvZ', 4, '10.13.3.135', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZmNtcVNodHlzQ1o1SkdFSFB4NmlxQXBKTGhqTmlTYklSZnp0a0xHbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly8xMC4xMy4zLjE0NDo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1704876034),
('3jCVVokMMzAurF8fwjlCLTSmj7yyiNJvhSCX90Rj', NULL, '10.13.3.32', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUndqR3NLbkwwYjFNd3F3cmFoU1o5MFVRTkRVQnp3ZXVXcUFBTXI3ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMC4xMy4zLjE0NDo4MDAwL3ByaW50Tm90YSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1704876186),
('Km9PfKrUysGOEQQ6d1f3DsvhgmBThnkbJMz0Kt6z', 4, '10.13.3.135', 'Mozilla/5.0 (Linux; Android 13; SAMSUNG SM-A515F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/23.0 Chrome/115.0.0.0 Mobile Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUEVXRUVURHhycnhjNkdqSzRWVE15cHFSbnhzakVEWW9KZ212cUJHViI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vMTAuMTMuMy4xNDQ6ODAwMC9wcmludE5vdGEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1704875771),
('yuDvdDDkEr51vAt60YnISmryuCUM0TSxO2LtBc1X', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZkRiY3pONGlMRmVUYUdBS0ppbVBvT2FXa0xPRGJjUmxNYUZwR1VrdyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGF0YS92aWV3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1704876539),
('ZFXh11mPNyUJx6UyiznzPV8uVDi54nk085JnrMBP', NULL, '10.13.3.144', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZVI1NzZ4QnJpajFVa3A5Mk1mSmNUcDlHcDRJUFZCdjQ3bUJPY2NacSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMC4xMy4zLjE0NDo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1704876518);

-- --------------------------------------------------------

--
-- Table structure for table `tikets`
--

CREATE TABLE `tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_tiket` varchar(255) NOT NULL,
  `kapal_id` varchar(255) DEFAULT NULL,
  `golongan` varchar(255) DEFAULT NULL,
  `no_plat` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tikets`
--

INSERT INTO `tikets` (`id`, `kd_tiket`, `kapal_id`, `golongan`, `no_plat`, `tujuan`, `harga`, `created_at`, `updated_at`) VALUES
(10, 'TWI-8067', 'KM MUTIARA PERSADA III', 'golongan II', 'P 7865 TYI', 'lembar', '4000000', '2024-01-10 07:39:11', '2024-01-10 07:42:24'),
(11, 'TWI-9664', 'KM MUTIARA SENTOSA III', 'golongan III', 'P 9799 TUI', 'lembar', '4000000', '2024-01-10 07:43:06', '2024-01-10 07:43:06'),
(12, 'TWI-8282', 'KM MUTIARA BARAT', 'golongan I', 'P 7654 YT', 'lembar', '4000000', '2024-01-10 08:03:22', '2024-01-10 08:03:22'),
(13, 'TWI-9843', 'KM MUTIARA PERSADA III', 'golongan III', 'P 8998 YTTT', 'lembar', '4000000', '2024-01-10 08:08:21', '2024-01-10 08:08:21'),
(14, 'TWI-6227', 'KM MUTIARA PERSADA III', 'golongan III', 'P 8998 YTTT', 'lembar', '4000000', '2024-01-10 08:12:47', '2024-01-10 08:12:47'),
(15, 'TWI-3420', 'KM MUTIARA BARAT', 'golongan III', 'pak', 'lembar', '4000000', '2024-01-10 08:33:24', '2024-01-10 08:33:24'),
(16, 'TWI-3814', 'KM MUTIARA BARAT', 'golongan III', 'K 8766565 UIUIU', 'lembar', '4000000', '2024-01-10 08:36:03', '2024-01-10 08:36:03'),
(17, 'TWI-7845', 'KM MUTIARA PERSADA III', 'golongan III', 'P iisdfdifh POPO', 'lembar', '4000000', '2024-01-10 08:40:53', '2024-01-10 08:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nrp` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nrp`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `usertype`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(4, 'admin1', '1234', 'admin1@gmail.com', NULL, '$2y$10$nxiiHR7/1d7KGJahs2NAquOJXFDxwUJAF6q5ByIdP1yMhjXOXi0BS', NULL, NULL, NULL, 'admin', NULL, NULL, NULL, '2024-01-10 07:25:16', '2024-01-10 07:25:16'),
(5, 'kasir1', '4321', 'kasir1@gmail.com', NULL, '$2y$10$MrMRj1I1oKtpL/xg1PnboOsITbreR2.67oKpfthFOeIRT2MJ14jRi', NULL, NULL, NULL, 'kasir', NULL, NULL, NULL, '2024-01-10 07:26:10', '2024-01-10 07:26:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kapals`
--
ALTER TABLE `kapals`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tikets`
--
ALTER TABLE `tikets`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kapals`
--
ALTER TABLE `kapals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tikets`
--
ALTER TABLE `tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
