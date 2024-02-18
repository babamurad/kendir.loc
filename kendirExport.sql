-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.24 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.3.0.6376
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных kendirloc
DROP DATABASE IF EXISTS `kendirloc`;
CREATE DATABASE IF NOT EXISTS `kendirloc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `kendirloc`;

-- Дамп структуры для таблица kendirloc.carousels
DROP TABLE IF EXISTS `carousels`;
CREATE TABLE IF NOT EXISTS `carousels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.carousels: ~6 rows (приблизительно)
DELETE FROM `carousels`;
INSERT INTO `carousels` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
	(19, 'Voluptatem placeat', 'Molestiae saepe enim in commodi aliquip asperiores excepturi doloribus sunt sunt in velit doloribus est tempora', '1707993912.jpg', '2024-02-15 05:45:12', '2024-02-15 05:45:12'),
	(20, 'Enim esse voluptate', 'Odio animi inventore aut exercitation excepteur fuga A numquam', '1707994128.jpg', '2024-02-15 05:48:48', '2024-02-15 05:48:48'),
	(21, 'Numquam dolor soluta', 'Magni eos sit adipisicing quod perspiciatis sit', '1707994158.webp', '2024-02-15 05:49:18', '2024-02-15 05:49:18'),
	(22, 'Laborum cillum praes', 'Voluptas ullamco iure ut et dolorem cum at error quae omnis incididunt possimus soluta', '1707994188.webp', '2024-02-15 05:49:48', '2024-02-15 05:49:48'),
	(23, 'Accusantium minim de', 'Ut fuga Aliquip et nisi sit Nam do facere', '1707994197.webp', '2024-02-15 05:49:57', '2024-02-15 05:49:57');

