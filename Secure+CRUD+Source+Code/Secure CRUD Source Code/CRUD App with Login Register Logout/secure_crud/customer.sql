-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 07:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `cid` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cpwd` varchar(100) NOT NULL,
  `ccity` varchar(100) NOT NULL,
  `corder` varchar(100) NOT NULL,
  `ccountry` varchar(100) NOT NULL,
  `cimg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`cid`, `cname`, `cemail`, `cpwd`, `ccity`, `corder`, `ccountry`, `cimg`) VALUES
(2, 'update Jafri Ali', 'jafri@gmai.com', '892483840', 'Karachi', '00000', 'USA', 'Csharp_Logo.png'),
(3, 'Ali', 'ali@gmail.com', '123456', 'Karachi', '89348', 'Pakistan', 'css-2189148_1280.png'),
(4, 'faisal zamir', 'faisalz@gmail.com', 'Faisal123', 'Paharpur', '454364', 'Pakistan', 'Unofficial_JavaScript_logo_2.svg.png'),
(6, 'Alishba', 'alishab@gmail.com', 'Faisal123', 'Lahore', '986757', 'Pakistan', 'GNOME_Web_logo.png'),
(8, 'John', 'john@gmail.com', '123', 'Lahore', '34567', 'Pakistan', 'eb7e20e646f5b7ec9ed4f8f78a5dee8f.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
