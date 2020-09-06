-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 11:06 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhh_accountdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dhhbudget`
--

CREATE TABLE `dhhbudget` (
  `dhh_bid` int(11) NOT NULL,
  `dbcash_bud` int(20) NOT NULL,
  `dbbank_bud` int(20) NOT NULL,
  `dbcreatedon` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dhhbudget`
--

INSERT INTO `dhhbudget` (`dhh_bid`, `dbcash_bud`, `dbbank_bud`, `dbcreatedon`) VALUES
(1, 19950, 29950, '2020-08-26 14:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `dhhexp`
--

CREATE TABLE `dhhexp` (
  `rowid` int(11) NOT NULL,
  `dbdate` date NOT NULL,
  `dbcat` varchar(32) NOT NULL,
  `dbamo` int(10) NOT NULL,
  `dbpay` varchar(20) NOT NULL,
  `createdon` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dhhexp`
--

INSERT INTO `dhhexp` (`rowid`, `dbdate`, `dbcat`, `dbamo`, `dbpay`, `createdon`) VALUES
(1, '2020-08-26', 'Maintenance', 100, 'Cash', '2020-08-26 14:31:45'),
(2, '2020-08-27', 'Electricity', 100, 'Bank', '2020-08-26 14:32:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dhhbudget`
--
ALTER TABLE `dhhbudget`
  ADD PRIMARY KEY (`dhh_bid`);

--
-- Indexes for table `dhhexp`
--
ALTER TABLE `dhhexp`
  ADD PRIMARY KEY (`rowid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dhhbudget`
--
ALTER TABLE `dhhbudget`
  MODIFY `dhh_bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dhhexp`
--
ALTER TABLE `dhhexp`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
