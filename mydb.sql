-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 12:13 PM
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
  `u_clg`varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`u_id`, `u_name`, `u_email`, `u_mobile`, `u_gender`, `u_dob`, `u_aadhar`, `u_pwd`, `u_code`, `u_status`, `u_type`, `u_date`,`college`,'proj_title') VALUES
(1, 'Keerthana', 'kk@gmail.com', 1234567890, 'female', '2023-12-14', '1234567890', '12345', '123', 1, 2, '2023-12-14','NCAS'),
(2, 'siva', 'sk2@gmail.com', 1234567890, 'male', '2023-12-14', '1234567890', '67890', '123', 1, 1, '2023-12-14','NCAS'),
(3, 'sankar', 'sk3@gmail.com', 1234567890, 'male', '2023-12-14', '1234567890', '09876', '123', 1, 1, '2023-12-14','NCAS'),
(4, 'kumar', 'bk4@gmail.com', 1234567890, 'male', '2023-12-14', '1234567890', '14358', '123', 1, 1, '2023-12-14','NCAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`u_id`);
ALTER TABLE `tbl_users`
  ADD VARCHAR (`u_clg`);



--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
