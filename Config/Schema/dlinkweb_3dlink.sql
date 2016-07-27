/*
Navicat MySQL Data Transfer

Source Server         : 3dlink
Source Server Version : 50550
Source Host           : www.3dlinkweb.com:3306
Source Database       : dlinkweb_3dlink

Target Server Type    : MYSQL
Target Server Version : 50550
File Encoding         : 65001

Date: 2016-07-26 22:24:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cargos
-- ----------------------------
DROP TABLE IF EXISTS `cargos`;
CREATE TABLE `cargos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `salary` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cargos
-- ----------------------------
INSERT INTO `cargos` VALUES ('3', 'Desarrollador Carga Completa', '60000');
INSERT INTO `cargos` VALUES ('4', 'LÃ­der de Proyecto', '75000');
INSERT INTO `cargos` VALUES ('6', 'Desarrollador Carga Media', '30000');
INSERT INTO `cargos` VALUES ('7', 'Ejecutivo', '100000');
INSERT INTO `cargos` VALUES ('8', 'DiseÃ±ador', '0');
INSERT INTO `cargos` VALUES ('9', 'Community Manager', '0');

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `observation` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of clients
-- ----------------------------

-- ----------------------------
-- Table structure for egresos
-- ----------------------------
DROP TABLE IF EXISTS `egresos`;
CREATE TABLE `egresos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `concepto` varchar(255) NOT NULL,
  `monto` float NOT NULL,
  `egr_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of egresos
-- ----------------------------
INSERT INTO `egresos` VALUES ('9', 'nomina', '205000', '2016-07-13');

-- ----------------------------
-- Table structure for ingresos
-- ----------------------------
DROP TABLE IF EXISTS `ingresos`;
CREATE TABLE `ingresos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `concepto` varchar(255) NOT NULL,
  `monto` float NOT NULL,
  `ing_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ingresos
-- ----------------------------

-- ----------------------------
-- Table structure for login_tokens
-- ----------------------------
DROP TABLE IF EXISTS `login_tokens`;
CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for personals
-- ----------------------------
DROP TABLE IF EXISTS `personals`;
CREATE TABLE `personals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
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
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of personals
-- ----------------------------
INSERT INTO `personals` VALUES ('9', 'Diego Torrealba', '19693588', '7', 'He studied electrical engineering and has been working with big teams, designing electrical installations, automation systems and solutions with embedded systems between Venezuela and the United Kingdom. As a specialist in marketing, entrepreneurship, consulting and advisory he has the vision of leaving the 3D Link name as legacy in the world of technology.', 'Founder â€“ CEO (Chief Executive Officer)', 'img1469582461SPU.png', '01340033430333068724', 'Corriente', 'Banesco', 'Director de la compaÃ±ia', '+584123777655', 'dietorrealba@gmail.com', 'dtorrealba@3dlinkweb.com', '196935882', '1');
INSERT INTO `personals` VALUES ('10', 'Diego Brito', '19840342', '7', 'He studied computer science and has worked with databases, information systems and applications with internet technology in Latin America, USA and Spain. Diego has been carrying out projects of great importance with the highest market standards and has many long term customers. As the operations chief, he leads the team of developers in 3D Link. ', 'Founder â€“ COO (Chief Operative Officer)', 'img1469582461SPU.png', '01020225690000045159', 'Corriente', 'Banco de Venezuela ', 'Chief Operating Officer ', '00584242011692', 'diegobrito.p@gmail.com', 'dbrito@3dlinkweb.com', '', '1');
INSERT INTO `personals` VALUES ('11', 'Diego San Miguel', '18011928', '7', 'Diego studied Telecommunications Engineering and has worked as a designer and developer for telecommunications networks, shaping his developing capabilities in the field of sales and marketing strategies for companies in Latin America and Europe, expanding his vision for business. His role in 3D Link is to provide our clients with the most effective business strategies. ', 'CMO (Chief Marketing Officer)', 'img1469582461SPU.png', '', '', '', 'Chief Marketing Officer', '0034651177720', 'dasma2000@gmail.com', 'dsanmiguel@3dlinkweb.com', '', '1');
INSERT INTO `personals` VALUES ('12', 'Alirio Aranguren', '17148680', '3', 'He studied computer science and has been developing web and mobile applications (Android and iOS) with high customer demands and quality in Latin America. With plenty of expertise and endless efforts his goal is to use 3D Link as a platform for his ambitions to develop more and better products.', 'Web Developer', 'img1469582461SPU.png', '01050026517026015133', 'Ahorros', 'Mercantil', 'WARNING -----> His dick is BIG  ', '00584120358359', 'aliriomiguel@gmail.com', 'aaranguren@3dlinkweb.com', '', '1');
INSERT INTO `personals` VALUES ('13', 'CÃ©sar Hergueta', '20302725', '4', 'CÃ©sar studied computer engineering and has been developing web and mobile applications for different operating systems, improving his skills working with big groups. His expectations in the company are to create, innovate, and deliver products with the best quality, and capable of pushing the digital and technologic world to another level.', 'Web & Mobile Developer â€“ Team leader', 'img1469582461SPU.png', '01050750231750032260Â ', 'Corriente', 'Mercantil', 'Bachata y Ron para el. \r\n\r\nY una Fea.', '00584263115837', 'cesar.hergueta.l@gmail.com', 'chergueta@3dlinkweb.com', '', '1');
INSERT INTO `personals` VALUES ('14', 'Ricardo Chacoa', '21415535', '8', 'He studied graphic design, with experience working in advertising agencies, and as a freelance designer. Specialised in lettering, branding and web design, Ricardo has been working with multiple clients and brands around Latin America. With love for the details and excellence, he leads the design and creative department of 3D Link.', 'Art Director', 'img1469582461SPU.png', '01020488710100034739Â ', 'Ahorro', 'Banco de Venezuela ', 'Art Director', '00584142888234', 'chachacoa@gmail.com', 'rchacoa@3dlinkweb.com', '', '1');
INSERT INTO `personals` VALUES ('15', 'Pedro Diaz', '22037492', '3', 'Pedro studied computer science and has been a web and mobile developer for clients in Colombia and Venezuela with the highest quality standards in the field. With years of experience in the banking industry in Venezuela, he has worked in projects for one of the most influential world financial organisations. His vision in 3D Link is to generate solutions using the best methods and tools to deliver quality products.', 'Web & Mobile Developer', 'img1469582461SPU.png', '01050191170191229199', 'Ahorro', 'Mercantil', 'Ruby On Rails dev', '00584167045050', 'diaz2209@gmail.com', 'pdiaz@3dlinkweb.com', '', '1');
INSERT INTO `personals` VALUES ('16', 'Daniel CÃ³rcega', '19453592', '6', 'With a degree in computer science, he focused his career in data base management and big data, with years of experience in web development he saw the opportunity to grow and learn new skills as a developer when he joined the team. Expecting for 3D Link, to become one of the most successful companies in the field.', 'Web Developer 	', 'img1469582461SPU.png', '01020243410000146375', 'Corriente', 'Banco de Venezuela ', 'Desarrollador', '00584242337767', 'danicorcega@gmail.com', 'dcorcega@3dlinkweb.com', '', '1');
INSERT INTO `personals` VALUES ('17', 'Maryuri Rojas', '25272923', '9', 'She has a degree in social communication. With experience in social media, she has been managing important personalities in the show business world in Venezuela. Maryuri has worked in public relations and in the production of massive events, which make her the right person for the digital marketing area in 3D Link.', 'Community Manager ', 'img1469584243IAO.png', '01020464090000129334', 'Corriente', 'Banco de Venezuela ', 'Community Manager', '00584248282316', 'maryurirojas2107@gmail.com', 'maryurirojas2107@gmail.com', '252729239', '1');

-- ----------------------------
-- Table structure for personals_projects
-- ----------------------------
DROP TABLE IF EXISTS `personals_projects`;
CREATE TABLE `personals_projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `personal_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of personals_projects
-- ----------------------------
INSERT INTO `personals_projects` VALUES ('1', '3', '3');
INSERT INTO `personals_projects` VALUES ('3', '6', '3');
INSERT INTO `personals_projects` VALUES ('4', '2', '4');
INSERT INTO `personals_projects` VALUES ('5', '3', '4');

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `currency` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES ('3', 'Gail and Judy', 'Desarrollo', 'lote 1', '2016-03-28', '2016-06-29', 'https://app.asana.com/0/105135573701080/105135573701080', '12', 'Bugs Fixing', '7', '4', 'USD ($)');
INSERT INTO `projects` VALUES ('5', 'Hail Mary', 'Desarrollo', 'Lot 1', '2016-04-04', '2016-06-09', 'www.asana.com', '100', 'Listo', '8', '4', 'GBP (Â£)');

-- ----------------------------
-- Table structure for quotes
-- ----------------------------
DROP TABLE IF EXISTS `quotes`;
CREATE TABLE `quotes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  `author` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of quotes
-- ----------------------------
INSERT INTO `quotes` VALUES ('3', '<strong>\"We\'re here to put a dent in the universe.</strong> Otherwise why else even be here?\"', 'Steve Jobs');
INSERT INTO `quotes` VALUES ('4', '\"My job is not be easy on people. <strong>My job is to make them better\"</strong>', 'Steve Jobs');
INSERT INTO `quotes` VALUES ('5', '\"We are changing the world <strong>with technology\"</strong>', 'Bill Gates');

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `job` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('3', 'Diego Torrealba', 'Founder â€“ CEO (Chief Executive Officer)', 'He studied electrical engineering and has been working with big teams, designing electrical installations, automation systems and solutions with embedded systems between Venezuela and the United Kingdom. As a specialist in marketing, entrepreneurship, consulting and advisory he has the vision of leaving the 3D Link name as legacy in the world of technology.', 'img1469586225B1M.png');
INSERT INTO `team` VALUES ('4', 'Diego Brito', 'Founder â€“ COO (Chief Operative Officer)', 'He studied computer science and has worked with databases, information systems and applications with internet technology in Latin America, USA and Spain. Diego has been carrying out projects of great importance with the highest market standards and has many long term customers. As the operations chief, he leads the team of developers in 3D Link. ', 'img146773706282T.png');
INSERT INTO `team` VALUES ('5', 'Diego San Miguel', 'CMO (Chief Marketing Officer)', 'Diego studied Telecommunications Engineering and has worked as a designer and developer for telecommunications networks, shaping his developing capabilities in the field of sales and marketing strategies for companies in Latin America and Europe, expanding his vision for business. His role in 3D Link is to provide our clients with the most effective business strategies. ', 'img1467737242V0D.png');
INSERT INTO `team` VALUES ('6', 'Alirio Aranguren', 'Web Developer', 'He studied computer science and has been developing web and mobile applications (Android and iOS) with high customer demands and quality in Latin America. With plenty of expertise and endless efforts his goal is to use 3D Link as a platform for his ambitions to develop more and better products.', 'img1467737083PLA.png');
INSERT INTO `team` VALUES ('7', 'Daniel CÃ³rcega', 'Web Developer', 'With a degree in computer science, he focused his career in data base management and big data, with years of experience in web development he saw the opportunity to grow and learn new skills as a developer when he joined the team. Expecting for 3D Link, to become one of the most successful companies in the field.', 'img1467737094V8D.png');
INSERT INTO `team` VALUES ('8', 'CÃ©sar Hergueta', 'Web & Mobile Developer â€“ Team leader', 'CÃ©sar studied computer engineering and has been developing web and mobile applications for different operating systems, improving his skills working with big groups. His expectations in the company are to create, innovate, and deliver products with the best quality, and capable of pushing the digital and technologic world to another level.', 'img1467737156CS3.png');
INSERT INTO `team` VALUES ('9', 'Ricardo Chacoa', 'Art Director', 'He studied graphic design, with experience working in advertising agencies, and as a freelance designer. Specialised in lettering, branding and web design, Ricardo has been working with multiple clients and brands around Latin America. With love for the details and excellence, he leads the design and creative department of 3D Link.', 'img1467737187RRS.png');
INSERT INTO `team` VALUES ('10', 'Maryuri Rojas', 'Community Manager ', 'She has a degree in social communication. With experience in social media, she has been managing important personalities in the show business world in Venezuela. Maryuri has worked in public relations and in the production of massive events, which make her the right person for the digital marketing area in 3D Link.', 'img1467737204WVG.png');
INSERT INTO `team` VALUES ('11', 'Pedro Diaz', 'Web & Mobile Developer', 'Pedro studied computer science and has been a web and mobile developer for clients in Colombia and Venezuela with the highest quality standards in the field. With years of experience in the banking industry in Venezuela, he has worked in projects for one of the most influential world financial organisations. His vision in 3D Link is to generate solutions using the best methods and tools to deliver quality products.', 'img1467737216VE2.png');

-- ----------------------------
-- Table structure for user_group_permissions
-- ----------------------------
DROP TABLE IF EXISTS `user_group_permissions`;
CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_group_permissions
-- ----------------------------
INSERT INTO `user_group_permissions` VALUES ('1', '1', 'Pages', 'display', '1');
INSERT INTO `user_group_permissions` VALUES ('2', '2', 'Pages', 'display', '1');
INSERT INTO `user_group_permissions` VALUES ('3', '3', 'Pages', 'display', '1');
INSERT INTO `user_group_permissions` VALUES ('4', '1', 'UserGroupPermissions', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('5', '2', 'UserGroupPermissions', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('6', '3', 'UserGroupPermissions', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('7', '1', 'UserGroupPermissions', 'update', '1');
INSERT INTO `user_group_permissions` VALUES ('8', '2', 'UserGroupPermissions', 'update', '0');
INSERT INTO `user_group_permissions` VALUES ('9', '3', 'UserGroupPermissions', 'update', '0');
INSERT INTO `user_group_permissions` VALUES ('10', '1', 'UserGroups', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('11', '2', 'UserGroups', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('12', '3', 'UserGroups', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('13', '1', 'UserGroups', 'addGroup', '1');
INSERT INTO `user_group_permissions` VALUES ('14', '2', 'UserGroups', 'addGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('15', '3', 'UserGroups', 'addGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('16', '1', 'UserGroups', 'editGroup', '1');
INSERT INTO `user_group_permissions` VALUES ('17', '2', 'UserGroups', 'editGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('18', '3', 'UserGroups', 'editGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('19', '1', 'UserGroups', 'deleteGroup', '1');
INSERT INTO `user_group_permissions` VALUES ('20', '2', 'UserGroups', 'deleteGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('21', '3', 'UserGroups', 'deleteGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('22', '1', 'Users', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('23', '2', 'Users', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('24', '3', 'Users', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('25', '1', 'Users', 'viewUser', '1');
INSERT INTO `user_group_permissions` VALUES ('26', '2', 'Users', 'viewUser', '0');
INSERT INTO `user_group_permissions` VALUES ('27', '3', 'Users', 'viewUser', '0');
INSERT INTO `user_group_permissions` VALUES ('28', '1', 'Users', 'myprofile', '1');
INSERT INTO `user_group_permissions` VALUES ('29', '2', 'Users', 'myprofile', '1');
INSERT INTO `user_group_permissions` VALUES ('30', '3', 'Users', 'myprofile', '0');
INSERT INTO `user_group_permissions` VALUES ('31', '1', 'Users', 'login', '1');
INSERT INTO `user_group_permissions` VALUES ('32', '2', 'Users', 'login', '1');
INSERT INTO `user_group_permissions` VALUES ('33', '3', 'Users', 'login', '1');
INSERT INTO `user_group_permissions` VALUES ('34', '1', 'Users', 'logout', '1');
INSERT INTO `user_group_permissions` VALUES ('35', '2', 'Users', 'logout', '1');
INSERT INTO `user_group_permissions` VALUES ('36', '3', 'Users', 'logout', '1');
INSERT INTO `user_group_permissions` VALUES ('37', '1', 'Users', 'register', '1');
INSERT INTO `user_group_permissions` VALUES ('38', '2', 'Users', 'register', '1');
INSERT INTO `user_group_permissions` VALUES ('39', '3', 'Users', 'register', '1');
INSERT INTO `user_group_permissions` VALUES ('40', '1', 'Users', 'changePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('41', '2', 'Users', 'changePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('42', '3', 'Users', 'changePassword', '0');
INSERT INTO `user_group_permissions` VALUES ('43', '1', 'Users', 'changeUserPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('44', '2', 'Users', 'changeUserPassword', '0');
INSERT INTO `user_group_permissions` VALUES ('45', '3', 'Users', 'changeUserPassword', '0');
INSERT INTO `user_group_permissions` VALUES ('46', '1', 'Users', 'addUser', '1');
INSERT INTO `user_group_permissions` VALUES ('47', '2', 'Users', 'addUser', '0');
INSERT INTO `user_group_permissions` VALUES ('48', '3', 'Users', 'addUser', '0');
INSERT INTO `user_group_permissions` VALUES ('49', '1', 'Users', 'editUser', '1');
INSERT INTO `user_group_permissions` VALUES ('50', '2', 'Users', 'editUser', '0');
INSERT INTO `user_group_permissions` VALUES ('51', '3', 'Users', 'editUser', '0');
INSERT INTO `user_group_permissions` VALUES ('52', '1', 'Users', 'dashboard', '1');
INSERT INTO `user_group_permissions` VALUES ('53', '2', 'Users', 'dashboard', '1');
INSERT INTO `user_group_permissions` VALUES ('54', '3', 'Users', 'dashboard', '0');
INSERT INTO `user_group_permissions` VALUES ('55', '1', 'Users', 'deleteUser', '1');
INSERT INTO `user_group_permissions` VALUES ('56', '2', 'Users', 'deleteUser', '0');
INSERT INTO `user_group_permissions` VALUES ('57', '3', 'Users', 'deleteUser', '0');
INSERT INTO `user_group_permissions` VALUES ('58', '1', 'Users', 'makeActive', '1');
INSERT INTO `user_group_permissions` VALUES ('59', '2', 'Users', 'makeActive', '0');
INSERT INTO `user_group_permissions` VALUES ('60', '3', 'Users', 'makeActive', '0');
INSERT INTO `user_group_permissions` VALUES ('61', '1', 'Users', 'accessDenied', '1');
INSERT INTO `user_group_permissions` VALUES ('62', '2', 'Users', 'accessDenied', '1');
INSERT INTO `user_group_permissions` VALUES ('63', '3', 'Users', 'accessDenied', '1');
INSERT INTO `user_group_permissions` VALUES ('64', '1', 'Users', 'userVerification', '1');
INSERT INTO `user_group_permissions` VALUES ('65', '2', 'Users', 'userVerification', '1');
INSERT INTO `user_group_permissions` VALUES ('66', '3', 'Users', 'userVerification', '1');
INSERT INTO `user_group_permissions` VALUES ('67', '1', 'Users', 'forgotPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('68', '2', 'Users', 'forgotPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('69', '3', 'Users', 'forgotPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('70', '1', 'Users', 'makeActiveInactive', '1');
INSERT INTO `user_group_permissions` VALUES ('71', '2', 'Users', 'makeActiveInactive', '0');
INSERT INTO `user_group_permissions` VALUES ('72', '3', 'Users', 'makeActiveInactive', '0');
INSERT INTO `user_group_permissions` VALUES ('73', '1', 'Users', 'verifyEmail', '1');
INSERT INTO `user_group_permissions` VALUES ('74', '2', 'Users', 'verifyEmail', '0');
INSERT INTO `user_group_permissions` VALUES ('75', '3', 'Users', 'verifyEmail', '0');
INSERT INTO `user_group_permissions` VALUES ('76', '1', 'Users', 'activatePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('77', '2', 'Users', 'activatePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('78', '3', 'Users', 'activatePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('79', '1', 'Start', 'sendMail', '1');
INSERT INTO `user_group_permissions` VALUES ('80', '2', 'Start', 'sendMail', '1');
INSERT INTO `user_group_permissions` VALUES ('81', '3', 'Start', 'sendMail', '1');

-- ----------------------------
-- Table structure for user_groups
-- ----------------------------
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_groups
-- ----------------------------
INSERT INTO `user_groups` VALUES ('1', 'Admin', 'Admin', '0', '2016-03-29 11:38:05', '2016-03-29 11:38:05');
INSERT INTO `user_groups` VALUES ('2', 'User', 'User', '1', '2016-03-29 11:38:05', '2016-03-29 11:38:05');
INSERT INTO `user_groups` VALUES ('3', 'Guest', 'Guest', '0', '2016-03-29 11:38:05', '2016-03-29 11:38:05');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'admin', '1f2034321a2316e0c6f01581378c4a8f', '1fd606e58468568672c3735d6be60793', 'admin@admin.com', 'Admin', '', '1', '1', '', '2016-03-29 11:38:05', '2016-07-04 16:01:37');

-- ----------------------------
-- Table structure for work
-- ----------------------------
DROP TABLE IF EXISTS `work`;
CREATE TABLE `work` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of work
-- ----------------------------
INSERT INTO `work` VALUES ('2', 'Chacao', ' Productos Artesanales', '', 'Design', 'img1466197802BXG.png', 'img1466197804P19.png', 'img14661978100JS.png', 'img146619782386G.png');
INSERT INTO `work` VALUES ('5', 'Mentor - Career decision program', ' ', 'https://joinmentor.co/', 'Development', 'img14686363741DG.PNG', 'img1468637149OK7.PNG', 'img1468637819ZIY.PNG', 'img1468638712PHT.PNG');
INSERT INTO `work` VALUES ('6', 'Bricks - Real estate', '', 'http://bricksusa.com/', 'Development', 'img1468640566R4Z.PNG', 'img1468640220VQC.PNG', 'img146864103423R.PNG', 'img1468641475GZI.PNG');
INSERT INTO `work` VALUES ('7', 'Pikos - LencerÃ­a combinable', '', 'http://pikos.com.ve/', 'Development', 'img1468643176GTF.PNG', 'img146864396529P.PNG', 'img1468643590NZZ.PNG', 'img1468644156F4G.PNG');
INSERT INTO `work` VALUES ('8', 'Chocomatic', ' Colombian chocolate brand', '', 'Design', 'img1469199814SP1.png', 'img14691998813Y0.png', 'img1469199010ALN.png', 'img1469199896NJE.png');
