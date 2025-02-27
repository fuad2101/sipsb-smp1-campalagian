-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table smp1-campalagian.gurus: ~61 rows (approximately)
REPLACE INTO `gurus` (`id`, `nama`, `mata_pelajaran`, `jabatan`, `created_at`, `updated_at`, `foto`) VALUES
	(1, 'Dra. Hj. Muftiah', 'Pendidikan Kewarganegaraan', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/1.jpg'),
	(2, 'Hasriana, S.Pd', 'Pendidikan Kewarganegaraan', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/2.jpg'),
	(3, 'Nurmiati, S.Pd ', 'Pendidikan Kewarganegaraan', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/3.jpg'),
	(4, 'Martan, S.Ag', 'Pendidikan Agama Islam', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/4.jpg'),
	(5, 'Nurintang, S.Ag', 'Pendidikan Agama Islam', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/5.jpg'),
	(6, 'Patmawati Rahman, S.Pd.I ', 'Pendidikan Agama Islam', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/6.jpg'),
	(7, 'Dewi Nurhayati, S.Pd ', 'Bahasa Indonesia', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/7.jpg'),
	(8, 'Darmawati, S.Pd', 'Bahasa Indonesia', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/8.jpg'),
	(9, 'Nisma, S.Pd ', 'Bahasa Indonesia', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/9.jpg'),
	(10, 'Busra Adelimah, S.Pd ', 'Bahasa Indonesia', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/10.jpg'),
	(11, 'Fajrin, S.Pd ', 'Bahasa Indonesia', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/11.jpg'),
	(12, 'Sohibah Sain, S.Pd ', 'Matematika', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/12.jpg'),
	(13, 'Rubiah, S.Pd ', 'Matematika', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/13.jpg'),
	(14, 'Ramlah, S.Pd', 'Matematika', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/14.jpg'),
	(15, 'Saidah, S.Pd ', 'Matematika', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/15.jpg'),
	(16, 'Nurbiyah Najamuddin, S.Pd ', 'Matematika', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/16.jpg'),
	(17, 'Hj. Nurmalasari, S.Pd', 'IPA', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/17.jpg'),
	(18, 'Samsudduha, S.Pd ', 'IPA', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/18.jpg'),
	(19, 'Musdalipa B., S.Pd', 'IPA', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/19.jpg'),
	(20, 'Marwah, S.Si.M.Pd', 'IPA', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/20.jpg'),
	(21, 'Nurmalasari A., S.Pd ', 'IPA', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/21.jpg'),
	(22, 'M. Yusuf, S.Pd ', 'IPS', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/22.jpg'),
	(23, 'Dra. Jasyanti, S.Pd ', 'IPS', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/23.jpg'),
	(24, 'Rahmi, S.Pd ', 'IPS', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/24.jpg'),
	(25, 'Muhammad Yusuf, S.Pd ', 'IPS', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/25.jpg'),
	(26, 'Fadhlan, S.Pd', 'IPS', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/26.jpg'),
	(27, 'Hj. St. Saenab, S., S.Pd ', 'Bahasa Inggris', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/27.jpg'),
	(28, 'Suhradina, S.Pd.I ', 'Bahasa Inggris', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/28.jpg'),
	(29, 'Nurmiftahul Jannah, S.Pd ', 'Bahasa Inggris', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/29.jpg'),
	(30, 'Jerni, S.Pd ', 'Bahasa Inggris', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/30.jpg'),
	(31, 'Hernawati Bt Ibrahim, S.Pd ', 'Bahasa Inggris', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/31.jpg'),
	(32, 'Irmayani Ahmad, S.Pd ', 'Bahasa Inggris', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/32.jpg'),
	(33, 'Magfirah, S.Pd ', 'Seni Budaya', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/33.jpg'),
	(34, 'Fitriani, S.Pd', 'Seni Budaya', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/34.jpg'),
	(35, 'Ade Reskia Djawad, S.Pd ', 'Seni Budaya', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/35.jpg'),
	(36, 'Aldilah Maamun, S.Pd', 'PJOK', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/36.jpg'),
	(37, 'Yulhaidir, S.Pd ', 'PJOK', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/37.jpg'),
	(38, 'Ikram, S.Pd.M.Pd', 'PJOK', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/38.jpg'),
	(39, 'Multi Muradewi, S.T', 'Informatika', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/39.jpg'),
	(40, 'Cici Khaera Annisa, S.Pd ', 'Informatika', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/40.jpg'),
	(41, 'Hj. Haua, S.Pd ', 'Prakarya', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/41.jpg'),
	(42, 'Sitti Syahria Azis, S.Kom', 'Prakarya', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/42.jpg'),
	(43, 'Dra. Hasan M.,M.Pd ', 'Bimbingan dan Konseling ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/43.jpg'),
	(44, 'Sitti Aisyah, S.Pd ', 'Bimbingan dan Konseling ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/44.jpg'),
	(45, 'Aldi Widiyanto, S.Pd ', 'Bimbingan dan Konseling ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/45.jpg'),
	(46, 'Sartika Sumaila, S.Pd ', 'Bimbingan dan Konseling ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/46.jpg'),
	(47, 'Asbudi Adinata Putra, S.Pd', 'Bimbingan dan Konseling ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/47.jpg'),
	(48, 'Takrim H. ', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/48.jpg'),
	(49, 'Hj. Darmawati H. ', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/49.jpg'),
	(50, 'Hj. Hadijah, S.HI', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/50.jpg'),
	(51, 'Satria, S.E ', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/51.jpg'),
	(52, 'Nurnaila T., S.Pd', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/52.jpg'),
	(53, 'Munirah, A.Ma.Pust ', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/53.jpg'),
	(54, 'Hasnawati Genda, S.Pd', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/54.jpg'),
	(55, 'Abd. Rahman ', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/55.jpg'),
	(56, 'Nursan, A.Md.Kom', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/56.jpg'),
	(57, 'Suherman, S.HI', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/57.jpg'),
	(58, 'Taslim ', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/58.jpg'),
	(59, 'Erni ', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/59.jpg'),
	(60, 'Nur Alam ', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/60.jpg'),
	(61, 'Nurfadila', 'Staf Administrasi ', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Guru/61.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
