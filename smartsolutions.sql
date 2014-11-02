-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-11-2014 a las 06:13:36
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `smartsolutions`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activo1`
--

CREATE TABLE IF NOT EXISTS `activo1` (
  `Documento` int(11) NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `activo1`
--

INSERT INTO `activo1` (`Documento`, `Cedula`, `Codigo`, `Fecha`, `Naturaleza`, `Descripcion`, `Valor`) VALUES
(1, '2', '1105', '2014-09-01', 'D', 'Caja', 50000000),
(1, '2', '31', '2014-09-01', 'C', 'Capital Social', 50000000),
(2, '2', '1105', '2014-09-01', 'C', 'Caja', 40000000),
(2, '2', '1120', '2014-09-01', 'D', 'Cuenta de Ahorros', 40000000),
(3, '2', '1105', '2014-09-02', 'C', 'Caja', 1528500),
(4, '2', '1105', '2014-09-03', 'C', 'Caja', 7144900),
(4, '2', '1520', '2014-09-03', 'D', 'Muebles y enceres', 7144900),
(38, '2', '1105', '2014-10-11', 'C', 'Caja', 1000),
(38, '2', '1120', '2014-10-11', 'D', 'Cuenta de Ahorros', 1000),
(39, '3', '1105', '2014-10-13', 'D', 'Caja ASUSG51J', 1972000),
(40, '3', '1105', '2014-10-13', 'D', 'Caja Acer E15', 522000),
(40, '3', '14', '2014-10-13', 'C', 'inventario Acer E15', 0),
(41, '3', '1105', '2014-10-13', 'D', 'Caja AcerAspire ES1-511', 5800000),
(41, '3', '14', '2014-10-13', 'C', 'inventario AcerAspire ES1-511', 0),
(42, '3', '1105', '2014-10-13', 'D', 'Caja LENOVA Y410p', 2314200),
(42, '3', '14', '2014-10-13', 'C', 'inventario LENOVA Y410p', 0),
(43, '3', '1105', '2014-10-13', 'D', 'Caja AcerAspire ES1-511', 580000),
(43, '3', '14', '2014-10-13', 'C', 'inventario AcerAspire ES1-511', 0),
(44, '3', '1105', '2014-10-13', 'D', 'Caja Acer E15', 522000),
(44, '3', '14', '2014-10-13', 'C', 'inventario Acer E15', 0),
(45, '3', '1105', '2014-10-13', 'D', 'Caja 1', 110),
(45, '3', '14', '2014-10-13', 'C', 'inventario 1', 0),
(46, '3', '1105', '2014-10-13', 'D', 'Caja LENOVA Y410p', 2314200),
(46, '3', '14', '2014-10-13', 'C', 'inventario LENOVA Y410p', 0),
(47, '3', '1105', '2014-10-13', 'D', 'Caja Acer AOD2', 348000),
(47, '3', '14', '2014-10-13', 'C', 'inventario Acer AOD2', 0),
(48, '3', '1105', '2014-10-13', 'D', 'Caja LENOVA Y410p', 2314200),
(48, '3', '14', '2014-10-13', 'C', 'inventario LENOVA Y410p', 0),
(49, '3', '1105', '2014-10-13', 'D', 'Caja LENOVAE431', 1506840),
(49, '3', '14', '2014-10-13', 'C', 'inventario LENOVAE431', 0),
(50, '3', '1105', '2014-10-13', 'D', 'Caja Acer AOD2', 348000),
(50, '3', '14', '2014-10-13', 'C', 'inventario Acer AOD2', 0),
(51, '3', '1105', '2014-10-13', 'D', 'Caja AcerAspire ES1-511', 580000),
(51, '3', '14', '2014-10-13', 'C', 'inventario AcerAspire ES1-511', 0),
(52, '3', '1105', '2014-10-13', 'D', 'Caja LENOVAE431', 1506840),
(52, '3', '14', '2014-10-13', 'C', 'inventario LENOVAE431', 0),
(53, '3', '1105', '2014-10-13', 'D', 'Caja ASUSG51J', 1972000),
(53, '3', '14', '2014-10-13', 'C', 'inventario ASUSG51J', 0),
(54, '3', '1105', '2014-10-13', 'D', 'Caja Acer E15', 522000),
(54, '3', '14', '2014-10-13', 'C', 'inventario Acer E15', 0),
(55, '3', '1105', '2014-10-13', 'D', 'Caja Acer E15', 522000),
(55, '3', '14', '2014-10-13', 'C', 'inventario Acer E15', 0),
(56, '3', '1105', '2014-10-13', 'D', 'Caja AcerS3-391-6046', 928000),
(56, '3', '14', '2014-10-13', 'C', 'inventario AcerS3-391-6046', 0),
(57, '3', '1105', '2014-10-13', 'D', 'Caja Acer E15', 522000),
(57, '3', '14', '2014-10-13', 'C', 'inventario Acer E15', 0),
(58, '3', '1105', '2014-10-13', 'D', 'Caja AcerAspire ES1-511', 580000),
(58, '3', '14', '2014-10-13', 'C', 'inventario AcerAspire ES1-511', 0),
(59, '3', '1105', '2014-10-13', 'D', 'Caja Acer E15', 522000),
(59, '3', '14', '2014-10-13', 'C', 'inventario Acer E15', 0),
(60, '3', '1105', '2014-10-13', 'D', 'Caja Acer E15', 522000),
(60, '3', '14', '2014-10-13', 'C', 'inventario Acer E15', 0),
(61, '3', '1105', '2014-10-13', 'D', 'Caja AcerAspire ES1-511', 580000),
(61, '3', '14', '2014-10-13', 'C', 'inventario AcerAspire ES1-511', 0),
(62, '3', '1105', '2014-10-13', 'D', 'Caja Lenovo2-14-R', 1364160),
(62, '3', '14', '2014-10-13', 'C', 'inventario Lenovo2-14-R', 0),
(63, '3', '1105', '2014-10-13', 'D', 'Caja LENOVAE431', 1506840),
(63, '3', '14', '2014-10-13', 'C', 'inventario LENOVAE431', 0),
(65, '3', '1105', '2014-10-13', 'D', 'Caja AcerAspire ES1-511', 580000),
(65, '3', '14', '2014-10-13', 'C', 'inventario AcerAspire ES1-511', 0),
(66, '3', '1105', '2014-10-13', 'D', 'Caja Lenovo2-14-R', 1364160),
(66, '3', '14', '2014-10-13', 'C', 'inventario Lenovo2-14-R', 0),
(67, '3', '1105', '2014-10-14', 'D', 'Caja Acer AOD2', 348000),
(67, '3', '14', '2014-10-14', 'C', 'inventario Acer AOD2', 0),
(68, '3', '1105', '2014-10-14', 'D', 'Caja LENOVAE431', 1506840),
(68, '3', '14', '2014-10-14', 'C', 'inventario LENOVAE431', 0),
(70, '3', '1105', '2014-10-14', 'D', 'Caja Acer E15', 522000),
(70, '3', '14', '2014-10-14', 'C', 'inventario Acer E15', 0),
(71, '3', '1105', '2014-10-14', 'D', 'Caja LENOVA Y410p', 2314200),
(71, '3', '14', '2014-10-14', 'C', 'inventario LENOVA Y410p', 0),
(72, '3', '1105', '2014-10-14', 'D', 'Caja Acer E15', 522000),
(72, '3', '14', '2014-10-14', 'C', 'inventario Acer E15', 0),
(73, '3', '1105', '2014-10-14', 'D', 'Caja ASUS750JZ', 3016000),
(73, '3', '14', '2014-10-14', 'C', 'inventario ASUS750JZ', 0),
(74, '3', '1105', '2014-10-14', 'D', 'Caja AcerAspire ES1-511', 580000),
(74, '3', '14', '2014-10-14', 'C', 'inventario AcerAspire ES1-511', 0),
(75, '3', '1105', '2014-10-14', 'D', 'Caja Acer E15', 522000),
(75, '3', '14', '2014-10-14', 'C', 'inventario Acer E15', 0),
(76, '3', '1105', '2014-10-14', 'D', 'Caja 1', 110),
(76, '3', '14', '2014-10-14', 'C', 'inventario 1', 0),
(77, '1', '1105', '2014-10-15', 'C', 'Caja pago ', 2400000),
(77, '1', '14', '2014-10-15', 'D', 'Inventario ', 2400000),
(78, '3', '1105', '2014-10-15', 'D', 'Caja Acer AOD2', 300000),
(78, '3', '14', '2014-10-15', 'C', 'inventario Acer AOD2', 200000),
(79, '1', '1105', '2014-10-15', 'C', 'Caja pago ', 3500000),
(79, '1', '14', '2014-10-15', 'D', 'Inventario ', 3500000),
(80, '3', '1105', '2014-10-15', 'D', 'Caja Acer E15', 450000),
(80, '3', '14', '2014-10-15', 'C', 'inventario Acer E15', 350000),
(81, '3', '1105', '2014-10-15', 'D', 'Caja Acer E15', 450000),
(81, '3', '14', '2014-10-15', 'C', 'inventario Acer E15', 350000),
(82, '3', '1105', '2014-10-15', 'D', 'Caja Acer AOD2', 300000),
(82, '3', '14', '2014-10-15', 'C', 'inventario Acer AOD2', 200000),
(83, '3', '1105', '2014-10-15', 'D', 'Caja Acer AOD2', 300000),
(83, '3', '14', '2014-10-15', 'C', 'inventario Acer AOD2', 200000),
(84, '3', '1105', '2014-10-16', 'D', 'Caja Acer AOD2', 300000),
(84, '3', '14', '2014-10-16', 'C', 'inventario Acer AOD2', 200000),
(85, '3', '1105', '2014-10-16', 'D', 'Caja Acer E15', 450000),
(85, '3', '14', '2014-10-16', 'C', 'inventario Acer E15', 350000),
(86, '2', '1105', '2014-10-17', 'C', 'Caja', 1000),
(86, '2', '1120', '2014-10-17', 'D', 'Cuenta de Ahorros', 1000),
(87, '3', '1105', '2014-10-17', 'D', 'Caja Acer E15', 450000),
(87, '3', '14', '2014-10-17', 'C', 'inventario Acer E15', 350000),
(88, '3', '1105', '2014-10-17', 'D', 'Caja Acer AOD2', 300000),
(88, '3', '14', '2014-10-17', 'C', 'inventario Acer AOD2', 200000),
(89, '3', '1105', '2014-10-17', 'D', 'Caja Acer E15', 450000),
(89, '3', '14', '2014-10-17', 'C', 'inventario Acer E15', 350000),
(90, '3', '1105', '2014-10-17', 'D', 'Caja Acer AOD2', 300000),
(90, '3', '14', '2014-10-17', 'C', 'inventario Acer AOD2', 200000),
(92, '1', '1105', '2014-10-19', 'C', 'Caja PagoLENOVA Y410p', 4500000),
(92, '1', '14', '2014-10-19', 'D', 'InventarioLENOVA Y410p', 4500000),
(93, '1', '1105', '2014-10-19', 'C', 'Caja PagoAcer AOD2', 3000000),
(93, '1', '14', '2014-10-19', 'D', 'InventarioAcer AOD2', 3000000),
(94, '2', '1105', '2014-10-20', 'D', 'Caja', 1000),
(95, '1', '1105', '2014-10-25', 'C', 'Caja PagoAcer AOD2', 262500),
(95, '1', '14', '2014-10-25', 'D', 'InventarioAcer AOD2', 262500),
(96, '1', '1105', '2014-10-25', 'C', 'Caja PagoAcer AOD2', 262500),
(96, '1', '14', '2014-10-25', 'D', 'InventarioAcer AOD2', 262500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apropiaciones`
--

