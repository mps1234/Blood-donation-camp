-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2017 at 07:30 PM
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
-- Table structure for table `registration_data`
--

CREATE TABLE `registration_data` (
  `student_no` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `hosteller` int(11) NOT NULL,
  `now` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_data`
--

INSERT INTO `registration_data` (`student_no`, `name`, `gender`, `year`, `blood_group`, `email`, `contact_no`, `hosteller`, `now`) VALUES
(0, '', '', 0, '', '', 0, 0, '2017-02-04 10:24:11'),
(1513, 'SaurabhVerma', 'male', 1, 'A+', 'imtemptedguy@gmail.com', 1234567890, 1, '2017-02-04 06:04:35'),
(1513036, 'SaurabhVerma', 'male', 1, 'A+', 'imtemptedguy@gmail.com', 2147483647, 1, '2017-02-04 12:48:05'),
(1513037, 'SaurabhVerma', 'Male', 2, 'AB+', 'imtemptedguy@gmail.com', 1234567890, 1, '2017-02-03 14:17:59'),
(1513038, 'Saurabh ', 'male', 1, 'A+', 'Imtemptedguy@gmail.com', 2147483647, 1, '2017-02-04 07:28:48');

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
(4, 1513036),
(1, 1513037),
(3, 1513038);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_data`
--
ALTER TABLE `registration_data`
  ADD PRIMARY KEY (`student_no`);

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
-- AUTO_INCREMENT for table `sorted_data`
--
ALTER TABLE `sorted_data`
  MODIFY `sort_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
