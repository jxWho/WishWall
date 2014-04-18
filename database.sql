-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 18, 2014 at 10:22 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `WishWall`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `CommentID` int(11) NOT NULL AUTO_INCREMENT,
    `WishID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
    `Date` date NOT NULL,
  `Content` text NOT NULL,
    PRIMARY KEY (`CommentID`),
  KEY `WishID` (`WishID`),
    KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
    `UserName` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL,
    `Contribution` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserID`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Wishes`
--

CREATE TABLE `Wishes` (
  `WishID` int(11) NOT NULL AUTO_INCREMENT,
    `Date` date NOT NULL,
  `Title` varchar(20) NOT NULL,
    `Description` text NOT NULL,
  `ExpireDate` date NOT NULL,
    `WishMaker` int(11) NOT NULL,
  `WishHelper` int(11) NOT NULL,
    `Status` int(11) NOT NULL,
  PRIMARY KEY (`WishID`),
    KEY `WishMaker` (`WishMaker`),
  KEY `WishHelper` (`WishHelper`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`),
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`WishID`) REFERENCES `Wishes` (`WishID`);

--
-- Constraints for table `Wishes`
--
ALTER TABLE `Wishes`
  ADD CONSTRAINT `wishes_ibfk_2` FOREIGN KEY (`WishHelper`) REFERENCES `Users` (`UserID`),
  ADD CONSTRAINT `wishes_ibfk_1` FOREIGN KEY (`WishMaker`) REFERENCES `Users` (`UserID`);

