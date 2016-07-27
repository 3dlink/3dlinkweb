/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : 3dlink

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-07-26 21:12:28
*/

SET FOREIGN_KEY_CHECKS=0;

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
