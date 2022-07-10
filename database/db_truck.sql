-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3080
-- Generation Time: Jul 10, 2022 at 01:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_truck`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Rendy'),
(2, 'demoadmin', 'demoadmin', 'Rendy');

-- --------------------------------------------------------

--
-- Table structure for table `t_driver`
--

CREATE TABLE `t_driver` (
  `id_driver` varchar(5) NOT NULL,
  `nama_driver` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_driver`
--

INSERT INTO `t_driver` (`id_driver`, `nama_driver`, `jenis_kelamin`, `no_telp`, `alamat`) VALUES
('DR-1', 'Supri', 'Pria', '6271947312', 'Kompl Tata Plaza Bl B/24, Sumatera Utara'),
('DR-2', 'Imam', 'Pria', '6261229312', 'Jl Pelajar Pejuang 85, Jawa Barat'),
('DR-3', 'Gendon', 'Pria', '6216312312', 'Jl Binjai Km 8,2, Sumatera Utara');

-- --------------------------------------------------------

--
-- Table structure for table `t_muatan`
--

CREATE TABLE `t_muatan` (
  `id_muatan` varchar(4) NOT NULL,
  `jenis_muatan` enum('Pasir','Tanah','Batu') NOT NULL,
  `harga_per_truck` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_muatan`
--

INSERT INTO `t_muatan` (`id_muatan`, `jenis_muatan`, `harga_per_truck`) VALUES
('MT-1', 'Pasir', 500000),
('MT-2', 'Tanah', 450000),
('MT-3', 'Batu', 550000);

-- --------------------------------------------------------

--
-- Table structure for table `t_pelanggan`
--

CREATE TABLE `t_pelanggan` (
  `id_pelanggan` varchar(9) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `no_telp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pelanggan`
--

INSERT INTO `t_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telp`) VALUES
('PL-001', 'Saryo', 4745345),
('PL-002', 'Soraya', 54353121);

-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi`
--

CREATE TABLE `t_transaksi` (
  `id_transaksi` varchar(20) NOT NULL,
  `id_pelanggan` varchar(9) DEFAULT NULL,
  `id_driver` varchar(5) DEFAULT NULL,
  `id_muatan` varchar(4) DEFAULT NULL,
  `kode_truck` varchar(5) DEFAULT NULL,
  `jumlah_muatan` int(5) DEFAULT NULL,
  `tagihan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_truck`
--

CREATE TABLE `t_truck` (
  `kode_truck` varchar(4) NOT NULL,
  `nama_truck` varchar(50) NOT NULL,
  `max_GVW` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_truck`
--

INSERT INTO `t_truck` (`kode_truck`, `nama_truck`, `max_GVW`) VALUES
('TR-1', 'Mitsubishi Fighter FM 65 FS', 16000),
('TR-2', 'Mitsubishi Fighter X FN 61 FS', 26000),
('TR-3', 'Mitsubishi FM 65 FSL', 16000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `id` (`id`);

--
-- Indexes for table `t_driver`
--
ALTER TABLE `t_driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `t_muatan`
--
ALTER TABLE `t_muatan`
  ADD PRIMARY KEY (`id_muatan`);

--
-- Indexes for table `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_driver` (`id_driver`),
  ADD KEY `id_muatan` (`id_muatan`),
  ADD KEY `kode_truck` (`kode_truck`);

--
-- Indexes for table `t_truck`
--
ALTER TABLE `t_truck`
  ADD PRIMARY KEY (`kode_truck`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD CONSTRAINT `t_transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `t_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_transaksi_ibfk_2` FOREIGN KEY (`id_driver`) REFERENCES `t_driver` (`id_driver`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_transaksi_ibfk_3` FOREIGN KEY (`id_muatan`) REFERENCES `t_muatan` (`id_muatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_transaksi_ibfk_4` FOREIGN KEY (`kode_truck`) REFERENCES `t_truck` (`kode_truck`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
