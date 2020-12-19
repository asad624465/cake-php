-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2020 at 01:31 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic_cake_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20201218113204, 'Users', '2020-12-18 05:37:03', '2020-12-18 05:37:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `created`, `modified`) VALUES
(1, 'Faisal Raihan', 'raihan@sagbrain.com', '01719633109', 'Dhaka Bangladesh', '2020-12-18 13:26:49', '2020-12-18 13:26:49'),
(2, 'Asif Noman', 'asifnoman240@gmail.com', '01748876128', 'Dhaka Bangladesh', '2020-12-18 13:28:08', '2020-12-18 13:28:08'),
(3, 'Asadujjaman Asif', 'az.asifislam@gmail.com', '01740140248', 'Mirpur-02, Dhaka-1216, Bangladesh', '2020-12-18 13:28:34', '2020-12-18 13:28:34'),
(4, 'Attik Yasir Siyam', 'siyam@gmail.com', '01727970688', 'Mirpur-02, Dhaka-1216, Bangladesh', '2020-12-18 13:29:03', '2020-12-18 13:29:03'),
(5, 'Mir Sultan', 'sultan03@gmail.com', '01727970687', 'Mirpur-02, Dhaka-1216, Bangladesh', '2020-12-18 13:29:45', '2020-12-18 13:30:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