-- Дамп структуры для таблица kendirloc.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `parent` bigint NOT NULL DEFAULT '0',
  `parent_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AVG_ROW_LENGTH=2048 ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы kendirloc.categories: ~6 rows (приблизительно)
DELETE FROM `categories`;
INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `image`, `is_popular`, `parent`, `parent_id`) VALUES
	(22, 'Wholesale trade', 'wholesale-trade', '2024-02-13 23:38:08', '2024-02-15 06:11:02', '1707995462.webp', 1, 0, 43),
	(23, 'Win door production', 'win-door-production', '2024-02-13 23:43:44', '2024-02-15 06:22:28', '1707995373.webp', 1, 0, 43),
	(24, 'Mesh products', 'mesh-products', '2024-02-13 23:44:19', '2024-02-16 22:57:06', '1707995219.jpg', 0, 22, 23),
	(29, 'Slate production', 'slate-production', '2024-02-14 00:52:20', '2024-02-15 06:13:29', '1707995609.jpg', 0, 23, 22),
	(36, 'Iron products', 'iron-products', '2024-02-14 01:39:16', '2024-02-15 06:05:21', '1707904255.jpg', 1, 22, 23),
	(41, 'Voluptatem Deserunt', 'voluptatem-deserunt', '2024-02-16 05:11:51', '2024-02-16 05:12:13', '1708078333.png', 1, 22, 22),
	(42, 'Odit pariatur Rem ', 'odit-pariatur-rem', '2024-02-17 00:17:18', '2024-02-17 00:18:03', '1708147038.jpg', 0, 41, 22),
	(43, 'Root', 'root', NULL, '2024-02-17 00:55:56', '1708149356.jpg', 0, 0, 22);

-- Дамп структуры для таблица kendirloc.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AVG_ROW_LENGTH=4096 ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы kendirloc.contacts: ~0 rows (приблизительно)
DELETE FROM `contacts`;

-- Дамп структуры для таблица kendirloc.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.failed_jobs: ~0 rows (приблизительно)
DELETE FROM `failed_jobs`;

-- Дамп структуры для таблица kendirloc.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.migrations: ~8 rows (приблизительно)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_02_10_082523_main', 2),
	(6, '2024_02_10_100426_alter_users_table_utype_field', 2),
	(7, '2024_02_11_064203_create_contacts_table', 3),
	(8, '2024_02_11_103513_alter_categories_add_parent', 3),
	(9, '2024_02_11_111513_alter_categories_image_nullable', 3),
	(10, '2024_02_14_095728_create_carousels_table', 4),
	(11, '2024_02_15_122032_create_products_table', 5),
	(12, '2024_02_17_042155_alter_categories_add_parent_id_and_relation', 6);

-- Дамп структуры для таблица kendirloc.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.password_reset_tokens: ~0 rows (приблизительно)
DELETE FROM `password_reset_tokens`;

-- Дамп структуры для таблица kendirloc.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.personal_access_tokens: ~0 rows (приблизительно)
DELETE FROM `personal_access_tokens`;

-- Дамп структуры для таблица kendirloc.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `quantity` decimal(8,2) unsigned NOT NULL DEFAULT '10.00',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `category_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.products: ~2 rows (приблизительно)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`, `new`) VALUES
	(1, 'Orla Allison ', 'orla-allison', 'Magna reiciendis debitis repellendus Soluta quod architecto sequi in qui minima repellendus Cumque', 'Rem alias cupidatat sint totam sint fugiat fuga Consequuntur esse magnam nihil qui ducimus quo dolorem occaecat', 665.00, 119.00, 'Tenetur dolor et sin', 'instock', 1, 702.00, '1708063279.webp', '17080632790.webp,17080632791.webp,17080632792.webp,17080632793.jpg,17080632794.jpg', 36, '2024-02-16 01:01:19', '2024-02-16 01:01:19', NULL),
	(2, 'Nerea Steele ', 'nerea-steele', 'Elit tempore aliqua Veniam dolores culpa atque amet voluptas nesciunt ut itaque perferendis na', 'Maxime amet numquam aut nesciunt dignissimos eum ipsam saepe qui qui quos sed fugiat dolor tenetur exercitation aut', 36.00, 834.00, 'NER/36/83', 'instock', 1, 884.00, '1708064315.jpg', '17080643150.webp,17080643151.webp,17080643152.webp,17080643153.jpg,17080643154.jpg', 36, '2024-02-16 01:18:35', '2024-02-16 03:49:47', NULL),
	(4, 'Emerald Mcclainn', 'emerald-mcclainn', 'Sint facilis qui sequi ut temporibus', 'Vero minus ipsum corrupti omnis corporis quo repellendus Sed et elit voluptas dolore eiusmod suscipit porro', 17.00, 645.00, 'In blanditiis ad aut', 'instock', 1, 534.00, '1708066058.webp', '17080660580.webp,17080660581.webp,17080660582.webp', 23, '2024-01-16 01:47:38', '2024-02-16 01:47:38', NULL),
	(7, 'Abbot Morrowe', 'abbot-morrowe', 'Sed nulla vel dolorem quo commodo rerum facere qui corrupti voluptate nemo', 'Cillum voluptas nisi anim neque voluptas quaerat iusto quis quis ad excepturi ullamco nihil vel cum nulla earum est', 125.00, 736.00, 'Obcaecati in ut tene', 'instock', 0, 17.00, '1708072016.jpg', '17080691720.webp,17080691721.webp,17080691722.webp', 29, '2024-02-16 02:39:32', '2024-02-16 03:26:56', NULL),
	(8, 'Cynthia Callahan', 'cynthia-callahan', 'Nostrum deleniti do cillum sunt obcaecati et occaecat facere id ex voluptatum sunt aliquip sed est s', 'Nulla impedit assumenda consequatur Et vel molestiae cumque alias laboris sit aliquam qui numquam dignissimos ut', 39.00, 37.00, '456545', 'instock', 1, 488.00, '1708073171.jpg', '17080691950.webp,17080691951.webp,17080691952.jpg', 36, '2024-02-16 02:39:55', '2024-02-16 03:51:12', NULL),
	(9, 'Risa Cline', 'risa-cline', 'Exercitationem harum ea voluptas ut asperiores impedit tempora autem dicta culpa aute autem volupt', 'Cillum perferendis repellendus Asperiores temporibus quis accusantium aute quo fugiat totam sunt sed officiis consequuntur animi dolore ex', 471.00, 600.00, 'Et tempor molestiae ', 'instock', 1, 499.00, '1708073512.jpg', '17080735120.webp,17080735121.webp,17080735122.webp', 24, '2024-02-16 03:51:52', '2024-02-16 03:51:52', NULL),
	(10, 'Ian Mckay', 'ian-mckay', 'Ut debitis elit velit magnam quae itaque quia veritatis ipsam alias tenetur anim esse est ullamco', 'Eaque illo numquam omnis totam qui non aut tenetur culpa nostrum consequat Do enim', 282.00, 609.00, 'Ut velit et sunt off', 'instock', 0, 814.00, '1708074311.webp', '17080743110.jpg,17080743111.jpg,17080743112.webp,17080743113.webp', 24, '2024-02-16 04:05:11', '2024-02-16 04:05:11', NULL),
	(11, 'Ori Hinton', 'ori-hinton', 'Exercitation quos ut molestias adipisci id ut distinctio Et exercitationem', 'Reiciendis cum qui dolores aut dolorum cum aut magni ducimus porro adipisicing et sed qui', 963.00, 454.00, 'Est voluptatem Nec', 'instock', 0, 97.00, '1708074337.jpg', '17080743370.webp,17080743371.webp,17080743372.jpg', 22, '2024-02-16 04:05:37', '2024-02-16 04:05:37', NULL),
	(12, 'Serina Fields ', 'serina-fields', 'Voluptate proident soluta dolor culpa qui ipsa est anim exercitation minus repudiandae quis asper', 'Dignissimos aut quis quo sit veniam exercitation eligendi minima', 371.00, 510.00, 'Eum voluptatum non d', 'instock', 0, 82.00, '1708074355.jpg', '17080743550.jpg,17080743551.webp,17080743552.webp', 36, '2024-02-16 04:05:55', '2024-02-16 04:05:55', NULL),
	(13, 'Hayley Knapp', 'hayley-knapp', 'Reiciendis corrupti voluptate aperiam possimus quia suscipit distinctio Omnis nihil distinctio Q', 'Quia tenetur quo est voluptate ex maiores rem voluptate', 454.00, 829.00, 'Pariatur Aut ut ven', 'instock', 1, 913.00, '1708075258.jpg', '17080752580.webp,17080752581.jpg,17080752582.jpg', 23, '2024-02-16 04:20:58', '2024-02-16 04:20:58', NULL),
	(14, 'Vincent Cabrerar', 'vincent-cabrerar', 'Aperiam nihil sunt at est totam ut unde est', 'Est voluptas voluptate in officia perferendis placeat', 999.00, 847.00, 'Iure provident labo', 'instock', 1, 804.00, '1708075288.webp', '17080752880.webp,17080752881.jpg,17080752882.jpg', 22, '2024-02-16 04:21:28', '2024-02-16 04:21:28', NULL),
	(15, 'Nasim Workman', 'nasim-workman', 'Voluptate cumque nisi amet expedita nihil laboris', 'Rem ut in quos doloribus adipisci unde id saepe', 357.00, 39.00, 'Accusamus do quasi s', 'instock', 1, 975.00, '1708075970.jpg', '17080759700.jpg,17080759701.jpg,17080759702.webp', 29, '2024-02-16 04:32:50', '2024-02-16 04:32:50', NULL),
	(16, 'Iola Daniels', 'iola-daniels', 'Ipsum qui ut tempora sed sunt totam iure quaerat exercitation quia excepturi et amet corporis ad s', 'Elit quasi eos et qui pariatur Quia', 529.00, 472.00, 'TRE123', 'instock', 0, 71.00, '1708076392.jpg', '17080763420.jpg', 23, '2024-02-16 04:39:02', '2024-02-16 04:39:52', NULL),
	(17, 'Vera Matthews', 'vera-matthews', 'Nihil amet enim ut voluptatem culpa anim corrupti do sapiente debitis totam sit esse porro', 'Doloremque dolorem aut aut tenetur veniam nihil ut dolore sint quo sed unde voluptatum tenetur ea minima est tenetur', 290.00, 476.00, 'TRE123', 'instock', 1, 161.00, '1708076491.webp', '17080763610.jpg,17080763611.jpg,17080763612.webp', 22, '2024-02-16 04:39:21', '2024-02-16 04:41:31', NULL),
	(18, 'Sopoline Maddox', 'sopoline-maddox', 'Enim nihil quod ut non et dolorum ut sit odio possimus non error aut hic deserunt aut', 'Tenetur esse nobis nesciunt exercitationem mollit officia est odio unde qui alias laudantium et ut velit', 311.00, 296.00, 'Nihil enim asperiore', 'instock', 1, 475.00, '1708077883.jpg', '17080778830.webp,17080778831.jpg,17080778832.webp,17080778833.jpg', 36, '2024-01-16 05:04:43', '2024-02-16 05:04:43', NULL),
	(19, 'Yetta Mejia', 'yetta-mejia', 'Odit ullamco non sed omnis consequatur et est beatae est possimus pariatur Doloremque ut quod min', 'Nisi et suscipit assumenda ipsum numquam est in et', 282.00, 15.00, 'Quo mollit est eaqu', 'instock', 1, 842.00, '1708078456.jpg', '17080784560.jpg,17080784561.jpg,17080784562.jpg,17080784563.webp', 29, '2024-02-16 05:14:16', '2024-02-16 05:14:16', NULL),
	(20, 'Leandra Pennington', 'leandra-pennington', 'Nostrum est molestias assumenda quo voluptas voluptatem in iure nihil placeat itaque', 'Sed ea cupiditate asperiores dolore dolor aut eaque quis dolor ad animi reiciendis a', 947.00, 440.00, 'Earum at incididunt ', 'instock', 1, 849.00, '1708078484.jpg', '17080784840.jpg,17080784841.webp,17080784842.jpg', 29, '2024-02-16 05:14:44', '2024-02-16 05:14:44', NULL);

-- Дамп структуры для таблица kendirloc.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `utype` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for Admin and USR for Normal user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.users: ~21 rows (приблизительно)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `utype`) VALUES
	(1, 'bobo', 'bobo@tm.tm', NULL, '$2y$12$7pzRcWSmEO7cXk1CMnbmQO.RChYXdKWIGDtMkO9KcO3/a9XEc1arm', NULL, '2024-02-13 00:18:03', '2024-02-13 00:18:03', 'ADM'),
	(2, 'Hollee Edwards', 'b2@tm.tm', NULL, '$2y$12$FMBfM1PuuwPjZ7baLAwla.tCg62tx.lO0.LHZjqWKHpCqO22rhH6K', NULL, '2024-02-13 00:28:50', '2024-02-13 00:28:50', 'USR'),
	(3, 'nozegeveg@mailinator.com', 'cakoju@mailinator.com', NULL, '$2y$12$jcofS4bHg4Pu462WMYp9yuf56t1mFI8ku0POKWaYQXtnYXvD.vNoG', NULL, '2024-02-13 02:18:59', '2024-02-13 02:18:59', 'USR'),
	(4, 'cunuda@mailinator.com', 'zitoma@mailinator.com', NULL, '$2y$12$YtMdZ4glQrufAVJKxVwhQu3ZU01Dxbmr79R4t4BYClR/uM.Q3.NWG', NULL, '2024-02-13 02:52:15', '2024-02-13 02:52:15', 'USR'),
	(5, 'havixomigu@mailinator.com', 'juvux@mailinator.com', NULL, '$2y$12$Nv58jK7z.6HepmqZwqcue.iOGUWZbqPF5Yuk7c79d8uqtIwc2dtXi', NULL, '2024-02-13 02:52:32', '2024-02-13 02:52:32', 'USR'),
	(6, 'ninegyz@mailinator.com', 'judy@mailinator.com', NULL, '$2y$12$EeTBJnK/gU5rsHUOflZvweVX5pgFMUa/jk2tqqmdEayZ7aTuGZvXG', NULL, '2024-02-13 02:52:45', '2024-02-13 02:52:45', 'USR'),
	(7, 'xyzoz@mailinator.com', 'mefahypa@mailinator.com', NULL, '$2y$12$6NS3jqmw8pLl73sN23bJqus6cefGmHzpLvpFYymNv.TqFEtJyuGOu', NULL, '2024-02-13 02:53:45', '2024-02-13 02:53:45', 'USR'),
	(8, 'tinoziwe@mailinator.com', 'coxup@mailinator.com', NULL, '$2y$12$ieeetN2WjiPAzG6UazDLC.xSFnYZcRYDGYEv5CUQ1TYSOpf2JkO0u', NULL, '2024-02-13 02:54:25', '2024-02-13 02:54:25', 'USR'),
	(9, 'lina@mailinator.com', 'fohy@mailinator.com', NULL, '$2y$12$jOxwtemKfs/7ftXm.8XKOe/HpYFs7BbXgltIB02kUYIeMcKVHfY3q', NULL, '2024-02-13 02:58:03', '2024-02-13 02:58:03', 'USR'),
	(10, 'raju@mailinator.com', 'qubokif@mailinator.com', NULL, '$2y$12$C/VHRK2eygSXrLwRQK54V.11U094JhBYTKvD7EiMEp2DN8z6JZDGC', NULL, '2024-02-13 02:58:22', '2024-02-13 02:58:22', 'USR'),
	(11, 'Excepteur commodo de', 'cyza@mailinator.com', NULL, '$2y$12$9F/R7F1T86TglaK4FLnhRufS9w8wwv7A815BZJ1xwrtCZnBxHW6hC', NULL, '2024-02-13 03:03:03', '2024-02-13 03:03:03', 'USR'),
	(12, 'Harum sapiente odio ', 'wehezo@mailinator.com', NULL, '$2y$12$cgFiqt1v6yajlnVMRlILQe7k45DdCkuog4wzdfMC9PeXPRf3hFx2y', NULL, '2024-02-13 03:07:05', '2024-02-13 03:07:05', 'USR'),
	(13, 'Deleniti vitae accus', 'pypynukogu@mailinator.com', NULL, '$2y$12$.5xagUZifT.ZGN2gnIpCzuBpyBI7wxoCflqC1IbEw.fk4ILOCUIYy', NULL, '2024-02-13 03:07:35', '2024-02-13 03:07:35', 'USR'),
	(14, 'Totam aliquip est al', 'bywybatuxe@mailinator.com', NULL, '$2y$12$9I6ZaQTJqbc2GBQVOeBpKuoiBcm9Pr4vw3D/mUtYOMmnxNo86SWfe', NULL, '2024-02-13 03:18:53', '2024-02-13 03:18:53', 'USR'),
	(15, 'Sequi quos vitae ad ', 'gozuba@mailinator.com', NULL, '$2y$12$ESnJGAUb6CNBGvh6CbKF4.T.frx2X.P95kcxHdqmhT0wD3P1ZIFIi', NULL, '2024-02-13 03:22:29', '2024-02-13 03:22:29', 'USR'),
	(16, 'Ad eligendi elit no', 'kavy@mailinator.com', NULL, '$2y$12$QqIds8hzACXeTfDXE9E71OE7LaAqQB1C0Mj.JJxLRFh3/UcGFd8le', NULL, '2024-02-13 03:27:16', '2024-02-13 03:27:16', 'USR'),
	(17, 'Consequatur ex labo', 'puwudevoj@mailinator.com', NULL, '$2y$12$EtPYsUf77Fnvp9k2AIDAz.xU3jcKD6DcvU8XUNNZ62IHhChPJHTU2', NULL, '2024-02-13 03:27:36', '2024-02-13 03:27:36', 'USR'),
	(18, 'Ea vel error ullamco', 'hivydal@mailinator.com', NULL, '$2y$12$LFe4q6KeUsjWBxdXYX1kb.OEumGEh6lIVZ/XnYdQlerOu68prRMUO', NULL, '2024-02-13 03:28:36', '2024-02-13 03:28:36', 'USR'),
	(19, 'Omnis dolores id sin', 'vofube@mailinator.com', NULL, '$2y$12$oXxtnaE2tlCAPProNdbBFeyMDDCjCgjivObynCXrQcv2eRwDlsX2O', NULL, '2024-02-13 04:03:34', '2024-02-13 04:03:34', 'USR'),
	(20, 'Eu quia explicabo V', 'rola@mailinator.com', NULL, '$2y$12$PTWy1JZBF02wBNXROYFSLOtofqDZUWG1bybyYeLO5fh1QrL44hV1a', NULL, '2024-02-13 04:22:39', '2024-02-13 04:22:39', 'USR'),
	(21, 'Qui voluptas dolores', 'jelybyr@mailinator.com', NULL, '$2y$12$mTwh2zAshGvY8L5.6rmOhe9.zcASwWCkf7EpiU2gr999YDPkqhB6W', NULL, '2024-02-13 04:23:06', '2024-02-13 04:23:06', 'USR'),
	(22, 'Guvanch', 'guvanch.soft@kendirtm.com', NULL, '$2y$12$wRBqt2RfdkfSPWmUaC5gp.qZ0rXIljtxVLvi0eWeVGvxXowaF3xuK', NULL, '2024-02-15 06:16:36', '2024-02-15 06:16:36', 'ADM');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
