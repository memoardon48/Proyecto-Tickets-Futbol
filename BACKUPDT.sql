CREATE DATABASE  IF NOT EXISTS `deltatickets` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `deltatickets`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: deltatickets
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `detalle_factura`
--

DROP TABLE IF EXISTS `detalle_factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalle_factura` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_factura` int unsigned NOT NULL,
  `id_ticket` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_factura_id_factura_foreign` (`id_factura`),
  KEY `detalle_factura_id_ticket_foreign` (`id_ticket`),
  CONSTRAINT `detalle_factura_id_factura_foreign` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id`),
  CONSTRAINT `detalle_factura_id_ticket_foreign` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_factura`
--

LOCK TABLES `detalle_factura` WRITE;
/*!40000 ALTER TABLE `detalle_factura` DISABLE KEYS */;
INSERT INTO `detalle_factura` VALUES (1,12,1);
/*!40000 ALTER TABLE `detalle_factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipo` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `id_liga` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `equipo_nombre_unique` (`nombre`),
  KEY `equipo_id_liga_foreign` (`id_liga`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` VALUES (24,'FC Barcelona','1v7CAXv8G_M48k7NpYh9oYpUvm0zhbMUT','Barcelona',2),(25,'RCD Mallorca','1y5wmOlJD4jsBIvWvxzwGgm1OjUJlWveo','Mallorca',2),(26,'Getafe','1OHGh3S2KqzfYHiBDm4bznUqN-4G_7wwb','Getafe',2),(27,'Atletico de Madrid','1FyC_xUvlRNpnXFjCsAN86MC9GGmhZCWx','Madrid',2),(28,'Real Madrid','1mXDPMVwIq-yglpy9Qu6CRJcLgJUtLL70','Madrid',2),(29,'Valencia Cf','1mHXgPAHHyn5wr2wbmZA6cTLnxul_9MY5','Valencia',2),(30,'Real Betis','1mHXgPAHHyn5wr2wbmZA6cTLnxul_9MY5','Valencia',2),(31,'CD Olimpia','1J5t4CDqdL_SPj8KvV7XMcKSidZ1kUPcy','Tegucigalpa',1),(32,'CD Victoria','18jEWRhX3A3GAsNOHyHE7nTcsTItHBgab','La Ceiba',1),(33,'Motagua','1HfXNeKC3qG3NxgBT91HAAgmKd8MUFaBy','Tegucigalpa',1),(34,'Olancho FC','1Od79fUC9-YyyQf_hDvgTS7QDLnkA-hMj','Olancho',1),(35,'CD Honduras del Progreso','1B7C5N0D72Exgm0M3eoSuW0HdsFYlqS0-','El progreso',1),(36,'Int Milan','1Yrh-VyVw4GaDxn5N1WeYNqwwkJvWADkm','Milan',3),(37,'Juventus','1l9uP_XqShcR_m5GBXMPlwQ5zX6hmnhk3','Turin',3),(38,'AC Milan','1orwaUhdfFeVfQC9Mhf9mi81fj_wARZpz','Milan',3),(39,'Lazio','1qM6OGPjRhYMDQVKilZ8zDH-DdYRNdYjP','Lazio',3),(40,'Argentina','1Isa4UjG_KBXtH3-r9GWPIu5BlcU4ym3b','Rayan',4),(41,'Francia','1hYkFgfzt6MluOFR1kWdgW5hM8XxEHLkV','Rayan',4),(42,'Inglaterra','12ILDHNF11yAKrw-Rv4dxnIKUQ4Rp60RW','Doha',4),(43,'España','1-CsSphMyNpPV1vKFUS5WRegcLMqORmZs','Doha',4),(44,'Belgica','12WHByFJTYt75mu3OMsGiRio4h4fRs8Wf','Rayan',4),(45,'Japon','1XkcJmgm-MBe8cOF29cfeSuG7CDPE0GOm','Rayan',4),(46,'Brasil','1mmz6btwneXnirjBOUKkX5VVrkMIZVWHa','Jor',4);
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo_partido`
--

DROP TABLE IF EXISTS `equipo_partido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipo_partido` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_equipo` int unsigned NOT NULL,
  `id_partido` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `equipo_partido_id_equipo_foreign` (`id_equipo`),
  KEY `equipo_partido_id_partido_foreign` (`id_partido`),
  CONSTRAINT `equipo_partido_id_equipo_foreign` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id`),
  CONSTRAINT `equipo_partido_id_partido_foreign` FOREIGN KEY (`id_partido`) REFERENCES `partido` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo_partido`
--

LOCK TABLES `equipo_partido` WRITE;
/*!40000 ALTER TABLE `equipo_partido` DISABLE KEYS */;
INSERT INTO `equipo_partido` VALUES (1,24,1),(2,25,1),(3,26,2),(4,27,2),(5,27,3),(6,28,3),(7,29,4),(8,24,4),(9,34,5),(10,31,5),(11,32,6),(12,33,6),(13,36,7),(14,39,7),(15,36,8),(16,37,8),(17,38,9),(18,39,9),(19,40,10),(20,41,10),(21,42,11),(22,43,11),(23,44,12),(24,45,12),(25,46,13),(26,43,13);
/*!40000 ALTER TABLE `equipo_partido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estadio`
--

DROP TABLE IF EXISTS `estadio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estadio` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `capacidad` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `estadio_nombre_unique` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estadio`
--

LOCK TABLES `estadio` WRITE;
/*!40000 ALTER TABLE `estadio` DISABLE KEYS */;
INSERT INTO `estadio` VALUES (1,'Estadi de San Moix','España','Las Palmas',15000),(2,'Wanda Metropolitano','España','Madrid',40000),(3,'Spotify Camp Nou','España','Barcelona',80000),(4,'Estadio de Mestalla','España','Valencia',50000),(5,'Estadio Chelato Ucles','Honduras','Tegucigalpa',20000),(6,'Estadio de la Ceiba','Honduras','La Ceiba',10000),(7,'Estadio Giuseppe Meazza','Italia','Milan',50000),(8,'Estadio Olímpico de Roma','Italia','Roma',60000),(9,'Juventus Stadium','Italia','Turin',60000),(10,' Estadio Ahmed bin Ali','Qatar','Rayan',40000),(11,'Estadio Al Thumana','Qatar','Doha',40000),(12,'Estadio Khalifa','Qatar','Rayan',45000),(13,'Estadio Al Bay','Qatar','Jor',50000);
/*!40000 ALTER TABLE `estadio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `factura` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `fecha_hora` datetime DEFAULT CURRENT_TIMESTAMP,
  `total` double NOT NULL,
  `id_usuario` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `factura_id_usuario_foreign` (`id_usuario`),
  CONSTRAINT `factura_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
INSERT INTO `factura` VALUES (1,'2022-12-07 10:42:57',300,1),(3,'2022-12-07 11:02:05',700,1),(4,'2022-12-07 11:05:31',700,1),(5,'2022-12-07 11:06:08',700,1),(6,'2022-12-07 11:09:00',700,1),(7,'2022-12-07 11:11:30',700,1),(8,'2022-12-07 11:12:48',700,1),(9,'2022-12-07 11:15:18',700,1),(10,'2022-12-07 11:16:33',100,1),(11,'2022-12-07 13:41:47',300,4),(12,'2022-12-07 14:38:26',300,4);
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liga`
--

DROP TABLE IF EXISTS `liga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `liga` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `liga_nombre_unique` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liga`
--

LOCK TABLES `liga` WRITE;
/*!40000 ALTER TABLE `liga` DISABLE KEYS */;
INSERT INTO `liga` VALUES (1,'Liga Nacional','Honduras'),(2,'Liga Española','España'),(3,'Serie A','Italia'),(4,'Mundial','Qatar');
/*!40000 ALTER TABLE `liga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partido`
--

DROP TABLE IF EXISTS `partido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partido` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `fecha_hora` datetime NOT NULL,
  `id_estadio` int unsigned NOT NULL,
  `temporada` varchar(50) NOT NULL,
  `jornada` int NOT NULL,
  `id_liga` int unsigned NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT 'pendiente',
  PRIMARY KEY (`id`),
  KEY `partido_id_estadio_foreign` (`id_estadio`),
  KEY `partido_id_liga_foreign` (`id_liga`),
  CONSTRAINT `partido_id_estadio_foreign` FOREIGN KEY (`id_estadio`) REFERENCES `estadio` (`id`),
  CONSTRAINT `partido_id_liga_foreign` FOREIGN KEY (`id_liga`) REFERENCES `liga` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partido`
--

LOCK TABLES `partido` WRITE;
/*!40000 ALTER TABLE `partido` DISABLE KEYS */;
INSERT INTO `partido` VALUES (1,'2022-01-10 13:00:00',1,'2021',5,2,'Pendiente'),(2,'2022-09-10 16:00:00',2,'2022',6,2,'Pendiente'),(3,'2022-09-10 18:00:00',3,'2023',4,2,'Pendiente'),(4,'2022-11-10 16:00:00',4,'2022',4,2,'Pendiente'),(5,'2022-01-10 13:00:00',5,'2022',9,1,'Pendiente'),(6,'2022-09-10 18:00:00',6,'2022',7,1,'Pendiente'),(7,'2022-11-21 19:00:00',7,'2022',1,3,'Pendiente'),(8,'2022-05-11 13:00:00',8,'2022',6,3,'Pendiente'),(9,'2022-10-30 22:00:00',9,'2022',5,3,'Pendiente'),(10,'2022-05-11 13:45:00',10,'2022',7,4,'Pendiente'),(11,'2022-05-11 12:00:00',11,'2022',8,4,'Pendiente'),(12,'2022-04-11 12:00:00',12,'2022',9,4,'Pendiente'),(13,'2022-08-11 13:00:00',13,'2022',5,4,'Pendiente');
/*!40000 ALTER TABLE `partido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partido_zona`
--

DROP TABLE IF EXISTS `partido_zona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partido_zona` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_partido` int unsigned NOT NULL,
  `id_zona` int unsigned NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `partido_zona_id_zona_foreign` (`id_zona`),
  KEY `partido_zona_id_partido_foreign` (`id_partido`),
  CONSTRAINT `partido_zona_id_partido_foreign` FOREIGN KEY (`id_partido`) REFERENCES `partido` (`id`),
  CONSTRAINT `partido_zona_id_zona_foreign` FOREIGN KEY (`id_zona`) REFERENCES `zona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partido_zona`
--

LOCK TABLES `partido_zona` WRITE;
/*!40000 ALTER TABLE `partido_zona` DISABLE KEYS */;
INSERT INTO `partido_zona` VALUES (1,1,1,300),(2,2,5,400),(3,3,9,500),(4,4,12,100),(5,5,15,600),(6,6,18,900),(7,7,21,450),(8,8,24,650),(9,9,27,231),(10,10,30,753),(11,11,33,951),(12,12,36,486),(13,13,39,624),(14,1,2,500);
/*!40000 ALTER TABLE `partido_zona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ticket` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_partido_zona` int unsigned NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT 'disponible',
  `asiento` int NOT NULL,
  `fila` int NOT NULL,
  `puerta` int DEFAULT NULL,
  `sector` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ticket_id_partido_zona_foreign` (`id_partido_zona`),
  CONSTRAINT `ticket_id_partido_zona_foreign` FOREIGN KEY (`id_partido_zona`) REFERENCES `partido_zona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (1,1,'apartado',12,1,23,1),(2,2,'disponible',99,6,74,2),(3,3,'disponible',84,8,12,97),(4,4,'disponible',56,7,36,45),(5,5,'disponible',23,14,98,18),(6,6,'disponible',12,6,54,65),(7,7,'disponible',11,69,56,9),(8,8,'disponible',2,45,68,68),(9,9,'disponible',78,78,94,12),(10,10,'disponible',95,20,12,45),(11,11,'disponible',63,35,71,17),(12,12,'disponible',84,65,56,63),(13,13,'disponible',62,47,25,15);
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `estado` enum('AC','DES') NOT NULL DEFAULT 'AC',
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario_username_unique` (`username`),
  UNIQUE KEY `usuario_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'memoardon','djjjjjjjjj','AC','Guillermo','Ardon','guillermoardon215@gmail.com','2002-09-26','dasbdan adsbjdba dbasjdbasbdasj dhvhsavd','99399216'),(2,'denisa','aaaddddd','DES','Denisse','Garcia','agarciagomez@gmail.com','2002-12-26','dadsadasd','95494050'),(3,'samu','dasdasdsa','AC','Samuel','Tovar','stovar@gmail.com','2000-12-21','dasfsdf fsdadsa','99394510'),(4,'ronaldo','Elbicho7.','AC','Cristiano','Dos Santos','ronaldo@gmail.com','1985-12-03','portugal kdjdjksjdfkj','33556677'),(8,'kevinSe17','HolaMundo17.','AC','Kevin','De Bruyne','kevin123@gmail.com','2000-02-18','Residencial Belgica','33904657');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zona`
--

DROP TABLE IF EXISTS `zona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zona` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `capacidad` int NOT NULL,
  `id_estadio` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `zona_id_estadio_foreign` (`id_estadio`),
  CONSTRAINT `zona_id_estadio_foreign` FOREIGN KEY (`id_estadio`) REFERENCES `estadio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zona`
--

LOCK TABLES `zona` WRITE;
/*!40000 ALTER TABLE `zona` DISABLE KEYS */;
INSERT INTO `zona` VALUES (1,'Tribuna','Toda el area situada en la parte oeste del estadio',300,1),(2,'Tribuna S','Toda el area situada en la parte este del estadio',400,1),(3,'Preferencial','Toda el area situada en la parte en el sur del estadio',500,1),(4,'Silla','Area de silla ubicado en el este del estadio',100,2),(5,'Preferencia A','Toda el area situada en la parte oeste del estadio',500,2),(6,'VIP','Zona de palco del estadio',600,2),(7,'Tibuna Centro','Sector central de estadio',200,3),(8,'Silla','Area de silla ubicado en el este del estadio',200,3),(9,'VIP','Zona de palco del estadio',100,3),(10,'Sombra Sur','Ubicacion bajo techo en tribuna sur',800,4),(11,'Sombra Norte','Ubicacion bajo techo en tribuna norte',800,4),(12,'Sol Norte','Toda el area central de estadio',1000,4),(13,'Silla','Area de silla ubicado en el este del estadio',600,5),(14,'Preferencia A','Toda el area situada en la parte oeste del estadio',200,5),(15,'Tribuna S','Toda el area situada en la parte este del estadio',800,5),(16,'VIP','Zona de palco del estadio',300,6),(17,'Palco','Zona semi exlusiva debajo de VIP',50,6),(18,'Sol Sur','Toda el area central de estadio',100,6),(19,'Sombra Sur','Ubicacion bajo techo en tribuna sur',50,7),(20,'Sombra Norte','Ubicacion bajo techo en tribuna norte',500,7),(21,'Tribuna S','Toda el area situada en la parte este del estadio',600,7),(22,'Silla','Area de silla ubicado en el este del estadio',400,8),(23,'Palco','Zona semi exlusiva debajo de VIP',200,8),(24,'Tribuna S','Toda el area situada en la parte este del estadio',900,8),(25,'Preferencia A','Toda el area situada en la parte oeste del estadio',900,9),(26,'Tibuna Centro','Sector central de estadio',900,9),(27,'Silla','Area de silla ubicado en el este del estadio',500,9),(28,'VIP','Zona de palco del estadio',200,10),(29,'Sombra Norte','Ubicacion bajo techo en tribuna norte',600,10),(30,'Sombra Sur','Ubicacion bajo techo en tribuna sur',800,10),(31,'Tribuna','Toda el area situada en la parte oeste del estadio',600,11),(32,'VIP','Zona de palco del estadio',400,11),(33,'Preferencia A','Toda el area situada en la parte oeste del estadio',800,11),(34,'Tibuna Centro','Sector central de estadio',800,12),(35,'VIP','Zona de palco del estadio',600,12),(36,'Sombra Sur','Ubicacion bajo techo en tribuna sur',300,12),(37,'Palco','Zona semi exlusiva debajo de VIP',520,13),(38,'Preferencia A','Toda el area situada en la parte oeste del estadio',650,13),(39,'VIP','Zona de palco del estadio',700,13);
/*!40000 ALTER TABLE `zona` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 14:52:03
