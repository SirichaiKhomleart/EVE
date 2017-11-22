-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 04:32 AM
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
-- Table structure for table `eventType`
--

CREATE TABLE `eventType` (
  `eventType_ID` int(15) NOT NULL,
  `eventType_name` varchar(250) NOT NULL,
  `eventType_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventType`
--

INSERT INTO `eventType` (`eventType_ID`, `eventType_name`, `eventType_desc`) VALUES
(1, 'Entertainment', 'Life is hard, and a lot of people tired from their lifestyle. If they\'re gonna spend half an hour to do something, they want some entertainment and a sense of achievement. \r\nExplore here!'),
(2, 'Sports', 'The way a team plays as a whole determines its success. You may have the greatest bunch of individual stars in the world, but if they don\'t play together, the club won\'t be worth a dime. \r\nFinding the right place for yourself?'),
(3, 'Technology', 'The digital world is changing the roles communities play in our lives, as well as the roles we play within them. How can us, humans, and artificial things live together? \r\nFind out answer here!'),
(4, 'Travel', 'Traveling without any new experiences is not real traveling, it is commuting. In order to have a truly epic vacation, you need to get out there and experience as many new things as possible. This includes not just seeing and doing but also eating, learning and experiencing. \r\nJoin our trip now!'),
(5, 'Workshop', 'There are so many reasons why you should attend workshop. You have a lot to offer and maybe you’ll learn something new, laughter and relationship are immensely good for everyone’s health and well being. You’ll meet new friends in the colleagues you pass in the halls every day. And a lot more... \r\nWhy are you still holding back?'),
(6, 'Arts', 'Imagine a world without art, music, poetry, and stories. Such a world would lack the expression of much human creativity. The arts can remind us of what is truly important in life, who we really are, and what our purpose is. That is the reason why we cannot live in the world without the art. \r\nExploring the art of you here!'),
(7, 'Others', 'What really motivates people to go to an event? \r\nFor once I want you to think about the inner drives. There are things we will never say during a focus group or on your questionnaire.\r\nFind out more events you may interest!');

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
-- Indexes for table `eventType`
--
ALTER TABLE `eventType`
  ADD PRIMARY KEY (`eventType_ID`);

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
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `eventType`
--
ALTER TABLE `eventType`
  MODIFY `eventType_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
