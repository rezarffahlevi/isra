-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2015 at 12:14 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbstatistik`
--

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('127.0.0.2', '2009-09-11', 1, '1252681630'),
('127.0.0.1', '2013-01-22', 1, '1358865974'),
('127.0.0.1', '2013-01-23', 10, '1358909772'),
('124.40.249.58', '2013-01-23', 6, '1358913835'),
('69.171.229.116', '2013-01-24', 1, '1359044251'),
('180.254.105.187', '2013-01-24', 3, '1359044911'),
('36.73.109.241', '2013-01-27', 1, '1359291351'),
('180.253.133.156', '2013-02-09', 1, '1360353163'),
('180.254.85.63', '2013-02-12', 3, '1360685073'),
('36.73.81.78', '2013-02-19', 1, '1361280364'),
('101.255.58.22', '2013-02-20', 8, '1361329791'),
('118.96.154.225', '2013-02-20', 1, '1361351572'),
('61.94.210.49', '2013-02-21', 1, '1361414094'),
('180.249.37.167', '2013-02-21', 2, '1361416684'),
('180.245.98.159', '2013-02-21', 2, '1361419471'),
('114.79.16.38', '2013-02-21', 4, '1361420611'),
('119.235.27.10', '2013-02-21', 9, '1361436228');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
