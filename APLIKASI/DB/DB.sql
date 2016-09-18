/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.24 : Database - spk2016
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`spk2016` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `spk2016`;

/*Table structure for table `alternativ` */

DROP TABLE IF EXISTS `alternativ`;

CREATE TABLE `alternativ` (
  `idAlternativ` int(11) NOT NULL AUTO_INCREMENT,
  `idKosan` int(11) DEFAULT NULL,
  `hasilAlternativ` double DEFAULT NULL,
  PRIMARY KEY (`idAlternativ`),
  KEY `alternativ_ibfk_1` (`idKosan`),
  CONSTRAINT `alternativ_ibfk_1` FOREIGN KEY (`idKosan`) REFERENCES `infomasi` (`idKosan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `alternativ` */

insert  into `alternativ`(`idAlternativ`,`idKosan`,`hasilAlternativ`) values (18,8,0.615),(19,12,0.7175),(20,15,0.62),(23,10,0.5975),(24,13,0.82);

/*Table structure for table `infomasi` */

DROP TABLE IF EXISTS `infomasi`;

CREATE TABLE `infomasi` (
  `idKosan` int(10) NOT NULL AUTO_INCREMENT,
  `namaKosan` varchar(30) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Informasi` text,
  `Gambar` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idKosan`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `infomasi` */

insert  into `infomasi`(`idKosan`,`namaKosan`,`Harga`,`Informasi`,`Gambar`) values (8,'Xiomi Redmi 2',1250000,'Dijual gan, Likenew, Mulus, Bisa telpon, Bisa sms, Bisa BBM, Touchscreen, Garansi tAm\r\nSegel, Cod dirumah ane\r\nGaransi 100% uang kembali','1.jpg'),(9,'Xiomi Redmi Note 2',1550000,'Hp lengkap , masih segel\'an di palek baru 2 bln dijual karena butuh duit','2.jpg'),(10,'Xiomi Redmi 1 S',1100000,'Dijual xiaomi redmi 1S kondisi masih mulus, masih segel blm pernah service, fungsi semua lancar jaya.\r\nKelengkapan fullset.\r\nBisa di cek sampe puas...\r\n\r\nHarga 1,1jt nego tipis\r\nCod sekitar bekasi dan jakarta timur\r\n\r\nMinat hub.Ke Nomor HP User Profile (sms/wa)','3.jpg'),(11,'Samsung Core Duos',950000,'Samsung s3 gede ori batangan kondisi kyak di foto....minus back casing gak ori. Baterai doublepower...950rb nego titik','4.jpg'),(12,'Samsung J5 KW',1950000,'Kondisi normal\r\nKelengkapan hp cas n kotak\r\nMinat langsung phone ya\r\nCod karang rejo pertigaan','5.jpg'),(13,'Samsung J1',1100000,'Hp chrger.. dus ilang,. Minus Bazel lecet pemakaian.. mesin dll Normal batre ori awet.. tebet','6.jpg'),(14,'Asus Zenfone C',600000,'Dijual asus zenfone c,,lengkap cas,kotak.. Minus nya agak retak seperti yg d foto layarnya... Buka hrga 600 nego,daerah marpoyan.. Mnat hbungi Ke Nomor HP User Profile..','7.jpg'),(15,'Asus Zenfone 2',2600000,'Mau nawarin hp asus zefone 2 551 ml ram 4 gb rum 32 di lengkapi micro slot 64 gb ,camera super bening ,barang mulus no minus lengkap garansi TAM bukan yg abal abal ,masih sisa garansi .bs tt asal cocok harga nett nego no respon ,cod semarang kota','8.jpg'),(16,'Asus Zenfone C',750000,'Monggo gan Asus Zenfone C nya edisi Gold kondisi super mulusss SEGEL & NORMAL ! Murah aja bos 775 nego bebas monggo .. aq cocok angkut...cuma HP aja cas mau tak pakai gan...HallaL gan...minat serius hub nomr di profil...','9.jpg');

/*Table structure for table `kriteria` */

DROP TABLE IF EXISTS `kriteria`;

CREATE TABLE `kriteria` (
  `idKriteria` int(11) NOT NULL AUTO_INCREMENT,
  `namaKriteria` varchar(40) DEFAULT NULL,
  `tipeKriteria` varchar(10) DEFAULT NULL,
  `bobot` double DEFAULT NULL,
  PRIMARY KEY (`idKriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kriteria` */

insert  into `kriteria`(`idKriteria`,`namaKriteria`,`tipeKriteria`,`bobot`) values (1,'Merk Handpone','Benefit',0.18),(2,'Fasilitas/Speksifikasi','Benefit',0.21),(3,'Harga','Cost',0.24),(4,'Model Atau Bentuk','Benefit',0.15),(5,'Kondisi','Benefit',0.12),(6,'Keuntungan','Benefit',0.1);

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `idNilai` int(11) NOT NULL AUTO_INCREMENT,
  `ketNilai` varchar(30) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  PRIMARY KEY (`idNilai`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

insert  into `nilai`(`idNilai`,`ketNilai`,`jumlah`) values (10,'Sangat Baik',0.8),(11,'Baik',0.6),(12,'Sedang',0.4),(13,'Buruk',0.2),(14,'Sangat Buruk',0.01);

/*Table structure for table `rangking` */

DROP TABLE IF EXISTS `rangking`;

CREATE TABLE `rangking` (
  `idAlternativ` int(11) NOT NULL,
  `idKriteria` int(11) NOT NULL,
  `nilaiRangking` double DEFAULT NULL,
  `nilaiNormalisasi` double DEFAULT NULL,
  `bobotNormalisasi` double DEFAULT NULL,
  PRIMARY KEY (`idAlternativ`,`idKriteria`),
  KEY `rangking_ibfk_1` (`idKriteria`),
  CONSTRAINT `rangking_ibfk_1` FOREIGN KEY (`idKriteria`) REFERENCES `kriteria` (`idKriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rangking_ibfk_2` FOREIGN KEY (`idAlternativ`) REFERENCES `alternativ` (`idAlternativ`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rangking` */

insert  into `rangking`(`idAlternativ`,`idKriteria`,`nilaiRangking`,`nilaiNormalisasi`,`bobotNormalisasi`) values (18,1,0.6,0.75,0.135),(18,2,0.8,1,0.21),(18,3,0.8,0.25,0.06),(18,4,0.4,0.5,0.075),(18,5,0.4,0.5,0.06),(18,6,0.6,0.75,0.075),(19,1,0.6,0.75,0.135),(19,2,0.6,0.75,0.1575),(19,3,0.2,1,0.24),(19,4,0.4,0.5,0.075),(19,5,0.4,0.5,0.06),(19,6,0.4,0.5,0.05),(20,1,0.6,0.75,0.135),(20,2,0.6,0.75,0.1575),(20,3,0.4,0.5,0.12),(20,4,0.2,0.25,0.0375),(20,5,0.8,1,0.12),(20,6,0.4,0.5,0.05),(23,1,0.8,1,0.18),(23,2,0.4,0.5,0.105),(23,3,0.8,0.25,0.06),(23,4,0.6,0.75,0.1125),(23,5,0.6,0.75,0.09),(23,6,0.4,0.5,0.05),(24,1,0.8,1,0.18),(24,2,0.8,1,0.21),(24,3,0.8,0.25,0.06),(24,4,0.8,1,0.15),(24,5,0.8,1,0.12),(24,6,0.8,1,0.1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
