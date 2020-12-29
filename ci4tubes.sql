-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 10:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4tubes`
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
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

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
(1, 3),
(2, 2);

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
(1, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6);

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
(1, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-13 02:39:02', 1),
(2, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-13 04:04:34', 1),
(3, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-13 04:26:48', 1),
(4, '::1', 'Drajat', NULL, '2020-12-13 04:27:20', 0),
(5, '::1', 'drajatcahya4444@gmail.com', 2, '2020-12-13 04:27:42', 1),
(6, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-13 04:41:42', 1),
(7, '::1', 'drajatcahya4444@gmail.com', 2, '2020-12-13 04:44:47', 1),
(8, '::1', 'cahya', NULL, '2020-12-13 04:56:18', 0),
(9, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-13 04:56:41', 1),
(10, '::1', 'drajatcahya4444@gmail.com', 2, '2020-12-13 06:13:15', 1),
(11, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-16 03:58:30', 1),
(12, '::1', 'aswin123@gmail.com', 3, '2020-12-16 04:15:25', 1),
(13, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-17 03:49:30', 1),
(14, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-18 20:38:23', 1),
(15, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-18 22:09:21', 1),
(16, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-20 01:56:06', 1),
(17, '::1', 'drajatcahya4444@gmail.com', 2, '2020-12-20 03:52:16', 1),
(18, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-20 04:21:53', 1),
(19, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-21 21:36:11', 1),
(20, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-21 21:40:29', 1),
(21, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-21 21:41:43', 1),
(22, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-22 00:02:27', 1),
(23, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-22 00:36:37', 1),
(24, '::1', 'drajatcahya4444@gmail.com', 2, '2020-12-22 00:43:38', 1),
(25, '::1', 'viona', NULL, '2020-12-22 01:34:35', 0),
(26, '::1', 'viona', NULL, '2020-12-22 01:35:25', 0),
(27, '::1', 'viona', NULL, '2020-12-22 01:35:51', 0),
(28, '::1', 'viona', NULL, '2020-12-22 01:36:02', 0),
(29, '::1', 'vionaa', NULL, '2020-12-22 01:36:38', 0),
(30, '::1', 'alviona@gmail.com', 4, '2020-12-22 01:36:56', 1),
(31, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-24 16:37:33', 1),
(32, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-26 00:14:52', 1),
(33, '::1', 'drajatcahya4444@gmail.com', 2, '2020-12-26 09:20:23', 1),
(34, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-26 09:39:59', 1),
(35, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-26 10:22:06', 1),
(36, '::1', 'drajatcahya4444@gmail.com', 2, '2020-12-27 06:06:58', 1),
(37, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-27 07:36:24', 1),
(38, '::1', 'drajatcahya4444@gmail.com', 2, '2020-12-27 20:17:01', 1),
(39, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-28 00:38:47', 1),
(40, '::1', 'drajatcahya4444@gmail.com', 2, '2020-12-28 22:20:01', 1),
(41, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-28 22:25:17', 1),
(42, '::1', 'cahya', NULL, '2020-12-29 00:58:49', 0),
(43, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-29 00:59:07', 1),
(44, '::1', 'ratore', NULL, '2020-12-29 01:07:19', 0),
(45, '::1', 'ratore', NULL, '2020-12-29 01:07:46', 0),
(46, '::1', 'cahyass', NULL, '2020-12-29 01:08:39', 0),
(47, '::1', 'aayang118@gmail.com', 6, '2020-12-29 01:09:00', 1),
(48, '::1', 'cahyadiningrat15@gmail.com', 1, '2020-12-29 02:46:21', 1),
(49, '::1', 'aayang118@gmail.com', 6, '2020-12-29 03:04:22', 1);

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
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User\'s Profile'),
(3, 'manage-books', 'Manage All Book\'s');

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
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `jmlhal` varchar(3) NOT NULL,
  `tahun` year(4) NOT NULL,
  `filebuku` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `judul`, `slug`, `pengarang`, `penerbit`, `jmlhal`, `tahun`, `filebuku`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Pandas for Everyone Python Dat', 'pandas-for-everyone-python-dat', 'Daniel Y. Chen', 'Rough Cuts', '161', 2016, '1609138069_2e303111bc5345204e07.pdf', '1609138069_1657bb7e1a6eabf00949.png', '2020-12-19 00:00:00', '2020-12-28 00:47:50'),
(7, 'Building REST APIs with Flask', 'building-rest-apis-with-flask', 'Kunal Renan', 'Apress', '209', 2019, '1609231796_d3fb5ebcc0f8aeba97dd.pdf', '1609000295_59a72b5cb3f1acd1e433.png', '2020-12-26 00:30:55', '2020-12-29 02:49:56'),
(8, 'Beginning Spring 5', 'beginning-spring-5', 'Joseph B. Ottinger And Andrew Lombardi', 'Apress', '367', 2019, '1609231699_2a82563b95b4e6cd21ce.pdf', '1608971467_28603ce73406ef6a3260.png', '2020-12-26 02:31:07', '2020-12-29 02:48:19'),
(9, 'Apache JMeter', 'apache-jmeter', 'Emily H. Halili', 'Packt Publishing', '138', 2008, '1609231857_6e3e95abea8503738030.pdf', '1608999920_0b9a5f59769f53303fd9.png', '2020-12-26 10:25:20', '2020-12-29 02:50:57'),
(10, 'Belajar HTML & CSS', 'belajar-html-css', 'Rian Ariona', 'Ariona', '148', 2013, '1609082702_e84036a382d5565d73e7.pdf', '1609000761_c166688425bf77bc7067.png', '2020-12-26 10:39:21', '2020-12-27 09:25:05'),
(12, 'bash Pocket Reference', 'bash-pocket-reference', 'Arnold Robbins', 'O\'Railly', '132', 2010, '1609232128_e3c5cd9a6a0f38723201.pdf', '1609232128_9dad95e41d3c4490466a.png', '2020-12-27 09:19:21', '2020-12-29 02:55:28'),
(13, 'Programming Kotlin', 'programming-kotlin', 'Stephen Samuel and Stefan B', 'Packt Publishing', '418', 2017, '1609085360_fb12092e35f05a9dbf9f.pdf', '1609085360_f5d4b2c5c74f12e2e6f5.png', '2020-12-27 10:09:20', '2020-12-27 10:09:20'),
(14, 'Debian GUI', 'debian-gui', 'AA', 'Gramedia', '200', 2000, '1609225321_1878a292579b52352d7e.pdf', '1609225321_b59b2fd55ffdf713d05a.png', '2020-12-29 01:02:01', '2020-12-29 01:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1607842976, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `usr_image` varchar(255) NOT NULL DEFAULT 'default.svg',
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

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `usr_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'cahyadiningrat15@gmail.com', 'cahya', 'Cahya Diningrat', 'default.svg', '$2y$10$qQs.vJUZSk6ksAfrNk7SK.y9z2xBZlT.Eeb6/PP6wMlXBvYmZtH06', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-13 02:33:31', '2020-12-13 02:33:31', NULL),
(2, 'drajatcahya4444@gmail.com', 'Drajat', NULL, 'default.svg', '$2y$10$SVzmrpFM5qe3oz0ghTIhIe13m1u.euBECChr5HeBEkLy/5F1h37/2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-13 04:16:08', '2020-12-13 04:16:08', NULL),
(3, 'aswin123@gmail.com', 'aswin', NULL, 'default.svg', '$2y$10$x3RRvpr7LSpJtlsEuuWRlub1twCR756tMg0S9t/xEqb69m4ySOgC.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-16 04:14:13', '2020-12-16 04:14:13', NULL),
(4, 'alviona@gmail.com', 'vionaa', NULL, 'default.svg', '$2y$10$Mlxn1.XTk95QOnLSt1QM9eTqpNnT6Kmkoxv93SPDbn1ekqTnz4wIq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-22 01:33:08', '2020-12-22 01:33:08', NULL),
(5, 'diki@gmail.com', 'ratore', NULL, 'default.svg', '$2y$10$jbkF.P5nbf0HlslbWPmIlu.cF8FY/dol6B6BcZ1oxWw6lajVjVb0e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-29 01:06:56', '2020-12-29 01:06:56', NULL),
(6, 'aayang118@gmail.com', 'cahyasss', NULL, 'default.svg', '$2y$10$4vfNdC7LLjV6twYhYtcE0.sAuoLAvOskJn7SRXMeVqw9.L8iWDGiO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-29 01:08:24', '2020-12-29 01:08:24', NULL);

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
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
