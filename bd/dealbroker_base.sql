-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-06-2023 a las 13:37:34
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
  `FotoAvatar` varchar(200) NOT NULL,
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
  `NomCargo` varchar(200) NOT NULL,
  PRIMARY KEY (`NomCargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaprod`
--

DROP TABLE IF EXISTS `categoriaprod`;
CREATE TABLE IF NOT EXISTS `categoriaprod` (
  `NombreCategoria` varchar(100) NOT NULL,
  PRIMARY KEY (`NombreCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `IdChat` int(11) NOT NULL AUTO_INCREMENT,
  `FechaChat` timestamp NOT NULL,
  `MensajeChat` varchar(500) NOT NULL,
  `IdPlayer` int(11) NOT NULL,
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
  `Nombres` varchar(200) NOT NULL,
  `FotoPerfil` varchar(100) NOT NULL,
  `MensajeStaff` varchar(500) NOT NULL,
  PRIMARY KEY (`IdChatStaff`),
  KEY `Nombres` (`Nombres`),
  KEY `FotoPerfil` (`FotoPerfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `EstadoProducto` varchar(100) NOT NULL,
  PRIMARY KEY (`EstadoProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `TipoGenero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monedas`
--

DROP TABLE IF EXISTS `monedas`;
CREATE TABLE IF NOT EXISTS `monedas` (
  `PaqMoneda` int(11) NOT NULL,
  PRIMARY KEY (`PaqMoneda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma`
--

DROP TABLE IF EXISTS `plataforma`;
CREATE TABLE IF NOT EXISTS `plataforma` (
  `ModoVista` varchar(200) NOT NULL,
  PRIMARY KEY (`ModoVista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `CodPlayer` varchar(200) NOT NULL,
  `Nombres` varchar(200) NOT NULL,
  `FotoPlayer` varchar(200) NOT NULL,
  `Descripción` varchar(500) NOT NULL,
  `IdPlayer` int(11) NOT NULL,
  `IdResultPR` int(200) NOT NULL,
  `IdResultReto` int(200) NOT NULL,
  `IdAdquisicion` int(200) NOT NULL,
  PRIMARY KEY (`CodPlayer`),
  KEY `FotoPlayer` (`FotoPlayer`),
  KEY `IdPlayer` (`IdPlayer`),
  KEY `IdResultPR` (`IdResultPR`),
  KEY `IdResultReto` (`IdResultReto`),
  KEY `IdAdquisicion` (`IdAdquisicion`),
  KEY `Nombres` (`Nombres`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE IF NOT EXISTS `preguntas` (
  `IdPregunta` int(11) NOT NULL AUTO_INCREMENT,
  `IdPlayer` int(11) NOT NULL,
  `NomPregunta` varchar(500) NOT NULL,
  `NomRespuesta` varchar(200) NOT NULL,
  `ValidacionR` tinyint(1) NOT NULL,
  `PaqMoneda` int(11) NOT NULL,
  PRIMARY KEY (`IdPregunta`),
  KEY `IdPlayer` (`IdPlayer`),
  KEY `NomRespuesta` (`NomRespuesta`),
  KEY `ValidacionR` (`ValidacionR`),
  KEY `PaqMoneda` (`PaqMoneda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

DROP TABLE IF EXISTS `registros`;
CREATE TABLE IF NOT EXISTS `registros` (
  `IdRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(200) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `FechaRegistro` datetime NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  PRIMARY KEY (`IdRegistro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE IF NOT EXISTS `respuestas` (
  `NomRespuesta` varchar(200) NOT NULL,
  PRIMARY KEY (`NomRespuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultpr`
--

DROP TABLE IF EXISTS `resultpr`;
CREATE TABLE IF NOT EXISTS `resultpr` (
  `IdResultPR` int(11) NOT NULL AUTO_INCREMENT,
  `IdPregunta` int(11) NOT NULL,
  `ValidacionR` tinyint(1) NOT NULL,
  `MonedaObtenida` double NOT NULL,
  PRIMARY KEY (`IdResultPR`),
  KEY `IdPregunta` (`IdPregunta`),
  KEY `ValidacionR` (`ValidacionR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultreto`
--

DROP TABLE IF EXISTS `resultreto`;
CREATE TABLE IF NOT EXISTS `resultreto` (
  `IdResultReto` int(11) NOT NULL,
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
  `NomReto` varchar(200) NOT NULL,
  `FotoReto` varchar(200) NOT NULL,
  `DescReto` varchar(500) NOT NULL,
  `PaqMoneda` int(11) NOT NULL,
  PRIMARY KEY (`IdReto`),
  KEY `PaqMoneda` (`PaqMoneda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Nombres` varchar(200) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `NomCargo` varchar(100) NOT NULL,
  `FotoPerfil` int(200) NOT NULL,
  `ModoVista` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  PRIMARY KEY (`Nombres`),
  KEY `Cargo` (`NomCargo`),
  KEY `ModoVista` (`ModoVista`),
  KEY `NomCargo` (`NomCargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

DROP TABLE IF EXISTS `tienda`;
CREATE TABLE IF NOT EXISTS `tienda` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(200) NOT NULL,
  `NombreCategoria` varchar(100) NOT NULL,
  `FotoProducto` varchar(200) NOT NULL,
  `CodProducto` varchar(50) NOT NULL,
  `EstadoProducto` varchar(100) NOT NULL,
  `Stock` int(11) NOT NULL,
  `DescrProducto` int(11) NOT NULL,
  `PrecioMoneda` decimal(10,0) NOT NULL,
  PRIMARY KEY (`IdProducto`),
  KEY `NombreCategoria` (`NombreCategoria`),
  KEY `EstadoProducto` (`EstadoProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
