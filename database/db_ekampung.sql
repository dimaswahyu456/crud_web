/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.4.21-MariaDB : Database - db_ekampung
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ekampung` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_ekampung`;

/*Table structure for table `data_desa` */

DROP TABLE IF EXISTS `data_desa`;

CREATE TABLE `data_desa` (
  `id_desa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(255) DEFAULT NULL,
  `alamat_lengkap` longtext DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  PRIMARY KEY (`id_desa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_desa` */

insert  into `data_desa`(`id_desa`,`nama_desa`,`alamat_lengkap`,`deskripsi`) values (1,'test','lontong',NULL),(2,'benowo','test',NULL),(3,'sukolilo','test2',NULL);

/*Table structure for table `data_jenis_lembaga_desa` */

DROP TABLE IF EXISTS `data_jenis_lembaga_desa`;

CREATE TABLE `data_jenis_lembaga_desa` (
  `id_lembaga` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lembaga` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_lembaga`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_jenis_lembaga_desa` */

/*Table structure for table `data_jenis_potensi_desa` */

DROP TABLE IF EXISTS `data_jenis_potensi_desa`;

CREATE TABLE `data_jenis_potensi_desa` (
  `id_jenis_potensi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_potensi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_potensi`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_jenis_potensi_desa` */

/*Table structure for table `data_jenis_surat` */

DROP TABLE IF EXISTS `data_jenis_surat`;

CREATE TABLE `data_jenis_surat` (
  `id_jenis_surat` int(11) NOT NULL AUTO_INCREMENT,
  `id_surat_master` varchar(255) DEFAULT NULL,
  `id_surat_masuk` varchar(255) DEFAULT NULL,
  `id_surat_keluar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_surat`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_jenis_surat` */

/*Table structure for table `data_kartu_keluarga` */

DROP TABLE IF EXISTS `data_kartu_keluarga`;

CREATE TABLE `data_kartu_keluarga` (
  `no_kk` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) DEFAULT NULL,
  PRIMARY KEY (`no_kk`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_kartu_keluarga` */

insert  into `data_kartu_keluarga`(`no_kk`,`nik`) values (1,1),(2,5);

/*Table structure for table `data_lembaga_desa` */

DROP TABLE IF EXISTS `data_lembaga_desa`;

CREATE TABLE `data_lembaga_desa` (
  `id_lembaga` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lembaga` varchar(255) DEFAULT NULL,
  `jenis_lembaga` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_lembaga`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_lembaga_desa` */

/*Table structure for table `data_master_surat` */

DROP TABLE IF EXISTS `data_master_surat`;

CREATE TABLE `data_master_surat` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `No_surat` varchar(255) DEFAULT NULL,
  `keterangan_surat` text DEFAULT NULL,
  `kepada` varchar(255) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tempat` text DEFAULT NULL,
  `kepala_desa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_surat`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_master_surat` */

/*Table structure for table `data_penduduk` */

DROP TABLE IF EXISTS `data_penduduk`;

CREATE TABLE `data_penduduk` (
  `nik` int(11) NOT NULL AUTO_INCREMENT,
  `no_kk` int(11) DEFAULT NULL,
  `nama_penduduk` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat_penduduk` longtext DEFAULT NULL,
  PRIMARY KEY (`nik`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_penduduk` */

insert  into `data_penduduk`(`nik`,`no_kk`,`nama_penduduk`,`jenis_kelamin`,`alamat_penduduk`) values (1,1,'dimas wahyu adi','Pria','sambiarum'),(5,2,'andi','Pria','benowo');

/*Table structure for table `data_perangkat_desa` */

DROP TABLE IF EXISTS `data_perangkat_desa`;

CREATE TABLE `data_perangkat_desa` (
  `id_perangkat_desa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perangkat_desa` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_perangkat_desa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_perangkat_desa` */

insert  into `data_perangkat_desa`(`id_perangkat_desa`,`nama_perangkat_desa`,`jabatan`) values (1,'Bambang','Lurah'),(2,'Sugiono','Humas');

/*Table structure for table `data_surat keluar` */

DROP TABLE IF EXISTS `data_surat keluar`;

CREATE TABLE `data_surat keluar` (
  `No_id_Surat` int(11) NOT NULL AUTO_INCREMENT,
  `id_surat_keluar` varchar(255) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `Perihal` text DEFAULT NULL,
  PRIMARY KEY (`No_id_Surat`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_surat keluar` */

/*Table structure for table `data_surat_masuk` */

DROP TABLE IF EXISTS `data_surat_masuk`;

CREATE TABLE `data_surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_surat` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `perihal` longtext DEFAULT NULL,
  PRIMARY KEY (`id_surat_masuk`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_surat_masuk` */

/*Table structure for table `data_user` */

DROP TABLE IF EXISTS `data_user`;

CREATE TABLE `data_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `data_user` */

/*Table structure for table `desa` */

DROP TABLE IF EXISTS `desa`;

CREATE TABLE `desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_desa` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `desa` */

insert  into `desa`(`id`,`nama_desa`,`alamat_desa`) values (3,'s',''),(4,'d',''),(5,'f',''),(6,'g',''),(7,'h',''),(8,'j',''),(9,'k',''),(10,'l','');

/*Table structure for table `mitra` */

DROP TABLE IF EXISTS `mitra`;

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mitra` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `mitra` */

insert  into `mitra`(`id`,`mitra`) values (1,'kampung'),(2,'kampung sehat medokan surabaya'),(3,'kota'),(4,'kampung ngaglik cerdas'),(5,'perumahan sugih'),(6,'pondok benowo indah');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values (1,'admin','e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
