-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 27 Septembre 2017 à 16:30
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tuto`
--

-- --------------------------------------------------------

--
-- Structure de la table `advise`
--

CREATE TABLE IF NOT EXISTS `advise` (
`id` int(10) unsigned NOT NULL,
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `localite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `note` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `advise`
--

INSERT INTO `advise` (`id`, `userName`, `userEmail`, `localite`, `message`, `note`, `created_at`, `updated_at`) VALUES
(1, 'marcel ', 'm.d@gmail.com', 'hannut', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida odio eu suscipit gravida. Curabitur ultricies libero nulla, id blandit erat tristique a. Etiam a lacus sit amet orci scelerisque auctor vulputate quis leo.  Integer congue id tortor non pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in leo at justo mollis ultrice', 4.5, '2017-09-22 06:40:37', '2017-09-22 06:40:37'),
(2, 'damien', 'd.d@ulg.be', 'boncelles', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida odio eu suscipit gravida. Curabitur ultricies libero nulla, id blandit erat tristique a. Etiam a lacus sit amet orci scelerisque auctor vulputate quis leo. Sed congue laoreet lacus nec scelerisque. In ipsum nisl, rutrum vel mollis ut, consequat vel tortor. Aenean in varius libero, a fermentum sem. Integer congue id tortor non pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in leo at justo mollis ultrice', 5, '2017-09-22 07:20:35', '2017-09-22 07:20:35'),
(3, 'Hugo', 'icariblabla@live.com', 'Lisbonne', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida odio eu suscipit gravida. Curabitur ultricies libero nulla, id blandit erat tristique a. Etiam a lacus sit amet orci scelerisque auctor vulputate quis leo. Sed congue laoreet lacus nec scelerisque. In ipsum nisl, rutrum vel mollis ut, consequat vel tortor. Aenean in varius libero, a fermentum sem. Integer congue id tortor non pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in leo at justo mollis ultrice', 4, '2017-09-22 07:24:02', '2017-09-22 07:24:02'),
(4, 'Giséle', 'gigi@live.be', 'Marcinelle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida odio eu suscipit gravida. Curabitur ultricies libero nulla, id blandit erat tristique a. Etiam a lacus sit amet orci scelerisque auctor vulputate quis leo. Sed congue laoreet lacus nec scelerisque. In ipsum nisl, rutrum vel mollis ut, consequat vel tortor. Aenean in varius libero, a fermentum sem. Integer congue id tortor non pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in leo at justo mollis ultrice', 3, '2017-09-23 13:37:50', '2017-09-23 13:37:50'),
(5, 'Louise', 'loulou@hotmail.com', 'Geer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida odio eu suscipit gravida. Curabitur ultricies libero nulla, id blandit erat tristique a. Etiam a lacus sit amet orci scelerisque auctor vulputate quis leo. Sed congue laoreet lacus nec scelerisque. In ipsum nisl, rutrum vel mollis ut, consequat vel tortor. Aenean in varius libero, a fermentum sem. Integer congue id tortor non pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in leo at justo mollis ultrice', 2.5, '2017-09-24 15:19:28', '2017-09-24 15:19:29'),
(6, 'Jeanne', 'jj@gmail.com', 'Grand-axhe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida odio eu suscipit gravida. Curabitur ultricies libero nulla, id blandit erat tristique a. Etiam a lacus sit amet orci scelerisque auctor vulputate quis leo. Sed congue laoreet lacus nec scelerisque. In ipsum nisl, rutrum vel mollis ut, consequat vel tortor. Aenean in varius libero, a fermentum sem. Integer congue id tortor non pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in leo at justo mollis ultrice', 4, '2017-09-24 15:20:31', '2017-09-24 15:20:32'),
(7, 'Marie-christine', 'mma@live.com', 'Waremme', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida odio eu suscipit gravida. Curabitur ultricies libero nulla, id blandit erat tristique a. Etiam a lacus sit amet orci scelerisque auctor vulputate quis leo. Sed congue laoreet lacus nec scelerisque. In ipsum nisl, rutrum vel mollis ut, consequat vel tortor. Aenean in varius libero, a fermentum sem. Integer congue id tortor non pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in leo at justo mollis ultrice', 1.5, '2017-09-24 15:21:33', '2017-09-24 15:21:34'),
(8, 'Denis', 'ddal@proximus.be', 'huy', ' Aenean in varius libero, a fermentum sem. Integer congue id tortor non pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in leo at justo mollis ultrice', 4.5, '2017-09-24 15:22:09', '2017-09-24 15:22:10'),
(9, 'liliane', 'lili12@gmail.com', 'Braive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida odio eu suscipit gravida. Curabitur ultricies libero nulla, id blandit erat tristique a. Etiam a lacus sit amet orci scelerisque auctor vulputate quis leo. Sed congue laoreet lacus nec scelerisque. In ipsum nisl, rutrum vel mollis ut, consequat vel tortor. Aenean in varius libero, ', 5, '2017-09-24 15:23:15', '2017-09-24 15:23:15'),
(10, 'Pierre', 'pepeLou@live.be', 'Hannut', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida odio eu suscipit gravida. Curabitur ultricies libero nulla, id blandit erat tristique a. Etiam a lacus sit amet orci scelerisque auctor vulputate quis leo. Sed congue laoreet lacus nec scelerisque. In ipsum nisl, rutrum vel mollis ut, consequat vel tortor. Aenean in varius libero, a fermentum sem. Integer congue id tortor non pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec in leo at justo mollis ultrice', 2, '2017-09-24 15:24:06', '2017-09-24 15:24:09'),
(11, 'freddy', 'frefre@hotmail.com', 'Geer', 'blablbalbalbalbalablablaalabl blbalblfbalbalfblbfl', 4, '2017-09-27 05:13:48', '2017-09-27 05:13:48');

-- --------------------------------------------------------

--
-- Structure de la table `buffets`
--

CREATE TABLE IF NOT EXISTS `buffets` (
`id` int(10) unsigned NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Contenu de la table `buffets`
--

INSERT INTO `buffets` (`id`, `nom`, `prix`, `description`, `created_at`, `updated_at`) VALUES
(14, 'Buffet Terre et Mer', '21.40', 'Assortiment de charcuteries :\r\nroulade de jambon, chiffonnade de parme aux fruits de saison, trio de boudins artisanaux, filet de dinde, saucisson, pilons de poulets.\r\nAssortiment de poissons :\r\nSaumon fumé, tomate crevettes, truite fumée.\r\nAssortiment de crudités :\r\nSalade mixte et sa vinaigrette, salade de pomme de terre estivale, salade de tomates oignons rouges et piment d’Espelette, salade de pâtes du chef, carottes râpées, trio de sauces maison…….', '2017-08-13 14:24:20', '2017-08-13 14:24:20'),
(15, 'Royale', '28.90', 'Assortiment de charcuteries : roulade de jambon, chiffonnade de parme aux fruits de saison, trio de boudins artisanaux, filet de dinde, saucisson, pilons de poulets. Assortiment de poissons : Saumon fumé, tomate crevettes, truite fumée. Assortiment de crudités : Salade mixte et sa vinaigrette, salade de pomme de terre estivale, salade de tomates oignons rouges et piment d’Espelette, salade de pâtes du chef, carottes râpées, trio de sauces maison……. ', '2017-08-18 08:38:13', '2017-08-18 08:38:13'),
(18, 'tets123123', '12.72', 'nvjdO%NVJqodv,nD£', '2017-09-27 08:27:18', '2017-09-27 09:32:55');

-- --------------------------------------------------------

--
-- Structure de la table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
`id` int(10) unsigned NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `emails`
--

INSERT INTO `emails` (`id`, `email`) VALUES
(1, 'fredmoras8@gmail.com'),
(2, 'fredattack@gmail.com'),
(3, 'f.moras@truc.ne');

-- --------------------------------------------------------

--
-- Structure de la table `famillesandwiche_sandwiche`
--

CREATE TABLE IF NOT EXISTS `famillesandwiche_sandwiche` (
`id` int(10) unsigned NOT NULL,
  `familleSandwiche_id` int(10) unsigned NOT NULL,
  `sandwiche_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `famillesplats`
--

CREATE TABLE IF NOT EXISTS `famillesplats` (
`id` int(10) unsigned NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `famillesplats`
--

INSERT INTO `famillesplats` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Entrées', '2017-07-30 15:55:11', '2017-07-30 15:55:12'),
(2, 'Plats', '2017-07-30 15:55:32', '2017-07-30 15:55:34'),
(3, 'Dessert', '2017-07-30 15:55:46', '2017-07-30 15:55:47'),
(4, 'Accompagnements', '2017-07-30 15:55:58', '2017-07-30 15:55:59'),
(5, 'Divers', '2017-07-31 19:57:39', '2017-07-31 19:57:39');

-- --------------------------------------------------------

--
-- Structure de la table `famille_sandwiches`
--

CREATE TABLE IF NOT EXISTS `famille_sandwiches` (
`id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `famille_sandwiches`
--

INSERT INTO `famille_sandwiches` (`id`, `nom`) VALUES
(3, 'chauds'),
(1, 'classics'),
(4, 'originaux'),
(2, 'spéciaux');

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

CREATE TABLE IF NOT EXISTS `ingredients` (
`id` int(10) unsigned NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Contenu de la table `ingredients`
--

INSERT INTO `ingredients` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(21, 'Tomate', NULL, NULL),
(22, 'Carotte', NULL, NULL),
(23, 'Pommes', NULL, NULL),
(24, 'Noix', NULL, NULL),
(25, 'Poivrons', NULL, NULL),
(26, 'Oignons', NULL, NULL),
(27, 'Anchoix', NULL, NULL),
(28, 'Roquette', NULL, NULL),
(29, 'Thon', NULL, NULL),
(30, 'Parmesan', NULL, NULL),
(31, 'Piments fort', '2017-07-23 05:03:55', '2017-07-23 05:03:55'),
(32, 'cacahuétes', '2017-07-23 05:06:31', '2017-07-23 05:06:31'),
(33, 'patate douce', '2017-07-23 20:30:51', '2017-07-23 20:30:51'),
(34, 'Dés de poulet ', '2017-07-28 11:10:53', '2017-07-28 11:10:53'),
(35, 'Brie de meau', '2017-07-28 20:22:04', '2017-07-28 20:22:04'),
(36, 'Laitue Iceberg', '2017-07-29 19:28:29', '2017-07-29 19:28:29'),
(38, 'Saumon Fumé', '2017-07-29 19:39:16', '2017-07-29 19:39:16'),
(40, 'Sirop de liège', '2017-07-29 19:43:25', '2017-07-29 19:43:25'),
(41, 'Oignons Hachés', '2017-07-29 19:44:36', '2017-07-29 19:44:36'),
(42, 'Boulette Maison', '2017-07-29 19:46:51', '2017-07-29 19:46:51'),
(43, 'Merguez', '2017-07-29 19:49:38', '2017-07-29 19:49:38'),
(44, 'Omelette aux lardons', '2017-07-29 19:52:42', '2017-07-29 19:52:42'),
(45, 'Feta', '2017-07-29 19:58:42', '2017-07-29 19:58:42'),
(46, 'Jambon Fumé', '2017-07-29 20:01:01', '2017-07-29 20:01:01'),
(47, 'Thon Mayonnaise', '2017-07-29 20:02:04', '2017-07-29 20:02:04'),
(48, 'Aubergines grillées', '2017-07-29 20:06:48', '2017-07-29 20:06:48'),
(49, 'Filet de Dinde', '2017-07-29 20:07:46', '2017-07-29 20:07:46'),
(50, 'Fromage Blanc', '2017-07-29 20:10:12', '2017-07-29 20:10:12'),
(51, 'Copeau de parmesan', '2017-07-31 20:12:02', '2017-07-31 20:12:02'),
(52, 'Beurre Demi-sel', '2017-08-08 06:13:16', '2017-08-08 06:13:16'),
(53, 'gloubiboulga', '2017-08-29 07:01:02', '2017-08-29 07:01:02'),
(55, 'chutney de poire', '2017-09-27 05:56:10', '2017-09-27 05:56:10');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient_salade`
--

CREATE TABLE IF NOT EXISTS `ingredient_salade` (
`id` int(10) unsigned NOT NULL,
  `salade_id` int(10) unsigned NOT NULL,
  `ingredient_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=74 ;

--
-- Contenu de la table `ingredient_salade`
--

INSERT INTO `ingredient_salade` (`id`, `salade_id`, `ingredient_id`) VALUES
(35, 5, 21),
(36, 5, 25),
(37, 5, 26),
(38, 5, 27),
(39, 5, 28),
(40, 5, 29),
(41, 5, 30),
(42, 6, 21),
(43, 6, 26),
(44, 6, 27),
(45, 6, 28),
(46, 6, 30),
(47, 6, 34),
(48, 7, 21),
(49, 7, 28),
(50, 7, 34),
(51, 7, 40),
(52, 7, 41),
(53, 7, 51),
(71, 15, 25),
(72, 15, 41),
(73, 15, 49);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient_sandwiche`
--

CREATE TABLE IF NOT EXISTS `ingredient_sandwiche` (
`id` int(10) unsigned NOT NULL,
  `sandwiche_id` int(10) unsigned NOT NULL,
  `ingredient_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=78 ;

--
-- Contenu de la table `ingredient_sandwiche`
--

INSERT INTO `ingredient_sandwiche` (`id`, `sandwiche_id`, `ingredient_id`) VALUES
(1, 2, 21),
(2, 2, 29),
(7, 2, 22),
(8, 2, 23),
(9, 3, 23),
(10, 3, 24),
(11, 3, 28),
(12, 3, 34),
(13, 2, 28),
(14, 2, 31),
(15, 2, 35),
(21, 4, 21),
(22, 4, 27),
(23, 4, 31),
(29, 4, 21),
(33, 6, 27),
(34, 6, 34),
(35, 6, 26),
(36, 6, 30),
(37, 6, 21),
(42, 10, 52),
(43, 10, 46),
(44, 11, 27),
(45, 11, 42),
(46, 11, 22),
(47, 11, 45),
(48, 12, 27),
(49, 12, 22),
(50, 12, 24),
(51, 12, 28),
(52, 16, 52),
(53, 16, 46),
(54, 16, 30),
(55, 16, 33),
(56, 16, 21),
(57, 9, 42),
(58, 9, 51),
(59, 9, 50),
(60, 9, 41),
(61, 9, 33),
(62, 9, 40),
(64, 18, 27),
(65, 18, 32),
(66, 18, 43),
(67, 18, 23),
(68, 12, 35),
(69, 12, 43),
(70, 12, 31),
(71, 11, 53),
(73, 19, 55),
(74, 19, 51),
(75, 19, 49),
(76, 19, 33),
(77, 19, 24);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_07_09_080511_create_sandwiches_table', 1),
('2017_07_15_211410_create_emails_table', 2),
('2017_07_15_211554_create_users_table', 2),
('2017_07_15_211624_create_password_resets_table', 3),
('2017_07_16_142749_create_users_table', 3),
('2017_07_18_092511_create_salades_table', 4),
('2017_07_18_092633_create_ingredients_table', 4),
('2017_07_18_093808_create_salades_ingredients_table', 4),
('2017_07_18_100210_drop_saladess_table', 5),
('2017_07_18_100219_drop_salades_table', 5),
('2017_07_22_210428_create_ingredient_salade', 6),
('2017_07_23_225728_create_images_tables', 7),
('2017_07_23_230023_create_rolesImages_tables', 7),
('2017_07_23_230641_create_image_rolesImages_tables', 8),
('2017_07_24_091408_creat_rolesPhoto', 8),
('2017_07_24_092448_create_rolePhotos_tables', 9),
('2017_07_24_092603_create_photos_tables', 9),
('2017_07_28_135431_create_ingredient_salade_table', 10),
('2017_07_28_141820_create_familleSandwiche_table', 11),
('2017_07_30_150544_create_buffets_table', 12),
('2017_07_30_150544_create_famillesPlats_table', 12),
('2017_07_30_150544_create_platsPrepares_table', 12),
('2017_07_30_150544_create_unitesVente_table', 12),
('2017_07_30_150554_create_foreign_keys', 12),
('2017_08_11_211047_create_WorkHours_table', 13),
('2017_08_11_211047_create_days_table', 13),
('2017_08_11_211057_create_foreign_keys', 13),
('2017_09_05_081731_create_notes_table', 14),
('2017_09_22_080008_create_advise_table', 15);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
`id` int(10) unsigned NOT NULL,
  `titre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texte` text COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
`id` int(10) unsigned NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `nom`, `titre`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'GreekSalad.jpg', 'Une Salade Grec', 30, NULL, NULL, '2017-09-08 11:57:39'),
(17, 'tomate_caprese.jpg', 'tomate Caprese', 31, NULL, '2017-07-25 14:38:16', '2017-09-08 11:57:44'),
(18, 'salade_scampi.jpg', 'Salade de Scampi', 32, NULL, '2017-07-25 18:36:21', '2017-09-08 11:57:48'),
(28, 'tomate.jpg', 'Une Tomate', 2, NULL, '2017-07-26 18:42:49', '2017-08-14 14:17:40'),
(30, 'buffet_poisson.jpg', 'Buffet de Poisson', 19, NULL, '2017-07-27 19:29:44', '2017-08-13 14:30:46'),
(31, 'salade_Hawaienne.jpg', 'Salade Hawaienne', 39, NULL, '2017-07-27 19:41:29', '2017-09-11 11:09:10'),
(32, 'btn_sandwich.jpg', 'Bouton Sandwiche', 33, NULL, '2017-08-02 21:06:09', '2017-09-08 12:16:47'),
(34, 'QualityLogo.jpg', 'QualityLogo', 1, NULL, '2017-08-09 06:30:04', '2017-08-09 06:30:04'),
(35, 'banniere1.jpg', 'Banniere', 34, NULL, '2017-08-10 05:27:45', '2017-09-08 12:16:43'),
(36, 'buffet_poisson2.jpg', 'Buffet de Poisson 2', 18, '', '2017-08-13 16:40:35', '2017-08-13 14:41:08'),
(37, '05_14_Quality_Traiteur_ 032.jpg', 'le magasin 1', 35, NULL, '2017-09-08 12:29:01', '2017-09-08 12:29:01'),
(38, '10885319_10206805238868879_6763970469445008859_n[1].jpg', 'Asperges Goffin', 36, NULL, '2017-09-10 05:24:11', '2017-09-11 05:17:52'),
(46, '20150507_134741.jpg', 'Pain Surprise', 37, NULL, '2017-09-11 05:47:39', '2017-09-11 05:47:55'),
(47, 'images.jpg', 'test', 38, NULL, '2017-09-11 05:52:45', '2017-09-11 05:53:06');

-- --------------------------------------------------------

--
-- Structure de la table `platsprepares`
--

CREATE TABLE IF NOT EXISTS `platsprepares` (
`id` int(10) unsigned NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `description` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `publier` tinyint(1) NOT NULL,
  `id_uniteVente` int(10) unsigned NOT NULL,
  `id_famille` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Contenu de la table `platsprepares`
--

INSERT INTO `platsprepares` (`id`, `nom`, `prix`, `description`, `publier`, `id_uniteVente`, `id_famille`, `created_at`, `updated_at`) VALUES
(7, 'paella', '8.65', 'specialite espagnole', 1, 1, 2, '2017-07-30 16:08:21', '2017-08-31 06:57:39'),
(8, 'Soupe de Poisson', '14.50', 'Spécialité de poisson maison.', 1, 1, 1, '2017-07-30 20:31:31', '2017-08-31 08:17:14'),
(14, 'Natas', '4.50', 'Pâtisserie portugaise au lait.', 1, 5, 3, '2017-07-31 13:20:47', '2017-08-31 11:23:12'),
(15, 'Boulette Maison sauce Liégeoise', '5.65', 'boulet de viande hachée (porc et veau), sauce brune au sirop de liège. ', 0, 3, 2, '2017-07-31 13:33:09', '2017-08-31 11:23:15'),
(16, 'Salade de Pomme De terre', '4.50', 'Salade de pomme de terre froide, échalote, ciboulette persil et mayonnaise.', 1, 1, 5, '2017-07-31 18:47:15', '2017-08-09 14:51:10'),
(17, 'Nasi goreng', '6.75', 'Plat chinois végétarien à base de riz et d’œufs', 1, 1, 2, '2017-08-10 12:32:16', '2017-08-31 06:56:43'),
(18, 'Mousse au chocolat', '4.25', 'Desserts aux œufs et au chocolat', 1, 3, 3, '2017-08-10 12:35:58', '2017-08-31 11:23:04'),
(19, 'gratin Dauphinois', '4.75', 'gratin de pomme de terre', 1, 1, 4, '2017-08-31 11:24:22', '2017-08-31 11:24:33');

-- --------------------------------------------------------

--
-- Structure de la table `rolephoto`
--

CREATE TABLE IF NOT EXISTS `rolephoto` (
`id` int(10) unsigned NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `groupe` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Contenu de la table `rolephoto`
--

INSERT INTO `rolephoto` (`id`, `nom`, `groupe`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aucun Rôle', 1, NULL, NULL, NULL),
(2, 'HomePage', 1, NULL, NULL, NULL),
(3, 'Page Salade', 1, '', NULL, NULL),
(18, 'BuffetTerreetMerImage', 2, NULL, '2017-08-13 14:24:20', '2017-08-13 14:24:20'),
(19, 'RoyaleImage', 2, NULL, '2017-08-18 08:38:13', '2017-08-18 08:38:13'),
(30, 'slide1', 3, NULL, '2017-09-08 11:57:02', '2017-09-08 11:57:02'),
(31, 'slide2', 3, NULL, '2017-09-08 11:57:13', '2017-09-08 11:57:13'),
(32, 'slide3', 3, NULL, '2017-09-08 11:57:26', '2017-09-08 11:57:26'),
(33, 'gallerie1', 4, NULL, '2017-09-08 12:02:50', '2017-09-08 12:02:50'),
(34, 'gallerie2', 4, NULL, '2017-09-08 12:04:04', '2017-09-08 12:04:04'),
(35, 'gallerie3', 4, NULL, '2017-09-08 12:16:26', '2017-09-08 12:16:26'),
(36, 'gallerie4', 4, NULL, '2017-09-10 05:23:11', '2017-09-10 05:23:11'),
(37, 'gallerie5', 4, NULL, '2017-09-10 05:23:12', '2017-09-10 05:23:12'),
(38, 'gallerie6', 4, NULL, '2017-09-10 05:23:13', '2017-09-10 05:23:13'),
(39, 'gallerie7', 4, NULL, '2017-09-11 11:08:55', '2017-09-11 11:08:55'),
(42, 'tets123123Image', NULL, NULL, '2017-09-27 08:27:18', '2017-09-27 08:27:18');

-- --------------------------------------------------------

--
-- Structure de la table `salades`
--

CREATE TABLE IF NOT EXISTS `salades` (
`id` int(10) unsigned NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `salades`
--

INSERT INTO `salades` (`id`, `nom`, `prix`, `created_at`, `updated_at`) VALUES
(5, 'l''italienne', '7.65', '2017-07-23 19:55:36', '2017-07-23 19:55:36'),
(6, 'Salade césar', '7.65', '2017-07-28 11:11:24', '2017-07-28 11:11:24'),
(7, 'le test suivant modife', '12.25', '2017-08-10 11:43:26', '2017-08-10 11:43:26'),
(15, 'nkhgdpuh', '5.90', '2017-08-10 12:00:12', '2017-08-10 12:00:12');

-- --------------------------------------------------------

--
-- Structure de la table `sandwiches`
--

CREATE TABLE IF NOT EXISTS `sandwiches` (
`id` int(10) unsigned NOT NULL,
  `nom` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `prixTiers` decimal(3,2) NOT NULL,
  `prixDemi` decimal(3,2) NOT NULL,
  `familleSandwiche_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Contenu de la table `sandwiches`
--

INSERT INTO `sandwiches` (`id`, `nom`, `prixTiers`, `prixDemi`, `familleSandwiche_id`, `created_at`, `updated_at`) VALUES
(2, 'le Bizar', '2.69', '4.59', 1, NULL, '2017-07-28 20:22:35'),
(3, 'le Normand', '2.69', '4.59', 1, NULL, '2017-07-28 20:09:11'),
(4, 'le test', '2.69', '4.59', 3, NULL, NULL),
(6, 'le noouvea', '5.25', '4.25', 2, '2017-07-18 07:16:40', '2017-07-29 18:59:53'),
(9, 'Le Quality', '4.85', '5.25', 1, '2017-07-29 13:14:44', '2017-08-08 06:37:09'),
(10, 'Le Jambon Beure', '3.75', '4.75', 4, '2017-08-08 06:14:40', '2017-08-08 06:18:48'),
(11, 'les testststststss', '3.45', '4.75', 2, '2017-08-08 06:25:22', '2017-08-29 07:01:32'),
(12, 'Le Demoulin', '9.99', '9.99', 1, '2017-08-08 06:33:17', '2017-08-18 07:33:22'),
(16, 'hotdog', '3.25', '4.25', 3, '2017-08-08 06:44:05', '2017-08-08 06:44:05'),
(18, 'n,qldùw', '9.99', '9.99', 4, '2017-08-10 11:56:46', '2017-08-10 11:56:46'),
(19, 'le testUltime', '3.85', '4.75', 3, '2017-09-27 05:56:49', '2017-09-27 05:56:49');

-- --------------------------------------------------------

--
-- Structure de la table `unitesvente`
--

CREATE TABLE IF NOT EXISTS `unitesvente` (
`id` int(10) unsigned NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `unitesvente`
--

INSERT INTO `unitesvente` (`id`, `nom`, `updated_at`, `created_at`) VALUES
(1, 'kg', '2017-07-30 15:59:20', '2017-07-30 15:59:20'),
(2, 'litre', '2017-07-30 20:33:10', '2017-07-30 20:33:11'),
(3, 'pièce', '2017-07-30 20:33:26', '2017-07-30 20:33:27'),
(4, '100gr', '2017-07-30 20:33:38', '2017-07-30 20:33:39'),
(5, '3 Pièces', '2017-07-31 19:58:40', '2017-07-31 19:58:40');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fredmoras', 'fredmoras8@gmail.com', '$2y$10$JDlTKIWbK6VivggKo6uSjul/.ei.SyZY8x7WMKmvTggKVVuzgQqcK', 1, 'iOSLBBK8S1UuSvIRz8dIDyp1XS7Vk1X4hs3uzf1dBXZCciyUv4SHKoXazUdm', '2017-07-16 13:10:11', '2017-09-27 11:38:33'),
(2, 'fifounette', 'd.d@gmail.com', '$2y$10$BkX2zBD7Ja6Kond4sh.9rOJa4CKa0IV7.VyQCX3C.m0/C8BeShM7G', 0, NULL, '2017-07-16 13:29:09', '2017-07-16 13:29:33'),
(3, 'sophie', 's.grenier@g.com', '$2y$10$cSXN9nBIW.qOY.GfvCljo.tm8hrrMRbRkZQl5lkCNxVe2RmH21qty', 0, NULL, '2017-07-16 17:32:50', '2017-07-16 17:33:31');

-- --------------------------------------------------------

--
-- Structure de la table `workhours`
--

CREATE TABLE IF NOT EXISTS `workhours` (
`id` int(10) unsigned NOT NULL,
  `day` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `workhours`
--

INSERT INTO `workhours` (`id`, `day`, `startTime`, `endTime`, `created_at`, `updated_at`) VALUES
(1, 'Lundi', '10:00:00', '10:00:00', '2017-08-11 21:23:22', '2017-09-27 05:18:58'),
(2, 'Mardi', '08:00:00', '18:00:00', '2017-08-11 21:23:42', '2017-09-05 06:29:37'),
(3, 'Mercredi', '10:00:00', '18:00:00', '2017-08-11 21:23:56', '2017-08-14 14:18:18'),
(4, 'Jeudi', '09:00:00', '18:00:00', '2017-08-11 21:24:14', '2017-08-11 21:24:15'),
(5, 'Vendredi', '09:00:00', '18:00:00', '2017-08-11 21:24:35', '2017-08-11 21:24:35'),
(6, 'Samedi', '09:00:00', '16:00:00', '2017-08-12 14:39:59', '2017-08-12 14:40:00'),
(7, 'Dimanche', '00:00:00', '00:00:00', '2017-08-12 14:40:27', '2017-08-12 14:40:27');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `advise`
--
ALTER TABLE `advise`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `advise_username_unique` (`userName`);

--
-- Index pour la table `buffets`
--
ALTER TABLE `buffets`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emails`
--
ALTER TABLE `emails`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `famillesandwiche_sandwiche`
--
ALTER TABLE `famillesandwiche_sandwiche`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `famillesplats`
--
ALTER TABLE `famillesplats`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `famillesplats_nom_uindex` (`nom`);

--
-- Index pour la table `famille_sandwiches`
--
ALTER TABLE `famille_sandwiches`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `familleSandwiche_nom_uindex` (`nom`);

--
-- Index pour la table `ingredients`
--
ALTER TABLE `ingredients`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ingredients_nom_unique` (`nom`);

--
-- Index pour la table `ingredient_salade`
--
ALTER TABLE `ingredient_salade`
 ADD PRIMARY KEY (`id`), ADD KEY `ingredient_salade_salade_id_foreign` (`salade_id`), ADD KEY `ingredient_salade_ingredient_id_foreign` (`ingredient_id`);

--
-- Index pour la table `ingredient_sandwiche`
--
ALTER TABLE `ingredient_sandwiche`
 ADD PRIMARY KEY (`id`), ADD KEY `ingredient_sandwiche_sandwiche_id_foreign` (`sandwiche_id`), ADD KEY `ingredient_sandwiche_ingredient_id_foreign` (`ingredient_id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
 ADD PRIMARY KEY (`id`), ADD KEY `photos_role_id_foreign` (`role_id`);

--
-- Index pour la table `platsprepares`
--
ALTER TABLE `platsprepares`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `platsprepares_nom_unique` (`nom`), ADD KEY `platsprepares_id_famille_foreign` (`id_famille`), ADD KEY `platsprepares_id_unitevente_foreign` (`id_uniteVente`);

--
-- Index pour la table `rolephoto`
--
ALTER TABLE `rolephoto`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salades`
--
ALTER TABLE `salades`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `salades_nom_unique` (`nom`);

--
-- Index pour la table `sandwiches`
--
ALTER TABLE `sandwiches`
 ADD PRIMARY KEY (`id`), ADD KEY `sandwiches_familleSandwiche_id_foreign` (`familleSandwiche_id`);

--
-- Index pour la table `unitesvente`
--
ALTER TABLE `unitesvente`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `unitesvente_nom_uindex` (`nom`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_name_unique` (`name`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `workhours`
--
ALTER TABLE `workhours`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `advise`
--
ALTER TABLE `advise`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `buffets`
--
ALTER TABLE `buffets`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `emails`
--
ALTER TABLE `emails`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `famillesandwiche_sandwiche`
--
ALTER TABLE `famillesandwiche_sandwiche`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `famillesplats`
--
ALTER TABLE `famillesplats`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `famille_sandwiches`
--
ALTER TABLE `famille_sandwiches`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `ingredients`
--
ALTER TABLE `ingredients`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT pour la table `ingredient_salade`
--
ALTER TABLE `ingredient_salade`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT pour la table `ingredient_sandwiche`
--
ALTER TABLE `ingredient_sandwiche`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT pour la table `platsprepares`
--
ALTER TABLE `platsprepares`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `rolephoto`
--
ALTER TABLE `rolephoto`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `salades`
--
ALTER TABLE `salades`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `sandwiches`
--
ALTER TABLE `sandwiches`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `unitesvente`
--
ALTER TABLE `unitesvente`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `workhours`
--
ALTER TABLE `workhours`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ingredient_salade`
--
ALTER TABLE `ingredient_salade`
ADD CONSTRAINT `ingredient_salade_ingredient_id_foreign` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ingredient_salade_salade_id_foreign` FOREIGN KEY (`salade_id`) REFERENCES `salades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ingredient_sandwiche`
--
ALTER TABLE `ingredient_sandwiche`
ADD CONSTRAINT `ingredient_sandwiche_ingredient_id_foreign` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ingredient_sandwiche_sandwiche_id_foreign` FOREIGN KEY (`sandwiche_id`) REFERENCES `sandwiches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
ADD CONSTRAINT `photos_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `rolephoto` (`id`);

--
-- Contraintes pour la table `platsprepares`
--
ALTER TABLE `platsprepares`
ADD CONSTRAINT `platsprepares_id_famille_foreign` FOREIGN KEY (`id_famille`) REFERENCES `famillesplats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `platsprepares_id_unitevente_foreign` FOREIGN KEY (`id_uniteVente`) REFERENCES `unitesvente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sandwiches`
--
ALTER TABLE `sandwiches`
ADD CONSTRAINT `sandwiches_familleSandwiche_id_foreign` FOREIGN KEY (`familleSandwiche_id`) REFERENCES `famille_sandwiches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
