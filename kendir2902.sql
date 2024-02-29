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

-- Дамп структуры для таблица kendirloc.abouts
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` bigint NOT NULL DEFAULT '1',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.abouts: ~0 rows (приблизительно)
DELETE FROM `abouts`;
INSERT INTO `abouts` (`id`, `title`, `image`, `text`, `author`, `published`, `created_at`, `updated_at`) VALUES
	(1, 'About Kendir Company ', NULL, 'Türkmenistanyň Senagatçylar we Telekeçiler birleşmesiniň agzasy bolup durýan “Kendir” hususy kärhanasy 2013-nji ýylyň 16-njy dekabrynda döredildi. Kärhanamyzyň işiniň esasy maksady ilatyň sarp ediş isleglerini kanagatlandyrmak, halkyň sarp edýän gurluşyk harytlary bilen bazary üpjün etmek, önümçilik işini ýokarlandyrmak bolup durýar. Ýaşaýyş durmuşynyň barha ösmegi, beýik ymaratlaryň peýda bolup, obalary, şäherleri gözelleşdirmegi – ilki bilen şol ýurduň beýleki ösen ýurtlar bilen deňleşýändigine aýdyňlygy bilen şaýatlyk edýär. Indi Türkmenistan we onuñ paýtagty Aşgabat şäheri ak mermerli binalaryň, uly ymaratlaryň, ýa- şaýyş jaýlarynyň toplumlaryny özünde jemleýänligi bilen dünýäde tanalyp gelýär. Şeýle binalaryň peýda bolmagy üçin ilkinji nobatda gurluşyk önümlerine aýratyn paý düşýär. Häzirki wagtda gurulýan binalaryň, ýaşaýyş jaýlarynyň döwrebap, berk, hil taýdan ýokary derejede bolmagynda, “Kendir” hususy kärhanamyzyň aýratyn zähmeti bar. Kärhanamyzda öndürilýän ýokary hilli demir-beton konstruksiýalary üçin kebşirlenen gözenekleri, polatdan çerepissa, profnastil, konýok we ternaw önümleri halka hödürlenýär. Bu önümler dürli galyňlykda, dürli ölçeglerde bolup, olaryň islendik görnüşlerini müşderiler isleglerine görä buýrup bilýärler. Mundan başga-da kärhanamyzda dürli ölçeglerde bolan polat armaturalary, armatur daňylýan simleri, profilleri, ugolnikleri, çüýleri, demir listleri we demir turbalarynam satyn alyp bilersiňiz. Ýokary derejeli bilimli hünärmenler tarapyndan ýola goýulyp, häzirki wagtda hil derejesine kepil geçýän bu kärhanamyzyň işleri ýokary depgin bilen dowam edýär.\n\nBiziň önümçiligimizde Türkiýanyň we Ýewropanyň birnäçe ýokary hilli belli nyşanly enjamlary ulanylýar. Enjamlaryň ählisi sanly ulgamly bolup, onda işleýän hünärmenler tarapyndan ussatlyk bilen dolandyrylýar. Bu bolsa, önümçilik kuwwatyny artdyrýar we ähli buýurmalar wagtynda ýokary hilli ýerine ýetirilýär. Takyk nokatlaýyn kebşirleýji enjamda öndürilen gözenekler bolsa özüniň berkligi we talaba laýyklygy bilen tapawutlanýar. Şeýle hem, demir listden çerepissa önümlerini formalaýjy enjamlaryň birnäçe görnüşleriniň bolmagy her bir müşderiniň islegini kanagatlandyrylýandygyna esas bolup durýar.', 1, 1, '2024-02-27 09:35:31', '2024-02-28 03:54:23');

-- Дамп структуры для таблица kendirloc.brands
DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.brands: ~0 rows (приблизительно)
DELETE FROM `brands`;
INSERT INTO `brands` (`id`, `code`, `name`, `image`, `created_at`, `updated_at`) VALUES
	(3, 'QEWR234', 'Quas non dolores dol', '1709187634.jpg', '2024-02-29 01:20:34', '2024-02-29 02:05:04'),
	(4, 'QAMI125', 'Qui aut quo magni il', '1709190287.jpg', '2024-02-29 01:21:19', '2024-02-29 02:04:47'),
	(5, 'AIAS121', 'Aut in assumenda sit', '1709190202.jpg', '2024-02-29 01:27:37', '2024-02-29 02:03:22'),
	(6, 'Architecto consequat', 'Culpa eiusmod quae i', '1709190322.jpg', '2024-02-29 02:05:22', '2024-02-29 02:05:22');

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
	(19, 'Voluptatem placeatl', 'Molestiae saepe enim in commodi aliquip asperiores excepturi doloribus sunt sunt in velit doloribus est tempora', '1708313046.jpg', '2024-02-15 05:45:12', '2024-02-18 22:24:06'),
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
  `arhiw` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AVG_ROW_LENGTH=4096 ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы kendirloc.contacts: ~17 rows (приблизительно)
DELETE FROM `contacts`;
INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`, `arhiw`) VALUES
	(5, 'Beau Roth', 'rypigat@mailinator.com', '+1 (964) 956-1182', 'Subj', 'Adipisicing sed labo', '2024-02-26 01:15:30', '2024-02-26 02:34:51', 1),
	(6, 'Beau Roth', 'rypigat@mailinator.com', '+1 (964) 956-1182', 'Subj', 'Adipisicing sed labo', '2024-02-26 01:16:43', '2024-02-26 02:33:32', 1),
	(7, 'Hermione Lowery', 'locor@mailinator.com', '+1 (597) 657-4469', 'Subject Name', 'Fugiat impedit iur', '2024-02-26 01:19:27', '2024-02-26 02:01:48', 1),
	(8, 'Ferdinand Parker', 'hevaji@mailinator.com', '+1 (466) 322-3918', 'Exercitationem ', 'Exercitationem in et', '2024-02-26 01:20:28', '2024-02-26 02:34:35', 1),
	(9, 'Lucas Hewitt', 'seno@mailinator.com', '+1 (758) 375-7334', '+1 (638) 743-5618', 'Vel sit dolor ut ver', '2024-02-26 02:13:27', '2024-02-26 02:34:14', 1),
	(10, 'Lewis Rhodes', 'rerapasyd@mailinator.com', '+1 (796) 142-8728', '+1 (191) 362-3398', 'Minima obcaecati por', '2024-02-26 02:13:33', '2024-02-26 03:40:52', 1),
	(11, 'Joelle Blackburn', 'syxunofe@mailinator.com', '+1 (786) 327-3296', '+1 (496) 307-9142', 'Modi id eligendi vol', '2024-02-26 03:41:41', '2024-02-26 03:41:41', 0),
	(12, 'Basia Moreno', 'wigyhejyl@mailinator.com', '+1 (966) 357-3193', '+1 (165) 392-2715', 'Eaque illum lorem c', '2024-02-26 03:54:30', '2024-02-26 03:54:30', 0),
	(13, 'Barclay Franklin', 'kytyq@mailinator.com', '+1 (348) 275-1097', 'Kendir answer', 'Test message\nObcaecati qui dolori Obcaecati qui dolori', '2024-02-26 03:56:38', '2024-02-26 03:56:38', 0),
	(14, 'Ian Patton', 'micutymym@mailinator.com', '+1 (579) 459-9362', '+1 (743) 758-5536', 'Officia dolore ut es', '2024-02-26 03:57:33', '2024-02-26 03:57:33', 0),
	(15, 'Georgia Irwin', 'guvanch.kabulov@gmail.com', '+1 (182) 803-9697', 'Hi from kendir', 'Nemo duis qui quaera', '2024-02-26 03:58:48', '2024-02-26 05:23:42', 1),
	(16, 'Ursula Robertson', 'buvaquhy@mailinator.com', '+1 (866) 302-1702', '+1 (306) 491-7511', 'Dicta fuga Et assum', '2024-02-26 04:05:49', '2024-02-26 05:23:36', 1),
	(17, 'Katelyn Richards', 'hogerihak@mailinator.com', '+1 (924) 263-4227', '+1 (253) 994-3948', 'Numquam itaque vitae', '2024-02-26 05:06:03', '2024-02-26 06:07:33', 1),
	(18, 'Heidi Silva', 'licabu@mailinator.com', '+1 (487) 338-5011', '+1 (364) 135-8034', 'Laboriosam nobis in', '2024-02-26 05:06:24', '2024-02-26 05:23:08', 1),
	(19, 'Petra Haynes', 'foticeguz@mailinator.com', '+1 (189) 265-7015', '+1 (618) 981-3932', 'Anim inventore accus', '2024-02-26 05:07:04', '2024-02-26 05:18:37', 1),
	(20, 'Uriel Odonnell', 'timav@mailinator.com', '+1 (598) 108-6759', '+1 (543) 803-3592', 'Excepteur duis sit v', '2024-02-26 05:08:37', '2024-02-26 05:18:20', 1),
	(21, 'Doris Thompson', 'hekojav@mailinator.com', '+1 (373) 348-7586', '+1 (788) 955-3524', 'Ex aperiam sit dign', '2024-02-26 05:13:09', '2024-02-26 05:14:54', 1);

