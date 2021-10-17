-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 09:51 AM
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
-- Database: `spp_sekolah`
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
(1, 1, 'Buku Paket Kelas 1', 530000, 1),
(2, 2, 'Buku Paket Kelas 1', 530000, 1),
(4, 3, 'Buku Paket Kelas 1', 530000, 1),
(5, 1, 'Buku Paket Kelas 2', 533200, 2),
(6, 2, 'Buku Paket Kelas 2', 533200, 2),
(7, 3, 'Buku Paket Kelas 2', 533200, 2),
(8, 1, 'Buku Paket Kelas 3', 529200, 3),
(9, 2, 'Buku Paket Kelas 3', 529200, 3),
(10, 3, 'Buku Paket Kelas 3', 529200, 3),
(11, 1, 'Buku Paket Kelas 4', 646000, 4),
(12, 2, 'Buku Paket Kelas 4', 646000, 4),
(13, 3, 'Buku Paket Kelas 4', 646000, 4),
(14, 1, 'Buku Paket Kelas 5', 645200, 5),
(15, 2, 'Buku Paket Kelas 5', 645200, 5),
(16, 3, 'Buku Paket Kelas 5', 645200, 5),
(17, 1, 'Buku Paket Kelas 6', 646800, 6),
(18, 2, 'Buku Paket Kelas 6', 646800, 6),
(20, 3, 'Buku Paket Kelas 6', 646800, 6);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id` int(11) NOT NULL,
  `nama_bulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 1, 250000),
(2, 2, 250000),
(4, 3, 250000);

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
(1, 1, 1250000, 2),
(2, 2, 1250000, 2),
(3, 3, 1250000, 2),
(4, 4, 1250000, 2),
(5, 5, 1250000, 2),
(6, 6, 1250000, 2),
(7, 7, 1250000, 2),
(8, 1, 1750000, 1),
(9, 2, 1750000, 1),
(10, 3, 1750000, 1),
(11, 4, 1750000, 1),
(12, 5, 1750000, 1),
(13, 6, 1750000, 1),
(15, 7, 1750000, 1);

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
(1, 1, 100000),
(2, 2, 100000),
(3, 3, 100000),
(5, 1, 0),
(6, 2, 0),
(7, 3, 0);

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
(1, 1, 2400000, 2),
(2, 2, 2400000, 2),
(3, 3, 2400000, 2),
(4, 4, 2400000, 2),
(5, 5, 2400000, 2),
(6, 6, 2400000, 2),
(7, 6, 2400000, 2),
(8, 7, 2400000, 2),
(9, 1, 0, 1),
(10, 2, 0, 1),
(11, 3, 0, 1),
(12, 4, 0, 1),
(13, 5, 0, 1),
(14, 6, 0, 1),
(15, 7, 0, 1);

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
(6, 'Kelas 6');

-- --------------------------------------------------------

--
-- Table structure for table `master_siswa`
--

CREATE TABLE `master_siswa` (
  `id` int(11) NOT NULL,
  `nis` bigint(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `status_les` int(11) NOT NULL,
  `status_makan` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_siswa`
--

INSERT INTO `master_siswa` (`id`, `nis`, `nama_siswa`, `id_kelas`, `status_les`, `tanggal`) VALUES
(1, 123456789, 'Rayyan', 1, 1, '2021-10-17 06:30:57');

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
(1, 2022),
(2, 2021),
(3, 2020),
(4, 2019),
(5, 2018),
(6, 2017),
(7, 2016);

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
(3, 3, 500000);

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
(7, 7, 790000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_siswa`, `debet`, `kredit`, `keterangan`, `bukti`, `tanggal`) VALUES
(1, 1, 0, 500000, 'Biaya Pakaian 2021', NULL, '2021-10-17 06:30:57'),
(2, 1, 0, 850000, 'Biaya SPP 2021', NULL, '2021-10-17 06:30:57'),
(3, 1, 0, 1750000, 'Biaya Kegiatan 2021', NULL, '2021-10-17 06:30:57'),
(4, 1, 0, 530000, 'Biaya Buku Buku Paket Kelas 1 2021', NULL, '2021-10-17 06:30:57'),
(5, 1, 0, 0, 'Biaya makanan 2021', NULL, '2021-10-17 06:30:57');

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
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `les`
--
ALTER TABLE `les`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `makan`
--
ALTER TABLE `makan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_siswa`
--
ALTER TABLE `master_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_tahun`
--
ALTER TABLE `master_tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
