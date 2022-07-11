-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 08:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logbode`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentatios`
--

CREATE TABLE `comentatios` (
  `id_comentario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  `calificacion` int(5) DEFAULT NULL,
  `id_usuario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `establecimiento`
--

CREATE TABLE `establecimiento` (
  `id_establecimiento` int(11) NOT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `cant_mesas` int(20) DEFAULT NULL,
  `horario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservaciones_establecimiento`
--

CREATE TABLE `reservaciones_establecimiento` (
  `id_reservacion` int(11) NOT NULL,
  `f_reservacion` date DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `id_establecimiento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservaciones_mesa`
--

CREATE TABLE `reservaciones_mesa` (
  `id_reservacion` int(11) NOT NULL,
  `f_reservacion` date DEFAULT NULL,
  `numero_mesa` int(20) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `id_establecimiento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservacion_mesa`
--

CREATE TABLE `reservacion_mesa` (
  `id_reservacion` int(11) NOT NULL,
  `f_reservacion` date DEFAULT NULL,
  `numero_mesa` int(20) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `id_establecimiento` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `f_nacimiento` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `constraseña` varchar(100) DEFAULT NULL,
  `usuario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentatios`
--
ALTER TABLE `comentatios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `establecimiento`
--
ALTER TABLE `establecimiento`
  ADD PRIMARY KEY (`id_establecimiento`);

--
-- Indexes for table `reservaciones_establecimiento`
--
ALTER TABLE `reservaciones_establecimiento`
  ADD PRIMARY KEY (`id_reservacion`),
  ADD KEY `id_establecimiento` (`id_establecimiento`);

--
-- Indexes for table `reservaciones_mesa`
--
ALTER TABLE `reservaciones_mesa`
  ADD PRIMARY KEY (`id_reservacion`),
  ADD KEY `id_establecimiento` (`id_establecimiento`);

--
-- Indexes for table `reservacion_mesa`
--
ALTER TABLE `reservacion_mesa`
  ADD PRIMARY KEY (`id_reservacion`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentatios`
--
ALTER TABLE `comentatios`
  ADD CONSTRAINT `comentatios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Constraints for table `reservaciones_establecimiento`
--
ALTER TABLE `reservaciones_establecimiento`
  ADD CONSTRAINT `reservaciones_establecimiento_ibfk_1` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimiento` (`id_establecimiento`);

--
-- Constraints for table `reservaciones_mesa`
--
ALTER TABLE `reservaciones_mesa`
  ADD CONSTRAINT `reservaciones_mesa_ibfk_1` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimiento` (`id_establecimiento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
