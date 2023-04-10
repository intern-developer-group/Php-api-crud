-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2023 at 03:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_master`
--

CREATE TABLE `register_master` (
  `id` int(11) NOT NULL,
  `prefixname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `middelname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffixname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `avatar` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `deleted` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `display_name` varchar(255) DEFAULT NULL,
  `modifed` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `role` varchar(255) DEFAULT NULL,
  `email_varify_at` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `details:common` varchar(255) DEFAULT NULL,
  `details:other` varchar(255) DEFAULT NULL,
  `is:supperadmin` varchar(255) DEFAULT NULL,
  `parmissions` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_master`
--

INSERT INTO `register_master` (`id`, `prefixname`, `firstname`, `middelname`, `lastname`, `suffixname`, `username`, `email`, `photo`, `type`, `password`, `updated_at`, `created_at`, `avatar`, `birthday`, `created`, `deleted`, `display_name`, `modifed`, `role`, `email_varify_at`, `deleted_at`, `details`, `details:common`, `details:other`, `is:supperadmin`, `parmissions`) VALUES
(4, 'raj', 'raj', 'raj', 'raj', 'raj', 'raj', 'raj@gmail.com', 'f629ac9aa1dfb110a1b2a0eaf000eaf1.jpeg', 'type', '123123', '2023-04-06 13:05:48.299677', '2023-04-06 13:05:48.299677', 'avatar', '2023-04-01', '2023-04-06 13:05:48.299677', '2023-04-06 13:05:48.299677', 'raj raj', '2023-04-06 13:05:48.299677', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, NULL, 'raj123', NULL, 'raj123', NULL, 'raj123', 'raj123@gmail.com', 'afternoon-in-the-garden.jpeg', NULL, 'raj123', '2023-04-07 12:16:01.243394', '2023-04-07 12:16:01.243394', NULL, NULL, '2023-04-07 12:16:01.243394', '2023-04-07 12:16:01.243394', NULL, '2023-04-07 12:16:01.243394', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_master`
--
ALTER TABLE `register_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_master`
--
ALTER TABLE `register_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
