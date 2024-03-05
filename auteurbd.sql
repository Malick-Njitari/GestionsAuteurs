-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 22 avr. 2023 à 17:45
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp2iglbts2021`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `IDAUTEUR` int(11) NOT NULL,
  `NOMAUTEUR` varchar(50) DEFAULT NULL,
  `PRENOMAUTEUR` varchar(50) DEFAULT NULL,
  `DATENAISSANCEAUTEUR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`IDAUTEUR`, `NOMAUTEUR`, `PRENOMAUTEUR`, `DATENAISSANCEAUTEUR`) VALUES
(1, 'ELOUNDOU', 'ROGER', '2023-04-10'),
(2, 'KUIKA ', 'SEDRICK', '2023-04-10'),
(3, 'OK OK', 'OKO OK', '2005-11-11'),
(4, 'BRICE', 'BEN', '2006-11-11');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `IDLIVRE` int(11) NOT NULL,
  `TITRELIVRE` varchar(50) DEFAULT NULL,
  `ANNEELIVRE` int(11) DEFAULT NULL,
  `CATEGORIELIVRE` varchar(50) DEFAULT NULL,
  `NBREPAGES` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`IDLIVRE`, `TITRELIVRE`, `ANNEELIVRE`, `CATEGORIELIVRE`, `NBREPAGES`) VALUES
(1, 'BASE DE DONNEES ET SQL', 2023, 'CYCLE BTS', 45),
(2, 'PROGRAMMATION MOBILE', 2005, 'PROGRAMMATION', 95);

-- --------------------------------------------------------

--
-- Structure de la table `rediger`
--

CREATE TABLE `rediger` (
  `IDLIVRE` int(11) NOT NULL,
  `IDAUTEUR` int(11) NOT NULL,
  `NOMBRECHAP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rediger`
--

INSERT INTO `rediger` (`IDLIVRE`, `IDAUTEUR`, `NOMBRECHAP`) VALUES
(1, 1, 5),
(2, 2, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`IDAUTEUR`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`IDLIVRE`);

--
-- Index pour la table `rediger`
--
ALTER TABLE `rediger`
  ADD PRIMARY KEY (`IDLIVRE`,`IDAUTEUR`),
  ADD KEY `FK_REDIGER2` (`IDAUTEUR`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `IDAUTEUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `IDLIVRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rediger`
--
ALTER TABLE `rediger`
  ADD CONSTRAINT `FK_REDIGER` FOREIGN KEY (`IDLIVRE`) REFERENCES `livre` (`IDLIVRE`),
  ADD CONSTRAINT `FK_REDIGER2` FOREIGN KEY (`IDAUTEUR`) REFERENCES `auteur` (`IDAUTEUR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
