-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 11:04 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `position`, `password`) VALUES
(1, 'grace', 'grace'),
(0, '15e5c87b18c1289d45bb4a72961b58e8', ''),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `username`, `email`, `password`) VALUES
('grace', 'grace', 'grace', 'grace@gmail.com', '15e5c87b18c1289d45bb4a72961b58e8'),
('grace', 'wanjiru', 'grace', 'grace@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
('martin', 'martin', 'martin', 'mart@yahoo.com', '925d7518fc597af0e43f5606f9a51512'),
('kanaa', 'kana', 'kana', 'kate59munyanga@gmail.com', '0c4cc1b74cde0fc1ecadec54429dcc01'),
('edwin', 'wachira', 'edu', 'wach@gmail', 'aef5a7530aaa272bbaec34e49251b25a'),
('grace', 'shii', 'shii', 'shii@gmail.com', '91a64a97348064343db549d7427ad195'),
('grace', 'shii', 'shii', 'shii@gmail.com', '15e5c87b18c1289d45bb4a72961b58e8');

-- --------------------------------------------------------

--
-- Table structure for table `gents`
--

CREATE TABLE IF NOT EXISTS `gents` (
  `age` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gents`
--

INSERT INTO `gents` (`age`, `size`, `price`) VALUES
('old', 'normal', 'average'),
('teen', 'big', 'costly');

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE IF NOT EXISTS `kids` (
  `age` varchar(100) NOT NULL,
  `size` varchar(80) NOT NULL,
  `price` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`age`, `size`, `price`) VALUES
('babies', 'big', 'average');

-- --------------------------------------------------------

--
-- Table structure for table `ladies`
--

CREATE TABLE IF NOT EXISTS `ladies` (
  `age` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ladies`
--

INSERT INTO `ladies` (`age`, `size`, `price`) VALUES
('medium', 'normal', 'average'),
('medium', 'big', 'cheap'),
('medium', 'big', 'costly'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `amount` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `username`, `type`, `amount`, `code`) VALUES
(1, 'martin', 'Premium', 8000, 'rdfgjh45667890');
