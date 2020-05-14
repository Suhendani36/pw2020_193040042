-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2020 at 03:13 PM
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
-- Database: `pw_193040042`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Suhendani', '193040042', '193040042.suhendani@mail.unpas.ac.id', 'Teknik Informatika', 'dani.jpg'),
(2, 'herlan nurachman', '193040043', '193040043@mail.unpas.ac.id', 'Teknik Informatika', 'herlan.jpg'),
(3, 'Rayhan Abduhuda', '193040044', '193040044@mail.unpas.ac.id', 'Teknik Mesin', 'ray.jpg'),
(4, 'Dian Nuryana', '193040045', '193040045@mail.unpas.ac.id', 'Teknik Informatika', 'dian.jpg'),
(5, 'Aji Nuansa Sengarie', '193040046', '193040046@mail.unpas.ac.id', 'Teknik Informatika', 'aji.jpg'),
(6, 'Fauzan ihsanuddin ramadhan', '193040047', '193040047@mail.unpas.ac.id', 'Teknik Informatika', 'fauzanir.jpg'),
(7, 'sulthan jihad abiyyu', '193040048', '193040048@mail.unpas.ac.id', 'Teknik Informatika', 'sultan.jpg'),
(8, 'Salsabila Nada Adzani', '193040050', '193040050@mail.unpas.ac.id', 'Teknik Informatika', 'salsa.jpg'),
(9, 'Usep Syaiful Hidayat', '193040051', '193040051@mail.unpas.ac.id', 'Teknik Informatika', 'usep.jpg'),
(10, 'Adinda Fadhil Patria', '193040052', '193040052@mail.unpas.ac.id', 'Teknik Informatika', 'dida.jpg'),
(14, 'Fauzan Nursalma Mawardi', '193040053', '193040053@mail.unpas.ac.id', 'Teknik Informatika', 'fauzan.jpg'),
(17, 'Hannan Fakhrul Hakim', '193040073', '193040073@mail.unpas.ac.id', 'Teknik Informatika', 'hanan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345'),
(2, 'suhendani', '$2y$10$X.t9X59WOLMwTnSNhLN7j.0Z8IILtXKPRGnCp2qoZxYyKod6Ra/JC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
