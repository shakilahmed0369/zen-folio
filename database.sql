-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table zen_folio.abouts
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table zen_folio.abouts: ~0 rows (approximately)
DELETE FROM `abouts`;
INSERT INTO `abouts` (`id`, `image`, `about`, `created_at`, `updated_at`) VALUES
	(1, 'uploads/65237c1b68087.jpg', 'I am a web developer with a vast array of knowledge in many different \r\nfront end and back end languages, responsive frameworks, databases, and \r\nbest code practices. My objective is simply to be the best web developer\r\n that I can be and to contribute to the technology industry all that I \r\nknow and can do. I am dedicated to perfecting my craft by learning from \r\nmore seasoned developers, remaining humble, and continuously making \r\nstrides to learn all that I can about development.', '2023-10-09 11:05:47', '2023-10-09 11:05:47');

-- Dumping structure for table zen_folio.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Dumping data for table zen_folio.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table zen_folio.hero_sections
DROP TABLE IF EXISTS `hero_sections`;
CREATE TABLE IF NOT EXISTS `hero_sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table zen_folio.hero_sections: ~0 rows (approximately)
DELETE FROM `hero_sections`;
INSERT INTO `hero_sections` (`id`, `title`, `name`, `stack`, `tags`, `created_at`, `updated_at`) VALUES
	(1, 'Hello! I am', 'Shakil Ahmed', 'Full Stack Developer', 'Web Developer,Programmer', '2023-10-09 11:04:05', '2023-10-09 11:04:05');

-- Dumping structure for table zen_folio.love_to_dos
DROP TABLE IF EXISTS `love_to_dos`;
CREATE TABLE IF NOT EXISTS `love_to_dos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table zen_folio.love_to_dos: ~0 rows (approximately)
DELETE FROM `love_to_dos`;
INSERT INTO `love_to_dos` (`id`, `image_one`, `title_one`, `image_two`, `title_two`, `image_three`, `title_three`, `image_four`, `title_four`, `created_at`, `updated_at`) VALUES
	(1, 'uploads/652a0e4fc96f4.jpg', 'test one', 'uploads/652a14708c3d7.jpg', 'test two', 'uploads/652a14708ca45.jpg', 'test three', 'uploads/652a14708cf39.jpg', 'test four', '2023-10-14 10:42:52', '2023-10-14 11:09:20');

-- Dumping structure for table zen_folio.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table zen_folio.migrations: ~9 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_10_02_145006_create_hero_sections_table', 1),
	(6, '2023_10_04_135234_create_abouts_table', 1),
	(8, '2023_10_09_041650_create_skills_table', 2),
	(9, '2023_10_14_023012_create_love_to_dos_table', 3),
	(11, '2023_10_18_153401_create_projects_table', 4);

-- Dumping structure for table zen_folio.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table zen_folio.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table zen_folio.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
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

-- Dumping data for table zen_folio.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table zen_folio.projects
DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `git_link` text COLLATE utf8mb4_unicode_ci,
  `live_link` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table zen_folio.projects: ~0 rows (approximately)
DELETE FROM `projects`;

-- Dumping structure for table zen_folio.skills
DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table zen_folio.skills: ~1 rows (approximately)
DELETE FROM `skills`;
INSERT INTO `skills` (`id`, `name`, `percent`, `created_at`, `updated_at`) VALUES
	(2, 'Laravel', '95', '2023-10-11 13:14:14', '2023-10-11 13:14:14'),
	(3, 'Vue', '65', '2023-10-11 13:14:27', '2023-10-11 13:14:27');

-- Dumping structure for table zen_folio.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table zen_folio.users: ~0 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Akihito', 'admin@gmail.com', '2023-10-09 11:01:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WkRg17Huow', '2023-10-09 11:01:59', '2023-10-09 11:01:59');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
