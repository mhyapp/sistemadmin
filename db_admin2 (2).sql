-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2020 pada 07.04
-- Versi server: 10.1.25-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aomkt`
--

CREATE TABLE `aomkt` (
  `idaomkt` int(11) NOT NULL,
  `nama_ao` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jaminan`
--

CREATE TABLE `jaminan` (
  `idjaminan` int(11) NOT NULL,
  `idjns_jaminan` int(11) NOT NULL,
  `idnasabah` int(11) NOT NULL,
  `no_kontrak` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jns_pengikatan` enum('APHT','SKMHT','FEO','Legalisasi') COLLATE latin1_general_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `agunan` enum('BPKB','SHM','Dep/Tab','') COLLATE latin1_general_ci NOT NULL,
  `realisasi` text COLLATE latin1_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_jaminan`
--

CREATE TABLE `jenis_jaminan` (
  `idjns_jaminan` int(11) NOT NULL,
  `nama_jenis_jaminan` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `jenis_jaminan`
--

INSERT INTO `jenis_jaminan` (`idjns_jaminan`, `nama_jenis_jaminan`) VALUES
(1, 'BPKB'),
(2, 'SHM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `leveluser`
--

CREATE TABLE `leveluser` (
  `idleveluser` int(11) NOT NULL,
  `namalevel` varchar(11) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `leveluser`
--

INSERT INTO `leveluser` (`idleveluser`, `namalevel`) VALUES
(1, 'Admin'),
(2, 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `idnasabah` int(11) NOT NULL,
  `nama_nasabah` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`idnasabah`, `nama_nasabah`, `alamat`) VALUES
(1, 'Rozak', 'Jogja'),
(2, 'Ani', 'Jepara'),
(3, 'nasabah', 'Yogyakarta'),
(4, 'Paijo', 'Ngawen'),
(5, 'Egi', 'Magelang'),
(6, 'Refi', 'jogja'),
(7, 'Paijo Endro', 'Sedayu Bantul'),
(8, 'Egi m', 'sedayu'),
(9, 'Harjo', 'Sleman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notaris`
--

CREATE TABLE `notaris` (
  `idnotaris` int(11) NOT NULL,
  `nama_notaris` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `notaris`
--

INSERT INTO `notaris` (`idnotaris`, `nama_notaris`) VALUES
(1, 'Suwasti'),
(2, 'Sukadi'),
(3, 'Sukadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `idregistrasi` int(11) NOT NULL,
  `no_registrasi` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_nasabah` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `no_kontrak` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `plafond` float NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `idaomkt` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_keluar`
--

CREATE TABLE `transaksi_keluar` (
  `id_transaksi_keluar` int(11) NOT NULL,
  `no_faktur` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `idnasabah` int(11) NOT NULL,
  `idnotaris` int(11) NOT NULL,
  `idjaminan` int(11) NOT NULL,
  `tgl_keluar` datetime NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_masuk`
--

CREATE TABLE `transaksi_masuk` (
  `id_transaksi_masuk` int(11) NOT NULL,
  `no_faktur` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `idleveluser` int(11) NOT NULL,
  `password` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `idleveluser`, `password`, `nama_lengkap`) VALUES
(1, 'Admin', 1, 'admin', 'nama admin'),
(2, 'admindua', 1, '97deb7c83265cc575c9fbb5a525358bb', 'adminduaya'),
(3, 'nanang', 1, 'cc8839950896aa17b3224887089241ba', 'nanang p'),
(4, 'user', 2, 'ee11cbb19052e40b07aac0ca060c23ee', 'level user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aomkt`
--
ALTER TABLE `aomkt`
  ADD PRIMARY KEY (`idaomkt`);

--
-- Indeks untuk tabel `jaminan`
--
ALTER TABLE `jaminan`
  ADD PRIMARY KEY (`idjaminan`);

--
-- Indeks untuk tabel `jenis_jaminan`
--
ALTER TABLE `jenis_jaminan`
  ADD PRIMARY KEY (`idjns_jaminan`);

--
-- Indeks untuk tabel `leveluser`
--
ALTER TABLE `leveluser`
  ADD PRIMARY KEY (`idleveluser`);

--
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`idnasabah`);

--
-- Indeks untuk tabel `notaris`
--
ALTER TABLE `notaris`
  ADD PRIMARY KEY (`idnotaris`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`idregistrasi`);

--
-- Indeks untuk tabel `transaksi_keluar`
--
ALTER TABLE `transaksi_keluar`
  ADD PRIMARY KEY (`id_transaksi_keluar`),
  ADD KEY `idnasabah` (`idnasabah`),
  ADD KEY `idnotaris` (`idnotaris`),
  ADD KEY `idjaminan` (`idjaminan`);

--
-- Indeks untuk tabel `transaksi_masuk`
--
ALTER TABLE `transaksi_masuk`
  ADD PRIMARY KEY (`id_transaksi_masuk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aomkt`
--
ALTER TABLE `aomkt`
  MODIFY `idaomkt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_jaminan`
--
ALTER TABLE `jenis_jaminan`
  MODIFY `idjns_jaminan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `leveluser`
--
ALTER TABLE `leveluser`
  MODIFY `idleveluser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `idnasabah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `notaris`
--
ALTER TABLE `notaris`
  MODIFY `idnotaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `idregistrasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_keluar`
--
ALTER TABLE `transaksi_keluar`
  MODIFY `id_transaksi_keluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_masuk`
--
ALTER TABLE `transaksi_masuk`
  MODIFY `id_transaksi_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi_keluar`
--
ALTER TABLE `transaksi_keluar`
  ADD CONSTRAINT `transaksi_keluar_ibfk_1` FOREIGN KEY (`idnasabah`) REFERENCES `nasabah` (`idnasabah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_keluar_ibfk_2` FOREIGN KEY (`idnotaris`) REFERENCES `notaris` (`idnotaris`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_keluar_ibfk_3` FOREIGN KEY (`idjaminan`) REFERENCES `jaminan` (`idjaminan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
