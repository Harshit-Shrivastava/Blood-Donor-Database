-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2012 at 08:50 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ieee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Userid` int(8) NOT NULL AUTO_INCREMENT,
  `Name` varchar(32) NOT NULL,
  PRIMARY KEY (`Userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `Hospitalid` int(8) NOT NULL AUTO_INCREMENT,
  `Name` varchar(32) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(32) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Phone Number` varchar(10) NOT NULL,
  `Emailid` varchar(30) NOT NULL,
  PRIMARY KEY (`Hospitalid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hospital`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('harshit', 'lol'),
('saurabhsood', 'doggierules');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Userid` int(8) NOT NULL AUTO_INCREMENT,
  `Name` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Blood_Group` varchar(4) NOT NULL,
  `Nearest_Locality` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Phone_Number` varchar(10) NOT NULL,
  `Email_id` varchar(32) NOT NULL,
  PRIMARY KEY (`Userid`),
  UNIQUE KEY `Email_id` (`Email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `Name`, `password`, `DOB`, `Blood_Group`, `Nearest_Locality`, `Address`, `City`, `State`, `Country`, `Phone_Number`, `Email_id`) VALUES
(16, 'Saurabh Sood', 'bb61e400fec03aea7cb401a4d457eeb1', '0000-00-00', 'B+', 'EC', 'B2 Pi2', 'Greater Noida', 'UP', 'India', '9886808120', 'saurabhsood91@gmail.com'),
(17, 'Harshit', '9cdfb439c7876e703e307864c9167a15', '2011-01-01', 'B+', 'MIT Manipal', 'Room 187 MIT Hostels', 'Manipal', 'Karnataka', 'India', '9886808120', 'harshit@yahoo.co.in');
