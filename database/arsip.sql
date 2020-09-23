-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 09:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(5) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `pengirim` varchar(20) DEFAULT NULL,
  `penerima` varchar(50) DEFAULT NULL,
  `asal` varchar(50) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `kategori` varchar(10) NOT NULL,
  `tgl_terima` date DEFAULT NULL,
  `waktu_terima` varchar(13) DEFAULT NULL,
  `perihal` text,
  `nomor` varchar(10) DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `tgl_post` varchar(15) DEFAULT NULL,
  `waktu_post` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `dokumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `jenis`, `kode`, `pengirim`, `penerima`, `asal`, `keterangan`, `kategori`, `tgl_terima`, `waktu_terima`, `perihal`, `nomor`, `tgl_kirim`, `tgl_post`, `waktu_post`, `foto`, `dokumen`) VALUES
(1, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:50', 'izin', '1', NULL, '23-Sep-20', NULL, NULL, ''),
(2, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:50', 'izin', '2', NULL, '23-Sep-20', NULL, NULL, ''),
(3, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:50', 'izin', '3', NULL, '23-Sep-20', NULL, NULL, ''),
(4, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:50', 'izin', '4', NULL, '23-Sep-20', NULL, NULL, ''),
(5, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:50', 'izin', '5', NULL, '23-Sep-20', NULL, NULL, ''),
(6, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:50', 'izin', '6', NULL, '23-Sep-20', NULL, NULL, ''),
(7, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:50', 'izin', '7', NULL, '23-Sep-20', NULL, NULL, ''),
(8, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:50', 'izin', '8', NULL, '23-Sep-20', NULL, NULL, ''),
(9, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:51', 'izin', '9', NULL, '23-Sep-20', NULL, NULL, ''),
(10, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:51', 'izin', '10', NULL, '23-Sep-20', NULL, NULL, ''),
(11, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:51', 'izin', '11', NULL, '23-Sep-20', NULL, NULL, ''),
(12, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:51', 'izin', '12', NULL, '23-Sep-20', NULL, NULL, ''),
(13, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:51', 'izin', '13', NULL, '23-Sep-20', NULL, NULL, ''),
(14, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:51', 'izin', '14', NULL, '23-Sep-20', NULL, NULL, ''),
(15, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:51', 'izin', '15', NULL, '23-Sep-20', NULL, NULL, ''),
(16, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:51', 'izin', '16', NULL, '23-Sep-20', NULL, NULL, ''),
(17, 'surat-masuk', NULL, 'aku', 'kamu', 'tangerang', 'izin ', '', '0000-00-00', '08:39:51', 'izin', '17', NULL, '23-Sep-20', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(10) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `waktu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `hak_akses`, `tanggal`, `waktu`) VALUES
(1, 'admin', 'admino', '21232f297a57a5a743894a0e4a801fc3', 'admin', '21-Sep-20', '11:47:03'),
(3, 'Staff', 'staff-camat', '6f12b1f68ff03384638a3577d201bac8', 'kasubag', '21-Sep-20', '09:59:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
