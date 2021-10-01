-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 09:33 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tybca187`
--

-- --------------------------------------------------------

--
-- Table structure for table `stest`
--

CREATE TABLE IF NOT EXISTS `stest` (
  `sno` varchar(3) NOT NULL,
  `sname` varchar(10) NOT NULL,
  `sadd` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stest`
--

INSERT INTO `stest` (`sno`, `sname`, `sadd`, `mob`) VALUES
('3', 'janki', 'row house           ', '9999999999'),
('4', 'premal', 'utran ', '2321323888'),
('5', 'fdfd', 'amalsad', '432432'),
('6', 'dfsdf', 'dfesf', '3234234'),
('8', 'rfgrjanak', 'PREM COLONY SAYAN OLPAD, SAYAN', '8128215355');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stest`
--
ALTER TABLE `stest`
  ADD PRIMARY KEY (`sno`), ADD UNIQUE KEY `sno` (`sno`), ADD UNIQUE KEY `sno_2` (`sno`), ADD KEY `sno_3` (`sno`), ADD KEY `sno_4` (`sno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
