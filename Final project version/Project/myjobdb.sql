-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 11:08 PM
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
-- Database: `myjobdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `companyprofile`
--

CREATE TABLE `companyprofile` (
  `compID` int(11) NOT NULL,
  `comp_Username` varchar(255) NOT NULL,
  `comp_Name` varchar(255) NOT NULL,
  `comp_IMG` varchar(255) NOT NULL,
  `comp_Address` varchar(255) NOT NULL,
  `comp_Email` varchar(255) NOT NULL,
  `comp_TelNum` varchar(255) NOT NULL,
  `password_` varchar(255) NOT NULL,
  `comp_Descrip` varchar(255) NOT NULL,
  `Industry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companyprofile`
--

INSERT INTO `companyprofile` (`compID`, `comp_Username`, `comp_Name`, `comp_IMG`, `comp_Address`, `comp_Email`, `comp_TelNum`, `password_`, `comp_Descrip`, `Industry`) VALUES
(23, 'absaBank', 'Absa Bank', 'ABSA_Group_Limited_Logo.svg.png', '15 Alice Ln \r\nSandhurst \r\nJohannesburg \r\n2000', 'absa@email.com', '0860 500 703', 'absabank', 'South african bank', 'Banking'),
(24, 'capitecBank', 'Capitec Bank', 'Capitec-logo.jpg', '80 HIGH STREET\r\nMAYFAIR WEST \r\nMayfair West \r\n2092', 'capitec@email.com', '0860102043', 'capitec', 'South african bank', 'Banking');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `jobSeeker_ID` int(11) NOT NULL,
  `jobSeeker_Username` varchar(255) NOT NULL,
  `jobSeeker_Name` varchar(255) NOT NULL,
  `jobSeeker_Surname` varchar(255) NOT NULL,
  `jobSeeker_Email` varchar(255) NOT NULL,
  `password_` varchar(255) NOT NULL,
  `jobSeeker_Birthdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`jobSeeker_ID`, `jobSeeker_Username`, `jobSeeker_Name`, `jobSeeker_Surname`, `jobSeeker_Email`, `password_`, `jobSeeker_Birthdate`) VALUES
(5, 'le0mnisi', 'Khulekani', 'Mnisi', 'email@email.com', 'le0mnisi', '2003-12-12'),
(8, 'seses', 'Khulekani', 'Mnisi', 'email@email.com', 's', '2023-05-29'),
(9, 'sss', 'Khulekani', 'Mnisi', 'kkeee@lkalsd.com', 'sss', '2023-06-13'),
(10, 'le0mnisisssssssssss', 'Khulekani', 'Mnisi', 'lsssssssseomnisitheproducer@gmail.com', 's', '2023-05-30'),
(11, 'yuuyf', 'Khulekani', 'Mnisi', 'kyyyyk@lkalsd.com', 'sss', '2023-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `postedjobs`
--

CREATE TABLE `postedjobs` (
  `JobID` int(11) NOT NULL,
  `comp_Username` varchar(255) NOT NULL,
  `JobName` varchar(255) NOT NULL,
  `JobSector` varchar(255) NOT NULL,
  `JobLocation` varchar(255) NOT NULL,
  `ContractType` varchar(255) NOT NULL,
  `WorkingHours` int(11) NOT NULL,
  `Salary` int(11) NOT NULL,
  `S_TimePeriod` varchar(255) NOT NULL,
  `J_Description` varchar(255) NOT NULL,
  `skillsRequired` varchar(255) NOT NULL,
  `EdLevels` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postedjobs`
--

INSERT INTO `postedjobs` (`JobID`, `comp_Username`, `JobName`, `JobSector`, `JobLocation`, `ContractType`, `WorkingHours`, `Salary`, `S_TimePeriod`, `J_Description`, `skillsRequired`, `EdLevels`) VALUES
(43, 'absaBank', 'Team Assistant', 'Banking', 'Sandton, Gauteng', 'Temporary', 8, 15000, 'Per Hour', 'Assists team fulfil daily tasks', 'No prior skills required', 'Matric'),
(44, 'capitecBank', 'Branch Manager', 'Banking', 'Midrand, Gauteng', 'Permanent', 9, 70000, 'Per Hour', 'Manages Capitec Bank branch in Midrand', 'People skills\r\nManagment skills\r\nComputer skills\r\nUnderstands banking industry', 'Matric\r\nDiploma in managment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyprofile`
--
ALTER TABLE `companyprofile`
  ADD PRIMARY KEY (`compID`),
  ADD UNIQUE KEY `comp_Username` (`comp_Username`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`jobSeeker_ID`),
  ADD UNIQUE KEY `jobSeeker_Username` (`jobSeeker_Username`);

--
-- Indexes for table `postedjobs`
--
ALTER TABLE `postedjobs`
  ADD PRIMARY KEY (`JobID`),
  ADD KEY `Test` (`comp_Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companyprofile`
--
ALTER TABLE `companyprofile`
  MODIFY `compID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `jobSeeker_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `postedjobs`
--
ALTER TABLE `postedjobs`
  MODIFY `JobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postedjobs`
--
ALTER TABLE `postedjobs`
  ADD CONSTRAINT `Test` FOREIGN KEY (`comp_Username`) REFERENCES `companyprofile` (`comp_Username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
