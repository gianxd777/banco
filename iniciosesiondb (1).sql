-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2024 a las 08:44:51
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
-- Base de datos: `iniciosesiondb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `NombreCompleto` varchar(50) NOT NULL,
  `Clave` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Usuario`, `Contraseña`, `NombreCompleto`, `Clave`) VALUES
(117, 'Juan', 'hD9a8b2v', 'Juan Pérez García', NULL),
(118, 'Ana', 'c5D6f7kR', 'Ana García López', NULL),
(119, 'Pedro', 'jR2wF5sP', 'Pedro López Martínez', NULL),
(120, 'María', '9yB2tD4u', 'María Rodríguez Sánchez', NULL),
(121, 'Luis', 't3Fv5Xz8', 'Luis Fernández Gómez', NULL),
(122, 'Laura', 'R7tV8pK4', 'Laura Martínez Herrera', NULL),
(123, 'Carlos', 'sB8i5zW9', 'Carlos González Ruiz', NULL),
(124, 'Marta', 'e6Xl7pQ2', 'Marta Sánchez Díaz', NULL),
(125, 'José', 'Q7uK4gK9', 'José Díaz Pérez', NULL),
(126, 'Lucía', 'v7M9hN5u', 'Lucía Pérez García', NULL),
(127, 'Tomás', 'f2E9aK4b', 'Tomás Romero Torres', NULL),
(128, 'Ana', 'xC7oH2z9', 'Ana López Martínez', NULL),
(129, 'David', 'd3L8oM7f', 'David García Ruiz', NULL),
(130, 'Rosa', 'zV8t7F9j', 'Rosa Martínez Hernández', NULL),
(131, 'Miguel', 'vJ3yL9wM', 'Miguel Hernández López', NULL),
(132, 'Eva', 'c6G3wT7z', 'Eva Sánchez Fernández', NULL),
(133, 'Alberto', 'g8F9rD6a', 'Alberto Fernández Ruiz', NULL),
(134, 'Isabel', 'f7P9mD8y', 'Isabel González Gómez', NULL),
(135, 'Antonio', 'b6R8gS7y', 'Antonio Pérez Sánchez', NULL),
(136, 'Carmen', 'm5J9tA8w', 'Carmen Rodríguez Díaz', NULL),
(137, 'Javier', 'pR3oW9b5', 'Javier López Torres', NULL),
(138, 'Teresa', 'xH9aB3w7', 'Teresa García González', NULL),
(139, 'Fernando', 'gY2pN9q5', 'Fernando Martínez Ruiz', NULL),
(140, 'Sara', 'vD8eF7x0', 'Sara González Herrera', NULL),
(141, 'Manuel', 'cY3bR2u9', 'Manuel Hernández Gómez', NULL),
(142, 'Claudia', 'nX4aT7y3', 'Claudia Sánchez López', NULL),
(143, 'Daniel', 'pW9kL7h2', 'Daniel Díaz Fernández', NULL),
(144, 'Paula', 'yT4zQ9v6', 'Paula Rodríguez Ruiz', NULL),
(145, 'Roberto', 'mB5wF8x4', 'Roberto Pérez Sánchez', NULL),
(146, 'Alba', 'gJ3tF2sR', 'Alba Martínez Herrera', NULL),
(147, 'Jorge', 'bV7mT6yZ', 'Jorge López González', NULL),
(148, 'Patricia', 'vR2gN9z7', 'Patricia Fernández Gómez', NULL),
(149, 'Ricardo', 'zW7gQ2v6', 'Ricardo Sánchez Ruiz', NULL),
(150, 'Raquel', 'h6XbM8s5', 'Raquel García Pérez', NULL),
(151, 'Antonio', 'kF9wR5m2', 'Antonio Romero López', NULL),
(152, 'Sandra', 'jV3yL9uF', 'Sandra González Martínez', NULL),
(153, 'José Luis', 'pM2wV8g5', 'José Luis Fernández Rodríguez', NULL),
(154, 'Inés', 'oN7tW3h6', 'Inés Rodríguez Gómez', NULL),
(155, 'Carlos', 'rV8aQ2f5', 'Carlos Pérez Ruiz', NULL),
(156, 'María', 'eL7uR9w1', 'María García Sánchez', NULL),
(157, 'Ramón', 'jB8gF6d3', 'Ramón Martínez González', NULL),
(158, 'Esther', 'oV9rF7z2', 'Esther Sánchez Rodríguez', NULL),
(159, 'Victor', 'kW5uQ9g3', 'Victor González Pérez', NULL),
(160, 'Joaquín', 'cZ2rB5t6', 'Joaquín López Ruiz', NULL),
(161, 'Lola', 'pJ8tY6m4', 'Lola Fernández Martínez', NULL),
(162, 'Berta', 'vH3fX5z8', 'Berta García Romero', NULL),
(163, 'Eduardo', 'hL6dT9p5', 'Eduardo Martínez Díaz', NULL),
(164, 'Martín', 'cZ9sF3k2', 'Martín Rodríguez Torres', NULL),
(165, 'Elena', 'yV5jF8t1', 'Elena Sánchez Gómez', NULL),
(166, 'Luis', 'vN8yJ2d5', 'Luis García Fernández', NULL),
(167, 'Isabel', 'dG3tF9b8', 'Isabel López Pérez', NULL),
(168, 'Diego', 'pF9wR4y8', 'Diego González Sánchez', NULL),
(169, 'Julia', 'bM7zV2d3', 'Julia Pérez Herrera', NULL),
(170, 'Pedro', 'yL6wG5t7', 'Pedro Rodríguez García', NULL),
(171, 'Álvaro', 'rW3gK9j8', 'Álvaro Fernández Gómez', NULL),
(172, 'Paola', 'bM8yT7n5', 'Paola Sánchez Martínez', NULL),
(173, 'Francisco', 'dR6tL3w4', 'Francisco García Ruiz', NULL),
(174, 'Sofía', 'vH2mY9d5', 'Sofía Martínez Fernández', NULL),
(175, 'Luis', 'cT9vP7k4', 'Luis Romero López', NULL),
(176, 'Carla', 'gY3rL6w9', 'Carla González Torres', NULL),
(177, 'Ángel', 'yX2jN7r5', 'Ángel Pérez Ruiz', NULL),
(178, 'Fabiola', 'wR9sL5t3', 'Fabiola Sánchez Pérez', NULL),
(179, 'José', 'vN8zW4k2', 'José García Gómez', NULL),
(180, 'Laura', 'hY3dN9w1', 'Laura Rodríguez Sánchez', NULL),
(181, 'Raúl', 'mP5rL2k9', 'Raúl González Martínez', NULL),
(182, 'Sandra', 'eD7pF9b6', 'Sandra Romero Ruiz', NULL),
(183, 'Felipe', 'pV3oY8z9', 'Felipe Martínez González', NULL),
(184, 'Carolina', 'mH9bV2t4', 'Carolina Pérez García', NULL),
(185, 'David', 'oL6gT9r7', 'David Romero Fernández', NULL),
(186, 'Leticia', 'cY8vP4r5', 'Leticia Sánchez Ruiz', NULL),
(187, 'Sergio', 'rN9zQ6w2', 'Sergio López González', NULL),
(188, 'Alejandra', 'fP2gX8r7', 'Alejandra Fernández Pérez', NULL),
(189, 'Antonio', 'pL3rV6k9', 'Antonio García Romero', NULL),
(190, 'Mercedes', 'yT9vM4r5', 'Mercedes González Sánchez', NULL),
(191, 'Javier', 'bK8tD3w9', 'Javier Pérez Rodríguez', NULL),
(192, 'Esteban', 'gV7uN9r2', 'Esteban Romero Pérez', NULL),
(193, 'Pablo', 'tR9eQ3d8', 'Pablo Martínez Ruiz', NULL),
(194, 'Margarita', 'zJ5dX3r7', 'Margarita Sánchez Fernández', NULL),
(195, 'David', 'pN8rB2d9', 'David Pérez Torres', NULL),
(196, 'Luis', 'cV6wF3r8', 'Luis González Gómez', NULL),
(197, 'Natalia', 'bF3vN7r2', 'Natalia Romero Ruiz', NULL),
(198, 'José', 'vW8jT5b6', 'José Rodríguez García', NULL),
(199, 'Raquel', 'tG9dX7f3', 'Raquel Pérez Gómez', NULL),
(200, 'Andrés', 'yP6rM3w5', 'Andrés Sánchez López', NULL),
(201, 'Juan Carlos', 'kD9bV7r2', 'Juan Carlos González Martínez', NULL),
(202, 'Eva', 'jF7zK3w9', 'Eva Pérez Rodríguez', NULL),
(203, 'Jorge', 'wH3fY8r6', 'Jorge Sánchez García', NULL),
(204, 'Antonio', 'rT2dF5g9', 'Antonio Martínez López', NULL),
(205, 'María', 'eD7tM2w5', 'María Fernández Rodríguez', NULL),
(206, 'Carlos', 'tR9eQ3d8', 'Carlos Romero Ruiz', NULL),
(207, 'Ana', 'wK9gT2y5', 'Ana González Pérez', NULL),
(208, 'Raúl', 'mJ6tD7f4', 'Raúl Pérez Fernández', NULL),
(209, 'Verónica', 'bX3oW5r9', 'Verónica Sánchez López', NULL),
(210, 'Mario', 'tV8fK3m7', 'Mario González Sánchez', NULL),
(211, 'Mercedes', 'yR9vL5g2', 'Mercedes Pérez Martínez', NULL),
(212, 'Luis', 'jN4mY7v2', 'Luis Rodríguez Gómez', NULL),
(213, 'Lucía', 'sB2rG9p7', 'Lucía Fernández Pérez', NULL),
(214, 'Juan', 'pL8yX3w5', 'Juan González Romero', NULL),
(215, 'Pedro', 'cV7dF9z4', 'Pedro Sánchez González', NULL),
(216, 'Olga', 'mB5kT2g9', 'Olga Fernández Rodríguez', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
