-- -------------------------------------------------------------
-- TablePlus 6.1.8(574)
--
-- https://tableplus.com/
--
-- Database: peerweb
-- Generation Time: 2024-11-12 10:23:06.6700
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `about_headers`;
CREATE TABLE `about_headers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `about_seconds`;
CREATE TABLE `about_seconds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `allocations`;
CREATE TABLE `allocations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `allocation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perentage` int NOT NULL,
  `token_amount` bigint NOT NULL,
  `vesting_period` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loyalty_button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ico_button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `loyalty_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'https://loyaltyclub.peernetics.io/',
  `ico_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'https://peernetics.io/',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blogs_slug_unique` (`slug`),
  KEY `blogs_user_id_foreign` (`user_id`),
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int unsigned DEFAULT NULL,
  `order` int NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `collaboratives`;
CREATE TABLE `collaboratives` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `crypto_benefits`;
CREATE TABLE `crypto_benefits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `crypto_images`;
CREATE TABLE `crypto_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `crypto_items`;
CREATE TABLE `crypto_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `cryptocurrencies`;
CREATE TABLE `cryptocurrencies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE `data_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `data_types`;
CREATE TABLE `data_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `exceptionals`;
CREATE TABLE `exceptionals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `exchanges`;
CREATE TABLE `exchanges` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `exclusives`;
CREATE TABLE `exclusives` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `extensives`;
CREATE TABLE `extensives` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `faq_banner_image`;
CREATE TABLE `faq_banner_image` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `featureds`;
CREATE TABLE `featureds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `home_sectioniiis`;
CREATE TABLE `home_sectioniiis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `texti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Accept Crypto',
  `textii` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Safe',
  `textiii` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'and',
  `textiv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Securely',
  `textv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'with',
  `textvi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Peernetics',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sites/default/files/2023-09/peernetics-dashnoard.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `home_sectioniis`;
CREATE TABLE `home_sectioniis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_header` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `home_sectionivs`;
CREATE TABLE `home_sectionivs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `home_sectionvs`;
CREATE TABLE `home_sectionvs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `loyalty_items`;
CREATE TABLE `loyalty_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `loyalty_programs`;
CREATE TABLE `loyalty_programs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `masses`;
CREATE TABLE `masses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `merchant_items`;
CREATE TABLE `merchant_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `merchant_merits`;
CREATE TABLE `merchant_merits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `merchant_programs`;
CREATE TABLE `merchant_programs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `merchant_sections`;
CREATE TABLE `merchant_sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `merchant_services`;
CREATE TABLE `merchant_services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `offers`;
CREATE TABLE `offers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `page_contents`;
CREATE TABLE `page_contents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `page_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `pns_items`;
CREATE TABLE `pns_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `pns_token`;
CREATE TABLE `pns_token` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ico_button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Buy PNS',
  `ico_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'https://peernetics.io/',
  `white_paper_button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Whitepaper',
  `white_paper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'sites/default/files/2024-03/Whitepaper%20V2_0.pdf',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `pns_utilities`;
CREATE TABLE `pns_utilities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `promote_bussinesses`;
CREATE TABLE `promote_bussinesses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `promotes`;
CREATE TABLE `promotes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `question_items`;
CREATE TABLE `question_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `road_maps`;
CREATE TABLE `road_maps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `sections`;
CREATE TABLE `sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` bigint unsigned NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sections_page_id_foreign` (`page_id`),
  CONSTRAINT `sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `site_pages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `site_pages`;
