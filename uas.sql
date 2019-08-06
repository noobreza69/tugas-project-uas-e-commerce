-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 03:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$qUIuzVzm5laXzM3IjApjOue4sjH6z5leZBkCZH7zHC3MlMdbtw7f2', 'w4MKtEZe8H3h4LyeJL37ol9U0NyB1A2tDvNLEGNqJuLLkcVYu5JywexU4fex', '2019-08-02 10:42:05', '2019-08-02 10:42:05'),
(7, '1', '1', NULL, NULL, NULL);

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
(1, '2019_08_01_114947_create_login', 1),
(2, '2019_08_02_144425_create_t_produk', 1),
(3, '2019_08_03_015616_create_t_produk', 2),
(4, '2019_08_03_035353_create_t_stok', 3),
(5, '2019_08_03_042828_create_t_produk', 4),
(6, '2019_08_03_055936_create_t_pegawai', 5),
(7, '2019_08_03_065221_add_foto_t_produk', 6),
(8, '2019_08_03_085602_create_t_custlogin', 7),
(9, '2019_08_03_092826_create_t_cust', 8),
(10, '2019_08_03_101745_create_t_cust', 9),
(11, '2019_08_03_112225_create_t_cust', 10),
(12, '2019_08_03_112713_create_t_cust', 11),
(13, '2019_08_03_125931_create_t_cust', 12),
(14, '2019_08_03_132843_create_t_cust', 13),
(15, '2019_08_03_144720_create_t_menu', 14),
(16, '2019_08_04_021253_create_t_menu', 15),
(17, '2019_08_04_022740_create_t_pembayaran', 16),
(18, '2019_08_05_093913_add_total_t_cust', 16);

-- --------------------------------------------------------

--
-- Table structure for table `t_cust`
--

CREATE TABLE `t_cust` (
  `id_cust` int(10) UNSIGNED NOT NULL,
  `jumlah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_cust`
--

INSERT INTO `t_cust` (`id_cust`, `jumlah`, `id_produk`, `created_at`, `updated_at`) VALUES
(1, '2', 5, '2019-08-03 07:30:08', '2019-08-04 08:57:37'),
(3, '2', 7, '2019-08-03 19:34:30', '2019-08-03 19:34:30'),
(4, '2', 5, '2019-08-04 09:07:08', '2019-08-05 05:44:23'),
(6, '10', 8, '2019-08-05 06:37:20', '2019-08-05 06:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `t_menu`
--

CREATE TABLE `t_menu` (
  `id_menu` int(10) UNSIGNED NOT NULL,
  `id_produk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_menu`
--

INSERT INTO `t_menu` (`id_menu`, `id_produk`, `created_at`, `updated_at`) VALUES
(1, 5, NULL, NULL),
(2, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_pegawai`
--

CREATE TABLE `t_pegawai` (
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_pegawai`
--

INSERT INTO `t_pegawai` (`id_pegawai`, `nama`, `jk`, `umur`, `created_at`, `updated_at`) VALUES
(1, 'Reza Aulia Rahman', 'Pria', '22', '2019-08-02 23:33:51', '2019-08-04 22:41:50'),
(2, 'Rizky Ditya Pratama', 'Pria', '21', '2019-08-04 22:02:46', '2019-08-04 22:02:46'),
(3, 'Tony Stark', 'Pria', '45', '2019-08-04 22:03:06', '2019-08-04 22:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaran`
--

CREATE TABLE `t_pembayaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_produk`
--

CREATE TABLE `t_produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_makanan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_makanan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_produk`
--

INSERT INTO `t_produk` (`id_produk`, `nama_makanan`, `harga_makanan`, `stok`, `created_at`, `updated_at`, `foto`) VALUES
(5, 'Mie Goreng', '15.000', '100', '2019-08-03 01:12:47', '2019-08-03 19:05:39', '1-5.png'),
(7, 'Martabak 8 rasa', '100.000', '100', '2019-08-03 01:47:40', '2019-08-04 08:45:28', 'martabak-8-rasa.jpg'),
(8, 'Pisang keju', '15.000', '4', '2019-08-04 11:06:52', '2019-08-05 06:36:30', 'pisangkeju.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_cust`
--
ALTER TABLE `t_cust`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `t_menu`
--
ALTER TABLE `t_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_produk`
--
ALTER TABLE `t_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_cust`
--
ALTER TABLE `t_cust`
  MODIFY `id_cust` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_menu`
--
ALTER TABLE `t_menu`
  MODIFY `id_menu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  MODIFY `id_pegawai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_produk`
--
ALTER TABLE `t_produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
