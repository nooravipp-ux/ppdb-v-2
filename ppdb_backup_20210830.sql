-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 07:46 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_backup_20210830`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_course`
--

CREATE TABLE `m_course` (
  `id` bigint(20) NOT NULL,
  `course_code` varchar(30) DEFAULT NULL,
  `course_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_course`
--

INSERT INTO `m_course` (`id`, `course_code`, `course_name`, `created_at`) VALUES
(16, 'MP01', 'Bahasa Indonesia', '2021-10-09 06:05:01'),
(17, 'MP02', 'Matematika', '2021-10-12 05:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_announcement`
--

CREATE TABLE `t_announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_announcement`
--

INSERT INTO `t_announcement` (`id`, `title`, `description`, `status`, `created_at`) VALUES
(8, 'TES POTENSI AKADEMIK', '<p>Pelaksanaan Tes Khusus / Tes Potensi Akademik (TPA) Kegiatan PPDB SMK Widya Dirgantara&nbsp;Tahun pelajaran 2021/2022 akan dilaksanakan pada :<br />\r\nHari / Tanggal:<br />\r\n<strong>Senin / 21 Juni 2022&nbsp;(1 hari)</strong><br />\r\nBentuk Soal:<br />\r\n<strong>Pilihan Ganda</strong><br />\r\nJumlah Soal:<br />\r\n<strong>40 Soal</strong><br />\r\nAlokasi waktu:<br />\r\n<strong>45 menit</strong></p>\r\n\r\n<p>Dengan rincian jadwal pembagian sesi sebagai berikut :</p>\r\n\r\n<p><strong>SESI 1 - 08.00 s.d 08.45 WIB</strong></p>\r\n\r\n<p><strong>SESI 2 - 09.00 s.d 09.45 WIB</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>PERHATIAN!!!&nbsp;TES KHUSUS HANYA DILAKSANAKAN DALAM 1 HARI, TIDAK ADA TES KHUSUS SUSULAN</p>', 1, '2021-09-27 09:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `t_exam`
--

CREATE TABLE `t_exam` (
  `id` bigint(20) NOT NULL,
  `course_id` int(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `time_limit` varchar(1000) DEFAULT NULL,
  `question_limit_display` int(10) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `status` int(2) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_exam`
--

INSERT INTO `t_exam` (`id`, `course_id`, `title`, `time_limit`, `question_limit_display`, `description`, `date`, `start_time`, `end_time`, `status`, `created_at`) VALUES
(31, 16, 'Bahasa Indonesia', NULL, NULL, 'Tes Kemampuan Verbal', '2021-10-12', '2021-10-12 12:38:00', '2021-10-12 13:00:00', 1, '2021-10-09 06:05:47'),
(32, 17, 'Perhitungan', NULL, NULL, 'Variabel', '2021-10-12', '2021-10-12 12:35:00', '2021-10-12 12:40:00', 0, '2021-10-12 05:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `t_exam_answer`
--

CREATE TABLE `t_exam_answer` (
  `id` bigint(20) NOT NULL,
  `student_id` int(10) DEFAULT NULL,
  `exam_id` int(10) DEFAULT NULL,
  `question_id` int(10) DEFAULT NULL,
  `exam_answer` varchar(100) DEFAULT NULL,
  `exam_answer_status` int(2) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_exam_answer`
--

INSERT INTO `t_exam_answer` (`id`, `student_id`, `exam_id`, `question_id`, `exam_answer`, `exam_answer_status`, `created_at`) VALUES
(185, 60, 31, 50, 'Nyata', 0, '2021-10-09 06:19:28'),
(186, 60, 31, 51, 'Ilmu bahasa', 0, '2021-10-09 06:19:28'),
(187, 60, 31, 52, 'Membelah', 0, '2021-10-09 06:19:28'),
(188, 60, 31, 53, 'Pembongkaran', 0, '2021-10-09 06:19:28'),
(189, 60, 31, 54, 'Kacau', 0, '2021-10-09 06:19:28'),
(190, 60, 31, 55, 'Mustahil', 0, '2021-10-09 06:19:28'),
(191, 60, 31, 56, 'Tak setuju', 0, '2021-10-09 06:19:28'),
(192, 60, 31, 57, 'Aposteriori', 0, '2021-10-09 06:19:28'),
(193, 60, 31, 58, 'Agamis', 0, '2021-10-09 06:19:28'),
(194, 60, 31, 59, 'Kesempatan', 0, '2021-10-09 06:19:28'),
(195, 65, 31, 50, 'Nyata', 0, '2021-10-11 23:23:15'),
(196, 65, 31, 51, 'Bahasa simbol', 0, '2021-10-11 23:23:15'),
(197, 65, 31, 52, 'Perpecahan', 0, '2021-10-11 23:23:15'),
(198, 65, 31, 53, 'Pembongkaran', 0, '2021-10-11 23:23:15'),
(199, 65, 31, 54, 'Kacau', 0, '2021-10-11 23:23:15'),
(200, 65, 31, 55, 'Mustahil', 0, '2021-10-11 23:23:15'),
(201, 65, 31, 56, 'Tak setuju', 0, '2021-10-11 23:23:15'),
(202, 65, 31, 57, 'Proporsi', 0, '2021-10-11 23:23:15'),
(203, 65, 31, 58, 'Agamis', 0, '2021-10-11 23:23:15'),
(204, 65, 31, 60, 'Kesempatan', 0, '2021-10-11 23:23:15'),
(205, 67, 31, 50, 'Nyata', 0, '2021-10-12 05:39:24'),
(206, 67, 31, 51, 'Bahasa simbol', 0, '2021-10-12 05:39:24'),
(207, 67, 31, 52, 'Perpecahan', 0, '2021-10-12 05:39:24'),
(208, 67, 31, 53, 'Pembongkaran', 0, '2021-10-12 05:39:24'),
(209, 67, 31, 54, 'Kacau', 0, '2021-10-12 05:39:24'),
(210, 67, 31, 55, 'Masuk akal', 0, '2021-10-12 05:39:24'),
(211, 67, 31, 56, 'Tak setuju', 0, '2021-10-12 05:39:24'),
(212, 67, 31, 57, 'Proporsi', 0, '2021-10-12 05:39:24'),
(213, 67, 31, 58, 'Agamis', 0, '2021-10-12 05:39:24'),
(214, 67, 31, 61, 'Sejalan', 0, '2021-10-12 05:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `t_exam_attemp`
--

CREATE TABLE `t_exam_attemp` (
  `id` bigint(20) NOT NULL,
  `exam_id` int(10) DEFAULT NULL,
  `student_id` int(10) DEFAULT NULL,
  `score` decimal(10,0) DEFAULT NULL,
  `status` int(2) DEFAULT 0,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_exam_attemp`
--

INSERT INTO `t_exam_attemp` (`id`, `exam_id`, `student_id`, `score`, `status`, `date`) VALUES
(30, 31, 60, '20', 0, '2021-10-09 06:19:28'),
(31, 31, 65, '20', 1, '2021-10-11 23:23:15'),
(32, 31, 67, '40', 1, '2021-10-12 05:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `t_exam_question`
--

CREATE TABLE `t_exam_question` (
  `id` bigint(20) NOT NULL,
  `exam_id` int(10) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `opt_1` varchar(255) DEFAULT NULL,
  `opt_2` varchar(255) DEFAULT NULL,
  `opt_3` varchar(255) DEFAULT NULL,
  `opt_4` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_exam_question`
--

INSERT INTO `t_exam_question` (`id`, `exam_id`, `question`, `opt_1`, `opt_2`, `opt_3`, `opt_4`, `answer`, `status`) VALUES
(50, 31, 'Virtual', 'Maya', 'Impian', 'Nyata', 'Virgin', 'Impian', 0),
(51, 31, 'Semiotika', 'Ilmu tentang tanda', 'Ilmu seni', 'Ilmu bahasa', 'Bahasa simbol', 'Ilmu tentang tanda', 0),
(52, 31, 'Friksi', 'Membelah', 'Melepaskan', 'Perpecahan', 'Putus Asa', 'Perpecahan', 0),
(53, 31, 'Renovasi', 'Pemagaran', 'Pemugaran', 'Pembongkaran', 'Peningkatan', 'Pemugaran', 0),
(54, 31, 'Rancu', 'Canggung', 'Jorok', 'Kacau', 'Tidak wajar', 'Kacau', 0),
(55, 31, 'Absurd', 'Omong kosong', 'Istilah terkini', 'Mustahil', 'Masuk akal', 'Masuk akal', 0),
(56, 31, 'Prominen', 'Konsisten', 'Biasa', 'Tak setuju', 'Konsekuen', 'Biasa', 0),
(57, 31, 'Apriori', 'Unggulan', 'Tidak Istimewa', 'Proporsi', 'Aposteriori', 'Aposteriori', 0),
(58, 31, 'Utopis', 'Komunis', 'Realistis', 'Agamis', 'Sosialis', 'Realistis', 0),
(61, 31, 'Paradoks', 'Keseimbangan', 'Sejalan', 'Natural', 'Verbal', 'Sejalan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_registration`
--

CREATE TABLE `t_registration` (
  `id` bigint(20) NOT NULL,
  `no_pendaftaran` varchar(225) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `status` int(10) DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_registration`
--

INSERT INTO `t_registration` (`id`, `no_pendaftaran`, `student_id`, `status`, `date`) VALUES
(59, 'PPDB-TKJ-2021-1', 60, 1, '2021-10-02 10:04:18'),
(60, 'PPDB-TBSM-2021-2', 61, 0, '2021-10-11 15:24:46'),
(61, 'PPDB-TBSM-2021-3', 62, 0, '2021-10-11 15:54:00'),
(62, 'PPDB-TBSM-2021-4', 63, 0, '2021-10-11 15:54:24'),
(63, 'PPDB-TBSM-2021-5', 64, 0, '2021-10-11 15:55:31'),
(64, 'PPDB-TP-2021-6', 65, 1, '2021-10-11 18:19:35'),
(65, 'PPDB-TKJ-2021-7', 66, 1, '2021-10-11 23:30:22'),
(66, 'PPDB-TKJ-2021-8', 67, 1, '2021-10-11 23:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `t_student`
--

CREATE TABLE `t_student` (
  `id` bigint(20) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `pilihan_jurusan` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(225) DEFAULT NULL,
  `nik_siswa` varchar(255) DEFAULT NULL,
  `no_kk` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_registrasi_akta_lahir` varchar(255) DEFAULT NULL,
  `anak_ke` int(10) DEFAULT NULL,
  `jumlah_saudara_kandung` int(10) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` int(10) DEFAULT NULL,
  `nama_sekolah_asal` varchar(255) DEFAULT NULL,
  `alamat_sekolah` text DEFAULT NULL,
  `no_induk_siswa_nasional` varchar(255) DEFAULT NULL,
  `no_peserta_ujian_nasional` varchar(255) DEFAULT NULL,
  `tahun_ijazah` varchar(255) DEFAULT NULL,
  `no_seri_ijazah` varchar(255) DEFAULT NULL,
  `no_seri_skhun` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nik_ayah` varchar(255) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(255) DEFAULT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `pendidikan_ayah` varchar(255) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `penghasilan_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `nik_ibu` varchar(255) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(255) DEFAULT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `pendidikan_ibu` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `penghasilan_ibu` varchar(255) DEFAULT NULL,
  `alamat_ortu` text DEFAULT NULL,
  `kode_pos_ortu` int(10) DEFAULT NULL,
  `no_telp_ortu` varchar(255) DEFAULT NULL,
  `nama_wali` varchar(255) DEFAULT NULL,
  `pekerjaan_wali` varchar(255) DEFAULT NULL,
  `penghasilan_wali` varchar(255) DEFAULT NULL,
  `alamat_wali` text DEFAULT NULL,
  `kode_pos_wali` varchar(255) DEFAULT NULL,
  `hub_dengan_peserta_didik` varchar(255) DEFAULT NULL,
  `berat_badan` decimal(10,0) DEFAULT NULL,
  `tinggi_badan` decimal(10,0) DEFAULT NULL,
  `gol_darah` char(10) DEFAULT NULL,
  `riwayat_penyakit` varchar(255) DEFAULT NULL,
  `jarak_rumah_ke_sekolah` varchar(255) DEFAULT NULL,
  `transportasi` varchar(255) DEFAULT NULL,
  `file_ijazah` varchar(225) DEFAULT NULL,
  `file_ijazah_path_name` varchar(225) DEFAULT NULL,
  `file_skhun` varchar(255) DEFAULT NULL,
  `file_skhun_path_name` varchar(255) DEFAULT NULL,
  `file_surat_kelulusan` varchar(255) DEFAULT NULL,
  `file_surat_kelulusan_path_name` varchar(255) DEFAULT NULL,
  `file_kk` varchar(255) DEFAULT NULL,
  `file_kk_path_name` varchar(255) DEFAULT NULL,
  `file_akta` varchar(255) DEFAULT NULL,
  `file_akta_path_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_student`
--

INSERT INTO `t_student` (`id`, `user_id`, `pilihan_jurusan`, `nama_lengkap`, `nik_siswa`, `no_kk`, `tempat_lahir`, `tanggal_lahir`, `no_registrasi_akta_lahir`, `anak_ke`, `jumlah_saudara_kandung`, `jenis_kelamin`, `agama`, `email`, `no_telp`, `alamat`, `kode_pos`, `nama_sekolah_asal`, `alamat_sekolah`, `no_induk_siswa_nasional`, `no_peserta_ujian_nasional`, `tahun_ijazah`, `no_seri_ijazah`, `no_seri_skhun`, `nama_ayah`, `nik_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `nik_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `alamat_ortu`, `kode_pos_ortu`, `no_telp_ortu`, `nama_wali`, `pekerjaan_wali`, `penghasilan_wali`, `alamat_wali`, `kode_pos_wali`, `hub_dengan_peserta_didik`, `berat_badan`, `tinggi_badan`, `gol_darah`, `riwayat_penyakit`, `jarak_rumah_ke_sekolah`, `transportasi`, `file_ijazah`, `file_ijazah_path_name`, `file_skhun`, `file_skhun_path_name`, `file_surat_kelulusan`, `file_surat_kelulusan_path_name`, `file_kk`, `file_kk_path_name`, `file_akta`, `file_akta_path_name`) VALUES
(65, NULL, 'Teknik Pemesinan', 'Handayani', '3207090506930003', '3207010501930001', 'Ciamis', '2021-10-11', '3714-LE-28112012-021', 1, 3, 'P', 'Islam', 'emul8871@gmail.com', '089173746815', 'Jln. Wastu No. 12 RT01/RW01 Dusun Babakan Kecamatan Panjalu Kabupaten Ciamis', 46255, 'SMP N 1 Kawali', 'Jln Veteran No.12 RT04/RW04 Dusun Kawali Kecamatan Kawali Kabupaten Ciamis', '9205218337', '3-43-03-28-305-821-4', '2018', 'DN-07 Mk/12 0019425', 'DN-01 M 0525216', 'Lukman Nurhakim', '3042161536320026', 'Tasimalaya', '1975-12-29', 'S1', 'POLRI', '> 2.000.000', 'Nisa Siti', '3045471303890007', 'Ciamis', '1980-01-30', 'S1', 'Guru', '1.000.000 - 2.000.000', 'Jln Lingga Kencana No.78  RT05/RW10 Dusun Cisaga Kecamatan Cisaga Kabupaten Ciamis', 46254, '082368060761', 'Tuti Wartati', 'Buruh', '500.000 - 1.000.000', 'Jln Provinsi No.2 RT09/RW10 Kelurahan Cipaku Kecamatan Desa Wetan Kota Banjar', '46253', 'Kakak Kandung', '70', '180', 'A', 'Jantung', '1 - 3 Km', 'Motor', 'Ijazah Handayani.jpg', NULL, 'SKHUN Handayani.jpg', NULL, 'Surat Lulus Handayani.jpg', NULL, 'KK Handayani.jpg', NULL, 'Akta Handayani.jpeg', NULL),
(67, NULL, 'Teknik Komputer dan Jaringan', 'Yana Mulyana', '3207090506930002', '3207090506930009', 'Ciamis', '1998-01-07', '3578-LU-28112012-0018', 2, NULL, 'L', 'Islam', 'mulyanasmkwd@gmail.com', '089668060761', 'Jln. Lingga Kencana No. 48 RT02/RW08 Dusun Banjarwaru Kecamatan Kawali Kabupaten Ciamis', 46253, 'MTs Gereba', NULL, '9985057235', '4-17-02-14-104-195-6', '2017', 'DN-02 Mk/13 0056716', 'DN-02 M 0146308', 'Pirman', '3028140907250001', 'Ciamis', '1976-03-24', 'SMA / Sederajat', 'Wiraswasta', '500.000 - 1.000.000', 'Cicoh', '3025471305890005', 'Ciamis', '1980-04-21', 'SMA / Sederajat', 'Buruh', '500.000 - 1.000.000', 'Jln Lingga Kencana No.52 RT02/RW08 Dusun Banjarwaru Kecamatan Kawali', 46253, '089668060761', 'Ade Tatang', 'Guru', '1.000.000 - 2.000.000', 'Jln Lingga Kencana No.52 RT02 RW08 Dusun Banjarwaru Kecamatan Kawali Kabupaten', '46253', 'Kakak Kandung', '56', '175', NULL, 'Tidak Ada', '1 - 3 Km', 'Motor', 'Ijazah Yana.jpg', NULL, 'SKHUN Yana.jpg', NULL, 'SKHUN Yana.jpg', NULL, 'KK Yana.jpg', NULL, 'Akta Yana.jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `is_active` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `student_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_name`, `created_at`, `updated_at`, `is_active`) VALUES
(1, NULL, 'admin', 'admin@admin.com', NULL, '$2y$10$uAA/DJxTI0S5s46nzAXOROap5j1jFE4vs9OiCyqKUpPdDpn8.9xze', NULL, 'admin', '2021-06-24 05:06:04', '2021-06-24 05:06:04', 1),
(31, 65, 'Handayani', 'emul8871@gmail.com', NULL, '$2y$10$gQ7b6P4HPgjY1KgM7rVfWe9ziVrv./e/t4DMKSpeo0Rkvo6v7vcUq', NULL, 'siswa', '2021-10-11 16:16:06', '2021-10-11 16:16:06', 0),
(33, 67, 'Yana Mulyana', 'mulyanasmkwd@gmail.com', NULL, '$2y$10$Y0.G1KSB1AzPzfyV/8Arouh0oxMT1zViCrPRcb2HM4Vv7a5jampC6', NULL, 'siswa', '2021-10-11 22:29:41', '2021-10-11 22:29:41', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_course`
--
ALTER TABLE `m_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `t_announcement`
--
ALTER TABLE `t_announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_exam`
--
ALTER TABLE `t_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_exam_answer`
--
ALTER TABLE `t_exam_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_exam_attemp`
--
ALTER TABLE `t_exam_attemp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_exam_question`
--
ALTER TABLE `t_exam_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_registration`
--
ALTER TABLE `t_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_student`
--
ALTER TABLE `t_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_course`
--
ALTER TABLE `m_course`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_announcement`
--
ALTER TABLE `t_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_exam`
--
ALTER TABLE `t_exam`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `t_exam_answer`
--
ALTER TABLE `t_exam_answer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `t_exam_attemp`
--
ALTER TABLE `t_exam_attemp`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `t_exam_question`
--
ALTER TABLE `t_exam_question`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `t_registration`
--
ALTER TABLE `t_registration`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `t_student`
--
ALTER TABLE `t_student`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
