-- MySQL dump 10.13  Distrib 8.0.41, for Linux (x86_64)
--
-- Host: localhost    Database: assessment_db
-- ------------------------------------------------------
-- Server version	8.0.41-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('backend_assessment_cache_5c785c036466adea360111aa28563bfd556b5fba','i:2;',1741225807),('backend_assessment_cache_5c785c036466adea360111aa28563bfd556b5fba:timer','i:1741225807;',1741225807);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_03_06_002432_create_oauth_auth_codes_table',1),(5,'2025_03_06_002433_create_oauth_access_tokens_table',1),(6,'2025_03_06_002434_create_oauth_refresh_tokens_table',1),(7,'2025_03_06_002435_create_oauth_clients_table',1),(8,'2025_03_06_002436_create_oauth_personal_access_clients_table',1),(9,'2025_03_06_203930_create_projects_table',2),(10,'2025_03_06_205041_create_user_project_table',2),(11,'2025_03_06_211629_create_timesheets_table',3),(14,'2025_03_06_214609_create_project_attributes_table',4),(15,'2025_03_06_215439_create_project_attribute_values_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` VALUES ('14c667f7508ee049a2fd6954014f778e538493a7e7af9547c44d7bb3662985149336e502e5b98e6c',14,2,'auth_token','[]',0,'2025-03-07 01:51:36','2025-03-07 01:51:36','2026-03-07 03:51:36'),('1a3699d40c483f6d65a143ba53882023aa9398d1e5ebe0d2fa3e38e09f5ac073ba3a683f135d1747',15,2,'auth_token','[]',0,'2025-03-07 01:53:22','2025-03-07 01:53:22','2026-03-07 03:53:22'),('29ce88f31876f9b34caf3ac8dd71b127855e7b8c6685b0295831e53731a75059fc8589a02898224a',16,2,'auth_token','[]',0,'2025-03-07 03:50:12','2025-03-07 03:50:13','2026-03-07 05:50:12'),('59b630024afd9f504c12cea328f32f4bcf02fad91765d5eb3a66125004fb171b7fcfdbfde439b3e1',13,2,'auth_token','[]',0,'2025-03-07 01:50:32','2025-03-07 01:50:32','2026-03-07 03:50:32'),('640ddd287bbe3d36f8fda529bc5de9be19634ffb86bff4f5fcd791dfa4650be5351b3e158fdffc83',10,2,'auth_token','[]',0,'2025-03-06 00:16:32','2025-03-06 00:16:32','2026-03-06 02:16:32'),('674e310e83125d01e691171212d982d52163a451c7dd923dc463d4e0566d6020cb2c13db747adc54',10,2,'auth_token','[]',0,'2025-03-05 23:55:09','2025-03-05 23:55:09','2026-03-06 01:55:09'),('86ecbd9a2dc84df12460907b64fbf4b3d60c76b763abb10fb477029cdf62086003869a95b355bb38',5,2,'auth_token','[]',1,'2025-03-07 02:38:59','2025-03-07 02:39:18','2026-03-07 04:38:59'),('8976228e8524a69c7b27ab1d05677a1343f1ec532965e808e513755cadbb7ca1f8055c1cd5f3f08e',5,2,'auth_token','[]',0,'2025-03-07 02:23:36','2025-03-07 02:23:36','2026-03-07 04:23:36'),('a07d3356848bcaa49333da5294bfd5bfe03543c9e8c54ee2c762258d5b0b15639fbd326fc9a27fec',5,2,'auth_token','[]',0,'2025-03-07 02:26:10','2025-03-07 02:26:10','2026-03-07 04:26:10'),('c70c6fa3bf42ef4cac71933b0892be53288bb63b4993a010f4c3ed9189907ac5e8e086f43749f925',5,2,'auth_token','[]',1,'2025-03-07 02:32:58','2025-03-07 02:38:11','2026-03-07 04:32:58'),('f134a1e522a8a2e055011502ef3cce872f8f84ca96a53ede2866a7f2e0c8e75944872323ab66428c',5,2,'auth_token','[]',0,'2025-03-05 23:45:17','2025-03-05 23:45:17','2026-03-06 01:45:17');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'Backend-Assessment Password Grant Client','hpyTc8Xrc07LhHRZCIIFcyUdpxz2HwEIkPgBv8NY','users','http://localhost',0,1,0,'2025-03-05 23:44:02','2025-03-05 23:44:02'),(2,NULL,'Backend-Assessment Personal Access Client','KCj2glSE5LzCzWkxT6UA1ua7VvkE79o6cUMZpsjS',NULL,'http://localhost',1,0,0,'2025-03-05 23:45:11','2025-03-05 23:45:11');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,2,'2025-03-05 23:45:11','2025-03-05 23:45:11');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_attribute_values`
--

