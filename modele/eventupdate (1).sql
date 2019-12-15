-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Décembre 2019 à 16:56
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `attribut` (
  `idattribut` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `valeur` varchar(50) NOT NULL,
  `id_telephone` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL,
  `nbplaces` int(11) NOT NULL,
  `date_event` date NOT NULL,
  `horaires` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `categorie` enum('event 1','event 2','event 3','event 4','event 5') NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `id_lieu` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscrire`
--

CREATE TABLE IF NOT EXISTS `inscrire` (
  `id_event` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `date_inscription` date NOT NULL,
  `qualite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE IF NOT EXISTS `lieu` (
  `id_lieu` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `lieu`
--

INSERT INTO `lieu` (`id_lieu`, `designation`, `adresse`, `code_postal`) VALUES
(1, 'Salle 1', '5 Boulevard Saint Honoré', 75008),
(2, 'Salle 2', '5 Rue de Hongrie', 43210);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id_note` int(11) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `commentaire` varchar(500) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_telephone` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE IF NOT EXISTS `partenaire` (
  `id_partenaire` int(11) NOT NULL,
  `accronyme` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `nom_marque` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `adresse` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `partenaire`
--

INSERT INTO `partenaire` (`id_partenaire`, `accronyme`, `mdp`, `nom_marque`, `date_debut`, `adresse`) VALUES
(5, 'SSG', '123456', 'Samsung', '2019-02-12', '44 Avenue des Champs Elysee'),
(6, 'HW', '123456', 'Huawei', '2019-03-14', '5 rue des Lilas');

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE IF NOT EXISTS `participer` (
  `id_event` int(11) NOT NULL,
  `id_telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `id_personne` int(11) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `mdp`, `adresse`) VALUES
(1, '123456', '5 rue du temple'),
(2, '123456', '6 Avenue Charle de gaulle'),
(3, '123', 'qsdqd'),
(4, 'Solas', '5 rue des chaufourniers'),
(5, '123456', '44 Avenue des Champs-Elysee'),
(6, '123456', '5 rue des Lilas'),
(21, 'test', 'Tests');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_telephone` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `Prix` float NOT NULL,
  `poids` float NOT NULL,
  `taille` float NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `date_sortie` date NOT NULL,
  `img` varchar(50) NOT NULL,
  `id_partenaire` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `promos`
--

CREATE TABLE IF NOT EXISTS `promos` (
  `idpromo` int(11) NOT NULL,
  `valeur` int(11) NOT NULL,
  `id_telephone` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_event`
--
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
--
CREATE TABLE IF NOT EXISTS `select_lieu` (
`id_lieu` int(11)
,`designation` varchar(50)
,`adresse` varchar(50)
,`code_postal` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_nb_produit1`
--
CREATE TABLE IF NOT EXISTS `select_nb_produit1` (
`COUNT(*)` bigint(21)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_nb_produit2`
--
CREATE TABLE IF NOT EXISTS `select_nb_produit2` (
`COUNT(*)` bigint(21)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_nb_produit3`
--
CREATE TABLE IF NOT EXISTS `select_nb_produit3` (
`COUNT(*)` bigint(21)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_note`
--
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
--
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
--
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
--
CREATE TABLE IF NOT EXISTS `select_promos` (
`idpromo` int(11)
,`valeur` int(11)
,`id_telephone` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `select_ticket`
--
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

CREATE TABLE IF NOT EXISTS `soumettre` (
  `id_partenaire` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `date_demande` date NOT NULL,
  `date_validation` date NOT NULL,
  `decision` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id_ticket` int(11) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `objet` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `contenu` varchar(50) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_partenaire` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_personne` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_personne`, `nom`, `prenom`, `email`, `mdp`, `telephone`, `date_naissance`, `adresse`, `code_postal`, `role`) VALUES
(1, 'Admin', 'Orange', 'adminorange@orange.fr', '123456', 612345678, '1989-05-05', '5 rue du temple', 75006, 'ROLE_ADMIN'),
(2, 'Dupont', 'Julie', 'Dup.J22@gmail.com', '123456', 613432345, '1988-06-07', '6 Avenue Charle de gaulle', 75017, 'ROLE_USER'),
(3, 'lefe', 'kevin', 'a@a.com', '123', 123, '2019-06-26', 'qsdqd', 94100, 'ROLE_USER'),
(4, 'Maria', 'RaphaÃ«l', 'R@gmail.com', 'Solas', 687907844, '1997-05-24', '5 rue des chaufourniers', 75019, 'ROLE_USER'),
(21, 'testinsertid', 'test', 'test', 'test', 0, '1998-05-24', 'Tests', 0, 'ROLE_USER');

-- --------------------------------------------------------

--
-- Structure de la vue `select_event`
--
DROP TABLE IF EXISTS `select_event`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_event` AS (select `event`.`id_event` AS `id_event`,`event`.`designation` AS `designation`,`event`.`tarif` AS `tarif`,`event`.`nbplaces` AS `nbplaces`,`event`.`date_event` AS `date_event`,`event`.`horaires` AS `horaires`,`event`.`description` AS `description`,`event`.`categorie` AS `categorie`,`event`.`valid` AS `valid`,`event`.`id_lieu` AS `id_lieu` from `event`);

-- --------------------------------------------------------

--
-- Structure de la vue `select_lieu`
--
DROP TABLE IF EXISTS `select_lieu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_lieu` AS (select `lieu`.`id_lieu` AS `id_lieu`,`lieu`.`designation` AS `designation`,`lieu`.`adresse` AS `adresse`,`lieu`.`code_postal` AS `code_postal` from `lieu`);

-- --------------------------------------------------------

--
-- Structure de la vue `select_nb_produit1`
--
DROP TABLE IF EXISTS `select_nb_produit1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_nb_produit1` AS (select count(0) AS `COUNT(*)` from `produit` where (`produit`.`id_partenaire` = 1));

-- --------------------------------------------------------

--
-- Structure de la vue `select_nb_produit2`
--
DROP TABLE IF EXISTS `select_nb_produit2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_nb_produit2` AS (select count(0) AS `COUNT(*)` from `produit` where (`produit`.`id_partenaire` = 2));

-- --------------------------------------------------------

--
-- Structure de la vue `select_nb_produit3`
--
DROP TABLE IF EXISTS `select_nb_produit3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_nb_produit3` AS (select count(0) AS `COUNT(*)` from `produit` where (`produit`.`id_partenaire` = 3));

-- --------------------------------------------------------

--
-- Structure de la vue `select_note`
--
DROP TABLE IF EXISTS `select_note`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_note` AS (select `note`.`id_note` AS `id_note`,`note`.`auteur` AS `auteur`,`note`.`score` AS `score`,`note`.`commentaire` AS `commentaire`,`note`.`id_personne` AS `id_personne`,`note`.`id_telephone` AS `id_telephone` from `note`);

-- --------------------------------------------------------

--
-- Structure de la vue `select_partenaire`
--
DROP TABLE IF EXISTS `select_partenaire`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_partenaire` AS (select `partenaire`.`id_partenaire` AS `id_partenaire`,`partenaire`.`accronyme` AS `accronyme`,`partenaire`.`mdp` AS `mdp`,`partenaire`.`nom_marque` AS `nom_marque`,`partenaire`.`date_debut` AS `date_debut`,`partenaire`.`adresse` AS `adresse` from `partenaire`);

-- --------------------------------------------------------

--
-- Structure de la vue `select_produit`
--
DROP TABLE IF EXISTS `select_produit`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_produit` AS (select `produit`.`id_telephone` AS `id_telephone`,`produit`.`designation` AS `designation`,`produit`.`Prix` AS `Prix`,`produit`.`poids` AS `poids`,`produit`.`taille` AS `taille`,`produit`.`couleur` AS `couleur`,`produit`.`date_sortie` AS `date_sortie`,`produit`.`img` AS `img`,`produit`.`id_partenaire` AS `id_partenaire` from `produit`);

-- --------------------------------------------------------

--
-- Structure de la vue `select_promos`
--
DROP TABLE IF EXISTS `select_promos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_promos` AS (select `promos`.`idpromo` AS `idpromo`,`promos`.`valeur` AS `valeur`,`promos`.`id_telephone` AS `id_telephone` from `promos`);

-- --------------------------------------------------------

--
-- Structure de la vue `select_ticket`
--
DROP TABLE IF EXISTS `select_ticket`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `select_ticket` AS (select `ticket`.`id_ticket` AS `id_ticket`,`ticket`.`auteur` AS `auteur`,`ticket`.`email` AS `email`,`ticket`.`objet` AS `objet`,`ticket`.`date` AS `date`,`ticket`.`contenu` AS `contenu`,`ticket`.`id_personne` AS `id_personne`,`ticket`.`id_partenaire` AS `id_partenaire` from `ticket`);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `attribut`
--
ALTER TABLE `attribut`
  ADD PRIMARY KEY (`idattribut`),
  ADD KEY `Attribut_produit_FK` (`id_telephone`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `event_lieu_FK` (`id_lieu`);

--
-- Index pour la table `inscrire`
--
ALTER TABLE `inscrire`
  ADD PRIMARY KEY (`id_event`,`id_personne`),
  ADD KEY `inscrire_personne0_FK` (`id_personne`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id_lieu`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `note_personne_FK` (`id_personne`),
  ADD KEY `note_Attribut0_FK` (`id_telephone`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id_partenaire`);

--
-- Index pour la table `participer`
--
ALTER TABLE `participer`
  ADD PRIMARY KEY (`id_event`,`id_telephone`),
  ADD KEY `participer_telephone_FK` (`id_telephone`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_personne`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_telephone`),
  ADD KEY `produit_partenaire_FK` (`id_partenaire`);

--
-- Index pour la table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`idpromo`),
  ADD KEY `Attribut_produit_FK` (`id_telephone`);

--
-- Index pour la table `soumettre`
--
ALTER TABLE `soumettre`
  ADD PRIMARY KEY (`id_partenaire`,`id_personne`,`id_event`),
  ADD KEY `soumettre_personne_FK` (`id_personne`),
  ADD KEY `soumettre_event_FK` (`id_event`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `ticket_personne_FK` (`id_personne`),
  ADD KEY `ticket_partenaire0_FK` (`id_partenaire`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_personne`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `attribut`
--
ALTER TABLE `attribut`
  MODIFY `idattribut` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id_lieu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id_partenaire` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_telephone` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `promos`
--
ALTER TABLE `promos`
  MODIFY `idpromo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- Contraintes pour les tables exportées
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE IF NOT EXISTS `note` (
  `id_note` int(11) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `commentaire` varchar(500) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_telephone` int(11) NOT NULL
) 