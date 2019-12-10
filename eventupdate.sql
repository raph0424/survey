-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 déc. 2019 à 15:51
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eventupdate`
--

-- --------------------------------------------------------

--
-- Structure de la table `attribut`
--

DROP TABLE IF EXISTS `attribut`;
CREATE TABLE IF NOT EXISTS `attribut` (
  `idattribut` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `valeur` varchar(50) NOT NULL,
  `id_telephone` int(11) NOT NULL,
  PRIMARY KEY (`idattribut`),
  KEY `Attribut_produit_FK` (`id_telephone`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `attribut`
--

INSERT INTO `attribut` (`idattribut`, `designation`, `valeur`, `id_telephone`) VALUES
(1, 'taille ecran', '6,1 pouces', 1),
(2, 'couleur', 'Noir', 1),
(3, 'taille ecran', '5.7 pouces', 2),
(4, 'couleur', 'Blanc', 2),
(5, 'NoteSUp1', 'Note sup1', 2);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL,
  `nbplaces` int(11) NOT NULL,
  `date_event` date NOT NULL,
  `horaires` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `categorie` enum('event 1','event 2','event 3','event 4','event 5') NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `id_lieu` int(11) NOT NULL,
  PRIMARY KEY (`id_event`),
  KEY `event_lieu_FK` (`id_lieu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_event`, `designation`, `tarif`, `nbplaces`, `date_event`, `horaires`, `description`, `categorie`, `valid`, `id_lieu`) VALUES
(1, 'Event Samsung S10', 15, 150, '2019-05-05', '20h - 23h', 'L\'event Samsung du 05 mai présentera pour la premi', 'event 1', 1, 1),
(2, 'Event Huawei P22', 10, 100, '2019-06-06', '21h - 23h', 'L\'event HUAWEI du 06 juin présentera pour la premi', 'event 2', 1, 2),
(5, 'Test', 15, 20, '2019-06-17', '08:00', 'TEST', 'event 3', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `inscrire`
--

DROP TABLE IF EXISTS `inscrire`;
CREATE TABLE IF NOT EXISTS `inscrire` (
  `id_event` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `date_inscription` date NOT NULL,
  `qualite` varchar(50) NOT NULL,
  PRIMARY KEY (`id_event`,`id_personne`),
  KEY `inscrire_personne0_FK` (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscrire`
--

INSERT INTO `inscrire` (`id_event`, `id_personne`, `date_inscription`, `qualite`) VALUES
(1, 1, '2019-10-24', 'influenceur'),
(1, 2, '2019-04-12', 'influenceur'),
(1, 4, '2019-06-14', 'influenceur'),
(2, 4, '2019-06-14', 'influenceur'),
(5, 1, '2019-06-17', 'influenceur');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

