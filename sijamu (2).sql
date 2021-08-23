-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 09:24 PM
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
(3, 'Dosen', 'responden'),
(4, 'Tenaga Pendidik', 'responden'),
(5, 'Mahasiswa', 'responden'),
(6, 'Alumni/Lulusan', 'responden'),
(7, 'Pengguna Lulusan', 'responden'),
(8, 'Mitra', 'responden'),
(9, 'Peneliti', 'responden'),
(10, 'Pengabdi', 'responden');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 3);

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
(1, 9),
(1, 12),
(2, 8),
(2, 13),
(3, 10),
(3, 11);

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
(1, '::1', 'mauraputri', 1, '2021-07-21 11:25:30', 0),
(2, '::1', 'mauraputri', 1, '2021-07-21 11:26:00', 0),
(3, '::1', 'moraqipi', 3, '2021-07-21 11:29:10', 0),
(4, '::1', 'moraqipi', 3, '2021-07-21 11:37:02', 0),
(5, '::1', 'moraqipi', 3, '2021-07-21 11:39:06', 0),
(6, '::1', 'moraqipi', 3, '2021-07-21 11:52:28', 0),
(7, '::1', 'moraqipi', 3, '2021-07-21 11:59:26', 0),
(8, '::1', 'moraqipi', 3, '2021-07-21 12:02:41', 0),
(9, '::1', 'moraqipi', 3, '2021-07-21 12:09:17', 0),
(10, '::1', 'moraqipi', 3, '2021-07-21 12:09:52', 0),
(11, '::1', 'mora123', 5, '2021-07-21 12:12:34', 0),
(12, '::1', 'moraqipi', 3, '2021-07-21 12:14:44', 0),
(13, '::1', 'moraqipi', 3, '2021-07-21 12:21:47', 0),
(14, '::1', 'moraqipi', 3, '2021-07-21 12:22:49', 0),
(15, '::1', 'moraqipi', 3, '2021-07-21 12:25:02', 0),
(16, '::1', 'mora123', 5, '2021-07-21 12:25:27', 0),
(17, '::1', 'mauraqoonitah15@gmail.com', 8, '2021-07-21 14:35:39', 1),
(18, '::1', 'mora123@gmail.com', 9, '2021-07-22 08:27:23', 1),
(19, '::1', 'mora123@gmail.com', 9, '2021-07-22 12:44:51', 1),
(20, '::1', 'mora123@gmail.com', 9, '2021-07-22 13:25:10', 1),
(21, '::1', 'mora123@gmail.com', 9, '2021-07-22 16:23:11', 1),
(22, '::1', 'mora123', NULL, '2021-07-24 09:30:43', 0),
(23, '::1', 'moraqipi123', NULL, '2021-07-24 09:30:59', 0),
(24, '::1', 'mora123@gmail.com', 9, '2021-07-24 09:31:25', 1),
(25, '::1', 'mauraputri', NULL, '2021-07-28 08:10:19', 0),
(26, '::1', 'mora123@gmail.com', 9, '2021-07-28 08:14:08', 1),
(27, '::1', 'mora123@gmail.com', 9, '2021-07-30 10:51:07', 1),
(28, '::1', 'mora123@gmail.com', 9, '2021-07-30 14:11:46', 1),
(29, '::1', 'mora123@gmail.com', 9, '2021-07-31 06:56:49', 1),
(30, '::1', 'mora123@gmail.com', 9, '2021-07-31 10:52:06', 1),
(31, '::1', 'responden@gmail.com', 10, '2021-07-31 11:30:38', 1),
(32, '::1', 'mora123@gmail.com', 9, '2021-08-01 04:02:48', 1),
(33, '::1', 'mora123@gmail.com', 9, '2021-08-01 08:06:55', 1),
(34, '::1', 'mora123@gmail.com', 9, '2021-08-01 13:27:32', 1),
(35, '::1', 'mora123@gmail.com', 9, '2021-08-02 07:58:37', 1),
(36, '::1', 'mora123@gmail.com', 9, '2021-08-03 04:30:11', 1),
(37, '::1', 'mauraputri', NULL, '2021-08-03 05:03:25', 0),
(38, '::1', 'mora123@gmail.com', 9, '2021-08-03 05:03:44', 1),
(39, '::1', 'mora123@gmail.com', 9, '2021-08-04 09:35:05', 1),
(40, '::1', 'mora123@gmail.com', 9, '2021-08-04 09:38:49', 1),
(41, '::1', 'mora123@gmail.com', 9, '2021-08-04 10:48:10', 1),
(42, '::1', 'mora123', NULL, '2021-08-04 11:25:49', 0),
(43, '::1', 'mora123@gmail.com', 9, '2021-08-04 11:25:59', 1),
(44, '::1', 'mora123@gmail.com', 9, '2021-08-04 12:22:35', 1),
(45, '::1', 'mora123@gmail.com', 9, '2021-08-05 07:00:59', 1),
(46, '::1', 'mora123@gmail.com', 9, '2021-08-06 03:26:13', 1),
(47, '::1', 'mora123@gmail.com', 9, '2021-08-06 10:26:25', 1),
(48, '::1', 'mora123@gmail.com', 9, '2021-08-07 04:07:25', 1),
(49, '::1', 'mora123@gmail.com', 9, '2021-08-08 08:22:14', 1),
(50, '127.0.0.1', 'mora123@gmail.com', 9, '2021-08-08 14:27:27', 1),
(51, '::1', 'mora123@gmail.com', 9, '2021-08-10 09:39:37', 1),
(52, '::1', 'mora123@gmail.com', 9, '2021-08-11 10:25:45', 1),
(53, '::1', 'mora123@gmail.com', 9, '2021-08-11 13:05:07', 1),
(54, '::1', 'mora123@gmail.com', 9, '2021-08-13 10:25:06', 1),
(55, '::1', 'mora123', NULL, '2021-08-13 13:06:44', 0),
(56, '::1', 'mora123@gmail.com', 9, '2021-08-13 13:07:01', 1),
(57, '::1', 'mora123@gmail.com', 9, '2021-08-14 09:53:33', 1),
(58, '::1', 'mora123@gmail.com', 9, '2021-08-14 10:05:10', 1),
(59, '::1', 'mora123@gmail.com', 9, '2021-08-14 10:11:05', 1),
(60, '::1', 'mora123@gmail.com', 9, '2021-08-14 10:17:32', 1),
(61, '::1', 'qpmaura@gmail.com', 11, '2021-08-14 10:52:22', 1),
(62, '::1', 'mora123@gmail.com', 9, '2021-08-14 10:59:30', 1),
(63, '::1', 'mora123@gmail.com', 9, '2021-08-15 04:47:33', 1),
(64, '::1', 'mora123@gmail.com', 9, '2021-08-15 08:25:49', 1),
(65, '::1', 'mora123@gmail.com', 9, '2021-08-16 03:03:41', 1),
(66, '::1', 'mora123@gmail.com', 9, '2021-08-16 09:51:32', 1),
(67, '::1', 'mora123@gmail.com', 9, '2021-08-17 11:19:25', 1),
(68, '::1', 'mora123@gmail.com', 9, '2021-08-18 03:50:53', 1),
(69, '::1', 'mora123@gmail.com', 9, '2021-08-19 05:42:20', 1),
(70, '::1', 'mora123@gmail.com', 9, '2021-08-19 08:57:39', 1),
(71, '::1', 'mora123@gmail.com', 9, '2021-08-20 13:34:41', 1),
(72, '::1', 'mora123@gmail.com', 9, '2021-08-21 01:25:58', 1),
(73, '::1', 'responden@gmail.com', 10, '2021-08-21 02:13:08', 1),
(74, '::1', 'mora123@gmail.com', 9, '2021-08-21 02:32:15', 1),
(75, '::1', 'mora123@gmail.com', 9, '2021-08-21 02:50:50', 1),
(76, '::1', 'mora123@gmail.com', 9, '2021-08-21 14:07:35', 1),
(77, '::1', 'mora123@gmail.com', 9, '2021-08-22 04:55:03', 1),
(78, '::1', 'mora123@gmail.com', 9, '2021-08-22 05:09:37', 1),
(79, '::1', 'responden@gmail.com', 10, '2021-08-22 05:25:53', 1),
(80, '::1', 'responden@gmail.com', 10, '2021-08-22 05:26:43', 1),
(81, '::1', 'mora123@gmail.com', 9, '2021-08-22 05:32:22', 1),
(82, '::1', 'mora123@gmail.com', 9, '2021-08-22 05:36:34', 1),
(83, '::1', 'responden@gmail.com', 10, '2021-08-22 05:46:54', 1),
(84, '::1', 'responden@gmail.com', 10, '2021-08-22 05:58:37', 1),
(85, '::1', 'responden@gmail.com', 10, '2021-08-22 06:04:39', 1),
(86, '::1', 'mora123@gmail.com', 9, '2021-08-22 06:09:49', 1),
(87, '::1', 'sayaresponden', NULL, '2021-08-22 06:21:24', 0),
(88, '::1', 'responden@gmail.com', 10, '2021-08-22 06:21:33', 1),
(89, '::1', 'mora123@gmail.com', 9, '2021-08-22 06:40:43', 1),
(90, '::1', 'mora123@gmail.com', 9, '2021-08-22 08:30:40', 1),
(91, '::1', 'mora123@gmail.com', 9, '2021-08-23 08:38:10', 1),
(92, '::1', 'mora123@gmail.com', 9, '2021-08-23 11:05:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'SuperAdmin Kelola Survei'),
(2, 'manage-profile', 'Admin Lihat Survei'),
(3, 'isi-survei', 'non admin - pengisian survei');

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
(19, 'C.2', 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'Dosen c2', 'c2', 0),
(22, 'C.5 ', 'Instrumen Kepuasan atas Pengelolaan Keuangan dan Sarpras UNJ', 'Dosen c5', 'c5', 0),
(23, 'C.7', 'INSTRUMEN ATAS PROSES PENELITIAN UNJ ', 'Peneliti c6', 'c6', 0),
(24, 'C.8', 'INSTRUMEN KEPUASAN ATAS PROSES PENGABDIAN KEPADA MASYARKAT - UNJ ', 'Pengabdi c7', 'c7', 0),
(25, 'C.9', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ ', 'Pengguna Lulusan c8', 'c8', 0),
(26, 'C.3 ', 'INSTRUMEN KEPUASAN ATAS STANDAR LAYANAN KEMAHASISWAAN   ', 'Mahasiswa c3', 'c3', 0),
(45, 'C.6', 'Instrumen Kepuasan atas Proses Pendidikan ', 'Mahasiswa c6', 'c6', 0),
(96, 'C.4', 'Instrumen Kepuasan Atas Pengelolaan Sumber Daya Manusia UNJ', 'Dosen c4', 'c4', 0),
(97, 'C.4', 'Instrumen Kepuasan Atas Pengelolaan Sumber Daya Manusia UNJ', 'Tenaga Pendidik c4', 'c4', 0),
(98, 'C.2', 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'Tenaga Kependidikan c2', 'c2', 0),
(99, 'C.3 ', 'INSTRUMEN KEPUASAN ATAS STANDAR LAYANAN KEMAHASISWAAN   ', 'Alumni/Lulusan c3', 'c3', 0);

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
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instrumen`
--

INSERT INTO `instrumen` (`id`, `kodeCategory`, `kodeInstrumen`, `namaInstrumen`, `peruntukkanInstrumen`, `date_created`) VALUES
(1, 'C.2', 'C.2.2  ', 'Instrumen Tingkat Pemahaman Visi Misi db ', 'Dosen', NULL),
(2, 'C.1', 'C.1.2', 'Instrumen Tingkat Pemahaman Visi Misi db', 'Tenaga Kependidikan', NULL),
(4, 'C.3', 'C.3.1', 'Instrumen Kepuasan atas Layanan Manajemen', 'Dosen', NULL),
(5, 'C.3', 'C.3.2', 'Instrumen Kepuasan atas Layanan Manajemen', 'Tenaga Kependidikan', NULL),
(6, 'C.2', 'C.2.3', 'Instrumen Kepuasan atas bawah kANAN  ', 'Peneliti', NULL),
(28, 'C.5 ', 'C.5.2', 'belum', 'Dosen', NULL),
(30, 'C.2', 'C.2.1', 'belum  ', 'Mahasiswa', NULL),
(31, 'C.4', 'C.4.1', 'belum', 'Dosen', NULL);

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
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1626877424, 1);

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
(1, 'Sarana pembelajaran yang tersedia di ruang kuliah', 'C2', 0, 'Instrumen Kepuasan atas C2.1', '', NULL, NULL),
(2, 'Ketepatan waktu dosen dalam memulai perkuliahan', 'C2', 0, 'Instrumen Kepuasan atas C2.2', '', NULL, NULL),
(3, 'Kemudahan dosen untuk dihubungi melalui telepon, email, dan sebagainya', 'C.3', 0, 'Insrumen Kepuasan atas C.3.1', '', NULL, NULL),
(13, 'dsada', 'C.4', 0, 'Instrumen Kepuasan atas C.4.2', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
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
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id`, `userID`, `roleID`, `noIdentitas`, `email`, `nama`, `prodi`, `angkatan`) VALUES
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
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `noIdentitas` varchar(255) DEFAULT NULL,
  `responden` varchar(255) NOT NULL,
  `kodeInstrumen` varchar(255) NOT NULL,
  `idPernyataan` int(11) NOT NULL,
  `response` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `fullname`, `noIdentitas`, `responden`, `kodeInstrumen`, `idPernyataan`, `response`, `created_at`) VALUES
