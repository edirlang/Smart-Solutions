-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2014 a las 04:07:00
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
`ID` int(11) NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `activo1`
--

INSERT INTO `activo1` (`ID`, `Cedula`, `Codigo`, `Fecha`, `Naturaleza`, `Descripcion`, `Valor`) VALUES
(16, '2', '31', '2014-09-01', 'C', 'Capital Social', 50000000),
(17, '2', '1105', '2014-09-01', 'D', 'Caja', 50000000),
(18, '2', '1105', '2014-09-01', 'C', 'Caja', 40000000),
(19, '2', '1120', '2014-09-01', 'D', 'Cuenta de Ahorros', 40000000),
(20, '2', '1105', '2014-09-02', 'C', 'Caja', 1528500),
(21, '2', '1120', '2014-09-03', 'D', 'Cuenta de ahorros', 40000000),
(22, '2', '1105', '2014-09-03', 'C', 'Caja', 7144900),
(23, '2', '1520', '2014-09-03', 'D', 'Muebles y enceres', 7144900),
(25, '1', '1120', '2014-09-03', 'C', 'Cuenta de ahorros', 76820000),
(28, '1', '1105', '2014-09-03', 'C', 'Caja', 1200000);

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
('1', 'kk', 'klk', '9090');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigotransacion`
--

CREATE TABLE IF NOT EXISTS `codigotransacion` (
  `Codigo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
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
('21', 'Obligaciones Financi', 'pasivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costos`
--

CREATE TABLE IF NOT EXISTS `costos` (
`ID` int(11) NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `costos`
--

INSERT INTO `costos` (`ID`, `Codigo`, `Cedula`, `Fecha`, `Naturaleza`, `Descripcion`, `Valor`) VALUES
(1, '1', '6205', '2014-09-03', 'D', 'Costos Compras', 76820000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE IF NOT EXISTS `detallefactura` (
  `num_factura` int(11) NOT NULL DEFAULT '0',
  `cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `cantidad` int(11) DEFAULT NULL,
  `vlr_venta` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `num_factura` int(11) NOT NULL DEFAULT '0',
  `cliente` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `vendedor` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasto`
--

CREATE TABLE IF NOT EXISTS `gasto` (
`ID` int(11) NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `gasto`
--

INSERT INTO `gasto` (`ID`, `Cedula`, `Codigo`, `Fecha`, `Naturaleza`, `Descripcion`, `Valor`) VALUES
(1, '2', '5140', '2014-09-02', 'D', 'Gasto Legal', 1528500),
(2, '1', '5220', '2014-09-03', 'D', 'Arriendo', 1200000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE IF NOT EXISTS `ingresos` (
`ID` int(11) NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` int(11) NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
`id` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `vlr_unidad` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `codigo`, `fecha`, `cantidad`, `vlr_unidad`, `total`) VALUES
(1, 'Acer AOD2', '2014-08-24', 10, 1000, 10000),
(2, 'Acer AOD2', '2014-08-24', 15, 1067, 16000),
(3, 'Acer AOD2', '2014-08-24', 20, 1100, 22000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasivo`
--

CREATE TABLE IF NOT EXISTS `pasivo` (
`ID` int(11) NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Naturaleza` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pasivo`
--

INSERT INTO `pasivo` (`ID`, `Cedula`, `Codigo`, `Fecha`, `Naturaleza`, `Descripcion`, `Valor`) VALUES
(2, '2', '21', '2014-09-03', 'C', 'Obligacion Financier', 40000000);

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
  `ValorVenta` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Codigo`, `Nombre`, `Descripcion`, `Especificaciones`, `iva`, `ValorVenta`, `Cantidad`) VALUES
('Acer AOD2', 'Acer Aspire One AOD2', 'Acer Aspire One AOD250-1042 10.1 inch Atom 1.6GHz/ 1GB/ 160GB/ XP Home Netbook Computer (Red)', 'Screen Size	10.1 inches\r\nProcessor	1.6 GHz Intel Atom N270\r\nRAM	1 GB DDR2\r\nHard Drive	160 GB\r\nGraphics Coprocessor	Intel GMA 950\r\nAverage Battery Life (in hours)	3.15 hours\r\nExpand\r\nOther Technical Details\r\nBrand Name	Acer\r\nSeries	Aspire One\r\nItem model number	AOD250-1042/LU.S700B.028\r\nHardware Platform	PC\r\nOperating System	Windows XP Home Edition\r\nItem Weight	5 pounds\r\nItem Dimensions L x W x H	10.20 x 7.20 x 1 inches\r\nColor	Red\r\nProcessor Brand	Intel\r\nProcessor Count	1\r\nComputer Memory Type	SDRAM\r\nHard Drive Interface	ATA100', '', 300000, 4),
('Acer E15', 'Acer E15 15-Inch ', 'Intel N2830 dual-core processor (2.16GHz/2.41GHz w/ Intel Burst)15.6" HD widescreen CineCrystalTM LCD display (1366 x 768) - Intel HD Graphics4GB DDR3L memory (1 Memory Slots, 8GB Maximum Memory) - 500GB hard drivestereo speakers - HD audio - webcam - multi-gesture touchpad - Wireless - Bluetooth 4.0 - HDMI - USB 3.0 - card readerWindows 8.1 (64 bits), 3 cell (up to 4.5-hour) battery - 1-year limited warranty. Color: Diamond Black', 'Screen Size	15.6 inches\r\nMax Screen Resolution	1366 x 768\r\nProcessor	Intel Celeron\r\nRAM	SDRAM DDR3\r\nHard Drive	500 GB\r\nWireless Type	802.11bgn\r\nExpand\r\nOther Technical Details\r\nBrand Name	Acer\r\nSeries	Aspire\r\nItem model number	ES1-511-C0DV\r\nHardware Platform	PC\r\nOperating System	Windows 8\r\nItem Weight	5.3 pounds\r\nItem Dimensions L x W x H	15 x 1.10 x 10.20 inches\r\nColor	Black\r\nComputer Memory Type	DDR3 SDRAM', '', 450000, 4),
('AcerAspire ES1-511', 'Acer Aspire ES1-511', 'Intel Celeron N2830 2.16 GHz Processor (1 MB Cache)4 GB DDR3L SDRAM500 GB 5400 rpm Hard Drive15.6-Inch Screen, Intel HD GraphicsWindows 8.1, 4.5-hour battery life', 'Screen Size	15.6 inchesMax Screen Resolution	1366x768Processor	2.16 GHz Intel CeleronRAM	4 GB DDR3L SDRAMHard Drive	500 GB SATAGraphics Coprocessor	Intel HD GraphicsGraphics Card Ram Size	64 MBWireless Type	802.11bgnNumber of USB 2.0 Ports	2Number of USB 3.0 Ports	1Average Battery Life (in hours)	4.5 hoursExpandOther Technical DetailsBrand Name	AcerSeries	ES1-511Item model number	ES1-511-C59VOperating System	Windows 8.1Item Weight	5.3 poundsItem Dimensions L x W x H	15.02 x 10.16 x 1.07 inchesColor	Diamond BlackProcessor Brand	Intel CeleronHard Drive Rotational Speed	5400 RPMBatteries:	1 Lithium ion batteries required. (included)', '', 500000, 4),
('AcerC720', 'Acer C720 Acer C720 ', 'Built-in dual band Wi-Fi 802.11 a/b/g/n\r\nIntel Celeron 2955U 1.4 GHz (Haswell micro-architecture)\r\n16 GB Solid-State Drive\r\n11.6-Inch Anti-Glare Screen, Intel HD Graphics\r\nHDMI port, 8.5-hour battery life', 'Screen Size	11.6 inches\r\nScreen Resolution	1366 x 768\r\nMax Screen Resolution	1366x768\r\nProcessor	1.4 GHz Intel Celeron\r\nRAM	2 GB DDR3L SDRAM\r\nMemory Speed	1333.00\r\nHard Drive	16 GB flash_memory_solid_state\r\nGraphics Coprocessor	Intel HD Graphics\r\nChipset Brand	Intel\r\nGraphics Card Ram Size	128 MB\r\nWireless Type	802.11 a/b/g/n\r\nNumber of USB 2.0 Ports	1\r\nNumber of USB 3.0 Ports	1\r\nAverage Battery Life (in hours)	8.5 hours\r\nExpand\r\nOther Technical Details\r\nBrand Name	Acer\r\nSeries	Acer C720-2848 11.6-Inch Chromebook (Granite Gray)\r\nItem model number	C720-2848\r\nHardware Platform	Consumer Electronics\r\nOperating System	Chrome\r\nItem Weight	2.8 pounds\r\nItem Dimensions L x W x H	11.34 x 8.03 x 0.75 inches\r\nColor	Granite Gray\r\nProcessor Brand	Intel Celeron\r\nProcessor Count	2\r\nComputer Memory Type	DDR3 SDRAM\r\nFlash Memory Size	16\r\nHard Drive Interface	Serial ATA\r\nOptical Drive Type	No\r\nAudio-out Ports (#)	1\r\nBattery Type	Lithium Polymer (LiPo)\r\nBatteries:	1 Lithium ion batteries required. (included)', '', 400000, 4),
('AcerS3-391-6046', 'Acer S3-391-6046 ', 'Screen Size: 13.3"\r\nIntel Core i3-2367M 1.4GHz - 4GB DDR3 - 320GB HDD\r\nBuilt-in 1.3 megapixel webcam\r\nScreen Resolution: 1366 x 768\r\n802.11b/g/n Wireless LAN Bluetooth 4.0 HS', '\r\nBrand Name	Acer\r\nSeries	Aspire\r\nItem model number	SNID#23501755920/S3 SERIES\r\nHardware Platform	Consumer Electronics\r\nOperating System	Windows 8\r\nItem Weight	2.6 pounds\r\nItem Dimensions L x W x H	13.30 x 1 x 7 inches\r\nProcessor Brand	Intel\r\nProcessor Count	2\r\nComputer Memory Type	DDR3 SDRAM\r\nHard Drive Interface	Serial ATA\r\nPower Source	Battery', '', 800000, 3),
('ASUS750JZ', 'ASUS ROG G750JZ-DS71', 'Windows 8.1 Pro u otras ediciones disponibles, Cuarta  generacion de procesadores Intel Core i7 y la grafica NVIDIA GeForce GTX880MDos ventiladores con salidas independientes para alejar el ruido y la temperaturaASUS SonicMaster y ROG AudioWizard ofrecen un audio potente y optimizadoTeclado retroiluminado con una gran capacidad de respuesta y resistencia', 'Procesador Intel Core i7 4700HQ Sistema Operativo Windows 8.1 ProWindows 8.1ChipsetIntel HM87 Express ChipsetMemoriaDDR3L MHz SDRAM, up to 32 G Pantalla17.3" Auto FHD EWV LED Retroiluminado Non-Glare LCD Panel GraficosNVIDIA GeForce GTX880M 4GB GDDR5 Almacenamiento1.5TB 5400 1TB 7200 750GB 5400 With 8 G SSD 512GB SSD 256GB SSD Soporte para Dual HDD RAID0 Support (Opcional)Unidad OpticaSuper-Multi DVD Lectora Blue-rayLector de tarjetas2 -en-1 Lector de tarjetas ( SD/ MMC)Camara web HDRedesIntegrado 802.11ac or 802.11 a/b/g/n (WiDi)10/100/1000 Base TSoporte BT 4.0 (en WLAN+ BT 4.0 tarjeta combo)Interfaz1 x Entrada para microfono0 x Salida para auriculares1 x Puerto VGA /Mini D-sub 15-pin para monitor externo 4 x puerto(s) USB 3.0 1 x Puerto LAN RJ451 x HDMI 1 x Thunderbolt port 1X AC adapter plugAudioParlantes y Array MicrophoneSubwoofer IntegradoSoporte MaxxAudioBatería8 Celdas 5900 mAh 89 WhrsAdaptador de CorrienteSalida :19.5 V DC, 11.8 A, 230 WEntrada :100 -240 V AC, 50/60 Hz universal3/ 2 pin compact power supply systemDimensiones410 x 318 x 17 -58 cm (WxDxH) (w/ 8cell battery)Peso4.8 kg (con batería de 8 celdas)SeguridadKensington lockLoJackIntel Anti-theft', '', 2600000, 3),
('ASUSG51J', 'ASUS G51J-A1 ', 'Windows 7 Ultimate u otras ediciones disponibles\r\nDisfruta del gaming más realista con la gráfica NVIDIA\r\nPower4Gear Hybrid permite jerarquizar el rendimiento de la CPU para disfrutar de tus juegos sin sobresaltos\r\nAudio 3D con EAX Advanced HD 4.0 para una experiencia sonora más realista\r\nTeclado tipo chicle con retroiluminación dinámica para situación de iluminación limitada', 'ProcesadorIntel Core i7 820QM/720QM ProcesadorSistema OperativoWindows 7 Ultimate Windows 7 Home Premium Esta versión contiene todas las actualizaciones del producto (SP1)ChipsetIntel PM55 Express ChipsetMemoriaDDR3 1066 MHz SDRAM, 2 x SO-DIMM socket para una expansión hasta 4 GB SDRAMPantalla15.6" 16:9 Full HD (1920x1080) LED RetroiluminadoGráficosNVIDIA GeForce GTX 260M con 1GB DDR3 VRAMAlmacenamiento2.5" SATA500GB 5400/7200 320GB 5400/7200 250GB 5400 Soporte para Dual HDDUnidad OpticaBlu-Ray DVD Combo Super-Multi DVDLector de tarjetas8 -en-1 Lector de tarjetas ( SDXC/ MS/ MS Pro/ MS Duo/ MMC)CámaraCámara web con 2.0 de Mega PixelRedesIntegrado 802.11 b/g/nBluetooth™ V2.1+EDR Integrado (Opcional)10/100/1000 Base TInterfaz1 x Entrada para micrófono2 x Salida para auriculares(1 x SPDIF)4 x Puerto(s) USB 2.0 1 x IEEE 1394 port1 x Puerto LAN RJ451 x HDMI 1 x Puerto E-SATA (USB2.0 Combo)AudioEAX Advanced HD 4.0 Parlantes Altec LansingCreative Audigy HDTV-TunerAnálogoBatería6 Células 4800 mAh9 Células 7200 mAhAdaptador de CorrienteSalida :19 V DC, 4.74 A, 120 WEntrada :100 -240 V AC, 50/60 Hz universalDimensiones37.5 x 26.5 x 3.43 ~4.06 cm (WxDxH)Peso3.30 kg (con 6 celdas de batería)SeguridadCertificadosGarantía1 año de garantía limitada en hardware.*diferente según el país.Resolución de problemas On-line a través de la interfaz web (Actualización BIOS, Drivers)OS (Windows 7 ) Consulta de instalación/desinstalaciónSoftware integrado Consulta de instalación/desinstalaciónSoftware de soporte ASUSNotaOnly for SearchThinnes - Laptop', '', 1700000, 3),
('ASUSG55VW', 'ASUS G55VW-RS71 ', 'Windows 8 Pro u otras ediciones disponibles\r\n3ª gen de procesadores Intel® Core™ i7 y las nuevas gráficas NVIDIA®\r\nRefrigeración inteligente con dos salidas para el aire caliente\r\nErgonomía superior\r\nDisfruta del 3D más realista con las gafas activas\r\nMejoras de audio SonicMaster Lite con subwoofer integrado', 'Procesador\r\nIntel® Core™ i7 3630QM Procesador\r\nIntel® Core™ i7 3610QM Procesador\r\nIntel® Core™ i5 3230M /3210M Procesador\r\nSistema Operativo\r\nWindows 8 Pro\r\nWindows 8\r\nWindows 7 Ultimate \r\nWindows 7 Professional \r\nWindows 7 Home Premium \r\nWindows 7 Home Basic\r\nChipset\r\nIntel® HM77 Chipset\r\nMemoria\r\nDDR3 1600 MHz SDRAM, 4 x SO-DIMM socket para una expansión hasta 16 GB SDRAM *1\r\nPantalla\r\n15.6" 4:3 HD (1366x768)/HD 3D (1366x768 120Hz)/Full HD (1920x1080)/Amplio ángulo de visión LED Retroiluminado Non-Glare LCD Panel\r\nGráficos\r\nNVIDIA® GeForce® GTX 660M con 2GB GDDR5 VRAM\r\nAlmacenamiento\r\n1TB 5400 \r\n750GB 5400/7200 \r\n500GB 5400/7200 \r\n128GB SSD \r\n750GB 7200 SSH\r\nUnidad Optica\r\nBlu-Ray DVD Combo \r\nSuper-Multi DVD \r\nLectora Blue-ray\r\nLector de tarjetas\r\n3 -en-1 Lector de tarjetas ( SD/ MS/ MMC)\r\nCámara\r\nCámara web HD\r\nRedes\r\nIntegrado 802.11 b/g/n\r\nBluetooth™ V4.0 integrado (Opcional)\r\n10/100/1000 Base T\r\nInterfaz\r\n1 x Entrada para micrófono\r\n0 x Salida para auriculares\r\n1 x Puerto VGA /Mini D-sub 15-pin para monitor externo\r\n4 x puerto(s) USB 3.0 \r\n1 x Puerto LAN RJ45\r\n1 x HDMI \r\n1 x SPIDIF Salida para parlantes\r\n1 x mini puerto Display Port\r\nAudio\r\nParlantes y Micrófono Integrado\r\nSubwoofer Integrado\r\nBatería\r\n8 Células 5200 mAh 74 Whrs\r\nAdaptador de Corriente\r\nSalida :\r\n19 V DC, A, W\r\nEntrada :\r\n100 -240 V AC, 50/60 Hz universal\r\nDimensiones\r\n384 x 299 x 20 -51 mm (WxDxH)\r\nPeso\r\n3.8 kg (con 8 celdas de batería)\r\nSeguridad\r\nKensington lock\r\nGarantía\r\n1 año de garantía limitada en hardware.*diferente según el país.\r\nResolución de problemas On-line a través de la interfaz web (Actualización BIOS, Drivers)\r\nOS (Windows 7 ) Consulta de instalación/desinstalación\r\nSoftware integrado Consulta de instalación/desinstalación\r\nSoftware de soporte ASUS', '', 3400000, 3),
('ASUSG75', 'ASUS ROG G75VW-AH71 ', 'Windows 7 Ultimate u otras ediciones disponibles3ª gen de procesadores Intel Core i7 y las nuevas gráficas NVIDIARefrigeración inteligente con dos salidas para el aire caliente y filtros desmontablesErgonomía superiorDisfruta del 3D más realista con la tecnología NVIDIA 3D LightBoostMejoras de audio SonicMaster Lite con subwoofer integrado', 'Procesador\r\nIntel® Core™ i7 3720QM Procesador\r\nIntel® Core™ i7 3610QM Procesador\r\nSistema Operativo\r\nWindows 7 Ultimate \r\nWindows 7 Professional \r\nWindows 7 Home Premium \r\nWindows 7 Home Basic\r\nChipset\r\nIntel® HM77 Chipset\r\nMemoria\r\nDDR3 1600 MHz SDRAM, 4 x SO-DIMM socket para una expansión hasta 16 GB SDRAM\r\nPantalla\r\n17.3" 4:3 HD con EWV (1366 x 768) / FHD 3D LED Retroiluminado\r\nGráficos\r\nNVIDIA® GeForce® GTX 660M/670M con 2GB/3GB GDDR5 VRAM\r\nAlmacenamiento\r\n2.5" SATA Dual HDD\r\n1TB 5400 \r\n750GB 5400/7200 \r\n500GB 5400/7200 \r\n750GB 7200 SSH\r\n256GB SSD \r\nRAID0/1 Support\r\nUnidad Optica\r\nBlu-Ray DVD Combo \r\nSuper-Multi DVD \r\nLectora Blue-ray\r\nLector de tarjetas\r\n3 -en-1 Lector de tarjetas ( SD/ MS/ MMC)\r\nCámara\r\nCámara web HD\r\nRedes\r\nIntegrado 802.11 b/g/n\r\nBluetooth™ V4.0 integrado (Opcional)\r\n10/100/1000 Base T\r\nInterfaz\r\n1 x Entrada para micrófono\r\n0 x Salida para auriculares\r\n1 x Puerto VGA /Mini D-sub 15-pin para monitor externo\r\n4 x puerto(s) USB 3.0 \r\n1 x Puerto LAN RJ45\r\n1 x HDMI \r\n1 x SPIDIF Salida para parlantes\r\n1 x mini puerto Display Port\r\nAudio\r\nParlantes y Micrófono Integrado\r\nSubwoofer Integrado\r\nBatería\r\n8 Células 5200 mAh 74 Whrs\r\nAdaptador de Corriente\r\nSalida :\r\n19 V DC, A, 180 W\r\nEntrada :\r\n100 -240 V AC, 50/60 Hz universal\r\nDimensiones\r\n415 x 320 x 17 -52 mm (WxDxH)\r\nPeso\r\n4.5 kg (con 8 celdas de batería)\r\nSeguridad\r\nKensington lock\r\nGarantía\r\n1 año de garantía limitada en hardware.*diferente según el país.\r\nResolución de problemas On-line a través de la interfaz web (Actualización BIOS, Drivers)\r\nOS (Windows 7 ) Consulta de instalación/desinstalación\r\nSoftware integrado Consulta de instalación/desinstalación\r\nSoftware de soporte ASUS', '', 2500000, 3),
('ASUSG750JM', 'ASUS ROG G750JM-DS71', 'Windows 8 Pro u otras ediciones disponibles4 generación de procesadores Intel Core i7 y las gráficas NVIDIA® más avanzadasDos ventiladores con salidas independientes para alejar el ruido y la temperaturaMejoras de audio SonicMaster y una salida para auriculares mejoradaTeclado retroiluminado con una gran capacidad de respuesta y rendimiento', 'ProcesadorIntel Core i7 4700HQ ProcesadorSistema OperativoWindows 8 ProWindows 8ChipsetIntel HM87 Express ChipsetMemoriaDDR3L 1800 MHz SDRAM, up to 32 GPantalla17.3" 16:9 FHD EWV LED Retroiluminado/Full HD 3D(1920x1080 120Hz) Non-Glare LCD Panel (Opcional)GráficosNVIDIA GeForce® GTX 770M 3GB GDDR5 VRAMAlmacenamiento2.5" 9.5mm SATA1TB 5400 RPM With 256 GB SSD 750GB 5400/7200 RPM With 256 GB SSD 500GB 7200 RPM 500GB 5400 RPM With 8 G SSD SSHSoporte para Dual HDD RAID0 SupportUnidad OpticaBlu-Ray DVD Combo Super-Multi DVD Grabadora Blue-rayLector de tarjetas2 -en-1 Lector de tarjetas ( SD/ MMC)CámaraCámara web HDRedesIntegrado 802.11 b/g/n or 802.11ac 10/100/1000 Base TSoporte BT 4.0 (en WLAN+ BT 4.0 tarjeta combo)Interfaz1 x Entrada para micrófono0 x Salida para auriculares(SPDIF)1 x Puerto VGA /Mini D-sub 15-pin para monitor externo4 x puerto(s) USB 3.0 1 x Puerto LAN RJ451 x HDMI 1 x mini puerto Display Port1 x Thunderbolt port (Opcional)1X AC adapter plugAudioBuilt-in 2 Speakers And Micrófono IntegradoSonicMasterSubwoofer IntegradoSoporte MaxxAudioBatería8 Células 5900 mAh 89 WhrsAdaptador de CorrienteSalida :19.5 V DC, 9.23 A, 180 WEntrada :100 -240 V AC, 50/60 Hz universal3/ 2 pin compact power supply systemDimensiones410 x 318 x 17 -50 mm (WxDxH) (w/ 8cell battery)Peso4.8 kg (con 8 celdas de batería)SeguridadKensington lockLoJackIntel Anti-theftGarantía1 año de garantía limitada en hardware.*diferente según el país.', '', 2400000, 3),
('LENOVA Y410p', 'Lenovo Y410p - Dusk ', 'Duración de la batería\r\nHasta 5 horas con batería estándar de 6 celdas (la verdadera duración de la batería depende del uso)\r\nPeso\r\nA partir de 2,5 kg\r\nParlantes\r\nParlantes estéreo JBL® con Dolby® Home Theater® v4\r\nMicrófonos\r\nIntegrado\r\nPuertos\r\n2 x USB 2.0, USB 3.0, lector de tarjetas 6-en-1, Combo Jack (audífonos / micrófono), HDMI', 'Procesador\r\nCuarta generación del procesador Intel® Core™ i7-4700MQ (6M Cache, 2.4 GHz)\r\nSistema Operativo\r\nWindows 8.1\r\nPantalla\r\n14" HD LED GLARE\r\nPlaca de Video\r\nNVIDIA GeForce GT650M GDDR5 2GB\r\nMemoria\r\n6GB PC3-12800 DDR3L SDRAM 1600 MHz\r\nDisco Rígido\r\n1TB 5400 RPM\r\nUnidad Óptica\r\nDVD Recordable (Dual Layer)\r\nConectividad\r\n802.11bgn\r\nBluetooth\r\nBluetooth® 4.0\r\nGarantía\r\n1 Año de garantía carry in (en centro de servicio)\r\nDispositivo de Puntero\r\nIndustry Standard Multi-touch 2 button touchpad\r\nBatería\r\n6 Celdas Lithium-Ion', '', 1995000, 3),
('LENOVAE431', 'lENOVA ThinkPad Edge', 'Duración de la batería\r\nHasta 6 horas con batería estándar de 6 celdas (la verdadera duración de la batería depende del uso)\r\nPeso\r\nA partir de 2,13 kg\r\nParlantes\r\nParlantes estéreo con Dolby® Advanced Audio™ v2\r\nMicrófono\r\nMicrófono dual con optimización para VOIP\r\nPuertos\r\n2 x USB 3.0, USB 2.0 (siempre encendido) VGA, HDMI, Ethernet RJ-45, lector de tarjetas 4-en-1, Combo Jack (audífono / micrófono), tecnología Lenovo OneLink', 'Procesador\r\nTercera generación del procesador Intel® Core™ i3-3120M (3M Cache, 2.5 GHz)\r\nSistema Operativo\r\nWindows 8 64\r\nPantalla\r\n14" Antirreflejos HD 1366x768\r\nPlaca de Video\r\nIntel Integrated HD Graphics 4000\r\nMemoria\r\n4.0GB PC3-12800 DDR3L SDRAM 1600 MHz\r\nDisco Rígido\r\n500GB 5400 rpm\r\nUnidad Óptica\r\nGrabadora Multi Recorder\r\nConectividad\r\nThinkPad 11b/g/n Wi-Fi wireless\r\nBluetooth\r\nBluetooth versión 4.0\r\nGarantía\r\nMano de obra y piezas: un año (batería del sistema: un año)\r\nBatería\r\nIon Litio, 6 celdas\r\nDiseño\r\nNotebook\r\n', '', 1299000, 3),
('Lenovo2-14-R', 'Lenovo Flex 2-14 - R', 'Duración de la batería\r\nHasta 6 hs de duración con batería estándar\r\nPeso\r\nA partir de 1,9 kg\r\nPuertos\r\n1 USB 3.0, 2 USB 2.0, salida para HDMI, puerto LAN, lector de tarjetas 2-en-1 (SD/MMC), combo de conectores\r\nMicrófono\r\nMicrófono dual digital integrado\r\nParlantes\r\nParlantes estéreo con Dolby® Advanced Audio™', 'Procesador\r\nCuarta generación del procesador Intel® Core™ i3-4010U (3M Cache, 1.7 GHz)\r\nSistema Operativo\r\nWindows 8.1\r\nPantalla\r\n14" HD LED (1366x768) Multi-Touch 10 dedos (SLIM)\r\nPlaca de Video\r\nIntel® HD Graphics 4400\r\nMemoria\r\n4GB PC3-12800 DDR3L SDRAM 1600 MHz\r\nDisco Rígido\r\n500GB 5400rpm\r\nConectividad\r\nLenovo BGN Wireless + 100/1000M Ethernet\r\nBluetooth\r\nBluetooth® 4.0\r\nGarantía\r\n1 Año de garantía carry in (en centro de servicio)\r\nBatería\r\n4 Céldas Li-Cilindrica', '', 1176000, 3),
('LENOVO40-30', 'Lenovo G40-30 ', 'Duración de la batería\r\nHasta 4 horas con batería estándar de 4 celdas\r\nPeso\r\nA partir de 2,1 kg\r\nPuertos\r\n1 USB 3.0, USB 2.0, salida HDMI, lector de tarjetas 2 en 1 (SD/MMC), combo de auriculares y micrófono y VGA.\r\nMicrófono\r\nAnalógico\r\nParlantes\r\nParlantes estéreo con Dolby® Advanced Audio™', 'Procesador\r\nIntel® Celeron® N2830 (1M Cache, 2.16 GHz)\r\nSistema Operativo\r\nWindows 8.1 64\r\nPantalla\r\n14,0" HD Wide LED\r\nPlaca de Video\r\nGráficos Intel de alta definición\r\nMemoria\r\n2.0GB PC3-10600 DDR3L SDRAM 1333 MHz\r\nDisco Rígido\r\n500GB 5400 rpm\r\nUnidad Óptica\r\nDVD Grabable\r\nConectividad\r\nLenovo BGN Wireless\r\nBluetooth\r\nBluetooth versión 4.0\r\nGarantía\r\nUn año\r\nDispositivo de Puntero\r\nClickPAd\r\nBatería\r\nCilíndrica de Litio, 4 celdas', '', 629000, 3),
('LENOVOT440s', 'LENOVOThinkPadT440s ', 'Ethernet\r\nIntel® 10/1000 Gigabyte Ethernet\r\nGráficos\r\nIntel® HD 4400\r\nWebcam\r\nTecnología de seguimiento facial 720p HD, alta sensibilidad con poca luz\r\nDuración de la batería\r\nHasta 10 horas con batería estándar de 3+3 celdas (la verdadera duración de la batería depende del uso)\r\nPeso\r\nA partir de 1,65 kg\r\nPuertos\r\nMini Display Port con audio, VGA, 3 x USB 3.0 (1 siempre encendido), lector de tarjeta 4-en-1, Combo Jack (micrófono / audífono)\r\nMicrófono\r\nMicrófonos duales HD con cancelación de ruido\r\nParlantes\r\nParlantes estéreo con Dolby® Home Theater® v4', 'Procesador\r\nIntel Core i5-4300U Procesador( 1,90GHz 3MB)\r\nSistema Operativo\r\nWindows 7 Professional 64\r\nPantalla\r\n14,0" FHD IPS AntiGlare LED Backlight 1920x1080\r\nPlaca de Video\r\nIntel HD 4400\r\nMemoria\r\n4.0GB PC3-12800 DDR3L SDRAM 1600 MHz\r\nDisco Rígido\r\n500GB 7200 rpm\r\nConectividad\r\nIntel Dual Band Wireless-AC 7260\r\nBluetooth\r\nBluetooth versión 4.0\r\nGarantía\r\nTres años\r\nBatería\r\nPolímero de Litio, 3 celdas\r\nOtros\r\nLector de huellas digitales', '', 2856000, 3),
('MSI60', 'GP60 2PE LEOPARD', 'Windows 8.1\r\nProcesador 4ta generación Intel® Core™ i7/i5\r\nTarjeta gráfica NVIDIA GeForce 840M 2GB VRAM DDR3\r\nPantalla LCD de 15.6" HD (1366x768) /FHD(1920x1080) Antirreflejo\r\nUnidad Híbrida de Estado Sólido (SSD+HDD)\r\nTecnología exclusiva Cooler Boost\r\nMatrix Display expande la visión para una experiencia de juego extrema\r\nTeclado hecho para gamers por SteelSeries\r\nDiseño exclusivo Audio boost para una fidelidad de audio clara como el cristal\r\nAudio de primera calidad con Sound Blaster Cinema\r\nKiller™ E2200 Game Networking para una red más inteligente y rápida para el entretenimiento en línea\r\nExclusiva función MSI Super-Charger', 'Sistema Operativo Windows 8.1\r\nCPU Nuevo procesador 4ta generación Intel® Core™ i7/i5\r\nChipset Intel HM86\r\nMemoria 2 x DDR3L-1600 MHz,max 16GB\r\nPantalla LCD 15.6" HD (1366x768) /FHD(1920x1080) Antirreflejo\r\nGráficos GeForce 840M\r\nMemoria gráfica VRAM DDR3 2GB\r\nDisco rígido (GB) Hasta 128GB SSD+1TB SATA 7200 RPM\r\nUnidad óptica BD Combo / DVD Super Multi\r\nAudio Estéreo\r\nWebcam HD (30cps@720p)\r\nLector de Tarjeta SD\r\nLAN Killer Gb LAN\r\nLAN inalámbrica 802.11 ac\r\nBluetooth Bluetooth v4.0\r\nD-Sub (VGA) 1\r\nHDMI 1\r\nPuertos USB 2.0 2\r\nPuertos USB 3.0 2\r\nEntrada Mic/Salida audífonos 1/1\r\nTeclado Keyboard by SteelSeries\r\nAdaptador AC 120W\r\nBatería 6 Celdas Li-Ion(4400mAH)\r\nDimensiones 383X249.5X32.3~37.6mm\r\nPeso (KG) 2.4Kg(c/batería)', '', 1500000, 3),
('MSI60E', 'GE60 2OE', '• Windows 8.1• El nuevo procesador de 4ta generacion Intel Core i7• Pantalla LCD de 15.6" Full HD (1920x1080) antirreflejo con retroiluminación LED• La tarjeta grafica diferenciada NVIDIA GeForce GTX 765M (con memoria VRAM GDDR5 de 2GB) ofrece excelente calidad de imagenes• La tecnologia exclusiva Cooler Boost 2 mejora la refrigeracion y la acústica• La disposicion de pantalla en matriz expande la vision para un juego extremo• Killer E2200 Game Networking para un networking mejor y mas rapido para el entretenimiento en linea• Teclado hecho para gamers por SteelSeries• Exclusivo diseno Audio boost para un sonido claro con alta fidelidad', 'Sistema Operativo Windows 8.1CPU Intel® Core i7-4700MQ (6M Cache, hasta 3.20 GHz)Chipset Intel HM87Memoria DDR3L,hasta 1600 MHz, 2 ranuras, Max. 16GBPantalla LCD 15.6" Full HD (1920x1080), AntirreflejoGraficos Nvidia GeForce GTX 765MMemoria grafica VRAM 2GB GDDR5Disco rigido (GB) Super RAID hasta 256GB + 750GB HDD 7200rpmUnidad optica BD Combo / DVD Super MultiAudio Audio Boost, 4 parlantes 2W HDWebcam HD (30cps@720p)Lector de Tarjeta SD(XC/HC)LAN Killer Gaming LANLAN inalambrica 802.11 b/g/nBluetooth v4.0D-Sub (VGA) 1HDMI 1(v1.4)Puertos USB 2.0 2Puertos USB 3.0 2Entrada Mic/Salida audífonos 1 /1Teclado Teclado por SteelSeries 103 teclasAdaptador AC 120WBatería 6 CeldasDimensiones 383 x 249.5 x 37.6~32.3mmPeso (KG) 2.4Kg (c/ batería)', '', 1900000, 3),
('MSI60PE', 'GE60 2PE APACHE PRO', 'Windows 8.1Procesador 4ta generacion Intel Core i7Pantalla LCD de 15.6" Full HD (1920x1080) antirreflejo con retroiluminacion LEDTarjeta grafica diferenciada NVIDIA GeForce GTX 860M que ofrece una calidad de imagen muy detalladaSteelSeries Engine personaliza cada tecla y dispositivo para lograr un estilo de juego personalXSplit Gamecaster para grabar facilmente los momentos de juego, transmitirlos y compartir las sesiones de juego en YouTube, Twitch, UStream y masAngulo de vision amplioSuper RAID con 2 SSD RAID0 ofrece mas de 900MB/s de velocidad de lecturaExclusiva tecnologia Cooler Boost permite reducir un 5%~10% la temperatura del sistemaKiller E2200 Game Networking para una red más inteligente y rápida para el entretenimiento en líneaTeclado hecho para gamers por SteelSeriesMatrix Display expande la vision para una experiencia de juego extremaExclusivo diseno Audio boost para una fidelidad de audio clara como el cristal', 'Sistema Operativo Windows 8.1CPU Procesador de 4ta generacion Intel Core i7 ProcessorChipset Intel HM86Memoria Hasta 16GB x 2 DIMMsPantalla LCD 15.6" Full HD (1920x1080), AntirreflejoGraficos GeForce GTX 860MMemoria grafica VRAM GDDR5 2GBDisco rigido (GB) Hasta 256GB Super RAID* + 750GB HDD 7200rpmUnidad optica BD Combo / DVD Super MultiAudio Sonido por Dynaudio, 2 parlantes de 2.1 canales + subwooferWebcam HD (30cps@720p)Lector de Tarjeta SD (XC/HC)LAN Killer™ E2200 Game Networking LANLAN inalambrica 802.11 b/g/ nBluetooth Bluetooth v4.0D-Sub (VGA) 1HDMI 1Puertos USB 2.0 2Puertos USB 3.0 2Entrada Mic/Salida audifonos 1/1Teclado Teclado por SteelSeries 103 teclasAdaptador AC 120WBateria 6 Celdas Li-Ion (4400mAh 49Wh)Dimensiones 383 x 249.5 x 37.6~32.3mmPeso (KG) 2.6Kg (c/ bateria)', '', 2450000, 3),
('MSI61C', 'CX61 2OC', ' Windows 8.1• El nuevo procesador de 4ta. Generacion Intel Core i• NVIDIA GeForce GT720M 2G VRAM DDR3• La tecnologia GPU Boost ofrece un mejor equilibrio entre duracion de bateria y desempeno• Soporta HDMI 1.4 para imagenes HD• La ultima tecnologia Bluetooth 4.0• Pantalla 15.6" LED antirreflejo• Webcam integrada de 720P HD que ofrece la mejor experiencia en llamadas de video• La ultima y mas veloz tecnologia de transferencia de datos USB 3.0', 'Sistema Operativo Windows 8.1CPU El nuevo procesador de 4ta. Generacion Intel Core Chipset Intel HM86Memoria DDR3, hasta 1600MHzPantalla LCD 15.6" HD (1366x768) con retroiluminación LEDGraficos NVIDIA GeForce GT720MMemoria grafica VRAM DDR3 2GBDisco rigido (GB) 750GB/640/500GB SATA 5400rpmUnidad optica BD Combo / DVD Super MultiAudio 2Webcam HD (30cps@720p)Lector de Tarjeta SD(HC/XC)/MMC/MSLAN Gigabit LANLAN inalambrica 802.11 b/g/nBluetooth Bluetooth v4.0D-Sub (VGA) 1HDMI 1Puertos USB 2.0 1Puertos USB 3.0 2Entrada Mic/Salida audifonos 1 / 1Teclado 102 teclasAdaptador AC 95WBatería 6-CeldasAdministración de Energía Turbo Battery+Dimensiones 383(W)x249.5(D)x32.3~37.6(H)mmPeso (KG) 2.4Kg (c/ batería)', '', 1500000, 3),
('MSI61PC', 'CX61 2PC', 'Windows 8.1Procesador 4ta generacion Intel Core i7Pantalla LCD de 15.6" Full HD (1920x1080) antirreflejo con retroiluminacion LEDTarjeta grafica diferenciada NVIDIA GeForce GTX 860M que ofrece una calidad de imagen muy detalladaSteelSeries Engine personaliza cada tecla y dispositivo para lograr un estilo de juego personalXSplit Gamecaster para grabar facilmente los momentos de juego, transmitirlos y compartir las sesiones de juego en YouTube, Twitch, UStream y mas Angulo de vision amplioSuper RAID con 2 SSD RAID0 ofrece mas de 900MB/s de velocidad de lecturaExclusiva tecnologia Cooler Boost permite reducir un 5%~10% la temperatura del sistemaKiller E2200 Game Networking para una red mas inteligente y rapida para el entretenimiento en lineaTeclado hecho para gamers por SteelSeriesMatrix Display expande la vision para una experiencia de juego extremaExclusivo diseno Audio boost para una fidelidad de audio clara como el cristal', 'Sistema Operativo Windows 8.1CPU Procesador de 4ta generacion Intel Core i7 ProcessorChipset Intel HM86Memoria Hasta 16GB x 2 DIMMsPantalla LCD 15.6" Full HD (1920x1080), AntirreflejoGraficos GeForce GTX 860M Memoria grafica VRAM GDDR5 2GBDisco rigido (GB) Hasta 256GB Super RAID + 750GB HDD 7200rpm Unidad optica BD Combo / DVD Super MultiAudio Sonido por Dynaudio, 2 parlantes de 2.1 canales + subwooferWebcam HD (30cps@720p)Lector de Tarjeta SD (XC/HC)LAN Killer E2200 Game Networking LANLAN inalambrica 802.11 b/g/ nBluetooth Bluetooth v4.0D-Sub (VGA) 1HDMI 1Puertos USB 2.0 2Puertos USB 3.0 2Entrada Mic/Salida audifonos 1/1Teclado Teclado por SteelSeries 103 teclasAdaptador AC 120WBatería 6 Celdas Li-Ion (4400mAh 49Wh)Dimensiones 383 x 249.5 x 37.6~32.3mmPeso (KG) 2.6Kg (c/ batería)', '', 1400000, 3);

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
(12, 'Acer AOD2', 0);

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
(12, 'asus', '2100', 'calle');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Rol` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cedula`, `Nombre`, `Apellido`, `Telefono`, `Contrasena`, `Rol`) VALUES
('1', 'admin', 'admin', '123', 'admin', 'admin'),
('2', 'contador', 'contador', '123', 'contador', 'contador'),
('3', 'cajero', 'cajero', '123', 'cajero', 'cajero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activo1`
--
ALTER TABLE `activo1`
 ADD PRIMARY KEY (`ID`), ADD KEY `Cedula` (`Cedula`);

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
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
 ADD PRIMARY KEY (`num_factura`,`cedula`,`codigo`), ADD KEY `num_factura` (`num_factura`), ADD KEY `cedula` (`cedula`), ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
 ADD PRIMARY KEY (`num_factura`,`cliente`), ADD KEY `cliente` (`cliente`);

--
-- Indices de la tabla `gasto`
--
ALTER TABLE `gasto`
 ADD PRIMARY KEY (`ID`), ADD KEY `Cedula` (`Cedula`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
 ADD PRIMARY KEY (`ID`), ADD KEY `Cedula` (`Cedula`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
 ADD PRIMARY KEY (`id`), ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `pasivo`
--
ALTER TABLE `pasivo`
 ADD PRIMARY KEY (`ID`), ADD KEY `Cedula` (`Cedula`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
 ADD PRIMARY KEY (`cod_proveedor`), ADD KEY `codgio_proveedor` (`cod_proveedor`,`cod_poducto`), ADD KEY `cod_poducto` (`cod_poducto`);

--
-- Indices de la tabla `proveedo`
--
ALTER TABLE `proveedo`
 ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`Cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activo1`
--
ALTER TABLE `activo1`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `costos`
--
ALTER TABLE `costos`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `gasto`
--
ALTER TABLE `gasto`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `pasivo`
--
ALTER TABLE `pasivo`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
