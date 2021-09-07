-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 03:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pl2`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_access`
--

CREATE TABLE `web_access` (
  `kd_access` int(5) NOT NULL,
  `kd_users` int(5) NOT NULL,
  `kd_menu` int(5) NOT NULL,
  `insert_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_access`
--

INSERT INTO `web_access` (`kd_access`, `kd_users`, `kd_menu`, `insert_date`, `update_date`, `delete_date`) VALUES
(1, 1, 1, '2021-07-21 09:07:54', '2021-07-21 09:14:50', '0000-00-00 00:00:00'),
(2, 1, 2, '2021-07-21 09:32:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `web_logs`
--

CREATE TABLE `web_logs` (
  `kd_logs` int(11) NOT NULL,
  `kd_users` int(5) NOT NULL,
  `kd_menu` int(5) NOT NULL,
  `subject` int(1) NOT NULL,
  `logs_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `web_menu`
--

CREATE TABLE `web_menu` (
  `kd_menu` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `site_url` varchar(50) NOT NULL,
  `insert_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_menu`
--

INSERT INTO `web_menu` (`kd_menu`, `name`, `site_url`, `insert_date`, `update_date`, `delete_date`) VALUES
(1, 'Profile', 'profile', '2021-07-19 03:50:51', '2021-07-19 03:55:19', '0000-00-00 00:00:00'),
(2, 'Video', 'video', '2021-07-19 15:56:35', '2021-07-20 21:10:03', '0000-00-00 00:00:00'),
(3, 'sas', 'video', '2021-07-20 21:10:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'sas', 'profile', '2021-07-20 23:04:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '1', '1', '2021-07-21 01:58:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `web_profile`
--

CREATE TABLE `web_profile` (
  `kd_profile` int(5) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `publish` int(1) NOT NULL,
  `kd_users` int(5) NOT NULL,
  `insert_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_profile`
--

INSERT INTO `web_profile` (`kd_profile`, `subject`, `content`, `publish`, `kd_users`, `insert_date`, `update_date`, `delete_date`) VALUES
(1, 'gatau apaa', 'wdsd', 1, 0, '2021-07-21 14:36:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'gatau apaa', 'wdsd', 0, 0, '2021-07-21 14:36:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `web_users`
--

CREATE TABLE `web_users` (
  `kd_users` int(5) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `insert_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_users`
--

INSERT INTO `web_users` (`kd_users`, `name`, `email`, `username`, `password`, `level`, `insert_date`, `update_date`, `delete_date`) VALUES
(7, 'vvsx', 'alldosayrifin@gmail.com', 'user7', '123', 0, '2021-07-18 06:18:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'sadsds', 'rarakaaaa2222@gmail.com', 'user11', '123', 1, '2021-07-18 06:25:20', '2021-07-21 01:48:18', '0000-00-00 00:00:00'),
(9, 'kesa', 'pososoo@alp00', 'admin', '123', 2, '2021-07-19 01:54:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'sarah', 'raniafsa@gmail.com', 'user1', '123', 2, '2021-07-21 01:42:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `web_video`
--

CREATE TABLE `web_video` (
  `kd_video` int(3) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `publish` int(1) NOT NULL,
  `insert_date` datetime NOT NULL,
  `delete_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_video`
--

INSERT INTO `web_video` (`kd_video`, `subject`, `link`, `content`, `publish`, `insert_date`, `delete_date`, `update_date`) VALUES
(1, 'gatau apaa', 'dasdasdasd', 'wdsd1111', 0, '2021-07-21 03:15:19', '0000-00-00 00:00:00', '2021-07-21 03:18:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web_access`
--
ALTER TABLE `web_access`
  ADD PRIMARY KEY (`kd_access`);

--
-- Indexes for table `web_logs`
--
ALTER TABLE `web_logs`
  ADD PRIMARY KEY (`kd_logs`);

--
-- Indexes for table `web_menu`
--
ALTER TABLE `web_menu`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indexes for table `web_profile`
--
ALTER TABLE `web_profile`
  ADD PRIMARY KEY (`kd_profile`);

--
-- Indexes for table `web_users`
--
ALTER TABLE `web_users`
  ADD PRIMARY KEY (`kd_users`);

--
-- Indexes for table `web_video`
--
ALTER TABLE `web_video`
  ADD PRIMARY KEY (`kd_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web_access`
--
ALTER TABLE `web_access`
  MODIFY `kd_access` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_logs`
--
ALTER TABLE `web_logs`
  MODIFY `kd_logs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_menu`
--
ALTER TABLE `web_menu`
  MODIFY `kd_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `web_profile`
--
ALTER TABLE `web_profile`
  MODIFY `kd_profile` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_users`
--
ALTER TABLE `web_users`
  MODIFY `kd_users` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `web_video`
--
ALTER TABLE `web_video`
  MODIFY `kd_video` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
