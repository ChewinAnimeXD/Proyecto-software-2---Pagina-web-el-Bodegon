-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 21:52:54
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentarios` int(25) NOT NULL,
  `titulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `calificación` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `comparador_id_u` int(25) NOT NULL,
  `id_usuario` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentarios`, `titulo`, `mensaje`, `calificación`, `fecha`, `comparador_id_u`, `id_usuario`) VALUES
(50, 'Este es el primer titulo de los comentarios', 'hola mundo', 5, '0000-00-00', 49, 49),
(51, 'segundo comentario', 'hola mundo 2', 2, '0000-00-00', 50, 50),
(52, 'segundo comentario del admin', 'este es el segundo comentario del admin', 5, '0000-00-00', 49, 49),
(53, 'segundo mentario del usuario', 'hola este es el segundo', 3, '0000-00-00', 50, 50),
(54, 'usando el comparador', 'tercer comentario de admin', 4, '0000-00-00', 49, 49),
(55, 'cuarto coemntario de admin', 'cuarto comentario de admin', 5, '0000-00-00', 49, 49),
(56, 'probando fecha', '123', 2, '0000-00-00', 49, 49),
(57, 'qwe', '123', 2, '2022-11-06', 49, 49),
(58, 'Mi primer comenterio ', 'Hola soy edwin', 5, '2022-11-07', 52, 52),
(59, 'segundo comentario de edwin', 'hola mundo', 4, '2022-11-07', 52, 52),
(60, 'Tieulo del comentario de andrea', 'hola mundo ', 3, '2022-11-09', 53, 53);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rlocal`
--

CREATE TABLE `rlocal` (
  `id_rlocal` int(25) NOT NULL,
  `nombre_l` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(25) NOT NULL,
  `comparador_id_u` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rlocal`
--

INSERT INTO `rlocal` (`id_rlocal`, `nombre_l`, `fecha`, `id_usuario`, `comparador_id_u`) VALUES
(9, 'sogamoso', '2022-11-24', 50, 50),
(10, 'duitama', '2022-12-01', 49, 49),
(11, 'duitama', '2023-01-03', 51, 51),
(12, 'sogamoso', '2022-12-02', 51, 51),
(13, 'sogamoso', '2022-11-15', 51, 51),
(14, 'sogamoso', '2022-11-16', 51, 51),
(15, 'sogamoso', '2022-12-08', 52, 52),
(16, 'sogamoso', '2022-12-19', 52, 52),
(17, 'sogamoso', '2022-12-04', 49, 49),
(22, 'sogamoso', '2023-01-01', 49, 49),
(28, 'duitama', '2023-04-25', 49, 49),
(29, 'duitama', '2023-04-29', 49, 49),
(30, 'sogamoso', '2023-02-09', 49, 49),
(31, 'sogamoso', '2023-03-14', 49, 49),
(32, 'duitama', '2023-05-24', 49, 49),
(33, 'sogamoso', '2023-06-28', 49, 49),
(34, 'duitama', '2023-06-22', 49, 49),
(35, 'duitama', '2022-11-30', 53, 53);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rmesas`
--

CREATE TABLE `rmesas` (
  `id_rmesas` int(25) NOT NULL,
  `nombre_l` varchar(64) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mesa` int(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` int(25) NOT NULL,
  `comparador_id_u` int(25) NOT NULL,
  `id_usuario` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rmesas`
--

INSERT INTO `rmesas` (`id_rmesas`, `nombre_l`, `mesa`, `fecha`, `hora`, `comparador_id_u`, `id_usuario`) VALUES
(15, 'sogamoso', 3, '2022-11-08', 4, 49, 49),
(16, 'duitama', 2, '2022-11-09', 2, 49, 49),
(17, 'duitama', 4, '2022-11-11', 7, 50, 50),
(18, 'sogamoso', 1, '2022-11-23', 12, 51, 51),
(19, 'duitama', 4, '2023-01-02', 6, 51, 51),
(20, 'sogamoso', 1, '2022-12-26', 12, 52, 52),
(21, 'sogamoso', 4, '2023-02-28', 6, 53, 53);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(25) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `nombre`, `apellido`, `tipo_usuario`) VALUES
(49, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin_n', 'admin_a', 1),
(50, 'usuario', 'b665e217b51994789b02b1838e730d6b93baa30f', 'usuario_n', 'usuario_a', 0),
(51, '3@3.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'nuevo', 'nuevo', 0),
(52, 'edwin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'edwin', 'sanabria', 0),
(53, 'andrea@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Andrea', 'Salcedo', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentarios`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `rlocal`
--
ALTER TABLE `rlocal`
  ADD PRIMARY KEY (`id_rlocal`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `rmesas`
--
ALTER TABLE `rmesas`
  ADD PRIMARY KEY (`id_rmesas`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentarios` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `rlocal`
--
ALTER TABLE `rlocal`
  MODIFY `id_rlocal` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `rmesas`
--
ALTER TABLE `rmesas`
  MODIFY `id_rmesas` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `rlocal`
--
ALTER TABLE `rlocal`
  ADD CONSTRAINT `rlocal_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `rmesas`
--
ALTER TABLE `rmesas`
  ADD CONSTRAINT `rmesas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
