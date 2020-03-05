-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 04:49 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amarproshno`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `answer` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `hobby` varchar(150) NOT NULL,
  `interesting` varchar(150) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `views` int(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_admin`, `username`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 0, 'abc', 'abc@gmail.com', '1234', '2017-04-23', '0000-00-00', '0000-00-00'),
(5, 0, 'shawon', 'shawon@gmail.com', 'qwerty', '2017-04-23', '0000-00-00', '0000-00-00'),
(4, 0, 'rabbir', 'rabbir@gmail.com', '123456', '0000-00-00', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
