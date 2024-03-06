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
	(1, 'About Kendir Company ', NULL, '       Türkmenistanyň Senagatçylar we Telekeçiler birleşmesiniň agzasy bolup durýan “Kendir” hususy kärhanasy 2013-nji ýylyň 16-njy dekabrynda döredildi. Kärhanamyzyň işiniň esasy maksady ilatyň sarp ediş isleglerini kanagatlandyrmak, halkyň sarp edýän gurluşyk harytlary bilen bazary üpjün etmek, önümçilik işini ýokarlandyrmak bolup durýar. \n        Ýaşaýyş durmuşynyň barha ösmegi, beýik ymaratlaryň peýda bolup, obalary, şäherleri gözelleşdirmegi – ilki bilen şol ýurduň beýleki ösen ýurtlar bilen deňleşýändigine aýdyňlygy bilen şaýatlyk edýär. Indi Türkmenistan we onuñ paýtagty Aşgabat şäheri ak mermerli binalaryň, uly ymaratlaryň, ýa- şaýyş jaýlarynyň toplumlaryny özünde jemleýänligi bilen dünýäde tanalyp gelýär. Şeýle binalaryň peýda bolmagy üçin ilkinji nobatda gurluşyk önümlerine aýratyn paý düşýär. \nHäzirki wagtda gurulýan binalaryň, ýaşaýyş jaýlarynyň döwrebap, berk, hil taýdan ýokary derejede bolmagynda, “Kendir” hususy kärhanamyzyň aýratyn zähmeti bar. Kärhanamyzda öndürilýän ýokary hilli demir-beton konstruksiýalary üçin kebşirlenen gözenekleri, polatdan çerepissa, profnastil, konýok we ternaw önümleri halka hödürlenýär. Bu önümler dürli galyňlykda, dürli ölçeglerde bolup, olaryň islendik görnüşlerini müşderiler isleglerine görä buýrup bilýärler. Mundan başga-da kärhanamyzda dürli ölçeglerde bolan polat armaturalary, armatur daňylýan simleri, profilleri, ugolnikleri, çüýleri, demir listleri we demir turbalarynam satyn alyp bilersiňiz. Ýokary derejeli bilimli hünärmenler tarapyndan ýola goýulyp, häzirki wagtda hil derejesine kepil geçýän bu kärhanamyzyň işleri ýokary depgin bilen dowam edýär.\n\nBiziň önümçiligimizde Türkiýanyň we Ýewropanyň birnäçe ýokary hilli belli nyşanly enjamlary ulanylýar. Enjamlaryň ählisi sanly ulgamly bolup, onda işleýän hünärmenler tarapyndan ussatlyk bilen dolandyrylýar. Bu bolsa, önümçilik kuwwatyny artdyrýar we ähli buýurmalar wagtynda ýokary hilli ýerine ýetirilýär. Takyk nokatlaýyn kebşirleýji enjamda öndürilen gözenekler bolsa özüniň berkligi we talaba laýyklygy bilen tapawutlanýar. Şeýle hem, demir listden çerepissa önümlerini formalaýjy enjamlaryň birnäçe görnüşleriniň bolmagy her bir müşderiniň islegini kanagatlandyrylýandygyna esas bolup durýar.', 1, 1, '2024-02-27 09:35:31', '2024-02-29 02:44:38');

