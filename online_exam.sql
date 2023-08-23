-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2023 at 07:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `origin_dept_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_code`, `course_name`, `origin_dept_code`) VALUES
(32, 'BES 08201', 'Business Planning ', 'BES'),
(1, 'CSU 07402', 'Electronic Signals', 'CCT'),
(2, 'CSU 07403', 'Artificial Intelligence', 'CCT'),
(4, 'GSU O7201C', 'Quantitative Methods', 'MHSS'),
(5, 'ITU 07104', 'Programming principle', 'CCT'),
(6, 'ITU 07201', 'Laws and Information Technology', 'MHSS'),
(7, 'ITU 07202', 'Event Driven Programming', 'CCT'),
(8, 'ITU 07203', 'Electronic Commerce', 'CCT'),
(9, 'ITU 07204', 'Database concepts', 'CCT'),
(10, 'ITU 07205', 'Data structure and algorithms', 'CCT'),
(11, 'ITU 07207', 'Fundamental of Web programming', 'CCT'),
(13, 'ITU 07209', 'System Analysis and Design Principles', 'CCT'),
(14, 'ITU 07301', 'Database Management', 'CCT'),
(15, 'ITU 07401C', 'Object Oriented Programming', 'CCT'),
(16, 'ITU 08102', 'Entrepreneurship', 'BES'),
(17, 'ITU 08103', 'Mobile Application Development', 'CCT'),
(18, 'ITU 08202', 'HCI', 'CCT'),
(19, 'ITU 08204', 'Information Security', 'CCT'),
(21, 'ITU 08206', 'Supply Chain Management', 'BES'),
(23, 'ITU O7403', 'Management Information System', 'CCT'),
(24, 'LTU 08101', 'Urban Transport Planning', 'LTS'),
(25, 'LTU 08102', 'Freight and Passenger Insuranc', 'LTS'),
(26, 'LTU 08103', 'Handling of Dangerous Goods', 'LTS'),
(27, 'LTU 08104', 'Strategic Management', 'BES'),
(28, 'LTU 08208', 'Rural Transport Management', 'LTS'),
(29, 'LTU08210', 'Travel and Tourism', 'LTS'),
(3, 'nkwera@qbegs.com', 'Victor Nkwera', 'BES'),
(30, 'TET 07102', 'Engine Sterilizations', 'TET'),
(31, 'TET 0745', 'Oil Refining and Filtering', 'TET');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept_code` varchar(100) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_code`, `dept_name`) VALUES
(1, 'BES', 'Business and Entrepreneurship Studies'),
(2, 'CCT', 'Computing and Communication Technology'),
(3, 'LTS', 'Logistic and Transport'),
(4, 'MHSS', 'Mathematics, Humanity and Social Studies'),
(5, 'MIS', 'Management of Information Systems'),
(7, 'TET', 'Transport and Engineering Technology');

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `id` int(10) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `course` varchar(20) NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `lesson_plan` varchar(200) DEFAULT NULL,
  `exam_type` text NOT NULL,
  `status` enum('pending','approved','canceled') NOT NULL DEFAULT 'pending',
  `in_status` enum('pending','approved','canceled') NOT NULL DEFAULT 'pending',
  `ex_status` enum('pending','approved','canceled') NOT NULL DEFAULT 'pending',
  `examdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`id`, `lecturer`, `course`, `attachment`, `lesson_plan`, `exam_type`, `status`, `in_status`, `ex_status`, `examdate`) VALUES
(2, 'sjuma@qbegs.com', 'ITU 07204', 'acbf271d.pdf', NULL, 'Test Examination', 'approved', 'approved', 'pending', '2022-12-05 03:54:56'),
(6, 'gratius@qbegs.com', 'ITU 08204', 'f76f04df.pdf', NULL, 'Test Examination', 'pending', 'pending', 'pending', '2023-01-09 09:56:57'),
(8, 'gratius@qbegs.com', 'ITU 08204', '8d116708.pdf', NULL, 'Semester Examination', 'pending', 'pending', 'pending', '2023-02-13 18:40:36'),
(10, 'lutyufop@qbegs.com', 'ITU 07201', '3d1f5607.pdf', NULL, 'Semester Examination', 'approved', 'approved', 'approved', '2023-06-28 00:22:08'),
(13, 'sjuma@qbegs.com', 'ITU 07204', 'b3aff727.pdf', 'fa624530.pdf', 'Special/Supplimentary Examination', 'pending', 'approved', 'pending', '2023-06-29 08:15:09'),
(18, 'typ@qbegs.com', 'ITU 08202', 'de05066e.pdf', '67d1ffd4.pdf', 'Semester Examination', 'approved', 'approved', 'approved', '2023-06-30 22:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` bigint(20) NOT NULL,
  `lecturer_name` varchar(100) NOT NULL,
  `department` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `lecturer_name`, `department`, `email`) VALUES
