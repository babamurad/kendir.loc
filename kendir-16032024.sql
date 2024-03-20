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
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.attributes: ~23 rows (приблизительно)
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
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.carousels: ~7 rows (приблизительно)
DELETE FROM `carousels`;
INSERT INTO `carousels` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
	(20, 'Enim esse voluptate', 'Odio animi inventore aut exercitation excepteur fuga A numquam', '1707994128.jpg', '2024-02-15 05:48:48', '2024-02-15 05:48:48'),
	(21, 'Numquam dolor soluta', 'Magni eos sit adipisicing quod perspiciatis sit', '1707994158.webp', '2024-02-15 05:49:18', '2024-02-15 05:49:18'),
	(22, 'Laborum cillum praes', 'Voluptas ullamco iure ut et dolorem cum at error quae omnis incididunt possimus soluta', '1707994188.webp', '2024-02-15 05:49:48', '2024-02-15 05:49:48'),
	(23, 'Accusantium minim de', 'Ut fuga Aliquip et nisi sit Nam do facere', '1707994197.webp', '2024-02-15 05:49:57', '2024-02-15 05:49:57'),
	(26, 'carousel 1', 'carousel 1', '1710412133.jpg', '2024-03-08 07:53:58', '2024-03-14 05:28:53'),
	(27, '2013-nji ýyldan bäri bazarda ynamdar we güýçli ýerimizi saklap gelýäris', 'Armatur, profil, şifer önümlerimiz ýurdumyzyň ähli künjeginde ', '1710412206.jpg', '2024-03-08 07:58:57', '2024-03-14 05:30:06'),
	(28, 'Aut sed incidunt eu', 'Est qui omnis ex inventore eos quidem', '1710412405.webp', '2024-03-14 05:33:25', '2024-03-14 05:33:25');

-- Дамп структуры для таблица kendirloc.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `parent` bigint DEFAULT '0',
  `parent_id` bigint unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AVG_ROW_LENGTH=2048 ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы kendirloc.categories: ~18 rows (приблизительно)
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
	(30, 'Сетка тканая нержавеющая', 'setka-tkanaia-nerzaveiushhaia', '2024-03-01 01:03:52', '2024-03-11 02:13:21', '1709273032.jpg', 0, 0, 4),
	(31, 'Сетка из цветных металлов', 'setka-iz-cvetnyx-metallov', '2024-03-01 01:04:27', '2024-03-01 01:04:27', '1709273067.jpg', 0, 0, 4),
	(32, 'Сетка фильтровая нержавеющая', 'setka-filtrovaia-nerzaveiushhaia', '2024-03-01 01:06:27', '2024-03-11 02:13:28', '1709273187.jpg', 0, 0, 4),
	(35, 'Şweller', 'sweller', '2024-03-09 00:01:04', '2024-03-09 00:01:04', '1709960464.jpg', 1, 0, 6),
	(36, 'Kruglýak', 'kruglyak', '2024-03-12 00:57:40', '2024-03-12 00:57:40', '1710223060.jpg', 0, 0, 6),
	(37, 'Dwuhtawr', 'dwuhtawr', '2024-03-12 00:59:25', '2024-03-12 00:59:25', '1710223165.jpg', 0, 0, 6),
	(38, 'Demir profil', 'demir-profil', '2024-03-12 01:30:37', '2024-03-12 01:30:37', '1710225037.jpg', 0, 0, 6);

