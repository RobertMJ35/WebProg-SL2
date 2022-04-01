-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 02:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(16) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama_depan` varchar(64) NOT NULL,
  `nama_tengah` varchar(64) NOT NULL,
  `nama_belakang` varchar(64) NOT NULL,
  `tempat_lahir` varchar(64) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `warga_negara` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `foto_profil` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `username`, `password`, `nama_depan`, `nama_tengah`, `nama_belakang`, `tempat_lahir`, `tgl_lahir`, `warga_negara`, `email`, `no_hp`, `alamat`, `kode_pos`, `foto_profil`) VALUES
('1234123412341234', 'abc', 'e99a18c428cb38d5f260853678922e03', 'A', 'B', 'C', 'Paris', '2022-04-01', 'Indonesia', 'abc@yahoo.com', '081234567891', 'Jalan Gatot Subroto', 80111, 'MyFleet-logos.jpeg'),
('1111222233334444', 'def', 'e88ebfe1ae982a6da01436e48af6eb74', 'D', 'E', 'F', 'Purbolinggo', '2022-04-01', 'Indonesia', 'def@gmail.com', '087654321098', 'Jalan Camar Putih', 80222, 'MyFleet-logos_white.png'),
('5555666677778888', 'robertmj', '200820e3227815ed1756a6b531e7e0d2', 'Robert', 'Muliawan', 'Jaya', 'Denpasar', '2002-08-09', 'Indonesia', 'robertmuliawan35@gmail.com', '087654321234', 'Jalan Pulau Moyo', 80223, 'Robert Muliawan J..jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
