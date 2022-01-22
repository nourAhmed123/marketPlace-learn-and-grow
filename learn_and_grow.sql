-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 03:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_and_grow`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseId` int(100) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `CourseDesc` longtext NOT NULL,
  `CourseImage` varchar(50) NOT NULL,
  `CourseContent` varchar(300) NOT NULL,
  `VideoLink` varchar(300) NOT NULL,
  `CoursePrice` int(30) NOT NULL,
  `Accepted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseId`, `CourseName`, `CourseDesc`, `CourseImage`, `CourseContent`, `VideoLink`, `CoursePrice`, `Accepted`) VALUES
(29, 'Computer Networks1', 'This is a course for beginners.', 'courseimages2.png', '1-Chapter 8  - Memory Management.pdf', 'https://www.youtube.com/watch?v=Mu0YZdCSjqw&list=PLy_2fgXkPiZuMaG9Jmp8PAwimIumf19hp&index=5', 1500, 0),
(30, 'Web Development ', 'This is an advanced course.  ', 'courseimages3.jpg', '2-Chapter 9 - Virtual Memory.pdf', 'https://www.youtube.com/watch?v=TdqQqyc7pfU', 3000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `work` varchar(30) NOT NULL,
  `ProfilePic` varchar(300) CHARACTER SET swe7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`id`, `Name`, `Email`, `Password`, `work`, `ProfilePic`) VALUES
(58, 'Rawan Hesham', 'rawansweilem@gmail.com', '111', 'student', 'R.jpg'),
(59, 'Nour Ahmed', 'nourahmed@gmail.com', '222', 'instructor', 'N.jpg'),
(60, 'Mahmoud Samy', 'mahmoudsamy@gmail.com', '333', 'student', 'M.png'),
(61, 'Jumana Nehad', 'jumananehad@gmail.com', '444', 'admin', 'J.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `sent_by` int(11) NOT NULL,
  `received_by` int(11) NOT NULL,
  `message` varchar(255) CHARACTER SET latin1 NOT NULL,
  `createdAt` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sent_by`, `received_by`, `message`, `createdAt`) VALUES
(22, 58, 61, 'hello ', '2022-01-22 02:33:45am');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `CourseName` int(1) NOT NULL,
  `clearance` int(1) NOT NULL,
  `FileEfficiency` int(1) NOT NULL,
  `Interest` int(1) NOT NULL,
  `Usefulness` int(1) NOT NULL,
  `Rating` int(1) NOT NULL,
  `Comment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseId`);

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sent_by` (`sent_by`,`received_by`),
  ADD KEY `received_by` (`received_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `logininfo`
--
ALTER TABLE `logininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