CREATE TABLE `site_pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `target_markets`;
CREATE TABLE `target_markets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `team_headers`;
CREATE TABLE `team_headers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socials` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `togethers`;
CREATE TABLE `togethers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `wallets`;
CREATE TABLE `wallets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `about_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About Peernetics', 'Peernetics exists to enable the mass adoption\n                of cryptocurrency payments. Through\n                optimised cryptocurrency payment solutions,\n                Peernetics empowers businesses to accept,\n                exchange, withdraw, send, store and receive\n                cryptocurrencies.', 'images/about/about-left-bnr.png', NULL, NULL);

INSERT INTO `about_seconds` (`id`, `title`, `sub_text`, `button_text`, `link_url`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About Peernetics', 'Together, we can unlock the power of\n                cryptocurrency and transform your\n                business', 'Learn More', 'http://company-web.test/cryptocurrency-payment-gateway', 'Founded by a team of passionate\n                professionals, we seek to make it as\n                easy as possible for all businesses to\n                step into the world of cryptocurrency.\n                We break down barriers to entry by\n                taking ground-breaking and confusing\n                technology and transforming it into an\n                uncomplicated and user-friendly\n                cryptocurrency payment gateway.', 'images/about/about-right-bnr_0.png', NULL, NULL);

INSERT INTO `allocations` (`id`, `allocation`, `perentage`, `token_amount`, `vesting_period`, `created_at`, `updated_at`) VALUES
(1, 'Public Ico Sale', 10, 100000000, 'TGE 15%, 3 months lock, then 5% each month (20 months in total)', NULL, NULL),
(2, 'Team', 10, 100000000, 'TGE 0%, 12 months lock, then 25% every 3 months (22 months in total)', NULL, NULL),
(3, 'Marketing', 6, 600000000, 'TGE 0%, 3 months lock, then 20% every 3 months (16 months in total)', NULL, NULL),
(4, 'Research & Development', 4, 400000000, 'TGE 0%, 3 months lock, then 20% every 3 months (16 months in total)', NULL, NULL),
(5, 'Public Sale', 70, 7000000000, 'Not Applicable', NULL, NULL);

INSERT INTO `banners` (`id`, `title`, `middle_text`, `subtitle`, `loyalty_button_text`, `ico_button_text`, `images`, `created_at`, `updated_at`, `loyalty_button_url`, `ico_button_url`) VALUES
(1, 'Revolutionarys Delivered', 'Crypto', 'Payment Gateway', 'Loyalty Club', 'ICO Sign  Up', '{}', NULL, NULL, 'https://loyaltyclub.peernetics.io/', 'https://peernetics.io/');

INSERT INTO `blogs` (`id`, `title`, `slug`, `featured_image`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Paving the Path to a New Era of Crypto Transactions', 'paving-the-path-to-a-new-era-of-crypto-transactions', 'images/blog/Peernetics ICO Paving the Path to a New Era of Crypto Transactions.png', '<p>Get ready to embark on a journey that will transform the way you think about transactions. We at Peernetics are excited to announce our long-awaited Initial Coin Offering (ICO), a once-in-a-lifetime opportunity that will revolutionise digital payments and shake up the world of cryptocurrencies.<br><br><strong>Embrace the Evolution</strong><br><br>At Peernetics, our mission is clear: to make cryptocurrency transactions accessible, seamless, and truly rewarding. Our platform acts as a bridge, connecting the world of traditional business with the limitless possibilities of the crypto realm. Say goodbye to confusing payment gateways and high fees – Peernetics is dedicated to simplifying the process and delivering an exceptional user experience.<br><br><strong>Unlock the Power of $PNS</strong><br><br>The heart of our ICO beats in the form of our native utility token, $PNS. By participating in the ICO, you\'ll not only secure early access to $PNS tokens at a discounted rate but also gain exclusive access to our Loyalty Program. Holding $PNS opens the door to a realm of exclusive discounts across our network of merchant partners, creating value for both you and the community.<br><br><strong>Shape the Future, One Token at a Time</strong><br><br>Your participation in the Peernetics ICO isn\'t just about tokens – it\'s about contributing to a change in the world of transactions. By investing in our vision, you\'re becoming a part of change, helping to build a future where crypto transactions are not just a possibility, but a reality for everyone. Your support propels us toward our goal of rewriting the rules of digital payments on a global scale.<br><br><strong>Invest with Confidence</strong><br><br>Security and regulatory compliance are paramount to us. With rigorous Know Your Customer (KYC) and Anti-Money Laundering (AML) procedures, we\'ve fortified our platform to provide an environment that\'s secure and transparent. With multi-signature wallets ensuring the utmost protection, you can invest in the Peernetics ICO with absolute confidence.<br><br><strong>Join the Revolution</strong><br><br>Are you ready to follow in the footsteps of Peernetics? Keep checking back for more updates as we get closer to the ICO launch.This is your chance to secure your stake in a future where transactions are not just functional, but an absolute delight. Keep an eye on our official channels for announcements, sneak peeks, and more details about the Peernetics ICO. Together, let\'s pave the way to a new era of digital transactions. Join us and be part of history in the making!</p>', 1, '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(2, 'Peernetics at World Travel Market', 'peernetics-at-world-travel-market', 'images/blog/Peernetics at World Travel Market.png', '<p>The World Travel Market (WTM) served as the perfect stage for Peernetics to shine as a prominent exhibitor in the global travel industry. Our participation in this renowned event was nothing short of a triumph, cementing our position as a trailblazer in the world of cryptocurrency-powered travel transactions.<br>&nbsp;</p><p>At the heart of the bustling WTM, our booth stood as a beacon of innovation and opportunity. With our cryptocurrency payment gateway solution, we showcased how businesses in the travel sector could embrace the future of transactions, making payments seamless, secure, and efficient. The response from industry professionals, travel enthusiasts, and fellow exhibitors was overwhelmingly positive.<br>&nbsp;</p><p>The event allowed us to connect with like-minded businesses, share insights, and forge valuable partnerships. Our team engaged in meaningful discussions about the transformative potential of cryptocurrencies in the travel domain. Through interactive presentations and demonstrations, we highlighted the ease of accepting and managing crypto payments, and the benefits it brings to both businesses and travellers.<br>&nbsp;</p><p>One of the highlights of our participation was witnessing the genuine interest and curiosity our booth garnered. Attendees were keen to understand how Peernetics\' technology could revolutionise the travel experience by eliminating traditional payment barriers and complexities.<br>&nbsp;</p><p>Our successful presence at WTM also emphasised our commitment to fostering innovation and growth. We had the privilege to exchange ideas with thought leaders, learn from industry trends, and gain fresh perspectives on the evolving landscape of travel and finance. It was truly an immersive experience that reinforced our belief in the power of cryptocurrencies to reshape traditional industries.<br>&nbsp;</p><p>As we reflect on our participation in WTM, we are filled with gratitude for the opportunity to showcase Peernetics\' vision and solutions on such a prestigious platform. The success we achieved and the connections we made have fuelled our determination to continue driving positive change in the travel sector. Our journey doesn\'t end here; instead, it propels us forward with renewed enthusiasm to redefine the way the world travels.<br>&nbsp;</p>', 1, '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(3, 'Revolutionising Digital Transactions', 'revolutionising-digital-transactions', 'images/blog/Peernetics ICO Paving the Path to a New Era of Crypto Transactions.png', '<p>Welcome to the world of Peernetics, where digital transactions are about to undergo a remarkable transformation. In a rapidly evolving landscape, Peernetics emerges as the answer to the challenges faced by businesses and consumers in the realm of digital payments.<br><br><strong>Simplifying Complexity: A Crypto Payment Gateway for All</strong><br><br>The problem with traditional payment gateways is that they often have high fees, which makes them difficult for both businesses and consumers to use.&nbsp;Enter Peernetics—a user-friendly crypto payment gateway that empowers businesses to effortlessly embrace cryptocurrency transactions. With a simple interface and minimal fees, Peernetics seamlessly bridges the gap between the crypto world and conventional business practices.<br><br><strong>Unifying Loyalty: Rewards Made Simple</strong><br><br>There are many different rewards programs out there, and navigating them can be confusing for both consumers and businesses. At Peernetics, we\'ve reimagined rewards with our Unified Loyalty Program. Holding our native utility token, $PNS, unlocks an array of exclusive discounts across our network of merchant partners. This unified approach transforms loyalty into a win-win, enhancing engagement and boosting revenue.<br><br><strong>Expanding Horizons: Embracing the Mainstream</strong><br><br>Cryptocurrencies have been slow to make their way into mainstream markets due to a lack of mainstream acceptance. Peernetics\' Merchant Program changes that, enabling businesses to offer exclusive crypto discounts. This isn\'t just about attracting a new customer base—it\'s about expanding possibilities and driving revenue growth. Our Marketing Services further amplify exposure, reaching crypto enthusiasts and propelling brand awareness.<br><br><strong>Join the Movement: Be a Part of Peernetics</strong><br><br>Peernetics isn\'t just a platform; it\'s a movement toward a more accessible, rewarding, and innovative future of transactions. We invite you to embark on this transformative journey with us. Embrace the Peernetics experience and become a core part of the evolution of digital transactions in the cryptocurrency world.<br><br><strong>Your Journey Begins Here</strong><br><br>As we pave the way for a seamless and rewarding future of digital transactions, we invite you to dive into the Peernetics journey. Explore our website to discover how we\'re reshaping the crypto landscape, empowering both businesses and consumers. Join our dynamic community on Discord and Telegram to connect with like-minded individuals and stay updated on our latest updates. The era of crypto-powered transactions starts here, and we\'re thrilled to have you join us!</p>', 1, '2024-10-10 09:43:23', '2024-10-10 09:43:23');

INSERT INTO `brands` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Brand Promotion', 'One of the major selling points of Peernetics is the amazing brand partnerships we secure. Honestly, we’ll never stop shouting about it. So, that means you’ll get a ton of free marketing and the opportunity to showcase your brand to an engaged and highly active community.', 'images/merchant/brand-promotion.png', NULL, NULL);

INSERT INTO `collaboratives` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Collaborative Growth', 'When you join the Merchant Program, you’ll instantly be seen as a partner. Our working relationship is mutually beneficial, and our mission is to help you succeed. As your brand awareness increases, so does ours. This is a crypto-for-businesses ecosystem where we all succeed.', 'images/merchant/collaborative-growth.png', NULL, NULL);

INSERT INTO `crypto_benefits` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'User-friendly interfaces', 'User-friendly interfaces', NULL, NULL),
(2, 'Accept over 100 digital currencies', 'Accept over 100 digital currencies', NULL, NULL),
(3, '0.5% - 1% transaction fee', '0.5% - 1% transaction fee', NULL, NULL),
(4, 'Integrates with your other systems', 'Integrates with your other systems', NULL, NULL),
(5, 'Accept global payments', 'Accept global payments', NULL, NULL),
(6, 'Secure Fraud Prevention Features', 'Secure Fraud Prevention Features', NULL, NULL);

INSERT INTO `crypto_images` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'computer', 'images/crypto/computer.png', NULL, NULL);

INSERT INTO `crypto_items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Instant exchange of cryptocurrency and fiat', 'Get paid in the currency of your choice and let customers pay their way. Whether you\'re a fiat-only business but want to enable customers to pay in crypto, or you\'re a crypto-only business and want to attract users, Peernetics gives you the option of both.', NULL, NULL),
(2, 'Ultra-low transaction fees and no chargebacks', 'Tired of high card transaction fees and chargebacks? Peernetics commission is only 0.5-1% and is one of the lowest in the industry. What\'s more, you never have to worry about chargebacks.\n                ', NULL, NULL),
(3, 'Accept global payments in over 100 cryptocurrencies', 'Get paid from anywhere in the world in over 100 of the most popular cryptocurrencies. You can even instantly convert them to another currency or fiat.', NULL, NULL),
(4, 'Convenient interfaces and 24/7 support', 'Peernetics is the cryptocurrency gateway for everyone. With a user-friendly interface and 24/7 customer support, we ensure that your transition to accepting payments in cryptocurrency will be smooth and fast.', NULL, NULL);

