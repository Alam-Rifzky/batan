-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 02:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `batan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataoperasi`
--

CREATE TABLE IF NOT EXISTS `dataoperasi` (
`id` int(3) NOT NULL,
  `teras` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `nama_komponen` varchar(255) NOT NULL,
  `jam` varchar(30) NOT NULL,
  `jml_jam` varchar(30) NOT NULL,
  `tekanan_hasil_operasi` varchar(10) NOT NULL,
  `tekanan_hasil_minimal` varchar(10) NOT NULL,
  `tekanan_hasil_maksimal` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataoperasi`
--

INSERT INTO `dataoperasi` (`id`, `teras`, `tanggal`, `nama_komponen`, `jam`, `jml_jam`, `tekanan_hasil_operasi`, `tekanan_hasil_minimal`, `tekanan_hasil_maksimal`, `keterangan`) VALUES
(3, 'Teras 36', '07/20/2016', 'AB001', '2', '10', '45', '24', '41', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Batan', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataoperasi`
--
ALTER TABLE `dataoperasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataoperasi`
--
ALTER TABLE `dataoperasi`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
