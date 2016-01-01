/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : ci

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2016-01-01 23:18:01
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `ci_adv`
-- ----------------------------
DROP TABLE IF EXISTS `ci_adv`;
CREATE TABLE `ci_adv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advcate_id` int(11) DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `is_blank` int(100) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_adv
-- ----------------------------
INSERT INTO `ci_adv` VALUES ('64', '10', '横幅', 'http://www.baidu.com', '0', '3', '1', '1451053996', './upload/images/adv/20151225223345_4378.jpg');

-- ----------------------------
-- Table structure for `ci_advcate`
-- ----------------------------
DROP TABLE IF EXISTS `ci_advcate`;
CREATE TABLE `ci_advcate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `width` smallint(6) DEFAULT '0',
  `height` smallint(6) DEFAULT '0',
  `sort` int(11) DEFAULT '3',
  `remark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_advcate
-- ----------------------------
INSERT INTO `ci_advcate` VALUES ('11', '2222', '200', '150', '1', '1111111');

-- ----------------------------
-- Table structure for `ci_document`
-- ----------------------------
DROP TABLE IF EXISTS `ci_document`;
CREATE TABLE `ci_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documentcate_id` int(11) DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `content` text,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_document
-- ----------------------------

-- ----------------------------
-- Table structure for `ci_documentcate`
-- ----------------------------
DROP TABLE IF EXISTS `ci_documentcate`;
CREATE TABLE `ci_documentcate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `en_name` varchar(30) DEFAULT NULL,
  `is_nav` int(11) DEFAULT '1',
  `url` varchar(200) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_documentcate
-- ----------------------------
INSERT INTO `ci_documentcate` VALUES ('16', '0', '公司简介', 'about', '1', 'about/index/1', '1');
INSERT INTO `ci_documentcate` VALUES ('17', '16', '关于我们', '', '1', 'about/index/2', '1');
INSERT INTO `ci_documentcate` VALUES ('18', '16', '经营理念', '', '1', 'about/index/3', '2');
INSERT INTO `ci_documentcate` VALUES ('19', '16', '企业锋芒', '', '1', 'about/index/4', '3');
INSERT INTO `ci_documentcate` VALUES ('20', '16', '公司文化', '', '1', 'about/index/5', '4');
INSERT INTO `ci_documentcate` VALUES ('21', '0', '装修知识', 'zhuangxiuzhishi', '1', '', '2');
INSERT INTO `ci_documentcate` VALUES ('22', '21', '设计指南', null, '1', null, '1');
INSERT INTO `ci_documentcate` VALUES ('23', '21', '风水指南', null, '1', null, '2');
INSERT INTO `ci_documentcate` VALUES ('24', '0', '案例展示', null, '1', null, '3');
INSERT INTO `ci_documentcate` VALUES ('25', '24', '家装案例', null, '1', null, '1');
INSERT INTO `ci_documentcate` VALUES ('26', '24', '办公室案例', null, '1', null, '2');
INSERT INTO `ci_documentcate` VALUES ('27', '24', '专卖店案例', null, '1', null, '3');
INSERT INTO `ci_documentcate` VALUES ('28', '0', '公司服务', null, '1', null, '4');
INSERT INTO `ci_documentcate` VALUES ('29', '28', '服务项目', null, '1', null, '1');
INSERT INTO `ci_documentcate` VALUES ('30', '28', '服务流程', null, '1', null, '2');
INSERT INTO `ci_documentcate` VALUES ('31', '0', '环保保障', null, '1', null, '5');
INSERT INTO `ci_documentcate` VALUES ('32', '31', '环保质量', null, '1', null, '1');
INSERT INTO `ci_documentcate` VALUES ('33', '31', '施工保障', null, '1', null, '2');
INSERT INTO `ci_documentcate` VALUES ('34', '31', '施工标准', null, '1', null, '3');
INSERT INTO `ci_documentcate` VALUES ('35', '0', '设计理念', null, '1', null, '6');
INSERT INTO `ci_documentcate` VALUES ('36', '35', '五大风格', null, '1', null, '1');
INSERT INTO `ci_documentcate` VALUES ('37', '0', '招贤纳士', null, '1', null, '7');
INSERT INTO `ci_documentcate` VALUES ('38', '0', '联系我们', null, '1', null, '8');
INSERT INTO `ci_documentcate` VALUES ('39', '38', '在线反馈', null, '1', null, '1');

-- ----------------------------
-- Table structure for `ci_jurisdiction`
-- ----------------------------
DROP TABLE IF EXISTS `ci_jurisdiction`;
CREATE TABLE `ci_jurisdiction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `class_method` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_jurisdiction
-- ----------------------------
INSERT INTO `ci_jurisdiction` VALUES ('1', '0', '内容管理', null, '1', '1');
INSERT INTO `ci_jurisdiction` VALUES ('2', '1', '内容分类', 'documentcate/index', '1', '1');
INSERT INTO `ci_jurisdiction` VALUES ('3', '1', '添加内容', 'documentcate/add', '1', '2');
INSERT INTO `ci_jurisdiction` VALUES ('4', '1', '编辑分类', 'documentcate/edit', '0', '3');
INSERT INTO `ci_jurisdiction` VALUES ('5', '1', '删除分类', 'documentcate/del', '0', '4');
INSERT INTO `ci_jurisdiction` VALUES ('6', '1', '内容列表', 'document/index', '1', '5');
INSERT INTO `ci_jurisdiction` VALUES ('7', '1', '添加内容', 'document/add', '1', '6');
INSERT INTO `ci_jurisdiction` VALUES ('8', '1', '编辑内容', 'document/edit', '0', '7');
INSERT INTO `ci_jurisdiction` VALUES ('9', '1', '删除内容', 'document/del', '0', '8');
INSERT INTO `ci_jurisdiction` VALUES ('10', '0', '广告管理', '', '1', '2');
INSERT INTO `ci_jurisdiction` VALUES ('11', '10', '广告分类', 'advcate/index', '1', '1');
INSERT INTO `ci_jurisdiction` VALUES ('12', '10', '添加分类', 'advcate/add', '1', '2');
INSERT INTO `ci_jurisdiction` VALUES ('13', '10', '编辑分类', 'advcate/edit', '0', '3');
INSERT INTO `ci_jurisdiction` VALUES ('14', '10', '删除分类', 'advcate/del', '0', '4');
INSERT INTO `ci_jurisdiction` VALUES ('15', '10', '广告列表', 'adv/index', '1', '5');
INSERT INTO `ci_jurisdiction` VALUES ('16', '10', '添加广告', 'adv/add', '1', '6');
INSERT INTO `ci_jurisdiction` VALUES ('17', '10', '编辑广告', 'adv/edit', '0', '7');
INSERT INTO `ci_jurisdiction` VALUES ('18', '10', '删除广告', 'adv/del', '0', '8');
INSERT INTO `ci_jurisdiction` VALUES ('19', '0', '友情链接', null, '1', '3');
INSERT INTO `ci_jurisdiction` VALUES ('20', '19', '链接列表', 'links/index', '1', '1');
INSERT INTO `ci_jurisdiction` VALUES ('21', '19', '添加链接', 'links/add', '1', '2');
INSERT INTO `ci_jurisdiction` VALUES ('22', '19', '编辑链接', 'links/edit', '0', '3');
INSERT INTO `ci_jurisdiction` VALUES ('23', '19', '删除链接', 'links/del', '0', '4');
INSERT INTO `ci_jurisdiction` VALUES ('24', '0', '信息管理', null, '1', '4');
INSERT INTO `ci_jurisdiction` VALUES ('25', '24', '信息列表', 'message/index', '1', '1');
INSERT INTO `ci_jurisdiction` VALUES ('26', '24', '添加信息', 'message/add', '1', '2');
INSERT INTO `ci_jurisdiction` VALUES ('27', '24', '编辑信息', 'message/edit', '0', '3');
INSERT INTO `ci_jurisdiction` VALUES ('28', '24', '删除信息', 'message/del', '0', '4');
INSERT INTO `ci_jurisdiction` VALUES ('29', '0', '用户管理', null, '1', '5');
INSERT INTO `ci_jurisdiction` VALUES ('30', '29', '用户列表', 'user/index', '1', '1');
INSERT INTO `ci_jurisdiction` VALUES ('31', '29', '添加用户', 'user/add', '1', '2');
INSERT INTO `ci_jurisdiction` VALUES ('32', '29', '编辑用户', 'user/edit', '0', '3');
INSERT INTO `ci_jurisdiction` VALUES ('33', '29', '删除用户', 'user/del', '0', '4');
INSERT INTO `ci_jurisdiction` VALUES ('34', '0', '权限管理', null, '1', '6');
INSERT INTO `ci_jurisdiction` VALUES ('35', '34', '权限列表', 'jurisdiction/index', '1', '1');
INSERT INTO `ci_jurisdiction` VALUES ('36', '34', '添加权限', 'jurisdiction/add', '1', '2');
INSERT INTO `ci_jurisdiction` VALUES ('37', '34', '编辑权限', 'jurisdiction/edit', '0', '3');
INSERT INTO `ci_jurisdiction` VALUES ('38', '34', '删除权限', 'jurisdiction/del', '0', '4');
INSERT INTO `ci_jurisdiction` VALUES ('39', '0', '系统管理', null, '1', '7');
INSERT INTO `ci_jurisdiction` VALUES ('40', '39', '系统设置', 'system/index', '1', '1');

