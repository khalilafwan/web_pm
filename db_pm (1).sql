-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 07:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login_id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'design', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'program', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'checker', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'nesting', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `admin_akses`
--

CREATE TABLE `admin_akses` (
  `login_id` int(11) NOT NULL,
  `akses_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_akses`
--

INSERT INTO `admin_akses` (`login_id`, `akses_id`) VALUES
(1, 'design'),
(1, 'nesting'),
(3, 'design'),
(6, 'program'),
(7, 'checker'),
(1, 'program'),
(1, 'checker'),
(8, 'nesting'),
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_monitoring`
--

CREATE TABLE `data_monitoring` (
  `id` varchar(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `date_pbi` date NOT NULL,
  `no_jo` varchar(255) DEFAULT NULL,
  `tgl_jo` date DEFAULT NULL,
  `nama_project` varchar(255) NOT NULL,
  `kode_gbj` varchar(255) DEFAULT NULL,
  `nilai_harga` decimal(10,2) DEFAULT NULL,
  `nama_panel` varchar(255) NOT NULL,
  `tipe_jenis` varchar(10) DEFAULT NULL,
  `tipe_fswm` varchar(4) DEFAULT NULL,
  `qty_unit` int(5) DEFAULT NULL,
  `qty_cell` int(5) DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `nomor_wo` int(255) DEFAULT NULL,
  `nomor_seri` int(255) DEFAULT NULL,
  `pbi` int(11) NOT NULL,
  `size_panel_height` int(11) NOT NULL,
  `size_panel_width` int(11) NOT NULL,
  `size_panel_deep` int(11) NOT NULL,
  `mh_std` date DEFAULT NULL,
  `mh_aktual` date DEFAULT NULL,
  `tgl_submit_dwg` date DEFAULT NULL,
  `tgl_approved` date DEFAULT NULL,
  `tgl_release_dwg` date DEFAULT NULL,
  `type_panel` varchar(25) NOT NULL,
  `unit` int(11) NOT NULL,
  `cell` int(11) NOT NULL,
  `target_ppc` date NOT NULL,
  `target_eng` date NOT NULL,
  `design_pic` varchar(11) NOT NULL,
  `design_start` date NOT NULL,
  `design_end` date NOT NULL,
  `nesting_pic` varchar(11) NOT NULL,
  `nesting_start` date NOT NULL,
  `nesting_end` date NOT NULL,
  `program_pic` varchar(11) NOT NULL,
  `program_start` date NOT NULL,
  `program_end` date NOT NULL,
  `checker_pic` varchar(11) NOT NULL,
  `checker_start` date NOT NULL,
  `checker_end` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `eng_panel` varchar(111) NOT NULL,
  `busbar` varchar(11) NOT NULL,
  `box_selesai` varchar(255) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `tgl_terbit_wo` date DEFAULT NULL,
  `plan_start_produksi` date DEFAULT NULL,
  `aktual_start_produksi` date DEFAULT NULL,
  `plan_fg_wo` date DEFAULT NULL,
  `aktual_fg_wo` date DEFAULT NULL,
  `progress` float DEFAULT NULL,
  `desc_progress` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `delivery_no` int(255) DEFAULT NULL,
  `delivery_tgl` date DEFAULT NULL,
  `keterangan_delivery` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_monitoring`
--

INSERT INTO `data_monitoring` (`id`, `nomor`, `date_pbi`, `no_jo`, `tgl_jo`, `nama_project`, `kode_gbj`, `nilai_harga`, `nama_panel`, `tipe_jenis`, `tipe_fswm`, `qty_unit`, `qty_cell`, `warna`, `nomor_wo`, `nomor_seri`, `pbi`, `size_panel_height`, `size_panel_width`, `size_panel_deep`, `mh_std`, `mh_aktual`, `tgl_submit_dwg`, `tgl_approved`, `tgl_release_dwg`, `type_panel`, `unit`, `cell`, `target_ppc`, `target_eng`, `design_pic`, `design_start`, `design_end`, `nesting_pic`, `nesting_start`, `nesting_end`, `program_pic`, `program_start`, `program_end`, `checker_pic`, `checker_start`, `checker_end`, `keterangan`, `eng_panel`, `busbar`, `box_selesai`, `due_date`, `tgl_terbit_wo`, `plan_start_produksi`, `aktual_start_produksi`, `plan_fg_wo`, `aktual_fg_wo`, `progress`, `desc_progress`, `status`, `delivery_no`, `delivery_tgl`, `keterangan_delivery`) VALUES
('P1', 2, '2023-01-05', NULL, NULL, 'SBSN PRASARANA LABORATORIUM PENGUJIAN MUTU DAN KEAMANAN\r\n\r\n', NULL, NULL, 'PP-OU.AC\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1100, 800, 250, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-18', '2024-01-15', 'QH', '2024-01-08', '2024-01-08', 'AD', '2024-01-08', '2024-01-08', 'AD', '2024-01-08', '2024-01-08', 'MD', '2024-01-08', '2024-01-08', 'TELAT', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P10', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-5.B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-19', '2024-01-16', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P11', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-6.A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-19', '2024-01-16', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P12', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-6.B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-19', '2024-01-16', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P13', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-7.A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-19', '2024-01-16', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P14', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-7.B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-19', '2024-01-16', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P15', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-PH.A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-19', '2024-01-16', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P16', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-AT.2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-19', '2024-01-16', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P17', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'P.SD-H', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2000, 4, 800, NULL, NULL, NULL, NULL, NULL, 'FS', 1, 4, '2024-01-22', '2024-01-17', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P2', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-1.B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-18', '2024-01-15', 'QH', '2024-01-10', '2024-01-10', 'MD', '2024-01-18', '2024-01-18', 'RH', '2024-01-18', '2024-01-18', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P3', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-2.A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-18', '2024-01-15', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P4', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-2.B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-18', '2024-01-15', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P5', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-3.A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-18', '2024-01-15', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P6', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-3.B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-18', '2024-01-15', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P7', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-4.A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-18', '2024-01-15', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P8', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-4.B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-18', '2024-01-15', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('P9', 3, '2024-01-05', NULL, NULL, 'HOTEL LABERSA SAMOSIR', NULL, NULL, 'PAC-5.A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 700, 500, 200, NULL, NULL, NULL, NULL, NULL, 'WM', 1, 0, '2024-01-18', '2024-01-15', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konsesi`
--

CREATE TABLE `konsesi` (
  `id_konsesi` varchar(5) NOT NULL,
  `jo` varchar(255) DEFAULT NULL,
  `wo` varchar(255) DEFAULT NULL,
  `nama_project` varchar(255) DEFAULT NULL,
  `nama_panel` varchar(255) DEFAULT NULL,
  `unit` int(5) DEFAULT NULL,
  `jenis` varchar(5) DEFAULT NULL,
  `konsesi` varchar(255) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `tgl_matrial_dtg` date DEFAULT NULL,
  `tgl_pasang` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_akses`
--

CREATE TABLE `master_akses` (
  `akses_id` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_akses`
--

INSERT INTO `master_akses` (`akses_id`, `nama`) VALUES
('admin', 'Admin'),
('checker', 'Checker'),
('design', 'Design'),
('nesting', 'Nesting'),
('program', 'Program');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `admin_akses`
--
ALTER TABLE `admin_akses`
  ADD KEY `akses_id` (`akses_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `data_monitoring`
--
ALTER TABLE `data_monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsesi`
--
ALTER TABLE `konsesi`
  ADD PRIMARY KEY (`id_konsesi`);

--
-- Indexes for table `master_akses`
--
ALTER TABLE `master_akses`
  ADD PRIMARY KEY (`akses_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_akses`
--
ALTER TABLE `admin_akses`
  ADD CONSTRAINT `admin_akses_ibfk_1` FOREIGN KEY (`akses_id`) REFERENCES `master_akses` (`akses_id`),
  ADD CONSTRAINT `admin_akses_ibfk_2` FOREIGN KEY (`login_id`) REFERENCES `admin` (`login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
