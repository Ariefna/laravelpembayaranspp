-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sekolah
-- ------------------------------------------------------
-- Server version	10.3.31-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `biaya_buku` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES (1,1,'Buku Paket Kelas 1',530000,1),(2,2,'Buku Paket Kelas 1',530000,1),(4,3,'Buku Paket Kelas 1',530000,1),(5,1,'Buku Paket Kelas 2',533200,2),(6,2,'Buku Paket Kelas 2',533200,2),(7,3,'Buku Paket Kelas 2',533200,2),(8,1,'Buku Paket Kelas 3',529200,3),(9,2,'Buku Paket Kelas 3',529200,3),(10,3,'Buku Paket Kelas 3',529200,3),(11,1,'Buku Paket Kelas 4',646000,4),(12,2,'Buku Paket Kelas 4',646000,4),(13,3,'Buku Paket Kelas 4',646000,4),(14,1,'Buku Paket Kelas 5',645200,5),(15,2,'Buku Paket Kelas 5',645200,5),(16,3,'Buku Paket Kelas 5',645200,5),(17,1,'Buku Paket Kelas 6',646800,6),(18,2,'Buku Paket Kelas 6',646800,6),(20,3,'Buku Paket Kelas 6',646800,6);
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bulan`
--

DROP TABLE IF EXISTS `bulan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bulan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bulan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bulan`
--

LOCK TABLES `bulan` WRITE;
/*!40000 ALTER TABLE `bulan` DISABLE KEYS */;
INSERT INTO `bulan` VALUES (1,'January'),(2,'February'),(3,'maret'),(4,'april'),(5,'mei'),(6,'juni'),(7,'juli'),(8,'agustus'),(9,'september'),(10,'oktober'),(11,'november'),(12,'desember');
/*!40000 ALTER TABLE `bulan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formulir`
--

DROP TABLE IF EXISTS `formulir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formulir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun` int(11) NOT NULL,
  `biaya_formulir` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulir`
--

LOCK TABLES `formulir` WRITE;
/*!40000 ALTER TABLE `formulir` DISABLE KEYS */;
INSERT INTO `formulir` VALUES (1,1,250000),(2,2,250000),(4,3,250000);
/*!40000 ALTER TABLE `formulir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kegiatan`
--

DROP TABLE IF EXISTS `kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun` int(11) NOT NULL,
  `biaya_kegiatan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kegiatan`
--

LOCK TABLES `kegiatan` WRITE;
/*!40000 ALTER TABLE `kegiatan` DISABLE KEYS */;
INSERT INTO `kegiatan` VALUES (1,1,1250000,2),(2,2,1250000,2),(3,3,1250000,2),(4,4,1250000,2),(5,5,1250000,2),(6,6,1250000,2),(7,7,1250000,2),(8,1,1750000,1),(9,2,1750000,1),(10,3,1750000,1),(11,4,1750000,1),(12,5,1750000,1),(13,6,1750000,1),(15,7,1750000,1);
/*!40000 ALTER TABLE `kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `les`
--

DROP TABLE IF EXISTS `les`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `les` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun` int(11) NOT NULL,
  `biaya_les` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `les`
--

LOCK TABLES `les` WRITE;
/*!40000 ALTER TABLE `les` DISABLE KEYS */;
INSERT INTO `les` VALUES (1,1,100000),(2,2,100000),(3,3,100000),(5,1,0),(6,2,0),(7,3,0);
/*!40000 ALTER TABLE `les` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `makan`
--

DROP TABLE IF EXISTS `makan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `makan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun` int(11) NOT NULL,
  `biaya_makan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `makan`
--

LOCK TABLES `makan` WRITE;
/*!40000 ALTER TABLE `makan` DISABLE KEYS */;
INSERT INTO `makan` VALUES (1,1,2400000,2),(2,2,2400000,2),(3,3,2400000,2),(4,4,2400000,2),(5,5,2400000,2),(6,6,2400000,2),(7,6,2400000,2),(8,7,2400000,2),(9,1,0,1),(10,2,0,1),(11,3,0,1),(12,4,0,1),(13,5,0,1),(14,6,0,1),(15,7,0,1);
/*!40000 ALTER TABLE `makan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master_kelas`
--

DROP TABLE IF EXISTS `master_kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master_kelas`
--

LOCK TABLES `master_kelas` WRITE;
/*!40000 ALTER TABLE `master_kelas` DISABLE KEYS */;
INSERT INTO `master_kelas` VALUES (1,'Kelas 1'),(2,'Kelas 2'),(3,'Kelas 3'),(4,'Kelas 4'),(5,'Kelas 5'),(6,'Kelas 6');
/*!40000 ALTER TABLE `master_kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master_siswa`
--

DROP TABLE IF EXISTS `master_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` bigint(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `status_les` int(11) NOT NULL,
  `status_makan` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master_siswa`
--

LOCK TABLES `master_siswa` WRITE;
/*!40000 ALTER TABLE `master_siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `master_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master_tahun`
--

DROP TABLE IF EXISTS `master_tahun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master_tahun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master_tahun`
--

LOCK TABLES `master_tahun` WRITE;
/*!40000 ALTER TABLE `master_tahun` DISABLE KEYS */;
INSERT INTO `master_tahun` VALUES (1,2022),(2,2021),(3,2020),(4,2019),(5,2018),(6,2017),(7,2016);
/*!40000 ALTER TABLE `master_tahun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pakaian`
--

DROP TABLE IF EXISTS `pakaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun` int(11) NOT NULL,
  `biaya_pakaian` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pakaian`
--

LOCK TABLES `pakaian` WRITE;
/*!40000 ALTER TABLE `pakaian` DISABLE KEYS */;
INSERT INTO `pakaian` VALUES (1,1,500000),(2,2,500000),(3,3,500000);
/*!40000 ALTER TABLE `pakaian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spp`
--

DROP TABLE IF EXISTS `spp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun` int(11) NOT NULL,
  `biaya_spp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spp`
--

LOCK TABLES `spp` WRITE;
/*!40000 ALTER TABLE `spp` DISABLE KEYS */;
INSERT INTO `spp` VALUES (1,1,950000),(2,2,850000),(3,3,850000),(4,4,825000),(5,5,800000),(6,6,700000),(7,7,790000);
/*!40000 ALTER TABLE `spp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-17 22:00:42