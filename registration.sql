-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 03:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Email`, `Password`) VALUES
('11701359@lpu.com', 'mandapatiganesh389@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('user1', 'user1@gmil.com', 'e10adc3949ba59abbe56e057f20f883e'),
('amar', 'amar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('goutham', 'goutham@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('RK17JKA21', 'mm98955@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('opt7@lpu.com', 'opt7@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('11701359', '11701359@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('opt2@lpu.com', 'opt2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('abc', 'mnb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
