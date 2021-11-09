-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 09 nov. 2021 à 20:33
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `apphydro`
--

-- --------------------------------------------------------

--
-- Structure de la table `jaugeage`
--

DROP TABLE IF EXISTS `jaugeage`;
CREATE TABLE IF NOT EXISTS `jaugeage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cuve` varchar(250) NOT NULL,
  `date` varchar(150) NOT NULL,
  `produit` varchar(250) NOT NULL,
  `debut_compteur` double NOT NULL,
  `distribuer` double NOT NULL,
  `fin_compteur` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jaugeage`
--

INSERT INTO `jaugeage` (`id`, `cuve`, `date`, `produit`, `debut_compteur`, `distribuer`, `fin_compteur`) VALUES
(89, 'MOHELI TANK 13', '06/11/2021 09:43', 'GASOIL', 3269, 1000, 2269),
(88, 'MOHELI TANK 12', '06/11/2021 09:42', 'ESSENCE', 49217, 1000, 48217),
(87, 'MOHELI TANK 11', '06/11/2021 09:43', 'GASOIL', 49865, 1000, 48865),
(86, 'MOHELI TANK 10', '06/11/2021 09:43', 'GASOIL', 5568, 1000, 4568),
(85, 'MOHELI TANK 09', '06/11/2021 09:42', 'PETROLE', 1734, 1000, 734),
(84, 'MOHELI TANK 08', '06/11/2021 09:42', 'PETROLE', 1379, 1000, 379),
(83, 'MOHELI TANK 07', '06/11/2021 09:43', 'PETROLE', 1897, 1000, 897),
(82, 'MOHELI TANK 06', '06/11/2021 09:43', 'PETROLE', 2812, 1000, 1812),
(81, 'MOHELI TANK 05', '06/11/2021 09:43', 'Petrole ', 2756, 1000, 1756),
(80, 'MOHELI TANK 04', '06/11/2021 09:42', 'ESSENCE', 21227, 1000, 20227),
(79, 'MOHELI TANK 03', '06/11/2021 09:42', 'ESSENCE', 21222, 1000, 20222),
(78, 'MOHELI TANK 02', '06/11/2021 09:42', 'ESSENCE', 21278, 1000, 20278),
(77, 'MOHELI TANK 01', '06/11/2021 09:42', 'ESSENCE', 14771, 1000, 13771),
(76, 'ANJOUAN T11', '06/11/2021 11:02', 'GASOIL', 1469739, 1000, 1468739),
(75, 'ANJOUAN T10', '06/11/2021 11:02', 'PETROLE', 788720, 1000, 787720),
(74, 'ANJOUAN T09', '06/11/2021 11:02', 'GASOIL', 1257581, 1000, 1256581),
(73, 'ANJOUAN T08', '06/11/2021 11:02', 'ESSENCE', 804197, 1000, 803197),
(72, 'ANJOUAN T07', '06/11/2021 11:02', 'ESSENCE', 486289, 1000, 485289),
(71, 'ANJOUAN T06', '06/11/2021 11:02', 'PETROLE', 12520, 1000, 11520),
(70, 'ANJOUAN T05', '06/11/2021 11:02', 'PETROLE', 10481, 1000, 9481),
(69, 'ANJOUAN T03', '06/11/2021 11:02', 'PETROLE', 4298, 1000, 3298),
(68, 'AEROPORT T308', '06/11/2021 10:58', 'JET A1', 49088, 1000, 48088),
(67, 'AEROPORT T307', '06/11/2021 10:58', 'JET A1', 4758, 1000, 3758),
(66, 'AEROPORT T306', '06/11/2021 10:58', 'JET A1', 7912, 1000, 6912),
(65, 'AEROPORT T305', '06/11/2021 10:58', 'JET A1', 4105, 1000, 3105),
(90, 'MOHELI TANK 14', '06/11/2021 09:43', 'GASOIL', 3306, 1000, 2306),
(91, 'MORONI T101', '06/11/2021 10:59', 'GASOIL', 56643, 1000, 55643),
(92, 'MORONI T102', '06/11/2021 10:59', 'GASOIL', 409718, 1000, 408718),
(93, 'MORONI T103', '06/11/2021 10:59', 'GASOIL', 1773546, 1000, 1772546),
(94, 'MORONI T104', '06/11/2021 10:59', 'ESSENCE', 1169796, 1000, 1168796),
(95, 'MORONI T106', '06/11/2021 10:59', 'JET A1', 669099, 1000, 668099),
(96, 'MORONI T107', '06/11/2021 10:59', 'JET A1', 47787, 1000, 46787);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `body`) VALUES
(1, 'Elvis sighted', 'elvis-sighted', 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
(2, 'Say it isn\'t so!', 'say-it-isnt-so', 'Scientists conclude that some programmers have a sense of humor.'),
(3, 'Caffeination, Yes!', 'caffeination-yes', 'World\'s largest coffee shop open onsite nested coffee shop for staff only.');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(150) NOT NULL COMMENT 'Name',
  `email` varchar(255) NOT NULL COMMENT 'Email',
  `phone` varchar(250) NOT NULL COMMENT 'Phone',
  `created_at` varchar(20) NOT NULL COMMENT 'Date Created',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Student table';

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'alhadad', 'aamproduct@gmail.com', '$2y$10$zQBxPZO1V0g2xrRKTmC3.uknhbOrzIcpPlCwCO1ufBqoTr3MioGQ.', '2021-11-03 18:28:46'),
(2, 'Alhadad Ali Mmadi', 'aamservices2018@gmail.com', '$2y$10$IbjdHm0D7POUEIbjuQWQQOw7Fb7f/cuJS5PqRjxPmBiLQkUjjUtl.', '2021-11-05 18:12:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
