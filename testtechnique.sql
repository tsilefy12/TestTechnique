-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 juil. 2023 à 15:16
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `testtechnique`
--

-- --------------------------------------------------------

--
-- Structure de la table `actif`
--

DROP TABLE IF EXISTS `actif`;
CREATE TABLE IF NOT EXISTS `actif` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mat` int NOT NULL,
  `code` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `emploi` varchar(50) NOT NULL,
  `embauchedate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actif`
--

INSERT INTO `actif` (`id`, `mat`, `code`, `name`, `lastname`, `emploi`, `embauchedate`) VALUES
(30, 26598, 533994, 'karija', 'tsilefy', 'stagiaire', '2023-07-19');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `matr` int NOT NULL,
  `nomEmploye` varchar(50) NOT NULL,
  `prenomEmploye` varchar(70) NOT NULL,
  `dateEmbch` date NOT NULL,
  `posteEpmloye` varchar(50) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `codeAcces` int NOT NULL,
  PRIMARY KEY (`matr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`matr`, `nomEmploye`, `prenomEmploye`, `dateEmbch`, `posteEpmloye`, `mail`, `codeAcces`) VALUES
(123654, 'karija', 'andriatsilefilaza', '2023-07-20', 'stagiaire', 'karija@gmail.com', 103577);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `matricule` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(70) NOT NULL,
  `dateEmbauche` date NOT NULL,
  `poste` varchar(30) NOT NULL,
  `email` varchar(128) NOT NULL,
  `typeuser` varchar(20) NOT NULL,
  `codeAccess` int NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`matricule`, `nom`, `prenoms`, `dateEmbauche`, `poste`, `email`, `typeuser`, `codeAccess`) VALUES
(1236548, 'sds', 'sdfs', '2023-07-18', 'sdf', 'sdf@gmail.com', 'Simpel utilisateur', 955012),
(2659, 'test', 'test', '2023-07-05', 'test', 'test@gmail.com', 'Simpel utilisateur', 693473),
(26598, 'karija', 'tsilefy', '2023-07-19', 'stagiaire', 'tsilefy@gmail.com', 'Admin', 533994);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