-- Дамп структуры для таблица kendirloc.attributes
DROP TABLE IF EXISTS `attributes`;
CREATE TABLE IF NOT EXISTS `attributes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.attributes: ~22 rows (приблизительно)
DELETE FROM `attributes`;
INSERT INTO `attributes` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
	(11, 'Material', 24, '2024-03-04 01:23:28', '2024-03-04 01:23:28'),
	(12, 'Pogon metr', 25, '2024-03-04 01:23:52', '2024-03-04 01:23:52'),
	(13, 'Color', 25, '2024-03-04 01:24:01', '2024-03-04 01:24:01'),
	(14, 'Material', 26, '2024-03-04 01:24:24', '2024-03-04 01:24:24'),
	(15, 'Height', 26, '2024-03-04 01:24:34', '2024-03-04 01:24:34'),
	(16, 'Width', 26, '2024-03-04 01:24:42', '2024-03-04 01:24:42'),
	(17, 'Vid', 24, '2024-03-04 02:18:19', '2024-03-04 02:18:19'),
	(18, 'Engine Type', 24, '2024-03-04 02:18:39', '2024-03-04 02:18:39'),
	(19, 'Battery Voltage', 25, '2024-03-04 02:18:51', '2024-03-04 02:18:51'),
	(20, 'Weight', 25, '2024-03-04 02:19:04', '2024-03-04 02:19:04'),
	(21, 'Lenght', 24, '2024-03-04 06:00:26', '2024-03-04 06:00:26'),
	(22, 'View', 24, '2024-03-04 06:01:12', '2024-03-04 06:01:12'),
	(23, 'Battery Type', 24, '2024-03-04 07:05:01', '2024-03-04 07:05:01'),
	(24, 'Nam doloribus', 28, '2024-03-04 23:32:22', '2024-03-04 23:32:22'),
	(25, 'Nam doloribus', 24, '2024-03-04 23:32:40', '2024-03-04 23:32:40'),
	(26, 'General', 30, '2024-03-04 23:51:18', '2024-03-04 23:51:18'),
	(27, 'Material', 30, '2024-03-04 23:51:25', '2024-03-04 23:51:25'),
	(28, 'Length', 30, '2024-03-04 23:51:33', '2024-03-04 23:51:33'),
	(29, 'Width', 30, '2024-03-04 23:51:38', '2024-03-04 23:51:38'),
	(30, 'Height', 30, '2024-03-04 23:51:44', '2024-03-04 23:51:44'),
	(31, 'Hight', 24, '2024-03-05 00:43:58', '2024-03-05 00:43:58'),
	(32, 'Test', 24, '2024-03-05 00:46:38', '2024-03-05 00:46:38'),
	(33, 'test', 24, '2024-03-05 00:50:32', '2024-03-05 00:50:32');

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

-- Дамп данных таблицы kendirloc.brands: ~4 rows (приблизительно)
DELETE FROM `brands`;
INSERT INTO `brands` (`id`, `code`, `name`, `image`, `created_at`, `updated_at`) VALUES
	(3, 'QEWR234', 'Quas non dolores dol', '1709187634.jpg', '2024-02-29 01:20:34', '2024-02-29 02:05:04'),
	(4, 'QAMI125', 'Qui aut quo magni il', '1709190287.jpg', '2024-02-29 01:21:19', '2024-02-29 02:04:47'),
	(5, 'AIAS121', 'Aut in assumenda sit', '1709190202.jpg', '2024-02-29 01:27:37', '2024-02-29 02:03:22'),
	(6, 'Architecto consequat', 'Culpa eiusmod quae', '1709190322.jpg', '2024-02-29 02:05:22', '2024-02-29 06:54:01');

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
  `parent` bigint DEFAULT '0',
  `parent_id` bigint unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AVG_ROW_LENGTH=2048 ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы kendirloc.categories: ~17 rows (приблизительно)
DELETE FROM `categories`;
INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `image`, `is_popular`, `parent`, `parent_id`) VALUES
	(2, 'Wholesale trade', 'wholesale-trade', '2024-02-13 23:38:08', '2024-02-15 06:11:02', '1707995462.webp', 1, 0, 0),
	(3, 'Win door production', 'win-door-production', '2024-02-13 23:43:44', '2024-02-15 06:22:28', '1707995373.webp', 1, 0, 0),
	(4, 'Mesh products', 'mesh-products', '2024-02-13 23:44:19', '2024-02-16 22:57:06', '1707995219.jpg', 0, 22, 0),
	(5, 'Slate production', 'slate-production', '2024-02-14 00:52:20', '2024-02-15 06:13:29', '1707995609.jpg', 0, 23, 0),
	(6, 'Iron products', 'iron-products', '2024-02-14 01:39:16', '2024-02-15 06:05:21', '1707904255.jpg', 1, 22, 0),
	(21, 'Armatura', 'armatura', '2024-03-01 00:01:39', '2024-03-01 00:10:55', '1709269299.jpg', 1, 0, 6),
	(22, 'Труба профильная', 'truba-profilnaia', '2024-03-01 00:18:46', '2024-03-01 00:18:46', '1709270326.jpg', 0, 0, 6),
	(23, 'Сетки строительные', 'setki-stroitelnye', '2024-03-01 00:21:16', '2024-03-01 00:21:16', '1709270476.jpg', 0, 0, 6),
	(24, 'Мансардные окна', 'mansardnye-okna', '2024-03-01 00:22:35', '2024-03-01 00:22:35', '1709270555.jpg', 0, 0, 3),
	(25, 'Комплектующие окон', 'komplektuiushhie-okon', '2024-03-01 00:23:35', '2024-03-01 00:23:35', '1709270615.jpg', 0, 0, 3),
	(26, 'Чердачные лестницы', 'cerdacnye-lestnicy', '2024-03-01 00:24:44', '2024-03-01 00:24:44', '1709270684.jpg', 0, 0, 3),
	(27, 'Металлочерепица', 'metallocerepica', '2024-03-01 00:56:47', '2024-03-01 00:56:47', '1709272607.jpg', 0, 0, 5),
	(28, 'Комплектующие', 'komplektuiushhie', '2024-03-01 00:57:26', '2024-03-01 00:57:26', '1709272646.jpg', 0, 0, 5),
	(29, 'Водостоки', 'vodostoki', '2024-03-01 00:58:34', '2024-03-01 00:58:34', '1709272714.jpg', 0, 0, 5),
	(30, 'Сетка тканая нержавеющая', 'setka-tkanaia-nerzaveiushhaia', '2024-03-01 01:03:52', '2024-03-01 01:03:52', '1709273032.jpg', 0, 0, 4),
	(31, 'Сетка из цветных металлов', 'setka-iz-cvetnyx-metallov', '2024-03-01 01:04:27', '2024-03-01 01:04:27', '1709273067.jpg', 0, 0, 4),
	(32, 'Сетка фильтровая нержавеющая', 'setka-filtrovaia-nerzaveiushhaia', '2024-03-01 01:06:27', '2024-03-01 01:06:27', '1709273187.jpg', 0, 0, 4);

-- Дамп структуры для таблица kendirloc.colors
DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.colors: ~4 rows (приблизительно)
DELETE FROM `colors`;
INSERT INTO `colors` (`id`, `kod`, `name`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'without color', '2024-03-02 06:15:23', '2024-03-02 06:15:24'),
	(2, NULL, 'White', '2024-03-02 06:15:41', '2024-03-02 06:15:41'),
	(3, NULL, 'Black', '2024-03-02 06:15:51', '2024-03-02 06:15:51'),
	(4, NULL, 'Yellow', '2024-03-02 06:16:16', '2024-03-02 06:16:16'),
	(5, NULL, 'Red', '2024-03-02 06:16:21', '2024-03-02 06:16:21');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.manufacturers: ~6 rows (приблизительно)
DELETE FROM `manufacturers`;
INSERT INTO `manufacturers` (`id`, `code`, `name`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Rem rem obcaecati ut', 'Adipisicing earum ci', '1709191584.jpg', '2024-02-29 02:22:25', '2024-02-29 02:26:24'),
	(2, 'Maiores similique ad', 'Officiis sit nostru', '1709191576.jpg', '2024-02-29 02:22:40', '2024-02-29 02:26:16'),
	(3, 'Consequatur quo sae', 'Necessitatibus eu ip', '1709191562.jpg', '2024-02-29 02:22:54', '2024-02-29 02:26:02'),
	(4, 'VPAL54353', 'Velit pariatur Ali', '1709191530.jpg', '2024-02-29 02:23:00', '2024-02-29 02:25:30'),
	(6, 'Adipisci aliquid ame', 'Sunt in id similiqu', '1709191606.jpg', '2024-02-29 02:26:46', '2024-02-29 02:26:46'),
	(7, 'Voluptatem pariatur', 'Nesciunt incidunt ', '1709191616.jpg', '2024-02-29 02:26:56', '2024-02-29 02:26:56'),
	(8, 'Quia velit asperior', 'Hic consequuntur aut', '1709199920.jpg', '2024-02-29 04:45:20', '2024-02-29 04:45:20');

-- Дамп структуры для таблица kendirloc.materials
DROP TABLE IF EXISTS `materials`;
CREATE TABLE IF NOT EXISTS `materials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.materials: ~2 rows (приблизительно)
DELETE FROM `materials`;
INSERT INTO `materials` (`id`, `kod`, `name`, `desc`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'Metal', NULL, '2024-03-02 06:16:42', '2024-03-02 06:16:43'),
	(2, NULL, 'Wood', NULL, '2024-03-02 06:16:55', '2024-03-02 06:16:55'),
	(3, NULL, 'Plastic', NULL, '2024-03-02 06:17:04', '2024-03-02 06:17:04');

