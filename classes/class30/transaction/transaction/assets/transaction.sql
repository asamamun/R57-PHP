-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 04:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `answer` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question`, `answer`, `status`, `created_at`) VALUES
(9, 16, 'dasdasdhd', 1, '2024-01-29 15:41:59'),
(10, 16, 'dsdasdasd', 0, '2024-01-29 15:41:59'),
(11, 16, 'assdasdafsdfsd', 0, '2024-01-29 15:41:59'),
(12, 16, 'sdfsdfsdffhfh', 0, '2024-01-29 15:41:59'),
(13, 17, 'gmjgtyutry', 0, '2024-01-29 15:42:25'),
(14, 17, 'styrytyey', 0, '2024-01-29 15:42:26'),
(15, 17, 'edzvdzbfgnymk', 0, '2024-01-29 15:42:26'),
(16, 17, 'utyurtyurty', 1, '2024-01-29 15:42:26'),
(17, 18, 'sabbir', 1, '2024-01-29 15:52:20'),
(18, 18, 'kamal', 0, '2024-01-29 15:52:20'),
(19, 18, 'jamal', 0, '2024-01-29 15:52:20'),
(20, 18, 'raja', 0, '2024-01-29 15:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `name`, `subject`, `status`, `created_at`) VALUES
(1, 'chapter 1', 4, 1, '2024-01-29 12:34:37'),
(2, 'chapter 2', 4, 1, '2024-01-29 12:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `chapter` int(11) NOT NULL,
  `question` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject`, `chapter`, `question`, `status`, `created_at`) VALUES
(16, 4, 1, 'dsadasdasdasdasdas', 1, '2024-01-29 15:41:59'),
(17, 4, 1, 'ahjyrumjhmjhm', 1, '2024-01-29 15:42:25'),
(18, 4, 2, 'my name is', 1, '2024-01-29 15:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'php', 1, '2024-01-29 12:33:33'),
(2, 'javascript', 1, '2024-01-29 12:33:33'),
(3, 'css', 1, '2024-01-29 12:33:33'),
(4, 'html', 1, '2024-01-29 12:33:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_ibfk_1` (`question`);
ALTER TABLE `answers` ADD FULLTEXT KEY `question` (`answer`);
ALTER TABLE `answers` ADD FULLTEXT KEY `answer` (`answer`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_ibfk_1` (`subject`),
  ADD KEY `questions_ibfk_2` (`chapter`);
ALTER TABLE `questions` ADD FULLTEXT KEY `question` (`question`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `subjects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
