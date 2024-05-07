-- --------------------------------------------------------
-- Hoszt:                        127.0.0.1
-- Szerver verzió:               10.4.32-MariaDB - mariadb.org binary distribution
-- Szerver OS:                   Win64
-- HeidiSQL Verzió:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Adatbázis struktúra mentése a korusapp_monika.
CREATE DATABASE IF NOT EXISTS `korusapp_monika` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `korusapp_monika`;

-- Struktúra mentése tábla korusapp_monika. cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tábla adatainak mentése korusapp_monika.cache: ~0 rows (hozzávetőleg)

-- Struktúra mentése tábla korusapp_monika. cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tábla adatainak mentése korusapp_monika.cache_locks: ~0 rows (hozzávetőleg)

-- Struktúra mentése tábla korusapp_monika. events
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `event_time` datetime NOT NULL,
  `event_venue` varchar(100) DEFAULT NULL,
  `event_address` varchar(100) DEFAULT NULL,
  `sheet_music_id` bigint(20) DEFAULT NULL,
  `additional_info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sheet_music_id` (`sheet_music_id`),
  CONSTRAINT `events_ibfk_1` FOREIGN KEY (`sheet_music_id`) REFERENCES `sheet_music` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tábla adatainak mentése korusapp_monika.events: ~4 rows (hozzávetőleg)
INSERT INTO `events` (`id`, `event_time`, `event_venue`, `event_address`, `sheet_music_id`, `additional_info`, `created_at`, `updated_at`) VALUES
	(18, '2024-06-10 00:00:00', 'Próbaterem', 'Rottenbiller utca 14', 5, NULL, NULL, '2024-05-01 13:01:29'),
	(21, '2024-04-30 00:00:00', 'Próbaterem', 'Rottenbiller utca 14', 1, 'Szépek legyetek!', NULL, '2024-05-01 12:29:37'),
	(24, '2024-05-03 15:30:00', 'Ká', 'Bartók Béla u 1', 3, 'Minden legyen rendben', '2024-04-29 18:41:45', '2024-05-01 12:27:57'),
	(25, '2024-06-12 20:40:00', 'Ká', 'Bartók Béla u 1', 7, 'Talán lesz', '2024-05-01 12:36:56', '2024-05-01 12:36:56');

-- Struktúra mentése tábla korusapp_monika. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tábla adatainak mentése korusapp_monika.failed_jobs: ~0 rows (hozzávetőleg)

-- Struktúra mentése tábla korusapp_monika. jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tábla adatainak mentése korusapp_monika.jobs: ~0 rows (hozzávetőleg)

-- Struktúra mentése tábla korusapp_monika. job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tábla adatainak mentése korusapp_monika.job_batches: ~0 rows (hozzávetőleg)

-- Struktúra mentése tábla korusapp_monika. membership_fees
CREATE TABLE IF NOT EXISTS `membership_fees` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `sum` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `membership_fees_ibfk_1` FOREIGN KEY (`id`) REFERENCES `payments` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tábla adatainak mentése korusapp_monika.membership_fees: ~1 rows (hozzávetőleg)
INSERT INTO `membership_fees` (`id`, `year`, `sum`) VALUES
	(1, '2024', 14000);

-- Struktúra mentése tábla korusapp_monika. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tábla adatainak mentése korusapp_monika.migrations: ~8 rows (hozzávetőleg)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2024_04_19_102727_add_role_to_users_table', 1),
	(5, '2024_04_29_201424_add_additional_info_to_events_table', 2),
	(6, '2024_04_29_202900_add_timestamps_to_events_table', 3),
	(7, '2024_05_03_165413_add_timestamps_to_payments_table', 4),
	(8, '2024_05_04_053826_create_personal_access_tokens_table', 5);

-- Struktúra mentése tábla korusapp_monika. password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tábla adatainak mentése korusapp_monika.password_reset_tokens: ~0 rows (hozzávetőleg)

-- Struktúra mentése tábla korusapp_monika. payments
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `amount_paid` int(20) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `members_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `members_id` (`members_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tábla adatainak mentése korusapp_monika.payments: ~7 rows (hozzávetőleg)
INSERT INTO `payments` (`id`, `amount_paid`, `payment_date`, `members_id`, `created_at`, `updated_at`) VALUES
	(1, 18000, '2024-05-03', 1, NULL, '2024-05-03 16:51:43'),
	(2, 6600, '2024-05-03', 2, NULL, '2024-05-03 18:34:19'),
	(3, 7600, '2024-05-03', 3, NULL, '2024-05-03 17:26:11'),
	(4, 14000, '2024-02-09', 4, NULL, NULL),
	(5, 15000, '2024-02-16', 5, NULL, '2024-05-03 15:46:32'),
	(7, 2000, '2024-05-03', 36, '2024-05-03 16:47:34', '2024-05-03 16:48:10'),
	(8, 4000, '2024-05-05', 37, '2024-05-04 15:21:30', '2024-05-05 13:57:46');