INSERT INTO `cryptocurrencies` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Cryptocurrency Payment Gateway', 'Discover a fast-growing new source of income for your business. Implement the best cryptocurrency payment gateway to enable your business to accept, exchange, withdraw, send, store and receive crypto payments.', NULL, NULL);

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"Modules\\\\Admin\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"Modules\\\\Admin\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9);

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'Modules\\Admin\\Models\\User', 'Modules\\Admin\\Policies\\UserPolicy', 'Modules\\Admin\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'Modules\\Admin\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'Modules\\Admin\\Models\\Role', NULL, 'Modules\\Admin\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2024-10-10 09:43:23', '2024-10-10 09:43:23');

INSERT INTO `exceptionals` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'With exceptionally low fees and impressively user-friendly interfaces Peernetics makes it easy for any business to get started with crypto.', 'With exceptionally low fees and impressively user-friendly interfaces Peernetics makes it easy for any business to get started with crypto.', NULL, NULL);

INSERT INTO `exchanges` (`id`, `title`, `button_text`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Exchange', 'Buy on QuickSwap', 'http://company-web.test/cryptocurrency-payment-gateway', 'images/pns/quickswap.png', NULL, NULL);

INSERT INTO `exclusives` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Exclusive Rewards for Holders', '<p>Want to get exclusive rewards and offers at some of the best hospitality\n                establishments, restaurants, retailers and more? Anyone holding 200 PNS\n                or more will be automatically entered into our rewards program, and you\n                can start claiming rewards in-store and online.</p>\n            <a href=\"loyalty-program\" class=\"primary-btn plr\">The Loyalty\n                Program</a>', NULL, NULL);

INSERT INTO `extensives` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Extensive Marketing Efforts You’ll Benefit From', 'Our marketing strategy encompasses promoting all of our brand partners. As part of that process, your brand will be integrated into our marketing communications, including:', NULL, NULL);

INSERT INTO `featureds` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'blomberg', 'images/featured/bloombergnn.png', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(2, 'crypto', 'images/featured/cryptonn.png', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(3, 'marketWatch', 'images/featured/marketwatchnn.png', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(4, 'benzinga', 'images/featured/benzingnn.png', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(5, 'Digital Journal', 'images/featured/dgn.png', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(6, 'MorningStar', 'images/featured/morningstarnn.png', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(7, 'Yahoo Finance', 'images/featured/yahoo-financen.png', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(8, 'Street Insider', 'images/featured/sinn.png', '2024-10-10 09:43:23', '2024-10-10 09:43:23');

INSERT INTO `home_sectioniiis` (`id`, `texti`, `textii`, `textiii`, `textiv`, `textv`, `textvi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Accept Crypto', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(2, 'Safe', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(3, 'and', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(4, 'Securely', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(5, 'with', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(6, 'Peernetics', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(7, 'sites/default/files/2023-09/peernetics-dashnoard.png', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL);

INSERT INTO `home_sectioniis` (`id`, `title`, `description`, `is_header`, `created_at`, `updated_at`) VALUES
(1, 'Peernetics', 'First header', '1', NULL, NULL),
(2, 'Loyalty Club', 'Second header', '1', NULL, NULL),
(3, 'Why join?', '100% of the discount secured goes to you. We don\'t keep anything', '0', NULL, NULL),
(4, 'Benefit', 'No need to wait for cashback. Instant discounts with brands online and offline', '0', NULL, NULL),
(5, 'How to join?', 'Hold 200 PNS tokens, connect your wallet. visit Getting started', '0', NULL, NULL);

INSERT INTO `home_sectionivs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Seamless Integrations', 'Swiftly integrate Peernetics with other platforms you use.', NULL, NULL),
(2, 'User-Friendly Interface', 'A system built for everyone to easily use. Even\n                beginners.', NULL, NULL),
(3, 'Global Crypto Payments', 'Instantly accept payments from people around the world.', NULL, NULL),
(4, '100+ Digital Currencies', 'Accept payments in all of the most popular\n                cryptocurrencies.', NULL, NULL),
(5, 'Fraud Prevention Features', 'Crypto payments are irreversible, so there are no\n                chargebacks.', NULL, NULL),
(6, 'Ultra Low Fees', 'Fees ranging from 0.5% - 1% on all transactions.', NULL, NULL);

INSERT INTO `home_sectionvs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Low Fees for Crypto Payments', 'There are no high fees with Peernetics. Accept Bitcoin, Ethereum, Peernetics token and hundreds of other cryptocurrencies with just 0.5 - 1% fees.\r\n               \r\n                <a href=\'/cryptocurrency-payment-gateway\'>Learn More </a>', NULL, '2024-11-11 22:42:47'),
(2, 'A Utility Token That Rewards Crypto Payments', 'PNS is the token that powers the Peernetics platform, and\r\n                    you’ll be rewarded in many ways for using it.\r\n                <ul>\r\n                    <li>0.5% transaction fee for accepting PNS as a means of\r\n                        payment.</li>\r\n                    <li>Unique discounts, benefits and offers with merchant\r\n                        partners when you hold a minimum of 200 PNS.</li>\r\n                </ul>\r\n               \r\n                <a href=\'/pns-token\'>Learn More ></a>', NULL, '2024-11-11 23:54:29'),
(3, 'Your Loyalty is Always Rewarded', 'Hold a minimum of 200 PNS, and you’ll be automatically\r\n                    entered into the Peernetics loyalty program, where\r\n                    you’ll receive.\r\n                <ul>\r\n                    <li>Instant discounts – no waiting for cashback</li>\r\n                    <li>Get 100% of the discount agreed with the merchant\r\n                        partner – we don’t keep anything</li>\r\n                    <li>Discounts at restaurants, coffee shops, retailers\r\n                        and more</li>\r\n                </ul>\r\n              \r\n                <a href=\'/loyalty-program\'>Learn More ></a>', NULL, '2024-11-11 23:57:04'),
(4, 'Become A Merchant Partner', 'Our free-to-join merchant partner network empowers you to\r\n                    promote exclusive offers, generate brand exposure\r\n                    amongst the community, drive traffic to your company and\r\n                    increase revenue.\r\n               \r\n                <a href=\'/merchant-program\'>Learn More ></a>', NULL, '2024-11-11 23:53:46'),
(5, 'Merchant Marketing Service', 'Choose from our cost-effective marketing service will\r\n                    promote your business within our community and beyond,\r\n                    enabling you to attract more customers and grow your\r\n                    influence\r\n            \r\n                <a href=\'/merchant-marketing-service\'>Learn More ></a>', NULL, '2024-11-11 23:49:44'),
(6, 'About', '<p>Peernetics is on a mission to revolutionise the way\r\n                    businesses and consumers transact. Through a\r\n                    user-friendly crypto payment gateway, we empower\r\n                    consumers to pay in the currencies they\r\n                    hold while giving businesses the opportunity to dive\r\n                    into the crypto world without the stress.</p>\r\n              <p>  &nbsp;</p>\r\n                <p>Join us on our journey of transforming the world and\r\n                    making it easy for businesses and consumers to embrace\r\n                    crypto.</p>\r\n            \r\n                <a href=\'/about\'>About Us ></a>', NULL, '2024-11-12 00:00:34'),
(7, '24/7 Support To Power Your Growth', 'Our team of experts will always be on hand to ensure\r\n                    you’re getting the most from Peernetics. The success of\r\n                    our crypto payment gateway relies on you reaping rewards\r\n                    from it, so we’ll\r\n                    do everything we can to ensure you get the results you\r\n                    desire.\r\n              \r\n                <a href=\'/contact-us\'>Learn More ></a>', NULL, '2024-11-11 23:56:07'),
(8, 'Accepting Crypto Payments', 'The Peernetics crypto payment gateway will exponentially\r\n                    accelerate the next phase of your business’s growth.\r\n                \r\n                <a href=\'/cryptocurrency-payment-gateway\'>Learn More </a>', NULL, '2024-11-11 23:53:16');

INSERT INTO `loyalty_items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Get Discounts At Your Favourite Places', 'PNS is a crypto with utility. Peernetics loyalty members receive excellent discounts at participating restaurants, coffee shops, retailers and many more. So, whether you’re headed out to dinner, grabbing a drink or buying a new gadget, you’ll be able to show your wallet balance and claim your offers.', NULL, NULL),
(2, 'Discounts Applied Instantly', 'Some people do cashback. But we don’t like to waste time. Every Peernetics reward discount is applied instantly, meaning you’ll pay less for the things you buy without having to wait for cashback to be reimbursed.', NULL, NULL),
(3, 'The Discounts Are All Yours', 'Peernetics loyalty members receive 100% of the discount agreed with partner retailers. We don’t keep any for ourselves because the aim of our program is to ensure the Peernetics community gets the best prices on products, services and experiences.', NULL, NULL),
(4, 'How To Sign Up For The Loyalty Program', 'There’s no need to sign up. When your digital wallet reaches a balance of 200 PNS, you’ll automatically qualify. We’re not here to harvest your data by making you sign up. All you have to do is show your wallet balance to participating partners to receive your discounts.', NULL, NULL);

INSERT INTO `loyalty_programs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Loyalty Program', 'At Peernetics, we reward our token holders. Hold just 200 PNS, and you will automatically be entered to receive exclusive benefits with our merchant partners.', 'images/loyalty/token-bnr.png', NULL, NULL);

INSERT INTO `masses` (`id`, `title`, `button_text`, `link`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'The Mass-Adoption Mission', 'About Us', 'about', 'At Peernetics, we’re on a mission to make cryptocurrency adoption as easy as possible for businesses and consumers. We believe in breaking down barriers, so we’ve introduced low fees, simple user interfaces and on-hand support. Everyone deserves the right to accept payments in crypto, and we’re making it possible.', 'sites/default/files/2023-07/mass-adoption.png', NULL, NULL);

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2024-10-10 09:43:23', '2024-10-10 09:43:23', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2024-10-10 09:43:23', '2024-10-10 09:43:23', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2024-10-10 09:43:23', '2024-10-10 09:43:23', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2024-10-10 09:43:23', '2024-10-10 09:43:23', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2024-10-10 09:43:23', '2024-10-10 09:43:23', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2024-10-10 09:43:23', '2024-10-10 09:43:23', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2024-10-10 09:43:23', '2024-10-10 09:43:23', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2024-10-10 09:43:23', '2024-10-10 09:43:23', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2024-10-10 09:43:23', '2024-10-10 09:43:23', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2024-10-10 09:43:23', '2024-10-10 09:43:23', 'voyager.settings.index', NULL),
(11, 1, 'Contact', 'http://company-web.test/admin/contacts', '_self', 'voyager-people', NULL, NULL, 16, '2024-10-10 09:43:23', '2024-10-10 09:43:23', NULL, NULL),
(12, 1, 'Site Builder', 'http://company-web.test/admin/pages', '_self', 'voyager-news', NULL, NULL, 17, '2024-10-10 09:43:23', '2024-10-10 09:43:23', NULL, NULL);

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-10-10 09:43:23', '2024-10-10 09:43:23');

INSERT INTO `merchant_items` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Influencer marketing', 'images/merchant/influencermarketing.svg', NULL, NULL),
(2, 'Quarterly press releases', 'images/merchant/quarterlypressreleases.svg', NULL, NULL),
(3, 'Social media content', 'images/merchant/social-mediacontent.svg', NULL, NULL),
(4, 'Website features', 'images/merchant/website-features.svg', NULL, NULL),
(5, 'Ongoing search engine optimisation', 'images/merchant/ongoing-search-engine-optimisation.svg', NULL, NULL);

INSERT INTO `merchant_merits` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Global and local outreach programs', '<p>Choose your target market and we will find it. Whether you\'re a local\n                or international business, we\'ll refine your marketing campaign to\n                reach the people most likely to buy from you.</p>\n            ', NULL, NULL),
(2, 'Exceptional organic growth', '<p>As our influence grows, so will yours. The Peernetics team is\n                committed to implementing an effective crypto marketing strategy\n                that will allow us to significantly increase website and social\n                media engagement. When you sign up for our marketing services, we\n                will take you with us, prioritizing both our growth and yours.</p>', NULL, NULL);

INSERT INTO `merchant_programs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Merchant Program', 'The Peernetics Merchant Program opens the door to crypto and helps your business thrive.\n\n                Offer exclusive discounts to Peernetics holders, attract more customers to your products and services and \n                generate more revenue.', 'images/merchant/collab.png', NULL, NULL);

INSERT INTO `merchant_sections` (`id`, `title`, `description`, `button_text`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Become a Merchant Partner Today', 'Sign up to Peernetics and exponentially accelerate the next phase of your\n                business’s growth.', 'Merchant Partner Program', 'http://company-web.test/merchant-program', NULL, NULL);

INSERT INTO `merchant_services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Merchant Marketing Service', 'Reduce marketing costs, target consumers who are actively involved in cryptocurrencies, and increase brand awareness. Our crypto marketing services are designed to help you successfully implement crypto and inform potential customers about your visionary brand.', 'images/merchant/spaceship.png', NULL, NULL);

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2024_05_09_072909_create_site_pages_table', 1),
(30, '2024_05_09_161453_create_sections_table', 1),
(31, '2024_05_16_085148_create_banners_table', 1),
(32, '2024_05_17_070940_create_home_sectioniis_table', 1),
(33, '2024_05_19_183713_create_home_sectioniiis_table', 1),
(34, '2024_05_20_034606_create_home_sectionivs_table', 1),
(35, '2024_05_20_185933_create_home_sectionvs_table', 1),
(36, '2024_05_23_055702_create_blogs_table', 1),
(37, '2024_05_24_193358_create_featureds_table', 1),
(38, '2024_05_25_180400_create_questions_table', 1),
(39, '2024_05_26_072132_create_question_items_table', 1),
(40, '2024_05_27_032514_create_about_headers_table', 1),
(41, '2024_05_27_133036_create_about_seconds_table', 1),
(42, '2024_05_27_202022_create_team_headers_table', 1),
(43, '2024_05_28_033338_create_teams_table', 1),
(44, '2024_05_28_034131_create_merchant_sections_table', 1),
(45, '2024_05_28_155033_create_road_maps_table', 1),
(46, '2024_05_29_031929_create_partners_table', 1),
(47, '2024_05_29_053724_create_merchant_services_table', 1),
(48, '2024_05_30_054136_create_target_markets_table', 1),
(49, '2024_05_30_062519_create_merchant_merits_table', 1),
(50, '2024_06_01_022351_create_promotes_table', 1),
(51, '2024_06_01_050612_create_pns_utilities_table', 1),
(52, '2024_06_01_060147_create_pns_items_table', 1),
(53, '2024_06_01_082103_create_exclusives_table', 1),
(54, '2024_06_02_184621_create_exchanges_table', 1),
(55, '2024_06_02_193132_create_wallets_table', 1),
(56, '2024_06_03_010307_create_allocations_table', 1),
(57, '2024_06_03_192104_create_loyalty_programs_table', 1),
(58, '2024_06_04_105916_create_loyalty_items_table', 1),
(59, '2024_06_04_113706_create_offers_table', 1),
(60, '2024_06_04_192118_create_merchant_programs_table', 1),
(61, '2024_06_04_203926_create_brands_table', 1),
(62, '2024_06_04_210635_create_collaboratives_table', 1),
(63, '2024_06_05_035804_create_extensives_table', 1),
(64, '2024_06_05_051007_create_merchant_items_table', 1),
(65, '2024_06_05_120216_create_page_contents_table', 1),
(66, '2024_06_05_185945_create_togethers_table', 1),
(67, '2024_06_06_021836_create_masses_table', 1),
(68, '2024_06_06_084151_create_cryptocurrencies_table', 1),
(69, '2024_06_06_100040_create_crypto_images_table', 1),
(70, '2024_06_06_125319_create_crypto_benefits_table', 1),
(71, '2024_06_07_113259_create_exceptionals_table', 1),
(72, '2024_06_07_121149_create_crypto_items_table', 1),
(73, '2024_06_07_142229_create_promote_bussinesses_table', 1),
(74, '2024_06_07_161054_create_contacts_table', 1),
(75, '2024_06_19_122427_create_jobs_table', 1),
(76, '2024_07_04_100652_faq_banner_image', 1),
(77, '2024_07_09_084735_faq', 1),
(78, '2024_10_10_093925_create_sessions_table', 1),
(79, '2024_10_22_095616_add_url_ico_and_loyalty_button', 2),
(80, '2024_10_22_104003_create_pns_token_table', 3);

INSERT INTO `offers` (`id`, `title`, `button_text`, `link`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Give Your Customers Exclusive Offers', 'Learn More', 'merchant-program', 'images/loyalty/exchange.png', 'Join the Peernetics partner network and benefit from high-profile promotion. We’ll put your brand in front of the Peernetics community, enable you to send special discounts, and help you generate more revenue.\n                ', NULL, NULL);

INSERT INTO `page_contents` (`id`, `page_id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 'section_one_title', 'About Peernetics', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(2, 2, 'section_one_description', 'Peernetics exists to enable the mass adoption\n                of cryptocurrency payments. Through\n                optimised cryptocurrency payment solutions,\n                Peernetics empowers businesses to accept,\n                exchange, withdraw, send, store and receive\n                cryptocurrencies.', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(3, 2, 'section_one_image', 'images/about/about-left-bnr.png', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(4, 2, 'section_two_title', 'About Peernetics', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(5, 2, 'section_two_description', 'Founded by a team of passionate\n                professionals, we seek to make it as\n                easy as possible for all businesses to\n                step into the world of cryptocurrency.\n                We break down barriers to entry by\n                taking ground-breaking and confusing\n                technology and transforming it into an\n                uncomplicated and user-friendly\n                cryptocurrency payment gateway.', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(6, 2, 'section_two_sub_text', 'Together, we can unlock the power of\n                cryptocurrency and transform your\n                business', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(7, 2, 'section_two_link_url', 'cryptocurrency-payment-gateway.html', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(8, 2, 'section_two_image', 'images/about/about-right-bnr_0.png', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(9, 2, 'section_two_button_text', 'Learn More', '2024-10-10 09:43:23', '2024-10-10 09:43:23');

INSERT INTO `partners` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'polygon', 'images/partner/polygon.png', NULL, NULL),
(2, 'Aws Logo', 'images/partner/aws.png', NULL, NULL),
(3, 'safe', 'images/partner/safe.png', NULL, NULL),
(4, 'solid', 'images/partner/solid.png', NULL, NULL),
(5, 'Mis', 'images/partner/mis.png', NULL, NULL);

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1);

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(2, 'browse_bread', NULL, '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(3, 'browse_database', NULL, '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(4, 'browse_media', NULL, '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(5, 'browse_compass', NULL, '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(6, 'browse_menus', 'menus', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(7, 'read_menus', 'menus', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(8, 'edit_menus', 'menus', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(9, 'add_menus', 'menus', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(10, 'delete_menus', 'menus', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(11, 'browse_roles', 'roles', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(12, 'read_roles', 'roles', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(13, 'edit_roles', 'roles', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(14, 'add_roles', 'roles', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(15, 'delete_roles', 'roles', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(16, 'browse_users', 'users', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(17, 'read_users', 'users', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(18, 'edit_users', 'users', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(19, 'add_users', 'users', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(20, 'delete_users', 'users', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(21, 'browse_settings', 'settings', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(22, 'read_settings', 'settings', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(23, 'edit_settings', 'settings', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(24, 'add_settings', 'settings', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(25, 'delete_settings', 'settings', '2024-10-10 09:43:23', '2024-10-10 09:43:23');

INSERT INTO `pns_items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Benefit For Using PNS', 'Peernetics fees are already incredibly low at just 1%. However, for any merchants who decide to accept transactions in PNS, you’ll be charged 0.5% transaction fee. As thanks for facilitating the growth of the Peernertics ecosystem and for encouraging others to use PNS, we aim to make it as easy and cheap as possible to use.', NULL, NULL),
(2, 'An Investment Opportunity', 'Our mission is to become the most trusted and widely-used cryptocurrency payment platform. As the popularity and number of users grow, so will the value of PNS. Therefore, anyone who buys and holds the PNS utility token will see their portfolio value increase over time.', NULL, NULL);

INSERT INTO `pns_token` (`id`, `ico_button_text`, `ico_button_url`, `white_paper_button_text`, `white_paper`, `created_at`, `updated_at`) VALUES
(1, 'BUY PNS', 'https://peernetics.io', 'Whitepaper', 'white_papers/CtyCh1VTdM4r5NYOnakgKvx0jM2FEFiT4Jz1uOHJ.pdf', '2024-10-22 10:51:44', '2024-10-22 13:12:56');

INSERT INTO `pns_utilities` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PNS – The Peernetics Utility Token', 'The Peernetics token is built on the Polygon Blockchain utilising Polygons PoS (Proof of Stake). This enables 65,000 transactions per second, which is one of the most secure and scalable network. PNS is the utility token that powers Peernetics reward system. Businesses, consumers, and investors are rewarded with exclusive and lucrative benefits. Peernetics cryptocurrency payment solutions facilitate transactions on your favourite cryptocurrencies, but utilising PNS is rewarded.\n                ', 'images/pns/pns.png', NULL, NULL);

INSERT INTO `promote_bussinesses` (`id`, `title`, `button_text`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Promote your business with Peernetics', 'Learn More', 'merchant-marketing-service', '\n                Increase brand awareness and attract more customers to your business. Peernetics Marketing Service showcases your products and services to active and interested cryptocurrency buyers, allowing you to increase the new revenue stream you have established.\n                ', NULL, NULL);

INSERT INTO `promotes` (`id`, `title`, `button_text`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Promote exclusive offers for Peernetics loyalty program members', 'Learn More', 'merchant-program', '\n                Join the Peernetics Merchant Program and offer exclusive discounts to\n                                                Peernetics members. Our mission is to ensure that our community members\n                                                and business partners support and interact with each other. Become a\n                                                partner and start expanding your presence today.\n                ', NULL, NULL);

INSERT INTO `question_items` (`id`, `title`, `description`, `link_text`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'For existing clients', '<p>If you already have an account please sign in and use our ticket system</p>', 'Get 24/7 Support', 'login', 'images/existing-client-icon.svg', NULL, NULL),
(2, 'For new clients', '<p>Please leave your enquiry and our Business Development\n                team will contact you shortly</p>', 'Contact BD team', 'http://company-web.test/contact-us', 'images/new-client-icon.svg', NULL, NULL);

INSERT INTO `questions` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Have a <span data-animated=\"fadeInUp\">question?</span></p>', '<p class=\'font18\'>Have a question? Head over to our FAQ\n                or<br>reach out to us via our ticket system or<br>contact form.\n                We\'re here to help!\n            </p>', NULL, NULL);

INSERT INTO `road_maps` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Q4 2022 & Q2 2023', '\n                <li>Website VI</li>\n                <li>Whitepaper V1 release</li>\n                <li>World Travel Market</li>\n                <li>Smart Contract Development</li>\n                <li>Design Web3 Merchant Portal</li>', NULL, NULL),
(2, 'Q3 2023', '\n                <li>Website V2</li>\n                <li>Development of Web3 Merchant Portal</li>\n                <li>Design Payment Gateway</li>\n                <li>Smart Contract Deployment</li>\n                <li>SolidProof Audit</li>\n                <li>PR Release</li>', NULL, NULL),
(3, 'Q4 2023', '\n                <li>ICO launch</li>\n                <li>Whitepaper V2</li>\n                <li>Onboarding Partners</li>\n                <li>Testing Merchant Portal</li>', NULL, NULL),
(4, 'Q1 2024', '\n                <li>Public Sale</li>\n                <li>CoinMarketCap &amp; CoinGecko Listing</li>\n                <li>Onboarding Merchant Partners</li>\n                <li>Merchant Marketing Services</li>\n                <li>Development of Payment Gateway</li>\n                <li>Team expansion</li>\n                <li>Onboarding NFT and Metaverse Projects</li>', NULL, NULL),
(5, 'Q2 2024 - Future', '\n                <li>Testing Payment Gateway</li>\n                <li>VC Funding</li>\n                <li>Exchange Development</li>\n                <li>Android/IOS App launch</li>\n                <li>Card Payment Integration</li>\n                <li>Regulations</li>', NULL, NULL);

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(2, 'company', 'voyager::seeders.roles.company', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(3, 'storeadmin', 'voyager::seeders.roles.store', '2024-10-10 09:43:23', '2024-10-10 09:43:23'),
(4, 'user', 'Normal User', '2024-10-10 09:43:23', '2024-10-10 09:43:23');

INSERT INTO `sections` (`id`, `name`, `page_id`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Banner', 1, 1, NULL, NULL),
(2, 'Section 2', 1, 2, NULL, NULL),
(3, 'Section 3', 1, 3, NULL, NULL),
(4, 'Section 4', 1, 4, NULL, NULL),
(5, 'Section 5', 1, 5, NULL, NULL),
(6, 'Blogs', 1, 6, NULL, NULL),
(7, 'Featured On', 1, 7, NULL, NULL),
(8, 'Section 8', 1, 8, NULL, NULL);

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('c2byj3CrjFp4T9pjEXfjAVkBFWvyhlKfZjNRglVA', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYmNJdlBMaGNuOEhVaE5RQ3FPRmxLcWdvUGlYaVE4VzM2S2lEd0gwaCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vY29tcGFueS13ZWIudGVzdC9hZG1pbi9iYW5uZXIvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1731406621);

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

INSERT INTO `site_pages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, NULL),
(2, 'About', NULL, NULL),
(3, 'Road Maps', NULL, NULL),
(4, 'Partners', NULL, NULL),
(5, 'Merchants', NULL, NULL),
(6, 'Payment Gateway', NULL, NULL),
(7, 'Pns Token', NULL, NULL),
(8, 'Loyalty Program', NULL, NULL),
(9, 'Merchant Program', NULL, NULL),
(10, 'Faqs', NULL, NULL);

INSERT INTO `target_markets` (`id`, `title`, `button_text`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Targeted Marketing', 'Sign Up Now', 'login', '\n                Marketing budgets are the biggest expense in a business\'s finances.\n                                                Choose<strong> </strong>from our range of cost-effective\n                                                    marketing packages,<strong> </strong>we will place your\n                                                brand&nbsp; to the ideal target audience. Just sign up, upload your\n                                                marketing materials and we\'ll do the rest.\n                ', NULL, NULL);

INSERT INTO `team_headers` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'The Peernetics Team', 'Meet the team behind the cryptocurrency payment gateway that will skyrocket the growth of your business.', NULL, NULL);

INSERT INTO `teams` (`id`, `name`, `job_desc`, `link`, `image`, `socials`, `created_at`, `updated_at`) VALUES
(1, 'Nazir Miah', 'Founder & CEO', 'https://www.linkedin.com/in/nazir-miah-007858a8/', 'images/about/nazir.png', 'images/about/team/linkin.png', NULL, NULL),
(2, 'Jallal Uddin', 'Founder & BDM', 'https://www.linkedin.com/in/jay-peernetics-110856274/', 'images/about/jallai.png', 'images/about/team/linkin.png', NULL, NULL),
(3, 'Kamile Macijauskaite', 'Marketing Manager', 'https://www.linkedin.com/in/kim-peernetics-35267a273/', 'images/about/kamile.png', 'images/about/team/linkin.png', NULL, NULL),
(4, 'Shamim Miah', 'Community Manager', 'https://www.linkedin.com/in/shamim-miah-49bbaa1a2/', 'images/about/shamim.png', 'images/about/team/linkin.png', NULL, NULL),
(5, 'Ejeh Michael Marvelous', 'Developer Relations', 'https://www.linkedin.com/in/ejeh-micheal-marvelous-6735711b6/', 'images/about/ejeh.png', 'images/about/team/linkin.png', NULL, NULL);

INSERT INTO `togethers` (`id`, `title`, `button_text`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Partner', 'Become A Partner', 'login', 'Together, we’ll generate more brand exposure, increase the number of active token holders and drive growth', NULL, NULL);

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$12$59b.oP3axI8OJtvD.iHYFeTNYroKnbCyBSfR8nWkjP2O41Fo8sDOa', 'acvzdB4Suv3aCY3CVcFZ7d7QyhlDroCk6c69ErukBtWz9vHbP0Ld1D3bIZKr', NULL, '2024-10-10 09:43:23', '2024-10-10 09:43:23');

INSERT INTO `wallets` (`id`, `title`, `button_text`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'BROWSERS/WALLETS', 'Connect to MetaMask', 'http://company-web.test/cryptocurrency-payment-gateway', 'images/pns/metamask.png', NULL, NULL),
(2, 'BROWSERS/WALLETS', 'Connect to TrustWallet', 'http://company-web.test/cryptocurrency-payment-gateway', 'images/pns/trustwallet.png', NULL, NULL),
(3, 'BROWSERS/WALLETS', 'Connect too WalletConnect', 'http://company-web.test/cryptocurrency-payment-gateway', 'images/pns/walletconnect.png', NULL, NULL);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;