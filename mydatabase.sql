-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 10:08 AM
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
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `username` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`username`, `date`, `status`) VALUES
('Arun', '2023-05-13', 'Present'),
('Arun', '2023-05-14', 'Present'),
('Avinash', '2023-05-13', 'Present'),
('Chaitanya', '2023-05-08', 'Absent'),
('Chaitanya', '2023-05-10', 'Present'),
('Chaitanya', '2023-05-12', 'Present'),
('Chaitanya', '2023-05-18', 'Present'),
('Chetan', '2023-05-13', 'Present'),
('Chetan', '2023-05-14', 'Present'),
('Dhanush', '2023-05-13', 'Present'),
('Sasi', '2023-05-13', 'Present'),
('Sasi', '2023-05-14', 'Present'),
('Tirumalesh', '2023-05-13', 'Absent'),
('Tirumalesh', '2023-05-14', 'Present'),
('Tirumalesh', '2023-05-18', 'Present'),
('Venkat', '2023-05-10', 'Present'),
('Vikram', '2023-05-13', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `department` varchar(25) DEFAULT NULL,
  `No:Of_Present` varchar(25) DEFAULT NULL,
  `Surname` varchar(30) NOT NULL,
  `salary` int(11) NOT NULL,
  `GST` varchar(30) NOT NULL,
  `Working Hours` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Name`, `Username`, `Password`, `age`, `department`, `No:Of_Present`, `Surname`, `salary`, `GST`, `Working Hours`, `status`) VALUES
('Avinash', 'Sasi', '123', '20', 'Developer', '2', 'Jonna', 50000, '5%', '', ''),
('Arun', 'Arun', 'Arun', '25', 'Developer', '2', 'Pichikala', 40000, '5%', '', ''),
('Chetan', 'Chetan', 'Chetan', '30', 'Developer', '2', 'Ch', 60000, '5%', '', ''),
('Chaitanya', 'Chaitanya', 'Chaitanya', '45', 'Finance', '3', 'C', 43879, '5%', '', ''),
('Tirumalesh', 'Tirumalesh', 'Tirumalesh', '43', 'Developer', '2', 'D', 23901, '5%', '', ''),
('Avinash', 'Avinash', 'Avinash', '34', 'Developer', '1', 'P.S', 0, '5%', '', ''),
('Vikram', 'Vikram', 'Vikram', '23', 'Developer', '1', 'V', 34489, '5%', '', ''),
('Dhanush', 'Dhanush', 'Dhanush', '34', 'Developer', '1', 'K', 32961, '5%', '', ''),
('Venkat', 'Venkat', 'Venkat', '34', 'Testing', '1', 'M', 234354, '5%', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `department` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`Name`, `Username`, `Password`, `age`, `department`) VALUES
('Sasidhar', 'Sasi', '321', 19, 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`username`,`date`),
  ADD KEY `date` (`date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
