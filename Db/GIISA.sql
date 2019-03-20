-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema GIISA
-- -----------------------------------------------------
-- base de dato relacionada a un proyecto de la U
DROP SCHEMA IF EXISTS `GIISA` ;

-- -----------------------------------------------------
-- Schema GIISA
--
-- base de dato relacionada a un proyecto de la U
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `GIISA` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
USE `GIISA` ;

-- -----------------------------------------------------
-- Table `GIISA`.`Permiso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `GIISA`.`Permiso` ;

CREATE TABLE IF NOT EXISTS `GIISA`.`Permiso` (
  `Idpermiso` INT NOT NULL,
  `Per_nombre` VARCHAR(45) NULL,
  `Per_descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`Idpermiso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GIISA`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `GIISA`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `GIISA`.`Usuario` (
  `Us_correo` VARCHAR(45) NOT NULL,
  `Us_nombre` VARCHAR(45) NOT NULL,
  `Us_apellido` VARCHAR(45) BINARY NOT NULL,
  `Us_sede` VARCHAR(100) NOT NULL,
  `Us_facultad` VARCHAR(100) NOT NULL,
  `Us_carrera` VARCHAR(100) NOT NULL,
  `Us_sexo` VARCHAR(10) NOT NULL,
  `Us_cedula` VARCHAR(120) NOT NULL,
  `Us_Foto` VARCHAR(300) NULL,
  `Us_permiso` INT NOT NULL,
  PRIMARY KEY (`Us_correo`),
  INDEX `Us_permiso_idx` (`Us_permiso` ASC) VISIBLE,
  CONSTRAINT `Us_permiso`
    FOREIGN KEY (`Us_permiso`)
    REFERENCES `GIISA`.`Permiso` (`Idpermiso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GIISA`.`Sesion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `GIISA`.`Sesion` ;

CREATE TABLE IF NOT EXISTS `GIISA`.`Sesion` (
  `idSesion` INT NOT NULL AUTO_INCREMENT,
  `Se_clave` VARCHAR(100) NOT NULL,
  `Se_correo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idSesion`),
  INDEX `Se_correo_idx` (`Se_correo` ASC) VISIBLE,
  CONSTRAINT `Se_correo`
    FOREIGN KEY (`Se_correo`)
    REFERENCES `GIISA`.`Usuario` (`Us_correo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
