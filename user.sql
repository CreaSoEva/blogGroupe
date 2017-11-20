-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 20 nov. 2017 à 12:47
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
-- Base de données :  `bloggroupe`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_client` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_client`, `user`, `password`, `email`) VALUES
(1, 'Maxime', 'ab4f63f9ac65152575886860dde480a1', 'm.dagniere@aformac-vichy.fr'),
(2, 'Sophie', '6988ec3aba1eaddf2435141bf10487ca', 's.riviere@aformac-vichy.fr'),
(3, 'Sébastien', '91ab7b369d48cd0eba34a1b6f417e31d', 's.guillon@aformac-vichy.fr'),
(4, 'DagniÃ¨re', 'ab4f63f9ac65152575886860dde480a1', 'maximedu03120@hotmail.fr'),
(5, 'gilles', 'ab4f63f9ac65152575886860dde480a1', 'g.robin@aformac-vichy.fr'),
(6, 'Dominique', 'ab4f63f9ac65152575886860dde480a1', 'd.chevalier@aformac-vichy.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
