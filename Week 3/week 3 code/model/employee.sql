-- phpMyAdmin SQL Dump
-- version 4.0.10.19
-- https://www.phpmyadmin.net
--
-- Host: mysql.pipeten.co.uk
-- Generation Time: Aug 14, 2019 at 01:55 PM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `redgrit_iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eno` varchar(7) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `edepartment` varchar(30) NOT NULL,
  `ejob` varchar(30) NOT NULL,
  `ephone` varchar(30) NOT NULL,
  `eroom` varchar(30) NOT NULL,
  `eemail` varchar(30) NOT NULL,
  PRIMARY KEY (`eno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eno`, `ename`, `edepartment`, `ejob`, `ephone`, `eroom`, `eemail`) VALUES
('a111111', 'Alan Anderson', 'Animal', 'Lecturer', '8611', '1101', 'a.anderson@abertay.ac.uk'),
('b222222', 'Brian Brown', 'Animal', 'Lecturer', '8622', '2202', 'b.brown@abertay.ac.uk'),
('c333333', 'Charlie Campbell', 'Animal', 'Lecturer', '8633', '3303', 'c.campbell@abertay.ac.uk'),
('d444444', 'Diane Davidson', 'Computing', 'Senior Lecturer', '8644', '3303', 'd.davidson@abertay.ac.uk'),
('e555555', 'Erica England', 'Computing', 'Senior Lecturer', '8655', '5505', 'e.england@abertay.ac.uk'),
('f666666', 'Fred Fury', 'Physics', 'Lecturer', '8666', '6606', 'f.fury@abertay.ac.uk'),
('g777777', 'Gillian Gibson', 'Physics', 'Lecturer', '8677', '7707', 'g.gibson@abertay.ac.uk'),
('h8888', 'Harry Hill', 'Biology', 'Senior Lecturer', '8688', '8808', 'h.hill@abertay.ac.uk'),
('i999999', 'Inga Ibbot', 'Biology', 'Senior Lecturer', '8699', '9909', 'i.ibbot@abertay.ac.uk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
