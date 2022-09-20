-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 05:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctors_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_date` date NOT NULL,
  `visiting_reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_before` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `doctors_id`, `name`, `phone`, `email`, `booking_date`, `visiting_reason`, `visit_before`, `document`, `created_at`, `updated_at`) VALUES
(1, 0, 'Sohel Sikder', '6546554556', 'cse.sohelsikder@gmail.com', '2022-06-16', 'o;uyfg', 'No', 'C:\\xampp\\tmp\\php5D08.tmp', '2022-06-16 10:23:11', '2022-06-16 10:23:11'),
(2, 4, 'Dr. Hassan Mahmud', '2151', 'hassan@gmail.com', '2022-09-15', 'njmhk', 'No', '1662746955.png', '2022-09-09 12:09:15', '2022-09-09 12:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(10) NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialist_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `doc_image`, `type`, `education`, `address`, `email`, `phone`, `specialist_id`, `price`, `date_of_birth`, `available_time`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dr.Kamal', NULL, 0, 'MBMS in Dhaka Medical College\r\nFCPS in London', 'Mirpur 11 Dhaka -1216.', 'test.doctor@gmail.com', '01476-xxxxxxx', '1', '500', NULL, '9:00 to 10:00', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like', NULL, NULL),
(2, 'Dr.jamal', NULL, 0, 'MBMS in Dhaka Medical College\r\nFCPS in London', 'Mirpur 11 Dhaka -1216.', 'test.doctor@gmail.com', '01476-xxxxxxx', '10', '500', NULL, '9:00 to 10:00', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', NULL, NULL),
(3, 'Dr. karim ', NULL, 0, 'MBMS in Dhaka Medical College\r\nFCPS in London', 'Mirpur 11 Dhaka -1216.', 'test.doctor@gmail.com', '01476-xxxxxxx', '3', '500', NULL, '9:00 to 10:00', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like', NULL, NULL),
(4, 'Dr. Muhib', NULL, 0, 'MBMS in Dhaka Medical College\r\nFCPS in London', 'Mirpur 11 Dhaka -1216.', 'test.doctor@gmail.com', '01476-xxxxxxx', '3', '500', NULL, '9:00 to 10:00', 'fdls;akjfalsjdflkjlkfjaljfdklj lajkd f;s rajtqahldfh oahgrj nweojoj', NULL, NULL),
(5, 'Dr. Sanjana', NULL, 0, 'MBMS in Dhaka Medical College\r\nFCPS in London', 'Mirpur 11 Dhaka -1216.', 'test.doctor@gmail.com', '01476-xxxxxxx', '5', '500', NULL, '9:00 to 10:00', 'fdls;akjfalsjdflkjlkfjaljfdklj lajkd f;s rajtqahldfh oahgrj nweojoj', NULL, NULL),
(6, 'Dr. Afia jahin', NULL, 0, 'MBMS in Dhaka Medical College\r\nFCPS in London', 'Mirpur 11 Dhaka -1216.', 'test.doctor@gmail.com', '01476-xxxxxxx', '6', '500tk', NULL, '9:00 to 10:00', 'fdls;akjfalsjdflkjlkfjaljfdklj lajkd f;s rajtqahldfh oahgrj nweojoj', NULL, NULL),
(7, 'Dr. Sanjana', NULL, 0, 'MBMS in Dhaka Medical College\r\nFCPS in London', 'Mirpur 11 Dhaka -1216.', 'test.doctor@gmail.com', '01476-xxxxxxx', '3', '500', NULL, '9:00 to 10:00', 'fdls;akjfalsjdflkjlkfjaljfdklj lajkd f;s rajtqahldfh oahgrj nweojoj', NULL, NULL),
(8, 'Dr. Sanjana', NULL, 0, 'MBMS in Dhaka Medical College\r\nFCPS in London', 'Mirpur 11 Dhaka -1216.', 'test.doctor@gmail.com', '01476-xxxxxxx', '4', '500', NULL, '9:00 to 10:00', 'fdls;akjfalsjdflkjlkfjaljfdklj lajkd f;s rajtqahldfh oahgrj nweojoj', NULL, NULL),
(9, 'Dr. Hassan Mahmud', '1662746088.png', 2, 'M.B.B.S', 'Mirpur-11 , Dhaka-1216', 'hassan@gmail.com', '01401277701', '1', '700', '1990-03-12', NULL, NULL, '2022-09-09 11:54:48', '2022-09-09 11:54:48'),
(10, 'Dr. Mohammad Ebrahim', 'backend/img/doctorImage/1662749354.png', 2, 'Equivalent M.B.B.S', 'Mirpur-11 , Dhaka-1216', 'ebrahim@gmail.com', '014012377701', '6', '700', '2022-09-10', NULL, NULL, '2022-09-09 12:49:14', '2022-09-09 12:49:14');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_23_162151_create_sessions_table', 1),
(7, '2022_05_26_173413_create_doctors_table', 2),
(8, '2022_05_31_165340_create_specialists_table', 3),
(9, '2022_06_11_165008_create_posts_table', 4),
(10, '2022_06_14_171715_create_bookings_table', 5);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `feature_image`, `created_at`, `updated_at`) VALUES
(1, 'Benefiting from healthcare shouldn’t be a matter of luck.', 'New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis admit.', 'asset(\'fontend/images/blog/blog-grid/3.jpg\')', NULL, NULL),
(2, 'Benefiting from healthcare shouldn’t be a matter of luck 2.', 'New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis admit.', 'asset(\'fontend/images/blog/blog-grid/3.jpg\')', NULL, NULL),
(3, 'Benefiting from healthcare shouldn’t be a matter of luck 3.', 'New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis admit.', 'asset(\'fontend/images/blog/blog-grid/3.jpg\')', NULL, NULL),
(4, 'Benefiting from healthcare shouldn’t be a matter of luck 4.', 'New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis admit.', 'asset(\'fontend/images/blog/blog-grid/3.jpg\')', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('SwR2zltON2R33Wkz7Z8yKXkeB23h910kljS5pr7q', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYm5aNWwwbjdlRjFqOUxZd0p0dzU2aHk1dGFvR2M3cHNJRGJoZHk0QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkdUtlZS9JOTRpWGJ4L0pvYjlYYy85dS5jbTU4UllXS0pFd0N5SnBmcGdjeDdTSWJnWnpYQlMiO30=', 1662749847);

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialists`
--