CREATE TABLE IF NOT EXISTS `apropiaciones` (
  `nomina` int(11) NOT NULL,
  `salud` int(11) NOT NULL,
  `pension` int(11) NOT NULL,
  `arl` int(11) NOT NULL,
  `vacaciones` int(11) NOT NULL,
  `prima` int(11) NOT NULL,
  `cesantias` int(11) NOT NULL,
  `int_cesantias` int(11) NOT NULL,
  `icbf` int(11) NOT NULL,
  `ccf` int(11) NOT NULL,
  `sena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `apropiaciones`
--

INSERT INTO `apropiaciones` (`nomina`, `salud`, `pension`, `arl`, `vacaciones`, `prima`, `cesantias`, `int_cesantias`, `icbf`, `ccf`, `sena`) VALUES
(1, 620500, 912500, 73000, 303680, 608090, 608090, 73000, 219000, 0, 146000),
(2, 633427, 931510, 74521, 310007, 620759, 620759, 74521, 223563, 0, 149042),
(3, 620500, 912500, 73000, 303680, 608090, 608090, 73000, 219000, 0, 146000),
(4, 212500, 312500, 25000, 104000, 208250, 208250, 2083, 75000, 0, 50000),
(5, 620500, 912500, 73000, 303680, 608090, 608090, 6081, 219000, 0, 146000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Cedula`, `Nombre`, `Apellido`, `Telefono`) VALUES
('1', 'jkj asad', 'jkj', 'jkj'),
('1069745533', 'Javier Andres', 'Valencia muñoz', '3153232553'),
('1069750715', 'Cristian', 'Guerrero', '3144462165'),
('1069753434', 'Edixon', 'Hernandez', '3134765649'),
('Cristian ', 'doble cacorron', 'barbosa', '314334'),
('jaja', 'jaja', 'jaja', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigotransacion`
--

CREATE TABLE IF NOT EXISTS `codigotransacion` (
  `Codigo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `codigotransacion`
--

INSERT INTO `codigotransacion` (`Codigo`, `Descripcion`, `Tipo`) VALUES
('1105', 'Caja', 'activo'),
('1120', 'Cuenta de Ahorros', 'activo'),
('112005', 'Bancos', 'activo'),
('12', 'Inversiones', 'activo'),
('1205', 'Acciones', 'activo'),
('123005', 'Empresas', 'activo'),
('131505', 'Ventas', 'activo'),
('131520', 'Presatomos', 'activo'),
('134010', 'Maquinaria y equipo', 'activo'),
('134515', 'Comiciones', 'activo'),
('14', 'Inventario', 'activo'),
('21', 'Obligaciones Financi', 'pasivo'),
('2205', 'Proveedor', 'pasivo'),
('236505', 'Retencion Salarios y pagos laborales', 'pasivo'),
('237005', 'Aportes a Salud', 'pasivo'),
('237006', 'Aportes a administradoras de riesgos profesionales, ARP', 'pasivo'),
('237010', 'Aportes al ICBF, SENA y cajas de compensación', 'pasivo'),
('237025', 'Embargos Judiciales', 'pasivo'),
('237030', 'Libranzas', 'pasivo'),
('237040', 'Cooperativas', 'pasivo'),
('238030', 'Fondos de cesantías y/o pensiones', 'pasivo'),
('251023', 'Cesantias', 'pasivo'),
('251520', 'Interés sobre Cesantias', 'pasivo'),
('252021', 'Prima', 'pasivo'),
('252522', 'Vacaciones', 'pasivo'),
('2550', 'Obligación Laboral', 'pasivo'),
('2804', 'IVA', 'pasivo'),
('31', 'Capital Social', 'activo'),
('4135', 'Ventas', 'ingreso'),
('510506', 'Sueldos', 'gasto'),
('510515', 'Horas Extra', 'gasto'),
('510527', 'Auxilio de trasporte', 'gasto'),
('510530', 'Cesantias', 'gasto'),
('510533', 'Intereses sobre cesantías', 'gasto'),
('510536', 'Prima de servicios', 'gasto'),
('510539', 'Vacaciones', 'gasto'),
('510545', 'Auxilio de alimentac', 'gasto'),
('510548', 'Bonificaciones', 'gasto'),
('510559', 'Pensiones de jubilación', 'gasto'),
('510568', 'Aportes a administradoras de riesgos profesionales, AR', 'pasivo'),
('510569', 'Aportes a entidades promotoras de salud, E', 'gasto'),
('510572', 'Aportes cajas de compensación familia', 'gasto'),
('510575', 'Aportes ICBF', 'gasto'),
('510578', 'SENA', 'gasto'),
('613554', 'Costo de venta', 'costo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costos`
--

CREATE TABLE IF NOT EXISTS `costos` (
  `Documento` int(11) NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `costos`
--

INSERT INTO `costos` (`Documento`, `Cedula`, `Codigo`, `Fecha`, `Naturaleza`, `Descripcion`, `Valor`) VALUES
(40, '3', '613554', '2014-10-13', 'D', 'Costo Acer E15', 0),
(41, '3', '613554', '2014-10-13', 'D', 'Costo AcerAspire ES1', 0),
(42, '3', '613554', '2014-10-13', 'D', 'Costo LENOVA Y410p', 0),
(43, '3', '613554', '2014-10-13', 'D', 'Costo AcerAspire ES1', 0),
(44, '3', '613554', '2014-10-13', 'D', 'Costo Acer E15', 0),
(45, '3', '613554', '2014-10-13', 'D', 'Costo 1', 0),
(46, '3', '613554', '2014-10-13', 'D', 'Costo LENOVA Y410p', 0),
(47, '3', '613554', '2014-10-13', 'D', 'Costo Acer AOD2', 0),
(48, '3', '613554', '2014-10-13', 'D', 'Costo LENOVA Y410p', 0),
(49, '3', '613554', '2014-10-13', 'D', 'Costo LENOVAE431', 0),
(50, '3', '613554', '2014-10-13', 'D', 'Costo Acer AOD2', 0),
(51, '3', '613554', '2014-10-13', 'D', 'Costo AcerAspire ES1', 0),
(52, '3', '613554', '2014-10-13', 'D', 'Costo LENOVAE431', 0),
(53, '3', '613554', '2014-10-13', 'D', 'Costo ASUSG51J', 0),
(54, '3', '613554', '2014-10-13', 'D', 'Costo Acer E15', 0),
(55, '3', '613554', '2014-10-13', 'D', 'Costo Acer E15', 0),
(56, '3', '613554', '2014-10-13', 'D', 'Costo AcerS3-391-604', 0),
(57, '3', '613554', '2014-10-13', 'D', 'Costo Acer E15', 0),
(58, '3', '613554', '2014-10-13', 'D', 'Costo AcerAspire ES1', 0),
(59, '3', '613554', '2014-10-13', 'D', 'Costo Acer E15', 0),
(60, '3', '613554', '2014-10-13', 'D', 'Costo Acer E15', 0),
(61, '3', '613554', '2014-10-13', 'D', 'Costo AcerAspire ES1', 0),
(62, '3', '613554', '2014-10-13', 'D', 'Costo Lenovo2-14-R', 0),
(63, '3', '613554', '2014-10-13', 'D', 'Costo LENOVAE431', 0),
(65, '3', '613554', '2014-10-13', 'D', 'Costo AcerAspire ES1', 0),
(66, '3', '613554', '2014-10-13', 'D', 'Costo Lenovo2-14-R', 0),
(67, '3', '613554', '2014-10-14', 'D', 'Costo Acer AOD2', 0),
(68, '3', '613554', '2014-10-14', 'D', 'Costo LENOVAE431', 0),
(70, '3', '613554', '2014-10-14', 'D', 'Costo Acer E15', 0),
(71, '3', '613554', '2014-10-14', 'D', 'Costo LENOVA Y410p', 0),
(72, '3', '613554', '2014-10-14', 'D', 'Costo Acer E15', 0),
(73, '3', '613554', '2014-10-14', 'D', 'Costo ASUS750JZ', 0),
(74, '3', '613554', '2014-10-14', 'D', 'Costo AcerAspire ES1', 0),
(75, '3', '613554', '2014-10-14', 'D', 'Costo Acer E15', 0),
(76, '3', '613554', '2014-10-14', 'D', 'Costo 1', 0),
(78, '3', '613554', '2014-10-15', 'D', 'Costo Acer AOD2', 200000),
(80, '3', '613554', '2014-10-15', 'D', 'Costo Acer E15', 350000),
(81, '3', '613554', '2014-10-15', 'D', 'Costo Acer E15', 350000),
(82, '3', '613554', '2014-10-15', 'D', 'Costo Acer AOD2', 200000),
(83, '3', '613554', '2014-10-15', 'D', 'Costo Acer AOD2', 200000),
(84, '3', '613554', '2014-10-16', 'D', 'Costo Acer AOD2', 200000),
(85, '3', '613554', '2014-10-16', 'D', 'Costo Acer E15', 350000),
(87, '3', '613554', '2014-10-17', 'D', 'Costo Acer E15', 350000),
(88, '3', '613554', '2014-10-17', 'D', 'Costo Acer AOD2', 200000),
(89, '3', '613554', '2014-10-17', 'D', 'Costo Acer E15', 350000),
(90, '3', '613554', '2014-10-17', 'D', 'Costo Acer AOD2', 200000),
(94, '2', '613554', '2014-10-20', 'C', 'Costo de venta', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE IF NOT EXISTS `detallefactura` (
  `num_factura` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `cantidad` int(11) DEFAULT NULL,
  `vlr_venta` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detallefactura`
--

INSERT INTO `detallefactura` (`num_factura`, `codigo`, `cantidad`, `vlr_venta`, `total`) VALUES
(0, 'ASUSG51J', 1, 1700000, 1700000),
(1, 'LENOVA Y410p', 1, 1995000, 1995000),
(2, 'Acer AOD2', 1, 300000, 300000),
(2, 'Acer E15', 1, 450000, 450000),
(3, 'Acer AOD2', 2, 300000, 600000),
(3, 'AcerAspire ES1-511', 10, 500000, 5000000),
(4, 'Acer AOD2', 3, 300000, 900000),
(4, 'LENOVA Y410p', 1, 1995000, 1995000),
(5, 'Acer AOD2', 9, 300000, 2700000),
(5, 'AcerAspire ES1-511', 1, 500000, 500000),
(6, 'Acer AOD2', 9, 300000, 2700000),
(6, 'Acer E15', 1, 450000, 450000),
(7, 'ASUSG51J', 1, 1700000, 1700000),
(7, 'LENOVA Y410p', 2, 1995000, 3990000),
(8, 'Acer AOD2', 1, 300000, 300000),
(8, 'LENOVA Y410p', 1, 1995000, 1995000),
(9, 'Acer AOD2', 5, 300000, 1500000),
(10, 'LENOVA Y410p', 1, 1995000, 1995000),
(11, 'LENOVAE431', 1, 1299000, 1299000),
(12, 'Acer AOD2', 1, 300000, 300000),
(13, 'AcerAspire ES1-511', 1, 500000, 500000),
(14, 'LENOVAE431', 1, 1299000, 1299000),
(15, 'ASUSG51J', 1, 1700000, 1700000),
(16, 'Acer E15', 1, 450000, 450000),
(17, 'Acer E15', 1, 450000, 450000),
(18, 'AcerS3-391-6046', 1, 800000, 800000),
(19, 'Acer E15', 1, 450000, 450000),
(20, 'AcerAspire ES1-511', 1, 500000, 500000),
(21, 'Acer E15', 1, 450000, 450000),
(22, 'Acer E15', 1, 450000, 450000),
(23, 'AcerAspire ES1-511', 1, 500000, 500000),
(24, 'Lenovo2-14-R', 1, 1176000, 1176000),
(25, 'LENOVAE431', 1, 1299000, 1299000),
(27, 'AcerAspire ES1-511', 1, 500000, 500000),
(27, 'Lenovo2-14-R', 1, 1176000, 1176000),
(28, 'AcerAspire ES1-511', 1, 500000, 500000),
(28, 'Lenovo2-14-R', 1, 1176000, 1176000),
(29, 'Acer AOD2', 1, 300000, 300000),
(30, 'Acer AOD2', 1, 300000, 300000),
(30, 'LENOVAE431', 1, 1299000, 1299000),
(31, 'Acer E15', 1, 450000, 450000),
(32, 'LENOVA Y410p', 1, 1995000, 1995000),
(33, 'Acer E15', 1, 450000, 450000),
(34, 'ASUS750JZ', 1, 2600000, 2600000),
(35, 'AcerAspire ES1-511', 1, 500000, 500000),
(36, 'Acer E15', 1, 450000, 450000),
(38, 'Acer AOD2', 1, 300000, 300000),
(39, 'Acer AOD2', 1, 300000, 300000),
(39, 'Acer E15', 1, 450000, 450000),
(40, 'Acer E15', 1, 450000, 450000),
(41, 'Acer AOD2', 1, 300000, 300000),
(41, 'Acer E15', 1, 450000, 450000),
(42, 'Acer AOD2', 1, 300000, 300000),
(43, 'Acer AOD2', 1, 300000, 300000),
(44, 'Acer E15', 1, 450000, 450000),
(45, 'Acer E15', 1, 450000, 450000),
(46, 'Acer AOD2', 1, 300000, 300000),
(47, 'Acer E15', 1, 450000, 450000),
(48, 'Acer AOD2', 1, 300000, 300000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentado`
--

CREATE TABLE IF NOT EXISTS `documentado` (
`cod_documento` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=110 ;

--
-- Volcado de datos para la tabla `documentado`
--

INSERT INTO `documentado` (`cod_documento`, `descripcion`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, 'Transacion'),
(11, 'Transacion'),
(12, 'Transacion'),
(13, 'Transacion'),
(14, 'Transacion'),
(15, 'Transacion'),
(16, 'Transacion'),
(17, 'Transacion'),
(18, 'Transacion'),
(20, 'Factura+1'),
(21, 'Factura+2'),
(22, 'Factura+2'),
(23, 'Factura+3'),
(24, 'Factura+4'),
(25, 'Factura+'),
(26, 'Compra'),
(27, 'Compra'),
(28, 'Factura+5'),
(29, 'Compra'),
(30, 'Factura+6'),
(31, 'Factura+7'),
(32, 'Factura+7'),
(33, 'Factura+8'),
(34, 'Compra'),
(35, 'Compra'),
(36, 'Compra'),
(37, 'Factura+9'),
(38, 'Transacion'),
(39, 'Factura+0'),
(40, 'Factura+2'),
(41, 'Factura+3'),
(42, 'Factura+4'),
(43, 'Factura+5'),
(44, 'Factura+6'),
(45, 'Factura+7'),
(46, 'Factura+8'),
(47, 'Factura+9'),
(48, 'Factura+10'),
(49, 'Factura+11'),
(50, 'Factura+12'),
(51, 'Factura+13'),
(52, 'Factura+14'),
(53, 'Factura+15'),
(54, 'Factura+16'),
(55, 'Factura+17'),
(56, 'Factura+18'),
(57, 'Factura+19'),
(58, 'Factura+20'),
(59, 'Factura+21'),
(60, 'Factura+22'),
(61, 'Factura+23'),
(62, 'Factura+24'),
(63, 'Factura+25'),
(64, 'Factura+26'),
(65, 'Factura+27'),
(66, 'Factura+28'),
(67, 'Factura+29'),
(68, 'Factura+30'),
(69, 'Factura+31'),
(70, 'Factura+31'),
(71, 'Factura+32'),
(72, 'Factura+33'),
(73, 'Factura+34'),
(74, 'Factura+35'),
(75, 'Factura+36'),
(76, 'Factura+37'),
(77, 'Compra'),
(78, 'Factura+38'),
(79, 'Compra'),
(80, 'Factura+39'),
(81, 'Factura+40'),
(82, 'Factura+41'),
(83, 'Factura+42'),
(84, 'Factura+43'),
(85, 'Factura+44'),
(86, 'Transacion'),
(87, 'Factura+45'),
(88, 'Factura+46'),
(89, 'Factura+47'),
(90, 'Factura+48'),
(92, 'Compra'),
(93, 'Compra'),
(94, 'Transacion'),
(95, 'Compra'),
(96, 'Compra'),
(97, 'Nomina 1'),
(98, 'Nomina 2'),
(99, 'Nomina 3'),
(100, 'Nomina 4'),
(101, 'Nomina 5'),
(102, 'Nomina 6'),
(103, 'Nomina 7'),
(104, 'Nomina 8'),
(105, 'Nomina 1'),
(106, 'Nomina 2'),
(107, 'Nomina 3'),
(108, 'Nomina 4'),
(109, 'Nomina 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
`id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipos_empresa` varchar(255) NOT NULL,
  `regimen` varchar(30) NOT NULL,
  `representante` varchar(20) NOT NULL,
  `somos` text NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `objeto` text NOT NULL,
  `salario_minimo` int(11) NOT NULL,
  `uvt` int(11) NOT NULL,
  `trasporte` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `tipos_empresa`, `regimen`, `representante`, `somos`, `mision`, `vision`, `objeto`, `salario_minimo`, `uvt`, `trasporte`) VALUES
(1, 'Smart Solutions Ltda', 'Sociedad', 'Comun', '1', 'Smart-Solutions esta conformada por un grupo de 5 ingenieros que buscan solucionar las continuas dudas que se les presentan a los consumidores cuando se deben afrontar a la difícil decisión de adquirir un equipo nuevo, ya que en el mercado actual hay una gran variedad de productos diferentes disponibles en el mercado distribuidos en una amplia gama de precios en los que se encuentran equipos con configuraciones y propósitos diferentes, los cuales no quedan muy claros para los compradores en algunos casos, por ello es necesario prestar una asesoría durante todo el proceso de compra, para que cuando el usuario adquiera su producto este sea el que realmente se acomode a sus necesidades.', 'El propósito de la comercializadora Smart-Solutions es el de proveer computadores de excelente calidad y rendimiento a los diferentes tipos de consumidores presentes en el mercado a través de una asesoría personalizada, garantizándole al consumidor el equipo mas adecuado para suplir sus necesidades, ya sea para el uso casual, estudio, trabajo, entretenimiento o cualquier otra.', 'El objetivo de Smart-Solutions es el de prestar un servicio de excelente calidad a todos sus consumidores, para poder expandirse en toda la región de Cundinamarca y posteriormente por todo el país, no solo como comercializadora de computadores portátiles sino también buscando ampliar el portafolio de servicios e implementando el servicio técnico a sus consumidores.', '4651 - Comercio al por mayor de ordenadores, equipos periféricos y programas informáticos \r\n4741 - Comercio al por menor de ordenadores, equipos periféricos y programas informáticos en establecimientos especializados', 616000, 27485, 72000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE IF NOT EXISTS `eps` (
`ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`ID`, `Nombre`) VALUES
(1, 'prueva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
`num_factura` int(11) NOT NULL,
  `cliente` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `vendedor` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`num_factura`, `cliente`, `fecha`, `hora`, `vendedor`, `total`) VALUES
(1, '1069745533', '2014-10-13', '00:00:00', '3', 1972000),
(2, '1069745533', '2014-10-13', '00:00:00', '3', 522000),
(3, '1069745533', '2014-10-13', '00:00:00', '3', 5800000),
(4, '1069745533', '2014-10-13', '00:00:00', '3', 2314200),
(5, '1069745533', '2014-10-13', '00:00:00', '3', 580000),
(6, '1069745533', '2014-10-13', '00:00:00', '3', 522000),
(7, '1069745533', '2014-10-13', '00:00:00', '3', 110),
(8, '1069745533', '2014-10-13', '00:00:00', '3', 2314200),
(9, '1069745533', '2014-10-13', '00:00:00', '3', 348000),
(10, '1069745533', '2014-10-13', '00:00:00', '3', 2314200),
(11, '1069745533', '2014-10-13', '00:00:00', '3', 1506840),
(12, '1069745533', '2014-10-13', '00:00:00', '3', 348000),
(13, '1069745533', '2014-10-13', '00:00:00', '3', 580000),
(14, '1069745533', '2014-10-13', '00:00:00', '3', 1506840),
(15, '1069745533', '2014-10-13', '00:00:00', '3', 1972000),
(16, '1069745533', '2014-10-13', '00:00:00', '3', 522000),
(17, '1069745533', '2014-10-13', '00:00:00', '3', 522000),
(18, '1069745533', '2014-10-13', '00:00:00', '3', 928000),
(19, '1069745533', '2014-10-13', '00:00:00', '3', 522000),
(20, '1069745533', '2014-10-13', '00:00:00', '3', 580000),
(21, '1069745533', '2014-10-13', '00:00:00', '3', 522000),
(22, '1069745533', '2014-10-13', '00:00:00', '3', 522000),
(23, '1069745533', '2014-10-13', '00:00:00', '3', 580000),
(24, '1069745533', '2014-10-13', '00:00:00', '3', 1364160),
(25, '1069745533', '2014-10-13', '00:00:00', '3', 1506840),
(26, '1069745533', '2014-10-13', '00:00:00', '3', 0),
(27, '1069745533', '2014-10-13', '00:00:00', '3', 1944160),
(28, '1069745533', '2014-10-13', '00:00:00', '3', 1944160),
(29, '1069745533', '2014-10-14', '00:00:00', '3', 348000),
(30, '1069745533', '2014-10-14', '00:00:00', '3', 1854840),
(31, '1069745533', '2014-10-14', '08:10:00', '3', 522000),
(32, '1', '2014-10-14', '09:10:00', '3', 2314200),
(33, '1', '2014-10-14', '09:10:00', '3', 522000),
(34, '1', '2014-10-14', '09:10:00', '3', 3016000),
(35, '1', '2014-10-14', '09:10:00', '3', 580000),
(36, '1', '2014-10-14', '09:10:00', '3', 522000),
(37, '1', '2014-10-14', '09:10:00', '3', 110),
(38, '1', '2014-10-15', '05:10:00', '3', 300000),
(39, '1', '2014-10-15', '05:10:00', '3', 750000),
(40, '1', '2014-10-15', '05:10:00', '3', 450000),
(41, '1', '2014-10-15', '05:10:00', '3', 750000),
(42, '1', '2014-10-15', '05:10:00', '3', 300000),
(43, '1069753434', '2014-10-16', '09:10:00', '3', 300000),
(44, '1', '2014-10-16', '10:10:00', '3', 450000),
(45, '1069745533', '2014-10-17', '11:10:00', '3', 450000),
(46, '1069745533', '2014-10-17', '12:10:00', '3', 300000),
(47, '1', '2014-10-17', '12:10:00', '3', 450000),
(48, '1', '2014-10-17', '12:10:00', '3', 300000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasto`
--

CREATE TABLE IF NOT EXISTS `gasto` (
  `Documento` int(11) NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gasto`
--

INSERT INTO `gasto` (`Documento`, `Cedula`, `Codigo`, `Fecha`, `Naturaleza`, `Descripcion`, `Valor`) VALUES
(105, '1', '510506', '2014-11-01', 'D', 'Sueldos', 7300000),
(105, '1', '510515', '2014-11-01', 'D', 'Horas extra', 0),
(105, '1', '510548', '2014-11-01', 'D', 'Bonificaciones', 0),
(105, '1', '510527', '2014-11-01', 'D', 'Auxilio de trasporte', 0),
(105, '1', '510545', '2014-11-01', 'D', 'Auxilio de alimentacion', 0),
(105, '1', '510569', '2014-11-01', 'C', 'Aportes a Salud', 620500),
(105, '1', '510559', '2014-11-01', 'C', 'Fondos de cesantías y/o pensiones', 912500),
(105, '1', '510568', '2014-11-01', 'C', 'Aportes a administradoras de riesgos profesionales, ARP', 73000),
(105, '1', '510536', '2014-11-01', 'C', 'Prima de servicios', 303680),
(105, '1', '510539', '2014-11-01', 'C', 'Vacaciones', 608090),
(105, '1', '510530', '2014-11-01', 'C', 'Cesantías', 608090),
(105, '1', '510533', '2014-11-01', 'C', 'Intereces Sobre cesantías', 73000),
(105, '1', '510578', '2014-11-01', 'C', 'SENA', 219000),
(105, '1', '510575', '2014-11-01', 'C', 'Aportes a ICBF', 292000),
(105, '1', '510572', '2014-11-01', 'C', 'Aportes cajas de compensación familia', 146000),
(106, '1', '510506', '2014-11-01', 'D', 'Sueldos', 7300000),
(106, '1', '510515', '2014-11-01', 'D', 'Horas extra', 152083),
(106, '1', '510548', '2014-11-01', 'D', 'Bonificaciones', 0),
(106, '1', '510527', '2014-11-01', 'D', 'Auxilio de trasporte', 0),
(106, '1', '510545', '2014-11-01', 'D', 'Auxilio de alimentacion', 0),
(106, '1', '510569', '2014-11-01', 'C', 'Aportes a Salud', 633427),
(106, '1', '510559', '2014-11-01', 'C', 'Fondos de cesantías y/o pensiones', 931510),
(106, '1', '510568', '2014-11-01', 'C', 'Aportes a administradoras de riesgos profesionales, ARP', 74521),
(106, '1', '510536', '2014-11-01', 'C', 'Prima de servicios', 310007),
(106, '1', '510539', '2014-11-01', 'C', 'Vacaciones', 620759),
(106, '1', '510530', '2014-11-01', 'C', 'Cesantías', 620759),
(106, '1', '510533', '2014-11-01', 'C', 'Intereces Sobre cesantías', 74521),
(106, '1', '510578', '2014-11-01', 'C', 'SENA', 223563),
(106, '1', '510575', '2014-11-01', 'C', 'Aportes a ICBF', 298083),
(106, '1', '510572', '2014-11-01', 'C', 'Aportes cajas de compensación familia', 149042),
(107, '1', '510506', '2014-11-01', 'D', 'Sueldos', 7300000),
(107, '1', '510515', '2014-11-01', 'D', 'Horas extra', 0),
(107, '1', '510548', '2014-11-01', 'D', 'Bonificaciones', 0),
(107, '1', '510527', '2014-11-01', 'D', 'Auxilio de trasporte', 0),
(107, '1', '510545', '2014-11-01', 'D', 'Auxilio de alimentacion', 0),
(107, '1', '510569', '2014-11-01', 'C', 'Aportes a Salud', 620500),
(107, '1', '510559', '2014-11-01', 'C', 'Fondos de cesantías y/o pensiones', 912500),
(107, '1', '510568', '2014-11-01', 'C', 'Aportes a administradoras de riesgos profesionales, ARP', 73000),
(107, '1', '510536', '2014-11-01', 'C', 'Prima de servicios', 303680),
(107, '1', '510539', '2014-11-01', 'C', 'Vacaciones', 608090),
(107, '1', '510530', '2014-11-01', 'C', 'Cesantías', 608090),
(107, '1', '510533', '2014-11-01', 'C', 'Intereces Sobre cesantías', 73000),
(107, '1', '510578', '2014-11-01', 'C', 'SENA', 219000),
(107, '1', '510575', '2014-11-01', 'C', 'Aportes a ICBF', 292000),
(107, '1', '510572', '2014-11-01', 'C', 'Aportes cajas de compensación familia', 146000),
(108, '1', '510506', '2014-11-01', 'D', 'Sueldos', 2500000),
(108, '1', '510515', '2014-11-01', 'D', 'Horas extra', 0),
(108, '1', '510548', '2014-11-01', 'D', 'Bonificaciones', 0),
(108, '1', '510527', '2014-11-01', 'D', 'Auxilio de trasporte', 0),
(108, '1', '510545', '2014-11-01', 'D', 'Auxilio de alimentacion', 0),
(108, '1', '510569', '2014-11-01', 'D', 'Aportes a Salud', 212500),
(108, '1', '510559', '2014-11-01', 'D', 'Fondos de cesantías y/o pensiones', 312500),
(108, '1', '510568', '2014-11-01', 'D', 'Aportes a administradoras de riesgos profesionales, ARP', 25000),
(108, '1', '510536', '2014-11-01', 'D', 'Prima de servicios', 104000),
(108, '1', '510539', '2014-11-01', 'D', 'Vacaciones', 208250),
(108, '1', '510530', '2014-11-01', 'D', 'Cesantías', 208250),
(108, '1', '510533', '2014-11-01', 'D', 'Intereces Sobre cesantías', 2083),
(108, '1', '510578', '2014-11-01', 'D', 'SENA', 75000),
(108, '1', '510575', '2014-11-01', 'D', 'Aportes a ICBF', 100000),
(108, '1', '510572', '2014-11-01', 'D', 'Aportes cajas de compensación familia', 50000),
(109, '1', '510506', '2014-11-04', 'D', 'Sueldos', 7300000),
(109, '1', '510515', '2014-11-04', 'D', 'Horas extra', 0),
(109, '1', '510548', '2014-11-04', 'D', 'Bonificaciones', 0),
(109, '1', '510527', '2014-11-04', 'D', 'Auxilio de trasporte', 0),
(109, '1', '510545', '2014-11-04', 'D', 'Auxilio de alimentacion', 0),
(109, '1', '510569', '2014-11-04', 'D', 'Aportes a Salud', 620500),
(109, '1', '510559', '2014-11-04', 'D', 'Fondos de cesantías y/o pensiones', 912500),
(109, '1', '510568', '2014-11-04', 'D', 'Aportes a administradoras de riesgos profesionales, ARP', 73000),
(109, '1', '510536', '2014-11-04', 'D', 'Prima de servicios', 303680),
(109, '1', '510539', '2014-11-04', 'D', 'Vacaciones', 608090),
(109, '1', '510530', '2014-11-04', 'D', 'Cesantías', 608090),
(109, '1', '510533', '2014-11-04', 'D', 'Intereces Sobre cesantías', 6081),
(109, '1', '510578', '2014-11-04', 'D', 'SENA', 219000),
(109, '1', '510575', '2014-11-04', 'D', 'Aportes a ICBF', 292000),
(109, '1', '510572', '2014-11-04', 'D', 'Aportes cajas de compensación familia', 146000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE IF NOT EXISTS `ingresos` (
  `Documento` int(11) NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`Documento`, `Cedula`, `Codigo`, `Fecha`, `Naturaleza`, `Descripcion`, `Valor`) VALUES
(94, '2', '4135', '2014-10-20', 'D', 'Ventas', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
`id` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `cant_inicial` int(11) NOT NULL,
  `vlr_inicial` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `vlr_unidad` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `codigo`, `descripcion`, `fecha`, `cant_inicial`, `vlr_inicial`, `cantidad`, `vlr_unidad`, `total`, `tipo`) VALUES
(1, 'Acer AOD2', 'Compra', '2014-10-15', 12, 200000, 12, 200000, 2400000, 'C'),
(2, 'Acer AOD2', 'Venta', '2014-10-15', 1, 200000, 11, 200000, 2200000, 'V'),
(3, 'Acer E15', 'Compra', '2014-10-15', 10, 350000, 10, 350000, 3500000, 'C'),
(4, 'Acer E15', 'Venta', '2014-10-15', 1, 350000, 9, 350000, 3150000, 'V'),
(5, 'Acer AOD2', 'Venta', '2014-10-15', 1, 200000, 11, 200000, 2200000, 'V'),
(6, 'Acer E15', 'Venta', '2014-10-15', 1, 350000, 9, 350000, 3150000, 'V'),
(7, 'Acer AOD2', 'Venta', '2014-10-15', 1, 200000, 10, 200000, 2000000, 'V'),
(8, 'Acer E15', 'Venta', '2014-10-15', 1, 350000, 8, 350000, 2800000, 'V'),
(9, 'Acer AOD2', 'Venta', '2014-10-15', 1, 200000, 9, 200000, 1800000, 'V'),
(10, 'Acer AOD2', 'Venta', '2014-10-16', 1, 200000, 8, 200000, 1600000, 'V'),
(11, 'Acer E15', 'Venta', '2014-10-16', 1, 350000, 7, 350000, 2450000, 'V'),
(12, 'Acer E15', 'Venta', '2014-10-17', 1, 350000, 6, 350000, 2100000, 'V'),
(13, 'Acer AOD2', 'Venta', '2014-10-17', 1, 200000, 7, 200000, 1400000, 'V'),
(14, 'Acer E15', 'Venta', '2014-10-17', 1, 350000, 5, 350000, 1750000, 'V'),
(15, 'Acer AOD2', 'Venta', '2014-10-17', 1, 200000, 6, 200000, 1200000, 'V'),
(17, 'LENOVA Y410p', 'Compra', '2014-10-19', 10, 450000, 10, 450000, 4500000, 'C'),
(18, 'Acer AOD2', 'Compra', '2014-10-19', 10, 300000, 16, 262500, 4200000, 'C'),
(19, 'Acer AOD2', 'Compra', '2014-10-25', 1, 262500, 17, 262500, 4462500, 'C'),
(20, 'Acer AOD2', 'Compra', '2014-10-25', 1, 262500, 18, 262500, 4725000, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Nomina`
--

CREATE TABLE IF NOT EXISTS `Nomina` (
`id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `empleado` varchar(20) NOT NULL,
  `dias_trab` double NOT NULL,
  `basico` int(11) NOT NULL,
  `horas_extra` int(11) NOT NULL,
  `comisiones` int(11) NOT NULL,
  `bonificaciones` int(11) NOT NULL,
  `auxilio_trasp` int(11) NOT NULL,
  `auxilio_alim` int(11) NOT NULL,
  `salud` int(11) NOT NULL,
  `pension` int(11) NOT NULL,
  `fondo_emple` int(11) NOT NULL,
  `libranzas` int(11) NOT NULL,
  `envargos` int(11) NOT NULL,
  `retencion` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `Nomina`
--

INSERT INTO `Nomina` (`id`, `fecha`, `empleado`, `dias_trab`, `basico`, `horas_extra`, `comisiones`, `bonificaciones`, `auxilio_trasp`, `auxilio_alim`, `salud`, `pension`, `fondo_emple`, `libranzas`, `envargos`, `retencion`, `total`, `estado`) VALUES
(3, '2014-11-01', '1', 30, 7300000, 0, 0, 0, 0, 0, 292000, 292000, 0, 0, 0, 377540, 6338460, 1),
(4, '2014-11-01', '2', 30, 2500000, 0, 0, 0, 0, 0, 100000, 100000, 0, 0, 0, 0, 2300000, 1),
(5, '2014-11-04', '1', 30, 7300000, 0, 0, 0, 0, 0, 292000, 292000, 0, 0, 0, 377540, 6338460, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasivo`
--

CREATE TABLE IF NOT EXISTS `pasivo` (
  `Documento` int(11) NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pasivo`
--

INSERT INTO `pasivo` (`Documento`, `Cedula`, `Codigo`, `Fecha`, `Naturaleza`, `Descripcion`, `Valor`) VALUES
(105, '1', '237005', '2014-11-01', 'C', 'Aportes a Salud', 620500),
(105, '1', '238030', '2014-11-01', 'C', 'Fondos de cesantías y/o pensiones', 912500),
(105, '1', '237040', '2014-11-01', 'C', 'Cooperativas', 0),
(105, '1', '237025', '2014-11-01', 'C', 'Embargos Judiciales', 0),
(105, '1', '237030', '2014-11-01', 'C', 'Libranzas', 0),
(105, '1', '2550', '2014-11-01', 'C', 'Obligaciones Laborales', 6338460),
(105, '1', '237005', '2014-11-01', 'D', 'Aportes a Salud', 620500),
(105, '1', '238030', '2014-11-01', 'D', 'Fondos de cesantías y/o pensiones', 912500),
(105, '1', '237006', '2014-11-01', 'D', 'Aportes a administradoras de riesgos profesionales, ARP', 73000),
(105, '1', '252021', '2014-11-01', 'D', 'Prima', 303680),
(105, '1', '252522', '2014-11-01', 'D', 'Vacaciones', 608090),
(105, '1', '251023', '2014-11-01', 'D', 'Cesantías', 608090),
(105, '1', '251520', '2014-11-01', 'D', 'Intereces Sobre Cesantías', 73000),
(105, '1', '237010', '2014-11-01', 'D', 'Aportes al ICBF, SENA y cajas de compensación', 657000),
(106, '1', '237005', '2014-11-01', 'C', 'Aportes a Salud', 633427),
(106, '1', '238030', '2014-11-01', 'C', 'Fondos de cesantías y/o pensiones', 931510),
(106, '1', '237040', '2014-11-01', 'C', 'Cooperativas', 0),
(106, '1', '237025', '2014-11-01', 'C', 'Embargos Judiciales', 0),
(106, '1', '237030', '2014-11-01', 'C', 'Libranzas', 0),
(106, '1', '2550', '2014-11-01', 'C', 'Obligaciones Laborales', 6480932),
(106, '1', '237005', '2014-11-01', 'D', 'Aportes a Salud', 633427),
(106, '1', '238030', '2014-11-01', 'D', 'Fondos de cesantías y/o pensiones', 931510),
(106, '1', '237006', '2014-11-01', 'D', 'Aportes a administradoras de riesgos profesionales, ARP', 74521),
(106, '1', '252021', '2014-11-01', 'D', 'Prima', 310007),
(106, '1', '252522', '2014-11-01', 'D', 'Vacaciones', 620759),
(106, '1', '251023', '2014-11-01', 'D', 'Cesantías', 620759),
(106, '1', '251520', '2014-11-01', 'D', 'Intereces Sobre Cesantías', 74521),
(106, '1', '237010', '2014-11-01', 'D', 'Aportes al ICBF, SENA y cajas de compensación', 670688),
(107, '1', '237005', '2014-11-01', 'C', 'Aportes a Salud', 620500),
(107, '1', '238030', '2014-11-01', 'C', 'Fondos de cesantías y/o pensiones', 912500),
(107, '1', '237040', '2014-11-01', 'C', 'Cooperativas', 0),
(107, '1', '237025', '2014-11-01', 'C', 'Embargos Judiciales', 0),
(107, '1', '237030', '2014-11-01', 'C', 'Libranzas', 0),
(107, '1', '2550', '2014-11-01', 'C', 'Obligaciones Laborales', 6338460),
(107, '1', '237005', '2014-11-01', 'D', 'Aportes a Salud', 620500),
(107, '1', '238030', '2014-11-01', 'D', 'Fondos de cesantías y/o pensiones', 912500),
(107, '1', '237006', '2014-11-01', 'D', 'Aportes a administradoras de riesgos profesionales, ARP', 73000),
(107, '1', '252021', '2014-11-01', 'D', 'Prima', 303680),
(107, '1', '252522', '2014-11-01', 'D', 'Vacaciones', 608090),
(107, '1', '251023', '2014-11-01', 'D', 'Cesantías', 608090),
(107, '1', '251520', '2014-11-01', 'D', 'Intereces Sobre Cesantías', 73000),
(107, '1', '237010', '2014-11-01', 'D', 'Aportes al ICBF, SENA y cajas de compensación', 657000),
(108, '1', '237005', '2014-11-01', 'C', 'Aportes a Salud', 100000),
(108, '1', '238030', '2014-11-01', 'C', 'Fondos de cesantías y/o pensiones', 100000),
(108, '1', '237040', '2014-11-01', 'C', 'Cooperativas', 0),
(108, '1', '237025', '2014-11-01', 'C', 'Embargos Judiciales', 0),
(108, '1', '237030', '2014-11-01', 'C', 'Libranzas', 0),
(108, '1', '2550', '2014-11-01', 'C', 'Obligaciones Laborales', 2300000),
(108, '1', '237005', '2014-11-01', 'C', 'Aportes a Salud', 212500),
(108, '1', '238030', '2014-11-01', 'C', 'Fondos de cesantías y/o pensiones', 312500),
(108, '1', '237006', '2014-11-01', 'C', 'Aportes a administradoras de riesgos profesionales, ARP', 25000),
(108, '1', '252021', '2014-11-01', 'C', 'Prima', 104000),
(108, '1', '252522', '2014-11-01', 'C', 'Vacaciones', 208250),
(108, '1', '251023', '2014-11-01', 'C', 'Cesantías', 208250),
(108, '1', '251520', '2014-11-01', 'C', 'Intereces Sobre Cesantías', 2083),
(108, '1', '237010', '2014-11-01', 'C', 'Aportes al ICBF, SENA y cajas de compensación', 225000),
(109, '1', '237005', '2014-11-04', 'C', 'Aportes a Salud', 292000),
(109, '1', '238030', '2014-11-04', 'C', 'Fondos de cesantías y/o pensiones', 292000),
(109, '1', '237040', '2014-11-04', 'C', 'Cooperativas', 0),
(109, '1', '237025', '2014-11-04', 'C', 'Embargos Judiciales', 0),
(109, '1', '237030', '2014-11-04', 'C', 'Libranzas', 0),
(109, '1', '236505', '2014-11-04', 'C', 'Retencion Salarios y pagos laborales', 377540),
(109, '1', '2550', '2014-11-04', 'C', 'Obligaciones Laborales', 6338460),
(109, '1', '237005', '2014-11-04', 'C', 'Aportes a Salud', 620500),
(109, '1', '238030', '2014-11-04', 'C', 'Fondos de cesantías y/o pensiones', 912500),
(109, '1', '237006', '2014-11-04', 'C', 'Aportes a administradoras de riesgos profesionales, ARP', 73000),
(109, '1', '252021', '2014-11-04', 'C', 'Prima', 303680),
(109, '1', '252522', '2014-11-04', 'C', 'Vacaciones', 608090),
(109, '1', '251023', '2014-11-04', 'C', 'Cesantías', 608090),
(109, '1', '251520', '2014-11-04', 'C', 'Intereces Sobre Cesantías', 6081),
(109, '1', '237010', '2014-11-04', 'C', 'Aportes al ICBF, SENA y cajas de compensación', 657000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pension`
--

CREATE TABLE IF NOT EXISTS `pension` (
`ID` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pension`
--

INSERT INTO `pension` (`ID`, `nombre`) VALUES
(1, 'prueva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Especificaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `iva` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `ValorVenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Codigo`, `Nombre`, `Descripcion`, `Especificaciones`, `iva`, `ValorVenta`) VALUES
('1', 'klk', 'lklk ', 'lklk ', '10', 1000),
('Acer AOD2', 'Acer Aspire One AOD2', 'Acer Aspire One AOD250-1042 10.1 inch Atom 1.6GHz/ 1GB/ 160GB/ XP Home Netbook Computer (Red)', 'Screen Size	10.1 inches\r\nProcessor	1.6 GHz Intel Atom N270\r\nRAM	1 GB DDR2\r\nHard Drive	160 GB\r\nGraphics Coprocessor	Intel GMA 950\r\nAverage Battery Life (in hours)	3.15 hours\r\nExpand\r\nOther Technical Details\r\nBrand Name	Acer\r\nSeries	Aspire One\r\nItem model number	AOD250-1042/LU.S700B.028\r\nHardware Platform	PC\r\nOperating System	Windows XP Home Edition\r\nItem Weight	5 pounds\r\nItem Dimensions L x W x H	10.20 x 7.20 x 1 inches\r\nColor	Red\r\nProcessor Brand	Intel\r\nProcessor Count	1\r\nComputer Memory Type	SDRAM\r\nHard Drive Interface	ATA100', '0', 300000),
('Acer E15', 'Acer E15 15-Inch ', 'Intel N2830 dual-core processor (2.16GHz/2.41GHz w/ Intel Burst)15.6" HD widescreen CineCrystalTM LCD display (1366 x 768) - Intel HD Graphics4GB DDR3L memory (1 Memory Slots, 8GB Maximum Memory) - 500GB hard drivestereo speakers - HD audio - webcam - multi-gesture touchpad - Wireless - Bluetooth 4.0 - HDMI - USB 3.0 - card readerWindows 8.1 (64 bits), 3 cell (up to 4.5-hour) battery - 1-year limited warranty. Color: Diamond Black', 'Screen Size	15.6 inches\r\nMax Screen Resolution	1366 x 768\r\nProcessor	Intel Celeron\r\nRAM	SDRAM DDR3\r\nHard Drive	500 GB\r\nWireless Type	802.11bgn\r\nExpand\r\nOther Technical Details\r\nBrand Name	Acer\r\nSeries	Aspire\r\nItem model number	ES1-511-C0DV\r\nHardware Platform	PC\r\nOperating System	Windows 8\r\nItem Weight	5.3 pounds\r\nItem Dimensions L x W x H	15 x 1.10 x 10.20 inches\r\nColor	Black\r\nComputer Memory Type	DDR3 SDRAM', '0', 450000),
('AcerAspire ES1-511', 'Acer Aspire ES1-511', 'Intel Celeron N2830 2.16 GHz Processor (1 MB Cache)4 GB DDR3L SDRAM500 GB 5400 rpm Hard Drive15.6-Inch Screen, Intel HD GraphicsWindows 8.1, 4.5-hour battery life', 'Screen Size	15.6 inchesMax Screen Resolution	1366x768Processor	2.16 GHz Intel CeleronRAM	4 GB DDR3L SDRAMHard Drive	500 GB SATAGraphics Coprocessor	Intel HD GraphicsGraphics Card Ram Size	64 MBWireless Type	802.11bgnNumber of USB 2.0 Ports	2Number of USB 3.0 Ports	1Average Battery Life (in hours)	4.5 hoursExpandOther Technical DetailsBrand Name	AcerSeries	ES1-511Item model number	ES1-511-C59VOperating System	Windows 8.1Item Weight	5.3 poundsItem Dimensions L x W x H	15.02 x 10.16 x 1.07 inchesColor	Diamond BlackProcessor Brand	Intel CeleronHard Drive Rotational Speed	5400 RPMBatteries:	1 Lithium ion batteries required. (included)', '16', 500000),
('AcerC720', 'Acer C720 Acer C720 ', 'Built-in dual band Wi-Fi 802.11 a/b/g/n\r\nIntel Celeron 2955U 1.4 GHz (Haswell micro-architecture)\r\n16 GB Solid-State Drive\r\n11.6-Inch Anti-Glare Screen, Intel HD Graphics\r\nHDMI port, 8.5-hour battery life', 'Screen Size	11.6 inches\r\nScreen Resolution	1366 x 768\r\nMax Screen Resolution	1366x768\r\nProcessor	1.4 GHz Intel Celeron\r\nRAM	2 GB DDR3L SDRAM\r\nMemory Speed	1333.00\r\nHard Drive	16 GB flash_memory_solid_state\r\nGraphics Coprocessor	Intel HD Graphics\r\nChipset Brand	Intel\r\nGraphics Card Ram Size	128 MB\r\nWireless Type	802.11 a/b/g/n\r\nNumber of USB 2.0 Ports	1\r\nNumber of USB 3.0 Ports	1\r\nAverage Battery Life (in hours)	8.5 hours\r\nExpand\r\nOther Technical Details\r\nBrand Name	Acer\r\nSeries	Acer C720-2848 11.6-Inch Chromebook (Granite Gray)\r\nItem model number	C720-2848\r\nHardware Platform	Consumer Electronics\r\nOperating System	Chrome\r\nItem Weight	2.8 pounds\r\nItem Dimensions L x W x H	11.34 x 8.03 x 0.75 inches\r\nColor	Granite Gray\r\nProcessor Brand	Intel Celeron\r\nProcessor Count	2\r\nComputer Memory Type	DDR3 SDRAM\r\nFlash Memory Size	16\r\nHard Drive Interface	Serial ATA\r\nOptical Drive Type	No\r\nAudio-out Ports (#)	1\r\nBattery Type	Lithium Polymer (LiPo)\r\nBatteries:	1 Lithium ion batteries required. (included)', '', 400000),
('AcerS3-391-6046', 'Acer S3-391-6046 ', 'Screen Size: 13.3"\r\nIntel Core i3-2367M 1.4GHz - 4GB DDR3 - 320GB HDD\r\nBuilt-in 1.3 megapixel webcam\r\nScreen Resolution: 1366 x 768\r\n802.11b/g/n Wireless LAN Bluetooth 4.0 HS', '\r\nBrand Name	Acer\r\nSeries	Aspire\r\nItem model number	SNID#23501755920/S3 SERIES\r\nHardware Platform	Consumer Electronics\r\nOperating System	Windows 8\r\nItem Weight	2.6 pounds\r\nItem Dimensions L x W x H	13.30 x 1 x 7 inches\r\nProcessor Brand	Intel\r\nProcessor Count	2\r\nComputer Memory Type	DDR3 SDRAM\r\nHard Drive Interface	Serial ATA\r\nPower Source	Battery', '', 800000),
('ASUS750JZ', 'ASUS ROG G750JZ-DS71', 'Windows 8.1 Pro u otras ediciones disponibles, Cuarta  generacion de procesadores Intel Core i7 y la grafica NVIDIA GeForce GTX880MDos ventiladores con salidas independientes para alejar el ruido y la temperaturaASUS SonicMaster y ROG AudioWizard ofrecen un audio potente y optimizadoTeclado retroiluminado con una gran capacidad de respuesta y resistencia', 'Procesador Intel Core i7 4700HQ Sistema Operativo Windows 8.1 ProWindows 8.1ChipsetIntel HM87 Express ChipsetMemoriaDDR3L MHz SDRAM, up to 32 G Pantalla17.3" Auto FHD EWV LED Retroiluminado Non-Glare LCD Panel GraficosNVIDIA GeForce GTX880M 4GB GDDR5 Almacenamiento1.5TB 5400 1TB 7200 750GB 5400 With 8 G SSD 512GB SSD 256GB SSD Soporte para Dual HDD RAID0 Support (Opcional)Unidad OpticaSuper-Multi DVD Lectora Blue-rayLector de tarjetas2 -en-1 Lector de tarjetas ( SD/ MMC)Camara web HDRedesIntegrado 802.11ac or 802.11 a/b/g/n (WiDi)10/100/1000 Base TSoporte BT 4.0 (en WLAN+ BT 4.0 tarjeta combo)Interfaz1 x Entrada para microfono0 x Salida para auriculares1 x Puerto VGA /Mini D-sub 15-pin para monitor externo 4 x puerto(s) USB 3.0 1 x Puerto LAN RJ451 x HDMI 1 x Thunderbolt port 1X AC adapter plugAudioParlantes y Array MicrophoneSubwoofer IntegradoSoporte MaxxAudioBatería8 Celdas 5900 mAh 89 WhrsAdaptador de CorrienteSalida :19.5 V DC, 11.8 A, 230 WEntrada :100 -240 V AC, 50/60 Hz universal3/ 2 pin compact power supply systemDimensiones410 x 318 x 17 -58 cm (WxDxH) (w/ 8cell battery)Peso4.8 kg (con batería de 8 celdas)SeguridadKensington lockLoJackIntel Anti-theft', '', 2600000),
('ASUSG51J', 'ASUS G51J-A1 ', 'Windows 7 Ultimate u otras ediciones disponibles\r\nDisfruta del gaming más realista con la gráfica NVIDIA\r\nPower4Gear Hybrid permite jerarquizar el rendimiento de la CPU para disfrutar de tus juegos sin sobresaltos\r\nAudio 3D con EAX Advanced HD 4.0 para una experiencia sonora más realista\r\nTeclado tipo chicle con retroiluminación dinámica para situación de iluminación limitada', 'ProcesadorIntel Core i7 820QM/720QM ProcesadorSistema OperativoWindows 7 Ultimate Windows 7 Home Premium Esta versión contiene todas las actualizaciones del producto (SP1)ChipsetIntel PM55 Express ChipsetMemoriaDDR3 1066 MHz SDRAM, 2 x SO-DIMM socket para una expansión hasta 4 GB SDRAMPantalla15.6" 16:9 Full HD (1920x1080) LED RetroiluminadoGráficosNVIDIA GeForce GTX 260M con 1GB DDR3 VRAMAlmacenamiento2.5" SATA500GB 5400/7200 320GB 5400/7200 250GB 5400 Soporte para Dual HDDUnidad OpticaBlu-Ray DVD Combo Super-Multi DVDLector de tarjetas8 -en-1 Lector de tarjetas ( SDXC/ MS/ MS Pro/ MS Duo/ MMC)CámaraCámara web con 2.0 de Mega PixelRedesIntegrado 802.11 b/g/nBluetooth™ V2.1+EDR Integrado (Opcional)10/100/1000 Base TInterfaz1 x Entrada para micrófono2 x Salida para auriculares(1 x SPDIF)4 x Puerto(s) USB 2.0 1 x IEEE 1394 port1 x Puerto LAN RJ451 x HDMI 1 x Puerto E-SATA (USB2.0 Combo)AudioEAX Advanced HD 4.0 Parlantes Altec LansingCreative Audigy HDTV-TunerAnálogoBatería6 Células 4800 mAh9 Células 7200 mAhAdaptador de CorrienteSalida :19 V DC, 4.74 A, 120 WEntrada :100 -240 V AC, 50/60 Hz universalDimensiones37.5 x 26.5 x 3.43 ~4.06 cm (WxDxH)Peso3.30 kg (con 6 celdas de batería)SeguridadCertificadosGarantía1 año de garantía limitada en hardware.*diferente según el país.Resolución de problemas On-line a través de la interfaz web (Actualización BIOS, Drivers)OS (Windows 7 ) Consulta de instalación/desinstalaciónSoftware integrado Consulta de instalación/desinstalaciónSoftware de soporte ASUSNotaOnly for SearchThinnes - Laptop', '', 1700000),
('ASUSG55VW', 'ASUS G55VW-RS71 ', 'Windows 8 Pro u otras ediciones disponibles\r\n3ª gen de procesadores Intel® Core™ i7 y las nuevas gráficas NVIDIA®\r\nRefrigeración inteligente con dos salidas para el aire caliente\r\nErgonomía superior\r\nDisfruta del 3D más realista con las gafas activas\r\nMejoras de audio SonicMaster Lite con subwoofer integrado', 'Procesador\r\nIntel® Core™ i7 3630QM Procesador\r\nIntel® Core™ i7 3610QM Procesador\r\nIntel® Core™ i5 3230M /3210M Procesador\r\nSistema Operativo\r\nWindows 8 Pro\r\nWindows 8\r\nWindows 7 Ultimate \r\nWindows 7 Professional \r\nWindows 7 Home Premium \r\nWindows 7 Home Basic\r\nChipset\r\nIntel® HM77 Chipset\r\nMemoria\r\nDDR3 1600 MHz SDRAM, 4 x SO-DIMM socket para una expansión hasta 16 GB SDRAM *1\r\nPantalla\r\n15.6" 4:3 HD (1366x768)/HD 3D (1366x768 120Hz)/Full HD (1920x1080)/Amplio ángulo de visión LED Retroiluminado Non-Glare LCD Panel\r\nGráficos\r\nNVIDIA® GeForce® GTX 660M con 2GB GDDR5 VRAM\r\nAlmacenamiento\r\n1TB 5400 \r\n750GB 5400/7200 \r\n500GB 5400/7200 \r\n128GB SSD \r\n750GB 7200 SSH\r\nUnidad Optica\r\nBlu-Ray DVD Combo \r\nSuper-Multi DVD \r\nLectora Blue-ray\r\nLector de tarjetas\r\n3 -en-1 Lector de tarjetas ( SD/ MS/ MMC)\r\nCámara\r\nCámara web HD\r\nRedes\r\nIntegrado 802.11 b/g/n\r\nBluetooth™ V4.0 integrado (Opcional)\r\n10/100/1000 Base T\r\nInterfaz\r\n1 x Entrada para micrófono\r\n0 x Salida para auriculares\r\n1 x Puerto VGA /Mini D-sub 15-pin para monitor externo\r\n4 x puerto(s) USB 3.0 \r\n1 x Puerto LAN RJ45\r\n1 x HDMI \r\n1 x SPIDIF Salida para parlantes\r\n1 x mini puerto Display Port\r\nAudio\r\nParlantes y Micrófono Integrado\r\nSubwoofer Integrado\r\nBatería\r\n8 Células 5200 mAh 74 Whrs\r\nAdaptador de Corriente\r\nSalida :\r\n19 V DC, A, W\r\nEntrada :\r\n100 -240 V AC, 50/60 Hz universal\r\nDimensiones\r\n384 x 299 x 20 -51 mm (WxDxH)\r\nPeso\r\n3.8 kg (con 8 celdas de batería)\r\nSeguridad\r\nKensington lock\r\nGarantía\r\n1 año de garantía limitada en hardware.*diferente según el país.\r\nResolución de problemas On-line a través de la interfaz web (Actualización BIOS, Drivers)\r\nOS (Windows 7 ) Consulta de instalación/desinstalación\r\nSoftware integrado Consulta de instalación/desinstalación\r\nSoftware de soporte ASUS', '', 3400000),
('ASUSG75', 'ASUS ROG G75VW-AH71 ', 'Windows 7 Ultimate u otras ediciones disponibles3ª gen de procesadores Intel Core i7 y las nuevas gráficas NVIDIARefrigeración inteligente con dos salidas para el aire caliente y filtros desmontablesErgonomía superiorDisfruta del 3D más realista con la tecnología NVIDIA 3D LightBoostMejoras de audio SonicMaster Lite con subwoofer integrado', 'Procesador\r\nIntel® Core™ i7 3720QM Procesador\r\nIntel® Core™ i7 3610QM Procesador\r\nSistema Operativo\r\nWindows 7 Ultimate \r\nWindows 7 Professional \r\nWindows 7 Home Premium \r\nWindows 7 Home Basic\r\nChipset\r\nIntel® HM77 Chipset\r\nMemoria\r\nDDR3 1600 MHz SDRAM, 4 x SO-DIMM socket para una expansión hasta 16 GB SDRAM\r\nPantalla\r\n17.3" 4:3 HD con EWV (1366 x 768) / FHD 3D LED Retroiluminado\r\nGráficos\r\nNVIDIA® GeForce® GTX 660M/670M con 2GB/3GB GDDR5 VRAM\r\nAlmacenamiento\r\n2.5" SATA Dual HDD\r\n1TB 5400 \r\n750GB 5400/7200 \r\n500GB 5400/7200 \r\n750GB 7200 SSH\r\n256GB SSD \r\nRAID0/1 Support\r\nUnidad Optica\r\nBlu-Ray DVD Combo \r\nSuper-Multi DVD \r\nLectora Blue-ray\r\nLector de tarjetas\r\n3 -en-1 Lector de tarjetas ( SD/ MS/ MMC)\r\nCámara\r\nCámara web HD\r\nRedes\r\nIntegrado 802.11 b/g/n\r\nBluetooth™ V4.0 integrado (Opcional)\r\n10/100/1000 Base T\r\nInterfaz\r\n1 x Entrada para micrófono\r\n0 x Salida para auriculares\r\n1 x Puerto VGA /Mini D-sub 15-pin para monitor externo\r\n4 x puerto(s) USB 3.0 \r\n1 x Puerto LAN RJ45\r\n1 x HDMI \r\n1 x SPIDIF Salida para parlantes\r\n1 x mini puerto Display Port\r\nAudio\r\nParlantes y Micrófono Integrado\r\nSubwoofer Integrado\r\nBatería\r\n8 Células 5200 mAh 74 Whrs\r\nAdaptador de Corriente\r\nSalida :\r\n19 V DC, A, 180 W\r\nEntrada :\r\n100 -240 V AC, 50/60 Hz universal\r\nDimensiones\r\n415 x 320 x 17 -52 mm (WxDxH)\r\nPeso\r\n4.5 kg (con 8 celdas de batería)\r\nSeguridad\r\nKensington lock\r\nGarantía\r\n1 año de garantía limitada en hardware.*diferente según el país.\r\nResolución de problemas On-line a través de la interfaz web (Actualización BIOS, Drivers)\r\nOS (Windows 7 ) Consulta de instalación/desinstalación\r\nSoftware integrado Consulta de instalación/desinstalación\r\nSoftware de soporte ASUS', '', 2500000),
('ASUSG750JM', 'ASUS ROG G750JM-DS71', 'Windows 8 Pro u otras ediciones disponibles4 generación de procesadores Intel Core i7 y las gráficas NVIDIA® más avanzadasDos ventiladores con salidas independientes para alejar el ruido y la temperaturaMejoras de audio SonicMaster y una salida para auriculares mejoradaTeclado retroiluminado con una gran capacidad de respuesta y rendimiento', 'ProcesadorIntel Core i7 4700HQ ProcesadorSistema OperativoWindows 8 ProWindows 8ChipsetIntel HM87 Express ChipsetMemoriaDDR3L 1800 MHz SDRAM, up to 32 GPantalla17.3" 16:9 FHD EWV LED Retroiluminado/Full HD 3D(1920x1080 120Hz) Non-Glare LCD Panel (Opcional)GráficosNVIDIA GeForce® GTX 770M 3GB GDDR5 VRAMAlmacenamiento2.5" 9.5mm SATA1TB 5400 RPM With 256 GB SSD 750GB 5400/7200 RPM With 256 GB SSD 500GB 7200 RPM 500GB 5400 RPM With 8 G SSD SSHSoporte para Dual HDD RAID0 SupportUnidad OpticaBlu-Ray DVD Combo Super-Multi DVD Grabadora Blue-rayLector de tarjetas2 -en-1 Lector de tarjetas ( SD/ MMC)CámaraCámara web HDRedesIntegrado 802.11 b/g/n or 802.11ac 10/100/1000 Base TSoporte BT 4.0 (en WLAN+ BT 4.0 tarjeta combo)Interfaz1 x Entrada para micrófono0 x Salida para auriculares(SPDIF)1 x Puerto VGA /Mini D-sub 15-pin para monitor externo4 x puerto(s) USB 3.0 1 x Puerto LAN RJ451 x HDMI 1 x mini puerto Display Port1 x Thunderbolt port (Opcional)1X AC adapter plugAudioBuilt-in 2 Speakers And Micrófono IntegradoSonicMasterSubwoofer IntegradoSoporte MaxxAudioBatería8 Células 5900 mAh 89 WhrsAdaptador de CorrienteSalida :19.5 V DC, 9.23 A, 180 WEntrada :100 -240 V AC, 50/60 Hz universal3/ 2 pin compact power supply systemDimensiones410 x 318 x 17 -50 mm (WxDxH) (w/ 8cell battery)Peso4.8 kg (con 8 celdas de batería)SeguridadKensington lockLoJackIntel Anti-theftGarantía1 año de garantía limitada en hardware.*diferente según el país.', '', 2400000),
('LENOVA Y410p', 'Lenovo Y410p - Dusk ', 'Duración de la batería\r\nHasta 5 horas con batería estándar de 6 celdas (la verdadera duración de la batería depende del uso)\r\nPeso\r\nA partir de 2,5 kg\r\nParlantes\r\nParlantes estéreo JBL® con Dolby® Home Theater® v4\r\nMicrófonos\r\nIntegrado\r\nPuertos\r\n2 x USB 2.0, USB 3.0, lector de tarjetas 6-en-1, Combo Jack (audífonos / micrófono), HDMI', 'Procesador\r\nCuarta generación del procesador Intel® Core™ i7-4700MQ (6M Cache, 2.4 GHz)\r\nSistema Operativo\r\nWindows 8.1\r\nPantalla\r\n14" HD LED GLARE\r\nPlaca de Video\r\nNVIDIA GeForce GT650M GDDR5 2GB\r\nMemoria\r\n6GB PC3-12800 DDR3L SDRAM 1600 MHz\r\nDisco Rígido\r\n1TB 5400 RPM\r\nUnidad Óptica\r\nDVD Recordable (Dual Layer)\r\nConectividad\r\n802.11bgn\r\nBluetooth\r\nBluetooth® 4.0\r\nGarantía\r\n1 Año de garantía carry in (en centro de servicio)\r\nDispositivo de Puntero\r\nIndustry Standard Multi-touch 2 button touchpad\r\nBatería\r\n6 Celdas Lithium-Ion', '', 1995000),
('LENOVAE431', 'lENOVA ThinkPad Edge', 'Duración de la batería\r\nHasta 6 horas con batería estándar de 6 celdas (la verdadera duración de la batería depende del uso)\r\nPeso\r\nA partir de 2,13 kg\r\nParlantes\r\nParlantes estéreo con Dolby® Advanced Audio™ v2\r\nMicrófono\r\nMicrófono dual con optimización para VOIP\r\nPuertos\r\n2 x USB 3.0, USB 2.0 (siempre encendido) VGA, HDMI, Ethernet RJ-45, lector de tarjetas 4-en-1, Combo Jack (audífono / micrófono), tecnología Lenovo OneLink', 'Procesador\r\nTercera generación del procesador Intel® Core™ i3-3120M (3M Cache, 2.5 GHz)\r\nSistema Operativo\r\nWindows 8 64\r\nPantalla\r\n14" Antirreflejos HD 1366x768\r\nPlaca de Video\r\nIntel Integrated HD Graphics 4000\r\nMemoria\r\n4.0GB PC3-12800 DDR3L SDRAM 1600 MHz\r\nDisco Rígido\r\n500GB 5400 rpm\r\nUnidad Óptica\r\nGrabadora Multi Recorder\r\nConectividad\r\nThinkPad 11b/g/n Wi-Fi wireless\r\nBluetooth\r\nBluetooth versión 4.0\r\nGarantía\r\nMano de obra y piezas: un año (batería del sistema: un año)\r\nBatería\r\nIon Litio, 6 celdas\r\nDiseño\r\nNotebook\r\n', '', 1299000),
('Lenovo2-14-R', 'Lenovo Flex 2-14 - R', 'Duración de la batería\r\nHasta 6 hs de duración con batería estándar\r\nPeso\r\nA partir de 1,9 kg\r\nPuertos\r\n1 USB 3.0, 2 USB 2.0, salida para HDMI, puerto LAN, lector de tarjetas 2-en-1 (SD/MMC), combo de conectores\r\nMicrófono\r\nMicrófono dual digital integrado\r\nParlantes\r\nParlantes estéreo con Dolby® Advanced Audio™', 'Procesador\r\nCuarta generación del procesador Intel® Core™ i3-4010U (3M Cache, 1.7 GHz)\r\nSistema Operativo\r\nWindows 8.1\r\nPantalla\r\n14" HD LED (1366x768) Multi-Touch 10 dedos (SLIM)\r\nPlaca de Video\r\nIntel® HD Graphics 4400\r\nMemoria\r\n4GB PC3-12800 DDR3L SDRAM 1600 MHz\r\nDisco Rígido\r\n500GB 5400rpm\r\nConectividad\r\nLenovo BGN Wireless + 100/1000M Ethernet\r\nBluetooth\r\nBluetooth® 4.0\r\nGarantía\r\n1 Año de garantía carry in (en centro de servicio)\r\nBatería\r\n4 Céldas Li-Cilindrica', '', 1176000),
('LENOVO40-30', 'Lenovo G40-30 ', 'Duración de la batería\r\nHasta 4 horas con batería estándar de 4 celdas\r\nPeso\r\nA partir de 2,1 kg\r\nPuertos\r\n1 USB 3.0, USB 2.0, salida HDMI, lector de tarjetas 2 en 1 (SD/MMC), combo de auriculares y micrófono y VGA.\r\nMicrófono\r\nAnalógico\r\nParlantes\r\nParlantes estéreo con Dolby® Advanced Audio™', 'Procesador\r\nIntel® Celeron® N2830 (1M Cache, 2.16 GHz)\r\nSistema Operativo\r\nWindows 8.1 64\r\nPantalla\r\n14,0" HD Wide LED\r\nPlaca de Video\r\nGráficos Intel de alta definición\r\nMemoria\r\n2.0GB PC3-10600 DDR3L SDRAM 1333 MHz\r\nDisco Rígido\r\n500GB 5400 rpm\r\nUnidad Óptica\r\nDVD Grabable\r\nConectividad\r\nLenovo BGN Wireless\r\nBluetooth\r\nBluetooth versión 4.0\r\nGarantía\r\nUn año\r\nDispositivo de Puntero\r\nClickPAd\r\nBatería\r\nCilíndrica de Litio, 4 celdas', '', 629000),
('LENOVOT440s', 'LENOVOThinkPadT440s ', 'Ethernet\r\nIntel® 10/1000 Gigabyte Ethernet\r\nGráficos\r\nIntel® HD 4400\r\nWebcam\r\nTecnología de seguimiento facial 720p HD, alta sensibilidad con poca luz\r\nDuración de la batería\r\nHasta 10 horas con batería estándar de 3+3 celdas (la verdadera duración de la batería depende del uso)\r\nPeso\r\nA partir de 1,65 kg\r\nPuertos\r\nMini Display Port con audio, VGA, 3 x USB 3.0 (1 siempre encendido), lector de tarjeta 4-en-1, Combo Jack (micrófono / audífono)\r\nMicrófono\r\nMicrófonos duales HD con cancelación de ruido\r\nParlantes\r\nParlantes estéreo con Dolby® Home Theater® v4', 'Procesador\r\nIntel Core i5-4300U Procesador( 1,90GHz 3MB)\r\nSistema Operativo\r\nWindows 7 Professional 64\r\nPantalla\r\n14,0" FHD IPS AntiGlare LED Backlight 1920x1080\r\nPlaca de Video\r\nIntel HD 4400\r\nMemoria\r\n4.0GB PC3-12800 DDR3L SDRAM 1600 MHz\r\nDisco Rígido\r\n500GB 7200 rpm\r\nConectividad\r\nIntel Dual Band Wireless-AC 7260\r\nBluetooth\r\nBluetooth versión 4.0\r\nGarantía\r\nTres años\r\nBatería\r\nPolímero de Litio, 3 celdas\r\nOtros\r\nLector de huellas digitales', '', 2856000),
('MSI60', 'GP60 2PE LEOPARD', 'Windows 8.1\r\nProcesador 4ta generación Intel® Core™ i7/i5\r\nTarjeta gráfica NVIDIA GeForce 840M 2GB VRAM DDR3\r\nPantalla LCD de 15.6" HD (1366x768) /FHD(1920x1080) Antirreflejo\r\nUnidad Híbrida de Estado Sólido (SSD+HDD)\r\nTecnología exclusiva Cooler Boost\r\nMatrix Display expande la visión para una experiencia de juego extrema\r\nTeclado hecho para gamers por SteelSeries\r\nDiseño exclusivo Audio boost para una fidelidad de audio clara como el cristal\r\nAudio de primera calidad con Sound Blaster Cinema\r\nKiller™ E2200 Game Networking para una red más inteligente y rápida para el entretenimiento en línea\r\nExclusiva función MSI Super-Charger', 'Sistema Operativo Windows 8.1\r\nCPU Nuevo procesador 4ta generación Intel® Core™ i7/i5\r\nChipset Intel HM86\r\nMemoria 2 x DDR3L-1600 MHz,max 16GB\r\nPantalla LCD 15.6" HD (1366x768) /FHD(1920x1080) Antirreflejo\r\nGráficos GeForce 840M\r\nMemoria gráfica VRAM DDR3 2GB\r\nDisco rígido (GB) Hasta 128GB SSD+1TB SATA 7200 RPM\r\nUnidad óptica BD Combo / DVD Super Multi\r\nAudio Estéreo\r\nWebcam HD (30cps@720p)\r\nLector de Tarjeta SD\r\nLAN Killer Gb LAN\r\nLAN inalámbrica 802.11 ac\r\nBluetooth Bluetooth v4.0\r\nD-Sub (VGA) 1\r\nHDMI 1\r\nPuertos USB 2.0 2\r\nPuertos USB 3.0 2\r\nEntrada Mic/Salida audífonos 1/1\r\nTeclado Keyboard by SteelSeries\r\nAdaptador AC 120W\r\nBatería 6 Celdas Li-Ion(4400mAH)\r\nDimensiones 383X249.5X32.3~37.6mm\r\nPeso (KG) 2.4Kg(c/batería)', '', 1500000),
('MSI60E', 'GE60 2OE', 'Windows 8.1 El nuevo procesador de 4ta generacion Intel Core i7• Pantalla LCD de 15.6" Full HD (1920x1080) antirreflejo con retroiluminación LED• La tarjeta grafica diferenciada NVIDIA GeForce GTX 765M (con memoria VRAM GDDR5 de 2GB) ofrece excelente calidad de imagenes• La tecnologia exclusiva Cooler Boost 2 mejora la refrigeracion y la acústica• La disposicion de pantalla en matriz expande la vision para un juego extremo• Killer E2200 Game Networking para un networking mejor y mas rapido para el entretenimiento en linea• Teclado hecho para gamers por SteelSeries• Exclusivo diseno Audio boost para un sonido claro con alta fidelidad', 'Sistema Operativo Windows 8.1CPU Intel® Core i7-4700MQ (6M Cache, hasta 3.20 GHz)Chipset Intel HM87Memoria DDR3L,hasta 1600 MHz, 2 ranuras, Max. 16GBPantalla LCD 15.6" Full HD (1920x1080), AntirreflejoGraficos Nvidia GeForce GTX 765MMemoria grafica VRAM 2GB GDDR5Disco rigido (GB) Super RAID hasta 256GB + 750GB HDD 7200rpmUnidad optica BD Combo / DVD Super MultiAudio Audio Boost, 4 parlantes 2W HDWebcam HD (30cps@720p)Lector de Tarjeta SD(XC/HC)LAN Killer Gaming LANLAN inalambrica 802.11 b/g/nBluetooth v4.0D-Sub (VGA) 1HDMI 1(v1.4)Puertos USB 2.0 2Puertos USB 3.0 2Entrada Mic/Salida audífonos 1 /1Teclado Teclado por SteelSeries 103 teclasAdaptador AC 120WBatería 6 CeldasDimensiones 383 x 249.5 x 37.6~32.3mmPeso (KG) 2.4Kg (c/ batería)', '', 1900000),
('MSI60PE', 'GE60 2PE APACHE PRO', 'Windows 8.1Procesador 4ta generacion Intel Core i7Pantalla LCD de 15.6" Full HD (1920x1080) antirreflejo con retroiluminacion LEDTarjeta grafica diferenciada NVIDIA GeForce GTX 860M que ofrece una calidad de imagen muy detalladaSteelSeries Engine personaliza cada tecla y dispositivo para lograr un estilo de juego personalXSplit Gamecaster para grabar facilmente los momentos de juego, transmitirlos y compartir las sesiones de juego en YouTube, Twitch, UStream y masAngulo de vision amplioSuper RAID con 2 SSD RAID0 ofrece mas de 900MB/s de velocidad de lecturaExclusiva tecnologia Cooler Boost permite reducir un 5%~10% la temperatura del sistemaKiller E2200 Game Networking para una red más inteligente y rápida para el entretenimiento en líneaTeclado hecho para gamers por SteelSeriesMatrix Display expande la vision para una experiencia de juego extremaExclusivo diseno Audio boost para una fidelidad de audio clara como el cristal', 'Sistema Operativo Windows 8.1CPU Procesador de 4ta generacion Intel Core i7 ProcessorChipset Intel HM86Memoria Hasta 16GB x 2 DIMMsPantalla LCD 15.6" Full HD (1920x1080), AntirreflejoGraficos GeForce GTX 860MMemoria grafica VRAM GDDR5 2GBDisco rigido (GB) Hasta 256GB Super RAID* + 750GB HDD 7200rpmUnidad optica BD Combo / DVD Super MultiAudio Sonido por Dynaudio, 2 parlantes de 2.1 canales + subwooferWebcam HD (30cps@720p)Lector de Tarjeta SD (XC/HC)LAN Killer™ E2200 Game Networking LANLAN inalambrica 802.11 b/g/ nBluetooth Bluetooth v4.0D-Sub (VGA) 1HDMI 1Puertos USB 2.0 2Puertos USB 3.0 2Entrada Mic/Salida audifonos 1/1Teclado Teclado por SteelSeries 103 teclasAdaptador AC 120WBateria 6 Celdas Li-Ion (4400mAh 49Wh)Dimensiones 383 x 249.5 x 37.6~32.3mmPeso (KG) 2.6Kg (c/ bateria)', '', 2450000),
('MSI61C', 'CX61 2OC', ' Windows 8.1• El nuevo procesador de 4ta. Generacion Intel Core i• NVIDIA GeForce GT720M 2G VRAM DDR3• La tecnologia GPU Boost ofrece un mejor equilibrio entre duracion de bateria y desempeno• Soporta HDMI 1.4 para imagenes HD• La ultima tecnologia Bluetooth 4.0• Pantalla 15.6" LED antirreflejo• Webcam integrada de 720P HD que ofrece la mejor experiencia en llamadas de video• La ultima y mas veloz tecnologia de transferencia de datos USB 3.0', 'Sistema Operativo Windows 8.1CPU El nuevo procesador de 4ta. Generacion Intel Core Chipset Intel HM86Memoria DDR3, hasta 1600MHzPantalla LCD 15.6" HD (1366x768) con retroiluminación LEDGraficos NVIDIA GeForce GT720MMemoria grafica VRAM DDR3 2GBDisco rigido (GB) 750GB/640/500GB SATA 5400rpmUnidad optica BD Combo / DVD Super MultiAudio 2Webcam HD (30cps@720p)Lector de Tarjeta SD(HC/XC)/MMC/MSLAN Gigabit LANLAN inalambrica 802.11 b/g/nBluetooth Bluetooth v4.0D-Sub (VGA) 1HDMI 1Puertos USB 2.0 1Puertos USB 3.0 2Entrada Mic/Salida audifonos 1 / 1Teclado 102 teclasAdaptador AC 95WBatería 6-CeldasAdministración de Energía Turbo Battery+Dimensiones 383(W)x249.5(D)x32.3~37.6(H)mmPeso (KG) 2.4Kg (c/ batería)', '', 1500000),
('MSI61PC', 'CX61 2PC', 'Windows 8.1Procesador 4ta generacion Intel Core i7Pantalla LCD de 15.6" Full HD (1920x1080) antirreflejo con retroiluminacion LEDTarjeta grafica diferenciada NVIDIA GeForce GTX 860M que ofrece una calidad de imagen muy detalladaSteelSeries Engine personaliza cada tecla y dispositivo para lograr un estilo de juego personalXSplit Gamecaster para grabar facilmente los momentos de juego, transmitirlos y compartir las sesiones de juego en YouTube, Twitch, UStream y mas Angulo de vision amplioSuper RAID con 2 SSD RAID0 ofrece mas de 900MB/s de velocidad de lecturaExclusiva tecnologia Cooler Boost permite reducir un 5%~10% la temperatura del sistemaKiller E2200 Game Networking para una red mas inteligente y rapida para el entretenimiento en lineaTeclado hecho para gamers por SteelSeriesMatrix Display expande la vision para una experiencia de juego extremaExclusivo diseno Audio boost para una fidelidad de audio clara como el cristal', 'Sistema Operativo Windows 8.1CPU Procesador de 4ta generacion Intel Core i7 ProcessorChipset Intel HM86Memoria Hasta 16GB x 2 DIMMsPantalla LCD 15.6" Full HD (1920x1080), AntirreflejoGraficos GeForce GTX 860M Memoria grafica VRAM GDDR5 2GBDisco rigido (GB) Hasta 256GB Super RAID + 750GB HDD 7200rpm Unidad optica BD Combo / DVD Super MultiAudio Sonido por Dynaudio, 2 parlantes de 2.1 canales + subwooferWebcam HD (30cps@720p)Lector de Tarjeta SD (XC/HC)LAN Killer E2200 Game Networking LANLAN inalambrica 802.11 b/g/ nBluetooth Bluetooth v4.0D-Sub (VGA) 1HDMI 1Puertos USB 2.0 2Puertos USB 3.0 2Entrada Mic/Salida audifonos 1/1Teclado Teclado por SteelSeries 103 teclasAdaptador AC 120WBatería 6 Celdas Li-Ion (4400mAh 49Wh)Dimensiones 383 x 249.5 x 37.6~32.3mmPeso (KG) 2.6Kg (c/ batería)', '', 1400000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_proveedor`
--

CREATE TABLE IF NOT EXISTS `producto_proveedor` (
  `cod_proveedor` int(11) NOT NULL,
  `cod_poducto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `vlr_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto_proveedor`
--

INSERT INTO `producto_proveedor` (`cod_proveedor`, `cod_poducto`, `vlr_compra`) VALUES
(12, '1', 1000),
(8967573, 'Acer AOD2', 0),
(8967573, 'Acer E15', 0),
(8967573, 'AcerAspire ES1-511', 0),
(8967573, 'AcerC720', 0),
(8967573, 'AcerS3-391-6046', 0),
(8967573, 'ASUS750JZ', 0),
(8967573, 'ASUSG51J', 0),
(8967573, 'ASUSG55VW', 0),
(8967573, 'ASUSG75', 0),
(8967573, 'ASUSG750JM', 0),
(89737484, 'LENOVA Y410p', 0),
(89737484, 'LENOVAE431', 0),
(89737484, 'Lenovo2-14-R', 0),
(89737484, 'LENOVO40-30', 0),
(89737484, 'LENOVOT440s', 0),
(89737484, 'MSI60', 0),
(89737484, 'MSI60E', 0),
(89737484, 'MSI60PE', 0),
(89737484, 'MSI61C', 0),
(89737484, 'MSI61PC', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedo`
--

CREATE TABLE IF NOT EXISTS `proveedo` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedo`
--

INSERT INTO `proveedo` (`codigo`, `nombre`, `telefono`, `direccion`) VALUES
(12, 'klkl', 'lkl', 'lkl'),
(67, 'SAnberto', '123121', 'csdslf'),
(8967573, 'AsusColombia', '3145678976', 'calle 23-45'),
(89737484, 'lenovoColombia', '3134564454', 'calle 45-67');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `salario_basico` int(11) NOT NULL,
  `pension` int(11) NOT NULL,
  `eps` int(11) NOT NULL,
  `fondo_emple` int(11) NOT NULL,
  `Rol` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cedula`, `Nombre`, `Apellido`, `Telefono`, `salario_basico`, `pension`, `eps`, `fondo_emple`, `Rol`, `Contrasena`, `salt`) VALUES
('1', 'Edixon', 'Hernandez', '123', 7300000, 1, 1, 0, 'admin', 'shSVw/ZRPc3ec7395aa2974951419272b48709ae88281', '7395aa2974951419272b48709ae88281'),
('2', 'Javier', 'Valencia', '321', 2500000, 1, 1, 0, 'contador', 'shy8LQEfxqkewa18effe44e536f3b23160dc5f3ea8b5f', 'a18effe44e536f3b23160dc5f3ea8b5f'),
('3', 'Fernando', 'Ricaurte', '123', 615000, 1, 1, 0, 'cajero', 'sh4SKBxY2.SO.38105425b3ec299e9c9320b78b748f26', '38105425b3ec299e9c9320b78b748f26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uvt`
--

CREATE TABLE IF NOT EXISTS `uvt` (
  `id` int(11) NOT NULL,
  `tarifa` int(11) NOT NULL,
  `desde` int(11) NOT NULL,
  `hasta` int(11) NOT NULL,
  `menos` int(11) NOT NULL,
  `mas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `uvt`
--

INSERT INTO `uvt` (`id`, `tarifa`, `desde`, `hasta`, `menos`, `mas`) VALUES
(1, 0, 0, 95, 0, 0),
(2, 19, 95, 150, 95, 0),
(3, 28, 150, 360, 150, 10),
(4, 33, 360, 2147483647, 360, 69);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activo1`
--
ALTER TABLE `activo1`
 ADD PRIMARY KEY (`Documento`,`Cedula`,`Codigo`), ADD KEY `Cedula` (`Cedula`);

--
-- Indices de la tabla `apropiaciones`
--
ALTER TABLE `apropiaciones`
 ADD PRIMARY KEY (`nomina`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `codigotransacion`
--
ALTER TABLE `codigotransacion`
 ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `costos`
--
ALTER TABLE `costos`
 ADD PRIMARY KEY (`Documento`,`Codigo`,`Cedula`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
 ADD PRIMARY KEY (`num_factura`,`codigo`), ADD KEY `num_factura` (`num_factura`), ADD KEY `codigo` (`codigo`), ADD KEY `num_factura_2` (`num_factura`);

--
-- Indices de la tabla `documentado`
--
ALTER TABLE `documentado`
 ADD PRIMARY KEY (`cod_documento`), ADD KEY `cod_documento` (`cod_documento`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
 ADD PRIMARY KEY (`id`), ADD KEY `representante` (`representante`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
 ADD PRIMARY KEY (`num_factura`,`cliente`), ADD KEY `cliente` (`cliente`);

--
-- Indices de la tabla `gasto`
--
ALTER TABLE `gasto`
 ADD KEY `Cedula` (`Cedula`), ADD KEY `Documentado` (`Documento`,`Cedula`,`Codigo`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
 ADD PRIMARY KEY (`Documento`,`Cedula`,`Codigo`), ADD KEY `Cedula` (`Cedula`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
 ADD PRIMARY KEY (`id`), ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `Nomina`
--
ALTER TABLE `Nomina`
 ADD PRIMARY KEY (`id`,`fecha`);

--
-- Indices de la tabla `pasivo`
--
ALTER TABLE `pasivo`
 ADD KEY `Cedula` (`Cedula`);

--
-- Indices de la tabla `pension`
--
ALTER TABLE `pension`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
 ADD PRIMARY KEY (`cod_poducto`), ADD KEY `codgio_proveedor` (`cod_proveedor`,`cod_poducto`), ADD KEY `cod_poducto` (`cod_poducto`);

--
-- Indices de la tabla `proveedo`
--
ALTER TABLE `proveedo`
 ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`Cedula`), ADD KEY `pension` (`pension`,`eps`), ADD KEY `eps` (`eps`);

--
-- Indices de la tabla `uvt`
--
ALTER TABLE `uvt`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentado`
--
ALTER TABLE `documentado`
MODIFY `cod_documento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `eps`
--
ALTER TABLE `eps`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
MODIFY `num_factura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `Nomina`
--
ALTER TABLE `Nomina`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pension`
--
ALTER TABLE `pension`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
ADD CONSTRAINT `detallefactura_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `productos` (`Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`Cedula`);

--
-- Filtros para la tabla `gasto`
--
ALTER TABLE `gasto`
ADD CONSTRAINT `gasto_ibfk_1` FOREIGN KEY (`Cedula`) REFERENCES `usuarios` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`Cedula`) REFERENCES `usuarios` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pasivo`
--
ALTER TABLE `pasivo`
ADD CONSTRAINT `pasivo_ibfk_1` FOREIGN KEY (`Cedula`) REFERENCES `usuarios` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
ADD CONSTRAINT `producto_proveedor_ibfk_1` FOREIGN KEY (`cod_proveedor`) REFERENCES `proveedo` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `producto_proveedor_ibfk_2` FOREIGN KEY (`cod_poducto`) REFERENCES `productos` (`Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`pension`) REFERENCES `pension` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`eps`) REFERENCES `eps` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
