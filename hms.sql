-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 08:16 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE `tbl_bookings` (
  `_id` int(11) NOT NULL,
  `hotelId` varchar(25) NOT NULL,
  `bookingId` varchar(20) NOT NULL,
  `bookedRooms` varchar(20) NOT NULL,
  `bookedCustomer` varchar(20) NOT NULL,
  `bookingCheckIn` datetime NOT NULL,
  `bookingCheckOut` datetime NOT NULL,
  `bookingCreatedOn` datetime NOT NULL,
  `bookedAdultsNo` int(11) NOT NULL,
  `bookedChildNo` int(11) NOT NULL,
  `bookedBeds` int(11) NOT NULL,
  `bookedEmail` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bookings`
--

INSERT INTO `tbl_bookings` (`_id`, `hotelId`, `bookingId`, `bookedRooms`, `bookedCustomer`, `bookingCheckIn`, `bookingCheckOut`, `bookingCreatedOn`, `bookedAdultsNo`, `bookedChildNo`, `bookedBeds`, `bookedEmail`) VALUES
(1, 'MSAPH1819001', 'MSMSAPH1819001154036', '3', '0', '2018-10-25 00:00:00', '2018-10-27 00:00:00', '0000-00-00 00:00:00', 2, 1, 0, ''),
(2, 'MSAPH1819001', 'MSMSAPH1819001154036', '3', 'Sairam Pasupuleti', '2018-10-25 00:00:00', '2018-10-27 00:00:00', '0000-00-00 00:00:00', 2, 1, 0, 'sairam@ps.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `_id` int(11) NOT NULL,
  `customerId` varchar(20) NOT NULL,
  `customerName` varchar(30) NOT NULL,
  `customerEmail` varchar(50) NOT NULL,
  `customerPassword` varchar(255) NOT NULL,
  `customerStatus` enum('1','0') NOT NULL,
  `customerVerified` enum('NO','YES') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`_id`, `customerId`, `customerName`, `customerEmail`, `customerPassword`, `customerStatus`, `customerVerified`) VALUES
(2, 'C1540354058', 'Sairam Pasupuleti', 'sairam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', 'NO'),
(3, 'C1540354838', 'Pavan Kalyan', 'pavan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotels`
--

CREATE TABLE `tbl_hotels` (
  `_id` int(11) NOT NULL,
  `hotelId` varchar(20) NOT NULL,
  `hotelName` varchar(300) NOT NULL,
  `hotelRooms` int(11) NOT NULL,
  `hotelImages` varchar(350) NOT NULL,
  `hotelRoomPrice` decimal(10,2) NOT NULL,
  `hotelGstNo` varchar(16) NOT NULL,
  `hotelAddress1` text NOT NULL,
  `hotelAddress2` text NOT NULL,
  `hotelCity` varchar(50) NOT NULL,
  `hotelState` varchar(20) NOT NULL,
  `hotelPinCode` varchar(6) NOT NULL,
  `hotelType` enum('Economy','2 Star','3 Star','5 Star','7 Star') NOT NULL,
  `hotelPhone` varchar(15) NOT NULL,
  `hotelMobile` varchar(15) NOT NULL,
  `hotelEmail` varchar(75) NOT NULL,
  `hotelWebSite` varchar(150) NOT NULL,
  `hotelPermaLink` varchar(330) NOT NULL,
  `hotelStatus` enum('1','0') NOT NULL,
  `hotelAddedOn` datetime NOT NULL,
  `hotelAddedBy` int(11) NOT NULL,
  `hotelUpdatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hotels`
--

INSERT INTO `tbl_hotels` (`_id`, `hotelId`, `hotelName`, `hotelRooms`, `hotelImages`, `hotelRoomPrice`, `hotelGstNo`, `hotelAddress1`, `hotelAddress2`, `hotelCity`, `hotelState`, `hotelPinCode`, `hotelType`, `hotelPhone`, `hotelMobile`, `hotelEmail`, `hotelWebSite`, `hotelPermaLink`, `hotelStatus`, `hotelAddedOn`, `hotelAddedBy`, `hotelUpdatedBy`) VALUES
(1, 'MSAPH1819001', 'Hotel Sairam', 3, '', '4000.00', '', 'Main road ', 'Putrela', 'Vissannapeta', 'Andhra Pradesh', '521227', '7 Star', '08673259520', '9989938828', 'sairampasupuleti.42@gmail.com', 'hotelsairam.com', 'hotel-sairam', '1', '2018-10-21 19:06:40', 0, 0),
(2, 'MSAPH1819002', 'some xuzhkjd i ks k jnsd n', 2, '/uploads/hotels/some-xuzhkjd-i-ks-k-jnsd-n', '3500.00', '', 'some xuzhkjd i ks k jnsd n', 'some xuzhkjd i ks k jnsd n', 'some xuzhkjd i ks k jnsd n', 'some xuzhkjd i ks k ', '654652', 'Economy', '25651616513', '5414156461', 'sairam@gmail.com', 'some xuzhkjd i ks k jnsd n', 'some-xuzhkjd-i-ks-k-jnsd-n', '1', '2018-10-24 10:42:12', 1, 0),
(3, 'MSAPH1819003', 'jhj', 1, '/uploads/hotels/jhj/', '2334.00', '', 'hk', 'jhk', 'sdf', 'rfsdf', '34', '', 'jh', 'kjjh', 'kj', 'kj', 'jhj', '1', '2018-10-24 10:46:03', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `_id` int(11) NOT NULL,
  `hotelId` int(11) NOT NULL,
  `roomTitle` varchar(50) NOT NULL,
  `roomNo` varchar(10) NOT NULL,
  `roomPrice` decimal(10,2) NOT NULL,
  `roomStatus` enum('1','0') NOT NULL,
  `roomAvailability` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`_id`, `hotelId`, `roomTitle`, `roomNo`, `roomPrice`, `roomStatus`, `roomAvailability`) VALUES
(1, 1, '', '1001', '4000.00', '1', '1'),
(2, 1, '', '1002', '4000.00', '1', '1'),
(3, 1, '', '1003', '4000.00', '1', '1'),
(4, 2, 'Doule', '1002', '3500.00', '1', '1'),
(5, 2, 'Doule', '1006', '3500.00', '1', '1'),
(6, 3, 'efwssf', '23', '2334.00', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `_id` int(11) NOT NULL,
  `userId` varchar(15) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `userEmail` varchar(75) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userStatus` enum('1','0') NOT NULL,
  `userType` enum('ADMIN','VENDOR') NOT NULL,
  `userCreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`_id`, `userId`, `userName`, `userEmail`, `userPassword`, `userStatus`, `userType`, `userCreatedOn`) VALUES
(1, 'ADM001', 'Admin ', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', 'ADMIN', '2018-10-17 01:05:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `tbl_hotels`
--
ALTER TABLE `tbl_hotels`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_hotels`
--
ALTER TABLE `tbl_hotels`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
