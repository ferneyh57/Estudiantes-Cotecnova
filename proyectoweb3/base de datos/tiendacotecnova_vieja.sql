-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2019 a las 17:13:52
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendacotecnova`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) unsigned NOT NULL,
  `admin_usser` int(20) NOT NULL,
  `admin_pass` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_usser`, `admin_pass`) VALUES
(1, 1192713025, '9815df8d3eebdd7f37f02ca4cc411743');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE IF NOT EXISTS `creditos` (
  `cre_id` int(11) unsigned NOT NULL COMMENT 'Este es el id de los creditos',
  `cre_fecha_hora_act` datetime(6) NOT NULL COMMENT 'Fecha y hora de actulizacion de los creditos',
  `cre_est_doc_iden` int(20) unsigned NOT NULL COMMENT 'Llave foranea que contiene el documento del estudiante',
  `cre_est_total_credito` int(20) unsigned NOT NULL COMMENT '	Llave foranea que contiene el total del credito',
  `cre_ven_doc_iden` int(11) unsigned NOT NULL COMMENT '	Llave foranea que contiene el documento del vendedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil`
--

CREATE TABLE IF NOT EXISTS `estado_civil` (
  `estado_civil_id` int(11) unsigned NOT NULL COMMENT 'Este es el id del estado civil',
  `estado_civil_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Este es el estado civil'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `estado_civil`
--

INSERT INTO `estado_civil` (`estado_civil_id`, `estado_civil_nombre`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Unión libre'),
(4, 'Comprometido'),
(5, 'Divorciado/a'),
(6, 'Viudo/a'),
(7, 'Separado/a'),
(8, 'En Relación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `est_id` int(20) unsigned NOT NULL COMMENT 'Numero de identificacion del estudiante',
  `est_doc_iden` int(20) unsigned NOT NULL COMMENT 'Numero de documento del estudiante',
  `est_nombres` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Nombres del estudiante',
  `est_apellidos` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Apellidos del estudiante',
  `est_total_credito` bigint(20) unsigned NOT NULL COMMENT 'Total del credito que adeuda el estudiante',
  `est_password` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Password del estudiante',
  `tipo_documento_id` int(11) unsigned NOT NULL,
  `programa_id` int(11) unsigned NOT NULL,
  `estado_civil_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`est_id`, `est_doc_iden`, `est_nombres`, `est_apellidos`, `est_total_credito`, `est_password`, `tipo_documento_id`, `programa_id`, `estado_civil_id`) VALUES
(4, 1, '1', '1', 1, '1', 0, 1, 1),
(6, 333, '1', '1', 1, '1', 0, 1, 1),
(8, 1234567, '1', '1', 111, '6512bd43d9caa6e02c990b0a82652dca', 1, 11, 111),
(10, 2222222222, '1', '1', 4294967295, '26c924b47cf221582c9d5aede42dadf5', 1, 4294967295, 4294967295),
(11, 4294967295, 'Ferney lo chupa', 'tres veces', 4294967295, '1c7a92ae351d4e21ebdfb897508f59d6', 0, 0, 0),
(12, 1114788317, 'Checo', 'Arias', 55555555, '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE IF NOT EXISTS `programa` (
  `programa_id` int(11) unsigned NOT NULL COMMENT 'Este es el id de cada programa',
  `programa_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`programa_id`, `programa_nombre`) VALUES
(1, 'Ingenieria de sistemas'),
(2, 'Agropecuaria'),
(3, 'Regencia de farmacia'),
(4, 'Administracion de empresas'),
(5, 'Contabilidad'),
(6, 'Licenciatura en pedagogía infantil'),
(7, 'Licenciatura en ingles'),
(8, 'Cocina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `tipo_documento_id` int(11) unsigned NOT NULL COMMENT 'este es el id de cada documento',
  `tipo_documento_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'este es el tipo de documento'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`tipo_documento_id`, `tipo_documento_nombre`) VALUES
(1, 'cédula de ciudadanía (CC)'),
(2, 'tarjeta de identidad (TI)'),
(3, 'tarjeta pasaporte (TP)'),
(4, ' registro civil (RC)'),
(5, 'cédula de extranjería (CE)'),
(6, ' carné de identidad (CI)'),
(7, 'documento nacional de identidad (DNI)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE IF NOT EXISTS `vendedores` (
  `ven_id` int(11) unsigned NOT NULL COMMENT 'Id del vendedor',
  `ven_doc_iden` int(11) unsigned NOT NULL COMMENT 'Numero de documento del estudiante',
  `ven_nombres` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Nombres del vendedor',
  `ven_apellidos` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Apellidos del vendedor',
  `ven_password` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Contraseña del vendedor',
  `estado_civil_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`ven_id`, `ven_doc_iden`, `ven_nombres`, `ven_apellidos`, `ven_password`, `estado_civil_id`) VALUES
(2, 1234, 'f', 'h', '81dc9bdb52d04dc20036dbd8313ed055', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `creditos`
--
ALTER TABLE `creditos`
  ADD PRIMARY KEY (`cre_id`);

--
-- Indices de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  ADD PRIMARY KEY (`estado_civil_id`),
  ADD UNIQUE KEY `estado_civil_id_UNIQUE` (`estado_civil_id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`est_id`),
  ADD UNIQUE KEY `est_doc_iden` (`est_doc_iden`),
  ADD KEY `fk_estudiantes_tipo_documento1_idx` (`tipo_documento_id`),
  ADD KEY `fk_estudiantes_programa1_idx` (`programa_id`),
  ADD KEY `fk_estudiantes_estado_civil1_idx` (`estado_civil_id`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`programa_id`),
  ADD UNIQUE KEY `programa_id_UNIQUE` (`programa_id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`tipo_documento_id`),
  ADD UNIQUE KEY `tipo_documento_id_UNIQUE` (`tipo_documento_id`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`ven_id`),
  ADD UNIQUE KEY `ven_doc_iden` (`ven_doc_iden`) USING BTREE,
  ADD KEY `fk_vendedores_estado_civil1_idx` (`estado_civil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `cre_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Este es el id de los creditos';
--
-- AUTO_INCREMENT de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  MODIFY `estado_civil_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Este es el id del estado civil',AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `est_id` int(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Numero de identificacion del estudiante',AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `programa_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Este es el id de cada programa',AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `tipo_documento_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'este es el id de cada documento',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `ven_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id del vendedor',AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
