-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 03:55 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hakathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `Image2` varchar(20000) NOT NULL,
  `Latitude` double NOT NULL,
  `Longitude` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `hour` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `providor`
--

CREATE TABLE `providor` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ID` int(11) NOT NULL,
  `personalPicture` varbinary(20000) NOT NULL,
  `IDscan` varbinary(20000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `providor`
--

INSERT INTO `providor` (`name`, `email`, `mobile`, `password`, `ID`, `personalPicture`, `IDscan`) VALUES
('sss', 'k.kemo@hotmail.com', 5555, '2141', 101010, 0x32, ''),
('1234', '1234', 1234, '1234', 1234, 0x66617669636f6e2e69636f, 0x66617669636f6e2e69636f);

-- --------------------------------------------------------

--
-- Table structure for table `recuest`
--

CREATE TABLE `recuest` (
  `ID` int(11) NOT NULL,
  `Image2` varbinary(200) NOT NULL,
  `price` int(11) NOT NULL,
  `Minutes` int(11) NOT NULL,
  `accepted` tinyint(1) NOT NULL,
  `Latitude` double NOT NULL,
  `Longitude` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`hour`,`price`);

--
-- Indexes for table `providor`
--
ALTER TABLE `providor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recuest`
--
ALTER TABLE `recuest`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Image2` (`Image2`),
  ADD KEY `price` (`price`),
  ADD KEY `houre` (`Minutes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recuest`
--
ALTER TABLE `recuest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
