-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 05 avr. 2019 à 10:34
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_parking`
--

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

DROP TABLE IF EXISTS `date`;
CREATE TABLE IF NOT EXISTS `date` (
  `id` int(11) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `id_u` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `liste_attente`
--

DROP TABLE IF EXISTS `liste_attente`;
CREATE TABLE IF NOT EXISTS `liste_attente` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `id_u` int(11) NOT NULL,
  `id_r` int(11) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_attente`
--

INSERT INTO `liste_attente` (`id_a`, `id_u`, `id_r`) VALUES
(1, 2, 0),
(2, 2, 0),
(3, 2, 0),
(4, 3, 0),
(5, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `liste_places`
--

DROP TABLE IF EXISTS `liste_places`;
CREATE TABLE IF NOT EXISTS `liste_places` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `id_u` int(11) DEFAULT NULL,
  `dispo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_places`
--

INSERT INTO `liste_places` (`id_p`, `date`, `id_u`, `dispo`) VALUES
(1, NULL, 2, NULL),
(2, NULL, 2, NULL),
(3, NULL, 3, NULL),
(4, NULL, 3, NULL),
(5, NULL, 2, NULL),
(6, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `date_r` int(11) NOT NULL,
  `dispo` tinyint(1) NOT NULL,
  `id_u` int(11) NOT NULL,
  `validation` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_r`, `date_r`, `dispo`, `id_u`, `validation`) VALUES
(1, 10000, 1, 2, NULL),
(2, 10001, 0, 2, NULL);

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
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `lvl` tinyint(1) NOT NULL DEFAULT '0',
  `placefileattente` int(11) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_u`, `email`, `login`, `mdp`, `nom`, `prenom`, `lvl`, `placefileattente`, `date_inscription`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL, 1, NULL, NULL),
(2, 'paku@gmail.com', 'paku', 'ffbdcb6949ae829a4cf2aa836b6187a198ee9988', NULL, NULL, 0, NULL, NULL),
(3, 'test@gmail.com', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', NULL, NULL, 0, NULL, NULL),
(4, 'test2@gmail.com', 'test2', '109f4b3c50d7b0df729d299bc6f8e9ef9066971f', NULL, NULL, 0, NULL, '2019-03-25'),
(5, 'test3@gmail.com', 'test3', '3ebfa301dc59196f18593c45e519287a23297589', NULL, NULL, 0, NULL, '2019-03-25'),
(6, 'test4@gmail.com', 'test4', '1ff2b3704aede04eecb51e50ca698efd50a1379b', NULL, NULL, 0, NULL, '2019-03-25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
