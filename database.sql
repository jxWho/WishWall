-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 26, 2014 at 05:23 AM
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
  `Address` text,
  `Email` varchar(30) DEFAULT NULL,
  `PhoneNumber` int(13) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UserID`, `UserName`, `Password`, `Contribution`, `Address`, `Email`, `PhoneNumber`) VALUES
(1, 'Ron', '111111', 0, NULL, NULL, NULL),
(2, 'JX', '111111', 0, NULL, NULL, NULL),
(3, 'JB', '1', 0, NULL, NULL, NULL),
(5, 'JJJ', '1', 0, NULL, NULL, NULL),
(6, 'JJ', '1', 0, NULL, NULL, NULL),
(7, 'kkk', '1', 0, NULL, NULL, NULL),
(8, 'kkks', '1', 0, NULL, NULL, NULL),
(9, 'kkkssdf', '1', 0, NULL, NULL, NULL),
(10, 'kkkssdfsd', '1', 0, NULL, NULL, NULL),
(11, 'kkkssdfsdsd', '1', 0, NULL, NULL, NULL),
(12, 'sdkkkssdfsdsd', '1', 0, NULL, NULL, NULL),
(13, 'sdkkkssdfsdsda', '1', 0, NULL, NULL, NULL),
(14, 'sdkkkssdfsdsdas', '1', 0, NULL, NULL, NULL),
(15, 'JXsdf', '1', 0, NULL, NULL, NULL),
(16, 'JXsdfs', '1', 0, NULL, NULL, NULL),
(17, 'JXsdfsdf', '1', 0, NULL, NULL, NULL),
(18, 'sJXsdfsdf', '1', 0, NULL, NULL, NULL),
(19, 'sJXsdfsdfsdf', '1', 0, NULL, NULL, NULL),
(20, 'JJsdf', '1', 0, NULL, NULL, NULL),
(21, 'JJsdfdsf', '1', 0, NULL, NULL, NULL),
(22, 'JJsdfdsfasdf1', '1', 0, NULL, NULL, NULL),
(23, 'JJsdfdsfasdf1asd', '1', 0, NULL, NULL, NULL),
(24, 'JJsdfdsfasdf1asd', '1', 0, NULL, NULL, NULL),
(25, 'JJsdfdsfasdf1asd', '1', 0, NULL, NULL, NULL),
(26, 'sdfJJsdfdsfasdf1', '1', 0, NULL, NULL, NULL),
(27, 'sdfsdffff', '1', 0, NULL, NULL, NULL),
(28, 'sdfsdffffsdf', '1', 0, NULL, NULL, NULL),
(29, 'sdfsdffffsdfsdf', '1', 0, NULL, NULL, NULL),
(30, 'sdfsdffffsdfsdfs', '1', 0, NULL, NULL, NULL),
(31, 'sdfsdffffsdfsdfs', '1', 0, NULL, NULL, NULL),
(32, 'sdfsdffffsdfsdfs', '1', 0, NULL, NULL, NULL),
(33, 'kkkl', '1', 0, NULL, NULL, NULL),
(34, 'kskkl', '1', 0, NULL, NULL, NULL),
(35, 'kskklsdf', '1', 0, NULL, NULL, NULL),
(36, 'kskklsdfs', '1', 0, NULL, NULL, NULL),
(37, 'kskklsdfssdf', '1', 0, NULL, NULL, NULL),
(38, 'kskklsdfssdfs', '1', 0, NULL, NULL, NULL),
(39, 'kskklsdfssdfssdf', '1', 0, NULL, NULL, NULL),
(40, 'JXsdfsdfasd', '1', 0, NULL, NULL, NULL),
(41, 'JXsdfsdfasdsadf', '1', 0, NULL, NULL, NULL),
(42, 'JXsdfsdfasdsadfs', '1', 0, NULL, NULL, NULL),
(43, 'JXsdfsdfasdsadfs', '1', 0, NULL, NULL, NULL),
(44, 'JXsdfsdfasdsasdf', '1', 0, NULL, NULL, NULL),
(45, 'asdfasdfJXsdfsdf', '1', 0, NULL, NULL, NULL),
(46, 'JXsdfwwww', '1', 0, NULL, NULL, NULL),
(47, 'JXsdfwwwws', '1', 0, NULL, NULL, NULL),
(48, 'JXasdf1', '1', 0, NULL, NULL, NULL),
(49, 'JXasdf1asdf', '1', 0, NULL, NULL, NULL),
(50, 'JXasdf1asdfasdf', '1', 0, NULL, NULL, NULL),
(51, 'JXasdf1asdfasdfs', '1', 0, NULL, NULL, NULL),
(52, 'JXasdf1asdfasdfs', '1', 0, NULL, NULL, NULL),
(53, 'JXasdf1asdfasdfs', '1', 0, NULL, NULL, NULL),
(54, 'JXsdwrrt', '1', 0, NULL, NULL, NULL),
(55, 'JXsdwrrtmms', '1', 0, NULL, NULL, NULL),
(56, 'JXsdwrrtmmswa', '1', 0, NULL, NULL, NULL),
(57, 'JXsdwrrtmmswap', '1', 0, NULL, NULL, NULL),
(58, 'godd', '1', 0, NULL, NULL, NULL),
(59, 'godds', '1', 0, NULL, NULL, NULL),
(60, 'killme', '1', 0, NULL, NULL, NULL),
(61, 'wfsdf', '1', 0, NULL, NULL, NULL);

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
  `WishMaker` int(11) DEFAULT NULL,
  `WishHelper` int(11) DEFAULT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`WishID`),
  KEY `WishMaker` (`WishMaker`),
  KEY `WishHelper` (`WishHelper`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Wishes`
--

INSERT INTO `Wishes` (`WishID`, `Date`, `Title`, `Description`, `ExpireDate`, `WishMaker`, `WishHelper`, `Status`) VALUES
(1, '2014-04-20', 'GPA', 'GPA4.0 with doubt', '2014-04-30', 1, NULL, 0),
(2, '2014-04-25', 'God', 'Idk', '2014-04-29', 2, 1, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`WishID`) REFERENCES `Wishes` (`WishID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`);

--
-- Constraints for table `Wishes`
--
ALTER TABLE `Wishes`
  ADD CONSTRAINT `wishes_ibfk_1` FOREIGN KEY (`WishMaker`) REFERENCES `Users` (`UserID`),
  ADD CONSTRAINT `wishes_ibfk_2` FOREIGN KEY (`WishHelper`) REFERENCES `Users` (`UserID`);
