-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 02 Septembre 2013 à 09:46
-- Version du serveur: 5.5.31
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `Portfolio`
--
CREATE DATABASE IF NOT EXISTS `Portfolio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Portfolio`;

-- --------------------------------------------------------

--
-- Structure de la table `Projet`
--

CREATE TABLE IF NOT EXISTS `Projet` (
  `idProjet` int(11) NOT NULL AUTO_INCREMENT,
  `nomProjet` varchar(50) NOT NULL,
  `descriptionProjet` text NOT NULL,
  `imageProjet` varchar(50) NOT NULL,
  `urlProjet` varchar(50) NOT NULL,
  PRIMARY KEY (`idProjet`),
  UNIQUE KEY `nomProjet` (`nomProjet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `Projet`
--

INSERT INTO `Projet` (`idProjet`, `nomProjet`, `descriptionProjet`, `imageProjet`, `urlProjet`) VALUES
(1, 'Premier projet', 'Le premier projet que j''ai réalisé', 'Chemin/Vers/Limage/PremierProjet', 'Chemin/Vers/LURL/PremierProjet'),
(2, 'Deuxieme projet', 'Le Deuxieme projet que j''ai réalisé', 'Chemin/Vers/Limage/DeuxiemeProjet', 'Chemin/Vers/LURL/DeuxiemeProjet');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
