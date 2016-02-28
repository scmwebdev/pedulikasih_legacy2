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
-- Table structure for table `kitapeduli_album_video`
--

DROP TABLE IF EXISTS `kitapeduli_album_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kitapeduli_album_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(11) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `video_url_id` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `urutan` tinyint(4) NOT NULL DEFAULT '1',
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_album` (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kitapeduli_album_video`
--

LOCK TABLES `kitapeduli_album_video` WRITE;
/*!40000 ALTER TABLE `kitapeduli_album_video` DISABLE KEYS */;
INSERT INTO `kitapeduli_album_video` VALUES (3,34,'http://www.youtube.com/watch?v=Z-RhY6Cm_xI','Z-RhY6Cm_xI','Bakti Sosial Korban Letusan Gunung Rokatenda, NTT (1)',1,'2013-06-07 10:12:06'),(4,34,'http://www.youtube.com/watch?v=qKdHsgQyqpE','qKdHsgQyqpE','Bakti Sosial Korban Letusan Gunung Rokatenda, NTT (2)',2,'2013-06-07 10:12:29'),(7,34,'http://www.youtube.com/watch?v=SKHmltHYyfY','SKHmltHYyfY','Bakti Sosial Korban Letusan Gunung Rokatenda, NTT (3)',3,'2013-06-07 10:12:47'),(10,34,'http://www.youtube.com/watch?v=md4NDmiuJCE','md4NDmiuJCE','Kain Tenun Palue',4,'2013-06-07 10:13:32'),(11,34,'http://www.youtube.com/watch?v=B4LQXqQPWgo','B4LQXqQPWgo','Penyulingan Panas Bumi',5,'2013-06-07 10:15:17'),(12,34,'http://www.youtube.com/watch?v=kv59yBVUWyk','kv59yBVUWyk','Rumah Kita, Rokatenda',6,'2013-06-07 10:15:45'),(13,36,'http://www.youtube.com/watch?v=Ndj5x-PqDBQ&feature=youtu.be','Ndj5x-PqDBQ','',2,'2013-07-18 09:01:04'),(15,36,'http://www.youtube.com/watch?v=hJ1MmLm4G-o','hJ1MmLm4G-o','',1,'2013-07-18 09:00:49'),(18,36,'http://www.youtube.com/watch?v=R70spGhJ6eg&feature=youtu.be','R70spGhJ6eg','',3,'2013-07-22 13:27:46'),(20,39,'http://www.youtube.com/watch?v=zIDffSvT62A&nomobile=1','zIDffSvT62A','Bencana Jebolnya Bendungan Alam Way Ela Maluku via BNPBIndonesia',1,'2013-08-01 12:47:21'),(22,41,'http://www.youtube.com/watch?v=4YrBku399TE','4YrBku399TE','via BNPBIndonesia',1,'2013-08-21 11:53:53'),(24,39,'http://www.youtube.com/watch?v=dGSAVNk5u40&feature=youtu.be','dGSAVNk5u40','',2,'2013-09-03 14:05:54'),(26,39,'http://www.youtube.com/watch?v=1Fwu6moJISM','1Fwu6moJISM','',3,'2013-09-12 10:45:14'),(28,43,'http://www.youtube.com/watch?v=xoKtU2fbqQw','xoKtU2fbqQw','',3,'2013-09-23 17:37:30'),(31,43,'http://www.youtube.com/watch?v=Ga3ia2QqgRs','Ga3ia2QqgRs','',2,'2013-09-23 17:36:51'),(34,43,'http://www.youtube.com/watch?v=hCWQUilbDKM','hCWQUilbDKM','',1,'2013-09-23 17:37:07'),(36,43,'http://www.youtube.com/watch?v=c-HoNfp9p8c','c-HoNfp9p8c','',4,'2013-09-23 17:37:25'),(39,43,'http://www.youtube.com/watch?v=8MkH7h4uswI&feature=c4-overview&list=UUcz9b2brFsk86Z_xruJMDoA','8MkH7h4uswI','Video via BNPB',5,'2013-10-28 14:56:34'),(40,45,'http://www.youtube.com/watch?v=uDUmo0t_wR0&feature=youtu.be','uDUmo0t_wR0','',1,'2013-11-06 12:24:10'),(41,45,'http://www.youtube.com/watch?v=VrCjoa8G-Gk&feature=youtu.be','VrCjoa8G-Gk','',3,'2013-11-26 17:33:38'),(43,45,'http://www.youtube.com/watch?v=UJMI80BGn_E&feature=youtu.be','UJMI80BGn_E','',2,'2013-11-26 17:33:33'),(45,45,'http://www.youtube.com/watch?v=yOOakKZ9d2g&feature=youtu.be','yOOakKZ9d2g','',4,'2013-11-28 15:59:56'),(47,55,'http://www.youtube.com/watch?v=qA_tsrd22p0&feature=youtu.be','qA_tsrd22p0','',1,'2014-01-20 15:58:03'),(48,55,'http://www.youtube.com/watch?v=q2mkECPbqZc&feature=youtu.be','q2mkECPbqZc','',2,'2014-01-20 16:37:52'),(51,57,'http://www.youtube.com/watch?v=xfREzCNzx3A&feature=youtu.be','xfREzCNzx3A','',1,'2014-01-22 19:08:59'),(54,62,'http://www.youtube.com/watch?v=kqFA8CuM310&feature=youtu.be','kqFA8CuM310','',1,'2014-01-23 14:32:39'),(57,65,'http://www.youtube.com/watch?v=B8hUKaOKG2Y&feature=youtu.be','B8hUKaOKG2Y','',1,'2014-01-27 15:43:40'),(59,57,'http://www.youtube.com/watch?v=B8hUKaOKG2Y&feature=youtu.be','B8hUKaOKG2Y','',1,'2014-01-27 15:44:06'),(62,65,'http://www.youtube.com/watch?v=8-iZFhBs8T4','8-iZFhBs8T4','',2,'2014-01-28 11:45:06'),(63,87,'http://www.youtube.com/watch?v=FXQm8hRMRcw&feature=youtu.be','FXQm8hRMRcw','',1,'2014-02-13 14:41:53'),(66,95,'http://www.youtube.com/watch?v=cAT2TDzeovM','cAT2TDzeovM','',1,'2014-02-13 19:08:12'),(68,100,'http://www.youtube.com/watch?v=MPj8N2uoIcU','MPj8N2uoIcU','',1,'2014-02-19 15:01:55'),(71,65,'http://www.youtube.com/watch?v=AHmqyZW-_6Y&feature=youtu.be','AHmqyZW-_6Y','',3,'2014-02-20 15:10:12'),(75,98,'http://www.youtube.com/watch?v=c4idXyjrBoY&feature=youtu.be','c4idXyjrBoY','',1,'2014-02-20 15:13:42'),(76,65,'http://www.youtube.com/watch?v=fFPnL5EB-Lk&index=44&list=PLJRzBuRCsxJD3Ou0nGSNhuUmVeynRzYyB','fFPnL5EB-Lk','',4,'2014-02-21 17:51:54'),(79,98,'http://www.youtube.com/watch?v=ZBjRINFJv5w&feature=youtu.be','ZBjRINFJv5w','',3,'2014-03-07 16:28:36'),(80,98,'http://www.youtube.com/watch?v=qlG2YCg5wfA&feature=youtu.be','qlG2YCg5wfA','',2,'2014-03-07 16:28:46'),(81,113,'http://www.youtube.com/watch?v=MQNkT1VYjBE','MQNkT1VYjBE','',1,'2014-06-30 10:08:18'),(82,115,'http://www.youtube.com/watch?v=M5aDq-qbMQY','M5aDq-qbMQY','',1,'2014-10-15 14:32:43'),(83,116,'http://www.youtube.com/watch?v=jJM_d_bUDpc','jJM_d_bUDpc','',2,'2014-10-16 16:59:17'),(84,116,'http://www.youtube.com/watch?v=3vhNI_BwPRw&list=UU-TC8TkqTRMYtOh6NKyZeIA','3vhNI_BwPRw','',1,'2014-10-16 16:59:10'),(85,116,'http://www.youtube.com/watch?v=JHQYIs6aNZc','JHQYIs6aNZc','',3,'2014-10-17 16:42:48'),(86,117,'http://www.youtube.com/watch?v=5pXzcUXl3pM&list=UU-TC8TkqTRMYtOh6NKyZeIA','5pXzcUXl3pM','Source:\nhttps://www.youtube.com/watch?v=jJE-OW0v_JI',1,'2014-12-15 12:08:32'),(87,117,'http://www.youtube.com/watch?v=1ZqQ4Fvjz0M&list=UU-TC8TkqTRMYtOh6NKyZeIA','1ZqQ4Fvjz0M','',2,'2014-12-17 11:24:11'),(88,117,'http://www.youtube.com/watch?v=e6n0QiltjmI&list=UU-TC8TkqTRMYtOh6NKyZeIA','e6n0QiltjmI','',3,'2014-12-17 14:01:22'),(89,117,'http://www.youtube.com/watch?v=OMS8EelpFvA&list=UU-TC8TkqTRMYtOh6NKyZeIA','OMS8EelpFvA','',1,'2014-12-17 18:04:23'),(90,117,'http://www.youtube.com/watch?v=XJvapujsFeg','XJvapujsFeg','',4,'2014-12-18 11:53:52'),(91,117,'http://www.youtube.com/watch?v=gnzKDirLtl8&list=UU-TC8TkqTRMYtOh6NKyZeIA','gnzKDirLtl8','',5,'2014-12-20 18:31:18'),(92,117,'http://www.youtube.com/watch?v=jEhXpLiHwvw&list=UU-TC8TkqTRMYtOh6NKyZeIA','jEhXpLiHwvw','',6,'2014-12-20 19:19:22'),(93,117,'http://www.youtube.com/watch?v=pepVBEF-S04','pepVBEF-S04','',5,'2014-12-22 10:59:44'),(94,119,'http://www.youtube.com/watch?v=zw9NaeIHODw','zw9NaeIHODw','',1,'2015-01-28 19:47:48'),(95,121,'http://www.youtube.com/watch?v=YCBZ5MjM8b8','YCBZ5MjM8b8','',1,'2015-02-13 11:18:07'),(96,121,'http://www.youtube.com/watch?v=YbdNWG0GgT0','YbdNWG0GgT0','',2,'2015-02-13 11:18:43'),(97,121,'http://www.youtube.com/watch?v=9wbHhMuPQAU','9wbHhMuPQAU','',3,'2015-02-13 11:19:00'),(98,121,'http://www.youtube.com/watch?v=MPXOyBP3sDs','MPXOyBP3sDs','',4,'2015-02-13 11:44:51'),(99,121,'http://www.youtube.com/watch?v=39xLcSfZzoo','39xLcSfZzoo','',5,'2015-02-13 11:54:09'),(100,121,'http://www.youtube.com/watch?v=QAkTsNZgtbc','QAkTsNZgtbc','',6,'2015-02-13 12:21:24'),(101,121,'http://www.youtube.com/watch?v=l3M7x8vBIEA','l3M7x8vBIEA','',7,'2015-02-13 12:21:35'),(102,121,'http://www.youtube.com/watch?v=2WMMToTKR1g','2WMMToTKR1g','',8,'2015-02-18 12:02:21'),(103,122,'http://www.youtube.com/watch?v=YCBZ5MjM8b8','YCBZ5MjM8b8','',1,'2015-02-18 12:03:39'),(104,122,'http://www.youtube.com/watch?v=YbdNWG0GgT0','YbdNWG0GgT0','',2,'2015-02-18 12:03:54'),(105,122,'http://www.youtube.com/watch?v=9wbHhMuPQAU','9wbHhMuPQAU','',3,'2015-02-18 12:04:03'),(106,122,'http://www.youtube.com/watch?v=MPXOyBP3sDs','MPXOyBP3sDs','',4,'2015-02-18 12:04:11'),(107,122,'http://www.youtube.com/watch?v=39xLcSfZzoo','39xLcSfZzoo','',5,'2015-02-18 12:04:31'),(108,122,'http://www.youtube.com/watch?v=QAkTsNZgtbc','QAkTsNZgtbc','',6,'2015-02-18 12:04:41'),(109,122,'http://www.youtube.com/watch?v=l3M7x8vBIEA','l3M7x8vBIEA','',9,'2015-02-26 10:08:06'),(110,122,'http://www.youtube.com/watch?v=2WMMToTKR1g','2WMMToTKR1g','',8,'2015-02-18 12:05:00'),(111,119,'http://www.youtube.com/watch?v=xVLypAsIGvY','xVLypAsIGvY','',2,'2015-02-25 10:06:29'),(113,122,'http://www.youtube.com/watch?v=DoTo0n_NR4k','DoTo0n_NR4k','',10,'2015-02-26 10:09:16'),(123,127,'http://www.youtube.com/watch?v=JKw1KJfZqhw','JKw1KJfZqhw','',1,'2015-12-01 14:46:09'),(124,127,'http://www.vidio.com/watch/204770-menikmati-lezatnya-sambal-ganja','','',1,'2015-12-01 15:44:30');
/*!40000 ALTER TABLE `kitapeduli_album_video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-27 23:55:34
