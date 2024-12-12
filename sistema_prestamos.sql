-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2024 a las 08:45:34
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
-- Base de datos: `sistema_prestamos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `dni` varchar(20) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `lugar_trabajo` varchar(255) DEFAULT NULL,
  `lugar_estudio` varchar(255) DEFAULT NULL,
  `telefono1` varchar(20) DEFAULT NULL,
  `telefono2` varchar(20) DEFAULT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `monto` decimal(10,2) DEFAULT NULL,
  `tipo_prestamo` varchar(100) DEFAULT NULL,
  `plazo` int(11) DEFAULT NULL,
  `interes` decimal(5,2) DEFAULT NULL,
  `cuota_mensual` decimal(10,2) DEFAULT NULL,
  `total_a_pagar` decimal(10,2) DEFAULT NULL,
  `fecha_solicitud` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id`, `nombre`, `apellido`, `dni`, `direccion`, `lugar_trabajo`, `lugar_estudio`, `telefono1`, `telefono2`, `referencia`, `monto`, `tipo_prestamo`, `plazo`, `interes`, `cuota_mensual`, `total_a_pagar`, `fecha_solicitud`) VALUES
(9, 'EWD', 'EWFEWFEW', 'FREWF', 'EWF', 'FEWE', 'FEW', 'EW', 'EWF', 'WEW', 500.00, 'FEWFEW', 9, 12.00, 62.22, 560.00, '2024-12-11 05:19:45'),
(10, 'a', 'saas', 'sa', 'sasa', 'sa', 'sa', 'ssa', 'sa', 'sa', 1250.00, 'sasa', 12, 18.00, 122.92, 1475.00, '2024-12-12 07:18:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
