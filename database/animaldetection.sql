-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 07:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animaldetection`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaintpost`
--

CREATE TABLE `complaintpost` (
  `cmpsid` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `addr` text NOT NULL,
  `kbhn` varchar(200) NOT NULL,
  `cntno` varchar(200) NOT NULL,
  `cdate` date NOT NULL,
  `pdate` date NOT NULL,
  `frstry` text NOT NULL,
  `panchayath` text NOT NULL,
  `cname` varchar(200) NOT NULL,
  `descp` text NOT NULL,
  `photo` text NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `kbhnreply` text NOT NULL,
  `kdate` date NOT NULL,
  `frestryreply` text NOT NULL,
  `fdate` date NOT NULL,
  `kst` varchar(200) NOT NULL,
  `fsat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintpost`
--

INSERT INTO `complaintpost` (`cmpsid`, `Log_Id`, `name`, `sex`, `age`, `aadharno`, `addr`, `kbhn`, `cntno`, `cdate`, `pdate`, `frstry`, `panchayath`, `cname`, `descp`, `photo`, `photo1`, `photo2`, `kbhnreply`, `kdate`, `frestryreply`, `fdate`, `kst`, `fsat`) VALUES
(1, 'LOG9027068206', 'Aljo', '', '', '', '', '456', '9446235562', '0012-04-01', '2022-03-31', 'DFO', '123', '2', '1223', '', '', '', '', '0000-00-00', '', '0000-00-00', 'Pending', 'Pending'),
(2, 'LOG9027068206', 'Aljo', '', '', '', '', '111', '9446235562', '2022-03-31', '2022-03-31', 'DFO', '333', '3333', '33333333', '', '', '', '', '0000-00-00', '', '0000-00-00', 'Pending', 'Pending'),
(3, 'LOG9027068206', 'Aljo', '', '', '', '', 'XHJM', '9446235562', '2022-04-24', '2022-04-02', 'DFO', 'KH./', 'DXX', 'CM,.', '', 'yuva logo.png', 'logo-1.png', '', '0000-00-00', '', '0000-00-00', 'Pending', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `fmessage`
--

CREATE TABLE `fmessage` (
  `fmsg_id` int(11) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `frstry` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cntno` varchar(200) NOT NULL,
  `date` text NOT NULL,
  `subj` varchar(200) NOT NULL,
  `descp` text NOT NULL,
  `reply` text NOT NULL,
  `rdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hmessage`
--

CREATE TABLE `hmessage` (
  `hmsg_id` int(11) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `hospt` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cntno` varchar(200) NOT NULL,
  `date` text NOT NULL,
  `subj` varchar(200) NOT NULL,
  `descp` text NOT NULL,
  `reply` text NOT NULL,
  `rdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kmessage`
--

CREATE TABLE `kmessage` (
  `kmsg_id` int(11) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `kbhn` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cntno` varchar(200) NOT NULL,
  `date` text NOT NULL,
  `subj` varchar(200) NOT NULL,
  `descp` text NOT NULL,
  `reply` text NOT NULL,
  `rdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notid` int(11) NOT NULL,
  `location` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` text NOT NULL,
  `timr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notid`, `location`, `name`, `date`, `timr`) VALUES
(578, 'Mundur', 'cat', '17-04-2022', '10:19:58.168476'),
(579, 'Mundur', 'cat', '17-04-2022', '10:19:58.251099'),
(580, 'Mundur', 'cat', '17-04-2022', '10:19:58.293680'),
(581, 'Mundur', 'bird', '17-04-2022', '10:19:58.330317'),
(582, 'Mundur', 'bird', '17-04-2022', '10:19:58.368326'),
(583, 'Mundur', 'cat', '17-04-2022', '10:19:59.756904'),
(584, 'Mundur', 'cat', '17-04-2022', '10:20:17.359535'),
(585, 'Mundur', 'cat', '17-04-2022', '10:20:17.454942'),
(586, 'Mundur', 'cat', '17-04-2022', '10:20:17.500951'),
(587, 'Mundur', 'cat', '17-04-2022', '10:20:17.539959'),
(588, 'Mundur', 'cat', '17-04-2022', '10:20:17.577154'),
(589, 'Mundur', 'cat', '17-04-2022', '10:20:17.613006'),
(590, 'Mundur', 'cat', '17-04-2022', '10:20:17.648014'),
(591, 'Mundur', 'cat', '17-04-2022', '10:20:17.682021'),
(592, 'Mundur', 'cat', '17-04-2022', '10:20:17.715750'),
(593, 'Mundur', 'cat', '17-04-2022', '10:20:17.757783'),
(594, 'Mundur', 'cat', '17-04-2022', '10:20:17.799861'),
(595, 'Mundur', 'cat', '17-04-2022', '10:20:17.828950'),
(596, 'Mundur', 'cat', '17-04-2022', '10:20:17.863138'),
(597, 'Mundur', 'cat', '17-04-2022', '10:20:17.893422'),
(598, 'Mundur', 'cat', '17-04-2022', '10:20:17.923005'),
(599, 'Mundur', 'cat', '17-04-2022', '10:20:17.954938'),
(600, 'Mundur', 'cat', '17-04-2022', '10:20:17.983689'),
(601, 'Mundur', 'cat', '17-04-2022', '10:20:18.020729'),
(602, 'Mundur', 'cat', '17-04-2022', '10:20:18.051321'),
(603, 'Mundur', 'cat', '17-04-2022', '10:20:18.084344'),
(604, 'Mundur', 'cat', '17-04-2022', '10:20:18.114496'),
(605, 'Mundur', 'cat', '17-04-2022', '10:20:18.144780'),
(606, 'Mundur', 'cat', '17-04-2022', '10:20:18.178722'),
(607, 'Mundur', 'cat', '17-04-2022', '10:20:18.209729'),
(608, 'Mundur', 'cat', '17-04-2022', '10:20:18.240613'),
(609, 'Mundur', 'cat', '17-04-2022', '10:20:18.270118'),
(610, 'Mundur', 'cat', '17-04-2022', '10:20:18.300158'),
(611, 'Mundur', 'cat', '17-04-2022', '10:20:18.330066'),
(612, 'Mundur', 'cat', '17-04-2022', '10:20:18.363985'),
(613, 'Mundur', 'cat', '17-04-2022', '10:20:18.402023'),
(614, 'Mundur', 'cat', '17-04-2022', '10:20:18.433037'),
(615, 'Mundur', 'cat', '17-04-2022', '10:20:18.462916'),
(616, 'Mundur', 'cat', '17-04-2022', '10:20:18.493931'),
(617, 'Mundur', 'cat', '17-04-2022', '10:20:18.523938'),
(618, 'Mundur', 'cat', '17-04-2022', '10:20:18.690907'),
(619, 'Mundur', 'cat', '17-04-2022', '10:20:18.775837');

-- --------------------------------------------------------

--
-- Table structure for table `poplecomplaintpost`
--

CREATE TABLE `poplecomplaintpost` (
  `cmpsid` int(11) NOT NULL,
  `Log_Id` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `aadharno` varchar(200) NOT NULL,
  `addr` text NOT NULL,
  `hospt` varchar(200) NOT NULL,
  `cntno` varchar(200) NOT NULL,
  `cdate` date NOT NULL,
  `pdate` date NOT NULL,
  `frstry` text NOT NULL,
  `panchayath` text NOT NULL,
  `cname` varchar(200) NOT NULL,
  `descp` text NOT NULL,
  `photo` text NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `kbhnreply` text NOT NULL,
  `kdate` date NOT NULL,
  `frestryreply` text NOT NULL,
  `fdate` date NOT NULL,
  `kst` varchar(200) NOT NULL,
  `fsat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poplecomplaintpost`
--

INSERT INTO `poplecomplaintpost` (`cmpsid`, `Log_Id`, `name`, `sex`, `age`, `aadharno`, `addr`, `hospt`, `cntno`, `cdate`, `pdate`, `frstry`, `panchayath`, `cname`, `descp`, `photo`, `photo1`, `photo2`, `kbhnreply`, `kdate`, `frestryreply`, `fdate`, `kst`, `fsat`) VALUES
(1, 'LOG9915227982', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', 'Pending', 'Pending'),
(2, 'LOG9915227982', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', 'Pending', 'Pending'),
(3, 'LOG9915227982', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', 'Pending', 'Pending'),
(4, 'LOG9915227982', 'raji', 'female', '12', 'wwwwwwwww', 'wwwwwwwwwwwwww', 'www', '9400467717', '2022-03-31', '2022-03-31', 'DFO', 'sssssss', '1', 'wertyuionm,./vbnm,.', '', '', '', '', '0000-00-00', '', '0000-00-00', 'Pending', 'Pending'),
(5, 'LOG9915227982', 'raji', 'female', '12', '753', 'qasdf', 'we', '9400467717', '2022-03-31', '2022-03-31', 'DFO', 'zxcv', '1', 'wertyuvbnm', '', 'IMG_4011.JPG', '', '', '0000-00-00', '', '2022-03-31', 'Pending', 'Accept'),
(6, 'LOG9915227982', 'raji', 'female', '12', '22', 'werth', 'wew', '9400467717', '2022-03-31', '2022-03-31', 'DFO', 'we', '12', 'wertyghbn', '', 'IMG_4011.CR2', '', '', '0000-00-00', '', '2022-03-31', 'Pending', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cntno` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `utype` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `sex` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `addr` text NOT NULL,
  `panchayath` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `oname` varchar(200) NOT NULL,
  `cntno1` varchar(200) NOT NULL,
  `wurl` text NOT NULL,
  `dob` date NOT NULL,
  `aadharno` text NOT NULL,
  `frstry` varchar(200) NOT NULL,
  `kbhn` varchar(200) NOT NULL,
  `hospt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Log_Id`, `name`, `cntno`, `location`, `email`, `password`, `utype`, `date`, `sex`, `age`, `addr`, `panchayath`, `descp`, `photo`, `oname`, `cntno1`, `wurl`, `dob`, `aadharno`, `frstry`, `kbhn`, `hospt`) VALUES
(7, 'LOG611481953003', 'DFO', '9847169014', 'PALAKKAD', 'dfo@gmail.com', 'dfo', 'Forestry', '2022-03-18', '', '', 'PALAKKAD,KERALA', '', 'HI', 'a.jpg', 'SHAMEER', '9847169014', 'https://www.google.com/', '0000-00-00', '', '', '', ''),
(12, 'LOG9027068206', 'Aljo', '9446235562', 'Mundur', 'aljothomas01@gmail.com', 'aljoATK@01', 'Farmer', '2022-03-31', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(13, 'LOG9915227982', 'raji', '9400467717', '333', 'raji.n@yuvakshetra.org', '2', 'People', '2022-03-31', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaintpost`
--
ALTER TABLE `complaintpost`
  ADD PRIMARY KEY (`cmpsid`);

--
-- Indexes for table `fmessage`
--
ALTER TABLE `fmessage`
  ADD PRIMARY KEY (`fmsg_id`);

--
-- Indexes for table `hmessage`
--
ALTER TABLE `hmessage`
  ADD PRIMARY KEY (`hmsg_id`);

--
-- Indexes for table `kmessage`
--
ALTER TABLE `kmessage`
  ADD PRIMARY KEY (`kmsg_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notid`);

--
-- Indexes for table `poplecomplaintpost`
--
ALTER TABLE `poplecomplaintpost`
  ADD PRIMARY KEY (`cmpsid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaintpost`
--
ALTER TABLE `complaintpost`
  MODIFY `cmpsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fmessage`
--
ALTER TABLE `fmessage`
  MODIFY `fmsg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hmessage`
--
ALTER TABLE `hmessage`
  MODIFY `hmsg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kmessage`
--
ALTER TABLE `kmessage`
  MODIFY `kmsg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=620;

--
-- AUTO_INCREMENT for table `poplecomplaintpost`
--
ALTER TABLE `poplecomplaintpost`
  MODIFY `cmpsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
