-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 08 Janvier 2020 à 10:35
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdclient`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(128) DEFAULT NULL,
  `prenom` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `dateclient` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idclient`, `nom`, `prenom`, `telephone`, `email`, `dateclient`) VALUES
(1, 'njankouo', 'ndam', '6987653463', 'NJANKOUO@gmail.com', '03/01/2020'),
(2, 'njankouo', 'tamo', 'chronos', 'chronos@gmail.mail', '03/01/2020');
--
-- Base de données :  `parc`
--

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `responsable` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

CREATE TABLE IF NOT EXISTS `intervenant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(34) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `type_intervention` varchar(23) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `intervenant`
--

INSERT INTO `intervenant` (`id`, `nom`, `prenom`, `telephone`, `type_intervention`) VALUES
(2, 'njankouo', 'dairou', '6988768', 'logiciel');

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(23) NOT NULL,
  `accomplie` varchar(23) NOT NULL,
  `observation` varchar(23) DEFAULT NULL,
  `description_panne` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`id`, `date`, `accomplie`, `observation`, `description_panne`) VALUES
(1, '2020-01-07', 'oui', 'disque dur', '');

-- --------------------------------------------------------

--
-- Structure de la table `logiciel`
--

CREATE TABLE IF NOT EXISTS `logiciel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL,
  `type` varchar(33) NOT NULL,
  `version` varchar(22) NOT NULL,
  `licence` varchar(23) NOT NULL,
  `date_fin_licence` varchar(23) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `logiciel`
--

INSERT INTO `logiciel` (`id`, `nom`, `type`, `version`, `licence`, `date_fin_licence`) VALUES
(2, 'windows 7', 'windows', '10.3.5', 'DF23-jik8-klKG6-hfhfg', '2020-01-24');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `durabilite` int(11) NOT NULL,
  `constructeur` varchar(56) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE IF NOT EXISTS `materiel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etat_materiel` varchar(45) NOT NULL,
  `type_materiel` varchar(34) NOT NULL,
  `fournisseur` varchar(23) NOT NULL,
  `marque` varchar(12) NOT NULL,
  `numero_serie` varchar(55) NOT NULL,
  `date_achat` int(11) NOT NULL,
  `garantie` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`id`, `etat_materiel`, `type_materiel`, `fournisseur`, `marque`, `numero_serie`, `date_achat`, `garantie`) VALUES
(1, 'bonne qualite', 'carte mere', 'njankouo', 'dell', 'ggsh', 2020, '1ans');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(34) NOT NULL,
  `prenom` varchar(34) NOT NULL,
  `type` varchar(34) NOT NULL,
  `service` varchar(34) NOT NULL,
  `bureau` varchar(34) NOT NULL,
  `contact` varchar(34) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
