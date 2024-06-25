-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 08:09 AM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `user_id`, `user_name`, `date`) VALUES
(4, 9, 'SHAKTI VISHAKAN S', '2024-03-15'),
(5, 1, 'VIGHNESH R', '2024-03-15'),
(7, 9, 'SHAKTI VISHAKAN S', '2024-03-16'),
(8, 4, 'PRIYA R', '2024-03-16'),
(9, 2, 'KEERTHANA', '2024-03-16'),
(10, 1, 'VIGHNESH R', '2024-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_mobile` bigint(13) NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `u_dob` date NOT NULL,
  `u_aadhar` varchar(20) NOT NULL,
  `u_pwd` varchar(100) NOT NULL,
  `u_code` varchar(50) NOT NULL,
  `u_status` int(11) NOT NULL DEFAULT 1,
  `u_type` int(11) NOT NULL DEFAULT 1,
  `u_date` date NOT NULL DEFAULT current_timestamp(),
  `college` varchar(100) NOT NULL,
  `proj_title` varchar(255) NOT NULL,
  `trg_dur` int(255) NOT NULL,
  `gui_name` char(255) NOT NULL,
  `nation` char(255) NOT NULL,
  `ref_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`u_id`, `u_name`, `u_email`, `u_mobile`, `u_gender`, `u_dob`, `u_aadhar`, `u_pwd`, `u_code`, `u_status`, `u_type`, `u_date`, `college`, `proj_title`, `trg_dur`, `gui_name`, `nation`, `ref_by`) VALUES
(1, 'VIGHNESH R', 'vighneshr2004@gmail.com', 8072636852, 'Male', '2004-10-03', '123456789', '9da89139e5667c7ef995f5ec7e39ded4', 'vighnesh', 1, 1, '2024-03-15', 'VEL TECH MULTI TECH Dr RANGARAJAN Dr SAKUNTHALA ENGNIEERING COLLEGE', 'IMPLANT TRAINING MANAGEMENT SYSTEM(PHASE-2)', 15, 'BITOPAN DAS', 'INDIAN', 'HVF'),
(2, 'KEERTHANA', 'keerthanakeethu@gmail.com', 9345852272, 'Female', '2002-07-26', '693650790266', 'f7672f31b86d25af803c338380e7e6f7', 'keerthana', 1, 1, '2024-03-15', 'NAZARETH COLLE3GE OF  ARTS SCIENECE', 'IMPLANT TRAINING MANAGEMENT SYSTEM', 12, 'BITOPAN DAS', 'INDIAN', 'HVF'),
(3, 'KAVIYA R', 'saikaviya53@gmail.com', 7339249513, 'Male', '2004-06-07', '994328241116', '84b3ee80719f465a3988002f6bf6627b', 'kaviya', 1, 1, '2024-03-15', 'NAZARETH COLLE3GE OF  ARTS SCIENECE', 'IMPLANT TRAINING MANAGEMENT SYSTEM', 12, 'BITOPAN DAS', 'INDIAN', 'HVF'),
(4, 'PRIYA R', 'priya261422@gmail.com', 936744903, 'Female', '2003-11-26', '443462870638', '0b1c8bc395a9588a79cd3c191c22a6b4', 'priya', 1, 1, '2024-03-15', 'NAZARETH COLLE3GE OF  ARTS SCIENECE', '   VIGILANCE MANAGEMENT SYSTEM', 12, 'BITOPAN DAS', 'INDIAN', 'HVF'),
(5, 'JANANI M', 'mjanani439@gmail.com', 9003134840, 'Female', '2003-04-22', '963368923899', 'd94c8297c294020a5322a15fa66d636b', 'janani', 1, 1, '2024-03-15', 'NAZARETH COLLE3GE OF  ARTS SCIENECE', 'EMPLOYEE MANAGEMENT SYSTEM', 12, 'BITOPAN DAS', 'INDIAN', 'HVF'),
(6, 'HARSHINI S', 'harshinisekar23@gmail.com', 8015827603, 'Female', '2003-12-11', '1234098756434', '6fafd86201d863462efc30c1026c1f07', 'harshini', 1, 1, '2024-03-15', 'NAZARETH COLLE3GE OF  ARTS SCIENECE', 'EMPLOYEE MANAGEMENT SYSTEM', 12, 'BITOPAN DAS', 'INDIAN', 'HVF'),
(7, 'AGASTINA JANCY L', 'lagastinajancy@gmail.com', 8778033462, 'Female', '2003-04-22', '963368923899', '8a1741a9294c1032ddb918cc88c0e4df', 'jancy', 1, 1, '2024-03-15', 'NAZARETH COLLE3GE OF  ARTS SCIENECE', '   VIGILANCE MANAGEMENT SYSTEM', 12, 'BITOPAN DAS', 'INDIAN', 'HVF'),
(8, 'PREETHIKA A', 'preethikaa255@gmail.com', 9360985320, 'Female', '2004-05-29', '12345678909', '1a0c332daeb5449a506ca181d7c040c9', 'preethika', 1, 1, '2024-03-15', 'NAZARETH COLLE3GE OF  ARTS SCIENECE', '   VIGILANCE MANAGEMENT SYSTEM', 12, 'BITOPAN DAS', 'INDIAN', 'HVF'),
(9, 'SHAKTI VISHAKAN S', 'sec21cs049@gmail.com', 98400065203, 'Male', '2003-07-31', '446836098151', '65ae7fa16a755ee5a925892c43f3b21a', 'shakti', 1, 1, '2024-03-15', 'SRI SAIRAM ENGINEERING COLLEGE', 'AC COMPLAINT MANGEMENT SYSTEM', 12, 'BITOPAN DAS', 'INDIAN', 'HVF'),
(10, 'VIMALA DEVI V', 'vimaladevi@gmail.com', 9025530422, 'Female', '2002-04-24', '557950669274', 'addeff7156adc1d995aa30a0cde99ba8', 'vimala', 1, 1, '2024-03-15', 'NAZARETH COLLE3GE OF  ARTS SCIENECE', 'IMPLANT TRAINING MANAGEMENT SYSTEM', 12, 'BITOPAN DAS', 'INDIAN', 'HVF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
