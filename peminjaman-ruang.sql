-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 12:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman-ruang`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `editJadwal` (IN `kode_ruang_param` CHAR(5), IN `nama_kelas_param` VARCHAR(10), IN `prodi_param` VARCHAR(3), IN `nama_dosen_param` VARCHAR(50), IN `hari_param` VARCHAR(7), IN `waktu_mulai_param` TIME, IN `waktu_selesai_param` TIME, IN `matkul_param` VARCHAR(59), IN `id_param` INT)   BEGIN
    DECLARE id_kelas_result INT;
    DECLARE kode_dosen_result VARCHAR(3);

    SELECT id INTO id_kelas_result FROM kelas WHERE nama_kelas = nama_kelas_param AND prodi = prodi_param;

    SELECT kode INTO kode_dosen_result FROM dosen WHERE nama_dosen = nama_dosen_param;

    UPDATE jadwal SET
        kode_ruang = kode_ruang_param,
        id_kelas = id_kelas_result,
        kode_dosen = kode_dosen_result,
        hari = hari_param,
        waktu_mulai = waktu_mulai_param,
        waktu_selesai = waktu_selesai_param,
        matkul = matkul_param
    WHERE id = id_param;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `tambahJadwal` (IN `p_kode_ruang` CHAR(5), IN `p_nama_kelas` VARCHAR(50), IN `p_prodi` ENUM('TI','SIB','PLS'), IN `p_nama_dosen` VARCHAR(50), IN `p_hari` VARCHAR(7), IN `p_waktu_mulai` TIME, IN `p_waktu_selesai` TIME, IN `p_matkul` VARCHAR(59))   BEGIN
    DECLARE v_id_kelas INT;
    DECLARE v_kode_dosen VARCHAR(3);

    -- Dapatkan ID kelas berdasarkan nama_kelas dan prodi
    SELECT id INTO v_id_kelas FROM kelas WHERE nama_kelas = p_nama_kelas AND prodi = p_prodi;

    -- Dapatkan kode dosen berdasarkan nama_dosen
    SELECT kode INTO v_kode_dosen FROM dosen WHERE nama_dosen = p_nama_dosen;

    -- Tambahkan jadwal baru
    INSERT INTO jadwal (kode_ruang, id_kelas, kode_dosen, hari, waktu_mulai, waktu_selesai, matkul)
    VALUES (p_kode_ruang, v_id_kelas, v_kode_dosen, p_hari, p_waktu_mulai, p_waktu_selesai, p_matkul);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updatePeminjamanStatus` ()   BEGIN
    UPDATE peminjaman
    SET status = 'Selesai'
    WHERE NOW() > tanggal_kembali;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `getJumlahDosen` () RETURNS INT(11)  BEGIN
    DECLARE jumlah_dosen INT;
    SELECT COUNT(*) INTO jumlah_dosen FROM dosen;
    RETURN jumlah_dosen;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `peminjaman_by_status` (`status_param` ENUM('Proses','Selesai')) RETURNS INT(11)  BEGIN
    DECLARE jumlah INT;
    SELECT COUNT(*) INTO jumlah FROM peminjaman WHERE status = status_param;
    RETURN jumlah;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_ruangan`
--

CREATE TABLE `detail_ruangan` (
  `id` int(11) NOT NULL,
  `kode_ruangan` char(5) NOT NULL,
  `id_fasilitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_ruangan`
--

INSERT INTO `detail_ruangan` (`id`, `kode_ruangan`, `id_fasilitas`) VALUES
(1, 'LAI1', 1),
(2, 'LAI1', 2),
(3, 'LAI1', 3),
(4, 'LAI1', 4),
(5, 'LAI1', 5),
(6, 'LAI2', 1),
(7, 'LAI2', 2),
(8, 'LAI2', 3),
(9, 'LAI2', 4),
(10, 'LAI2', 5),
(11, 'LERP', 1),
(12, 'LERP', 2),
(13, 'LERP', 3),
(14, 'LERP', 4),
(15, 'LERP', 5),
(16, 'LIG1', 1),
(17, 'LIG1', 2),
(18, 'LIG1', 3),
(19, 'LIG1', 4),
(20, 'LIG1', 5),
(21, 'LIG2', 1),
(22, 'LIG2', 2),
(23, 'LIG2', 3),
(24, 'LIG2', 4),
(25, 'LIG2', 5),
(26, 'LKJ1', 1),
(27, 'LKJ1', 2),
(28, 'LKJ1', 3),
(29, 'LKJ1', 4),
(30, 'LKJ1', 5),
(31, 'LKJ2', 1),
(32, 'LKJ2', 2),
(33, 'LKJ2', 3),
(34, 'LKJ2', 4),
(35, 'LKJ2', 5),
(36, 'LKJ3', 1),
(37, 'LKJ3', 2),
(38, 'LKJ3', 3),
(39, 'LKJ3', 4),
(40, 'LKJ3', 5),
(41, 'LPR1', 1),
(42, 'LPR1', 2),
(43, 'LPR1', 3),
(44, 'LPR1', 4),
(45, 'LPR1', 5),
(46, 'LPR2', 1),
(47, 'LPR2', 2),
(48, 'LPR2', 3),
(49, 'LPR2', 4),
(50, 'LPR2', 5),
(51, 'LPR3', 1),
(52, 'LPR3', 2),
(53, 'LPR3', 3),
(54, 'LPR3', 4),
(55, 'LPR3', 5),
(56, 'LPR4', 1),
(57, 'LPR4', 2),
(58, 'LPR4', 3),
(59, 'LPR4', 4),
(60, 'LPR4', 5),
(61, 'LPR5', 1),
(62, 'LPR5', 2),
(63, 'LPR5', 3),
(64, 'LPR5', 4),
(65, 'LPR5', 5),
(66, 'LPR6', 1),
(67, 'LPR6', 2),
(68, 'LPR6', 3),
(69, 'LPR6', 4),
(70, 'LPR6', 5),
(71, 'LPR7', 1),
(72, 'LPR7', 2),
(73, 'LPR7', 3),
(74, 'LPR7', 4),
(75, 'LPR7', 5),
(76, 'LPR8', 1),
(77, 'LPR8', 2),
(78, 'LPR8', 3),
(79, 'LPR8', 4),
(80, 'LPR8', 5),
(81, 'LPY1', 1),
(82, 'LPY1', 2),
(83, 'LPY1', 3),
(84, 'LPY1', 4),
(85, 'LPY1', 5),
(86, 'LPY2', 1),
(87, 'LPY2', 2),
(88, 'LPY2', 3),
(89, 'LPY2', 4),
(90, 'LPY2', 5),
(91, 'LPY3', 1),
(92, 'LPY3', 2),
(93, 'LPY3', 3),
(94, 'LPY3', 4),
(95, 'LPY3', 5),
(96, 'LSI1', 1),
(97, 'LSI1', 2),
(98, 'LSI2', 1),
(99, 'LSI2', 2),
(100, 'LSI3', 1),
(101, 'LSI3', 2),
(102, 'RT01', 1),
(103, 'RT01', 2),
(104, 'RT01', 3),
(105, 'RT01', 4),
(106, 'RT01', 5),
(107, 'RT02', 1),
(108, 'RT02', 2),
(109, 'RT02', 3),
(110, 'RT02', 4),
(111, 'RT02', 5),
(112, 'RT03', 1),
(113, 'RT03', 2),
(114, 'RT03', 3),
(115, 'RT03', 4),
(116, 'RT03', 5),
(117, 'RT04', 1),
(118, 'RT04', 2),
(119, 'RT04', 3),
(120, 'RT04', 4),
(121, 'RT04', 5),
(122, 'RT05', 1),
(123, 'RT05', 2),
(124, 'RT05', 3),
(125, 'RT05', 4),
(126, 'RT05', 5),
(127, 'RT06', 1),
(128, 'RT06', 2),
(129, 'RT06', 3),
(130, 'RT06', 4),
(131, 'RT06', 5),
(132, 'RT07', 1),
(133, 'RT07', 2),
(134, 'RT07', 3),
(135, 'RT07', 4),
(136, 'RT07', 5),
(137, 'RT08', 1),
(138, 'RT08', 2),
(139, 'RT08', 3),
(140, 'RT08', 4),
(141, 'RT08', 5),
(142, 'RT09', 1),
(143, 'RT09', 2),
(144, 'RT09', 3),
(145, 'RT09', 4),
(146, 'RT09', 5),
(147, 'RT10', 1),
(148, 'RT10', 2),
(149, 'RT10', 3),
(150, 'RT10', 4),
(151, 'RT10', 5),
(152, 'RT13', 1),
(153, 'RT13', 2),
(154, 'RT13', 3),
(155, 'RT13', 4),
(156, 'RT13', 5),
(157, 'RT14', 1),
(158, 'RT14', 2),
(159, 'RT14', 3),
(160, 'RT14', 4),
(161, 'RT14', 5),
(186, 'OOP', 1),
(187, 'OOP', 2),
(188, 'OOP', 3),
(189, 'ABC', 1),
(190, 'ABC', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `kode` varchar(3) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kode`, `nama_dosen`) VALUES
('ADE', 'Ade Ismail S.Kom., M.TI'),
('AF', 'Astrifidha Rahma Amalia,S.Pd., M.Pd.'),
('AFP', 'Adevian Fairuz Pratama, S.ST, M.Eng'),
('ANP', 'Agung Nugroho Pramudhita, S.T., M.T.'),
('ANR', 'Anugrah Nur Rahmanto, S.Sn., M.Ds.'),
('APK', 'Annisa Puspa Kirana, S. Kom, M.Kom'),
('ARP', 'Arief Prasetyo, S.Kom., M.Kom.'),
('ATF', 'Annisa Taufika Firdausi, ST., MT.'),
('ATQ', 'Atiqah Nurul Asri, S.Pd., M.Pd.'),
('BGS', 'Bagas Satya Dian Nugraha, ST., MT.'),
('BSA', 'Banni Satria Andoko, S. Kom., M.MSI., Dr.Eng.'),
('CDR', 'Candrasena Setiadi, ST., M.MT'),
('CR', 'Cahya Rahmad, ST., M.Kom., Dr. Eng.'),
('DHK', 'Dhika'),
('DOD', 'Dodit Suprianto SKom. MT.'),
('DRY', 'Dika Rizky Yunianto, S.Kom, M.Kom'),
('DS', 'Dhebys Suryani, S.Kom., MT'),
('DSE', 'Deasy Sandhya Elya Ikawati, S.Si, M. Si'),
('DWI', 'Dwi Puspitasari, S.Kom., M.Kom.'),
('DWW', 'Dimas Wahyu Wibowo, ST., MT.'),
('ENH', 'Elok Nur Hamdana, S.T., M.T'),
('ERF', 'Erfan Rohadi, ST., M.Eng., Ph.D.'),
('ESA', 'Ely Setyo Astuti, ST., MT.'),
('ESS', 'Endah Septa Sintiya. SPd., MKom.'),
('FPR', 'Farid Angga Pribadi, S.Kom.,M.Kom'),
('FU', 'Farida Ulfa, S.Pd., M.Pd.'),
('FUM', 'Faiz Ushbah Mubarok, S.Pd., M.Pd.'),
('GBP', 'Gunawan Budi Prasetyo, ST., MMT., Ph.D.'),
('HAR', 'M. Hasyim Ratsanjani SKom., MKom.'),
('HED', 'Habibie Ed Dien, S.Kom., M.T.'),
('HEN', 'Dra. Henny Purwaningsih, M.Pd.'),
('HJT', 'Budi Harijanto, ST., M.Kom.'),
('HP', 'Hendra Pradibta, SE., M.Sc.'),
('IAM', 'Irsyad Arif Mashudi, S.Kom M.Kom'),
('IDW', 'Indra Dharma Wijaya, ST., M.MT.'),
('IFR', 'Imam Fahrur Rozi, ST., MT.'),
('KPA', 'Deddy Kusbianto PA, Ir., M.Mkom.'),
('KSB', 'Kadek Suarjuna Batubulan, S.Kom, MT'),
('MAH', 'Muhammad Afif Hendrawan., S.Kom., M.T.'),
('MEA', 'Meyti Eka Apriyani ST., MT.'),
('MMH', 'Mamluatul Hani\'ah, S.Kom., M.Kom.'),
('MQ', 'Mungki Astiningrum, ST., M.Kom.'),
('MSK', 'Muhammad Shulhan Khairy, S.Kom, M.Kom'),
('MUP', 'Muhammad Unggul Pamenang, S.St., M.T.'),
('MZA', 'Moch. Zawaruddin Abdullah, S.ST., M.Kom'),
('NOP', 'Noprianto SKom., MEng.'),
('ODT', 'Odhitya Desta Triswidrananta, S.Pd., M.Pd.'),
('OKE', 'Ekojono, ST., M.Kom.'),
('PPA', 'Putra Prima A., ST., M.Kom.'),
('PYS', 'Pramana Yoga Saputra, S.Kom., MMT.'),
('RAA', 'Rosa Andrie Asmara, ST., MT., Dr. Eng.'),
('RB', 'Robby Anggriawan SE., ME.'),
('RDA', 'Rudy Ariyanto, ST., M.Cs.'),
('RDM', 'Retno Damayanti, S.Pd., M.T.'),
('RID', 'Ariadi Retno Ririd, S.Kom., M.Kom.'),
('RKA', 'Rakhmat Arianto, S.ST., M.Kom.'),
('ROW', 'Rokhimatul Wakhidah, S.Pd., M.T.'),
('RPB', 'Rama Pramudhita Bhaskara'),
('RPR', 'Rizki Putri Ramadhani, S.S., M.Pd.'),
('SBS', 'Satrio Binusa S, SS, M.Pd'),
('SES', 'Septian Enggar Sukmana, S.Pd., M.T'),
('SMU', 'Shohib Muslim, Dr'),
('SNA', 'Sofyan Noor Arief, S.ST., M.Kom.'),
('TRI', 'Triana Fatmawati, S.T., M.T.'),
('UDR', 'Ulla Delfana Rosiani, ST., MT., Dr.'),
('UN', 'Usman Nurhasan, S.Kom., MT.'),
('VAH', 'Vipkas Al Hadid Firdaus, ST,. MT'),
('VAL', 'Vivin Ayu Lestari, S.Pd., M.Kom'),
('VIS', 'Candra Bella Vista, S.Kom., MT.'),
('VIT', 'Vit Zuraida, S.Kom., M.Kom.'),
('VNW', 'Vivi Nur Wijayaningrum, S.Kom, M.Kom'),
('WID', 'Widaningsih Condrowardhani, SH, MH.'),
('WIS', 'Wilda Imama Sabilla, S.Kom., M.Kom.'),
('YA', 'Yuri Ariyanto, S.Kom., M.Kom.'),
('YWS', 'Yan Watequlis Syaifudin, ST., MMT., PhD.'),
('YY', 'Yoppy Yunhasnawa, S.ST., M.Sc.'),
('ZFP', 'Zulmy Faqihuddin Putera, S.Pd., M.Pd.'),
('ZUL', 'Ahmadi Yuli Ananta, ST., M.M.');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama_barang`) VALUES
(1, 'AC'),
(2, 'Projector'),
(3, 'Papan tulis'),
(4, 'Spidol'),
(5, 'Penghapus');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `kode_ruang` char(5) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `kode_dosen` varchar(3) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `matkul` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `kode_ruang`, `id_kelas`, `kode_dosen`, `hari`, `waktu_mulai`, `waktu_selesai`, `matkul`) VALUES
(1, 'LAI1', 14, 'YWS', 'Senin', '07:00:00', '12:10:00', 'Basis Data Lanjut'),
(2, 'LAI1', 49, 'MSK', 'Senin', '14:30:00', '17:10:00', 'Penjaminan Mutu Perangkat Lunak'),
(3, 'LAI1', 49, 'ODT', 'Selasa', '07:50:00', '11:20:00', 'Etika Profesi'),
(4, 'LAI1', 24, 'HED', 'Selasa', '11:20:00', '17:10:00', 'Pemrograman Mobile'),
(5, 'LAI1', 24, 'SES', 'Senin', '10:30:00', '16:20:00', 'Pengolahan Citra Dan Visi Komputer'),
(6, 'LAI1', 12, 'VAH', 'Rabu', '07:00:00', '10:30:00', 'Praktikum Pemrograman Berbasis Objek'),
(7, 'LAI1', 23, 'ATF', 'Kamis', '07:00:00', '10:30:00', 'Sistem Pendukung Keputusan'),
(8, 'LAI1', 42, 'VIT', 'Kamis', '11:20:00', '17:10:00', 'Perencanaan Sumber Daya'),
(9, 'LAI1', 46, 'RDA', 'Jumat', '07:50:00', '13:50:00', 'Perancangan Produk Kreatif'),
(10, 'LAI1', 36, 'HED', 'Jumat', '13:40:00', '17:10:00', 'Praktikum Basis Data Lanjut'),
(11, 'LAI2', 7, 'SBS', 'Senin', '07:00:00', '10:30:00', 'Bahasa Inggris 1'),
(12, 'LAI2', 1, 'IFR', 'Senin', '11:20:00', '17:10:00', 'Praktikum Dasar Pemrograman'),
(13, 'LAI2', 22, 'SBS', 'Selasa', '07:50:00', '11:20:00', 'Bahasa Inggris Persiapan Kerja'),
(14, 'LAI2', 34, 'VNW', 'Selasa', '11:20:00', '17:10:00', 'Praktikum Dasar Pemrograman'),
(15, 'LAI2', 13, 'ESS', 'Rabu', '07:50:00', '11:20:00', 'Pemrograman Berbasis Objek'),
(16, 'LAI2', 50, 'HP', 'Rabu', '13:40:00', '17:10:00', 'Tata Kelola Teknologi Informasi'),
(17, 'LAI2', 20, 'ADE', 'Kamis', '07:00:00', '12:10:00', 'Pemrograman Mobile'),
(18, 'LAI2', 12, 'DOD', 'Kamis', '13:40:00', '17:10:00', 'Sistem Informasi Manajemen'),
(19, 'LAI2', 10, 'IAM', 'Jumat', '07:00:00', '10:30:00', 'Sistem Informasi Manajemen'),
(20, 'LAI2', 9, 'IFR', 'Jumat', '10:30:00', '16:20:00', 'Praktikum Dasar Pemrograman'),
(21, 'LERP', 22, 'NOP', 'Senin', '07:00:00', '12:10:00', 'Pengolahan Citra Dan Visi Komputer'),
(22, 'LERP', 18, 'VAH', 'Senin', '13:40:00', '17:10:00', 'Praktikum Pemrograman Berbasis Objek'),
(23, 'LERP', 41, 'UN', 'Selasa', '07:00:00', '12:10:00', 'Pemrograman Mobile'),
(24, 'LERP', 38, 'DWI', 'Selasa', '13:40:00', '17:10:00', 'Praktikum Basis Data Lanjut'),
(25, 'LERP', 21, 'DWW', 'Rabu', '07:00:00', '10:30:00', 'Sistem Pendukung Keputusan'),
(26, 'LERP', 37, 'MSK', 'Rabu', '13:40:00', '17:10:00', 'Praktikum Basis Data Lanjut'),
(27, 'LERP', 50, 'PPA', 'Kamis', '07:50:00', '11:20:00', 'Penjaminan Mutu Perangkat Lunak'),
(28, 'LERP', 11, 'DWI', 'Kamis', '11:20:00', '17:10:00', 'Basis Data Lanjut'),
(29, 'LERP', 17, 'HAR', 'Jumat', '08:40:00', '12:10:00', 'Praktikum Pemrograman Berbasis Objek'),
(30, 'LERP', 20, 'MZA', 'Jumat', '13:40:00', '17:10:00', 'Sistem Pendukung Keputusan'),
(31, 'LIG1', 17, 'DRY', 'Senin', '07:00:00', '12:10:00', 'Basis Data Lanjut'),
(32, 'LIG1', 23, 'SNA', 'Senin', '13:40:00', '17:10:00', 'Sistem Informasi Manajemen'),
(33, 'LIG1', 18, 'ESS', 'Selasa', '07:00:00', '10:30:00', 'Matematika 3'),
(34, 'LIG1', 23, 'VAH', 'Selasa', '10:30:00', '16:20:00', 'Pembelajaran Mesin'),
(35, 'LIG1', 36, 'SES', 'Rabu', '07:00:00', '10:30:00', 'Praktikum Algoritma dan Struktur Data'),
(36, 'LIG1', 4, 'RDA', 'Rabu', '11:20:00', '17:10:00', 'Praktikum Dasar Pemrograman'),
(37, 'LIG1', 18, 'VIS', 'Kamis', '07:50:00', '11:20:00', 'Kecerdasan Artifisial'),
(38, 'LIG1', 35, 'FPR', 'Kamis', '13:40:00', '17:10:00', 'Tata Kelola Teknologi Informasi'),
(39, 'LIG1', 50, 'ANP', 'Jumat', '07:50:00', '11:20:00', 'Pengembangan Karir'),
(40, 'LIG1', 13, 'MUP', 'Jumat', '11:20:00', '17:10:00', 'Desain Pemrograman Web'),
(41, 'LIG2', 20, 'ESA', 'Senin', '07:00:00', '12:10:00', 'Pembelajaran Mesin'),
(42, 'LIG2', 35, 'MEA', 'Senin', '13:40:00', '17:10:00', 'Perencanaan Sumber Daya'),
(43, 'LIG2', 40, 'VIT', 'Selasa', '07:00:00', '12:10:00', 'Perencanaan Sumber Daya'),
(44, 'LIG2', 25, 'ATF', 'Selasa', '12:50:00', '16:20:00', 'Sistem Pendukung Keputusan'),
(45, 'LIG2', 42, 'MZA', 'Rabu', '07:00:00', '12:10:00', 'Sistem Pendukung Keputusan'),
(46, 'LIG2', 36, 'MEA', 'Rabu', '10:30:00', '14:30:00', 'Perencanaan Sumber Daya'),
(47, 'LIG2', 46, 'RDA', 'Kamis', '07:00:00', '12:10:00', 'Perancangan Produk Kreatif'),
(48, 'LIG2', 10, 'IFR', 'Kamis', '13:40:00', '17:10:00', 'Praktikum Pemrograman Berbasis Objek'),
(50, 'LIG2', 35, 'APK', 'Jumat', '07:00:00', '10:30:00', 'Praktikum Basis Data Lanjut'),
(51, 'LIG2', 47, 'OKE', 'Jumat', '10:30:00', '16:20:00', 'Perancangan Produk Kreatif'),
(52, 'LKJ1', 15, 'PPA', 'Senin', '07:00:00', '10:30:00', 'Praktikum Pemrograman Berbasis Objek'),
(53, 'LKJ1', 45, 'CDR', 'Senin', '11:20:00', '17:10:00', 'Pemrograman Mobile'),
(54, 'LKJ1', 11, 'ENH', 'Selasa', '07:00:00', '12:10:00', 'Desain Pemrograman Web'),
(56, 'LKJ1', 41, 'AFP', 'Selasa', '12:50:00', '16:20:00', 'Sistem Pendukung Keputusan'),
(57, 'LKJ1', 10, 'DWI', 'Rabu', '07:00:00', '12:10:00', 'Basis Data Lanjut'),
(58, 'LKJ1', 40, 'UDR', 'Rabu', '12:50:00', '16:20:00', 'Sistem Pendukung Keputusan'),
(61, 'LKJ1', 48, 'RAA', 'Kamis', '07:00:00', '12:10:00', 'Perancangan Produk Kreatif'),
(62, 'LKJ1', 27, 'GBP', 'Kamis', '12:50:00', '16:20:00', 'Sistem Pendukung Keputusan'),
(63, 'LKJ1', 39, 'MAH', 'Jumat', '07:00:00', '10:30:00', 'Praktikum Algoritma dan Struktur Data'),
(64, 'LKJ1', 27, 'MAH', 'Jumat', '11:20:00', '17:10:00', 'Pembelajaran Mesin'),
(65, 'LKJ2', 16, 'MUP', 'Senin', '07:00:00', '12:10:00', 'Desain Pemrograman Web'),
(66, 'LKJ2', 24, 'UDR', 'Senin', '13:40:00', '17:10:00', 'Sistem Pendukung Keputusan'),
(67, 'LKJ2', 27, 'ADE', 'Selasa', '07:00:00', '12:10:00', 'Pemrograman Mobile'),
(68, 'LKJ2', 51, 'ODT', 'Selasa', '12:50:00', '16:20:00', 'Etika Profesi'),
(69, 'LKJ2', 25, 'KSB', 'Rabu', '07:00:00', '12:10:00', 'Pengolahan Citra Dan Visi Komputer'),
(70, 'LKJ2', 52, 'IDW', 'Rabu', '13:40:00', '17:10:00', 'Tata Kelola Teknologi Informasi'),
(71, 'LKJ2', 45, 'UN', 'Kamis', '07:50:00', '13:40:00', 'Perencanaan Sumber Daya'),
(72, 'LKJ2', 52, 'ENH', 'Kamis', '13:40:00', '17:10:00', 'Pengembangan Karir'),
(73, 'LKJ2', 40, 'UN', 'Jumat', '07:00:00', '12:10:00', 'Pemrograman Mobile'),
(74, 'LKJ2', 14, 'PPA', 'Jumat', '13:40:00', '17:10:00', 'Praktikum Pemrograman Berbasis Objek'),
(75, 'LKJ3', 27, 'RAA', 'Senin', '07:00:00', '12:10:00', 'Pengolahan Citra Dan Visi Komputer'),
(76, 'LKJ3', 19, 'DS', 'Senin', '12:50:00', '16:20:00', 'Kewirausahaan Berbasis Teknologi'),
(77, 'LKJ3', 37, 'MEA', 'Selasa', '07:00:00', '10:30:00', 'Perencanaan Sumber Daya'),
(78, 'LKJ3', 22, 'IAM', 'Selasa', '11:20:00', '17:10:00', 'Pembelajaran Mesin'),
(79, 'LKJ3', 22, 'ATF', 'Rabu', '07:50:00', '11:20:00', 'Sistem Pendukung Keputusan'),
(80, 'LKJ3', 22, 'SNA', 'Rabu', '11:20:00', '17:10:00', 'Pemrograman Mobile'),
(81, 'LKJ3', 11, 'YY', 'Kamis', '07:50:00', '11:20:00', 'Praktikum Pemrograman Berbasis Objek'),
(82, 'LKJ3', 43, 'ROW', 'Kamis', '11:20:00', '15:20:00', 'Kecerdasan Bisnis'),
(83, 'LKJ3', 23, 'SNA', 'Jumat', '07:00:00', '12:10:00', 'Pemrograman Mobile'),
(84, 'LKJ3', 42, 'VIS', 'Jumat', '13:40:00', '17:10:00', 'Kecerdasan Bisnis'),
(85, 'LPR1', 34, 'HP', 'Senin', '07:50:00', '11:20:00', 'Pengantar Akutansi, Manajemen, dan Bisnis'),
(86, 'LPR1', 25, 'ZUL', 'Senin', '11:20:00', '17:10:00', 'Pemrograman Mobile'),
(89, 'LPR1', 43, 'DWW', 'Selasa', '07:00:00', '10:30:00', 'Tata Kelola Teknologi Informasi'),
(90, 'LPR1', 32, 'TRI', 'Selasa', '10:30:00', '16:20:00', 'Praktikum Dasar Pemrograman'),
(91, 'LPR1', 43, 'VAL', 'Rabu', '07:00:00', '10:30:00', 'Sistem Pendukung Keputusan'),
(92, 'LPR1', 39, 'HED', 'Rabu', '10:30:00', '14:30:00', 'Praktikum Basis Data Lanjut'),
(93, 'LPR1', 5, 'DSE', 'Rabu', '14:30:00', '17:10:00', 'Matematika Dasar'),
(94, 'LPR1', 31, 'ARP', 'Kamis', '07:00:00', '10:30:00', 'Konsep Teknologi Informasi'),
(95, 'LPR1', 16, 'APK', 'Kamis', '11:20:00', '17:10:00', 'Basis Data Lanjut'),
(96, 'LPR1', 3, 'ESS', 'Jumat', '12:50:00', '16:20:00', 'Keselamatan dan Kesehatan Kerja'),
(97, 'LPR1', 53, 'ANR', 'Jumat', '07:00:00', '12:10:00', 'Praktikum Pemrograman Frontend'),
(98, 'LPR2', 29, 'RB', 'Senin', '07:00:00', '10:30:00', 'Pengantar Akutansi, Manajemen, dan Bisnis'),
(99, 'LPR2', 40, 'FPR', 'Senin', '10:30:00', '14:30:00', 'Tata Kelola Teknologi Informasi'),
(100, 'LPR2', 16, 'DOD', 'Senin', '14:30:00', '17:10:00', 'Manajemen Proyek'),
(101, 'LPR2', 5, 'DSE', 'Selasa', '07:00:00', '09:30:00', 'Matematika Dasar'),
(106, 'LPR2', 6, 'DWI', 'Selasa', '09:40:00', '13:40:00', 'Critical Thinking and Problem Solving'),
(107, 'LPR2', 45, 'KPA', 'Selasa', '13:40:00', '17:10:00', 'Metodologi Penelitian'),
(108, 'LPR2', 34, 'VNW', 'Rabu', '07:00:00', '10:30:00', 'Dasar Pemrograman'),
(109, 'LPR2', 29, 'DSE', 'Rabu', '10:30:00', '13:40:00', 'Matematika Dasar'),
(110, 'LPR2', 49, 'FPR', 'Rabu', '13:40:00', '17:10:00', 'Tata Kelola Teknologi Informasi'),
(111, 'LPR2', 33, 'PYS', 'Kamis', '07:00:00', '10:30:00', 'Dasar Pemrograman'),
(112, 'LPR2', 18, 'YWS', 'Kamis', '11:20:00', '17:10:00', 'Basis Data Lanjut'),
(113, 'LPR2', 42, 'DWW', 'Jumat', '07:00:00', '10:30:00', 'Tata Kelola Teknologi Informasi'),
(114, 'LPR2', 49, 'ANP', 'Jumat', '11:20:00', '15:20:00', 'Pengembangan Karir'),
(115, 'LPR3', 12, 'ZUL', 'Senin', '07:00:00', '09:30:00', 'Manajemen Proyek'),
(116, 'LPR3', 37, 'MSK', 'Senin', '09:40:00', '13:40:00', 'Basis Data Lanjut'),
(117, 'LPR3', 4, 'YY', 'Senin', '13:40:00', '17:10:00', 'Critical Thinking and Problem Solving'),
(118, 'LPR3', 31, 'RB', 'Selasa', '07:00:00', '10:30:00', 'Pengantar Akutansi, Manajemen, dan Bisnis'),
(119, 'LPR3', 36, 'MSK', 'Selasa', '10:30:00', '14:30:00', 'Rekayasa Perangkat Lunak'),
(120, 'LPR3', 40, 'ZFP', 'Selasa', '14:30:00', '17:10:00', 'Bahasa Indonesia'),
(121, 'LPR3', 6, 'RID', 'Rabu', '07:00:00', '10:30:00', 'Keselamatan dan Kesehatan Kerja'),
(122, 'LPR3', 31, 'VIT', 'Rabu', '10:30:00', '16:20:00', 'Praktikum Dasar Pemrograman'),
(123, 'LPR3', 19, 'ZUL', 'Kamis', '07:00:00', '12:10:00', 'Pemrograman Mobile'),
(124, 'LPR3', 32, 'TRI', 'Kamis', '13:40:00', '17:10:00', 'Dasar Pemrograman'),
(125, 'LPR3', 29, 'BSA', 'Jumat', '07:50:00', '11:20:00', 'Konsep Teknologi Informasi'),
(126, 'LPR3', 25, 'IAM', 'Jumat', '11:20:00', '17:10:00', 'Pembelajaran Mesin'),
(127, 'LPR4', 5, 'MQ', 'Senin', '07:50:00', '13:40:00', 'Praktikum Dasar Pemrograman'),
(128, 'LPR4', 3, 'ROW', 'Senin', '13:40:00', '17:10:00', 'Critical Thinking and Problem Solving'),
(129, 'LPR4', 19, 'NOP', 'Selasa', '07:50:00', '13:40:00', 'Pengolahan Citra Dan Visi Komputer'),
(130, 'LPR4', 43, 'MZA', 'Selasa', '13:40:00', '17:10:00', 'Data Mining'),
(131, 'LPR4', 8, 'MQ', 'Rabu', '07:00:00', '12:10:00', 'Praktikum Dasar Pemrograman'),
(132, 'LPR4', 3, 'FU', 'Rabu', '13:40:00', '17:10:00', 'Bahasa Inggris 1'),
(133, 'LPR4', 53, 'PYS', 'Kamis', '11:20:00', '17:10:00', 'Praktikum Perancangan Antar Muka'),
(134, 'LPR4', 43, 'RKA', 'Jumat', '07:00:00', '10:30:00', 'Metode Penelitian'),
(135, 'LPR4', 7, 'MMH', 'Jumat', '11:20:00', '17:10:00', 'Praktikum Dasar Pemrograman'),
(136, 'LPR5', 38, 'IDW', 'Senin', '08:40:00', '12:10:00', 'Tata Kelola Teknologi Informasi'),
(137, 'LPR5', 21, 'RDM', 'Senin', '13:40:00', '17:10:00', 'Sistem Informasi Manajemen'),
(138, 'LPR5', 28, 'VAL', 'Selasa', '07:50:00', '13:40:00', 'Praktikum Dasar Pemrograman'),
(139, 'LPR5', 4, 'SNA', 'Selasa', '13:40:00', '17:10:00', 'Keselamatan dan Kesehatan Kerja'),
(140, 'LPR5', 14, 'ENH', 'Rabu', '07:50:00', '13:40:00', 'Desain Pemrograman Web'),
(141, 'LPR5', 12, 'VIS', 'Rabu', '13:40:00', '17:10:00', 'Kecerdasan Artifisial'),
(142, 'LPR5', 22, 'OKE', 'Kamis', '07:00:00', '10:30:00', 'Kewirausahaan Berbasis Teknologi'),
(143, 'LPR5', 2, 'VAL', 'Kamis', '10:30:00', '16:20:00', 'Praktikum Dasar Pemrograman'),
(144, 'LPR5', 21, 'OKE', 'Jumat', '07:00:00', '10:30:00', 'Kewirausahaan Berbasis Teknologi'),
(145, 'LPR5', 30, 'ATQ', 'Jumat', '13:40:00', '17:10:00', 'Bahasa Inggris Dasar'),
(146, 'LPR6', 1, 'DSE', 'Senin', '07:00:00', '09:30:00', 'Matematika Dasar'),
(147, 'LPR6', 53, 'HAR', 'Senin', '09:40:00', '15:20:00', 'Praktikum Pemrograman Backend'),
(148, 'LPR6', 53, 'RPR', 'Senin', '15:30:00', '17:10:00', 'Bahasa Indonesia'),
(149, 'LPR6', 53, 'DRY', 'Selasa', '07:00:00', '12:10:00', 'Praktikum Basis Data Lanjut'),
(150, 'LPR6', 31, 'APK', 'Selasa', '12:50:00', '16:20:00', 'Matematika Dasar'),
(151, 'LPR6', 17, 'BGS', 'Rabu', '07:00:00', '12:10:00', 'Desain Pemrograman Web'),
(152, 'LPR6', 10, 'MZA', 'Rabu', '12:50:00', '16:20:00', 'Matematika 3'),
(153, 'LPR6', 36, 'HED', 'Kamis', '07:00:00', '10:30:00', 'Basis Data Lanjut'),
(154, 'LPR6', 38, 'DWW', 'Kamis', '10:30:00', '14:30:00', 'Rekayasa Perangkat Lunak'),
(155, 'LPR6', 34, 'ZFP', 'Kamis', '14:30:00', '17:10:00', 'Bahasa Indonesia'),
(156, 'LPR6', 15, 'ANR', 'Jumat', '07:00:00', '10:30:00', 'Desain Antarmuka'),
(157, 'LPR6', 35, 'APK', 'Jumat', '12:50:00', '16:20:00', 'Basis Data Lanjut'),
(158, 'LPR7', 33, 'PYS', 'Senin', '07:00:00', '12:10:00', 'Praktikum Dasar Pemrograman'),
(159, 'LPR7', 22, 'BGS', 'Senin', '13:40:00', '17:10:00', 'Sistem Informasi Manajemen'),
(160, 'LPR7', 30, 'VNW', 'Selasa', '07:00:00', '10:30:00', 'Dasar Pemrograman'),
(161, 'LPR7', 47, 'OKE', 'Selasa', '10:30:00', '16:20:00', 'Perancangan Produk Kreatif'),
(162, 'LPR7', 20, 'DS', 'Rabu', '07:50:00', '11:20:00', 'Kewirausahaan Berbasis Teknologi'),
(163, 'LPR7', 30, 'VNW', 'Rabu', '11:20:00', '17:10:00', 'Praktikum Dasar Pemrograman'),
(164, 'LPR7', 24, 'RB', 'Kamis', '07:50:00', '11:20:00', 'Kewirausahaan Berbasis Teknologi'),
(165, 'LPR7', 6, 'NOP', 'Kamis', '11:20:00', '17:10:00', 'Praktikum Dasar Pemrograman'),
(166, 'LPR7', 5, 'MQ', 'Jumat', '07:00:00', '10:30:00', 'Dasar Pemrograman'),
(167, 'LPR7', 39, 'DWW', 'Jumat', '10:30:00', '14:30:00', 'Rekayasa Perangkat Lunak'),
(168, 'LPR7', 22, 'RPR', 'Jumat', '14:30:00', '16:20:00', 'Bahasa Indonesia'),
(169, 'LPR8', 40, 'VIS', 'Senin', '07:00:00', '10:30:00', 'Kecerdasan Bisnis'),
(170, 'LPR8', 2, 'TRI', 'Senin', '11:20:00', '17:10:00', 'Praktikum Dasar Pemrograman'),
(171, 'LPR8', 15, 'APK', 'Selasa', '07:00:00', '12:10:00', 'Basis Data Lanjut'),
(172, 'LPR8', 37, 'SES', 'Selasa', '13:40:00', '17:10:00', 'Praktikum Algoritma Struktur Data'),
(173, 'LPR8', 3, 'MMH', 'Rabu', '07:50:00', '13:40:00', 'Praktikum Dasar Pemrograman'),
(174, 'LPR8', 38, 'MAH', 'Rabu', '13:40:00', '17:10:00', 'Praktikum Algoritma Struktur Data'),
(175, 'LPR8', 10, 'ENH', 'Kamis', '07:50:00', '13:40:00', 'Desain Pemrograman Web'),
(176, 'LPR8', 50, 'RB', 'Kamis', '13:40:00', '17:10:00', 'Etika Profesi'),
(177, 'LPR8', 19, 'UDR', 'Jumat', '07:50:00', '13:40:00', 'Sistem Pendukung Keputusan'),
(178, 'LPR8', 12, 'DRY', 'Jumat', '11:20:00', '17:10:00', 'Basis Data Lanjut'),
(179, 'LPY1', 43, 'UN', 'Senin', '07:00:00', '12:10:00', 'Perencanaan Sumber Daya'),
(180, 'LPY1', 39, 'WIS', 'Senin', '13:40:00', '17:10:00', 'Perencanaan Sumber Daya'),
(181, 'LPY1', 51, 'MSK', 'Selasa', '07:00:00', '10:30:00', 'Penjaminan Mutu Perangkat Lunak'),
(182, 'LPY1', 12, 'MUP', 'Selasa', '11:20:00', '17:10:00', 'Desain Pemrograman Web'),
(183, 'LPY1', 45, 'ROW', 'Rabu', '07:50:00', '11:20:00', 'Kecerdasan Bisnis'),
(184, 'LPY1', 13, 'DRY', 'Rabu', '11:20:00', '17:10:00', 'Basis Data Lanjut'),
(185, 'LPY1', 51, 'DOD', 'Kamis', '07:00:00', '10:30:00', 'Pengembangan Karir'),
(186, 'LPY1', 23, 'KSB', 'Kamis', '10:30:00', '17:10:00', 'Pengolahan Citra Dan Visi Komputer'),
(187, 'LPY1', 51, 'IDW', 'Jumat', '07:00:00', '10:30:00', 'Tata Kelola Teknologi Informasi'),
(188, 'LPY1', 48, 'RAA', 'Jumat', '10:30:00', '16:20:00', 'Perancangan Produk Kreatif'),
(189, 'LPY2', 44, 'UDR', 'Senin', '08:40:00', '12:10:00', 'Metodologi Penelitian'),
(190, 'LPY2', 44, 'RKA', 'Senin', '12:50:00', '16:20:00', 'Data Mining'),
(191, 'LPY2', 44, 'SES', 'Selasa', '07:00:00', '12:10:00', 'Pemrograman Mobile'),
(192, 'LPY2', 44, 'MEA', 'Selasa', '12:50:00', '16:20:00', 'Tata Kelola Teknologi Informasi'),
(193, 'LPY2', 44, 'UN', 'Rabu', '07:00:00', '12:10:00', 'Perencanaan Sumber Daya'),
(194, 'LPY2', 44, 'ZFP', 'Rabu', '13:40:00', '16:20:00', 'Bahasa Indonesia'),
(195, 'LPY2', 44, 'ROW', 'Kamis', '07:50:00', '11:20:00', 'Kecerdasan Bisnis'),
(196, 'LPY2', 44, 'VAL', 'Jumat', '08:40:00', '12:10:00', 'Sistem Pendukung Keputusan'),
(197, 'LPY3', 26, 'HED', 'Senin', '07:00:00', '13:40:00', 'Pemrograman Mobile'),
(198, 'LPY3', 36, 'HED', 'Senin', '13:40:00', '17:10:00', 'Praktikum Basis Data'),
(199, 'LPY3', 26, 'HP', 'Selasa', '08:40:00', '12:10:00', 'Kewirausahaan Berbasis Teknologi'),
(200, 'LPY3', 26, 'RPR', 'Selasa', '14:30:00', '16:20:00', 'Bahasa Indonesia'),
(201, 'LPY3', 26, 'MAH', 'Rabu', '07:50:00', '13:40:00', 'Pembelajaran Mesin'),
(202, 'LPY3', 17, 'HAR', 'Rabu', '13:40:00', '17:10:00', 'Pemrograman Berbasis Objek'),
(203, 'LPY3', 26, 'ANP', 'Kamis', '07:50:00', '11:20:00', 'Sistem Pendukung Keputusan'),
(204, 'LPY3', 26, 'ATQ', 'Kamis', '11:20:00', '15:20:00', 'Bahasa Inggris Persiapan Kerja'),
(205, 'LPY3', 26, 'WIS', 'Jumat', '07:50:00', '11:20:00', 'Sistem Informasi Manajemen'),
(206, 'LPY3', 26, 'NOP', 'Jumat', '11:20:00', '17:10:00', 'Pengolahan Citra Dan Visi Komputer'),
(207, 'LSI1', 36, 'SES', 'Senin', '07:00:00', '10:30:00', 'Algoritma Struktur Data'),
(208, 'LSI1', 42, 'PPA', 'Senin', '11:20:00', '17:10:00', 'Pemrograman Mobile'),
(209, 'LSI1', 20, 'CR', 'Selasa', '07:00:00', '12:10:00', 'Pengolahan Citra Dan Visi Komputer'),
(210, 'LSI1', 15, 'SBS', 'Selasa', '13:40:00', '17:10:00', 'Bahasa Inggris 1'),
(211, 'LSI1', 41, 'RKA', 'Rabu', '07:00:00', '10:30:00', 'Data Mining'),
(212, 'LSI1', 15, 'MUP', 'Rabu', '11:20:00', '17:10:00', 'Desain Pemrograman Web'),
(213, 'LSI1', 4, 'CR', 'Kamis', '07:00:00', '09:30:00', 'Matematika Dasar'),
(214, 'LSI1', 37, 'WIS', 'Kamis', '09:40:00', '13:40:00', 'Manajemen Rantai Pasok'),
(215, 'LSI1', 45, 'MZA', 'Kamis', '13:40:00', '17:10:00', 'Data Mining'),
(216, 'LSI1', 7, 'RID', 'Jumat', '07:00:00', '10:30:00', 'Konsep Teknologi Informasi'),
(217, 'LSI1', 24, 'FUM', 'Jumat', '12:50:00', '16:20:00', 'Bahasa Inggris Persiapan Kerja'),
(218, 'LSI2', 18, 'ANR', 'Senin', '07:00:00', '10:30:00', 'Desain Antarmuka'),
(219, 'LSI2', 41, 'VIT', 'Senin', '10:30:00', '16:20:00', 'Perencanaan Sumber Daya'),
(220, 'LSI2', 1, 'SES', 'Selasa', '07:00:00', '10:30:00', 'Dasar Pemrograman'),
(221, 'LSI2', 21, 'UDR', 'Selasa', '11:20:00', '17:10:00', 'Pengolahan Citra Dan Visi Komputer'),
(222, 'LSI2', 35, 'WIS', 'Rabu', '07:50:00', '11:20:00', 'Manajemen Rantai Pasok'),
(223, 'LSI2', 45, 'AFP', 'Rabu', '13:40:00', '17:10:00', 'Sistem Pendukung Keputusan'),
(224, 'LSI2', 42, 'RKA', 'Kamis', '07:00:00', '10:30:00', 'Data Mining'),
(225, 'LSI2', 24, 'KPA', 'Kamis', '11:20:00', '17:10:00', 'Pembelajaran Mesin'),
(226, 'LSI2', 53, 'ATQ', 'Jumat', '07:50:00', '11:20:00', 'Bahasa Inggris Dasar'),
(227, 'LSI2', 18, 'VAH', 'Jumat', '13:40:00', '17:10:00', 'Pemrograman Berbasis Objek'),
(228, 'LSI3', 42, 'ZFP', 'Senin', '07:00:00', '09:30:00', 'Bahasa Indonesia'),
(229, 'LSI3', 35, 'ROW', 'Senin', '09:40:00', '13:40:00', 'Praktikum Algoritma Struktur Data'),
(230, 'LSI3', 11, 'ATF', 'Senin', '13:40:00', '17:10:00', 'Desain Antarmuka'),
(231, 'LSI3', 21, 'RPR', 'Selasa', '07:00:00', '08:40:00', 'Bahasa Indonesia'),
(232, 'LSI3', 33, 'AFP', 'Selasa', '08:40:00', '12:10:00', 'Matematika Dasar'),
(233, 'LSI3', 10, 'IFR', 'Selasa', '13:40:00', '17:10:00', 'Pemrograman Berbasis Objek'),
(234, 'LSI3', 16, 'YY', 'Rabu', '07:00:00', '10:30:00', 'Praktikum Pemrograman Berbasis Objek'),
(235, 'LSI3', 53, 'AF', 'Rabu', '10:30:00', '12:10:00', 'Agama'),
(236, 'LSI3', 42, 'RKA', 'Rabu', '12:50:00', '16:20:00', 'Metode Penelitian'),
(237, 'LSI3', 25, 'FUM', 'Kamis', '07:00:00', '10:30:00', 'Bahasa Inggris Persiapan Kerja'),
(238, 'LSI3', 22, 'RPR', 'Kamis', '10:30:00', '12:10:00', 'Bahasa Indonesia'),
(239, 'LSI3', 25, 'ANR', 'Kamis', '13:40:00', '17:10:00', 'Kewirausahaan Berbasis Teknologi'),
(240, 'LSI3', 31, 'HEN', 'Jumat', '07:00:00', '09:30:00', 'Bahasa Indonesia'),
(241, 'LSI3', 18, 'FPR', 'Jumat', '09:40:00', '13:40:00', 'Sistem Informasi Manajemen'),
(242, 'LSI3', 41, 'FPR', 'Jumat', '13:40:00', '17:10:00', 'Tata Kelola Teknologi Informasi'),
(243, 'RT01', 9, 'YY', 'Senin', '07:50:00', '11:20:00', 'Critical Thinking and Problem Solving'),
(244, 'RT01', 32, 'RID', 'Senin', '13:40:00', '17:10:00', 'Konsep Teknologi Informasi'),
(245, 'RT01', 34, 'ANP', 'Selasa', '07:00:00', '10:30:00', 'Critical Thinking and Problem Solving'),
(246, 'RT01', 28, 'ANP', 'Selasa', '13:40:00', '17:10:00', 'Critical Thinking and Problem Solving'),
(247, 'RT01', 7, 'HJT', 'Rabu', '07:00:00', '10:30:00', 'Keselamatan dan Kesehatan Kerja'),
(248, 'RT01', 6, 'WID', 'Rabu', '11:20:00', '13:40:00', 'Pancasila'),
(249, 'RT01', 32, 'APK', 'Rabu', '13:40:00', '17:10:00', 'Matematika Dasar'),
(250, 'RT01', 2, 'DWI', 'Kamis', '07:00:00', '10:30:00', 'Critical Thinking and Problem Solving'),
(251, 'RT01', 8, 'ARP', 'Kamis', '10:30:00', '14:30:00', 'Konsep Teknologi Informasi'),
(252, 'RT01', 8, 'WID', 'Kamis', '15:30:00', '17:10:00', 'Pancasila'),
(253, 'RT01', 13, 'ZUL', 'Jumat', '07:00:00', '09:30:00', 'Manajemen Proyek'),
(254, 'RT01', 34, 'CR', 'Jumat', '09:40:00', '13:40:00', 'Matematika Dasar'),
(255, 'RT01', 17, 'HAR', 'Jumat', '13:40:00', '17:10:00', 'Pemrograman Berbasis Objek'),
(256, 'RT02', 4, 'ATQ', 'Senin', '07:50:00', '11:20:00', 'Bahasa Inggris 1'),
(257, 'RT02', 12, 'ESS', 'Senin', '12:50:00', '16:20:00', 'Matematika 3'),
(258, 'RT02', 16, 'HAR', 'Selasa', '07:00:00', '10:30:00', 'Kecerdasan Artifisial'),
(259, 'RT02', 30, 'RB', 'Selasa', '10:30:00', '14:30:00', 'Pengantar Akutansi, Manajemen, dan Bisnis'),
(260, 'RT02', 7, 'WID', 'Selasa', '15:30:00', '17:10:00', 'Pancasila'),
(261, 'RT02', 9, 'SNA', 'Rabu', '07:50:00', '11:20:00', 'Keselamatan dan Kesehatan Kerja'),
(262, 'RT02', 2, 'RID', 'Rabu', '13:40:00', '17:10:00', 'Konsep Teknologi Informasi'),
(263, 'RT02', 29, 'HEN', 'Kamis', '07:00:00', '09:30:00', 'Bahasa Indonesia'),
(264, 'RT02', 1, 'ANR', 'Kamis', '09:40:00', '13:40:00', 'Keselamatan dan Kesehatan Kerja'),
(265, 'RT02', 36, 'WIS', 'Kamis', '13:40:00', '17:10:00', 'Manajemen Rantai Pasok'),
(266, 'RT02', 25, 'BGS', 'Jumat', '07:00:00', '10:30:00', 'Sistem Informasi Manajemen'),
(267, 'RT02', 8, 'RID', 'Jumat', '10:30:00', '14:30:00', 'Keselamatan dan Kesehatan Kerja'),
(268, 'RT03', 11, 'RDM', 'Senin', '07:00:00', '10:30:00', 'Sistem Informasi Manajemen'),
(269, 'RT03', 15, 'DOD', 'Senin', '10:30:00', '13:40:00', 'Manajemen Proyek'),
(270, 'RT03', 14, 'DWW', 'Senin', '13:40:00', '17:10:00', 'Sistem Informasi Manajemen'),
(271, 'RT03', 15, 'DWW', 'Senin', '13:40:00', '17:10:00', 'Sistem Informasi Manajemen'),
(272, 'RT03', 29, 'ROW', 'Selasa', '07:00:00', '10:30:00', 'Critical Thinking and Problem Solving'),
(273, 'RT03', 45, 'ZFP', 'Selasa', '10:30:00', '13:40:00', 'Bahasa Indonesia'),
(274, 'RT03', 11, 'CR', 'Selasa', '13:40:00', '17:10:00', 'Matematika 3'),
(275, 'RT03', 15, 'CR', 'Selasa', '13:40:00', '17:10:00', 'Matematika 3'),
(276, 'RT03', 28, 'HEN', 'Rabu', '07:00:00', '09:30:00', 'Bahasa Indonesia'),
(277, 'RT03', 2, 'TRI', 'Rabu', '09:40:00', '13:40:00', 'Dasar Pemrograman'),
(278, 'RT03', 19, 'BSA', 'Rabu', '13:40:00', '17:10:00', 'Sistem Informasi Manajemen'),
(279, 'RT03', 41, 'BSA', 'Rabu', '13:40:00', '17:10:00', 'Sistem Informasi Manajemen'),
(280, 'RT03', 13, 'KSB', 'Kamis', '07:00:00', '10:30:00', 'Kecerdasan Artifisial'),
(281, 'RT03', 17, 'KSB', 'Kamis', '07:00:00', '10:30:00', 'Kecerdasan Artifisial'),
(282, 'RT03', 14, 'ATF', 'Kamis', '13:40:00', '17:10:00', 'Desain Antarmuka'),
(283, 'RT03', 2, 'ERF', 'Jumat', '07:00:00', '09:30:00', 'Matematika Dasar'),
(284, 'RT03', 3, 'ERF', 'Jumat', '07:00:00', '09:30:00', 'Matematika Dasar'),
(285, 'RT03', 14, 'PPA', 'Jumat', '09:40:00', '13:40:00', 'Pemrograman Berbasis Objek'),
(286, 'RT03', 10, 'ZUL', 'Jumat', '14:30:00', '17:10:00', 'Manajemen Proyek'),
(287, 'RT03', 11, 'ZUL', 'Jumat', '14:30:00', '17:10:00', 'Manajemen Proyek'),
(288, 'RT04', 23, 'RPR', 'Senin', '07:00:00', '08:40:00', 'Bahasa Indonesia'),
(289, 'RT04', 13, 'ESS', 'Senin', '08:40:00', '12:10:00', 'Matematika 3'),
(290, 'RT04', 13, 'DWI', 'Senin', '13:40:00', '17:10:00', 'Basis Data Lanjut'),
(291, 'RT04', 32, 'AF', 'Selasa', '07:00:00', '08:40:00', 'Agama'),
(292, 'RT04', 2, 'FU', 'Selasa', '08:40:00', '12:10:00', 'Bahasa Inggris 1'),
(293, 'RT04', 35, 'ROW', 'Selasa', '13:40:00', '17:10:00', 'Algoritma Struktur Data'),
(294, 'RT04', 1, 'DSE', 'Rabu', '07:00:00', '09:30:00', 'Matematika Dasar'),
(295, 'RT04', 11, 'VIS', 'Rabu', '09:40:00', '13:40:00', 'Kecerdasan Artifisial'),
(296, 'RT04', 23, 'RB', 'Rabu', '13:40:00', '17:10:00', 'Kewirausahaan Berbasis Teknologi'),
(297, 'RT04', 38, 'MAH', 'Kamis', '07:00:00', '10:30:00', 'Algoritma Struktur Data'),
(298, 'RT04', 2, 'WID', 'Kamis', '10:30:00', '12:10:00', 'Pancasila'),
(299, 'RT04', 17, 'BGS', 'Kamis', '13:40:00', '17:10:00', 'Desain Antarmuka'),
(300, 'RT04', 12, 'MUP', 'Jumat', '07:00:00', '10:30:00', 'Desain Antarmuka'),
(301, 'RT04', 11, 'YY', 'Jumat', '10:30:00', '14:30:00', 'Pemrograman Berbasis Objek'),
(302, 'RT04', 29, 'AF', 'Jumat', '15:30:00', '17:10:00', 'Agama'),
(303, 'RT05', 2, 'ERF', 'Senin', '07:00:00', '09:30:00', 'Matematika Dasar'),
(304, 'RT05', 3, 'ERF', 'Senin', '07:00:00', '09:30:00', 'Matematika Dasar'),
(305, 'RT05', 23, 'FU', 'Senin', '09:40:00', '13:40:00', 'Bahasa Inggris Persiapan Kerja'),
(306, 'RT05', 28, 'ARP', 'Senin', '13:40:00', '17:10:00', 'Konsep Teknologi Informasi'),
(307, 'RT05', 33, 'ARP', 'Senin', '13:40:00', '17:10:00', 'Konsep Teknologi Informasi'),
(308, 'RT05', 8, 'YA', 'Selasa', '07:00:00', '09:30:00', 'Matematika Dasar'),
(309, 'RT05', 7, 'YA', 'Selasa', '07:00:00', '09:30:00', 'Matematika Dasar'),
(310, 'RT05', 4, 'RDA', 'Selasa', '09:40:00', '13:40:00', 'Dasar Pemrograman'),
(311, 'RT05', 27, 'ATQ', 'Selasa', '13:40:00', '17:10:00', 'Bahasa Inggris Persiapan Kerja'),
(312, 'RT05', 37, 'MSK', 'Rabu', '07:50:00', '11:20:00', 'Rekayasa Perangkat Lunak'),
(313, 'RT05', 9, 'IFR', 'Rabu', '11:20:00', '15:20:00', 'Dasar Pemrograman'),
(314, 'RT05', 53, 'AF', 'Rabu', '15:30:00', '17:10:00', 'Agama'),
(315, 'RT05', 30, 'AF', 'Kamis', '07:00:00', '08:40:00', 'Agama'),
(316, 'RT05', 40, 'KPA', 'Kamis', '08:40:00', '12:10:00', 'Metode Penelitian'),
(317, 'RT05', 41, 'KPA', 'Kamis', '08:40:00', '12:10:00', 'Metodologi Penelitian'),
(318, 'RT05', 3, 'ESA', 'Jumat', '12:50:00', '16:20:00', 'Konsep Teknologi Informasi'),
(319, 'RT05', 4, 'ESA', 'Kamis', '12:50:00', '16:20:00', 'Konsep Teknologi Informasi'),
(320, 'RT05', 16, 'YY', 'Jumat', '07:00:00', '10:30:00', 'Pemrograman Berbasis Objek'),
(321, 'RT05', 32, 'HP', 'Jumat', '10:30:00', '14:30:00', 'Pengantar Akutansi, Manajemen, dan Bisnis'),
(322, 'RT05', 33, 'HP', 'Jumat', '10:30:00', '14:30:00', 'Pengantar Akutansi, Manajemen, dan Bisnis'),
(323, 'RT05', 4, 'CR', 'Jumat', '14:30:00', '17:10:00', 'Matematika Dasar'),
(324, 'RT06', 39, 'FPR', 'Senin', '07:00:00', '10:30:00', 'Tata Kelola Teknologi Informasi'),
(325, 'RT06', 31, 'HEN', 'Senin', '10:30:00', '13:40:00', 'Bahasa Indonesia'),
(326, 'RT06', 37, 'SES', 'Senin', '13:40:00', '17:10:00', 'Algoritma Struktur Data'),
(327, 'RT06', 9, 'ERF', 'Selasa', '07:00:00', '09:30:00', 'Matematika Dasar'),
(328, 'RT06', 46, 'HJT', 'Selasa', '09:40:00', '13:40:00', 'Kepemimpinan'),
(329, 'RT06', 19, 'FU', 'Selasa', '13:40:00', '17:10:00', 'Bahasa Inggris Persiapan Kerja'),
(330, 'RT06', 24, 'RPR', 'Rabu', '07:00:00', '08:40:00', 'Bahasa Indonesia'),
(331, 'RT06', 33, 'ANP', 'Rabu', '08:40:00', '12:10:00', 'Critical Thinking and Problem Solving'),
(332, 'RT06', 8, 'ATQ', 'Rabu', '12:50:00', '16:20:00', 'Bahasa Inggris 1'),
(333, 'RT06', 27, 'RPR', 'Kamis', '07:00:00', '08:40:00', 'Bahasa Indonesia'),
(334, 'RT06', 39, 'MEA', 'Kamis', '09:40:00', '13:40:00', 'Manajemen Rantai Pasok'),
(335, 'RT06', 39, 'DSE', 'Kamis', '13:40:00', '17:10:00', 'Matematika Lanjut'),
(336, 'RT06', 1, 'SBS', 'Jumat', '07:50:00', '11:20:00', 'Bahasa Inggris 1'),
(337, 'RT06', 38, 'MEA', 'Jumat', '11:20:00', '15:20:00', 'Manajemen Rantai Pasok'),
(338, 'RT07', 31, 'MMH', 'Senin', '07:00:00', '10:30:00', 'Critical Thinking and Problem Solving'),
(339, 'RT07', 32, 'MMH', 'Senin', '07:00:00', '10:30:00', 'Critical Thinking and Problem Solving'),
(340, 'RT07', 7, 'VNW', 'Senin', '10:30:00', '14:30:00', 'Critical Thinking and Problem Solving'),
(341, 'RT07', 8, 'VNW', 'Senin', '10:30:00', '14:30:00', 'Critical Thinking and Problem Solving'),
(342, 'RT07', 7, 'YA', 'Senin', '14:30:00', '17:10:00', 'Matematika Dasar'),
(343, 'RT07', 8, 'YA', 'Senin', '14:30:00', '17:10:00', 'Matematika Dasar'),
(344, 'RT07', 13, 'DOD', 'Selasa', '07:00:00', '10:30:00', 'Sistem Informasi Manajemen'),
(345, 'RT07', 1, 'WID', 'Selasa', '11:20:00', '13:40:00', 'Pancasila'),
(346, 'RT07', 16, 'ADE', 'Selasa', '13:40:00', '17:10:00', 'Matematika 3'),
(347, 'RT07', 17, 'ADE', 'Selasa', '13:40:00', '17:10:00', 'Matematika 3'),
(348, 'RT07', 15, 'HAR', 'Rabu', '07:00:00', '10:30:00', 'Kecerdasan Artifisial'),
(349, 'RT07', 16, 'RDM', 'Rabu', '10:30:00', '14:30:00', 'Sistem Informasi Manajemen'),
(350, 'RT07', 25, 'RPR', 'Rabu', '15:30:00', '17:10:00', 'Bahasa Indonesia'),
(351, 'RT07', 16, 'BGS', 'Kamis', '07:00:00', '10:30:00', 'Desain Antarmuka'),
(352, 'RT07', 14, 'MZA', 'Kamis', '10:30:00', '13:40:00', 'Manajemen Proyek'),
(353, 'RT07', 2, 'HJT', 'Kamis', '13:40:00', '17:10:00', 'Keselamatan dan Kesehatan Kerja'),
(354, 'RT07', 5, 'HJT', 'Kamis', '13:40:00', '17:10:00', 'Keselamatan dan Kesehatan Kerja'),
(355, 'RT07', 36, 'AFP', 'Jumat', '07:50:00', '11:20:00', 'Matematika Lanjut'),
(356, 'RT07', 37, 'AFP', 'Jumat', '07:50:00', '11:20:00', 'Matematika Lanjut'),
(357, 'RT07', 29, 'AF', 'Jumat', '10:30:00', '15:20:00', 'Agama'),
(358, 'RT07', 53, 'SMU', 'Jumat', '15:30:00', '17:10:00', 'Kewarganegaraan'),
(359, 'RT08', 28, 'VAL', 'Senin', '07:00:00', '10:30:00', 'Dasar Pemrograman'),
(360, 'RT08', 29, 'VAL', 'Senin', '11:20:00', '15:20:00', 'Dasar Pemrograman'),
(361, 'RT08', 5, 'WID', 'Senin', '15:30:00', '17:10:00', 'Pancasila'),
(362, 'RT08', 17, 'IAM', 'Selasa', '07:00:00', '10:30:00', 'Sistem Informasi Manajemen'),
(363, 'RT08', 13, 'ANR', 'Selasa', '10:30:00', '14:30:00', 'Desain Antarmuka'),
(364, 'RT08', 33, 'AF', 'Selasa', '15:30:00', '17:10:00', 'Agama'),
(365, 'RT08', 48, 'OKE', 'Rabu', '07:00:00', '10:30:00', 'Kepemimpinan'),
(366, 'RT08', 1, 'YY', 'Rabu', '10:30:00', '14:30:00', 'Critical Thinking and Problem Solving'),
(367, 'RT08', 18, 'PYS', 'Rabu', '14:30:00', '17:10:00', 'Manajemen Proyek'),
(368, 'RT08', 6, 'YWS', 'Kamis', '07:00:00', '09:30:00', 'Matematika Dasar'),
(369, 'RT08', 7, 'MMH', 'Kamis', '09:40:00', '13:40:00', 'Dasar Pemrograman'),
(370, 'RT08', 40, 'RKA', 'Kamis', '13:40:00', '17:10:00', 'Data Mining'),
(371, 'RT08', 32, 'ZFP', 'Jumat', '07:00:00', '09:30:00', 'Bahasa Indonesia'),
(372, 'RT08', 30, 'ODT', 'Jumat', '09:40:00', '13:40:00', 'Critical Thinking and Problem Solving'),
(373, 'RT08', 34, 'BSA', 'Jumat', '13:40:00', '17:10:00', 'Konsep Teknologi Informasi'),
(374, 'RT09', 30, 'RID', 'Senin', '07:00:00', '10:30:00', 'Konsep Teknologi Informasi'),
(375, 'RT09', 6, 'YA', 'Senin', '10:30:00', '14:30:00', 'Konsep Teknologi Informasi'),
(376, 'RT09', 43, 'ZFP', 'Senin', '14:30:00', '17:10:00', 'Bahasa Indonesia'),
(377, 'RT09', 36, 'FPR', 'Selasa', '07:00:00', '10:30:00', 'Tata Kelola Teknologi Informasi'),
(378, 'RT09', 9, 'FUM', 'Selasa', '12:50:00', '16:20:00', 'Bahasa Inggris 1'),
(379, 'RT09', 29, 'FU', 'Rabu', '07:00:00', '10:30:00', 'Bahasa Inggris Dasar'),
(380, 'RT09', 41, 'ZFP', 'Rabu', '10:30:00', '13:40:00', 'Bahasa Indonesia'),
(381, 'RT09', 33, 'FUM', 'Rabu', '13:40:00', '17:10:00', 'Bahasa Inggris Dasar'),
(382, 'RT09', 35, 'MSK', 'Kamis', '07:00:00', '10:30:00', 'Rekayasa Perangkat Lunak'),
(383, 'RT09', 31, 'FUM', 'Kamis', '10:30:00', '14:30:00', 'Bahasa Inggris Dasar'),
(384, 'RT09', 20, 'RPR', 'Kamis', '15:30:00', '17:10:00', 'Bahasa Indonesia'),
(385, 'RT09', 6, 'NOP', 'Jumat', '07:00:00', '10:30:00', 'Dasar Pemrograman'),
(386, 'RT09', 6, 'YWS', 'Jumat', '10:30:00', '13:40:00', 'Matematika Dasar'),
(387, 'RT09', 31, 'VIT', 'Jumat', '13:40:00', '17:10:00', 'Dasar Pemrograman'),
(388, 'RT10', 24, 'BSA', 'Senin', '09:40:00', '13:40:00', 'Sistem Informasi Manajemen'),
(389, 'RT10', 9, 'IAM', 'Senin', '13:40:00', '17:10:00', 'Konsep Teknologi Informasi'),
(390, 'RT10', 4, 'WID', 'Selasa', '07:00:00', '08:40:00', 'Pancasila'),
(391, 'RT10', 14, 'MZA', 'Selasa', '08:40:00', '12:10:00', 'Matematika 3'),
(392, 'RT10', 39, 'MAH', 'Selasa', '13:40:00', '17:10:00', 'Algoritma Struktur Data'),
(393, 'RT10', 53, 'WID', 'Rabu', '07:50:00', '09:30:00', 'Pancasila'),
(394, 'RT10', 32, 'FUM', 'Rabu', '09:40:00', '13:40:00', 'Bahasa Inggris Dasar'),
(395, 'RT10', 35, 'TRI', 'Rabu', '13:40:00', '17:10:00', 'Matematika Lanjut'),
(396, 'RT10', 9, 'ERF', 'Kamis', '07:00:00', '09:30:00', 'Matematika Dasar'),
(397, 'RT10', 34, 'FU', 'Kamis', '09:40:00', '13:40:00', 'Bahasa Inggris Dasar'),
(398, 'RT10', 1, 'YA', 'Kamis', '13:40:00', '17:10:00', 'Konsep Teknologi Informasi'),
(399, 'RT10', 20, 'FUM', 'Jumat', '07:50:00', '11:20:00', 'Bahasa Inggris Persiapan Kerja'),
(400, 'RT10', 37, 'IDW', 'Jumat', '12:50:00', '16:20:00', 'Tata Kelola Teknologi Informasi'),
(401, 'RT13', 47, 'RDA', 'Senin', '07:00:00', '10:30:00', 'Kepemimpinan'),
(402, 'RT13', 3, 'WID', 'Senin', '11:20:00', '13:40:00', 'Pancasila'),
(403, 'RT13', 27, 'ANP', 'Senin', '13:40:00', '17:10:00', 'Kewirausahaan Berbasis Teknologi'),
(404, 'RT13', 10, 'VIS', 'Selasa', '07:00:00', '10:30:00', 'Kecerdasan Artifisial'),
(405, 'RT13', 3, 'MMH', 'Selasa', '11:20:00', '15:20:00', 'Dasar Pemrograman'),
(406, 'RT13', 5, 'CDR', 'Rabu', '07:00:00', '10:30:00', 'Konsep Teknologi Informasi'),
(407, 'RT13', 15, 'PPA', 'Kamis', '12:50:00', '16:20:00', 'Pemrograman Berbasis Objek'),
(408, 'RT13', 38, 'TRI', 'Jumat', '07:50:00', '11:20:00', 'Matematika Lanjut'),
(409, 'RT13', 5, 'ODT', 'Jumat', '13:40:00', '17:10:00', 'Critical Thinking and Problem Solving'),
(410, 'RT14', 45, 'MEA', 'Senin', '07:00:00', '10:30:00', 'Tata Kelola Teknologi Informasi'),
(411, 'RT14', 10, 'ANR', 'Senin', '10:30:00', '14:30:00', 'Desain Antarmuka'),
(412, 'RT14', 17, 'PYS', 'Senin', '14:30:00', '17:10:00', 'Manajemen Proyek'),
(413, 'RT14', 39, 'HED', 'Selasa', '07:00:00', '10:30:00', 'Basis Data Lanjut'),
(414, 'RT14', 8, 'MQ', 'Selasa', '10:30:00', '14:30:00', 'Dasar Pemrograman'),
(415, 'RT14', 30, 'HEN', 'Selasa', '14:30:00', '17:10:00', 'Bahasa Indonesia'),
(416, 'RT14', 30, 'AFP', 'Rabu', '07:00:00', '10:30:00', 'Matematika Dasar'),
(417, 'RT14', 27, 'WIS', 'Rabu', '11:20:00', '15:20:00', 'Sistem Informasi Manajemen'),
(418, 'RT14', 9, 'WID', 'Rabu', '15:30:00', '17:10:00', 'Pancasila'),
(419, 'RT14', 12, 'VAH', 'Kamis', '07:00:00', '10:30:00', 'Pemrograman Berbasis Objek'),
(420, 'RT14', 33, 'ZFP', 'Kamis', '10:30:00', '13:40:00', 'Bahasa Indonesia'),
(421, 'RT14', 42, 'SBS', 'Kamis', '13:40:00', '17:10:00', 'Bahasa Inggris Persiapan Kerja'),
(422, 'RT14', 34, 'AF', 'Jumat', '07:50:00', '09:30:00', 'Agama'),
(423, 'RT14', 31, 'AF', 'Jumat', '09:40:00', '11:20:00', 'Agama'),
(425, 'ABC', 11, 'RPB', 'Senin', '07:10:00', '08:10:00', 'Matematika'),
(426, 'ABC', 11, 'DHK', 'Senin', '07:10:00', '08:10:00', 'Basis Data Lanjut');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` char(2) NOT NULL,
  `prodi` enum('TI','SIB','PLS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `prodi`) VALUES
(1, '1A', 'TI'),
(2, '1B', 'TI'),
(3, '1C', 'TI'),
(4, '1D', 'TI'),
(5, '1E', 'TI'),
(6, '1F', 'TI'),
(7, '1G', 'TI'),
(8, '1H', 'TI'),
(9, '1I', 'TI'),
(10, '2A', 'TI'),
(11, '2B', 'TI'),
(12, '2C', 'TI'),
(13, '2D', 'TI'),
(14, '2E', 'TI'),
(15, '2F', 'TI'),
(16, '2G', 'TI'),
(17, '2H', 'TI'),
(18, '2I', 'TI'),
(19, '3A', 'TI'),
(20, '3B', 'TI'),
(21, '3C', 'TI'),
(22, '3D', 'TI'),
(23, '3E', 'TI'),
(24, '3F', 'TI'),
(25, '3G', 'TI'),
(26, '3H', 'TI'),
(27, '3I', 'TI'),
(28, '1A', 'SIB'),
(29, '1B', 'SIB'),
(30, '1C', 'SIB'),
(31, '1D', 'SIB'),
(32, '1E', 'SIB'),
(33, '1F', 'SIB'),
(34, '1G', 'SIB'),
(35, '2A', 'SIB'),
(36, '2B', 'SIB'),
(37, '2C', 'SIB'),
(38, '2D', 'SIB'),
(39, '2E', 'SIB'),
(40, '3A', 'SIB'),
(41, '3B', 'SIB'),
(42, '3C', 'SIB'),
(43, '3D', 'SIB'),
(44, '3E', 'SIB'),
(45, '3F', 'SIB'),
(46, '4G', 'TI'),
(47, '4H', 'TI'),
(48, '4I', 'TI'),
(49, '4D', 'SIB'),
(50, '4E', 'SIB'),
(51, '4F', 'SIB'),
(52, '4G', 'SIB'),
(53, '1A', 'PLS');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `status` enum('Proses','Selesai') DEFAULT NULL,
  `kode_ruangan` varchar(4) DEFAULT NULL,
  `confirm` enum('Approve','Decline') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_user`, `tanggal_pinjam`, `tanggal_kembali`, `keterangan`, `no_telp`, `status`, `kode_ruangan`, `confirm`) VALUES
(35, 12, '2023-12-19', '2023-12-20', '-', '082183711', 'Selesai', 'LPY1', 'Approve'),
(36, 12, '2023-12-15', '2023-12-16', '-', '-', 'Selesai', 'LPR4', NULL),
(37, 12, '2023-12-18', '2023-12-19', '-', '-', 'Selesai', 'LPR1', 'Approve'),
(38, 13, '2023-12-19', '2023-12-20', 'wow', '019273981', 'Proses', 'RT02', 'Approve'),
(39, 13, '2023-12-19', '2023-12-20', 'Rapat', '082140810656', 'Proses', 'LPY1', 'Decline'),
(40, 13, '2023-12-19', '2023-12-20', 'Rapat WRI', '018723182', 'Proses', 'RT06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kode` char(5) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `lantai` enum('5','6','7','8') NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`kode`, `nama_ruangan`, `lantai`, `kapasitas`) VALUES
('ABC', 'Aku Bisa Ceria', '5', 30),
('LAI1', 'Lab Kecerdasan Buatan 1', '8', 30),
('LAI2', 'Lab Kecerdasan Buatan 2', '8', 30),
('LERP', 'Lab ERP', '7', 30),
('LIG1', 'Lab Visi Komputer 1', '7', 30),
('LIG2', 'Lab Visi Komputer 2', '7', 30),
('LKJ1', 'Lab Sist Komp dan Jaringan 1', '7', 30),
('LKJ2', 'Lab Sist Komp dan Jaringan 2', '7', 30),
('LKJ3', 'Lab Sist Komp dan Jaringan 3', '7', 30),
('LPR1', 'Lab Pemrograman 1', '7', 30),
('LPR2', 'Lab Pemrograman 2', '7', 30),
('LPR3', 'Lab Pemrograman 3', '7', 30),
('LPR4', 'Lab Pemrograman 4', '7', 30),
('LPR5', 'Lab Pemrograman 5', '7', 30),
('LPR6', 'Lab Pemrograman 6', '7', 30),
('LPR7', 'Lab Pemrograman 7', '7', 30),
('LPR8', 'Lab Pemrograman 8', '7', 30),
('LPY1', 'Lab Proyek 1', '5', 30),
('LPY2', 'Lab Proyek 2', '6', 30),
('LPY3', 'Lab Proyek 3', '6', 30),
('LSI1', 'Lab Sist Informasi 1', '6', 30),
('LSI2', 'Lab Sist Informasi 2', '6', 30),
('LSI3', 'Lab Sist Informasi 3', '6', 30),
('OOP', 'Object Oriented Programming', '5', 30),
('RT01', 'Ruang Teori 1', '5', 60),
('RT02', 'Ruang Teori 02', '5', 30),
('RT03', 'Ruang Teori 03', '5', 60),
('RT04', 'Ruang Teori 04', '5', 30),
('RT05', 'Ruang Teori 05', '5', 60),
('RT06', 'Ruang Teori 06', '5', 30),
('RT07', 'Ruang Teori 07', '5', 60),
('RT08', 'Ruang Teori 08', '8', 30),
('RT09', 'Ruang Teori 09', '8', 30),
('RT10', 'Ruang Teori 10', '8', 30),
('RT13', 'Ruang Teori 13', '8', 30),
('RT14', 'Ruang Teori 14', '8', 30);

