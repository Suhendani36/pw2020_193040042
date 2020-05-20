-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2020 at 09:50 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040042`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

DROP TABLE IF EXISTS `makanan`;
CREATE TABLE IF NOT EXISTS `makanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bahan` longtext NOT NULL,
  `daerah_asal` varchar(255) NOT NULL,
  `manfaat` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `gambar`, `nama`, `bahan`, `daerah_asal`, `manfaat`) VALUES
(1, 'kunefe.jpg', 'Kunefe', 'Keju, Kacang Pistachio, Krim, Ice cream', 'Turki', 'menambah sumber protein, serat, dan antioksidan yang baik dan menjaga berat badan seimbang        '),
(2, 'sop.jpg', 'Sop Konro', 'Iga Sapi atau Daging Sapi', 'Sulawesi Selatan', 'Untuk pencegahan penyakit dan peningkatan kesehatan'),
(3, 'mieaceh.jpg', 'Mie Aceh', 'Daging sapi, Mie, udang dan Sayuran', 'Aceh', 'Untuk pembentukan sel-sel tubuh karena terkandung udang'),
(4, 'bika.jpg', 'Bika AMbon', 'Telur, Gula dan Santan', 'Sumatra utara', 'Memberikan tambahan energi dan karbohidrat'),
(5, 'pendap.jpg', 'Pendap', 'Ikan kembung,Kelapa,dll', 'Bengkulu', 'Menurunkan kadar kolestrol'),
(6, 'rendang.jpg', 'Rendang Sapi', 'Daging sapi, Bumbu rendang dan Santan', 'Padang, Sumatra Barat', 'Menyehatkan'),
(7, 'gulai.jpg', 'Gulai Ikan Patin', 'Ikan Patin, bumbu gulai', 'Jambi', 'Mencerdaskan otak, Menyehatkan mata dan tulang'),
(8, 'kebab.jpg', 'Kebab', 'Tortila, daging, sayuran, dll', 'Turki', 'Meningkatkan kecerdasan otak, Mencegah anemia, Sumber energi'),
(9, 'TD.jpg', 'Lokum atau Turkish delight', 'tepung maizena, gula bubuk, air, perasa buah', 'Turki', 'menambah energi, mengandung protein untuk mempercepat penyembuhan luka.'),
(10, 'sushi.jpg', 'Sushi', 'Beras jepang, nori, crab stick,timun dll', 'Jepang', 'Meningkatkan Sistem Kekebalan, Meningkatkan Metabolisme, Kaya Kandungan Omega-3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'dani', '$2y$10$uC529fEXhKG2emGEc44oU.CyVTn3YmI/.5ec/MMVIMtwFlwnmgDja'),
(5, 'uwatere', '$2y$10$h2ycgJccIYJiSCl6JLb31uBliaZ6HVPKdoR6Pj0ovOvBf2khCwqhy'),
(6, 'aduh', '$2y$10$/tYIJhefBr6NftShNjLZOOVDzh7Ncq5MxtCULTQfhYxuwAI.LhHsi'),
(7, 'asmin', '$2y$10$aXC4uxiJ1wUaYRYbaDeh5uPc97mpnjm7DAYZ2NWhQVb9fWfu4lhXS'),
(8, 'as', '$2y$10$G494QY.YQgzyeVdsIaYIx.gDjDePlLbNGox8zxnjv/TlWzQjIdkPu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
