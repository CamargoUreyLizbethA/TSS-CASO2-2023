-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2023 a las 22:54:24
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caso2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `nombreEmpresa` varchar(150) NOT NULL,
  `nombreCompleto` varchar(255) NOT NULL,
  `correoElectronico` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `experienciaInversion` enum('Novato','Intermedio','Experto') NOT NULL,
  `toleranciaRiesgo` enum('baja','medio','alto') NOT NULL,
  `conocimientosFinancieros` tinyint(1) NOT NULL,
  `objetivosCortoPlazo` text DEFAULT NULL,
  `objetivosLargoPlazo` text DEFAULT NULL,
  `activosInteresados` set('Acciones','BienesRaices','Bonos','ArteColeccionables','Emprendimiento','Otro') NOT NULL,
  `plazoInversion` int(11) DEFAULT NULL,
  `ingresosMensuales` int(11) DEFAULT NULL,
  `gastosMensuales` int(11) DEFAULT NULL,
  `deudasExistentes` int(11) DEFAULT NULL,
  `conoceNegocio` tinyint(1) NOT NULL,
  `investigadoIndustria` tinyint(1) NOT NULL,
  `comentariosAdicionales` text DEFAULT NULL,
  `mediaI` int(11) NOT NULL,
  `desviacionEI` int(11) NOT NULL,
  `mediaF` int(11) NOT NULL,
  `desviacionEF` int(11) NOT NULL,
  `aceptaTerminos` tinyint(1) NOT NULL,
  `numEscenarios` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id`, `nombreEmpresa`, `nombreCompleto`, `correoElectronico`, `edad`, `experienciaInversion`, `toleranciaRiesgo`, `conocimientosFinancieros`, `objetivosCortoPlazo`, `objetivosLargoPlazo`, `activosInteresados`, `plazoInversion`, `ingresosMensuales`, `gastosMensuales`, `deudasExistentes`, `conoceNegocio`, `investigadoIndustria`, `comentariosAdicionales`, `mediaI`, `desviacionEI`, `mediaF`, `desviacionEF`, `aceptaTerminos`, `numEscenarios`) VALUES
(7, 'Viva', 'Lizbeth Camargo', 'camargolizbeth@gmail.com', 21, 'Intermedio', 'medio', 1, 'simular para pocos años', 'Evaluar si puedo invertir  en 5 años o mas', 'Bonos', 5, 1000, 500, 0, 1, 1, 'Llegar a tener informacion ', 100000, 5000, 30000, 3000, 0, 60),
(8, 'negocio de comida', 'prueba', 'admin@admin.com', 23, 'Novato', 'baja', 0, '', '', 'Acciones', 5, 3000, 2000, 0, 1, 0, '', 10, 10, 10, 10, 0, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
