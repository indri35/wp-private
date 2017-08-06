-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2017 at 12:29 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wp_private`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_registration`
--

CREATE TABLE IF NOT EXISTS `t_registration` (
  `id_student` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) NOT NULL,
  `ttl` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `asal_sekolah` varchar(256) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `no_tlp` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `jadwal_les` varchar(128) NOT NULL,
  PRIMARY KEY (`id_student`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_registration`
--

INSERT INTO `t_registration` (`id_student`, `nama`, `ttl`, `jenis_kelamin`, `agama`, `asal_sekolah`, `alamat`, `no_tlp`, `email`, `kelas`, `jadwal_les`) VALUES
(1, 'Adi', 'Jakrta, 3 April 2000', 'L', 'Islam', 'SMA 2 Jakarta', 'Komplek Jati Murni Blok 4 No 3', '081273929122', 'adi@gmail.com', '12', '10.00 - 12.00');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `name` varchar(512) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
