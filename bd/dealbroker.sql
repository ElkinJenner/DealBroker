-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-06-2023 a las 17:32:42
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dealbroker`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adquisicion`
--

DROP TABLE IF EXISTS `adquisicion`;
CREATE TABLE IF NOT EXISTS `adquisicion` (
  `IdAdquisicion` int(11) NOT NULL AUTO_INCREMENT,
  `IdProducto` int(11) NOT NULL,
  PRIMARY KEY (`IdAdquisicion`),
  KEY `IdProducto` (`IdProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatar`
--

DROP TABLE IF EXISTS `avatar`;
CREATE TABLE IF NOT EXISTS `avatar` (
  `FotoAvatar` varchar(100) NOT NULL,
  `TipoGenero` varchar(100) NOT NULL,
  PRIMARY KEY (`FotoAvatar`),
  KEY `TipoGenero` (`TipoGenero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `NomCargo` varchar(100) NOT NULL,
  PRIMARY KEY (`NomCargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaprod`
--

DROP TABLE IF EXISTS `categoriaprod`;
CREATE TABLE IF NOT EXISTS `categoriaprod` (
  `NombreCategoria` varchar(50) NOT NULL,
  PRIMARY KEY (`NombreCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `IdChat` int(11) NOT NULL AUTO_INCREMENT,
  `IdPlayer` int(11) NOT NULL,
  `FechaChat` datetime NOT NULL,
  `MensajeChat` varchar(500) NOT NULL,
  PRIMARY KEY (`IdChat`),
  KEY `IdPlayer` (`IdPlayer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatstaff`
--

DROP TABLE IF EXISTS `chatstaff`;
CREATE TABLE IF NOT EXISTS `chatstaff` (
  `IdChatStaff` int(11) NOT NULL AUTO_INCREMENT,
  `IdStaff` int(11) NOT NULL,
  `MensajeStaff` varchar(500) NOT NULL,
  PRIMARY KEY (`IdChatStaff`),
  KEY `IdStaff` (`IdStaff`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `EstadoProducto` varchar(50) NOT NULL,
  PRIMARY KEY (`EstadoProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `TipoGenero` varchar(100) NOT NULL,
  PRIMARY KEY (`TipoGenero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `ModoMenu` varchar(100) NOT NULL,
  PRIMARY KEY (`ModoMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modovista`
--

DROP TABLE IF EXISTS `modovista`;
CREATE TABLE IF NOT EXISTS `modovista` (
  `Modo` varchar(100) NOT NULL,
  PRIMARY KEY (`Modo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monedas`
--

DROP TABLE IF EXISTS `monedas`;
CREATE TABLE IF NOT EXISTS `monedas` (
  `CantMoneda` int(11) NOT NULL,
  PRIMARY KEY (`CantMoneda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `navegacion`
--

DROP TABLE IF EXISTS `navegacion`;
CREATE TABLE IF NOT EXISTS `navegacion` (
  `IdStaff` int(11) NOT NULL,
  `ModoMenu` varchar(100) NOT NULL,
  KEY `IdStaff` (`IdStaff`),
  KEY `ModoMenu` (`ModoMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `IdPlayer` int(11) NOT NULL AUTO_INCREMENT,
  `FechaRegistro` datetime NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `FotoPlayer` varchar(100) NOT NULL,
  `Descripción` varchar(500) NOT NULL,
  PRIMARY KEY (`IdPlayer`),
  KEY `FotoPlayer` (`FotoPlayer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE IF NOT EXISTS `preguntas` (
  `IdPregunta` int(11) NOT NULL AUTO_INCREMENT,
  `IdPlayer` int(11) NOT NULL,
  `NomPregunta` varchar(100) NOT NULL,
  `IdRespuesta` int(11) NOT NULL,
  `CantMoneda` int(11) NOT NULL,
  PRIMARY KEY (`IdPregunta`),
  KEY `IdPlayer` (`IdPlayer`),
  KEY `PaqMoneda` (`CantMoneda`),
  KEY `IdRespuesta` (`IdRespuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE IF NOT EXISTS `respuestas` (
  `IdRespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `NomRespuesta` varchar(100) NOT NULL,
  PRIMARY KEY (`IdRespuesta`),
  KEY `NomRespuesta` (`NomRespuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultplayers`
--

DROP TABLE IF EXISTS `resultplayers`;
CREATE TABLE IF NOT EXISTS `resultplayers` (
  `IdPlayer` int(11) NOT NULL,
  `IdResultPR` int(11) NOT NULL,
  `IdResultReto` int(11) NOT NULL,
  `IdAdquisicion` int(11) NOT NULL,
  KEY `IdPlayer` (`IdPlayer`),
  KEY `IdResultPR` (`IdResultPR`),
  KEY `IdResultReto` (`IdResultReto`),
  KEY `IdAdquisicion` (`IdAdquisicion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultpr`
--

DROP TABLE IF EXISTS `resultpr`;
CREATE TABLE IF NOT EXISTS `resultpr` (
  `IdResultPR` int(11) NOT NULL AUTO_INCREMENT,
  `IdPregunta` int(11) NOT NULL,
  `RespuestaResp` int(11) NOT NULL,
  `MonedaObtenida` int(11) NOT NULL,
  PRIMARY KEY (`IdResultPR`),
  KEY `IdPregunta` (`IdPregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultreto`
--

DROP TABLE IF EXISTS `resultreto`;
CREATE TABLE IF NOT EXISTS `resultreto` (
  `IdResultReto` int(11) NOT NULL AUTO_INCREMENT,
  `IdReto` int(11) NOT NULL,
  PRIMARY KEY (`IdResultReto`),
  KEY `IdReto` (`IdReto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retos`
--

DROP TABLE IF EXISTS `retos`;
CREATE TABLE IF NOT EXISTS `retos` (
  `IdReto` int(11) NOT NULL AUTO_INCREMENT,
  `NomReto` varchar(100) NOT NULL,
  `FotoReto` varchar(100) NOT NULL,
  `DescReto` varchar(500) NOT NULL,
  `CantMoneda` int(11) NOT NULL,
  PRIMARY KEY (`IdReto`),
  KEY `PaqMoneda` (`CantMoneda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `IdStaff` int(11) NOT NULL AUTO_INCREMENT,
  `FotoPerfil` varchar(100) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `NomCargo` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  PRIMARY KEY (`IdStaff`),
  KEY `NomCargo` (`NomCargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

DROP TABLE IF EXISTS `tienda`;
CREATE TABLE IF NOT EXISTS `tienda` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `FotoProducto` varchar(100) NOT NULL,
  `NombreProducto` varchar(100) NOT NULL,
  `CodProducto` varchar(50) NOT NULL,
  `NombreCategoria` varchar(50) NOT NULL,
  `Stock` int(11) NOT NULL,
  `EstadoProducto` varchar(50) NOT NULL,
  `DescrProducto` varchar(500) NOT NULL,
  `PrecioMoneda` int(11) NOT NULL,
  PRIMARY KEY (`IdProducto`),
  KEY `EstadoProducto` (`EstadoProducto`),
  KEY `NombreCategoria` (`NombreCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vista`
--

DROP TABLE IF EXISTS `vista`;
CREATE TABLE IF NOT EXISTS `vista` (
  `IdStaff` int(11) NOT NULL,
  `Modo` varchar(100) NOT NULL,
  KEY `IdStaff` (`IdStaff`),
  KEY `Modo` (`Modo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adquisicion`
--
ALTER TABLE `adquisicion`
  ADD CONSTRAINT `adquisicion_ibfk_1` FOREIGN KEY (`IdProducto`) REFERENCES `tienda` (`IdProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `avatar`
--
ALTER TABLE `avatar`
  ADD CONSTRAINT `avatar_ibfk_1` FOREIGN KEY (`TipoGenero`) REFERENCES `genero` (`TipoGenero`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`IdPlayer`) REFERENCES `players` (`IdPlayer`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `chatstaff`
--
ALTER TABLE `chatstaff`
  ADD CONSTRAINT `chatstaff_ibfk_1` FOREIGN KEY (`IdStaff`) REFERENCES `staff` (`IdStaff`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `navegacion`
--
ALTER TABLE `navegacion`
  ADD CONSTRAINT `navegacion_ibfk_1` FOREIGN KEY (`ModoMenu`) REFERENCES `menu` (`ModoMenu`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `navegacion_ibfk_2` FOREIGN KEY (`IdStaff`) REFERENCES `staff` (`IdStaff`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`FotoPlayer`) REFERENCES `avatar` (`FotoAvatar`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`IdPlayer`) REFERENCES `players` (`IdPlayer`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `preguntas_ibfk_3` FOREIGN KEY (`CantMoneda`) REFERENCES `monedas` (`CantMoneda`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `preguntas_ibfk_4` FOREIGN KEY (`IdRespuesta`) REFERENCES `respuestas` (`IdRespuesta`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `resultplayers`
--
ALTER TABLE `resultplayers`
  ADD CONSTRAINT `resultplayers_ibfk_1` FOREIGN KEY (`IdPlayer`) REFERENCES `players` (`IdPlayer`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `resultplayers_ibfk_2` FOREIGN KEY (`IdResultPR`) REFERENCES `resultpr` (`IdResultPR`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `resultreto`
--
ALTER TABLE `resultreto`
  ADD CONSTRAINT `resultreto_ibfk_1` FOREIGN KEY (`IdReto`) REFERENCES `retos` (`IdReto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `retos`
--
ALTER TABLE `retos`
  ADD CONSTRAINT `retos_ibfk_1` FOREIGN KEY (`CantMoneda`) REFERENCES `monedas` (`CantMoneda`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`NomCargo`) REFERENCES `cargo` (`NomCargo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD CONSTRAINT `tienda_ibfk_1` FOREIGN KEY (`NombreCategoria`) REFERENCES `categoriaprod` (`NombreCategoria`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tienda_ibfk_2` FOREIGN KEY (`EstadoProducto`) REFERENCES `estado` (`EstadoProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `vista`
--
ALTER TABLE `vista`
  ADD CONSTRAINT `vista_ibfk_1` FOREIGN KEY (`IdStaff`) REFERENCES `staff` (`IdStaff`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `vista_ibfk_2` FOREIGN KEY (`Modo`) REFERENCES `modovista` (`Modo`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
