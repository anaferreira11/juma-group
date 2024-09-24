-- MySQL Script generated by MySQL Workbench
-- Sat Sep 14 14:50:57 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema auralux
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema auralux
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `auralux` DEFAULT CHARACTER SET utf8 ;
USE `auralux` ;

-- -----------------------------------------------------
-- Table `auralux`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auralux`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auralux`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auralux`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auralux`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auralux`.`produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco_compra` DECIMAL(6,2) NOT NULL,
  `preco_venda` DECIMAL(6,2) NOT NULL,
  `categoria` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_produtos_categorias1_idx` (`categoria` ASC) ,
  CONSTRAINT `fk_produtos_categorias1`
    FOREIGN KEY (`categoria`)
    REFERENCES `auralux`.`categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auralux`.`vendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auralux`.`vendas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data_venda` DATE NOT NULL,
  `cliente` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_vendas_clientes1_idx` (`cliente` ASC) ,
  CONSTRAINT `fk_vendas_clientes1`
    FOREIGN KEY (`cliente`)
    REFERENCES `auralux`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auralux`.`itens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auralux`.`itens` (
  `venda` INT NOT NULL,
  `produto` INT NOT NULL,
  `qtd` INT NOT NULL,
  `preco` DECIMAL(6,2) NOT NULL,
  PRIMARY KEY (`venda`, `produto`),
  INDEX `fk_vendas_has_produtos_produtos1_idx` (`produto` ASC) ,
  INDEX `fk_vendas_has_produtos_vendas1_idx` (`venda` ASC) ,
  CONSTRAINT `fk_vendas_has_produtos_vendas1`
    FOREIGN KEY (`venda`)
    REFERENCES `auralux`.`vendas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vendas_has_produtos_produtos1`
    FOREIGN KEY (`produto`)
    REFERENCES `auralux`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `auralux`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `auralux`.`login` (
  `nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `clientes_id` INT NOT NULL,
  INDEX `fk_login_clientes1_idx` (`clientes_id` ASC) ,
  CONSTRAINT `fk_login_clientes1`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `auralux`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS; 



