-- MySQL Script generated by MySQL Workbench
-- 02/01/17 09:45:29
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema kampus_appjadwal
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema kampus_appjadwal
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `kampus_appjadwal` DEFAULT CHARACTER SET utf8 ;
USE `kampus_appjadwal` ;

-- -----------------------------------------------------
-- Table `kampus_appjadwal`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kampus_appjadwal`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `kode_user` VARCHAR(10) NULL,
  `role` VARCHAR(10) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(100) NULL,
  `nama_user` VARCHAR(45) NULL,
  `telepon` VARCHAR(20) NULL,
  `foto` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kampus_appjadwal`.`mata_kuliah`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kampus_appjadwal`.`mata_kuliah` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `kode_mtk` VARCHAR(45) NOT NULL,
  `nama_mtk` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `kode_mtk_UNIQUE` (`kode_mtk` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kampus_appjadwal`.`hari`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kampus_appjadwal`.`hari` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama_hari` VARCHAR(10) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kampus_appjadwal`.`sesi_kuliah`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kampus_appjadwal`.`sesi_kuliah` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `jam_kuliah` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kampus_appjadwal`.`jadwal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kampus_appjadwal`.`jadwal` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `mata_kuliah_id` INT NOT NULL,
  `hari_id` INT NOT NULL,
  `sesi_kuliah_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_jadwal_user_idx` (`user_id` ASC),
  INDEX `fk_jadwal_mata_kuliah1_idx` (`mata_kuliah_id` ASC),
  INDEX `fk_jadwal_hari1_idx` (`hari_id` ASC),
  INDEX `fk_jadwal_sesi_kuliah1_idx` (`sesi_kuliah_id` ASC),
  CONSTRAINT `fk_jadwal_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `kampus_appjadwal`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_jadwal_mata_kuliah1`
    FOREIGN KEY (`mata_kuliah_id`)
    REFERENCES `kampus_appjadwal`.`mata_kuliah` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_jadwal_hari1`
    FOREIGN KEY (`hari_id`)
    REFERENCES `kampus_appjadwal`.`hari` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_jadwal_sesi_kuliah1`
    FOREIGN KEY (`sesi_kuliah_id`)
    REFERENCES `kampus_appjadwal`.`sesi_kuliah` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
