/*

SQLyog Ultimate v8.55 
MySQL - 5.5.62 : Database - careers

*********************************************************************

*/



/*!40101 SET NAMES utf8 */;



/*!40101 SET SQL_MODE=''*/;



/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`careers` /*!40100 DEFAULT CHARACTER SET latin1 */;



USE `careers`;



/*Table structure for table `career` */



DROP TABLE IF EXISTS `career`;



CREATE TABLE `career` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `comments` varbinary(50) DEFAULT NULL,
  `resume_name` varchar(255) NOT NULL,
  `applied_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `for_designation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



/*Data for the table `career` */



insert  into `career`(`id`,`first_name`,`last_name`,`email`,`phone_no`,`comments`,`resume_name`,`applied_date`,`for_designation`) values (1,'dhanush','acharya','dhanu.r46@gmail.com','8317320910','Hello this is dhanush','dhanush.pdf','2020-07-27 12:36:12','Data Scientist');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

