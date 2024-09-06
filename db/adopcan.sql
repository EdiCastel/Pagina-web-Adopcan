-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2024 a las 03:01:46
-- Versión del servidor: 8.0.28
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adopcan`
--
CREATE DATABASE IF NOT EXISTS `adopcan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `adopcan`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_gato`
--

DROP TABLE IF EXISTS `form_gato`;
CREATE TABLE `form_gato` (
  `id_formg` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `colonia` varchar(255) NOT NULL,
  `delegacion` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `cod_postal` varchar(255) NOT NULL,
  `Res_1` varchar(255) NOT NULL,
  `Res_2` varchar(255) NOT NULL,
  `Res_3` varchar(255) NOT NULL,
  `Res_4` varchar(255) NOT NULL,
  `Res_5` varchar(255) NOT NULL,
  `Res_6` varchar(255) NOT NULL,
  `Res_7` varchar(255) NOT NULL,
  `Res_8` varchar(255) NOT NULL,
  `Res_9` varchar(255) NOT NULL,
  `Res_10` varchar(255) NOT NULL,
  `Res_11` varchar(255) NOT NULL,
  `Res_12` varchar(255) NOT NULL,
  `Res_13` varchar(255) NOT NULL,
  `opcion1` varchar(255) NOT NULL,
  `opcion2` varchar(255) NOT NULL,
  `opcion3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_perro`
--

DROP TABLE IF EXISTS `form_perro`;
CREATE TABLE `form_perro` (
  `id_formp` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `edad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `celular` varchar(255) NOT NULL,
  `profesion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `colonia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `delegacion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `cod_postal` varchar(255) NOT NULL,
  `Res_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_7` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_8` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_9` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_10` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_11` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_12` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_13` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_14` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Res_15` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `opcion1` varchar(255) NOT NULL,
  `opcion2` varchar(255) NOT NULL,
  `opcion3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `form_perro`
--

INSERT INTO `form_perro` VALUES(15, 'Edi damian castelan gallardo ', '25', 'mario@gmail.com', '2784567891', 'Profesor', 'Las flores', 'Azcapotzalco', 'Xalapa', '98756', 'Hachiko', '12, 34, 45', 'Si un gato de un año de edad.', 'Si, pero se murió de viejo.', '2000', 'Solo por las mañanas mientras salgo a trabajar.', 'En una cama que estará instalada dentro de la casa.', 'Todas las tardes aproximadamente 2 horas.', 'Con mi tía o con mi madre.', 'Se quedaría con alguno de mis familiares.', 'Por que me recuerda al perro que tenia antes.', 'No, este fue el único que llamo mi atención.', 'Andres Garcia Lopez', '@andresgl', 'Me apareció mientras navegaba por internet.', 'Casa propia', 'Si', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gatos`
--

DROP TABLE IF EXISTS `gatos`;
CREATE TABLE `gatos` (
  `id_gato` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `sexo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `edad` int NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `imagen` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `gatos`
--

INSERT INTO `gatos` VALUES(39, 'Wero', '2022-12-10', 'macho', 1, 'srghtrhytjfjkfdhtdsgdhtr', 'base_img/1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gatos_adoptados`
--

DROP TABLE IF EXISTS `gatos_adoptados`;
CREATE TABLE `gatos_adoptados` (
  `id_gatos_adop` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_adopcion` date NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `edad` int NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros`
--

DROP TABLE IF EXISTS `perros`;
CREATE TABLE `perros` (
  `id_perro` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `sexo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `edad` int NOT NULL,
  `tamaño` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `caracter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `imagen` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `perros`
--

INSERT INTO `perros` VALUES(48, 'Hachiko', '2022-12-10', 'Macho', 1, 'Mediano', 'Noble', 'asdadawdadargsrgsefaesfefafa', 'base_img/2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros_adoptados`
--

DROP TABLE IF EXISTS `perros_adoptados`;
CREATE TABLE `perros_adoptados` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_adopcion` date NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `edad` int NOT NULL,
  `tamaño` varchar(100) NOT NULL,
  `caracter` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_adop`
--

DROP TABLE IF EXISTS `personas_adop`;
CREATE TABLE `personas_adop` (
  `id_p_adop` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `edad` int NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `id_mascota_adop` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` VALUES(11, 'Admin', 'Admin@gmail.com', '$2y$10$ezib1DndcVZN8cvTlcuW0u3fxOV7BUonpv562Oea6fuOzHD11sE4e', 'Null', 'Null', 'Null');
INSERT INTO `usuarios` VALUES(13, 'user', 'usuario@gmail.com', '$2y$10$F0S/Edw8PDk0hcSuN60J2uHw2jBkqpbTek9w.ajwCzkrO9MtmfYRC', 'Edi ', 'Cas', '23423525252');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `form_gato`
--
ALTER TABLE `form_gato`
  ADD PRIMARY KEY (`id_formg`);

--
-- Indices de la tabla `form_perro`
--
ALTER TABLE `form_perro`
  ADD PRIMARY KEY (`id_formp`);

--
-- Indices de la tabla `gatos`
--
ALTER TABLE `gatos`
  ADD PRIMARY KEY (`id_gato`);

--
-- Indices de la tabla `gatos_adoptados`
--
ALTER TABLE `gatos_adoptados`
  ADD PRIMARY KEY (`id_gatos_adop`);

--
-- Indices de la tabla `perros`
--
ALTER TABLE `perros`
  ADD PRIMARY KEY (`id_perro`);

--
-- Indices de la tabla `perros_adoptados`
--
ALTER TABLE `perros_adoptados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas_adop`
--
ALTER TABLE `personas_adop`
  ADD PRIMARY KEY (`id_p_adop`),
  ADD KEY `id_mascota_adop` (`id_mascota_adop`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `form_gato`
--
ALTER TABLE `form_gato`
  MODIFY `id_formg` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `form_perro`
--
ALTER TABLE `form_perro`
  MODIFY `id_formp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `gatos`
--
ALTER TABLE `gatos`
  MODIFY `id_gato` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `gatos_adoptados`
--
ALTER TABLE `gatos_adoptados`
  MODIFY `id_gatos_adop` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perros`
--
ALTER TABLE `perros`
  MODIFY `id_perro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `perros_adoptados`
--
ALTER TABLE `perros_adoptados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas_adop`
--
ALTER TABLE `personas_adop`
  MODIFY `id_p_adop` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personas_adop`
--
ALTER TABLE `personas_adop`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id_mascota_adop`) REFERENCES `perros_adoptados` (`id`),
  ADD CONSTRAINT `personas_adop_ibfk_1` FOREIGN KEY (`id_mascota_adop`) REFERENCES `perros_adoptados` (`id`),
  ADD CONSTRAINT `personas_adop_ibfk_2` FOREIGN KEY (`id_mascota_adop`) REFERENCES `perros_adoptados` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