-- Дамп структуры для таблица kendirloc.countries
DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.countries: ~4 rows (приблизительно)
DELETE FROM `countries`;
INSERT INTO `countries` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
	(1, '1', 'Turkmenistan', '2024-02-27 12:30:15', '2024-02-26 12:30:16'),
	(2, '1', 'Uzbekistan', '2024-02-27 12:30:38', '2024-02-27 12:30:39'),
	(3, '1', 'Turkiye', '2024-02-27 12:30:54', '2024-02-27 12:30:54'),
	(4, '1', 'Russia', '2024-02-27 12:31:07', '2024-02-27 12:31:07');

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

-- Дамп структуры для таблица kendirloc.manufacturers
DROP TABLE IF EXISTS `manufacturers`;
CREATE TABLE IF NOT EXISTS `manufacturers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.manufacturers: ~0 rows (приблизительно)
DELETE FROM `manufacturers`;
INSERT INTO `manufacturers` (`id`, `code`, `name`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Rem rem obcaecati ut', 'Adipisicing earum ci', '1709191584.jpg', '2024-02-29 02:22:25', '2024-02-29 02:26:24'),
	(2, 'Maiores similique ad', 'Officiis sit nostru', '1709191576.jpg', '2024-02-29 02:22:40', '2024-02-29 02:26:16'),
	(3, 'Consequatur quo sae', 'Necessitatibus eu ip', '1709191562.jpg', '2024-02-29 02:22:54', '2024-02-29 02:26:02'),
	(4, 'VPAL54353', 'Velit pariatur Ali', '1709191530.jpg', '2024-02-29 02:23:00', '2024-02-29 02:25:30'),
	(6, 'Adipisci aliquid ame', 'Sunt in id similiqu', '1709191606.jpg', '2024-02-29 02:26:46', '2024-02-29 02:26:46'),
	(7, 'Voluptatem pariatur', 'Nesciunt incidunt ', '1709191616.jpg', '2024-02-29 02:26:56', '2024-02-29 02:26:56');

-- Дамп структуры для таблица kendirloc.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.migrations: ~17 rows (приблизительно)
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
	(12, '2024_02_17_042155_alter_categories_add_parent_id_and_relation', 6),
	(13, '2024_02_20_113624_create_orders_table', 7),
	(14, '2024_02_20_113630_create_order_items_table', 7),
	(15, '2024_02_20_113638_create_shippings_table', 7),
	(16, '2024_02_20_114957_create_transactions_table', 8),
	(22, '2024_02_21_095146_alter_table_orders_add_companyname_field', 9),
	(23, '2024_02_26_055656_alter_tabel_contacts_add_column_arhiw', 10),
	(24, '2024_02_26_104533_create_posts_table', 11),
	(25, '2024_02_27_042603_alter_table_add_fileds_autor_and_publish', 12),
	(26, '2024_02_27_092925_create_abouts_table', 13),
	(27, '2024_02_27_122504_create_countries_table', 14),
	(28, '2024_02_29_053228_create_brands_table', 15),
	(29, '2024_02_29_053940_create_manufacturers_table', 16),
	(30, '2024_02_29_054114_add_brand_and_manufacturer_to_products_tabel', 16),
	(31, '2024_02_29_055452_add_image_field_to_brands', 17),
	(32, '2024_02_29_055601_add_image_field_to_manufacturers', 17);

-- Дамп структуры для таблица kendirloc.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addinfo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ordered','delivered','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `canceled_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.orders: ~21 rows (приблизительно)
DELETE FROM `orders`;
INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `tax`, `total`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `country`, `zipcode`, `addinfo`, `companyname`, `status`, `is_shipping_different`, `created_at`, `updated_at`, `delivered_date`, `canceled_date`) VALUES
	(1, 24, 4.00, 417.00, 4.00, 'Yoshi', 'Paul', '6822074728', 'porosukade@mailinator.com', 'Eveniet commodo dol', 'Enim eum ut adipisic', 'Occaecat consequatur', 'Eligendi nulla sed l', '2', '60087', 'Enim voluptas error ', 'Jimenez Dennis Co', 'ordered', 0, '2024-02-21 05:13:33', '2024-02-21 05:13:33', NULL, NULL),
	(2, 1, 3.00, 381.00, 4.00, 'Ethan', 'Sharpe', '7036526567', 'dohofi@mailinator.com', 'Assumenda dolor quis', 'Odio in tenetur adip', 'Quasi pariatur Face', 'Officia pariatur Co', '2', '53342', 'Nisi nisi soluta ex ', 'Harrell and Massey Inc', 'ordered', 1, '2024-02-21 05:16:57', '2024-02-21 05:16:57', NULL, NULL),
	(3, 1, 3.00, 381.00, 4.00, 'Ethan', 'Sharpe', '7036526567', 'dohofi@mailinator.com', 'Assumenda dolor quis', 'Odio in tenetur adip', 'Quasi pariatur Face', 'Officia pariatur Co', '2', '53342', 'Nisi nisi soluta ex ', 'Harrell and Massey Inc', 'ordered', 0, '2024-02-21 05:17:37', '2024-02-21 05:17:37', NULL, NULL),
	(4, 25, 1.00, 191.00, 2.00, 'Emerson', 'Joyce', '4863355', 'pyqup@mailinator.com', 'Saepe nulla culpa a', 'Quis sit ullam nulla', 'Error magni qui ut v', 'Rerum et aliquip dol', '4', '76415', 'Veniam nulla nisi q', 'Hodge and Hayden Inc', 'ordered', 0, '2024-02-21 05:23:18', '2024-02-21 05:23:18', NULL, NULL),
	(5, 1, 37.00, 3.00, 40.00, 'Preston', 'Kelly', '13365487929', 'welyp@mailinator.com', 'Бахар,69/8', NULL, 'Туркменабат', 'Лебап', '1', '746100', 'bla', 'Workman and Atkinson Inc', 'ordered', 0, '2024-02-21 06:26:29', '2024-02-21 06:26:29', NULL, NULL),
	(6, 1, 633.00, 63.00, 696.00, 'Yoshi', 'Paul', '16822074728', 'bobo@tm.tm', 'Бахар,69/8', NULL, 'Туркменабат', 'Лебап', '1', '746100', 'fff', 'Jimenez Dennis Co', 'ordered', 0, '2024-02-21 07:33:44', '2024-02-21 07:33:44', NULL, NULL),
	(7, 1, 4.00, 494.00, 5.00, 'Noble', 'Moses', '352772429', 'pywazyc@mailinator.com', 'Et doloribus aut ten', 'Aut veritatis ullamc', 'Ut impedit quas et ', 'Obcaecati voluptatem', '2', '35467', 'Rem provident quis ', 'Frank and Chambers LLC', 'ordered', 0, '2024-02-22 03:59:38', '2024-02-22 03:59:38', NULL, NULL),
	(8, 1, 3.00, 345.00, 3.00, 'Clark', 'Lara', '4986201', 'hemomaxe@mailinator.com', 'Pariatur Quia proid', 'Omnis sit quae do no', 'Delectus proident ', 'Libero in aliquid eu', '4', '98533', 'Sit excepteur exerc', 'Finley and Lindsay LLC', 'ordered', 0, '2024-02-22 04:14:37', '2024-02-22 04:14:37', NULL, NULL),
	(9, 1, 736.00, 73.00, 809.00, 'Mercedes', 'Lott', '7934', 'wenusa@mailinator.com', 'Optio non doloremqu', 'Iusto in rerum obcae', 'Dolorum dolores sunt', 'Excepteur quo quibus', '4', '64028', 'Esse facere vel qua', 'Love Rivas Trading', 'ordered', 0, '2024-02-22 04:19:36', '2024-02-22 04:19:36', NULL, NULL),
	(10, 1, 1.00, 138.00, 1.00, 'Ross', 'Adkins', '2234152', 'kedygeroz@mailinator.com', 'Qui numquam aliquam ', 'Dolor soluta ullam e', 'Dolor neque corrupti', 'Officia nulla sequi ', '3', '43380', 'Molestiae expedita c', 'Heath Bullock Trading', 'ordered', 0, '2024-02-22 04:55:42', '2024-02-22 04:55:42', NULL, NULL),
	(11, 1, 1.00, 173.00, 1.00, 'Adara', 'Calderon', '6572354603', 'geker@mailinator.com', 'Qui tempore at nece', 'Proident quisquam c', 'Illo ipsum dignissim', 'Nobis et consectetur', '1', '12525', 'Alias quo doloribus ', 'Nixon Ruiz Co', 'ordered', 0, '2024-02-22 04:56:15', '2024-02-22 04:56:15', NULL, NULL),
	(12, 1, 883.00, 88.00, 971.00, 'Ila', 'Santos', '4416399', 'gamy@mailinator.com', 'Voluptatem Dolores ', 'Voluptas quis qui no', 'Quo velit quam in ni', 'Aut voluptatum ea se', '3', '33244', 'Quibusdam magni culp', 'Oneal Harding Co', 'ordered', 0, '2024-02-22 04:57:55', '2024-02-22 04:57:55', NULL, NULL),
	(13, 1, 690.00, 69.00, 759.00, 'Ira', 'Carver', '1444352', 'rekot@mailinator.com', 'Repellendus Volupta', 'Laudantium voluptat', 'Dolorem quia consequ', 'Irure optio debitis', '4', '72933', 'Eveniet qui maiores', 'Marshall and Price Co', 'ordered', 0, '2024-02-22 04:58:32', '2024-02-22 04:58:32', NULL, NULL),
	(14, 26, 665.00, 66.00, 731.00, 'Blair', 'Shaw', '6453025', 'mequc@mailinator.com', 'Unde iusto minima ip', 'Et saepe reiciendis ', 'Qui adipisicing ut s', 'Expedita eos tempor', '0', '62258', 'In amet ullam nesci', 'Owen and Howe Plc', 'ordered', 1, '2024-02-22 06:04:31', '2024-02-22 06:04:31', NULL, NULL),
	(15, 26, 665.00, 66.00, 731.00, 'Blair', 'Shaw', '6453025', 'mequc@mailinator.com', 'Unde iusto minima ip', 'Et saepe reiciendis ', 'Qui adipisicing ut s', 'Expedita eos tempor', '0', '62258', 'In amet ullam nesci', 'Owen and Howe Plc', 'ordered', 0, '2024-02-22 06:04:53', '2024-02-22 06:04:53', NULL, NULL),
	(16, 1, 2.00, 221.00, 2.00, 'Jonah', 'Levine', '3886242606', 'vuty@mailinator.com', 'Eos et et lorem vita', 'Quibusdam eos sunt q', 'Harum ratione quae e', 'Eveniet cillum expl', '2', '52019', 'Nisi laborum ea vel ', 'Rowland Daugherty Plc', 'ordered', 0, '2024-02-22 06:15:30', '2024-02-22 06:15:30', NULL, NULL),
	(17, 1, 736.00, 73.00, 809.00, 'Elliott', 'Pope', '9278408', 'lypuretofy@mailinator.com', 'Praesentium culpa do', 'Modi accusantium mol', 'Eos dolor necessita', 'Dolorem sit ullamco ', '1', '68727', 'In qui quo facilis n', 'Wade Gonzalez Trading', 'ordered', 0, '2024-02-25 22:55:18', '2024-02-28 05:43:35', NULL, NULL),
	(18, 14, 835.00, 399.00, 4.00, 'Keelie', 'Frazier', '9181996', 'vocuwos@mailinator.com', 'Architecto optio te', 'Deleniti ex mollitia', 'Velit doloremque mo', 'Voluptate consequatu', '1', '65234', 'Perferendis lorem vo', 'Matthews and Mckenzie Inc', 'ordered', 0, '2024-02-27 04:56:45', '2024-02-27 04:56:45', NULL, NULL),
	(19, 14, 852.00, 441.00, 4.00, 'Keefe', 'Gross', '1443304', 'roxytak@mailinator.com', 'Delectus veritatis ', 'Excepturi laborum E', 'Magni mollit similiq', 'Provident exercitat', '2', '82829', 'Ex quisquam ut nesci', 'Conley Best Co', 'ordered', 0, '2024-02-28 01:30:24', '2024-02-28 01:30:24', NULL, NULL),
	(20, 14, 1733.00, 173.00, 1906.00, 'Julie', 'Mccray', '9582', 'myfox@mailinator.com', 'Recusandae Magna ut', 'Dolorum commodi enim', 'In illo exercitation', 'Sit animi in quidem', '1', '82291', 'Qui laboris omnis si', 'Yates and Clark Associates', 'ordered', 0, '2024-02-28 03:47:46', '2024-02-28 03:47:46', NULL, NULL),
	(21, 14, 5026.00, 502.00, 5528.00, 'Cole', 'Mcdonald', '7379085', 'tumenuduwu@mailinator.com', 'Sint quo qui cillum ', 'Rerum reiciendis et ', 'Eius similique ipsum', 'Facilis vel placeat', '4', '96614', 'Blanditiis delectus', 'Mcmahon Baldwin Trading', 'ordered', 0, '2024-02-28 04:39:42', '2024-02-28 04:39:42', NULL, NULL);

