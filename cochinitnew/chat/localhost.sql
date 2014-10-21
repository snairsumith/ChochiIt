-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2014 at 06:44 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat1`
--
CREATE DATABASE `chat1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chat1`;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(1, 'johndoe', 'janedoe', 'aa', '2014-09-30 11:45:15', 1),
(2, 'babydoe', 'janedoe', 'aajjj', '2014-09-30 11:45:30', 1),
(3, 'babydoe', 'janedoe', 'aa', '2014-09-30 11:45:45', 1),
(4, 'johndoe', 'janedoe', 'aa', '2014-09-30 11:45:53', 1),
(5, 'johndoe', 'babydoe', 'aa', '2014-09-30 11:45:59', 1),
(6, 'johndoe', 'babydoe', 'hai', '2014-09-30 11:46:39', 0),
(7, 'johndoe', 'janedoe', 'hai', '2014-09-30 11:59:27', 1),
(8, 'janedoe', 'johndoe', 'aa', '2014-09-30 12:00:54', 1),
(9, 'johndoe', 'janedoe', 'gggg', '2014-10-03 13:18:41', 1),
(10, 'janedoe', 'johndoe', 'hhh', '2014-10-03 13:19:17', 1),
(11, 'johndoe', 'babydoe', 'gggg', '2014-10-03 13:19:31', 0),
(12, 'janedoe', 'babydoe', 'gggg', '2014-10-03 13:19:40', 0),
(13, 'janedoe', 'babydoe', 'ggg', '2014-10-03 13:20:00', 0),
(14, 'janedoe', 'johndoe', 'xx', '2014-10-03 13:20:08', 1),
(15, 'johndoe', 'janedoe', 'hhh', '2014-10-05 12:30:01', 1),
(16, 'janedoe', 'janedoe', 'hai', '2014-10-05 12:30:38', 1),
(17, 'janedoe', 'babydoe', 'jjj', '2014-10-05 12:30:56', 0),
(18, 'janedoe', 'babydoe', 'jjj', '2014-10-05 12:31:08', 0),
(19, 'johndoe', 'janedoe', 'hai', '2014-10-05 13:12:20', 1),
(20, 'janedoe', 'janedoe', 'hlw', '2014-10-05 13:12:48', 1),
(21, 'janedoe', 'babydoe', 'hlw', '2014-10-05 13:13:16', 0),
(22, 'janedoe', 'babydoe', 'jhgjg', '2014-10-05 13:13:30', 0),
(23, 'janedoe', 'babydoe', 'hgfg', '2014-10-05 13:13:35', 0),
(24, 'janedoe', 'babydoe', 'hjvhjvh', '2014-10-05 13:13:42', 0),
(25, 'janedoe', 'janedoe', 'hjvjhv', '2014-10-05 13:13:56', 1),
(26, 'janedoe', 'janedoe', 'fhfjhfjh', '2014-10-05 13:14:07', 1),
(27, 'janedoe', 'babydoe', 'jhvjhjvjhv', '2014-10-05 13:14:11', 0),
(28, 'janedoe', 'babydoe', 'xxxxxxxxxxxxxxxxxxx', '2014-10-05 13:14:22', 0),
(29, 'janedoe', 'babydoe', 'yyyyyyyyyyyy', '2014-10-05 13:14:37', 0),
(30, 'janedoe', 'babydoe', 'jhgygdifs', '2014-10-05 13:20:14', 0),
(31, 'johndoe', 'babydoe', 'jhgjhg', '2014-10-05 13:20:31', 0),
(32, 'johndoe', 'janedoe', 'gfdgdf', '2014-10-20 21:46:16', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
