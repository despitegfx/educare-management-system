-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 06:07 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_data`
--

CREATE TABLE `admission_data` (
  `id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `sname` varchar(255) NOT NULL,
  `other_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `home_town` varchar(255) NOT NULL,
  `mother_tongue` varchar(255) NOT NULL,
  `school_attended` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `family_full_name` varchar(255) NOT NULL,
  `family_relationship` varchar(255) NOT NULL,
  `family_occupation` varchar(255) NOT NULL,
  `family_place_of_work` varchar(255) NOT NULL,
  `family_address` varchar(255) NOT NULL,
  `family_nationality` varchar(255) NOT NULL,
  `family_religion` varchar(255) NOT NULL,
  `family_level_of_edu` varchar(255) NOT NULL,
  `family_marital_status` varchar(255) NOT NULL,
  `family_email` varchar(255) NOT NULL,
  `family_phone` varchar(255) NOT NULL,
  `significant_live_with` varchar(255) NOT NULL,
  `significant_full_name` varchar(255) NOT NULL,
  `significant_languages_spoken` varchar(255) NOT NULL,
  `emergency_full_name` varchar(255) NOT NULL,
  `emergency_house_address` varchar(255) NOT NULL,
  `emergency_phone` varchar(255) NOT NULL,
  `joindate` timestamp NOT NULL DEFAULT current_timestamp(),
  `admitted` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_data`
--

