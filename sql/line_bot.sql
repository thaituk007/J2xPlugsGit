/*
Navicat MySQL Data Transfer

Source Server         : JHCIS
Source Server Version : 50051
Source Host           : localhost:3333
Source Database       : jhcisdb

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2019-11-24 14:13:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for line_bot
-- ----------------------------
DROP TABLE IF EXISTS `line_bot`;
CREATE TABLE `line_bot` (
  `id` int(11) default NULL,
  `type` varchar(100) default NULL,
  `last_id` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
