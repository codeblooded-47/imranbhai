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
-- Database: `track_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `short_details`
--

CREATE TABLE `short_details` (
  `id` int NOT NULL,
  `email` varchar(300) NOT NULL,
  `product_id` varchar(300) NOT NULL,
  `destinaton_address` varchar(300) NOT NULL,
  `initial_address` varchar(300) NOT NULL,
  `client_phone_number` varchar(300) NOT NULL,
  `estimated_cost` varchar(300)  NOT NULL,
  `status` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `short_details`
--

INSERT INTO `short_details` (`id`, `email`, `product_id`, `destinaton_address`, `initial_address`, `client_phone_number`, `estimated_cost`) VALUES
(56, 'mohdhassandbg@gamil.com', 'HASSAN', 'New Delhi', 'Kolkata', '053470', '059'),
(57, 'hjsdkfh@gamk', 'ksdjdfk', 'ksdjfk', 'klsddflk', 'kjkf', 'kjksdjdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `short_details`
--
ALTER TABLE `short_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `short_details`
--
ALTER TABLE `short_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
