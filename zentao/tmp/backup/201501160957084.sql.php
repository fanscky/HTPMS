<?php die();?>
SET NAMES utf8;
DROP TABLE IF EXISTS `zt_action`;
CREATE TABLE `zt_action` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product` varchar(255) NOT NULL,
  `project` mediumint(9) NOT NULL,
  `actor` varchar(30) NOT NULL DEFAULT '',
  `action` varchar(30) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `comment` text NOT NULL,
  `extra` varchar(255) NOT NULL,
  `read` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=174 DEFAULT CHARSET=utf8;
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('1','user','1',',0,','0','admin','logout','2015-01-13 17:45:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('2','user','1',',0,','0','admin','login','2015-01-13 17:45:21','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('3','product','1',',1,','0','admin','opened','2015-01-13 18:00:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('4','user','1',',0,','0','admin','login','2015-01-13 18:25:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('5','product','1',',1,','0','admin','edited','2015-01-13 20:03:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('6','product','2',',2,','0','admin','opened','2015-01-13 20:03:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('7','product','2',',2,','0','admin','edited','2015-01-13 20:04:44','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('8','product','1',',1,','0','admin','edited','2015-01-13 20:05:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('9','product','2',',2,','0','admin','edited','2015-01-13 20:05:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('10','product','3',',3,','0','admin','opened','2015-01-13 20:07:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('11','product','4',',4,','0','admin','opened','2015-01-13 20:09:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('12','product','5',',5,','0','admin','opened','2015-01-13 20:14:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('13','project','1',',1,','1','admin','opened','2015-01-13 20:20:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('14','user','1',',0,','0','admin','login','2015-01-13 20:28:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('15','user','1',',0,','0','admin','login','2015-01-13 20:55:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('16','user','1',',0,','0','admin','logout','2015-01-13 20:58:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('17','user','1',',0,','0','admin','login','2015-01-13 20:58:18','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('18','user','1',',0,','0','admin','login','2015-01-14 10:07:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('19','user','1',',0,','0','admin','login','2015-01-14 10:12:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('20','story','1',',1,','0','admin','opened','2015-01-14 11:06:44','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('21','story','1',',1,','0','admin','changed','2015-01-14 11:17:47','上传了附件 GBT 19056-2012 汽车行驶记录仪.pdf,GJB 150.3-1986军用设备环境试验方法 高温试验.PDF
','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('22','story','1',',1,','0','admin','edited','2015-01-14 11:18:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('23','story','2',',1,','0','admin','opened','2015-01-14 11:35:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('24','story','2',',1,','0','admin','edited','2015-01-14 11:35:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('25','story','2',',1,','2','admin','linked2project','2015-01-14 11:36:31','','2','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('26','story','1',',1,','2','admin','linked2project','2015-01-14 11:36:31','','2','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('27','user','1',',0,','0','admin','login','2015-01-14 13:49:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('28','user','1',',0,','0','admin','login','2015-01-14 15:57:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('29','productplan','2',',1,','0','admin','opened','2015-01-14 16:33:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('30','user','1',',0,','0','admin','logout','2015-01-14 16:41:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('31','user','2',',0,','0','caikaiye','login','2015-01-14 16:41:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('32','story','2',',1,','2','caikaiye','edited','2015-01-14 17:09:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('33','case','1',',1,','0','caikaiye','opened','2015-01-14 17:20:12','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('34','user','2',',0,','0','caikaiye','logout','2015-01-14 17:20:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('35','user','1',',0,','0','admin','login','2015-01-14 17:20:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('36','case','2',',1,','0','admin','opened','2015-01-14 17:24:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('37','user','1',',0,','0','admin','logout','2015-01-14 17:24:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('38','user','2',',0,','0','caikaiye','login','2015-01-14 17:24:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('39','case','1',',1,','0','caikaiye','edited','2015-01-14 17:25:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('40','case','3',',1,','0','caikaiye','opened','2015-01-14 17:27:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('41','case','4',',1,','0','caikaiye','opened','2015-01-14 17:28:51','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('42','case','2',',1,','0','caikaiye','edited','2015-01-14 17:29:18','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('43','build','1',',1,','2','caikaiye','opened','2015-01-14 17:40:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('44','testtask','1',',1,','2','caikaiye','opened','2015-01-14 17:41:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('45','case','4',',1,','0','caikaiye','edited','2015-01-14 18:50:56','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('46','case','3',',1,','0','caikaiye','edited','2015-01-14 18:52:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('47','case','2',',1,','0','caikaiye','edited','2015-01-14 18:52:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('48','case','1',',1,','0','caikaiye','edited','2015-01-14 18:52:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('49','case','4',',1,','0','caikaiye','edited','2015-01-14 18:55:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('50','case','3',',1,','0','caikaiye','edited','2015-01-14 18:55:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('51','case','4',',1,','0','caikaiye','edited','2015-01-14 18:56:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('52','case','3',',1,','0','caikaiye','edited','2015-01-14 18:57:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('53','case','2',',1,','0','caikaiye','edited','2015-01-14 18:57:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('54','case','1',',1,','0','caikaiye','edited','2015-01-14 18:57:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('55','case','5',',1,','0','caikaiye','opened','2015-01-14 18:58:02','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('56','case','5',',1,','0','caikaiye','edited','2015-01-14 18:58:22','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('57','case','5',',1,','0','caikaiye','deleted','2015-01-14 18:58:28','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('58','user','2',',0,','0','caikaiye','logout','2015-01-14 18:59:21','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('59','user','2',',0,','0','caikaiye','login','2015-01-14 19:00:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('60','user','2',',0,','0','caikaiye','logout','2015-01-14 19:04:09','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('61','user','1',',0,','0','admin','login','2015-01-14 19:04:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('62','user','1',',0,','0','admin','logout','2015-01-14 19:06:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('63','user','2',',0,','0','caikaiye','login','2015-01-14 19:06:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('64','task','1',',1,','2','caikaiye','opened','2015-01-14 19:10:03','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('65','user','2',',0,','0','caikaiye','logout','2015-01-14 19:13:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('66','user','1',',0,','0','admin','login','2015-01-14 19:13:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('67','project','3',',5,','3','admin','opened','2015-01-14 19:21:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('68','project','3',',5,','3','admin','edited','2015-01-14 19:23:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('69','user','1',',0,','0','admin','logout','2015-01-14 19:24:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('70','user','2',',0,','0','caikaiye','login','2015-01-14 19:24:12','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('71','user','2',',0,','0','caikaiye','logout','2015-01-14 19:24:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('72','user','1',',0,','0','admin','login','2015-01-14 19:24:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('73','project','2',',1,','2','admin','started','2015-01-14 19:30:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('74','project','1',',1,','1','admin','started','2015-01-14 19:30:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('75','project','1',',1,','1','admin','edited','2015-01-14 19:31:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('76','project','1',',1,','1','admin','edited','2015-01-14 19:32:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('77','productplan','3',',5,','0','admin','opened','2015-01-14 19:36:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('78','project','3',',5,','3','admin','edited','2015-01-14 19:49:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('79','story','3',',5,','0','admin','opened','2015-01-14 20:09:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('80','story','3',',5,','0','admin','changed','2015-01-14 20:11:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('81','story','4',',5,','0','admin','opened','2015-01-14 20:15:21','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('82','story','3',',5,','0','admin','reviewed','2015-01-14 20:16:24','','Pass','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('83','user','1',',0,','0','admin','logout','2015-01-14 20:17:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('84','user','2',',0,','0','caikaiye','login','2015-01-14 20:17:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('85','story','4',',5,','3','caikaiye','linked2project','2015-01-14 20:20:28','','3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('86','story','3',',5,','3','caikaiye','linked2project','2015-01-14 20:20:28','','3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('87','story','3',',5,','0','caikaiye','unlinkedfromproject','2015-01-14 20:20:33','','3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('88','story','4',',5,','0','caikaiye','unlinkedfromproject','2015-01-14 20:20:35','','3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('89','story','3',',5,','0','caikaiye','edited','2015-01-14 20:21:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('90','story','4',',5,','3','caikaiye','linked2project','2015-01-14 20:21:28','','3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('91','story','3',',5,','3','caikaiye','linked2project','2015-01-14 20:21:28','','3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('92','story','4',',5,','3','caikaiye','edited','2015-01-14 20:21:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('93','user','2',',0,','0','caikaiye','login','2015-01-14 20:24:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('94','user','2',',0,','0','caikaiye','login','2015-01-14 20:31:18','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('95','user','1',',0,','0','admin','login','2015-01-14 20:38:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('96','user','1',',0,','0','admin','logout','2015-01-14 20:38:34','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('97','user','2',',0,','0','caikaiye','login','2015-01-14 20:38:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('98','user','2',',0,','0','caikaiye','logout','2015-01-14 20:38:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('99','user','2',',0,','0','caikaiye','login','2015-01-15 09:59:26','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('100','user','2',',0,','0','caikaiye','login','2015-01-15 10:55:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('101','user','2',',0,','0','caikaiye','login','2015-01-15 13:48:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('102','task','1',',1,','2','caikaiye','started','2015-01-15 13:50:43','搭环境开始测试','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('103','task','1',',1,','2','caikaiye','editestimate','2015-01-15 13:52:06','开始搭MTFI-ST V1.0 SDV测试【低温工作】模型','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('104','user','2',',0,','0','caikaiye','logout','2015-01-15 14:05:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('105','user','1',',0,','0','admin','login','2015-01-15 14:05:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('106','user','1',',0,','0','admin','logout','2015-01-15 14:11:53','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('107','user','7',',0,','0','wangali','login','2015-01-15 14:12:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('108','user','7',',0,','0','wangali','logout','2015-01-15 14:12:22','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('109','user','1',',0,','0','admin','login','2015-01-15 14:12:26','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('110','user','1',',0,','0','admin','login','2015-01-15 14:18:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('111','user','1',',0,','0','admin','login','2015-01-15 14:37:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('112','user','1',',0,','0','admin','login','2015-01-15 14:55:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('113','user','1',',0,','0','admin','logout','2015-01-15 15:17:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('114','user','2',',0,','0','caikaiye','login','2015-01-15 15:17:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('115','task','1',',1,','2','caikaiye','edited','2015-01-15 15:28:23','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('116','story','2',',1,','2','caikaiye','edited','2015-01-15 15:40:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('117','user','2',',0,','0','caikaiye','login','2015-01-15 15:41:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('118','story','2',',1,','2','caikaiye','edited','2015-01-15 15:42:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('119','story','1',',1,','2','caikaiye','edited','2015-01-15 15:43:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('120','todo','1',',0,','0','caikaiye','opened','2015-01-15 15:45:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('121','todo','1',',0,','0','caikaiye','erased','2015-01-15 15:49:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('122','todo','2',',0,','0','caikaiye','opened','2015-01-15 15:49:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('123','user','3',',0,','0','liuxianbing','login','2015-01-15 15:57:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('124','user','2',',0,','0','caikaiye','logout','2015-01-15 16:19:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('125','user','1',',0,','0','admin','login','2015-01-15 16:19:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('126','user','6',',0,','0','raoluhua','login','2015-01-15 16:25:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('127','user','1',',0,','0','admin','logout','2015-01-15 17:00:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('128','user','2',',0,','0','caikaiye','login','2015-01-15 17:00:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('129','todo','2',',0,','0','caikaiye','finished','2015-01-15 17:07:48','','done','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('130','todo','3',',0,','0','caikaiye','opened','2015-01-15 17:09:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('131','task','1',',1,','2','caikaiye','editestimate','2015-01-15 17:10:13','开始搭MTFI-ST V1.0 SDV测试【低温工作】模型','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('132','task','1',',1,','2','caikaiye','editestimate','2015-01-15 17:11:21','初始测试不稳定，查看原因','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('133','task','1',',1,','2','caikaiye','recordestimate','2015-01-15 17:11:46','分析查看测试结果','3','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('134','task','1',',1,','2','caikaiye','editestimate','2015-01-15 17:12:21','分析查看测试结果','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('135','user','7',',0,','0','wangali','login','2015-01-15 17:16:15','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('136','user','2',',0,','0','caikaiye','login','2015-01-15 17:43:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('137','user','2',',0,','0','caikaiye','login','2015-01-15 17:47:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('138','task','2',',1,','2','caikaiye','opened','2015-01-15 17:53:53','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('139','task','2',',1,','2','caikaiye','started','2015-01-15 17:54:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('140','bug','1',',1,','2','caikaiye','opened','2015-01-15 17:56:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('141','bug','2',',1,','2','caikaiye','opened','2015-01-15 17:58:07','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('142','user','1',',0,','0','admin','login','2015-01-15 18:27:44','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('143','user','2',',0,','0','caikaiye','login','2015-01-15 18:31:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('144','user','2',',0,','0','caikaiye','login','2015-01-15 18:32:45','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('145','user','2',',0,','0','caikaiye','logout','2015-01-15 18:32:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('146','user','5',',0,','0','caowei','login','2015-01-15 18:36:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('147','user','2',',0,','0','caikaiye','login','2015-01-15 18:36:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('148','user','3',',0,','0','liuxianbing','login','2015-01-15 18:36:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('149','user','3',',0,','0','liuxianbing','logout','2015-01-15 18:37:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('150','user','2',',0,','0','caikaiye','login','2015-01-15 18:38:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('151','user','2',',0,','0','caikaiye','login','2015-01-15 19:51:16','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('152','user','2',',0,','0','caikaiye','logout','2015-01-15 20:04:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('153','user','1',',0,','0','admin','login','2015-01-15 20:04:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('154','project','4',',5,','4','admin','opened','2015-01-15 20:05:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('155','user','7',',0,','0','wangali','login','2015-01-16 09:06:34','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('156','user','1',',0,','0','admin','login','2015-01-16 09:10:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('157','project','5',',5,','5','admin','opened','2015-01-16 09:27:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('158','user','5',',0,','0','caowei','login','2015-01-16 09:28:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('159','project','6',',1,','6','admin','opened','2015-01-16 09:36:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('160','todo','4',',0,','0','caowei','opened','2015-01-16 09:37:55','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('161','project','4',',1,2,3,4,5,','4','admin','edited','2015-01-16 09:40:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('162','todo','5',',0,','0','caowei','opened','2015-01-16 09:41:11','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('163','user','3',',0,','0','liuxianbing','login','2015-01-16 09:42:02','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('164','project','4',',1,2,3,4,5,','4','admin','edited','2015-01-16 09:42:45','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('165','user','5',',0,','0','caowei','login','2015-01-16 09:44:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('166','project','6',',1,','6','admin','edited','2015-01-16 09:46:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('167','project','3',',5,','3','admin','edited','2015-01-16 09:46:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('168','todo','6',',0,','0','caowei','opened','2015-01-16 09:48:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('169','project','4',',1,2,3,4,5,','4','admin','edited','2015-01-16 09:52:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('170','project','4',',1,2,3,4,5,','4','admin','edited','2015-01-16 09:52:28','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('171','todo','7',',0,','0','caowei','opened','2015-01-16 09:54:56','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('172','user','1',',0,','0','admin','logout','2015-01-16 09:56:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('173','user','2',',0,','0','caikaiye','login','2015-01-16 09:57:03','','','0');
DROP TABLE IF EXISTS `zt_bug`;
CREATE TABLE `zt_bug` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plan` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `story` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `storyVersion` smallint(6) NOT NULL DEFAULT '1',
  `task` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `toTask` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `toStory` mediumint(8) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `severity` tinyint(4) NOT NULL DEFAULT '0',
  `pri` tinyint(3) unsigned NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT '',
  `os` varchar(30) NOT NULL DEFAULT '',
  `browser` varchar(30) NOT NULL DEFAULT '',
  `hardware` varchar(30) NOT NULL,
  `found` varchar(30) NOT NULL DEFAULT '',
  `steps` text NOT NULL,
  `status` enum('active','resolved','closed') NOT NULL DEFAULT 'active',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `activatedCount` smallint(6) NOT NULL,
  `mailto` varchar(255) NOT NULL DEFAULT '',
  `openedBy` varchar(30) NOT NULL DEFAULT '',
  `openedDate` datetime NOT NULL,
  `openedBuild` varchar(255) NOT NULL,
  `assignedTo` varchar(30) NOT NULL DEFAULT '',
  `assignedDate` datetime NOT NULL,
  `resolvedBy` varchar(30) NOT NULL DEFAULT '',
  `resolution` varchar(30) NOT NULL DEFAULT '',
  `resolvedBuild` varchar(30) NOT NULL DEFAULT '',
  `resolvedDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` datetime NOT NULL,
  `duplicateBug` mediumint(8) unsigned NOT NULL,
  `linkBug` varchar(255) NOT NULL,
  `case` mediumint(8) unsigned NOT NULL,
  `caseVersion` smallint(6) NOT NULL DEFAULT '1',
  `result` mediumint(8) unsigned NOT NULL,
  `testtask` mediumint(8) unsigned NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL DEFAULT '',
  `lastEditedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `os` (`os`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `zt_bug`(`id`,`product`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('1','1','154','2','0','1','2','2','0','0','【道路与轨道交通】【道路交通】【MTFI】【SDV测试】高温工作测试','高温工作  车载 道路 轨道','3','0','circuit','sdv','Internaltest','','','<p>[前置条件]</p>
【样机】准入测试《通过》的研发样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；<p>[步骤]</p>
1. 【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；<br /><p>[结果]</p>
1. 回到常温后，性能不能恢复<br /><p>[期望]</p>1. 【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；<br />','active','0','0',',caikaiye,caowei,luzhiqiang,raoluhua,liuxianbing','caikaiye','2015-01-15 17:56:50','1','caikaiye','2015-01-15 17:56:50','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','','3','4','0','0','','0000-00-00 00:00:00','0');
INSERT INTO `zt_bug`(`id`,`product`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('2','1','153','2','0','2','1','1','0','0','【道路与轨道交通】【道路交通】【MTFI】【SDV测试】低温工作测试','低温工作  车载 道路 轨道','5','0','circuit','sdv','Internaltest','','','<p>[前置条件]</p>
【样机】准入测试《通过》的研发样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；<p>[步骤]</p>
1. 【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；<br /><p>[结果]</p>
1.  出现两次重启，报堆栈错误<br /><p>[期望]</p>1. 【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；<br />','active','0','0',',caikaiye,caowei,luzhiqiang,wangali,liuxianbing','caikaiye','2015-01-15 17:58:07','1','caikaiye','2015-01-15 17:58:07','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','','1','4','0','0','','0000-00-00 00:00:00','0');
DROP TABLE IF EXISTS `zt_build`;
CREATE TABLE `zt_build` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(150) NOT NULL,
  `scmPath` char(255) NOT NULL,
  `filePath` char(255) NOT NULL,
  `date` date NOT NULL,
  `stories` text NOT NULL,
  `bugs` text NOT NULL,
  `builder` char(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `zt_build`(`id`,`product`,`project`,`name`,`scmPath`,`filePath`,`date`,`stories`,`bugs`,`builder`,`desc`,`deleted`) VALUES ('1','1','2','RG-MTFI-ST V1.0 【SDV测试】','','','2015-01-14',',2,1','','caikaiye','<p><strong>【产品名称】：</strong>RG-MTFI-ST V1.0；</p>
<p><strong>【客户】：</strong>广东东莞车宝；</p>
<p><strong>【应用场景】：</strong>长途大巴，商务旅行车；</p>
<p><strong>【计划出货量】：</strong>1000；</p>
<p><strong>【测试时间节点】：</strong>2015年2月1日；</p>
<p><strong>【项目组】：</strong>无线事业部-黄金灿组</p>
<p><strong>【</strong><strong>研发测试样机数</strong><strong>】</strong>：5台。可靠性 - 1；基本功能+性能 - 1；EMC+安规&nbsp;- 1；生产程序+主程序 - 1；外场+客户体验&nbsp;- 1；</p>','0');
DROP TABLE IF EXISTS `zt_burn`;
CREATE TABLE `zt_burn` (
  `project` mediumint(8) unsigned NOT NULL,
  `date` date NOT NULL,
  `left` float NOT NULL,
  `consumed` float NOT NULL,
  PRIMARY KEY (`project`,`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_burn`(`project`,`date`,`left`,`consumed`) VALUES ('2','2015-01-14','26','0');
DROP TABLE IF EXISTS `zt_case`;
CREATE TABLE `zt_case` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `story` mediumint(30) unsigned NOT NULL DEFAULT '0',
  `storyVersion` smallint(6) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `precondition` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `type` char(30) NOT NULL DEFAULT '1',
  `stage` varchar(255) NOT NULL,
  `howRun` varchar(30) NOT NULL,
  `scriptedBy` varchar(30) NOT NULL,
  `scriptedDate` date NOT NULL,
  `scriptStatus` varchar(30) NOT NULL,
  `scriptLocation` varchar(255) NOT NULL,
  `status` char(30) NOT NULL DEFAULT '1',
  `frequency` enum('1','2','3') NOT NULL DEFAULT '1',
  `order` tinyint(30) unsigned NOT NULL DEFAULT '0',
  `openedBy` char(30) NOT NULL DEFAULT '',
  `openedDate` datetime NOT NULL,
  `lastEditedBy` char(30) NOT NULL DEFAULT '',
  `lastEditedDate` datetime NOT NULL,
  `version` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `linkCase` varchar(255) NOT NULL,
  `fromBug` mediumint(8) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `lastRunner` varchar(30) NOT NULL,
  `lastRunDate` datetime NOT NULL,
  `lastRunResult` char(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
INSERT INTO `zt_case`(`id`,`product`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`frequency`,`order`,`openedBy`,`openedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('1','1','153','0','2','1','【道路与轨道交通】【道路交通】【MTFI】【SDV测试】低温工作测试','【样机】准入测试《通过》的研发样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；','车载  道路交通 交通 低温 MTFI','3','reliability',',sdv','','','0000-00-00','','','normal','1','0','caikaiye','2015-01-14 17:20:12','caikaiye','2015-01-14 18:57:30','4','','0','0','caikaiye','2015-01-15 17:44:46','fail');
INSERT INTO `zt_case`(`id`,`product`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`frequency`,`order`,`openedBy`,`openedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('2','1','153','0','2','1','【道路与轨道交通】【道路交通】【MTFI】【SIT测试】低温工作测试','【样机】准入测试《通过》的中试样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过准入测试，并且测试《通过》；','车载  道路交通 交通 低温 MTFI','3','reliability',',sit','','','0000-00-00','','','normal','1','0','caikaiye','2015-01-14 17:24:06','caikaiye','2015-01-14 18:57:17','4','','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`frequency`,`order`,`openedBy`,`openedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('3','1','154','0','1','2','【道路与轨道交通】【道路交通】【MTFI】【SDV测试】高温工作测试','【样机】准入测试《通过》的研发样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；','车载  道路交通 交通 高温 MTFI','3','reliability',',sdv','','','0000-00-00','','','normal','1','0','caikaiye','2015-01-14 17:27:25','caikaiye','2015-01-14 18:57:07','4','','0','0','caikaiye','2015-01-15 17:45:39','fail');
INSERT INTO `zt_case`(`id`,`product`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`frequency`,`order`,`openedBy`,`openedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('4','1','154','0','1','2','【道路与轨道交通】【道路交通】【MTFI】【SIT测试】高温工作测试','【样机】准入测试《通过》的中试样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；','车载  道路交通 交通 高温 MTFI','3','reliability',',sit','','','0000-00-00','','','normal','1','0','caikaiye','2015-01-14 17:28:50','caikaiye','2015-01-14 18:56:57','4','','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`frequency`,`order`,`openedBy`,`openedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('5','1','155','0','0','2','【道路与轨道交通】【道路交通】【MTFI】【SIT测试】温度循环工作测试','【样机】准入测试《通过》的中试样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；','车载  道路交通 交通 高温 MTFI','3','reliability',',sit','','','0000-00-00','','','normal','1','0','caikaiye','2015-01-14 18:58:02','caikaiye','2015-01-14 18:58:22','2','','0','1','','0000-00-00 00:00:00','');
DROP TABLE IF EXISTS `zt_casestep`;
CREATE TABLE `zt_casestep` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `case` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `version` smallint(3) unsigned NOT NULL DEFAULT '0',
  `desc` text NOT NULL,
  `expect` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `case` (`case`,`version`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('1','1','1','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('2','1','1','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('3','1','1','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('4','1','1','【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('5','1','1','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('6','1','1','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('7','2','1','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('8','2','1','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('9','2','1','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('10','2','1','【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('11','2','1','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('12','2','1','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('13','1','2','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('14','1','2','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('15','1','2','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('16','1','2','【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('17','1','2','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('18','1','2','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('19','3','1','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('20','3','1','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('21','3','1','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('22','3','1','【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('23','3','1','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('24','3','1','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('25','4','1','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('26','4','1','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('27','4','1','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('28','4','1','【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('29','4','1','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('30','4','1','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('31','2','2','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('32','2','2','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('33','2','2','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('34','2','2','【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('35','2','2','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('36','2','2','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('37','4','2','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('38','4','2','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('39','4','2','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('40','4','2','【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('41','4','2','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('42','4','2','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('43','3','2','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('44','3','2','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('45','3','2','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('46','3','2','【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('47','3','2','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('48','3','2','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('49','2','3','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('50','2','3','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('51','2','3','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('52','2','3','【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('53','2','3','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('54','2','3','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('55','1','3','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('56','1','3','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('57','1','3','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('58','1','3','【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('59','1','3','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('60','1','3','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('61','4','3','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('62','4','3','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('63','4','3','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('64','4','3','【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('65','4','3','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('66','4','3','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('67','3','3','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；

');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('68','3','3','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('69','3','3','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('70','3','3','【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('71','3','3','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('72','3','3','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('73','4','4','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('74','4','4','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('75','4','4','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('76','4','4','【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('77','4','4','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('78','4','4','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('79','3','4','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('80','3','4','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('81','3','4','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('82','3','4','【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('83','3','4','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('84','3','4','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('85','2','4','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('86','2','4','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('87','2','4','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('88','2','4','【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('89','2','4','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('90','2','4','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('91','1','4','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('92','1','4','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('93','1','4','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('94','1','4','【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('95','1','4','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('96','1','4','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('97','5','1','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('98','5','1','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('99','5','1','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('100','5','1','【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('101','5','1','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('102','5','1','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('103','5','2','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外；','结构外观完整，不出现安装困难；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('104','5','2','【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('105','5','2','【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('106','5','2','【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('107','5','2','【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定；','');
INSERT INTO `zt_casestep`(`id`,`case`,`version`,`desc`,`expect`) VALUES ('108','5','2','【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）；','【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；');
DROP TABLE IF EXISTS `zt_company`;
CREATE TABLE `zt_company` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(120) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `fax` char(20) DEFAULT NULL,
  `address` char(120) DEFAULT NULL,
  `zipcode` char(10) DEFAULT NULL,
  `website` char(120) DEFAULT NULL,
  `backyard` char(120) DEFAULT NULL,
  `guest` enum('1','0') NOT NULL DEFAULT '0',
  `admins` char(255) DEFAULT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `zt_company`(`id`,`name`,`phone`,`fax`,`address`,`zipcode`,`website`,`backyard`,`guest`,`admins`,`deleted`) VALUES ('1','锐捷网络','0591-28053888','0591-83057373','福州市金山大道618号橘园洲星网锐捷科技园19＃楼','350001','http://bug.ruijie.net:8802/','http://migbug.ruijie.net/bug_switch/servlet/main','0',',admin,','0');
DROP TABLE IF EXISTS `zt_config`;
CREATE TABLE `zt_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `owner` char(30) NOT NULL DEFAULT '',
  `module` varchar(30) NOT NULL,
  `section` char(30) NOT NULL DEFAULT '',
  `key` char(30) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`owner`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=utf8;
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('1','system','common','global','version','6.4');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('2','system','common','global','flow','full');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('3','system','common','global','sn','dbe9de3761b12a1afcf741c60fbec035');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('185','system','mail','smtp','host','smtp.163.com');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('186','system','mail','smtp','port','25');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('187','system','mail','smtp','auth','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('188','system','mail','smtp','username','rjhtpms');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('189','system','mail','smtp','password','frigid');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('190','system','mail','smtp','secure','');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('191','system','mail','smtp','debug','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('192','system','mail','smtp','charset','gbk');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('193','system','mail','','turnon','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('194','system','mail','','mta','smtp');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('195','system','mail','','fromAddress','rjhtpms@163.com');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('196','system','mail','','fromName','硬件项目测试管理系统');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('16','system','common','global','community','na');
DROP TABLE IF EXISTS `zt_dept`;
CREATE TABLE `zt_dept` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(60) NOT NULL,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `position` char(30) NOT NULL DEFAULT '',
  `function` char(255) NOT NULL DEFAULT '',
  `manager` char(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('1','网研二部','0',',1,','1','10','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('2','硬件测试组','1',',1,2,','2','10','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('3','无线测试组','2',',1,2,3,','3','10','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('4','交换测试组','2',',1,2,4,','3','20','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('5','自动化组','2',',1,2,5,','3','30','','','');
DROP TABLE IF EXISTS `zt_doc`;
CREATE TABLE `zt_doc` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `lib` varchar(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `digest` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `views` smallint(5) unsigned NOT NULL,
  `addedBy` varchar(30) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `zt_doc`(`id`,`product`,`project`,`lib`,`module`,`title`,`digest`,`keywords`,`type`,`content`,`url`,`views`,`addedBy`,`addedDate`,`editedBy`,`editedDate`,`deleted`) VALUES ('1','1','2','project','53','【西郊地铁】【总体资料】铁路项目MTFI迭代','西郊地铁项目，迭代计划','铁路项目  MTFI  迭代','file','','','0','admin','2015-01-14 09:27:37','','0000-00-00 00:00:00','0');
DROP TABLE IF EXISTS `zt_doclib`;
CREATE TABLE `zt_doclib` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_effort`;
CREATE TABLE `zt_effort` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user` char(30) NOT NULL DEFAULT '',
  `todo` enum('1','0') NOT NULL DEFAULT '1',
  `date` date NOT NULL,
  `begin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` enum('1','2','3') NOT NULL DEFAULT '1',
  `idvalue` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(30) NOT NULL DEFAULT '',
  `desc` char(255) NOT NULL DEFAULT '',
  `status` enum('1','2','3') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_extension`;
CREATE TABLE `zt_extension` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `code` varchar(30) NOT NULL,
  `version` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `license` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'extension',
  `site` varchar(150) NOT NULL,
  `zentaoCompatible` varchar(100) NOT NULL,
  `installedTime` datetime NOT NULL,
  `depends` varchar(100) NOT NULL,
  `dirs` text NOT NULL,
  `files` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `name` (`name`),
  KEY `addedTime` (`installedTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_file`;
CREATE TABLE `zt_file` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pathname` char(50) NOT NULL,
  `title` char(90) NOT NULL,
  `extension` char(30) NOT NULL,
  `size` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `objectType` char(30) NOT NULL,
  `objectID` mediumint(9) NOT NULL,
  `addedBy` char(30) NOT NULL DEFAULT '',
  `addedDate` datetime NOT NULL,
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extra` varchar(255) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('1','201501/14092737048785no.pptx','铁路项目MTFI迭代','pptx','328014','doc','1','admin','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('2','201501/1410450907143otl.png','2423标准','png','190395','','0','admin','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('3','201501/14104909019992gf.png','行车记录仪','png','78914','','0','admin','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('4','201501/1410500403160k71.png','卫星定位系统','png','19822','','0','admin','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('5','201501/14110644046008m3.pdf','GBT 28046.4-2011 道路车辆 电气及电子设备的环境条件和试验 第4部分 气候负荷.pdf','pdf','2287102','story','1','admin','2015-01-14 00:00:00','0','1','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('6','201501/1411064419076l08.doc','JT／T794-2011道路运输车辆卫星定位系统车载终端技术要求.doc','doc','2744320','story','1','admin','2015-01-14 00:00:00','0','1','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('7','201501/14111747067062gf.pdf','GBT 19056-2012 汽车行驶记录仪.pdf','pdf','524812','story','1','admin','2015-01-14 00:00:00','0','2','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('8','201501/1411174715144pl6.pdf','GJB 150.3-1986军用设备环境试验方法 高温试验.PDF','pdf','75641','story','1','admin','2015-01-14 00:00:00','0','2','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('9','201501/1411320206064lml.png','19056低温','png','32442','','0','admin','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('10','201501/1411342407141otl.png','2423低温','png','18547','','0','admin','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('11','201501/1411353101726otl.pdf','GB 2423.1-2001电工电子产品基本环境试验规程 试验A低温试验方法.pdf','pdf','933739','story','2','admin','2015-01-14 00:00:00','0','1','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('12','201501/14113531156378m3.pdf','GBT 19056-2012 汽车行驶记录仪.pdf','pdf','524812','story','2','admin','2015-01-14 00:00:00','0','1','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('13','201501/1411353123989lml.pdf','GJB 150.4-1986军用设备环境试验方法 低温试验.PDF','pdf','71581','story','2','admin','2015-01-14 00:00:00','0','1','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('14','201501/14172012078102cm.jpg','MTFI低温工作温度与上下电曲线.jpg','jpg','79367','testcase','1','caikaiye','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('15','201501/14172012157490pm.jpg','MTFI 测试模型.jpg','jpg','44710','testcase','1','caikaiye','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('16','201501/1417240607991rji.jpg','MTFI 测试模型.jpg','jpg','44710','testcase','2','admin','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('17','201501/1417240612199pml.jpg','MTFI低温工作温度与上下电曲线.jpg','jpg','79367','testcase','2','admin','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('18','201501/1417272501404ji2.jpg','MTFI 测试模型.jpg','jpg','44710','testcase','3','caikaiye','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('19','201501/1417272513897mli.jpg','MTFI高温工作温度与上下电曲线.jpg','jpg','78657','testcase','3','caikaiye','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('20','201501/1417285001862i2c.jpg','MTFI 测试模型.jpg','jpg','44710','testcase','4','caikaiye','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('21','201501/1417285017286ilr.jpg','MTFI高温工作温度与上下电曲线','jpg','78657','testcase','4','caikaiye','2015-01-14 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('22','201501/1517565005974c71.log','高温工作','log','38','bug','1','caikaiye','2015-01-15 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('23','201501/1517580709555vf8.log','低温工作','log','38','bug','2','caikaiye','2015-01-15 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('24','201501/160937260773gic.png','1','png','397758','','0','caowei','2015-01-16 00:00:00','0','','0');
DROP TABLE IF EXISTS `zt_group`;
CREATE TABLE `zt_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `role` char(30) NOT NULL DEFAULT '',
  `desc` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('1','管理员','admin','系统管理员');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('2','研发','dev','研发人员');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('3','测试','qa','负责测试用例执行，完成测试活动，汇总测试数据');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('4','项目经理','pm','项目经理');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('5','产品经理','po','产品经理');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('6','研发主管','td','研发主管');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('7','产品主管','pd','产品主管');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('8','测试主管','qd','测试主管');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('9','高层管理','top','高层管理');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('10','其他','','其他');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('11','guest','guest','For guest');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`) VALUES ('12','测试代表','ptm','硬件内部测试项目负责人。
负责收集测试需求、设计测试用例、跟踪测试进度、bug分析闭环');
DROP TABLE IF EXISTS `zt_grouppriv`;
CREATE TABLE `zt_grouppriv` (
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` char(30) NOT NULL DEFAULT '',
  `method` char(30) NOT NULL DEFAULT '',
  UNIQUE KEY `group` (`group`,`module`,`method`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','hideAll');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','hideOne');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','trash');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','undelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','admin','checkDB');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','admin','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','api','debug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','api','query');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','backup');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','restore');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','checkBugFree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','checkConfig');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','checkRedmine');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','convertBugFree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','convertRedmine');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','execute');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','selectSource');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','setBugfree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','setConfig');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','setRedmine');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','restore');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','set');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','extend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','newPage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','save');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','deactivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','erase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','install');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','obtain');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','structure');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','uninstall');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','upgrade');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','upload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','copy');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','manageMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','managePriv');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','detect');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','reset');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','save');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','test');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchChangePlan');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchChangeStage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','change');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','confirmChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','batchAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','batchRun');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','linkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','runcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','unlinkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','unlock');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','confirmChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','batchAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','batchRun');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','linkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','runcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','unlinkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','action','hideAll');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','action','hideOne');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','action','trash');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','action','undelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','admin','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','extension','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','extension','obtain');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','extension','structure');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','batchAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','action','hideAll');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','action','hideOne');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','action','trash');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','action','undelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','admin','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','extension','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','extension','obtain');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','extension','structure');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchChangePlan');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchChangeStage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','change');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','action','hideAll');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','action','hideOne');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','action','trash');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','action','undelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','admin','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','extension','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','extension','obtain');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','extension','structure');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','action','hideAll');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','action','hideOne');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','action','trash');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','action','undelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','admin','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','extension','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','extension','obtain');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','extension','structure');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchChangePlan');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchChangeStage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','change');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','action','hideAll');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','action','hideOne');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','action','trash');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','action','undelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','admin','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','extension','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','extension','obtain');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','extension','structure');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','confirmChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','batchAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','batchRun');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','linkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','runcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','unlinkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','action','hideAll');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','action','hideOne');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','action','trash');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','action','undelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','admin','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','company','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','dept','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','dept','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','dept','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','dept','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','extension','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','extension','obtain');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','extension','structure');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','build','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','build','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','build','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','build','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','build','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','build','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','productplan','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','productplan','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','productplan','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','productplan','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','productplan','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','productplan','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','productplan','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','release','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','release','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','report','bugSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','report','productInfo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','batchChangePlan');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','batchChangeStage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','change');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','confirmChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','batchAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','batchRun');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','linkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','runcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','unlinkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('12','user','view');
DROP TABLE IF EXISTS `zt_history`;
CREATE TABLE `zt_history` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `action` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `field` varchar(30) NOT NULL DEFAULT '',
  `old` text NOT NULL,
  `new` text NOT NULL,
  `diff` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('1','5','code','无线产品事业部','RG-WL','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('2','7','desc','','<p>交换机线由交换机产品事业部经营维护。</p>
<p>交换机产品有：</p>
<ul><li>数据中心交换机</li>
<li>园区网交换机</li>
<li>中小企业交换机</li>
</ul>','001- <del></del>
001+ <ins><p>交换机线由交换机产品事业部经营维护。</p></ins>
002+ <ins><p>交换机产品有：</p></ins>
003+ <ins><ul><li>数据中心交换机</li></ins>
004+ <ins><li>园区网交换机</li></ins>
005+ <ins><li>中小企业交换机</li></ins>
006+ <ins></ul></ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('3','8','PO','admin','liuxianbing','001- <del>admin</del>
001+ <ins>liuxianbing</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('4','9','PO','admin','xuedongsheng','001- <del>admin</del>
001+ <ins>xuedongsheng</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('5','17','PO','','liuxianbing','001- <del></del>
001+ <ins>liuxianbing</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('6','17','QD','','caikaiye','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('7','17','PM','','caikaiye','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('8','17','RD','','caikaiye','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('9','24','acl','open','private','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('10','29','acl','private','open','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('11','30','acl','open','private','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('12','21','version','1','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('13','21','status','draft','active','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('14','22','module','131','154','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('15','22','stage','wait','projected','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('16','24','stage','wait','projected','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('17','32','module','154','153','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('18','39','title','【道路与轨道交通】【道路交通】【MTFI】低温工作测试','【道路与轨道交通】【道路交通】【MTFI】【SDV测试】低温工作测试','001- <del>【道路与轨道交通】【道路交通】【MTFI】低温工作测试</del>
001+ <ins>【道路与轨道交通】【道路交通】【MTFI】【SDV测试】低温工作测试</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('19','39','version','1','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('20','39','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('21','42','version','1','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('22','42','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','031- <del>到达目标温度-20℃后，保持1h温度稳定； EXPECT:</del>
031+ <ins>到达目标温度25℃后，保持1h温度稳定； EXPECT:</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('23','45','precondition','【样机】准入测试&lt;通过&gt;的中试样机*1；
【软件版本】准入测试&lt;通过&gt;的版本；
【前置试验】样机经过完整全套&lt;贮存测试&gt;，并且测试&lt;通过&gt;；','【样机】准入测试《通过》的中试样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；','001- <del>【样机】准入测试&lt;通过&gt;的中试样机*1；</del>
001+ <ins>【样机】准入测试《通过》的中试样机*1；</ins>
002- <del>【软件版本】准入测试&lt;通过&gt;的版本；</del>
002+ <ins>【软件版本】准入测试《通过》的版本；</ins>
003- <del>【前置试验】样机经过完整全套&lt;贮存测试&gt;，并且测试&lt;通过&gt;；</del>
003+ <ins>【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('24','45','version','1','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('25','45','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('26','46','precondition','【样机】准入测试&lt;通过&gt;的研发样机*1；
【软件版本】准入测试&lt;通过&gt;的版本；
【前置试验】样机经过完整全套&lt;贮存测试&gt;，并且测试&lt;通过&gt;；','【样机】准入测试《通过》的研发样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；','001- <del>【样机】准入测试&lt;通过&gt;的研发样机*1；</del>
001+ <ins>【样机】准入测试《通过》的研发样机*1；</ins>
002- <del>【软件版本】准入测试&lt;通过&gt;的版本；</del>
002+ <ins>【软件版本】准入测试《通过》的版本；</ins>
003- <del>【前置试验】样机经过完整全套&lt;贮存测试&gt;，并且测试&lt;通过&gt;；</del>
003+ <ins>【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('27','46','version','1','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('28','46','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('29','47','precondition','【样机】准入测试&lt;通过&gt;的中试样机*1；
【软件版本】准入测试&lt;通过&gt;的版本；
【前置试验】样机经过准入测试，并且测试&lt;通过&gt;；','【样机】准入测试《通过》的中试样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过准入测试，并且测试《通过》；','001- <del>【样机】准入测试&lt;通过&gt;的中试样机*1；</del>
001+ <ins>【样机】准入测试《通过》的中试样机*1；</ins>
002- <del>【软件版本】准入测试&lt;通过&gt;的版本；</del>
002+ <ins>【软件版本】准入测试《通过》的版本；</ins>
003- <del>【前置试验】样机经过准入测试，并且测试&lt;通过&gt;；</del>
003+ <ins>【前置试验】样机经过准入测试，并且测试《通过》；</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('30','47','version','2','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('31','47','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('32','48','precondition','【样机】准入测试&lt;通过&gt;的研发样机*1；
【软件版本】准入测试&lt;通过&gt;的版本；
【前置试验】样机经过完整全套&lt;贮存测试&gt;，并且测试&lt;通过&gt;；','【样机】准入测试《通过》的研发样机*1；
【软件版本】准入测试《通过》的版本；
【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；','001- <del>【样机】准入测试&lt;通过&gt;的研发样机*1；</del>
001+ <ins>【样机】准入测试《通过》的研发样机*1；</ins>
002- <del>【软件版本】准入测试&lt;通过&gt;的版本；</del>
002+ <ins>【软件版本】准入测试《通过》的版本；</ins>
003- <del>【前置试验】样机经过完整全套&lt;贮存测试&gt;，并且测试&lt;通过&gt;；</del>
003+ <ins>【前置试验】样机经过完整全套《贮存测试》，并且测试《通过》；</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('33','48','version','2','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('34','48','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('35','49','keywords','车载  道路交通 交通 低温 MTFI','车载  道路交通 交通 高温 MTFI','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('36','49','version','2','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('37','49','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('38','50','keywords','车载  道路交通 交通 低温 MTFI','车载  道路交通 交通 高温 MTFI','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('39','50','version','2','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('40','50','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('41','51','version','3','4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('42','51','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；
【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','007- <del>GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；</del>
007+ <ins>GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；</ins>
008- <del></del>
008+ <ins>【初始检测阶段】</ins>
009- <del></del>
009+ <ins>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</ins>
010- <del>【初始检测阶段】</del>
010+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
011- <del>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</del>
011+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
012- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
012+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
013- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
013+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
014- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
014+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
015- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
015+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
016- <del>【RTC】能够持续查看、更新系统时间；</del>
016+ <ins>【升温及稳定阶段】</ins>
017- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>
017+ <ins>设备下电，温箱以每分钟2℃开始升温；</ins>
018- <del>【升温及稳定阶段】</del>
018+ <ins>到达目标温度70℃后，保持1h温度稳定； EXPECT:</ins>
019- <del>设备下电，温箱以每分钟2℃开始升温；</del>
019+ <ins>【高温工作试验阶段】</ins>
020- <del>到达目标温度70℃后，保持1h温度稳定； EXPECT:</del>
020+ <ins>设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；</ins>
021- <del>【高温工作试验阶段】</del>
021+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
022- <del>设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；</del>
022+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
023- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
023+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
024- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
024+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
025- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
025+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
026- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
026+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
027- <del>【RTC】能够持续查看、更新系统时间；</del>
027+ <ins>【降温及稳定阶段】</ins>
028- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>
028+ <ins>设备下电，温箱以每分钟2℃开始升温；</ins>
029- <del>【降温及稳定阶段】</del>
029+ <ins>到达目标温度25℃后，保持1h温度稳定； EXPECT:</ins>
030- <del>设备下电，温箱以每分钟2℃开始升温；</del>
030+ <ins>【最终检测阶段】</ins>
031- <del>到达目标温度25℃后，保持1h温度稳定； EXPECT:</del>
031+ <ins>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</ins>
032- <del>【最终检测阶段】</del>
032+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
033- <del>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</del>
033+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
034- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
034+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
035- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
035+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
036- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
036+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
037- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
037+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
038- <del>【RTC】能够持续查看、更新系统时间；</del>
039- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('43','52','version','3','4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('44','52','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；
【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','007- <del>GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；</del>
007+ <ins>GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；</ins>
008- <del></del>
008+ <ins>【初始检测阶段】</ins>
009- <del></del>
009+ <ins>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</ins>
010- <del>【初始检测阶段】</del>
010+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
011- <del>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</del>
011+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
012- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
012+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
013- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
013+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
014- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
014+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
015- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
015+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
016- <del>【RTC】能够持续查看、更新系统时间；</del>
016+ <ins>【升温及稳定阶段】</ins>
017- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>
017+ <ins>设备下电，温箱以每分钟2℃开始升温；</ins>
018- <del>【升温及稳定阶段】</del>
018+ <ins>到达目标温度70℃后，保持1h温度稳定； EXPECT:</ins>
019- <del>设备下电，温箱以每分钟2℃开始升温；</del>
019+ <ins>【高温工作试验阶段】</ins>
020- <del>到达目标温度70℃后，保持1h温度稳定； EXPECT:</del>
020+ <ins>设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；</ins>
021- <del>【高温工作试验阶段】</del>
021+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
022- <del>设备上电，低温70℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；</del>
022+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
023- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
023+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
024- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
024+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
025- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
025+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
026- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
026+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
027- <del>【RTC】能够持续查看、更新系统时间；</del>
027+ <ins>【降温及稳定阶段】</ins>
028- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>
028+ <ins>设备下电，温箱以每分钟2℃开始升温；</ins>
029- <del>【降温及稳定阶段】</del>
029+ <ins>到达目标温度25℃后，保持1h温度稳定； EXPECT:</ins>
030- <del>设备下电，温箱以每分钟2℃开始升温；</del>
030+ <ins>【最终检测阶段】</ins>
031- <del>到达目标温度25℃后，保持1h温度稳定； EXPECT:</del>
031+ <ins>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</ins>
032- <del>【最终检测阶段】</del>
032+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
033- <del>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</del>
033+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
034- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
034+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
035- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
035+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
036- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
036+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
037- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
037+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
038- <del>【RTC】能够持续查看、更新系统时间；</del>
039- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('45','53','version','3','4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('46','53','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；
【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','007- <del>GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；</del>
007+ <ins>GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；</ins>
008- <del></del>
008+ <ins>【初始检测阶段】</ins>
009- <del></del>
009+ <ins>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</ins>
010- <del>【初始检测阶段】</del>
010+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
011- <del>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</del>
011+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
012- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
012+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
013- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
013+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
014- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
014+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
015- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
015+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
016- <del>【RTC】能够持续查看、更新系统时间；</del>
016+ <ins>【降温及稳定阶段】</ins>
017- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>
017+ <ins>设备下电，温箱以每分钟2℃开始降温；</ins>
018- <del>【降温及稳定阶段】</del>
018+ <ins>到达目标温度-20℃后，保持1h温度稳定； EXPECT:</ins>
019- <del>设备下电，温箱以每分钟2℃开始降温；</del>
019+ <ins>【低温工作试验阶段】</ins>
020- <del>到达目标温度-20℃后，保持1h温度稳定； EXPECT:</del>
020+ <ins>设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；</ins>
021- <del>【低温工作试验阶段】</del>
021+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
022- <del>设备上电，低温-20℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；</del>
022+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
023- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
023+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
024- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
024+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
025- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
025+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
026- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
026+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
027- <del>【RTC】能够持续查看、更新系统时间；</del>
027+ <ins>【升温及稳定阶段】</ins>
028- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>
028+ <ins>设备下电，温箱以每分钟2℃开始升温；</ins>
029- <del>【升温及稳定阶段】</del>
029+ <ins>到达目标温度25℃后，保持1h温度稳定； EXPECT:</ins>
030- <del>设备下电，温箱以每分钟2℃开始升温；</del>
030+ <ins>【最终检测阶段】</ins>
031- <del>到达目标温度25℃后，保持1h温度稳定； EXPECT:</del>
031+ <ins>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</ins>
032- <del>【最终检测阶段】</del>
032+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
033- <del>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</del>
033+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
034- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
034+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
035- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
035+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
036- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
036+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
037- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
037+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
038- <del>【RTC】能够持续查看、更新系统时间；</del>
039- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('47','54','version','3','4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('48','54','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；


【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；
【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始降温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【低温工作试验阶段】
设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度-20℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','007- <del>GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；</del>
007+ <ins>GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；</ins>
008- <del></del>
008+ <ins>【初始检测阶段】</ins>
009- <del></del>
009+ <ins>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</ins>
010- <del>【初始检测阶段】</del>
010+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
011- <del>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</del>
011+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
012- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
012+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
013- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
013+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
014- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
014+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
015- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
015+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
016- <del>【RTC】能够持续查看、更新系统时间；</del>
016+ <ins>【降温及稳定阶段】</ins>
017- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>
017+ <ins>设备下电，温箱以每分钟2℃开始降温；</ins>
018- <del>【降温及稳定阶段】</del>
018+ <ins>到达目标温度-20℃后，保持1h温度稳定； EXPECT:</ins>
019- <del>设备下电，温箱以每分钟2℃开始降温；</del>
019+ <ins>【低温工作试验阶段】</ins>
020- <del>到达目标温度-20℃后，保持1h温度稳定； EXPECT:</del>
020+ <ins>设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；</ins>
021- <del>【低温工作试验阶段】</del>
021+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
022- <del>设备上电，低温-20℃环境下，全功能最大性能拷机24小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；</del>
022+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
023- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
023+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
024- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
024+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
025- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
025+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
026- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
026+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
027- <del>【RTC】能够持续查看、更新系统时间；</del>
027+ <ins>【升温及稳定阶段】</ins>
028- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>
028+ <ins>设备下电，温箱以每分钟2℃开始升温；</ins>
029- <del>【升温及稳定阶段】</del>
029+ <ins>到达目标温度-20℃后，保持1h温度稳定； EXPECT:</ins>
030- <del>设备下电，温箱以每分钟2℃开始升温；</del>
030+ <ins>【最终检测阶段】</ins>
031- <del>到达目标温度-20℃后，保持1h温度稳定； EXPECT:</del>
031+ <ins>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</ins>
032- <del>【最终检测阶段】</del>
032+ <ins>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</ins>
033- <del>设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；</del>
033+ <ins>【3G/4G】通过get命令下载文件，速率≥1Mbps；</ins>
034- <del>【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；</del>
034+ <ins>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</ins>
035- <del>【3G/4G】通过get命令下载文件，速率≥1Mbps；</del>
035+ <ins>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</ins>
036- <del>【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；</del>
036+ <ins>【RTC】能够持续查看、更新系统时间；</ins>
037- <del>【GPS】能够持续获取到卫星时间、经纬度、高度等信息；</del>
037+ <ins>【整机】稳定运行，不出现重启或打印异常信息；</ins>
038- <del>【RTC】能够持续查看、更新系统时间；</del>
039- <del>【整机】稳定运行，不出现重启或打印异常信息；</del>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('49','56','module','154','155','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('50','56','version','1','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('51','56','story','1','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('52','56','steps','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；
【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','【搭建测试模型阶段】
按照附件图片所示，搭建测试模型；
1 PC--&gt; 2 STA；
HDMI / AV接电视；
高速TF卡、高速U盘插在USB口；
3G/4G天线延伸出温箱且尽量靠近门口或窗户；
GPS天线延伸出室外； EXPECT:结构外观完整，不出现安装困难；
【初始检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【升温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度70℃后，保持1h温度稳定； EXPECT:
【高温工作试验阶段】
设备上电，低温70℃环境下，全功能最大性能拷机12小时；wifi吞吐按照上下行切换进行，每轮30分钟；各项功能均运行起来； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥70Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
【降温及稳定阶段】
设备下电，温箱以每分钟2℃开始升温；
到达目标温度25℃后，保持1h温度稳定； EXPECT:
【最终检测阶段】
设备上电，启动完成后，常温下全功能最大性能拷机30分钟（上下行各进行3轮，每轮5分钟测试）； EXPECT:【wifi】PC与STA之间2.4G+5G上/下行总性能≥80Mbps；
【存储】SSD、Nandflash、TF卡\\U盘 文件互拷速率≥100Mbps；
【3G/4G】通过get命令下载文件，速率≥1Mbps；
【音视频多媒体】720P视频播放流畅，音视频同步，且不影响wifi性能；
【GPS】能够持续获取到卫星时间、经纬度、高度等信息；
【RTC】能够持续查看、更新系统时间；
【整机】稳定运行，不出现重启或打印异常信息；
','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('53','68','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('54','68','PO','','caikaiye','001- <del></del>
001+ <ins>caikaiye</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('55','68','QD','','caikaiye','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('56','68','PM','','caikaiye','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('57','68','RD','','caikaiye','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('58','73','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('59','74','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('60','75','name','AP630','RG-AP630','001- <del>AP630</del>
001+ <ins>RG-AP630</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('61','76','code','AP630','RG-AP630','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('62','78','desc','<p>【来源】：为了解决需求、用例、测试结果、测试报告无序状态，以及应对各事业部大量采用敏捷SCRUM开发模式的大环境。</p>
<p><span style=\"line-height:1.57142857;\">【主导】：硬件测试组-无线测试组</span></p>
<p>【开发移植】：蔡锴晔</p>
<p>【目标】：将需求、测试、执行、时间、资源统一管理，有序管理统计。减少测试支撑在测试用例、测试规划、测试报告的资源消耗，提高工作效率，增加收益。</p>','<p>【来源】：为了解决需求、用例、测试结果、测试报告无序状态，以及应对各事业部大量采用敏捷SCRUM开发模式的大环境。</p>
<p><span style=\"line-height:1.57142857;\">【主导】：硬件测试组-无线测试组</span></p>
<p><span style=\"line-height:1.57142857;\">【系统原型】：禅道项目管理系统</span></p>
<p>【开发移植】：蔡锴晔</p>
<p>【目标】：将需求、测试、执行、时间、资源统一管理，有序管理统计。减少测试支撑在测试用例、测试规划、测试报告的资源消耗，提高工作效率，增加收益。</p>','003- <del><p>【开发移植】：蔡锴晔</p></del>
003+ <ins><p><span style=\"line-height:1.57142857;\">【系统原型】：禅道项目管理系统</span></p></ins>
004- <del><p>【目标】：将需求、测试、执行、时间、资源统一管理，有序管理统计。减少测试支撑在测试用例、测试规划、测试报告的资源消耗，提高工作效率，增加收益。</p></del>
004+ <ins><p>【开发移植】：蔡锴晔</p></ins>
005+ <ins><p>【目标】：将需求、测试、执行、时间、资源统一管理，有序管理统计。减少测试支撑在测试用例、测试规划、测试报告的资源消耗，提高工作效率，增加收益。</p></ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('63','80','title','【道路与轨道交通】【道路交通】【MTFI】【SDV测试】低温工作测试【硬件项目测试管理系统】【安全类】【文件文档安全】文档权限管理','【硬件项目测试管理系统】【安全类】【文件文档安全】文档权限管理','001- <del>【道路与轨道交通】【道路交通】【MTFI】【SDV测试】低温工作测试【硬件项目测试管理系统】【安全类】【文件文档安全】文档权限管理</del>
001+ <ins>【硬件项目测试管理系统】【安全类】【文件文档安全】文档权限管理</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('64','80','version','1','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('65','80','status','active','changed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('66','80','spec','<p>产品线在项目之上，只要有产品线视图的用户即可看到项目层面文档；</p>
<p><strong>应细化文档权限管理；</strong></p>
<p><br />
</p>','<p>产品线在项目之上，只要有产品线视图的用户即可看到项目层面文档；</p>
<p>应细化文档权限管理；</p>
<p><strong>导入版本：</strong>未定；</p>','002- <del><p><strong>应细化文档权限管理；</strong></p></del>
002+ <ins><p>应细化文档权限管理；</p></ins>
003- <del><p><br /></del>
003+ <ins><p><strong>导入版本：</strong>未定；</p></ins>
004- <del></p></del>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('67','89','pri','1','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('68','89','assignedTo','admin','caikaiye','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('69','92','assignedTo','','caikaiye','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('70','102','realStarted','0000-00-00','2015-01-15','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('71','102','consumed','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('72','102','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('73','115','mailto',',caikaiye',',caikaiye,caowei,wangali','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('74','115','estimate','26','11','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('75','115','left','26','11','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('76','116','estimate','26','31','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('77','116','mailto','',',caikaiye,caowei,liuxianbing,luzhiqiang,raoluhua','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('78','118','stage','testing','projected','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('79','119','estimate','26','31','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('80','119','mailto','',',caikaiye,caowei,liuxianbing,luzhiqiang,raoluhua,wangali','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('81','131','consumed','1','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('82','132','consumed','3','4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('83','132','left','11','7','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('84','133','consumed','4','7','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('85','133','left','7','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('86','134','left','3','4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('87','139','realStarted','0000-00-00','2015-01-15','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('88','139','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('89','161','type','waterfall','ops','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('90','161','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('91','161','PO','','liuxianbing','001- <del></del>
001+ <ins>liuxianbing</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('92','161','QD','','luxiaoyan','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('93','161','PM','','luxiaoyan','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('94','161','RD','','luxiaoyan','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('95','161','acl','open','custom','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('96','161','whitelist','','1,8,12','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('97','164','desc','【生产维护】','<p style=\"font-size:13px;\">【来源】：长期的生产软件、主程序发行维护</p>
<p style=\"font-size:13px;\">【前身】：无</p>
<p style=\"font-size:13px;\">【接口部门】：各事业部</p>
<p style=\"font-size:13px;\">【开发团队】：各事业组开发组</p>
<p style=\"font-size:13px;\">【客户】：产线</p>
<p style=\"font-size:13px;\">【应用场景】：产线软件下装</p>','001- <del>【生产维护】</del>
001+ <ins><p style=\"font-size:13px;\">【来源】：长期的生产软件、主程序发行维护</p></ins>
002+ <ins><p style=\"font-size:13px;\">【前身】：无</p></ins>
003+ <ins><p style=\"font-size:13px;\">【接口部门】：各事业部</p></ins>
004+ <ins><p style=\"font-size:13px;\">【开发团队】：各事业组开发组</p></ins>
005+ <ins><p style=\"font-size:13px;\">【客户】：产线</p></ins>
006+ <ins><p style=\"font-size:13px;\">【应用场景】：产线软件下装</p></ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('98','166','PO','','liuxianbing','001- <del></del>
001+ <ins>liuxianbing</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('99','166','QD','','luzhiqiang','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('100','166','PM','','luzhiqiang','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('101','166','RD','','luzhiqiang','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('102','166','acl','open','private','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('103','167','acl','open','private','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('104','169','type','ops','waterfall','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('105','170','type','waterfall','ops','');
DROP TABLE IF EXISTS `zt_lang`;
CREATE TABLE `zt_lang` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `lang` varchar(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `key` varchar(60) NOT NULL,
  `value` text NOT NULL,
  `system` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `lang` (`lang`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=244 DEFAULT CHARSET=utf8;
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('124','all','testcase','typeList','emc','电磁兼容','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('122','all','testcase','typeList','manufacture','生产测试','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('123','all','testcase','typeList','mainprogram','主程序测试','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('121','all','testcase','typeList','mechanical','机械振动','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('113','all','testcase','typeList','feature','功能测试','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('114','all','testcase','typeList','performance','性能测试','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('115','all','testcase','typeList','config','配置相关','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('116','all','testcase','typeList','reliability','可靠性测试','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('117','all','testcase','typeList','install','安装部署','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('118','all','testcase','typeList','security','安规测试','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('119','all','testcase','typeList','interface','接口测试','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('120','all','testcase','typeList','structure','结构外观','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('228','all','testcase','stageList','unittest','单元测试阶段','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('229','all','testcase','stageList','feature','功能测试阶段','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('230','all','testcase','stageList','intergrate','集成测试阶段','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('231','all','testcase','stageList','system','系统测试阶段','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('232','all','testcase','stageList','sdv','SDV测试阶段','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('233','all','testcase','stageList','sit','SIT测试阶段','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('234','all','testcase','stageList','svt','SVT测试阶段','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('47','all','user','roleList','dev','研发','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('48','all','user','roleList','qa','测试','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('49','all','user','roleList','ptm','测试代表','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('50','all','user','roleList','pm','项目经理','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('51','all','user','roleList','po','产品经理','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('52','all','user','roleList','td','研发主管','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('53','all','user','roleList','pd','产品主管','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('54','all','user','roleList','qd','测试主管','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('55','all','user','roleList','top','高层管理','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('56','all','user','roleList','others','其他','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('57','all','todo','typeList','custom','自定义','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('58','all','todo','typeList','study','学习交流','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('59','all','todo','typeList','meeting','会议核对','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('60','all','todo','typeList','special','专项技术','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('61','all','todo','typeList','resource','资源协调','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('62','all','todo','typeList','bug','Bug分析跟踪','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('63','all','todo','typeList','task','项目测试','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('69','all','testcase','priList','1','可裁剪','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('70','all','testcase','priList','2','覆盖项','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('68','all','testcase','priList','3','重要测试项','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('71','all','testcase','priList','4','重要且紧急','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('240','all','bug','severityList','4','次要功能丧失','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('241','all','bug','severityList','5','基本功能降低','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('239','all','bug','severityList','2','客户抱怨','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('238','all','bug','severityList','1','无影响','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('237','all','bug','severityList','3','次要功能降低','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('79','all','story','sourceList','hrs','HRS','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('80','all','story','sourceList','charter','Charter','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('81','all','story','sourceList','target','规划目标','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('82','all','story','sourceList','customer','客户需求','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('83','all','story','sourceList','user','用户要求','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('84','all','story','sourceList','po','产品经理','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('85','all','story','sourceList','market','市场调研','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('86','all','story','sourceList','service','客服反馈','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('87','all','story','sourceList','competitor','竞争对手','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('88','all','story','sourceList','partner','合作伙伴','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('89','all','story','sourceList','dev','开发人员','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('90','all','story','sourceList','tester','测试人员','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('91','all','story','sourceList','bug','Bug','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('92','all','story','sourceList','other','其他','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('98','all','story','priList','1','要素','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('99','all','story','priList','2','风险','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('97','all','story','priList','3','成本','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('100','all','story','priList','4','价值','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('101','all','task','priList','3','重要但不紧急','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('102','all','task','priList','1','不紧急不重要','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('103','all','task','priList','2','紧急但不重要','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('104','all','task','priList','4','重要而且紧急','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('105','all','task','typeList','design','用例设计','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('106','all','task','typeList','devel','工具开发','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('107','all','task','typeList','test','项目测试','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('108','all','task','typeList','study','专项学习','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('109','all','task','typeList','discuss','会议讨论','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('110','all','task','typeList','ui','交互沟通','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('111','all','task','typeList','affair','一般事务','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('112','all','task','typeList','misc','其他','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('125','all','testcase','typeList','experience','用户体验','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('126','all','testcase','typeList','other','其他','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('127','all','bug','priList','3','紧急但不重要','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('128','all','bug','priList','1','一般','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('129','all','bug','priList','2','重要但不紧急','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('130','all','bug','priList','4','重要且紧急','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('191','all','bug','typeList','pcb','PCB设计BUG','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('192','all','bug','typeList',' design','设计文件BUG','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('193','all','bug','typeList','processing','制程BUG','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('194','all','bug','typeList','safety','安规BUG','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('195','all','bug','typeList','nobug','非BUG','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('196','all','bug','typeList','codeerror','代码错误','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('197','all','bug','typeList','interface','界面优化','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('198','all','bug','typeList','designchange','设计变更','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('199','all','bug','typeList','newfeature','新增需求','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('200','all','bug','typeList','designdefect','设计缺陷','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('201','all','bug','typeList','config','配置相关','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('202','all','bug','typeList','install','安装部署','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('203','all','bug','typeList','security','安全相关','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('190','all','bug','typeList','industrial','工业设计BUG','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('189','all','bug','typeList','component','部品BUG','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('187','all','bug','typeList','software','软件BUG','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('188','all','bug','typeList','circuit','电路设计BUG','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('204','all','bug','typeList','performance','性能问题','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('205','all','bug','typeList','standard','标准规范','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('206','all','bug','typeList','automation','测试脚本','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('207','all','bug','typeList','trackthings','事务跟踪','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('208','all','bug','typeList','others','其他','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('235','all','testcase','stageList','smoke','冒烟测试阶段','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('236','all','testcase','stageList','bvt','版本验证阶段','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('242','all','bug','severityList','6','基本功能丧失','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('243','all','bug','severityList','7','不符合法规','0');
DROP TABLE IF EXISTS `zt_module`;
CREATE TABLE `zt_module` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `root` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(60) NOT NULL DEFAULT '',
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1267 DEFAULT CHARSET=utf8;
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('2','0','行业标准','0',',2,','1','10','productdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('3','0','友商数据','0',',3,','1','20','productdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('52','0','设计文件','0',',52,','1','10','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('51','0','会议记录','0',',51,','1','50','productdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('7','0','需求归类','0',',7,','1','30','productdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('50','0','客户沟通','0',',50,','1','40','productdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('485','2','交换','0',',485,','1','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('486','2','接口','0',',486,','1','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('487','2','软件','0',',487,','1','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('488','2','其他','0',',488,','1','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('489','2','生产软件','0',',489,','1','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('490','2','主程序','0',',490,','1','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('491','2','POE','475',',475,491,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('492','2','开关电源','475',',475,492,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('484','2','基本功能','0',',484,','1','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('483','2','安规','0',',483,','1','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('482','2','EMC','0',',482,','1','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('481','2','机械振动','0',',481,','1','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('479','2','结构','0',',479,','1','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('480','2','可靠性','0',',480,','1','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('500','2','最大接收电平','476',',476,500,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('499','2','接收灵敏度','476',',476,499,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('498','2','杂散发射','476',',476,498,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('497','2','发射','476',',476,497,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('496','2','PD','491',',475,491,496,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('495','2','PSE','491',',475,491,495,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('494','2','智能电源','475',',475,494,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('493','2','板级电源','475',',475,493,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('553','2','高温启动','542',',480,542,553,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('477','2','存储','0',',477,','1','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('476','2','射频','0',',476,','1','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('475','2','电源','0',',475,','1','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('53','0','内外需求','0',',53,','1','20','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('54','0','测试规划','0',',54,','1','30','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('55','0','测试用例','0',',55,','1','40','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('56','0','测试记录（log、数据、截图）','0',',56,','1','50','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('57','0','测试报告','0',',57,','1','60','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('58','0','评审文档','0',',58,','1','70','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('59','0','会议记录','0',',59,','1','80','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('60','0','学习交流','0',',60,','1','90','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('61','0','资源管理','0',',61,','1','100','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('62','0','日志总结','0',',62,','1','110','projectdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('696','3','软件','70',',696,','1','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('695','3','接口','70',',695,','1','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('691','3','EMC','70',',691,','1','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('690','3','机械振动','70',',690,','1','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('689','3','可靠性','70',',689,','1','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('688','3','结构','70',',688,','1','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('687','3','性能','70',',687,','1','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('686','3','存储','70',',686,','1','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('685','3','射频','70',',685,','1','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('684','3','电源','70',',684,','1','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('694','3','交换','70',',694,','1','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('693','3','基本功能','70',',693,','1','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('692','3','安规','70',',692,','1','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('895','4','PSE','891',',875,891,895,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('893','4','板级电源','875',',875,893,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('889','4','生产软件','91',',889,','1','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('888','4','其他','91',',888,','1','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('887','4','软件','91',',887,','1','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('880','4','可靠性','91',',880,','1','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('879','4','结构','91',',879,','1','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('878','4','性能','91',',878,','1','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('877','4','存储','91',',877,','1','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('875','4','电源','91',',875,','1','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('876','4','射频','91',',876,','1','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('894','4','智能电源','875',',875,894,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('892','4','开关电源','875',',875,892,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('891','4','POE','875',',875,891,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('890','4','主程序','91',',890,','1','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('886','4','接口','91',',886,','1','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('885','4','交换','91',',885,','1','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('884','4','基本功能','91',',884,','1','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('883','4','安规','91',',883,','1','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('882','4','EMC','91',',882,','1','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('881','4','机械振动','91',',881,','1','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('109','1','电源','0',',109,','1','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('110','1','射频','0',',110,','1','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('111','1','存储','0',',111,','1','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('471','1','智能电源','109',',109,471,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('113','1','性能','0',',113,','1','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('114','1','结构','0',',114,','1','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('115','1','可靠性','0',',115,','1','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('116','1','机械振动','0',',116,','1','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('117','1','EMC','0',',117,','1','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('118','1','安规','0',',118,','1','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('119','1','基本功能','0',',119,','1','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('120','1','交换','0',',120,','1','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('121','1','接口','0',',121,','1','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('470','1','板级电源','109',',109,470,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('123','1','POE','109',',109,123,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('469','1','开关电源','109',',109,469,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('126','1','SRAM','111',',111,126,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('127','1','SDRAM','111',',111,127,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('128','1','FLASH','111',',111,128,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('129','1','DDR','111',',111,129,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('130','1','SATA','111',',111,130,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('167','1','电快速瞬变脉冲群抗扰度(EFT/B)','117',',117,167,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('166','1','传导骚扰抗扰度(CS)','117',',117,166,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('165','1','辐射骚扰抗扰度(RS)','117',',117,165,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('159','1','固定ms级powercycle','148',',115,148,159,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('160','1','随机powercycle','148',',115,148,160,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('161','1','低温低压powercycle&corner','148',',115,148,161,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('162','1','高温低压powercycle&corner','148',',115,148,162,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('175','1','接触电流','118',',118,175,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('164','1','传导发射(CE)','117',',117,164,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('176','1','正常温升','118',',118,176,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('163','1','辐射发射(RE)','117',',117,163,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('173','1','低温极限','147',',115,147,173,','3','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('147','1','气候类','115',',115,147,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('148','1','powercycle类','115',',115,148,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('149','1','低温贮存','147',',115,147,149,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('150','1','高温贮存','147',',115,147,150,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('151','1','恒温恒湿贮存','147',',115,147,151,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('152','1','温度冲击','147',',115,147,152,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('153','1','低温工作','147',',115,147,153,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('154','1','高温工作','147',',115,147,154,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('155','1','温度循环','147',',115,147,155,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('156','1','湿热交变','147',',115,147,156,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('157','1','低温启动','147',',115,147,157,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('158','1','高温启动','147',',115,147,158,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('168','1','静电放电抗扰度(ESD)','117',',117,168,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('169','1','浪涌（冲击）抗扰度(Surge)','117',',117,169,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('170','1','输入电流功率','118',',118,170,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('171','1','接地连续性','118',',118,171,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('172','1','耐压','118',',118,172,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('174','1','高温极限','147',',115,147,174,','3','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('177','1','稳定性','118',',118,177,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('178','1','电线固定和拉力','118',',118,178,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('179','1','恒定作用力和挂墙','118',',118,179,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('180','1','冲击','118',',118,180,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('181','1','标签耐久性','118',',118,181,','2','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('182','1','电话振铃','118',',118,182,','2','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('183','1','异常运行','118',',118,183,','2','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('184','1','电气间隙和爬电距离','118',',118,184,','2','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('185','1','安规关键器件','118',',118,185,','2','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('186','1','安全标识设计','118',',118,186,','2','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('187','1','安规工业设计','118',',118,187,','2','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('188','0','日志总结','0',',188,','1','60','productdoc','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1113','5','视距极限性能','1105',',1066,1105,1113,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1110','5','压力拷机','1104',',1066,1104,1110,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1107','5','客户体验','1066',',1066,1107,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1106','5','对手评测','1066',',1066,1106,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1088','5','阻塞','1064',',1064,1088,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1081','5','智能电源','1063',',1063,1081,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1065','5','存储','0',',1065,','1','170','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1064','5','射频','0',',1064,','1','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1063','5','电源','0',',1063,','1','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('202','5','软件','0',',202,','1','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1112','5','穿墙性能','1105',',1066,1105,1112,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1111','5','抗干扰性能','1104',',1066,1104,1111,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1109','5','终端功能','1104',',1066,1104,1109,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1108','5','终端极限性能','1104',',1066,1104,1108,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1105','5','外场性能','1066',',1066,1105,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1104','5','基本性能','1066',',1066,1104,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1103','5','U盘','1065',',1065,1103,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1102','5','SD卡','1065',',1065,1102,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1101','5','TF卡','1065',',1065,1101,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1100','5','SATA','1065',',1065,1100,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1099','5','DDR','1065',',1065,1099,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1098','5','FLASH','1065',',1065,1098,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1097','5','SDRAM','1065',',1065,1097,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1096','5','SRAM','1065',',1065,1096,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1095','5','频谱模板','1084',',1064,1084,1095,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1094','5','频偏','1084',',1064,1084,1094,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1093','5','EVM','1084',',1064,1084,1093,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1092','5','发射功率','1084',',1064,1084,1092,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1091','5','MIMO接收测试','1064',',1064,1091,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1090','5','MIMO发射测试','1064',',1064,1090,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1089','5','邻道抑制比','1064',',1064,1089,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1087','5','最大接收电平','1064',',1064,1087,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1086','5','接收灵敏度','1064',',1064,1086,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1085','5','杂散发射','1064',',1064,1085,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1083','5','PD','1078',',1063,1078,1083,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1084','5','发射','1064',',1064,1084,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1082','5','PSE','1078',',1063,1078,1082,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1080','5','板级电源','1063',',1063,1080,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1079','5','开关电源','1063',',1063,1079,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1078','5','POE','1063',',1063,1078,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1077','5','主程序','0',',1077,','1','290','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1076','5','生产软件','0',',1076,','1','280','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1075','5','其他','0',',1075,','1','270','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1074','5','接口','0',',1074,','1','260','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1073','5','交换','0',',1073,','1','250','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1072','5','基本功能','0',',1072,','1','240','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1071','5','安规','0',',1071,','1','230','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1070','5','EMC','0',',1070,','1','220','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1069','5','机械振动','0',',1069,','1','210','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1068','5','可靠性','0',',1068,','1','200','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1067','5','结构','0',',1067,','1','190','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1066','5','性能','0',',1066,','1','180','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('253','5','基本要求','202',',202,253,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('254','5','架构与框架','202',',202,254,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('255','5','功能模块','202',',202,255,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('256','5','数据库','202',',202,256,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('257','5','兼容性','202',',202,257,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('258','5','性能','202',',202,258,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('259','5','安全','202',',202,259,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('260','5','用户体验','202',',202,260,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('261','5','UI界面','202',',202,261,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('262','5','菜单类','261',',202,261,262,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('263','5','表单列表类','261',',202,261,263,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('264','5','控件类','261',',202,261,264,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('265','5','数据库安全','259',',202,259,265,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('266','5','数据传递安全','259',',202,259,266,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('267','5','用户权限','259',',202,259,267,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('268','5','文件文档安全','259',',202,259,268,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('269','1','发射','110',',110,269,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('270','1','杂散发射','110',',110,270,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('271','1','接收灵敏度','110',',110,271,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('272','1','最大接收电平','110',',110,272,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('273','1','阻塞','110',',110,273,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('274','1','邻道抑制比','110',',110,274,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('275','1','MIMO发射测试','110',',110,275,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('276','1','MIMO接收测试','110',',110,276,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('277','1','发射功率','269',',110,269,277,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('278','1','EVM','269',',110,269,278,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('279','1','频偏','269',',110,269,279,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('280','1','频谱模板','269',',110,269,280,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('281','1','基本配置','119',',119,281,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('282','1','信号强度覆盖','119',',119,282,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('283','1','升级测试','119',',119,283,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('284','1','基本性能','113',',113,284,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('285','1','外场性能','113',',113,285,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('286','1','软件','0',',286,','1','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('287','1','基本要求','286',',286,287,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('288','1','架构与框架','286',',286,288,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('289','1','功能模块','286',',286,289,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('290','1','数据库','286',',286,290,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('291','1','兼容性','286',',286,291,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('292','1','性能','286',',286,292,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('293','1','安全','286',',286,293,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('294','1','用户体验','286',',286,294,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('295','1','UI界面','286',',286,295,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('296','1','数据库安全','293',',286,293,296,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('297','1','数据传递安全','293',',286,293,297,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('298','1','用户权限','293',',286,293,298,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('299','1','文件文档安全','293',',286,293,299,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('300','1','菜单类','295',',286,295,300,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('301','1','表单列表类','295',',286,295,301,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('302','1','控件类','295',',286,295,302,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('303','1','终端极限性能','284',',113,284,303,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('304','1','终端功能','284',',113,284,304,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('305','1','压力拷机','284',',113,284,305,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('306','1','抗干扰性能','284',',113,284,306,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('307','1','穿墙性能','285',',113,285,307,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('308','1','视距极限性能','285',',113,285,308,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('309','1','遮挡性能','285',',113,285,309,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('310','1','特定信号强度点','285',',113,285,310,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('311','1','室内移动ping包','285',',113,285,311,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('312','1','对手评测','113',',113,312,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('313','1','客户体验','113',',113,313,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('314','1','抗干扰性能','312',',113,312,314,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('315','1','穿墙性能','312',',113,312,315,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('316','1','视距极限性能','312',',113,312,316,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('317','1','遮挡性能','312',',113,312,317,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('318','1','室内ping包','312',',113,312,318,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('319','1','多用户在线视频','313',',113,313,319,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('320','1','多用户在线网页访问','313',',113,313,320,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('321','1','多用户视频','313',',113,313,321,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('322','1','多用户语音聊天','313',',113,313,322,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('323','1','网络游戏体验','313',',113,313,323,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('324','1','干扰环境下性能体验','313',',113,313,324,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('325','1','多用户在线下载','313',',113,313,325,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('326','1','外观','114',',114,326,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('327','1','内部件','114',',114,327,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('328','1','盐雾','114',',114,328,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('329','1','防水','114',',114,329,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('330','1','防尘','114',',114,330,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('331','1','中性','328',',114,328,331,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('332','1','交替','328',',114,328,332,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('333','1','低温低压corner','147',',115,147,333,','3','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('334','1','高温低压corner','147',',115,147,334,','3','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('335','1','低温高压corner','147',',115,147,335,','3','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('336','1','高温高压corner','147',',115,147,336,','3','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('337','1','低温高压powercycle&corner','148',',115,148,337,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('338','1','高温高压powercycle&corner','148',',115,148,338,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('339','1','指示灯功能','119',',119,339,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('342','1','整机最大功耗','119',',119,342,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('343','1','cpld在线升级','119',',119,343,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('344','1','智能天线训练选向','119',',119,344,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('501','2','阻塞','476',',476,501,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('346','1','内外置天线切换','119',',119,346,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('502','2','邻道抑制比','476',',476,502,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('474','1','复位','119',',119,474,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('451','1','QSFP+光模块控制信号验证','434',',120,431,434,451,','4','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('450','1','10G端口混插','434',',120,431,434,450,','4','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('449','1','10G/40G端口独立性热拔插','434',',120,431,434,449,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('448','1','光模块及铜缆兼容性','434',',120,431,434,448,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('453','1','交换端口LED','435',',120,431,435,453,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('452','1','光模块信息查询','434',',120,431,434,452,','4','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('362','1','SD卡','111',',111,362,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('361','1','TF卡','111',',111,361,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('363','1','U盘','111',',111,363,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('364','1','3G','121',',121,364,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('365','1','4G','121',',121,365,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('366','1','蓝牙','121',',121,366,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('367','1','sim','121',',121,367,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('368','1','GPS','121',',121,368,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('369','1','其他','0',',369,','1','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('370','1','室外加热电路','369',',369,370,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('371','1','加热电路高温启动','370',',369,370,371,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('372','1','加热电路低温启动','370',',369,370,372,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('373','1','加热逻辑容错','370',',369,370,373,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('374','1','PSE分级加热逻辑','370',',369,370,374,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('375','1','加热点温度','370',',369,370,375,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('376','1','加热功耗','370',',369,370,376,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('377','1','带包材','116',',116,377,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('378','1','裸机不上电','116',',116,378,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('379','1','裸机上电','116',',116,379,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('380','1','随机振动','377',',116,377,380,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('381','1','正弦振动','377',',116,377,381,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('382','1','碰撞','377',',116,377,382,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('383','1','冲击','377',',116,377,383,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('384','1','跌落','377',',116,377,384,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('385','1','随机振动','378',',116,378,385,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('386','1','正弦振动','378',',116,378,386,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('387','1','冲击','378',',116,378,387,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('388','1','随机振动','379',',116,379,388,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('389','1','正弦振动','379',',116,379,389,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('390','1','冲击','379',',116,379,390,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('391','1','生产软件','0',',391,','1','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('392','1','主程序','0',',392,','1','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('393','1','flash烧片','391',',391,393,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('394','1','程序下载','391',',391,394,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('395','1','内存自检','391',',391,395,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('396','1','setmac/setsn','391',',391,396,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('397','1','信息查看','391',',391,397,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('398','1','射频校准','391',',391,398,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('399','1','指示灯','391',',391,399,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('400','1','收发帧','391',',391,400,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('401','1','连通性','391',',391,401,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('402','1','format/程序回退','392',',392,402,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('403','1','程序下载升级','392',',392,403,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('404','1','setmac/setsn','392',',392,404,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('405','1','信息查看','392',',392,405,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('406','1','端口自协商','392',',392,406,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('407','1','端口连通性','392',',392,407,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('408','1','端口模式切换','392',',392,408,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('409','1','指示灯','392',',392,409,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('410','1','寄存器','392',',392,410,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('411','1','堆叠','392',',392,411,','2','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('412','1','模块热拔插','392',',392,412,','2','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('444','1','线缆故障检测','433',',120,431,433,444,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('431','1','端口','120',',120,431,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('432','1','性能','120',',120,432,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('433','1','电口','431',',120,431,433,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('434','1','光口+光模块','431',',120,431,434,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('443','1','Auto-crossover功能','433',',120,431,433,443,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('442','1','长线极限及兼容性','431',',120,431,442,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('441','1','光电切换','431',',120,431,441,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('440','1','连通性','431',',120,431,440,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('439','1','混插','431',',120,431,439,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('438','1','防止假link功能','431',',120,431,438,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('437','1','拔插','431',',120,431,437,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('436','1','AN功能','431',',120,431,436,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('435','1','LED','431',',120,431,435,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('445','1','自动降档功能','433',',120,431,433,445,','4','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('446','1','状态遍历','433',',120,431,433,446,','4','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('447','1','自协商','433',',120,431,433,447,','4','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('454','1','LED标准电流','435',',120,431,435,454,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('455','1','L2 Throughput','432',',120,432,455,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('456','1','L2 Latency','432',',120,432,456,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('457','1','X-Stream','432',',120,432,457,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('458','1','Many-to-One','432',',120,432,458,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('459','1','One-to-Many','432',',120,432,459,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('460','1','Filter Illegal Frames','432',',120,432,460,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('461','1','Address Handling','432',',120,432,461,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('462','1','Broadcast Frames','432',',120,432,462,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('463','1','以太网Pause功能','432',',120,432,463,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('464','1','Forward Pressure','432',',120,432,464,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('465','1','Broadcast Proportion','432',',120,432,465,','3','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('466','1','L3 Throughput','432',',120,432,466,','3','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('467','1','L3 Latency','432',',120,432,467,','3','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('468','1','以太网WAN口性能','432',',120,432,468,','3','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('472','1','PSE','123',',109,123,472,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('473','1','PD','123',',109,123,473,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('503','2','MIMO发射测试','476',',476,503,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('504','2','MIMO接收测试','476',',476,504,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('505','2','发射功率','497',',476,497,505,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('506','2','EVM','497',',476,497,506,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('507','2','频偏','497',',476,497,507,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('508','2','频谱模板','497',',476,497,508,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('509','2','SRAM','477',',477,509,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('510','2','SDRAM','477',',477,510,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('511','2','FLASH','477',',477,511,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('512','2','DDR','477',',477,512,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('513','2','SATA','477',',477,513,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('514','2','TF卡','477',',477,514,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('515','2','SD卡','477',',477,515,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('516','2','U盘','477',',477,516,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('551','2','湿热交变','542',',480,542,551,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('552','2','低温启动','542',',480,542,552,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('550','2','温度循环','542',',480,542,550,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('549','2','高温工作','542',',480,542,549,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('548','2','低温工作','542',',480,542,548,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('547','2','温度冲击','542',',480,542,547,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('535','2','外观','479',',479,535,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('536','2','内部件','479',',479,536,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('537','2','盐雾','479',',479,537,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('538','2','防水','479',',479,538,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('539','2','防尘','479',',479,539,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('540','2','中性','537',',479,537,540,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('541','2','交替','537',',479,537,541,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('542','2','气候类','480',',480,542,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('543','2','powercycle类','480',',480,543,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('544','2','低温贮存','542',',480,542,544,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('545','2','高温贮存','542',',480,542,545,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('546','2','恒温恒湿贮存','542',',480,542,546,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('554','2','低温极限','542',',480,542,554,','3','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('555','2','高温极限','542',',480,542,555,','3','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('556','2','低温低压corner','542',',480,542,556,','3','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('557','2','高温低压corner','542',',480,542,557,','3','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('558','2','低温高压corner','542',',480,542,558,','3','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('559','2','高温高压corner','542',',480,542,559,','3','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('560','2','固定ms级powercycle','543',',480,543,560,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('561','2','随机powercycle','543',',480,543,561,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('562','2','低温低压powercycle&corner','543',',480,543,562,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('563','2','高温低压powercycle&corner','543',',480,543,563,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('564','2','低温高压powercycle&corner','543',',480,543,564,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('565','2','高温高压powercycle&corner','543',',480,543,565,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('566','2','带包材','481',',481,566,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('567','2','裸机不上电','481',',481,567,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('568','2','裸机上电','481',',481,568,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('569','2','随机振动','566',',481,566,569,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('570','2','正弦振动','566',',481,566,570,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('571','2','碰撞','566',',481,566,571,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('572','2','冲击','566',',481,566,572,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('573','2','跌落','566',',481,566,573,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('574','2','随机振动','567',',481,567,574,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('575','2','正弦振动','567',',481,567,575,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('576','2','冲击','567',',481,567,576,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('577','2','随机振动','568',',481,568,577,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('578','2','正弦振动','568',',481,568,578,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('579','2','冲击','568',',481,568,579,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('580','2','辐射发射(RE)','482',',482,580,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('581','2','传导发射(CE)','482',',482,581,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('582','2','辐射骚扰抗扰度(RS)','482',',482,582,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('583','2','传导骚扰抗扰度(CS)','482',',482,583,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('584','2','电快速瞬变脉冲群抗扰度(EFT/B)','482',',482,584,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('585','2','静电放电抗扰度(ESD)','482',',482,585,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('586','2','浪涌（冲击）抗扰度(Surge)','482',',482,586,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('587','2','输入电流功率','483',',483,587,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('588','2','接地连续性','483',',483,588,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('589','2','耐压','483',',483,589,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('590','2','接触电流','483',',483,590,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('591','2','正常温升','483',',483,591,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('592','2','稳定性','483',',483,592,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('593','2','电线固定和拉力','483',',483,593,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('594','2','恒定作用力和挂墙','483',',483,594,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('595','2','冲击','483',',483,595,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('596','2','标签耐久性','483',',483,596,','2','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('597','2','电话振铃','483',',483,597,','2','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('598','2','异常运行','483',',483,598,','2','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('599','2','电气间隙和爬电距离','483',',483,599,','2','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('600','2','安规关键器件','483',',483,600,','2','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('601','2','安全标识设计','483',',483,601,','2','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('602','2','安规工业设计','483',',483,602,','2','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('603','2','基本配置','484',',484,603,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('614','2','电口','612',',485,612,614,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('605','2','升级测试','484',',484,605,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('606','2','指示灯功能','484',',484,606,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('607','2','整机最大功耗','484',',484,607,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('608','2','cpld在线升级','484',',484,608,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('612','2','端口','485',',485,612,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('613','2','性能','485',',485,613,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('611','2','复位','484',',484,611,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('615','2','光口+光模块','612',',485,612,615,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('616','2','LED','612',',485,612,616,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('617','2','AN功能','612',',485,612,617,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('618','2','拔插','612',',485,612,618,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('619','2','防止假link功能','612',',485,612,619,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('620','2','混插','612',',485,612,620,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('621','2','连通性','612',',485,612,621,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('622','2','光电切换','612',',485,612,622,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('623','2','长线极限及兼容性','612',',485,612,623,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('624','2','Auto-crossover功能','614',',485,612,614,624,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('625','2','线缆故障检测','614',',485,612,614,625,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('626','2','自动降档功能','614',',485,612,614,626,','4','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('627','2','状态遍历','614',',485,612,614,627,','4','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('628','2','自协商','614',',485,612,614,628,','4','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('629','2','光模块及铜缆兼容性','615',',485,612,615,629,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('630','2','10G/40G端口独立性热拔插','615',',485,612,615,630,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('631','2','10G端口混插','615',',485,612,615,631,','4','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('632','2','QSFP+光模块控制信号验证','615',',485,612,615,632,','4','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('633','2','光模块信息查询','615',',485,612,615,633,','4','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('634','2','交换端口LED','616',',485,612,616,634,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('635','2','LED标准电流','616',',485,612,616,635,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('636','2','L2 Throughput','613',',485,613,636,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('637','2','L2 Latency','613',',485,613,637,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('638','2','X-Stream','613',',485,613,638,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('639','2','Many-to-One','613',',485,613,639,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('640','2','One-to-Many','613',',485,613,640,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('641','2','Filter Illegal Frames','613',',485,613,641,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('642','2','Address Handling','613',',485,613,642,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('643','2','Broadcast Frames','613',',485,613,643,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('644','2','以太网Pause功能','613',',485,613,644,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('645','2','Forward Pressure','613',',485,613,645,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('646','2','Broadcast Proportion','613',',485,613,646,','3','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('647','2','L3 Throughput','613',',485,613,647,','3','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('648','2','L3 Latency','613',',485,613,648,','3','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('649','2','以太网WAN口性能','613',',485,613,649,','3','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('650','2','3G','486',',486,650,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('651','2','4G','486',',486,651,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('652','2','蓝牙','486',',486,652,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('653','2','sim','486',',486,653,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('654','2','GPS','486',',486,654,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('655','2','基本要求','487',',487,655,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('656','2','架构与框架','487',',487,656,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('657','2','功能模块','487',',487,657,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('658','2','数据库','487',',487,658,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('659','2','兼容性','487',',487,659,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('660','2','性能','487',',487,660,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('661','2','安全','487',',487,661,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('662','2','用户体验','487',',487,662,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('663','2','UI界面','487',',487,663,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('664','2','flash烧片','489',',489,664,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('665','2','程序下载','489',',489,665,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('666','2','内存自检','489',',489,666,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('667','2','setmac/setsn','489',',489,667,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('668','2','信息查看','489',',489,668,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('669','2','射频校准','489',',489,669,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('670','2','指示灯','489',',489,670,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('671','2','收发帧','489',',489,671,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('672','2','连通性','489',',489,672,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('673','2','format/程序回退','490',',490,673,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('674','2','程序下载升级','490',',490,674,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('675','2','setmac/setsn','490',',490,675,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('676','2','信息查看','490',',490,676,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('677','2','端口自协商','490',',490,677,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('678','2','端口连通性','490',',490,678,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('679','2','端口模式切换','490',',490,679,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('680','2','指示灯','490',',490,680,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('681','2','寄存器','490',',490,681,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('682','2','堆叠','490',',490,682,','2','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('683','2','模块热拔插','490',',490,683,','2','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('697','3','其他','70',',697,','1','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('698','3','生产软件','70',',698,','1','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('699','3','主程序','70',',699,','1','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('700','3','POE','684',',684,700,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('701','3','开关电源','684',',684,701,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('702','3','板级电源','684',',684,702,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('703','3','智能电源','684',',684,703,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('704','3','发射','685',',685,704,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('705','3','杂散发射','685',',685,705,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('706','3','接收灵敏度','685',',685,706,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('707','3','最大接收电平','685',',685,707,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('708','3','阻塞','685',',685,708,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('709','3','邻道抑制比','685',',685,709,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('710','3','MIMO发射测试','685',',685,710,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('711','3','MIMO接收测试','685',',685,711,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('712','3','发射功率','704',',685,704,712,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('713','3','EVM','704',',685,704,713,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('714','3','频偏','704',',685,704,714,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('715','3','频谱模板','704',',685,704,715,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('716','3','SRAM','686',',686,716,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('717','3','SDRAM','686',',686,717,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('718','3','FLASH','686',',686,718,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('719','3','DDR','686',',686,719,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('720','3','SATA','686',',686,720,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('721','3','TF卡','686',',686,721,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('722','3','SD卡','686',',686,722,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('723','3','U盘','686',',686,723,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('724','3','基本性能','687',',687,724,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('725','3','对手评测','687',',687,725,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('726','3','客户体验','687',',687,726,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('727','3','外场性能','687',',687,727,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('728','3','外观','688',',688,728,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('729','3','内部件','688',',688,729,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('730','3','盐雾','688',',688,730,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('731','3','防水','688',',688,731,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('732','3','防尘','688',',688,732,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('733','3','中性','730',',688,730,733,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('734','3','交替','730',',688,730,734,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('735','3','气候类','689',',689,735,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('736','3','powercycle类','689',',689,736,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('737','3','低温贮存','735',',689,735,737,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('738','3','高温贮存','735',',689,735,738,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('739','3','恒温恒湿贮存','735',',689,735,739,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('740','3','温度冲击','735',',689,735,740,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('741','3','低温工作','735',',689,735,741,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('742','3','高温工作','735',',689,735,742,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('743','3','温度循环','735',',689,735,743,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('744','3','湿热交变','735',',689,735,744,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('745','3','低温启动','735',',689,735,745,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('746','3','高温启动','735',',689,735,746,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('747','3','低温极限','735',',689,735,747,','3','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('748','3','高温极限','735',',689,735,748,','3','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('749','3','低温低压corner','735',',689,735,749,','3','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('750','3','高温低压corner','735',',689,735,750,','3','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('751','3','低温高压corner','735',',689,735,751,','3','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('752','3','高温高压corner','735',',689,735,752,','3','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('753','3','固定ms级powercycle','736',',689,736,753,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('754','3','随机powercycle','736',',689,736,754,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('755','3','低温低压powercycle&corner','736',',689,736,755,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('756','3','高温低压powercycle&corner','736',',689,736,756,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('757','3','低温高压powercycle&corner','736',',689,736,757,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('758','3','高温高压powercycle&corner','736',',689,736,758,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('759','3','带包材','690',',690,759,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('760','3','裸机不上电','690',',690,760,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('761','3','裸机上电','690',',690,761,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('762','3','随机振动','759',',690,759,762,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('763','3','正弦振动','759',',690,759,763,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('764','3','碰撞','759',',690,759,764,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('765','3','冲击','759',',690,759,765,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('766','3','跌落','759',',690,759,766,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('767','3','随机振动','760',',690,760,767,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('768','3','正弦振动','760',',690,760,768,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('769','3','冲击','760',',690,760,769,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('770','3','随机振动','761',',690,761,770,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('771','3','正弦振动','761',',690,761,771,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('772','3','冲击','761',',690,761,772,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('773','3','辐射发射(RE)','691',',691,773,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('774','3','传导发射(CE)','691',',691,774,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('775','3','辐射骚扰抗扰度(RS)','691',',691,775,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('776','3','传导骚扰抗扰度(CS)','691',',691,776,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('777','3','电快速瞬变脉冲群抗扰度(EFT/B)','691',',691,777,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('778','3','静电放电抗扰度(ESD)','691',',691,778,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('779','3','浪涌（冲击）抗扰度(Surge)','691',',691,779,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('780','3','输入电流功率','692',',692,780,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('781','3','接地连续性','692',',692,781,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('782','3','耐压','692',',692,782,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('783','3','接触电流','692',',692,783,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('784','3','正常温升','692',',692,784,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('785','3','稳定性','692',',692,785,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('786','3','电线固定和拉力','692',',692,786,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('787','3','恒定作用力和挂墙','692',',692,787,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('788','3','冲击','692',',692,788,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('789','3','标签耐久性','692',',692,789,','2','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('790','3','电话振铃','692',',692,790,','2','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('791','3','异常运行','692',',692,791,','2','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('792','3','电气间隙和爬电距离','692',',692,792,','2','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('793','3','安规关键器件','692',',692,793,','2','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('794','3','安全标识设计','692',',692,794,','2','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('795','3','安规工业设计','692',',692,795,','2','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('796','3','基本配置','693',',693,796,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('797','3','信号强度覆盖','693',',693,797,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('798','3','升级测试','693',',693,798,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('799','3','指示灯功能','693',',693,799,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('800','3','整机最大功耗','693',',693,800,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('801','3','cpld在线升级','693',',693,801,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('802','3','智能天线训练选向','693',',693,802,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('803','3','内外置天线切换','693',',693,803,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('804','3','复位','693',',693,804,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('805','3','端口','694',',694,805,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('806','3','性能','694',',694,806,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('807','3','电口','805',',694,805,807,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('808','3','光口+光模块','805',',694,805,808,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('809','3','LED','805',',694,805,809,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('810','3','AN功能','805',',694,805,810,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('811','3','拔插','805',',694,805,811,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('812','3','防止假link功能','805',',694,805,812,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('813','3','混插','805',',694,805,813,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('814','3','连通性','805',',694,805,814,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('815','3','光电切换','805',',694,805,815,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('816','3','长线极限及兼容性','805',',694,805,816,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('817','3','Auto-crossover功能','807',',694,805,807,817,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('818','3','线缆故障检测','807',',694,805,807,818,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('819','3','自动降档功能','807',',694,805,807,819,','4','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('820','3','状态遍历','807',',694,805,807,820,','4','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('821','3','自协商','807',',694,805,807,821,','4','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('822','3','光模块及铜缆兼容性','808',',694,805,808,822,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('823','3','10G/40G端口独立性热拔插','808',',694,805,808,823,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('824','3','10G端口混插','808',',694,805,808,824,','4','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('825','3','QSFP+光模块控制信号验证','808',',694,805,808,825,','4','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('826','3','光模块信息查询','808',',694,805,808,826,','4','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('827','3','L2 Throughput','806',',694,806,827,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('828','3','L2 Latency','806',',694,806,828,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('829','3','X-Stream','806',',694,806,829,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('830','3','Many-to-One','806',',694,806,830,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('831','3','One-to-Many','806',',694,806,831,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('832','3','Filter Illegal Frames','806',',694,806,832,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('833','3','Address Handling','806',',694,806,833,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('834','3','Broadcast Frames','806',',694,806,834,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('835','3','以太网Pause功能','806',',694,806,835,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('836','3','Forward Pressure','806',',694,806,836,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('837','3','Broadcast Proportion','806',',694,806,837,','3','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('838','3','L3 Throughput','806',',694,806,838,','3','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('839','3','L3 Latency','806',',694,806,839,','3','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('840','3','以太网WAN口性能','806',',694,806,840,','3','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('841','3','3G','695',',695,841,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('842','3','4G','695',',695,842,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('843','3','蓝牙','695',',695,843,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('844','3','sim','695',',695,844,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('845','3','GPS','695',',695,845,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('846','3','基本要求','696',',696,846,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('847','3','架构与框架','696',',696,847,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('848','3','功能模块','696',',696,848,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('849','3','数据库','696',',696,849,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('850','3','兼容性','696',',696,850,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('851','3','性能','696',',696,851,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('852','3','安全','696',',696,852,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('853','3','用户体验','696',',696,853,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('854','3','UI界面','696',',696,854,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('855','3','flash烧片','698',',698,855,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('856','3','程序下载','698',',698,856,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('857','3','内存自检','698',',698,857,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('858','3','setmac/setsn','698',',698,858,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('859','3','信息查看','698',',698,859,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('860','3','射频校准','698',',698,860,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('861','3','指示灯','698',',698,861,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('862','3','收发帧','698',',698,862,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('863','3','连通性','698',',698,863,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('864','3','format/程序回退','699',',699,864,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('865','3','程序下载升级','699',',699,865,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('866','3','setmac/setsn','699',',699,866,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('867','3','信息查看','699',',699,867,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('868','3','端口自协商','699',',699,868,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('869','3','端口连通性','699',',699,869,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('870','3','端口模式切换','699',',699,870,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('871','3','指示灯','699',',699,871,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('872','3','寄存器','699',',699,872,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('873','3','堆叠','699',',699,873,','2','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('874','3','模块热拔插','699',',699,874,','2','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('896','4','PD','891',',875,891,896,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('897','4','发射','876',',876,897,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('898','4','杂散发射','876',',876,898,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('899','4','接收灵敏度','876',',876,899,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('900','4','最大接收电平','876',',876,900,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('901','4','阻塞','876',',876,901,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('902','4','邻道抑制比','876',',876,902,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('903','4','MIMO发射测试','876',',876,903,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('904','4','MIMO接收测试','876',',876,904,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('905','4','发射功率','897',',876,897,905,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('906','4','EVM','897',',876,897,906,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('907','4','频偏','897',',876,897,907,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('908','4','频谱模板','897',',876,897,908,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('909','4','SRAM','877',',877,909,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('910','4','SDRAM','877',',877,910,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('911','4','FLASH','877',',877,911,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('912','4','DDR','877',',877,912,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('913','4','SATA','877',',877,913,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('914','4','TF卡','877',',877,914,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('915','4','SD卡','877',',877,915,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('916','4','U盘','877',',877,916,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('917','4','基本性能','878',',878,917,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('918','4','外场性能','878',',878,918,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('919','4','对手评测','878',',878,919,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('920','4','客户体验','878',',878,920,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('921','4','外观','879',',879,921,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('922','4','内部件','879',',879,922,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('923','4','盐雾','879',',879,923,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('924','4','防水','879',',879,924,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('925','4','防尘','879',',879,925,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('926','4','中性','923',',879,923,926,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('927','4','交替','923',',879,923,927,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('928','4','气候类','880',',880,928,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('929','4','powercycle类','880',',880,929,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('930','4','低温贮存','928',',880,928,930,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('931','4','高温贮存','928',',880,928,931,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('932','4','恒温恒湿贮存','928',',880,928,932,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('933','4','温度冲击','928',',880,928,933,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('934','4','低温工作','928',',880,928,934,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('935','4','高温工作','928',',880,928,935,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('936','4','温度循环','928',',880,928,936,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('937','4','湿热交变','928',',880,928,937,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('938','4','低温启动','928',',880,928,938,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('939','4','高温启动','928',',880,928,939,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('940','4','低温极限','928',',880,928,940,','3','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('941','4','高温极限','928',',880,928,941,','3','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('942','4','低温低压corner','928',',880,928,942,','3','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('943','4','高温低压corner','928',',880,928,943,','3','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('944','4','低温高压corner','928',',880,928,944,','3','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('945','4','高温高压corner','928',',880,928,945,','3','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('946','4','固定ms级powercycle','929',',880,929,946,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('947','4','随机powercycle','929',',880,929,947,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('948','4','低温低压powercycle&corner','929',',880,929,948,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('949','4','高温低压powercycle&corner','929',',880,929,949,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('950','4','低温高压powercycle&corner','929',',880,929,950,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('951','4','高温高压powercycle&corner','929',',880,929,951,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('952','4','带包材','881',',881,952,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('953','4','裸机不上电','881',',881,953,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('954','4','裸机上电','881',',881,954,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('955','4','随机振动','952',',881,952,955,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('956','4','正弦振动','952',',881,952,956,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('957','4','碰撞','952',',881,952,957,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('958','4','冲击','952',',881,952,958,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('959','4','跌落','952',',881,952,959,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('960','4','随机振动','953',',881,953,960,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('961','4','正弦振动','953',',881,953,961,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('962','4','冲击','953',',881,953,962,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('963','4','随机振动','954',',881,954,963,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('964','4','正弦振动','954',',881,954,964,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('965','4','冲击','954',',881,954,965,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('966','4','辐射发射(RE)','882',',882,966,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('967','4','传导发射(CE)','882',',882,967,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('968','4','辐射骚扰抗扰度(RS)','882',',882,968,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('969','4','传导骚扰抗扰度(CS)','882',',882,969,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('970','4','电快速瞬变脉冲群抗扰度(EFT/B)','882',',882,970,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('971','4','静电放电抗扰度(ESD)','882',',882,971,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('972','4','浪涌（冲击）抗扰度(Surge)','882',',882,972,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('973','4','输入电流功率','883',',883,973,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('974','4','接地连续性','883',',883,974,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('975','4','耐压','883',',883,975,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('976','4','接触电流','883',',883,976,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('977','4','正常温升','883',',883,977,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('978','4','稳定性','883',',883,978,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('979','4','电线固定和拉力','883',',883,979,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('980','4','恒定作用力和挂墙','883',',883,980,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('981','4','冲击','883',',883,981,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('982','4','标签耐久性','883',',883,982,','2','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('983','4','电话振铃','883',',883,983,','2','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('984','4','异常运行','883',',883,984,','2','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('985','4','电气间隙和爬电距离','883',',883,985,','2','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('986','4','安规关键器件','883',',883,986,','2','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('987','4','安全标识设计','883',',883,987,','2','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('988','4','安规工业设计','883',',883,988,','2','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('989','4','基本配置','884',',884,989,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('990','4','信号强度覆盖','884',',884,990,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('991','4','升级测试','884',',884,991,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('992','4','指示灯功能','884',',884,992,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('993','4','整机最大功耗','884',',884,993,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('994','4','cpld在线升级','884',',884,994,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('995','4','智能天线训练选向','884',',884,995,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('996','4','内外置天线切换','884',',884,996,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('997','4','复位','884',',884,997,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('998','4','端口','885',',885,998,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('999','4','性能','885',',885,999,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1000','4','电口','998',',885,998,1000,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1001','4','光口+光模块','998',',885,998,1001,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1002','4','LED','998',',885,998,1002,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1003','4','AN功能','998',',885,998,1003,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1004','4','拔插','998',',885,998,1004,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1005','4','防止假link功能','998',',885,998,1005,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1006','4','混插','998',',885,998,1006,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1007','4','连通性','998',',885,998,1007,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1008','4','光电切换','998',',885,998,1008,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1009','4','长线极限及兼容性','998',',885,998,1009,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1010','4','Auto-crossover功能','1000',',885,998,1000,1010,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1011','4','线缆故障检测','1000',',885,998,1000,1011,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1012','4','自动降档功能','1000',',885,998,1000,1012,','4','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1013','4','状态遍历','1000',',885,998,1000,1013,','4','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1014','4','自协商','1000',',885,998,1000,1014,','4','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1015','4','光模块及铜缆兼容性','1001',',885,998,1001,1015,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1016','4','10G/40G端口独立性热拔插','1001',',885,998,1001,1016,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1017','4','10G端口混插','1001',',885,998,1001,1017,','4','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1018','4','QSFP+光模块控制信号验证','1001',',885,998,1001,1018,','4','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1019','4','光模块信息查询','1001',',885,998,1001,1019,','4','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1020','4','交换端口LED','1002',',885,998,1002,1020,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1021','4','LED标准电流','1002',',885,998,1002,1021,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1022','4','3G','886',',886,1022,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1023','4','4G','886',',886,1023,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1024','4','蓝牙','886',',886,1024,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1025','4','sim','886',',886,1025,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1026','4','GPS','886',',886,1026,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1027','4','基本要求','887',',887,1027,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1028','4','架构与框架','887',',887,1028,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1029','4','功能模块','887',',887,1029,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1030','4','数据库','887',',887,1030,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1031','4','兼容性','887',',887,1031,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1032','4','性能','887',',887,1032,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1033','4','安全','887',',887,1033,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1034','4','用户体验','887',',887,1034,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1035','4','UI界面','887',',887,1035,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1036','4','数据库安全','1033',',887,1033,1036,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1037','4','数据传递安全','1033',',887,1033,1037,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1038','4','用户权限','1033',',887,1033,1038,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1039','4','文件文档安全','1033',',887,1033,1039,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1040','4','菜单类','1035',',887,1035,1040,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1041','4','表单列表类','1035',',887,1035,1041,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1042','4','控件类','1035',',887,1035,1042,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1043','4','flash烧片','889',',889,1043,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1044','4','程序下载','889',',889,1044,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1045','4','内存自检','889',',889,1045,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1046','4','setmac/setsn','889',',889,1046,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1047','4','信息查看','889',',889,1047,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1048','4','射频校准','889',',889,1048,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1049','4','指示灯','889',',889,1049,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1050','4','收发帧','889',',889,1050,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1051','4','连通性','889',',889,1051,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1052','4','format/程序回退','890',',890,1052,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1053','4','程序下载升级','890',',890,1053,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1054','4','setmac/setsn','890',',890,1054,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1055','4','信息查看','890',',890,1055,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1056','4','端口自协商','890',',890,1056,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1057','4','端口连通性','890',',890,1057,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1058','4','端口模式切换','890',',890,1058,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1059','4','指示灯','890',',890,1059,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1060','4','寄存器','890',',890,1060,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1061','4','堆叠','890',',890,1061,','2','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1062','4','模块热拔插','890',',890,1062,','2','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1114','5','遮挡性能','1105',',1066,1105,1114,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1115','5','特定信号强度点','1105',',1066,1105,1115,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1116','5','室内移动ping包','1105',',1066,1105,1116,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1117','5','抗干扰性能','1106',',1066,1106,1117,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1118','5','穿墙性能','1106',',1066,1106,1118,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1119','5','视距极限性能','1106',',1066,1106,1119,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1120','5','遮挡性能','1106',',1066,1106,1120,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1121','5','室内ping包','1106',',1066,1106,1121,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1122','5','多用户在线视频','1107',',1066,1107,1122,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1123','5','多用户在线网页访问','1107',',1066,1107,1123,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1124','5','多用户视频','1107',',1066,1107,1124,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1125','5','多用户语音聊天','1107',',1066,1107,1125,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1126','5','网络游戏体验','1107',',1066,1107,1126,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1127','5','干扰环境下性能体验','1107',',1066,1107,1127,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1128','5','多用户在线下载','1107',',1066,1107,1128,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1129','5','外观','1067',',1067,1129,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1130','5','内部件','1067',',1067,1130,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1131','5','盐雾','1067',',1067,1131,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1132','5','防水','1067',',1067,1132,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1133','5','防尘','1067',',1067,1133,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1134','5','中性','1131',',1067,1131,1134,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1135','5','交替','1131',',1067,1131,1135,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1136','5','气候类','1068',',1068,1136,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1137','5','powercycle类','1068',',1068,1137,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1138','5','低温贮存','1136',',1068,1136,1138,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1139','5','高温贮存','1136',',1068,1136,1139,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1140','5','恒温恒湿贮存','1136',',1068,1136,1140,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1141','5','温度冲击','1136',',1068,1136,1141,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1142','5','低温工作','1136',',1068,1136,1142,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1143','5','高温工作','1136',',1068,1136,1143,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1144','5','温度循环','1136',',1068,1136,1144,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1145','5','湿热交变','1136',',1068,1136,1145,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1146','5','低温启动','1136',',1068,1136,1146,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1147','5','高温启动','1136',',1068,1136,1147,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1148','5','低温极限','1136',',1068,1136,1148,','3','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1149','5','高温极限','1136',',1068,1136,1149,','3','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1150','5','低温低压corner','1136',',1068,1136,1150,','3','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1151','5','高温低压corner','1136',',1068,1136,1151,','3','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1152','5','低温高压corner','1136',',1068,1136,1152,','3','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1153','5','高温高压corner','1136',',1068,1136,1153,','3','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1154','5','固定ms级powercycle','1137',',1068,1137,1154,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1155','5','随机powercycle','1137',',1068,1137,1155,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1156','5','低温低压powercycle&corner','1137',',1068,1137,1156,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1157','5','高温低压powercycle&corner','1137',',1068,1137,1157,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1158','5','低温高压powercycle&corner','1137',',1068,1137,1158,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1159','5','高温高压powercycle&corner','1137',',1068,1137,1159,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1160','5','带包材','1069',',1069,1160,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1161','5','裸机不上电','1069',',1069,1161,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1162','5','裸机上电','1069',',1069,1162,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1163','5','随机振动','1160',',1069,1160,1163,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1164','5','正弦振动','1160',',1069,1160,1164,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1165','5','碰撞','1160',',1069,1160,1165,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1166','5','冲击','1160',',1069,1160,1166,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1167','5','跌落','1160',',1069,1160,1167,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1168','5','随机振动','1161',',1069,1161,1168,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1169','5','正弦振动','1161',',1069,1161,1169,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1170','5','冲击','1161',',1069,1161,1170,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1171','5','随机振动','1162',',1069,1162,1171,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1172','5','正弦振动','1162',',1069,1162,1172,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1173','5','冲击','1162',',1069,1162,1173,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1174','5','辐射发射(RE)','1070',',1070,1174,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1175','5','传导发射(CE)','1070',',1070,1175,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1176','5','辐射骚扰抗扰度(RS)','1070',',1070,1176,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1177','5','传导骚扰抗扰度(CS)','1070',',1070,1177,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1178','5','电快速瞬变脉冲群抗扰度(EFT/B)','1070',',1070,1178,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1179','5','静电放电抗扰度(ESD)','1070',',1070,1179,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1180','5','浪涌（冲击）抗扰度(Surge)','1070',',1070,1180,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1181','5','输入电流功率','1071',',1071,1181,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1182','5','接地连续性','1071',',1071,1182,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1183','5','耐压','1071',',1071,1183,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1184','5','接触电流','1071',',1071,1184,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1185','5','正常温升','1071',',1071,1185,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1186','5','稳定性','1071',',1071,1186,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1187','5','电线固定和拉力','1071',',1071,1187,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1188','5','恒定作用力和挂墙','1071',',1071,1188,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1189','5','冲击','1071',',1071,1189,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1190','5','标签耐久性','1071',',1071,1190,','2','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1191','5','电话振铃','1071',',1071,1191,','2','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1192','5','异常运行','1071',',1071,1192,','2','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1193','5','电气间隙和爬电距离','1071',',1071,1193,','2','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1194','5','安规关键器件','1071',',1071,1194,','2','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1195','5','安全标识设计','1071',',1071,1195,','2','150','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1196','5','安规工业设计','1071',',1071,1196,','2','160','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1197','5','基本配置','1072',',1072,1197,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1198','5','信号强度覆盖','1072',',1072,1198,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1199','5','升级测试','1072',',1072,1199,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1200','5','指示灯功能','1072',',1072,1200,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1201','5','整机最大功耗','1072',',1072,1201,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1202','5','cpld在线升级','1072',',1072,1202,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1203','5','智能天线训练选向','1072',',1072,1203,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1204','5','内外置天线切换','1072',',1072,1204,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1205','5','复位','1072',',1072,1205,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1206','5','端口','1073',',1073,1206,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1207','5','性能','1073',',1073,1207,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1208','5','电口','1206',',1073,1206,1208,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1209','5','光口+光模块','1206',',1073,1206,1209,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1210','5','LED','1206',',1073,1206,1210,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1211','5','AN功能','1206',',1073,1206,1211,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1212','5','拔插','1206',',1073,1206,1212,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1213','5','防止假link功能','1206',',1073,1206,1213,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1214','5','混插','1206',',1073,1206,1214,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1215','5','连通性','1206',',1073,1206,1215,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1216','5','光电切换','1206',',1073,1206,1216,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1217','5','长线极限及兼容性','1206',',1073,1206,1217,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1218','5','Auto-crossover功能','1208',',1073,1206,1208,1218,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1219','5','线缆故障检测','1208',',1073,1206,1208,1219,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1220','5','自动降档功能','1208',',1073,1206,1208,1220,','4','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1221','5','状态遍历','1208',',1073,1206,1208,1221,','4','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1222','5','自协商','1208',',1073,1206,1208,1222,','4','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1223','5','光模块及铜缆兼容性','1209',',1073,1206,1209,1223,','4','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1224','5','10G/40G端口独立性热拔插','1209',',1073,1206,1209,1224,','4','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1225','5','10G端口混插','1209',',1073,1206,1209,1225,','4','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1226','5','QSFP+光模块控制信号验证','1209',',1073,1206,1209,1226,','4','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1227','5','光模块信息查询','1209',',1073,1206,1209,1227,','4','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1228','5','L2 Throughput','1207',',1073,1207,1228,','3','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1229','5','L2 Latency','1207',',1073,1207,1229,','3','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1230','5','X-Stream','1207',',1073,1207,1230,','3','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1231','5','Many-to-One','1207',',1073,1207,1231,','3','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1232','5','One-to-Many','1207',',1073,1207,1232,','3','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1233','5','Filter Illegal Frames','1207',',1073,1207,1233,','3','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1234','5','Address Handling','1207',',1073,1207,1234,','3','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1235','5','Broadcast Frames','1207',',1073,1207,1235,','3','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1236','5','以太网Pause功能','1207',',1073,1207,1236,','3','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1237','5','Forward Pressure','1207',',1073,1207,1237,','3','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1238','5','Broadcast Proportion','1207',',1073,1207,1238,','3','110','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1239','5','L3 Throughput','1207',',1073,1207,1239,','3','120','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1240','5','L3 Latency','1207',',1073,1207,1240,','3','130','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1241','5','以太网WAN口性能','1207',',1073,1207,1241,','3','140','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1242','5','3G','1074',',1074,1242,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1243','5','4G','1074',',1074,1243,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1244','5','蓝牙','1074',',1074,1244,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1245','5','sim','1074',',1074,1245,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1246','5','GPS','1074',',1074,1246,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1247','5','flash烧片','1076',',1076,1247,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1248','5','程序下载','1076',',1076,1248,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1249','5','内存自检','1076',',1076,1249,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1250','5','setmac/setsn','1076',',1076,1250,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1251','5','信息查看','1076',',1076,1251,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1252','5','射频校准','1076',',1076,1252,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1253','5','指示灯','1076',',1076,1253,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1254','5','收发帧','1076',',1076,1254,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1255','5','连通性','1076',',1076,1255,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1256','5','format/程序回退','1077',',1077,1256,','2','10','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1257','5','程序下载升级','1077',',1077,1257,','2','20','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1258','5','setmac/setsn','1077',',1077,1258,','2','30','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1259','5','信息查看','1077',',1077,1259,','2','40','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1260','5','端口自协商','1077',',1077,1260,','2','50','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1261','5','端口连通性','1077',',1077,1261,','2','60','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1262','5','端口模式切换','1077',',1077,1262,','2','70','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1263','5','指示灯','1077',',1077,1263,','2','80','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1264','5','寄存器','1077',',1077,1264,','2','90','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1265','5','堆叠','1077',',1077,1265,','2','100','story','');
INSERT INTO `zt_module`(`id`,`root`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`) VALUES ('1266','5','模块热拔插','1077',',1077,1266,','2','110','story','');
DROP TABLE IF EXISTS `zt_product`;
CREATE TABLE `zt_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `code` varchar(45) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `PO` varchar(30) NOT NULL,
  `QD` varchar(30) NOT NULL,
  `RD` varchar(30) NOT NULL,
  `acl` enum('open','private','custom') NOT NULL DEFAULT 'open',
  `whitelist` varchar(255) NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdVersion` varchar(20) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
INSERT INTO `zt_product`(`id`,`name`,`code`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`deleted`) VALUES ('1','无线产品','RG-WL','normal','<p>无线产品线由无线产品事业部经营维护。</p>
<p>无线产品有：</p>
<p><br />
</p>
<ul><li><span style=\"line-height:1.57142857;\">放装型无线接入点</span></li>
<li>场景化部署无线解决方案</li>
<li>无线控制器</li>
<li>无线管理与应用</li>
</ul>
<p><br />
</p>','liuxianbing','liuxianbing','liuxianbing','open','','admin','2015-01-13 18:00:07','6.4','0');
INSERT INTO `zt_product`(`id`,`name`,`code`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`deleted`) VALUES ('2','交换机产品','RG-JHJ','normal','<p>交换机线由交换机产品事业部经营维护。</p>
<p>交换机产品有：</p>
<ul><li>数据中心交换机</li>
<li>园区网交换机</li>
<li>中小企业交换机</li>
</ul>','xuedongsheng','xuedongsheng','xuedongsheng','open','','admin','2015-01-13 20:03:47','6.4','0');
INSERT INTO `zt_product`(`id`,`name`,`code`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`deleted`) VALUES ('3','路由器产品','RG-LYQ','normal','<p>路由器产品线由路由器产品事业部经营维护。</p>
<p>路由器产品有：</p>
<p><br />
</p>
<ul><li>核心路由器</li>
<li>汇聚路由器</li>
<li>接入路由器</li>
<li>移动路由器</li>
</ul>','xuedongsheng','xuedongsheng','xuedongsheng','open','','admin','2015-01-13 20:07:41','6.4','0');
INSERT INTO `zt_product`(`id`,`name`,`code`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`deleted`) VALUES ('4','小网络与网关产品','RG-XWL','normal','<p>小网络与网关产品线由无线产品事业部经营维护。</p>
<p>小网络与网关产品有：</p>
<p><br />
</p>
<ul><li><span style=\"line-height:1.57142857;\">行为管理</span></li>
<li>多功能网关</li>
<li>流控</li>
<li>内容加速</li>
<li>中小企业</li>
</ul>','liuxianbing','liuxianbing','liuxianbing','open','','admin','2015-01-13 20:09:47','6.4','0');
INSERT INTO `zt_product`(`id`,`name`,`code`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`deleted`) VALUES ('5','平台产品','RG-PT','normal','<p>平台产品线由平台事业部经营维护。</p>
<p>平台产品有：</p>
<p><br />
</p>
<ul><li>测试解决方案</li>
<li>产线优化方案</li>
<li>一线优化解决方案</li>
</ul>','liuxianbing','liuxianbing','liuxianbing','open','','admin','2015-01-13 20:14:20','6.4','0');
DROP TABLE IF EXISTS `zt_productplan`;
CREATE TABLE `zt_productplan` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `title` varchar(90) NOT NULL,
  `desc` text NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO `zt_productplan`(`id`,`product`,`title`,`desc`,`begin`,`end`,`deleted`) VALUES ('1','1','【道路与轨道交通】【MTFI】西郊地铁【内部测试】','西郊地铁内部测试','2015-01-06','2015-03-09','0');
INSERT INTO `zt_productplan`(`id`,`product`,`title`,`desc`,`begin`,`end`,`deleted`) VALUES ('2','1','RG-MTFI V2.0','<p>MTFI V2.0 通用硬件版本包含9款产品：</p>
<p>MTFI-SU、MTFI-SM、MTFI-ST、MTFI-MU、MTFI-MM、MTFI-MT、MTFI-YCGJ、MTFI-SMY、MTFI-车宝</p>
<p>模块有：</p>
<p><ol><li><span style=\"line-height:1.57142857;\">SSD硬盘：SATA2 128G、SATA2 64G、SATA2 32G</span></li>
<li>3G/4G模块：ZTE2716、DM11-1、DM11-6、MU3860</li>
</ol>
</p>
<p><br />
</p>','2014-11-01','2015-01-31','0');
INSERT INTO `zt_productplan`(`id`,`product`,`title`,`desc`,`begin`,`end`,`deleted`) VALUES ('3','5','硬件项目测试系统 V1.0','开发【硬件项目测试系统 V1.0】，提供完善的功能，解决相关BUG。','2015-01-01','2015-02-15','0');
DROP TABLE IF EXISTS `zt_project`;
CREATE TABLE `zt_project` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `isCat` enum('1','0') NOT NULL DEFAULT '0',
  `catID` mediumint(8) unsigned NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'sprint',
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(90) NOT NULL,
  `code` varchar(45) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `days` smallint(5) unsigned NOT NULL,
  `status` varchar(10) NOT NULL,
  `statge` enum('1','2','3','4','5') NOT NULL DEFAULT '1',
  `pri` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `desc` text NOT NULL,
  `openedBy` varchar(30) NOT NULL DEFAULT '',
  `openedDate` int(10) unsigned NOT NULL DEFAULT '0',
  `openedVersion` varchar(20) NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` int(10) unsigned NOT NULL DEFAULT '0',
  `canceledBy` varchar(30) NOT NULL DEFAULT '',
  `canceledDate` int(10) unsigned NOT NULL DEFAULT '0',
  `PO` varchar(30) NOT NULL DEFAULT '',
  `PM` varchar(30) NOT NULL DEFAULT '',
  `QD` varchar(30) NOT NULL DEFAULT '',
  `RD` varchar(30) NOT NULL DEFAULT '',
  `team` varchar(30) NOT NULL,
  `acl` enum('open','private','custom') NOT NULL DEFAULT 'open',
  `whitelist` varchar(255) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `project` (`type`,`parent`,`begin`,`end`,`status`,`statge`,`pri`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`deleted`) VALUES ('1','0','0','waterfall','0','RG-AP630','RG-AP630','2015-01-13','2015-04-01','57','doing','1','1','<p>AP630是无线产品事业部14年开发项目。</p>
<p>定位为室外型AP。</p>','','0','6.4','','0','','0','','','','','AP630测试小组','open','','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`deleted`) VALUES ('2','0','0','sprint','0','RG-MTFI','RG-MTFI','2015-01-14','2015-03-17','45','doing','1','1','<p>广泛用于道路交通的新网络无线产品。</p>
<p>内部集成RK3188四核CPU，支持多种媒体和网络接口，采用迭代开发模式，快速满足客户需求变更。</p>','','0','6.4','','0','','0','liuxianbing','caikaiye','caikaiye','caikaiye','MTFI测试组','private','','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`deleted`) VALUES ('3','0','0','sprint','0','硬件项目测试管理系统','HTPMS','2015-01-01','2015-07-06','133','doing','1','1','<p>【来源】：为了解决需求、用例、测试结果、测试报告无序状态，以及应对各事业部大量采用敏捷SCRUM开发模式的大环境。</p>
<p><span style=\"line-height:1.57142857;\">【主导】：硬件测试组-无线测试组</span></p>
<p><span style=\"line-height:1.57142857;\">【系统原型】：禅道项目管理系统</span></p>
<p>【开发移植】：蔡锴晔</p>
<p>【目标】：将需求、测试、执行、时间、资源统一管理，有序管理统计。减少测试支撑在测试用例、测试规划、测试报告的资源消耗，提高工作效率，增加收益。</p>','','0','6.4','','0','','0','caikaiye','caikaiye','caikaiye','caikaiye','硬件项目测试管理系统开发组','private','','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`deleted`) VALUES ('4','0','0','ops','0','生产维护','生产维护','2015-01-15','2020-12-31','1556','doing','1','1','<p style=\"font-size:13px;\">【来源】：长期的生产软件、主程序发行维护</p>
<p style=\"font-size:13px;\">【前身】：无</p>
<p style=\"font-size:13px;\">【接口部门】：各事业部</p>
<p style=\"font-size:13px;\">【开发团队】：各事业组开发组</p>
<p style=\"font-size:13px;\">【客户】：产线</p>
<p style=\"font-size:13px;\">【应用场景】：产线软件下装</p>','','0','6.4','','0','','0','liuxianbing','luxiaoyan','luxiaoyan','luxiaoyan','生产维护团队','custom','1,8,12','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`deleted`) VALUES ('5','0','0','sprint','0','可调衰减器','可调衰减器','2015-01-16','2015-04-19','66','wait','1','1','<p>【来源】：测试开发新任务，测试解决方案分支</p>
<p>【负责人】：王阿莉</p>
<p>【阶段】：后续补充</p>','','0','6.4','','0','','0','','','','','测试开发组','open','','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`deleted`) VALUES ('6','0','0','waterfall','0','RG-RSR820-TW','RG-RSR820-TW','2015-01-16','2015-04-19','66','wait','1','1','<p>【来源】：成研2014产品升级</p>
<p><span>【前身】：</span>RSR820</p>
<p>【接口部门】：路由器产品事业部</p>
<p>【开发团队】：RSR820开发组</p>
<p>【客户】：驾校、交警部门</p>
<p>【应用场景】：1.科目三考试；2.驾校</p>','','0','6.4','','0','','0','liuxianbing','luzhiqiang','luzhiqiang','luzhiqiang','RG-RSR820-TW','private','','0');
DROP TABLE IF EXISTS `zt_projectproduct`;
CREATE TABLE `zt_projectproduct` (
  `project` mediumint(8) unsigned NOT NULL,
  `product` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`project`,`product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_projectproduct`(`project`,`product`) VALUES ('1','1');
INSERT INTO `zt_projectproduct`(`project`,`product`) VALUES ('2','1');
INSERT INTO `zt_projectproduct`(`project`,`product`) VALUES ('3','5');
INSERT INTO `zt_projectproduct`(`project`,`product`) VALUES ('4','1');
INSERT INTO `zt_projectproduct`(`project`,`product`) VALUES ('4','2');
INSERT INTO `zt_projectproduct`(`project`,`product`) VALUES ('4','3');
INSERT INTO `zt_projectproduct`(`project`,`product`) VALUES ('4','4');
INSERT INTO `zt_projectproduct`(`project`,`product`) VALUES ('4','5');
INSERT INTO `zt_projectproduct`(`project`,`product`) VALUES ('5','5');
INSERT INTO `zt_projectproduct`(`project`,`product`) VALUES ('6','1');
DROP TABLE IF EXISTS `zt_projectstory`;
CREATE TABLE `zt_projectstory` (
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product` mediumint(8) unsigned NOT NULL,
  `story` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `version` smallint(6) NOT NULL DEFAULT '1',
  UNIQUE KEY `project` (`project`,`story`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('2','1','2','1');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('2','1','1','2');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('3','5','4','1');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('3','5','3','2');
DROP TABLE IF EXISTS `zt_release`;
CREATE TABLE `zt_release` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `build` mediumint(8) unsigned NOT NULL,
  `name` char(30) NOT NULL DEFAULT '',
  `date` date NOT NULL,
  `stories` text NOT NULL,
  `bugs` text NOT NULL,
  `desc` text NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_story`;
CREATE TABLE `zt_story` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plan` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `source` varchar(20) NOT NULL,
  `fromBug` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT '',
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `estimate` float unsigned NOT NULL,
  `status` enum('','changed','active','draft','closed') NOT NULL DEFAULT '',
  `stage` enum('','wait','planned','projected','developing','developed','testing','tested','verified','released') NOT NULL DEFAULT 'wait',
  `mailto` varchar(255) NOT NULL DEFAULT '',
  `openedBy` varchar(30) NOT NULL DEFAULT '',
  `openedDate` datetime NOT NULL,
  `assignedTo` varchar(30) NOT NULL DEFAULT '',
  `assignedDate` datetime NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL DEFAULT '',
  `lastEditedDate` datetime NOT NULL,
  `reviewedBy` varchar(255) NOT NULL,
  `reviewedDate` date NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` datetime NOT NULL,
  `closedReason` varchar(30) NOT NULL,
  `toBug` mediumint(9) NOT NULL,
  `childStories` varchar(255) NOT NULL,
  `linkStories` varchar(255) NOT NULL,
  `duplicateStory` mediumint(8) unsigned NOT NULL,
  `version` smallint(6) NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`,`module`,`plan`,`type`,`pri`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
INSERT INTO `zt_story`(`id`,`product`,`module`,`plan`,`source`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('1','1','154','0','market','0','【道路与轨道交通】【道路交通】【MTFI】高温工作','高温工作  车载 道路 轨道','','1','31','active','testing',',caikaiye,caowei,liuxianbing,luzhiqiang,raoluhua,wangali','admin','2015-01-14 11:06:44','','0000-00-00 00:00:00','caikaiye','2015-01-15 15:43:07','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','2','0');
INSERT INTO `zt_story`(`id`,`product`,`module`,`plan`,`source`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('2','1','153','0','market','0','【道路与轨道交通】【道路交通】【MTFI】低温工作','低温工作  车载 道路 轨道','','1','31','active','testing',',caikaiye,caowei,liuxianbing,luzhiqiang,raoluhua','admin','2015-01-14 11:35:31','','0000-00-00 00:00:00','caikaiye','2015-01-15 15:42:13','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`module`,`plan`,`source`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('3','5','268','0','user','0','【硬件项目测试管理系统】【安全类】【文件文档安全】文档权限管理','文档  权限  安全  硬件项目测试系统','','2','48','active','projected','','admin','2015-01-14 20:09:38','caikaiye','2015-01-14 20:21:08','caikaiye','2015-01-14 20:21:08','admin','2015-01-14','','0000-00-00 00:00:00','','0','','','0','2','0');
INSERT INTO `zt_story`(`id`,`product`,`module`,`plan`,`source`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('4','5','255','3','bug','0','【硬件项目测试管理系统】【功能模块】测试启动自动转任务','硬件项目测试管理系统  测试自动转任务 任务 测试','','1','24','active','projected',',caikaiye','admin','2015-01-14 20:15:21','caikaiye','2015-01-14 20:21:59','caikaiye','2015-01-14 20:21:59','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','1','0');
DROP TABLE IF EXISTS `zt_storyspec`;
CREATE TABLE `zt_storyspec` (
  `story` mediumint(9) NOT NULL,
  `version` smallint(6) NOT NULL,
  `title` varchar(90) NOT NULL,
  `spec` text NOT NULL,
  `verify` text NOT NULL,
  UNIQUE KEY `story` (`story`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('1','1','【道路与轨道交通】【道路交通】【MTFI】高温工作','<p><strong><span style=\"font-size:18px;\">一、需求来源：</span></strong></p>
<p>根据《GB 2423.2-2001电工电子产品环境试验 第2部分试验方法 试验B高温》、《GBT 28046.4-2011 道路车辆 电气及电子设备的环境条件和试验 第4部分 气候负荷》规定、《GJB 150.3-1986军用设备环境试验方法 高温试验》，以及市场对道路车辆电气、电子产品的通用要求：</p>
<p style=\"text-align:center;\"><img src=\"data/upload/1/201501/1410450907143otl.png\" alt=\"\" /></p>
<p style=\"text-align:center;\"><em>图1. 《GB 2423.2-2001电工电子产品环境试验 第2部分试验方法 试验B高温》和《GBT 28046.4-2011 道路车辆 电气及电子设备的环境条件和试验 第4部分 气候负荷》 规定</em></p>
<p style=\"text-align:center;\"><img src=\"data/upload/1/201501/14104909019992gf.png\" alt=\"\" /></p>
<p style=\"text-align:center;\"><em>图2. 《GBT 19056-2012 汽车行驶记录仪&nbsp;》规定</em></p>
<p style=\"text-align:center;\"><img src=\"data/upload/1/201501/1410500403160k71.png\" alt=\"\" /></p>
<p style=\"text-align:center;\"><em>图3. 《JT/T794-2011 道路运输车辆卫星定位系统车载终端技术要求》&nbsp;规定</em></p>
<p style=\"text-align:left;\">二<span style=\"font-weight:700;\"><span style=\"font-size:18px;\">、需求类型：</span></span></p>
<p style=\"text-align:left;\">整机可靠性</p>
<p style=\"text-align:left;\">三<span style=\"font-weight:700;font-size:18px;\">、规格描述：</span></p>
<p style=\"text-align:left;\">根据多项需求定义以及实际车载环境评估，我司产品高温工作规格应至少满足70℃长期工作。</p>','车载产品在70℃，连续带电满负荷最大性能工作24小时，需要稳定工作，不出现任何异常和故障。');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('1','2','【道路与轨道交通】【道路交通】【MTFI】高温工作','<p><strong><span style=\"font-size:18px;\">一、需求来源：</span></strong></p>
<p>根据《GB 2423.2-2001电工电子产品环境试验 第2部分试验方法 试验B高温》、《GBT 28046.4-2011 道路车辆 电气及电子设备的环境条件和试验 第4部分 气候负荷》规定、《GJB 150.3-1986军用设备环境试验方法 高温试验》，以及市场对道路车辆电气、电子产品的通用要求：</p>
<p style=\"text-align:center;\"><img src=\"data/upload/1/201501/1410450907143otl.png\" alt=\"\" /></p>
<p style=\"text-align:center;\"><em>图1. 《GB 2423.2-2001电工电子产品环境试验 第2部分试验方法 试验B高温》和《GBT 28046.4-2011 道路车辆 电气及电子设备的环境条件和试验 第4部分 气候负荷》 规定</em></p>
<p style=\"text-align:center;\"><img src=\"data/upload/1/201501/14104909019992gf.png\" alt=\"\" /></p>
<p style=\"text-align:center;\"><em>图2. 《GBT 19056-2012 汽车行驶记录仪&nbsp;》规定</em></p>
<p style=\"text-align:center;\"><img src=\"data/upload/1/201501/1410500403160k71.png\" alt=\"\" /></p>
<p style=\"text-align:center;\"><em>图3. 《JT/T794-2011 道路运输车辆卫星定位系统车载终端技术要求》&nbsp;规定</em></p>
<p style=\"text-align:left;\">二<span style=\"font-weight:700;\"><span style=\"font-size:18px;\">、需求类型：</span></span></p>
<p style=\"text-align:left;\">整机可靠性</p>
<p style=\"text-align:left;\">三<span style=\"font-weight:700;font-size:18px;\">、规格描述：</span></p>
<p style=\"text-align:left;\">根据多项需求定义以及实际车载环境评估，我司产品高温工作规格应至少满足70℃长期工作。</p>','车载产品在70℃，连续带电满负荷最大性能工作24小时，需要稳定工作，不出现任何异常和故障。');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('2','1','【道路与轨道交通】【道路交通】【MTFI】低温工作','<p><strong><span style=\"font-size:18px;\">一、需求来源：</span></strong></p>
<p>根据《GB 2423.1-2001电工电子产品基本环境试验规程 试验A低温试验方法》、《GBT 28046.4-2011 道路车辆 电气及电子设备的环境条件和试验 第4部分 气候负荷》规定、《GJB 150.4-1986军用设备环境试验方法 低温试验》，以及市场对道路车辆电气、电子产品的通用要求：</p>
<p style=\"text-align:center;\"><img src=\"data/upload/1/201501/1411342407141otl.png\" alt=\"\" /></p>
<p style=\"text-align:center;\"><em>图1. 《GB 2423.2-2001电工电子产品环境试验 第2部分试验方法 试验B高温》和《GBT 28046.4-2011 道路车辆 电气及电子设备的环境条件和试验 第4部分 气候负荷》 规定</em></p>
<p style=\"text-align:center;\"><img src=\"data/upload/1/201501/1411320206064lml.png\" alt=\"\" /></p>
<p style=\"text-align:center;\"><em>图2. 《GBT 19056-2012 汽车行驶记录仪&nbsp;》规定</em></p>
<p style=\"text-align:center;\"><img src=\"data/upload/1/201501/1410500403160k71.png\" alt=\"\" /></p>
<p style=\"text-align:center;\"><em>图3. 《JT/T794-2011 道路运输车辆卫星定位系统车载终端技术要求》&nbsp;规定</em></p>
<p style=\"text-align:left;\">二<span style=\"font-weight:700;\"><span style=\"font-size:18px;\">、需求类型：</span></span></p>
<p style=\"text-align:left;\">整机可靠性</p>
<p style=\"text-align:left;\">三<span style=\"font-weight:700;font-size:18px;\">、规格描述：</span></p>
<p style=\"text-align:left;\">根据多项需求定义以及实际车载环境评估，我司产品低温工作规格应至少满足-20℃长期稳定工作。</p>','车载产品在-20℃，连续带电满负荷最大性能工作24小时，需要稳定工作，不出现任何异常和故障。');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('3','1','【道路与轨道交通】【道路交通】【MTFI】【SDV测试】低温工作测试【硬件项目测试管理系统】【安全类】【文件文档安全】文档权限管理','<p>产品线在项目之上，只要有产品线视图的用户即可看到项目层面文档；</p>
<p><strong>应细化文档权限管理；</strong></p>
<p><br />
</p>','<p>功能项：</p>
<p><span>1. 按用户限定；2.按用户组限定；3.按所属产品线或项目限定</span></p>');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('3','2','【硬件项目测试管理系统】【安全类】【文件文档安全】文档权限管理','<p>产品线在项目之上，只要有产品线视图的用户即可看到项目层面文档；</p>
<p>应细化文档权限管理；</p>
<p><strong>导入版本：</strong>未定；</p>','<p>功能项：</p>
<p><span>1. 按用户限定；2.按用户组限定；3.按所属产品线或项目限定</span></p>');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('4','1','【硬件项目测试管理系统】【功能模块】测试启动自动转任务','当前版本，版本提交，用例被指派后，不能自动为被指派人添加任务。只能在《测试》--&gt;《用例》中才能找到。','<span>版本提交测试，指派相关人，应自动转化为项目任务，使得被指派人可以在“我的地盘”看到相关信息；</span>');
DROP TABLE IF EXISTS `zt_task`;
CREATE TABLE `zt_task` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `story` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `storyVersion` smallint(6) NOT NULL DEFAULT '1',
  `fromBug` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `estimate` float unsigned NOT NULL,
  `consumed` float unsigned NOT NULL,
  `left` float unsigned NOT NULL,
  `deadline` date NOT NULL,
  `status` enum('wait','doing','done','pause','cancel','closed') NOT NULL DEFAULT 'wait',
  `mailto` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `openedBy` varchar(30) NOT NULL,
  `openedDate` datetime NOT NULL,
  `assignedTo` varchar(30) NOT NULL,
  `assignedDate` datetime NOT NULL,
  `estStarted` date NOT NULL,
  `realStarted` date NOT NULL,
  `finishedBy` varchar(30) NOT NULL,
  `finishedDate` datetime NOT NULL,
  `canceledBy` varchar(30) NOT NULL,
  `canceledDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL,
  `closedDate` datetime NOT NULL,
  `closedReason` varchar(30) NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL,
  `lastEditedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('1','2','153','2','1','0','【道路与轨道交通】【道路交通】【MTFI】【SDV测试】低温工作测试','test','4','11','7','4','2015-01-15','doing',',caikaiye,caowei,wangali','完成RG-MTFI-ST V1.0 低温工作测试','caikaiye','2015-01-14 19:10:03','caikaiye','2015-01-14 19:10:03','2015-01-14','2015-01-15','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','caikaiye','2015-01-15 17:12:21','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('2','2','154','1','2','0','【道路与轨道交通】【道路交通】【MTFI】【SDV测试】高温工作测试','test','4','11','0','11','2015-01-16','doing',',caikaiye,wangali','<span>完成RG-MTFI-ST V1.0 高温工作测试</span>','caikaiye','2015-01-15 17:53:53','caikaiye','2015-01-15 17:53:53','2015-01-15','2015-01-15','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','caikaiye','2015-01-15 17:54:04','0');
DROP TABLE IF EXISTS `zt_taskestimate`;
CREATE TABLE `zt_taskestimate` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `task` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `left` float unsigned NOT NULL DEFAULT '0',
  `consumed` float unsigned NOT NULL,
  `account` char(30) NOT NULL DEFAULT '',
  `work` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `task` (`task`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('1','1','2015-01-15','8','3','caikaiye','开始搭MTFI-ST V1.0 SDV测试【低温工作】模型');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('2','1','2015-01-15','7','1','caikaiye','初始测试不稳定，查看原因');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('3','1','2015-01-15','4','3','caikaiye','分析查看测试结果');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('4','2','2015-01-15','11','0','caikaiye','');
DROP TABLE IF EXISTS `zt_team`;
CREATE TABLE `zt_team` (
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) NOT NULL DEFAULT '',
  `role` char(30) NOT NULL DEFAULT '',
  `join` date NOT NULL DEFAULT '0000-00-00',
  `days` smallint(5) unsigned NOT NULL,
  `hours` float(2,1) unsigned NOT NULL DEFAULT '0.0',
  PRIMARY KEY (`project`,`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','raoluhua','测试代表','2015-01-13','57','8.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','caowei','测试','2015-01-13','57','8.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','wangali','测试','2015-01-13','57','8.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','luzhiqiang','测试','2015-01-13','57','8.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','luxiaoyan','测试','2015-01-13','57','8.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','caowei','测试','2015-01-14','45','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','luzhiqiang','测试','2015-01-14','45','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','raoluhua','测试','2015-01-14','45','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','wangali','测试','2015-01-14','45','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','caikaiye','测试代表','2015-01-14','45','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','liuxianbing','产品线负责人','2015-01-14','45','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('3','caikaiye','开发、测试代表','2015-01-14','133','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('4','luxiaoyan','测试代表','2015-01-15','1556','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('5','wangali','开发','2015-01-16','66','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('5','caikaiye','顾问','2015-01-16','66','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('5','liuxianbing','主管','2015-01-16','66','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('6','caowei','测试','2015-01-16','66','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('6','raoluhua','测试','2015-01-16','66','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('6','caikaiye','测试','2015-01-16','66','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('6','luzhiqiang','测试代表','2015-01-16','66','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('6','luxiaoyan','测试','2015-01-16','66','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('6','wangali','测试','2015-01-16','66','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('6','liuxianbing','测试主管','2015-01-16','66','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('4','liuxianbing','产品线负责人','2015-01-16','1556','7.0');
DROP TABLE IF EXISTS `zt_testresult`;
CREATE TABLE `zt_testresult` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `run` mediumint(8) unsigned NOT NULL,
  `case` mediumint(8) unsigned NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  `caseResult` char(30) NOT NULL,
  `stepResults` text NOT NULL,
  `lastRunner` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `run` (`run`),
  KEY `case` (`case`,`version`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('1','4','1','4','fail','a:6:{i:91;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}i:92;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}i:93;a:2:{s:6:\"result\";s:3:\"n/a\";s:4:\"real\";s:0:\"\";}i:94;a:2:{s:6:\"result\";s:4:\"fail\";s:4:\"real\";s:37:\" 出现两次重启，报堆栈错误\";}i:95;a:2:{s:6:\"result\";s:3:\"n/a\";s:4:\"real\";s:0:\"\";}i:96;a:2:{s:6:\"result\";s:3:\"n/a\";s:4:\"real\";s:0:\"\";}}','caikaiye','2015-01-15 17:44:46');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('2','3','3','4','fail','a:6:{i:79;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}i:80;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}i:81;a:2:{s:6:\"result\";s:3:\"n/a\";s:4:\"real\";s:0:\"\";}i:82;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}i:83;a:2:{s:6:\"result\";s:3:\"n/a\";s:4:\"real\";s:0:\"\";}i:84;a:2:{s:6:\"result\";s:4:\"fail\";s:4:\"real\";s:36:\"回到常温后，性能不能恢复\";}}','caikaiye','2015-01-15 17:45:39');
DROP TABLE IF EXISTS `zt_testrun`;
CREATE TABLE `zt_testrun` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `task` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `case` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `version` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `assignedTo` char(30) NOT NULL DEFAULT '',
  `lastRunner` varchar(30) NOT NULL,
  `lastRunDate` datetime NOT NULL,
  `lastRunResult` char(30) NOT NULL,
  `status` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `task` (`task`,`case`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('4','1','1','4','caikaiye','caikaiye','2015-01-15 17:44:46','fail','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('3','1','3','4','caikaiye','caikaiye','2015-01-15 17:45:39','fail','done');
DROP TABLE IF EXISTS `zt_testtask`;
CREATE TABLE `zt_testtask` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(90) NOT NULL,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `build` char(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `desc` text NOT NULL,
  `report` text NOT NULL,
  `status` enum('blocked','doing','wait','done') NOT NULL DEFAULT 'wait',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `zt_testtask`(`id`,`name`,`product`,`project`,`build`,`owner`,`pri`,`begin`,`end`,`desc`,`report`,`status`,`deleted`) VALUES ('1','RG-MTFI-ST V1.0 【SDV测试】','1','2','1','caikaiye','4','2015-01-14','2015-02-01','启动RG-MTFI-ST V1.0 SDV 内部测试。','','doing','0');
DROP TABLE IF EXISTS `zt_todo`;
CREATE TABLE `zt_todo` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `date` date NOT NULL,
  `begin` smallint(4) unsigned zerofill NOT NULL,
  `end` smallint(4) unsigned zerofill NOT NULL,
  `type` char(10) NOT NULL,
  `idvalue` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pri` tinyint(3) unsigned NOT NULL,
  `name` char(150) NOT NULL,
  `desc` text NOT NULL,
  `status` enum('wait','doing','done') NOT NULL DEFAULT 'wait',
  `private` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`account`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
INSERT INTO `zt_todo`(`id`,`account`,`date`,`begin`,`end`,`type`,`idvalue`,`pri`,`name`,`desc`,`status`,`private`) VALUES ('2','caikaiye','2015-01-15','1550','1700','custom','0','3','修订硬件项目测试管理系统','修订硬件项目测试管理系统功能','done','0');
INSERT INTO `zt_todo`(`id`,`account`,`date`,`begin`,`end`,`type`,`idvalue`,`pri`,`name`,`desc`,`status`,`private`) VALUES ('3','caikaiye','2015-01-15','1710','1800','special','0','2','硬件项目测试系统【导出数据】','需求、用例、任务、测试结果等各类数据导出形式','doing','0');
INSERT INTO `zt_todo`(`id`,`account`,`date`,`begin`,`end`,`type`,`idvalue`,`pri`,`name`,`desc`,`status`,`private`) VALUES ('4','caowei','2015-01-12','0900','1140','special','0','1','自动化测试平台：软件验收&amp;环境完善','<p>初步验收自动化测试软件。</p>
<p><img alt=\"\" src=\"data/upload/1/201501/160937260773gic.png\" /></p>','done','0');
INSERT INTO `zt_todo`(`id`,`account`,`date`,`begin`,`end`,`type`,`idvalue`,`pri`,`name`,`desc`,`status`,`private`) VALUES ('5','caowei','2015-01-12','1400','1600','meeting','0','2','讨论执行效率改进点','<p>用以进行资源估计以及后续结算汇总</p>','done','0');
INSERT INTO `zt_todo`(`id`,`account`,`date`,`begin`,`end`,`type`,`idvalue`,`pri`,`name`,`desc`,`status`,`private`) VALUES ('6','caowei','2015-01-12','1600','1800','custom','0','3','MTFI-LS 烤机','mtfi-ls 周末测试结果确认和分析。','done','0');
INSERT INTO `zt_todo`(`id`,`account`,`date`,`begin`,`end`,`type`,`idvalue`,`pri`,`name`,`desc`,`status`,`private`) VALUES ('7','caowei','2015-01-13','0900','1800','special','0','1','验收自动化测试软件&amp;模型搭建','<p>进行多sta关联测试验证。</p>','done','0');
DROP TABLE IF EXISTS `zt_user`;
CREATE TABLE `zt_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `dept` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `role` char(10) NOT NULL DEFAULT '',
  `realname` char(30) NOT NULL DEFAULT '',
  `nickname` char(60) NOT NULL DEFAULT '',
  `commiter` varchar(100) NOT NULL,
  `avatar` char(30) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `gender` enum('f','m') NOT NULL DEFAULT 'f',
  `email` char(90) NOT NULL DEFAULT '',
  `skype` char(90) NOT NULL DEFAULT '',
  `qq` char(20) NOT NULL DEFAULT '',
  `yahoo` char(90) NOT NULL DEFAULT '',
  `gtalk` char(90) NOT NULL DEFAULT '',
  `wangwang` char(90) NOT NULL DEFAULT '',
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `address` char(120) NOT NULL DEFAULT '',
  `zipcode` char(10) NOT NULL DEFAULT '',
  `join` date NOT NULL DEFAULT '0000-00-00',
  `visits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `last` int(10) unsigned NOT NULL DEFAULT '0',
  `fails` tinyint(5) NOT NULL DEFAULT '0',
  `locked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`),
  KEY `dept` (`dept`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('1','0','admin','5e93940d7dd25962922b68a8adef46ba','','admin','','','','0000-00-00','','','','','','','','','','','','0000-00-00','48','192.168.215.116','1421370646','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('2','3','caikaiye','5e93940d7dd25962922b68a8adef46ba','qa','蔡锴晔','','','','0000-00-00','m','caikaiye@ruijie.com.cn','','','','','','','','','','2013-04-15','33','192.168.215.116','1421373423','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('3','3','liuxianbing','e10adc3949ba59abbe56e057f20f883e','qd','刘贤兵','','','','0000-00-00','m','lxb@ruijie.com.cn','','','','','','','','','','0000-00-00','7','192.168.215.58','1421372522','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('4','3','luzhiqiang','e10adc3949ba59abbe56e057f20f883e','qa','卢志强','','','','0000-00-00','m','luzhiqiang@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('5','3','caowei','e10adc3949ba59abbe56e057f20f883e','qa','曹伟','','','','0000-00-00','m','caowei@ruijie.com.cn','','','','','','','','','','0000-00-00','8','192.168.215.65','1421372690','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('6','3','raoluhua','e10adc3949ba59abbe56e057f20f883e','qa','饶路华','','','','0000-00-00','m','raoluhua@ruijie.com.cn','','','','','','','','','','0000-00-00','5','192.168.215.63','1421310314','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('7','3','wangali','e10adc3949ba59abbe56e057f20f883e','qa','王阿莉','','','','0000-00-00','f','wangali@ruijie.com.cn','','','','','','','','','','0000-00-00','6','192.168.215.102','1421370394','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('8','3','luxiaoyan','e10adc3949ba59abbe56e057f20f883e','qa','卢晓燕','','','','0000-00-00','f','luxiaoyan@ruijie.com.cn','','','','','','','','','','0000-00-00','4','192.168.215.72','1420797902','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('9','4','xuedongsheng','e10adc3949ba59abbe56e057f20f883e','qd','薛东升','','','','0000-00-00','m','xuedongsheng@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('10','4','yuzhihua','e10adc3949ba59abbe56e057f20f883e','qa','余志华','','','','0000-00-00','m','yuzhihua@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('11','4','chenwenbin','e10adc3949ba59abbe56e057f20f883e','qa','陈文彬','','','','0000-00-00','f','chenwenbin@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('12','4','yejunzhen','e10adc3949ba59abbe56e057f20f883e','qa','叶俊振','','','','0000-00-00','m','yejunzhen@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('13','4','yuyalong','e10adc3949ba59abbe56e057f20f883e','qa','余亚龙','','','','0000-00-00','m','yuyalong@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('14','4','liuxiang','e10adc3949ba59abbe56e057f20f883e','qa','刘翔','','','','0000-00-00','m','liuxiang@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('15','4','fanhui','e10adc3949ba59abbe56e057f20f883e','qa','范徽','','','','0000-00-00','m','fanhui@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('16','4','fanchuliang','e10adc3949ba59abbe56e057f20f883e','qa','范楚亮','','','','0000-00-00','m','fanchuliang@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('17','4','liweijie','e10adc3949ba59abbe56e057f20f883e','qa','李伟杰','','','','0000-00-00','m','liweijie@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('18','5','chenzhen','e10adc3949ba59abbe56e057f20f883e','qd','陈镇','','','','0000-00-00','m','chenzhen@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('19','5','jiaopan','e10adc3949ba59abbe56e057f20f883e','qa','焦攀','','','','0000-00-00','f','jiaopan@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('20','5','zhenwenqiang','e10adc3949ba59abbe56e057f20f883e','qa','郑文强','','','','0000-00-00','m','zhenwenqiang@ruijie.com.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`deleted`) VALUES ('21','2','liuhao','e10adc3949ba59abbe56e057f20f883e','qd','刘浩','','','','0000-00-00','m','liuhao@163.com','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','0');
DROP TABLE IF EXISTS `zt_usercontact`;
CREATE TABLE `zt_usercontact` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `listName` varchar(60) NOT NULL,
  `userList` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_usergroup`;
CREATE TABLE `zt_usergroup` (
  `account` char(30) NOT NULL DEFAULT '',
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `account` (`account`,`group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('admin','1');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('caikaiye','1');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('caikaiye','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('caikaiye','12');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('caowei','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chenwenbin','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chenzhen','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chenzhen','8');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chenzhen','12');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('fanchuliang','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('fanhui','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('jiaopan','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liuhao','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liuhao','8');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liuhao','12');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liuxianbing','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liuxianbing','8');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liuxianbing','12');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liuxiang','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liweijie','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('luxiaoyan','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('luzhiqiang','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('luzhiqiang','12');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('raoluhua','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('raoluhua','12');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('wangali','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xuedongsheng','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xuedongsheng','8');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xuedongsheng','12');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yejunzhen','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yuyalong','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yuzhihua','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhenwenqiang','3');
DROP TABLE IF EXISTS `zt_userquery`;
CREATE TABLE `zt_userquery` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `title` varchar(90) NOT NULL,
  `form` text NOT NULL,
  `sql` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`),
  KEY `module` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_usertpl`;
CREATE TABLE `zt_usertpl` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `type` char(30) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
