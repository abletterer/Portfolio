-- phpMyAdmin SQL Dump
-- version 2.6.4-pl3
-- http://www.phpmyadmin.net
-- 
-- Host: db489221540.db.1and1.com
-- Generation Time: Sep 20, 2013 at 08:38 AM
-- Server version: 5.1.71
-- PHP Version: 5.3.3-7+squeeze17
-- 
-- Database: `Portfolio`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `competence`
-- 

CREATE TABLE `competence` (
  `idCompetence` int(11) NOT NULL AUTO_INCREMENT,
  `nomCompetence` varchar(50) NOT NULL,
  `categorieCompetence` varchar(50) NOT NULL,
  `noteCompetence` tinyint(4) NOT NULL,
  PRIMARY KEY (`idCompetence`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `competence`
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
-- Table structure for table `competenceexperience`
-- 

CREATE TABLE `competenceexperience` (
  `idCompetenceExperience` int(11) NOT NULL AUTO_INCREMENT,
  `idCompetence` int(11) NOT NULL,
  `idExperience` int(11) NOT NULL,
  PRIMARY KEY (`idCompetenceExperience`,`idCompetence`,`idExperience`),
  KEY `FK_COMPETENCE_COMPETENCEEXPERIENCE` (`idCompetence`),
  KEY `FK_EXPERIENCE_COMPETENCEEXPERIENCE` (`idExperience`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `competenceexperience`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `experience`
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
-- Dumping data for table `experience`
-- 

INSERT INTO `experience` VALUES (1, 'Premiere experience', '2013-09-04', '2013-09-05', 'Premier employeur', 'Premier emplacement');
INSERT INTO `experience` VALUES (2, 'Deuxieme experience', '2013-09-02', '2013-09-03', 'Deuxième employeur', 'Deuxième emplacement');

-- --------------------------------------------------------

-- 
-- Table structure for table `projet`
-- 

CREATE TABLE `projet` (
  `idProjet` int(11) NOT NULL AUTO_INCREMENT,
  `nomProjet` varchar(50) NOT NULL,
  `descriptionProjet` text NOT NULL,
  `imageProjet` varchar(50) NOT NULL,
  `urlProjet` varchar(50) NOT NULL,
  `auteurProjet` text NOT NULL,
  PRIMARY KEY (`idProjet`),
  UNIQUE KEY `nomProjet` (`nomProjet`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `projet`
-- 

INSERT INTO `projet` VALUES (1, '3DExploration', '<p>Cette application permet d''explorer les fichiers contenu sur le disque dur en représentant les dossiers dans un monde 3D.</p>\r\n\r\n<p>L''application a été réalisée en C++ et OpenGL3.3 (Le langage était imposé pour ce projet).</p>\r\n\r\n<p>Ceci est un projet universitaire, non-complet, il y a donc encore des bugs qui n''ont pas été corrigés ainsi que plein de possibilités d''améliorations.</p>', 'Projet1.png', 'Projet1.zip', '<li>Arnaud Bletterer</li>');
INSERT INTO `projet` VALUES (2, 'Tracé de segment de Bresenham', '<p>Cette application permet de dessiner des lignes brisées ainsi que de remplir le polygone ainsi créé.</p>\r\n\r\n<p>Le but était d''étudier l''implémentation de l''algorithme de tracé de segment de Bresenham.</p>\r\n\r\n<p>L''application a été réalisée en C++ et OpenGL1.2 (Le langage était imposé pour ce projet).</p>\r\n\r\n<p>Ceci est un projet universitaire, non-complet, il y a donc encore des bugs qui n''ont pas été corrigés ainsi que plein de possibilités d''améliorations.</p>', 'Projet2.png', 'Projet2.zip', '<li>Arnaud Bletterer</li>');
INSERT INTO `projet` VALUES (3, 'Simulateur 2D', '<p>Cette application est un simulateur de gravité en 2D, il est possible de choisir le nombre de calculs par seconde, de créer/supprimer des objets (rectangles, cercles).</p>\r\n\r\n<p>Le but était de réaliser une application représentant les collisions entre divers objets.</p>\r\n\r\n<p>L''application a été réalisée en Java (Le langage était imposé pour ce projet).</p>\r\n\r\n<p>Ceci est un projet universitaire, non-complet, il y a donc encore des bugs qui n''ont pas été corrigés ainsi que plein de possibilités d''améliorations.</p>', 'Projet3.png', 'Projet3.zip', '<li>Quentin Fahrner</li> <li>Arnaud Bletterer</li>');
INSERT INTO `projet` VALUES (4, 'Liste de tâches', '<p>Cette application permet de gérer plusieurs listes de tâches. Elle permet la création/suppression/modification de celles-ci ainsi que l''import et l''export de différentes listes de tâches</p>\r\n\r\n<p>L''application a été réalisée en C++ et Qt (Le langage était imposé pour ce projet).</p>\r\n\r\n<p>Ceci est un projet universitaire, non-complet, il y a donc encore des bugs qui n''ont pas été corrigés ainsi que plein de possibilités d''améliorations.</p>', 'Projet4.png', 'Projet4.zip', '<li>Arnaud Bletterer</li>');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `competenceexperience`
-- 
ALTER TABLE `competenceexperience`
  ADD CONSTRAINT `FK_COMPETENCE_COMPETENCEEXPERIENCE` FOREIGN KEY (`idCompetence`) REFERENCES `competence` (`idCompetence`),
  ADD CONSTRAINT `FK_EXPERIENCE_COMPETENCEEXPERIENCE` FOREIGN KEY (`idExperience`) REFERENCES `experience` (`idExperience`);
