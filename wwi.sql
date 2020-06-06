-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 01:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwi`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(4) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `liens_cv_numerique` varchar(255) NOT NULL,
  `liens_cv_pdf` varchar(255) NOT NULL,
  `presentation_etudiant` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `liens_cv_numerique`, `liens_cv_pdf`, `presentation_etudiant`) VALUES
(1, 'Asma', 'Ilès', 'null', 'null', 'Iles, passionné de développement, il s’est occupé de l’intégration de la plateforme. Dynamique et dévoué pour l\'équipe, son objectif était de coder Web Word Islands afin d’en faire un site disponible et accessible pour tous.'),
(2, 'Luu', 'Thanh', 'null', 'null', 'Thanh, l’indispensable graphiste. Sans elle, cette merveilleuse petite île n’aurait jamais été aussi agréable à visiter. Dotée d’un sens artistique très prononcé, elle a également apporté ses idées pour la conception de l’interface.'),
(3, 'Averty', 'Pierre', 'null', 'null', 'Pierre, le brillant chef de projet. Par son naturel plutôt joyeux il a su apporter une très bonne ambiance de groupe. De part ses compétences polyvalentes, il a participé à toutes les tâches du projet et s’est également chargé du développement back-end du projet.'),
(4, 'Bastien', 'Jean-nicanor', 'null', 'null', 'Jean, le chargé de communication, rigoureux, précis et méticuleux il s’est occupé du design et de la rédaction des contenus du site afin de créer une harmonie entre l’interface visuel et le thème du projet.');

-- --------------------------------------------------------

--
-- Table structure for table `metiers`
--

CREATE TABLE `metiers` (
  `id` int(10) NOT NULL,
  `id_quartiers` int(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description_metier` text NOT NULL,
  `bac_2` varchar(255) NOT NULL,
  `bac_3` varchar(255) NOT NULL,
  `bac_5` varchar(255) NOT NULL,
  `salaire` varchar(255) NOT NULL,
  `qualites` text NOT NULL,
  `competences` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metiers`
--

INSERT INTO `metiers` (`id`, `id_quartiers`, `nom`, `description_metier`, `bac_2`, `bac_3`, `bac_5`, `salaire`, `qualites`, `competences`) VALUES
(1, 1, 'Motion designer', '<p>Le motion designer se charge de créer du mouvement à partir d\'une identité visuelle, d\'objets graphiques fixes, de typographies, d’animation 3D, d’effets spéciaux. Il peut également créer du mouvement sans avoir d\'éléments de base sur lesquels s\'appuyer. Son travail est employé dans tous les secteurs friands d\'animations 3D, d\'interactivité et de rich media : publicités, billboards, génériques, habillages TV, animations web, clips musicaux, génériques, cinéma d’animation, etc.\r\n</p>\r\n<p>À la fois créatif et technicien, le motion designer utilise majoritairement des logiciels informatiques pour réaliser ses animations (After effects, Cinéma 4D, Photoshop, Illustrator, Flash etc.) même s\'il maîtrise aussi les techniques du dessin, du cinéma et l\'art de la narration. Durant la réalisation de son projet, le motion designer prend en compte toute une gamme de critères : rythme, typographie, effets de transition… Après avoir vérifié le rendu de son animation, il finit son travail par l’encodage.</p>', 'DUT :\r\nmétiers du multimédia et de l’internet', 'Licence pro :\r\nmétiers du numérique', 'Master :\r\ncinéma et audiovisuel', '2200€ /mois', 'Minutieux,\r\nCréatif,\r\nAutonome,\r\nOrganisé', 'Maîtrise des logiciels numériques,\r\nCommunication digitale,\r\nTechniques audiovisuels'),
(2, 1, 'Vidéaste', '<p>Le vidéaste est un concepteur et réalisateur de programmes vidéo. Dans ce sens, on peut le considérer comme un chargé ou un responsable de la production vidéo dont la mission principale est de concevoir et proposer de nouveaux programmes audiovisuels pour des particuliers ou des professionnels.\r\n</p>\r\n<p>Il peut également travailler dans la production de vidéos destinées au web et, dans ce cas là, le vidéaste doit assurer la gestion, la réalisation et l’animation de tout le projet audiovisuel en optimisant au maximum les moyens techniques et humains.\r\n</p>\r\n<p>Le vidéaste se charge de la mise en œuvre et du suivi des ressources matérielles et humaines dans le cas d’un tournage ou de l’enregistrement d’un projet vidéo. Il doit avoir une grande culture générale pour arriver à communiquer avec divers publics.</p>\r\n', 'DUT : \nmétiers du multimédia et de l’internet', 'Licence :\r\nCinéma', 'Master :\r\ncinéma et audiovisuel', '1900€ /mois', 'Flexible,\r\nEsprit d\'équipe,\r\nMinutieux,\r\nRigoureux', 'Communication digitale,\r\nTechniques audiovisuelles,\r\nEcriture de scénario,\r\nDroit du cinéma'),
(3, 1, 'Sound design', '<p>Le sound designer est responsable de l’illustration sonore d’un produit multimédia. Films, jeux vidéo, sites internet, logiciels, spots publicitaires, jingles ou même attentes téléphoniques... Sa mission est de trouver l’identité sonore la mieux adaptée pour créer une ambiance, captiver l\'attention, appuyer des effets visuels...\r\n</p>\r\n<p>À la fois bruiteur et musicien, le sound designer intervient généralement en phase de postproduction. Pour construire l’habillage sonore de son produit, il conçoit lui-même des trames, mais peut également les commander à des compositeurs ou utiliser les banques de sons.\r\n</p>\r\n<p>Ses domaines d’intervention sont variés : cinéma (conception de la bande son et de la bande originale), multimédia, théâtre (musiques, bruitages, etc.), musique, publicité et marketing (création de logos sonores).\r\n</p>\r\n<p>Le sound designer est avant tout musicien et est ouvert à tous les styles ou époques. En plus de ses connaissances musicales, il doit également avoir de bonnes compétences en informatique et techniques de son ainsi qu\'une bonne culture de l\'image.</p>', 'DUT : \nmétiers du multimédia et de l’internet', 'Licence pro :\r\ntechniques du son et de l\'image', 'Master :\r\ningénierie de l\'image et du son', '2000€ /mois', 'Créatif,\r\nFlexible,\r\nRigoureux,\r\nMinutieux', 'Maîtrise des logiciels numériques,\r\nCommunication digitale,\r\nTechniques audiovisuelles,\r\nGestion du son'),
(4, 1, 'VFX artist', '<p>Le VFX Artiste est un spécialiste de la réalisation d\'effets spéciaux, tant dans l\'industrie cinématographique que dans celle du jeu vidéo. Technicien spécialisé, il se sert de diverses technologies et logiciels afin de créer les effets désirés. Ces derniers peuvent être de plusieurs ordres selon l\'industrie dans laquelle il évolue et la mission qui lui est confiée.\r\n</p>\r\n<p>Ses réalisations reposent sur une alchimie complexe : créer au plus juste des besoins qui lui sont exprimés, tout en faisant en sorte que le spectateur ou le joueur ait un ressenti réaliste de la scène. Utilisant la modélisation 2D ou 3D pour intégrer ses réalisations, le VFX artiste aura aussi pour rôle de s\'assurer de la cohérence et du rythme des scènes, et donc parfois, « d\'effacer » certains oublis qui auraient pu se glisser dans le film ou le jeu vidéo sur lequel il travaille.</p>', 'DUT : \nmétiers du multimédia et de l’internet', 'Licence pro :\r\ntechniques du son et de l\'image', 'Bachelor :\r\ngraphisme digital', '2300€ /mois', 'Rigoureux,\r\nMinutieux,\r\nEsprit d’équipe,\r\nOrganisé', 'Maîtrise des logiciels numériques,\r\nCommunication digitale,\r\nTechniques audiovisuelles'),
(5, 2, 'Responsable de marketing', '<p>Le Responsable Marketing a pour rôle d’établir la stratégie marketing à suivre et s’assure de sa bonne application. \r\n</p>\r\n<p>Pour cela il doit connaître les besoins des clients et également la concurrence. En relation directe avec la direction d’une société, le responsable marketing est impliqué dans la stratégie générale de l’entreprise. \r\n</p>\r\n<p>Son activité principale sera de définir la stratégie commerciale et marketing de l’entreprise. Cette analyse devra également permettre de trouver des opportunités à exploiter et connaître la concurrence. \r\n</p>\r\n<p>Il devra également élaborer un plan marketing grâce à des études marketing aussi bien quantitatives que qualitatives, définir le positionnement, la communication, l’image, la politique de distribution, etc.\r\n</p>\r\n<p>Enfin, au quotidien, il devra manager son équipe et déterminer les moyens stratégiques et de communication à mettre en place.</p>', 'DUT : \nmétiers du multimédia et de l’internet', 'Licence pro :\r\ne-commerce et marketing numérique', 'Master :\r\nmarketing', '2600€ /mois', 'Rigoureux, \r\nEsprit d\'équipe,\r\nLeadership,\r\nAnalytique', 'Connaissance juridique,\r\nMaîtrise marketing et outils informatiques,\r\nCommunication digitale'),
(6, 2, 'Data scientist', '<p>Le Data Scientist a pour mission le traitement et la valorisation de données en grande quantité. En tant que haut responsable, il est chargé d\'établir une stratégie cohérente pour son entreprise. Son rôle consiste à gérer les informations entrantes et à les utiliser à des fins commerciales.\r\n</p>\r\n<p>Ce nouveau métier, reconnu depuis peu dans la sphère du web, est essentiel pour l\'entreprise. Il apporte des informations, impossibles à obtenir par voie classique, en structurant et en manipulant habilement des données complexes. \r\n</p>\r\n<p>Le Data Scientist utilise Internet, les applications multimédias et smartphones pour recueillir le plus grand nombre d\'informations possibles. Après les avoir analysées rigoureusement de façon à établir une stratégie organisationnelle et opérationnelle pour son entreprise, il en tire des solutions marketing, commerciales, de fidélisation clientèle ou encore de valorisation de l\'image de marque. Les sources sont nombreuses et dispersées sur divers réseaux. Les regrouper, les étudier et les synthétiser constituent les principales tâches à effectuer.\r\n</p>\r\n<p>Les informations ainsi récoltées lui permettent de maintenir le positionnement et d\'assurer la compétitivité de son entreprise. Il sait notamment interpréter les problèmes liés au commerce ou au marketing et les transformer en problèmes mathématiques, rechercher les données nécessaires à la résolution des différentes problématiques sur les fournisseurs, les clients, les employés, les produits ou services, trouver des sources de données intéressantes, compléter mais aussi créer ou supprimer des datawarehouse (entrepôt de données) et estimer la valeur des données recueillies. Il est un conseiller émérite au service de la technologie et du numérique. Il contribue à l\'amélioration des performances et à la bonne marche de l\'entreprise.</p>', 'DUT : \nmétiers du multimédia et de l’internet', 'Licence pro : \nInformatique', 'Mastère :\r\ningénierie, big data', '2600€ /mois', 'Analytique,\r\nOrganisé,\r\nRigoureux,\r\nAutonome', 'Maîtrise outils analytiques,\r\nDéveloppement web,\r\nGestion de données,\r\nInformatique'),
(7, 2, 'Chef de projet', '<p>Le chef de projet web a un rôle primordial dans la bonne réalisation d’un projet web comme la création d’un site internet ou d’une campagne de communication web. \r\n</p>\r\n<p>C’est le chef d’orchestre d’une équipe. En effet c’est lui qui coordonne, supervise, prend les décisions et contrôle les actions à mettre en place tout en prenant en compte les délais et le respect des coûts. Son objectif est de réaliser le projet du client en respectant les contraintes prévues au préalable. Pour cela il doit donc réussir à tirer le meilleur de son équipe.  Il recueille les besoins et les contraintes et retranscrit les informations sous forme d’un brief. Il élabore ensuite le planning, le budget et le temps de travail nécessaire. Pendant la phase de production, le chef de projet web coordonne et encadre à la fois les équipes techniques en interne et les prestataires extérieurs. </p>', 'DUT :\r\nmétiers du multimédia et de l’internet', 'Licence pro :\r\nchargé de projet informatique', 'Master :\r\nconduite de projet informatique', '2300€ /mois', 'Leadership,\r\nRigueur,\r\nEsprit d\'équipe,\r\nDisponibilité', 'Management,\r\nDéveloppement web,\r\nCommunication digitale'),
(8, 2, 'Chargé de communication', '<p>Le chargé de communication crée des actions de communication au sein d’une entreprise. Son but : faciliter les relations entreprise / clients ou entreprise / salariés, créer une notoriété pour l’entreprise qu’il représente et l’entretenir. Il doit promouvoir l’image de son entreprise.\r\n</p>\r\n<p>Chaque opération de communication est différente. Le chargé de communication est ainsi amené à réaliser tous types de supports : écrits, oraux, visuels ou encore audiovisuels. Il s’occupe également d’évaluer les retombées de chaque action de communication. Il doit bien sûr adapter son plan de communication à la cible visée : son langage et son style doivent être adaptés au public à qui il s’adresse. Il doit également veiller à respecter certaines règles (droits d’auteurs, etc.)\r\n</p>\r\n<p>Il existe deux types de chargés de communication : externe et interne.\r\n</p>\r\n<p>En externe, le chargé de communication a pour mission de promouvoir l’image de l’entreprise auprès de partenaires extérieurs (clients, fournisseurs…). De part les plans de campagne qu’il met en place, il doit fidéliser sa cible.\r\n</p>\r\n<p>En interne, il s’occupe de développer des actions de communication pour l’entreprise, de fédérer les salariés et de les informer sur les activités de la société et son actualité. Il fait en sorte de renforcer les liens entre salariés via des supports de communication ou l’organisation d’événements (visites d’entreprise, séminaires, …).</p>', 'DUT : \nmétiers du multimédia et de l’internet', 'Licence :\r\ninformation et communication', 'Master :\r\ncommunication', '2300€ /mois', 'Dynamisme,\r\nRigueur,\r\nEsprit d\'équipe,\r\nDisponibilité', 'Maîtrise rédactionnelle,\r\nCommunication digitale,\r\nConnaissances juridiques'),
(9, 2, 'Community manager', '<p>Le community manager, fait partie de ces nouveaux métiers émergents du web. Il joue un double rôle d\'acteur et de spectateur.\r\n</p>\r\n<p>Acteur, car il est chargé de créer une communauté gravitant autour de sa marque ou de son produit sur les médias sociaux, d’étudier les possibilités d\'évolution des outils qu\'il met en place, évaluer les retombées de ses actions et faire remonter le feedback client auprès de son entreprise. Spectateur, car il doit également observer les agissements de sa communauté, se tenir informé sur ses principaux concurrents, et effectuer un travail de veille, c\'est-à-dire, de se tenir informé de l’actualité qui est susceptible d’être mis en relation avec le produit ou la marque qu’il représente.\r\n</p>\r\n<p>Le community manager fait office de médiateur, d\'interface humaine entre la marque qu\'il personnifie et le client qu\'il représente. Il dynamise sa communauté afin d’intéresser de nouvelles personnes sur la marque qu’il incarne, il accueille les nouveaux participants de sa communauté et se charge de rappeler les règles de bonne conduite sur le net quand cela est nécessaire. Force de proposition, c’est également lui qui se charge de transmettre aux équipes techniques les améliorations à apporter sur le site de sa communauté.</p>', 'DUT : \nmétiers du multimédia et de l’internet', 'Licence pro :\r\ncommunication', 'Ecole supérieur :\r\ncommerce', '2000€ /mois', 'Minutieux,\r\nDynamique,\r\nFlexible,\r\nAutonome', 'Maîtrise réseaux sociaux ,\r\nMaîtrise rédactionnelle,\r\nConnaissance du SMO'),
(10, 3, 'Graphiste', '<p>Le graphiste, également appelé designer graphique, conçoit les supports de communication et exprime un message en travaillant sur la forme, la couleur et la typographie, quel que soit le support choisi (affiche, plaquette, site web...). Il utilise pour cela des logiciels professionnels de PAO (Publication Assistée par Ordinateur) et intervient dans différents domaines tels que la typographie, le logotype, la retouche photo, le design packaging, etc.\r\n</p>\r\n<p>Son travail consiste essentiellement à réaliser des visuels qui représentent de manière pertinente le message d\'un produit, d\'une marque, d\'une entreprise. Il a pour mission de leur donner une identité visuelle impactante et cohérente en se basant sur une charte graphique définie (couleurs, typographie, formes…).\r\n</p>\r\n<p>Le graphiste doit posséder un bon coup de crayon, savoir manier les codes visuels (sens de l\'image, code des couleurs, calibrages de textes, mise en page) et avoir une bonne connaissance des différents logiciels de PAO (Photoshop, Illustrator, InDesign…). \r\n</p>\r\n<p>Il doit également se tenir informé des tendances en termes de créations visuelles et être à l\'aise sur tous types de supports. Une imagination et une création sans borne sont indispensables pour exercer ce métier.</p>', 'DUT : \nmétiers du multimédia et de l’internet', 'Licences pro :\r\ncommunication visuelle, graphisme', 'Ecole supérieur :\r\narts appliqués', '2100€ /mois', 'Minutieux,\r\nRigoureux,\r\nAutonome,\r\nFiable', 'Maîtrise des logiciels numériques,\r\nDéveloppement web,\r\nCommunication digitale,\r\nBases en dessin'),
(11, 3, 'Infographiste', '<p>L\'infographiste met en scène l\'information. Il manie les textes et les images pour composer un message clair et efficace. Il réalise des visuels alliant images, photos, dessins, textes et vidéos en utilisant les logiciels de mise en page, de retouche, de création 3D, etc.\r\n</p>\r\n<p>Affiches, brochures, catalogues, emballages, animations… L’infographiste est un “touche-à-tout” qui peut être amené à travailler pour des supports très variés : jeux vidéo, dessins animés, films d’animation, création de pages web, mise en page de catalogues…\r\n</p>\r\n<p>L’infographiste possède la maîtrise du crayon et est à l\'aise avec les outils informatiques. Les logiciels tels que Illustrator, Photoshop, quark Xpress, InDesign n\'ont aucun secret pour lui.</p>', 'DUT : \nmétiers du multimédia et de l’internet', 'Licences pro :\r\ncommunication visuelle graphisme', 'Ecole supérieur :\r\narts appliqués', '2100€ /mois', 'Minutieux,\r\nRigoureux ,\r\nAutonome,\r\nFiable', 'Maîtrise des logiciels numériques,\r\nDéveloppement web,\r\nCommunication digitale,\r\nBases en dessin'),
(12, 3, 'UI/UX designer', '<p>L’UX Designer est en charge de l’expérience utilisateur. C’est-à-dire, d’une plateforme en ligne spécifiquement pensée pour répondre aux attentes de l’internaute. L’UX relève avant tout de l’expérience entre l’utilisateur et la marque. Une marque qui met à disposition ses biens et ses services en ligne. L’optimisation de l‘expérience utilisateur touche à la structure des données et des fonctionnalités mises à disposition de l’utilisateur. Il devra en quelque sorte répondre à des critères déterminants pour les utilisateurs. Des critères tels que l’accessibilité, la visibilité, la simplicité, l’intuition, la crédibilité, la confiance, etc. \r\n</p>\r\n<p>L’UI Designer est chargé de l’amélioration de l’interface utilisateur. Il a pour objectif de rendre la navigation en ligne plus facile et intuitive. Il doit aussi répondre à des codes de design tout en respectant l’identité de la marque. Le travail sur l’interface utilisateur se fait en aval du travail sur l’expérience utilisateur. Il permet d’améliorer le travail d’organisation du contenu, préalablement pensé par l’UX Designer. L’UI consiste à mettre en valeur les éléments graphiques et textuels pour équilibrer les éléments visuels en fonction des objectifs du site web. Par la suite l’UI pourra alors travailler la fluidité des animations, la visibilité d’éléments déterminants et la justesse du design. Tout ceci devra être accord avec la thématique de la plateforme web.\r\n</p>\r\n<p>On pourra dire que l’UI est une partie du travail effectuée sur l’Expérience Utilisateur (UX). Ces deux concepts ne peuvent donc pas être dissociés. Ils font partie d’une globalité qui consiste à améliorer le design et l’organisation d’une plateforme en ligne. Leur idée première est de donner l’envie aux utilisateurs de réutiliser la plateforme.\r\n</p>\r\n<p>Étant récent, il n’y a ni profil type, ni formation spécifique au métier.\r\nCertains de ces designers sont issus de formations classiques liés aux métiers du web, d’autres, de formations universitaires en sciences humaines. Il est cependant préférable de suivre une formation à double cursus alliant les métiers du numérique, des sciences humaines et de psychologie cognitive. </p>', 'DUT : \nmétiers du multimédia et de l’internet', 'Licence pro : \nmétiers du numérique', 'Master : \nDesign', '2200€ /mois', 'Créatif,\r\nEsprit d’équipe,\r\nSens de l’observation,\r\nEmpathique ', 'Maîtrise des logiciels numériques,\r\nDéveloppement web,\r\nCommunication digitale,\r\nPsychologie'),
(13, 3, 'Directeur artistique', '<p>Le directeur artistique gère la conception graphique d\'un projet de A à Z. Son rôle est de traduire en images les souhaits du client pour le produit à mettre en avant. À lui de gérer le visuel (spots télé, pages de publicité, affiches, etc) d\'une campagne de publicité.\r\n</p>\r\n<p>Il tient compte des supports choisis et met en valeur les textes du concepteur rédacteur. Il doit également veiller à ce que le projet sur lequel il travaille reste fidèle à l\'idée du client et au concept retenu.\r\n</p>\r\n<p>Il doit ainsi, à l\'aide de son équipe, pouvoir mettre en forme un produit publicitaire à partir d\'une stratégie de communication définie par le service commercial de l\'agence pour laquelle il travaille.\r\n</p>\r\n<p>Le directeur artistique doit posséder une grande imagination, être créatif mais aussi curieux et être doté d\'un bon sens de l\'esthétique. Il doit également avoir de bonnes connaissances en PAO (publication assistée par ordinateur). Observateur, il fait attention aux évolutions de la société et aux modes afin de toujours être dans la tendance du moment.</p>', 'DUT :\r\nmétiers du multimédia et de l’internet', 'Licence :\r\nArt', 'Ecole supérieure :\r\narts appliqués', '2300€ /mois', 'Esprit d’équipe,\r\nCréatif,\r\nCurieux,\r\nMinutieux', 'Maîtrise des logiciels numériques,\r\nCommunication digitale,\r\nManagement,\r\nBases en dessin'),
(14, 4, 'Webmaster', '<p>Le métier d’un webmaster tourne autour de la conception et de la gestion de sites internet. Il met en place l’architecture générale du site en respectant les recommandations de la charte graphique.\r\n</p>\r\n<p>Généralement, c’est également lui qui met le site en ligne et qui le maintient en fonctionnement. Il le met à jour quand c’est nécessaire (mise à jour technique et mise à jour du contenu).\r\n</p>\r\n<p>Il assure également la sécurité et la conformité du site avec la législation. En d’autres termes, il est responsable du contenu du site : rédaction des rubriques, ajout des images, des vidéos, gestion des forums, etc.</p>', 'DUT :\r\nmétiers du multimédia et de l’internet', 'Licence pro :\r\nInformatique', 'École d\'ingénieur :\ninformatique ', '2200€ /mois', 'Rigoureux,\r\nEsprit d\'équipe,\r\nFlexible,\r\nOrganisé', 'Développement web ,\r\nInformatique,\r\nMaîtrise des logiciels numériques'),
(15, 4, 'Intégrateur web', '<p>L’intégrateur web, dont le métier est voisin de celui du développeur web, est chargé de produire, traduire puis transposer les maquettes fournies par l’équipe graphique en langage informatique. \r\n</p>\r\n<p>Son rôle consiste à monter les pages d’un site Web en y assemblant tous les éléments des maquettes graphiques (textes, images, sons) dans le respect des normes et des standards. Pour mettre en page le site Web, l’intégrateur web utilise plusieurs langages informatiques : le HTML (contenant l’information), le CSS (pour la mise en forme), le Javascript (pour accroître les fonctionnalités des pages). \r\n</p>\r\n<p>Pièce maîtresse de la réalisation de tout site Web,l’intégrateur web collabore au quotidien avec l’équipe créative, les développeurs et les chefs de projet. Il est le garant du respect des spécifications techniques et du design.</p>', 'DUT :\r\nmétiers du multimédia et de l’internet', 'Licence pro :\r\nmétiers du numérique', '<span class=\"null\"></span>', '1800€ /mois', 'Rigoureux,\r\nAutonome,\r\nFlexible,\r\nOrganisé', 'Développement web,\r\nMaîtrise des logiciels numériques,\r\nCommunication digitale'),
(16, 4, 'Developpeur web', '<p>Le développeur web, conçoit l\'arborescence de sites internet en ayant recours à différents langages de programmation. S\'il n\'a pas à se soucier des choix graphiques et des contenus des sites pour lesquels il travaille, c\'est de lui que dépend le fonctionnement harmonieux de ces éléments. Il peut aussi bien créer des sites sur mesure qu’intervenir sur des sites déjà existants en proposant des solutions concrètes.\r\n</p>\r\n<p>La conception de pages visibles du public s\'accompagne souvent d\'un lourd travail sur l\'espace dédié aux administrateurs du site (le back-office). Cette double implication, à la fois interne et externe, explique le rôle majeur joué par le développeur web dans les entreprises liées à Internet.\r\n</p>\r\n<p>Le développeur web s’occupe également du suivi technique du site et fait preuve de réactivité pour proposer des solutions et rectifier rapidement tout dysfonctionnement.</p>', 'DUT :\r\nmétiers du multimédia et de l’internet', 'Licence pro :\r\nInformatique', 'École d\'ingénieur :\ninformatique ', '2400€ /mois', 'Rigoureux,\r\nAutonome,\r\nFlexible,\r\nOrganisé', 'Développement web, \r\nInformatique,\r\nMaîtrise SEO\r\n'),
(17, 4, 'Gestionnaire de réseaux', '<p>Le développeur web, conçoit l\'arborescence de sites internet en ayant recours à différents langages de programmation. S\'il n\'a pas à se soucier des choix graphiques et des contenus des sites pour lesquels il travaille, c\'est de lui que dépend le fonctionnement harmonieux de ces éléments. Il peut aussi bien créer des sites sur mesure qu’intervenir sur des sites déjà existants en proposant des solutions concrètes.\r\n</p>\r\n<p>La conception de pages visibles du public s\'accompagne souvent d\'un lourd travail sur l\'espace dédié aux administrateurs du site (le back-office). Cette double implication, à la fois interne et externe, explique le rôle majeur joué par le développeur web dans les entreprises liées à Internet.\r\n</p>\r\n<p>Le développeur web s’occupe également du suivi technique du site et fait preuve de réactivité pour proposer des solutions et rectifier rapidement tout dysfonctionnement.</p>', 'DUT :\r\nmétiers du multimédia et de l’internet', 'Licence :\r\nInformatique', 'École d\'ingénieur :\ninformatique ', '2100€ /mois', 'Rigoureux,\r\nEsprit d\'équipe,\r\nFlexible,\r\nOrganisé,', 'Informatique,\r\nGestion de données,\r\nSystèmes d’exploitation PC, serveurs et routeurs');

-- --------------------------------------------------------

--
-- Table structure for table `quartiers`
--

CREATE TABLE `quartiers` (
  `id` int(4) NOT NULL,
  `nom_quartier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quartiers`
--

INSERT INTO `quartiers` (`id`, `nom_quartier`) VALUES
(1, 'audiovisuel'),
(2, 'communication'),
(3, 'design'),
(4, 'developpement'),
(5, 'mmi'),
(6, 'a propos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metiers`
--
ALTER TABLE `metiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quartiers`
--
ALTER TABLE `quartiers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `metiers`
--
ALTER TABLE `metiers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `quartiers`
--
ALTER TABLE `quartiers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
