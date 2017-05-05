SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `BDD-MSH`
--
CREATE DATABASE `BDD-MSH` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `BDD-MSH`;

ALTER TABLE `capteurs` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, CHANGE `type` `type` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `numero_serie` `numero_serie` VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;