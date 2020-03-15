-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 10:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

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
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `year` varchar(30) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`year`, `semester`, `subject`) VALUES
('2', '1', 'data structures and algorithms'),
('2', '1', 'digital logic design'),
('2', '1', 'discrete mathematics'),
('2', '1', 'OOP with JAVA'),
('2', '1', 'probability statistics and que'),
('2', '2', 'data communications'),
('2', '2', 'microprocessors and interfacin'),
('2', '2', 'Operating Systems'),
('2', '2', 'Computer organization'),
('3', '1', 'database management system'),
('3', '1', 'computer graphics'),
('3', '1', 'computer networks'),
('3', '2', 'computer architecture'),
('3', '2', 'software engineering'),
('3', '2', 'complier design'),
('3', '2', 'web technologies'),
('3', '2', 'digital image processing'),
('4', '2', 'Professional elective'),
('2', '2', 'formal languages and automata theory'),
('3', '1', 'design and analysis of algorithms'),
('4', '1', 'cryptography and network security'),
('4', '1', 'object oriented analysis and design');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
