-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2014 at 12:32 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'Project'),
(2, 'Product'),
(3, 'Seminar');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(1, 'a', 'raju', 'haii', '2014-10-21 15:00:24', 0),
(2, 'raju', 'a', 'haii', '2014-10-21 15:00:37', 0),
(3, 'a', 'raju', 'haiiii', '2014-10-21 15:01:19', 0),
(4, 'raju', 'a', 'hauuuu', '2014-10-21 15:01:24', 0),
(5, 'raju', 'a', 'haii', '2014-10-21 15:04:39', 0),
(6, 'raju', 'a', 'ha', '2014-10-21 15:04:49', 0),
(7, 'raju', 'a', 'hai', '2014-10-21 15:05:14', 0),
(8, 'a', 'raju', 'hai', '2014-10-21 15:05:27', 0),
(9, 'raju', 'a', 'haii', '2014-10-21 15:12:10', 0),
(10, 'raju', 'a', 'haii', '2014-10-21 15:12:43', 0),
(11, 'raju', 'a', 'h''', '2014-10-21 15:14:15', 0),
(12, 'a', 'raju', 'haii', '2014-10-21 15:14:40', 0),
(13, 'a', 'raju', 'haii', '2014-10-21 15:19:20', 0),
(14, 'a', 'a', 'hai', '2014-10-21 15:19:28', 0),
(15, 'a', 'raju', 'hai', '2014-10-21 15:58:10', 0),
(16, 'a', 'a', 'hai', '2014-10-21 15:58:15', 0);

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
  `PrdtDate` varchar(10) NOT NULL,
  `PrdtDesc` varchar(255) NOT NULL,
  `PrdtAmnt` varchar(20) NOT NULL,
  `Image` varchar(150) NOT NULL,
  PRIMARY KEY (`prdtId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `productdetails`
--

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
  `Date` varchar(6) NOT NULL,
  PRIMARY KEY (`PrjctId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `projectdetails`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `secadmdet`
--

INSERT INTO `secadmdet` (`said`, `name`, `catid`, `email`, `phn`, `uname`, `pass`) VALUES
(1, 'sumith', 1, 'sumith@gmail.com', '9656761101', 'sumith', 'sumith'),
(2, 'anu', 3, 'anu@gmail.com', '9656761101', 'anu', 'anu'),
(3, 'manu', 1, 'manu@gmail.comn', '9656761101', 'manu', 'manu'),
(4, 'akhil', 1, 'anu@gmail.com', '9656761101', 'akhil', 'akhil'),
(5, 'raju', 1, 'raju@gamial.com', '0123456789', 'raju', 'raju'),
(6, 'anju', 2, 'anju@gmail.com', '9876542341', 'anju', 'anju');

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
  `date` varchar(6) NULL DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `files` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`semId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `seminardetails`
--


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
