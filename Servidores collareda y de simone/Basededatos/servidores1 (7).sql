-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2020 a las 13:54:59
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servidores1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(40) UNSIGNED NOT NULL,
  `precio` int(40) NOT NULL,
  `id_servidor` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `tarjeta` int(16) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_compra`, `precio`, `id_servidor`, `Email`, `tarjeta`, `cvv`) VALUES
(69, 22, 3, 'lordjuanic@gmail.com', 2147483647, 123),
(70, 123123, 1, 'lordjuanic@gmail.com', 2147483647, 123),
(71, 333, 2, 'lordjuanic@gmail.com', 2147483647, 123),
(72, 22, 3, 'lordjuanic@gmail.com', 2147483647, 123),
(73, 123123, 1, 'lordjuanic@gmail.com', 2147483647, 123),
(74, 333, 2, 'lordjuanic@gmail.com', 2147483647, 123),
(75, 22, 3, 'lordjuanic@gmail.com', 2147483647, 123),
(76, 22, 3, 'lordjuanic@gmail.com', 2147483647, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feeds`
--

CREATE TABLE `feeds` (
  `feed` varchar(10000) NOT NULL,
  `id_feed` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `feeds`
--

INSERT INTO `feeds` (`feed`, `id_feed`, `Email`) VALUES
('holaaaaaaaaa', 17, 'lordjuanic@gmail.com'),
('hola como estas', 20, 'lordjuanic@gmail.com12312312312'),
('687687687', 21, 'lordjuanic@gmail.com'),
('asdasd', 27, 'lordjuanic@gmail.com'),
('asdasdasdadasd', 29, 'lordjuanic@gmail.com'),
('28/07/2020', 30, 'lordjuanic@gmail.com'),
('asdasdasdasd', 31, 'lordjuanic@gmail.com'),
('hola mundo', 32, 'lordjuanic@gmail.com'),
('e apagado servidor', 33, 'lordjuanic@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servidor`
--

CREATE TABLE `servidor` (
  `id_servidor` int(11) NOT NULL,
  `ram` int(123) NOT NULL,
  `precio` int(123) NOT NULL,
  `velocidad` int(123) NOT NULL,
  `alamacenamiento` int(32) NOT NULL,
  `IP` varchar(12) NOT NULL,
  `Encendido` varchar(32) NOT NULL,
  `cpu` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servidor`
--

INSERT INTO `servidor` (`id_servidor`, `ram`, `precio`, `velocidad`, `alamacenamiento`, `IP`, `Encendido`, `cpu`) VALUES
(1, 12, 123123, 23, 123123123, '192.168.1', 'Apagado', 'intel'),
(2, 12, 333, 44, 123, '192.218.1', 'Apagado', 'intel'),
(3, 12, 22, 123, 12, '192.128.1', 'Apagado', 'intel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(255) UNSIGNED NOT NULL,
  `Email` varchar(40) NOT NULL,
  `usuario` varchar(34) NOT NULL,
  `contrasena` varchar(23) NOT NULL,
  `tipo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `Email`, `usuario`, `contrasena`, `tipo`) VALUES
(35, 'lordjuanic@gmail.com', 'juan', 'Juatito123', 1),
(39, 'lordjuanic@gmail.com12312312312', 'sdasdasda', 'Juatito123', 0),
(40, 'lordjuanic@gmail.com123', 'j', 'Juatito123', 0),
(42, 'lordjuanic@gmail.com123132', 'sdasdasda', 'Pepe12345', 0),
(43, 'lordjuanic@gmail.com3232323', 'lucano', 'Juatito123', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_servidor` (`id_servidor`),
  ADD KEY `Email` (`Email`);

--
-- Indices de la tabla `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id_feed`),
  ADD KEY `Email` (`Email`);

--
-- Indices de la tabla `servidor`
--
ALTER TABLE `servidor`
  ADD PRIMARY KEY (`id_servidor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `id_tipo` (`tipo`),
  ADD KEY `id_tipo_2` (`tipo`),
  ADD KEY `id_tipo_3` (`tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(40) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT de la tabla `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id_feed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `servidor`
--
ALTER TABLE `servidor`
  MODIFY `id_servidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`Email`) REFERENCES `usuario` (`Email`),
  ADD CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`id_servidor`) REFERENCES `servidor` (`id_servidor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `feeds`
--
ALTER TABLE `feeds`
  ADD CONSTRAINT `feeds_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `usuario` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
