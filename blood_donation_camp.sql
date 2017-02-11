-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2017 at 11:26 AM
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
  `registration_id` int(11) NOT NULL,
  `student_no` varchar(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `hosteller` int(11) NOT NULL,
  `now` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_data`
--

INSERT INTO `registration_data` (`registration_id`, `student_no`, `name`, `gender`, `year`, `blood_group`, `email`, `contact_no`, `hosteller`, `now`) VALUES
(2, '1513037', 'saubh', 'male', 1, 'ab+', 'imtemptedguy@gmail.com', 9956291219, 0, '2017-02-11 10:16:43'),
(3, '1513038', 'cwefrfr', 'female', 1, 'b', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(4, '1513039', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(5, '1513010', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(6, '1513011', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(7, '1513012', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(8, '1513013', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(9, '1513014', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(10, '1513015', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(11, '1513016', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(12, '1513017', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(13, '1513018', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(14, '1513019', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(15, '1513020', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(16, '1513022', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(17, '1513023', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(18, '1513024', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(19, '1513025', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(20, '1513026', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(21, '1513027', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(22, '1513028', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(23, '1513029', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(24, '1513030', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(25, '1513031', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(26, '1513032', '', 'male', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(27, '1513033', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 1, '2017-02-11 10:16:43'),
(28, '1513034', '', 'female', 0, '', 'imtemptedguy@gmail..com', 9956291219, 0, '2017-02-11 10:16:43'),
(29, '1513035', '', 'female', 0, '', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-11 10:16:43'),
(30, '1513036', '', 'female', 0, '', 'imtemptedguy@gmail.com', 9956291219, 0, '2017-02-11 10:16:43'),
(31, '1513046', '', 'male', 0, '', 'imtemptedguy@gmail.com', 9956291219, 0, '2017-02-11 10:16:43');

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
(16, 1513010),
(9, 1513011),
(2, 1513012),
(10, 1513013),
(17, 1513014),
(18, 1513015),
(24, 1513016),
(19, 1513017),
(20, 1513018),
(25, 1513019),
(26, 1513020),
(3, 1513022),
(4, 1513023),
(11, 1513024),
(5, 1513025),
(12, 1513026),
(6, 1513027),
(27, 1513028),
(21, 1513029),
(28, 1513030),
(29, 1513031),
(30, 1513032),
(13, 1513033),
(7, 1513034),
(14, 1513035),
(8, 1513036),
(15, 1513037),
(1, 1513038),
(23, 1513039),
(22, 1513046);

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
  ADD PRIMARY KEY (`registration_id`);

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
-- AUTO_INCREMENT for table `registration_data`
--
ALTER TABLE `registration_data`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `slot_info`
--
ALTER TABLE `slot_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sorted_data`
--
ALTER TABLE `sorted_data`
  MODIFY `sort_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
