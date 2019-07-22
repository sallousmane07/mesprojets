 -- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Juillet 2019 à 00:58
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tp_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE IF NOT EXISTS `publication` (
`id_pub` int(11) NOT NULL,
  `sujet` varchar(750) NOT NULL,
  `texte` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `publication`
--

INSERT INTO `publication` (`id_pub`, `sujet`, `texte`, `id_user`) VALUES
(1, 'jljk', 'dklpfdùfssssssssssssssssssmmdknflnklsflsjflksjlfjdflsflksjlfksmfmls4dfkmdlk4dlmdùls', 3),
(2, 'fdijojfo', 'kljflkjdslmkjfn', 4),
(3, 'La vie fait tt ce qu''elle veut', 'je ne sais pas ce que tu veux dire', 6),
(11, 'ttttttttttttttt', 'ttttttttttttttttttttttttttttttttttttttttttttt', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `login` varchar(250) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `profil` varchar(40) NOT NULL DEFAULT 'ADMINISTRATEUR',
  `statu` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `email`, `tel`, `login`, `mdp`, `profil`, `statu`) VALUES
(3, 'sall', 'babacar', 'jdjkfl', '773834265', 'bass55', 'ousmane', 'ADMINISTRATEUR', 1),
(4, 'ousmane', 'sall', 'ouz@gmail.com', '64444444444444', 'ouz155', '77383465', 'ADMINISTRATEUR', 1),
(6, 'sall', 'fatou', 'ouz9Â°9+4Â°@GJL', 'hlkd', 'ouz1557dfdd', '}}}', 'UTILISATEUR SIMPLE', 1),
(7, 'ngom', 'bassirou', 'ngombass@gmail.com', '778565366', 'bassNgom', 'bassirou', 'ADMINISTRATEUR', 1),
(8, 'dff', 'fdf', 'dfjdlkf', '73388', '455', 'fdfdsfd', 'UTILISATEUR SIMPLE', 1),
(9, 'dff', 'fdf', 'dfjdlkf', '73388', '455fdsfd', 'fdfd', 'ADMINISTRATEUR', 1),
(10, 'djlkf', 'dfd', 'dfeeklk', '77383556', '5656d565f', 'dlfkjj,', 'UTILISATEUR SIMPLE', 0),
(11, 'sall', 'ousmane', 'djkhl', 'jkhfjdhjkfh', 'ouzzz', 'fdsf', 'ADMINISTRATEUR', 0),
(12, 'dofj', 'oifu', 'oi', 'uoi', 'uoi', 'iou', 'ADMINISTRATEUR', 0),
(13, 'dfdsf', 'df', 'dfds', 'fdfd', 'fedf', 'f', 'ADMINISTRATEUR', 0),
(14, 'mangane', 'mouhamed', 'ouz', 'jlkdf', 'jlkj', 'mangane', 'ADMINISTRATEUR', 0),
(15, 'Ngom', 'Bassirou', 'bass', '*77777777', 'bass', 'passer', 'ADMINISTRATEUR', 0),
(16, 'ngom', 'Bassirou', 'dfjdlkf', '73388', 'basse', 'passer', 'ADMINISTRATEUR', 0),
(17, 'fd', 'fds', 'fsdfsd', 'df', 'nn', 'passer', 'ADMINISTRATEUR', 0),
(18, 'Ass', 'Assoumane', 'ass@gmail.com', '773834265', 'ass', 'passer', 'ADMINISTRATEUR', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
 ADD PRIMARY KEY (`id_pub`), ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
ADD CONSTRAINT `pub_use_fkey` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
