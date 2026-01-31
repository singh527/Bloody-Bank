-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2026 at 02:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloody_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_availability`
--

CREATE TABLE `blood_availability` (
  `blood_name` varchar(10) NOT NULL,
  `availability` int(10) NOT NULL,
  `loacation` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_availability`
--

INSERT INTO `blood_availability` (`blood_name`, `availability`, `loacation`, `status`) VALUES
('A+', 20, 'Delhi', 'Available'),
('A-', 8, 'Bhopal', 'Available'),
('AB+', 5, 'Patna', 'Low'),
('B+', 15, 'Mumbai', 'Available'),
('O+', 30, 'Lucknow', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL,
  `con_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `message`, `con_id`) VALUES
('Rahul Sharma', 'rahul@gmail.com', 'Need urgent blood information', 1),
('Anjali Verma', 'anjali@gmail.com', 'How to become a donor?', 2),
('Amit Singh', 'amit@gmail.com', 'Facing login issue', 3),
('Neha Gupta', 'neha@gmail.com', 'Blood camp timing details', 4);

-- --------------------------------------------------------

--
-- Table structure for table `fund_donar`
--

CREATE TABLE `fund_donar` (
  `name` varchar(50) NOT NULL,
  `amout` int(12) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `f_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fund_donar`
--

INSERT INTO `fund_donar` (`name`, `amout`, `type`, `date`, `f_id`) VALUES
('Suresh Kumar', 500, 'Online', '2025-01-05', 1),
('Pooja Mehta', 1000, 'Offline', '2025-01-10', 2),
('Ravi Verma', 1500, 'Online', '2025-01-12', 3),
('Kiran Singh', 700, 'Offline', '2025-01-15', 4);

-- --------------------------------------------------------

--
-- Table structure for table `near_camp`
--

CREATE TABLE `near_camp` (
  `camp_name` varchar(20) NOT NULL,
  `location` varchar(300) NOT NULL,
  `slot_available` int(10) NOT NULL,
  `open_time` time(6) NOT NULL,
  `close_time` time(6) NOT NULL,
  `date` date NOT NULL,
  `camp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `near_camp`
--

INSERT INTO `near_camp` (`camp_name`, `location`, `slot_available`, `open_time`, `close_time`, `date`, `camp_id`) VALUES
('Red Cross Camp', 'Delhi', 20, '09:00:00.000000', '17:00:00.000000', '2025-01-20', 1),
('City Blood Camp', 'Mumbai', 15, '10:00:00.000000', '16:00:00.000000', '2025-01-22', 2),
('Life Saver Camp', 'Lucknow', 10, '08:00:00.000000', '14:00:00.000000', '2025-01-25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(50) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `reg_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `aadhar`, `gender`, `age`, `mobile`, `password`, `email`, `blood`, `reg_type`) VALUES
('siddhant', 466709921448, 'female', 45, 7408367098, '$2y$10$3cOVpSEfcXKuZGfmcudFbeqwDtN6NufWSY1dVL964Mc25976EC90W', '', 'AB+', 'donar'),
('shubham', 123456789012, 'male', 45, 8765281544, '$2y$10$aYeuadt3K1P7hY2amfXUk.1qrRY58FWsdtM2n0GdUN1.yn5j5D3q6', '', 'A+', 'donar');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

CREATE TABLE `request_blood` (
  `name` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `unit_require` int(10) NOT NULL,
  `hospital` varchar(300) NOT NULL,
  `urgency level` varchar(20) NOT NULL,
  `date_require` date NOT NULL,
  `reason_request` varchar(300) NOT NULL,
  `require_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slot_booking`
--

CREATE TABLE `slot_booking` (
  `name` varchar(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `blood_group` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `p_time` time(6) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `camp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slot_booking`
--

INSERT INTO `slot_booking` (`name`, `address`, `blood_group`, `gender`, `p_time`, `booking_id`, `status`, `camp_id`) VALUES
('Rahul Sharma', 'Delhi', 'A+', 'Male', '10:30:00.000000', 1, 'Booked', 1),
('Anjali Verma', 'Mumbai', 'B+', 'Female', '11:00:00.000000', 2, 'Booked', 2),
('Amit Singh', 'Lucknow', 'O+', 'Male', '09:45:00.000000', 3, 'Pending', 3);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `name` varchar(30) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `type` varchar(15) NOT NULL,
  `t_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`name`, `comment`, `type`, `t_id`) VALUES
('Rahul Sharma', 'Very helpful blood donation platform', 'Donor', 1),
('Anjali Verma', 'Easy to find blood donors', 'User', 2),
('Amit Singh', 'Good initiative for society', 'Donor', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_availability`
--
ALTER TABLE `blood_availability`
  ADD PRIMARY KEY (`blood_name`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `fund_donar`
--
ALTER TABLE `fund_donar`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `near_camp`
--
ALTER TABLE `near_camp`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);

--
-- Indexes for table `request_blood`
--
ALTER TABLE `request_blood`
  ADD PRIMARY KEY (`require_id`);

--
-- Indexes for table `slot_booking`
--
ALTER TABLE `slot_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `con_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fund_donar`
--
ALTER TABLE `fund_donar`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `near_camp`
--
ALTER TABLE `near_camp`
  MODIFY `camp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_blood`
--
ALTER TABLE `request_blood`
  MODIFY `require_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slot_booking`
--
ALTER TABLE `slot_booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `t_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