-- Дамп структуры для таблица kendirloc.colors
DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kod` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.colors: ~5 rows (приблизительно)
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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `arhiw` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AVG_ROW_LENGTH=4096 ROW_FORMAT=DYNAMIC;

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
	(13, 'Barclay Franklin', 'kytyq@mailinator.com', '+1 (348) 275-1097', 'Kendir answer', 'Test message\nObcaecati qui dolori Obcaecati qui dolori', '2024-02-26 03:56:38', '2024-03-13 07:07:17', 1),
	(14, 'Ian Patton', 'micutymym@mailinator.com', '+1 (579) 459-9362', '+1 (743) 758-5536', 'Officia dolore ut es', '2024-02-26 03:57:33', '2024-02-26 03:57:33', 0),
	(15, 'Georgia Irwin', 'guvanch.kabulov@gmail.com', '+1 (182) 803-9697', 'Hi from kendir', 'Nemo duis qui quaera', '2024-02-26 03:58:48', '2024-02-26 05:23:42', 1),
	(16, 'Ursula Robertson', 'buvaquhy@mailinator.com', '+1 (866) 302-1702', '+1 (306) 491-7511', 'Dicta fuga Et assum', '2024-02-26 04:05:49', '2024-02-26 05:23:36', 1),
	(17, 'Katelyn Richards', 'hogerihak@mailinator.com', '+1 (924) 263-4227', '+1 (253) 994-3948', 'Numquam itaque vitae', '2024-02-26 05:06:03', '2024-02-26 06:07:33', 1),
	(18, 'Heidi Silva', 'licabu@mailinator.com', '+1 (487) 338-5011', '+1 (364) 135-8034', 'Laboriosam nobis in', '2024-02-26 05:06:24', '2024-02-26 05:23:08', 1),
	(19, 'Petra Haynes', 'foticeguz@mailinator.com', '+1 (189) 265-7015', '+1 (618) 981-3932', 'Anim inventore accus', '2024-02-26 05:07:04', '2024-02-26 05:18:37', 1),
	(20, 'Uriel Odonnell', 'timav@mailinator.com', '+1 (598) 108-6759', '+1 (543) 803-3592', 'Excepteur duis sit v', '2024-02-26 05:08:37', '2024-02-26 05:18:20', 1),
	(21, 'Doris Thompson', 'hekojav@mailinator.com', '+1 (373) 348-7586', '+1 (788) 955-3524', 'Ex aperiam sit dign', '2024-02-26 05:13:09', '2024-02-26 05:14:54', 1),
	(22, 'Guvanc.Kabulov', 'renavefy@mailinator.com', '+1 (938) 848-3134', '+1 (468) 828-3078', 'Aut incidunt dolore', '2024-03-13 07:05:58', '2024-03-13 07:07:10', 1),
	(23, 'Vladimir Guy', 'fanozihav@mailinator.com', '+1 (493) 775-5216', '+1 (504) 541-5176', 'Suscipit officia in ', '2024-03-14 06:11:04', '2024-03-14 06:11:04', 0);

-- Дамп структуры для таблица kendirloc.countries
DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.manufacturers: ~5 rows (приблизительно)
DELETE FROM `manufacturers`;
INSERT INTO `manufacturers` (`id`, `code`, `name`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Rem rem obcaecati ut', 'Adipisicing earum ci', '1709191584.jpg', '2024-02-29 02:22:25', '2024-02-29 02:26:24'),
	(2, 'Maiores similique ad', 'Officiis sit nostru', '1709191576.jpg', '2024-02-29 02:22:40', '2024-02-29 02:26:16'),
	(3, 'Consequatur quo sae', 'Necessitatibus eu ip', '1709191562.jpg', '2024-02-29 02:22:54', '2024-02-29 02:26:02'),
	(8, 'Quia velit asperior', 'Hic consequuntur aut', '1709199920.jpg', '2024-02-29 04:45:20', '2024-02-29 04:45:20');

-- Дамп структуры для таблица kendirloc.materials
DROP TABLE IF EXISTS `materials`;
CREATE TABLE IF NOT EXISTS `materials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kod` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.materials: ~3 rows (приблизительно)
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

-- Дамп данных таблицы kendirloc.migrations: ~36 rows (приблизительно)
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
  `attribute_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `addinfo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ordered','delivered','canceled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `canceled_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.orders: ~19 rows (приблизительно)
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
	(16, 1, 2.00, 221.00, 2.00, 'Jonah', 'Levine', '3886242606', 'vuty@mailinator.com', 'Eos et et lorem vita', 'Quibusdam eos sunt q', 'Harum ratione quae e', 'Eveniet cillum expl', '2', '52019', 'Nisi laborum ea vel ', 'Rowland Daugherty Plc', 'ordered', 0, '2024-02-22 06:15:30', '2024-02-22 06:15:30', NULL, NULL),
	(17, 1, 736.00, 73.00, 809.00, 'Elliott', 'Pope', '9278408', 'lypuretofy@mailinator.com', 'Praesentium culpa do', 'Modi accusantium mol', 'Eos dolor necessita', 'Dolorem sit ullamco ', '1', '68727', 'In qui quo facilis n', 'Wade Gonzalez Trading', 'ordered', 0, '2024-02-25 22:55:18', '2024-02-28 05:43:35', NULL, NULL),
	(18, 14, 835.00, 399.00, 4.00, 'Keelie', 'Frazier', '9181996', 'vocuwos@mailinator.com', 'Architecto optio te', 'Deleniti ex mollitia', 'Velit doloremque mo', 'Voluptate consequatu', '1', '65234', 'Perferendis lorem vo', 'Matthews and Mckenzie Inc', 'ordered', 0, '2024-02-27 04:56:45', '2024-02-27 04:56:45', NULL, NULL),
	(19, 14, 852.00, 441.00, 4.00, 'Keefe', 'Gross', '1443304', 'roxytak@mailinator.com', 'Delectus veritatis ', 'Excepturi laborum E', 'Magni mollit similiq', 'Provident exercitat', '2', '82829', 'Ex quisquam ut nesci', 'Conley Best Co', 'ordered', 0, '2024-02-28 01:30:24', '2024-02-28 01:30:24', NULL, NULL),
	(20, 14, 1733.00, 173.00, 1906.00, 'Julie', 'Mccray', '9582', 'myfox@mailinator.com', 'Recusandae Magna ut', 'Dolorum commodi enim', 'In illo exercitation', 'Sit animi in quidem', '1', '82291', 'Qui laboris omnis si', 'Yates and Clark Associates', 'ordered', 0, '2024-02-28 03:47:46', '2024-02-28 03:47:46', NULL, NULL),
	(21, 14, 5026.00, 502.00, 5528.00, 'Cole', 'Mcdonald', '7379085', 'tumenuduwu@mailinator.com', 'Sint quo qui cillum ', 'Rerum reiciendis et ', 'Eius similique ipsum', 'Facilis vel placeat', '4', '96614', 'Blanditiis delectus', 'Mcmahon Baldwin Trading', 'ordered', 0, '2024-02-28 04:39:42', '2024-02-28 04:39:42', NULL, NULL),
	(22, 1, 477.00, 47.00, 524.00, 'Maxwell', 'Carney', '9753623', 'fubonog@mailinator.com', 'Voluptas dignissimos consequatur Minim laborum Quo', 'Nostrud esse ea velit at sit nulla elit maxime omnis aliquid pariatur At magna ipsam dolores veritatis', 'Voluptatem architecto illo aliquip omnis consequuntur enim labore iste quo illo', 'Enim autem delectus in laborum Dolore recusandae Minus voluptate molestiae dolorem molestias deserunt est ullam', '3', '88730', 'Officiis sed saepe sapiente et incididunt pariatur Dolore modi doloribus sed corrupti eaque Nam vero est incidunt dolorem', 'Reese and Mcleod Trading', 'ordered', 0, '2024-03-07 07:15:19', '2024-03-07 07:15:19', NULL, NULL),
	(23, 1, 1373.00, 137.00, 1510.00, 'Nola', 'Rowland', '3915932', 'vuzusaci@mailinator.com', 'Sed animi ad velit reiciendis in laborum Nobis nulla animi magna pariatur Facilis qui sit duis', 'Provident voluptas dolor enim et molestiae', 'Non tempor consectetur aliquam optio sapiente voluptatum et ea et', 'Corporis cupidatat natus esse minim sunt nostrum non blanditiis officiis adipisicing dolores necessitatibus laboris rem nostrum nulla repudiandae ut', '1', '81902', 'Facilis vitae ratione voluptas sit ea ut dolor est dolores est labore nulla', 'Santana Wilson Trading', 'ordered', 0, '2024-03-07 07:16:47', '2024-03-07 07:16:47', NULL, NULL),
	(24, 14, 200.00, 20.00, 220.00, 'Merrill', 'Gibson', '2175565', 'cyca@mailinator.com', 'Et beatae et amet ex voluptates sunt proident aute temporibus asperiores accusantium', 'Aut exercitation aliquid culpa voluptatem Ut eaque quasi doloribus dolorem ullam officiis dolore molestiae tempore non odit beatae voluptate voluptatum', 'Molestiae saepe facilis deleniti cum vero qui dolore eum tempora deserunt voluptas sit', 'Dolore quaerat cumque tempore eiusmod quibusdam eos ea aut est ducimus sit commodo dolore est', '4', '74752', 'Itaque cupiditate doloremque itaque dolorem maiores maxime commodi', 'Gates and Hopper Traders', 'ordered', 0, '2024-03-12 05:09:11', '2024-03-12 05:09:11', NULL, NULL),
	(25, 14, 300.00, 30.00, 330.00, 'Darrel', 'May', '3519249', 'luxib@mailinator.com', 'Qui incididunt aliquid molestias est placeat nostrum et', 'Ut inventore natus magnam cillum unde', 'Ut at excepteur occaecat optio in libero amet incidunt', 'Laboriosam incidunt aspernatur sunt dolorum accusantium adipisci totam saepe accusantium in et et ratione provident beatae a cupidatat quo provident', '0', '38415', 'Deserunt atque quae sit eum qui nostrud facilis architecto sunt quae dolore possimus amet laboris pariatur Voluptatum', 'Schwartz and Blanchard Trading', 'ordered', 0, '2024-03-12 05:11:32', '2024-03-12 05:11:32', NULL, NULL),
	(26, 1, 300.00, 30.00, 330.00, 'Mechelle', 'Lara', '6474062', 'zyky@mailinator.com', 'Soluta saepe sed nobis nihil ipsum dolor dolores duis ipsa id numquam enim', 'Ex et dolor et maxime voluptatibus rerum reiciendis deleniti omnis quisquam quia eum repudiandae debitis', 'Dolorem doloribus aute sint id et quasi id excepturi', 'Neque sit laborum eveniet ullamco ut irure necessitatibus veniam minim nesciunt ab quasi', '1', '94657', 'Qui totam ut ipsam aperiam in qui incidunt molestias dignissimos molestiae est voluptates expedita in eveniet alias quis in perferendis', 'Griffith Kim Plc', 'ordered', 0, '2024-03-12 23:27:36', '2024-03-12 23:27:36', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.order_items: ~6 rows (приблизительно)
DELETE FROM `order_items`;
INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
	(4, 54, 24, 100.00, 1.00, '2024-03-12 05:09:11', '2024-03-12 05:09:11'),
	(5, 56, 24, 100.00, 1.00, '2024-03-12 05:09:11', '2024-03-12 05:09:11'),
	(6, 54, 25, 100.00, 2.00, '2024-03-12 05:11:32', '2024-03-12 05:11:32'),
	(7, 64, 25, 100.00, 1.00, '2024-03-12 05:11:32', '2024-03-12 05:11:32'),
	(8, 55, 26, 100.00, 1.00, '2024-03-12 23:27:36', '2024-03-12 23:27:36'),
	(9, 64, 26, 100.00, 1.00, '2024-03-12 23:27:36', '2024-03-12 23:27:36'),
	(10, 54, 26, 100.00, 1.00, '2024-03-12 23:27:36', '2024-03-12 23:27:36');

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
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` bigint NOT NULL DEFAULT '1',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.posts: ~12 rows (приблизительно)
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
	(12, 'Minim ea sit numqua', '1709017957.jpg', 'Voluptas pariatur Cupiditate voluptas commodi ut fugit quaerat illo ratione in vitae laboriosam sed accusamus corrupti voluptates', 1, 0, '2024-02-27 02:12:37', '2024-02-27 02:12:37'),
	(13, 'new 2024 goods', '1710133164.webp', 'Армату́ра — совокупность соединённых между собой элементов, которые при совместной работе с бетоном в железобетонных сооружениях воспринимают Армату́ра — совокупность соединённых между собой элементов, которые при совместной работе с бетоном в железобетонных сооружениях воспринимают', 27, 0, '2024-03-07 01:55:19', '2024-03-10 23:59:24');

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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `quantity` decimal(8,2) unsigned NOT NULL DEFAULT '10.00',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `stock_status` enum('In Stock','Out of Stock') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'In Stock',
  `category_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `brand_id` bigint unsigned NOT NULL,
  `manufacturer_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `FK_products_category_id` (`category_id`),
  CONSTRAINT `FK_products_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AVG_ROW_LENGTH=16384;

-- Дамп данных таблицы kendirloc.products: ~88 rows (приблизительно)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `featured`, `quantity`, `image`, `images`, `stock_status`, `category_id`, `created_at`, `updated_at`, `new`, `brand_id`, `manufacturer_id`) VALUES
	(53, 'Demir armatura ⌀ 8 mm (Eýran)', 'demir-armatura-8-mm-eyran', 'Demir armatura ⌀ 8 mm (Eýran)', 'Demir armatura ⌀ 8 mm (Eýran) ', 100.00, 100.00, '153.01.A01.EYR.08', 0, 1.00, '1709891532.png', '17098915320.webp,17098915321.webp,17098915322.jpg', 'In Stock', 21, '2024-03-08 04:52:12', '2024-03-08 07:08:47', NULL, 3, 1),
	(54, 'Demir armatura ⌀ 10 mm (Eýran)', 'demir-armatura-10-mm-eyran', 'Demir armatura ⌀ 10 mm (Eýran)', 'Demir armatura ⌀&nbsp;10 mm (Eýran) ', 100.00, 100.00, '153.01.A01.EYR.10', 0, 1.00, '1709891639.png', '17098916390.webp,17098916391.jpg,17098916392.jpg,17098916393.jpg', 'In Stock', 21, '2024-03-08 04:53:59', '2024-03-08 07:08:39', NULL, 3, 1),
	(55, 'Demir armatura ⌀ 12 mm (Eýran)', 'demir-armatura-12-mm-eyran', 'Demir armatura ⌀ 12 mm (Eýran)', 'Demir armatura ⌀ 12 mm (Eýran) ', 100.00, 100.00, '153.01.A01.EYR.12', 0, 1.00, '1709891815.png', '17098918150.jpg,17098918151.webp,17098918152.webp,17098918153.jpg,17098918154.jpg', 'In Stock', 21, '2024-03-08 04:56:55', '2024-03-08 07:08:21', NULL, 3, 1),
	(56, 'Demir armatura ⌀ 14 mm (Eýran)', 'demir-armatura-14-mm-eyran', 'Demir armatura ⌀ 14 mm (Eýran)', 'Demir armatura ⌀ 14 mm (Eýran) ', 100.00, 100.00, '153.01.A01.EYR.14', 0, 1.00, '1709892166.png', '17098921660.jpg,17098921661.jpg,17098921662.webp,17098921663.jpg', 'In Stock', 21, '2024-03-08 05:02:46', '2024-03-08 07:08:01', NULL, 3, 1),
	(57, 'Demir armatura ⌀ 16 mm (Eýran)', 'demir-armatura-16-mm-eyran', 'Demir armatura ⌀ 16 mm (Eýran)', 'Demir armatura ⌀ 16 mm (Eýran) ', 100.00, 100.00, '153.01.A01.EYR.16', 0, 1.00, '1709892253.png', '17098922530.webp,17098922531.webp,17098922532.jpg,17098922533.jpg', 'In Stock', 21, '2024-03-08 05:04:13', '2024-03-08 07:07:24', NULL, 3, 1),
	(58, 'Demir armatura ⌀ 18 mm (Eýran)', 'demir-armatura-18-mm-eyran', 'Demir armatura ⌀ 18 mm (Eýran)', 'Demir armatura ⌀ 18 mm (Eýran) ', 100.00, 100.00, '153.01.A01.EYR.18', 0, 1.00, '1709892405.png', '17098924050.webp,17098924051.webp,17098924052.jpg,17098924053.jpg', 'In Stock', 21, '2024-03-08 05:06:45', '2024-03-08 07:04:40', NULL, 3, 1),
	(59, 'Demir armatura ⌀ 20 mm (Eýran)', 'demir-armatura-20-mm-eyran', 'Demir armatura ⌀ 20 mm (Eýran)', 'Demir armatura ⌀ 20 mm (Eýran) ', 100.00, 100.00, '153.01.A01.EYR.20', 0, 1.00, '1709892477.png', '17098924770.webp,17098924771.jpg,17098924772.jpg', 'In Stock', 21, '2024-03-08 05:07:57', '2024-03-08 07:06:20', NULL, 3, 1),
	(60, 'Demir armatura ⌀ 22 mm (Eýran)', 'demir-armatura-22-mm-eyran', 'Demir armatura ⌀ 22 mm (Eýran)', 'Demir armatura ⌀ 22 mm (Eýran) ', 100.00, 100.00, '153.01.A01.EYR.22', 0, 1.00, '1709892557.png', '17098925570.jpg,17098925571.png,17098925572.jpg', 'In Stock', 21, '2024-03-08 05:09:17', '2024-03-08 07:06:06', NULL, 3, 1),
	(61, 'Demir armatura ⌀ 25 mm (Eýran)', 'demir-armatura-25-mm-eyran', 'Demir armatura ⌀ 25 mm (Eýran)', 'Demir armatura ⌀ 25 mm (Eýran) ', 100.00, 100.00, '153.01.A01.EYR.25', 0, 1.00, '1709892656.png', '17098926560.webp,17098926561.webp,17098926562.jpg', 'In Stock', 21, '2024-03-08 05:10:56', '2024-03-08 07:05:46', NULL, 3, 1),
	(62, 'Demir armatura ⌀ 28 mm (Eýran)', 'demir-armatura-28-mm-eyran', 'Demir armatura ⌀ 28 mm (Eýran)', 'Demir armatura ⌀ 28 mm (Eýran)', 100.00, 100.00, '153.01.A01.EYR.28', 0, 1.00, '1709892806.png', '17098928060.webp,17098928061.jpg,17098928062.jpg', 'In Stock', 21, '2024-03-08 05:13:26', '2024-03-08 07:03:22', NULL, 3, 1),
	(63, 'Demir armatura ⌀ 32 mm (Eýran)', 'demir-armatura-32-mm-eyran', 'Demir armatura ⌀ 32 mm (Eýran)', 'Demir armatura ⌀ 32 mm (Eýran)', 100.00, 100.00, '153.01.A01.EYR.32', 0, 1.00, '1709892936.png', '17098929360.jpg,17098929361.jpg,17098929362.jpg', 'In Stock', 21, '2024-03-08 05:15:36', '2024-03-08 07:05:14', NULL, 3, 1),
	(64, 'Demir armatura ⌀ 10 mm (Russiýa)', 'demir-armatura-10-mm-russiya', 'Demir armatura ⌀ 10 mm (Russiýa)', 'Demir armatura ⌀ 10 mm (Russiýa)', 100.00, 100.00, '153.01.A01.RUS.10', 0, 1.00, '1709893051.png', '17098930510.webp,17098930511.webp,17098930512.jpg', 'In Stock', 21, '2024-03-08 05:17:31', '2024-03-08 07:05:06', NULL, 3, 1),
	(65, 'Demir armatura ⌀ 12 mm (Russiýa)', 'demir-armatura-12-mm-russiya', 'Demir armatura ⌀ 12 mm (Russiýa)', 'Demir armatura ⌀ 12 mm (Russiýa)', 100.00, 100.00, '153.01.A01.RUS.12', 0, 1.00, '1709893174.png', '17098931740.jpg,17098931741.png,17098931742.webp', 'In Stock', 21, '2024-03-08 05:19:34', '2024-03-08 07:02:38', NULL, 3, 1),
	(66, 'Demir armatura ⌀ 14 mm (Russiýa)', 'demir-armatura-14-mm-russiya', 'Demir armatura ⌀ 14 mm (Russiýa)', 'Demir armatura ⌀ 14 mm (Russiýa) ', 100.00, 100.00, '153.01.A01.RUS.14', 0, 1.00, '1709893637.png', '17098936370.jpg,17098936371.jpg,17098936372.jpg', 'In Stock', 21, '2024-03-08 05:27:17', '2024-03-08 07:04:53', NULL, 3, 1),
	(67, 'Demir armatura ⌀ 16 mm (Russiýa)', 'demir-armatura-16-mm-russiya', 'Demir armatura ⌀ 16 mm (Russiýa)', 'Demir armatura ⌀ 16 mm (Russiýa) ', 100.00, 100.00, '153.01.A01.RUS.16', 0, 1.00, '1709893758.png', '17098937580.jpg,17098937581.jpg,17098937582.jpg', 'In Stock', 21, '2024-03-08 05:29:18', '2024-03-08 07:01:58', NULL, 3, 1),
	(68, 'Demir armatura ⌀ 18 mm (Russiýa)', 'demir-armatura-18-mm-russiya', 'Demir armatura ⌀ 18 mm (Russiýa)', 'Demir armatura ⌀ 18 mm (Russiýa) ', 100.00, 100.00, '153.01.A01.RUS.18', 0, 1.00, '1709893845.png', '17098938450.webp,17098938451.jpg,17098938452.jpg', 'In Stock', 21, '2024-03-08 05:30:45', '2024-03-08 07:00:42', NULL, 3, 1),
	(69, 'Demir armatura ⌀ 20 mm (Russiýa)', 'demir-armatura-20-mm-russiya', 'Demir armatura ⌀ 20 mm (Russiýa)', 'Demir armatura ⌀ 20 mm (Russiýa) ', 100.00, 100.00, '153.01.A01.RUS.20', 0, 1.00, '1709893923.png', '17098939230.jpg,17098939231.jpg,17098939232.webp', 'In Stock', 21, '2024-03-08 05:32:03', '2024-03-08 07:05:31', NULL, 3, 1),
	(70, 'Demir armatura ⌀ 22 mm (Russiýa)', 'demir-armatura-22-mm-russiya', 'Demir armatura ⌀ 22 mm (Russiýa)', 'Demir armatura ⌀ 22 mm (Russiýa) ', 100.00, 100.00, '153.01.A01.RUS.22', 0, 1.00, '1709894015.png', '17098940150.webp,17098940151.jpg,17098940152.jpg', 'In Stock', 21, '2024-03-08 05:33:35', '2024-03-08 07:05:23', NULL, 3, 1),
	(71, 'Demir armatura ⌀ 25 mm (Russiýa)', 'demir-armatura-25-mm-russiya', 'Demir armatura ⌀ 25 mm (Russiýa)', 'Demir armatura ⌀ 25 mm (Russiýa) ', 100.00, 100.00, '153.01.A01.RUS.25', 0, 1.00, '1709894136.png', '17098941360.jpg,17098941361.jpg,17098941362.jpg,17098941363.jpg,17098941364.jpg', 'In Stock', 21, '2024-03-08 05:35:36', '2024-03-08 06:59:55', NULL, 3, 1),
	(72, 'Şweller 8 cm (Eýran)', 'sweller-8-cm-eyran', 'Şweller 8 cm (Eýran)', 'Şweller 8 cm (Eýran) ', 100.00, 100.00, '153.01.S02.EYRX008X000', 0, 1.00, '1709960570.png', '17099605700.jpg,17099605701.jpg,17099605702.jpg,17099605703.jpg,17099605704.jpg', 'In Stock', 35, '2024-03-09 00:02:50', '2024-03-09 00:02:50', NULL, 3, 1),
	(73, 'Şweller 10 cm (Eýran)', 'sweller-10-cm-eyran', 'Şweller 10 cm (Eýran)', 'Şweller 10 cm (Eýran) ', 100.00, 100.00, '153.01.S02.EYRX010X000', 0, 1.00, '1709963163.png', '17099631630.jpg,17099631631.jpg,17099631632.jpg,17099631633.jpg,17099631634.jpg', 'In Stock', 35, '2024-03-09 00:46:03', '2024-03-09 00:46:03', NULL, 3, 1),
	(74, 'Şweller 12 cm (Eýran)', 'sweller-12-cm-eyran', 'Şweller 12 cm (Eýran)', 'Şweller 12 cm (Eýran) ', 100.00, 100.00, '153.01.S02.EYRX012X000', 0, 1.00, '1709963278.png', '17099632780.jpg,17099632781.jpg,17099632782.jpg,17099632783.jpg,17099632784.jpg', 'In Stock', 35, '2024-03-09 00:47:58', '2024-03-09 00:47:58', NULL, 3, 1),
	(75, 'Şweller 14 cm (Eýran)', 'sweller-14-cm-eyran', 'Şweller 14 cm (Eýran)', 'Şweller 14 cm (Eýran) ', 100.00, 100.00, '153.01.S02.EYRX014X000', 0, 1.00, '1709963397.png', '17099633970.jpg,17099633971.jpg,17099633972.jpg,17099633973.jpg,17099633974.jpg', 'In Stock', 35, '2024-03-09 00:49:57', '2024-03-09 00:49:57', NULL, 3, 1),
	(76, 'Şweller 16 cm (Eýran)', 'sweller-16-cm-eyran', 'Şweller 16 cm (Eýran)', 'Şweller 16 cm (Eýran)', 100.00, 100.00, '153.01.S02.EYRX016X000', 0, 1.00, '1709963482.png', '17099634820.jpg,17099634821.jpg,17099634822.jpg,17099634823.jpg,17099634824.jpg', 'In Stock', 35, '2024-03-09 00:51:22', '2024-03-09 00:51:22', NULL, 3, 1),
	(77, 'Şweller 20 cm (Eýran)', 'sweller-20-cm-eyran', 'Şweller 20 cm (Eýran)', 'Şweller 20 cm (Eýran)', 100.00, 100.00, '153.01.S02.EYRX020X000', 0, 1.00, '1709963623.png', '17099636230.jpg,17099636231.jpg,17099636232.jpg,17099636233.jpg,17099636234.jpg', 'In Stock', 35, '2024-03-09 00:53:43', '2024-03-09 00:53:43', NULL, 3, 1),
	(78, 'Şweller 6,5 cm (Eýran)', 'sweller-65-cm-eyran', 'Şweller 6,5 cm (Eýran)', 'Şweller 6,5 cm (Eýran) ', 100.00, 100.00, '153.01.S02.EYRX065X000', 0, 1.00, '1709963722.png', '17099637220.jpg,17099637221.jpg,17099637222.jpg,17099637223.jpg,17099637224.jpg', 'In Stock', 35, '2024-03-09 00:55:22', '2024-03-09 00:55:22', NULL, 3, 1),
	(79, 'Demir armatura 10mm (Russiýa)', 'demir-armatura-10mm-russiya', 'Demir armatura 10mm (Russiýa)', 'Demir armatura 10mm (Russiýa)', 100.00, 100.00, '153.01.S02.RUSX010X000', 0, 1.00, '1709963789.png', '17099637890.jpg,17099637891.jpg,17099637892.jpg,17099637893.jpg,17099637894.jpg', 'In Stock', 35, '2024-03-09 00:56:29', '2024-03-09 00:56:29', NULL, 3, 1),
	(80, 'Dwuhtawr 30 mm (Russiýa)', 'dwuhtawr-30-mm-russiya', 'Dwuhtawr 30 mm (Russiýa)', 'Dwuhtawr 30 mm (Russiýa) ', 100.00, 100.00, '153.01.D01.000X300X000', 0, 1.00, '1710218350.png', '17101361590.png', 'In Stock', 37, '2024-03-11 00:49:19', '2024-03-12 01:00:32', NULL, 3, 1),
	(85, 'Dwuhtawr 39 mm (Russiýa)', 'dwuhtawr-39-mm-russiya', 'Dwuhtawr 39 mm (Russiýa)', 'Dwuhtawr 39 mm (Russiýa) ', 100.00, 100.00, '153.01.D01.000X390X001', 0, 1.00, '1710219562.png', '17102195620.jpg,17102195621.jpg', 'In Stock', 37, '2024-03-11 23:59:22', '2024-03-12 01:00:39', NULL, 3, 1),
	(86, 'Dwuhtawr 44 mm (Russiýa)', 'dwuhtawr-44-mm-russiya', 'Dwuhtawr 44 mm (Russiýa)', 'Dwuhtawr 44 mm (Russiýa) ', 100.00, 100.00, '153.01.D01.000X440X001', 0, 1.00, '1710219646.png', '17102196460.jpg,17102196461.jpg', 'In Stock', 37, '2024-03-12 00:00:46', '2024-03-12 01:01:07', NULL, 3, 1),
	(87, 'Dwuhtawr 50 mm (Russiýa)', 'dwuhtawr-50-mm-russiya', 'Dwuhtawr 50 mm (Russiýa)', 'Dwuhtawr 50 mm (Russiýa) ', 100.00, 100.00, '153.01.D01.000X500X001', 0, 1.00, '1710219732.png', '17102197320.jpg,17102197321.jpg', 'In Stock', 37, '2024-03-12 00:02:12', '2024-03-12 01:00:59', NULL, 3, 1),
	(88, 'Dwuhtawr 60 mm (Russiýa)', 'dwuhtawr-60-mm-russiya', 'Dwuhtawr 60 mm (Russiýa)', 'Dwuhtawr 60 mm (Russiýa) ', 100.00, 100.00, '153.01.D01.000X600X001', 0, 1.00, '1710220024.png', '17102200240.jpg,17102200241.jpg', 'In Stock', 37, '2024-03-12 00:07:04', '2024-03-12 01:00:23', NULL, 3, 1),
	(89, 'Kruglýak 150 mm', 'kruglyak-150-mm', 'Kruglýak 150 mm', 'Kruglýak 150 mm ', 100.00, 100.00, '153.01.K01.RUS.150', 0, 1.00, '1710222646.jpg', '17102226460.jpg,17102226461.jpg', 'In Stock', 36, '2024-03-12 00:50:46', '2024-03-12 01:15:26', NULL, 3, 1),
	(92, 'Kruglýak 165 mm', 'kruglyak-165-mm', 'Kruglýak 165 mm', 'Kruglýak 165 mm ', 100.00, 100.00, '153.01.K01.RUS.165', 0, 1.00, '1710224050.jpg', '17102240500.jpg,17102240501.jpg', 'In Stock', 36, '2024-03-12 01:14:10', '2024-03-12 01:15:19', NULL, 3, 1),
	(93, 'Kruglýak 200 mm', 'kruglyak-200-mm', 'Kruglýak 200 mm', 'Kruglýak 200 mm ', 100.00, 100.00, '153.01.K01.RUS.200', 0, 1.00, '1710224113.jpg', '17102241130.jpg,17102241131.jpg', 'In Stock', 36, '2024-03-12 01:15:13', '2024-03-12 01:15:13', NULL, 3, 1),
	(94, 'Kruglýak 65 mm', 'kruglyak-65-mm', 'Kruglýak 65 mm', 'Kruglýak 65 mm ', 100.00, 100.00, '153.01.K01.RUS.65', 0, 1.00, '1710224202.jpg', '17102242020.jpg,17102242021.jpg', 'In Stock', 36, '2024-03-12 01:16:42', '2024-03-12 01:16:42', NULL, 6, 3),
	(95, 'Demir profil 10x10x1.0 mm', 'demir-profil-10x10x10-mm', 'Demir profil 10x10x1.0 mm', 'Demir profil 10x10x1.0 mm ', 100.00, 100.00, '153.01.P01.010X010X10', 0, 1.00, '1710303969.jpg', '17103039690.jpg,17103039691.webp', 'In Stock', 38, '2024-03-12 23:26:09', '2024-03-12 23:55:25', NULL, 3, 1),
	(96, 'Demir profil 20x10x1,5 mm', 'demir-profil-20x10x15-mm', 'Demir profil 20x10x1,5', 'Demir profil 20x10x1,5 ', 100.00, 100.00, '153.01.P01.020X010X15', 0, 1.00, '1710304504.jpg', '17103045040.jpg,17103045041.webp', 'In Stock', 38, '2024-03-12 23:35:04', '2024-03-12 23:57:30', NULL, 3, 1),
	(97, 'Demir profil 20x20x1,5 mm', 'demir-profil-20x20x15-mm', 'Demir profil 20x20x1,5 mm', 'Demir profil 20x20x1,5 mm ', 100.00, 100.00, '153.01.P01.020X020X15', 0, 1.00, '1710304855.jpg', '17103048550.jpg,17103048551.webp', 'In Stock', 38, '2024-03-12 23:40:55', '2024-03-12 23:58:02', NULL, 6, 1),
	(98, 'Demir profil 20x20x2.0 mm', 'demir-profil-20x20x20-mm', 'Demir profil 20x20x2.0 mm', 'Demir profil 20x20x2.0 mm ', 100.00, 100.00, '153.01.P01.020X020X20', 0, 1.00, '1710306110.jpg', '17103061100.jpg,17103061101.webp', 'In Stock', 38, '2024-03-13 00:01:50', '2024-03-13 00:01:50', NULL, 3, 1),
	(99, 'Demir profil 20x30x1.5 mm', 'demir-profil-20x30x15-mm', 'Demir profil 20x30x1.5 mm', 'Demir profil 20x30x1.5 mm ', 100.00, 100.00, '153.01.P01.020X030X15', 0, 1.00, '1710306441.jpg', '17103064410.jpg,17103064411.webp', 'In Stock', 38, '2024-03-13 00:07:21', '2024-03-13 00:07:21', NULL, 3, 1),
	(104, 'Demir profil 20x30x2.0 mm', 'demir-profil-20x30x20-mm', 'Demir profil 20x30x2.0 mm', 'Demir profil 20x30x2.0 mm ', 100.00, 100.00, '153.01.P01.020X030X20', 0, 1.00, '1710307953.jpg', '17103079530.jpg,17103079531.webp', 'In Stock', 38, '2024-03-13 00:32:33', '2024-03-13 00:32:33', NULL, 3, 1),
	(105, 'Demir profil 20x40x1.4 mm', 'demir-profil-20x40x14-mm', 'Demir profil 20x40x1.4 mm', 'Demir profil 20x40x1.4 mm ', 100.00, 100.00, '153.01.P01.020X040X14', 0, 1.00, '1710308064.jpg', '17103080640.jpg,17103080641.webp', 'In Stock', 38, '2024-03-13 00:34:24', '2024-03-13 00:34:24', NULL, 4, 2),
	(106, 'Demir profil 20x40x1.5 mm', 'demir-profil-20x40x15-mm', 'Demir profil 20x40x1.5 mm', 'Demir profil 20x40x1.5 mm ', 100.00, 100.00, '153.01.P01.020X040X15', 0, 1.00, '1710308145.jpg', '17103081450.jpg,17103081451.webp', 'In Stock', 38, '2024-03-13 00:35:45', '2024-03-13 00:35:45', NULL, 6, 2),
	(107, 'Demir profil 20x40x1.7 mm', 'demir-profil-20x40x17-mm', 'Demir profil 20x40x1.7 mm', 'Demir profil 20x40x1.7 mm ', 100.00, 100.00, '153.01.P01.020X040X17', 0, 1.00, '1710308214.jpg', '17103082140.jpg,17103082141.webp', 'In Stock', 38, '2024-03-13 00:36:54', '2024-03-13 00:36:54', NULL, 5, 3),
	(108, 'Demir profil 20x40x1.8 mm', 'demir-profil-20x40x18-mm', 'Demir profil 20x40x1.8 mm', 'Demir profil 20x40x1.8 mm ', 100.00, 100.00, '153.01.P01.020X040X18', 0, 1.00, '1710309275.jpg', '17103092750.jpg,17103092751.webp', 'In Stock', 38, '2024-03-13 00:54:35', '2024-03-13 00:54:35', NULL, 5, 4),
	(109, 'Demir profil 20x40x2.0 mm', 'demir-profil-20x40x20-mm', 'Demir profil 20x40x2.0 mm', 'Demir profil 20x40x2.0 mm ', 100.00, 100.00, '153.01.P01.020X040X20', 0, 1.00, '1710309351.jpg', '17103093510.jpg,17103093511.webp', 'In Stock', 38, '2024-03-13 00:55:51', '2024-03-13 00:55:51', NULL, 6, 6),
	(110, 'Demir profil 30x30x1.4 mm', 'demir-profil-30x30x14-mm', 'Demir profil 30x30x1.4 mm', 'Demir profil 30x30x1.4 mm ', 100.00, 100.00, '153.01.P01.030X030X14', 0, 1.00, '1710309600.jpg', '17103096000.jpg,17103096001.webp', 'In Stock', 38, '2024-03-13 01:00:00', '2024-03-13 01:00:00', NULL, 6, 2),
	(111, 'Demir profil 30x30x1.7 mm', 'demir-profil-30x30x17-mm', 'Demir profil 30x30x1.7 mm', 'Demir profil 30x30x1.7 mm ', 100.00, 100.00, '153.01.P01.030X030X17', 0, 1.00, '1710309656.jpg', '17103096560.jpg,17103096561.webp', 'In Stock', 38, '2024-03-13 01:00:56', '2024-03-13 01:00:56', NULL, 5, 3),
	(112, 'Demir profil 30x30x1.8 mm', 'demir-profil-30x30x18-mm', 'Demir profil 30x30x1.8 mm', 'Demir profil 30x30x1.8 mm ', 100.00, 100.00, '153.01.P01.030X030X18', 0, 1.00, '1710309719.jpg', '17103097190.jpg,17103097191.webp', 'In Stock', 38, '2024-03-13 01:01:59', '2024-03-13 01:01:59', NULL, 5, 4),
	(113, 'Demir profil 30x30x2.0 mm', 'demir-profil-30x30x20-mm', 'Demir profil 30x30x2.0 mm', 'Demir profil 30x30x2.0 mm ', 100.00, 100.00, '153.01.P01.030X030X20', 0, 1.00, '1710309785.jpg', '17103097850.jpg,17103097851.webp', 'In Stock', 38, '2024-03-13 01:03:05', '2024-03-13 01:03:05', NULL, 4, 3),
	(114, 'Demir profil 40x30x1.5 mm', 'demir-profil-40x30x15-mm', 'Demir profil 40x30x1.5 mm', 'Demir profil 40x30x1.5 mm ', 100.00, 100.00, '153.01.P01.040X030X15', 0, 1.00, '1710309871.jpg', '17103098710.jpg,17103098711.webp', 'In Stock', 38, '2024-03-13 01:04:31', '2024-03-13 01:04:31', NULL, 4, 1),
	(115, 'Demir profil 40x30x2.0 mm', 'demir-profil-40x30x20-mm', 'Demir profil 40x30x2.0 mm', 'Demir profil 40x30x2.0 mm', 100.00, 100.00, '153.01.P01.040X030X20', 0, 1.00, '1710309938.jpg', '17103099380.jpg,17103099381.webp', 'In Stock', 38, '2024-03-13 01:05:38', '2024-03-13 01:05:38', NULL, 4, 1),
	(116, 'Demir profil 40x40x1.2 mm (Türkiýe)', 'demir-profil-40x40x12-mm-turkiye', 'Demir profil 40x40x1.2 mm (Türkiýe)', 'Demir profil 40x40x1.2 mm (Türkiýe) ', 100.00, 100.00, '153.01.P01.040X040X12T', 0, 1.00, '1710310141.jpg', '17103101410.jpg,17103101411.webp', 'In Stock', 38, '2024-03-13 01:09:01', '2024-03-13 02:06:19', NULL, 3, 3),
	(117, 'Demir profil 40x40x1.4 mm', 'demir-profil-40x40x14-mm', 'Demir profil 40x40x1.4 mm', 'Demir profil 40x40x1.4 mm ', 100.00, 100.00, '153.01.P01.040X040X14', 0, 1.00, '1710312824.jpg', '17103128240.jpg,17103128241.webp', 'In Stock', 38, '2024-03-13 01:53:44', '2024-03-13 01:53:44', NULL, 5, 3),
	(118, 'Demir profil 40x40x1.5 mm', 'demir-profil-40x40x15-mm', 'Demir profil 40x40x1.5 mm', 'Demir profil 40x40x1.5 mm ', 100.00, 100.00, '153.01.P01.040X040X15', 0, 1.00, '1710312895.jpg', '17103128950.jpg,17103128951.webp', 'In Stock', 38, '2024-03-13 01:54:55', '2024-03-13 01:54:55', NULL, 4, 2),
	(119, 'Demir profil 40x40x1.7 mm', 'demir-profil-40x40x17-mm', 'Demir profil 40x40x1.7 mm', 'Demir profil 40x40x1.7 mm ', 100.00, 100.00, '153.01.P01.040X040X17', 0, 1.00, '1710312969.jpg', '17103129690.jpg,17103129691.webp', 'In Stock', 38, '2024-03-13 01:56:09', '2024-03-13 01:56:09', NULL, 6, 2),
	(120, 'Demir profil 40x40x1.8 mm', 'demir-profil-40x40x18-mm', 'Demir profil 40x40x1.8 mm', 'Demir profil 40x40x1.8 mm ', 100.00, 100.00, '153.01.P01.040X040X18', 0, 1.00, '1710313022.jpg', '17103130220.jpg,17103130221.webp', 'In Stock', 38, '2024-03-13 01:57:02', '2024-03-13 01:57:02', NULL, 5, 2),
	(121, 'Demir profil 40x40x2.0 mm', 'demir-profil-40x40x20-mm', 'Demir profil 40x40x2.0 mm', 'Demir profil 40x40x2.0 mm ', 100.00, 100.00, '153.01.P01.040X040X20', 0, 1.00, '1710313088.jpg', '17103130880.jpg,17103130881.webp', 'In Stock', 38, '2024-03-13 01:58:08', '2024-03-13 01:58:08', NULL, 4, 3),
	(122, 'Demir profil 40x40x2.8 mm', 'demir-profil-40x40x28-mm', 'Demir profil 40x40x2.8 mm', 'Demir profil 40x40x2.8 mm ', 100.00, 100.00, '153.01.P01.040X040X28', 0, 1.00, '1710313274.jpg', '17103132740.jpg,17103132741.webp', 'In Stock', 38, '2024-03-13 02:01:14', '2024-03-13 02:01:14', NULL, 5, 4),
	(123, 'Demir profil 40x40x3.0 mm', 'demir-profil-40x40x30-mm', 'Demir profil 40x40x3.0 mm', 'Demir profil 40x40x3.0 mm ', 100.00, 100.00, '153.01.P01.040X040X30', 0, 1.00, '1710313525.jpg', '17103135250.jpg,17103135251.webp', 'In Stock', 38, '2024-03-13 02:05:25', '2024-03-13 02:05:25', NULL, 5, 3),
	(124, 'Demir profil 40x60x1.2 mm (Türkiýe)', 'demir-profil-40x60x12-mm-turkiye', 'Demir profil 40x60x1.2 mm (Türkiýe)', 'Demir profil 40x60x1.2 mm (Türkiýe) ', 100.00, 100.00, '153.01.P01.040X060X12T', 0, 1.00, '1710477376.jpg', '17104773760.jpg,17104773761.webp', 'In Stock', 38, '2024-03-14 23:36:16', '2024-03-14 23:36:16', NULL, 4, 3),
	(125, 'Demir profil 40x60x1.4 mm', 'demir-profil-40x60x14-mm', 'Demir profil 40x60x1.4 mm', 'Demir profil 40x60x1.4 mm ', 100.00, 100.00, '153.01.P01.040X060X14', 0, 1.00, '1710477434.jpg', '17104774340.jpg,17104774341.webp', 'In Stock', 38, '2024-03-14 23:37:14', '2024-03-14 23:37:14', NULL, 4, 3),
	(126, 'Demir profil 40x60x1.8 mm', 'demir-profil-40x60x18-mm', 'Demir profil 40x60x1.8 mm', 'Demir profil 40x60x1.8 mm', 100.00, 100.00, '153.01.P01.040X060X18', 0, 1.00, '1710477490.jpg', '17104774900.jpg,17104774901.webp', 'In Stock', 38, '2024-03-14 23:38:10', '2024-03-14 23:38:10', NULL, 4, 8),
	(127, 'Demir profil 40x60x2.0 mm', 'demir-profil-40x60x20-mm', 'Demir profil 40x60x2.0 mm', 'Demir profil 40x60x2.0 mm', 100.00, 100.00, '153.01.P01.040X060X20', 0, 1.00, '1710477558.jpg', '17104775580.jpg,17104775581.webp', 'In Stock', 38, '2024-03-14 23:39:18', '2024-03-14 23:39:18', NULL, 4, 3),
	(128, 'Demir profil 40x60x2.5 mm', 'demir-profil-40x60x25-mm', 'Demir profil 40x60x2.5 mm', 'Demir profil 40x60x2.5 mm', 100.00, 100.00, '153.01.P01.040X060X25', 0, 1.00, '1710477620.jpg', '17104776200.jpg,17104776201.webp', 'In Stock', 38, '2024-03-14 23:40:20', '2024-03-14 23:40:20', NULL, 4, 1),
	(129, 'Demir profil 40x60x3.0 mm', 'demir-profil-40x60x30-mm', 'Demir profil 40x60x3.0 mm', 'Demir profil 40x60x3.0 mm', 100.00, 100.00, '153.01.P01.040X060X30', 0, 1.00, '1710477778.jpg', '17104777780.jpg,17104777781.webp', 'In Stock', 38, '2024-03-14 23:42:58', '2024-03-14 23:42:58', NULL, 5, 2),
	(130, 'Demir profil 40x80x2.0 mm', 'demir-profil-40x80x20-mm', 'Demir profil 40x80x2.0 mm', 'Demir profil 40x80x2.0 mm', 100.00, 100.00, '153.01.P01.040X080X20', 0, 1.00, '1710477894.jpg', '17104778940.jpg,17104778941.webp', 'In Stock', 38, '2024-03-14 23:44:54', '2024-03-14 23:44:54', NULL, 3, 1),
	(131, 'Demir profil 40x80x2.8 mm', 'demir-profil-40x80x28-mm', 'Demir profil 40x80x2.8 mm', 'Demir profil 40x80x2.8 mm', 100.00, 100.00, '153.01.P01.040X080X28', 0, 1.00, '1710478755.jpg', '17104787550.jpg,17104787551.webp', 'In Stock', 38, '2024-03-14 23:59:15', '2024-03-14 23:59:15', NULL, 5, 2),
	(132, 'Demir profil 50x50x2.0 mm', 'demir-profil-50x50x20-mm', 'Demir profil 50x50x2.0 mm', 'Demir profil 50x50x2.0 mm', 100.00, 100.00, '153.01.P01.050X050X20', 0, 1.00, '1710478941.jpg', '17104789410.jpg,17104789411.webp', 'In Stock', 38, '2024-03-15 00:02:21', '2024-03-15 00:02:21', NULL, 4, 2),
	(133, 'Demir profil 50x50x3.0 mm', 'demir-profil-50x50x30-mm', 'Demir profil 50x50x3.0 mm', 'Demir profil 50x50x3.0 mm', 100.00, 100.00, '153.01.P01.050X050X30', 0, 1.00, '1710480584.jpg', '17104805840.jpg,17104805841.webp', 'In Stock', 38, '2024-03-15 00:29:44', '2024-03-15 00:29:44', NULL, 4, 1),
	(134, 'Demir profil 50x50x4.0 mm', 'demir-profil-50x50x40-mm', 'Demir profil 50x50x4.0 mm', 'Demir profil 50x50x4.0 mm', 100.00, 100.00, '153.01.P01.050X050X40', 0, 1.00, '1710481484.jpg', '17104814840.jpg,17104814841.webp', 'In Stock', 38, '2024-03-15 00:44:44', '2024-03-15 00:44:44', NULL, 4, 2),
	(135, 'Demir profil 60x60x2.0 mm', 'demir-profil-60x60x20-mm', 'Demir profil 60x60x2.0 mm', 'Demir profil 60x60x2.0 mm ', 100.00, 100.00, '153.01.P01.060X060X20', 0, 1.00, '1710481858.jpg', '17104818580.jpg,17104818581.webp', 'In Stock', 38, '2024-03-15 00:50:58', '2024-03-15 00:50:58', NULL, 4, 2),
	(136, 'Demir profil 60x60x2.8 mm', 'demir-profil-60x60x28-mm', 'Demir profil 60x60x2.8 mm', 'Demir profil 60x60x2.8 mm ', 100.00, 100.00, '153.01.P01.060X060X28', 0, 1.00, '1710481926.jpg', '17104819260.jpg,17104819261.webp', 'In Stock', 38, '2024-03-15 00:52:06', '2024-03-15 00:52:06', NULL, 6, 2),
	(137, 'Demir profil 60x60x3.2 mm', 'demir-profil-60x60x32-mm', 'Demir profil 60x60x3.2 mm', 'Demir profil 60x60x3.2 mm ', 100.00, 100.00, '153.01.P01.060X060X32', 0, 1.00, '1710482386.jpg', '17104823860.jpg,17104823861.webp', 'In Stock', 38, '2024-03-15 00:59:46', '2024-03-15 00:59:46', NULL, 4, 3),
	(138, 'Demir profil 60x60x3.7 mm', 'demir-profil-60x60x37-mm', 'Demir profil 60x60x3.7 mm', 'Demir profil 60x60x3.7 mm ', 100.00, 100.00, '153.01.P01.060X060X37', 0, 1.00, '1710482602.jpg', '17104826020.jpg,17104826021.webp', 'In Stock', 38, '2024-03-15 01:03:22', '2024-03-15 01:03:22', NULL, 4, 3),
	(139, 'Demir profil 60x60x6.0 mm', 'demir-profil-60x60x60-mm', 'Demir profil 60x60x6.0 mm', 'Demir profil 60x60x6.0 mm ', 100.00, 100.00, '153.01.P01.060X060X60', 0, 1.00, '1710482808.jpg', '17104828080.jpg,17104828081.webp', 'In Stock', 38, '2024-03-15 01:06:48', '2024-03-15 01:06:48', NULL, 4, 2),
	(140, 'Demir profil 60x80x3.0 mm', 'demir-profil-60x80x30-mm', 'Demir profil 60x80x3.0 mm', 'Demir profil 60x80x3.0 mm ', 100.00, 100.00, '153.01.P01.060X080X30', 0, 1.00, '1710482884.jpg', '17104828840.jpg,17104828841.webp', 'In Stock', 38, '2024-03-15 01:08:04', '2024-03-15 01:08:04', NULL, 5, 2),
	(141, 'Demir profil 60x80x4.0 mm', 'demir-profil-60x80x40-mm', 'Demir profil 60x80x4.0 mm', 'Demir profil 60x80x4.0 mm ', 100.00, 100.00, '153.01.P01.060X080X40', 0, 1.00, '1710482955.jpg', '17104829550.jpg,17104829551.webp', 'In Stock', 38, '2024-03-15 01:09:15', '2024-03-15 01:09:15', NULL, 5, 2),
	(142, 'Demir profil 80x80x1.8 mm', 'demir-profil-80x80x18-mm', 'Demir profil 80x80x1.8 mm', 'Demir profil 80x80x1.8 mm ', 100.00, 100.00, '153.01.P01.080X080X18', 0, 1.00, '1710483033.jpg', '17104830330.jpg,17104830331.webp', 'In Stock', 38, '2024-03-15 01:10:33', '2024-03-15 01:10:33', NULL, 5, 2),
	(143, 'Demir profil 80x80x2.0 mm', 'demir-profil-80x80x20-mm', 'Demir profil 80x80x2.0 mm', 'Demir profil 80x80x2.0 mm ', 100.00, 100.00, '153.01.P01.080X080X20', 0, 1.00, '1710483085.jpg', '17104830850.jpg,17104830851.webp', 'In Stock', 38, '2024-03-15 01:11:25', '2024-03-15 01:11:25', NULL, 4, 1),
	(144, 'Demir profil 80x80x3.2 mm', 'demir-profil-80x80x32-mm', 'Demir profil 80x80x3.2 mm', 'Demir profil 80x80x3.2 mm ', 100.00, 100.00, '153.01.P01.080X080X32', 0, 1.00, '1710483173.jpg', '17104831730.jpg', 'In Stock', 38, '2024-03-15 01:12:53', '2024-03-15 01:12:53', NULL, 4, 8),
	(145, 'Demir profil 80x80x4.0 mm', 'demir-profil-80x80x40-mm', 'Demir profil 80x80x4.0 mm', 'Demir profil 80x80x4.0 mm ', 100.00, 100.00, '153.01.P01.080X080X40', 0, 1.00, '1710483250.jpg', '17104832500.jpg,17104832501.webp', 'In Stock', 38, '2024-03-15 01:14:10', '2024-03-15 01:14:10', NULL, 5, 2),
	(146, 'Demir profil 100x40x2.0 mm', 'demir-profil-100x40x20-mm', 'Demir profil 100x40x2.0 mm', 'Demir profil 100x40x2.0 mm ', 100.00, 100.00, '153.01.P01.100X040X20', 0, 1.00, '1710483315.jpg', '17104833150.jpg,17104833151.webp', 'In Stock', 38, '2024-03-15 01:15:15', '2024-03-15 01:15:15', NULL, 3, 3),
	(147, 'Demir profil 100x50x2.0 mm', 'demir-profil-100x50x20-mm', 'Demir profil 100x50x2.0 mm', 'Demir profil 100x50x2.0 mm ', 100.00, 100.00, '153.01.P01.100X050X20', 0, 1.00, '1710483399.jpg', '17104833990.jpg,17104833991.webp', 'In Stock', 38, '2024-03-15 01:16:39', '2024-03-15 01:16:39', NULL, 5, 3),
	(148, 'Demir profil 100x50x3.0 mm', 'demir-profil-100x50x30-mm', 'Demir profil 100x50x3.0 mm', 'Demir profil 100x50x3.0 mm ', 100.00, 100.00, '153.01.P01.100X050X30', 0, 1.00, '1710484606.jpg', '17104846060.jpg,17104846061.webp', 'In Stock', 38, '2024-03-15 01:36:46', '2024-03-15 01:36:46', NULL, 5, 2),
	(149, 'Demir profil 100x60x3.0 mm', 'demir-profil-100x60x30-mm', 'Demir profil 100x60x3.0 mm', 'Demir profil 100x60x3.0 mm ', 100.00, 100.00, '153.01.P01.100X060X30', 0, 1.00, '1710484760.jpg', '17104847600.jpg,17104847601.webp', 'In Stock', 38, '2024-03-15 01:39:20', '2024-03-15 01:39:20', NULL, 4, 2),
	(150, 'Demir profil 120x120x3.0 mm', 'demir-profil-120x120x30-mm', 'Demir profil 120x120x3.0 mm', 'Demir profil 120x120x3.0 mm ', 100.00, 100.00, '153.01.P01.120X120X30', 0, 1.00, '1710484825.jpg', '17104848250.jpg,17104848251.webp', 'In Stock', 38, '2024-03-15 01:40:25', '2024-03-15 01:40:25', NULL, 5, 1),
	(151, 'Demir profil 180x180x5.0 mm', 'demir-profil-180x180x50-mm', 'Demir profil 180x180x5.0 mm', 'Demir profil 180x180x5.0 mm ', 100.00, 100.00, '153.01.P01.180X180X50', 0, 1.00, '1710484882.jpg', '17104848820.jpg,17104848821.webp', 'In Stock', 38, '2024-03-15 01:41:22', '2024-03-15 01:41:22', NULL, 4, 2);

