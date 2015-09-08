-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2015 at 11:21 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `health_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('ab6ded806775f2d501f1ce3d985e5598', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', 1441531245, '');

-- --------------------------------------------------------

--
-- Table structure for table `table_guidelines`
--

CREATE TABLE IF NOT EXISTS `table_guidelines` (
`guideline_id` int(255) NOT NULL,
  `guideline_content` varchar(255) NOT NULL,
  `guideline_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table_municipal`
--

CREATE TABLE IF NOT EXISTS `table_municipal` (
`municipal_id` int(255) NOT NULL,
  `municipal` varchar(255) NOT NULL,
  `municipal_account` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `table_municipal`
--

INSERT INTO `table_municipal` (`municipal_id`, `municipal`, `municipal_account`) VALUES
(1, 'Carmen', '9000'),
(2, 'Iponan', ''),
(3, 'Bonbon', ''),
(4, 'Bayabas', ''),
(5, 'Patag', ''),
(6, 'Balulang', ''),
(7, 'Macanhan', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_news`
--

CREATE TABLE IF NOT EXISTS `table_news` (
`news_id` int(255) NOT NULL,
  `municipal_id` int(255) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_content` varchar(255) NOT NULL,
  `news_author` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `table_news`
--

INSERT INTO `table_news` (`news_id`, `municipal_id`, `news_title`, `news_content`, `news_author`) VALUES
(1, 1, 'Dengue Outbreak!', 'Dengue here, there and everywhere! Dengue here, there and everywhere! Dengue here, there and everywhere! Dengue here, there and everywhere! Dengue here, there and everywhere! Dengue here, there and everywhere! Dengue here, there and everywhere! Dengue her', 'Iponan'),
(2, 2, 'Food poisoning increases.', 'Food poison here, there and everywhere. Food poison here, there and everywhere. Food poison here, there and everywhere. Food poison here, there and everywhere. Food poison here, there and everywhere. Food poison here, there and everywhere. Food poison her', 'Patag'),
(11, 0, 'Hilanat Outbreak!', 'asd.. asd. sadad.. asda. asda... asdaasda. asd.. asd. sadad.. asda. asda... asdaasda. asd.. asd. sadad.. asda. asda... asdaasda. asd.. asd. sadad.. asda. asda... asdaasda. asd.. asd. sadad.. asda. asda... asdaasda. asd.. asd. sadad.. asda. asda... asdaasd', 'carmen');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
`user_id` int(255) NOT NULL,
  `user_account` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `user_status` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`user_id`, `user_account`, `user_password`, `user_type`, `user_status`) VALUES
(22, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 1),
(34, 'carmen', '202cb962ac59075b964b07152d234b70', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `table_guidelines`
--
ALTER TABLE `table_guidelines`
 ADD PRIMARY KEY (`guideline_id`);

--
-- Indexes for table `table_municipal`
--
ALTER TABLE `table_municipal`
 ADD PRIMARY KEY (`municipal_id`);

--
-- Indexes for table `table_news`
--
ALTER TABLE `table_news`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_guidelines`
--
ALTER TABLE `table_guidelines`
MODIFY `guideline_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_municipal`
--
ALTER TABLE `table_municipal`
MODIFY `municipal_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `table_news`
--
ALTER TABLE `table_news`
MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
