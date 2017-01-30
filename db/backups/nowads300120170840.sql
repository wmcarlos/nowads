-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-01-2017 a las 07:38:13
-- Versión del servidor: 5.5.52-cll-lve
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carltuud_nowads`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `na_click`
--

CREATE TABLE IF NOT EXISTS `na_click` (
  `click_id` int(11) NOT NULL AUTO_INCREMENT,
  `web_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(30) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `country` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lon` varchar(30) NOT NULL,
  PRIMARY KEY (`click_id`),
  KEY `fk_web_id` (`web_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Volcado de datos para la tabla `na_click`
--

INSERT INTO `na_click` (`click_id`, `web_id`, `created`, `ip`, `country_code`, `country`, `city`, `lat`, `lon`) VALUES
(3, 1, '2017-01-29 21:21:32', '187.232.120.73', 'MX', 'Mexico', 'Aguascalientes', '21.8833', '-102.3'),
(4, 1, '2017-01-29 21:40:48', '186.93.109.130', 'VE', 'Venezuela', 'Barquisimeto', '10.0739', '-69.3228'),
(5, 1, '2017-01-29 21:45:58', '189.137.99.74', 'MX', 'Mexico', 'Mexico City', '19.4342', '-99.1386'),
(6, 1, '2017-01-29 21:47:35', '201.141.12.190', 'MX', 'Mexico', 'Mexico City', '19.4342', '-99.1386'),
(7, 1, '2017-01-29 21:55:04', '181.115.140.42', 'BO', 'Bolivia', 'La Paz', '-16.5', '-68.15'),
(8, 1, '2017-01-29 22:37:58', '132.157.131.158', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(9, 1, '2017-01-29 22:43:38', '187.146.181.19', 'MX', 'Mexico', 'Tuxpan', '22.0888', '-105.2705'),
(10, 1, '2017-01-29 23:10:33', '181.229.7.33', 'AR', 'Argentina', 'Buenos Aires', '-34.6033', '-58.3816'),
(11, 1, '2017-01-29 23:37:51', '187.221.1.197', 'MX', 'Mexico', 'Mexico City', '19.4342', '-99.1386'),
(12, 1, '2017-01-29 23:48:26', '181.188.177.250', 'BO', 'Bolivia', 'La Paz', '-16.5', '-68.15'),
(13, 1, '2017-01-29 23:53:28', '201.160.141.200', 'MX', 'Mexico', 'CancÃºn', '21.1667', '-86.8333'),
(14, 1, '2017-01-30 00:20:12', '98.211.208.174', 'US', 'United States', 'Miami', '25.6615', '-80.412'),
(15, 1, '2017-01-30 00:52:25', '200.106.43.35', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(16, 1, '2017-01-30 00:57:37', '200.121.220.52', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(17, 1, '2017-01-30 01:03:37', '179.7.155.174', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(18, 1, '2017-01-30 01:14:57', '201.103.184.149', 'MX', 'Mexico', 'Mexico City', '19.2281', '-99.1417'),
(19, 1, '2017-01-30 01:33:43', '186.185.181.28', 'VE', 'Venezuela', 'Caracas', '10.5', '-66.9167'),
(20, 1, '2017-01-30 01:34:17', '201.108.37.229', 'MX', 'Mexico', 'Mexico City (Manantial PeÃ±a Pobre)', '19.2981', '-99.1825'),
(21, 1, '2017-01-30 01:39:04', '190.106.253.55', 'BO', 'Bolivia', 'Cochabamba', '-17.3833', '-66.15'),
(22, 1, '2017-01-30 01:45:52', '190.236.198.131', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(23, 1, '2017-01-30 01:48:23', '181.175.108.87', 'EC', 'Ecuador', 'Guayaquil', '-2.1667', '-79.9'),
(24, 1, '2017-01-30 01:58:10', '200.44.75.85', 'VE', 'Venezuela', 'San Antonio', '10.9478', '-71.0167'),
(25, 1, '2017-01-30 02:09:57', '190.236.198.223', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(26, 1, '2017-01-30 02:16:04', '', '', '', '', '', ''),
(27, 1, '2017-01-30 02:16:46', '186.61.190.22', 'AR', 'Argentina', 'Hurlingham', '-34.5883', '-58.639'),
(28, 1, '2017-01-30 02:28:59', '181.64.192.222', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(29, 1, '2017-01-30 02:30:24', '186.46.173.240', 'EC', 'Ecuador', 'Ambato', '-1.25', '-78.6167'),
(30, 1, '2017-01-30 02:31:36', '187.237.231.113', 'MX', 'Mexico', 'Mexico City', '19.4342', '-99.1386'),
(31, 1, '2017-01-30 02:32:49', '190.234.100.164', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(32, 1, '2017-01-30 02:45:21', '189.216.66.21', 'MX', 'Mexico', 'Mexico City', '19.4342', '-99.1386'),
(33, 1, '2017-01-30 02:51:12', '190.40.179.253', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(34, 1, '2017-01-30 02:58:17', '190.151.246.90', 'CO', 'Colombia', 'Cartago', '4.7464', '-75.9117'),
(35, 1, '2017-01-30 02:58:41', '187.134.234.163', 'MX', 'Mexico', 'Dolores Hidalgo Cuna de la Independencia Nacional', '21.1417', '-100.9419'),
(36, 1, '2017-01-30 03:10:11', '201.97.110.217', 'MX', 'Mexico', 'Mexico City (Manantial PeÃ±a Pobre)', '19.2981', '-99.1825'),
(37, 1, '2017-01-30 03:13:20', '181.67.97.240', 'PE', 'Peru', 'LurÃ­n', '-12.2526', '-76.884'),
(38, 1, '2017-01-30 03:17:54', '200.121.39.42', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(39, 1, '2017-01-30 03:18:38', '187.224.79.52', 'MX', 'Mexico', 'Colonia Mexico', '19.4342', '-99.1386'),
(40, 1, '2017-01-30 03:20:23', '187.172.247.68', 'MX', 'Mexico', 'San Luis PotosÃ­ City', '22.1439', '-100.9643'),
(41, 1, '2017-01-30 03:25:50', '201.113.53.93', 'MX', 'Mexico', 'Taxco', '18.55', '-99.6'),
(42, 1, '2017-01-30 03:26:38', '186.2.114.40', 'BO', 'Bolivia', 'La Paz', '-16.5', '-68.15'),
(43, 1, '2017-01-30 03:39:22', '187.244.198.168', 'MX', 'Mexico', 'Guadalajara', '20.6667', '-103.3333'),
(44, 1, '2017-01-30 04:05:03', '181.139.72.97', 'CO', 'Colombia', 'MedellÃ­n', '6.2518', '-75.5636'),
(45, 1, '2017-01-30 04:07:56', '181.175.134.176', 'EC', 'Ecuador', 'Quito', '-0.2167', '-78.5'),
(46, 1, '2017-01-30 04:33:59', '189.217.86.92', 'MX', 'Mexico', 'Mexico City', '19.4342', '-99.1386'),
(47, 1, '2017-01-30 04:57:23', '190.5.157.186', 'SV', 'El Salvador', 'San Salvador', '13.7086', '-89.2031'),
(48, 1, '2017-01-30 05:59:25', '181.65.70.82', 'PE', 'Peru', 'Lima', '-12.05', '-77.05'),
(49, 1, '2017-01-30 06:16:28', '73.110.38.161', 'US', 'United States', 'Chicago', '41.9025', '-87.7401'),
(50, 1, '2017-01-30 06:28:50', '201.105.13.91', 'MX', 'Mexico', 'Mexico City', '19.3266', '-99.2124'),
(51, 1, '2017-01-30 06:42:43', '201.145.27.169', 'MX', 'Mexico', 'Cuernavaca', '18.9167', '-99.25'),
(52, 1, '2017-01-30 07:01:08', '189.216.159.133', 'MX', 'Mexico', 'Mexico City', '19.4342', '-99.1386'),
(53, 1, '2017-01-30 07:31:44', '190.53.5.119', 'SV', 'El Salvador', 'San Salvador', '13.7086', '-89.2031'),
(54, 1, '2017-01-30 07:52:11', '186.46.173.22', 'EC', 'Ecuador', 'Ambato', '-1.25', '-78.6167'),
(55, 1, '2017-01-30 09:20:44', '81.40.160.190', 'ES', 'Spain', 'Valladolid', '41.6552', '-4.7237'),
(56, 1, '2017-01-30 10:19:08', '81.184.11.238', 'ES', 'Spain', 'Sant Cugat del VallÃ¨s', '41.4667', '2.0833'),
(57, 1, '2017-01-30 11:41:34', '186.91.114.121', 'VE', 'Venezuela', 'Caracas (Roca Tarpeya)', '10.4917', '-66.9138');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `na_role`
--

CREATE TABLE IF NOT EXISTS `na_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(60) NOT NULL,
  `isactive` char(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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

CREATE TABLE IF NOT EXISTS `na_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isactive` char(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`user_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `na_web` (
  `web_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(60) NOT NULL,
  `url` varchar(255) NOT NULL,
  `blockdays` int(11) NOT NULL DEFAULT '1',
  `webkey` varchar(100) NOT NULL,
  `isactive` char(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`web_id`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `na_web`
--

INSERT INTO `na_web` (`web_id`, `user_id`, `created`, `updated`, `name`, `url`, `blockdays`, `webkey`, `isactive`) VALUES
(1, 4, '2017-01-29 19:33:05', '0000-00-00 00:00:00', 'LIBROS DEL PROGRAMADOR', 'www.librosdelprogramador.pw', 1, '61dc52d8c356e2a2fc6d5d5abed55682', 'Y');

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
