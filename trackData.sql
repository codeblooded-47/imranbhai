-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2020 at 12:44 PM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trackData`
--

-- --------------------------------------------------------

--
-- Table structure for table `HASSAN`
--

CREATE TABLE `HASSAN` (
  `id` int UNSIGNED NOT NULL,
  `product_id` varchar(300) NOT NULL,
  `track_title` varchar(300) NOT NULL,
  `track_address` varchar(500) DEFAULT NULL,
  `date` varchar(300) DEFAULT NULL,
  `time` varchar(300) DEFAULT NULL,
  `active` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `HASSAN`
--

INSERT INTO `HASSAN` (`id`, `product_id`, `track_title`, `track_address`, `date`, `time`, `active`) VALUES
(1, 'HASSAN', 'Kolkata dgdfghdf gdfgjkhdfgjkd fgkjdsfg djghsdkgjhdsg jdsgf', 'Kolkata', 'Oct 11 , 2020', '08:23 pm', 'yes'),
(2, 'HASSAN', 'new update kdj dlkfhghdf gdfg jkdfghdfgj', 'fsdkdf', 'Oct 11 , 2020', '08:23 pm', 'yes'),
(3, 'HASSAN', 'item has been reached at new palce ', 'ddddfhsd fsdflsd', 'Oct 11 , 2020', '08:31 pm', 'yes'),
(4, 'HASSAN', 'item ', 'hsadk', 'Oct 11 , 2020', '08:50 pm', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `ksdjdfk`
--

CREATE TABLE `ksdjdfk` (
  `id` int UNSIGNED NOT NULL,
  `product_id` varchar(300) NOT NULL,
  `track_title` varchar(300) NOT NULL,
  `track_address` varchar(500) DEFAULT NULL,
  `date` varchar(300) DEFAULT NULL,
  `time` varchar(300) DEFAULT NULL,
  `active` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ksdjdfk`
--

INSERT INTO `ksdjdfk` (`id`, `product_id`, `track_title`, `track_address`, `date`, `time`, `active`) VALUES
(1, 'ksdjdfk', 'klsddflk', 'klsddflk', 'Oct 11 , 2020', '08:57 pm', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HASSAN`
--
ALTER TABLE `HASSAN`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ksdjdfk`
--
ALTER TABLE `ksdjdfk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `HASSAN`
--
ALTER TABLE `HASSAN`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ksdjdfk`
--
ALTER TABLE `ksdjdfk`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
