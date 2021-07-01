-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Février 2019 à 20:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `archivage_de_stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

CREATE TABLE IF NOT EXISTS `domaine` (
  `id_domaine` int(250) NOT NULL AUTO_INCREMENT,
  `nom_domaine` varchar(100) NOT NULL,
  PRIMARY KEY (`id_domaine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etudiant` int(250) NOT NULL AUTO_INCREMENT,
  `nom_etudiant` varchar(50) NOT NULL,
  `prenom_etudiant` varchar(50) NOT NULL,
  `age_etudiant` int(100) NOT NULL,
  `domaine_etudiant` varchar(50) NOT NULL,
  `email_etudiant` varchar(50) NOT NULL,
  `tel_etudiant` int(50) NOT NULL,
  `password_etudiant` varchar(50) NOT NULL,
  PRIMARY KEY (`id_etudiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `nom_etudiant`, `prenom_etudiant`, `age_etudiant`, `domaine_etudiant`, `email_etudiant`, `tel_etudiant`, `password_etudiant`) VALUES
(1, 'ibra', '', 0, 'by_email', 'alomatsiblandine@gmail.com', 0, 'aaa'),
(2, 'Shlum', '', 0, 'by_email', 'shlum@gmail.com', 0, 'aaaa');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE IF NOT EXISTS `filiere` (
  `id_filiere` int(250) NOT NULL AUTO_INCREMENT,
  `nom_filiere` varchar(50) NOT NULL,
  PRIMARY KEY (`id_filiere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE IF NOT EXISTS `professeur` (
  `id_prof` int(250) NOT NULL AUTO_INCREMENT,
  `nom_prof` varchar(50) NOT NULL,
  `prenom_prof` varchar(100) NOT NULL,
  `adresse_prof` varchar(200) NOT NULL,
  `email_prof` varchar(100) NOT NULL,
  `tel_prof` int(50) NOT NULL,
  `password_prof` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `professeur`
--

INSERT INTO `professeur` (`id_prof`, `nom_prof`, `prenom_prof`, `adresse_prof`, `email_prof`, `tel_prof`, `password_prof`) VALUES
(1, '$nom', '$prenom', '', '$email', 0, '$password'),
(2, 'ALOM', '$prenom', '', '$email', 0, '$password'),
(3, 'ALOM', 'bb', '', 'alomatsiblandine@gmail.com', 0, 'dinux'),
(4, 'Agape', 'amour', '', 'agape@gmail.com', 0, 'blando');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `id_stage` int(250) NOT NULL AUTO_INCREMENT,
  `dure_stage` varchar(100) NOT NULL,
  `lieu_stage` varchar(100) NOT NULL,
  `status_stage` varchar(50) NOT NULL,
  `contenu_stage` text NOT NULL,
  `creer_par` varchar(50) NOT NULL,
  `phone_number_company` int(20) NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id_stage`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`id_stage`, `dure_stage`, `lieu_stage`, `status_stage`, `contenu_stage`, `creer_par`, `phone_number_company`, `date_creation`) VALUES
(3, '1mois', 'esig', '', 'programmation', 'ALOM ', 2147483647, '0000-00-00'),
(4, '5 mois', 'CashZone', '', 'Administrateur Reseau', 'ALOM ', 0, '2019-02-20'),
(5, '1mois', 'esig', '', 'cablage reseau', 'ALOM ', 2147483647, '2019-02-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
