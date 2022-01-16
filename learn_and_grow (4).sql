-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 11:23 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `course_name`) VALUES
(36, 'English101');

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
  `CoursePrice` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseId`, `CourseName`, `CourseDesc`, `CourseImage`, `CourseContent`, `VideoLink`, `CoursePrice`) VALUES
(16, 'English101', 'english for begginers ', 'Generation-Gap.jpg', 'kjsnfksjfvoijosirfjois', 'https://www.youtube.com/watch?v=Mu0YZdCSjqw&list=PLy_2fgXkPiZuMaG9Jmp8PAwimIumf19hp&index=5', 0),
(17, 'English102', 'begginer course ', 'Generation-Gap.jpg', 'kjdjsodowsekoew', 'https://www.youtube.com/watch?v=Mu0YZdCSjqw&list=PLy_2fgXkPiZuMaG9Jmp8PAwimIumf19hp&index=5', 0),
(18, 'Web', 'ndcskjcnkjsdn', 'grass.jpg', '', 'https://www.youtube.com/watch?v=Mu0YZdCSjqw&list=PLy_2fgXkPiZuMaG9Jmp8PAwimIumf19hp&index=5', 0),
(19, 'Web2', 'jgjhgjghk', 'grass.jpg', '', 'https://www.youtube.com/watch?v=Mu0YZdCSjqw&list=PLy_2fgXkPiZuMaG9Jmp8PAwimIumf19hp&index=5', 0),
(20, 'English2013', 'ftftyuyt', 'grass.jpg', '', 'https://www.youtube.com/watch?v=Mu0YZdCSjqw&list=PLy_2fgXkPiZuMaG9Jmp8PAwimIumf19hp&index=5', 0),
(21, 'English1022', 'bjhgjhg', 'grass.jpg', 'OS documentation (1).docx', 'https://www.youtube.com/watch?v=Mu0YZdCSjqw&list=PLy_2fgXkPiZuMaG9Jmp8PAwimIumf19hp&index=5', 0),
(22, 'English20111', 'jhjtguygt', 'WhatsApp Image 2022-01-10 at 9.38.45 PM.jpeg', 'SMTP.pdf', 'https://www.youtube.com/watch?v=Mu0YZdCSjqw&list=PLy_2fgXkPiZuMaG9Jmp8PAwimIumf19hp&index=5', 0),
(23, 'Web5', 'jhkunk', '5tipsc-1024x576.jpg', '', 'https://www.youtube.com/watch?v=Mu0YZdCSjqw&list=PLy_2fgXkPiZuMaG9Jmp8PAwimIumf19hp&index=5', 122),
(24, 'Web5', 'hello welcome to the web course for beginners ', 'Capture.PNG', '1-Chapter 8  - Memory Management.pdf', 'https://www.youtube.com/watch?v=Mu0YZdCSjqw&list=PLy_2fgXkPiZuMaG9Jmp8PAwimIumf19hp&index=5', 1344);

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
(31, 'nano', 'nano2@gmail.com', '344', 'instructor', ''),
(36, 'hooda1', 'hooda1222@gmail.com', '122', 'student', 'grass.jpg'),
(37, 'juja', 'nono@gmail.com', '456', 'student', 'grass.jpg'),
(43, 'nour', 'nourahmed@gmail.com', '123456', 'admin', 'grass.PNG'),
(44, 'rawan5', 'rawansweilem5@gmail.com', '111', 'admin', ''),
(46, 'rawan156', 'rawansweilem156@gmail.com', '111', 'student', 'Capture.PNG'),
(48, 'rawan22', 'rawansweilem22@gmail.com', '1111', 'admin', '');

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
(12, 12, 10, 'hi', '2021-01-04 06:13:37pm'),
(13, 10, 12, 'hello', '2021-01-04 06:14:00pm'),
(14, 12, 11, 'Hi ahmed', '2021-01-04 06:15:20pm'),
(15, 11, 12, 'how r u', '2021-01-04 06:15:39pm'),
(16, 40, 0, 'hellooo', '2022-01-16 10:51:58pm'),
(17, 31, 37, 'hii', '2022-01-16 10:58:25pm');

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
  MODIFY `CourseId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `logininfo`
--
ALTER TABLE `logininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
