-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2022 at 10:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_hospitals`
--

CREATE TABLE `add_hospitals` (
  `id` int(100) NOT NULL,
  `hospital_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone_number` varchar(100) CHARACTER SET utf8 NOT NULL,
  `staff_number` varchar(100) CHARACTER SET utf8 NOT NULL,
  `location` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `add_hospitals`
--

INSERT INTO `add_hospitals` (`id`, `hospital_name`, `email`, `phone_number`, `staff_number`, `location`) VALUES
(1, 'Yasmeen Hospital', 'yasmeen@gmail.com', '022-704-0180', '37', 'New Maadi -Algeria street,\r\nCairo Governrate,\r\nEgypt'),
(2, 'Al Hussein University Hospital', 'elhussein@gmail.com', '022-510-5354', '50', 'After Al-Azhar mosque,\r\nCairo Governrate,\r\nEgypt'),
(3, '57357 Hospital', '57357@gmail.com', '19057', '60', 'Sekat Hadid Al Mahger ,Zeinhom,\r\nElsayeda Zeinab,\r\nCairo Governrate,\r\nEgypt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_hospitals`
--
ALTER TABLE `add_hospitals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_hospitals`
--
ALTER TABLE `add_hospitals`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
