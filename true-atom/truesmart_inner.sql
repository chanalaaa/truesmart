/*
Navicat MySQL Data Transfer

Source Server         : AION
Source Server Version : 50702
Source Host           : localhost:3306
Source Database       : truesmart_inner

Target Server Type    : MYSQL
Target Server Version : 50702
File Encoding         : 65001

Date: 2015-08-17 15:44:17
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `employ_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `send_time` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'dd/mm/yyyy',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', 'atom', '1233212132', '17/08/2015');
INSERT INTO `message` VALUES ('2', 'ใจมาใช้ทรู', '123456', '17/08/2015');
INSERT INTO `message` VALUES ('3', '....', '1234', '17/08/2015');
INSERT INTO `message` VALUES ('4', 'sdsadsa', '231232', '17/08/2015');
INSERT INTO `message` VALUES ('5', 'asdas', '2311', '17/08/2015');
