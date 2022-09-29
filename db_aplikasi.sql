-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 03:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aplikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto_numbers`
--

CREATE TABLE `auto_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_file`
--

CREATE TABLE `data_file` (
  `no` int(100) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `jenis_id` int(50) NOT NULL,
  `nomor_dokumen` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_file`
--

INSERT INTO `data_file` (`no`, `judul`, `nama_file`, `jenis_id`, `nomor_dokumen`, `created_at`, `updated_at`) VALUES
(59, 'Akun VCLAIM BPJS', 'Akun VCLAIM BPJS-1663029040.pdf', 2, 'vclaim-bpjs', '2022-09-12 17:30:40', '2022-09-12 17:30:40'),
(60, 'Paka Integritas User Login Aplikasi', 'Paka Integritas User Login Aplikasi-1663215570.pdf', 2, '-', '2022-09-14 21:19:30', '2022-09-14 21:19:30');

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
-- Table structure for table `help_desk`
--

CREATE TABLE `help_desk` (
  `id` int(11) NOT NULL,
  `ticket_no` varchar(100) NOT NULL,
  `user` int(100) NOT NULL,
  `ruangan` int(100) NOT NULL,
  `masalah` varchar(500) NOT NULL,
  `ticket_priority` int(50) NOT NULL,
  `ticket_status` int(50) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help_desk`
--

INSERT INTO `help_desk` (`id`, `ticket_no`, `user`, `ruangan`, `masalah`, `ticket_priority`, `ticket_status`, `created_at`, `updated_at`) VALUES
(1, '123/IT/2022', 7, 2, 'internet mati', 1, 1, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `no` int(100) NOT NULL,
  `jns_id` int(30) NOT NULL,
  `nama_barang` text NOT NULL,
  `jenis_pengadaan` text NOT NULL,
  `kategori_barang` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`no`, `jns_id`, `nama_barang`, `jenis_pengadaan`, `kategori_barang`, `created_at`, `updated_at`) VALUES
(4, 2, 'SISMADAK V5.0', '-', '192.168.20.3/sismadak', '2022-08-31 00:47:53', '2022-08-31 00:47:53'),
(6, 1, 'Printer Brother DCP-T720DW', '-', 'Printer,\r\nScanner', '2022-08-31 05:16:38', '2022-08-31 05:16:38'),
(8, 2, 'SISMADAK V6.0', '-', '192.168.40.250/sismadak', '2022-09-12 01:24:34', '2022-09-12 01:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_dok`
--

CREATE TABLE `jenis_dok` (
  `id` int(100) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_dok`
--

INSERT INTO `jenis_dok` (`id`, `jenis`) VALUES
(1, 'Regulasi Pemerintah'),
(2, 'Regulasi Internal'),
(3, 'SOP'),
(4, 'Pedoman');

-- --------------------------------------------------------

--
-- Table structure for table `jns_barang`
--

CREATE TABLE `jns_barang` (
  `id` int(200) NOT NULL,
  `jenis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jns_barang`
--

INSERT INTO `jns_barang` (`id`, `jenis`) VALUES
(1, 'Barang'),
(2, 'Aplikasi'),
(3, 'ATK'),
(4, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `lap_mutu`
--

CREATE TABLE `lap_mutu` (
  `no` int(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `masalah` varchar(255) DEFAULT NULL,
  `petugas` varchar(255) DEFAULT NULL,
  `solusi` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, '2017_08_03_055212_create_auto_numbers', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `id` int(100) NOT NULL,
  `nama_aplikasi` varchar(100) NOT NULL,
  `alamat_ip` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `nama_aplikasi`, `alamat_ip`, `password`, `created_at`, `updated_at`) VALUES
(1, 'SISMADAK V.5', '192.168.20.3/sismadak', 'Qwerty123#', '2022-09-07 23:51:22', '2022-09-07 23:51:22'),
(2, 'VCLAIM BPJS - Ledyana Puspasari', '0601R002', 'Ernaldi123*#', '2022-09-14 03:10:02', '2022-09-12 19:39:07'),
(3, 'VCLAIM BPJS - Gunawan Santoso', 'gunawan.santoso', 'BPJSbaru1/', '2022-09-12 19:39:43', '2022-09-12 19:39:43'),
(4, 'VCLAIM BPJS - Adriansyah Malikus Saleh', 'andriansyah.malikus', 'BPJSbaru1/', '2022-09-12 19:40:10', '2022-09-12 19:40:10'),
(5, 'VCLAIM BPJS - Eni Marlina', 'eni.marlinaerba', 'BPJSbaru1/', '2022-09-12 19:40:32', '2022-09-12 19:40:32'),
(6, 'VCLAIM BPJS - Gustini Verawati', 'gustini.verawati', 'BPJSbaru1/', '2022-09-12 19:40:56', '2022-09-12 19:40:56'),
(7, 'VCLAIM BPJS - Rita Andriani', 'rita.andriani', 'BPJSbaru1/', '2022-09-12 19:41:22', '2022-09-12 19:41:22'),
(8, 'VCLAIM BPJS - Evi Nopita', 'evi.nopita', 'BPJSbaru1/', '2022-09-12 19:41:42', '2022-09-12 19:41:42'),
(9, 'VCLAIM BPJS - Yunita Sari', '-', 'EMAIL SUDAH TERDAFTAR DI RS PERTAMINA', '2022-09-12 19:42:06', '2022-09-12 19:42:06'),
(10, 'VCLAIM BPJS - M Boby Octadilla', 'm.boby', 'BPJSbaru1/', '2022-09-12 19:42:36', '2022-09-12 19:42:36'),
(11, 'VCLAIM BPJS - Aang Surya Dinata', 'aang.surya', 'BPJSbaru1/', '2022-09-12 19:42:58', '2022-09-12 19:42:58'),
(12, 'VCLAIM BPJS - Sarmidi', 'sarmidi.sarmidi', 'BPJSbaru1/', '2022-09-12 19:43:22', '2022-09-12 19:43:22'),
(13, 'SIKARS - (username: layanan@rs-erba.co.id) - 1671061', 'http://akreditasi.kars.or.id/', '943890259', '2022-09-14 21:01:14', '2022-09-14 21:01:14'),
(14, 'Laporan RL (user: 1671061)', 'sirs.yankes.kemkes.go.id', '12345', '2022-09-14 21:02:31', '2022-09-14 21:02:31'),
(15, 'Registrasi Rumah Sakit', 'email mbak Ledy', 'Qwerty2021#', '2022-09-14 21:03:03', '2022-09-14 21:03:03'),
(16, 'PCARE Vaksin (user: 0601R002)', 'https://pcare.bpjs-kesehatan.go.id/vaksin/Login', 'Erba1234*#', '2022-09-14 21:03:59', '2022-09-14 21:03:59'),
(17, 'SIRS Online (user: 1671061)', 'sirs.kemkes.go.id/fo', 'S!rs2020!!', '2022-09-14 21:05:06', '2022-09-14 21:05:06'),
(18, 'All Record Covid (user: 16faskes282)', 'http://alrecord-tc19.go.id', '16faskes282', '2022-09-14 21:06:04', '2022-09-14 21:06:04'),
(19, 'SISRUTE (user: rsernaldibahar@rujukan.web.id)', 'https://sisrute.kemkes.go.id/', 'rujukan2020', '2022-09-14 21:07:24', '2022-09-14 21:07:24'),
(20, 'HFIS BPJS (user: 0601R002_1', 'https://hfis.bpjs-kesehatan.go.id/hfis/login', 'Erba12345#*', '2022-09-14 21:10:04', '2022-09-14 21:10:04'),
(21, 'SISRUTE (user: email adri)', 'https://sisrute.kemkes.go.id/', 'erba1234', '2022-09-14 21:12:25', '2022-09-14 21:12:25'),
(22, 'Sistem Informasi Pasien (username: informasi)', '192.168.20.3/informasi', '123', '2022-09-14 23:41:43', '2022-09-14 23:41:43'),
(23, 'Google Drive Verif - BPJS (user: ernaldibahar26@gmail.com) - Langganan pertahun JT: 19/09/2023', 'google drive', 'erbA12345', '2022-09-18 19:55:36', '2022-09-18 19:55:36'),
(24, 'Indikator Nasional Mutu (user: 1671061 - kode register RS)', 'mutufasyankes.kemkes.go.id', '1234', '2022-09-18 21:31:24', '2022-09-18 21:31:24'),
(25, 'TP-LINK FO', '-', 'terserah', '2022-09-19 18:45:10', '2022-09-19 18:45:10'),
(26, 'Digital Maturity Index (DMI) - (user: rs.1671061)', 'dmi.kemkes.go.id', 'Erba@12345', '2022-09-20 00:05:02', '2022-09-20 00:05:02'),
(27, 'WIFI Ruangan Kepegawaian - Bu Diaz', '-', '1erbasatu', '2022-09-21 20:28:49', '2022-09-21 20:28:49'),
(28, 'Router UNIFY (user: erba)', '-', 'Simrs122 (coba dulu, insya Allah bener)', '2022-09-23 01:43:38', '2022-09-23 01:43:38'),
(29, 'WIFI GSG 1', '-', 'serbaguna2021', '2022-09-23 01:44:30', '2022-09-23 01:44:30'),
(30, 'WIF GSG 2', '-', 'serbaguna2022', '2022-09-23 01:44:59', '2022-09-23 01:44:59');

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
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ruangan_id` varchar(50) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama_user`, `username`, `password`, `ruangan_id`, `user_id`, `updated_at`, `created_at`) VALUES
(3, 'deti', 'tes', '12345678', NULL, 9, '2022-09-11 18:06:13.000000', '2022-09-11 18:06:13.000000'),
(4, 'tes', 'tes', '12345678', NULL, 10, '2022-09-11 19:04:36.000000', '2022-09-11 19:04:36.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `no` int(11) NOT NULL,
  `nama_ruangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`no`, `nama_ruangan`) VALUES
(1, 'Security'),
(2, 'Ruang Direktur'),
(3, 'Operator/Resepsionis'),
(4, 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `telephone`
--

CREATE TABLE `telephone` (
  `No` int(100) NOT NULL,
  `Gedung` varchar(255) DEFAULT NULL,
  `Ruangan_id` int(255) DEFAULT NULL,
  `Nomor_Ekstension` int(100) DEFAULT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telephone`
--

INSERT INTO `telephone` (`No`, `Gedung`, `Ruangan_id`, `Nomor_Ekstension`, `Keterangan`, `updated_at`, `created_at`) VALUES
(14, 'A', 3, 1001, 'aktif', '2022-09-08 03:55:54', '2022-09-08 03:55:54'),
(15, 'A', 1, 1046, 'aktif', '2022-09-11 17:48:00', '2022-09-11 17:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_prior`
--

CREATE TABLE `ticket_prior` (
  `id` int(11) NOT NULL,
  `ticket_priority` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_prior`
--

INSERT INTO `ticket_prior` (`id`, `ticket_priority`) VALUES
(1, 'High'),
(2, 'Medium'),
(3, 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_stat`
--

CREATE TABLE `ticket_stat` (
  `id` int(11) NOT NULL,
  `ticket_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_stat`
--

INSERT INTO `ticket_stat` (`id`, `ticket_status`) VALUES
(1, 'NEW'),
(2, 'Sedang Dilayani'),
(3, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `updated_at`, `created_at`) VALUES
(7, 'deti@gmail.com', '$2y$10$TuzY7d05o/OASmrNX26EvOILP7fycSByjSaoXvcXWUD7LWHJpXTxu', '2022-09-09 23:45:15.000000', '2022-09-09 23:45:15.000000'),
(8, 'tes', '$2y$10$6N./zSvmdXoWG7gO1VWzjOqoMyI1CReZxp0QCvNI3PmVa/Fy3ZpLi', '2022-09-11 17:40:56.000000', '2022-09-11 17:40:56.000000'),
(9, 'tes', '$2y$10$iCBXAvT6Gd5bNrgp7QQ7DutjUmPYq0YxGqzG4raZrs04Lr63PzmjK', '2022-09-11 18:06:13.000000', '2022-09-11 18:06:13.000000'),
(10, 'tes', '$2y$10$OBmODgHoJU3EloiAtXQ8regMdVXoJlxL8FVJY99n5g2pZlL3/RWES', '2022-09-11 19:04:36.000000', '2022-09-11 19:04:36.000000'),
(11, 'deti', '$2y$10$j2M78WIAt5uij7Ggb3J.S.ojmZhSTGGZCEbhA7JNLJy03eldIQCbW', '2022-09-12 18:01:17.000000', '2022-09-12 18:01:17.000000');

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
(2, 'deti', 'detinadya@gmail.com', NULL, '$2y$10$NjtpzF9MTt.50mgs8.FJjupZnqSiEsQSkeWPgrj.oiYRMBcDORNTC', 'GkjgtqZTp7Sxc9WrWzn99wUKKIpeFI4J2CdGEDJFdDXBe3WfGwMUxMyJDMDW', '2022-09-13 20:12:14', '2022-09-13 20:12:14'),
(3, 'tes', 'deti@gmail.com', NULL, '$2y$10$qpQ8D5uKZGA8nEUEqHJ4G.eV2KPBp7zVBLMHuVZj5cJggprTv80TS', NULL, '2022-09-13 21:17:31', '2022-09-13 21:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_code`
--

CREATE TABLE `user_code` (
  `id` int(11) NOT NULL,
  `usercode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_code`
--

INSERT INTO `user_code` (`id`, `usercode`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_numbers`
--
ALTER TABLE `auto_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_file`
--
ALTER TABLE `data_file`
  ADD PRIMARY KEY (`no`),
  ADD KEY `jenis_id` (`jenis_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `help_desk`
--
ALTER TABLE `help_desk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruangan` (`ruangan`),
  ADD KEY `ticket_priority` (`ticket_priority`),
  ADD KEY `ticket_status` (`ticket_status`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`no`),
  ADD KEY `jns_id` (`jns_id`);

--
-- Indexes for table `jenis_dok`
--
ALTER TABLE `jenis_dok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jns_barang`
--
ALTER TABLE `jns_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_mutu`
--
ALTER TABLE `lap_mutu`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
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
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruangan_id` (`ruangan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `telephone`
--
ALTER TABLE `telephone`
  ADD PRIMARY KEY (`No`),
  ADD KEY `Ruangan_id` (`Ruangan_id`);

--
-- Indexes for table `ticket_prior`
--
ALTER TABLE `ticket_prior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_stat`
--
ALTER TABLE `ticket_stat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_code`
--
ALTER TABLE `user_code`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto_numbers`
--
ALTER TABLE `auto_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_file`
--
ALTER TABLE `data_file`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `help_desk`
--
ALTER TABLE `help_desk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenis_dok`
--
ALTER TABLE `jenis_dok`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jns_barang`
--
ALTER TABLE `jns_barang`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lap_mutu`
--
ALTER TABLE `lap_mutu`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `telephone`
--
ALTER TABLE `telephone`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ticket_prior`
--
ALTER TABLE `ticket_prior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket_stat`
--
ALTER TABLE `ticket_stat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_code`
--
ALTER TABLE `user_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_file`
--
ALTER TABLE `data_file`
  ADD CONSTRAINT `data_file_ibfk_1` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_dok` (`id`);

--
-- Constraints for table `help_desk`
--
ALTER TABLE `help_desk`
  ADD CONSTRAINT `help_desk_ibfk_1` FOREIGN KEY (`ruangan`) REFERENCES `ruangan` (`no`),
  ADD CONSTRAINT `help_desk_ibfk_2` FOREIGN KEY (`ticket_priority`) REFERENCES `ticket_prior` (`id`),
  ADD CONSTRAINT `help_desk_ibfk_3` FOREIGN KEY (`ticket_status`) REFERENCES `ticket_stat` (`id`),
  ADD CONSTRAINT `help_desk_ibfk_4` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

--
-- Constraints for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_1` FOREIGN KEY (`jns_id`) REFERENCES `jns_barang` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `telephone`
--
ALTER TABLE `telephone`
  ADD CONSTRAINT `telephone_ibfk_1` FOREIGN KEY (`Ruangan_id`) REFERENCES `ruangan` (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
