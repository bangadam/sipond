-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sipond
CREATE DATABASE IF NOT EXISTS `sipond` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sipond`;

-- Dumping structure for table sipond.bio_siswa
CREATE TABLE IF NOT EXISTS `bio_siswa` (
  `no_induk` char(20) NOT NULL,
  `no_induk_temp` varchar(20) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` varchar(40) NOT NULL,
  `jk` varchar(40) NOT NULL,
  `k_agama` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `alamat_siswa` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(60) NOT NULL,
  `pekerjaan_ayah` varchar(60) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `no_hp_ayah` varchar(40) NOT NULL,
  `nama_ibu` varchar(60) NOT NULL,
  `pekerjaan_ibu` varchar(60) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `no_hp_ibu` varchar(40) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `no_telp_rmh` varchar(40) DEFAULT NULL,
  `nama_wali` varchar(60) DEFAULT NULL,
  `pekerjaan_wali` varchar(60) DEFAULT NULL,
  `alamat_wali` varchar(100) DEFAULT NULL,
  `hubungan_wali` varchar(40) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `nisn` varchar(100) DEFAULT NULL,
  `anak_ke` varchar(100) DEFAULT NULL,
  `diterima_dikelas` varchar(10) DEFAULT NULL,
  `diterima_tanggal` varchar(50) DEFAULT NULL,
  `status_dalam_keluarga` varchar(50) DEFAULT NULL,
  `no_telp_wali` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`no_induk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.bio_siswa: ~27 rows (approximately)
/*!40000 ALTER TABLE `bio_siswa` DISABLE KEYS */;
INSERT INTO `bio_siswa` (`no_induk`, `no_induk_temp`, `nama_lengkap`, `nama_panggilan`, `tmp_lahir`, `tgl_lahir`, `jk`, `k_agama`, `foto`, `alamat_siswa`, `nama_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `no_hp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `no_hp_ibu`, `alamat_ortu`, `no_telp_rmh`, `nama_wali`, `pekerjaan_wali`, `alamat_wali`, `hubungan_wali`, `password`, `pendidikan_terakhir`, `nisn`, `anak_ke`, `diterima_dikelas`, `diterima_tanggal`, `status_dalam_keluarga`, `no_telp_wali`) VALUES
	('2221889330292827', '4929857414070550', 'Lanang', 'Rachel', 'magni', '1994-07-03', 'Pria', 2, 'Qui hic eveniet qui ut dolor.', 'quos', 'Candrakanta', 'est', 'quo', '0810 5705 9293', 'Amelia', 'exercitationem', 'sed', '0446 5055 7483', 'voluptatem', '0931 5203 513', 'Clara', 'quasi', 'et', 'maxime', 'rerum', 'eveniet', '4929986316451343', '1', 'optio', '2016-09-29', '1', '0873 0909 5315'),
	('2351645315377021', '2467384897762464', 'Umi', 'Yani', 'quia', '2011-09-05', 'Pria', 2, 'Maxime dolore deserunt saepe fugit sunt.', 'delectus', 'Banawa', 'odio', 'veniam', '0279 7311 6606', 'Tira', 'sequi', 'ut', '0863 4427 1101', 'ad', '(+62) 355 2180 8501', 'Bancar', 'in', 'sapiente', 'expedita', 'et', 'adipisci', '2371373348615962', '1', 'nisi', '1982-12-26', '1', '(+62) 434 0977 3473'),
	('2582459131267965', '5585158106541350', 'Laras', 'Gandewa', 'qui', '1982-05-25', 'Pria', 2, 'Suscipit commodi est aut.', 'dicta', 'Kusuma', 'consequuntur', 'corporis', '0421 2362 886', 'Oliva', 'sunt', 'nesciunt', '(+62) 963 5512 4321', 'praesentium', '(+62) 671 8159 7033', 'Kania', 'quia', 'ut', 'quis', 'quis', 'itaque', '2633044802030717', '1', 'ullam', '2015-08-21', '1', '(+62) 311 2434 4344'),
	('2601936303653095', '4556112439428007', 'Cakrawala', 'Harsaya', 'omnis', '1994-11-22', 'Pria', 2, 'Est fuga facere quia voluptatem.', 'cumque', 'Latika', 'consequatur', 'et', '0385 3797 7544', 'Tira', 'voluptates', 'eum', '0546 2156 327', 'omnis', '0726 1301 3617', 'Nadia', 'dolores', 'qui', 'et', 'id', 'porro', '4752763497971338', '1', 'magni', '2014-06-01', '1', '0954 5586 3917'),
	('2720480657338298', '4863001450389107', 'Amelia', 'Edison', 'similique', '1973-09-27', 'Pria', 2, 'Recusandae maiores vero sed distinctio voluptatem in.', 'vero', 'Suci', 'nihil', 'possimus', '(+62) 823 568 994', 'Dimas', 'et', 'eligendi', '(+62) 579 6598 200', 'expedita', '(+62) 24 7443 3471', 'Samiah', 'vel', 'non', 'modi', 'debitis', 'officia', '4716645105042690', '1', 'error', '2003-05-26', '1', '0202 9032 604'),
	('343581009364717', '4916575626344101', 'Hairyanto', 'Paiman', 'voluptatem', '2009-03-22', 'Pria', 2, 'Ut voluptas libero expedita nisi repellat.', 'molestiae', 'Lili', 'ipsam', 'ab', '0873 6116 3971', 'Dina', 'laborum', 'reiciendis', '0351 1393 998', 'aut', '(+62) 728 1217 601', 'Wawan', 'ut', 'et', 'velit', 'aspernatur', 'quia', '379217918453187', '1', 'doloremque', '2001-06-21', '1', '0832 996 898'),
	('344080259239306', '2374839862644510', 'Daryani', 'Indah', 'voluptatem', '1997-05-20', 'Pria', 2, 'Blanditiis temporibus velit fugiat architecto nam ea.', 'autem', 'Lala', 'dolorem', 'rerum', '028 1307 3996', 'Hadi', 'rerum', 'magnam', '(+62) 309 4524 3283', 'animi', '0403 9670 588', 'Karman', 'facere', 'velit', 'eos', 'quasi', 'pariatur', '2691540635065068', '1', 'omnis', '1991-10-18', '1', '(+62) 844 249 995'),
	('373643317632590', '4485231335331788', 'Wadi', 'Icha', 'et', '2000-04-16', 'Pria', 2, 'Aliquam aut sed autem ut adipisci.', 'pariatur', 'Eka', 'aut', 'perspiciatis', '(+62) 470 7278 860', 'Zelda', 'perferendis', 'et', '0574 1788 7566', 'nihil', '(+62) 25 2167 7994', 'Tari', 'explicabo', 'ut', 'quibusdam', 'deleniti', 'et', '4485203694558', '1', 'eos', '2000-08-18', '1', '(+62) 868 190 678'),
	('377079371463141', '5305134450836836', 'Cawisadi', 'Drajat', 'voluptatem', '1980-09-02', 'Pria', 2, 'Aut tempore consequatur hic quia.', 'voluptates', 'Dwi', 'quo', 'fugit', '(+62) 681 1898 4857', 'Hamima', 'fugiat', 'sed', '0211 5762 754', 'consequatur', '(+62) 746 1068 8472', 'Ina', 'ex', 'natus', 'reiciendis', 'assumenda', 'quo', '4214937086018', '1', 'quos', '2005-05-15', '1', '0707 7663 653'),
	('4485087887018714', '2593658092279037', 'Panji Hidayanto S.E.I', 'Prabawa Dabukke', 'consequatur', '2009-11-25', 'Pria', 2, 'Id sunt id ex.', 'cumque', 'Najib Gunarto', 'qui', 'quia', '0534 4358 0534', 'Cakrabuana Setiawan', 'pariatur', 'minus', '0825 6423 336', 'magnam', '(+62) 777 0259 2523', 'Ajiono Manullang', 'voluptate', 'dolorem', 'magnam', 'necessitatibus', 'quis', '5582732013441921', '1', 'voluptatum', '2012-03-11', '1', '0742 5548 330'),
	('4485350730982712', '4556088861079452', 'Siti', 'Simon', 'eum', '1972-06-02', 'Pria', 2, 'Voluptatum quo aspernatur dolorem praesentium est adipisci.', 'unde', 'Teddy', 'ipsam', 'et', '0846 312 602', 'Laras', 'deleniti', 'esse', '(+62) 429 0040 3655', 'dolorem', '(+62) 746 8985 3862', 'Karimah', 'et', 'voluptas', 'natus', 'aliquid', 'autem', '2668993361198927', '1', 'delectus', '2017-05-02', '1', '(+62) 607 7848 240'),
	('4532625916291043', '4556420204570162', 'Yahya', 'Kartika', 'expedita', '2013-11-23', 'Pria', 2, 'Ipsa omnis culpa aspernatur error iusto.', 'doloribus', 'Empluk', 'voluptas', 'dicta', '0995 7849 7304', 'Uli', 'enim', 'non', '(+62) 909 5323 5437', 'suscipit', '0790 5950 661', 'Janet', 'a', 'qui', 'et', 'dolores', 'possimus', '5181579831643245', '1', 'cupiditate', '1977-12-31', '1', '0939 7019 117'),
	('4532737036400469', '377972293949199', 'Winda Halimah', 'Mahmud Januar', 'perferendis', '1994-04-05', 'Pria', 2, 'Suscipit quia quod est vel.', 'omnis', 'Uchita Zulaikha Yulianti', 'atque', 'doloribus', '0813 001 844', 'Prayitna Prayoga', 'voluptates', 'ratione', '(+62) 608 5538 7260', 'aliquam', '(+62) 892 9724 373', 'Anastasia Victoria Hassanah S.Farm', 'qui', 'rerum', 'perspiciatis', 'corporis', 'tenetur', '2312136728575912', '1', 'quae', '2015-02-07', '1', '(+62) 559 6033 929'),
	('4532840214473942', '2642363813042118', 'Adinata', 'Vivi', 'dignissimos', '2010-11-10', 'Pria', 2, 'Dolorem velit omnis voluptas et.', 'dolorem', 'Devi', 'qui', 'voluptatem', '(+62) 642 7805 775', 'Tirtayasa', 'quas', 'pariatur', '(+62) 612 5662 977', 'incidunt', '(+62) 782 6199 3345', 'Artanto', 'et', 'error', 'quisquam', 'esse', 'magni', '6011828978172870', '1', 'voluptas', '2018-04-11', '1', '025 5739 5776'),
	('4532995215871120', '4532761586658', 'Cinta', 'Rangga', 'accusamus', '1989-05-30', 'Pria', 2, 'Repellendus reprehenderit magnam sapiente ipsa similique.', 'modi', 'Kamal', 'provident', 'dolor', '0946 8966 9916', 'Jaka', 'deserunt', 'unde', '(+62) 357 7580 152', 'quidem', '(+62) 21 4172 9717', 'Icha', 'voluptatem', 'ducimus', 'ratione', 'voluptas', 'est', '4901124313887606', '1', 'vitae', '2019-07-23', '1', '0588 9809 0985'),
	('4539391030498781', '4532945790424936', 'Aditya', 'Mariadi', 'quasi', '1971-12-05', 'Pria', 2, 'Similique et quos sint nesciunt aut occaecati.', 'quia', 'Humaira', 'aliquid', 'et', '0384 5644 401', 'Jabal', 'vel', 'voluptatem', '0513 6587 0413', 'officia', '(+62) 242 5599 687', 'Vicky', 'explicabo', 'fugit', 'iste', 'vitae', 'at', '4929140933926614', '1', 'molestiae', '1993-04-24', '1', '(+62) 702 5167 190'),
	('4716017103728920', '2559903487614824', 'Galar', 'Cinta', 'fugiat', '2010-06-23', 'Pria', 2, 'Dolor autem vero excepturi.', 'nesciunt', 'Bagya', 'porro', 'aperiam', '0869 3038 5701', 'Cawisono', 'ipsum', 'provident', '(+62) 674 5643 9176', 'qui', '(+62) 319 1611 281', 'Rika', 'aliquid', 'vero', 'magni', 'beatae', 'quisquam', '4544637431480486', '1', 'incidunt', '1976-03-05', '1', '(+62) 681 9049 1607'),
	('4716242502375269', '4539681969647030', 'Betania', 'Anita', 'neque', '1988-07-22', 'Pria', 2, 'Quasi similique provident neque aut.', 'sunt', 'Darman', 'consequuntur', 'quis', '0800 018 310', 'Eman', 'vitae', 'aut', '0735 3378 666', 'assumenda', '(+62) 899 434 913', 'Hani', 'fugit', 'perferendis', 'incidunt', 'enim', 'officiis', '5249582404461615', '1', 'optio', '2019-08-05', '1', '(+62) 22 7170 4201'),
	('4716861047696242', '2221101836168984', 'Erik', 'Gaiman', 'odio', '2004-03-01', 'Pria', 2, 'Voluptas est iusto fugiat illo necessitatibus.', 'aut', 'Hartaka', 'voluptate', 'exercitationem', '(+62) 888 8940 065', 'Hasna', 'repellendus', 'corporis', '0748 5812 2406', 'facilis', '(+62) 776 7283 7387', 'Kadir', 'nesciunt', 'voluptatem', 'ipsam', 'dolorum', 'sunt', '6011887252426659', '1', 'ea', '1998-06-20', '1', '(+62) 493 1155 8762'),
	('4916138493562782', '5279793619093811', 'Ade', 'Saadat', 'ipsum', '1980-09-06', 'Pria', 2, 'Quia omnis optio dolorem praesentium.', 'illo', 'Citra', 'dignissimos', 'vel', '0862 1568 574', 'Karma', 'aliquam', 'excepturi', '(+62) 477 4368 3642', 'tenetur', '0539 6620 645', 'Mulya', 'est', 'sapiente', 'eos', 'dolores', 'perferendis', '2351653790822347', '1', 'et', '1996-05-10', '1', '(+62) 936 5082 0506'),
	('4916367560614487', '4916806444547801', 'Kiandra', 'Ganda', 'repudiandae', '1983-02-08', 'Pria', 2, 'Sequi eveniet consequatur error.', 'mollitia', 'Warta', 'reprehenderit', 'velit', '0901 0510 168', 'Zamira', 'temporibus', 'quod', '0871 6686 9988', 'quia', '0242 3388 629', 'Narji', 'ut', 'soluta', 'veniam', 'assumenda', 'ea', '2407788873802719', '1', 'veritatis', '1992-05-20', '1', '0918 6368 0536'),
	('4929041694039987', '4024007102542544', 'Ghaliyati', 'Pangestu', 'eveniet', '1997-03-03', 'Pria', 2, 'Culpa officia alias animi officiis doloribus.', 'ut', 'Labuh', 'officia', 'ipsam', '0687 6986 973', 'Alika', 'amet', 'enim', '(+62) 818 5137 3377', 'ipsum', '(+62) 872 563 663', 'Tiara', 'qui', 'provident', 'nesciunt', 'ipsa', 'non', '4916682699288668', '1', 'voluptatem', '2011-09-23', '1', '(+62) 443 6425 3217'),
	('5259628870927618', '5141869496576775', 'Tira', 'Warsa', 'eum', '1972-04-14', 'Pria', 2, 'Reiciendis ipsa et autem.', 'perspiciatis', 'Yoga', 'doloribus', 'aliquam', '(+62) 497 9537 001', 'Yulia', 'et', 'expedita', '(+62) 229 2980 5193', 'eligendi', '(+62) 612 1292 321', 'Lalita', 'voluptate', 'dolorem', 'animi', 'qui', 'autem', '2525298752457566', '1', 'quo', '2011-04-08', '1', '(+62) 543 6543 5259'),
	('5383509448418448', '4929174755817213', 'Hamima', 'Paulin', 'praesentium', '1997-10-30', 'Pria', 2, 'At et incidunt vel.', 'expedita', 'Salwa', 'voluptates', 'odio', '0530 4239 3119', 'Nyana', 'quia', 'quo', '(+62) 516 5156 5263', 'quis', '(+62) 245 2642 650', 'Julia', 'aut', 'officiis', 'repellat', 'optio', 'rem', '4916778201736077', '1', 'quas', '1973-07-19', '1', '(+62) 307 6803 3287'),
	('5514177044088395', '4532394008641', 'Bahuwirya Napitupulu', 'Jasmin Kusmawati', 'nesciunt', '1999-01-12', 'Pria', 2, 'Eos earum aperiam excepturi.', 'recusandae', 'Nilam Riyanti S.Gz', 'ut', 'et', '(+62) 403 9943 7453', 'Ade Widiastuti', 'adipisci', 'qui', '(+62) 517 8377 446', 'excepturi', '(+62) 387 5133 6575', 'Kezia Fathonah Rahayu S.Sos', 'dolor', 'doloribus', 'ipsum', 'quaerat', 'harum', '4916076675221118', '1', 'et', '1983-06-16', '1', '0805 2548 188'),
	('5529192352160333', '2221817341598296', 'Kajen', 'Jessica', 'molestias', '1996-03-12', 'Pria', 2, 'Id est qui velit.', 'in', 'Kenes', 'pariatur', 'et', '025 4809 192', 'Sari', 'reprehenderit', 'fugiat', '0906 3979 2876', 'veniam', '0308 7332 875', 'Pranata', 'nihil', 'voluptas', 'asperiores', 'fuga', 'maxime', '4485808358974360', '1', 'autem', '2004-02-02', '1', '0560 0568 3115'),
	('6011986134598287', '2693240251138640', 'Saadat', 'Dalima', 'quae', '1992-07-22', 'Pria', 2, 'Ut labore adipisci at repellat voluptas ut.', 'eum', 'Halim', 'eos', 'porro', '(+62) 998 1382 412', 'Raden', 'libero', 'voluptatem', '0593 0296 5748', 'necessitatibus', '0652 4573 817', 'Rafid', 'eos', 'et', 'omnis', 'autem', 'voluptas', '2660204038662172', '1', 'qui', '1972-10-05', '1', '(+62) 615 0565 2830');
/*!40000 ALTER TABLE `bio_siswa` ENABLE KEYS */;

-- Dumping structure for table sipond.jenis_bayar
CREATE TABLE IF NOT EXISTS `jenis_bayar` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_bayar` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.jenis_bayar: ~2 rows (approximately)
/*!40000 ALTER TABLE `jenis_bayar` DISABLE KEYS */;
INSERT INTO `jenis_bayar` (`id_jenis`, `jenis_bayar`) VALUES
	(1, 'test'),
	(3, 'jenis bayar oke');
