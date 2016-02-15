-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for calendar
CREATE DATABASE IF NOT EXISTS `calendar` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `calendar`;


-- Dumping structure for table calendar.birthdays
CREATE TABLE IF NOT EXISTS `birthdays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person` varchar(50) NOT NULL,
  `day` int(2) DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

-- Dumping data for table calendar.birthdays: ~15 rows (approximately)
/*!40000 ALTER TABLE `birthdays` DISABLE KEYS */;
INSERT INTO `birthdays` (`id`, `person`, `day`, `month`, `year`) VALUES
	(126, 'Vera', 5, 8, 1963),
	(127, 'Nadia', 14, 5, 1996),
	(128, 'Petrov', 7, 12, 1985),
	(129, 'Anoushka', 21, 2, 1981),
	(130, 'Dimitri', 21, 5, 2001),
	(131, 'Miroslav', 17, 8, 2010),
	(133, 'Vlad', 18, 3, 1975),
	(135, 'Goran', 19, 12, 2006),
	(137, 'Darko', 4, 6, 1973),
	(138, 'Dragoslav', 13, 6, 1982),
	(140, 'Boris', 19, 4, 2001),
	(141, 'Ludmila', 5, 5, 1969),
	(142, 'Stanibor', 14, 5, 2009),
	(143, 'Jimmy Johnny', 6, 1, 1998);
/*!40000 ALTER TABLE `birthdays` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