-- Дамп структуры для таблица kendirloc.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.migrations: ~32 rows (приблизительно)
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
	(32, '2024_02_29_055601_add_image_field_to_manufacturers', 17),
	(33, '2024_03_02_050149_create_materials_table', 18),
	(34, '2024_03_02_050158_create_colors_table', 18),
	(35, '2024_03_02_050235_create_options_table', 18),
	(36, '2024_03_02_050640_create_units_table', 18),
	(37, '2024_03_02_061004_create_attributes_table', 18),
	(38, '2024_03_02_061335_create_product_option_table', 18),
	(39, '2024_03_04_051214_alter_table_option_value_nullable', 19),
	(44, '2024_03_04_120705_alter_table_product_option_add_name_and_value', 20),
	(45, '2024_03_05_123726_create_specifications_table', 20);

-- Дамп структуры для таблица kendirloc.options
DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `attribute_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.options: ~4 rows (приблизительно)
DELETE FROM `options`;
INSERT INTO `options` (`id`, `attribute_id`, `name`, `value`, `created_at`, `updated_at`) VALUES
	(1, '12', 'Pogon metr', 'hren', NULL, '2024-03-05 07:24:57'),
	(2, '13', 'Color', NULL, NULL, NULL),
	(3, '19', 'Battery Voltage', NULL, NULL, NULL),
	(4, '20', 'Weight', NULL, NULL, NULL);

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
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.order_items: ~0 rows (приблизительно)
DELETE FROM `order_items`;

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

-- Дамп структуры для процедура kendirloc.procAttr_to_Options
DROP PROCEDURE IF EXISTS `procAttr_to_Options`;
DELIMITER //
CREATE PROCEDURE `procAttr_to_Options`(IN cat_id INT)
BEGIN
  IF(cat_id<>0) THEN
    -- SELECT * FROM attributes a WHERE a.category_id=cat_id;
     TRUNCATE options;
    -- DELETE FROM options;

    INSERT INTO options  (attribute_id, name)
    SELECT attributes.id, attributes.name
    FROM attributes
    WHERE category_id=cat_id;
  END IF;

END//
DELIMITER ;

-- Дамп структуры для процедура kendirloc.procOptions_to_ProdOpt
DROP PROCEDURE IF EXISTS `procOptions_to_ProdOpt`;
DELIMITER //
CREATE PROCEDURE `procOptions_to_ProdOpt`(IN prod_id INT)
BEGIN

  IF(prod_id<>0) THEN
    DELETE FROM product_option WHERE product_id=prod_id;

    INSERT INTO product_option (product_id, option_id, name, value )

    SELECT prod_id, o.id, o.name, o.value

    FROM options o;

  END IF;
END//
DELIMITER ;

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

SELECT sum(oi.price*oi.quantity) AS ototal FROM order_items oi
WHERE oi.order_id=order_id;

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
  `new` tinytext COLLATE utf8mb4_unicode_ci,
  `brand_id` bigint unsigned NOT NULL,
  `manufacturer_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `FK_products_category_id` (`category_id`),
  CONSTRAINT `FK_products_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AVG_ROW_LENGTH=16384;

-- Дамп данных таблицы kendirloc.products: ~0 rows (приблизительно)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`, `new`, `brand_id`, `manufacturer_id`) VALUES
	(36, 'Alden Parrish', 'megan-sexton', 'Temporibus velit deserunt unde quas dolores est dicta rerum cupiditate animi reprehenderit', '<p>Totam non labore asperiores mollit ut accusamus laborum. Excepteur qui suscipit fugit, et id, velit vitae non blanditiis id pariatur. Et et dolor corrupti, incididunt explicabo. Laboris aut veritatis asperiores eveniet, ut incidunt, distinctio. <b>Magni qui nisi vel quia</b> sed neque tenetur eu minus qui mollit officia nostrud sunt aut reprehenderit inventore vitae earum perspiciatis, qui aspernatur sed veniam, dolorem temporibus dolore voluptas ad est assumenda itaque est culpa, aspernatur ullamco of.</p><p><span style="background-color: rgb(255, 0, 255);">Ut ullam </span>dolore aspernatur irure aliqua.<font color="#0000ff"> Qui nulla </font>iure quam eu est animi, magna velit, dolor et dolore rerum proident, quia officia sint, consectetur, omnis quo sint consequatur? Consequatur? Nulla obcaecati amet, ratione iusto aut tempor alias optio, velit omnis quae eum fugit, accusamus odit repudiandae non quia commodo sequi nisi alias ex ut fuga. Iste deserunt officia tenetur asperiores ad rerum ea sit, unde tempor eius eligendi eaque necessitatibus qui labore ullamco qui consequatur except.&nbsp;<br></p>', 899.00, 401.00, 'Ad sapiente quam eum non vitae voluptas libero', 'instock', 0, 844.00, '1709701594.jpg', '17097015940.jpg,17097015941.jpg,17097015942.jpg', 31, '2024-03-06 00:06:34', '2024-03-06 02:03:20', NULL, 3, 6),
	(39, 'Ayanna Brock', 'warren-delanery', 'Elit ad minus dolorem dolore eos commodi modi voluptatem Doloremque voluptate repellendus Itaque ', '<p>Aut laboriosam, quod in commodi nihil autem dolore ad adipisci dolore ab eiusmod accusantium eveniet, dolor consequat. At qui perferendis unde consectetur, debitis voluptate non adipisci ullam sit do quis tenetur qui dolor commodi quo officia quibusdam magni deserunt voluptatem amet, dolore fugiat veniam, vel saepe veniam, in deserunt qui repudiandae voluptas obcaecati debitis dolore omnis sint, in est, voluptas sunt et mollitia et ut elit.</p><p>Est, non ea qui ut est pariatur? Rerum quis ipsum qui nostrud exercitation quia quod cillum aut similique et dolor molestiae voluptatem. Nemo consectetur quod fuga. Illo deleniti reprehenderit est, amet, quidem fugit, nostrum qui vero odio.<br></p>', 428.00, 972.00, 'Enim dolorem laudantium dolor nostrum', 'instock', 1, 52.00, '1709701939.jpg', '17097019390.jpg', 27, '2024-03-06 00:12:19', '2024-03-06 01:25:41', NULL, 5, 6),
	(40, 'Debra Levine', 'calista-ellis', 'Omnis corporis laborum ratione ea unde', '<p>Est, non ea qui ut est pariatur? Rerum quis ipsum qui nostrud exercitation quia quod cillum aut similique et dolor molestiae voluptatem. Nemo consectetur quod fuga. Illo deleniti reprehenderit est, amet, quidem fugit, nostrum qui vero odio.</p><p>Est, non ea qui ut est pariatur? Rerum quis ipsum qui nostrud exercitation quia quod cillum aut similique et dolor molestiae voluptatem. Nemo consectetur quod fuga. Illo deleniti reprehenderit est, amet, quidem fugit, nostrum qui vero odio.<br></p>', 956.00, 835.00, 'Pariatur Et est amet nulla facere', 'instock', 1, 596.00, '1709705102.jpg', '17097051020.webp,17097051021.jpg,17097051022.jpg', 24, '2024-03-06 01:05:02', '2024-03-06 01:24:51', NULL, 6, 4),
	(41, 'Mari Bradshaw ', 'mari-bradshaw', 'Quidem doloribus temporibus eaque nisi reprehenderit corrupti anim consequat Numquam sint error v', 'A lorem recusandae. Ut voluptatem nulla officiis labore assumenda distinctio. Est in incididunt mollit nostrum tempor voluptatibus sed ipsa, velit, qui quas sit, veritatis dolorem dolorum impedit, dolore vitae est consequuntur nihil non id, rem aspernatur dolor quasi ut fugiat, est tenetur ipsam nisi ea tempora quasi ipsum, rerum eu qui aperiam assumenda ratione qui optio, ut mollit autem perspiciatis, voluptas at nobis at qui mollit rerum et.&nbsp;', 212.00, 477.00, 'Ratione dolorem sed ut quibusdam non reprehenderit temporibus sed enim sit quos ratione ea quis aut rerum dolorem', 'instock', 1, 830.00, '1709707046.jpg', '17097070460.jpg,17097070461.webp,17097070462.jpg', 26, '2024-03-06 01:37:26', '2024-03-06 02:02:47', NULL, 3, 7),
	(42, 'Galvin Roach ', 'galvin-roach', 'Libero impedit dolor fuga Error lorem dolore hic', 'Quis eius qui dolore quisquam quos sit modi minima exercitationem illo dolorem animi, est est lorem officia reprehenderit inventore veniam, vitae autem in debitis ea in suscipit corporis nisi consequat. Velit dolor veniam, ex ipsa, pariatur? Est, harum dignissimos rerum inventore do anim culpa, id est itaque voluptate deserunt aliquid nemo enim officia magni.&nbsp;', 277.00, 830.00, 'Inventore necessitatibus sint sunt corporis pariatur Quo sit anim molestias nisi vel qui id sunt nisi natus rerum ea', 'instock', 0, 786.00, '1709708291.jpg', '17097082910.jpg,17097082911.webp', 29, '2024-03-06 01:58:11', '2024-03-06 02:02:44', NULL, 5, 8);

