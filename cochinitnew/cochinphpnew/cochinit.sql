-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2014 at 04:22 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cochinit`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(5) NOT NULL AUTO_INCREMENT,
  `catname` varchar(150) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'Project'),
(2, 'Job'),
(3, 'Seminar');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pass`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'raju', 'raju', 'secadmin'),
(3, 'a', '123', 'User'),
(4, 'a', '123', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE IF NOT EXISTS `productdetails` (
  `prdtId` int(11) NOT NULL AUTO_INCREMENT,
  `PrdtName` varchar(150) NOT NULL,
  `PrdtDate` varchar(50) NOT NULL,
  `PrdtDesc` varchar(255) NOT NULL,
  `PrdtAmnt` varchar(20) NOT NULL,
  `Image` varchar(150) NOT NULL,
  PRIMARY KEY (`prdtId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`prdtId`, `PrdtName`, `PrdtDate`, `PrdtDesc`, `PrdtAmnt`, `Image`) VALUES
(1, 'Nokia1', '10-10-2015', 'What are you waiting for The Asha range has everything you need to keep you in the know – surf faster, be super-social, play everywhere and explore everything. Live your life, your way.', '10000', 'Nokia-Asha-210-Dual-SIM_5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projectdetails`
--

CREATE TABLE IF NOT EXISTS `projectdetails` (
  `PrjctId` int(11) NOT NULL AUTO_INCREMENT,
  `PrjTitle` varchar(50) NOT NULL,
  `PrjModules` varchar(255) NOT NULL,
  `Prjtec` varchar(50) NOT NULL,
  `PrjBackend` varchar(50) NOT NULL,
  `PrjAmt` varchar(15) NOT NULL,
  `PrjAbstract` varchar(255) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  PRIMARY KEY (`PrjctId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `projectdetails`
--

INSERT INTO `projectdetails` (`PrjctId`, `PrjTitle`, `PrjModules`, `Prjtec`, `PrjBackend`, `PrjAmt`, `PrjAbstract`, `Username`, `Date`) VALUES
(2, 'Airline Reservation Systems', 'Airline reservation system project or air ticketing system is a computer science final year project which is developed in .Net platform.Students interested in this project can download information given below.', 'ASP.Net', 'SQL server', '5000', 'Airline reservation system project or air ticketing system is a computer science final year project which is developed in .Net platform.Students interested in this project can download information given below. ', 'sumit', '13-10-2014');

-- --------------------------------------------------------

--
-- Table structure for table `secadmdet`
--

CREATE TABLE IF NOT EXISTS `secadmdet` (
  `said` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `catid` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phn` varchar(20) NOT NULL,
  `uname` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  PRIMARY KEY (`said`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `secadmdet`
--

INSERT INTO `secadmdet` (`said`, `name`, `catid`, `email`, `phn`, `uname`, `pass`) VALUES
(1, 'sumith', 1, 'sumith@gmail.com', '9656761101', 'sumith', 'sumith'),
(2, 'anu', 3, 'anu@gmail.com', '9656761101', 'anu', 'anu'),
(3, 'manu', 1, 'manu@gmail.comn', '9656761101', 'manu', 'manu'),
(4, 'akhil', 1, 'anu@gmail.com', '9656761101', 'akhil', 'akhil'),
(5, 'raju', 1, 'raju@gamial.com', '0123456789', 'raju', 'raju');

-- --------------------------------------------------------

--
-- Table structure for table `seminardetails`
--

CREATE TABLE IF NOT EXISTS `seminardetails` (
  `semId` int(11) NOT NULL AUTO_INCREMENT,
  `semTitle` varchar(255) DEFAULT NULL,
  `semDesc` varchar(255) DEFAULT NULL,
  `tec` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `files` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`semId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `seminardetails`
--

INSERT INTO `seminardetails` (`semId`, `semTitle`, `semDesc`, `tec`, `amount`, `date`, `username`, `files`) VALUES
(1, 'Google Chrome Laptop or Chrome Book', 'Chrome is the web browser used for browsing the internet in any computer. In the late 1990’s when the browsers were designed they were computed for using the internet which was slow in that period. So some of the members at GOOGLE thought in the 2000’s ha', 'Google', '5000', '5000', 'sumit', 'file');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE IF NOT EXISTS `userreg` (
  `Uid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `uname` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`Uid`, `name`, `email`, `phone`, `uname`, `pass`) VALUES
(1, 'anu', 'anu@gmail.com', '9656761101', 'anu', 'anu'),
(2, 'amrith', 'amrithm8@gmail.com', '9744381387', 'amrith', 'mohan'),
(3, 'amrith', 'amrithm8@gmail.com', '9744381387', 'a', '123'),
(4, 'sumith', 'amrithm8@gmail.com', '9744381387', 'r', 'r'),
(5, 'sumith', 'amrithm8@gmail.com', '9744381387', 'y', 'y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
