-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 08:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `judul`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Judul Kesatu', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad sunt, sed tenetur incidunt optio dicta rem eos\r\n            distinctio sint aliquam quos unde officia cupiditate laudantium repudiandae. Doloremque incidunt sint iure dolorum\r\n            tempora quibusdam temporibus quis voluptatem eaque illum quia, error iusto ipsum cumque vero cupiditate accusantium\r\n            officia obcaecati nesciunt voluptatum?', '2022-04-08 20:20:15', '2022-04-09 04:45:53'),
(2, 'Judul Kedua', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia incidunt harum ratione pariatur officia fugiat accusamus dolor praesentium enim eaque.', '2022-04-08 20:33:15', '2022-04-08 20:33:15');

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
-- Table structure for table `landings`
--

CREATE TABLE `landings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landings`
--

INSERT INTO `landings` (`id`, `tittle`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Assallammualaikum SELAMAT DATANG DI WEBSITE CASCOM', 'WEBSITE INI MENJUAL BERBAGAI MACAM ALAT - ALAT ELEKTRONIK SEPERTI LAPTOP, PC, HANDPHONE, DLL. SILAHKAN DILIHAT -LIHAT TERLEBIH DAHULU', '2022-04-10 19:50:14', '2022-04-10 23:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `mereks`
--

CREATE TABLE `mereks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mereks`
--

INSERT INTO `mereks` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Xiomi', '2022-04-08 20:20:15', '2022-04-08 23:28:39'),
(2, 'Samsung', '2022-04-08 20:20:15', '2022-04-08 20:20:15'),
(3, 'ASUS', '2022-04-08 20:20:15', '2022-04-09 08:25:25'),
(6, 'Apple', '2022-04-09 08:30:10', '2022-04-09 08:30:10');

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
(5, '2022_04_07_141004_create_abouts_table', 1),
(6, '2022_04_07_141026_create_produks_table', 1),
(7, '2022_04_07_141134_create_mereks_table', 1),
(8, '2022_04_11_010034_create_landings_table', 2);

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
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesifikasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_merek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama`, `spesifikasi`, `nama_merek`, `created_at`, `updated_at`) VALUES
(1, 'Xiomi Redmi Note 10 Pro 5G', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad sunt, sed tenetur incidunt optio dicta rem eos\n            distinctio sint aliquam quos unde officia cupiditate laudantium repudiandae. Doloremque incidunt sint iure dolorum\n            tempora quibusdam temporibus quis voluptatem eaque illum quia, error iusto ipsum cumque vero cupiditate accusantium\n            officia obcaecati nesciunt voluptatum?', 'Xiomi', '2022-04-08 20:20:15', '2022-04-08 20:20:15'),
(2, 'Oppo Reno 5G', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad sunt, sed tenetur incidunt optio dicta rem eos\n            distinctio sint aliquam quos unde officia cupiditate laudantium repudiandae. Doloremque incidunt sint iure dolorum\n            tempora quibusdam temporibus quis voluptatem eaque illum quia, error iusto ipsum cumque vero cupiditate accusantium\n            officia obcaecati nesciunt voluptatum?', 'Oppo', '2022-04-08 20:20:15', '2022-04-08 20:20:15'),
(3, 'ASUS ROG Zephyrus M16 GU603HE', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad sunt, sed tenetur incidunt optio dicta rem eos\n            distinctio sint aliquam quos unde officia cupiditate laudantium repudiandae. Doloremque incidunt sint iure dolorum\n            tempora quibusdam temporibus quis voluptatem eaque illum quia, error iusto ipsum cumque vero cupiditate accusantium\n            officia obcaecati nesciunt voluptatum?', 'Asus', '2022-04-08 20:20:15', '2022-04-08 20:20:15'),
(4, 'Samsung Galaxy A13 5G', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia incidunt harum ratione pariatur officia fugiat accusamus dolor praesentium enim eaque. Nade Nande.Ore', 'Samsung', '2022-04-08 20:32:32', '2022-04-09 08:24:33'),
(6, 'OPPO RENO 7 4G', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia incidunt harum ratione pariatur officia fugiat accusamus dolor praesentium enim eaque.', 'Tentukan Merek', '2022-04-09 08:28:32', '2022-04-09 08:28:32'),
(7, 'Nokia 250', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Samsung', '2022-04-09 08:34:36', '2022-04-09 08:34:36'),
(8, 'Samsung Galaxy S20 FE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia incidunt harum ratione pariatur', 'Samsung', '2022-04-09 08:35:53', '2022-04-09 08:35:53'),
(9, 'Nokia G95 5G', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia incidunt harum ratione pariatur officia fugiat accusamus dolor praesentium enim eaque.', 'Asus', '2022-04-10 23:09:32', '2022-04-10 23:09:32');

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
(1, 'Al Kausar', 'alka@gmail.com', NULL, '$2y$10$AsNHtHzT3yz1cPikmOLLNeULFspu.EjVgyPztkAMwQE8XaZnnK18a', NULL, '2022-04-08 20:20:15', '2022-04-08 20:20:15'),
(2, 'Sinister', 'sinister@gmail.com', NULL, '12345678', NULL, '2022-04-09 20:26:55', '2022-04-09 20:26:55'),
(3, 'Antonio Fledak', 'antonio@gmail.com', NULL, '$2y$10$fLc4ObOWblCZva4UToAFMeCDDZ3ncytxtzbNtjvGUpDszRuxFStyS', NULL, '2022-04-09 20:39:15', '2022-04-09 20:39:15'),
(4, 'Bruno', 'bruno@gmail.com', NULL, '$2y$10$/IvHl0cnNjSBGI0C1STW1ebLQHuAf05R9uBB36.7K0fnl2KF0xpxS', NULL, '2022-04-09 20:41:42', '2022-04-09 20:41:42'),
(5, 'Sista', 'sista@gmail.com', NULL, '$2y$10$UmGBQY44uGSir.O0OFhXHe.9G3FMpHSIctRar5BwQCwmFRVQHwBxu', NULL, '2022-04-09 20:44:38', '2022-04-09 20:44:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `landings`
--
ALTER TABLE `landings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mereks`
--
ALTER TABLE `mereks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mereks_nama_unique` (`nama`);

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
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produks_nama_unique` (`nama`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landings`
--
ALTER TABLE `landings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mereks`
--
ALTER TABLE `mereks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
