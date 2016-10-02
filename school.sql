-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2016 at 08:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(5) NOT NULL,
  `Teacher` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `Username` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `Date` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `Start` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `End` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL,
  `Location` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `Student` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `Teacher`, `Username`, `Date`, `Start`, `End`, `Location`, `Student`) VALUES
(5, '', '', '', '09:00:00', '00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `ID` int(5) NOT NULL,
  `Username` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `Teacher` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Message` varchar(200) COLLATE utf8_unicode_520_ci NOT NULL,
  `Student` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logged`
--

CREATE TABLE `logged` (
  `ID` int(5) NOT NULL,
  `Username` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'N/A',
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL DEFAULT 'Not Yet Configured or not yet Logged In'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(5) NOT NULL,
  `Username` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `Type` varchar(15) COLLATE utf8_unicode_520_ci NOT NULL,
  `First Name` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `Last Name` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Type`, `First Name`, `Last Name`, `Email`) VALUES
(5, 'omni', '123', 'Teacher', '', '', ''),
(6, 'student', '123', 'Student', '', '', ''),
(7, 'omnimark', 'Mac12345', 'Student', 'Mark Anthony', 'Nipal', 'omnimarkbanzai@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logged`
--
ALTER TABLE `logged`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logged`
--
ALTER TABLE `logged`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
