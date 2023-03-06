-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 03:52 PM
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
-- Database: `rm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `impact_master`
--

CREATE TABLE `impact_master` (
  `im_id` int(11) NOT NULL,
  `uu_id` varchar(45) DEFAULT NULL,
  `im_code` varchar(45) DEFAULT NULL,
  `im_name` varchar(100) DEFAULT NULL,
  `im_description` varchar(255) DEFAULT NULL,
  `im_score` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `impact_master`
--

INSERT INTO `impact_master` (`im_id`, `uu_id`, `im_code`, `im_name`, `im_description`, `im_score`, `created_date`, `updated_date`) VALUES
(1, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '1', 'ผลกระทบต่ำมาก', 'อธิบายโอกาสเกิด', 1, NULL, NULL),
(2, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '2', 'ผลกระทบต่ำ', 'อธิบายโอกาสเกิด', 2, NULL, NULL),
(3, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '3', 'ผลกระทบปานกลาง', 'อธิบายโอกาสเกิด', 3, NULL, NULL),
(4, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '4', 'ผลกระทบสูง', 'อธิบายโอกาสเกิด', 4, NULL, NULL),
(5, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '5', 'ผลกระทบสูงมาก', 'อธิบายโอกาสเกิด', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likelihood_master`
--

CREATE TABLE `likelihood_master` (
  `lh_id` int(11) NOT NULL,
  `uu_id` varchar(45) DEFAULT NULL,
  `lh_code` varchar(45) DEFAULT NULL,
  `lh_name` varchar(100) DEFAULT NULL,
  `lh_score` int(11) DEFAULT NULL,
  `lh_description` varchar(200) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likelihood_master`
--

INSERT INTO `likelihood_master` (`lh_id`, `uu_id`, `lh_code`, `lh_name`, `lh_score`, `lh_description`, `created_date`, `updated_date`) VALUES
(1, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '1', 'โอกาสเกิดต่ำมาก', 1, 'อธิบายโอกาสเกิดความเสี่ยง', NULL, NULL),
(2, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '2', 'โอกาสเกิดต่ำ', 2, 'อธิบายโอกาสเกิดความเสี่ยง', NULL, NULL),
(3, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '3', 'โอกาสเกิดปานกลาง', 3, 'อธิบายโอกาสเกิดความเสี่ยง', NULL, NULL),
(4, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '4', 'โอกาสเกิดสูง', 4, 'อธิบายโอกาสเกิดความเสี่ยง', NULL, NULL),
(5, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '5', 'โอกาสเกิดสูงมาก', 5, 'อธิบายโอกาสเกิดความเสี่ยง', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `risk`
--

CREATE TABLE `risk` (
  `r_id` int(11) NOT NULL,
  `r_code` varchar(10) DEFAULT NULL,
  `uu_id` varchar(100) DEFAULT NULL,
  `r_seq` int(11) DEFAULT NULL,
  `r_name` varchar(100) DEFAULT NULL,
  `r_description` varchar(255) DEFAULT NULL,
  `r_factor` varchar(255) DEFAULT NULL,
  `r_effect` varchar(255) DEFAULT NULL,
  `responsible_person` varchar(100) DEFAULT NULL,
  `guidelines_risk` varchar(255) DEFAULT NULL,
  `duration_of_work` varchar(255) DEFAULT NULL,
  `lh_code` varchar(100) DEFAULT NULL,
  `im_code` varchar(100) DEFAULT NULL,
  `stm_code` varchar(100) DEFAULT NULL,
  `total_score` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `risk`
--

INSERT INTO `risk` (`r_id`, `r_code`, `uu_id`, `r_seq`, `r_name`, `r_description`, `r_factor`, `r_effect`, `responsible_person`, `guidelines_risk`, `duration_of_work`, `lh_code`, `im_code`, `stm_code`, `total_score`, `created_date`, `updated_date`) VALUES
(9, 'RISK9', '4b7e2fd0-776a-420d-bd09-79a58da47ff6', 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', 0, '2023-03-05 16:29:40', '2023-03-05 16:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `risk_evaluation_master`
--

CREATE TABLE `risk_evaluation_master` (
  `re_id` int(11) NOT NULL,
  `uu_id` varchar(100) DEFAULT NULL,
  `re_score_start` varchar(45) DEFAULT NULL,
  `re_score_end` varchar(45) DEFAULT NULL,
  `re_score_color` varchar(100) DEFAULT NULL,
  `re_name` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `risk_evaluation_master`
--

INSERT INTO `risk_evaluation_master` (`re_id`, `uu_id`, `re_score_start`, `re_score_end`, `re_score_color`, `re_name`, `created_date`, `updated_date`) VALUES
(1, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '1', '8', 'whilte', 'ต่ำ', NULL, NULL),
(2, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '9', '16', 'yellow', 'ปานกลาง', NULL, NULL),
(3, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '17', '24', 'orange', 'สูง', NULL, NULL),
(4, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '25', '25', 'red', 'สูงมาก', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `strategy_type_master`
--

CREATE TABLE `strategy_type_master` (
  `stm_id` int(11) NOT NULL,
  `uu_id` varchar(45) DEFAULT NULL,
  `stm_code` varchar(45) DEFAULT NULL,
  `stm_name` varchar(100) DEFAULT NULL,
  `stm_description` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `strategy_type_master`
--

INSERT INTO `strategy_type_master` (`stm_id`, `uu_id`, `stm_code`, `stm_name`, `stm_description`, `created_date`, `updated_date`) VALUES
(1, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '1', 'กลยุทธ์ที่1', 'อธิบายของกลยุทธ์', NULL, NULL),
(2, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '2', 'กลยุทธ์ที่2', 'อธิบายของกลยุทธ์', NULL, NULL),
(3, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '3', 'กลยุทธ์ที่3', 'อธิบายของกลยุทธ์', NULL, NULL),
(4, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '4', 'กลยุทธ์ที่4', 'อธิบายของกลยุทธ์', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uu_id` varchar(100) NOT NULL,
  `rank` varchar(100) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uu_id`, `rank`, `first_name`, `last_name`, `position`, `tel`, `created_date`, `updated_date`) VALUES
('4b7e2fd0-776a-420d-bd09-79a58da47ff6', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `impact_master`
--
ALTER TABLE `impact_master`
  ADD PRIMARY KEY (`im_id`);

--
-- Indexes for table `likelihood_master`
--
ALTER TABLE `likelihood_master`
  ADD PRIMARY KEY (`lh_id`);

--
-- Indexes for table `risk`
--
ALTER TABLE `risk`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `risk_evaluation_master`
--
ALTER TABLE `risk_evaluation_master`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `strategy_type_master`
--
ALTER TABLE `strategy_type_master`
  ADD PRIMARY KEY (`stm_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `impact_master`
--
ALTER TABLE `impact_master`
  MODIFY `im_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `likelihood_master`
--
ALTER TABLE `likelihood_master`
  MODIFY `lh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `risk`
--
ALTER TABLE `risk`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `risk_evaluation_master`
--
ALTER TABLE `risk_evaluation_master`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `strategy_type_master`
--
ALTER TABLE `strategy_type_master`
  MODIFY `stm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
