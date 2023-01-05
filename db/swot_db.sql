-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 07:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uu_id` varchar(255) NOT NULL,
  `rank` varchar(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uu_id`, `rank`, `first_name`, `last_name`, `position`, `tel`, `created_date`, `updated_date`) VALUES
('d520c7a8-421b-4563-b955-f5abc56b97ec', '', '', '', '', '', '2022-12-23 14:48:47', '2022-12-23 14:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `aspect`
--

CREATE TABLE `aspect` (
  `ap_id` int(11) NOT NULL,
  `uu_id` varchar(255) NOT NULL,
  `ap_name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aspect`
--

INSERT INTO `aspect` (`ap_id`, `uu_id`, `ap_name`, `created_date`, `updated_date`) VALUES
(1, 'd520c7a8-421b-4563-b955-f5abc56b97ec', 'ปัจจัยภายใน จุดแข็ง', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(2, 'd520c7a8-421b-4563-b955-f5abc56b97ec', 'ปัจจัยภายใน จุดอ่อน', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(3, 'd520c7a8-421b-4563-b955-f5abc56b97ec', 'ปัจจัยภายนอก โอกาส', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(4, 'd520c7a8-421b-4563-b955-f5abc56b97ec', 'ปัจจัยภายนอก อุปสรรค', '2022-12-23 14:48:48', '2022-12-23 14:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `swot`
--

CREATE TABLE `swot` (
  `s_id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_weight` decimal(10,2) DEFAULT NULL,
  `s_score` decimal(10,2) DEFAULT NULL,
  `s_total_score` decimal(10,2) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `swot`
--

INSERT INTO `swot` (`s_id`, `ap_id`, `s_name`, `s_weight`, `s_score`, `s_total_score`, `created_date`, `updated_date`) VALUES
(1, 1, 'ปัจจัยภายใน จุดแข็ง1', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(2, 1, 'ปัจจัยภายใน จุดแข็ง2', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(3, 1, 'ปัจจัยภายใน จุดแข็ง3', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(4, 1, 'ปัจจัยภายใน จุดแข็ง4', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(5, 2, 'ปัจจัยภายใน จุดอ่อน1', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(6, 2, 'ปัจจัยภายใน จุดอ่อน2', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(7, 2, 'ปัจจัยภายใน จุดอ่อน3', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(8, 2, 'ปัจจัยภายใน จุดอ่อน4', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(9, 3, 'ปัจจัยภายนอก โอกาส1', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(10, 3, 'ปัจจัยภายนอก โอกาส2', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(11, 3, 'ปัจจัยภายนอก โอกาส3', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(12, 3, 'ปัจจัยภายนอก โอกาส4', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(13, 4, 'ปัจจัยภายนอก อุปสรรค1', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(14, 4, 'ปัจจัยภายนอก อุปสรรค2', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(15, 4, 'ปัจจัยภายนอก อุปสรรค3', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48'),
(16, 4, 'ปัจจัยภายนอก อุปสรรค4', '0.25', '5.00', '1.25', '2022-12-23 14:48:48', '2022-12-23 14:48:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uu_id`);

--
-- Indexes for table `aspect`
--
ALTER TABLE `aspect`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `swot`
--
ALTER TABLE `swot`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspect`
--
ALTER TABLE `aspect`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `swot`
--
ALTER TABLE `swot`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
