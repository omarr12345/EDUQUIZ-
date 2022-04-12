-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 11:54 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gp`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ID` int(255) NOT NULL,
  `answer1` varchar(1000) NOT NULL,
  `answer2` varchar(1000) NOT NULL,
  `answer3` varchar(1000) NOT NULL,
  `answer4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ID`, `answer1`, `answer2`, `answer3`, `answer4`) VALUES
(1, 'omar', 'islam', 'sara', 'neveen'),
(2, 'a', 'b', 'c', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer 1` varchar(1000) NOT NULL,
  `answer 2` varchar(1000) NOT NULL,
  `answer 3` varchar(10000) NOT NULL,
  `answer 4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `examiner`
--

CREATE TABLE `examiner` (
  `Name` varchar(24) DEFAULT NULL,
  `ID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `ID` int(100) NOT NULL,
  `question` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ID`, `question`) VALUES
(1, 'ahmed?'),
(2, 'x?');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(255) NOT NULL,
  `Name` text NOT NULL,
  `Password` varchar(255) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Name`, `Password`, `email`, `gender`) VALUES
(1, '0', '0', '0', ''),
(2, '0', '2222222', '0', ''),
(3, '0', '0', '0', ''),
(4, 'hdddhbdhb', '12344', 'bdbdbdbd@yahoo.com', ''),
(5, 'omarrr', 'nguzuu', 'omared@yaho.com', ''),
(6, 'annaaa', 'annaaa', '0mmem@yaho.com', ''),
(7, 'omar12', 'omar12', 'omar_12@yahoo.com', ''),
(8, 'omar', 'omar', 'omar12@yahoo.com', 'admin'),
(9, 'sarah', 'sarah', 'sara11@yahoo.com', 'student'),
(10, 'loay', 'loay', 'loay251@yahoo.com', ''),
(11, 'maryem', 'maryem', 'maryem@yahoo.com', 'student'),
(12, 'loay', 'loay', 'lay@251yahoo.com', 'admin'),
(13, 'neveen', 'neveen', 'neven12@yahoo.com', 'admin'),
(14, 'omar', 'omar', 'omarr_mostafa@yahoo.com', 'admin'),
(15, 'islam', 'islam', 'omar12345omar15@gmail.com', 'admin'),
(16, 'omar', 'omar', 'o@yahoo.com', 'admin'),
(17, 'ahmed ', 'ahmed', 'ahmed@yahoo.com', 'admin'),
(18, 'me', 'omar', 'omar@wayynne', 'admin'),
(19, 'anaa', 'anaenta', 'anaaa@yahoo', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
