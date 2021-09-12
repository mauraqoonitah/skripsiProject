-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 11:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sijamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'GPjM'),
(2, 'Kontributor', 'TPjM, Koorprodi, WD 1'),
(3, 'Dosen', 'responden dosen'),
(4, 'Tenaga Pendidik', 'responden tendik'),
(5, 'Mahasiswa', 'responden mahasiswa'),
(6, 'Alumni/Lulusan', 'responden alumni'),
(7, 'Pengguna Lulusan', 'responden pengguna'),
(8, 'Mitra', 'responden mitra'),
(9, 'Peneliti', 'responden peneliti'),
(10, 'Pengabdi', 'responden pengabdi');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 2),
(2, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'sayaadmin@gmail.com', 1, '2021-09-10 03:31:25', 1),
(2, '::1', 'sayaadmin@gmail.com', 1, '2021-09-10 03:33:05', 1),
(3, '::1', 'sayaadmin@gmail.com', 2, '2021-09-10 03:48:07', 1),
(4, '::1', 'sayaresponden@gmail.com', 4, '2021-09-10 04:14:01', 1),
(5, '::1', 'sayaresponden@gmail.com', 4, '2021-09-10 04:15:11', 1),
(6, '::1', 'sayaresponden@gmail.com', 4, '2021-09-10 04:17:22', 1),
(7, '::1', 'sayaresponden@gmail.com', 4, '2021-09-10 04:33:21', 1),
(8, '::1', 'sayaresponden@gmail.com', 4, '2021-09-10 04:34:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category_instrumen`
--

CREATE TABLE `category_instrumen` (
  `id` int(11) NOT NULL,
  `kodeCategory` varchar(128) NOT NULL,
  `namaCategory` varchar(128) NOT NULL,
  `peruntukkanCategory` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `questionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_instrumen`
--

INSERT INTO `category_instrumen` (`id`, `kodeCategory`, `namaCategory`, `peruntukkanCategory`, `slug`, `questionID`) VALUES
(23, 'C.6', 'Instrumen Kepuasan atas Proses Pendidikan', 'Mahasiswa', 'c6', 0),
(25, 'C.9        ', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ', 'Pengguna Lulusan', 'c9', 0),
(26, 'C.3 ', 'Instrumen Kepuasan Atas Standar Layanan Kemahasiswaan', 'Mahasiswa', 'c3', 0),
(97, 'C.4  ', 'Instrumen Kepuasan Atas Pengelolaan Sumber Daya Manusia UNJ  ', 'Tenaga Pendidik', 'c4', 0),
(99, 'C.3 ', 'Instrumen Kepuasan Atas Standar Layanan Kemahasiswaan', 'Alumni', 'c3', 0),
(100, 'C.1', 'Instrumen Kepuasan atas Visi dan Misi ', 'Dosen', 'c1', 0),
(101, 'C.1', 'Instrumen Kepuasan atas Visi dan Misi ', 'Mahasiswa', 'c1', 0),
(102, 'C.1', 'Instrumen Kepuasan atas Visi dan Misi ', 'Tenaga Pendidik', 'c1', 0),
(105, 'C.4  ', 'Instrumen Kepuasan Atas Pengelolaan Sumber Daya Manusia UNJ  ', 'Dosen', 'c4', 0),
(123, 'C.2  ', 'Instrumen Kepuasan atas Layanan Manajemen UNJ     ', 'Tenaga Pendidik', 'c2', 0),
(124, 'C.2  ', 'Instrumen Kepuasan atas Layanan Manajemen UNJ     ', 'Dosen', 'c2', 0),
(125, 'C.2  ', 'Instrumen Kepuasan atas Layanan Manajemen UNJ     ', 'Alumni/Lulusan', 'c2', 0),
(127, 'C.2  ', 'Instrumen Kepuasan atas Layanan Manajemen UNJ     ', 'Mahasiswa', 'c2', 0),
(131, 'C.5  ', 'Instrumen Kepuasan atas Pengelolaan Keuangan UNJ ', 'Dosen', 'c5', 0),
(232, 'C.2  ', 'Instrumen Kepuasan atas Layanan Manajemen UNJ     ', 'Pengguna Lulusan', 'c2', 0),
(233, 'C.2  ', 'Instrumen Kepuasan atas Layanan Manajemen UNJ     ', 'Mitra', 'c2', 0),
(234, 'C.2  ', 'Instrumen Kepuasan atas Layanan Manajemen UNJ     ', 'Mitra Luar', 'c2', 0),
(235, 'C.3 ', 'Instrumen Kepuasan Atas Standar Layanan Kemahasiswaan', 'Pengguna Lulusan', 'c3', 0),
(236, 'C.5  ', 'Instrumen Kepuasan atas Pengelolaan Keuangan UNJ ', 'Tenaga Kependidikan', 'c5', 0),
(237, 'C.5  ', 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana UNJ ', 'Tenaga Kependidikan', 'c5', 0),
(238, 'C.5  ', 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana UNJ ', 'Dosen', 'c5', 0),
(239, 'C.5  ', 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana UNJ ', 'Mahasiswa', 'c5', 0),
(240, 'C.8', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat', 'Mitra', 'c8', 0),
(241, 'C.7', 'Instrumen Kepuasan Atas Proses Penelitian', 'Dosen', 'c7', 0),
(242, 'C.7', 'Instrumen Kepuasan Atas Proses Penelitian', 'Mitra', 'c7', 0),
(243, 'C.9        ', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ', 'Pengguna Lulusan', 'c9', 0),
(244, 'C.8 ', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat ', 'Dosen', 'c8', 0),
(248, 'C.8 ', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat ', 'Pengabdi', 'c8', 0),
(295, 'C.10 ', 'test Instrumen Kepuasan atas Kepuasan ', 'Dosen', 'c10', 0),
(310, 'C.22', 'test kategori c22', 'Dosen', 'c22', 0),
(311, 'C.22', 'test kategori c22', 'Mahasiswa', 'c22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `instrumen`
--

CREATE TABLE `instrumen` (
  `id` int(11) NOT NULL,
  `kodeCategory` varchar(128) NOT NULL,
  `kodeInstrumen` varchar(128) NOT NULL,
  `namaInstrumen` varchar(255) NOT NULL,
  `peruntukkanInstrumen` varchar(128) NOT NULL,
  `slug` varchar(11) NOT NULL,
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instrumen`
--

INSERT INTO `instrumen` (`id`, `kodeCategory`, `kodeInstrumen`, `namaInstrumen`, `peruntukkanInstrumen`, `slug`, `date_created`) VALUES
(4, 'C.3', 'C.3.1', 'Instrumen Kepuasan atas Layanan Manajemen oleh Mahasiswa', 'Mahasiswa', 'c3', NULL),
(5, 'C.3', 'C.3.2', 'Instrumen Kepuasan atas Layanan Manajemen oleh Alumni/Lulusan', 'Alumni/Lulusan', 'c3', NULL),
(30, 'C.2 ', 'C.2.1 ', 'Instrumen Kepuasan atas Layanan Manajemen UNJ oleh Dosen ', 'Tenaga Pendidik', 'c2', NULL),
(31, 'C.4 ', 'C.4.1 ', 'a Instrumen Kepuasan Atas Pengelolaan Sumber Daya Manusia UNJ oleh Dosen ', 'Tenaga Pendidik', 'c4', NULL),
(62, 'C.5  ', 'C.5.1.a', 'Instrumen Kepuasan atas Pengelolaan Keuangan oleh Dosen', 'Dosen', 'c5', NULL),
(63, 'C.5  ', 'C.5.2.a', 'Instrumen Kepuasan atas Pengelolaan Keuangan oleh Tenaga Kependidikan', 'Tenaga Kependidikan', 'c5', NULL),
(64, 'C.1', 'C.1.1', 'Instrumen Kepuasan atas VIsi dan Misi  oleh Dosen', 'Dosen', 'c1', NULL),
(65, 'C.3', 'C.3.2', 'Instrumen Kepuasan atas Layanan Manajemen oleh Pengguna Lulusan', 'Pengguna Lulusan', 'c3', NULL),
(66, 'C.6', 'C.6', 'Instrumen Kepuasan atas Proses Pendidikan oleh Mahasiswa', 'Mahasiswa', 'c6', NULL),
(67, 'C.7', 'C.7.1', 'Instrumen Kepuasan Atas Proses Penelitian oleh Dosen', 'Dosen', 'c7', NULL),
(68, 'C.8', 'C.8.2', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat oleh Mitra', 'Mitra', 'c8', NULL),
(69, 'C.9', 'C.9.1', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ  oleh Pengguna Lulusan', 'Pengguna Lulusan', 'c9', NULL),
(78, 'C.10 ', 'C.10.2', 'test Instrumen Kepuasan atas Kepuasan  oleh Mitra10', 'Mitra', 'c10', NULL),
(79, 'C.10 ', 'C.10.1', 'test Instrumen Kepuasan atas Kepuasan  oleh Peneliti', 'Peneliti', 'c10', NULL),
(80, 'C.10 ', 'C.10.6', 'test Instrumen Kepuasan atas Kepuasan  oleh Mitra', 'Mitra', 'c10', NULL),
(81, 'C.8', 'C.8.4', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat oleh Pengabdi', 'Pengabdi', 'c8', NULL),
(83, 'C.8', 'C.8.1', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat oleh Dosen', 'Dosen', 'c8', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_responden`
--

CREATE TABLE `jenis_responden` (
  `id` int(11) NOT NULL,
  `responden` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_responden`
--

INSERT INTO `jenis_responden` (`id`, `responden`) VALUES
(1, 'Dosen'),
(2, 'Tenaga Pendidik'),
(3, 'Mahasiswa'),
(4, 'Alumni/Lulusan'),
(5, 'Pengguna Lulusan'),
(6, 'Mitra'),
(7, 'Peneliti'),
(8, 'Pengabdi');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1631261266, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `butir` varchar(255) NOT NULL,
  `kodeCategory` varchar(255) NOT NULL,
  `instrumenID` int(11) NOT NULL,
  `namaInstrumen` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `butir`, `kodeCategory`, `instrumenID`, `namaInstrumen`, `slug`, `createdAt`, `updatedAt`) VALUES
(1, 'ubah Sarana pembelajaran yang tersedia di ruang kuliah', 'C.10', 1, 'ga Instrumen Kepuasan atas gaC2.1', 'c10', NULL, NULL),
(2, 'yes Ketepatan waktu dosen dalam memulai perkuliahan', 'C.10', 2, 'ga Instrumen Kepuasan atas C2.2', 'c10', NULL, NULL),
(3, 'Kemudahan dosen untuk dihubungi melalui telepon, email, dan sebagainya', 'C.2', 77, 'ga Insrumen Kepuasan atas C.3.1', 'c2', NULL, NULL),
(13, 'butir c10dddd', 'C.10', 13, 'ga Instrumen Kepuasan atas C.4.2', 'c10', NULL, NULL),
(19, 'iiiiii hhhubah Ketepatan waktu dosen dalam memulai perkuliahan', 'C.10', 2, 'ga Instrumen Kepuasan atas C2.2', 'c10', NULL, NULL),
(20, 'hehe', 'C.10 ', 78, 'judul Instrumen Kepuasan atas Kepuasan  oleh Mitra', 'c10', NULL, NULL),
(22, 'hehe2 uueefwf uuu yesd lol hh', 'C.10 ', 78, 'judul Instrumen Kepuasan atas Kepuasan  oleh Mitra', 'c10', NULL, NULL),
(23, 'yez', 'C.10 ', 23, 'judul Instrumen Kepuasan atas Kepuasan  oleh Mitra', 'c10', NULL, NULL),
(24, '<p>dcdcdsd</p>', 'C.10 ', 24, 'judul Instrumen Kepuasan atas Kepuasan  oleh Mitra', 'c10', NULL, NULL),
(25, '<p>testg huuc kk</p>', 'C.10 ', 78, 'judul Instrumen Kepuasan atas Kepuasan  oleh Mitra', 'c10', NULL, NULL),
(26, '<p>test<br></p>', 'C.10 ', 78, 'test Instrumen Kepuasan atas Kepuasan  oleh Mitra', 'c10', NULL, NULL),
(27, '<p>test tambah butir id 78</p>', 'C.10 ', 78, 'test Instrumen Kepuasan atas Kepuasan  oleh Mitra10', 'c10', NULL, NULL),
(28, '<p>test tambah butir nuat id 69</p>', 'C.9', 69, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ  oleh Pengguna Lulusan', 'c9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `id` int(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `roleID` int(11) NOT NULL,
  `noIdentitas` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id`, `userID`, `roleID`, `noIdentitas`, `email`, `fullname`) VALUES
(1, 0, 0, '1313617009', 'Haniya @gmail.com', 'Haniya Hughes'),
(2, 0, 0, '1313617009', 'haniya@gmail.com', 'Haniya Hughes'),
(3, 0, 0, '1313617009', 'haniya@gmail.com', 'Haniya Hughes'),
(4, 0, 0, '1523982938', 'Eline@gmail.com', 'Eline Ramir'),
(5, 0, 0, '1523982938', 'Eline@gmail.com', 'Eline Ramir'),
(6, 0, 0, '1523982938', 'Eline@gmail.com', 'Eline Ramir'),
(7, 0, 0, '336690447', 'radit@gmail.com', 'Raditya Kuswoyo'),
(8, 0, 0, '336690447', 'radit@gmail.com', 'Raditya Kuswoyo'),
(9, 0, 0, '336690447', 'radit@gmail.com', 'Raditya Kuswoyo');

-- --------------------------------------------------------

--
-- Table structure for table `respondennnnn`
--

CREATE TABLE `respondennnnn` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `roleID` int(11) NOT NULL,
  `noIdentitas` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `angkatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `respondennnnn`
--

INSERT INTO `respondennnnn` (`id`, `userID`, `roleID`, `noIdentitas`, `email`, `nama`, `prodi`, `angkatan`) VALUES
(1, 0, 0, '', '', ' Instrumen Tingkat Pemahaman Visi Misi db', '', ''),
(2, 0, 0, '', '', ' Instrumen Kepuasan atas bawah kANAN  ', '', ''),
(3, 0, 0, '', '', ' Instrumen Kepuasan atas bawah kANAN  ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `questionID` int(11) NOT NULL,
  `slugCategory` varchar(100) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `respondenID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'sayaadmin@gmail.com', 'sayaadmin', 'Saya Admin', 'default.svg', '$2y$10$0SUuZOt2DKhdPryWGpmgCeCVBs5SPMtct25eTR/SHEwNfVN.LCCaq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-10 03:47:57', '2021-09-10 03:47:57', NULL),
(3, 'sayakontributor@gmail.com', 'sayakontributor', 'Saya Kontributor', 'default.svg', '$2y$10$sTJtY4tugv27ngpiyYUrH.mOUgUQxC5JOxFjPB80tq/pNp57ASume', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-10 03:56:19', '2021-09-10 03:56:19', NULL),
(4, 'sayaresponden@gmail.com', 'sayaresponden', 'Saya Responden', 'default.svg', '$2y$10$bXmMncZrHAVwZl//SWfp7u3IieWJwi.CYlBmxhfo8wis55277hD9C', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-10 04:13:53', '2021-09-10 04:13:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `category_instrumen`
--
ALTER TABLE `category_instrumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instrumen`
--
ALTER TABLE `instrumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_responden`
--
ALTER TABLE `jenis_responden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respondennnnn`
--
ALTER TABLE `respondennnnn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_instrumen`
--
ALTER TABLE `category_instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `instrumen`
--
ALTER TABLE `instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `jenis_responden`
--
ALTER TABLE `jenis_responden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `respondennnnn`
--
ALTER TABLE `respondennnnn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
