-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql200.byetcluster.com
-- Generation Time: May 14, 2019 at 05:08 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_23904722_afsri`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `namamakanan` varchar(35) NOT NULL,
  `harga` int(20) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `namamakanan`, `harga`) VALUES
(1, 'Sphagetti Bolognaise', 270000),
(2, 'Pizza Hut', 24000),
(3, 'Ice Cream Cake', 180000),
(4, 'Fettuccine alfredo ', 80000),
(5, 'Lasagna', 36000);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(35) NOT NULL,
  `bintang` int(30) NOT NULL,
  `isi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `jenis`, `bintang`, `isi`, `waktu`) VALUES
(1, 'Sphagetti Bolongnaise', 6, 'Rasanya enak, keju nya saya sangat suka sekali', '2019-05-12 06:54:20'),
(2, 'Pizza ', 4, 'Roti nya enak, dagingnya dan bumbu juga sangat nikmat dilidah', '2019-05-12 06:56:51'),
(9, 'Ice Cream Cake', 3, 'Terlalu manis tetapi enak', '2019-05-12 09:51:21'),
(10, 'Ice Cream Cake', 3, 'Rasanya terlalu manis dilidah, tetapi tetap enak.', '2019-05-12 12:33:31'),
(12, 'Ice Cream Cake', 8, 'ikk', '2019-05-14 07:34:45'),
(13, 'Lasagna', 4, 'Rasanya enak sekali', '2019-05-14 08:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'Madeya', '1234'),
(2, 'mahdiyah afifah', '12345'),
(3, 'Jungkook', '126'),
(4, 'Afifah', 'halo'),
(5, 'Mah', '89'),
(6, 'popeh', 'popeh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
