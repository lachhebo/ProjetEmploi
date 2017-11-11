-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2017 at 08:44 PM
-- Server version: 5.7.20-0ubuntu0.17.10.1
-- PHP Version: 7.1.8-1ubuntu1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `espace_membre`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocage`
--

CREATE TABLE `blocage` (
  `id_blocage` int(11) NOT NULL,
  `id_rh` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blocage`
--

INSERT INTO `blocage` (`id_blocage`, `id_rh`, `id_membre`) VALUES
(1, 21, 25);

-- --------------------------------------------------------

--
-- Table structure for table `competences`
--

CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diplome`
--

CREATE TABLE `diplome` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `date_obtention` date DEFAULT NULL,
  `etudiant` int(11) NOT NULL,
  `ecole` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diplome`
--

INSERT INTO `diplome` (`id`, `nom`, `date_obtention`, `etudiant`, `ecole`) VALUES
(21, 'brevet des colleges', '2007-11-09', 21, 'collège les plaisances'),
(22, 'Baccalauréat Scientifique', '2014-12-11', 21, 'Lycée Leopold Sedar Senghor ');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `date_obtention` date DEFAULT NULL,
  `duree` int(11) NOT NULL,
  `entreprise` varchar(255) DEFAULT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `poste`, `date_obtention`, `duree`, `entreprise`, `id_membre`) VALUES
(1, 'Chef', '2012-11-14', 12, 'Grec', 21);

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
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
  `bio` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `date_naissance`, `date_inscription`, `telephone`, `mail`, `adresse`, `motdepasse`, `entreprise`, `secteur_activite`, `type`, `bio`) VALUES
(4, 'n,cxkjdsn', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(5, 'kx,kj,cnkjsn', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(6, ' okkoo', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(7, 'jijijojio', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(8, '', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(9, 'jiijiuuui', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(10, 'klllllllllllllllllll', 'nnnnnnnn', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(11, ',,,,,nn', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(12, ',,,,,nn', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(13, 'iiiiiiiiiii', 'root', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(14, 'iii', 'iiiiiiiiiiiiiiiiiiii', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(15, 'iii', 'iiiiiiiiiiiiiiiiiiii', NULL, '2017-11-07 21:31:54', NULL, '', NULL, '', NULL, NULL, 0, NULL),
(16, 'lachheb', 'ismael', '2017-11-16', '2017-11-07 21:45:10', 760809657, 'ismaellachheb@gmail.com', '2 Rue du Jura', '8fac02dfab19e79aa9194923b48712d54c9878d1', NULL, NULL, 0, NULL),
(17, 'kjkjjjk', 'root', NULL, '2017-11-08 07:33:38', NULL, 'kjjjkkjjk', '', 'f56073bef446f13a0f14bc1b9f17b3b741a68078', NULL, NULL, 0, NULL),
(18, 'nnnnnnn', 'root', NULL, '2017-11-08 07:45:25', 0, 'nnnn', 'hhhh', 'f56073bef446f13a0f14bc1b9f17b3b741a68078', NULL, NULL, 0, NULL),
(19, 'HGYUGFYU', 'root', NULL, '2017-11-08 07:47:09', 757557, 'hfhgfhy', 'ygy', 'f56073bef446f13a0f14bc1b9f17b3b741a68078', NULL, NULL, 0, NULL),
(20, 'ismael', 'root', NULL, '2017-11-08 08:37:14', NULL, 'ismael@mail', '', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', NULL, NULL, 0, NULL),
(21, 'lachhebo', 'ismael', '2017-11-08', '2017-11-08 10:16:49', 760809657, 'lachheb@mail', 'rue du jura', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', 'bouldog', 'Vente', 1, 'Je suis à née à mantes la ville,j\'aime les frites et les cookies. J\'aimerai devenir pilote d\'avion ou SDF. '),
(22, 'b2o', 'booba', '2017-11-06', '2017-11-08 10:19:04', 0, 'crime@mail', '2 rue fu jura', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', 'crime', 'rap', 1, NULL),
(23, 'root', 'root', '2017-11-23', '2017-11-08 10:32:12', 0, 'root', 'rootad', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', 'rootent', 'rootsa', 1, NULL),
(24, 'dorian', 'madi', NULL, '2017-11-09 08:28:38', 0, 'bonnequalite@mail', 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 'weedducheveux', 'vente', 1, NULL),
(25, 'chaib', 'izza', NULL, '2017-11-10 18:54:32', 0, 'chaib', '2 rue du jura', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', NULL, NULL, 0, NULL),
(26, 'nnnnnnn', 'totototototo', NULL, '2017-11-11 16:37:31', 0, 'tttt', '', 'e4923e9c2aa4a0444196ded875ae56bcf6d365dd', NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offres`
--

CREATE TABLE `offres` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `contenu` text,
  `entreprise` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) NOT NULL,
  `rh_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offres`
--

INSERT INTO `offres` (`id`, `nom`, `contenu`, `entreprise`, `categorie`, `adresse`, `rh_id`) VALUES
(1, 'boucher ', 'vendre des truc de avec de la viandes', 'boucherfrance', 'Boucherie', '', 0),
(2, 'Boulanger ', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'Coinchaud ', 'Artisanat', '', 0),
(3, 'Militaire ', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'Etat Français ', 'Militaire', '', 0),
(4, ',lk,c', ' oooooooo', ',,,', 'Banque / Assurance', ',,', 21),
(5, ',lk,c', ' oooooooo', ',,,', 'Banque / Assurance', ',,', 21),
(44, 'TEST', 'HJHJHJJJJJJJJJJJJJJJJJJJJJ', 'bb', 'aa', 'aa', 21);

-- --------------------------------------------------------

--
-- Table structure for table `postule`
--

CREATE TABLE `postule` (
  `id_postule` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rh`
--

CREATE TABLE `rh` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `entreprise` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocage`
--
ALTER TABLE `blocage`
  ADD PRIMARY KEY (`id_blocage`);

--
-- Indexes for table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diplome`
--
ALTER TABLE `diplome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postule`
--
ALTER TABLE `postule`
  ADD PRIMARY KEY (`id_postule`);

--
-- Indexes for table `rh`
--
ALTER TABLE `rh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocage`
--
ALTER TABLE `blocage`
  MODIFY `id_blocage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `diplome`
--
ALTER TABLE `diplome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
