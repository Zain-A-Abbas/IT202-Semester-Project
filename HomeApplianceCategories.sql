-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Dec 07, 2024 at 04:45 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zaa24`
--

-- --------------------------------------------------------

--
-- Table structure for table `HomeApplianceCategories`
--

CREATE TABLE IF NOT EXISTS `HomeApplianceCategories` (
  `HomeApplianceCategoryID` int(11) NOT NULL,
  `HomeApplianceCategoryCode` varchar(10) NOT NULL,
  `HomeApplianceCategoryName` varchar(255) NOT NULL,
  `AisleNumber` int(3) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `HomeApplianceCategories`
--

INSERT INTO `HomeApplianceCategories` (`HomeApplianceCategoryID`, `HomeApplianceCategoryCode`, `HomeApplianceCategoryName`, `AisleNumber`, `DateCreated`) VALUES
(1, 'RFG', 'Refrigerators', 1, '2024-10-17 10:55:28'),
(2, 'WSM', 'Washing Machines', 2, '2024-10-18 18:42:31'),
(3, 'MCR', 'Microwave Ovens', 3, '2024-10-18 18:42:32'),
(4, 'CFM', 'Coffee Makers', 4, '2024-10-18 18:42:40'),
(5, 'ARP', 'Air Purifiers', 5, '2024-10-18 18:42:42'),
(10, 'FAN', 'Fan', 10, '2024-11-02 04:21:38'),
(12, 'BLN', 'Blenders', 12, '2024-11-02 04:39:49'),
(13, 'RDT', 'Radiators', 13, '2024-11-02 05:22:21'),
(19, 'OVE', 'Ovens', 19, '2024-11-18 05:32:50'),
(25, 'FRE', 'Freezers', 25, '2024-12-07 04:41:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HomeApplianceCategories`
--
ALTER TABLE `HomeApplianceCategories`
 ADD PRIMARY KEY (`HomeApplianceCategoryID`), ADD UNIQUE KEY `HomeApplianceCategoryCode` (`HomeApplianceCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
