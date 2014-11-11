-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2014 a las 19:16:44
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
(1, 630195, 926757, 74140, 308425, 617591, 617591, 6175, 222421, 0, 148281),
(2, 212500, 312500, 25000, 104000, 208250, 208250, 2082, 75000, 0, 50000),
(3, 620500, 912500, 73000, 303680, 608090, 608090, 6080, 219000, 0, 146000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cierre`
--

CREATE TABLE IF NOT EXISTS `cierre` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `debito` int(11) NOT NULL,
  `credito` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cierre`
--

INSERT INTO `cierre` (`id`, `fecha`, `debito`, `credito`, `estado`) VALUES
(1, '2014-11-11', 136261143, 126008523, 10252620);

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
('1069740361', 'Pepito', 'Perez', '123456');

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
('1295', 'Otras Inversiones', 'activo'),
('1305', 'Clientes', 'activo'),
('131505', 'Ventas', 'activo'),
('131520', 'Presatomos', 'activo'),
('134010', 'Maquinaria y equipo', 'activo'),
('134515', 'Comiciones', 'activo'),
('1365', 'Cuentas por cobrar a trabajadores', 'activo'),
('1399', 'Proviciones', 'pasivo'),
('14', 'Inventario', 'activo'),
('1592', 'Depreciación Acumulada', 'activo'),
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
('28', 'Saldos a facor', 'pasivo'),
('2804', 'IVA', 'pasivo'),
('31', 'Capital Social', 'activo'),
('4', 'otros intresos', 'ingreso'),
('4135', 'Ventas', 'ingreso'),
('4210', 'Ingresos Financieros', 'ingreso'),
('4295', 'Otros Ingresos', 'ingreso'),
('470525', 'Activos diferido', 'activo'),
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
('5160', 'Depreciaciones', 'gasto'),
('5165', 'Amortizaciones', 'gasto'),
('530505', 'Gastos Bancarios', 'gasto'),
('5310', 'Perdida en ventaa', 'gasto'),
('613554', 'Costo de venta', 'costo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE IF NOT EXISTS `cuentas` (
`id` int(11) NOT NULL,
  `Documento` int(11) NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=68 ;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `Documento`, `Cedula`, `Codigo`, `Fecha`, `Naturaleza`, `Descripcion`, `Valor`) VALUES
(1, 1, '1', '31', '2014-11-04', 'C', 'Capital Social', 40000000),
(2, 1, '1', '1105', '2014-11-04', 'D', 'Caja', 40000000),
(3, 2, '1', '14', '2014-11-04', 'D', 'InventarioAcer AOD2', 800000),
(4, 2, '1', '1105', '2014-11-04', 'C', 'Caja PagoAcer AOD2', 800000),
(5, 3, '3', '1105', '2014-11-04', 'D', 'CAJA Acer AOD2', 300000),
(6, 3, '3', '14', '2014-11-04', 'C', 'Inventario  Acer AOD2', 200000),
(7, 4, '1', '14', '2014-11-05', 'D', 'InventarioLENOVAE431', 3000000),
(8, 4, '1', '1105', '2014-11-05', 'C', 'Caja PagoLENOVAE431', 3000000),
(9, 6, '1', '1105', '2014-11-06', 'C', 'CAJA', 7300000),
(10, 6, '1', '1105', '2014-11-06', 'C', 'CAJA', 926757),
(11, 6, '1', '1105', '2014-11-06', 'C', 'CAJA', 1223319),
(12, 6, '1', '1105', '2014-11-06', 'C', 'CAJA', 0),
(13, 6, '1', '1105', '2014-11-06', 'C', 'CAJA', 0),
(14, 6, '1', '1105', '2014-11-06', 'C', 'CAJA', 0),
(15, 6, '1', '1105', '2014-11-06', 'C', 'CAJA', 375623),
(16, 6, '1', '1105', '2014-11-06', 'C', 'CAJA', 74140),
(17, 8, '1', '1105', '2014-11-06', 'C', 'CAJA', 3897582),
(18, 9, '3', '1105', '2014-11-06', 'D', 'CAJA Acer AOD2', 300000),
(19, 9, '3', '14', '2014-11-06', 'C', 'Inventario  Acer AOD2', 200000),
(20, 11, '1', '14', '2014-11-08', 'D', 'Inventario8998', 0),
(21, 11, '1', '1105', '2014-11-08', 'C', 'Caja Pago8998', 0),
(22, 12, '1', '14', '2014-11-08', 'D', 'Inventario8998', 0),
(23, 12, '1', '1105', '2014-11-08', 'C', 'Caja Pago8998', 0),
(24, 13, '1', '14', '2014-11-08', 'D', 'Inventario8998', 0),
(25, 13, '1', '1105', '2014-11-08', 'C', 'Caja Pago8998', 0),
(26, 14, '1', '14', '2014-11-08', 'D', 'Inventario898', 0),
(27, 14, '1', '1105', '2014-11-08', 'C', 'Caja Pago898', 0),
(28, 15, '1', '14', '2014-11-08', 'D', 'Inventario0909', 0),
(29, 15, '1', '1105', '2014-11-08', 'C', 'Caja Pago0909', 0),
(30, 16, '1', '14', '2014-11-08', 'D', 'Inventario90', 1000),
(31, 16, '1', '1105', '2014-11-08', 'C', 'Caja Pago90', 1000),
(32, 17, '1', '14', '2014-11-08', 'D', 'Inventario90', 1000),
(33, 17, '1', '1105', '2014-11-08', 'C', 'Caja Pago90', 1000),
(34, 18, '1', '14', '2014-11-08', 'D', 'Inventario09000', 1000),
(35, 18, '1', '1105', '2014-11-08', 'C', 'Caja Pago09000', 1000),
(36, 20, '1', '1105', '2014-11-08', 'C', 'CAJA', 11758480),
(37, 21, '2', '1105', '2014-11-10', 'D', '', 1000),
(38, 21, '2', '1105', '2014-11-10', 'C', '', 1000),
(39, 21, '2', '1105', '2014-11-10', 'D', '', 1000),
(40, 21, '2', '1105', '2014-11-10', 'C', '', 1000),
(41, 22, '2', '1105', '2014-11-10', 'D', '', 1000),
(42, 22, '2', '112005', '2014-11-10', 'D', '', 1000),
(43, 22, '2', '1105', '2014-11-10', 'C', '', 2000),
(44, 23, '2', '1105', '2014-11-10', 'D', 'Caja', 10000),
(45, 23, '2', '1105', '2014-11-10', 'C', 'Caja', 10000),
(46, 24, '2', '1105', '2014-11-10', 'D', 'Caja', 1000),
(47, 24, '2', '1105', '2014-11-10', 'C', 'Caja', 1000),
(48, 25, '2', '1105', '2014-11-10', 'D', 'Caja', 1000),
(49, 25, '2', '1105', '2014-11-10', 'C', 'Caja', 1000),
(50, 26, '2', '2205', '2014-11-11', 'D', 'Proveedor', 1000),
(51, 26, '2', '2205', '2014-11-11', 'C', 'Proveedor', 1000),
(52, 27, '2', '1105', '2014-11-11', 'D', 'Caja', 100000),
(53, 27, '2', '1105', '2014-11-11', 'C', 'Caja', 100000),
(54, 28, '2', '112005', '2014-11-11', 'D', 'Bancos', 10000),
(55, 28, '2', '112005', '2014-11-11', 'C', 'Bancos', 10000),
(56, 29, '1', '14', '2014-11-11', 'D', 'InventarioAcer AOD2', 600000),
(57, 29, '1', '2804', '2014-11-11', 'D', 'IVAAcer AOD2', 0),
(58, 29, '1', '1105', '2014-11-11', 'C', 'Caja PagoAcer AOD2', 600000),
(59, 30, '3', '1105', '2014-11-11', 'D', 'CAJA Acer AOD2', 300000),
(60, 30, '3', '2804', '2014-11-11', 'C', 'IVA Acer AOD2', 0),
(61, 30, '3', '4135', '2014-11-11', 'C', 'VENTA Acer AOD2', 300000),
(62, 30, '3', '14', '2014-11-11', 'C', 'Inventario  Acer AOD2', 200000),
(63, 31, '3', '1105', '2014-11-11', 'D', 'CAJA Acer AOD2', 300000),
(64, 31, '3', '2804', '2014-11-11', 'C', 'IVA Acer AOD2', 0),
(65, 31, '3', '4135', '2014-11-11', 'C', 'VENTA Acer AOD2', 300000),
(66, 31, '3', '14', '2014-11-11', 'C', 'Inventario  Acer AOD2', 200000),
(67, 31, '3', '613554', '2014-11-11', 'D', 'Costo  Acer AOD2', 200000);

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
(1, 'Acer AOD2', 1, 300000, 300000),
(2, 'Acer AOD2', 1, 300000, 300000),
(3, 'Acer AOD2', 1, 300000, 300000),
(4, 'Acer AOD2', 1, 300000, 300000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cierre`
--

CREATE TABLE IF NOT EXISTS `detalle_cierre` (
  `id` int(11) NOT NULL,
  `cuenta` varchar(10) NOT NULL,
  `debito` int(11) NOT NULL,
  `credito` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='detalle_cierre';

--
-- Volcado de datos para la tabla `detalle_cierre`
--

INSERT INTO `detalle_cierre` (`id`, `cuenta`, `debito`, `credito`, `estado`) VALUES
(1, '1105', 40715000, 29474901, 100000),
(1, '1120', 0, 0, 0),
(1, '112005', 11000, 10000, 10000),
(1, '12', 0, 0, 0),
(1, '1205', 0, 0, 0),
(1, '123005', 0, 0, 0),
(1, '1295', 0, 0, 0),
(1, '1305', 0, 0, 0),
(1, '131505', 0, 0, 0),
(1, '131520', 0, 0, 0),
(1, '134010', 0, 0, 0),
(1, '134515', 0, 0, 0),
(1, '1365', 0, 0, 0),
(1, '1399', 0, 0, 0),
(1, '14', 3803000, 400000, 3403000),
(1, '1592', 0, 0, 0),
(1, '21', 0, 0, 0),
(1, '2205', 0, 0, 0),
(1, '236505', 753163, 753163, 0),
(1, '237005', 2151757, 2151757, 0),
(1, '237006', 662140, 172140, 490000),
(1, '237010', 0, 1549265, -1549265),
(1, '237025', 0, 0, 0),
(1, '237030', 0, 0, 0),
(1, '237040', 0, 0, 0),
(1, '238030', 2840319, 2840319, 0),
(1, '251023', 816340, 1433931, -617591),
(1, '251520', 8162, 14337, -6175),
(1, '252021', 0, 716105, -716105),
(1, '252522', 407680, 1433931, -1026251),
(1, '2550', 17100000, 15083773, 2016227),
(1, '28', 0, 0, 0),
(1, '2804', 0, 0, 0),
(1, '31', 0, 40000000, -40000000),
(1, '4', 0, 0, 0),
(1, '4135', 0, 600000, -600000),
(1, '4210', 0, 0, 0),
(1, '4295', 0, 0, 0),
(1, '510506', 17100000, 0, 17100000),
(1, '510515', 114062, 0, 114062),
(1, '510527', 0, 0, 0),
(1, '510530', 1433931, 0, 1433931),
(1, '510533', 14337, 0, 14337),
(1, '510536', 716105, 0, 716105),
(1, '510539', 1433931, 0, 1433931),
(1, '510545', 0, 0, 0),
(1, '510548', 0, 0, 0),
(1, '510559', 2151757, 0, 2151757),
(1, '510568', 0, 0, 0),
(1, '510569', 1463195, 0, 1463195),
(1, '510572', 344281, 0, 344281),
(1, '510575', 688562, 0, 688562),
(1, '510578', 516421, 0, 516421),
(1, '5160', 0, 0, 0),
(1, '5165', 0, 0, 0),
(1, '530505', 0, 0, 0),
(1, '5310', 0, 0, 0),
(1, '613554', 400000, 0, 400000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentado`
--

CREATE TABLE IF NOT EXISTS `documentado` (
`cod_documento` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `documentado`
--

INSERT INTO `documentado` (`cod_documento`, `descripcion`) VALUES
(1, 'Transacion'),
(2, 'Compra'),
(3, 'Factura 0'),
(4, 'Compra'),
(5, 'Nomina 1'),
(6, 'Liquidar-nomina 1'),
(7, 'Nomina 2'),
(8, 'Liquidar-nomina 2'),
(9, 'Factura 2'),
(10, 'Factura '),
(11, 'Compra'),
(12, 'Compra'),
(13, 'Compra'),
(14, 'Compra'),
(15, 'Compra'),
(16, 'Compra'),
(17, 'Compra'),
(18, 'Compra'),
(19, 'Nomina 3'),
(20, 'Liquidar-nomina 3'),
(21, 'Transacion'),
(22, 'Transacion'),
(23, 'Transacion'),
(24, 'Transacion'),
(25, 'Transacion'),
(26, 'Transacion'),
(27, 'Transacion'),
(28, 'Transacion'),
(29, 'Compra'),
(30, 'Factura 3'),
(31, 'Factura 4');

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
-- Estructura de tabla para la tabla `estado_situacion`
--

CREATE TABLE IF NOT EXISTS `estado_situacion` (
`id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_cierre` int(11) NOT NULL,
  `activos` int(11) NOT NULL,
  `pasivos` int(11) NOT NULL,
  `patrimonio` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `estado_situacion`
--

INSERT INTO `estado_situacion` (`id`, `fecha`, `id_cierre`, `activos`, `pasivos`, `patrimonio`) VALUES
(1, '2014-11-10', 1, 1000, 1000, 0);

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
  `total` int(11) DEFAULT NULL,
  `Credito` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`num_factura`, `cliente`, `fecha`, `hora`, `vendedor`, `total`, `Credito`) VALUES
(1, '1069740361', '2014-11-04', '12:22:29', '3', 300000, 1),
(2, '1069740361', '2014-11-06', '16:06:09', '3', 300000, 0),
(3, '1069740361', '2014-11-11', '13:11:32', '3', 300000, 0),
(4, '1069740361', '2014-11-11', '13:12:56', '3', 300000, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `codigo`, `descripcion`, `fecha`, `cant_inicial`, `vlr_inicial`, `cantidad`, `vlr_unidad`, `total`, `tipo`) VALUES
(1, 'Acer AOD2', 'Compra', '2014-11-04', 4, 200000, 4, 200000, 800000, 'C'),
(2, 'Acer AOD2', 'Venta', '2014-11-04', 1, 200000, 3, 200000, 600000, 'V'),
(3, 'LENOVAE431', 'Compra', '2014-11-05', 3, 1000000, 3, 1000000, 3000000, 'C'),
(4, 'Acer AOD2', 'Venta', '2014-11-06', 1, 200000, 3, 200000, 600000, 'V'),
(5, '8998', 'Compra', '2014-11-08', 10, 0, 10, 0, 0, 'C'),
(6, '8998', 'Compra', '2014-11-08', 10, 0, 20, 0, 0, 'C'),
(7, '8998', 'Compra', '2014-11-08', 10, 0, 20, 0, 0, 'C'),
(8, '898', 'Compra', '2014-11-08', 1, 0, 1, 0, 0, 'C'),
(9, '0909', 'Compra', '2014-11-08', 0, 0, 0, 0, 0, 'C'),
(10, '90', 'Compra', '2014-11-08', 10, 100, 10, 100, 1000, 'C'),
(11, '90', 'Compra', '2014-11-08', 1, 1000, 11, 181, 2000, 'C'),
(12, '09000', 'Compra', '2014-11-08', 10, 100, 10, 100, 1000, 'C'),
(13, 'Acer AOD2', 'Compra', '2014-11-11', 3, 200000, 6, 200000, 1200000, 'C'),
(14, 'Acer AOD2', 'Venta', '2014-11-11', 1, 200000, 5, 200000, 1000000, 'V'),
(15, 'Acer AOD2', 'Venta', '2014-11-11', 1, 200000, 4, 200000, 800000, 'V');

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
  `liquidada` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Nomina`
--

INSERT INTO `Nomina` (`id`, `fecha`, `empleado`, `dias_trab`, `basico`, `horas_extra`, `comisiones`, `bonificaciones`, `auxilio_trasp`, `auxilio_alim`, `salud`, `pension`, `fondo_emple`, `libranzas`, `envargos`, `retencion`, `total`, `liquidada`) VALUES
(1, '2014-11-06', '1', 30, 7300000, 114062, 0, 0, 0, 0, 296562, 296562, 0, 0, 0, 375623, 6445313, 1),
(2, '2014-11-06', '2', 30, 2500000, 0, 0, 0, 0, 0, 100000, 100000, 0, 0, 0, 0, 2300000, 1),
(3, '2014-11-08', '1', 30, 7300000, 0, 0, 0, 0, 0, 292000, 292000, 0, 0, 0, 377540, 6338460, 1);

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
('09000', 'klk', 'lklkl ', 'llklk ', '0', 1000),
('90', 'kjjk', 'kjkj ', 'kjk ', '0', 1000),
('Acer AOD2', 'Acer Aspire One AOD2', 'Acer Aspire One AOD250-1042 10.1 inch Atom 1.6GHz/ 1GB/ 160GB/ XP Home Netbook Computer (Red) ', ' Screen Size	10.1 inches\nProcessor	1.6 GHz Intel Atom N270\nRAM	1 GB DDR2\nHard Drive	160 GB\nGraphics Coprocessor	Intel GMA 950\nAverage Battery Life (in hours)	3.15 hours\nExpand\nOther Technical Details\nBrand Name	Acer\nSeries	Aspire One\nItem model number	AOD250-1042/LU.S700B.028\nHardware Platform	PC\nOperating System	Windows XP Home Edition\nItem Weight	5 pounds\nItem Dimensions L x W x H	10.20 x 7.20 x 1 inches\nColor	Red\nProcessor Brand	Intel\nProcessor Count	1\nComputer Memory Type	SDRAM\nHard Drive Interface	ATA100', '0', 300000),
('Acer E15', 'Acer E15 15-Inch ', ' Intel N2830 dual-core processor (2.16GHz/2.41GHz w/ Intel Burst)15.6" HD widescreen CineCrystalTM LCD display (1366 x 768) - Intel HD Graphics4GB DDR3L memory (1 Memory Slots, 8GB Maximum Memory) - 500GB hard drivestereo speakers - HD audio - webcam - multi-gesture touchpad - Wireless - Bluetooth 4.0 - HDMI - USB 3.0 - card readerWindows 8.1 (64 bits), 3 cell (up to 4.5-hour) battery - 1-year limited warranty. Color: Diamond Black', ' Screen Size	15.6 inches\nMax Screen Resolution	1366 x 768\nProcessor	Intel Celeron\nRAM	SDRAM DDR3\nHard Drive	500 GB\nWireless Type	802.11bgn\nExpand\nOther Technical Details\nBrand Name	Acer\nSeries	Aspire\nItem model number	ES1-511-C0DV\nHardware Platform	PC\nOperating System	Windows 8\nItem Weight	5.3 pounds\nItem Dimensions L x W x H	15 x 1.10 x 10.20 inches\nColor	Black\nComputer Memory Type	DDR3 SDRAM', '0', 450000),
('AcerAspire ES1-511', 'Acer Aspire ES1-511', 'Intel Celeron N2830 2.16 GHz Processor (1 MB Cache)4 GB DDR3L SDRAM500 GB 5400 rpm Hard Drive15.6-Inch Screen, Intel HD GraphicsWindows 8.1, 4.5-hour battery life', 'Screen Size	15.6 inchesMax Screen Resolution	1366x768Processor	2.16 GHz Intel CeleronRAM	4 GB DDR3L SDRAMHard Drive	500 GB SATAGraphics Coprocessor	Intel HD GraphicsGraphics Card Ram Size	64 MBWireless Type	802.11bgnNumber of USB 2.0 Ports	2Number of USB 3.0 Ports	1Average Battery Life (in hours)	4.5 hoursExpandOther Technical DetailsBrand Name	AcerSeries	ES1-511Item model number	ES1-511-C59VOperating System	Windows 8.1Item Weight	5.3 poundsItem Dimensions L x W x H	15.02 x 10.16 x 1.07 inchesColor	Diamond BlackProcessor Brand	Intel CeleronHard Drive Rotational Speed	5400 RPMBatteries:	1 Lithium ion batteries required. (included)', '16', 500000),
('AcerC720', 'Acer C720 Acer C720 ', 'Built-in dual band Wi-Fi 802.11 a/b/g/n\nIntel Celeron 2955U 1.4 GHz (Haswell micro-architecture)\n16 GB Solid-State Drive\n11.6-Inch Anti-Glare Screen, Intel HD Graphics\nHDMI port, 8.5-hour battery life ', ' Screen Size	11.6 inches\nScreen Resolution	1366 x 768\nMax Screen Resolution	1366x768\nProcessor	1.4 GHz Intel Celeron\nRAM	2 GB DDR3L SDRAM\nMemory Speed	1333.00\nHard Drive	16 GB flash_memory_solid_state\nGraphics Coprocessor	Intel HD Graphics\nChipset Brand	Intel\nGraphics Card Ram Size	128 MB\nWireless Type	802.11 a/b/g/n\nNumber of USB 2.0 Ports	1\nNumber of USB 3.0 Ports	1\nAverage Battery Life (in hours)	8.5 hours\nExpand\nOther Technical Details\nBrand Name	Acer\nSeries	Acer C720-2848 11.6-Inch Chromebook (Granite Gray)\nItem model number	C720-2848\nHardware Platform	Consumer Electronics\nOperating System	Chrome\nItem Weight	2.8 pounds\nItem Dimensions L x W x H	11.34 x 8.03 x 0.75 inches\nColor	Granite Gray\nProcessor Brand	Intel Celeron\nProcessor Count	2\nComputer Memory Type	DDR3 SDRAM\nFlash Memory Size	16\nHard Drive Interface	Serial ATA\nOptical Drive Type	No\nAudio-out Ports (#)	1\nBattery Type	Lithium Polymer (LiPo)\nBatteries:	1 Lithium ion batteries required. (included)', '0', 400000),
('AcerS3-391-6046', 'Acer S3-391-6046 ', 'Screen Size: 13.3"\r\nIntel Core i3-2367M 1.4GHz - 4GB DDR3 - 320GB HDD\r\nBuilt-in 1.3 megapixel webcam\r\nScreen Resolution: 1366 x 768\r\n802.11b/g/n Wireless LAN Bluetooth 4.0 HS', '\r\nBrand Name	Acer\r\nSeries	Aspire\r\nItem model number	SNID#23501755920/S3 SERIES\r\nHardware Platform	Consumer Electronics\r\nOperating System	Windows 8\r\nItem Weight	2.6 pounds\r\nItem Dimensions L x W x H	13.30 x 1 x 7 inches\r\nProcessor Brand	Intel\r\nProcessor Count	2\r\nComputer Memory Type	DDR3 SDRAM\r\nHard Drive Interface	Serial ATA\r\nPower Source	Battery', '', 800000),
('ASUS750JZ', 'ASUS ROG G750JZ-DS71', ' Windows 8.1 Pro u otras ediciones disponibles, Cuarta  generacion de procesadores Intel Core i7 y la grafica NVIDIA GeForce GTX880MDos ventiladores con salidas independientes para alejar el ruido y la temperaturaASUS SonicMaster y ROG AudioWizard ofrecen un audio potente y optimizadoTeclado retroiluminado con una gran capacidad de respuesta y resistencia', ' Procesador Intel Core i7 4700HQ Sistema Operativo Windows 8.1 ProWindows 8.1ChipsetIntel HM87 Express ChipsetMemoriaDDR3L MHz SDRAM, up to 32 G Pantalla17.3" Auto FHD EWV LED Retroiluminado Non-Glare LCD Panel GraficosNVIDIA GeForce GTX880M 4GB GDDR5 Almacenamiento1.5TB 5400 1TB 7200 750GB 5400 With 8 G SSD 512GB SSD 256GB SSD Soporte para Dual HDD RAID0 Support (Opcional)Unidad OpticaSuper-Multi DVD Lectora Blue-rayLector de tarjetas2 -en-1 Lector de tarjetas ( SD/ MMC)Camara web HDRedesIntegrado 802.11ac or 802.11 a/b/g/n (WiDi)10/100/1000 Base TSoporte BT 4.0 (en WLAN+ BT 4.0 tarjeta combo)Interfaz1 x Entrada para microfono0 x Salida para auriculares1 x Puerto VGA /Mini D-sub 15-pin para monitor externo 4 x puerto(s) USB 3.0 1 x Puerto LAN RJ451 x HDMI 1 x Thunderbolt port 1X AC adapter plugAudioParlantes y Array MicrophoneSubwoofer IntegradoSoporte MaxxAudioBatería8 Celdas 5900 mAh 89 WhrsAdaptador de CorrienteSalida :19.5 V DC, 11.8 A, 230 WEntrada :100 -240 V AC, 50/60 Hz universal3/ 2 pin compact power supply systemDimensiones410 x 318 x 17 -58 cm (WxDxH) (w/ 8cell battery)Peso4.8 kg (con batería de 8 celdas)SeguridadKensington lockLoJackIntel Anti-theft', '0', 2600000),
('ASUSG51J', 'ASUS G51J-A1 ', 'Windows 7 Ultimate u otras ediciones disponibles\nDisfruta del gaming más realista con la gráfica NVIDIA\nPower4Gear Hybrid permite jerarquizar el rendimiento de la CPU para disfrutar de tus juegos sin sobresaltos\nAudio 3D con EAX Advanced HD 4.0 para una experiencia sonora más realista\nTeclado tipo chicle con retroiluminación dinámica para situación de iluminación limitada ', 'ProcesadorIntel Core i7 820QM/720QM ProcesadorSistema OperativoWindows 7 Ultimate Windows 7 Home Premium Esta versión contiene todas las actualizaciones del producto (SP1)ChipsetIntel PM55 Express ChipsetMemoriaDDR3 1066 MHz SDRAM, 2 x SO-DIMM socket para una expansión hasta 4 GB SDRAMPantalla15.6" 16:9 Full HD (1920x1080) LED RetroiluminadoGráficosNVIDIA GeForce GTX 260M con 1GB DDR3 VRAMAlmacenamiento2.5" SATA500GB 5400/7200 320GB 5400/7200 250GB 5400 Soporte para Dual HDDUnidad OpticaBlu-Ray DVD Combo Super-Multi DVDLector de tarjetas8 -en-1 Lector de tarjetas ( SDXC/ MS/ MS Pro/ MS Duo/ MMC)CámaraCámara web con 2.0 de Mega PixelRedesIntegrado 802.11 b/g/nBluetooth™ V2.1+EDR Integrado (Opcional)10/100/1000 Base TInterfaz1 x Entrada para micrófono2 x Salida para auriculares(1 x SPDIF)4 x Puerto(s) USB 2.0 1 x IEEE 1394 port1 x Puerto LAN RJ451 x HDMI 1 x Puerto E-SATA (USB2.0 Combo)AudioEAX Advanced HD 4.0 Parlantes Altec LansingCreative Audigy HDTV-TunerAnálogoBatería6 Células 4800 mAh9 Células 7200 mAhAdaptador de CorrienteSalida :19 V DC, 4.74 A, 120 WEntrada :100 -240 V AC, 50/60 Hz universalDimensiones37.5 x 26.5 x 3.43 ~4.06 cm (WxDxH)Peso3.30 kg (con 6 celdas de batería)SeguridadCertificadosGarantía1 año de garantía limitada en hardware.*diferente según el país.Resolución de problemas On-line a través de la interfaz web (Actualización BIOS, Drivers)OS (Windows 7 ) Consulta de instalación/desinstalaciónSoftware integrado Consulta de instalación/desinstalaciónSoftware de soporte ASUSNotaOnly for SearchThinnes - Laptop ', '0', 1700000),
('ASUSG55VW', 'ASUS G55VW-RS71 ', 'Windows 8 Pro u otras ediciones disponibles\n3ª gen de procesadores Intel® Core™ i7 y las nuevas gráficas NVIDIA®\nRefrigeración inteligente con dos salidas para el aire caliente\nErgonomía superior\nDisfruta del 3D más realista con las gafas activas\nMejoras de audio Soni ', 'Procesador\nIntel® Core™ i7 3630QM Procesador\nIntel® Core™ i7 3610QM Procesador\nIntel® Core™ i5 3230M /3210M Procesador\nSistema Operativo\nWindows 8 Pro\nWindows 8\nWindows 7 Ultimate \nWindows 7 Professional \nWindows 7 Home Premium \nWindows 7 Home Basic\nChipset\nIntel® HM77 Chipset\nMemoria\nDDR3 1600 MHz SDRAM, 4 x SO-DIMM socket para una expansión hasta 16 GB SDRAM *1\nPantalla\n15.6" 4:3 HD (1366x768)/HD 3D (1366x768 120Hz)/Full HD (1920x1080)/Amplio ángulo de visión LED Retroiluminado Non-Glare LCD Panel\nGráficos\nNVIDIA® GeForce® GTX 660M con 2GB GDDR5 VRAM\nAlmacenamiento\n1TB 5400 \n750GB 5400/7200 \n500GB 5400/7200 \n128GB SSD \n750GB 7200 SSH\nUnidad Optica\nBlu-Ray DVD Combo \nSuper-Multi DVD \nLectora Blue-ray\nLector de tarjetas\n3 -en-1 Lector de tarjetas ( SD/ MS/ MMC)\nCámara\nCámara web HD\nRedes\nIntegrado 802.11 b/g/n\nBluetooth™ V4.0 integrado (Opcional)\n10/100/1000 Base T\nInterfaz\n1 x Entrada para micrófono\n0 x Salida para auriculares\n1 x Puerto VGA /Mini D-sub 15-pin para monitor externo\n4 x puerto(s) USB 3.0 \n1 x Puerto LAN RJ45\n1 x HDMI \n1 x SPIDIF Salida para parlantes\n1 x mini puerto Display Port\nAudio\nParlantes y Micrófono Integrado\nSubwoofer Integrado\nBatería\n8 Células 5200 mAh 74 Whrs\nAdaptador de Corriente\nSalida :\n19 V DC, A, W\nEntrada :\n100 -240 V AC, 50/60 Hz universal\nDimensiones\n384 x 299 x 20 -51 mm (WxDxH)\nPeso\n3.8 kg (con 8 celdas de batería)\nSeguridad\nKensington lock\nGarantía\n1 año de garantía limitada en hardware.*diferente según el país.\nResolución de problemas On-line a través de la interfaz web (Actualización BIOS, Drivers)\nOS (Windows 7 ) Consulta de instalación/desinstalación\nSoftware integrado Consulta de instalación/desinstalación\nSoftware de soporte ASUS ', '16', 3400000),
('ASUSG75', 'ASUS ROG G75VW-AH7', 'Windows 7 Ultimate u otras ediciones disponibles3ª gen de procesadores Intel Core i7 y las nuevas gráficas NVIDIARefrigeración inteligente con dos salidas para el aire caliente y filtros desmontablesErgonomía superiorDisfruta del 3D más realista con la tecnología NVIDIA 3D LightBoostMejoras de audio SonicMaster Lite con subwoofer integrado ', ' Procesador\nIntel® Core™ i7 3720QM Procesador\nIntel® Core™ i7 3610QM Procesador\nSistema Operativo\nWindows 7 Ultimate \nWindows 7 Professional \nWindows 7 Home Premium \nWindows 7 Home Basic\nChipset\nIntel® HM77 Chipset\nMemoria\nDDR3 1600 MHz SDRAM, 4 x SO-DIMM socket para una expansión hasta 16 GB SDRAM\nPantalla\n17.3" 4:3 HD con EWV (1366 x 768) / FHD 3D LED Retroiluminado\nGráficos\nNVIDIA® GeForce® GTX 660M/670M con 2GB/3GB GDDR5 VRAM\nAlmacenamiento\n2.5" SATA Dual HDD\n1TB 5400 \n750GB 5400/7200 \n500GB 5400/7200 \n750GB 7200 SSH\n256GB SSD \nRAID0/1 Support\nUnidad Optica\nBlu-Ray DVD Combo \nSuper-Multi DVD \nLectora Blue-ray\nLector de tarjetas\n3 -en-1 Lector de tarjetas ( SD/ MS/ MMC)\nCámara\nCámara web HD\nRedes\nIntegrado 802.11 b/g/n\nBluetooth™ V4.0 integrado (Opcional)\n10/100/1000 Base T\nInterfaz\n1 x Entrada para micrófono\n0 x Salida para auriculares\n1 x Puerto VGA /Mini D-sub 15-pin para monitor externo\n4 x puerto(s) USB 3.0 \n1 x Puerto LAN RJ45\n1 x HDMI \n1 x SPIDIF Salida para parlantes\n1 x mini puerto Display Port\nAudio\nParlantes y Micrófono Integrado\nSubwoofer Integrado\nBatería\n8 Células 5200 mAh 74 Whrs\nAdaptador de Corriente\nSalida :\n19 V DC, A, 180 W\nEntrada :\n100 -240 V AC, 50/60 Hz universal\nDimensiones\n415 x 320 x 17 -52 mm (WxDxH)\nPeso\n4.5 kg (con 8 celdas de batería)\nSeguridad\nKensington lock\nGarantía\n1 año de garantía limitada en hardware.*diferente según el país.\nResolución de problemas On-line a través de la interfaz web (Actualización BIOS, Drivers)\nOS (Windows 7 ) Consulta de instalación/desinstalación\nSoftware integrado Consulta de instalación/desinstalación\nSoftware de soporte ASUS', '0', 2500000),
('ASUSG750JM', 'ASUS ROG G750JM-DS71', 'Windows 8 Pro u otras ediciones disponibles4 generación de procesadores Intel Core i7 y las gráficas NVIDIA® más avanzadasDos ventiladores con salidas independientes para alejar el ruido y la temperaturaMejoras de audio SonicMaster y una salida para auriculares mejoradaTeclado retroiluminado con una gran capacidad de respuesta y rendimiento ', 'ProcesadorIntel Core i7 4700HQ ProcesadorSistema OperativoWindows 8 ProWindows 8ChipsetIntel HM87 Express ChipsetMemoriaDDR3L 1800 MHz SDRAM, up to 32 GPantalla17.3" 16:9 FHD EWV LED Retroiluminado/Full HD 3D(1920x1080 120Hz) Non-Glare LCD Panel (Opcional)GráficosNVIDIA GeForce® GTX 770M 3GB GDDR5 VRAMAlmacenamiento2.5" 9.5mm SATA1TB 5400 RPM With 256 GB SSD 750GB 5400/7200 RPM With 256 GB SSD 500GB 7200 RPM 500GB 5400 RPM With 8 G SSD SSHSoporte para Dual HDD RAID0 SupportUnidad OpticaBlu-Ray DVD Combo Super-Multi DVD Grabadora Blue-rayLector de tarjetas2 -en-1 Lector de tarjetas ( SD/ MMC)CámaraCámara web HDRedesIntegrado 802.11 b/g/n or 802.11ac 10/100/1000 Base TSoporte BT 4.0 (en WLAN+ BT 4.0 tarjeta combo)Interfaz1 x Entrada para micrófono0 x Salida para auriculares(SPDIF)1 x Puerto VGA /Mini D-sub 15-pin para monitor externo4 x puerto(s) USB 3.0 1 x Puerto LAN RJ451 x HDMI 1 x mini puerto Display Port1 x Thunderbolt port (Opcional)1X AC adapter plugAudioBuilt-in 2 Speakers And Micrófono IntegradoSonicMasterSubwoofer IntegradoSoporte MaxxAudioBatería8 Células 5900 mAh 89 WhrsAdaptador de CorrienteSalida :19.5 V DC, 9.23 A, 180 WEntrada :100 -240 V AC, 50/60 Hz universal3/ 2 pin compact power supply systemDimensiones410 x 318 x 17 -50 mm (WxDxH) (w/ 8cell battery)Peso4.8 kg (con 8 celdas de batería)SeguridadKensington lockLoJackIntel Anti-theftGarantía1 año de garantía limitada en hardware.*diferente según el país. ', '0', 2400000),
('LENOVA Y410p', 'Lenovo Y410p - Dusk ', 'Duración de la batería\nHasta 5 horas con batería estándar de 6 celdas (la verdadera duración de la batería depende del uso)\nPeso\nA partir de 2,5 kg\nParlantes\nParlantes estéreo JBL® con Dolby® Home Theater® v4\nMicrófonos\nIntegrado\nPuertos\n2 x USB 2.0, USB 3.0, lector de tarjetas 6-en-1, Combo Jack (audífonos / micrófono), HDMI ', 'Procesador\nCuarta generación del procesador Intel® Core™ i7-4700MQ (6M Cache, 2.4 GHz)\nSistema Operativo\nWindows 8.1\nPantalla\n14" HD LED GLARE\nPlaca de Video\nNVIDIA GeForce GT650M GDDR5 2GB\nMemoria\n6GB PC3-12800 DDR3L SDRAM 1600 MHz\nDisco Rígido\n1TB 5400 RPM\nUnidad Óptica\nDVD Recordable (Dual Layer)\nConectividad\n802.11bgn\nBluetooth\nBluetooth® 4.0\nGarantía\n1 Año de garantía carry in (en centro de servicio)\nDispositivo de Puntero\nIndustry Standard Multi-touch 2 button touchpad\nBatería\n6 Celdas Lithium-Ion ', '0', 1995000),
('LENOVAE431', 'lENOVA ThinkPad Edge', 'Duración de la batería\nHasta 6 horas con batería estándar de 6 celdas (la verdadera duración de la batería depende del uso)\nPeso\nA partir de 2,13 kg\nParlantes\nParlantes estéreo con Dolby® Advanced Audio™ v2\nMicrófono\nMicrófono dual con optimización para VOIP\nPuertos\n2 x USB 3.0, USB 2.0 (siempre encendido) VGA, HDMI, Ethernet RJ-45, lector de tarjetas 4-en-1, Combo Jack (audífono / micrófono), tecnología Lenovo OneLink ', 'Procesador\nTercera generación del procesador Intel® Core™ i3-3120M (3M Cache, 2.5 GHz)\nSistema Operativo\nWindows 8 64\nPantalla\n14" Antirreflejos HD 1366x768\nPlaca de Video\nIntel Integrated HD Graphics 4000\nMemoria\n4.0GB PC3-12800 DDR3L SDRAM 1600 MHz\nDisco Rígido\n500GB 5400 rpm\nUnidad Óptica\nGrabadora Multi Recorder\nConectividad\nThinkPad 11b/g/n Wi-Fi wireless\nBluetooth\nBluetooth versión 4.0\nGarantía\nMano de obra y piezas: un año (batería del sistema: un año)\nBatería\nIon Litio, 6 celdas\nDiseño\nNotebook\n ', '0', 1299000),
('Lenovo2-14-R', 'Lenovo Flex 2-14 - R', 'Duración de la batería\nHasta 6 hs de duración con batería estándar\nPeso\nA partir de 1,9 kg\nPuertos\n1 USB 3.0, 2 USB 2.0, salida para HDMI, puerto LAN, lector de tarjetas 2-en-1 (SD/MMC), combo de conectores\nMicrófono\nMicrófono dual digital integrado\nParlantes\nParlantes estéreo con Dolby® Advanced Audio™ ', ' Procesador\nCuarta generación del procesador Intel® Core™ i3-4010U (3M Cache, 1.7 GHz)\nSistema Operativo\nWindows 8.1\nPantalla\n14" HD LED (1366x768) Multi-Touch 10 dedos (SLIM)\nPlaca de Video\nIntel® HD Graphics 4400\nMemoria\n4GB PC3-12800 DDR3L SDRAM 1600 MHz\nDisco Rígido\n500GB 5400rpm\nConectividad\nLenovo BGN Wireless + 100/1000M Ethernet\nBluetooth\nBluetooth® 4.0\nGarantía\n1 Año de garantía carry in (en centro de servicio)\nBatería\n4 Céldas Li-Cilindrica', '0', 1176000),
('LENOVO40-30', 'Lenovo G40-30 ', 'Duración de la batería\nHasta 4 horas con batería estándar de 4 celdas\nPeso\nA partir de 2,1 kg\nPuertos\n1 USB 3.0, USB 2.0, salida HDMI, lector de tarjetas 2 en 1 (SD/MMC), combo de auriculares y micrófono y VGA.\nMicrófono\nAnalógico\nParlantes\nParlantes estéreo con Dolby® Advanced Audio™ ', 'Procesador\nIntel® Celeron® N2830 (1M Cache, 2.16 GHz)\nSistema Operativo\nWindows 8.1 64\nPantalla\n14,0" HD Wide LED\nPlaca de Video\nGráficos Intel de alta definición\nMemoria\n2.0GB PC3-10600 DDR3L SDRAM 1333 MHz\nDisco Rígido\n500GB 5400 rpm\nUnidad Óptica\nDVD Grabable\nConectividad\nLenovo BGN Wireless\nBluetooth\nBluetooth versión 4.0\nGarantía\nUn año\nDispositivo de Puntero\nClickPAd\nBatería\nCilíndrica de Litio, 4 celdas ', '0', 629000),
('LENOVOT440s', 'LENOVOThinkPadT440s ', 'Ethernet\nIntel® 10/1000 Gigabyte Ethernet\nGráficos\nIntel® HD 4400\nWebcam\nTecnología de seguimiento facial 720p HD, alta sensibilidad con poca luz\nDuración de la batería\nHasta 10 horas con batería estándar de 3+3 celdas (la verdadera duración de la batería depende del uso)\nPeso\nA partir de 1,65 kg\nPuertos\nMini Display Port con audio, VGA, 3 x USB 3.0 (1 siempre encendido), lector de tarjeta 4-en-1, Combo Jack (micrófono / audífono)\nMicrófono\nMicrófonos duales HD con cancelación de ruido\nParlantes\nParlantes estéreo con Dolby® Home Theater® v4 ', 'Procesador\nIntel Core i5-4300U Procesador( 1,90GHz 3MB)\nSistema Operativo\nWindows 7 Professional 64\nPantalla\n14,0" FHD IPS AntiGlare LED Backlight 1920x1080\nPlaca de Video\nIntel HD 4400\nMemoria\n4.0GB PC3-12800 DDR3L SDRAM 1600 MHz\nDisco Rígido\n500GB 7200 rpm\nConectividad\nIntel Dual Band Wireless-AC 7260\nBluetooth\nBluetooth versión 4.0\nGarantía\nTres años\nBatería\nPolímero de Litio, 3 celdas\nOtros\nLector de huellas digitales ', '0', 2856000),
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
(1, '09000', 1000),
(2, '90', 1000),
(1, 'Acer AOD2', 300000),
(1, 'Acer E15', 450000),
(1, 'AcerC720', 400000),
(2, 'ASUS750JZ', 2600000),
(2, 'ASUSG51J', 1700000),
(2, 'ASUSG55VW', 3400000),
(2, 'ASUSG75', 2500000),
(2, 'ASUSG750JM', 2400000),
(3, 'LENOVA Y410p', 1995000),
(3, 'LENOVAE431', 1299000),
(3, 'Lenovo2-14-R', 1176000),
(3, 'LENOVO40-30', 629000),
(3, 'LENOVOT440s', 2856000);

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
(1, 'Acer Colombia', '123', 'calle'),
(2, 'Asus Colombia', '123', 'calle'),
(3, 'Lenovo', '10', 'calle');

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
-- Indices de la tabla `apropiaciones`
--
ALTER TABLE `apropiaciones`
 ADD PRIMARY KEY (`nomina`);

--
-- Indices de la tabla `cierre`
--
ALTER TABLE `cierre`
 ADD PRIMARY KEY (`id`,`fecha`);

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
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
 ADD PRIMARY KEY (`id`), ADD KEY `Cedula` (`Cedula`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
 ADD PRIMARY KEY (`num_factura`,`codigo`), ADD KEY `num_factura` (`num_factura`), ADD KEY `codigo` (`codigo`), ADD KEY `num_factura_2` (`num_factura`);

--
-- Indices de la tabla `detalle_cierre`
--
ALTER TABLE `detalle_cierre`
 ADD PRIMARY KEY (`id`,`cuenta`), ADD KEY `fecha` (`id`,`cuenta`), ADD KEY `cuenta` (`cuenta`), ADD KEY `id` (`id`);

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
-- Indices de la tabla `estado_situacion`
--
ALTER TABLE `estado_situacion`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_cierre` (`id_cierre`), ADD KEY `id_cierre1` (`id_cierre`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
 ADD PRIMARY KEY (`num_factura`,`cliente`), ADD KEY `cliente` (`cliente`);

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
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT de la tabla `documentado`
--
ALTER TABLE `documentado`
MODIFY `cod_documento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
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
-- AUTO_INCREMENT de la tabla `estado_situacion`
--
ALTER TABLE `estado_situacion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
MODIFY `num_factura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `Nomina`
--
ALTER TABLE `Nomina`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

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
