-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 01:33 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EVE`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_ID` int(15) NOT NULL,
  `account_type` varchar(250) NOT NULL,
  `account_email` varchar(250) NOT NULL,
  `account_fname` varchar(250) NOT NULL,
  `account_lname` varchar(250) NOT NULL,
  `account_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_ID`, `account_type`, `account_email`, `account_fname`, `account_lname`, `account_password`) VALUES
(1, 'Admin', 'sirichai@mail.com', 'Sirichai', 'Khomleart', 'admin'),
(2, 'Customer', 'nonwarit@mail.com', 'Nonwarit', 'Suwanmolee', 'custom'),
(3, 'Organizer', 'nawaphat@mail.com', 'Nawaphat', 'Khankasikam', 'organ'),
(4, 'Admin', 'nuttapol@mail.com', 'Nuttapol', 'Saiboonruen', 'admin'),
(5, 'Admin', 'pasin@mail.com', 'Pasin', 'Jiratthiticheep', 'admin'),
(6, 'Customer', 'panthakan@mail.com', 'Panthakan', 'Maisopa', 'custom');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `account_ID` int(15) NOT NULL,
  `staff_ID` varchar(250) NOT NULL,
  `staff_position` varchar(250) DEFAULT 'Permanent Staff'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`account_ID`, `staff_ID`, `staff_position`) VALUES
(1, 'admin001', 'Database Administrator'),
(4, 'admin002', 'Webpage Designer'),
(5, 'admin003', 'Database Designer');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `account_ID` int(15) NOT NULL,
  `customer_age` int(3) NOT NULL,
  `customer_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`account_ID`, `customer_age`, `customer_status`) VALUES
(2, 20, 1),
(6, 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `account_ID` int(15) NOT NULL,
  `organizer_name` varchar(250) NOT NULL,
  `organizer_address` varchar(1000) NOT NULL,
  `organizer_phone` varchar(15) NOT NULL,
  `organizer_email` varchar(250) NOT NULL,
  `organizer_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`account_ID`, `organizer_name`, `organizer_address`, `organizer_phone`, `organizer_email`, `organizer_status`) VALUES
(3, 'Sex Shop by Sun', 'Line Group', '1150', 'sexshopbysun@mail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`account_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`account_ID`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`account_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `account_admin_link` FOREIGN KEY (`account_ID`) REFERENCES `account` (`Account_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `account_customer_link` FOREIGN KEY (`account_ID`) REFERENCES `account` (`Account_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `organizer`
--
ALTER TABLE `organizer`
  ADD CONSTRAINT `account_organizer_link` FOREIGN KEY (`account_ID`) REFERENCES `account` (`Account_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
