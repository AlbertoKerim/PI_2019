-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 03:49 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

CREATE DATABASE alberto_kerim;
USE alberto_kerim;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alberto_kerim`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodavaonica`
--

CREATE TABLE `prodavaonica` (
  `Prodavaonica_ID` int(11) NOT NULL,
  `ime_artikla` varchar(255) NOT NULL,
  `cijena_artikla` int(11) NOT NULL,
  `velicina_artikla` varchar(255) DEFAULT 'STANDARDNO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodavaonica`
--

INSERT INTO `prodavaonica` (`Prodavaonica_ID`, `ime_artikla`, `cijena_artikla`, `velicina_artikla`) VALUES
(1, 'Brasno', 9, '10 kg'),
(2, 'Maskica', 13, 'STANDARDNO'),
(3, 'Mobitel', 500, 'Normalni');

-- --------------------------------------------------------

--
-- Table structure for table `skladiste`
--

CREATE TABLE `skladiste` (
  `skl_ID` int(11) NOT NULL,
  `Prodavaonica_ID` int(11) NOT NULL,
  `Kolicina_artikala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skladiste`
--

INSERT INTO `skladiste` (`skl_ID`, `Prodavaonica_ID`, `Kolicina_artikala`) VALUES
(1, 2, 3),
(3, 3, 5),
(6, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodavaonica`
--
ALTER TABLE `prodavaonica`
  ADD PRIMARY KEY (`Prodavaonica_ID`);

--
-- Indexes for table `skladiste`
--
ALTER TABLE `skladiste`
  ADD PRIMARY KEY (`skl_ID`),
  ADD KEY `poveznica` (`Prodavaonica_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodavaonica`
--
ALTER TABLE `prodavaonica`
  MODIFY `Prodavaonica_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skladiste`
--
ALTER TABLE `skladiste`
  ADD CONSTRAINT `poveznica` FOREIGN KEY (`Prodavaonica_ID`) REFERENCES `prodavaonica` (`Prodavaonica_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
