-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para juegos
CREATE DATABASE IF NOT EXISTS `juegos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `juegos`;

-- Volcando estructura para tabla juegos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `curso` int(11) DEFAULT NULL,
  `puntuacion` int(11) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla juegos.usuarios: ~60 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `edad`, `curso`, `puntuacion`, `correo`) VALUES
	(28, 'Pedro', 'Alcantara', 24, 3, 2, 'pedritoreshulon@gmail.com'),
	(31, 'David', 'Fernandez', 19, 1, 10, 'davidelmasguapo@gmail.com'),
	(32, 'Manu', 'ye', 33, 3, 4, 'yela'),
	(33, 'Sance', 'ye', 33, 4, 6, NULL),
	(34, 'Sance', 'ye', 33, 4, 6, NULL),
	(35, 'Sance', 'ye', 33, 4, 6, NULL),
	(36, 'Sance', 'ye', 33, 4, 6, NULL),
	(38, 'Sance', 'ye', 33, 4, 6, NULL),
	(39, 'Sance', 'ye', 33, 4, 6, NULL),
	(40, 'Pepito', 'Grillo', 22, 1, 10, NULL),
	(41, 'Pepito', 'Grillo', 2, 2, 2, NULL),
	(42, 'Pepito', 'Grillo', 2, 2, 2, NULL),
	(43, 'Segundo', 'update', 2, 2, 2, NULL),
	(44, 'Segundo', 'update', 2, 2, 2, NULL),
	(45, 'Segundo', 'update', 2, 2, 2, NULL),
	(46, 'Marcos', 'perez', 2, 2, 2, NULL),
	(47, 'Marcos', 'perez', 2, 2, 2, NULL),
	(48, 'Marcos', 'perez', 2, 2, 2, NULL),
	(49, 'Marcos', 'perez', 2, 2, 2, NULL),
	(50, 'Marcos', 'perez', 2, 2, 2, NULL),
	(51, 'Sance', 'sance', 2, 2, 2, NULL),
	(52, 'Sance', 'sance', 2, 2, 2, NULL),
	(53, 'Helloquitti', 'yeah', 2, 2, 2, NULL),
	(54, 'yeah', 'yeah', 2, 2, 2, NULL),
	(55, 'yeah', 'yeah', 2, 2, 2, NULL),
	(56, 'ddd', 'd', 2, 2, 2, NULL),
	(57, 'ddd', 'd', 2, 2, 2, NULL),
	(58, 'nombre', 'apellidos', NULL, NULL, NULL, NULL),
	(59, 'ye', 'ye', 2, 2, 2, NULL),
	(60, 'hola', 'hola', 2, 2, 2, NULL),
	(61, 'nombre', 'apellidos', NULL, NULL, NULL, NULL),
	(63, 'Pepon', 'ye', 2, 2, 2, NULL),
	(64, 'PUTA', 'PUTA', 15, 3, 10, NULL),
	(65, 'PUTA', 'PUTA', 15, 3, 10, NULL),
	(66, 'PUTA', 'PUTA', 15, 3, 10, NULL),
	(67, 'nombre', 'apellidos', NULL, NULL, NULL, NULL),
	(68, 'nombre', 'apellidos', NULL, NULL, NULL, NULL),
	(69, 'nombre', 'apellidos', NULL, NULL, NULL, NULL),
	(70, 'nombre', 'apellidos', NULL, NULL, NULL, NULL),
	(71, '', 'apellidos', NULL, NULL, NULL, NULL),
	(72, '', 'apellidos', NULL, NULL, NULL, NULL),
	(74, 'nombre', '', NULL, NULL, NULL, NULL),
	(75, '', 'd', 2, 2, 2, NULL),
	(76, 'd', '', 2, 2, 2, NULL),
	(77, 'd', '', 2, 2, 2, NULL),
	(78, 'd', '', 2, 2, 2, NULL),
	(79, '', 'apellidos', NULL, NULL, NULL, NULL),
	(80, '', 'apellidos', NULL, NULL, NULL, NULL),
	(81, '', 'apellidos', NULL, NULL, NULL, NULL),
	(82, '', 'apellidos', NULL, NULL, NULL, NULL),
	(83, '', 'apellidos', NULL, NULL, NULL, NULL),
	(84, '', 'apellidos', NULL, NULL, NULL, NULL),
	(85, '', 'apellidos', NULL, NULL, NULL, NULL),
	(86, '', 'apellidos', NULL, NULL, NULL, NULL),
	(87, 'D', 'apellidos', NULL, NULL, NULL, NULL),
	(88, '', 'apellidos', NULL, NULL, NULL, NULL),
	(89, 'nombre', '', NULL, NULL, NULL, NULL),
	(90, 'nombre', '', NULL, NULL, NULL, NULL),
	(91, 'nombre', '', NULL, NULL, NULL, NULL),
	(92, 'nombre', '', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
