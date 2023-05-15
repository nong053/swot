-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 04:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `central_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `id` int(11) NOT NULL,
  `server_mac_address` varchar(45) DEFAULT NULL,
  `ownership` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `created_date`, `updated_date`) VALUES
(1, 'xxx', 'xx', NULL, '2023-03-30 10:18:54', '2023-03-30 10:18:54'),
(2, 'ปป', 'ปป', '1', '2023-03-30 10:21:19', '2023-03-30 10:21:19'),
(3, 'xx', 'xx', '1', '2023-03-30 10:21:53', '2023-03-30 10:21:53'),
(4, 'ss@gmail.com', 'ss', '1', '2023-03-30 12:12:14', '2023-03-30 12:12:14'),
(5, 's2s@gmail.com', 'ss', '1', '2023-03-30 12:12:31', '2023-03-30 12:12:31'),
(6, 'XXX@GMAIL.COM', 'nONG@010535546', '1', '2023-03-30 14:10:09', '2023-03-30 14:10:09'),
(7, 's21s@gmail.1com', 'nong@010535546', '1', '2023-03-30 14:19:49', '2023-03-30 14:19:49'),
(8, 'abc@gmail.com', 'nong@010535546', '1', '2023-03-30 14:28:13', '2023-03-30 14:28:13'),
(9, 's211s@gmail.1com', 'nong@010535546', '1', '2023-03-30 14:34:28', '2023-03-30 14:34:28'),
(10, 's21s@gmail.com', 'nong@010535546', '1', '2023-03-30 14:35:03', '2023-03-30 14:35:03'),
(11, 'abc1@gmail.com', 'MD5(nong@010535546)', '1', '2023-03-30 14:37:06', '2023-03-30 14:37:06'),
(12, '1234@gmail.com', '29741fa3c2ec12973418ccbf33577aaf', '1', '2023-03-30 14:40:34', '2023-03-30 14:40:34'),
(13, 'abc123@gmail.com', '29741fa3c2ec12973418ccbf33577aaf', '1', '2023-03-30 19:34:06', '2023-03-30 19:34:06'),
(14, 'abc1234@gmail.com', '29741fa3c2ec12973418ccbf33577aaf', '1', '2023-03-30 21:27:53', '2023-03-30 21:27:53'),
(16, 'abcde@gmail.com', '29741fa3c2ec12973418ccbf33577aaf', '1', '2023-04-02 11:22:49', '2023-04-02 11:22:49'),
(17, 'kosit_arom@rtaf.mi.th', '29741fa3c2ec12973418ccbf33577aaf', '1', '2023-04-08 11:58:54', '2023-04-08 11:58:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