-- Дамп структуры для таблица kendirloc.product_option
DROP TABLE IF EXISTS `product_option`;
CREATE TABLE IF NOT EXISTS `product_option` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `option_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=274 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.product_option: ~36 rows (приблизительно)
DELETE FROM `product_option`;
INSERT INTO `product_option` (`id`, `product_id`, `option_id`, `created_at`, `updated_at`, `name`, `value`) VALUES
	(22, 29, 66, NULL, NULL, '', ''),
	(23, 29, 67, NULL, NULL, '', ''),
	(24, 29, 68, NULL, NULL, '', ''),
	(25, 29, 69, NULL, NULL, '', ''),
	(156, 30, 1, NULL, NULL, '', ''),
	(157, 30, 2, NULL, NULL, '', ''),
	(158, 30, 3, NULL, NULL, '', ''),
	(159, 30, 4, NULL, NULL, '', ''),
	(184, 28, 1, NULL, NULL, '', ''),
	(185, 28, 2, NULL, NULL, '', ''),
	(186, 28, 3, NULL, NULL, '', ''),
	(187, 28, 4, NULL, NULL, '', ''),
	(188, 28, 8, NULL, NULL, '', ''),
	(189, 28, 9, NULL, NULL, '', ''),
	(190, 28, 10, NULL, NULL, '', ''),
	(191, 28, 11, NULL, NULL, '', ''),
	(214, 31, 1, NULL, NULL, '', ''),
	(215, 31, 2, NULL, NULL, '', ''),
	(216, 31, 3, NULL, NULL, '', ''),
	(217, 31, 4, NULL, NULL, '', ''),
	(218, 31, 5, NULL, NULL, '', ''),
	(219, 31, 6, NULL, NULL, '', ''),
	(220, 31, 7, NULL, NULL, '', ''),
	(221, 31, 8, NULL, NULL, '', ''),
	(222, 31, 9, NULL, NULL, '', ''),
	(223, 31, 10, NULL, NULL, '', ''),
	(259, 32, 1, NULL, NULL, '', ''),
	(260, 32, 2, NULL, NULL, '', ''),
	(261, 32, 3, NULL, NULL, '', ''),
	(262, 32, 4, NULL, NULL, '', ''),
	(263, 32, 5, NULL, NULL, '', ''),
	(264, 32, 6, NULL, NULL, '', ''),
	(265, 32, 7, NULL, NULL, '', ''),
	(266, 32, 8, NULL, NULL, '', ''),
	(267, 32, 9, NULL, NULL, '', ''),
	(268, 32, 10, NULL, NULL, '', '');

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

-- Дамп структуры для таблица kendirloc.specifications
DROP TABLE IF EXISTS `specifications`;
CREATE TABLE IF NOT EXISTS `specifications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dl` int DEFAULT NULL,
  `dw` int DEFAULT NULL,
  `dh` int DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `specifications_product_id_foreign` (`product_id`),
  CONSTRAINT `specifications_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.specifications: ~0 rows (приблизительно)
