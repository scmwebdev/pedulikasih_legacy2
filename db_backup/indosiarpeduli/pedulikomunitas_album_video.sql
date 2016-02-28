-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: indosiar_www
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.12.04.1

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
-- Table structure for table `pedulikomunitas_album_video`
--

DROP TABLE IF EXISTS `pedulikomunitas_album_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedulikomunitas_album_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(11) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `video_url_id` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `urutan` tinyint(4) NOT NULL DEFAULT '1',
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_album` (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedulikomunitas_album_video`
--

LOCK TABLES `pedulikomunitas_album_video` WRITE;
/*!40000 ALTER TABLE `pedulikomunitas_album_video` DISABLE KEYS */;
INSERT INTO `pedulikomunitas_album_video` VALUES (2,18,'http://www.youtube.com/watch?v=gzpJ_booO-g&feature=youtu.be','gzpJ_booO-g','',1,'2014-01-09 11:46:45'),(5,18,'http://www.youtube.com/watch?v=Tv8y7r_9bng&feature=youtu.be','Tv8y7r_9bng','',2,'2014-01-09 13:58:34'),(8,18,'http://www.youtube.com/watch?v=C6gTt9yGBgA','C6gTt9yGBgA','',3,'2014-01-13 18:11:40'),(9,18,'http://www.youtube.com/watch?v=T-ZfsxVOYsQ&feature=youtu.be','T-ZfsxVOYsQ','',4,'2014-01-13 18:11:53'),(10,19,'http://www.youtube.com/watch?v=PGxcQsS-zSQ','PGxcQsS-zSQ','',1,'2014-05-08 17:39:01'),(11,20,'http://www.youtube.com/watch?v=Bk5qjhybUH4','Bk5qjhybUH4','',1,'2014-05-16 11:05:51'),(12,20,'http://www.youtube.com/watch?v=oqNyOoX-4e4','oqNyOoX-4e4','',2,'2014-07-15 11:01:31'),(13,20,'http://www.youtube.com/watch?v=5eM1U6PXyZk','5eM1U6PXyZk','',3,'2014-07-15 11:01:01');
/*!40000 ALTER TABLE `pedulikomunitas_album_video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-28  0:52:20
