-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 10:04 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddoc`
--

CREATE TABLE `adddoc` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE latin1_general_cs NOT NULL,
  `city` varchar(40) COLLATE latin1_general_cs NOT NULL,
  `state` varchar(40) COLLATE latin1_general_cs NOT NULL,
  `spec` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `con` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `adddoc`
--

INSERT INTO `adddoc` (`id`, `name`, `city`, `state`, `spec`, `con`) VALUES
(1, 'amit', 'anagar', 'maharashtra', 'MD', 12345678),
(2, 'abc', 'anagar', '', '', 0),
(10, 'amit', 'anagar', 'delhi', 'MD', 0),
(11, 'savant pattil', 'badalapur', 'kerala', 'mbbs', 2147483647),
(12, 'tani agarwal', 'pune', 'maharashtra', 'MD', 1233554),
(13, 'tani agarwal sing', 'pimpri', 'maharashtra', 'MD', 1233554),
(21, '', '', '', '', 0),
(22, '', '', '', '', 0),
(23, '', '', '', '', 0),
(24, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `UserName` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `Password` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`UserName`, `Password`) VALUES
('gauatri', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `lastname` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `gender` varchar(5) COLLATE latin1_general_cs NOT NULL,
  `email` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `password` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `date1` date NOT NULL,
  `time1` int(11) NOT NULL,
  `docname` varchar(50) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `firstname`, `lastname`, `gender`, `email`, `password`, `date1`, `time1`, `docname`) VALUES
(1, 'sonam', 'patil', 'male', 'adfd@gmail.com', '4665', '2021-05-11', 2, 'pattil'),
(2, 'gayatri', 'patil', 'f', 'sonalp@gmail.com', '', '2021-05-05', 0, 'savant pattil'),
(3, 'simaran', 'patil', 'f', 'simmi@gmail.com', '23654', '2021-05-06', 22, 'tani agarwal'),
(4, 'amit', 'poul', 'm', 'amitpol@gmail.com', '46545', '2021-05-08', 1, 'tani agarwal'),
(5, 'abhi', '', 'm', 'abhil@gmail.com', '', '2021-05-08', 1, 'tani agarwal'),
(6, 'kumar', 'mehta', 'm', 'kmtw566@gmail.com', '5655', '2021-05-08', 1, 'tani agarwal'),
(7, 'kumar', 'mehta', 'm', 'kmtw566@gmail.com', '', '2021-05-08', 1, 'tani agarwal'),
(8, 'suresh', 'mehta', 'm', 'dineshadgarw566@gmai', '241', '2021-05-09', 4, 'savant pattil');

-- --------------------------------------------------------

--
-- Table structure for table `learning`
--

CREATE TABLE `learning` (
  `admin_name` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `admin_password` varchar(100) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddoc`
--
ALTER TABLE `adddoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adddoc`
--
ALTER TABLE `adddoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
