-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2017 at 08:27 AM
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
('kanaa', 'kana', 'kana', 'kate59munyanga@gmail.com', '0c4cc1b74cde0fc1ecadec54429dcc01');

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
('medium', 'big', 'average');

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE IF NOT EXISTS `kids` (
  `age` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`age`, `size`, `price`) VALUES
('youth', 'big', 'costly'),
('teen', 'big', 'average');

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
('medium', 'big', 'costly');
