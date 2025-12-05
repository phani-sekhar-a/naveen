-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2025 at 10:26 PM
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
-- Database: `pranay_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `status` enum('pending','screening','interview','offer','accepted') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `student_id`, `internship_id`, `status`, `created_at`) VALUES
(25, 2, 6, 'accepted', '2025-12-04 16:55:01'),
(26, 3, 7, 'pending', '2025-12-04 16:55:01'),
(27, 4, 8, 'offer', '2025-12-04 16:55:01'),
(28, 5, 9, 'screening', '2025-12-04 16:55:01'),
(29, 6, 10, 'interview', '2025-12-04 16:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `employer_id`, `title`, `category`, `created_at`) VALUES
(6, 2, 'Nursing Rotation B', 'Nursing', '2025-12-04 16:24:15'),
(7, 3, 'Diagnostics Support Role', 'Diagnostics', '2025-12-04 16:24:15'),
(8, 3, 'Imaging Technician', 'Diagnostics', '2025-12-04 16:24:15'),
(9, 4, 'Community Outreach', 'Public Health', '2025-12-04 16:24:15'),
(10, 4, 'Hospital Admin Assistant', 'Administration', '2025-12-04 16:24:15'),
(11, 4, 'Health Therapy Intern', 'Therapy', '2025-12-04 16:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('student','employer','admin') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `about` text DEFAULT NULL,
  `program_level` varchar(100) DEFAULT NULL,
  `focus` varchar(100) DEFAULT NULL,
  `availability` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `program` varchar(100) DEFAULT NULL,
  `company_name` varchar(150) DEFAULT NULL,
  `company_location` varchar(150) DEFAULT NULL,
  `company_phone` varchar(50) DEFAULT NULL,
  `company_focus` varchar(150) DEFAULT NULL,
  `company_about` text DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `about`, `program_level`, `focus`, `availability`, `phone`, `location`, `program`, `company_name`, `company_location`, `company_phone`, `company_focus`, `company_about`, `verified`) VALUES
(2, 'employer', 'e@gmail.com', '$2y$10$nBvuc5xgN6Oh7jORNkBbXe8mgUOkEj0Z6FJ.d/xQQn3iMI5ehoYK.', 'employer', '2025-12-04 15:42:45', NULL, NULL, NULL, NULL, 'this is test', NULL, NULL, 'bcare', 'preston', '7456', 'care', 'this is about the company', 0),
(3, 'admin', 'admin@gmail.com', '$2y$10$Vry04FpOP3DMMnDqrI1Ae.nZlPAkxTwx9php3zWpz5EgZgh7U77qu', 'admin', '2025-12-04 15:54:54', NULL, NULL, NULL, NULL, '74689', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 'Person B', 'b@test.com', '$2y$10$abcdefghijklmnopqrstuv', 'employer', '2025-12-04 16:24:04', NULL, NULL, NULL, NULL, '7011111111', NULL, NULL, 'CareOne', 'Manchester', '7011111111', 'Nursing', 'Healthcare training', 0),
(5, 'Person C', 'c@test.com', '$2y$10$abcdefghijklmnopqrstuv', 'employer', '2025-12-04 16:24:04', NULL, NULL, NULL, NULL, '7022222222', NULL, NULL, 'MediServe', 'Liverpool', '7022222222', 'Diagnostics', 'Diagnostics internships', 0),
(6, 'Person D', 'd@test.com', '$2y$10$abcdefghijklmnopqrstuv', 'employer', '2025-12-04 16:24:04', NULL, NULL, NULL, NULL, '7033333333', NULL, NULL, 'HealthPlus', 'London', '7033333333', 'Public Health', 'Public outreach', 0),
(8, 'student', 'student@gmail.com', '$2y$10$SJYDBJqZQo9TdFkXCN6C0uiZP9nSEf13J./ZLqMe/04YXVwudYqsa', 'student', '2025-12-04 16:59:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `internship_id` (`internship_id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employer_id` (`employer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`internship_id`) REFERENCES `internships` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `internships`
--
ALTER TABLE `internships`
  ADD CONSTRAINT `internships_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
