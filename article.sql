-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 23 nov. 2017 à 09:02
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.10

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
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` bigint(20) NOT NULL,
  `id_categorie` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_client` varchar(50) CHARACTER SET utf8 NOT NULL,
  `titre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contenu` text CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `id_categorie`, `id_client`, `titre`, `contenu`, `date`) VALUES
(31, '3', '3', 'Whisky', 'Le mot anglais whisky ou whiskey vient du celtique uisge en gaÃ©lique Ã©cossais ou de uisce en gaÃ©lique irlandais. Le terme signifie simplement Â« eau Â» dans les deux langues ; c\'est Â« uisge beatha Â» en gaÃ©lique Ã©cossais et Â« uisce beatha Â» en irlandais qui signifient Â« eau de vie Â» â€” et donc Â« whisky Â» en anglais.\r\n\r\nEn franÃ§ais, le mot whisky est gÃ©nÃ©ralement employÃ© pour dÃ©signer les productions Ã©cossaises, canadiennes et nippones ou bretonnes, alors que l\'on utilise le mot whiskey pour les productions irlandaises et amÃ©ricaines1. Cependant, ces nuances ne sont pas identiques dans toutes les langues. En anglais amÃ©ricain, par exemple, le mot Â« scotch Â», abrÃ©viation de Â« Scotch whisky Â» dÃ©signe un whisky produit en Ã‰cosse.', '2017-11-21 15:29:02'),
(32, '3', '2', 'Mercurey', 'Le mercureyN 2 est un vin d\'appellation d\'origine contrÃ´lÃ©e (AOC) de la Bourgogne viticole. Son vignoble est situÃ© en SaÃ´ne-et-Loire, Ã  douze kilomÃ¨tres au nord-ouest de Chalon-sur-SaÃ´ne (cÃ´te chalonnaise) et Ã  sept kilomÃ¨tres de Givry. Cette AOC s\'Ã©tend sur les communes de Mercurey et de Saint-Martin-sous-Montaigu.\r\n\r\nCe vignoble, reconnu en AOC en 1936 (derniÃ¨res modifications du dÃ©cret le 19 septembre 20034, le 27 octobre 20095 et le 12 octobre 20116) et implantÃ© sur des sols marno-argilo-calcaires, a, depuis dix ans, une surface de production d\'environ 650 hectares en appellation village et en premier cru. Sa production d\'environ 28 000 hectolitres donne Ã  peu prÃ¨s 90 % de vin rouge (cÃ©page pinot noir et rendement de 40 Ã  58 hectolitres par hectare) et 10 % de vin blanc (cÃ©page chardonnay et rendement de 45 Ã  64 hectolitres par hectare).\r\n\r\nCette appellation, situÃ©e sous un climat tempÃ©rÃ© Ã  tendance continentale, comprend 85 Â« lieux-dits Â» en AOC village et 32 en premier cru. C\'est la plus importante AOC de la cÃ´te chalonnaise7. Historiquement, Marguerite de Flandre et Gabrielle d\'EstrÃ©es apprÃ©ciaient ce vin.', '2017-11-21 15:29:32'),
(39, '2', '1', 'essai', 'fffff', '2017-11-22 11:22:48');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
