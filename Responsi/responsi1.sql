/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - responsi1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`responsi1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `responsi1`;

/*Table structure for table `tb_pesan` */

DROP TABLE IF EXISTS `tb_pesan`;

CREATE TABLE `tb_pesan` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `cek_in` date NOT NULL,
  `cek_out` date NOT NULL,
  `tipe_kamar` varchar(30) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pesan` */

insert  into `tb_pesan`(`nik`,`nama`,`no_hp`,`cek_in`,`cek_out`,`tipe_kamar`) values 
('61271000','Ucup','0812','2022-04-02','2022-04-03','Deluxe'),
('6271','Dhea','08124','2022-04-01','2022-04-02','Superior'),
('6271029','Bayu Dwi','0812','2022-03-31','2022-04-01','Standard');

/* Procedure structure for procedure `delete_pesan` */

/*!50003 DROP PROCEDURE IF EXISTS  `delete_pesan` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_pesan`(`id` INT(5))
BEGIN
		DELETE FROM tb_pesan WHERE id_pesan=id;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `insert_pesan` */

/*!50003 DROP PROCEDURE IF EXISTS  `insert_pesan` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_pesan`(`in_id` INT(5), `in_email` VARCHAR(30), `in_no_hp` INT(15), `in_cek_in` DATE, `in_cek_out` DATE, `in_tamu` VARCHAR(30))
BEGIN
		INSERT INTO tb_pesan VALUE (in_id, in_email, in_no_hp, in_cek_in, in_cek_out,in_tamu);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `SearchNama` */

/*!50003 DROP PROCEDURE IF EXISTS  `SearchNama` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchNama`(IN `namanya` VARCHAR(30))
BEGIN
	SELECT *
	FROM tb_pesan 
	WHERE tb_pesan.nama LIKE namanya;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `update_pesan` */

/*!50003 DROP PROCEDURE IF EXISTS  `update_pesan` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `update_pesan`(`id` INT(5), `email` VARCHAR(30), `hp` INT(15), `ci` DATE, `co` DATE, `tamu` VARCHAR(30))
BEGIN
		UPDATE tb_pesan SET id_pesan=id, email=email, no_hp=hp, cek_in=ci, cek_out=co
		WHERE id_pesan=id;
	END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
