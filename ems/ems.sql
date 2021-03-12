-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 01:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_leave`
--

CREATE TABLE `applied_leave` (
  `id` int(255) NOT NULL,
  `l_from` varchar(1000) NOT NULL,
  `l_to` varchar(1000) NOT NULL,
  `e_leave` int(255) NOT NULL,
  `m_leave` int(255) NOT NULL,
  `c_leave` int(255) NOT NULL,
  `apply_by` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `comment` text NOT NULL,
  `applied_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied_leave`
--

INSERT INTO `applied_leave` (`id`, `l_from`, `l_to`, `e_leave`, `m_leave`, `c_leave`, `apply_by`, `status`, `comment`, `applied_date`) VALUES
(1, '2021-03-10', '2021-03-24', 2, 2, 2, 14, 'Approved', 'ok accepted', '2021-03-08 09:37:23'),
(2, '2021-03-11', '2021-03-24', 5, 0, 0, 17, 'Rejected', 'not statisfied with your explanation', '2021-03-08 09:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `assign_leave`
--

CREATE TABLE `assign_leave` (
  `id` int(255) NOT NULL,
  `v_from` varchar(1000) NOT NULL,
  `v_to` varchar(1000) NOT NULL,
  `e_leave` varchar(1000) NOT NULL,
  `m_leave` varchar(1000) NOT NULL,
  `c_leave` varchar(1000) NOT NULL,
  `assign_by` varchar(1000) NOT NULL,
  `assign_to` int(255) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_leave`
--

INSERT INTO `assign_leave` (`id`, `v_from`, `v_to`, `e_leave`, `m_leave`, `c_leave`, `assign_by`, `assign_to`, `modified_date`) VALUES
(5, '2021-03-04', '2022-03-04', '6', '6', '6', '10', 20, '2021-03-04 15:39:17'),
(6, '2021-03-04', '2022-03-04', '6', '6', '6', '10', 19, '2021-03-04 15:39:17'),
(7, '2021-01-01', '2021-12-31', '6', '6', '6', '10', 18, '2021-03-08 08:51:30'),
(8, '2021-01-01', '2021-12-31', '6', '6', '6', '10', 17, '2021-03-08 08:51:40'),
(9, '2021-01-01', '2021-12-31', '6', '6', '6', '10', 14, '2021-03-08 08:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `t_id` int(255) NOT NULL,
  `task` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `assigned_by` int(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`t_id`, `task`, `user_id`, `assigned_by`, `date_time`) VALUES
(1, 'do your work very fast', 15, 10, '2021-03-04 05:39:39'),
(2, 'do your work very fast', 14, 10, '2021-03-04 05:39:39'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 16, 10, '2021-03-04 05:46:31'),
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 15, 10, '2021-03-04 05:46:31'),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 14, 10, '2021-03-04 05:46:31'),
(6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 12, 10, '2021-03-04 05:46:31'),
(7, 'it was a testing message', 19, 10, '2021-03-04 13:49:05'),
(8, 'it was a testing message', 18, 10, '2021-03-04 13:49:05'),
(9, 'it was a testing message', 17, 10, '2021-03-04 13:49:06'),
(10, 'hi da', 20, 10, '2021-03-08 11:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `task_reply`
--

CREATE TABLE `task_reply` (
  `r_id` int(255) NOT NULL,
  `reply` text NOT NULL,
  `m_id` int(255) NOT NULL,
  `reply_by` int(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_reply`
--

INSERT INTO `task_reply` (`r_id`, `reply`, `m_id`, `reply_by`, `date_time`) VALUES
(10, 'ok sir', 9, 17, '2021-03-04 13:58:34'),
(11, 'ok sir', 9, 17, '2021-03-04 13:58:20'),
(12, 'ok sir', 9, 17, '2021-03-04 14:05:19'),
(13, 'ok sir', 9, 17, '2021-03-04 14:05:24'),
(14, 'ok', 9, 10, '2021-03-04 14:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `department`, `role`, `created_on`) VALUES
(10, 'Sai Charan GK', 'saic2323@gmail.com', '9fab6755cd2e8817d3e73b0978ca54a6', 'admin', 'admin', '2021-03-08 11:56:33'),
(11, 'naveeth s', 'naveethvj18@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'admin', 'admin', '2021-03-03 15:32:20'),
(14, 'saravanan', 'saran1@gmail.com', '22975d8a5ed1b91445f6c55ac121505b', 'SEO', 'employee', '2021-03-04 13:45:51'),
(17, 'praveen', 'praveen1@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'SEO', 'employee', '2021-03-04 13:42:52'),
(18, 'santhosh', 'santhosh1@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Web Development', 'employee', '2021-03-04 13:43:16'),
(20, 'magesh', 'magesh1@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Web Development', 'employee', '2021-03-04 15:09:06'),
(21, 'dharani', 'dharani1@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Web Development', 'employee', '2021-03-08 11:57:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_leave`
--
ALTER TABLE `applied_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_leave`
--
ALTER TABLE `assign_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `task_reply`
--
ALTER TABLE `task_reply`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_leave`
--
ALTER TABLE `applied_leave`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assign_leave`
--
ALTER TABLE `assign_leave`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `t_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task_reply`
--
ALTER TABLE `task_reply`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
