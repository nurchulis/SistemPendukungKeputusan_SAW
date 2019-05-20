-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2019 at 02:04 AM
-- Server version: 5.7.21-1
-- PHP Version: 7.0.29-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `Data_input_nilai`
--

CREATE TABLE `Data_input_nilai` (
  `id_input_nilai` int(5) NOT NULL,
  `id_makul` float NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `nim` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `Data_input_nilai`
--

INSERT INTO `Data_input_nilai` (`id_input_nilai`, `id_makul`, `nilai`, `nim`) VALUES
(487, 1, 'A/B', 16650011),
(488, 2, 'B-', 16650011),
(489, 3, 'A', 16650011),
(490, 4, 'A-', 16650011),
(491, 5, 'A-', 16650011),
(492, 6, 'A', 16650011),
(493, 7, 'B+', 16650011),
(494, 8, 'B+', 16650011),
(495, 9, 'A/B', 16650011),
(550, 1, 'A-', 16650012),
(551, 2, 'B/C', 16650012),
(552, 3, 'A/B', 16650012),
(553, 4, 'A/B', 16650012),
(554, 5, 'A', 16650012),
(555, 6, 'A/B', 16650012),
(556, 7, 'B+', 16650012),
(557, 8, 'A-', 16650012),
(558, 9, 'A-', 16650012),
(559, 1, 'B/C', 16650015),
(560, 2, 'C', 16650015),
(561, 3, 'A/B', 16650015),
(562, 4, 'A-', 16650015),
(563, 5, 'A', 16650015),
(564, 6, 'A', 16650015),
(565, 7, 'B+', 16650015),
(566, 8, 'B', 16650015),
(567, 9, 'A-', 16650015),
(568, 1, 'A/B', 16650004),
(569, 2, 'B/C', 16650004),
(570, 3, 'A/B', 16650004),
(571, 4, 'A-', 16650004),
(572, 5, 'B', 16650004),
(573, 6, 'A', 16650004),
(574, 7, 'A/B', 16650004),
(575, 8, 'B+', 16650004),
(576, 9, 'A-', 16650004);

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai_to_number`
--

CREATE TABLE `data_nilai_to_number` (
  `id_data_nilai` int(5) NOT NULL,
  `id_makul` int(5) NOT NULL,
  `nilai` float NOT NULL,
  `nim` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `data_nilai_to_number`
--

INSERT INTO `data_nilai_to_number` (`id_data_nilai`, `id_makul`, `nilai`, `nim`) VALUES
(10, 1, 0.538462, 16650015),
(11, 2, 0.384615, 16650015),
(12, 3, 0.846154, 16650015),
(13, 4, 0.923077, 16650015),
(14, 5, 1, 16650015),
(15, 6, 1, 16650015),
(16, 7, 0.769231, 16650015),
(17, 8, 0.692308, 16650015),
(18, 9, 0.923077, 16650015),
(28, 1, 0.846154, 1665004),
(29, 2, 0.538462, 1665004),
(30, 3, 0.846154, 1665004),
(31, 4, 0.923077, 1665004),
(32, 5, 0.692308, 1665004),
(33, 6, 1, 1665004),
(34, 7, 0.846154, 1665004),
(35, 8, 0.769231, 1665004),
(36, 9, 0.923077, 1665004),
(82, 1, 0.923077, 16650012),
(83, 2, 0.538462, 16650012),
(84, 3, 0.846154, 16650012),
(85, 4, 0.846154, 16650012),
(86, 5, 1, 16650012),
(87, 6, 0.846154, 16650012),
(88, 7, 0.769231, 16650012),
(89, 8, 0.923077, 16650012),
(90, 9, 0.923077, 16650012);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_nilai`
--

CREATE TABLE `kriteria_nilai` (
  `id_nilai_kriteria` int(5) NOT NULL,
  `nama_kriteria` varchar(40) NOT NULL,
  `bobot` float NOT NULL,
  `id_makul` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `kriteria_nilai`
--

INSERT INTO `kriteria_nilai` (`id_nilai_kriteria`, `nama_kriteria`, `bobot`, `id_makul`) VALUES
(1, 'Sistem Cerdas', 0.75, 1),
(2, 'Sistem Cerdas', 0.75, 2),
(3, 'Sistem Cerdas', 0.25, 3),
(4, 'Sistem Cerdas', 1, 4),
(5, 'Sistem Cerdas', 0.25, 5),
(6, 'Sistem Cerdas', 0.25, 6),
(7, 'Sistem Cerdas', 1, 7),
(8, 'Sistem Cerdas', 0.25, 8),
(9, 'Sistem Cerdas', 0.5, 9),
(10, 'Sistem Informasi', 0.75, 1),
(11, 'Sistem Informasi', 0.5, 2),
(12, 'Sistem Informasi', 0.75, 3),
(13, 'Sistem Informasi', 0.25, 4),
(14, 'Sistem Informasi', 0.25, 5),
(15, 'Sistem Informasi', 0.25, 6),
(16, 'Sistem Informasi', 0.25, 7),
(17, 'Sistem Informasi', 0.5, 8),
(18, 'Sistem Informasi', 1, 9),
(19, 'Jaringan', 0.25, 1),
(20, 'Jaringan', 0.25, 2),
(21, 'Jaringan', 0.75, 3),
(22, 'Jaringan', 0.25, 4),
(23, 'Jaringan', 1, 5),
(24, 'Jaringan', 1, 6),
(25, 'Jaringan', 0.25, 7),
(26, 'Jaringan', 0.75, 8),
(27, 'Jaringan', 0.25, 9);

-- --------------------------------------------------------

--
-- Table structure for table `makul`
--

CREATE TABLE `makul` (
  `id_makul` int(5) NOT NULL,
  `nama_makul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `makul`
--

INSERT INTO `makul` (`id_makul`, `nama_makul`) VALUES
(1, 'Basis Data'),
(2, 'BQT'),
(3, 'PEMWEB'),
(4, 'PCD'),
(5, 'SO'),
(6, 'JARKOM'),
(7, 'KB'),
(8, 'PBO'),
(9, 'SIM');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(5) NOT NULL,
  `variabel` varchar(10) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `variabel`, `nilai`) VALUES
(1, 'A', 1),
(2, 'A-', 0.9230769231),
(3, 'A/B', 0.8461538462),
(4, 'B+', 0.7692307692),
(5, 'B', 0.6923076923),
(6, 'B-', 0.6153846154),
(7, 'B/C', 0.5384615385),
(8, 'C+', 0.4615384615),
(9, 'C', 0.3846153846),
(10, 'C-', 0.3076923077),
(11, 'C/D', 0.2307692308),
(12, 'D+', 0.1538461538),
(13, 'D', 0.07692307692),
(14, 'E', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nim`, `password`) VALUES
(1, '16650015', '12345'),
(2, '16650016', '12345'),
(3, '16650011', '12345'),
(4, '16650012', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Data_input_nilai`
--
ALTER TABLE `Data_input_nilai`
  ADD PRIMARY KEY (`id_input_nilai`);

--
-- Indexes for table `data_nilai_to_number`
--
ALTER TABLE `data_nilai_to_number`
  ADD PRIMARY KEY (`id_data_nilai`);

--
-- Indexes for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  ADD PRIMARY KEY (`id_nilai_kriteria`);

--
-- Indexes for table `makul`
--
ALTER TABLE `makul`
  ADD PRIMARY KEY (`id_makul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Data_input_nilai`
--
ALTER TABLE `Data_input_nilai`
  MODIFY `id_input_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=577;
--
-- AUTO_INCREMENT for table `data_nilai_to_number`
--
ALTER TABLE `data_nilai_to_number`
  MODIFY `id_data_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  MODIFY `id_nilai_kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `makul`
--
ALTER TABLE `makul`
  MODIFY `id_makul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
