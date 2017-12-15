CREATE DATABASE  IF NOT EXISTS `nuskadb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `nuskadb`;
-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: nuskadb
-- ------------------------------------------------------
-- Server version	5.6.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Jardín',1,NULL,NULL),(2,'Bazar',1,NULL,NULL),(3,'Camping',1,NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_11_02_212023_database',1),(4,'2017_12_04_190615_add_fotopath_to_products_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `product_property`
--

DROP TABLE IF EXISTS `product_property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_property` (
  `product_id` smallint(5) unsigned NOT NULL,
  `property_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_property`
--

LOCK TABLES `product_property` WRITE;
/*!40000 ALTER TABLE `product_property` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `cost` double(8,2) NOT NULL,
  `category_id` tinyint(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fotopath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_index` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Remera React.JS (Black)',NULL,1,350.00,1,'2017-12-13 00:21:03','2017-12-13 00:21:03','productos/5a30483f05a1c.png'),(2,'Remera HTML5 (Green)',NULL,1,350.00,1,'2017-12-13 00:37:38','2017-12-13 00:37:38','productos/5a304c2221c4a.png'),(3,'Remera React.js (Blue)',NULL,1,370.00,1,'2017-12-13 00:40:18','2017-12-14 21:41:03','productos/5a304cc2c72f3.png'),(4,'Remera React.JS (Green)',NULL,1,350.00,1,'2017-12-13 01:00:53','2017-12-13 01:00:53','productos/5a3051950304a.png'),(6,'Buzo Laravel (White)',NULL,1,550.00,2,'2017-12-13 01:37:41','2017-12-13 01:37:41','productos/5a305a3544273.png'),(7,'tazajsa',NULL,1,120.00,3,'2017-12-13 23:39:30','2017-12-15 14:56:19','productos/5a3190029916e.png'),(9,'angularsticker',NULL,1,55.00,3,'2017-12-14 00:23:21','2017-12-14 00:23:21','productos/5a319a494f45b.png'),(10,'Remera React',NULL,1,255.00,1,'2017-12-15 14:53:37','2017-12-15 14:53:37','productos/5a33b7c1b237f.png'),(11,'remera html5',NULL,1,150.00,1,'2017-12-15 14:54:03','2017-12-15 14:54:03','productos/5a33b7db4ecf1.png'),(12,'remera html5 black',NULL,1,200.00,1,'2017-12-15 14:54:30','2017-12-15 14:54:30','productos/5a33b7f641b19.png'),(13,'buzo laravel mujer',NULL,1,500.00,2,'2017-12-15 14:54:53','2017-12-15 14:54:53','productos/5a33b80d00c3c.png'),(14,'buzo react black',NULL,1,550.00,2,'2017-12-15 14:55:14','2017-12-15 14:55:14','productos/5a33b822e204d.png'),(15,'pin ruby',NULL,1,25.00,3,'2017-12-15 14:57:02','2017-12-15 14:57:02','productos/5a33b88ed9abe.png'),(16,'pin kde',NULL,1,25.00,3,'2017-12-15 14:57:17','2017-12-15 14:57:17','productos/5a33b89d8ec0e.png'),(17,'sticker anonymous',NULL,1,100.00,3,'2017-12-15 14:57:54','2017-12-15 14:57:54','productos/5a33b8c1f1537.png'),(18,'sticker django',NULL,1,100.00,3,'2017-12-15 14:58:11','2017-12-15 14:58:11','productos/5a33b8d349f0d.png'),(19,'remera html5 green',NULL,1,350.00,1,'2017-12-15 15:04:39','2017-12-15 15:04:39','productos/5a33ba572b725.png');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (1,'Envío gratuito',1,NULL,NULL),(2,'Cuotas',1,NULL,NULL),(3,'Descuento en efectivo',1,NULL,NULL);
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` int(10) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `dni_UNIQUE` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'administrador','admin@codersswag.net','$2y$10$ePolp8IzBaqv5j5Uznd0iOnftU9gSUTcjqrR6FmCeyS5J.jeOutCW',NULL,'m1mBhM9qjKAeVk3AzFVJM84bZXvspVSC82rYZNGhNkXAsoEHP8df2l5h4mdl','2017-12-12 22:25:46','2017-12-12 22:25:46',''),(4,'Ervin Nicolas','vfarrell@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'Kbu7fGqQa8','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(6,'Mrs. Minerva Little','schaden.laron@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'fREq9lKY4f','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(7,'Robbie Pfannerstill','connelly.claire@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'G3rksEC9PO','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(8,'Harmony Grant','ebert.hollis@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'f1FdYNEnFZ','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(10,'Maci Cummerata IV','muller.brad@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'Hmj8KZ4UST','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(11,'Lane Ortiz Gomez','ocarter@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'ZKmlCTkUuV','2017-12-13 23:52:38','2017-12-15 14:52:47','\0'),(12,'Mrs. Greta Wehner','elian.windler@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'QETzS5pqmv','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(13,'Marshall Swift','nienow.daren@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'lOl2Vb5GMI','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(14,'Mr. Lexus Schimmel V','leonard.rosenbaum@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'lbfVWv0syP','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(15,'Melissa Murphy III','bhodkiewicz@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'1Xl8UP9yGl','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(16,'Dr. Monserrat Okuneva','bryana.grant@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'wJdwHgHLxd','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(17,'Emmet Ryan II','murray.desiree@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'wRYRzIB776','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(18,'Chasity Raynor V','jessika.moen@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'08zAMgl5V3','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(19,'Kyle Murphy DDS','rashawn79@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'gL053UyLtN','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(20,'Miss Effie Stamm','maribel.pfeffer@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'x9XYVr1drB','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(21,'Jimmie Bayer','lisandro53@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'ZDUoEdHjsG','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(22,'Annalise Dach','adonis95@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'zgCurPwLQX','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(23,'Ms. Abbigail Turcotte V','schoen.jerrell@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'2mlCTIA5j6','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(24,'Abelardo Vandervort','hkoss@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'OzefLX7o05','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(25,'Prof. Michael Rath','goyette.perry@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'dFFO2FGmjb','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(26,'Don Kutch','pferry@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'pDuwwXvDug','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(27,'Rosemary Abernathy','lbartell@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'3P0Bg6KO50','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(28,'Prof. Alfonso Zulauf Jr.','gregg06@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'eNXmHkkgX7','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(29,'Casimir Prohaska','brady57@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'m1eWcaMMam','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(30,'Rosa Rau','eleazar60@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'CPxrxCvstw','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(31,'Gertrude Hudson','rene.west@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'b3WBJTwocc','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(32,'Hilma McDermott','chelsey.gleason@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'H4OUIShKu7','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(33,'Tiara Ebert','crooks.neha@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'rAJqg4enhG','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(34,'Prof. Kenyon Bartell','giovanna60@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'f5PCDdFCq5','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(35,'Clotilde Stehr','qprice@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'4NJ0Cozv1Y','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(36,'Greyson McKenzie','arthur42@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'1IyDwlSCuo','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(37,'Tremayne Brown V','selmer06@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'iafWr1ZduI','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(38,'Brittany Krajcik','sparker@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'moB7ByrTiB','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(39,'Miss Dora Stokes','adriel83@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'AvdTeNdeq6','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(40,'Diamond Kub','hessel.theresia@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'idrxoxAMD8','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(41,'Haskell Carroll','weber.rudolph@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'KDsqdefd8L','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(42,'Mr. Bertram Rutherford PhD','kjacobson@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'gbYpEKipDY','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(43,'Erik Greenfelder','zoe01@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'dKqT0JfHz0','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(44,'Jordon Cormier','kathryne.halvorson@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'SGaEBEt8W9','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(45,'Mrs. Abigail Jones IV','ward.billie@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'VSvT8rrbPA','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(46,'Mr. Vernon Gusikowski MD','brown.lolita@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'auyBKwYNZH','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(47,'Ansel Lockman','doug74@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'F9RRQDuqxJ','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(48,'Leila Mitchell','cristopher.lynch@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'bVjRQ3unJz','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(49,'Celia Barrows','stamm.kendall@example.net','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'ckh05jxCZh','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(50,'Catharine Gutkowski','nwindler@example.com','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'P9hsLScpa1','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(51,'Prof. Hazel Hamill IV','kuhlman.gust@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'DigLYt4MQp','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(52,'Reginald Prosacco PhD','domenick05@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'fsfHdO6tsm','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(53,'Nina Smith','kiehn.bart@example.org','$2y$10$w119FokAsCAPN5P60QWiPunsLFQsXBdeCZNm8RD1UY3mA2Pbw6WMu',NULL,'GGt6CvcIqA','2017-12-13 23:52:38','2017-12-13 23:52:38','\0'),(55,'elpeposwag','elpepo@regede.com.ar','$2y$10$rt7lD6KVZoPnJjXKUPULz.HrpNmGV62S0j6HNaa5MadSesFWFSe6u',NULL,NULL,'2017-12-14 21:47:55','2017-12-14 21:47:55','\0');
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

-- Dump completed on 2017-12-15  9:54:33
