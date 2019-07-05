/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : peopleinfo

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-07-05 15:55:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pereducation
-- ----------------------------
DROP TABLE IF EXISTS `pereducation`;
CREATE TABLE `pereducation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `starttime` int(11) DEFAULT NULL COMMENT '起始日期',
  `endtime` int(11) DEFAULT NULL COMMENT '终止日期',
  `school` varchar(255) DEFAULT NULL COMMENT '学校',
  `major` varchar(255) DEFAULT NULL COMMENT '专业',
  `education` varchar(255) DEFAULT NULL COMMENT '学历',
  `degree` varchar(255) DEFAULT NULL COMMENT '学位',
  `perinfo_id` int(11) DEFAULT NULL COMMENT '个人信息id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pereducation
-- ----------------------------

-- ----------------------------
-- Table structure for peregister
-- ----------------------------
DROP TABLE IF EXISTS `peregister`;
CREATE TABLE `peregister` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) NOT NULL COMMENT '注册(登录)手机号',
  `name` varchar(255) NOT NULL COMMENT '注册姓名',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '1 为可查 2 不可查',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) NOT NULL COMMENT '用户创建时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '用户删除时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of peregister
-- ----------------------------
INSERT INTO `peregister` VALUES ('1', '18511067153', 'admin', '1', '1562297740', '1562297740', null);
INSERT INTO `peregister` VALUES ('2', '18511067154', 'admin1', '1', '1562312188', '1562312188', null);

-- ----------------------------
-- Table structure for perfamily
-- ----------------------------
DROP TABLE IF EXISTS `perfamily`;
CREATE TABLE `perfamily` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `familyname` varchar(255) DEFAULT NULL COMMENT '家庭成员姓名',
  `familyrelation` varchar(255) DEFAULT NULL COMMENT '家庭成员关系',
  `familycompany` varchar(255) DEFAULT NULL COMMENT '家庭成员单位',
  `familypost` varchar(255) DEFAULT NULL COMMENT 'j家庭成员职务',
  `familytime` int(10) unsigned DEFAULT NULL COMMENT '家庭成员出生日期',
  `familypolice` tinyint(4) DEFAULT '1' COMMENT '家庭成员政治面貌 1 为群众 2 团员 3 党员',
  `perinfo_id` int(10) unsigned DEFAULT NULL COMMENT '个人信息id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perfamily
-- ----------------------------

-- ----------------------------
-- Table structure for perimage
-- ----------------------------
DROP TABLE IF EXISTS `perimage`;
CREATE TABLE `perimage` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL COMMENT '图片路劲',
  `from` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 来自本地，2 来自公网',
  `delete_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perimage
-- ----------------------------

-- ----------------------------
-- Table structure for perinfo
-- ----------------------------
DROP TABLE IF EXISTS `perinfo`;
CREATE TABLE `perinfo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '姓名',
  `sex` tinyint(255) unsigned NOT NULL DEFAULT '1' COMMENT '性别 1 为男 2 为女',
  `height` double unsigned NOT NULL COMMENT '升高',
  `birthdate` datetime NOT NULL COMMENT '出身日期',
  `
birthplace` varchar(255) NOT NULL COMMENT '出身地',
  `marystates` tinyint(3) unsigned NOT NULL COMMENT '婚姻状况 1 未婚 2 已婚',
  `nation` varchar(255) NOT NULL COMMENT '民族',
  `idcard` varchar(255) NOT NULL COMMENT '身份证号',
  `education` varchar(255) NOT NULL COMMENT '学历',
  `graduate` varchar(255) NOT NULL COMMENT '毕业学校',
  `worktime` tinyint(3) unsigned NOT NULL COMMENT '工作年限',
  `localworktime` varchar(255) NOT NULL COMMENT '本单位工作年限',
  `workhours` datetime NOT NULL COMMENT '参加工作时间',
  `political` tinyint(4) NOT NULL COMMENT '政治面貌 1 群众 2 团员 3 党员',
  `phone` varchar(255) NOT NULL COMMENT '手机号码',
  `workphone` varchar(255) DEFAULT NULL COMMENT '单位电话',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `uperegister_id` int(11) DEFAULT NULL COMMENT '修改用户id',
  `peregister_id` int(11) unsigned DEFAULT NULL COMMENT '注册用户id',
  `perimage_id` int(11) DEFAULT NULL COMMENT '图片id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perinfo
-- ----------------------------

-- ----------------------------
-- Table structure for perjob
-- ----------------------------
DROP TABLE IF EXISTS `perjob`;
CREATE TABLE `perjob` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jobnumber` int(10) unsigned NOT NULL COMMENT '工号',
  `

department` varchar(255) NOT NULL COMMENT '所属部门',
  `jobname` varchar(255) NOT NULL COMMENT '岗位名称',
  `peopletype` varchar(255) NOT NULL COMMENT '员工类别',
  `calltitle` varchar(255) DEFAULT NULL COMMENT '职称',
  `workstate` varchar(255) NOT NULL COMMENT '工作状态',
  `jobstate` varchar(255) NOT NULL COMMENT '在职状态',
  `joblevel` varchar(255) DEFAULT NULL COMMENT '任职资格等级',
  `startjobdate` datetime DEFAULT NULL COMMENT '入职时间',
  `partycategory` varchar(255) DEFAULT NULL COMMENT '党政类别',
  `addtime` int(11) DEFAULT NULL COMMENT '党政加入时间',
  `partyserving` varchar(255) DEFAULT NULL COMMENT '党政任职情况',
  `addcompany` varchar(255) DEFAULT NULL COMMENT '加入单位',
  `introducer` varchar(255) DEFAULT NULL COMMENT '党政介绍人',
  `perinfo_id` int(10) unsigned DEFAULT NULL COMMENT 'perinfo表id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perjob
-- ----------------------------

-- ----------------------------
-- Table structure for perole
-- ----------------------------
DROP TABLE IF EXISTS `perole`;
CREATE TABLE `perole` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rolename` varchar(255) NOT NULL COMMENT '角色名称',
  `create_time` datetime NOT NULL COMMENT '角色创建名称',
  `description` varchar(255) NOT NULL COMMENT '角色描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perole
-- ----------------------------

-- ----------------------------
-- Table structure for perwork
-- ----------------------------
DROP TABLE IF EXISTS `perwork`;
CREATE TABLE `perwork` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `starttime` int(11) DEFAULT NULL COMMENT '开始时间',
  `endtime` int(11) DEFAULT NULL COMMENT '结束时间',
  `workaddress` varchar(255) DEFAULT NULL COMMENT '工作地点',
  `duties` varchar(255) DEFAULT NULL COMMENT '职务或岗位',
  `perinfo_id` int(11) DEFAULT NULL COMMENT '个人信息id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perwork
-- ----------------------------
