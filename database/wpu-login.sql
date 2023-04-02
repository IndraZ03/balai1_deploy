-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: 104.154.91.69
-- Generation Time: Apr 01, 2023 at 07:20 AM
-- Server version: 5.7.39-google-log
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu-login`
--

-- --------------------------------------------------------

--
-- Table structure for table `balai_access_menu`
--

CREATE TABLE `balai_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(1) NOT NULL,
  `menu_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `balai_access_menu`
--

INSERT INTO `balai_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 7, 1),
(4, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bo_access_menu`
--

CREATE TABLE `bo_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bo_access_menu`
--

INSERT INTO `bo_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(9, 1, 1),
(10, 1, 2),
(11, 1, 3),
(12, 2, 1),
(13, 3, 1),
(14, 4, 2),
(15, 5, 2),
(16, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `bo_access_submenu`
--

CREATE TABLE `bo_access_submenu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bo_access_submenu`
--

INSERT INTO `bo_access_submenu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 3, 2),
(7, 4, 3),
(8, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_inskal`
--

CREATE TABLE `dokumen_inskal` (
  `id` int(11) NOT NULL,
  `dokumen` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengajuan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_kasubid` int(1) NOT NULL,
  `status_kabid` int(1) NOT NULL,
  `status_kabal` int(1) NOT NULL,
  `keterangan` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `download` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_acc` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokumen_inskal`
--

INSERT INTO `dokumen_inskal` (`id`, `dokumen`, `path`, `tanggal_pengajuan`, `status_kasubid`, `status_kabid`, `status_kabal`, `keterangan`, `download`, `tanggal_acc`) VALUES
(1, 'data1', 'PERUBAHAN_PERKA_NOMOR_12_TAHUN_2010_TENTANG_TATA_CARA_TETAP_PELAKSANAAN_PEMBUATAN_GAS_HIDROGEN_DAN_PEMELIHARAAN_TABUNG_GAS_(2)3.pdf', '2023-03-31 14:07:22', 1, 0, 0, '', '', '2023-03-31 21:07:22'),
(2, 'data2', 'PERUBAHAN_PERKA_NOMOR_12_TAHUN_2010_TENTANG_TATA_CARA_TETAP_PELAKSANAAN_PEMBUATAN_GAS_HIDROGEN_DAN_PEMELIHARAAN_TABUNG_GAS2.docx', '2023-03-31 21:18:47', 0, 0, 0, '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_kabid`
--

CREATE TABLE `dokumen_kabid` (
  `id` int(11) NOT NULL,
  `dokumen` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengajuan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_kasubid` int(1) NOT NULL,
  `status_kabid` int(1) NOT NULL,
  `status_kabal` int(1) NOT NULL,
  `keterangan` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `download` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_poolbar`
--

CREATE TABLE `dokumen_poolbar` (
  `id` int(11) NOT NULL,
  `dokumen` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengajuan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_kasubid` int(1) NOT NULL,
  `status_kabid` int(1) NOT NULL,
  `status_kabal` int(1) NOT NULL,
  `keterangan` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `download` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `obs_access_menu`
--

CREATE TABLE `obs_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(1) NOT NULL,
  `sub_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(19, 'hanifku', 'hanifkurawan@gmail.com', 'default.jpg', '$2y$10$npANLgwiUPFKDUG/0TJrMOvNk0mLWNwfds4/gIRjue/aeVpyAu4hS', 1, 1, 1680328486),
(22, 'wfehew', 'huef@gmail.com', 'default.jpg', '$2y$10$m5JsQPerzceKH189S99/1.D2BpKr4KSHkC9.DFwX8D/cDqgXioEmS', 1, 1, 1680329281),
(26, 'fwef', 'wgewg@gh.com', 'default.jpg', '$2y$10$MQKI5acTrYJxfQASPyqW3u93DSadxtXjedPHDlSQOv93x6wGPoTKi', 2, 1, 1680330028);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(11, 'hanifkurniiawan@gmail.com', 'Cyrl7wPg2efCN5aBc+9MgRTwqinAmkBtDL5JT1A0Ads=', 1680273599),
(12, 'dwiindraprasetyo77@gmail.com', 'QuQEGhoJPIGMbdnjppRGg5fhEhP4ibjyhdN6/o6aYtY=', 1680274030),
(15, 'ehjbfeg@gmail.com', 'OD6la0vh87731NWrQIvuqA88Z9h5OpRajF+/zXrN7IE=', 1680328575),
(16, 'dfgfgdh@gmail.com', 'jkgXdnFfYpUx0Oruy/83iFeIB4XI9JKQHg3N+rmsPgM=', 1680328603),
(17, 'huef@gmail.com', 'tpOFbGO+IvnDCljcr2qV0Z4H2Rqd/eDFMu6UaGQkPQc=', 1680329281),
(18, 'i3h3r@gmail.co', 'bw2h4LdtfIAjcsVdeNF5i1llVp/CHBUHaHPu5Blb4PA=', 1680329302),
(19, 'dwi.indra.prasetyo2003@gmail.com', 'kJB2c+KVPFVjRMNdrcMIyubzq1OGzYy8HFWBtvebWJk=', 1680329804),
(20, 'hanifku@gmail.com', 'XiYwfY6PLglDvVl4EMV+2S8LtvakqPUCA8LARkF4qQA=', 1680329996),
(21, 'wgewg@gh.com', 'k5oBqj2zSbTLttk+og1P88aFlgSDL0r9vFgR7KaLf2g=', 1680330028);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balai_access_menu`
--
ALTER TABLE `balai_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bo_access_menu`
--
ALTER TABLE `bo_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bo_access_submenu`
--
ALTER TABLE `bo_access_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen_inskal`
--
ALTER TABLE `dokumen_inskal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen_kabid`
--
ALTER TABLE `dokumen_kabid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen_poolbar`
--
ALTER TABLE `dokumen_poolbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obs_access_menu`
--
ALTER TABLE `obs_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balai_access_menu`
--
ALTER TABLE `balai_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bo_access_menu`
--
ALTER TABLE `bo_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `bo_access_submenu`
--
ALTER TABLE `bo_access_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dokumen_inskal`
--
ALTER TABLE `dokumen_inskal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dokumen_kabid`
--
ALTER TABLE `dokumen_kabid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokumen_poolbar`
--
ALTER TABLE `dokumen_poolbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `obs_access_menu`
--
ALTER TABLE `obs_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
