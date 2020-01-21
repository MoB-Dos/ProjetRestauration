-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 21 Janvier 2020 à 11:01
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projetrestauration`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `stockagecompte`
--

CREATE TABLE IF NOT EXISTS `stockagecompte` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(20) COLLATE utf8_bin NOT NULL,
  `nom` varchar(20) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(20) COLLATE utf8_bin NOT NULL,
  `mdp2` text COLLATE utf8_bin NOT NULL,
  `mdp` text COLLATE utf8_bin NOT NULL,
  `mail` varchar(50) COLLATE utf8_bin NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=33 ;

--
-- Contenu de la table `stockagecompte`
--

INSERT INTO `stockagecompte` (`id`, `login`, `nom`, `prenom`, `mdp2`, `mdp`, `mail`, `admin`) VALUES
(1, 'a', 'a', 'a', '1', '', 'a', 0),
(3, 'b', 'b', 'b', '92', '', 'b', 0),
(4, 'g', 'g', 'g', '0', '', 'g', 0),
(5, 'h', 'h', 'h', '2510c39011c5be704182423e3a695e91', '', 'h', 0),
(6, 'Artios', 'Aggoun', 'Adam', '81dc9bdb52d04dc20036dbd8313ed055', '', 'artios@gmail.com', 0),
(7, 'y', 'y', 'y', 'b6d767d2f8ed5d21a44b0e5886680cb9', '', 'y', 0),
(14, 'zz', 'zz', 'zz', '25ed1bcb423b0b7200f485fc5ff71c8e', '', 'e.birba@lprs.Fr', 0),
(15, 'Trasko', 'YALAP', 'Thomas', '81dc9bdb52d04dc20036dbd8313ed055', '', 'T.yalap@lprs.fr ', 0),
(16, 'DekerTca', 'Serva', 'Theo', '81dc9bdb52d04dc20036dbd8313ed055', '', 'servatheo971@gmail.com', 0),
(17, 'd', 'd', 'd', '8277e0910d750195b448797616e091ad', '', 'd', 0),
(18, 'e', 'e', 'e', 'd41d8cd98f00b204e9800998ecf8427e', '', 'e@gmail.com', 0),
(19, 'test', 'test', 'test', 'd41d8cd98f00b204e9800998ecf8427e', '', 'test@gmail.com', 0),
(20, 'lol', 'lol', 'lol', 'e7af287f7c896a07485ff47fed078512', '', 'lol@gmail.com', 0),
(21, 't', 't', 't', '7682fe272099ea26efe39c890b33675b', '', 't@gmail.com', 0),
(22, 'Sugoi', 'fontaine', 'ryan', 'd41d8cd98f00b204e9800998ecf8427e', '', 'r.fontaine@lprs.fr', 0),
(23, 'ptdr', 'ptdr', 'ptdr', 'e10adc3949ba59abbe56e057f20f883e', '', 'ptdr@gmail.com', 0),
(24, 'MarionBinks', 'LePen', 'Marion', 'e10adc3949ba59abbe56e057f20f883e', '', 'LePenDansLeBinks@gmail.com', 0),
(25, 'mob', 'mob', 'mob', 'e10adc3949ba59abbe56e057f20f883e', '', 'mob@gmail.com', 0),
(26, 'carmone', 'carmone', 'alexandre', 'e10adc3949ba59abbe56e057f20f883e', '', 'carmone@gmaim.com', 0),
(27, 'A', 'A', 'A', 'AAAAAA', '', 'A@gmail.com', 0),
(29, 'z', 'z', 'z', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'z@gmail.com', 0),
(30, 'wx', 'wx', 'wx', 'ab4f63f9ac65152575886860dde480a1', 'azerty', 'wx@', 1),
(32, 'az', 'az', 'az', '560f6c297fa06fcddb6bf4cdcb801554', 'azertyu', 'az@', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
