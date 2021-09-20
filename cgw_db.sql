-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 19, 2021 at 05:26 PM
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
-- Database: `cgw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profilePhoto` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `profilePhoto`, `username`, `fullname`, `email_id`, `password`) VALUES
(6, 'Cyber-Gaming-World-Logo.png', 'munmun', 'Munmun Rahman', 'munmun@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'post-default.jpg', 'tarbiarswat', 'Tarbiar Swat', 'tarbiarswat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'subheader-dark.jpg', 'john01', 'John Doe', 'john@gmail.com', '123456'),
(5, '4.jpg', 'john022', 'Tarbiar Swat2', 'tarzan1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'istockphoto-486744506-612x612.jpg', 'mim1', 'Munmun Rahman', 'mim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `text`) VALUES
(1, 't1'),
(2, 't2');

-- --------------------------------------------------------

--
-- Table structure for table `gamers`
--

DROP TABLE IF EXISTS `gamers`;
CREATE TABLE IF NOT EXISTS `gamers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `user_profilePhoto` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gamerRanking` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gamers`
--

INSERT INTO `gamers` (`id`, `username`, `fullname`, `email_id`, `password`, `user_profilePhoto`, `created_at`, `gamerRanking`) VALUES
(1, 'ultron', 'John Doe', 'john01!gmail.com', '123456', 'NULL', '2021-09-11 17:14:24', 17),
(2, 'ultron2', 'Ultron Gaming', 'ultron2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'children-form-icon.png', '2021-09-17 22:46:32', NULL),
(3, 'paulsaasdev', 'Paul Saasdev', 'paul.saasdev@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'logout-icon.png', '2021-09-17 23:35:31', NULL),
(4, 'test1', 'Test Name', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'settings.png', '2021-09-17 23:45:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `gameName` varchar(100) NOT NULL,
  `gameCat` varchar(100) NOT NULL,
  `gameDesc` text NOT NULL,
  `gameDeveloperName` varchar(100) DEFAULT NULL,
  `gameRating` varchar(20) DEFAULT NULL,
  `g_featured_image` varchar(200) NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`game_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `gameName`, `gameCat`, `gameDesc`, `gameDeveloperName`, `gameRating`, `g_featured_image`, `posted_at`) VALUES
(3, 'Valorant', 'Action', 'This is a dummy description', 'Ubisoft', '8.9', 'Deep-Learning-vs-Machine-Learning.jpg', '2021-09-18 07:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `game_updates`
--

DROP TABLE IF EXISTS `game_updates`;
CREATE TABLE IF NOT EXISTS `game_updates` (
  `gmu_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `gameName` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `sourceLink` text,
  `gmu_featured_image` text NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`gmu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

DROP TABLE IF EXISTS `organizers`;
CREATE TABLE IF NOT EXISTS `organizers` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `o_profilePhoto` text NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`o_id`, `username`, `fullName`, `email_id`, `password`, `o_profilePhoto`) VALUES
(1, 'ucc_bd', 'UCC', 'uccbd@gmail.com', '123456', 'NULL'),
(2, 'startechbd', 'Star Tech', 'startech@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(4, 'globaltech', 'Global Tech Hub', 'globaltech@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(5, 'paulsaasdev', 'Paul Dev', 'paul.saasdev@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(6, 'paulsaasdev2', 'Paul Dev2', 'paul.saasdev2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1188-testingg.webp'),
(7, 'paulsaasdev3', 'Paul Dev23', 'paul.saasdev23@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'bug_bounty_more.jpg'),
(8, 'sdfsdfsdf', 'sdfsdfs', 'sfdsdfds@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ai-and-dev.jpg'),
(9, 'fsdfsd', 'sdfsdf', 'sfsdfsd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'hohs8swq3kxoldxg0crz.png'),
(10, 'dsfsdfsdf', 'sfdsdf', 'sdfsdfsd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'hohs8swq3kxoldxg0crz.png'),
(11, 'fdsfsdf', 'sdfsdf', 'sfsdfsdfsdfsd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'bug_bounty_more.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

DROP TABLE IF EXISTS `tournaments`;
CREATE TABLE IF NOT EXISTS `tournaments` (
  `trn_id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_title` varchar(100) NOT NULL,
  `gameName` varchar(100) NOT NULL,
  `tournamentType` varchar(15) NOT NULL,
  `tournamentDesc` text NOT NULL,
  `duration` varchar(10) NOT NULL,
  `playerCapacity` varchar(10) NOT NULL,
  `trn_featured_image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`trn_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`trn_id`, `tournament_title`, `gameName`, `tournamentType`, `tournamentDesc`, `duration`, `playerCapacity`, `trn_featured_image`, `created_at`) VALUES
(17, 'Valorant Season Final', 'Valorant', 'Free', 'This is a demo description This is a demo description This is a demo description This is a demo description This is a demo description This is a demo description This is a demo description This is a demo description This is a demo description ', '3', '12', 'register.png', '2021-09-17 17:55:30'),
(14, 'Valorant Season 1', 'Valorant', 'Free', 'This is a description This is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a description', '2', '2', 'n2.jpg', '2021-09-16 03:44:06'),
(16, 'Call of Duty season 3', 'Call of Duty', 'Paid', 'This is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a descriptionThis is a description', '3', '4', 'n3.jpg', '2021-09-16 04:15:42'),
(18, 'GTA Mod V1', 'GTA V Online', 'Paid', 'This is a description', '3', '5', 'ai-and-dev.jpg', '2021-09-18 21:12:04'),
(19, 'COD Beta', 'Call of Duty', 'Free', 'This is a description', '1', '20', 'ai.png', '2021-09-18 21:14:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
