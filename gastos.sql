-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2009 a las 10:26:00
-- Versión del servidor: 5.0.67
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gastos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) collate utf8_bin NOT NULL default '0',
  `ip_address` varchar(16) collate utf8_bin NOT NULL default '0',
  `user_agent` varchar(150) collate utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcar la base de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('62d011c5c18984bd6a830361ad65b376', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv', 1249494391, 0x613a393a7b733a31303a2244585f757365725f6964223b733a313a2234223b733a31313a2244585f757365726e616d65223b733a343a226b696b65223b733a31303a2244585f726f6c655f6964223b733a313a2231223b733a31323a2244585f726f6c655f6e616d65223b733a343a2255736572223b733a31383a2244585f706172656e745f726f6c65735f6964223b613a303a7b7d733a32303a2244585f706172656e745f726f6c65735f6e616d65223b613a303a7b7d733a31333a2244585f7065726d697373696f6e223b613a303a7b7d733a32313a2244585f706172656e745f7065726d697373696f6e73223b613a303a7b7d733a31323a2244585f6c6f676765645f696e223b733a313a2231223b7d),
('d7cf37e74dcbe288d7bf4e19001f56c3', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv', 1249419485, 0x613a393a7b733a31303a2244585f757365725f6964223b733a313a2234223b733a31313a2244585f757365726e616d65223b733a343a226b696b65223b733a31303a2244585f726f6c655f6964223b733a313a2231223b733a31323a2244585f726f6c655f6e616d65223b733a343a2255736572223b733a31383a2244585f706172656e745f726f6c65735f6964223b613a303a7b7d733a32303a2244585f706172656e745f726f6c65735f6e616d65223b613a303a7b7d733a31333a2244585f7065726d697373696f6e223b613a303a7b7d733a32313a2244585f706172656e745f7065726d697373696f6e73223b613a303a7b7d733a31323a2244585f6c6f676765645f696e223b733a313a2231223b7d),
('95f696c0f514f0816ca2ba864cf6e4db', '127.0.0.1', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; es-AR; rv', 1249565034, 0x613a393a7b733a31303a2244585f757365725f6964223b733a313a2234223b733a31313a2244585f757365726e616d65223b733a343a226b696b65223b733a31303a2244585f726f6c655f6964223b733a313a2231223b733a31323a2244585f726f6c655f6e616d65223b733a343a2255736572223b733a31383a2244585f706172656e745f726f6c65735f6964223b613a303a7b7d733a32303a2244585f706172656e745f726f6c65735f6e616d65223b613a303a7b7d733a31333a2244585f7065726d697373696f6e223b613a303a7b7d733a32313a2244585f706172656e745f7065726d697373696f6e73223b613a303a7b7d733a31323a2244585f6c6f676765645f696e223b733a313a2231223b7d);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itexa_cliente`
--

DROP TABLE IF EXISTS `itexa_cliente`;
CREATE TABLE IF NOT EXISTS `itexa_cliente` (
  `ID` int(5) NOT NULL auto_increment,
  `NOMBRE` varchar(250) NOT NULL,
  `CUIT` varchar(50) default NULL,
  `DIRECCION` varchar(200) default NULL,
  `TELEFONO` varchar(50) default NULL,
  `CELULAR` varchar(50) default NULL,
  `ENCARGADO` varchar(100) default NULL,
  `EMAIL` varchar(200) default NULL,
  `INGRESOSBRUTOS` varchar(50) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `itexa_cliente`
--

INSERT INTO `itexa_cliente` (`ID`, `NOMBRE`, `CUIT`, `DIRECCION`, `TELEFONO`, `CELULAR`, `ENCARGADO`, `EMAIL`, `INGRESOSBRUTOS`) VALUES
(1, 'Forunculo SRL', '123456789', 'Lib. 44 N', '4215454', '154032132', 'Esteban Quito', 'forun@culo.com', '123456789'),
(2, 'Agapito SRL', '311214454', '', '', '', '', '', ''),
(3, 'Barracuda Software', '32132465', '', '', '', '', '', ''),
(4, 'Chrome SRL', '2112454', '', '', '', '', '', ''),
(5, 'Dynamic Soft', '214548', '', '', '', '', '', ''),
(6, 'Solutions INC', '231321564', 'Lib 44 N', '4215454', '215454', 'Ramon Cajal', 'aaa@aa.com', '151354354'),
(7, 'Purungundin', '5454587', '', '', '', '', '', ''),
(8, 'Agapito Gil SA', '2123213', '', '', '', '', '', ''),
(9, 'Yumanyi SRL', '231321', '', '', '', '', '', ''),
(10, 'Monicaco Soft', '32132', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itexa_comision`
--

DROP TABLE IF EXISTS `itexa_comision`;
CREATE TABLE IF NOT EXISTS `itexa_comision` (
  `ID` int(10) NOT NULL auto_increment,
  `FECHAFACTURA` date NOT NULL,
  `NROFAC` varchar(20) NOT NULL,
  `IDCLIENTE` int(11) NOT NULL,
  `PXCOSTO` float default NULL,
  `PXVENTA` float NOT NULL,
  `IVACOMPRA` float default NULL,
  `IVAVENTA` float NOT NULL,
  `COMISIONXVTA` float NOT NULL,
  `GANANCIA` float NOT NULL,
  `IVADEBITO` float NOT NULL,
  `COMENTARIO` mediumtext NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `itexa_comision`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL auto_increment,
  `ip_address` varchar(40) collate utf8_bin NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `login_attempts`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL auto_increment,
  `role_id` int(11) NOT NULL,
  `data` text collate utf8_bin,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `permissions`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `name` varchar(30) collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'User'),
(2, 0, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `role_id` int(11) NOT NULL default '1',
  `username` varchar(25) collate utf8_bin NOT NULL,
  `password` varchar(34) collate utf8_bin NOT NULL,
  `email` varchar(100) collate utf8_bin NOT NULL,
  `banned` tinyint(1) NOT NULL default '0',
  `ban_reason` varchar(255) collate utf8_bin default NULL,
  `newpass` varchar(34) collate utf8_bin default NULL,
  `newpass_key` varchar(32) collate utf8_bin default NULL,
  `newpass_time` datetime default NULL,
  `last_ip` varchar(40) collate utf8_bin NOT NULL,
  `last_login` datetime NOT NULL default '0000-00-00 00:00:00',
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`, `email`, `banned`, `ban_reason`, `newpass`, `newpass_key`, `newpass_time`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 2, 'admin', '$1$i75.Do4.$ROPRZjZzDx/JjqeVtaJLW.', 'admin@localhost.com', 0, NULL, NULL, NULL, NULL, '127.0.0.1', '2008-11-30 04:56:38', '2008-11-30 04:56:32', '2008-11-30 04:56:38'),
(2, 1, 'user', '$1$bO..IR4.$CxjJBjKJ5QW2/BaYKDS7f.', 'user@localhost.com', 0, NULL, NULL, NULL, NULL, '127.0.0.1', '2008-12-01 14:04:14', '2008-12-01 14:01:53', '2008-12-01 14:04:14'),
(4, 1, 'kike', '$1$R84.GA..$EtvSumq7Z1lFvATQCF5UT/', 'kike@itexa.com.ar', 0, NULL, NULL, NULL, NULL, '127.0.0.1', '2009-08-06 09:27:26', '2009-07-30 18:31:51', '2009-08-06 09:27:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_autologin`
--

DROP TABLE IF EXISTS `user_autologin`;
CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) collate utf8_bin NOT NULL,
  `user_id` mediumint(8) NOT NULL default '0',
  `user_agent` varchar(150) collate utf8_bin NOT NULL,
  `last_ip` varchar(40) collate utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`key_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcar la base de datos para la tabla `user_autologin`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) collate utf8_bin default NULL,
  `website` varchar(255) collate utf8_bin default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `country`, `website`) VALUES
(1, 1, NULL, NULL),
(2, 3, NULL, NULL),
(3, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_temp`
--

DROP TABLE IF EXISTS `user_temp`;
CREATE TABLE IF NOT EXISTS `user_temp` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) collate utf8_bin NOT NULL,
  `password` varchar(34) collate utf8_bin NOT NULL,
  `email` varchar(100) collate utf8_bin NOT NULL,
  `activation_key` varchar(50) collate utf8_bin NOT NULL,
  `last_ip` varchar(40) collate utf8_bin NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `user_temp`
--

