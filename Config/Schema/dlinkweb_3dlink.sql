/*
Navicat MySQL Data Transfer

Source Server         : 3dlink
Source Server Version : 50550
Source Host           : www.3dlinkweb.com:3306
Source Database       : dlinkweb_3dlink

Target Server Type    : MYSQL
Target Server Version : 50550
File Encoding         : 65001

Date: 2016-06-18 15:16:17
*/

SET FOREIGN_KEY_CHECKS=0;

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
INSERT INTO `quotes` VALUES ('3', '\"We\'re here to put a dent in the <strong>universe</strong>. Otherwise why else even be here?\"', 'Steve Jobs');
INSERT INTO `quotes` VALUES ('4', '\"My job is not be easy on people. My job is to make them <strong>better</strong>\"', 'Steve Jobs');
INSERT INTO `quotes` VALUES ('5', '\"We are changing the world with technology\"', 'Bill Gates');

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `job` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('3', 'Diego Torrealba', 'Founder â€“ CEO (Chief Executive Officer)', 'He studied electrical engineering, has been working with big teams, designing electrical installations, designing automation systems and solutions with embedded systems and telecommunications networks, audio systems and production, between Venezuela and the United Kingdom. As a specialist in marketing, entrepreneurship, consulting and advisory, He has the vision of leaving the 3D Link name as legacy in the world of technology.', 'img1466274593IL3.png');
INSERT INTO `teams` VALUES ('4', 'Diego Brito', 'Founder â€“ COO (Chief Operative Officer)', 'He studied computer science, has worked with databases, information systems and applications with internet technology in countries such as Venezuela, Panama, Spain, USA and Latin America. He has been carrying out projects of great importance with the highest market standards and has many long term customers. As operations chief he leads the team of developers in 3D Link. ', 'img14662743201XK.png');
INSERT INTO `teams` VALUES ('5', 'Diego San Miguel', 'CMO (Chief Marketing Officer)', 'He studied Telecommunications Engineering, he has worked as a designer and developer for telecommunications networks and has also shaped his developing skills in the field of sales and marketing strategies for companies in Latin America and Europe, expanding his vision and skills for business. His role in 3D Link to provide security to our clients and provide them with the most effective business strategies. ', 'img1466274612XQC.png');
INSERT INTO `teams` VALUES ('6', 'Alirio Aranguren', 'Senior Developer ', 'He studied computer science, has been developing web and mobile applications (Android and iOS) with high customer demands and quality in Latin America. With plenty of expertise and endless efforts his goal is to use 3D Link as a platform for his ambitions to develop more and better products.', 'img146627463437L.png');
INSERT INTO `teams` VALUES ('7', 'Daniel CÃ³rcega', 'Web Developer', 'He studied computer science in the UCV, focused his carreer in data base management and big data, with over one year of experience in web development he sensed an opportunity to growth and learn new skills as a developer when he joined 3Dlink. Expecting 3Dlink to become one of the most succesful companies in the field.', 'img14662747017QS.png');

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
INSERT INTO `users` VALUES ('1', '1', 'admin', '365caef7fccbdb1ee711f084be9317a7', '1e6d99570a4d37cc29b18c4a6b06e6ed', 'admin@admin.com', 'Admin', '', '1', '1', '', '2016-03-29 11:38:05', '2016-03-29 11:38:05');

-- ----------------------------
-- Table structure for work
-- ----------------------------
DROP TABLE IF EXISTS `work`;
CREATE TABLE `work` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of work
-- ----------------------------
INSERT INTO `work` VALUES ('2', 'CHACAO', 'Productos Artesanales', 'Design', 'img1466197802BXG.png', 'img1466197804P19.png', 'img14661978100JS.png', 'img146619782386G.png');
INSERT INTO `work` VALUES ('4', 'Bricks', 'Web responsive development ', 'Development', 'img1466208261HJ8.png', 'img1466208260T5K.png', 'img1466208227GD6.png', 'img1466208265GRG.png');
