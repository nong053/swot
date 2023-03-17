-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: swot_db
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
-- Table structure for table `aspect_master`
--

DROP TABLE IF EXISTS `aspect_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aspect_master` (
  `ap_id` int(11) NOT NULL AUTO_INCREMENT,
  `ap_code` int(11) DEFAULT NULL,
  `uu_id` varchar(100) DEFAULT NULL,
  `ap_name` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspect_master`
--

LOCK TABLES `aspect_master` WRITE;
/*!40000 ALTER TABLE `aspect_master` DISABLE KEYS */;
INSERT INTO `aspect_master` VALUES (9,1,'d520c7a8-421b-4563-b955-f5abc56b97ec','ปัจจัยภายใน จุดแข็ง','2023-03-17 13:43:56','2023-03-17 13:43:56'),(10,2,'d520c7a8-421b-4563-b955-f5abc56b97ec','ปัจจัยภายใน จุดอ่อน','2023-03-17 13:43:56','2023-03-17 13:43:56'),(11,3,'d520c7a8-421b-4563-b955-f5abc56b97ec','ปัจจัยภายนอก โอกาส','2023-03-17 13:43:56','2023-03-17 13:43:56'),(12,4,'d520c7a8-421b-4563-b955-f5abc56b97ec','ปัจจัยภายนอก อุปสรรค','2023-03-17 13:43:56','2023-03-17 13:43:56');
/*!40000 ALTER TABLE `aspect_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aspect_master_ex`
--

DROP TABLE IF EXISTS `aspect_master_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aspect_master_ex` (
  `ap_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) DEFAULT NULL,
  `ap_code` int(11) DEFAULT NULL,
  `ap_name` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspect_master_ex`
--

LOCK TABLES `aspect_master_ex` WRITE;
/*!40000 ALTER TABLE `aspect_master_ex` DISABLE KEYS */;
INSERT INTO `aspect_master_ex` VALUES (1,6,1,'ปัจจัยภายใน จุดแข็ง','2023-03-17 13:36:14','2023-03-17 13:36:14'),(2,6,2,'ปัจจัยภายใน จุดอ่อน','2023-03-17 13:36:14','2023-03-17 13:36:14'),(3,6,3,'ปัจจัยภายนอก โอกาส','2023-03-17 13:36:14','2023-03-17 13:36:14'),(4,6,4,'ปัจจัยภายนอก อุปสรรค','2023-03-17 13:36:14','2023-03-17 13:36:14');
/*!40000 ALTER TABLE `aspect_master_ex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `business_type`
--

DROP TABLE IF EXISTS `business_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business_type` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `uu_id` varchar(100) DEFAULT NULL,
  `b_type_name` varchar(255) DEFAULT NULL,
  `b_release_type_code` varchar(45) DEFAULT NULL,
  `b_release_type_name` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `business_type`
--

