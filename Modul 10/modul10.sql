-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2019 at 09:44 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul10`
--

-- --------------------------------------------------------

--
-- Table structure for table `manusia`
--

CREATE TABLE IF NOT EXISTS `manusia` (
  `id_manusia` int(100) NOT NULL,
  `nama_manusia` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manusia`
--

INSERT INTO `manusia` (`id_manusia`, `nama_manusia`, `umur`) VALUES
(1, 'test', 3),
(2, 'hehe', 10),
(3, 'haha', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manusia`
--
ALTER TABLE `manusia`
  ADD PRIMARY KEY (`id_manusia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manusia`
--
ALTER TABLE `manusia`
  MODIFY `id_manusia` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
