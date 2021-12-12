-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 02:10 PM
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
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', '03811e9c27a106d5630bb11f8fb4d98d', '2021-12-12 19:16:44');

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
(3, 59);

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
(8, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-12 18:37:22', 1);

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
(2, 2, 'instrumen C.1.1'),
(3, 15, 'instrumen C.4.1'),
(7, 17, 'instrumen C.5.1.a'),
(9, 25, 'instrumen C.2.1'),
(10, 18, 'instrumen C.5.1.b');

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
(56, 2),
(56, 7),
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
(1, 'C.1', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ Oleh Pemangku Kepentingan', 'Dosen', 'c1', 'NPk241Mj0aAiWbw8', 0, NULL, NULL),
(2, 'C.1', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ Oleh Pemangku Kepentingan', 'Mahasiswa', 'c1', 'NPk241Mj0aAiWbw8', 0, NULL, NULL),
(3, 'C.1', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ Oleh Pemangku Kepentingan', 'Tenaga Kependidikan', 'c1', 'NPk241Mj0aAiWbw8', 0, NULL, NULL),
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
(15, 'C.5', 'Instrumen Kepuasan atas Pengelolaan Keuangan dan Sarpras UNJ', 'Dosen', 'c5', 'Fl3ozDmuhc7VTbPa', 0, NULL, NULL),
(16, 'C.5', 'Instrumen Kepuasan atas Pengelolaan Keuangan dan Sarpras UNJ', 'Mahasiswa', 'c5', 'Fl3ozDmuhc7VTbPa', 0, NULL, NULL),
(17, 'C.5', 'Instrumen Kepuasan atas Pengelolaan Keuangan dan Sarpras UNJ', 'Pengelola Keuangan Unit', 'c5', 'Fl3ozDmuhc7VTbPa', 0, NULL, NULL),
(18, 'C.5', 'Instrumen Kepuasan atas Pengelolaan Keuangan dan Sarpras UNJ', 'Tenaga Kependidikan', 'c5', 'Fl3ozDmuhc7VTbPa', 0, NULL, NULL),
(19, 'C.6', 'Instrumen Kepuasan atas Proses Pendidikan', 'Mahasiswa', 'c6', 'oKM8YWtx3B7JdScA', 0, NULL, NULL),
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
(2, 'C.1', 'C.1.1', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ Oleh Pemangku Kepentingan oleh Dosen', 'Dosen', 'c1', 0, NULL, NULL),
(3, 'C.1', 'C.1.2', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ Oleh Pemangku Kepentingan oleh Mahasiswa', 'Mahasiswa', 'c1', 1, NULL, '2021-12-12 15:23:50'),
(4, 'C.1', 'C.1.3', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ Oleh Pemangku Kepentingan oleh Tenaga Kependidikan', 'Tenaga Kependidikan', 'c1', 0, NULL, NULL),
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
(17, 'C.5', 'C.5.1.a', 'Instrumen Kepuasan atas Pengelolaan Keuangan UNJ oleh Dosen', 'Dosen', 'c5', 0, NULL, NULL),
(18, 'C.5', 'C.5.1.b', 'Instrumen Kepuasan atas Pengelolaan Sarpras UNJ oleh Dosen', 'Dosen', 'c5', 0, NULL, NULL),
(19, 'C.7', 'C.7.2', 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'Peneliti', 'c7', 0, NULL, NULL),
(20, 'C.8', 'C.8.1', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'Pengabdi', 'c8', 0, NULL, NULL),
(21, 'C.9', 'C.9.2', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'Mitra', 'c9', 0, NULL, NULL),
(25, 'C.2', 'C.2.1', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'Dosen', 'c2', 0, '2021-12-12 19:59:40', '2021-12-12 19:59:40'),
(26, 'C.2', 'C.2.2', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'Tenaga Kependidikan', 'c2', 0, '2021-12-12 20:00:48', '2021-12-12 20:00:48');

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
(8, 'Unit/Biro/Lembaga', 2, 'B8eUK9E7jupXR5Y1', 'isian'),
(9, 'fullname', 6, 'me4ls2cfLgkXoIKO', 'isian'),
(10, 'Lembaga/Unit/Institusi/Industri', 6, 'GZIwWORdl7X4sEyY', 'isian'),
(12, 'Alamat', 6, 'y1OMD9gSYk27365X', 'isian'),
(13, 'Name', 7, 'UFm7GtZ8d1YHovbO', 'isian'),
(14, 'Institution/Workplace', 7, 'EuX50etGNkFPnT7M', 'isian'),
(15, 'Address', 7, 'c80uexLZTDUyXMit', 'isian'),
(16, 'fullname', 8, 'B9aHpMYKDmejZstr', 'isian'),
(17, 'Program Studi', 8, 'xbHQgjusi4BWRNPL', 'pilihan'),
(18, 'fullname', 9, 'qahuPyJCfINmnt15', 'isian'),
(19, 'Program Studi', 9, 'Fm5z81MlUNCeEYAf', 'pilihan'),
(20, 'fullname', 5, 'w0n3ZSbQjHduEg9V', 'isian'),
(21, 'Asal Program Studi Yang Dinilai', 5, 'de1TkqCEUFnVmcYR', 'pilihan'),
(22, 'Institusi/Tempat Kerja', 5, 'yMHGltRNoe4ZFpKE', 'isian'),
(23, 'fullname', 11, 'V5I8KJpNUjTH0EAi', 'isian'),
(24, 'Unit', 11, 'MEtCw85JV3GSyfRg', 'isian');

-- --------------------------------------------------------

--
-- Table structure for table `petunjuk_instrumen`
--

CREATE TABLE `petunjuk_instrumen` (
  `id` int(11) NOT NULL,
  `isiPetunjuk` text NOT NULL,
  `instrumenID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petunjuk_instrumen`
--

INSERT INTO `petunjuk_instrumen` (`id`, `isiPetunjuk`, `instrumenID`) VALUES
(2, '<p>a) Kami mohon Bapak/Ibu memberikan penilaian terhadap standar pengelolaan SDM UNJ selama menjadi dosen dalam kurun waktu 5 (lima) tahun terakhir.<br>b) Informasi yang Bapak/Ibu berikan sangat besar manfaatnya untuk perbaikan dan peningkatan mutu UNJ di masa datang. Oleh karena itu, kami mohon Bapak/Ibu memberikan penilaian sesuai dengan keadaan yang sebenarnya.<br>c) Setiap jawaban Bapak/Ibu dijamin kerahasiaannya.<br>d) Berilah tanda centang (√) pada kolom yang disediakan sesuai dengan tingkat kepuasan Bapak/Ibu.<br>Keterangan:<br>5 = Sangat Puas<br>4 = Puas<br>3 = Cukup Puas<br>2 = Tidak Puas<br>1 = Sangat Tidak Puas<br></p>', 15);

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
(61, 21, 'Pendidikan Matematika'),
(62, 21, 'Matematika'),
(63, 21, 'Statistika'),
(64, 21, 'Ilmu Komputer'),
(65, 21, 'Pendidikan Fisika'),
(66, 21, 'Fisika'),
(67, 21, 'Pendidikan Kimia'),
(68, 21, 'Kimia'),
(69, 21, 'Pendidikan Biologi'),
(70, 21, 'Biologi');

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
(20, 'Pimpinan Unit Kerja menanggapi dan menindak lanjuti kritik, saran, dan keluhan yang disampaikan dosen.', 'C.4', 15, 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'c4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `id` int(255) NOT NULL,
  `userID` int(11) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Unit/Biro/Lembaga` varchar(255) DEFAULT NULL,
  `Lembaga/Unit/Institusi/Industri` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `Institution/Workplace` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `AsalProgramStudiYangDinilai` varchar(255) DEFAULT NULL,
  `Institusi/TempatKerja` varchar(255) DEFAULT NULL,
  `Unit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `role`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`, `ProgramStudi`, `AsalProgramStudi`, `Unit/Biro/Lembaga`, `Lembaga/Unit/Institusi/Industri`, `Alamat`, `Institution/Workplace`, `Address`, `AsalProgramStudiYangDinilai`, `Institusi/TempatKerja`, `Unit`) VALUES
(48, 'kontributor.instrumenkepuasan@gmail.com', 'kontributor', 'Kontributor', 'Kontributor: TPjM', 'default.svg', '$2y$10$cWI.2uYscaseBsiVwz3VCuqIXzGFKpmfnxncLx4ldBFsh1z8Zwl7q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-11 22:23:04', '2021-10-11 22:23:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'gpjm.instrumenkepuasan@gmail.com', 'admin', 'Admin', 'Eka Azrai', 'default.svg', '$2y$10$DG61t8YRixc9Y1q8HbztvusT2LfWYStwhCZrMMAWKh733mH.UQms.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-11-16 23:37:20', '2021-12-11 00:12:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'dosen.instrumenkepuasan@gmail.com', 'dosenIlkom', 'Dosen', NULL, 'default.svg', '$2y$10$QoAJW3RvWT8kQoH52f3A7OVMeekd33VQRmld4eTqtA53T5HpkvjZq', NULL, NULL, NULL, NULL, NULL, 'createdByAdmin', 1, 0, '2021-12-12 16:06:54', '2021-12-12 16:25:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'qpmaura@gmail.com', 'qpmaura', 'Dosen', NULL, 'default.svg', '$2y$10$lT6prYzqCgcCNj9D5t4lzuI/Uc.FcAsJ/u/AzQC3inbpyKZNaZkYC', NULL, NULL, NULL, '6a15244beb40e5fa4c487ef34d150064', NULL, 'createdByAdmin', 0, 0, '2021-12-12 19:24:54', '2021-12-12 19:24:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(8, 'qpmaura@gmail.com', 'Dosen', NULL, '', '', NULL, NULL, '', '2021-12-12 19:24:54', '2021-12-12 19:24:54');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `petunjuk_instrumen`
--
ALTER TABLE `petunjuk_instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pilihan_jawaban_data_diri`
--
ALTER TABLE `pilihan_jawaban_data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user_check`
--
ALTER TABLE `user_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
