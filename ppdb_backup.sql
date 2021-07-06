/*
SQLyog Enterprise
MySQL - 10.4.19-MariaDB : Database - db_ppdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `failed_jobs` */

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `m_course` */

CREATE TABLE `m_course` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(30) DEFAULT NULL,
  `course_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `m_course` */

insert  into `m_course`(`id`,`course_code`,`course_name`,`created_at`) values 
(5,'C001','Uji Akadmeik','2021-06-28 23:04:13'),
(6,'C0032','Uji Kompetensi','2021-06-29 02:06:51');

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `password_resets` */

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `t_exam` */

CREATE TABLE `t_exam` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `course_id` int(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `time_limit` varchar(1000) DEFAULT NULL,
  `question_limit_display` int(10) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `status` int(2) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `t_exam` */

insert  into `t_exam`(`id`,`course_id`,`title`,`time_limit`,`question_limit_display`,`description`,`date`,`start_time`,`end_time`,`status`,`created_at`) values 
(18,5,'Uji Akademik Calon Siswa','10',10,'Ujian masuk peserta didik baru','2021-07-07','07:00:00','09:00:00',1,'2021-06-28 23:05:37'),
(19,5,'test akademik gel 2','30',10,'test akademik gel 2','2021-07-14','09:00:00','10:00:00',1,'2021-06-29 00:07:56'),
(20,6,'UTS','20',100,'Ujian Tengah Semester','2021-07-21','12:30:00','14:00:00',1,'2021-06-29 02:07:37');

/*Table structure for table `t_exam_answer` */

CREATE TABLE `t_exam_answer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_id` int(10) DEFAULT NULL,
  `exam_id` int(10) DEFAULT NULL,
  `question_id` int(10) DEFAULT NULL,
  `exam_answer` varchar(100) DEFAULT NULL,
  `exam_answer_status` int(2) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb4;

/*Data for the table `t_exam_answer` */

insert  into `t_exam_answer`(`id`,`student_id`,`exam_id`,`question_id`,`exam_answer`,`exam_answer_status`,`created_at`) values 
(130,11,18,16,'jakarta',0,'2021-07-07 00:20:20'),
(131,11,18,17,'new york',0,'2021-07-07 00:20:20'),
(132,11,18,18,'RAM',0,'2021-07-07 00:20:20'),
(133,11,18,19,'Nopi Ramsari',0,'2021-07-07 00:20:20'),
(134,11,20,21,'Air',0,'2021-07-07 00:22:54'),
(135,11,20,22,'Soekarno',0,'2021-07-07 00:22:54'),
(136,11,20,23,'Naruto Uzumaki',0,'2021-07-07 00:22:54'),
(137,11,20,24,'Batu',0,'2021-07-07 00:22:54'),
(138,11,20,25,'Persatuan Indonesia',0,'2021-07-07 00:22:54'),
(139,11,20,26,'Karpet',0,'2021-07-07 00:22:54'),
(140,11,20,27,'CPU',0,'2021-07-07 00:22:54'),
(141,11,20,28,'White green – green - white orange – blue - white blue - orange – white brown - brown',0,'2021-07-07 00:22:54'),
(142,11,20,29,'Topologi',0,'2021-07-07 00:22:54'),
(143,11,20,30,'ping domain.com',0,'2021-07-07 00:22:54'),
(144,11,20,31,'Hiroshima',0,'2021-07-07 00:22:54');

/*Table structure for table `t_exam_attemp` */

CREATE TABLE `t_exam_attemp` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `exam_id` int(10) DEFAULT NULL,
  `student_id` int(10) DEFAULT NULL,
  `score` decimal(10,0) DEFAULT NULL,
  `status` int(2) DEFAULT 0,
  `date` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `t_exam_attemp` */

insert  into `t_exam_attemp`(`id`,`exam_id`,`student_id`,`score`,`status`,`date`) values 
(16,18,11,50,1,'2021-07-07 00:20:20'),
(17,20,11,73,1,'2021-07-07 00:22:54');

/*Table structure for table `t_exam_question` */

CREATE TABLE `t_exam_question` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `exam_id` int(10) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `opt_1` varchar(255) DEFAULT NULL,
  `opt_2` varchar(255) DEFAULT NULL,
  `opt_3` varchar(255) DEFAULT NULL,
  `opt_4` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

/*Data for the table `t_exam_question` */

insert  into `t_exam_question`(`id`,`exam_id`,`question`,`opt_1`,`opt_2`,`opt_3`,`opt_4`,`answer`,`status`) values 
(1,13,'siapa presiden pertama RI ?','ir soekarno','bj habibi','soeharto','megawati','ir soekarno',0),
(2,13,'siapa nama ayah naruto ?','sasuke','kakashi','madara','yondaime','yondaime',0),
(3,13,'tytyt','o','u','r','t',NULL,0),
(4,13,'apa nama saya ?','apip','jhon','dalton','doni',NULL,0),
(5,13,'apa nama saya','jhon','dalton','muri','apip',NULL,0),
(6,13,'sebutkan nama dari perangkat keras, kecuali :','cpu','ram','keyboard','mouse',NULL,0),
(7,13,'apa nama lain dari burung ?','aves','omnivora','karnivora','predator',NULL,0),
(8,13,'siapa presiden kedua indonesia ?','soekarnoo','soeharto','bj habibi','megawati',NULL,0),
(9,17,'SIAPA NAMA PRESIDEN AMERIKA ?','BARACK OBAMA','DONAL TRUMP','MCMOHAN','THE ROCK',NULL,0),
(10,17,'SIAPA NAMA DOSEN FIKI UNTUK MATA KULIAH TEKNIK KOMPILASI ?','ZEIN MUHAMMAAD','FUAD MUHAMMAD','NOPI RAMSARI','TEDI HIDAYAT',NULL,0),
(11,16,'siapa nama presiden amerika ?','barack obama','donal trump','hilary clinton','jhon due',NULL,0),
(12,16,'siapa nama ibu dia ?','rukimah','solihah','muslihat','cucu',NULL,0),
(13,16,'apa ibu kota indonesia','bandung','jakarta','surabaya','bekasi',NULL,0),
(14,16,'nama hero dalam film superman ?','tony startk',NULL,NULL,NULL,NULL,0),
(15,16,'siapa nama presiden jimbabwe','uhuhuh','hshas','hjhj','lk','lk',0),
(16,18,'Apa nama ibu kota indonesia ?','jakarta','bandung','surabaya','semarang','jakarta',0),
(17,18,'Apa nama ibu kota amerika sertikat ?','canada','new york','new delhi','paris','new york',0),
(18,18,'Berikut salah satu komponen komputer, kecuali :','CPU','Keyboard','RAM','RODA','RODA',0),
(19,18,'Siapa KA Prodi Fakultas Ilmu Komputer dan Informatika di univaersitas Nurtanio Bandung sekarang ?','Nopi Ramsari','Suharjanto Utomo','Tutwuri Handayani','Ariawan','Suharjanto Utomo',0),
(20,19,'siapa nama presiden ke 2 indonesia ?','soeharto','soekarno','habibi','jokowi dodo','soeharto',0),
(21,20,'Apa nama lain dari Co2 ?','Api','Air','Tanah','Angin','Air',0),
(22,20,'Siapa presiden indonesia pertama ?','Soekarno','Soeharto','megawati','jokowi','Soekarno',0),
(23,20,'Siapa nama karakter utama pada serial Naruto Shipudden?','Naruto Uzumaki','Hatake Kakashi','Gaara','Sasuke','Naruto Uzumaki',0),
(24,20,'Dibawah ini contoh makanan yang mengandung protein, kecuali :','Ayam','Wortel','Kalkun','Batu','Ayam',0),
(25,20,'Apa butir sila ke 3 pada pancasila ?','Ketuhanan yang Maha Esa','Keadilan yang beradab','kemanusiaan yang beradab','Persatuan Indonesia','Persatuan Indonesia',0),
(26,20,'Berikut bagian komponen dari komputer kecuali :','CPU','Keyboard','RAM','Karpet','Karpet',0),
(27,20,'Untuk menginstall komputer kita perlu menyiapkan','Sistem Operasi','Kentang','CPU','HARDISK','Sistem Operasi',0),
(28,20,'Kombinasi pengkabelan straight pada jaringan komputer yang sesuai dengan standart internasional adalah..','White orange – orange - white green – blue - white blue - green – white brown - brown','White orange – orange - white green – green - white blue - blue – white brown - brown','White green – green - white orange – blue - white blue - orange – white brown - brown','White orange – orange - white green - green - white blue - blue – white brown - brown','White orange – orange - white green – blue - white blue - green – white brown - brown',0),
(29,20,'Skema desain pembangunan sebuah jaringan komputer dikenal dengan istilah','Jaringan tipe','Topologi','Desain Jaringan','Media transmisi','Topologi',0),
(30,20,'Text perintah yang harus dijalankan untuk melihat apakah kita sudah terhubung ke domain.com adalah dengan menjalankan perintah','install domain.com','ls domain.com','ping domain.com','rm domain.com','ping domain.com',0),
(31,20,'Berikut adalah kota yang di bom atom di jepang, kecuali :','Hiroshima','Tokyo','Nevada','Washington','Hiroshima',0);

/*Table structure for table `t_registration` */

CREATE TABLE `t_registration` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `status` int(10) DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `t_registration` */

insert  into `t_registration`(`id`,`student_id`,`status`,`date`) values 
(10,11,1,'2021-07-06 02:49:58');

/*Table structure for table `t_student` */

CREATE TABLE `t_student` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `nama_lengkap` varchar(225) DEFAULT NULL,
  `nik_siswa` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_registrasi_akta_lahir` varchar(255) DEFAULT NULL,
  `anak_ke` int(10) DEFAULT NULL,
  `jumlah_saudara_kandung` int(10) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` int(10) DEFAULT NULL,
  `nama_sekolah_asal` varchar(255) DEFAULT NULL,
  `alamat_sekolah` text DEFAULT NULL,
  `no_induk_siswa_nasional` varchar(255) DEFAULT NULL,
  `no_peserta_ujian_nasional` varchar(255) DEFAULT NULL,
  `tahun_ijazah` year(4) DEFAULT NULL,
  `no_seri_ijazah` varchar(255) DEFAULT NULL,
  `no_seri_skhun` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nik_ayah` varchar(255) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(255) DEFAULT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `pendidikan_ayah` varchar(255) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `penghasilan_ayah` int(10) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `nik_ibu` varchar(255) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(255) DEFAULT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `pendidikan_ibu` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `penghasilan_ibu` int(10) DEFAULT NULL,
  `alamat_ortu` text DEFAULT NULL,
  `kode_pos_ortu` int(10) DEFAULT NULL,
  `no_telp_ortu` varchar(255) DEFAULT NULL,
  `nama_wali` varchar(255) DEFAULT NULL,
  `pekerjaan_wali` varchar(255) DEFAULT NULL,
  `penghasilan_wali` int(10) DEFAULT NULL,
  `alamat_wali` text DEFAULT NULL,
  `kode_pos_wali` varchar(255) DEFAULT NULL,
  `hub_dengan_peserta_didik` varchar(255) DEFAULT NULL,
  `berat_badan` decimal(10,0) DEFAULT NULL,
  `tinggi_badan` decimal(10,0) DEFAULT NULL,
  `riwayat_penyakit` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `t_student` */

