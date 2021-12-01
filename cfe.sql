-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 20 juil. 2020 à 17:31
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `abs`
--

CREATE TABLE `abs` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `formation` text NOT NULL,
  `nb_absence` int(11) NOT NULL,
  `date_absence` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abs`
--

INSERT INTO `abs` (`id`, `nom`, `formation`, `nb_absence`, `date_absence`) VALUES
(1, 'Gulavogui Emmanuel Zaou', 'Anglais', 1, '2020-07-06'),
(2, 'Drissi Fatima', 'FranÃ§ais', 1, '2020-07-10'),
(3, 'Kadiri Hachem', 'FranÃ§ais', 1, '2020-07-10');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `mdp` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `mdp`, `photo`) VALUES
(1, 'fikri', 'zakaria', 'z.fikri@cfe.ma', 'z.fikri', '');

-- --------------------------------------------------------

--
-- Structure de la table `charge`
--

CREATE TABLE `charge` (
  `id` int(11) NOT NULL,
  `charge` text NOT NULL,
  `prix` text NOT NULL,
  `date_charge` date NOT NULL,
  `situation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `charge`
--

INSERT INTO `charge` (`id`, `charge`, `prix`, `date_charge`, `situation`) VALUES
(1, 'Loyer', '2700', '2020-07-31', 'Non rÃ©glÃ©'),
(2, 'Eau', '165', '2020-07-06', 'RÃ©glÃ©'),
(3, 'ElectricitÃ©', '52', '2020-07-06', 'RÃ©glÃ©'),
(4, 'Site web', '500', '2020-07-08', 'Non rÃ©glÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE `emploi` (
  `id` int(11) NOT NULL,
  `jour` text NOT NULL,
  `s1` text,
  `s2` text,
  `s3` text,
  `s4` text,
  `s5` text,
  `s6` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`id`, `jour`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`) VALUES
(1, 'Lundi', '', '', '', 'informatique 17h-19h', 'fr = Grp enfant', ''),
(2, 'Mardi', '', '', '', 'Er rahmani', 'fr = Groupe A', ''),
(3, 'Mercredi', '', '', '', 'fr = Groupe B | Ag = Groupe A **', 'Er rahmani*', ''),
(4, 'Jeudi', '', '', '', 'informatique 17h - 19h | Er rahmani', 'fr = Groupe enfant', ''),
(5, 'Vendredi', '', '', '', 'fr = Groupe B', 'fr = Groupe A', ''),
(6, 'Samedi', '', '', 'Er rahmani*', 'Ag = Groupe A**', 'Groupe enfant', ''),
(7, 'Dimanche', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE `formateur` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `mdp` text NOT NULL,
  `image` text NOT NULL,
  `CIN` text NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `CB` text NOT NULL,
  `situation` text NOT NULL,
  `date_inscription` date NOT NULL,
  `formation` text NOT NULL,
  `prix` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`id`, `nom`, `prenom`, `email`, `mdp`, `image`, `CIN`, `tel`, `adresse`, `CB`, `situation`, `date_inscription`, `formation`, `prix`) VALUES
(1, 'Toufali', 'chaymae', 'toufali.chaimae@gmail.com', '', '16112685_431820377150056_461304982949181710_o.jpg', 'F566885', 648721154, '', '', 'Non rÃ©glÃ©', '2020-07-06', 'FranÃ§ais', ''),
(2, 'Serraf', 'DoÃ»ae', '', '', '', '', 641010735, '', '', 'Non rÃ©glÃ©', '2020-07-08', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `formation` text NOT NULL,
  `prix` int(11) NOT NULL,
  `duree` text NOT NULL,
  `formateur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `formation`, `prix`, `duree`, `formateur`) VALUES
(1, 'Langue FranÃ§aise', 200, 'par mois', 'Toufali chaymae'),
(2, 'Langue Anglaise', 200, 'par mois', 'Doûae Serraf'),
(3, 'Bureautique (FranÃ§aise)', 400, '20 heures', 'Zakaria Fikri');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `mdp` text NOT NULL,
  `img` text NOT NULL,
  `CIN` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `fonction` text NOT NULL,
  `situation` text NOT NULL,
  `date_inscription` date NOT NULL,
  `formation` text NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `mdp`, `img`, `CIN`, `tel`, `adresse`, `fonction`, `situation`, `date_inscription`, `formation`, `prix`) VALUES
