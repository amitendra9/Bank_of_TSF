-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 07:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `userName` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `currentBalance` decimal(12,2) DEFAULT NULL,
  `gender` varchar(128) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `userName`, `email`, `currentBalance`, `gender`, `dob`, `address`) VALUES
(1, 'Amitendra Singh', 'amitendrasingh2017@gmail.com', '4736.00', 'Male', '1994-09-16', '420 Bharsen\r\nBharsen, Auraiya\r\nPin-206122'),
(2, 'Mohd. Amir', 'amir786@gmail.com', '8746.00', 'Male', '1999-09-09', 'Mohd. Houses\r\nMohan Nagar Auraiya\r\n206122'),
(3, 'Chandan Raj', 'rajchand@gmail.com', '9737.00', 'Male', '2001-01-05', '145 Chand-Kila\r\nMohan Nagar Auraiya\r\n206122'),
(4, 'Rajani', 'rajani7@gmail.com', '10286.00', 'Female', '1990-11-11', 'Rajkumari Kunj\r\nKailash Nagar, Dibiyapur\r\nAuraiya 206244'),
(5, 'Raj Singh', 'singhraj007@gmail.com', '85236.00', 'Male', '1997-02-11', 'Shree Niwas\r\nKunjNagar, Auraiya\r\n206122'),
(6, 'Rakesh Singh', 'singhrakesh1234@gmail.com', '1585.00', 'Male', '1996-05-11', 'Rakesh Bhawan,\r\nVikas nagr\r\nAuraiya 20612'),
(7, 'Seema Singh', 'seemamaurya09@gmail.com', '4571.00', 'Female', '1998-05-24', '12 Ayush Awas\r\nNear Station Chandanpur Dibiyapur\r\nAuraiya 206244'),
(8, 'RajKumari', 'rajkumari7@gmail.com', '16046.00', 'Female', '1980-12-12', '143 Kalyanpur,\r\nDibiyapur Auraiya\r\n206244 '),
(9, 'Ramkeerat', 'singhram@gmail.com', '8541.00', 'Male', '1986-10-20', '34 Gautam Nagar\r\nAuraiya 206122'),
(10, 'Surya Kumar', 'skyadav77@gmail.com', '15006.00', 'Male', '1995-03-05', '12 Gandhi Nagar \r\nJaisalmer\r\n514201');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `transaction_id` int(11) NOT NULL,
  `sender` varchar(128) DEFAULT NULL,
  `reciever` varchar(128) DEFAULT NULL,
  `amt` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`transaction_id`, `sender`, `reciever`, `amt`) VALUES
(60, 'Amitendra Singh', 'Chandan Raj', '250.00'),
(61, 'Amitendra Singh', 'Chandan Raj', '250.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
