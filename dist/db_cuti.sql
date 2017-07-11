-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2016 at 04:00 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_cuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mohoncuti`
--

CREATE TABLE IF NOT EXISTS `tb_mohoncuti` (
  `no_cuti` varchar(5) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `tgl` date DEFAULT NULL,
  `dari` date DEFAULT NULL,
  `sampai` date DEFAULT NULL,
  `jml_hari` int(2) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `persetujuan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mohoncuti`
--

INSERT INTO `tb_mohoncuti` (`no_cuti`, `nip`, `tgl`, `dari`, `sampai`, `jml_hari`, `jenis`, `persetujuan`) VALUES
('00001', 'PEG-000001', '2007-05-11', '2016-05-20', '2016-05-22', 3, 'Nikah', ''),
('00002', 'PEG-000001', '2013-05-29', '2016-06-01', '2016-06-02', 2, 'Tahunan', 'DISETUJUI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `nip` varchar(10) NOT NULL DEFAULT '',
  `nama` varchar(64) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `jab` varchar(32) NOT NULL,
  `tmp_lhr` varchar(32) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `hak_cuti_tahunan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `nama`, `jk`, `jab`, `tmp_lhr`, `tgl_lhr`, `gol_darah`, `agama`, `status`, `telp`, `alamat`, `hak_cuti_tahunan`) VALUES
('PEG-000001', 'Budiman H', 'L', 'Manager', 'Cilacap', '2016-04-01', 'AB', 'Islam', 'K1', '085714057686', 'Jakarta', 10),
('PEG-000002', 'Raef', 'L', 'Supervisor', 'Banyumas', '2016-05-03', 'AB', 'Islam', 'K1', '098787771324', 'Purwokerto', 12),
('PEG-000003', 'Kun Anta', 'P', 'GL', 'Istanbul', '2016-05-06', 'A', 'Islam', 'K1', '028245431213', 'Turkey', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(16) NOT NULL,
  `aktif` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `password`, `hak_akses`, `aktif`) VALUES
('admin', 'Andi Hatmoko', '123', 'Admin', 'Y'),
('hrd', 'Najwa', '123', 'HRD', 'Y'),
('PEG-000001', 'Budiman', '123', 'Pegawai', 'Y'),
('PEG-000002', 'Raef', '123', 'Pegawai', 'Y'),
('PEG-000003', 'Kun Anta', '123', 'Pegawai', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mohoncuti`
--
ALTER TABLE `tb_mohoncuti`
 ADD PRIMARY KEY (`no_cuti`), ADD KEY `id_mohoncuti` (`nip`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
