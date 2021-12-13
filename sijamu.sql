-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 05:00 PM
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

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', '894c6de233875f1e271c61b954f06948', '2021-12-12 16:25:58'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', '894c6de233875f1e271c61b954f06948', '2021-12-12 18:25:26'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', '894c6de233875f1e271c61b954f06948', '2021-12-12 18:25:44'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', '03811e9c27a106d5630bb11f8fb4d98d', '2021-12-12 19:16:44'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', '6a15244beb40e5fa4c487ef34d150064', '2021-12-12 21:58:19'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 'eab1adcef18fdefe22d9a61bb325e67b', '2021-12-13 12:02:36'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', '3c90e337497678eaa59650f645d60b30', '2021-12-13 16:46:01'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', '57702309e1b82d84f0a2f6b4a3f75ced', '2021-12-13 16:50:22'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', '57702309e1b82d84f0a2f6b4a3f75ced', '2021-12-13 16:50:41'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', '57702309e1b82d84f0a2f6b4a3f75ced', '2021-12-13 16:51:14'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', '57702309e1b82d84f0a2f6b4a3f75ced', '2021-12-13 16:52:39'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 'c5f04086a944342b30e1d7e35eb00094', '2021-12-13 16:53:50'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 'cb277718ff7e36092cfc4e7630f86591', '2021-12-13 17:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `jenisRespondenID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`, `jenisRespondenID`) VALUES
(1, 'Admin', 'GPjM', NULL),
(2, 'Kontributor', 'TPjM, Koorprodi, WD 1', NULL),
(3, 'Dosen', 'Dosen', 1),
(4, 'Tenaga Kependidikan', 'responden Tenaga Kependidikan', 2),
(5, 'Mahasiswa', 'Mahasiswa', 3),
(6, 'Alumni/Lulusan', 'Alumni/Lulusan', 4),
(7, 'Pengguna Lulusan', 'Pengguna Lulusan', 5),
(8, 'Mitra', 'Mitra', 6),
(9, 'Partners', 'Partners', 7),
(10, 'Peneliti', 'Peneliti', 8),
(11, 'Pengabdi', 'Pengabdi', 9),
(13, 'Pengelola Keuangan Unit', 'Pengelola Keuangan Unit', 11);

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
(1, 55),
(2, 48),
(3, 56),
(3, 59),
(5, 60),
(6, 64),
(7, 63),
(8, 61);

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
(1, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-11 23:20:42', 1),
(2, '::1', 'kontributor.instrumenkepuasan@gmail.com', 48, '2021-12-11 23:45:13', 1),
(3, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-11 23:51:20', 1),
(4, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-12 13:16:59', 1),
(5, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-12 14:42:49', 1),
(6, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-12 14:47:31', 1),
(7, '::1', 'dosen.instrumenkepuasan@gmail.com', 56, '2021-12-12 18:26:13', 1),
(8, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-12 18:37:22', 1),
(9, '::1', 'qpmaura', 59, '2021-12-12 21:57:36', 0),
(10, '::1', 'qpmaura@gmail.com', 59, '2021-12-12 21:58:30', 1),
(11, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-12 21:59:07', 1),
(12, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 11:20:07', 1),
(13, '::1', 'mauraqoonitah@gmail.com', NULL, '2021-12-13 11:57:39', 0),
(14, '::1', 'mauraqoonitah', 60, '2021-12-13 12:02:27', 0),
(15, '::1', 'mauraqoonitah@gmail.com', 60, '2021-12-13 12:02:51', 1),
(16, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 12:15:39', 1),
(17, '::1', 'mauraqoonitah@gmail.com', 60, '2021-12-13 14:07:55', 1),
(18, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 14:18:42', 1),
(19, '::1', 'mauraqoonitah@gmail.com', 60, '2021-12-13 14:20:09', 1),
(20, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 14:24:43', 1),
(21, '::1', 'ulfahnrz', 61, '2021-12-13 16:43:48', 0),
(22, '::1', 'nurzaakiahulfah@gmail.com', 61, '2021-12-13 16:46:14', 1),
(23, '::1', 'dfatriandira', NULL, '2021-12-13 16:51:00', 0),
(24, '::1', 'dfatriandira', NULL, '2021-12-13 16:51:31', 0),
(25, '::1', 'divinadira', NULL, '2021-12-13 16:52:46', 0),
(26, '::1', 'dfatriandira@gmail.com', 63, '2021-12-13 16:54:02', 1),
(27, '::1', 'nurzaakiahulfah@gmail.com', 61, '2021-12-13 16:57:45', 1),
(28, '::1', 'alumni.instrumenkepuasan@gmail.com', 64, '2021-12-13 17:15:51', 1),
(29, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 17:19:34', 1),
(30, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 21:03:52', 1),
(31, '::1', 'alumni.instrumenkepuasan@gmail.com', 64, '2021-12-13 21:48:17', 1),
(32, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 21:49:43', 1),
(33, '::1', 'alumni.instrumenkepuasan@gmail.com', 64, '2021-12-13 21:50:53', 1),
(34, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 21:52:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(3, 15, 'instrumen C.4.1');

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

--
-- Dumping data for table `auth_users_permissions`
--

INSERT INTO `auth_users_permissions` (`user_id`, `permission_id`) VALUES
(59, 3);

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
  `uniqueID` varchar(255) NOT NULL,
  `questionID` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_instrumen`
--

INSERT INTO `category_instrumen` (`id`, `kodeCategory`, `namaCategory`, `peruntukkanCategory`, `slug`, `uniqueID`, `questionID`, `created_at`, `updated_at`) VALUES
(4, 'C.2', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA', 'Alumni/Lulusan', 'c2', 'QJugD38YTfFwGAlW', 0, NULL, NULL),
(5, 'C.2', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA', 'Dosen', 'c2', 'QJugD38YTfFwGAlW', 0, NULL, NULL),
(6, 'C.2', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA', 'Mahasiswa', 'c2', 'QJugD38YTfFwGAlW', 0, NULL, NULL),
(7, 'C.2', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA', 'Mitra', 'c2', 'QJugD38YTfFwGAlW', 0, NULL, NULL),
(8, 'C.2', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA', 'Partners', 'c2', 'QJugD38YTfFwGAlW', 0, NULL, NULL),
(9, 'C.2', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA', 'Pengguna Lulusan', 'c2', 'QJugD38YTfFwGAlW', 0, NULL, NULL),
(10, 'C.2', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA', 'Tenaga Kependidikan', 'c2', 'QJugD38YTfFwGAlW', 0, NULL, NULL),
(11, 'C.3', 'Instrumen Kepuasan atas Standar Layanan Kemahasiswaan', 'Alumni/Lulusan', 'c3', 'BqDdkw6cFCZV5guM', 0, NULL, NULL),
(12, 'C.3', 'Instrumen Kepuasan atas Standar Layanan Kemahasiswaan', 'Mahasiswa', 'c3', 'BqDdkw6cFCZV5guM', 0, NULL, NULL),
(13, 'C.4', 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ', 'Dosen', 'c4', 'G1y4pcmSuCkHjTqX', 0, NULL, NULL),
(14, 'C.4', 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ', 'Tenaga Kependidikan', 'c4', 'G1y4pcmSuCkHjTqX', 0, NULL, NULL),
(20, 'C.7', 'Instrumen atas Proses Penelitian UNJ', 'Mitra', 'c7', 'fUrJunIBP1QsAFeN', 0, NULL, NULL),
(21, 'C.7', 'Instrumen atas Proses Penelitian UNJ', 'Peneliti', 'c7', 'fUrJunIBP1QsAFeN', 0, NULL, NULL),
(22, 'C.8', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ', 'Mitra', 'c8', 'EVDaxIcFjRsMq8ih', 0, NULL, NULL),
(23, 'C.8', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ', 'Pengabdi', 'c8', 'EVDaxIcFjRsMq8ih', 0, NULL, NULL),
(24, 'C.9', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ', 'Mitra', 'c9', 'NbCuBEg5JpnkRHhm', 0, NULL, NULL),
(25, 'C.9', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ', 'Pengguna Lulusan', 'c9', 'NbCuBEg5JpnkRHhm', 0, NULL, NULL),
(26, 'C.3', 'Instrumen Kepuasan atas Standar Layanan Kemahasiswaan', 'Pengguna Lulusan', 'c3', '', 0, NULL, NULL);

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
  `tampil_grafik` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instrumen`
--

INSERT INTO `instrumen` (`id`, `kodeCategory`, `kodeInstrumen`, `namaInstrumen`, `peruntukkanInstrumen`, `slug`, `tampil_grafik`, `created_at`, `updated_at`) VALUES
(7, 'C.2', 'C.2.3', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'Mahasiswa', 'c2', 0, NULL, NULL),
(8, 'C.2', 'C.2.4', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'Alumni/Lulusan', 'c2', 0, NULL, NULL),
(9, 'C.2', 'C.2.5', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Pengguna Lulusan', 'Pengguna Lulusan', 'c2', 0, NULL, NULL),
(10, 'C.2', 'C.2.6.a', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'Mitra', 'c2', 0, NULL, NULL),
(11, 'C.2', 'C.2.6.b', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'Partners', 'c2', 0, NULL, NULL),
(12, 'C.3', 'C.3.1', 'Instrumen Kepuasan atas Standar Layanan Kemahasiswaan oleh Mahasiswa', 'Mahasiswa', 'c3', 0, NULL, NULL),
(13, 'C.3', 'C.3.2', 'Instrumen Kepuasan atas Standar Layanan Kemahasiswaan oleh Alumni/Lulusan', 'Alumni/Lulusan', 'c3', 0, NULL, NULL),
(14, 'C.3', 'C.3.3', 'Instrumen Kepuasan atas Standar Layanan Kemahasiswaan oleh Pengguna Lulusan', 'Pengguna Lulusan', 'c3', 0, NULL, NULL),
(15, 'C.4', 'C.4.1', 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'Dosen', 'c4', 1, NULL, '2021-12-12 15:25:11'),
(16, 'C.4', 'C.4.2', 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'Tenaga Kependidikan', 'c4', 0, NULL, NULL),
(19, 'C.7', 'C.7.2', 'Instrumen atas Proses Penelitian UNJ oleh Mitra', 'Mitra', 'c7', 0, NULL, '2021-12-13 18:10:15'),
(20, 'C.8', 'C.8.1', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'Pengabdi', 'c8', 0, NULL, NULL),
(21, 'C.9', 'C.9.2', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'Mitra', 'c9', 0, NULL, NULL),
(27, 'C.7', 'C.7.1', 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'Peneliti', 'c7', 0, '2021-12-13 18:10:40', '2021-12-13 18:10:40'),
(28, 'C.8', 'C.8.2', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'Mitra', 'c8', 0, '2021-12-13 18:15:51', '2021-12-13 18:15:51'),
(29, 'C.9', 'C.9.1', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'Pengguna Lulusan', 'c9', 0, '2021-12-13 18:18:24', '2021-12-13 18:18:24');

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
(4, 'Alumni/Lulusan'),
(1, 'Dosen'),
(3, 'Mahasiswa'),
(6, 'Mitra'),
(7, 'Partners'),
(8, 'Peneliti'),
(9, 'Pengabdi'),
(11, 'Pengelola Keuangan Unit'),
(5, 'Pengguna Lulusan'),
(2, 'Tenaga Kependidikan');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `laporanInstrumen` varchar(255) NOT NULL,
  `instrumenID` int(100) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `laporanInstrumen`, `instrumenID`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Laporan Instrumen Kepuasan - FMIPA UNJ - 2020.docx', 0, 'admin', '', '2021-12-12 15:22:49', '2021-12-12 15:22:49');

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
-- Table structure for table `pertanyaan_data_diri`
--

CREATE TABLE `pertanyaan_data_diri` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jenisRespondenID` int(11) NOT NULL,
  `uniqueId` varchar(255) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan_data_diri`
--

INSERT INTO `pertanyaan_data_diri` (`id`, `pertanyaan`, `jenisRespondenID`, `uniqueId`, `jenis`) VALUES
(1, 'fullname', 4, 'lhUn26b8p3cAzvYi', 'isian'),
(2, 'Asal Program Studi', 4, 'Kd2YOcpu0irBPj3X', 'pilihan'),
(3, 'fullname', 1, 'nqlzuZJGy5wp1cB9', 'isian'),
(4, 'Program Studi', 1, 'nt2m3fQlxHcyFdrC', 'pilihan'),
(5, 'fullname', 3, 'ZBmYA65LczKEtIfh', 'isian'),
(6, 'Program Studi', 3, 'gcHKPI3D2sxUjodz', 'pilihan'),
(7, 'fullname', 2, 'zhVnPwq4CiWYLEbk', 'isian'),
(9, 'fullname', 6, 'me4ls2cfLgkXoIKO', 'isian'),
(13, 'Name', 7, 'UFm7GtZ8d1YHovbO', 'isian'),
(16, 'fullname', 8, 'B9aHpMYKDmejZstr', 'isian'),
(17, 'Program Studi', 8, 'xbHQgjusi4BWRNPL', 'pilihan'),
(18, 'fullname', 9, 'qahuPyJCfINmnt15', 'isian'),
(19, 'Program Studi', 9, 'Fm5z81MlUNCeEYAf', 'pilihan'),
(20, 'fullname', 5, 'w0n3ZSbQjHduEg9V', 'isian'),
(23, 'fullname', 11, 'V5I8KJpNUjTH0EAi', 'isian'),
(24, 'Unit', 11, 'MEtCw85JV3GSyfRg', 'isian'),
(51, 'Unit/Biro/Lembaga', 2, 'Vq6O5IPYWfykvtab', 'isian'),
(52, 'Lembaga/Unit/Institusi/Industri', 6, 'SN1cB86g9RyVZFzX', 'isian'),
(53, 'Alamat', 6, '6nNVHydZ9CE0WYmu', 'isian'),
(54, 'Institution/Workplace', 7, 'vKRDUkfJmwQd1B2O', 'isian'),
(55, 'Address', 7, 'pEkeClFLKVjGqtbh', 'isian'),
(56, 'Institusi/Tempat Kerja', 5, 'cgkLR75NxZOQ4Frv', 'isian'),
(57, 'Asal Program Studi Yang Dinilai', 5, '6yzVTkWSsfDUZp2Q', 'pilihan');

-- --------------------------------------------------------

--
-- Table structure for table `petunjuk_instrumen`
--

CREATE TABLE `petunjuk_instrumen` (
  `id` int(11) NOT NULL,
  `isiPetunjuk` text NOT NULL,
  `instrumenID` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petunjuk_instrumen`
--

INSERT INTO `petunjuk_instrumen` (`id`, `isiPetunjuk`, `instrumenID`, `created_at`, `updated_at`) VALUES
(2, '<p>a) Kami mohon Bapak/Ibu memberikan penilaian terhadap standar pengelolaan SDM UNJ selama menjadi dosen dalam kurun waktu 5 (lima) tahun terakhir.<br>b) Informasi yang Bapak/Ibu berikan sangat besar manfaatnya untuk perbaikan dan peningkatan mutu UNJ di masa datang. Oleh karena itu, kami mohon Bapak/Ibu memberikan penilaian sesuai dengan keadaan yang sebenarnya.<br>c) Setiap jawaban Bapak/Ibu dijamin kerahasiaannya.<br>d) Berilah tanda centang (√) pada kolom yang disediakan sesuai dengan tingkat kepuasan Bapak/Ibu.<br>Keterangan:<br>5 = Sangat Puas<br>4 = Puas<br>3 = Cukup Puas<br>2 = Tidak Puas<br>1 = Sangat Tidak Puas<br></p>', 15, NULL, NULL),
(3, '<p>a)&nbsp;&nbsp;&nbsp; Saudara adalah mahasiswa UNJ. Saudara diminta untuk memberikan penilaian terhadap layanan yang diberikan selama mengikuti pendidikan di UNJ sesuai dengan keadaan yang sebenarnya. <br>b)&nbsp;&nbsp;&nbsp; Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang. <br>c)&nbsp;&nbsp;&nbsp; Setiap jawaban Saudara akan dijamin kerahasiaannya. <br>d)&nbsp;&nbsp;&nbsp; Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.<br>e)&nbsp;&nbsp;&nbsp; Keterangan:<br><br>5 &nbsp;&nbsp;&nbsp; = Sangat Puas<br>4&nbsp;&nbsp;&nbsp; = Puas&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br>3&nbsp;&nbsp;&nbsp; = Kurang Puas<br>2&nbsp;&nbsp;&nbsp; = Tidak Puas&nbsp;&nbsp;&nbsp; <br>1&nbsp;&nbsp;&nbsp; = Sangat Tidak Puas&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br><br></p>', 7, '2021-12-13 12:24:06', '2021-12-13 12:24:06'),
(4, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah alumni/lulusan UNJ. Saudara diminta untuk memberikan penilaian terhadap layanan yang diberikan selama mengikuti pendidikan di UNJ sesuai dengan keadaan yang sebenarnya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Tidak Puas<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Sangat Tidak Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"white-space: pre; font-size: 15.6px;\">	</span></p><div><br></div>', 8, '2021-12-13 17:23:50', '2021-12-13 17:23:50'),
(5, '<p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah pengguna lulusan UNJ. Saudara diminta untuk memberikan penilaian terhadap lulusan UNJ selama bekerja di institusi anda.</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Tidak Puas<span style=\"white-space:pre\">	</span></span></p><div><br></div> ', 9, '2021-12-13 17:39:53', '2021-12-13 17:41:34'),
(6, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah mitra UNJ. Saudara diminta untuk memberikan penilaian terhadap layanan yang diberikan selama bekerja sama dengan UNJ sesuai dengan keadaan yang sebenarnya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas</span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Kurang Puas</span></p><p><span style=\"font-size: 15.6px;\">2<span style=\"white-space:pre\">	</span>= Tidak Puas<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Sangat Tidak Puas<span style=\"white-space:pre\">		</span></span></p><p><br></p>', 10, '2021-12-13 17:48:08', '2021-12-13 17:48:08'),
(7, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>You are a partner of UNJ. You are asked to provide an assessment of the services provided while working with UNJ according to the actual situation.</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Every information you provide is very beneficial for the improvement and improvement of UNJ services in the future.</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Your answers will be guaranteed confidentiality.</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Put a check mark (√) in the statement in the column provided below.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Description:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5 = Vary Satisfied</span></p><p><span style=\"font-size: 15.6px;\">4 = Satisfied</span></p><p><span style=\"font-size: 15.6px;\">3 = Enough Satisfied</span></p><p><span style=\"font-size: 15.6px;\">2 = Not Satisfied</span></p><p><span style=\"font-size: 15.6px;\">1 = Very Not Satisfied<span style=\"white-space:pre\">	</span></span></p><div><br></div>', 11, '2021-12-13 17:51:01', '2021-12-13 17:51:01'),
(8, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah mahasiswa UNJ. Saudara diminta untuk memberikan penilaian terhadap layanan yang diberikan selama mengikuti pendidikan di UNJ sesuai dengan keadaan yang sebenarnya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Tidak Puas<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Sangat Tidak Puas<span style=\"white-space:pre\">		</span></span></p><p><br></p>', 12, '2021-12-13 17:56:28', '2021-12-13 17:56:28'),
(9, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah alumni UNJ. Saudara diminta untuk memberikan penilaian terhadap layanan yang diberikan selama mengikuti pendidikan di UNJ sesuai dengan keadaan yang sebenarnya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">SB<span style=\"white-space:pre\">	</span>= Sangat Besar<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">B<span style=\"white-space:pre\">	</span>= Besar</span></p><p><span style=\"font-size: 15.6px;\">C<span style=\"white-space:pre\">	</span>= Cukup</span></p><p><span style=\"font-size: 15.6px;\">K<span style=\"white-space:pre\">	</span>= Kecil<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">SK<span style=\"white-space:pre\">	</span>= Sangat Kecil</span></p><p><br></p>', 13, '2021-12-13 17:59:02', '2021-12-13 17:59:02'),
(10, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah tenaga kependidikan UNJ. Saudara diminta untuk memberikan penilaian terhadap pengelolaan SDM yang diberikan selama menjadi tenaga kependidikan di UNJ sesuai dengan keadaan yang sebenarnya.</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Tidak Puas<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Sangat Tidak Puas<span style=\"white-space:pre\">	</span></span></p><div><br></div>', 16, '2021-12-13 18:05:03', '2021-12-13 18:05:03'),
(11, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah mitra dari UNJ. Saudara diminta untuk memberikan penilaian terhadap proses penelitian selama di UNJ sesuai dengan keadaan yang sebenarnya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Tidak Puas<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Sangat Tidak Puas<span style=\"white-space:pre\">	</span></span></p><div><br></div>', 19, '2021-12-13 18:07:14', '2021-12-13 18:07:14'),
(12, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah peneliti dari UNJ. Saudara diminta untuk memberikan penilaian terhadap proses penelitian selama di UNJ sesuai dengan keadaan yang sebenarnya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Tidak Puas<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Sangat Tidak Puas<span style=\"white-space:pre\">	</span></span></p><div><br></div>', 27, '2021-12-13 18:11:06', '2021-12-13 18:11:06'),
(13, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah pengabdi dari UNJ. Saudara diminta untuk memberikan penilaian terhadap proses pengabdian selama di UNJ sesuai dengan keadaan yang sebenarnya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Tidak Puas<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Sangat Tidak Puas<span style=\"white-space:pre\">		</span></span></p><div><br></div>', 20, '2021-12-13 18:13:56', '2021-12-13 18:13:56'),
(14, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah mitra dari UNJ. Saudara diminta untuk memberikan penilaian terhadap proses pengabdian selama di UNJ sesuai dengan keadaan yang sebenarnya.</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Tidak Puas<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Sangat Tidak Puas<span style=\"white-space:pre\">	</span></span></p><div><br></div>', 28, '2021-12-13 18:16:18', '2021-12-13 18:16:18'),
(15, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah mitra dari UNJ. Saudara diminta untuk memberikan penilaian terhadap luaran selama di UNJ sesuai dengan keadaan yang sebenarnya.</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Tidak Puas<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Sangat Tidak Puas<span style=\"white-space:pre\">		</span></span></p><div><br></div>', 21, '2021-12-13 18:18:43', '2021-12-13 18:18:43'),
(16, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah pengguna lulusan UNJ. Saudara diminta untuk memberikan penilaian terhadap luaran UNJ yang anda rasakan atas lulusan UNJ yang bekerja di institusi anda sesuai dengan keadaan yang sebenarnya.</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"white-space: pre; font-size: 15.6px;\">		</span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Sangat Baik</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Baik</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Cukup<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Kurang<span style=\"white-space:pre\">		</span></span></p><div><br></div>', 29, '2021-12-13 18:19:54', '2021-12-13 18:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_jawaban_data_diri`
--

CREATE TABLE `pilihan_jawaban_data_diri` (
  `id` int(11) NOT NULL,
  `pertanyaanID` int(11) NOT NULL,
  `pilihan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pilihan_jawaban_data_diri`
--

INSERT INTO `pilihan_jawaban_data_diri` (`id`, `pertanyaanID`, `pilihan`) VALUES
(1, 2, 'Pendidikan Matematika'),
(2, 2, 'Matematika'),
(3, 2, 'Statistika'),
(4, 2, 'Ilmu Komputer'),
(5, 2, 'Pendidikan Fisika'),
(6, 2, 'Fisika'),
(7, 2, 'Pendidikan Kimia'),
(8, 2, 'Kimia'),
(9, 2, 'Pendidikan Biologi'),
(10, 2, 'Biologi'),
(11, 4, 'Pendidikan Matematika'),
(12, 4, 'Matematika'),
(13, 4, 'Statistika'),
(14, 4, 'Ilmu Komputer'),
(15, 4, 'Pendidikan Fisika'),
(16, 4, 'Fisika'),
(17, 4, 'Pendidikan Kimia'),
(18, 4, 'Kimia'),
(19, 4, 'Pendidikan Biologi'),
(20, 4, 'Biologi'),
(21, 6, 'Pendidikan Matematika'),
(22, 6, 'Matematika'),
(23, 6, 'Statistika'),
(24, 6, 'Ilmu Komputer'),
(25, 6, 'Pendidikan Fisika'),
(26, 6, 'Fisika'),
(27, 6, 'Pendidikan Kimia'),
(28, 6, 'Kimia'),
(29, 6, 'Pendidikan Biologi'),
(30, 6, 'Biologi'),
(41, 17, 'Pendidikan Matematika'),
(42, 17, 'Matematika'),
(43, 17, 'Statistika'),
(44, 17, 'Ilmu Komputer'),
(45, 17, 'Pendidikan Fisika'),
(46, 17, 'Fisika'),
(47, 17, 'Pendidikan Kimia'),
(48, 17, 'Kimia'),
(49, 17, 'Pendidikan Biologi'),
(50, 17, 'Biologi'),
(51, 19, 'Pendidikan Matematika'),
(52, 19, 'Matematika'),
(53, 19, 'Statistika'),
(54, 19, 'Ilmu Komputer'),
(55, 19, 'Pendidikan Fisika'),
(56, 19, 'Fisika'),
(57, 19, 'Pendidikan Kimia'),
(58, 19, 'Kimia'),
(59, 19, 'Pendidikan Biologi'),
(60, 19, 'Biologi'),
(87, 57, 'Pendidikan Matematika'),
(88, 57, 'Matematika'),
(89, 57, 'Statistika'),
(90, 57, 'Ilmu Komputer'),
(91, 57, 'Pendidikan Fisika'),
(92, 57, 'Fisika'),
(93, 57, 'Pendidikan Kimia'),
(94, 57, 'Kimia'),
(95, 57, 'Pendidikan Biologi'),
(96, 57, 'Biologi');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama_prodi`) VALUES
(10, 'Biologi'),
(6, 'Fisika'),
(4, 'Ilmu Komputer'),
(8, 'Kimia'),
(2, 'Matematika'),
(9, 'Pendidikan Biologi'),
(5, 'Pendidikan Fisika'),
(7, 'Pendidikan Kimia'),
(1, 'Pendidikan Matematika'),
(3, 'Statistika');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `butir` varchar(255) NOT NULL,
  `kodeCategory` varchar(255) NOT NULL,
  `instrumenID` int(11) DEFAULT NULL,
  `namaInstrumen` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `butir`, `kodeCategory`, `instrumenID`, `namaInstrumen`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'UNJ memiliki dan menjalankan sistem seleksi, rekrutmen, orientasi, dan penempatan serta pengembangan dosen secara meritokrasi.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(2, 'Ada pemberitahuan atau pengumuman tentang permintaan tenaga dosen yang baru.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(3, 'Perencanaan kebutuhan dosen jangka panjang diinformasikan secara terbuka.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(4, 'Rekrutmen dosen dilakukan secara transparan dan melalui test yang terpercaya', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(5, 'Sistem seleksi dilakukan secara terbuka dengan pendekatan prestasi', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(6, 'Pemberhentian dosen dilakukan sesuai perundangan yang berlaku, dengan tingkat kesalahan mulai ringan hingga berat dan tergantung skala kesalahan.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(7, 'Saya mendapatkan penempatan yang sesuai dengan kapasitas dan bidang saya', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(8, 'Ada upaya yang sungguh-sungguh dari UNJ untuk peningkatan kompetensi bagi dosen sesuai TUPOKSI.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(9, 'UNJ menyediakan fasilitas pendukung yang memadai terhadap tanggung jawab pekerjaan yang saya kerjakan.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(10, 'Informasi yang terkait dan menunjang pekerjaan saya dapat diakses dengan mudah.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(11, 'UNJ memberikan informasi dan menyelenggarakan layanan kenaikan jabatan fungsional dan struktural secara periodik.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(12, 'Saya mendapatkan kesempatan untuk mengikuti pelatihan/workshop/seminar yang dibutuhkan untuk pengembangan diri.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(13, 'Sistem kepegawaian di UNJ menentukan jenjang karir dosen berdasarkan prestasi kerja(meritokrasi)', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(14, 'Saya merasa nyaman dan tenang ditempat kerja karena fasilitas yang tersedia sudah memadai.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(15, 'UNJ memiliki dan menjalankan sistem pembinaan pegawai dalam bentuk pemberian penghargaan dan sanksi hukuman(reward and punishment system)', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(16, 'UNJ telah menyelenggarakan sistem penggajian, tunjangan dan atau insentif yang layak dan mencukupi.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(17, 'Pimpinan unit kerja memberikan sanksi secara tepat dan adil terhadap kesalahan yang dilakukan dosen.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(18, 'Pimpinan unit kerja menilai dan mengevaluasi pekerjaan yang dilakukan dosen secara periodik.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(19, 'Pimpinan unit kerja memberikan pujian dan penghargaan terhadap prestasi yang dicapai dalam pengembangan karir.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(20, 'Pimpinan Unit Kerja menanggapi dan menindak lanjuti kritik, saran, dan keluhan yang disampaikan dosen.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL),
(21, 'Bagaimana tanggapan anda mengenai layanan akademik:\r\nRencana pembelajaran dari dosen (SAP/Silabus)					\r\n', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:56', '2021-12-13 12:31:30'),
(22, 'Bagaimana tanggapan anda mengenai layanan akademik: Layanan KRS Online', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:56', '2021-12-13 12:32:08'),
(23, 'Bagaimana tanggapan anda mengenai layanan Non akademik berikut:					\r\nKegiatan pendukung akademik untuk pengembangan diri					', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:56', '2021-12-13 12:32:25'),
(24, 'Bagaimana tanggapan anda mengenai layanan Non akademik berikut:\r\nLayanan kegiatan mahasiswa', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:56', '2021-12-13 12:32:48'),
(25, 'Bagaimana tanggapan anda mengenai Akses/Kemudahan untuk melakukan bimbingan dan konseling', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:56', '2021-12-13 12:33:16'),
(26, 'Bagaimana tanggapan anda mengenai mutu bimbingan dan konseling yang disediakan', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:57', '2021-12-13 12:33:41'),
(27, 'Bagaimana tanggapan anda mengenai Akses/Kemudahan untuk mendapatkan beasiswa', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:57', '2021-12-13 12:34:15'),
(28, 'Bagaimana tanggapan anda mengenai Mutu pelayanan beasiswa', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:57', '2021-12-13 12:34:33'),
(29, 'Bagaimana tanggapan anda terhadap Akses/Kemudahan untuk mendapatkan layanan kesehatan', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:57', '2021-12-13 12:34:56'),
(30, 'Bagaimana tanggapan anda terhadap Mutu layanan kesehatan', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:57', '2021-12-13 12:35:15'),
(31, 'Bagaimana Tanggapan anda mengenai layanan Staf Administrasi berikut:\r\nKecepatan layanan', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:57', '2021-12-13 12:30:57'),
(32, 'Bagaimana Tanggapan anda mengenai layanan Staf Administrasi berikut:\r\nKemudahan layanan', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:57', '2021-12-13 12:30:57'),
(33, 'Bagaimana Tanggapan anda mengenai layanan Staf Administrasi berikut:\r\nKeramahan Staf', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:57', '2021-12-13 12:30:57'),
(34, 'Bagaimana Tanggapan anda mengenai layanan Staf Administrasi berikut:\r\nKerapihan Staf', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:57', '2021-12-13 12:30:57'),
(35, 'Bagaimana Tanggapan anda mengenai layanan Staf Administrasi berikut:\r\nKetanggapan Staf', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:57', '2021-12-13 12:30:57'),
(36, 'Bagaimana Tanggapan anda mengenai layanan administratif berikut:\r\nPangajuan izin kegiatan', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:58', '2021-12-13 12:30:58'),
(37, 'Bagaimana Tanggapan anda mengenai layanan administratif berikut:\r\nKemudahan administrasi akademik (transkip nilai, ijin penelitian, ijin magang, dll)', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:58', '2021-12-13 12:30:58'),
(38, 'Bagaimana Tanggapan anda mengenai layanan administratif berikut:\r\nAdministrasi registrasi', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:58', '2021-12-13 12:30:58'),
(39, 'Bagaimana Tanggapan anda mengenai layanan administratif berikut:\r\nAdministrasi nilai mata kuliah', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:58', '2021-12-13 12:30:58'),
(40, 'Bagaimana Tanggapan anda mengenai layanan administratif berikut:\r\nSiakad', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:58', '2021-12-13 12:30:58'),
(41, 'Fasilitas sarana (peralatan kuliah, peralatan kegiatan diluar kelas)', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:58', '2021-12-13 12:30:58'),
(42, 'Fasilitas prasarana (tempat parkir, ruang kuliah,ruang laboratorium, tempat ibadah/masjid, toilet,poli klinik,olahraga kantin dll ) ', 'C.2', 7, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'c2', '2021-12-13 12:30:58', '2021-12-13 12:30:58'),
(43, 'Proses Belajar Mengajar: Dosen', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:11', '2021-12-13 17:29:11'),
(44, 'Proses Belajar Mengajar: Progam studi selalu berupaya untuk meningkatkan daya saing para lulusan					', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(45, 'Proses Belajar Mengajar: Pembimbing Akademik	', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(46, 'Proses Belajar Mengajar: Teori untuk menunjang pengetahuan dan keterampilan', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(47, 'Proses Belajar Mengajar: Progam studi selalu berupaya untuk meningkatkan daya saing para lulusan	', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(48, 'Administrasi : Pelayanan secara menyeluruh dari pegawai administrasi					', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(49, 'Administrasi :  Jadwal Perkuliahan dan Jadwal Ujian					\r\n			', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(50, 'Administrasi : Pengumuman nilai					\r\n', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(51, 'Administrasi : Penyebaran Informasi		', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(52, 'Administrasi : Pelayanan Akademik					\r\n', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(53, 'Administrasi : Pelayanan Kemahasiswaan					\r\n', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(54, 'Fasilitas Mahasiswa: Keamanan dan keselamatan kampus		', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(55, 'Fasilitas Mahasiswa:  Beasiswa (informasi dan pelayanan)', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:12', '2021-12-13 17:29:12'),
(56, 'Fasilitas Mahasiswa: Atmosfer akademik kampus					', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:13', '2021-12-13 17:29:13'),
(57, 'Fasilitas Mahasiswa: Aktifitas alumni					\r\n', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:13', '2021-12-13 17:29:13'),
(58, 'Fasilitas sarana (peralatan kuliah, peralatan kegiatan diluar kelas)					', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:13', '2021-12-13 17:29:13'),
(59, 'Fasilitas prasarana (tempat parkir, ruang kuliah,ruang laboratorium, tempat ibadah/masjid, toilet,poli klinik,olahraga kantin dll ) 					', 'C.2', 8, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'c2', '2021-12-13 17:29:13', '2021-12-13 17:29:13'),
(60, 'Apakah institusi anda merasa puas terhadap manajemen kurikulum yang membentuk kompetensi lulusan UNJ?					\r\n', 'C.2', 9, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Pengguna Lulusan', 'c2', '2021-12-13 17:47:07', '2021-12-13 17:47:07'),
(61, 'Apakah institusi anda merasa puas dengan kompetensi (hardskill dan softskill) lulusan UNJ?					\r\n', 'C.2', 9, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Pengguna Lulusan', 'c2', '2021-12-13 17:47:07', '2021-12-13 17:47:07'),
(62, 'Apakah institusi anda merasa puas dengan sistem pendidikan yang ditempuh mahasiswa di UNJ?					\r\n', 'C.2', 9, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Pengguna Lulusan', 'c2', '2021-12-13 17:47:07', '2021-12-13 17:47:07'),
(63, 'MOU merupakan kesepakatan dan disusun bersama antara UNJ dengan mitra.					', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:52', '2021-12-13 17:49:52'),
(64, 'Kesesuaian langkah-langkah yang diambil UNJ dengan yang telah disepakati di MOU.					', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:52', '2021-12-13 17:49:52'),
(65, 'Sumber daya manusia UNJ yang terlibat dalam kegiatan kerjasama memiliki pengetahuan, keterampilan,dan sikap yang diperlukan untuk melaksanakan kegiatan kerjasama', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:52', '2021-12-13 17:49:52'),
(66, 'Kecepatan UNJ dalam menyusun langkah-langkah nyata untuk memulai kegiatan kerjasama', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:52', '2021-12-13 17:49:52'),
(67, 'Prosedur pengurusan administrasi dan birokrasi mudah dan tidak berbelit-belit.', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:53', '2021-12-13 17:49:53'),
(68, 'Staf yang terlibat langsung dalam kegiatan kerjasama bekerja secara profesional dengan penuh tanggung jawab sesuai dengan standar yang telah disepakati kedua belah pihak', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:53', '2021-12-13 17:49:53'),
(69, 'Pelayanan birokrasi dan administrasi oleh semua dari UNJ yang terlibat dalam kegiatan kerjasama diberikan dengan ramah, sopan, dan hormat. ', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:53', '2021-12-13 17:49:53'),
(70, 'Pelayanan administrasi ditangani secara terampil oleh tenaga-tenaga yang memiliki pemahaman yang baik tentang kegiatan kerjasama.', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:53', '2021-12-13 17:49:53'),
(71, 'Proses dan hasil kerjasama memenuhi standar mutu sesuai dengan yang telah disepakati', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:53', '2021-12-13 17:49:53'),
(72, 'Mitra memperoleh manfaat dari kegiatan kerjasama yang telah dilakukan.', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:53', '2021-12-13 17:49:53'),
(73, 'Dengan kerjasama, Program studi memperoleh manfaat dalam pemenuhan proses pembelajaran penelitian dan PKM', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:53', '2021-12-13 17:49:53'),
(74, 'Kerjasama memberikan peningkatan kinerja tridharma dan fasilitas pendukung program studi					', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:54', '2021-12-13 17:49:54'),
(75, 'Kerjasama memberikan kepuasan kepada mitra sehingga menjamin keberlanjutan kerjasama berikutnya', 'C.2', 10, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'c2', '2021-12-13 17:49:54', '2021-12-13 17:49:54'),
(76, 'The MOU is an agreement and was jointly drafted between UNJ and partners.', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:15', '2021-12-13 17:52:15'),
(77, 'The compatibility of the steps taken by UNJ with those agreed in the MOU.', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:15', '2021-12-13 17:52:15'),
(78, 'UNJ human resources involved in collaborative activities have the knowledge, skills and attitudes needed to carry out collaborative activities', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:15', '2021-12-13 17:52:15'),
(79, 'The speed of UNJ in formulating concrete steps to start collaborative activities.					', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:15', '2021-12-13 17:52:15'),
(80, 'The administrative and bureaucratic procedures are easy and straightforward.', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:15', '2021-12-13 17:52:15'),
(81, 'Staff directly involved in collaborative activities work professionally with full responsibility in accordance with standards agreed by both parties', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:16', '2021-12-13 17:52:16'),
(82, 'Bureaucratic and administrative services by all from UNJ involved in collaborative activities are provided in a friendly, polite and respectful manner.', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:16', '2021-12-13 17:52:16'),
(83, 'Administrative services are handled skillfully by staff who have a good understanding of cooperative activities.', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:16', '2021-12-13 17:52:16'),
(84, 'The process and results of the collaboration meet the quality standards in accordance with what was agreed upon', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:16', '2021-12-13 17:52:16'),
(85, 'Partners benefit from collaborative activities that have been carried out.', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:16', '2021-12-13 17:52:16'),
(86, 'With collaboration, the study program benefits in fulfilling the research learning process and community service.', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:16', '2021-12-13 17:52:16'),
(87, '12	Collaboration provides an increase in the performance of Tridharma (Three pillars : Education and Teaching, Research, Community service)   and facilities to support study programs					', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:16', '2021-12-13 17:52:16'),
(88, 'Collaboration gives satisfaction to partners so as to guarantee the sustainability of the next collaboration', 'C.2', 11, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'c2', '2021-12-13 17:52:16', '2021-12-13 17:52:16'),
(89, 'UNJ memiliki dan menjalankan sistem seleksi, rekrutmen, orientasi, dan penempatan serta pengembangan tenaga kependidikan secara meritokrasi.', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:29', '2021-12-13 18:06:29'),
(90, 'Ada pemberitahuan atau pengumuman tentang permintaan tenaga kependidikan yang baru.					', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:29', '2021-12-13 18:06:29'),
(91, 'Perencanaan kebutuhan tenaga kependidikan jangka panjang diinformasikan secara terbuka.', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:29', '2021-12-13 18:06:29'),
(92, 'Rekrutmen tenaga kependidikan dilakukan secara transparan dan melalui test yang terpercaya', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:30', '2021-12-13 18:06:30'),
(93, 'Sistem seleksi dilakukan secara terbuka dengan pendekatan prestasi', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:30', '2021-12-13 18:06:30'),
(94, 'Pemberhentian tenaga kependidikan dilakukan sesuai perundangan yang berlaku, dengan tingkat kesalahan mulai ringan hingga berat dan tergantung skala kesalahan.', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:30', '2021-12-13 18:06:30'),
(95, 'Saya mendapatkan penempatan yang sesuai dengan kapasitas dan bidang saya', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:30', '2021-12-13 18:06:30'),
(96, 'Ada upaya yang sungguh-sungguh dari UNJ untuk peningkatan kompetensi bagi tenaga kependidikan sesuai TUPOKSI.', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:30', '2021-12-13 18:06:30'),
(97, 'UNJ menyediakan fasilitas pendukung yang memadai terhadap tanggung jawab pekerjaan yang saya kerjakan.', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:30', '2021-12-13 18:06:30'),
(98, 'Informasi yang terkait dan menunjang pekerjaan saya dapat diakses dengan mudah.', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:30', '2021-12-13 18:06:30'),
(99, 'UNJ memberikan informasi dan menyelenggarakan layanan kenaikan jabatan fungsional dan struktural secara periodik.', 'C.4', 16, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'c4', '2021-12-13 18:06:30', '2021-12-13 18:06:30'),
(100, 'Lokasi yang mudah dijangkau dan strategies.', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:45', '2021-12-13 18:08:45'),
(101, 'Tempat parkir yang luas.', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:45', '2021-12-13 18:08:45'),
(102, 'Tempat mengantri yang baik', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:45', '2021-12-13 18:08:45'),
(103, 'Lokasi yang bersih dan asri', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:45', '2021-12-13 18:08:45'),
(104, 'Ketersediaan sarana komunikasi yang mempermudah pelayanan', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:46', '2021-12-13 18:08:46'),
(105, 'Fasilitas untuk kamar kecil', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:46', '2021-12-13 18:08:46'),
(106, 'Fasilitas kotak saran dan formulir saran di tempat strategis', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:46', '2021-12-13 18:08:46'),
(107, 'Kualitas sistem pelayanan yang memuaskan', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:46', '2021-12-13 18:08:46'),
(108, 'Akses internet (WiFi) di UNJ mendukung penelitian', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:46', '2021-12-13 18:08:46'),
(109, 'Akses Website lembaga di UNJ mendukung penelitian', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:46', '2021-12-13 18:08:46'),
(110, 'Karyawan melayani pengunjung  berdasarkan sesuai prosedur pelayanan', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:46', '2021-12-13 18:08:46'),
(111, 'Kecepatan tindakan karyawan pada saat ada keluhan dari pengunjung (dosen dan mahasiswa)', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:46', '2021-12-13 18:08:46'),
(112, 'Tanggapan dari pihak lembaga penelitian atas saran yang masuk dari pengunjung', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:47', '2021-12-13 18:08:47'),
(113, 'Respon yang baik pihak Lembaga Penelitian dengan adanya kritik dan saran dari mahasiswa dan dosen', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:47', '2021-12-13 18:08:47'),
(114, 'Tingkat kesabaran karyawan dalam menerima keluhan dari mahasiswa dan dosen', 'C.7', 19, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:08:47', '2021-12-13 18:08:47'),
(115, 'Tersediannya dana penelitian yang mencukupi', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:04', '2021-12-13 18:12:04'),
(116, 'Dukungan sarana prasarana yang memadai', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:04', '2021-12-13 18:12:04'),
(117, 'Tempat mengantri yang baik', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(118, 'Lokasi yang bersih dan asri', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(119, 'Ketersediaan sarana komunikasi yang mempermudah pelayanan', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(120, 'Fasilitas untuk kamar kecil', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(121, 'Fasilitas kotak saran dan formulir saran di tempat strategis', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(122, 'Kualitas sistem pelayanan yang memuaskan', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(123, 'Akses internet (WiFi) di UNJ mendukung penelitian', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(124, 'Akses Website lembaga di UNJ mendukung penelitian', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(125, 'Karyawan melayani pengunjung  berdasarkan sesuai prosedur pelayanan', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(126, 'Kecepatan tindakan karyawan pada saat ada keluhan dari pengunjung (dosen dan mahasiswa)', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(127, 'Tanggapan dari pihak lembaga penelitian atas saran yang masuk dari pengunjung', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(128, 'Respon yang baik pihak Lembaga Penelitian dengan adanya kritik dan saran dari mahasiswa dan dosen', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:05', '2021-12-13 18:12:05'),
(129, 'Tingkat kesabaran karyawan dalam menerima keluhan dari mahasiswa dan dosen', 'C.7', 27, 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'c7', '2021-12-13 18:12:06', '2021-12-13 18:12:06'),
(130, 'Lokasi yang mudah dijangkau dan strategies.', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:24', '2021-12-13 18:15:24'),
(131, 'Lokasi yang mudah dijangkau dan strategies.', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:24', '2021-12-13 18:15:24'),
(132, 'Tempat mengantri yang baik', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:25', '2021-12-13 18:15:25'),
(133, 'Lokasi yang bersih dan asri', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:25', '2021-12-13 18:15:25'),
(134, 'Ketersediaan sarana komunikasi yang mempermudah pelayanan', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:25', '2021-12-13 18:15:25'),
(135, 'Fasilitas untuk kamar kecil', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:25', '2021-12-13 18:15:25'),
(136, 'Fasilitas kotak saran dan formulir saran di tempat strategis', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:25', '2021-12-13 18:15:25'),
(137, 'Kualitas sistem pelayanan yang memuaskan', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:25', '2021-12-13 18:15:25'),
(138, 'Akses internet (WiFi) di UNJ mendukung pengabdian', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:25', '2021-12-13 18:15:25'),
(139, 'Akses Website lembaga di UNJ mendukung pengabdian', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:25', '2021-12-13 18:15:25'),
(140, 'Karyawan melayani pengunjung  berdasarkan sesuai prosedur pelayanan', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:26', '2021-12-13 18:15:26'),
(141, 'Kecepatan tindakan karyawan pada saat ada keluhan dari pengunjung (dosen dan mahasiswa)', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:26', '2021-12-13 18:15:26'),
(142, 'Tanggapan dari pihak lembaga pengabdian atas saran yang masuk dari pengunjung', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:26', '2021-12-13 18:15:26'),
(143, 'Respon yang baik pihak Lembaga Pengabdian dengan adanya kritik dan saran dari mahasiswa dan dosen					', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:26', '2021-12-13 18:15:26'),
(144, 'Tingkat kesabaran karyawan dalam menerima keluhan dari mahasiswa dan dosen', 'C.8', 20, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'c8', '2021-12-13 18:15:26', '2021-12-13 18:15:26'),
(145, 'Lokasi yang mudah dijangkau dan strategies.', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:32', '2021-12-13 18:17:32'),
(146, 'Tempat parkir yang luas.', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:32', '2021-12-13 18:17:32'),
(147, 'Tempat mengantri yang baik', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:32', '2021-12-13 18:17:32'),
(148, 'Lokasi yang bersih dan asri', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:32', '2021-12-13 18:17:32'),
(149, 'Ketersediaan sarana komunikasi yang mempermudah pelayanan', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:32', '2021-12-13 18:17:32'),
(150, 'Fasilitas untuk kamar kecil', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:33', '2021-12-13 18:17:33'),
(151, 'Fasilitas kotak saran dan formulir saran di tempat strategis', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:33', '2021-12-13 18:17:33'),
(152, 'Kualitas sistem pelayanan yang memuaskan', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:33', '2021-12-13 18:17:33'),
(153, 'Akses internet (WiFi) di UNJ mendukung pengabdian', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:33', '2021-12-13 18:17:33'),
(154, 'Akses Website lembaga di UNJ mendukung pengabdian', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:33', '2021-12-13 18:17:33'),
(155, 'Karyawan melayani pengunjung  berdasarkan sesuai prosedur pelayanan', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:34', '2021-12-13 18:17:34'),
(156, 'Kecepatan tindakan karyawan pada saat ada keluhan dari pengunjung (dosen dan mahasiswa)', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:34', '2021-12-13 18:17:34'),
(157, 'Tanggapan dari pihak lembaga pengabdian atas saran yang masuk dari pengunjung', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:34', '2021-12-13 18:17:34'),
(158, 'Respon yang baik pihak Lembaga Pengabdian dengan adanya kritik dan saran dari mahasiswa dan dosen					', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:34', '2021-12-13 18:17:34'),
(159, 'Tingkat kesabaran karyawan dalam menerima keluhan dari mahasiswa dan dosen', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:34', '2021-12-13 18:17:34'),
(160, 'Kemudahan mendapat informasi tentang sistem pelayanan yang diberikan Lembaga Pengabdian', 'C.8', 28, 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'c8', '2021-12-13 18:17:34', '2021-12-13 18:17:34'),
(161, 'Staff kerjasama Universitas Negeri Jakarta  (UNJ) merespon pada kebutuhan kami dengan tepat dan profesional', 'C.9', 21, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'c9', '2021-12-13 18:19:24', '2021-12-13 18:19:24'),
(162, 'Staff kerjasama Universitas Negeri Jakarta  (UNJ) merespon pada kebutuhan kami dengan tepat dan profesional', 'C.9', 21, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'c9', '2021-12-13 18:19:25', '2021-12-13 18:19:25'),
(163, 'Proses pembuatan naskah kerjasama cepat', 'C.9', 21, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'c9', '2021-12-13 18:19:25', '2021-12-13 18:19:25'),
(164, 'Kami mendapatkan hal yang berguna dari kerjasama antara institusi kami dan UNJ', 'C.9', 21, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'c9', '2021-12-13 18:19:25', '2021-12-13 18:19:25'),
(165, 'Kami akan mengembangkan / melanjutkan kerjasama di bidang yang sama dengan UNJ', 'C.9', 21, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'c9', '2021-12-13 18:19:25', '2021-12-13 18:19:25'),
(166, 'UNJ memberikan pendampingan/bantuan terhadap instansi kami saat dibutuhkan					', 'C.9', 21, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'c9', '2021-12-13 18:19:25', '2021-12-13 18:19:25'),
(167, 'Kerjasama/kegiatan ini sesuai dengan harapan kami', 'C.9', 21, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'c9', '2021-12-13 18:19:25', '2021-12-13 18:19:25'),
(168, 'Kerjasama antara UNJ dengan Instansi kami telah kami implementasikan dengan kegiatan yang sesuaidengan MoU yang telah kami sepakati bersama', 'C.9', 21, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'c9', '2021-12-13 18:19:25', '2021-12-13 18:19:25'),
(169, 'Pelaporan akhir dari hasil kegiatan kerjasama telah di buat dan dikomunikasikan dengan kami.', 'C.9', 21, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'c9', '2021-12-13 18:19:25', '2021-12-13 18:19:25'),
(170, 'Kejujuran', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:21:42', '2021-12-13 18:21:42'),
(171, 'Kedispilinan', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:21:42', '2021-12-13 18:21:42'),
(172, 'Konsistensi', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:21:42', '2021-12-13 18:21:42'),
(173, 'Tanggung jawab (penyelesaian tugas tepat waktu, hasil pekerjaan berkualitas baik)', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:21:42', '2021-12-13 18:21:42'),
(174, 'Kemampuan menganalisis permasalahan–permasalahan dan kebijakan sesuai dengan keilmuannya', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:21:42', '2021-12-13 18:21:42'),
(175, 'Kemampuan mengambil keputusan berdasarkan pada analisis \r\ndan pertimbangan fungsional sesuai bidang keilmuannya\r\n', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:21:42', '2021-12-13 18:21:42'),
(176, 'Kemampuan berbahasa asing: Membaca', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:21:42', '2021-12-13 18:21:42'),
(177, 'Kemampuan berbahasa asing: Menulis', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:21:42', '2021-12-13 18:21:42'),
(178, 'Kemampuan berbahasa asing: Berbicara', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:21:42', '2021-12-13 18:21:42'),
(179, 'Kemampuan menggunakan teknologi yang berkaitan dengan bidang pekerjaan', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:06', '2021-12-13 18:24:06'),
(180, 'Kemampuan memanfaatkan media atau sarana kerja modern (faksimili, mesin fotocopy, dll)', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:06', '2021-12-13 18:24:06'),
(181, 'Kemampuan mempresentasikan ide, hasil atau laporan', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:06', '2021-12-13 18:24:06'),
(182, 'Kemampuan berkomunikasi dalam forum formal/informal', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:06', '2021-12-13 18:24:06'),
(183, 'Kemampuan mengkoordinasikan kegiatan', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:06', '2021-12-13 18:24:06'),
(184, 'Kemampuan mengelola waktu secara efisien', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:07', '2021-12-13 18:24:07'),
(185, 'Kemampuan menyelesaikan berbagai aktivitas dalam kerja kelompok', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:07', '2021-12-13 18:24:07'),
(186, 'Kemampuan bekerjasama produktif dengan orang lain', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:07', '2021-12-13 18:24:07'),
(187, 'Minat untuk mengikuti pelatihan', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:07', '2021-12-13 18:24:07'),
(188, 'Pemanfaatan internet untuk menambah pengetahuan dan wawasan', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:07', '2021-12-13 18:24:07'),
(189, 'Kepekaan terhadap kesempatan-kesempatan baru', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:07', '2021-12-13 18:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `id` int(255) NOT NULL,
  `userID` int(11) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id`, `userID`, `role`, `fullname`, `created_at`, `updated_at`) VALUES
(2, 60, 'Mahasiswa', 'Maura Qoonitah Putri', '2021-12-13 14:21:21', '2021-12-13 14:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `kodeInstrumen` varchar(100) NOT NULL,
  `instrumenID` int(11) NOT NULL,
  `questionID` int(11) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `responden` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL,
  `uniqueID` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `slug`, `kodeInstrumen`, `instrumenID`, `questionID`, `jawaban`, `responden`, `userID`, `uniqueID`, `created_at`, `updated_at`) VALUES
(45, 'c2', 'C.2.3', 7, 21, '5', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:19', '2021-12-13 14:21:19'),
(46, 'c2', 'C.2.3', 7, 22, '4', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:19', '2021-12-13 14:21:19'),
(47, 'c2', 'C.2.3', 7, 23, '4', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:19', '2021-12-13 14:21:19'),
(48, 'c2', 'C.2.3', 7, 24, '4', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:19', '2021-12-13 14:21:19'),
(49, 'c2', 'C.2.3', 7, 25, '5', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:19', '2021-12-13 14:21:19'),
(50, 'c2', 'C.2.3', 7, 26, '4', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(51, 'c2', 'C.2.3', 7, 27, '3', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(52, 'c2', 'C.2.3', 7, 28, '4', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(53, 'c2', 'C.2.3', 7, 29, '3', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(54, 'c2', 'C.2.3', 7, 30, '3', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(55, 'c2', 'C.2.3', 7, 31, '4', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(56, 'c2', 'C.2.3', 7, 32, '5', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(57, 'c2', 'C.2.3', 7, 33, '5', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(58, 'c2', 'C.2.3', 7, 34, '5', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(59, 'c2', 'C.2.3', 7, 35, '5', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(60, 'c2', 'C.2.3', 7, 36, '4', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(61, 'c2', 'C.2.3', 7, 37, '4', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(62, 'c2', 'C.2.3', 7, 38, '4', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(63, 'c2', 'C.2.3', 7, 39, '5', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(64, 'c2', 'C.2.3', 7, 40, '4', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(65, 'c2', 'C.2.3', 7, 41, '3', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:20', '2021-12-13 14:21:20'),
(66, 'c2', 'C.2.3', 7, 42, '5', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:21', '2021-12-13 14:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL,
  `ProgramStudi` varchar(255) DEFAULT NULL,
  `AsalProgramStudi` varchar(255) DEFAULT NULL,
  `UnitatauBiroatauLembaga` varchar(255) DEFAULT NULL,
  `LembagaatauUnitatauInstitusiatauIndustri` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `InstitutionatauWorkplace` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `InstitusiatauTempatKerja` varchar(255) DEFAULT NULL,
  `AsalProgramStudiYangDinilai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `role`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`, `ProgramStudi`, `AsalProgramStudi`, `UnitatauBiroatauLembaga`, `LembagaatauUnitatauInstitusiatauIndustri`, `Alamat`, `InstitutionatauWorkplace`, `Address`, `InstitusiatauTempatKerja`, `AsalProgramStudiYangDinilai`) VALUES
(48, 'kontributor.instrumenkepuasan@gmail.com', 'kontributor', 'Kontributor', 'Kontributor: TPjM', 'default.svg', '$2y$10$cWI.2uYscaseBsiVwz3VCuqIXzGFKpmfnxncLx4ldBFsh1z8Zwl7q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-11 22:23:04', '2021-10-11 22:23:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'gpjm.instrumenkepuasan@gmail.com', 'admin', 'Admin', 'Eka Azrai', 'default.svg', '$2y$10$DG61t8YRixc9Y1q8HbztvusT2LfWYStwhCZrMMAWKh733mH.UQms.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-11-16 23:37:20', '2021-12-11 00:12:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'dosen.instrumenkepuasan@gmail.com', 'dosenIlkom', 'Dosen', NULL, 'default.svg', '$2y$10$QoAJW3RvWT8kQoH52f3A7OVMeekd33VQRmld4eTqtA53T5HpkvjZq', NULL, NULL, NULL, NULL, NULL, 'createdByAdmin', 1, 0, '2021-12-12 16:06:54', '2021-12-12 16:25:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'qpmaura@gmail.com', 'dosenBiologi', 'Dosen', NULL, 'default.svg', '$2y$10$lT6prYzqCgcCNj9D5t4lzuI/Uc.FcAsJ/u/AzQC3inbpyKZNaZkYC', NULL, NULL, NULL, NULL, NULL, 'createdByAdmin', 1, 0, '2021-12-12 19:24:54', '2021-12-12 21:58:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'mauraqoonitah@gmail.com', 'mauraqoonitah', 'Mahasiswa', 'Maura Qoonitah Putri', 'default.svg', '$2y$10$2DVqg5oXjXACMxBvLhC.guW0/h70GlwHSd5aVYtz0DgjxSUoaWXAu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-13 12:00:15', '2021-12-13 14:21:21', NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'nurzaakiahulfah@gmail.com', 'ulfahnrz', 'Pengguna Lulusan', 'Ulfah nurzaakiah', 'default.svg', '$2y$10$W7JbkYqyET9lUAxo0srd.O/fGqXpVU7.hDqSWwlouAOspqtBovAE6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-13 16:42:12', '2021-12-13 16:59:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'dfatriandira@gmail.com', 'divinadira', 'Mitra', 'Divina Fatriandira', 'default.svg', '$2y$10$DW/bCvgYAWvWlvtn0iEfA.hSMlMelA15Qx8Cp0.SpePFCXpcUuG2W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-13 16:53:33', '2021-12-13 16:53:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'alumni.instrumenkepuasan@gmail.com', 'farahayu', 'Alumni/Lulusan', 'Maura Qoonitah', 'default.svg', '$2y$10$sTUlfF4Hc.hb8Q6foGE2au9qxGNM4Ab4MeYRv//CZ3tzbyfrdrCeK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-13 17:14:56', '2021-12-13 21:51:15', NULL, NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_check`
--

CREATE TABLE `user_check` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(128) NOT NULL,
  `nim` varchar(100) DEFAULT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `programStudi` varchar(255) NOT NULL,
  `angkatan` varchar(10) DEFAULT NULL,
  `nidn` varchar(100) DEFAULT NULL,
  `fakultas` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_check`
--

INSERT INTO `user_check` (`id`, `email`, `role`, `nim`, `namaLengkap`, `programStudi`, `angkatan`, `nidn`, `fakultas`, `created_at`, `updated_at`) VALUES
(1, 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 'Mahasiswa', '1313617009', 'Maura Qoonitah Putri', 'Ilmu Komputer', '2017', NULL, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', NULL, NULL),
(2, 'vivirofiah_1313617001@mhs.unj.ac.id', 'Mahasiswa', '1313617001', 'Vivi Rofiah', 'Matematika', '2017', NULL, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', NULL, NULL),
(3, 'ilhamarrosyid_1313617018@mhs.unj.ac.id', 'Mahasiswa', '1313617018', 'Ilham Arrosyid', 'Biologi', '2018', NULL, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', NULL, NULL),
(4, 'dwisolihatun_1313617018@mhs.unj.ac.id', 'Mahasiswa', '1313618003', 'Dwi Solihatun', 'Ilmu Komputer', '2016', NULL, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', NULL, NULL),
(5, 'dosen.instrumenkepuasan@gmail.com', 'Dosen', NULL, '', '', NULL, NULL, '', '2021-12-12 16:06:55', '2021-12-12 16:06:55'),
(6, 'qpmaura@gmail.com', 'Dosen', NULL, '', '', NULL, NULL, '', '2021-12-12 19:10:15', '2021-12-12 19:10:15'),
(7, 'qpmaura@gmail.com', 'Dosen', NULL, '', '', NULL, NULL, '', '2021-12-12 19:22:00', '2021-12-12 19:22:00'),
(8, 'qpmaura@gmail.com', 'Dosen', NULL, '', '', NULL, NULL, '', '2021-12-12 19:24:54', '2021-12-12 19:24:54'),
(9, 'mauraqoonitah@gmail.com', 'Mahasiswa', '1313617009', 'Maura Qoonitah Putri', 'Ilmu Komputer', NULL, NULL, '', NULL, NULL),
(10, 'mauraqoonitah@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-13 12:00:16', '2021-12-13 12:00:16'),
(11, 'nurzaakiahulfah@gmail.com', 'Mitra', NULL, '', '', NULL, NULL, '', '2021-12-13 16:42:12', '2021-12-13 16:42:12'),
(12, 'dfatriandira@gmail.com', 'Pengguna Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-13 16:48:04', '2021-12-13 16:48:04'),
(13, 'dfatriandira@gmail.com', 'Pengguna Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-13 16:53:33', '2021-12-13 16:53:33'),
(14, 'alumni.instrumenkepuasan@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-13 17:14:56', '2021-12-13 17:14:56');

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
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `name` (`name`),
  ADD KEY `respondenID` (`jenisRespondenID`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

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
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `kodeCategory` (`kodeCategory`),
  ADD KEY `peruntukkanCategory` (`peruntukkanCategory`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `instrumen`
--
ALTER TABLE `instrumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodeCategory` (`kodeCategory`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `jenis_responden`
--
ALTER TABLE `jenis_responden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responden` (`responden`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan_data_diri`
--
ALTER TABLE `pertanyaan_data_diri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenisRespondenID` (`jenisRespondenID`);

--
-- Indexes for table `petunjuk_instrumen`
--
ALTER TABLE `petunjuk_instrumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instrumenID` (`instrumenID`);

--
-- Indexes for table `pilihan_jawaban_data_diri`
--
ALTER TABLE `pilihan_jawaban_data_diri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaanID` (`pertanyaanID`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_prodi` (`nama_prodi`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_ibfk_1` (`kodeCategory`),
  ADD KEY `instrumenID` (`instrumenID`);

--
-- Indexes for table `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role` (`role`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_check`
--
ALTER TABLE `user_check`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_instrumen`
--
ALTER TABLE `category_instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `instrumen`
--
ALTER TABLE `instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jenis_responden`
--
ALTER TABLE `jenis_responden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pertanyaan_data_diri`
--
ALTER TABLE `pertanyaan_data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `petunjuk_instrumen`
--
ALTER TABLE `petunjuk_instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pilihan_jawaban_data_diri`
--
ALTER TABLE `pilihan_jawaban_data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user_check`
--
ALTER TABLE `user_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD CONSTRAINT `auth_groups_ibfk_1` FOREIGN KEY (`jenisRespondenID`) REFERENCES `jenis_responden` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD CONSTRAINT `auth_permissions_ibfk_1` FOREIGN KEY (`name`) REFERENCES `instrumen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `category_instrumen`
--
ALTER TABLE `category_instrumen`
  ADD CONSTRAINT `category_instrumen_ibfk_1` FOREIGN KEY (`peruntukkanCategory`) REFERENCES `jenis_responden` (`responden`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instrumen`
--
ALTER TABLE `instrumen`
  ADD CONSTRAINT `instrumen_ibfk_1` FOREIGN KEY (`kodeCategory`) REFERENCES `category_instrumen` (`kodeCategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `instrumen_ibfk_2` FOREIGN KEY (`slug`) REFERENCES `category_instrumen` (`slug`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan_data_diri`
--
ALTER TABLE `pertanyaan_data_diri`
  ADD CONSTRAINT `pertanyaan_data_diri_ibfk_1` FOREIGN KEY (`jenisRespondenID`) REFERENCES `jenis_responden` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petunjuk_instrumen`
--
ALTER TABLE `petunjuk_instrumen`
  ADD CONSTRAINT `petunjuk_instrumen_ibfk_1` FOREIGN KEY (`instrumenID`) REFERENCES `instrumen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pilihan_jawaban_data_diri`
--
ALTER TABLE `pilihan_jawaban_data_diri`
  ADD CONSTRAINT `pilihan_jawaban_data_diri_ibfk_1` FOREIGN KEY (`pertanyaanID`) REFERENCES `pertanyaan_data_diri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`kodeCategory`) REFERENCES `category_instrumen` (`kodeCategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`instrumenID`) REFERENCES `instrumen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `responden`
--
ALTER TABLE `responden`
  ADD CONSTRAINT `responden_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `auth_groups` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
