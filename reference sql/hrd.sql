-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 08:40 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `attended`
--

CREATE TABLE `attended` (
  `crs_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `desg` varchar(20) NOT NULL,
  `pno` int(10) NOT NULL,
  `sec_code` int(5) NOT NULL,
  `course_category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attended`
--

INSERT INTO `attended` (`crs_id`, `id`, `name`, `desg`, `pno`, `sec_code`, `course_category`) VALUES
(1, 3, 'ASDFGH', 'XZC', 234156, 101, 'chemical'),
(1, 3, 'ASDFGH', 'XZC', 234156, 101, 'chemical'),
(1, 3, 'ASDFGH', 'XZC', 234156, 101, 'chemical'),
(1, 3, 'ASDFGH', 'XZC', 234156, 101, 'chemical'),
(1, 3, 'ASDFGH', 'XZC', 234156, 101, 'chemical'),
(4, 1, 'shubham', 'xyz', 123456, 101, 'marketing'),
(4, 123, 'QWERTY', 'asd', 124123, 101, 'marketing'),
(4, 3, 'ASDFGH', 'XZC', 234156, 101, 'marketing'),
(4, 123, 'QWERTY', 'asd', 124123, 101, 'marketing'),
(4, 1, 'shubham', 'xyz', 123456, 101, 'marketing'),
(4, 123, 'QWERTY', 'asd', 124123, 101, 'marketing'),
(1, 1, 'shubham', 'xyz', 123456, 101, 'chemical');

-- --------------------------------------------------------

--
-- Table structure for table `autopresent_crsid`
--

CREATE TABLE `autopresent_crsid` (
  `crs_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conducted_by`
--

CREATE TABLE `conducted_by` (
  `venue_id` int(10) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `authority` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conducted_by`
--

INSERT INTO `conducted_by` (`venue_id`, `venue`, `city`, `authority`) VALUES
(1, 'ofkhamaria', 'jabalpur', 'ofk');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_category`) VALUES
('administration'),
(''),
('management'),
('management'),
('management');

-- --------------------------------------------------------

--
-- Table structure for table `course category`
--

CREATE TABLE `course category` (
  `course_category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `desg` varchar(20) NOT NULL,
  `grp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`desg`, `grp`) VALUES
('administration', 'c'),
('chemical', 'b'),
('', ''),
('', ''),
('security', 'b'),
('management', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(5) NOT NULL,
  `pno` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `desg` varchar(10) NOT NULL,
  `sec_code` int(11) NOT NULL,
  `dob` date NOT NULL,
  `crs_id` int(4) DEFAULT NULL,
  `dt_apt_org` date NOT NULL,
  `dt_post` date NOT NULL,
  `remark` varchar(20) NOT NULL,
  `extra_nomination` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `pno`, `name`, `desg`, `sec_code`, `dob`, `crs_id`, `dt_apt_org`, `dt_post`, `remark`, `extra_nomination`) VALUES
(1, 123456, 'shubham', 'xyz', 101, '2017-05-01', 1, '2018-03-04', '2018-05-02', '', NULL),
(2, 123211, 'rahul', 'xyz', 102, '2015-06-07', 8, '2018-05-06', '2018-05-09', 'join', 0),
(3, 234156, 'ASDFGH', 'XZC', 101, '2017-06-12', 4, '2018-05-07', '2018-05-14', '', NULL),
(4, 124334, 'ZXCV', 'ASf', 102, '2017-11-06', 8, '2018-05-01', '2018-05-09', '', NULL),
(123, 124123, 'QWERTY', 'asd', 101, '2017-11-13', 4, '2018-05-06', '2018-05-08', '', NULL),
(213, 123141, 'sahjan', 'ashd', 102, '2017-06-04', 8, '2018-02-04', '2018-05-08', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emp1`
--

CREATE TABLE `emp1` (
  `crs_id` int(4) NOT NULL,
  `id` int(5) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp1`
--

INSERT INTO `emp1` (`crs_id`, `id`, `year`) VALUES
(101, 213, 2017),
(101, 213, 2017),
(123, 213, 2017),
(8, 2, 2017),
(8, 4, 2017),
(8, 213, 2017),
(8, 1, 2017),
(7, 1, 2017),
(6, 1, 2017),
(6, 1, 2017),
(2, 1, 2017),
(1, 1, 2017),
(4, 1, 2017),
(1, 1, 2017),
(1, 123, 2017),
(2, 1, 2017),
(4, 1, 2017),
(4, 1, 2017),
(4, 123, 2017),
(4, 1, 2017),
(4, 3, 2017),
(1, 1, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `section_detail`
--

CREATE TABLE `section_detail` (
  `sec_code` int(11) NOT NULL,
  `sec_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_detail`
--

INSERT INTO `section_detail` (`sec_code`, `sec_name`) VALUES
(101, 'HRD'),
(102, 'ITC');

-- --------------------------------------------------------

--
-- Table structure for table `switchboard items`
--

CREATE TABLE `switchboard items` (
  `switchboard_id` int(2) NOT NULL,
  `item_no` int(2) NOT NULL,
  `itemtext` varchar(30) NOT NULL,
  `command` int(2) NOT NULL,
  `argument` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trg_calender`
--

CREATE TABLE `trg_calender` (
  `crs_id` int(4) NOT NULL,
  `crs_name` varchar(50) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `emp_level` varchar(30) NOT NULL,
  `course_category` varchar(15) NOT NULL,
  `crs_status` varchar(20) NOT NULL,
  `conductedbyid` varchar(10) NOT NULL,
  `different_venue` varchar(10) NOT NULL,
  `corecompitency` varchar(5) NOT NULL,
  `approvalno` varchar(20) NOT NULL,
  `approvaldt` date DEFAULT NULL,
  `remark` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trg_calender`
--

INSERT INTO `trg_calender` (`crs_id`, `crs_name`, `date_from`, `date_to`, `emp_level`, `course_category`, `crs_status`, `conductedbyid`, `different_venue`, `corecompitency`, `approvalno`, `approvaldt`, `remark`) VALUES
(1, 'IT applications', '2018-09-04', '2018-09-08', 'chargeman', 'chemical', '', 'ofkil', '', '', '', '0000-00-00', ''),
(2, 'Hrd ', '2018-09-10', '2018-09-13', 'chargeman', 'mechanical', '', '', '', '', '', '0000-00-00', ''),
(3, 'sales', '2018-09-21', '2018-09-22', 'salesman', '', '', '', '', '', '', '0000-00-00', ''),
(4, 'marketing', '2018-10-17', '2018-09-22', 'marketing', 'marketing', 'sales', 'ofkil', '', '', '', '0000-00-00', ''),
(5, 'marketing', '2018-10-23', '2018-10-25', 'chargeman', 'sales', 'as', 'lucknow ', 'kanpur', '', '', '0000-00-00', ''),
(6, 'Sales', '2018-10-26', '2018-10-30', 'salesman', 'sales', 'sales', 'industry l', '', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_detail`
--
ALTER TABLE `section_detail`
  ADD PRIMARY KEY (`sec_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
