-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 04:28 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
  `grade` float(3,2) NOT NULL,
  `student_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `plan_id`, `grade`, `student_id`, `grade_id`) VALUES
(1, 1, 9.99, 15100106, 1),
(2, 1, 0.00, 15100107, 2),
(3, 1, 1.50, 15100108, 3),
(4, 1, 1.30, 15100106, 1);

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
(15100105);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `final_grade` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `student_id`, `subject_id`, `final_grade`) VALUES
(1, 15100106, 3, 4.45),
(2, 15100107, 3, 0.00),
(3, 15100108, 3, 0.75);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lessonview`
-- (See below for the actual view)
--
CREATE TABLE `lessonview` (
`date_of_plan` date
,`venue` varchar(50)
,`user_id` int(11)
);

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

--
-- Dumping data for table `lesson_plan`
--

INSERT INTO `lesson_plan` (`plan_id`, `subject_id`, `schedule_id`, `venue`, `teacher_id`, `date_created`, `date_of_plan`, `date_updated`, `lesson_outline`, `objectives`, `instruction`, `motivation`, `materials`, `coordinator_id`, `is_approved`) VALUES
(1, 3, 1, 'Gym', 15100103, '2018-06-09', '2018-06-11', '2018-06-10', 'The students can determine the importance of physical fitness and can also explain the different components of physical fitness.', 'Students can explain the aspects of physical fitness, list and define factors that impact physical fitness, and create physical fitness personal plan.  ', 'Engage the students with topic by asking them what the term ‘Physical fitness’ is to them. Show a video clip about physical fitness. Then divide the class into 7 groups and give each group a marker. Let them write each physical fitness components and explain. Let them report their work in front of the class after 45 minutes. After each report they will prepare ¼ piece of paper and write their learnings about the lesson for today.', 'The group who receives the highest grade will be given plus points and a chocolate bar.', 'Manila Paper, Marker', 15100105, 1),
(2, 2, 2, 'Quadrangle', 15100102, '2018-06-10', '2018-06-11', '2018-06-10', 'This visual arts lesson will allow students to get creative while practicing with either photography or videography. Students will also have to consider perspective from things outside themselves. Rubric included', 'The learners will create a photo array with narrative or a short video with sound sharing the perspective of an inanimate object. Students will be expected to be creative in both the verbal and artistic areas of the assignment.', 'Students will choose an inanimate object in the building or at their home to photograph or use for the video project.\r\nThe first shot will be of the actual object, but all other photos or video shots will be from the perspective of the object.\r\nAdditionally, commentary will be offered about how the object may think about the world.\r\n', 'Ask students to think about the world from that perspective for a moment.\r\nNow have students think about the world if they could only see from that position they are in, all day, every day, in the same spot.\r\nStudents with the best shot will be exhibited in the mural.\r\n', 'Cameras or video cameras for each student\r\nComputers/printers for completion of the project (any appropriate video sharing platform or photo sharing program should work)\r\n', 15100105, 1),
(3, 1, 3, 'Music Room 2', 15100101, '2018-06-09', '2018-06-12', '2018-06-10', 'The students will learn how to read musical notes.', 'The learners will be able to know the names of each note and their corresponding measure.\r\nLecture will be followed by a test to measure student’s understanding about the lesson\r\n', 'Students will listen to a number of notes at a time with the aid of a metronome to help them to be familiar with the measures of notes. \r\nThe learners will be asked few questions related to the topic discussed.\r\n', 'The student/s who got the highest score will be asked about their favorite music as of the moment and it’ll be the piece the class will learn and play at the end of the 1st quarter.', 'Materials Needed\r\nPapers, pens, metronome, stereo, audio file.\r\n', 15100105, 1),
(4, 4, 4, 'Library and Classroom', 15100104, '2018-06-10', '2018-06-12', '2018-06-10', 'Students will lean the long history of embroidery and the different symbolisms of embroidery.', 'Students will be able to explain the history and symbolisms of embroidery.', 'The students will be group into 7. Each group will be assigned to a timeline and will research about its history in embroidery. They will then present their research in front of the class through role play. Each group will be given 5 minutes to present their role play and explain their role play. ', 'The group who scores the highest will receive a perfect score and will receive a bonus point.', 'Music Player', 15100105, 1),
(5, 3, 1, 'Gym', 15100103, '2018-06-09', '2018-06-13', '2018-06-10', 'This lesson will allow students to determine different physical fitness test exercise and perform each test with the materials provided.', 'Students will able to learn about the different physical fitness test exercise. Performing the test exercise can help keep student’s body at a healthy weight. This can also decrease a person’s risk of developing certain diseases like obesity, type 2 diabetes, and high blood pressure.', 'Divide the class into 7 groups, each member of the group must explain the different types of physical fitness test that they could remember. They will be given 20-30 minutes for this activity. After 30 minutes, they will report their ideas in front of the class. After each report of the group, the teacher will give a quick explanation regarding each test. After the report, Students will do a short exercise before performing the different types of physical fitness test provided by the teacher. The materials are scattered around the gym area in order for the students to freely perform the exercises. They will perform this activity for the entire encounter', 'Students with the highest number of physical fitness test that they could remember will be given plus points and a chocolate bar. ', 'Chalk, measuring stick, small traffic cones, weight balance, tape measure, ', 15100105, 1),
(6, 2, 2, 'Quadrangle', 15100102, '2018-06-10', '2018-06-13', '2018-06-10', 'This lesson will allow students to practice creating art from a unique perspective while learning about Michelangelo.', 'Students should be able to create a unique drawing from a different perspective, just as when Michelangelo painted the Sistine Chapel ceiling.', 'Have students tape a piece of paper under their desks or tables.\r\nHave all art supplies at arm’s reach.\r\nAllow students to create a unique piece of art, but explain that the whole paper should be covered.\r\n', 'Ask the students if they have heard about Michelangelo or the Sistine Chapel.\r\nExplain that today they will try to create something beautiful while painting like Michelangelo.\r\nStudents with the best painting will be exhibited outside the classroom for one week.\r\n', 'Paper, paints (for older students), crayons/markers (for younger students), tape, floor covering where needed', 15100105, 1),
(7, 1, 3, 'Music Room 2', 15100101, '2018-06-10', '2018-06-14', '2018-06-10', 'This lesson will allow students to make music sheets.', 'Students will learn which part of the sheet a note should be placed based on the given letter in the music alphabet/note.', 'Students will be flashed a series of letters and will place a whole note on the sheet music basing from the letter given.', 'Student who got the highest remark will be able to choose his/her own piece to play at the end of the 1st quarter with an additional 10 points to his/her 1st quarter exam grade.', 'Paper, pen.', 15100105, 1),
(8, 4, 4, 'Classroom and Library', 15100104, '2018-06-10', '2018-06-14', '2018-06-10', 'Students will learn the basic stitches used in embroidery. This will serve as the fundamentals in creating embroidery design.', 'Students will be able to demonstrate all the basic stitching of embroidery and gain basic knowledge that will be there guide in doing embroidery.', 'The teacher will demonstrate in front of the class all 6 basic stitching used in embroidery. Once the students have seen the demonstration, they will be task to individually make their own sample stitches of the 6 basic stitches in embroidery on a piece of 4x4 white clothe. They may make use of any colour of thread and any size of needle. Once they have finish they will submit it to the teacher for checking.', 'Those who will score 60% base from the rubrics will be exempted in the upcoming quiz and will be given a perfect score for it. ', 'White Clothe, thread and needle', 15100105, 1);

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
(1, 15100103, 3, 'MW', '09:00:00', '12:00:00'),
(2, 15100102, 2, 'MW', '13:00:00', '16:00:00'),
(3, 15100101, 1, 'TTh', '09:00:00', '12:00:00'),
(4, 15100104, 4, 'TTh', '13:00:00', '16:00:00');

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

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `gwa`, `year`, `section`) VALUES
(15100106, 0.00, 1, 'Humility'),
(15100107, 0.00, 1, 'Humility'),
(15100108, 0.00, 1, 'Humility'),
(15100109, 0.00, 1, 'Humility'),
(15100110, 0.00, 1, 'Humility'),
(15100111, 0.00, 1, 'Humility'),
(15100112, 0.00, 1, 'Humility'),
(15100113, 0.00, 1, 'Humility'),
(15100114, 0.00, 1, 'Humility'),
(15100115, 0.00, 1, 'Humility'),
(15100116, 0.00, 1, 'Humility'),
(15100117, 0.00, 1, 'Humility'),
(15100118, 0.00, 1, 'Humility'),
(15100119, 0.00, 1, 'Humility'),
(15100120, 0.00, 1, 'Humility'),
(15100121, 0.00, 1, 'Humility'),
(15100122, 0.00, 1, 'Humility'),
(15100123, 0.00, 1, 'Humility'),
(15100124, 0.00, 1, 'Humility'),
(15100125, 0.00, 1, 'Humility');

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
(4, 'HE11', 'Home Economics 11'),
(8, 'bech ka', 'This is about how  to obey gail'),
(9, 'PROSTI 101', 'Kid in the streets, beast in the sheets.');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `subject_id`) VALUES
(15100101, 1),
(15100102, 2),
(15100103, 3),
(15100104, 4);

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
  `zipcode` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `type`, `filename`, `town`, `city`, `country`, `zipcode`, `email`, `password`) VALUES
