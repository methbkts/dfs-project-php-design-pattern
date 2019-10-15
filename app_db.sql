-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `app_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `app_db`;

DROP TABLE IF EXISTS `farmers`;
CREATE TABLE `farmers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `farmers` (`id`, `name`, `description`, `location`, `image`) VALUES
(7,	'Pierre',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',	'Lyon',	'https://picsum.photos/300/200'),
(8,	'Paul',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',	'Bourg-en-Stress',	'https://picsum.photos/300/200'),
(10,	'Jacques',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',	'Oyonnax',	'https://picsum.photos/300/200');

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(1,	'Carotte',	1.50,	'https://pixabay.com/get/53e7d3454355b108f5d08460825668204022dfe05450714f702672d5/bag-576697_1280.png',	0),
(2,	'Tomate',	2.00,	'https://images.unsplash.com/photo-1557863467-1cba853b8649?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80',	0),
(3,	'Laitue',	0.80,	'https://trello-attachments.s3.amazonaws.com/5da574f7185695141ee33dfa/5da5775658b1363e867dc537/077a1c2f428aeda17b91a04cd0464498/photo-1506073881649-4e23be3e9ed0.jpeg',	0),
(4,	'Pomme',	1.20,	'https://trello-attachments.s3.amazonaws.com/5da5775658b1363e867dc537/634x951/e304d1c59fb205604faf239e00e3532b/photo-1543588906-0f97de562e31.jpeg.jpg',	0),
(5,	'Fraise',	1.70,	'https://trello-attachments.s3.amazonaws.com/5da5775658b1363e867dc537/1200x800/bd1bd56d5f3da5117396e5395eaf3984/strawberry.jpg',	0),
(6,	'Poireau',	0.60,	'https://trello-attachments.s3.amazonaws.com/5da5775658b1363e867dc537/634x950/e6a11b177ee5f58e54ffc7e6a4f595b0/poireau.jpg',	0),
(7,	'Poire',	0.90,	'https://trello-attachments.s3.amazonaws.com/5da5775658b1363e867dc537/1200x800/bc5419a4a50b0a43466c0ee3c205bd90/poire.jpg',	0),
(8,	'Banane',	1.50,	'https://trello-attachments.s3.amazonaws.com/5da5775658b1363e867dc537/634x951/a7e12e8b8d1cbda1ede4639a4148051a/Banane.jpg',	0);

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `types` (`id`, `name`) VALUES
(1,	'Fruit'),
(2,	'Légume');

-- 2019-10-14 15:08:13
