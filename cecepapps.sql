-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 13. Februari 2006 jam 01:03
-- Versi Server: 5.0.51
-- Versi PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `cecepapps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(10) NOT NULL auto_increment,
  `username` varchar(100) default NULL,
  `password` varchar(100) default NULL,
  PRIMARY KEY  (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_basispengetahuan`
--

CREATE TABLE IF NOT EXISTS `tbl_basispengetahuan` (
  `id` int(20) NOT NULL auto_increment,
  `kd_penyakit` varchar(50) NOT NULL,
  `kd_gejala` varchar(50) NOT NULL,
  `nilaimb` varchar(20) NOT NULL,
  `nilaimd` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `tbl_basispengetahuan`
--

INSERT INTO `tbl_basispengetahuan` (`id`, `kd_penyakit`, `kd_gejala`, `nilaimb`, `nilaimd`) VALUES
(10, 'P004', 'G004', '0.9', '0.1'),
(9, 'P001', 'G003', '0.5', '0.4'),
(7, 'P002', 'G002', '0.7', '0.2'),
(11, 'P001', 'G005', '0.2', '0.6'),
(12, 'P003', 'G006', '0.5', '0.6'),
(13, 'P001', 'G002', '0.1', '0,6'),
(14, '', '', '', ''),
(15, 'P001', 'G002', '33', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gejala`
--

CREATE TABLE IF NOT EXISTS `tbl_gejala` (
  `kd_gejala` varchar(100) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  PRIMARY KEY  (`kd_gejala`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kd_gejala`, `nama_gejala`) VALUES
('G002', 'Mata Berkunang'),
('G001', 'Mata Buram'),
('G003', 'Mata Perih'),
('G004', 'Mata Berair'),
('G005', 'Mata Lelah'),
('G006', 'Mata Merah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyakit`
--

CREATE TABLE IF NOT EXISTS `tbl_penyakit` (
  `kd_penyakit` varchar(20) NOT NULL,
  `nm_penyakit` varchar(100) NOT NULL,
  `definisi` varchar(100) NOT NULL,
  `solusi` text,
  PRIMARY KEY  (`kd_penyakit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`kd_penyakit`, `nm_penyakit`, `definisi`, `solusi`) VALUES
('P001', 'Kataran Insipien', 'Katarak Terganas', 'Datang Kedokter'),
('P002', 'Katarak Insomnia', 'Mata lelah dalam melakukan rutinitas', 'Datang Kedokter'),
('P003', 'Katarak Independent', 'Berdiri Sendiri ', 'Membutuhkan dorongan'),
('P004', 'Katarak Sosialisasi', 'Bermasayarakat', 'Jadilah orang baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(50) NOT NULL auto_increment,
  `username` varchar(100) default NULL,
  `password` varchar(100) default NULL,
  `email` varchar(25) default NULL,
  `alamat` text,
  `kelamin` enum('PRIA','WANITA') default NULL,
  `umur` int(20) default NULL,
  `pekerjaan` varchar(100) default NULL,
  `nama` varchar(100) default NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `tbl_user`
--