/*!40000 ALTER TABLE `jenis_bayar` ENABLE KEYS */;

-- Dumping structure for table sipond.jenis_prestasi
CREATE TABLE IF NOT EXISTS `jenis_prestasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sipond.jenis_prestasi: ~2 rows (approximately)
/*!40000 ALTER TABLE `jenis_prestasi` DISABLE KEYS */;
INSERT INTO `jenis_prestasi` (`id`, `nama`) VALUES
	(2, 'Akademik'),
	(3, 'Olahraga');
/*!40000 ALTER TABLE `jenis_prestasi` ENABLE KEYS */;

-- Dumping structure for table sipond.jenis_produk_bayar
CREATE TABLE IF NOT EXISTS `jenis_produk_bayar` (
  `id_jenis_produk` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_produk` varchar(30) NOT NULL,
  `nominal` double NOT NULL,
  PRIMARY KEY (`id_jenis_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.jenis_produk_bayar: ~0 rows (approximately)
/*!40000 ALTER TABLE `jenis_produk_bayar` DISABLE KEYS */;
INSERT INTO `jenis_produk_bayar` (`id_jenis_produk`, `jenis_produk`, `nominal`) VALUES
	(1, 'oke', 20000);
/*!40000 ALTER TABLE `jenis_produk_bayar` ENABLE KEYS */;

-- Dumping structure for table sipond.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` char(5) NOT NULL,
  `gen_kelas` int(2) NOT NULL,
  `nm_kelas` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.kelas: ~0 rows (approximately)
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;

-- Dumping structure for table sipond.kelas_siswa
CREATE TABLE IF NOT EXISTS `kelas_siswa` (
  `id_kelas` char(5) NOT NULL,
  `no_induk` char(20) NOT NULL,
  `k_jabatan_siswa` int(11) NOT NULL,
  KEY `detail_kelas` (`id_kelas`),
  KEY `detail_siswa` (`no_induk`),
  CONSTRAINT `detail_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  CONSTRAINT `detail_siswa` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.kelas_siswa: ~0 rows (approximately)
/*!40000 ALTER TABLE `kelas_siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `kelas_siswa` ENABLE KEYS */;

-- Dumping structure for table sipond.kesehatan
CREATE TABLE IF NOT EXISTS `kesehatan` (
  `id_kesehatan` int(11) NOT NULL AUTO_INCREMENT,
  `no_induk` char(20) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `keluhan` varchar(70) NOT NULL,
  `obat` varchar(70) NOT NULL,
  `catatan` varchar(70) NOT NULL,
  PRIMARY KEY (`id_kesehatan`),
  KEY `kesehatan_siswa` (`no_induk`),
  CONSTRAINT `kesehatan_siswa` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.kesehatan: ~4 rows (approximately)
/*!40000 ALTER TABLE `kesehatan` DISABLE KEYS */;
INSERT INTO `kesehatan` (`id_kesehatan`, `no_induk`, `tgl_mulai`, `tgl_selesai`, `keluhan`, `obat`, `catatan`) VALUES
	(1, '2221889330292827', '2020-02-05', '2020-02-13', 'sakit', 'madu', 'madu adalah obat segala penyakit'),
	(2, '2351645315377021', '2020-02-11', '2020-02-13', 'sakif flu', 'panadol', 'Sering pusing-pusing krn kebanyakan makan'),
	(3, '2351645315377021', '2020-02-11', '2020-02-18', 'Mual', 'madu spesial', 'kurang tidur'),
	(5, '2221889330292827', '2020-02-20', '2020-02-20', 'panu', 'kalpanax', 'sedikit panu di punggung');
/*!40000 ALTER TABLE `kesehatan` ENABLE KEYS */;

-- Dumping structure for table sipond.pelanggaran
CREATE TABLE IF NOT EXISTS `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(25) NOT NULL,
  `skor` int(11) NOT NULL,
  PRIMARY KEY (`id_pelanggaran`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.pelanggaran: ~2 rows (approximately)
/*!40000 ALTER TABLE `pelanggaran` DISABLE KEYS */;
INSERT INTO `pelanggaran` (`id_pelanggaran`, `keterangan`, `skor`) VALUES
	(1, 'Berkelahi', 40),
	(2, 'Kabur', 30);
/*!40000 ALTER TABLE `pelanggaran` ENABLE KEYS */;

-- Dumping structure for table sipond.pelanggaran_detail
CREATE TABLE IF NOT EXISTS `pelanggaran_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggaran` int(11) NOT NULL,
  `no_induk` char(20) NOT NULL,
  `id_tindakan` int(11) NOT NULL,
  `catatan` varchar(70) NOT NULL,
  `poin` int(11) NOT NULL,
  `tgl_pelanggaran` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pelanggaran_siswa` (`no_induk`),
  KEY `tindakan_siswa` (`id_tindakan`),
  KEY `pelanggaran_master` (`id_pelanggaran`),
  CONSTRAINT `pelanggaran_master` FOREIGN KEY (`id_pelanggaran`) REFERENCES `pelanggaran` (`id_pelanggaran`),
  CONSTRAINT `pelanggaran_siswa` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`),
  CONSTRAINT `tindakan_siswa` FOREIGN KEY (`id_tindakan`) REFERENCES `tindakan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.pelanggaran_detail: ~2 rows (approximately)
/*!40000 ALTER TABLE `pelanggaran_detail` DISABLE KEYS */;
INSERT INTO `pelanggaran_detail` (`id`, `id_pelanggaran`, `no_induk`, `id_tindakan`, `catatan`, `poin`, `tgl_pelanggaran`) VALUES
	(8, 1, '2221889330292827', 4, '3 lawan 1', 40, '2020-02-17'),
	(9, 2, '4532840214473942', 4, 'Lompat gerbang', 30, '2020-02-26');
/*!40000 ALTER TABLE `pelanggaran_detail` ENABLE KEYS */;

-- Dumping structure for table sipond.pembayaran
CREATE TABLE IF NOT EXISTS `pembayaran` (
  `no_nota` int(20) NOT NULL AUTO_INCREMENT,
  `no_induk` char(20) NOT NULL,
  `id_jenis_bayar` int(11) NOT NULL,
  `id_produk_bayar` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `catatan` varchar(80) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`no_nota`),
  KEY `no_induk` (`no_induk`,`id_jenis_bayar`,`id_produk_bayar`),
  KEY `jenis_bayar` (`id_jenis_bayar`),
  KEY `jenis_produk_bayar` (`id_produk_bayar`),
  CONSTRAINT `jenis_bayar` FOREIGN KEY (`id_jenis_bayar`) REFERENCES `jenis_bayar` (`id_jenis`),
  CONSTRAINT `jenis_produk_bayar` FOREIGN KEY (`id_produk_bayar`) REFERENCES `jenis_produk_bayar` (`id_jenis_produk`),
  CONSTRAINT `pembayaran_siswa` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.pembayaran: ~0 rows (approximately)
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;
INSERT INTO `pembayaran` (`no_nota`, `no_induk`, `id_jenis_bayar`, `id_produk_bayar`, `jumlah`, `catatan`, `tgl_pembayaran`, `created_at`, `updated_at`) VALUES
	(2, '2351645315377021', 3, 1, 348480, 'oke', '2020-02-07', '2020-02-07 08:44:12', '2020-02-07 08:44:12');
/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;

-- Dumping structure for table sipond.perizinan
CREATE TABLE IF NOT EXISTS `perizinan` (
  `id_izin` bigint(20) NOT NULL AUTO_INCREMENT,
  `no_induk` char(20) NOT NULL,
  `tgl_izin` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `penjemput` varchar(35) NOT NULL,
  `catatan` varchar(70) NOT NULL,
  `status_izin` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_izin`),
  KEY `siswa_izin` (`no_induk`),
  CONSTRAINT `siswa_izin` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.perizinan: ~0 rows (approximately)
/*!40000 ALTER TABLE `perizinan` DISABLE KEYS */;
INSERT INTO `perizinan` (`id_izin`, `no_induk`, `tgl_izin`, `tgl_kembali`, `penjemput`, `catatan`, `status_izin`) VALUES
	(3, '2582459131267965', '2020-02-22', '2020-02-23', 'asas', 'dasdasd', 'Belum Kembali');
/*!40000 ALTER TABLE `perizinan` ENABLE KEYS */;

-- Dumping structure for table sipond.perizinan_kembali
CREATE TABLE IF NOT EXISTS `perizinan_kembali` (
  `id_izin` bigint(20) NOT NULL,
  `no_induk` char(20) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status_kembali` char(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `perizinan_kembali` (`id_izin`),
  KEY `siswa_kembali` (`no_induk`),
  CONSTRAINT `perizinan_kembali` FOREIGN KEY (`id_izin`) REFERENCES `perizinan` (`id_izin`),
  CONSTRAINT `siswa_kembali` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.perizinan_kembali: ~0 rows (approximately)
/*!40000 ALTER TABLE `perizinan_kembali` DISABLE KEYS */;
/*!40000 ALTER TABLE `perizinan_kembali` ENABLE KEYS */;

-- Dumping structure for table sipond.prestasi
CREATE TABLE IF NOT EXISTS `prestasi` (
  `id_prestasi` int(11) NOT NULL AUTO_INCREMENT,
  `no_induk` char(20) NOT NULL,
  `tgl_prestasi` date NOT NULL,
  `jenis_prestasi_id` int(11) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prestasi`),
  KEY `prestasi_siswa` (`no_induk`),
  KEY `jenis_prestasi` (`jenis_prestasi_id`),
  CONSTRAINT `jenis_prestasi` FOREIGN KEY (`jenis_prestasi_id`) REFERENCES `jenis_prestasi` (`id`),
  CONSTRAINT `prestasi_siswa` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sipond.prestasi: ~0 rows (approximately)
/*!40000 ALTER TABLE `prestasi` DISABLE KEYS */;
INSERT INTO `prestasi` (`id_prestasi`, `no_induk`, `tgl_prestasi`, `jenis_prestasi_id`, `catatan`) VALUES
	(1, '2351645315377021', '2020-02-05', 3, '0');
/*!40000 ALTER TABLE `prestasi` ENABLE KEYS */;

-- Dumping structure for table sipond.tindakan
CREATE TABLE IF NOT EXISTS `tindakan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tindakan` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sipond.tindakan: ~4 rows (approximately)
/*!40000 ALTER TABLE `tindakan` DISABLE KEYS */;
INSERT INTO `tindakan` (`id`, `nama_tindakan`) VALUES
	(2, 'Dikeluarkan'),
	(3, 'Dipanggil orang tuanya'),
	(4, 'Dipanggil ke kepala sekolah'),
	(5, 'Dita\'zir');
/*!40000 ALTER TABLE `tindakan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