-- Struktúra mentése tábla korusapp_monika. sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tábla adatainak mentése korusapp_monika.sessions: ~1 rows (hozzávetőleg)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('MjAOtsQDlhSy9DiMPzSoivt8xK0UbmvoM4u6HdmG', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicGRSeERoWnZ0OHpFM1VpY01ycGhVN0w3Q05TQmNkMDFEbHpmYm9yUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1715011185);

-- Struktúra mentése tábla korusapp_monika. sheet_music
CREATE TABLE IF NOT EXISTS `sheet_music` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `composer` varchar(100) NOT NULL,
  `song_title` varchar(100) NOT NULL,
  `sheet_music_pdf` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tábla adatainak mentése korusapp_monika.sheet_music: ~7 rows (hozzávetőleg)
INSERT INTO `sheet_music` (`id`, `composer`, `song_title`, `sheet_music_pdf`) VALUES
	(1, 'Léo Delibes', 'Messe Breve', '1kotta_pdf'),
	(2, 'Bárdos Lajos', 'Megfeszített Jézus', '2kotta_pdf'),
	(3, 'Kerényi György', 'Aranyszárnú angyal', '3kotta_pdf'),
	(4, 'Tóth Péter', 'Stabat Mater', '4kotta_pdf'),
	(5, 'Orlandus Lassus', 'Cor Meum', '5kotta_pdf'),
	(6, 'Tomaso Ludovico de Victoria', 'Una Hora', '6kotta_pdf'),
	(7, 'Tillai Aurél', 'Stabat Mater', '7kotta_pdf');

