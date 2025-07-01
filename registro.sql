-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2025 a las 21:29:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `borrar`
--

CREATE TABLE `borrar` (
  `id` int(30) UNSIGNED NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `borrar`
--

INSERT INTO `borrar` (`id`, `user`) VALUES
(1, 'qq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(50) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pw` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `user`, `pw`, `email`) VALUES
(1, 'zzz', 'zzz', 'd4FE13yTs6opi/F5/tUBK1TTTFQ+4YAecyw/+jbdxEQ=', 'ballesterosmarisela78@gmail.com'),
(2, 'aa', 'aa', 'V2jXvruLHtnhiFvpGif/tx7lCOU9qrwDiRF5+zV3KrA=', 'ballesterosmarisela78@gmail.com'),
(3, 'dddd', 'dd', 'kXb2ZUbYxiJyHm8XiIn6F/CBCuDpP1waw05iIeV9wPM=', 'ballesterosmarisela78@gmail.com'),
(5, 'hh', 'hh', 'tgpAIF1HDsOrTmmcfJystjP+WCixj4mtpYrWuHYOMrA=', 'ballesterosmarisela78@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `borrar`
--
ALTER TABLE `borrar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `borrar`
--
ALTER TABLE `borrar`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
