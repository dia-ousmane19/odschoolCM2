-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 23, 2020 at 11:26 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `odschoolCM2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cm2`
--

CREATE TABLE `admin_cm2` (
  `id_admin` int(11) NOT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL,
  `etat` varchar(20) DEFAULT NULL,
  `nom_complet` varchar(70) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `photo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_cm2`
--

INSERT INTO `admin_cm2` (`id_admin`, `pseudo`, `password`, `statut`, `etat`, `nom_complet`, `sexe`, `photo`) VALUES
(1, 'admin', '$2y$10$j.rxuzB6Ptt1JjCVim.Wbu3vY4eNupvCenECAVFmNyQwgAtyRsIKy', 'admin', 'active', 'ousmane dia', 'homme', 'img_avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `chapitre`
--

CREATE TABLE `chapitre` (
  `id_chapitre` int(11) NOT NULL,
  `titre_chapitre` varchar(100) DEFAULT NULL,
  `contenu_chapitre` longtext,
  `link_chapitre` varchar(255) NOT NULL,
  `matiere_id_matiere` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapitre`
--

INSERT INTO `chapitre` (`id_chapitre`, `titre_chapitre`, `contenu_chapitre`, `link_chapitre`, `matiere_id_matiere`, `date`) VALUES
(1, 'cours 1', '<p><u><span style=\"font-size:18px\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></u><br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'cours-1', 19, '2020-08-23 11:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaires` int(11) NOT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `contenu_commentaire` longtext,
  `chapitre_id_chapitre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `domaine`
--

CREATE TABLE `domaine` (
  `id_domaine` int(11) NOT NULL,
  `domaine` varchar(70) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `classe_icone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `domaine`
--

INSERT INTO `domaine` (`id_domaine`, `domaine`, `url`, `classe_icone`) VALUES
(1, 'Langue et communication', 'langue-et-communication', 'fas fa-american-sign-language-interpreting'),
(2, 'éducation à la science et à la vie sociale', 'education-a-la-science-et-a-la-vie-sociale', 'fas fa-graduation-cap'),
(3, 'Mathématiques', 'Mathematiques', 'fas fa-divide');

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `id_matiere` int(11) NOT NULL,
  `matiere` varchar(70) DEFAULT NULL,
  `link_matiere` varchar(255) NOT NULL,
  `domaine_id_domaine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `matiere`, `link_matiere`, `domaine_id_domaine`) VALUES
(19, 'Grammaire', 'grammaire', 1),
(20, 'Vocabulaire', 'vocabulaire', 1),
(21, 'Conjugaison', 'conjugaison', 1),
(22, 'Orthographe', 'orthographe', 1),
(23, 'Production d\'écrit', 'production-ecrite', 1),
(24, 'Vivre ensemble', 'vivre-ensemble', 2),
(25, 'Vivre dans son milieu', 'vivre-dans-son-milieu', 2),
(26, 'Histoire', 'histoire', 2),
(27, 'Géographie', 'geographie', 2),
(28, 'Initiation à la science et à la technologie', 'initiation-a-la-science-et-a-la-technologie', 2),
(29, 'Activité numérique', 'activite-numerique', 3),
(30, 'Activité de mesure', 'activite-de-mesure', 3),
(31, 'Activité de résolution de problème', 'activite-de-resolution-de-probleme', 3),
(32, 'Activité géométrique', 'activite-geometrique', 3);

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

CREATE TABLE `presentation` (
  `id_presentation` int(11) NOT NULL,
  `presentation` longtext,
  `matiere_id_matiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`id_presentation`, `presentation`, `matiere_id_matiere`) VALUES
(1, 'Qu’est-ce qu’apprendre le vocabulaire?\r\nC’est d’une part, apprendre à connaitre les relations entre les mots et les choses, c’est-à-dire être capable de désigner les objets ou les notions.\r\nC’est aussi connaître les relations qui existent entre les mots (mots dérivés, synonymes, contraires…).\r\nC’est enfin apprendre à utiliser les mots selon les circonstances et selon la situation de communication.', 20),
(2, 'L’enseignement de la grammaire est soumis aux impératifs de la communication. Le maître doit enseigner, non seulement un savoir théorique (un ensemble de règles), mais surtout un savoir-faire qui leur permettra de s’exprimer facilement en français.\r\nCependant il faut noter l’existence de différentes sortes de grammaires : \r\nGrammaire occasionnelle et grammaire systématique : la première est celle que l’on fait lors d’autres activités d’apprentissage, et la seconde est celle faite lors des séances prévues dans l’emploi du temps et la progression.\r\nGrammaire implicite et grammaire explicite : la grammaire implicite est acquise par imprégnation.\r\nGrammaire de phrase et grammaire de texte : certaines notions ne peuvent être acquises dans le cadre de la phrase. Le sens d’une phrase peut dépendre souvent du contexte, et si la grammaire est un outil pour la communication, il est plus pertinent de l’utiliser dans des situations plus vastes que la phrase.', 19),
(3, 'Sur le plan des considérations générales, la conjugaison doit avoir le même traitement que la grammaire.\r\nLes activités portent spécifiquement sur les verbes et leurs différentes variations en relation avec les personnes, les modes, les temps. La conjugaison s’articule autour deux objectifs :\r\n       Pratique : maîtriser la langue afin de pouvoir comprendre et s’exprimer dans des situations de communication\r\n       Théorique : réfléchir sur le fonctionnement de la langue et être capable d’une certaine abstraction\r\n', 21),
(4, 'Les difficultés de l’orthographe s’expliquent historiquement : l’orthographe voudrait transcrire les sons de la langue mais cette tâche se révèle impossible puisque le français parlé compte 36 sons (12 voyelles, 4 voyelles nasales, 3 semi-voyelles et 17 consonnes) alors que l’alphabet ne compte que 26 lettres. Les solutions adoptées pour surmonter ce handicap sont multiples et souvent contradictoires et il n’y a aucune logique parfois. Ainsi, il arrive qu’une lettre ne représente aucun son (lettre muette), représente un son représenté déjà par un autre son (le c qui se lit comme g dans second), représente deux sons (comme le x=ks dans maximum)\r\n', 22),
(5, 'L’expression écrite, ou pour être plus actuel la production d’écrits constitue l’activité de synthèse des apprentissages de la langue que sont la lecture, la grammaire, le vocabulaire, la conjugaison et l’orthographe.', 23),
(6, 'L’histoire est définie comme étant la connaissance du passé, du passé en tant que ce qui n’est plus présent aujourd’hui, ou de ce qui est présent aujourd’hui et ayant été réalisé hier. C’est dire que toute étude du milieu implique la connaissance du passé.\r\nElle étudie l’évolution de l’homme, ses relations avec les milieux et avec les phénomènes naturels à travers le temps.\r\nElle permet ainsi à l’enfant d’appréhender le temps qui s’est déjà écoulé, de mieux comprendre les transformations subies par le milieu et d’orienter son action dans le futur. Aussi est-elle une activité d’éveil.\r\nL’histoire contribue, ce faisant, à une prise en conscience de notre responsabilité. Elle développe également l’identité nationale, l’enfant éprouvant le sentiment qu’il appartient avec ses autres concitoyens à un même passé.', 26),
(7, 'La géographie donne des repères à l’enfant lui permettant d’appréhender l’espace, de comprendre l’organisation du monde. Elle met en évidence la solidarité et la complémentarité indispensable entre les différents éléments qui composent le milieu.\r\nLa géographie qui est ainsi une composante de l’étude du milieu permet également de localiser, de décrire et d’expliquer l’espace et les activités qui s’y déroulent.\r\nEn somme, c’est une science qui circonscrit son objet sur l’étude des corrélations entre les composantes de l’espace.', 27),
(8, 'L’initiation scientifique et technologique aide l’enfant à l’école élémentaire à se départir des connaissances empiriques qui foisonnent dans son milieu. Elle permet d’accéder à une découverte véritable fondée sur l’objectivité par le biais de l’expérimentation ce qui est en fait une activité d’éveil.\r\nEn effet, la science est une école de rigueur et d’objectivité qui permet à l’enfant de construire progressivement certains concepts (vivant, causalité, phénomènes physiques…).\r\nL’initiation scientifique et technologique se réalise ainsi à l’école élémentaire à travers certaines disciplines comme la biologie, la géologie, la technologie, la physique, la chimie, etc.', 28),
(9, 'Vivre ensemble reprend les anciennes disciplines d’éducation civique, morale et sanitaire en mettant en relief des thèmes d’actualités. Il s’agit de renforcer l’harmonie, la cohésion, la solidarité au sein du groupe.\r\n', 24),
(10, 'Vivre dans son milieu est l’une des activités disciplinaires du domaine ESVS. Cette activité devient une insertion de l’enfant dans son milieu sous l’angle d’une gestion rationnelle des ressources et du respect des équilibres. Il aborde des thèmes majeurs tels que l’environnement, la population et la santé.', 25),
(11, 'De nos jours, la géométrie est de plus en plus définie non plus comme la science de la mesure de la terre mais comme celle des relations spatiales. C’est pourquoi les programmes actuels ne s’intéressent qu’aux constructions géométriques, les éléments de calcul de périmètre, de surface et de volume relevant de la mesure. La géométrie permet à l’enfant de structurer l’espace et de se familiariser avec quelques figures géométriques.', 32),
(12, 'Ce n’est plus l’étude du « système métrique » conçu comme le système décimal des poids et mesures ayant pour base le mètre, institué en France le 16 avril 1795. Un enseignement dans ce sens semble aujourd’hui dépassé. \r\nDepuis l’introduction des Nouveaux Programmes de 1987, il est question de « mesure ». La notion de mesure et les activités correspondantes ont un rôle très important à l’école élémentaire, tant en mathématiques que dans d’autres disciplines (dans les activités à dominante scientifique particulièrement en biologie et technologie). L’objectif principal de la mesure n’est plus simplement la familiarisation de l’enfant avec les unités légales comme en système métrique, mais plutôt :', 30),
(13, 'A l’école élémentaire, la numération est l’étude des nombres, c’est-à-dire l’étude du système et des conventions permettant d’écrire, de nommer et d’effectuer des calculs sur les nombres. Le nombre entier naturel se définit comme le cardinal d’un ensemble fini. Ce cardinal, propriété de l’ensemble, est le nombre d’éléments. Ainsi, le nombre est la propriété commune à plusieurs ensembles ayant le même cardinal. \r\nLe nombre présente divers « aspects » dont trois fondamentaux : L’aspect cardinal, l’aspect ordinal et l’aspect nombre-mesure.\r\n', 29),
(14, 'Dans le domaine pédagogique, le concept de problème renvoie à la notion de situation-problème. C’est une question ou une difficulté qui appelle un traitement de résolution. Mais, « il n’y a de problème que lorsque le sujet ne dispose pas des connaissances nécessaires pour réaliser un traitement immédiat de la situation ». De ce point de vue, un problème est toujours relatif, d’une personne à une autre, d’un moment à un autre. Ce qui est un problème pour l’élève X, ne l’est pas pour l’élève Y ; et ce qui est un problème pour l’élève X lui-même aujourd’hui, peut ne plus l’être demain, quand il aura acquis de nouvelles connaissances.', 31);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nom_complet` varchar(70) DEFAULT NULL,
  `url_nom_complet` varchar(100) NOT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `a_propos` longtext,
  `sexe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nom_complet`, `url_nom_complet`, `tel`, `photo`, `email`, `a_propos`, `sexe`) VALUES
(3, 'Soyoubou diagne', 'Soyoubou-diagne', '783499654', 'img_avatar.png', 'soyouboudiagne10@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'homme'),
(4, 'prof 1', 'prof-1', '770003300', 'img_avatar.png', 'prof@prof1.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'homme'),
(5, 'prof2', 'prof-2', '733501710', 'img_avatar_fem.png', 'prof2@prof2.net', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'femme');

-- --------------------------------------------------------

--
-- Table structure for table `profil_chapitre`
--

CREATE TABLE `profil_chapitre` (
  `profil_id_profil` int(11) NOT NULL,
  `chapitre_id_chapitre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profil_chapitre`
--

INSERT INTO `profil_chapitre` (`profil_id_profil`, `chapitre_id_chapitre`) VALUES
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nom_complet` varchar(45) DEFAULT NULL,
  `niveau` varchar(45) DEFAULT NULL,
  `civilite` varchar(20) DEFAULT NULL,
  `statut` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `pseudo`, `password`, `nom_complet`, `niveau`, `civilite`, `statut`) VALUES
(1, 'admin', '$2y$10$YsYGbbJ7.8t5YvXuB0ux1.1CNY/K1jmUN8L5zWDZLKCa0GI8x7wzW', 'admin', 'cm2', 'homme', 'support'),
(7, 'ousmane', '$2y$10$m9.5og2g7QE3lUY3WFUm9.TLHrbAU/4.j/sivcum.HH9UGGSabzmK', 'dieumb', 'qdqdqd', 'homme', 'etudiant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cm2`
--
ALTER TABLE `admin_cm2`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `chapitre`
--
ALTER TABLE `chapitre`
  ADD PRIMARY KEY (`id_chapitre`),
  ADD KEY `fk_chapitre_matiere1_idx` (`matiere_id_matiere`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaires`),
  ADD KEY `fk_commentaires_chapitre1_idx` (`chapitre_id_chapitre`);

--
-- Indexes for table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`id_domaine`);

--
-- Indexes for table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id_matiere`),
  ADD KEY `fk_matiere_domaine1_idx` (`domaine_id_domaine`);

--
-- Indexes for table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id_presentation`),
  ADD KEY `fk_presentation_matiere_idx` (`matiere_id_matiere`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `profil_chapitre`
--
ALTER TABLE `profil_chapitre`
  ADD PRIMARY KEY (`profil_id_profil`,`chapitre_id_chapitre`),
  ADD KEY `fk_profil_has_chapitre_chapitre1_idx` (`chapitre_id_chapitre`),
  ADD KEY `fk_profil_has_chapitre_profil1_idx` (`profil_id_profil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cm2`
--
ALTER TABLE `admin_cm2`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chapitre`
--
ALTER TABLE `chapitre`
  MODIFY `id_chapitre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `id_domaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id_matiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id_presentation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapitre`
--
ALTER TABLE `chapitre`
  ADD CONSTRAINT `fk_chapitre_matiere1` FOREIGN KEY (`matiere_id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `fk_commentaires_chapitre1` FOREIGN KEY (`chapitre_id_chapitre`) REFERENCES `chapitre` (`id_chapitre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `fk_matiere_domaine1` FOREIGN KEY (`domaine_id_domaine`) REFERENCES `domaine` (`id_domaine`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presentation`
--
ALTER TABLE `presentation`
  ADD CONSTRAINT `fk_presentation_matiere` FOREIGN KEY (`matiere_id_matiere`) REFERENCES `matiere` (`id_matiere`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profil_chapitre`
--
ALTER TABLE `profil_chapitre`
  ADD CONSTRAINT `fk_profil_has_chapitre_chapitre1` FOREIGN KEY (`chapitre_id_chapitre`) REFERENCES `chapitre` (`id_chapitre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profil_has_chapitre_profil1` FOREIGN KEY (`profil_id_profil`) REFERENCES `profil` (`id_profil`) ON DELETE NO ACTION ON UPDATE NO ACTION;
