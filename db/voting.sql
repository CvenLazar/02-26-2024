-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 06:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'cven@gmail.com', 'adrian'),
(3, 'justin@gmail.com', 'justine');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `CandId` int(11) NOT NULL,
  `DeptId` int(11) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Contact` bigint(20) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `Platform` varchar(100) DEFAULT NULL,
  `Achievements` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`CandId`, `DeptId`, `Lname`, `Fname`, `Gender`, `email`, `Contact`, `Position`, `Platform`, `Achievements`) VALUES
(4, 1, 'Balingasa', 'Justine', NULL, 'mayank@gmail.com', NULL, 'President', NULL, NULL),
(5, 1, 'Nido', 'Nathaniel', NULL, 'prakashverma@gmail.com', NULL, 'Vice-President', NULL, NULL),
(6, 1, 'Lazar', 'Adrian', NULL, 'cvenlazar@gmail.com', 9123456789, 'Secretary', 'To be The Best', NULL),
(9, 2, 'Formalejo', 'Patrick Adrian', NULL, 'Patrick@gmail.com', 9876543211, 'President', 'Protect The Student', NULL),
(15, 2, 'Dela Cruz', 'Billy John', NULL, 'Billy@gmail.com', 9656372476, 'Secretary', 'No', NULL),
(14, 2, 'Sanchez', 'Vernard Joshua', NULL, 'Vj@gmail.com', 9764753254, 'Vice-President', 'Yes', NULL),
(21, 3, 'Tahum', 'Rolando', NULL, 'Jr@gmail.com', 9663254132, 'President', 'TAHUUUUUUUUUUUM', NULL),
(22, 3, 'Mendoza', 'Jhelian', 'Female', 'jhelian@gmail.com', 9743264523, 'President', 'To Keep The Pamantasan Clean', NULL),
(23, 2, 'Muntinlupa', 'Tunasan', 'Female', 'TM@gmail.com', 9456216345, 'Vice-President', 'PLMUN', NULL),
(28, 1, 'Lazar', 'Justine', 'Male', 'Lj@gmail.com', 9453412543, 'President', 'HEHEHEHEHEHE', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseId` int(11) NOT NULL,
  `DeptId` int(11) DEFAULT NULL,
  `Course_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseId`, `DeptId`, `Course_Name`) VALUES
(11, 1, 'BSIT'),
(12, 1, 'BSCS'),
(13, 1, 'ACT'),
(14, 2, 'BAPolSci'),
(15, 2, 'BAComm'),
(16, 2, 'BSPsy'),
(17, 3, 'BSCrim');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DeptId` int(11) NOT NULL,
  `Dept_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DeptId`, `Dept_name`) VALUES
(1, 'CITCS'),
(2, 'CAS'),
(3, 'CCJ');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentNo` int(11) NOT NULL,
  `CourseId` int(11) DEFAULT NULL,
  `DeptId` int(11) DEFAULT NULL,
  `Lname` varchar(30) DEFAULT NULL,
  `Fname` varchar(30) DEFAULT NULL,
  `Mname` varchar(30) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Contact` bigint(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentNo`, `CourseId`, `DeptId`, `Lname`, `Fname`, `Mname`, `Birthday`, `Contact`, `Email`) VALUES
(21138352, 17, 3, 'Nido', 'Nathaniel', 'Pascual', '2002-09-23', 9656453264, 'NN@gmail.com'),
(21138353, 11, 1, 'Balingasa', 'Justine', 'Villaluna', '2001-03-13', 9676673412, 'JB@gmail.com'),
(21138354, 16, 2, 'Lazar', ' Adrian Cven', 'Aguilar', '2000-04-13', 9467354672, 'cvenlazar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `VotingId` int(11) NOT NULL,
  `StudentNo` int(11) DEFAULT NULL,
  `Deptid` int(11) DEFAULT NULL,
  `Candidate` varchar(50) DEFAULT NULL,
  `Totalvotes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`CandId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseId`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DeptId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentNo`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`VotingId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `CandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DeptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `StudentNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21138355;

--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `VotingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
