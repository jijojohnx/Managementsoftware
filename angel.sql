-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2013 at 03:08 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `angel`
--

-- --------------------------------------------------------

--
-- Table structure for table `angel_settings`
--

CREATE TABLE IF NOT EXISTS `angel_settings` (
  `title` varchar(50) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angel_settings`
--

INSERT INTO `angel_settings` (`title`, `logo`) VALUES
('SeLogics management software', '../images/upload/2cb463fb78222ea7be096ee66e1674a0.png');

-- --------------------------------------------------------

--
-- Table structure for table `cpanel`
--

CREATE TABLE IF NOT EXISTS `cpanel` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `userRole` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpanel`
--

INSERT INTO `cpanel` (`Username`, `Password`, `userRole`) VALUES
('admin', '5f4dcc3b5aa765d61d8327deb882cf99', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
