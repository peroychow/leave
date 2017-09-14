-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 06:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_access`
--

CREATE TABLE `table_access` (
  `id_access` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_access`
--

INSERT INTO `table_access` (`id_access`, `name`) VALUES
(1, 'Admin'),
(2, 'HR'),
(3, 'Supervisor'),
(4, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `table_bank`
--

CREATE TABLE `table_bank` (
  `id_bank` int(5) NOT NULL,
  `name_bank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_bank`
--

INSERT INTO `table_bank` (`id_bank`, `name_bank`) VALUES
(1, 'BCA'),
(2, 'BNI'),
(3, 'BRI'),
(4, 'Mandiri'),
(5, 'DKI'),
(6, 'BJB');

-- --------------------------------------------------------

--
-- Table structure for table `table_degree`
--

CREATE TABLE `table_degree` (
  `id_degree` int(5) NOT NULL,
  `name_degree` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_degree`
--

INSERT INTO `table_degree` (`id_degree`, `name_degree`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA'),
(4, 'D1'),
(5, 'D3'),
(6, 'S1'),
(7, 'S2'),
(8, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `table_department`
--

CREATE TABLE `table_department` (
  `id_dep` int(5) NOT NULL,
  `name_dept` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_department`
--

INSERT INTO `table_department` (`id_dep`, `name_dept`) VALUES
(1, 'Sales'),
(2, 'Technology'),
(3, 'Product'),
(4, 'Marketing'),
(5, 'Data Integrity'),
(6, 'Operations'),
(7, 'Analytic'),
(8, 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `table_employee`
--

CREATE TABLE `table_employee` (
  `id_number` int(10) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `job_title` varchar(60) DEFAULT NULL,
  `department` int(5) DEFAULT NULL,
  `source` varchar(60) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `probation_end` date DEFAULT NULL,
  `last_date_resign` date DEFAULT NULL,
  `employment_status` int(5) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `phone2` int(15) DEFAULT NULL,
  `emergency_contact_name` varchar(60) DEFAULT NULL,
  `emergency_contact_number` int(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `nik` int(20) DEFAULT NULL,
  `place_of_birth` varchar(60) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `name_npwp` varchar(60) DEFAULT NULL,
  `npwp` varchar(60) DEFAULT NULL,
  `address_npwp` text,
  `bank` int(5) DEFAULT NULL,
  `bank_rek_number` int(40) DEFAULT NULL,
  `bank_acc_name` varchar(60) DEFAULT NULL,
  `bpjs_ketenagakerjaan_name` varchar(60) DEFAULT NULL,
  `bpjs_ketenagakerjaan_number` int(20) DEFAULT NULL,
  `marital_status` int(5) DEFAULT NULL,
  `marriage_children` int(5) DEFAULT NULL,
  `last_education_period_from` date DEFAULT NULL,
  `last_education_period_to` date DEFAULT NULL,
  `last_education_degree` int(5) DEFAULT NULL,
  `last_education_degree_study` varchar(60) DEFAULT NULL,
  `last_education_university` varchar(60) DEFAULT NULL,
  `last_education_gpa` float DEFAULT NULL,
  `last_education2_period_from` date DEFAULT NULL,
  `last_education2_period_to` date DEFAULT NULL,
  `last_education2_degree` int(5) DEFAULT NULL,
  `last_education2_degree_study` varchar(60) DEFAULT NULL,
  `last_education2_university` varchar(60) DEFAULT NULL,
  `last_education2_gpa` float DEFAULT NULL,
  `previous_employment_period_from` date DEFAULT NULL,
  `previous_employment_period_to` date DEFAULT NULL,
  `previous_employment_company` varchar(60) DEFAULT NULL,
  `previous_employment_position` varchar(60) DEFAULT NULL,
  `previous_employment2_period_from` date DEFAULT NULL,
  `previous_employment2_period_to` date DEFAULT NULL,
  `previous_employment2_company` varchar(60) DEFAULT NULL,
  `previous_employment2_position` varchar(60) DEFAULT NULL,
  `address` text,
  `remaining_leave` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_employee`
--

INSERT INTO `table_employee` (`id_number`, `name`, `job_title`, `department`, `source`, `join_date`, `probation_end`, `last_date_resign`, `employment_status`, `gender`, `phone`, `phone2`, `emergency_contact_name`, `emergency_contact_number`, `email`, `nik`, `place_of_birth`, `date_of_birth`, `name_npwp`, `npwp`, `address_npwp`, `bank`, `bank_rek_number`, `bank_acc_name`, `bpjs_ketenagakerjaan_name`, `bpjs_ketenagakerjaan_number`, `marital_status`, `marriage_children`, `last_education_period_from`, `last_education_period_to`, `last_education_degree`, `last_education_degree_study`, `last_education_university`, `last_education_gpa`, `last_education2_period_from`, `last_education2_period_to`, `last_education2_degree`, `last_education2_degree_study`, `last_education2_university`, `last_education2_gpa`, `previous_employment_period_from`, `previous_employment_period_to`, `previous_employment_company`, `previous_employment_position`, `previous_employment2_period_from`, `previous_employment2_period_to`, `previous_employment2_company`, `previous_employment2_position`, `address`, `remaining_leave`) VALUES
(0, 'Denny Setiawan', 'Tech Support', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(714009, 'Irwan Gunawan', 'Software Tester', 2, '', '1988-11-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(814014, 'Zulfikri', 'Sales Manager', 1, '', '2015-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(814015, 'Samuel Adam Suhendra', 'Developer', 2, 'Ref Stephen', '2014-08-18', '0000-00-00', '0000-00-00', 1, 'M', 2147483647, NULL, 'Anton', 2147483647, 'samuel.suhendra@gmail.com', 2147483647, 'Jakarta', '1989-12-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(914016, 'Kresna Abidjuono', 'Account Manager', 1, 'Ref Stephen', '2014-09-25', '0000-00-00', '0000-00-00', 1, 'M', 2147483647, NULL, 'Festya', 2147483647, 'kresnaabid@gmail.com', 2147483647, 'Jakarta', '1985-12-24', 'Kresna Abidjuono', '49.743.477.9-412.000', 'Kp Babakan Rawa Kalong RT 07 RW 06 Curug - Cimanggis Depok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1214020, 'Yayan Kuswara', 'Software Tester', 2, '', '2014-12-01', '0000-00-00', '0000-00-00', 1, 'M', 2147483647, NULL, 'Sahrul Fuad', 2147483647, 'yayan_kuswara@yahoo.com', 2147483647, 'Jakarta', '1991-12-19', 'Yayan Kuswara', '45.333.189.4-045.000', '"Jl. Kalibaru Timur 1 No. 9b RT 013/02, Kalibaru, Cilincing\r\nJakarta Utara - 14110"\r\n', 1, 211, 'Yayan Kuswara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1214021, 'Ribka Setiawati', 'Analyst', 1, '', '2014-12-03', '0000-00-00', '0000-00-00', 1, 'F', 2147483647, NULL, 'Claudia', 2147483647, 'ribka.setiawati@gmail.com', 0, 'Bandung', '1989-02-07', 'Ribka Setiawati', '09.360.628.3-423.000', 'Jl Muararajeun No 28, Cihaurgeulis - Cibeunying Kaler Bandung\r\n', 1, 156, 'Ribka Setiawati', '', 0, 1, NULL, '2007-08-01', '2012-07-01', 6, 'Physics', 'Bandung Technology Institute', 3, '2004-07-01', '2007-06-01', 3, 'Science', 'SMA Advent Bandung', 0, '2014-01-01', '2014-11-01', 'PT Flowcrete Indonesia', 'Sales Executive', '2013-04-01', '2013-12-01', 'PT Probindo Artika Jaya', 'Analyst', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_employment_status`
--

CREATE TABLE `table_employment_status` (
  `id_emp_status` int(5) NOT NULL,
  `name_emp_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_employment_status`
--

INSERT INTO `table_employment_status` (`id_emp_status`, `name_emp_status`) VALUES
(1, 'Full Time'),
(2, 'Intern'),
(3, 'Outsource'),
(4, 'Freelance'),
(5, 'Probation');

-- --------------------------------------------------------

--
-- Table structure for table `table_leave_request`
--

CREATE TABLE `table_leave_request` (
  `id_leave` int(10) NOT NULL,
  `id_number` int(10) DEFAULT NULL,
  `date_request` date DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `days` int(5) DEFAULT NULL,
  `leave_type` int(5) DEFAULT NULL,
  `approval` char(5) DEFAULT NULL,
  `purpose` text,
  `contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_leave_type`
--

CREATE TABLE `table_leave_type` (
  `id_type` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_marital_status`
--

CREATE TABLE `table_marital_status` (
  `id_mar_status` int(5) NOT NULL,
  `name_mar_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_marital_status`
--

INSERT INTO `table_marital_status` (`id_mar_status`, `name_mar_status`) VALUES
(1, 'Single'),
(2, 'Marriage');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `id_number` int(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `access` int(5) DEFAULT NULL,
  `active` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_number`, `password`, `access`, `active`) VALUES
(1, 0, 'f69b5bbb6724d2d417a3c9f30a4ed45e', 1, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_access`
--
ALTER TABLE `table_access`
  ADD PRIMARY KEY (`id_access`);

--
-- Indexes for table `table_bank`
--
ALTER TABLE `table_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `table_degree`
--
ALTER TABLE `table_degree`
  ADD PRIMARY KEY (`id_degree`);

--
-- Indexes for table `table_department`
--
ALTER TABLE `table_department`
  ADD PRIMARY KEY (`id_dep`);

--
-- Indexes for table `table_employee`
--
ALTER TABLE `table_employee`
  ADD PRIMARY KEY (`id_number`),
  ADD KEY `department` (`department`),
  ADD KEY `employment_status` (`employment_status`),
  ADD KEY `bank` (`bank`),
  ADD KEY `marital_status` (`marital_status`),
  ADD KEY `fk_education_degree` (`last_education_degree`),
  ADD KEY `fk_education2_degree` (`last_education2_degree`);

--
-- Indexes for table `table_employment_status`
--
ALTER TABLE `table_employment_status`
  ADD PRIMARY KEY (`id_emp_status`);

--
-- Indexes for table `table_leave_request`
--
ALTER TABLE `table_leave_request`
  ADD PRIMARY KEY (`id_leave`),
  ADD KEY `id_number` (`id_number`),
  ADD KEY `leave_type` (`leave_type`);

--
-- Indexes for table `table_leave_type`
--
ALTER TABLE `table_leave_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `table_marital_status`
--
ALTER TABLE `table_marital_status`
  ADD PRIMARY KEY (`id_mar_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_number` (`id_number`),
  ADD KEY `access` (`access`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_access`
--
ALTER TABLE `table_access`
  MODIFY `id_access` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table_bank`
--
ALTER TABLE `table_bank`
  MODIFY `id_bank` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `table_degree`
--
ALTER TABLE `table_degree`
  MODIFY `id_degree` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `table_department`
--
ALTER TABLE `table_department`
  MODIFY `id_dep` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `table_employment_status`
--
ALTER TABLE `table_employment_status`
  MODIFY `id_emp_status` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `table_leave_request`
--
ALTER TABLE `table_leave_request`
  MODIFY `id_leave` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_leave_type`
--
ALTER TABLE `table_leave_type`
  MODIFY `id_type` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_marital_status`
--
ALTER TABLE `table_marital_status`
  MODIFY `id_mar_status` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_employee`
--
ALTER TABLE `table_employee`
  ADD CONSTRAINT `fk_education2_degree` FOREIGN KEY (`last_education2_degree`) REFERENCES `table_degree` (`id_degree`),
  ADD CONSTRAINT `fk_education_degree` FOREIGN KEY (`last_education_degree`) REFERENCES `table_degree` (`id_degree`),
  ADD CONSTRAINT `table_employee_ibfk_1` FOREIGN KEY (`department`) REFERENCES `table_department` (`id_dep`),
  ADD CONSTRAINT `table_employee_ibfk_2` FOREIGN KEY (`employment_status`) REFERENCES `table_employment_status` (`id_emp_status`),
  ADD CONSTRAINT `table_employee_ibfk_3` FOREIGN KEY (`bank`) REFERENCES `table_bank` (`id_bank`),
  ADD CONSTRAINT `table_employee_ibfk_4` FOREIGN KEY (`marital_status`) REFERENCES `table_marital_status` (`id_mar_status`);

--
-- Constraints for table `table_leave_request`
--
ALTER TABLE `table_leave_request`
  ADD CONSTRAINT `table_leave_request_ibfk_1` FOREIGN KEY (`id_number`) REFERENCES `table_employee` (`id_number`),
  ADD CONSTRAINT `table_leave_request_ibfk_2` FOREIGN KEY (`leave_type`) REFERENCES `table_leave_type` (`id_type`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_number`) REFERENCES `table_employee` (`id_number`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`access`) REFERENCES `table_access` (`id_access`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
