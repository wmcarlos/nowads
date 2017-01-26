-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2017 a las 22:00:43
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nowads`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `na_click`
--

CREATE TABLE `na_click` (
  `click_id` int(11) NOT NULL,
  `web_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(30) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `country` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `na_role`
--

CREATE TABLE `na_role` (
  `role_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(60) NOT NULL,
  `isactive` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `na_role`
--

INSERT INTO `na_role` (`role_id`, `created`, `updated`, `name`, `isactive`) VALUES
(1, '2017-01-25 16:03:36', '2017-01-26 16:12:23', 'ADMINISTRATOR', 'Y'),
(2, '2017-01-25 16:04:42', '2017-01-26 15:52:23', 'PUBLISHER', 'Y');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `na_user`
--

CREATE TABLE `na_user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isactive` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `na_user`
--

INSERT INTO `na_user` (`user_id`, `role_id`, `created`, `updated`, `first_name`, `last_name`, `username`, `email`, `phone`, `password`, `isactive`) VALUES
(4, 1, '2017-01-26 18:50:02', '2017-01-26 19:19:24', 'CARLOS', 'VARGAS', 'wmcarlos', 'carlos-vargas2011@hotmail.com', '584160984343', '167ff7dd5614f4e7e82769403caad891', 'Y'),
(5, 2, '2017-01-26 20:27:32', '0000-00-00 00:00:00', 'JORGE', 'COLMENAREZ', 'jlct.master', 'jlct.master@gmail.com', '584149739547', 'f6f8808b40055a6c8fcd5dd606bb51e9', 'Y');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `na_web`
--

CREATE TABLE `na_web` (
  `web_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(60) NOT NULL,
  `url` varchar(255) NOT NULL,
  `blockdays` int(11) NOT NULL DEFAULT '1',
  `webkey` varchar(100) NOT NULL,
  `isactive` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `na_click`
--
ALTER TABLE `na_click`
  ADD PRIMARY KEY (`click_id`),
  ADD KEY `fk_web_id` (`web_id`);

--
-- Indices de la tabla `na_role`
--
ALTER TABLE `na_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indices de la tabla `na_user`
--
ALTER TABLE `na_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_role_id` (`role_id`);

--
-- Indices de la tabla `na_web`
--
ALTER TABLE `na_web`
  ADD PRIMARY KEY (`web_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `na_click`
--
ALTER TABLE `na_click`
  MODIFY `click_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `na_role`
--
ALTER TABLE `na_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `na_user`
--
ALTER TABLE `na_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `na_web`
--
ALTER TABLE `na_web`
  MODIFY `web_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `na_click`
--
ALTER TABLE `na_click`
  ADD CONSTRAINT `fk_web_id` FOREIGN KEY (`web_id`) REFERENCES `na_web` (`web_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `na_user`
--
ALTER TABLE `na_user`
  ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `na_role` (`role_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `na_web`
--
ALTER TABLE `na_web`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `na_user` (`user_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
