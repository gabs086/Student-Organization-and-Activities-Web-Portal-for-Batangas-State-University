-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 02:05 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `orgname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `date`, `description`, `pic`, `time`, `venue`, `orgname`, `username`, `status`) VALUES
(1, 'sample', '2018-09-20', 'sgdfg', 'background.jpg', '12:59', 'dgfg', 'name', 'sa', 'Pending'),
(2, 'CSIC Meeting', '2018-09-19', 'asssdfdsfsdfsdfad', '23619079_10155156547241818_281923145_n.png', '13:00', 'dsadasd', 'CICS', 'nam', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `name`, `date`, `description`, `pic`, `time`, `venue`) VALUES
(1, 'announcem', '2018-12-31', 'shdfghfgh', 'background.jpg', '12:59', 'dfgdfgh'),
(2, 'dfsd', '2018-09-18', 'sgdfgdf', 'learning.sql', '01:00', 'dsfdsf'),
(3, 'sa', '2018-12-31', 'afdf', 'learning.sql', '12:59', 'adf');

-- --------------------------------------------------------

--
-- Table structure for table `idreplace`
--

CREATE TABLE IF NOT EXISTS `idreplace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `sr` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `idnumber` varchar(255) DEFAULT NULL,
  `offense` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `idreplace`
--

INSERT INTO `idreplace` (`id`, `date`, `name`, `year`, `sr`, `dept`, `reason`, `idnumber`, `offense`, `other`) VALUES
(1, '2018-09-19', 'name', 'sdjkfh', 'sjkdfh', 'kjsdf', 'Shifter', 'sjkgh', '1st', 'sdgsdgsd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(4, 'sa', 'sa', 'org'),
(5, 'nam', 'nam', 'org'),
(6, 'head', 'head', 'head'),
(7, 'student', 'student', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE IF NOT EXISTS `lost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sr` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`id`, `name`, `sr`, `year`, `campus`, `dept`, `details`, `contact`, `status`) VALUES
(1, 'jgsdjf', 'dkfj', 'sdkj', 'sdkjg', 'ksdgh', 'sdgkh', 'dfjgh', 'Unclaimed/Unfound');

-- --------------------------------------------------------

--
-- Table structure for table `org`
--

CREATE TABLE IF NOT EXISTS `org` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `head` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `org`
--

INSERT INTO `org` (`id`, `name`, `head`, `username`, `password`, `description`) VALUES
(3, 'name', 'sa', 'sa', 'sa', 'dfkgjdfgk'),
(4, 'CICS', 'name', 'nam', 'nam', 'this s ond;gdfgkdfg');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `orgname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `description`, `file`, `orgname`, `username`) VALUES
(3, 'sample report', 'sdgdfg								', 'Home.docx', 'name', 'sa'),
(4, 'meeting journal', '				lslkkdfhgdklfghlsdfgh				', '1-3 (1).docx', 'CICS', 'nam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
