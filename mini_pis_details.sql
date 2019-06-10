-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2019 at 05:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_pis_details`
--

CREATE TABLE `mini_pis_details` (
  `PEN_NO` varchar(255) NOT NULL,
  `ID` varchar(6) DEFAULT NULL,
  `EMP_NAME` varchar(255) DEFAULT NULL,
  `EMP_TITLE` varchar(255) DEFAULT NULL,
  `BIRTH_DT` datetime DEFAULT NULL,
  `FATHER_NAME` varchar(255) DEFAULT NULL,
  `GENDER` varchar(255) DEFAULT NULL,
  `EMP_BGRP` varchar(255) DEFAULT NULL,
  `CATG_CD` int(11) DEFAULT NULL,
  `GRADE_CD` int(11) DEFAULT NULL,
  `GRADE_PAY` int(11) DEFAULT NULL,
  `GROUP_CD` int(11) DEFAULT NULL,
  `GRADE_CD1` int(11) DEFAULT NULL,
  `PAY_BAND` int(11) DEFAULT NULL,
  `PRESENT_BASIC` int(11) DEFAULT NULL,
  `ID_MARKS` varchar(255) DEFAULT NULL,
  `DRONA_EMAIL` varchar(255) DEFAULT NULL,
  `PUB_EMAIL` varchar(255) DEFAULT NULL,
  `LOCAL_ADDR` varchar(255) DEFAULT NULL,
  `PERM_ADDR` varchar(255) DEFAULT NULL,
  `LAB_SEN_NO` varchar(255) DEFAULT NULL,
  `HOME_PH_NO` varchar(255) DEFAULT NULL,
  `EXT_PH_NO` varchar(255) DEFAULT NULL,
  `MOB_PH_NO` varchar(255) DEFAULT NULL,
  `DELEG_RANK` varchar(255) DEFAULT NULL,
  `DELEG_CODE` varchar(255) DEFAULT NULL,
  `RANK_LAB` varchar(255) DEFAULT NULL,
  `DIVI` int(11) DEFAULT '-1',
  `SUB_DIVI` int(11) DEFAULT NULL,
  `APPTYPE` varchar(12) DEFAULT NULL,
  `PIN` varchar(10) DEFAULT NULL,
  `BANKAC` varchar(50) DEFAULT NULL,
  `GPFNO` varchar(50) DEFAULT NULL,
  `BAND` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mini_pis_details`
--

INSERT INTO `mini_pis_details` (`PEN_NO`, `ID`, `EMP_NAME`, `EMP_TITLE`, `BIRTH_DT`, `FATHER_NAME`, `GENDER`, `EMP_BGRP`, `CATG_CD`, `GRADE_CD`, `GRADE_PAY`, `GROUP_CD`, `GRADE_CD1`, `PAY_BAND`, `PRESENT_BASIC`, `ID_MARKS`, `DRONA_EMAIL`, `PUB_EMAIL`, `LOCAL_ADDR`, `PERM_ADDR`, `LAB_SEN_NO`, `HOME_PH_NO`, `EXT_PH_NO`, `MOB_PH_NO`, `DELEG_RANK`, `DELEG_CODE`, `RANK_LAB`, `DIVI`, `SUB_DIVI`, `APPTYPE`, `PIN`, `BANKAC`, `GPFNO`, `BAND`) VALUES
('01MR08558K', '1014', '(Dr) Vaibhav Dubey', 'MAJ', '0000-00-00 00:00:00', '', 'M', NULL, 1, NULL, 0, NULL, 1015, 0, NULL, ' ', ' ', ' ', ' ', ' ', NULL, ' ', NULL, ' ', NULL, NULL, NULL, -1, -1, NULL, NULL, NULL, NULL, NULL),
('1015TP1088', '1088', 'Mahesh Kumar', 'Mr', '0000-00-00 00:00:00', 'Shri Ramesh Chand', 'M', NULL, 2, NULL, 4200, NULL, 2014, 10130, NULL, '', '', '', 'c-15/19 vigyan vihar raipur road dehradun', 'VPO Malnu, Tehsil Palampur, District Kangra', NULL, '', '2140', '', NULL, NULL, NULL, 11, 11, NULL, NULL, '', '', NULL),
('1015TP1099', '1099', 'Bhabani Sankar sahu', 'Mr', '0000-00-00 00:00:00', 'Shri Birendra Sahu', 'M', NULL, 2, NULL, 1900, NULL, 2025, 0, NULL, '', '', '', 'B2/Vigyan Vihar,  Raipur,  DehraDun', 'Al- Guhaldin  PO-Suhagpur  PS-Barsati  Dist - Mayurbhanj  State- Odisha, 757026', NULL, '', '2499', '9910092201', NULL, NULL, NULL, 61, 61, NULL, NULL, '', '', NULL),
('1015TP1102', '1102', 'Pankaj Bansal', 'Mr', '0000-00-00 00:00:00', 'Shri G P Bansal', 'M', NULL, 2, NULL, 5400, NULL, 2003, 63100, NULL, '', '', '', 'C 10/2, DEAL Colony, Raipur Road, Dehradun', 'HNo. 1044 Indra Nagar Meerut City, UP', NULL, '', '2533', '', NULL, NULL, NULL, 81, 81, NULL, NULL, '20158960642', '1601503', NULL),,
('PEN_NO', 'ID', 'EMP_NAME', 'EMP_TITLE', '0000-00-00 00:00:00', 'FATHER_NAME', 'GENDER', 'EMP_BGRP', 0, 0, 0, 0, 0, 0, 0, 'ID_MARKS', 'DRONA_EMAIL', 'PUB_EMAIL', 'LOCAL_ADDR', 'PERM_ADDR', 'LAB_SEN_NO', 'HOME_PH_NO', 'EXT_PH_NO', 'MOB_PH_NO', 'DELEG_RANK', 'DELEG_CODE', 'RANK_LAB', 0, 0, 'APPTYPE', 'PIN', 'BANKAC', 'GPFNO', 'BAND');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mini_pis_details`
--
ALTER TABLE `mini_pis_details`
  ADD PRIMARY KEY (`PEN_NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
