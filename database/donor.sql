-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 11:17 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(45) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `b_type` varchar(3) NOT NULL,
  `bday` date NOT NULL,
  `city` varchar(30) NOT NULL,
  `don_date` date NOT NULL,
  `temp` varchar(10) NOT NULL,
  `pulse` varchar(10) NOT NULL,
  `bp` varchar(10) NOT NULL,
  `hemoglobin` varchar(25) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `fname`, `mname`, `lname`, `sex`, `b_type`, `bday`, `city`, `don_date`,  `temp`, `pulse`, `bp`, `hemoglobin`, `mobile`) VALUES
(30, 'Rami', '', 'Ahmad', 'male', 'O+', '1994-07-16', 'Jerusalem',  '2019-04-18',  '30', '60', '80 | 120', 16,  '9827983762'),
(31, 'Dana', '', 'Mahmoud', 'female', 'A+', '1994-02-02', 'Nablus', '2021-04-18',  '30', '60', '80 | 120', 17 , '8602042302'),
(32, 'Farah', '', 'Hamzeh', 'female', 'O+', '1994-09-24',  'Ramallah', '2020-04-19', '30', '70', '80 | 120', 18,  '8269036096'),
(33, 'Omar ', '', 'Raed', 'male', 'AB+', '2019-08-05', 'Qalqilya',  '2021-05-05', '30', '30',  '120', 15,  '98456545'),
(34, 'Laith', '', 'Raed', 'male', 'O-', '1995-05-05', 'Ramallah',  '2020-11-11', '35', '88', '120', 16,  '98988'),
(35, 'Alaa', '', 'Majed', 'male', 'A+', '1996-08-08', 'Jenen', '2020-11-11',  '35', '56', '125', 17,  '88995566'),
(36, 'Khalid', '', 'Jamal', 'male', 'B-', '1998-05-05', 'Hebron',  '2019-11-11',  '30', '50', '120', 15,  '9988');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `f_name` varchar(35) NOT NULL,
  `m_name` varchar(15) DEFAULT NULL,
  `l_name` varchar(35) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `b_day` date NOT NULL,
  `designation` varchar(35) NOT NULL,
  `mobile_nr` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `f_name`, `m_name`, `l_name`, `username`, `password`, `b_day`, `designation`,  `mobile_nr`) VALUES
(11, 'Roaa', 'Sameer', 'Sawalmeh', 'roaa', '567', '2000-07-16',  'employee',  '0598279837');
# (18, 'Dalia', 'Malmoud', 'Omar', 'dalia', '1234', '2000-12-17',  'employee',  '0568349862');
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `b_type` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `dob`, `gender`, `b_type`, `city`, `mobile`, `created_at`) VALUES
(1, 'Naseem', 'Amjad', 'naseem43@gmail.com', '1994-07-16', 'Male', 'O+', 'Nablus', '9827983762', '2021-05-08 05:19:55'),
(2, 'Haya', 'samer', 'haya123@gmail.com', '1994-09-24', 'Female', 'B+', 'Hebron', '8269036096', '2021-05-08 05:19:41'),
(3, 'Mazen', 'Mohammad', 'mazenm2@gmail.com', '2000-02-15', 'Male', 'O+',  'Bethlehem', '8871479418', '2021-05-08 05:20:41'),
(5, 'Yousef', 'Mazen', 'yousef654@gmail.com', '1970-05-08', 'Male', 'B+', 'Ramallah', '99887070', '2021-05-08 05:21:35'),
(6, 'Hani', 'Shraim', 'hanishraim@gmail.com', '1995-05-05', 'Male', 'B-',  'Jericho', '99889988', '2021-05-08 05:22:44'),
(7, 'Ali', 'Hamdan', 'ali9856@gmail.com', '1996-05-08', 'Male', 'A-','Jerusalem', '9988', '2021-05-08 05:23:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),


--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