DROP TABLE IF EXISTS `project_attribute_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project_attribute_values` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `entity_id` bigint unsigned NOT NULL,
  `attribute_id` bigint unsigned NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_attribute_values_entity_id_foreign` (`entity_id`),
  KEY `project_attribute_values_attribute_id_foreign` (`attribute_id`),
  CONSTRAINT `project_attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `project_attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `project_attribute_values_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_attribute_values`
--

LOCK TABLES `project_attribute_values` WRITE;
/*!40000 ALTER TABLE `project_attribute_values` DISABLE KEYS */;
INSERT INTO `project_attribute_values` VALUES (63,29,3,'IT','2025-03-07 03:42:08','2025-03-07 03:42:08'),(64,29,4,'2025-01-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(65,29,5,'2025-03-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(66,29,6,'online','2025-03-07 03:42:08','2025-03-07 03:42:08'),(67,30,3,'Marketing','2025-03-07 03:42:08','2025-03-07 03:42:08'),(68,30,4,'2025-02-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(69,30,5,'2025-06-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(70,30,6,'hybrid','2025-03-07 03:42:08','2025-03-07 03:42:08'),(71,31,3,'Marketing','2025-03-07 03:42:08','2025-03-07 03:42:08'),(72,31,4,'2025-03-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(73,31,5,'2025-04-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(74,31,6,'online','2025-03-07 03:42:08','2025-03-07 03:42:08'),(75,32,3,'IT','2025-03-07 03:42:08','2025-03-07 03:42:08'),(76,32,4,'2025-02-15','2025-03-07 03:42:08','2025-03-07 03:42:08'),(77,32,5,'2025-04-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(78,32,6,'online','2025-03-07 03:42:08','2025-03-07 03:42:08'),(79,33,3,'IT','2025-03-07 03:42:08','2025-03-07 03:42:08'),(80,33,4,'2025-01-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(81,33,5,'2025-09-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(82,33,6,'offline','2025-03-07 03:42:08','2025-03-07 03:42:08'),(83,34,3,'Marketing','2025-03-07 03:42:08','2025-03-07 03:42:08'),(84,34,4,'2025-03-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(85,34,5,'2025-05-01','2025-03-07 03:42:08','2025-03-07 03:42:08'),(86,34,6,'online','2025-03-07 03:42:08','2025-03-07 03:42:08'),(91,36,3,'IT','2025-03-07 04:09:41','2025-03-07 04:09:41'),(92,36,4,'2025-03-05','2025-03-07 04:09:41','2025-03-07 04:09:41');
/*!40000 ALTER TABLE `project_attribute_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_attributes`
--

DROP TABLE IF EXISTS `project_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project_attributes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('text','date','select','number','time') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_attributes_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_attributes`
--

LOCK TABLES `project_attributes` WRITE;
/*!40000 ALTER TABLE `project_attributes` DISABLE KEYS */;
INSERT INTO `project_attributes` VALUES (3,'department','select','2025-03-07 03:38:11','2025-03-07 03:38:11'),(4,'start_date','date','2025-03-07 03:38:11','2025-03-07 03:38:11'),(5,'end_date','date','2025-03-07 03:38:11','2025-03-07 03:38:11'),(6,'type','select','2025-03-07 03:38:11','2025-03-07 03:38:11');
/*!40000 ALTER TABLE `project_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','active','ended') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (29,'New Website','pending','2025-03-07 03:41:12','2025-03-07 03:41:12'),(30,'Marketing Plan','pending','2025-03-07 03:41:12','2025-03-07 03:41:12'),(31,'Social Media','active','2025-03-07 03:41:12','2025-03-07 03:41:12'),(32,'Designing','pending','2025-03-07 03:41:12','2025-03-07 03:41:12'),(33,'IOT System','pending','2025-03-07 03:41:12','2025-03-07 03:41:12'),(34,'Videography','active','2025-03-07 03:41:12','2025-03-07 03:41:12'),(36,'New testing','pending','2025-03-07 04:09:41','2025-03-07 04:09:41');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('rJQD3jEHJR7KYdjtRBXJmxHtDXwSYO3povMq3CPo',NULL,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiajlpd3FrbkdBdmNVMkI1STNkempqQlNOV21pNGVPN3NqSzRhOUhjeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vYmFja2VuZC1hc3Nlc3NtZW50LnRlc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1741267825);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timesheets`
--

