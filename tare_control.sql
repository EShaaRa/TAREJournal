-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2015 at 10:56 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tare_control`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_manus`
--

CREATE TABLE IF NOT EXISTS `accepted_manus` (
  `manu_id` int(11) NOT NULL,
  `accepted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `corresponding_authors`
--

CREATE TABLE IF NOT EXISTS `corresponding_authors` (
`ca_id` int(11) NOT NULL,
  `title` enum('Dr','Prof','Mr','Mrs','Miss') NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `uni` varchar(500) NOT NULL,
  `manu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `manuscipt_authors`
--

CREATE TABLE IF NOT EXISTS `manuscipt_authors` (
`manu_author_id` int(11) NOT NULL,
  `manu_author_fname` varchar(100) NOT NULL,
  `manu_author_lname` varchar(100) NOT NULL,
  `manu_author_email` varchar(100) NOT NULL,
  `manu_author_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `manuscript`
--

CREATE TABLE IF NOT EXISTS `manuscript` (
`manu_id` int(11) NOT NULL,
  `manu_type` varchar(100) NOT NULL,
  `manu_title` varchar(1000) NOT NULL,
  `manu_file` int(11) NOT NULL,
  `manu_sub` varchar(200) NOT NULL,
  `manu_abstract` varchar(5000) NOT NULL,
  `manu_keywords` varchar(500) NOT NULL,
  `manu_authors` int(11) NOT NULL,
  `manu_submitted_date` date NOT NULL,
  `manu_status` enum('Under Review','Accepted','Rejected') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rejected_manus`
--

CREATE TABLE IF NOT EXISTS `rejected_manus` (
  `manu_id` int(11) NOT NULL,
  `rejected_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `user_title` varchar(50) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_lname` varchar(100) DEFAULT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_mobile` int(20) NOT NULL,
  `user_tp` int(20) DEFAULT NULL,
  `user_address` varchar(500) NOT NULL,
  `user_country` varchar(50) NOT NULL,
  `user_job` varchar(100) DEFAULT NULL,
  `user_role` varchar(200) NOT NULL,
  `user_pic` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `password`, `user_title`, `user_fname`, `user_lname`, `user_gender`, `user_email`, `user_mobile`, `user_tp`, `user_address`, `user_country`, `user_job`, `user_role`, `user_pic`) VALUES
(1, '11', '6512bd43d9caa6e02c990b0a82652dca', 'Prof', 'a', 'a', 'Male', 'a@a.lk', 11, 11, 'a', 'Japan', '11', 'Author,Reviewer', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_reviewer`
--

CREATE TABLE IF NOT EXISTS `tbl_user_reviewer` (
  `user_area` varchar(1000) NOT NULL,
  `user_academic` varchar(2000) NOT NULL,
  `user_journals` varchar(1000) NOT NULL,
  `user_experience` int(11) NOT NULL,
  `Revi_user_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_reviewer`
--

INSERT INTO `tbl_user_reviewer` (`user_area`, `user_academic`, `user_journals`, `user_experience`, `Revi_user_email`) VALUES
('11,22,12,21', '11', '11', 11, 'a@a.lk');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
`user_group_id` int(11) NOT NULL,
  `user_group_name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`user_group_id`, `user_group_name`) VALUES
(1, 'Author'),
(2, 'Reviewer'),
(3, 'Editorial_Assistant'),
(4, 'Editorial_Board');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_groups`
--

CREATE TABLE IF NOT EXISTS `user_has_groups` (
  `user_id` int(11) NOT NULL,
  `user_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_has_groups`
--

INSERT INTO `user_has_groups` (`user_id`, `user_group_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 3),
(3, 2),
(3, 3),
(4, 1),
(5, 1),
(5, 2),
(6, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_manus`
--
ALTER TABLE `accepted_manus`
 ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `corresponding_authors`
--
ALTER TABLE `corresponding_authors`
 ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `manuscipt_authors`
--
ALTER TABLE `manuscipt_authors`
 ADD PRIMARY KEY (`manu_author_id`);

--
-- Indexes for table `manuscript`
--
ALTER TABLE `manuscript`
 ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `rejected_manus`
--
ALTER TABLE `rejected_manus`
 ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_reviewer`
--
ALTER TABLE `tbl_user_reviewer`
 ADD UNIQUE KEY `Revi_user_email` (`Revi_user_email`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
 ADD PRIMARY KEY (`user_group_id`);

--
-- Indexes for table `user_has_groups`
--
ALTER TABLE `user_has_groups`
 ADD PRIMARY KEY (`user_id`,`user_group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corresponding_authors`
--
ALTER TABLE `corresponding_authors`
MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manuscipt_authors`
--
ALTER TABLE `manuscipt_authors`
MODIFY `manu_author_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manuscript`
--
ALTER TABLE `manuscript`
MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
MODIFY `user_group_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
