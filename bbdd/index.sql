-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.23 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for smw_cartelera
CREATE DATABASE IF NOT EXISTS `smw_cartelera` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `smw_cartelera`;


-- Dumping structure for table smw_cartelera.funciones
CREATE TABLE IF NOT EXISTS `funciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_titulo` int(11) DEFAULT NULL,
  `id_sala` int(11) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '0',
  `fecha_alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_funcion_titulo` (`id_titulo`),
  KEY `fk_funcion_sala` (`id_sala`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- Dumping data for table smw_cartelera.funciones: ~28 rows (approximately)
/*!40000 ALTER TABLE `funciones` DISABLE KEYS */;
INSERT INTO `funciones` (`id`, `id_titulo`, `id_sala`, `hora`, `fecha`, `estado`, `fecha_alta`) VALUES
	(1, 8, 1, '22:30:00', '2019-09-30', 0, '2019-09-07 17:14:42'),
	(2, 1, 9, '09:30:00', '2019-09-10', 0, '2019-09-07 17:19:12'),
	(3, 2, 1, '10:30:00', '2019-09-10', 0, '2019-09-07 17:19:12'),
	(4, 3, 2, '14:30:00', '2019-09-10', 0, '2019-09-07 17:19:12'),
	(5, 5, 3, '12:45:00', '2019-09-10', 0, '2019-09-07 17:19:12'),
	(6, 6, 4, '09:35:00', '2019-09-10', 0, '2019-09-07 17:19:12'),
	(7, 7, 1, '09:55:00', '2019-09-11', 0, '2019-09-07 17:19:12'),
	(8, 8, 10, '18:30:00', '2019-09-11', 0, '2019-09-07 17:19:12'),
	(9, 9, 9, '20:30:00', '2019-09-11', 0, '2019-09-07 17:19:12'),
	(10, 10, 8, '21:05:00', '2019-09-11', 0, '2019-09-07 17:19:12'),
	(11, 11, 5, '22:10:00', '2019-09-11', 0, '2019-09-07 17:19:12'),
	(12, 12, 6, '11:30:00', '2019-09-12', 0, '2019-09-07 17:19:12'),
	(13, 13, 7, '18:00:00', '2019-09-12', 0, '2019-09-07 17:19:12'),
	(14, 14, 3, '19:00:00', '2019-09-12', 0, '2019-09-07 17:19:12'),
	(15, 1, 10, '16:00:00', '2019-09-12', 0, '2019-09-07 17:19:12'),
	(16, 2, 1, '12:48:00', '2019-09-12', 0, '2019-09-07 17:19:12'),
	(17, 3, 2, '00:30:00', '2019-09-13', 0, '2019-09-07 17:19:12'),
	(18, 4, 8, '13:30:00', '2019-09-13', 0, '2019-09-07 17:19:13'),
	(19, 5, 2, '13:45:00', '2019-09-13', 0, '2019-09-07 17:19:13'),
	(20, 6, 4, '13:50:00', '2019-09-13', 0, '2019-09-07 17:19:13'),
	(21, 1, 1, '00:00:09', '0000-00-00', 1, '2019-09-09 08:23:41'),
	(22, 1, 1, '00:00:00', '0000-00-00', 1, '2019-09-09 08:26:00'),
	(23, 1, 1, '00:00:09', '0000-00-00', 1, '2019-09-09 08:37:05'),
	(24, 1, 1, '00:00:09', '0000-00-00', 1, '2019-09-09 08:39:26'),
	(25, 1, 1, '00:00:09', '0000-00-00', 1, '2019-09-09 08:40:51'),
	(26, 1, 1, '00:00:09', '0000-00-00', 1, '2019-09-09 08:50:22'),
	(27, 1, 1, '00:00:09', '0000-00-00', 1, '2019-09-09 08:51:13'),
	(28, 1, 1, '00:20:19', '0000-00-00', 1, '2019-09-09 09:13:39'),
	(29, 1, 1, '00:20:19', '0000-00-00', 1, '2019-09-09 09:13:54'),
	(30, 3, 1, '18:30:00', '2019-09-09', 0, '2019-09-09 09:15:28'),
	(31, 8, 1, '11:35:00', '2019-09-12', 0, '2019-09-11 08:28:08');
/*!40000 ALTER TABLE `funciones` ENABLE KEYS */;


-- Dumping structure for table smw_cartelera.generos
CREATE TABLE IF NOT EXISTS `generos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '0',
  `fecha_alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table smw_cartelera.generos: ~14 rows (approximately)
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` (`id`, `nombre`, `estado`, `fecha_alta`) VALUES
	(1, 'Comedia', 0, '2019-09-05 01:07:34'),
	(2, 'Drama', 0, '2019-09-05 01:07:37'),
	(3, 'Accion', 0, '2019-09-05 01:07:41'),
	(4, 'Ciencia Ficcion', 0, '2019-09-05 01:07:48'),
	(5, 'Acción', 0, '2019-09-06 08:24:25'),
	(6, 'Ciencia ficción', 0, '2019-09-06 08:24:25'),
	(7, 'Comedia', 0, '2019-09-06 08:24:25'),
	(8, 'Drama', 0, '2019-09-06 08:24:25'),
	(9, 'Fantasía', 0, '2019-09-06 08:24:25'),
	(10, 'Melodrama', 0, '2019-09-06 08:24:25'),
	(11, 'Musical', 0, '2019-09-06 08:24:25'),
	(12, 'Romance', 0, '2019-09-06 08:24:25'),
	(13, 'Suspenso', 0, '2019-09-06 08:24:25'),
	(14, 'Terror', 0, '2019-09-06 08:24:25');
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;


-- Dumping structure for table smw_cartelera.paises
CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '0',
  `fecha_alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=utf8;

-- Dumping data for table smw_cartelera.paises: ~194 rows (approximately)
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` (`id`, `nombre`, `estado`, `fecha_alta`) VALUES
	(1, 'Afganistán', 0, '2019-09-06 08:39:50'),
	(2, 'Albania', 0, '2019-09-06 08:39:50'),
	(3, 'Alemania', 0, '2019-09-06 08:39:50'),
	(4, 'Andorra', 0, '2019-09-06 08:39:50'),
	(5, 'Angola', 0, '2019-09-06 08:39:50'),
	(6, 'Antigua y Barbuda', 0, '2019-09-06 08:39:50'),
	(7, 'Arabia Saudita', 0, '2019-09-06 08:39:50'),
	(8, 'Argelia', 0, '2019-09-06 08:39:50'),
	(9, 'Argentina', 0, '2019-09-06 08:39:50'),
	(10, 'Armenia', 0, '2019-09-06 08:39:50'),
	(11, 'Australia', 0, '2019-09-06 08:39:50'),
	(12, 'Austria', 0, '2019-09-06 08:39:50'),
	(13, 'Azerbaiyán', 0, '2019-09-06 08:39:50'),
	(14, 'Bahamas', 0, '2019-09-06 08:39:50'),
	(15, 'Bangladés', 0, '2019-09-06 08:39:50'),
	(16, 'Barbados', 0, '2019-09-06 08:39:50'),
	(17, 'Baréin', 0, '2019-09-06 08:39:50'),
	(18, 'Bélgica', 0, '2019-09-06 08:39:50'),
	(19, 'Belice', 0, '2019-09-06 08:39:50'),
	(20, 'Benín', 0, '2019-09-06 08:39:50'),
	(21, 'Bielorrusia', 0, '2019-09-06 08:39:50'),
	(22, 'Birmania', 0, '2019-09-06 08:39:50'),
	(23, 'Bolivia', 0, '2019-09-06 08:39:50'),
	(24, 'Bosnia y Herzegovina', 0, '2019-09-06 08:39:50'),
	(25, 'Botsuana', 0, '2019-09-06 08:39:50'),
	(26, 'Brasil', 0, '2019-09-06 08:39:50'),
	(27, 'Brunéi', 0, '2019-09-06 08:39:50'),
	(28, 'Bulgaria', 0, '2019-09-06 08:39:50'),
	(29, 'Burkina Faso', 0, '2019-09-06 08:39:50'),
	(30, 'Burundi', 0, '2019-09-06 08:39:50'),
	(31, 'Bután', 0, '2019-09-06 08:39:50'),
	(32, 'Cabo Verde', 0, '2019-09-06 08:39:50'),
	(33, 'Camboya', 0, '2019-09-06 08:39:50'),
	(34, 'Camerún', 0, '2019-09-06 08:39:50'),
	(35, 'Canadá', 0, '2019-09-06 08:39:50'),
	(36, 'Catar', 0, '2019-09-06 08:39:50'),
	(37, 'Chad', 0, '2019-09-06 08:39:50'),
	(38, 'Chile', 0, '2019-09-06 08:39:50'),
	(39, 'China', 0, '2019-09-06 08:39:50'),
	(40, 'Chipre', 0, '2019-09-06 08:39:50'),
	(41, 'Ciudad del Vaticano', 0, '2019-09-06 08:39:50'),
	(42, 'Colombia', 0, '2019-09-06 08:39:51'),
	(43, 'Comoras', 0, '2019-09-06 08:39:51'),
	(44, 'Corea del Norte', 0, '2019-09-06 08:39:51'),
	(45, 'Corea del Sur', 0, '2019-09-06 08:39:51'),
	(46, 'Costa de Marfil', 0, '2019-09-06 08:39:51'),
	(47, 'Costa Rica', 0, '2019-09-06 08:39:51'),
	(48, 'Croacia', 0, '2019-09-06 08:39:51'),
	(49, 'Cuba', 0, '2019-09-06 08:39:51'),
	(50, 'Dinamarca', 0, '2019-09-06 08:39:51'),
	(51, 'Dominica', 0, '2019-09-06 08:39:51'),
	(52, 'Ecuador', 0, '2019-09-06 08:39:51'),
	(53, 'Egipto', 0, '2019-09-06 08:39:51'),
	(54, 'El Salvador', 0, '2019-09-06 08:39:51'),
	(55, 'Emiratos Árabes Unidos', 0, '2019-09-06 08:39:51'),
	(56, 'Eritrea', 0, '2019-09-06 08:39:51'),
	(57, 'Eslovaquia', 0, '2019-09-06 08:39:51'),
	(58, 'Eslovenia', 0, '2019-09-06 08:39:51'),
	(59, 'España', 0, '2019-09-06 08:39:51'),
	(60, 'Estados Unidos', 0, '2019-09-06 08:39:51'),
	(61, 'Estonia', 0, '2019-09-06 08:39:51'),
	(62, 'Etiopía', 0, '2019-09-06 08:39:51'),
	(63, 'Filipinas', 0, '2019-09-06 08:39:51'),
	(64, 'Finlandia', 0, '2019-09-06 08:39:51'),
	(65, 'Fiyi', 0, '2019-09-06 08:39:51'),
	(66, 'Francia', 0, '2019-09-06 08:39:51'),
	(67, 'Gabón', 0, '2019-09-06 08:39:51'),
	(68, 'Gambia', 0, '2019-09-06 08:39:51'),
	(69, 'Georgia', 0, '2019-09-06 08:39:51'),
	(70, 'Ghana', 0, '2019-09-06 08:39:51'),
	(71, 'Granada', 0, '2019-09-06 08:39:51'),
	(72, 'Grecia', 0, '2019-09-06 08:39:51'),
	(73, 'Guatemala', 0, '2019-09-06 08:39:51'),
	(74, 'Guyana', 0, '2019-09-06 08:39:51'),
	(75, 'Guinea', 0, '2019-09-06 08:39:51'),
	(76, 'Guinea ecuatorial', 0, '2019-09-06 08:39:51'),
	(77, 'Guinea-Bisáu', 0, '2019-09-06 08:39:51'),
	(78, 'Haití', 0, '2019-09-06 08:39:51'),
	(79, 'Honduras', 0, '2019-09-06 08:39:51'),
	(80, 'Hungría', 0, '2019-09-06 08:39:51'),
	(81, 'India', 0, '2019-09-06 08:39:51'),
	(82, 'Indonesia', 0, '2019-09-06 08:39:51'),
	(83, 'Irak', 0, '2019-09-06 08:39:51'),
	(84, 'Irán', 0, '2019-09-06 08:39:51'),
	(85, 'Irlanda', 0, '2019-09-06 08:39:51'),
	(86, 'Islandia', 0, '2019-09-06 08:39:51'),
	(87, 'Islas Marshall', 0, '2019-09-06 08:39:52'),
	(88, 'Islas Salomón', 0, '2019-09-06 08:39:52'),
	(89, 'Israel', 0, '2019-09-06 08:39:52'),
	(90, 'Italia', 0, '2019-09-06 08:39:52'),
	(91, 'Jamaica', 0, '2019-09-06 08:39:52'),
	(92, 'Japón', 0, '2019-09-06 08:39:52'),
	(93, 'Jordania', 0, '2019-09-06 08:39:52'),
	(94, 'Kazajistán', 0, '2019-09-06 08:39:52'),
	(95, 'Kenia', 0, '2019-09-06 08:39:52'),
	(96, 'Kirguistán', 0, '2019-09-06 08:39:52'),
	(97, 'Kiribati', 0, '2019-09-06 08:39:52'),
	(98, 'Kuwait', 0, '2019-09-06 08:39:52'),
	(99, 'Laos', 0, '2019-09-06 08:39:52'),
	(100, 'Lesoto', 0, '2019-09-06 08:39:52'),
	(101, 'Letonia', 0, '2019-09-06 08:39:52'),
	(102, 'Líbano', 0, '2019-09-06 08:39:52'),
	(103, 'Liberia', 0, '2019-09-06 08:39:52'),
	(104, 'Libia', 0, '2019-09-06 08:39:52'),
	(105, 'Liechtenstein', 0, '2019-09-06 08:39:52'),
	(106, 'Lituania', 0, '2019-09-06 08:39:52'),
	(107, 'Luxemburgo', 0, '2019-09-06 08:39:52'),
	(108, 'Macedonia del Norte', 0, '2019-09-06 08:39:52'),
	(109, 'Madagascar', 0, '2019-09-06 08:39:52'),
	(110, 'Malasia', 0, '2019-09-06 08:39:52'),
	(111, 'Malaui', 0, '2019-09-06 08:39:52'),
	(112, 'Maldivas', 0, '2019-09-06 08:39:52'),
	(113, 'Malí', 0, '2019-09-06 08:39:52'),
	(114, 'Malta', 0, '2019-09-06 08:39:52'),
	(115, 'Marruecos', 0, '2019-09-06 08:39:52'),
	(116, 'Mauricio', 0, '2019-09-06 08:39:52'),
	(117, 'Mauritania', 0, '2019-09-06 08:39:52'),
	(118, 'México', 0, '2019-09-06 08:39:52'),
	(119, 'Micronesia', 0, '2019-09-06 08:39:52'),
	(120, 'Moldavia', 0, '2019-09-06 08:39:52'),
	(121, 'Mónaco', 0, '2019-09-06 08:39:52'),
	(122, 'Mongolia', 0, '2019-09-06 08:39:52'),
	(123, 'Montenegro', 0, '2019-09-06 08:39:52'),
	(124, 'Mozambique', 0, '2019-09-06 08:39:52'),
	(125, 'Namibia', 0, '2019-09-06 08:39:52'),
	(126, 'Nauru', 0, '2019-09-06 08:39:52'),
	(127, 'Nepal', 0, '2019-09-06 08:39:52'),
	(128, 'Nicaragua', 0, '2019-09-06 08:39:52'),
	(129, 'Níger', 0, '2019-09-06 08:39:52'),
	(130, 'Nigeria', 0, '2019-09-06 08:39:52'),
	(131, 'Noruega', 0, '2019-09-06 08:39:52'),
	(132, 'Nueva Zelanda', 0, '2019-09-06 08:39:52'),
	(133, 'Omán', 0, '2019-09-06 08:39:52'),
	(134, 'Países Bajos', 0, '2019-09-06 08:39:52'),
	(135, 'Pakistán', 0, '2019-09-06 08:39:52'),
	(136, 'Palaos', 0, '2019-09-06 08:39:52'),
	(137, 'Panamá', 0, '2019-09-06 08:39:52'),
	(138, 'Papúa Nueva Guinea', 0, '2019-09-06 08:39:52'),
	(139, 'Paraguay', 0, '2019-09-06 08:39:52'),
	(140, 'Perú', 0, '2019-09-06 08:39:52'),
	(141, 'Polonia', 0, '2019-09-06 08:39:53'),
	(142, 'Portugal', 0, '2019-09-06 08:39:53'),
	(143, 'Reino Unido', 0, '2019-09-06 08:39:53'),
	(144, 'República Centroafricana', 0, '2019-09-06 08:39:53'),
	(145, 'República Checa', 0, '2019-09-06 08:39:53'),
	(146, 'República del Congo', 0, '2019-09-06 08:39:53'),
	(147, 'República Democrática del Congo', 0, '2019-09-06 08:39:53'),
	(148, 'República Dominicana', 0, '2019-09-06 08:39:53'),
	(149, 'República Sudafricana', 0, '2019-09-06 08:39:53'),
	(150, 'Ruanda', 0, '2019-09-06 08:39:53'),
	(151, 'Rumanía', 0, '2019-09-06 08:39:53'),
	(152, 'Rusia', 0, '2019-09-06 08:39:53'),
	(153, 'Samoa', 0, '2019-09-06 08:39:53'),
	(154, 'San Cristóbal y Nieves', 0, '2019-09-06 08:39:53'),
	(155, 'San Marino', 0, '2019-09-06 08:39:53'),
	(156, 'San Vicente y las Granadinas', 0, '2019-09-06 08:39:53'),
	(157, 'Santa Lucía', 0, '2019-09-06 08:39:53'),
	(158, 'Santo Tomé y Príncipe', 0, '2019-09-06 08:39:53'),
	(159, 'Senegal', 0, '2019-09-06 08:39:53'),
	(160, 'Serbia', 0, '2019-09-06 08:39:53'),
	(161, 'Seychelles', 0, '2019-09-06 08:39:53'),
	(162, 'Sierra Leona', 0, '2019-09-06 08:39:53'),
	(163, 'Singapur', 0, '2019-09-06 08:39:53'),
	(164, 'Siria', 0, '2019-09-06 08:39:53'),
	(165, 'Somalia', 0, '2019-09-06 08:39:53'),
	(166, 'Sri Lanka', 0, '2019-09-06 08:39:53'),
	(167, 'Suazilandia', 0, '2019-09-06 08:39:53'),
	(168, 'Sudán', 0, '2019-09-06 08:39:53'),
	(169, 'Sudán del Sur', 0, '2019-09-06 08:39:53'),
	(170, 'Suecia', 0, '2019-09-06 08:39:53'),
	(171, 'Suiza', 0, '2019-09-06 08:39:53'),
	(172, 'Surinam', 0, '2019-09-06 08:39:53'),
	(173, 'Tailandia', 0, '2019-09-06 08:39:53'),
	(174, 'Tanzania', 0, '2019-09-06 08:39:53'),
	(175, 'Tayikistán', 0, '2019-09-06 08:39:53'),
	(176, 'Timor Oriental', 0, '2019-09-06 08:39:53'),
	(177, 'Togo', 0, '2019-09-06 08:39:53'),
	(178, 'Tonga', 0, '2019-09-06 08:39:53'),
	(179, 'Trinidad y Tobago', 0, '2019-09-06 08:39:53'),
	(180, 'Túnez', 0, '2019-09-06 08:39:53'),
	(181, 'Turkmenistán', 0, '2019-09-06 08:39:53'),
	(182, 'Turquía', 0, '2019-09-06 08:39:53'),
	(183, 'Tuvalu', 0, '2019-09-06 08:39:53'),
	(184, 'Ucrania', 0, '2019-09-06 08:39:53'),
	(185, 'Uganda', 0, '2019-09-06 08:39:53'),
	(186, 'Uruguay', 0, '2019-09-06 08:39:53'),
	(187, 'Uzbekistán', 0, '2019-09-06 08:39:53'),
	(188, 'Vanuatu', 0, '2019-09-06 08:39:53'),
	(189, 'Venezuela', 0, '2019-09-06 08:39:53'),
	(190, 'Vietnam', 0, '2019-09-06 08:39:53'),
	(191, 'Yemen', 0, '2019-09-06 08:39:53'),
	(192, 'Yibuti', 0, '2019-09-06 08:39:53'),
	(193, 'Zambia', 0, '2019-09-06 08:39:53'),
	(194, 'Zimbabue', 0, '2019-09-06 08:39:53');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;


-- Dumping structure for table smw_cartelera.salas
CREATE TABLE IF NOT EXISTS `salas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '0',
  `fecha_alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Dumping data for table smw_cartelera.salas: ~10 rows (approximately)
/*!40000 ALTER TABLE `salas` DISABLE KEYS */;
INSERT INTO `salas` (`id`, `nombre`, `estado`, `fecha_alta`) VALUES
	(1, 'Sala Uno adsas', 0, '2019-09-07 17:10:03'),
	(2, 'Sala Dos', 0, '2019-09-07 17:10:03'),
	(3, 'Sala Tres', 0, '2019-09-07 17:10:03'),
	(4, 'Sala Cuatro', 0, '2019-09-07 17:10:03'),
	(5, 'Sala Cinco', 0, '2019-09-07 17:10:03'),
	(6, 'Sala Seis', 0, '2019-09-07 17:10:03'),
	(7, 'Sala Siete', 0, '2019-09-07 17:10:03'),
	(8, 'Sala Ocho', 0, '2019-09-07 17:10:03'),
	(9, 'Sala Nueve', 0, '2019-09-07 17:10:03'),
	(10, 'Sala Diez 10', 0, '2019-09-07 17:10:03'),
	(11, 'Sala Ochenta y dos', 1, '2019-09-10 01:29:28');
/*!40000 ALTER TABLE `salas` ENABLE KEYS */;


-- Dumping structure for table smw_cartelera.titulos
CREATE TABLE IF NOT EXISTS `titulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `id_pais_origen` int(11) DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `idioma_hablado` varchar(50) DEFAULT NULL,
  `idioma_subtitulo` varchar(50) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT '0',
  `fecha_alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_titulo_pais` (`id_pais_origen`),
  KEY `fk_titulo_genero` (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Dumping data for table smw_cartelera.titulos: ~17 rows (approximately)
/*!40000 ALTER TABLE `titulos` DISABLE KEYS */;
INSERT INTO `titulos` (`id`, `nombre`, `id_pais_origen`, `id_genero`, `idioma_hablado`, `idioma_subtitulo`, `duracion`, `estado`, `fecha_alta`) VALUES
	(1, 'Pelic', 2, 1, 'Español', 'Español', 1, 1, '2019-09-02 22:52:17'),
	(2, 'Peli 2', 26, 2, 'Portugues', 'Ingles', 90, 1, '2019-09-02 22:56:33'),
	(3, 'Untitled John Brinkley Biopic', 60, 1, 'Ingles', 'Español', 90, 1, '2019-09-07 17:02:20'),
	(4, 'Sherlock Holmes 8', 60, 2, 'Ingles', '', 120, 0, '2019-09-07 17:07:42'),
	(5, 'Sherlock Holmes', 9, 3, 'Japones', 'Español', 180, 0, '2019-09-07 17:07:42'),
	(6, 'The Voyage of Doctor Dolittle', 26, 5, 'Ingles', 'Español', 60, 0, '2019-09-07 17:07:42'),
	(7, 'Avengers: Endgame', 22, 2, 'Ingles', 'Portugues', 90, 0, '2019-09-07 17:07:42'),
	(8, 'Iron Man', 38, 4, 'Japones', 'Español', 120, 0, '2019-09-07 17:07:42'),
	(9, 'Avengers: Infinity War', 64, 9, 'Ingles', 'Portugues', 100, 0, '2019-09-07 17:07:42'),
	(10, 'Spider-Man: De regreso a casa', 14, 14, 'Japones', 'Español', 90, 0, '2019-09-07 17:07:42'),
	(11, 'Capitán América: Civil War', 60, 12, 'Ingles', 'Portugues', 150, 0, '2019-09-07 17:07:42'),
	(12, 'Avengers: Era de Ultrón', 18, 13, 'Japones', 'Español', 80, 0, '2019-09-07 17:07:42'),
	(13, 'El juez', 32, 2, 'Ingles', 'Español', 72, 0, '2019-09-07 17:07:42'),
	(14, 'Chef: La receta de la felicidad', 24, 13, 'Japones', 'Portugues', 65, 0, '2019-09-07 17:07:42'),
	(15, 'AAAA', 19, 1, 'Español', '', 60, 0, '2019-09-10 00:33:06'),
	(16, 'Asdadas', 9, 3, 'Ingles', 'Portugues', 90, 0, '2019-09-10 00:35:07'),
	(17, 'A asdas qw qwd', 9, 13, 'Español', 'Portugues', 120, 0, '2019-09-10 01:03:42'),
	(18, 'Iron Man', 60, 3, 'Español', '', 90, 0, '2019-09-11 08:30:56');
/*!40000 ALTER TABLE `titulos` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
