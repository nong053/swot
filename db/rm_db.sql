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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impact_master`
--

LOCK TABLES `impact_master` WRITE;
/*!40000 ALTER TABLE `impact_master` DISABLE KEYS */;
INSERT INTO `impact_master` VALUES (1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','1','ผลกระทบต่ำมาก','อธิบายโอกาสเกิด',1,'2023-03-16 15:40:43','2023-03-16 15:40:43'),(2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','2','ผลกระทบต่ำ','อธิบายโอกาสเกิด',2,'2023-03-16 15:40:44','2023-03-16 15:40:44'),(3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','3','ผลกระทบปานกลาง','อธิบายโอกาสเกิด',3,'2023-03-16 15:40:44','2023-03-16 15:40:44'),(4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','4','ผลกระทบสูง','อธิบายโอกาสเกิด',4,'2023-03-16 15:40:44','2023-03-16 15:40:44'),(5,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','5','ผลกระทบสูงมาก','อธิบายโอกาสเกิด',5,'2023-03-16 15:40:44','2023-03-16 15:40:44'),(13,'2c106cc61b26f9f71ec3da85c01c56cd','1','ผลกระทบต่ำมาก','อธิบายโอกาสเกิด',1,NULL,NULL),(14,'2c106cc61b26f9f71ec3da85c01c56cd','2','ผลกระทบต่ำ','อธิบายโอกาสเกิด',2,NULL,NULL),(15,'2c106cc61b26f9f71ec3da85c01c56cd','3','ผลกระทบปานกลาง','อธิบายโอกาสเกิด',3,NULL,NULL),(16,'2c106cc61b26f9f71ec3da85c01c56cd','4','ผลกระทบสูง','อธิบายโอกาสเกิด',4,NULL,NULL),(17,'2c106cc61b26f9f71ec3da85c01c56cd','5','ผลกระทบสูงมาก','อธิบายโอกาสเกิด',5,NULL,NULL);
/*!40000 ALTER TABLE `impact_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impact_master_ex`
--

DROP TABLE IF EXISTS `impact_master_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `impact_master_ex` (
  `im_id` int(11) NOT NULL AUTO_INCREMENT,
  `rce_id` varchar(45) DEFAULT NULL,
  `im_code` varchar(100) DEFAULT NULL,
  `im_name` varchar(100) DEFAULT NULL,
  `im_description` varchar(255) DEFAULT NULL,
  `im_score` int(11) DEFAULT NULL,
  PRIMARY KEY (`im_id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impact_master_ex`
--

LOCK TABLES `impact_master_ex` WRITE;
/*!40000 ALTER TABLE `impact_master_ex` DISABLE KEYS */;
INSERT INTO `impact_master_ex` VALUES (36,'1','1','ผลกระทบต่ำมาก','อธิบายโอกาสเกิด',1),(37,'1','2','ผลกระทบต่ำ','อธิบายโอกาสเกิด',2),(38,'1','3','ผลกระทบปานกลาง','อธิบายโอกาสเกิด',3),(39,'1','4','ผลกระทบสูง','อธิบายโอกาสเกิด',4),(40,'1','5','ผลกระทบสูงมาก','อธิบายโอกาสเกิด',5),(43,'15','1','ผลกระทบต่ำมาก','อธิบายโอกาสเกิด',1),(44,'15','2','ผลกระทบต่ำ','อธิบายโอกาสเกิด',2),(45,'15','3','ผลกระทบปานกลาง','อธิบายโอกาสเกิด',3),(46,'15','4','ผลกระทบสูง','อธิบายโอกาสเกิด',4),(47,'15','5','ผลกระทบสูงมาก','อธิบายโอกาสเกิด',5),(134,'25','1','ผลกระทบต่ำมาก','อธิบายโอกาสเกิด',1),(135,'25','2','ผลกระทบต่ำ','อธิบายโอกาสเกิด',2),(136,'25','3','ผลกระทบปานกลาง','อธิบายโอกาสเกิด',3),(137,'25','4','ผลกระทบสูง','อธิบายโอกาสเกิด',4),(138,'25','5','ผลกระทบสูงมาก','อธิบายโอกาสเกิด',5);
/*!40000 ALTER TABLE `impact_master_ex` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likelihood_master`
--

LOCK TABLES `likelihood_master` WRITE;
/*!40000 ALTER TABLE `likelihood_master` DISABLE KEYS */;
INSERT INTO `likelihood_master` VALUES (1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','1','โอกาสเกิดต่ำมาก',1,'อธิบายโอกาสเกิดความเสี่ยง','2023-03-16 15:40:43','2023-03-16 15:40:43'),(2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','2','โอกาสเกิดต่ำ',2,'อธิบายโอกาสเกิดความเสี่ยง','2023-03-16 15:40:43','2023-03-16 15:40:43'),(3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','3','โอกาสเกิดปานกลาง',3,'อธิบายโอกาสเกิดความเสี่ยง','2023-03-16 15:40:43','2023-03-16 15:40:43'),(4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','4','โอกาสเกิดสูง',4,'อธิบายโอกาสเกิดความเสี่ยง','2023-03-16 15:40:43','2023-03-16 15:40:43'),(5,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','5','โอกาสเกิดสูงมาก',5,'อธิบายโอกาสเกิดความเสี่ยง','2023-03-16 15:40:43','2023-03-16 15:40:43'),(13,'2c106cc61b26f9f71ec3da85c01c56cd','1','โอกาสเกิดต่ำมาก',1,'อธิบายโอกาสเกิดความเสี่ยง',NULL,NULL),(14,'2c106cc61b26f9f71ec3da85c01c56cd','2','โอกาสเกิดต่ำ',2,'อธิบายโอกาสเกิดความเสี่ยง',NULL,NULL),(15,'2c106cc61b26f9f71ec3da85c01c56cd','3','โอกาสเกิดปานกลาง',3,'อธิบายโอกาสเกิดความเสี่ยง',NULL,NULL),(16,'2c106cc61b26f9f71ec3da85c01c56cd','4','โอกาสเกิดสูง',4,'อธิบายโอกาสเกิดความเสี่ยง',NULL,NULL),(17,'2c106cc61b26f9f71ec3da85c01c56cd','5','โอกาสเกิดสูงมาก',5,'อธิบายโอกาสเกิดความเสี่ยง',NULL,NULL);
/*!40000 ALTER TABLE `likelihood_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likelihood_master_ex`
--

DROP TABLE IF EXISTS `likelihood_master_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likelihood_master_ex` (
  `lh_id` int(11) NOT NULL AUTO_INCREMENT,
  `rce_id` int(11) DEFAULT NULL,
  `lh_score` int(11) DEFAULT NULL,
  `lh_name` varchar(100) DEFAULT NULL,
  `lh_description` varchar(255) DEFAULT NULL,
  `lh_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likelihood_master_ex`
--

LOCK TABLES `likelihood_master_ex` WRITE;
/*!40000 ALTER TABLE `likelihood_master_ex` DISABLE KEYS */;
INSERT INTO `likelihood_master_ex` VALUES (29,1,1,'โอกาสเกิดต่ำมาก','อธิบายโอกาสเกิดความเสี่ยง','1'),(30,1,2,'โอกาสเกิดต่ำ','อธิบายโอกาสเกิดความเสี่ยง','2'),(31,1,3,'โอกาสเกิดปานกลาง','อธิบายโอกาสเกิดความเสี่ยง','3'),(32,1,4,'โอกาสเกิดสูง','อธิบายโอกาสเกิดความเสี่ยง','4'),(33,1,5,'โอกาสเกิดสูงมาก','อธิบายโอกาสเกิดความเสี่ยง','5'),(36,15,1,'โอกาสเกิดต่ำมาก','อธิบายโอกาสเกิดความเสี่ยง','1'),(37,15,2,'โอกาสเกิดต่ำ','อธิบายโอกาสเกิดความเสี่ยง','2'),(38,15,3,'โอกาสเกิดปานกลาง','อธิบายโอกาสเกิดความเสี่ยง','3'),(39,15,4,'โอกาสเกิดสูง','อธิบายโอกาสเกิดความเสี่ยง','4'),(40,15,5,'โอกาสเกิดสูงมาก','อธิบายโอกาสเกิดความเสี่ยง','5'),(127,25,1,'โอกาสเกิดต่ำมาก','อธิบายโอกาสเกิดความเสี่ยง','1'),(128,25,2,'โอกาสเกิดต่ำ','อธิบายโอกาสเกิดความเสี่ยง','2'),(129,25,3,'โอกาสเกิดปานกลาง','อธิบายโอกาสเกิดความเสี่ยง','3'),(130,25,4,'โอกาสเกิดสูง','อธิบายโอกาสเกิดความเสี่ยง','4'),(131,25,5,'โอกาสเกิดสูงมาก','อธิบายโอกาสเกิดความเสี่ยง','5');
/*!40000 ALTER TABLE `likelihood_master_ex` ENABLE KEYS */;
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
  `r_code_display` varchar(45) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `risk`
--

LOCK TABLES `risk` WRITE;
/*!40000 ALTER TABLE `risk` DISABLE KEYS */;
INSERT INTO `risk` VALUES (1,'RISK18',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'117','227','337','447','447','77','447','1','5','1',5,'2023-03-16 15:40:43','2023-03-16 15:40:43'),(2,'RISK19',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'55','55','55','55','55','55','55','2','3','1',6,'2023-03-16 15:40:43','2023-03-16 15:40:43'),(3,'RISK3',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'','','','','','','','','','',0,'2023-03-22 14:11:32','2023-03-22 14:11:32'),(4,'RISK4',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'','','','','','','','','','',0,'2023-03-22 14:12:32','2023-03-22 14:12:32'),(5,'RISK5',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'','','','','','','','','','',0,'2023-03-22 14:13:19','2023-03-22 14:13:19'),(6,'RISK6',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'','','','','','','','','','',0,'2023-03-23 08:19:30','2023-03-23 08:19:30'),(7,'RISK7',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'','','','','','','','','','',0,'2023-03-23 08:19:34','2023-03-23 08:19:34'),(8,'RISK8',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'','','','','','','','','','',0,'2023-03-23 08:19:35','2023-03-23 08:19:35'),(9,'RISK9',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'','','','','','','','','','',0,'2023-03-23 08:30:42','2023-03-23 08:30:42'),(10,'RISK10',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'','','','','','','','','','',0,'2023-03-23 08:40:05','2023-03-23 08:40:05'),(11,'RISK11',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'','','','','','','','','','',0,'2023-03-23 08:40:09','2023-03-23 08:40:09'),(12,'RISK12',NULL,'4b7e2fd0-776a-420d-bd09-79a58da47ff6',0,'','','','','','','','','','',0,'2023-03-23 08:43:10','2023-03-23 08:43:10'),(14,'',NULL,'TEST111',0,'','','','','','','','','','',0,'2023-03-23 09:01:31','2023-03-23 09:01:31'),(15,'',NULL,'TEST001',0,'','','','','','','','','0','',0,'2023-03-23 09:03:20','2023-03-23 09:03:20'),(16,'',NULL,'TEST001',0,'','','','','','','','','','',0,'2023-03-23 09:03:45','2023-03-23 09:03:45'),(17,'',NULL,'TEST111',0,'','','','','','','','','','',0,'2023-03-23 09:04:08','2023-03-23 09:04:08'),(19,'RISK18','RISK001','2c106cc61b26f9f71ec3da85c01c56cd',0,'xxx1','xxx2','xx3','xxx4','xxx5','xxx7','xxx6','1','5','1',5,NULL,'2023-03-23 15:44:47'),(20,'RISK19','xxx','2c106cc61b26f9f71ec3da85c01c56cd',0,'55','55','55','55','55','55','55','2','3','1',6,NULL,'2023-03-23 15:44:47'),(22,'RISK22',NULL,'2c106cc61b26f9f71ec3da85c01c56cd',0,'','','','','','','','','','',0,'2023-03-23 09:25:04','2023-03-23 09:25:04'),(23,'RISK23',NULL,'2c106cc61b26f9f71ec3da85c01c56cd',0,'','','','','','','','','','',0,'2023-03-23 09:28:18','2023-03-23 09:28:18'),(24,'RISK24',NULL,'2c106cc61b26f9f71ec3da85c01c56cd',0,'','','','','','','','','','',0,'2023-03-23 09:37:14','2023-03-23 09:37:14'),(25,'RISK25',NULL,'2c106cc61b26f9f71ec3da85c01c56cd',0,'','','','','','','','','','',0,'2023-03-23 09:39:33','2023-03-23 09:39:33'),(28,'RISK28','xxx','2c106cc61b26f9f71ec3da85c01c56cd',0,'222','222','222','222','22','22','22','5','5','1',25,'2023-03-23 09:53:05','2023-03-23 15:44:47'),(29,'RISK29','xxx','2c106cc61b26f9f71ec3da85c01c56cd',0,'33','33','33','33','33','33','33','1','1','1',1,'2023-03-23 09:57:44','2023-03-23 15:44:47'),(30,'RISK30','xxx','2c106cc61b26f9f71ec3da85c01c56cd',0,'44','44','44','44','44','44','44','1','1','1',1,'2023-03-23 09:58:04','2023-03-23 15:44:47');
/*!40000 ALTER TABLE `risk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `risk_cate_ex`
--

DROP TABLE IF EXISTS `risk_cate_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `risk_cate_ex` (
  `rce_id` int(11) NOT NULL AUTO_INCREMENT,
  `rce_name` varchar(100) DEFAULT NULL,
  `rce_type_code` int(11) DEFAULT NULL,
  `rce_type_name` varchar(100) DEFAULT NULL,
  `uu_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rce_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `risk_cate_ex`
--

LOCK TABLES `risk_cate_ex` WRITE;
/*!40000 ALTER TABLE `risk_cate_ex` DISABLE KEYS */;
INSERT INTO `risk_cate_ex` VALUES (1,'บริหารความเสี่ยง',1,'ผู้ดูแลระบบ','4b7e2fd0-776a-420d-bd09-79a58da47ff6'),(2,'บริหารความเสี่ยว222qqqd',2,'สาธารณะ','4b7e2fd0-776a-420d-bd09-79a58da47ff6'),(14,'55',1,'ผู้ดูแลระบบ','4b7e2fd0-776a-420d-bd09-79a58da47ff6'),(15,'55',1,'ผู้ดูแลระบบ','4b7e2fd0-776a-420d-bd09-79a58da47ff6'),(25,'rrrr888',1,'ผู้ดูแลระบบ','4b7e2fd0-776a-420d-bd09-79a58da47ff6');
/*!40000 ALTER TABLE `risk_cate_ex` ENABLE KEYS */;
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
  `re_code` varchar(45) DEFAULT NULL,
  `re_name` varchar(100) DEFAULT NULL,
  `re_score_start` varchar(45) DEFAULT NULL,
  `re_score_end` varchar(45) DEFAULT NULL,
  `re_score_color` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`re_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `risk_evaluation_master`
--

LOCK TABLES `risk_evaluation_master` WRITE;
/*!40000 ALTER TABLE `risk_evaluation_master` DISABLE KEYS */;
INSERT INTO `risk_evaluation_master` VALUES (1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','1','ต่ำ','1','8','white','2023-03-16 15:40:44','2023-03-16 15:40:44'),(2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','2','ปานกลาง','9','16','yellow','2023-03-16 15:40:44','2023-03-16 15:40:44'),(3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','3','สูง','17','24','orange','2023-03-16 15:40:44','2023-03-16 15:40:44'),(4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','4','สูงมาก','25','25','red','2023-03-16 15:40:44','2023-03-16 15:40:44'),(12,'2c106cc61b26f9f71ec3da85c01c56cd','1','ต่ำ','1','8','white',NULL,NULL),(13,'2c106cc61b26f9f71ec3da85c01c56cd','2','ปานกลาง','9','16','yellow',NULL,NULL),(14,'2c106cc61b26f9f71ec3da85c01c56cd','3','สูง','17','24','orange',NULL,NULL),(15,'2c106cc61b26f9f71ec3da85c01c56cd','4','สูงมาก','25','25','red',NULL,NULL);
/*!40000 ALTER TABLE `risk_evaluation_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `risk_evaluation_master_ex`
--

DROP TABLE IF EXISTS `risk_evaluation_master_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `risk_evaluation_master_ex` (
  `re_id` int(11) NOT NULL AUTO_INCREMENT,
  `rce_id` int(11) DEFAULT NULL,
  `re_code` varchar(45) DEFAULT NULL,
  `re_name` varchar(100) DEFAULT NULL,
  `re_score_start` int(11) DEFAULT NULL,
  `re_score_end` int(11) DEFAULT NULL,
  `re_score_color` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`re_id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `risk_evaluation_master_ex`
--

LOCK TABLES `risk_evaluation_master_ex` WRITE;
/*!40000 ALTER TABLE `risk_evaluation_master_ex` DISABLE KEYS */;
INSERT INTO `risk_evaluation_master_ex` VALUES (1,1,'1','ต่ำ',1,8,'white'),(2,1,'2','ปานกลาง',9,16,'yellow'),(3,1,'3','สูง',17,24,'orange'),(4,1,'4','สูงมาก',25,25,'red'),(8,16,'1','ต่ำ',1,8,'white'),(9,16,'2','ปานกลาง',9,16,'yellow'),(10,16,'3','สูง',17,24,'orange'),(11,16,'4','สูงมาก',25,25,'red'),(92,25,'1','ต่ำ',1,8,'white'),(93,25,'2','ปานกลาง',9,16,'yellow'),(94,25,'3','สูง',17,24,'orange'),(95,25,'4','สูงมาก',25,25,'red');
/*!40000 ALTER TABLE `risk_evaluation_master_ex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `risk_ex`
--

DROP TABLE IF EXISTS `risk_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `risk_ex` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `rce_id` int(11) DEFAULT NULL,
  `r_code` varchar(45) DEFAULT NULL,
  `r_seq` int(11) DEFAULT NULL,
  `r_name` varchar(255) DEFAULT NULL,
  `r_description` varchar(255) DEFAULT NULL,
  `r_factor` varchar(255) DEFAULT NULL,
  `r_effect` varchar(255) DEFAULT NULL,
  `r_code_display` varchar(45) DEFAULT NULL,
  `responsible_person` varchar(200) DEFAULT NULL,
  `guidelines_risk` varchar(200) DEFAULT NULL,
  `duration_of_work` varchar(255) DEFAULT NULL,
  `stm_code` varchar(100) DEFAULT NULL,
  `im_code` varchar(100) DEFAULT NULL,
  `lh_code` varchar(100) DEFAULT NULL,
  `total_score` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `risk_ex`
--

LOCK TABLES `risk_ex` WRITE;
/*!40000 ALTER TABLE `risk_ex` DISABLE KEYS */;
INSERT INTO `risk_ex` VALUES (7,1,'RISK18',0,'117','227','337','447',NULL,'447','77','447','1','5','1',5),(8,1,'RISK19',0,'55','55','55','55',NULL,'55','55','55','1','3','2',6);
/*!40000 ALTER TABLE `risk_ex` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `strategy_type_master`
--

LOCK TABLES `strategy_type_master` WRITE;
/*!40000 ALTER TABLE `strategy_type_master` DISABLE KEYS */;
INSERT INTO `strategy_type_master` VALUES (1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','1','กลยุทธ์ที่1','อธิบายของกลยุทธ์1','2023-03-16 15:40:43','2023-03-16 15:40:43'),(2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','2','กลยุทธ์ที่2','อธิบายของกลยุทธ์121','2023-03-16 15:40:43','2023-03-16 15:40:43'),(3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','3','กลยุทธ์ที่3','อธิบายของกลยุทธ์121','2023-03-16 15:40:43','2023-03-16 15:40:43'),(4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','4','กลยุทธ์ที่4','อธิบายของกลยุทธ์121','2023-03-16 15:40:43','2023-03-16 15:40:43'),(12,'2c106cc61b26f9f71ec3da85c01c56cd','1','กลยุทธ์ที่1','อธิบายของกลยุทธ์1',NULL,NULL),(13,'2c106cc61b26f9f71ec3da85c01c56cd','2','กลยุทธ์ที่2','อธิบายของกลยุทธ์121',NULL,NULL),(14,'2c106cc61b26f9f71ec3da85c01c56cd','3','กลยุทธ์ที่3','อธิบายของกลยุทธ์121',NULL,NULL),(15,'2c106cc61b26f9f71ec3da85c01c56cd','4','กลยุทธ์ที่4','อธิบายของกลยุทธ์121',NULL,NULL);
/*!40000 ALTER TABLE `strategy_type_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `strategy_type_master_ex`
--

DROP TABLE IF EXISTS `strategy_type_master_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `strategy_type_master_ex` (
  `stm_id` int(11) NOT NULL AUTO_INCREMENT,
  `rce_id` int(11) DEFAULT NULL,
  `stm_code` varchar(100) DEFAULT NULL,
  `stm_name` varchar(100) DEFAULT NULL,
  `stm_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`stm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `strategy_type_master_ex`
--

LOCK TABLES `strategy_type_master_ex` WRITE;
/*!40000 ALTER TABLE `strategy_type_master_ex` DISABLE KEYS */;
INSERT INTO `strategy_type_master_ex` VALUES (1,1,'1','กลยุทธ์ที่1','อธิบายของกลยุทธ์1'),(2,1,'2','กลยุทธ์ที่2','อธิบายของกลยุทธ์121'),(3,1,'3','กลยุทธ์ที่3','อธิบายของกลยุทธ์121'),(4,1,'4','กลยุทธ์ที่4','อธิบายของกลยุทธ์121'),(85,25,'1','กลยุทธ์ที่1','อธิบายของกลยุทธ์1'),(86,25,'2','กลยุทธ์ที่2','อธิบายของกลยุทธ์121'),(87,25,'3','กลยุทธ์ที่3','อธิบายของกลยุทธ์121'),(88,25,'4','กลยุทธ์ที่4','อธิบายของกลยุทธ์121');
/*!40000 ALTER TABLE `strategy_type_master_ex` ENABLE KEYS */;
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
INSERT INTO `users` VALUES ('2c106cc61b26f9f71ec3da85c01c56cd',NULL,NULL,NULL,NULL,NULL,'2023-03-23 09:15:57','2023-03-23 09:15:57'),('4b7e2fd0-776a-420d-bd09-79a58da47ff6',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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

-- Dump completed on 2023-03-23 15:46:00