-- ----------------------------
-- Table structure for `ci_links`
-- ----------------------------
DROP TABLE IF EXISTS `ci_links`;
CREATE TABLE `ci_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_links
-- ----------------------------
INSERT INTO `ci_links` VALUES ('1', '新浪', 'http://www.sina.com.cn', '1', '4', '1451126408');
INSERT INTO `ci_links` VALUES ('2', '腾讯', 'http://www.qq.com', '1', '3', '1451126408');
INSERT INTO `ci_links` VALUES ('3', '网易', 'http://www.163.com', '1', '2', '1451126434');
INSERT INTO `ci_links` VALUES ('4', '百度', 'http://www.baidu.com', '1', '1', '1451126447');

-- ----------------------------
-- Table structure for `ci_system`
-- ----------------------------
DROP TABLE IF EXISTS `ci_system`;
CREATE TABLE `ci_system` (
  `company_name` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `telphone` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `qq` varchar(128) DEFAULT NULL,
  `zipcode` int(6) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `copyright` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `keywords` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_system
-- ----------------------------
INSERT INTO `ci_system` VALUES ('装饰公司', '时代广场1号楼A座1008室', '0871-55667788', '冯先生 13833338888', 'mail@163.com', '传真', '123456', '123456', 'http://www.website.com', '版权所有 2012-2015 ICP备88888-x', '首页标题', '首页关键词', '首页描述', '备注');

-- ----------------------------
-- Table structure for `ci_user`
-- ----------------------------
DROP TABLE IF EXISTS `ci_user`;
CREATE TABLE `ci_user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `password` char(32) CHARACTER SET utf8 DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `login_num` int(11) DEFAULT NULL,
  `login_time` int(11) DEFAULT NULL,
  `login_ip` varchar(100) DEFAULT NULL,
  `jurisdiction` text,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ci_user
-- ----------------------------
INSERT INTO `ci_user` VALUES ('1', 'admin', '8e36e8014ee6e6fb07f500ffd19c3bd0', '1', '1', '10', '1451652873', '::1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18', '1451201183');
INSERT INTO `ci_user` VALUES ('2', 'root', '8e36e8014ee6e6fb07f500ffd19c3bd0', '0', '1', '4', '1451488311', '::1', '1,2,3,4,5,6,7,8,9,10,11,12,13', '1451201183');
