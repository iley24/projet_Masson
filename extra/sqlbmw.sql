-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 06 avr. 2025 à 17:21
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bmw`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `idclients` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `modeles` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idclients`),
  KEY `modeles` (`modeles`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`idclients`, `nom`, `prenom`, `email`, `modeles`) VALUES
(28, 'Mewan', 'Jouan', 'mewan.jouan@gmail.com', 'BMW M3 Touring');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
CREATE TABLE IF NOT EXISTS `vehicules` (
  `idvehicules` int NOT NULL AUTO_INCREMENT,
  `modeles` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idvehicules`),
  UNIQUE KEY `modeles` (`modeles`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`idvehicules`, `modeles`) VALUES
(1, 'BMW M4'),
(2, 'BMW M2'),
(3, 'BMW i8'),
(4, 'BMW X7'),
(5, 'BMW M5 Competition'),
(6, 'BMW Z4 Roadster'),
(7, 'BMW Série 7'),
(8, 'BMW i4'),
(9, 'BMW X6'),
(10, 'BMW Série 3 Touring'),
(11, 'BMW iX'),
(12, 'BMW X5 M'),
(13, 'BMW Série 5'),
(14, 'BMW M3 Touring'),
(15, 'BMW iX1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
