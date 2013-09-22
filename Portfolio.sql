-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 22 Septembre 2013 à 20:17
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE IF NOT EXISTS `competence` (
  `idCompetence` int(11) NOT NULL AUTO_INCREMENT,
  `nomCompetence` varchar(50) NOT NULL,
  `categorieCompetence` varchar(50) NOT NULL,
  `noteCompetence` tinyint(4) NOT NULL,
  PRIMARY KEY (`idCompetence`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `competence`
--

INSERT INTO `competence` (`idCompetence`, `nomCompetence`, `categorieCompetence`, `noteCompetence`) VALUES
(1, 'PHP', 'Web', 80),
(2, 'HTML5', 'Web', 70),
(3, 'CSS3', 'Web', 70),
(4, 'JavaScript', 'Web', 80),
(5, 'Java', 'Génie Logiciel', 75),
(6, 'C#', 'Génie Logiciel', 60),
(7, 'C', 'Génie Logiciel', 70),
(8, 'C++', 'Génie Logiciel', 75),
(9, 'Coq', 'Génie Logiciel', 50);

-- --------------------------------------------------------

--
-- Structure de la table `competenceexperience`
--

CREATE TABLE IF NOT EXISTS `competenceexperience` (
  `idCompetenceExperience` int(11) NOT NULL AUTO_INCREMENT,
  `idCompetence` int(11) NOT NULL,
  `idExperience` int(11) NOT NULL,
  PRIMARY KEY (`idCompetenceExperience`,`idCompetence`,`idExperience`),
  KEY `FK_COMPETENCE_COMPETENCEEXPERIENCE` (`idCompetence`),
  KEY `FK_EXPERIENCE_COMPETENCEEXPERIENCE` (`idExperience`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `idExperience` int(11) NOT NULL AUTO_INCREMENT,
  `nomExperience` varchar(50) NOT NULL,
  `dateDebutExperience` date NOT NULL,
  `dateFinExperience` date DEFAULT NULL,
  `employeurExperience` varchar(50) NOT NULL,
  `emplacementExperience` varchar(50) NOT NULL,
  PRIMARY KEY (`idExperience`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `experience`
--

INSERT INTO `experience` (`idExperience`, `nomExperience`, `dateDebutExperience`, `dateFinExperience`, `employeurExperience`, `emplacementExperience`) VALUES
(1, 'Premiere experience', '2013-09-04', '2013-09-05', 'Premier employeur', 'Premier emplacement'),
(2, 'Deuxieme experience', '2013-09-02', '2013-09-03', 'Deuxième employeur', 'Deuxième emplacement');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `idFormation` int(11) NOT NULL AUTO_INCREMENT,
  `nomFormation` varchar(100) NOT NULL,
  `etablissementFormation` varchar(50) NOT NULL,
  `dateReussiteFormation` date NOT NULL,
  PRIMARY KEY (`idFormation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `nomFormation`, `etablissementFormation`, `dateReussiteFormation`) VALUES
(1, 'Baccalaurat Scientifique option Sciences de l''Ingénieur', 'LEGTI Alphonse Heinrich, Haguenau', '2009-06-30');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `idProjet` int(11) NOT NULL AUTO_INCREMENT,
  `nomProjet` varchar(50) NOT NULL,
  `descriptionProjet` text NOT NULL,
  `imageProjet` varchar(50) NOT NULL,
  `urlProjet` varchar(50) NOT NULL,
  `auteurProjet` text NOT NULL,
  PRIMARY KEY (`idProjet`),
  UNIQUE KEY `nomProjet` (`nomProjet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`idProjet`, `nomProjet`, `descriptionProjet`, `imageProjet`, `urlProjet`, `auteurProjet`) VALUES
(1, '3DExploration', '<p>Cette application permet d''explorer les fichiers contenu sur le disque dur en représentant les dossiers dans un monde 3D.</p>\r\n\r\n<p>L''application a été réalisée en C++ et OpenGL3.3 (Le langage était imposé pour ce projet).</p>\r\n\r\n<p>Ceci est un projet universitaire, non-complet, il y a donc encore des bugs qui n''ont pas été corrigés ainsi que plein de possibilités d''améliorations.</p>', 'Projet1.png', 'Projet1.zip', '<li>Arnaud Bletterer</li>'),
(2, 'Tracé de segment de Bresenham', '<p>Cette application permet de dessiner des lignes brisées ainsi que de remplir le polygone ainsi créé.</p>\r\n\r\n<p>Le but était d''étudier l''implémentation de l''algorithme de tracé de segment de Bresenham.</p>\r\n\r\n<p>L''application a été réalisée en C++ et OpenGL1.2 (Le langage était imposé pour ce projet).</p>\r\n\r\n<p>Ceci est un projet universitaire, non-complet, il y a donc encore des bugs qui n''ont pas été corrigés ainsi que plein de possibilités d''améliorations.</p>', 'Projet2.png', 'Projet2.zip', '<li>Arnaud Bletterer</li>'),
(3, 'Simulateur 2D', '<p>Cette application est un simulateur de gravité en 2D, il est possible de choisir le nombre de calculs par seconde, de créer/supprimer des objets (rectangles, cercles).</p>\r\n\r\n<p>Le but était de réaliser une application représentant les collisions entre divers objets.</p>\r\n\r\n<p>L''application a été réalisée en Java (Le langage était imposé pour ce projet).</p>\r\n\r\n<p>Ceci est un projet universitaire, non-complet, il y a donc encore des bugs qui n''ont pas été corrigés ainsi que plein de possibilités d''améliorations.</p>', 'Projet3.png', 'Projet3.zip', '<li>Quentin Fahrner</li> <li>Arnaud Bletterer</li>'),
(4, 'Liste de tâches', '<p>Cette application permet de gérer plusieurs listes de tâches. Elle permet la création/suppression/modification de celles-ci ainsi que l''import et l''export de différentes listes de tâches</p>\r\n\r\n<p>L''application a été réalisée en C++ et Qt (Le langage était imposé pour ce projet).</p>\r\n\r\n<p>Ceci est un projet universitaire, non-complet, il y a donc encore des bugs qui n''ont pas été corrigés ainsi que plein de possibilités d''améliorations.</p>', 'Projet4.png', 'Projet4.zip', '<li>Arnaud Bletterer</li>');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `competenceexperience`
--
ALTER TABLE `competenceexperience`
  ADD CONSTRAINT `FK_COMPETENCE_COMPETENCEEXPERIENCE` FOREIGN KEY (`idCompetence`) REFERENCES `competence` (`idCompetence`),
  ADD CONSTRAINT `FK_EXPERIENCE_COMPETENCEEXPERIENCE` FOREIGN KEY (`idExperience`) REFERENCES `experience` (`idExperience`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