-- Дамп структуры для таблица kendirloc.order_items
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.order_items: ~58 rows (приблизительно)
DELETE FROM `order_items`;
INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 834.00, 2.00, '2024-02-21 05:13:33', '2024-02-21 05:13:33'),
	(2, 1, 1, 119.00, 4.00, '2024-02-21 05:13:33', '2024-02-21 05:13:33'),
	(3, 4, 1, 645.00, 2.00, '2024-02-21 05:13:33', '2024-02-21 05:13:33'),
	(4, 7, 1, 736.00, 1.00, '2024-02-21 05:13:33', '2024-02-21 05:13:33'),
	(5, 4, 2, 645.00, 2.00, '2024-02-21 05:16:57', '2024-02-21 05:16:57'),
	(6, 7, 2, 736.00, 1.00, '2024-02-21 05:16:57', '2024-02-21 05:16:57'),
	(7, 2, 2, 834.00, 2.00, '2024-02-21 05:16:57', '2024-02-21 05:16:57'),
	(8, 1, 2, 119.00, 1.00, '2024-02-21 05:16:57', '2024-02-21 05:16:57'),
	(9, 4, 3, 645.00, 2.00, '2024-02-21 05:17:37', '2024-02-21 05:17:37'),
	(10, 7, 3, 736.00, 1.00, '2024-02-21 05:17:37', '2024-02-21 05:17:37'),
	(11, 2, 3, 834.00, 2.00, '2024-02-21 05:17:37', '2024-02-21 05:17:37'),
	(12, 1, 3, 119.00, 1.00, '2024-02-21 05:17:37', '2024-02-21 05:17:37'),
	(13, 13, 4, 829.00, 1.00, '2024-02-21 05:23:18', '2024-02-21 05:23:18'),
	(14, 21, 4, 306.00, 2.00, '2024-02-21 05:23:18', '2024-02-21 05:23:18'),
	(15, 16, 4, 472.00, 1.00, '2024-02-21 05:23:18', '2024-02-21 05:23:18'),
	(16, 8, 5, 37.00, 1.00, '2024-02-21 06:26:29', '2024-02-21 06:26:29'),
	(17, 24, 6, 193.00, 1.00, '2024-02-21 07:33:44', '2024-02-21 07:33:44'),
	(18, 20, 6, 440.00, 1.00, '2024-02-21 07:33:44', '2024-02-21 07:33:44'),
	(19, 7, 7, 736.00, 2.00, '2024-02-22 03:59:38', '2024-02-22 03:59:38'),
	(20, 8, 7, 37.00, 1.00, '2024-02-22 03:59:38', '2024-02-22 03:59:38'),
	(21, 21, 7, 306.00, 1.00, '2024-02-22 03:59:38', '2024-02-22 03:59:38'),
	(22, 13, 7, 829.00, 3.00, '2024-02-22 03:59:38', '2024-02-22 03:59:38'),
	(23, 4, 7, 645.00, 1.00, '2024-02-22 03:59:38', '2024-02-22 03:59:38'),
	(24, 22, 8, 259.00, 1.00, '2024-02-22 04:14:37', '2024-02-22 04:14:37'),
	(25, 16, 8, 472.00, 1.00, '2024-02-22 04:14:37', '2024-02-22 04:14:37'),
	(26, 25, 8, 705.00, 3.00, '2024-02-22 04:14:37', '2024-02-22 04:14:37'),
	(27, 10, 8, 609.00, 1.00, '2024-02-22 04:14:37', '2024-02-22 04:14:37'),
	(28, 7, 9, 736.00, 1.00, '2024-02-22 04:19:36', '2024-02-22 04:19:36'),
	(29, 7, 10, 736.00, 1.00, '2024-02-22 04:55:42', '2024-02-22 04:55:42'),
	(30, 4, 10, 645.00, 1.00, '2024-02-22 04:55:42', '2024-02-22 04:55:42'),
	(31, 22, 11, 259.00, 1.00, '2024-02-22 04:56:15', '2024-02-22 04:56:15'),
	(32, 4, 11, 645.00, 1.00, '2024-02-22 04:56:15', '2024-02-22 04:56:15'),
	(33, 13, 11, 829.00, 1.00, '2024-02-22 04:56:15', '2024-02-22 04:56:15'),
	(34, 24, 12, 193.00, 1.00, '2024-02-22 04:57:55', '2024-02-22 04:57:55'),
	(35, 20, 12, 440.00, 1.00, '2024-02-22 04:57:55', '2024-02-22 04:57:55'),
	(36, 23, 12, 250.00, 1.00, '2024-02-22 04:57:55', '2024-02-22 04:57:55'),
	(37, 23, 13, 250.00, 1.00, '2024-02-22 04:58:32', '2024-02-22 04:58:32'),
	(38, 20, 13, 440.00, 1.00, '2024-02-22 04:58:32', '2024-02-22 04:58:32'),
	(39, 24, 14, 193.00, 1.00, '2024-02-22 06:04:31', '2024-02-22 06:04:31'),
	(40, 16, 14, 472.00, 1.00, '2024-02-22 06:04:31', '2024-02-22 06:04:31'),
	(41, 24, 15, 193.00, 1.00, '2024-02-22 06:04:53', '2024-02-22 06:04:53'),
	(42, 16, 15, 472.00, 1.00, '2024-02-22 06:04:53', '2024-02-22 06:04:53'),
	(43, 4, 16, 645.00, 1.00, '2024-02-22 06:15:30', '2024-02-22 06:15:30'),
	(44, 7, 16, 736.00, 1.00, '2024-02-22 06:15:30', '2024-02-22 06:15:30'),
	(45, 2, 16, 834.00, 1.00, '2024-02-22 06:15:30', '2024-02-22 06:15:30'),
	(46, 7, 17, 736.00, 1.00, '2024-02-25 22:55:18', '2024-02-25 22:55:18'),
	(47, 1, 18, 119.00, 2.00, '2024-02-27 04:56:45', '2024-02-27 04:56:45'),
	(48, 2, 18, 834.00, 2.00, '2024-02-27 04:56:45', '2024-02-27 04:56:45'),
	(49, 7, 18, 736.00, 1.00, '2024-02-27 04:56:45', '2024-02-27 04:56:45'),
	(50, 4, 18, 645.00, 1.00, '2024-02-27 04:56:45', '2024-02-27 04:56:45'),
	(51, 25, 18, 705.00, 1.00, '2024-02-27 04:56:45', '2024-02-27 04:56:45'),
	(52, 23, 19, 250.00, 3.00, '2024-02-28 01:30:24', '2024-02-28 01:30:24'),
	(53, 20, 19, 440.00, 4.00, '2024-02-28 01:30:24', '2024-02-28 01:30:24'),
	(54, 24, 19, 193.00, 5.00, '2024-02-28 01:30:24', '2024-02-28 01:30:24'),
	(55, 16, 19, 472.00, 2.00, '2024-02-28 01:30:24', '2024-02-28 01:30:24'),
	(56, 13, 20, 829.00, 1.00, '2024-02-28 03:47:46', '2024-02-28 03:47:46'),
	(57, 4, 20, 645.00, 1.00, '2024-02-28 03:47:46', '2024-02-28 03:47:46'),
	(58, 22, 20, 259.00, 1.00, '2024-02-28 03:47:46', '2024-02-28 03:47:46'),
	(59, 16, 21, 472.00, 3.00, '2024-02-28 04:39:42', '2024-02-28 04:39:42'),
	(60, 25, 21, 705.00, 2.00, '2024-02-28 04:39:42', '2024-02-28 04:39:42'),
	(61, 20, 21, 440.00, 5.00, '2024-02-28 04:39:42', '2024-02-28 04:39:42');

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

