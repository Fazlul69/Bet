-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 01, 2020 at 04:54 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bets_for_matches`
--

CREATE TABLE `bets_for_matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) NOT NULL,
  `bet_option_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bets_for_matches`
--

INSERT INTO `bets_for_matches` (`id`, `match_id`, `bet_option_id`, `created_at`, `updated_at`) VALUES
(1, 4, 5, NULL, NULL),
(2, 4, 3, NULL, NULL),
(3, 4, 4, NULL, NULL),
(4, 4, 6, NULL, NULL),
(5, 4, 2, NULL, NULL),
(6, 3, 3, '2020-03-28 22:23:22', '2020-03-28 22:23:22'),
(7, 3, 5, '2020-03-28 22:23:32', '2020-03-28 22:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `bet_options`
--

CREATE TABLE `bet_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isMultipleSupported` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bet_options`
--

INSERT INTO `bet_options` (`id`, `name`, `description`, `type`, `isMultipleSupported`, `created_at`, `updated_at`) VALUES
(1, '1st ball out', NULL, NULL, 1, '2020-03-10 14:02:40', '2020-03-10 14:02:40'),
(2, 'duck on 1st ball', NULL, NULL, 1, '2020-03-10 14:03:10', '2020-03-10 14:03:10'),
(3, 'To win toss', NULL, NULL, 0, '2020-03-10 14:03:44', '2020-03-10 14:03:44'),
(4, '1st ball of 1st innings', NULL, NULL, 1, '2020-03-10 14:04:20', '2020-03-10 14:04:20'),
(5, '1st over run of 1st innings', NULL, NULL, 1, '2020-03-21 13:31:39', '2020-03-21 13:31:39'),
(6, '1st innings total runs', NULL, NULL, 1, '2020-03-21 13:46:31', '2020-03-21 13:46:31'),
(7, 'Armando Terrell', NULL, NULL, 1, '2020-03-28 21:27:17', '2020-03-28 21:27:17'),
(8, 'Mechelle Lindsey', NULL, NULL, 0, '2020-03-28 21:34:37', '2020-03-28 21:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `bet_option_details`
--

CREATE TABLE `bet_option_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` decimal(8,2) UNSIGNED DEFAULT NULL,
  `bets_for_match_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bet_option_details`
--

INSERT INTO `bet_option_details` (`id`, `name`, `value`, `bets_for_match_id`, `created_at`, `updated_at`) VALUES
(1, '1.5', '1.30', 6, '2020-03-28 23:18:19', '2020-03-28 23:18:19'),
(2, '1.54', '1.10', 2, '2020-03-28 23:30:08', '2020-03-29 00:08:28'),
(4, '200-250', '1.50', 4, '2020-03-29 00:27:57', '2020-03-29 00:27:57'),
(5, '1 run', '0.50', 3, '2020-03-29 00:28:50', '2020-03-29 00:28:50'),
(6, '1-3 run', '0.50', 1, '2020-03-29 00:31:03', '2020-03-29 00:31:03'),
(7, '4-7 run', '1.00', 1, '2020-03-29 00:31:03', '2020-03-29 00:31:03'),
(8, '8-11 run', '1.25', 1, '2020-03-29 00:31:03', '2020-03-29 00:39:27'),
(9, '12-16 run', '1.50', 1, '2020-03-29 00:31:03', '2020-03-29 00:40:12'),
(10, '17-30 run', '2.00', 1, '2020-03-29 00:40:12', '2020-03-29 00:40:12'),
(11, '251-300', '1.75', 4, '2020-03-29 00:41:08', '2020-03-29 00:41:08'),
(12, '2 run', '0.75', 3, '2020-03-29 00:52:29', '2020-03-29 20:02:27'),
(13, '4 run', '1.00', 3, '2020-03-29 20:02:27', '2020-03-29 20:02:27'),
(14, '6 run', '1.25', 3, '2020-03-29 20:02:27', '2020-03-29 20:02:27'),
(15, 'no ball', '2.00', 3, '2020-03-29 20:02:27', '2020-03-29 20:02:27'),
(16, 'wide', '1.75', 3, '2020-03-29 20:02:27', '2020-03-29 20:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_time` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `team1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tournament_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unique_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `name`, `match_time`, `status`, `team1`, `team2`, `tournament_id`, `created_at`, `updated_at`, `unique_id`) VALUES
(1, 'dsfs', '2020-03-08', 0, 'dhk', 'ctg', 1, '2020-03-09 11:34:12', '2020-03-09 11:34:12', NULL),
(2, 'some', '2003-12-20', 0, 'Nz', 'Ind', 3, '2020-03-10 14:07:03', '2020-03-10 14:07:03', NULL),
(3, 'Armando Terrell', '2020-04-02', 1, 'victoria', 'tasmania', 3, '2020-03-19 13:21:45', '2020-03-19 13:21:45', '1196143'),
(4, 'nothing', '2020-04-01', 1, 'Sri lanka', 'England', 3, '2020-03-20 23:35:55', '2020-03-20 23:35:55', '1204856');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2020_03_04_183053_create_roles_table', 1),
(8, '2020_03_04_183307_create_role_user_table', 1),
(9, '2020_03_05_153652_create_tournaments_table', 1),
(10, '2020_03_05_153742_create_matches_table', 1),
(11, '2020_03_10_152921_create_bet_options_table', 2),
(12, '2020_03_10_153032_create_bet_option_details_table', 3),
(13, '2020_03_19_191907_add_col_matches_table', 4),
(14, '2020_03_21_193410_create_bets_for_matches_table', 5),
(15, '2020_03_30_022509_create_placed_bets_table', 6),
(16, '2020_03_31_075554_create_transactions_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `placed_bets`
--

CREATE TABLE `placed_bets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bets_for_match_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `bet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bet_value` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'All aaccess', NULL, NULL),
(2, 'Editor', 'Moderate access', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `name`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'bpl 2020', 'bangladesh premier league t-20 cricket', NULL, '2020-03-07 11:21:08', '2020-03-07 11:21:08'),
(2, 'Ipl 2020', 'indian premier league t-20 cricket', NULL, '2020-03-07 12:04:17', '2020-03-07 12:04:17'),
(3, 'Nothing', NULL, NULL, '2020-03-09 11:32:06', '2020-03-09 11:32:06'),
(4, 'ICC ODi international', NULL, NULL, '2020-03-20 23:39:15', '2020-03-20 23:39:15'),
(5, 'icc t20 international', NULL, NULL, '2020-03-20 23:39:34', '2020-03-20 23:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mobile` smallint(5) UNSIGNED NOT NULL,
  `txn_id` smallint(5) UNSIGNED DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Yasin Shamrat', 'yshamrat@gmail.com', NULL, '$2y$10$6852uAObhLTX7plNJfmxDes7gC6iTCMigpV9hbxRH0WAoPjjHWHEy', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bets_for_matches`
--
ALTER TABLE `bets_for_matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bet_options`
--
ALTER TABLE `bet_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bet_option_details`
--
ALTER TABLE `bet_option_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placed_bets`
--
ALTER TABLE `placed_bets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bets_for_matches`
--
ALTER TABLE `bets_for_matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bet_options`
--
ALTER TABLE `bet_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bet_option_details`
--
ALTER TABLE `bet_option_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `placed_bets`
--
ALTER TABLE `placed_bets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
