-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 25 oct. 2018 à 12:28
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
-- Base de données :  `parkin`
--

-- --------------------------------------------------------

--
-- Structure de la table `liste_attente`
--

DROP TABLE IF EXISTS `liste_attente`;
CREATE TABLE IF NOT EXISTS `liste_attente` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `id_u` int(11) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_attente`
--

INSERT INTO `liste_attente` (`id_a`, `id_u`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `liste_places`
--

DROP TABLE IF EXISTS `liste_places`;
CREATE TABLE IF NOT EXISTS `liste_places` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `num_p` varchar(11) NOT NULL,
  `date_deb` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `id_u` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_places`
--

INSERT INTO `liste_places` (`id_p`, `num_p`, `date_deb`, `date_fin`, `id_u`) VALUES
(1, 'A1', '2018-10-23 23:49:53', NULL, 2),
(2, 'A2', NULL, NULL, NULL),
(3, 'A3', '2018-10-24 00:13:00', NULL, 3),
(4, 'A4', NULL, NULL, NULL),
(5, 'A5', '2018-10-23 23:48:23', NULL, 3),
(6, 'B1', NULL, NULL, NULL),
(7, 'B2', '2018-10-24 16:37:03', '2018-10-24 16:37:46', 3),
(8, 'B3', '2018-10-24 16:38:44', '2018-10-24 16:39:03', 3),
(9, 'B4', NULL, NULL, NULL),
(10, 'C1', NULL, NULL, NULL),
(11, 'C2', NULL, NULL, NULL),
(12, 'C3', NULL, NULL, NULL),
(13, 'C4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `num_p` varchar(10) NOT NULL,
  `date_deb` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `id_u` int(11) NOT NULL,
  PRIMARY KEY (`id_r`),
  KEY `id_u` (`id_u`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_r`, `num_p`, `date_deb`, `date_fin`, `id_u`) VALUES
(1, 'A3', '2018-10-24 23:08:44', '2018-10-31 23:08:24', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `lvl` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_u`, `email`, `login`, `mdp`, `lvl`) VALUES
(1, 'admin@live.fr', 'admin', 'admin', 1),
(2, 'anouar@gmail.com', 'anouar', 'anouar', 0),
(5, 'anouar_ol@hotmail.fr', 'an', '$2y$10$dzMCi8cSep5.lrUbmFTFyOb9GkofbWEPRAfsmpENXMq07.l3DI6qm', 0),
(6, 'anouar@hotmail.com', 'test', '$2y$10$kGb/pKrqk/9n2KPemZKmQ.fcXwlNKSCK74xAWqHK4StGmnwI9PWG.', 0),
(7, 'anouar@hotmail.com', 'test', '$2y$10$aTewomiTd5nG/fZQPHOfnumDkrW12C5.H4c3Yy5pbyPfiJg8AY/Qm', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
