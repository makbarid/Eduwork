-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 01:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nike`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(32) NOT NULL,
  `kontak` varchar(16) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `kontak`, `alamat`) VALUES
(1, 'Doddy Mulyadi', '082365477456', 'Jl. Pasir Kaliki No.121-123, Pamoyanan, Kec. Cicendo, Kota Bandung'),
(2, 'M Akbar Maulana', '089765421345', 'Jl. Sukajadi, Pasteur, Kota Bandung'),
(3, 'Novianti Lestari', '085778965568', 'Jl. Proklamasi No.53, RT.9/RW.5, Gondangdia, Kec. Menteng, Kota '),
(4, 'Muhammad Farhan', '089560328673', 'JL JEND. SUDIRMAN 330/77 BANDUNG'),
(5, 'Ayu Rahayu', '086548972525', 'Jl. Jupiter No.92A');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(64) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga`, `gambar`) VALUES
(1, 'Nike Air Jordan Mars 270', 75, 1299000, 'nike-air-jordan-mars-270.webp'),
(2, 'Nike Air Jordan 1 cmft', 100, 2099000, 'nike-air-jordan-1-cmft.webp'),
(3, 'Nike Air Max 90', 100, 1799000, 'nike-air-max-90.webp'),
(4, 'Nike Air Max Pre-Day', 50, 1979000, 'nike-air-max-preday.webp'),
(5, 'Nike Air Zoom Terra Kiger 8', 25, 2149, 'nike-air-zoom-terra-kiger-8.webp'),
(6, 'Nike Blazer Mid 77 Jumbo', 50, 1649000, 'nike-blazer-mid-77-jumbo.webp'),
(7, 'Nike Court Zoom Vapor Cage 4 Rafa', 25, 2279000, 'nike-court-zoom-vapor-cage-4-rafa.webp'),
(8, 'Nike Drunk Low', 50, 1429000, 'nike-drunk-low.webp'),
(9, 'Nike Jordan Air 200E SP', 100, 2329000, 'nike-jordan-air-200E-sp.webp'),
(10, 'Nike React Pegasus Trail 4', 50, 1999000, 'nike-react-pegasus-trail-4.webp'),
(11, 'Nike SB Force 58', 100, 1099000, 'nike-sb-force-58.webp'),
(12, 'Nike Zoom X Favorfly', 100, 2149000, 'nike-zoom-x-favorfly.webp'),
(13, 'Nike Air Force 1 07 craft', 100, 1799000, 'nike-air-force-1-07-craft.webp'),
(14, 'Nike Zoom X Invincible Run Flyknit 2 Road-running', 90, 2849000, 'nike-zoom-x-invincible-run-flyknit-2-road-running.webp');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_transaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `idpelanggan` (`id_pelanggan`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`),
  ADD KEY `idproduk` (`id_produk`),
  ADD KEY `idtransaksi` (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `idpelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `idproduk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `idtransaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
