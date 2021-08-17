-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 11:00 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `Adminname` varchar(50) NOT NULL,
  `Adminpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_ID` int(20) NOT NULL,
  `Name` text NOT NULL,
  `ContactNumber` int(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `Name`, `ContactNumber`, `Address`, `Email`, `Password`, `Category`) VALUES
(1, 'Elizabeth Jones', 712345678, 'Nairobi', 'elizabethjones@gmail', '1234567890', 'Oncologist'),
(2, 'Name', 0, 'Address', 'Email', 'Password', 'Category'),
(3, 'Name', 0, 'Address', 'Email', 'Password', 'Category');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_ID` int(20) NOT NULL,
  `Patient_ID` int(20) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Patient_ID` int(20) NOT NULL,
  `Name` text NOT NULL,
  `ContactNumber` int(20) NOT NULL,
  `Address` text NOT NULL,
  `Email` text NOT NULL,
  `Password` blob NOT NULL,
  `Bloodtype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`Patient_ID`, `Name`, `ContactNumber`, `Address`, `Email`, `Password`, `Bloodtype`) VALUES
(1, 'Lisa Daniels', 712345689, 'Nairobi', 'lisadaniels@gmail.com', '', 'O-'),
(2, 'Name', 0, 'Address', 'Email', 0x50617373776f7264, 'Bloodtype'),
(3, 'Name', 0, 'Address', 'Email', 0x50617373776f7264, 'Bloodtype'),
(4, '', 0, '', '', '', ''),
(5, '', 0, '', '', '', ''),
(6, 'Name', 0, 'Address', 'Email', 0x50617373776f7264, 'Bloodtype'),
(7, 'Name', 0, 'Address', 'Email', 0x50617373776f7264, 'Bloodtype'),
(8, 'Name', 0, 'Address', 'Email', 0x50617373776f7264, 'Bloodtype'),
(9, 'Name', 0, 'Address', 'Email', 0x50617373776f7264, 'Bloodtype');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `Treatment_ID` int(20) NOT NULL,
  `Doctor_ID` int(20) NOT NULL,
  `Patient_ID` int(20) NOT NULL,
  `PatientName` text NOT NULL,
  `Treatment` varchar(50) NOT NULL,
  `DoctorNote` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`Treatment_ID`, `Doctor_ID`, `Patient_ID`, `PatientName`, `Treatment`, `DoctorNote`) VALUES
(1, 0, 1, 'Lisa Daniels', 'Cancer Treatment', 'Chemo Therapy is working'),
(2, 0, 1, 'Lisa Daniels', 'Cancer Treatment', 'Chemo Therapy is working'),
(3, 0, 1, 'Lisa Daniels', 'Cancer Treatment', 'Chemo Therapy is working');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_ID`),
  ADD KEY `feedback_ibfk_1` (`Patient_ID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`Treatment_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Patient_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `Treatment_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `patients` (`Patient_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
