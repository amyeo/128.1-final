-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2019 at 06:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `128.1v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(300) COLLATE utf8mb4_bin DEFAULT NULL,
  `user_password` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `full_name` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `middle_initial` varchar(2) COLLATE utf8mb4_bin DEFAULT NULL,
  `sex` enum('M','F') COLLATE utf8mb4_bin DEFAULT NULL,
  `current_address` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `place_of_birth` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `linkedin_profile` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `educational_attainment` enum('College','Vocational','Highschool','Elementary') COLLATE utf8mb4_bin DEFAULT NULL,
  `civil_status` enum('S','M') COLLATE utf8mb4_bin DEFAULT NULL,
  `nationality` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `SSN` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `target_position` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `birth_certificate_id` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `user_password` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `skills_csv` varchar(6000) COLLATE utf8mb4_bin DEFAULT NULL,
  `job_history_csv` mediumtext COLLATE utf8mb4_bin,
  `approved` tinyint(1) DEFAULT '0',
  `do_not_show` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `middle_initial` varchar(2) COLLATE utf8mb4_bin DEFAULT NULL,
  `sex` enum('M','F') COLLATE utf8mb4_bin DEFAULT NULL,
  `current_address` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `place_of_birth` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `linkedin_profile` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `educational_attainment` enum('College','Vocational','Highschool','Elementary') COLLATE utf8mb4_bin DEFAULT NULL,
  `civil_status` enum('S','M') COLLATE utf8mb4_bin DEFAULT NULL,
  `nationality` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `SSN` varchar(15) COLLATE utf8mb4_bin DEFAULT NULL,
  `target_position` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `birth_certificate_id` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `employment_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_deps`
--

CREATE TABLE `employee_deps` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `dep_name` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `dep_relation` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_job_history`
--

CREATE TABLE `employee_job_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `job_name` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `job_desc` varchar(300) COLLATE utf8mb4_bin DEFAULT NULL,
  `year_started` int(11) DEFAULT NULL,
  `year_ended` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `employee_skills`
--

CREATE TABLE `employee_skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `skill` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_deps`
--
ALTER TABLE `employee_deps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_job_history`
--
ALTER TABLE `employee_job_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_skills`
--
ALTER TABLE `employee_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_deps`
--
ALTER TABLE `employee_deps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_job_history`
--
ALTER TABLE `employee_job_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_skills`
--
ALTER TABLE `employee_skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_deps`
--
ALTER TABLE `employee_deps`
  ADD CONSTRAINT `employee_deps_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);

--
-- Constraints for table `employee_job_history`
--
ALTER TABLE `employee_job_history`
  ADD CONSTRAINT `employee_job_history_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);

--
-- Constraints for table `employee_skills`
--
ALTER TABLE `employee_skills`
  ADD CONSTRAINT `employee_skills_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
