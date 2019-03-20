CREATE DATABASE  IF NOT EXISTS `giisa` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `giisa`;
-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: giisa
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `permiso`
--

DROP TABLE IF EXISTS `permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `permiso` (
  `Idpermiso` int(11) NOT NULL,
  `Per_nombre` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Per_descripcion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`Idpermiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permiso`
--

LOCK TABLES `permiso` WRITE;
/*!40000 ALTER TABLE `permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sesion`
--

DROP TABLE IF EXISTS `sesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sesion` (
  `idSesion` int(11) NOT NULL AUTO_INCREMENT,
  `Se_clave` varchar(100) COLLATE utf8_bin NOT NULL,
  `Se_correo` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idSesion`),
  KEY `Se_correo_idx` (`Se_correo`),
  CONSTRAINT `Se_correo` FOREIGN KEY (`Se_correo`) REFERENCES `usuario` (`Us_correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sesion`
--

LOCK TABLES `sesion` WRITE;
/*!40000 ALTER TABLE `sesion` DISABLE KEYS */;
/*!40000 ALTER TABLE `sesion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuario` (
  `Us_correo` varchar(45) COLLATE utf8_bin NOT NULL,
  `Us_nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `Us_apellido` varchar(45) COLLATE utf8_bin NOT NULL,
  `Us_sede` varchar(100) COLLATE utf8_bin NOT NULL,
  `Us_facultad` varchar(100) COLLATE utf8_bin NOT NULL,
  `Us_carrera` varchar(100) COLLATE utf8_bin NOT NULL,
  `Us_sexo` varchar(10) COLLATE utf8_bin NOT NULL,
  `Us_cedula` varchar(120) COLLATE utf8_bin NOT NULL,
  `Us_Foto` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `Us_permiso` int(11) NOT NULL,
  PRIMARY KEY (`Us_correo`),
  KEY `Us_permiso_idx` (`Us_permiso`),
  CONSTRAINT `Us_permiso` FOREIGN KEY (`Us_permiso`) REFERENCES `permiso` (`Idpermiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'giisa'
--

--
-- Dumping routines for database 'giisa'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-19 23:31:20