DROP TABLE IF EXISTS `timesheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timesheets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `task_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `project_id` bigint unsigned NOT NULL,
  `date` date NOT NULL,
  `hours` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `timesheets_user_id_foreign` (`user_id`),
  KEY `timesheets_project_id_foreign` (`project_id`),
  CONSTRAINT `timesheets_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  CONSTRAINT `timesheets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timesheets`
--

LOCK TABLES `timesheets` WRITE;
/*!40000 ALTER TABLE `timesheets` DISABLE KEYS */;
INSERT INTO `timesheets` VALUES (2,'2nd project',17,31,'2025-03-05','02:30:00','2025-03-07 03:52:55','2025-03-07 04:21:51'),(3,'task one',17,31,'2025-03-05','02:30:00','2025-03-07 04:20:33','2025-03-07 04:20:33');
/*!40000 ALTER TABLE `timesheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_project`
--

DROP TABLE IF EXISTS `user_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_project` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `project_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_project_user_id_foreign` (`user_id`),
  KEY `user_project_project_id_foreign` (`project_id`),
  CONSTRAINT `user_project_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_project_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_project`
--

LOCK TABLES `user_project` WRITE;
/*!40000 ALTER TABLE `user_project` DISABLE KEYS */;
INSERT INTO `user_project` VALUES (3,19,30,'2025-03-07 04:06:00','2025-03-07 04:06:00'),(4,20,30,'2025-03-07 05:16:35','2025-03-07 05:16:35');
/*!40000 ALTER TABLE `user_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (16,'Test','User','test@astudio.com','2025-03-07 03:38:11','$2y$12$RUHKkFp7qygwpRGpxlEs.ehzCe1CX4DkiEmtEzYkK6hP.d3OLGuTe','XJVOWhoSPd','2025-03-07 03:38:11','2025-03-07 03:38:11'),(17,'Gilberto','Grimes','kshlerin.carmine@example.com','2025-03-07 03:38:11','$2y$12$ndEaEX039JAiHEwRj8QnAOBsWPa9BVnRiUxWc8SbrmTPuEVWU/mXu','QUB7zk8X7q','2025-03-07 03:38:11','2025-03-07 03:38:11'),(18,'ahmed','Bednar','xdurgan@example.org','2025-03-07 03:38:11','$2y$12$ndEaEX039JAiHEwRj8QnAOBsWPa9BVnRiUxWc8SbrmTPuEVWU/mXu','NN4nEXZtYR','2025-03-07 03:38:11','2025-03-07 04:02:58'),(19,'Giovanna','Rogahn','hgerhold@example.com','2025-03-07 03:38:11','$2y$12$ndEaEX039JAiHEwRj8QnAOBsWPa9BVnRiUxWc8SbrmTPuEVWU/mXu','XOiDJ841QF','2025-03-07 03:38:11','2025-03-07 03:38:11'),(20,'Johann','Schaden','bhessel@example.net','2025-03-07 03:39:19','$2y$12$XjRlJ9lMs54SZ.glEnXww.Lmq6HHy6eg/5REBnLU2./y8fn0iqutW','5iAb0NvdSp','2025-03-07 03:39:19','2025-03-07 03:39:19'),(21,'Cara','Donnelly','jgreenfelder@example.net','2025-03-07 03:39:19','$2y$12$XjRlJ9lMs54SZ.glEnXww.Lmq6HHy6eg/5REBnLU2./y8fn0iqutW','cCT2HoFadl','2025-03-07 03:39:19','2025-03-07 03:39:19'),(22,'Cheyenne','Treutel','collins.greta@example.net','2025-03-07 03:39:19','$2y$12$XjRlJ9lMs54SZ.glEnXww.Lmq6HHy6eg/5REBnLU2./y8fn0iqutW','lRRfUnqmvj','2025-03-07 03:39:19','2025-03-07 03:39:19'),(23,'Mafalda','Purdy','moore.hattie@example.org','2025-03-07 03:40:23','$2y$12$cmZiARUabm.vw27Fgm39BOypT/81d0p74hnmSV7sIpvNDTwq8lYUm','aTcImBxBk4','2025-03-07 03:40:23','2025-03-07 03:40:23'),(24,'Celestino','Reichert','brooke.von@example.com','2025-03-07 03:40:23','$2y$12$cmZiARUabm.vw27Fgm39BOypT/81d0p74hnmSV7sIpvNDTwq8lYUm','yujkpEuKwY','2025-03-07 03:40:23','2025-03-07 03:40:23'),(25,'Florine','Pouros','heathcote.rodolfo@example.net','2025-03-07 03:40:23','$2y$12$cmZiARUabm.vw27Fgm39BOypT/81d0p74hnmSV7sIpvNDTwq8lYUm','URY5VWAkDM','2025-03-07 03:40:23','2025-03-07 03:40:23'),(26,'Lyric','Fritsch','adella07@example.com','2025-03-07 03:41:12','$2y$12$6z0/z3oBbLlKCePPdjRff.Vmb4pNQmLAghXR7AATF28c0Z/kUjFCW','oDRsK8ahBS','2025-03-07 03:41:12','2025-03-07 03:41:12'),(27,'Guy','Hessel','jonathon75@example.org','2025-03-07 03:41:12','$2y$12$6z0/z3oBbLlKCePPdjRff.Vmb4pNQmLAghXR7AATF28c0Z/kUjFCW','PLBnjBPVO1','2025-03-07 03:41:12','2025-03-07 03:41:12'),(28,'Rebekah','Cartwright','price.sporer@example.com','2025-03-07 03:41:12','$2y$12$6z0/z3oBbLlKCePPdjRff.Vmb4pNQmLAghXR7AATF28c0Z/kUjFCW','d6EmQhbsIc','2025-03-07 03:41:12','2025-03-07 03:41:12'),(29,'Gwendolyn','Herman','tressie.von@example.org','2025-03-07 03:41:23','$2y$12$xb9ESEr7VP.FNXiOlUqDfuztaddWUs0k/rK0aCSdnyTjyhL8r2f56','NdlGUmv7yv','2025-03-07 03:41:23','2025-03-07 03:41:23'),(30,'Norbert','Harris','awill@example.net','2025-03-07 03:41:23','$2y$12$xb9ESEr7VP.FNXiOlUqDfuztaddWUs0k/rK0aCSdnyTjyhL8r2f56','0NhmKdtP4u','2025-03-07 03:41:23','2025-03-07 03:41:23'),(31,'Mercedes','Gleichner','anderson75@example.org','2025-03-07 03:41:23','$2y$12$xb9ESEr7VP.FNXiOlUqDfuztaddWUs0k/rK0aCSdnyTjyhL8r2f56','k0LEnh7OU2','2025-03-07 03:41:23','2025-03-07 03:41:23'),(32,'Taryn','Gaylord','ylubowitz@example.com','2025-03-07 03:42:03','$2y$12$UmETdOngNKmBiy/PYFIkP.am0kKOdMl6zKFwQ.a4aLexcje9MACB2','4Vt7xvoFKx','2025-03-07 03:42:04','2025-03-07 03:42:04'),(33,'Eliza','Pfeffer','brenda12@example.org','2025-03-07 03:42:04','$2y$12$UmETdOngNKmBiy/PYFIkP.am0kKOdMl6zKFwQ.a4aLexcje9MACB2','xJLJo9Xejz','2025-03-07 03:42:04','2025-03-07 03:42:04'),(34,'Joy','Langworth','erica.corkery@example.com','2025-03-07 03:42:04','$2y$12$UmETdOngNKmBiy/PYFIkP.am0kKOdMl6zKFwQ.a4aLexcje9MACB2','WerLeD4gup','2025-03-07 03:42:04','2025-03-07 03:42:04'),(36,'Gregg','Schimmel','fgutkowski@example.com','2025-03-07 03:42:08','$2y$12$4tBORnTTMZHEBiITfwirDuHWJSXbQZfycAx/pd6BgtzMSh4nhaDZS','Zx4EkGjUMj','2025-03-07 03:42:08','2025-03-07 03:42:08'),(37,'Retha','Smitham','gibson.alessandro@example.org','2025-03-07 03:42:08','$2y$12$4tBORnTTMZHEBiITfwirDuHWJSXbQZfycAx/pd6BgtzMSh4nhaDZS','Qd7VX14es6','2025-03-07 03:42:08','2025-03-07 03:42:08'),(38,'ahmed','www','oqq@gmail.com',NULL,'$2y$12$ZQGOT0/zh4VT993VzE88tOzVYNZebh.dZEnIb27rkhswy4/uQjf1G',NULL,'2025-03-07 04:02:26','2025-03-07 04:02:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-07  9:35:47
