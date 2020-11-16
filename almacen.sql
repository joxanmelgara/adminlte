
CREATE DATABASE `BDALMA`;
USE BDALMA;


CREATE TABLE IF NOT EXISTS `BDALMA`.`tbCategorias` (
  `idtbCategorias` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idtbCategorias`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `BDALMA`.`tbMultimedia` (
  `idtbMultimedia` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idtbMultimedia`))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `BDALMA`.`tbVentas` (
  `idtbVentas` INT NOT NULL,
  `cantidad` INT NOT NULL,
  `precioVt` DECIMAL NOT NULL,
  `precioCp` DECIMAL NOT NULL,
  `totalVt` DECIMAL NOT NULL,
  `destino` VARCHAR(25) NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`idtbVentas`))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `BDALMA`.`tbProductos` (
  `idtbProductos` INT NOT NULL,
  `nombrep` VARCHAR(25) NOT NULL,
  `codigo` VARCHAR(5) NOT NULL,
  `precioVt` DECIMAL NOT NULL,
  `precioCp` DECIMAL NOT NULL,
  `destino` VARCHAR(25) NOT NULL,
  `fecha` DATE NOT NULL,
  `tbCategorias_idtbCategorias` INT NOT NULL,
  `tbMultimedia_idtbMultimedia` INT NOT NULL,
  `tbVentas_idtbVentas` INT NOT NULL,
  PRIMARY KEY (`idtbProductos`))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `BDALMA`.`tbGrupoUs` (
  `idtbGrupoUs` INT NOT NULL,
  `nombreGr` VARCHAR(25) NOT NULL,
  `nivelGr` VARCHAR(25) NOT NULL,
  `estadoGr` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`idtbGrupoUs`))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `BDALMA`.`tbUsuarios` (
  `idtbUsuarios` INT NOT NULL,
  `nombre` VARCHAR(25) NOT NULL,
  `contrasenia` VARCHAR(25) NOT NULL,
  `estado` VARCHAR(20) NOT NULL,
  `tbGrupoUs_idtbGrupoUs` INT NOT NULL,
  PRIMARY KEY (`idtbUsuarios`))
ENGINE = InnoDB;


