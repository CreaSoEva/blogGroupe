-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 23 nov. 2017 à 10:45
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
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_categorie` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_client` varchar(50) CHARACTER SET utf8 NOT NULL,
  `titre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contenu` text CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `id_categorie`, `id_client`, `titre`, `contenu`, `date`) VALUES
(1, '3', '1', 'Mercurey', 'Le mercureyN 2 est un vin d\'appellation d\'origine contrÃ´lÃ©e (AOC) de la Bourgogne viticole. Son vignoble est situÃ© en SaÃ´ne-et-Loire, Ã  douze kilomÃ¨tres au nord-ouest de Chalon-sur-SaÃ´ne (cÃ´te chalonnaise) et Ã  sept kilomÃ¨tres de Givry. Cette AOC s\'Ã©tend sur les communes de Mercurey et de Saint-Martin-sous-Montaigu. Ce vignoble, reconnu en AOC en 1936 (derniÃ¨res modifications du dÃ©cret le 19 septembre 20034, le 27 octobre 20095 et le 12 octobre 20116) et implantÃ© sur des sols marno-argilo-calcaires, a, depuis dix ans, une surface de production d\'environ 650 hectares en appellation village et en premier cru. Sa production d\'environ 28 000 hectolitres donne Ã  peu prÃ¨s 90 % de vin rouge (cÃ©page pinot noir et rendement de 40 Ã  58 hectolitres par hectare) et 10 % de vin blanc (cÃ©page chardonnay et rendement de 45 Ã  64 hectolitres par hectare). Cette appellation, situÃ©e sous un climat tempÃ©rÃ© Ã  tendance continentale, comprend 85 Â« lieux-dits Â» en AOC village et 32 en premier cru. C\'est la plus importante AOC de la cÃ´te chalonnaise7. Historiquement, Marguerite de Flandre et Gabrielle d\'EstrÃ©es apprÃ©ciaient ce vin.', '2017-11-23 10:19:44'),
(2, '3', '1', 'Gewurztraminer', 'Son histoire est longtemps confondue avec celle du savagnin rose et pour cause : il est issu de ce dernier cÃ©page dont il est une mutation plus aromatique. Les autres critÃ¨res de distinction ampÃ©lographique sont identiques.\r\n\r\nSon origine vient du Tyrol italien oÃ¹ on parle allemand : Gewurtz signifie Â« aromatisÃ© Â», Traminer de la ville de Tramin, dans le Sud Tyrol (Nord-Est de l\'Italie). On a connaissance des cÃ©pages italiens depuis l\'annÃ©e 1000. Le climat froid du Nord-Est italien est similaire Ã  celui de l\'Allemagne et de l\'Alsace : pour cela l\'importation des cÃ©pages en Alsace a permit d\'obtenir un trÃ¨s excellent blanc comme en Italie.[rÃ©f. nÃ©cessaire]\r\n\r\nIl semblerait que la premiÃ¨re sÃ©lection franÃ§aise de cette forme aromatique ait eu lieu en Alsace. Ã€ partir du xixe siÃ¨cle, il est nommÃ© distinctement du simple traminer1. Victor Rendu, dans son ouvrage AmpÃ©lographie franÃ§aise, Ã©dition de 1857, le dÃ©crit sous le nom de Â« gentil rose Â». Une fois ce cÃ©page bien individualisÃ©, il a traversÃ© le Rhin pour conquÃ©rir l\'Allemagne et l\'Autriche. La terminologie germanique ne permet pas toujours de distinguer le gewurztraminer du savagnin rose, tous les deux Ã©tant appelÃ©s traminer.', '2017-11-23 10:21:03'),
(3, '3', '1', 'Monbazillac', 'Le monbazillac fait partie du vignoble de Bergerac. En cela, il partage une histoire commune avec l\'appellation bergerac.\r\n\r\nDans les annÃ©es 1930, un diffÃ©rend oppose un viticulteur de Gageac-et-Rouillac, commune voisine de Saussignac, Ã  l\'appellation monbazillac. Il perd son procÃ¨s en 1934, la dÃ©cision de justice excluant les producteurs de cette zone de la prestigieuse appellation de vin blanc liquoreux6.\r\n\r\nL\'AOC est reconnue par un dÃ©cret du 15 mai 1936.', '2017-11-23 10:21:44'),
(4, '3', '1', 'Saint-pourÃ§ain', 'On retrouve dans un texte bachique du Moyen Ã‚ge, dÃ©couvert par Achille Jubinal (Nouveau recueil de contes, dits, fabliaux et autres piÃ¨ces inÃ©dites des XIIIe, XIVe et XVe siÃ¨cles) dans un poÃ¨me intitulÃ© La Desputoison du vin et de l\'eau, une rÃ©fÃ©rence aux vins de Saint-PourÃ§ain, qui indique :\r\n\r\nÂ« Por ce nommÃ©s sui Saint-PorÃ§ain\r\nCar je sui saint, bon, cler et sain. Â»\r\n\r\nLe vin de Saint-PourÃ§ain Ã©tait servi Ã  la table des rois de France CapÃ©tiens dÃ¨s le xiiie siÃ¨cle, ainsi qu\'Ã  la cour des papes Ã  Avignon (une cour qui en consommait de 60 Ã  120 hectolitres par an). Il fut servi lors des fÃªtes donnÃ©es par le roi Saint Louis Ã  Saumur en 1241 lorsque Alphonse de Poitiers fut armÃ© chevalier et investi des comtÃ©s d\'Auvergne et du Poitou. Lors du sacre de Philippe de Valois en 1328, les habitants de Reims eurent droit Ã  un festin arrosÃ© de saint-pourÃ§ain. Les qualitÃ©s de ce vignoble sont vantÃ©es par l\'Ã©vÃªque de Paris Guillaume d\'Auvergne au xiiie siÃ¨cle. Sous Philippe Auguste, le poÃ¨te Henri d\'Andelys dans son histoire La bataille des vins Ã©numÃ¨re les plus grands vins blancs de l\'Ã©poque et place en troisiÃ¨me position le saint-pourÃ§ain aprÃ¨s les vins de Beaune et de Saint-Ã‰milion. Les ducs de Bourbon et comtes de Forez apprÃ©ciaient bien Ã©videmment ce vin, noble produit des terres de leur duchÃ©.\r\nIl Ã©tait transportÃ© Ã  Paris par bateaux (\"sapiniÃ¨res\") qui descendaient l\'Allier puis la Loire, Ã  partir des ports de la Chaise (commune de MonÃ©tay-sur-Allier) et de ChÃ¢tel-de-Neuvre. ArrivÃ©s Ã  Briare ou Gien, aprÃ¨s un court charroi, la marchandise suivait alors les cours du Loing, puis ceux de la Seine, pour Ãªtre dÃ©chargÃ©e sur la place de GrÃ¨ve de la capitale. On dÃ©montait alors les bateaux pour rÃ©utiliser le bois pour le chauffage. Pour rejoindre Avignon, on acheminait les tonneaux par charroi jusqu\'Ã  Chalon-sur-SaÃ´ne, puis par bateaux en suivant la SaÃ´ne et le RhÃ´ne.', '2017-11-23 10:22:24'),
(5, '1', '2', 'Ricard', '1932 : Ã‚gÃ© de 22 ans, Paul Ricard dÃ©cide de donner son nom Ã  une boisson qu\'il vient d\'inventer1. Le Ricard est nÃ©.\r\n1940 : Sous le gouvernement de Vichy, le pastis Ã  45Â° est interdit. Paul Ricard ne produit plus sa boisson. Le pastis Ã  45Â° est Ã  nouveau autorisÃ© en 1951.\r\nDans les annÃ©es 1960, Paul Ricard ouvre diverses usines Ricard en France.\r\n1968 : Paul Ricard quitte la direction de l\'entreprise.\r\n1975 : Paul Ricard s\'allie avec Jean HÃ©mard, du groupe Pernod, pour fusionner2 et donner naissance au groupe Pernod Ricard. Le groupe est second distributeur mondial de vins et spiritueux, et leader sur le marchÃ© europÃ©en3.\r\nLe pastis Ricard[modifier | modifier le code]\r\nLe Ricard est un pastis Ã  base d\'anis, de rÃ©glisse et d\'herbes de Provence crÃ©Ã© par Paul Ricard en 1932.\r\n\r\nDe nos jours, la marque Ricard est leader mondial des anisÃ©s4 avec plus de 40 millions de litres de Ricard vendus chaque annÃ©e5.\r\n\r\nSon principal concurrent est le Pastis 51, qui fait Ã©galement partie aujourd\'hui du groupe Pernod Ricard, mais produit et distribuÃ© par la sociÃ©tÃ© Pernod.', '2017-11-23 10:24:09'),
(6, '1', '2', 'Wishy', 'Ã‰tymologie[modifier | modifier le code]\r\nLe mot anglais whisky ou whiskey vient du celtique uisge en gaÃ©lique Ã©cossais ou de uisce en gaÃ©lique irlandais. Le terme signifie simplement Â« eau Â» dans les deux langues ; c\'est Â« uisge beatha Â» en gaÃ©lique Ã©cossais et Â« uisce beatha Â» en irlandais qui signifient Â« eau de vie Â» â€” et donc Â« whisky Â» en anglais.\r\n\r\nEn franÃ§ais, le mot whisky est gÃ©nÃ©ralement employÃ© pour dÃ©signer les productions Ã©cossaises, canadiennes et nippones ou bretonnes, alors que l\'on utilise le mot whiskey pour les productions irlandaises et amÃ©ricaines1. Cependant, ces nuances ne sont pas identiques dans toutes les langues. En anglais amÃ©ricain, par exemple, le mot Â« scotch Â», abrÃ©viation de Â« Scotch whisky Â» dÃ©signe un whisky produit en Ã‰cosse.', '2017-11-23 10:24:47'),
(7, '1', '2', 'Rhum', 'Cet alcool issu de la canne Ã  sucre ou de mÃ©lasses est produit par fermentation puis distillation.\r\n\r\nIl se prÃ©sente sous plusieurs dÃ©clinaisons reconnues en Europe par le RÃ¨glement 1576 de 1989 modifiÃ© en 2003.\r\n\r\nSe distinguent au niveau du taux de non-alcool (TNA), ou teneur en substances volatiles, deux catÃ©gories quel que soit leur mode de fabrication :\r\n\r\nles rhums lÃ©gers : avec un TNA infÃ©rieur Ã  60 g/HAP (hectolitre d\'alcool pur)\r\nles rhums traditionnels : avec un TNA supÃ©rieur Ã  225 g/HAP\r\nCes diffÃ©rences sont liÃ©es au souhait des lÃ©gislateurs franÃ§ais de protÃ©ger les eaux-de-vie de vins sur le marchÃ© national (depuis la libÃ©ralisation du marchÃ© du rhum sur le territoire national en 1783) : le rhum devait Ãªtre facilement identifiable par dÃ©gustation, argument repris dans les dÃ©finitions jusqu\'alors. Dans les autres territoires, notamment les colonies anglaises ou espagnoles, le rhum, Ã  la maniÃ¨re d\'autres spiritueux, est travaillÃ© par plusieurs repasses en alambic ou plus rÃ©cemment dans des sites multi colonne afin d\'obtenir un alcool plus neutre ou raffinÃ©.\r\n\r\nCette diffÃ©rence explique notamment l\'utilisation prÃ©fÃ©rentielle de rhum lÃ©ger (le plus souvent de tradition espagnole) dans la majoritÃ© des cocktails du xixe Ã  aujourd\'hui.\r\n\r\nNotons que le texte europÃ©en prÃ©voit Ã©galement quelques assemblages de rhum pour certaines spÃ©cificitÃ©s comme le Stroh.\r\n\r\nTrois catÃ©gories de rhum se distinguent en Europe, selon leur procÃ©dÃ© de fabrication obtenu Ã  partir :\r\n\r\nd\'un jus naturel ou vesou issu du broyage de la canne Ã  sucre qui donne le rhum agricole, aussi appelÃ© historiquement rhum z\'habitant (la Martinique, une des Ã®les productrices a obtenu l\'AOC le 5 novembre 1996) ;\r\nde mÃ©lasse, rÃ©sidu de sucrerie aprÃ¨s concentration du jus par chauffage et Ã©liminations des impuretÃ©s, qui, aprÃ¨s fermentation, donne :\r\npar fermentation directe le rhum industriel Ã©galement appelÃ© rhum de sucrerie ou rhum traditionnel.\r\npar fermentation en prÃ©sence de vinasse le Rhum Grand ArÃ´me fabriquÃ© uniquement en Martinique (TNA > 500 g/HAP) et Ã  la JamaÃ¯que, et trÃ¨s rÃ©cemment Ã  la RÃ©union, employÃ© en usage alimentaire Ã  faible dose car trÃ¨s aromatique (pÃ¢tisserieâ€¦) sans Ãªtre soumis Ã  la lÃ©gislation sur les alcools.\r\nd\'un sirop obtenu par Ã©vaporation et concentration du vesou (\"miel de canne\", le nom utilisÃ© par les producteurs principalement latino-amÃ©ricains), qui gagne du terrain depuis quelques annÃ©es, au fur et Ã  mesure que les connaissances s\'affinent. Les marques qui revendiquent ce procÃ©dÃ© de fabrication sont par exemple les rhums du Guatemala (Botran et Zacapa) et le rhum du Venezuela Diplomatico.\r\nIssu de deux matiÃ¨res premiÃ¨res distinctes, le rhum agricole et le rhum industriel sont donc diffÃ©rents organoleptiquement, leurs arÃ´mes Ã©tant liÃ©s Ã  leur matiÃ¨re premiÃ¨re.\r\n\r\nOn distingue trois types de rhums bien particuliers :\r\n\r\n\r\nIGP Rhum des Antilles franÃ§aises Sainte-EspÃ©rance\r\nRhum : Les rhums en provenance des Antilles franÃ§aises, eaux-de-vie produites Ã  base de jus de canne frais. Rhums trÃ¨s aromatiques aux parfums typiques de la canne Ã  sucre (banane, agrumesâ€¦). Depuis le 22 janvier 2015, certains rhums franÃ§ais ont obtenu lâ€™IGP (indication gÃ©ographique protÃ©gÃ©e). il s\'agit des :\r\nÂ« Rhum de la Guadeloupe Â» ou Â« Rhum de Guadeloupe Â» ou Â« Rhum Guadeloupe Â»\r\nÂ« Rhum de La RÃ©union Â» ou Â« Rhum RÃ©union Â» ou Â« Rhum de RÃ©union Â» ou Â« Rhum de lâ€™Ã®le de La RÃ©union Â»\r\nÂ« Rhum agricole de la Guyane Â» ou Â« Rhum agricole de Guyane Â» ou Â« Rhum agricole Guyane Â»\r\nÂ« Rhum de la baie du Galion Â» ou Â« Rhum Baie du Galion Â»\r\nÂ« Rhum des Antilles franÃ§aises Â»\r\nÂ« Rhum des dÃ©partements franÃ§ais dâ€™outre-mer Â» ou Â« Rhum de lâ€™outre-mer franÃ§ais Â»2.\r\nRum : Les rums de tradition britannique (ou Navy Rum). Rum issus de mÃ©lasse ou de jus de canne frais, ayant souvent subi une double distillation. Souvent Ã©picÃ©s et Ã©dulcorÃ©s, ils sont plutÃ´t lourds et huileux.\r\nRon : Les rons de tradition hispanique (ou cubaine). Plus lÃ©gers, ils sont souvent parfaits pour les cocktails (mojito, daÃ¯quiriâ€¦)', '2017-11-23 10:25:14'),
(8, '1', '2', 'Vodka', 'La vodka (du polonais : wÃ³dka, russe : Ð²Ð¾Ð´ÐºÐ°, bulgare : Ð²Ð¾Ð´ÐºÐ°) est une boisson alcoolisÃ©e incolore de 40 degrÃ©s. L\'origine de cette eau-de-vie se situerait en Russie ou en Pologne1 selon les sources.\r\n\r\nLa vodka peut Ãªtre produite Ã  partir de presque toutes les matiÃ¨res d\'origine agricole : les plus connues sont les cÃ©rÃ©ales (blÃ©, orge, sarrasin), mais d\'autres matiÃ¨res premiÃ¨res peuvent Ãªtre utilisÃ©es2, parmi elles, les pommes de terre3, les betteraves, les chÃ¢taignes, le sucre ou le riz mais Ã©galement les fruits (pommes, poires, cerises...).\r\n\r\nElle est devenue l\'alcool national de nombreux pays (Russie, Pologne, Ukraine, Finlande, etc.)4. Entre quatre et cinq mille marques de vodka sont prÃ©sentes sur le marchÃ©. Aujourd\'hui, on produit de la vodka dans de nombreux pays, Ã  la fois dans les pays traditionnellement producteurs, mais aussi dans la plupart des pays consommateurs d\'alcool.\r\n\r\nLa vodka est l\'alcool fort le plus consommÃ© dans le monde avec un peu plus de cinq cents millions de caisses de neuf litres en 20055.\r\n\r\nLa vodka se retrouve dans la composition de nombreux cocktails.', '2017-11-23 10:25:43'),
(9, '2', '3', 'Louis Roederer', 'Le Champagne Louis Roederer est une Maison de Champagne fondÃ©e Ã  Reims en 17761.\r\n\r\nC\'est lâ€™une des derniÃ¨res grandes maisons de Champagne Ã  Ãªtre toujours indÃ©pendante et dÃ©tenue par la famille fondatrice.\r\n\r\nSa production de vins de Champagne est issue principalement de ses propres vignes. Elle sâ€™Ã©lÃ¨ve Ã  plus de 4,5 millions de bouteilles par an, distribuÃ©es dans plus de 100 pays2,3.', '2017-11-23 10:28:37'),
(10, '2', '3', 'Taittinger', 'elon la famille, les lointaines origines de la famille Taittinger se situent en Autriche avant qu\'elle ne s\'installe en 1640 en Lorraine2\r\n\r\nEn Lorraine, cette famille Taittinger est fixÃ©e au milieu du xviiie siÃ¨cle Ã  Momerstroff en Moselle, oÃ¹ ils sont cultivateurs et tisserands3.\r\n\r\nC\'est un Nicolas Tettinger, nÃ© en 1722 Ã  NarbÃ©fontaine et mariÃ© Ã  Joanet AndrÃ©, qui est l\'ancÃªtre de cette famille. Cultivateur Ã  Momerstroff, il y meurt le 15 mars 1809, laissant quatre fils : Mathias (nÃ© en 1749) qui suit, Nicolas (nÃ© en 1753), Jacques (nÃ© 1757) et Jean (nÃ© en 1763)3.\r\n\r\nMathias Tettinger, lâ€™ainÃ© (1749-1809), cultivateur Ã  Momerstroff, Ã©pouse FranÃ§oise Gilles dont il a pour fils Michel Tettinger qui suit1.\r\n\r\nMichel Tettinger ou Taitinger1 (nÃ© en 1794), cultivateur et tisserand Ã  Momerstroff, Ã©pouse en 1823 Barbe Schmitt, nÃ©e Obervisse (1801-1854) dont il a quatre fils : Simon-Pierre (1824) qui suit, Pierre (1826), FranÃ§ois (1829) et Jean (1831)3.\r\n\r\nSimon-Pierre Taittinger (1824-1874), cultivateur, journalier et briquetier, Ã©pouse Ã‰lisabeth Haudot (1824-1902), journaliÃ¨re et concierge4 dont il a trois filles et un fils Pierre-Alexandre qui suit3. Il opte pour la France devant le maire d\'Issy-les-Moulineaux le 19 septembre 1872.\r\n\r\nPierre-Alexandre Taittinger, nÃ© en 1852 Ã  Silly-sur-Nied, dâ€™abord professeur puis ingÃ©nieur, quitte lâ€™enseignement et refuse de devenir allemand en 1872 et s\'installe Ã  Paris. Par son mariage avec Caroline Testut (1855-1953), la riche hÃ©ritiÃ¨re des machines Ã  peser du mÃªme nom, il fait entrer la famille Taittinger dans l\'histoire des grands industriels5,2.', '2017-11-23 10:29:37'),
(11, '2', '3', 'Clicquot Ponsardin', 'e 23 octobre 1805, Barbe Nicole Clicquot, nÃ©e Ponsardin, a 27 ans lors du dÃ©cÃ¨s de son mari, qui lui laisse une Maison de champagne crÃ©Ã©e 33 ans auparavant et produisant 100 000 bouteilles annuellement. SurnommÃ©e, Â« la grande dame de la Champagne Â», elle devient la premiÃ¨re femme Ã  diriger une Maison de champagne et une des premiÃ¨res femmes d\'affaires de l\'Ã©poque moderne. Ã€ sa mort en 1866, la Maison commercialise 750 000 bouteilles et expÃ©die sa production dans de nombreux pays.\r\n\r\nAcquise en 1986 par l\'entreprise Louis Vuitton, elle intÃ¨gre le groupe LVMH en 1987.', '2017-11-23 10:30:44'),
(12, '2', '3', 'Ruinart', 'Dom Ruinart, issu d\'une famille bourgeoise champenoise (ou noble selon les sources) pratiquant alors le nÃ©goce du drap, comprend vite les enjeux futurs de la production du champagne et de son commerce lors de ses voyages en Europe. Il remarque l\'enthousiasme grandissant que suscite le vin de Champagne dans les sphÃ¨res aristocratiques des Cours Royales. Il transmet son savoir et sa vision du commerce du champagne Ã  son neveu Nicolas Ruinart. Dom Ruinart devine dÃ©jÃ  la future notoriÃ©tÃ© du vin de Champagne et son succÃ¨s commercial.\r\n\r\nMais il faudra attendre l\'arrÃªtÃ© royal du 25 mai 1728 pour que le rÃªve puisse devenir rÃ©alitÃ©3. Par cet arrÃªtÃ©, le roi Louis XV autorise le transport du vin en bouteilles, alors qu\'avant cette date le vin ne pouvait voyager qu\'en fÃ»ts, chose impossible pour le vin de champagne. Fortement inspirÃ© par son oncle, l\'audacieux fils de Nicolas Ruinart, Claude, pose alors les fondements de la Maison de Champagne en commenÃ§ant par transfÃ©rer la Maison et les caves Ã  Reims, Ã  l\'emplacement actuel. Le 1er septembre 1729 est ouvert son premier livre de compte pour le vin par Au nom de Dieu et de la Sainte-Vierge soit commencÃ© le prÃ©sent livre.\r\n\r\nNÃ©gociant mais pas cultivateur. La maison ne possÃ¨de pas de vigne et achÃ¨te Ã  plus de soixante dix producteurs, une trentaine Ã  Reims et dans les villages du pourtour : Cormontreuil, Ecueil, Taissy, Brimont, Chamery, Hautvilelrs, Saint-Thierry par exemple.\r\n\r\nSes premiers envois de vins de Champagne seront destinÃ©s Ã  ses clients acheteurs de draps, ce que l\'on pourrait aujourd\'hui considÃ©rer comme des cadeaux d\'affaires. Comme son oncle vingt ans auparavant, il s\'aperÃ§oit rapidement que le marchÃ© du vin serait bien plus fructueux que celui du drap. Dans les ports, sur les bateaux, les paniers de bouteilles de vin de Champagne remplacent trÃ¨s vite les balles et les rouleaux de tissus. Si bien qu\'en 1735, la vente de champagne devient l\'unique activitÃ© de la Maison Ruinart. Il a rapidement un dÃ©pÃ´t et un commis Ã  Lille qui reprÃ©sente 67% de ses ventes, puis vient Tournai avec 12% puis Cysoing, Sedan, Rethel, Cambrai, Charleville et aussi Paris, en 1737. Cette activitÃ© donne environ 70 000 Livres de bÃ©nÃ©fices par an.\r\n\r\nRuinart procÃ¨de Ã  sa premiÃ¨re exportation de Champagne rosÃ© en Allemagne le 14 mars 1764, comme en atteste le livre de comptes de la maison4.\r\n\r\nAujourd\'hui cette marque appartient au groupe LVMH.', '2017-11-23 10:31:12'),
(13, '4', '1', 'Heineken', 'Heineken International /ËˆÉ¦É›inÉ™kÉ™n/ est un groupe brassicole dâ€™origine nÃ©erlandaise fondÃ© en 1873 par Gerard Adriaan Heineken. Câ€™est, en 2015, le 2e brasseur au niveau mondial, avec une part de marchÃ© en volume de 9,1 %, derriÃ¨re Anheuser-Busch InBev (prÃ¨s de 30 % de parts de marchÃ© aprÃ¨s le rachat de SABMiller en 2015) et devant le danois Carlsberg (6,1 %)5.\r\n\r\nLe groupe est prÃ©sent Ã  l\'international, grÃ¢ce Ã  sa marque Heineken commercialisÃ©e dans plus de 170 pays. Heineken International produit ou commercialise environ 250 marques de biÃ¨res et cidres, dont Heineken, Amstel, Desperados, Sol ou Tiger.\r\n\r\nHeineken France se dispute la place de premier brasseur franÃ§ais avec Brasseries Kronenbourg. En 2014, Heineken a annoncÃ© dÃ©tenir 17,3 % des parts de marchÃ©s (en volume) en France, ce qui le place en tÃªte des ventes en 2013 6.\r\n\r\nEn France, ses marques phares sont Heineken, Pelforth, Desperados et Fischer.\r\n\r\nEn Belgique, ses marques phares sont Maes, Grimbergen, Mort Subite, Desperados ou encore Stassen.', '2017-11-23 10:31:54'),
(14, '4', '1', 'Leffe', 'Du nom de l\'Abbaye de Leffe situÃ©e sur la commune de Dinant en Belgique (Ã  ne pas confondre avec Neffe qui est sur l\'autre rive) dans la vallÃ©e de la Meuse, la biÃ¨re de Leffe fait partie de la variÃ©tÃ© des biÃ¨res d\'abbaye.\r\n\r\nCette biÃ¨re a Ã©tÃ© crÃ©Ã©e par les chanoines prÃ©montrÃ©s, installÃ©s Ã  Leffe depuis 1152, qui achÃ¨tent en 1240 au clerc Gossuin et en prÃ©sence des Ã©chevins de Dinant, divers biens dont une brasserie 1.\r\n\r\nAu Moyen Ã‚ge, dans lâ€™impossibilitÃ© de vÃ©rifier si lâ€™eau de source Ã©tait saine, les moines trouvaient dans la fabrication de biÃ¨re un moyen prÃ©cieux d\'Ã©chapper aux Ã©pidÃ©mies (grÃ¢ce au processus assainissant de la fermentation) et rapidement on transfÃ©ra le moulin et sa brasserie dans l\'enceinte mÃªme de l\'abbaye.\r\n\r\nÃ€ la suite de la destruction de la brasserie pendant la RÃ©volution franÃ§aise, la production de biÃ¨re s\'arrÃªta. En 1952, le brasseur Lootvoet obtint les droits de licence pour produire la biÃ¨re de Leffe. En 1955, cette brasserie a Ã©tÃ© rachetÃ©e par les brasseries Stella Artois. En 1975, elle ferma et toute la production fut transfÃ©rÃ©e Ã  la Brasserie Grade de Mont Saint Guibert (plus tard, nommÃ©e brasserie Saint Guibert).\r\n\r\nEn 1975, la production s\'Ã©levait Ã  18 000 hl par an ; quand Saint Guibert ferma le 30 juin 1996, la production s\'Ã©levait alors Ã  plus de 300 000 hl et partit Ã  Louvain.\r\n\r\nElle fait maintenant partie du groupe AB InBev et elle est toujours brassÃ©e en Belgique Ã  Louvain (brasserie Artois). Quant aux fondateurs, les chanoines prÃ©montrÃ©s, ils sont toujours prÃ©sents dans l\'Abbaye de Leffe, dans six abbayes en Belgique et deux en France.', '2017-11-23 10:32:14'),
(15, '4', '1', 'Pelforth', 'Vers 1921, Louis Boucquey, Armand Deflandre et Raoul Bonduel, trois brasseurs lillois, dÃ©cident de s\'associer pour surmonter les problÃ¨mes de pÃ©nurie (notamment de cuivre) et fondent la Â« brasserie du PÃ©lican Â», du nom d\'une danse trÃ¨s Ã  la mode Ã  ce moment-lÃ . La biÃ¨re est Ã  fermentation basse et se vend en bouteilles de 33 cl ainsi qu\'en fÃ»ts.\r\n\r\nEn 1937, Jean Deflandre, fils d\'Armand, parvient Ã  assembler deux malts d\'orge et utilise la fermentation haute, avec une levure anglaise, pour crÃ©er sa biÃ¨re. Il la nomme Â« Pelforth 43 Â», Â« Pel Â» pour Â« PÃ©lican Â», Â« forte Â» car elle contient beaucoup de malt, le tout anglicisÃ© avec un Â« h Â». Le Â« 43 Â» fait rÃ©fÃ©rence aux 43 kg d\'orge par hectolitre et au 43e rÃ©giment d\'infanterie de Lille. La bouteille subit Ã©galement un nouveau design.\r\n\r\nMÃªme si elle s\'arrÃªte pendant la Seconde Guerre mondiale, la production de la Pelforth n\'aura pas de mal Ã  repartir dÃ¨s 1950. Le Â« 43 Â» est abandonnÃ©, la Pelforth se vend en bouteilles de 25 cl, 33cl, ainsi qu\'en fÃ»ts de toutes tailles. En 1963 sort la Pelforth Pale qui deviendra en 1991 la Pelforth Blonde.\r\n\r\nEn 1972, la brasserie du PÃ©lican adopte le nom de brasserie Pelforth. Elle est rachetÃ©e par le groupe BGI en 1980, puis par la FranÃ§aise de Brasserie en 1986, elle-mÃªme englobÃ©e dans le groupe Heineken en 1988.\r\n\r\nLa limonade Pelforth, crÃ©Ã©e en 2001, est la seule boisson non alcoolisÃ©e de la marque mais ne remporte pas un grand succÃ¨s.\r\n\r\nActuellement la production est majoritairement issue de la brasserie du PÃ©lican de Mons-en-BarÅ“ul, la Pelforth Blonde est (ou a Ã©tÃ©) Ã©galement produite par les brasseries de l\'EspÃ©rance Ã  Schiltigheim et de la Valentine Ã  Marseille.', '2017-11-23 10:32:38'),
(16, '4', '1', '1664', 'Le nom Â« seize soixante-quatre Â» fait rÃ©fÃ©rence Ã  l\'annÃ©e de fondation de Kronenbourg, 1664. La premiÃ¨re biÃ¨re 1664, blonde, a Ã©tÃ© brassÃ©e en 19522, cette biÃ¨re spÃ©ciale a Ã©tÃ© crÃ©Ã© a l\'occasion du couronnement de la reine d\'Angleterre, c\'est ce qui explique son habillage \"royal\" qui lui vaudra un peu plus tard le surnom de \"col blanc\". Elle Ã©tait Ã  l\'origine appelÃ©e Kronenbourg 1664 et fut renommÃ©e simplement 1664 en 1988 pour le marchÃ© franÃ§ais ; Ã  l\'Ã©tranger, le nom de Kronenbourg 1664 est toujours (ou Ã  nouveau) utilisÃ©.\r\n\r\nAu cours d\'un dÃ©jeuner Ã  Bruxelles en prÃ©sence de FranÃ§ois Mitterrand, Jacques Chirac, Helmut Kohl et Tony Blair, FranÃ§ois Mitterrand demanda Ã  ses voisins quels Ã©taient, pour eux, les grands tournants de l\'histoire ? Jacques Chirac rÃ©pondit Â« 1664, Kronenbourg Â»3.\r\n\r\nUne production qui n\'est plus uniquement en Alsace[modifier | modifier le code]\r\nUne campagne de publicitÃ© avec le footballeur Ã‰ric Cantona vantant le produit4, a Ã©tÃ© interdite au Royaume-Uni en fÃ©vrier 2014 parce qu\'elle laissait croire, Ã  tort, que cette biÃ¨re Ã©tait brassÃ©e en Alsace. La mention Â« BrassÃ©e au Royaume-Uni Â» apparaissait mais en petites lettres.\r\n\r\nEn effet les biÃ¨res 1664 destinÃ©es au marchÃ© britannique ne sont pas produites par Kronenbourg Ã  la brasserie K2 d\'Obernai en Alsace mais par Heineken UK, qui dispose de la licence pour brasser cette biÃ¨re au Royaume-Uni. Heineken s\'est dÃ©fendu, sans succÃ¨s, en argumentant sur l\'histoire de la 1664 et l\'utilisation d\'une variÃ©tÃ© alsacienne de houblon, le Strisselspalt2.', '2017-11-23 10:33:04');

