-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 07:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `problemcomplaintsystem`
--
CREATE DATABASE IF NOT EXISTS `problemcomplaintsystem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `problemcomplaintsystem`;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Person_ID` int(10) NOT NULL,
  `Person_fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Person_lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Person_phonenumber` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Person_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Person_username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Person_password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Person_status` int(1) NOT NULL COMMENT '1: member, 2: employee, 3: admin',
  `Person_rights` tinyint(1) DEFAULT NULL COMMENT '1: usable, 2: un usable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Person_ID`, `Person_fname`, `Person_lname`, `Person_phonenumber`, `Person_email`, `Person_username`, `Person_password`, `Person_status`, `Person_rights`) VALUES
(11, 'Punyarit', 'Klaphachon', '0610867479', 'punyarit07@gmail.com', 'rus', 'rus', 3, 1),
(12, 'Albus', 'Dumbledore', 'phoenix', 'albus@hogwards.com', 'albus', 'albus', 2, 1),
(13, 'Ron', 'Weasleys', 'Owls', 'ron@hogwards.com', 'ron', 'ron', 1, 1),
(14, 'aaa', 'aaa', 'aaa', 'a@a.c', 'aaa', 'aaa', 1, 1),
(15, 'sur', 'sur', 'sur', 's@u.r', 'sur', 'sur', 3, 1),
(18, 'usa', 'ysa', 'uysa', 'usa@s.s', 'usa', 'usa', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `Problem_ID` int(10) NOT NULL,
  `Problem_date` date NOT NULL,
  `Problem_time` time NOT NULL,
  `Problem_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Problem_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Problem_picture` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Create_Person_ID` int(10) DEFAULT NULL COMMENT 'id of create person',
  `Employee_ID` int(10) DEFAULT NULL COMMENT 'id of employee that manage this complaint',
  `Admin_ID` int(10) DEFAULT NULL COMMENT 'id of admin that manage this complaint',
  `Operational_ID` int(10) DEFAULT NULL COMMENT 'link between problem and operational',
  `Problem_status` int(1) NOT NULL COMMENT '1: complaint, 2: operational'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`Problem_ID`, `Problem_date`, `Problem_time`, `Problem_title`, `Problem_detail`, `Problem_picture`, `Create_Person_ID`, `Employee_ID`, `Admin_ID`, `Operational_ID`, `Problem_status`) VALUES
(29, '2022-10-30', '14:33:38', 'ไฟไม่ติด', 'ไฟไม่ติด', 'complaintPic/20221030_142230.jpg', 11, NULL, 11, 33, 1),
(30, '2022-10-30', '14:34:01', 'น้ำไม่ไหล', 'น้ำไม่ไหล', 'complaintPic/20221030_142309.jpg', 11, NULL, 11, 34, 1),
(31, '2022-10-30', '14:34:16', 'นาฬิกาไม่เดิน', 'นาฬิกาไม่เดิน', 'complaintPic/20221030_142404.jpg', 11, NULL, 11, 35, 1),
(32, '2022-10-30', '14:34:27', 'พัดลมไม่ติด', 'พัดลมไม่ติด', 'complaintPic/20221030_142332.jpg', 11, NULL, 11, 36, 1),
(33, '2022-10-30', '14:34:41', 'เปิดไฟ', 'เปิดไฟ', 'operationalPic/20221030_142242.jpg', 11, NULL, NULL, NULL, 2),
(34, '2022-10-30', '14:34:58', 'เปิดก๊อกน้ำ', 'เปิดก๊อกน้ำ', 'operationalPic/20221030_142315.jpg', 11, NULL, NULL, NULL, 2),
(35, '2022-10-30', '14:35:21', 'ใส่ถ่าน', 'ใส่ถ่าน', 'operationalPic/20221030_142418.jpg', 11, NULL, NULL, NULL, 2),
(36, '2022-10-30', '14:35:42', 'กดเบอร์', 'กดเบอร์', 'operationalPic/20221030_142342.jpg', 11, NULL, NULL, NULL, 2),
(37, '2022-10-30', '14:37:46', 'ต้นไม้ตาย', 'ต้นไม้ตาย', 'complaintPic/20221030_143605.jpg', 11, NULL, 11, 38, 1),
(38, '2022-10-30', '14:38:06', 'ใช้การ์ดชุบชีวิต', 'ใช้การ์ดชุบชีวิต', 'operationalPic/o2kqfdcoy1uPX1UHbKj-o.jpg', 11, NULL, NULL, NULL, 2),
(39, '2022-10-30', '21:32:56', 'เปิดประตูไม่ได้', 'เปิดประตูไม่ได้', 'complaintPic/20221030_142502.jpg', 13, 12, NULL, 40, 1),
(40, '2022-10-30', '21:33:53', 'เอาตัวคล้องประตูออก', 'เอาตัวคล้องประตูออก', 'operationalPic/20221030_142512.jpg', 12, NULL, NULL, NULL, 2),
(42, '2022-10-31', '10:50:08', 'เปิดห้อง 1205 ไม่ได้', 'ประตูพัง ไม่สามารถเปิดได้', '', 13, 12, NULL, 43, 1),
(43, '2022-10-31', '10:51:13', 'พังประตูเข้าไป', 'พังประตูเข้าไป', '', 12, NULL, NULL, NULL, 2),
(44, '2022-10-31', '11:00:21', 'No operational', 'No operational', '', 11, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Person_ID`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`Problem_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `Person_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `Problem_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
