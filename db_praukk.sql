-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 08:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_praukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dvd`
--

CREATE TABLE `tb_dvd` (
  `id_dvd` int(10) NOT NULL,
  `genre_film` varchar(30) NOT NULL,
  `judul_film` varchar(50) NOT NULL,
  `tahun_film` int(4) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dvd`
--

INSERT INTO `tb_dvd` (`id_dvd`, `genre_film`, `judul_film`, `tahun_film`, `tanggal_sewa`, `tanggal_kembali`, `harga`) VALUES
(17, 'lejmi', 'cinta', 2022, '2023-02-15', '2023-02-15', 100000),
(18, 'edman', 'cintasurga', 2022, '2023-02-03', '2023-03-07', 1000),
(19, 'rendy', 'hutan', 2022, '2023-02-15', '2023-03-02', 122222);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyewa`
--

CREATE TABLE `tb_penyewa` (
  `id_penyewa` int(10) NOT NULL,
  `nama_penyewa` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_dvd` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyewa`
--

INSERT INTO `tb_penyewa` (`id_penyewa`, `nama_penyewa`, `alamat`, `id_dvd`) VALUES
(17, 'redy', 'senek', 17),
(18, 'bunga', 'surodadi', 18),
(19, 'sinta', 'deleng', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dvd`
--
ALTER TABLE `tb_dvd`
  ADD PRIMARY KEY (`id_dvd`);

--
-- Indexes for table `tb_penyewa`
--
ALTER TABLE `tb_penyewa`
  ADD PRIMARY KEY (`id_penyewa`),
  ADD KEY `id_dvd` (`id_dvd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dvd`
--
ALTER TABLE `tb_dvd`
  MODIFY `id_dvd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_penyewa`
--
ALTER TABLE `tb_penyewa`
  MODIFY `id_penyewa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_penyewa`
--
ALTER TABLE `tb_penyewa`
  ADD CONSTRAINT `tb_penyewa` FOREIGN KEY (`id_dvd`) REFERENCES `tb_dvd` (`id_dvd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
