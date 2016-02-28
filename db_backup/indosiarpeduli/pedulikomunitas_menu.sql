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
-- Table structure for table `pedulikomunitas_menu`
--

DROP TABLE IF EXISTS `pedulikomunitas_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedulikomunitas_menu` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_main` smallint(6) NOT NULL DEFAULT '0',
  `judul` varchar(100) NOT NULL,
  `judul_menu` varchar(50) NOT NULL,
  `judul_url` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `status_sort` tinyint(1) NOT NULL DEFAULT '1',
  `publish` tinyint(1) NOT NULL DEFAULT '1',
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_main` (`id_main`),
  KEY `publish` (`publish`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedulikomunitas_menu`
--

LOCK TABLES `pedulikomunitas_menu` WRITE;
/*!40000 ALTER TABLE `pedulikomunitas_menu` DISABLE KEYS */;
INSERT INTO `pedulikomunitas_menu` VALUES (8,8,'Laporan Audit','Laporan Audit','laporan-audit','audit','','laporan-audit.pdf',6,1,'2012-07-24 15:49:32'),(9,0,'Kontak','Kontak','kontak','','<p><strong>PT Indosiar Visual Mandiri</strong></p>\n<p><strong>(Indosiar Peduli)<br /></strong></p>\n<p>Jl. Damai No. 11, Daan Mogot</p>\n<p>Jakarta 11510</p>\n<p>Telp. (021) 565-5711 atau (021) 566-6878</p>\n<p>Fax. (021) 5697-6827</p>\n<p>Web. <a href=\"http://www.indosiar.com/pedulikomunitas\">www.indosiar.com/pedulikomunitas</a></p>\n<p>&nbsp;</p>\n<p><strong>\"Kepedulian Kita, Harapan Mereka\"<br /></strong></p>\n<p>Rekening Bank<strong> BCA 001 718 3838 a/n PT Indosiar Visual Mandiri </strong>(Peduli Komunitas)</p>\n<p>*Kode Bank BCA 014</p>\n<p><span style=\"color: #ff0000;\">HATI-HATI TERHADAP PENIPUAN YANG MENGATASNAMAKAN PEDULI KOMUNITAS, KAMI TIDAK PERNAH MENGGUNAKAN SMS/REKENING ATAS NAMA PERORANGAN DALAM MENGGALANG DANA PEMIRSA.</span></p>\n<p>&nbsp;</p>\n<p><strong>Follow us on</strong></p>\n<p>Facebook : <a href=\"https://www.facebook.com/IndosiarPeduli\">Indosiar Peduli</a></p>\n<p>Twitter&nbsp;&nbsp; &nbsp; : <a href=\"https://twitter.com/Indosiar_Peduli\"><span class=\"screen-name\">@Indosiar_Peduli</span></a></p>\n<p>Youtube &nbsp;&nbsp; : <a href=\"http://www.youtube.com/user/IndosiarPeduli\">Indosiar Peduli</a></p>\n<p>&nbsp;</p>','',6,0,'2015-02-05 16:00:34'),(15,0,'Kegiatan Peduli Komunitas','Kegiatan','kegiatan','gallery','','',2,0,'2015-02-05 16:01:34'),(18,0,'Sejarah','Sejarah','sejarah','','<p style=\"text-align: justify;\"><span style=\"font-size: medium; font-family: calibri,arial,sans-serif;\">Di penghujung 2012 Perseroan melaksanakan kegiatan yang diberi nama Peduli Komunitas. Kegiatan ini bertujuan untuk mengajak seluruh elemen masyarakat agar lebih peduli terhadap lingkungan sekitar. Dengan dana yang berasal dari Perseroan dan kedermawanan sosial masyarakat (filantropi) yang digalang oleh Perseroan sebagai wujud kepedulian sosial serta bagian dari fungsi dan peran sosial media massa, Peduli Komunitas memberikan dukungan kepada komunitas-komunitas yang ingin menjadikan lingkungannya sebagai tempat tinggal yang lebih baik.</span></p>\n<p style=\"text-align: justify;\"><br /><span style=\"font-size: medium; font-family: calibri,arial,sans-serif;\">Kegiatan Peduli Komunitas diawali dengan merelokasi pedangang kaki lima (\"PKL\") di sepanjang jalan Damai, Daan Mogot, Jakarta Barat, area perkantoran Indosiar. Perelokasian ini selain bertujuan menyediakan tempat yang layak dan higienis, mengangkat harkat dan martabat para PKL, sekaligus membantu PEMDA setempat merapikan wajah ibukota.<br /></span></p>\n<p style=\"text-align: justify;\"><span style=\"font-size: medium; font-family: calibri,arial,sans-serif;\">Perseroan berharap kegiatan Peduli Komunitas dapat mendorong masyarakat untuk lebih menyadari pentingnya menjaga lingkungan sekitar. Kegiatan ini diharapkan juga dapat mengembalikan semangat tradisional Indonesia, yaitu gotong royong; dengan mempererat tali silaturahmi antar warga, dan pada akhirnya mencapai tujuan kerukunan hidup berbangsa dan bernegara.</span></p>','',1,0,'2015-02-05 16:01:41'),(19,0,'Laporan Audit','Laporan Audit','laporan-audit','audit','','',4,0,'2015-02-05 16:01:03'),(21,0,'Donatur','Donatur','donatur','donatur','','',3,0,'2015-02-05 16:01:19'),(22,0,'Laporan Tahunan','Laporan Tahunan','laporan-tahunan','kegiatan','','pk2013.pdf',5,0,'2015-02-05 16:00:41');
/*!40000 ALTER TABLE `pedulikomunitas_menu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-28  0:52:45