(1, 'Daudi G Daud', 'CCT', 'gdaudi@qbegs.com'),
(2, 'J J Masunga', 'BES', 'masungaj@qbegs.com'),
(4, 'Deus Shatta', 'BES', 'shattad@qbegs.com'),
(5, 'Benard Hayuma', 'CCT', 'bhayuma@qbegs.com'),
(8, 'Frank Ndibalema', 'CCT', 'ndibalema@qbegs.com'),
(9, 'Kumbo H', 'CCT', 'kumbo@qbegs.com'),
(10, 'Peace Lutyufo', 'MHSS', 'lutyufop@qbegs.com'),
(14, 'Neema Bhalalusesa', 'CCT', 'bhalalusesa@gmail.com'),
(15, 'Shabani Juma', 'CCT', 'sjuma@qbegs.com'),
(17, 'Robert Sikumbili', 'CCT', 'rsikumbili@qbegs.com'),
(19, 'Benson Kileo', 'MHSS', 'bkileo@qbegs.com'),
(20, 'Deogratius Mahuwi', 'CCT', 'gratius@qbegs.com'),
(21, 'Doreen Swaraat', 'CCT', 'sarwaat@qbegs.com'),
(22, 'Angela Lunyoro', 'CCT', 'lunyoro@qbegs.com'),
(24, 'Thomas Mushi', 'CCT', 'tmushi@qbegs.com'),
(25, 'James Mboya', 'MIS', 'mboya@qbegs.com'),
(26, 'Juma Muya', 'LTS', 'muya@qbegs.com'),
(27, 'Eveline Myamba', 'LTS', 'myamba@qbegs.com'),
(28, 'John Mayange', 'MHSS', 'mayange@qbegs.com'),
(29, 'Aisha Kihame', 'CCT', 'admin@qbegs.com'),
(30, 'Melline Kyando', 'BES', 'kyando@qbegs.com'),
(31, 'Sospiter Kihalu', 'LTS', 'kihalu@qbegs.com'),
(32, 'Faith Kimasa', 'BES', 'kimasaa@qbegs.com'),
(35, 'Cosmas Zakayo Elisha', 'TET', 'kosma@qbegs.com'),
(54, 'Marcia Casey', 'CCT', 'dibahazega@mailinator.com'),
(55, 'Patrick Waters', 'CCT', 'water@qbegs.com'),
(59, 'Herrod Monroe', 'TET', 'nawyka@mailinator.com'),
(61, 'Alisa Francis', 'CCT', 'sypujapiv@mailinator.com'),
(62, 'Karen Schneider', 'CCT', 'typ@qbegs.com'),
(63, 'Frances Dale', 'CCT', 'jazitice@mailinator.com');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_course`
--

CREATE TABLE `lecturer_course` (
  `lecturer_id` varchar(255) NOT NULL,
  `course_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer_course`
--

INSERT INTO `lecturer_course` (`lecturer_id`, `course_code`) VALUES
('kimasaa@qbegs.com', 'ITU 07201'),
('lutyufop@qbegs.com', 'GSU O7201C'),
('lunyoro@qbegs.com', 'CSU 07403'),
('kimasaa@qbegs.com', 'GSU O7201C'),
('sjuma@qbegs.com', 'ITU 07204'),
('kyando@qbegs.com', 'ITU 07204'),
('kyando@qbegs.com', 'ITU 08206'),
('shattad@qbegs.com', 'ITU 08102'),
('kosma@qbegs.com', 'ITU 07201'),
('gdaudi@qbegs.com', 'ITU 07203'),
('kumbo@qbegs.com', 'ITU 08204'),
('myamba@qbegs.com', 'LTU 08208'),
('muya@qbegs.com', 'LTU08210'),
('muya@qbegs.com', 'LTU 08102'),
('lutyufop@qbegs.com', 'ITU 07201'),
('dibahazega@mailinator.com', 'CSU 07402'),
('water@qbegs.com', 'CSU 07403'),
('gratius@qbegs.com', 'ITU 07209'),
('sypujapiv@mailinator.com', 'CSU 07402'),
('typ@qbegs.com', 'ITU 08202'),
('jazitice@mailinator.com', 'ITU 08202');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `id` int(10) NOT NULL,
  `prog_code` varchar(30) NOT NULL,
  `prog_name` text NOT NULL,
  `nta_level` int(10) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`id`, `prog_code`, `prog_name`, `nta_level`, `department`) VALUES
(2, 'BIT', 'Bachelor Degree in Information Technology', 8, 'CCT'),
(3, 'HDIT II', 'Higher Diploma in Information Technology 2', 7, 'CCT'),
(4, 'BHRM', 'Bachelor Degree in Human Resource Management', 8, 'BES'),
(5, 'BLTM', 'Bachelor Degree in Logistic and Transport Management', 8, 'LTS'),
(6, 'BEMIT', 'BACHELOR DEGREE OF EDUCATION IN MATHEMATICS AND INFORMATION TECHNOLOGY', 8, 'MHSS'),
(7, 'BPLM', 'BACHELOR DEGREE IN PROCUREMENT AND LOGISTICS MANAGEMENT', 8, 'MHSS'),
(8, 'JFT', 'Just For Test', 0, 'BES'),
(9, 'HDIT I', 'Higher Diploma in Information Technology', 0, 'CCT');

-- --------------------------------------------------------

--
-- Table structure for table `questionbank`
--

CREATE TABLE `questionbank` (
  `id` int(30) NOT NULL,
  `question_text` text NOT NULL,
  `type` enum('define','choice','explanation','short answer','essay') NOT NULL,
  `marks` int(5) NOT NULL,
  `topic` text NOT NULL,
  `module` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionbank`
