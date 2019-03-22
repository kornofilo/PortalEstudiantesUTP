-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.15 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para giisa
CREATE DATABASE IF NOT EXISTS `giisa` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `giisa`;

-- Volcando estructura para tabla giisa.permiso
CREATE TABLE IF NOT EXISTS `permiso` (
  `Idpermiso` int(11) NOT NULL,
  `Per_nombre` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Per_descripcion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`Idpermiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla giisa.permiso: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `permiso` ENABLE KEYS */;

-- Volcando estructura para tabla giisa.sesion
CREATE TABLE IF NOT EXISTS `sesion` (
  `Se_clave` varchar(100) COLLATE utf8_bin NOT NULL,
  `Se_correo` varchar(45) COLLATE utf8_bin NOT NULL,
  `Se_cedula` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Se_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla giisa.sesion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sesion` DISABLE KEYS */;
/*!40000 ALTER TABLE `sesion` ENABLE KEYS */;

-- Volcando estructura para tabla giisa.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `Us_correo` varchar(45) COLLATE utf8_bin NOT NULL,
  `Us_nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `Us_apellido` varchar(45) COLLATE utf8_bin NOT NULL,
  `Us_sede` varchar(100) COLLATE utf8_bin NOT NULL,
  `Us_facultad` varchar(45) COLLATE utf8_bin NOT NULL,
  `Us_carrera` varchar(100) COLLATE utf8_bin NOT NULL,
  `Us_sexo` varchar(10) COLLATE utf8_bin NOT NULL,
  `Us_cedula` varchar(45) COLLATE utf8_bin NOT NULL,
  `Us_Foto` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `Us_permiso` int(11) NOT NULL,
  PRIMARY KEY (`Us_correo`),
  KEY `Us_permiso_idx` (`Us_permiso`),
  KEY `Us_cedula_idx` (`Us_cedula`),
  CONSTRAINT `Us_cedula` FOREIGN KEY (`Us_cedula`) REFERENCES `sesion` (`Se_cedula`),
  CONSTRAINT `Us_permiso` FOREIGN KEY (`Us_permiso`) REFERENCES `permiso` (`Idpermiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla giisa.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
