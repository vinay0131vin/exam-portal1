-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 08:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `f1`
--

CREATE TABLE `f1` (
  `id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f1`
--

INSERT INTO `f1` (`id`, `subject`, `semester`, `year`, `section`, `name`, `type`, `mid`) VALUES
('T-101', 'compiler design', 2, 3, 'c', 'hello.pdf', 'key', 1),
('T-101', 'dbms', 1, 3, 'a', 'hii.pdf', 'question', 1),
('T-102', 'computer networks', 1, 2, 'c', 'prasak-3 (1).pdf', 'key', 1),
('T-102', 'data structures', 1, 2, 'c', 'hii (1).pdf', 'question', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f1`
--
ALTER TABLE `f1`
  ADD PRIMARY KEY (`id`,`subject`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
