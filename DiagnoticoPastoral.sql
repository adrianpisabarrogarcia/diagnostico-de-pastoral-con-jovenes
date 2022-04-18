-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 11-04-2022 a las 22:36:05
-- Versión del servidor: 10.1.48-MariaDB-1~bionic
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `DiagnosticoPastoral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` varchar(3000) COLLATE latin1_spanish_ci NOT NULL,
  `NOMBRE` varchar(3000) COLLATE latin1_spanish_ci NOT NULL,
  `EMAIL` varchar(3000) COLLATE latin1_spanish_ci NOT NULL,
  `MOVIMIENTO` varchar(3000) COLLATE latin1_spanish_ci NOT NULL,
  `1.1` decimal(10,0) DEFAULT NULL,
  `1.2` decimal(10,0) DEFAULT NULL,
  `1.3` decimal(10,0) DEFAULT NULL,
  `1.4` decimal(10,0) DEFAULT NULL,
  `1.5` decimal(10,0) DEFAULT NULL,
  `1.6` decimal(10,0) DEFAULT NULL,
  `2.1` decimal(10,0) DEFAULT NULL,
  `2.2` decimal(10,0) DEFAULT NULL,
  `2.3` decimal(10,0) DEFAULT NULL,
  `2.4` decimal(10,0) DEFAULT NULL,
  `2.5` decimal(10,0) DEFAULT NULL,
  `2.6` decimal(10,0) DEFAULT NULL,
  `2.7` decimal(10,0) DEFAULT NULL,
  `2.8` decimal(10,0) DEFAULT NULL,
  `3.1.1` decimal(10,0) DEFAULT NULL,
  `3.1.2` decimal(10,0) DEFAULT NULL,
  `3.1.3` decimal(10,0) DEFAULT NULL,
  `3.1.4` decimal(10,0) DEFAULT NULL,
  `3.2.1` decimal(10,0) DEFAULT NULL,
  `3.2.2` decimal(10,0) DEFAULT NULL,
  `3.2.3` decimal(10,0) DEFAULT NULL,
  `3.2.4` decimal(10,0) DEFAULT NULL,
  `3.2.5` decimal(10,0) DEFAULT NULL,
  `3.2.6` decimal(10,0) DEFAULT NULL,
  `4.1.1` decimal(10,0) DEFAULT NULL,
  `4.1.2` decimal(10,0) DEFAULT NULL,
  `4.1.3` decimal(10,0) DEFAULT NULL,
  `4.1.4` decimal(10,0) DEFAULT NULL,
  `4.2.1` decimal(10,0) DEFAULT NULL,
  `4.2.2` decimal(10,0) DEFAULT NULL,
  `4.2.3` decimal(10,0) DEFAULT NULL,
  `4.2.4` decimal(10,0) DEFAULT NULL,
  `5.1` decimal(10,0) DEFAULT NULL,
  `5.2` decimal(10,0) DEFAULT NULL,
  `5.3` decimal(10,0) DEFAULT NULL,
  `5.4` decimal(10,0) DEFAULT NULL,
  `5.5` decimal(10,0) DEFAULT NULL,
  `5.6` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
