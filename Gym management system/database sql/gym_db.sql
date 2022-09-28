-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 08:29 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin Kumar', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `memberlogin_tb`
--

CREATE TABLE `memberlogin_tb` (
  `m_login_id` int(11) NOT NULL,
  `m_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `m_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `m_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `memberlogin_tb`
--

INSERT INTO `memberlogin_tb` (`m_login_id`, `m_name`, `m_email`, `m_password`) VALUES
(9, '  Rajesh', 'raj@gmail.com', 'user'),
(10, '  User', 'user@gmail.com', 'user'),
(11, 'Jay', 'jay@gmail.com', 'jay123'),
(12, 'emmanuel', 'emmanuel@gmail.com', 'DDDDD'),
(13, 'ken', 'ken@gmail.com', 'ken'),
(14, 'riley', 'riley@gmail.com', '1234'),
(15, 'alex', 'alex@gmail.com', 'alex'),
(16, 'Ren', 'ren@gmail.com', 'ren');

-- --------------------------------------------------------

--
-- Table structure for table `submitbookingt_tb`
--

CREATE TABLE `submitbookingt_tb` (
  `Booking_id` int(11) NOT NULL,
  `member_name` varchar(90) DEFAULT NULL,
  `member_email` varchar(90) DEFAULT NULL,
  `booking_type` varchar(90) DEFAULT NULL,
  `member_mobile` varchar(90) DEFAULT NULL,
  `member_add1` varchar(90) DEFAULT NULL,
  `member_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitbookingt_tb`
--

INSERT INTO `submitbookingt_tb` (`Booking_id`, `member_name`, `member_email`, `booking_type`, `member_mobile`, `member_add1`, `member_date`) VALUES
(1, 'Emmanel matewere', 'emzo@gmailcom', 'limbe', '0989765646352', 'yoga', '2021-06-25'),
(2, 'ken banda', 'ken@gmail.com', 'limbe', '0994167723', 'yoga', '2021-06-10'),
(3, 'user', 'user@gmail.com', 'limbe', '0994167723', 'yoga', '2021-06-10'),
(4, 'alex', 'alex@gmail.com', 'blantyre', '0994167723', 'eeeeeeeeee', '2021-06-04'),
(5, 'Emmanel matewere', 'emzo@gmailcom', 'limbe', '0989765646352', 'Endurance Training', '2021-07-22'),
(6, 'Emmanel matewere', 'user@gmail.com', 'limbe', '0994167723', 'Cardio class', '2021-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(17, 'jiji', '2021-07-07 00:00:00', '2021-07-08 00:00:00'),
(14, 'kjjjjjjjjjjjjjj', '2021-07-03 00:00:00', '2021-07-04 00:00:00'),
(15, 'kllllllllllllllllllllll', '2021-07-02 00:00:00', '2021-07-03 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memberlogin_tb`
--
ALTER TABLE `memberlogin_tb`
  ADD PRIMARY KEY (`m_login_id`);

--
-- Indexes for table `submitbookingt_tb`
--
ALTER TABLE `submitbookingt_tb`
  ADD PRIMARY KEY (`Booking_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memberlogin_tb`
--
ALTER TABLE `memberlogin_tb`
  MODIFY `m_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `submitbookingt_tb`
--
ALTER TABLE `submitbookingt_tb`
  MODIFY `Booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
