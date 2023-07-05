-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2023 pada 13.08
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmeans`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `kode_alternatif` varchar(255) DEFAULT NULL,
  `nama_alternatif` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `kode_alternatif`, `nama_alternatif`, `keterangan`, `created_at`, `updated_at`) VALUES
(60, 'ID003', 'CUPSEALERM5POLOS', 'CUP SEALER MERK M5 MOTIF POLOS 1 DUS @ 12', '2023-07-01 08:35:08', '2023-07-01 08:35:08'),
(59, 'ID002', 'BOXBENTOCLKN400', 'BOX BENTO INTERPACK KECIL KUNING 1 DUS', '2023-07-01 08:34:06', '2023-07-01 08:34:06'),
(62, 'ID005', '50EXOTICROSE2AL12X10', '120 X 100 M 43 GSM EXOTIC ROSE 2 PINK PRINTING', '2023-07-02 04:34:07', '2023-07-02 04:34:07'),
(63, 'ID006', 'BOTOL500MLBENING77', 'BOTOL 500 ML BENING 1 COLLY @ 77 PCS', '2023-07-02 04:34:27', '2023-07-02 04:34:27'),
(64, 'ID007', 'BROWNISS400', 'BROWNIS UK S Starindo 1 DUS = 400 PCS', '2023-07-02 04:34:41', '2023-07-02 04:34:41'),
(65, 'ID008', 'CUP22ECOPLAST', 'CUP 22 OZ BENING ECOPLAST 1 DUS = 1000 PCS', '2023-07-02 04:34:59', '2023-07-02 04:34:59'),
(66, 'ID009', 'CUPATM12NATURAL', 'CUP ATM NATURAL 12 OZ ( 350 ml ) @ 2.000 pcs', '2023-07-02 04:35:58', '2023-07-02 04:35:58'),
(67, 'ID010', 'CUPBINTANG12OZBENING', 'CUP BINTANG 12 OZ BENING 1 DUS @ 2.000 PCS', '2023-07-02 04:36:18', '2023-07-02 04:36:18'),
(68, 'ID011', 'CUPBT220BENING', 'CUP 220 ML BINTANG BENING 1 DUS @2.000 PCS', '2023-07-02 04:36:38', '2023-07-02 04:36:38'),
(69, 'ID012', 'CUPICECREAMBT100B', 'CUP ICE CREAM BINTANG 100 ML BENING 1DUS@4.000 PCS', '2023-07-02 04:36:56', '2023-07-02 04:36:56'),
(70, 'ID013', 'CUPSEALERM5KARTUN', 'CUP SEALER MERK M5 MOTIF KARTUN 1 DUS @ 12 ROLL', '2023-07-02 04:37:20', '2023-07-02 04:37:20'),
(71, 'ID014', 'CUPSEALERMMBUAH', 'CUP SEALER MM 1200 MOTIF BUAH 1 DUS = 12 ROLL', '2023-07-02 04:38:41', '2023-07-02 04:38:41'),
(72, 'ID015', 'CUPSEALERMMKARTUN', 'CUP SEALER MM 1200 MOTIF KARTUN 1 DUS = 12 ROLL', '2023-07-02 04:38:56', '2023-07-02 04:38:56'),
(73, 'ID016', 'CUPSEALERSKKARTUN', 'CUP SEALER MERK SEIKA MOTIF KARTUN 1 DUS @ 12 ROLL', '2023-07-02 04:43:07', '2023-07-02 04:43:07'),
(74, 'ID017', 'CUPSEALERSKPOLOS', 'CUP SEALER MERK SEIKA POLOS 1 DUS @ 12 ROLL', '2023-07-02 04:44:37', '2023-07-02 04:44:37'),
(75, 'ID018', 'CUPSEALERSKWKARTUN', 'CUP SEALER MERK SUKAWA MOTIF KARTUN 1DUS @ 12 ROLL', '2023-07-02 04:44:51', '2023-07-02 04:44:51'),
(78, 'ID019', 'CUPSEALERSKWPOLOS', 'CUP SEALER MERK SUKAWA POLOS 1 DUS @ 12 ROLL', '2023-07-03 01:36:19', '2023-07-03 01:36:19'),
(79, 'ID020', 'CUPSEALERSKWTEH', 'CUP SEALER MERK SUKAWA MOTIF TEH 1 DUS= 12 ROLL', '2023-07-03 01:37:18', '2023-07-03 01:37:18'),
(80, 'ID021', 'CUPU14OZUNIV', 'CUP U 14 OZ UNIVERSAL 1 DUS = 1000 PCS', '2023-07-03 01:41:36', '2023-07-03 01:41:36'),
(81, 'ID022', 'HLB222710', 'TAS HEAT SEAL 222710  UK 22 CM X 27 CM X 10 CM', '2023-07-03 01:41:56', '2023-07-03 01:41:56'),
(82, 'ID023', 'HLB30409', 'TAS HEAT SEAL 30409 UK 30 CM X 40 CM X 9 CM', '2023-07-03 01:42:13', '2023-07-03 01:42:13'),
(83, 'ID024', 'ISISTAPLESSEIKA', 'ISI STAPLES SEIKA NO.10 1 DUS = 100 BOX X 10 PACK', '2023-07-03 01:42:30', '2023-07-03 01:42:30'),
(84, 'ID025', 'LIDPAPERBOWL360/500', 'LID PAPER BOWL FRESH ONE 360/500 ML 1DUS = 500PCS', '2023-07-03 01:42:46', '2023-07-03 01:42:46'),
(85, 'ID026', 'LIDPAPERBOWL650/800', 'LID PAPER BOWL FRESH ONE 650/800 ML 1DUS = 500PCS', '2023-07-03 01:43:03', '2023-07-03 01:43:03'),
(86, 'ID027', 'MGPAPER25X27/5000', 'KERTAS MGPAPER ONERICE MERAH UK25X27(1DUS=50PACKX100LBR)', '2023-07-03 01:43:18', '2023-07-03 01:43:18'),
(87, 'ID028', 'MIKAMEGA3A', 'MIKA MEGA 3 A  1 DUS = 20 PACK X 100 PCS', '2023-07-03 01:43:42', '2023-07-03 01:43:42'),
(88, 'ID029', 'MIKAWETAN3A', 'MIKA WETAN 3 A  1 DUS = 2.000 PCS (DUS MERAH)', '2023-07-03 01:44:07', '2023-07-03 01:44:07'),
(89, 'ID030', 'MIKAWETAN4A', 'MIKA WETAN 4 A  1 DUS = 2.000 PCS (DUS MERAH)', '2023-07-03 01:44:25', '2023-07-03 01:44:25'),
(90, 'ID031', 'MIKAWETAN5A', 'MIKA WETAN 5 A  1 DUS = 3.000 PCS (DUS MERAH)', '2023-07-03 01:44:44', '2023-07-03 01:44:44'),
(92, 'ID032', 'MIKAWETAN6A', 'MIKA WETAN 6 A  1 DUS = 6.000 PCS (DUS MERAH)', '2023-07-03 02:14:36', '2023-07-03 02:14:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(16) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`) VALUES
(1, 'C1', 'Total Terjual'),
(2, 'C2', 'Kuantitas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_alternatif` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_alternatif`, `tanggal`, `qty`, `created_at`, `updated_at`) VALUES
(51, 58, '2023-07-01', 23, '2023-07-01', '2023-07-01'),
(52, 59, '2023-07-01', 1, '2023-07-01', '2023-07-01'),
(53, 60, '2023-07-01', 1, '2023-07-01', '2023-07-01'),
(54, 58, '2023-07-01', 50, '2023-07-01', '2023-07-01'),
(55, 61, '2023-07-02', 2, '2023-07-02', '2023-07-02'),
(58, 78, '2023-06-30', 7, '2023-07-03', '2023-07-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rel_alternatif`
--

CREATE TABLE `tb_rel_alternatif` (
  `ID` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_rel_alternatif`
--

INSERT INTO `tb_rel_alternatif` (`ID`, `id_alternatif`, `id_kriteria`, `nilai`, `created_at`, `updated_at`) VALUES
(114, 60, 2, 3, '2023-07-01 08:35:08', '2023-07-03 02:04:13'),
(113, 60, 1, 25, '2023-07-01 08:35:08', '2023-07-03 02:04:13'),
(112, 59, 2, 3, '2023-07-01 08:34:06', '2023-07-03 02:04:23'),
(111, 59, 1, 11, '2023-07-01 08:34:06', '2023-07-03 02:04:23'),
(150, 78, 2, 7, '2023-07-03 01:36:19', '2023-07-03 02:18:31'),
(149, 78, 1, 6, '2023-07-03 01:36:19', '2023-07-03 02:18:31'),
(152, 79, 2, 3, '2023-07-03 01:37:18', '2023-07-03 01:40:54'),
(151, 79, 1, 7, '2023-07-03 01:37:18', '2023-07-03 01:40:54'),
(117, 62, 1, 1, '2023-07-02 04:34:07', '2023-07-03 02:18:17'),
(118, 62, 2, 8, '2023-07-02 04:34:07', '2023-07-03 02:18:17'),
(119, 63, 1, 20, '2023-07-02 04:34:27', '2023-07-02 04:46:56'),
(120, 63, 2, 6, '2023-07-02 04:34:27', '2023-07-02 04:46:56'),
(121, 64, 1, 1, '2023-07-02 04:34:41', '2023-07-02 04:47:46'),
(122, 64, 2, 9, '2023-07-02 04:34:41', '2023-07-02 04:47:46'),
(123, 65, 1, 6, '2023-07-02 04:34:59', '2023-07-02 04:47:58'),
(124, 65, 2, 10, '2023-07-02 04:34:59', '2023-07-02 04:47:58'),
(125, 66, 1, 5, '2023-07-02 04:35:58', '2023-07-02 04:48:07'),
(126, 66, 2, 5, '2023-07-02 04:35:58', '2023-07-02 04:48:17'),
(127, 67, 1, 23, '2023-07-02 04:36:18', '2023-07-02 04:50:20'),
(128, 67, 2, 3, '2023-07-02 04:36:18', '2023-07-02 04:50:20'),
(129, 68, 1, 2, '2023-07-02 04:36:38', '2023-07-02 04:50:33'),
(130, 68, 2, 1, '2023-07-02 04:36:38', '2023-07-02 04:50:33'),
(131, 69, 1, 16, '2023-07-02 04:36:56', '2023-07-02 04:50:41'),
(132, 69, 2, 5, '2023-07-02 04:36:56', '2023-07-02 04:50:41'),
(133, 70, 1, 10, '2023-07-02 04:37:20', '2023-07-02 04:50:54'),
(134, 70, 2, 8, '2023-07-02 04:37:20', '2023-07-02 04:50:54'),
(135, 71, 1, 8, '2023-07-02 04:38:41', '2023-07-02 04:51:06'),
(136, 71, 2, 3, '2023-07-02 04:38:41', '2023-07-02 04:51:06'),
(137, 72, 1, 9, '2023-07-02 04:38:56', '2023-07-02 04:51:14'),
(138, 72, 2, 6, '2023-07-02 04:38:56', '2023-07-02 04:51:14'),
(139, 73, 1, 24, '2023-07-02 04:43:07', '2023-07-02 04:51:25'),
(140, 73, 2, 1, '2023-07-02 04:43:07', '2023-07-02 04:51:25'),
(141, 74, 1, 10, '2023-07-02 04:44:37', '2023-07-02 04:51:47'),
(142, 74, 2, 9, '2023-07-02 04:44:37', '2023-07-02 04:51:47'),
(143, 75, 1, 7, '2023-07-02 04:44:51', '2023-07-02 04:51:55'),
(144, 75, 2, 5, '2023-07-02 04:44:51', '2023-07-02 04:51:55'),
(154, 80, 2, 7, '2023-07-03 01:41:36', '2023-07-03 01:55:35'),
(153, 80, 1, 8, '2023-07-03 01:41:36', '2023-07-03 01:55:35'),
(156, 81, 2, 8, '2023-07-03 01:41:56', '2023-07-03 01:56:01'),
(155, 81, 1, 5, '2023-07-03 01:41:56', '2023-07-03 01:56:01'),
(157, 82, 1, 5, '2023-07-03 01:42:13', '2023-07-03 01:56:18'),
(158, 82, 2, 5, '2023-07-03 01:42:13', '2023-07-03 01:56:18'),
(159, 83, 1, 5, '2023-07-03 01:42:30', '2023-07-03 01:56:43'),
(160, 83, 2, 3, '2023-07-03 01:42:30', '2023-07-03 01:56:43'),
(161, 84, 1, 16, '2023-07-03 01:42:46', '2023-07-03 02:15:22'),
(162, 84, 2, 6, '2023-07-03 01:42:46', '2023-07-03 02:15:22'),
(163, 85, 1, 6, '2023-07-03 01:43:03', '2023-07-03 02:15:32'),
(164, 85, 2, 2, '2023-07-03 01:43:03', '2023-07-03 02:15:32'),
(165, 86, 1, 10, '2023-07-03 01:43:18', '2023-07-03 02:15:42'),
(166, 86, 2, 1, '2023-07-03 01:43:18', '2023-07-03 02:15:42'),
(167, 87, 1, 1, '2023-07-03 01:43:42', '2023-07-03 02:15:52'),
(168, 87, 2, 4, '2023-07-03 01:43:42', '2023-07-03 02:15:52'),
(169, 88, 1, 10, '2023-07-03 01:44:07', '2023-07-03 02:16:03'),
(170, 88, 2, 7, '2023-07-03 01:44:07', '2023-07-03 02:16:03'),
(171, 89, 1, 15, '2023-07-03 01:44:25', '2023-07-03 02:16:13'),
(172, 89, 2, 8, '2023-07-03 01:44:25', '2023-07-03 02:16:13'),
(173, 90, 1, 5, '2023-07-03 01:44:44', '2023-07-03 02:16:33'),
(174, 90, 2, 5, '2023-07-03 01:44:44', '2023-07-03 02:16:33'),
(175, 90, 1, 5, '2023-07-03 01:45:34', '2023-07-03 02:16:51'),
(176, 90, 2, 5, '2023-07-03 01:45:34', '2023-07-03 02:16:51'),
(177, 92, 1, 3, '2023-07-03 02:14:36', '2023-07-03 02:16:43'),
(178, 92, 2, 6, '2023-07-03 02:14:36', '2023-07-03 02:16:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `role` varchar(191) NOT NULL,
  `n_toko` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `tem_lahir` varchar(191) NOT NULL,
  `tgl_lahir` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `norek` varchar(191) NOT NULL,
  `norek_an` varchar(191) NOT NULL,
  `bank` varchar(191) NOT NULL,
  `saldo` int(11) DEFAULT NULL,
  `ket` varchar(191) DEFAULT NULL,
  `gambar_profile` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `n_toko`, `email`, `email_verified_at`, `password`, `tem_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `norek`, `norek_an`, `bank`, `saldo`, `ket`, `gambar_profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin 232', 'admin', '-', 'admin1@gmail.com', NULL, '$2y$10$r6TtHa7kr3X1cvseFowNGeYDqBnH19Hc.TPFTJfytZ49a8kmb6fdy', 'Indramayu', '-', 'kadipaten', '0876525262', '-', '-', '-', NULL, NULL, 'File_Profile/IimcX4aHh339B1O6awHJsgBEeUJGSHsT0pzMXTvQ.jpg', '2zPuN8DteiZs3EeWum635pxwIcw6TW8b8HaIERDnvCncPXxrzg5ovpVxTFPN', NULL, '2022-10-12 09:09:43'),
(5, 'asepandreana', 'owner', '-', 'asepandreana21@gmail.com', NULL, '$2y$10$Ny6yKGgWgSvpEyE5CvXhTObtLr7.u/O31bWhXr6DI9VfcFSrDHcHW', 'Majalengka', '2021-08-18', 'Desa baturuyuk', '083862996298', '-', '-', '-', 0, '-', NULL, 'yG0GWYWreQFzLrAS6Eaiy1epH43LEf2q9g4R6jP3SE8HRc8yCtzrEo7mdVm8', '2021-08-17 12:37:55', '2021-08-17 12:37:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `tb_rel_alternatif`
--
ALTER TABLE `tb_rel_alternatif`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `tb_rel_alternatif`
--
ALTER TABLE `tb_rel_alternatif`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