(1, 'Haniya Hughes', '1313617009', 'Mahasiswa', 'C.2.3', 1, '5', '2021-08-06 15:13:38'),
(2, 'Haniya Hughes', '1313617009', 'Mahasiswa', 'C.2.3', 2, '4', '2021-08-06 15:14:35'),
(3, 'Haniya Hughes', '1313617009', 'Mahasiswa', 'C.2.3', 3, '4', '2021-08-06 15:16:32'),
(4, 'Eline Ramir', '1523982938', 'Dosen', 'C.4.1', 1, '5', '2021-08-05 08:13:40'),
(5, 'Eline Ramir', '1523982938', 'Dosen', 'C.4.1', 3, '4', '2021-08-05 08:14:42'),
(6, 'Eline Ramir', '1523982938', 'Dosen', 'C.4.1', 2, '5', '2021-08-05 08:16:13'),
(7, 'Raditya Kuswoyo', '336690447', 'Tenaga Kependidikan', 'C.5.2', 23, '5', '2021-08-06 00:00:00'),
(8, 'Raditya Kuswoyo', '336690447', 'Tenaga Kependidikan', 'C.5.2', 24, '4', '2021-08-06 00:06:00'),
(9, 'Raditya Kuswoyo', '336690447', 'Tenaga Kependidikan', 'C.5.2', 25, '3', '2021-08-06 00:08:06'),
(10, 'Haniya Hughes', '1313617009', 'Mahasiswa', 'C.6', 5, '5', '2021-08-06 11:25:32'),
(11, 'Haniya Hughes', '1313617009', 'Mahasiswa', 'C.6', 6, '4', '2021-08-06 11:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
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
(8, 'mauraqoonitah15@gmail.com', 'mauraputri', 'Fariani Hermin', 'default.svg', '$2y$10$FMdQFg0y5MyaIJ6sS8WgHeo/iYlZtbey.MeWP4pF99V.1HJ/wFtH2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-21 14:35:23', '2021-07-21 14:35:23', NULL),
(9, 'mora123@gmail.com', 'mora123', 'Maura Qoonitah Putri', 'default.svg', '$2y$10$5qxV6oUMwFwWtss3vikUme/iXbxm1O5nwsLjuY7alU91X7GqFYYeW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-22 08:27:00', '2021-07-22 08:27:00', NULL),
(10, 'responden@gmail.com', 'sayaresponden', 'Nama Responden', 'default.svg', '$2y$10$D/LBPCsgajEvID20AaBSU.QXLjiprorGxkwvPmiyAM/jaNOUJKXAi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-31 11:30:22', '2021-07-31 11:30:22', NULL),
(11, 'qpmaura@gmail.com', 'qpmaura responden', 'Eka Azrai', 'default.svg', '$2y$10$xfNpQZciUjrljw03XgGeqOUGHGeCS1K1cv3meSqIP7yU2I3HAKgD2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-14 10:52:11', '2021-08-14 10:52:11', NULL),
(12, 'mauraqoonitaadh15@gmail.com', 'mauraqoonitaadh15', NULL, 'default.svg', '$2y$10$HtGGqJG.jPFrj1Hqsdpt1.kPq9/R9BDFfIfmLBn0wWDzs/w6Yis5O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-14 10:54:20', '2021-08-14 10:54:20', NULL),
(13, 'mauraqoosnitah15@gmail.com', 'siapayyy', NULL, 'default.svg', '$2y$10$CQ7NHx4/sXg..8hhvU71Geeb6TxR3l2a.YvwJ/lnkDFuqfjojt7wW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-08-21 03:37:58', '2021-08-21 03:37:58', NULL);

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
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `instrumen`
--
ALTER TABLE `instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jenis_responden`
--
ALTER TABLE `jenis_responden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
