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
-- Table structure for table `pedulikomunitas_content`
--

DROP TABLE IF EXISTS `pedulikomunitas_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedulikomunitas_content` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul_url` varchar(100) NOT NULL,
  `ringkasan` text NOT NULL,
  `isi` text NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '1',
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kategori` (`kategori`),
  KEY `judul_url` (`judul_url`),
  KEY `publish` (`publish`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedulikomunitas_content`
--

LOCK TABLES `pedulikomunitas_content` WRITE;
/*!40000 ALTER TABLE `pedulikomunitas_content` DISABLE KEYS */;
INSERT INTO `pedulikomunitas_content` VALUES (1,'audit','Laporan Audit Peduli Komunitas 2013','laporan-audit-peduli-komunitas-2013','Laporan Penerimaan Dan Pengeluaran Kas Untuk Tahun-tahun Yang Berakhir Tanggal 31 Desember 2013 Dan 2012 Dan Laporan Auditor Independen','','Laporan Audit Peduli Komunitas 2013','',0,'2015-02-05 16:04:00'),(2,'kegiatan','Indosiar Peduli 2013','indosiar-peduli-2013','Laporan Kegiatan Indosiar Peduli selama tahun 2013','','indosiar-peduli-2013.pdf','',0,'2015-02-05 16:02:20');
/*!40000 ALTER TABLE `pedulikomunitas_content` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-28  0:52:33
