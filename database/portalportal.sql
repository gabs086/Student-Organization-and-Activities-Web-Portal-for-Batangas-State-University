-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 04:28 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
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

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `name`, `date`, `description`, `pic`, `time`, `venue`, `category`) VALUES
(1, 'Job Fair event', '2018-11-27', 'There will be an JOb fair event on the Batangas State University Campus Main II for all the fresh graduates. Hurry up and Join. Just Bring the Requirements needed. Goodluck', 'JOb fair event.jpg', '08:00', 'Alangilan GYM', '');

-- --------------------------------------------------------

--
-- Table structure for table `assess`
--

CREATE TABLE `assess` (
  `id` int(11) NOT NULL,
  `acassess` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `acreq` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `campus` varchar(255) NOT NULL,
  `org` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assess`
--

INSERT INTO `assess` (`id`, `acassess`, `date`, `acreq`, `description`, `campus`, `org`) VALUES
(1, 'Fieldtrip 2017', '2018-12-11', 'Reg form, Notarized Parents Consent, etc', 'The activity will harness the student in researching of resources', 'BatStateU Pablo Borbon Main II', 'ACCESS - Association of Committed Computer Science Students');

-- --------------------------------------------------------

--
-- Table structure for table `format`
--

CREATE TABLE `format` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `format` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `format`
--

INSERT INTO `format` (`id`, `name`, `format`) VALUES
(1, 'Annual Reports Format for Student Organization of the University', 'ACCOMPLISHMENT-REPORT2017-access.docx');

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `id` int(11) NOT NULL,
  `namefound` varchar(255) DEFAULT NULL,
  `founditem` varchar(255) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`id`, `namefound`, `founditem`, `campus`, `date`) VALUES
(3, 'Julian', 'towel', 'BatStateU Pablo Borbon Main II', '2018-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `idreplace`
--

CREATE TABLE `idreplace` (
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
  `campus` varchar(255) DEFAULT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idreplace`
--

INSERT INTO `idreplace` (`id`, `date`, `name`, `year`, `sr`, `dept`, `reason`, `idnumber`, `offense`, `other`, `campus`, `course`) VALUES
(1, '2018-11-28', 'Sherdyll Espiritu', '4th', '14-00000', 'CICS', 'Lost ID', '1232312312321', '1st', '', 'Alangilan campus', ''),
(2, '2019-06-28', 'Gabriel Agoncillo', 'Fourth Year', '14-0000', 'CICS', 'Lost ID', '14-0000', '1st', '', 'BatStateU Pablo Borbon Main II', 'BSIt'),
(3, '2019-06-28', 'Gabriel Agoncillo', 'Fourth Year', '14-0000', 'CICS', 'Shifter', '14-0000', '2nd', 'another reason', 'BatStateU Pablo Borbon Main II', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `campus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`, `campus`) VALUES
(1, 'SOADirectoradmin', 'admin', 'admin', ''),
(6, 'SOAHead_MainII', 'head', 'head', 'BatStateU Pablo Borbon Main II'),
(7, '14-00000', '123th', 'student', ''),
(17, 'SOAHead_MainI', 'main1', 'head', 'BatStateU Pablo Borbon Main I'),
(18, 'SOAHead_Malvar', 'malvar', 'head', 'BatStateU JPLPC-Malvar'),
(19, 'SOAHead_Nasugbu', 'nasugbu', 'head', 'BatStateU ARASOF-Nasugbu'),
(20, 'SOAHead_Lipa', 'lipa', 'head', 'BatStateU Lipa'),
(21, 'SOAHead_Rosario', 'rosario', 'head', 'BatStateU Rosario'),
(22, 'SOAHead_SanJuan', 'sanjuan', 'head', 'BatStateU San Juan'),
(32, 'SOAHead_Lemery', 'lemery', 'head', 'BatStateU Lemery'),
(33, 'SOAHead_Balayan', 'balayan', 'head', 'BatStateU Balayan'),
(34, 'SOAHead_Lobo', 'lobo', 'head', 'BatStateU Lobo'),
(41, 'cab', 'cab', 'org', 'BatStateU Pablo Borbon Main I'),
(42, 'pan', 'pan', 'org', 'BatStateU Pablo Borbon Main I'),
(43, 'ACCESSmain2', 'acc', 'org', 'BatStateU Pablo Borbon Main II');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE `lost` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sr` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`id`, `name`, `sr`, `year`, `campus`, `dept`, `details`, `contact`, `status`, `course`) VALUES
(1, 'Gabriel V Agoncillo', '14-00000', '4th', 'BatStateU Pablo Borbon Main II', 'CICS', 'wallet. color brown', '9652984618', 'Unclaimed/Unfound', ''),
(2, 'Jonathan Berg', '14-00012', 'Third Year', 'BatStateU JPLPC-Malvar', 'CABEIHM', 'wallet. color brown', '9652984618', 'Unclaimed/Unfound', 'BSIT'),
(3, 'Gabriel Agoncillo', '14-0000', 'Fourth Year', 'BatStateU Pablo Borbon Main II', 'CICS', 'brow wallet', '9652984618', 'Claimed', 'BSIt');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `notification` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `date`, `username`, `notification`, `status`) VALUES
(16, NULL, 'ACCESS - Association of Committed Computer Science Students', '\"Seminar 2017\" request has been approved by SOA Head', 'read'),
(17, NULL, 'ACCESS - Association of Committed Computer Science Students', '\"Seminar 2017\" request has been approved by SOA Director', 'read'),
(18, NULL, 'ACCESS - Association of Committed Computer Science Students', '\"Fieldtrip activity for ACCESS Main II\" request has been declined by SOA Head. Reason: Insufficient Attachment', 'read'),
(19, NULL, 'CABEIHM - Student Council', '\"Acquientance Party\" request has been approved by SOA Head', 'read'),
(20, NULL, 'CABEIHM - Student Council', '\"Acquientance Party\" request has been approved by SOA Director', 'read'),
(21, NULL, '', '\"\" report needs to be revised: Evaluated by SOA Director. Reason: f', 'read'),
(22, NULL, '', '\"\" report needs to be revised: Evaluated by SOA Director. Reason: f', 'read'),
(23, NULL, '', '\"\" report needs to be revised: Evaluated by SOA Director. Reason: f', 'read'),
(24, NULL, 'agspbamain1', '', ''),
(25, NULL, 'agspbamain1', 'nother one again', ''),
(26, NULL, 'agspbamain1', 'last one pleasee', ''),
(27, NULL, 'agspbamain1', 'notification', ''),
(28, NULL, 'agspbamain1', 'hahaha\r\n', ''),
(29, NULL, 'AGSPBA - Association of Graduate Students of Public and Business Administration', 'please be kind', ''),
(30, NULL, 'AGSPBA - Association of Graduate Students of Public and Business Administration', '\"Activity Reports\"is needed to be revised. Reason: eto na', ''),
(31, NULL, 'AGSPBA - Association of Graduate Students of Public and Business Administration', '\"Activity Reports\"is needed to be revised. Reason: Test', ''),
(32, NULL, 'CABEIHM - Student Council', '\"Test\"is needed to be revised. Reason: test', 'read'),
(33, NULL, 'CABEIHM - Student Council', '\"Test\" Report, is needed to be revised. Reason: sample reason', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `org`
--

CREATE TABLE `org` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `campus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org`
--

INSERT INTO `org` (`id`, `name`, `username`, `password`, `date`, `campus`) VALUES
(4, 'CABEIHM - Student Council', 'cab', 'cab', '2018-12-04', 'BatStateU Pablo Borbon Main I'),
(5, 'PAN - Philippine Association of Nutrition', 'pan', 'pan', '2018-12-04', 'BatStateU Pablo Borbon Main I'),
(6, 'ACCESS - Association of Committed Computer Science Students', 'ACCESSmain2', 'acc', '2018-12-04', 'BatStateU Pablo Borbon Main II');

-- --------------------------------------------------------

--
-- Table structure for table `orga`
--

CREATE TABLE `orga` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orga`
--

INSERT INTO `orga` (`id`, `campus`, `department`, `description`, `orgname`, `orgpres`, `orgad`, `members`, `officers`, `date`) VALUES
(35, 'BatStateU Pablo Borbon Main I', 'CABEIHM', '', 'AGSPBA - Association of Graduate Students  of Public and Business Administration', 'Karl Joseph Sanmocte', 'Mr. Francis Balason', 405, 13, '2018-11-27'),
(36, 'BatStateU Pablo Borbon Main I', 'CABEIHM', 'Socio-Civic', 'AYPA - Association of Young Public Administrators', 'Kathleen C. Atienza', 'Mr. Camilo C. Alulod', 31, 7, '2018-11-27'),
(37, 'BatStateU Pablo Borbon Main I', 'CABEIHM', '', 'CABEIHM - Student Council', 'Jerico C. Almario', 'Mr. Daniel John F. Falo', 2901, 35, '2018-11-27'),
(38, 'BatStateU Pablo Borbon Main I', 'CABEIHM', 'Academic', 'FHARS-Future Hoteliers and Restaurateurs Society', 'Jessa Mae I. Babao', 'Mr. Niño Michael B. Pagcaliwagan', 380, 11, '2018-11-27'),
(39, 'BatStateU Pablo Borbon Main I', 'CABEIHM', '', 'JPIA - Junior Philippine Institute of Accountants', 'Dona D. Pilapil', 'Ms. Rodelyn P. Ruga', 386, 14, '2018-11-28'),
(40, 'BatStateU Pablo Borbon Main I', 'CABEIHM', '', 'LTSP- League of Tourism Students of the Philippines', 'Eleuterio G. MonteAguado', 'Ms. Sharmaine I. Brillo', 184, 13, '2018-11-28'),
(41, 'BatStateU Pablo Borbon Main I', 'CABEIHM', '', 'PSCAS- Philippine Society of Customs Administration Students', 'Glenn H. Tampis', 'Ms. Jenny A. Villena', 367, 12, '2018-11-28'),
(42, 'BatStateU Pablo Borbon Main I', 'CAS', 'Academic', 'CAS-GSS - Graduate School Society', 'Valarie V. Naval', 'Dr. Jonelyn Sandoval', 52, 15, '2018-11-28'),
(43, 'BatStateU Pablo Borbon Main I', 'CAS', 'Socio-Academic', 'ACS- Association of Criminology Students', 'Ma. Mercy Gorgonia P. Agpalo', 'Mrs. Charito B. Panaligan', 502, 14, '2018-11-28'),
(44, 'BatStateU Pablo Borbon Main I', 'CAS', 'Political', 'CAS-Student Council', 'Mariel D. Bantugon', 'Ms. Flerida P. Gaba', 780, 12, '2018-11-28'),
(45, 'BatStateU Pablo Borbon Main I', 'CAS', 'Academic', 'ChemSoc- Chemical Society', 'Rafter T. Agcaoli', 'Mr. Bryan John A. Magoling', 35, 10, '2018-11-28'),
(46, 'BatStateU Pablo Borbon Main I', 'CAS', 'Cultural', 'KAMARA- Kamera, Kamay at Kultura', 'Leonel A. Bagarinao', 'Dr. Gerard B. Remo', 87, 10, '2018-11-28'),
(47, 'BatStateU Pablo Borbon Main I', 'CAS', '', 'SBDC- Student Broadcasters of Development Communication', 'Ellarel Abregonda', 'Divina Grace F. Flores', 87, 10, '2018-11-28'),
(48, 'BatStateU Pablo Borbon Main I', 'CAS', 'Academic', 'SDC- Society of Development Communication', 'James Adrian D. Panganiban', 'Atty. Alvin R. De Silva', 87, 10, '2018-11-28'),
(49, 'BatStateU Pablo Borbon Main I', 'CNAHS', 'Academic', 'CONAHS-SC- College of Nursing and Allied Health Sciences Student Council', 'Carl Benson F. Baja', 'Ms. Mary Monique G. Lacerna', 167, 15, '2018-11-28'),
(50, 'BatStateU Pablo Borbon Main I', 'CNAHS', '', 'PAN - Philippine Association of Nutrition                    ', 'Ms, Pauline Jo A. Prudentino', 'Mrs. Kristia Lei A. Reyes', 98, 12, '2018-11-28'),
(51, 'BatStateU Pablo Borbon Main I', 'CNAHS', 'Academic', 'SLN - Spartan League of Nurses', 'Joshua W. Atienza', 'Ms.Maria Christina  Bernadette C. Aguba', 72, 11, '2018-11-28'),
(52, 'BatStateU Pablo Borbon Main I', 'CTE', 'Academic/Service Oriented', 'GSA-CTE - Graduate Students Association ', 'Mr. Joseph A. Angeles', 'Dr. Anna Maria V. Rivera', 1500, 14, '2018-11-28'),
(53, 'BatStateU Pablo Borbon Main I', 'CTE', '', 'AsPhyTech- Association of Social Physical and Technopreneurial Enthusiasts', 'Julius M. Pisig', 'Ms. Julianne Gail O. Aberilla', 458, 10, '2018-11-28'),
(54, 'BatStateU Pablo Borbon Main I', 'CTE', '', 'FEMS- Future Elementary Mentors Society', 'Colleen Bacarro', 'Ms. Annalyn Buenafe', 164, 15, '2018-11-28'),
(55, 'BatStateU Pablo Borbon Main I', 'CTE', 'Academic', 'TEAMSS- Teacher Education Association of Mathematics and Science Students', 'Ronalin E. Manalang', 'Ms. Luz M. Faminialagao', 238, 15, '2018-11-28'),
(56, 'BatStateU Pablo Borbon Main I', 'CTE', 'Academic', 'TESC- Teacher Education Student Council', 'Mark Louis Javier', 'Ms. Maria Perpetua P. Crisostomo', 1118, 20, '2018-11-28'),
(57, 'BatStateU Pablo Borbon Main I', 'CTE', 'Academic', 'Doctoral Student  Association', 'Jordan G. Saner', 'Dr. Charity A. Aldover', 140, 10, '2018-11-28'),
(58, 'BatStateU Pablo Borbon Main I', 'CTE', '', 'TESLACOM-Teacher Education Society on Language and Communication', 'Kimberly D. Hernandez', 'Mrs. Maribel A. Gutierrez', 244, 14, '2018-11-28'),
(59, 'BatStateU Pablo Borbon Main II', 'CEAFA', 'colleged-based ', 'ACES- Association of Civil Engineering Students', 'Engr. Erwin Rafel D. Cabral', 'Bernanrd S. Villaviray', 556, 17, '2018-11-28'),
(60, 'BatStateU Pablo Borbon Main II', 'CEAFA', '', 'AFES- Association of Food Engineering Students', 'Ivy Vanessa R. Mendoza', 'Engr. Juliana Kassandra B. Panaglima', 129, 13, '2018-11-28'),
(61, 'BatStateU Pablo Borbon Main II', 'CEAFA', '', 'AICES- Association of Instrumentation and Control Engineering', 'Angela Mae V. Clarete', 'Engr. John Andrew A. Clanor', 286, 17, '2018-11-28'),
(63, 'BatStateU Pablo Borbon Main II', 'CEAFA', 'Academic/Socio-Civic', 'CEAFA Student Council', 'Aunhel John M. Adoptante', 'Mr. Gene Bryan V. Hernandez', 5746, 25, '2018-11-28'),
(64, 'BatStateU Pablo Borbon Main II', 'CEAFA', '', 'CURSOR-Computer Engineering Students Organization', 'Chiara Diane M. Guce', 'Engr. Mark John Fel T. Rayos', 114, 15, '2018-11-28'),
(65, 'BatStateU Pablo Borbon Main II', 'CEAFA', '', 'IDEAS - Interior Design Edifying Auxilliary of Students', 'Rock Tron John Liwag', 'Ms. Azenith M. Reyes', 116, 23, '2018-11-28'),
(66, 'BatStateU Pablo Borbon Main II', 'CEAFA', 'Socio-Academic', 'JIECEP-Junior Institute of Electronics Engineers of the Philippines', 'Arjay M. Abacan', 'Egnr. Anela L. Salvador', 234, 23, '2018-11-28'),
(67, 'BatStateU Pablo Borbon Main II', 'CEAFA', 'colleged-based ', 'JIIEE- Junior Institute of Integrated Electrical Engineers ', 'Jonathan A. Baes', 'Engr. Ricmart V. Garbin', 643, 10, '2018-11-28'),
(68, 'BatStateU Pablo Borbon Main II', 'CEAFA', '', 'JPIIE- Junior Philippine Institute of Industrial Engineers ', 'Noreen Deanne V. Ragas', 'Engr. RM Jhiell Lhey Q. Manalo', 489, 11, '2018-11-28'),
(69, 'BatStateU Pablo Borbon Main II', 'CEAFA', 'colleged-based ', 'MESS- Mechanical Engineering Student Society', 'Arvin C. Calangi', 'Engr. Mary Joan Leacille R. Manalo', 1079, 32, '2018-11-28'),
(70, 'BatStateU Pablo Borbon Main II', 'CEAFA', '', 'MEXESS-Mechatronics Engineering Students Society', 'Lea Raquel M. Malata', 'Engr. Antonette V. Chua', 209, 16, '2018-11-28'),
(71, 'BatStateU Pablo Borbon Main II', 'CEAFA', 'Socio-Civic', 'PICHE-JCB- Philippine Institute of Chemical Engineers', 'Sherald G. Agustin', 'Engr. Angelica D. De Sagun', 285, 23, '2018-11-28'),
(72, 'BatStateU Pablo Borbon Main II', 'CEAFA', '', 'PSSE- Philippine Society of Sanitary Engineers', 'Mary Rose C. Ramos', 'Engr. Lovely C. Anonuevo', 245, 11, '2018-11-28'),
(73, 'BatStateU Pablo Borbon Main II', 'CEAFA', '', 'SPE- Society of Petroleum Engineers', 'Peter Jake N. Araneta', 'Engr. Julie Pearl F. Marasigan', 508, 24, '2018-11-28'),
(74, 'BatStateU Pablo Borbon Main II', 'CEAFA', '', 'Thema Arts Society', 'James Paul M. Sancha', 'Ms. Mary Grace A. Gutierrez', 50, 13, '2018-11-28'),
(75, 'BatStateU Pablo Borbon Main II', 'CEAFA', 'Academic', 'UAPSA- United Architects of the Philippines Student Auxillary', 'Daryll D. Galon', 'Ar. Joe Mark M. Banaag', 50, 16, '2018-11-28'),
(76, 'BatStateU Pablo Borbon Main II', 'CICS', '', 'ACCESS - Association of Committed Computer Science Students', 'Enrico T. Marzon', 'Mr. Maurice Chester M. Aguda', 180, 21, '2018-11-28'),
(77, 'BatStateU Pablo Borbon Main II', 'CICS', 'Socio-Civic', 'CICS-SC ', 'Enrico T. Marzon', 'Mr. Raymond Kit M. Rodriguez', 1054, 15, '2018-11-28'),
(78, 'BatStateU Pablo Borbon Main II', 'CIT', '', 'ACTS- Association of Computer Technology Students', 'Hanna Joy M. Ventura', 'Mr. Edcel E. Torralba', 100, 13, '2018-11-28'),
(79, 'BatStateU Pablo Borbon Main II', 'CIT', '', 'CCM- Christian Campus Ministry', 'Lanielle Mae C. Rosales', 'Ms. Jenelyn A. Ramirez', 1149, 12, '2018-11-28'),
(80, 'BatStateU Pablo Borbon Main II', 'CIT', '', 'CCM- Christian Campus Ministry', 'Lanielle Mae C. Rosales', 'Ms. Jenelyn A. Ramirez', 1149, 12, '2018-11-28'),
(81, 'BatStateU Pablo Borbon Main II', 'CIT', 'Academic', 'CIT-Student Council', 'Kenneth C. Garcia', 'Mr. Japhet G. Bagsit', 1149, 13, '2018-11-28'),
(82, 'BatStateU Pablo Borbon Main II', 'CIT', 'Academic', 'IEETS- Institute of Electrical and Electronics Technology Students', 'Jan Allen R. Lacsamana', 'Mr. Oscar B. Barte', 85, 9, '2018-11-28'),
(83, 'BatStateU Pablo Borbon Main II', 'CIT', '', 'METALTECH-Machine, Engine, Toque, Arch, and Letters Technology Students', 'Jenny Rose D. Guadalupe', 'Mrs. Cleofe Alma A. Bayot', 432, 12, '2018-11-28'),
(84, 'BatStateU Pablo Borbon Main II', 'CIT', '', 'PICS- Philippine Instrumentation and Control Society', 'Norman Denver C. Rondero', 'Engr. Marilou A. Maala', 655, 10, '2018-11-28'),
(85, 'BatStateU Balayan', '', 'Academic', 'ALASSS- Association of Languages and Social Sciences Students', 'Viviane B. Alvarez', 'Mrs. Nerissa V. Rodriguez', 396, 7, '2018-11-28'),
(86, 'BatStateU Balayan', '', 'Academic', 'FEA- Future Educators Association', 'Maricon T. Alvarez', 'Ms. Rona M. Panday', 371, 7, '2018-11-28'),
(87, 'BatStateU Balayan', '', 'Academic', 'HSC- Honor Society Club', 'Jello A. Arroyo', 'Mrs. Michelle M. Del Rosario', 675, 7, '2018-11-28'),
(88, 'BatStateU Balayan', '', 'Religious', 'Multi-Faith Organization', 'Viviane B. Alvarez', 'Mrs. Annalyn G. Macatangay', 675, 7, '2018-11-28'),
(89, 'BatStateU Lemery', '', 'Service Oriented', 'ACCESS-Association of Committed Computer Science Students', 'John Dredd Berny B. Rosales', 'Mr. John Lester L. Lacsamana', 51, 7, '2018-11-28'),
(90, 'BatStateU Lemery', '', 'Socio Academic', 'FES- Future Educators Society', 'Joshua M. Bonsol', 'Ms. Kristel An V. Baquidan', 177, 7, '2018-11-28'),
(91, 'BatStateU Lemery', '', 'Service Oriented', 'INCAM- Invicible Council of Accountants and Managers', 'Joyce A. Biscocho', 'Mr. Jemuel G. Malaluan', 487, 10, '2018-11-28'),
(92, 'BatStateU Lemery', '', 'Religious/Socio Civic', 'Multi-Faith Ministry', 'Roneth D. Salvedia', 'Mrs. Marife M. Cusi', 941, 7, '2018-11-28'),
(93, 'BatStateU Lemery', '', 'Socio Academic', 'ORBITS- Organization of Bachelor of Industrial Technology Students', 'Ildefonso G. Bobes Jr.', 'Ms. Lalaine A. Contreras', 224, 7, '2018-11-28'),
(94, 'BatStateU Lemery', '', 'Socio Academic', 'SCC- Sports and Cultural Club', 'Mark Louell M. Villanueva', 'Mr. Miguel Alvin King Villanueva', 139, 14, '2018-11-28'),
(95, 'BatStateU Lemery', '', '', 'SSC - Supreme Student Council', 'Ms. Judy Ann O. De Leon', 'Mr. Zorcastro E. Cabello', 941, 7, '2018-11-28'),
(96, 'BatStateU Lipa', '', 'Socio-Civic', 'ACASS- Association of College of Arts and Sciences Students', 'Ric May T. Inandan', 'Ms. Faye Michelle L. Hosmillo', 412, 7, '2018-11-28'),
(97, 'BatStateU Lipa', '', 'Academic', 'AITS- Association of Industrial Technology Students', 'Mhel John I. Corpus', 'Mr. Julius Ceazar D. Valenzuela', 203, 11, '2018-11-28'),
(98, 'BatStateU Lipa', '', 'Academic', 'CABE Council', 'Alyza Nicole B. Eguia', 'Mr. Joselito S. Malaluan', 579, 11, '2018-11-28'),
(99, 'BatStateU Lipa', '', 'Academic', 'College of Engineering and Computing Sciences Council', 'Aljucel P. Corpus', 'Gladys P. Perez', 371, 11, '2018-11-28'),
(100, 'BatStateU Lipa', '', 'Academic', 'CURSOR - Computer Science Student Organization', 'Joshua M. Dimayuga', 'Mr. Dioneces O. Alimoren', 130, 11, '2018-11-28'),
(101, 'BatStateU Lipa', '', 'Academic', 'COPS- Circle of Psychology Students', 'Krishna Aisley A. Sarmiento', 'Mr. Paul Gabriel P. Silang', 262, 8, '2018-11-28'),
(102, 'BatStateU Lipa', '', 'Academic', 'Honor Society', 'Jeanelle Angela M. Patacsil', 'Mr. Jayson D. Pentinio', 1583, 7, '2018-11-28'),
(103, 'BatStateU Lipa', '', 'Academic', 'iJE -Integrated Junior Executives', 'Hanna Grace G. Ibo', 'Mr. Edison C. Mayo Jr.', 330, 31, '2018-11-28'),
(104, 'BatStateU Lipa', '', 'Academic', 'JPAMA - Junior Philippine Association of Management Accountants', 'Nicole O. Camacho', 'Mr. Rey Anthony M. Abing', 156, 15, '2018-11-28'),
(105, 'BatStateU Lipa', '', 'Academic', 'JPIIE- Junior Philippine Institute of Industrial Engineers ', 'Mary Jorella L. Cruz', 'Engr. Leoven A. Austria', 242, 10, '2018-11-28'),
(106, 'BatStateU Lipa', '', 'Academic', 'JPMAP- Junior  People Management Association of the Philippines', 'Michelle E. Leuterio', 'Ester M. Iglopas', 92, 6, '2018-11-28'),
(107, 'BatStateU Lipa', '', 'Academic', 'Music and Voices', 'Phil Patrick M. Lalunio', 'Mrs. Carmelite M. Dimaano', 31, 9, '2018-11-28'),
(108, 'BatStateU Lipa', '', 'Academic', 'PCS- Poderoso Communicador Sociedad', 'Levie Rose Ann S. Miranda', 'Mrs. Yolanda L. Pasia', 155, 7, '2018-11-28'),
(109, 'BatStateU Lipa', '', 'Religious/Socio-Civic', 'Every Nation Campus', 'Maria Clarita D. Intia', 'Ms. Shelyn S. Extra', 30, 5, '2018-11-28'),
(110, 'BatStateU Lipa', '', 'Special Interest', 'Theater and Arts', 'Brian Gabriel G. Briones', 'Mr. Glenn G. Dimaano', 70, 12, '2018-11-28'),
(111, 'BatStateU Lobo', '', 'Advocacy Group', 'SCCME- Society for the Conservation of Coastal and Mountain Ecosystem', 'Francis Nico C. Evangelista', 'Mr. Herbert G. Bañados', 94, 12, '2018-11-28'),
(112, 'BatStateU Lobo', '', 'Socio-Academic', 'SOYA- Society of Young Agriculturist', 'Delio E. Manalo', 'Mr. Mars G. Panganiban', 79, 16, '2018-11-28'),
(113, 'BatStateU Lobo', '', 'Socio-Academic', 'SSC - Supreme Student Council', 'Jonnel B. Albania', 'Mr. Geg C. Abrenica', 94, 7, '2018-11-28'),
(114, 'BatStateU JPLPC-Malvar', '', 'Socio-Civic', 'ACS- Alliance of Criminology Students', 'Dexter Jao B. Isaga', 'Mr. Dennis R. Eguia', 254, 7, '2018-11-28'),
(115, 'BatStateU JPLPC-Malvar', '', 'Socio-Academic', 'AFP- Alliance of Future Psychologist', 'Via Jane B. Ilagan', 'Florina P. Santiago', 198, 12, '2018-11-28'),
(116, 'BatStateU JPLPC-Malvar', '', 'Socio-Academic', 'AITeCSS- Association of Information Technology and Computer Science Sudents', 'Laarni F. Tolentino', 'Ms. Leny G. Basilan', 766, 15, '2018-11-28'),
(117, 'BatStateU JPLPC-Malvar', '', 'Acadmic', 'CABEIHM SC', 'Cherry Anne D. Trinidad', 'Mr. Kenneth R. Magpantay', 981, 26, '2018-11-28'),
(118, 'BatStateU JPLPC-Malvar', '', 'Religious', 'Campus Connect', 'Kenneth A. Magampon', 'Engr. Jayson P. Permante', 50, 10, '2018-11-28'),
(119, 'BatStateU JPLPC-Malvar', '', 'Socio-Civic', 'CIT-Student Council', 'Dione Terese C. Ligasto', 'Mrs. Shiela Marie M. Garcia', 449, 16, '2018-11-28'),
(120, 'BatStateU JPLPC-Malvar', '', 'Socio-Academic', 'Council of Arts and Sciences Students', 'Pauline Kate P. Santiago', 'Mrs. Jean O. Bolanos', 485, 12, '2018-11-28'),
(121, 'BatStateU JPLPC-Malvar', '', 'Socio-Academic', 'Council of Engineering Students', 'Paula Blaire G. Quiatchon', 'Engr. Melvin Aldwin S. Lat', 439, 14, '2018-11-28'),
(122, 'BatStateU JPLPC-Malvar', '', 'Academic', 'Guild of Elementary Education Students', 'Sheryll M. Burgos', 'Dr. Genalyn P. Lualhati', 51, 16, '2018-11-28'),
(123, 'BatStateU JPLPC-Malvar', '', '', 'Human Kinetics Society', 'John David S. Rocamora', 'Mr. Teejay D. Panganiban', 39, 16, '2018-11-28'),
(124, 'BatStateU JPLPC-Malvar', '', 'Academic', 'JFINEX- Junior Financial Executives', 'Clara Mae G. Monterola', 'Ms. Ana L. Montealto', 148, 14, '2018-11-28'),
(125, 'BatStateU JPLPC-Malvar', '', 'Socio-Academic', 'JHRA- Junior Hoteliers and Restaurateurs Association', 'Lovely D. Marqueses', 'Ms. Lauruce E. Tolentino', 214, 16, '2018-11-28'),
(126, 'BatStateU JPLPC-Malvar', '', 'Socio-Civic', 'JMA- Junior Marketing Association', 'Michael Angelo C. Mendoza', 'Mrs. Mabel O. Lopez', 268, 13, '2018-11-28'),
(127, 'BatStateU JPLPC-Malvar', '', 'Academic', 'JPAMA- Junior Philippine Association of Management Accountants', 'Rasell I. Calderon', 'Mr. Dennis B. Legaspi', 176, 15, '2018-11-28'),
(128, 'BatStateU JPLPC-Malvar', '', 'Academic/Socio-Civic', 'JPMAP - Junior People Management Association of the Philippines', 'Jerame D. Dimaculangan', 'Dr. Ronel M. Sapungan', 81, 10, '2018-11-28'),
(129, 'BatStateU JPLPC-Malvar', '', 'Academic', 'JPIIE - Junior Philippine Institute of Industrial Engineers', 'Jave T. Latido', 'Dr. Sharon G. Angulo', 295, 14, '2018-11-28'),
(130, 'BatStateU JPLPC-Malvar', '', 'Socio-Academic', 'Mechatronics Engineering Students Society', 'Ronnel C. Gevaña', 'Engr. Edwin C. Maldia', 105, 10, '2018-11-28'),
(131, 'BatStateU JPLPC-Malvar', '', 'Religious', 'Mission 3:16', 'Aldrin N. Maristela', 'Mrs. Ginalyn R. Inciong', 100, 13, '2018-11-28'),
(132, 'BatStateU JPLPC-Malvar', '', 'Socio-Academic', 'Nuclerion Society', 'Francheska Mae A. Rafa', 'Ms. Rachelle M. Quinco', 31, 14, '2018-11-28'),
(133, 'BatStateU JPLPC-Malvar', '', '', 'SSC - Supreme Student Council', 'Marco C. Aguilera', 'Ms. Airis Jane P. Macasaet', 5302, 15, '2018-11-28'),
(134, 'BatStateU JPLPC-Malvar', '', 'Academic', 'TANGLAW-Tagapagtaguyod ng Literatura at Wika', 'Noralyn N. Resaba', 'Ms. Sarah Q. Agon', 35, 15, '2018-11-28'),
(135, 'BatStateU JPLPC-Malvar', '', 'Academic', 'TESC- Teacher Education Student Council', 'Carlo D. Felismina', 'Ms. Flordeliza Sarmiento', 262, 15, '2018-11-28'),
(136, 'BatStateU ARASOF-Nasugbu', '', 'Academic', '  Philippine Association of Nutrition Delta Epsilon Chapter', 'Kristine M. De Roxas', 'Mr. Kim Leonard Dela Luna', 55, 18, '2018-11-28'),
(137, 'BatStateU ARASOF-Nasugbu', '', 'Socio-Academic', ' College of Nursing and Allied Health Sciences Student Council', 'John Lloyd C. Tria', 'Mrs. Rona Rica B. Diones', 70, 11, '2018-11-28'),
(138, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic/ Academic', ' College of accountancy, Business, Economics and International Hospitality Management- Student Council', 'Miguel Luis Asuncion', 'Mr. Marvin C. Hernandez', 465, 9, '2018-11-28'),
(139, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic/ Academic', ' Junior Entrepreneur Society', 'Monica G. Mendoza', 'Mrs. Ma Teresa D. Calma', 129, 11, '2018-11-28'),
(140, 'BatStateU ARASOF-Nasugbu', '', 'Academic', ' Association of Psychology Students', 'Malene B. Perillo', 'Ms. Chin Chin H. Diaz, Rpm', 90, 7, '2018-11-28'),
(141, 'BatStateU ARASOF-Nasugbu', '', 'Socio- Academic', 'Student Body Organization- Junior High School', 'Katherine Cailin C. Guevarra', 'Asst. Prof. Rodrigo V. Sobrevilla', 251, 12, '2018-11-28'),
(142, 'BatStateU ARASOF-Nasugbu', '', 'Socio Academic', 'Hotel and Restaurant Management Society', 'Malabanan, Alice R.', 'Mrs. Leila T. Bayot', 127, 10, '2018-11-28'),
(143, 'BatStateU ARASOF-Nasugbu', '', 'Socio Academic', 'College of Industrial Technology- Council', '   Dacillo Rose Ann M.', 'Mr. Michael A. Manalo', 93, 10, '2018-11-28'),
(144, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic/ Academic', 'BSU- ARASOF Junior Financial Executives (JFINEX)', 'Nerissa G. Gaocalin', 'Mr. Alvin C. Andulan', 93, 8, '2018-11-28'),
(145, 'BatStateU ARASOF-Nasugbu', '', 'Academic', 'Chinese Mandarin Circle', 'Danica R. Macatangay', 'Mrs. Leonisa C. Macalindong', 98, 7, '2018-11-28'),
(146, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic/ Academic', 'Tourism Management Society', 'Noel H. Rapas', 'Mrs. Arlene Mendoza', 32, 9, '2018-11-28'),
(147, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic/ Academic', 'Engineering Society', 'Lander R. Tejada', 'Mr. Romeo A. Concepcion Jr.', 99, 7, '2018-11-28'),
(148, 'BatStateU ARASOF-Nasugbu', '', 'Socio Academic/ Academic/ Service Oriented', 'College of Arts and Sciences-Student Council', 'Maelen B. Perillo', 'Mrs. Paulita R. Delos Reyes', 313, 7, '2018-11-28'),
(149, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic / Academic', 'Junior Philippine Institute of Accounts BSU-ARASOF Nasugbu Local Chapter', 'Mary Mikkar G. Lapitan', 'Mrs. Cecilia E. Baral', 31, 8, '2018-11-28'),
(150, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic / Academic', 'College of Engineering and Computing Sciences-student Council', 'Harvey A. Lorenzo', 'Mr. Albert V. Paytaren', 491, 7, '2018-11-28'),
(151, 'BatStateU ARASOF-Nasugbu', '', 'Academic', 'Student Society of Human Resource Management', 'Mark Angel S. Sevilla', 'Mrs. Marilyn P. Tampes', 99, 9, '2018-11-28'),
(152, 'BatStateU ARASOF-Nasugbu', '', 'Academic', 'Association of Computer Science Students', 'Jeremy P. Agcaoili', 'Mrs. Kristine Grace B. Estilo', 46, 9, '2018-11-28'),
(153, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic', 'BatStateU Young Technology Enthusiasts Society (BYTES)', 'John Lloyd Dela Vega', 'Ms. Rona Mae M. Magboo', 347, 6, '2018-11-28'),
(154, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic / Academic', 'College of Teacher Education Council', '  Roland Renzo A. Bathan', 'Mrs. Leolanda A. Balilla', 450, 7, '2018-11-28'),
(155, 'BatStateU ARASOF-Nasugbu', '', 'Academic', 'Science and Math Club', 'Mikaela P. Ida', 'Mrs. Lorna V. Dacillo', 96, 12, '2018-11-28'),
(156, 'BatStateU ARASOF-Nasugbu', '', 'Socio Academic', 'Student Body Organization- Elementary', 'Zyrene Joy L. Mejia', 'Mrs. Cristine P. Dacillo', 139, 11, '2018-11-28'),
(157, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic / Academic', 'Enactus', 'Byron G. Villafania', 'Ms. Sherilyn B. De Leon', 98, 7, '2018-11-28'),
(158, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic / Academic', 'Integrated Scholars Organization', 'Joselito S. Arqiza', 'Mrs. Marithel J. Tiangco', 1, 8, '2018-11-28'),
(159, 'BatStateU ARASOF-Nasugbu', '', 'Socio Academic', 'Student Body Organization- Senior High School', 'Zyrene Joy L. Mejia', 'Mrs. Eloisa V. Bausas', 217, 11, '2018-11-28'),
(160, 'BatStateU ARASOF-Nasugbu', '', 'Socio Civic/ Academic', 'Supreme Student Council', 'Jovie C. Barcelon', 'Mrs. Maria Fe M. Bagon', 2, 7, '2018-11-28'),
(161, 'BatStateU Rosario', '', 'Socio-Academic', 'AITS- Association of Industrial Technology Students', 'Rexon S. Hernandez ', 'Philip D. Geneta', 282, 13, '2018-11-28'),
(162, 'BatStateU Rosario', '', 'Religious', 'Campus Ministry (CAMIRO)', 'Edelyn D. Gayeta', 'Ms. Aileen A. Garcia', 150, 7, '2018-11-28'),
(163, 'BatStateU Rosario', '', 'Academic/Service Oriented', 'JPMAP- Junior People Management Association of the Philippines', 'Zaira R. Hernandez', 'Mrs. Jacquelyn D. Salazar', 90, 7, '2018-11-28'),
(164, 'BatStateU Rosario', '', 'Academic/Service Oriented', 'Junior Financial Executives', 'Christopher M. Valencia', 'Mr. James Carlo M. Inandan', 96, 14, '2018-11-28'),
(165, 'BatStateU Rosario', '', 'Academic / Service Oriented', 'Upright Marketing - Junior Marketing Association', 'Bernardo III C. Valencia', 'Micheal Q. Balanay', 100, 12, '2018-11-28'),
(166, 'BatStateU Rosario', '', 'Academic / Service Oriented', 'SAM-Society of Aspiring Managers', 'Princess Sarina P. Co', 'Charizza Rose P. Sandoval', 369, 11, '2018-11-28'),
(167, 'BatStateU Rosario', '', 'Socio-Civic', 'SONs (Seeds of  the Nations)', 'Victor M. Panganiban', 'Bryan A. Herrera ', 1641, 11, '2018-11-28'),
(168, 'BatStateU Rosario', '', 'Academic / Service Oriented', 'TESA- Teacher Education Student Association', 'Madelene G. Tuppal', 'Mr. Dondon C. De Torres', 442, 15, '2018-11-28'),
(169, 'BatStateU Rosario', '', 'Acdemic/Socio Civic/Service Oriented', 'SSC- Supreme Student Council', 'Ronald Jayson H. Lontoc', 'Ms. Marilou A. Vera', 1151, 12, '2018-11-28'),
(170, 'BatStateU San Juan', '', 'Academic', 'JMA- Junior Marketing Association', 'Christian Dave B. Aquino', 'Mrs. Crisallie M. Bautista', 114, 18, '2018-11-28'),
(171, 'BatStateU San Juan', '', 'Academic', 'SSC- Supreme Student Council', 'Jeric I. Luistro', 'Mr. Leo R. Salazar', 314, 7, '2018-11-28'),
(172, 'BatStateU San Juan', '', 'Cultural', 'SSPG- Sayaw Silangan Performing Group', 'John Paul P. Salagubang', 'Mrs. Riza C. Banaera', 109, 9, '2018-11-28'),
(173, 'BatStateU San Juan', '', 'Academic', 'TESA- Teacher Education Student Association', 'Maricel M. Masalunga', 'Mr. Alfred H. Sedaria', 148, 13, '2018-11-28'),
(174, 'BatStateU San Juan', '', 'Academic', 'JCITS', 'Remuel B. Esguerra', 'Mark Anthony P. Cuya', 52, 14, '2018-11-28'),
(175, 'BatStateU Pablo Borbon Main I', 'GE', 's', 's', 's', 's', 0, 0, '2018-12-10'),
(176, 'BatStateU Pablo Borbon Main I', 'GE', 'Service Oriented', 'sample', 'sample', 'sample', 0, 0, '2019-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `recordassess`
--

CREATE TABLE `recordassess` (
  `id` int(11) NOT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `namee` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `connum` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `year` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `sr` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recordassess`
--

INSERT INTO `recordassess` (`id`, `campus`, `namee`, `age`, `connum`, `activity`, `year`, `department`, `sr`, `section`) VALUES
(1, 'BatStateU Pablo Borbon Main II', 'Gabriel Agoncillo', '', '09999999999', 'Fieldtrip 2017', 'Fourth Year', 'CICS', '14-00000', '4109');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `orgname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `notification1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `description`, `file`, `orgname`, `username`, `status`, `campus`, `notification1`) VALUES
(1, 'Activity Reports', 'Report of the Activity Implemented			', 'Student Organization Accomplishment Report Format.docx', 'AGSPBA - Association of Graduate Students of Public and Business Administration', 'agspbamain1', 'Approved', 'BatStateU Pablo Borbon Main I', 'sss'),
(2, 'Test', 'testttttt								', 'TECHNO-TRANS-Project-Proposal-Program.docx', 'CABEIHM - Student Council', 'cab', 'Approved', 'BatStateU Pablo Borbon Main I', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studform`
--

CREATE TABLE `studform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `format` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studform`
--

INSERT INTO `studform` (`id`, `name`, `format`) VALUES
(1, 'Seminar Evaluation Sheet', 'SEMINAR-EVALUATION-SHEET-BatStateU-REC-OFC-03_Seminar-Evaluation-Sheet-2.docx'),
(2, 'Activity Evaluation Sheet', 'BatStateU-FO-OSAS-01_Activity-Evaluation-Sheet.docx'),
(3, 'Checklist for in-campus', 'BatStateU-CE-04_Certificate of Editing of Thesis, Dissertation for CICS.docx');

-- --------------------------------------------------------

--
-- Table structure for table `studformat`
--

CREATE TABLE `studformat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `format` varchar(255) DEFAULT NULL,
  `orgname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studformat`
--

INSERT INTO `studformat` (`id`, `name`, `format`, `orgname`, `status`, `campus`) VALUES
(1, 'ssss', 'BatStateU-FO-SOA-04_Request for New ID (2).docx', 'CABEIHM - Student Council', '', 'BatStateU Lipa'),
(2, 'Fieldtrip activity for SDC Main 1 Campus', 'Checklist of Requirements for CMO  63 (Local Off campus Activity) (1).docx', 'AGSPBA - Association of Graduate Students of Public and Business Administration', 'Declined1', 'BatStateU Pablo Borbon Main I'),
(3, 'Fieldtrip activity for SDC Main 1 Campus', 'abstract (1).docx', 'AGSPBA - Association of Graduate Students of Public and Business Administration', 'Declined', 'BatStateU Pablo Borbon Main I'),
(4, 'ksjdghfjdfhg', 'portal.sql', 'CABEIHM - Student Council', 'Declined1', 'BatStateU Pablo Borbon Main I'),
(5, 'Seminar Evaluation Sheet', 'abstract.docx', 'CABEIHM - Student Council', 'Declined1', 'BatStateU Pablo Borbon Main II'),
(6, 'sss', 'ACCOMPLISHMENT-REPORT2017-access (1).docx', 'CABEIHM - Student Council', 'Declined', 'BatStateU Pablo Borbon Main II'),
(7, 'try1', 'abstract (2).docx', 'CABEIHM - Student Council', 'Approved', 'BatStateU Pablo Borbon Main I'),
(8, 'try2', 'ACCOMPLISHMENT-REPORT2017-access (1) (1).docx', 'CABEIHM - Student Council', 'Declined1', 'BatStateU Pablo Borbon Main II'),
(9, 'ss', 'abstract.docx', 'CABEIHM - Student Council', 'Declined1', 'BatStateU Pablo Borbon Main II'),
(10, 'tryagain', 'abstract.docx', 'CABEIHM - Student Council', 'Declined1', 'BatStateU Pablo Borbon Main II'),
(11, 'Seminar Evaluation Sheet', '42467741_1126486437501014_8898659912138096640_n.png', 'CABEIHM - Student Council', 'Declined1', 'BatStateU Pablo Borbon Main II'),
(12, 'Seminar Evaluation Sheet', 'abstract.docx', 'CABEIHM - Student Council', 'Declined1', 'BatStateU Pablo Borbon Main II'),
(13, 'Fieldtrip activity for ACCESS Main II', 'abstract.docx', 'ACCESS - Association of Committed Computer Science Students', 'Declined1', 'BatStateU Pablo Borbon Main II'),
(14, 'Seminar 2017', 'ACCOMPLISHMENT-REPORT2017-access (1).docx', 'ACCESS - Association of Committed Computer Science Students', 'Approved', 'BatStateU Pablo Borbon Main II'),
(15, 'Acquientance Party', 'FINAL DEFENSE GRADING SHEET.docx', 'CABEIHM - Student Council', 'Approved', 'BatStateU Pablo Borbon Main I');

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
-- Indexes for table `assess`
--
ALTER TABLE `assess`
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
-- Indexes for table `recordassess`
--
ALTER TABLE `recordassess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studform`
--
ALTER TABLE `studform`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assess`
--
ALTER TABLE `assess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `format`
--
ALTER TABLE `format`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `idreplace`
--
ALTER TABLE `idreplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `lost`
--
ALTER TABLE `lost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `org`
--
ALTER TABLE `org`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orga`
--
ALTER TABLE `orga`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `recordassess`
--
ALTER TABLE `recordassess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studform`
--
ALTER TABLE `studform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studformat`
--
ALTER TABLE `studformat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
