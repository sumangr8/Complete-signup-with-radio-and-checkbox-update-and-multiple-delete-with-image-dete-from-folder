-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2020 at 04:06 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ciproject1`
--
CREATE DATABASE IF NOT EXISTS `ciproject1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ciproject1`;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile` varchar(32) NOT NULL,
  `qualification` text NOT NULL,
  `city` varchar(32) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `path` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `mobile`, `qualification`, `city`, `pic`, `path`, `dob`, `gender`) VALUES
(78, 'Neha Kumari 1', 'neha@gmail.com', '123', '7828719993', 'MCA,BCA,B.Tech', 'patna', 'Koala.jpg', '', '2017-08-09', 'Female'),
(109, 'bunty kumari', 'buntu@gmail.com', '1234', '7828719993', 'MCA,BCA', '', 'Chrysanthemum.jpg', '', NULL, 'Female'),
(152, 'Rahul', 'rahul@gmail.com', '123', '7828719993', 'MCA,BCA', '', 'Ankit Chhapel.jpg', 'img/Ankit Chhapel.jpg', NULL, 'Female'),
(153, 'Shishu', 'shishu@gmail.com', '123', '7828719993', 'MCA,BCA', '', 'Chrysanthemum.jpg', 'img/Chrysanthemum.jpg', NULL, 'Female'),
(154, 'adity', 'aditi@gmail.com', '123', '7828719993', 'MCA,BCA', '', 'Desert.jpg', 'img/Desert.jpg', NULL, 'Female'),
(161, 'wwwwwww', 'wwww', 'wwwww', '', 'MCA,BCA', '', 'Koala.jpg', 'img/Koala.jpg', NULL, 'Male'),
(162, 'eeee', 'ravi.eq2@gmail.com', '123', '', 'BCA', '', 'Lighthouse.jpg', 'img/Lighthouse.jpg', NULL, 'Female'),
(163, 'rrr', 'ravi.eq2@gmail.com', '123', '', 'MCA', '', 'Penguins.jpg', 'img/Penguins.jpg', NULL, 'Male'),
(166, 'Yash sharma', 'ravi.eq2@gmail.com', '123', '', 'MCA', '', 'Desert.jpg', 'img/Desert.jpg', NULL, 'Male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