(1, 'Gulavogui', 'Emmanuel Zaou', '', '', '', 'F0131575', '0689605232', '', 'Ã©tudiant', 'RÃ©glÃ©', '2020-06-30', 'Langue Anglaise', 200),
(5, 'Fathi', 'Mhamdi', '', '', '', '', '', '', '', 'RÃ©glÃ©', '2020-07-02', 'Langue Anglaise', 200),
(6, 'Aayay', 'Chaimae', '', '', '', '', '', '', '', 'RÃ©glÃ©', '2020-07-02', 'Langue FranÃ§aise', 200),
(7, 'Salem', 'Sabah', '', '', '', '', '', '', 'Cadre urbaine', 'RÃ©glÃ©', '2020-07-03', 'Bureautique (franÃ§ais)', 400),
(8, 'Er-Rahmany', 'Mohammed', '', '', '', '', '0700754109', '', '', 'RÃ©glÃ©', '2020-07-03', 'Langue FranÃ§aise', 400),
(9, 'Drissi', 'Fatima', '', '', '', 'F753118', '0701730726', 'Dr oulad abdelkader Cr Isly bni oukil PCE oujda', '', 'RÃ©glÃ©', '2020-07-06', 'Bureautique (franÃ§ais)', 400),
(10, 'Melhaoui', 'Meryem', '', '', '', 'FB119154', '0680279821', 'HAY NGADI RUE M11 NR 11 Oujda', 'Ã©tudiante', 'RÃ©glÃ©', '2020-07-06', 'Langue FranÃ§aise', 200),
(11, 'Tahiri', 'Oumaima', '', '', '', 'D593173', '0690650227', 'HAY ENNACER RUE 15 N 4 V N MEKNES', '', 'RÃ©glÃ©', '2020-07-06', 'Bureautique (franÃ§ais)', 400),
(13, 'boulercha', 'houda', '', '', '', '', '0766760972', '', '', 'RÃ©glÃ©', '2020-07-07', 'Langue Anglaise', 200),
(16, 'Ouadhi', 'ikram', '', '', '', '', '0659637731', '', '', 'RÃ©glÃ©', '2020-07-08', 'Langue FranÃ§aise', 200),
(19, 'Negagza', 'ayoub', '', '', '', '', '0671553796', '', '', 'RÃ©glÃ©', '2020-07-08', 'Langue FranÃ§aise', 200),
(20, 'Zkalmi', 'Mohamed amine', '', '', '', '', '0671553796', '', '', 'RÃ©glÃ©', '2020-07-08', 'Langue FranÃ§aise', 200),
(23, 'Benyamina', 'ahmed', '', '', '', '', '0672284556', '', '', 'RÃ©glÃ©', '2020-07-14', 'Langue FranÃ§aise', 200),
(24, 'Betari', 'yahya', '', '', '', '', '0667467672', '', '', 'RÃ©glÃ©', '2020-07-14', 'Langue FranÃ§aise', 200),
(26, 'Bouziyani', 'Nassira', '', '', '', 'F461019', '0636769414', 'HAY NGADI RUE21 NR 12 OUJDA', '', 'RÃ©glÃ©', '2020-07-16', 'Langue FranÃ§aise', 200),
(27, 'Fall', 'Mohamed Vall', '', '', '', '2134910055', '0601171878', '', 'Etudiant', 'RÃ©glÃ©', '2020-07-18', 'Langue Anglaise', 200),
(28, 'Ibrahima', 'dialo', '', '', '', '918-00034069', '0707450941', '', 'etudiant', 'Non rÃ©glÃ©', '2020-07-20', 'Langue Anglaise', 200),
(29, 'Cisse', 'mamoudou', '', '', '', '', '0707450941', '', '', 'Non rÃ©glÃ©', '2020-07-20', 'Langue Anglaise', 200);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abs`
--
ALTER TABLE `abs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `charge`
--
ALTER TABLE `charge`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emploi`
--
ALTER TABLE `emploi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abs`
--
ALTER TABLE `abs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `charge`
--
ALTER TABLE `charge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `emploi`
--
ALTER TABLE `emploi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `formateur`
--
ALTER TABLE `formateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
