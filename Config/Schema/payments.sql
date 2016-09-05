-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2016 a las 22:01:51
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `3dlink`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `nombre_empresa` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `rif` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `monto` float NOT NULL,
  `metodo_pago` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `responsable` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `payments`
--

INSERT INTO `payments` (`id`, `nombre_empresa`, `rif`, `monto`, `metodo_pago`, `descripcion`, `correo`, `telefono`, `responsable`, `estado`, `token`) VALUES
(80, '3Dlink', 'v-194535925', 200, 'paypal', 'asdadsas', 'o0serras0o@gmail.com', '0000-0000000', 'Dani', 1, 'EC-183052537H0043048'),
(81, '3Dlink', 'v-194535925', 100, 'mercadopago', 'asdada', 'o0serras0o@gmail.com', '0000-0000000', 'Dani', 3, '226843419-077404e3-4c45-4a54-9888-4529874e331c'),
(82, '3Dlink', 'v-194535925', 200, 'mercadopago', 'asdasda', 'o0serras0o@gmail.com', '0000-0000000', 'Dani', 1, '226843419-12d4b7c8-17ee-47b8-a8da-214304f2351b'),
(83, '3Dlink', 'v-194535925', 100, 'mercadopago', 'asdas', 'o0serras0o@gmail.com', '0000-0000000', 'Dani', 1, '226843419-b9bf80e9-d244-4efd-9e0f-014774141800'),
(84, '3Dlink', 'v-194535925', 50, 'mercadopago', 'asdada', 'o0serras0o@gmail.com', '0000-0000000', 'Dani', 2, '226843419-367ce13c-d433-4393-b8c4-d7d91996751a'),
(85, '3Dlink', 'v-194535925', 200, 'mercadopago', 'sda', 'o0serras0o@gmail.com', '0000-0000000', 'jane doe', 2, '226843419-135d230b-de94-406e-b119-cb6ab69b1167'),
(86, '3Dlink', 'v-194535925', 3.40282e38, 'mercadopago', 'asdad', 'hello@example.com', '0000-0000000', 'Dani', NULL, NULL),
(87, '3Dlink', 'v-194535925', 3.40282e38, 'mercadopago', 'asdad', 'hello@example.com', '0000-0000000', 'Dani', NULL, NULL),
(88, '3Dlink', 'v-194535925', 100000000000, 'mercadopago', 'asdad', 'hello@example.com', '0000-0000000', 'Dani', NULL, NULL),
(89, '3Dlink', 'v-194535925', 10000000000, 'mercadopago', 'asdad', 'hello@example.com', '0000-0000000', 'Dani', NULL, NULL),
(90, '3Dlink', 'v-194535925', 1000000000, 'mercadopago', 'asdad', 'hello@example.com', '0000-0000000', 'Dani', NULL, NULL),
(91, '3Dlink', 'v-194535925', 100000000, 'mercadopago', 'asdad', 'hello@example.com', '0000-0000000', 'Dani', NULL, NULL),
(92, '3Dlink', 'v-194535925', 100000000, 'mercadopago', 'asdad', 'hello@example.com', '0000-0000000', 'Dani', NULL, NULL),
(93, '3Dlink', 'v-194535925', 10000000, 'mercadopago', 'asdad', 'hello@example.com', '0000-0000000', 'Dani', NULL, NULL),
(94, '3Dlink', 'v-194535925', 999999, 'mercadopago', 'asdad', 'hello@example.com', '0000-0000000', 'Dani', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
