-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2021 at 03:11 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projector`
--

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE IF NOT EXISTS `head` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`username`, `password`) VALUES
('maisol', 'maiso');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `Name` varchar(50) NOT NULL,
  `Tel` int(11) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` char(1) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `level` text NOT NULL,
  `Low_School` longtext NOT NULL,
  `High` longtext NOT NULL,
  `Grade` varchar(11) NOT NULL,
  `University` longtext NOT NULL,
  PRIMARY KEY (`Tel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Name`, `Tel`, `Birthday`, `Gender`, `Email`, `level`, `Low_School`, `High`, `Grade`, `University`) VALUES
('whitney nyambura nyauma', 202028282, '2021-03-15', 'G', 'weebb@gmail.com', 'University', 'Shoeleri Academy', 'Mwongori High School', 'B-', 'Africa Nazarene University'),
('David Maisol Gekonge', 794631367, '2021-03-14', 'G', 'davidmaiso18@gmail.com', 'University', 'Shoeleri Academy', 'Mwongori High School', 'B-', 'Africa Nazarene University');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Firstname` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` char(1) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Transfer_From` text NOT NULL,
  `Transfer_to` text NOT NULL,
  `Program` text NOT NULL,
  `Indoors` longtext NOT NULL,
  `Outdoors` longtext NOT NULL,
  `Science` longtext NOT NULL,
  `General` longtext NOT NULL,
  `Societies` longtext NOT NULL,
  `Comments` longtext NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Firstname`, `Surname`, `Lastname`, `StudentID`, `Birthday`, `Gender`, `Email`, `Transfer_From`, `Transfer_to`, `Program`, `Indoors`, `Outdoors`, `Science`, `General`, `Societies`, `Comments`) VALUES
('David', 'Maisol', 'Gekonge', 43543, '2021-03-09', 'm', 'david@gmail.com', 'Africa Nazarene University', 'Strathmore University', 'Business Information technology', 'NULL', 'Rugby', 'NULL', 'NULL', 'First Aid & Emergency', 'Gym instructor'),
('Denis', 'naliaka', 'Cluds', 4342, '2021-03-12', 'm', 'deno7@gmail.com', 'Africa Nazarene University', 'MMUST', 'Business Information technology', 'Karate', 'NULL', 'Physics Club', 'NULL', 'NULL', 'sjdkwjoiduoicjk'),
('Denis', 'Mike', 'Cluds', 46645, '2021-03-14', 'm', 'example17@gmail.com', 'KU', 'Strathmore University', 'Law', 'NULL', 'Soccer', 'Innovation Club', 'NULL', 'NULL', 'rgerrthytujytjhgf'),
('John', 'Mwiki', 'Mwikali', 234234, '2021-03-03', 'm', 'jogn@gmail.com', 'Africa Nazarene University', 'MMUST', 'Business Information technology', 'BasketBall', 'NULL', 'Innovation Club', 'NULL', 'NULL', 'we glad'),
('Whitney', 'naliaka', 'nekesa', 23434, '2021-03-09', 'f', 'whitney@gmail.com', 'KU', 'MMUST', 'Law', 'T.Tenis', 'NULL', 'NULL', 'others', 'NULL', 'Love community work');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `level`, `password`) VALUES
(47, 'David', 'davidmaiso18@gmail.com', 'university', '040b7cf4a55014e185813e0644502ea9'),
(49, 'whitney', 'whitney@gmail.com', 'high school', 'a384b6463fc216a5f8ecb6670f86456a'),
(50, 'John', 'john@gmail.com', 'University', '827ccb0eea8a706c4c34a16891f84e7b'),
(51, 'cliff', 'cliff@gmail', 'University', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
