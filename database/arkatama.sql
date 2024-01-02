-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2024 pada 06.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkatama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `AGE` int(11) NOT NULL,
  `CITY` varchar(255) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `NAME`, `AGE`, `CITY`, `CREATED_AT`) VALUES
(10, 'TES COBA', 72, 'INDONESIA', '2024-01-01 23:00:02'),
(11, 'MUBESSIRUL UMMAH', 45, 'KABUPATEN BANGKALAN', '2024-01-01 23:00:48'),
(12, 'INDAH PRATIWI', 21, 'ALUN ALUN', '2024-01-01 23:01:54'),
(16, 'COBA LAGI', 22, 'MALANG', '2024-01-01 23:08:35'),
(20, 'COBA LAGI ', 22, 'MALANG', '2024-01-01 23:15:19'),
(21, 'COBA LAGI ', 22, 'MALANG', '2024-01-01 23:15:24'),
(22, 'MUBESSIRUL UMMAH ', 20, 'BANGKALAN INDONESIA', '2024-01-01 23:15:54'),
(23, 'MUBES ', 19, 'BANGKALAN', '2024-01-01 23:16:18'),
(24, 'MUBES ', 19, 'BANGKALAN', '2024-01-01 23:16:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
