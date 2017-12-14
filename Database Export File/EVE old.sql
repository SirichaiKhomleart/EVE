-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2017 at 05:40 AM
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
  `account_password` varchar(20) NOT NULL,
  `account_age` int(3) NOT NULL,
  `account_gender` varchar(20) NOT NULL DEFAULT 'Others',
  `account_profilePicture` text,
  `account_createTimeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_ID`, `account_type`, `account_email`, `account_fname`, `account_lname`, `account_password`, `account_age`, `account_gender`, `account_profilePicture`, `account_createTimeStamp`) VALUES
(1, 'Admin', 'sirichai@mail.com', 'Sirichai', 'Khomleart', 'admin', 20, 'Male', NULL, '2017-11-26 22:27:47'),
(2, 'Customer', 'nonwarit@mail.com', 'Nonwarit', 'Suwanmolee', 'custom', 20, 'Male', NULL, '2017-11-26 22:27:47'),
(3, 'Organizer', 'nawaphat@mail.com', 'Nawaphat', 'Khankasikam', 'organ', 20, 'Male', NULL, '2017-11-26 22:27:47'),
(4, 'Admin', 'nuttapol@mail.com', 'Nuttapol', 'Saiboonruen', 'admin', 20, 'Male', NULL, '2017-11-26 22:27:47'),
(5, 'Admin', 'pasin@mail.com', 'Pasin', 'Jiratthiticheep', 'admin', 20, 'Male', NULL, '2017-11-26 22:27:47'),
(6, 'Customer', 'panthakan@mail.com', 'Panthakan', 'Maisopa', 'custom', 20, 'Male', NULL, '2017-11-26 22:27:47'),
(37, 'Customer', 'jack@mail.com', 'Jack', 'Tonio', 'custom', 60, 'Male', NULL, '2017-11-26 22:27:47'),
(41, 'Admin', 'prayut@mail.com', 'Prayut', 'Junocha', 'admin', 33, 'Others', NULL, '2017-11-28 08:00:44'),
(43, 'Customer', 'two@mail.com', 'Tanyut', 'Sumalee', 'custom', 39, 'Female', NULL, '2017-11-29 01:45:57'),
(44, 'Organizer', 'imagine@mail.com', 'Jacop', 'Kaiki', 'organ', 40, 'Female', NULL, '2017-11-29 01:48:49'),
(45, 'Organizer', 'golf@mail.com', 'Hopper', 'Hunterman', 'organ', 39, 'Male', NULL, '2017-11-29 02:20:02'),
(46, 'Organizer', 'teryxc@mail.com', 'Hung', 'Nguyen', 'organ', 44, 'Female', NULL, '2017-11-29 02:41:22'),
(47, 'Customer', 'tan@mail.com', 'Tanya', 'Bobby', 'custom', 33, 'Female', NULL, '2017-11-29 02:58:08'),
(48, 'Customer', 'siripron@mail.com', 'Siripron', 'Tankun', 'custom', 67, 'Male', NULL, '2017-11-29 03:17:50');

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
(5, 'admin003', 'Database Designer'),
(41, 'thailand_headcoach', 'Permanent President');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `account_ID` int(15) NOT NULL,
  `customer_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`account_ID`, `customer_status`) VALUES
(1, 1),
(2, 1),
(6, 1),
(37, 1),
(43, 1),
(47, 1),
(48, 1);

-- --------------------------------------------------------

--
-- Table structure for table `databaseActivityLog`
--

CREATE TABLE `databaseActivityLog` (
  `activity_ID` int(15) NOT NULL,
  `activity_accountID` int(15) NOT NULL,
  `activity_timeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activity_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_ID` int(15) NOT NULL,
  `event_name` varchar(250) NOT NULL,
  `event_organizerID` int(15) NOT NULL,
  `event_typeID` int(15) NOT NULL DEFAULT '0',
  `event_location` text NOT NULL,
  `event_dateStart` date NOT NULL,
  `event_dateEnd` date NOT NULL,
  `event_timeStart` time NOT NULL,
  `event_timeEnd` time NOT NULL,
  `event_iconPicture` varchar(1000) DEFAULT 'images/poster/noImage.jpg',
  `event_posterPicture` text,
  `event_detail` longtext NOT NULL,
  `event_createTimeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `event_approveStatus` tinyint(1) DEFAULT NULL,
  `event_disapproveMessage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_ID`, `event_name`, `event_organizerID`, `event_typeID`, `event_location`, `event_dateStart`, `event_dateEnd`, `event_timeStart`, `event_timeEnd`, `event_iconPicture`, `event_posterPicture`, `event_detail`, `event_createTimeStamp`, `event_approveStatus`, `event_disapproveMessage`) VALUES
