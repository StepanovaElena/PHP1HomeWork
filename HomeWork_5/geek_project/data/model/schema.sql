-- MySQL Script generated by MySQL Workbench
-- Sat Oct 27 15:33:29 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema geek_project
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema geek_project
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `geek_project` DEFAULT CHARACTER SET utf8 ;
USE `geek_project` ;

-- -----------------------------------------------------
-- Table `geek_project`.`gallery`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `geek_project`.`gallery` ;

CREATE TABLE IF NOT EXISTS `geek_project`.`gallery` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `link` VARCHAR(255) NOT NULL,
  `size` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
