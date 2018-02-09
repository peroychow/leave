-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 08:06 AM
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
(6, 'BJB'),
(7, 'Standard Chartered');

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
(8, 'HR'),
(9, 'Top Management'),
(10, 'Head Hunting');

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
  `phone` varchar(15) DEFAULT NULL,
  `phone2` int(15) DEFAULT NULL,
  `emergency_contact_name` varchar(60) DEFAULT NULL,
  `emergency_contact_number` varchar(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `place_of_birth` varchar(60) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `name_npwp` varchar(60) DEFAULT NULL,
  `npwp` varchar(60) DEFAULT NULL,
  `address_npwp` text,
  `bank` int(5) DEFAULT NULL,
  `bank_rek_number` varchar(40) DEFAULT NULL,
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
  `remaining_leave` int(5) DEFAULT NULL,
  `reporting_to` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_employee`
--

INSERT INTO `table_employee` (`id_number`, `name`, `job_title`, `department`, `source`, `join_date`, `probation_end`, `last_date_resign`, `employment_status`, `gender`, `phone`, `phone2`, `emergency_contact_name`, `emergency_contact_number`, `email`, `nik`, `place_of_birth`, `date_of_birth`, `name_npwp`, `npwp`, `address_npwp`, `bank`, `bank_rek_number`, `bank_acc_name`, `bpjs_ketenagakerjaan_name`, `bpjs_ketenagakerjaan_number`, `marital_status`, `marriage_children`, `last_education_period_from`, `last_education_period_to`, `last_education_degree`, `last_education_degree_study`, `last_education_university`, `last_education_gpa`, `last_education2_period_from`, `last_education2_period_to`, `last_education2_degree`, `last_education2_degree_study`, `last_education2_university`, `last_education2_gpa`, `previous_employment_period_from`, `previous_employment_period_to`, `previous_employment_company`, `previous_employment_position`, `previous_employment2_period_from`, `previous_employment2_period_to`, `previous_employment2_company`, `previous_employment2_position`, `address`, `remaining_leave`, `reporting_to`) VALUES
(0, 'Denny Setiawan', 'Technical & Operational Support', 6, 'Ref Caroline', '2016-02-03', '0000-00-00', '0000-00-00', 1, 'M', '087774133457', NULL, 'A. M', '08128825178', 'denny@insurgent.id', '', 'Pacitan', '1994-12-16', 'Denny Setiawan', '54.728.841.5-411.000', '"KP Buaran RT 007 RW 007\r\nBuaran, Serpong Tanggerang Selatan"', 1, '473-126-7060', 'Denny Setiawan', 'Denny Setiawan', 0, 1, NULL, '0000-00-00', '0000-00-00', 1, '', '', 0, '0000-00-00', '0000-00-00', 1, '', '', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', 'Jl. Kp Buaran No.59 Rt.002/007 Kelurahan Buaran, Kecamatan Serpong, Tangerang Selatan', 2, 414002),
(117174, 'David Michael Simanjuntak', 'Web Developer', 2, 'kaskus', '2017-01-03', '2017-03-27', '0000-00-00', 1, 'M', '83184580900', 0, 'Darwin Simanjuntak', '81261206114', 'david@qerja.com', '2171091102940000', 'Batam', '1994-02-11', '', '', '', 1, '543-504-4007', 'David Michael Simanjuntak', '', 0, 1, 0, '0000-00-00', '2012-01-01', 6, 'Teknik Informatika', 'Politeknik Negeri Batam', 3.85, '1900-01-15', '1900-01-15', 3, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', 'Politeknik Negeri Batam', 'Web Developer', '0000-00-00', '0000-00-00', 'PT. KINEMA SYSTRANS MULTIMEDIA', 'Web & Dekstop Developer (Magang)', 'BENGKONG ABADI 1 NO. 279, BATAM, KEPULAUAN RIAU', 2, 814015),
(117175, 'Andi Karaeng', 'ACCOUNT EXECUTIVE', 1, 'Jobstreet', '2017-01-03', '2017-04-05', '0000-00-00', 1, 'M', '0857 8062 5695', 2147483647, 'Dinda Yulia Sari', '0857 8062 5695', 'andi@jobs.id', '3175012702890000', 'Jakarta', '1989-02-27', 'Andi Karaeng', '73.262.261.8-001.000', 'JL. PENEGAK V NO.10 RT.009 RW.002\r\nPAL MERIAM, MATRAMAN\r\nJAKARTA TIMUR DKI JAKARTA', 1, '342-324-9915', 'Andi Karaeng', '', 0, 2, 2, '2005-01-01', '2008-01-01', 3, 'Otomotif', 'SMK N 34 ', 0, '1900-01-14', '1900-01-14', 3, 'N/A', 'N/A', 0, '2013-10-01', '0000-00-00', 'PT. Solidbase Technology', 'Sales Engineer', '2012-10-01', '2013-09-01', 'PT. Mitra Sukses Supratama', 'Sales Product', '', 2, 814014),
(117176, 'Noviliana Elsera', 'ACCOUNT EXECUTIVE', 1, 'GSS (Outsourcing)', '2016-10-05', '2017-01-05', '0000-00-00', 1, 'F', '89677525993', 0, 'Mardiana', '89513065088', 'noviliana@jobs.id', '3171036012910000', 'Jakarta', '1991-12-20', 'Noviliana Elsera', '80.299.398.0-027.000', 'Jl. Kebon Kosong Gg. 16 No.125, Rt.013 Rw.003, Kebon Kosong, Kemayoran, Jakarta Pusat', 1, '002-002-1292', 'Noviliana Elsera', '', 0, 1, 0, '2005-01-01', '2009-01-01', 3, 'Akuntansi', 'SMK Negeri 44 Jakarta', 0, '1900-01-10', '1900-01-10', 3, 'N/A', 'N/A', 0, '2012-10-01', '2013-11-01', 'PT Midi Utama Indonesia', 'Kasir', '2013-11-01', '2016-08-01', 'PT Agung Sejahtera Makmur', 'Telemarketing', 'Kebon kosong Gg. 16 Rt.013 Rw. 003 Kebon Kosong, Kemayoran, Jakarta Pusat', 2, 814014),
(215030, 'Erwin Iskandar', 'PROJECT ASSISTANT', 1, '', '2015-02-09', '0000-00-00', '0000-00-00', 1, 'M', '0852-2477-3812', 0, 'Elal', '8121443908', 'erwin@jobs.id', '3209302606910015', 'Cirebon', '1991-06-26', 'Erwin Iskandar', '74.155.983.5-061.000 ', 'Cikoko Barat 2 Cikoko No 55 RT 008/ RW 003 Cikoko Pancoran Jaksel\n', 1, '543-502-5568', 'Erwin Iskandar', '', 0, 2, 0, '0000-00-00', '2014-01-01', 6, 'Physics', 'Universitas Pendidikan Indonesia', 3, '2006-06-01', '2009-01-01', 3, 'Science', 'SMAN 1 Babakan Kab. Cirebon', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '', 2, 814014),
(215031, 'Auzan Farizi', 'SOFTWARE TESTER', 3, '', '2015-02-09', '0000-00-00', '0000-00-00', 1, 'M', '0856-9477-0385', 0, 'nova', '0 899 8344 634', 'ole@qerja.com', '3201130612920003', 'Jakarta', '1992-12-06', 'Auzan Farizi', '74.160.402.9-403.000', 'Kp Pabuaran No 36 RT 02 RW 05 Pabuaran, Bojong Gede, Bogor', 1, '543-502-8541', 'Auzan Farizi', '', 0, 1, 0, '0000-00-00', '2015-01-01', 6, 'Physics', 'University of Indonesia', 2.89, '2007-07-01', '2010-05-01', 3, 'Social', 'SMAN 3 Depok', 0, '2013-12-01', '2014-12-01', 'Pertamina', 'Liaison Officer & Videographer', '2012-08-01', '2014-12-01', 'University of Indonesia', 'Laboratory Assistant Supervisor', '', 2, 814015),
(215036, 'Nadya Arisandi', 'ACCOUNT EXECUTIVE', 1, '', '2015-02-23', '0000-00-00', '0000-00-00', 1, 'F', '0857-1944-0404', 0, 'Megalia', '85218461644', 'nadya@jobs.id', '3271066705930010', 'Bogor', '1993-05-27', 'Nadya Arisandi', '70.971.465.3-404.000', 'Jalan Baru Cimanggu Wates No. 46 Rt. 05 Rw. 05 Kel. Kedungjaya Kec. Tanah Sareal Kota Bogor Jawa Barat', 1, '872-022-0050', 'Nadya Arisandi', '', 0, 1, 0, '0000-00-00', '2014-01-01', 5, 'Accounting', 'Politeknik Negeri Jakarta', 3.63, '2008-07-01', '2011-06-01', 3, 'Accounting', 'SMK Negeri 1 Bogor', 0, '2014-09-01', '2015-02-20', 'PT Kresna Graha Sekurindo Tbk', 'Operation Staff', '0000-00-00', '0000-00-00', '', '', '', 2, 814014),
(215039, 'Bintang Lastiur Simanjuntak', 'OFFICE SUPPORT', 6, '', '2015-02-24', '0000-00-00', '0000-00-00', 1, 'F', '0838-7721-1655', 0, 'Flora', '89607708442', 'lastiur64@gmail.com', '3674036312930000', 'Jakarta', '1993-12-23', '', '', '', 1, '345-244-3705', 'Bintang Lastiur Simanjuntak', '', 0, 1, 0, '2010-01-01', '2013-01-01', 3, 'Akuntansi', '', 0, '1900-01-01', '1900-01-01', 3, 'N/A', 'N/A', 0, '2014-07-01', '2015-02-01', 'Baleno', 'SPG', '2013-10-01', '2014-05-01', 'Sanrio', 'SPG', '', 2, 315047),
(216132, 'Denny Setiawan', 'TECHNICAL SUPPORT', 6, 'Ref Caroline', '2016-02-03', '2016-04-18', '0000-00-00', 1, 'M', '87774133457', 0, 'Ahmad Mauludin', '8128825178', 'denny@qerja.com', '3674011612940000', 'Pacitan', '1994-12-16', 'Denny Setiawan', '54.728.841.5-411.000', 'KP Buaran RT 007 RW 007\nBuaran, Serpong Tanggerang Selatan', 1, '473-126-7060', 'Denny Setiawan', 'Denny Setiawan', 2147483647, 1, 0, '0000-00-00', '0000-00-00', 6, 'Computer Science', 'Universitas Pamulang', 0, '2009-06-01', '2012-01-01', 3, 'Computer Engineering', 'SMK CYBER MEDIA JAKARTA', 33.2, '2012-04-13', '2015-02-02', 'PT. AUDITSI (LIONJOBS.COM)', 'TECHNICAL SUPPORT', '2015-04-01', '2016-02-02', 'PT. GARENA INDONESIA', 'COMPUTER TECHNICIAN', '', 2, 414002),
(216133, 'Mochamad Sofyan', 'ACCOUNT EXECUTIVE', 1, 'Ref Kresna', '2016-02-09', '2016-04-08', '0000-00-00', 1, 'M', '81287834939', 0, 'Lina Desiyani', '82111289693', 'sofyan@jobs.id', '3175020105850000', 'Jakarta', '1985-05-01', 'Mochamad Sofyan', '58.215.878.8-003.000', 'Jl. Balap Sepeda Kav 1 No.25 Rt.007 Rw.006\r\nRawamangun, Pulogadung\r\nJakarta Timur', 1, '094-068-1669', 'Mochamad Sofyan', '', 0, 2, 1, '0000-00-00', '2008-01-01', 6, 'Manajemen Informatika', 'AMIK Bina Sarana Informatika', 0, '1900-01-02', '1900-01-02', 3, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', 'PT.Karlin Mastrindo', 'Account Executive', '0000-00-00', '0000-00-00', 'PT.JOBSDB INDONESIA', 'Account Executive', '', 2, 814014),
(216135, 'Yoshirini Yoshida', 'ACCOUNTING & TAX', 6, 'Jobstreet', '2016-02-15', '2016-05-20', '0000-00-00', 1, 'F', '021 545 2923', 877, 'Intan', '81381124654', 'yoshi@qareer.com', '3671055208930000', 'Pangkalan Brandan', '1993-08-12', 'Yoshirini Yoshida', '74.199.242.4-416.000', 'Alam Indah H 3 No.7\r\nPoris Plawad Indah Cipondoh\r\nTangerang Selatan', 1, '867-010-4851', 'Yoshirini Yoshida', 'Yoshirini Yoshida', 2147483647, 1, 0, '0000-00-00', '2015-01-01', 6, 'EKONOMI / AKUNTANSI', 'TRISAKTI SCHOOL OF MANAGEMENT', 38.93, '1900-01-03', '1900-01-03', 3, 'N/A', 'N/A', 0, '2011-06-01', '2016-01-01', 'PT. SAHABAT INDONESIA INTI MANDIRI', 'TAX ACCOUNTING (SENIOR STAFF)', '0000-00-00', '0000-00-00', '', '', '', 2, 315047),
(217177, 'Miftahul Jannah', 'TELEMARKETING EXECUTIVE', 1, 'QFF Halimah', '2017-02-01', '2017-06-19', '0000-00-00', 1, 'F', '83898535912', 2147483647, 'Gilang Alfatiah', '87777810452', 'mitha@jobs.id', '3276056504870010', 'Jakarta', '1987-04-25', 'Miftahul Jannah', '67.548.286.3-412.000', 'Lingk. Cipayung Rt.001 Rw.002, Abadijaya, Sukmajaya, Depok', 1, '502-510-9403', 'Miftahul Jannah', 'Miftahul Jannah', 2147483647, 2, 0, '0000-00-00', '2005-01-01', 3, 'Social', 'SMA YAPEMRI', 7, '1900-01-16', '1900-01-16', 3, 'N/A', 'N/A', 0, '2016-01-01', '0000-00-00', 'PT Bank Mega Tbk.', 'Telemarketing', '2015-08-01', '2015-10-01', 'PT Asia Trade Point Futures', 'Marketing', 'Jl. Kemakmuran Raya No.42 Rt.002 Rw.006, Kel. Sukma Jaya, Kec. Mekar Raya, Depok 2 Tengah', 2, 814014),
(217181, 'Melda Masniari Hutajulu', 'QHA HEAD HUNTER', 10, 'Linardi', '0000-00-00', '0000-00-00', '0000-00-00', 1, 'F', '0', 0, 'N/A', '0', 'melda@qareer.com', '0', 'Unknown', '1900-01-00', '-', '-', '-', 1, '0', '-', '', 0, 1, 0, '1900-01-03', '1900-01-03', 6, 'N/A', 'N/A', 0, '1900-01-03', '1900-01-03', 6, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '-', 2, 315047),
(217182, 'Hesti Cahyaningtyas', 'QHA HEAD HUNTER', 10, 'Linardi', '0000-00-00', '0000-00-00', '0000-00-00', 1, 'F', '0', 0, 'N/A', '0', 'hesti@qareer.com', '0', 'Unknown', '1900-01-00', '-', '-', '-', 1, '0', '-', '', 0, 1, 0, '1900-01-04', '1900-01-04', 6, 'N/A', 'N/A', 0, '1900-01-04', '1900-01-04', 6, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '-', 2, 315047),
(217183, 'Anastasia Romaulim Hutajulu', 'QHA HEAD HUNTER', 10, 'Linardi', '0000-00-00', '0000-00-00', '0000-00-00', 1, 'F', '0', 0, 'N/A', '0', 'anastasia@qareer.com', '0', 'Unknown', '1900-01-00', '-', '-', '-', 1, '0', '-', '', 0, 1, 0, '1900-01-05', '1900-01-05', 6, 'N/A', 'N/A', 0, '1900-01-05', '1900-01-05', 6, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '-', 2, 315047),
(315040, 'Rifah Masla', 'PROJECT ASSISTANT', 10, 'Jobstreet', '2015-03-02', '2015-06-04', '0000-00-00', 1, 'F', '0857-1844-7854', 2147483647, 'Rifdha Masla', '85781186565', 'rifah@jobs.id', '3174086512910004', 'Jakarta', '1991-12-25', 'Rifah Masla', '36.774.795.3-061.000', 'Jl Pancoran Barat III No 52 RT 05 RW 06 Pancoran, Pancoran Jakarta Selatan ', 1, '543-502-6611', 'Rifah Masla', '', 0, 1, 0, '0000-00-00', '2015-01-01', 6, 'Guidance & Counseling', 'Indraprasta PGRI University', 3.3, '2006-06-01', '2009-04-01', 3, 'Accounting', 'SMKN 8 Jakarta', 0, '2014-04-01', '2014-09-01', 'PT Multi Utama Consultindo', 'HR Support', '2012-03-01', '2014-04-01', 'PT Khazanah Mitra Sinergi', 'Project Administration', '', 2, 315047),
(315045, 'Yaritsa Evi Nuraida', 'ACCOUNT EXECUTIVE', 4, 'Ref Anastasia', '2015-03-12', '2015-06-05', '0000-00-00', 1, 'F', '81310802631', 0, 'nunik', '82122081989', 'yaris@jobs.id', '3372025512890000', 'malang', '1989-12-15', 'Yaritsa Evi Nuraida', '64.049.508.1-034.000', 'Jln . Pondok randu no 82 RT.013 RW.002,duri kosambi/CENGKARENG', 1, '035-432-4365', 'Yaritsa Evi Nuraida', '', 0, 1, 0, '2006-06-01', '2009-06-01', 3, 'Science', 'SMAN 1 WON', 0, '1900-01-02', '1900-01-02', 3, 'N/A', 'N/A', 0, '2013-01-01', '2015-02-01', 'PT Accor Vacation Club', 'Reservation', '2011-01-01', '2013-01-01', 'PT Trimas Mulia', 'Admin Support', '', 2, 814014),
(315046, 'Muhajirin', 'PROJECT ASSISTANT', 1, '', '2015-03-16', '2015-06-04', '0000-00-00', 1, 'M', '0858-1354-5642', 0, 'Jafar Sodik', '81217665213', 'muhajirinanim@gmail.com', '3201171509920004', 'Bogor', '1992-09-15', 'Muhajirin', '74.133.497.3-008.000', 'Jalan Pahlawan Revolusi No. 2, Tower AB, 5, 21, Pondok Bambu, Duren Sawit, Jakarta Timur', 1, '543-502-6688', 'Muhajirin', '', 0, 1, 0, '0000-00-00', '2015-02-01', 5, 'Animation', 'State Polytechnic of Creative Media', 3.56, '2008-06-01', '2011-04-01', 3, 'Social', 'SMA Ibnu Hajar Bogor', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', 'Jl. Bulak Tengah X Nomor 8, Komplek Bulak Raya, Klender, Duren Sawit, Jakarta Timur', 2, 814014),
(315047, 'Santoso Deswanta Nugroho', 'FINANCE', 6, 'Ref Stephen', '2015-03-18', '2015-06-04', '0000-00-00', 1, 'M', '0812-1939-1767', 0, 'Teguh', '81319391767', 'finance@jobs.id', '3173060412890003', 'Jakarta', '1989-12-04', 'Santoso Deswanta Nugroho', '44.599.839.6-085.000', 'Jl Swadaya Utama No 7 RT 07 RW 03 Kalideres - Kalideres Jakarta Barat', 1, '399-154-1754', 'Santoso Deswanta Nugroho', '', 0, 2, 0, '0000-00-00', '2011-07-01', 6, 'Computerize Accounting', 'Binus University', 3.12, '2004-06-01', '2007-06-01', 3, 'Social', 'SMA San Marino Jakarta', 0, '2011-11-01', '2015-03-01', 'PT Auditsi', 'Finance', '2011-02-01', '2011-11-01', 'KKUS Credit Union', 'Accounting', '', 2, 414002),
(315049, 'Ergat Januari Fauzi', 'ACCOUNT EXECUTIVE', 1, 'Jobstreet', '2015-03-23', '0000-00-00', '0000-00-00', 1, 'M', '0822-9838-3613', 2147483647, 'Dara Amalia', '811199665', 'ergat@jobs.id', '3202113001880003', 'Bekasi', '1988-01-30', 'Ergat Januari Fauzi', '09.282.134.7-408.000', 'Perumahan Pesona Blok D2 No 09 RT 18 RW 04 Rengasdengklok Selatan, Rengasdengklok, Karawang', 1, '253-316-0816', 'Ergat Januari Fauzi', '', 0, 2, 0, '0000-00-00', '2012-02-01', 6, 'Management', 'STIE Pelita Bangsa', 3.01, '2002-06-01', '2005-01-01', 3, 'Social', 'SMAN 1 Karawang', 0, '2014-01-01', '2015-09-01', 'PT Accor Vacation Club', 'Telemarketing', '2011-02-01', '2015-02-01', 'PT MNC Sky Vision', 'Spv Telesales', '', 2, 814014),
(414001, 'Veronika Linardi', 'CO- FOUNDER', 9, '', '2014-04-01', '0000-00-00', '0000-00-00', 1, 'F', '0858-8080-2590', 0, '', '', 'vero@qerja.com', '3172016510780008', 'Jakarta', '1978-10-25', 'Veronika Linardi', '24.602.703.1-047.000', 'Pluit Murni VII No 6 RT. 008 RW. 004 Pluit - Penjaringan Jakarta Utara - DKI Jakarta Raya', 1, '244-009-4662', 'Veronika Linardi', '', 0, 2, 0, '0000-00-00', '2000-01-01', 7, 'Strategic Digital Mkt & Management IS', 'Carnegie Mellon University', 0, '1996-01-01', '1998-01-01', 6, 'Advertising', 'The University of Texas', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '', 2, 0),
(414002, 'Stephen Kohar', 'CO- FOUNDER', 9, '', '2014-04-14', '0000-00-00', '0000-00-00', 1, 'M', '8111330168', 0, '', '', 'stephen@qerja.com', '3173040509850000', 'Jakarta', '1985-09-05', 'Stephen Kohar', '59.472.854.5-033.000', 'Jl. Jembatan Besi Jaya I/5 RT 007 RW 003 Jembatan Besi - Tambora Jakarta Barat', 1, '467-131-7020', 'Stephen Kohar', '', 0, 2, 0, '1900-01-00', '1900-01-00', 6, 'N/A', 'N/A', 0, '1900-01-00', '1900-01-00', 6, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '', 2, 0),
(415061, 'Nanda Dewi Aryani', 'ACCOUNT EXECUTIVE', 1, 'Ref Anas', '2015-04-15', '0000-00-00', '0000-00-00', 1, 'F', '0813-1597-5609', 0, 'Bambang', '8128896978', 'nanda@jobs.id', '3216025004810014', 'Jakarta', '1981-04-10', 'Nanda Dwi Aryani', '55.887.040.8-435.000', 'Taman Kebalen Indah F11/39 RT 05 RW 17, Kebalen Babelan, Bekasi', 1, '450-156-4782', 'Nanda Dewi Ariyani', '', 0, 1, 1, '0000-00-00', '2004-08-01', 5, 'Secretary', 'ASMI', 3, '1996-06-01', '1999-06-01', 3, 'Secretary', 'SMK Strada Budiluhur Bekasi', 0, '2013-01-01', '2015-01-01', 'Accor Vacation Club', 'Reservation Staff', '0000-00-00', '0000-00-00', '', '', '', 2, 814014),
(517187, 'Siti Mariah', 'TELEMARKETING EXECUTIVE', 1, '', '2017-05-02', '0000-00-00', '0000-00-00', 1, 'F', '81316239392', 0, 'Tjetjep', '8176682530', 'mariah@jobs.id', '3174084102790000', 'Jakarta', '1979-02-01', '', '', '', 1, '128-020-8996', 'Siti Mariah', '', 0, 1, 0, '0000-00-00', '1997-01-01', 3, 'Science', 'SMU 28 OKTOBER 1928', 0, '1900-01-20', '1900-01-20', 3, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', 'Jl. Pancoran Barat 1 RT.001 RW.06 No.30, Pancoran, Jakarta Selatan', 2, 814014),
(517188, 'Agus Susanto', 'TELEMARKETING EXECUTIVE', 1, 'Ref Wiranata', '2017-05-05', '0000-00-00', '0000-00-00', 1, 'M', '85776655933', 0, 'Irvan', '81210272128', 'agus@jobs.id', '3175043108870000', 'Klaten', '1987-08-31', '', '', '', 1, '165-228-4498', 'Agus Susanto', 'Agus Susanto', 2147483647, 1, 0, '2003-01-01', '2006-01-01', 3, 'Social', 'SMA NEGERI 55', 0, '1900-01-21', '1900-01-21', 3, 'N/A', 'N/A', 0, '2015-05-01', '2016-01-01', 'PT. SHUTER MITRA INDONESIA', 'SALES REPRESENTATIVE', '2016-03-01', '2017-10-01', 'PT. BEST FORTUNE INDONESIA', 'Sales Executive', 'Jl. Jembatan 1 no.34 rt 007 / 05, Balekambang, kramat jati, 13530', 2, 814014),
(517189, 'Nabilla Ayu Destiana Larasati', 'TELEMARKETING EXECUTIVE', 1, 'Ref Wiranata', '2017-05-05', '0000-00-00', '0000-00-00', 1, 'F', '8577997208', 0, 'Bagus Arya Saputra', '85287678813', 'nabilla@jobs.id', '3276054912950000', 'Jakarta', '1995-12-09', 'Nabilla Ayu Destiana Larasati', '80.760.498.8-412.000', '', 1, '421-009-8769', 'Nabilla Ayu Destiana Larasati', '', 0, 1, 0, '0000-00-00', '2013-01-01', 3, 'Akuntansi', 'SMK 1 PERINTIS DEPOK', 7.5, '1900-01-22', '1900-01-22', 3, 'N/A', 'N/A', 0, '2014-06-01', '2016-01-01', 'PT Turangga Kerta Kencana', 'Kasir + SPG', '2016-04-01', '2017-10-01', 'Indoat Mega Media', 'Sales Agent', 'perum kopwani village jl anggrek blok f no 5 cilodong depok', 2, 814014),
(517190, 'Alvi Angela', 'Recruiter', 10, '', '2017-05-31', '0000-00-00', '0000-00-00', 1, 'F', '81288877933', 0, 'Sulistyn Susanto', '81362032333', 'alvi@qerja.com', '1271194608920000', 'Medan', '1992-08-06', 'Alvi Angela', '64.432.792.0-124.000', 'Jl. Biduk No.2, Petisah Tengah, Medan Petisah, Medan', 1, '349-127-6230', 'Alvi Angela', '', 0, 1, 0, '2010-01-01', '2014-01-01', 6, 'Hospitality Management', 'PMCI', 3, '2010-01-01', '2014-01-01', 6, 'Hospitality Management', 'PMCI', 0, '0000-00-00', '0000-00-00', 'Aurora Consultant', 'Recruitment Consultant', '0000-00-00', '0000-00-00', '', '', 'Komplek Danau Indah Sunter, Jl. Danau Indah 8 Blok A 10/37', 2, 315047),
(517191, 'William Wijaya', 'Recruiter', 10, '', '2017-05-24', '0000-00-00', '0000-00-00', 1, 'M', '811158333', 0, 'Andy Tirta Wijaya', '811198222', 'william@qerja.com', '3171061011941000', 'Jakarta', '1994-11-10', 'William Wijaya', '81.319.761.3-071.000', '', 1, '206-016-1286', 'William Wijaya', '', 0, 1, 0, '1900-01-00', '2016-01-01', 6, 'Business', 'Singapore Management University', 3, '1900-01-00', '2016-01-01', 6, 'Business', 'Singapore Management University', 0, '0000-00-00', '0000-00-00', 'Sinarmas Sekuritas', 'Research Associate', '0000-00-00', '0000-00-00', 'Petromas Kencana', 'Intern', 'Jl Dr Kusuma Atmaja No. 64 RT010/004, Menteng, Jakarta Pusat', 2, 315047),
(714009, 'Irwan Gunawan', 'SOFTWARE TESTER', 3, '', '2014-07-14', '0000-00-00', '0000-00-00', 1, 'M', '0815-1314-7039', 0, 'Wulan', '0812-842-04728', 'irwangunawan845@gmail.com', '3175041511880007', 'Jakarta', '1988-11-15', 'Irwan Gunawan', '70.296.672.2-005.000', 'Jl Pucung 1 RT 05 RW 02 Balekambang Jakarta Timur', 1, '165-249-4573', 'Irwan Gunawan', '', 0, 1, 0, '0000-00-00', '2013-01-01', 6, 'Economy', 'Universitas Nasional', 3.16, '2003-01-01', '2006-01-01', 3, 'Social', 'SMAN 88 Jakarta', 0, '2013-12-01', '2014-06-01', 'PT Mitra Pelita Internusa', 'Admin & Accounting', '0000-00-00', '0000-00-00', '', '', '', 2, 814015),
(716143, 'Kenny William Aditya', 'DEVELOPER', 2, 'QFF', '2016-07-11', '2016-10-11', '0000-00-00', 1, 'M', '81318337777', 0, 'Sinthia Lovianty', '81318339999', 'kenny@qerja.com', '3172062612940000', 'Jakarta', '1994-12-26', 'Kenny William Aditya', '80.733.437.0-043.000', 'Maengket No.8 Rt.002/ Rw.007, Kelapa Gading Timur, Kelapa Gading, Jakarta Utara', 1, '632-002-6065', 'Kenny William Aditya', '', 0, 1, 0, '0000-00-00', '2016-01-01', 6, 'Teknik - Computer Science', 'Binus International University', 3.49, '1900-01-06', '1900-01-06', 3, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '', 2, 814015),
(716145, 'Arfan Fudyartanto Dwi Nugroho', 'DEVELOPER (WFB)', 2, 'Kaskus', '2016-07-11', '2016-11-17', '0000-00-00', 1, 'M', '87738064846', 0, 'Aulia Sabrina Gayatri', '85722040785', 'arfan@qerja.com', '3402141310910000', 'Jepara', '1991-10-13', 'Arfan Fudyartanto Dwi N', '74.312.290.5-543.000', 'Kembangsari, Srimartini, Piyungan RT.01, Srimartini, Piyungan, Bantul D.I.Yogyakarta', 1, '037-320-3618', 'Arfan Fudyartanto Dwi N', 'Arfan Fudyartanto Dwi Nugroho', 2147483647, 2, 1, '0000-00-00', '2009-01-01', 6, 'Ilmu Komputer', 'Universitas Gajah Mada', 3.37, '1900-01-05', '1900-01-05', 3, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', 'JUMP4IT', 'Senior Programmer', '0000-00-00', '0000-00-00', 'NETBUILDER (M) SDB BHD', 'Senior Programmer', '', 2, 814015),
(717192, 'Anggariani Cahyaning Tyas', 'Senior Recruiter', 10, '', '2017-07-03', '0000-00-00', '0000-00-00', 1, 'F', '81296534351', 0, 'Supangat', '81578640584', 'tyas@qareer.com', '3674046101900000', 'Jakarta', '1990-01-21', 'Anggariani Cahyaning Tyas', '45.563.677.9-411.000', 'Komp. Villa Mutiara Jl. Permata II blok ss / 21 RT 004 RW 004, Sawah Baru, Ciputat, Tangerang Selatan', 1, '539-504-0755', 'Anggariani Cahyaning Tyas', '', 0, 1, 0, '2007-01-01', '2010-01-01', 6, 'Economics and Business', 'Gadjah Mada University', 3.47, '2007-01-01', '2010-01-01', 6, 'Economics and Business', 'Gadjah Mada University', 0, '0000-00-00', '0000-00-00', 'PT. Reeracoen Indonesia', 'Team Leader - Consultant', '0000-00-00', '0000-00-00', '', '', 'Komp. Villa Mutiara Jl. Permata II Blok ss/ 21', 2, 315047),
(717193, 'Arie Ardiansyah', 'Business Development & Partnership Officer', 4, '', '2017-07-05', '0000-00-00', '0000-00-00', 1, 'M', '81317201551', 0, 'N/A', '0', 'arie@jobs.id', '1671091604800000', 'Unknown', '1900-01-00', '-', '-', '-', 1, '0', '-', '', 0, 1, 0, '1900-01-00', '1900-01-00', 6, 'N/A', 'N/A', 0, '1900-01-00', '1900-01-00', 6, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '-', 2, 1016162),
(717195, 'Yudha Fajar Arianda', 'ACCOUNT EXECUTIVE', 1, '', '2017-07-25', '0000-00-00', '0000-00-00', 1, 'M', '83878920087', 2147483647, 'Ayu Indah Lestari', '81212953101', 'fajar@jobs.id', '31740911871001', 'Jakarta', '1987-07-11', 'Yudha Fajar Arianda', '75.683.802.5-017.000', 'Jl Perum Mabad II/90 RT 04 RW 011 Kel Srengseh Sawah Kec Jagakarsa Jakarta Selatan', 1, '5015789252', 'Yudha Fajar Arianda', '', 0, 1, 0, '2013-01-01', '2015-01-01', 3, 'Science', 'SMA 2 Mei Ciputat', 0, '1900-01-27', '1900-01-27', 3, 'N/A', 'N/A', 0, '2013-02-01', '2015-08-01', 'PT.GLOBAL TELESHOP,TBK', 'CS Leader', '2007-05-01', '2012-10-01', 'Rumah Makan Omah Pucuk', 'Assisten Supervisor', '', 2, 814014),
(814012, 'Ayutia Syarifati Arista', 'Project Assistant', 8, 'Jobs.db', '2014-08-04', '0000-00-00', '0000-00-00', 1, 'F', '085697249600', NULL, 'Dwitri Oktaria', '081293914417', 'ayutia.arista@gmail.com', '3276065504910002', 'Jakarta', '1991-04-15', 'Ayutia Syarifati Arista', '71.305.500.2-412.000', '"Saidan - No.40 Rt.002 Rw.009\r\nKel. Tanah Baru Kec. Beji\r\nDepok Jawa Barat"', 1, '543-503-0014', 'Ayutia Syarifati Arista', '', 0, 2, NULL, '2009-08-01', '0000-00-00', 6, 'Public Health', 'University of Indonesia', 3.4, '2006-07-01', '2009-04-01', 3, 'Science', 'SMAN 49 Jakarta', 0, '2013-12-01', '2014-06-01', 'PT Promacho Cipta Bersama', 'Admin', '0000-00-00', '0000-00-00', '', '', '"Saidan - No.40 Rt.002 Rw.009\r\nKel. Tanah Baru Kec. Beji\r\nDepok Jawa Barat"', 2, 315047),
(814014, 'Zulfikri', 'SALES MANAGER', 1, 'Ref Stephen', '2014-08-15', '0000-00-00', '0000-00-00', 1, 'M', '0811-8774-550', 0, 'Yuliana', '081111 04048', 'zulfikri@jobs.id', '3276010404800024', 'Jakarta', '1980-04-04', 'Zulfikri', '59.094.868.3-412.000', 'Jl Cagar Alam RT 04 RW 06 No 12 Pancoran Mas Depok', 1, '5435029024', 'Zulfikri', '', 0, 2, 0, '0000-00-00', '2003-01-01', 6, 'Teknik Sipil', 'Universitas Negeri Jakarta', 2.84, '0000-00-00', '1997-01-01', 3, 'Science', 'SMU Sejahtera 1 Depok', 0, '2013-12-01', '2013-08-01', 'Bakrie Telecom tbk', 'Ass Manager Gerai Development & Sales', '2011-09-01', '2013-11-01', 'Bakrie Telecom tbk', 'CRM & Contact Center Assistant Manager', '', 2, 414002),
(814015, 'Samuel Adam Suhendra', 'DEVELOPER', 2, 'Ref Stephen', '2014-08-18', '0000-00-00', '0000-00-00', 1, 'M', '0818-0611-4538', 0, 'Anton', '81806379788', 'samuel@qerja.com', '3173010712890004', 'Jakarta', '1989-12-07', 'Samuel Adam Suhendra', '36.986.697.5-034.000', 'JL Nusa Indah III No.35 Rt 005 Rw 009\nKapuk, Cengkareng\nJakarta Barat, DKI Jakarta - 11720', 1, '3131301128', 'Samuel Adam Suhendra', '', 0, 2, 0, '0000-00-00', '2012-01-01', 6, 'Information System', 'Bina Nusantara', 3.43, '2005-06-01', '2008-06-01', 3, 'Science', 'SMA Kemurnian II Jakarta', 0, '2013-02-01', '2014-08-01', 'Vibiz Group', 'Web Developer', '2012-11-01', '2013-02-01', 'Moonlay Technologies', 'VBA Programmer', '', 2, 414002),
(816155, 'Muh. Zaenul Hilmi', 'DEVELOPER', 2, 'Raras Campaign', '2016-09-05', '2016-12-06', '0000-00-00', 1, 'M', '87763237592', 0, 'Suhaedi Asmarandana', '87863362666', 'hilmi@qerja.com', '5203030805920000', 'Selagik', '1992-05-08', 'Muh Zaenul Hilmi', '72.322.089.3-623.000', 'Jl. Mayjen Panjaitan XI No.12A Rt.03 Rw.04, Kel.Penanggungan, Kec. Klojen, Malang, Jawa Timur', 1, '440-130-8231', 'Muh Zaenul Hilmi', 'Muh Zaenul Hilmi', 2147483647, 1, 0, '2010-01-01', '2005-01-01', 6, 'Pendidikan Teknik Informatika', 'Universitas Negeri Malang', 3.46, '1900-01-07', '1900-01-07', 3, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', 'GOSITUS', '', '0000-00-00', '0000-00-00', 'KAPANLAGI NETWORK', 'Web Programmer', 'Jln KW II Ks. Tubun, Slipi Jakarta Barat', 2, 814015),
(914016, 'Kresna Abidjuono', 'ACCOUNT MANAGER', 1, 'Ref Stephen', '2014-09-25', '0000-00-00', '0000-00-00', 1, 'M', '0822-9806-3253', 0, 'Festya', '87781100410', 'kresna@jobs.id/', '3276022412850011', 'Jakarta', '1985-12-24', 'Kresna Abidjuono', '49.743.477.9-412.000', 'Kp Babakan Rawa Kalong RT 07 RW 06 Curug - Cimanggis Depok', 1, '084-073-1031', 'Kresna Abidjuono', '', 0, 2, 0, '0000-00-00', '2010-01-01', 6, 'Chemical Eng', 'Institut Sains & Tech Al-Kamal', 2.75, '2000-01-01', '2004-01-01', 3, 'Analis Kimia', 'SMK Analis Kimia Bogor', 0, '2007-01-01', '2014-06-01', 'PT. JobsDB Indonesia', 'Sr. Account Executive', '2005-02-01', '2006-01-01', 'PT. Bristol Myers Squibb Indonesia', 'QC Staff', 'Perum. Banjaran Residence Blok B3 No1. Cilangkap - Tapos, Depok', 2, 814014),
(915093, 'Ahmad Suherman', 'OFFICE SUPPORT', 6, 'Ref Karlina', '2015-09-07', '2015-11-27', '0000-00-00', 1, 'M', '85694876478', 0, 'Meli', '85714405476', 'ahmadsuherman75@ymail.com', '3201292011830000', 'Bogor', '1983-11-20', 'Ahmad Suherman', '77.410.574.6.434.000', 'Kp Parakan RT 02 RW 08, Parakan Ciomas, Bogor', 1, '806-001-1576', 'Ahmad Suherman', '', 0, 2, 2, '2003-01-01', '2003-01-01', 3, 'Social', 'SMAN 24 Jakarta', 0, '1900-01-03', '1900-01-03', 3, 'N/A', 'N/A', 0, '2007-01-01', '2015-01-01', 'PT Ganda Nusantara Persada', 'Operational', '0000-00-00', '0000-00-00', '', '', '', 2, 315047),
(916158, 'Alyanna Ysabel Uy Gonzales', 'SENIOR RECRUITER/ Research & Development Advisor', 10, 'Ref Pak Stephen', '2016-09-19', '2016-12-22', '0000-00-00', 1, 'F', '81380061832', 0, 'RJ Balmater', '811157985', 'alyanna@qerja.com', '3173026807895000', 'Manila', '1989-07-28', 'Alyanna Ysabel Gonzales', '09.154.519.4-053.000', 'c.o. PT Bo Le Indonesia\r\nJl. M. T. Haryono Kav.15 Gd. Graha Pratama Lt.18, Tebet Barat, Jakarta Selatan, 12810', 1, '005-056-3201', 'Alyanna Ysabel Uy Gonzales', 'Alyanna Ysabel Uy Gonzales', 2147483647, 1, 0, '0000-00-00', '2010-01-01', 6, 'BS BUSINESS ADMINISTRATION', 'UNIVERSITY OF THE PHILIPPINES - DILIMAN', 3.5, '1900-01-08', '1900-01-08', 3, 'N/A', 'N/A', 0, '2013-11-01', '2016-09-01', 'PT BO LE INDONESIA', 'SENIOR RESEARCH ASSOCIATE', '2013-01-01', '2013-11-01', 'PT AUDITSI UTAMA', 'RECRUITMENT CONSULTANT', 'A33BL TOWER AZALEA, MEDITERANIA RESIDENCES 1, JL TANJUNG DUREN, GROGOL, JAKARTA BARAT 11470', 2, 315047),
(1015098, 'Windi Endikasari', 'ACCOUNT EXECUTIVE', 1, 'KKF Wavoo', '2015-10-05', '2015-12-22', '0000-00-00', 1, 'F', '82111555047', 0, 'Weni', '81296441222', 'windiendika@gmail.com', '3276025901840000', 'Jakarta', '1984-01-19', 'Windi Endikasari', '87.189.620.5-412.000', 'Jalan Rajawali No 25 RT 2 RW 14 Mekarsari, Cimanggis, Depok', 1, '543-503-4303', 'Windi Endikasari', '', 0, 2, 0, '2001-01-01', '2004-01-01', 5, '', 'University of Indonesia', 2.89, '1998-06-01', '2001-01-01', 3, 'Science', 'SMA 39 Jakarta', 0, '2013-11-01', '2015-07-01', 'PR Bank Danamon', 'Personal Banking', '2013-02-01', '2013-09-01', 'Decimal Indonesia', 'Marketing Executive', '', 2, 814014),
(1015102, 'Theresia Natalia', 'ACCOUNT EXECUTIVE', 1, 'Ref Dwimar', '2015-10-19', '2016-02-24', '0000-00-00', 1, 'F', '81288976950', 0, 'Willyam', '81286400194', 'theresia@jobs.id', '3276055512920000', 'Depok', '1992-12-15', 'Theresia Natalia Loupatty', '74.722.877.3-412.000', 'Jl. Cisadane II No 104 Rt/Rw 005/014 Kel. Abadijaya Kec. Sukmajaya Depok Timur', 1, '684-029-1578', 'Theresia Natalia Loupatty', '', 0, 1, 0, '2013-01-01', '0000-00-00', 6, '', 'STIMA IMMI', 0, '2007-06-01', '2010-01-01', 3, 'Science', 'SMA Kasih, Depok', 0, '2014-12-01', '2015-07-01', 'PT Smart Wisom Group', 'Customer Service', '2012-10-01', '2014-10-01', 'PT Ace Jaya Proteksi', 'Telemarketing', '', 2, 814014),
(1016162, 'Geo Fany Suharwan', 'Affiliate & Training Manager', 4, 'LinkedIn', '2016-10-03', '2017-01-04', '0000-00-00', 1, 'M', '81317712943', 0, 'Noprilia', '81261621664', 'geo@jobs.id', '1671080808870010', 'Palembang', '1987-08-08', 'Geofany Suharwan', '69.682.883.9-301.000', 'Jl. Harapan Jaya III No.39 Rt.032 Rw.008, Sci Selayur, Kalidoni, Palembang', 1, '130-229-5705', 'Geo Fany Suharwan', 'Geo Fany Suharwan', 2147483647, 1, 0, '1900-01-01', '1900-01-01', 6, 'N/A', 'N/A', 0, '1900-01-01', '1900-01-01', 6, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', 'PT Thamrin Group', 'Spv HRD Operational', '0000-00-00', '0000-00-00', 'PT Erafone Retailindo', 'Jr Spv Trainer Area Jawa Timur', 'Jalan arjuna utara no 12 A Tomang', 2, 1016164),
(1016164, 'Wilson Yanaprasetya (Wilson Hendrikus)', 'DIRECTOR', 9, '', '2016-10-10', '0000-00-00', '0000-00-00', 1, 'M', '8176543298', 0, '', '', 'wilson@qerja.com', '3578090111840000', 'Surabaya', '1984-11-01', 'Wilson Hendrikus Yanaprasetya', '46.034.563.0-606.000', 'Klampis Anom 1/14, Klampis Ngasem, Sukolilo, Surabaya', 7, '306-0996391-8', 'Wilson Hendrikus Yanaprasetya', '', 0, 2, 1, '1900-01-02', '1900-01-02', 6, 'N/A', 'N/A', 0, '1900-01-02', '1900-01-02', 6, 'N/A', 'N/A', 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', 'Jl. Kembangan Murni II L.1/12 Rt.008 Rw.002, Kembangan Selatan, Kembangan, Jakarta Barat', 2, 0),
(1016166, 'Wishnu Wirawan', 'EXECUTIVE TELEMARKETING', 1, 'Ref Hanna', '2016-10-17', '2017-02-01', '0000-00-00', 1, 'M', '81315846840', 0, 'Waluyo Adhie', '8176601956', 'wishnu@jobs.id', '3275060602880000', 'Jakarta', '1988-02-06', 'Wishnu Wirawan', '81.600.915.3-427.000', 'Perintis 2 B No.384 RT001 RW008, Pejuang, Medan Satria, Bekasi, Jawa Barat', 1, '543-504-2969', 'Wishnu Wirawan', 'Wishnu Wirawan', 2147483647, 1, 0, '2006-08-01', '2011-01-01', 6, 'International Relationship', 'Jayabaya University', 2.9, '1900-01-12', '1900-01-12', 3, 'N/A', 'N/A', 0, '2011-09-01', '2013-04-20', 'PT JobsDB Indonesia', 'Account Executive to Lead Generation', '2015-08-01', '2015-08-01', 'PT Career Builder IndonesiaPT Hired Today Recruitment Solut', 'Customer CareAccount Executive', 'Perumahan Puri Harapan, Blok E1 No. 2, Desa Setia Asih, Kecamatan Tarumajaya, Kabupaten Bekasi', 2, 814014),
(1115108, 'Yela Yasri', 'ACCOUNT EXECUTIVE', 1, 'Reff Kresna', '2016-02-17', '2016-04-08', '0000-00-00', 1, 'F', '8129 1092 357', 0, 'Billy Arthajie ', '0812 3455 4770', 'yela@jobs.id', '1707104910850000', 'Palembang', '1985-10-09', 'Yela Yasri', '76.975.095.1-013.000', 'Jl. Kramat II No. 69B Rt.010, Rw.01, Pondok Pinang, Kebayoran Lama, Jakarta Selatan, DKI Jakarta', 1, '543-503-6861', 'Yela Yasri', 'Yela Yasri', 2147483647, 2, 0, '0000-00-00', '2006-01-01', 6, 'ISIP / International Relations ', 'Universitas Jember ', 3.11, '1900-01-04', '1900-01-04', 3, 'N/A', 'N/A', 0, '2013-10-01', '2015-09-01', 'PT JobsDB Indonesia ', 'Account Manager ', '2015-11-01', '2016-02-01', 'PT Jobstreet Indonesia', 'Senior Account Manager ', '', 2, 814014),
(1116169, 'Jefri Oki Setiaji', 'TELEMARKETING EXECUTIVE', 1, 'Ref Wishnu', '2016-11-29', '2017-03-14', '0000-00-00', 1, 'M', '85692195308', 2147483647, 'Risma Nurlaksita Ratna', '0858 1736 8995', 'jefri@jobs.id', '3671130310840000', 'Jakarta', '1984-10-03', 'Jefri Oki Setiaji', '97.227.391.6-416.000', 'Jl. Sunan Kalijaga No.26 Rt.01 Rw.10, Larangan Indah, Larangan, Tangerang', 1, '543-504-3329', 'Jefri Oki Setiaji', '', 0, 2, 1, '2003-01-01', '2009-01-01', 6, 'Faculty of Letter (Sastra Inggris)', 'Gunadarma University', 0, '1900-01-13', '1900-01-13', 3, 'N/A', 'N/A', 0, '2015-09-01', '2016-09-01', 'PT Careerbuilder Indonesia', 'Sales Supervisor/ Account Manager', '2014-12-01', '2015-08-01', 'PT Prima News Indonesia', 'Marketing Supervisor', 'Jl. Sunan Kalijaga Rt.001/010 No.26, Larangan Indah, Ciledug, Tangerang, 15154', 2, 814014),
(1214020, 'Yayan Kuswara', 'SOFTWARE TESTER', 3, '', '2014-12-01', '0000-00-00', '0000-00-00', 1, 'M', '0896-0182-1266', 0, 'Sahrul Fuad', '89619361697', 'yayan_kuswara@yahoo.com', '31720419129100001', 'Jakarta', '1991-12-19', 'Yayan Kuswara', '45.333.189.4-045.000', 'Jl. Kalibaru Timur 1 No. 9b RT 013/02, Kalibaru, Cilincing\nJakarta Utara - 14110', 1, '211-131-4383', 'Yayan Kuswara', '', 0, 2, 0, '0000-00-00', '0000-00-00', 6, 'Design Product', 'Mercubuana', 0, '2006-06-01', '2009-04-01', 3, 'Science', 'SMAN 52 Jakarta', 0, '2010-10-01', '2014-09-01', 'PT Indomarco Prismatama', 'Merchandising Clerk', '2010-01-01', '2010-07-01', 'Warnet Quantum', 'Operator', '', 2, 814015),
(1214021, 'Ribka Setiawati', 'ANALYST', 1, '', '2014-12-03', '0000-00-00', '0000-00-00', 1, 'F', '0899-6909-412', 0, 'Claudia', '8997913309', 'ribka@jobs.id', '3273184702890009', 'Bandung', '1989-02-07', 'Ribka Setiawati', '09.360.628.3-423.000', 'Jl Muararajeun No 28, Cihaurgeulis - Cibeunying Kaler Bandung', 1, '156-141-8531', 'Ribka Setiawati', '', 0, 1, 0, '0000-00-00', '2012-01-01', 6, 'Physics', 'Bandung Technology Institute', 3.02, '2004-06-01', '2007-06-01', 3, 'Science', 'SMA Advent Bandung', 0, '2014-01-01', '2014-09-01', 'PT Flowcrete Indonesia', 'Sales Executive', '2013-04-01', '2013-12-01', 'PT Probindo Artika Jaya', 'Analyst', '', 2, 414002),
(1215113, 'Ibnu Ilyas Syaban Nugraha', 'PROJECT ASSISTANT', 4, 'Jobstreet', '2015-12-07', '2016-03-18', '0000-00-00', 1, 'M', '89654744147', 0, 'Sugino', '81382387690', 'ilyas@jobs.id', '3175091403910000', 'Jakarta', '1991-03-14', 'Ibnu Ilyas Syaban Nugraha', '75.537.954.2-009.000', 'JL. Asmin Rt 008 Rw 003, Kel. Susukan, Kec. Ciracas, Jakarta Timur', 1, '165-246-7339', 'Ibnu Ilyas Syaban Nugraha', '', 0, 1, 0, '2006-01-01', '2009-01-01', 3, 'Science', 'SMA Negeri 1 Magelang', 0, '1900-01-00', '1900-01-00', 3, 'N/A', 'N/A', 0, '2013-09-01', '2015-12-01', 'MEGACOM', 'RETAIL SALESPERSON', '0000-00-00', '0000-00-00', '', '', '', 2, 1016162),
(1215115, 'Johnson', 'FRONTEND DEVELOPER', 2, 'LinkedIn Sherly', '2015-12-10', '2016-03-10', '0000-00-00', 1, 'M', '021-6630073', 2147483647, 'Jony', '818990956', 'johnson.lin.286@gmail.com', '3172012807860000', 'Medan', '1986-07-28', 'Johnson', '35.509.904.5-041.000', 'Terusan Bandengan Utara 89/24 RT 014 RW 016 Pejagalan - Penjaringan Jakarta Utara', 1, '074-120-6390', 'Yonson', '', 0, 1, 0, '0000-00-00', '2005-01-01', 3, '', 'PRMI Methodist', 0, '1900-01-01', '1900-01-01', 3, 'N/A', 'N/A', 0, '2014-01-01', '2015-01-01', 'Mirum Agency', 'Front-end developer', '2012-01-01', '2014-01-01', 'XM Gravity', 'Front-end developer', '', 2, 814015);

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
(5, 'Probation'),
(6, 'Inactive');

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

--
-- Dumping data for table `table_leave_request`
--

INSERT INTO `table_leave_request` (`id_leave`, `id_number`, `date_request`, `date_from`, `date_to`, `days`, `leave_type`, `approval`, `purpose`, `contact`) VALUES
(36, 714009, '2017-12-07', '2017-12-15', '2017-12-15', 1, 1, 'Y', 'Test cuti', '08998877331'),
(37, 315047, '2017-12-08', '2017-12-22', '2017-12-22', 1, 1, 'N', 'Hohoho', '08998877331'),
(38, 315047, '2017-12-08', '2017-12-29', '2017-12-29', 1, 1, 'N', 'Test 2', '08998877331'),
(39, 315047, '2017-12-08', '2018-01-05', '2018-01-05', 1, 1, 'N', 'Test 3', '08998877331'),
(40, 315047, '2017-12-08', '2017-12-27', '2017-12-27', 1, 1, 'N', 'ohohohohohoh', '08998877331'),
(41, 315047, '2017-12-08', '2017-12-21', '2017-12-21', 1, 1, 'N', 'qokwokwokwokw', '08998877331'),
(42, 315047, '2017-12-08', '2017-12-20', '2017-12-20', 1, 1, NULL, 'test function', '08998877331'),
(43, 814012, '2017-12-08', '2017-12-15', '2017-12-15', 1, 1, 'Y', 'Test function', '08998877331'),
(44, 0, '2017-12-08', '2017-12-15', '2017-12-15', 1, 1, 'N', 'awokwokwokwokwokwokw', '08998877331'),
(45, 315049, '2017-12-20', '2017-12-22', '2017-12-22', 1, 1, NULL, 'Farming', '08998877331'),
(46, 814012, '2017-12-20', '2017-12-29', '2017-12-29', 1, 1, NULL, 'Izin saja', '08998877331');

-- --------------------------------------------------------

--
-- Table structure for table `table_leave_type`
--

CREATE TABLE `table_leave_type` (
  `id_type` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_leave_type`
--

INSERT INTO `table_leave_type` (`id_type`, `name`) VALUES
(1, 'Annual Leave'),
(2, 'Unpaid Leave'),
(3, 'Special Leave'),
(4, 'Advance Leave');

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
-- Table structure for table `table_trial`
--

CREATE TABLE `table_trial` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `umur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_trial`
--

INSERT INTO `table_trial` (`id`, `nama`, `email`, `alamat`, `umur`) VALUES
(1, 'denny', 'denny@insurgent.id', 'kp. buaran', 23),
(6, 'wayan', 'wayan@email.com', 'gianyar', 24),
(7, 'made', 'made@email.com', 'denpasar', 31),
(8, 'nyoman', 'nyoman@email.com', 'bangli', 19),
(9, 'ketut', 'ketut@email.com', 'badung', 22),
(10, 'wayan', 'wayan@email.com', 'gianyar', 24),
(11, 'made', 'made@email.com', 'denpasar', 31),
(12, 'nyoman', 'nyoman@email.com', 'bangli', 19),
(13, 'ketut', 'ketut@email.com', 'badung', 22);

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
(1, 0, 'f69b5bbb6724d2d417a3c9f30a4ed45e', 1, 'Y'),
(5, 814012, '3dc09221888d3939057c6be41588a1bb', 2, 'Y'),
(17, 315047, 'ee02eec6ef35a8466be5eaf35c08e1ae', 3, 'Y'),
(18, 414002, 'b575b1d1886fdb58eb618f67f3c4ce9a', 3, 'Y'),
(19, 1016162, 'ede0f1183828b5d5c85925e3ed9ab025', 3, 'Y'),
(20, 1016164, 'aeccd46367b652a1874586a6a734df31', 3, 'Y'),
(21, 814014, '7980b1696e8f448df09bdf30549cf9cf', 3, 'Y'),
(22, 814015, '354bff061159cb539c94aed8838aa4e0', 3, 'Y'),
(23, 714009, '0ff77e922ce79a0c307ab9bdf5dba65b', 4, 'Y'),
(26, 315049, '213980b1427763e513534e2d20753f06', 4, 'Y');

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
-- Indexes for table `table_trial`
--
ALTER TABLE `table_trial`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_bank` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `table_degree`
--
ALTER TABLE `table_degree`
  MODIFY `id_degree` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `table_department`
--
ALTER TABLE `table_department`
  MODIFY `id_dep` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `table_employment_status`
--
ALTER TABLE `table_employment_status`
  MODIFY `id_emp_status` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `table_leave_request`
--
ALTER TABLE `table_leave_request`
  MODIFY `id_leave` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `table_leave_type`
--
ALTER TABLE `table_leave_type`
  MODIFY `id_type` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table_marital_status`
--
ALTER TABLE `table_marital_status`
  MODIFY `id_mar_status` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_trial`
--
ALTER TABLE `table_trial`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
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
