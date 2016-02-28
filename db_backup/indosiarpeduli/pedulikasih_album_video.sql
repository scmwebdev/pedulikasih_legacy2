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
-- Table structure for table `pedulikasih_album_video`
--

DROP TABLE IF EXISTS `pedulikasih_album_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedulikasih_album_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(11) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `video_url_id` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `urutan` tinyint(4) NOT NULL DEFAULT '1',
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_album` (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=389 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedulikasih_album_video`
--

LOCK TABLES `pedulikasih_album_video` WRITE;
/*!40000 ALTER TABLE `pedulikasih_album_video` DISABLE KEYS */;
INSERT INTO `pedulikasih_album_video` VALUES (11,105,'http://www.youtube.com/watch?v=xIw1-Y2Ok7c','xIw1-Y2Ok7c','Operasi Katarak Massal di RSCM Kirana',2,'2013-06-05 10:41:35'),(27,87,'http://www.youtube.com/watch?v=-xnM4JWpdjs','-xnM4JWpdjs','yogyakarta',1,'2013-06-04 17:34:36'),(28,78,'http://www.youtube.com/watch?v=K0UMS3raesw','K0UMS3raesw','Baksos Pesta Semarak Indosiar Kota Surabaya 2013 ',1,'2013-06-05 10:40:58'),(31,103,'http://www.youtube.com/watch?v=fM9Usv8fbHE&feature=youtu.be','fM9Usv8fbHE','',1,'2013-06-05 10:56:33'),(32,105,'http://www.youtube.com/watch?v=fM9Usv8fbHE&feature=youtu.be','fM9Usv8fbHE','',1,'2013-06-05 10:57:05'),(35,104,'http://www.youtube.com/watch?v=7aH_E0quOvo','7aH_E0quOvo','',1,'2013-07-17 11:30:17'),(38,109,'http://www.youtube.com/watch?v=k7aLdZoIoqA','k7aLdZoIoqA','',1,'2013-07-17 11:48:34'),(41,106,'http://www.youtube.com/watch?v=JPy4Q4FchJY','JPy4Q4FchJY','',1,'2013-07-17 15:05:56'),(43,114,'http://www.youtube.com/watch?v=bDYjp7CJJiI&list=PLJRzBuRCsxJB-XpxHXpaSi6sZRUIDu_EA','bDYjp7CJJiI','',1,'2013-07-24 15:31:34'),(45,117,'http://www.youtube.com/watch?v=jNX7GOld77U','jNX7GOld77U','Indosiar Peduli sebagai Mitra Utama Pelayanan Kesehatan Sail Komodo',1,'2013-08-21 11:55:52'),(46,124,'http://www.youtube.com/watch?v=jNX7GOld77U','jNX7GOld77U','Penandatanganan kerjasama untuk Sail Komodo',1,'2013-08-26 17:41:46'),(48,129,'http://www.youtube.com/watch?v=7oPuoS49E_o&feature=youtu.be','7oPuoS49E_o','Peduli Kasih - Promo Sail Komodo',1,'2013-08-30 09:36:44'),(50,129,'http://www.youtube.com/watch?v=jNX7GOld77U','jNX7GOld77U','Indosiar Peduli sebagai Mitra Utama Pelayanan Kesehatan Sail Komodo',2,'2013-08-30 09:37:02'),(51,129,'http://www.youtube.com/watch?v=E006235EYjA','E006235EYjA','Upacara Pelepasan Sail Komodo',3,'2013-08-30 09:36:10'),(54,116,'http://www.youtube.com/watch?v=ds-1c0_sFr4&feature=youtu.be','ds-1c0_sFr4','',1,'2013-08-30 13:08:32'),(57,129,'http://www.youtube.com/watch?v=kd4yEMz38QU','kd4yEMz38QU','Bakti Sosial Operasi Katarak, Hernia Dan Gondok Sail Komodo di Lembata',4,'2013-10-03 17:57:02'),(60,129,'http://www.youtube.com/watch?v=MSGvJOjVzNE&feature=youtu.be','MSGvJOjVzNE','Bakti Sosial Operasi Katarak, Hernia Dan Gondok Sail Komodo di Maumere',5,'2013-10-03 17:57:31'),(63,116,'http://www.youtube.com/watch?v=jEN-33aE02o&list=PLJRzBuRCsxJB-XpxHXpaSi6sZRUIDu_EA','jEN-33aE02o','',2,'2013-10-16 13:33:18'),(65,156,'http://www.youtube.com/watch?v=yDA9TjB3bmQ','yDA9TjB3bmQ','',1,'2013-10-16 19:00:43'),(67,129,'http://www.youtube.com/watch?v=2n8WOfsieU4&feature=youtu.be','2n8WOfsieU4','Baksos Katarak, Hernia & Gondok Pada Sail Komodo 2013 Di Sikka NTT',6,'2013-10-22 10:46:42'),(69,159,'http://www.youtube.com/watch?v=7JfHzNit46Y','7JfHzNit46Y','',1,'2013-10-28 11:46:33'),(71,162,'http://www.youtube.com/watch?v=7pNtIS5cZfQ&feature=youtu.be','7pNtIS5cZfQ','',1,'2013-10-29 18:33:08'),(74,160,'http://www.youtube.com/watch?v=xFAzg4RbhB8&feature=youtu.be','xFAzg4RbhB8','',1,'2013-11-22 09:31:18'),(75,233,'http://www.youtube.com/watch?v=0f_zKUfYe2I&feature=youtu.be','0f_zKUfYe2I','',1,'2013-11-22 09:41:09'),(76,239,'http://www.youtube.com/watch?v=J5Xmik2yNp0&list=PLJRzBuRCsxJB-XpxHXpaSi6sZRUIDu_EA','J5Xmik2yNp0','',1,'2013-11-26 14:14:45'),(79,240,'http://www.youtube.com/watch?v=J5Xmik2yNp0&list=PLJRzBuRCsxJB-XpxHXpaSi6sZRUIDu_EA','J5Xmik2yNp0','',1,'2013-11-26 14:15:27'),(80,245,'http://www.youtube.com/watch?v=qKAY0g5WhqE','qKAY0g5WhqE','',1,'2013-11-29 14:04:43'),(82,237,'http://www.youtube.com/watch?v=t1WjOuhTJtE&feature=youtu.be','t1WjOuhTJtE','',2,'2014-01-13 13:15:34'),(83,253,'http://www.youtube.com/watch?v=8HYLOEkHb-M&feature=youtu.be','8HYLOEkHb-M','',1,'2013-12-23 16:59:05'),(86,257,'http://www.youtube.com/watch?v=gzpJ_booO-g&feature=youtu.be','gzpJ_booO-g','',1,'2014-01-09 14:22:50'),(87,257,'http://www.youtube.com/watch?v=Tv8y7r_9bng&feature=youtu.be','Tv8y7r_9bng','',2,'2014-01-09 14:23:06'),(88,237,'http://www.youtube.com/watch?v=RL2yUdqceMo&feature=youtu.be','RL2yUdqceMo','',1,'2014-01-13 13:15:25'),(90,257,'http://www.youtube.com/watch?v=C6gTt9yGBgA','C6gTt9yGBgA','',3,'2014-01-13 18:10:25'),(92,257,'http://www.youtube.com/watch?v=T-ZfsxVOYsQ&feature=youtu.be','T-ZfsxVOYsQ','',4,'2014-01-13 18:11:04'),(93,260,'http://www.youtube.com/watch?v=KzKVnB-6EXQ&feature=youtu.be','KzKVnB-6EXQ','',1,'2014-02-10 11:40:25'),(95,261,'http://www.youtube.com/watch?v=KELgQTBkxI0','KELgQTBkxI0','',1,'2014-02-17 19:47:40'),(97,265,'http://www.youtube.com/watch?v=5hkWmOFQhYs','5hkWmOFQhYs','',1,'2014-03-03 14:56:59'),(99,265,'http://www.youtube.com/watch?v=FzlHNiLL-_8','FzlHNiLL-_8','',2,'2014-03-03 14:57:12'),(102,266,'http://www.youtube.com/watch?v=yJdwWlTpS98&feature=youtu.be','yJdwWlTpS98','',1,'2014-03-10 14:17:48'),(105,268,'http://www.youtube.com/watch?v=jerMdcVRzRs&feature=youtu.be','jerMdcVRzRs','',1,'2014-03-10 14:19:14'),(120,285,'http://www.youtube.com/watch?v=q9z2OxYw7WY','q9z2OxYw7WY','',1,'2014-03-27 14:25:51'),(122,288,'http://www.youtube.com/watch?v=1qBX9r0yWjI','1qBX9r0yWjI','',1,'2014-03-27 14:26:14'),(124,265,'http://www.youtube.com/watch?v=aHeU0eRkC0o&feature=youtu.be','aHeU0eRkC0o','',3,'2014-03-27 17:38:13'),(127,294,'http://www.youtube.com/watch?v=OXXKx5iQWeA','OXXKx5iQWeA','',1,'2014-04-02 17:42:46'),(128,297,'http://www.youtube.com/watch?v=ucz3sGDjxlk&index=81&list=PLJRzBuRCsxJB-XpxHXpaSi6sZRUIDu_EA','ucz3sGDjxlk','',1,'2014-04-21 09:42:23'),(130,303,'http://www.youtube.com/watch?v=RUffiGFHYm0','RUffiGFHYm0','',1,'2014-04-23 10:31:41'),(131,305,'http://www.youtube.com/watch?v=StI1QMjgmZs','StI1QMjgmZs','',1,'2014-04-29 16:15:38'),(132,304,'http://www.youtube.com/watch?v=YefXlZgtuWw','YefXlZgtuWw','',1,'2014-04-29 16:58:07'),(133,302,'http://www.youtube.com/watch?v=PWqoQSMHCp4','PWqoQSMHCp4','',1,'2014-05-02 11:41:08'),(134,307,'http://www.youtube.com/watch?v=u8EJ0a1i5Gg','u8EJ0a1i5Gg','',1,'2014-05-05 12:00:36'),(135,308,'http://www.youtube.com/watch?v=fzJI3jH1aok','fzJI3jH1aok','',1,'2014-05-05 18:11:41'),(137,306,'http://www.youtube.com/watch?v=GbSPXmE-5nE','GbSPXmE-5nE','',1,'2014-05-06 13:25:32'),(138,279,'http://www.youtube.com/watch?v=jy0ZXsW_5iI','jy0ZXsW_5iI','',1,'2014-05-23 10:41:00'),(139,312,'http://www.youtube.com/watch?v=q16V9xGkxv4','q16V9xGkxv4','',1,'2014-06-11 11:42:41'),(140,311,'http://www.youtube.com/watch?v=jrUfRDGaLv0','jrUfRDGaLv0','',1,'2014-06-13 17:54:27'),(142,313,'http://www.youtube.com/watch?v=zd98gem7WhQ','zd98gem7WhQ','',1,'2014-06-18 12:58:32'),(143,319,'http://www.youtube.com/watch?v=-2sQgvJrOQE','-2sQgvJrOQE','',1,'2014-06-24 11:16:44'),(144,315,'http://www.youtube.com/watch?v=QLFF4Q1pEj8','QLFF4Q1pEj8','',1,'2014-06-24 11:19:02'),(145,315,'http://www.youtube.com/watch?v=pRqpwQaa5P8','pRqpwQaa5P8','',2,'2014-06-30 09:40:16'),(146,317,'http://www.youtube.com/watch?v=7A0ecBrZYUM&feature=youtu.be','7A0ecBrZYUM','',1,'2014-07-14 14:00:06'),(147,316,'http://www.youtube.com/watch?v=7A0ecBrZYUM&feature=youtu.be','7A0ecBrZYUM','',1,'2014-07-14 14:00:36'),(148,322,'http://www.youtube.com/watch?v=wOL8uSQOFwc&feature=youtu.be','wOL8uSQOFwc','',1,'2014-07-16 10:33:06'),(149,324,'http://www.youtube.com/watch?v=wOL8uSQOFwc&feature=youtu.be','wOL8uSQOFwc','',1,'2014-07-17 18:34:54'),(150,324,'http://www.youtube.com/watch?v=GPAQIB__ojM','GPAQIB__ojM','',2,'2014-07-17 18:35:22'),(151,326,'http://www.youtube.com/watch?v=UmBRFFeH7qc&feature=youtu.be','UmBRFFeH7qc','',1,'2014-07-24 16:04:58'),(152,327,'http://www.youtube.com/watch?v=NYayIO1hFGI&feature=youtu.be','NYayIO1hFGI','',1,'2014-08-05 13:37:22'),(153,328,'http://www.youtube.com/watch?v=zMm-xZFlyr4&list=UU-TC8TkqTRMYtOh6NKyZeIA','zMm-xZFlyr4','',1,'2014-08-07 17:15:11'),(154,330,'http://www.youtube.com/watch?v=UJaCrxXFOqE&list=UU-TC8TkqTRMYtOh6NKyZeIA','UJaCrxXFOqE','',1,'2014-08-08 19:11:09'),(155,330,'http://www.youtube.com/watch?v=JmvSTpKdEZ0','JmvSTpKdEZ0','',2,'2014-08-11 09:56:50'),(156,329,'http://www.youtube.com/watch?v=EWs5NiTQJAo','EWs5NiTQJAo','',1,'2014-08-12 14:46:36'),(158,333,'http://www.youtube.com/watch?v=PGHyPYKHA74','PGHyPYKHA74','',1,'2014-08-20 11:28:01'),(159,332,'http://www.youtube.com/watch?v=WZc3ioKAsEc&list=UU-TC8TkqTRMYtOh6NKyZeIA','WZc3ioKAsEc','',1,'2014-08-20 17:46:12'),(160,333,'http://www.youtube.com/watch?v=i-R1Wvs5HYA','i-R1Wvs5HYA','',3,'2014-08-25 09:16:15'),(161,333,'http://www.youtube.com/watch?v=XO96jQDQnjA&feature=youtu.be','XO96jQDQnjA','',2,'2014-08-21 14:05:57'),(162,333,'http://www.youtube.com/watch?v=ofbUe9ZYBgA','ofbUe9ZYBgA','',5,'2014-08-25 09:16:03'),(163,333,'http://www.youtube.com/watch?v=j72nMP9HTDw','j72nMP9HTDw','',4,'2014-08-25 09:41:12'),(164,333,'http://www.youtube.com/watch?v=i_JXOlIvjAg','i_JXOlIvjAg','',6,'2014-08-25 09:46:36'),(165,334,'http://www.youtube.com/watch?v=Qf1FbekhYsU','Qf1FbekhYsU','',1,'2014-08-25 16:48:01'),(166,333,'http://www.youtube.com/watch?v=hvtWuMcmysM','hvtWuMcmysM','',7,'2014-08-27 11:24:52'),(167,333,'http://www.youtube.com/watch?v=JU4P_ldN4A8','JU4P_ldN4A8','',8,'2014-08-27 18:04:36'),(168,333,'http://www.youtube.com/watch?v=J1lKimT9Fpw','J1lKimT9Fpw','',9,'2014-08-29 17:35:47'),(169,331,'http://www.youtube.com/watch?v=HEyG9qLz9IY','HEyG9qLz9IY','',1,'2014-09-01 10:44:45'),(170,335,'http://www.youtube.com/watch?v=uq_tXmdPgHI','uq_tXmdPgHI','',1,'2014-09-01 11:27:34'),(172,336,'http://www.youtube.com/watch?v=Ez1znVLn9zM&list=UU-TC8TkqTRMYtOh6NKyZeIA','Ez1znVLn9zM','',1,'2014-09-02 17:29:30'),(173,339,'http://www.youtube.com/watch?v=0RPtkHfXiG0','0RPtkHfXiG0','',1,'2014-09-11 10:12:50'),(174,340,'http://www.youtube.com/watch?v=wveM6fMpD8E','wveM6fMpD8E','',1,'2014-09-17 18:42:30'),(182,337,'http://www.youtube.com/watch?v=Ns41BdSjdMk&list=UU-TC8TkqTRMYtOh6NKyZeIA','Ns41BdSjdMk','',1,'2014-09-25 11:32:16'),(200,342,'http://www.youtube.com/watch?v=HATXa0wP14I','HATXa0wP14I','',1,'2014-09-26 11:37:46'),(209,345,'http://www.youtube.com/watch?v=kK94s1BHT_M','kK94s1BHT_M','',1,'2014-09-30 13:25:43'),(215,347,'http://www.youtube.com/watch?v=DZwBxw0C0FI','DZwBxw0C0FI','',1,'2014-10-06 11:01:25'),(220,348,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:53:36'),(221,354,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:54:37'),(222,353,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:54:46'),(223,355,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:55:09'),(224,358,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:55:19'),(225,357,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:55:27'),(226,356,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:55:36'),(227,346,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:55:44'),(228,352,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:55:54'),(229,351,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:56:03'),(230,350,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 12:56:11'),(231,349,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 13:01:04'),(232,359,'http://www.youtube.com/watch?v=9IF5LFkshOY','9IF5LFkshOY','',1,'2014-10-08 13:01:12'),(235,350,'http://www.youtube.com/watch?v=8DwdHxHMaIQ','8DwdHxHMaIQ','',1,'2014-10-08 13:02:34'),(236,351,'http://www.youtube.com/watch?v=8DwdHxHMaIQ','8DwdHxHMaIQ','',1,'2014-10-08 13:02:42'),(243,349,'http://www.youtube.com/watch?v=rJTNTxhTLrs','rJTNTxhTLrs','',1,'2014-10-08 13:05:32'),(245,356,'http://www.youtube.com/watch?v=9SIhrh1zHhE','9SIhrh1zHhE','',1,'2014-10-08 13:07:07'),(246,348,'http://www.youtube.com/watch?v=9SIhrh1zHhE','9SIhrh1zHhE','',1,'2014-10-08 13:07:17'),(247,358,'http://www.youtube.com/watch?v=9SIhrh1zHhE','9SIhrh1zHhE','',1,'2014-10-08 13:07:29'),(248,348,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:08:06'),(249,354,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:08:22'),(250,353,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:08:30'),(251,355,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:08:38'),(252,358,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:08:48'),(253,357,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:08:57'),(254,356,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:09:05'),(255,346,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:09:13'),(256,352,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:09:20'),(257,351,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:09:28'),(258,350,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:09:38'),(259,349,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:09:46'),(260,359,'http://www.youtube.com/watch?v=X0pW2Qttqe4','X0pW2Qttqe4','',1,'2014-10-08 13:09:54'),(261,342,'http://www.youtube.com/watch?v=a15Fbzb8mYY','a15Fbzb8mYY','',2,'2014-10-08 13:11:03'),(262,340,'http://www.youtube.com/watch?v=XZH2YUQve0E','XZH2YUQve0E','',2,'2014-10-08 13:12:58'),(263,359,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',3,'2014-10-08 15:52:01'),(264,349,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',4,'2014-10-08 15:52:22'),(265,350,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',4,'2014-10-08 15:52:32'),(266,351,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',4,'2014-10-08 15:52:41'),(267,352,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',3,'2014-10-08 15:52:56'),(268,346,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',3,'2014-10-08 15:53:11'),(269,356,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',4,'2014-10-08 15:53:20'),(270,357,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',3,'2014-10-08 15:53:29'),(271,358,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',4,'2014-10-08 15:53:39'),(272,355,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',3,'2014-10-08 15:53:47'),(273,353,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',3,'2014-10-08 15:54:02'),(274,354,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',3,'2014-10-08 15:54:14'),(275,348,'http://www.youtube.com/watch?v=BKdes0N3Okw','BKdes0N3Okw','',5,'2014-10-08 15:54:25'),(276,359,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:25:13'),(277,349,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:25:23'),(278,350,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:25:32'),(279,351,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:25:38'),(280,352,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:25:45'),(281,346,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:25:55'),(282,356,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:26:08'),(283,357,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:26:19'),(284,358,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:27:07'),(285,355,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:27:14'),(286,353,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:27:28'),(287,354,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:28:01'),(288,348,'http://www.youtube.com/watch?v=UsePs0u2IIU','UsePs0u2IIU','',1,'2014-10-08 17:28:09'),(289,364,'http://www.youtube.com/watch?v=pNp9zIym5MQ','pNp9zIym5MQ','',1,'2014-11-03 13:30:25'),(290,365,'http://www.youtube.com/watch?v=pNp9zIym5MQ','pNp9zIym5MQ','Keyna Latifia',1,'2014-11-05 14:58:58'),(291,338,'http://www.youtube.com/watch?v=26Aktd0DUHM','26Aktd0DUHM','',1,'2014-11-06 10:53:31'),(292,344,'http://www.youtube.com/watch?v=PVnEi4WdvJo','PVnEi4WdvJo','',1,'2014-11-17 15:04:21'),(294,368,'http://www.youtube.com/watch?v=AtTxGMFM4Vo','AtTxGMFM4Vo','',1,'2014-11-24 16:16:42'),(295,371,'http://www.youtube.com/watch?v=I4FL6jQ_WFI&list=UU-TC8TkqTRMYtOh6NKyZeIA','I4FL6jQ_WFI','',1,'2014-12-03 16:43:31'),(296,369,'http://www.youtube.com/watch?v=M8jb-yqg5y4','M8jb-yqg5y4','',1,'2014-12-04 16:47:35'),(297,373,'http://www.youtube.com/watch?v=Nrj49MG-vKE','Nrj49MG-vKE','',2,'2014-12-05 11:26:55'),(298,373,'http://www.youtube.com/watch?v=0m7d2gEx1qE&list=UU-TC8TkqTRMYtOh6NKyZeIA','0m7d2gEx1qE','',1,'2014-12-05 11:26:46'),(299,373,'http://www.youtube.com/watch?v=erSw1KYXIbU&list=UU-TC8TkqTRMYtOh6NKyZeIA','erSw1KYXIbU','',3,'2014-12-05 11:29:32'),(300,373,'http://www.youtube.com/watch?v=VEGt2rgHJ3c&list=UU-TC8TkqTRMYtOh6NKyZeIA','VEGt2rgHJ3c','',4,'2014-12-05 11:30:10'),(301,373,'http://www.youtube.com/watch?v=hPH1ZozIzVU&list=UU-TC8TkqTRMYtOh6NKyZeIA','hPH1ZozIzVU','',5,'2014-12-05 11:30:45'),(302,372,'http://www.youtube.com/watch?v=PVacf8Jp8NI','PVacf8Jp8NI','',1,'2014-12-09 09:38:23'),(304,380,'http://www.youtube.com/watch?v=yzxSrLa1d0g','yzxSrLa1d0g','',2,'2014-12-29 16:13:30'),(305,380,'http://www.youtube.com/watch?v=5W1JRAGJjXU','5W1JRAGJjXU','',1,'2014-12-29 16:13:26'),(306,385,'http://www.youtube.com/watch?v=d5sb3r_xBGY','d5sb3r_xBGY','',1,'2015-01-07 11:29:20'),(308,384,'http://www.youtube.com/watch?v=nkjc832DR7k','nkjc832DR7k','',1,'2015-01-07 11:49:40'),(309,387,'http://www.youtube.com/watch?v=fF4iAtJwcFA','fF4iAtJwcFA','',1,'2015-01-08 09:40:30'),(310,382,'http://www.youtube.com/watch?v=sK70W5Zs-Uc','sK70W5Zs-Uc','',1,'2015-01-08 09:48:50'),(311,383,'http://www.youtube.com/watch?v=VrmCZvMzTR8','VrmCZvMzTR8','',1,'2015-01-13 17:02:38'),(312,389,'http://www.youtube.com/watch?v=euJswb-nV4k','euJswb-nV4k','',1,'2015-01-13 17:58:17'),(313,390,'http://www.youtube.com/watch?v=7fY1k1CpGMc','7fY1k1CpGMc','',1,'2015-01-14 11:45:02'),(314,388,'http://www.youtube.com/watch?v=nuEOqmloX30','nuEOqmloX30','',1,'2015-01-14 16:00:04'),(315,381,'http://www.youtube.com/watch?v=cQfICM37ynE','cQfICM37ynE','',1,'2015-01-16 10:43:42'),(316,391,'http://www.youtube.com/watch?v=Ip9vdFt5Yzw','Ip9vdFt5Yzw','',1,'2015-01-19 18:15:00'),(317,392,'http://www.youtube.com/watch?v=pE2voGN4xJ8','pE2voGN4xJ8','',1,'2015-01-28 15:45:41'),(318,375,'http://www.youtube.com/watch?v=pE2voGN4xJ8','pE2voGN4xJ8','',1,'2015-01-28 15:46:28'),(319,398,'http://www.youtube.com/watch?v=TV1gxst3w7Y','TV1gxst3w7Y','',1,'2015-02-16 16:19:16'),(320,401,'http://www.youtube.com/watch?v=HEpHGlhafi4','HEpHGlhafi4','',1,'2015-02-23 10:28:44'),(321,360,'http://www.youtube.com/watch?v=0SOQEdJeFmo','0SOQEdJeFmo','',1,'2015-02-24 18:24:49'),(322,341,'http://www.youtube.com/watch?v=a1HxNO8yd_g','a1HxNO8yd_g','',1,'2015-02-25 17:34:34'),(323,367,'http://www.youtube.com/watch?v=YY8dXBcock8','YY8dXBcock8','',1,'2015-03-04 09:58:47'),(324,325,'http://www.youtube.com/watch?v=clHDaKaCouM','clHDaKaCouM','',1,'2015-03-04 09:59:26'),(325,377,'http://www.youtube.com/watch?v=ug-Pla7xZS4','ug-Pla7xZS4','',1,'2015-03-04 17:24:56'),(326,361,'http://www.youtube.com/watch?v=Jwowu7mQaA4','Jwowu7mQaA4','',1,'2015-03-04 17:25:53'),(327,365,'http://www.youtube.com/watch?v=LRl35G4ZUG0','LRl35G4ZUG0','',1,'2015-03-05 17:04:53'),(328,363,'http://www.youtube.com/watch?v=GpgZuKlU8-U','GpgZuKlU8-U','',1,'2015-03-06 19:20:45'),(329,364,'http://www.youtube.com/watch?v=kWvSCEds7Cg','kWvSCEds7Cg','',2,'2015-03-09 09:30:53'),(330,405,'http://www.youtube.com/watch?v=HvihMAnlKng','HvihMAnlKng','',1,'2015-03-11 09:07:51'),(332,405,'http://www.youtube.com/watch?v=GPAQIB__ojM','GPAQIB__ojM','Retinal detachment',2,'2015-03-11 14:37:23'),(334,405,'http://www.youtube.com/watch?v=c5_qIogWyio','c5_qIogWyio','Ilustrasi katarak',3,'2015-03-11 15:02:53'),(335,407,'http://www.youtube.com/watch?v=ImRWPVrU82Q','ImRWPVrU82Q','',1,'2015-03-16 09:13:53'),(337,412,'http://www.youtube.com/watch?v=M2CeBD0icJQ','M2CeBD0icJQ','',1,'2015-04-01 14:28:16'),(338,411,'http://www.youtube.com/watch?v=Sv9ODbczNJg','Sv9ODbczNJg','',1,'2015-04-01 17:42:39'),(339,413,'http://www.youtube.com/watch?v=5Eg7dFu1VyE','5Eg7dFu1VyE','',1,'2015-04-02 15:29:59'),(340,414,'http://www.youtube.com/watch?v=mmlMr-SQ82A','mmlMr-SQ82A','',1,'2015-04-06 10:57:40'),(341,409,'http://www.youtube.com/watch?v=nJcVmW03TnM','nJcVmW03TnM','',1,'2015-04-09 11:13:01'),(344,416,'http://www.youtube.com/watch?v=qQ17ly1fsJs','qQ17ly1fsJs','',1,'2015-04-10 17:05:29'),(345,419,'http://www.youtube.com/watch?v=valRSRNc1YI','valRSRNc1YI','',1,'2015-04-20 11:22:27'),(346,417,'http://www.youtube.com/watch?v=nst6M6OKGUg','nst6M6OKGUg','',1,'2015-04-20 13:21:00'),(347,418,'http://www.youtube.com/watch?v=cboYuwgf-z0','cboYuwgf-z0','',1,'2015-04-21 14:22:27'),(348,415,'http://www.youtube.com/watch?v=Si6KjT-rLJM','Si6KjT-rLJM','',1,'2015-04-28 09:13:56'),(349,420,'http://www.youtube.com/watch?v=VsCe8HWnaSs','VsCe8HWnaSs','',1,'2015-04-30 12:46:53'),(350,423,'http://www.youtube.com/watch?v=J1wxPO2nNC4','J1wxPO2nNC4','',1,'2015-05-08 15:42:56'),(351,406,'http://www.youtube.com/watch?v=s_BN-aDiBN0','s_BN-aDiBN0','',1,'2015-06-08 10:04:11'),(352,428,'http://www.youtube.com/watch?v=3ALY_V3cIPs','3ALY_V3cIPs','',1,'2015-06-08 16:49:46'),(353,397,'http://www.youtube.com/watch?v=MmMfi4tluLE','MmMfi4tluLE','',1,'2015-06-09 15:30:41'),(354,421,'http://www.youtube.com/watch?v=ZQZ3zJPuQMc','ZQZ3zJPuQMc','',1,'2015-06-09 15:43:13'),(355,432,'http://www.youtube.com/watch?v=cHYdvb-HADA','cHYdvb-HADA','',1,'2015-06-15 12:18:21'),(356,432,'http://www.youtube.com/watch?v=9U7NPbsGxmo','9U7NPbsGxmo','',2,'2015-06-15 12:52:39'),(357,434,'http://www.youtube.com/watch?v=w94wafkL_yE','w94wafkL_yE','',1,'2015-06-22 15:46:07'),(358,342,'http://www.youtube.com/watch?v=dAgnDmfEowo','dAgnDmfEowo','',3,'2015-06-25 15:57:59'),(359,435,'http://www.youtube.com/watch?v=MyAk1oigsTs','MyAk1oigsTs','',1,'2015-06-25 16:00:32'),(360,438,'http://www.youtube.com/watch?v=42g8OqgMkHA','42g8OqgMkHA','',1,'2015-07-09 11:37:10'),(361,433,'http://www.youtube.com/watch?v=-tnVKst3wSo','-tnVKst3wSo','',1,'2015-07-10 13:28:58'),(363,443,'http://www.youtube.com/watch?v=nc6fmuzgfHQ','nc6fmuzgfHQ','',1,'2015-08-04 11:44:39'),(364,454,'http://www.youtube.com/watch?v=YKFNcLhOBNo','YKFNcLhOBNo','',1,'2015-08-24 10:58:41'),(365,455,'http://www.youtube.com/watch?v=dvdrgJdUceQ','dvdrgJdUceQ','Acara pelepasan kegiatan Sail Tomini 2015',2,'2015-08-28 18:13:24'),(366,457,'http://www.youtube.com/watch?v=eSRt6fL5evI','eSRt6fL5evI','',1,'2015-09-02 12:36:20'),(368,458,'http://www.youtube.com/watch?v=GNPgUHZHBec','GNPgUHZHBec','',1,'2015-09-02 12:51:28'),(370,461,'http://www.youtube.com/watch?v=ycq9up0BFdE','ycq9up0BFdE','',1,'2015-09-04 14:15:48'),(372,460,'http://www.youtube.com/watch?v=LyJlDl7O0n4','LyJlDl7O0n4','',1,'2015-09-04 15:06:20'),(373,464,'http://www.youtube.com/watch?v=kjm4-2YuiqA','kjm4-2YuiqA','',1,'2015-09-08 10:27:29'),(374,465,'http://www.youtube.com/watch?v=B2iT7dY3n-w','B2iT7dY3n-w','',1,'2015-09-08 11:13:26'),(375,460,'http://www.youtube.com/watch?v=3DoaFu3wPE8','3DoaFu3wPE8','',2,'2015-09-14 14:33:31'),(376,460,'http://www.youtube.com/watch?v=IpzZR_5sf4s&index=195&list=PLJRzBuRCsxJB-XpxHXpaSi6sZRUIDu_EA','IpzZR_5sf4s','',3,'2015-09-14 14:32:56'),(377,464,'http://www.youtube.com/watch?v=V4LkOOaMaaw&index=196&list=PLJRzBuRCsxJB-XpxHXpaSi6sZRUIDu_EA','V4LkOOaMaaw','',2,'2015-09-14 14:35:24'),(378,444,'http://www.youtube.com/watch?v=8Idf7CfZ1Lc','8Idf7CfZ1Lc','',1,'2015-09-15 17:50:32'),(379,467,'http://www.youtube.com/watch?v=EUpxhLczAlQ','EUpxhLczAlQ','',1,'2015-09-21 10:36:58'),(380,464,'http://www.youtube.com/watch?v=hYcIOuo_pDo','hYcIOuo_pDo','',4,'2015-09-21 11:06:47'),(381,460,'http://www.youtube.com/watch?v=hYcIOuo_pDo','hYcIOuo_pDo','',5,'2015-09-21 11:07:02'),(382,464,'http://www.youtube.com/watch?v=i18zUsUI1F4','i18zUsUI1F4','',3,'2015-09-21 11:12:02'),(383,454,'http://www.youtube.com/watch?v=H2rMIZlvv1k','H2rMIZlvv1k','',2,'2015-09-23 17:48:03'),(384,444,'http://www.youtube.com/watch?v=Gfbep8ctaUs','Gfbep8ctaUs','',2,'2015-10-05 09:22:14'),(385,468,'http://www.youtube.com/watch?v=tat02fKVnjg','tat02fKVnjg','',1,'2015-10-06 14:25:58'),(386,482,'http://www.youtube.com/watch?v=qQcAafHgIDM','qQcAafHgIDM','',1,'2015-12-01 14:28:25');
/*!40000 ALTER TABLE `pedulikasih_album_video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-27 23:57:15
