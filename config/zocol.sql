-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2018 a las 04:44:10
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zocol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flete`
--

CREATE TABLE `flete` (
  `id_flete` int(10) UNSIGNED NOT NULL,
  `fk_tipoMedida` int(10) UNSIGNED NOT NULL,
  `DepartamentoOrigen` int(2) NOT NULL,
  `DepartamentoDestino` int(2) DEFAULT NULL,
  `precioFlete` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flete`
--

INSERT INTO `flete` (`id_flete`, `fk_tipoMedida`, `DepartamentoOrigen`, `DepartamentoDestino`, `precioFlete`) VALUES
(1, 1, 24, 4, 2577990),
(2, 1, 24, 14, 883599),
(3, 1, 24, 27, 1583860),
(4, 1, 24, 30, 629696),
(5, 1, 24, 5, 2493380),
(6, 1, 24, 22, 1621240),
(7, 1, 24, 6, 1621240),
(8, 1, 24, 29, 288140),
(9, 1, 24, 21, 1909390),
(10, 1, 24, 7, 266154),
(11, 1, 24, 2, 939674),
(12, 1, 24, 17, 786515),
(13, 1, 24, 25, 108265),
(14, 1, 24, 10, 803397),
(15, 1, 24, 19, 2513160),
(16, 1, 24, 20, 1372110),
(17, 1, 24, 9, 1941850),
(18, 1, 4, 14, 2349090),
(19, 1, 4, 27, 1429260),
(20, 1, 4, 30, 3116650),
(21, 1, 4, 5, 233581),
(22, 1, 4, 22, 1648530),
(23, 1, 4, 6, 2494610),
(24, 1, 4, 29, 2450780),
(25, 1, 4, 21, 4360300),
(26, 1, 4, 7, 2278550),
(27, 1, 4, 2, 1795510),
(28, 1, 4, 17, 2826730),
(29, 1, 4, 25, 2359260),
(30, 1, 4, 10, 3240750),
(31, 1, 4, 19, 202374),
(32, 1, 4, 20, 2852840),
(33, 1, 4, 9, 2935900),
(34, 1, 14, 27, 979952),
(35, 1, 14, 30, 1522870),
(36, 1, 14, 5, 2330330),
(37, 1, 14, 22, 1645110),
(38, 1, 14, 6, 646183),
(39, 1, 14, 29, 521633),
(40, 1, 14, 21, 2777420),
(41, 1, 14, 7, 875337),
(42, 1, 14, 2, 1085280),
(43, 1, 14, 17, 794781),
(44, 1, 14, 25, 959983),
(45, 1, 14, 10, 1670890),
(46, 1, 14, 19, 2239330),
(47, 1, 14, 20, 394913),
(48, 1, 14, 9, 1092360),
(49, 1, 27, 30, 2281060),
(50, 1, 27, 5, 1515890),
(51, 1, 27, 22, 622137),
(52, 1, 27, 29, 1281900),
(53, 1, 27, 21, 3559800),
(54, 1, 27, 7, 1392160),
(55, 1, 27, 17, 861626),
(56, 1, 27, 25, 1505840),
(57, 1, 27, 10, 2237640),
(58, 1, 27, 19, 1239600),
(59, 1, 27, 20, 1519550),
(60, 1, 27, 9, 1509320),
(61, 1, 30, 5, 2938350),
(62, 1, 30, 22, 1920410),
(63, 1, 30, 6, 2260990),
(64, 1, 30, 29, 931187),
(65, 1, 30, 21, 1950940),
(66, 1, 30, 7, 875842),
(67, 1, 30, 17, 1471720),
(68, 1, 30, 25, 687052),
(69, 1, 30, 10, 805037),
(70, 1, 30, 19, 3140820),
(71, 1, 30, 20, 2008940),
(72, 1, 30, 9, 2691240),
(73, 1, 5, 22, 1689140),
(74, 1, 5, 6, 2514390),
(75, 1, 5, 29, 2316810),
(76, 1, 5, 21, 4275760),
(77, 1, 5, 7, 2193080),
(78, 1, 5, 17, 2696620),
(79, 1, 5, 25, 2272820),
(80, 1, 5, 10, 3201060),
(81, 1, 5, 19, 457255),
(82, 1, 5, 20, 2803210),
(83, 1, 5, 9, 2765030),
(84, 1, 22, 6, 1655880),
(85, 1, 22, 29, 1956780),
(86, 1, 22, 21, 4210960),
(87, 1, 22, 7, 2076600),
(88, 1, 22, 17, 2531580),
(89, 1, 22, 25, 2173140),
(90, 1, 22, 10, 2849980),
(91, 1, 22, 19, 1483170),
(92, 1, 22, 20, 2182590),
(93, 1, 22, 9, 2162560),
(94, 1, 6, 29, 1099910),
(95, 1, 6, 21, 3373940),
(96, 1, 6, 7, 1398670),
(97, 1, 6, 17, 1548560),
(98, 1, 6, 25, 1528420),
(99, 1, 6, 10, 2231340),
(100, 1, 6, 19, 2303370),
(101, 1, 6, 20, 985466),
(102, 1, 6, 9, 470341),
(103, 1, 29, 21, 2186490),
(104, 1, 29, 7, 569322),
(105, 1, 29, 17, 435356),
(106, 1, 29, 25, 414089),
(107, 1, 29, 10, 1025090),
(108, 1, 29, 19, 2159950),
(109, 1, 29, 20, 1007780),
(110, 1, 29, 9, 1686790),
(111, 1, 21, 7, 2187510),
(112, 1, 21, 17, 1685670),
(113, 1, 21, 25, 1934970),
(114, 1, 21, 10, 932843),
(115, 1, 21, 19, 4533860),
(116, 1, 21, 20, 3265130),
(117, 1, 21, 9, 3947530),
(118, 1, 7, 17, 1132810),
(119, 1, 7, 25, 146702),
(120, 1, 7, 10, 1078920),
(121, 1, 7, 19, 2238870),
(122, 1, 7, 20, 1087910),
(123, 1, 10, 9, 1944610),
(124, 1, 17, 25, 904556),
(125, 1, 17, 10, 691591),
(126, 1, 17, 19, 2592270),
(127, 1, 17, 20, 1281850),
(128, 1, 17, 9, 1957840),
(129, 1, 25, 10, 892779),
(130, 1, 25, 19, 2404930),
(131, 1, 25, 20, 1426350),
(132, 1, 25, 9, 1920080),
(133, 1, 10, 19, 3597280),
(134, 1, 10, 20, 2206860),
(135, 1, 10, 9, 2801710),
(136, 1, 19, 20, 2730500),
(137, 1, 19, 9, 2810710),
(138, 1, 20, 9, 534860);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flete`
--
ALTER TABLE `flete`
  ADD PRIMARY KEY (`id_flete`),
  ADD KEY `flete_FKIndex1` (`fk_tipoMedida`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;