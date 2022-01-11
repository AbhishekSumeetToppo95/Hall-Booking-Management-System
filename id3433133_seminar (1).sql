-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 07:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3433133_seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_hall`
--

CREATE TABLE `booked_hall` (
  `hall_name` varchar(100) NOT NULL,
  `booking_id` int(200) NOT NULL,
  `user_gmail` varchar(100) NOT NULL,
  `check_in_date` date NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `slot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_hall`
--

INSERT INTO `booked_hall` (`hall_name`, `booking_id`, `user_gmail`, `check_in_date`, `purpose`, `slot`) VALUES
('CSED SEMINAR HALL', 26, 'sumeettoppo95@gmail.com', '2018-05-15', 'seminar', '8'),
('CSED SEMINAR HALL', 27, 'sumeettoppo95@gmail.com', '2018-05-15', 'presentation', '11'),
('CSED SEMINAR HALL', 39, 'sumeettoppo95@gmail.com', '2018-05-26', 'presentation', '8'),
('CSED SEMINAR HALL', 40, 'sumeettoppo95@gmail.com', '2018-05-29', 'presentation', '11');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `name`) VALUES
('Fid1', 'Pournami P N Mam'),
('Fid10', 'Sudeep K S'),
('Fid11', 'Sumesh T A'),
('Fid12', 'Subhasree M'),
('Fid13', 'Subashini R'),
('Fid2', 'Jimmy Jose Sir'),
('Fid3', 'Abdul Nazeer K A Sir'),
('Fid4', 'Anu Mary Chacko Mam'),
('Fid5', 'Priya Chandran'),
('Fid6', 'Saidalavi Kalady'),
('Fid7', 'Sreenu Naik Bhukya'),
('Fid8', 'Vinod Pathari'),
('Fid9', 'Vineeth Paleri');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_gmail` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `user_name`, `user_gmail`, `subject`, `message`) VALUES
(1, 'abhishek', 'sumeettoppo95@gmail.com', 'sjfhsdfhsddufhwuf', 'wwgergthregh'),
(2, 'abhishek', 'sumeettoppo95@gmail.com', 'facilities', 'nice one '),
(3, 'abhishek', 'sumeettoppo95@gmail.com', 'ergerg', 'dfsdfsdfsfdgsfg');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_name` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `no_of_desk` varchar(800) NOT NULL,
  `projector` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_name`, `room_type`, `no_of_desk`, `projector`, `location`) VALUES
('APJ Hall', 'AC', '100', 'YES', 'Near CSED Office'),
('CSED SEMINAR HALL', 'AC', '20', 'YES', 'MAIN BUILDING');

-- --------------------------------------------------------

--
-- Table structure for table `hall_admin`
--

CREATE TABLE `hall_admin` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `gmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_admin`
--

INSERT INTO `hall_admin` (`name`, `password`, `phoneno`, `gmail`) VALUES
('ayush', 'ayush', '9162743419', 'ayush@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hall_user`
--

CREATE TABLE `hall_user` (
  `name` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_user`
--

INSERT INTO `hall_user` (`name`, `gmail`, `password`, `phone`, `type`, `department`) VALUES
('Diwakar', 'diwakar@gmail.com', 'diwakar', 7542138900, 'Student', 'CSED'),
('Vinod Pathari', 'pathari@nitc.ac.in', 'pathari', 9876541230, 'Faculty', 'CSED'),
('Pournami PN', 'pournami@gmail.com', 'pournami', 9876543210, 'Faculty', 'csed'),
('Shivam', 'shivam@gmail.com', 'shivam', 8745612309, 'Student', 'CSED'),
('ABHISHEK', 'sumeettoppo95@gmail.com', 'abhishek', 9162743419, 'student', 'CSED');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_no`, `name`) VALUES
('m150036ca', 'shivam'),
('m150037ca', 'lakshit'),
('m150038ca', 'abhishek'),
('m150039ca', 'diwakar'),
('m150040ca', 'saurav'),
('m150041ca', 'vaibhav'),
('m150042ca', 'jiwan'),
('m150043ca', 'sarvesh'),
('m150044ca', 'lavakush'),
('m150045ca', 'pankaj'),
('m150046ca', 'rahul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_hall`
--
ALTER TABLE `booked_hall`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_gmail` (`user_gmail`),
  ADD KEY `hall_name` (`hall_name`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `user_gmail` (`user_gmail`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_name`);

--
-- Indexes for table `hall_admin`
--
ALTER TABLE `hall_admin`
  ADD PRIMARY KEY (`gmail`);

--
-- Indexes for table `hall_user`
--
ALTER TABLE `hall_user`
  ADD PRIMARY KEY (`gmail`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_hall`
--
ALTER TABLE `booked_hall`
  MODIFY `booking_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_hall`
--
ALTER TABLE `booked_hall`
  ADD CONSTRAINT `booked_hall_ibfk_1` FOREIGN KEY (`hall_name`) REFERENCES `hall` (`hall_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booked_hall_ibfk_2` FOREIGN KEY (`user_gmail`) REFERENCES `hall_user` (`gmail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_gmail`) REFERENCES `hall_user` (`gmail`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
