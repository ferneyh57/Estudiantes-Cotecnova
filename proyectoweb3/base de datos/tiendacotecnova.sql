-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2019 a las 17:59:12
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

CREATE TABLE `admin` (
  `admin_id` int(11) UNSIGNED NOT NULL,
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

CREATE TABLE `creditos` (
  `cre_id` int(11) UNSIGNED NOT NULL COMMENT 'Este es el id de los creditos',
  `cre_fecha_hora_act` datetime(6) NOT NULL COMMENT 'Fecha y hora de actulizacion de los creditos',
  `cre_est_doc_iden` int(20) UNSIGNED NOT NULL COMMENT 'Llave foranea que contiene el documento del estudiante',
  `cre_est_total_credito` int(20) UNSIGNED NOT NULL COMMENT '	Llave foranea que contiene el total del credito',
  `cre_ven_doc_iden` int(11) UNSIGNED NOT NULL COMMENT '	Llave foranea que contiene el documento del vendedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `creditos`
--

INSERT INTO `creditos` (`cre_id`, `cre_fecha_hora_act`, `cre_est_doc_iden`, `cre_est_total_credito`, `cre_ven_doc_iden`) VALUES
(122, '2019-10-16 08:12:32.125468', 1192803305, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil`
--

CREATE TABLE `estado_civil` (
  `estado_civil_id` int(11) UNSIGNED NOT NULL COMMENT 'Este es el id del estado civil',
  `estado_civil_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Este es el estado civil'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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

CREATE TABLE `estudiantes` (
  `est_id` int(20) UNSIGNED NOT NULL COMMENT 'Numero de identificacion del estudiante',
  `est_doc_iden` int(20) UNSIGNED NOT NULL COMMENT 'Numero de documento del estudiante',
  `est_nombres` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Nombres del estudiante',
  `est_apellidos` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Apellidos del estudiante',
  `est_total_credito` bigint(20) UNSIGNED NOT NULL COMMENT 'Total del credito que adeuda el estudiante',
  `est_password` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Password del estudiante',
  `tipo_documento_id` int(11) UNSIGNED NOT NULL,
  `programa_id` int(11) UNSIGNED NOT NULL,
  `estado_civil_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`est_id`, `est_doc_iden`, `est_nombres`, `est_apellidos`, `est_total_credito`, `est_password`, `tipo_documento_id`, `programa_id`, `estado_civil_id`) VALUES
(4, 1, '1', '1', 1, '1', 0, 1, 1),
(6, 333, '1', '1', 1, '1', 0, 1, 1),
(8, 1234567, '1', '1', 111, '6512bd43d9caa6e02c990b0a82652dca', 1, 11, 111),
(10, 2222222222, '1', '1', 4294967295, '26c924b47cf221582c9d5aede42dadf5', 1, 4294967295, 4294967295),
(11, 4294967295, 'Ferney lo chupa', 'tres veces', 4294967295, '1c7a92ae351d4e21ebdfb897508f59d6', 0, 0, 0),
(12, 1114788317, 'Checo', 'Arias', 55555555, '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 0),
(13, 12, '12', '12', 12, 'c20ad4d76fe97759aa27a0c99bff6710', 0, 0, 0),
(14, 5, '5', '5', 5, 'e4da3b7fbbce2345d7772b0674a318d5', 0, 0, 0),
(15, 7, '7', '7', 7, '8f14e45fceea167a5a36dedd4bea2543', 7, 8, 8),
(16, 9, '9', '9', 9, '45c48cce2e2d7fbdea1afc51c7c6ad26', 1, 1, 1),
(17, 1192803305, 'heiner', 'colorado', 9000, '2ca77b5e356e7434fe63fcf9d9685505', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `programa_id` int(11) UNSIGNED NOT NULL COMMENT 'Este es el id de cada programa',
  `programa_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
(8, 'Cocina'),
(9, 'licenciatura en matematicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `tipo_documento_id` int(11) UNSIGNED NOT NULL COMMENT 'este es el id de cada documento',
  `tipo_documento_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'este es el tipo de documento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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

CREATE TABLE `vendedores` (
  `ven_id` int(11) UNSIGNED NOT NULL COMMENT 'Id del vendedor',
  `ven_doc_iden` int(11) UNSIGNED NOT NULL COMMENT 'Numero de documento del estudiante',
  `ven_nombres` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Nombres del vendedor',
  `ven_apellidos` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Apellidos del vendedor',
  `ven_password` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Contraseña del vendedor',
  `estado_civil_id` int(11) UNSIGNED NOT NULL,
  `tipo_documento_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`ven_id`, `ven_doc_iden`, `ven_nombres`, `ven_apellidos`, `ven_password`, `estado_civil_id`, `tipo_documento_id`) VALUES
(2, 1234, 'f', 'h', '81dc9bdb52d04dc20036dbd8313ed055', 5, 0),
(3, 2, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, 1),
(4, 1112776996, 'daniel', 'agudelo', 'd3e8fc83b3e886a0dc2aa9845a5215bf', 1, 1),
(5, 7, '7', '7', '8f14e45fceea167a5a36dedd4bea2543', 8, 7),
(6, 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0);

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
  MODIFY `cre_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Este es el id de los creditos', AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  MODIFY `estado_civil_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Este es el id del estado civil', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `est_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Numero de identificacion del estudiante', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `programa_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Este es el id de cada programa', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `tipo_documento_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'este es el id de cada documento', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `ven_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Id del vendedor', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
