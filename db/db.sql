-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2021 at 02:50 AM
-- Server version: 10.3.32-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muhamm28_db_itspku`
--

-- --------------------------------------------------------

--
-- Table structure for table `peg`
--

CREATE TABLE `peg` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alm` text NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `kta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peg`
--

INSERT INTO `peg` (`nip`, `nama`, `alm`, `ktp`, `sex`, `kta`) VALUES
('KD-PEG-NO-0001', 'Test', 'Test', '1111', 'Laki-Laki', 'Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peg`
--
ALTER TABLE `peg`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