INSERT INTO `admission_data` (`id`, `image`, `sname`, `other_name`, `dob`, `place_of_birth`, `home_town`, `mother_tongue`, `school_attended`, `sex`, `family_full_name`, `family_relationship`, `family_occupation`, `family_place_of_work`, `family_address`, `family_nationality`, `family_religion`, `family_level_of_edu`, `family_marital_status`, `family_email`, `family_phone`, `significant_live_with`, `significant_full_name`, `significant_languages_spoken`, `emergency_full_name`, `emergency_house_address`, `emergency_phone`, `joindate`, `admitted`) VALUES
(1, '', 'Bonsu', 'Emmanuel', '1995-06-03', 'Hiewu Besease', 'Peki, Volta Region', 'Accra', 'Asanteman Senior School', 'Male', 'Kwadwo Bonsu', 'Father', 'Driver', 'Kiteko', 'Juapong', 'Ghana', 'Other', 'None', 'Married', 'kojo@gmail.com', '+233246938074', 'Mother', 'Akosu Agyapomah', 'Twi and English', 'Emmanuel Bonsu', 'Bonsu Nkwanta, Western North Region', '0246938074', '2020-08-14 15:35:08', 'yes'),
(2, '', 'Bonsu', 'Emmanuel', '1995-06-03', 'Hiewu Besease', 'Peki, Volta Region', 'Accra', 'Asanteman Senior School', 'Male', 'Kwadwo Bonsu', 'Father', 'Driver', 'Kiteko', 'Juapong', 'Ghana', 'Other', 'None', 'Married', 'kojo@gmail.com', '+233246938074', 'Mother', 'Twi and English', 'Twi and English', 'Emmanuel Bonsu', 'Bonsu Nkwanta, Western North Region', '0246938074', '2020-08-14 15:38:01', 'yes'),
(3, '', 'Bonsu', 'Emmanuel', '1995-06-03', 'Hiewu Besease', 'Peki, Volta Region', 'Accra', 'Asanteman Senior School', 'Male', 'Kwadwo Bonsu', 'Father', 'Driver', 'Kiteko', 'Juapong', 'Ghana', 'Other', 'None', 'Married', 'kojo@gmail.com', '+233246938074', 'Mother', 'Twi and English', 'Twi and English', 'Emmanuel Bonsu', 'Bonsu Nkwanta, Western North Region', '0246938074', '2020-08-14 15:43:57', 'yes'),
(4, '', 'Bonsu', 'Emmanuel', '1995-06-03', 'Hiewu Besease', 'Peki, Volta Region', 'Accra', 'Asanteman Senior School', 'Male', 'Kwadwo Bonsu', 'Father', 'Driver', 'Kiteko', 'Juapong', 'Ghana', 'Other', 'None', 'Married', 'kojo@gmail.com', '+233246938074', 'Mother', 'Twi and English', 'Twi and English', 'Emmanuel Bonsu', 'Bonsu Nkwanta, Western North Region', '0246938074', '2020-08-14 15:44:36', 'yes'),
(5, '', 'Bonsu', 'Emmanuel', '1995-06-03', 'Hiewu Besease', 'Peki, Volta Region', 'Accra', 'Asanteman Senior School', 'Male', 'Kwadwo Bonsu', 'Father', 'Driver', 'Kiteko', 'Juapong', 'Ghana', 'Other', 'None', 'Married', 'kojo@gmail.com', '+233246938074', 'Mother', 'Twi and English', 'Twi and English', 'Emmanuel Bonsu', 'Bonsu Nkwanta, Western North Region', '0246938074', '2020-08-14 15:46:42', 'yes'),
(6, '', 'Bonsu', 'Emmanuel', '1995-06-03', 'Hiewu Besease', 'Peki, Volta Region', 'Accra', 'Asanteman Senior School', 'Male', 'Kwadwo Bonsu', 'Father', 'Driver', 'Kiteko', 'Juapong', 'Ghana', 'Other', 'None', 'Married', 'kojo@gmail.com', '+233246938074', 'Mother', 'Twi and English', 'Twi and English', 'Emmanuel Bonsu', 'Bonsu Nkwanta, Western North Region', '0246938074', '2020-08-14 15:47:01', 'yes'),
(27, 0x312e6a7067, 'Bonsu', 'Emmanuel', '1995-06-03', 'ghmjg', 'Hiewu Besease', 'Ewe', 'Ho Technical University', 'Male', 'Gifty Kodezia', 'Mother', 'Driver', 'Kiteko', 'Kumasi', 'Accra', 'Other', 'Tertiary or Higher', 'Married', 'mother@gmail.com', '+233246938074', 'Brother', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi', 'Andrews Dogah Ofori', 'Accra, Ghana', '0241509940', '2020-08-14 18:50:48', 'yes'),
(28, 0x35207761766520747261636b206c6973742e6a7067, 'Bonsu', 'Emmanuel', '1995-06-03', 'ghmjg', 'Hiewu Besease', 'Ewe', 'Ho Technical University', 'Male', 'Gifty Kodezia', 'Mother', 'Driver', 'Kiteko', 'Kumasi', 'Accra', 'Other', 'Tertiary or Higher', 'Married', 'mother@gmail.com', '+233246938074', 'Brother', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi', 'Andrews Dogah Ofori', 'Accra, Ghana', '0241509940', '2020-08-14 18:51:54', 'yes'),
(29, 0x61796f6f2e6a7067, 'Bonsu', 'Emmanuel', '1995-06-03', 'ghmjg', 'Hiewu Besease', 'Ewe', 'Ho Technical University', 'Male', 'Gifty Kodezia', 'Mother', 'Driver', 'Kiteko', 'Kumasi', 'Accra', 'Other', 'Tertiary or Higher', 'Married', 'mother@gmail.com', '+233246938074', 'Brother', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi', 'Andrews Dogah Ofori', 'Accra, Ghana', '0241509940', '2020-08-14 19:04:17', 'yes'),
(30, 0x4245455a494e45535345502e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801', 'Sister', 'Akosu Agyapomah', 'English, Ada, Ga, Twi', 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940', '2020-08-17 09:51:33', 'yes'),
(31, 0x686f6c64206f6e2e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801', 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi', 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940', '2020-08-17 09:57:49', 'yes'),
(32, 0x492d6b6c6566662e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801', 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi', 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940', '2020-08-17 09:59:51', 'yes'),
(33, 0x42495254484441592e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801', 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi', 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940', '2020-08-17 10:04:13', 'yes'),
(34, 0x66657665722e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801', 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi', 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940', '2020-08-17 10:05:48', 'yes'),
(35, 0x4c4945532e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801', 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi', 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940', '2020-08-17 10:07:31', 'yes'),
(36, 0x4162656e61612e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801', 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi', 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940', '2020-08-17 10:08:40', 'yes'),
(37, 0x42656e67612e6a7067, 'Bonsu', 'Emmanuel', '2020/08/17', 'Peki', 'Hiewu Besease', 'Ewe', 'Ho Technical University', 'Male', 'Kwadwo Bonsu', 'Father', 'Student', 'Kiteko', 'Kumasi', 'Ghana', 'Other', 'Tertiary or Higher', 'Widow', 'kojo@gmail.com', '0244056801', 'Sister', 'Akosu Agyapomah', 'Twi and English', 'Richmond Bonsu', 'Fortress Hostel, near Ho Technical University', '+23324698521', '2020-08-17 16:54:42', 'yes'),
(38, 0x42656e67612e6a7067, 'Bonsu', 'Emmanuel', '2020/08/17', 'Peki', 'Hiewu Besease', 'Ewe', 'Ho Technical University', 'Male', 'Kwadwo Bonsu', 'Father', 'Student', 'Kiteko', 'Kumasi', 'Ghana', 'Other', 'Tertiary or Higher', 'Widow', 'kojo@gmail.com', '0244056801', 'Sister', 'Akosu Agyapomah', 'Twi and English', 'Richmond Bonsu', 'Fortress Hostel, near Ho Technical University', '+23324698521', '2020-08-17 17:46:02', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'Out',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `status`, `date`) VALUES
(5, 78, 'Out', '2021-08-03 21:55:55'),
(6, 79, 'Out', '2021-08-04 15:24:20'),
(16, 90, 'Out', '2021-08-03 21:55:52'),
(22, 96, 'Out', '2020-08-17 09:52:06'),
(23, 97, 'Out', '2020-08-17 09:58:20'),
(24, 98, 'Out', '2020-08-17 10:00:02'),
(25, 99, 'Out', '2020-08-17 10:04:25'),
(26, 100, 'Out', '2020-08-17 10:05:58'),
(27, 101, 'Out', '2020-08-17 10:08:59'),
(28, 102, 'Out', '2020-08-17 10:09:44'),
(29, 103, 'Out', '2021-08-03 21:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `checked_by` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`id`, `student_id`, `status`, `checked_by`, `date`) VALUES
(7, 78, 'In', 'admin', '2020-06-17 00:21:19'),
(8, 78, 'Out', 'admin', '2020-06-17 00:21:27'),
(9, 78, 'In', 'admin', '2020-06-17 00:21:37'),
(10, 78, 'In', 'admin', '2020-06-17 00:22:16'),
(11, 78, 'In', 'admin', '2020-06-17 00:22:59'),
(12, 78, 'Out', 'admin', '2020-06-17 00:23:03'),
(13, 78, 'In', 'admin', '2020-06-17 00:23:05'),
(14, 78, 'In', 'admin', '2020-06-17 00:23:20'),
(15, 78, 'Out', 'admin', '2020-06-17 00:24:12'),
(16, 78, 'In', 'admin', '2020-06-17 00:24:17'),
(17, 78, 'In', 'admin', '2020-06-17 00:25:14'),
(18, 78, 'In', 'admin', '2020-06-17 00:25:37'),
(19, 78, 'Out', 'admin', '2020-06-17 00:25:44'),
(20, 78, 'In', 'admin', '2020-06-17 00:25:45'),
(21, 78, 'Out', 'admin', '2020-06-17 00:26:10'),
(22, 78, 'In', 'admin', '2020-06-17 00:27:21'),
(23, 78, 'Out', 'admin', '2020-06-17 00:27:23'),
(24, 78, 'In', 'admin', '2020-06-17 00:42:53'),
(25, 78, 'Out', 'admin', '2020-06-17 00:42:54'),
(26, 78, 'In', 'admin', '2020-06-17 00:55:35'),
(27, 78, 'In', 'admin', '2020-06-17 00:58:12'),
(28, 78, 'In', 'admin', '2020-06-17 00:58:24'),
(29, 78, 'In', 'admin', '2020-06-17 00:58:51'),
(30, 78, 'Out', 'admin', '2020-06-17 01:02:09'),
(31, 78, 'In', 'admin', '2020-06-17 01:04:14'),
(32, 78, 'In', 'admin', '2020-06-17 01:04:36'),
(33, 78, 'In', 'admin', '2020-06-17 01:06:56'),
(34, 78, 'In', 'admin', '2020-06-17 01:07:48'),
(35, 78, 'In', 'admin', '2020-06-17 01:08:05'),
(36, 78, 'In', 'admin', '2020-06-17 01:08:45'),
(37, 78, 'Out', 'admin', '2020-06-17 01:09:01'),
(38, 78, 'In', 'admin', '2020-06-17 01:09:02'),
(39, 78, 'Out', 'admin', '2020-06-17 01:09:05'),
(40, 78, 'In', 'admin', '2020-06-17 01:09:11'),
(41, 78, 'In', 'admin', '2020-06-17 01:09:55'),
(42, 78, 'In', 'admin', '2020-06-17 01:10:04'),
(43, 78, 'In', 'admin', '2020-06-17 01:10:15'),
(44, 78, 'Out', 'admin', '2020-06-17 09:55:02'),
(45, 78, 'In', 'admin', '2020-06-17 09:55:19'),
(46, 78, 'Out', 'admin', '2020-06-17 09:57:44'),
(47, 78, 'In', 'admin', '2020-06-18 20:50:20'),
(48, 78, 'Out', 'admin', '2020-06-18 20:50:22'),
(49, 78, 'In', 'Ghana Music', '2020-06-25 21:50:16'),
(50, 78, 'Out', 'Ghana Music', '2020-06-25 21:50:18'),
(51, 79, 'In', 'admin', '2020-06-28 19:46:37'),
(52, 79, 'Out', 'admin', '2020-06-28 19:46:46'),
(53, 79, 'In', 'Dogah Andrews', '2020-06-28 20:00:55'),
(54, 79, 'Out', 'admin', '2020-07-17 23:23:50'),
(55, 78, 'In', 'Teacher Kwadwo', '2020-07-20 01:26:12'),
(56, 78, 'Out', 'Teacher Kwadwo', '2020-07-20 01:26:18'),
(57, 79, 'In', 'admin', '2020-08-14 19:14:18'),
(58, 90, 'In', 'admin', '2020-08-14 19:14:21'),
(59, 78, 'In', 'admin', '2020-08-14 19:14:23'),
(65, 79, 'Out', 'admin', '2020-08-17 03:31:39'),
(67, 103, 'In', 'admin', '2021-08-03 21:55:47'),
(68, 90, 'Out', 'admin', '2021-08-03 21:55:52'),
(69, 103, 'Out', 'admin', '2021-08-03 21:55:54'),
(70, 78, 'Out', 'admin', '2021-08-03 21:55:55'),
(71, 79, 'In', 'admin', '2021-08-03 21:55:57'),
(72, 79, 'Out', 'admin', '2021-08-04 15:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `bill` varchar(255) NOT NULL DEFAULT '0',
  `paid` varchar(255) NOT NULL DEFAULT '0',
  `balance` varchar(255) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `student_id`, `bill`, `paid`, `balance`, `date`) VALUES
(19, 78, '300', '250', '50', '2021-08-04 04:05:06'),
(20, 79, '300', '300', '0', '2020-06-28 12:53:24'),
(30, 90, '200', '0', '200', '2020-08-14 12:04:30'),
(36, 96, '300', '0', '300', '2020-08-17 02:52:06'),
(37, 97, '400', '0', '400', '2020-08-17 02:58:20'),
(38, 98, '400', '0', '400', '2020-08-17 03:00:01'),
(39, 99, '400', '0', '400', '2020-08-17 03:04:24'),
(40, 100, '200', '0', '200', '2020-08-17 03:05:58'),
(41, 101, '400', '0', '400', '2020-08-17 03:08:59'),
(42, 102, '500', '0', '500', '2020-08-17 03:09:44'),
(43, 103, '300', '0', '300', '2020-08-17 09:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `bill_records`
--

CREATE TABLE `bill_records` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `bill` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `received_from` varchar(255) NOT NULL,
  `received_by` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_records`
--

INSERT INTO `bill_records` (`id`, `student_id`, `bill`, `paid`, `balance`, `received_from`, `received_by`, `date`) VALUES
(7, 78, '300', '5', '295', 'Marian Millicent', 'admin', '2020-06-17 10:06:39'),
(8, 78, '300', '10', '290', 'Emmanuel Bonsu', 'admin', '2020-06-17 23:37:16'),
(9, 78, '300', '20', '280', 'Despitegfx', 'admin', '2020-06-17 23:49:53'),
(10, 78, '300', '30', '270', 'Emmanuel Bonsu', 'admin', '2020-06-17 23:51:19'),
(11, 78, '300', '40', '260', 'Emmanuel Bonsu', 'admin', '2020-06-18 08:11:59'),
(12, 78, '300', '10', '250', 'Emmanuel Bonsu', 'admin', '2020-06-18 08:24:17'),
(13, 78, '300', '50', '200', 'Marian Millicent', 'admin', '2020-06-20 14:24:20'),
(14, 79, '300', '50', '250', 'Marian Millicent', 'admin', '2020-06-28 19:51:11'),
(15, 79, '300', '250', '0', 'Emmanuel Bonsu', 'admin', '2020-06-28 19:53:24'),
(16, 78, '300', '100', '100', 'Emmanuel Bonsu', 'admin', '2020-07-19 21:51:34'),
(18, 78, '300', '50', '50', 'Emmanuel Bonsu', 'admin', '2021-08-04 11:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `chat_data`
--

CREATE TABLE `chat_data` (
  `id` int(11) NOT NULL,
  `from_who` varchar(20) NOT NULL,
  `to_who` varchar(20) NOT NULL,
  `message_body` text NOT NULL,
  `message_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_data`
--

INSERT INTO `chat_data` (`id`, `from_who`, `to_who`, `message_body`, `message_date`) VALUES
(116, '85', 'admin', 'hi', '2022-08-21 15:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `class_report_data`
--

CREATE TABLE `class_report_data` (
  `id` int(11) NOT NULL,
  `report_from` varchar(255) NOT NULL,
  `report_student` varchar(255) NOT NULL,
  `report_id` varchar(255) NOT NULL,
  `report_class` varchar(255) NOT NULL,
  `report_subject` varchar(255) NOT NULL,
  `report_body` text NOT NULL,
  `report_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_report_data`
--

INSERT INTO `class_report_data` (`id`, `report_from`, `report_student`, `report_id`, `report_class`, `report_subject`, `report_body`, `report_date`) VALUES
(5, 'Bekoe Fred Akwasi', 'Emmanuel Bonsu', '90', 'Day Care', 'Testing', 'Thats fine', '2020-08-17 00:23:36'),
(6, 'Bekoe Fred Akwasi', 'Emmanuel Bonsu', '90', 'Day Care', 'Testing', 'Thats fine', '2020-08-17 00:28:08'),
(7, 'Bekoe Fred Akwasi', 'Emmanuel Bonsu', '90', 'Day Care', 'Testing', 'Thats fine', '2020-08-17 00:28:40'),
(8, 'Bekoe Fred Akwasi', 'Emmanuel Bonsu', '90', 'Day Care', 'Testing', 'Thats fine', '2020-08-17 00:31:58'),
(9, 'Emmanuel Bonsu', 'Emmanuel Bonsu', '78', 'Creche', 'Testing', 'ok', '2020-08-17 00:42:23'),
(10, 'Bekoe Fred Akwasi', 'Emmanuel Bonsu', '90', 'Day Care', 'Alfred Looking at you', 'Why didn\'t come to school on the so and so date?', '2020-08-17 03:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_data`
--

CREATE TABLE `emergency_data` (
  `student_id` int(255) NOT NULL,
  `emergency_full_name` varchar(255) NOT NULL,
  `emergency_house_address` varchar(255) NOT NULL,
  `emergency_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_data`
--

INSERT INTO `emergency_data` (`student_id`, `emergency_full_name`, `emergency_house_address`, `emergency_phone`) VALUES
(78, 'Richmond Bonsu', 'Bonsu Nkwanta, Western North Region', '0241509940'),
(79, 'Emmanuel Bonsu', 'Ho, Volta Region', '0246938074'),
(90, 'Andrews Dogah Ofori', 'Accra, Ghana', '0241509940'),
(96, 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940'),
(97, 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940'),
(98, 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940'),
(99, 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940'),
(100, 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940'),
(101, 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940'),
(102, 'Richmond Bonsu', 'Ho, Volta Region', '+233241509940'),
(103, 'Richmond Bonsu', 'Fortress Hostel, near Ho Technical University', '+23324698521');

-- --------------------------------------------------------

--
-- Table structure for table `family_data`
--

CREATE TABLE `family_data` (
  `student_id` int(255) NOT NULL,
  `family_full_name` varchar(255) NOT NULL,
  `family_relationship` varchar(255) NOT NULL,
  `family_occupation` varchar(255) NOT NULL,
  `family_place_of_work` varchar(255) NOT NULL,
  `family_address` varchar(255) NOT NULL,
  `family_nationality` varchar(255) NOT NULL,
  `family_religion` varchar(255) NOT NULL,
  `family_level_of_edu` varchar(255) NOT NULL,
  `family_marital_status` varchar(20) NOT NULL,
  `family_email` varchar(255) NOT NULL,
  `family_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_data`
--

INSERT INTO `family_data` (`student_id`, `family_full_name`, `family_relationship`, `family_occupation`, `family_place_of_work`, `family_address`, `family_nationality`, `family_religion`, `family_level_of_edu`, `family_marital_status`, `family_email`, `family_phone`) VALUES
(78, 'Kwadwo Bonsu', 'Father', 'Driver', 'Kiteko', 'Kumasi', '', 'Christianity', '', '', 'kojo@gmail.com', '0244056801'),
(79, 'Gifty Kodezia', 'Mother', 'Trader', 'Sefwi Asawinso', 'Tigo Pole Area, Sefwi Asawinso', '', 'Christianity', '', '', 'giftbonsu@gmail.com', '0244056801'),
(90, 'Gifty Kodezia', 'Mother', 'Driver', 'Kiteko', 'Kumasi', 'Accra', 'Other', 'Tertiary or Higher', 'Married', 'mother@gmail.com', '+233246938074'),
(96, 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801'),
(97, 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801'),
(98, 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801'),
(99, 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801'),
(100, 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801'),
(101, 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801'),
(102, 'Gifty Kodezia', 'Father', 'Driver', 'Sefwi Asawinso', 'Juapong', 'Ghana', 'Christianity', 'Senior High', 'Married', 'kojo@gmail.com', '0244056801'),
(103, 'Kwadwo Bonsu', 'Father', 'Student', 'Kiteko', 'Kumasi', 'Ghana', 'Other', 'Tertiary or Higher', 'Widow', 'kojo@gmail.com', '0244056801');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `tissue` varchar(255) NOT NULL DEFAULT '0',
  `diaper` varchar(255) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `student_id`, `tissue`, `diaper`, `date`) VALUES
(11, 78, '4', '4', '2022-05-08 21:20:30'),
(12, 79, '2', '6', '2020-08-17 03:28:36'),
(22, 90, '1', '1', '2022-05-08 21:20:38'),
(28, 96, '0', '0', '2020-08-17 09:52:06'),
(29, 97, '0', '0', '2020-08-17 09:58:20'),
(30, 98, '0', '0', '2020-08-17 10:00:01'),
(31, 99, '0', '0', '2020-08-17 10:04:24'),
(32, 100, '0', '0', '2020-08-17 10:05:58'),
(33, 101, '0', '0', '2020-08-17 10:08:59'),
(34, 102, '0', '0', '2020-08-17 10:09:44'),
(35, 103, '0', '0', '2020-08-17 16:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `notification_data`
--

CREATE TABLE `notification_data` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `message_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `read_status` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_data`
--

INSERT INTO `notification_data` (`id`, `student_id`, `subject`, `body`, `message_date`, `read_status`) VALUES
(2, 0, 'P.T.A Meeting', 'How are you all, I hope you guys are fine?\r\nMy name is Kwmae Emmanuel from Ho Technical University. Come to me in case of any questions.\r\n\r\nThank you!', '2020-08-13 08:01:45', 'no'),
(4, 0, 'Covid-19 Protocols', 'Father Lord, see us through!', '2020-08-13 14:52:26', 'no'),
(5, 0, 'Covid-19 Protocols', 'sdfgdgvdf', '2020-08-13 15:00:38', 'no'),
(6, 78, 'Covid-19 Protocols', 'dhbdcfh', '2020-08-13 16:25:52', 'no'),
(7, 0, 'Covid-19 Protocols', 'Gine', '2020-08-13 17:38:07', 'no'),
(8, 0, 'Covid-19 Protocols', 'bbn,n', '2020-08-17 17:42:25', 'no'),
(9, 0, 'Covid-19 Protocols', 'bbn,n', '2020-08-17 17:45:03', 'no'),
(10, 0, 'Covid-19 Protocols', 'hkghgk', '2020-08-17 17:45:20', 'no'),
(11, 0, 'Covid-19 Protocols', 'ghjgjhg', '2020-08-17 17:45:50', 'no'),
(12, 0, 'Covid-19 Protocols', 'thertdf', '2020-08-17 17:46:20', 'no'),
(13, 0, 'Covid-19 Protocols', 'fghfng', '2020-08-17 17:48:59', 'no'),
(14, 0, 'Covid-19 Protocols', 'gff', '2020-08-17 17:49:48', 'no'),
(15, 0, 'Covid-19 Protocols', 'fghf', '2020-08-17 17:50:26', 'no'),
(16, 0, 'Wrong Transaction Made ', 'hey', '2022-08-21 16:03:59', 'no'),
(17, 103, 'Wrong Transaction Made ', 'hey', '2022-08-21 16:04:27', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `firstname` varchar(75) NOT NULL,
  `lastname` varchar(75) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(75) NOT NULL,
  `occupation` varchar(75) NOT NULL,
  `placeofwork` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `relationship` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `student_id`, `firstname`, `lastname`, `email`, `phone`, `occupation`, `placeofwork`, `address`, `relationship`, `password`) VALUES
(22, 78, 'Gifty', 'Bonsu', 'gifty@gmail.com', '0246938074', '', '', '', '', '202cb962ac59075b964b07152d234b70'),
(23, 79, 'Gifty', 'Bonsu', 'giftybonsu@gmail.com', '0234568656', '', '', '', '', '202cb962ac59075b964b07152d234b70'),
(35, 102, 'Gifty Kodezia', '', 'kojo@gmail.com', '0244056801', '', '', '', '', '235119752301beef263cad991951d765'),
(36, 103, 'Kwadwo Bonsu', '', 'kojo@gmail.com', '0244056801', '', '', '', '', 'b3b83b4afdb9310a89472b74eaafdbbe');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `health` varchar(255) NOT NULL,
  `meal` varchar(255) NOT NULL,
  `mood` varchar(255) NOT NULL,
  `bathroom` varchar(255) NOT NULL,
  `activities` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) NOT NULL,
  `seen` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `student_id`, `health`, `meal`, `mood`, `bathroom`, `activities`, `note`, `date`, `created_by`, `seen`) VALUES
(37, 78, 'Paracetamol @14:07', 'Rice', '10', 'Weewing,Pooping', '120', 'I came to Karim\'s Hostel', '2020-06-20 13:56:41', 'admin', 0),
(43, 78, 'No medicine Taken', 'Rice', '1', 'Pooping', '50', '', '2020-07-20 00:15:30', 'admin', 0),
(47, 78, 'Paracetamol @17:56', 'Cerelac', '2', 'Weewing', '3', '', '2020-07-20 00:54:57', 'admin', 0),
(48, 79, 'Paracetamol @06:02', 'Cerelac,Rice', '5', 'Weewing,Pooping', '4', 'Hello', '2020-07-20 01:05:24', 'admin', 0),
(49, 78, 'F-Pack @00:18', 'Cerelac', '3', 'Weewing', '56', 'He was fine when he came in the morning', '2020-07-20 07:17:20', 'admin', 0),
(50, 78, 'Paracetamol @14:41', 'Cerelac', '2', 'Weewing', '3', '', '2020-08-13 09:18:46', 'admin', 0),
(51, 78, 'Paracetamol @22:25', 'Cerelac', '3', 'Weewing', '23', '', '2020-08-17 16:24:33', 'admin', 0),
(52, 78, 'F-Pack @11:25', 'Cerelac', '3', 'Weewing,Pooping', '4', '', '2020-08-17 16:45:10', 'admin', 0),
(53, 78, 'Paracetamol @22:49', 'Rice', '3', 'Weewing', '3', '', '2020-08-17 16:49:46', 'admin', 0),
(54, 78, 'F-Pack @', 'Cerelac', '2', 'Weewing', '2', '', '2020-08-17 16:51:28', 'admin', 0),
(55, 78, 'F-Pack @', 'Cerelac', '2', 'Weewing', '1', '', '2022-05-08 21:13:10', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `report_save`
--

CREATE TABLE `report_save` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `health` varchar(255) NOT NULL,
  `meal` varchar(255) NOT NULL,
  `mood` varchar(255) NOT NULL,
  `bathroom` varchar(255) NOT NULL,
  `activities` varchar(255) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_save`
--

INSERT INTO `report_save` (`id`, `student_id`, `health`, `meal`, `mood`, `bathroom`, `activities`, `note`) VALUES
(1, 78, '', '', '', '', '', ''),
(2, 79, '', '', '', '', '', ''),
(8, 96, '', '', '', '', '', ''),
(9, 97, '', '', '', '', '', ''),
(10, 98, '', '', '', '', '', ''),
(11, 99, '', '', '', '', '', ''),
(12, 100, '', '', '', '', '', ''),
(13, 101, '', '', '', '', '', ''),
(14, 102, '', '', '', '', '', ''),
(15, 103, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `significant_data`
--

CREATE TABLE `significant_data` (
  `student_id` int(255) NOT NULL,
  `significant_live_with` varchar(255) NOT NULL,
  `significant_full_name` varchar(255) NOT NULL,
  `significant_languages_spoken` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `significant_data`
--

INSERT INTO `significant_data` (`student_id`, `significant_live_with`, `significant_full_name`, `significant_languages_spoken`) VALUES
(78, '', '', ''),
(79, '', '', ''),
(90, 'Brother', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi'),
(96, 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi'),
(97, 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi'),
(98, 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi'),
(99, 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi'),
(100, 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi'),
(101, 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi'),
(102, 'Sister', 'English, Ada, Ga, Twi', 'English, Ada, Ga, Twi'),
(103, 'Sister', 'Twi and English', 'Twi and English');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `image` longblob NOT NULL,
  `sname` varchar(255) NOT NULL,
  `other_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `home_town` varchar(255) NOT NULL,
  `mother_tongue` varchar(255) NOT NULL,
  `school_attended` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `joindate` timestamp NOT NULL DEFAULT current_timestamp(),
  `account` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `image`, `sname`, `other_name`, `dob`, `place_of_birth`, `home_town`, `mother_tongue`, `school_attended`, `sex`, `class`, `joindate`, `account`) VALUES
(78, '', 'Bonsu', 'Emmanuel', '1995-06-03', '', 'Hiewu Besease', '', '', 'Male', 'Creche', '2020-06-17 00:18:46', 'yes'),
(79, '', 'Bonsu', 'Richmond', '1991/03/13', 'Asawinso', '', '', '', 'Male', 'Creche', '2020-06-28 06:29:40', 'yes'),
(90, 0x61796f6f2e6a7067, 'Bonsu', 'Emmanuel', '1995-06-03', 'ghmjg', 'Hiewu Besease', 'Ewe', 'Ho Technical University', 'Male', 'Day Care', '2020-08-14 19:04:30', 'no'),
(96, 0x4245455a494e45535345502e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'Creche', '2020-08-17 09:52:06', 'no'),
(97, 0x686f6c64206f6e2e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'KG1', '2020-08-17 09:58:20', 'no'),
(98, 0x492d6b6c6566662e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'KG1', '2020-08-17 10:00:01', 'no'),
(99, 0x42495254484441592e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'KG1', '2020-08-17 10:04:24', 'no'),
(100, 0x66657665722e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'Day Care', '2020-08-17 10:05:58', 'no'),
(101, 0x4c4945532e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'KG1', '2020-08-17 10:08:58', 'no'),
(102, 0x4162656e61612e6a7067, 'Kofi', 'Ama', '1995-06-03', 'Peki', 'Peki, Volta Region', 'Accra', 'Ho Technical University', 'Female', 'KG2', '2020-08-17 10:09:44', 'no'),
(103, 0x42656e67612e6a7067, 'Bonsu', 'Emmanuel', '2020/08/17', 'Peki', 'Hiewu Besease', 'Ewe', 'Ho Technical University', 'Male', 'Creche', '2020-08-17 16:55:02', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`, `class`) VALUES
(1, 'admin', 'admin@gmail.com', '0246938074', 'Ho Technical University', '21232f297a57a5a743894a0e4a801fc3', ''),
(2, 'Emmanuel Bonsu', 'emma@gmail.com', '', '', '123', 'Creche'),
(3, 'Bekoe Fred Akwasi', 'fredbekoe@gmail.com', '0246938074', 'Koforidua, Eastern Region', '202cb962ac59075b964b07152d234b70', 'Day Care'),
(4, 'Dogah Andrews', 'dogahandrews@gmail.com', '0246938074', '', '202cb962ac59075b964b07152d234b70', 'Creche'),
(5, 'Ghana Music', 'sirmammy@gmail.com', '0246938074', 'Kumasi', '202cb962ac59075b964b07152d234b70', 'Creche'),
(6, 'Ghana Music', 'music@gmail.com', '0246938074', 'Ho Technical University', '202cb962ac59075b964b07152d234b70', 'Day Care'),
(7, 'Teacher Kwadwo', 'teacher@gmail.com', '0246938074', '', '202cb962ac59075b964b07152d234b70', 'Creche');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_data`
--
ALTER TABLE `admission_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_id` (`student_id`);

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_records_id` (`student_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_id` (`student_id`) USING BTREE;

--
-- Indexes for table `bill_records`
--
ALTER TABLE `bill_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_records_id` (`student_id`);

--
-- Indexes for table `chat_data`
--
ALTER TABLE `chat_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_report_data`
--
ALTER TABLE `class_report_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_data`
--
ALTER TABLE `emergency_data`
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `family_data`
--
ALTER TABLE `family_data`
  ADD UNIQUE KEY `family_student_id` (`student_id`) USING BTREE;

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material_student_id` (`student_id`);

--
-- Indexes for table `notification_data`
--
ALTER TABLE `notification_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_student_id` (`student_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_student_id` (`student_id`);

--
-- Indexes for table `report_save`
--
ALTER TABLE `report_save`
  ADD PRIMARY KEY (`id`),
  ADD KEY `save_report_student_id` (`student_id`);

--
-- Indexes for table `significant_data`
--
ALTER TABLE `significant_data`
  ADD UNIQUE KEY `significant_student_id` (`student_id`) USING BTREE;

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_data`
--
ALTER TABLE `admission_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `bill_records`
--
ALTER TABLE `bill_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `chat_data`
--
ALTER TABLE `chat_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `class_report_data`
--
ALTER TABLE `class_report_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `notification_data`
--
ALTER TABLE `notification_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `report_save`
--
ALTER TABLE `report_save`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD CONSTRAINT `attendance_records_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fees_transaction_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill_records`
--
ALTER TABLE `bill_records`
  ADD CONSTRAINT `bill_records_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emergency_data`
--
ALTER TABLE `emergency_data`
  ADD CONSTRAINT `emergency_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family_data`
--
ALTER TABLE `family_data`
  ADD CONSTRAINT `family_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `material_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report_save`
--
ALTER TABLE `report_save`
  ADD CONSTRAINT `save_report_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `significant_data`
--
ALTER TABLE `significant_data`
  ADD CONSTRAINT `student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
