-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 05:47 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinglists`
--

CREATE TABLE `bookinglists` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `count` varchar(50) NOT NULL,
  `tc` varchar(30) NOT NULL,
  `spaceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinglists`
--

INSERT INTO `bookinglists` (`id`, `name`, `location`, `count`, `tc`, `spaceId`) VALUES
(1, 'My parking', 'house No 380, road No 2, Adabor', '8', '800', 1),
(2, 'Test', 'house No 48, road No 4, shamoly', '4', '800', 2),
(3, 'AIUB', 'house No 156, road No 35, Kuratoli', '2', '500', 10);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `psname` varchar(20) NOT NULL,
  `spaceId` int(11) NOT NULL,
  `bookinglistID` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `vnumber` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `tc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `number`, `psname`, `spaceId`, `bookinglistID`, `location`, `date`, `time`, `duration`, `vnumber`, `type`, `tc`) VALUES
(2, 'bhuiya', 'bhuiya@gmail.com', '01734779901', 'My parking', 1, 1, 'house No 380, road No 2, Adabor', '22/08/2019', '11:00 am', '2', 'Dhaka-d-99-0000', 'car', '200'),
(3, 'test', 'test@gmail.com', '01734779901', 'My parking', 1, 1, 'house No 380,road No 2,Adabor', '21/08/2019', '9:00 am', '2', 'Dhaka-d-13-3131', 'motorcycle', '200'),
(4, 'test', 'test@gmail.com', '01734779901', 'My parking', 1, 1, 'house No 380,road No 2,Adabor', '21/08/2019', '9:00 am', '2', 'Dhaka-d-13-3131', 'motorcycle', '200'),
(5, 'test', 'test@gmail.com', '01734779901', 'My parking', 1, 1, 'house No 380,road No 2,Adabor', '21/08/2019', '9:00 am', '2', 'Dhaka-d-13-3131', 'motorcycle', '200'),
(7, 'test', 'test@gmail.com', '01734779901', 'Test', 2, 2, 'house No 48,road No 4,shamoly', '21/08/2019', '3:00 pm', '2', 'Dhaka-d-13-3131', 'car', '400'),
(8, 'xyz', 'xyz@gmail.com', '89756431250', 'Test', 2, 2, 'house No 48,road No 4,shamoly', '25/08/2019', '3:00 pm', '2', 'Dhaka-d-13-3131', 'car', '400'),
(9, 'test', 'abc@gmail.com', '5555555555', 'Test', 2, 2, 'house No 48,road No 4,shamoly', '21/08/2019', '2:00 pm', '3', 'Dhaka-d-99-0000', 'motorcycle', '600'),
(12, 'Anim', 'anim@gmail.com', '1734779901', 'My parking', 1, 3, 'house No 156, road No 35, Kuratoli', '25/08/2019', '9:00 am', '2', 'Dhaka-d-99-5646', 'motorcycle', '500'),
(13, 'Anim', 'anim@gmail.com', '1734779901', 'AIUB', 0, 3, 'house No 156, road No 35, Kuratoli', '21/08/2019', '1:30 pm', '2', 'Dhaka-d-55-9999', 'motorcycle', '500'),
(14, 'anim', 'anim@gmail.com', '1734779901', 'My parking', 0, 1, 'house No 380, road No 2, Adabor', '20/08/2019', '1:30 pm', '1', 'Dhaka-d-13-3131', 'motorcycle', '100'),
(16, 'Anim', 'test@gmail.com', '13333333333', 'AIUB', 10, 3, 'house No 156, road No 35, Kuratoli', '25/08/19', '12', '12:30 pm', 'Dhaka-d-99-6456', 'truck', '3000'),
(17, 'anim', 'anim@gmail.com', '1734779901', 'My parking', 1, 1, 'house No 380, road No 2, Adabor', '25/08/2019', '1:30 pm', '2', 'Dhaka-d-13-3131', 'motorcycle', '200'),
(18, 'anim', 'anim@gmail.com', '1734779901', 'My parking', 1, 1, 'house No 380, road No 2, Adabor', '20/08/2019', '3:00 pm', '5', 'Dhaka-d-99-5461', 'motorcycle', '500');

-- --------------------------------------------------------

--
-- Table structure for table `spaces`
--

CREATE TABLE `spaces` (
  `spaceId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `houseNo` varchar(20) NOT NULL,
  `roadNo` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `motorcycle` varchar(20) NOT NULL,
  `car` varchar(20) NOT NULL,
  `truck` varchar(20) NOT NULL,
  `buse` varchar(20) NOT NULL,
  `charge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spaces`
--

INSERT INTO `spaces` (`spaceId`, `name`, `houseNo`, `roadNo`, `area`, `motorcycle`, `car`, `truck`, `buse`, `charge`) VALUES
(1, 'My parking', 'house No 380', 'road No 2', 'Adabor', 'motorcycle 20', 'car 15', 'truck 1', 'buse0', 100),
(2, 'Test', 'house No 48', 'road No 4', 'shamoly', 'motorcycle 10', 'car 40', 'truck 0', 'buse 0', 200),
(10, 'AIUB', 'house No 156', 'road No 35', 'Kuratoli', 'motorcycle 20', 'car 50', 'truck 3', 'buse 0', 250);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `username`, `password`, `type`) VALUES
(1, 'Anim', '', 55555555, 'admin', 'admin', 'admin'),
(2, 'test', '', 11111111, 'test', 'test', 'user'),
(3, 'abc', '', 4444444, 'abc', 'abc', 'user'),
(5, 'anim', 'anim@gmail.com', 1734779901, 'anim', 'anim', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinglists`
--
ALTER TABLE `bookinglists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`spaceId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinglists`
--
ALTER TABLE `bookinglists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `spaces`
--
ALTER TABLE `spaces`
  MODIFY `spaceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