--
-- Triggers `ruangan`
--
DELIMITER $$
CREATE TRIGGER `before_delete_ruangan` BEFORE DELETE ON `ruangan` FOR EACH ROW BEGIN
    DECLARE jumlah_peminjaman INT;

    SELECT COUNT(*) INTO jumlah_peminjaman
    FROM peminjaman
    WHERE kode_ruangan = OLD.kode;

    IF jumlah_peminjaman > 0 THEN
        SIGNAL SQLSTATE '45000';
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cek_kapasitas` BEFORE INSERT ON `ruangan` FOR EACH ROW BEGIN
    IF NEW.kapasitas < 0 THEN
        SIGNAL SQLSTATE '45000';
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cek_kapasitas_edit` BEFORE UPDATE ON `ruangan` FOR EACH ROW BEGIN
    IF NEW.kapasitas < 0 THEN
        SIGNAL SQLSTATE '45000';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` char(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` enum('Mahasiswa','Dosen','Admin') NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_user`, `username`, `password`, `jabatan`, `email`, `role`) VALUES
(7, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'ad@gmail.com', 'Admin'),
(12, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Dosen', '-', 'User'),
(13, 'Rama Pramudhita Bhaskara', '2241720128', 'ee11cbb19052e40b07aac0ca060c23ee', 'Mahasiswa', 'ramapb7b@gmail.com', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_ruangan`
--
ALTER TABLE `detail_ruangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_ruangan` (`kode_ruangan`),
  ADD KEY `id_fasilitas` (`id_fasilitas`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_ruang` (`kode_ruang`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `kode_dosen` (`kode_dosen`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id` (`id`),
  ADD KEY `kode_ruangan` (`kode_ruangan`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_ruangan`
--
ALTER TABLE `detail_ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_ruangan`
--
ALTER TABLE `detail_ruangan`
  ADD CONSTRAINT `detail_ruangan_ibfk_1` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ruangan_ibfk_2` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`kode_ruang`) REFERENCES `ruangan` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`kode_dosen`) REFERENCES `dosen` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