(2, 'Hackathon 2015', 45, 3, 'Thammasat U', '2015-11-26', '2015-11-26', '15:58:02', '15:58:02', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-26 18:17:03', 1, ''),
(3, 'Hackathon 2016', 45, 3, 'Thammasat U', '2016-11-26', '2016-11-26', '18:11:36', '18:11:36', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-26 18:17:03', 1, ''),
(5, 'Hackathon 2017', 45, 3, 'Thammasat U', '2017-11-26', '2017-11-30', '20:21:21', '20:21:21', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-26 20:21:21', 1, ''),
(42, 'Hackathon 2019', 45, 3, 'Thammasat U', '2019-01-10', '2019-12-12', '22:22:22', '11:11:11', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-28 06:24:34', 1, ''),
(43, 'TECHJAM 2019', 45, 3, 'Thammasat U', '2019-09-09', '2019-12-12', '12:12:12', '12:12:12', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-28 10:33:59', 1, ''),
(44, 'FINAL CRISIS', 45, 5, 'Thammasat U', '2019-01-01', '2018-01-01', '00:00:00', '00:00:00', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-28 11:00:06', 1, ''),
(45, 'MIDTERM CRISIS', 45, 5, 'Thammasat U', '2018-12-12', '2019-11-11', '00:00:00', '00:00:00', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-28 11:00:54', 1, ''),
(46, 'Pokemon Go Challenge', 45, 1, 'Thammasat U', '2019-01-01', '2020-01-01', '12:12:12', '12:12:12', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-29 00:06:51', 1, ''),
(47, 'Travel around the world', 3, 4, 'Thammasat U', '2019-09-09', '2022-09-09', '00:00:00', '00:00:00', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-29 00:26:11', 1, ''),
(48, 'Improve Yourself Camp', 44, 5, 'Thammasat U', '2019-09-09', '2020-09-09', '00:00:00', '00:00:00', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-29 01:49:44', 1, ''),
(49, 'WWDC2018', 45, 3, 'Thammasat U', '0000-00-00', '2018-09-09', '00:00:00', '00:00:00', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-29 02:20:26', 1, ''),
(50, 'Happy New Year Party', 46, 1, 'Thammasat U', '0000-00-00', '2018-01-01', '00:00:00', '00:00:00', 'images/user/hackathonold.png', 'images/user/hackathonold.png', 'Coming Soon', '2017-11-29 02:42:22', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `eventEditLog`
--

CREATE TABLE `eventEditLog` (
  `edit_ID` int(15) NOT NULL,
  `event_ID` int(15) NOT NULL,
  `edit_name` varchar(250) NOT NULL,
  `edit_typeID` int(15) NOT NULL DEFAULT '0',
  `edit_location` text NOT NULL,
  `edit_dateStart` date NOT NULL,
  `edit_dateEnd` date NOT NULL,
  `edit_timeStart` time NOT NULL,
  `edit_timeEnd` time NOT NULL,
  `edit_iconPicture` text,
  `edit_posterPicture` text,
  `edit_detail` longtext NOT NULL,
  `edit_approveStatus` tinyint(1) DEFAULT NULL,
  `edit_informMessage` text NOT NULL,
  `edit_timeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventEditLog`
--

INSERT INTO `eventEditLog` (`edit_ID`, `event_ID`, `edit_name`, `edit_typeID`, `edit_location`, `edit_dateStart`, `edit_dateEnd`, `edit_timeStart`, `edit_timeEnd`, `edit_iconPicture`, `edit_posterPicture`, `edit_detail`, `edit_approveStatus`, `edit_informMessage`, `edit_timeStamp`) VALUES
(13, 5, 'RERUN Hackathon 2017', 3, 'Rangsit', '2017-11-26', '2017-11-30', '20:21:21', '20:21:21', 'users/ID38/noImage.jpg', 'users/ID38/noImage.jpg', 'Coming Soon', 1, '', '2017-11-28 06:28:35'),
(14, 43, 'My lovely dragon ', 5, 'UTHOPIA', '2019-09-09', '2019-12-12', '12:12:12', '12:12:12', 'users/ID42/noImage.jpg', 'users/ID42/noImage.jpg', 'NO DATA', 1, '', '2017-11-28 10:52:21'),
(17, 46, 'new', 0, 'new', '2019-01-01', '2020-01-01', '12:12:12', '12:12:12', 'users/ID38/noImage.jpg', 'users/ID38/noImage.jpg', 'new', 1, '', '2017-11-29 00:13:43'),
(18, 47, 'dddedit', 0, 'dddd', '2019-09-09', '2022-09-09', '00:00:00', '00:00:00', 'users/ID38/1510478699944.jpg', 'users/ID38/1510478699944.jpg', 'qqq', 1, '', '2017-11-29 00:27:32'),
(19, 48, 'testFINAL', 0, 'try', '2019-09-09', '2020-09-09', '00:00:00', '00:00:00', 'users/ID44/1510478699944.jpg', 'users/ID44/1510478699944.jpg', 'eee', 1, '', '2017-11-29 01:51:27'),
(20, 49, 'tets', 0, '', '0000-00-00', '2019-09-09', '00:00:00', '00:00:00', 'users/ID45/hackathonnew.png', 'users/ID45/hackathonnew.png', '', 1, '', '2017-11-29 02:33:25'),
(21, 50, 'teterdie', 2, 'dwef', '0000-00-00', '2019-09-09', '00:00:00', '00:00:00', 'users/ID46/hackathonold.png', 'users/ID46/hackathonold.png', 'riririr', 0, '', '2017-11-29 02:44:07');

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
(0, 'Others', 'What really motivates people to go to an event? \r\nFor once I want you to think about the inner drives. There are things we will never say during a focus group or on your questionnaire.\r\nFind out more events you may interest!'),
(1, 'Entertainment', 'Life is hard, and a lot of people tired from their lifestyle. If they\'re gonna spend half an hour to do something, they want some entertainment and a sense of achievement. \r\nExplore here!'),
(2, 'Sports', 'The way a team plays as a whole determines its success. You may have the greatest bunch of individual stars in the world, but if they don\'t play together, the club won\'t be worth a dime. \r\nFinding the right place for yourself?'),
(3, 'Technology', 'The digital world is changing the roles communities play in our lives, as well as the roles we play within them. How can us, humans, and artificial things live together? \r\nFind out answer here!'),
(4, 'Travel', 'Traveling without any new experiences is not real traveling, it is commuting. In order to have a truly epic vacation, you need to get out there and experience as many new things as possible. This includes not just seeing and doing but also eating, learning and experiencing. \r\nJoin our trip now!'),
(5, 'Workshop', 'There are so many reasons why you should attend workshop. You have a lot to offer and maybe you’ll learn something new, laughter and relationship are immensely good for everyone’s health and well being. You’ll meet new friends in the colleagues you pass in the halls every day. And a lot more... \r\nWhy are you still holding back?'),
(6, 'Arts', 'Imagine a world without art, music, poetry, and stories. Such a world would lack the expression of much human creativity. The arts can remind us of what is truly important in life, who we really are, and what our purpose is. That is the reason why we cannot live in the world without the art. \r\nExploring the art of you here!');

-- --------------------------------------------------------

--
-- Table structure for table `messageLog`
--

CREATE TABLE `messageLog` (
  `message_ID` int(11) NOT NULL,
  `message_from` int(15) NOT NULL,
  `message_to` int(15) NOT NULL,
  `message_detail` int(11) NOT NULL,
  `message_timeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message_readStatus` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'Shop by Sun', 'Line Group', '1150', 'sexshopbysun@mail.com', 1),
(44, 'Thammasat', 'Thammasat University', '021234567', 'mail@tu.ac.th', 1),
(45, 'SIIT', 'Bangkadi Campus', '0811234567', 'siit@mail.tu.ac.th', 1),
(46, 'Google', 'Google Headquartered ', '0999999999', 'fw@google.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paymentLog`
--

CREATE TABLE `paymentLog` (
  `payment_ID` int(15) NOT NULL,
  `event_ID` int(15) NOT NULL,
  `payment_money` int(11) NOT NULL,
  `payment_method` text NOT NULL,
  `payment_timeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentLog`
--

INSERT INTO `paymentLog` (`payment_ID`, `event_ID`, `payment_money`, `payment_method`, `payment_timeStamp`) VALUES
(4, 5, 0, 'VISA', '2017-11-28 10:02:47'),
(5, 2, 10500, 'VISA', '2017-11-29 01:04:55'),
(6, 2, 10500, 'MasterCard', '2017-11-29 01:07:12'),
(7, 2, 33000, 'MasterCard', '2017-11-29 01:46:56'),
(8, 2, 56500, 'MasterCard', '2017-11-29 02:58:34'),
(9, 2, 3500, 'MasterCard', '2017-11-29 03:04:06'),
(10, 2, 10000, 'MasterCard', '2017-11-29 03:18:12'),
(11, 2, 19500, 'MasterCard', '2017-11-29 03:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `refundLog`
--

CREATE TABLE `refundLog` (
  `refund_ID` int(11) NOT NULL,
  `ticket_ID` int(15) NOT NULL,
  `account_ID` int(15) NOT NULL,
  `refund_timeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `refund_approveStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refundLog`
--

INSERT INTO `refundLog` (`refund_ID`, `ticket_ID`, `account_ID`, `refund_timeStamp`, `refund_approveStatus`) VALUES
(1, 7, 6, '2017-11-28 10:15:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_ID` int(15) NOT NULL,
  `account_ID` int(15) NOT NULL,
  `payment_ID` int(15) NOT NULL,
  `event_ID` int(15) NOT NULL,
  `ticketType_ID` int(15) NOT NULL,
  `event_dateEnd` date NOT NULL,
  `ticket_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_ID`, `account_ID`, `payment_ID`, `event_ID`, `ticketType_ID`, `event_dateEnd`, `ticket_status`) VALUES
(7, 6, 4, 5, 48, '2018-11-11', 1),
(8, 37, 5, 2, 1, '2017-09-30', 1),
(9, 37, 5, 2, 1, '2017-09-30', 1),
(10, 37, 5, 2, 1, '2017-09-30', 1),
(11, 37, 6, 2, 1, '2017-12-30', 1),
(12, 37, 6, 2, 1, '2017-12-30', 1),
(13, 37, 6, 2, 1, '2017-12-30', 1),
(14, 43, 7, 2, 1, '2017-12-30', 1),
(15, 43, 7, 2, 1, '2017-12-30', 1),
(16, 43, 7, 2, 2, '2017-12-30', 1),
(17, 43, 7, 2, 2, '2017-12-30', 1),
(18, 43, 7, 2, 2, '2017-12-30', 1),
(19, 43, 7, 2, 2, '2017-12-30', 1),
(20, 47, 8, 2, 1, '2017-12-30', 1),
(21, 47, 8, 2, 1, '2017-12-30', 1),
(22, 47, 8, 2, 1, '2017-12-30', 1),
(23, 47, 8, 2, 1, '2017-12-30', 1),
(24, 47, 8, 2, 1, '2017-12-30', 1),
(25, 47, 8, 2, 2, '2017-12-30', 1),
(26, 47, 8, 2, 2, '2017-12-30', 1),
(27, 47, 8, 2, 2, '2017-12-30', 1),
(28, 47, 8, 2, 2, '2017-12-30', 1),
(29, 47, 8, 2, 2, '2017-12-30', 1),
(30, 47, 8, 2, 2, '2017-12-30', 1),
(31, 47, 9, 2, 1, '2017-12-30', 1),
(32, 48, 10, 2, 1, '2017-12-30', 1),
(33, 48, 10, 2, 2, '2017-12-30', 1),
(34, 48, 11, 2, 2, '2017-12-30', 1),
(35, 48, 11, 2, 2, '2017-12-30', 1),
(36, 48, 11, 2, 2, '2017-12-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticketType`
--

CREATE TABLE `ticketType` (
  `ticketType_ID` int(15) NOT NULL,
  `event_ID` int(15) NOT NULL,
  `ticketType_name` varchar(250) NOT NULL DEFAULT 'Standard',
  `ticketType_price` int(11) NOT NULL,
  `ticketType_totalSeats` int(11) NOT NULL,
  `ticketType_approveStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketType`
--

INSERT INTO `ticketType` (`ticketType_ID`, `event_ID`, `ticketType_name`, `ticketType_price`, `ticketType_totalSeats`, `ticketType_approveStatus`) VALUES
(1, 3, 'Standard', 500, 100, 1),
(2, 3, 'Premium', 1000, 100, 1),
(46, 42, 'Standard', 20, 100, 1),
(47, 42, 'Premium', 40, 300, 1),
(48, 5, 'Standard', 0, 150, 1),
(49, 5, 'Premium', 50, 20, 1),
(50, 43, 'Standard', 300, 20, 1),
(51, 43, 'Premium', 200, 20, 1),
(52, 43, 'Standard (Special Deal)', 100, 10, 1),
(53, 43, 'Premium (Special Deal)', 50, 10, 1),
(54, 44, 'Standard', 0, 20, 1),
(55, 46, 'Standard', 100, 100, 1),
(56, 46, 'Premium', 200, 200, 1),
(57, 47, 'Standard', 1000, 10, 1),
(58, 47, 'Premium', 20000, 90, 1),
(59, 48, 'Standard', 200, 50, 1),
(60, 48, 'Premium', 300, 40, 1),
(61, 49, 'Standard', 200, 20, 1),
(62, 49, 'Premium', 3000, 20, 1),
(63, 50, 'Standard', 300, 60, 1),
(64, 50, 'Premium', 400, 90, 1);

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
-- Indexes for table `databaseActivityLog`
--
ALTER TABLE `databaseActivityLog`
  ADD PRIMARY KEY (`activity_ID`),
  ADD KEY `activity_account_link` (`activity_accountID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_ID`),
  ADD KEY `event_organizer_link` (`event_organizerID`),
  ADD KEY `event_eventType_link` (`event_typeID`);

--
-- Indexes for table `eventEditLog`
--
ALTER TABLE `eventEditLog`
  ADD PRIMARY KEY (`edit_ID`),
  ADD KEY `edit_eventType_link` (`edit_typeID`),
  ADD KEY `edit_event_link` (`event_ID`);

--
-- Indexes for table `eventType`
--
ALTER TABLE `eventType`
  ADD PRIMARY KEY (`eventType_ID`);

--
-- Indexes for table `messageLog`
--
ALTER TABLE `messageLog`
  ADD KEY `messageFrom_account_link` (`message_from`),
  ADD KEY `messageTo_account_link` (`message_to`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`account_ID`);

--
-- Indexes for table `paymentLog`
--
ALTER TABLE `paymentLog`
  ADD PRIMARY KEY (`payment_ID`),
  ADD KEY `payment_event_link` (`event_ID`);

--
-- Indexes for table `refundLog`
--
ALTER TABLE `refundLog`
  ADD PRIMARY KEY (`refund_ID`),
  ADD KEY `refund_ticket_link` (`ticket_ID`),
  ADD KEY `refund_account_link` (`account_ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_ID`),
  ADD KEY `ticket_account_link` (`account_ID`),
  ADD KEY `ticket_payment_link` (`payment_ID`),
  ADD KEY `ticket_event_link` (`event_ID`),
  ADD KEY `ticket_ticketType_link` (`ticketType_ID`);

--
-- Indexes for table `ticketType`
--
ALTER TABLE `ticketType`
  ADD PRIMARY KEY (`ticketType_ID`),
  ADD KEY `ticketType_event_link` (`event_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `databaseActivityLog`
--
ALTER TABLE `databaseActivityLog`
  MODIFY `activity_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `eventEditLog`
--
ALTER TABLE `eventEditLog`
  MODIFY `edit_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `eventType`
--
ALTER TABLE `eventType`
  MODIFY `eventType_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `paymentLog`
--
ALTER TABLE `paymentLog`
  MODIFY `payment_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `refundLog`
--
ALTER TABLE `refundLog`
  MODIFY `refund_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ticketType`
--
ALTER TABLE `ticketType`
  MODIFY `ticketType_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

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
-- Constraints for table `databaseActivityLog`
--
ALTER TABLE `databaseActivityLog`
  ADD CONSTRAINT `activity_account_link` FOREIGN KEY (`activity_accountID`) REFERENCES `account` (`account_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `eventEditLog`
--
ALTER TABLE `eventEditLog`
  ADD CONSTRAINT `edit_eventType_link` FOREIGN KEY (`edit_typeID`) REFERENCES `eventType` (`eventType_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `edit_event_link` FOREIGN KEY (`event_ID`) REFERENCES `event` (`event_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `messageLog`
--
ALTER TABLE `messageLog`
  ADD CONSTRAINT `messageFrom_account_link` FOREIGN KEY (`message_from`) REFERENCES `account` (`account_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `messageTo_account_link` FOREIGN KEY (`message_to`) REFERENCES `account` (`account_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `organizer`
--
ALTER TABLE `organizer`
  ADD CONSTRAINT `account_organizer_link` FOREIGN KEY (`account_ID`) REFERENCES `account` (`Account_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paymentLog`
--
ALTER TABLE `paymentLog`
  ADD CONSTRAINT `payment_event_link` FOREIGN KEY (`event_ID`) REFERENCES `event` (`event_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `refundLog`
--
ALTER TABLE `refundLog`
  ADD CONSTRAINT `refund_account_link` FOREIGN KEY (`account_ID`) REFERENCES `account` (`account_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `refund_ticket_link` FOREIGN KEY (`ticket_ID`) REFERENCES `ticket` (`ticket_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_account_link` FOREIGN KEY (`account_ID`) REFERENCES `account` (`account_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_event_link` FOREIGN KEY (`event_ID`) REFERENCES `event` (`event_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_payment_link` FOREIGN KEY (`payment_ID`) REFERENCES `paymentLog` (`payment_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ticketType_link` FOREIGN KEY (`ticketType_ID`) REFERENCES `ticketType` (`ticketType_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticketType`
--
ALTER TABLE `ticketType`
  ADD CONSTRAINT `ticketType_event_link` FOREIGN KEY (`event_ID`) REFERENCES `event` (`event_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
