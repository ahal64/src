-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2015 at 01:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fitie2015t11dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencygroups`
--

CREATE TABLE IF NOT EXISTS `agencygroups` (
  `agencygroupid` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(255) NOT NULL,
  PRIMARY KEY (`agencygroupid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `agencyoffices`
--

CREATE TABLE IF NOT EXISTS `agencyoffices` (
  `agencyofficeid` int(11) NOT NULL AUTO_INCREMENT,
  `agencyname` varchar(20) NOT NULL,
  `customercode` varchar(20) NOT NULL,
  `abn` varchar(11) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `address1` varchar(20) DEFAULT NULL,
  `address2` varchar(20) DEFAULT NULL,
  `suburb` varchar(20) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `agencygroupid` int(11) DEFAULT NULL,
  PRIMARY KEY (`agencyofficeid`),
  KEY `agencygroupkey` (`agencygroupid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `agencystaffs`
--

CREATE TABLE IF NOT EXISTS `agencystaffs` (
  `agencyofficeid` int(11) NOT NULL,
  `agencystaffid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`agencystaffid`),
  KEY `agencyofficeid_fk` (`agencyofficeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `equipid` int(11) NOT NULL AUTO_INCREMENT,
  `eqtypeid` int(11) NOT NULL,
  `name` varchar(120) CHARACTER SET latin1 NOT NULL,
  `notes` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `installationdate` date DEFAULT NULL,
  `existing_or_required` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `barcode` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`equipid`),
  KEY `eqtypeid` (`eqtypeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `equipmenttypes`
--

CREATE TABLE IF NOT EXISTS `equipmenttypes` (
  `eqtypeid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET latin1 NOT NULL,
  `description` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`eqtypeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `equ_prop`
--

CREATE TABLE IF NOT EXISTS `equ_prop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipid` int(11) NOT NULL,
  `propertiesid` int(11) NOT NULL,
  `duedate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipid` (`equipid`,`propertiesid`),
  KEY `propertiesid` (`propertiesid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `jobid` int(11) NOT NULL AUTO_INCREMENT,
  `propertiesid` int(11) NOT NULL,
  `equipid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `jobdesc` varchar(120) CHARACTER SET latin1 NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`jobid`),
  KEY `equipid` (`equipid`),
  KEY `userid` (`userid`),
  KEY `propertiesid` (`propertiesid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `landlords`
--

CREATE TABLE IF NOT EXISTS `landlords` (
  `landlordid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address1` varchar(20) DEFAULT NULL,
  `address2` varchar(20) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `homephone` varchar(11) DEFAULT NULL,
  `officephone` varchar(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`landlordid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `occupants`
--

CREATE TABLE IF NOT EXISTS `occupants` (
  `occid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `officephone` varchar(11) DEFAULT NULL,
  `homephone` varchar(11) DEFAULT NULL,
  `otherphone` int(12) DEFAULT NULL,
  PRIMARY KEY (`occid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `propertiesid` int(11) NOT NULL AUTO_INCREMENT,
  `agencyofficeid` int(11) NOT NULL,
  `propertymanager` varchar(20) DEFAULT NULL,
  `keynumber` varchar(20) DEFAULT NULL,
  `buildingclass` varchar(20) DEFAULT NULL,
  `occupancypermit` varchar(20) DEFAULT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `propertystatus` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`propertiesid`),
  KEY `agencyofficeid` (`agencyofficeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `standards`
--

CREATE TABLE IF NOT EXISTS `standards` (
  `standardid` int(11) NOT NULL AUTO_INCREMENT,
  `equipid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `actionrequired` varchar(50) DEFAULT NULL,
  `passorfail` char(1) DEFAULT NULL,
  `extracomments` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`standardid`),
  KEY `equipid` (`equipid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `tasksid` int(11) NOT NULL AUTO_INCREMENT,
  `standardid` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `duedate` date DEFAULT NULL,
  `status` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`tasksid`),
  KEY `standardid` (`standardid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `role`) VALUES
(3, 'jason', '$2y$10$yPJEHMyslJ9mh6pw3yA3b.damnNmUXweRCUq7N4bl0ki7z0NFguCq', 'aaa', 'aaa', 'ADMIN'),
(9, 'david', '$2y$10$8Eeo8YNQcsNFfZ0ghudKyubmszX6dWXLfhnRrN8MxXzy3HemgxZlO', 'david', 'grant', 'ADMIN'),
(10, 'brendon', '$2y$10$t9jBmc9P1RtDjQKtVcahz.noBVmehfgmw1SqcwOKv.rlhoKigl60i', 'brendon', 'taylor', 'ADMIN');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agencyoffices`
--
ALTER TABLE `agencyoffices`
  ADD CONSTRAINT `agencyoffices_ibfk_1` FOREIGN KEY (`agencygroupid`) REFERENCES `agencygroups` (`agencygroupid`);

--
-- Constraints for table `agencystaffs`
--
ALTER TABLE `agencystaffs`
  ADD CONSTRAINT `agencystaffs_ibfk_1` FOREIGN KEY (`agencyofficeid`) REFERENCES `agencyoffices` (`agencyofficeid`);

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`eqtypeid`) REFERENCES `equipmenttypes` (`eqtypeid`);

--
-- Constraints for table `equ_prop`
--
ALTER TABLE `equ_prop`
  ADD CONSTRAINT `equ_prop_ibfk_1` FOREIGN KEY (`equipid`) REFERENCES `equipment` (`equipid`),
  ADD CONSTRAINT `equ_prop_ibfk_2` FOREIGN KEY (`propertiesid`) REFERENCES `properties` (`propertiesid`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`propertiesid`) REFERENCES `properties` (`propertiesid`),
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`equipid`) REFERENCES `equipment` (`equipid`),
  ADD CONSTRAINT `jobs_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_4` FOREIGN KEY (`agencyofficeid`) REFERENCES `agencyoffices` (`agencyofficeid`);

--
-- Constraints for table `standards`
--
ALTER TABLE `standards`
  ADD CONSTRAINT `standards_ibfk_1` FOREIGN KEY (`equipid`) REFERENCES `equipment` (`equipid`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`standardid`) REFERENCES `standards` (`standardid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
