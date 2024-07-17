-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 06:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `password`, `image`, `created_at`) VALUES
(1, 'Abdul Moiz', 'abdulmoizforaptech@gmail.com', 'admin123', 'assests/dist/img/24 copy.jpg', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `v_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `p_id`, `h_id`, `date`, `time`, `v_id`, `status`, `created_at`) VALUES
(1, 1, 2, '2024-07-01', '9-11', 2, 'pending', 'current_timestamp()'),
(2, 2, 1, '2024-06-30', '1-3', 4, 'pending', 'current_timestamp()'),
(3, 4, 4, '2024-07-13', '5pm-7pm', 2, 'pending', '2024-07-10 21:31:33'),
(4, 4, 1, '2024-07-19', '5pm-7pm', 2, 'pending', '2024-07-10 21:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `name`, `created_at`) VALUES
(1, 'Karachi', 'current_timestamp()'),
(2, 'Lahore', 'current_timestamp()'),
(3, 'Islamabad', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `message` varchar(350) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'hide',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `p_id`, `message`, `status`, `created_at`) VALUES
(1, 2, 'Testing feedback', 'show', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital`
--

CREATE TABLE `tbl_hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'deactivate',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hospital`
--

INSERT INTO `tbl_hospital` (`id`, `name`, `phone`, `c_id`, `address`, `email`, `password`, `image`, `status`, `created_at`) VALUES
(1, 'Abbasi Shaheed Hospital', '02139926030', 2, 'Khilafat Chowk, Nazimabad, Karachi', 'info@kmc.com', 'abbassi', '1.jpg', 'activate', 'current_timestamp()'),
(2, 'Shed Hospital', '02136407011', 1, 'Plot No. ST 1/2-A Sector 11-C-2 North Karachi, Karachi', 'info@shedfoundation.org.pk', 'shed123', 'assests/dist/img/2016-04-12 23.49.59.png', 'deactivate', 'current_timestamp()'),
(3, 'Hamdard Hospital', '02137654321', 3, 'Nazimabad #3, Karachi', 'info@hamdard.com', 'hamdard', 'assests/dist/img/logo maahad.png', 'deactivate', '2024-06-24 00:20:16'),
(4, 'Baqai Hospital', '02134567890', 2, 'B-Block, Nazimabad #3, Karachi', 'info@baqai.com', 'baqai', 'assests/dist/img/hospital/2016-04-12 23.49.59.png', 'activate', '2024-06-24 17:47:38'),
(5, 'Saifee Hospital', '03468229956', 1, 'ST-1, Block-F, North Nazimabad, Karachi-74700 (Pakistan)', 'saifee@gmail.com', 'saifee', 'assests/dist/img/Saifee Hospital.jpg', 'deactivate', '2024-07-10 22:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `c_id` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'activate',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`id`, `name`, `cnic`, `phone`, `email`, `password`, `c_id`, `address`, `gender`, `image`, `status`, `created_at`) VALUES
(1, 'Patient 1', '1234567890123', '03123456789', 'patient1@gmail.com', 'patient1', 3, 'Nazimabad,', 'Male', '', 'activate', 'current_timestamp()'),
(2, 'Patient 2', '4220109876543', '03071234567', 'patient2@gmail.com', 'patient2', 1, 'Khilafat Chowk, Nazimabad, Karachi', 'Female', 'assests/dist/img/patient/1.jpg', 'activate', '2024-06-24 22:07:04'),
(3, 'Patient 3', '3234567890123', '03121234567', 'patient3@gmail.com', 'patient3', 3, 'Khilafat Chowk, Nazimabad, Karachi', 'Other', 'assests/dist/img/patient/2.jpg', 'deactivate', '2024-06-24 22:14:31'),
(4, 'Abdul Moiz', '1234567890123', '03463224382', 'abdulmoizforaptech@gmail.com', '123', 3, 'Nazimabad #3, Karachi', 'Male', 'assests/dist/img/24 copy.jpg', 'activate', '2024-07-07 20:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `result` varchar(50) NOT NULL DEFAULT 'process',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id`, `p_id`, `h_id`, `date`, `time`, `result`, `created_at`) VALUES
(1, 3, 2, '2024-07-01', '', 'process', 'current_timestamp()'),
(2, 1, 4, '2024-06-30', '', 'process', 'current_timestamp()'),
(3, 2, 1, '', '', 'process', 'current_timestamp()'),
(4, 1, 4, '', '', 'process', '2024-07-09 21:51:18'),
(5, 2, 4, '', '', 'process', '2024-07-09 21:51:55'),
(6, 4, 4, '', '', 'process', '2024-07-09 21:52:17'),
(7, 4, 1, '', '', 'process', '2024-07-09 21:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaccine`
--

CREATE TABLE `tbl_vaccine` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'available',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vaccine`
--

INSERT INTO `tbl_vaccine` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'Moderna Spikevax', 'available', 'current_timestamp()'),
(2, 'Pfizer/BioNTech Comirnaty', 'available', 'current_timestamp()'),
(3, 'CanSino Convidecia', 'unavailable', 'current_timestamp()'),
(4, 'Gamaleya Sputnik V', 'unavailable', 'current_timestamp()'),
(5, 'Oxford/AstraZeneca Vaxzevria', 'unavailable', 'current_timestamp()'),
(6, 'Sinopharm (Beijing) Covilo', 'available', 'current_timestamp()'),
(7, 'Sinovac CoronaVac', 'available', 'current_timestamp()');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `v_id` (`v_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD CONSTRAINT `tbl_appointment_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_patient` (`id`),
  ADD CONSTRAINT `tbl_appointment_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `tbl_hospital` (`id`),
  ADD CONSTRAINT `tbl_appointment_ibfk_3` FOREIGN KEY (`v_id`) REFERENCES `tbl_vaccine` (`id`);

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_patient` (`id`);

--
-- Constraints for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD CONSTRAINT `tbl_hospital_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tbl_city` (`id`);

--
-- Constraints for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD CONSTRAINT `tbl_patient_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tbl_city` (`id`);

--
-- Constraints for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD CONSTRAINT `tbl_test_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_patient` (`id`),
  ADD CONSTRAINT `tbl_test_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `tbl_hospital` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
