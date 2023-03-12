-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 09:38 AM
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
(30, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '1', 'ผลกระทบต่ำมาก', 'อธิบายโอกาสเกิด', 1, '2023-03-12 15:23:01', '2023-03-12 15:23:01'),
(31, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '2', 'ผลกระทบต่ำ', 'อธิบายโอกาสเกิด', 2, '2023-03-12 15:23:01', '2023-03-12 15:23:01'),
(32, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '3', 'ผลกระทบปานกลาง', 'อธิบายโอกาสเกิด', 3, '2023-03-12 15:23:01', '2023-03-12 15:23:01'),
(33, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '4', 'ผลกระทบสูง', 'อธิบายโอกาสเกิด', 4, '2023-03-12 15:23:01', '2023-03-12 15:23:01'),
(34, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '5', 'ผลกระทบสูงมาก', 'อธิบายโอกาสเกิด', 5, '2023-03-12 15:23:01', '2023-03-12 15:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `impact_master_ex`
--

CREATE TABLE `impact_master_ex` (
  `im_id` int(11) NOT NULL,
  `rce_id` varchar(45) DEFAULT NULL,
  `im_code` varchar(100) DEFAULT NULL,
  `im_name` varchar(100) DEFAULT NULL,
  `im_description` varchar(255) DEFAULT NULL,
  `im_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `impact_master_ex`
--

INSERT INTO `impact_master_ex` (`im_id`, `rce_id`, `im_code`, `im_name`, `im_description`, `im_score`) VALUES
(36, '14', '1', 'ผลกระทบต่ำมาก', 'อธิบายโอกาสเกิด', 1),
(37, '14', '2', 'ผลกระทบต่ำ', 'อธิบายโอกาสเกิด', 2),
(38, '14', '3', 'ผลกระทบปานกลาง', 'อธิบายโอกาสเกิด', 3),
(39, '14', '4', 'ผลกระทบสูง', 'อธิบายโอกาสเกิด', 4),
(40, '14', '5', 'ผลกระทบสูงมาก', 'อธิบายโอกาสเกิด', 5),
(43, '15', '1', 'ผลกระทบต่ำมาก', 'อธิบายโอกาสเกิด', 1),
(44, '15', '2', 'ผลกระทบต่ำ', 'อธิบายโอกาสเกิด', 2),
(45, '15', '3', 'ผลกระทบปานกลาง', 'อธิบายโอกาสเกิด', 3),
(46, '15', '4', 'ผลกระทบสูง', 'อธิบายโอกาสเกิด', 4),
(47, '15', '5', 'ผลกระทบสูงมาก', 'อธิบายโอกาสเกิด', 5),
(134, '25', '1', 'ผลกระทบต่ำมาก', 'อธิบายโอกาสเกิด', 1),
(135, '25', '2', 'ผลกระทบต่ำ', 'อธิบายโอกาสเกิด', 2),
(136, '25', '3', 'ผลกระทบปานกลาง', 'อธิบายโอกาสเกิด', 3),
(137, '25', '4', 'ผลกระทบสูง', 'อธิบายโอกาสเกิด', 4),
(138, '25', '5', 'ผลกระทบสูงมาก', 'อธิบายโอกาสเกิด', 5);

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
(30, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '1', 'โอกาสเกิดต่ำมาก', 1, 'อธิบายโอกาสเกิดความเสี่ยง', '2023-03-12 15:23:00', '2023-03-12 15:23:00'),
(31, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '2', 'โอกาสเกิดต่ำ', 2, 'อธิบายโอกาสเกิดความเสี่ยง', '2023-03-12 15:23:00', '2023-03-12 15:23:00'),
(32, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '3', 'โอกาสเกิดปานกลาง', 3, 'อธิบายโอกาสเกิดความเสี่ยง', '2023-03-12 15:23:00', '2023-03-12 15:23:00'),
(33, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '4', 'โอกาสเกิดสูง', 4, 'อธิบายโอกาสเกิดความเสี่ยง', '2023-03-12 15:23:00', '2023-03-12 15:23:00'),
(34, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '5', 'โอกาสเกิดสูงมาก', 5, 'อธิบายโอกาสเกิดความเสี่ยง', '2023-03-12 15:23:00', '2023-03-12 15:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `likelihood_master_ex`
--

CREATE TABLE `likelihood_master_ex` (
  `lh_id` int(11) NOT NULL,
  `rce_id` int(11) DEFAULT NULL,
  `lh_score` int(11) DEFAULT NULL,
  `lh_name` varchar(100) DEFAULT NULL,
  `lh_description` varchar(255) DEFAULT NULL,
  `lh_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likelihood_master_ex`
--

INSERT INTO `likelihood_master_ex` (`lh_id`, `rce_id`, `lh_score`, `lh_name`, `lh_description`, `lh_code`) VALUES
(29, 14, 1, 'โอกาสเกิดต่ำมาก', 'อธิบายโอกาสเกิดความเสี่ยง', '1'),
(30, 14, 2, 'โอกาสเกิดต่ำ', 'อธิบายโอกาสเกิดความเสี่ยง', '2'),
(31, 14, 3, 'โอกาสเกิดปานกลาง', 'อธิบายโอกาสเกิดความเสี่ยง', '3'),
(32, 14, 4, 'โอกาสเกิดสูง', 'อธิบายโอกาสเกิดความเสี่ยง', '4'),
(33, 14, 5, 'โอกาสเกิดสูงมาก', 'อธิบายโอกาสเกิดความเสี่ยง', '5'),
(36, 15, 1, 'โอกาสเกิดต่ำมาก', 'อธิบายโอกาสเกิดความเสี่ยง', '1'),
(37, 15, 2, 'โอกาสเกิดต่ำ', 'อธิบายโอกาสเกิดความเสี่ยง', '2'),
(38, 15, 3, 'โอกาสเกิดปานกลาง', 'อธิบายโอกาสเกิดความเสี่ยง', '3'),
(39, 15, 4, 'โอกาสเกิดสูง', 'อธิบายโอกาสเกิดความเสี่ยง', '4'),
(40, 15, 5, 'โอกาสเกิดสูงมาก', 'อธิบายโอกาสเกิดความเสี่ยง', '5'),
(127, 25, 1, 'โอกาสเกิดต่ำมาก', 'อธิบายโอกาสเกิดความเสี่ยง', '1'),
(128, 25, 2, 'โอกาสเกิดต่ำ', 'อธิบายโอกาสเกิดความเสี่ยง', '2'),
(129, 25, 3, 'โอกาสเกิดปานกลาง', 'อธิบายโอกาสเกิดความเสี่ยง', '3'),
(130, 25, 4, 'โอกาสเกิดสูง', 'อธิบายโอกาสเกิดความเสี่ยง', '4'),
(131, 25, 5, 'โอกาสเกิดสูงมาก', 'อธิบายโอกาสเกิดความเสี่ยง', '5');

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
(43, 'RISK18', '4b7e2fd0-776a-420d-bd09-79a58da47ff6', 0, '117', '227', '337', '447', '447', '77', '447', '1', '5', '1', 5, '2023-03-12 15:23:00', '2023-03-12 15:23:00'),
(44, 'RISK19', '4b7e2fd0-776a-420d-bd09-79a58da47ff6', 0, '55', '55', '55', '55', '55', '55', '55', '2', '3', '1', 6, '2023-03-12 15:23:00', '2023-03-12 15:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `risk_cate_ex`
--

CREATE TABLE `risk_cate_ex` (
  `rce_id` int(11) NOT NULL,
  `rce_name` varchar(100) DEFAULT NULL,
  `rce_type_code` int(11) DEFAULT NULL,
  `rce_type_name` varchar(100) DEFAULT NULL,
  `uu_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `risk_cate_ex`
--

INSERT INTO `risk_cate_ex` (`rce_id`, `rce_name`, `rce_type_code`, `rce_type_name`, `uu_id`) VALUES
(1, 'บริหารความเสี่ยว1', 1, 'ผู้ดูแลระบบ', '4b7e2fd0-776a-420d-bd09-79a58da47ff6'),
(2, 'บริหารความเสี่ยว222qqqd', 2, 'สาธารณะ', '4b7e2fd0-776a-420d-bd09-79a58da47ff6'),
(14, '55', 1, 'ผู้ดูแลระบบ', '4b7e2fd0-776a-420d-bd09-79a58da47ff6'),
(15, '55', 1, 'ผู้ดูแลระบบ', '4b7e2fd0-776a-420d-bd09-79a58da47ff6'),
(25, 'rrrr888', 1, 'ผู้ดูแลระบบ', '4b7e2fd0-776a-420d-bd09-79a58da47ff6');

-- --------------------------------------------------------

--
-- Table structure for table `risk_evaluation_master`
--

CREATE TABLE `risk_evaluation_master` (
  `re_id` int(11) NOT NULL,
  `uu_id` varchar(100) DEFAULT NULL,
  `re_code` varchar(45) DEFAULT NULL,
  `re_name` varchar(100) DEFAULT NULL,
  `re_score_start` varchar(45) DEFAULT NULL,
  `re_score_end` varchar(45) DEFAULT NULL,
  `re_score_color` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `risk_evaluation_master`
--

INSERT INTO `risk_evaluation_master` (`re_id`, `uu_id`, `re_code`, `re_name`, `re_score_start`, `re_score_end`, `re_score_color`, `created_date`, `updated_date`) VALUES
(27, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '1', 'ต่ำ', '1', '8', 'white', '2023-03-12 15:23:01', '2023-03-12 15:23:01'),
(28, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '2', 'ปานกลาง', '9', '16', 'yellow', '2023-03-12 15:23:01', '2023-03-12 15:23:01'),
(29, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '3', 'สูง', '17', '24', 'orange', '2023-03-12 15:23:01', '2023-03-12 15:23:01'),
(30, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '4', 'สูงมาก', '25', '25', 'red', '2023-03-12 15:23:01', '2023-03-12 15:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `risk_evaluation_master_ex`
--

CREATE TABLE `risk_evaluation_master_ex` (
  `re_id` int(11) NOT NULL,
  `rce_id` int(11) DEFAULT NULL,
  `re_code` varchar(45) DEFAULT NULL,
  `re_name` varchar(100) DEFAULT NULL,
  `re_score_start` int(11) DEFAULT NULL,
  `re_score_end` int(11) DEFAULT NULL,
  `re_score_color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `risk_evaluation_master_ex`
--

INSERT INTO `risk_evaluation_master_ex` (`re_id`, `rce_id`, `re_code`, `re_name`, `re_score_start`, `re_score_end`, `re_score_color`) VALUES
(1, 15, '1', 'ต่ำ', 1, 8, 'white'),
(2, 15, '2', 'ปานกลาง', 9, 16, 'yellow'),
(3, 15, '3', 'สูง', 17, 24, 'orange'),
(4, 15, '4', 'สูงมาก', 25, 25, 'red'),
(8, 16, '1', 'ต่ำ', 1, 8, 'white'),
(9, 16, '2', 'ปานกลาง', 9, 16, 'yellow'),
(10, 16, '3', 'สูง', 17, 24, 'orange'),
(11, 16, '4', 'สูงมาก', 25, 25, 'red'),
(92, 25, '1', 'ต่ำ', 1, 8, 'white'),
(93, 25, '2', 'ปานกลาง', 9, 16, 'yellow'),
(94, 25, '3', 'สูง', 17, 24, 'orange'),
(95, 25, '4', 'สูงมาก', 25, 25, 'red');

-- --------------------------------------------------------

--
-- Table structure for table `risk_ex`
--

CREATE TABLE `risk_ex` (
  `r_id` int(11) NOT NULL,
  `rce_id` int(11) DEFAULT NULL,
  `r_seq` int(11) DEFAULT NULL,
  `r_name` varchar(255) DEFAULT NULL,
  `r_description` varchar(255) DEFAULT NULL,
  `r_factor` varchar(255) DEFAULT NULL,
  `r_effect` varchar(255) DEFAULT NULL,
  `r_code` varchar(45) DEFAULT NULL,
  `responsible_person` varchar(200) DEFAULT NULL,
  `guidelines_risk` varchar(200) DEFAULT NULL,
  `duration_of_work` varchar(255) DEFAULT NULL,
  `stm_code` varchar(100) DEFAULT NULL,
  `im_code` varchar(100) DEFAULT NULL,
  `lh_code` varchar(100) DEFAULT NULL,
  `total_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `risk_ex`
--

INSERT INTO `risk_ex` (`r_id`, `rce_id`, `r_seq`, `r_name`, `r_description`, `r_factor`, `r_effect`, `r_code`, `responsible_person`, `guidelines_risk`, `duration_of_work`, `stm_code`, `im_code`, `lh_code`, `total_score`) VALUES
(7, 25, 0, '117', '227', '337', '447', 'RISK18', '447', '77', '447', '1', '5', '1', 5),
(8, 25, 0, '55', '55', '55', '55', 'RISK19', '55', '55', '55', '1', '3', '2', 6);

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
(27, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '1', 'กลยุทธ์ที่1', 'อธิบายของกลยุทธ์1', '2023-03-12 15:23:00', '2023-03-12 15:23:00'),
(28, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '2', 'กลยุทธ์ที่2', 'อธิบายของกลยุทธ์121', '2023-03-12 15:23:00', '2023-03-12 15:23:00'),
(29, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '3', 'กลยุทธ์ที่3', 'อธิบายของกลยุทธ์121', '2023-03-12 15:23:00', '2023-03-12 15:23:00'),
(30, '4b7e2fd0-776a-420d-bd09-79a58da47ff6', '4', 'กลยุทธ์ที่4', 'อธิบายของกลยุทธ์121', '2023-03-12 15:23:00', '2023-03-12 15:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `strategy_type_master_ex`
--

CREATE TABLE `strategy_type_master_ex` (
  `stm_id` int(11) NOT NULL,
  `rce_id` int(11) DEFAULT NULL,
  `stm_code` varchar(100) DEFAULT NULL,
  `stm_name` varchar(100) DEFAULT NULL,
  `stm_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `strategy_type_master_ex`
--

INSERT INTO `strategy_type_master_ex` (`stm_id`, `rce_id`, `stm_code`, `stm_name`, `stm_description`) VALUES
(1, 16, '1', 'กลยุทธ์ที่1', 'อธิบายของกลยุทธ์1'),
(2, 16, '2', 'กลยุทธ์ที่2', 'อธิบายของกลยุทธ์121'),
(3, 16, '3', 'กลยุทธ์ที่3', 'อธิบายของกลยุทธ์121'),
(4, 16, '4', 'กลยุทธ์ที่4', 'อธิบายของกลยุทธ์121'),
(85, 25, '1', 'กลยุทธ์ที่1', 'อธิบายของกลยุทธ์1'),
(86, 25, '2', 'กลยุทธ์ที่2', 'อธิบายของกลยุทธ์121'),
(87, 25, '3', 'กลยุทธ์ที่3', 'อธิบายของกลยุทธ์121'),
(88, 25, '4', 'กลยุทธ์ที่4', 'อธิบายของกลยุทธ์121');

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
-- Indexes for table `impact_master_ex`
--
ALTER TABLE `impact_master_ex`
  ADD PRIMARY KEY (`im_id`);

--
-- Indexes for table `likelihood_master`
--
ALTER TABLE `likelihood_master`
  ADD PRIMARY KEY (`lh_id`);

--
-- Indexes for table `likelihood_master_ex`
--
ALTER TABLE `likelihood_master_ex`
  ADD PRIMARY KEY (`lh_id`);

--
-- Indexes for table `risk`
--
ALTER TABLE `risk`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `risk_cate_ex`
--
ALTER TABLE `risk_cate_ex`
  ADD PRIMARY KEY (`rce_id`);

--
-- Indexes for table `risk_evaluation_master`
--
ALTER TABLE `risk_evaluation_master`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `risk_evaluation_master_ex`
--
ALTER TABLE `risk_evaluation_master_ex`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `risk_ex`
--
ALTER TABLE `risk_ex`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `strategy_type_master`
--
ALTER TABLE `strategy_type_master`
  ADD PRIMARY KEY (`stm_id`);

--
-- Indexes for table `strategy_type_master_ex`
--
ALTER TABLE `strategy_type_master_ex`
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
  MODIFY `im_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `impact_master_ex`
--
ALTER TABLE `impact_master_ex`
  MODIFY `im_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `likelihood_master`
--
ALTER TABLE `likelihood_master`
  MODIFY `lh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `likelihood_master_ex`
--
ALTER TABLE `likelihood_master_ex`
  MODIFY `lh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `risk`
--
ALTER TABLE `risk`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `risk_cate_ex`
--
ALTER TABLE `risk_cate_ex`
  MODIFY `rce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `risk_evaluation_master`
--
ALTER TABLE `risk_evaluation_master`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `risk_evaluation_master_ex`
--
ALTER TABLE `risk_evaluation_master_ex`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `risk_ex`
--
ALTER TABLE `risk_ex`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `strategy_type_master`
--
ALTER TABLE `strategy_type_master`
  MODIFY `stm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `strategy_type_master_ex`
--
ALTER TABLE `strategy_type_master_ex`
  MODIFY `stm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
