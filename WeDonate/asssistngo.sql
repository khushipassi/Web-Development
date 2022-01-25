-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 06:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asssistngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `assist`
--

CREATE TABLE `assist` (
  `fullName` varchar(20) NOT NULL,
  `emailId` varchar(30) NOT NULL,
  `mobileNum` bigint(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `donation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assist`
--

INSERT INTO `assist` (`fullName`, `emailId`, `mobileNum`, `address`, `city`, `state`, `country`, `donation`) VALUES
('Anita', 'Anita009@gmail.com', 2314567890, '#321, Sector-8, Panchkula', 'Panchkula', 'HR', 'India', '10 masks, 5 shirts, 10 sanitary napkins'),
('Sam', 'Sam009@gmail.com', 1234567890, '#123, Sector-4, Panchkula', 'Panchkula', 'HR', 'India', '20 masks, 10 sweaters, 10 biscuit packets');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
