-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 09:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dog`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `id` int(11) NOT NULL,
  `dog` varchar(12) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `breed` varchar(15) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_num` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`id`, `dog`, `age`, `breed`, `first_name`, `last_name`, `email`, `phone_num`) VALUES
(1, 'test', 15, 'Whippet', 'Logan', 'janke', 'logan@yahoo.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `dog` varchar(12) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_num` varchar(10) DEFAULT NULL,
  `day` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `dog`, `first_name`, `last_name`, `email`, `phone_num`, `day`) VALUES
(1, 'test', 'Logan Janke', NULL, 'Logan@gmail.com', NULL, 1),
(2, 'Buddy', NULL, NULL, NULL, NULL, 2),
(3, 'Buddy', NULL, NULL, NULL, NULL, 3),
(4, 'Buddy', NULL, NULL, NULL, NULL, 4),
(5, 'Buddy', NULL, NULL, NULL, NULL, 1),
(6, 'Lucky', NULL, NULL, NULL, NULL, 2),
(7, 'Lucky', NULL, NULL, NULL, NULL, 3),
(8, 'Lucky', NULL, NULL, NULL, NULL, 4),
(9, 'Lucky', NULL, NULL, NULL, NULL, 1),
(10, 'Bruce', NULL, NULL, NULL, NULL, 2),
(11, 'Bruce', NULL, NULL, NULL, NULL, 3),
(12, 'Bruce', NULL, NULL, NULL, NULL, 4),
(13, 'Bruce', NULL, NULL, NULL, NULL, 1),
(14, 'Dale', NULL, NULL, NULL, NULL, 2),
(15, 'Dale', NULL, NULL, NULL, NULL, 3),
(16, 'Dale', NULL, NULL, NULL, NULL, 4),
(17, 'Dale', NULL, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
