-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 01:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `product_id` varchar(300) NOT NULL,
  `destinaton_address` varchar(300) NOT NULL,
  `initial_address` varchar(300) NOT NULL,
  `client_phone_number` varchar(300) NOT NULL,
  `estimated_cost` varchar(300) NOT NULL,
  `no_of_packages` varchar(300) NOT NULL,
  `pickup_date` varchar(300) NOT NULL,
  `assured_dly_date` varchar(300) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `short_details`
--

INSERT INTO `short_details` (`id`, `email`, `product_id`, `destinaton_address`, `initial_address`, `client_phone_number`, `estimated_cost`, `no_of_packages`, `pickup_date`, `assured_dly_date`, `status`) VALUES
(1, 'mohdhassandbg@gmail.com', 'kdjfkdfd', 'kj', 'kjk', 'jk', 'jk', '', '', '', 'YES'),
(1, 'sdfjksfdhjk@ggdfg', 'jhkj', 'jk', 'hjk', 'hjk', 'sdfdsf', '', '', '', 'no'),
(1, 'bcvb@2fdsf', ' 22ds', 'sdfdsfdsfsdf', 'sdfdsf', 'dsfdsfsdf', 'sdfds', '', '', '', 'yes'),
(0, 'kfhj@kkjdf', '53535kfkd', 'fdsfsdf', 'sdfsdfsdfs', 'dfsdfdsf', 'dsfdsf', '', '', '', 'no'),
(0, 'dksjhfj@fhjdsj', 'jhjk', 'jh', 'g', 'jhg', 'jhjg', '', '', '', 'YES'),
(0, 'fjkhdsA@kjhdj', 'jhsdfj', 'kjhkjhkjdsjh', 'jjkhkjfhj', 'khkjhkj', 'jkh', '', '', '', 'YES'),
(0, 'fgdfg@sdfs', 'sdfsdf', 'sddfsdfs', 'fdsfsdf', 'sdfsdfsdf', 'sdfds', '', '', '', 'YES'),
(0, 'dsfdsfs@sdfs', 'sfds', 'sdfsdf', 'sdfs', 'sdfds', 'sdfds', '', '', '', 'YES'),
(0, 'sdfsdf@sdsf', 'dsfdsf', 'sdfsdfsdf', 'sdfdsf', 'sdfdsfsdf', 'dsf', '', '', '', 'YES'),
(0, 'sdfds@dsffsf', 'sdfdsfsdf', 'sdfdsf', 'sdfsdf', 'sdfsdf', 'sdfds', '', '', '', 'YES'),
(0, 'mohdhassanbg@gmalc.o', 'kjgdkg', 'ksdjfk', 'kjkdjk', 'jkjkj', 'jkj', '', '', '', 'YES'),
(0, 'mohdhassandbg@gmail.com', 'ksd', 'dfjkf', 'dkjgd', 'dkdgj', 'jkg', 'blah', 'blah', 'blah', 'NO'),
(0, 'helowkdjf@gkdg', 'kjjkdkj', 'kj', 'kk', 'j', 'kj', 'blah', 'blah', 'blah', 'NO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
