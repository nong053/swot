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
-- Table structure for table `manpowerl_cate_ex`
--

DROP TABLE IF EXISTS `manpowerl_cate_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manpowerl_cate_ex` (
  `mc_id` int(11) NOT NULL,
  `mc_name` varchar(100) NOT NULL,
  `mc_code` varchar(100) NOT NULL,
  `updated_date` date NOT NULL,
  `created_date_1` date NOT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manpowerl_cate_ex`
--

LOCK TABLES `manpowerl_cate_ex` WRITE;
/*!40000 ALTER TABLE `manpowerl_cate_ex` DISABLE KEYS */;
/*!40000 ALTER TABLE `manpowerl_cate_ex` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` VALUES (20,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','20','14','ทดสอบการเพิ่มรายละเอียดงาน1',45,4,4,24,17280,0.20,'2023-03-02 13:38:53','2023-03-02 13:38:53'),(21,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','21','14','ทดสอบการเพิ่มรายละเอียดงาน2',50,5,5,24,30000,0.34,'2023-03-02 13:44:55','2023-03-02 13:44:55'),(22,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','22','14','ทดสอบการเพิ่มรายละเอียดงาน3',100,6,6,4,14400,0.16,'2023-03-02 13:44:58','2023-03-02 13:44:58'),(23,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','23','16','',0,0,0,0,0,0.00,'2023-03-03 08:36:55','2023-03-03 08:36:55'),(24,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','24','25','',0,0,0,0,0,0.00,'2023-03-03 08:40:37','2023-03-03 08:40:37'),(25,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','25','25','',0,0,0,0,0,0.00,'2023-03-03 08:41:01','2023-03-03 08:41:01'),(26,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','26','25','',0,0,0,0,0,0.00,'2023-03-03 08:42:04','2023-03-03 08:42:04');
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task_cate`
--

LOCK TABLES `task_cate` WRITE;
/*!40000 ALTER TABLE `task_cate` DISABLE KEYS */;
INSERT INTO `task_cate` VALUES (14,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','14','8898',1,'2023-02-28 15:12:53','2023-02-28 15:12:53'),(15,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','15','88987',1,'2023-02-28 15:12:58','2023-02-28 15:12:58'),(16,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','16','889877',3,'2023-02-28 15:13:00','2023-02-28 15:13:00'),(17,'4b7e2fd0-776a-420d-bd09-79a58da47ff6','17','999',NULL,'2023-03-01 14:40:47','2023-03-01 14:40:47');
/*!40000 ALTER TABLE `task_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task_cate_ex`
--

DROP TABLE IF EXISTS `task_cate_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task_cate_ex` (
  `tc_id` int(11) NOT NULL,
  `tc_code` varchar(100) NOT NULL,
  `tc_name` varchar(200) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`tc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task_cate_ex`
--

LOCK TABLES `task_cate_ex` WRITE;
/*!40000 ALTER TABLE `task_cate_ex` DISABLE KEYS */;
/*!40000 ALTER TABLE `task_cate_ex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task_ex`
--

DROP TABLE IF EXISTS `task_ex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task_ex` (
  `t_id` int(11) NOT NULL,
  `mc_id` int(11) NOT NULL,
  `t_code` varchar(100) NOT NULL,
  `tc_code` varchar(100) NOT NULL,
  `t_name` varchar(200) NOT NULL,
  `t_person` int(11) NOT NULL,
  `t_day` int(11) NOT NULL,
  `t_hour` int(11) NOT NULL,
  `t_minute` int(11) NOT NULL,
  `t_x_time` int(11) NOT NULL,
  `t_x_quantity` int(11) NOT NULL,
  `manpower` decimal(10,2) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `manpower_cal_cate_task_ex_fk` (`mc_id`),
  CONSTRAINT `manpower_cal_cate_task_ex_fk` FOREIGN KEY (`mc_id`) REFERENCES `manpowerl_cate_ex` (`mc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task_ex`
--

LOCK TABLES `task_ex` WRITE;
/*!40000 ALTER TABLE `task_ex` DISABLE KEYS */;
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
  `craeted_date` time NOT NULL,
  `updated_date` time NOT NULL,
  PRIMARY KEY (`uu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('4b7e2fd0-776a-420d-bd09-79a58da47ff6',NULL,NULL,NULL,NULL,NULL,'00:00:00','00:00:00');
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

-- Dump completed on 2023-03-03 15:31:19