DROP TABLE IF EXISTS `lieu`;
CREATE TABLE IF NOT EXISTS `lieu` (
  `id_lieu` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` int(11) NOT NULL,
  PRIMARY KEY (`id_lieu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id_lieu`, `designation`, `adresse`, `code_postal`) VALUES
(1, 'Salle 1', '5 Boulevard Saint Honoré', 75008),
(2, 'Salle 2', '5 Rue de Hongrie', 43210);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `commentaire` varchar(500) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_telephone` int(11) NOT NULL,
  PRIMARY KEY (`id_note`),
  KEY `note_personne_FK` (`id_personne`),
  KEY `note_Attribut0_FK` (`id_telephone`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `auteur`, `score`, `commentaire`, `id_personne`, `id_telephone`) VALUES
(4, 'Julie', 5, 'Très bon Produit', 2, 1),
(12, 'RaphaÃ«l', 3, 'Pas Mal mais un peu encombran', 4, 2),
(13, 'RaphaÃ«l', 4, 'Très bon produit bien que un peu chère', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

DROP TABLE IF EXISTS `partenaire`;
CREATE TABLE IF NOT EXISTS `partenaire` (
  `id_partenaire` int(11) NOT NULL AUTO_INCREMENT,
  `accronyme` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `nom_marque` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `adresse` varchar(500) NOT NULL,
  PRIMARY KEY (`id_partenaire`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `partenaire`
--

INSERT INTO `partenaire` (`id_partenaire`, `accronyme`, `mdp`, `nom_marque`, `date_debut`, `adresse`) VALUES
(1, 'SSG', '123456', 'Samsung', '2019-02-12', '44 Avenue des Champs Elysee'),
(2, 'HW', '123456', 'Huawei', '2019-03-14', '5 rue des Lilas');

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

DROP TABLE IF EXISTS `participer`;
CREATE TABLE IF NOT EXISTS `participer` (
  `id_event` int(11) NOT NULL,
  `id_telephone` int(11) NOT NULL,
  PRIMARY KEY (`id_event`,`id_telephone`),
  KEY `participer_telephone_FK` (`id_telephone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `participer`
--

INSERT INTO `participer` (`id_event`, `id_telephone`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id_personne` int(11) NOT NULL AUTO_INCREMENT,
  `Acronyme` varchar(50) NOT NULL,
  `nom_marque` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `Acronyme`, `nom_marque`, `date_debut`, `nom`, `prenom`, `email`, `mdp`, `telephone`, `date_naissance`, `adresse`, `code_postal`, `role`) VALUES
(1, '', '', '0000-00-00', 'Admin', 'Orange', 'adminorange@orange.fr', '123456', 612345678, '1989-05-05', '5 rue du temple', 75006, 'ROLE_ADMIN'),
(2, '', '', '0000-00-00', 'Dupont', 'Julie', 'Dup.J22@gmail.com', '123456', 613432345, '1988-06-07', '6 Avenue Charle de gaulle', 75017, 'ROLE_personne'),
(3, '', '', '0000-00-00', 'lefe', 'kevin', 'a@a.com', '123', 123, '2019-06-26', 'qsdqd', 94100, 'ROLE_personne'),
(4, '', '', '0000-00-00', 'Maria', 'RaphaÃ«l', 'R@gmail.com', 'Solas', 687907844, '1997-05-24', '5 rue des chaufourniers', 75019, 'ROLE_personne'),
(5, 'SSG', 'Samsung', '2019-02-12', '', '', '', '123456', 0, '0000-00-00', '44 Avenue des Champs-Elysee', 0, 'ROLE_PARTENAIRE'),
(6, 'HW', 'Huawei', '2019-03-14', '', '', '', '123456', 0, '0000-00-00', '5 rue des Lilas', 0, 'ROLE_PARTENAIRE');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_telephone` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `Prix` float NOT NULL,
  `poids` float NOT NULL,
  `taille` float NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `date_sortie` date NOT NULL,
  `img` varchar(50) NOT NULL,
  `id_partenaire` int(11) NOT NULL,
  PRIMARY KEY (`id_telephone`),
  KEY `produit_partenaire_FK` (`id_partenaire`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_telephone`, `designation`, `Prix`, `poids`, `taille`, `couleur`, `date_sortie`, `img`, `id_partenaire`) VALUES
(1, 'S10', 500, 0, 0, '', '2019-05-06', '/img/Produit/S10.jpg', 1),
(2, 'P22', 600, 0, 0, '', '2019-06-07', '/img/Produit/P22.jpg', 2),
(9, 'Galaxy note', 500, 10, 10, 'Noir', '2019-06-18', '/img/Produit/Galaxy note.jpg', 1),
(10, 'Galaxy note 2', 400, 10, 10, 'bleu', '2019-10-29', '/img/Produit/Galaxy note 2.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `promos`
--

DROP TABLE IF EXISTS `promos`;
CREATE TABLE IF NOT EXISTS `promos` (
  `idpromo` int(11) NOT NULL AUTO_INCREMENT,
  `valeur` int(11) NOT NULL,
  `id_telephone` int(11) NOT NULL,
  PRIMARY KEY (`idpromo`),
  KEY `Attribut_produit_FK` (`id_telephone`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `promos`
--

INSERT INTO `promos` (`idpromo`, `valeur`, `id_telephone`) VALUES
(13, 50, 9),
(14, 50, 2),
(17, 75, 10),
(18, 50, 1),
(19, 25, 11),
(20, 25, 11);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_event`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `select_event`;
CREATE TABLE IF NOT EXISTS `select_event` (
`id_event` int(11)
,`designation` varchar(50)
,`tarif` int(11)
,`nbplaces` int(11)
,`date_event` date
,`horaires` varchar(50)
,`description` varchar(50)
,`categorie` enum('event 1','event 2','event 3','event 4','event 5')
,`valid` tinyint(1)
,`id_lieu` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_lieu`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `select_lieu`;
CREATE TABLE IF NOT EXISTS `select_lieu` (
`id_lieu` int(11)
,`designation` varchar(50)
,`adresse` varchar(50)
,`code_postal` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_nb_produit1`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `select_nb_produit1`;
CREATE TABLE IF NOT EXISTS `select_nb_produit1` (
`COUNT(*)` bigint(21)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_nb_produit2`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `select_nb_produit2`;
CREATE TABLE IF NOT EXISTS `select_nb_produit2` (
`COUNT(*)` bigint(21)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_nb_produit3`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `select_nb_produit3`;
CREATE TABLE IF NOT EXISTS `select_nb_produit3` (
`COUNT(*)` bigint(21)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_note`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `select_note`;
CREATE TABLE IF NOT EXISTS `select_note` (
`id_note` int(11)
,`auteur` varchar(50)
,`score` int(11)
,`commentaire` varchar(500)
,`id_personne` int(11)
,`id_telephone` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_partenaire`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `select_partenaire`;
CREATE TABLE IF NOT EXISTS `select_partenaire` (
`id_partenaire` int(11)
,`accronyme` varchar(50)
,`mdp` varchar(50)
,`nom_marque` varchar(50)
,`date_debut` date
,`adresse` varchar(500)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_produit`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `select_produit`;
CREATE TABLE IF NOT EXISTS `select_produit` (
`id_telephone` int(11)
,`designation` varchar(50)
,`Prix` float
,`poids` float
,`taille` float
,`couleur` varchar(50)
,`date_sortie` date
,`img` varchar(50)
,`id_partenaire` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_promos`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `select_promos`;
CREATE TABLE IF NOT EXISTS `select_promos` (
`idpromo` int(11)
,`valeur` int(11)
,`id_telephone` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_ticket`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `select_ticket`;
CREATE TABLE IF NOT EXISTS `select_ticket` (
`id_ticket` int(11)
,`auteur` varchar(50)
,`email` varchar(50)
,`objet` varchar(50)
,`date` date
,`contenu` varchar(50)
,`id_personne` int(11)
,`id_partenaire` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `soumettre`
--

DROP TABLE IF EXISTS `soumettre`;
CREATE TABLE IF NOT EXISTS `soumettre` (
  `id_partenaire` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `date_demande` date NOT NULL,
  `date_validation` date NOT NULL,
  `decision` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_partenaire`,`id_personne`,`id_event`),
  KEY `soumettre_personne_FK` (`id_personne`),
  KEY `soumettre_event_FK` (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `soumettre`
--

INSERT INTO `soumettre` (`id_partenaire`, `id_personne`, `id_event`, `date_demande`, `date_validation`, `decision`) VALUES
(1, 1, 1, '2019-04-11', '2019-04-12', 1),
(2, 1, 2, '2019-04-10', '2019-04-12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `objet` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `contenu` varchar(50) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_partenaire` int(11) NOT NULL,
  PRIMARY KEY (`id_ticket`),
  KEY `ticket_personne_FK` (`id_personne`),
  KEY `ticket_partenaire0_FK` (`id_partenaire`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `auteur`, `email`, `objet`, `date`, `contenu`, `id_personne`, `id_partenaire`) VALUES
(16, 'Julie', '', 'Soucis', '2019-06-13', 'Bonjour j\'ai un problÃ¨me avec mon S10', 2, 1),
(17, 'Julie', '', 'ecran', '2019-06-07', 'bonsoir , mon Ã©cran est cassÃ© que faire !', 2, 1),
(18, 'kevin', '', 'Gros soucis', '2019-06-21', 'Mon tÃ©lÃ©phone ne s\'allume pas !', 3, 1),
(19, 'Julie', 'Dup.J22@gmail.com', 'Batterie', '2019-06-13', 'J\'ai un problÃ¨me avec ma batterie ! Help me.', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_personne` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_personne`, `nom`, `prenom`, `email`, `mdp`, `telephone`, `date_naissance`, `adresse`, `code_postal`, `role`) VALUES
(1, 'Admin', 'Orange', 'adminorange@orange.fr', '123456', 612345678, '1989-05-05', '5 rue du temple', 75006, 'ROLE_ADMIN'),
(2, 'Dupont', 'Julie', 'Dup.J22@gmail.com', '123456', 613432345, '1988-06-07', '6 Avenue Charle de gaulle', 75017, 'ROLE_USER'),
(3, 'lefe', 'kevin', 'a@a.com', '123', 123, '2019-06-26', 'qsdqd', 94100, 'ROLE_USER'),
(4, 'Maria', 'RaphaÃ«l', 'R@gmail.com', 'Solas', 687907844, '1997-05-24', '5 rue des chaufourniers', 75019, 'ROLE_USER');

-- --------------------------------------------------------

--
-- Structure de la vue `select_event`
--
DROP TABLE IF EXISTS `select_event`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_event`  AS  (select `event`.`id_event` AS `id_event`,`event`.`designation` AS `designation`,`event`.`tarif` AS `tarif`,`event`.`nbplaces` AS `nbplaces`,`event`.`date_event` AS `date_event`,`event`.`horaires` AS `horaires`,`event`.`description` AS `description`,`event`.`categorie` AS `categorie`,`event`.`valid` AS `valid`,`event`.`id_lieu` AS `id_lieu` from `event`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `select_lieu`
--
DROP TABLE IF EXISTS `select_lieu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_lieu`  AS  (select `lieu`.`id_lieu` AS `id_lieu`,`lieu`.`designation` AS `designation`,`lieu`.`adresse` AS `adresse`,`lieu`.`code_postal` AS `code_postal` from `lieu`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `select_nb_produit1`
--
DROP TABLE IF EXISTS `select_nb_produit1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_nb_produit1`  AS  (select count(0) AS `COUNT(*)` from `produit` where (`produit`.`id_partenaire` = 1)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `select_nb_produit2`
--
DROP TABLE IF EXISTS `select_nb_produit2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_nb_produit2`  AS  (select count(0) AS `COUNT(*)` from `produit` where (`produit`.`id_partenaire` = 2)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `select_nb_produit3`
--
DROP TABLE IF EXISTS `select_nb_produit3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_nb_produit3`  AS  (select count(0) AS `COUNT(*)` from `produit` where (`produit`.`id_partenaire` = 3)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `select_note`
--
DROP TABLE IF EXISTS `select_note`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_note`  AS  (select `note`.`id_note` AS `id_note`,`note`.`auteur` AS `auteur`,`note`.`score` AS `score`,`note`.`commentaire` AS `commentaire`,`note`.`id_personne` AS `id_personne`,`note`.`id_telephone` AS `id_telephone` from `note`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `select_partenaire`
--
DROP TABLE IF EXISTS `select_partenaire`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_partenaire`  AS  (select `partenaire`.`id_partenaire` AS `id_partenaire`,`partenaire`.`accronyme` AS `accronyme`,`partenaire`.`mdp` AS `mdp`,`partenaire`.`nom_marque` AS `nom_marque`,`partenaire`.`date_debut` AS `date_debut`,`partenaire`.`adresse` AS `adresse` from `partenaire`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `select_produit`
--
DROP TABLE IF EXISTS `select_produit`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_produit`  AS  (select `produit`.`id_telephone` AS `id_telephone`,`produit`.`designation` AS `designation`,`produit`.`Prix` AS `Prix`,`produit`.`poids` AS `poids`,`produit`.`taille` AS `taille`,`produit`.`couleur` AS `couleur`,`produit`.`date_sortie` AS `date_sortie`,`produit`.`img` AS `img`,`produit`.`id_partenaire` AS `id_partenaire` from `produit`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `select_promos`
--
DROP TABLE IF EXISTS `select_promos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_promos`  AS  (select `promos`.`idpromo` AS `idpromo`,`promos`.`valeur` AS `valeur`,`promos`.`id_telephone` AS `id_telephone` from `promos`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `select_ticket`
--
DROP TABLE IF EXISTS `select_ticket`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_ticket`  AS  (select `ticket`.`id_ticket` AS `id_ticket`,`ticket`.`auteur` AS `auteur`,`ticket`.`email` AS `email`,`ticket`.`objet` AS `objet`,`ticket`.`date` AS `date`,`ticket`.`contenu` AS `contenu`,`ticket`.`id_personne` AS `id_personne`,`ticket`.`id_partenaire` AS `id_partenaire` from `ticket`) ;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `attribut`
--
ALTER TABLE `attribut`
  ADD CONSTRAINT `Attribut_produit_FK` FOREIGN KEY (`id_telephone`) REFERENCES `produit` (`id_telephone`);

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_lieu_FK` FOREIGN KEY (`id_lieu`) REFERENCES `lieu` (`id_lieu`);

--
-- Contraintes pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD CONSTRAINT `inscrire_event_FK` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`),
  ADD CONSTRAINT `inscrire_personne0_FK` FOREIGN KEY (`id_personne`) REFERENCES `user` (`id_personne`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_Attribut0_FK` FOREIGN KEY (`id_telephone`) REFERENCES `attribut` (`idattribut`),
  ADD CONSTRAINT `note_personne_FK` FOREIGN KEY (`id_personne`) REFERENCES `user` (`id_personne`);

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `participer_event_FK` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`),
  ADD CONSTRAINT `participer_telephone_FK` FOREIGN KEY (`id_telephone`) REFERENCES `produit` (`id_telephone`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_partenaire_FK` FOREIGN KEY (`id_partenaire`) REFERENCES `partenaire` (`id_partenaire`);

--
-- Contraintes pour la table `soumettre`
--
ALTER TABLE `soumettre`
  ADD CONSTRAINT `soumettre_event_FK` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`),
  ADD CONSTRAINT `soumettre_partenaire_FK` FOREIGN KEY (`id_partenaire`) REFERENCES `partenaire` (`id_partenaire`),
  ADD CONSTRAINT `soumettre_personne_FK` FOREIGN KEY (`id_personne`) REFERENCES `user` (`id_personne`);

--
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_partenaire0_FK` FOREIGN KEY (`id_partenaire`) REFERENCES `partenaire` (`id_partenaire`),
  ADD CONSTRAINT `ticket_personne_FK` FOREIGN KEY (`id_personne`) REFERENCES `user` (`id_personne`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
