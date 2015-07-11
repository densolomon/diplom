-- MySQL Script generated by MySQL Workbench
-- 06/20/15 12:07:59
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema bazardb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `bazardb` ;

-- -----------------------------------------------------
-- Schema bazardb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bazardb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `bazardb` ;

-- -----------------------------------------------------
-- Table `bazardb`.`product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bazardb`.`product` ;

CREATE TABLE IF NOT EXISTS `bazardb`.`product` (
  `id_product` CHAR(16) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NULL,
  `price` VARCHAR(45) NOT NULL,
  `count` VARCHAR(10) NULL,
  `units` VARCHAR(5) NOT NULL,
  `articul` VARCHAR(20) NOT NULL,
  `producer` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_product`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bazardb`.`status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bazardb`.`status` ;

CREATE TABLE IF NOT EXISTS `bazardb`.`status` (
  `id_status` CHAR(1) NOT NULL,
  `discription_status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_status`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bazardb`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bazardb`.`user` ;

CREATE TABLE IF NOT EXISTS `bazardb`.`user` (
  `id_user` CHAR(10) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `surname` VARCHAR(45) NULL,
  `patronymic` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone_number` VARCHAR(13) NOT NULL,
  `adress` VARCHAR(45) NULL,
  `status` CHAR(1) NULL,
  PRIMARY KEY (`id_user`),
  INDEX `status_fk_user_idx` (`status` ASC),
  CONSTRAINT `status_fk_user`
    FOREIGN KEY (`status`)
    REFERENCES `bazardb`.`status` (`id_status`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bazardb`.`order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bazardb`.`order` ;

CREATE TABLE IF NOT EXISTS `bazardb`.`order` (
  `id_order` CHAR(24) NOT NULL,
  `id_client` CHAR(10) NOT NULL,
  `shipping_address` VARCHAR(45) NOT NULL,
  `sum` VARCHAR(10) NOT NULL,
  `status` VARCHAR(1) NOT NULL,
  `date` VARCHAR(12) NULL,
  PRIMARY KEY (`id_order`),
  INDEX `user_fk_order_idx` (`id_client` ASC),
  CONSTRAINT `user_fk_order`
    FOREIGN KEY (`id_client`)
    REFERENCES `bazardb`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bazardb`.`order_temp`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bazardb`.`order_temp` ;

CREATE TABLE IF NOT EXISTS `bazardb`.`order_temp` (
  `id_order` CHAR(24) NOT NULL,
  `id_product` CHAR(16) NOT NULL,
  INDEX `order_fk_oder_temp_idx` (`id_order` ASC),
  INDEX `product_fk_order_temp_idx` (`id_product` ASC),
  CONSTRAINT `order_fk_oder_temp`
    FOREIGN KEY (`id_order`)
    REFERENCES `bazardb`.`order` (`id_order`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `product_fk_order_temp`
    FOREIGN KEY (`id_product`)
    REFERENCES `bazardb`.`product` (`id_product`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bazardb`.`main_config`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bazardb`.`main_config` ;

CREATE TABLE IF NOT EXISTS `bazardb`.`main_config` (
  `basic_corency` VARCHAR(10) NOT NULL,
  `basic_language` VARCHAR(10) NOT NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `bazardb`.`status`
-- -----------------------------------------------------
START TRANSACTION;
USE `bazardb`;
INSERT INTO `bazardb`.`status` (`id_status`, `discription_status`) VALUES ('a', 'admin');
INSERT INTO `bazardb`.`status` (`id_status`, `discription_status`) VALUES ('u', 'user');
INSERT INTO `bazardb`.`status` (`id_status`, `discription_status`) VALUES ('m', 'manager');

COMMIT;
