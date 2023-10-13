-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 08:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quarry`
--

-- --------------------------------------------------------

--
-- Table structure for table `commercial`
--

CREATE TABLE `commercial` (
  `Commercial_Permit_Key` int(11) NOT NULL,
  `Permittee_Name` varchar(255) DEFAULT NULL,
  `Tin_No` varchar(20) DEFAULT NULL,
  `Postal_Address` text DEFAULT NULL,
  `Extraction_Site` varchar(255) DEFAULT NULL,
  `Type_of_Mineral` varchar(100) DEFAULT NULL,
  `Permit_No` varchar(50) DEFAULT NULL,
  `Approved_Volume` double DEFAULT NULL,
  `Area` double DEFAULT NULL,
  `Date_Approved` date DEFAULT NULL,
  `Expiry_Date` date DEFAULT NULL,
  `Active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`Commercial_Permit_Key`, `Permittee_Name`, `Tin_No`, `Postal_Address`, `Extraction_Site`, `Type_of_Mineral`, `Permit_No`, `Approved_Volume`, `Area`, `Date_Approved`, `Expiry_Date`, `Active`) VALUES
(1, 'Acenas, Leonardodfedfefe', '448-021-928-000', 'Cansuhay, Duero, Bohol', 'Cansuhay, Duero, Bohol', 'SAG', 'CSGP-005-06-14-23', 4000, 1995, '2023-06-14', '2025-06-14', 1),
(2, 'Amora, Lucresio', '(DL) G03-91-019387', 'Bulawan, Guindulman, Bohol', 'Bulawan & Canhaway,\nGuindulman, Bohol', 'SAG', 'CSGP-020-12-15-21', 2000, 20317, '2021-11-09', '2023-11-09', 1),
(3, 'Anud, Segundo', '420-370-531-000', 'Poblacion, Inabanga, Bohol', 'Lonoy, Roma, Nabuad,\nLiloan Sur, Inabanga, Bohol', 'SAG', 'CSGP-003-05-08-23', 5000, 50000, '2023-05-08', '2025-05-08', 0),
(4, 'sample', 'sample2', 'sample2', 'sample', 'sample', 'sample', 4, 4, '2023-10-04', '2023-10-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `industrial`
--

CREATE TABLE `industrial` (
  `Industrial_Permit_Key` int(11) NOT NULL,
  `Permittee_Name` varchar(255) DEFAULT NULL,
  `Tin_No` varchar(20) DEFAULT NULL,
  `Postal_Address` text DEFAULT NULL,
  `Extraction_Site` varchar(255) DEFAULT NULL,
  `Type_of_Mineral` varchar(100) DEFAULT NULL,
  `Permit_No` varchar(50) DEFAULT NULL,
  `Approved_Volume` double DEFAULT NULL,
  `Area` double DEFAULT NULL,
  `Date_Approved` date DEFAULT NULL,
  `Expiry_Date` date DEFAULT NULL,
  `Active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industrial`
--

INSERT INTO `industrial` (`Industrial_Permit_Key`, `Permittee_Name`, `Tin_No`, `Postal_Address`, `Extraction_Site`, `Type_of_Mineral`, `Permit_No`, `Approved_Volume`, `Area`, `Date_Approved`, `Expiry_Date`, `Active`) VALUES
(1, 'Acenas, Leonardo', '448-021-928-000', 'Cansuhay, Duero, Bohol', 'Cansuhay, Duero, Bohol', 'SAG', 'CSGP-005-06-14-23', 4000, 1995, '2023-06-14', '2025-06-14', 0),
(2, 'Amora, Lucresio', '(DL) G03-91-019387', 'Bulawan, Guindulman, Bohol', 'Bulawan & Canhaway,\nGuindulman, Bohol', 'SAG', 'CSGP-020-12-15-21', 2000, 20317, '2021-11-09', '2023-11-09', 1),
(3, 'Anud, Segundo edutefei', '420-370-531-000', 'Poblacion, Inabanga, Bohol', 'Lonoy, Roma, Nabuad,Liloan Sur, Inabanga, Bohol', 'SAG', 'CSGP-003-05-08-23', 5000, 50000, '2023-05-08', '2025-05-08', 1),
(4, 'sample', 'sample21', 'fdse23', 'fadfa', 'fesaf', 'afafd', 4452, 5345, '3453-04-04', '5453-03-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quarry_permits`
--

CREATE TABLE `quarry_permits` (
  `Quarry_Permit_Key` int(11) NOT NULL,
  `Permittee_Name` varchar(255) DEFAULT NULL,
  `Tin_No` varchar(20) DEFAULT NULL,
  `Postal_Address` text DEFAULT NULL,
  `Extraction_Site` varchar(255) DEFAULT NULL,
  `Type_of_Mineral` varchar(100) DEFAULT NULL,
  `Permit_No` varchar(50) DEFAULT NULL,
  `Approved_Volume` double DEFAULT NULL,
  `Area` double DEFAULT NULL,
  `Date_Approved` date DEFAULT NULL,
  `Expiry_Date` date DEFAULT NULL,
  `Active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quarry_permits`
--

INSERT INTO `quarry_permits` (`Quarry_Permit_Key`, `Permittee_Name`, `Tin_No`, `Postal_Address`, `Extraction_Site`, `Type_of_Mineral`, `Permit_No`, `Approved_Volume`, `Area`, `Date_Approved`, `Expiry_Date`, `Active`) VALUES
(1, 'Acenas, Leonardo', '448-021-928-000', 'Cansuhay, Duero, Bohol', 'Cansuhay, Duero, Bohol', 'SAG', 'CSGP-005-06-14-23', 4000, 1995, '2023-06-14', '2025-06-14', 1),
(2, 'Amora, Lucresio', '(DL) G03-91-019387', 'Bulawan, Guindulman, Bohol', 'Bulawan & Canhaway,\nGuindulman, Bohol', 'SAG', 'CSGP-020-12-15-21', 2000, 20317, '2021-11-09', '2023-11-09', 1),
(3, 'Anud, Segundo', '420-370-531-000', 'Poblacion, Inabanga, Bohol', 'Lonoy, Roma, Nabuad,\nLiloan Sur, Inabanga, Bohol', 'SAG', 'CSGP-003-05-08-23', 5000, 50000, '2023-05-08', '2025-05-08', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commercial`
--
ALTER TABLE `commercial`
  ADD PRIMARY KEY (`Commercial_Permit_Key`),
  ADD UNIQUE KEY `Unique_Permit_No` (`Permit_No`);

--
-- Indexes for table `industrial`
--
ALTER TABLE `industrial`
  ADD PRIMARY KEY (`Industrial_Permit_Key`),
  ADD UNIQUE KEY `Unique_Permit_No` (`Permit_No`);

--
-- Indexes for table `quarry_permits`
--
ALTER TABLE `quarry_permits`
  ADD PRIMARY KEY (`Quarry_Permit_Key`),
  ADD UNIQUE KEY `Unique_Permit_No` (`Permit_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commercial`
--
ALTER TABLE `commercial`
  MODIFY `Commercial_Permit_Key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `industrial`
--
ALTER TABLE `industrial`
  MODIFY `Industrial_Permit_Key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quarry_permits`
--
ALTER TABLE `quarry_permits`
  MODIFY `Quarry_Permit_Key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
