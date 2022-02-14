-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2022 at 01:23 PM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u8810863_instrumen-kepuasan`
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
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 'cb277718ff7e36092cfc4e7630f86591', '2021-12-13 17:15:37'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', '8815ca065d4f5791970152c56005622f', '2021-12-14 12:18:36'),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', '8815ca065d4f5791970152c56005622f', '2021-12-14 12:18:49'),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 'd653dec81d0afba4012637b54c05390d', '2021-12-14 13:08:14'),
(17, '180.252.114.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '655edaaafbdbf132cfa68514119f0689', '2021-12-14 15:44:33'),
(18, '180.244.172.201', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '2dca2cd878fe592393111e47eee55166', '2021-12-14 15:56:08'),
(19, '103.11.28.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '655edaaafbdbf132cfa68514119f0689', '2021-12-14 16:12:47'),
(20, '113.197.108.37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '2dca2cd878fe592393111e47eee55166', '2021-12-14 16:28:33'),
(21, '110.138.116.202', 'Mozilla/5.0 (Linux; Android 11; SM-A505F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.92 Mobile Safari/537.36', '87e0b4bb6df0c6b958999b36c32b50b5', '2021-12-17 13:25:06'),
(22, '45.121.219.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '87e0b4bb6df0c6b958999b36c32b50b5', '2021-12-17 13:25:17'),
(23, '103.11.28.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '87e0b4bb6df0c6b958999b36c32b50b5', '2021-12-17 13:25:19'),
(24, '110.138.81.127', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.57', '8a4652032fc00cc3349453a890e25ef1', '2021-12-17 14:35:52'),
(25, '114.4.4.200', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '8a4652032fc00cc3349453a890e25ef1', '2021-12-17 14:36:02'),
(26, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '7fb3bf8cc073324ee9b34846b711b9b8', '2021-12-21 19:43:32'),
(27, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'ac015508205d4526cc8dd05d80c9ab5d', '2021-12-21 19:47:11'),
(28, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '551b01b00031ceb620530bcf3f3e3c4b', '2021-12-21 19:49:06'),
(29, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '551b01b00031ceb620530bcf3f3e3c4b', '2021-12-21 19:50:50'),
(30, '103.85.66.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '384e9d322b95716fc80757b7f8edb5ba', '2021-12-22 20:43:44'),
(31, '114.4.4.137', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '384e9d322b95716fc80757b7f8edb5ba', '2021-12-22 20:46:34'),
(32, '110.50.81.202', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '384e9d322b95716fc80757b7f8edb5ba', '2021-12-22 21:00:00'),
(33, '202.165.45.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 'd85728e8ad768b449061dd5e0b598d4b', '2021-12-23 11:01:36'),
(34, '114.4.4.135', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'd85728e8ad768b449061dd5e0b598d4b', '2021-12-23 11:01:43'),
(35, '150.129.59.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'd85728e8ad768b449061dd5e0b598d4b', '2021-12-23 11:01:44'),
(36, '114.10.19.207', 'Mozilla/5.0 (Linux; Android 11; SM-A225F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.74 Mobile Safari/537.36', '83a4ffb9e4912c11fc01b4c3883aaf80', '2021-12-23 17:33:03'),
(37, '110.50.81.201', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '83a4ffb9e4912c11fc01b4c3883aaf80', '2021-12-23 17:43:29'),
(38, '103.82.14.71', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'c865773b90f62c62f6b1034eed7ccaf3', '2021-12-23 19:21:41'),
(39, '114.4.4.201', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'c865773b90f62c62f6b1034eed7ccaf3', '2021-12-23 19:27:13'),
(40, '114.4.4.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'c865773b90f62c62f6b1034eed7ccaf3', '2021-12-23 19:56:02'),
(41, '182.253.245.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '944ff2de4400145b87b46d29d4d3862e', '2021-12-23 19:57:24'),
(42, '114.4.4.198', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '944ff2de4400145b87b46d29d4d3862e', '2021-12-23 20:09:02'),
(43, '36.69.170.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'ca86bf7cd3bb3bb8eb458251be2439b1', '2021-12-25 11:29:08'),
(44, '118.98.26.6', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'ca86bf7cd3bb3bb8eb458251be2439b1', '2021-12-25 11:29:21'),
(45, '202.43.172.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'ca86bf7cd3bb3bb8eb458251be2439b1', '2021-12-25 11:29:23'),
(46, '103.47.135.129', 'Mozilla/5.0 (Linux; Android 11; Infinix X695C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36', 'c6021aab46d4a27a46e0744743d535fc', '2021-12-25 15:56:19'),
(47, '114.4.4.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'c6021aab46d4a27a46e0744743d535fc', '2021-12-25 15:56:29'),
(48, '114.4.4.136', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'c6021aab46d4a27a46e0744743d535fc', '2021-12-25 15:56:30'),
(49, '103.8.12.105', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '01271cb36e462c84f77c4f5a8ad98176', '2021-12-27 13:42:42'),
(50, '114.4.4.199', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', '01271cb36e462c84f77c4f5a8ad98176', '2021-12-27 13:42:52'),
(51, '113.197.108.36', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '01271cb36e462c84f77c4f5a8ad98176', '2021-12-27 13:42:52'),
(52, '182.2.166.224', 'Mozilla/5.0 (Linux; Android 10; M2010J19CG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36', 'bdf857775eadbc4192f26684f501ed67', '2021-12-27 14:29:18'),
(53, '66.96.224.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'bdf857775eadbc4192f26684f501ed67', '2021-12-27 14:29:28'),
(54, '150.129.59.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'bdf857775eadbc4192f26684f501ed67', '2021-12-27 14:29:28'),
(55, '202.165.45.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '78c5c1aa0dddcaae7cc1260cb726d6d4', '2021-12-27 14:41:36'),
(56, '202.80.214.68', 'Mozilla/5.0 (Linux; Android 11; RMX2001) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36', '7e9a25f4506d5172d2fc19ca39f93e70', '2021-12-28 22:06:22'),
(57, '103.26.211.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', '7e9a25f4506d5172d2fc19ca39f93e70', '2021-12-28 22:06:42'),
(58, '114.4.4.201', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '7e9a25f4506d5172d2fc19ca39f93e70', '2021-12-28 22:07:04'),
(59, '114.4.78.152', 'Mozilla/5.0 (Linux; Android 10; Infinix X688B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.99 Mobile Safari/537.36', 'f5c359d79fd08cf62160efd3e614bb9c', '2022-01-03 22:10:46'),
(60, '45.121.219.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', 'f5c359d79fd08cf62160efd3e614bb9c', '2022-01-03 22:11:10'),
(61, '66.96.224.198', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'f5c359d79fd08cf62160efd3e614bb9c', '2022-01-03 22:11:57'),
(62, '180.252.160.192', 'Mozilla/5.0 (Linux; Android 11; SM-A505F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36', 'a6e4f36cccadbd2c23fe432b86c5a13b', '2022-01-04 07:55:11'),
(63, '110.50.81.201', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'a6e4f36cccadbd2c23fe432b86c5a13b', '2022-01-04 07:55:14'),
(64, '114.4.4.139', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'a6e4f36cccadbd2c23fe432b86c5a13b', '2022-01-04 07:55:14'),
(65, '210.211.20.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '675a41eaf23a42a6d6588d103e294316', '2022-01-04 08:20:57'),
(66, '180.252.173.179', 'Mozilla/5.0 (Linux; Android 11; M2101K6G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36', 'd75bc0a89eb47713a3a7281d21fdee71', '2022-01-04 09:12:18'),
(67, '114.4.4.199', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'd75bc0a89eb47713a3a7281d21fdee71', '2022-01-04 09:12:27'),
(68, '110.50.81.203', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'd75bc0a89eb47713a3a7281d21fdee71', '2022-01-04 09:12:27'),
(69, '36.71.19.215', 'Mozilla/5.0 (Linux; Android 11; SM-A127F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36', 'eee215f9cde7adf0e7a5cfaecf594c3c', '2022-01-04 09:16:03'),
(70, '61.94.150.74', 'Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36', 'ed029a00c5ac03db5322c3b60446e2a9', '2022-01-04 22:09:32'),
(71, '113.197.108.36', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'ed029a00c5ac03db5322c3b60446e2a9', '2022-01-04 22:09:39'),
(72, '114.4.4.135', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'ed029a00c5ac03db5322c3b60446e2a9', '2022-01-04 22:09:48'),
(73, '182.2.165.62', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0 Mobile/15E148 Safari/604.1', '96353303b81a2fb48b2aabe0d1cb89a6', '2022-01-04 22:20:11'),
(74, '180.244.172.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'f601f4c12169381d81859dad5e0f4adb', '2022-02-05 09:24:29'),
(75, '114.4.4.196', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'f601f4c12169381d81859dad5e0f4adb', '2022-02-05 09:24:37'),
(76, '110.50.81.203', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'f601f4c12169381d81859dad5e0f4adb', '2022-02-05 09:24:37'),
(77, '180.244.172.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'f601f4c12169381d81859dad5e0f4adb', '2022-02-05 09:24:38'),
(78, '114.4.4.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'f601f4c12169381d81859dad5e0f4adb', '2022-02-05 09:24:47'),
(79, '114.4.4.136', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'f601f4c12169381d81859dad5e0f4adb', '2022-02-05 09:24:47'),
(80, '180.244.172.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', '68a9afd889484a58e334ce3ce937c9d7', '2022-02-05 10:10:59'),
(81, '114.4.4.199', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '68a9afd889484a58e334ce3ce937c9d7', '2022-02-05 10:11:02'),
(82, '45.121.219.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '68a9afd889484a58e334ce3ce937c9d7', '2022-02-05 10:11:03'),
(83, '180.244.172.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', '8b90e60387743d302db8e73d153b7089', '2022-02-05 10:42:53'),
(84, '202.43.172.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '8b90e60387743d302db8e73d153b7089', '2022-02-05 10:42:57'),
(85, '66.96.224.198', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '8b90e60387743d302db8e73d153b7089', '2022-02-05 10:42:57'),
(86, '180.244.172.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'f0ac68315171721342274f28ea8448c1', '2022-02-05 11:14:15'),
(87, '180.244.172.17', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', '6dde115cc8e69093166c1cfdd5716847', '2022-02-05 19:14:54');

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
(11, 'Pengabdi', 'Pengabdi', 9);

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
(1, 79),
(2, 48),
(2, 78),
(2, 80),
(3, 56),
(4, 96),
(4, 100),
(5, 69),
(5, 73),
(5, 82),
(5, 83),
(5, 85),
(5, 86),
(5, 88),
(5, 89),
(5, 90),
(5, 108),
(5, 110),
(5, 126),
(6, 64),
(6, 67),
(6, 70),
(6, 84),
(6, 97),
(6, 99),
(6, 101),
(6, 104),
(6, 105),
(6, 106),
(6, 107),
(7, 63),
(7, 98),
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
(34, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 21:52:32', 1),
(35, '::1', 'dfatriandira@gmail.com', 63, '2021-12-13 23:06:32', 1),
(36, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 23:15:31', 1),
(37, '::1', 'dfatriandira@gmail.com', 63, '2021-12-13 23:34:09', 1),
(38, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-13 23:44:47', 1),
(39, '::1', 'dosen.instrumenkepuasan@gmail.com', 56, '2021-12-13 23:51:31', 1),
(40, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 00:06:32', 1),
(41, '::1', 'dosen.instrumenkepuasan@gmail.com', 56, '2021-12-14 00:09:57', 1),
(42, '::1', 'dosenBiologi', NULL, '2021-12-14 00:11:32', 0),
(43, '::1', 'dosenBiologi', NULL, '2021-12-14 00:15:00', 0),
(44, '::1', 'qpmaura', NULL, '2021-12-14 00:15:09', 0),
(45, '::1', 'qpmaura@gmail.com', NULL, '2021-12-14 00:15:23', 0),
(46, '::1', 'qpmaura@gmail.com', NULL, '2021-12-14 00:15:51', 0),
(47, '::1', 'mauraqoonitah@gmail.com', 60, '2021-12-14 00:16:15', 1),
(48, '::1', 'nurzaakiahulfah@gmail.com', 61, '2021-12-14 00:17:08', 1),
(49, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 00:27:43', 1),
(50, '::1', 'nurzaakiahulfah@gmail.com', 61, '2021-12-14 00:31:33', 1),
(51, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 00:45:10', 1),
(52, '::1', 'alumni.instrumenkepuasan@gmail.com', 64, '2021-12-14 11:49:02', 1),
(53, '::1', 'dfatriandira@gmail.com', 63, '2021-12-14 11:51:39', 1),
(54, '::1', 'mauraqoonitah@gmail.com', 60, '2021-12-14 12:07:44', 1),
(55, '::1', 'dfatriandira@gmail.com', 63, '2021-12-14 12:10:33', 1),
(56, '::1', 'nurzaakiahulfah@gmail.com', 61, '2021-12-14 12:10:53', 1),
(57, '::1', 'qpmaura', NULL, '2021-12-14 12:13:52', 0),
(58, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 12:16:48', 1),
(59, '::1', 'qpmaura@gmail.com', 65, '2021-12-14 12:19:04', 1),
(60, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 12:21:06', 1),
(61, '::1', 'qpmaura@gmail.com', 65, '2021-12-14 12:29:29', 1),
(62, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 12:31:02', 1),
(63, '::1', 'dosen.instrumenkepuasan@gmail.com', 56, '2021-12-14 12:33:25', 1),
(64, '::1', 'admin', NULL, '2021-12-14 12:36:41', 0),
(65, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 12:36:49', 1),
(66, '::1', 'vivirofiah25@gmail.com', 67, '2021-12-14 13:08:29', 1),
(67, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 13:11:53', 1),
(68, '::1', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 13:32:19', 1),
(69, '180.244.172.201', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 15:39:29', 1),
(70, '180.252.114.4', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 15:45:28', 1),
(71, '180.244.172.201', 'mauraqipi@gmail.com', 69, '2021-12-14 15:56:18', 1),
(72, '180.252.114.4', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-14 15:57:28', 1),
(73, '180.244.172.140', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-15 12:16:20', 1),
(74, '180.244.172.140', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-15 14:26:49', 1),
(75, '180.244.172.140', 'mauraqoonitah@gmail.com', 60, '2021-12-15 14:31:23', 1),
(76, '180.244.172.16', 'kontributor.instrumenkepuasan@gmail.com', 48, '2021-12-15 15:45:55', 1),
(77, '180.244.172.111', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-17 11:27:29', 1),
(78, '110.138.116.202', 'farahaanandita@gmail.com', 70, '2021-12-17 13:25:38', 1),
(79, '180.244.172.242', 'mauraqoonitah', NULL, '2021-12-17 14:34:18', 0),
(80, '180.244.172.242', 'mauraqoonitah@gmail.com', 60, '2021-12-17 14:34:39', 1),
(81, '110.138.81.127', 'octarinasalsabila@gmail.com', 73, '2021-12-17 14:36:17', 1),
(82, '110.138.81.127', 'octarinasalsabila@gmail.com', 73, '2021-12-17 15:39:28', 1),
(83, '110.138.116.202', 'farahaanandita@gmail.com', 70, '2021-12-17 22:11:59', 1),
(84, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'admin', NULL, '2021-12-21 19:37:03', 0),
(85, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-21 19:37:09', 1),
(86, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'mauraqoonitah15@gmail.com', 75, '2021-12-21 19:43:50', 1),
(87, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'mauraqoonitah15@gmail.com', 76, '2021-12-21 19:47:17', 1),
(88, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-21 19:48:14', 1),
(89, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'mauraqoonitah15@gmail.com', 77, '2021-12-21 19:49:14', 1),
(90, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'mauraqoonitah15@gmail.com', 77, '2021-12-21 19:51:24', 1),
(91, '2001:448a:2002:988c:cad:2093:fbf4:35cb', 'mauraqoonitah15@gmail.com', NULL, '2021-12-21 20:01:08', 0),
(92, '2001:448a:2002:988c:cad:2093:fbf4:35cb', 'mauraqoonitah15', NULL, '2021-12-21 20:01:18', 0),
(93, '2001:448a:2002:988c:cad:2093:fbf4:35cb', 'mauraqoonitah15@gmail.com', 77, '2021-12-21 20:01:26', 1),
(94, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'mauraqoonitah15@gmail.com', 77, '2021-12-21 20:06:42', 1),
(95, '2001:448a:2002:988c:1df6:6357:3abb:6c6a', 'mauraqoonitah15@gmail.com', 77, '2021-12-21 20:07:43', 1),
(96, '2001:448a:2002:988c:5f1:fc65:1:717b', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-22 10:38:30', 1),
(97, '2001:448a:2002:988c:5f1:fc65:1:717b', 'admin', NULL, '2021-12-22 13:20:56', 0),
(98, '2001:448a:2002:988c:5f1:fc65:1:717b', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-22 13:21:04', 1),
(99, '180.243.0.54', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-22 13:56:13', 1),
(100, '2001:448a:2002:988c:5f1:fc65:1:717b', 'mauraqoonitah@gmail.com', 60, '2021-12-22 14:09:54', 1),
(101, '180.243.0.54', 'mauraqoonitah@gmail.com', 60, '2021-12-22 14:39:06', 1),
(102, '2001:448a:2002:988c:5f1:fc65:1:717b', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-22 15:12:27', 1),
(103, '2001:448a:2002:988c:99ce:a2ab:2a0a:e09d', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-22 16:42:44', 1),
(104, '103.85.66.82', 'adinigfrn', 81, '2021-12-22 19:01:09', 0),
(105, '103.85.66.82', 'adinigufroni06@gmail.com', 83, '2021-12-22 20:43:57', 1),
(106, '202.165.45.162', 'trisnapspt', 84, '2021-12-23 11:01:11', 0),
(107, '202.165.45.162', 'trisna0401@gmail.com', 84, '2021-12-23 11:01:42', 1),
(108, '2001:448a:2002:988c:8443:9a42:5d9f:e564', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-23 13:10:23', 1),
(109, '2001:448a:2002:988c:8443:9a42:5d9f:e564', 'mauraqoonitah15', NULL, '2021-12-23 13:12:06', 0),
(110, '2001:448a:2002:988c:8443:9a42:5d9f:e564', 'mauraqoonitah15', NULL, '2021-12-23 13:12:11', 0),
(111, '2001:448a:2002:988c:8443:9a42:5d9f:e564', 'mauraqoonitah15', 82, '2021-12-23 13:12:18', 0),
(112, '2001:448a:2002:988c:8443:9a42:5d9f:e564', 'qpmaura', NULL, '2021-12-23 13:12:27', 0),
(113, '2001:448a:2002:988c:8443:9a42:5d9f:e564', 'qpmaura', NULL, '2021-12-23 13:12:32', 0),
(114, '2001:448a:2002:988c:8443:9a42:5d9f:e564', 'mauraqoonitah@gmail.com', 60, '2021-12-23 13:12:59', 1),
(115, '202.165.45.162', 'trisna0401@gmail.com', 84, '2021-12-23 13:23:12', 1),
(116, '2001:448a:2002:988c:d568:9f14:9636:eea9', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-23 16:14:23', 1),
(117, '2001:448a:2002:988c:d568:9f14:9636:eea9', 'admin', NULL, '2021-12-23 16:34:02', 0),
(118, '2001:448a:2002:988c:d568:9f14:9636:eea9', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-23 16:34:09', 1),
(119, '114.10.19.207', 'atylestari98@gmail.com', 85, '2021-12-23 17:32:48', 0),
(120, '114.10.19.207', 'atylestari98@gmail.com', 85, '2021-12-23 17:33:10', 1),
(121, '114.10.19.207', 'atylestari98@gmail.com', 85, '2021-12-23 17:41:36', 1),
(122, '114.10.19.207', 'atylestari98@gmail.com', 85, '2021-12-23 17:44:50', 1),
(123, '103.82.14.71', 'nilamoena4@gmail.com', 86, '2021-12-23 19:20:42', 0),
(124, '103.82.14.71', 'nilamoena4@gmail.com', 86, '2021-12-23 19:21:55', 1),
(125, '103.82.14.71', 'nilamoena4@gmail.com', 86, '2021-12-23 19:28:21', 1),
(126, '182.253.245.246', 'widi', 88, '2021-12-23 19:57:05', 0),
(127, '182.253.245.246', 'prianugrahw@gmail.com', 88, '2021-12-23 19:57:30', 1),
(128, '182.253.245.246', 'prianugrahw@gmail.com', 88, '2021-12-23 20:00:09', 1),
(129, '2001:448a:2002:988c:2801:b411:adf9:a7a2', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-24 13:49:05', 1),
(130, '103.8.12.105', 'esmarbudi@unj.ac.id', 80, '2021-12-24 15:51:36', 1),
(131, '2001:448a:2002:988c:2801:b411:adf9:a7a2', 'esmarbudi@unj.ac.id', 80, '2021-12-24 15:54:46', 1),
(132, '103.8.12.105', 'esmarbudi@unj.ac.id', 80, '2021-12-24 16:25:53', 1),
(133, '36.69.170.233', 'cah_kangkung', 89, '2021-12-25 11:28:33', 0),
(134, '36.69.170.233', 'hafizhun.alim93@gmail.com', 89, '2021-12-25 11:29:17', 1),
(135, '36.69.170.233', 'hafizhun.alim93@gmail.com', 89, '2021-12-25 11:33:21', 1),
(136, '103.47.135.129', 'nafiigoks123@gmail.com', 90, '2021-12-25 15:55:55', 0),
(137, '103.47.135.129', 'nafiigoks123@gmail.com', 90, '2021-12-25 15:56:33', 1),
(138, '140.213.140.229', 'Agamnuf1', 92, '2021-12-26 18:46:00', 0),
(139, '180.244.167.69', 'esmarbudi@unj.ac.id', 80, '2021-12-27 00:14:30', 1),
(140, '140.213.11.60', 'esmarbudi@unj.ac.id', 80, '2021-12-27 00:44:50', 1),
(141, '140.213.11.60', 'esmarbudi@unj.ac.id', 80, '2021-12-27 00:46:31', 1),
(142, '140.213.11.60', 'kontributor.instrumenkepuasan@gmail.com', 48, '2021-12-27 00:47:07', 1),
(143, '140.213.11.60', 'esmarbudi@unj.ac.id', 80, '2021-12-27 00:49:09', 1),
(144, '140.213.11.60', 'esmarbudi', NULL, '2021-12-27 00:57:15', 0),
(145, '140.213.11.60', 'esmarbudi@unj.ac.id', 80, '2021-12-27 00:57:21', 1),
(146, '140.213.11.60', 'kontributor.instrumenkepuasan@gmail.com', 48, '2021-12-27 01:11:01', 1),
(147, '2001:448a:2002:988c:78ea:5793:91d7:c9c4', 'kontributor.instrumenkepuasan@gmail.com', 48, '2021-12-27 02:06:51', 1),
(148, '182.3.37.147', 'amaliyahind@gmail.com', NULL, '2021-12-27 11:55:06', 0),
(149, '103.8.12.105', 'rizzqqa@gmail.com', NULL, '2021-12-27 13:40:24', 0),
(150, '2001:448a:2002:988c:299b:7f4a:3764:510f', 'mauraqoonitah@gmail.com', 60, '2021-12-27 13:41:26', 1),
(151, '103.8.12.105', 'rizqa', 96, '2021-12-27 13:42:21', 0),
(152, '103.8.12.105', 'rizzqqa@gmail.com', 96, '2021-12-27 13:42:45', 1),
(153, '2001:448a:2002:988c:299b:7f4a:3764:510f', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-27 14:08:40', 1),
(154, '182.2.166.224', 'retno22', 97, '2021-12-27 14:24:10', 0),
(155, '182.2.166.224', 'retno.kk22@gmail.com', 97, '2021-12-27 14:29:47', 1),
(156, '2001:448a:2002:988c:8410:eac:481c:771', 'gpjm.instrumenkepuasan@gmail.com', 55, '2021-12-27 14:40:20', 1),
(157, '202.165.45.162', 'fadliwdt@yahoo.com', 98, '2021-12-27 14:41:47', 1),
(161, '139.193.19.35', 'riaarafiah@unj.ac.id', 78, '2021-12-29 10:15:06', 1),
(162, '139.193.19.35', 'riaarafiah@unj.ac.id', 78, '2021-12-29 10:36:55', 1),
(163, '140.213.15.38', 'mauraqoonitah@gmail.com', 60, '2021-12-29 10:52:45', 1),
(164, '120.188.66.218', 'nunuk.soedjoed@gmail.com', 79, '2021-12-29 14:17:55', 1),
(165, '103.8.12.105', 'nunuk.soedjoed@gmail.com', 79, '2021-12-30 09:01:54', 1),
(166, '103.8.12.105', 'nunuk.soedjoed@gmail.com', 79, '2021-12-30 09:01:54', 1),
(167, '103.8.12.105', 'mauraqoonitah@gmail.com', 60, '2021-12-30 09:23:40', 1),
(168, '103.8.12.105', 'nunuk.soedjoed@gmail.com', 79, '2021-12-30 09:30:35', 1),
(169, '2001:448a:2002:988c:8d65:2fbc:4654:9068', 'nunuk', NULL, '2022-01-03 13:46:23', 0),
(170, '2001:448a:2002:988c:8d65:2fbc:4654:9068', 'nunuk', NULL, '2022-01-03 13:46:30', 0),
(171, '2001:448a:2002:988c:8d65:2fbc:4654:9068', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-01-03 13:46:40', 1),
(172, '36.71.19.215', 'Ariya Seta', 100, '2022-01-03 17:05:26', 0),
(173, '114.4.78.152', 'Cucun27', 101, '2022-01-03 22:09:31', 0),
(174, '114.4.78.152', 'cucunwahyuni27@gmail.com', 101, '2022-01-03 22:10:58', 1),
(175, '180.252.160.192', 'adel', 104, '2022-01-04 07:53:20', 0),
(176, '180.252.160.192', 'muhammadrahmansyah123@gmail.com', 104, '2022-01-04 07:55:15', 1),
(177, '180.252.160.192', 'muhammadrahmansyah123@gmail.com', 104, '2022-01-04 08:10:00', 1),
(178, '210.211.20.2', 'gnurkahfi@yahoo.co.id', 105, '2022-01-04 08:21:21', 1),
(179, '118.99.100.252', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-01-04 09:11:36', 1),
(180, '180.252.173.179', 'niaherdin@gmail.com', 106, '2022-01-04 09:12:33', 1),
(181, '36.71.19.215', 'ariyaseta@unj.ac.id', 100, '2022-01-04 09:16:44', 1),
(182, '61.94.150.74', 'akbarfitriansyah924@gmail.com', 107, '2022-01-04 22:09:49', 1),
(183, '182.2.165.62', 'Linanafisah', 108, '2022-01-04 22:13:51', 0),
(184, '182.2.165.62', 'LinaNafisah_1314617025@mhs.unj.ac.id', 108, '2022-01-04 22:14:03', 0),
(185, '182.2.165.62', 'LinaNafisah_1314617025@mhs.unj.ac.id', 108, '2022-01-04 22:17:36', 0),
(186, '182.2.165.62', 'LinaNafisah_1314617025@mhs.unj.ac.id', 108, '2022-01-04 22:17:51', 0),
(187, '182.2.165.62', 'linanafisah24@gmail.com', 110, '2022-01-04 22:20:15', 1),
(188, '180.252.116.235', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-01-05 13:05:49', 1),
(189, '180.241.17.72', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 08:17:01', 1),
(190, '180.241.17.72', 'admin_gpjm', NULL, '2022-02-05 08:59:07', 0),
(191, '180.241.17.72', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 09:05:41', 1),
(192, '180.241.17.72', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 09:17:08', 1),
(193, '180.244.172.65', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 09:54:59', 1),
(194, '180.244.172.65', 'qpmaura@gmail.com', 124, '2022-02-05 10:42:59', 1),
(195, '180.244.172.65', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 10:54:02', 1),
(196, '180.244.172.65', 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 126, '2022-02-05 11:14:24', 1),
(197, '180.244.172.65', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 11:49:18', 1),
(198, '180.244.172.17', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 18:42:52', 1),
(199, '180.244.172.17', 'qpmaura', NULL, '2022-02-05 19:25:37', 0),
(200, '180.244.172.17', 'qpmaura', NULL, '2022-02-05 19:25:44', 0),
(201, '180.244.172.48', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 20:35:53', 1),
(202, '180.244.172.48', 'qpmaura', NULL, '2022-02-05 20:45:04', 0),
(203, '180.244.172.48', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 20:50:44', 1),
(204, '180.244.172.48', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 21:11:16', 1),
(205, '180.244.172.48', 'qpmaura@gmail.com', 130, '2022-02-05 21:16:34', 1),
(206, '180.244.172.48', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-05 21:18:00', 1),
(207, '180.244.172.14', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-06 11:51:19', 1),
(208, '180.244.172.14', 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 126, '2022-02-06 12:37:52', 1),
(209, '180.244.172.148', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-06 12:44:01', 1),
(210, '180.252.116.9', 'admin', NULL, '2022-02-12 21:36:57', 0),
(211, '180.252.116.9', 'admin', NULL, '2022-02-12 21:37:05', 0),
(212, '180.252.116.9', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-12 21:37:12', 1),
(213, '180.252.116.9', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-12 21:38:50', 1),
(214, '180.244.172.120', 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 126, '2022-02-12 21:49:43', 1),
(215, '180.244.172.120', 'gpjm.instrumenkepuasan@gmail.com', 55, '2022-02-12 22:04:33', 1);

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
(3, 15, 'instrumen C.4.1'),
(11, 30, 'instrumen C.2.1');

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

--
-- Dumping data for table `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(4, 'kontributor.instrumenkepuasan@gmail.com', '2001:448a:2002:988c:78ea:5793:91d7:c9c4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '22380bd44b86a4be6965bd4095f77b52', '2021-12-27 01:53:02'),
(5, 'kontributor.instrumenkepuasan@gmail.com', '2001:448a:2002:988c:78ea:5793:91d7:c9c4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '678840b146f7fe7afd62fd6c553c9d8f', '2021-12-27 02:05:38'),
(6, '', '180.244.172.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', '', '2022-02-05 21:07:56'),
(7, 'qpmaura@gmail.com', '180.244.172.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', '', '2022-02-05 21:08:05'),
(8, 'qpmaura@gmail.com', '180.244.172.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', 'scfsdvcdsfvdfsv', '2022-02-05 21:08:29'),
(9, 'qpmaura@gmail.com', '180.244.172.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', 'aaaaaaaaa', '2022-02-05 21:09:09'),
(10, 'qpmaura@gmail.com', '180.244.172.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', 'aaaaaaaaa', '2022-02-05 21:09:21'),
(11, 'qpmaura@gmail.com', '180.244.172.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', '43efeafvfqd', '2022-02-05 21:09:54'),
(12, 'qpmaura@gmail.com', '180.244.172.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', 'fceswfcawecfae', '2022-02-05 21:10:39'),
(13, 'qpmaura@gmail.com', '180.244.172.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', 'fceswfcawecfae', '2022-02-05 21:10:45');

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
(56, 3),
(56, 11);

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
(26, 'C.3', 'Instrumen Kepuasan atas Standar Layanan Kemahasiswaan', 'Pengguna Lulusan', 'c3', '', 0, NULL, NULL),
(30, 'C.5.1', 'Instrumen Kepuasan atas Pengelolaan Keuangan', 'Dosen', 'c51', 'FbhLGP7lqeHcMw3r', 0, '2022-02-05 13:20:54', '2022-02-05 13:26:34'),
(31, 'C.5.1', 'Instrumen Kepuasan atas Pengelolaan Keuangan', 'Mahasiswa', 'c51', 'FbhLGP7lqeHcMw3r', 0, '2022-02-05 13:20:54', '2022-02-05 13:26:34'),
(32, 'C.5.1', 'Instrumen Kepuasan atas Pengelolaan Keuangan', 'Tenaga Kependidikan', 'c51', 'FbhLGP7lqeHcMw3r', 0, '2022-02-05 13:20:54', '2022-02-05 13:26:34'),
(34, 'C.5.2', 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana', 'Dosen', 'c52', 'zFkYDvcT6iHNbPlm', 0, '2022-02-05 13:26:17', '2022-02-05 13:26:17'),
(35, 'C.5.2', 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana', 'Mahasiswa', 'c52', 'zFkYDvcT6iHNbPlm', 0, '2022-02-05 13:26:17', '2022-02-05 13:26:17'),
(36, 'C.5.2', 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana', 'Tenaga Kependidikan', 'c52', 'zFkYDvcT6iHNbPlm', 0, '2022-02-05 13:26:17', '2022-02-05 13:26:17');

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
(7, 'C.2', 'C.2.3', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mahasiswa', 'Mahasiswa', 'c2', 1, NULL, '2021-12-14 12:55:57'),
(8, 'C.2', 'C.2.4', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Alumni/Lulusan', 'Alumni/Lulusan', 'c2', 1, NULL, '2021-12-23 16:41:46'),
(9, 'C.2', 'C.2.5', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Pengguna Lulusan', 'Pengguna Lulusan', 'c2', 1, NULL, '2021-12-23 16:41:57'),
(10, 'C.2', 'C.2.6.a', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Mitra', 'Mitra', 'c2', 0, NULL, NULL),
(11, 'C.2', 'C.2.6.b', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Partners', 'Partners', 'c2', 0, NULL, NULL),
(12, 'C.3', 'C.3.1', 'Instrumen Kepuasan atas Standar Layanan Kemahasiswaan oleh Mahasiswa', 'Mahasiswa', 'c3', 0, NULL, NULL),
(13, 'C.3', 'C.3.2', 'Instrumen Kepuasan atas Standar Layanan Kemahasiswaan oleh Alumni/Lulusan', 'Alumni/Lulusan', 'c3', 0, NULL, NULL),
(14, 'C.3', 'C.3.3', 'Instrumen Kepuasan atas Standar Layanan Kemahasiswaan oleh Pengguna Lulusan', 'Pengguna Lulusan', 'c3', 0, NULL, NULL),
(15, 'C.4', 'C.4.1', 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Dosen', 'Dosen', 'c4', 1, NULL, '2021-12-14 15:58:18'),
(16, 'C.4', 'C.4.2', 'Instrumen Kepuasan atas Standar Pengelolaan SDM UNJ oleh Tenaga Kependidikan', 'Tenaga Kependidikan', 'c4', 1, NULL, '2022-02-05 19:00:09'),
(19, 'C.7', 'C.7.2', 'Instrumen atas Proses Penelitian UNJ oleh Mitra', 'Mitra', 'c7', 1, NULL, '2021-12-14 15:59:36'),
(20, 'C.8', 'C.8.1', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Pengabdi', 'Pengabdi', 'c8', 0, NULL, NULL),
(21, 'C.9', 'C.9.2', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Mitra', 'Mitra', 'c9', 1, NULL, '2021-12-23 16:42:34'),
(27, 'C.7', 'C.7.1', 'Instrumen atas Proses Penelitian UNJ oleh Peneliti', 'Peneliti', 'c7', 0, '2021-12-13 18:10:40', '2021-12-13 18:10:40'),
(28, 'C.8', 'C.8.2', 'Instrumen Kepuasan Atas Proses Pengabdian Kepada Masyarakat - UNJ oleh Mitra', 'Mitra', 'c8', 1, '2021-12-13 18:15:51', '2021-12-14 15:58:57'),
(29, 'C.9', 'C.9.1', 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'Pengguna Lulusan', 'c9', 1, '2021-12-13 18:18:24', '2021-12-14 15:58:41'),
(30, 'C.2', 'C.2.1', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'Dosen', 'c2', 1, '2021-12-14 12:22:55', '2021-12-14 12:56:05'),
(31, 'C.2', 'C.2.2', 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'Tenaga Kependidikan', 'c2', 0, '2021-12-23 17:02:53', '2021-12-23 17:02:53'),
(32, 'C.5.2', 'C.5.2.b', 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana oleh Tenaga Kependidikan', 'Tenaga Kependidikan', 'c52', 0, '2022-02-05 13:26:51', '2022-02-05 13:27:30');

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
(1, 'Laporan Instrumen Kepuasan - FMIPA UNJ - 2020.docx', 0, 'admin', '', '2021-12-12 15:22:49', '2021-12-12 15:22:49'),
(2, 'Hasil Survei Instrumen C.2.3 - Desember 2021.xlsx', 7, 'admin', '', '2021-12-14 13:18:21', '2021-12-14 13:18:21');

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
(13, 'Name', 7, 'UFm7GtZ8d1YHovbO', 'isian'),
(16, 'fullname', 8, 'B9aHpMYKDmejZstr', 'isian'),
(17, 'Program Studi', 8, 'xbHQgjusi4BWRNPL', 'pilihan'),
(18, 'fullname', 9, 'qahuPyJCfINmnt15', 'isian'),
(19, 'Program Studi', 9, 'Fm5z81MlUNCeEYAf', 'pilihan'),
(20, 'fullname', 5, 'w0n3ZSbQjHduEg9V', 'isian'),
(51, 'Unit/Biro/Lembaga', 2, 'Vq6O5IPYWfykvtab', 'isian'),
(54, 'Institution/Workplace', 7, 'vKRDUkfJmwQd1B2O', 'isian'),
(55, 'Address', 7, 'pEkeClFLKVjGqtbh', 'isian'),
(56, 'Institusi/Tempat Kerja', 5, 'cgkLR75NxZOQ4Frv', 'isian'),
(57, 'Asal Program Studi Yang Dinilai', 5, '6yzVTkWSsfDUZp2Q', 'pilihan'),
(59, 'fullname', 6, 'P4uvGDfajpXBeYsZ', 'isian'),
(60, 'Lembaga/Unit/Institusi/Industri', 6, 'tij1SKEPJyDvZC6X', 'isian'),
(61, 'Program Studi (jika Alumni Unj)', 6, 'PyfuG5iQN21t8br9', 'pilihan'),
(62, 'NIP/NIDN', 1, 'fQckh3vnHZV8GoRj', 'isian'),
(63, 'Nomor Registrasi Mahasiswa (NRM)', 3, '0IDmw5zEjBSFQWPL', 'isian'),
(64, 'Angkatan', 3, 'VQ5JunDNIgi3eAyr', 'pilihan'),
(65, 'Tahun Masuk', 4, 'D4W8MpOCLERfy51I', 'isian'),
(66, 'Tahun Lulus', 4, '72cpWBxI0RNd9kGq', 'isian'),
(67, 'Nama Perusahaan', 4, 'PLy0BS9ElfD3IqGU', 'isian'),
(68, 'Alamat Perusahaan', 4, 'ye4gaFRUlAuNcsiI', 'isian');

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
(16, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah pengguna lulusan UNJ. Saudara diminta untuk memberikan penilaian terhadap luaran UNJ yang anda rasakan atas lulusan UNJ yang bekerja di institusi anda sesuai dengan keadaan yang sebenarnya.</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"white-space: pre; font-size: 15.6px;\">		</span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Sangat Baik</span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Baik</span></p><p><span style=\"font-size: 15.6px;\">2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= Cukup<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Kurang<span style=\"white-space:pre\">		</span></span></p><div><br></div>', 29, '2021-12-13 18:19:54', '2021-12-13 18:19:54'),
(17, '<p><span style=\"font-size: 15.6px;\">a)<span style=\"white-space:pre\">	</span>Saudara adalah dosen UNJ. Saudara diminta untuk memberikan penilaian terhadap layanan yang diberikan selama menjadi dosen di UNJ sesuai dengan keadaan yang sebenarnya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">b)<span style=\"white-space:pre\">	</span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c)<span style=\"white-space:pre\">	</span>Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d)<span style=\"white-space:pre\">	</span>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e)<span style=\"white-space:pre\">	</span>Keterangan:</span></p><p><span style=\"font-size: 15.6px;\"><br></span></p><p><span style=\"font-size: 15.6px;\">5<span style=\"white-space:pre\">	</span>= Sangat Puas</span></p><p><span style=\"font-size: 15.6px;\">4<span style=\"white-space:pre\">	</span>= Puas<span style=\"white-space:pre\">		</span></span></p><p><span style=\"font-size: 15.6px;\">3<span style=\"white-space:pre\">	</span>= Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2<span style=\"white-space:pre\">	</span>= Tidak&nbsp; Puas<span style=\"white-space:pre\">	</span></span></p><p><span style=\"font-size: 15.6px;\">1<span style=\"white-space:pre\">	</span>= Sangat Tidak Puas<span style=\"white-space:pre\">		</span></span></p><div><br></div>', 30, '2021-12-14 12:25:22', '2021-12-14 12:25:22'),
(18, '<p><span style=\"font-size: 15.6px;\">a) Saudara adalah tenaga kependidikan UNJ. Saudara diminta untuk memberikan penilaian terhadap layanan y</span><span style=\"font-family: var(--bs-font-sans-serif);\">ang diberikan selama bekerja di UNJ sesuai dengan keadaan yang sebenarnya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">b) Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan&nbsp;</span><span style=\"font-family: var(--bs-font-sans-serif);\">layanan UNJ di masa datang.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">c) Setiap jawaban Saudara akan dijamin kerahasiaannya.&nbsp;</span></p><p><span style=\"font-size: 15.6px;\">d) Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</span></p><p><span style=\"font-size: 15.6px;\">e) Keterangan:</span></p><p><span style=\"font-size: 15.6px;\">5 = Sangat Puas</span></p><p><span style=\"font-size: 15.6px;\">4 = Puas</span></p><p><span style=\"font-size: 15.6px;\">3 = Cukup Puas</span></p><p><span style=\"font-size: 15.6px;\">2 = Tidak Puas</span></p><p><span style=\"font-size: 15.6px;\">1 = Sangat Tidak Puas</span></p>', 31, '2021-12-23 17:04:10', '2021-12-23 17:04:10'),
(19, '<p class=\"MsoListParagraphCxSpFirst\" style=\"margin: 0in 0in 0in 28.35pt; line-height: normal;\"><!--[if !supportLists]--><span lang=\"IN\" style=\"\">a)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"IN\" style=\"\">Saudara\r\nadalah tenaga kependidikan UNJ. Saudara diminta untuk memberikan penilaian\r\nterhadap pengelolaan sarana prasarana yang diberikan selama di UNJ sesuai\r\ndengan keadaan yang sebenarnya. <o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0in 0in 0in 27pt; line-height: normal;\"><!--[if !supportLists]--><span lang=\"IN\" style=\"\">b)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"IN\" style=\"\">Setiap\r\ninformasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan\r\npeningkatan layanan UNJ di masa datang. <o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0in 0in 0in 27pt; line-height: normal;\"><!--[if !supportLists]--><span lang=\"IN\" style=\"\">c)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"IN\" style=\"\">Setiap\r\njawaban Saudara akan dijamin kerahasiaannya. <o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0in 0in 0in 27pt; line-height: normal;\"><!--[if !supportLists]--><span lang=\"IN\" style=\"\">d)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"IN\" style=\"\">Berilah\r\ntanda centang (</span><span lang=\"IN\" style=\"\">√</span><span lang=\"IN\" style=\"\">)\r\npada pernyataan pada kolom yang disediakan dibawah ini.<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0in 0in 0in 27pt; line-height: normal;\"><!--[if !supportLists]--><span lang=\"IN\" style=\"\">e)<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp; </span></span><!--[endif]--><span lang=\"IN\" style=\"\">Keterangan:<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpLast\" style=\"margin: 0in 0in 0in 14.2pt; line-height: normal;\"><span lang=\"IN\" style=\"\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\">5<span lang=\"IN\" style=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = Sangat Puas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><o:p></o:p></p><p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span lang=\"IN\" style=\"\">4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; =\r\nPuas<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\">3<span lang=\"IN\" style=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = </span>Cukup Puas<o:p></o:p></p><p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;= Tidak <span lang=\"IN\" style=\"\">Puas</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <o:p></o:p></p><p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\">1<span lang=\"IN\" style=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = </span>Sangat <span lang=\"IN\" style=\"\">Tidak Puas</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span lang=\"IN\" style=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal;\"><span lang=\"IN\" style=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<font face=\"Tahoma, sans-serif\"><span style=\"font-size: 9pt;\"><o:p></o:p></span></font></span></p>', 32, '2022-02-05 13:28:13', '2022-02-05 13:28:13');

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
(96, 57, 'Biologi'),
(97, 61, 'Pendidikan Matematika'),
(98, 61, 'Matematika'),
(99, 61, 'Statistika'),
(100, 61, 'Ilmu Komputer'),
(101, 61, 'Pendidikan Fisika'),
(102, 61, 'Fisika'),
(103, 61, 'Pendidikan Kimia'),
(104, 61, 'Kimia'),
(105, 61, 'Pendidikan Biologi'),
(106, 61, 'Biologi'),
(107, 64, '2016'),
(108, 64, '2017'),
(109, 64, '2018'),
(110, 64, '2019'),
(111, 64, '2020'),
(112, 64, '2021');

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
(189, 'Kepekaan terhadap kesempatan-kesempatan baru', 'C.9', 29, 'Instrumen Kepuasan atas Luaran dan Capaian Tridharma UNJ oleh Pengguna Lulusan', 'c9', '2021-12-13 18:24:07', '2021-12-13 18:24:07'),
(190, 'Layanan Pembelajaran(kurikulum, pengembangan kompetensi)', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:28', '2021-12-14 12:27:28'),
(191, 'Layanan Penelitian(skim penelitian dan proses penelitian)', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:28', '2021-12-14 12:27:28'),
(192, ' Layanan pengabdian kepada masyarakat(skim pengabdian dan proses pengabdian) ', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:28', '2021-12-14 12:27:28'),
(193, 'Layanan Administrasi: Keramahan, kejujuran, dan ketulusan staf dalam melayani', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:29', '2021-12-14 12:27:29'),
(194, 'Layanan Administrasi: Kecapatan dan ketepatan staf dalam melayani', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:29', '2021-12-14 12:27:29'),
(195, 'Layanan pengembangan karir  dosen dilaksanakan dengan menggunakan prinsip GUG(Transparansi, akuntabilitas, independen, kredibilitas,tanggung jawab dan keadilan) ', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:29', '2021-12-14 12:27:29'),
(196, 'Dukungan(moril dan dana) untuk mengikuti studi lanjut, kursus, pelatihan, sertifikasi, seminar, workshop, magang', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:29', '2021-12-14 12:27:29'),
(197, 'Mendapat layanan informasi tentang jenjang karir (kenaikan pangkat, golongan, jabfung, serdos)', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:29', '2021-12-14 12:27:29'),
(198, 'Mendapatkan layanan tentang peningkatan jenjang karir (kenaikan pangkat, golongan, jabfung, serdos)', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:29', '2021-12-14 12:27:29'),
(199, 'Mendapatkan layanan informasi/penawaran tentang jabatan pengelola/jabatan struktural', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:30', '2021-12-14 12:27:30'),
(200, 'Fasilitas sarana(peralatan kuliah, peralatan kegiatan diluar kelas)', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:30', '2021-12-14 12:27:30'),
(201, 'Fasilitas prasarana (tempat parkir, ruang kuliah,ruang dosen, ruang laboratorium, tempat ibadah/masjid, toilet,poli klinik,olahraga kantin dll ) ', 'C.2', 30, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Dosen', 'c2', '2021-12-14 12:27:30', '2021-12-14 12:27:30'),
(202, 'Layanan Administrasi: Keramahan, kejujuran, dan ketulusan civitas akademika dalam berinteraksi', 'C.2', 31, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'c2', '2021-12-23 17:09:31', '2021-12-23 17:09:31'),
(203, 'Layanan Administrasi: Kecepatan dan ketepatan civitas akademika dalam berinteraksi ', 'C.2', 31, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'c2', '2021-12-23 17:09:31', '2021-12-23 17:09:31'),
(204, 'Layanan pengembangan karir tenaga kependidikan\r\n dilaksanakan dengan menggunakan prinsip \r\n GUG (Transparansi, akuntabilitas, independen, \r\nkredibilitas,tanggung jawab dan keadilan)\r\n', 'C.2', 31, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'c2', '2021-12-23 17:09:31', '2021-12-23 17:09:31'),
(205, 'Layanan Pengembangan Karir:\r\nDukungan(moril dan dana) untuk mengikuti studi lanjut, kursus, pelatihan, sertifikasi, seminar, workshop, magang.', 'C.2', 31, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'c2', '2021-12-23 17:09:31', '2021-12-23 17:09:31'),
(206, 'Layanan Pengembangan Karir: Mendapat layanan informasi tentang jenjang karir (kenaikan \r\npangkat, golongan, jabfung, serdos)', 'C.2', 31, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'c2', '2021-12-23 17:09:31', '2021-12-23 17:09:31'),
(207, 'Mendapatkan layanan tentang peningkatan jenjang karir \r\n(kenaikan pangkat, golongan, jabfung, serdos)', 'C.2', 31, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'c2', '2021-12-23 17:09:31', '2021-12-23 17:09:31'),
(208, 'Mendapatkan layanan informasi/penawaran tentang jabatan pengelola/jabatan struktural', 'C.2', 31, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'c2', '2021-12-23 17:09:31', '2021-12-23 17:09:31'),
(209, 'Fasilitas sarana (peralatan kuliah, peralatan kegiatan diluar \r\nkelas)', 'C.2', 31, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'c2', '2021-12-23 17:10:30', '2021-12-23 17:10:30'),
(210, 'Fasilitas prasarana (tempat parkir, ruang kuliah,ruang dosen, ruang laboratorium, tempat ibadah/masjid, toilet,poliklinik,olahraga kantin dll ) ', 'C.2', 31, 'TATA KELOLA, TATA PAMONG, DAN KERJASAMA oleh Tenaga Kependidikan', 'c2', '2021-12-23 17:10:30', '2021-12-23 17:10:30'),
(211, 'Kecukupan sarana pendukung di ruang kerja', 'C.5.2', 32, 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana oleh Tenaga Kependidikan', 'c52', '2022-02-05 13:29:36', '2022-02-05 13:29:36'),
(212, 'Kemutakhiran sarana pendukung di ruang kerja', 'C.5.2', 32, 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana oleh Tenaga Kependidikan', 'c52', '2022-02-05 13:29:36', '2022-02-05 13:29:36'),
(213, 'Kemutakhiran sarana pendukung di ruang kerja', 'C.5.2', 32, 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana oleh Tenaga Kependidikan', 'c52', '2022-02-05 13:29:36', '2022-02-05 13:29:36'),
(214, 'Kecukupan komputer dan perangkat teknologi informasi lainnya', 'C.5.2', 32, 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana oleh Tenaga Kependidikan', 'c52', '2022-02-05 13:29:36', '2022-02-05 13:29:36'),
(215, 'Kemutakhiran komputer dan perangkat teknologi informasi lainnya', 'C.5.2', 32, 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana oleh Tenaga Kependidikan', 'c52', '2022-02-05 13:29:36', '2022-02-05 13:29:36'),
(216, 'Ketersediaan software pengolah data terkait kegiatan pengukuran dan pemetaan yang memadai dan up to date					', 'C.5.2', 32, 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana oleh Tenaga Kependidikan', 'c52', '2022-02-05 13:29:36', '2022-02-05 13:29:36'),
(217, 'Ruang kerja yang memadai', 'C.5.2', 32, 'Instrumen Kepuasan atas Pengelolaan Sarana Prasarana oleh Tenaga Kependidikan', 'c52', '2022-02-05 13:29:36', '2022-02-05 13:29:36');

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
(4, 61, 'Pengguna Lulusan', 'Ulfah nurzaakiah', '2021-12-14 00:20:06', '2021-12-14 00:20:06'),
(5, 61, 'Pengguna Lulusan', 'Ulfah nurzaakiah', '2021-12-14 00:20:57', '2021-12-14 00:20:57'),
(6, 61, 'Pengguna Lulusan', 'Ulfah nurzaakiah', '2021-12-14 00:23:58', '2021-12-14 00:23:58'),
(7, 61, 'Pengguna Lulusan', 'Ulfah nurzaakiah', '2021-12-14 00:24:19', '2021-12-14 00:24:19'),
(8, 61, 'Pengguna Lulusan', 'Ulfah nurzaakiah', '2021-12-14 00:25:04', '2021-12-14 00:25:04'),
(9, 61, 'Pengguna Lulusan', 'Ulfah nurzaakiah', '2021-12-14 00:25:29', '2021-12-14 00:25:29'),
(10, 61, 'Pengguna Lulusan', 'Ulfah nurzaakiah', '2021-12-14 00:26:03', '2021-12-14 00:26:03'),
(11, 61, 'Pengguna Lulusan', 'Ulfah nurzaakiah', '2021-12-14 00:26:33', '2021-12-14 00:26:33'),
(12, 61, 'Pengguna Lulusan', 'Ulfah nurzaakiah', '2021-12-14 00:32:10', '2021-12-14 00:32:10'),
(13, 61, 'Pengguna Lulusan', 'Ulfah nurzaakiah', '2021-12-14 00:44:17', '2021-12-14 00:44:17'),
(15, 63, 'Mitra', 'Divina Fatriandira', '2021-12-14 12:04:44', '2021-12-14 12:04:44'),
(16, 63, 'Mitra', 'Divina Fatriandira', '2021-12-14 12:05:31', '2021-12-14 12:05:31'),
(17, 63, 'Mitra', 'Divina Fatriandira', '2021-12-14 12:06:12', '2021-12-14 12:06:12'),
(18, 63, 'Mitra', 'Divina Fatriandira', '2021-12-14 12:07:01', '2021-12-14 12:07:01'),
(21, 67, 'Mahasiswa', 'Vivi Rofiah', '2021-12-14 13:10:16', '2021-12-14 13:10:16'),
(23, 73, 'Mahasiswa', 'Octarina Salsabila', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(24, 70, 'Alumni/Lulusan', 'Farah Ayu Anandita', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(25, 83, 'Mahasiswa', 'Adini Gufroni', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(26, 84, 'Alumni/Lulusan', 'Trisna Hastuti Puspita Ningrum', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(27, 85, 'Mahasiswa', 'Aty Lestari', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(28, 86, 'Mahasiswa', 'NILATIL MOENA', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(29, 88, 'Mahasiswa', 'Prianugrah', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(30, 89, 'Mahasiswa', 'Hafizhun Alim', '2021-12-25 11:30:20', '2021-12-25 11:30:20'),
(31, 90, 'Mahasiswa', 'Togu Annaaf Kumara', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(32, 96, 'Tenaga Kependidikan', 'Alfisyahrizqa', '2021-12-27 13:54:44', '2021-12-27 13:54:44'),
(33, 96, 'Tenaga Kependidikan', 'Alfisyahrizqa', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(34, 97, 'Alumni/Lulusan', 'Retno Wulandari', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(35, 98, 'Pengguna Lulusan', 'fadli w', '2021-12-27 14:43:07', '2021-12-27 14:43:07'),
(36, 98, 'Pengguna Lulusan', 'fadli w', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(37, 104, 'Alumni/Lulusan', 'Muhammad Rahmansyah', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(38, 104, 'Alumni/Lulusan', 'Muhammad Rahmansyah', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(39, 105, 'Alumni/Lulusan', 'Ghefira Nur Kahfi', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(40, 100, 'Tenaga Kependidikan', 'Ariya Seta', '2022-01-04 09:23:53', '2022-01-04 09:23:53'),
(41, 100, 'Tenaga Kependidikan', 'Ariya Seta', '2022-01-04 09:25:39', '2022-01-04 09:25:39'),
(42, 107, 'Alumni/Lulusan', 'Akbar Fitriansyah', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(43, 126, 'Mahasiswa', 'Maura Qoonitah Putri', '2022-02-05 11:15:45', '2022-02-05 11:15:45');

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
(66, 'c2', 'C.2.3', 7, 42, '5', 'Mahasiswa', 60, 'nZm9Aaet2RPFO4jW', '2021-12-13 14:21:21', '2021-12-13 14:21:21'),
(111, 'c2', 'C.2.5', 9, 60, '5', 'Pengguna Lulusan', 61, 'FqzeXAia0fsjGrKk', '2021-12-14 00:32:10', '2021-12-14 00:32:10'),
(112, 'c2', 'C.2.5', 9, 61, '5', 'Pengguna Lulusan', 61, 'FqzeXAia0fsjGrKk', '2021-12-14 00:32:10', '2021-12-14 00:32:10'),
(113, 'c2', 'C.2.5', 9, 62, '4', 'Pengguna Lulusan', 61, 'FqzeXAia0fsjGrKk', '2021-12-14 00:32:10', '2021-12-14 00:32:10'),
(114, 'c9', 'C.9.1', 29, 170, '5', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:15', '2021-12-14 00:44:15'),
(115, 'c9', 'C.9.1', 29, 171, '4', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:15', '2021-12-14 00:44:15'),
(116, 'c9', 'C.9.1', 29, 172, '3', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:15', '2021-12-14 00:44:15'),
(117, 'c9', 'C.9.1', 29, 173, '3', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:15', '2021-12-14 00:44:15'),
(118, 'c9', 'C.9.1', 29, 174, '4', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:15', '2021-12-14 00:44:15'),
(119, 'c9', 'C.9.1', 29, 175, '4', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(120, 'c9', 'C.9.1', 29, 176, '4', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(121, 'c9', 'C.9.1', 29, 177, '4', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(122, 'c9', 'C.9.1', 29, 178, '5', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(123, 'c9', 'C.9.1', 29, 179, '5', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(124, 'c9', 'C.9.1', 29, 180, '5', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(125, 'c9', 'C.9.1', 29, 181, '5', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(126, 'c9', 'C.9.1', 29, 182, '5', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(127, 'c9', 'C.9.1', 29, 183, '4', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(128, 'c9', 'C.9.1', 29, 184, '4', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(129, 'c9', 'C.9.1', 29, 185, '4', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(130, 'c9', 'C.9.1', 29, 186, '4', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(131, 'c9', 'C.9.1', 29, 187, '3', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:16', '2021-12-14 00:44:16'),
(132, 'c9', 'C.9.1', 29, 188, '3', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:17', '2021-12-14 00:44:17'),
(133, 'c9', 'C.9.1', 29, 189, '3', 'Pengguna Lulusan', 61, 's4YBRm0UQ3tia1NO', '2021-12-14 00:44:17', '2021-12-14 00:44:17'),
(151, 'c2', 'C.2.6.a', 10, 63, '5', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:42', '2021-12-14 12:04:42'),
(152, 'c2', 'C.2.6.a', 10, 64, '4', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:42', '2021-12-14 12:04:42'),
(153, 'c2', 'C.2.6.a', 10, 65, '5', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:42', '2021-12-14 12:04:42'),
(154, 'c2', 'C.2.6.a', 10, 66, '5', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:42', '2021-12-14 12:04:42'),
(155, 'c2', 'C.2.6.a', 10, 67, '5', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:43', '2021-12-14 12:04:43'),
(156, 'c2', 'C.2.6.a', 10, 68, '4', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:43', '2021-12-14 12:04:43'),
(157, 'c2', 'C.2.6.a', 10, 69, '4', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:43', '2021-12-14 12:04:43'),
(158, 'c2', 'C.2.6.a', 10, 70, '4', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:43', '2021-12-14 12:04:43'),
(159, 'c2', 'C.2.6.a', 10, 71, '3', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:43', '2021-12-14 12:04:43'),
(160, 'c2', 'C.2.6.a', 10, 72, '3', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:43', '2021-12-14 12:04:43'),
(161, 'c2', 'C.2.6.a', 10, 73, '3', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:43', '2021-12-14 12:04:43'),
(162, 'c2', 'C.2.6.a', 10, 74, '4', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:43', '2021-12-14 12:04:43'),
(163, 'c2', 'C.2.6.a', 10, 75, '5', 'Mitra', 63, 'auAfB3XCq74TIUPY', '2021-12-14 12:04:44', '2021-12-14 12:04:44'),
(164, 'c7', 'C.7.2', 19, 100, '4', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:29', '2021-12-14 12:05:29'),
(165, 'c7', 'C.7.2', 19, 101, '3', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(166, 'c7', 'C.7.2', 19, 102, '4', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(167, 'c7', 'C.7.2', 19, 103, '5', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(168, 'c7', 'C.7.2', 19, 104, '4', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(169, 'c7', 'C.7.2', 19, 105, '4', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(170, 'c7', 'C.7.2', 19, 106, '4', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(171, 'c7', 'C.7.2', 19, 107, '5', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(172, 'c7', 'C.7.2', 19, 108, '4', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(173, 'c7', 'C.7.2', 19, 109, '4', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(174, 'c7', 'C.7.2', 19, 110, '3', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(175, 'c7', 'C.7.2', 19, 111, '3', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(176, 'c7', 'C.7.2', 19, 112, '3', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(177, 'c7', 'C.7.2', 19, 113, '4', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:30', '2021-12-14 12:05:30'),
(178, 'c7', 'C.7.2', 19, 114, '4', 'Mitra', 63, 'Jxq3WVsnjYzowOiu', '2021-12-14 12:05:31', '2021-12-14 12:05:31'),
(179, 'c8', 'C.8.2', 28, 145, '5', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:11', '2021-12-14 12:06:11'),
(180, 'c8', 'C.8.2', 28, 146, '4', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:11', '2021-12-14 12:06:11'),
(181, 'c8', 'C.8.2', 28, 147, '5', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:11', '2021-12-14 12:06:11'),
(182, 'c8', 'C.8.2', 28, 148, '4', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:11', '2021-12-14 12:06:11'),
(183, 'c8', 'C.8.2', 28, 149, '4', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:11', '2021-12-14 12:06:11'),
(184, 'c8', 'C.8.2', 28, 150, '5', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:11', '2021-12-14 12:06:11'),
(185, 'c8', 'C.8.2', 28, 151, '5', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:11', '2021-12-14 12:06:11'),
(186, 'c8', 'C.8.2', 28, 152, '4', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:11', '2021-12-14 12:06:11'),
(187, 'c8', 'C.8.2', 28, 153, '3', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:12', '2021-12-14 12:06:12'),
(188, 'c8', 'C.8.2', 28, 154, '4', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:12', '2021-12-14 12:06:12'),
(189, 'c8', 'C.8.2', 28, 155, '4', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:12', '2021-12-14 12:06:12'),
(190, 'c8', 'C.8.2', 28, 156, '5', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:12', '2021-12-14 12:06:12'),
(191, 'c8', 'C.8.2', 28, 157, '4', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:12', '2021-12-14 12:06:12'),
(192, 'c8', 'C.8.2', 28, 158, '3', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:12', '2021-12-14 12:06:12'),
(193, 'c8', 'C.8.2', 28, 159, '3', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:12', '2021-12-14 12:06:12'),
(194, 'c8', 'C.8.2', 28, 160, '4', 'Mitra', 63, 'Hg0pnkbY6c5EXsB9', '2021-12-14 12:06:12', '2021-12-14 12:06:12'),
(195, 'c9', 'C.9.2', 21, 161, '4', 'Mitra', 63, 'ufv7R8sayo5YhQ9F', '2021-12-14 12:07:01', '2021-12-14 12:07:01'),
(196, 'c9', 'C.9.2', 21, 162, '5', 'Mitra', 63, 'ufv7R8sayo5YhQ9F', '2021-12-14 12:07:01', '2021-12-14 12:07:01'),
(197, 'c9', 'C.9.2', 21, 163, '4', 'Mitra', 63, 'ufv7R8sayo5YhQ9F', '2021-12-14 12:07:01', '2021-12-14 12:07:01'),
(198, 'c9', 'C.9.2', 21, 164, '4', 'Mitra', 63, 'ufv7R8sayo5YhQ9F', '2021-12-14 12:07:01', '2021-12-14 12:07:01'),
(199, 'c9', 'C.9.2', 21, 165, '4', 'Mitra', 63, 'ufv7R8sayo5YhQ9F', '2021-12-14 12:07:01', '2021-12-14 12:07:01'),
(200, 'c9', 'C.9.2', 21, 166, '5', 'Mitra', 63, 'ufv7R8sayo5YhQ9F', '2021-12-14 12:07:01', '2021-12-14 12:07:01'),
(201, 'c9', 'C.9.2', 21, 167, '4', 'Mitra', 63, 'ufv7R8sayo5YhQ9F', '2021-12-14 12:07:01', '2021-12-14 12:07:01'),
(202, 'c9', 'C.9.2', 21, 168, '4', 'Mitra', 63, 'ufv7R8sayo5YhQ9F', '2021-12-14 12:07:01', '2021-12-14 12:07:01'),
(203, 'c9', 'C.9.2', 21, 169, '5', 'Mitra', 63, 'ufv7R8sayo5YhQ9F', '2021-12-14 12:07:01', '2021-12-14 12:07:01'),
(236, 'c2', 'C.2.3', 7, 21, '5', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:07', '2021-12-14 13:10:07'),
(237, 'c2', 'C.2.3', 7, 22, '4', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:08', '2021-12-14 13:10:08'),
(238, 'c2', 'C.2.3', 7, 23, '3', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:08', '2021-12-14 13:10:08'),
(239, 'c2', 'C.2.3', 7, 24, '4', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:08', '2021-12-14 13:10:08'),
(240, 'c2', 'C.2.3', 7, 25, '5', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:08', '2021-12-14 13:10:08'),
(241, 'c2', 'C.2.3', 7, 26, '4', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:09', '2021-12-14 13:10:09'),
(242, 'c2', 'C.2.3', 7, 27, '4', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:10', '2021-12-14 13:10:10'),
(243, 'c2', 'C.2.3', 7, 28, '5', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:12', '2021-12-14 13:10:12'),
(244, 'c2', 'C.2.3', 7, 29, '4', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:13', '2021-12-14 13:10:13'),
(245, 'c2', 'C.2.3', 7, 30, '4', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:13', '2021-12-14 13:10:13'),
(246, 'c2', 'C.2.3', 7, 31, '5', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:14', '2021-12-14 13:10:14'),
(247, 'c2', 'C.2.3', 7, 32, '4', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:14', '2021-12-14 13:10:14'),
(248, 'c2', 'C.2.3', 7, 33, '4', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:14', '2021-12-14 13:10:14'),
(249, 'c2', 'C.2.3', 7, 34, '3', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:15', '2021-12-14 13:10:15'),
(250, 'c2', 'C.2.3', 7, 35, '5', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:15', '2021-12-14 13:10:15'),
(251, 'c2', 'C.2.3', 7, 36, '3', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:15', '2021-12-14 13:10:15'),
(252, 'c2', 'C.2.3', 7, 37, '4', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:15', '2021-12-14 13:10:15'),
(253, 'c2', 'C.2.3', 7, 38, '3', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:15', '2021-12-14 13:10:15'),
(254, 'c2', 'C.2.3', 7, 39, '4', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:16', '2021-12-14 13:10:16'),
(255, 'c2', 'C.2.3', 7, 40, '5', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:16', '2021-12-14 13:10:16'),
(256, 'c2', 'C.2.3', 7, 41, '3', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:16', '2021-12-14 13:10:16'),
(257, 'c2', 'C.2.3', 7, 42, '5', 'Mahasiswa', 67, '6rucdshDIaAH4Xyi', '2021-12-14 13:10:16', '2021-12-14 13:10:16'),
(280, 'c2', 'C.2.3', 7, 21, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(281, 'c2', 'C.2.3', 7, 22, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(282, 'c2', 'C.2.3', 7, 23, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(283, 'c2', 'C.2.3', 7, 24, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(284, 'c2', 'C.2.3', 7, 25, '4', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(285, 'c2', 'C.2.3', 7, 26, '4', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(286, 'c2', 'C.2.3', 7, 27, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(287, 'c2', 'C.2.3', 7, 28, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(288, 'c2', 'C.2.3', 7, 29, '4', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(289, 'c2', 'C.2.3', 7, 30, '4', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(290, 'c2', 'C.2.3', 7, 31, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(291, 'c2', 'C.2.3', 7, 32, '4', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(292, 'c2', 'C.2.3', 7, 33, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(293, 'c2', 'C.2.3', 7, 34, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(294, 'c2', 'C.2.3', 7, 35, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(295, 'c2', 'C.2.3', 7, 36, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(296, 'c2', 'C.2.3', 7, 37, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(297, 'c2', 'C.2.3', 7, 38, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(298, 'c2', 'C.2.3', 7, 39, '4', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(299, 'c2', 'C.2.3', 7, 40, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(300, 'c2', 'C.2.3', 7, 41, '5', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(301, 'c2', 'C.2.3', 7, 42, '4', 'Mahasiswa', 73, 'Px2yX0mU3BGCzNth', '2021-12-17 15:04:47', '2021-12-17 15:04:47'),
(302, 'c2', 'C.2.4', 8, 43, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(303, 'c2', 'C.2.4', 8, 44, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(304, 'c2', 'C.2.4', 8, 45, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(305, 'c2', 'C.2.4', 8, 46, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(306, 'c2', 'C.2.4', 8, 47, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(307, 'c2', 'C.2.4', 8, 48, '4', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(308, 'c2', 'C.2.4', 8, 49, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(309, 'c2', 'C.2.4', 8, 50, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(310, 'c2', 'C.2.4', 8, 51, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(311, 'c2', 'C.2.4', 8, 52, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(312, 'c2', 'C.2.4', 8, 53, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(313, 'c2', 'C.2.4', 8, 54, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(314, 'c2', 'C.2.4', 8, 55, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(315, 'c2', 'C.2.4', 8, 56, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(316, 'c2', 'C.2.4', 8, 57, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(317, 'c2', 'C.2.4', 8, 58, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(318, 'c2', 'C.2.4', 8, 59, '5', 'Alumni/Lulusan', 70, 'LjQzX7Ei6egtTSqf', '2021-12-17 22:37:54', '2021-12-17 22:37:54'),
(319, 'c2', 'C.2.3', 7, 21, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(320, 'c2', 'C.2.3', 7, 22, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(321, 'c2', 'C.2.3', 7, 23, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(322, 'c2', 'C.2.3', 7, 24, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(323, 'c2', 'C.2.3', 7, 25, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(324, 'c2', 'C.2.3', 7, 26, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(325, 'c2', 'C.2.3', 7, 27, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(326, 'c2', 'C.2.3', 7, 28, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(327, 'c2', 'C.2.3', 7, 29, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(328, 'c2', 'C.2.3', 7, 30, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(329, 'c2', 'C.2.3', 7, 31, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(330, 'c2', 'C.2.3', 7, 32, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(331, 'c2', 'C.2.3', 7, 33, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(332, 'c2', 'C.2.3', 7, 34, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(333, 'c2', 'C.2.3', 7, 35, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(334, 'c2', 'C.2.3', 7, 36, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(335, 'c2', 'C.2.3', 7, 37, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(336, 'c2', 'C.2.3', 7, 38, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(337, 'c2', 'C.2.3', 7, 39, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(338, 'c2', 'C.2.3', 7, 40, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(339, 'c2', 'C.2.3', 7, 41, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(340, 'c2', 'C.2.3', 7, 42, '4', 'Mahasiswa', 83, '53FG9OkWUNbc87Zt', '2021-12-22 20:52:22', '2021-12-22 20:52:22'),
(341, 'c2', 'C.2.4', 8, 43, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(342, 'c2', 'C.2.4', 8, 44, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(343, 'c2', 'C.2.4', 8, 45, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(344, 'c2', 'C.2.4', 8, 46, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(345, 'c2', 'C.2.4', 8, 47, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(346, 'c2', 'C.2.4', 8, 48, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(347, 'c2', 'C.2.4', 8, 49, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(348, 'c2', 'C.2.4', 8, 50, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(349, 'c2', 'C.2.4', 8, 51, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(350, 'c2', 'C.2.4', 8, 52, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(351, 'c2', 'C.2.4', 8, 53, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(352, 'c2', 'C.2.4', 8, 54, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(353, 'c2', 'C.2.4', 8, 55, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(354, 'c2', 'C.2.4', 8, 56, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(355, 'c2', 'C.2.4', 8, 57, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(356, 'c2', 'C.2.4', 8, 58, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(357, 'c2', 'C.2.4', 8, 59, '4', 'Alumni/Lulusan', 84, 'kUsPfNCHjGyFi6Yz', '2021-12-23 13:23:51', '2021-12-23 13:23:51'),
(358, 'c2', 'C.2.3', 7, 21, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(359, 'c2', 'C.2.3', 7, 22, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(360, 'c2', 'C.2.3', 7, 23, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(361, 'c2', 'C.2.3', 7, 24, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(362, 'c2', 'C.2.3', 7, 25, '4', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(363, 'c2', 'C.2.3', 7, 26, '4', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(364, 'c2', 'C.2.3', 7, 27, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(365, 'c2', 'C.2.3', 7, 28, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(366, 'c2', 'C.2.3', 7, 29, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(367, 'c2', 'C.2.3', 7, 30, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(368, 'c2', 'C.2.3', 7, 31, '4', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(369, 'c2', 'C.2.3', 7, 32, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(370, 'c2', 'C.2.3', 7, 33, '4', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(371, 'c2', 'C.2.3', 7, 34, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(372, 'c2', 'C.2.3', 7, 35, '4', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(373, 'c2', 'C.2.3', 7, 36, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(374, 'c2', 'C.2.3', 7, 37, '4', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(375, 'c2', 'C.2.3', 7, 38, '4', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(376, 'c2', 'C.2.3', 7, 39, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(377, 'c2', 'C.2.3', 7, 40, '4', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(378, 'c2', 'C.2.3', 7, 41, '5', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(379, 'c2', 'C.2.3', 7, 42, '4', 'Mahasiswa', 85, 'i93xZ06zQphFDvqn', '2021-12-23 17:36:20', '2021-12-23 17:36:20'),
(380, 'c2', 'C.2.3', 7, 21, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(381, 'c2', 'C.2.3', 7, 22, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(382, 'c2', 'C.2.3', 7, 23, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(383, 'c2', 'C.2.3', 7, 24, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(384, 'c2', 'C.2.3', 7, 25, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(385, 'c2', 'C.2.3', 7, 26, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(386, 'c2', 'C.2.3', 7, 27, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(387, 'c2', 'C.2.3', 7, 28, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(388, 'c2', 'C.2.3', 7, 29, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(389, 'c2', 'C.2.3', 7, 30, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(390, 'c2', 'C.2.3', 7, 31, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(391, 'c2', 'C.2.3', 7, 32, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(392, 'c2', 'C.2.3', 7, 33, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(393, 'c2', 'C.2.3', 7, 34, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(394, 'c2', 'C.2.3', 7, 35, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(395, 'c2', 'C.2.3', 7, 36, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(396, 'c2', 'C.2.3', 7, 37, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(397, 'c2', 'C.2.3', 7, 38, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(398, 'c2', 'C.2.3', 7, 39, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(399, 'c2', 'C.2.3', 7, 40, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(400, 'c2', 'C.2.3', 7, 41, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(401, 'c2', 'C.2.3', 7, 42, '4', 'Mahasiswa', 86, 'KnYEAMe23aNmzQbo', '2021-12-23 19:24:24', '2021-12-23 19:24:24'),
(402, 'c2', 'C.2.3', 7, 21, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(403, 'c2', 'C.2.3', 7, 22, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(404, 'c2', 'C.2.3', 7, 23, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(405, 'c2', 'C.2.3', 7, 24, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(406, 'c2', 'C.2.3', 7, 25, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(407, 'c2', 'C.2.3', 7, 26, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(408, 'c2', 'C.2.3', 7, 27, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(409, 'c2', 'C.2.3', 7, 28, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(410, 'c2', 'C.2.3', 7, 29, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(411, 'c2', 'C.2.3', 7, 30, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(412, 'c2', 'C.2.3', 7, 31, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(413, 'c2', 'C.2.3', 7, 32, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(414, 'c2', 'C.2.3', 7, 33, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(415, 'c2', 'C.2.3', 7, 34, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(416, 'c2', 'C.2.3', 7, 35, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(417, 'c2', 'C.2.3', 7, 36, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(418, 'c2', 'C.2.3', 7, 37, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(419, 'c2', 'C.2.3', 7, 38, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(420, 'c2', 'C.2.3', 7, 39, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(421, 'c2', 'C.2.3', 7, 40, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(422, 'c2', 'C.2.3', 7, 41, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(423, 'c2', 'C.2.3', 7, 42, '3', 'Mahasiswa', 88, 'wMIju6Nnk4tSp0PL', '2021-12-23 19:59:21', '2021-12-23 19:59:21'),
(424, 'c2', 'C.2.3', 7, 21, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(425, 'c2', 'C.2.3', 7, 22, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(426, 'c2', 'C.2.3', 7, 23, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(427, 'c2', 'C.2.3', 7, 24, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(428, 'c2', 'C.2.3', 7, 25, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(429, 'c2', 'C.2.3', 7, 26, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(430, 'c2', 'C.2.3', 7, 27, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(431, 'c2', 'C.2.3', 7, 28, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(432, 'c2', 'C.2.3', 7, 29, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(433, 'c2', 'C.2.3', 7, 30, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(434, 'c2', 'C.2.3', 7, 31, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(435, 'c2', 'C.2.3', 7, 32, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(436, 'c2', 'C.2.3', 7, 33, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(437, 'c2', 'C.2.3', 7, 34, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(438, 'c2', 'C.2.3', 7, 35, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(439, 'c2', 'C.2.3', 7, 36, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(440, 'c2', 'C.2.3', 7, 37, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(441, 'c2', 'C.2.3', 7, 38, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(442, 'c2', 'C.2.3', 7, 39, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(443, 'c2', 'C.2.3', 7, 40, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(444, 'c2', 'C.2.3', 7, 41, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(445, 'c2', 'C.2.3', 7, 42, '3', 'Mahasiswa', 89, 't4q5rmgGjJC0iLKh', '2021-12-25 11:30:19', '2021-12-25 11:30:19'),
(446, 'c2', 'C.2.3', 7, 21, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(447, 'c2', 'C.2.3', 7, 22, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(448, 'c2', 'C.2.3', 7, 23, '3', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(449, 'c2', 'C.2.3', 7, 24, '3', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(450, 'c2', 'C.2.3', 7, 25, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(451, 'c2', 'C.2.3', 7, 26, '3', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(452, 'c2', 'C.2.3', 7, 27, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(453, 'c2', 'C.2.3', 7, 28, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(454, 'c2', 'C.2.3', 7, 29, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(455, 'c2', 'C.2.3', 7, 30, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(456, 'c2', 'C.2.3', 7, 31, '3', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(457, 'c2', 'C.2.3', 7, 32, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(458, 'c2', 'C.2.3', 7, 33, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(459, 'c2', 'C.2.3', 7, 34, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(460, 'c2', 'C.2.3', 7, 35, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(461, 'c2', 'C.2.3', 7, 36, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(462, 'c2', 'C.2.3', 7, 37, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(463, 'c2', 'C.2.3', 7, 38, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(464, 'c2', 'C.2.3', 7, 39, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(465, 'c2', 'C.2.3', 7, 40, '3', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(466, 'c2', 'C.2.3', 7, 41, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(467, 'c2', 'C.2.3', 7, 42, '4', 'Mahasiswa', 90, 'rWC7bZefzi0aJ1MA', '2021-12-25 15:59:39', '2021-12-25 15:59:39'),
(468, 'c2', 'C.2.2', 31, 202, '3', 'Tenaga Kependidikan', 96, '7zISckvjJmPAbWtp', '2021-12-27 13:54:44', '2021-12-27 13:54:44'),
(469, 'c2', 'C.2.2', 31, 203, '3', 'Tenaga Kependidikan', 96, '7zISckvjJmPAbWtp', '2021-12-27 13:54:44', '2021-12-27 13:54:44'),
(470, 'c2', 'C.2.2', 31, 204, '3', 'Tenaga Kependidikan', 96, '7zISckvjJmPAbWtp', '2021-12-27 13:54:44', '2021-12-27 13:54:44'),
(471, 'c2', 'C.2.2', 31, 205, '3', 'Tenaga Kependidikan', 96, '7zISckvjJmPAbWtp', '2021-12-27 13:54:44', '2021-12-27 13:54:44'),
(472, 'c2', 'C.2.2', 31, 206, '3', 'Tenaga Kependidikan', 96, '7zISckvjJmPAbWtp', '2021-12-27 13:54:44', '2021-12-27 13:54:44'),
(473, 'c2', 'C.2.2', 31, 207, '3', 'Tenaga Kependidikan', 96, '7zISckvjJmPAbWtp', '2021-12-27 13:54:44', '2021-12-27 13:54:44'),
(474, 'c2', 'C.2.2', 31, 208, '3', 'Tenaga Kependidikan', 96, '7zISckvjJmPAbWtp', '2021-12-27 13:54:44', '2021-12-27 13:54:44'),
(475, 'c2', 'C.2.2', 31, 209, '2', 'Tenaga Kependidikan', 96, '7zISckvjJmPAbWtp', '2021-12-27 13:54:44', '2021-12-27 13:54:44'),
(476, 'c2', 'C.2.2', 31, 210, '2', 'Tenaga Kependidikan', 96, '7zISckvjJmPAbWtp', '2021-12-27 13:54:44', '2021-12-27 13:54:44'),
(477, 'c4', 'C.4.2', 16, 89, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(478, 'c4', 'C.4.2', 16, 90, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(479, 'c4', 'C.4.2', 16, 91, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(480, 'c4', 'C.4.2', 16, 92, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(481, 'c4', 'C.4.2', 16, 93, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(482, 'c4', 'C.4.2', 16, 94, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(483, 'c4', 'C.4.2', 16, 95, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(484, 'c4', 'C.4.2', 16, 96, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(485, 'c4', 'C.4.2', 16, 97, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(486, 'c4', 'C.4.2', 16, 98, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(487, 'c4', 'C.4.2', 16, 99, '3', 'Tenaga Kependidikan', 96, 'KCZlJGNH26MrdcVj', '2021-12-27 13:57:33', '2021-12-27 13:57:33'),
(488, 'c2', 'C.2.4', 8, 43, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(489, 'c2', 'C.2.4', 8, 44, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(490, 'c2', 'C.2.4', 8, 45, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(491, 'c2', 'C.2.4', 8, 46, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(492, 'c2', 'C.2.4', 8, 47, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(493, 'c2', 'C.2.4', 8, 48, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(494, 'c2', 'C.2.4', 8, 49, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(495, 'c2', 'C.2.4', 8, 50, '2', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(496, 'c2', 'C.2.4', 8, 51, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(497, 'c2', 'C.2.4', 8, 52, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(498, 'c2', 'C.2.4', 8, 53, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(499, 'c2', 'C.2.4', 8, 54, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(500, 'c2', 'C.2.4', 8, 55, '2', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(501, 'c2', 'C.2.4', 8, 56, '4', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(502, 'c2', 'C.2.4', 8, 57, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(503, 'c2', 'C.2.4', 8, 58, '3', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(504, 'c2', 'C.2.4', 8, 59, '2', 'Alumni/Lulusan', 97, 'XqvMAR3fTQuytVdp', '2021-12-27 14:32:22', '2021-12-27 14:32:22'),
(505, 'c2', 'C.2.5', 9, 60, '4', 'Pengguna Lulusan', 98, 'uM8501FlRIjJf9Hd', '2021-12-27 14:43:07', '2021-12-27 14:43:07'),
(506, 'c2', 'C.2.5', 9, 61, '3', 'Pengguna Lulusan', 98, 'uM8501FlRIjJf9Hd', '2021-12-27 14:43:07', '2021-12-27 14:43:07'),
(507, 'c2', 'C.2.5', 9, 62, '4', 'Pengguna Lulusan', 98, 'uM8501FlRIjJf9Hd', '2021-12-27 14:43:07', '2021-12-27 14:43:07'),
(508, 'c9', 'C.9.1', 29, 170, '5', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(509, 'c9', 'C.9.1', 29, 171, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(510, 'c9', 'C.9.1', 29, 172, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(511, 'c9', 'C.9.1', 29, 173, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(512, 'c9', 'C.9.1', 29, 174, '5', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(513, 'c9', 'C.9.1', 29, 175, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(514, 'c9', 'C.9.1', 29, 176, '5', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(515, 'c9', 'C.9.1', 29, 177, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(516, 'c9', 'C.9.1', 29, 178, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(517, 'c9', 'C.9.1', 29, 179, '3', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(518, 'c9', 'C.9.1', 29, 180, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(519, 'c9', 'C.9.1', 29, 181, '5', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(520, 'c9', 'C.9.1', 29, 182, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(521, 'c9', 'C.9.1', 29, 183, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(522, 'c9', 'C.9.1', 29, 184, '5', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(523, 'c9', 'C.9.1', 29, 185, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(524, 'c9', 'C.9.1', 29, 186, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(525, 'c9', 'C.9.1', 29, 187, '5', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(526, 'c9', 'C.9.1', 29, 188, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(527, 'c9', 'C.9.1', 29, 189, '4', 'Pengguna Lulusan', 98, 'GbIjiNWJCSzrpPdf', '2021-12-27 14:43:55', '2021-12-27 14:43:55'),
(528, 'c2', 'C.2.4', 8, 43, '5', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(529, 'c2', 'C.2.4', 8, 44, '5', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(530, 'c2', 'C.2.4', 8, 45, '5', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(531, 'c2', 'C.2.4', 8, 46, '5', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(532, 'c2', 'C.2.4', 8, 47, '5', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(533, 'c2', 'C.2.4', 8, 48, '5', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(534, 'c2', 'C.2.4', 8, 49, '5', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(535, 'c2', 'C.2.4', 8, 50, '5', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(536, 'c2', 'C.2.4', 8, 51, '4', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(537, 'c2', 'C.2.4', 8, 52, '4', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(538, 'c2', 'C.2.4', 8, 53, '4', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(539, 'c2', 'C.2.4', 8, 54, '4', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(540, 'c2', 'C.2.4', 8, 55, '4', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(541, 'c2', 'C.2.4', 8, 56, '4', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(542, 'c2', 'C.2.4', 8, 57, '4', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(543, 'c2', 'C.2.4', 8, 58, '4', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(544, 'c2', 'C.2.4', 8, 59, '4', 'Alumni/Lulusan', 104, 'pUx91M0NbqaKCf85', '2022-01-04 08:03:13', '2022-01-04 08:03:13'),
(545, 'c2', 'C.2.4', 8, 43, '5', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(546, 'c2', 'C.2.4', 8, 44, '5', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(547, 'c2', 'C.2.4', 8, 45, '5', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(548, 'c2', 'C.2.4', 8, 46, '5', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(549, 'c2', 'C.2.4', 8, 47, '5', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(550, 'c2', 'C.2.4', 8, 48, '5', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(551, 'c2', 'C.2.4', 8, 49, '5', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(552, 'c2', 'C.2.4', 8, 50, '4', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(553, 'c2', 'C.2.4', 8, 51, '4', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(554, 'c2', 'C.2.4', 8, 52, '4', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(555, 'c2', 'C.2.4', 8, 53, '4', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(556, 'c2', 'C.2.4', 8, 54, '4', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(557, 'c2', 'C.2.4', 8, 55, '4', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(558, 'c2', 'C.2.4', 8, 56, '4', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(559, 'c2', 'C.2.4', 8, 57, '4', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(560, 'c2', 'C.2.4', 8, 58, '4', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(561, 'c2', 'C.2.4', 8, 59, '4', 'Alumni/Lulusan', 104, 'M0r67LIk3dcuiz5l', '2022-01-04 08:04:36', '2022-01-04 08:04:36'),
(562, 'c2', 'C.2.4', 8, 43, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(563, 'c2', 'C.2.4', 8, 44, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(564, 'c2', 'C.2.4', 8, 45, '3', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(565, 'c2', 'C.2.4', 8, 46, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(566, 'c2', 'C.2.4', 8, 47, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(567, 'c2', 'C.2.4', 8, 48, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(568, 'c2', 'C.2.4', 8, 49, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(569, 'c2', 'C.2.4', 8, 50, '3', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(570, 'c2', 'C.2.4', 8, 51, '3', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(571, 'c2', 'C.2.4', 8, 52, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(572, 'c2', 'C.2.4', 8, 53, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(573, 'c2', 'C.2.4', 8, 54, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(574, 'c2', 'C.2.4', 8, 55, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(575, 'c2', 'C.2.4', 8, 56, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(576, 'c2', 'C.2.4', 8, 57, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(577, 'c2', 'C.2.4', 8, 58, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(578, 'c2', 'C.2.4', 8, 59, '4', 'Alumni/Lulusan', 105, '1dg3cRQLEbO2jueC', '2022-01-04 08:31:26', '2022-01-04 08:31:26'),
(579, 'c2', 'C.2.2', 31, 202, '4', 'Tenaga Kependidikan', 100, 'gfT8t3HDvLormhpZ', '2022-01-04 09:23:53', '2022-01-04 09:23:53'),
(580, 'c2', 'C.2.2', 31, 203, '4', 'Tenaga Kependidikan', 100, 'gfT8t3HDvLormhpZ', '2022-01-04 09:23:53', '2022-01-04 09:23:53'),
(581, 'c2', 'C.2.2', 31, 204, '3', 'Tenaga Kependidikan', 100, 'gfT8t3HDvLormhpZ', '2022-01-04 09:23:53', '2022-01-04 09:23:53'),
(582, 'c2', 'C.2.2', 31, 205, '4', 'Tenaga Kependidikan', 100, 'gfT8t3HDvLormhpZ', '2022-01-04 09:23:53', '2022-01-04 09:23:53');
INSERT INTO `response` (`id`, `slug`, `kodeInstrumen`, `instrumenID`, `questionID`, `jawaban`, `responden`, `userID`, `uniqueID`, `created_at`, `updated_at`) VALUES
(583, 'c2', 'C.2.2', 31, 206, '3', 'Tenaga Kependidikan', 100, 'gfT8t3HDvLormhpZ', '2022-01-04 09:23:53', '2022-01-04 09:23:53'),
(584, 'c2', 'C.2.2', 31, 207, '3', 'Tenaga Kependidikan', 100, 'gfT8t3HDvLormhpZ', '2022-01-04 09:23:53', '2022-01-04 09:23:53'),
(585, 'c2', 'C.2.2', 31, 208, '3', 'Tenaga Kependidikan', 100, 'gfT8t3HDvLormhpZ', '2022-01-04 09:23:53', '2022-01-04 09:23:53'),
(586, 'c2', 'C.2.2', 31, 209, '4', 'Tenaga Kependidikan', 100, 'gfT8t3HDvLormhpZ', '2022-01-04 09:23:53', '2022-01-04 09:23:53'),
(587, 'c2', 'C.2.2', 31, 210, '5', 'Tenaga Kependidikan', 100, 'gfT8t3HDvLormhpZ', '2022-01-04 09:23:53', '2022-01-04 09:23:53'),
(588, 'c4', 'C.4.2', 16, 89, '4', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:38', '2022-01-04 09:25:38'),
(589, 'c4', 'C.4.2', 16, 90, '3', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:38', '2022-01-04 09:25:38'),
(590, 'c4', 'C.4.2', 16, 91, '3', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:39', '2022-01-04 09:25:39'),
(591, 'c4', 'C.4.2', 16, 92, '3', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:39', '2022-01-04 09:25:39'),
(592, 'c4', 'C.4.2', 16, 93, '3', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:39', '2022-01-04 09:25:39'),
(593, 'c4', 'C.4.2', 16, 94, '3', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:39', '2022-01-04 09:25:39'),
(594, 'c4', 'C.4.2', 16, 95, '5', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:39', '2022-01-04 09:25:39'),
(595, 'c4', 'C.4.2', 16, 96, '5', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:39', '2022-01-04 09:25:39'),
(596, 'c4', 'C.4.2', 16, 97, '4', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:39', '2022-01-04 09:25:39'),
(597, 'c4', 'C.4.2', 16, 98, '5', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:39', '2022-01-04 09:25:39'),
(598, 'c4', 'C.4.2', 16, 99, '3', 'Tenaga Kependidikan', 100, 'RI3kSxe6K7fz5mAg', '2022-01-04 09:25:39', '2022-01-04 09:25:39'),
(599, 'c2', 'C.2.4', 8, 43, '4', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(600, 'c2', 'C.2.4', 8, 44, '4', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(601, 'c2', 'C.2.4', 8, 45, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(602, 'c2', 'C.2.4', 8, 46, '4', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(603, 'c2', 'C.2.4', 8, 47, '4', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(604, 'c2', 'C.2.4', 8, 48, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(605, 'c2', 'C.2.4', 8, 49, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(606, 'c2', 'C.2.4', 8, 50, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(607, 'c2', 'C.2.4', 8, 51, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(608, 'c2', 'C.2.4', 8, 52, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(609, 'c2', 'C.2.4', 8, 53, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(610, 'c2', 'C.2.4', 8, 54, '4', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(611, 'c2', 'C.2.4', 8, 55, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(612, 'c2', 'C.2.4', 8, 56, '4', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(613, 'c2', 'C.2.4', 8, 57, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(614, 'c2', 'C.2.4', 8, 58, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(615, 'c2', 'C.2.4', 8, 59, '3', 'Alumni/Lulusan', 107, 'kufvNORT1GQlnrBC', '2022-01-04 22:13:21', '2022-01-04 22:13:21'),
(616, 'c2', 'C.2.3', 7, 21, '5', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(617, 'c2', 'C.2.3', 7, 22, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(618, 'c2', 'C.2.3', 7, 23, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(619, 'c2', 'C.2.3', 7, 24, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(620, 'c2', 'C.2.3', 7, 25, '5', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(621, 'c2', 'C.2.3', 7, 26, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(622, 'c2', 'C.2.3', 7, 27, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(623, 'c2', 'C.2.3', 7, 28, '3', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(624, 'c2', 'C.2.3', 7, 29, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(625, 'c2', 'C.2.3', 7, 30, '3', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(626, 'c2', 'C.2.3', 7, 31, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(627, 'c2', 'C.2.3', 7, 32, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(628, 'c2', 'C.2.3', 7, 33, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(629, 'c2', 'C.2.3', 7, 34, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(630, 'c2', 'C.2.3', 7, 35, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(631, 'c2', 'C.2.3', 7, 36, '3', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(632, 'c2', 'C.2.3', 7, 37, '3', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(633, 'c2', 'C.2.3', 7, 38, '3', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(634, 'c2', 'C.2.3', 7, 39, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(635, 'c2', 'C.2.3', 7, 40, '3', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(636, 'c2', 'C.2.3', 7, 41, '5', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45'),
(637, 'c2', 'C.2.3', 7, 42, '4', 'Mahasiswa', 126, 'HgB9tTyi1Qrcjz0O', '2022-02-05 11:15:45', '2022-02-05 11:15:45');

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
  `InstitutionatauWorkplace` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `InstitusiatauTempatKerja` varchar(255) DEFAULT NULL,
  `AsalProgramStudiYangDinilai` varchar(255) DEFAULT NULL,
  `LembagaatauUnitatauInstitusiatauIndustri` varchar(255) DEFAULT NULL,
  `ProgramStudi-jikaAlumniUnj-` varchar(255) DEFAULT NULL,
  `NIPatauNIDN` varchar(255) DEFAULT NULL,
  `NomorRegistrasiMahasiswa-NRM-` varchar(255) DEFAULT NULL,
  `Angkatan` varchar(255) DEFAULT NULL,
  `TahunMasuk` varchar(255) DEFAULT NULL,
  `TahunLulus` varchar(255) DEFAULT NULL,
  `NamaPerusahaan` varchar(255) DEFAULT NULL,
  `AlamatPerusahaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `role`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`, `ProgramStudi`, `AsalProgramStudi`, `UnitatauBiroatauLembaga`, `InstitutionatauWorkplace`, `Address`, `InstitusiatauTempatKerja`, `AsalProgramStudiYangDinilai`, `LembagaatauUnitatauInstitusiatauIndustri`, `ProgramStudi-jikaAlumniUnj-`, `NIPatauNIDN`, `NomorRegistrasiMahasiswa-NRM-`, `Angkatan`, `TahunMasuk`, `TahunLulus`, `NamaPerusahaan`, `AlamatPerusahaan`) VALUES
(48, 'kontributor.instrumenkepuasan@gmail.com', 'kontributor', 'Kontributor', 'Kontributor: TPjM', 'default.svg', '$2y$10$7esgKYUfI5X.zZzDebBtV.kojwN3ijBI/l2VnxAUWO.fpB6e49/ye', NULL, '2021-12-27 02:05:39', NULL, NULL, NULL, NULL, 1, 0, '2021-10-11 22:23:04', '2021-12-27 02:05:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'gpjm.instrumenkepuasan@gmail.com', 'admin', 'Admin', 'Eka Azrai', 'default.svg', '$2y$10$DG61t8YRixc9Y1q8HbztvusT2LfWYStwhCZrMMAWKh733mH.UQms.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-11-16 23:37:20', '2021-12-11 00:12:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'dosen.instrumenkepuasan@gmail.com', 'dosenIlkom', 'Dosen', 'Ari Hendarno, S.Pd, M.Kom.', 'default.svg', '$2y$10$QoAJW3RvWT8kQoH52f3A7OVMeekd33VQRmld4eTqtA53T5HpkvjZq', NULL, NULL, NULL, NULL, NULL, 'createdByAdmin', 1, 0, '2021-12-12 16:06:54', '2021-12-14 12:35:21', NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1920415 3972011 2 00', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'nurzaakiahulfah@gmail.com', 'ulfahnrz', 'Pengguna Lulusan', 'Ulfah nurzaakiah', 'default.svg', '$2y$10$W7JbkYqyET9lUAxo0srd.O/fGqXpVU7.hDqSWwlouAOspqtBovAE6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-13 16:42:12', '2021-12-14 00:44:17', NULL, NULL, NULL, NULL, NULL, NULL, 'Zalora', 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'dfatriandira@gmail.com', 'divinadira', 'Mitra', 'Divina Fatriandira', 'default.svg', '$2y$10$DW/bCvgYAWvWlvtn0iEfA.hSMlMelA15Qx8Cp0.SpePFCXpcUuG2W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-13 16:53:33', '2021-12-14 12:07:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mitra10', 'Pendidikan Kimia', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'alumni.instrumenkepuasan@gmail.com', 'farahayu', 'Alumni/Lulusan', 'Farah Ayu', 'default.svg', '$2y$10$sTUlfF4Hc.hb8Q6foGE2au9qxGNM4Ab4MeYRv//CZ3tzbyfrdrCeK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-13 17:14:56', '2021-12-14 11:51:00', NULL, NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'vivirofiah25@gmail.com', 'vivirofiah', 'Mahasiswa', 'Vivi Rofiah', 'default.svg', '$2y$10$GElTLqc6vJyEUA38jWDbzOmZ27wS4bY8DI44rocuxWoFJzvbdyasK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-14 13:06:22', '2021-12-14 13:10:17', NULL, 'Ilmu Komputer', 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1313617001', NULL, NULL, NULL, NULL, NULL),
(69, 'mauraqipi@gmail.com', 'mauraqipi', 'Mahasiswa', 'Mauraqipi', 'default.svg', '$2y$10$nbauxoPgT.SlYOuc14XC3O5m.oM9KRlkwnHUYNi8AmDAAPyklLW9q', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-14 15:55:49', '2021-12-14 15:57:02', NULL, 'Matematika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '131136171671', NULL, NULL, NULL, NULL, NULL),
(70, 'farahaanandita@gmail.com', 'FarahAA', 'Alumni/Lulusan', 'Farah Ayu Anandita', 'default.svg', '$2y$10$KLvjUMjoZ.I6kYqG..Qbn.RylVJfNW4hncUETVuk4ZwrVpqL3FTfC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-17 13:24:28', '2021-12-17 22:37:54', NULL, NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'octarinasalsabila@gmail.com', 'octarinasalsa17', 'Mahasiswa', 'Octarina Salsabila', 'default.svg', '$2y$10$rI9CcqBvycv55rgb4cl9POHiiV59EQjAuq.HSOwPx1ae3LKyUdLMO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-17 14:35:05', '2021-12-17 15:04:47', NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1313617034', '2017', NULL, NULL, NULL, NULL),
(78, 'riaarafiah@unj.ac.id', 'riaarafiah', 'Kontributor', NULL, 'default.svg', '$2y$10$K.UYd6mZeH4G32sqrhpI0uF9BS2oOLNNzE2dW/1trZMg72/TixI1a', NULL, NULL, NULL, '265604ce9a0d189ecc29c96bfb130ede', NULL, 'createdByAdmin', 1, 0, '2021-12-22 13:22:19', '2021-12-27 14:09:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'nunuk.soedjoed@gmail.com', 'nunuk', 'Admin', NULL, 'default.svg', '$2y$10$AOIGejn0xWZoV3J0HqQXY.mAN1o6fvOFxU75RLVaazIf0l./Ya/R6', NULL, NULL, NULL, '854c1d24e8ae3c6597bca37b640f1400', NULL, 'createdByAdmin', 1, 0, '2021-12-22 14:02:47', '2021-12-22 14:05:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'esmarbudi@unj.ac.id', 'esmarbudi', 'Kontributor', NULL, 'default.svg', '$2y$10$Oo0wvbN13/BeKJt7bwPdgezpW846yKH.tY7MZSNKbFe.FYjCEtIt2', '59fe6bbf1b72d2ef7706af3b3058311f', NULL, '2021-12-24 17:25:57', 'e8891ccd20a07a61a8f4970608b30d2d', NULL, 'createdByAdmin', 1, 0, '2021-12-22 15:13:08', '2021-12-24 16:25:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'mauraqoonitah15@gmail.com', 'mauraqoonitah15', 'Mahasiswa', 'Maura Qoonitah', 'default.svg', '$2y$10$plCk6zGsu5h/z0je1zZsfOJWg9p8nCx5GJu49OgU1dKCEigVUyegO', NULL, NULL, NULL, '92c7924dff4fd4d98339a08aa8b64fff', NULL, NULL, 1, 0, '2021-12-22 20:01:29', '2021-12-22 20:01:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'adinigufroni06@gmail.com', 'adinigfrn', 'Mahasiswa', 'Adini Gufroni', 'default.svg', '$2y$10$9bXBxLf6q/KfWLlf5j7Vf.skACC1cau7JzWK0IKfvydGmSzpWrWZ2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-22 20:42:34', '2021-12-22 20:52:22', NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1313617035', '2017', NULL, NULL, NULL, NULL),
(84, 'trisna0401@gmail.com', 'trisnapspt', 'Alumni/Lulusan', 'Trisna Hastuti Puspita Ningrum', 'default.svg', '$2y$10$NwC8/paR6i.Eta4BUwSn.u69BX7w63TgAzqzQILBh/.SObkrXGAhC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-23 11:00:59', '2021-12-23 13:23:51', NULL, NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020', 'PT Talisman Insurance Brokers', 'Treasury Tower, 29th Floor District 8, SCBD Lot 28, Jl. Jend. Sudirman Kav. 52-53 Jakarta, 12190', 'Treasury Tower, 29th Floor District 8, SCBD Lot 28, Jl. Jend. Sudirman Kav. 52-53 Jakarta, 12190'),
(85, 'atylestari98@gmail.com', 'atylestari', 'Mahasiswa', 'Aty Lestari', 'default.svg', '$2y$10$o3LWxXCp1Z4ysiJniX2c0eyVxo3j7w0BOvLCiJSKUCfgnL3xi.PuS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-23 17:32:37', '2021-12-23 17:36:20', NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1313617013', '2017', NULL, NULL, NULL, NULL),
(86, 'nilamoena4@gmail.com', 'nilamoena', 'Mahasiswa', 'NILATIL MOENA', 'default.svg', '$2y$10$Y.V2eJ76AnkLRGjvjX.P5exsZTQ1k/8asduq6tWHnPm7ek6oDFqmG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-23 19:19:52', '2021-12-23 19:24:24', NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1313618002', '2018', NULL, NULL, NULL, NULL),
(88, 'prianugrahw@gmail.com', 'widi', 'Mahasiswa', 'Prianugrah', 'default.svg', '$2y$10$tObbDmHWIiR1qSDvNhFUDerTpwI0OgmDfpDxBQ4MW9lk8TespwqoG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-23 19:55:28', '2021-12-23 19:59:21', NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1313617024', '2017', NULL, NULL, NULL, NULL),
(89, 'hafizhun.alim93@gmail.com', 'cah_kangkung', 'Mahasiswa', '<script>alert(\'Hello! I am an alert box!!\');</script>', 'default.svg', '$2y$10$p4K5TTuDhYQ8ZL3odew4AeD41iI0ThFoIvBEgIibnVlR.N43z6bia', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-25 11:26:52', '2021-12-25 11:36:02', NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1313617032', '2017', NULL, NULL, NULL, NULL),
(90, 'nafiigoks123@gmail.com', 'nafharahap', 'Mahasiswa', 'Togu Annaaf Kumara', 'default.svg', '$2y$10$06ATHE.cyPnD3XAt/8BtFuZ4IASh.wzedC0ds/wQse.u/PifFq5K.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-25 15:55:19', '2021-12-25 15:59:39', NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1313617039', '2017', NULL, NULL, NULL, NULL),
(96, 'rizzqqa@gmail.com', 'rizqa', 'Tenaga Kependidikan', 'Alfisyahrizqa', 'default.svg', '$2y$10$A7bwK3Uud4gDQnDqqUuO8ewG32ajpIwfJadwX6CSKo8pNXo2T/FtW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-27 13:41:52', '2021-12-27 13:57:33', NULL, NULL, NULL, 'Staff Admin Prodi Matematika & Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'retno.kk22@gmail.com', 'retno22', 'Alumni/Lulusan', 'Retno Wulandari', 'default.svg', '$2y$10$ux.ecYW3G.dUDz1lpJXVZ.XKLCPI5QAxaZ17aNFEEr4Z2Jzck9WBa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-27 14:23:50', '2021-12-27 14:32:22', NULL, NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021', 'SMK As-Syafi\'iyah Jakarta', 'Jl. Bukit Duri Selatan No. 29, Tebet, Jakarta Selatan', 'Jl. Bukit Duri Selatan No. 29, Tebet, Jakarta Selatan'),
(98, 'fadliwdt@yahoo.com', 'fadliwdt', 'Pengguna Lulusan', 'fadli w', 'default.svg', '$2y$10$fveGx7Y6EwUmghN77jgG8OL8.rLdzhRCzK7PP1q3KvmjdRMoHkOVa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-27 14:41:09', '2021-12-27 14:43:55', NULL, NULL, NULL, NULL, NULL, NULL, 'talisman brokers', 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'fadilahrama@gmail.com', 'ramajuga', 'Alumni/Lulusan', 'Fadilah Khairama', 'default.svg', '$2y$10$fL1/0M/XCOSA2pjKh7tCNuPWxCn4.1lBXgt/myJ64RfdteqnLUnma', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-28 22:05:05', '2021-12-28 22:06:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'ariyaseta@unj.ac.id', 'Ariya Seta', 'Tenaga Kependidikan', 'Ariya Seta', 'default.svg', '$2y$10$mkvyYCgcvAy5y7FV8Q6zrOOCAbpdEIhG/weVBWE33W/YTGPMTZi9e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-01-03 17:05:17', '2022-01-04 09:25:39', NULL, NULL, NULL, 'FMIPA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'cucunwahyuni27@gmail.com', 'Cucun27', 'Alumni/Lulusan', 'Cucun Wahyuni', 'default.svg', '$2y$10$OyPqel4xXm4X6molCpDv0.g/tGDy/ZDAKBNBlLmTJwZqxfnc9vWYO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-01-03 22:09:19', '2022-01-03 22:11:36', NULL, NULL, 'Statistika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017', '2021', '-', '-'),
(104, 'muhammadrahmansyah123@gmail.com', 'adel', 'Alumni/Lulusan', 'Muhammad Rahmansyah', 'default.svg', '$2y$10$rBNyjj9m3VBbwa9mVtQov.TlzQO.oswl4G/Yatbdud..l3cSIkWG6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-01-04 07:53:02', '2022-01-04 08:04:36', NULL, NULL, 'Pendidikan Matematika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PT. Jaya Abadi', 'Jl. Wijaya 2', 'Jl. Wijaya 2', 'Jl. Wijaya 2'),
(105, 'gnurkahfi@yahoo.co.id', 'gnurkahfi', 'Alumni/Lulusan', 'Ghefira Nur Kahfi', 'default.svg', '$2y$10$xq2jTn0AfjzT5O/Go2IyP.PhCbXCGI10d.P6T8zl6egkmhFrcwZIK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-01-04 07:58:24', '2022-01-04 08:31:26', NULL, NULL, 'Matematika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021', 'PT. Mega Bahtera Kencana', 'Jl. Raya Gading Batavia Blok LC 11/ No. 25', 'Jl. Raya Gading Batavia Blok LC 11/ No. 25'),
(106, 'niaherdin@gmail.com', 'niaherdin@gmail.com', 'Alumni/Lulusan', 'Nia Normaliana Herdin', 'default.svg', '$2y$10$RyVH0ezACJYK.P/PCowl8eZ2VyX98vVQvI/aqAznInukk8QWbogwa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-01-04 09:12:04', '2022-01-04 09:12:57', NULL, NULL, 'Pendidikan Matematika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017', '2021', 'PT Ruang Raya', 'Jl. Karadenan No. 38'),
(107, 'akbarfitriansyah924@gmail.com', 'viruaf', 'Alumni/Lulusan', 'Akbar Fitriansyah', 'default.svg', '$2y$10$0CDHi6ln2oiyVG.hZKOvzO0TCfusWp24.A/laU2PKxWBURTXt3pgm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-01-04 22:09:00', '2022-01-04 22:13:21', NULL, NULL, 'Matematika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021', 'Kurnia Ciptamoda Gemilang', 'Kebayoran lama', 'Kebayoran lama'),
(108, 'LinaNafisah_1314617025@mhs.unj.ac.id', 'Linanafisah', 'Mahasiswa', 'Lina nafisah', 'default.svg', '$2y$10$Bd61N.2/noSTkXsbDJYHCO9SaMSgq1Ony.Q8LPtR7VkAQ3qc0wICW', NULL, NULL, NULL, 'ee6d610836aaf90bf59710693b592809', NULL, NULL, 1, 0, '2022-01-04 22:13:34', '2022-01-04 22:13:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'linanafisah24@gmail.com', 'Linanafisah24', 'Mahasiswa', 'Lina Nafisah', 'default.svg', '$2y$10$3tYXCKRNHvIebMYNj.2Kx.Y18rTX9Qlce6YU.cIxvc5x25ZbChMCW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-01-04 22:19:50', '2022-01-04 22:20:50', NULL, 'Statistika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1314617025', '2017', NULL, NULL, NULL, NULL),
(126, 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 'mauraqoonitah', 'Mahasiswa', 'Maura Qoonitah Putri', 'default.svg', '$2y$10$HwVL6ibfP0wrSXwYZEeXb.eL/QyslZGm9lsIaDELCfQNvfUZsZHHO', 'afc9c06b6a10c8c67605dc4b453ef4c4', NULL, '2022-02-05 21:47:10', NULL, NULL, NULL, 1, 0, '2022-02-05 11:13:13', '2022-02-05 20:47:10', NULL, 'Ilmu Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1313617009', '2017', NULL, NULL, NULL, NULL);

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
(11, 'nurzaakiahulfah@gmail.com', 'Mitra', NULL, '', '', NULL, NULL, '', '2021-12-13 16:42:12', '2021-12-13 16:42:12'),
(13, 'dfatriandira@gmail.com', 'Pengguna Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-13 16:53:33', '2021-12-13 16:53:33'),
(14, 'alumni.instrumenkepuasan@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-13 17:14:56', '2021-12-13 17:14:56'),
(15, 'qpmaura@gmail.com', 'Dosen', NULL, '', '', NULL, NULL, '', '2021-12-14 12:17:28', '2021-12-14 12:17:28'),
(16, 'vivirofiah_1313617001@mhs.unj.ac.id', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-14 13:01:08', '2021-12-14 13:01:08'),
(17, 'vivirofiah25@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-14 13:06:23', '2021-12-14 13:06:23'),
(18, 'mauraqoonitah15@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2021-12-14 15:43:53', '2021-12-14 15:43:53'),
(19, 'mauraqipi@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-14 15:55:49', '2021-12-14 15:55:49'),
(20, 'farahaanandita@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-17 13:24:28', '2021-12-17 13:24:28'),
(21, 'qpmaura@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-17 14:32:47', '2021-12-17 14:32:47'),
(22, 'octarinasalsabila@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-17 14:35:05', '2021-12-17 14:35:05'),
(23, 'moraqipi@gmail.com', 'Dosen', NULL, '', '', NULL, NULL, '', '2021-12-21 19:40:54', '2021-12-21 19:40:54'),
(24, 'mauraqoonitah15@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2021-12-21 19:43:00', '2021-12-21 19:43:00'),
(25, 'mauraqoonitah15@gmail.com', 'Peneliti', NULL, '', '', NULL, NULL, '', '2021-12-21 19:46:59', '2021-12-21 19:46:59'),
(26, 'mauraqoonitah15@gmail.com', 'Dosen', NULL, '', '', NULL, NULL, '', '2021-12-21 19:48:48', '2021-12-21 19:48:48'),
(27, 'riaarafiah@unj.ac.id', 'Kontributor', NULL, '', '', NULL, NULL, '', '2021-12-22 13:22:19', '2021-12-22 13:22:19'),
(28, 'nunuk.soedjoed@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2021-12-22 14:02:47', '2021-12-22 14:02:47'),
(29, 'esmarbudi@unj.ac.id', 'Kontributor', NULL, '', '', NULL, NULL, '', '2021-12-22 15:13:08', '2021-12-22 15:13:08'),
(30, 'adinigufroni06@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-22 19:00:53', '2021-12-22 19:00:53'),
(31, 'mauraqoonitah15@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-22 20:01:29', '2021-12-22 20:01:29'),
(32, 'adinigufroni06@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-22 20:42:34', '2021-12-22 20:42:34'),
(33, 'trisna0401@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-23 11:00:59', '2021-12-23 11:00:59'),
(34, 'atylestari98@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-23 17:32:37', '2021-12-23 17:32:37'),
(35, 'nilamoena4@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-23 19:19:52', '2021-12-23 19:19:52'),
(36, 'prianugrahw@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-23 19:55:28', '2021-12-23 19:55:28'),
(37, 'hafizhun.alim93@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-25 11:26:52', '2021-12-25 11:26:52'),
(38, 'nafiigoks123@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-25 15:55:19', '2021-12-25 15:55:19'),
(39, 'agamnuf@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2021-12-26 18:45:47', '2021-12-26 18:45:47'),
(40, 'rizzqqa@gmail.com', 'Tenaga Kependidikan', NULL, '', '', NULL, NULL, '', '2021-12-27 13:41:52', '2021-12-27 13:41:52'),
(41, 'retno.kk22@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-27 14:23:50', '2021-12-27 14:23:50'),
(42, 'fadliwdt@yahoo.com', 'Pengguna Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-27 14:41:09', '2021-12-27 14:41:09'),
(43, 'fadilahrama@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2021-12-28 22:05:05', '2021-12-28 22:05:05'),
(44, 'ariyaseta@unj.ac.id', 'Tenaga Kependidikan', NULL, '', '', NULL, NULL, '', '2022-01-03 17:05:17', '2022-01-03 17:05:17'),
(45, 'cucunwahyuni27@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2022-01-03 22:09:19', '2022-01-03 22:09:19'),
(46, 'muhammadrahmansyah123@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2022-01-04 07:53:02', '2022-01-04 07:53:02'),
(47, 'gnurkahfi@yahoo.co.id', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2022-01-04 07:58:24', '2022-01-04 07:58:24'),
(48, 'niaherdin@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2022-01-04 09:12:04', '2022-01-04 09:12:04'),
(49, 'akbarfitriansyah924@gmail.com', 'Alumni/Lulusan', NULL, '', '', NULL, NULL, '', '2022-01-04 22:09:00', '2022-01-04 22:09:00'),
(50, 'LinaNafisah_1314617025@mhs.unj.ac.id', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2022-01-04 22:13:34', '2022-01-04 22:13:34'),
(51, 'linanafisah24@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2022-01-04 22:19:50', '2022-01-04 22:19:50'),
(52, 'qpmauraaa@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2022-01-05 13:14:26', '2022-01-05 13:14:26'),
(53, 'mauraqoonitah@gmail.com', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2022-02-05 09:01:38', '2022-02-05 09:01:38'),
(54, 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2022-02-05 09:04:17', '2022-02-05 09:04:17'),
(55, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 09:07:17', '2022-02-05 09:07:17'),
(56, 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2022-02-05 09:14:50', '2022-02-05 09:14:50'),
(57, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 09:17:28', '2022-02-05 09:17:28'),
(58, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 09:18:53', '2022-02-05 09:18:53'),
(59, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 09:20:22', '2022-02-05 09:20:22'),
(60, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 09:23:43', '2022-02-05 09:23:43'),
(61, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 09:55:29', '2022-02-05 09:55:29'),
(62, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 10:04:28', '2022-02-05 10:04:28'),
(63, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 10:20:52', '2022-02-05 10:20:52'),
(64, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 10:30:38', '2022-02-05 10:30:38'),
(65, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 10:41:42', '2022-02-05 10:41:42'),
(66, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 10:54:24', '2022-02-05 10:54:24'),
(67, 'mauraqoonitahputri_1313617009@mhs.unj.ac.id', 'Mahasiswa', NULL, '', '', NULL, NULL, '', '2022-02-05 11:13:13', '2022-02-05 11:13:13'),
(68, 'qpmaura@gmail.com', 'Dosen', NULL, '', '', NULL, NULL, '', '2022-02-05 19:12:54', '2022-02-05 19:12:54'),
(69, 'qpmaura@gmail.com', 'Kontributor', NULL, '', '', NULL, NULL, '', '2022-02-05 19:24:16', '2022-02-05 19:24:16'),
(70, 'qpmaura@gmail.com', 'Kontributor', NULL, '', '', NULL, NULL, '', '2022-02-05 21:11:50', '2022-02-05 21:11:50'),
(71, 'qpmaura@gmail.com', 'Kontributor', NULL, '', '', NULL, NULL, '', '2022-02-05 21:16:03', '2022-02-05 21:16:03'),
(72, 'qpmaura@gmail.com', 'Admin', NULL, '', '', NULL, NULL, '', '2022-02-05 21:22:46', '2022-02-05 21:22:46'),
(73, 'qpmaura@gmail.com', 'Kontributor', NULL, '', '', NULL, NULL, '', '2022-02-05 21:25:51', '2022-02-05 21:25:51'),
(74, 'qpmaura@gmail.com', 'Kontributor', NULL, '', '', NULL, NULL, '', '2022-02-05 21:29:46', '2022-02-05 21:29:46'),
(75, 'qpmaura@gmail.com', 'Kontributor', NULL, '', '', NULL, NULL, '', '2022-02-05 21:31:00', '2022-02-05 21:31:00'),
(76, 'qpmaura@gmail.com', 'Kontributor', NULL, '', '', NULL, NULL, '', '2022-02-05 21:31:41', '2022-02-05 21:31:41'),
(77, 'qpmaura@gmail.com', 'Kontributor', NULL, '', '', NULL, NULL, '', '2022-02-05 21:32:53', '2022-02-05 21:32:53');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_instrumen`
--
ALTER TABLE `category_instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `instrumen`
--
ALTER TABLE `instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `jenis_responden`
--
ALTER TABLE `jenis_responden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pertanyaan_data_diri`
--
ALTER TABLE `pertanyaan_data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `petunjuk_instrumen`
--
ALTER TABLE `petunjuk_instrumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pilihan_jawaban_data_diri`
--
ALTER TABLE `pilihan_jawaban_data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=638;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `user_check`
--
ALTER TABLE `user_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

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
