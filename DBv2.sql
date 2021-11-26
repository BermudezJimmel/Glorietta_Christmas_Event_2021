/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.17-MariaDB : Database - devjim_lovedigital
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`devjim_lovedigital` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `devjim_lovedigital`;

/*Table structure for table `players` */

DROP TABLE IF EXISTS `players`;

CREATE TABLE `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `players` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(200) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'NEW',
  `Template` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13123154 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`email`,`phone`,`address`,`image`,`status`,`Template`) values 
(13123147,'qeweqwew','bermudezjimmel7@gmail.com',2147483647,'sssssssssssssssssssssssss','PARC GATE (2 of 2) (1) (1).jpg','done','Template1'),
(13123149,'christopher daez','bermudezjimmel7@gmail.com',2147483647,'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr','PARC-Digital-Events-Place-1-gallery-1-1-1.jpg','done','Template3'),
(13123150,'christopher daez','bermudezjimmel7@gmail.com',2147483647,'north caloocan village\r\nNorth Fairview love na lovena lovena lovena lovena lovena lovena lovena loven','vogels.png','NEW','Template2'),
(13123151,'christopher daez','bermudezjimmel7@gmail.com',2147483647,'north caloocan villageNorth Fairview love love love love love love love love love love love love lo','vogels (1).png','Done','Template2'),
(13123152,'christopher daez','bermudezjimmel7@gmail.com',2147483647,'love lovelovelovelovelovelovelovelovelovelovelovelovelovelovelovelovelovelovelovelovelovelovelovelov','vogels (1).png','done','Template1'),
(13123153,'jAYZE ','bermudezjimmel7@gmail.com',2147483647,'BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY BABY ','vogels (1).png','done','Template1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
