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
-- Table structure for table `pedulikasih_menu`
--

DROP TABLE IF EXISTS `pedulikasih_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedulikasih_menu` (
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
-- Dumping data for table `pedulikasih_menu`
--

LOCK TABLES `pedulikasih_menu` WRITE;
/*!40000 ALTER TABLE `pedulikasih_menu` DISABLE KEYS */;
INSERT INTO `pedulikasih_menu` VALUES (3,0,'Pemohon','Pemohon','pemohon','','','',3,0,'2014-07-10 08:53:14'),(4,0,'Persyaratan Pemohon','Persyaratan','persyaratan','','<div style=\"font-size: medium; font-family: Calibri; border-bottom: 1px solid #666;\"><strong>Persyaratan Pemohon:</strong></div>\n<ol>\n<li style=\"text-align: justify;\">Mengisi 3 lembar formulir yaitu: <strong>Permohonan Bantuan Pembiayaan</strong>,&nbsp;<strong>Surat Pernyataan</strong>, dan <strong>Data Pribadi Calon Tertanggung</strong> yang dapat di <em>download</em> pada <a href=\"http://static.indosiar.com/pdf/pedulikasih/formulir.pdf\">Menu Formulir</a><span style=\"font-size: x-small;\"> a</span><span style=\"font-size: small;\"></span>tau dapat diambil di Sekretariat Peduli Kasih Indosiar;</li>\n<li style=\"text-align: justify;\">Melampirkan <strong>surat keterangan dokter</strong> yang telah ditandatangani dokter yang bersangkutan pada pemeriksaan awal, baik di puskesmas, klinik maupun rumah sakit, yang isinya menjelaskan: Jenis penyakit yang diderita, Tindakan medis yang perlu dilakukan, Perkiraan biaya;</li>\n<li style=\"text-align: justify;\">Melampirkan <strong>Surat Keterangan Tidak Mampu </strong><strong>(SKTM)</strong> dari RT/RW/Kepala Desa;</li>\n<li style=\"text-align: justify;\">Melampirkan <strong>Surat Keterangan Tidak Memiliki BPJS/ JAMKESMAS/ JAMKESDA</strong> dari RT/RW/Kepala Desa;</li>\n<li style=\"text-align: justify;\">Melampirkan<strong> fotokopi KTP &amp; Kartu Keluarga</strong>;</li>\n<li style=\"text-align: justify;\">Melampirkan <strong>fotokopi Surat Keterangan Lahir/Akte Lahir</strong> untuk anak-anak yang&nbsp;belum tercatat di dalam Kartu Keluarga;</li>\n<li style=\"text-align: justify;\">Melampirkan<strong> foto ukuran 3R (berwarna)</strong> kondisi keadaan terakhir pasien.</li>\n</ol>\n<p>&nbsp;</p>\n<p>Jenis penyakit yang diderita pasien harus dapat disembuhkan berdasarkan rekomendasi dokter dengan ketentuan sebagai berikut:<strong><br /></strong></p>\n<ol>\n<li style=\"text-align: justify;\">Peduli Kasih mendapatkan jaminan dari Dokter, bahwa jenis penyakit yang diderita calon pasien dapat disembuhkan;</li>\n<li style=\"text-align: justify;\">Pasien yang mendapat jaminan dari Peduli Kasih, benar-benar menderita penyakit yang dapat dipertanggungjawabkan baik kepada donatur dan keluarga pasien itu sendiri.</li>\n<li style=\"text-align: justify;\">Pembatasan jenis penyakit yang ditanggung Peduli Kasih sbb:</li>\n</ol>\n<ul>\n<li style=\"list-style-type: none;\">\n<ul>\n<li style=\"text-align: justify;\">Bukan penyakit yang membutuhkan penanganan berkelanjutan, seperti Anemia, Thalasemia, Tumor, Kanker, Hydrocephalus, dll;</li>\n<li style=\"text-align: justify;\">Bukan penyakit yang disebabkan gaya hidup seseorang, seperti paru-paru (perokok), hati dan ginjal;</li>\n<li style=\"text-align: justify;\">Program Alat Bantu Dengar, ortotik prostetik, kaki/tangan palsu dan alat penyangga lainnya, Tahun 2015 <span style=\"text-decoration: underline;\">sementara dihentikan</span>.</li>\n</ul>\n</li>\n</ul>','',3,1,'2015-01-26 10:16:30'),(5,0,'Formulir','Formulir','formulir','','','formulir.pdf',4,1,'2014-07-10 08:53:26'),(6,0,'Donatur','Donatur','donatur','donatur','','',5,1,'2014-07-10 08:51:24'),(8,8,'Laporan Audit','Laporan Audit','laporan-audit','audit','','laporan-audit.pdf',6,1,'2012-07-24 15:49:32'),(9,0,'Kontak','Kontak','kontak','','<p><strong>PT Indosiar Visual Mandiri</strong></p>\n<p><strong>(Indosiar Peduli)<br /></strong></p>\n<p>Jl. Damai No. 11, Daan Mogot</p>\n<p>Jakarta 11510</p>\n<p>Telp. (021) 565-5711 atau (021) 566-6878</p>\n<p>Fax. (021) 5697-6827</p>\n<p>Web. <a href=\"http://www.indosiar.com/pedulikasih\">www.indosiar.com/pedulikasih</a></p>\n<p>&nbsp;</p>\n<p><strong>\"Kepedulian Kita, Harapan Mereka\"<br /></strong></p>\n<p>Rekening Bank<strong> BCA 001 303 8888 a/n Indosiar </strong>(Peduli Kasih)<strong><br /></strong></p>\n<p>Cabang Asemka</p>\n<p>*Kode Bank BCA 014</p>\n<p>&nbsp;</p>\n<p style=\"text-align: left;\"><span style=\"color: #ff0000;\">HATI-HATI TERHADAP PENIPUAN YANG MENGATASNAMAKAN PEDULI KASIH, KAMI TIDAK PERNAH MENGGUNAKAN SMS/REKENING ATAS NAMA PERORANGAN DALAM MENGGALANG DANA PEMIRSA.</span></p>\n<p>&nbsp;</p>\n<p><strong>Follow us on</strong></p>\n<p>Facebook : <a href=\"https://www.facebook.com/IndosiarPeduli\">Indosiar Peduli</a></p>\n<p>Twitter&nbsp;&nbsp; &nbsp; : <a href=\"https://twitter.com/Indosiar_Peduli\"><span class=\"screen-name\">@Indosiar_Peduli</span></a></p>\n<p>Youtube &nbsp;&nbsp; : <a href=\"http://www.youtube.com/user/IndosiarPeduli\">Indosiar Peduli</a></p>','',8,1,'2015-10-26 14:47:14'),(15,0,'Kegiatan Peduli Kasih','Kegiatan','kegiatan','gallery','','',2,1,'2013-03-25 12:04:00'),(18,0,'Sejarah','Sejarah','sejarah','','<p style=\"text-align: justify;\"><span style=\"font-family: calibri,arial,sans-serif; font-size: medium;\">Dibentuk pada September 2000, Peduli Kasih adalah kelompok kerja yang memiliki tujuan khusus mengetuk hati pemirsa untuk ikut membantu masyarakat kurang mampu yang membutuhkan uluran tangan dalam biaya operasi dan pengobatan berbagai penyakit.</span></p>\n<p style=\"text-align: justify;\"><span style=\"font-family: calibri,arial,sans-serif; font-size: medium;\">Dengan dana yang berasal dari Perseroan dan kedermawanan sosial masyarakat (filantropi) yang digalang oleh Perseroan sebagai wujud kepedulian sosial serta bagian dari fungsi dan peran sosial media massa, <strong>Peduli Kasih membiayai antara lain: operasi jantung, hernia, kolostomi,&nbsp;hipospadia, atresia ani, gondok, katarak, dan bibir sumbing.</strong><br /></span></p>\n<p style=\"text-align: justify;\"><span style=\"font-family: calibri,arial,sans-serif; font-size: medium;\">Seluruh kegiatan Peduli Kasih dapat berjalan lancar berkat terjalinnya kerjasama yang baik dengan banyak rumah sakit, dokter dan sejumlah lembaga pemerintah maupun non-pemerintah di seluruh Indonesia. Biaya kegiatan operasional Peduli Kasih tidak diambil dari dana yang terhimpun, namun ditanggung sepenuhnya oleh Perseroan.</span></p>','',1,1,'2014-07-01 09:50:39'),(19,0,'Laporan Audit 2014','Laporan Audit','laporan-audit','audit','<p>Di sini nanti diisi untuk prologue mengenai laporan audit.</p>\n<p>Sebelah kanan adalah list audit yang sudah masuk ke database, dan siap didownload dalam bentuk pdf.</p>','',6,1,'2015-05-15 15:49:10'),(22,0,'Laporan Tahunan','Laporan Tahunan','laporan-tahunan','kegiatan','','Indosiar Peduli 2014.pdf',8,1,'2015-05-15 18:08:08');
/*!40000 ALTER TABLE `pedulikasih_menu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-28  0:53:05
