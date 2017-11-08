-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 nov. 2017 à 09:20
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `espace_membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(26) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `telephone` int(11) DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `motdepasse` varchar(40) NOT NULL,
  `entreprise` varchar(255) DEFAULT NULL,
  `secteur_activite` varchar(255) DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `date_naissance`, `date_inscription`, `telephone`, `mail`, `adresse`, `motdepasse`, `entreprise`, `secteur_activite`, `type`) VALUES
(4, 'n,cxkjdsn', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(5, 'kx,kj,cnkjsn', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(6, ' okkoo', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(7, 'jijijojio', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(8, '', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(9, 'jiijiuuui', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(10, 'klllllllllllllllllll', 'nnnnnnnn', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(11, ',,,,,nn', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(12, ',,,,,nn', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(13, 'iiiiiiiiiii', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(14, 'iii', 'iiiiiiiiiiiiiiiiiiii', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(15, 'iii', 'iiiiiiiiiiiiiiiiiiii', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0),
(16, 'lachheb', 'ismael', '2017-11-16', '2017-11-07 21:45:10', 760809657, 'ismaellachheb@gmail.com', '2 Rue du Jura', '8fac02dfab19e79aa9194923b48712d54c9878d1', NULL, NULL, 0),
(17, 'kjkjjjk', 'root', NULL, '2017-11-08 07:33:38', NULL, 'kjjjkkjjk', '', 'f56073bef446f13a0f14bc1b9f17b3b741a68078', NULL, NULL, 0),
(18, 'nnnnnnn', 'root', NULL, '2017-11-08 07:45:25', 0, 'nnnn', 'hhhh', 'f56073bef446f13a0f14bc1b9f17b3b741a68078', NULL, NULL, 0),
(19, 'HGYUGFYU', 'root', NULL, '2017-11-08 07:47:09', 757557, 'hfhgfhy', 'ygy', 'f56073bef446f13a0f14bc1b9f17b3b741a68078', NULL, NULL, 0),
(20, 'ismael', 'root', NULL, '2017-11-08 08:37:14', NULL, 'ismael@mail', '', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

DROP TABLE IF EXISTS `offres`;
CREATE TABLE IF NOT EXISTS `offres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `contenu` text,
  `entreprise` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id`, `nom`, `contenu`, `entreprise`, `categorie`) VALUES
(1, 'boucher ', 'vendre des truc de avec de la viandes', 'boucherfrance', 'Boucherie'),
(2, 'Boulanger ', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'Coinchaud ', 'Artisanat'),
(3, 'Militaire ', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'Etat Français ', 'Militaire');

-- --------------------------------------------------------

--
-- Structure de la table `rh`
--

DROP TABLE IF EXISTS `rh`;
CREATE TABLE IF NOT EXISTS `rh` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `entreprise` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
