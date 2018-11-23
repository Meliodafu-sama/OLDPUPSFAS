-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 01:51 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `wedo` mediumtext NOT NULL,
  `vision` mediumtext NOT NULL,
  `mission` mediumtext NOT NULL,
  `address` varchar(300) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`wedo`, `vision`, `mission`, `address`, `telephone`, `email`) VALUES
('The Scholarship and Financial Assistance Service is one of the administrative units under the Office of the Vice President for Student Affairs and Services (OVPSAS). The SFAS Citizenâ€™s Charter provides our clients with information on the different services, requirements, procedures, fees and timelines with the objectives of improving service delivery and ensuring client satisfaction.\r\n\r\nSFAS is committed to provide access to educational opportunities in terms of scholarship and financial assistance to students.', 'The Scholarship and Financial Assistance Services (SFAS) envisions itself as instrumental in improving the quality of life of PUP students who though lacking the needed resources, merit pursuing academic careers.', 'The Scholarship and Financial Assistance Services (SFAS) commits itself to coordinate, systematize and professionalize the administration of the Universityâ€™s scholarship and financial assistance programs for the economically disadvantaged but talented and deserving students in the main campus and its branches and extensions.\r\n\r\nTo accomplish this mission, the SFAS shall recommend guidelines and policies pertaining to scholarships and financial assistance in order to:\r\n\r\nDemocratize access to a meaningful education in the form of grants-in-aid that benefit PUP students;\r\nProvide opportunities for part-time work for students to meet their everyday expenses;\r\nExtend scholarship programs to students who meet the specific requirements;\r\nProvide guidance to academic scholars through the Kapatiran ng Talino at Galing (KATAGA), an association of PUP scholars.', 'Room W-119 G/F West Wing Main Building PUP A. Mabini Campus, Anonas St., Sta. Mesa Manila, Philippines 1016', '(63 2) 716-8980, (63 2) 335-1 PUP (335-1787) or 335-1777 local 309 or 339', 'scholarship@pup.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_table`
--

CREATE TABLE `announcement_table` (
  `announcement_id` int(11) NOT NULL,
  `announcement_title` varchar(100) NOT NULL,
  `announcement_author` varchar(50) NOT NULL,
  `announcement_article` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement_table`
--

INSERT INTO `announcement_table` (`announcement_id`, `announcement_title`, `announcement_author`, `announcement_article`, `date`) VALUES
(53, 'Result', 'Admin SFAS', 'Result for scholarship', '2018-08-24'),
(54, 'Announcements', 'Admin SFAS', 'Details', '2018-08-24'),
(55, 'Result: Scholarships', 'Admin SFAS', 'Detail', '2018-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `banners_table`
--

CREATE TABLE `banners_table` (
  `banner_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `banner_title` varchar(50) NOT NULL,
  `banner_desc` varchar(100) NOT NULL DEFAULT 'no description'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners_table`
--

INSERT INTO `banners_table` (`banner_id`, `image`, `banner_title`, `banner_desc`) VALUES
(10, 'pup1.png', 'q', 'q'),
(13, 'sc1.jpg', 'PUP Banner for Humanities', 'Banner for PUP celebrating Humanities'),
(14, 'sc2.jpg', 'PUP Banner', ''),
(15, 'sc3.png', 'okok', 'okokokokoko');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(10) NOT NULL,
  `emppic` varchar(100) NOT NULL,
  `empname` varchar(50) NOT NULL,
  `empjobtitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scholarshiptype_table`
--

CREATE TABLE `scholarshiptype_table` (
  `scholarship_type` int(11) NOT NULL,
  `scholarshiptype_desc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_table`
--

CREATE TABLE `scholarship_table` (
  `scholarship_id` int(11) NOT NULL,
  `scholarship_type` varchar(50) NOT NULL,
  `scholarship_name` varchar(50) NOT NULL,
  `sponsor_name` varchar(50) NOT NULL,
  `scholarship_logo` varchar(200) NOT NULL,
  `scholarship_mainreq` varchar(50) NOT NULL,
  `scholarship_courses` varchar(50) NOT NULL,
  `scholarship_otherreq` varchar(150) NOT NULL,
  `scholarship_applicationreq` varchar(150) NOT NULL,
  `scholarship_deadline` date NOT NULL,
  `scholarship_note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship_table`
--

INSERT INTO `scholarship_table` (`scholarship_id`, `scholarship_type`, `scholarship_name`, `sponsor_name`, `scholarship_logo`, `scholarship_mainreq`, `scholarship_courses`, `scholarship_otherreq`, `scholarship_applicationreq`, `scholarship_deadline`, `scholarship_note`) VALUES
(77, 'Private', 'Asian Development Bank Spouses Association Scholar', 'Asian Development Bank Spouses Association', 'pri4.png', 'Open to all', 'BSIT,BSME;BSECE;BSIE', 'Minimum general weighted average of 2.50', 'Personal Data Sheet', '2018-09-20', 'Final interview on June 28,2018'),
(78, 'Private', 'SingkoLar ng Bayan', 'Metrobank Foundation', 'pri5.png', 'total quota of grade 2.00', 'abcd', '', '', '2018-06-30', 'doremifasollatido');

-- --------------------------------------------------------

--
-- Table structure for table `sponsortype_table`
--

CREATE TABLE `sponsortype_table` (
  `sponsorType` char(1) NOT NULL,
  `sponsorTypeDesc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsortype_table`
--

INSERT INTO `sponsortype_table` (`sponsorType`, `sponsorTypeDesc`) VALUES
('G', 'Government'),
('P', 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_t`
--

CREATE TABLE `sponsor_t` (
  `sponsorid` int(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sponsortype` char(1) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  `province` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `companyname` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `company` varchar(75) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `referenceperson` varchar(50) NOT NULL,
  `refcontact` varchar(20) NOT NULL,
  `relationship` varchar(30) NOT NULL,
  `letter` blob NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor_t`
--

INSERT INTO `sponsor_t` (`sponsorid`, `status`, `sponsortype`, `fname`, `mname`, `lname`, `address`, `province`, `city`, `zip`, `country`, `companyname`, `email`, `phone`, `telephone`, `company`, `occupation`, `referenceperson`, `refcontact`, `relationship`, `letter`, `date`) VALUES
(49, 1, 'C', '', '', '', '2nd Floor Technical Services Building,  Meralco Center, Ortigas Avenue', '', 'Pasig', '1003', 'PH', '', 'oh.procurement@meralco.com.ph', '635-5660', '632-8452', 'Meralco Corporation', '', '', '', '', 0x4172726179, '2018-08-14'),
(50, 1, 'C', '', '', '', 'ABS-CBN Corporation Sgt. E.A. Esguerra Avenue', '', 'Quezon City', '1103', 'Philippines', '', 'IR@abs-cbn.com', '09213358695', '(+632) 415', 'ABS-CBN Foundation', '', '', '', '', 0x4172726179, '2018-08-14'),
(51, 1, 'C', '', '', '', '1234 Lumera St', '', 'Makati City', '008', 'Philippines', '', 'metrobank@gmail.com', '09681639836', '777-9173', 'Metrobank Inc.', '', '', '', '', 0x4172726179, '2018-08-15'),
(52, 1, 'I', 'Manny', 'Torres', 'Villar', '12 Wakwak St', '', 'Mandaluyong City', '6018', 'Philippines', 'Villar Foundation', 'josephsy@gmail.com', '09123456789', '361-7581', '', 'Executive Director', 'Cynthia Villar', '09876543210', 'Wife', 0x4172726179, '2018-08-15'),
(54, 1, 'C', '', '', '', 'sdsdsdsd', 'sdsd', 'sdsd', '232', 'Azerbaijan', '', 'sd', 'sdsd', 'sdsd', 'Department of Science and Technology', '', '', '', '', 0x4172726179, '2018-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(11) NOT NULL,
  `title` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`) VALUES
(2, 'Mr'),
(5, 'Mrs.'),
(10, 'Dr.'),
(11, 'Madam.'),
(15, 'Atty.');

-- --------------------------------------------------------

--
-- Table structure for table `typeofscholarship_table`
--

CREATE TABLE `typeofscholarship_table` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typeofscholarship_table`
--

INSERT INTO `typeofscholarship_table` (`id`, `image`, `title`, `description`) VALUES
(9, 'pup1.png', 'Resident', 'Provide guidance to academic scholar (President Listers and Dean Listers)'),
(10, 'pup2.png', 'Government', 'Scholarship which are provided by the local and national government of the Philippines'),
(11, 'pup3.png', 'Private', 'Private institutions and companies who are diligently provides resources to the students to quality academic race');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_table`
--
ALTER TABLE `announcement_table`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `banners_table`
--
ALTER TABLE `banners_table`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `scholarshiptype_table`
--
ALTER TABLE `scholarshiptype_table`
  ADD PRIMARY KEY (`scholarship_type`);

--
-- Indexes for table `scholarship_table`
--
ALTER TABLE `scholarship_table`
  ADD PRIMARY KEY (`scholarship_id`);

--
-- Indexes for table `sponsortype_table`
--
ALTER TABLE `sponsortype_table`
  ADD PRIMARY KEY (`sponsorType`);

--
-- Indexes for table `sponsor_t`
--
ALTER TABLE `sponsor_t`
  ADD PRIMARY KEY (`sponsorid`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typeofscholarship_table`
--
ALTER TABLE `typeofscholarship_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement_table`
--
ALTER TABLE `announcement_table`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `banners_table`
--
ALTER TABLE `banners_table`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `scholarshiptype_table`
--
ALTER TABLE `scholarshiptype_table`
  MODIFY `scholarship_type` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarship_table`
--
ALTER TABLE `scholarship_table`
  MODIFY `scholarship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `sponsor_t`
--
ALTER TABLE `sponsor_t`
  MODIFY `sponsorid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `typeofscholarship_table`
--
ALTER TABLE `typeofscholarship_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
