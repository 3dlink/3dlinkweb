-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2016 a las 20:45:52
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `3dlink`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `name`, `salary`) VALUES
(3, 'Desarrollador Carga Completa', 60000),
(4, 'Lider de Proyecto', 100000),
(5, 'Puto', 500000.12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `observation` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `company_name`, `country`, `phone`, `email`, `type`, `observation`, `manager`) VALUES
(2, 'FC Barcelona', 'EspaÃ±a', '1230877378923', 'barcelona@email.com', 'DiseÃ±o', 'Esto es solo una prueba, pero esta quedando calidad. OjalÃ¡ nos contratara el BarÃ§a.', ''),
(3, 'Real Madrid', 'EspaÃ±a', '3489812399123', 'Real@madrid.com', 'Desarrollo', ':O :)', ''),
(4, 'Caracas FC', 'Venezuela', '04120358359', 'aaranguren@3dlinkweb.com', 'Empresa', 'Una pruebita ahi....', 'Alirio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE IF NOT EXISTS `egresos` (
`id` int(10) NOT NULL,
  `concepto` varchar(255) NOT NULL,
  `monto` float NOT NULL,
  `egr_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `egresos`
--

INSERT INTO `egresos` (`id`, `concepto`, `monto`, `egr_date`) VALUES
(1, 'Pago por ver otra vez', 30000, '2016-06-08'),
(2, 'aDBAQV', 10000, '2016-06-30'),
(3, 'Putas', 100000, '2016-05-29'),
(5, 'askdjukjasd', 1287290000, '2016-07-15'),
(6, 'asas', 34565, '2016-03-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE IF NOT EXISTS `ingresos` (
`id` int(10) NOT NULL,
  `concepto` varchar(255) NOT NULL,
  `monto` float NOT NULL,
  `ing_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id`, `concepto`, `monto`, `ing_date`) VALUES
(2, 'Algo', 2000000, '2016-05-29'),
(3, '123123123', 13123100, '2016-06-30'),
(4, 'Prueba', 1900290, '2016-07-20'),
(5, 'proxenetismo', 3908220, '2016-07-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_tokens`
--

CREATE TABLE IF NOT EXISTS `login_tokens` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personals`
--

CREATE TABLE IF NOT EXISTS `personals` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ci` varchar(255) NOT NULL,
  `cargo_id` int(10) NOT NULL,
  `bio` text NOT NULL,
  `job` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `observations` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_personal` varchar(255) NOT NULL,
  `email_company` varchar(255) NOT NULL,
  `rif` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personals`
--

INSERT INTO `personals` (`id`, `name`, `ci`, `cargo_id`, `bio`, `job`, `photo`, `account_number`, `account_type`, `bank`, `observations`, `phone`, `email_personal`, `email_company`, `rif`, `active`) VALUES
(2, 'Alirio Aranguren', 'V-17148680', 4, '', '', '', '1234567890', 'Arrecha', 'Arrecho', 'Holis', '', '', '', '', 0),
(3, 'Cristiano Ronaldo', 'E-299019774', 4, 'Guevo pelao', 'Guevo pelao', 'img1468869634J12.jpg', '2147483647', 'Impagable', 'Venezuela', 'hola', '123098123123', 'ronaldo@madrid.com', 'ronaldo@madrid.com', '12312421214', 1),
(5, 'Hola', '124321412', 0, '', '', '', '2147483647', 'una ahi', 'sofitasa', 'un tipo ahi', '', '', '', '', 0),
(6, 'Rivaldo', '123123', 0, '', '', '', '2147483647', 'Impagable', 'Brasileiro', 'Wao', '', '', '', '', 0),
(7, 'Juan Arango', '13213123', 4, 'Un tipo serio', 'Goleador', 'img14688675689P7.png', '123354356546', 'Impagable', 'Bank of America', 'Hay que jalarle bola para que no se vaya con Farias', '123123123', 'el-mas-pipi@hotmail.com', 'arangol@3dlinkweb.com', '123123123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personals_projects`
--

CREATE TABLE IF NOT EXISTS `personals_projects` (
`id` int(10) NOT NULL,
  `personal_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personals_projects`
--

INSERT INTO `personals_projects` (`id`, `personal_id`, `project_id`) VALUES
(1, 3, 3),
(3, 6, 3),
(4, 2, 4),
(5, 3, 4),
(6, 5, 4),
(7, 6, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `init_date` date NOT NULL,
  `end_date` date NOT NULL,
  `asana_url` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(255) NOT NULL,
  `personal_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `name`, `type`, `description`, `init_date`, `end_date`, `asana_url`, `price`, `status`, `personal_id`, `client_id`, `currency`) VALUES
(2, 'Orgia 2016', 'Desarrollo', 'Buscando a las putas', '2016-06-30', '2016-07-04', 'https://app.asana.com/0/67192036044956/67192036044956', 20000, 'En DiseÃ±o', 2, 2, '0'),
(3, 'Colombiana', 'Todos los servicios', 'wola', '2016-07-20', '2016-07-29', 'asana.com', 100000000000, 'Aprobado', 2, 4, 'EUR (â‚¬)'),
(4, 'Prueba', 'Desarrollo y DiseÃ±o', 'Pruebita', '2016-07-29', '2016-08-06', 'asana.com', 10000000, 'En Desarrollo', 3, 2, 'USD ($)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
`id` int(10) NOT NULL,
  `text` varchar(255) NOT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quotes`
--

INSERT INTO `quotes` (`id`, `text`, `author`) VALUES
(3, '"We''re here to put a dent in the <strong>universe</strong>. Otherwise why else even be here?"', 'Steve Jobs'),
(4, '"My job is not be easy on people. My job is to make them <strong>better</strong>"', 'Steve Jobs'),
(5, '"We are changing the world with technology"', 'Bill Gates'),
(6, 'Hola Luz como <strong>ESTAS!!!???</strong>', 'Alirio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `job` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `team`
--

INSERT INTO `team` (`id`, `name`, `job`, `bio`, `photo`) VALUES
(3, 'Diego Torrealba', 'Founder â€“ CEO (Chief Executive Officer)', 'He studied electrical engineering, has been working with big teams, designing electrical installations, designing automation systems and solutions with embedded systems and telecommunications networks, audio systems and production, between Venezuela and the United Kingdom. As a specialist in marketing, entrepreneurship, consulting and advisory, He has the vision of leaving the 3D Link name as legacy in the world of technology.', 'img1466440895J5F.png'),
(4, 'Diego Brito', 'Founder â€“ COO (Chief Operative Officer)', 'He studied computer science, has worked with databases, information systems and applications with internet technology in countries such as Venezuela, Panama, Spain, USA and Latin America. He has been carrying out projects of great importance with the highest market standards and has many long term customers. As operations chief he leads the team of developers in 3D Link. ', 'img1466440895J5F.png'),
(5, 'Diego San Miguel', 'CMO (Chief Marketing Officer)', 'He studied Telecommunications Engineering, he has worked as a designer and developer for telecommunications networks and has also shaped his developing skills in the field of sales and marketing strategies for companies in Latin America and Europe, expanding his vision and skills for business. His role in 3D Link to provide security to our clients and provide them with the most effective business strategies. ', 'img1466440895J5F.png'),
(6, 'Alirio Aranguren', 'Senior Developer ', 'He studied computer science, has been developing web and mobile applications (Android and iOS) with high customer demands and quality in Latin America. With plenty of expertise and endless efforts his goal is to use 3D Link as a platform for his ambitions to develop more and better products.', 'img1466440895J5F.png'),
(7, 'Daniel CÃ³rcega', 'Web Developer', 'He studied computer science in the UCV, focused his carreer in data base management and big data, with over one year of experience in web development he sensed an opportunity to growth and learn new skills as a developer when he joined 3Dlink. Expecting 3Dlink to become one of the most succesful companies in the field.', 'img1466440895J5F.png'),
(8, 'CÃ©sar Hergueta', 'Web and Mbile dev', 'askdjasd lasÃ±daldsÃ±alsdÃ±alsaÃ±ls daÃ±ls dÃ±alskd Ã±alsk dÃ±als dÃ±als dÃ±alk dÃ±als dÃ±al dÃ±alsdÃ±ald Ã±als dÃ±las dÃ±laskd Ã±laks dÃ±laskdÃ±alksd Ã±alsdÃ±alks dÃ±alsdÃ±alsd Ã±ald Ã±lask dÃ±alsk dÃ±alsd Ã±alskd Ã±als dÃ±alskdÃ±als dÃ±alksdÃ±als dÃ±alsdÃ±alk dÃ±als dÃ±alsdÃ±alskdÃ±als dÃ±alskd Ã±als d', 'img1466440895J5F.png'),
(9, 'Ricardo Chacoa', 'DiseÃ±ador', 'He studied graphic design, with experience working in advertising agencies, and as a freelance. Specialised in lettering, branding and web design, he has been working with multiple clients and brands around latin america. With love for the details, and an atractive and diverse portfolio, he is the main designer of the team, and leader of the creative department of the company.', 'img1466440895J5F.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `username`, `password`, `salt`, `email`, `first_name`, `last_name`, `email_verified`, `active`, `ip_address`, `created`, `modified`) VALUES
(1, 1, 'admin', '365caef7fccbdb1ee711f084be9317a7', '1e6d99570a4d37cc29b18c4a6b06e6ed', 'admin@admin.com', 'Admin', '', 1, 1, '', '2016-03-29 11:38:05', '2016-03-29 11:38:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
`id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `alias_name`, `allowRegistration`, `created`, `modified`) VALUES
(1, 'Admin', 'Admin', 0, '2016-03-29 11:38:05', '2016-03-29 11:38:05'),
(2, 'User', 'User', 1, '2016-03-29 11:38:05', '2016-03-29 11:38:05'),
(3, 'Guest', 'Guest', 0, '2016-03-29 11:38:05', '2016-03-29 11:38:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_group_permissions`
--

CREATE TABLE IF NOT EXISTS `user_group_permissions` (
`id` int(10) unsigned NOT NULL,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_group_permissions`
--

INSERT INTO `user_group_permissions` (`id`, `user_group_id`, `controller`, `action`, `allowed`) VALUES
(1, 1, 'Pages', 'display', 1),
(2, 2, 'Pages', 'display', 1),
(3, 3, 'Pages', 'display', 1),
(4, 1, 'UserGroupPermissions', 'index', 1),
(5, 2, 'UserGroupPermissions', 'index', 0),
(6, 3, 'UserGroupPermissions', 'index', 0),
(7, 1, 'UserGroupPermissions', 'update', 1),
(8, 2, 'UserGroupPermissions', 'update', 0),
(9, 3, 'UserGroupPermissions', 'update', 0),
(10, 1, 'UserGroups', 'index', 1),
(11, 2, 'UserGroups', 'index', 0),
(12, 3, 'UserGroups', 'index', 0),
(13, 1, 'UserGroups', 'addGroup', 1),
(14, 2, 'UserGroups', 'addGroup', 0),
(15, 3, 'UserGroups', 'addGroup', 0),
(16, 1, 'UserGroups', 'editGroup', 1),
(17, 2, 'UserGroups', 'editGroup', 0),
(18, 3, 'UserGroups', 'editGroup', 0),
(19, 1, 'UserGroups', 'deleteGroup', 1),
(20, 2, 'UserGroups', 'deleteGroup', 0),
(21, 3, 'UserGroups', 'deleteGroup', 0),
(22, 1, 'Users', 'index', 1),
(23, 2, 'Users', 'index', 0),
(24, 3, 'Users', 'index', 0),
(25, 1, 'Users', 'viewUser', 1),
(26, 2, 'Users', 'viewUser', 0),
(27, 3, 'Users', 'viewUser', 0),
(28, 1, 'Users', 'myprofile', 1),
(29, 2, 'Users', 'myprofile', 1),
(30, 3, 'Users', 'myprofile', 0),
(31, 1, 'Users', 'login', 1),
(32, 2, 'Users', 'login', 1),
(33, 3, 'Users', 'login', 1),
(34, 1, 'Users', 'logout', 1),
(35, 2, 'Users', 'logout', 1),
(36, 3, 'Users', 'logout', 1),
(37, 1, 'Users', 'register', 1),
(38, 2, 'Users', 'register', 1),
(39, 3, 'Users', 'register', 1),
(40, 1, 'Users', 'changePassword', 1),
(41, 2, 'Users', 'changePassword', 1),
(42, 3, 'Users', 'changePassword', 0),
(43, 1, 'Users', 'changeUserPassword', 1),
(44, 2, 'Users', 'changeUserPassword', 0),
(45, 3, 'Users', 'changeUserPassword', 0),
(46, 1, 'Users', 'addUser', 1),
(47, 2, 'Users', 'addUser', 0),
(48, 3, 'Users', 'addUser', 0),
(49, 1, 'Users', 'editUser', 1),
(50, 2, 'Users', 'editUser', 0),
(51, 3, 'Users', 'editUser', 0),
(52, 1, 'Users', 'dashboard', 1),
(53, 2, 'Users', 'dashboard', 1),
(54, 3, 'Users', 'dashboard', 0),
(55, 1, 'Users', 'deleteUser', 1),
(56, 2, 'Users', 'deleteUser', 0),
(57, 3, 'Users', 'deleteUser', 0),
(58, 1, 'Users', 'makeActive', 1),
(59, 2, 'Users', 'makeActive', 0),
(60, 3, 'Users', 'makeActive', 0),
(61, 1, 'Users', 'accessDenied', 1),
(62, 2, 'Users', 'accessDenied', 1),
(63, 3, 'Users', 'accessDenied', 1),
(64, 1, 'Users', 'userVerification', 1),
(65, 2, 'Users', 'userVerification', 1),
(66, 3, 'Users', 'userVerification', 1),
(67, 1, 'Users', 'forgotPassword', 1),
(68, 2, 'Users', 'forgotPassword', 1),
(69, 3, 'Users', 'forgotPassword', 1),
(70, 1, 'Users', 'makeActiveInactive', 1),
(71, 2, 'Users', 'makeActiveInactive', 0),
(72, 3, 'Users', 'makeActiveInactive', 0),
(73, 1, 'Users', 'verifyEmail', 1),
(74, 2, 'Users', 'verifyEmail', 0),
(75, 3, 'Users', 'verifyEmail', 0),
(76, 1, 'Users', 'activatePassword', 1),
(77, 2, 'Users', 'activatePassword', 1),
(78, 3, 'Users', 'activatePassword', 1),
(79, 1, 'Start', 'sendMail', 1),
(80, 2, 'Start', 'sendMail', 1),
(81, 3, 'Start', 'sendMail', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `work`
--

CREATE TABLE IF NOT EXISTS `work` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `work`
--

INSERT INTO `work` (`id`, `name`, `description`, `url`, `type`, `img1`, `img2`, `img3`, `img4`) VALUES
(2, 'CHACAO', 'Productos Artesanales', NULL, 'Design', 'img1466197802BXG.png', 'img1466197804P19.png', 'img14661978100JS.png', 'img146619782386G.png'),
(4, 'Bricks', 'Web responsive development ', NULL, 'Development', 'img1466197802BXG.png', 'img1466197802BXG.png', 'img1466197802BXG.png', 'img1466197802BXG.png'),
(5, 'asdasdasd', 'asdasd', NULL, 'Design', 'img1466197802BXG.png', 'img1466197802BXG.png', 'img1466197802BXG.png', 'img1466197802BXG.png'),
(6, 'asghjgh', 'rfhfghfghf', NULL, 'Development', 'img1466197802BXG.png', 'img1466197802BXG.png', 'img1466197802BXG.png', 'img1466197802BXG.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `egresos`
--
ALTER TABLE `egresos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_tokens`
--
ALTER TABLE `login_tokens`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personals`
--
ALTER TABLE `personals`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personals_projects`
--
ALTER TABLE `personals_projects`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quotes`
--
ALTER TABLE `quotes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `user` (`username`), ADD KEY `mail` (`email`), ADD KEY `users_FKIndex1` (`user_group_id`);

--
-- Indices de la tabla `user_groups`
--
ALTER TABLE `user_groups`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_group_permissions`
--
ALTER TABLE `user_group_permissions`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `work`
--
ALTER TABLE `work`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `egresos`
--
ALTER TABLE `egresos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `login_tokens`
--
ALTER TABLE `login_tokens`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personals`
--
ALTER TABLE `personals`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `personals_projects`
--
ALTER TABLE `personals_projects`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `quotes`
--
ALTER TABLE `quotes`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `team`
--
ALTER TABLE `team`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `user_groups`
--
ALTER TABLE `user_groups`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `user_group_permissions`
--
ALTER TABLE `user_group_permissions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT de la tabla `work`
--
ALTER TABLE `work`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
