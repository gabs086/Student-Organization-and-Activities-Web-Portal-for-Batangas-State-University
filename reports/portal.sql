-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 01:15 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

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
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `orgname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `name`, `date`, `description`, `pic`, `time`, `venue`, `category`) VALUES
(2, 'Job Fair event', '2018-11-05', 'this event', 'JOb fair event.jpg', '02:12', 'Alangilan GYM', ''),
(3, 'thesis defense', '2018-11-16', 'asd', 'logo.png', '16:00', 'CICS Department', ''),
(4, 'No classes', '2018-11-05', 'NO classes till tommorrow', 'a.jpg', '13:00', 'All campuses', '');

-- --------------------------------------------------------

--
-- Table structure for table `format`
--

CREATE TABLE IF NOT EXISTS `format` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `format` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `format`
--

INSERT INTO `format` (`id`, `name`, `format`) VALUES
(1, 'forms for off-campus activities', 'forms for off-campus activities.docx'),
(2, 'Student Organization Accomplishment Report Format', 'Student Organization Accomplishment Report Format.docx');

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE IF NOT EXISTS `found` (
  `id` int(11) NOT NULL,
  `namefound` varchar(255) DEFAULT NULL,
  `founditem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`id`, `namefound`, `founditem`) VALUES
(1, 'Miles Morales', 'laptop'),
(2, 'Julian', 'grenade');

-- --------------------------------------------------------

--
-- Table structure for table `idreplace`
--

CREATE TABLE IF NOT EXISTS `idreplace` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `sr` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `idnumber` varchar(255) DEFAULT NULL,
  `offense` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idreplace`
--

INSERT INTO `idreplace` (`id`, `date`, `name`, `year`, `sr`, `dept`, `reason`, `idnumber`, `offense`, `other`, `campus`) VALUES
(3, '2018-11-07', 'Jonathan Berg', '3rd year/BSIT', '14-00000', 'CAS', 'Lost ID', '12321312', '2nd', 'asdsad', 'Lipa'),
(4, '2018-11-06', 'jj buendia', 'bsit 4th year', '13-09090', 'CICS', 'Lost ID', '09135468', '1st', 'aaaa', 'MAIN II'),
(5, '2018-11-09', 'Miles Morales', '4th', '14-12345', 'CNAHS', 'Shifter', '5432', '3rd', 'Student Reports immediately at the office', 'Main I');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'SOADirectoradmin', 'admin', 'admin'),
(6, 'SOAHead_MainII', 'head', 'head'),
(7, '14-00000', '123th', 'student'),
(13, 'jj', 'jj', 'org'),
(16, 'JPIAmainI', 'jpia', 'org');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE IF NOT EXISTS `lost` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sr` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`id`, `name`, `sr`, `year`, `campus`, `dept`, `details`, `contact`, `status`) VALUES
(1, 'Gabriel V Agoncillo', '14-00000', '4th', 'Alangilan campus', 'CICS', 'wallet. color brown', '9652984618', 'Claimed'),
(2, 'jj', '14-000', '4th year', 'MAIN II', 'CICS', 'laptop', '102934198568', 'Found');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `notification` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `date`, `username`, `notification`) VALUES
(1, NULL, 'CABEIHM - Student Council', '"jj" request has been approved by SOA Head'),
(2, NULL, 'CABEIHM - Student Council', '"jj" request has been approved by SOA Director'),
(3, NULL, 'CABEIHM - Student Council', '"Intramurals 2018 at CICS" request has been approved by SOA Head'),
(4, NULL, 'CABEIHM - Student Council', '"Intramurals 2018 at CICS" request has been approved by SOA Head');

-- --------------------------------------------------------

--
-- Table structure for table `org`
--

