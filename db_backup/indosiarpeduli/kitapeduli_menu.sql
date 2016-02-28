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
-- Table structure for table `kitapeduli_menu`
--

DROP TABLE IF EXISTS `kitapeduli_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kitapeduli_menu` (
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kitapeduli_menu`
--

LOCK TABLES `kitapeduli_menu` WRITE;
/*!40000 ALTER TABLE `kitapeduli_menu` DISABLE KEYS */;
INSERT INTO `kitapeduli_menu` VALUES (3,0,'Pemohon','Pemohon','pemohon','','','',3,0,'2013-02-20 15:39:05'),(4,3,'Persyaratan','Persyaratan','persyaratan','','<p><span style=\"font-size: medium; font-family: Calibri;\"><strong>Persyaratan Pemohon:</strong></span></p>\n<ol>\n<li style=\"text-align: justify;\">Mengisi formulir \"Permohonan Bantuan Pembiayaan\", \"Surat Pernyataan\", \"Data Pribadi Calon Tertanggung\" sebagaimana tercantum dalam menu Formulir.</li>\n<li style=\"text-align: justify;\">Melampirkan surat keterangan dokter yang telah ditandatangani dokter yang bersangkutan pada pemeriksaan awal, baik di puskesmas, klinik maupun rumah sakit, yang isinya menjelaskan:</li>\n</ol>\n<ul>\n<li style=\"list-style-type: none;\">\n<ul>\n<li>Jenis penyakit yang diderita</li>\n<li>Tindakan medis yang perlu dilakukan</li>\n<li>Perkiraan biaya</li>\n</ul>\n</li>\n</ul>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.&nbsp; Melampirkan Surat Keterangan Tidak Mampu (&ldquo;SKTM&rdquo;) dari RT/RW/Kepala Desa;</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.&nbsp; Melampirkan fotokopi KTP &amp; Kartu Keluarga;</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5.&nbsp; Melampirkan fotokopi Surat Keterangan Lahir / Akte Lahir untuk anak-anak yang&nbsp;belum tercatat didalam</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kartu Keluarga;</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.&nbsp; Melampirkan foto ukuran 3 R (berwarna) kondisi keadaan terakhir pasien.</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>Jenis penyakit yang diderita pasien harus dapat disembuhkan berdasarkan rekomendasi dokter dengan ketentuan sebagai berikut:<br /></strong></p>\n<ol>\n<li style=\"text-align: justify;\">Peduli Kasih mendapatkan jaminan dari Dokter, bahwa jenis penyakit yang diderita calon pasien dapat disembuhkan;</li>\n<li style=\"text-align: justify;\">Pasien yang mendapat jaminan dari Peduli Kasih, benar-benar menderita penyakit yang dapat dipertanggungjawabkan baik kepada donatur dan keluarga pasien itu sendiri.</li>\n<li style=\"text-align: justify;\">Pembatasan jenis penyakit yang ditanggung Peduli Kasih sbb:</li>\n</ol>\n<ul>\n<li style=\"list-style-type: none;\">\n<ul>\n<li style=\"text-align: justify;\">Bukan penyakit yang membutuhkan penanganan berkelanjutan, seperti Anemia, Thalasemia, Tumor, Kanker, Hydrocephalus, dll;</li>\n<li style=\"text-align: justify;\">Bukan penyakit yang disebabkan gaya hidup seseorang, seperti paru-paru (perokok), hati dan ginjal;</li>\n<li style=\"text-align: justify;\">Bukan penyakit cacat turunan dan kandungan.</li>\n</ul>\n</li>\n</ul>','',1,1,'2015-01-26 10:44:37'),(5,3,'Formulir','Formulir','formulir','','','formulir.pdf',2,1,'2012-08-27 14:10:33'),(6,0,'Donatur','Donatur','donatur','donatur','<br>','',4,1,'2012-06-25 11:56:28'),(7,0,'Berita','Berita','berita','berita','<p style=\"text-align: justify;\"><span style=\"font-size: medium; font-family: Calibri;\">Dengan dana yang diperoleh dari pemirsa Indosiar, Peduli Kasih membiayai operasi jantung, hernia, kolostomi, katarak, bibir sumbing, transplantasi mata, kontraktur jari, pemberian alat bantu dengar dan orthopedic, kaca mata baca, dan penyakit lainnya. Jumlah pasien yang telah ditangani Peduli Kasih sejak 2000, telah mencapai&nbsp; 22.937 pasien. Khusus di tahun 2011, pasien terbantu berjumlah 9.896 pasien.</span></p>','',5,0,'2013-03-26 17:30:45'),(8,8,'Laporan Audit','Laporan Audit','laporan-audit','audit','','laporan-audit.pdf',6,1,'2012-07-24 15:49:32'),(9,0,'Kontak','Kontak','kontak','','<p><strong>PT Indosiar Visual Mandiri</strong></p>\n<p><strong>(Indosiar Peduli)<br /></strong></p>\n<p>Jl. Damai No. 11, Daan Mogot</p>\n<p>Jakarta 11510</p>\n<p>Telp. (021) 565-5711 atau (021) 566-6878</p>\n<p>Fax. (021) 5697-6827</p>\n<p>Web. <a href=\"http://www.indosiar.com/kitapeduli\">www.indosiar.com/kitapeduli</a></p>\n<p>&nbsp;</p>\n<p><span style=\"font-size: medium; color: #0000ff;\"><strong>\"Kepedulian Kita, Harapan Mereka\"<br /></strong></span></p>\n<p><span style=\"font-size: medium; color: #0000ff;\">Rekening Bank <strong>BCA 001 304 0009 a/n Indosiar.PT (<strong>Kita Peduli</strong>)<br /></strong></span></p>\n<p><span style=\"font-size: medium; color: #0000ff;\">*Kode Bank BCA 014</span></p>\n<p><span style=\"color: #ff0000;\">HATI-HATI TERHADAP PENIPUAN YANG MENGATASNAMAKAN KITA PEDULI, KAMI TIDAK PERNAH MENGGUNAKAN SMS/REKENING ATAS NAMA PERORANGAN DALAM MENGGALANG DANA PEMIRSA.</span></p>\n<p>&nbsp;</p>\n<p><strong>Follow us on</strong></p>\n<p>Facebook : <a href=\"https://www.facebook.com/IndosiarPeduli\">Indosiar Peduli</a></p>\n<p>Twitter&nbsp;&nbsp; &nbsp; : <a href=\"https://twitter.com/Indosiar_Peduli\"><span class=\"screen-name\">@Indosiar_Peduli</span></a></p>\n<p>Youtube &nbsp;&nbsp; : <a href=\"http://www.youtube.com/user/IndosiarPeduli\">Indosiar Peduli</a></p>\n<p>&nbsp;</p>','',8,1,'2016-02-25 15:22:46'),(15,0,'Kegiatan Kita Peduli','Kegiatan','kegiatan','gallery','','',2,1,'2013-03-26 10:10:06'),(18,0,'Sejarah','Sejarah','sejarah','','<p style=\"text-align: justify;\"><span style=\"font-family: calibri,arial,sans-serif; font-size: medium;\">Kita Peduli dibentuk dengan tujuan memberikan respon cepat bagi warga saat terkena bencana alam serta meringankan penderitaan masyarakat pada masa pasca bencana.</span></p>\n<p style=\"text-align: justify;\"><span style=\"font-family: calibri,arial,sans-serif; font-size: medium;\">Kegiatan yang awalnya dibentuk saat Bengkulu dihantam gempa bumi pada tahun 2001 ini, bertugas merespon cepat setiap bencana alam yang terjadi di Indonesia dengan menyalurkan bantuan dari Perseroan dan kedermawanan sosial masyarakat (filantropi) berupa makanan, obat-obatan, selimut, alat penerangan, dan lain sebagainya. Selain bantuan-bantuan tersebut, Kita Peduli juga melakukan pembangunan dan perbaikan infrastruktur di daerah yang tertimpa bencana.<br /></span></p>\n<p style=\"text-align: justify;\"><span style=\"font-family: calibri,arial,sans-serif; font-size: medium;\">Dalam melaksanakan aktivitasnya, Kita Peduli bekerjasama dengan berbagai institusi pendidikan, lembaga swadaya masyarakat, Satuan Koordinasi Pelaksana (Satkorlak) Pemerintah Daerah Setempat dan berbagai tim sukarelawan.</span></p>','',1,1,'2013-03-27 18:17:54'),(19,0,'Laporan Audit','Laporan Audit','laporan-audit','audit','<p>Di sini nanti diisi untuk prologue mengenai laporan audit.</p>\n<p>Sebelah kanan adalah list audit yang sudah masuk ke database, dan siap didownload dalam bentuk pdf.</p>','',6,1,'2015-04-14 17:02:26'),(20,0,'Laporan Tahunan','Laporan Tahunan','laporan-tahunan','kegiatan','','indosiar-peduli-2013.pdf',7,1,'2015-05-18 09:58:46');
/*!40000 ALTER TABLE `kitapeduli_menu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-28  0:53:59
