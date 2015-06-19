-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2015 at 04:47 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_archive`
--
CREATE DATABASE IF NOT EXISTS `db_archive` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_archive`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doc`
--

DROP TABLE IF EXISTS `tbl_doc`;
CREATE TABLE IF NOT EXISTS `tbl_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `doc_type_id` int(11) NOT NULL,
  `doc_path` varchar(50) NOT NULL,
  `doc_description` text NOT NULL,
  `trans_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `doc_type_id` (`doc_type_id`),
  KEY `trans_id` (`trans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_doc`
--

INSERT INTO `tbl_doc` (`id`, `code`, `doc_type_id`, `doc_path`, `doc_description`, `trans_id`) VALUES
(1, '8887', 1, '../assets/files/1-1417528583.txt', 'try', 1),
(2, '8887', 1, '../assets/files/1-1417528640.txt', 'try', 2),
(3, '6667', 1, '../assets/files/2-1417528813.txt', 'Unang tikim', 3),
(4, '6667', 1, '../assets/files/2-1417528999.txt', 'Unang tikim', 4),
(5, '8875', 1, '../assets/files/2-1417529979.txt', 'unlimited and free', 5),
(6, '9000', 2, '../assets/files/1-1417530699.txt', 'larawan', 6),
(7, '7777', 3, '../assets/files/1-1417579725.txt', 'tagpuan', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doc_type`
--

DROP TABLE IF EXISTS `tbl_doc_type`;
CREATE TABLE IF NOT EXISTS `tbl_doc_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_doc_type`
--

INSERT INTO `tbl_doc_type` (`id`, `doc_type`) VALUES
(1, 'certificate'),
(2, 'TOR'),
(3, 'Permanent Record'),
(4, 'Report Card');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

DROP TABLE IF EXISTS `tbl_transaction`;
CREATE TABLE IF NOT EXISTS `tbl_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sender_id` (`sender_id`,`receiver_id`),
  KEY `receiver_id` (`receiver_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`id`, `sender_id`, `receiver_id`, `date`) VALUES
(1, 1, 2, '2014-12-02 13:56:24'),
(2, 1, 2, '2014-12-02 13:57:21'),
(3, 2, 1, '2014-12-02 14:00:14'),
(4, 2, 1, '2014-12-02 14:03:20'),
(5, 2, 1, '2014-12-02 14:19:40'),
(6, 1, 2, '2014-12-02 14:31:40'),
(7, 1, 2, '2014-12-03 04:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

DROP TABLE IF EXISTS `tbl_user_info`;
CREATE TABLE IF NOT EXISTS `tbl_user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user_info`
--

INSERT INTO `tbl_user_info` (`id`, `user_id`, `first_name`, `last_name`) VALUES
(1, 2, 'Jerome', 'Noveda'),
(2, 1, 'Jude', 'Noveda'),
(3, 3, 'Kirby', 'Lopez'),
(4, 4, 'Lee Robin', 'Abobo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`) VALUES
(1, 'wahaha', '1234'),
(2, 'wahaha2', '1234'),
(3, 'kirby', 'kirby'),
(4, 'lee', 'lee');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_doc`
--
ALTER TABLE `tbl_doc`
  ADD CONSTRAINT `doc_id` FOREIGN KEY (`doc_type_id`) REFERENCES `tbl_doc_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_doc_ibfk_1` FOREIGN KEY (`trans_id`) REFERENCES `tbl_transaction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD CONSTRAINT `tbl_transaction_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `tbl_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_transaction_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `tbl_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  ADD CONSTRAINT `tbl_user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
