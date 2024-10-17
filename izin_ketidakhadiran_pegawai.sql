-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2024 at 08:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izin_ketidakhadiran_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `izin_ketidakhadiran_pegawai`
--

CREATE TABLE `izin_ketidakhadiran_pegawai` (
  `izin_id` int NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `finger_print` varchar(20) NOT NULL,
  `tgl_mulai_izin` date NOT NULL,
  `durasi_izin_hari` varchar(20) NOT NULL,
  `durasi_izin_jam` varchar(20) NOT NULL,
  `durasi_izin_menit` varchar(20) NOT NULL,
  `nama_pengusul` varchar(255) NOT NULL,
  `tgl_usul` date NOT NULL,
  `ttd_pengusul` varchar(255) NOT NULL,
  `putusan` varchar(50) NOT NULL,
  `tgl_disetujui` date NOT NULL,
  `ttd_atasan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `izin_ketidakhadiran_pegawai`
--

INSERT INTO `izin_ketidakhadiran_pegawai` (`izin_id`, `keperluan`, `finger_print`, `tgl_mulai_izin`, `durasi_izin_hari`, `durasi_izin_jam`, `durasi_izin_menit`, `nama_pengusul`, `tgl_usul`, `ttd_pengusul`, `putusan`, `tgl_disetujui`, `ttd_atasan`, `catatan`, `dosen`) VALUES
(3, 'Cuti', '2424234', '2024-10-17', '2 hari', '48 Jam', '2880', 'Galih', '2024-10-15', 'ggggg', 'Tidak disetujui', '2024-10-15', 'dddd', 'Tidak ada catatan tambahan', 'Dr. Budi Santoso'),
(4, 'Sakit', '2424', '2024-10-15', '3 Hari', '72 jam', '3000', 'Bunga Melati', '2024-10-15', 'bb', 'Disetujui', '2024-10-15', 'rr', 'semoga cepat sembuh', 'Hendra Wijaya, S.kom'),
(5, 'Cuti', '12345', '2024-11-06', '5 Hari', '120 jam', '7200', 'Galih', '2024-10-16', 'ggg', 'Disetujui', '2024-10-18', 'rrrr', 'Selamat Berlibur', 'Mario Dendy'),
(6, 'Terlambat', '123134', '2024-10-16', '1 hari', '24 jam', '1200', 'Celine Angelista', '2024-10-16', 'ggg', 'Disetujui', '2024-10-16', 'rrrr', 'Jangan Bangun Kesiangan lagi yaa', 'Andin Saputri'),
(7, 'Cuti', '3141434', '2024-10-15', '1 hari', '24 jam', '1200', 'Andin Ardelina ', '2024-10-15', 'aaa', 'Disetujui', '2024-10-15', 'rrrr', 'Jangan Tidur kemaleman yaa', 'Eko Prasetyo'),
(8, 'Sakit', '21231412', '2024-10-01', '2 hari', '48 Jam', '2880', 'Galih', '2024-10-01', 'gggg', 'Tidak disetujui', '2024-10-01', 'rrrr', 'Semoga cepet sembuh', 'Eko Prasetyo'),
(9, 'Sakit', '13425346', '2024-10-17', '2 hari', '48 Jam', '1200', 'Galih Fitria', '2024-10-17', 'wwww', 'Disetujui', '2024-10-17', 'rrrr', 'Semoga Cepat Sembuh', 'Aditya Saputra'),
(10, 'Cuti', '1312345', '2024-10-15', '2 hari', '48 jam', '334234', 'Amanda', '2024-10-13', 'rrrr', 'Tidak disetujui', '2024-10-13', 'rrrr', 'rwrwrwer', 'sdfsdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `izin_ketidakhadiran_pegawai`
--
ALTER TABLE `izin_ketidakhadiran_pegawai`
  ADD PRIMARY KEY (`izin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `izin_ketidakhadiran_pegawai`
--
ALTER TABLE `izin_ketidakhadiran_pegawai`
  MODIFY `izin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
