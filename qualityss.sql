-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.19 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la table tuto. advise
CREATE TABLE IF NOT EXISTS `advise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `localite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `note` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `advise_username_unique` (`userName`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.advise : ~0 rows (environ)
/*!40000 ALTER TABLE `advise` DISABLE KEYS */;
/*!40000 ALTER TABLE `advise` ENABLE KEYS */;

-- Export de la structure de la table tuto. buffets
CREATE TABLE IF NOT EXISTS `buffets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.buffets : ~3 rows (environ)
/*!40000 ALTER TABLE `buffets` DISABLE KEYS */;
INSERT INTO `buffets` (`id`, `nom`, `prix`, `description`, `created_at`, `updated_at`) VALUES
	(14, 'Buffet Terre et Mer', 21.40, '- Assortiments de charcuteries : roulade de jambon, chiffonnade de parme aux fruits de saison, trio de boudins artisanaux, saucisson, pilons de poulets, tranche de rosbeef.\r\n- Assortiments de poissons : Saumon fumé, tomate crevettes, truite fumée, pêche au thon.\r\n- Assortiments de crudités : Salade mixte et sa vinaigrette, salade de pomme de terre estivale, salade de tomates oignons rouges et piment d’Espelette, salade de pâtes du chef, carottes râpées à l\'orange et raisins secs, trio de sauces maison', '2017-08-13 16:24:20', '2017-10-09 11:29:28'),
	(15, 'Buffet Royal terre et mer', 29.40, '- Assortiments de charcuteries : roulade de jambon, chiffonnade de parme aux fruits de saison, trio de boudins artisanaux, saucisson, pilons de poulets, tranche de roastbeef.\r\n- Assortiments de poissons : Saumon fumé, tomate crevettes, truite fumée, pêche au thon.\r\n- Assortiments de fromages (selon les saisons), et ses garnitures.\r\n- Assortiments de crudités : Salade mixte et sa vinaigrette, salade de pomme de terre estivale, salade de tomates oignons rouges et piment d’Espelette, salade de pâtes du chef, carottes râpées à l\'orange et raisins secs, trio de sauces maison', '2017-08-18 10:38:13', '2017-10-09 11:30:38'),
	(18, 'Buffet Charcuteries', 14.40, '- Assortiments de charcuteries : roulade de jambon, chiffonnade de parme aux fruits de saison, trio de boudins artisanaux, saucisson, pilons de poulets, tranche de roastbeef.\r\n- Assortiments de crudités : Salade mixte et sa vinaigrette, salade de pomme de terre estivale, salade de tomates oignons rouges et piment d’Espelette, salade de pâtes du chef, carottes râpées à l\'orange et raisins secs, trio de sauces maison', '2017-09-27 10:27:18', '2017-10-09 11:28:20');
/*!40000 ALTER TABLE `buffets` ENABLE KEYS */;

-- Export de la structure de la table tuto. emails
CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.emails : ~3 rows (environ)
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` (`id`, `email`) VALUES
	(1, 'fredmoras8@gmail.com'),
	(2, 'fredattack@gmail.com'),
	(3, 'f.moras@truc.ne');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;

-- Export de la structure de la table tuto. famillesandwiche_sandwiche
CREATE TABLE IF NOT EXISTS `famillesandwiche_sandwiche` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `familleSandwiche_id` int(10) unsigned NOT NULL,
  `sandwiche_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.famillesandwiche_sandwiche : ~0 rows (environ)
/*!40000 ALTER TABLE `famillesandwiche_sandwiche` DISABLE KEYS */;
/*!40000 ALTER TABLE `famillesandwiche_sandwiche` ENABLE KEYS */;

-- Export de la structure de la table tuto. famillesplats
CREATE TABLE IF NOT EXISTS `famillesplats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `famillesplats_nom_uindex` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.famillesplats : ~5 rows (environ)
/*!40000 ALTER TABLE `famillesplats` DISABLE KEYS */;
INSERT INTO `famillesplats` (`id`, `nom`, `created_at`, `updated_at`) VALUES
	(1, 'Entrées', '2017-07-30 17:55:11', '2017-07-30 17:55:12'),
	(2, 'Plats', '2017-07-30 17:55:32', '2017-07-30 17:55:34'),
	(3, 'Dessert', '2017-07-30 17:55:46', '2017-07-30 17:55:47'),
	(4, 'Accompagnements', '2017-07-30 17:55:58', '2017-07-30 17:55:59'),
	(5, 'Divers', '2017-07-31 21:57:39', '2017-07-31 21:57:39');
/*!40000 ALTER TABLE `famillesplats` ENABLE KEYS */;

-- Export de la structure de la table tuto. famille_sandwiches
CREATE TABLE IF NOT EXISTS `famille_sandwiches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `familleSandwiche_nom_uindex` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Export de données de la table tuto.famille_sandwiches : ~3 rows (environ)
/*!40000 ALTER TABLE `famille_sandwiches` DISABLE KEYS */;
INSERT INTO `famille_sandwiches` (`id`, `nom`) VALUES
	(3, 'Paninis'),
	(1, 'classics'),
	(2, 'originaux');
/*!40000 ALTER TABLE `famille_sandwiches` ENABLE KEYS */;

-- Export de la structure de la table tuto. ingredients
CREATE TABLE IF NOT EXISTS `ingredients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ingredients_nom_unique` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.ingredients : ~39 rows (environ)
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` (`id`, `nom`, `created_at`, `updated_at`) VALUES
	(21, 'Tomate', NULL, NULL),
	(26, 'Oignons cuits', NULL, NULL),
	(28, 'Roquette', NULL, NULL),
	(34, 'Emincé de poulet ', '2017-07-28 13:10:53', '2017-07-28 13:10:53'),
	(35, 'Brie de meau', '2017-07-28 22:22:04', '2017-07-28 22:22:04'),
	(36, 'Laitue', '2017-07-29 21:28:29', '2017-07-29 21:28:29'),
	(38, 'Saumon Fumé', '2017-07-29 21:39:16', '2017-07-29 21:39:16'),
	(40, 'Sirop de Liège', '2017-07-29 21:43:25', '2017-07-29 21:43:25'),
	(41, 'Oignons Hachés', '2017-07-29 21:44:36', '2017-07-29 21:44:36'),
	(42, 'Boulette Maison', '2017-07-29 21:46:51', '2017-07-29 21:46:51'),
	(43, 'Merguez', '2017-07-29 21:49:38', '2017-07-29 21:49:38'),
	(44, 'Omelette aux lardons', '2017-07-29 21:52:42', '2017-07-29 21:52:42'),
	(45, 'Feta', '2017-07-29 21:58:42', '2017-07-29 21:58:42'),
	(46, 'Jambon Fumé', '2017-07-29 22:01:01', '2017-07-29 22:01:01'),
	(47, 'Thon Mayonnaise', '2017-07-29 22:02:04', '2017-07-29 22:02:04'),
	(48, 'Aubergines grillées', '2017-07-29 22:06:48', '2017-07-29 22:06:48'),
	(49, 'Filet de Dinde', '2017-07-29 22:07:46', '2017-07-29 22:07:46'),
	(50, 'Fromage Blanc', '2017-07-29 22:10:12', '2017-07-29 22:10:12'),
	(51, 'Copeau de parmesan', '2017-07-31 22:12:02', '2017-07-31 22:12:02'),
	(52, 'Beurre', '2017-08-08 08:13:16', '2017-08-08 08:13:16'),
	(56, 'Crudités au choix', '2017-10-08 17:33:18', '2017-10-08 17:33:18'),
	(57, 'Jambon de Parme', '2017-10-08 17:46:40', '2017-10-08 17:46:40'),
	(58, 'Mozzarella', '2017-10-08 17:47:17', '2017-10-08 17:47:17'),
	(59, 'Tomates séchèes', '2017-10-08 17:47:35', '2017-10-08 17:47:35'),
	(60, 'Créme de Balsamique', '2017-10-08 17:47:59', '2017-10-08 17:47:59'),
	(61, 'Concombre', '2017-10-08 17:49:47', '2017-10-08 17:49:47'),
	(62, 'Oignons rouges', '2017-10-08 17:50:03', '2017-10-08 17:50:03'),
	(63, 'Sauce au choix', '2017-10-08 17:50:31', '2017-10-08 17:50:31'),
	(64, 'Pêches en morceau', '2017-10-08 17:54:26', '2017-10-08 17:54:26'),
	(65, 'Mayonnaise', '2017-10-08 18:42:23', '2017-10-08 18:42:23'),
	(66, 'Fruits secs', '2017-10-08 18:48:51', '2017-10-08 18:48:51'),
	(67, 'Poulet Croquant', '2017-10-08 18:52:54', '2017-10-08 18:52:54'),
	(68, 'Ananas', '2017-10-09 08:54:13', '2017-10-09 08:54:13'),
	(69, 'Anchois', '2017-10-09 08:57:16', '2017-10-09 08:57:16'),
	(70, 'Olives', '2017-10-09 08:57:30', '2017-10-09 08:57:30'),
	(71, 'Oeufs', '2017-10-09 08:57:55', '2017-10-09 08:57:55'),
	(72, 'Salade de Crevettes Maison', '2017-10-09 08:58:16', '2017-10-09 08:58:16'),
	(73, 'gruyère', '2017-10-09 09:23:37', '2017-10-09 09:23:37'),
	(74, 'Basilic', '2017-10-09 09:26:54', '2017-10-09 09:26:54');
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;

-- Export de la structure de la table tuto. ingredient_salade
CREATE TABLE IF NOT EXISTS `ingredient_salade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `salade_id` int(10) unsigned NOT NULL,
  `ingredient_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ingredient_salade_salade_id_foreign` (`salade_id`),
  KEY `ingredient_salade_ingredient_id_foreign` (`ingredient_id`),
  CONSTRAINT `ingredient_salade_ingredient_id_foreign` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ingredient_salade_salade_id_foreign` FOREIGN KEY (`salade_id`) REFERENCES `salades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.ingredient_salade : ~15 rows (environ)
/*!40000 ALTER TABLE `ingredient_salade` DISABLE KEYS */;
INSERT INTO `ingredient_salade` (`id`, `salade_id`, `ingredient_id`) VALUES
	(35, 5, 21),
	(37, 5, 26),
	(39, 5, 28),
	(42, 6, 21),
	(43, 6, 26),
	(45, 6, 28),
	(47, 6, 34),
	(48, 7, 21),
	(49, 7, 28),
	(50, 7, 34),
	(51, 7, 40),
	(52, 7, 41),
	(53, 7, 51),
	(72, 15, 41),
	(73, 15, 49);
/*!40000 ALTER TABLE `ingredient_salade` ENABLE KEYS */;

-- Export de la structure de la table tuto. ingredient_sandwiche
CREATE TABLE IF NOT EXISTS `ingredient_sandwiche` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sandwiche_id` int(10) unsigned NOT NULL,
  `ingredient_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ingredient_sandwiche_sandwiche_id_foreign` (`sandwiche_id`),
  KEY `ingredient_sandwiche_ingredient_id_foreign` (`ingredient_id`),
  CONSTRAINT `ingredient_sandwiche_ingredient_id_foreign` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ingredient_sandwiche_sandwiche_id_foreign` FOREIGN KEY (`sandwiche_id`) REFERENCES `sandwiches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.ingredient_sandwiche : ~113 rows (environ)
/*!40000 ALTER TABLE `ingredient_sandwiche` DISABLE KEYS */;
INSERT INTO `ingredient_sandwiche` (`id`, `sandwiche_id`, `ingredient_id`) VALUES
	(79, 21, 52),
	(80, 21, 56),
	(81, 22, 52),
	(82, 22, 56),
	(83, 23, 52),
	(84, 23, 56),
	(85, 24, 56),
	(86, 24, 50),
	(87, 25, 52),
	(88, 25, 56),
	(89, 26, 56),
	(90, 27, 56),
	(91, 28, 50),
	(92, 28, 41),
	(93, 28, 28),
	(94, 28, 38),
	(95, 29, 60),
	(96, 29, 57),
	(97, 29, 58),
	(98, 29, 28),
	(99, 29, 59),
	(100, 30, 61),
	(101, 30, 49),
	(102, 30, 36),
	(103, 30, 62),
	(104, 30, 63),
	(105, 30, 21),
	(106, 31, 48),
	(107, 31, 45),
	(108, 31, 46),
	(109, 31, 21),
	(110, 32, 46),
	(111, 32, 64),
	(112, 32, 47),
	(113, 33, 36),
	(114, 33, 65),
	(115, 33, 44),
	(116, 33, 21),
	(117, 34, 36),
	(118, 34, 43),
	(119, 34, 26),
	(120, 34, 63),
	(121, 34, 21),
	(122, 35, 42),
	(123, 35, 36),
	(124, 35, 41),
	(125, 35, 63),
	(126, 35, 21),
	(127, 36, 35),
	(128, 36, 66),
	(129, 36, 28),
	(130, 36, 40),
	(133, 39, 36),
	(134, 39, 67),
	(135, 39, 63),
	(136, 39, 21),
	(137, 40, 68),
	(138, 40, 34),
	(139, 40, 36),
	(140, 40, 63),
	(141, 40, 21),
	(142, 41, 69),
	(143, 41, 71),
	(144, 41, 62),
	(145, 41, 70),
	(146, 41, 47),
	(147, 42, 62),
	(148, 42, 28),
	(149, 42, 72),
	(150, 42, 21),
	(151, 43, 34),
	(152, 43, 58),
	(153, 43, 62),
	(154, 43, 28),
	(155, 43, 21),
	(156, 44, 56),
	(157, 45, 57),
	(158, 45, 58),
	(159, 45, 28),
	(160, 45, 59),
	(161, 46, 50),
	(162, 46, 41),
	(163, 46, 28),
	(164, 46, 38),
	(165, 47, 49),
	(166, 47, 73),
	(167, 47, 36),
	(168, 47, 62),
	(169, 47, 21),
	(170, 48, 74),
	(171, 48, 43),
	(172, 48, 58),
	(173, 48, 21),
	(174, 49, 48),
	(175, 49, 74),
	(176, 49, 45),
	(177, 49, 46),
	(178, 49, 21),
	(179, 50, 42),
	(180, 50, 36),
	(181, 50, 41),
	(182, 50, 21),
	(183, 51, 68),
	(184, 51, 34),
	(185, 51, 36),
	(186, 51, 63),
	(187, 51, 21),
	(188, 52, 34),
	(189, 52, 58),
	(190, 52, 62),
	(191, 52, 28),
	(192, 52, 63),
	(193, 52, 21);
/*!40000 ALTER TABLE `ingredient_sandwiche` ENABLE KEYS */;

-- Export de la structure de la table tuto. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.migrations : ~29 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Export de la structure de la table tuto. notes
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texte` text COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.notes : ~0 rows (environ)
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;

-- Export de la structure de la table tuto. photos
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `photos_role_id_foreign` (`role_id`),
  CONSTRAINT `photos_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `rolephoto` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.photos : ~14 rows (environ)
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` (`id`, `nom`, `titre`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 'GreekSalad.jpg', 'Une Salade Grec', 30, NULL, NULL, '2017-09-08 13:57:39'),
	(17, 'tomate_caprese.jpg', 'tomate Caprese', 31, NULL, '2017-07-25 16:38:16', '2017-09-08 13:57:44'),
	(18, 'salade_scampi.jpg', 'Salade de Scampi', 32, NULL, '2017-07-25 20:36:21', '2017-09-08 13:57:48'),
	(28, 'tomate.jpg', 'Une Tomate', 2, NULL, '2017-07-26 20:42:49', '2017-08-14 16:17:40'),
	(30, 'buffet_poisson.jpg', 'Buffet de Poisson', 19, NULL, '2017-07-27 21:29:44', '2017-08-13 16:30:46'),
	(31, 'salade_Hawaienne.jpg', 'Salade Hawaienne', 39, NULL, '2017-07-27 21:41:29', '2017-09-11 13:09:10'),
	(32, 'btn_sandwich.jpg', 'Bouton Sandwiche', 33, NULL, '2017-08-02 23:06:09', '2017-09-08 14:16:47'),
	(34, 'QualityLogo.jpg', 'QualityLogo', 1, NULL, '2017-08-09 08:30:04', '2017-08-09 08:30:04'),
	(35, 'banniere1.jpg', 'Banniere', 34, NULL, '2017-08-10 07:27:45', '2017-09-08 14:16:43'),
	(36, 'buffet_poisson2.jpg', 'Buffet de Poisson 2', 18, '', '2017-08-13 18:40:35', '2017-08-13 16:41:08'),
	(37, '05_14_Quality_Traiteur_ 032.jpg', 'le magasin 1', 35, NULL, '2017-09-08 14:29:01', '2017-09-08 14:29:01'),
	(38, '10885319_10206805238868879_6763970469445008859_n[1].jpg', 'Asperges Goffin', 36, NULL, '2017-09-10 07:24:11', '2017-09-11 07:17:52'),
	(46, '20150507_134741.jpg', 'Pain Surprise', 37, NULL, '2017-09-11 07:47:39', '2017-09-11 07:47:55'),
	(47, 'images.jpg', 'test', 38, NULL, '2017-09-11 07:52:45', '2017-09-11 07:53:06');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;

-- Export de la structure de la table tuto. platsprepares
CREATE TABLE IF NOT EXISTS `platsprepares` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `description` varchar(145) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publier` tinyint(1) NOT NULL,
  `id_uniteVente` int(10) unsigned NOT NULL,
  `id_famille` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `platsprepares_nom_unique` (`nom`),
  KEY `platsprepares_id_famille_foreign` (`id_famille`),
  KEY `platsprepares_id_unitevente_foreign` (`id_uniteVente`),
  CONSTRAINT `platsprepares_id_famille_foreign` FOREIGN KEY (`id_famille`) REFERENCES `famillesplats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `platsprepares_id_unitevente_foreign` FOREIGN KEY (`id_uniteVente`) REFERENCES `unitesvente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.platsprepares : ~53 rows (environ)
/*!40000 ALTER TABLE `platsprepares` DISABLE KEYS */;
INSERT INTO `platsprepares` (`id`, `nom`, `prix`, `description`, `publier`, `id_uniteVente`, `id_famille`, `created_at`, `updated_at`) VALUES
	(7, 'paella', 8.65, 'specialite espagnole', 1, 1, 2, '2017-07-30 18:08:21', '2017-08-31 08:57:39'),
	(8, 'Soupe de Poisson', 14.50, 'Spécialité de poisson maison.', 1, 1, 2, '2017-07-30 22:31:31', '2017-10-09 10:26:19'),
	(14, 'Natas', 4.50, 'Pâtisserie portugaise au lait.', 1, 5, 3, '2017-07-31 15:20:47', '2017-08-31 13:23:12'),
	(15, 'Boulette Maison sauce Liégeoise', 5.65, 'boulet de viande hachée (porc et veau), sauce brune au sirop de liège. ', 0, 3, 2, '2017-07-31 15:33:09', '2017-08-31 13:23:15'),
	(16, 'Salade de Pomme De terre', 4.50, 'Salade de pomme de terre froide, échalote, ciboulette persil et mayonnaise.', 1, 1, 5, '2017-07-31 20:47:15', '2017-08-09 16:51:10'),
	(17, 'Nasi goreng', 6.75, 'Plat chinois végétarien à base de riz et d’œufs', 1, 1, 2, '2017-08-10 14:32:16', '2017-08-31 08:56:43'),
	(18, 'Mousse au chocolat', 4.25, 'Desserts aux œufs et au chocolat', 1, 3, 3, '2017-08-10 14:35:58', '2017-08-31 13:23:04'),
	(19, 'gratin Dauphinois', 4.75, 'gratin de pomme de terre', 1, 1, 4, '2017-08-31 13:24:22', '2017-08-31 13:24:33'),
	(21, 'Boulette Maison sauce Tomate', 0.00, '', 0, 1, 2, '2017-10-09 10:08:45', '2017-10-09 10:08:45'),
	(22, 'Courgettes Farcie', 0.00, '', 0, 1, 2, '2017-10-09 10:09:08', '2017-10-09 10:09:08'),
	(23, 'Filet de Dinde sauce Archiduc', 0.00, '', 0, 1, 2, '2017-10-09 12:12:01', '2017-10-09 12:12:02'),
	(24, 'Pain de Viande Sauce Brune aux Oignons', 0.00, '', 0, 1, 2, '2017-10-09 12:12:33', '2017-10-09 12:12:34'),
	(25, 'Filet de Saumon sauce Créme et vin Blanc', 0.00, '', 0, 1, 2, '2017-10-09 12:13:11', '2017-10-09 12:13:12'),
	(26, 'Hachis Parmentier', 0.00, '', 0, 1, 2, '2017-10-09 12:13:41', '2017-10-09 12:13:42'),
	(27, 'Cordon bleu sauce Créme tomate', 0.00, '', 0, 1, 2, '2017-10-09 12:14:04', '2017-10-09 12:15:10'),
	(28, 'Cannelloni Maison Sauce tomate', 0.00, '', 0, 1, 2, '2017-10-09 12:14:31', '2017-10-09 12:14:32'),
	(29, 'Potée aux Carotte de Hesbaye', 0.00, '', 0, 1, 2, '2017-10-09 12:15:06', '2017-10-09 12:15:07'),
	(30, 'Tomates Farcies', 0.00, '', 0, 1, 2, '2017-10-09 12:15:30', '2017-10-09 12:15:31'),
	(31, 'Scampis Du chef', 0.00, '', 0, 1, 2, '2017-10-09 12:15:49', '2017-10-09 12:15:50'),
	(32, 'Pâtes Maison', 0.00, '', 0, 1, 2, '2017-10-09 12:16:08', '2017-10-09 12:16:10'),
	(33, 'Chicons Au Gratin', 0.00, '', 0, 1, 2, '2017-10-09 12:16:27', '2017-10-09 12:16:27'),
	(34, 'Spare Ribs', 0.00, '', 0, 1, 2, '2017-10-09 12:16:54', '2017-10-09 12:16:56'),
	(35, 'Cuisses et Pilons de Poulet', 0.00, '', 0, 1, 2, '2017-10-09 12:17:21', '2017-10-09 12:17:22'),
	(36, 'Pizza du Chef', 0.00, '', 0, 1, 2, '2017-10-09 12:17:42', '2017-10-09 12:17:43'),
	(63, 'Lasagne Maison', 0.00, '', 0, 1, 2, '2017-10-09 12:20:20', '2017-10-09 12:20:21'),
	(64, 'Quiches Maison ', 0.00, '', 0, 1, 2, '2017-10-09 12:20:49', '2017-10-09 12:20:51'),
	(65, 'Paella Du Chef', 0.00, '', 0, 1, 2, '2017-10-09 12:21:05', '2017-10-09 12:21:07'),
	(66, 'Couscous', 0.00, '', 0, 1, 2, '2017-10-09 12:21:26', '2017-10-09 12:21:28'),
	(67, 'Carbonnades Flamandes', 0.00, '', 0, 1, 2, '2017-10-09 12:22:34', '2017-10-09 12:22:39'),
	(68, 'Blanquette de Veau', 0.00, '', 0, 1, 2, '2017-10-09 12:22:43', '2017-10-09 12:22:41'),
	(69, 'Magret de Canard', 0.00, '', 0, 1, 2, '2017-10-09 12:22:45', '2017-10-09 12:22:44'),
	(70, 'Moussaka', 0.00, NULL, 0, 1, 2, '2017-10-09 12:27:59', '2017-10-09 12:28:01'),
	(71, 'Potage du Jour', 0.00, NULL, 0, 1, 1, '2017-10-09 12:28:25', '2017-10-09 12:28:29'),
	(72, 'Filet de Cochon de Lait', 0.00, '', 0, 1, 2, '2017-10-09 12:28:49', '2017-10-09 12:28:58'),
	(73, 'Oiseaux sans tête ', 0.00, NULL, 0, 1, 2, '2017-10-09 12:29:27', '2017-10-09 12:29:29'),
	(74, 'Carbonnade façon Céleste', 0.00, NULL, 0, 1, 2, '2017-10-09 12:29:54', '2017-10-09 12:29:55'),
	(75, 'Gratin de Choux fleur', 0.00, NULL, 0, 1, 5, '2017-10-09 12:30:18', '2017-10-09 12:30:19'),
	(76, 'légumes mixtes', 0.00, NULL, 0, 1, 5, '2017-10-09 12:32:45', '2017-10-09 12:32:46'),
	(77, 'Haricots préparés', 0.00, NULL, 0, 1, 5, '2017-10-09 13:01:43', '2017-10-09 13:01:44'),
	(78, 'Riz Curry à l\'ananas frais', 0.00, NULL, 0, 1, 5, '2017-10-09 13:02:03', '2017-10-09 13:02:05'),
	(79, 'Assortiment de pâtes Froides', 0.00, NULL, 0, 1, 5, '2017-10-09 13:02:24', '2017-10-09 13:02:25'),
	(80, 'Tomates crevettes', 0.00, NULL, 0, 1, 1, '2017-10-09 13:19:13', '2017-10-09 13:19:14'),
	(81, 'Gaspacho', 0.00, NULL, 0, 1, 1, '2017-10-09 13:19:30', '2017-10-09 13:19:31'),
	(82, 'Riz Cantonnais', 0.00, NULL, 0, 1, 5, '2017-10-09 13:19:47', '2017-10-09 13:19:48'),
	(85, 'Tiramisu', 0.00, NULL, 0, 1, 3, '2017-10-09 13:21:28', '2017-10-09 13:21:29'),
	(86, 'Purée de pomme de terre', 0.00, NULL, 0, 1, 5, '2017-10-09 13:21:44', '2017-10-09 13:21:45'),
	(87, 'Pomme de terre Rissolées', 0.00, NULL, 0, 1, 5, '2017-10-09 13:22:07', '2017-10-09 13:22:08'),
	(88, 'Taboulé', 0.00, NULL, 0, 1, 5, '2017-10-09 13:22:20', '2017-10-09 13:22:21'),
	(89, 'Risotto', 0.00, NULL, 0, 1, 5, '2017-10-09 13:22:31', '2017-10-09 13:22:32'),
	(90, 'Pomme de Terre Macaire', 0.00, NULL, 0, 1, 5, '2017-10-09 13:22:50', '2017-10-09 13:22:51'),
	(92, 'Salade de fruits', 0.00, NULL, 0, 1, 3, '2017-10-09 13:24:14', '2017-10-09 13:24:15'),
	(93, 'Crêpes Maison', 0.00, NULL, 0, 1, 3, '2017-10-09 13:24:32', '2017-10-09 13:24:48'),
	(94, 'Bavarois', 0.00, NULL, 0, 1, 3, '2017-10-09 13:24:45', '2017-10-09 13:24:46');
/*!40000 ALTER TABLE `platsprepares` ENABLE KEYS */;

-- Export de la structure de la table tuto. rolephoto
CREATE TABLE IF NOT EXISTS `rolephoto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `groupe` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.rolephoto : ~16 rows (environ)
/*!40000 ALTER TABLE `rolephoto` DISABLE KEYS */;
INSERT INTO `rolephoto` (`id`, `nom`, `groupe`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Aucun Rôle', 1, NULL, NULL, NULL),
	(2, 'HomePage', 1, NULL, NULL, NULL),
	(3, 'Page Salade', 1, '', NULL, NULL),
	(18, 'BuffetTerreetMerImage', 2, NULL, '2017-08-13 16:24:20', '2017-08-13 16:24:20'),
	(19, 'RoyaleImage', 2, NULL, '2017-08-18 10:38:13', '2017-08-18 10:38:13'),
	(30, 'slide1', 3, NULL, '2017-09-08 13:57:02', '2017-09-08 13:57:02'),
	(31, 'slide2', 3, NULL, '2017-09-08 13:57:13', '2017-09-08 13:57:13'),
	(32, 'slide3', 3, NULL, '2017-09-08 13:57:26', '2017-09-08 13:57:26'),
	(33, 'gallerie1', 4, NULL, '2017-09-08 14:02:50', '2017-09-08 14:02:50'),
	(34, 'gallerie2', 4, NULL, '2017-09-08 14:04:04', '2017-09-08 14:04:04'),
	(35, 'gallerie3', 4, NULL, '2017-09-08 14:16:26', '2017-09-08 14:16:26'),
	(36, 'gallerie4', 4, NULL, '2017-09-10 07:23:11', '2017-09-10 07:23:11'),
	(37, 'gallerie5', 4, NULL, '2017-09-10 07:23:12', '2017-09-10 07:23:12'),
	(38, 'gallerie6', 4, NULL, '2017-09-10 07:23:13', '2017-09-10 07:23:13'),
	(39, 'gallerie7', 4, NULL, '2017-09-11 13:08:55', '2017-09-11 13:08:55'),
	(42, 'tets123123Image', NULL, NULL, '2017-09-27 10:27:18', '2017-09-27 10:27:18');
/*!40000 ALTER TABLE `rolephoto` ENABLE KEYS */;

-- Export de la structure de la table tuto. salades
CREATE TABLE IF NOT EXISTS `salades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `salades_nom_unique` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.salades : ~4 rows (environ)
/*!40000 ALTER TABLE `salades` DISABLE KEYS */;
INSERT INTO `salades` (`id`, `nom`, `prix`, `created_at`, `updated_at`) VALUES
	(5, 'l\'italienne', 7.65, '2017-07-23 21:55:36', '2017-07-23 21:55:36'),
	(6, 'Salade césar', 7.65, '2017-07-28 13:11:24', '2017-07-28 13:11:24'),
	(7, 'le test suivant modife', 12.25, '2017-08-10 13:43:26', '2017-08-10 13:43:26'),
	(15, 'nkhgdpuh', 5.90, '2017-08-10 14:00:12', '2017-08-10 14:00:12');
/*!40000 ALTER TABLE `salades` ENABLE KEYS */;

-- Export de la structure de la table tuto. sandwiches
CREATE TABLE IF NOT EXISTS `sandwiches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `prixTiers` decimal(3,2) NOT NULL,
  `prixDemi` decimal(3,2) NOT NULL,
  `familleSandwiche_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sandwiches_familleSandwiche_id_foreign` (`familleSandwiche_id`),
  CONSTRAINT `sandwiches_familleSandwiche_id_foreign` FOREIGN KEY (`familleSandwiche_id`) REFERENCES `famille_sandwiches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.sandwiches : ~30 rows (environ)
/*!40000 ALTER TABLE `sandwiches` DISABLE KEYS */;
INSERT INTO `sandwiches` (`id`, `nom`, `prixTiers`, `prixDemi`, `familleSandwiche_id`, `created_at`, `updated_at`) VALUES
	(21, 'Fromage sélection', 3.50, 4.00, 1, '2017-10-08 17:35:14', '2017-10-08 17:35:14'),
	(22, 'Jambon à l\'os', 3.50, 4.00, 1, '2017-10-08 17:38:29', '2017-10-08 17:38:29'),
	(23, 'Jambon-Fromage', 3.50, 4.00, 1, '2017-10-08 17:39:05', '2017-10-08 17:39:05'),
	(24, 'Fromage blanc & fines herbes', 3.50, 4.00, 1, '2017-10-08 17:39:54', '2017-10-08 17:39:54'),
	(25, 'Dagobert', 3.80, 4.30, 1, '2017-10-08 17:40:39', '2017-10-08 17:40:39'),
	(26, 'Thon Mayonnaise', 3.80, 4.30, 1, '2017-10-08 17:41:39', '2017-10-08 17:41:39'),
	(27, 'Américain', 3.80, 4.30, 1, '2017-10-08 17:43:00', '2017-10-08 17:43:00'),
	(28, 'Le Norvégien', 4.50, 5.00, 2, '2017-10-08 17:45:49', '2017-10-08 17:45:49'),
	(29, 'L\'Italien', 4.50, 5.00, 2, '2017-10-08 17:48:53', '2017-10-08 17:48:53'),
	(30, 'La Dinde en folie', 4.50, 5.00, 2, '2017-10-08 17:51:44', '2017-10-08 17:51:44'),
	(31, 'Le Saint-Tropez', 4.50, 5.00, 2, '2017-10-08 17:53:52', '2017-10-08 17:53:52'),
	(32, 'Le Pêché Mortel', 4.50, 5.00, 2, '2017-10-08 17:55:18', '2017-10-08 17:55:18'),
	(33, 'Le Cocotte', 4.50, 5.00, 2, '2017-10-08 18:43:05', '2017-10-08 18:43:05'),
	(34, 'Le Sud', 4.50, 5.00, 2, '2017-10-08 18:44:07', '2017-10-08 18:44:07'),
	(35, 'Le Quality', 4.50, 5.00, 2, '2017-10-08 18:45:32', '2017-10-08 18:45:32'),
	(36, 'Le Brie De Liège', 4.50, 5.00, 2, '2017-10-08 18:49:27', '2017-10-08 18:49:27'),
	(39, 'Le Poulet Croquant', 0.00, 5.00, 2, '2017-10-08 18:55:36', '2017-10-08 18:55:36'),
	(40, 'le Hawaï', 4.50, 5.00, 2, '2017-10-09 10:51:19', '2017-10-09 08:54:37'),
	(41, 'Le Niçois', 4.50, 5.00, 2, '2017-10-09 10:51:45', '2017-10-09 08:58:44'),
	(42, 'Le Mer Du Nord', 4.50, 5.00, 2, '2017-10-09 10:52:15', '2017-10-09 08:59:27'),
	(43, 'L\'émincé de Poulet', 4.50, 5.00, 2, '2017-10-09 10:52:45', '2017-10-09 09:00:29'),
	(44, 'Le Végétarien', 4.50, 5.00, 2, '2017-10-09 10:53:30', '2017-10-09 09:00:53'),
	(45, 'L\'italien', 0.00, 5.00, 3, '2017-10-09 11:02:05', '2017-10-09 09:22:13'),
	(46, 'Le Norvégien', 0.00, 5.00, 3, '2017-10-09 11:02:29', '2017-10-09 09:23:05'),
	(47, 'La Dinde en Folie', 0.00, 5.00, 3, '2017-10-09 11:03:02', '2017-10-09 09:23:54'),
	(48, 'Le Sud', 0.00, 5.00, 3, '2017-10-09 11:03:31', '2017-10-09 09:27:16'),
	(49, 'Le Saint-Tropez', 0.00, 5.00, 3, '2017-10-09 11:05:10', '2017-10-09 09:27:56'),
	(50, 'Le Quality', 0.00, 5.00, 3, '2017-10-09 11:06:51', '2017-10-09 09:28:42'),
	(51, 'Le Hawaï', 0.00, 5.00, 3, '2017-10-09 11:10:06', '2017-10-09 09:29:12'),
	(52, 'L\'émincé de Poulet', 0.00, 5.00, 3, '2017-10-09 11:11:03', '2017-10-09 09:32:54');
/*!40000 ALTER TABLE `sandwiches` ENABLE KEYS */;

-- Export de la structure de la table tuto. unitesvente
CREATE TABLE IF NOT EXISTS `unitesvente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unitesvente_nom_uindex` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.unitesvente : ~5 rows (environ)
/*!40000 ALTER TABLE `unitesvente` DISABLE KEYS */;
INSERT INTO `unitesvente` (`id`, `nom`, `updated_at`, `created_at`) VALUES
	(1, 'kg', '2017-07-30 17:59:20', '2017-07-30 17:59:20'),
	(2, 'litre', '2017-07-30 22:33:10', '2017-07-30 22:33:11'),
	(3, 'pièce', '2017-07-30 22:33:26', '2017-07-30 22:33:27'),
	(4, '100gr', '2017-07-30 22:33:38', '2017-07-30 22:33:39'),
	(5, '3 Pièces', '2017-07-31 21:58:40', '2017-07-31 21:58:40');
/*!40000 ALTER TABLE `unitesvente` ENABLE KEYS */;

-- Export de la structure de la table tuto. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.users : ~3 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Fredmoras', 'fredmoras8@gmail.com', '$2y$10$JDlTKIWbK6VivggKo6uSjul/.ei.SyZY8x7WMKmvTggKVVuzgQqcK', 1, 'iOSLBBK8S1UuSvIRz8dIDyp1XS7Vk1X4hs3uzf1dBXZCciyUv4SHKoXazUdm', '2017-07-16 15:10:11', '2017-09-27 13:38:33'),
	(2, 'fifounette', 'd.d@gmail.com', '$2y$10$BkX2zBD7Ja6Kond4sh.9rOJa4CKa0IV7.VyQCX3C.m0/C8BeShM7G', 0, NULL, '2017-07-16 15:29:09', '2017-07-16 15:29:33'),
	(3, 'sophie', 's.grenier@g.com', '$2y$10$cSXN9nBIW.qOY.GfvCljo.tm8hrrMRbRkZQl5lkCNxVe2RmH21qty', 0, NULL, '2017-07-16 19:32:50', '2017-07-16 19:33:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Export de la structure de la table tuto. workhours
CREATE TABLE IF NOT EXISTS `workhours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `day` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Export de données de la table tuto.workhours : ~7 rows (environ)
/*!40000 ALTER TABLE `workhours` DISABLE KEYS */;
INSERT INTO `workhours` (`id`, `day`, `startTime`, `endTime`, `created_at`, `updated_at`) VALUES
	(1, 'Lundi', '10:00:00', '10:00:00', '2017-08-11 23:23:22', '2017-09-27 07:18:58'),
	(2, 'Mardi', '08:00:00', '18:00:00', '2017-08-11 23:23:42', '2017-09-05 08:29:37'),
	(3, 'Mercredi', '10:00:00', '18:00:00', '2017-08-11 23:23:56', '2017-08-14 16:18:18'),
	(4, 'Jeudi', '09:00:00', '18:00:00', '2017-08-11 23:24:14', '2017-08-11 23:24:15'),
	(5, 'Vendredi', '09:00:00', '18:00:00', '2017-08-11 23:24:35', '2017-08-11 23:24:35'),
	(6, 'Samedi', '09:00:00', '16:00:00', '2017-08-12 16:39:59', '2017-08-12 16:40:00'),
	(7, 'Dimanche', '00:00:00', '00:00:00', '2017-08-12 16:40:27', '2017-08-12 16:40:27');
/*!40000 ALTER TABLE `workhours` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
