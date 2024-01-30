-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 10:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r57_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `superstore`
--

CREATE TABLE `superstore` (
  `rowid` int(11) NOT NULL,
  `orderid` varchar(20) NOT NULL,
  `orderdate` varchar(15) NOT NULL,
  `shipdate` varchar(15) NOT NULL,
  `shipmode` varchar(30) NOT NULL,
  `customerid` varchar(30) NOT NULL,
  `customername` varchar(60) NOT NULL,
  `segment` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `region` varchar(20) NOT NULL,
  `productid` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `subcategory` varchar(20) NOT NULL,
  `productname` varchar(128) NOT NULL,
  `sales` float(10,3) NOT NULL,
  `quantity` int(5) NOT NULL,
  `discount` float(4,2) NOT NULL,
  `profit` float(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `superstore`
--
ALTER TABLE `superstore`
  ADD PRIMARY KEY (`rowid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
