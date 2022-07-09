-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 09:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trading`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adr` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `ste` varchar(40) NOT NULL,
  `Pincode` int(10) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardnumber` varchar(40) NOT NULL,
  `expmonth` varchar(40) NOT NULL,
  `expyear` int(10) NOT NULL,
  `cvv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `firstname`, `email`, `adr`, `city`, `ste`, `Pincode`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES
(1, 'kajal', 'kajal23@gmail.com', 'sri nagar', 'mumbai', 'maharastra', 520011, 'kajuuu', '12345678', '12', 2021, 462),
(2, 'venkata narasamma', 'narasamma_godavarthi@srmap.edu.in', 'thadankivari street, sai Bhurundavanam Apartment, ', 'Vijayawada', 'Andhra Pradesh', 520011, 'narsi', '1233', '12', 2021, 123),
(3, 'prabu', 'prabhas1023@gmail.com', 'singinagar', 'Hyderabad', 'Andhra Pradesh', 520011, 'prabhas', '23456789016783', '10', 2022, 436),
(4, 'Bindu', 'bindu1234@gmail.com', 'near prabhas college', 'vijayawada', 'Andhra Pradesh', 520011, 'bindu nit', '232323050505', '07', 2022, 235),
(5, 'lavanya', 'lavanya123@gmail.com', 'bhandar road', 'Vijayawada', 'Andhra Pradesh', 520011, 'lavanya', '1234', '5', 2022, 234),
(8, 'Noushika ', 'noushika_mothukuri15@gmail.com', 'Sai sri residency, Bandar road', 'Eluru', 'Andhra Pradesh', 534001, 'Noushika Mothukuri', '567893201234098', '02', 2022, 234),
(9, 'Noushika ', 'noushika_mothukuri15@gmail.com', 'Sai sri residency, Bandar road', 'Eluru', 'Andhra Pradesh', 534001, 'Noushika Mothukuri', '567893201234098', '02', 2022, 234);

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(50) NOT NULL,
  `FullName` varchar(40) NOT NULL,
  `Phoneno` varchar(40) NOT NULL,
  `Selecttype` varchar(40) NOT NULL,
  `Brand` varchar(40) NOT NULL,
  `VehicleName` varchar(40) NOT NULL,
  `Vehiclecolor` varchar(40) NOT NULL,
  `VehicleMilage` varchar(40) NOT NULL,
  `VehiclePrice` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `FullName`, `Phoneno`, `Selecttype`, `Brand`, `VehicleName`, `Vehiclecolor`, `VehicleMilage`, `VehiclePrice`) VALUES
(1, 'shyam', '8688733035', 'Bike', 'Tvs', '120', 'black', '40', '10000'),
(3, 'noushi', '8688733035', 'Car', 'audi', 'Rs5', 'blue', '150', '300000'),
(6, 'geethika', '9247888485 , 9848532123', 'Car', 'benz', '120', 'grey', '165', '2250000'),
(7, 'Bindu', '6307896781', 'Car', 'benz', 'Rs5', 'blue', '140', '300000'),
(8, 'Manasa', '6307896781', 'Bike', 'royal enfield', 'classic 360', 'grey', '65', '200000'),
(9, 'Govindamma', '9295357875', 'Car', 'BMW', 'X3', 'Grey', '100', '2300000');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `cpsw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Username`, `Firstname`, `Lastname`, `email`, `phone`, `psw`, `cpsw`) VALUES
(1, 'narsi', 'godavarthi', 'venkata narasamma', 'narasamma_godavarthi@srmap.edu.in', '8688532726', '123', '123'),
(2, 'satti', 'godavarthi', 'satya narayana', '170030380@kluniversity.in', '7207201571', 'satti', 'satti'),
(3, 'jaya', 'Thatha', 'Naga Jayasree', 'nagajayasree_thatha@srmap.edu.in', '6302532052', '10032002', '102'),
(4, 'Mahesh', 'Valavala', 'mahesh naidu', 'mahesh123@gmail.com', '8688532726', '123', '143'),
(5, 'vind', 'oruganti', 'aravind', 'aravind23@gmail.com', '8688231245', '2314', '2314'),
(6, 'Manasa', 'Korullu', 'Manasa', 'manasa123@gmail.com', '8688231245', 'manasa', 'manasa'),
(7, 'Mahesh ', 'Valava ', 'Mahesh Naidu', 'maheshnaidu05@gmail.com', '9963039933', 'mahi', 'mahi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
