-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 04 sep. 2021 à 16:48
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text,
  `password` text,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2008-01-01 03:01:10');

-- --------------------------------------------------------

--
-- Structure de la table `ouverture_de_compte`
--

CREATE TABLE `ouverture_de_compte` (
  `LONG_NAME_ENG` text,
  `BRANCH_CODE` text,
  `CURRENCY_CODE` text,
  `GL_CODE` text,
  `CIF_SUB_NO` text,
  `DATE_OPND` text,
  `Demande_Signee` text,
  `2_Photos` text,
  `Specimen_de_signature` text,
  `Existence_KYC` text,
  `KYC_Signee_par_CCL` text,
  `KYC_Signee_par_RA` text,
  `Accord_de_conformite` text,
  `Piece_d_Identite` text,
  `Conformite_Infos_RC_ET_PI_Syst` text,
  `Extrait_de_RC_ou_agrement` text,
  `NIF` text,
  `Statut_date_et_signe` text,
  `PV_de_l_Assemblee_Generale` text,
  `PV_de_conseil_d_administration_SA` text,
  `Pieces_Identite_des_actionnaires` text,
  `Risque_LAB` text,
  `Check_liste_Existence` text,
  `Check_liste_Remplie` text,
  `OFAC` text,
  `UK` text,
  `UE` text,
  `Existence_J_Adresse` text,
  `Date` text,
  `au_nom_du_client` text,
  `CNI_hebergeur` text,
  `CCL` text,
  `Client` text,
  `Observation` text,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ouverture_de_compte`
--

INSERT INTO `ouverture_de_compte` (`LONG_NAME_ENG`, `BRANCH_CODE`, `CURRENCY_CODE`, `GL_CODE`, `CIF_SUB_NO`, `DATE_OPND`, `Demande_Signee`, `2_Photos`, `Specimen_de_signature`, `Existence_KYC`, `KYC_Signee_par_CCL`, `KYC_Signee_par_RA`, `Accord_de_conformite`, `Piece_d_Identite`, `Conformite_Infos_RC_ET_PI_Syst`, `Extrait_de_RC_ou_agrement`, `NIF`, `Statut_date_et_signe`, `PV_de_l_Assemblee_Generale`, `PV_de_conseil_d_administration_SA`, `Pieces_Identite_des_actionnaires`, `Risque_LAB`, `Check_liste_Existence`, `Check_liste_Remplie`, `OFAC`, `UK`, `UE`, `Existence_J_Adresse`, `Date`, `au_nom_du_client`, `CNI_hebergeur`, `CCL`, `Client`, `Observation`, `id`) VALUES
('OUMAR ABOU ATHIE', '401', '929', '216110', '10047575', '2020-09-14 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
('MOHAMED MBARECK ABDELLAHI BEYA', '701', '929', '210210', '10048405', '2020-09-28 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2),
('TOUTOU EIDE MBAREK', '101', '929', '210210', '10048404', '2020-09-28 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3),
('MOHAMED EL ARBY', '804', '929', '210210', '10049092', '2020-10-08 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4),
('LALLA AICHA MOHAMED ELMOCTAR ZEINE', '10', '929', '216110', '10015376', '2020-10-07 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 5),
('LALLA AICHA MOHAMED ELMOCTAR ZEINE', '10', '929', '216110', '10015376', '04-09-2021', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 6);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text,
  `password` text,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ouverture_de_compte`
--
ALTER TABLE `ouverture_de_compte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ouverture_de_compte`
--
ALTER TABLE `ouverture_de_compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