--

INSERT INTO `questionbank` (`id`, `question_text`, `type`, `marks`, `topic`, `module`) VALUES
(1, 'Explain briefly meaning of Database', 'explanation', 2, 'Database schema', 'ITU 07204'),
(2, 'what is database schema?', 'explanation', 3, 'Introduction to Database', 'ITU 07204'),
(3, 'Explain the meaning of Supply Chain management.', 'short answer', 2, 'Introduction to Supply chain management', 'ITU 08206'),
(4, 'Challenge sample Question to be entered on first test', 'define', 2, 'Sample Questions and Answers', 'nkwera@qbegs.com'),
(5, 'Give the difference between authentication and authorization in network security', 'explanation', 3, 'Information security basics', 'ITU 08204'),
(6, 'How does symmetric encryption work?', 'explanation', 8, 'Encryption of data', 'ITU 08204'),
(7, 'Explain the five components of a secured system', 'explanation', 4, 'Information security basics', 'ITU 08204'),
(8, 'Define the meaning of E-Commerce', 'define', 1, 'Introduction to e-commerce', 'ITU 07203'),
(9, 'How does E-comerce differ from commerce?', 'explanation', 2, 'Introduction to e-commerce', 'ITU 07203'),
(10, 'Describe the term E2C.', 'short answer', 4, 'Introduction to e-commerce', 'ITU 07203'),
(11, 'How does the Law plays in E-commerce perfomance  in today world?', 'explanation', 4, 'Introduction to e-commerce', 'ITU 07203'),
(12, 'Explain in briefly the meaning of B2B e-commerce', 'explanation', 5, 'Introduction to e-commerce', 'ITU 07203'),
(13, 'Discuss the characteristics of e-commerce', 'explanation', 5, 'Introduction to e-commerce', 'ITU 07203'),
(14, 'How many many table are formed when we have two entity which are many to many in relationship and one attribute among the two entity is multivalued?.', 'short answer', 4, 'Introduction to Database', 'ITU 07204'),
(15, 'Explain the main uses of primary key and foreign key as  related to database.', 'short answer', 5, 'Introduction to Database', 'ITU 07204'),
(16, 'Describe the Network protocols and their functions', 'explanation', 6, 'Network Security Protocols', 'ITU 08204'),
(25, 'What is Quantitative method?', 'define', 2, 'Intro', 'GSU O7201C'),
(27, 'Sample Question Explained', '', 12, 'General Topic', 'CSU 07402'),
(28, 'Explain Meaning Of Networking', '', 12, 'General Topic', 'CSU 07402'),
(29, 'Explain in Detail about AI', 'explanation', 4, 'Intro', 'CSU 07403'),
(30, 'Examine why Law school in Tanzania?', 'explanation', 2, 'Intro', 'ITU 07201'),
(31, 'Which act talk about Cybercrime Act?', 'explanation', 1, 'Intro', 'ITU 07201'),
(32, 'What is ERD stand for?', 'define', 1, 'Intro', 'ITU 07204'),
(39, 'Sample Question Explained again?', 'explanation', 12, 'General Topic', 'ITU 07204'),
(40, 'Sample Question Explained in', 'explanation', 10, 'General Topic', 'ITU 07204');

