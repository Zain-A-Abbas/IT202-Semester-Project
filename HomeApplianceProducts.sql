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
-- Table structure for table `HomeApplianceProducts`
--

CREATE TABLE IF NOT EXISTS `HomeApplianceProducts` (
  `HomeApplianceProductID` int(11) NOT NULL,
  `HomeApplianceProductCode` varchar(10) NOT NULL,
  `HomeApplianceProductName` varchar(255) NOT NULL,
  `HomeAppliancedescription` text NOT NULL,
  `Color` varchar(255) NOT NULL,
  `HomeApplianceCategoryID` int(11) NOT NULL,
  `HomeApplianceWholesalePrice` decimal(10,2) NOT NULL,
  `HomeApplianceListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `HomeApplianceProducts`
--

INSERT INTO `HomeApplianceProducts` (`HomeApplianceProductID`, `HomeApplianceProductCode`, `HomeApplianceProductName`, `HomeAppliancedescription`, `Color`, `HomeApplianceCategoryID`, `HomeApplianceWholesalePrice`, `HomeApplianceListPrice`, `DateCreated`) VALUES
(191, 'JOV', 'Jan''s Oven', 'An oven made by Jan.', 'tan', 19, 200.00, 400.00, '2024-11-18 05:39:48'),
(192, 'JHOV', 'Johnny''s Oven', 'An oven made by Johnny.', 'red', 19, 500.00, 700.00, '2024-11-18 05:41:42'),
(1000, 'SAM', 'Sam''s Fridge', 'Placeholder description.', 'RED', 1, 399.00, 499.00, '2024-10-18 22:24:54'),
(1001, 'DAVE', 'David''s Fridge', 'A', 'A', 1, 99.00, 99.00, '2024-10-18 22:25:38'),
(1002, 'Howard', 'Howard''s Fridge', 'Placeholder description.', 'BLUE', 1, 399.00, 499.00, '2024-10-18 22:25:39'),
(1003, 'Adam', 'Adam''s Washer', 'Placeholder description.', 'RED', 2, 399.00, 499.00, '2024-10-18 22:27:32'),
(1004, 'Farasyn', 'Farasyn''s Washer', 'Placeholder description.', 'GREEN', 2, 399.00, 499.00, '2024-10-18 22:27:35'),
(1005, 'Garry', 'Garry''s Washer', 'Placeholder description.', 'BLUE', 2, 399.00, 499.00, '2024-10-18 22:27:37'),
(1006, 'Jah', 'Jah Microwave', 'Placeholder description.', 'RED', 3, 399.00, 499.00, '2024-10-18 22:29:36'),
(1007, 'Klam', 'Klam Microwave', 'Placeholder description.', 'GREEN', 3, 399.00, 499.00, '2024-10-18 22:29:36'),
(1008, 'Loh', 'Lih Microwave', 'Placeholder description.', 'BLUE', 3, 399.00, 499.00, '2024-10-18 22:29:38'),
(1009, 'Qwite', 'Qwite''s Coffee Maker', 'Placeholder description.', 'RED', 4, 399.00, 499.00, '2024-10-18 22:31:12'),
(1010, 'West', 'West''s Coffee Maker', 'Placeholder description.', 'GREEN', 4, 399.00, 499.00, '2024-10-18 22:31:13'),
(1011, 'East', 'East''s Coffee Maker', 'Placeholder description.', 'BLUE', 4, 399.00, 499.00, '2024-10-18 22:31:16'),
(1012, 'Ra', 'Ra''s Air Purifier', 'Placeholder description.', 'AMARANTH', 5, 399.00, 499.00, '2024-10-18 22:33:34'),
(1013, 'Temu', 'Temu''s Air Purifier', 'Placeholder description.', 'WENGE', 5, 399.00, 499.00, '2024-10-18 22:33:35'),
(1014, 'Yippee', 'Yippee''s Air Purifier', 'Placeholder description.', 'SARCOLINE', 5, 399.00, 499.00, '2024-10-18 22:33:37'),
(1201, 'JRDTR', 'Jenna''s Radiator', 'A radiator.', 'RED', 13, 78.99, 99.99, '2024-11-02 05:24:24'),
(2576895, 'TFRZ', 'Test Freezer', 'Freezer added for testing purposes.', 'Blue', 25, 179.99, 249.99, '2024-12-07 04:42:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HomeApplianceProducts`
--
ALTER TABLE `HomeApplianceProducts`
 ADD PRIMARY KEY (`HomeApplianceProductID`), ADD UNIQUE KEY `HomeApplianceProductCode` (`HomeApplianceProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
