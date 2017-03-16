-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2015 at 03:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `ID` varchar(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `EXP` varchar(255) NOT NULL,
  `SPECIAL` varchar(255) NOT NULL,
  `RATING` int(10) NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `SEARCH` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`ID`, `NAME`, `EXP`, `SPECIAL`, `RATING`, `IMAGE`, `SEARCH`) VALUES
('100', 'Kohli', '5 Years', 'Batting Techniques', 78, 'pou.jpg', '100 Kohli 78 Batting Techniques 5 Years');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ACCESS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`EMAIL`, `PASSWORD`, `ACCESS`) VALUES
('admin@gmail.com', 'admin', 'YES'),
('Kohli', 'qwerty', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `ID` varchar(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `HEIGHT` varchar(255) NOT NULL,
  `WEIGHT` varchar(255) NOT NULL,
  `CATEGORY` varchar(255) NOT NULL,
  `RATING` int(10) NOT NULL,
  `AGE` varchar(255) NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `SEARCH` varchar(2000) NOT NULL,
  `COACH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`ID`, `NAME`, `HEIGHT`, `WEIGHT`, `CATEGORY`, `RATING`, `AGE`, `IMAGE`, `SEARCH`, `COACH`) VALUES
('101', 'SHAMI', '4.9"', '170 lbs', 'bowl', 85, '29', 'ghjnmb.jpg', '101 SHAMI 85 bowl 29', '100'),
('102', 'RAHANE', '4.68"', '190 lbs', 'bat', 96, '20', 'ghj.jpg', '102 RAHANE 96 bat 20', '100'),
('222', 'Dhoni', '5"', '170 lbs', 'bat', 90, '22', 'prof_1.jpg', '222 Dhoni 90 bat 22', '100');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `EMAIL` varchar(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `CONTACT` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`EMAIL`, `NAME`, `CONTACT`, `ADDRESS`) VALUES
('admin@gmail.com', 'ADMIN', '8904330374', 'Bangalore'),
('Kohli', 'Kohli', 'test_value', 'test_value');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`EMAIL`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`EMAIL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
