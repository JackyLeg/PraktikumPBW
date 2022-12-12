-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 03:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krs`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `kode_mk` int(11) NOT NULL,
  `nama_mk` varchar(110) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jam` varchar(110) NOT NULL,
  `dosen` varchar(100) NOT NULL,
  `sks` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`kode_mk`, `nama_mk`, `hari`, `jam`, `dosen`, `sks`) VALUES
(202, 'Kewarganegaraan dan Kadeham', 'Kamis', '07.30-10.00', 'Suharsono', '2'),
(203, 'Etika Profesi dan Hukum', 'Jumat', '07.30-09.10', 'Indra Kristianto', '2'),
(206, 'Kreativitas dan Inovasi', 'Senin', '10.00-12.00', 'Adrian Qamar', '3'),
(407, 'Metodologi Penelitian dan Statistika', 'Senin', '12.30-15.00', 'Dedy Sugiarto', '4'),
(412, 'Pemrograman Web', 'Kamis', '10.00-12.30', 'Dian Pratiwi', '4'),
(423, 'Keamanan informasi', 'Rabu', '10.00-12.30', 'Is Mardiyanto', '4'),
(424, 'Manajemen Data & Informasi', 'Selasa', '10.00-12.00', 'Syandra Sari', '4'),
(425, 'Rekayasa Perangkat Lunak', 'Rabu', '12.30-15.00', 'Agus Salim', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`kode_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `kode_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=434;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
