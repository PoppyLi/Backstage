/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : ci

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-12-29 18:46:00
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_advcate
-- ----------------------------
INSERT INTO `ci_advcate` VALUES ('10', '幻灯片', '200', '150', '1', '幻灯片');

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
INSERT INTO `ci_document` VALUES ('7', '12', '7', '日媒:中国船频赴东海投放筒状物 无视日方抗议', null, '日媒:中国船频赴东海投放筒状物 无视日方抗议', '1448967609');
INSERT INTO `ci_document` VALUES ('8', '12', '1', '浙江温州市委书记调任中央', './upload/images/document/20151227163341_8862.jpg', '<p>\r\n 浙江温州市委书记调任中央深改办 一直任职浙江浙江。\r\n</p>\r\n<p>\r\n 温州市委书记调任中央深改办 一直任职浙江浙江温州市委书\r\n</p>\r\n<p>\r\n 记调任中央深改办 一直任职浙江浙江温州市委书记调任中央深改办 一直任职浙江浙江温州市委书记调任中央深改办 一直任职浙江浙江温州市委书记调任中央深改办 一直任职浙江浙江温州市委书。\r\n</p>\r\n<p>\r\n 记调任中央深改办 一直任职浙江\r\n</p>', '1448964758');
INSERT INTO `ci_document` VALUES ('9', '13', '2', '铁总:首次网上购票3天内完成手机双向核验 民调', null, '', '1448967538');
INSERT INTO `ci_document` VALUES ('10', '12', '3', '四川官员车祸去世留2200元存款 银行催30万房贷', null, '四川官员车祸去世留2200元存款 银行催30万房贷四川官员车祸去世留2200元存款 银行催30万房贷四川官员车祸去世留2200元存款 银行催30万房贷四川官员车祸去世留2200元存款 银行催30万房贷四川官员车祸去世留2200元存款 银行催30万房贷四川官员车祸去世留2200元存款 银行催30万房贷四川官员车祸去世留2200元存款 银行催30万房贷四川官员车祸去世留2200元存款 银行催30万房贷', '1448964729');
INSERT INTO `ci_document` VALUES ('11', '13', '4', '王金平秘书办公室死亡 现场无打斗痕迹(图)', null, '', '1448964739');
INSERT INTO `ci_document` VALUES ('12', '13', '5', '女子晨练被击晕遭劫财劫色 嫌犯赔5.3万获谅解', null, '', '1448967569');
INSERT INTO `ci_document` VALUES ('13', '13', '6', '村民娶外籍妻子 老婆过世后发现一家人都染艾滋', null, '村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋村民娶外籍妻子 老婆过世后发现一家人都染艾滋', '1448964758');
INSERT INTO `ci_document` VALUES ('14', '14', '1', '上海厅官安路生6年前享副部待遇', '', '上海厅官安路生6年前享副部待遇', '1449148376');
INSERT INTO `ci_document` VALUES ('15', '15', '1', '中传违规调查:楼新得像暴发户', null, '<img alt=\"\" src=\"/public/kindeditor/attached/image/20151205/20151205213832_84591.png\" />中传违规调查:楼新得像暴发户 操场修3年中传违规调查:楼新得像暴发户 操场修3年中传违规调查:楼新得像暴发户 操场修3年中传违规调查:楼新得像暴发户 操场修3年中传违规调查:楼新得像暴发户 操场修3年中传违规调查:楼新得像暴发户 操场修3年中传违规调查:楼新得像暴发户 操场修3年中传违规调查:楼新得像暴发户 操场修3年中传违规调查:楼新得像暴发户 操场修3年中传违规调查:楼新得像暴发户 操场修3年中传违规调查:楼新得像暴发户 操场修3年', '1449148323');
INSERT INTO `ci_document` VALUES ('17', '12', '1', '上海长宁闵行区长分别转任市交通', null, '<img alt=\"\" src=\"/upload/kindeditor/attached/image/20151206/20151206181523_15432.png\" /><img alt=\"\" src=\"/upload/kindeditor/attached/image/20151206/20151206181614_37012.png\" />上海长宁闵行区长分别转任市交通局人社局书记', '1449148353');
INSERT INTO `ci_document` VALUES ('18', '12', '1', '俄军舰遭土耳其潜艇尾随 双方紧张对峙上', null, '', '1449148336');
INSERT INTO `ci_document` VALUES ('19', '13', '1', '俄公布土与IS石油交易证据总统也参与', null, '', '1449148341');
INSERT INTO `ci_document` VALUES ('20', '13', '1', '州市委书记调任', null, '', '1449152906');
INSERT INTO `ci_document` VALUES ('21', '12', '1', '记调任中央深改办 一直任职浙江', null, '', '1449151959');
INSERT INTO `ci_document` VALUES ('26', '13', '1', 'IS声称其两名追随者实施了加州枪击案', null, '<p>\r\n	<img alt=\"\" src=\"/public/kindeditor/attached/image/20151205/20151205210611_50547.png\" />【IS声称其两名追随者实施了加州枪击案】\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img alt=\"\" src=\"/public/kindeditor/attached/image/20151205/20151205210611_50547.png\" />路透社报道，IS极端组织的广播声称，该组织的两名追随者实施了#加州枪击案#。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img alt=\"\" src=\"/public/kindeditor/attached/image/20151205/20151205210611_50547.png\" />此前报道称，枪击案的女嫌犯塔什芬-马利克实施枪击前曾用化名在Facebook上向IS效忠。枪击案共致使14人死亡。（新浪）\r\n</p>', '1449320657');
INSERT INTO `ci_document` VALUES ('47', '15', '1', '测试表单数据验证', '', '啊啊啊啊啊啊啊aaaaaaaaaaaaa', '1450335588');

-- ----------------------------
-- Table structure for `ci_documentcate`
-- ----------------------------
DROP TABLE IF EXISTS `ci_documentcate`;
CREATE TABLE `ci_documentcate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_documentcate
-- ----------------------------
INSERT INTO `ci_documentcate` VALUES ('12', '0', '国内新闻', '1');
INSERT INTO `ci_documentcate` VALUES ('13', '0', '国际新闻', '2');
INSERT INTO `ci_documentcate` VALUES ('14', '12', '军事新闻', '1');
INSERT INTO `ci_documentcate` VALUES ('15', '14', '社会新闻', '1');

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
INSERT INTO `ci_system` VALUES ('装饰公司', '时代广场1号楼A座1008室', '0871-55667788', '冯先生 13833338888', 'mail@163.com', '传真', '123456', '123456', 'www.baidu.com', '版权所有', '首页标题', '首页关键词', '首页描述', '备注');

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
INSERT INTO `ci_user` VALUES ('1', 'admin', '8e36e8014ee6e6fb07f500ffd19c3bd0', '1', '1', '5', '1451383698', '::1', null, '1451201183');
INSERT INTO `ci_user` VALUES ('2', 'root', '8e36e8014ee6e6fb07f500ffd19c3bd0', '0', '1', '1', '1451208439', '::1', null, '1451201183');
