-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 10:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `atoll`
--

CREATE TABLE `atoll` (
  `id` int(11) NOT NULL,
  `atoll_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atoll`
--

INSERT INTO `atoll` (`id`, `atoll_name`) VALUES
(1, 'G.dh'),
(2, 'H.Alif'),
(3, 'Thaa.Atoll'),
(4, 'Baa.Atoll');

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `id_card` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(191) NOT NULL,
  `dependents` int(191) NOT NULL,
  `zakat` bigint(11) NOT NULL,
  `atoll` varchar(80) NOT NULL,
  `island` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`id`, `name`, `id_card`, `address`, `email`, `dependents`, `zakat`, `atoll`, `island`) VALUES
(84, 'hassan muaz', 'A321231', 'National Museum Building B, Chaandhanee Magu', 'sysadmin@mach.gov.mv', 17, 1105, '4', '3');

-- --------------------------------------------------------

--
-- Table structure for table `island`
--

CREATE TABLE `island` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `atoll_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `island`
--

INSERT INTO `island` (`id`, `name`, `atoll_id`) VALUES
(1, 'Thinadhoo', 1),
(2, 'Madaveli', 1),
(3, 'Faresmaadhoo', 4),
(4, 'Dhandhoo', 3);

-- --------------------------------------------------------

--
-- Table structure for table `zakat_rates`
--

CREATE TABLE `zakat_rates` (
  `id` int(11) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zakat_rates`
--

INSERT INTO `zakat_rates` (`id`, `rate`) VALUES
(1, 65),
(2, 95);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atoll`
--
ALTER TABLE `atoll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `island`
--
ALTER TABLE `island`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zakat_rates`
--
ALTER TABLE `zakat_rates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atoll`
--
ALTER TABLE `atoll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `island`
--
ALTER TABLE `island`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zakat_rates`
--
ALTER TABLE `zakat_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