-- Дамп структуры для таблица kendirloc.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` bigint NOT NULL DEFAULT '1',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.posts: ~11 rows (приблизительно)
DELETE FROM `posts`;
INSERT INTO `posts` (`id`, `title`, `image`, `text`, `author`, `published`, `created_at`, `updated_at`) VALUES
	(1, 'Sit do dolorum qui s', '1708947263.jpg', 'Pariatur Sunt voluptas in provident facere beatae et quae magnam exercitation fugit ex', 1, 1, '2024-02-26 06:34:23', '2024-02-26 06:34:23'),
	(2, 'Et quis iure est por', '1708949405.jpg', 'Culpa quod dolor quia nihil odio dolores et adipisicing consequat Est dolores itaque dolorem et dolore reprehenderit dolor expedita est', 1, 1, '2024-02-26 06:34:57', '2024-02-26 07:10:05'),
	(4, 'Doloremque porro nih', '1708948457.webp', 'Aliqua Repudiandae odio libero vitae officia eum sint qui ut qui perferendis', 2, 1, '2024-02-26 06:54:17', '2024-02-26 06:54:17'),
	(5, 'Odio molestiae solut', '1708948465.webp', 'Quos Nam proident labore fugiat dolor voluptas cum laudantium consequatur est cum totam eiusmod harum tempora dolorem', 2, 1, '2024-02-26 06:54:25', '2024-02-26 06:54:25'),
	(6, 'Soluta reiciendis', '1708949443.webp', 'Minus velit et omnis nulla blanditiis aut quo tenetur rerum iure et quisquam consequat Et nostrud velit eveniet magnam excepteur', 3, 1, '2024-02-26 06:54:39', '2024-02-26 07:10:43'),
	(7, 'Sunt reiciendis dol', '1708949470.webp', 'Deserunt suscipit ut quaerat aliquip nulla consequatur Perferendis ut deserunt non nulla officia velit eaque iusto distinctio Suscipit necessitatibus', 3, 1, '2024-02-26 07:10:55', '2024-02-26 07:11:10'),
	(8, 'Magnam aut lorem pro', '1708949588.webp', 'Nam suscipit molestiae aut nostrum', 3, 1, '2024-02-26 07:13:08', '2024-02-26 07:13:08'),
	(9, 'Non libero est quasi', '1708951708.jpg', 'Dolores aut aut dolorum voluptas sit eu aut enim veniam est consequuntur facilis\nOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit aut\nOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit aut\nOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit aut\nOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit aut\nOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit autOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit aut\nOmnis qui nobis sint suscipit ea fugiat aute animi officiis sit aut', 1, 1, '2024-02-26 07:48:28', '2024-02-26 07:48:28'),
	(10, 'Dignissimos proident', '1709017812.png', 'Aliquip iusto in esse obcaecati sit corrupti dolorem est laboris laborum Nisi provident totam ducimus', 1, 0, '2024-02-27 02:10:12', '2024-02-27 02:10:12'),
	(11, 'Quia ducimus dolore', '1709017944.jpg', 'Velit possimus aut ea cupiditate reprehenderit sed aut', 1, 0, '2024-02-27 02:12:24', '2024-02-27 02:12:24'),
	(12, 'Minim ea sit numqua', '1709017957.jpg', 'Voluptas pariatur Cupiditate voluptas commodi ut fugit quaerat illo ratione in vitae laboriosam sed accusamus corrupti voluptates', 1, 0, '2024-02-27 02:12:37', '2024-02-27 02:12:37');

-- Дамп структуры для процедура kendirloc.procOrder
DROP PROCEDURE IF EXISTS `procOrder`;
DELIMITER //
CREATE PROCEDURE `procOrder`()
BEGIN
DECLARE cr_stack_depth_handler INTEGER/*[cr_debug.1]*/;
DECLARE cr_stack_depth INTEGER DEFAULT cr_debug.ENTER_MODULE2('procOrder', 'kendirloc', 7, 100637)/*[cr_debug.1]*/;
CALL cr_debug.TRACE(1, 1, 0, 5, 0, cr_stack_depth)/*[cr_debug.2]*/;
CALL cr_debug.TRACE(2, 2, 0, 23, 101, cr_stack_depth)/*[cr_debug.2]*/;
SELECT * FROM orders o;
CALL cr_debug.UPDATE_SYSTEM_CALLS(101)/*[cr_debug.1]*/;
CALL cr_debug.TRACE(3, 3, 0, 3, 0, cr_stack_depth)/*[cr_debug.2]*/;
SET cr_stack_depth = cr_stack_depth - 1/*[cr_debug.2]*/;
CALL cr_debug.LEAVE_MODULE(cr_stack_depth)/*[cr_debug.2]*/;
END//
DELIMITER ;

-- Дамп структуры для процедура kendirloc.procOrderTotalSum
DROP PROCEDURE IF EXISTS `procOrderTotalSum`;
DELIMITER //
CREATE PROCEDURE `procOrderTotalSum`(IN order_id INT)
BEGIN
DECLARE cr_stack_depth_handler INTEGER/*[cr_debug.1]*/;
DECLARE cr_stack_depth INTEGER DEFAULT cr_debug.ENTER_MODULE2('procOrderTotalSum', 'kendirloc', 7, 100637)/*[cr_debug.1]*/;

CALL cr_debug.UPDATE_WATCH3('order_id', order_id, 'INT', cr_stack_depth)/*[cr_debug.2]*/;
CALL cr_debug.TRACE(1, 1, 0, 5, 0, cr_stack_depth)/*[cr_debug.2]*/;
CALL cr_debug.TRACE(3, 4, 0, 27, 101, cr_stack_depth)/*[cr_debug.2]*/;
SELECT sum(oi.price*oi.quantity) AS ototal FROM order_items oi
WHERE oi.order_id=order_id;
CALL cr_debug.UPDATE_SYSTEM_CALLS(101)/*[cr_debug.1]*/;

CALL cr_debug.TRACE(6, 6, 0, 3, 0, cr_stack_depth)/*[cr_debug.2]*/;
SET cr_stack_depth = cr_stack_depth - 1/*[cr_debug.2]*/;
CALL cr_debug.LEAVE_MODULE(cr_stack_depth)/*[cr_debug.2]*/;
END//
DELIMITER ;

-- Дамп структуры для процедура kendirloc.procProductSearch
DROP PROCEDURE IF EXISTS `procProductSearch`;
DELIMITER //
CREATE PROCEDURE `procProductSearch`(IN searchTerm VARCHAR(255), IN Category_id INT)
BEGIN
DECLARE cr_stack_depth_handler INTEGER/*[cr_debug.1]*/;
DECLARE cr_stack_depth INTEGER DEFAULT cr_debug.ENTER_MODULE2('procProductSearch', 'kendirloc', 7, 100637)/*[cr_debug.1]*/;
CALL cr_debug.UPDATE_WATCH3('searchTerm', searchTerm, 'VARCHAR(255)', cr_stack_depth)/*[cr_debug.2]*/;
CALL cr_debug.UPDATE_WATCH3('Category_id', Category_id, 'INT', cr_stack_depth)/*[cr_debug.2]*/;
CALL cr_debug.TRACE(1, 1, 0, 5, 0, cr_stack_depth)/*[cr_debug.2]*/;
CALL cr_debug.TRACE(2, 3, 0, 23, 0, cr_stack_depth)/*[cr_debug.2]*/;
IF searchTerm<>'' THEN CALL cr_debug.TRACE(2, 2, 23, 81, 0, cr_stack_depth)/*[cr_debug.2]*/;
set @s= CONCAT(' AND p.name LIKE ', '"%',searchTerm,'%"');
CALL cr_debug.UPDATE_WATCH3('@s', @s, '', cr_stack_depth)/*[cr_debug.1]*/;
ELSE CALL cr_debug.TRACE(3, 3, 5, 15, 0, cr_stack_depth)/*[cr_debug.2]*/;
set @s='';
CALL cr_debug.UPDATE_WATCH3('@s', @s, '', cr_stack_depth)/*[cr_debug.1]*/; END IF;

 CALL cr_debug.TRACE(5, 5, 1, 69, 0, cr_stack_depth)/*[cr_debug.2]*/;
set @q = 'SELECT * FROM products p WHERE p.category_id=Category_id';
CALL cr_debug.UPDATE_WATCH3('@q', @q, '', cr_stack_depth)/*[cr_debug.1]*/;
 CALL cr_debug.TRACE(6, 6, 1, 27, 0, cr_stack_depth)/*[cr_debug.2]*/;
SET @sql = CONCAT(@q, @s);
CALL cr_debug.UPDATE_WATCH3('@sql', @sql, '', cr_stack_depth)/*[cr_debug.1]*/;
CALL cr_debug.UPDATE_WATCH3('@q', @q, '', cr_stack_depth)/*[cr_debug.1]*/;
CALL cr_debug.UPDATE_WATCH3('@s', @s, '', cr_stack_depth)/*[cr_debug.1]*/;
 CALL cr_debug.TRACE(7, 7, 1, 24, 0, cr_stack_depth)/*[cr_debug.2]*/;
PREPARE STMT FROM @sql;
 CALL cr_debug.TRACE(8, 8, 1, 14, 100, cr_stack_depth)/*[cr_debug.2]*/;
EXECUTE STMT;
CALL cr_debug.UPDATE_SYSTEM_CALLS(100)/*[cr_debug.1]*/;
CALL cr_debug.TRACE(9, 9, 0, 3, 0, cr_stack_depth)/*[cr_debug.2]*/;
SET cr_stack_depth = cr_stack_depth - 1/*[cr_debug.2]*/;
CALL cr_debug.LEAVE_MODULE(cr_stack_depth)/*[cr_debug.2]*/;
END//
DELIMITER ;

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
  `brand_id` bigint unsigned NOT NULL,
  `manufacturer_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.products: ~22 rows (приблизительно)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`, `new`, `brand_id`, `manufacturer_id`) VALUES
	(1, 'Orla Allison ', 'orla-allison', 'Magna reiciendis debitis repellendus Soluta quod architecto sequi in qui minima repellendus Cumque', 'Rem alias cupidatat sint totam sint fugiat fuga Consequuntur esse magnam nihil qui ducimus quo dolorem occaecat', 665.00, 119.00, 'Tenetur dolor et sin', 'instock', 1, 702.00, '1708063279.webp', '17080632790.webp,17080632791.webp,17080632792.webp,17080632793.jpg,17080632794.jpg', 36, '2024-02-16 01:01:19', '2024-02-16 01:01:19', NULL, 0, 0),
	(2, 'Nerea Steele ', 'nerea-steele', 'Elit tempore aliqua Veniam dolores culpa atque amet voluptas nesciunt ut itaque perferendis na', 'Maxime amet numquam aut nesciunt dignissimos eum ipsam saepe qui qui quos sed fugiat dolor tenetur exercitation aut', 36.00, 834.00, 'NER/36/83', 'instock', 1, 884.00, '1708064315.jpg', '17080643150.webp,17080643151.webp,17080643152.webp,17080643153.jpg,17080643154.jpg', 36, '2024-02-16 01:18:35', '2024-02-16 03:49:47', NULL, 0, 0),
	(4, 'Emerald Mcclainn', 'emerald-mcclainn', 'Sint facilis qui sequi ut temporibus', 'Vero minus ipsum corrupti omnis corporis quo repellendus Sed et elit voluptas dolore eiusmod suscipit porro', 17.00, 645.00, 'In blanditiis ad aut', 'instock', 1, 534.00, '1708066058.webp', '17080660580.webp,17080660581.webp,17080660582.webp', 23, '2024-01-16 01:47:38', '2024-02-16 01:47:38', NULL, 0, 0),
	(7, 'Abbot Morrowe', 'abbot-morrowe', 'Sed nulla vel dolorem quo commodo rerum facere qui corrupti voluptate nemo', 'Cillum voluptas nisi anim neque voluptas quaerat iusto quis quis ad excepturi ullamco nihil vel cum nulla earum est', 125.00, 736.00, 'Obcaecati in ut tene', 'instock', 0, 17.00, '1708072016.jpg', '17080691720.webp,17080691721.webp,17080691722.webp', 29, '2024-01-16 02:39:32', '2024-02-16 03:26:56', NULL, 0, 0),
	(8, 'Cynthia Callahan', 'cynthia-callahan', 'Nostrum deleniti do cillum sunt obcaecati et occaecat facere id ex voluptatum sunt aliquip sed est s', 'Nulla impedit assumenda consequatur Et vel molestiae cumque alias laboris sit aliquam qui numquam dignissimos ut', 39.00, 37.00, '456545', 'instock', 1, 488.00, '1708073171.jpg', '17080691950.webp,17080691951.webp,17080691952.jpg', 36, '2024-02-16 02:39:55', '2024-02-16 03:51:12', NULL, 0, 0),
	(9, 'Risa Cline', 'risa-cline', 'Exercitationem harum ea voluptas ut asperiores impedit tempora autem dicta culpa aute autem volupt', 'Cillum perferendis repellendus Asperiores temporibus quis accusantium aute quo fugiat totam sunt sed officiis consequuntur animi dolore ex', 471.00, 600.00, 'Et tempor molestiae ', 'instock', 1, 499.00, '1708073512.jpg', '17080735120.webp,17080735121.webp,17080735122.webp', 24, '2024-02-16 03:51:52', '2024-02-16 03:51:52', NULL, 0, 0),
	(10, 'Ian Mckay', 'ian-mckay', 'Ut debitis elit velit magnam quae itaque quia veritatis ipsam alias tenetur anim esse est ullamco', 'Eaque illo numquam omnis totam qui non aut tenetur culpa nostrum consequat Do enim', 282.00, 609.00, 'Ut velit et sunt off', 'instock', 0, 814.00, '1708074311.webp', '17080743110.jpg,17080743111.jpg,17080743112.webp,17080743113.webp', 24, '2024-02-16 04:05:11', '2024-02-16 04:05:11', NULL, 0, 0),
	(11, 'Ori Hinton', 'ori-hinton', 'Exercitation quos ut molestias adipisci id ut distinctio Et exercitationem', 'Reiciendis cum qui dolores aut dolorum cum aut magni ducimus porro adipisicing et sed qui', 963.00, 454.00, 'Est voluptatem Nec', 'instock', 0, 97.00, '1708074337.jpg', '17080743370.webp,17080743371.webp,17080743372.jpg', 22, '2024-02-16 04:05:37', '2024-02-16 04:05:37', NULL, 0, 0),
	(12, 'Serina Fields ', 'serina-fields', 'Voluptate proident soluta dolor culpa qui ipsa est anim exercitation minus repudiandae quis asper', 'Dignissimos aut quis quo sit veniam exercitation eligendi minima', 371.00, 510.00, 'Eum voluptatum non d', 'instock', 0, 82.00, '1708074355.jpg', '17080743550.jpg,17080743551.webp,17080743552.webp', 36, '2024-02-16 04:05:55', '2024-02-16 04:05:55', NULL, 0, 0),
	(13, 'Hayley Knapp', 'hayley-knapp', 'Reiciendis corrupti voluptate aperiam possimus quia suscipit distinctio Omnis nihil distinctio Q', 'Quia tenetur quo est voluptate ex maiores rem voluptate', 454.00, 829.00, 'Pariatur Aut ut ven', 'instock', 1, 913.00, '1708075258.jpg', '17080752580.webp,17080752581.jpg,17080752582.jpg', 23, '2024-02-16 04:20:58', '2024-02-16 04:20:58', NULL, 0, 0),
	(14, 'Vincent Cabrerar', 'vincent-cabrerar', 'Aperiam nihil sunt at est totam ut unde est', 'Est voluptas voluptate in officia perferendis placeat', 999.00, 847.00, 'Iure provident labo', 'instock', 1, 804.00, '1708075288.webp', '17080752880.webp,17080752881.jpg,17080752882.jpg', 22, '2024-02-16 04:21:28', '2024-02-16 04:21:28', NULL, 0, 0),
	(15, 'Nasim Workman', 'nasim-workman', 'Voluptate cumque nisi amet expedita nihil laboris', 'Rem ut in quos doloribus adipisci unde id saepe', 357.00, 39.00, 'Accusamus do quasi s', 'instock', 1, 975.00, '1708075970.jpg', '17080759700.jpg,17080759701.jpg,17080759702.webp', 29, '2024-02-16 04:32:50', '2024-02-16 04:32:50', NULL, 0, 0),
	(16, 'Iola Daniels', 'iola-daniels', 'Ipsum qui ut tempora sed sunt totam iure quaerat exercitation quia excepturi et amet corporis ad s', 'Elit quasi eos et qui pariatur Quia', 529.00, 472.00, 'TRE123', 'instock', 0, 71.00, '1708076392.jpg', '17080763420.jpg', 23, '2024-02-16 04:39:02', '2024-02-16 04:39:52', NULL, 0, 0),
	(17, 'Vera Matthews', 'vera-matthews', 'Nihil amet enim ut voluptatem culpa anim corrupti do sapiente debitis totam sit esse porro', 'Doloremque dolorem aut aut tenetur veniam nihil ut dolore sint quo sed unde voluptatum tenetur ea minima est tenetur', 290.00, 476.00, 'TRE123', 'instock', 1, 161.00, '1708076491.webp', '17080763610.jpg,17080763611.jpg,17080763612.webp', 22, '2024-02-16 04:39:21', '2024-02-16 04:41:31', NULL, 0, 0),
	(18, 'Sopoline Maddox', 'sopoline-maddox', 'Enim nihil quod ut non et dolorum ut sit odio possimus non error aut hic deserunt aut', 'Tenetur esse nobis nesciunt exercitationem mollit officia est odio unde qui alias laudantium et ut velit', 311.00, 296.00, 'Nihil enim asperiore', 'instock', 1, 475.00, '1708077883.jpg', '17080778830.webp,17080778831.jpg,17080778832.webp,17080778833.jpg', 36, '2024-01-16 05:04:43', '2024-02-16 05:04:43', NULL, 0, 0),
	(19, 'Yetta Mejia', 'yetta-mejia', 'Odit ullamco non sed omnis consequatur et est beatae est possimus pariatur Doloremque ut quod min', 'Nisi et suscipit assumenda ipsum numquam est in et', 282.00, 15.00, 'Quo mollit est eaqu', 'instock', 1, 842.00, '1708078456.jpg', '17080784560.jpg,17080784561.jpg,17080784562.jpg,17080784563.webp', 29, '2024-02-16 05:14:16', '2024-02-16 05:14:16', NULL, 0, 0),
	(20, 'Leandra Pennington', 'leandra-pennington', 'Nostrum est molestias assumenda quo voluptas voluptatem in iure nihil placeat itaque', 'Sed ea cupiditate asperiores dolore dolor aut eaque quis dolor ad animi reiciendis a', 947.00, 440.00, 'Earum at incididunt ', 'instock', 1, 849.00, '1708078484.jpg', '17080784840.jpg,17080784841.webp,17080784842.jpg', 29, '2024-02-16 05:14:44', '2024-02-16 05:14:44', NULL, 0, 0),
	(21, 'Daphne Morin', 'daphne-morin', 'Enim eligendi consequatur incidunt sed', 'Iusto atque qui tempor dolores eligendi aut atque deleniti consectetur elit commodo optio repellendus Fugiat excepturi sed incididunt', 395.00, 306.00, 'Magnam provident of', 'instock', 0, 133.00, '1708336746.webp', '17083367460.jpg,17083367461.jpg,17083367462.jpg', 22, '2024-02-19 04:59:06', '2024-02-19 04:59:06', NULL, 0, 0),
	(22, 'Echo Moore', 'echo-moore', 'Est Nam aut repudiandae consectetur placeat consequatur nesciunt fugiat quas magna debitis deseru', 'Repudiandae quaerat nesciunt sit dicta autem', 674.00, 259.00, 'Et reiciendis conseq', 'instock', 1, 960.00, '1708336774.webp', '17083367740.jpg,17083367741.png,17083367742.webp', 22, '2024-02-19 04:59:34', '2024-02-19 04:59:34', NULL, 0, 0),
	(23, 'Kirby Mcfadden', 'kirby-mcfadden', 'Ut corrupti qui voluptate reprehenderit asperiores et iusto velit dolore dolores dicta labore', 'Voluptatem nihil esse et sunt reprehenderit distinctio Ducimus aut accusamus et modi adipisci perspiciatis qui ducimus quod sit', 227.00, 250.00, 'Voluptas delectus u', 'instock', 1, 517.00, '1708336790.jpg', '17083367900.webp,17083367901.webp,17083367902.webp,17083367903.webp', 29, '2024-02-19 04:59:50', '2024-02-19 04:59:50', NULL, 0, 0),
	(24, 'Mary Drake', 'mary-drake', 'Vel ea aut dolore atque voluptatem quidem quo quia similique non consequatur Modi expedita impedit', 'Harum eos sint exercitationem aperiam nisi sunt est magni ea unde dolores itaque quae dolor a molestiae autem iusto voluptates', 235.00, 193.00, 'Maxime earum necessi', 'instock', 1, 109.00, '1708339540.webp', '17083395400.jpg,17083395401.jpg,17083395402.jpg', 36, '2024-02-19 05:45:40', '2024-02-19 05:45:40', NULL, 0, 0),
	(25, 'Keiko Palmer', 'keiko-palmer', 'Nihil commodo dolor consequuntur atque nihil excepturi', 'Perferendis voluptate nulla cupiditate maiores quibusdam corporis nostrum est suscipit dolorem iusto dolore duis aut', 951.00, 705.00, 'Non voluptatum quia ', 'instock', 0, 246.00, '1708339584.webp', '17083395840.png,17083395841.webp,17083395842.jpg,17083395843.webp,17083395844.jpg,17083395845.jpg', 36, '2024-02-19 05:46:24', '2024-02-19 05:46:24', NULL, 0, 0),
	(26, 'Oliver Sharp', 'oliver-sharp', 'Veritatis temporibus anim adipisicing atque dolores est et est totam aliqua Velit quo mollit accusa', 'Sit dolor rerum adipisci labore quia ad consequatur', 780.00, 14.00, '153.01.A01.EYR.08', 'instock', 0, 928.00, '1709179277.jpg', '17091792770.webp,17091792771.webp,17091792772.webp', 36, '2024-02-28 23:01:17', '2024-02-28 23:01:17', NULL, 0, 0);

-- Дамп структуры для таблица kendirloc.shippings
DROP TABLE IF EXISTS `shippings`;
CREATE TABLE IF NOT EXISTS `shippings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shippings_order_id_foreign` (`order_id`),
  CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.shippings: ~0 rows (приблизительно)
DELETE FROM `shippings`;

-- Дамп структуры для таблица kendirloc.transactions
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `mode` enum('code','card','paypal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_user_id_foreign` (`user_id`),
  KEY `transactions_order_id_foreign` (`order_id`),
  CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.transactions: ~19 rows (приблизительно)
