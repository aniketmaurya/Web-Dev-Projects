-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 11:08 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `internship_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `email`, `internship_id`) VALUES
(1, 'theaniketmaurya@gmail.com', 1),
(2, 'theaniketmaurya@gmail.com', 5),
(3, 'theaniketmaurya@gmail.com', 4),
(4, 'theaniketmaurya@gmail.com', 3),
(5, 'theaniketmaurya@gmail.com', 2),
(6, 'theaniketmaurya@gmail.com', 9),
(7, 'anshu@gmail.com', 6),
(8, 'anshu@gmail.com', 8),
(9, 'anshu@gmail.com', 7),
(10, 'anshu@gmail.com', 4),
(11, 'anshu@gmail.com', 1),
(12, 'anshika@gmail.com', 5),
(13, 'anshika@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` int(11) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `employer_email` varchar(255) NOT NULL,
  `city` enum('Delhi','Mumbai','Kolkata','Bangalore','Hyderabad','Chennai','Virtual') DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `apply_by` date DEFAULT NULL,
  `stipend` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `company`, `description`, `employer_email`, `city`, `start_date`, `apply_by`, `stipend`, `duration`) VALUES
(1, 'Dell', '', '', 'Delhi', '2017-06-11', '2017-06-21', '5K', '5 months'),
(2, 'HP', '', '', 'Virtual', '2017-06-13', '2017-06-19', '7K', '5 months'),
(3, 'Delloite', '', '', 'Chennai', '2017-06-11', '2017-06-17', '9k', '9 months'),
(4, 'Puma', '', '', 'Hyderabad', '2017-06-11', '2017-06-17', '2k', '7 months'),
(5, 'AVC', '', '', 'Chennai', '2017-06-19', '2017-08-31', '2k', '7 months'),
(6, 'DPP', '', '', 'Bangalore', '2018-02-01', '2020-01-02', '', ''),
(10, 'Maurya Enterprises', '', 'admin@gmail.com', 'Delhi', '2017-06-11', '2017-06-30', '', ''),
(11, 'MAURYA PARTY POINT', '', 'admin@gmail.com', 'Delhi', '2017-06-11', '2017-06-10', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` enum('Student','Employer') DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `contact`) VALUES
(1, 'Aniket Maurya', 'admin@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Employer', '8407048181'),
(2, 'Aniket Maurya', 'theaniketmaurya@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Student', '2345678901'),
(3, 'Anshu', 'anshu@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Student', '1234567890'),
(4, 'Anshika Maurya', 'anshika@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Student', '8507672659');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `internship_id` (`internship_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`internship_id`) REFERENCES `internships` (`id`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
