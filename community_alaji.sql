-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 jan. 2020 à 15:01
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `community_alaji`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `categorie`) VALUES
(1, 'remise à niveau informatique'),
(2, 'formation bureautique');

-- --------------------------------------------------------

--
-- Structure de la table `eleve_formation`
--

DROP TABLE IF EXISTS `eleve_formation`;
CREATE TABLE IF NOT EXISTS `eleve_formation` (
  `id_formation` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_formation`,`id_user`),
  KEY `eleve_formation_users0_FK` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `eleve_formation`
--

INSERT INTO `eleve_formation` (`id_formation`, `id_user`) VALUES
(2, 4),
(1, 5),
(2, 6),
(1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `nom_formation` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `lieu` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `nb_eleve_max` int(11) NOT NULL,
  `lien_foarmation_slack` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `date_de__debut` date NOT NULL,
  `date_de_fin` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `formation_users_FK` (`id_user`),
  KEY `formation_categorie0_FK` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `nom_formation`, `lieu`, `nb_eleve_max`, `lien_foarmation_slack`, `date_de__debut`, `date_de_fin`, `id_user`, `id_categorie`) VALUES
(1, 'formation bureautique n1', '10, rue du zoubi', 15, 'sdfjhu', '2020-01-01', '2020-03-31', 2, 2),
(2, 'remise à niveau info grp1', '12, rue du zobra', 13, 'sdfhklk', '2020-01-01', '2020-04-01', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `role` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `date_de_naissance` date NOT NULL,
  `pays_de_naissance` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `sexe` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `adresse` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `ville` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `code_postal` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `telephone` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `img_path` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `role`, `date_de_naissance`, `pays_de_naissance`, `sexe`, `adresse`, `ville`, `code_postal`, `telephone`, `email`, `password`, `img_path`) VALUES
(1, 'azert', 'qsdf', 'admin', '2019-02-06', 'france', 'femme', '1, rue du zobi', 'strasbourg', '67000', '0634567812', 'azert@gmail.com', 'pmolikujyhtgrfedsz', '../assets/img/index.jpg'),
(2, 'reza', 'fdsq', 'formateur', '2019-12-23', 'france', 'homme', '2, rue du zoba', 'strasbourg', '67000', '0612345678', 'qdfg@gmail.com', 'wzsxdrftgyhujikolp', '../assets/img/index.jpg'),
(3, 'poiuy', 'jklm', 'formateur', '2019-09-16', 'france', 'femme', '3, rue de zobu', 'strasbourg', '67000', '0748888940', 'dfghjk@gmail.com', 'qdztfgyuj', '../assets/img/index.jpg'),
(4, 'tyuio', 'nbvcx', 'eleve', '2019-11-04', 'france', 'homme', '4, rue du zobo', 'strasbourg', '67000', '0612345678', 'xdcvbhj@gmail.com', 'hnbgfvsdefr', '../assets/img/index.jpg'),
(5, 'derftgyhuj', 'yhtgrfedzs', 'eleve', '2019-10-07', 'france', 'homme', '5, rue de zobai', 'strasbourg', '67000', '0612345678', 'jigyutfdr@gmail.com', 'xscvbgh', '../assets/img/index.jpg'),
(6, 'gvcx', 'dfgh', 'eleve', '2019-09-24', 'france', 'autre', '6, rue du zubo', 'strasbourg', '670000', '0609876543', 'ibuvyctxr@gmail.com', 'bvfcde', '../assets/img/index.jpg'),
(7, 'sdftgh', 'ujyhtgrf', 'eleve', '2019-08-12', 'france', 'femme', '7,rue du zuba', 'strasbourg', '67000', '0712345678', 'srcybhib@gmail.com', 'xcvbn', '../assets/img/index.jpg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `eleve_formation`
--
ALTER TABLE `eleve_formation`
  ADD CONSTRAINT `eleve_formation_formation_FK` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`),
  ADD CONSTRAINT `eleve_formation_users0_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_categorie0_FK` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `formation_users_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
