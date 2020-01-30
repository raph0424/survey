-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 30 jan. 2020 à 16:52
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `survey`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `Nom_film` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `Nom_film`) VALUES
(1, 'Inception'),
(2, 'Matrix'),
(3, 'Pulp Fiction'),
(4, 'Fight Club');

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

CREATE TABLE `serie` (
  `id_serie` int(11) NOT NULL,
  `Nom_serie` varchar(50) NOT NULL,
  `duree_serie` enum('20mn','40mn','60mn') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `serie`
--

INSERT INTO `serie` (`id_serie`, `Nom_serie`, `duree_serie`) VALUES
(1, 'Game of Thrones', '20mn'),
(2, 'The Mandalorian', '20mn'),
(3, 'Stranger Things', '20mn');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Date_naiss` date NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `Prenom`, `Date_naiss`, `login`, `mdp`) VALUES
(1, 'Raphael', '0000-00-00', 'raph0424', '123'),
(2, 'Sacha', '0000-00-00', 'Noz', '123'),
(3, 'Admin', '2020-01-30', 'Admin', '0424');

-- --------------------------------------------------------

--
-- Structure de la table `watch_film`
--

CREATE TABLE `watch_film` (
  `id_watch_film` int(11) NOT NULL,
  `Date_visio` datetime NOT NULL,
  `Nom_pltf` varchar(50) NOT NULL,
  `id_film` int(4) NOT NULL,
  `id_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `watch_film`
--

INSERT INTO `watch_film` (`id_watch_film`, `Date_visio`, `Nom_pltf`, `id_film`, `id_user`) VALUES
(2, '2020-01-30 11:21:20', 'Cinema', 1, 1),
(3, '2020-01-30 16:40:57', 'Netflix', 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `watch_serie`
--

CREATE TABLE `watch_serie` (
  `id_watch_serie` int(11) NOT NULL,
  `Date_visio` datetime NOT NULL,
  `Nb_episode_chain` int(4) NOT NULL,
  `Nom_pltf` varchar(50) NOT NULL,
  `id_serie` int(4) NOT NULL,
  `id_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `watch_serie`
--

INSERT INTO `watch_serie` (`id_watch_serie`, `Date_visio`, `Nb_episode_chain`, `Nom_pltf`, `id_serie`, `id_user`) VALUES
(1, '2020-01-30 11:32:18', 3, 'Disneyplus', 2, 1),
(2, '2020-01-30 16:27:34', 3, 'OCS', 1, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Index pour la table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id_serie`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `watch_film`
--
ALTER TABLE `watch_film`
  ADD PRIMARY KEY (`id_watch_film`),
  ADD KEY `Watch_film_film_FK` (`id_film`),
  ADD KEY `Watch_film_user_FK` (`id_user`);

--
-- Index pour la table `watch_serie`
--
ALTER TABLE `watch_serie`
  ADD PRIMARY KEY (`id_watch_serie`),
  ADD KEY `Watch_serie_serie_FK` (`id_serie`),
  ADD KEY `Watch_serie_user_FK` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `serie`
--
ALTER TABLE `serie`
  MODIFY `id_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `watch_film`
--
ALTER TABLE `watch_film`
  MODIFY `id_watch_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `watch_serie`
--
ALTER TABLE `watch_serie`
  MODIFY `id_watch_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `watch_film`
--
ALTER TABLE `watch_film`
  ADD CONSTRAINT `Watch_film_film_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `Watch_film_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `watch_serie`
--
ALTER TABLE `watch_serie`
  ADD CONSTRAINT `Watch_serie_serie_FK` FOREIGN KEY (`id_serie`) REFERENCES `serie` (`id_serie`),
  ADD CONSTRAINT `Watch_serie_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
