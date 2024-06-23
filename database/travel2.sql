-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2024 at 05:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
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
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_penuh` date NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `tanggal_penuh`, `updated_at`, `created_at`) VALUES
(1, '2024-06-22', '0000-00-00', '0000-00-00'),
(2, '2024-06-23', '2024-06-22', '2024-06-22');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_20_043554_create_paket_wisatas_table', 1),
(6, '2024_06_22_015534_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('76fe4b8d-f998-4267-ad37-01743932c627', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[],\"body\":null,\"color\":null,\"duration\":\"persistent\",\"icon\":null,\"iconColor\":null,\"status\":null,\"title\":\"Order Baru\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-06-22 20:11:18', '2024-06-22 20:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisatas`
--

CREATE TABLE `paket_wisatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('wisata','camping') NOT NULL,
  `title` text NOT NULL,
  `gambar` text NOT NULL,
  `harga` bigint(20) NOT NULL,
  `fees` bigint(20) NOT NULL,
  `percentage` text NOT NULL,
  `detail` text NOT NULL,
  `norek` char(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_wisatas`
--

INSERT INTO `paket_wisatas` (`id`, `type`, `title`, `gambar`, `harga`, `fees`, `percentage`, `detail`, `norek`, `created_at`, `updated_at`) VALUES
(1, 'wisata', 'Dani Kecebur Got', '01J0YWGKYCJCYGNDRHJ4PVK2GY.png', 10000, 1, '50%', '<p>-</p>', '100000', '2024-06-21 19:30:56', '2024-06-21 20:01:39'),
(2, 'wisata', 'Dani Kecebur Got', '01J0YWGKYCJCYGNDRHJ4PVK2GY.png', 10000, 2, '50%', '<p>-</p>', '100000', '2024-06-21 19:30:56', '2024-06-21 20:01:39'),
(3, 'wisata', 'Dani Kecebur Got', '01J0YWGKYCJCYGNDRHJ4PVK2GY.png', 10000, 3, '50%', '<p>-</p>', '100000', '2024-06-21 19:30:56', '2024-06-21 20:01:39'),
(4, 'camping', 'Dani Kecebur Got Campin', '01J0YWGKYCJCYGNDRHJ4PVK2GY.png', 10000, 4, '50%', '<p>-</p>', '100000', '2024-06-21 19:30:56', '2024-06-21 20:01:39');

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
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `akun_penggunas_id` bigint(20) UNSIGNED NOT NULL,
  `paket_wisata_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `bukti_transfer_path` text DEFAULT NULL,
  `pax` char(10) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `informasi_tambahan` text DEFAULT NULL,
  `alamat` text NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `status` enum('pending','approve','reject','berhasil','expired') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `akun_penggunas_id`, `paket_wisata_id`, `tanggal_pembayaran`, `bukti_transfer_path`, `pax`, `no_telp`, `informasi_tambahan`, `alamat`, `tanggal_masuk`, `tanggal_keluar`, `status`, `created_at`, `updated_at`) VALUES
(1963069, 1, 4, '2024-06-23', 'uploads/xxbAkhrzDXQMnl32h06fcW7IoTVVODUqbn7xtb1u.png', '100000', '0881011205176', NULL, 'Ciawi Tsunagakure', '2024-06-24', '2024-06-28', 'approve', '2024-06-22 19:32:25', '2024-06-22 19:36:53'),
(3656556, 1, 4, '2024-06-23', 'uploads/Bshw5tcdxR47XezgboB2f6aU2gMfKL6jQkW1zwlz.png', '100000', '1121', NULL, 'asdasd', '2024-06-28', '2024-06-25', 'approve', '2024-06-22 19:36:04', '2024-06-22 19:36:45'),
(3756639, 1, 1, '2024-06-23', 'uploads/5qtkLriRvT3ccZf6p0aPcYUgq7rgRK23sdciLV3F.png', '100000', '0881011205176', 'LOLLL', 'Ciawi Tsunagakure', '2024-06-26', '2024-06-26', 'approve', '2024-06-22 20:11:18', '2024-06-22 20:12:27'),
(9892353, 1, 1, '2024-06-23', 'uploads/NkjLNMioakYyzl6qFww3KzVgHzkW1ezF00BoyvkE.jpg', 'asasda', 'asdasd', 'asdasd', 'asdsd', '2024-06-28', '2024-06-28', 'approve', '2024-06-22 19:13:04', '2024-06-22 19:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `no_telp`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rizki Ramadhani', 'rizkiko368@gmail.com', NULL, 'admin', '2024-06-21 19:29:57', '$2y$10$.Ia4CGJT9QyLsRnjQzmQ.e66cn37WBE8oGIm4p3.zLGHbulSUFQEC', 'Dp4jj7lhlDhfIJTtTDfgWDu9CZRlU0gvncuaHglL7NmwIXXoo0EWtNqvbRgS', '2024-06-21 19:29:57', '2024-06-21 19:29:57');

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
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `paket_wisatas`
--
ALTER TABLE `paket_wisatas`
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
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_akun_penggunas_id_foreign` (`akun_penggunas_id`),
  ADD KEY `transaksis_paket_wisata_id_foreign` (`paket_wisata_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_no_telp_unique` (`no_telp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paket_wisatas`
--
ALTER TABLE `paket_wisatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9892354;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_akun_penggunas_id_foreign` FOREIGN KEY (`akun_penggunas_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksis_paket_wisata_id_foreign` FOREIGN KEY (`paket_wisata_id`) REFERENCES `paket_wisatas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
