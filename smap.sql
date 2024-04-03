-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 10:22 PM
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
-- Database: `smap`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_forms`
--

CREATE TABLE `feedback_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `field1` varchar(255) NOT NULL,
  `field2` varchar(255) NOT NULL,
  `field3` varchar(255) NOT NULL,
  `field4` varchar(255) NOT NULL,
  `field5` varchar(255) NOT NULL,
  `field6` varchar(255) NOT NULL,
  `field7` varchar(255) NOT NULL,
  `field8` varchar(255) NOT NULL,
  `field9` varchar(255) NOT NULL,
  `field10` varchar(255) NOT NULL,
  `field11` varchar(255) NOT NULL,
  `field12` varchar(255) NOT NULL,
  `field13` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_forms`
--

INSERT INTO `feedback_forms` (`id`, `form_number`, `student_id`, `semester`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`, `field10`, `field11`, `field12`, `field13`, `created_at`, `updated_at`) VALUES
(1, 1, 'nnm23mc028', 1, 'a', 'a', 'Solved', 'a', 'a', 'Solved', 'a', 'a', 'Solved', 'a', 'a', 'Solved', 'a', '2024-03-25 10:03:19', '2024-03-25 10:03:19'),
(2, 2, 'nnm23mc028', 1, 'b', 'b', 'Not Solved', 'b', 'b', 'Not Solved', 'b', 'b', 'Not Solved', 'b', 'b', 'Not Solved', 'b', '2024-03-25 10:03:56', '2024-03-25 10:03:56'),
(3, 3, 'nnm23mc028', 1, 'nil', 'nil', 'Solved', 'nil', 'nil', 'Solved', 'nil', 'nil', 'Solved', 'nil', 'nil', 'Solved', 'nil', '2024-03-26 12:31:03', '2024-03-26 12:31:03'),
(5, 1, 'nnm23mc027', 1, 'sdfas', 'sagdsafg', 'Not Solved', 'dfgd', 'dfgdfgdg', 'Not Solved', 'fghfh', 'fhgfdh', 'Solved', 'gfhfhfh', 'fghgjhgj', 'Not Solved', 'ghjkgjkhg', '2024-03-26 13:24:41', '2024-03-26 13:24:41'),
(6, 2, 'nnm23mc027', 1, 'thjjfgj', 'hgjgfhjghj', 'Not Solved', 'gfhjgfj', 'ggfhjgfhj', 'Not Solved', 'rtgjjgfhj', 'uykgfhsh', 'Not Solved', 'ghjgfhj', 'gfhjgfjghfj', 'Solved', 'ghjgfhjgfhj', '2024-03-26 13:25:41', '2024-03-26 13:25:41'),
(7, 3, 'nnm23mc027', 1, 'iooiioio', 'ioioio', 'Not Solved', 'ioioioioi', 'ioioioioi', 'Solved', 'jghjjh', 'kjlhjklhjkl', 'Not Solved', 'gdffghgfh', 'gfghgfhgfh', 'Solved', 'fhghfhghfgh', '2024-03-26 13:26:31', '2024-03-26 13:26:31'),
(8, 1, 'nnm23mc027', 2, 'gjgfhj', 'hhhhh', 'Solved', 'hhhhhh', 'hhhhhh', 'Solved', 'shoo', 'shoo', 'Solved', 'shoo', 'shoo', 'Solved', 'shoo', '2024-03-26 13:28:56', '2024-03-26 13:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `mentorship`
--

CREATE TABLE `mentorship` (
  `mentor_id` varchar(255) NOT NULL,
  `mentee_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentorship`
--

INSERT INTO `mentorship` (`mentor_id`, `mentee_id`, `created_at`, `updated_at`) VALUES
('emp123', 'nnm23mc036', '2024-03-31 14:37:53', '2024-03-31 14:37:53'),
('hod23mca', 'nnm23mc027', '2024-03-25 13:23:51', '2024-03-25 13:23:51'),
('hod23mca', 'nnm23mc028', '2024-03-25 10:02:00', '2024-03-25 10:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_12_05_171001_create_semesters_table', 1),
(5, '2023_12_05_171010_create_subjects_table', 1),
(6, '2023_12_05_171019_create_teachers_table', 1),
(7, '2023_12_05_171049_create_students_table', 1),
(8, '2023_12_05_171051_create_students_table', 1),
(9, '2023_12_05_171123_create_feedback_forms_table', 1),
(10, '2024_02_08_154730_create_sem_1_attendance_table', 1),
(11, '2024_02_08_154822_create_sem_2_attendance_table', 1),
(12, '2024_02_08_154915_create_sem_3_attendance_table', 1),
(13, '2024_02_08_160444_create_sem_4_attendance_table', 1),
(14, '2024_02_09_171124_create_sem_1_mse_table', 1),
(15, '2024_02_09_171418_create_sem_2_mse_table', 1),
(16, '2024_02_09_171501_create_sem_3_mse_table', 1),
(17, '2024_02_09_171529_create_sem_4_mse_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester_number`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sem_1_attendance`
--

CREATE TABLE `sem_1_attendance` (
  `form_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA101` varchar(255) NOT NULL,
  `22MCA102` varchar(255) NOT NULL,
  `22MCA103` varchar(255) NOT NULL,
  `22MCA104` varchar(255) NOT NULL,
  `22MCA105` varchar(255) NOT NULL,
  `22MCA106` varchar(255) NOT NULL,
  `22MCA107` varchar(255) NOT NULL,
  `22MCA108` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sem_1_attendance`
--

INSERT INTO `sem_1_attendance` (`form_number`, `student_id`, `22MCA101`, `22MCA102`, `22MCA103`, `22MCA104`, `22MCA105`, `22MCA106`, `22MCA107`, `22MCA108`, `created_at`, `updated_at`) VALUES
(1, 'nnm23mc027', '44', '44', '44', '44', '44', '44', '44', '44', '2024-03-26 13:24:41', '2024-03-26 13:24:41'),
(1, 'nnm23mc028', '96', '60', '59', '98', '100', '90', '90', '90', '2024-03-25 10:03:19', '2024-03-25 10:03:19'),
(2, 'nnm23mc027', '56', '56', '56', '56', '56', '56', '56', '56', '2024-03-26 13:25:41', '2024-03-26 13:25:41'),
(2, 'nnm23mc028', '50', '50', '50', '50', '50', '50', '50', '50', '2024-03-25 10:03:56', '2024-03-25 10:03:56'),
(3, 'nnm23mc027', '24', '24', '24', '24', '24', '25', '26', '27', '2024-03-26 13:26:31', '2024-03-26 13:26:31'),
(3, 'nnm23mc028', '66', '66', '66', '66', '66', '66', '66', '66', '2024-03-26 12:31:03', '2024-03-26 12:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `sem_1_mse`
--

CREATE TABLE `sem_1_mse` (
  `mse_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA101` varchar(255) NOT NULL,
  `22MCA102` varchar(255) NOT NULL,
  `22MCA103` varchar(255) NOT NULL,
  `22MCA104` varchar(255) NOT NULL,
  `22MCA105` varchar(255) NOT NULL,
  `22MCA106` varchar(255) NOT NULL,
  `22MCA107` varchar(255) NOT NULL,
  `22MCA108` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sem_1_mse`
--

INSERT INTO `sem_1_mse` (`mse_number`, `student_id`, `22MCA101`, `22MCA102`, `22MCA103`, `22MCA104`, `22MCA105`, `22MCA106`, `22MCA107`, `22MCA108`, `created_at`, `updated_at`) VALUES
(1, 'nnm23mc027', '30', '30', '30', '30', '30', '30', '30', '30', '2024-03-26 13:26:47', '2024-03-26 13:26:47'),
(1, 'nnm23mc028', '91', '92', '93', '94', '95', '96', '97', '98', '2024-03-26 12:29:25', '2024-03-26 12:29:25'),
(2, 'nnm23mc027', '40', '40', '40', '40', '40', '40', '40', '40', '2024-03-26 13:26:58', '2024-03-26 13:26:58'),
(2, 'nnm23mc028', '81', '82', '83', '84', '85', '86', '87', '88', '2024-03-26 12:30:09', '2024-03-26 12:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `sem_2_attendance`
--

CREATE TABLE `sem_2_attendance` (
  `form_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `22MCA202` varchar(255) NOT NULL,
  `22MCA203` varchar(255) NOT NULL,
  `22MCA204` varchar(255) NOT NULL,
  `22MCA205` varchar(255) NOT NULL,
  `22MCA206` varchar(255) NOT NULL,
  `22MCA207` varchar(255) NOT NULL,
  `22MCA208` varchar(255) NOT NULL,
  `22MCA209` varchar(255) NOT NULL,
  `22MCA211` varchar(255) DEFAULT NULL,
  `22MCA213` varchar(255) DEFAULT NULL,
  `22MCA222` varchar(255) DEFAULT NULL,
  `22MCA225` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sem_2_attendance`
--

INSERT INTO `sem_2_attendance` (`form_number`, `student_id`, `22MCA201`, `22MCA202`, `22MCA203`, `22MCA204`, `22MCA205`, `22MCA206`, `22MCA207`, `22MCA208`, `22MCA209`, `22MCA211`, `22MCA213`, `22MCA222`, `22MCA225`, `created_at`, `updated_at`) VALUES
(1, 'nnm23mc027', '77', '77', '77', '77', '77', '77', '77', '77', '77', '77', '77', '77', '77', '2024-03-26 13:28:56', '2024-03-26 13:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `sem_2_mse`
--

CREATE TABLE `sem_2_mse` (
  `mse_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `22MCA202` varchar(255) NOT NULL,
  `22MCA203` varchar(255) NOT NULL,
  `22MCA204` varchar(255) NOT NULL,
  `22MCA205` varchar(255) NOT NULL,
  `22MCA206` varchar(255) NOT NULL,
  `22MCA207` varchar(255) NOT NULL,
  `22MCA208` varchar(255) NOT NULL,
  `22MCA209` varchar(255) NOT NULL,
  `22MCA211` varchar(255) DEFAULT NULL,
  `22MCA213` varchar(255) DEFAULT NULL,
  `22MCA222` varchar(255) DEFAULT NULL,
  `22MCA225` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sem_2_mse`
--

INSERT INTO `sem_2_mse` (`mse_number`, `student_id`, `22MCA201`, `22MCA202`, `22MCA203`, `22MCA204`, `22MCA205`, `22MCA206`, `22MCA207`, `22MCA208`, `22MCA209`, `22MCA211`, `22MCA213`, `22MCA222`, `22MCA225`, `created_at`, `updated_at`) VALUES
(1, 'nnm23mc027', '67', '67', '67', '67', '67', '67', '67', '67', '67', '67', '67', '67', '67', '2024-03-26 13:30:39', '2024-03-26 13:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `sem_3_attendance`
--

CREATE TABLE `sem_3_attendance` (
  `form_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sem_3_mse`
--

CREATE TABLE `sem_3_mse` (
  `mse_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sem_4_attendance`
--

CREATE TABLE `sem_4_attendance` (
  `form_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sem_4_mse`
--

CREATE TABLE `sem_4_mse` (
  `mse_number` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `22MCA201` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `semester` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `fullname`, `email`, `contact`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'nnm23mc028', 'Darshan Dinesh MP', 'darshan@gmail.com', '9087654321', 1, '2024-03-25 10:02:00', '2024-03-25 10:02:00'),
(2, 'nnm23mc027', 'Chirashree', 'chirashree@gmail.com', '8147149062', 2, '2024-03-25 13:23:51', '2024-03-25 13:23:51'),
(3, 'nnm23mc036', 'Delbin', 'delbin@gmail.com', '7865940321', 1, '2024-03-31 14:37:53', '2024-03-31 14:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_number` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `semester_number`, `subject_code`, `subject_name`, `created_at`, `updated_at`) VALUES
(1, '1', '22MCA101', 'Data Structures with Algorithms', NULL, NULL),
(2, '1', '22MCA102', 'Advanced Database Systems', NULL, NULL),
(3, '1', '22MCA103', 'Computer Organization and Architecture', NULL, NULL),
(4, '1', '22MCA104', 'Mathematical Foundation for Computer Applications', NULL, NULL),
(5, '1', '22MCA105', 'Software Engineering and Testing', NULL, NULL),
(6, '1', '22MCA106', 'Research Methodology and Publication Ethics', NULL, NULL),
(7, '1', '22MCA107', 'Data Structures with Algorithms Lab', NULL, NULL),
(8, '1', '22MCA108', 'Advanced Database Systems Lab', NULL, NULL),
(9, '2', '22MCA201', 'Data Communication and Networks', NULL, NULL),
(10, '2', '22MCA202', 'Enterprise Java', NULL, NULL),
(11, '2', '22MCA203', 'Operating Systems with UNIX', NULL, NULL),
(12, '2', '22MCA204', 'Data Warehousing and Data Mining', NULL, NULL),
(13, '2', '22MCA205', 'Professional Communication and Ethics', NULL, NULL),
(14, '2', '22MCA206', 'Data Communication and Networks Lab', NULL, NULL),
(15, '2', '22MCA207', 'Enterprise Java Lab', NULL, NULL),
(16, '2', '22MCA208', 'Operating Systems with Unix Lab', NULL, NULL),
(17, '2', '22MCA209', 'Technical Seminar and Report Writing', NULL, NULL),
(18, '2', '22MCA211', 'Digital Image Processing and Pattern Recognition', NULL, NULL),
(19, '2', '22MCA213', 'Soft Computing', NULL, NULL),
(20, '2', '22MCA222', 'Health Care Analytics', NULL, NULL),
(21, '2', '22MCA225', '.Net Framework and C#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `emp_id`, `fullname`, `designation`, `email`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'hod23mca', 'Mamatha Balipa', 'Professor', 'hod@example.com', '9087654326', NULL, '2024-03-31 13:18:43'),
(2, 'emp123', 'ABC', 'Professor', 'abc@gmail.com', '12345767890', '2024-03-31 13:11:01', '2024-03-31 13:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','hod','teacher','student') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin23mca', 'admin@example.com', '$2y$10$E.d9HFCgjLtL2iH5WRJDDuZ1W2T/QYEO6wcp60444LMHqJRnv.Vi2', 'admin', NULL, NULL),
(2, 'hod23mca', 'hod@example.com', '$2y$10$0nJc7mhQcVbxyIFEgr6LXeyq99A8qPSfjqC.7EvvxvBcEhgXx8Dx6', 'hod', NULL, NULL),
(3, 'nnm23mc028', 'darshan@gmail.com', '$2y$10$Fq523U.TE7RNM6ijJPuc9.TEAvMaIENGQaturI2QsPzqjC9vr7kEW', 'student', '2024-03-25 10:02:00', '2024-03-25 10:02:00'),
(4, 'nnm23mc027', 'chirashree@gmail.com', '$2y$10$IfpZdXvnNkk7YTTvpvrpFOSxzEjbcbuuNhcuifNhETXwtIZ34DBNS', 'student', '2024-03-25 13:23:51', '2024-03-25 13:23:51'),
(5, 'emp123', 'abc@gmail.com', '$2y$10$vZuMws.25NHDK615AsojV.bpzo1PG8jc08Iqyk/sEabyx5IXq1jAi', 'teacher', '2024-03-31 13:11:01', '2024-03-31 13:11:01'),
(6, 'nnm23mc036', 'delbin@gmail.com', '$2y$10$ykL7kuDti.7ONQ1fYaCMe.r3BemvR/CMhh9ilvlrUk8RjGU8GMg.a', 'student', '2024-03-31 14:37:53', '2024-03-31 14:37:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback_forms`
--
ALTER TABLE `feedback_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentorship`
--
ALTER TABLE `mentorship`
  ADD PRIMARY KEY (`mentor_id`,`mentee_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `semesters_semester_number_unique` (`semester_number`);

--
-- Indexes for table `sem_1_attendance`
--
ALTER TABLE `sem_1_attendance`
  ADD PRIMARY KEY (`form_number`,`student_id`);

--
-- Indexes for table `sem_1_mse`
--
ALTER TABLE `sem_1_mse`
  ADD PRIMARY KEY (`mse_number`,`student_id`);

--
-- Indexes for table `sem_2_attendance`
--
ALTER TABLE `sem_2_attendance`
  ADD PRIMARY KEY (`form_number`,`student_id`);

--
-- Indexes for table `sem_2_mse`
--
ALTER TABLE `sem_2_mse`
  ADD PRIMARY KEY (`mse_number`,`student_id`);

--
-- Indexes for table `sem_3_attendance`
--
ALTER TABLE `sem_3_attendance`
  ADD PRIMARY KEY (`form_number`,`student_id`);

--
-- Indexes for table `sem_3_mse`
--
ALTER TABLE `sem_3_mse`
  ADD PRIMARY KEY (`mse_number`,`student_id`);

--
-- Indexes for table `sem_4_attendance`
--
ALTER TABLE `sem_4_attendance`
  ADD PRIMARY KEY (`form_number`,`student_id`);

--
-- Indexes for table `sem_4_mse`
--
ALTER TABLE `sem_4_mse`
  ADD PRIMARY KEY (`mse_number`,`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_id_unique` (`student_id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD KEY `students_semester_foreign` (`semester`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_subject_code_unique` (`subject_code`),
  ADD UNIQUE KEY `subjects_subject_name_unique` (`subject_name`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_emp_id_unique` (`emp_id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback_forms`
--
ALTER TABLE `feedback_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_semester_foreign` FOREIGN KEY (`semester`) REFERENCES `semesters` (`semester_number`),
  ADD CONSTRAINT `students_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_emp_id_foreign` FOREIGN KEY (`emp_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
