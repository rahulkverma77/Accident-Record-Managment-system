-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2018 at 05:59 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `accidentrecord`
--
CREATE DATABASE IF NOT EXISTS `accidentrecord` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `accidentrecord`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` int(9) NOT NULL AUTO_INCREMENT,
  `ad_username` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `ad_password` varchar(200) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_username`, `ad_password`) VALUES
(1, 'admin', 'admin'),
(2, 'donbok', 'donbok');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `r_id` int(9) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `place` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `dt` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `kill` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `wound` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `v_type` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `v_number` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `reason` varchar(200) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`r_id`, `type`, `place`, `dt`, `kill`, `wound`, `v_type`, `v_number`, `reason`) VALUES
(1, 'Minor', 'Umiam', '02/01/2018 10:02:18:PM', '2', '20', '2', 'ML05D 4392', 'Flat Tire Bumb to electrict Post'),
(2, 'Major', 'Damsait', '11/23/2018 10:10:56 AM', '19', '9', '2', 'AS09D 4938', 'Direct Hit with a Dumper');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `t_id` int(9) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`t_id`, `type`) VALUES
(1, 'Major'),
(2, 'Minor');

-- --------------------------------------------------------

--
-- Table structure for table `v_type`
--

CREATE TABLE IF NOT EXISTS `v_type` (
  `v_id` int(9) NOT NULL AUTO_INCREMENT,
  `v_type` varchar(200) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `v_type`
--

INSERT INTO `v_type` (`v_id`, `v_type`) VALUES
(1, 'Truck'),
(2, 'Bus'),
(3, 'Pickup'),
(4, 'Mini Van'),
(5, 'Car '),
(6, 'Auto'),
(7, 'Two Wheeler');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