-- Дамп структуры для таблица kendirloc.product_option
DROP TABLE IF EXISTS `product_option`;
CREATE TABLE IF NOT EXISTS `product_option` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `option_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dl` int DEFAULT NULL,
  `dw` int DEFAULT NULL,
  `dh` int DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `specifications_product_id_foreign` (`product_id`),
  CONSTRAINT `specifications_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.specifications: ~88 rows (приблизительно)
DELETE FROM `specifications`;
INSERT INTO `specifications` (`id`, `model`, `dl`, `dw`, `dh`, `unit`, `weight`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
	(14, '1', 1, 1, 1, 'Ştuk', 1, 0, 53, '2024-03-08 04:52:12', '2024-03-08 04:57:20'),
	(15, '1', 1, 1, 1, 'Ştuk', 1, 0, 54, '2024-03-08 04:54:00', '2024-03-08 04:57:27'),
	(16, '1', 1, 1, 1, 'Ştuk', 1, 0, 55, '2024-03-08 04:56:55', '2024-03-08 04:56:55'),
	(17, '1', 1, 1, 1, 'Ştuk', 1, 0, 56, '2024-03-08 05:02:46', '2024-03-08 05:02:46'),
	(18, '1', 1, 1, 1, 'Ştuk', 1, 0, 57, '2024-03-08 05:04:13', '2024-03-08 05:04:13'),
	(19, '1', 1, 1, 1, 'Ştuk', 1, 0, 58, '2024-03-08 05:06:45', '2024-03-08 05:06:45'),
	(20, '1', 1, 1, 1, 'Ştuk', 1, 0, 59, '2024-03-08 05:07:57', '2024-03-08 05:07:57'),
	(21, '1', 1, 1, 1, 'Ştuk', 1, 0, 60, '2024-03-08 05:09:17', '2024-03-08 05:09:17'),
	(22, '1', 1, 1, 1, 'Ştuk', 1, 0, 61, '2024-03-08 05:10:56', '2024-03-08 05:10:56'),
	(23, '1', 1, 1, 1, 'Ştuk', 1, 0, 62, '2024-03-08 05:13:26', '2024-03-08 05:13:26'),
	(24, '1', 1, 1, 1, '', 1, 0, 63, '2024-03-08 05:15:36', '2024-03-08 05:15:36'),
	(25, '1', 1, 1, 1, '', 1, 0, 64, '2024-03-08 05:17:31', '2024-03-08 05:17:31'),
	(26, '1', 1, 1, 1, 'Ştuk', 1, 0, 65, '2024-03-08 05:19:34', '2024-03-08 05:19:34'),
	(27, '1', 1, 1, 1, 'Ştuk', 1, 0, 66, '2024-03-08 05:27:17', '2024-03-08 05:27:17'),
	(28, '', 1, 1, 1, '', 1, 0, 67, '2024-03-08 05:29:18', '2024-03-08 05:29:18'),
	(29, '1', 1, 1, 1, '', 1, 0, 68, '2024-03-08 05:30:45', '2024-03-08 05:30:45'),
	(30, '1', 1, 1, 1, '', 1, 0, 69, '2024-03-08 05:32:03', '2024-03-08 05:32:03'),
	(31, '1', 1, 1, 1, 'Ştuk', 1, 0, 70, '2024-03-08 05:33:35', '2024-03-08 05:33:35'),
	(32, '', 1, 1, 1, '', 1, 0, 71, '2024-03-08 05:35:36', '2024-03-08 05:35:36'),
	(33, '1', 1, 1, 1, 'Tonna', 1, 0, 72, '2024-03-09 00:02:50', '2024-03-09 00:02:50'),
	(34, '1', 1, 1, 1, 'Tonna', 1, 0, 73, '2024-03-09 00:46:03', '2024-03-09 00:46:03'),
	(35, '1', 1, 1, 1, 'Tonna', 1, 0, 74, '2024-03-09 00:47:58', '2024-03-09 00:47:58'),
	(36, '1', 1, 1, 1, 'Tonna', 1, 0, 75, '2024-03-09 00:49:57', '2024-03-09 00:49:57'),
	(37, '1', 1, 1, 1, 'Tonna', 1, 0, 76, '2024-03-09 00:51:22', '2024-03-09 00:51:22'),
	(38, '1', 1, 1, 1, 'Tonna', 1, 0, 77, '2024-03-09 00:53:43', '2024-03-09 00:53:43'),
	(39, '1', 1, 1, 1, 'Tonna', 1, 0, 78, '2024-03-09 00:55:22', '2024-03-09 00:55:22'),
	(40, '1', 1, 1, 1, 'Tonna', 1, 0, 79, '2024-03-09 00:56:29', '2024-03-09 00:56:29'),
	(41, '1', 1, 1, 1, 'Tonna', 1, 1, 80, '2024-03-11 00:49:19', '2024-03-11 00:49:19'),
	(43, '1', 1, 1, 1, 'Tonna', 1, 0, 85, '2024-03-11 23:59:22', '2024-03-11 23:59:22'),
	(44, '1', 1, 1, 1, 'Tonna', 1, 0, 86, '2024-03-12 00:00:46', '2024-03-12 00:00:46'),
	(45, '1', 1, 1, 1, 'Tonna', 1, 0, 87, '2024-03-12 00:02:12', '2024-03-12 00:02:12'),
	(46, '1', 1, 1, 1, 'Tonna', 1, 0, 88, '2024-03-12 00:07:04', '2024-03-12 00:07:04'),
	(47, '1', 1, 1, 1, 'Tonna', 1, 0, 89, '2024-03-12 00:50:46', '2024-03-12 00:50:46'),
	(48, '1', 1, 1, 1, 'Tonna', 1, 0, 92, '2024-03-12 01:14:10', '2024-03-12 01:14:10'),
	(49, '1', 1, 1, 1, 'Tonna', 1, 0, 93, '2024-03-12 01:15:13', '2024-03-12 01:15:13'),
	(50, '1', 1, 1, 1, 'Tonna', 1, 0, 94, '2024-03-12 01:16:42', '2024-03-12 01:16:42'),
	(51, '1', 6, 10, 10, 'Tonna', 1, 0, 95, '2024-03-12 23:26:09', '2024-03-12 23:55:25'),
	(52, '1', 6, 20, 10, 'Tonna', 1, 0, 96, '2024-03-12 23:35:04', '2024-03-12 23:57:30'),
	(53, '1', 6, 20, 20, 'Tonna', 1, 0, 97, '2024-03-12 23:40:55', '2024-03-12 23:47:11'),
	(54, '1', 6, 20, 20, 'Tonna', 1, 0, 98, '2024-03-13 00:01:50', '2024-03-13 00:01:50'),
	(55, '1', 6, 20, 30, 'Tonna', 1, 0, 99, '2024-03-13 00:07:21', '2024-03-13 00:07:21'),
	(56, '1', 6, 20, 30, 'Tonna', 1, 0, 104, '2024-03-13 00:32:33', '2024-03-13 00:32:33'),
	(57, '1', 6, 20, 40, 'Tonna', 1, 0, 105, '2024-03-13 00:34:24', '2024-03-13 00:34:24'),
	(58, '1', 6, 20, 40, 'Tonna', 1, 0, 106, '2024-03-13 00:35:45', '2024-03-13 00:35:45'),
	(59, '1', 6, 20, 40, 'Tonna', 1, 0, 107, '2024-03-13 00:36:54', '2024-03-13 00:36:54'),
	(60, '1', 6, 20, 40, 'Tonna', 1, 0, 108, '2024-03-13 00:54:35', '2024-03-13 00:54:35'),
	(61, '1', 6, 20, 40, 'Tonna', 1, 0, 109, '2024-03-13 00:55:51', '2024-03-13 00:55:51'),
	(62, '1', 6, 30, 30, 'Tonna', 1, 0, 110, '2024-03-13 01:00:00', '2024-03-13 01:00:00'),
	(63, '1', 6, 30, 30, 'Tonna', 1, 0, 111, '2024-03-13 01:00:56', '2024-03-13 01:00:56'),
	(64, '1', 6, 30, 30, 'Tonna', 1, 0, 112, '2024-03-13 01:01:59', '2024-03-13 01:01:59'),
	(65, '1', 6, 30, 30, 'Tonna', 1, 0, 113, '2024-03-13 01:03:05', '2024-03-13 01:03:05'),
	(66, '1', 6, 40, 30, 'Tonna', 1, 0, 114, '2024-03-13 01:04:31', '2024-03-13 01:04:31'),
	(67, '1', 6, 40, 30, 'Tonna', 1, 0, 115, '2024-03-13 01:05:38', '2024-03-13 01:05:38'),
	(68, '1', 6, 40, 40, 'Tonna', 1, 0, 116, '2024-03-13 01:09:01', '2024-03-13 01:09:01'),
	(69, '1', 6, 40, 40, 'Tonna', 1, 0, 117, '2024-03-13 01:53:44', '2024-03-13 01:53:44'),
	(70, '1', 6, 40, 40, 'Tonna', 1, 0, 118, '2024-03-13 01:54:55', '2024-03-13 01:54:55'),
	(71, '1', 6, 40, 40, 'Tonna', 1, 0, 119, '2024-03-13 01:56:09', '2024-03-13 01:56:09'),
	(72, '1', 6, 40, 40, 'Tonna', 1, 0, 120, '2024-03-13 01:57:02', '2024-03-13 01:57:02'),
	(73, '1', 6, 40, 40, 'Tonna', 1, 0, 121, '2024-03-13 01:58:08', '2024-03-13 01:58:08'),
	(74, '1', 6, 40, 40, 'Tonna', 1, 0, 122, '2024-03-13 02:01:14', '2024-03-13 02:01:14'),
	(75, '1', 6, 40, 40, 'Tonna', 1, 0, 123, '2024-03-13 02:05:25', '2024-03-13 02:05:25'),
	(76, '1', 6, 40, 60, 'Tonna', 1, 0, 124, '2024-03-14 23:36:16', '2024-03-14 23:36:16'),
	(77, '1', 6, 40, 60, 'Tonna', 1, 0, 125, '2024-03-14 23:37:14', '2024-03-14 23:37:14'),
	(78, '1', 6, 40, 60, 'Tonna', 1, 0, 126, '2024-03-14 23:38:10', '2024-03-14 23:38:10'),
	(79, '1', 6, 40, 60, 'Tonna', 1, 0, 127, '2024-03-14 23:39:18', '2024-03-14 23:39:18'),
	(80, '1', 6, 40, 60, 'Tonna', 1, 0, 128, '2024-03-14 23:40:20', '2024-03-14 23:40:20'),
	(81, '1', 6, 40, 60, 'Tonna', 1, 0, 129, '2024-03-14 23:42:58', '2024-03-14 23:42:58'),
	(82, '1', 6, 40, 80, 'Tonna', 1, 0, 130, '2024-03-14 23:44:54', '2024-03-14 23:44:54'),
	(83, '1', 6, 40, 80, 'Tonna', 1, 0, 131, '2024-03-14 23:59:15', '2024-03-14 23:59:15'),
	(84, '1', 6, 50, 50, 'Tonna', 1, 0, 132, '2024-03-15 00:02:21', '2024-03-15 00:02:21'),
	(85, '1', 6, 50, 50, 'Tonna', 1, 0, 133, '2024-03-15 00:29:44', '2024-03-15 00:29:44'),
	(86, '1', 6, 50, 50, 'Tonna', 1, 0, 134, '2024-03-15 00:44:44', '2024-03-15 00:44:44'),
	(87, '1', 6, 60, 60, 'Tonna', 1, 0, 135, '2024-03-15 00:50:58', '2024-03-15 00:50:58'),
	(88, '1', 6, 60, 60, 'Tonna', 1, 0, 136, '2024-03-15 00:52:06', '2024-03-15 00:52:06'),
	(89, '1', 6, 60, 60, 'Tonna', 1, 0, 137, '2024-03-15 00:59:46', '2024-03-15 00:59:46'),
	(90, '1', 6, 60, 60, 'Tonna', 1, 0, 138, '2024-03-15 01:03:22', '2024-03-15 01:03:22'),
	(91, '1', 6, 60, 60, 'Tonna', 1, 0, 139, '2024-03-15 01:06:48', '2024-03-15 01:06:48'),
	(92, '1', 6, 60, 80, 'Tonna', 1, 0, 140, '2024-03-15 01:08:04', '2024-03-15 01:08:04'),
	(93, '1', 6, 60, 80, 'Tonna', 1, 0, 141, '2024-03-15 01:09:15', '2024-03-15 01:09:15'),
	(94, '1', 6, 80, 80, 'Tonna', 1, 0, 142, '2024-03-15 01:10:33', '2024-03-15 01:10:33'),
	(95, '1', 6, 80, 80, 'Tonna', 1, 0, 143, '2024-03-15 01:11:25', '2024-03-15 01:11:25'),
	(96, '1', 6, 80, 80, 'Tonna', 1, 0, 144, '2024-03-15 01:12:53', '2024-03-15 01:12:53'),
	(97, '1', 6, 80, 80, 'Tonna', 1, 0, 145, '2024-03-15 01:14:10', '2024-03-15 01:14:10'),
	(98, '1', 6, 100, 40, 'Tonna', 1, 0, 146, '2024-03-15 01:15:15', '2024-03-15 01:15:15'),
	(99, '1', 6, 100, 50, 'Tonna', 1, 0, 147, '2024-03-15 01:16:39', '2024-03-15 01:16:39'),
	(100, '1', 6, 100, 50, 'Tonna', 1, 0, 148, '2024-03-15 01:36:46', '2024-03-15 01:36:46'),
	(101, '1', 6, 100, 60, 'Tonna', 1, 0, 149, '2024-03-15 01:39:20', '2024-03-15 01:39:20'),
	(102, '1', 6, 120, 120, 'Tonna', 1, 0, 150, '2024-03-15 01:40:25', '2024-03-15 01:40:25'),
	(103, '1', 6, 180, 180, 'Tonna', 1, 0, 151, '2024-03-15 01:41:22', '2024-03-15 01:41:22');

-- Дамп структуры для таблица kendirloc.transactions
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `mode` enum('code','card','paypal') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_user_id_foreign` (`user_id`),
  KEY `transactions_order_id_foreign` (`order_id`),
  CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.transactions: ~18 rows (приблизительно)
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
	(14, 1, 16, 'card', 'pending', '2024-02-22 06:15:30', '2024-02-22 06:15:30'),
	(15, 1, 17, 'card', 'pending', '2024-02-25 22:55:18', '2024-02-25 22:55:18'),
	(16, 14, 18, 'card', 'pending', '2024-02-27 04:56:45', '2024-02-27 04:56:45'),
	(17, 14, 19, 'card', 'pending', '2024-02-28 01:30:24', '2024-02-28 01:30:24'),
	(18, 14, 20, 'card', 'pending', '2024-02-28 03:47:46', '2024-02-28 03:47:46'),
	(19, 14, 21, 'card', 'pending', '2024-02-28 04:39:42', '2024-02-28 04:39:42'),
	(20, 1, 22, 'card', 'pending', '2024-03-07 07:15:19', '2024-03-07 07:15:19'),
	(21, 1, 23, 'card', 'pending', '2024-03-07 07:16:47', '2024-03-07 07:16:47'),
	(22, 14, 24, 'card', 'pending', '2024-03-12 05:09:11', '2024-03-12 05:09:11'),
	(23, 14, 25, 'card', 'pending', '2024-03-12 05:11:32', '2024-03-12 05:11:32'),
	(24, 1, 26, 'card', 'pending', '2024-03-12 23:27:36', '2024-03-12 23:27:36');

-- Дамп структуры для таблица kendirloc.units
DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kod` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы kendirloc.users: ~26 rows (приблизительно)
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
	(27, 'Guvanch', 'info@gmail.com', NULL, '$2y$12$7o4IP8EuBzJirS8Z7Q8YZeoaUxVLrADGD4ggmj1XPmr7SddMvt8MO', NULL, '2024-03-07 00:56:21', '2024-03-07 00:56:21', 'ADM'),
	(28, 'Atamyrat', 'atamyrat20031111@gmail.com', NULL, '$2y$12$wvvaoIz1ISUVORQrX9CIJOAWcWxsx0R0Zsozc4nmu2QxwC9foEBB6', NULL, '2024-03-07 22:57:44', '2024-03-07 22:57:44', 'USR');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
