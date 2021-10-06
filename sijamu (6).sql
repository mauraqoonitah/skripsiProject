-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 09:08 AM
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
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '8b56ea95e461f799e85d1d93939a1e64', '2021-10-04 02:43:18'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '48b1cbf266b0b25148259ed075fd1161', '2021-10-04 03:02:19'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'c738801236aee96a597f89b425c0ebfd', '2021-10-04 03:09:57'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'de9ca3acff27f28ea1d7f66e1bac6d7c', '2021-10-04 03:11:52'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '35f293e77477758ba51447efc14d670e', '2021-10-04 03:13:57'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'edaff73010273f1f79c7a1a11bf16cc6', '2021-10-04 03:15:24'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', '46929fa2d66a841effed75fa796c1fb3', '2021-10-04 03:30:25');

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
(1, 29),
(2, 3),
(3, 21),
(4, 37),
(5, 27),
(5, 30),
(5, 38),
(5, 40),
(7, 36),
(9, 28);

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
(8, '::1', 'sayaresponden@gmail.com', 4, '2021-09-10 04:34:03', 1),
(9, '::1', 'sayaresponden@gmail.com', 4, '2021-09-10 09:46:07', 1),
(10, '::1', 'sayaadmin', NULL, '2021-09-10 10:28:51', 0),
(11, '::1', 'sayadosen', NULL, '2021-09-10 10:28:58', 0),
(12, '::1', 'sayaadmin', NULL, '2021-09-10 10:29:17', 0),
(13, '::1', 'sayaresponden@gmail.com', 4, '2021-09-10 10:29:36', 1),
(14, '::1', 'sayakontributor@gmail.com', 3, '2021-09-10 10:30:00', 1),
(15, '::1', 'sayaadmin', NULL, '2021-09-11 13:04:36', 0),
(16, '::1', 'sayaadmin', NULL, '2021-09-11 13:04:51', 0),
(17, '::1', 'mora123', NULL, '2021-09-11 13:05:04', 0),
(18, '::1', 'sayaadmin', NULL, '2021-09-11 13:05:20', 0),
(19, '::1', 'sayaadmin', NULL, '2021-09-11 13:06:02', 0),
(20, '::1', 'qpmaura@gmail.com', 5, '2021-09-11 13:06:42', 1),
(21, '::1', 'mora123', NULL, '2021-09-12 11:49:28', 0),
(22, '::1', 'sayaadmin', NULL, '2021-09-12 11:49:42', 0),
(23, '::1', 'sayakontributor@gmail.com', 3, '2021-09-12 11:50:03', 1),
(24, '::1', 'sayaadmin', NULL, '2021-09-12 11:51:16', 0),
(25, '::1', 'sayaadmin', NULL, '2021-09-12 11:51:27', 0),
(26, '::1', 'sayaadmin@gmail.com', 6, '2021-09-12 11:52:43', 1),
(27, '::1', 'sayaadmin@gmail.com', 6, '2021-09-12 11:54:09', 1),
(28, '::1', 'sayaadmin@gmail.com', 6, '2021-09-12 12:00:20', 1),
(29, '::1', 'sayaresponden@gmail.com', 4, '2021-09-12 12:00:45', 1),
(30, '::1', 'sayaadmin@gmail.com', 6, '2021-09-12 12:05:30', 1),
(31, '::1', 'sayakontributor@gmail.com', 3, '2021-09-12 12:06:21', 1),
(32, '::1', 'sayaadmin@gmail.com', 6, '2021-09-12 12:07:24', 1),
(33, '::1', 'sayaresponden@gmail.com', 4, '2021-09-12 12:08:08', 1),
(34, '::1', 'sayaresponden@gmail.com', 4, '2021-09-12 12:22:39', 1),
(35, '::1', 'sayaadmin@gmail.com', 6, '2021-09-12 12:23:22', 1),
(36, '::1', 'sayaadmin@gmail.com', 6, '2021-09-12 12:27:41', 1),
(37, '::1', 'sayaadmin@gmail.com', 6, '2021-09-12 12:56:18', 1),
(38, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 8, '2021-09-12 16:04:32', 1),
(39, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 10, '2021-09-12 16:17:08', 1),
(40, '::1', 'sayaadmin@gmail.com', 6, '2021-09-14 06:53:34', 1),
(41, '::1', 'sayaadmin@gmail.com', 6, '2021-09-14 07:37:06', 1),
(42, '::1', 'sayaadminnnnnn', NULL, '2021-09-14 07:37:40', 0),
(43, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 17, '2021-09-14 07:47:21', 1),
(44, '::1', 'sayaadmin', NULL, '2021-09-14 07:49:06', 0),
(45, '::1', 'sayaadmin@gmail.com', 6, '2021-09-14 07:49:15', 1),
(46, '::1', 'sayaadmin@gmail.com', 6, '2021-09-14 07:51:05', 1),
(47, '::1', 'sayaadmin@gmail.com', 6, '2021-09-14 07:54:42', 1),
(48, '::1', 'sayaadmin@gmail.com', 6, '2021-09-14 07:55:52', 1),
(49, '::1', 'sayaadmin@gmail.com', 6, '2021-09-14 07:57:44', 1),
(50, '::1', 'sayakontributor@gmail.com', 3, '2021-09-14 07:59:11', 1),
(51, '::1', 'abcdef', NULL, '2021-09-14 08:04:39', 0),
(52, '::1', 'abcdef', NULL, '2021-09-14 08:04:41', 0),
(53, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 18, '2021-09-14 08:06:16', 1),
(54, '::1', 'mauraputri11111', NULL, '2021-09-14 08:10:25', 0),
(55, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 19, '2021-09-14 08:11:22', 1),
(56, '::1', 'sayarespondenn', NULL, '2021-09-14 08:13:58', 0),
(57, '::1', 'sayadosenresponden', NULL, '2021-09-14 08:16:14', 0),
(58, '::1', 'mauraputri1', NULL, '2021-09-14 08:17:33', 0),
(59, '::1', 'mauraputri11', NULL, '2021-09-14 13:02:53', 0),
(60, '::1', 'mauraputri', NULL, '2021-09-14 13:06:06', 0),
(61, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-14 13:07:00', 1),
(62, '::1', 'qpmaura@gmail.com', 22, '2021-09-14 13:14:49', 1),
(63, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-14 14:27:17', 1),
(64, '::1', 'mauraputri', NULL, '2021-09-14 15:14:07', 0),
(65, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-14 15:14:18', 1),
(66, '::1', 'sayaadmin@gmail.com', 6, '2021-09-14 15:21:21', 1),
(67, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-14 15:30:58', 1),
(68, '::1', 'qpmaura@gmail.com', 22, '2021-09-14 15:37:23', 1),
(69, '::1', 'sayaadmin', NULL, '2021-09-16 03:29:59', 0),
(70, '::1', 'sayaadmin@gmail.com', 6, '2021-09-16 03:30:10', 1),
(71, '::1', 'sayaresponden@gmail.com', 4, '2021-09-16 03:47:18', 1),
(72, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-16 03:50:01', 1),
(73, '::1', 'sayaadmin', NULL, '2021-09-16 03:50:31', 0),
(74, '::1', 'sayaadmin@gmail.com', 6, '2021-09-16 03:50:42', 1),
(75, '::1', 'sayaresponden@gmail.com', 4, '2021-09-16 04:05:24', 1),
(76, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-16 04:05:51', 1),
(77, '::1', 'sayaadmin@gmail.com', 6, '2021-09-16 04:07:01', 1),
(78, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-16 04:08:20', 1),
(79, '::1', 'mauraputri', NULL, '2021-09-16 07:46:10', 0),
(80, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-16 07:46:44', 1),
(81, '::1', 'sayaadmin', NULL, '2021-09-16 08:17:47', 0),
(82, '::1', 'sayaadmin@gmail.com', 6, '2021-09-16 08:17:59', 1),
(83, '::1', 'qpmaura@gmail.com', 22, '2021-09-16 09:33:39', 1),
(84, '::1', 'mora123@gmail.com', 24, '2021-09-16 11:15:24', 1),
(85, '::1', 'qpmaaura@gmail.com', 25, '2021-09-16 11:20:58', 1),
(86, '::1', 'qpmaura@gmail.com', 26, '2021-09-16 11:25:44', 1),
(87, '::1', 'sayaadmin@gmail.com', 6, '2021-09-16 11:30:03', 1),
(88, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-16 12:19:45', 1),
(89, '::1', 'sayaadmin@gmail.com', 6, '2021-09-16 12:20:34', 1),
(90, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-16 12:27:55', 1),
(91, '::1', 'vivirofiah_1313617001@mhs.unj.ac.id', 27, '2021-09-17 09:58:22', 1),
(92, '::1', 'hanisya_peneliti@gmail.com', 28, '2021-09-17 10:07:22', 1),
(93, '::1', 'sayaadmin', NULL, '2021-09-17 10:33:25', 0),
(94, '::1', 'sayaadmin', NULL, '2021-09-17 10:33:48', 0),
(95, '::1', 'sayaadmin', NULL, '2021-09-17 10:35:44', 0),
(96, '::1', 'sayakontributor@gmail.com', 3, '2021-09-17 10:37:13', 1),
(97, '::1', 'admin', NULL, '2021-09-17 14:32:48', 0),
(98, '::1', 'sayaadmin@gmail.com', 29, '2021-09-17 14:33:04', 1),
(99, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-17 14:34:08', 1),
(100, '::1', 'sayaadmin@gmail.com', 29, '2021-09-18 14:12:31', 1),
(101, '::1', 'sayaadmin@gmail.com', 29, '2021-09-19 06:50:37', 1),
(102, '::1', 'sayaadmin@gmail.com', 29, '2021-09-19 10:43:11', 1),
(103, '::1', 'sayaadmin@gmail.com', 29, '2021-09-20 09:33:30', 1),
(104, '::1', 'mauraputri', NULL, '2021-09-20 09:42:54', 0),
(105, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-20 09:43:03', 1),
(106, '::1', 'mauraputri', NULL, '2021-09-20 12:57:28', 0),
(107, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-20 12:57:37', 1),
(108, '::1', 'sayaadmin@gmail.com', 29, '2021-09-24 09:52:11', 1),
(109, '::1', 'vivirofiah_1313617001@mhs.unj.ac.id', 27, '2021-09-24 12:59:03', 1),
(110, '::1', 'admin_gpjm', NULL, '2021-09-24 13:00:25', 0),
(111, '::1', 'sayaadmin@gmail.com', 29, '2021-09-24 13:00:47', 1),
(112, '::1', 'vivirofiah_1313617001@mhs.unj.ac.id', 27, '2021-09-24 14:09:06', 1),
(113, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-24 14:11:01', 1),
(114, '::1', 'sayaadmin@gmail.com', 29, '2021-09-24 14:12:34', 1),
(115, '::1', 'sayaadmin@gmail.com', 29, '2021-09-25 03:15:39', 1),
(116, '::1', 'sayaadmin@gmail.com', 29, '2021-09-25 04:50:49', 1),
(117, '::1', 'admin_gpjm', NULL, '2021-09-25 05:11:13', 0),
(118, '::1', 'sayaadmin@gmail.com', 29, '2021-09-25 05:11:30', 1),
(119, '::1', 'sayaadmin@gmail.com', 29, '2021-09-25 06:08:30', 1),
(120, '::1', 'ilhamarr', NULL, '2021-09-25 07:58:53', 0),
(121, '::1', 'ilhamarr', NULL, '2021-09-25 07:59:25', 0),
(122, '::1', 'ilhamarr', NULL, '2021-09-25 08:03:20', 0),
(123, '::1', 'ilhamarrosyid_1313617018@mhs.unj.ac.id', 30, '2021-09-25 08:03:31', 1),
(124, '::1', 'admin_gpjm', NULL, '2021-09-25 08:14:11', 0),
(125, '::1', 'admin_gpjm', NULL, '2021-09-25 08:14:19', 0),
(126, '::1', 'sayaadmin@gmail.com', 29, '2021-09-25 08:16:05', 1),
(127, '::1', 'sayaadmin@gmail.com', 29, '2021-09-25 11:52:04', 1),
(128, '::1', 'sayaadmin@gmail.com', 29, '2021-09-26 01:48:52', 1),
(129, '::1', 'sayaadmin@gmail.com', 29, '2021-09-26 09:17:56', 1),
(130, '::1', 'sayaadmin@gmail.com', 29, '2021-09-27 09:43:57', 1),
(131, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-09-27 12:48:04', 1),
(132, '::1', 'sayaadmin@gmail.com', 29, '2021-09-27 12:50:41', 1),
(133, '::1', 'sayaadmin@gmail.com', 29, '2021-09-29 08:06:50', 1),
(134, '::1', 'dwisolihatun_1313617018@mhs.unj.ac.id', 31, '2021-09-29 10:12:03', 1),
(135, '::1', 'sayaadmin@gmail.com', 29, '2021-09-29 10:13:25', 1),
(136, '::1', 'admin_gpjm', NULL, '2021-09-29 13:44:02', 0),
(137, '::1', 'sayaadmin@gmail.com', 29, '2021-09-29 13:44:13', 1),
(138, '::1', 'sayaadmin@gmail.com', 29, '2021-09-30 04:40:10', 1),
(139, '::1', 'sayaadmin@gmail.com', 29, '2021-10-01 05:58:30', 1),
(140, '::1', 'sayaadmin@gmail.com', 29, '2021-10-01 10:01:10', 1),
(141, '::1', 'sayaadmin@gmail.com', 29, '2021-10-01 12:29:47', 1),
(142, '::1', 'qpmaura@gmail.com', 32, '2021-10-04 02:43:29', 1),
(143, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-10-04 02:47:43', 1),
(144, '::1', 'hanisya_peneliti@gmail.com', 28, '2021-10-04 02:48:05', 1),
(145, '::1', 'qpmaura@gmail.com', 32, '2021-10-04 02:49:41', 1),
(146, '::1', 'mor15', NULL, '2021-10-04 03:02:38', 0),
(147, '::1', 'mauraqoonitah15@gmail.com', 33, '2021-10-04 03:02:57', 1),
(148, '::1', 'qpmaura@gmail.com', 32, '2021-10-04 03:08:29', 1),
(149, '::1', 'qpmaura@gmail.com', 34, '2021-10-04 03:10:06', 1),
(150, '::1', 'mauraqoonitah@gmail.com', 35, '2021-10-04 03:12:02', 1),
(151, '::1', 'maura', 36, '2021-10-04 03:13:44', 0),
(152, '::1', 'qpmaura@gmail.com', 36, '2021-10-04 03:14:04', 1),
(153, '::1', 'maura123', NULL, '2021-10-04 03:15:35', 0),
(154, '::1', 'mauraqoonitah15@gmail.com', 37, '2021-10-04 03:15:47', 1),
(155, '::1', 'sayaadmin@gmail.com', 29, '2021-10-04 03:16:49', 1),
(156, '::1', 'mauraqoonitah15@gmail.com', 37, '2021-10-04 03:19:22', 1),
(157, '::1', 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 40, '2021-10-04 03:30:51', 1),
(158, '::1', 'sayaadmin', NULL, '2021-10-04 03:42:37', 0),
(159, '::1', 'sayaadmin@gmail.com', 29, '2021-10-04 03:45:39', 1),
(160, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-10-04 23:31:09', 1),
(161, '::1', 'sayaadmin@gmail.com', 29, '2021-10-04 23:42:56', 1),
(162, '::1', 'sayaadmin@gmail.com', 29, '2021-10-05 19:44:24', 1),
(163, '::1', 'sayaadmin@gmail.com', 29, '2021-10-06 09:11:42', 1),
(164, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-10-06 11:31:15', 1),
(165, '::1', 'sayaadmin@gmail.com', 29, '2021-10-06 12:00:53', 1),
(166, '::1', 'sayaadmin@gmail.com', 29, '2021-10-06 13:35:01', 1),
(167, '::1', 'sayaadmin@gmail.com', 29, '2021-10-06 13:36:28', 1),
(168, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-10-06 13:44:18', 1),
(169, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-10-06 13:45:15', 1),
(170, '::1', 'sayaadmin@gmail.com', 29, '2021-10-06 13:46:12', 1),
(171, '::1', 'mauraqoonitah_1313617009@mhs.unj.ac.id', 21, '2021-10-06 13:50:09', 1),
(172, '::1', 'sayaadmin@gmail.com', 29, '2021-10-06 13:57:59', 1);

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
(388, 'C.1', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ', 'Dosen', 'c1', 0),
(389, 'C.1', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ', 'Mahasiswa', 'c1', 0),
(390, 'C.1', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ', 'Tenaga Pendidik', 'c1', 0),
(391, 'C.2', 'Tata Kelola, Tata Pamong, dan Kerjasama', 'Alumni/Lulusan', 'c2', 0),
(392, 'C.2', 'Tata Kelola, Tata Pamong, dan Kerjasama', 'Dosen', 'c2', 0),
(393, 'C.2', 'Tata Kelola, Tata Pamong, dan Kerjasama', 'Mahasiswa', 'c2', 0),
(394, 'C.2', 'Tata Kelola, Tata Pamong, dan Kerjasama', 'Mitra', 'c2', 0),
(395, 'C.2', 'Tata Kelola, Tata Pamong, dan Kerjasama', 'Pengguna Lulusan', 'c2', 0),
(396, 'C.2', 'Tata Kelola, Tata Pamong, dan Kerjasama', 'Tenaga Pendidik', 'c2', 0);

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
(89, 'C.1', 'C.1.1', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ oleh Dosen', 'Dosen', 'c1', NULL),
(90, 'C.1', 'C.1.2', 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ ubah Mahasiswa', 'Mahasiswa', 'c1', NULL),
(91, 'C.2', 'C.2.1', 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'Alumni/Lulusan', 'c2', NULL);

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
(7, 'Peneliti'),
(8, 'Pengabdi'),
(5, 'Pengguna Lulusan'),
(2, 'Tenaga Pendidik');

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
  `instrumenID` int(11) DEFAULT NULL,
  `namaInstrumen` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `butir`, `kodeCategory`, `instrumenID`, `namaInstrumen`, `slug`, `createdAt`, `updatedAt`) VALUES
(37, 'Layanan Pembelajaran(kurikulum, pengembangan kompetensi)', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(38, 'Layanan Penelitian(skim penelitian dan proses penelitian)', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(39, 'Layanan pengabdian kepada masyarakat (skim pengabdian dan proses pengabdian) ', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(40, 'Keramahan, kejujuran, dan ketulusan staf dalam melayani', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(41, 'Kecepatan dan ketepatan staf dalam melayani', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(42, 'Layanan pengembangan karir  dosen dilaksanakan dengan menggunakan prinsip GUG (Transparansi, akuntabilitas, independen, kredibilitas,tanggung jawab dan keadilan) ', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(43, 'Dukungan (moril dan dana) untuk mengikuti studi lanjut, kursus, pelatihan, sertifikasi, seminar, workshop, magang', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(44, 'Mendapat layanan informasi tentang jenjang karir (kenaikan pangkat, golongan, jabfung, serdos)					', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(45, 'Mendapatkan layanan tentang peningkatan jenjang karir (kenaikan pangkat, golongan, jabfung, serdos)', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(46, 'Mendapatkan layanan informasi/penawaran tentang jabatan pengelola/jabatan struktural', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(47, 'Fasilitas sarana(peralatan kuliah, peralatan kegiatan diluar kelas)', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(48, 'Fasilitas prasarana (tempat parkir, ruang kuliah,ruang dosen, ruang laboratorium, tempat ibadah/masjid, toilet,poli klinik,olahraga kantin dll ) ', 'C.2', 91, 'Instrumen Kepuasan atas Layanan Manajemen UNJ', 'c2', NULL, NULL),
(49, 'test', 'C.1', 89, 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ oleh Dosen', 'c1', NULL, NULL),
(50, 'test2', 'C.1', 89, 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ oleh Dosen', 'c1', NULL, NULL),
(51, 'butir test', 'C.1', 90, 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ ubah Mahasiswa', 'c1', NULL, NULL),
(52, 'butir test2', 'C.1', 90, 'Instrumen Tingkat Pemahaman VMTS (Visi Misi) UNJ ubah Mahasiswa', 'c1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `id` int(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `noIdentitas` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id`, `userID`, `role`, `noIdentitas`, `email`, `fullname`) VALUES
(36, 21, 'Mahasiswa', NULL, 'mauraqoonitah_1313617009@mhs.unj.ac.id', 'Maura Qoonitah Putri'),
(37, 21, 'Mahasiswa', NULL, 'mauraqoonitah_1313617009@mhs.unj.ac.id', 'Maura Qoonitah Putri'),
(38, 21, 'Mahasiswa', NULL, 'mauraqoonitah_1313617009@mhs.unj.ac.id', 'Maura Qoonitah Putri');

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
  `userID` int(100) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `slug`, `kodeInstrumen`, `instrumenID`, `questionID`, `jawaban`, `responden`, `userID`, `created_at`) VALUES
(110, 'c1', 'C.1.2', 90, 51, '3', 'Mahasiswa', 21, '2021-10-06 13:56:42'),
(111, 'c1', 'C.1.2', 90, 52, '4', 'Mahasiswa', 21, '2021-10-06 13:56:42'),
(112, 'c1', 'C.1.2', 90, 51, '1', 'Mahasiswa', 21, '2021-10-06 13:57:33'),
(113, 'c1', 'C.1.2', 90, 52, '2', 'Mahasiswa', 21, '2021-10-06 13:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `tingkat_kepuasan`
--

CREATE TABLE `tingkat_kepuasan` (
  `id` int(11) NOT NULL,
  `skalaKepuasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tingkat_kepuasan`
--

INSERT INTO `tingkat_kepuasan` (`id`, `skalaKepuasan`) VALUES
(1, 'Sangat Tidak Puas'),
(2, 'Tidak Puas'),
(3, 'Cukup Puas'),
(4, 'Puas'),
(5, 'Sangat Puas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `role` varchar(128) NOT NULL,
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

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `role`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'sayakontributor@gmail.com', 'sayakontributor', 'Saya Kontributor', 'Kontributor', 'default.svg', '$2y$10$sTJtY4tugv27ngpiyYUrH.mOUgUQxC5JOxFjPB80tq/pNp57ASume', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-10 03:56:19', '2021-09-10 03:56:19', NULL),
(21, 'mauraqoonitah_1313617009@mhs.unj.ac.id', 'mauraputri', 'Maura Qoonitah Putri', 'Mahasiswa', 'default.svg', '$2y$10$B5wWqqvsHRuPhfVJoopuierdnHS20Dcq0uz6xGftVLAEsQMjspSia', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-14 13:06:49', '2021-09-14 13:06:49', NULL),
(27, 'vivirofiah_1313617001@mhs.unj.ac.id', 'vivirofiah', 'Vivi Rofiah', 'Mahasiswa', 'default.svg', '$2y$10$7oAG5v5cQAg4zheujFysVeuoGuaugCluP7bBCpyHoDlB1HdbXFU9K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-17 09:56:48', '2021-09-17 09:56:48', NULL),
(28, 'hanisya_peneliti@gmail.com', 'hanisyarahma', 'Hanisya Rahmasari', 'Peneliti', 'default.svg', '$2y$10$xABnY.1g9x.2Eu5NMVB3pO9E9QugyMDnKA1QipyzA4tS8Bg4dqgcq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-17 10:05:55', '2021-09-17 10:05:55', NULL),
(29, 'sayaadmin@gmail.com', 'admin_gpjm', 'Saya Admin', 'Admin', 'default.svg', '$2y$10$xreOlLlfYGfhZG0kRPdpquyeeA/GP7kRuPJ1iDnaKMZwsI5z0mrvO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-17 14:31:58', '2021-09-17 14:31:58', NULL),
(30, 'ilhamarrosyid_1313617018@mhs.unj.ac.id', 'ilhamarr', 'Ilham Arrosyid', 'Mahasiswa', 'default.svg', '$2y$10$mSScZMR2n4mG.vmx2/DhKeaviUC6HPvGWk/EuOrOLWD6UXFJJgjGa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-25 08:00:58', '2021-09-25 08:00:58', NULL),
(36, 'qpmaura@gmail.com', 'maura', 'maura', 'Pengguna Lulusan', 'default.svg', '$2y$10$ws94Y8YASKhlcF0UletRnOdjXq7qmyapjbwowYgAxxDn/WoyLRhxa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-04 03:13:22', '2021-10-04 03:13:57', NULL),
(37, 'mauraqoonitah15@gmail.com', 'maura123', 'maura', 'Tenaga Pendidik', 'default.svg', '$2y$10$.mGm6SIYqNtGcFO0Cy13mev0bO.MVllqMLDtn0sigOjIftVTj43Sq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-04 03:15:13', '2021-10-04 03:15:25', NULL),
(38, 'dwisolihatun_1313617018@mhs.unj.ac.id', 'dwisolihatun', 'Dwi Solihatun', 'Mahasiswa', 'default.svg', '$2y$10$RZBMhTC2NjolRiaVycln1uOMySUqNVUh0KHjEnKXPT94.vRwYTez.', NULL, NULL, NULL, '9883fd93c8583e4dc2d82282415005ea', NULL, NULL, 0, 0, '2021-10-04 03:24:31', '2021-10-04 03:24:31', NULL),
(40, 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 'mauraputri15', 'Maura Qoonitah Putri', 'Mahasiswa', 'default.svg', '$2y$10$8Qef9SQ2V/sPVNxupxDZau0.AH34waFShv.V4Yhc3lTMh5TiuaK/S', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-10-04 03:27:38', '2021-10-04 03:30:26', NULL);

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
  `id_user` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_check`
--

INSERT INTO `user_check` (`id`, `email`, `role`, `nim`, `namaLengkap`, `programStudi`, `angkatan`, `nidn`, `fakultas`, `id_user`) VALUES
(6, 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 'Mahasiswa', '1313617009', 'Maura Qoonitah Putri', 'Ilmu Komputer', '2017', NULL, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', NULL),
(7, 'vivirofiah_1313617001@mhs.unj.ac.id', 'Mahasiswa', '1313617001', 'Vivi Rofiah', 'Matematika', '2017', NULL, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', NULL),
(8, 'ilhamarrosyid_1313617018@mhs.unj.ac.id', 'Mahasiswa', '1313617018', 'Ilham Arrosyid', 'Biologi', '2018', NULL, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', NULL),
(9, 'sayadosen@unj.ac.id', 'Dosen', NULL, 'Saya adalah Dosen', 'Fisika', NULL, '31321303248', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', NULL),
(10, 'sayamitra@unj.ac.id', 'Mitra', NULL, 'Saya adalah Responden Mitra', '-', NULL, '-', '-', NULL),
(11, 'dwisolihatun_1313617018@mhs.unj.ac.id', 'Mahasiswa', '1313618003', 'Dwi Solihatun', 'Ilmu Komputer', '2016', NULL, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', NULL);

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
  ADD PRIMARY KEY (`id`) USING BTREE;

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
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `kodeCategory` (`kodeCategory`),
  ADD KEY `peruntukkanCategory` (`peruntukkanCategory`);

--
-- Indexes for table `instrumen`
--
ALTER TABLE `instrumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodeCategory` (`kodeCategory`);

--
-- Indexes for table `jenis_responden`
--
ALTER TABLE `jenis_responden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responden` (`responden`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instrumenID` (`instrumenID`),
  ADD KEY `questions_ibfk_1` (`kodeCategory`);

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
-- Indexes for table `tingkat_kepuasan`
--
ALTER TABLE `tingkat_kepuasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `instrumen`
--
ALTER TABLE `instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tingkat_kepuasan`
--
ALTER TABLE `tingkat_kepuasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_check`
--
ALTER TABLE `user_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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

--
-- Constraints for table `category_instrumen`
--
ALTER TABLE `category_instrumen`
  ADD CONSTRAINT `category_instrumen_ibfk_1` FOREIGN KEY (`peruntukkanCategory`) REFERENCES `jenis_responden` (`responden`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instrumen`
--
ALTER TABLE `instrumen`
  ADD CONSTRAINT `instrumen_ibfk_1` FOREIGN KEY (`kodeCategory`) REFERENCES `category_instrumen` (`kodeCategory`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`kodeCategory`) REFERENCES `category_instrumen` (`kodeCategory`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
