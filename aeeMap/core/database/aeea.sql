-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 08:57 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aeea`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE IF NOT EXISTS `audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `ip` varchar(40) NOT NULL,
  `user` varchar(300) DEFAULT NULL,
  `table` varchar(300) DEFAULT NULL,
  `action` varchar(250) NOT NULL,
  `description` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`id`, `datetime`, `ip`, `user`, `table`, `action`, `description`) VALUES
(1, '2015-05-17 00:23:58', '::1', 'Admin', 'reps', 'failed login', ''),
(2, '2015-05-17 00:23:58', '::1', 'Admin', '', 'access', '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` varchar(8) NOT NULL,
  `country` varchar(32) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country`) VALUES
('AL', 'Algeria'),
('AN', 'Angola'),
('BE', 'Benin'),
('BF', 'Burkina Faso'),
('BR', 'Burundi'),
('BT', 'Botswana'),
('CA', 'Central African Republic'),
('CH', 'Republic of Chad'),
('CR', 'Cameroon'),
('CV', 'Cape Verde'),
('EG', 'Egypt'),
('ER', 'Eritrea'),
('ET', 'Ethiopia'),
('GA', 'Gambia'),
('GB', 'Gabon'),
('GH', 'Ghana'),
('GU', 'Guinea'),
('IC', 'Ivory Coast'),
('KY', 'Kenya'),
('LB', 'Libya'),
('LE', 'Lesotho'),
('LI', 'Liberia'),
('MA', 'Mauritius'),
('MD', 'Madagascar'),
('ML', 'Mali'),
('MR', 'Morocco'),
('MU', 'Mauritania'),
('MW', 'Malawi'),
('MZ', 'Mozambique'),
('NG', 'Niger'),
('NI', 'Nigeria'),
('NM', 'Namibia'),
('RD', 'Republic of Djibouti'),
('RE', 'Republic of Equatorial Guinea'),
('RG', 'Republic of Guinea-Bissau'),
('RW', 'Rwanda'),
('SA', 'South Africa'),
('SL', 'Sierra Leone'),
('SN', 'Senegal'),
('SO', 'Somalia'),
('SS', 'South Sudan'),
('SU', 'Sudan'),
('SW', 'Swaziland'),
('SY', 'Republic of Seychelles'),
('TA', 'Tanzania'),
('TN', 'Tunisia'),
('TO', 'Togo'),
('UG', 'Uganda'),
('ZA', 'Zaire'),
('ZI', 'Zimbabwe'),
('ZM', 'Zambia');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE IF NOT EXISTS `provinces` (
  `province_id` varchar(8) NOT NULL,
  `country_id` varchar(8) NOT NULL,
  `province` varchar(54) NOT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reps`
--

CREATE TABLE IF NOT EXISTS `reps` (
  `rep_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `passport` varchar(16) NOT NULL,
  `postbox` varchar(16) NOT NULL,
  `address` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `province` varchar(32) NOT NULL,
  `country` varchar(32) NOT NULL,
  `postalcode` varchar(8) NOT NULL,
  `homephone` varchar(16) NOT NULL,
  `workphone` varchar(16) NOT NULL,
  `cellphone` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `birthdate` date NOT NULL,
  `photo` varchar(30) DEFAULT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `pwsalt` varchar(64) NOT NULL,
  `group` int(11) NOT NULL DEFAULT '0',
  `created` date NOT NULL,
  `attempt` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reps`
--

INSERT INTO `reps` (`rep_id`, `firstname`, `lastname`, `passport`, `postbox`, `address`, `city`, `province`, `country`, `postalcode`, `homephone`, `workphone`, `cellphone`, `email`, `birthdate`, `photo`, `username`, `password`, `pwsalt`, `group`, `created`, `attempt`) VALUES
(1, 'Adam', 'Apple', '1234567898025', '1026', '1044 Main street', 'Shayandima', 'Limpopo', 'South Af', '0945', '', '015 123 4567', '082 547 8965', 'adam@apple.co.za', '2015-04-01', '52601800_1430235772.png', 'Admin', 'admin123!', '', -1, '2015-05-16', 0),
(2, 'Ben', 'Bahuna', 'zm7899654', '245688', 'Area 45', 'Hlelui', '', 'Zimbabwe', '2145', '', '', '', 'ban@bahana.zm', '0000-00-00', NULL, 'ben', 'tentun123!', '', 0, '0000-00-00', 0),
(3, 'Caryn', 'Cummings', '', '', '', '', '', 'Mozambiq', '', '', '', '', 'ccummings@anywhere.mz', '0000-00-00', NULL, 'CCmings', 'caryn123!', '', 0, '2015-05-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `rep_id` int(11) NOT NULL,
  `school_name` varchar(64) NOT NULL,
  `reg_number` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `school_type` varchar(32) NOT NULL,
  `londitude` float(10,6) DEFAULT NULL,
  `latitude` float(10,6) DEFAULT NULL,
  `administrator` varchar(54) DEFAULT NULL,
  `principal` varchar(54) NOT NULL,
  `postbox` varchar(16) NOT NULL,
  `address` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `province` varchar(32) NOT NULL,
  `postalcode` varchar(8) NOT NULL,
  `country` varchar(8) NOT NULL,
  `email` varchar(32) NOT NULL,
  `school_phone` varchar(16) DEFAULT NULL,
  `admin_cellphone` varchar(16) NOT NULL,
  `cresh` int(11) DEFAULT NULL,
  `grade_r` int(11) DEFAULT NULL,
  `grade_0` int(11) DEFAULT NULL,
  `grade_1` int(11) DEFAULT NULL,
  `grade_2` int(11) DEFAULT NULL,
  `grade_3` int(11) DEFAULT NULL,
  `grade_4` int(11) DEFAULT NULL,
  `grade_5` int(11) DEFAULT NULL,
  `grade_6` int(11) DEFAULT NULL,
  `grade_7` int(11) DEFAULT NULL,
  `grade_8` int(11) DEFAULT NULL,
  `grade_9` int(11) DEFAULT NULL,
  `grade_10` int(11) DEFAULT NULL,
  `grade_11` int(11) DEFAULT NULL,
  `grade_12` int(11) DEFAULT NULL,
  `total_students` int(11) DEFAULT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `rep_id`, `school_name`, `reg_number`, `reg_date`, `school_type`, `londitude`, `latitude`, `administrator`, `principal`, `postbox`, `address`, `city`, `province`, `postalcode`, `country`, `email`, `school_phone`, `admin_cellphone`, `cresh`, `grade_r`, `grade_0`, `grade_1`, `grade_2`, `grade_3`, `grade_4`, `grade_5`, `grade_6`, `grade_7`, `grade_8`, `grade_9`, `grade_10`, `grade_11`, `grade_12`, `total_students`) VALUES
(1, 1, 'Shayandima School of Tomorrow', 'ABC 12345', '2015-04-01', '3', NULL, NULL, 'Hazel', 'Palmer', '1028', '1044 Main street', 'Shayandima', 'Limpopo', '0945', 'ZA', 'admin@buildthenations.org', '015 123 4567', '082 784 1236', 45, 23, 25, 24, 52, 23, 45, 32, 27, 16, 18, 12, 8, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `school_type`
--

CREATE TABLE IF NOT EXISTS `school_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_type` varchar(32) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `school_type`
--

INSERT INTO `school_type` (`type_id`, `school_type`) VALUES
(1, 'Home School'),
(2, 'Home School Academy'),
(3, 'Mission School'),
(4, 'Pre-School'),
(5, 'Primary School'),
(6, 'High / Secondary School'),
(7, 'Full School'),
(8, 'Private School');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
