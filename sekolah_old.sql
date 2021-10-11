-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2021 pada 06.02
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

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
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `buku` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `id_tahun`, `buku`, `harga`, `id_kelas`) VALUES
(1, 2, 'Tematik SD tm 1', 59000, 1),
(2, 2, 'Tematik SD tm 2', 59000, 1),
(3, 2, 'Tematik SD tm 3', 59000, 1),
(4, 2, 'Tematik SD tm 4', 59000, 1),
(5, 2, 'Tematik SD tm 5', 59000, 1),
(6, 2, 'Tematik SD tm 6', 59000, 1),
(7, 2, 'Tematik SD tm 7', 59000, 1),
(8, 2, 'Tematik SD tm 8', 59000, 1),
(9, 2, 'English SD RB', 77000, 1),
(10, 2, 'PENDAIS', 72000, 1),
(11, 2, 'TANTRI BASA JATIM SD', 29000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE `bulan` (
  `id` int(11) NOT NULL,
  `nama_bulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bulan`
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
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `uang_gedung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`id`, `id_tahun`, `uang_gedung`) VALUES
(1, 1, 9800000),
(2, 2, 9800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `id_tahun`, `harga`, `status`) VALUES
(1, 1, 1250000, 1),
(2, 1, 1750000, 2),
(3, 2, 1250000, 1),
(4, 2, 1750000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama`) VALUES
(1, 'Kelas 1'),
(2, 'Kelas 2'),
(3, 'Kelas 3'),
(4, 'Kelas 4'),
(5, 'Kelas 5'),
(7, 'Kelas 6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `les`
--

CREATE TABLE `les` (
  `id` int(11) NOT NULL,
  `harga_les` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `les`
--

INSERT INTO `les` (`id`, `harga_les`, `id_tahun`) VALUES
(2, 200000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `makan`
--

CREATE TABLE `makan` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `harga_makan` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makan`
--

INSERT INTO `makan` (`id`, `id_tahun`, `harga_makan`, `status`) VALUES
(1, 1, 2400000, 1),
(2, 1, 200000, 2),
(3, 2, 2400000, 1),
(4, 2, 200000, 2),
(5, 1, 0, 1),
(6, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `harga_pakaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `id_tahun`, `harga_pakaian`) VALUES
(1, 1, 500000),
(2, 2, 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` bigint(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `uang_makan` enum('lunas','angsur') NOT NULL DEFAULT 'lunas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama_siswa`, `id_kelas`, `uang_makan`) VALUES
(1, 16410100076, 'Ray', 2, 'lunas'),
(2, 2000, 'inii', 6, 'lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `harga_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id`, `id_tahun`, `harga_spp`) VALUES
(1, 1, 950000),
(2, 2, 850000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id`, `kode`) VALUES
(1, 2022),
(2, 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tetap`
--

CREATE TABLE `tetap` (
  `id` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tetap`
--

INSERT INTO `tetap` (`id`, `id_tahun`, `harga`, `keterangan`) VALUES
(1, 2, 250000, 'Uang kertas formulir'),
(2, 1, 250000, 'Uang kertas formulir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_sekolah`
--

CREATE TABLE `transaksi_sekolah` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `formulir` int(11) NOT NULL,
  `gedung` int(11) NOT NULL,
  `pakaian` int(11) NOT NULL,
  `buku` int(11) NOT NULL,
  `makanan` int(11) NOT NULL,
  `spp` int(11) NOT NULL,
  `les` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `total` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_sekolah`
--

INSERT INTO `transaksi_sekolah` (`id`, `id_siswa`, `id_kelas`, `formulir`, `gedung`, `pakaian`, `buku`, `makanan`, `spp`, `les`, `id_bulan`, `tanggal`, `total`) VALUES
(1, 1, 2, 250000, 9800000, 500000, 77000, 2400000, 950000, 200000, 10, '2021-10-04', 14177010),
(2, 1, 2, 250000, 9800000, 500000, 59000, 2400000, 950000, 200000, 10, '2021-10-04', 14159010);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `les`
--
ALTER TABLE `les`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `makan`
--
ALTER TABLE `makan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tetap`
--
ALTER TABLE `tetap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_sekolah`
--
ALTER TABLE `transaksi_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `les`
--
ALTER TABLE `les`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `makan`
--
ALTER TABLE `makan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tetap`
--
ALTER TABLE `tetap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi_sekolah`
--
ALTER TABLE `transaksi_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
