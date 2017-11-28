-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 03:43 AM
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
(37, 'Customer', 'custom', 'customer', 'test', 'custom', 60, 'Male', NULL, '2017-11-26 22:27:47'),
(38, 'Organizer', 'organ', 'Organizer', 'test', 'organ', 40, 'Others', NULL, '2017-11-26 22:27:47'),
(39, 'Organizer', 'test', '', '', 'test', 0, 'Male', NULL, '2017-11-27 00:07:17'),
(40, 'Customer', 'customertest', '', '', '', 0, 'Male', NULL, '2017-11-28 01:24:00');

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
  `customer_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`account_ID`, `customer_status`) VALUES
(1, 1),
(2, 0),
(6, 1),
(37, 1),
(40, 1);

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
  `event_approveStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_ID`, `event_name`, `event_organizerID`, `event_typeID`, `event_location`, `event_dateStart`, `event_dateEnd`, `event_timeStart`, `event_timeEnd`, `event_iconPicture`, `event_posterPicture`, `event_detail`, `event_createTimeStamp`, `event_approveStatus`) VALUES
(1, 'KemonoOnlyEvent', 3, 3, 'Siam Paragon', '2017-11-01', '2017-11-01', '00:00:00', '00:00:00', 'images/poster/noImage.jpg', NULL, 'wwss', '2017-11-26 18:17:03', 1),
(2, 'Hackathon 2015', 38, 2, 'Thammasat U', '2015-11-26', '2015-11-26', '15:58:02', '15:58:02', 'images/poster/icone1.jpg', NULL, 'Boring Event', '2017-11-26 18:17:03', 1),
(3, 'Hackathon 2016', 38, 2, 'Thammasat U', '2016-11-26', '2016-11-26', '18:11:36', '18:11:36', 'images/poster/icone1.jpg', NULL, 'Interesting Event', '2017-11-26 18:17:03', 1),
(4, 'Hackathon 2018', 38, 3, 'Bangkadi Campus', '2018-11-30', '2018-12-12', '20:12:14', '20:12:14', 'images/poster/icone1.jpg', NULL, 'I don\'t know. Coming Soon', '2017-11-26 20:12:14', 0),
(5, 'Hackathon 2017', 38, 3, 'Rangsit', '2017-11-26', '2017-11-30', '20:21:21', '20:21:21', 'images/poster/noImage.jpg', NULL, '', '2017-11-26 20:21:21', 1),
(6, 'testEvent', 38, 0, 'Bangkok', '2016-11-26', '2018-11-26', '00:00:00', '20:12:14', 'images/poster/noImage.jpg', 'test', 'boring', '2017-11-26 22:00:34', NULL),
(28, 'try', 38, 0, '', '0000-00-00', '2018-01-01', '00:00:00', '00:00:00', 'images/poster/noImage.jpg', 'users/ID38/users/ID38/1510478699944.jpg', '', '2017-11-27 00:22:40', NULL),
(29, 'try', 38, 0, '', '0000-00-00', '2018-01-01', '00:00:00', '00:00:00', 'images/poster/noImage.jpg', 'users/ID38/users/ID38/Screen Shot 2560-11-27 at 9.47.13 PM.png', '', '2017-11-27 00:22:57', NULL),
(30, 'try', 38, 0, '', '0000-00-00', '2018-01-01', '00:00:00', '00:00:00', 'users/ID38/users/ID38/Screen Shot 2560-11-27 at 9.47.13 PM.png', 'users/ID38/users/ID38/Screen Shot 2560-11-27 at 9.47.13 PM.png', '', '2017-11-27 00:23:30', NULL),
(31, 'rr', 38, 0, '', '0000-00-00', '2018-01-01', '00:00:00', '00:00:00', 'users/ID38/Dragons_fur_adult.png', 'users/ID38/users/ID38/Dragons_fur_adult.png', '', '2017-11-27 00:25:16', NULL),
(32, 'rr', 38, 0, '', '0000-00-00', '2018-01-01', '00:00:00', '00:00:00', 'images/poster/noImage.jpg', 'users/ID38/users/ID38/Dragons_fur_adult.png', '', '2017-11-27 00:25:38', NULL),
(33, 'trydragon', 38, 0, 'www', '0000-00-00', '2019-01-01', '00:00:00', '00:00:00', 'users/ID38/Dragons_fur_adult.png', 'users/ID38/Dragons_fur_adult.png', '', '2017-11-27 00:28:18', 2),
(34, 'long', 38, 0, '', '0000-00-00', '2010-01-10', '00:00:00', '00:00:00', 'users/ID38/Screen Shot 2560-11-27 at 9.47.13 PM.png', 'users/ID38/Screen Shot 2560-11-27 at 9.47.13 PM.png', '', '2017-11-27 00:29:29', 1),
(35, '', 38, 0, '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'users/ID38/', 'users/ID38/', '', '2017-11-28 01:58:39', NULL);

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
  `edit_ticketChange` tinyint(1) NOT NULL DEFAULT '0',
  `edit_approveStatus` tinyint(1) DEFAULT NULL,
  `edit_informMessage` text NOT NULL,
  `edit_timeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventEditLog`
--

INSERT INTO `eventEditLog` (`edit_ID`, `event_ID`, `edit_name`, `edit_typeID`, `edit_location`, `edit_dateStart`, `edit_dateEnd`, `edit_timeStart`, `edit_timeEnd`, `edit_iconPicture`, `edit_posterPicture`, `edit_detail`, `edit_ticketChange`, `edit_approveStatus`, `edit_informMessage`, `edit_timeStamp`) VALUES
(1, 5, 'Hackathon 2017 Return', 3, 'erererer', '2017-12-12', '2018-01-01', '02:43:03', '02:43:03', NULL, NULL, 'eeeee', 0, NULL, '', '2017-11-28 02:43:03');

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
(3, 'Sex Shop by Sun', 'Line Group', '1150', 'sexshopbysun@mail.com', 1),
(38, 'SIIT', 'bangkok', '33', 'siit', 1),
(39, 'test', '', '', '', 1);

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
(1, 3, 500, 'VISA', '2017-11-26 18:40:49'),
(2, 3, 1000, 'VISA', '2017-11-26 18:55:41'),
(3, 3, 2000, 'VISA', '2017-11-26 19:12:59');

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
(1, 6, 1, 3, 1, '2017-11-26', 1),
(2, 2, 2, 3, 2, '2017-11-26', 1),
(3, 2, 3, 3, 2, '0000-00-00', 1),
(4, 2, 3, 3, 2, '0000-00-00', 1),
(5, 6, 1, 5, 18, '0000-00-00', 1),
(6, 6, 1, 5, 18, '2018-01-01', 1);

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
(1, 3, 'Standard', 500, 20, 1),
(2, 3, 'Premium', 1000, 10, 1),
(17, 28, '', 0, 0, NULL),
(18, 28, '', 0, 0, NULL),
(19, 28, '', 0, 0, NULL),
(20, 31, '', 0, 0, NULL),
(21, 31, '', 0, 0, NULL),
(22, 33, '', 0, 0, NULL),
(23, 34, '', 0, 0, NULL),
(24, 35, '', 0, 0, NULL),
(25, 35, '', 0, 0, NULL),
(26, 35, '', 0, 0, NULL),
(27, 35, '', 0, 0, NULL),
(28, 35, '', 0, 0, NULL);

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
  ADD KEY `edit_event_link` (`event_ID`),
  ADD KEY `edit_eventType_link` (`edit_typeID`);

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
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `databaseActivityLog`
--
ALTER TABLE `databaseActivityLog`
  MODIFY `activity_ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `eventEditLog`
--
ALTER TABLE `eventEditLog`
  MODIFY `edit_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eventType`
--
ALTER TABLE `eventType`
  MODIFY `eventType_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `account_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `paymentLog`
--
ALTER TABLE `paymentLog`
  MODIFY `payment_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `refundLog`
--
ALTER TABLE `refundLog`
  MODIFY `refund_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticketType`
--
ALTER TABLE `ticketType`
  MODIFY `ticketType_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_eventType_link` FOREIGN KEY (`event_typeID`) REFERENCES `eventType` (`eventType_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `event_organizer_link` FOREIGN KEY (`event_organizerID`) REFERENCES `organizer` (`account_ID`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `ticketType_event_link` FOREIGN KEY (`event_ID`) REFERENCES `event` (`event_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
