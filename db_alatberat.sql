-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 05:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alatberat`
--

-- --------------------------------------------------------

--
-- Table structure for table `alatberat`
--

CREATE TABLE `alatberat` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `nama` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `harga` int(10) UNSIGNED NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alatberat`
--

INSERT INTO `alatberat` (`id`, `kategori_id`, `nama`, `deskripsi`, `foto`, `tahun`, `harga`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'Beco', 'Beco adalah alat berat', 'http://localhost/alatberat/assets/images/alat/aqiqoh.jpg', 2021, 1000000, '0', '2021-02-12 18:00:00', '2021-02-16 10:13:03'),
(2, 5, 'Selender', 'Selender penghalus jalan', 'http://localhost/alatberat/assets/images/alat/home1.png', 2019, 2000000, '1', '2021-02-12 18:00:00', '2021-02-16 10:23:17'),
(3, 7, 'Bull Doser', 'Besar Sekali', 'http://localhost/alatberat/assets/images/alat/home2.png', 2020, 3000000, '0', '2021-02-16 09:52:14', '2021-02-16 10:15:03'),
(4, 6, 'Tracktor', 'Alat Mluku', 'http://localhost/alatberat/assets/images/alat/home1.png', 2021, 1500000, '0', '2021-02-18 09:19:49', '2021-02-18 09:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(5, 'Jalan Kecil', '2021-02-15 11:31:07', '2021-02-15 11:31:07'),
(6, 'Jalan Besar', '2021-02-15 11:31:15', '2021-02-15 11:31:15'),
(7, 'Tambang', '2021-02-15 11:31:20', '2021-02-15 11:32:13');

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
(1, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(2, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(3, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(4, '2016_06_01_000004_create_oauth_clients_table', 1),
(5, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(6, '2021_02_04_152752_create_user_table', 2),
(7, '2021_02_04_172039_create_kategori_table', 3),
(8, '2021_02_04_174522_create_operator_table', 4),
(9, '2021_02_04_174702_create_kendaraan_table', 5),
(10, '2021_02_04_185025_create_transaksi_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('4703293ab320b697823b7018d40247d94873dd0f45e752bee24c4516747a1a49f1973cde0b3218c5', 1, 1, 'users', '[]', 0, '2021-02-18 14:55:03', '2021-02-18 14:55:03', '2022-02-18 14:55:03'),
('5779b92dc86eea80cad449294864329bfc535cb45c0374ce3a21da0edfbdfb82224e6c4208f06b13', 1, 1, 'users', '[]', 0, '2021-02-04 16:09:29', '2021-02-04 16:09:29', '2022-02-04 16:09:29'),
('a6147b11c58a780bd87b9d7ddc877c38de9d38088f9ae4203a28b3fa5de4cdee8a00eef39b6f657d', 1, 1, 'users', '[]', 0, '2021-02-13 15:46:39', '2021-02-13 15:46:39', '2022-02-13 15:46:39'),
('b258c8b344fcf1d6ddbe19aa035cba6defcca24d21f650db13658ca5720938e5729ae9d31bb542e1', 1, 1, 'users', '[]', 0, '2021-02-14 02:02:32', '2021-02-14 02:02:32', '2022-02-14 02:02:32'),
('b4e73494caf2192af7642f820f09ac046e53ba5fb9529554842c2b4e1f731b717cc4ddcd36f5010c', 1, 1, 'users', '[]', 0, '2021-02-19 14:25:45', '2021-02-19 14:25:45', '2022-02-19 14:25:45'),
('ff64dfc1f9e6c33dae69ceea1cd44c28f1413f0cae4a20c9fb36e596c5305b70ac072ff5483ffce5', 1, 1, 'users', '[]', 0, '2021-02-13 16:34:38', '2021-02-13 16:34:38', '2022-02-13 16:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Lumen Personal Access Client', 'h3PWe9VgD12Pq24Y2n7PIK2uA21lWe7AQtVl3V7z', NULL, 'http://localhost', 1, 0, 0, '2021-02-04 15:26:31', '2021-02-04 15:26:31'),
(2, NULL, 'Lumen Password Grant Client', 'I64s3oPzsuk2QSOUPV5pajg5EIp3KdgwoTnqAVNS', 'users', 'http://localhost', 0, 1, 0, '2021-02-04 15:26:31', '2021-02-04 15:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-02-04 15:26:31', '2021-02-04 15:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `nama` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `kategori_id`, `nama`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 5, 'Muhammad Izza Lutfi', '089768765453', '2021-02-16 08:10:58', '2021-02-16 08:10:58'),
(2, 6, 'Ijab Qobul', '0987876765', '2021-02-18 09:02:17', '2021-02-18 09:02:17'),
(3, 7, 'Suhardi', '098879878765', '2021-02-18 09:02:31', '2021-02-18 09:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `alatberat_id` int(10) UNSIGNED NOT NULL,
  `operator_id` int(10) NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `nama_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_proyek` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `user_id`, `alatberat_id`, `operator_id`, `status`, `start_date`, `end_date`, `nama_penyewa`, `alamat_proyek`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'accepted', '2021-02-10', '2021-02-14', 'Izza Lutfi', 'Kota Rembang, Jawa Tengah', 4000000, '2021-02-18 14:55:23', '2021-02-18 14:55:23'),
(2, 1, 1, 2, 'done', '2021-02-10', '2021-02-14', 'Izza Lutfi', 'Kota Rembang, Jawa Tengah', 4000000, '2021-02-18 14:55:27', '2021-02-18 14:55:27'),
(3, 1, 1, 3, 'accepted', '2021-02-10', '2021-02-14', 'Izza Lutfi', 'Kota Rembang, Jawa Tengah', 4000000, '2021-02-18 14:55:29', '2021-02-18 14:55:29'),
(4, 1, 1, 1, 'pending', '2021-02-10', '2021-02-14', 'Izza Lutfi', 'Kota Rembang, Jawa Tengah', 4000000, '2021-02-18 14:55:30', '2021-02-18 14:55:30'),
(5, 1, 1, 2, 'ongoing', '2021-02-10', '2021-02-14', 'Izza Lutfi', 'Kota Rembang, Jawa Tengah', 4000000, '2021-02-18 14:55:32', '2021-02-18 14:55:32'),
(6, 1, 1, 3, 'pending', '2021-02-10', '2021-02-14', 'Izza Lutfi', 'Kota Rembang, Jawa Tengah', 4000000, '2021-02-18 14:55:45', '2021-02-18 14:55:45'),
(7, 1, 1, 2, 'pending', '2021-02-10', '2021-02-14', 'Izza Lutfi', 'Kota Rembang, Jawa Tengah', 4000000, '2021-02-18 14:55:47', '2021-02-18 14:55:47'),
(8, 1, 1, 1, 'pending', '2021-02-10', '2021-02-14', 'Izza Lutfi', 'Kota Rembang, Jawa Tengah', 4000000, '2021-02-19 14:28:00', '2021-02-19 14:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `alamat`, `password`, `created_at`, `updated_at`) VALUES
(1, 'tes', 'tes@gmail.com', 'tes', '$2y$10$GyJGAFgiIey8wqENT77cXebsbSIZ7GTXolTebjTpD0ikdqA4F0.M.', '2021-02-04 15:49:50', '2021-02-04 16:16:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alatberat`
--
ALTER TABLE `alatberat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alatberat`
--
ALTER TABLE `alatberat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
