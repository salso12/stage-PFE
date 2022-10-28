-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 oct. 2022 à 14:15
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `itsup_marsa`
--

-- --------------------------------------------------------

--
-- Structure de la table `avour_panne`
--

CREATE TABLE `avour_panne` (
  `CODEEQUI` int(11) NOT NULL,
  `CODEPANNE` int(11) NOT NULL,
  `DATE_PANNE` date DEFAULT NULL,
  `DUREE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avour_panne`
--

INSERT INTO `avour_panne` (`CODEEQUI`, `CODEPANNE`, `DATE_PANNE`, `DUREE`) VALUES
(2, 3, '2022-05-18', '10j');

-- --------------------------------------------------------

--
-- Structure de la table `chef_service`
--

CREATE TABLE `chef_service` (
  `MATRICULE_C` int(11) NOT NULL,
  `NOM_PRENOM` varchar(100) DEFAULT NULL,
  `DATE_NAISSANCE` date DEFAULT NULL,
  `SERVICE` varchar(100) DEFAULT NULL,
  `DATE_RECRUCTEMENT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chef_service`
--

INSERT INTO `chef_service` (`MATRICULE_C`, `NOM_PRENOM`, `DATE_NAISSANCE`, `SERVICE`, `DATE_RECRUCTEMENT`) VALUES
(2001, 'karom mohamed', '2001-04-05', 'test', '2019-04-12'),
(2002, 'hamid ahmed', '1999-03-09', 'test2', '2018-04-01');

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `CODEEQUI` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `DESIGNATION` varchar(100) DEFAULT NULL,
  `FAMILLE` varchar(100) DEFAULT NULL,
  `SOUSFAMILLE` varchar(100) DEFAULT NULL,
  `MARQUE` varchar(100) DEFAULT NULL,
  `TYPE` varchar(100) DEFAULT NULL,
  `DATE_MISE_EN_SERVICE` date DEFAULT NULL,
  `DISPONIBILITES` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`CODEEQUI`, `picture`, `DESIGNATION`, `FAMILLE`, `SOUSFAMILLE`, `MARQUE`, `TYPE`, `DATE_MISE_EN_SERVICE`, `DISPONIBILITES`) VALUES
(1, 'uploads/pic2.jpg', 'Hyster H44-16', 'Equipements portuaires\r\n', 'MANIPULATEUR DE CONTENEURS', 'Hyster', 'H44-16', '2022-04-05', 'En panne'),
(2, 'uploads/pic3.jpg', 'TERBERG YT223', 'Equipements portuaires', 'Tracteurs de terminaux ', 'TERBERG', 'YT223', '2020-08-24', 'Etat normal'),
(3, 'uploads/165126684616071_9132690076521.jpg', 'SMV 45-42', 'Equipements portuaires', 'grue telescopique', 'SMV', '45-42', '2020-06-24', 'En panne'),
(5, 'uploads/5ab4b43908ace.jpg', 'WEIHUA A4-A7', 'Equipements portuaires', 'Grues a portique', 'WEIHUA\r\n', 'A4-A7', '2017-04-20', 'Etat normal'),
(6, 'uploads/Portiques-de-parc-Congo-TerminalV1.jpg', 'Yufei A6', 'Equipements portuaires', 'Portique de manutention', 'Yufei', 'A6', '2015-04-05', 'Etat normal'),
(7, 'uploads/8480_8655595568279.jpg', 'Mitsubishi FD25N', ' Equipements portuaires', 'Chariots elevateurs diesel', 'MITSUBISHI', 'FD25N', '2019-05-25', 'En panne'),
(12, 'uploads/1655897256', 'qdgvzahj', 'hsxs', 'jxshc', 'hsg', 'dsjb', '2022-06-22', 'Etat normal');

-- --------------------------------------------------------

--
-- Structure de la table `etatequi`
--

CREATE TABLE `etatequi` (
  `CODEETAT` int(11) NOT NULL,
  `CODEEQUI` int(11) DEFAULT NULL,
  `DISPONIBILITES` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `user_type`) VALUES
(2, 'akram', 'root', 'akramlolm@mail.ru', 'user'),
(3, 'root', 'root', 'root@admin.com', 'admin'),
(4, 'salwa', 'root', 'salwa@root.com', 'soustrai'),
(6, 'soustra', 'root', 'salwamounji5@gmail.com', 'soustrai'),
(7, 'soustrai1', 'root', 'soustrai@root.com', 'Visitor');

-- --------------------------------------------------------

--
-- Structure de la table `maintenir`
--

CREATE TABLE `maintenir` (
  `MATRICULE_T` int(11) NOT NULL,
  `CODEEQUI` int(11) NOT NULL,
  `DATE_MAINTENANCE` date DEFAULT NULL,
  `DUREE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maintenir`
--

INSERT INTO `maintenir` (`MATRICULE_T`, `CODEEQUI`, `DATE_MAINTENANCE`, `DUREE`) VALUES
(1001, 2, '2022-05-16', '10j');

-- --------------------------------------------------------

--
-- Structure de la table `ordre_reparation`
--

CREATE TABLE `ordre_reparation` (
  `CODEORDRE` int(11) NOT NULL,
  `CODEPANNE` int(11) NOT NULL,
  `MATRICULE_T` int(11) NOT NULL,
  `MATRICULE_C` int(11) NOT NULL,
  `OBJET` varchar(100) DEFAULT NULL,
  `DATE_ORDRE` date DEFAULT NULL,
  `DEMANDEUR` varchar(100) DEFAULT NULL,
  `APPROBATEUR` varchar(100) DEFAULT NULL,
  `APPROUVER` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ordre_reparation`
--

INSERT INTO `ordre_reparation` (`CODEORDRE`, `CODEPANNE`, `MATRICULE_T`, `MATRICULE_C`, `OBJET`, `DATE_ORDRE`, `DEMANDEUR`, `APPROBATEUR`, `APPROUVER`) VALUES
(3, 3, 1001, 2002, 'Equipements portuaires', '2022-04-08', 'akram', 'salwa', '1'),
(4, 3, 1002, 2002, 'TE', '2022-05-10', 'hhh', 'jjj', '1'),
(5, 7, 1002, 2002, 'hhh', '2022-05-02', 'hhh', 'kkkk', '0'),
(10, 3, 1002, 2001, 'test', '2022-05-26', 'akram', 'test', '1'),
(11, 9, 1002, 2001, 'test', '2022-05-28', 'akram', '22', '1'),
(12, 10, 1002, 2001, 'test', '2022-05-14', 'akram', 'test', '1');

-- --------------------------------------------------------

--
-- Structure de la table `panne`
--

CREATE TABLE `panne` (
  `CODEPANNE` int(11) NOT NULL,
  `DESIGNATION` varchar(100) DEFAULT NULL,
  `TYPE` varchar(100) DEFAULT NULL,
  `FAMILLE` varchar(100) DEFAULT NULL,
  `CAUSE` varchar(100) DEFAULT NULL,
  `SYMPTHOME` varchar(100) DEFAULT NULL,
  `REMEDE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panne`
--

INSERT INTO `panne` (`CODEPANNE`, `DESIGNATION`, `TYPE`, `FAMILLE`, `CAUSE`, `SYMPTHOME`, `REMEDE`) VALUES
(3, 'TERBERG YT223', 'YT223', 'Equipements portuaires', 'i don\'t know why but this time it stop for ever', 'ilo', 'lol'),
(7, 'TERBERG YT223', 'YT223', 'Equipements portuaires', 'test7', 'test', 'test'),
(9, 'Mitsubishi FD25N', 'FD25N', ' Equipements portuaires', 'test', 'test', 'test'),
(10, 'Mitsubishi FD25N', 'FD25N', ' Equipements portuaires', 'test', 'test', 'test'),
(11, 'Hyster H44-16', 'H44-16', 'Equipements portuaires', 'test', 'test', 'test'),
(12, 'Hyster H44-16', 'H44-16', 'Equipements portuaires', 'test', 'test', 'test'),
(13, 'Hyster H44-16', 'H44-16', 'Equipements portuaires', 'test', 'test', 'test'),
(14, 'Hyster H44-16', 'H44-16', 'Equipements portuaires', 'test', 'test', 'test'),
(15, 'Hyster H44-16', 'H44-16', 'Equipements portuaires', 'test', 'test', 'test'),
(16, 'Hyster H44-16', 'H44-16', 'Equipements portuaires', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `reparation`
--

CREATE TABLE `reparation` (
  `CODEREP` int(11) NOT NULL,
  `OBJET` varchar(100) DEFAULT NULL,
  `TYPE` varchar(100) DEFAULT NULL,
  `COUT` varchar(100) DEFAULT NULL,
  `MOYENS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reparation`
--

INSERT INTO `reparation` (`CODEREP`, `OBJET`, `TYPE`, `COUT`, `MOYENS`) VALUES
(1, 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `reparer`
--

CREATE TABLE `reparer` (
  `CODEEQUI` int(11) NOT NULL,
  `CODEPANNE` int(11) NOT NULL,
  `CODEORDRE` int(11) NOT NULL,
  `CODESOUSTRAI` int(11) NOT NULL,
  `CODEREP` int(11) NOT NULL,
  `DATE` date DEFAULT NULL,
  `DUREE` varchar(100) DEFAULT NULL,
  `etat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reparer`
--

INSERT INTO `reparer` (`CODEEQUI`, `CODEPANNE`, `CODEORDRE`, `CODESOUSTRAI`, `CODEREP`, `DATE`, `DUREE`, `etat`) VALUES
(3, 3, 3, 3, 1, '2022-05-11', '10j', '1'),
(7, 7, 4, 4, 1, '2022-05-03', '10j', '1');

-- --------------------------------------------------------

--
-- Structure de la table `sous_traitant`
--

CREATE TABLE `sous_traitant` (
  `CODESOUSTRAI` int(11) NOT NULL,
  `NOM` varchar(100) DEFAULT NULL,
  `TELEPHONE` varchar(100) DEFAULT NULL,
  `ADRESSE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_traitant`
--

INSERT INTO `sous_traitant` (`CODESOUSTRAI`, `NOM`, `TELEPHONE`, `ADRESSE`) VALUES
(1, 'mohamed adam', '0675465458', 'mdina'),
(2, 'faisal mohsin', '0678778757', 'ainsebaa'),
(3, 'kawkab adam', '0756443909', 'barnoussi'),
(4, 'reda ben taleb', '0765544308', 'kuds');

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

CREATE TABLE `technicien` (
  `MATRICULE_T` int(11) NOT NULL,
  `NOM_PRENOM` varchar(100) DEFAULT NULL,
  `DATE_NAISSANCE` date DEFAULT NULL,
  `SERVICE` varchar(100) DEFAULT NULL,
  `DATE_RECRUCTEMENT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `technicien`
--

INSERT INTO `technicien` (`MATRICULE_T`, `NOM_PRENOM`, `DATE_NAISSANCE`, `SERVICE`, `DATE_RECRUCTEMENT`) VALUES
(1001, 'kardi mohamed', '2000-04-13', 'test', '2022-04-05'),
(1002, 'messi mohamed', '2000-04-11', 'test2', '2022-04-22');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `image`) VALUES
(28, 'admin', 'root@admin.com', '63a9f0ea7bb98050796b649e85481845', 'user', 'admin.png'),
(29, 'akram', 'akramlolm@mail.ru', '63a9f0ea7bb98050796b649e85481845', 'admin', 'nft.png'),
(30, 'salwa', 'salwa@root.com', '63a9f0ea7bb98050796b649e85481845', 'user', '2021-Tesla-Model-X-Performance-SUV-blue-1001x565-1.jpg'),
(31, 'soustrai', 'soustrai@root.com', 'root', 'soustrai', 'nft.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avour_panne`
--
ALTER TABLE `avour_panne`
  ADD PRIMARY KEY (`CODEEQUI`,`CODEPANNE`),
  ADD KEY `FK_AVOUR_PA_AVOUR_PAN_PANNE` (`CODEPANNE`);

--
-- Index pour la table `chef_service`
--
ALTER TABLE `chef_service`
  ADD PRIMARY KEY (`MATRICULE_C`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`CODEEQUI`);

--
-- Index pour la table `etatequi`
--
ALTER TABLE `etatequi`
  ADD PRIMARY KEY (`CODEETAT`),
  ADD KEY `FK_ETATEQUI_ETAT_EQUIPEME` (`CODEEQUI`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maintenir`
--
ALTER TABLE `maintenir`
  ADD PRIMARY KEY (`MATRICULE_T`,`CODEEQUI`),
  ADD KEY `FK_MAINTENI_MAINTENIR_EQUIPEME` (`CODEEQUI`);

--
-- Index pour la table `ordre_reparation`
--
ALTER TABLE `ordre_reparation`
  ADD PRIMARY KEY (`CODEORDRE`),
  ADD KEY `FK_ORDRE_RE_APPROUVER_CHEF_SER` (`MATRICULE_C`),
  ADD KEY `FK_ORDRE_RE_CREER_TECHNICI` (`MATRICULE_T`),
  ADD KEY `CODEPANNE` (`CODEPANNE`);

--
-- Index pour la table `panne`
--
ALTER TABLE `panne`
  ADD PRIMARY KEY (`CODEPANNE`);

--
-- Index pour la table `reparation`
--
ALTER TABLE `reparation`
  ADD PRIMARY KEY (`CODEREP`);

--
-- Index pour la table `reparer`
--
ALTER TABLE `reparer`
  ADD PRIMARY KEY (`CODEEQUI`,`CODEPANNE`,`CODEORDRE`,`CODESOUSTRAI`,`CODEREP`),
  ADD KEY `FK_REPARER_REPARER_REPARATI` (`CODEREP`),
  ADD KEY `FK_REPARER_REPARER3_PANNE` (`CODEPANNE`),
  ADD KEY `FK_REPARER_REPARER4_ORDRE_RE` (`CODEORDRE`),
  ADD KEY `FK_REPARER_REPARER5_SOUS_TRA` (`CODESOUSTRAI`);

--
-- Index pour la table `sous_traitant`
--
ALTER TABLE `sous_traitant`
  ADD PRIMARY KEY (`CODESOUSTRAI`);

--
-- Index pour la table `technicien`
--
ALTER TABLE `technicien`
  ADD PRIMARY KEY (`MATRICULE_T`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `CODEEQUI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `etatequi`
--
ALTER TABLE `etatequi`
  MODIFY `CODEETAT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `ordre_reparation`
--
ALTER TABLE `ordre_reparation`
  MODIFY `CODEORDRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `panne`
--
ALTER TABLE `panne`
  MODIFY `CODEPANNE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `reparation`
--
ALTER TABLE `reparation`
  MODIFY `CODEREP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sous_traitant`
--
ALTER TABLE `sous_traitant`
  MODIFY `CODESOUSTRAI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avour_panne`
--
ALTER TABLE `avour_panne`
  ADD CONSTRAINT `FK_AVOUR_PA_AVOUR_PAN_EQUIPEME` FOREIGN KEY (`CODEEQUI`) REFERENCES `equipement` (`CODEEQUI`),
  ADD CONSTRAINT `FK_AVOUR_PA_AVOUR_PAN_PANNE` FOREIGN KEY (`CODEPANNE`) REFERENCES `panne` (`CODEPANNE`);

--
-- Contraintes pour la table `etatequi`
--
ALTER TABLE `etatequi`
  ADD CONSTRAINT `FK_ETATEQUI_ETAT_EQUIPEME` FOREIGN KEY (`CODEEQUI`) REFERENCES `equipement` (`CODEEQUI`);

--
-- Contraintes pour la table `maintenir`
--
ALTER TABLE `maintenir`
  ADD CONSTRAINT `FK_MAINTENI_MAINTENIR_EQUIPEME` FOREIGN KEY (`CODEEQUI`) REFERENCES `equipement` (`CODEEQUI`),
  ADD CONSTRAINT `FK_MAINTENI_MAINTENIR_TECHNICI` FOREIGN KEY (`MATRICULE_T`) REFERENCES `technicien` (`MATRICULE_T`);

--
-- Contraintes pour la table `ordre_reparation`
--
ALTER TABLE `ordre_reparation`
  ADD CONSTRAINT `FK_ORDRE_RE_APPROUVER_CHEF_SER` FOREIGN KEY (`MATRICULE_C`) REFERENCES `chef_service` (`MATRICULE_C`),
  ADD CONSTRAINT `FK_ORDRE_RE_CREER_TECHNICI` FOREIGN KEY (`MATRICULE_T`) REFERENCES `technicien` (`MATRICULE_T`);

--
-- Contraintes pour la table `reparer`
--
ALTER TABLE `reparer`
  ADD CONSTRAINT `FK_REPARER_REPARER2_EQUIPEME` FOREIGN KEY (`CODEEQUI`) REFERENCES `equipement` (`CODEEQUI`),
  ADD CONSTRAINT `FK_REPARER_REPARER3_PANNE` FOREIGN KEY (`CODEPANNE`) REFERENCES `panne` (`CODEPANNE`),
  ADD CONSTRAINT `FK_REPARER_REPARER4_ORDRE_RE` FOREIGN KEY (`CODEORDRE`) REFERENCES `ordre_reparation` (`CODEORDRE`),
  ADD CONSTRAINT `FK_REPARER_REPARER5_SOUS_TRA` FOREIGN KEY (`CODESOUSTRAI`) REFERENCES `sous_traitant` (`CODESOUSTRAI`),
  ADD CONSTRAINT `FK_REPARER_REPARER_REPARATI` FOREIGN KEY (`CODEREP`) REFERENCES `reparation` (`CODEREP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
