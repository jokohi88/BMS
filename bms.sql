-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 02:05 AM
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
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_bb`
--

CREATE TABLE `mst_bb` (
  `bb_id` varchar(25) NOT NULL,
  `bb_address` varchar(255) NOT NULL,
  `bb_sell_price` int(11) NOT NULL,
  `bb_year` varchar(4) NOT NULL,
  `bb_type` varchar(20) NOT NULL,
  `bb_lng` varchar(50) NOT NULL,
  `bb_lat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_bb`
--

INSERT INTO `mst_bb` (`bb_id`, `bb_address`, `bb_sell_price`, `bb_year`, `bb_type`, `bb_lng`, `bb_lat`) VALUES
('200001', 'asdawwww', 250000, '2014', 'billboard', '54125', '5414');

-- --------------------------------------------------------

--
-- Table structure for table `mst_biaya`
--

CREATE TABLE `mst_biaya` (
  `id_biaya` int(11) NOT NULL,
  `nama_biaya` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_login`, `username`, `password`, `nama_pengguna`, `telepon`, `email`, `alamat`) VALUES
(8, 'jokohi', '202cb962ac59075b964b07152d234b70', 'Joko Hidayat', '082183728078', 'jokohidayat88@gmail.com', 'Jalan setiabudi perum citra garden\r\nblok b9 no 19');

-- --------------------------------------------------------

--
-- Table structure for table `trx_investasi`
--

CREATE TABLE `trx_investasi` (
  `id_investasi` int(11) NOT NULL,
  `nama_investasi` varchar(255) NOT NULL,
  `type_biaya` varchar(255) NOT NULL,
  `harga_investasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trx_offer`
--

CREATE TABLE `trx_offer` (
  `id_offer` int(11) NOT NULL,
  `id_employee` varchar(50) NOT NULL,
  `id_bb` varchar(50) NOT NULL,
  `offer_price` int(11) NOT NULL,
  `trx_state` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trx_offer`
--

INSERT INTO `trx_offer` (`id_offer`, `id_employee`, `id_bb`, `offer_price`, `trx_state`) VALUES
(20001, 'jokohi', '100001', 250000000, 'DRAFT COMPLETE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Niagahoster Tutorial', 'nhtutorial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(2, 'jokohi', 'jokohi@prisma.com', '44e266fc840d3b0a4c68b935dbd77824');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
