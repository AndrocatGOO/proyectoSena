-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2021 a las 00:03:53
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `piedras_preciosas`
--
CREATE DATABASE IF NOT EXISTS `piedras_preciosas` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `piedras_preciosas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id Proveedor` int(11) NOT NULL COMMENT 'Proveedor Id',
  `Nombre` varchar(11) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Proveedor Nombre',
  `Apellido` varchar(11) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Proveedor Apellido',
  `Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Proveedor Correo',
  `RUT` int(11) NOT NULL COMMENT 'Proveedor RUT',
  `Direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Proveedor Dirección'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Insertar datos proveedor';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id Proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id Proveedor` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Proveedor Id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
