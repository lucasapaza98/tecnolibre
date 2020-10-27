-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2020 a las 02:08:08
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formularios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `marca` text NOT NULL,
  `precio_actual` text NOT NULL,
  `precio_anterior` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `marca`, `precio_actual`, `precio_anterior`, `color`) VALUES
(1, 'Notebook hp', 'hp', '$45.700', '$50.000', 'Gris'),
(2, 'Notebook Lenovo', 'Lenovo', '$100.000', '$125.000', 'Negro'),
(3, 'Notebook Lenovo', 'Lenovo', '$35.000', '$40.000', 'Rojo'),
(4, 'Notebook Intel', 'Intel', '$20.000', '$25.000', 'Negro'),
(5, 'Notebook Exo', 'Exo', '$80.000', '$85.000', 'Gris'),
(6, 'Notebook Lenovo', 'Lenovo', '$200.000', '$250.000', 'Dorado'),
(7, 'Notebook Asus', 'Asus', '$150.000', '$155.000', 'Plateado'),
(8, 'Notebook Dell', 'Dell', '$150.000', '$185.000', 'Azul Fuerte'),
(9, 'Notebook Intel', 'Intel', '$200.000', '$220.000', 'Azul Fuerte'),
(10, 'Notebook Acer', 'Acer', '$200.000', '$205.000', 'Dorado'),
(11, 'Notebook I5', 'I5', '$55.000', '$60,000', 'Negro'),
(12, 'Notebook Lenovo', 'Lenovo', '$56.768', '$85.567', 'Rojizo'),
(13, 'Notebook Lenovo', 'Lenovo', '$350.000', '$400.000', 'Dorado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
