-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2016 at 10:07 PM
-- Server version: 5.0.45-community-nt
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_jurnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_pel`
--

CREATE TABLE IF NOT EXISTS `jurnal_pel` (
  `id_m` int(11) NOT NULL auto_increment,
  `id_penelitian` varchar(30) NOT NULL default '',
  `pel_kode` varchar(50) NOT NULL,
  `pel_judul` varchar(5000) NOT NULL,
  `pel_keterangan` text,
  `pel_abstrak` text NOT NULL,
  `pel_waktu` date NOT NULL,
  `pel_penulis` varchar(5000) NOT NULL default '',
  `pel_upload` varchar(50) NOT NULL,
  `pel_cover` varchar(2000) default 'no-cover.png',
  `file` varchar(2000) default NULL,
  PRIMARY KEY  (`id_m`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jurnal_pel`
--

INSERT INTO `jurnal_pel` (`id_m`, `id_penelitian`, `pel_kode`, `pel_judul`, `pel_keterangan`, `pel_abstrak`, `pel_waktu`, `pel_penulis`, `pel_upload`, `pel_cover`, `file`) VALUES
(1, '9', 'PEK00001', 'Edisi 1', 'Penelitian Edisi 1', '<p>Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1Penelitian Edisi 1 Penelitian Edisi 1 Penelitian Edisi 1</p>\r\n', '2014-01-01', 'Afdal Yusra, Amd', '', 'no-cover.png', 'Konsep-SI.pdf'),
(2, '9', 'PEK00002', 'Edisi 2 Penyebab Rusaknya Moral Mahasiswa', 'Edisi 2 Penyebab Rusaknya Moral Mahasiswa', '<p>Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa</p>\r\n', '2014-01-01', 'Afdal Yusra, Amd', '', 'no-cover.png', 'Konsep-SI.pdf'),
(3, '9', 'PEK00003', 'Edisi 3 Mahasiswa Moral Otak Seks', 'Edisi 3 Penyebab Rusaknya Moral Mahasiswa', '<p>Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa Edisi 2 Penyebab Rusaknya Moral Mahasiswa</p>\r\n', '2014-01-01', 'Afdal Yusra, Amd', '', 'no-cover.png', 'Konsep-SI.pdf'),
(4, '10', 'PEK00001', 'Mati atau Merdeka', 'Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka ', '<p>Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka Mati atau Merdeka</p>\r\n', '2015-01-01', 'Afdal Yusra, Amd', '', 'no-cover.png', 'Konsep-SI.pdf'),
(5, '11', 'PEK00002', 'Rapat Agenda baru', 'Rapat Agenda baru Rapat Agenda baru', '<p>Rapat Agenda baru Rapat Agenda baru Rapat Agenda baru Rapat Agenda baru Rapat Agenda baru Rapat Agenda baru Rapat Agenda baru Rapat Agenda baru Rapat Agenda baru Rapat Agenda baru</p>\r\n', '2015-01-01', 'Afdal Yusra, Amd', '', 'no-cover.png', 'Konsep-SI.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE IF NOT EXISTS `penelitian` (
  `id_m` int(11) NOT NULL auto_increment,
  `id_pel` varchar(30) NOT NULL,
  `pel_kode` varchar(50) NOT NULL,
  `pel_judul` varchar(5000) NOT NULL,
  `pel_keterangan` text,
  `pel_abstrak` text NOT NULL,
  `pel_waktu` date NOT NULL,
  `pel_penulis` varchar(5000) NOT NULL default '',
  `pel_upload` varchar(50) NOT NULL,
  `pel_cover` varchar(2000) default 'no-cover.png',
  `file` varchar(2000) default NULL,
  PRIMARY KEY  (`id_m`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id_m`, `id_pel`, `pel_kode`, `pel_judul`, `pel_keterangan`, `pel_abstrak`, `pel_waktu`, `pel_penulis`, `pel_upload`, `pel_cover`, `file`) VALUES
(1, '1', 'PEL00001', 'Sistem Informasi Peneltiian Dosen', 'Sistem Informasi Penilaian Prestasi Dosen', '<!--EndFragment--><!--StartFragment-->\r\n<p>&nbsp;</p>\r\n\r\n<p><!--StartFragment--><!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--><!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment-->  <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--><!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> <!--StartFragment-->Subhanallah<!--EndFragment--> Subhanallah <!--StartFragment-->Subhanallah<!--EndFragment--></p>\r\n', '2016-10-01', 'Afdal Yusra', '', 'no-cover.png', 'Konsep-SI.pdf'),
(2, '1', 'PEL00002', 'Aplikasi SMS Gateway Portal Akademis', 'Aplikasi SMS Gateway Portal Akademis', '<p>Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis Aplikasi SMS Gateway Portal Akademis</p>\r\n', '2018-01-01', 'Afdal Yusra', '', 'no-cover.png', 'Konsep-SI.pdf'),
(3, '1', 'PEL00003', 'Sistem Informasi Penilaian Prestasi Kerja Pegawai', 'Sistem Informasi Penilaian Prestasi Kerja Pegawai', '<p>Sistem Informasi Penilaian Prestasi Kerja Pegawai Sistem Informasi Penilaian Prestasi Kerja Pegawai Sistem Informasi Penilaian Prestasi Kerja Pegawai Sistem Informasi Penilaian Prestasi Kerja Pegawai Sistem Informasi Penilaian Prestasi Kerja Pegawai Sistem Informasi Penilaian Prestasi Kerja Pegawai Sistem Informasi Penilaian Prestasi Kerja Pegawai Sistem Informasi Penilaian Prestasi Kerja Pegawai Sistem Informasi Penilaian Prestasi Kerja Pegawai Sistem Informasi Penilaian Prestasi Kerja Pegawai Sistem Informasi Penilaian Prestasi Kerja Pegawai</p>\r\n', '2016-01-01', 'Afdal Yusra, Amd', '', 'no-cover.png', 'Konsep-SI.pdf'),
(4, '1', 'PEL00004', 'Sistem Informasi Manajemen PPDB', 'Sistem Informasi Manajemen PPDB', '<p>Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB Sistem Informasi Manajemen PPDB</p>\r\n', '2016-01-01', 'Afdal Yusra', '', 'no-cover.png', 'Konsep-SI.pdf'),
(5, '1', 'PEL00005', 'Sistem Informasi Manajemen Hotel', 'Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel', '<p>Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel Sistem Informasi Manajemen Hotel</p>\r\n', '2015-01-01', 'Afdal Yusra, Amd', '', 'no-cover.png', 'bab4_pendekatan_sistem.pdf'),
(6, '2', 'PM00001', 'Membangun Aplikasi SMS Gateway ', 'Membangun Aplikasi SMS Gateway  Membangun Aplikasi SMS Gateway  Membangun Aplikasi SMS Gateway  Membangun Aplikasi SMS Gateway ', '<p>Membangun Aplikasi SMS Gateway&nbsp; Membangun Aplikasi SMS Gateway&nbsp; Membangun Aplikasi SMS Gateway &nbsp;Membangun Aplikasi SMS Gateway &nbsp;Membangun Aplikasi SMS Gateway &nbsp;Membangun Aplikasi SMS Gateway &nbsp;Membangun Aplikasi SMS Gateway &nbsp;Membangun Aplikasi SMS Gateway &nbsp;Membangun Aplikasi SMS Gateway&nbsp;</p>\r\n', '2016-01-01', 'Toni Harpan', '', 'no-cover.png', 'Konsep-SI.pdf'),
(7, '2', 'PM00002', 'Sistem Informasi Ujian Online', 'Sistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian Online', '<p>Sistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian OnlineSistem Informasi Ujian Online Sistem Informasi Ujian Online Sistem Informasi Ujian Online</p>\r\n', '2015-01-01', 'Afdal Yusra', '', 'no-cover.png', 'bab4_pendekatan_sistem.pdf'),
(8, '2', 'PM00003', 'Sistem Informasi E-Learning', 'Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning', '<p>Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning Sistem Informasi E-Learning</p>\r\n', '2014-01-01', 'Afdal Yusra, Amd', '', 'no-cover.png', 'Konsep-SI.pdf'),
(9, '3', 'JU0000001', 'Pendidikan Moral Pancasila Perguruan Tinggi', 'Pendidikan Moral Pancasila Perguruan Tinggi', '<p>Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi Pendidikan Moral Pancasila Perguruan Tinggi</p>\r\n', '2014-01-01', 'Afdal Yusra, Amd', '', 'digitallibrary.png', 'Konsep-SI.pdf'),
(10, '3', 'JU0000002', 'Aplikasi Keuangan Berbasis Website', 'Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website', '<p>Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website Aplikasi Keuangan Berbasis Website</p>\r\n', '2014-01-01', 'Afdal Yusra, Amd', '', 'elearning-copy.png', 'Konsep-SI.pdf'),
(11, '3', 'JU0000003', 'Sehari Ruqyah Pendidikan Moral Mahasiswa', 'Sehari Ruqyah Pendidikan Moral Mahasiswa Sehari Ruqyah Pendidikan Moral Mahasiswa', '<p>Sehari Ruqyah Pendidikan Moral Mahasiswa Sehari Ruqyah Pendidikan Moral Mahasiswa Sehari Ruqyah Pendidikan Moral Mahasiswa Sehari Ruqyah Pendidikan Moral Mahasiswa Sehari Ruqyah Pendidikan Moral Mahasiswa Sehari Ruqyah Pendidikan Moral Mahasiswa Sehari Ruqyah Pendidikan Moral Mahasiswa Sehari Ruqyah Pendidikan Moral Mahasiswa Sehari Ruqyah Pendidikan Moral Mahasiswa</p>\r\n', '2014-01-01', 'Afdal Yusra, Amd', '', 'PERPUS.png', 'Konsep-SI.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tool`
--

CREATE TABLE IF NOT EXISTS `tool` (
  `id` int(11) NOT NULL auto_increment,
  `instansi` varchar(50) NOT NULL default '',
  `alamat` varchar(100) NOT NULL default '',
  `telp` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `web` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `logo` varchar(32) NOT NULL,
  `kep` varchar(32) NOT NULL,
  `kec` varchar(90) NOT NULL,
  `kota` varchar(32) NOT NULL,
  `propinsi` varchar(32) NOT NULL,
  `stat` enum('Y','N') NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tool`
--

INSERT INTO `tool` (`id`, `instansi`, `alamat`, `telp`, `fax`, `web`, `email`, `logo`, `kep`, `kec`, `kota`, `propinsi`, `stat`) VALUES
(1, 'Fakultas Ilmu Pendidikan Universitas Negeri Padang', 'Jalan Raya Padang Indarung, No 12 A Bandar Buat Kota Padang', '0751 665876', '0751 665877', 'www.diperta.sumbarprov.go.id', 'diperta@sumbarprovgo.id', 'icon.jpeg', '196006131987121001', 'Padang Utara', 'Padang', 'Sumatera Barat', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) default NULL,
  `nama` varchar(100) default NULL,
  `akses` int(1) default NULL,
  `status` enum('Y','N') default 'Y',
  `last_login` datetime default NULL,
  `ip_login` varchar(25) default NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `akses`, `status`, `last_login`, `ip_login`) VALUES
('admin', '21232f297a57a5a74389', 'Afdal Yusra', 0, 'Y', '2016-07-11 11:50:25', '127.0.0.1'),
('dosen', 'ce28eed1511f631af6b2', 'Rahmat Yusra', 1, 'Y', '2016-06-23 21:30:08', '127.0.0.1'),
('mhs', '0357a7592c4734a8b1e1', 'Arniati', 2, 'Y', '2016-04-29 16:10:38', '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
