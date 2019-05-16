-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2019 at 07:19 AM
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
  `target_position` int(10) UNSIGNED NOT NULL,
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
  `job_position` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `birth_certificate_id` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `employment_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `health_package` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `middle_initial`, `sex`, `current_address`, `place_of_birth`, `birthdate`, `phone_number`, `email`, `linkedin_profile`, `educational_attainment`, `civil_status`, `nationality`, `SSN`, `job_position`, `birth_certificate_id`, `employment_date`, `health_package`) VALUES
(1, 'John', 'Solis', 'M', 'M', '16 Mariano street, KL Village, Quezon City, Manila', 'Quezon City', '2000-01-02', '53634454', 'msolis@company.com', '', 'Vocational', 'S', 'Filipino', '435354998', 'Janitor 1', '564565645', '2019-05-08 11:05:53', 1),
(2, 'Reno', 'Villar', 'R', 'M', 'B4 L23 AK housing village, Quezon City', 'Manila', '1997-05-01', '43453242', 'avil@company.com', 'linkedin.com/bestjanitor', 'Highschool', 'S', 'Filipino', '43252432', 'Janitor', '5436563', '2019-05-08 11:09:52', 2),
(19, 'Shiro', 'Nai', 'K', 'F', 'Block 5 Lot 11 B.F. Homes, Paranaque City, Metro Manila.', 'Quezon City', '2017-11-22', '090543216969', 'nai_kimochi@gmail.com', 'linkedin.com/nainanikusorayo', 'College', 'S', 'Filipino', '7646359856', 'Maid', '83294832474', '2019-05-16 05:29:19', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `health_packages`
--

CREATE TABLE `health_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `package_desc` varchar(600) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `health_packages`
--

INSERT INTO `health_packages` (`id`, `package_name`, `package_desc`) VALUES
(1, 'Package A', 'Basic SSS contributions monthly.'),
(2, 'Package B', 'Basic SSS contributions and basic health insurance.'),
(3, 'Package C', 'Basic SSS contributions and premium health insurance.');

-- --------------------------------------------------------

--
-- Table structure for table `job_positions`
--

CREATE TABLE `job_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_title` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `job_description` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `is_open` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `job_positions`
--

INSERT INTO `job_positions` (`id`, `job_title`, `job_description`, `is_open`) VALUES
(1, 'Janitor 1', 'Basic entry level janitor. Basic salary and starting pay. with health benefits.', 1),
(2, 'Secretary 1', 'Entry level secretary. Basic benefits.', 1),
(3, 'Receptionist 2', 'Receptionist with at least 1 year experience in the bob or any related job. Basic benefits.', 1);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `target_position` (`target_position`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `health_package` (`health_package`);

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
-- Indexes for table `health_packages`
--
ALTER TABLE `health_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_positions`
--
ALTER TABLE `job_positions`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `employee_deps`
--
ALTER TABLE `employee_deps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_job_history`
--
ALTER TABLE `employee_job_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `employee_skills`
--
ALTER TABLE `employee_skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `health_packages`
--
ALTER TABLE `health_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_positions`
--
ALTER TABLE `job_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_ibfk_1` FOREIGN KEY (`target_position`) REFERENCES `job_positions` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`health_package`) REFERENCES `health_packages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_deps`
--
ALTER TABLE `employee_deps`
  ADD CONSTRAINT `employee_deps_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_skills`
--
ALTER TABLE `employee_skills`
  ADD CONSTRAINT `employee_skills_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
