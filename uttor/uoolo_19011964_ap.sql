-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql306.ihostfull.com
-- Generation Time: Apr 23, 2017 at 01:39 AM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uoolo_19011964_ap`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `answer` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=8 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `user_id`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, 1, 'amarproshno.com is a question-and-answer site where questions are asked and answered. Followings are the user stories of this project w. In real life, there will be lots of user stories of this kind of projects. Since you have to complete this one within a very short time, we have included several user stories instead of all and even kept the stories simple also.  However, please note that you are not allowed to change any story.', '0000-00-00', '0000-00-00', '0000-00-00'),
(7, 5, 1, '<p>Hi, how are you?</p>', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `hobby` varchar(150) NOT NULL,
  `interesting` varchar(150) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `views` int(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=6 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `title`, `description`, `views`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'What is it?', '<p>I don''t understand where am i and what is it</p>', 7, '0000-00-00', '0000-00-00', '0000-00-00'),
(2, 1, 'What is AmarProsno?', '<p>I am new to this website.<b> May i know for what this site is?</b> And <b>what is the purposes of using this website?</b></p>', 23, '0000-00-00', '0000-00-00', '0000-00-00'),
(3, 1, 'hello', '<p>means</p>', 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(4, 1, 'What is ALU?', '<p>Arithmatic Logic Unit.</p>', 3, '0000-00-00', '0000-00-00', '0000-00-00'),
(5, 1, 'hello!!!', '<p>This is Arpita</p>', 8, '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_admin` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_admin`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'Md. Rabbir', 'Al-amin', 'md.rabbir.alamin03@gmail.com', 'abcdefg', '0000-00-00', '0000-00-00', '0000-00-00'),
(2, 0, 'Hiramon', 'Rangder', 'hiramonrangder2013@gmail.com', '123456', '0000-00-00', '0000-00-00', '0000-00-00'),
(3, 0, 'Robiul', 'Islam', 'islamrobiul665@gmail.com', 'qwerty', '0000-00-00', '0000-00-00', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
