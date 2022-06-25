-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 09:16 AM
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
-- Database: `apotek_akbar`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(32) NOT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlp` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_tlp`) VALUES
(1, 'M Akbar Maulana', 'Jl. Sukajadi, Pasteur, Kota Bandung', '089765421345'),
(2, 'Doddy Mulyadi', 'Jl. Pasir Kaliki No.121-123, Pamoyanan, Kec. Cicendo, Kota Bandu', '012365477456'),
(3, 'Novianti Lestari', 'Jl. Proklamasi No.53, RT.9/RW.5, Gondangdia, Kec. Menteng, Kota ', '085778965568');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(32) NOT NULL,
  `kategori` varchar(32) NOT NULL,
  `golongan` varchar(32) NOT NULL,
  `aturan_pakai` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_supplier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `kategori`, `golongan`, `aturan_pakai`, `harga`, `stok`, `id_supplier`) VALUES
(1, 'NITROKAF RETARD 2.5MG KAPSUL 1ST', 'ANGINA PEKTORIS', 'OBAT KERAS', '2-3 X 1 KAPSUL', 44000, 1000, 1),
(2, 'NITROKAF RETARD FORTE 5MG KAPSUL', 'ANGINA PEKTORIS', 'OBAT KERAS', '2-3 X 1 KAPSUL', 78000, 1000, 1),
(3, 'LEVOPAR TAB 1STRIP', 'ANTI PARKINSON', 'OBAT KERAS', '3-4 X 1/2 TAB MAX 1000MG/ HARI', 45700, 500, 2),
(4, 'MUCOS SYRUP 60ML FLS', 'MUKOLITIK', 'OBAT KERAS', 'DEWASA: 2X10ML (2 SENDOK TAKAR), ANAK: 3X5ML', 28000, 72, 2),
(5, 'PRONEURON TAB 1STRIP', 'ANALGESIK ANTIKO', 'PSIKOTROPIKA', 'BILA NYERI 1 TAB, MAX 4TAB/ HARI', 35000, 500, 2),
(6, 'CODICAF-10 TAB 1STRIP', 'ANALGESIK OPIOID', 'NARKOTIKA', 'BATUK: 3-4X1, NYERI: AWAL 15-60MG TIAP 4JAM MAX 360MG/ HARI', 17000, 1000, 1),
(7, 'CATAFLAM-50 TAB', 'ANALGESIK', 'OBAT KERAS', '3X1 TAB', 6000, 1000, 5),
(8, 'GLAUSETA TAB 1STRIP', 'GLAUKOMA', 'OBAT KERAS', 'SESUAI RESEP DOKTER', 82600, 300, 3),
(9, 'MYCORAL 2% CREAM 5GM TUBE', 'ANTIFUNGI', 'OBAT BEBAS TERBA', 'DIOLES TIPIS 1-2X1', 13400, 200, 4);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `no_tlp`) VALUES
(1, 'KIMIA FARMA', 'Jl. Cicendo No.43, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40171', '(021) 03849251'),
(2, 'MEPROFARM', 'Jl. Soekarno Hatta No. 789 Bandung 40294, Indonesia', '(+62 22) 7805588'),
(3, 'SANBE FARMA', 'Jl. Tamansari No.10, Tamansari, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40116', '(022) 4207725'),
(4, 'KALBE FARMA', 'Jl. Gn. Kukus No.94, Cilembang, Kec. Cihideung, Kab. Tasikmalaya, Jawa Barat 46123s Ibukota Jakarta 12870', '(0265) 339317'),
(5, 'NOVARTIS INDONESIA', 'Jl. Tb Simatupang, Kampung Gedong, Pasar Rebo, Gedong, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13760', '(021) 30014200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
