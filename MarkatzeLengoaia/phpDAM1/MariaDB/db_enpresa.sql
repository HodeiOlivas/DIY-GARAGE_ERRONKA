-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 08:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_enpresa`
--

-- --------------------------------------------------------

--
-- Table structure for table `langilea`
--

CREATE TABLE `langilea` (
  `langile_ID` varchar(4) COLLATE ucs2_spanish2_ci NOT NULL,
  `langile_izena` varchar(40) COLLATE ucs2_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Dumping data for table `langilea`
--

INSERT INTO `langilea` (`langile_ID`, `langile_izena`) VALUES
('1', 'Miren'),
('2', 'Iker'),
('3', 'Jon'),
('4', 'Jokin'),
('5', 'Karmen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `langilea`
--
ALTER TABLE `langilea`
  ADD PRIMARY KEY (`langile_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
