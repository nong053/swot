-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: rm_db
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `impact_master`
--

DROP TABLE IF EXISTS `impact_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `impact_master` (
  `im_id` int(11) NOT NULL AUTO_INCREMENT,
  `uu_id` varchar(45) DEFAULT NULL,
  `im_code` varchar(45) DEFAULT NULL,
  `im_name` varchar(100) DEFAULT NULL,
  `im_description` varchar(255) DEFAULT NULL,
  `im_score` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`im_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impact_master`
--

LOCK TABLES `impact_master` WRITE;
/*!40000 ALTER TABLE `impact_master` DISABLE KEYS */;
INSERT INTO `impact_master` VALUES (1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','1','ผลกระทบต่ำมาก','อธิบายโอกาสเกิด',11,NULL,'2023-03-07 14:20:33'),(2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','2','ผลกระทบต่ำ','อธิบายโอกาสเกิด',21,NULL,'2023-03-07 14:20:33'),(3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','3','ผลกระทบปานกลาง','อธิบายโอกาสเกิด',31,NULL,'2023-03-07 14:20:33'),(4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','4','ผลกระทบสูง','อธิบายโอกาสเกิด',41,NULL,'2023-03-07 14:20:33'),(5,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','5','ผลกระทบสูงมาก','อธิบายโอกาสเกิด',51,NULL,'2023-03-07 14:20:33');
/*!40000 ALTER TABLE `impact_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likelihood_master`
--

DROP TABLE IF EXISTS `likelihood_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likelihood_master` (
  `lh_id` int(11) NOT NULL AUTO_INCREMENT,
  `uu_id` varchar(45) DEFAULT NULL,
  `lh_code` varchar(45) DEFAULT NULL,
  `lh_name` varchar(100) DEFAULT NULL,
  `lh_score` int(11) DEFAULT NULL,
  `lh_description` varchar(200) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`lh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likelihood_master`
--

LOCK TABLES `likelihood_master` WRITE;
/*!40000 ALTER TABLE `likelihood_master` DISABLE KEYS */;
INSERT INTO `likelihood_master` VALUES (1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','1','โอกาสเกิดต่ำมาก',12,'อธิบายโอกาสเกิดความเสี่ยง',NULL,'2023-03-07 14:16:36'),(2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','2','โอกาสเกิดต่ำ',22,'อธิบายโอกาสเกิดความเสี่ยง',NULL,'2023-03-07 14:16:36'),(3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','3','โอกาสเกิดปานกลาง',32,'อธิบายโอกาสเกิดความเสี่ยง',NULL,'2023-03-07 14:16:36'),(4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','4','โอกาสเกิดสูง',42,'อธิบายโอกาสเกิดความเสี่ยง',NULL,'2023-03-07 14:16:36'),(5,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','5','โอกาสเกิดสูงมาก',52,'อธิบายโอกาสเกิดความเสี่ยง',NULL,'2023-03-07 14:16:36');
/*!40000 ALTER TABLE `likelihood_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `risk`
--

DROP TABLE IF EXISTS `risk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `risk` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `risk`
--

LOCK TABLES `risk` WRITE;
/*!40000 ALTER TABLE `risk` DISABLE KEYS */;
INSERT INTO `risk` VALUES (18,'RISK18','4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'117','227','337','447','447','77','447','1','1','1',55,'2023-03-07 09:44:07','2023-03-07 10:07:28'),(19,'RISK19','4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'55','55','55','55','55','55','55','1','1','1',55,'2023-03-07 10:07:14','2023-03-07 10:07:28');
/*!40000 ALTER TABLE `risk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `risk_evaluation_master`
--

DROP TABLE IF EXISTS `risk_evaluation_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `risk_evaluation_master` (
  `re_id` int(11) NOT NULL AUTO_INCREMENT,
  `uu_id` varchar(100) DEFAULT NULL,
  `re_name` varchar(100) DEFAULT NULL,
  `re_score_start` varchar(45) DEFAULT NULL,
  `re_score_end` varchar(45) DEFAULT NULL,
  `re_score_color` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `re_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`re_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `risk_evaluation_master`
--

LOCK TABLES `risk_evaluation_master` WRITE;
/*!40000 ALTER TABLE `risk_evaluation_master` DISABLE KEYS */;
INSERT INTO `risk_evaluation_master` VALUES (1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','112','12','12','12',NULL,'2023-03-07 15:10:24','1'),(2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','12','12','12','12',NULL,'2023-03-07 15:10:24','2'),(3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','12','12','12','12',NULL,'2023-03-07 15:10:24','3'),(4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','12','12','12','12',NULL,'2023-03-07 15:10:24','4');
/*!40000 ALTER TABLE `risk_evaluation_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `strategy_type_master`
--

DROP TABLE IF EXISTS `strategy_type_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `strategy_type_master` (
  `stm_id` int(11) NOT NULL AUTO_INCREMENT,
  `uu_id` varchar(45) DEFAULT NULL,
  `stm_code` varchar(45) DEFAULT NULL,
  `stm_name` varchar(100) DEFAULT NULL,
  `stm_description` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`stm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `strategy_type_master`
--

LOCK TABLES `strategy_type_master` WRITE;
/*!40000 ALTER TABLE `strategy_type_master` DISABLE KEYS */;
INSERT INTO `strategy_type_master` VALUES (1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','1','กลยุทธ์ที่1','อธิบายของกลยุทธ์12',NULL,'2023-03-07 14:29:24'),(2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','2','กลยุทธ์ที่2','อธิบายของกลยุทธ์12',NULL,'2023-03-07 14:29:24'),(3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','3','กลยุทธ์ที่3','อธิบายของกลยุทธ์12',NULL,'2023-03-07 14:29:24'),(4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','4','กลยุทธ์ที่4','อธิบายของกลยุทธ์12',NULL,'2023-03-07 14:29:24');
/*!40000 ALTER TABLE `strategy_type_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uu_id` varchar(100) NOT NULL,
  `rank` varchar(100) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`uu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('4b7e2fd0-776a-420d-bd09-79a58da47ff6',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-07 15:11:53
