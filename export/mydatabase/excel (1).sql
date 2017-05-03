-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 08:58 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excel`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cs_pl` int(15) NOT NULL,
  `cs_mt` int(15) NOT NULL,
  `cs_pf` int(15) NOT NULL,
  `cs_f` int(15) NOT NULL,
  `me_pl` int(15) NOT NULL,
  `me_mt` int(15) NOT NULL,
  `me_pf` int(15) NOT NULL,
  `me_f` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `name`, `cs_pl`, `cs_mt`, `cs_pf`, `cs_f`, `me_pl`, `me_mt`, `me_pf`, `me_f`) VALUES
(1, 'pedro', 90, 90, 90, 90, 90, 90, 90, 90),
(2, 'juan', 80, 90, 89, 90, 98, 99, 88, 87),
(3, 'peter', 70, 80, 90, 92, 79, 85, 95, 90),
(4, 'jose', 65, 65, 75, 70, 72, 74, 71, 75),
(5, 'john', 68, 98, 98, 98, 98, 98, 98, 78),
(6, 'mary', 76, 76, 75, 75, 85, 85, 85, 90),
(7, 'james', 88, 78, 98, 98, 98, 98, 98, 78),
(8, 'kobe', 96, 96, 85, 85, 87, 88, 89, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
