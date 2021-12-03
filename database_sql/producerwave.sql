-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 02:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `producerwave`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `photo` text NOT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `name`, `description`, `price`, `photo`, `date_added`) VALUES
(1, 'FL Studio 20 - Music Production + Mixing Music in FL Studio', 'Start producing Your Own Music in FL Studio 20.\nThis course is all about FL Studio 20; a powerful piece of Music Production software. It is a Digital Audio Workstation for Windows and Mac OS X.\n\nFL Studio is used by bedroom producers and in professional studios worldwide. Learning how to use this DAW correctly will dramatically improve the quality of your music and the speed you create it!', 12, 'file/fl_course.jpg', '2020-08-29'),
(2, 'Music Theory Comprehensive - Complete Package', 'This is a class designed for the average person who is ready to take music theory (or music interest) and turn it into a usable skill. Whether you are an active musician or an aspiring musician, this class is perfect for you.', 11, 'file/music_theory.jpg', '2020-12-04'),
(3, 'Music + Audio Production in Logic Pro X - The Complete Guide', 'By the end of this course, you will be able to use every feature of Logic Pro X with confidence. This will allow you to quickly and easily write, edit, mix and produce great music that sounds professional, polished and impressive.', 9, 'file/logic_production.jpg', '2021-04-12'),
(4, 'Music Theory #1- Circle of 5ths Master Class 12 Keys', 'In this course, I will even show you how to make a DIY Circle of 5ths so that you can use this musical tool to practice all your piano techniques. Learn all my Magic Circle Tips (from my 35 years of music journey)  so that you can make full use of the Circle regarding music harmony in the next 5 HOURS. ', 17, 'file/circle_of5th.jpg', '2021-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `age` int(10) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `address` text NOT NULL,
  `date_birth` date DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `age`, `gender`, `address`, `date_birth`, `phone`, `photo`, `level`) VALUES
(3, 'Indra', 'indra@gmail.com', '3943a11ad9738d42aba3b107dd742af4', 17, 'Male', 'Malang', '2004-09-29', '081359528707', 'file/profile/indra.jpg', 'user'),
(4, 'Faiz', 'faiz@gmail.com', '395c765be9492787f7a2344498683bb5', 16, 'Male', 'Blitar', '2005-09-14', '081357547462', 'file/profile/faiz.jpg', 'user'),
(5, 'Rayhan', 'rayhan@gmail.com', '6734b83a1007fbbb1dae3a5fd0691af2', 17, 'Male', 'Probolinggo', '2005-05-22', '087761764118', 'file/profile/rayhan.jpg', 'user'),
(6, 'Zaim Raja', 'zaim@gmail.com', '537e9e43e1656ac23c51ad05fa43efd9', 0, 'Male', 'Bali', NULL, '', '', 'user'),
(7, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, 'Male', 'Rumah', NULL, '', '', 'admin'),
(23, 'Darrel', 'darrel@gmail.com', '2416ca5d60ee2504589cfa31955a0b20', 16, 'Female', 'Malang', '2004-06-16', '081347891294', 'file/profile/IMG_5244.JPG', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
