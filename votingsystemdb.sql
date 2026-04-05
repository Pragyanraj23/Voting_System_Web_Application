-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2026 at 12:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE `admindata` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`id`, `username`, `mobile`, `password`) VALUES
(1, 'pragyan', '0987654321', 'pragyan123');

-- --------------------------------------------------------

--
-- Table structure for table `groupdata`
--

CREATE TABLE `groupdata` (
  `gid` int(11) NOT NULL,
  `gusername` varchar(200) NOT NULL,
  `gmobile` varchar(10) NOT NULL,
  `gpassword` varchar(100) NOT NULL,
  `gphoto` varchar(200) NOT NULL,
  `govid` varchar(20) NOT NULL,
  `gstandard` enum('group','other') NOT NULL,
  `votes` int(11) NOT NULL,
  `gstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groupdata`
--

INSERT INTO `groupdata` (`gid`, `gusername`, `gmobile`, `gpassword`, `gphoto`, `govid`, `gstandard`, `votes`, `gstatus`) VALUES
(1, 'AA', '1111111111', '11', 'ch3.png', 'a1', 'group', 1, 1),
(2, 'BB', '2222222222', '22', 'ch5.png', 'b2', 'group', 1, 1),
(3, 'CC', '3333333333', '33', 'logo1.png', 'c3', 'group', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifydb`
--

CREATE TABLE `notifydb` (
  `id` int(11) NOT NULL,
  `information` varchar(500) NOT NULL,
  `notifyid` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `voterid` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `standard` enum('Voter','other') NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `mobile`, `password`, `voterid`, `photo`, `gender`, `standard`, `status`) VALUES
(1, 'Abhi', '1111111111', '11', 'a1', 'm1.jpeg', 'male', 'Voter', 0),
(2, 'Bob', '2222222222', '22', 'b2', 'm3.jpg', 'male', 'Voter', 1),
(3, 'Cyla', '3333333333', '33', 'c3', 'w1.jpeg', 'female', 'Voter', 0),
(4, 'David', '4444444444', '44', 'd4', 'm4.jpg', 'male', 'Voter', 0),
(5, 'Eve', '5555555555', '55', 'e5', 'w2.jpg', 'female', 'Voter', 0),
(6, 'Finn', '6666666666', '66', 'f6', 'm2.jpg', 'male', 'Voter', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindata`
--
ALTER TABLE `admindata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupdata`
--
ALTER TABLE `groupdata`
  ADD PRIMARY KEY (`gid`),
  ADD UNIQUE KEY `govid` (`govid`);

--
-- Indexes for table `notifydb`
--
ALTER TABLE `notifydb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindata`
--
ALTER TABLE `admindata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groupdata`
--
ALTER TABLE `groupdata`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifydb`
--
ALTER TABLE `notifydb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
