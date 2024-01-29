-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 10:08 AM
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
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `stid` int(7) NOT NULL,
  `quizid` int(2) NOT NULL,
  `midmcq` float(4,2) NOT NULL,
  `midevidence` float(4,2) NOT NULL,
  `finalmcq` float(4,2) NOT NULL,
  `finalevidence` float(4,2) NOT NULL,
  `grandtotal` float(4,2) DEFAULT NULL,
  `result` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `stid`, `quizid`, `midmcq`, `midevidence`, `finalmcq`, `finalevidence`, `grandtotal`, `result`, `created_at`) VALUES
(1, 101, 1, 42.00, 30.00, 38.00, 28.00, 67.20, 'Pass', '2024-01-29 03:44:59'),
(2, 101, 2, 43.00, 41.00, 26.00, 28.00, 60.00, 'Pass', '2024-01-29 03:45:31'),
(3, 102, 1, 30.00, 30.00, 30.00, 20.00, 52.00, 'Fail', '2024-01-29 03:46:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
