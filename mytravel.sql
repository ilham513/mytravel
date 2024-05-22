-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 10:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `armada`
--

CREATE TABLE `armada` (
  `id_armada` int(255) NOT NULL,
  `nama_armada` varchar(255) NOT NULL,
  `tipe_mobil` varchar(255) NOT NULL,
  `jumlah_tampungan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `armada`
--

INSERT INTO `armada` (`id_armada`, `nama_armada`, `tipe_mobil`, `jumlah_tampungan`) VALUES
(1, 'Mayangsari Bhakti', 'Bus', 40),
(2, 'Mikrolet', 'Minibus', 20);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(255) NOT NULL,
  `id_tujuan` int(255) NOT NULL,
  `id_pelanggan` int(255) NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `stamp_waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_armada` int(255) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `sudah_bayar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_tujuan`, `id_pelanggan`, `tanggal_keberangkatan`, `stamp_waktu`, `id_armada`, `paket`, `sudah_bayar`) VALUES
(1, 1, 5, '2024-05-23', '2024-05-16 13:33:52', 1, 'Ekonomis', 0),
(2, 1, 5, '2024-05-28', '2024-05-16 13:34:00', 1, 'Ekonomis', 0),
(3, 1, 6, '2024-05-22', '2024-05-17 13:04:04', 1, 'Ekonomis', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(255) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telpon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_telpon`, `email`, `password`) VALUES
(1, 'Bapak Andi', 'Bekasi', '0899999', '', ''),
(2, 'Ibu Budi', 'Bekasi', '0877777', '', ''),
(3, 'ilham', '', '089898', 'jennie@gmail.com', 'b63d204bf086017e34d8bd27ab969f28'),
(4, 'budi', '', '08989', 'budi@budi.com', '9f1c441765f9cddfa618413dd25fbfbc'),
(5, 'ilham', '', '', 'ilham@ilham.com', '9f51844de353343b080b320689929471'),
(6, 'budi', '', '08666', 'budi@budi.com', '1f4bb7cc3c45d7afcc36c8748b4a148a');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(255) NOT NULL,
  `nama_tujuan` varchar(255) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `nama_tujuan`, `paket`, `harga`) VALUES
(1, 'Padalarang', 'Ekonomis', 250000),
(2, 'Lembang', 'Ekonomis', 220000),
(3, 'Cisarua', 'Ekonomis', 150000),
(4, 'Kawah Putih', 'Ekonomis', 280000),
(5, 'Padalarang Reguler', 'Reguler', 280000),
(6, 'Lembang Reguler', 'Reguler', 250000),
(7, 'Kawah Putih VIP', 'VIP', 320000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `armada`
--
ALTER TABLE `armada`
  ADD PRIMARY KEY (`id_armada`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_tujuan` (`id_tujuan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_armada` (`id_armada`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `armada`
--
ALTER TABLE `armada`
  MODIFY `id_armada` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_armada`) REFERENCES `armada` (`id_armada`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_tujuan`) REFERENCES `tujuan` (`id_tujuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