-- --------------------------------------------------------

--
-- Table structure for table `question_choices`
--

CREATE TABLE `question_choices` (
  `question_id` int(11) NOT NULL,
  `choice_type` varchar(3) NOT NULL,
  `choice_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `course` int(11) NOT NULL,
  `password` text NOT NULL,
  `registration_number` varchar(100) NOT NULL,
  `profile_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `course`, `password`, `registration_number`, `profile_picture`) VALUES
(3, '', 7, 'Pa$$w0rd!', 'ORS522/26-ST/20/2340', 'avatar.png'),
(5, '', 7, 'Pa$$w0rd!', 'ORS843/26-ST/21/2350', 'avatar.png'),
(6, '', 6, 'Pa$$w0rd!', 'ORS896/28-ST/15/2326', 'avatar.png'),
(7, '', 2, 'Pa$$w0rd!', 'ORS5/09-ST/19/2351', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` enum('admin','lecturer','student') NOT NULL DEFAULT 'student',
  `user_status` int(2) NOT NULL,
  `last_login` datetime NOT NULL,
  `last_logout` datetime NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `user_status`, `last_login`, `last_logout`, `date_created`) VALUES
(1, 'admin@qbegs.com', '202cb962ac59075b964b07152d234b70', 'admin', 0, '2023-06-30 21:06:46', '2023-08-22 05:08:01', '2022-11-30 10:06:54'),
(2, 'lunyoro@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-30 21:06:08', '2023-06-30 21:06:16', '2022-11-30 10:23:19'),
(3, 'shattad@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2022-12-03 01:12:10', '2022-12-03 01:12:14', '2022-11-30 10:27:40'),
(4, 'muya@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-05-24 19:05:06', '2023-05-24 19:05:29', '2022-11-30 11:37:35'),
(6, 'masungaj@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-02-07 01:02:57', '2023-02-07 01:02:30', '2022-11-30 11:41:52'),
(8, 'sjuma@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-07-07 06:07:41', '2023-06-29 07:06:07', '2022-11-30 11:42:30'),
(9, 'kyando@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2022-12-03 08:12:06', '2022-12-03 08:12:18', '2022-11-30 15:49:26'),
(10, 'kimasaa@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2022-12-01 12:12:59', '2022-12-01 13:12:32', '2022-12-01 09:40:26'),
(14, 'gdaudi@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-01 19:06:35', '2023-06-01 19:06:12', '2022-12-02 04:55:09'),
(15, 'kosma@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-30 21:06:31', '2023-06-30 21:06:59', '2022-12-02 07:28:17'),
(16, 'kumbo@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-29 14:06:54', '2023-06-29 14:06:23', '2022-12-03 05:44:44'),
(17, 'gratius@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-04 10:06:16', '2023-06-02 06:06:36', '2023-01-09 07:18:42'),
(18, 'lutyufop@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-27 23:06:26', '2023-06-27 23:06:09', '2023-01-15 10:24:28'),
(25, 'mayange@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-27 23:06:14', '2023-06-27 23:06:49', '2023-02-07 02:43:03'),
(39, 'dibahazega@mailinator.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-27 23:06:41', '2023-06-27 23:06:57', '2023-06-28 00:37:17'),
(40, 'water@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-30 21:06:21', '2023-06-30 21:06:42', '2023-06-28 01:28:31'),
(44, 'nawyka@mailinator.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-30 18:06:57', '0000-00-00 00:00:00', '2023-06-30 19:24:57'),
(46, 'sypujapiv@mailinator.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-30 20:06:04', '0000-00-00 00:00:00', '2023-06-30 21:53:04'),
(47, 'typ@qbegs.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-30 21:06:30', '0000-00-00 00:00:00', '2023-06-30 22:20:17'),
(48, 'jazitice@mailinator.com', '202cb962ac59075b964b07152d234b70', 'lecturer', 0, '2023-06-30 21:06:04', '0000-00-00 00:00:00', '2023-06-30 22:34:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `origin_dept_code` (`origin_dept_code`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dept_code` (`dept_code`);

--
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course` (`course`),
  ADD KEY `lecturer` (`lecturer`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `lecturer_course`
--
ALTER TABLE `lecturer_course`
  ADD KEY `course_code` (`course_code`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_code` (`prog_code`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `questionbank`
--
ALTER TABLE `questionbank`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`question_text`) USING HASH,
  ADD KEY `module` (`module`);

--
-- Indexes for table `question_choices`
--
ALTER TABLE `question_choices`
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration_number` (`registration_number`),
  ADD KEY `student_ibfk_1` (`course`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `questionbank`
--
ALTER TABLE `questionbank`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`origin_dept_code`) REFERENCES `department` (`dept_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `examination`
--
ALTER TABLE `examination`
  ADD CONSTRAINT `examination_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course` (`course_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `examination_ibfk_2` FOREIGN KEY (`lecturer`) REFERENCES `lecturer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD CONSTRAINT `lecturer_ibfk_1` FOREIGN KEY (`department`) REFERENCES `department` (`dept_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lecturer_course`
--
ALTER TABLE `lecturer_course`
  ADD CONSTRAINT `lecturer_course_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lecturer_course_ibfk_2` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programme`
--
ALTER TABLE `programme`
  ADD CONSTRAINT `programme_ibfk_1` FOREIGN KEY (`department`) REFERENCES `department` (`dept_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questionbank`
--
ALTER TABLE `questionbank`
  ADD CONSTRAINT `questionbank_ibfk_1` FOREIGN KEY (`module`) REFERENCES `course` (`course_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_choices`
--
ALTER TABLE `question_choices`
  ADD CONSTRAINT `question_choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questionbank` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`username`) REFERENCES `lecturer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
