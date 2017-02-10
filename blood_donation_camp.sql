-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 01:18 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation_camp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'bdcadmin2017', 'eb7b516515a76b9fbc653095637fdc50'),
(2, 'bdc2017', '347bfe5cda7d31687d37a5263f1b0658');

-- --------------------------------------------------------

--
-- Table structure for table `doner_slot`
--

CREATE TABLE `doner_slot` (
  `alloted_id` int(11) NOT NULL,
  `student_no` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `from_time` varchar(20) NOT NULL,
  `to_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner_slot`
--

INSERT INTO `doner_slot` (`alloted_id`, `student_no`, `slot`, `from_time`, `to_time`) VALUES
(1, 1513, 1, '8:0', '9:0'),
(2, 1513, 1, '8:0', '9:0'),
(3, 1513, 1, '8:0', '9:0'),
(4, 1513, 1, '8:0', '9:0'),
(5, 1513036, 2, '9:0', '10:0'),
(6, 1513036, 2, '9:0', '10:0'),
(7, 1513036, 2, '9:0', '10:0'),
(8, 1513036, 2, '9:0', '10:0'),
(9, 1513037, 3, '10:0', '11:0'),
(10, 1513037, 3, '10:0', '11:0'),
(11, 1513037, 3, '10:0', '11:0'),
(12, 1513037, 3, '10:0', '11:0'),
(13, 1513038, 4, '11:0', '12:0'),
(14, 1513038, 4, '11:0', '12:0'),
(15, 1513038, 4, '11:0', '12:0'),
(16, 1513038, 4, '11:0', '12:0'),
(17, 15123215, 5, '12:0', '13:0'),
(18, 15123215, 5, '12:0', '13:0'),
(19, 15123215, 5, '12:0', '13:0'),
(20, 15123215, 5, '12:0', '13:0');

-- --------------------------------------------------------

--
-- Table structure for table `registration_data`
--

CREATE TABLE `registration_data` (
  `student_no` varchar(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact_no` bigint(15) NOT NULL,
  `hosteller` int(11) NOT NULL,
  `now` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_data`
--

INSERT INTO `registration_data` (`student_no`, `name`, `gender`, `year`, `blood_group`, `email`, `contact_no`, `hosteller`, `now`) VALUES
('0', '', '', 0, '', '', 0, 0, '2017-02-04 10:24:11'),
('15123215', 'lkk', 'male', 1, 'A+', 'imtemptedguy@gmail.com', 2147483647, 1, '2017-02-06 07:11:16'),
('1513', 'SaurabhVerma', 'male', 1, 'A+', 'imtemptedguy@gmail.com', 1234567890, 1, '2017-02-04 06:04:35'),
('1513036', 'SaurabhVerma', 'male', 1, 'A+', 'imtemptedguy@gmail.com', 2147483647, 1, '2017-02-04 12:48:05'),
('1513037', 'SaurabhVerma', 'Male', 2, 'AB+', 'imtemptedguy@gmail.com', 1234567890, 1, '2017-02-03 14:17:59'),
('1513038', 'Saurabh ', 'male', 1, 'A+', 'Imtemptedguy@gmail.com', 2147483647, 1, '2017-02-04 07:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `slot_info`
--

CREATE TABLE `slot_info` (
  `id` int(11) NOT NULL,
  `no_of_slots` int(11) NOT NULL,
  `no_of_beds` int(11) NOT NULL,
  `from_time` int(11) NOT NULL,
  `to_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot_info`
--

INSERT INTO `slot_info` (`id`, `no_of_slots`, `no_of_beds`, `from_time`, `to_time`) VALUES
(5, 4, 4, 8, 12);

-- --------------------------------------------------------

--
-- Table structure for table `sorted_data`
--

CREATE TABLE `sorted_data` (
  `sort_id` int(11) NOT NULL,
  `student_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sorted_data`
--

INSERT INTO `sorted_data` (`sort_id`, `student_no`) VALUES
(2, 1513),
(7, 1513),
(12, 1513),
(17, 1513),
(4, 1513036),
(9, 1513036),
(14, 1513036),
(19, 1513036),
(1, 1513037),
(6, 1513037),
(11, 1513037),
(16, 1513037),
(3, 1513038),
(8, 1513038),
(13, 1513038),
(18, 1513038),
(5, 15123215),
(10, 15123215),
(15, 15123215),
(20, 15123215);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doner_slot`
--
ALTER TABLE `doner_slot`
  ADD PRIMARY KEY (`alloted_id`),
  ADD KEY `student_no` (`student_no`);

--
-- Indexes for table `registration_data`
--
ALTER TABLE `registration_data`
  ADD PRIMARY KEY (`student_no`);

--
-- Indexes for table `slot_info`
--
ALTER TABLE `slot_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sorted_data`
--
ALTER TABLE `sorted_data`
  ADD PRIMARY KEY (`sort_id`),
  ADD KEY `student_no` (`student_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doner_slot`
--
ALTER TABLE `doner_slot`
  MODIFY `alloted_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `slot_info`
--
ALTER TABLE `slot_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sorted_data`
--
ALTER TABLE `sorted_data`
  MODIFY `sort_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
