-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2023 a las 23:47:27
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diagnosticopastoral`
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

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `EMAIL`, `MOVIMIENTO`, `INSERTADO`, `MODIFICADO`, `1.1`, `1.2`, `1.3`, `1.4`, `1.5`, `1.6`, `2.1`, `2.2`, `2.3`, `2.4`, `2.5`, `2.6`, `2.7`, `2.8`, `3.1.1`, `3.1.2`, `3.1.3`, `3.1.4`, `3.2.1`, `3.2.2`, `3.2.3`, `3.2.4`, `3.2.5`, `3.2.6`, `4.1.1`, `4.1.2`, `4.1.3`, `4.1.4`, `4.2.1`, `4.2.2`, `4.2.3`, `4.2.4`, `5.1`, `5.2`, `5.3`, `5.4`, `5.5`, `5.6`) VALUES
('bb23f313d421f9ac3c4cb17a43ff7ae8c6ba63ad', 'asdasd', 'adrian.pisabarro.garcia@gmail.com', 'Escolapios', '2022-08-10 16:05:53', '2022-08-10 16:06:36', '3.00', '1.00', '1.00', '3.00', '1.00', '1.00', '3.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '3.00', '1.00', '3.00', '3.00', '3.00', '1.00', '1.00', '1.00', '1.00', '3.00', '3.00', '1.00', '3.00', '3.00', '3.00', '1.00', '3.00', '3.00', '3.00', '1.00', '3.00', '1.00', '1.00', '1.00'),
('f9081d0f06cef358f8a2a3b54548692fae2c5dde', 'Prueba', 'adrian.pisabarro.garcia@gmail.com', 'Prueba', '2022-09-07 11:18:06', '2022-09-07 11:18:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('6a3b8cd8d09e1589c4d9aebbe3a113fed4897012', 'Adrián', 'canva@rpj.es', 'Escolapios', '2022-09-08 08:22:12', '2022-09-08 08:22:32', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('f995560784a32c551096f02388b93b1b1680870b', 'Adrián', 'apisabarro@sanviatorpastoral.es', 'Escolapios', '2022-09-08 09:19:27', '2022-09-08 09:20:33', '1.75', '0.25', '1.00', '0.75', '0.00', '0.50', '1.75', '0.00', '1.00', '0.25', '0.25', '0.25', '0.00', '0.50', '1.75', '0.25', '0.75', '1.75', '0.75', '0.50', '0.00', '0.50', '0.25', '0.75', '1.75', '0.25', '0.00', '0.75', '1.75', '0.25', '0.00', '1.75', '0.75', '0.00', '0.75', '0.50', '0.25', '0.50'),
('aaecca3338bf56f43551c77f98ebeb25f86740f1', 'Adrián', 'apisabarro@ibaiscanbit.com', 'adsads', '2022-09-08 09:28:43', '2022-09-08 09:29:55', '3.00', '1.00', '1.00', '3.00', '1.00', '1.00', '3.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '1.00', '3.00', '1.00', '3.00', '3.00', '3.00', '1.00', '1.00', '1.00', '1.00', '3.00', '3.00', '1.00', '3.00', '3.00', '3.00', '1.00', '3.00', '3.00', '3.00', '1.00', '3.00', '1.00', '1.00', '0.00'),
('d36063ae7f34297f9b52f0923212c6e31359ef4b', 'jaime', 'jaime@asd.es', 'jaime', '2023-05-05 15:59:59', '2023-05-05 16:00:41', '0.75', '0.00', '0.50', '1.75', '0.25', '0.50', '0.00', '0.50', '1.00', '0.00', '0.50', '0.25', '1.00', '1.00', '1.75', '0.25', '1.75', '3.00', '1.75', '0.25', '1.00', '0.50', '0.25', '1.75', '3.00', '0.50', '3.00', '3.00', '3.00', '0.50', '1.75', '0.75', '3.00', '0.50', '0.75', '0.50', '0.50', '1.00'),
('34b5d9262994f82263f005782323bb108d756313', 'adrian', 'prueba@prueba.es', 'Escolapios', '2023-06-25 17:15:16', '2023-06-25 17:15:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('e436845128ebbe7e1580cf7761b96dcd4cd4c222', 'Adrián', 'Pisabarro@asd.es', 'asdsasd', '2023-06-25 20:05:57', '2023-06-25 20:06:18', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('50f81bc8a7d8bfc327f2d88bc2babf87b4d245e6', 'adrian', 'asd@asd.es', 'asd@asd', '2023-06-25 20:07:06', '2023-06-25 20:07:27', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
('e60caddd3ef61b9cf9e88b598d4d3c6ac07c1b95', 'ad', 'asd@asd.es', 'asdasd', '2023-07-01 14:09:22', '2023-07-01 14:09:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('9110070b87c31a3f069f93be752b64f67d1e1622', 'asd', 'asd@asd.es', 'asd', '2023-07-01 16:00:19', '2023-07-01 16:01:26', '3.00', '0.50', '0.25', '1.75', '0.50', '1.00', '1.75', '0.25', '1.00', '0.50', '0.25', '1.00', '0.25', '1.00', '3.00', '0.50', '0.75', '3.00', '3.00', '0.25', '1.00', '0.25', '1.00', '0.75', '3.00', '0.50', '1.75', '3.00', '3.00', '0.50', '3.00', '1.75', '3.00', '0.50', '3.00', '0.50', '0.00', '1.00'),
('cc880041fadd8b379ee058993f0d5a210e7d2c8f', 'adrian', 'asd@asd.es', 'asd', '2023-07-02 11:23:28', '2023-07-02 11:24:20', '3.00', '0.50', '0.50', '3.00', '1.00', '0.50', '3.00', '0.50', '0.25', '1.00', '0.50', '0.25', '0.50', '0.50', '3.00', '0.50', '3.00', '1.75', '3.00', '0.50', '1.00', '0.50', '1.00', '1.75', '3.00', '0.50', '3.00', '1.75', '3.00', '0.50', '3.00', '1.75', '3.00', '0.50', '1.75', '1.00', '1.00', '0.50'),
('5613f13cb96a340ecb7257a5913f7a4d37a91ed5', 'asd', 'asd@asd.es', 'asd', '2023-07-02 12:22:58', '2023-07-02 12:23:17', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.50'),
('0b624faf03b6a9c7480d598207e431db9b4b6120', 'sdf', 'sdf@asd.es', 'asdad', '2023-07-02 12:30:18', '2023-07-02 12:30:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('fe30e4f73d676240301a1616f8a958e38b5a8517', 'asd', 'asd@asd.es', 'asdasd', '2023-07-02 13:20:33', '2023-07-02 13:20:37', '0.00', '0.00', '1.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
