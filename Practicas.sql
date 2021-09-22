-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema practicas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema practicas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `practicas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `practicas` ;

-- -----------------------------------------------------
-- Table `practicas`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`usuarios` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(65) NOT NULL,
  `cc` INT NOT NULL,
  `edad` INT NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 41
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`cierre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`cierre` (
  `idcierre` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacie` DATE NOT NULL,
  `aprendizaje` VARCHAR(2000) NOT NULL,
  `mejora` VARCHAR(2000) NOT NULL,
  PRIMARY KEY (`idcierre`),
  INDEX `fk_idusuarioRep_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuarioCierre`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_1` (
  `idcompromiso` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom` DATE NOT NULL,
  `compromiso` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`idcompromiso`),
  INDEX `idusuario_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `idusuario`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 37
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_10`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_10` (
  `idcompromiso_10` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_10` DATE NOT NULL,
  `compromiso_10` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_10`),
  INDEX `fk_usuario_4_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuario_10`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_11`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_11` (
  `idcompromiso_11` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_11` DATE NOT NULL,
  `compromiso_11` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_11`),
  INDEX `fk_usuario_4_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuario_11`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_12`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_12` (
  `idcompromiso_12` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_12` DATE NOT NULL,
  `compromiso_12` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_12`),
  INDEX `fk_usuario_4_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuario_12`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_2`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_2` (
  `idcompromiso_2` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_2` DATE NOT NULL,
  `compromiso_2` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_2`),
  INDEX `idusuario_idx` (`idusuario` ASC) VISIBLE,
  INDEX `fk_idusuario2_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuario2`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_3`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_3` (
  `idcompromiso_3` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_3` DATE NOT NULL,
  `compromiso_3` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_3`),
  INDEX `fk_usuario_3_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_usuario_3`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_4`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_4` (
  `idcompromiso_4` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_4` DATE NOT NULL,
  `compromiso_4` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_4`),
  INDEX `fk_usuario_4_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_usuario_4`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_5`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_5` (
  `idcompromiso_5` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_5` DATE NOT NULL,
  `compromiso_5` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_5`),
  INDEX `fk_usuario_4_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuario_5`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_6`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_6` (
  `idcompromiso_6` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_6` DATE NOT NULL,
  `compromiso_6` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_6`),
  INDEX `fk_usuario_4_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuario_6`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_7`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_7` (
  `idcompromiso_7` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_7` DATE NOT NULL,
  `compromiso_7` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_7`),
  INDEX `fk_usuario_4_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuario_7`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_8`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_8` (
  `idcompromiso_8` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_8` DATE NOT NULL,
  `compromiso_8` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_8`),
  INDEX `fk_usuario_4_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuario_8`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`compromiso_9`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`compromiso_9` (
  `idcompromiso_9` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `fechacom_9` DATE NOT NULL,
  `compromiso_9` VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (`idcompromiso_9`),
  INDEX `fk_usuario_4_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuario_9`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`info_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`info_usuario` (
  `idinfo_usuario` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `jornada` VARCHAR(45) NOT NULL,
  `programa` VARCHAR(45) NOT NULL,
  `fechaini` DATE NOT NULL,
  `fechafin` DATE NOT NULL,
  `nombreemp` VARCHAR(335) NOT NULL,
  `pregunta1` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta2` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta3` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta4` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta5` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta6` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta7` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta8` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta9` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta10` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta11` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta12` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta13` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta14` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta15` VARCHAR(1000) NULL DEFAULT NULL,
  `pregunta16` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`idinfo_usuario`),
  INDEX `fk_idusuarioInfo_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuarioInfo`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`usuarios` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 43
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `practicas`.`reportes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practicas`.`reportes` (
  `idreportes` INT NOT NULL AUTO_INCREMENT,
  `idusuario` INT NOT NULL,
  `numerorep` INT NOT NULL,
  `fecharep` DATE NOT NULL,
  `observaciones` VARCHAR(2000) NOT NULL,
  PRIMARY KEY (`idreportes`),
  INDEX `fk_idusuarioRep_idx` (`idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_idusuario`
    FOREIGN KEY (`idusuario`)
    REFERENCES `practicas`.`info_usuario` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 121
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
