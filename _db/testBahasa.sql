-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1,	'arjuna',	'2ea41863add9406830e378b9345ffe3b');

DROP TABLE IF EXISTS `hargaPembelajaran`;
CREATE TABLE `hargaPembelajaran` (
  `id_harga` int NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(25) NOT NULL,
  `kelebihan` text NOT NULL,
  `harga` varchar(40) NOT NULL,
  PRIMARY KEY (`id_harga`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `hargaPembelajaran` (`id_harga`, `nama_paket`, `kelebihan`, `harga`) VALUES
(1,	'Paket Standart',	'kelebihan 1</br>\r\nkelebihan 2</br>',	'50000'),
(2,	'Paket Medium',	'kelebihan 1</br>\r\nkelebihan 2</br>\r\nkelebihan 3</br>\r\nkelebihan 4</br>',	'100000'),
(3,	'Paket Super',	'kelebihan 1</br>\r\nkelebihan 2</br>\r\nkelebihan 3</br>\r\nkelebihan 4</br>\r\nkelebihan 5</br>\r\nkelebihan 6</br>',	'150000');

DROP TABLE IF EXISTS `listening`;
CREATE TABLE `listening` (
  `id` int NOT NULL AUTO_INCREMENT,
  `voice` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `jenis_test` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `listening` (`id`, `voice`, `status`, `jenis_test`) VALUES
(1,	'asd.mp3',	'tidak akti',	'ielts'),
(2,	'Amnesia.mp3',	'aktif',	'tofle'),
(3,	'Amnesia.mp3',	'tidak akti',	'tofle'),
(4,	'Amnesia.mp3',	'aktif',	'ielts'),
(5,	'post_1597863465_ZjnExWJHpXhrfQeKFCgDtyqczoIdaNSl',	'tidak akti',	'tofle'),
(6,	'',	'tidak akti',	'');

DROP TABLE IF EXISTS `materi`;
CREATE TABLE `materi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_mentor` varchar(50) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `link` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_mentor` (`nama_mentor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `materi` (`id`, `nama_mentor`, `judul`, `link`, `keterangan`) VALUES
(3,	'Herlian Aliyasa almaj duddin',	'learn ielts',	'https://www.youtube.com/watch?v=ZDv9njERj0s',	'percakapan untuk ielts'),
(4,	'almaj duddin',	'test',	'wauw youtube',	'membuat test menjadi mudah qwoieuoqiwe'),
(6,	'almaj duddin',	'test',	'youtube',	'membuat test menjadi mudah');

DROP TABLE IF EXISTS `mentor`;
CREATE TABLE `mentor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `nomer_tlp` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `mentor` (`id`, `nama`, `alamat`, `nomer_tlp`, `photo`) VALUES
(1,	'Herlian Aliyasa almaj duddin',	'sumorame candi',	'089283983772',	'vlcsnap-2020-04-28-11h37m23s995.png'),
(3,	'asdasda',	'asdasdasdq',	'12312312312',	'default.jpg'),
(4,	'asdasdqwe',	'1qasdq23qasd',	'1233322122222222',	'zenitsu-agatsuma-kimetsu-no-yaiba-4K-44.jpg'),
(6,	'',	'',	'',	'Screenshot.png'),
(7,	'test',	'test',	'1234560988',	'logo-umsida-03-800x565.png'),
(8,	'',	'',	'',	'Screenshot.png'),
(9,	'',	'',	'',	'vlcsnap-2020-04-28-11h37m23s99'),
(10,	'aaaaa',	'asdad',	'1234123',	'pexels-photo-204366.jpeg'),
(11,	'',	'',	'',	'pexels-photo-204366.jpeg'),
(13,	'aa',	'',	'',	'Screenshot.png'),
(14,	'aa',	'',	'',	'Screenshot.png'),
(15,	'aa',	'',	'',	'Screenshot.png'),
(16,	'asdasd',	'qweqw',	'1487162',	'vlcsnap-2020-04-28-11h37m23s99'),
(17,	'ASD',	'452dasdasda',	'0909090909',	''),
(18,	'aaaaa',	'asdasdl',	'1203123',	'4cc9a79e0180151e260cb0583530d7'),
(19,	'm,alskdal',	'kljakjsakld',	'10-239',	'4cc9a79e0180151e260cb0583530d7'),
(20,	'ASD',	'452dasdasda',	'0909090909',	'4cc9a79e0180151e260cb0583530d75a.png');

DROP TABLE IF EXISTS `raport`;
CREATE TABLE `raport` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `nilaiSP` varchar(30) NOT NULL,
  `nilaiSL` varchar(30) NOT NULL,
  `nilaiSE` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `statusTest` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `raport_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `raport` (`id`, `id_user`, `nilaiSP`, `nilaiSL`, `nilaiSE`, `jenis`, `statusTest`) VALUES
(1,	3,	'40',	'',	'',	'tofle',	''),
(3,	5,	'75',	'',	'',	'tofle',	''),
(4,	5,	'0',	'',	'',	'tofle',	''),
(5,	5,	'0',	'0',	'0',	'tofle',	'sudah'),
(6,	5,	'0',	'',	'',	'tofle',	''),
(7,	5,	'0',	'',	'',	'tofle',	''),
(8,	4,	'0',	'',	'',	'tofle',	''),
(9,	5,	'0',	'',	'',	'tofle',	''),
(10,	5,	'0',	'',	'',	'tofle',	''),
(11,	5,	'0',	'',	'',	'tofle',	''),
(12,	5,	'0',	'',	'',	'tofle',	''),
(13,	5,	'0',	'',	'',	'tofle',	''),
(14,	5,	'0',	'',	'',	'tofle',	''),
(15,	5,	'0',	'',	'',	'tofle',	''),
(16,	5,	'0',	'',	'',	'tofle',	''),
(17,	5,	'0',	'',	'',	'tofle',	'');

DROP TABLE IF EXISTS `soalessay`;
CREATE TABLE `soalessay` (
  `id` int NOT NULL AUTO_INCREMENT,
  `soal` varchar(35) NOT NULL,
  `jawaban` varchar(35) NOT NULL,
  `point` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `soalessay` (`id`, `soal`, `jawaban`, `point`) VALUES
(1,	'jaksdjlaksjdlk',	'lkasndlkajdoiqwmlk',	90);

DROP TABLE IF EXISTS `soallistening`;
CREATE TABLE `soallistening` (
  `id` int NOT NULL AUTO_INCREMENT,
  `a` varchar(25) NOT NULL,
  `b` varchar(25) NOT NULL,
  `c` varchar(25) NOT NULL,
  `d` varchar(25) NOT NULL,
  `point` int NOT NULL,
  `jawaban` varchar(35) NOT NULL,
  `jenis_test` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `soallistening` (`id`, `a`, `b`, `c`, `d`, `point`, `jawaban`, `jenis_test`) VALUES
(1,	'isi lagi',	'nggak mau isi',	'isi terus',	'isi aja',	80,	'c',	'tofle'),
(2,	'isi lagi',	'nggak mau isi',	'isi terus',	'isi aja',	80,	'c',	'tofle'),
(3,	'lagi',	'nggak mau isi',	'isi',	'isi aja',	80,	'b',	'tofle');

DROP TABLE IF EXISTS `soalpilihan`;
CREATE TABLE `soalpilihan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isi_soal` text NOT NULL,
  `a` varchar(15) NOT NULL,
  `b` varchar(15) NOT NULL,
  `c` varchar(15) NOT NULL,
  `d` varchar(15) NOT NULL,
  `jawaban` varchar(5) NOT NULL,
  `point` int NOT NULL,
  `jenis_test` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `soalpilihan` (`id`, `isi_soal`, `a`, `b`, `c`, `d`, `jawaban`, `point`, `jenis_test`) VALUES
(1,	'pilihlah dibawah ini',	'di',	'bawah',	'ini',	'pilih',	'a',	40,	'tofle'),
(2,	'memilih soal ?',	'tidak',	'bisa',	'kenapa',	'bertanya',	'a',	35,	'tofle'),
(3,	'membuat',	'kertas',	'origami',	'pedang',	'bukan semua',	'd',	60,	'ielts'),
(4,	'membuat',	'uang',	'beneran',	'katan',	'bukan d',	'c',	80,	'ielts');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(35) NOT NULL,
  `lastName` varchar(35) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dateBirth` varchar(30) NOT NULL,
  `education` varchar(20) NOT NULL,
  `photo` varchar(35) NOT NULL,
  `jenisTest` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `address`, `phone`, `dateBirth`, `education`, `photo`, `jenisTest`, `status`, `username`, `password`) VALUES
(1,	'asdasd',	'askldjalsk',	'lkjasldk',	'',	'',	'',	'',	'',	'',	'',	'alksjdl',	'asdasd'),
(2,	'asdasd',	'askldjalsk',	'lkjasldk',	'',	'',	'',	'',	'',	'',	'',	'alksjdl',	'123123'),
(3,	'asdasd',	'askldjalsk',	'lkjasldk',	'',	'',	'',	'',	'',	'',	'',	'alksjdl',	'123456789'),
(4,	'herlian',	'aliyasa',	'herlianali@yahoo.co.id',	'',	'',	'',	'',	'',	'tofle',	'gratis',	'wadau',	'icimonji'),
(5,	'test',	'test',	'test@yahoo.co.id',	'',	'',	'',	'',	'',	'ielts',	'berbayar',	'test',	'test12345'),
(6,	'asdasd',	'asda',	'qweq',	'',	'123456789',	'',	'',	'',	'tofle',	'gratis',	'123',	'123');

-- 2020-09-11 22:37:31
