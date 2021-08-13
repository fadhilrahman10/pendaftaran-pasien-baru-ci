-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Agu 2021 pada 14.01
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `no_admin` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('master','admin') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no_admin`, `nama`, `email`, `password`, `status`) VALUES
(1, 'Rowen Rahmat Fauzi', 'admin@gmail.com', '12345', 'master'),
(3, 'samudra', 'samudra@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `nrm` varchar(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `no_hp` char(14) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`nrm`, `nama`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `profesi`, `no_hp`, `alamat`, `tanggal_dibuat`) VALUES
('NRM-001', 'Ahmad', 'Jambi', '1999-05-17', 'Islam', 'laki-laki', 'Professor', '081243344342', 'Jl ', '2021-08-13 11:33:46'),
('NRM-002', 'Udin', 'Medan', '1998-02-24', 'Kristen', 'laki-laki', 'Pedagang', '089544321234', 'Jl Hangtuah', '2021-08-13 11:41:46'),
('NRM-003', 'Jhon Lenon', 'Amsterdam', '2000-01-09', 'Islam', 'laki-laki', 'Musisi', '085342773624', 'Jl Taman Sari', '2021-08-13 11:53:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_admin`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nrm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `no_admin` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
