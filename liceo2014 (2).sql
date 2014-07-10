-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-07-2014 a las 05:54:42
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `liceo2014`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `id_periodo_e` char(100) DEFAULT NULL,
  `id_representante` int(11) DEFAULT NULL,
  `nombres_a` char(50) DEFAULT NULL,
  `apellidos_a` char(50) DEFAULT NULL,
  `cedula_a` char(10) DEFAULT NULL,
  `sexo_a` char(20) DEFAULT NULL,
  `fecha_n` date DEFAULT NULL,
  `edad_a` int(11) DEFAULT NULL,
  `lugar_n_a` char(150) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `id_periodo_e`, `id_representante`, `nombres_a`, `apellidos_a`, `cedula_a`, `sexo_a`, `fecha_n`, `edad_a`, `lugar_n_a`) VALUES
(1, '1', 7, 'luiggi antonio', 'contreras flores', '20142467', 'femenino', '1991-02-07', 25, 'santa barbara del zulia'),
(21, '10', 2, 'keiner jose', 'flores jimenez', '21939830', 'masculino', '2001-05-22', 15, 'el vigia merida'),
(22, '7', 3, 'junior david', 'rojas toledo', '28954231', 'masculino', '2002-11-13', 12, 'el chivo estado zulia'),
(23, '2', 4, 'karol', 'bustamante', '16906699', 'M', '2010-06-07', 29, 'vigia'),
(24, '1', 5, 'Jesus', 'Bustamante', '18208483', 'M', '1989-04-09', 25, 'Tovar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ano_escolar`
--

CREATE TABLE IF NOT EXISTS `ano_escolar` (
  `id_ano_escolar` int(11) NOT NULL AUTO_INCREMENT,
  `cod_inscripcion` varchar(30) NOT NULL,
  `cedula_a` int(11) NOT NULL,
  `periodo_escolar` varchar(50) NOT NULL,
  `grado_escolar` varchar(30) NOT NULL,
  `seccion` varchar(5) NOT NULL,
  PRIMARY KEY (`id_ano_escolar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `ano_escolar`
--

INSERT INTO `ano_escolar` (`id_ano_escolar`, `cod_inscripcion`, `cedula_a`, `periodo_escolar`, `grado_escolar`, `seccion`) VALUES
(2, 'id_gradoid_seccion_id_fecha', 0, '0000-00-00', '', ''),
(3, 'id_gradoid_seccion_id_fecha', 18208483, '0000-00-00', '', ''),
(4, 'id_gradoid_seccion_id_fecha', 18208483, '', '', ''),
(5, 'id_gradoid_seccion_id_fecha', 18208483, '', '', ''),
(6, 'id_gradoid_seccion_id_fecha', 0, '', '', ''),
(7, 'id_gradoid_seccion_id_fecha', 18208483, '', '', ''),
(8, 'id_gradoid_seccion_id_fecha', 18208483, '10', '', ''),
(9, 'id_gradoid_seccion_id_fecha', 18208483, '14', '', ''),
(10, 'id_gradoid_seccion_id_fecha', 18208483, '14', '1', ''),
(11, 'id_gradoid_seccion_id_fecha', 18208483, '2', 'septimo', ''),
(12, 'id_gradoid_seccion_id_fecha', 18208483, '5', 'noveno', ''),
(13, 'id_gradoid_seccion_id_fecha', 18208483, '2014-05-25 --- 2014-05-26', 'septimo', ''),
(14, 'id_gradoid_seccion_id_fecha', 18208483, '2014-05-21 --- 2014-05-22', 'septimo', '1'),
(15, 'id_seccion_', 18208483, '2014-06-13 --- 2014-05-15', 'octavo', 'C'),
(16, '_', 18208483, '2014-05-24 --- 2014-05-25', 'noveno', 'B'),
(17, 'octavoD_2014-05-24 --- 2014-05', 18208483, '2014-05-24 --- 2014-05-25', 'octavo', 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE IF NOT EXISTS `grado` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grado` char(20) DEFAULT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id_grado`, `nombre_grado`) VALUES
(1, 'septimo'),
(2, 'octavo'),
(3, 'noveno'),
(4, 'cuarto'),
(5, 'quinto'),
(6, 'sesto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `id_grado` int(11) DEFAULT NULL,
  `cod_materia` char(20) DEFAULT NULL,
  `nom_materia` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `id_grado`, `cod_materia`, `nom_materia`) VALUES
(2, 1, '82611', 'matematica'),
(4, 6, '81545', 'castellano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo_escolar`
--

CREATE TABLE IF NOT EXISTS `periodo_escolar` (
  `id_periodo_e` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_culminacion` date DEFAULT NULL,
  PRIMARY KEY (`id_periodo_e`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `periodo_escolar`
--

INSERT INTO `periodo_escolar` (`id_periodo_e`, `fecha_inicio`, `fecha_culminacion`) VALUES
(1, '0000-00-00', '0000-00-00'),
(2, '2014-05-21', '2014-05-22'),
(3, '2014-05-23', '2014-05-24'),
(4, '2014-05-24', '2014-05-25'),
(5, '2014-05-25', '2014-05-26'),
(6, '2014-05-30', '2014-05-31'),
(7, '2014-06-13', '2014-05-15'),
(8, '2015-05-15', '2014-05-04'),
(9, '2016-05-13', '2017-05-07'),
(10, '2018-05-12', '2020-05-16'),
(11, '2019-06-01', '2020-06-06'),
(12, '2010-06-16', '2023-06-17'),
(13, '2010-06-07', '2011-06-14'),
(14, '2030-08-05', '2031-08-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representantelegal`
--

CREATE TABLE IF NOT EXISTS `representantelegal` (
  `id_representante` int(11) NOT NULL AUTO_INCREMENT,
  `nombres_r` char(50) DEFAULT NULL,
  `apellidos_r` char(50) DEFAULT NULL,
  `cedula_r` char(10) DEFAULT NULL,
  `edad_r` int(11) DEFAULT NULL,
  `parentesco_r` char(20) DEFAULT NULL,
  `sexo_r` char(10) DEFAULT NULL,
  `ocupacion_r` char(20) DEFAULT NULL,
  `telefono_r` char(10) DEFAULT NULL,
  `direccion_r` char(150) DEFAULT NULL,
  PRIMARY KEY (`id_representante`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `representantelegal`
--

INSERT INTO `representantelegal` (`id_representante`, `nombres_r`, `apellidos_r`, `cedula_r`, `edad_r`, `parentesco_r`, `sexo_r`, `ocupacion_r`, `telefono_r`, `direccion_r`) VALUES
(1, 'maria zulay', 'araque pereira', '10236965', 45, 'madre', 'mujer', 'obrera', '0424748497', 'la paez'),
(2, 'paula sofia', 'dias lopez', '11555847', 42, 'madre', 'mujer', 'bedel', '0275881494', 'santa barbara del zulia'),
(3, 'maria yuraima', 'toledo rangel', '16842892', 30, 'madre', 'mujer', 'obrera', '0275808006', 'parque chama'),
(4, 'Anggy', 'Perez', '16307650', 30, 'Madre', 'F', 'Empleada', '010000000', 'el vigia'),
(5, 'Marcelino', 'Bustamante', '5448294', 55, 'Padre', 'M', 'Fotografo', '0424759300', 'Tovar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE IF NOT EXISTS `seccion` (
  `id_seccion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_seccion` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_seccion`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `nombre_seccion`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(8, 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) DEFAULT NULL,
  `n_usuario` char(20) DEFAULT NULL,
  `c_usuario` char(20) DEFAULT NULL,
  `privilegio` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_alumno`, `n_usuario`, `c_usuario`, `privilegio`) VALUES
(1, 1, 'luiggi', '1234', 'A'),
(6, 0, 'jesus', '12345678', 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
