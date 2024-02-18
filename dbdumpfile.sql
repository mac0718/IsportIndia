-- MariaDB dump 10.19  Distrib 10.5.23-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: dbjg44hys9qclg
-- ------------------------------------------------------
-- Server version	5.7.39-42-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(6,'2016_06_01_000004_create_oauth_clients_table',1),(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(8,'2019_08_19_000000_create_failed_jobs_table',1),(9,'2019_12_14_000001_create_personal_access_tokens_table',1),(10,'2023_10_19_091507_create_polls_table',1),(11,'2023_10_19_091756_create_questions_table',1),(12,'2023_10_20_073617_create_votes_table',1),(13,'2023_10_23_121224_add_correct_option_in_questions',1),(14,'2023_10_24_122635_create_winners_table',1),(15,'2023_11_24_055954_add_columns_in_users',1),(16,'2023_11_24_074336_add_match_id_in_polls',1),(17,'2023_11_24_112033_add_user_type_in_users',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
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
INSERT INTO `oauth_access_tokens` VALUES ('01b9bbef4dafa7deb5864f0803d8f0766c013001336101494f9fd5fa4255e116fb8655c16a18ec5e',1,1,'Personal Access Token','[]',0,'2023-12-29 11:10:36','2023-12-29 11:10:36','2024-12-29 11:10:36'),('0380c3c708568fcc1aa50a89d37d48337bc4c0e47d9a901b1e3a1647d58656f9b0e4cc5174e7c8f2',6,1,'Personal Access Token','[]',0,'2023-12-15 08:16:20','2023-12-15 08:16:20','2024-12-15 08:16:20'),('0402be8872509436ec01c4888dfbbf2b5b5d1c2669fe423910dc35f64b7710fe9198b6e3bdb0652b',1,1,'Personal Access Token','[]',0,'2023-12-29 06:57:22','2023-12-29 06:57:22','2024-12-29 06:57:22'),('08b61309376889e6fb1b990925add0198a3edd799e30b6bd6d2075ea10776b148b2dfd6d5cf9dbbd',6,1,'Personal Access Token','[]',0,'2023-12-15 12:15:01','2023-12-15 12:15:01','2024-12-15 12:15:01'),('14847253a3fe38242a9bd80807daa406f22af9653aef925be5ce2b165763677452d57eb0281f84a1',1,1,'Personal Access Token','[]',0,'2023-12-28 08:36:26','2023-12-28 08:36:26','2024-12-28 08:36:26'),('1548d212e880879466a0a3c7fe25ac011289d271605b1aa842fc360ce20acf60af661c3d3a67e937',6,1,'Personal Access Token','[]',0,'2023-12-15 12:15:24','2023-12-15 12:15:24','2024-12-15 12:15:24'),('25886af9f22e12e210a9ae9f58e43647025dfc21cfd83522396929fde251d1ab571f7581366ac9ec',4,1,'Personal Access Token','[]',0,'2023-11-27 08:38:42','2023-11-27 08:38:42','2024-11-27 08:38:42'),('35759fc9a25b3c5ece24985e77799161af142de1e47505ba7f2aff2fa659499de384f9e316f6a224',1,1,'Personal Access Token','[]',0,'2023-12-29 11:30:55','2023-12-29 11:30:55','2024-12-29 11:30:55'),('3ee4ae9a9516b9d752d20c52965678cc05b3d81164bb91a6435c3b59206bf6eb354b2750a9f28af0',1,1,'Personal Access Token','[]',0,'2023-12-29 11:17:42','2023-12-29 11:17:42','2024-12-29 11:17:42'),('477a0492e224f4f0008e33ed0ec704fea6aee00c9b849849f458cbe78238e08681eb946be334722f',6,1,'Personal Access Token','[]',0,'2023-12-15 12:30:55','2023-12-15 12:30:55','2024-12-15 12:30:55'),('4f55f62ed68115e2f83480ddede222c4694bf4756a9e177595adb97f3cd8d94b55a54cf5211b1ab3',1,1,'Personal Access Token','[]',0,'2023-12-28 07:50:33','2023-12-28 07:50:33','2024-12-28 07:50:33'),('5cf1fd439430b7e36514d7bae0ea196c7ee53be464947226308459a34ab06e846c566321ac7a6c2f',1,1,'Personal Access Token','[]',0,'2023-12-27 10:15:17','2023-12-27 10:15:17','2024-12-27 10:15:17'),('667d453be52fe1a89ec7458657b874cedb34963b9f2d81c14604d40532ea40b8f4b4826aa88a1eac',6,1,'Personal Access Token','[]',0,'2023-12-15 12:45:15','2023-12-15 12:45:15','2024-12-15 12:45:15'),('6826419275a91da807fabf8455b7d59ad2a3f24b0f8b585a31d03da9b0ddc4697178f68b9e4c0cd4',1,1,'Personal Access Token','[]',0,'2023-11-27 08:32:46','2023-11-27 08:32:46','2024-11-27 08:32:46'),('6c57970bfb2f435b0c66fad312a10e34bf945401d016805ceaacdf42eddf25ad946871eddf430a6b',1,1,'Personal Access Token','[]',0,'2023-12-28 07:40:56','2023-12-28 07:40:56','2024-12-28 07:40:56'),('6eb51de1fd551763d6641b37c6d9a2057cdde6879b85e89eed42d5d57541d604a4a89a28b9bd69d1',1,1,'Personal Access Token','[]',0,'2023-12-27 10:31:12','2023-12-27 10:31:12','2024-12-27 10:31:12'),('707e663a357bb0bdf924158afa22cf740b6c0e7973e90f552613accb46109d50afbd4b01e21504c9',2,1,'Personal Access Token','[]',0,'2023-11-24 17:22:07','2023-11-24 17:22:07','2024-11-24 17:22:07'),('73841fb6c169c664ba8b7efef2abebe9fc67be54c0fd5c999495e2d1cbd917ae57554134b0caa6e2',1,1,'Personal Access Token','[]',0,'2023-12-28 08:30:48','2023-12-28 08:30:48','2024-12-28 08:30:48'),('7d551e85c29253062f76767f80f0c4f72287fb8c9994d5e2207f4f9f9ffe6a660257c81f64f7f5b0',1,1,'Personal Access Token','[]',0,'2023-12-27 09:26:49','2023-12-27 09:26:49','2024-12-27 09:26:49'),('86079a8cc359f20afdde72fc2a4cbe1241987adb849bc3906477e073c2ef5540d43537c7e0a7d1cf',1,1,'Personal Access Token','[]',0,'2023-12-27 10:33:25','2023-12-27 10:33:25','2024-12-27 10:33:25'),('8f8ad9321753e599ad62cd04bf7f177dd06f5feabeffab2101db09ab03426feb96937728bbeae4dc',1,1,'Personal Access Token','[]',0,'2023-12-27 10:47:14','2023-12-27 10:47:14','2024-12-27 10:47:14'),('9223f68f89397de223d8e57f883e8979ad15e91c502cca4dcbf7ec26a8f14af8295710cae9baba97',1,1,'Personal Access Token','[]',0,'2023-12-27 09:09:47','2023-12-27 09:09:47','2024-12-27 09:09:47'),('934b258763bb66eef0d6c1335e4b1ca2af991db06ce7a4b5a8461507a9951d83c135388e2200f0df',1,1,'Personal Access Token','[]',0,'2023-12-28 08:22:39','2023-12-28 08:22:39','2024-12-28 08:22:39'),('9514433b38b5d37dc63c06d5b6c50f9df0653440d3a1a010ce9f116b25344d90fa9e42811809a2d7',3,1,'Personal Access Token','[]',0,'2023-11-27 08:32:56','2023-11-27 08:32:56','2024-11-27 08:32:56'),('96add02e1d1c965c4058634da0615e312c4718ce2deeca825c23e699ec4010dd385bdda445e64618',5,1,'Personal Access Token','[]',0,'2023-11-27 09:27:13','2023-11-27 09:27:13','2024-11-27 09:27:13'),('a463836ab83a0f36f9ad5678bb8757e6ddde4c7bc1c0faeb470f3505c6af66de402db54c836a19ca',1,1,'Personal Access Token','[]',0,'2023-12-27 10:29:40','2023-12-27 10:29:40','2024-12-27 10:29:40'),('ab29107f01142098bd75c6f0b5e427e5d4ca8d8ca88a012432c26430654247edb676e3ce756ab854',1,1,'Personal Access Token','[]',0,'2023-11-27 09:34:48','2023-11-27 09:34:48','2024-11-27 09:34:48'),('b265208ab13459c81bd423e128c04f795fb252b150b1f26f1aa1c2e431e2adcde2f97b4f56ac3a12',6,1,'Personal Access Token','[]',0,'2023-12-15 12:31:49','2023-12-15 12:31:49','2024-12-15 12:31:49'),('be35d3d062c4f49b21399b4fe36b504e39e1890ddf991b0fb9b326e3ca842aa1210f3c3e5578f93b',1,1,'Personal Access Token','[]',0,'2023-12-28 08:37:12','2023-12-28 08:37:12','2024-12-28 08:37:12'),('c18bb1110890b6eccd7b62cfd54a380f3e9692e098bcd6b0009fefd57c530fe8631b1f975eb4bf09',1,1,'Personal Access Token','[]',0,'2023-12-27 09:27:57','2023-12-27 09:27:57','2024-12-27 09:27:57'),('c19fbfd9bfa08b08bbbe7ea11e9927dc126b3c52cd34b1e3a0475e792cd90b7aa0a23aaad9e0a7c2',1,1,'Personal Access Token','[]',0,'2023-11-27 07:47:20','2023-11-27 07:47:20','2024-11-27 07:47:20'),('c546e562dd01ed5b661b0419c06da6eb159f2e81e757b9bf38ec6ac31bed2d1cdaef2d8621409bf9',5,1,'Personal Access Token','[]',0,'2023-11-27 10:34:20','2023-11-27 10:34:20','2024-11-27 10:34:20'),('c55b612c0310e6e5721e9db516bcb3dfdfb7e4a7041527550c9411409db476e22053be726b4d1aa7',1,1,'Personal Access Token','[]',0,'2023-12-15 12:25:13','2023-12-15 12:25:13','2024-12-15 12:25:13'),('d00039099f3f7893bfda1f50ac48b24ddd356a1f99b3b026c95ea809afa876eff98f46d180ca1f8b',1,1,'Personal Access Token','[]',0,'2023-12-29 10:23:20','2023-12-29 10:23:20','2024-12-29 10:23:20'),('da321689240385c929e33f37c53668de73b9ee77b9fa21826ba8f48e28da85892c42779712c394db',1,1,'Personal Access Token','[]',0,'2023-12-29 10:49:42','2023-12-29 10:49:42','2024-12-29 10:49:42'),('db7419620e839971901087c38ad68d7ae36958ba12450d3cb9fceaf2a5100228186eaf4f306cdf54',1,1,'Personal Access Token','[]',0,'2023-12-28 07:08:04','2023-12-28 07:08:04','2024-12-28 07:08:04'),('dd3bdd227893e00ed23d360ca01ef61409fe482b4a63e9adf17098fc4d99c064a596e5ed475cc278',1,1,'Personal Access Token','[]',0,'2023-12-27 09:42:54','2023-12-27 09:42:54','2024-12-27 09:42:54'),('e0413302741e4c88aca76124c88d823d28f383a611b05e8cf4f4d6f60dfab4775647d70ae810d591',1,1,'Personal Access Token','[]',0,'2023-12-29 10:56:32','2023-12-29 10:56:32','2024-12-29 10:56:32'),('eb4bb2cd462637fed2613c80d6194ff717dbd6b14ab2484e8889598131561e8519ed3f153efc62c9',6,1,'Personal Access Token','[]',0,'2023-12-15 12:28:28','2023-12-15 12:28:28','2024-12-15 12:28:28'),('f3e32f2316bb3a9233f777ae1753063c44156fc2776a006e85db202cb472b6d6f461f41dc6f213e2',6,1,'Personal Access Token','[]',0,'2023-12-15 12:18:57','2023-12-15 12:18:57','2024-12-15 12:18:57'),('f57e46202a8cb113544115d9c507df731277aba1e427c8ca3e67804c9ea0d75bf09eb56bee624f2f',6,1,'Personal Access Token','[]',0,'2023-11-27 09:34:59','2023-11-27 09:34:59','2024-11-27 09:34:59'),('f718035343342043a9bf05e4e89a381f8fd7f7705a301ff06bc1e827238ed3af98d1c28c6ec7bb8c',2,1,'Personal Access Token','[]',0,'2023-11-27 06:40:44','2023-11-27 06:40:44','2024-11-27 06:40:44'),('f828c0bc2ad0deced1cf7a3d8afd35f6b33679b9112bd04281f75d646abf2638fe70b2f3af490890',2,1,'Personal Access Token','[]',0,'2023-11-24 18:47:58','2023-11-24 18:47:58','2024-11-24 18:47:58'),('f9426bc9f255f741953b898539f6157c5b1df861df63e43bb82d29a3ed851d387680153ecc1a212a',1,1,'Personal Access Token','[]',0,'2023-12-29 10:51:19','2023-12-29 10:51:19','2024-12-29 10:51:19'),('f9f4944d5add40c93448d9586d2735cb4bd3b6d5d78e1c43c6c7fc3c1e717f6aeee1fe8da9c6a2f6',5,1,'Personal Access Token','[]',0,'2023-11-27 09:22:03','2023-11-27 09:22:04','2024-11-27 09:22:03'),('fdd706e6dd354103718e0064623b830e5d490050f08c2d95d4733ecbe1f363908d3d7967a5d5643a',1,1,'Personal Access Token','[]',0,'2023-12-28 07:38:53','2023-12-28 07:38:53','2024-12-28 07:38:53');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
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
INSERT INTO `oauth_clients` VALUES (1,NULL,'Laravel Personal Access Client','uxqePrHdM0alc0n1vnoCm7oMfkj669Bl1D8vz3xC',NULL,'http://localhost',1,0,0,'2023-11-24 17:19:23','2023-11-24 17:19:23'),(2,NULL,'Laravel Password Grant Client','6K3nB8yVRjHrkX5KhUF9tGvUT5yHr7N6GCkUIcUH','users','http://localhost',0,1,0,'2023-11-24 17:19:23','2023-11-24 17:19:23');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
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
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2023-11-24 17:19:23','2023-11-24 17:19:23');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `polls`
--

DROP TABLE IF EXISTS `polls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `polls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `match` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucher_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date DEFAULT NULL,
  `winner_id` int(11) DEFAULT NULL,
  `total_questions` int(11) NOT NULL,
  `votes_count` int(11) NOT NULL DEFAULT '0',
  `has_ended` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `match_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `polls`
--

LOCK TABLES `polls` WRITE;
/*!40000 ALTER TABLE `polls` DISABLE KEYS */;
INSERT INTO `polls` VALUES (1,'Pakistan vs India','HSUW7HSW63G87HJH','2023-11-27',NULL,NULL,3,50,0,'2023-11-27 07:57:41','2023-11-28 05:54:42','SKLSC9798'),(2,'Testing Poll','HTYUGSD76SDJ7SD','2023-12-15',NULL,NULL,1,0,0,'2023-12-15 12:28:14','2023-12-15 12:28:14','71689'),(3,'Testing Poll','HTYUGSD76SDJ7SD','2023-12-27',NULL,NULL,1,0,0,'2023-12-27 09:10:24','2023-12-27 09:10:24','72440'),(4,'Testing Live','aasdasd','2023-12-29',NULL,NULL,1,0,0,'2023-12-29 11:23:10','2023-12-29 11:23:10','65841'),(5,'Testing Live','HTYUGSD76SDJ7SD','2023-12-29',NULL,NULL,2,0,0,'2023-12-29 13:16:13','2023-12-29 13:16:13','65841'),(6,'Pakistan vs India','HSUW7HSW63G87HJH','2023-12-29',NULL,NULL,3,0,0,'2023-12-29 13:41:18','2023-12-29 13:41:18','65840');
/*!40000 ALTER TABLE `polls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `poll_id` bigint(20) unsigned NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `correct_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_poll_id_foreign` (`poll_id`),
  CONSTRAINT `questions_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,'Who will win?','[\"Pakistan\",\"India\"]','2023-11-27 07:57:41','2023-11-27 07:57:41',NULL),(2,1,'What will be final score of first innings?','[\"200\",\"250\",\"300\",\"300+\"]','2023-11-27 07:57:41','2023-11-27 07:57:41',NULL),(3,1,'Who will be MOTM?','[\"Rizwan\",\"Virat\",\"Babar\",\"Rohit\"]','2023-11-27 07:57:41','2023-11-27 07:57:41',NULL),(4,2,'Wo will win?','[\"Team A\",\"Team B\"]','2023-12-15 12:28:14','2023-12-15 12:28:14',NULL),(5,3,'Who will win?','[\"A\",\"B\"]','2023-12-27 09:10:24','2023-12-27 09:10:24',NULL),(6,4,'Who will win?','[\"A\",\"B\"]','2023-12-29 11:23:10','2023-12-29 11:23:10',NULL),(7,5,'Who will win?','[\"A\",\"B\"]','2023-12-29 13:16:13','2023-12-29 13:16:13',NULL),(8,5,'Who will win?','[\"A\",\"B\"]','2023-12-29 13:16:13','2023-12-29 13:16:13',NULL),(9,6,'Who will win?','[\"Pakistan\",\"India\"]','2023-12-29 13:41:18','2023-12-29 13:41:18',NULL),(10,6,'What will be final score of first innings?','[\"200\",\"250\",\"300\",\"300+\"]','2023-12-29 13:41:18','2023-12-29 13:41:18',NULL),(11,6,'Who will be MOTM?','[\"Rizwan\",\"Virat\",\"Babar\",\"Rohit\"]','2023-12-29 13:41:18','2023-12-29 13:41:18',NULL);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_app_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com',NULL,'$2y$10$5Vx7pGFXOwAjdpCzIW9gSumFU5VA8.mjW8xzPgTwLO5sKHNFKx0Oa',NULL,NULL,NULL,'isportindia','https://isportindia.com','admin','admin'),(2,'kovac','kovac@isportindia',NULL,'$2y$10$zhD7FWPyacJv88VQ1D22h.Y4gKPmWAiWQrAUOQ1JCfmxMX.RX5oAe',NULL,'2023-11-24 17:22:07','2023-11-24 17:22:07','isportindia',NULL,'kovac','user'),(3,'naga','naga@isportindia',NULL,'$2y$10$z0JFv0m9LW.q31zOMyRjCeBUOvPoCQqAz7v0r83QvjOKo/PIPJxqS',NULL,'2023-11-27 08:32:56','2023-11-27 08:32:56','isportindia',NULL,'naga','user'),(4,'captian','captian@isportindia',NULL,'$2y$10$zROgdx9WibT2AhxjMb2i5OBqVw.IEmHaSGA565Ea4xego0IS9MnVG',NULL,'2023-11-27 08:38:42','2023-11-27 08:38:42','isportindia',NULL,'captian','user'),(5,'captain','captain@isportindia',NULL,'$2y$10$Z0u9isTqbF8pm0rd0aq1m.x5lmjgueUkUR/Vnzg8XM7m8VVDmTAHi',NULL,'2023-11-27 09:22:03','2023-11-27 09:22:03','isportindia',NULL,'captain','user'),(6,'farhan','farhan@isportindia',NULL,'$2y$10$caUTVCCkwv9GjMbOlH.SSOYJABOWXZD15UhEcKN/tbXbbKA2gQs76',NULL,'2023-11-27 09:34:59','2023-11-27 09:34:59','isportindia',NULL,'farhan','user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `votes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `question_id` bigint(20) unsigned NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `votes_user_id_foreign` (`user_id`),
  KEY `votes_question_id_foreign` (`question_id`),
  CONSTRAINT `votes_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `votes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `votes`
--

LOCK TABLES `votes` WRITE;
/*!40000 ALTER TABLE `votes` DISABLE KEYS */;
INSERT INTO `votes` VALUES (1,5,1,'Pakistan',0,'2023-11-27 09:28:17','2023-11-27 19:58:09'),(2,5,3,'Rohit',0,'2023-11-27 19:04:54','2023-11-28 05:54:42'),(3,5,2,'300+',0,'2023-11-27 19:05:36','2023-11-28 05:54:31');
/*!40000 ALTER TABLE `votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `winners`
--

DROP TABLE IF EXISTS `winners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `winners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poll_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `winners`
--

LOCK TABLES `winners` WRITE;
/*!40000 ALTER TABLE `winners` DISABLE KEYS */;
/*!40000 ALTER TABLE `winners` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-03  5:41:36