INSERT INTO `specialists` (`id`, `name`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Emergency Doctor', '0000-00-00 00:00:00', NULL, ''),
(3, 'Gynecology', '0000-00-00 00:00:00', NULL, ''),
(4, 'Neuromedicine', '0000-00-00 00:00:00', NULL, ''),
(5, 'Orthopedics', '0000-00-00 00:00:00', NULL, ''),
(6, 'Hematologist', '0000-00-00 00:00:00', NULL, ''),
(7, 'Cancer Specialist\r\n', '0000-00-00 00:00:00', NULL, ''),
(8, 'Skin Specialist', '0000-00-00 00:00:00', NULL, ''),
(9, 'Sex Specialist', '0000-00-00 00:00:00', NULL, ''),
(10, 'Dentists', '0000-00-00 00:00:00', NULL, ''),
(11, 'Medicine Specialist', '0000-00-00 00:00:00', NULL, ''),
(12, 'Corona', '2022-09-09 12:22:19', '2022-09-09 12:22:19', 'backend/img/category/1743517373630202.png');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Md.Sohel', 'admin@gmail.com', NULL, '$2y$10$uKee/I94iXbx/Job9Xc/9u.cm58RYWKJEwCyJpfpgcx7SIbgZzXBS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-23 11:06:10', '2022-05-23 11:06:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `specialists`
--
ALTER TABLE `specialists`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
