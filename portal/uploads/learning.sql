-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 11:21 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `attach`
--

CREATE TABLE IF NOT EXISTS `attach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `lesson` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `attach` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `attach`
--

INSERT INTO `attach` (`id`, `title`, `lesson`, `date`, `attach`, `teacher`) VALUES
(2, 'this is a sample attachment', 'dsafdssdgfsdg', 'Sat, Sep 15, 2018 at 11:47pm', '01simple.ods', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE IF NOT EXISTS `lesson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `lesson` text,
  `date` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `title`, `lesson`, `date`, `teacher`) VALUES
(1, 'sample lesson', '<span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">The&nbsp;</span><a href="https://en.wikipedia.org/wiki/Bayern-class_battleship" title="Bayern-class battleship" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;"><b><i>Bayern</i>-class battleships</b></a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;were four&nbsp;</span><a href="https://en.wikipedia.org/wiki/Super-dreadnought" class="mw-redirect" title="Super-dreadnought" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">super-dreadnoughts</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">,&nbsp;</span><a href="https://en.wikipedia.org/wiki/Laid_down" class="mw-redirect" title="Laid down" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">laid down</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;from 1913 to 1915 by the&nbsp;</span><a href="https://en.wikipedia.org/wiki/Imperial_German_Navy" title="Imperial German Navy" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">Imperial German Navy</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">.&nbsp;</span><i style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">Sachsen</i><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;and&nbsp;</span><i style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">Württemberg</i><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;were never completed, after&nbsp;</span><a href="https://en.wikipedia.org/wiki/U-boat" title="U-boat" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">U-boats</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;were found to be more valuable to the war effort.&nbsp;</span><a href="https://en.wikipedia.org/wiki/SMS_Bayern" title="SMS Bayern" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;"><i>Bayern</i></a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);"></span><i style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">(pictured)</i><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;and&nbsp;</span><a href="https://en.wikipedia.org/wiki/SMS_Baden" title="SMS Baden" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;"><i>Baden</i></a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">, the last German battleships completed during&nbsp;</span><a href="https://en.wikipedia.org/wiki/World_War_I" title="World War I" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">World War&nbsp;I</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">, were commissioned into the fleet too late to take part in the&nbsp;</span><a href="https://en.wikipedia.org/wiki/Battle_of_Jutland" title="Battle of Jutland" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">Battle of Jutland</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;(31 May – 1 June 1916).&nbsp;</span><i style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">Bayern</i><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;was assigned to the naval force that drove the&nbsp;</span><a href="https://en.wikipedia.org/wiki/Imperial_Russian_Navy" title="Imperial Russian Navy" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">Imperial Russian Navy</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;from the&nbsp;</span><a href="https://en.wikipedia.org/wiki/Gulf_of_Riga" title="Gulf of Riga" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">Gulf of Riga</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;during&nbsp;</span><a href="https://en.wikipedia.org/wiki/Operation_Albion" title="Operation Albion" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">Operation Albion</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;in October 1917, though the ship was severely damaged by a&nbsp;</span><a href="https://en.wikipedia.org/wiki/Naval_mine" title="Naval mine" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">mine</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;and had to be withdrawn to&nbsp;</span><a href="https://en.wikipedia.org/wiki/Kiel" title="Kiel" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">Kiel</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;for repairs.&nbsp;</span><i style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">Baden</i><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;replaced&nbsp;</span><a href="https://en.wikipedia.org/wiki/SMS_Friedrich_der_Grosse_(1911)" title="SMS Friedrich der Grosse (1911)" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;"><i>Friedrich der Grosse</i></a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;as the&nbsp;</span><a href="https://en.wikipedia.org/wiki/Flagship" title="Flagship" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">flagship</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;of the&nbsp;</span><a href="https://en.wikipedia.org/wiki/High_Seas_Fleet" title="High Seas Fleet" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">High Seas Fleet</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">, but saw no combat.&nbsp;</span><i style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">Bayern</i><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;and&nbsp;</span><i style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">Baden</i><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;were interned in&nbsp;</span><a href="https://en.wikipedia.org/wiki/Scapa_Flow" title="Scapa Flow" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">Scapa Flow</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">, Scotland, following the&nbsp;</span><a href="https://en.wikipedia.org/wiki/Armistice_of_11_November_1918" title="Armistice of 11 November 1918" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">Armistice</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;in November 1918; in June 1919,&nbsp;</span><i style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">Bayern</i><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;was&nbsp;</span><a href="https://en.wikipedia.org/wiki/Scuttling_of_the_German_fleet_in_Scapa_Flow" title="Scuttling of the German fleet in Scapa Flow" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">scuttled</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">&nbsp;along with other fleet ships at the command of Rear Admiral&nbsp;</span><a href="https://en.wikipedia.org/wiki/Ludwig_von_Reuter" title="Ludwig von Reuter" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;">Ludwig von Reuter</a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">. (</span><a href="https://en.wikipedia.org/wiki/Bayern-class_battleship" title="Bayern-class battleship" style="color: rgb(11, 0, 128); background: none rgb(245, 255, 250); font-family: sans-serif; font-size: 14px;"><b>Full&nbsp;article...</b></a><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 14px; background-color: rgb(245, 255, 250);">)</span> ', 'Sat, Sep 15, 2018 at 5:38pm', 'sa');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(3, 'sa', 'sa', 'teacher'),
(4, 'kk', 'kk', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `ansa` varchar(255) DEFAULT NULL,
  `ansb` varchar(255) DEFAULT NULL,
  `ansc` varchar(255) DEFAULT NULL,
  `ansd` varchar(255) DEFAULT NULL,
  `corans` varchar(255) DEFAULT NULL,
  `questionid` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ansa`, `ansb`, `ansc`, `ansd`, `corans`, `questionid`, `teacher`) VALUES
(1, 'question', 'a', 'b', 'c', 'd', '1', '1', 'sa'),
(2, 'question 2', 'd', 'c', 'b', 'a', '2', '1', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `name`, `description`, `date`, `teacher`) VALUES
(1, 'sa', 'dflkgndfklgjndfgkjlhn', 'Sat, Sep 15, 2018 at 11:57pm', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `username`, `password`, `grade`, `section`, `contact`, `teacher`) VALUES
(1, 'kk', 'kk', NULL, 'Grade 7', 'sa', '09974313935', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `username`, `password`, `grade`, `section`, `contact`) VALUES
(2, 'sa', 'sa', NULL, 'Grade 7', 'sa', 'sa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
