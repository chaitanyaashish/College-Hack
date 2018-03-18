-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 17, 2018 at 05:59 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegehack`
--

-- --------------------------------------------------------

--
-- Table structure for table `amul`
--

DROP TABLE IF EXISTS `amul`;
CREATE TABLE IF NOT EXISTS `amul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) DEFAULT NULL,
  `status` enum('AVAILABLE','NOT AVAILABLE') NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `item` (`item`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amul`
--

INSERT INTO `amul` (`id`, `item`, `status`, `price`) VALUES
(2, 'Frostik', 'NOT AVAILABLE', 25),
(3, 'Sundae', 'AVAILABLE', 25),
(4, 'Amul Cool', 'AVAILABLE', 25);

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

DROP TABLE IF EXISTS `canteen`;
CREATE TABLE IF NOT EXISTS `canteen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) DEFAULT NULL,
  `STATUS` enum('AVAILABLE','NOT AVAILABLE') DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `item` (`item`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`ID`, `item`, `STATUS`, `price`) VALUES
(10, 'dosa', 'NOT AVAILABLE', 25),
(3, 'Chicken Roll', 'AVAILABLE', 40),
(4, 'Egg Chicken Roll', 'AVAILABLE', 45),
(5, 'Paneer Roll', 'NOT AVAILABLE', 40),
(6, 'Maggi', 'NOT AVAILABLE', 20),
(9, 'Masala Maggi', 'AVAILABLE', 25);

-- --------------------------------------------------------

--
-- Table structure for table `dispensary`
--

DROP TABLE IF EXISTS `dispensary`;
CREATE TABLE IF NOT EXISTS `dispensary` (
  `NAME` varchar(50) DEFAULT NULL,
  `FIELD` varchar(100) DEFAULT NULL,
  `attendence` enum('PRESENT','ABSENT') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispensary`
--

INSERT INTO `dispensary` (`NAME`, `FIELD`, `attendence`) VALUES
('Dr. Madhu Arora', 'General Physicial', 'ABSENT'),
('Dr. Sudhir Goswami', 'General Physicial', 'ABSENT'),
('Dr. Sanjay Sonkar', 'Orthopedician', 'ABSENT'),
('Dr. Kavita Tripathi ', 'Gynecologist', 'ABSENT'),
('Dr. Shirish Verma', 'Pathologist', 'ABSENT'),
('Dr. Sapan Jha', 'Opthalmologist', 'ABSENT');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
CREATE TABLE IF NOT EXISTS `facilities` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FACILITY` varchar(30) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `status` enum('OPEN','CLOSED') NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`ID`, `FACILITY`, `USERNAME`, `PASSWORD`, `status`) VALUES
(1, 'CANTEEN', 'canteennit@gmail.com', 'ea499afdeef66ded657c70864f0c7b95', 'CLOSED'),
(2, 'MESS-A', 'MessA@gmail.com', '6eea9b7ef19179a06954edd0f6c05ceb', 'CLOSED'),
(3, 'MESS-B', 'MessB@nitrr.com', '6eea9b7ef19179a06954edd0f6c05ceb', 'CLOSED'),
(4, 'Stationary', 'Stationary@nitrr.com', '6eea9b7ef19179a06954edd0f6c05ceb', 'CLOSED'),
(5, 'Dispensary', 'Dispensary@nitrr.com', '6eea9b7ef19179a06954edd0f6c05ceb', 'CLOSED'),
(6, 'Amul Parlor', 'Amul@nitrr.com', '6eea9b7ef19179a06954edd0f6c05ceb', 'CLOSED');

-- --------------------------------------------------------

--
-- Table structure for table `menu_a`
--

DROP TABLE IF EXISTS `menu_a`;
CREATE TABLE IF NOT EXISTS `menu_a` (
  `day` int(11) NOT NULL,
  `BREAKFAST` varchar(50) DEFAULT NULL,
  `LUNCH` varchar(50) DEFAULT NULL,
  `SNACKS` varchar(50) DEFAULT NULL,
  `DINNER` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`day`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_a`
--

INSERT INTO `menu_a` (`day`, `BREAKFAST`, `LUNCH`, `SNACKS`, `DINNER`) VALUES
(1, 'poha', 'aloo fry', 'veg roll', 'bhindi'),
(2, 'aloo paratha', 'chole', 'bhel', 'gobhi'),
(3, 'pav bhaji', 'rajma', 'corn chat', 'kundru'),
(4, 'puri sabzi', 'siyabean', 'paani puri', 'egg curry'),
(5, 'Sambhar Vada', 'lauki', 'samosa', 'Paneer'),
(6, 'Dosa', 'Tamato Chutney', 'Vada Pav', 'Gutta'),
(7, 'Uttapam', 'Chicken', 'Cream Roll', 'Chicken');

-- --------------------------------------------------------

--
-- Table structure for table `menu_b`
--

DROP TABLE IF EXISTS `menu_b`;
CREATE TABLE IF NOT EXISTS `menu_b` (
  `day` int(11) DEFAULT NULL,
  `breakfast` varchar(50) DEFAULT NULL,
  `lunch` varchar(50) DEFAULT NULL,
  `snacks` varchar(50) DEFAULT NULL,
  `dinner` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_b`
--

INSERT INTO `menu_b` (`day`, `breakfast`, `lunch`, `snacks`, `dinner`) VALUES
(1, 'poha', 'aloo fry', 'veg roll', 'bhindi'),
(2, 'aloo paratha', 'chole', 'bhel', 'gobhi'),
(3, 'pav bhaji', 'rajma', 'corn chat', 'kundru'),
(4, 'puri sabzi', 'siyabean', 'paani puri', 'egg curry'),
(5, 'Sambhar Vada', 'lauki', 'samosa', 'Paneer'),
(6, 'Dosa', 'Gutte', 'vada pav', 'Tamatar Chutney'),
(7, 'Uttapam', 'Chicken', 'Cream Roll', 'Chicken');

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

DROP TABLE IF EXISTS `stationary`;
CREATE TABLE IF NOT EXISTS `stationary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationary`
--

INSERT INTO `stationary` (`id`, `item`, `price`) VALUES
(1, 'Notebook', 30),
(2, 'Practical Notebook', 35),
(3, 'Assignment Copy', 15),
(4, 'Black n White Print', 3),
(5, 'Coloured Print', 5),
(6, 'Photocopy per page', 1),
(7, 'ED Board', 350),
(8, 'Drafter', 150);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
