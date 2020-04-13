-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2020 at 02:22 PM
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
  `bahan` varchar(255) NOT NULL,
  `daerah_asal` varchar(255) NOT NULL,
  `manfaat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `gambar`, `nama`, `bahan`, `daerah_asal`, `manfaat`) VALUES
(1, 'kunefe.jpg', 'Kunefe', 'Keju, Kacang Pistachio, Krim, Ice cream', 'Turki', 'menambah sumber protein, serat, dan antioksidan yang baik dan menjaga berat badan seimbang'),
(2, 'sop.jpg', 'Sop Konro', 'Iga Sapi atau Daging Sapi', 'Sulawesi Selatan', 'Untuk pencegahan penyakit dan peningkatan kesehatan'),
(3, 'mieaceh.jpg', 'Mie Aceh', 'Daging sapi, Mie, udang dan Sayuran', 'Aceh', 'Untuk pembentukan sel-sel tubuh karena terkandung udang'),
(4, 'bika.jpg', 'Bika AMbon', 'Telur, Gula dan Santan', 'Sumatra utara', 'Memberikan tambahan energi dan karbohidrat'),
(5, 'pendap.jpg', 'Pendap', 'Ikan kembung,Kelapa,dll', 'Bengkulu', 'Menurunkan kadar kolestrol'),
(6, 'rendang.jpg', 'Rendang Sapi', 'Daging sapi, Bumbu rendang dan Santan', 'Padang, Sumatra Barat', 'Menyehatkan'),
(7, 'gulai.jpg', 'Gulai Ikan Patin', 'Ikan Patin, bumbu gulai', 'Jambi', 'Mencerdaskan otak, Menyehatkan mata dan tulang'),
(8, 'kebab.jpg', 'Kebab', 'Tortila, daging, sayuran, dll', 'Turki', 'Meningkatkan kecerdasan otak, Mencegah anemia, Sumber energi'),
(9, 'TD.jpg', 'Lokum atau Turkish delight', 'tepung maizena, gula bubuk, air, perasa buah', 'Turki', 'menambah energi, mengandung protein untuk mempercepat penyembuhan luka.'),
(10, 'sushi.jpg', 'Sushi', 'Beras jepang, nori, crab stick,timun dll', 'Jepang', 'Meningkatkan Sistem Kekebalan, Meningkatkan Metabolisme, Kaya Kandungan Omega-3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
