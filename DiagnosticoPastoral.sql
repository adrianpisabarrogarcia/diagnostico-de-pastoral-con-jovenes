-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: diagnosticopastoral
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `ID` varchar(3000) COLLATE latin1_spanish_ci NOT NULL,
  `NOMBRE` varchar(3000) COLLATE latin1_spanish_ci NOT NULL,
  `EMAIL` varchar(3000) COLLATE latin1_spanish_ci NOT NULL,
  `MOVIMIENTO` varchar(3000) COLLATE latin1_spanish_ci NOT NULL,
  `INSERTADO` timestamp NULL DEFAULT current_timestamp(),
  `MODIFICADO` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `1.1` decimal(10,2) DEFAULT NULL,
  `1.2` decimal(10,2) DEFAULT NULL,
  `1.3` decimal(10,2) DEFAULT NULL,
  `1.4` decimal(10,2) DEFAULT NULL,
  `1.5` decimal(10,2) DEFAULT NULL,
  `1.6` decimal(10,2) DEFAULT NULL,
  `2.1` decimal(10,2) DEFAULT NULL,
  `2.2` decimal(10,2) DEFAULT NULL,
  `2.3` decimal(10,2) DEFAULT NULL,
  `2.4` decimal(10,2) DEFAULT NULL,
  `2.5` decimal(10,2) DEFAULT NULL,
  `2.6` decimal(10,2) DEFAULT NULL,
  `2.7` decimal(10,2) DEFAULT NULL,
  `2.8` decimal(10,2) DEFAULT NULL,
  `3.1.1` decimal(10,2) DEFAULT NULL,
  `3.1.2` decimal(10,2) DEFAULT NULL,
  `3.1.3` decimal(10,2) DEFAULT NULL,
  `3.1.4` decimal(10,2) DEFAULT NULL,
  `3.2.1` decimal(10,2) DEFAULT NULL,
  `3.2.2` decimal(10,2) DEFAULT NULL,
  `3.2.3` decimal(10,2) DEFAULT NULL,
  `3.2.4` decimal(10,2) DEFAULT NULL,
  `3.2.5` decimal(10,2) DEFAULT NULL,
  `3.2.6` decimal(10,2) DEFAULT NULL,
  `4.1.1` decimal(10,2) DEFAULT NULL,
  `4.1.2` decimal(10,2) DEFAULT NULL,
  `4.1.3` decimal(10,2) DEFAULT NULL,
  `4.1.4` decimal(10,2) DEFAULT NULL,
  `4.2.1` decimal(10,2) DEFAULT NULL,
  `4.2.2` decimal(10,2) DEFAULT NULL,
  `4.2.3` decimal(10,2) DEFAULT NULL,
  `4.2.4` decimal(10,2) DEFAULT NULL,
  `5.1` decimal(10,2) DEFAULT NULL,
  `5.2` decimal(10,2) DEFAULT NULL,
  `5.3` decimal(10,2) DEFAULT NULL,
  `5.4` decimal(10,2) DEFAULT NULL,
  `5.5` decimal(10,2) DEFAULT NULL,
  `5.6` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-20 17:23:52
