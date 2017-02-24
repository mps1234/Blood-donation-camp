-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 09:39 AM
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
  `registration_id` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `from_time` varchar(20) NOT NULL,
  `to_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(126, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-16 19:37:07'),
(127, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:24:36'),
(128, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:29:18'),
(129, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:36:38'),
(130, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:37:35'),
(131, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:37:47'),
(132, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:39:06'),
(133, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:40:09'),
(134, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:41:18'),
(135, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:42:55'),
(136, '1513037', 'saubh', 'male', 1, 'O-', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:43:37'),
(137, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:43:47'),
(138, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:45:25'),
(139, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:46:16'),
(140, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:46:16'),
(141, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:49:04'),
(142, '1513037', 'saubh', 'male', 1, 'O-', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:49:40'),
(143, '1513037', 'saubh', 'male', 1, 'A ', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:51:40'),
(144, '1513037', 'saubh', 'male', 1, '"A "', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:53:25'),
(145, '1513037', 'saubh', 'male', 1, '"A "', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:55:14'),
(146, '1513037', 'saubh', 'male', 1, '"A "', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:57:39'),
(147, '1513037', 'saubh', 'male', 1, '"A "', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 12:58:59'),
(148, '1513037', 'saubh', 'male', 1, 'APositive', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 13:03:30'),
(149, '1513037', 'saubh', 'male', 1, 'Ap', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 13:17:39'),
(150, '1513037', 'saubh', 'male', 1, 'Ap', 'imtemptedguy@gmail.com', 9956291219, 1, '2017-02-18 13:38:29');

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

-- --------------------------------------------------------

--
-- Table structure for table `sorted_data`
--

CREATE TABLE `sorted_data` (
  `sort_id` int(11) NOT NULL,
  `registration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD KEY `student_no` (`registration_id`);

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
  ADD KEY `student_no` (`registration_id`);

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
  MODIFY `alloted_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration_data`
--
ALTER TABLE `registration_data`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `slot_info`
--
ALTER TABLE `slot_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sorted_data`
--
ALTER TABLE `sorted_data`
  MODIFY `sort_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
