-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Bulan Mei 2024 pada 15.47
-- Versi server: 8.0.30
-- Versi PHP: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewakamera`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `barang_disewa` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jumlah_harga` int NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `nama_penyewa`, `barang_disewa`, `jumlah_harga`, `nomor_telepon`, `gambar`) VALUES
(1, '2024-04-27', 'Aril', 'Sony A6000', 125000, '083890768546', '662f5e57d469c.jpg'),
(2, '2024-04-27', 'Hamzah', 'Canon 750D', 100000, '089765436725', '662f5e62734dd.jpg'),
(5, '2024-04-27', 'Paiq', 'Fujifilm XA10', 110000, '081789658456', '662f5e701df33.jpg'),
(6, '2024-04-27', 'Alep', 'Canon EOS M10', 245000, '087908756478', '662f5e7aa8f8a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'moh amirul hamzah', 'hamzah', '$2y$10$wWdATOPhWKotuaKQ9iJAeOpgV.jrAG/KU7Ho3b1k14jOXs9Wiv50G'),
(2, 'andhika rahmat fauzi', 'andhika', '$2y$10$.WZcSO4zclsv1WEuS5XN1u9cmb5Z5PE9/iesuyzmznE5up7hT5tfa'),
(6, 'adel nofal al bigji', 'adel', '$2y$10$FYFBt.c4gHEsZHO0/VUqeug2p4vemg8PzG2f5karzpTGGgXqOqPaW'),
(7, 'faris dhiyaul faruq', 'faris', '$2y$10$iOmSUFrrTkqj2EFDCboZGOeEAkeao8xim/tkKjwaMpfZGzZb78SRG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
