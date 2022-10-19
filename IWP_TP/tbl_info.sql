-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 02:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `ID` int(11) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `MName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MobNo` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Age` int(100) NOT NULL,
  `Day` int(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  `Year` int(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PoBirth` varchar(100) NOT NULL,
  `Natl` varchar(100) NOT NULL,
  `CivStat` varchar(100) NOT NULL,
  `Ht` decimal(2,0) NOT NULL,
  `Wt` decimal(2,0) NOT NULL,
  `Lng` varchar(100) NOT NULL,
  `Rlg` varchar(100) NOT NULL,
  `MomName` varchar(100) NOT NULL,
  `DadName` varchar(100) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
