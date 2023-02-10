/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.25-MariaDB : Database - market_report
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`market_report` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `market_report`;

/*Table structure for table `tbl_free_market_report` */

DROP TABLE IF EXISTS `tbl_free_market_report`;

CREATE TABLE `tbl_free_market_report` (
  `group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `period` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `seqno` int(11) NOT NULL,
  `salesarea` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `target` decimal(20,2) DEFAULT NULL,
  `mtdh1` decimal(20,2) DEFAULT NULL,
  `sid` decimal(20,2) DEFAULT NULL,
  `mtd` decimal(20,2) DEFAULT NULL,
  `achv` decimal(20,2) DEFAULT NULL,
  `speedqty` decimal(20,2) DEFAULT NULL,
  `speed` decimal(20,2) DEFAULT NULL,
  PRIMARY KEY (`group`,`period`,`seqno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_free_market_report` */

insert  into `tbl_free_market_report`(`group`,`period`,`seqno`,`salesarea`,`category`,`target`,`mtdh1`,`sid`,`mtd`,`achv`,`speedqty`,`speed`) values 
('Medan','02.11.2022 s/d 24.11.2022',1,'Aceh','Floating',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('Medan','02.11.2022 s/d 24.11.2022',2,'','Sinking',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('Medan','02.11.2022 s/d 24.11.2022',3,'','Total',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('Medan','02.11.2022 s/d 24.11.2022',4,'North Sumatra 1','Floating',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('Medan','02.11.2022 s/d 24.11.2022',5,'','Sinking',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('Medan','02.11.2022 s/d 24.11.2022',6,'','Total',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('Medan','02.11.2022 s/d 24.11.2022',7,'Medan','Floating',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('Medan','02.11.2022 s/d 24.11.2022',8,'','Sinking',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('Medan','02.11.2022 s/d 24.11.2022',9,'**','Total',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('National','02.11.2022 s/d 24.11.2022',10,'abcajcnak','Total',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('National','02.11.2022 s/d 24.11.2022',11,'kalasa','Total',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('National','02.11.2022 s/d 24.11.2022',12,'qweqfq','Total',0.00,0.00,0.00,0.00,0.00,0.00,0.00),
('National','02.11.2022 s/d 24.11.2022',13,'National','Total',0.00,0.00,0.00,0.00,0.00,0.00,0.00);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