-- --------------------------------------------------------

--
-- Structure de la table `banni`
--

DROP TABLE IF EXISTS `banni`;
CREATE TABLE IF NOT EXISTS `banni` (
  `id_banni` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_banni`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'Alcools Forts'),
(2, 'Champagne'),
(3, 'Vins'),
(4, 'Bieres');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_article` bigint(20) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `id_article`, `auteur`, `contenu`, `date`) VALUES
(1, 16, 'Maxime', 'Bof je prÃ©fÃ¨re la Pelforth brune', '2017-11-23 10:36:02'),
(2, 16, 'Maxime', 'Bof je prÃ©fÃ¨re la Pelforth brune', '2017-11-23 10:36:07'),
(3, 15, 'Maxime', 'Ma biÃ¨re prÃ©fÃ¨rÃ©', '2017-11-23 10:38:38'),
(4, 15, 'Maxime', 'Ma biÃ¨re prÃ©fÃ¨rÃ©', '2017-11-23 10:38:47'),
(5, 14, 'Maxime', 'Elle est bien bonne', '2017-11-23 10:39:33'),
(6, 13, 'Maxime', 'Bien pour les soirÃ©es', '2017-11-23 10:40:18'),
(7, 12, 'Maxime', 'Comment tu as des goÃ»t de luxe!!', '2017-11-23 10:41:08'),
(8, 12, 'Maxime', 'Comment tu as des goÃ»t de luxe!!', '2017-11-23 10:41:12'),
(9, 11, 'Maxime', 'Comment tu as des goÃ»t de luxe!!', '2017-11-23 10:41:26'),
(10, 10, 'Maxime', 'Comment tu as des goÃ»t de luxe!!', '2017-11-23 10:41:36'),
(11, 7, 'Maxime', 'J\'ai plein de bouteille de rhum chez moi mais que de la gnÃ´le dedans', '2017-11-23 10:42:12'),
(12, 8, 'Maxime', 'La boisson que Kevin adore', '2017-11-23 10:42:30'),
(13, 6, 'Maxime', 'Un petit Lismore serveur', '2017-11-23 10:42:48'),
(14, 5, 'Maxime', 'Beurk de l\'anis', '2017-11-23 10:43:00'),
(15, 4, 'Maxime', 'Hum la ficelle dÃ©pend des cuvÃ©es', '2017-11-23 10:43:23'),
(16, 3, 'Maxime', 'Pas trop mauvais avec de la charcuterie', '2017-11-23 10:43:45'),
(17, 2, 'Maxime', 'Mon blanc favoris et encore mieux du vendange tardive', '2017-11-23 10:44:07'),
(18, 1, 'Maxime', 'En blanc ou en rouge jamais dÃ©Ã§u', '2017-11-23 10:44:23');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_client` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

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
