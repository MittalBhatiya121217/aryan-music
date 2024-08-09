-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2019 at 05:43 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `acd_info`
--

CREATE TABLE IF NOT EXISTS `acd_info` (
  `acd_id` int(10) NOT NULL,
  `acd_info` varchar(200) NOT NULL,
  PRIMARY KEY (`acd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acd_info`
--

INSERT INTO `acd_info` (`acd_id`, `acd_info`) VALUES
(3, 'best place for music instrument learning specially for indian music instruments');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_data`
--

CREATE TABLE IF NOT EXISTS `candidate_data` (
  `can_id` int(10) NOT NULL AUTO_INCREMENT,
  `can_name` varchar(20) NOT NULL DEFAULT '',
  `instr_name` varchar(20) DEFAULT NULL,
  `class_time` varchar(12) DEFAULT NULL,
  `class_fees` int(10) DEFAULT NULL,
  PRIMARY KEY (`can_id`,`can_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `candidate_data`
--

INSERT INTO `candidate_data` (`can_id`, `can_name`, `instr_name`, `class_time`, `class_fees`) VALUES
(1, 'mittal', 'piano', '10 to 2', 6000),
(2, 'jay', 'guitar', '12 to 2', 5000),
(3, 'jay bhatiya', 'flute', '2 to 4', 9000),
(4, 'mittal bhatiya', 'drum', '4 to 6', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `cat_master`
--

CREATE TABLE IF NOT EXISTS `cat_master` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cat_master`
--

INSERT INTO `cat_master` (`cat_id`, `cat_name`) VALUES
(1, 'Percussion'),
(2, 'Nonpercussion'),
(3, 'Indian Music Instrum'),
(4, 'String Instrument'),
(5, 'classic tabla');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fb_id` int(11) NOT NULL,
  `feedback` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `feedback`, `date`, `time`, `name`) VALUES
(2, 'awsm website for buy instruments.', '2018-04-03', '13:31:08', 'jay bhatiya'),
(1, 'good quality of music instruments', '2018-04-04', '12:13:00', 'mittal bhatiya'),
(3, 'learning music instruments with abhijit sir is worlds best expereince.', '2018-04-06', '01:00:00', 'brijesh parmar'),
(4, 'awsm place for learn instrument.', '2018-04-09', '23:02:11', 'mittal parmar');

-- --------------------------------------------------------

--
-- Table structure for table `instrument`
--

CREATE TABLE IF NOT EXISTS `instrument` (
  `can_id` int(10) DEFAULT NULL,
  `instr_name` varchar(20) DEFAULT NULL,
  `class_fees` int(10) DEFAULT NULL,
  KEY `can_id` (`can_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instrument`
--

INSERT INTO `instrument` (`can_id`, `instr_name`, `class_fees`) VALUES
(1, 'piano', 6000),
(2, 'guitar', 8000),
(3, 'flute', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `inv_id` int(10) NOT NULL AUTO_INCREMENT,
  `trans_id` int(10) NOT NULL DEFAULT '0',
  `pid` int(10) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `pprice` int(10) DEFAULT NULL,
  `pimg` varchar(200) DEFAULT NULL,
  `pur_date` date DEFAULT NULL,
  `del_date` date DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`inv_id`,`trans_id`),
  KEY `fk_inv` (`pid`),
  KEY `fk_invoice` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usrname` varchar(30) NOT NULL,
  `pass` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usrname`, `pass`) VALUES
(101, 'admin', 'admin'),
(102, 'jm', 'jm');

-- --------------------------------------------------------

--
-- Table structure for table `manage_product`
--

CREATE TABLE IF NOT EXISTS `manage_product` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `pname` varchar(20) NOT NULL DEFAULT '',
  `pdisc` varchar(50) NOT NULL DEFAULT '',
  `pprice` int(10) NOT NULL DEFAULT '0',
  `pimg` varchar(200) NOT NULL DEFAULT '',
  `pimg1` varchar(200) DEFAULT NULL,
  `pimg2` varchar(200) DEFAULT NULL,
  `subcat_id` int(10) DEFAULT NULL,
  `audio` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`pid`,`pname`,`pdisc`,`pprice`,`pimg`),
  KEY `subcat_id` (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `manage_product`
--

INSERT INTO `manage_product` (`pid`, `pname`, `pdisc`, `pprice`, `pimg`, `pimg1`, `pimg2`, `subcat_id`, `audio`) VALUES
(4, 'electronic drum set', 'electronic drum set is use in live concerts,musica', 900000, 'uploads/10.jpg', 'uploads/8.jpg', 'uploads/9.jpg', 6, NULL),
(14, 'harmonium', 'harmonium woode', 6000, 'uploads/h1.jpg', 'uploads/h2.jpg', 'uploads/h3.jpg', 15, NULL),
(15, 'wooden harmonium', 'wooden  indian harmonium', 4000, 'uploads/hr3.jpg', 'uploads/hr4.jpg', 'uploads/hr4.jpg', 16, NULL),
(16, 'Traditional Sitar', 'Traditional Sitar', 5000, 'uploads/s1.jpg', 'uploads/s5.jpg', 'uploads/s3.jpg', 17, NULL),
(17, 'electric Sitar', 'electric Sitar', 6000, 'uploads/es3.jpg', 'uploads/es2.jpg', 'uploads/es3.jpg', 17, NULL),
(18, 'bass drum', 'bass drum', 8000, 'uploads/b4.jpg', 'uploads/b5.jpg', 'uploads/b6.jpg', 18, NULL),
(19, 'snare drum', 'snare drum', 90000, 'uploads/b1.jpg', 'uploads/b2.jpg', 'uploads/b3.jpg', 18, NULL),
(20, 'cymbals', 'cymbals', 500, 'uploads/c1.jpg', 'uploads/c2.jpg', 'uploads/c3.jpg', 19, NULL),
(21, 'cymbal drum', 'cymbal is use with  drum', 6000, 'uploads/c4.jpg', 'uploads/c5.jpg', 'uploads/c6.jpg', 19, NULL),
(25, 'piano', 'piano is keyboard instrument.', 80000, 'uploads/p3.jpg', 'uploads/p2.jpg', 'uploads/p1.jpg', 1, 'uploads/Ajeeb Dastan Instrumental Piano-(Mr-Jatt.com).mp3'),
(32, 'drum', 'drum set ', 90000, 'uploads/8.jpg', 'uploads/9.jpg', 'uploads/10.jpg', 6, 'uploads/dhol.mp3'),
(33, 'dhol', 'dhol silver', 800, 'uploads/d7.jpeg', 'uploads/d8.jpg', 'uploads/dh7.jpg', 14, 'uploads/dhol.mp3'),
(34, 'guitar', 'guitar is string instruments.', 9000, 'uploads/3.jpg', 'uploads/4.jpg', 'uploads/5.jpg', 20, 'uploads/Drum.mp3'),
(35, 'flute', 'flute white silver', 800, 'uploads/23.jpg', 'uploads/15.jpg', 'uploads/16.jpg', 21, 'uploads/dhol.mp3'),
(36, 'tabla', 'tabla Indian', 8000, 'uploads/38.jpg', 'uploads/39.jpg', 'uploads/40.jpg', 22, 'uploads/'),
(37, 'musical keyboard', 'musical keyboard', 90000, 'uploads/17.jpg', 'uploads/18.jpg', 'uploads/19.jpg', 23, 'uploads/AUD-20180406-WA0027.mp3'),
(38, 'timpani', 'timpani is one type of drum', 9000, 'uploads/tm1.jpg', 'uploads/tm3.jpg', 'uploads/tm2.jpg', 24, 'uploads/AUD-20180406-WA0029.mp3'),
(40, 'violin', 'violin ', 8000, 'uploads/es3.jpg', 'uploads/es1.jpg', 'uploads/es2.jpg', 26, 'uploads/piano.mp3'),
(41, 'kids piano', 'kids piano ', 800, 'uploads/kp1.jpg', 'uploads/kp2.jpg', 'uploads/kp3.jpg', 1, 'uploads/Zindagi Har Kadam Ek Nai Jung Hai Instrumental Electric Guitar-(Mr-Jatt.com).mp3');

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `pid` int(10) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `pprice` int(10) DEFAULT NULL,
  `pur_date` date DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `del_date` date DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`pid`, `pname`, `pprice`, `pur_date`, `time`, `del_date`, `email`) VALUES
(7, 'guitar', 8000, '2006-04-18', NULL, '2013-04-18', 'parmar.mittal@gmail.'),
(7, 'guitar', 8000, '2006-04-18', NULL, '2013-04-18', 'parmar.mittal@gmail.'),
(7, 'guitar', 8000, '2006-04-18', NULL, '2013-04-18', 'parmar.mittal@gmail.'),
(1, 'vintage piano', 90000, '2006-04-18', '0000-00-00 00:00:00', '2013-04-18', 'parmar.mittal@gmail.'),
(1, 'vintage piano', 90000, '2006-04-18', '0000-00-00 00:00:00', '2013-04-18', 'parmar.mittal@gmail.'),
(1, 'vintage piano', 90000, '2006-04-18', '0000-00-00 00:00:00', '2013-04-18', 'parmar.mittal@gmail.'),
(1, 'vintage piano', 90000, '2006-04-18', '0000-00-00 00:00:00', '2013-04-18', 'parmar.mittal@gmail.'),
(1, 'vintage piano', 90000, '2006-04-18', '0000-00-00 00:00:00', '2013-04-18', 'parmar.mittal@gmail.'),
(1, 'vintage piano', 90000, '2006-04-18', '2012-04-01 18:30:00', '2013-04-18', 'parmar.mittal@gmail.'),
(7, 'guitar', 8000, '2006-04-18', '0000-00-00 00:00:00', '2013-04-18', 'jay.bhatiya@gmail.co'),
(7, 'guitar', 8000, '2006-04-18', '0000-00-00 00:00:00', '2013-04-18', 'jay.bhatiya@gmail.co'),
(33, 'dhol', 800, '2007-04-18', '0000-00-00 00:00:00', '2014-04-18', 'parmar.mittal@gmail.'),
(34, 'guitar', 9000, '2030-04-18', '0000-00-00 00:00:00', '2007-05-18', 'parmar.mittal@gmail.'),
(4, 'electronic drum set', 900000, '2030-04-18', '0000-00-00 00:00:00', '2007-05-18', 'parmar.mittal@gmail.'),
(4, 'electronic drum set', 900000, '2030-04-18', '0000-00-00 00:00:00', '2007-05-18', 'parmar.mittal@gmail.'),
(34, 'guitar', 9000, '2030-04-18', '0000-00-00 00:00:00', '2007-05-18', 'parmar.mittal@gmail.'),
(0, '', 0, '2030-04-18', '0000-00-00 00:00:00', '2007-05-18', 'parmar.mittal@gmail.'),
(0, '', 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00', ''),
(4, 'electronic drum set', 900000, '2030-04-18', '0000-00-00 00:00:00', '2007-05-18', 'parmar.mittal@gmail.'),
(4, 'electronic drum set', 900000, '2030-04-18', '0000-00-00 00:00:00', '2007-05-18', 'parmar.mittal@gmail.'),
(34, 'guitar', 9000, '2030-04-18', '0000-00-00 00:00:00', '2007-05-18', 'parmar.mittal@gmail.'),
(4, 'electronic drum set', 900000, '2030-04-18', '0000-00-00 00:00:00', '2007-05-18', 'parmar.mittal@gmail.'),
(34, 'guitar', 9000, '2005-05-18', '0000-00-00 00:00:00', '2012-05-18', 'parmar.mittal@gmail.'),
(34, 'guitar', 9000, '2005-05-18', '0000-00-00 00:00:00', '2012-05-18', 'parmar.mittal@gmail.'),
(34, 'guitar', 9000, '2005-05-18', '0000-00-00 00:00:00', '2012-05-18', 'parmar.mittal@gmail.'),
(33, 'dhol', 800, '2005-05-18', '0000-00-00 00:00:00', '2012-05-18', 'parmar.mittal@gmail.'),
(34, 'guitar', 9000, '2011-05-18', '0000-00-00 00:00:00', '2018-05-18', 'parmar.mittal@gmail.'),
(34, 'guitar', 9000, '2011-05-18', '0000-00-00 00:00:00', '2018-05-18', 'parmar.mittal@gmail.'),
(33, 'dhol', 800, '2024-12-18', '0000-00-00 00:00:00', '2031-12-18', 'mittal.bhatiya@gmail'),
(33, 'dhol', 800, '2005-02-19', '0000-00-00 00:00:00', '2012-02-19', 'parmar.mittal@gmail.'),
(33, 'dhol', 800, '2005-02-19', '0000-00-00 00:00:00', '2012-02-19', 'parmar.mittal@gmail.'),
(33, 'dhol', 800, '2026-02-19', '0000-00-00 00:00:00', '2005-03-19', 'parmar.mittal@gmail.'),
(33, 'dhol', 800, '2028-02-19', '0000-00-00 00:00:00', '2007-03-19', 'parmar.mittal@gmail.'),
(33, 'dhol', 800, '2005-03-19', '0000-00-00 00:00:00', '2012-03-19', 'parmar.mittal@gmail.'),
(18, 'bass drum', 8000, '2015-03-19', '0000-00-00 00:00:00', '2022-03-19', 'parmar.mittal@gmail.'),
(33, 'dhol', 800, '2022-03-19', '0000-00-00 00:00:00', '2029-03-19', 'parmar.mittal@gmail.'),
(33, 'dhol', 800, '2022-03-19', '0000-00-00 00:00:00', '2029-03-19', 'parmar.mittal@gmail.');

-- --------------------------------------------------------

--
-- Table structure for table `subcat_master`
--

CREATE TABLE IF NOT EXISTS `subcat_master` (
  `subcat_id` int(10) NOT NULL AUTO_INCREMENT,
  `subcat_name` varchar(30) DEFAULT NULL,
  `cat_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`subcat_id`),
  KEY `fk_subcat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `subcat_master`
--

INSERT INTO `subcat_master` (`subcat_id`, `subcat_name`, `cat_id`) VALUES
(1, 'piano', 1),
(6, 'drum', 1),
(14, 'dhol', 3),
(15, 'harmonium', 3),
(16, 'wooden harmonium', 3),
(17, 'sitar', 3),
(18, 'bass drum', 1),
(19, 'cymbals', 1),
(20, 'guitar', 2),
(21, 'flute', 3),
(22, 'tabla', 2),
(23, 'musical keyboard', 2),
(24, 'timpani', 2),
(26, 'violin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `email` varchar(30) NOT NULL DEFAULT '',
  `pass` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(20) NOT NULL,
  `con_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`email`,`pass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`email`, `pass`, `name`, `con_pass`) VALUES
('jay.bhatiya@gmail.com', '9712229005', 'jay bhatiya', ''),
('mittal.bhatiya@gmail.com', 'Jaymit1212', 'mittal bhatiya', 'jaymit1212'),
('mjbhatiya@gmail.com', 'Mittal1212', 'mittal', ''),
('parmar.mittal@gmail.com', 'Jaymit12', 'mittal parmar', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `instrument`
--
ALTER TABLE `instrument`
  ADD CONSTRAINT `instrument_ibfk_1` FOREIGN KEY (`can_id`) REFERENCES `candidate_data` (`can_id`) ON DELETE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_inv` FOREIGN KEY (`pid`) REFERENCES `manage_product` (`pid`),
  ADD CONSTRAINT `fk_invoice` FOREIGN KEY (`email`) REFERENCES `user_reg` (`email`);

--
-- Constraints for table `manage_product`
--
ALTER TABLE `manage_product`
  ADD CONSTRAINT `manage_product_ibfk_1` FOREIGN KEY (`subcat_id`) REFERENCES `subcat_master` (`subcat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcat_master`
--
ALTER TABLE `subcat_master`
  ADD CONSTRAINT `fk_subcat_id` FOREIGN KEY (`cat_id`) REFERENCES `cat_master` (`cat_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subcat_master_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cat_master` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
