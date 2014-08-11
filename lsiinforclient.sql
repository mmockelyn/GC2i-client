-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Client :  mysql51-66.pro
-- Généré le :  Lun 11 Août 2014 à 13:49
-- Version du serveur :  5.1.73-1.1+squeeze+build0+1-log
-- Version de PHP :  5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `lsiinforclient`
--

-- --------------------------------------------------------

--
-- Structure de la table `article_souffleur`
--

CREATE TABLE IF NOT EXISTS `article_souffleur` (
  `idarticle` int(13) NOT NULL AUTO_INCREMENT,
  `date_event` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `desc_court` varchar(255) NOT NULL,
  `desc_long` longtext NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `mise_scene` varchar(255) NOT NULL,
  `artiste` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `etat_article` int(1) NOT NULL,
  `categorie` int(11) NOT NULL,
  PRIMARY KEY (`idarticle`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `article_souffleur`
--

INSERT INTO `article_souffleur` (`idarticle`, `date_event`, `titre`, `lieu`, `heure`, `desc_court`, `desc_long`, `auteur`, `mise_scene`, `artiste`, `images`, `etat_article`, `categorie`) VALUES
(1, '07/08/2014', 'Rimo (chanson française)', 'Quai de la Chaume', '21H30', 'Rimo, c’est avant tout un guitariste qui chante avec engouement et une pointe de dérision.', 'Accompagné de Nathan Dallerac, &agrave; la batterie, et Stéphane Rousseau, &agrave; la contrebasse, Rimo nous offre de la po&eacute;sie sur un rythme folk/rock. C’est avec sa voix chaleureuse que notre chanteur nous  entraine dans ses ballades  : le concert a alors un go&ucirc;t de fables contemporaines sous le soleil d’un mois d’ao&ucirc;t. Remarqué lors du concours international de la M&eacute;daille d’or de la chanson en Suisse o&ugrave; il reçu le troisi&egrave;me prix, Rimo a d&eacute;j&agrave; parcouru de nombreuses sc&egrave;nes, telles que celle du Printemps de Bourges, du Limonaire (Paris), du Train Th&eacute;&agrave;tre en compagnie d’Aldebert, du festival Au Champ (Chanteix) en première partie de Christophe Al&eacute;v&ecirc;que.', '', '', '', 'http://www.lesouffleurdarundel.fr/images/_programme/203.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `groupe` int(1) NOT NULL,
  `login` text NOT NULL,
  `pass_md5` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse1` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`iduser`, `idclient`, `groupe`, `login`, `pass_md5`, `nom`, `prenom`, `adresse1`, `adresse2`, `cp`, `ville`, `tel`, `fax`, `port`, `email`, `images`) VALUES
(1, 11, 2, 'syltheron', '21232f297a57a5a743894a0e4a801fc3', 'Mockelyn', 'Maxime', '3 Rue du Grand Coin', '', '85100', 'LES SABLES D OLONNE', '02 51 95 25 95', '', '06 33 13 43 30', 'mmockelyn@gmail.com', 'minion'),
(3, 8, 0, 'heiligenstein', '4d396349afd13645dee3e5e558c5e746', 'HEILIGENSTEIN', 'Pascal', '1 Allée de la Noé', '', '85150', 'Vaire', '02 51 33 78 47', '', '06 33 71 93 10', 'contact@laforterie.fr', 'espace-client\n'),
(4, 4, 0, 'mesni', '7e8a14478e478e72cab5f43b45b91ff9', 'MESNI', 'Patrick', '2 Rue de la Gauchère', '34 Résidence Mirville', '85100', 'LES SABLES D OLONNE', '06 79 24 33 16', '', '', '', 'espace-client'),
(5, 7, 0, 'daulny', '37d974790d78fc7a42301f9b8561fd5f', 'DAULNY', 'Christian', '2 rue des Glycinnes', '', '85340', 'OLONNE SUR MER', '06 33 09 59 07', '', '', '', 'espace-client'),
(6, 3, 0, 'weiss', 'd5574721179c49d58700cea82ef1ad78', 'WEISS', 'Celine', '', '', '85150', 'Saint Julien des Landes', '', '', '', '', 'espace-client'),
(7, 9, 0, 'rochus', '1514c5b99a25fdca7c1849accd01fa65', 'ROCHUS', 'Alain', '3 Rue de la Prairie', '', '85430', 'Nieul le Dolent', '06 82 92 53 36', '', '', 'alain.rochus@gmail.com', 'espace-client'),
(8, 10, 0, 'riviere', '88217e2f96c7492fd0699b3ea02a752f', 'RIVIERE', 'Hubert', '6 Rue Léon David', '', '85100', 'LES SABLES D OLONNE', '06 84 95 76 95', '', '', 'trebuh85@yahoo.fr', 'espace-client'),
(9, 12, 0, 'guichoux', '1c2373428583ac09038392ca93baee63', 'GUICHOUX', 'Dominique', '71 rue Ermest Andrieux', '', '85340', 'OLONNE SUR MER', '06 83 25 58 67', '', '', '', 'espace-client\n'),
(10, 13, 0, 'jousse', 'be446c70623753aa703bc505409792c2', 'JOUSSE', 'Ludovic', '29 Rue des Burrons', '', '85100', 'LES SABLES D OLONNE', '02 44 41 62 86', '', '06 75 99 25 02\n', '', 'espace-client'),
(11, 14, 0, 'margat', '6f21341c2a3d8d754e73cc9fc82b13f2', 'MARGAT', 'Jean', '4 Allée des Coulemelles', '', '85340', 'OLONNE SUR MER', '02 51 95 42 72', '', '', 'jean.margat@orange.fr', 'espace-client'),
(12, 15, 0, 'guyot', 'e3c2e01a0038faa13ad43c21bb7cadcf', 'GUYOT', 'Carole', '17 rue des Burrons', '', '85100', 'LES SABLES D OLONNE', '06 83 20 07 90', '', '', '', 'espace-client\n'),
(13, 22, 0, 'denis', 'c3875d07f44c422f3b3bc019c23e16ae', 'DENIS', '', '8 Impasse Nicolas Poussin', '', '85180', 'CHATEAU D OLONNE', '02 51 95 67 25', '', '', '', 'espace-client'),
(14, 17, 0, 'parent', 'd0e45878043844ffc41aac437e86b602', 'PARENT', 'Youna', '88 Avenue Charles de Gaulle', '', '85100', 'LES SABLES D OLONNE', '06 30 42 47 62', '', '', 'youna.parent@orange.Fr', 'espace-client'),
(15, 18, 0, 'launay', '1e390749f3fd3bf187e04f95b1155a00', 'LAUNAY', 'Jenny', '11 rue des Joncquilles', '', '85340', 'OLONNE SUR MER', '06 68 95 72 19', '', '', 'jenny.amouraben@orange.fr', 'espace-client'),
(16, 19, 0, 'sourice', 'd1121a47110f8c8e112b04deef76912e', 'SOURICE', 'Huguette', '3 rue des Merciers', '', '85100', 'LES SABLES D OLONNE', '06 11 48 99 25', '', '', 'huguette.sourice@orange.fr', 'espace-client'),
(17, 20, 0, 'heinczel', '0f3d142b6ea487576b321c73afc40db4', 'HEINCZEL', 'Mathieu', '10 Avenue des Sables', '', '85150', 'ST MATHURIN', '06 46 23 52 25', '', '', 'mathieuheinc@gmail.com', 'espace-client'),
(18, 21, 0, 'chauvet', 'e931bbb2fc546fb60856d95eab1ca037', 'CHAUVET', 'Stephane', '17 rue Joseph Pelletier', '', '85180', 'CHATEAU D OLONNE', '06 09 81 37 84', '', '', 'stephane.chauvet@orange.fr', 'espace-client'),
(19, 23, 0, 'rivalin', 'b52c5637d489be44ac3d99bdef284b2e', 'RIVALIN', 'Phillipe', '16 rue des Taillis', '', '85340', 'OLONNE SUR MER', '06 71 91 55 73', '', '', 'rivalinphillipe@gmail.com', 'espace-client'),
(20, 24, 0, 'ankilbeau', 'f7078365ac1754eae9314b65a2761558', 'ANKILBEAU', 'Nicolas', '4 Avenue Colbert', '', '85340', 'OLONNE SUR MER', '06 41 89 95 43', '', '', 'n.ankilbeau@gmail.com', 'espace-client'),
(21, 25, 0, 'heriteau', '4ad3c1b56d3943181db6d13d43e087e5', 'HERITEAU', '', '17 Boulevard Kennedy', '', '85100', 'LES SABLES D OLONNE', '06 81 66 75 38', '', '', '', 'espace-client'),
(22, 27, 0, 'vallee', 'c735e0e3a2f48d1c7593c578ed5a0206', 'VALLEE', 'Pascaline', '14bis Rue des Palutiers', '', '85340', 'OLONNE SUR MER', '07 70 20 42 92', '', '', 'pascaline.vallee@gmail.com', 'espace-client'),
(23, 60, 0, 'marty', 'bb3761a33402b4f82806178e79ec5261', 'MARTY', 'Raymond', '28 Rue de l''aiguillon', '', '85100', 'LES SABLES D OLONNE', '02 51 32 05 90', '', '', 'martyra@wanadoo.fr ', 'espace-client'),
(24, 63, 0, 'brachet', 'd2969ef3eeac36c438a0cbdc34c788cf', 'BRACHET', 'Lucette', '26 Rue de la Justice', '', '85100', 'LES SABLES D OLONNE', '06 81 56 03 19', '', '', '', 'espace-client'),
(25, 66, 0, 'leloutre', 'be7e2b5273a86711c0ff22c375f74b26', 'LELOUTRE', 'Henry', '51 Rue Nicot', '', '85100', 'LES SABLES D OLONNE', '02 51 23 65 46', '', '06 15 76 63 50', 'henry.leloutre@orange.fr', 'espace-client'),
(26, 29, 0, 'chopin', '98f740d68822f4209674ca9f23c20abe', 'CHOPIN', 'Cecile', '1 Rue de la Maisonnette', '', '85100', 'LES SABLES D OLONNE', '06 09 83 29 55', '', '', 'chopin.cecile@sfr.fr', 'espace-client'),
(27, 30, 0, 'jadaud', '6b9d19e736463b8e59a5ac49502fdd75', 'JADAUD', 'Jacques', '4 Place du Général Colineau', '', '85100', 'LES SABLES D OLONNE', '06 64 51 51 85', '', '', 'jacques.jadaud@gmail.com', 'espace-client'),
(28, 31, 0, 'vendeevolant', 'ec5ac50f31a592e5534d694b9ed3d0ea', 'VENDEE', 'VOLANT', '16 Rue de la Bauduère', '', '85100', 'LES SABLES D OLONNE', '02 51 32 03 07', '', '06 08 23 32 81', 'vendeevolant@gmail.com ', 'espace-client'),
(29, 32, 0, 'marchandeau', '97727d70d4a1ba476fab9df15105ee2e', 'MARCHANDEAU', 'Jean-Claude', '23 Rue du Maréchal Joffre', '', '85340', 'OLONNE SUR MER', '02 51 90 76 45', '', '', 'jeanclaude.marchandeau@orange.fr ', 'espace-client'),
(30, 33, 0, 'touze', '906120b906565775c0525dbfb8eac467', 'TOUZE', 'Yannick', '25 bis rue Alfred Kestler', '', '85180', 'CHATEAU D OLONNE', '06 08 61 77 55', '', '', '', 'espace-client'),
(31, 34, 0, 'sommet', '05b53f75118d779271cc055c6ee1d9a5', 'SOMMET', 'Corentin', '43 rue des Doris', '', '85100', 'LES SABLES D OLONNE', '06 26 69 56 59', '', '', 'somme.corentin@gmail.com ', 'espace-client'),
(32, 35, 0, 'perrin', 'affcab31194d3e6d0a11e43210fd610e', 'PERRIN', 'Daniele', '129 rue Printanière', '', '85100', 'LES SABLES D OLONNE', '06 42 24 96 72', '', '', 'daniele.perrin@gmx.fr ', 'espace-client'),
(33, 36, 0, 'moreau', 'e14d017b0aacb4436f1aa8af01af69bf', 'MOREAU', 'Lucile', '434 Allée des Mustangs', '', '85150', 'STE FOY', '06 75 30 82 61', '', '', '', 'espace-client'),
(34, 37, 0, 'bellanger', 'ca55f37a752469044050e14b46c743e1', 'BELLANGER', 'Suzanne', '2 rue des Alyzees', '', '85340', 'OLONNE SUR MER', '02 51 04 38 73', '', '', '', 'espace-client'),
(35, 38, 0, 'soyer', 'edeb9289906ab910b457adf733fa75e1', 'SOYER', 'Thierry', '21bis rue des Sables', '', '85340', 'OLONNE SUR MER', '06 78 58 20 86', '', '', 'thierry-soyer@live.fr', 'espace-client'),
(36, 40, 0, 'valot', 'ff0f40a73bd7bc1a55bab6f5dd9df062', 'VALOT', 'Yann', '8 rue des pres de l''atelais', '', '85180', 'CHATEAU D OLONNE', '06 30 07 26 07', '', '', 'yann.valot@wanadoo.fr', 'espace-client'),
(37, 41, 0, 'clos', '0f14082c2ce55b9475a1a6714ce517d7', 'CLOS', 'Yannick', '68bis Rue Saint Armel', '', '85100', 'LES SABLES D OLONNE', '06 50 29 61 40', '', '', 'yannickclos@free.fr ', 'espace-client'),
(38, 42, 0, 'cantin', '63dda7e10e1a991073b72da6d4773fb4', 'CANTIN', '', '22 résidence des nouettes', '', '85180', 'CHATEAU D OLONNE', '02 51 32 82 13', '', '', '', 'espace-client'),
(39, 43, 0, 'lenfant', 'a1ff5e08360171e3d37b55de6cdbcf89', 'LENFANT', 'Anne', '83 Avenue de Bretagne', '', '85100', 'LES SABLES D OLONNE', '06 59 50 91 09', '', '', 'nanounette16@hotmail.com', 'espace-client'),
(40, 44, 0, 'binesti', '6cbabac64c19aa7ede114f2a8622b50a', 'BINESTI', 'Daniel', '6 rue des turquoises', '', '85340', 'OLONNE SUR MER', '06 60 69 67 21', '', '', 'bdan85100@gmail.com ', 'espace-client'),
(41, 45, 0, 'rapiteau', 'f85bf70521a49d22a3cc4b8c1dcec403', 'RAPITEAU', 'Joelle', '25T Avenue de Bretagne', '', '85100', 'LES SABLES D OLONNE', '06 23 44 92 02', '', '', 'joelle.rapiteau@wanadoo.fr ', 'espace-client'),
(42, 46, 0, 'fradet', '070fa18c9100421e300e1995a4e10fd9', 'FRADET', 'Jean Hubert', '24 Quai Guiné', '', '85100', 'LES SABLES D OLONNE', '06 73 52 81 35', '', '', 'jh-85@hotmail.fr', 'espace-client'),
(43, 47, 0, 'trebern', '3eef215c9fa9f39ea4e1fb866705d553', 'TREBERN', 'jacques', '61 rue Pépin', '', '85100', 'LES SABLES D OLONNE', '06 70 66 87 27', '', '', 'jacques.trebern@gmail.com ', 'espace-client'),
(44, 48, 0, 'graton', 'f96fa115fbf9d474612e63e0bbc33e88', 'GRATON', 'Xavier', '56 Boulevard Castelneau', '', '85100', 'LES SABLES D OLONNE', '06 85 54 79 26', '', '', 'xav.graton@orange.fr', 'espace-client'),
(45, 0, 0, 'mathez', '81cd0edcb77f9a8ca8e88262b31aae0d', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `idnews` int(13) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`idnews`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`idnews`, `title`, `date`, `description`) VALUES
(1, 'Bienvenue sur le Portail client de LSI Informatique', '12/03/2014 à 18:11', 'Bienvenue sur le portail client de LSI Informatique.<br>\r\nIci vous pourrez suivre l''avancement des interventions et contrats en cours pour votre matériel informatique.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
