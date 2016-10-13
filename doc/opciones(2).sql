-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2016 a las 21:46:06
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `opciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `idopcion` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `externo` tinyint(1) NOT NULL,
  `padre` int(11) DEFAULT NULL,
  `destacado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`idopcion`, `orden`, `nombre`, `descripcion`, `estado`, `url`, `externo`, `padre`, `destacado`) VALUES
(1, 1, 'Diario Occidente', 'Descripción', 1, 'http://occidente.co', 1, 0, 0),
(3, 2, 'Periódico El pais', 'Noticias del Valle', 1, 'http://www.elpais.com.co/elpais/', 1, 3, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`idopcion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `idopcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