DELETE FROM `transactions`;
INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
	(1, 24, 1, 'code', 'pending', '2024-02-21 05:13:33', '2024-02-21 05:13:33'),
	(2, 1, 3, 'paypal', 'pending', '2024-02-21 05:17:37', '2024-02-21 05:17:37'),
	(3, 25, 4, 'code', 'pending', '2024-02-21 05:23:18', '2024-02-21 05:23:18'),
	(4, 1, 5, 'card', 'pending', '2024-02-21 06:26:29', '2024-02-21 06:26:29'),
	(5, 1, 6, 'card', 'pending', '2024-02-21 07:33:44', '2024-02-21 07:33:44'),
	(6, 1, 7, 'card', 'pending', '2024-02-22 03:59:38', '2024-02-22 03:59:38'),
	(7, 1, 8, 'card', 'pending', '2024-02-22 04:14:37', '2024-02-22 04:14:37'),
	(8, 1, 9, 'card', 'pending', '2024-02-22 04:19:36', '2024-02-22 04:19:36'),
	(9, 1, 10, 'card', 'pending', '2024-02-22 04:55:42', '2024-02-22 04:55:42'),
	(10, 1, 11, 'card', 'pending', '2024-02-22 04:56:15', '2024-02-22 04:56:15'),
	(11, 1, 12, 'card', 'pending', '2024-02-22 04:57:55', '2024-02-22 04:57:55'),
	(12, 1, 13, 'card', 'pending', '2024-02-22 04:58:32', '2024-02-22 04:58:32'),
	(13, 26, 15, 'card', 'pending', '2024-02-22 06:04:53', '2024-02-22 06:04:53'),
	(14, 1, 16, 'card', 'pending', '2024-02-22 06:15:30', '2024-02-22 06:15:30'),
	(15, 1, 17, 'card', 'pending', '2024-02-25 22:55:18', '2024-02-25 22:55:18'),
	(16, 14, 18, 'card', 'pending', '2024-02-27 04:56:45', '2024-02-27 04:56:45'),
	(17, 14, 19, 'card', 'pending', '2024-02-28 01:30:24', '2024-02-28 01:30:24'),
	(18, 14, 20, 'card', 'pending', '2024-02-28 03:47:46', '2024-02-28 03:47:46'),
	(19, 14, 21, 'card', 'pending', '2024-02-28 04:39:42', '2024-02-28 04:39:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.users: ~21 rows (приблизительно)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `utype`) VALUES
	(1, 'Babamurad', 'bobo@tm.tm', NULL, '$2y$12$7pzRcWSmEO7cXk1CMnbmQO.RChYXdKWIGDtMkO9KcO3/a9XEc1arm', NULL, '2024-02-13 00:18:03', '2024-02-28 06:17:38', 'ADM'),
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
	(14, 'Totam aliquip est al', 'bywybatuxe@mailinator.com', NULL, '$2y$12$UiXjWZ/bPTGMEE/iAOFAh.eZtQJX0YW3L8RlBD/CjMkCHgNmJdkSy', NULL, '2024-02-13 03:18:53', '2024-02-28 06:42:39', 'USR'),
	(15, 'Sequi quos vitae ad ', 'gozuba@mailinator.com', NULL, '$2y$12$ESnJGAUb6CNBGvh6CbKF4.T.frx2X.P95kcxHdqmhT0wD3P1ZIFIi', NULL, '2024-02-13 03:22:29', '2024-02-13 03:22:29', 'USR'),
	(16, 'Ad eligendi elit no', 'kavy@mailinator.com', NULL, '$2y$12$QqIds8hzACXeTfDXE9E71OE7LaAqQB1C0Mj.JJxLRFh3/UcGFd8le', NULL, '2024-02-13 03:27:16', '2024-02-13 03:27:16', 'USR'),
	(17, 'Consequatur ex labo', 'puwudevoj@mailinator.com', NULL, '$2y$12$EtPYsUf77Fnvp9k2AIDAz.xU3jcKD6DcvU8XUNNZ62IHhChPJHTU2', NULL, '2024-02-13 03:27:36', '2024-02-13 03:27:36', 'USR'),
	(18, 'Ea vel error ullamco', 'hivydal@mailinator.com', NULL, '$2y$12$LFe4q6KeUsjWBxdXYX1kb.OEumGEh6lIVZ/XnYdQlerOu68prRMUO', NULL, '2024-02-13 03:28:36', '2024-02-13 03:28:36', 'USR'),
	(19, 'Omnis dolores id sin', 'vofube@mailinator.com', NULL, '$2y$12$oXxtnaE2tlCAPProNdbBFeyMDDCjCgjivObynCXrQcv2eRwDlsX2O', NULL, '2024-02-13 04:03:34', '2024-02-13 04:03:34', 'USR'),
	(20, 'Eu quia explicabo V', 'rola@mailinator.com', NULL, '$2y$12$PTWy1JZBF02wBNXROYFSLOtofqDZUWG1bybyYeLO5fh1QrL44hV1a', NULL, '2024-02-13 04:22:39', '2024-02-13 04:22:39', 'USR'),
	(21, 'Qui voluptas dolores', 'jelybyr@mailinator.com', NULL, '$2y$12$mTwh2zAshGvY8L5.6rmOhe9.zcASwWCkf7EpiU2gr999YDPkqhB6W', NULL, '2024-02-13 04:23:06', '2024-02-13 04:23:06', 'USR'),
	(22, 'Guvanch', 'guvanch.soft@kendirtm.com', NULL, '$2y$12$wRBqt2RfdkfSPWmUaC5gp.qZ0rXIljtxVLvi0eWeVGvxXowaF3xuK', NULL, '2024-02-15 06:16:36', '2024-02-15 06:16:36', 'ADM'),
	(23, 'Virginia', 'bobo3@tm.tm', NULL, '$2y$12$/WG9Az4V0f9VSE/e82AXmO7xhZhriJgAmCvl06251CFyfjoSoESDq', NULL, '2024-02-21 04:34:24', '2024-02-21 04:34:24', 'USR'),
	(24, 'Amy', 'zymomuwi@mailinator.com', NULL, '$2y$12$ZTbn7NVkinKACR.0lEX0F.1IaluKFQ7MfZAOPK99MmWkYaS0x95e6', NULL, '2024-02-21 04:37:32', '2024-02-21 04:37:32', 'USR'),
	(25, 'Emerson', 'pyqup@mailinator.com', NULL, '$2y$12$fKfeVdnq9RHx0KD3VUbDxezP0zcvEK23NXDE4BWAC0dkdXhyO4IMG', NULL, '2024-02-21 05:23:07', '2024-02-21 05:23:07', 'USR'),
	(26, 'Blair', 'mequc@mailinator.com', NULL, '$2y$12$D61Lx35CwGpyRfAuYDT5uO0rfxwpmXkMki3oC/3.TBjucXu2JOhjy', NULL, '2024-02-22 06:04:31', '2024-02-22 06:04:31', 'USR');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
