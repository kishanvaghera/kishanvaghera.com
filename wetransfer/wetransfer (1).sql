-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2024 at 12:02 PM
-- Server version: 10.6.18-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wetransfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `iLinkId` int(11) NOT NULL,
  `vPath` varchar(255) NOT NULL,
  `tPermission` text NOT NULL,
  `tFileName` text NOT NULL,
  `dCreatedDate` datetime NOT NULL,
  `eStatus` enum('y','n','d') NOT NULL,
  `iExpireStatus` int(11) NOT NULL,
  `iCreatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`iLinkId`, `vPath`, `tPermission`, `tFileName`, `dCreatedDate`, `eStatus`, `iExpireStatus`, `iCreatedBy`) VALUES
(3, 'Wc553jJbo0', 'kishanvaghera8219@gmail.com', '64b63f50db5b2.png', '2024-06-26 23:39:29', 'y', 0, 1),
(4, '6GxvKxUzza', 'kishanvaghera8219@gmail.com,abc@gmail.com', '64b63f50db5b2.png', '2024-06-26 23:40:27', 'y', 0, 1),
(5, 'YIYuZa4jYU', 'abc@gmail.com', 'back pan card.png', '2024-06-27 00:06:38', 'y', 0, 2),
(6, 'HQhEEQZANv', 'kishanvaghera8219@gmail.com', '64b63f50db5b2 (2).png', '2024-06-26 11:53:33', 'y', 0, 1),
(7, 'JN2QszA2IY', 'abc@gmail.com', 'H_6811324.pdf', '2024-06-26 11:53:58', 'y', 0, 1),
(8, 'Pp06VSI0Qb', 'kishanvaghera8219@gmail.com', 'Archive (1).zip', '2024-06-26 11:56:48', 'y', 0, 1),
(9, 'FOaXuyaTQE', 'contact@deepjaviya.com', 'IMG_6997.dng', '2024-06-26 11:57:36', 'y', 0, 3),
(10, 'c2OYxA9ls2', 'contact@deepjaviya.com', 'philipp-pilz-iQRKBNKyRpo-unsplash.jpg', '2024-06-26 11:57:46', 'y', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iUserId` int(11) NOT NULL,
  `vUserName` varchar(255) NOT NULL,
  `vPassword` varchar(255) NOT NULL,
  `eStatus` enum('y','n','d') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iUserId`, `vUserName`, `vPassword`, `eStatus`) VALUES
(1, 'abc@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'y'),
(2, 'kishanvaghera8219@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'y'),
(3, 'patelaleis@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'y'),
(4, 'contact@deepjaviya.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`iLinkId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iUserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `iLinkId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iUserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
