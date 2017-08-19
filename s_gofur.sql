/*
Navicat MySQL Data Transfer

Source Server         : localhost_mysql
Source Server Version : 50616
Source Host           : 127.0.0.1:3306
Source Database       : s_gofur

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2017-08-19 11:49:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_petugas` varchar(12) NOT NULL,
  `nama_lengkap` varchar(12) NOT NULL,
  `NIK` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for anggota
-- ----------------------------
DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `nim` varchar(12) NOT NULL DEFAULT '',
  `nama_lengkap` varchar(40) DEFAULT NULL,
  `jurusan` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of anggota
-- ----------------------------

-- ----------------------------
-- Table structure for buku
-- ----------------------------
DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id_buku` varchar(12) NOT NULL,
  `pengarang` varchar(30) NOT NULL DEFAULT '',
  `penerbit` varchar(30) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  PRIMARY KEY (`id_buku`),
  CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `pengembalian` (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buku
-- ----------------------------

-- ----------------------------
-- Table structure for peminjaman
-- ----------------------------
DROP TABLE IF EXISTS `peminjaman`;
CREATE TABLE `peminjaman` (
  `id_transaksi` varchar(12) NOT NULL,
  `id_buku` varchar(12) NOT NULL,
  `id_anggota` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `NIM` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_dikembalikan` date DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  UNIQUE KEY `id_buku` (`id_buku`),
  UNIQUE KEY `id_anggota` (`id_anggota`),
  UNIQUE KEY `NIM` (`NIM`),
  CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `anggota` (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of peminjaman
-- ----------------------------

-- ----------------------------
-- Table structure for pengembalian
-- ----------------------------
DROP TABLE IF EXISTS `pengembalian`;
CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(12) NOT NULL,
  `id_buku` varchar(12) NOT NULL,
  `NIM` varchar(12) DEFAULT NULL,
  `tanggal_dikembalikan` date DEFAULT NULL,
  `terlambat` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_transaksi` (`id_transaksi`),
  UNIQUE KEY `id_buku` (`id_buku`),
  UNIQUE KEY `NIM` (`NIM`),
  CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `peminjaman` (`id_transaksi`),
  CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`NIM`) REFERENCES `peminjaman` (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pengembalian
-- ----------------------------
