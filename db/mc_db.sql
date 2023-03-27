-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: mc_db
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
-- Table structure for table `manpower_cate_ex`
--

DROP TABLE IF EXISTS `manpower_cate_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manpower_cate_ex` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(100) NOT NULL,
  `mc_release_type_code` varchar(45) DEFAULT NULL,
  `mc_release_type_name` varchar(100) NOT NULL,
  `updated_date` date NOT NULL,
  `created_date` date NOT NULL,
  `uu_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manpower_cate_ex`
--

LOCK TABLES `manpower_cate_ex` WRITE;
/*!40000 ALTER TABLE `manpower_cate_ex` DISABLE KEYS */;
INSERT INTO `manpower_cate_ex` VALUES (3,'cccc','2','สาธารณะ','2023-03-15','2023-03-15','4b7e2fd0-776a-420d-bd09-79a58da47ff6'),(4,'cccc','2','สาธารณะ','2023-03-15','2023-03-15','4b7e2fd0-776a-420d-bd09-79a58da47ff6'),(9,'5555','2','สาธารณะ','2023-03-15','2023-03-15','4b7e2fd0-776a-420d-bd09-79a58da47ff6'),(11,'fortest','2','สาธารณะ','2023-03-15','2023-03-15','4b7e2fd0-776a-420d-bd09-79a58da47ff6'),(12,'ทดสอบจากเครื่อง pc ที่ทำงาน','2','สาธารณะ','2023-03-27','2023-03-27','2c106cc61b26f9f71ec3da85c01c56cd'),(13,'','2','สาธารณะ','2023-03-27','2023-03-27','2c106cc61b26f9f71ec3da85c01c56cd'),(14,'','2','สาธารณะ','2023-03-27','2023-03-27','2c106cc61b26f9f71ec3da85c01c56cd'),(15,'','2','สาธารณะ','2023-03-27','2023-03-27','2c106cc61b26f9f71ec3da85c01c56cd');
/*!40000 ALTER TABLE `manpower_cate_ex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `uu_id` varchar(100) NOT NULL,
  `t_code` varchar(100) NOT NULL,
  `tc_code` varchar(100) NOT NULL,
  `t_name` varchar(200) NOT NULL,
  `t_day` int(11) NOT NULL,
  `t_hour` int(11) NOT NULL,
  `t_minute` int(11) NOT NULL,
  `t_quantity` int(11) DEFAULT NULL,
  `t_x_time` int(11) NOT NULL,
  `manpower` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `admin_task_fk` (`uu_id`),
  CONSTRAINT `admin_task_fk` FOREIGN KEY (`uu_id`) REFERENCES `users` (`uu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` VALUES (63,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','20','14','ทดสอบการเพิ่มรายละเอียดงาน1',45,4,4,24,17280,0.20,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(64,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','21','14','ทดสอบการเพิ่มรายละเอียดงาน2',50,5,5,24,30000,0.34,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(65,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','22','14','ทดสอบการเพิ่มรายละเอียดงาน3',100,6,6,4,14400,0.16,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(66,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','23','16','',0,0,0,0,0,0.00,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(67,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','24','25','',0,0,0,0,0,0.00,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(68,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','25','25','',0,0,0,0,0,0.00,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(69,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','26','25','',0,0,0,0,0,0.00,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(70,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','27','14','',0,0,0,0,0,0.00,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(71,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','28','18','',0,0,0,0,0,0.00,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(72,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','29','18','',0,0,0,0,0,0.00,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(73,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','30','18','',0,0,0,0,0,0.00,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(74,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','31','20','ทดสอบ1',1,1,1,1,1,0.00,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(75,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','32','20','ทดสอบ2',1,1,1,1,1,0.00,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(76,'2c106cc61b26f9f71ec3da85c01c56cd','20','14','ทดสอบการเพิ่มรายละเอียดงาน1',45,4,4,24,7658,0.09,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(77,'2c106cc61b26f9f71ec3da85c01c56cd','21','14','ทดสอบการเพิ่มรายละเอียดงาน2',50,5,5,24,8522,0.10,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(78,'2c106cc61b26f9f71ec3da85c01c56cd','22','14','ทดสอบการเพิ่มรายละเอียดงาน3',100,6,6,4,2824,0.03,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(79,'2c106cc61b26f9f71ec3da85c01c56cd','23','16','',0,0,0,0,0,0.00,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(80,'2c106cc61b26f9f71ec3da85c01c56cd','24','25','',0,0,0,0,0,0.00,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(81,'2c106cc61b26f9f71ec3da85c01c56cd','25','25','',0,0,0,0,0,0.00,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(82,'2c106cc61b26f9f71ec3da85c01c56cd','26','25','',0,0,0,0,0,0.00,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(83,'2c106cc61b26f9f71ec3da85c01c56cd','27','14','',0,0,0,0,0,0.00,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(84,'2c106cc61b26f9f71ec3da85c01c56cd','28','18','',0,0,0,0,0,0.00,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(85,'2c106cc61b26f9f71ec3da85c01c56cd','29','18','',0,0,0,0,0,0.00,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(86,'2c106cc61b26f9f71ec3da85c01c56cd','30','18','',0,0,0,0,0,0.00,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(87,'2c106cc61b26f9f71ec3da85c01c56cd','31','20','ทดสอบ1',1,1,1,1,8,0.00,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(88,'2c106cc61b26f9f71ec3da85c01c56cd','32','20','ทดสอบ2',1,1,1,1,8,0.00,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(91,'2c106cc61b26f9f71ec3da85c01c56cd','91','36','xxx2',1,20,1,1,20,0.00,'2023-03-27 12:46:45','2023-03-27 12:46:45'),(92,'2c106cc61b26f9f71ec3da85c01c56cd','92','36','xxxx2',40,200,1,1,8000,0.09,'2023-03-27 12:46:57','2023-03-27 12:46:57'),(98,'2c106cc61b26f9f71ec3da85c01c56cd','98','36','',0,0,0,0,0,0.00,'2023-03-27 13:49:31','2023-03-27 13:49:31'),(99,'2c106cc61b26f9f71ec3da85c01c56cd','99','40','test',25,23,0,90,17820,0.20,'2023-03-27 13:55:10','2023-03-27 13:55:10'),(100,'2c106cc61b26f9f71ec3da85c01c56cd','100','40','xxx',99,88,1,30,23431,0.27,'2023-03-27 13:57:20','2023-03-27 13:57:20'),(101,'2c106cc61b26f9f71ec3da85c01c56cd','101','40','xxx',360,99,1,30,78571,0.89,'2023-03-27 14:00:39','2023-03-27 14:00:39'),(102,'2c106cc61b26f9f71ec3da85c01c56cd','102','40','yy',7,7,1,30,1681,0.02,'2023-03-27 14:00:45','2023-03-27 14:00:45'),(104,'2c106cc61b26f9f71ec3da85c01c56cd','104','29','7777',20,20,8,80,12811,0.15,'2023-03-27 15:51:59','2023-03-27 15:51:59');
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task_cate`
--

DROP TABLE IF EXISTS `task_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task_cate` (
  `tc_id` int(11) NOT NULL AUTO_INCREMENT,
  `uu_id` varchar(100) NOT NULL,
  `tc_code` varchar(100) NOT NULL,
  `tc_name` varchar(200) NOT NULL,
  `current_person` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`tc_id`),
  KEY `admin_task_cate_fk` (`uu_id`),
  CONSTRAINT `admin_task_cate_fk` FOREIGN KEY (`uu_id`) REFERENCES `users` (`uu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task_cate`
--

LOCK TABLES `task_cate` WRITE;
/*!40000 ALTER TABLE `task_cate` DISABLE KEYS */;
INSERT INTO `task_cate` VALUES (24,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','14','8898',1,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(25,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','20','444',1,'2023-03-15 14:39:31','2023-03-15 14:39:31'),(26,'2c106cc61b26f9f71ec3da85c01c56cd','14','8898',1,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(27,'2c106cc61b26f9f71ec3da85c01c56cd','20','444',1,'2023-03-27 09:26:38','2023-03-27 09:26:38'),(29,'2c106cc61b26f9f71ec3da85c01c56cd','29','ภารกิจ2',0,'2023-03-27 10:02:36','2023-03-27 10:02:36'),(40,'2c106cc61b26f9f71ec3da85c01c56cd','40','abc',1,'2023-03-27 13:54:49','2023-03-27 13:54:49');
/*!40000 ALTER TABLE `task_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task_cate_ex`
--

DROP TABLE IF EXISTS `task_cate_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task_cate_ex` (
  `tc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_id` int(11) DEFAULT NULL,
  `tc_code` varchar(100) NOT NULL,
  `tc_name` varchar(200) NOT NULL,
  `current_person` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`tc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task_cate_ex`
--

LOCK TABLES `task_cate_ex` WRITE;
/*!40000 ALTER TABLE `task_cate_ex` DISABLE KEYS */;
INSERT INTO `task_cate_ex` VALUES (7,11,'14','8898',1,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(8,11,'20','444',NULL,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(9,12,'14','8898',1,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(10,12,'20','444',NULL,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(12,13,'14','8898',1,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(13,13,'20','444',NULL,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(15,14,'14','8898',1,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(16,14,'20','444',NULL,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(18,15,'14','8898',1,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(19,15,'20','444',NULL,'2023-03-27 09:45:08','2023-03-27 09:45:08');
/*!40000 ALTER TABLE `task_cate_ex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task_ex`
--

DROP TABLE IF EXISTS `task_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task_ex` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_id` int(11) NOT NULL,
  `t_code` varchar(100) NOT NULL,
  `tc_code` varchar(100) NOT NULL,
  `t_name` varchar(200) NOT NULL,
  `t_day` int(11) NOT NULL,
  `t_hour` int(11) NOT NULL,
  `t_minute` int(11) NOT NULL,
  `t_x_time` int(11) NOT NULL,
  `t_quantity` int(11) NOT NULL,
  `manpower` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task_ex`
--

LOCK TABLES `task_ex` WRITE;
/*!40000 ALTER TABLE `task_ex` DISABLE KEYS */;
INSERT INTO `task_ex` VALUES (46,11,'20','14','ทดสอบการเพิ่มรายละเอียดงาน1',45,4,4,17280,24,0.20,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(47,11,'21','14','ทดสอบการเพิ่มรายละเอียดงาน2',50,5,5,30000,24,0.34,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(48,11,'22','14','ทดสอบการเพิ่มรายละเอียดงาน3',100,6,6,14400,4,0.16,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(49,11,'23','16','',0,0,0,0,0,0.00,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(50,11,'24','25','',0,0,0,0,0,0.00,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(51,11,'25','25','',0,0,0,0,0,0.00,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(52,11,'26','25','',0,0,0,0,0,0.00,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(53,11,'27','14','',0,0,0,0,0,0.00,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(54,11,'28','18','',0,0,0,0,0,0.00,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(55,11,'29','18','',0,0,0,0,0,0.00,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(56,11,'30','18','',0,0,0,0,0,0.00,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(57,11,'31','20','ทดสอบ1',1,1,1,1,1,0.00,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(58,11,'32','20','ทดสอบ2',1,1,1,1,1,0.00,'2023-03-15 14:17:48','2023-03-15 14:17:48'),(59,12,'20','14','ทดสอบการเพิ่มรายละเอียดงาน1',45,4,4,17280,24,0.20,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(60,12,'21','14','ทดสอบการเพิ่มรายละเอียดงาน2',50,5,5,30000,24,0.34,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(61,12,'22','14','ทดสอบการเพิ่มรายละเอียดงาน3',100,6,6,14400,4,0.16,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(62,12,'23','16','',0,0,0,0,0,0.00,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(63,12,'24','25','',0,0,0,0,0,0.00,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(64,12,'25','25','',0,0,0,0,0,0.00,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(65,12,'26','25','',0,0,0,0,0,0.00,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(66,12,'27','14','',0,0,0,0,0,0.00,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(67,12,'28','18','',0,0,0,0,0,0.00,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(68,12,'29','18','',0,0,0,0,0,0.00,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(69,12,'30','18','',0,0,0,0,0,0.00,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(70,12,'31','20','ทดสอบ1',1,1,1,1,1,0.00,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(71,12,'32','20','ทดสอบ2',1,1,1,1,1,0.00,'2023-03-27 09:31:51','2023-03-27 09:31:51'),(74,13,'20','14','ทดสอบการเพิ่มรายละเอียดงาน1',45,4,4,17280,24,0.20,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(75,13,'21','14','ทดสอบการเพิ่มรายละเอียดงาน2',50,5,5,30000,24,0.34,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(76,13,'22','14','ทดสอบการเพิ่มรายละเอียดงาน3',100,6,6,14400,4,0.16,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(77,13,'23','16','',0,0,0,0,0,0.00,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(78,13,'24','25','',0,0,0,0,0,0.00,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(79,13,'25','25','',0,0,0,0,0,0.00,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(80,13,'26','25','',0,0,0,0,0,0.00,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(81,13,'27','14','',0,0,0,0,0,0.00,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(82,13,'28','18','',0,0,0,0,0,0.00,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(83,13,'29','18','',0,0,0,0,0,0.00,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(84,13,'30','18','',0,0,0,0,0,0.00,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(85,13,'31','20','ทดสอบ1',1,1,1,1,1,0.00,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(86,13,'32','20','ทดสอบ2',1,1,1,1,1,0.00,'2023-03-27 09:44:51','2023-03-27 09:44:51'),(89,14,'20','14','ทดสอบการเพิ่มรายละเอียดงาน1',45,4,4,17280,24,0.20,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(90,14,'21','14','ทดสอบการเพิ่มรายละเอียดงาน2',50,5,5,30000,24,0.34,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(91,14,'22','14','ทดสอบการเพิ่มรายละเอียดงาน3',100,6,6,14400,4,0.16,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(92,14,'23','16','',0,0,0,0,0,0.00,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(93,14,'24','25','',0,0,0,0,0,0.00,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(94,14,'25','25','',0,0,0,0,0,0.00,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(95,14,'26','25','',0,0,0,0,0,0.00,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(96,14,'27','14','',0,0,0,0,0,0.00,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(97,14,'28','18','',0,0,0,0,0,0.00,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(98,14,'29','18','',0,0,0,0,0,0.00,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(99,14,'30','18','',0,0,0,0,0,0.00,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(100,14,'31','20','ทดสอบ1',1,1,1,1,1,0.00,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(101,14,'32','20','ทดสอบ2',1,1,1,1,1,0.00,'2023-03-27 09:44:54','2023-03-27 09:44:54'),(104,15,'20','14','ทดสอบการเพิ่มรายละเอียดงาน1',45,4,4,17280,24,0.20,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(105,15,'21','14','ทดสอบการเพิ่มรายละเอียดงาน2',50,5,5,30000,24,0.34,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(106,15,'22','14','ทดสอบการเพิ่มรายละเอียดงาน3',100,6,6,14400,4,0.16,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(107,15,'23','16','',0,0,0,0,0,0.00,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(108,15,'24','25','',0,0,0,0,0,0.00,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(109,15,'25','25','',0,0,0,0,0,0.00,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(110,15,'26','25','',0,0,0,0,0,0.00,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(111,15,'27','14','',0,0,0,0,0,0.00,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(112,15,'28','18','',0,0,0,0,0,0.00,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(113,15,'29','18','',0,0,0,0,0,0.00,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(114,15,'30','18','',0,0,0,0,0,0.00,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(115,15,'31','20','ทดสอบ1',1,1,1,1,1,0.00,'2023-03-27 09:45:08','2023-03-27 09:45:08'),(116,15,'32','20','ทดสอบ2',1,1,1,1,1,0.00,'2023-03-27 09:45:08','2023-03-27 09:45:08');
/*!40000 ALTER TABLE `task_ex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uu_id` varchar(100) NOT NULL,
  `rank` varchar(20) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
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
INSERT INTO `users` VALUES ('2c106cc61b26f9f71ec3da85c01c56cd',NULL,NULL,NULL,NULL,NULL,'2023-03-27 09:26:34','2023-03-27 09:26:34'),('4b7e2fd0-776a-420d-bd09-79a58da47ff6',NULL,NULL,NULL,NULL,NULL,'2023-03-27 00:00:00','2023-03-27 00:00:00');
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

-- Dump completed on 2023-03-27 15:54:05
