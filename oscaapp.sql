-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2014 at 07:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oscaapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `dependents`
--

CREATE TABLE IF NOT EXISTS `dependents` (
  `depOscaId` int(15) NOT NULL,
  `depName` int(100) NOT NULL,
  `depOccupation` int(50) NOT NULL,
  `DepIdNo` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`DepIdNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `OSCAIDNO` int(15) NOT NULL,
  `surName` varchar(50) NOT NULL,
  `givenName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `houseNo` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `sitio` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `telNo` varchar(15) NOT NULL,
  `yearsOfResidency` int(3) NOT NULL,
  `birthDate` date NOT NULL,
  `age` int(3) NOT NULL,
  `civilStatus` enum('Single','Married','Divorced','Separated','Widowed') NOT NULL,
  `spouseName` varchar(100) NOT NULL,
  `spouseAge` int(3) NOT NULL,
  `workExp` varchar(250) NOT NULL,
  `educAttain` varchar(100) NOT NULL,
  `employed` tinyint(1) NOT NULL,
  `empPosition` varchar(100) NOT NULL,
  `salary` int(15) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `workAddress` text NOT NULL,
  `workTelNo` varchar(15) NOT NULL,
  `otherIncomeName` varchar(50) NOT NULL,
  `otherIncomePesos` int(15) NOT NULL,
  `philHealthNo` varchar(20) NOT NULL,
  `depPhilHealth` tinyint(1) NOT NULL,
  `depPhilHealthName` varchar(100) NOT NULL,
  `IssuedDate` date NOT NULL,
  `OSCAPIDNO` varchar(15) NOT NULL,
  PRIMARY KEY (`OSCAIDNO`),
  UNIQUE KEY `philHealthNo` (`philHealthNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oscapersonnel`
--

CREATE TABLE IF NOT EXISTS `oscapersonnel` (
  `oscaPersonnelName` int(100) NOT NULL,
  `oscaPersonnelIdNo` int(15) NOT NULL,
  `issuedSC` int(15) NOT NULL,
  PRIMARY KEY (`oscaPersonnelIdNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