insert  into `t_student`(`id`,`user_id`,`nama_lengkap`,`nik_siswa`,`tempat_lahir`,`tanggal_lahir`,`no_registrasi_akta_lahir`,`anak_ke`,`jumlah_saudara_kandung`,`agama`,`email`,`no_telp`,`alamat`,`kode_pos`,`nama_sekolah_asal`,`alamat_sekolah`,`no_induk_siswa_nasional`,`no_peserta_ujian_nasional`,`tahun_ijazah`,`no_seri_ijazah`,`no_seri_skhun`,`nama_ayah`,`nik_ayah`,`tempat_lahir_ayah`,`tanggal_lahir_ayah`,`pendidikan_ayah`,`pekerjaan_ayah`,`penghasilan_ayah`,`nama_ibu`,`nik_ibu`,`tempat_lahir_ibu`,`tanggal_lahir_ibu`,`pendidikan_ibu`,`pekerjaan_ibu`,`penghasilan_ibu`,`alamat_ortu`,`kode_pos_ortu`,`no_telp_ortu`,`nama_wali`,`pekerjaan_wali`,`penghasilan_wali`,`alamat_wali`,`kode_pos_wali`,`hub_dengan_peserta_didik`,`berat_badan`,`tinggi_badan`,`riwayat_penyakit`) values 
(11,NULL,'Nurapip','5522882828','Tasikmalaya','2021-07-22',NULL,NULL,NULL,'Islam','nooravipp9@gmail.com','08991848066','Bandung',NULL,'MTsN Mandalawangi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `is_active` int(2) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`student_id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`role_name`,`created_at`,`updated_at`,`is_active`) values 
(1,NULL,'admin','admin@admin.com',NULL,'$2y$10$uAA/DJxTI0S5s46nzAXOROap5j1jFE4vs9OiCyqKUpPdDpn8.9xze',NULL,'admin','2021-06-24 12:06:04','2021-06-24 12:06:04',1),
(13,11,'Nurapip','nooravipp9@gmail.com',NULL,'$2y$10$u3sl3QpPcR4CYi5NnP5NoOi.RLYxBp37tsGpfqSPnJYEY/FCyLHJa',NULL,'siswa','2021-07-05 19:50:31','2021-07-05 19:50:31',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
