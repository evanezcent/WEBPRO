-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 07:09 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_modul7_nim`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `akreditasi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `fakultas`, `akreditasi`) VALUES
(1, 'S1 Informatika', 'Fakultas Informatika', 'A'),
(2, 'S1 Ilmu Komputasi', 'Fakultas Informatika', 'B'),
(3, 'S1 Teknologi Informasi', 'Fakultas Informatika', 'C'),
(4, 'S1 Teknik Elektro', 'Fakultas Teknik Elektro', 'A'),
(5, 'S1 Teknik Telekomunikasi', 'Fakultas Teknik Elektro', 'A'),
(6, 'S1 Teknik Fisika', 'Fakultas Teknik Elektro', 'B'),
(7, 'S1 Sistem Komputer', 'Fakultas Teknik Elektro', 'B'),
(8, 'S1 Teknik Industri', 'Fakultas Rekayasa Industr', 'A'),
(9, 'S1 Sistem Informasi', 'Fakultas Rekayasa Industr', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `foto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `kelas`, `id_jurusan`, `foto`) VALUES
('1301154443', 'Choddy Purba', 'IF-41-01', 1, 'foto1.jpg'),
('1301164321', 'Rifki Yosi', 'SI-40-06', 9, 'foto2.jpg'),
('1301174199', 'Rian Tompel', 'IT-39-02', 3, 'foto3.jpg'),
('1301184077', 'Abdul Halilintar', 'TI-40-07', 8, 'foto4.jpg'),
('1301193955', 'Umar Bakeri', 'EL-40-03', 4, 'foto5.jpg'),
('1301203833', 'Sugeng mentimun', 'CS-41-08', 2, 'foto6.jpg'),
('1301213711', 'Dadang Kornelo', 'IT-40-04', 3, 'foto7.jpg'),
('1301223589', 'Asep Cilok', 'SK-41-09', 7, 'foto8.jpg'),
('1301233467', 'Dede Waryadi', 'TF-40-05', 6, 'foto9.jpg'),
('1301243345', 'Joe yanto', 'IF-41-10', 1, 'foto10.jpg'),
('1301253223', 'Maman Bacil', 'CS-40-06', 2, 'foto11.jpg'),
('1301263101', 'Mamang Aci', 'IF-39-11', 1, 'foto12.jpg'),
('1301272979', 'Suramin Seblak', 'TI-39-07', 8, 'foto13.jpg'),
('1301282857', 'yatno Sudarmono', 'SK-40-12', 7, 'foto14.jpg'),
('1301292735', 'Tarnomo ciqingdaw', 'TT-40-08', 5, 'foto15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_jurusan_fk` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `id_jurusan_fk` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
