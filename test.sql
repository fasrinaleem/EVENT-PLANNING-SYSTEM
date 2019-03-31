-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 22, 2017 at 09:25 AM
-- Server version: 5.6.36
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adrs` varchar(30) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `phone`, `email`, `adrs`, `zip`, `pass`) VALUES
('Fasrin', 'farin', 3123123, 'fasd@gmail.com', 'fafdf', 231, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(35) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `comment`) VALUES
('', '', 'fdsdfdgfhg'),
('', '', ''),
('', '', ''),
('', 'lolla@gmail.com', 'im a guyxsQ09-=WQ\r\n-Ere\r\n=3-]WPOAEFS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