-- Struktúra mentése tábla korusapp_monika. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `par` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT current_timestamp(),
  `address` varchar(100) DEFAULT NULL,
  `mobil` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tábla adatainak mentése korusapp_monika.users: ~24 rows (hozzávetőleg)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `par`, `date_of_birth`, `address`, `mobil`) VALUES
	(1, 'Tímea', 'szijarto.timea@blathy.info', NULL, '$2y$12$3eIrUCmF0j6vMDcHNicpFu8Irsay5jtYgbochF9PNdZr8491aoYaS', NULL, '2024-04-19 11:16:19', '2024-04-28 07:33:25', 'admin', 'szoprán 1', '2024-04-27', '1115 Bp Bártfai u. 42', '30456789'),
	(2, 'Szabó Tomi', 'tomi@blathy.info', NULL, '$2y$12$C9wbcRsrgh/ore4.XTylAOl4CchaPw3hGduSj5CWQgujMTsMcNSz.', NULL, '2024-04-20 13:43:01', '2024-04-28 09:53:02', 'admin', 'basszus', '1986-04-10', '1115 Bp Bártfai u. 42', '30456789'),
	(4, 'Alma', 'alma@alma', NULL, '$2y$12$CRUIgxUV9uaJpX6CbJBqPuvWVHWCSF/6VBbDTo2yZ/bY0EdKYVlQi', NULL, '2024-04-20 13:52:46', '2024-04-20 13:52:46', 'admin', '', '2024-04-27', '', ''),
	(5, 'Körte', 'korte@korte', NULL, '$2y$12$V7THm9GqhVy0cqda4Rh55OSXaOw1SCJceXwgzNOUpKyquPb2LhTL2', NULL, '2024-04-20 13:53:21', '2024-04-20 13:53:21', 'user', '', '2024-04-27', '', ''),
	(15, 'Banán', 'banan@banan', NULL, '$2y$12$C4zx3H3oythWWgdVm1wUGuOqJ1Oit528rw/wn0aYHUuXdrDGPKPpu', NULL, '2024-04-20 18:49:31', '2024-04-20 18:49:31', 'user', '', '2024-04-27', '', ''),
	(17, 'Citrom', 'citrom@citrom', NULL, '$2y$12$efNtEY2VM7Zk6Dc4.KdKluF7wZxHhlyP9oNt4ZPgSm98gfkaJe3eC', NULL, '2024-04-20 18:52:35', '2024-04-20 18:52:35', 'admin', '', '2024-04-27', '', ''),
	(18, 'narancs', 'narancs@narancs', NULL, '$2y$12$o5bn7cdqo4/XbmXd/eeEBe9qjxQUsejQC4NaDq/ZfLNPN4lQ2KtnO', NULL, '2024-04-23 15:16:34', '2024-04-23 15:16:34', 'user', '', '2024-04-27', '', ''),
	(19, 'Becska Fanni', 'becskaf@gmail.com', NULL, '', NULL, NULL, '2024-04-28 08:13:45', 'user', 'S, S2', '1997-05-17', '1173 Budapest, Rétihéja u. 23', '20/9971234'),
	(20, 'Deákné Császár Gizella', 'deakg @gmail.com', NULL, '', NULL, NULL, NULL, 'user', 'M,S2', '1971-11-23', '1196 Budapest, Árpád u. 121.', '20/2304 297'),
	(21, 'Farkas Ilona', 'farkasi@gmail.com', NULL, '', NULL, NULL, '2024-05-01 15:14:49', 'user', 'sz1', '1972-12-08', '1225 Budapest, Nagytétényi u. 232', '30/5894441'),
	(22, 'Haraszti Enikő', 'eharaszti@gmail.com', NULL, '', NULL, NULL, NULL, 'user', 'M,A1', '1973-06-26', '1164 Budapest, Beniczky T. u. 22', '30/9338009'),
	(23, 'Hozák Annanmária', 'hozaka@gmail.com', NULL, '', NULL, NULL, NULL, 'user', 'M,S2', '1978-12-05', '2900 Komárom,  Hold utca 6', '20/3297897'),
	(24, 'Kiss Anikó', 'kissancs@gmail.com', NULL, '', NULL, NULL, NULL, 'user', 'M,S2', '1978-02-02', '1144 Budapest Szentmihályi u. 10', '20/4773496'),
	(25, 'Kulcsár Gizella', 'g.kulcsar@gmail.com', NULL, '', NULL, NULL, '2024-04-28 05:26:15', 'user', 'S,S1', '1976-07-20', '1142 Budapest. Ungvár u. 20', '70/ 4397063'),
	(26, 'Már Nikoletta', 'mar.n@gmail.com', NULL, '', NULL, NULL, NULL, 'user', 'A,A1', '1991-09-04', '3300 Eger Vörösmarty u. 30', '30/3627382'),
	(27, 'Sólyom Enikő', 'solyom.e@gmail.com', NULL, '', NULL, NULL, NULL, 'user', 'A,A2', '1968-02-12', '2462 Martonvásár, Szécheny u. 34', '70/3843844'),
	(28, 'Nótár Viktória', 'noviki@gmail.com', NULL, '', NULL, NULL, NULL, 'user', 'A,A2', '1987-09-24', '1119 Budapest Nagykikinda u.10', '20/2189457'),
	(29, 'Somogyi Klára', 'somogyi.k@gmail.com', NULL, '', NULL, NULL, NULL, 'user', 'A,A2', '1988-03-19', '1031 Budapest Vizimolnár u.10', '20/3337687'),
	(30, 'Sváb Zsuzsanna', 'svab.zs@gmail.com', NULL, '', NULL, NULL, NULL, 'user', 'S,S2', '1986-07-10', '1022 Budapest Bimbó u.51', '30/2824212'),
	(31, 'Szőnyi Margit', 'szoniy.margit@gmail.com', NULL, '', NULL, NULL, NULL, 'user', 'M,S2', '1973-03-28', '1087 Budapest Stróbl A. u. 7', '30/65438522'),
	(32, 'Wittmann Zsófia', 'zswitt45i@gmail.com', NULL, '$2y$12$13z6Ni0D7HB59XXgp92zj.JBShHoJiBWzvbjdwmaNIAV2cY3HQJDa', NULL, NULL, '2024-04-28 09:55:56', 'user', 'alt', '1969-04-20', '1154 Budapest Tompa M. u. 119', '70/6140631'),
	(34, 'Livius', 'livius@ivius', NULL, '$2y$12$pzwAUPzo7Af434AV5dFMtOu/OV0mlkDpUttcyuXAKbC8/O.mU1MVO', NULL, '2024-04-28 09:10:52', '2024-04-28 09:13:14', 'admin', 'tenor', '2024-04-28', '1115 Bp Bártfai u. 42', '304445555'),
	(36, 'Próba', 'proba@proba', NULL, '$2y$12$9nzBf8ANswogsQEhRSwmCu51ZhOEFNbkSQvh0N.LNjJrll6y7hYey', NULL, '2024-05-03 16:47:34', '2024-05-03 16:47:34', 'user', NULL, '2024-05-03', NULL, NULL),
	(37, 'majom', 'majom@majom', NULL, '$2y$12$ClaBzlH4rhTKDZKxqKn6JepN0NQEW08VZiLOW4bIW63cy4Ts/NER2', NULL, '2024-05-04 15:21:29', '2024-05-04 15:21:29', 'user', NULL, '2024-05-04', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
