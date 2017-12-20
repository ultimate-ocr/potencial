-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2017 a las 15:59:49
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `potencial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `innn`
--

CREATE TABLE `innn` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titulo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gestor` tinyint(1) NOT NULL,
  `subtipo` int(1) NOT NULL,
  `orgfin` varchar(100) CHARACTER SET utf8 NOT NULL,
  `entidades` varchar(150) CHARACTER SET utf8 NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `subvencion` int(6) NOT NULL,
  `invprincipal` varchar(100) NOT NULL,
  `numinv` int(3) NOT NULL,
  `estado` int(1) NOT NULL,
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavia.',
  `lastuptadteid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `innn`
--

INSERT INTO `innn` (`id`, `userid`, `UD`, `creation`, `lastmod`, `titulo`, `gestor`, `subtipo`, `orgfin`, `entidades`, `desde`, `hasta`, `subvencion`, `invprincipal`, `numinv`, `estado`, `infoestado`, `lastuptadteid`) VALUES
(1, 8, 5, '2017-11-21 18:32:48', '2017-11-21 18:32:48', 'bb', 0, 0, 'bb', 'bb', '2017-12-02', '2017-12-02', 2, 'bb', 2, 0, '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `innn`
--
ALTER TABLE `innn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `innn`
--
ALTER TABLE `innn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
