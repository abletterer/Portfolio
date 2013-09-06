-- phpMyAdmin SQL Dump
-- version 2.6.4-pl3
-- http://www.phpmyadmin.net
-- 
-- Serveur: db489221540.db.1and1.com
-- Généré le : Vendredi 06 Septembre 2013 à 10:38
-- Version du serveur: 5.1.71
-- Version de PHP: 5.3.3-7+squeeze17
-- 
-- Base de données: `db489221540`
-- 
CREATE DATABASE IF NOT EXISTS `portfolio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `portfolio`;

-- --------------------------------------------------------

-- 
-- Structure de la table `competence`
-- 

CREATE TABLE `competence` (
  `idCompetence` int(11) NOT NULL AUTO_INCREMENT,
  `nomCompetence` varchar(50) NOT NULL,
  `categorieCompetence` varchar(50) NOT NULL,
  `noteCompetence` tinyint(4) NOT NULL,
  PRIMARY KEY (`idCompetence`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Contenu de la table `competence`
-- 

INSERT INTO `competence` VALUES (1, 'PHP', 'Web', 80);
INSERT INTO `competence` VALUES (2, 'HTML5', 'Web', 70);
INSERT INTO `competence` VALUES (3, 'CSS3', 'Web', 70);
INSERT INTO `competence` VALUES (4, 'JavaScript', 'Web', 80);
INSERT INTO `competence` VALUES (5, 'Java', 'Génie Logiciel', 75);
INSERT INTO `competence` VALUES (6, 'C#', 'Génie Logiciel', 60);
INSERT INTO `competence` VALUES (7, 'C', 'Génie Logiciel', 70);
INSERT INTO `competence` VALUES (8, 'C++', 'Génie Logiciel', 75);
INSERT INTO `competence` VALUES (9, 'Coq', 'Génie Logiciel', 50);

-- --------------------------------------------------------

-- 
-- Structure de la table `competenceExperience`
-- 

CREATE TABLE `competenceExperience` (
  `idCompetenceExperience` int(11) NOT NULL AUTO_INCREMENT,
  `idCompetence` int(11) NOT NULL,
  `idExperience` int(11) NOT NULL,
  PRIMARY KEY (`idCompetenceExperience`,`idCompetence`,`idExperience`),
  KEY `FK_COMPETENCE_COMPETENCEEXPERIENCE` (`idCompetence`),
  KEY `FK_EXPERIENCE_COMPETENCEEXPERIENCE` (`idExperience`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Contenu de la table `competenceExperience`
-- 


-- --------------------------------------------------------

-- 
-- Structure de la table `experience`
-- 

CREATE TABLE `experience` (
  `idExperience` int(11) NOT NULL AUTO_INCREMENT,
  `nomExperience` varchar(50) NOT NULL,
  `dateDebutExperience` date NOT NULL,
  `dateFinExperience` date DEFAULT NULL,
  `employeurExperience` varchar(50) NOT NULL,
  `emplacementExperience` varchar(50) NOT NULL,
  PRIMARY KEY (`idExperience`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Contenu de la table `experience`
-- 

INSERT INTO `experience` VALUES (1, 'Premiere experience', '2013-09-04', '2013-09-05', 'Premier employeur', 'Premier emplacement');
INSERT INTO `experience` VALUES (2, 'Deuxieme experience', '2013-09-02', '2013-09-03', 'Deuxième employeur', 'Deuxième emplacement');

-- --------------------------------------------------------

-- 
-- Structure de la table `projet`
-- 

CREATE TABLE `projet` (
  `idProjet` int(11) NOT NULL AUTO_INCREMENT,
  `nomProjet` varchar(50) NOT NULL,
  `descriptionProjet` text NOT NULL,
  `imageProjet` varchar(50) NOT NULL,
  `urlProjet` varchar(50) NOT NULL,
  PRIMARY KEY (`idProjet`),
  UNIQUE KEY `nomProjet` (`nomProjet`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Contenu de la table `projet`
-- 

INSERT INTO `projet` VALUES (1, 'Premier projet', 'Le premier projet que j''ai réalisé', 'ImageTest.png', 'Chemin/Vers/LURL/PremierProjet');
INSERT INTO `projet` VALUES (2, 'Deuxieme projet', 'Le Deuxieme projet que j''ai réalisé', 'ImageTest.png', 'Chemin/Vers/LURL/DeuxiemeProjet');

-- 
-- Contraintes pour les tables exportées
-- 

-- 
-- Contraintes pour la table `competenceExperience`
-- 
ALTER TABLE `competenceExperience`
  ADD CONSTRAINT `FK_EXPERIENCE_COMPETENCEEXPERIENCE` FOREIGN KEY (`idExperience`) REFERENCES `experience` (`idExperience`),
  ADD CONSTRAINT `FK_COMPETENCE_COMPETENCEEXPERIENCE` FOREIGN KEY (`idCompetence`) REFERENCES `competence` (`idCompetence`);
