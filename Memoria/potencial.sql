-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2018 a las 13:42:06
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
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `cargo` text NOT NULL,
  `UD` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `groupid` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `groupid`, `user`, `name`, `surname`, `texto`, `creation`, `lastmod`) VALUES
(451, 12, 0, 'Antonio Natale', 'Consalvo', 'Ha ELIMINADO todos los comentarios de este grupo', '2016-11-13 00:59:49', '0000-00-00 00:00:00'),
(452, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-11-13 01:10:52', '0000-00-00 00:00:00'),
(453, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-11-13 01:10:52', '0000-00-00 00:00:00'),
(454, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-11-13 01:10:52', '0000-00-00 00:00:00'),
(455, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-11-13 01:10:52', '0000-00-00 00:00:00'),
(456, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha AÃ±adido una entrada en <i>ParticipaciÃ³n en Proyectos de I+D financiados en Convocatorias pÃºblicas</i>', '2016-11-13 01:14:14', '0000-00-00 00:00:00'),
(457, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Modificado una entrada en <i>ParticipaciÃ³n en Proyectos de I+D financiados en Convocatorias pÃºblicas</i>', '2016-11-13 01:15:14', '0000-00-00 00:00:00'),
(458, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Modificado una entrada en <i>ParticipaciÃ³n en Proyectos de I+D financiados en Convocatorias pÃºblicas</i>', '2016-11-13 01:15:23', '0000-00-00 00:00:00'),
(459, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Modificado una entrada en <i>ParticipaciÃ³n en Proyectos de I+D financiados en Convocatorias pÃºblicas</i>', '2016-11-13 01:15:36', '0000-00-00 00:00:00'),
(461, 11, 13, 'Rita', 'Consalvo', 'Fghu', '2016-11-18 19:45:39', '0000-00-00 00:00:00'),
(462, 11, 0, 'Rita', 'Consalvo', 'Se ha AÃ±adido una entrada en <i>EdiciÃ³n/revisiÃ³n de revistas cientÃ­ficas</i>', '2016-11-18 19:45:52', '0000-00-00 00:00:00'),
(479, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(480, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(481, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(482, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(483, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(484, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(485, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(486, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(487, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(488, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(489, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(490, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(491, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(492, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(493, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(494, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(495, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(496, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(497, 12, 0, 'Antonio Natale', 'Consalvo', 'Se ha Subido un BIBTEX en <i>Publicaciones o Documentos CientÃ­fico-TÃ©cnicos</i>', '2016-12-18 10:20:23', '0000-00-00 00:00:00'),
(508, 20, 44, 'Demo', 'DemostraciÃ³n', 'Acabo de Crear el Grupo', '2016-12-18 10:37:38', '0000-00-00 00:00:00'),
(529, 15, 0, 'Juan', 'PÃ©rez LÃ³pez', 'Ha ELIMINADO todos los comentarios de este grupo', '2017-01-08 15:21:14', '0000-00-00 00:00:00'),
(530, 15, 0, 'Juan', 'PÃ©rez LÃ³pez', 'Se ha Cerrado el CV:fskdpgmdkl', '2017-01-08 15:21:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `da`
--

CREATE TABLE `da` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `UD` float NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(250) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `archivo` varchar(200) NOT NULL,
  `lastid` int(9) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `da`
--

INSERT INTO `da` (`id`, `userid`, `titulo`, `UD`, `subtipo`, `estado`, `infoestado`, `archivo`, `lastid`) VALUES
(1, 59, 'Unidades docentes: 8', 8, 1, 1, 'Correcto', '', 1),
(2, 8, 'Unidades Docentes: 12', 12, 2, 1, 'Correcto', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db`
--

CREATE TABLE `db` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `db`
--

INSERT INTO `db` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`) VALUES
(5, 59, 'adios', 0, 5, 0, '', 1),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dc`
--

CREATE TABLE `dc` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `dc`
--

INSERT INTO `dc` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`) VALUES
(5, 8, 'adios', 0, 5, 0, '', 1),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dd`
--

CREATE TABLE `dd` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `dd`
--

INSERT INTO `dd` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`) VALUES
(5, 8, 'adios', 0, 5, 0, '', 1),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `de`
--

CREATE TABLE `de` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(500) CHARACTER SET utf8 NOT NULL,
  `UD` float NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `codirectores` text CHARACTER SET utf8 NOT NULL,
  `universidad` varchar(100) NOT NULL,
  `anno` int(4) NOT NULL,
  `calificacion` float NOT NULL,
  `premios` varchar(250) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(150) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `de`
--

INSERT INTO `de` (`id`, `userid`, `titulo`, `UD`, `subtipo`, `codirectores`, `universidad`, `anno`, `calificacion`, `premios`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(106, 59, 'Corrige esta toleton', 5, 1, '', '', 0, 0, '', 1, 'OK!', 0, 'archivos/de59Abonare PFC.pdf'),
(107, 59, 'Prueba estado', 5, 1, '', '', 0, 0, '', 0, 'No ha sido evaluado todavia.', 1, ''),
(108, 59, '', 5, 2, '', '', 0, 0, '', 0, 'No ha sido evaluado todavia.', 1, 'archivos/de59dni + ss - Victor Rodriguez.docx'),
(109, 59, '', 5, 1, '', '', 0, 0, '', 0, 'No ha sido evaluado todavia.', 1, ''),
(110, 61, 'prueba', 5, 1, '', '', 0, 0, '', 1, 'No ha sido evaluado todavia.', 8, ''),
(111, 59, '', 5, 1, '', '', 0, 0, '', 0, 'No ha sido evaluado todavia.', 1, ''),
(112, 59, 'tÃ­tulo', 5, 1, '', '', 0, 0, '', 0, 'No ha sido evaluado todavia.', 1, ''),
(113, 59, 'VÃƒÂ­ctor', 5, 1, '', '', 0, 0, '', 0, 'No ha sido evaluado todavia.', 1, ''),
(114, 59, 'VÃ­ctor', 5, 1, '', '', 0, 0, '', 0, 'No ha sido evaluado todavia.', 1, ''),
(115, 59, 'VÃ­ctor', 5, 1, '', '', 0, 0, '', 0, 'No ha sido evaluado todavia.', 1, ''),
(116, 59, 'Víctor', 5, 1, '', '', 0, 0, '', 0, 'No ha sido evaluado todav&iacutea.', 1, ''),
(117, 151, 'ESTÃ‰Ã‘E', 5, 1, '', '', 0, 0, '', 0, 'No ha sido evaluado todav&iacutea.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dff`
--

CREATE TABLE `dff` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(500) CHARACTER SET utf8 NOT NULL,
  `UD` float NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `codirectores` text CHARACTER SET utf8 NOT NULL,
  `universidad` varchar(100) NOT NULL,
  `anno` int(4) NOT NULL,
  `calificacion` float NOT NULL,
  `doctoradoeuropeo` tinyint(1) NOT NULL,
  `menciondecalidad` tinyint(1) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(100) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `dff`
--

INSERT INTO `dff` (`id`, `userid`, `titulo`, `UD`, `subtipo`, `codirectores`, `universidad`, `anno`, `calificacion`, `doctoradoeuropeo`, `menciondecalidad`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(10, 8, 'jabugo', 5, 0, 'aa', 'aa', 1, 1, 1, 0, 0, 'No ha sido evaluado todavía.', 88, ''),
(11, 8, 'esta es la ultima prueba en esta tabla coÃ±o', 5, 0, 'kjibkkjb', 'kbkbk', 2015, 10, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(12, 8, 'bb', 5, 0, 'kjibkkjb', 'kbkbk', 2015, 10, 1, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(13, 8, 'esta es la ultima prueba en esta tabla coÃ±o', 5, 0, 'kjibkkjb', 'kbkbk', 2015, 10, 1, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(14, 8, 'esta es la ultima prueba en esta tabla coÃ±o', 5, 0, 'kjibkkjb', 'kbkbk', 2015, 10, 1, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(15, 8, 'holaaaaaaaaaaaa', 5, 0, 'kjibkkjb', 'kbkbk', 2015, 10, 1, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(16, 8, 'esta es la ultima prueba en esta tabla coÃ±o', 5, 0, 'kjibkkjb', 'kbkbk', 2015, 10, 0, 1, 0, 'No ha sido evaluado todavía.', 1, ''),
(17, 8, 'xsfsdf', 5, 0, 'kjibkkjb', 'kbkbk', 2015, 10, 1, 1, 0, 'No ha sido evaluado todavía.', 1, ''),
(18, 59, 'corrige esta tolete', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(19, 59, 'archivo', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(20, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(21, 59, 'archivo', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(22, 59, 'archivo', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(23, 59, 'archivo', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(24, 59, 'archivo', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(25, 59, 'archivo', 5, 0, '', '', 0, 0, 1, 1, 0, 'No ha sido evaluado todavía.', 1, ''),
(26, 59, 'archivo', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(27, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(28, 59, 'ar', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(29, 59, 'siii', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59'),
(30, 59, 'archivo', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(31, 59, 'archi', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59titulos.txt'),
(32, 59, 'archi', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59titulos.txt'),
(33, 59, 'archi', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59'),
(34, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59'),
(35, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59'),
(36, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59'),
(37, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59'),
(38, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59'),
(39, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59'),
(40, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59'),
(41, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(42, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(43, 59, 'jj', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(44, 59, 'jj', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dff59titulos.txt'),
(45, 59, '', 5, 0, '', '', 0, 0, 0, 1, 0, 'No ha sido evaluado todavía.', 1, ''),
(46, 59, '', 5, 0, '', '', 0, 0, 0, 0, 0, 'No ha sido evaluado todavía.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dg`
--

CREATE TABLE `dg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `autores` varchar(300) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `pfin` int(11) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `isbn` int(11) NOT NULL,
  `anno` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dg`
--

INSERT INTO `dg` (`id`, `userid`, `UD`, `subtipo`, `creation`, `lastmod`, `lastupdateid`, `titulo`, `autores`, `tipo`, `pin`, `pfin`, `editorial`, `isbn`, `anno`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(1, 8, 4, 0, '2017-11-09 13:06:02', '0000-00-00 00:00:00', 0, 'esta tambien', '11', '11', 11, 11, '11', 11, 11, 0, 'como nooo', 1, 'cualquiercosapero no furual'),
(7, 8, 4, 0, '2017-11-21 12:53:01', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(8, 8, 4, 0, '2017-11-22 12:05:57', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(9, 8, 4, 0, '2017-11-22 12:06:28', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(10, 8, 4, 0, '2017-11-22 13:02:26', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(11, 8, 4, 0, '2017-11-22 13:02:38', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(12, 8, 4, 0, '2017-11-24 09:39:54', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(13, 8, 4, 0, '2017-11-24 09:41:37', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(14, 8, 4, 0, '2017-11-24 09:42:08', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(15, 8, 5, 0, '2017-11-30 10:37:18', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(16, 8, 5, 0, '2017-11-30 10:37:42', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(17, 8, 5, 0, '2017-11-30 10:37:59', '0000-00-00 00:00:00', 0, '11', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(18, 8, 5, 0, '2017-12-05 13:41:04', '0000-00-00 00:00:00', 0, 'ohsdfoh', 'pojoijo', 'oijoij', 980, 9809, '', 0, 2012, 0, 'No ha sido evaluado todavía.', 1, ''),
(19, 8, 5, 0, '2017-12-05 13:43:14', '0000-00-00 00:00:00', 0, 'aaaaaaaaaaaa', '11', '11', 11, 11, '', 0, 11, 0, 'No ha sido evaluado todavía.', 1, ''),
(20, 8, 5, 0, '2017-12-05 13:44:31', '0000-00-00 00:00:00', 0, 'bbbbbbbbbbb', '11', '11', 11, 11, '', 11, 11, 0, 'No ha sido evaluado todavía.', 1, ''),
(21, 8, 5, 0, '2017-12-05 13:45:36', '0000-00-00 00:00:00', 0, 'esta sÃ', '11', '11', 11, 11, '11', 11, 11, 0, 'No ha sido evaluado todavía.', 1, ''),
(22, 59, 5, 0, '2017-12-13 11:51:12', '0000-00-00 00:00:00', 0, 'archivo', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(23, 59, 5, 0, '2017-12-13 11:53:05', '0000-00-00 00:00:00', 0, 'archivo', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, ''),
(24, 59, 5, 0, '2017-12-13 12:47:44', '0000-00-00 00:00:00', 0, 'jj', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, 'archivos/dg59titulos4.txt'),
(25, 59, 5, 0, '2017-12-13 12:47:53', '0000-00-00 00:00:00', 0, 'jj', '', '', 0, 0, '', 0, 0, 0, 'No ha sido evaluado todavía.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dh`
--

CREATE TABLE `dh` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `participacion` varchar(25) NOT NULL,
  `regional` varchar(20) NOT NULL,
  `lugar` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dh`
--

INSERT INTO `dh` (`id`, `userid`, `UD`, `subtipo`, `creation`, `lastmod`, `lastupdateid`, `titulo`, `participacion`, `regional`, `lugar`, `fecha`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(1, 8, 4, 0, '2017-11-09 13:06:02', '0000-00-00 00:00:00', 0, '11', '11', '11', '11', '1111-11-11', 1, 'No ha sido evaluado todavía.', 1, ''),
(2, 8, 4, 0, '2017-11-21 12:37:10', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(3, 8, 4, 0, '2017-11-21 12:44:02', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(4, 8, 4, 0, '2017-11-21 12:46:19', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(5, 8, 4, 0, '2017-11-21 12:48:54', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(6, 8, 4, 0, '2017-11-21 12:52:17', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(7, 8, 4, 0, '2017-11-21 12:53:01', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(8, 8, 4, 0, '2017-11-22 12:05:57', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(9, 8, 4, 0, '2017-11-22 12:06:28', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(10, 13, 4, 0, '2017-11-22 13:02:26', '0000-00-00 00:00:00', 0, 'jeje', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(11, 8, 4, 0, '2017-11-22 13:02:38', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(12, 8, 4, 0, '2017-11-24 09:39:54', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(13, 8, 4, 0, '2017-11-24 09:41:37', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(14, 8, 4, 0, '2017-11-24 09:42:08', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(15, 8, 5, 0, '2017-11-30 10:40:41', '0000-00-00 00:00:00', 0, 'esta es la ultima prueba en esta tabla coÃ±o', 'Si', '35212', 'Telde', '2017-11-30', 0, 'No ha sido evaluado todavía.', 1, ''),
(16, 59, 5, 0, '2017-12-14 13:04:56', '0000-00-00 00:00:00', 0, '', '', '', '', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `di`
--

CREATE TABLE `di` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '1',
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `autores` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `revista` varchar(250) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `volumen` varchar(10) CHARACTER SET latin1 NOT NULL,
  `pin` varchar(25) CHARACTER SET latin1 NOT NULL,
  `pfin` varchar(25) CHARACTER SET latin1 NOT NULL,
  `fecha` date NOT NULL,
  `impacto` varchar(30) NOT NULL,
  `citas` varchar(20) NOT NULL,
  `acta` varchar(15) NOT NULL,
  `editorial` varchar(250) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL,
  `lugar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `di`
--

INSERT INTO `di` (`id`, `userid`, `UD`, `subtipo`, `creation`, `lastmod`, `lastupdateid`, `autores`, `titulo`, `revista`, `isbn`, `clave`, `volumen`, `pin`, `pfin`, `fecha`, `impacto`, `citas`, `acta`, `editorial`, `estado`, `infoestado`, `lastid`, `archivo`, `lugar`) VALUES
(1, 8, 4, 1, '2017-11-23 16:47:41', '0000-00-00 00:00:00', 0, '11', '11', '11', '11', '11', '', '1', '11', '0011-11-11', '11', '11', '11', '11', 0, 'No ha sido evaluado todavía.', 1, '', '11'),
(2, 8, 4, 0, '2017-11-24 09:50:07', '0000-00-00 00:00:00', 0, 'Giorgio', 'pjsdpspspspsp', 'knlkn', '23424', 'lkmlk', '8908k', '35212', '098', '2017-12-31', 'lkmlkm', 'lkmlkm', 'lkmlkm', 'lkmlkm', 0, 'No ha sido evaluado todavía.', 1, '', 'Telde'),
(3, 13, 4, 0, '2017-11-24 10:07:52', '0000-00-00 00:00:00', 0, 'yo', 'jk', 'abc', '1111', '1111', '11111', '35212222', '999', '2016-11-30', 'abc', 'abc', 'abc', 'abc', 0, 'No ha sido evaluado todavía.', 1, '', 'abc'),
(4, 8, 5, 2, '2017-11-30 10:43:11', '0000-00-00 00:00:00', 0, 'Giorgio Rossi, ', 'adeuuuuu', 'knlkn', '23424', 'lkmlk', '8908k', '35212', '098', '2016-11-30', 'lkmlkm', 'lkmlkm', 'lkmlkm', 'lkmlkm', 0, 'No ha sido evaluado todavía.', 1, '', 'Telde'),
(5, 8, 5, 1, '2017-11-30 17:02:07', '0000-00-00 00:00:00', 0, '11', '11', '11', '11', '11', '', '11', '11', '1111-11-11', '111', '11', '11', '11', 0, 'No ha sido evaluado todavía.', 1, '', '11'),
(6, 59, 1, 0, '2017-12-19 19:35:36', '0000-00-00 00:00:00', 0, '', 'Adios', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 'No ha sido evaluado todavía.', 1, '', ''),
(7, 59, 1, 0, '2017-12-20 13:17:15', '0000-00-00 00:00:00', 0, '', 'hello', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 'No ha sido evaluado todavía.', 1, '', ''),
(8, 59, 1, 0, '2017-12-20 13:17:55', '0000-00-00 00:00:00', 0, '', 'jjj', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 'No ha sido evaluado todavía.', 1, '', ''),
(9, 59, 1, 1, '2017-12-20 13:18:22', '0000-00-00 00:00:00', 0, '', 'jjj', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 'No ha sido evaluado todavía.', 1, '', ''),
(10, 59, 1, 1, '2017-12-20 13:27:01', '0000-00-00 00:00:00', 0, '', 'jjj', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 'No ha sido evaluado todavía.', 1, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dj`
--

CREATE TABLE `dj` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `participacion` int(1) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `dj`
--

INSERT INTO `dj` (`id`, `userid`, `titulo`, `participacion`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(5, 8, 'adios', 0, 0, 5, 0, '', 1, ''),
(6, 8, 'jese', 0, 0, 5, 0, 'No ha sido evaluado todav&iacutea.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dk`
--

CREATE TABLE `dk` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `investigador` varchar(250) CHARACTER SET utf8 NOT NULL,
  `centro` varchar(500) CHARACTER SET utf8 NOT NULL,
  `pais` varchar(150) CHARACTER SET utf8 NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dk`
--

INSERT INTO `dk` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `creation`, `lastmod`, `lastupdateid`, `investigador`, `centro`, `pais`, `inicio`, `fin`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(1, 12, '', 0, 0, '2016-11-12 11:11:04', '2016-11-12 11:11:14', 15, 'Antonio Natale Consalvo', '', '', '0000-00-00', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, ''),
(2, 8, '11', 0, 5, '2017-11-21 18:08:12', '0000-00-00 00:00:00', 0, '11', '11', '11', '0011-11-11', '0011-11-11', 1, 'ok', 0, ''),
(3, 8, 'javier', 0, 5, '2017-11-23 17:24:41', '0000-00-00 00:00:00', 0, '4', '4', '4', '0004-04-04', '0004-04-04', 0, 'No ha sido evaluado todavía.', 1, ''),
(4, 8, 'caputo', 0, 5, '2017-11-30 10:57:45', '0000-00-00 00:00:00', 0, '', '', '', '0000-00-00', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, ''),
(5, 8, 'esta es la ultima prueba en esta tabla coÃ±o', 0, 5, '2017-11-30 11:00:42', '0000-00-00 00:00:00', 0, '', '', '', '0000-00-00', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, ''),
(6, 8, 'cacapuputoto', 0, 5, '2017-11-30 11:05:01', '0000-00-00 00:00:00', 0, 'VÃ­ctor Daniel RdrÃ­guez PÃ©rez', 'derecha', 'francia', '2016-11-30', '2017-12-30', 0, 'No ha sido evaluado todavía.', 1, ''),
(9, 59, 'diferencia', 0, 5, '2017-12-19 11:33:36', '0000-00-00 00:00:00', 0, '', '', '', '2017-11-09', '2017-12-05', 0, 'No ha sido evaluado todavía.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dl`
--

CREATE TABLE `dl` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `usacampus` int(1) NOT NULL,
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `dl`
--

INSERT INTO `dl` (`id`, `userid`, `titulo`, `subtipo`, `usacampus`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(5, 8, 'adios', 0, 0, 5, 0, '', 1, ''),
(6, 8, 'jese', 0, 2, 5, 0, 'No ha sido evaluado todavía.	', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ga`
--

CREATE TABLE `ga` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ga`
--

INSERT INTO `ga` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(5, 8, 'hola', 0, 5, 0, '', 1, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(7, 8, 'Presidente de esta nuestra comunidad', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(8, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61YDXJ0845.JPG'),
(9, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61CV_Victor_Rodriguez.pdf'),
(10, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61IMG_20170421_100419.jpg'),
(11, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61NuevoDocumento 1_1.jpg'),
(12, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61IMG_20170421_100419.jpg'),
(13, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61IMG_20170421_100419.jpg'),
(14, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61IMG_20170421_100419.jpg'),
(15, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61IMG_20170421_100419.jpg'),
(16, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61IMG_20170421_100419.jpg'),
(17, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61IMG_20170421_100419.jpg'),
(18, 61, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga61dni + ss - Victor Rodriguez.docx'),
(19, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga59IMG_20170421_100419.jpg'),
(20, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga59IMG_20170421_100419.jpg'),
(21, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga59IMG_20170421_100419.jpg'),
(22, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga59IMG_20170421_100419.jpg'),
(23, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(24, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(25, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(26, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(27, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(28, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(29, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/ga59NuevoDocumento 1_1.jpg'),
(30, 59, '', 0, 8, 0, 'No ha sido evaluado todavía.	', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gb`
--

CREATE TABLE `gb` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gb`
--

INSERT INTO `gb` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(5, 8, 'hola', 0, 5, 0, '', 1, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(7, 8, 'Liberado way', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(8, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/gb59NuevoDocumento 1_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gc`
--

CREATE TABLE `gc` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gc`
--

INSERT INTO `gc` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(5, 8, 'adios', 0, 5, 0, '', 1, ''),
(6, 8, 'hoa', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(7, 8, 'PulmÃ³n', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(8, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/gc59IMG_20170421_100419.jpg'),
(9, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/gc59IMG_20170421_100419.jpg'),
(10, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, 'archivos/gc59renta2016.pdf'),
(11, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(12, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(13, 59, '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gd`
--

CREATE TABLE `gd` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gd`
--

INSERT INTO `gd` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(6, 8, 'hola', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(7, 8, 'osddfoijsdf', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(8, 13, 'hellooo', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ge`
--

CREATE TABLE `ge` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ge`
--

INSERT INTO `ge` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(6, 59, 'SI ME SEAS', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(7, 8, 'ortola', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(8, 59, '', 0, 1, 0, 'No ha sido evaluado todavía.	', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gff`
--

CREATE TABLE `gff` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titulo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `director` tinyint(1) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `orgfin` varchar(100) CHARACTER SET latin1 NOT NULL,
  `entidades` varchar(150) CHARACTER SET latin1 NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `subvencion` int(11) NOT NULL,
  `invprincipal` varchar(100) CHARACTER SET latin1 NOT NULL,
  `numinv` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL,
  `lastupdateid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gff`
--

INSERT INTO `gff` (`id`, `userid`, `UD`, `creation`, `lastmod`, `titulo`, `director`, `subtipo`, `orgfin`, `entidades`, `desde`, `hasta`, `subvencion`, `invprincipal`, `numinv`, `estado`, `infoestado`, `lastid`, `archivo`, `lastupdateid`) VALUES
(24, 8, 5, '2017-11-30 12:17:03', '0000-00-00 00:00:00', '1', 1, 1, '1', '1', '0001-01-01', '0001-01-01', 1, '', 1, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(25, 8, 5, '2017-11-30 12:18:50', '0000-00-00 00:00:00', 'ASDASDAS', 1, 2, '1', '1', '0001-01-01', '0001-01-01', 1, '1', 1, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(26, 8, 5, '2017-11-30 12:28:06', '0000-00-00 00:00:00', 'Ã±jdf', 1, 2, 'asdas', 'image Processing On Line', '2017-12-30', '2017-12-31', 75454, '', 4, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(27, 8, 5, '2017-11-30 12:29:37', '0000-00-00 00:00:00', '1', 1, 2, '1', '1', '0001-01-01', '0001-01-01', 1, '1', 1, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(28, 8, 5, '2017-12-05 16:08:11', '0000-00-00 00:00:00', 'acaba ya', 1, 1, '11', '11', '1111-11-11', '0111-11-11', 11, '', 11, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(29, 8, 5, '2017-12-05 16:08:54', '0000-00-00 00:00:00', '11', 0, 1, '11', '11', '0001-01-01', '0001-01-01', 11, '11', 11, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(30, 59, 5, '2017-12-13 11:59:46', '0000-00-00 00:00:00', 'archivo', 0, 2, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(31, 59, 5, '2017-12-13 12:12:53', '0000-00-00 00:00:00', 'no dir', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(32, 59, 5, '2017-12-13 12:13:15', '0000-00-00 00:00:00', 'dir', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 1, 'ok', 1, '', NULL),
(33, 61, 5, '2017-12-13 23:00:55', '0000-00-00 00:00:00', 'hola', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 1, 'No ha sido evaluado todavia.', 8, '', NULL),
(34, 61, 5, '2017-12-13 23:02:28', '0000-00-00 00:00:00', '', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, 'archivos/gff61Bebe Rexha - I Got You.mp3', NULL),
(35, 61, 5, '2017-12-13 23:02:55', '0000-00-00 00:00:00', '', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, 'archivos/gff61Bebe Rexha - I Got You.mp3', NULL),
(36, 61, 5, '2017-12-13 23:03:30', '0000-00-00 00:00:00', '', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, 'archivos/gff61David Otero - Aire.mp3', NULL),
(37, 61, 5, '2017-12-13 23:05:45', '0000-00-00 00:00:00', '', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, 'archivos/gff61Kygo & Selena_Gomez - It Aint Me.mp3', NULL),
(38, 61, 5, '2017-12-13 23:06:05', '0000-00-00 00:00:00', '', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, 'archivos/gff61YDXJ0843.JPG', NULL),
(39, 59, 3, '2017-12-21 10:33:53', '0000-00-00 00:00:00', '', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gg`
--

CREATE TABLE `gg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
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
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL,
  `lastuptadteid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gg`
--

INSERT INTO `gg` (`id`, `userid`, `UD`, `creation`, `lastmod`, `titulo`, `gestor`, `subtipo`, `orgfin`, `entidades`, `desde`, `hasta`, `subvencion`, `invprincipal`, `numinv`, `estado`, `infoestado`, `lastid`, `archivo`, `lastuptadteid`) VALUES
(12, 8, 5, '2017-11-30 12:33:28', '0000-00-00 00:00:00', 'esta si que es la utina', 1, 0, '2', '2', '0011-02-02', '0001-02-02', 2, '2', 3, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(13, 8, 5, '2017-11-30 12:33:51', '0000-00-00 00:00:00', 'esta es', 1, 0, '11', '11', '0011-01-11', '0001-01-01', 11, '1', 1, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(14, 59, 5, '2017-12-13 12:00:10', '0000-00-00 00:00:00', '', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(15, 59, 5, '2017-12-13 12:00:32', '0000-00-00 00:00:00', 'archivo', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(16, 59, 5, '2017-12-13 12:02:19', '0000-00-00 00:00:00', 'archivo', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(17, 59, 5, '2017-12-13 12:03:48', '0000-00-00 00:00:00', '', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(18, 59, 5, '2017-12-13 12:08:13', '0000-00-00 00:00:00', '', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(19, 59, 5, '2017-12-13 12:08:36', '0000-00-00 00:00:00', '', 1, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(20, 59, 5, '2017-12-13 12:13:48', '0000-00-00 00:00:00', '', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh`
--

CREATE TABLE `gh` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gh`
--

INSERT INTO `gh` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `inicio`, `fin`, `lugar`, `descripcion`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(9, 59, 'lksjdflj', 0, 2, '2017-01-01', '2017-01-02', '', '', 0, 'No ha sido evaluado todavía.	', 1, ''),
(10, 59, '', 0, 2, '2017-12-30', '2017-12-31', '', '', 0, 'No ha sido evaluado todavía.	', 1, ''),
(11, 59, '', 0, 1.5, '2017-12-30', '2017-12-31', '', '', 0, 'No ha sido evaluado todavía.	', 1, ''),
(12, 151, 'HÃ³Ã±a', 0, 0, '0000-00-00', '0000-00-00', '', '', 0, 'No ha sido evaluado todav&iacutea.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gi`
--

CREATE TABLE `gi` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gi`
--

INSERT INTO `gi` (`id`, `userid`, `titulo`, `descripcion`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(5, 8, 'ADIOS', 'ESTA TABLA ESTA TOTALMENTE TERMINADA', 0, 5, 0, '', 1, ''),
(6, 8, 'jese', '', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(7, 8, 'patapam', 'pium', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, ''),
(8, 8, 'lnkjbhjvbvkj', 'lknsdflknsdf', 0, 5, 0, 'No ha sido evaluado todavía.	', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gparticipacion`
--

CREATE TABLE `gparticipacion` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `participacionc` int(1) NOT NULL,
  `participaciond` int(1) NOT NULL,
  `participacione` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupoinv`
--

CREATE TABLE `grupoinv` (
  `id` int(11) NOT NULL,
  `grupoid` varchar(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `director` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `grupoinv`
--

INSERT INTO `grupoinv` (`id`, `grupoid`, `nombre`, `director`) VALUES
(1, 'ulpgcjhvj', 'uyguyg', 8),
(2, 'jj', 'jamones jabugo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ia`
--

CREATE TABLE `ia` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titulo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `director` tinyint(1) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `orgfin` varchar(100) CHARACTER SET latin1 NOT NULL,
  `entidades` varchar(150) CHARACTER SET latin1 NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `subvencion` int(11) NOT NULL,
  `invprincipal` varchar(100) CHARACTER SET latin1 NOT NULL,
  `numinv` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL,
  `lastupdateid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ia`
--

INSERT INTO `ia` (`id`, `userid`, `UD`, `creation`, `lastmod`, `titulo`, `director`, `subtipo`, `orgfin`, `entidades`, `desde`, `hasta`, `subvencion`, `invprincipal`, `numinv`, `estado`, `infoestado`, `lastid`, `archivo`, `lastupdateid`) VALUES
(24, 7, 5, '2017-11-30 12:17:03', '0000-00-00 00:00:00', '11', 1, 1, '11', '11', '0111-11-11', '0011-11-11', 11, '11', 0, 2, 'sfgfgfdgeff', 1, '', NULL),
(25, 13, 5, '2017-11-30 12:18:50', '0000-00-00 00:00:00', 'asdasd', 1, 2, '4', 'image Processing On Line', '2017-12-30', '2017-12-30', 75454, 'VÃ­ctor Daniel RdrÃ­guez PÃ©rez', 4, 1, 'Te voy a dar un pase', 1, '', NULL),
(26, 8, 5, '2017-11-30 18:21:41', '0000-00-00 00:00:00', '1', 1, 1, '1', '1', '0001-01-01', '0001-01-01', 1, '1', 1, 2, 'Voooooy', 1, '', NULL),
(27, 8, 5, '2017-11-30 18:22:06', '0000-00-00 00:00:00', '1', 0, 3, '1', '1', '0001-01-01', '0001-01-01', 1, '1', 1, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(28, 59, 5, '2017-12-13 11:58:33', '0000-00-00 00:00:00', 'archivo', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(29, 59, 5, '2017-12-13 12:11:13', '0000-00-00 00:00:00', '', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(30, 59, 5, '2017-12-13 12:11:39', '0000-00-00 00:00:00', '', 1, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(31, 59, 12, '2017-12-19 11:37:49', '0000-00-00 00:00:00', '', 0, 2, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(32, 59, 6, '2017-12-19 12:03:16', '0000-00-00 00:00:00', 'comprobar director', 1, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', NULL),
(33, 59, 6, '2018-01-17 13:20:29', '0000-00-00 00:00:00', '', 0, 1, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todav&iacutea.', 1, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ib`
--

CREATE TABLE `ib` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `director` tinyint(1) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(500) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ib`
--

INSERT INTO `ib` (`id`, `userid`, `groupid`, `titulo`, `director`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(1, 8, 2, 'jamones jabugo', 0, 0, 5, 0, 'No ha sido evaluado todavia.', 1, ''),
(2, 8, 2, 'jamones jabugo', 0, 0, 5, 0, 'No ha sido evaluado todavia.', 1, ''),
(3, 8, 1, 'uyguyg', 0, 0, 5, 0, 'No ha sido evaluado todavia.', 1, ''),
(4, 59, 2, 'jamones jabugo', 1, 0, 5, 0, 'No ha sido evaluado todavia.', 1, ''),
(5, 59, 2, 'jamones jabugo', 0, 0, 5, 0, 'No ha sido evaluado todavia.', 1, ''),
(6, 59, 1, 'uyguyg', 0, 0, 5, 3, 'No ha sido evaluado todavia.', 1, ''),
(7, 59, 1, 'uyguyg', 0, 0, 2, 0, 'No ha sido evaluado todavia.', 1, ''),
(8, 59, 1, 'uyguyg', 0, 0, 2, 0, 'No ha sido evaluado todavia.', 1, ''),
(9, 59, 1, 'uyguyg', 0, 0, 2, 0, 'No ha sido evaluado todavia.', 1, ''),
(10, 59, 1, 'uyguyg', 0, 0, 2, 0, 'No ha sido evaluado todavia.', 1, ''),
(11, 59, 1, 'uyguyg', 1, 0, 1, 0, 'No ha sido evaluado todavia.', 1, ''),
(13, 59, 1, 'uyguyg', 1, 0, 1, 0, 'este', 1, 'archivos/ib59dni + ss - Victor Rodriguez.docx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ic`
--

CREATE TABLE `ic` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '1',
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `autores` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `revista` varchar(250) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `volumen` varchar(10) CHARACTER SET latin1 NOT NULL,
  `pin` varchar(25) CHARACTER SET latin1 NOT NULL,
  `pfin` varchar(25) CHARACTER SET latin1 NOT NULL,
  `fecha` date NOT NULL,
  `impacto` varchar(30) NOT NULL,
  `citas` varchar(20) NOT NULL,
  `acta` varchar(15) NOT NULL,
  `editorial` varchar(250) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL,
  `lugar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ic`
--

INSERT INTO `ic` (`id`, `userid`, `UD`, `subtipo`, `creation`, `lastmod`, `lastupdateid`, `autores`, `titulo`, `revista`, `isbn`, `clave`, `volumen`, `pin`, `pfin`, `fecha`, `impacto`, `citas`, `acta`, `editorial`, `estado`, `infoestado`, `lastid`, `archivo`, `lugar`) VALUES
(1, 8, 4, 3, '2017-11-23 16:47:41', '0000-00-00 00:00:00', 0, 'Giorgio Rossi, ', 'joventum', 'knlkn', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 'No ha sido evaluado todavía.', 1, '', ''),
(3, 8, 4, 2, '2017-11-24 10:07:52', '0000-00-00 00:00:00', 0, 'yo', 'jk', 'abc', '1111', '1111', '11111', '35212222', '999', '2016-11-30', 'abc', 'abc', 'abc', 'abc', 0, 'No ha sido evaluado todavía.', 1, '', 'abc'),
(4, 59, 1, 1, '2017-12-21 09:55:03', '0000-00-00 00:00:00', 0, '', 'tÃ­tulo', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 'No ha sido evaluado todavía.', 1, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `id`
--

CREATE TABLE `id` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `participacion` varchar(25) NOT NULL,
  `regional` varchar(20) NOT NULL,
  `lugar` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `id`
--

INSERT INTO `id` (`id`, `userid`, `UD`, `subtipo`, `creation`, `lastmod`, `lastupdateid`, `titulo`, `participacion`, `regional`, `lugar`, `fecha`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(1, 13, 4, 0, '2017-11-09 13:06:02', '0000-00-00 00:00:00', 0, 'cba', 'a', 'a', 'a', '2017-12-31', 1, 'No ha sido evaluado todavía.', 1, ''),
(2, 8, 4, 0, '2017-11-21 12:37:10', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(3, 11, 4, 0, '2017-11-21 12:44:02', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(4, 8, 4, 0, '2017-11-21 12:46:19', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(5, 8, 4, 0, '2017-11-21 12:48:54', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(6, 8, 4, 0, '2017-11-21 12:52:17', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(7, 8, 4, 0, '2017-11-21 12:53:01', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(8, 8, 4, 0, '2017-11-22 12:05:57', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(9, 8, 4, 0, '2017-11-22 12:06:28', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(10, 8, 4, 0, '2017-11-22 13:02:26', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(11, 8, 4, 0, '2017-11-22 13:02:38', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(12, 8, 4, 0, '2017-11-24 09:39:54', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(13, 8, 4, 0, '2017-11-24 09:41:37', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(14, 8, 4, 0, '2017-11-24 09:42:08', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(15, 59, 5, 0, '2017-12-14 01:10:44', '0000-00-00 00:00:00', 0, '', '', '', '', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, 'archivos/id59NuevoDocumento 1_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ie`
--

CREATE TABLE `ie` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `redid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ie`
--

INSERT INTO `ie` (`id`, `userid`, `redid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(7, 8, 3, 'universida de la laguna', 0, 5, 0, 'falta dni', 1, ''),
(8, 8, 2, 'uiversidadae', 0, 5, 0, '', 1, ''),
(9, 8, 2, 'uiversidadae', 0, 5, 0, '', 1, ''),
(10, 5, 2, 'uiversidadae', 0, 5, 0, '', 1, ''),
(14, 5, 3, 'universida de la laguna', 0, 5, 0, '', 1, ''),
(25, 59, 3, 'universida de la laguna', 0, 5, 0, '', 1, 'archivos/ie59NuevoDocumento 1_1.jpg'),
(26, 59, 2, 'uiversidadae', 0, 5, 0, '', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iff`
--

CREATE TABLE `iff` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) CHARACTER SET utf8 NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `iff`
--

INSERT INTO `iff` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(5, 8, 'adios', 0, 5, 0, '', 1, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todav&iacutea.', 1, ''),
(7, 59, 'grande', 0, 5, 0, 'No ha sido evaluado todav&iacutea.', 1, 'archivos/iff59renta2016.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ig`
--

CREATE TABLE `ig` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `investigador` varchar(250) NOT NULL,
  `editor` varchar(250) NOT NULL,
  `revista` varchar(250) NOT NULL,
  `impacto` varchar(2) NOT NULL,
  `nacional` varchar(15) NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ig`
--

INSERT INTO `ig` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `creation`, `lastmod`, `lastupdateid`, `investigador`, `editor`, `revista`, `impacto`, `nacional`, `desde`, `hasta`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(10, 8, 'El Concilio de Constantinopla I y el proceso previo. Algunas anotaciones', 0, 2, '2018-01-18 11:48:15', '0000-00-00 00:00:00', 0, 'Sergio ZaÃ±artu, S.J.', 'TeologÃ­a y vida volumen 48 nÃºmero 4', 'Facultad de TeologÃ­a de la Pontificia Universidad CatÃ³lica de Chile', 'In', 'Chile', '2017-06-10', '2017-12-14', 0, 'No ha sido evaluado todav&iacutea.	', 0, 'archivos/ig8el concilio de constantinopla.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ih`
--

CREATE TABLE `ih` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `investigador` varchar(250) CHARACTER SET utf8 NOT NULL,
  `centro` varchar(500) CHARACTER SET utf8 NOT NULL,
  `pais` varchar(150) CHARACTER SET utf8 NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) CHARACTER SET latin1 NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ih`
--

INSERT INTO `ih` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `creation`, `lastmod`, `lastupdateid`, `investigador`, `centro`, `pais`, `inicio`, `fin`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(1, 12, '', 0, 0, '2016-11-12 11:11:04', '2016-11-12 11:11:14', 15, 'Antonio Natale Consalvo', '', '', '0000-00-00', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, ''),
(2, 8, 'aa', 0, 5, '2017-11-21 18:08:12', '0000-00-00 00:00:00', 0, 'aa', 'a', 'a', '2017-11-30', '2017-11-30', 0, 'No ha sido evaluado todavía.', 1, ''),
(3, 8, 'javier', 0, 5, '2017-11-23 17:24:41', '0000-00-00 00:00:00', 0, '4', '4', '4', '0004-04-04', '0004-04-04', 1, 'No ha sido evaluado todavï¿½a.', 0, ''),
(4, 59, 'jj', 0, 5, '2017-12-13 12:48:07', '0000-00-00 00:00:00', 0, '', '', '', '0000-00-00', '0000-00-00', 1, 'No ha sido evaluado todavï¿½a.', 0, ''),
(5, 59, 'jj', 0, 5, '2017-12-13 12:52:31', '0000-00-00 00:00:00', 0, '', '', '', '0000-00-00', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, ''),
(6, 59, 'jj', 0, 5, '2017-12-13 12:56:05', '0000-00-00 00:00:00', 0, '', '', '', '0000-00-00', '0000-00-00', 0, 'No ha sido evaluado todav&iacutea.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ii`
--

CREATE TABLE `ii` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tesisid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ii`
--

INSERT INTO `ii` (`id`, `userid`, `tesisid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(3, 8, 2, 'comida sana para todos', 0, 5, 0, '', 1, ''),
(4, 8, 2, 'comida sana para todos', 0, 5, 0, '', 1, ''),
(6, 59, 2, 'comida sana para todos', 0, 15, 0, '', 1, ''),
(7, 59, 2, 'comida sana para todos', 0, 15, 0, '', 1, ''),
(8, 59, 2, 'comida sana para todos', 0, 15, 0, '', 1, ''),
(9, 59, 1, 'asasasssss', 0, 15, 0, '', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ij`
--

CREATE TABLE `ij` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tesisid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ij`
--

INSERT INTO `ij` (`id`, `userid`, `tesisid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(2, 8, 2, 'comida sana para todos', 0, 5, 0, '', 1, ''),
(3, 8, 1, 'asasasssss', 0, 5, 0, '', 1, ''),
(4, 59, 1, 'asasasssss', 0, 5, 0, '', 1, ''),
(5, 59, 1, 'asasasssss', 0, 5, 0, '', 1, 'archivos/ij59titulos3.txt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ik`
--

CREATE TABLE `ik` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `titulo` varchar(300) CHARACTER SET utf8 NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `orgfin` text CHARACTER SET utf8 NOT NULL,
  `entidades` text CHARACTER SET utf8 NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `invresponsable` varchar(250) CHARACTER SET utf8 NOT NULL,
  `numinv` text CHARACTER SET utf8 NOT NULL,
  `subvencion` varchar(50) CHARACTER SET utf8 NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ik`
--

INSERT INTO `ik` (`id`, `userid`, `UD`, `creation`, `lastmod`, `lastupdateid`, `titulo`, `subtipo`, `orgfin`, `entidades`, `desde`, `hasta`, `invresponsable`, `numinv`, `subvencion`, `estado`, `infoestado`, `lastid`) VALUES
(3, 12, 0, '2016-11-12 11:04:37', '0000-00-00 00:00:00', 15, '', 0, '', '', '0000-00-00', '0000-00-00', 'test test', '2', 'â‚¬', 0, 'No ha sido evaluado todavía.', 1),
(4, 12, 0, '2016-11-12 11:07:48', '2016-11-12 11:07:59', 15, 'Primer titulo', 0, '', '', '0000-00-00', '0000-00-00', 'Pepe', '2', 'â‚¬', 0, 'No ha sido evaluado todavía.', 1),
(5, 8, 5, '2017-11-21 18:11:35', '0000-00-00 00:00:00', 0, 'aa', 0, 'aa', 'aa', '2017-12-08', '2017-12-10', '12', '11', '11', 0, 'No ha sido evaluado todavía.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `il`
--

CREATE TABLE `il` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `autores` varchar(250) CHARACTER SET utf8 NOT NULL,
  `titulo` varchar(250) CHARACTER SET utf8 NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL,
  `pais` varchar(50) NOT NULL,
  `patente` int(12) NOT NULL,
  `entidad` varchar(150) NOT NULL,
  `empresa` varchar(150) NOT NULL,
  `estado` int(1) NOT NULL,
  `infoestado` varchar(1000) CHARACTER SET utf8 NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `il`
--

INSERT INTO `il` (`id`, `userid`, `UD`, `creation`, `lastmod`, `lastupdateid`, `autores`, `titulo`, `subtipo`, `fecha`, `pais`, `patente`, `entidad`, `empresa`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(1, 8, 5, '2017-11-21 18:13:36', '2017-11-21 18:13:36', 0, 'bb', 'bb', 0, '2017-12-31', 'bb', 9999, 'bb', 'bb', 0, '', 1, ''),
(2, 8, 5, '2017-11-21 18:19:53', '2017-11-21 18:19:53', 0, 'Giorgio Rossi, ', 'esta es la ultima prueba en esta tabla coÃ±o', 0, '2017-12-30', '', 0, '', '', 0, '', 1, ''),
(3, 8, 5, '2017-11-21 18:20:53', '2017-11-21 18:20:53', 0, 'Giorgio Rossi, ', 'esta es la ultima prueba en esta tabla coÃ±o', 0, '2016-11-30', '', 0, '', '', 0, '', 1, ''),
(4, 8, 5, '2017-11-21 18:21:38', '2017-11-21 18:21:38', 0, 'Giorgio Rossi, ', 'esta es la ultima prueba en esta tabla coÃ±o', 0, '2017-12-30', '', 0, '', '', 0, '', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `im`
--

CREATE TABLE `im` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `CIF` varchar(9) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` float NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `im`
--

INSERT INTO `im` (`id`, `userid`, `titulo`, `CIF`, `subtipo`, `UD`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(3, 8, '', '2', 0, 5, 0, 'No ha sido evaluado todavía.', 1, ''),
(6, 8, 'fghfgh', 'dfhg', 0, 5, 0, 'No ha sido evaluado todavía.', 1, ''),
(7, 8, 'jj', 'a', 0, 5, 0, 'No ha sido evaluado todavía.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inn`
--

CREATE TABLE `inn` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `investigadores` varchar(250) NOT NULL,
  `entidad` varchar(250) NOT NULL,
  `tema` varchar(250) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inn`
--

INSERT INTO `inn` (`id`, `userid`, `UD`, `creation`, `lastmod`, `lastupdateid`, `titulo`, `subtipo`, `investigadores`, `entidad`, `tema`, `fecha`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(1, 8, 5, '2017-11-21 18:23:44', '0000-00-00 00:00:00', 0, 'bb', 0, 'bb', 'bb', 'bb', '2017-12-22', 0, 'No ha sido evaluado todavía.', 1, ''),
(2, 8, 5, '2017-11-21 18:24:39', '0000-00-00 00:00:00', 0, 'esta es la ultima prueba en esta tabla coÃ±o', 0, '', '', 'jjjj', '2017-11-30', 0, 'No ha sido evaluado todavía.', 1, ''),
(3, 8, 5, '2017-11-21 18:26:33', '0000-00-00 00:00:00', 0, 'esta es la ultima prueba en esta tabla coÃ±o', 0, '', '', 'jjjj', '2016-11-30', 0, 'No ha sido evaluado todavía.', 1, ''),
(4, 11, 5, '2017-11-21 18:26:58', '0000-00-00 00:00:00', 0, 'esta es la ultima prueba en esta tabla coÃ±o', 0, 'Jose', 'Bankia', 'asdasd', '2016-11-30', 0, 'No ha sido evaluado todavía.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `innn`
--

CREATE TABLE `innn` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
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
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL,
  `lastuptadteid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `innn`
--

INSERT INTO `innn` (`id`, `userid`, `UD`, `creation`, `lastmod`, `titulo`, `gestor`, `subtipo`, `orgfin`, `entidades`, `desde`, `hasta`, `subvencion`, `invprincipal`, `numinv`, `estado`, `infoestado`, `lastid`, `archivo`, `lastuptadteid`) VALUES
(1, 8, 5, '2017-11-21 18:32:48', '2017-11-21 18:32:48', 'bb', 0, 0, 'bb', 'bb', '2017-12-02', '2017-12-02', 2, 'bb', 2, 0, '', 1, '', 0),
(2, 8, 5, '2017-11-30 11:49:55', '0000-00-00 00:00:00', 'ÂºÂº', 0, 0, '', 'Âº', '2017-12-31', '2017-12-31', 908345098, 'Jose', 4, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(3, 8, 5, '2017-11-30 11:54:23', '0000-00-00 00:00:00', '', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(4, 8, 5, '2017-11-30 11:55:44', '0000-00-00 00:00:00', '', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(5, 8, 5, '2017-11-30 11:56:27', '0000-00-00 00:00:00', 'nnnnnn', 0, 0, '', 'Bankia', '2017-12-31', '2017-12-31', 9083450, 'Jose', 4, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(6, 8, 5, '2017-11-30 12:00:30', '0000-00-00 00:00:00', '', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(7, 8, 5, '2017-11-30 12:01:54', '0000-00-00 00:00:00', '', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(8, 8, 5, '2017-11-30 12:02:52', '0000-00-00 00:00:00', 'aaaaaaaaaaaaaaa', 0, 0, '', 'Bankia', '2017-12-31', '2017-12-31', 9083450, 'Jose', 4, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(9, 8, 5, '2017-11-30 12:05:39', '0000-00-00 00:00:00', '', 1, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(10, 8, 5, '2017-11-30 12:23:16', '0000-00-00 00:00:00', 'es gestor', 1, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(11, 8, 5, '2017-11-30 16:20:09', '0000-00-00 00:00:00', 'no es gestor', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0),
(12, 59, 5, '2017-12-13 11:59:15', '0000-00-00 00:00:00', 'archivo', 0, 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', 1, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `io`
--

CREATE TABLE `io` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `organizador` varchar(500) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `participacion` varchar(25) NOT NULL,
  `congreso` varchar(500) NOT NULL,
  `regional` varchar(20) NOT NULL,
  `lugar` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todav&iacutea.',
  `lastid` int(9) NOT NULL DEFAULT '1',
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `io`
--

INSERT INTO `io` (`id`, `userid`, `UD`, `creation`, `lastmod`, `lastupdateid`, `organizador`, `titulo`, `subtipo`, `participacion`, `congreso`, `regional`, `lugar`, `fecha`, `estado`, `infoestado`, `lastid`, `archivo`) VALUES
(1, 8, 5, '2017-11-17 18:51:47', '2017-11-16 11:26:27', 0, 'aa', 'aa', 0, 'aa', 'aa', 'aa', 'aa', '2017-12-31', 0, 'No ha sido evaluado todavía.', 1, ''),
(2, 8, 5, '2017-11-21 18:33:30', '0000-00-00 00:00:00', 0, '', 'esta es la ultima prueba en esta tabla coÃ±o', 0, 'Si', 'isi', '35212', 'Telde', '2017-12-29', 0, 'No ha sido evaluado todavía.', 1, ''),
(3, 61, 5, '2017-12-14 20:07:50', '0000-00-00 00:00:00', 0, '', 'curso', 0, '', '', '', '', '0000-00-00', 1, 'No ha sido evaluado todavía.', 1, ''),
(4, 61, 5, '2017-12-20 14:19:51', '0000-00-00 00:00:00', 0, '', '', 0, '', '', '', '', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, ''),
(5, 61, 5, '2017-12-20 14:20:05', '0000-00-00 00:00:00', 0, '', '', 0, '', '', '', '', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, ''),
(6, 61, 5, '2017-12-20 14:20:48', '0000-00-00 00:00:00', 0, '', '', 0, '', '', '', '', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, ''),
(7, 61, 5, '2017-12-20 14:25:10', '0000-00-00 00:00:00', 0, '', '', 0, '', '', '', '', '0000-00-00', 0, 'No ha sido evaluado todavía.', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redinv`
--

CREATE TABLE `redinv` (
  `id` int(11) NOT NULL,
  `redid` varchar(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `gestor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `redinv`
--

INSERT INTO `redinv` (`id`, `redid`, `nombre`, `gestor`) VALUES
(2, 'ulpgc', 'uiversidadae', 'antonojose'),
(3, 'ul', 'universida de la laguna', 'antoñito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sindical`
--

CREATE TABLE `sindical` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sindicato` text NOT NULL,
  `cargo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesis`
--

CREATE TABLE `tesis` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `autor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `tesis`
--

INSERT INTO `tesis` (`id`, `titulo`, `autor`) VALUES
(1, 'asasasssss', 'sssss'),
(2, 'comida sana para todos', 'yo mismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `phone` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `birthdate` date NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_rol` int(11) NOT NULL DEFAULT '0',
  `categoria` int(1) NOT NULL,
  `general_info` varchar(250) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_profile`
--

INSERT INTO `user_profile` (`id`, `nombre`, `apellido`, `phone`, `email`, `birthdate`, `dni`, `pass`, `id_rol`, `categoria`, `general_info`) VALUES
(8, 'AgustÃ­n', 'Salgado', '928135487', 'test@test.com', '1980-05-12', '54090598a', '$2y$10$m2TH.0kgMG/ERnZSudNcGOsUpjD0PMZahDPVm9XVSQFMxysnSbxci', 1, 0, NULL),
(59, 'VÃ­ctor', 'PÃ©res', '13', '13', '0013-12-13', '13', '$2y$10$UUWbqPBZo66P3ZFSgTA.eOVJ7lekOgR2qLciCrez2s47msuMN0iPW', 2, 0, NULL),
(61, 'Aná', 'L????', '14', '14', '0014-11-14', '14', '$2y$10$3TmW5MHDTFLDHvI/NTz7TeDE20bS2Wbx39LK659Uyl9DK8Gp.0NOC', 1, 0, NULL),
(92, '\0\0\0\0\0\0V\0\0\0?\0\0\0?\0\0\0c\0\0\0t\0\0', '????????', '699849799', '', '0000-00-00', '15', '$2y$10$UkDeXYbr8LDWikWebpMCFO8ELlTiWdlYfsV2Ngb1Dp84uUsxo6rPe', 1, 1, NULL),
(93, '\0\0\0\0\0\0V\0\0\0?\0\0\0?\0\0\0c\0\0\0t\0\0', '????????', '699849799', '', '0000-00-00', '16', '$2y$10$/3bQd1bOeXd7TLveky8cnOuUSZr2FtpJ2N7WrZO3qQ/rBz7SRCj4i', 1, 1, NULL),
(94, '\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0', '????????', '699849799', '', '0000-00-00', '18', '$2y$10$Qg1MxbQ1HRCfWmanXKnu0e0wLnMuQhjcp1j2gevuHvr6U1VgA.p7y', 1, 1, NULL),
(95, '\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0', '????????', '699849799', '', '0000-00-00', '20', '$2y$10$17M9aLxVsrzem6C3rjLwsOpLonrk6SIyuOEFeaE3QAq5muxti9afS', 1, 1, NULL),
(138, 'VÃ­ctor', '', '', '', '0000-00-00', '11', '$2y$10$cZpJKonBPfMeRhU.9ynoouYfPEnd2OTgZh33oOIF.bDu3K9w6E7xG', 1, 1, NULL),
(139, 'VÃ­ctor Daniel', '副????????????????', '699849799', '', '0000-00-00', '9', '$2y$10$ysDyPHGwfcQ43aQXTpRcg.T1EJoT7G/m6R0caVndKNtVBhCV1PndS', 1, 1, NULL),
(140, 'VÃ­ctor Daniel Ã‘anga', '副????????????????', '699849799', '6', '0006-06-06', '6', '$2y$10$pgP2Jy9SwSHkIgs6Yw1SP.jqF.I/5cBxGYc1hCCR9A/mlKE91cP8q', 1, 1, NULL),
(151, '&Ntilde;a&iacute;a', 'Ã‘amentÃ³n', '111', '111', '0001-11-11', '111', '$2y$10$SOZIZo8VHh/Z6rX/F788sOU1OSCiKlSaZbV3nMNxWQ8/pNnt98Ua2', 1, 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `da`
--
ALTER TABLE `da`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dc`
--
ALTER TABLE `dc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dd`
--
ALTER TABLE `dd`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `de`
--
ALTER TABLE `de`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dff`
--
ALTER TABLE `dff`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dg`
--
ALTER TABLE `dg`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dh`
--
ALTER TABLE `dh`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `di`
--
ALTER TABLE `di`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dj`
--
ALTER TABLE `dj`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dk`
--
ALTER TABLE `dk`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dl`
--
ALTER TABLE `dl`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ga`
--
ALTER TABLE `ga`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gb`
--
ALTER TABLE `gb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gc`
--
ALTER TABLE `gc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gd`
--
ALTER TABLE `gd`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ge`
--
ALTER TABLE `ge`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gff`
--
ALTER TABLE `gff`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gg`
--
ALTER TABLE `gg`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gh`
--
ALTER TABLE `gh`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gi`
--
ALTER TABLE `gi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gparticipacion`
--
ALTER TABLE `gparticipacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indices de la tabla `grupoinv`
--
ALTER TABLE `grupoinv`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ia`
--
ALTER TABLE `ia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ib`
--
ALTER TABLE `ib`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupid` (`groupid`);

--
-- Indices de la tabla `ic`
--
ALTER TABLE `ic`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ie`
--
ALTER TABLE `ie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `redid` (`redid`);

--
-- Indices de la tabla `iff`
--
ALTER TABLE `iff`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ig`
--
ALTER TABLE `ig`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ih`
--
ALTER TABLE `ih`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ii`
--
ALTER TABLE `ii`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tesisid` (`tesisid`);

--
-- Indices de la tabla `ij`
--
ALTER TABLE `ij`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tesisid` (`tesisid`);

--
-- Indices de la tabla `ik`
--
ALTER TABLE `ik`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `il`
--
ALTER TABLE `il`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `im`
--
ALTER TABLE `im`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inn`
--
ALTER TABLE `inn`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `innn`
--
ALTER TABLE `innn`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `io`
--
ALTER TABLE `io`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redinv`
--
ALTER TABLE `redinv`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sindical`
--
ALTER TABLE `sindical`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=531;
--
-- AUTO_INCREMENT de la tabla `da`
--
ALTER TABLE `da`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `db`
--
ALTER TABLE `db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `dc`
--
ALTER TABLE `dc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `dd`
--
ALTER TABLE `dd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `de`
--
ALTER TABLE `de`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT de la tabla `dff`
--
ALTER TABLE `dff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `dg`
--
ALTER TABLE `dg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `dh`
--
ALTER TABLE `dh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `di`
--
ALTER TABLE `di`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `dj`
--
ALTER TABLE `dj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `dk`
--
ALTER TABLE `dk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `dl`
--
ALTER TABLE `dl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ga`
--
ALTER TABLE `ga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `gb`
--
ALTER TABLE `gb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `gc`
--
ALTER TABLE `gc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `gd`
--
ALTER TABLE `gd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `ge`
--
ALTER TABLE `ge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `gff`
--
ALTER TABLE `gff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `gg`
--
ALTER TABLE `gg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `gh`
--
ALTER TABLE `gh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `gi`
--
ALTER TABLE `gi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `gparticipacion`
--
ALTER TABLE `gparticipacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grupoinv`
--
ALTER TABLE `grupoinv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ia`
--
ALTER TABLE `ia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `ib`
--
ALTER TABLE `ib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `ic`
--
ALTER TABLE `ic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `id`
--
ALTER TABLE `id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `ie`
--
ALTER TABLE `ie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `iff`
--
ALTER TABLE `iff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `ig`
--
ALTER TABLE `ig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `ih`
--
ALTER TABLE `ih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ii`
--
ALTER TABLE `ii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ij`
--
ALTER TABLE `ij`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ik`
--
ALTER TABLE `ik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `il`
--
ALTER TABLE `il`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `im`
--
ALTER TABLE `im`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `inn`
--
ALTER TABLE `inn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `innn`
--
ALTER TABLE `innn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `io`
--
ALTER TABLE `io`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `redinv`
--
ALTER TABLE `redinv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sindical`
--
ALTER TABLE `sindical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tesis`
--
ALTER TABLE `tesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `cargo_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_profile` (`id`);

--
-- Filtros para la tabla `gparticipacion`
--
ALTER TABLE `gparticipacion`
  ADD CONSTRAINT `gparticipacion_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_profile` (`id`);

--
-- Filtros para la tabla `ib`
--
ALTER TABLE `ib`
  ADD CONSTRAINT `ib_ibfk_1` FOREIGN KEY (`groupid`) REFERENCES `grupoinv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ie`
--
ALTER TABLE `ie`
  ADD CONSTRAINT `ie_ibfk_1` FOREIGN KEY (`redid`) REFERENCES `redinv` (`id`);

--
-- Filtros para la tabla `ii`
--
ALTER TABLE `ii`
  ADD CONSTRAINT `ii_ibfk_1` FOREIGN KEY (`tesisid`) REFERENCES `tesis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
