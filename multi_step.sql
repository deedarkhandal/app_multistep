-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2024 at 07:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_multistep`
--

-- --------------------------------------------------------

--
-- Table structure for table `multi_step`
--

CREATE TABLE `multi_step` (
  `id` int NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `gplus` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `multi_step`
--

INSERT INTO `multi_step` (`id`, `email`, `pass`, `twitter`, `facebook`, `gplus`, `fname`, `lname`, `phone`, `address`) VALUES
(4, 'dfghjk', 'dfghj', 'rtyuio', 'fghjkl', 'fghjkl', 'sadfghjk', 'dfghjk', 'dfghjkl', 'sdfghjk'),
(5, 'deedar', 'dfghj', 'rtyuio', 'fghjkl', 'fghjkl', 'sadfghjk', 'dfghjk', 'dfghjkl', 'sdfghjk'),
(6, 'karan', 'dfghj', 'karan', 'karan', 'karan', 'karan singh', 'singh', '98888888', 'dhuri'),
(7, 'karan', 'dfghj', 'karan', 'karan', 'karan', 'karan singh', 'singh', '98888888', 'dhuri'),
(8, 'karan', 'dfghj', 'karan', 'karan', 'karan', 'karan singh', 'singh', '98888888', 'dhuri'),
(9, 'karan', 'dfghj', 'karan', 'karan', 'karan', 'karan singh', 'singh', '98888888', 'dhuri'),
(10, 'karan', 'dfghj', 'karan', 'karan', 'karan', 'karan singh', 'singh', '98888888', 'dhuri'),
(11, 'karan', 'dfghj', 'karan', 'karan', 'karan', 'karan singh', 'singh', '98888888', 'dhuri'),
(12, 'karan', 'dfghj', 'karan', 'karan', 'karan', 'karan singh', 'singh', '98888888', 'dhuri'),
(13, 'karan', 'dfghj', 'karan', 'karan', 'karan', 'karan singh', 'singh', '98888888', 'dhuri'),
(14, 'fffj', '<br /><b>Warning</b>:  Undefined variable $pass in <b>C:laragonwwwapp_multisteppartialstep1.php</b> on line <b>51</b><br />', 'nhgf', 'yttu', 'yiif', 'djdth', 'mgyut', 'jfufuf', 'jtrr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multi_step`
--
ALTER TABLE `multi_step`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multi_step`
--
ALTER TABLE `multi_step`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
