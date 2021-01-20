-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 08:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Roll` int(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Year_of_graduation` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Date_of_birth` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Blood_group` varchar(100) NOT NULL,
  `Contact_address` varchar(500) NOT NULL,
  `Mobile_no` varchar(100) NOT NULL,
  `Professional_info` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `Name`, `Roll`, `Department`, `Year_of_graduation`, `Email`, `Date_of_birth`, `Gender`, `Blood_group`, `Contact_address`, `Mobile_no`, `Professional_info`, `Image`, `Status`) VALUES
(13, 'Adil Reza', 14394, 'CSE', '2018', 'adilcse14@gmail.com', '23/09/1995', 'male', 'B+', 'Khustia, Khulna', '01364688493', 'DevOps Engineer, Selise Rockin Software', 'adil_reza_pic.jpg', 'yes'),
(14, 'Najmul Hasan Kallol', 3323, 'CSE', '2009', 'kallolruetcse@gmail.com', '12/04/1982', 'male', 'A-', 'Mountain view, California, USA', '+9124345553', '\r\nSr. iOS Engineer, Ascend Technology, Inc.', 'Kallol_pic.jpg', 'yes'),
(15, 'Abu Asif Khan Chowdhury', 10345, 'CSE', '2016', 'asifxys@gmail.com', '23/03/1990', 'male', 'A+', 'Copenhegen', '+872372568', 'Software Engineer, Microsoft Development Copenhagen', 'asif_pic.jpg', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
