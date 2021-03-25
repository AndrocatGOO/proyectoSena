-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2021 a las 20:23:17
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectosena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_Article` int(11) NOT NULL,
  `Id_Category` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_Article`, `Id_Category`, `Nombre`, `Precio`, `Stock`, `Description`) VALUES
(1, 'Piedras Semi-Preciosas', 'Cuarzo', 120000, 78, 'jabneohngbuj aheog ahegb '),
(2, 'Collares', 'Collar de Oro', 1000000, 4, 'fjgn<sj taworitja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_User` int(11) NOT NULL COMMENT 'Id Usuario - Registro',
  `First_Name` varchar(50) NOT NULL COMMENT 'Nombre - Registro',
  `Last_Name` varchar(50) NOT NULL COMMENT 'Apellido - Registro',
  `Email` varchar(50) NOT NULL COMMENT 'Correo - Registro',
  `Password` text NOT NULL COMMENT 'Contraseña - Registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_Article`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_Article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id Usuario - Registro', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
