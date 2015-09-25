-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2015 a las 22:31:19
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `isbn` int(25) NOT NULL DEFAULT '0',
  `dewey` varchar(10) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `autor` varchar(30) DEFAULT NULL,
  `editorial` varchar(30) DEFAULT NULL,
  `ejemplares` int(2) DEFAULT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`isbn`, `dewey`, `titulo`, `autor`, `editorial`, `ejemplares`) VALUES
(1, '1', '1', '1', '1', 1),
(2, '2', '2', '2', '2', 2),
(3, '3', '3', '3', '3', 3),
(4, '4', '4', '4', '4', 4),
(5, '5', '5', '5', '5', 5),
(1111, 'd215 2158', 'libro pueda', 'autor de prueba', 'editorial de prueba', 3),
(1234, '820 R584', 'Libro2', 'Autor2', 'Editorial2', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
