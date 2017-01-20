-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Ven 20 Janvier 2017 à 20:39
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `micro_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `date` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`, `user_id`) VALUES
(21, 'vvv\r\n', 1484665634, 3),
(22, 'aaaa', 1484665769, 3),
(23, 'bbbbb', 1484665856, 3),
(24, 'bbb', 1484666163, 3),
(25, 'hjlk ', 1484666172, 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilis` int(30) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(1000) NOT NULL,
  `sid` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `pseudo` varchar(200) NOT NULL,
  PRIMARY KEY (`id_utilis`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilis`, `email`, `mdp`, `sid`, `nom`, `prenom`, `pseudo`) VALUES
(3, 'Moi', 'e807f1fcf82d132f9bb018ca6738a19f', 0, '', '', ''),
(4, 'vous', '47bce5c74f589f4867dbd57e9ca9f808', 0, 'aaa', 'aaaa', 'aaa'),
(5, 'ggg', '633de4b0c14ca52ea2432a3c8a5c4c31', 0, 'gjk', 'fgffg', 'ff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
