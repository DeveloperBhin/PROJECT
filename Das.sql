-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 12:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selectiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `resulttbl1`
--

CREATE TABLE `resulttbl1` (
  `uid` int(11) NOT NULL,
  `CNO` varchar(15) NOT NULL,
  `AGGT` int(2) NOT NULL,
  `DIVISION` varchar(3) NOT NULL,
  `CIVICS` varchar(10) NOT NULL,
  `HISTORY` varchar(10) NOT NULL,
  `GEOGRAPHY` varchar(10) NOT NULL,
  `KISWAHILI` varchar(10) NOT NULL,
  `ENGLISH` varchar(10) NOT NULL,
  `PHYSICS` varchar(10) NOT NULL,
  `CHEMISTRY` varchar(10) NOT NULL,
  `BIOLOGY` varchar(10) NOT NULL,
  `MATHEMATICS` varchar(10) NOT NULL,
  `user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resulttbl1`
--

INSERT INTO `resulttbl1` (`uid`, `CNO`, `AGGT`, `DIVISION`, `CIVICS`, `HISTORY`, `GEOGRAPHY`, `KISWAHILI`, `ENGLISH`, `PHYSICS`, `CHEMISTRY`, `BIOLOGY`, `MATHEMATICS`, `user`) VALUES
(90, 'S0306/0001', 23, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0001'),
(91, 'S0306/0002', 24, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0002'),
(92, 'S0306/0003', 25, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0003'),
(93, 'S0306/0004', 26, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0004'),
(94, 'S0306/0005', 27, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0005'),
(95, 'S0306/0006', 32, 'IV', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'F ', 'F ', 'F ', 'S0306/0006'),
(96, 'S0306/0007', 36, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0007'),
(97, 'S0306/0008', 37, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0008'),
(98, 'S0306/0009', 38, 'III', 'C ', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0009'),
(99, 'S0306/0010', 8, 'I', 'A ', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'A', 'S0306/0010'),
(100, 'S0306/0011', 40, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0011'),
(101, 'S0306/0012', 26, 'IV', 'D', 'D', 'F', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0012'),
(102, 'S0306/0013', 43, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0013'),
(103, 'S0306/0014', 44, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0014'),
(104, 'S0306/0015', 45, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0015'),
(105, 'S0306/0016', 46, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0016'),
(106, 'S0306/0017', 17, 'I', 'B', 'B', 'C', 'C', 'B', 'C', 'B', 'C', 'C', 'S0306/0017'),
(107, 'S0306/0018', 39, 'III', 'C', 'C ', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0018'),
(108, 'S0306/0019', 18, 'I', 'B', 'B', 'C', 'C', 'B', 'C', 'B', 'C', 'C', 'S0306/0019'),
(109, 'S0306/0020', 42, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0020'),
(110, 'S0306/0021', 21, 'II', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'D', 'S0306/0021'),
(111, 'S0306/0022', 41, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0022'),
(112, 'S0306/0023', 35, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0023'),
(113, 'S0306/0024', 19, 'II', 'C', 'B', 'C', 'B', 'C', 'D', 'C', 'C', 'C', 'S0306/0024'),
(114, 'S0306/0025', 18, 'I', 'B', 'B', 'C', 'C', 'B', 'C', 'B', 'C', 'C', 'S0306/0025'),
(115, 'S0306/0001', 23, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0001'),
(116, 'S0306/0002', 24, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0002'),
(117, 'S0306/0003', 25, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0003'),
(118, 'S0306/0004', 26, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0004'),
(119, 'S0306/0005', 27, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0005'),
(120, 'S0306/0006', 32, 'IV', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'F ', 'F ', 'F ', 'S0306/0006'),
(121, 'S0306/0007', 36, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0007'),
(122, 'S0306/0008', 37, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0008'),
(123, 'S0306/0009', 38, 'III', 'C ', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0009'),
(124, 'S0306/0010', 8, 'I', 'A ', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'A', 'S0306/0010'),
(125, 'S0306/0011', 40, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0011'),
(126, 'S0306/0012', 26, 'IV', 'D', 'D', 'F', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0012'),
(127, 'S0306/0013', 43, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0013'),
(128, 'S0306/0014', 44, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0014'),
(129, 'S0306/0015', 45, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0015'),
(130, 'S0306/0016', 46, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0016'),
(131, 'S0306/0017', 17, 'I', 'B', 'B', 'C', 'C', 'B', 'C', 'B', 'C', 'C', 'S0306/0017'),
(132, 'S0306/0018', 39, 'III', 'C', 'C ', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0018'),
(133, 'S0306/0019', 18, 'I', 'B', 'B', 'C', 'C', 'B', 'C', 'B', 'C', 'C', 'S0306/0019'),
(134, 'S0306/0020', 42, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0020'),
(135, 'S0306/0021', 21, 'II', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'D', 'S0306/0021'),
(136, 'S0306/0022', 41, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0022'),
(137, 'S0306/0023', 35, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0023'),
(138, 'S0306/0024', 19, 'II', 'C', 'B', 'C', 'B', 'C', 'D', 'C', 'C', 'C', 'S0306/0024'),
(139, 'S0306/0025', 18, 'I', 'B', 'B', 'C', 'C', 'B', 'C', 'B', 'C', 'C', 'S0306/0025'),
(140, 'S0306/0001', 23, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0001'),
(141, 'S0306/0002', 24, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0002'),
(142, 'S0306/0003', 25, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0003'),
(143, 'S0306/0004', 26, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0004'),
(144, 'S0306/0005', 27, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0005'),
(145, 'S0306/0006', 32, 'IV', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'F ', 'F ', 'F ', 'S0306/0006'),
(146, 'S0306/0007', 36, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0007'),
(147, 'S0306/0008', 37, 'III', 'C ', 'C ', 'C ', 'C ', 'C ', 'F ', 'D', 'D', 'D', 'S0306/0008'),
(148, 'S0306/0009', 38, 'III', 'C ', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0009'),
(149, 'S0306/0010', 8, 'I', 'A ', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'A', 'S0306/0010'),
(150, 'S0306/0011', 40, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0011'),
(151, 'S0306/0012', 26, 'IV', 'D', 'D', 'F', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0012'),
(152, 'S0306/0013', 43, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0013'),
(153, 'S0306/0014', 44, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0014'),
(154, 'S0306/0015', 45, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0015'),
(155, 'S0306/0016', 46, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0016'),
(156, 'S0306/0017', 17, 'I', 'B', 'B', 'C', 'C', 'B', 'C', 'B', 'C', 'C', 'S0306/0017'),
(157, 'S0306/0018', 39, 'III', 'C', 'C ', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0018'),
(158, 'S0306/0019', 18, 'I', 'B', 'B', 'C', 'C', 'B', 'C', 'B', 'C', 'C', 'S0306/0019'),
(159, 'S0306/0020', 42, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0020'),
(160, 'S0306/0021', 21, 'II', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'D', 'S0306/0021'),
(161, 'S0306/0022', 41, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0022'),
(162, 'S0306/0023', 35, 'III', 'C', 'C', 'C', 'C', 'C', 'F ', 'D', 'D', 'D', 'S0306/0023'),
(163, 'S0306/0024', 19, 'II', 'C', 'B', 'C', 'B', 'C', 'D', 'C', 'C', 'C', 'S0306/0024'),
(164, 'S0306/0025', 18, 'I', 'B', 'B', 'C', 'C', 'B', 'C', 'B', 'C', 'C', 'S0306/0025');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfotbl1`
--

CREATE TABLE `studentinfotbl1` (
  `userid` varchar(15) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subjects` varchar(50) NOT NULL,
  `school1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentinfotbl1`
--

INSERT INTO `studentinfotbl1` (`userid`, `fname`, `mname`, `lname`, `username`, `email`, `date`, `subjects`, `school1`) VALUES
('S0306/0001', 'norbeth', 'vitus', 'mwalo', '', 'norbhin@gmail.com', '2024-05-31 21:00:00', 'CIVICS,HISTORY,GEOGRAPHY,KISWAHILI', 'MZUMBE SEC'),
('S0306/0002', 'norb', 'vitus', 'mwalo', '', 'wilhelminafita@gmail.com', '2024-05-30 21:00:00', 'CIVICS,HISTORY', 'MZUMBE SEC'),
('S0306/0003', 'norb', 'vit', 'mwalo', '', 'as@dfr', '2024-05-28 21:00:00', 'CIVICS,HISTORY,GEOGRAPHY,KISWAHILI', 'KILAKALA GIRLS'),
('S0306/0004', 'norbeth', 'vitus', 'mwalo', '', 'ray@gmail.comew', '2024-04-28 21:00:00', 'CIVICS,HISTORY,GEOGRAPHY', 'KILAKALA GIRLS'),
('S0306/0005', 'norbeth', 'vitus', 'mwalongo', '', 'norbhin@gmail.comsa', '2024-04-30 21:00:00', 'CIVICS,HISTORY,GEOGRAPHY', 'KILAKALA GIRLS'),
('S0306/0007', 'norb', 'vitus', 'mwalo', '', 'ray@gmail.com', '2024-06-04 21:00:00', 'CIVICS,HISTORY,GEOGRAPHY,KISWAHILI', 'MZUMBE SEC'),
('S0306/0025', 'norbeth', 'vitus', 'mwalongo', '', 'norbhin@gmail.com', '2024-05-02 21:00:00', 'CIVICS,HISTORY,GEOGRAPHY', 'MZUMBE SEC');

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `userid` varchar(15) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`userid`, `fname`, `mname`, `lname`, `password`, `role`) VALUES
('admin', 'norbeth', 'vitus', 'mwalongo', '0192023a7bbd73250516f069df18b500', 'teacher'),
('S0306/0025', 'norbeth', 'vitus', 'mwalongo', 'ed0a75eeb69b34ddc14beed2678bee12', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resulttbl1`
--
ALTER TABLE `resulttbl1`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `result1_user_fk` (`user`);

--
-- Indexes for table `studentinfotbl1`
--
ALTER TABLE `studentinfotbl1`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resulttbl1`
--
ALTER TABLE `resulttbl1`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
