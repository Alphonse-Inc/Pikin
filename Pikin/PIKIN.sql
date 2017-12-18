-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 17, 2017 at 11:41 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pickin`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `SN` int(200) NOT NULL,
  `suburb` text NOT NULL,
  `typeofservice` text NOT NULL,
  `day` char(200) NOT NULL,
  `starttime` time(6) NOT NULL,
  `endtime` time(6) NOT NULL,
  `paymentmethod` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`SN`, `suburb`, `typeofservice`, `day`, `starttime`, `endtime`, `paymentmethod`) VALUES
(1, '900002', '', 'on', '16:05:00.000000', '17:05:00.000000', 'Credit Card'),
(2, '900002', '', 'on', '09:00:00.000000', '11:00:00.000000', 'Paypal'),
(3, '900002', '', 'on', '08:00:00.000000', '09:00:00.000000', 'Paypal'),
(4, '900002', '', 'saturday', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(5, '900002', '', 'on', '08:00:00.000000', '09:00:00.000000', 'Paypal'),
(6, '900002', '', 'on', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(7, '900002', '', 'on', '17:00:00.000000', '18:00:00.000000', 'Credit Card'),
(8, '900002', '', 'on', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(9, '900002', '', '', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(10, '900002', '', '', '09:00:00.000000', '17:00:00.000000', 'Paypal'),
(11, '900002', '', 'on , on ,', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(12, '900001', '', 'on , on ,', '17:00:00.000000', '18:00:00.000000', 'Credit Card'),
(13, '900001', '', 'on , on ,', '21:00:00.000000', '22:00:00.000000', 'Credit Card'),
(14, '900002', '', 'monday , tuesday ,', '05:05:00.000000', '06:00:00.000000', 'Credit Card'),
(15, '900001', 'Morning Childcare Service', 'monday ,', '06:00:00.000000', '07:00:00.000000', 'Paypal'),
(16, '900001', 'Morning Childcare Service', 'monday ,', '06:00:00.000000', '07:00:00.000000', 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `SN` int(200) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `educators`
--

CREATE TABLE `educators` (
  `SN` int(200) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `postcode` int(30) NOT NULL,
  `suburb` text NOT NULL,
  `coordinator` text NOT NULL,
  `rating` int(5) DEFAULT '0',
  `avatar` varchar(255) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `educators`
--

INSERT INTO `educators` (`SN`, `firstname`, `lastname`, `email`, `number`, `password`, `postcode`, `suburb`, `coordinator`, `rating`, `avatar`) VALUES
(1, 'Habu', 'Mohammed', 'moh@yahoo.com', '+2348038471835', 'mohash', 900001, 'Ottawa', 'Mr Abdul', 1, 'default.jpg'),
(2, 'Zee', 'Musa', 'zee@yahoo.com', '+2345968735467', 'zee', 900001, 'Ottawa', 'Mr Joshua', 2, 'default.jpg'),
(3, 'Ree', 'Akin', 'ree@yahoo.com', '+2345968735467', 'ree', 900001, 'Ottawa', 'Mr Joshua', 3, 'default.jpg'),
(4, 'Habu', 'Hashidu', 'habu@yahoo.com', '+2348097654372', 'habu', 900002, 'Ontario', 'Mr Yusuf', NULL, 'default.jpg'),
(5, 'Kauna', 'Magaji', 'kauna@yahoo.com', '+2348075937563', 'kauna', 900002, 'Ontario', 'Mr Joshua', NULL, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `SN` int(200) NOT NULL,
  `image` longblob NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `paymentmethod` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`SN`, `image`, `firstname`, `lastname`, `email`, `password`, `paymentmethod`) VALUES
(12, '', 'Amira', 'Kabir', 'amira@yahoo.com', 'SHA1 (a)', 'Paypal'),
(13, '', 'Hee', 'Hii', 'h@gmail.com', 'SHA1 (hee)', 'Paypal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `educators`
--
ALTER TABLE `educators`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`SN`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `SN` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `SN` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `educators`
--
ALTER TABLE `educators`
  MODIFY `SN` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `SN` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;