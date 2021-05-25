-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 04:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `penjualan_id` int(20) NOT NULL,
  `penjualan_nama` text,
  `penjualan_stok` int(20) DEFAULT NULL,
  `penjualan_terjual` int(20) DEFAULT NULL,
  `penjualan_transaksi` date DEFAULT NULL,
  `penjualan_jenis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`penjualan_id`, `penjualan_nama`, `penjualan_stok`, `penjualan_terjual`, `penjualan_transaksi`, `penjualan_jenis`) VALUES
(1, 'Kopi', 100, 10, '2021-05-01', 'Konsumsi'),
(2, 'Teh', 100, 19, '2021-05-05', 'Konsumsi'),
(3, 'Kopi', 90, 15, '2021-05-10', 'Konsumsi'),
(4, 'Pasta Gigi', 100, 20, '2021-05-11', 'Pembersih'),
(5, 'Sabun Mandi', 100, 30, '2021-05-11', 'Pembersih'),
(6, 'Sampo', 100, 25, '2021-05-12', 'Pembersih'),
(7, 'Teh', 81, 5, '2021-05-12', 'Konsumsi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`penjualan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `penjualan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
