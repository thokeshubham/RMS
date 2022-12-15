-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 06:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `sub1` int(3) DEFAULT NULL,
  `sub2` int(3) DEFAULT NULL,
  `sub3` int(3) DEFAULT NULL,
  `sub4` int(3) DEFAULT NULL,
  `percentage` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `stud_id`, `sub1`, `sub2`, `sub3`, `sub4`, `percentage`) VALUES
(14, 8, 89, 78, 100, 89, 89),
(13, 9, 88, 85, 89, 88, 87.5),
(33, 10, 56, 76, 44, 55, 57.75),
(34, 14, 23, 45, 84, 75, NULL),
(35, 15, 46, 66, 55, 78, NULL),
(36, 16, 36, 96, 74, 93, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_student`
--

CREATE TABLE `user_student` (
  `id` int(15) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `department` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_student`
--

INSERT INTO `user_student` (`id`, `fname`, `lname`, `Gender`, `username`, `email`, `mob`, `department`, `year`, `password`) VALUES
(8, 'shubham', 'thoke', 'male', 'shubh', 'shubh@gmail.com', '987654321', 'comp', 'Third', '321'),
(9, 'arjun', 'padwar', 'male', 'arjun', 'arjun@gmail.com', '345654323', 'comp', 'Third', '123'),
(10, 'atharva', 'kavle', 'male', 'atharva', 'atharva@gmail.com', '765432345', 'comp', 'Third', '123'),
(11, 'Rakesh', 'Mane', 'male', 'rakesh', 'rm@gmail.com', '4562538954', 'comp', 'First', '123'),
(12, 'Roshan', 'Suryawashi', 'male', 'roshan', 'rs1@gmail.com', '1235236412', 'comp', 'First', '123'),
(13, 'Rahul', 'Dukale', 'male', 'rahul', 'rd1@gmail.com', '4562587913', 'comp', 'First', '123'),
(14, 'Dipak', 'jain', 'male', 'dipak', 'dj7@gmail.com', '7894566549', 'comp', 'Second', '123'),
(15, 'mahima', 'Deore', 'female', 'mahima', 'md5@gmail.com', '4566544565', 'comp', 'Second', '123'),
(16, 'Rushi', 'More', 'male', 'rushi', 'rm1@gmail.com', '1593574682', 'comp', 'Second', '123'),
(17, 'ganesh', 'Sonavne', 'male', 'ganesh', 'gs23@gmail.com', '4568998569', 'mechanical', 'First', '123'),
(18, 'ramesh', 'mahajan', 'male', 'ramesh', 'rm7@gmail.com', '4141252635', 'mechanical', 'First', '123'),
(19, 'vaibhav', 'deshmane', 'male', 'vaibhav', 'vd4@gmail.com', '4564568888', 'mechanical', 'First', '123'),
(20, 'Chetan', 'Khairnar', 'male', 'chetan', 'ck@gmail.com', '7848489156', 'mechanical', 'Second', '123'),
(21, 'Gaurav', 'Patil', 'male', 'gaurav', 'gpp@gmail.com', '2223336665', 'mechanical', 'Second', '123'),
(22, 'Jayesh', 'Chaudhary', 'male', 'jayesh', 'jc1@gmail.com', '4556699956', 'mechanical', 'Second', '123'),
(23, 'Sahil', 'Khapre', 'male', 'sahil', 'sk9@gmail.com', '7778885552', 'mechanical', 'Third', '123'),
(24, 'Rushikesh', 'kaklij', 'male', 'rushikesh', 'rk3@gmail.com', '88552113', 'mechanical', 'Third', '123'),
(25, 'Vishal', 'Patil', 'male', 'vishal', 'vp8@gmail.com', '9994445623', 'mechanical', 'Third', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user_teacher`
--

CREATE TABLE `user_teacher` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mob` int(15) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(15) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_teacher`
--

INSERT INTO `user_teacher` (`id`, `fname`, `lname`, `Gender`, `username`, `email_id`, `mob`, `department`, `year`, `subject`, `password`) VALUES
(19, 'santosh', 'mahale', 'male', 'mahale', 'sm@gmail.com', 123456789, 'Comp', 'Third', '3DSBDA', '123'),
(20, 'khyati', 'nirmal', 'female', 'kyati', 'kn@gmail.com', 123456999, 'Comp', 'Third', '1CG', '123'),
(22, 'mahesh', 'sanghvi', 'male', 'sanghvi', 'ms@gmail.com', 123456888, 'Comp', 'Third', '2DBMS', '123'),
(23, 'Neha', 'Bora ', 'female', 'bora', 'nb@gmail.com', 12345666, 'Comp', 'Third', '4AI', '123'),
(36, 'pallavi', 'dhake', 'female', 'dhake', 'pallavi@gmail.com', 464578578, 'Comp', 'Second', '1PHP', '123'),
(37, 'amit', 'bramhech', 'male', 'amit', 'amit@gmail.com', 55726788, 'Comp', 'Second', '2OOP', '123'),
(38, 'sai', 'maind', 'male', 'maind', 'sai@gmail.com', 7955645, 'Comp', 'Second', '3FDS', '123'),
(39, 'mahendra', 'pawar', 'male', 'mahendra', 'pawar@gmail.com', 78948945, 'Comp', 'Second', '4DSA', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`stud_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_student`
--
ALTER TABLE `user_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`email`),
  ADD KEY `mob` (`mob`);

--
-- Indexes for table `user_teacher`
--
ALTER TABLE `user_teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `mob` (`mob`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_student`
--
ALTER TABLE `user_student`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_teacher`
--
ALTER TABLE `user_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marksfk` FOREIGN KEY (`stud_id`) REFERENCES `user_student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
