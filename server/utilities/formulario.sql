-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2024 a las 07:52:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellidopaterno` varchar(60) NOT NULL,
  `apellidomaterno` varchar(60) NOT NULL,
  `boleta` varchar(60) NOT NULL,
  `curp` varchar(60) NOT NULL,
  `genero` varchar(60) NOT NULL,
  `nacimiento` text NOT NULL,
  `correo` varchar(60) NOT NULL,
  `telefono` bigint(30) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `calle` varchar(60) NOT NULL,
  `numerolote` int(11) NOT NULL,
  `codigopostal` int(11) NOT NULL,
  `escuela` varchar(60) NOT NULL,
  `discapacidadmotriz` int(11) NOT NULL DEFAULT 0,
  `discapacidadauditiva` int(11) NOT NULL DEFAULT 0,
  `discapacidadvisual` int(11) NOT NULL DEFAULT 0,
  `otradiscapacidad` varchar(60) DEFAULT NULL,
  `promedio` double(40,2) NOT NULL,
  `cita` bigint(30) NOT NULL,
  `fecha` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `apellidopaterno`, `apellidomaterno`, `boleta`, `curp`, `genero`, `nacimiento`, `correo`, `telefono`, `estado`, `municipio`, `calle`, `numerolote`, `codigopostal`, `escuela`, `discapacidadmotriz`, `discapacidadauditiva`, `discapacidadvisual`, `otradiscapacidad`, `promedio`, `cita`, `fecha`) VALUES
(1, 'Angelllooo', 'GARRrr', 'Marrano', 'PM45673421', 'MAGA240103HMSRRNA5', 'masculino', '2024-01-03', 'j3zuzv3@gmail.com', 5618113821, 'Aguascalientes', 'Iz', 'Ruiz', 54, 54753, 'Cet', 0, 0, 0, '', 8.54, 2, '2024-01-08'),
(3, 'Ang', 'Dane', 'DAJE', 'PM45673423', 'MAGA240103HMSRRNA4', 'masculino', '2024-01-02', 'adjsjd@gmial.com', 5618113827, 'Aguascalientes', 'Iz', 'Ruiz', 54, 54753, 'djffjgf', 0, 0, 0, '', 7.90, 4, '2024-01-08'),
(5, 'Anghe', 'GATC', 'DAJE', 'PP45673425', 'MAGA240103HMSRRNA7', 'masculino', '2024-01-01', 'j3zuzv3@gmailL.com', 5618113845, 'Aguascalientes', 'Iz', 'Ruiz', 54, 54753, 'Cet', 1, 0, 0, '', 9.40, 5, '2024-01-08'),
(6, 'Angellll', 'GAR', 'MAR', 'PP45673921', 'MAGA240103HMSRHNA5', 'masculino', '2024-01-03', 'j3zuzv333@gmail.com', 5618115821, 'Aguascalientes', 'Iz', 'Ruiz', 44534, 54753, 'Cet', 0, 0, 0, '', 8.70, 6, '2024-01-08'),
(7, 'ANGELLO', 'GARCIA', 'MARTINEZ', 'PP47673421', 'MAGA240103HMSRRMA5', 'masculino', '2024-01-02', 'j3zuzv33333@gmail.com', 5618114821, 'Aguascalientes', 'Iz', 'Ruiz', 54, 54753, 'Cet', 0, 0, 0, '', 7.60, 7, '2024-01-08'),
(9, 'Angelllo', 'Mate', 'DAJE', 'PP46673421', 'MAGG240103HMSRRNA5', 'masculino', '2024-01-03', 'j3zuzvvv33@gmail.com', 5615113821, 'Aguascalientes', 'Iz', 'Ruiz', 55, 54753, 'Cet', 0, 0, 0, '', 8.50, 8, '2024-01-08'),
(12, 'FNVJFND', 'FDNVGFD', 'FJVGJFD', 'PP45673222', 'MAGA240103HHHRRNA5', 'femenino', '2024-01-04', 'j3zuzv333333@gmail.com', 5618113222, 'Baja California Sur', 'Iz', 'Ruiz', 54, 54753, 'Prepa 5', 0, 0, 0, 'Mental', 9.60, 9, '2012'),
(13, 'Angel', 'GArcia', 'bbgg', 'PP45673322', 'MAGA240103HMSRRNZ5', 'femenino', '2024-01-03', 'dsfs@gmail.com', 5818113821, 'Michoacan', 'Iz', 'Ruiz', 54, 54753, 'Prepa 5', 0, 0, 0, 'Mental', 7.50, 10, '2012'),
(14, 'ewfdsfds', 'fdgfdgfd', 'fbgfdgfd', 'PP45675421', 'MAGA240103HMSRNNN5', 'femenino', '2024-01-03', 'dsvmfd@gmail.com', 4534793167, 'Oaxaca', 'Iz', 'Truenos', 45, 54753, 'djffjgf', 0, 0, 0, 'mental', 8.70, 11, '2012');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `boleta` (`boleta`),
  ADD UNIQUE KEY `curp` (`curp`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `telefono` (`telefono`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
