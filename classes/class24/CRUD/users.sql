-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 10:02 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `create_at`) VALUES
(1, 'admin', '$2y$10$8On05kOUVCaf0NkVeJO3TupWUauaFen55aoeM2ktTbyDfRQyGKCrW', '2024-01-11 04:01:58'),
(2, 'mamun', '$2y$10$SD3dpJFtQuhIYXW79D59b.AS7I0gXjp1kiBWxW9pXdgPKZqnQGQWe', '2024-01-11 04:02:33'),
(7, 'newuser1705981393', '$2y$10$rU0bwGshCuyVzMxmh6qcbeH3otsRJFdG0jLZjgM7X.jfoj385q7Du', '2024-01-23 03:43:13'),
(8, 'newuser1705981523', '$2y$10$M5tEZJ6l8LElMZbgDMtZGO9T1Iso74H0ycnebYBnqdgOwZyKmxtFS', '2024-01-23 03:45:23'),
(9, 'newuser1705981545', '$2y$10$2rQSpTpwbKU/oEIPnLvXaeKu4b.n5dwwiI2U7n3vS/13xCxR7JgP2', '2024-01-23 03:45:45'),
(10, 'newuser1705981567', '$2y$10$hkyqweuuABHEXHRhsdmpoel8SnZ2X1fr99Oy3tUyGYIOP.gGHwG3y', '2024-01-23 03:46:07'),
(11, 'newuser1705981568', '$2y$10$nydD0Wqf9785HlnnpfFWwOsezqrFb5OBSIuWVEjWbCLlNiI5k8KAq', '2024-01-23 03:46:08'),
(12, 'newuser1705981569', '$2y$10$iPTAayyaEkoSfFLYj3CGnuIpElq/jQnwlFlDeFff538Yiv6BCuYqG', '2024-01-23 03:46:09'),
(14, 'newuser1705981570', '$2y$10$vlhE3AVntesK/rvFERwbeurSfZUF1byfMVNqii3ueE9K/YAUTzAZS', '2024-01-23 03:46:10'),
(16, 'newuser1705981584', '$2y$10$oSykjEHnx/3Gd/nSV1ATOuoVXnkr/xigRXtkWspznxhapqAwGgM4G', '2024-01-23 03:46:24'),
(19, 'newuser1705981585', '$2y$10$2SLkSP1ymDpz.QHCbXac0ubDsvgukPDj/5ETSoATJ0hDugFU/0rDq', '2024-01-23 03:46:25'),
(21, 'newuser170598161974', '$2y$10$LePlLAA7rvXY7mgyvAXqc.fx7DHpVl56D5.g/bAXuG9UjRSkbaj9W', '2024-01-23 03:46:59'),
(22, 'newuser170598161954', '$2y$10$GYI7wX9uqPeaue0h93MnpOdxRiBb9rnhCDRo9DzK.3hTKK1qX/Dj6', '2024-01-23 03:46:59'),
(23, 'newuser170598161952', '$2y$10$zbB337to1lCEsFwxZsMmPOqo3A5XxfXpT8C7B05/K7HLrUqUpGSoW', '2024-01-23 03:46:59'),
(25, 'newuser170598162030', '$2y$10$jrUR9Xr4FddGL8ovcq027OzMJa3ZlrTu6EiMEcJ5cItFyLrxkZGWe', '2024-01-23 03:47:00'),
(26, 'newuser170598162067', '$2y$10$hMvrIN6zRwk39NBsFyyqSe3WdDCeUBG2l/LGNR4Up5xzu6lhz.Cai', '2024-01-23 03:47:00'),
(27, 'newuser170598162046', '$2y$10$..2Wjzj1RmnqUAfCcM46AeNRc0OiuElu0fWFqvGJnhYMpJTEJj3Z2', '2024-01-23 03:47:00'),
(28, 'newuser170598162068', '$2y$10$DJUlmDf6npd.G026cnm/NOQU9wJUN4mnPkpDvC2iPCsL5rjV1u49a', '2024-01-23 03:47:01'),
(29, 'newuser170598162192', '$2y$10$nu72zDHXCPg738oHrWktEetEIqr/rWyUEZsywbu.4QHARV.vv6Ecu', '2024-01-23 03:47:01'),
(30, 'newuser170598162112', '$2y$10$.S8qVvcqPYaTAO5Cznyr.erc563abUi8Fp8Mhy.ueOAXjJ.2SE1qK', '2024-01-23 03:47:01'),
(31, 'newuser170598162187', '$2y$10$qFtXZFheokGILSqnaEwtaeukZIcbMTGehAhaRQDY42T6MWr87gvEK', '2024-01-23 03:47:01'),
(32, 'newuser170598162183', '$2y$10$ntXK9GNnmnfcOFXNBtIrOO2vjRUyf2IWzXhV/Y12qpbuhM3JC9GnW', '2024-01-23 03:47:01'),
(33, 'newuser17059816216', '$2y$10$1RUof9iyzClDtiNkEG8jx.OXzhg6920sd94dCXER.Ziz4Jl/r2mSO', '2024-01-23 03:47:01'),
(34, 'newuser170598162262', '$2y$10$Kqv37hMcvDpGT8BfwINZ1uA5YpemsuQK38H9ZsjSty764HGd7MLJK', '2024-01-23 03:47:02'),
(36, 'newuser170598162231', '$2y$10$5Ece0LpvyKe54aNVeNI43e7RB4dHtEXGhciK7o4p1sRXsuDkVnyJ6', '2024-01-23 03:47:02'),
(37, 'newuser170598162235', '$2y$10$RLf1u9gsDRZaPyC6ihe2nO7jIVUyYyG8uLY5zPGlDzoNMkZ296EnO', '2024-01-23 03:47:02'),
(38, 'newuser170598162290', '$2y$10$/sgxzezsEd4t24jVGYLjyuRauIzc5ufXef7c42TaRW5oHcnGw0wg6', '2024-01-23 03:47:02'),
(39, 'newuser170598162393', '$2y$10$YTkm.z866oYQt9UFkBetoeCle0ld7BE.e0LniyzUJgOuJfCiD9.fS', '2024-01-23 03:47:03'),
(40, 'newuser170598162395', '$2y$10$IQIBiXPHaib6OiEHsvIZ6OF9XC066IRUe8hLhhvntCa3ByFDZe3xG', '2024-01-23 03:47:03'),
(41, 'newuser170598162357', '$2y$10$ws/VHV6i09ylk.xiDaAYceG0qRSylZGpDNND8MZ2BuBXH10csTyGG', '2024-01-23 03:47:03'),
(42, 'newuser170598162394', '$2y$10$6NUyJpb7QtGQE9TwFsd01O8jSyg6rCJAXX7eCbSQDU7IqhEeBio7a', '2024-01-23 03:47:03'),
(43, 'newuser17059816237', '$2y$10$IXzzdG/Vip9FnxiVIui5q.QP6qUymTP0gf9ESQkazzeMZfpXtDqHq', '2024-01-23 03:47:04'),
(44, 'newuser170598162467', '$2y$10$nxIs5WbWbjF3hXij89zA.ebR9s.rwIqs8wT7XnP2nPG8t5eQ2yoqm', '2024-01-23 03:47:04'),
(45, 'newuser170598162846', '$2y$10$buAT1.qjHBulxk/6rT1m7ehsAWJBKZKqvC3TLALIPr1KQvA.HLAf6', '2024-01-23 03:47:08'),
(46, 'newuser170598162884', '$2y$10$kg1IHsooayX2wYyfyRViA.K2lgRAvoYvxRxfQPM0erTbGVb33NJSO', '2024-01-23 03:47:08'),
(47, 'newuser170598162899', '$2y$10$25GoFhqm5vRgTN9r/5StOOqy/ikFoY6FPkVrrihzjfCH5Wm0CEC8G', '2024-01-23 03:47:08'),
(48, 'newuser17059816287', '$2y$10$/Yz5puxQntPXYQQcDGaIgeKhI/PpqbhN9f6cv4nmFSnwdTedPpgX.', '2024-01-23 03:47:08'),
(49, 'newuser170598162858', '$2y$10$yVWlSZ11q.f5wWorDwXbfeU5uOFRVnLaPuz/gT.C7pCPqnfRTdt4a', '2024-01-23 03:47:09'),
(50, 'newuser170598162916', '$2y$10$QNA9i8jjthANFrO0U03iHuhGFjniOLy77sAlua7sC16osH24aLJPS', '2024-01-23 03:47:09'),
(51, 'newuser170598162967', '$2y$10$9GKIj7Uadi0iqYK9ddrg..3WkqrhABtD/9OsDBOGTKvE9PEHUMQle', '2024-01-23 03:47:09'),
(52, 'newuser170598162930', '$2y$10$N3WjCUnZeD0mAKjq8bFWeuNpDx3SZHAZExQYZg6q5BJwKV3LATWwO', '2024-01-23 03:47:09'),
(53, 'newuser170598162912', '$2y$10$HxghYCEsFdFuxop.FFxkn.KFehJvyOA2BpQKp82up3WNu0uvfOFTG', '2024-01-23 03:47:09'),
(54, 'newuser170598162983', '$2y$10$oGMx0/OMBC2DK.uIKJcKmusebiXKS3pOR3r7OQpCblsfrPBtTOJvm', '2024-01-23 03:47:10'),
(55, 'newuser170598163078', '$2y$10$x.iM5l2K.DD4t5jNPc2WiOjKJ.POdpu9ArwG6IbDC4bo1MZSHydw.', '2024-01-23 03:47:10'),
(56, 'newuser170598163015', '$2y$10$ab0C84b4ylWYkg.xn7BUUeIuMyKfQLZBdDJLcwn0LtWa05r5Bq9Py', '2024-01-23 03:47:10'),
(57, 'newuser170598163086', '$2y$10$ebpWov3Nvo7xkmnwliUxAexxthAA4L0AKDR9WAfGil5Q82JN66T8.', '2024-01-23 03:47:10'),
(58, 'newuser170598163026', '$2y$10$yn.e8830rCzb2xJ6H6TzoutyuYRAGvuqMFk15FFtqjDkn3j6szhLO', '2024-01-23 03:47:10'),
(59, 'newuser170598163043', '$2y$10$elwW86b8MsrIdcljNX7vnejNU46LjcrNrjA0PHBMgr6eb4Xpgh6ie', '2024-01-23 03:47:10'),
(60, 'newuser170598163021', '$2y$10$S4SItl6HarPJrGyNYk7Za.3gElNk1dBEcNuFFVAqg7y1tKBMI65l.', '2024-01-23 03:47:11'),
(61, 'newuser1705981631100', '$2y$10$mpg1lymE6R8y3T.HkCDEze2JGqQ.Avz8PpTJmijC7JKES3Bex00I6', '2024-01-23 03:47:11'),
(62, 'newuser170598163137', '$2y$10$TwAVC209pqJRX7XFuiT/c.GAlljnuluR1MODkCOoGRMnd1kNdaWAW', '2024-01-23 03:47:11'),
(63, 'newuser170598163178', '$2y$10$QsenvoxwiQTF33xfPy.4Yud6qnuaQOtIHdCzX.09.v7CfsgUJ2bNW', '2024-01-23 03:47:11'),
(64, 'newuser170598163149', '$2y$10$dKwgbKFmLbhas/iNR9z/VOIAsUBP0n9r9TwMyOT0sQ4m6RhRhlk.6', '2024-01-23 03:47:11'),
(65, 'newuser170598163168', '$2y$10$vlP56J07bfncz7qk/Oy4G.wXZnN9NBJdr6K.QTQB2guWdV1COMgJO', '2024-01-23 03:47:11'),
(66, 'newuser170598163217', '$2y$10$mDfpHO7fRm52tJ3ktY9qrOZ9B1adbc9sU9WscePE2WeMtie8efBqm', '2024-01-23 03:47:12'),
(67, 'newuser170598163220', '$2y$10$0OHBjlFzwH.fj5QLQ5wKIOAdH2zWnkyogU5DceV773o8XKocZLd0K', '2024-01-23 03:47:12'),
(68, 'newuser170598163263', '$2y$10$CKClF.QsayZIpzu0yg/jouYN3I.m3IJCFhzGMiaVJsAPGnbgLiXQK', '2024-01-23 03:47:12'),
(69, 'newuser17059816324', '$2y$10$kg2LppiExIZ9YNJOpgwwVu1fLu5dBIiEEBlzWOnW6S/1WJ6/PEh/C', '2024-01-23 03:47:12'),
(70, 'newuser170598163246', '$2y$10$zTUgt/DVaGLfTB5hjfBG.e.ZfwEFzSkfpOWUUAhvzcaDDeBvjEqRS', '2024-01-23 03:47:12'),
(71, 'newuser170598163298', '$2y$10$YwxyDJDY6uFLiZS7u1Znkeic5pFRqaDd4Tz0ghHtjMbIvRna5W3.K', '2024-01-23 03:47:12'),
(72, 'testuser007', '$2y$10$VDURk7iU8NWfiBJpT3CTeeS5kpj5s5Znin4KDnLSUHZMxriVqFYg6', '2024-01-23 04:01:44'),
(73, 'sathi', '$2y$10$hu2kJw7wMQQ01XoV6C6KIugGI3dn5wWWAvmvXsx72iXZLxA9ZpTPq', '2024-01-23 04:01:48'),
(74, 'bijow chowdhury', '$2y$10$91tGk.Ia0f.TWApIDRUeg.nrQNELrsl5j45d8/DWtmtFspozQGcvK', '2024-01-23 04:02:20'),
(75, 'year2024', '$2y$10$z6kIhHe3HSpTNhcQXbbf4.UT3gt4qp444IGE2bYuU2O830CqCRHg2', '2024-01-23 04:02:30'),
(76, 'Tawhid', '$2y$10$WxH/.VIwYTabIgEJQrGz.OyP.YVDbrF8y2lSP.S7TIW/BsH7ViwHW', '2024-01-23 04:02:31'),
(77, 'sabber', '$2y$10$5V93eRRJ.v9SQTI.B.p05.AOJrlmYjSo3pwE6VhMvJbn/hlWIKss2', '2024-01-23 04:02:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