CREATE TABLE IF NOT EXISTS `org` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org`
--

INSERT INTO `org` (`id`, `name`, `username`, `password`, `date`) VALUES
(9, 'CABEIHM - Student Council', 'jj', 'jj', '2018-11-06'),
(11, 'JPIA - Junior Philippine Institute of Accountants', 'JPIAmainI', 'jpia', '2018-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `orga`
--

CREATE TABLE IF NOT EXISTS `orga` (
  `id` int(255) NOT NULL,
  `campus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orgname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orgpres` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orgad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `members` int(255) DEFAULT NULL,
  `officers` int(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orga`
--

INSERT INTO `orga` (`id`, `campus`, `department`, `description`, `orgname`, `orgpres`, `orgad`, `members`, `officers`, `date`) VALUES
(6, 'BatStateU Pablo Borbon Main I', 'CABEIHM', '', 'AGSPBA - Association of Graduate Students  of Public and Business Administration', 'Karl Joseph Sanmocte', 'Mr. Francis Balason', 405, 13, '2018-11-06'),
(7, 'BatStateU Pablo Borbon Main I', 'CABEIHM', 'Socio-Civic', 'AYPA - Association of Young Public Administrators', 'Kathleen C. Atienza', 'Mr. Camilo C. Alulod', 31, 7, '2018-11-06'),
(8, 'BatStateU Pablo Borbon Main I', 'CABEIHM', '', 'CABEIHM - Student Council', 'Jerico C. Almario', 'Mr. Daniel John F. Falo', 2901, 35, '2018-11-06'),
(9, 'BatStateU Pablo Borbon Main I', 'CABEIHM', 'Academic', 'FHARS-Future Hoteliers and Restaurateurs Society', 'Jessa Mae I. Babao', 'Mr. Niño Michael B. Pagcaliwagan', 380, 11, '2018-11-06'),
(10, 'BatStateU Pablo Borbon Main I', 'CABEIHM', '', 'JPIA - Junior Philippine Institute of Accountants', 'Dona D. Pilapil', 'Ms. Rodelyn P. Ruga', 386, 14, '2018-11-06'),
(11, 'BatStateU Pablo Borbon Main I', 'CABEIHM', '', 'PSCAS-Phillipine Society of Customs Administration Students', 'Glenn H. Tampis', 'Ms. Jenny A. Villena', 367, 12, '2018-11-06'),
(12, 'BatStateU Pablo Borbon Main I', 'CABEIHM', '', 'LTSP- League of Tourism Students of the Philippines', 'Eleuterio G. MonteAguado', 'Ms. Sharmaine I. Brillo', 184, 13, '2018-11-06'),
(14, 'BatStateU PABLO BORBON MAIN I', 'CABEIHM', 'Socio-Academic\r\n', 'JMS- Junior Managers'' Society\r\n', 'Rafael Pedro B. Uy Jr.\r\n', 'Ms. Angelica M. Ramos\r\n', 850, 10, '2018-11-06'),
(15, 'BatStateU PABLO BORBON MAIN I', 'CABEIHM', NULL, 'YAMS-Young Accounting Managers'' Society\r\n', 'Justerine Nicole D. Alilio\r\n', 'Ms. Mary Grace B. Tenorio\r\n', 575, 14, '2018-11-06'),
(16, 'BatStateU PABLO BORBON MAIN I', 'CAS', 'Academic\r\n', 'CAS-GSS - Graduate School Society\r\n', 'Valarie V. Naval\r\n', 'Dr. Jonelyn Sandoval\r\n', 52, 15, '2018-11-06'),
(17, 'BatStateU PABLO BORBON MAIN I', 'CAS', 'Socio-Academic\r\n', 'ACS- Association of Criminology Students\r\n', 'Ma. Mercy Gorgonia P. Agpalo\r\n', 'Mrs. Charito B. Panaligan\r\n', 502, 14, '2018-11-06'),
(23, 'BatStateU PABLO BORBON MAIN I', 'CAS', 'Political\r\n\r\n', 'CAS-Student Council', 'Mariel D. Bantugon\r\n', 'Ms. Flerida P. Gaba\r\n', 780, 12, '2018-11-06'),
(24, 'BatStateU PABLO BORBON MAIN I', 'CAS', 'Academic\r\n', 'ChemSoc- Chemical Society\r\n', 'Rafter T. Agcaoli\r\n', 'Mr. Bryan John A. Magoling\r\n', 35, 10, '2018-11-06'),
(25, 'BatStateU PABLO BORBON MAIN I', 'CAS', 'Cultural\r\n', 'KAMARA- Kamera, Kamay at Kultura\r\n', 'Leonel A. Bagarinao\r\n', 'Dr. Gerard B. Remo\r\n', 87, 10, '2018-11-06'),
(26, 'BatStateU PABLO BORBON MAIN I', 'CAS', 'Academic\r\n', 'PSS - Psychology Students'' Society \r\n', 'John Lloyd R. Gambalan\r\n', 'Mr. Marc D. Tesico\r\n', 334, 11, '2018-11-06'),
(27, 'BatStateU PABLO BORBON MAIN I', 'CAS', '', 'SBDC- Student Broadcasters of Development Communication\r\n', 'Ellarel Abregonda\r\n', 'Divina Grace F. Flores\r\n', 87, 10, '2018-11-06'),
(28, 'BatStateU PABLO BORBON MAIN I', 'CAS', 'Academic/Socio Civic\r\n', 'SciMaSS- Science Major Students'' Society\r\n', 'Erwin Raphael M. Comia\r\n', 'Mrs. Antonette T. Geron\r\n', 94, 11, '2018-11-06'),
(29, 'BatStateU PABLO BORBON MAIN I', 'CAS', 'Academic\r\n', 'SDC- Society of Development Communication\r\n', 'James Adrian D. Panganiban\r\n', 'Atty. Alvin R. De Silva\r\n', 87, 10, '2018-11-06'),
(31, 'BatStateU Pablo Borbon Main I', 'CNAHS', 'Academic', 'SLN- Spartan Leauge of Nurses', 'Joshua W. Atienza', 'Ms.Maria Christina  Bernadette C. Aguba', 72, 11, '2018-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `orgname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `description`, `file`, `orgname`, `username`, `status`) VALUES
(7, 'Accomplishment Report', 'Main I AYPA - Association of Young Public Administrators Accomplishment Report', 'Student Organization Accomplishment Report Format.docx', 'Socio-Civic', 'nam', 'Approved'),
(9, 'Transparency Report', 'Transparency Report		', 'transparency report.docx', 'CABEIHM - Student Council', 'jj', '');

-- --------------------------------------------------------

--
-- Table structure for table `studformat`
--

CREATE TABLE IF NOT EXISTS `studformat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `format` varchar(255) DEFAULT NULL,
  `orgname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studformat`
--

INSERT INTO `studformat` (`id`, `name`, `format`, `orgname`, `status`) VALUES
(7, 'jj', 'ID Form.png', 'CABEIHM - Student Council', 'Approved'),
(8, 'Intramurals 2018 at CICS', 'ACCOMPLISHMENT-REPORT2017-access (1).docx', 'CABEIHM - Student Council', 'Approved1'),
(9, 'Intramurals 2018 at CICS', 'intrams.docx', 'CABEIHM - Student Council', 'Approved1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `format`
--
ALTER TABLE `format`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `found`
--
ALTER TABLE `found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idreplace`
--
ALTER TABLE `idreplace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost`
--
ALTER TABLE `lost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org`
--
ALTER TABLE `org`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orga`
--
ALTER TABLE `orga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studformat`
--
ALTER TABLE `studformat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `format`
--
ALTER TABLE `format`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `idreplace`
--
ALTER TABLE `idreplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `lost`
--
ALTER TABLE `lost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `org`
--
ALTER TABLE `org`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `orga`
--
ALTER TABLE `orga`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `studformat`
--
ALTER TABLE `studformat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