DELETE FROM `specifications`;
INSERT INTO `specifications` (`id`, `model`, `dl`, `dw`, `dh`, `unit`, `weight`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
	(3, 'Dolorem cupidatat consequat Accusamus optio libero neque non', 42, 96, 46, 'Maiores iste autem consequatur Rem dolore enim voluptatem hic in reprehenderit explicabo Voluptate dicta molestiae cumque eos', 75, 0, 36, '2024-03-06 00:06:34', '2024-03-06 00:06:34'),
	(6, 'Ad assumenda est incididunt sit natus dolorem autem voluptates est voluptas officiis', 50, 82, 83, 'Quia temporibus eveniet perspiciatis minim dolor id cum enim mollit saepe', 4, 0, 39, '2024-03-06 00:12:19', '2024-03-06 00:12:19'),
	(7, 'In dolores et eu dolorem ut autem officia sit in minima ullam esse animi', 15, 79, 3, 'Non alias rerum officia dolor est laudantium ut optio reprehenderit nisi asperiores enim temporibus rerum perferendis velit debitis', 10, 1, 40, '2024-03-06 01:05:02', '2024-03-06 01:17:57'),
	(8, 'Similique blanditiis autem modi eu sit nobis voluptatem natus voluptatem Numquam neque ea nostrum nostrum consequat Officia recusandae', 100, 44, 40, 'Perferendis voluptatem Ipsam numquam ad delectus et deserunt sed iusto laboris dolores odit tempore non in quis', 54, 1, 41, '2024-03-06 01:37:26', '2024-03-06 01:37:26'),
	(9, 'Amet eligendi id sint occaecat tempora et vitae', 76, 64, 94, 'Eiusmod consequuntur laudantium deserunt et quis nisi laudantium reprehenderit', 88, 0, 42, '2024-03-06 01:58:11', '2024-03-06 01:58:11');

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

-- Дамп структуры для таблица kendirloc.units
DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.units: ~0 rows (приблизительно)
DELETE FROM `units`;

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
