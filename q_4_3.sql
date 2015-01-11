-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2015 at 12:20 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `award5`
--

-- --------------------------------------------------------

--
-- Table structure for table `q_4_3`
--

CREATE TABLE IF NOT EXISTS `q_4_3` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_name` text NOT NULL,
  `q_type` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `q_4_3`
--

INSERT INTO `q_4_3` (`q_id`, `q_name`, `q_type`, `data_id`) VALUES
(1, 'Tahun', 0, 0),
(2, 'Realisasi Penanaman Modal (Rp)', 1, 0),
(3, 'Realisasi Tenaga Kerja (Org)', 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
