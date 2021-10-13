-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 08:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `biaya_buku` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `id_tahun`, `nama_buku`, `biaya_buku`, `id_kelas`) VALUES
(12, 1, 'Buku Paket Kelas 1', 530000, 1),
(13, 2, 'Buku Paket Kelas 1', 530000, 1),
(14, 1, 'Buku Paket Kelas 2', 533200, 2),
(15, 2, 'Buku Paket Kelas 2', 533200, 2),
(16, 1, 'Buku Paket Kelas 3', 529200, 3),
(17, 2, 'Buku Paket Kelas 3', 529200, 3),
(18, 1, 'Buku Paket Kelas 4', 646000, 4),
(19, 2, 'Buku Paket Kelas 4', 646000, 4),
(20, 1, 'Buku Paket Kelas 5', 645200, 5),
(21, 2, 'Buku Paket Kelas 5', 645200, 5),
(22, 1, 'Buku Paket Kelas 6', 646800, 7),
(23, 2, 'Buku Paket Kelas 6', 646800, 7);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id` int(11) NOT NULL,
  `nama_bulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id`, `nama_bulan`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'maret'),
(4, 'april'),
(5, 'mei'),
(6, 'juni'),
(7, 'juli'),
(8, 'agustus'),
(9, 'september'),
(10, 'oktober'),
(11, 'november'),
(12, 'desember');

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `biaya_formulir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id`, `id_tahun`, `biaya_formulir`) VALUES
(1, 2, 250000),
(2, 1, 250000),
(3, 3, 250000),
(5, 4, 250000),
(6, 8, 250000);

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `biaya_gedung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id`, `id_tahun`, `biaya_gedung`) VALUES
(1, 1, 9800000),
(4, 2, 7000000),
(5, 3, 7000000),
(6, 4, 7000000),
(7, 2, 8400000),
(8, 8, 8400000),
(9, 3, 8400000),
(10, 8, 7000000),
(11, 2, 14000000),
(12, 3, 14000000),
(13, 2, 14000000),
(14, 8, 14000000);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `biaya_kegiatan` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `id_tahun`, `biaya_kegiatan`, `status`) VALUES
(1, 1, 1250000, 1),
(2, 1, 1750000, 2),
(3, 2, 1250000, 1),
(4, 2, 1750000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `les`
--

CREATE TABLE `les` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `biaya_les` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `les`
--

INSERT INTO `les` (`id`, `id_tahun`, `biaya_les`) VALUES
(1, 1, 200000),
(2, 2, 100000),
(3, 8, 100000),
(4, 3, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `makan`
--

CREATE TABLE `makan` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `biaya_makan` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makan`
--

INSERT INTO `makan` (`id`, `id_tahun`, `biaya_makan`, `status`) VALUES
(7, 1, 200000, 2),
(9, 2, 200000, 2),
(10, 3, 200000, 2),
(11, 4, 200000, 2),
(12, 5, 200000, 2),
(14, 6, 200000, 2),
(15, 7, 200000, 2),
(16, 1, 2400000, 2),
(17, 2, 2400000, 2),
(18, 3, 2400000, 2),
(19, 4, 2400000, 2),
(20, 5, 2400000, 2),
(22, 6, 2400000, 2),
(23, 7, 2400000, 2),
(24, 8, 200000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `master_kelas`
--

CREATE TABLE `master_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_kelas`
--

INSERT INTO `master_kelas` (`id`, `nama_kelas`) VALUES
(1, 'Kelas 1'),
(2, 'Kelas 2'),
(3, 'Kelas 3'),
(4, 'Kelas 4'),
(5, 'Kelas 5'),
(7, 'Kelas 6');

-- --------------------------------------------------------

--
-- Table structure for table `master_siswa`
--

CREATE TABLE `master_siswa` (
  `id` int(11) NOT NULL,
  `nis` bigint(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_siswa`
--

INSERT INTO `master_siswa` (`id`, `nis`, `nama_siswa`, `id_kelas`) VALUES
(1, 16410100076, 'Ray', 2),
(2, 2000, 'inii', 6);

-- --------------------------------------------------------

--
-- Table structure for table `master_tahun`
--

CREATE TABLE `master_tahun` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_tahun`
--

INSERT INTO `master_tahun` (`id`, `kode`) VALUES
(2, 2021),
(3, 2020),
(4, 2019),
(5, 2018),
(6, 2017),
(7, 2016),
(8, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `biaya_pakaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `id_tahun`, `biaya_pakaian`) VALUES
(1, 1, 500000),
(2, 2, 500000),
(3, 3, 500000),
(4, 4, 500000),
(5, 8, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `biaya_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id`, `id_tahun`, `biaya_spp`) VALUES
(1, 1, 950000),
(2, 2, 850000),
(3, 3, 850000),
(4, 4, 825000),
(5, 5, 800000),
(6, 6, 700000),
(7, 7, 790000),
(8, 8, 950000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `biaya_formulir` int(11) NOT NULL,
  `biaya_gedung` int(11) NOT NULL,
  `biaya_pakaian` int(11) NOT NULL,
  `biaya_buku` int(11) NOT NULL,
  `biaya_makan` int(11) NOT NULL,
  `biaya_spp` int(11) NOT NULL,
  `biaya_les` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `les`
--
ALTER TABLE `les`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makan`
--
ALTER TABLE `makan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kelas`
--
ALTER TABLE `master_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_siswa`
--
ALTER TABLE `master_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_tahun`
--
ALTER TABLE `master_tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);


  ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

  ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `les`
--
ALTER TABLE `les`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `makan`
--
ALTER TABLE `makan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_siswa`
--
ALTER TABLE `master_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_tahun`
--
ALTER TABLE `master_tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
