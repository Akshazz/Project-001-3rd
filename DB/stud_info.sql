-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 09:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u476821515_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `mis_stud_account`
--

CREATE TABLE `stud_info` (
  `row` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Section_ID` int(11) NOT NULL,
  `Student_ID` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `Lastname` varchar(250) NOT NULL,
  `Firstname` varchar(250) NOT NULL,
  `Middlename` varchar(250) NOT NULL,
  `Course` varchar(250) NOT NULL,
  `Year_Level` int(11) NOT NULL,
  `Section` int(11) NOT NULL,
  `Semester` varchar(250) NOT NULL,
  `Major` varchar(250) NOT NULL,
  `Academic_Year` varchar(250) NOT NULL,
  `Student_Type` varchar(250) NOT NULL,
  `Status` varchar(250) NOT NULL,
  `Register_Date` date NOT NULL,
  `submitted_by` varchar(250) NOT NULL,
  `qr_text` varchar(250) NOT NULL,
  `Misc` int(11) NOT NULL,
  `other_fee` int(11) NOT NULL,
  `totalBalance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`row`, `No`, `Section_ID`, `Student_ID`, `email`, `username`, `pass`, `Lastname`, `Firstname`, `Middlename`, `Course`, `Year_Level`, `Section`, `Semester`, `Major`, `Academic_Year`, `Student_Type`, `Status`, `Register_Date`, `submitted_by`, `qr_text`, `Misc`, `other_fee`, `totalBalance`) VALUES
(1, 61, 29, 19012918, '19012918@bcp.edu.ph', 's19012918', '#Ni8080s', 'Niegos', 'Harold', 'Gico', 'BSIT', 4, 11001, '1st', 'IS', '2022-2023', 'New Student', 'Offline now', '2023-03-29', 'Chief Registrar', 'https://registrar.bcpsms.com/Record%20Officer/Section%20Management/COR.php?corid=2300020', 0, 0, 0),
(3, 62, 15, 2300002, '2300002@bcp.edu.ph', 's2300002', '#So8080s', 'Soriano', 'Eli', 'Natividad', 'BSIT', 1, 11001, '1st', '', '2022-2023', 'New Student', 'Active', '2023-03-30', 'Chief Registrar', 'https://registrar.bcpsms.com/Record%20Officer/Section%20Management/COR.php?corid=2300002', 0, 0, 0),
(4, 63, 29, 2300003, '2300003@bcp.edu.ph', 's2300003', '#Ib8080s', 'Ibis', 'Fredalyn ', 'Tuliao', 'BSTM', 1, 11001, '1st', 'Hospitality Management', '2022-2023', 'New Student', 'Active', '2023-03-30', 'Record Officer', 'https://registrar.bcpsms.com/Record%20Officer/Section%20Management/COR.php?corid=2300003', 0, 0, 0),
(5, 64, 30, 2300008, '2300008@bcp.edu.ph', 's2300008', '#Go8080s', 'Gomez', 'Selena', 'Bieber', 'BSED', 1, 11001, '1st', 'Elementary Education', '2022-2023', 'New Student', 'Offline now', '2023-03-30', 'Record Officer', 'https://registrar.bcpsms.com/Record%20Officer/Section%20Management/COR.php?corid=2300008', 0, 0, 0),
(6, 65, 15, 2300014, '2300014@bcp.edu.ph', 's2300014', '#Mo8080s', 'Montero', 'Dark', 'Inch', 'BSIT', 1, 11001, '1st', 'Information Technology', '2022-2023', 'New Student', 'Active', '2023-03-30', 'Record Officer', 'https://registrar.bcpsms.com/Record%20Officer/Section%20Management/COR.php?corid=2300014', 0, 0, 0),
(123132, 83, 15, 2300001, '2300001@bcp.edu.ph', 's2300001', '#Br8080s', 'Bradley', 'Timothy', 'Bolia', 'BSIT', 1, 11001, '1st', '', '2022-2023', 'New Student', 'Active', '2023-04-02', 'Chief Registrar', 'https://registrar.bcpsms.com/Record%20Officer/Section%20Management/COR.php?corid=2300001', 0, 0, 0),
(123134, 85, 32, 2300021, '2300021@bcp.edu.ph', 's2300021', '#Ba8080s', 'Barzaga', 'Kapitan', 'Nino', 'BSTM', 2, 21001, '1st', 'Hospitality Management', '2022-2023', 'New Student', 'Active', '2023-04-02', 'Record Officer', 'https://registrar.bcpsms.com/Record%20Officer/Section%20Management/COR.php?corid=2300021', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`row`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_info`
  MODIFY `row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
