-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 07:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sopgaruda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `identitasjabatan`
--

CREATE TABLE `identitasjabatan` (
  `idjab` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `kodebagian` varchar(255) NOT NULL,
  `fungsiutama` varchar(255) NOT NULL,
  `tanggungjawab` varchar(255) NOT NULL,
  `wewenang` varchar(255) NOT NULL,
  `targetpekerjaan` varchar(255) NOT NULL,
  `spespendidikan` varchar(255) NOT NULL,
  `spesusia` varchar(255) NOT NULL,
  `speskelamin` varchar(255) NOT NULL,
  `spespengalaman` varchar(255) NOT NULL,
  `spespelatihan` varchar(255) NOT NULL,
  `spessertifikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sop`
--

CREATE TABLE `sop` (
  `idsop` int(11) NOT NULL,
  `namasop` varchar(255) NOT NULL,
  `tujuansop1` varchar(255) NOT NULL,
  `tujuansop2` varchar(255) NOT NULL,
  `tujuansop3` varchar(255) NOT NULL,
  `tujuansop4` varchar(255) NOT NULL,
  `tujuansop5` varchar(255) NOT NULL,
  `uraiansop1` varchar(255) NOT NULL,
  `uraiansop2` varchar(255) NOT NULL,
  `uraiansop3` varchar(255) NOT NULL,
  `uraiansop4` varchar(255) NOT NULL,
  `uraiansop5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `identitasjabatan`
--
ALTER TABLE `identitasjabatan`
  ADD PRIMARY KEY (`idjab`);

--
-- Indexes for table `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`idsop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `identitasjabatan`
--
ALTER TABLE `identitasjabatan`
  MODIFY `idjab` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sop`
--
ALTER TABLE `sop`
  MODIFY `idsop` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
