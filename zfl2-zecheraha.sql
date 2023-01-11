-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 27 avr. 2022 à 18:39
-- Version du serveur :  10.3.9-MariaDB-log
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `zfl2-zecheraha`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_actualite_acte`
--

CREATE TABLE `t_actualite_acte` (
  `acte_numero` int(11) NOT NULL,
  `acte_titre` varchar(40) NOT NULL,
  `acte_text` varchar(300) NOT NULL,
  `acte_date_pub` date NOT NULL,
  `cpte_pseudo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_actualite_acte`
--

INSERT INTO `t_actualite_acte` (`acte_numero`, `acte_titre`, `acte_text`, `acte_date_pub`, `cpte_pseudo`) VALUES
(21908490, 'Nouvelle season bokuno_hero', 'épisode 1', '2021-09-01', 'VALMARC'),
(21908491, 'le dernier episode de one piece', 'episode 1015', '2022-01-28', 'gEstionnaire'),
(21908787, 'nouvelle épisode bokuno_hero', 'épisode 17', '2021-10-14', 'houdazzaoui'),
(21908788, 'dernier épisode huner_x_hunter', 'épisode 148', '2022-02-21', 'gEstionnaire'),
(21908789, 'Combat attendu luffy_VS_kaido', 'épisode 1009', '2021-12-19', 'Berbenjamin');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire_com`
--

