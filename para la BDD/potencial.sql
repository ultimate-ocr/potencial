-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2017 a las 14:22:04
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
  `UD` int(3) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db`
--

CREATE TABLE `db` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dc`
--

CREATE TABLE `dc` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dd`
--

CREATE TABLE `dd` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

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
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `df`
--

CREATE TABLE `df` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(500) CHARACTER SET utf8 NOT NULL,
  `UD` int(3) NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `codirectores` text CHARACTER SET utf8 NOT NULL,
  `año` int(4) NOT NULL,
  `calificacion` int(2) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dg`
--

CREATE TABLE `dg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UID` int(3) NOT NULL,
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
  `UID` int(3) NOT NULL,
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

INSERT INTO `di` (`id`, `userid`, `UD`, `creation`, `lastmod`, `lastupdateid`, `autores`, `titulo`, `revista`, `isbn`, `clave`, `volumen`, `pin`, `pfin`, `fecha`, `impacto`, `citas`, `acta`, `editorial`, `estado`, `infoestado`, `lugar`) VALUES
(27, 12, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Xu, Li and Jia, Jiaya and Matsushita, Yasuyuki', 'Motion Detail Preserving Optical Flow Estimation.', 'IEEE Trans. Pattern Anal. Mach. Intell.', '9', 'A', '34', '1744', '1757', '2012', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(28, 12, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Thomas Brox and Jitendra Malik', 'Large Displacement Optical Flow: Descriptor Matching in Variational Motion Estimation', 'IEEE PAMI', '0162-8828', 'A', '33', '500', '513', '2011', '', '', '', 'IEEE Computer Society', 0, 'No ha sido evaluado todavía.', 'Los Alamitos, CA, USA'),
(29, 12, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Rachid Deriche and ThÃ©odore Papadopoulo and Javier SÃ¡nchez', 'Symmetrical Dense Optical Flow Estimation with Occlusions Detection', 'International Journal of Computer Vision', '0920-5691', 'A', '75', '371', '385', '2007', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(30, 12, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Joachim Weickert and Javier SÃ¡nchez', 'Reliable Estimation of Dense Optical Flow Fields with Large Displacements', 'International Journal of Computer Vision', '1', 'A', '39', '41', '56', '2000', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(31, 12, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'Javier SÃ¡nchez, AgustÃ­n Salgado, Nelson MonzÃ³n', 'Computing Inverse Optical Flow', 'Pattern Recognition Letters', '0167-8655', 'A', '52', '32', '39', 'december/2014', '', '', '', 'Elsevier', 0, 'No ha sido evaluado todavía.', ''),
(32, 12, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'Nelson MonzÃ³n, AgustÃ­n Salgado, Javier SÃ¡nchez', 'Discontinuity preserving in TV-L1 optical flow methods', 'CTIM Technical Report', '2254-2353', 'A', '5', '1', '37', 'november/2014', '', '', '', 'Universidad de Las Palmas de Gran Canaria', 0, 'No ha sido evaluado todavía.', 'Las Palmas de Gran Canaria'),
(33, 12, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'MonzÃ³n, Nelson and SÃ¡nchez, Javier and Salgado, AgustÃ­n', 'Efficient Mechanism for Discontinuity Preserving in Optical Flow Methods', 'Image and Signal Processing', '978-3-319-07997-4', 'CR', '8509', '425', '432', 'october/2014', '', '', '', 'Springer International Publishing', 0, 'No ha sido evaluado todavía.', 'Switzerland'),
(34, 12, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'Nelson MonzÃ³n, Javier SÃ¡nchez, AgustÃ­n Salgado', 'Implementation of a Robust Optical Flow Method for Color Images', 'CTIM Technical Report', '2254-2353', 'A', '4', '1', '14', 'september/2014', '', '', '', 'Universidad de Las Palmas de Gran Canaria', 0, 'No ha sido evaluado todavía.', 'Las Palmas de Gran Canaria'),
(35, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Simon Baker and Daniel Scharstein and J. P. Lewis and Stefan Roth and Michael J. Black and Richard Szeliski', 'A Database and Evaluation Methodology for Optical Flow', 'International Conference on Computer Vision', '', 'Li', '', '1', '8', '2007', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(36, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Huber, P.J.', '', 'Robust Statistics', '9780471650720', 'B', '', '', '', '2004', '', '', '', 'Wiley', 0, 'No ha sido evaluado todavía.', ''),
(37, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Hartley, R.Â I. and Zisserman, A.', '', 'Multiple View Geometry in Computer Vision', '', 'B', '', '', '', '2004', '', '', '', 'Cambridge University Press, ISBN: 0521540518', 0, 'No ha sido evaluado todavía.', ''),
(38, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Irani, Michal and Anandan, P', 'Robust multi-sensor image alignment', 'Computer Vision, 1998. Sixth International Conference on', '', 'Li', '', '959', '966', '1998', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(39, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Odobez, Jean-Marc and Bouthemy, Patrick', 'Robust multiresolution estimation of parametric motion models', 'Journal of visual communication and image representation', '4', 'A', '6', '348', '365', '1995', '', '', '', 'Elsevier', 0, 'No ha sido evaluado todavía.', ''),
(40, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Lucas, Bruce D and Kanade, Takeo', 'An iterative image registration technique with an application to stereo vision.', 'IJCAI', '', 'Li', '81', '674', '679', '1981', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(41, 12, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Xu, Li and Jia, Jiaya and Matsushita, Yasuyuki', 'Motion Detail Preserving Optical Flow Estimation.', 'IEEE Trans. Pattern Anal. Mach. Intell.', '9', 'A', '34', '1744', '1757', '2012', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(42, 12, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Thomas Brox and Jitendra Malik', 'Large Displacement Optical Flow: Descriptor Matching in Variational Motion Estimation', 'IEEE PAMI', '0162-8828', 'A', '33', '500', '513', '2011', '', '', '', 'IEEE Computer Society', 0, 'No ha sido evaluado todavía.', 'Los Alamitos, CA, USA'),
(43, 12, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Rachid Deriche and ThÃ©odore Papadopoulo and Javier SÃ¡nchez', 'Symmetrical Dense Optical Flow Estimation with Occlusions Detection', 'International Journal of Computer Vision', '0920-5691', 'A', '75', '371', '385', '2007', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(44, 12, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Joachim Weickert and Javier SÃ¡nchez', 'Reliable Estimation of Dense Optical Flow Fields with Large Displacements', 'International Journal of Computer Vision', '1', 'A', '39', '41', '56', '2000', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(45, 12, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Xu, Li and Jia, Jiaya and Matsushita, Yasuyuki', 'Motion Detail Preserving Optical Flow Estimation.', 'IEEE Trans. Pattern Anal. Mach. Intell.', '9', 'A', '34', '1744', '1757', '2012', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(46, 12, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Thomas Brox and Jitendra Malik', 'Large Displacement Optical Flow: Descriptor Matching in Variational Motion Estimation', 'IEEE PAMI', '0162-8828', 'A', '33', '500', '513', '2011', '', '', '', 'IEEE Computer Society', 0, 'No ha sido evaluado todavía.', 'Los Alamitos, CA, USA'),
(47, 12, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Rachid Deriche and ThÃ©odore Papadopoulo and Javier SÃ¡nchez', 'Symmetrical Dense Optical Flow Estimation with Occlusions Detection', 'International Journal of Computer Vision', '0920-5691', 'A', '75', '371', '385', '2007', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(48, 12, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Joachim Weickert and Javier SÃ¡nchez', 'Reliable Estimation of Dense Optical Flow Fields with Large Displacements', 'International Journal of Computer Vision', '1', 'A', '39', '41', '56', '2000', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(56, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'SÃ¡nchez, Javier and MonzÃ³n, Nelson and Salgado, AgustÃ­n', 'Robust Optical Flow Estimation', 'Image Processing On Line', '', 'A', '3', '252', '270', '2013', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(57, 8, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'SÃ¡nchez, Javier and Meinhardt-Llopis, Enric and Facciolo, Gabriele', 'TV-L1 Optical Flow Estimation', 'Image Processing On Line', '', 'A', '3', '137', '150', '2013', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(58, 8, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Meinhardt-Llopis, Enric and SÃ¡nchez, Javier and Kondermann, Daniel', 'Horn-Schunck Optical Flow with a Multi-Scale Strategy', 'Image Processing On Line', '', 'A', '3', '151', '172', '2013', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(59, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Szeliski, Richard', '', 'Computer vision algorithms and applications', '9781848829343 1848829345 ', 'L', '', '', '', '2011', '', '', '', 'Springer', 0, 'No ha sido evaluado todavía.', 'London; New York'),
(60, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Evangelidis, Georgios D and Psarakis, Emmanouil Z', 'Parametric image alignment using enhanced correlation coefficient maximization', 'Pattern Analysis and Machine Intelligence, IEEE Transactions on', '10', 'A', '30', '1858', '1865', '2008', '', '', '', 'IEEE', 0, 'No ha sido evaluado todavía.', ''),
(61, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Daniel Scharstein and J. P. Lewis and Stefan Roth and Michael J. Black and Richard Szeliski', 'A Database and Evaluation Methodology for Optical Flow', 'International Conference on Computer Vision', '', 'Li', '', '1', '8', '2007', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(62, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Raju Patil and Kong Man Cheung and Iain Matthews', 'Lucas-Kanade 20 Years On: Part 5', '', 'cmu-ri-tr-04-64', 'S', '', '', '', 'November/2004', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(63, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Ralph Gross and Iain Matthews', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 4', '', 'cmu-ri-tr-04-14', 'S', '', '', '', 'February/2004', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(64, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Huber, P.J.', '', 'Robust Statistics', '9780471650720', 'L', '', '', '', '2004', '', '', '', 'Wiley', 0, 'No ha sido evaluado todavía.', ''),
(65, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Baker, Simon and Matthews, Iain', 'Lucas-kanade 20 years on: A unifying framework', 'International Journal of Computer Vision', '3', 'A', '56', '221', '255', '2004', '', '', '', 'Springer', 0, 'No ha sido evaluado todavía.', ''),
(66, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Hartley, R.Â I. and Zisserman, A.', '', 'Multiple View Geometry in Computer Vision', '', 'L', '', '', '', '2004', '', '', '', 'Cambridge University Press, ISBN: 0521540518', 0, 'No ha sido evaluado todavía.', ''),
(67, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Ralph Gross and Iain Matthews', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 3', '', 'cmu-ri-tr-03-35', 'S', '', '', '', 'November/2003', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(68, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Ralph Gross and Iain Matthews and Takahiro Ishikawa', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 2', '', 'cmu-ri-tr-03-01', 'S', '', '', '', 'February/2003', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(69, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Iain Matthews', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 1', '', 'cmu-ri-tr-02-16', 'S', '', '', '', 'July/2002', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(70, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Baker, Simon and Matthews, Iain', 'Equivalence and efficiency of image alignment algorithms', 'Computer Vision and Pattern Recognition, 2001. CVPR 2001. Proceedings of the 2001 IEEE Computer Society Conference on', '', 'Li', '1', '1', '1090', '2001', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(71, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Irani, Michal and Anandan, P', 'Robust multi-sensor image alignment', 'Computer Vision, 1998. Sixth International Conference on', '', 'Li', '', '959', '966', '1998', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(72, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Michael J. Black and P. Anandan', 'The Robust Estimation of Multiple Motions: Parametric and Piecewise-Smooth Flow Fields', 'Computer Vision and Image Understanding', '1077-3142', 'A', '63', '75', '104', '1996', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(73, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Odobez, Jean-Marc and Bouthemy, Patrick', 'Robust multiresolution estimation of parametric motion models', 'Journal of visual communication and image representation', '4', 'A', '6', '348', '365', '1995', '', '', '', 'Elsevier', 0, 'No ha sido evaluado todavía.', ''),
(74, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Lucas, Bruce D and Kanade, Takeo', 'An iterative image registration technique with an application to stereo vision.', 'IJCAI', '', 'Li', '81', '674', '679', '1981', '', '', '', '', 0, 'No ha sido evaluado todavía.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dj`
--

CREATE TABLE `dj` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `hecho` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dk`
--

CREATE TABLE `dk` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
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

INSERT INTO `dk` (`id`, `userid`, `creation`, `lastmod`, `lastupdateid`, `investigador`, `centro`, `pais`, `inicio`, `fin`, `estado`, `infoestado`) VALUES
(1, 12, '2016-11-12 11:11:04', '2016-11-12 11:11:14', 15, 'Antonio Natale Consalvo', '', '', '', '', 0, 'No ha sido evaluado todavía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dl`
--

CREATE TABLE `dl` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `valor` int(1) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `cif` varchar(9) NOT NULL,
  `nombre` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `entidad` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gh`
--

CREATE TABLE `gh` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gi`
--

CREATE TABLE `gi` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `text` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

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
  `groupip` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `director` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ia`
--

CREATE TABLE `ia` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UID` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titulo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `subtipo` int(1) NOT NULL DEFAULT '0',
  `orgfin` varchar(100) CHARACTER SET latin1 NOT NULL,
  `entidades` varchar(150) CHARACTER SET latin1 NOT NULL,
  `desde` varchar(10) CHARACTER SET latin1 NOT NULL,
  `hasta` varchar(10) CHARACTER SET latin1 NOT NULL,
  `subvencion` text NOT NULL,
  `invprincipal` varchar(100) CHARACTER SET latin1 NOT NULL,
  `numinv` text CHARACTER SET latin1 NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavia.',
  `lastupdateid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ia`
--

INSERT INTO `ia` (`id`, `userid`, `UID`, `creation`, `lastmod`, `titulo`, `subtipo`, `orgfin`, `entidades`, `desde`, `hasta`, `subvencion`, `invprincipal`, `numinv`, `estado`, `infoestado`, `lastupdateid`) VALUES
(1, 12, 0, '2016-11-09 23:28:37', '0000-00-00 00:00:00', 'Proyecto DELL', 1, 'ULPGC', 'ULPGC', '27/11/2016', '02/12/2016', '120â‚¬', 'Rita Sebastiani', '2', 0, 'No ha sido evaluado todavía.', 15),
(2, 12, 0, '2016-11-13 00:54:42', '2016-11-13 00:54:59', '', 0, 'ULPGC', '', '23/11/2016', '01/12/2016', 'â‚¬', 'Antonio Natale Consalvo', '4', 0, 'No ha sido evaluado todavía.', 15),
(3, 12, 0, '2016-11-13 01:14:14', '2016-11-13 01:15:36', 'FI-WARE: Future Internet Core Platform', 0, '', '', '', '', 'â‚¬', 'Juan', '2', 0, 'No ha sido evaluado todavía.', 15),
(4, 12, 0, '2017-06-27 12:31:09', '0000-00-00 00:00:00', 'VÃ­ctor Daniel', 0, 'ULPGC', 'ULL', '2017-12-31', '2017-12-31', '200', 'VÃ­ctor Daniel RodrÃ­guez PÃ©rez', '4', 0, 'No ha sido evaluado todavía.', NULL),
(5, 11, 0, '2017-06-27 12:32:17', '0000-00-00 00:00:00', 'VÃ­ctor Daniel', 0, 'ULPGC', 'ULL', '2015-09-29', '2017-12-31', '2000', 'pedro', '4', 0, 'No ha sido evaluado todavía.', NULL),
(6, 12, 0, '2017-06-27 12:35:21', '0000-00-00 00:00:00', '', 0, '', '', '', '', '', '', '', 0, 'No ha sido evaluado todavía.', NULL),
(7, 12, 0, '2017-06-28 08:41:59', '0000-00-00 00:00:00', 'jo', 0, 'ULPGC', 'ULL', '2016-11-09', '2017-06-16', '2000', 'Maria MaxÃ© Campos', 'vituuu@hotmail.com', 0, 'No ha sido evaluado todavía.', NULL),
(8, 8, 5, '2017-07-06 12:37:01', '0000-00-00 00:00:00', 'ejecucion perfecta, un 10', 1, '', '', '', '', '', '', '', 0, 'No ha sido evaluado todavia.', NULL),
(9, 8, 5, '2017-07-06 12:38:37', '0000-00-00 00:00:00', 'ole', 1, 'ahi', 'illo', '2017-12-31', '2017-12-31', '200', 'VÃ­ctor Daniel RdrÃ­guez PÃ©rez', '3', 0, 'No ha sido evaluado todavia.', NULL),
(10, 8, 5, '2017-07-06 12:40:08', '0000-00-00 00:00:00', 'VÃ­ctor Daniel', 3, 'ULPGC', 'ULL', '', '', '', '', '', 1, 'No ha sido evaluado todavia.', NULL),
(11, 8, 5, '2017-07-06 12:41:41', '0000-00-00 00:00:00', 'VÃ­ctor Daniel', 2, 'ULPGC', 'ULL', '', '', '200', '', '', 2, 'No ha sido evaluado todavia.', NULL),
(12, 8, 5, '2017-07-12 11:48:37', '0000-00-00 00:00:00', 'elo', 1, '', '', '', '', '', '', '', 3, 'No ha sido evaluado todavia.', NULL),
(13, 8, 5, '2017-07-14 08:59:34', '0000-00-00 00:00:00', 'rdgh', 2, 'ULPGC', 'ULL', '2010-12-03', '2016-05-04', '1000', 'pepe', '4', 0, 'No ha sido evaluado todavia.', NULL),
(14, 8, 5, '2017-07-20 10:21:10', '0000-00-00 00:00:00', 'sfsdf', 0, 'sdfsdf', 'dgdg', '2017-12-31', '2016-11-30', '165', 'yo', '1', 0, 'No ha sido evaluado todavia.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ib`
--

CREATE TABLE `ib` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ic`
--

CREATE TABLE `ic` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
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
-- Volcado de datos para la tabla `ic`
--

INSERT INTO `ic` (`id`, `userid`, `UD`, `creation`, `lastmod`, `lastupdateid`, `autores`, `titulo`, `revista`, `isbn`, `clave`, `volumen`, `pin`, `pfin`, `fecha`, `impacto`, `citas`, `acta`, `editorial`, `estado`, `infoestado`, `lugar`) VALUES
(27, 12, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Xu, Li and Jia, Jiaya and Matsushita, Yasuyuki', 'Motion Detail Preserving Optical Flow Estimation.', 'IEEE Trans. Pattern Anal. Mach. Intell.', '9', 'A', '34', '1744', '1757', '2012', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(28, 12, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Thomas Brox and Jitendra Malik', 'Large Displacement Optical Flow: Descriptor Matching in Variational Motion Estimation', 'IEEE PAMI', '0162-8828', 'A', '33', '500', '513', '2011', '', '', '', 'IEEE Computer Society', 0, 'No ha sido evaluado todavía.', 'Los Alamitos, CA, USA'),
(29, 12, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Rachid Deriche and ThÃ©odore Papadopoulo and Javier SÃ¡nchez', 'Symmetrical Dense Optical Flow Estimation with Occlusions Detection', 'International Journal of Computer Vision', '0920-5691', 'A', '75', '371', '385', '2007', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(30, 12, 0, '2016-11-12 10:51:54', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Joachim Weickert and Javier SÃ¡nchez', 'Reliable Estimation of Dense Optical Flow Fields with Large Displacements', 'International Journal of Computer Vision', '1', 'A', '39', '41', '56', '2000', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(31, 12, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'Javier SÃ¡nchez, AgustÃ­n Salgado, Nelson MonzÃ³n', 'Computing Inverse Optical Flow', 'Pattern Recognition Letters', '0167-8655', 'A', '52', '32', '39', 'december/2014', '', '', '', 'Elsevier', 0, 'No ha sido evaluado todavía.', ''),
(32, 12, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'Nelson MonzÃ³n, AgustÃ­n Salgado, Javier SÃ¡nchez', 'Discontinuity preserving in TV-L1 optical flow methods', 'CTIM Technical Report', '2254-2353', 'A', '5', '1', '37', 'november/2014', '', '', '', 'Universidad de Las Palmas de Gran Canaria', 0, 'No ha sido evaluado todavía.', 'Las Palmas de Gran Canaria'),
(33, 12, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'MonzÃ³n, Nelson and SÃ¡nchez, Javier and Salgado, AgustÃ­n', 'Efficient Mechanism for Discontinuity Preserving in Optical Flow Methods', 'Image and Signal Processing', '978-3-319-07997-4', 'CR', '8509', '425', '432', 'october/2014', '', '', '', 'Springer International Publishing', 0, 'No ha sido evaluado todavía.', 'Switzerland'),
(34, 12, 0, '2016-11-12 11:27:56', '0000-00-00 00:00:00', 15, 'Nelson MonzÃ³n, Javier SÃ¡nchez, AgustÃ­n Salgado', 'Implementation of a Robust Optical Flow Method for Color Images', 'CTIM Technical Report', '2254-2353', 'A', '4', '1', '14', 'september/2014', '', '', '', 'Universidad de Las Palmas de Gran Canaria', 0, 'No ha sido evaluado todavía.', 'Las Palmas de Gran Canaria'),
(35, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Simon Baker and Daniel Scharstein and J. P. Lewis and Stefan Roth and Michael J. Black and Richard Szeliski', 'A Database and Evaluation Methodology for Optical Flow', 'International Conference on Computer Vision', '', 'Li', '', '1', '8', '2007', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(36, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Huber, P.J.', '', 'Robust Statistics', '9780471650720', 'B', '', '', '', '2004', '', '', '', 'Wiley', 0, 'No ha sido evaluado todavía.', ''),
(37, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Hartley, R.Â I. and Zisserman, A.', '', 'Multiple View Geometry in Computer Vision', '', 'B', '', '', '', '2004', '', '', '', 'Cambridge University Press, ISBN: 0521540518', 0, 'No ha sido evaluado todavía.', ''),
(38, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Irani, Michal and Anandan, P', 'Robust multi-sensor image alignment', 'Computer Vision, 1998. Sixth International Conference on', '', 'Li', '', '959', '966', '1998', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(39, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Odobez, Jean-Marc and Bouthemy, Patrick', 'Robust multiresolution estimation of parametric motion models', 'Journal of visual communication and image representation', '4', 'A', '6', '348', '365', '1995', '', '', '', 'Elsevier', 0, 'No ha sido evaluado todavía.', ''),
(40, 12, 0, '2016-11-12 23:58:28', '0000-00-00 00:00:00', 15, 'Lucas, Bruce D and Kanade, Takeo', 'An iterative image registration technique with an application to stereo vision.', 'IJCAI', '', 'Li', '81', '674', '679', '1981', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(41, 12, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Xu, Li and Jia, Jiaya and Matsushita, Yasuyuki', 'Motion Detail Preserving Optical Flow Estimation.', 'IEEE Trans. Pattern Anal. Mach. Intell.', '9', 'A', '34', '1744', '1757', '2012', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(42, 12, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Thomas Brox and Jitendra Malik', 'Large Displacement Optical Flow: Descriptor Matching in Variational Motion Estimation', 'IEEE PAMI', '0162-8828', 'A', '33', '500', '513', '2011', '', '', '', 'IEEE Computer Society', 0, 'No ha sido evaluado todavía.', 'Los Alamitos, CA, USA'),
(43, 12, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Rachid Deriche and ThÃ©odore Papadopoulo and Javier SÃ¡nchez', 'Symmetrical Dense Optical Flow Estimation with Occlusions Detection', 'International Journal of Computer Vision', '0920-5691', 'A', '75', '371', '385', '2007', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(44, 12, 0, '2016-11-13 00:36:05', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Joachim Weickert and Javier SÃ¡nchez', 'Reliable Estimation of Dense Optical Flow Fields with Large Displacements', 'International Journal of Computer Vision', '1', 'A', '39', '41', '56', '2000', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(45, 12, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Xu, Li and Jia, Jiaya and Matsushita, Yasuyuki', 'Motion Detail Preserving Optical Flow Estimation.', 'IEEE Trans. Pattern Anal. Mach. Intell.', '9', 'A', '34', '1744', '1757', '2012', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(46, 12, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Thomas Brox and Jitendra Malik', 'Large Displacement Optical Flow: Descriptor Matching in Variational Motion Estimation', 'IEEE PAMI', '0162-8828', 'A', '33', '500', '513', '2011', '', '', '', 'IEEE Computer Society', 0, 'No ha sido evaluado todavía.', 'Los Alamitos, CA, USA'),
(47, 12, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Rachid Deriche and ThÃ©odore Papadopoulo and Javier SÃ¡nchez', 'Symmetrical Dense Optical Flow Estimation with Occlusions Detection', 'International Journal of Computer Vision', '0920-5691', 'A', '75', '371', '385', '2007', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(48, 12, 0, '2016-11-13 01:10:52', '0000-00-00 00:00:00', 15, 'Luis Ãlvarez and Joachim Weickert and Javier SÃ¡nchez', 'Reliable Estimation of Dense Optical Flow Fields with Large Displacements', 'International Journal of Computer Vision', '1', 'A', '39', '41', '56', '2000', '', '', '', 'Kluwer Academic Publishers', 0, 'No ha sido evaluado todavía.', 'Hingham, MA, USA'),
(56, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'SÃ¡nchez, Javier and MonzÃ³n, Nelson and Salgado, AgustÃ­n', 'Robust Optical Flow Estimation', 'Image Processing On Line', '', 'A', '3', '252', '270', '2013', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(57, 8, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'SÃ¡nchez, Javier and Meinhardt-Llopis, Enric and Facciolo, Gabriele', 'TV-L1 Optical Flow Estimation', 'Image Processing On Line', '', 'A', '3', '137', '150', '2013', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(58, 8, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Meinhardt-Llopis, Enric and SÃ¡nchez, Javier and Kondermann, Daniel', 'Horn-Schunck Optical Flow with a Multi-Scale Strategy', 'Image Processing On Line', '', 'A', '3', '151', '172', '2013', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(59, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Szeliski, Richard', '', 'Computer vision algorithms and applications', '9781848829343 1848829345 ', 'L', '', '', '', '2011', '', '', '', 'Springer', 0, 'No ha sido evaluado todavía.', 'London; New York'),
(60, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Evangelidis, Georgios D and Psarakis, Emmanouil Z', 'Parametric image alignment using enhanced correlation coefficient maximization', 'Pattern Analysis and Machine Intelligence, IEEE Transactions on', '10', 'A', '30', '1858', '1865', '2008', '', '', '', 'IEEE', 0, 'No ha sido evaluado todavía.', ''),
(61, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Daniel Scharstein and J. P. Lewis and Stefan Roth and Michael J. Black and Richard Szeliski', 'A Database and Evaluation Methodology for Optical Flow', 'International Conference on Computer Vision', '', 'Li', '', '1', '8', '2007', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(62, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Raju Patil and Kong Man Cheung and Iain Matthews', 'Lucas-Kanade 20 Years On: Part 5', '', 'cmu-ri-tr-04-64', 'S', '', '', '', 'November/2004', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(63, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Ralph Gross and Iain Matthews', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 4', '', 'cmu-ri-tr-04-14', 'S', '', '', '', 'February/2004', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(64, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Huber, P.J.', '', 'Robust Statistics', '9780471650720', 'L', '', '', '', '2004', '', '', '', 'Wiley', 0, 'No ha sido evaluado todavía.', ''),
(65, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Baker, Simon and Matthews, Iain', 'Lucas-kanade 20 years on: A unifying framework', 'International Journal of Computer Vision', '3', 'A', '56', '221', '255', '2004', '', '', '', 'Springer', 0, 'No ha sido evaluado todavía.', ''),
(66, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Hartley, R.Â I. and Zisserman, A.', '', 'Multiple View Geometry in Computer Vision', '', 'L', '', '', '', '2004', '', '', '', 'Cambridge University Press, ISBN: 0521540518', 0, 'No ha sido evaluado todavía.', ''),
(67, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Ralph Gross and Iain Matthews', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 3', '', 'cmu-ri-tr-03-35', 'S', '', '', '', 'November/2003', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(68, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Ralph Gross and Iain Matthews and Takahiro Ishikawa', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 2', '', 'cmu-ri-tr-03-01', 'S', '', '', '', 'February/2003', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(69, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Simon Baker and Iain Matthews', 'Lucas-Kanade 20 Years On: A Unifying Framework: Part 1', '', 'cmu-ri-tr-02-16', 'S', '', '', '', 'July/2002', '', '', '', 'Institution: Robotics Institute', 0, 'No ha sido evaluado todavía.', 'Pittsburgh, PA'),
(70, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Baker, Simon and Matthews, Iain', 'Equivalence and efficiency of image alignment algorithms', 'Computer Vision and Pattern Recognition, 2001. CVPR 2001. Proceedings of the 2001 IEEE Computer Society Conference on', '', 'Li', '1', '1', '1090', '2001', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(71, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Irani, Michal and Anandan, P', 'Robust multi-sensor image alignment', 'Computer Vision, 1998. Sixth International Conference on', '', 'Li', '', '959', '966', '1998', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(72, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Michael J. Black and P. Anandan', 'The Robust Estimation of Multiple Motions: Parametric and Piecewise-Smooth Flow Fields', 'Computer Vision and Image Understanding', '1077-3142', 'A', '63', '75', '104', '1996', '', '', '', '', 0, 'No ha sido evaluado todavía.', ''),
(73, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Odobez, Jean-Marc and Bouthemy, Patrick', 'Robust multiresolution estimation of parametric motion models', 'Journal of visual communication and image representation', '4', 'A', '6', '348', '365', '1995', '', '', '', 'Elsevier', 0, 'No ha sido evaluado todavía.', ''),
(74, 12, 0, '2016-12-18 10:20:23', '0000-00-00 00:00:00', 15, 'Lucas, Bruce D and Kanade, Takeo', 'An iterative image registration technique with an application to stereo vision.', 'IJCAI', '', 'Li', '81', '674', '679', '1981', '', '', '', '', 0, 'No ha sido evaluado todavía.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `id`
--

CREATE TABLE `id` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UID` int(3) NOT NULL,
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

--
-- Volcado de datos para la tabla `id`
--

INSERT INTO `id` (`id`, `userid`, `UID`, `creation`, `lastmod`, `lastupdateid`, `autores`, `titulo`, `participacion`, `congreso`, `regional`, `lugar`, `fecha`, `estado`, `infoestado`) VALUES
(1, 12, 0, '2016-11-12 10:48:42', '0000-00-00 00:00:00', 15, 'Antonio Natale Consalvo, ', '', 'PresentaciÃ³n oral', '', 'Nacional', '', '', 0, 'No ha sido evaluado todavía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ie`
--

CREATE TABLE `ie` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `if`
--

CREATE TABLE `if` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ig`
--

CREATE TABLE `ig` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UID` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `investigador` varchar(250) NOT NULL,
  `editor` varchar(250) NOT NULL,
  `revista` varchar(250) NOT NULL,
  `impacto` varchar(2) NOT NULL,
  `nacional` varchar(15) NOT NULL,
  `desde` varchar(10) NOT NULL,
  `hasta` varchar(10) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ig`
--

INSERT INTO `ig` (`id`, `userid`, `UID`, `creation`, `lastmod`, `lastupdateid`, `investigador`, `editor`, `revista`, `impacto`, `nacional`, `desde`, `hasta`, `estado`, `infoestado`) VALUES
(1, 12, 0, '2016-11-12 11:14:04', '2016-11-12 11:14:19', 15, 'Juan', '', '', 'No', 'Nacional', '', '', 0, 'No ha sido evaluado todavía.'),
(2, 12, 0, '2016-11-12 11:15:38', '2016-11-12 11:15:56', 15, 'Maria', '', '', 'Si', 'Internacional', '', '', 0, 'No ha sido evaluado todavía.'),
(3, 12, 0, '2016-11-12 11:16:38', '0000-00-00 00:00:00', 15, 'test test', '', '', 'Si', 'Internacional', '', '', 0, 'No ha sido evaluado todavía.'),
(4, 12, 0, '2016-11-12 11:17:28', '2016-11-12 11:17:39', 15, 'Antonio Natale Consalvo', '', '', 'Si', 'Internacional', '', '', 0, 'No ha sido evaluado todavía.'),
(5, 11, 0, '2016-11-18 19:45:52', '0000-00-00 00:00:00', 13, 'Giorgio Rossi', 'Revisor', '', 'Si', 'Internacional', '', '', 0, 'No ha sido evaluado todavía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ih`
--

CREATE TABLE `ih` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
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
-- Volcado de datos para la tabla `ih`
--

INSERT INTO `ih` (`id`, `userid`, `creation`, `lastmod`, `lastupdateid`, `investigador`, `centro`, `pais`, `inicio`, `fin`, `estado`, `infoestado`) VALUES
(1, 12, '2016-11-12 11:11:04', '2016-11-12 11:11:14', 15, 'Antonio Natale Consalvo', '', '', '', '', 0, 'No ha sido evaluado todavía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ii`
--

CREATE TABLE `ii` (
  `id` int(11) NOT NULL,
  `groupinv` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ij`
--

CREATE TABLE `ij` (
  `id` int(11) NOT NULL,
  `groupinv` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ik`
--

CREATE TABLE `ik` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `titulo` varchar(300) CHARACTER SET utf8 NOT NULL,
  `orgfin` text CHARACTER SET utf8 NOT NULL,
  `entidades` text CHARACTER SET utf8 NOT NULL,
  `desde` varchar(10) CHARACTER SET utf8 NOT NULL,
  `hasta` varchar(10) CHARACTER SET utf8 NOT NULL,
  `invresponsable` varchar(250) CHARACTER SET utf8 NOT NULL,
  `numinv` text CHARACTER SET utf8 NOT NULL,
  `subvencion` varchar(50) CHARACTER SET utf8 NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `infoestado` varchar(1000) NOT NULL DEFAULT 'No ha sido evaluado todavía.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ik`
--

INSERT INTO `ik` (`id`, `userid`, `creation`, `lastmod`, `lastupdateid`, `titulo`, `orgfin`, `entidades`, `desde`, `hasta`, `invresponsable`, `numinv`, `subvencion`, `estado`, `infoestado`) VALUES
(3, 12, '2016-11-12 11:04:37', '0000-00-00 00:00:00', 15, '', '', '', '', '', 'test test', '2', 'â‚¬', 0, 'No ha sido evaluado todavía.'),
(4, 12, '2016-11-12 11:07:48', '2016-11-12 11:07:59', 15, 'Primer titulo', '', '', '', '', 'Pepe', '2', 'â‚¬', 0, 'No ha sido evaluado todavía.');

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
  `revista` varchar(250) CHARACTER SET utf8 NOT NULL,
  `isbn` varchar(250) CHARACTER SET utf8 NOT NULL,
  `clave` varchar(250) CHARACTER SET utf8 NOT NULL,
  `volumen` varchar(250) CHARACTER SET utf8 NOT NULL,
  `pin` varchar(250) CHARACTER SET utf8 NOT NULL,
  `pfin` varchar(250) CHARACTER SET utf8 NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `impacto` varchar(250) CHARACTER SET utf8 NOT NULL,
  `citas` varchar(250) CHARACTER SET utf8 NOT NULL,
  `acta` varchar(15) CHARACTER SET utf8 NOT NULL,
  `editorial` varchar(250) CHARACTER SET utf8 NOT NULL,
  `estado` int(1) NOT NULL,
  `infoestado` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `lugar` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `im`
--

CREATE TABLE `im` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inn`
--

CREATE TABLE `inn` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdateid` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
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

INSERT INTO `inn` (`id`, `userid`, `creation`, `lastmod`, `lastupdateid`, `titulo`, `investigadores`, `entidad`, `tema`, `fecha`, `estado`, `infoestado`) VALUES
(1, 12, '2016-11-09 23:32:42', '0000-00-00 00:00:00', 15, '', 'Juan, test test, Antonio Natale Consalvo, Maria Maria Maria', '', '', '', 0, 'No ha sido evaluado todavía.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `io`
--

CREATE TABLE `io` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UID` int(3) NOT NULL,
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
-- Estructura de tabla para la tabla `iñ`
--

CREATE TABLE `iñ` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `UD` int(3) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `titulo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subtipo` int(1) NOT NULL,
  `orgfin` varchar(100) CHARACTER SET utf8 NOT NULL,
  `entidades` varchar(150) CHARACTER SET utf8 NOT NULL,
  `desde` datetime NOT NULL,
  `hasta` datetime NOT NULL,
  `subvencion` int(6) NOT NULL,
  `invprincipal` varchar(100) NOT NULL,
  `numinv` int(3) NOT NULL,
  `estado` int(1) NOT NULL,
  `infoestado` varchar(1000) NOT NULL,
  `lastuptadteid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redinv`
--

CREATE TABLE `redinv` (
  `groupip` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `gestor` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

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
  `nombre` text NOT NULL,
  `userid` int(11) NOT NULL,
  `PROFOAYUD` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

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
-- Indices de la tabla `df`
--
ALTER TABLE `df`
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
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`cif`),
  ADD KEY `userid` (`userid`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`entidad`),
  ADD KEY `userid` (`userid`);

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
  ADD PRIMARY KEY (`groupip`),
  ADD KEY `userid` (`userid`);

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
  ADD KEY `userid` (`userid`);

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
  ADD KEY `userid` (`userid`);

--
-- Indices de la tabla `if`
--
ALTER TABLE `if`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

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
  ADD KEY `userid` (`userid`);

--
-- Indices de la tabla `ij`
--
ALTER TABLE `ij`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indices de la tabla `inn`
--
ALTER TABLE `inn`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `io`
--
ALTER TABLE `io`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `iñ`
--
ALTER TABLE `iñ`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redinv`
--
ALTER TABLE `redinv`
  ADD PRIMARY KEY (`groupip`),
  ADD KEY `userid` (`userid`);

--
-- Indices de la tabla `sindical`
--
ALTER TABLE `sindical`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `db`
--
ALTER TABLE `db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dc`
--
ALTER TABLE `dc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dd`
--
ALTER TABLE `dd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `de`
--
ALTER TABLE `de`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `df`
--
ALTER TABLE `df`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dk`
--
ALTER TABLE `dk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `dl`
--
ALTER TABLE `dl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `entidad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `gh`
--
ALTER TABLE `gh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `gi`
--
ALTER TABLE `gi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `gparticipacion`
--
ALTER TABLE `gparticipacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grupoinv`
--
ALTER TABLE `grupoinv`
  MODIFY `groupip` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ia`
--
ALTER TABLE `ia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `ib`
--
ALTER TABLE `ib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ic`
--
ALTER TABLE `ic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT de la tabla `id`
--
ALTER TABLE `id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ie`
--
ALTER TABLE `ie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `if`
--
ALTER TABLE `if`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ig`
--
ALTER TABLE `ig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ih`
--
ALTER TABLE `ih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ii`
--
ALTER TABLE `ii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ij`
--
ALTER TABLE `ij`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ik`
--
ALTER TABLE `ik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `il`
--
ALTER TABLE `il`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `im`
--
ALTER TABLE `im`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inn`
--
ALTER TABLE `inn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `io`
--
ALTER TABLE `io`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `iñ`
--
ALTER TABLE `iñ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `redinv`
--
ALTER TABLE `redinv`
  MODIFY `groupip` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sindical`
--
ALTER TABLE `sindical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tesis`
--
ALTER TABLE `tesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_profile` (`id`);

--
-- Filtros para la tabla `gparticipacion`
--
ALTER TABLE `gparticipacion`
  ADD CONSTRAINT `gparticipacion_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_profile` (`id`);

--
-- Filtros para la tabla `grupoinv`
--
ALTER TABLE `grupoinv`
  ADD CONSTRAINT `grupoinv_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_profile` (`id`);

--
-- Filtros para la tabla `ib`
--
ALTER TABLE `ib`
  ADD CONSTRAINT `ib_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `grupoinv` (`userid`);

--
-- Filtros para la tabla `ie`
--
ALTER TABLE `ie`
  ADD CONSTRAINT `ie_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `redinv` (`userid`);

--
-- Filtros para la tabla `if`
--
ALTER TABLE `if`
  ADD CONSTRAINT `if_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `evaluacion` (`userid`);

--
-- Filtros para la tabla `ii`
--
ALTER TABLE `ii`
  ADD CONSTRAINT `ii_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tesis` (`userid`);

--
-- Filtros para la tabla `ij`
--
ALTER TABLE `ij`
  ADD CONSTRAINT `ij_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tesis` (`userid`);

--
-- Filtros para la tabla `im`
--
ALTER TABLE `im`
  ADD CONSTRAINT `im_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `empresas` (`userid`);

--
-- Filtros para la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD CONSTRAINT `tesis_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_profile` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
