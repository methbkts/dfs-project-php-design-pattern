-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `characters`;
CREATE TABLE `characters` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `health` int(10) unsigned NOT NULL,
  `energy` int(10) unsigned NOT NULL,
  `power` int(10) unsigned NOT NULL,
  `speed` int(10) unsigned NOT NULL,
  `weapon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) unsigned NOT NULL,
  `race_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `role_id` (`role_id`),
  KEY `race_id` (`race_id`),
  CONSTRAINT `characters_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `characters_ibfk_3` FOREIGN KEY (`race_id`) REFERENCES `races` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `characters` (`id`, `name`, `gender`, `health`, `energy`, `power`, `speed`, `weapon`, `special`, `image`, `role_id`, `race_id`) VALUES
(6,	'toto',	'male',	10,	10,	10,	10,	'tata',	'titi',	'https://picsum.photos/300/200',	1,	1),
(7,	'Nitem',	'male',	10,	10,	3,	5,	'Knife',	'Steal',	'https://picsum.photos/300/200',	5,	3),
(8,	'Paul',	'male',	1,	1,	1,	1,	'Pierre',	'Jacques',	'https://picsum.photos/300/200',	4,	2),
(10,	'Pier',	'male',	1,	1,	1,	1,	'Pol',	'Jak',	'https://picsum.photos/300/200',	4,	1);

DROP TABLE IF EXISTS `races`;
CREATE TABLE `races` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `races` (`id`, `name`) VALUES
(2,	'Dwarf'),
(3,	'Gnome'),
(1,	'Human'),
(4,	'Night Elf'),
(5,	'Orc'),
(8,	'Tauren'),
(6,	'Troll'),
(7,	'Undead');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`) VALUES
(3,	'Hunter'),
(6,	'Mage'),
(2,	'Paladin'),
(5,	'Priest'),
(4,	'Rogue'),
(1,	'Warrior');

-- 2019-09-26 09:59:58
