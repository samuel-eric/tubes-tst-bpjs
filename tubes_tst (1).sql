-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2023 at 01:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_tst`
--

-- --------------------------------------------------------

--
-- Table structure for table `iuran_bpjs`
--

CREATE TABLE `iuran_bpjs` (
  `no_kartu` varchar(225) NOT NULL,
  `tanggal_pembayaran` date NOT NULL DEFAULT current_timestamp(),
  `jumlah` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iuran_bpjs`
--

INSERT INTO `iuran_bpjs` (`no_kartu`, `tanggal_pembayaran`, `jumlah`, `id`, `bukti_bayar`) VALUES
('3851253301', '2023-12-16', 150000, 8, '1702691667_f0869f6f4186505b804d.jpg'),
('7887866204', '2023-12-19', 100000, 9, '1702975871_6204ebbac5d72711a897.png');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_bpjs`
--

CREATE TABLE `kelas_bpjs` (
  `id_kelas` varchar(225) NOT NULL,
  `biaya_iuran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas_bpjs`
--

INSERT INTO `kelas_bpjs` (`id_kelas`, `biaya_iuran`) VALUES
('1', 150000),
('2', 100000),
('3', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `peserta_bpjs`
--

CREATE TABLE `peserta_bpjs` (
  `no_kartu` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta_bpjs`
--

INSERT INTO `peserta_bpjs` (`no_kartu`, `password`, `nama`, `nik`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `kelas`) VALUES
('3851253301', '16d7a4fca7442dda3ad93c9a726597e4', 'sam', '32928020', 'itb 7601', '2002-07-10', 'M', '91890200', '1'),
('7887866204', '16d7a4fca7442dda3ad93c9a726597e4', 'test', '9208020', 'itb', '2012-12-12', 'M', '9805999985', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', '16d7a4fca7442dda3ad93c9a726597e4'),
('hospitaltst', '16d7a4fca7442dda3ad93c9a726597e4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iuran_bpjs`
--
ALTER TABLE `iuran_bpjs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iuran_fk` (`no_kartu`);

--
-- Indexes for table `kelas_bpjs`
--
ALTER TABLE `kelas_bpjs`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `peserta_bpjs`
--
ALTER TABLE `peserta_bpjs`
  ADD PRIMARY KEY (`no_kartu`),
  ADD KEY `kelas` (`kelas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iuran_bpjs`
--
ALTER TABLE `iuran_bpjs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `iuran_bpjs`
--
ALTER TABLE `iuran_bpjs`
  ADD CONSTRAINT `iuran_fk` FOREIGN KEY (`no_kartu`) REFERENCES `peserta_bpjs` (`no_kartu`);

--
-- Constraints for table `peserta_bpjs`
--
ALTER TABLE `peserta_bpjs`
  ADD CONSTRAINT `peserta_bpjs_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `kelas_bpjs` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
