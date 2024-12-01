-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2024 at 11:14 PM
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
-- Database: `voting-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Makes Work Fun'),
(2, 'Team Player'),
(3, 'Culture Champion'),
(4, 'Difference Maker');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `vote_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `vote_count`) VALUES
(1, 'John Doe', 7),
(2, 'Jane Doe', 3),
(3, 'Brad Pitt', 4),
(4, 'Aleksandar Makedonski', 2),
(5, 'Dalibor Jovanovski', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `created_at`) VALUES
(1, 'John Doe', 'johndoe@pabau.com', '$2y$10$o8NYZlLa1dnPzbRzyTuLbOMGbqBZUD0N04rGjbLhRsFPr0pxX4gVG', '2024-12-01 20:08:35'),
(2, 'Jane Doe', 'janedoe@pabau.com', '$2y$10$Whq/yjvas7T7bl/EgcMRMuP/CgI593shrKlETzjX1I9GFptq5rsvm', '2024-12-01 20:08:35'),
(3, 'Brad Pitt', 'bradpitt@pabau.com', '$2y$10$C1lXWQhSBi40ZTyY34SVbeJTuA6N0IYFPrMEtjgskMgXBy6ERU7W.', '2024-12-01 20:08:35'),
(4, 'Marilyn Monroe', 'marilynmonroe@pabau.com', '$2y$10$h9TIP4qfLe515rfE5HZGW.zRLYSXca0kRdYp7iL7upNEYe83D9UHu', '2024-12-01 20:08:35'),
(5, 'Aleksandar Makedonski', 'aleksandar@pabau.com', '$2y$10$/P0KhdVp6bgkaUI/JzQmiedcd7XMaS/cv4/6z6DSPlgL97meGykla', '2024-12-01 20:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `voted_by` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `category_id`, `employee_id`, `voted_by`, `timestamp`, `comment`) VALUES
(30, 1, 5, 'John Doe', '2024-12-01 15:04:56', 'Comment'),
(31, 2, 5, 'Sed laudantium nequ', '2024-12-01 15:05:00', 'Aut magna animi iru'),
(32, 2, 5, 'Modi omnis quia quam', '2024-12-01 15:05:02', 'A nulla fugiat comm'),
(33, 2, 4, 'Quis dolorem ducimus', '2024-12-01 15:05:08', 'Amet optio volupta'),
(34, 2, 1, 'Ut nulla culpa est ', '2024-12-01 15:05:11', 'Alias id consequatur'),
(35, 3, 4, 'Brad Pitt', '2024-12-01 15:05:34', 'Champion'),
(36, 2, 3, 'Jane Doe', '2024-12-01 15:05:47', 'Team player'),
(37, 4, 1, 'Brad Pitt', '2024-12-01 15:06:04', 'Diference maker.'),
(38, 3, 5, 'Aleksandar Makedonski', '2024-12-01 15:06:34', 'Champion'),
(41, 2, 1, 'Ipsam dolor dolor do', '2024-12-01 15:07:09', 'Aut laboris doloribu'),
(43, 1, 2, 'Id ad iure necessit', '2024-12-01 15:07:13', 'Voluptatum ut mollit'),
(44, 4, 1, 'Repudiandae tempore', '2024-12-01 15:07:22', 'Excepteur vel pariat'),
(45, 3, 1, 'Jane Doe', '2024-12-01 15:07:44', 'Lorem ipslum'),
(47, 2, 3, 'Anim ullam sequi eni', '2024-12-01 15:08:30', 'Beatae odit culpa i'),
(48, 1, 1, 'Dolore velit rerum p', '2024-12-01 16:05:31', 'Non sunt nesciunt '),
(49, 4, 3, 'Dalibor Jovanovski', '2024-12-01 16:05:57', 'Difference Maker'),
(50, 2, 2, 'Dalibor Jovanovski', '2024-12-01 16:49:58', 'Team Player'),
(51, 2, 5, 'Brad Pitt', '2024-12-01 16:54:55', 'Team Player'),
(52, 3, 2, 'John Doe', '2024-12-01 21:02:37', 'THe best worker i have ever worked with.'),
(53, 1, 3, 'Jane Doe', '2024-12-01 22:00:06', 'Funnies worker'),
(54, 2, 1, 'Jane Doe', '2024-12-01 22:04:00', 'Teamest player');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
