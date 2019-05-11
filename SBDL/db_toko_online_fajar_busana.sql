-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mei 2019 pada 05.58
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_toko_online_fajar_busana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE IF NOT EXISTS `data_admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`Id`, `Username`, `Password`) VALUES
(0, '', ''),
(1, '2', '4'),
(2, '3', '4'),
(17141001, 'Majalengka01', '0001'),
(17141002, 'Majalengka02', '0002'),
(17141003, 'Majalengka03', '0003'),
(17141004, 'Majalengka04', '0004'),
(17141005, 'Majalengka05', '0005'),
(17141006, 'Majalengka06', '0006'),
(17141007, 'Majalengka07', '0007'),
(17141008, 'Majalengka08', '0008'),
(17141009, 'Majalengka09', '0009'),
(17141010, 'Majalengka10', '0010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE IF NOT EXISTS `data_barang` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Warna` varchar(25) NOT NULL,
  `Ukuran` varchar(15) NOT NULL,
  `Kategori` varchar(35) NOT NULL,
  `Harga` int(30) NOT NULL,
  `Stock` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`Id`, `Nama`, `Deskripsi`, `Warna`, `Ukuran`, `Kategori`, `Harga`, `Stock`) VALUES
(17141001, 'Siska', 'Membeli baju kaos', 'coklat', 'M', 'Konsumen01', 0, 2),
(17141002, 'Intan', 'Membeli baju kemeja', 'biru', 'S', 'Konsumen02', 0, 3),
(17141003, 'Anggia', 'Membeli gamis', 'abu-abu', 'M', 'Konsumen03', 0, 4),
(17141004, 'Sifa', 'Membeli celana', 'hitam', 'XL', 'Konsumen04', 0, 5),
(17141005, 'Iis', 'Membeli baju kemeja', 'abu-abu', 'M', 'Konsumen05', 0, 2),
(17141006, 'Aenun', 'Membeli baju kaos', 'Hijau', 'M', 'Konsumen06', 0, 3),
(17141007, 'Tuti', 'Membeli gamis', 'pink', 'M', 'Konsumen07', 0, 1),
(17141008, 'Novi', 'Membeli baju kaos', 'Ungu', 'M', 'Konsumen08', 0, 2),
(17141009, 'Fitria', 'Membeli baju kemeja', 'coklat', 'M', 'Konsumen09', 0, 1),
(17141010, 'Kartika', 'Membeli baju kaos', 'hitam', 'XL', 'Konsumen10', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kategori`
--

CREATE TABLE IF NOT EXISTS `data_kategori` (
  `Kategori` varchar(35) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kategori`
--

INSERT INTO `data_kategori` (`Kategori`, `Id`) VALUES
('Konsumen01', 17141001),
('Konsumen02', 17141002),
('Konsumen03', 17141003),
('Konsumen04', 17141004),
('Konsumen05', 17141005),
('Konsumen06', 17141006),
('Konsumen07', 17141007),
('Konsumen08', 17141008),
('Konsumen09', 17141009),
('Konsumen10', 17141010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_no_transaksi`
--

CREATE TABLE IF NOT EXISTS `data_no_transaksi` (
  `Username` varchar(20) NOT NULL,
  `Notransaksi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_no_transaksi`
--

INSERT INTO `data_no_transaksi` (`Username`, `Notransaksi`) VALUES
('Majalengka01', '01'),
('Majalengka02', '02'),
('Majalengka03', '03'),
('Majalengka04', '04'),
('Majalengka05', '05'),
('Majalengka06', '06'),
('Majalengka07', '07'),
('Majalengka08', '08'),
('Majalengka09', '09'),
('Majalengka10', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelanggan`
--

CREATE TABLE IF NOT EXISTS `data_pelanggan` (
  `Nama` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL,
  `Alamat` text NOT NULL,
  `Email` text NOT NULL,
  `Telepone` varchar(25) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`Nama`, `Id`, `Alamat`, `Email`, `Telepone`, `Username`, `Password`) VALUES
('Aenun', 17141006, 'Sumberjaya', 'Aenun06@gmail.com', '082333414', 'Majalengka06', '0006'),
('Anggia', 17141003, 'Jatiwangi', 'Anggia03@gmail.com', '082333474', 'Majalengka03', '0003'),
('Fitria', 17141009, 'Kertajati', 'Fitria09@gmail.com', '082333434', 'Majalengka09', '0009'),
('Iis', 17141005, 'Salawana', 'Iis05@gmail.com', '082333494', 'Majalengka05', '0005'),
('Intan', 17141002, 'Kasokandel', 'Intan02@gmail.com', '082333464', 'Majalengka02', '0002'),
('Kartika', 17141010, 'Falasah', 'Kartika10@gmail.com', '082333444', 'Majalengka10', '0010'),
('Novi', 17141008, 'Balida', 'Novi08@gmail.com', '082333434', 'Majalengka08', '0008'),
('Sifa', 17141004, 'Banjaran', 'Sifa04@gmail.com', '082333484', 'Majalengka04', '0004'),
('Siska', 17141001, 'Ranjiwetan', 'Siska01@gmail.com', '082333454', 'Majalengka01', '0001'),
('Tuti', 17141007, 'Kadipaten', 'Tuti07@gmail.com', '082333424', 'Majalengka07', '0007');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_transaksi`
--

CREATE TABLE IF NOT EXISTS `data_transaksi` (
  `Notransaksi` varchar(25) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Harga` int(20) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `Subtotal` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_transaksi`
--

INSERT INTO `data_transaksi` (`Notransaksi`, `Username`, `Id`, `Nama`, `Harga`, `Jumlah`, `Subtotal`) VALUES
('01', 'Majalengka01', 17141001, 'Siska', 0, 2, 5),
('02', 'Majalengka02', 17141002, 'Intan', 0, 1, 3),
('03', 'Majalengka03', 17141003, 'Anggia', 0, 2, 6),
('04', 'Majalengka04', 17141004, 'Sifa', 0, 1, 7),
('05', 'Majalengka05', 17141005, 'Iis', 0, 3, 4),
('06', 'Majalengka06', 17141006, 'Aenun', 0, 2, 7),
('07', 'Majalengka07', 17141001, 'tuti', 0, 2, 5),
('08', 'Majalengka08', 17141008, 'Novi', 0, 1, 3),
('09', 'Majalengka09', 17141009, 'Fitria', 0, 4, 7),
('10', 'Majalengka10', 17141010, 'Kartika', 0, 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
 ADD PRIMARY KEY (`Id`), ADD KEY `Kategori` (`Kategori`);

--
-- Indexes for table `data_kategori`
--
ALTER TABLE `data_kategori`
 ADD PRIMARY KEY (`Kategori`), ADD KEY `Id` (`Id`);

--
-- Indexes for table `data_no_transaksi`
--
ALTER TABLE `data_no_transaksi`
 ADD PRIMARY KEY (`Username`), ADD KEY `Notransaksi` (`Notransaksi`);

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
 ADD PRIMARY KEY (`Nama`), ADD KEY `Id` (`Id`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
 ADD PRIMARY KEY (`Notransaksi`), ADD KEY `Id` (`Id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
ADD CONSTRAINT `data_barang_ibfk_1` FOREIGN KEY (`Kategori`) REFERENCES `data_kategori` (`Kategori`);

--
-- Ketidakleluasaan untuk tabel `data_kategori`
--
ALTER TABLE `data_kategori`
ADD CONSTRAINT `data_kategori_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `data_admin` (`Id`);

--
-- Ketidakleluasaan untuk tabel `data_no_transaksi`
--
ALTER TABLE `data_no_transaksi`
ADD CONSTRAINT `data_no_transaksi_ibfk_1` FOREIGN KEY (`Notransaksi`) REFERENCES `data_transaksi` (`Notransaksi`);

--
-- Ketidakleluasaan untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
ADD CONSTRAINT `data_pelanggan_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `data_admin` (`Id`);

--
-- Ketidakleluasaan untuk tabel `data_transaksi`
--
ALTER TABLE `data_transaksi`
ADD CONSTRAINT `data_transaksi_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `data_barang` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
