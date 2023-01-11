-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 07:22 AM
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
-- Database: `CALORIE_CALCULATOR`
--

-- --------------------------------------------------------

--
-- Table structure for table `calorie_intake_table`
--

CREATE TABLE `calorie_intake_table` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Total_Calorie_Intake` int(100) NOT NULL,
  `Target_Calorie_Intake` int(100) NOT NULL,
  `Target_Acheived_Intake` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calorie_intake_table`
--

INSERT INTO `calorie_intake_table` (`id`, `date`, `User_Name`, `Total_Calorie_Intake`, `Target_Calorie_Intake`, `Target_Acheived_Intake`) VALUES
(1, '2023-01-07', 'vikash', 250, 650, 18),
(7, '2023-01-04', 'dav', 180, 600, 12),
(4, '2023-01-03', 'ram', 260, 600, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calorie_intake_table`
--
ALTER TABLE `calorie_intake_table`
  ADD PRIMARY KEY (`User_Name`),
  ADD UNIQUE KEY `UNIQUE` (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calorie_intake_table`
--
ALTER TABLE `calorie_intake_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
