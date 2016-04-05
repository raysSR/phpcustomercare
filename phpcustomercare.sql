/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.5.16 : Database - phpcustomercare
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`phpcustomercare` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `phpcustomercare`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `usernameadmin` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`usernameadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`usernameadmin`,`password`) values ('nisa','5fad30428811fe378fd389cd7659a33c'),('rays','016d3ced3bf61f456f2e52700a7e0afe');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `usernamecustomer` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `notelp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usernamecustomer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`usernamecustomer`,`password`,`email`,`notelp`) values ('suci','1cc6545f956f39a79c80b05f65df3c0a','suci@blalbla.com','012121212'),('tuti','7da0da6bf56eb7dc3f1b10684b7c806e','tuti@blalbla.com','1221221212');

/*Table structure for table `komplain` */

DROP TABLE IF EXISTS `komplain`;

CREATE TABLE `komplain` (
  `nokomplain` int(10) NOT NULL AUTO_INCREMENT,
  `isikomplain` varchar(255) DEFAULT NULL,
  `tglkomplain` date DEFAULT NULL,
  `layananygdikomplain` varchar(50) DEFAULT NULL,
  `usernamecustomer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nokomplain`),
  KEY `FK_komplaincustomer` (`usernamecustomer`),
  CONSTRAINT `FK_komplaincustomer` FOREIGN KEY (`usernamecustomer`) REFERENCES `customer` (`usernamecustomer`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `komplain` */

insert  into `komplain`(`nokomplain`,`isikomplain`,`tglkomplain`,`layananygdikomplain`,`usernamecustomer`) values (1,'tes cobas dsffds bla bla bla bla bla bla bla bla bla dsfasfa bal bsafdsfa bla dsfa bla','2016-01-07','Cargoboox','suci'),(10,'bla bla bla bla bla bla bla bla bla dsfasfa bal bsafdsfa bla dsfa bla','2016-04-02','Cargoboox','suci'),(12,'komplainbla bla bal asdfsaf sdafasdf asdf adsf asdf asf asdf asdf ','2016-04-04','Cargoboox','tuti'),(13,'komplainblassscs scs ssd bla bal asdfsaf sdafasdf asdf adsf asdf asf asdf asdf ','2016-04-04','Servicesboox','tuti'),(14,'dsfafsadf dsafafsadf sdsdafas dsfafsadf dsafafsadf sdsdafasdsfafsadf dsafafsadf sdsdafasdsfafsadf dsafafsadf sdsdafasdsfafsadf dsafafsadf sdsdafas','2016-04-04','Cargoboox','tuti');

/*Table structure for table `tanggapan` */

DROP TABLE IF EXISTS `tanggapan`;

CREATE TABLE `tanggapan` (
  `nokomplain` int(10) DEFAULT NULL,
  `notanggapan` int(10) NOT NULL AUTO_INCREMENT,
  `tgltanggapan` date DEFAULT NULL,
  `isitanggapan` varchar(255) DEFAULT NULL,
  `usernameadmin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`notanggapan`),
  KEY `FK_tanggapan` (`usernameadmin`),
  KEY `FK_tanggapank` (`nokomplain`),
  CONSTRAINT `FK_tanggapan` FOREIGN KEY (`usernameadmin`) REFERENCES `admin` (`usernameadmin`),
  CONSTRAINT `FK_tanggapank` FOREIGN KEY (`nokomplain`) REFERENCES `komplain` (`nokomplain`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tanggapan` */

insert  into `tanggapan`(`nokomplain`,`notanggapan`,`tgltanggapan`,`isitanggapan`,`usernameadmin`) values (10,2,'2016-04-04','tangaapan dsafd fasdfsadf asdfsadf asdfasdf asdfdsaf sadfsadfdsa fdasfassadf asdfasfsdafasdf sdafsdaf sadfsdafda sdafasdf sadfasdf asfas','rays');

/*Table structure for table `viewkomplain` */

DROP TABLE IF EXISTS `viewkomplain`;

/*!50001 DROP VIEW IF EXISTS `viewkomplain` */;
/*!50001 DROP TABLE IF EXISTS `viewkomplain` */;

/*!50001 CREATE TABLE `viewkomplain` (
  `status` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nokomplain` int(10) NOT NULL DEFAULT '0',
  `isikomplain` varchar(255) DEFAULT NULL,
  `tglkomplain` date DEFAULT NULL,
  `layananygdikomplain` varchar(50) DEFAULT NULL,
  `usernamecustomer` varchar(50) DEFAULT NULL,
  `notanggapan` int(10) DEFAULT NULL,
  `tgltanggapan` date DEFAULT NULL,
  `isitanggapan` varchar(255) DEFAULT NULL,
  `usernameadmin` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `notelp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*View structure for view viewkomplain */

/*!50001 DROP TABLE IF EXISTS `viewkomplain` */;
/*!50001 DROP VIEW IF EXISTS `viewkomplain` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewkomplain` AS select if(isnull(`tanggapan`.`nokomplain`),'Menunggu','Ditanggapi') AS `status`,`komplain`.`nokomplain` AS `nokomplain`,`komplain`.`isikomplain` AS `isikomplain`,`komplain`.`tglkomplain` AS `tglkomplain`,`komplain`.`layananygdikomplain` AS `layananygdikomplain`,`komplain`.`usernamecustomer` AS `usernamecustomer`,`tanggapan`.`notanggapan` AS `notanggapan`,`tanggapan`.`tgltanggapan` AS `tgltanggapan`,`tanggapan`.`isitanggapan` AS `isitanggapan`,`tanggapan`.`usernameadmin` AS `usernameadmin`,`customer`.`email` AS `email`,`customer`.`notelp` AS `notelp` from ((`komplain` left join `tanggapan` on((`komplain`.`nokomplain` = `tanggapan`.`nokomplain`))) join `customer` on((`customer`.`usernamecustomer` = `komplain`.`usernamecustomer`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
