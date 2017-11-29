-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2017 a las 11:15:44
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
  `UD` int(3) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(250) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `da`
--

INSERT INTO `da` (`id`, `userid`, `titulo`, `UD`, `subtipo`, `estado`, `infoestado`) VALUES
(1, 8, 'Unidades docentes: 8', 8, 1, 1, 'Correcto'),
(2, 8, 'Unidades Docentes: 12', 12, 2, 1, 'Correcto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db`
--

CREATE TABLE `db` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `db`
--

INSERT INTO `db` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dc`
--

CREATE TABLE `dc` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `dc`
--

INSERT INTO `dc` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dd`
--

CREATE TABLE `dd` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `dd`
--

INSERT INTO `dd` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `de`
--

CREATE TABLE `de` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(500) CHARACTER SET utf8 NOT NULL,
  `UD` int(3) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `codirectores` text CHARACTER SET utf8 NOT NULL,
  `año` int(4) NOT NULL,
  `calificacion` int(2) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(150) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dff`
--

CREATE TABLE `dff` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(500) CHARACTER SET utf8 NOT NULL,
  `UD` int(3) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `codirectores` text CHARACTER SET utf8 NOT NULL,
  `año` int(4) NOT NULL,
  `calificacion` int(2) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(100) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dg`
--

CREATE TABLE `dg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `autores` varchar(500) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `participacion` varchar(25) NOT NULL,
  `congreso` varchar(500) NOT NULL,
  `regional` varchar(20) NOT NULL,
  `lugar` varchar(250) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dh`
--

CREATE TABLE `dh` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `autores` varchar(500) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `participacion` varchar(25) NOT NULL,
  `congreso` varchar(500) NOT NULL,
  `regional` varchar(20) NOT NULL,
  `lugar` varchar(250) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `di`
--

CREATE TABLE `di` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
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
  `fecha` varchar(20) NOT NULL,
  `impacto` varchar(30) NOT NULL,
  `citas` varchar(20) NOT NULL,
  `acta` varchar(15) NOT NULL,
  `editorial` varchar(250) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.',
  `lugar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `di`
--

INSERT INTO `di` (`id`, `userid`, `UD`, `subtipo`, `creation`, `lastmod`, `lastupdateid`, `autores`, `titulo`, `revista`, `isbn`, `clave`, `volumen`, `pin`, `pfin`, `fecha`, `impacto`, `citas`, `acta`, `editorial`, `estado`, `infoestado`, `lugar`) VALUES
(27, 12, 0, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Xu, Li and Jia, Jiaya and Matsushita, Yasuyuki', 'Motion Detail Preserving Optical Flow Estimation.', 'IEEE Trans. Pattern Anal. Mach. Intell.', '9', 'A', '34', '1744', '1757', '2012', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(28, 12, 0, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Thomas Brox and Jitendra Malik', 'Large Displacement Optical Flow: Descriptor Matching in Variational Motion Estimation', 'IEEE PAMI', '0162-8828', 'A', '33', '500', '513', '2011', '', '', '', 'IEEE Computer Society', 0, 'No ha sido evaluado todavía.', 'Los Alamitos, CA, USA'),
(29, 12, 0, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Rachid Deriche and ThÃ©odore Papadopoulo and Javier SÃ¡nchez', 'Symmetrical Dense Optical Flow Estimation with Occlusions Detection', 'International Journal of Computer Vision', '0920-5691', 'A', '75', '371', '385', '2007', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(30, 12, 0, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Joachim Weickert and Javier SÃ¡nchez', 'Reliable Estimation of Dense Optical Flow Fields with Large Displacements', 'International Journal of Computer Vision', '1', 'A', '39', '41', '56', '2000', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(31, 12, 0, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'Javier SÃ¡nchez, AgustÃ­n Salgado, Nelson MonzÃ³n', 'Computing Inverse Optical Flow', 'Pattern Recognition Letters', '0167-8655', 'A', '52', '32', '39', 'december/2014', '', '', '', 'Elsevier', 0, 'No ha sido evaluado todavía.', ''),
(32, 12, 0, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'Nelson MonzÃ³n, AgustÃ­n Salgado, Javier SÃ¡nchez', 'Discontinuity preserving in TV-L1 optical flow methods', 'CTIM Technical Report', '2254-2353', 'A', '5', '1', '37', 'november/2014', '', '', '', 'Universidad de Las Palmas de Gran Canaria', 0, 'No ha sido evaluado todavía.', 'Las Palmas de Gran Canaria'),
(33, 12, 0, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'MonzÃ³n, Nelson and SÃ¡nchez, Javier and Salgado, AgustÃ­n', 'Efficient Mechanism for Discontinuity Preserving in Optical Flow Methods', 'Image and Signal Processing', '978-3-319-07997-4', 'CR', '8509', '425', '432', 'october/2014', '', '', '', 'Springer International Publishing', 0, 'No ha sido evaluado todavía.', 'Switzerland'),
(34, 12, 0, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'Nelson MonzÃ³n, Javier SÃ¡nchez, AgustÃ­n Salgado', 'Implementation of a Robust Optical Flow Method for Color Images', 'CTIM Technical Report', '2254-2353', 'A', '4', '1', '14', 'september/2014', '', '', '', 'Universidad de Las Palmas de Gran Canaria', 0, 'No ha sido evaluado todavía.', 'Las Palmas de Gran Canaria'),
(35, 12, 0, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Simon Baker and Daniel Scharstein and J. P. Lewis and Stefan Roth and Michael J. Black and Richard Szeliski', 'A Database and Evaluation Methodology for Optical Flow', 'International Conference on Computer Vision', '', 'Li', '', '1', '8', '2007', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(36, 12, 0, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Huber, P.J.', '', 'Robust Statistics', '9780471650720', 'B', '', '', '', '2004', '', '', '', 'Wiley', 0, 'No ha sido evaluado todavía.', ''),
(37, 12, 0, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Hartley, R.Â I. and Zisserman, A.', '', 'Multiple View Geometry in Computer Vision', '', 'B', '', '', '', '2004', '', '', '', 'Cambridge University Press, ISBN: 0521540518', 0, 'No ha sido evaluado todavía.', ''),
(38, 12, 0, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Irani, Michal and Anandan, P', 'Robust multi-sensor image alignment', 'Computer Vision, 1998. Sixth International Conference on', '', 'Li', '', '959', '966', '1998', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(39, 12, 0, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Odobez, Jean-Marc and Bouthemy, Patrick', 'Robust multiresolution estimation of parametric motion models', 'Journal of visual communication and image representation', '4', 'A', '6', '348', '365', '1995', '', '', '', 'Elsevier', 0, 'No ha sido evaluado todavía.', ''),
(40, 12, 0, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Lucas, Bruce D and Kanade, Takeo', 'An iterative image registration technique with an application to stereo vision.', 'IJCAI', '', 'Li', '81', '674', '679', '1981', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(41, 12, 0, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Xu, Li and Jia, Jiaya and Matsushita, Yasuyuki', 'Motion Detail Preserving Optical Flow Estimation.', 'IEEE Trans. Pattern Anal. Mach. Intell.', '9', 'A', '34', '1744', '1757', '2012', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(42, 12, 0, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Thomas Brox and Jitendra Malik', 'Large Displacement Optical Flow: Descriptor Matching in Variational Motion Estimation', 'IEEE PAMI', '0162-8828', 'A', '33', '500', '513', '2011', '', '', '', 'IEEE Computer Society', 0, 'No ha sido evaluado todavía.', 'Los Alamitos, CA, USA'),
(43, 12, 0, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Rachid Deriche and ThÃ©odore Papadopoulo and Javier SÃ¡nchez', 'Symmetrical Dense Optical Flow Estimation with Occlusions Detection', 'International Journal of Computer Vision', '0920-5691', 'A', '75', '371', '385', '2007', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(44, 12, 0, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Joachim Weickert and Javier SÃ¡nchez', 'Reliable Estimation of Dense Optical Flow Fields with Large Displacements', 'International Journal of Computer Vision', '1', 'A', '39', '41', '56', '2000', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(45, 12, 0, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Xu, Li and Jia, Jiaya and Matsushita, Yasuyuki', 'Motion Detail Preserving Optical Flow Estimation.', 'IEEE Trans. Pattern Anal. Mach. Intell.', '9', 'A', '34', '1744', '1757', '2012', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(46, 12, 0, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Thomas Brox and Jitendra Malik', 'Large Displacement Optical Flow: Descriptor Matching in Variational Motion Estimation', 'IEEE PAMI', '0162-8828', 'A', '33', '500', '513', '2011', '', '', '', 'IEEE Computer Society', 0, 'No ha sido evaluado todavía.', 'Los Alamitos, CA, USA'),
(47, 12, 0, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Rachid Deriche and ThÃ©odore Papadopoulo and Javier SÃ¡nchez', 'Symmetrical Dense Optical Flow Estimation with Occlusions Detection', 'International Journal of Computer Vision', '0920-5691', 'A', '75', '371', '385', '2007', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(48, 12, 0, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Joachim Weickert and Javier SÃ¡nchez', 'Reliable Estimation of Dense Optical Flow Fields with Large Displacements', 'International Journal of Computer Vision', '1', 'A', '39', '41', '56', '2000', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(56, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'SÃ¡nchez, Javier and MonzÃ³n, Nelson and Salgado, AgustÃ­n', 'Robust Optical Flow Estimation', 'Image Processing On Line', '', 'A', '3', '252', '270', '2013', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(57, 8, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'SÃ¡nchez, Javier and Meinhardt-Llopis, Enric and Facciolo, Gabriele', 'TV-L1 Optical Flow Estimation', 'Image Processing On Line', '', 'A', '3', '137', '150', '2013', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(58, 8, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Meinhardt-Llopis, Enric and SÃ¡nchez, Javier and Kondermann, Daniel', 'Horn-Schunck Optical Flow with a Multi-Scale Strategy', 'Image Processing On Line', '', 'A', '3', '151', '172', '2013', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(59, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Szeliski, Richard', '', 'Computer vision algorithms and applications', '9781848829343 1848829345 ', 'L', '', '', '', '2011', '', '', '', 'Springer', 0, 'No ha sido evaluado todavía.', 'London; New York'),
(60, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Evangelidis, Georgios D and Psarakis, Emmanouil Z', 'Parametric image alignment using enhanced correlation coefficient maximization', 'Pattern Analysis and Machine Intelligence, IEEE Transactions on', '10', 'A', '30', '1858', '1865', '2008', '', '', '', 'IEEE', 0, 'No ha sido evaluado todavía.', ''),
(61, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Daniel Scharstein and J. P. Lewis and Stefan Roth and Michael J. Black and Richard Szeliski', 'A Database and Evaluation Methodology for Optical Flow', 'International Conference on Computer Vision', '', 'Li', '', '1', '8', '2007', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(62, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Raju Patil and Kong Man Cheung and Iain Matthews', 'Lucas-Kanade 20 Years On: Part 5', '', 'cmu-ri-tr-04-64', 'S', '', '', '', 'November/2004', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(63, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Ralph Gross and Iain Matthews', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 4', '', 'cmu-ri-tr-04-14', 'S', '', '', '', 'February/2004', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(64, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Huber, P.J.', '', 'Robust Statistics', '9780471650720', 'L', '', '', '', '2004', '', '', '', 'Wiley', 0, 'No ha sido evaluado todavía.', ''),
(65, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Baker, Simon and Matthews, Iain', 'Lucas-kanade 20 years on: A unifying framework', 'International Journal of Computer Vision', '3', 'A', '56', '221', '255', '2004', '', '', '', 'Springer', 0, 'No ha sido evaluado todavía.', ''),
(66, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Hartley, R.Â I. and Zisserman, A.', '', 'Multiple View Geometry in Computer Vision', '', 'L', '', '', '', '2004', '', '', '', 'Cambridge University Press, ISBN: 0521540518', 0, 'No ha sido evaluado todavía.', ''),
(67, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Ralph Gross and Iain Matthews', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 3', '', 'cmu-ri-tr-03-35', 'S', '', '', '', 'November/2003', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(68, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Ralph Gross and Iain Matthews and Takahiro Ishikawa', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 2', '', 'cmu-ri-tr-03-01', 'S', '', '', '', 'February/2003', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(69, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Iain Matthews', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 1', '', 'cmu-ri-tr-02-16', 'S', '', '', '', 'July/2002', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(70, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Baker, Simon and Matthews, Iain', 'Equivalence and efficiency of image alignment algorithms', 'Computer Vision and Pattern Recognition, 2001. CVPR 2001. Proceedings of the 2001 IEEE Computer Society Conference on', '', 'Li', '1', '1', '1090', '2001', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(71, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Irani, Michal and Anandan, P', 'Robust multi-sensor image alignment', 'Computer Vision, 1998. Sixth International Conference on', '', 'Li', '', '959', '966', '1998', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(72, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Michael J. Black and P. Anandan', 'The Robust Estimation of Multiple Motions: Parametric and Piecewise-Smooth Flow Fields', 'Computer Vision and Image Understanding', '1077-3142', 'A', '63', '75', '104', '1996', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(73, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Odobez, Jean-Marc and Bouthemy, Patrick', 'Robust multiresolution estimation of parametric motion models', 'Journal of visual communication and image representation', '4', 'A', '6', '348', '365', '1995', '', '', '', 'Elsevier', 0, 'No ha sido evaluado todavía.', ''),
(74, 12, 0, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Lucas, Bruce D and Kanade, Takeo', 'An iterative image registration technique with an application to stereo vision.', 'IJCAI', '', 'Li', '81', '674', '679', '1981', '', '', '', '', 0, 'No ha sido evaluado todavía.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dj`
--

CREATE TABLE `dj` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `dj`
--

INSERT INTO `dj` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dk`
--

CREATE TABLE `dk` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(200) CHARACTER SET utf32 NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `investigador` varchar(250) CHARACTER SET utf8 NOT NULL,
  `centro` varchar(500) CHARACTER SET utf8 NOT NULL,
  `pais` varchar(150) CHARACTER SET utf8 NOT NULL,
  `inicio` varchar(10) CHARACTER SET utf8 NOT NULL,
  `fin` varchar(10) CHARACTER SET utf8 NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dk`
--

INSERT INTO `dk` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `creation`, `lastmod`, `lastupdateid`, `investigador`, `centro`, `pais`, `inicio`, `fin`, `estado`, `infoestado`) VALUES
(1, 8, '', 0, 0, '2016-11-12 11:11:04', '2016-11-12 11:11:14', 15, 'Antonio Natale Consalvo', '', '', '', '', 0, 'No ha sido evaluado todavía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dl`
--

CREATE TABLE `dl` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `dl`
--

INSERT INTO `dl` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ga`
--

CREATE TABLE `ga` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ga`
--

INSERT INTO `ga` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adiossss', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gb`
--

CREATE TABLE `gb` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gb`
--

INSERT INTO `gb` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gc`
--

CREATE TABLE `gc` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gc`
--

INSERT INTO `gc` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gd`
--

CREATE TABLE `gd` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gd`
--

INSERT INTO `gd` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ge`
--

CREATE TABLE `ge` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ge`
--

INSERT INTO `ge` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gff`
--

CREATE TABLE `gff` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gff`
--

INSERT INTO `gff` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gg`
--

CREATE TABLE `gg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gg`
--

INSERT INTO `gg` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh`
--

CREATE TABLE `gh` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gh`
--

INSERT INTO `gh` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gi`
--

CREATE TABLE `gi` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gi`
--

INSERT INTO `gi` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gj`
--

CREATE TABLE `gj` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `gj`
--

INSERT INTO `gj` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

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
  `UD` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titulo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `orgfin` varchar(100) CHARACTER SET latin1 NOT NULL,
  `entidades` varchar(150) CHARACTER SET latin1 NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `subvencion` int(11) NOT NULL,
  `invprincipal` varchar(100) CHARACTER SET latin1 NOT NULL,
  `numinv` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavia.',
  `lastupdateid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ia`
--

INSERT INTO `ia` (`id`, `userid`, `UD`, `creation`, `lastmod`, `titulo`, `subtipo`, `orgfin`, `entidades`, `desde`, `hasta`, `subvencion`, `invprincipal`, `numinv`, `estado`, `infoestado`, `lastupdateid`) VALUES
(1, 12, 0, '2016-11-09 23:28:37', '0000-00-00 00:00:00', 'Proyecto DELL', 1, 'ULPGC', 'ULPGC', '0000-00-00', '0000-00-00', 120, 'Rita Sebastiani', 2, 0, 'No ha sido evaluado todavía.', 15),
(2, 12, 0, '2016-11-13 00:54:42', '2016-11-13 00:54:59', '', 0, 'ULPGC', '', '0000-00-00', '0000-00-00', 0, 'Antonio Natale Consalvo', 4, 0, 'No ha sido evaluado todavía.', 15),
(3, 12, 0, '2016-11-13 01:14:14', '2016-11-13 01:15:36', 'FI-WARE: Future Internet Core Platform', 0, '', '', '0000-00-00', '0000-00-00', 0, 'Juan', 2, 0, 'No ha sido evaluado todavía.', 15),
(4, 12, 0, '2017-06-27 12:31:09', '0000-00-00 00:00:00', 'VÃ­ctor Daniel', 0, 'ULPGC', 'ULL', '2017-12-31', '2017-12-31', 200, 'VÃ­ctor Daniel RodrÃ­guez PÃ©rez', 4, 0, 'No ha sido evaluado todavía.', NULL),
(5, 11, 0, '2017-06-27 12:32:17', '0000-00-00 00:00:00', 'VÃ­ctor Daniel', 0, 'ULPGC', 'ULL', '2015-09-29', '2017-12-31', 2000, 'pedro', 4, 0, 'No ha sido evaluado todavía.', NULL),
(6, 12, 0, '2017-06-27 12:35:21', '0000-00-00 00:00:00', '', 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavía.', NULL),
(7, 12, 0, '2017-06-28 08:41:59', '0000-00-00 00:00:00', 'jo', 0, 'ULPGC', 'ULL', '2016-11-09', '2017-06-16', 2000, 'Maria MaxÃ© Campos', 0, 0, 'No ha sido evaluado todavía.', NULL),
(15, 8, 5, '2017-09-15 11:21:35', '0000-00-00 00:00:00', 'kalinda', 2, 'enterprises', 'inc', '2015-09-30', '2017-12-30', 2, 'yo', 3, 0, 'No ha sido evaluado todavia.', NULL),
(17, 8, 5, '2017-11-10 12:29:33', '0000-00-00 00:00:00', 'kalinda', 0, 'enterprises', 'inc', '2016-10-30', '2017-12-30', 2, 'VÃ­ctor Daniel RdrÃ­guez PÃ©rez', 0, 0, 'No ha sido evaluado todavia.', NULL),
(19, 8, 5, '2017-11-13 12:09:26', '0000-00-00 00:00:00', 'tercer subtupo', 3, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 'No ha sido evaluado todavia.', NULL),
(21, 8, 5, '2017-11-17 11:11:05', '0000-00-00 00:00:00', 'pfpf', 1, 'ksdfokn', 'lksnmdflkn', '2015-11-30', '2014-10-28', 34535, 'adolfito', 4, 0, 'No ha sido evaluado todavia.', NULL),
(22, 8, 5, '2017-11-21 12:17:14', '0000-00-00 00:00:00', 'jj', 1, 'jj', 'jj', '2017-12-31', '2017-12-31', 0, 'kjkj', 0, 0, 'No ha sido evaluado todavia.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ib`
--

CREATE TABLE `ib` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `cargo` varchar(250) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(500) NOT NULL DEFAULT 'No ha sido evaluado todavia.'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ib`
--

INSERT INTO `ib` (`id`, `userid`, `groupid`, `titulo`, `cargo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(1, 8, 2, 'jamones jabugo', 'u', 0, 5, 0, 'No ha sido evaluado todavia.'),
(2, 8, 2, 'jamones jabugo', 'docente', 0, 5, 0, 'No ha sido evaluado todavia.'),
(3, 8, 1, 'uyguyg', 'aaaa', 0, 5, 0, 'No ha sido evaluado todavia.'),
(4, 8, 1, 'uyguyg', 'presi', 0, 5, 0, 'No ha sido evaluado todavia.'),
(5, 8, 1, 'uyguyg', 'sss', 0, 5, 0, 'No ha sido evaluado todavia.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ic`
--

CREATE TABLE `ic` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
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
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.',
  `lugar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ic`
--

INSERT INTO `ic` (`id`, `userid`, `UD`, `subtipo`, `creation`, `lastmod`, `lastupdateid`, `autores`, `titulo`, `revista`, `isbn`, `clave`, `volumen`, `pin`, `pfin`, `fecha`, `impacto`, `citas`, `acta`, `editorial`, `estado`, `infoestado`, `lugar`) VALUES
(1, 8, 4, 3, '2017-11-23 16:47:41', '0000-00-00 00:00:00', 0, 'Giorgio Rossi, ', 'joventum', 'knlkn', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(2, 8, 4, 1, '2017-11-24 09:50:07', '0000-00-00 00:00:00', 0, 'Giorgio', 'pjsdpspspspsp', 'knlkn', '23424', 'lkmlk', '8908k', '35212', '098', '2017-12-31', 'lkmlkm', 'lkmlkm', 'lkmlkm', 'lkmlkm', 0, 'No ha sido evaluado todavía.', 'Telde'),
(3, 8, 4, 2, '2017-11-24 10:07:52', '0000-00-00 00:00:00', 0, 'yo', 'jk', 'abc', '1111', '1111', '11111', '35212222', '999', '2016-11-30', 'abc', 'abc', 'abc', 'abc', 0, 'No ha sido evaluado todavía.', 'abc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `id`
--

CREATE TABLE `id` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
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
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `id`
--

INSERT INTO `id` (`id`, `userid`, `UD`, `subtipo`, `creation`, `lastmod`, `lastupdateid`, `titulo`, `participacion`, `regional`, `lugar`, `fecha`, `estado`, `infoestado`) VALUES
(1, 8, 4, 0, '2017-11-09 13:06:02', '0000-00-00 00:00:00', 0, 'cba', 'a', 'a', 'a', '2017-12-31', 1, 'No ha sido evaluado todavía.'),
(2, 8, 4, 0, '2017-11-21 12:37:10', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(3, 8, 4, 0, '2017-11-21 12:44:02', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(4, 8, 4, 0, '2017-11-21 12:46:19', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(5, 8, 4, 0, '2017-11-21 12:48:54', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(6, 8, 4, 0, '2017-11-21 12:52:17', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(7, 8, 4, 0, '2017-11-21 12:53:01', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(8, 8, 4, 0, '2017-11-22 12:05:57', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(9, 8, 4, 0, '2017-11-22 12:06:28', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(10, 8, 4, 0, '2017-11-22 13:02:26', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(11, 8, 4, 0, '2017-11-22 13:02:38', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(12, 8, 4, 0, '2017-11-24 09:39:54', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(13, 8, 4, 0, '2017-11-24 09:41:37', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(14, 8, 4, 0, '2017-11-24 09:42:08', '0000-00-00 00:00:00', 0, 'jj', 'traje', '35212', 'Telde', '2017-12-31', 0, 'No ha sido evaluado todavía.');

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
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ie`
--

INSERT INTO `ie` (`id`, `userid`, `redid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(7, 8, 3, 'universida de la laguna', 0, 5, 0, ''),
(8, 8, 2, 'uiversidadae', 0, 5, 0, ''),
(9, 8, 2, 'uiversidadae', 0, 5, 0, ''),
(10, 8, 2, 'uiversidadae', 0, 5, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iff`
--

CREATE TABLE `iff` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.	'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `iff`
--

INSERT INTO `iff` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(5, 8, 'adios', 0, 5, 0, ''),
(6, 8, 'jese', 0, 5, 0, 'No ha sido evaluado todavía.	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ig`
--

CREATE TABLE `ig` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
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
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ig`
--

INSERT INTO `ig` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `creation`, `lastmod`, `lastupdateid`, `investigador`, `editor`, `revista`, `impacto`, `nacional`, `desde`, `hasta`, `estado`, `infoestado`) VALUES
(1, 12, '', 0, 0, '2016-11-12 11:14:04', '2016-11-12 11:14:19', 15, 'Juan', '', '', 'No', 'Nacional', '0000-00-00', '0000-00-00', 0, 'No ha sido evaluado todavía.'),
(2, 12, '', 0, 0, '2016-11-12 11:15:38', '2016-11-12 11:15:56', 15, 'Maria', '', '', 'Si', 'Internacional', '0000-00-00', '0000-00-00', 0, 'No ha sido evaluado todavía.'),
(4, 8, 'comite directivo', 0, 5, '2016-11-12 11:17:28', '2016-11-12 11:17:39', 15, 'a', 'a', 'a', 'a', 'a', '2017-01-01', '2017-01-01', 0, 'No ha sido evaluado todavía.'),
(5, 11, '', 0, 0, '2016-11-18 19:45:52', '0000-00-00 00:00:00', 13, 'Giorgio Rossi', 'Revisor', '', 'Si', 'Internacional', '0000-00-00', '0000-00-00', 0, 'No ha sido evaluado todavía.'),
(6, 8, 'esta es la ultima prueba en esta tabla coÃ±o', 0, 5, '2017-11-21 17:56:05', '0000-00-00 00:00:00', 0, '', 'joel', 'knlkn', 'lk', 'EspaÃ±a', '2016-11-30', '2016-12-30', 0, 'No ha sido evaluado todavía.'),
(7, 8, 'esta es la ultima prueba en esta tabla coÃ±o', 0, 5, '2017-11-21 18:04:49', '0000-00-00 00:00:00', 0, 'VÃ­ctor Daniel RdrÃ­guez PÃ©rez', 'joel', 'knlkn', 'lk', 'EspaÃ±a', '2016-11-30', '2016-12-30', 0, 'No ha sido evaluado todavía.'),
(8, 8, 'antonio', 0, 5, '2017-11-23 17:24:17', '0000-00-00 00:00:00', 0, 'yo', 'yo', 'yo', 'yo', 'yo', '2017-12-31', '2017-12-30', 0, 'No ha sido evaluado todavía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ih`
--

CREATE TABLE `ih` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `UD` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `investigador` varchar(250) CHARACTER SET utf8 NOT NULL,
  `centro` varchar(500) CHARACTER SET utf8 NOT NULL,
  `pais` varchar(150) CHARACTER SET utf8 NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ih`
--

INSERT INTO `ih` (`id`, `userid`, `titulo`, `subtipo`, `UD`, `creation`, `lastmod`, `lastupdateid`, `investigador`, `centro`, `pais`, `inicio`, `fin`, `estado`, `infoestado`) VALUES
(1, 12, '', 0, 0, '2016-11-12 11:11:04', '2016-11-12 11:11:14', 15, 'Antonio Natale Consalvo', '', '', '0000-00-00', '0000-00-00', 0, 'No ha sido evaluado todavía.'),
(2, 8, 'aa', 0, 5, '2017-11-21 18:08:12', '0000-00-00 00:00:00', 0, 'aa', 'a', 'a', '2017-11-30', '2017-11-30', 0, 'No ha sido evaluado todavía.'),
(3, 8, 'javier', 0, 5, '2017-11-23 17:24:41', '0000-00-00 00:00:00', 0, '4', '4', '4', '0004-04-04', '0004-04-04', 0, 'No ha sido evaluado todavía.');

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
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ii`
--

INSERT INTO `ii` (`id`, `userid`, `tesisid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(3, 8, 2, 'comida sana para todos', 0, 5, 0, ''),
(4, 8, 2, 'comida sana para todos', 0, 5, 0, '');

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
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `ij`
--

INSERT INTO `ij` (`id`, `userid`, `tesisid`, `titulo`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(2, 8, 2, 'comida sana para todos', 0, 5, 0, ''),
(3, 8, 1, 'asasasssss', 0, 5, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ik`
--

CREATE TABLE `ik` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
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
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ik`
--

INSERT INTO `ik` (`id`, `userid`, `UD`, `creation`, `lastmod`, `lastupdateid`, `titulo`, `subtipo`, `orgfin`, `entidades`, `desde`, `hasta`, `invresponsable`, `numinv`, `subvencion`, `estado`, `infoestado`) VALUES
(3, 12, 0, '2016-11-12 11:04:37', '0000-00-00 00:00:00', 15, '', 0, '', '', '0000-00-00', '0000-00-00', 'test test', '2', 'â‚¬', 0, 'No ha sido evaluado todavía.'),
(4, 12, 0, '2016-11-12 11:07:48', '2016-11-12 11:07:59', 15, 'Primer titulo', 0, '', '', '0000-00-00', '0000-00-00', 'Pepe', '2', 'â‚¬', 0, 'No ha sido evaluado todavía.'),
(5, 8, 5, '2017-11-21 18:11:35', '0000-00-00 00:00:00', 0, 'aa', 0, 'aa', 'aa', '2017-12-08', '2017-12-10', '12', '11', '11', 0, 'No ha sido evaluado todavía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `il`
--

CREATE TABLE `il` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `infoestado` varchar(1000) CHARACTER SET utf8 NOT NULL DEFAULT 'No ha sido evaluado todavia.'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `il`
--

INSERT INTO `il` (`id`, `userid`, `UD`, `creation`, `lastmod`, `lastupdateid`, `autores`, `titulo`, `subtipo`, `fecha`, `pais`, `patente`, `entidad`, `empresa`, `estado`, `infoestado`) VALUES
(1, 8, 5, '2017-11-21 18:13:36', '2017-11-21 18:13:36', 0, 'bb', 'bb', 0, '2017-12-31', 'bb', 9999, 'bb', 'bb', 0, ''),
(2, 8, 5, '2017-11-21 18:19:53', '2017-11-21 18:19:53', 0, 'Giorgio Rossi, ', 'esta es la ultima prueba en esta tabla coÃ±o', 0, '2017-12-30', '', 0, '', '', 0, ''),
(3, 8, 5, '2017-11-21 18:20:53', '2017-11-21 18:20:53', 0, 'Giorgio Rossi, ', 'esta es la ultima prueba en esta tabla coÃ±o', 0, '2016-11-30', '', 0, '', '', 0, ''),
(4, 8, 5, '2017-11-21 18:21:38', '2017-11-21 18:21:38', 0, 'Giorgio Rossi, ', 'esta es la ultima prueba en esta tabla coÃ±o', 0, '2017-12-30', '', 0, '', '', 0, '');

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
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `im`
--

INSERT INTO `im` (`id`, `userid`, `titulo`, `CIF`, `subtipo`, `UD`, `estado`, `infoestado`) VALUES
(3, 8, 'aa', '1', 0, 5, 0, 'No ha sido evaluado todavía.'),
(6, 8, 'fghfgh', 'dfhg', 0, 5, 0, 'No ha sido evaluado todavía.'),
(7, 8, 'jj', 'a', 0, 5, 0, 'No ha sido evaluado todavía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inn`
--

CREATE TABLE `inn` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
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
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inn`
--

INSERT INTO `inn` (`id`, `userid`, `UD`, `creation`, `lastmod`, `lastupdateid`, `titulo`, `subtipo`, `investigadores`, `entidad`, `tema`, `fecha`, `estado`, `infoestado`) VALUES
(1, 8, 5, '2017-11-21 18:23:44', '0000-00-00 00:00:00', 0, 'bb', 0, 'bb', 'bb', 'bb', '2017-12-22', 0, 'No ha sido evaluado todavía.'),
(2, 8, 5, '2017-11-21 18:24:39', '0000-00-00 00:00:00', 0, 'esta es la ultima prueba en esta tabla coÃ±o', 0, '', '', 'jjjj', '2017-11-30', 0, 'No ha sido evaluado todavía.'),
(3, 8, 5, '2017-11-21 18:26:33', '0000-00-00 00:00:00', 0, 'esta es la ultima prueba en esta tabla coÃ±o', 0, '', '', 'jjjj', '2016-11-30', 0, 'No ha sido evaluado todavía.'),
(4, 8, 5, '2017-11-21 18:26:58', '0000-00-00 00:00:00', 0, 'esta es la ultima prueba en esta tabla coÃ±o', 0, 'Jose', 'Bankia', 'asdasd', '2016-11-30', 0, 'No ha sido evaluado todavía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `innn`
--

CREATE TABLE `innn` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `titulo` varchar(255) CHARACTER SET utf8 NOT NULL,
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

INSERT INTO `innn` (`id`, `userid`, `UD`, `creation`, `lastmod`, `titulo`, `subtipo`, `orgfin`, `entidades`, `desde`, `hasta`, `subvencion`, `invprincipal`, `numinv`, `estado`, `infoestado`, `lastuptadteid`) VALUES
(1, 8, 5, '2017-11-21 18:32:48', '2017-11-21 18:32:48', 'bb', 0, 'bb', 'bb', '2017-12-02', '2017-12-02', 2, 'bb', 2, 0, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `io`
--

CREATE TABLE `io` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `autores` varchar(500) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `participacion` varchar(25) NOT NULL,
  `congreso` varchar(500) NOT NULL,
  `regional` varchar(20) NOT NULL,
  `lugar` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `io`
--

INSERT INTO `io` (`id`, `userid`, `UD`, `creation`, `lastmod`, `lastupdateid`, `autores`, `titulo`, `subtipo`, `participacion`, `congreso`, `regional`, `lugar`, `fecha`, `estado`, `infoestado`) VALUES
(1, 8, 5, '2017-11-17 18:51:47', '2017-11-16 11:26:27', 0, 'aa', 'aa', 0, 'aa', 'aa', 'aa', 'aa', '2017-12-31', 0, 'No ha sido evaluado todavía.'),
(2, 8, 5, '2017-11-21 18:33:30', '0000-00-00 00:00:00', 0, '', 'esta es la ultima prueba en esta tabla coÃ±o', 0, 'Si', 'isi', '35212', 'Telde', '2017-12-29', 0, 'No ha sido evaluado todavía.');

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
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `picture` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `surname` varchar(25) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8 NOT NULL,
  `birthdate` date NOT NULL,
  `groupid` int(11) DEFAULT NULL,
  `pass` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_rol` int(11) NOT NULL DEFAULT '0',
  `member` int(1) NOT NULL DEFAULT '0',
  `general_info` varchar(250) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_profile`
--

INSERT INTO `user_profile` (`id`, `name`, `picture`, `surname`, `phone`, `email`, `birthdate`, `groupid`, `pass`, `id_rol`, `member`, `general_info`) VALUES
(7, 'Pepe', 'img/avatar.png', 'Perez', NULL, 'pepe@pepe.com', '0000-00-00', 10, '8', 2, 1, NULL),
(8, 'test', 'img/avatar.png', 'test', NULL, 'test@test.com', '0000-00-00', 12, '9', 1, 1, NULL),
(9, 'Giorgio', 'img/avatar.png', 'Rossi', NULL, 'giorgio@giorgio.com', '0000-00-00', 11, '16cdae1dc8f5ccc69c51eea2851bff68', 2, 1, NULL),
(13, 'Rita', 'img/avatar.pngrita.PNG', 'Consalvo', NULL, 'rita@rita.com', '0000-00-00', 11, '13', 2, 1, NULL),
(14, 'Lorenzo', 'img/avatar.pngSnapchat-8578334108400235905.jpg', 'Rossi', NULL, 'lorenzo.rossi.94@gmail.com', '0000-00-00', 11, '64cb8d374e18c8ff6b4b354c56251474', 1, 1, NULL),
(15, 'Antonio Natale', 'img/avatar.pngIMG_20160913_194726.jpg', 'Consalvo', NULL, 'tony@tony.com', '0000-00-00', 12, 'ddc5f5e86d2f85e1b1ff763aff13ce0a', 2, 1, NULL),
(17, 'Juan', 'img/avatar.png', 'PÃ©rez LÃ³pez', NULL, 'juan@juan.com', '0000-00-00', 15, 'a94652aa97c7211ba8954dd15a3cf838', 2, 1, NULL),
(24, 'Ana', 'img/avatar.pngana.PNG', 'Anabel', NULL, 'ana@ana.com', '0000-00-00', 16, '276b6c4692e78d4799c12ada515bc3e4', 2, 1, NULL),
(26, 'Rita', 'img/avatar.png1475235186146-1029074174.jpg', 'Sebastiani ', NULL, 'mamma@mamma.com', '0000-00-00', 12, 'ccebba93f54d6bf2b17f8350e7c12ec4', 2, 1, NULL),
(27, 'Maria', 'img/avatar.png', 'Maria Maria', NULL, 'maria@maria.com', '0000-00-00', 12, '263bce650e68ab4e23f28263760b9fa5', 1, 1, NULL),
(28, 'alumno', 'img/avatar.png', 'alumno', NULL, 'alumno@alumno.com', '0000-00-00', 12, 'c6865cf98b133f1f3de596a4a2894630', 0, 1, NULL),
(29, 'aAa', 'img/avatar.png', 'a', NULL, 'a@a.com', '0000-00-00', 12, '0cc175b9c0f1b6a831c399e269772661', 0, 1, NULL),
(30, 'AA', 'img/avatar.pngimage.012459.l.jpg', 'aa', NULL, 'aa@aa.com', '0000-00-00', 12, '4124bc0a9335c27f086f24ba207a4912', 0, 1, NULL),
(32, 'bb', 'img/avatar.png', 'bb', NULL, 'bb@bb.com', '0000-00-00', NULL, 'f8395e206a1061e97d02af5a1e0af9ed', 0, 2, NULL),
(34, 'nn', 'img/avatar.png', 'nn', NULL, 'nn@nn.com', '0000-00-00', NULL, '7dbef66534209feb51b3ef1b1d4b2f3a', 0, 0, NULL),
(35, 'Javier ', 'img/avatar.png', 'SÃ¡nchez PÃ©rez', NULL, 'javier@javier.com', '0000-00-00', 15, 'eebf558cd91186f89d2ba0abc2c4eedb', 0, 1, NULL),
(36, 'AgustÃ­n ', 'img/avatar.png', 'Salgado de la Nuez', NULL, 'agustin@agustin.com', '0000-00-00', 15, 'd67493f8b7452c02ab831ca4fe07ec6a', 3, 1, NULL),
(37, 'Jose Pablo', 'img/avatar.png', 'SuÃ¡rez Rivero', NULL, 'josepablo@josepablo.com', '0000-00-00', 15, '425190e23672a8f0adecd645a3721054', 0, 1, NULL),
(38, 'Juan JosÃ©', 'img/avatar.png', 'Hierro', NULL, 'juanjose@juanjose.com', '0000-00-00', 15, '77ebbb911c3d369654a1fb5f84ce9150', 0, 1, NULL),
(39, 'Nelson', 'img/avatar.png', 'MonzÃ³n', NULL, 'nelson@nelson.com', '0000-00-00', 15, 'ea9fa43efafd97808a72c503c7f04bac', 0, 1, NULL),
(40, 'Giorgio', 'img/avatar.png', 'Rossi', NULL, 'otro@otro.com', '0000-00-00', 19, 'bc7d3257ae8498bcd2d9c39a7c60d2aa', 2, 1, NULL),
(41, 'Giorgio', 'img/avatar.png', 'Rossi', NULL, 'giorgiorossi@hotmail.com', '0000-00-00', NULL, 'f23d1a33ab198c7a82d37ca21792c631', 0, 0, NULL),
(42, 'Antonio', 'img/avatar.png', 'PÃ©rez', NULL, 'antoniop@antoniop.com', '0000-00-00', 15, 'bcb7e9e73ce1771a23777b05bd8d3ea9', 0, 1, NULL),
(43, 'zz', 'img/avatar.png', 'zz', NULL, 'zz@zz.com', '0000-00-00', NULL, '938e4764b37089c7349fa253eddf257b', 0, 0, NULL),
(44, 'Demo', 'img/avatar.png', 'DemostraciÃ³n', NULL, 'demo@demo.com', '0000-00-00', 20, '2278a0f743d90e23b2fb4d009e6af10a', 2, 1, NULL),
(45, 'Demo1', 'img/avatar.pngFotoAvatar.JPG', 'Demo1app', NULL, 'demo1@demo.com', '0000-00-00', 20, 'fd6138204c4eb1dd19e63896c1557e27', 0, 1, NULL),
(46, 'trytr', 'img/avatar.pngCapturaGrupowebulpgc.JPG', 'ggrf', NULL, 'andrea@andrea.com', '0000-00-00', NULL, '8d28898f353eda472701f2b68d2a8cdb', 0, 0, NULL),
(47, 'Victor', 'img/avatar.png', 'Rodriguez', NULL, 'vituuu@hotmail.com', '0000-00-00', NULL, 'fd53a75dd0a473b5f660901450e4f6c8', 0, 2, NULL),
(48, 'Victor', 'img/avatar.png', 'Rodriguez PÃ©rez', NULL, 'vitururu@hotmail.com', '0000-00-00', NULL, 'f1bdca0635e76b89c6f52e06e47bd480', 0, 2, NULL);

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
-- Indices de la tabla `gj`
--
ALTER TABLE `gj`
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dff`
--
ALTER TABLE `dff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dg`
--
ALTER TABLE `dg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dh`
--
ALTER TABLE `dh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `di`
--
ALTER TABLE `di`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT de la tabla `dj`
--
ALTER TABLE `dj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `dk`
--
ALTER TABLE `dk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `dl`
--
ALTER TABLE `dl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ga`
--
ALTER TABLE `ga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `gb`
--
ALTER TABLE `gb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `gc`
--
ALTER TABLE `gc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `gd`
--
ALTER TABLE `gd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ge`
--
ALTER TABLE `ge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `gff`
--
ALTER TABLE `gff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `gg`
--
ALTER TABLE `gg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `gh`
--
ALTER TABLE `gh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `gi`
--
ALTER TABLE `gi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `gj`
--
ALTER TABLE `gj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `ib`
--
ALTER TABLE `ib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ic`
--
ALTER TABLE `ic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `id`
--
ALTER TABLE `id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `ie`
--
ALTER TABLE `ie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `iff`
--
ALTER TABLE `iff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ig`
--
ALTER TABLE `ig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `ih`
--
ALTER TABLE `ih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ii`
--
ALTER TABLE `ii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ij`
--
ALTER TABLE `ij`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `io`
--
ALTER TABLE `io`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
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
