-- MySQL Script generated by MySQL Workbench
-- Sat Apr 25 10:15:09 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema odschoolCM2
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema odschoolCM2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `odschoolCM2` DEFAULT CHARACTER SET utf8 ;
USE `odschoolCM2` ;

-- -----------------------------------------------------
-- Table `odschoolCM2`.`admin_cm2`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odschoolCM2`.`admin_cm2` (
  `id_admin` INT NOT NULL AUTO_INCREMENT,
  `pseudo` VARCHAR(45) NULL,
  `password` VARCHAR(255) NULL,
  `statut` VARCHAR(45) NULL,
  `etat` VARCHAR(20) NULL,
  PRIMARY KEY (`id_admin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odschoolCM2`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odschoolCM2`.`users` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `email_num_tel` VARCHAR(45) NULL,
  `password` VARCHAR(255) NULL,
  `nom_complet` VARCHAR(45) NULL,
  `niveau` VARCHAR(45) NULL,
  `civilite` VARCHAR(20) NULL,
  `statut` VARCHAR(45) NULL,
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odschoolCM2`.`domaine`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odschoolCM2`.`domaine` (
  `id_domaine` INT NOT NULL AUTO_INCREMENT,
  `domaine` VARCHAR(70) NULL,
  PRIMARY KEY (`id_domaine`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odschoolCM2`.`matiere`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odschoolCM2`.`matiere` (
  `id_matiere` INT NOT NULL AUTO_INCREMENT,
  `matiere` VARCHAR(70) NULL,
  `domaine_id_domaine` INT NOT NULL,
  PRIMARY KEY (`id_matiere`),
  CONSTRAINT `fk_matiere_domaine1`
    FOREIGN KEY (`domaine_id_domaine`)
    REFERENCES `odschoolCM2`.`domaine` (`id_domaine`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_matiere_domaine1_idx` ON `odschoolCM2`.`matiere` (`domaine_id_domaine` ASC);


-- -----------------------------------------------------
-- Table `odschoolCM2`.`presentation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odschoolCM2`.`presentation` (
  `id_presentation` INT NOT NULL AUTO_INCREMENT,
  `presentation` LONGTEXT NULL,
  `matiere_id_matiere` INT NOT NULL,
  PRIMARY KEY (`id_presentation`),
  CONSTRAINT `fk_presentation_matiere`
    FOREIGN KEY (`matiere_id_matiere`)
    REFERENCES `odschoolCM2`.`matiere` (`id_matiere`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_presentation_matiere_idx` ON `odschoolCM2`.`presentation` (`matiere_id_matiere` ASC);


-- -----------------------------------------------------
-- Table `odschoolCM2`.`chapitre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odschoolCM2`.`chapitre` (
  `id_chapitre` INT NOT NULL AUTO_INCREMENT,
  `titre_chapitre` VARCHAR(45) NULL,
  `contenu_chapitre` LONGTEXT NULL,
  `matiere_id_matiere` INT NOT NULL,
  PRIMARY KEY (`id_chapitre`),
  CONSTRAINT `fk_chapitre_matiere1`
    FOREIGN KEY (`matiere_id_matiere`)
    REFERENCES `odschoolCM2`.`matiere` (`id_matiere`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_chapitre_matiere1_idx` ON `odschoolCM2`.`chapitre` (`matiere_id_matiere` ASC);


-- -----------------------------------------------------
-- Table `odschoolCM2`.`commentaires`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odschoolCM2`.`commentaires` (
  `id_commentaires` INT NOT NULL,
  `pseudo` VARCHAR(45) NULL,
  `email` VARCHAR(70) NULL,
  `contenu_commentaire` LONGTEXT NULL,
  `chapitre_id_chapitre` INT NOT NULL,
  PRIMARY KEY (`id_commentaires`),
  CONSTRAINT `fk_commentaires_chapitre1`
    FOREIGN KEY (`chapitre_id_chapitre`)
    REFERENCES `odschoolCM2`.`chapitre` (`id_chapitre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_commentaires_chapitre1_idx` ON `odschoolCM2`.`commentaires` (`chapitre_id_chapitre` ASC);


-- -----------------------------------------------------
-- Table `odschoolCM2`.`profil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odschoolCM2`.`profil` (
  `id_profil` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `tel` VARCHAR(45) NULL,
  `photo` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `a_propos` LONGTEXT NULL,
  PRIMARY KEY (`id_profil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `odschoolCM2`.`profil_chapitre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `odschoolCM2`.`profil_chapitre` (
  `profil_id_profil` INT NOT NULL,
  `chapitre_id_chapitre` INT NOT NULL,
  PRIMARY KEY (`profil_id_profil`, `chapitre_id_chapitre`),
  CONSTRAINT `fk_profil_has_chapitre_profil1`
    FOREIGN KEY (`profil_id_profil`)
    REFERENCES `odschoolCM2`.`profil` (`id_profil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_profil_has_chapitre_chapitre1`
    FOREIGN KEY (`chapitre_id_chapitre`)
    REFERENCES `odschoolCM2`.`chapitre` (`id_chapitre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_profil_has_chapitre_chapitre1_idx` ON `odschoolCM2`.`profil_chapitre` (`chapitre_id_chapitre` ASC);

CREATE INDEX `fk_profil_has_chapitre_profil1_idx` ON `odschoolCM2`.`profil_chapitre` (`profil_id_profil` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
