-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 02:20 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `service_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bands`
--

CREATE TABLE IF NOT EXISTS `bands` (
`id` int(11) NOT NULL,
  `bandname` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `bio` text,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bands`
--

INSERT INTO `bands` (`id`, `bandname`, `start_date`, `bio`, `email`) VALUES
(1, 'Deerhunter', '2013-12-11 00:00:00', NULL, 'jim@deerhunter.com'),
(2, 'U2', '2015-06-11 00:00:00', NULL, 'jim@u2.com'),
(3, 'Oasis', '2015-06-11 00:00:00', NULL, 'noel@oasis.com'),
(4, 'Suuns', '2015-06-14 00:00:00', NULL, 'tony@suuns.com'),
(5, 'PartisanCrowds', '2015-06-01 00:00:00', NULL, 'ron@pcrowds.com'),
(6, 'TheDoors', '2015-06-11 00:00:00', NULL, 'jim@doors.com'),
(7, 'TheBeatles', '2015-06-18 00:00:00', NULL, 'paul@beatles.com'),
(8, 'TheStrokes', '2015-06-21 00:00:00', NULL, 'julian@strokes.com'),
(9, 'GunsnRoses', '2015-06-11 00:00:00', NULL, 'axl@gnr.com'),
(10, 'Nirvana', '2015-06-24 00:00:00', NULL, 'krist@nirvana.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bands`
--
ALTER TABLE `bands`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bands`
--
ALTER TABLE `bands`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
