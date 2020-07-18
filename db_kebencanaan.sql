-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 06:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kebencanaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(10) UNSIGNED NOT NULL,
  `id_donatur` int(10) UNSIGNED NOT NULL,
  `jenis_bantuan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bantuan` int(11) DEFAULT NULL,
  `satuan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id_donatur` int(10) UNSIGNED NOT NULL,
  `nama_donatur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelpon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kontak` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jenis_korban`
--

CREATE TABLE `jenis_korban` (
  `id_jenis_korban` int(10) UNSIGNED NOT NULL,
  `jenis_korban` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kebencanaan`
--

CREATE TABLE `kebencanaan` (
  `id_kebencanaan` int(10) UNSIGNED NOT NULL,
  `id_kokab` int(10) UNSIGNED NOT NULL,
  `id_kecamatan` int(10) UNSIGNED NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `kekuatan_gempa` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kerusakan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kerusakan` int(11) DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(10) UNSIGNED NOT NULL,
  `id_kokab` int(10) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `korban`
--

CREATE TABLE `korban` (
  `id_korban` int(10) UNSIGNED NOT NULL,
  `id_kebencanaan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_korban` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kota_kabupaten`
--

CREATE TABLE `kota_kabupaten` (
  `id_kokab` int(10) UNSIGNED NOT NULL,
  `nama_kokab` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_11_032604_donatur', 1),
(4, '2020_07_11_032644_kota_kabupaten', 1),
(5, '2020_07_11_032655_bantuan', 1),
(6, '2020_07_11_032719_jenis_korban', 1),
(7, '2020_07_11_032732_kecamatan', 1),
(8, '2020_07_11_032733_kebencanaan', 1),
(9, '2020_07_11_032758_korban', 1),
(10, '2020_07_11_032811_pemulihan', 1),
(11, '2020_07_11_032841_pendistribusian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemulihan`
--

CREATE TABLE `pemulihan` (
  `id_pemulihan` int(10) UNSIGNED NOT NULL,
  `id_kebencanaan` int(10) UNSIGNED NOT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tindak_lanjut` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendistribusian`
--

CREATE TABLE `pendistribusian` (
  `id_distribusi` int(10) UNSIGNED NOT NULL,
  `id_bantuan` int(10) UNSIGNED NOT NULL,
  `id_kebencanaan` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nama_distributor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_lokasi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@siprediksi.com', NULL, '$2y$10$9kMPFlnCzQ8/DtASqDkuue53EXDAaJYElcWK0Mtw4pdOIKyEh.MFa', NULL, '2020-07-17 21:30:08', '2020-07-17 21:30:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`),
  ADD KEY `bantuan_id_donatur_foreign` (`id_donatur`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_korban`
--
ALTER TABLE `jenis_korban`
  ADD PRIMARY KEY (`id_jenis_korban`);

--
-- Indexes for table `kebencanaan`
--
ALTER TABLE `kebencanaan`
  ADD PRIMARY KEY (`id_kebencanaan`),
  ADD KEY `kebencanaan_id_kokab_foreign` (`id_kokab`),
  ADD KEY `kebencanaan_id_kecamatan_foreign` (`id_kecamatan`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `kecamatan_id_kokab_foreign` (`id_kokab`);

--
-- Indexes for table `korban`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`id_korban`),
  ADD KEY `korban_id_kebencanaan_foreign` (`id_kebencanaan`);

--
-- Indexes for table `kota_kabupaten`
--
ALTER TABLE `kota_kabupaten`
  ADD PRIMARY KEY (`id_kokab`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemulihan`
--
ALTER TABLE `pemulihan`
  ADD PRIMARY KEY (`id_pemulihan`),
  ADD KEY `pemulihan_id_kebencanaan_foreign` (`id_kebencanaan`);

--
-- Indexes for table `pendistribusian`
--
ALTER TABLE `pendistribusian`
  ADD PRIMARY KEY (`id_distribusi`),
  ADD KEY `pendistribusian_id_bantuan_foreign` (`id_bantuan`),
  ADD KEY `pendistribusian_id_kebencanaan_foreign` (`id_kebencanaan`);

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
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id_donatur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_korban`
--
ALTER TABLE `jenis_korban`
  MODIFY `id_jenis_korban` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kebencanaan`
--
ALTER TABLE `kebencanaan`
  MODIFY `id_kebencanaan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `korban`
--
ALTER TABLE `korban`
  MODIFY `id_korban` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kota_kabupaten`
--
ALTER TABLE `kota_kabupaten`
  MODIFY `id_kokab` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pemulihan`
--
ALTER TABLE `pemulihan`
  MODIFY `id_pemulihan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendistribusian`
--
ALTER TABLE `pendistribusian`
  MODIFY `id_distribusi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD CONSTRAINT `bantuan_id_donatur_foreign` FOREIGN KEY (`id_donatur`) REFERENCES `donatur` (`id_donatur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kebencanaan`
--
ALTER TABLE `kebencanaan`
  ADD CONSTRAINT `kebencanaan_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kebencanaan_id_kokab_foreign` FOREIGN KEY (`id_kokab`) REFERENCES `kota_kabupaten` (`id_kokab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_id_kokab_foreign` FOREIGN KEY (`id_kokab`) REFERENCES `kota_kabupaten` (`id_kokab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `korban`
--
ALTER TABLE `korban`
  ADD CONSTRAINT `korban_id_kebencanaan_foreign` FOREIGN KEY (`id_kebencanaan`) REFERENCES `kebencanaan` (`id_kebencanaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemulihan`
--
ALTER TABLE `pemulihan`
  ADD CONSTRAINT `pemulihan_id_kebencanaan_foreign` FOREIGN KEY (`id_kebencanaan`) REFERENCES `kebencanaan` (`id_kebencanaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendistribusian`
--
ALTER TABLE `pendistribusian`
  ADD CONSTRAINT `pendistribusian_id_bantuan_foreign` FOREIGN KEY (`id_bantuan`) REFERENCES `bantuan` (`id_bantuan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendistribusian_id_kebencanaan_foreign` FOREIGN KEY (`id_kebencanaan`) REFERENCES `kebencanaan` (`id_kebencanaan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
