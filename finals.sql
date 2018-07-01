-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 05:36 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finals`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `grade` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `coordinator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`coordinator_id`) VALUES
(5);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `final_grade` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_plan`
--

CREATE TABLE `lesson_plan` (
  `plan_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_of_plan` date NOT NULL,
  `date_updated` date NOT NULL,
  `lesson_outline` text NOT NULL,
  `objectives` text NOT NULL,
  `instruction` text NOT NULL,
  `motivation` text NOT NULL,
  `materials` text NOT NULL,
  `coordinator_id` int(11) NOT NULL,
  `is_approved` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `day` varchar(3) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `teacher_id`, `subject_id`, `day`, `start_time`, `end_time`) VALUES
(1, 1, 1, 'TTh', '07:30:00', '11:30:00'),
(2, 2, 2, 'MW', '13:00:00', '16:00:00'),
(3, 3, 3, 'MW', '09:00:00', '12:00:00'),
(4, 4, 4, 'TTh', '09:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `gwa` float(3,2) NOT NULL,
  `year` int(4) NOT NULL,
  `section` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `course_code`, `course_name`) VALUES
(1, 'Musc1', 'Music 1'),
(2, 'Arts11', 'Arts 11'),
(3, 'PE11', 'Physical Education 11'),
(4, 'HE11', 'Home Economics 11');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `subject_id`, `email`, `password`) VALUES
(1, 1, 'devorahnarvaez@gmail.com', 'devqui123'),
(2, 2, 'krizialumapas@gmail.com', 'krilum123'),
(3, 3, 'janemanguiran@gmail.com', 'janman123'),
(4, 4, 'abigailsemilla@gmail.com', 'abisem123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `filename` varchar(30) NOT NULL,
  `town` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `type`, `filename`, `town`, `city`, `country`, `zipcode`) VALUES
(1, 'Devorah', 'Narvaez', 'teacher', '', 'Talamban', 'Cebu', 'Philippines', 6000),
(2, 'Krizia', 'Lumapas', 'teacher', '', 'Lapu-lapu', 'Cebu', 'Philippines', 0),
(3, 'Jane', 'Manguiran', 'teacher', '', 'Lilo-an', 'Cebu', 'Philippines', 0),
(4, 'Abigail', 'Semilla', 'teacher', '', 'Cebu', 'Cebu', 'Philippines', 6000),
(5, 'Benedict', 'Sanchez', 'coordinator', '', 'Cebu', 'Cebu', 'Philippines', 6000),
(6, 'Russel', 'Morquecho', 'student', '', '', '', '', 0),
(7, 'Malcolm', 'Cada', 'student', '', '', '', '', 0),
(8, 'Patty', 'Krasner', 'student', '', '', '', '', 0),
(9, 'Celestina', 'Herbst', 'student', '', '', '', '', 0),
(10, 'Rufus', 'Benham', 'student', '', '', '', '', 0),
(11, 'Nestor ', 'Buresh', 'student', '', '', '', '', 0),
(12, 'Yolande ', 'Lant', 'student', '', '', '', '', 0),
(13, 'Peg ', 'Girton', 'student', '', '', '', '', 0),
(14, 'Leigh', 'Piekarski', 'student', '', '', '', '', 0),
(15, 'Christopher', 'Poll', 'student', '', '', '', '', 0),
(16, 'Drema', 'Vanscyoc', 'student', '', '', '', '', 0),
(17, 'Gaylene', 'Durant', 'student', '', '', '', '', 0),
(18, 'Krysten', 'Cranmer', 'student', '', '', '', '', 0),
(19, 'Marshall', 'Tittle', 'student', '', '', '', '', 0),
(20, 'Keesha', 'Bomar', 'student', '', '', '', '', 0),
(21, 'Lester', 'Hopwood', 'student', '', '', '', '', 0),
(22, 'Lynette', 'Hornback', 'student', '', '', '', '', 0),
(23, 'Angelo', 'Ritch', 'student', '', '', '', '', 0),
(24, 'Margeret', 'Lugo', 'student', '', '', '', '', 0),
(25, 'Lara', 'Ahmad', 'student', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `plan_id` (`plan_id`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD KEY `user_id` (`coordinator_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  ADD PRIMARY KEY (`plan_id`),
  ADD KEY `coordinator_id` (`coordinator_id`),
  ADD KEY `schedule_id` (`schedule_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `lesson_plan_ibfk_3` (`subject_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `user_id` (`teacher_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD KEY `user_id` (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `user_id` (`teacher_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `lesson_plan` (`plan_id`);

--
-- Constraints for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD CONSTRAINT `coordinator_ibfk_1` FOREIGN KEY (`coordinator_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `grade_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  ADD CONSTRAINT `lesson_plan_ibfk_1` FOREIGN KEY (`coordinator_id`) REFERENCES `coordinator` (`coordinator_id`),
  ADD CONSTRAINT `lesson_plan_ibfk_2` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`schedule_id`),
  ADD CONSTRAINT `lesson_plan_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `schedule` (`subject_id`),
  ADD CONSTRAINT `lesson_plan_ibfk_4` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
