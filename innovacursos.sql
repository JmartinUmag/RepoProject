-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-05-2023 a las 18:35:11
-- Versión del servidor: 5.7.40
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `innovacursos`
--
CREATE DATABASE IF NOT EXISTS `innovacursos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `innovacursos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

DROP TABLE IF EXISTS `carrusel`;
CREATE TABLE IF NOT EXISTS `carrusel` (
  `id_Carrusel` int(11) NOT NULL AUTO_INCREMENT,
  `dir_imagen` varchar(200) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `posicion` int(11) NOT NULL,
  `descripcion` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_Carrusel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrusel`
--

INSERT INTO `carrusel` (`id_Carrusel`, `dir_imagen`, `URL`, `posicion`, `descripcion`) VALUES
(1, '/php.php', 'https://www.qualitydevs.com/wp-content/uploads/2021/05/PHP-Quality-Devs-1-1288x724.jpg', 2, '/aqui va desc/'),
(2, '/mysql.php', 'https://www.espacios.net.mx/wp-content/uploads/2021/07/base-de-datos-mysql-1024x675.png.webp', 3, '/aqui va desc/'),
(3, '/python.php', 'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2023/04/raspberry-lanza-editor-codigo-aprender-python-lenguaje-ia-3008158.jpg?tf=3840x', 1, '/aqui va desc/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_Categoria`, `nombre`) VALUES
(1, 'programacion'),
(2, 'base de datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

DROP TABLE IF EXISTS `clases`;
CREATE TABLE IF NOT EXISTS `clases` (
  `id_Clases` int(11) NOT NULL AUTO_INCREMENT,
  `URL_video1` varchar(200) DEFAULT NULL,
  `URL_video2` varchar(200) DEFAULT NULL,
  `URL_video3` varchar(200) DEFAULT NULL,
  `descripcion1` varchar(200) DEFAULT NULL,
  `descripcion2` varchar(200) DEFAULT NULL,
  `descripcion3` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_Clases`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id_Clases`, `URL_video1`, `URL_video2`, `URL_video3`, `descripcion1`, `descripcion2`, `descripcion3`) VALUES
(1, 'https://www.youtube.com/watch?v=m-ovirhigVQ', 'https://www.youtube.com/watch?v=Oh3KNU7vTwU', 'https://www.youtube.com/watch?v=qaR51M4kOMM', '/aqui va desc/', '/aqui va desc/', '/aqui va desc/'),
(2, 'https://www.youtube.com/watch?v=QB1HuG8JM4M&list=PLg9145ptuAihPxpM3YfQJYwPHv-Vnh_bV', 'https://www.youtube.com/watch?v=9SFAjDC4Ies&list=PLg9145ptuAihPxpM3YfQJYwPHv-Vnh_bV', 'https://www.youtube.com/watch?v=DT5WWyd6OF0&list=PLg9145ptuAihPxpM3YfQJYwPHv-Vnh_bV', '/aqui va desc/', '/aqui va desc/', '/aqui va desc/'),
(3, 'https://www.youtube.com/watch?v=DAdRO6ByBoU&list=PLyvsggKtwbLW1j0d5yaCkRF9Axpdlhsxz', 'https://www.youtube.com/watch?v=UzHFkEdnRuc&list=PLyvsggKtwbLW1j0d5yaCkRF9Axpdlhsxz', 'https://www.youtube.com/watch?v=w8VZxo1TlnU&list=PLyvsggKtwbLW1j0d5yaCkRF9Axpdlhsxz', '/aqui va desc/', '/aqui va desc/', '/aqui va desc/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id_Curso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cur` varchar(45) NOT NULL,
  `detalles` varchar(200) DEFAULT NULL,
  `dir_imagen` varchar(200) DEFAULT NULL,
  `relevancia` int(11) DEFAULT NULL,
  `id_Categoria` int(11) NOT NULL,
  `id_Pruebas` int(11) NOT NULL,
  `id_Clases` int(11) NOT NULL,
  PRIMARY KEY (`id_Curso`,`id_Categoria`,`id_Pruebas`,`id_Clases`),
  KEY `fk_Curso_Categoria1_idx` (`id_Categoria`),
  KEY `fk_Curso_Prueba1_idx` (`id_Pruebas`),
  KEY `fk_Curso_Clase1_idx` (`id_Clases`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_Curso`, `nombre_cur`, `detalles`, `dir_imagen`, `relevancia`, `id_Categoria`, `id_Pruebas`, `id_Clases`) VALUES
(1, 'PHP desde cero', '/aqui va desc/', 'https://www.qualitydevs.com/wp-content/uploads/2021/05/PHP-Quality-Devs-1-1288x724.jpg', 2, 1, 1, 1),
(2, 'MYSQL desde cero', '/aqui va desc/', 'https://www.espacios.net.mx/wp-content/uploads/2021/07/base-de-datos-mysql-1024x675.png.webp', 3, 2, 2, 2),
(6, 'Python desde cero', '/aqui va desc/', 'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2023/04/raspberry-lanza-editor-codigo-aprender-python-lenguaje-ia-3008158.jpg?tf=3840x', 1, 1, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

DROP TABLE IF EXISTS `notas`;
CREATE TABLE IF NOT EXISTS `notas` (
  `id_Notas` int(11) NOT NULL AUTO_INCREMENT,
  `nota1` float DEFAULT '0',
  `nota2` float DEFAULT '0',
  `nota3` float DEFAULT '0',
  `id_Usuario_Curso` int(11) NOT NULL,
  PRIMARY KEY (`id_Notas`,`id_Usuario_Curso`),
  KEY `fk_Calificacion_Usuario_Curso1_idx` (`id_Usuario_Curso`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id_Notas`, `nota1`, `nota2`, `nota3`, `id_Usuario_Curso`) VALUES
(1, 4.7, NULL, NULL, 2),
(2, 4.5, 6.3, 5.6, 3),
(3, 5.6, 7, NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas`
--

DROP TABLE IF EXISTS `pruebas`;
CREATE TABLE IF NOT EXISTS `pruebas` (
  `id_Pruebas` int(11) NOT NULL AUTO_INCREMENT,
  `URL1` varchar(200) DEFAULT '#',
  `URL2` varchar(200) DEFAULT '#',
  `URL3` varchar(200) DEFAULT '#',
  PRIMARY KEY (`id_Pruebas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pruebas`
--

INSERT INTO `pruebas` (`id_Pruebas`, `URL1`, `URL2`, `URL3`) VALUES
(1, 'https://forms.gle/ZXirwDuToRsDgZtCA', 'https://forms.gle/ZXirwDuToRsDgZtCA', 'https://forms.gle/ZXirwDuToRsDgZtCA'),
(2, 'https://forms.gle/ZXirwDuToRsDgZtCA', 'https://forms.gle/ZXirwDuToRsDgZtCA', 'https://forms.gle/ZXirwDuToRsDgZtCA'),
(3, 'https://forms.gle/ZXirwDuToRsDgZtCA', 'https://forms.gle/ZXirwDuToRsDgZtCA', 'https://forms.gle/ZXirwDuToRsDgZtCA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_Tipo`, `nombre`) VALUES
(1, 'admin'),
(2, 'profesor'),
(3, 'estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `id_Tipo` int(11) NOT NULL,
  PRIMARY KEY (`id_Usuario`,`id_Tipo`),
  KEY `fk_Usuario_Tipo_usuario_idx` (`id_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_Usuario`, `nombre`, `apellido`, `email`, `contrasena`, `id_Tipo`) VALUES
(1, 'Carlos', 'Montreal', 'c.montreal@yahoo.es', 'cmaon27', 2),
(2, 'Enriquez', 'Toledo', 'todoenquez@gmail.com', 'toballa1234', 3),
(3, 'Maria', 'Mailen', 'mmail@gmail.com', '$jsiakFasvV!', 1),
(4, 'Romina', 'Quintero', 'quieropan@hotmail.com', '$123quiqui321', 3),
(5, 'Yael', 'Kusanovic', 'kusael@gmail.com', 'contrasena', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_curso`
--

DROP TABLE IF EXISTS `usuario_curso`;
CREATE TABLE IF NOT EXISTS `usuario_curso` (
  `id_Usuario_Curso` int(11) NOT NULL AUTO_INCREMENT,
  `id_Usuario` int(11) NOT NULL,
  `id_Tipo` int(11) NOT NULL,
  `id_Curso` int(11) NOT NULL,
  `avance` int(11) DEFAULT '0',
  PRIMARY KEY (`id_Usuario_Curso`,`id_Usuario`,`id_Tipo`,`id_Curso`),
  KEY `fk_Usuario_has_Curso_Curso1_idx` (`id_Curso`),
  KEY `fk_Usuario_has_Curso_Usuario1_idx` (`id_Usuario`,`id_Tipo`),
  KEY `id_Usuario_Curso` (`id_Usuario_Curso`),
  KEY `id_Usuario` (`id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_curso`
--

INSERT INTO `usuario_curso` (`id_Usuario_Curso`, `id_Usuario`, `id_Tipo`, `id_Curso`, `avance`) VALUES
(1, 1, 2, 1, NULL),
(2, 2, 3, 1, 30),
(3, 4, 3, 1, 90),
(4, 5, 3, 1, 60);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_Curso_Categoria1` FOREIGN KEY (`id_Categoria`) REFERENCES `categoria` (`id_Categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Curso_Clase1` FOREIGN KEY (`id_Clases`) REFERENCES `clases` (`id_Clases`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Curso_Prueba1` FOREIGN KEY (`id_Pruebas`) REFERENCES `pruebas` (`id_Pruebas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_Calificacion_Usuario_Curso1` FOREIGN KEY (`id_Usuario_Curso`) REFERENCES `usuario_curso` (`id_Usuario_Curso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Tipo_usuario` FOREIGN KEY (`id_Tipo`) REFERENCES `tipo_usuario` (`id_Tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_curso`
--
ALTER TABLE `usuario_curso`
  ADD CONSTRAINT `fk_Usuario_has_Curso_Curso1` FOREIGN KEY (`id_Curso`) REFERENCES `curso` (`id_Curso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_has_Curso_Usuario1` FOREIGN KEY (`id_Usuario`,`id_Tipo`) REFERENCES `usuario` (`id_Usuario`, `id_Tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
