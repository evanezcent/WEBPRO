-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 05:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul9`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_path`
--

CREATE TABLE `image_path` (
  `No` int(11) NOT NULL,
  `ImgName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_path`
--

INSERT INTO `image_path` (`No`, `ImgName`) VALUES
(11, 'asdasd.png'),
(12, 'PS_Tutorial_12.png'),
(13, 'PS_Tutorial_14.png'),
(14, 'Doppelganger_resize.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `No` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`No`, `Username`, `Pass`) VALUES
(7, 'admin', '7815696ecbf1c96e6894b779456d330e');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `RegisTime` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `Email`, `Pass`, `RegisTime`) VALUES
('admin', 'admin@admin.com', '7815696ecbf1c96e6894b779456d330e', '03-04-2019, 22:50:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_path`
--
ALTER TABLE `image_path`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_path`
--
ALTER TABLE `image_path`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
