-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2024 pada 01.29
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarastya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `password`, `role`) VALUES
(1, 'tata', '12345678', 'admin'),
(2, 'rizkia', '87654321', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `id_profil` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`id_profil`, `nama`, `email`, `nomor`, `deskripsi`, `foto`) VALUES
(23, 'tata', 'riskiatata8@gmail.com', '0908087909', 'koki', ''),
(24, 'tata', 'riskiatata8@gmail.com', '0908087909', 'koki', ''),
(25, 'tata', 'riskiatata8@gmail.com', '0908087909', 'koki', ''),
(26, 'riskia', 'riskiatata8@gmail.com', '1234544', 'asaa', ''),
(27, 'riskia', 'riskiatata8@gmail.com', '1234544', 'asaa', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id_profil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