(15100101, 'Devorah', 'Narvaez', 'teacher', '', 'Talamban', 'Cebu', 'Philippines', 6000, 'devorahnarvaez@gmail.com', 'devqui123'),
(15100102, 'Krizia', 'Lumapas', 'teacher', '', 'Lapu-lapu', 'Cebu', 'Philippines', 6000, 'krizialumapas@gmail.com', 'krilum123'),
(15100103, 'Jane', 'Manguiran', 'teacher', '', 'Lilo-an', 'Cebu', 'Philippines', 6000, 'janemanguiran@gmail.com', 'janman123'),
(15100104, 'Abigail', 'Semilla', 'teacher', '', 'Cebu', 'Cebu', 'Philippines', 6000, 'abigailsemilla@gmail.com', 'abisem123'),
(15100105, 'Benedict', 'Sanchez', 'coordinator', '', 'Cebu', 'Cebu', 'Philippines', 6000, 'benedictsanchez@gmail.com', 'bensan123'),
(15100106, 'Russel', 'Morquecho', 'student', '', 'Cebu', 'Cebu', 'Philippines', 6000, '', ''),
(15100107, 'Malcolm', 'Cada', 'student', '', 'Lapu-lapu', 'Cebu', 'Philippines', 6000, '', ''),
(15100108, 'Patty', 'Krasner', 'student', '', 'Lilo-an', 'Cebu', 'Philippines', 6000, '', ''),
(15100109, 'Celestina', 'Herbst', 'student', '', 'Cebu', 'Cebu', 'Philippines', 6000, '', ''),
(15100110, 'Rufus', 'Benham', 'student', '', 'Cebu', 'Cebu', 'Philippines', 6000, '', ''),
(15100111, 'Nestor', 'Buresh', 'student', '', 'Lilo-an', 'Cebu', 'Philippines', 6000, '', ''),
(15100112, 'Yolande', 'Lant', 'student', '', 'Cebu', 'Cebu', 'Philippines', 6000, '', ''),
(15100113, 'Peg', 'Girton', 'student', '', 'Cebu', 'Cebu', 'Philippines', 6000, '', ''),
(15100114, 'Leigh', 'Piekarski', 'student', '', 'Cebu', 'Cebu', 'Philippines', 6000, '', ''),
(15100115, 'Christopher', 'Poll', 'student', '', 'Cebu', 'Cebu', 'Philippines', 6000, '', ''),
(15100116, 'Drema', 'Vanscyoc', 'student', '', 'Lilo-an', 'Cebu', 'Philippines', 6000, '', ''),
(15100117, 'Gaylene', 'Durant', 'student', '', 'Lilo-an', 'Cebu', 'Philippines', 6000, '', ''),
(15100118, 'Krysten', 'Cranmer', 'student', '', 'Mandaue', 'Cebu', 'Philippines', 6000, '', ''),
(15100119, 'Marshall', 'Tittle', 'student', '', 'Minganilla', 'Minganilla', 'Philippines', 6000, '', ''),
(15100120, 'Keesha', 'Bomar', 'student', '', 'Pit-os', 'Cebu', 'Philippines', 6000, '', ''),
(15100121, 'Lester', 'Hopwood', 'student', '', 'Cebu', 'Cebu', 'Philippines', 6000, '', ''),
(15100122, 'Lynette', 'Hornback', 'student', '', 'Lapu-lapu', 'Cebu', 'Philippines', 6000, '', ''),
(15100123, 'Angelo', 'Ritch', 'student', '', 'Talamban', 'Cebu', 'Philippines', 6000, '', ''),
(15100124, 'Margeret', 'Lugo', 'student', '', 'Talamban', 'Cebu', 'Philippines', 6000, '', ''),
(15100125, 'Lara', 'Ahmad', 'student', '', 'Talamban', 'Cebu', 'Philippines', 6000, '', '');

-- --------------------------------------------------------

--
-- Structure for view `lessonview`
--
DROP TABLE IF EXISTS `lessonview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lessonview`  AS  select `lesson_plan`.`date_of_plan` AS `date_of_plan`,`lesson_plan`.`venue` AS `venue`,`user`.`user_id` AS `user_id` from (((`lesson_plan` join `subject` on((`lesson_plan`.`subject_id` = `subject`.`subject_id`))) join `teacher` on((`subject`.`subject_id` = `teacher`.`subject_id`))) join `user` on((`teacher`.`teacher_id` = `user`.`user_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `plan_id` (`plan_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD KEY `user_id` (`coordinator_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`),
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
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15100107;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15100126;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `lesson_plan` (`plan_id`),
  ADD CONSTRAINT `activity_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

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
