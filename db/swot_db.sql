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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
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
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('d520c7a8-421b-4563-b955-f5abc56b97ec','','','','','','2023-01-06 13:51:27','2023-01-06 13:51:27');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aspect_master`
--

DROP TABLE IF EXISTS `aspect_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aspect_master` (
  `ap_id` int(11) NOT NULL AUTO_INCREMENT,
  `ap_name` varchar(255) NOT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspect_master`
--

LOCK TABLES `aspect_master` WRITE;
/*!40000 ALTER TABLE `aspect_master` DISABLE KEYS */;
INSERT INTO `aspect_master` VALUES (1,'ปัจจัยภายใน จุดแข็ง'),(2,'ปัจจัยภายใน จุดอ่อน'),(3,'ปัจจัยภายนอก โอกาส'),(4,'ปัจจัยภายนอก อุปสรรค');
/*!40000 ALTER TABLE `aspect_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `business_type`
--

DROP TABLE IF EXISTS `business_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_type_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `business_type`
--

LOCK TABLES `business_type` WRITE;
/*!40000 ALTER TABLE `business_type` DISABLE KEYS */;
INSERT INTO `business_type` VALUES (1,'ด้านการตลาด'),(2,'ด้านไอที'),(3,'ด้านบริหารบุคคล'),(4,'ด้านการเงิน');
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
  `uuid` varchar(255) NOT NULL,
  `form_id` varchar(45) DEFAULT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_weight` decimal(10,2) DEFAULT NULL,
  `s_score` decimal(10,2) DEFAULT NULL,
  `s_total_score` decimal(10,2) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `swot`
--

LOCK TABLES `swot` WRITE;
/*!40000 ALTER TABLE `swot` DISABLE KEYS */;
INSERT INTO `swot` VALUES (50,'d520c7a8-421b-4563-b955-f5abc56b97ec','s1',1,'ปัจจัยภายใน จุดแข็ง1',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(51,'d520c7a8-421b-4563-b955-f5abc56b97ec','s2',1,'ปัจจัยภายใน จุดแข็ง2',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(52,'d520c7a8-421b-4563-b955-f5abc56b97ec','s3',1,'ปัจจัยภายใน จุดแข็ง3',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(53,'d520c7a8-421b-4563-b955-f5abc56b97ec','s4',1,'ปัจจัยภายใน จุดแข็ง4',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(54,'d520c7a8-421b-4563-b955-f5abc56b97ec','w1',2,'ปัจจัยภายใน จุดอ่อน1',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(55,'d520c7a8-421b-4563-b955-f5abc56b97ec','w2',2,'ปัจจัยภายใน จุดอ่อน2',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(56,'d520c7a8-421b-4563-b955-f5abc56b97ec','w3',2,'ปัจจัยภายใน จุดอ่อน3',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(57,'d520c7a8-421b-4563-b955-f5abc56b97ec','w4',2,'ปัจจัยภายใน จุดอ่อน4',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(58,'d520c7a8-421b-4563-b955-f5abc56b97ec','o1',3,'ปัจจัยภายนอก โอกาส1',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(59,'d520c7a8-421b-4563-b955-f5abc56b97ec','o2',3,'ปัจจัยภายนอก โอกาส2',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(60,'d520c7a8-421b-4563-b955-f5abc56b97ec','o3',3,'ปัจจัยภายนอก โอกาส3',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(61,'d520c7a8-421b-4563-b955-f5abc56b97ec','o4',3,'ปัจจัยภายนอก โอกาส4',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(62,'d520c7a8-421b-4563-b955-f5abc56b97ec','t1',4,'ปัจจัยภายนอก อุปสรรค1',0.25,5.00,1.25,'2023-01-09 14:51:25','2023-01-09 14:51:25'),(63,'d520c7a8-421b-4563-b955-f5abc56b97ec','t2',4,'ปัจจัยภายนอก อุปสรรค2',0.25,5.00,1.25,'2023-01-09 14:51:26','2023-01-09 14:51:26'),(64,'d520c7a8-421b-4563-b955-f5abc56b97ec','t3',4,'ปัจจัยภายนอก อุปสรรค3',0.25,5.00,1.25,'2023-01-09 14:51:26','2023-01-09 14:51:26'),(65,'d520c7a8-421b-4563-b955-f5abc56b97ec','t4',4,'ปัจจัยภายนอก อุปสรรค4',0.25,5.00,1.25,'2023-01-09 14:51:26','2023-01-09 14:51:26');
/*!40000 ALTER TABLE `swot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `swot_example`
--

DROP TABLE IF EXISTS `swot_example`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `swot_example` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` varchar(255) DEFAULT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `seq_id` int(11) DEFAULT NULL,
  `form_id` varchar(45) DEFAULT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_weight` decimal(10,2) DEFAULT NULL,
  `s_score` decimal(10,2) DEFAULT NULL,
  `s_total_score` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `swot_example`
--

LOCK TABLES `swot_example` WRITE;
/*!40000 ALTER TABLE `swot_example` DISABLE KEYS */;
INSERT INTO `swot_example` VALUES (1,'1',1,1,'s1','ปัจจัยภายใน จุดแข็ง1',0.25,5.00,1.25),(2,'1',1,2,'s2','ปัจจัยภายใน จุดแข็ง2',0.25,5.00,1.25),(3,'1',1,3,'s3','ปัจจัยภายใน จุดแข็ง3',0.25,5.00,1.25),(4,'1',1,4,'s4','ปัจจัยภายใน จุดแข็ง4',0.25,5.00,1.25),(5,'1',2,1,'w1','ปัจจัยภายใน จุดอ่อน1',0.25,5.00,1.25),(6,'1',2,2,'w2','ปัจจัยภายใน จุดอ่อน2',0.25,5.00,1.25),(7,'1',2,3,'w3','ปัจจัยภายใน จุดอ่อน3',0.25,5.00,1.25),(8,'1',2,4,'w4','ปัจจัยภายใน จุดอ่อน4',0.25,5.00,1.25),(9,'1',3,1,'o1','ปัจจัยภายนอก โอกาส1',0.25,5.00,1.25),(10,'1',3,2,'o2','ปัจจัยภายนอก โอกาส2',0.25,5.00,1.25),(11,'1',3,3,'o3','ปัจจัยภายนอก โอกาส3',0.25,5.00,1.25),(12,'1',3,4,'o4','ปัจจัยภายนอก โอกาส4',0.25,5.00,1.25),(13,'1',4,1,'t1','ปัจจัยภายนอก อุปสรรค1',0.25,5.00,1.25),(14,'1',4,2,'t2','ปัจจัยภายนอก อุปสรรค2',0.25,5.00,1.25),(15,'1',4,3,'t3','ปัจจัยภายนอก อุปสรรค3',0.25,5.00,1.25),(16,'1',4,4,'t4','ปัจจัยภายนอก อุปสรรค4',0.25,5.00,1.25),(17,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `swot_example` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-09 15:11:41