CREATE TABLE `t_commentaire_com` (
  `com_numero` int(11) NOT NULL,
  `com_date_heure` datetime NOT NULL,
  `com_etat` char(1) NOT NULL,
  `com_text` varchar(300) NOT NULL,
  `vis_numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_commentaire_com`
--

INSERT INTO `t_commentaire_com` (`com_numero`, `com_date_heure`, `com_etat`, `com_text`, `vis_numero`) VALUES
(123456, '2022-04-26 11:16:20', 'P', 'C\'est un joueur de ouef je suis trés excite pour la prochane ', 766734221),
(123456721, '2022-04-26 11:18:13', 'P', 'C\'est magnifique', 766734224),
(123456789, '2022-04-26 11:15:06', 'P', 'C\'est un combat de ouef je suis trés excite pour la prochane épisode', 766734212),
(614183725, '2022-01-29 13:01:36', 'P', 'Ohhhh c\'est super la nouvelle epesode est tres genial....', 766734211),
(614183726, '2022-01-31 16:17:00', 'P', 'C\'est un combat de ouef je suis trés excite pour la prochane épisode', 766734210);

-- --------------------------------------------------------

--
-- Structure de la table `t_compte_cpte`
--

CREATE TABLE `t_compte_cpte` (
  `cpte_pseudo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cpte_mot_de_passe` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_compte_cpte`
--

INSERT INTO `t_compte_cpte` (`cpte_pseudo`, `cpte_mot_de_passe`) VALUES
('', '83ea007bfdd589f29b820552b3f94260'),
('Berbenjamin', '9f112bc52a09fc35e9320089d7e37480'),
('EVE86', '83ea007bfdd589f29b820552b3f94260'),
('Fatimazaech', '83ea007bfdd589f29b820552b3f94260'),
('Julien2002', 'ee0e91bbb15a6872eaed80dab969a331'),
('VALMARC', '83ea007bfdd589f29b820552b3f94260'),
('amine123', '83ea007bfdd589f29b820552b3f94260'),
('damien10', 'b4d637f189e4eac28ab9ad87b0f93766'),
('emilie@LP', 'ecbcdf04140169f96e4c2ffbb070bdec'),
('gEstionnaire', '98abb15e560057e55e4e99187702ed4e'),
('hamza123456', '83ea007bfdd589f29b820552b3f94260'),
('hamza12356', '83ea007bfdd589f29b820552b3f94260'),
('houdazzaoui', '83ea007bfdd589f29b820552b3f94260'),
('jonathen25', '40ee456fabd5331ccad0d65408a02dfb'),
('oe77', '83ea007bfdd589f29b820552b3f94260'),
('steev_123', 'd656ec86d2e4221093f7d5c56f99328c'),
('www', 'df483402b9bfeb234717a32c6e86280e'),
('xoxo', '83ea007bfdd589f29b820552b3f94260');

-- --------------------------------------------------------

--
-- Structure de la table `t_configuration_conf`
--

CREATE TABLE `t_configuration_conf` (
  `conf_initule` varchar(80) NOT NULL,
  `conf_date_debut` date NOT NULL,
  `conf_date_fin` date NOT NULL,
  `conf_presentaion` varchar(100) NOT NULL,
  `conf_lieu` varchar(100) NOT NULL,
  `conf_date_presentation` date NOT NULL,
  `conf_text_bienv` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_configuration_conf`
--

INSERT INTO `t_configuration_conf` (`conf_initule`, `conf_date_debut`, `conf_date_fin`, `conf_presentaion`, `conf_lieu`, `conf_date_presentation`, `conf_text_bienv`) VALUES
('Exposition des projets des étudiants ', '2022-01-02', '2022-04-29', 'presentation d\'une site web de sujet de manga', 'departement d\'un informatique Université de bretagne occidentale', '2022-04-30', 'Venez découvrir les réalisations des étudiants de Licence Informatique ! On\r\nattend votre visite !');

-- --------------------------------------------------------

--
-- Structure de la table `t_exposant_expo`
--

CREATE TABLE `t_exposant_expo` (
  `expo_id` int(11) NOT NULL,
  `expo_nom` varchar(80) NOT NULL,
  `expo_prenom` varchar(80) NOT NULL,
  `expo_text_bio` varchar(100) NOT NULL,
  `expo_email` varchar(100) NOT NULL,
  `expo_url_site_web` varchar(200) NOT NULL,
  `expo_fichier_img` varchar(200) NOT NULL,
  `cpte_pseudo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_exposant_expo`
--

INSERT INTO `t_exposant_expo` (`expo_id`, `expo_nom`, `expo_prenom`, `expo_text_bio`, `expo_email`, `expo_url_site_web`, `expo_fichier_img`, `cpte_pseudo`) VALUES
(1234567890, 'Eiichirō ', 'Oda', 'Eiichirō Oda est un mangaka  né le 1er janvier 1975 à Kumamoto au Japon.', 'oda.eiichiro@gmail.com', 'https://fr.wikipedia.org/wiki/Eiichir%C5%8D_Oda#Biographie', 'oda.jpg', 'gEstionnaire'),
(1234567891, 'Kōhei ', 'Horikoshi', 'Kōhei Horikoshi  est un mangaka japonais, né le 20 novembre 1986 dans la préfecture d\'Aichi', 'KOhei.Horikoshi@gmail.com', 'https://fr.wikipedia.org/wiki/K%C5%8Dhei_Horikoshi', 'horikoshi.jpg', 'houdazzaoui'),
(1234567892, 'Togashi', 'Yoshihiro ', 'Yoshihiro Togashi est un mangaka japonais né le 27 avril 1966 à Shinjō, préfecture de Yamagata', 'Yoshihiro.Togashi@hotmail.fr', 'https://fr.wikipedia.org/wiki/Yoshihiro_Togashi', 'togashi.jpg', 'gEstionnaire'),
(1234567893, 'Masashi ', 'Kishimoto', 'Masashi Kishimoto est un mangaka et un scénariste japonais né le 8 novembre 1974 à Nagi au Japon.', 'MasashiKishimoto@gmail.com', 'https://fr.wikipedia.org/wiki/Masashi_Kishimoto', 'kishimoto.jpg', 'VALMARC'),
(1234567894, 'Riichirō ', 'Inagaki', 'Riichirō Inagaki , né le 20 juin 1976 (45 ans) à Tokyo, Japon, est un mangaka', 'Riichirō-Inagaki@yahoo.fr', 'https://fr.wikipedia.org/wiki/Riichir%C5%8D_Inagaki', 'inagaki.jpg', 'VALMARC');

-- --------------------------------------------------------

--
-- Structure de la table `t_oeuvre_ovre`
--

CREATE TABLE `t_oeuvre_ovre` (
  `ovre_code` int(11) NOT NULL,
  `ovre_initule` varchar(80) NOT NULL,
  `ovre_date_creation` date NOT NULL,
  `ovre_description` varchar(300) DEFAULT NULL,
  `ovre_fichier_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_oeuvre_ovre`
--

INSERT INTO `t_oeuvre_ovre` (`ovre_code`, `ovre_initule`, `ovre_date_creation`, `ovre_description`, `ovre_fichier_img`) VALUES
(601362478, 'Dr.Stone', '2017-03-06', 'Dr. Stone (ドクターストーン, Dokutā Sutōn?), également stylisé Dr.STONE, est un shōnen manga japonais écrit par Riichirō Inagaki et dessiné par Boichi1. Il est prépublié dans le magazine Weekly Shōnen Jump de Shūeisha depuis le 6 mars 20172', 'drstorne.jpeg'),
(601362479, 'NORUTO SHIPODEN', '1999-09-12', 'Naruto shipoden est un shōnen manga écrit et dessiné par Masashi Kishimoto. Naruto a été prépublié dans l\'hebdomadaire Weekly Shōnen Jump de l\'éditeur Shūeisha entre septembre 1999 et novembre 2014. La série a été compilée en 72 tomes.', 'naruto.jpg'),
(601362480, 'Hunter × Hunter', '1998-03-01', 'Hunter × Hunter (ハンターハンター, Hantā Hantā?) est un shōnen manga écrit et dessiné par Yoshihiro Togashi. Il est pré-publié depuis mars 1998 dans l\'hebdomadaire Weekly Shōnen Jump de l\'éditeur Shūeisha, et a été compilé en trente-six tomes au 4 octobre 2018. En mai 2013.', 'Hunter-x-Hunter.jpg'),
(601362481, 'One Piece', '1997-07-22', 'One Piece (ワンピース, Wan Pīsu?) est une série de mangas shōnen créée par Eiichirō Oda. Elle est prépubliée depuis le 22 juillet 1997 dans le magazine hebdomadaire Weekly Shōnen Jump, puis regroupée en volumes reliés aux éditions Shūeisha depuis le 24 décembre 1997.', 'onr piece.jpg'),
(601362482, 'My Hero Academia', '2014-07-01', 'My Hero Academia (僕のヒーローアカデミア, Boku no Hīrō Akademia?) est un shōnen manga écrit et dessiné par Kōhei Horikoshi. Il est pré-publié depuis juillet 2014 dans le magazine Weekly Shōnen Jump de l\'éditeur Shūeisha,', 'bokuno hero.jpg'),
(601362483, 'POKUMON', '1998-07-07', 'POKUMON  est un shōnen manga écrit et dessiné par XXXXXXX. \r\n Il est pré-publié depuis juillet 1998 dans le magazine Weekly Shōnen Jump de l\'éditeur XXXX,', 'pokemone.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `t_presentation_pre`
--

CREATE TABLE `t_presentation_pre` (
  `expo_id` int(11) NOT NULL,
  `ovre_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_presentation_pre`
--

INSERT INTO `t_presentation_pre` (`expo_id`, `ovre_code`) VALUES
(1234567890, 601362483),
(1234567891, 601362482),
(1234567891, 601362483),
(1234567892, 601362480),
(1234567893, 601362479),
(1234567894, 601362478);

-- --------------------------------------------------------

--
-- Structure de la table `t_profil_pfl`
--

CREATE TABLE `t_profil_pfl` (
  `pfl_nom` varchar(80) NOT NULL,
  `pfl_prenom` varchar(80) NOT NULL,
  `pfl_email` varchar(100) NOT NULL,
  `pfl_role` char(1) NOT NULL,
  `pfl_validite` char(1) NOT NULL,
  `pfl_date` date NOT NULL,
  `cpte_pseudo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_profil_pfl`
--

INSERT INTO `t_profil_pfl` (`pfl_nom`, `pfl_prenom`, `pfl_email`, `pfl_role`, `pfl_validite`, `pfl_date`, `cpte_pseudo`) VALUES
('bbbb', 'bbbb', 'hamza.echerarhi@gmail.com', 'A', 'A', '2022-04-26', 'hamza123456'),
('BERNARD', 'Benjamin', 'Benjamin.Bernard@univ-brest.fr', 'A', 'A', '2022-01-28', 'Berbenjamin'),
('echerarhi', 'hamza', 'hamza.echerarhi@gmail.com', 'A', 'A', '2018-01-28', 'gEstionnaire'),
('ECHERRARHI', 'Fatimazahra', 'fatimazahra.echerrarhi@gmail.com', 'O', 'A', '2022-01-28', 'Fatimazaech'),
('EL AZZAOUI', 'Houda', 'Houda.elazzaoui@gmail.com', 'O', 'A', '2020-01-28', 'houdazzaoui'),
('hamzaa', 'cherari', 'hamza.echerarhi@gmail.com', 'A', 'A', '2022-04-26', 'hamza123456'),
('jaabari', 'amine', 'amine.jaabari@gmail.com', 'A', 'A', '2022-03-24', 'amine123'),
('jonaten', 'philipe', 'jonaten.philipe@gmail.com', 'O', 'D', '2018-01-28', 'jonathen25'),
('LE HIR', 'EVE', 'EVE@GMAIL.COM', 'O', 'A', '2022-04-26', 'EVE86'),
('LE PARC', 'Emilie', 'emilie.le.perc@hotmail.fr', 'O', 'A', '2021-01-28', 'emilie@LP'),
('LEPOULE', 'Steev', 'steev.lepoule@gmail.com', 'O', 'D', '2022-01-28', 'steev_123'),
('MORVAN', 'Julien', 'julienmorvan@hotmail.fr', 'O', 'A', '2022-01-28', 'Julien2002'),
('o\'lerie', 'eve', 'oe@gmail.com', 'O', 'A', '2022-03-25', 'oe77'),
('VALERIE', 'MARC', 'Valerie.Marc@univ-brest.fr', 'A', 'A', '2018-01-28', 'VALMARC'),
('www', 'www', 'wwww@gmail.com', 'O', 'A', '2022-04-26', 'www'),
('xxxxxx', 'xxxxx', 'xxxx@gmail.com', 'A', 'A', '2022-04-22', 'xoxo'),
('xxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'hamza.echerarhi@gmail.com', 'A', 'A', '2022-04-26', 'hamza123456');

-- --------------------------------------------------------

--
-- Structure de la table `t_visiteur_vis`
--

CREATE TABLE `t_visiteur_vis` (
  `vis_numero` int(11) NOT NULL,
  `vis_mot_de_passe` char(32) NOT NULL,
  `vis_date_heure` datetime NOT NULL,
  `vis_nom` varchar(80) DEFAULT NULL,
  `vis_prenom` varchar(80) DEFAULT NULL,
  `vis_email` varchar(100) DEFAULT NULL,
  `cpte_pseudo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_visiteur_vis`
--

INSERT INTO `t_visiteur_vis` (`vis_numero`, `vis_mot_de_passe`, `vis_date_heure`, `vis_nom`, `vis_prenom`, `vis_email`, `cpte_pseudo`) VALUES
(766734210, '25f9e794323b453885f5181f1b624d0b', '2022-01-29 12:16:07', 'leman', 'alexandra', 'alexandra.leman@hotmail.fr', 'gEstionnaire'),
(766734211, 'ff830ec7bf01a834bc75f11d9c6fe217', '2022-01-31 16:09:42', 'le parc', 'Natalie', 'natalie-leparc@hmail.com', 'emilie@LP'),
(766734212, '6c3e226b4d4795d518ab341b0824ec29', '2022-03-25 06:09:07', 'NULL', 'NULL', 'NULL', 'amine123'),
(766734221, '0f7e44a922df352c05c5f73cb40ba115', '2022-01-31 16:19:07', 'STEEV', 'DOMINO', 'deletdomino@hotmail.fr', 'gEstionnaire'),
(766734222, '83ea007bfdd589f29b820552b3f94260', '2022-04-25 10:51:51', 'fadwa', 'fadwa', 'fadwa@gmail.ccom', 'VALMARC'),
(766734224, '83ea007bfdd589f29b820552b3f94260', '2022-04-25 10:52:43', 'NULL', 'NULL', 'NULL', 'VALMARC'),
(766734227, '8f60c8102d29fcd525162d02eed4566b', '2022-04-25 10:57:18', 'fadwa', 'fadwa', 'fadwa', 'VALMARC'),
(766734228, '13bc99c98b0276b05df3c70db2c41d63', '2022-04-25 10:57:32', 'fadwa', 'fadwa', 'fadwa', 'VALMARC'),
(766734229, '83ea007bfdd589f29b820552b3f94260', '2022-04-26 01:40:07', 'fadwa', 'fadwa', 'fadwa', 'gEstionnaire'),
(766734231, '6c9395cacd317eed2777f669103b7181', '2022-04-26 04:04:29', NULL, NULL, NULL, 'gEstionnaire'),
(766734232, '83ea007bfdd589f29b820552b3f94260', '2022-04-26 04:05:59', NULL, NULL, NULL, 'gEstionnaire'),
(766734233, 'e807f1fcf82d132f9bb018ca6738a19f', '2022-04-26 04:10:30', NULL, NULL, NULL, 'gEstionnaire'),
(766734234, '7694f4a66316e53c8cdd9d9954bd611d', '2022-04-26 04:51:48', NULL, NULL, NULL, 'gEstionnaire'),
(766734235, '83ea007bfdd589f29b820552b3f94260', '2022-04-26 13:46:28', NULL, NULL, NULL, 'gEstionnaire');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_actualite_acte`
--
ALTER TABLE `t_actualite_acte`
  ADD PRIMARY KEY (`acte_numero`),
  ADD KEY `cpte_pseudo` (`cpte_pseudo`);

--
-- Index pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  ADD PRIMARY KEY (`com_numero`),
  ADD UNIQUE KEY `vis_numero` (`vis_numero`);

--
-- Index pour la table `t_compte_cpte`
--
ALTER TABLE `t_compte_cpte`
  ADD PRIMARY KEY (`cpte_pseudo`);

--
-- Index pour la table `t_configuration_conf`
--
ALTER TABLE `t_configuration_conf`
  ADD PRIMARY KEY (`conf_initule`);

--
-- Index pour la table `t_exposant_expo`
--
ALTER TABLE `t_exposant_expo`
  ADD PRIMARY KEY (`expo_id`),
  ADD KEY `cpte_pseudo` (`cpte_pseudo`);

--
-- Index pour la table `t_oeuvre_ovre`
--
ALTER TABLE `t_oeuvre_ovre`
  ADD PRIMARY KEY (`ovre_code`);

--
-- Index pour la table `t_presentation_pre`
--
ALTER TABLE `t_presentation_pre`
  ADD PRIMARY KEY (`expo_id`,`ovre_code`),
  ADD KEY `ovre_code` (`ovre_code`);

--
-- Index pour la table `t_profil_pfl`
--
ALTER TABLE `t_profil_pfl`
  ADD PRIMARY KEY (`pfl_nom`),
  ADD KEY `cpte_pseudo` (`cpte_pseudo`);

--
-- Index pour la table `t_visiteur_vis`
--
ALTER TABLE `t_visiteur_vis`
  ADD PRIMARY KEY (`vis_numero`),
  ADD KEY `cpte_pseudo` (`cpte_pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  MODIFY `com_numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=614183734;

--
-- AUTO_INCREMENT pour la table `t_exposant_expo`
--
ALTER TABLE `t_exposant_expo`
  MODIFY `expo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567895;

--
-- AUTO_INCREMENT pour la table `t_visiteur_vis`
--
ALTER TABLE `t_visiteur_vis`
  MODIFY `vis_numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=766734236;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_actualite_acte`
--
ALTER TABLE `t_actualite_acte`
  ADD CONSTRAINT `t_actualite_acte_ibfk_1` FOREIGN KEY (`cpte_pseudo`) REFERENCES `t_compte_cpte` (`cpte_pseudo`);

--
-- Contraintes pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  ADD CONSTRAINT `t_commentaire_com_ibfk_1` FOREIGN KEY (`vis_numero`) REFERENCES `t_visiteur_vis` (`vis_numero`);

--
-- Contraintes pour la table `t_exposant_expo`
--
ALTER TABLE `t_exposant_expo`
  ADD CONSTRAINT `t_exposant_expo_ibfk_1` FOREIGN KEY (`cpte_pseudo`) REFERENCES `t_compte_cpte` (`cpte_pseudo`);

--
-- Contraintes pour la table `t_presentation_pre`
--
ALTER TABLE `t_presentation_pre`
  ADD CONSTRAINT `t_presentation_pre_ibfk_1` FOREIGN KEY (`expo_id`) REFERENCES `t_exposant_expo` (`expo_id`),
  ADD CONSTRAINT `t_presentation_pre_ibfk_2` FOREIGN KEY (`ovre_code`) REFERENCES `t_oeuvre_ovre` (`ovre_code`);

--
-- Contraintes pour la table `t_profil_pfl`
--
ALTER TABLE `t_profil_pfl`
  ADD CONSTRAINT `t_profil_pfl_ibfk_1` FOREIGN KEY (`cpte_pseudo`) REFERENCES `t_compte_cpte` (`cpte_pseudo`);

--
-- Contraintes pour la table `t_visiteur_vis`
--
ALTER TABLE `t_visiteur_vis`
  ADD CONSTRAINT `t_visiteur_vis_ibfk_1` FOREIGN KEY (`cpte_pseudo`) REFERENCES `t_compte_cpte` (`cpte_pseudo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
