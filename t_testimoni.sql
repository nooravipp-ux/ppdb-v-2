-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2021 pada 06.07
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_backup_20210830`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_testimoni`
--

CREATE TABLE `t_testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lulusan` varchar(20) NOT NULL,
  `testimoni` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_testimoni`
--

INSERT INTO `t_testimoni` (`id`, `nama`, `lulusan`, `testimoni`, `status`) VALUES
(1, 'Yana', '2017', 'Bagus', 1),
(2, 'Yana M', '2017', 'Bagus Sekali', 1),
(3, 'Yana', '2017', 'Pembelajarannya sangat bagus', 1),
(4, 'Yana M', '2017', 'Fasilitas Lengkap', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_testimoni`
--
ALTER TABLE `t_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_testimoni`
--
ALTER TABLE `t_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
