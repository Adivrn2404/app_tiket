-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2018 pada 03.37
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `reservation_code` varchar(200) NOT NULL,
  `reservation_at` varchar(200) NOT NULL,
  `reservation_date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `seat_code` varchar(200) NOT NULL,
  `ruteid` int(11) NOT NULL,
  `depart_at` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` int(11) NOT NULL,
  `depart_at` varchar(200) NOT NULL,
  `rute_from` varchar(200) NOT NULL,
  `rute_to` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `transportationid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation`
--

CREATE TABLE `transportation` (
  `id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `seat_qty` int(20) NOT NULL,
  `transportation_typeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation_type`
--

CREATE TABLE `transportation_type` (
  `id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `level`) VALUES
(1, 'adiv', 'adiv', 'Adiv Rizkian Nugratama', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `ruteid` (`ruteid`),
  ADD KEY `userid` (`userid`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportationid` (`transportationid`);

--
-- Indeks untuk tabel `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_typeid` (`transportation_typeid`);

--
-- Indeks untuk tabel `transportation_type`
--
ALTER TABLE `transportation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transportation_type`
--
ALTER TABLE `transportation_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`customerid`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`ruteid`) REFERENCES `rute` (`id`);

--
-- Ketidakleluasaan untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`transportationid`) REFERENCES `transportation` (`id`);

--
-- Ketidakleluasaan untuk tabel `transportation`
--
ALTER TABLE `transportation`
  ADD CONSTRAINT `transportation_ibfk_1` FOREIGN KEY (`transportation_typeid`) REFERENCES `transportation_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
