-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 02:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghs`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `schoolyear_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `first_grading` int(11) NOT NULL,
  `second_grading` int(11) NOT NULL,
  `third_grading` int(11) NOT NULL,
  `fourth_grading` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `student_id`, `subject_id`, `schoolyear_id`, `teacher_id`, `first_grading`, `second_grading`, `third_grading`, `fourth_grading`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 10, 8, 4, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(2, 11, 7, 4, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(3, 13, 6, 2, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(4, 14, 5, 3, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(5, 15, 4, 4, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(6, 16, 3, 3, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(7, 16, 3, 2, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(8, 16, 1, 3, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(9, 16, 4, 3, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(10, 16, 5, 3, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(11, 16, 6, 3, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(12, 16, 7, 3, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(13, 16, 8, 3, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(14, 16, 9, 3, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(15, 17, 2, 2, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL),
(16, 13, 1, 1, 2, 90, 90, 90, 90, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2010_02_19_161826_create_schoolyears_table', 1),
(2, '2010_02_19_161826_create_subjects_table', 1),
(3, '2011_02_19_161826_create_roles_table', 1),
(4, '2011_10_12_000000_create_users_table', 1),
(5, '2014_02_19_161826_create_grades_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_02_16_081440_create_menus_table', 1),
(9, '2021_03_02_134614_create_students_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Administrator', NULL, NULL, NULL),
(2, 'teacher', 'TEACHER', NULL, NULL, NULL),
(3, 'student', 'STUDENT', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolyears`
--

CREATE TABLE `schoolyears` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolyears`
--

INSERT INTO `schoolyears` (`id`, `school_year`, `batch_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2000-01-01 00:00:00', 'MASIGLA', NULL, NULL, NULL),
(2, '2000-01-01 00:00:00', 'KENGKOY', NULL, NULL, NULL),
(3, '2000-01-01 00:00:00', 'PABEBE', NULL, NULL, NULL),
(4, '2000-01-01 00:00:00', 'TAMBAY', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `code`, `sub_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SCI', 'Science', NULL, NULL, NULL),
(2, 'MAPEH', 'Music Arts Physical Education and Health', NULL, NULL, NULL),
(3, 'AP', 'Araling Panlipunan', NULL, NULL, NULL),
(4, 'ESP', 'Edukasyon sa Pagkakatao', NULL, NULL, NULL),
(5, 'TLE', 'Technical Livelihood Education', NULL, NULL, NULL),
(6, 'MATH', 'Mathematics', NULL, NULL, NULL),
(7, 'FIL', 'Filipino', NULL, NULL, NULL),
(8, 'SCI02', 'Science and Earth', NULL, NULL, NULL),
(9, 'ENG', 'English', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `profile`, `name`, `age`, `address`, `username`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'kev.jpg', 'Kevin Felix Caluag', 20, 'secreto lang', 'superadmin', 'password', NULL, NULL, NULL, NULL),
(2, 2, 'kev.jpg', 'Kevin Felix Caluag', 20, 'secreto lang', 'teacher1', 'password', NULL, NULL, NULL, NULL),
(3, 2, 'kev.jpg', 'Wendoga', 20, 'secreto lang', 'teacher2', 'password', NULL, NULL, NULL, NULL),
(4, 2, 'kev.jpg', 'Wendella', 20, 'secreto lang', 'teacher3', 'password', NULL, NULL, NULL, NULL),
(5, 2, 'kev.jpg', 'Jodella', 20, 'secreto lang', 'teacher4', 'password', NULL, NULL, NULL, NULL),
(6, 2, 'kev.jpg', 'Dela', 20, 'secreto lang', 'teacher5', 'password', NULL, NULL, NULL, NULL),
(7, 2, 'kev.jpg', 'Del', 20, 'secreto lang', 'teacher6', 'password', NULL, NULL, NULL, NULL),
(8, 2, 'kev.jpg', 'Juds', 20, 'secreto lang', 'teacher7', 'password', NULL, NULL, NULL, NULL),
(9, 2, 'kev.jpg', 'jots', 20, 'secreto lang', 'teacher8', 'password', NULL, NULL, NULL, NULL),
(10, 3, 'kev.jpg', 'Wendogdog', 20, 'secreto lang', 'student3', 'password', NULL, NULL, NULL, NULL),
(11, 3, 'kev.jpg', 'Wendog', 20, 'secreto lang', 'student4', 'password', NULL, NULL, NULL, NULL),
(12, 3, 'kev.jpg', 'Ripss', 20, 'secreto lang', 'student5', 'password', NULL, NULL, NULL, NULL),
(13, 3, 'kev.jpg', 'Wendel', 20, 'secreto lang', 'student6', 'password', NULL, NULL, NULL, NULL),
(14, 3, 'kev.jpg', 'Kevin', 20, 'secreto lang', 'student7', 'password', NULL, NULL, NULL, NULL),
(15, 3, 'kev.jpg', 'Kim Razel Manuel', 20, 'secreto lang', 'student8', 'password', NULL, NULL, NULL, NULL),
(16, 3, 'kev.jpg', 'Felix Caluag', 20, 'secreto lang', 'student1', 'password', NULL, NULL, NULL, NULL),
(17, 3, 'kev.jpg', 'Kevin Felix', 20, 'secreto lang', 'student2', 'password', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grades_subject_id_foreign` (`subject_id`),
  ADD KEY `grades_schoolyear_id_foreign` (`schoolyear_id`),
  ADD KEY `grades_teacher_id_foreign` (`teacher_id`),
  ADD KEY `grades_student_id_foreign` (`student_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolyears`
--
ALTER TABLE `schoolyears`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_username_unique` (`username`),
  ADD KEY `students_role_id_foreign` (`role_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schoolyears`
--
ALTER TABLE `schoolyears`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_schoolyear_id_foreign` FOREIGN KEY (`schoolyear_id`) REFERENCES `schoolyears` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `grades_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `grades_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `grades_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