LOCK TABLES `business_type` WRITE;
/*!40000 ALTER TABLE `business_type` DISABLE KEYS */;
INSERT INTO `business_type` VALUES (1,'d520c7a8-421b-4563-b955-f5abc56b97ec','ด้านการตลาด','2','สาธารณะ',NULL,NULL),(2,'d520c7a8-421b-4563-b955-f5abc56b97ec','ด้านไอที','2','สาธารณะ',NULL,NULL),(3,'d520c7a8-421b-4563-b955-f5abc56b97ec','ด้านบริหารบุคคล','2','สาธารณะ',NULL,NULL),(4,'d520c7a8-421b-4563-b955-f5abc56b97ec','ด้านการเงิน','2','สาธารณะ',NULL,NULL),(5,'d520c7a8-421b-4563-b955-f5abc56b97ec','xxxxx1111','1','ผู้ดูแลระบบ','2023-03-17 12:36:11','2023-03-17 12:36:11'),(6,'d520c7a8-421b-4563-b955-f5abc56b97ec','xxxxx222222','1','ผู้ดูแลระบบ','2023-03-17 12:38:43','2023-03-17 12:38:43');
/*!40000 ALTER TABLE `business_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `swot`
--

DROP TABLE IF EXISTS `swot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `swot` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_code` varchar(45) DEFAULT NULL,
  `ap_code` int(11) DEFAULT NULL,
  `uu_id` varchar(255) NOT NULL,
  `form_id` varchar(45) DEFAULT NULL,
  `seq_id` int(11) DEFAULT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_weight` decimal(10,2) DEFAULT NULL,
  `s_score` decimal(10,2) DEFAULT NULL,
  `s_total_score` decimal(10,2) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `swot_detail` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=972 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `swot`
--

LOCK TABLES `swot` WRITE;
/*!40000 ALTER TABLE `swot` DISABLE KEYS */;
INSERT INTO `swot` VALUES (370,NULL,3,'1','2',NULL,'4',5.00,6.00,7.00,'0000-00-00 00:00:00','0000-00-00 00:00:00','10'),(371,NULL,3,'1','2',NULL,'4',5.00,6.00,7.00,'0000-00-00 00:00:00','0000-00-00 00:00:00','10'),(372,NULL,3,'1','2',NULL,'4',5.00,6.00,7.00,'0000-00-00 00:00:00','0000-00-00 00:00:00','10'),(625,'1',1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','s1',NULL,'ปัจจัยภายใน จุดแข็ง1',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(626,'2',1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','s2',NULL,'ปัจจัยภายใน จุดแข็ง2',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(627,'3',1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','s3',NULL,'ปัจจัยภายใน จุดแข็ง3',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(628,'4',1,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','s4',NULL,'ปัจจัยภายใน จุดแข็ง4',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(629,'5',2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','w1',NULL,'ปัจจัยภายใน จุดอ่อน1',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(630,'6',2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','w2',NULL,'ปัจจัยภายใน จุดอ่อน2',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(631,'7',2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','w3',NULL,'ปัจจัยภายใน จุดอ่อน3',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(632,'8',2,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','w4',NULL,'ปัจจัยภายใน จุดอ่อน4',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(633,'9',3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','o1',NULL,'ปัจจัยภายนอก โอกาส1',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(634,'10',3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','o2',NULL,'ปัจจัยภายนอก โอกาส2',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(635,'11',3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','o3',NULL,'ปัจจัยภายนอก โอกาส3',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(636,'12',3,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','o4',NULL,'ปัจจัยภายนอก โอกาส4',0.25,5.00,1.25,'2023-03-17 08:33:34','2023-03-17 08:33:34',''),(637,'13',4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','t1',NULL,'ปัจจัยภายนอก อุปสรรค1',0.25,5.00,1.25,'2023-03-17 08:33:35','2023-03-17 08:33:35',''),(638,'14',4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','t2',NULL,'ปัจจัยภายนอก อุปสรรค2',0.25,5.00,1.25,'2023-03-17 08:33:35','2023-03-17 08:33:35',''),(639,'15',4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','t3',NULL,'ปัจจัยภายนอก อุปสรรค3',0.25,5.00,1.25,'2023-03-17 08:33:35','2023-03-17 08:33:35',''),(640,'16',4,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','t4',NULL,'ปัจจัยภายนอก อุปสรรค4',0.25,5.00,1.25,'2023-03-17 08:33:35','2023-03-17 08:33:35',''),(952,'',1,'d520c7a8-421b-4563-b955-f5abc56b97ec','s1',0,'ปัจจัยภายใน จุดแข็ง1',0.25,1.00,0.25,'2023-03-17 13:43:56','2023-03-17 13:43:56','ddddd'),(953,'',1,'d520c7a8-421b-4563-b955-f5abc56b97ec','s2',0,'ปัจจัยภายใน จุดแข็ง2',0.25,1.00,0.25,'2023-03-17 13:43:56','2023-03-17 13:43:56','ddddd'),(954,'',1,'d520c7a8-421b-4563-b955-f5abc56b97ec','s3',0,'ปัจจัยภายใน จุดแข็ง3',0.25,1.00,0.25,'2023-03-17 13:43:56','2023-03-17 13:43:56','ddddd'),(955,'',1,'d520c7a8-421b-4563-b955-f5abc56b97ec','s4',0,'ปัจจัยภายใน จุดแข็ง4',0.25,1.00,0.25,'2023-03-17 13:43:56','2023-03-17 13:43:56','ddddd'),(956,'',1,'d520c7a8-421b-4563-b955-f5abc56b97ec','s5',0,'',0.00,0.00,0.00,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(957,'',2,'d520c7a8-421b-4563-b955-f5abc56b97ec','w1',0,'ปัจจัยภายใน จุดอ่อน1',0.25,1.00,0.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(958,'',2,'d520c7a8-421b-4563-b955-f5abc56b97ec','w2',0,'ปัจจัยภายใน จุดอ่อน2',0.25,1.00,0.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(959,'',2,'d520c7a8-421b-4563-b955-f5abc56b97ec','w3',0,'ปัจจัยภายใน จุดอ่อน3',0.25,5.00,1.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(960,'',2,'d520c7a8-421b-4563-b955-f5abc56b97ec','w4',0,'ปัจจัยภายใน จุดอ่อน4',0.25,5.00,1.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(961,'',2,'d520c7a8-421b-4563-b955-f5abc56b97ec','w5',0,'',0.00,0.00,0.00,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(962,'',3,'d520c7a8-421b-4563-b955-f5abc56b97ec','o1',0,'ปัจจัยภายนอก โอกาส1',0.25,5.00,1.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(963,'',3,'d520c7a8-421b-4563-b955-f5abc56b97ec','o2',0,'ปัจจัยภายนอก โอกาส2',0.25,5.00,1.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(964,'',3,'d520c7a8-421b-4563-b955-f5abc56b97ec','o3',0,'ปัจจัยภายนอก โอกาส3',0.25,5.00,1.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(965,'',3,'d520c7a8-421b-4563-b955-f5abc56b97ec','o4',0,'ปัจจัยภายนอก โอกาส4',0.25,5.00,1.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(966,'',3,'d520c7a8-421b-4563-b955-f5abc56b97ec','o5',0,'',0.00,0.00,0.00,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(967,'',4,'d520c7a8-421b-4563-b955-f5abc56b97ec','t1',0,'ปัจจัยภายนอก อุปสรรค1',0.25,5.00,1.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(968,'',4,'d520c7a8-421b-4563-b955-f5abc56b97ec','t2',0,'ปัจจัยภายนอก อุปสรรค2',0.25,5.00,1.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(969,'',4,'d520c7a8-421b-4563-b955-f5abc56b97ec','t3',0,'ปัจจัยภายนอก อุปสรรค3',0.25,5.00,1.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(970,'',4,'d520c7a8-421b-4563-b955-f5abc56b97ec','t4',0,'ปัจจัยภายนอก อุปสรรค4',0.25,5.00,1.25,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd'),(971,'',4,'d520c7a8-421b-4563-b955-f5abc56b97ec','t5',0,'',0.00,0.00,0.00,'2023-03-17 13:43:57','2023-03-17 13:43:57','ddddd');
/*!40000 ALTER TABLE `swot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `swot_ex`
--

DROP TABLE IF EXISTS `swot_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `swot_ex` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_code` varchar(45) DEFAULT NULL,
  `ap_code` int(11) DEFAULT NULL,
  `b_id` varchar(255) DEFAULT NULL,
  `seq_id` int(11) DEFAULT NULL,
  `form_id` varchar(45) DEFAULT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_weight` decimal(10,2) DEFAULT NULL,
  `s_score` decimal(10,2) DEFAULT NULL,
  `s_total_score` decimal(10,2) DEFAULT NULL,
  `swot_detail` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `swot_ex`
--

LOCK TABLES `swot_ex` WRITE;
/*!40000 ALTER TABLE `swot_ex` DISABLE KEYS */;
INSERT INTO `swot_ex` VALUES (1,'1',1,'1',1,'s1','ปัจจัยภายใน จุดแข็ง1',0.25,5.00,1.25,NULL,NULL,NULL),(2,'2',1,'1',2,'s2','ปัจจัยภายใน จุดแข็ง2',0.25,5.00,1.25,NULL,NULL,NULL),(3,'3',1,'1',3,'s3','ปัจจัยภายใน จุดแข็ง3',0.25,5.00,1.25,NULL,NULL,NULL),(4,'4',1,'1',4,'s4','ปัจจัยภายใน จุดแข็ง4',0.25,5.00,1.25,NULL,NULL,NULL),(5,'5',2,'1',1,'w1','ปัจจัยภายใน จุดอ่อน1',0.25,5.00,1.25,NULL,NULL,NULL),(6,'6',2,'1',2,'w2','ปัจจัยภายใน จุดอ่อน2',0.25,5.00,1.25,NULL,NULL,NULL),(7,'7',2,'1',3,'w3','ปัจจัยภายใน จุดอ่อน3',0.25,5.00,1.25,NULL,NULL,NULL),(8,'8',2,'1',4,'w4','ปัจจัยภายใน จุดอ่อน4',0.25,5.00,1.25,NULL,NULL,NULL),(9,'9',3,'1',1,'o1','ปัจจัยภายนอก โอกาส1',0.25,5.00,1.25,NULL,NULL,NULL),(10,'10',3,'1',2,'o2','ปัจจัยภายนอก โอกาส2',0.25,5.00,1.25,NULL,NULL,NULL),(11,'11',3,'1',3,'o3','ปัจจัยภายนอก โอกาส3',0.25,5.00,1.25,NULL,NULL,NULL),(12,'12',3,'1',4,'o4','ปัจจัยภายนอก โอกาส4',0.25,5.00,1.25,NULL,NULL,NULL),(13,'13',4,'1',1,'t1','ปัจจัยภายนอก อุปสรรค1',0.25,5.00,1.25,NULL,NULL,NULL),(14,'14',4,'1',2,'t2','ปัจจัยภายนอก อุปสรรค2',0.25,5.00,1.25,NULL,NULL,NULL),(15,'15',4,'1',3,'t3','ปัจจัยภายนอก อุปสรรค3',0.25,5.00,1.25,NULL,NULL,NULL),(16,'16',4,'1',4,'t4','ปัจจัยภายนอก อุปสรรค4',0.25,5.00,1.25,NULL,NULL,NULL),(17,'17',1,'2',1,'c1','มุมมองของลูกค้า1',0.25,5.00,1.25,NULL,NULL,NULL),(18,'18',1,'2',2,'c2','มุมมองของลูกค้า2',0.25,5.00,1.25,NULL,NULL,NULL),(19,'19',1,'2',3,'c3','มุมมองของลูกค้า3',0.25,5.00,1.25,NULL,NULL,NULL),(20,'20',1,'2',4,'c4','มุมมองของลูกค้า4',0.25,5.00,1.25,NULL,NULL,NULL),(21,'21',2,'2',1,'i1','มุมมองภายใน1',0.25,5.00,1.25,NULL,NULL,NULL),(22,'22',2,'2',2,'i2','มุมมองภายใน2',0.25,5.00,1.25,NULL,NULL,NULL),(23,'23',2,'2',3,'i3','มุมมองภายใน3',0.25,5.00,1.25,NULL,NULL,NULL),(24,'24',2,'2',4,'i4','มุมมองภายใน4',0.25,5.00,1.25,NULL,NULL,NULL),(25,'25',3,'2',1,'il1','มุมมองด้านนวัฒกรรมและการเรียนรู้1',0.25,5.00,1.25,NULL,NULL,NULL),(26,'26',3,'2',2,'il2','มุมมองด้านนวัฒกรรมและการเรียนรู้2',0.25,5.00,1.25,NULL,NULL,NULL),(27,'27',3,'2',3,'il3','มุมมองด้านนวัฒกรรมและการเรียนรู้3',0.25,5.00,1.25,NULL,NULL,NULL),(28,'28',3,'2',4,'il4','มุมมองด้านนวัฒกรรมและการเรียนรู้4',0.25,5.00,1.25,NULL,NULL,NULL),(29,'29',4,'2',1,'f1','มุมมองทางการเงิน1',0.25,5.00,1.25,NULL,NULL,NULL),(30,'30',4,'2',2,'f2','มุมมองทางการเงิน2',0.25,5.00,1.25,NULL,NULL,NULL),(31,'31',4,'2',3,'f3','มุมมองทางการเงิน3',0.25,5.00,1.25,NULL,NULL,NULL),(32,'32',4,'2',4,'f4','มุมมองทางการเงิน4',0.25,5.00,1.25,NULL,NULL,NULL),(95,NULL,1,'5',NULL,'s1','ปัจจัยภายใน จุดแข็ง1',0.25,1.00,0.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(96,NULL,1,'5',NULL,'s2','ปัจจัยภายใน จุดแข็ง2',0.25,1.00,0.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(97,NULL,1,'5',NULL,'s3','ปัจจัยภายใน จุดแข็ง3',0.25,1.00,0.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(98,NULL,1,'5',NULL,'s4','ปัจจัยภายใน จุดแข็ง4',0.25,1.00,0.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(99,NULL,1,'5',NULL,'s5','',0.00,0.00,0.00,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(100,NULL,2,'5',NULL,'w1','ปัจจัยภายใน จุดอ่อน1',0.25,1.00,0.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(101,NULL,2,'5',NULL,'w2','ปัจจัยภายใน จุดอ่อน2',0.25,1.00,0.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(102,NULL,2,'5',NULL,'w3','ปัจจัยภายใน จุดอ่อน3',0.25,5.00,1.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(103,NULL,2,'5',NULL,'w4','ปัจจัยภายใน จุดอ่อน4',0.25,5.00,1.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(104,NULL,2,'5',NULL,'w5','',0.00,0.00,0.00,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(105,NULL,3,'5',NULL,'o1','ปัจจัยภายนอก โอกาส1',0.25,5.00,1.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(106,NULL,3,'5',NULL,'o2','ปัจจัยภายนอก โอกาส2',0.25,5.00,1.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(107,NULL,3,'5',NULL,'o3','ปัจจัยภายนอก โอกาส3',0.25,5.00,1.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(108,NULL,3,'5',NULL,'o4','ปัจจัยภายนอก โอกาส4',0.25,5.00,1.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(109,NULL,3,'5',NULL,'o5','',0.00,0.00,0.00,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(110,NULL,4,'5',NULL,'t1','ปัจจัยภายนอก อุปสรรค1',0.25,5.00,1.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(111,NULL,4,'5',NULL,'t2','ปัจจัยภายนอก อุปสรรค2',0.25,5.00,1.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(112,NULL,4,'5',NULL,'t3','ปัจจัยภายนอก อุปสรรค3',0.25,5.00,1.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(113,NULL,4,'5',NULL,'t4','ปัจจัยภายนอก อุปสรรค4',0.25,5.00,1.25,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(114,NULL,4,'5',NULL,'t5','',0.00,0.00,0.00,'ddddd','2023-03-17 12:46:34','2023-03-17 12:46:34'),(157,NULL,1,'6',NULL,'s1','ปัจจัยภายใน จุดแข็ง1',0.25,1.00,0.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(158,NULL,1,'6',NULL,'s2','ปัจจัยภายใน จุดแข็ง2',0.25,1.00,0.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(159,NULL,1,'6',NULL,'s3','ปัจจัยภายใน จุดแข็ง3',0.25,1.00,0.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(160,NULL,1,'6',NULL,'s4','ปัจจัยภายใน จุดแข็ง4',0.25,1.00,0.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(161,NULL,1,'6',NULL,'s5','',0.00,0.00,0.00,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(162,NULL,2,'6',NULL,'w1','ปัจจัยภายใน จุดอ่อน1',0.25,1.00,0.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(163,NULL,2,'6',NULL,'w2','ปัจจัยภายใน จุดอ่อน2',0.25,1.00,0.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(164,NULL,2,'6',NULL,'w3','ปัจจัยภายใน จุดอ่อน3',0.25,5.00,1.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(165,NULL,2,'6',NULL,'w4','ปัจจัยภายใน จุดอ่อน4',0.25,5.00,1.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(166,NULL,2,'6',NULL,'w5','',0.00,0.00,0.00,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(167,NULL,3,'6',NULL,'o1','ปัจจัยภายนอก โอกาส1',0.25,5.00,1.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(168,NULL,3,'6',NULL,'o2','ปัจจัยภายนอก โอกาส2',0.25,5.00,1.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(169,NULL,3,'6',NULL,'o3','ปัจจัยภายนอก โอกาส3',0.25,5.00,1.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(170,NULL,3,'6',NULL,'o4','ปัจจัยภายนอก โอกาส4',0.25,5.00,1.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(171,NULL,3,'6',NULL,'o5','',0.00,0.00,0.00,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(172,NULL,4,'6',NULL,'t1','ปัจจัยภายนอก อุปสรรค1',0.25,5.00,1.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(173,NULL,4,'6',NULL,'t2','ปัจจัยภายนอก อุปสรรค2',0.25,5.00,1.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(174,NULL,4,'6',NULL,'t3','ปัจจัยภายนอก อุปสรรค3',0.25,5.00,1.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(175,NULL,4,'6',NULL,'t4','ปัจจัยภายนอก อุปสรรค4',0.25,5.00,1.25,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14'),(176,NULL,4,'6',NULL,'t5','',0.00,0.00,0.00,'ddddd','2023-03-17 13:36:14','2023-03-17 13:36:14');
/*!40000 ALTER TABLE `swot_ex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uu_id` varchar(255) NOT NULL,
  `rank` varchar(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`uu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('4b7e2fd0-776a-420d-bd09-79a58da47ff6','','','','','','2023-02-06 12:04:12','2023-02-06 12:04:12'),('d520c7a8-421b-4563-b955-f5abc56b97ec','','','','','','2023-01-06 13:51:27','2023-01-06 13:51:27');
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

-- Dump completed on 2023-03-17 13:52:34
