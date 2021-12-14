-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 02:56 PM
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
(10, 20, 250000);

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
(16, 2, 0, 1),
(17, 1, 0, 1),
(21, 20, 2500000, 2);

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
(13, 'Kelas 6');

-- --------------------------------------------------------

--
-- Table structure for table `master_siswa`
--

CREATE TABLE `master_siswa` (
  `id` int(11) NOT NULL,
  `foto_siswa` text NOT NULL,
  `nis` bigint(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `status_les` int(11) NOT NULL,
  `status_makan` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_siswa`
--

INSERT INTO `master_siswa` (`id`, `foto_siswa`, `nis`, `nama_siswa`, `id_kelas`, `status_les`, `status_makan`, `tanggal`) VALUES
(206, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 307, 'Abraruz Sakha Kyanda Putera', 1, 0, 0, '2021-12-08 15:39:56'),
(207, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 308, 'Adeola Syavira', 1, 0, 1, '2021-12-08 15:40:38'),
(208, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 309, 'Ahmad Hisyam Ahza Abdillah', 1, 0, 0, '2021-12-08 15:41:42'),
(209, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 310, 'Aisyah As-Shofiyyah Fillah', 1, 0, 0, '2021-12-08 15:42:19'),
(210, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 311, 'Al-Dzaki Giri Satya', 1, 1, 0, '2021-12-08 15:42:53'),
(211, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 312, 'Al-Ghazali', 1, 0, 0, '2021-12-08 15:43:20'),
(212, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 313, 'Dafarel Abiyan Al-Farizi', 1, 0, 0, '2021-12-08 15:43:54'),
(213, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 314, 'Ghassani Fakhirah Althaf Sahifah', 1, 1, 1, '2021-12-08 15:44:39'),
(214, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 315, 'Hafidz Maulana', 1, 0, 1, '2021-12-08 15:45:19'),
(215, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 316, 'Hanif Al-Fauzan', 1, 0, 1, '2021-12-08 15:45:54'),
(216, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 317, 'Ismail Uwais Assalafy', 1, 1, 0, '2021-12-08 15:46:24'),
(217, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 318, 'Jaisyi Muhammad', 1, 0, 1, '2021-12-08 15:46:58'),
(218, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 319, 'Karissa Nur Muharromah Y.', 1, 0, 0, '2021-12-08 15:47:26'),
(219, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 320, 'King Uwais AL-Qorni', 1, 0, 0, '2021-12-08 15:47:54'),
(220, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 321, 'M. Althaf Muzakky', 1, 0, 0, '2021-12-08 15:48:19'),
(221, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 322, 'M. Faiz Ramadhan', 1, 1, 0, '2021-12-08 15:48:51'),
(222, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 323, 'M. Naf\'an Ubaidillah', 1, 0, 0, '2021-12-08 15:49:20'),
(223, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 324, 'M. Ubaidillah', 1, 1, 0, '2021-12-08 15:49:52'),
(224, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 325, 'Shafiyah Amirah Yumna', 1, 0, 0, '2021-12-08 15:50:21'),
(226, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 326, 'Sultan Zahfran Li Priambodo', 1, 0, 0, '2021-12-08 15:55:32'),
(245, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 457, 'Aisyah', 6, 1, 1, '2021-12-14 11:19:14'),
(246, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 122, 'ananda', 6, 1, 1, '2022-12-14 04:24:42'),
(247, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 122, 'Aisyah', 6, 1, 1, '2021-12-14 11:36:52'),
(249, 'png-transparent-logo-person-user-person-icon-rectangle-photography-computer-wallpaper.png', 321, 'Aisyah', 1, 1, 1, '2021-12-14 13:54:44');

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
(24, 2023);

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
(11, 20, 985000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
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
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `les`
--
ALTER TABLE `les`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `makan`
--
ALTER TABLE `makan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `master_siswa`
--
ALTER TABLE `master_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `master_tahun`
--
ALTER TABLE `master_tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1612;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
