-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2020 a las 18:05:44
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `listas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crearlista`
--

CREATE TABLE `crearlista` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Teféfono` int(50) NOT NULL,
  `Profesión` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tecnología favorita` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crearlista`
--
ALTER TABLE `crearlista`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `crearlista`
--
ALTER TABLE `crearlista`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
