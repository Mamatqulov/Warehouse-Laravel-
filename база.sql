/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.19-MariaDB : Database - sklad
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sklad` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `sklad`;

/*Table structure for table `name_product` */

CREATE TABLE `name_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` longtext DEFAULT NULL,
  `number` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `name_product` */

insert  into `name_product`(`id`,`product`,`number`) values (1,'Монитор','№6701'),(2,'Клавиатура','№6702'),(3,'Муш','№6703'),(4,'Ноутбук','№6704'),(5,'Принтер','№6705'),(6,'Проектор','№6706'),(7,'Switch','№6707'),(8,'Разбери','№6708'),(9,'HDMI','№6709'),(10,'USB-LAN','№6710');

/*Table structure for table `prihods` */

CREATE TABLE `prihods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `premechanie` text DEFAULT NULL,
  `razmer` float DEFAULT NULL,
  `white` int(11) DEFAULT NULL,
  `dcolor` int(11) DEFAULT NULL,
  `pdcolor` int(11) DEFAULT NULL,
  `count_p` int(11) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

/*Data for the table `prihods` */

insert  into `prihods`(`id`,`name`,`premechanie`,`razmer`,`white`,`dcolor`,`pdcolor`,`count_p`,`number`) values (45,'№6701 (Монитор)','Кадр',16,NULL,1,NULL,1,'№6701'),(46,'№6702 (Клавиатура)','БЕК-ОФИС',12,NULL,NULL,15,0,'№6702'),(47,'№6703 (Муш)','Касса',25,NULL,1,NULL,3,'№6703'),(48,'№6704 (Ноутбук)','Эксперт-1',48,2,1,NULL,3,'№6704'),(49,'№6704 (Ноутбук)','Эксперт-2',54,NULL,1,NULL,3,'№6704'),(50,'№6705 (Принтер)','СБ',12,2,23,32,99,'№6705'),(51,'№6706 (Проектор)','СБ',1,2,NULL,NULL,1,'№6706'),(52,'№6707 (Switch)','Барномасозон',1,1,1,NULL,1,'№6707'),(53,'№6708 (Разбери)','БЕК-ОФИС',1000,NULL,NULL,1,1,'№6708'),(54,'№6709 (HDMI)','Барномасозон',12,NULL,23,NULL,3,'№6709'),(55,'№6710 (USB-LAN)','Барномасозон',1,2,1,NULL,3,'№6710'),(56,'№6702 (Клавиатура)','Барномасозон',25,NULL,23,NULL,1,'№6702'),(57,'№6702 (Клавиатура)','БЕК-ОФИС',1,2,NULL,3,1,'№6702'),(58,'№6701 (Монитор)','Кадр',123455,234,1,4234,99,NULL);

/*Table structure for table `rashods` */

CREATE TABLE `rashods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_rashod` varchar(255) DEFAULT NULL,
  `pokupatel` text DEFAULT NULL,
  `tel` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `dostavka` varchar(255) DEFAULT NULL,
  `count_r` int(11) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

/*Data for the table `rashods` */

insert  into `rashods`(`id`,`id_rashod`,`pokupatel`,`tel`,`date`,`dostavka`,`count_r`,`number`) values (28,'№6702 (Клавиатура)','БЕК-ОФИС','992927882659','2022-02-15','Через 1 час',1,'№6702'),(29,'№6709 (HDMI)','БЕК-ОФИС','992927882659','2022-02-22','Через 1 час',1,'№6709');

/*Table structure for table `users` */

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `userlogin` varchar(32) DEFAULT NULL,
  `userpass` varchar(255) NOT NULL,
  `createdon` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `acl` mediumtext DEFAULT NULL,
  `disabled` int(1) DEFAULT 0,
  `options` longtext DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `lastactive` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `userlogin` (`userlogin`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`user_id`,`userlogin`,`userpass`,`createdon`,`email`,`acl`,`disabled`,`options`,`role_id`,`lastactive`) values (12,NULL,'123456',NULL,'kodirkulmamatkulov98@gmail.com',NULL,0,NULL,NULL,NULL),(15,NULL,'123',NULL,'admin@mail.ru',NULL,0,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
