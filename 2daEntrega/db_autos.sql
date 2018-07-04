-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2018 a las 04:31:19
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_autos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `id_auto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `modelo` int(11) NOT NULL,
  `color` varchar(30) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`id_auto`, `nombre`, `modelo`, `color`, `id_marca`) VALUES
(2, 'Cruze', 2018, 'Azul', 2),
(3, 'C4 lounge', 2018, 'Gris', 3),
(4, 'Onix', 2016, 'Negro', 2),
(5, 'Ranger', 2018, 'Negro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`, `descripcion`) VALUES
(1, 'Ford', 'Los planes de expansión de Ford requería mayor capacidad productiva que la ofrecida por la planta de La Boca, motivo por el cual la empresa decidió abrir un nuevo centro productivo \"Planta Pacheco\". Esto significó una apuesta al progreso del país y derivó en la creación de un vínculo indisoluble con la sociedad. El 21 de septiembre de 1961 se inauguró oficialmente el centro productivo donde –en la actualidad – se producen la Nueva Ranger y el Nuevo Focus.'),
(2, 'Chevrolet', 'General Motors fue fundada en 1908 en Detroit. En Argentina, actualmente se comercializa la marca Chevrolet, presente en más de 100 países y con un volumen de ventas anuales de más de 4 millones de vehículos. Chevrolet ofrece a los clientes vehículos con un consumo eficiente, óptimo desempeño, diseño innovador, equipamiento de seguridad pasiva y activa y tecnología de fácil utilización'),
(3, 'Citroën', 'La planta de Centro de Producción El Palomar fabrica vehículos con el objetivo de asegurar la total satisfacción del cliente y garantizar la flexibilidad de la organización para adaptarse a las fluctuaciones de la demanda. Su ambición es ser el centro de producción número uno en términos de calidad, dentro de Groupe PSA a nivel mundial y la referencia en el país.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `usuario` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `usuario`, `password`, `admin`) VALUES
(1, 'Yamil', 'Ale Mendez', 'mendezyamil@gmail.com', '$2y$10$GNlQU2KQ9aVZmXQq6WjUXu2wSJ5Zyyvypym4D0eTPDE.K958draIO', 1),
(3, 'Facundo', 'Mendez', 'facumendez@gmail.com', '$2y$10$2DqC3.xFUxBb3vpWRa2hUuQqqDO9erVyBMTpfXsJHq9dJLpL.w0dW', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id_auto`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_marca_2` (`id_marca`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auto`
--
ALTER TABLE `auto`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
