-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 06:12 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_name` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `final_appointment`
--

CREATE TABLE IF NOT EXISTS `final_appointment` (
  `name` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_appointment`
--

INSERT INTO `final_appointment` (`name`, `mobile`, `mail`, `date`, `time`, `reason`) VALUES
('Indira', '9835274732', 'indira@gmail.com', '19/05/2017', '09:00 pm', 'cold'),
('Manimaran', '9600789681', 'mani@gmail.com', '18/05/2017', '10:00 pm', 'fever');

-- --------------------------------------------------------

--
-- Table structure for table `fix_appointment`
--

CREATE TABLE IF NOT EXISTS `fix_appointment` (
  `name` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fix_appointment`
--

INSERT INTO `fix_appointment` (`name`, `mobile`, `email`, `date`) VALUES
('Manimaran', '9600789681', 'manimaraninam1027@gmail.com', '07/05/2017'),
('Indira', '9835274732', 'indira@gmail.com', '24/05/2017');

-- --------------------------------------------------------

--
-- Table structure for table `hitcount`
--

CREATE TABLE IF NOT EXISTS `hitcount` (
  `ip` varchar(30) NOT NULL,
  `count` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitcount`
--

INSERT INTO `hitcount` (`ip`, `count`) VALUES
('::1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `user_pass`, `user_email`) VALUES
('Indira', 'indira1234', 'indira@gmail.com'),
('Manimaran', 'mani1234', 'manimaraninam1027@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
