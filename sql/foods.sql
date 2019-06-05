/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 60011
Source Host           : localhost:3306
Source Database       : foods

Target Server Type    : MYSQL
Target Server Version : 60011
File Encoding         : 65001

Date: 2019-06-05 16:40:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1001', '叶落无声', '尝了一次，真的比其他蛋糕还要好吃很多。', '2019-03-20 16:42:50');
INSERT INTO `comment` VALUES ('1006', '小裤衩', '尝了一次，真的比其他蛋糕还要好吃很多。', '2019-04-18 16:42:56');
INSERT INTO `comment` VALUES ('1002', '回顾騒', '尝了一次，真的比其他类型的还要好吃很多。', '2019-04-10 16:43:01');
INSERT INTO `comment` VALUES ('1003', '小裤衩', '由于平时在学校的学习太紧张了，所以决定买着尝尝。', '2019-04-11 16:43:04');
INSERT INTO `comment` VALUES ('1004', '企鹅RIO', '也知道平淡是真，但是毕竟还没有结婚，自己一个人平淡也没有什么意义，我想问一下是所有的工作者都这样还是我这样就是很颓废？能给点好的建议或者说下', '2019-04-03 16:43:09');
INSERT INTO `comment` VALUES ('1005', '哈哈哈', '想问一下是所有的工作者都这样还是我这样就是很颓废？能给点好的建议或者说下班了可以去干点啥', '2019-04-10 16:43:12');
INSERT INTO `comment` VALUES ('1001', '小瞢', '不错不错，味道不错', '2019-04-23 16:32:02');
INSERT INTO `comment` VALUES ('1002', '凤凰城时代', '回到小时候', null);
INSERT INTO `comment` VALUES ('1004', '小猛', '刚刚', null);
INSERT INTO `comment` VALUES ('1003', '曾先生', '味道好极了', null);
INSERT INTO `comment` VALUES ('1002', '小猛', '味道好极了', null);
INSERT INTO `comment` VALUES ('1002', '小猛', '味道好极了', null);
INSERT INTO `comment` VALUES ('1002', '小猛', '味道好极了。真的太好吃了', null);
INSERT INTO `comment` VALUES ('1002', '我是谁', '很好哟', null);
INSERT INTO `comment` VALUES ('1001', '哈哈哈哈', '毒贩夫妇付付', null);

-- ----------------------------
-- Table structure for food
-- ----------------------------
DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `foodid` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `foodname` varchar(255) NOT NULL,
  `intoduce` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `more` varchar(550) NOT NULL,
  `foodstore` varchar(255) DEFAULT NULL,
  `price` float(10,2) unsigned NOT NULL,
  `faddress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`foodid`)
) ENGINE=InnoDB AUTO_INCREMENT=1007 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food
-- ----------------------------
INSERT INTO `food` VALUES ('1001', '红烧肉', '红烧肉是一道著名的大众菜肴，属于热菜。其以五花肉为制作主料，最好选用肥瘦相间的三层肉（五花肉）来做，做法多达二三十种。', '红烧肉是一道著名的大众菜肴，属于热菜。其以五花肉为制作主料，最好选用肥瘦相间的三层肉（五花肉）来做，做法多达二三十种。\r\n\r\n红烧肉的烹饪技巧，锅具以砂锅为主，做出来的肉肥瘦相间，香甜松软，入口即化。红烧肉在我国各地流传甚广，具有一定的营养价值。', '地点：市桥街捷进二路1号骏和广场三楼(市桥地铁站B出口左转100米过丹山桥即到)  TEL:010-888444', '20.00', '一家人餐厅');
INSERT INTO `food` VALUES ('1002', '牛排', '是牛脊上最嫩的肉，几乎不含肥膘，由于肉质嫩，煎成3成熟、5成熟和7成熟皆宜。', '牛扒即牛排 英文统称STEAK，其种类非常多，常见的有:TENDERLOIN(嫩 牛柳，牛里脊)，又叫FILLET(菲力)RIB-EYE(肉眼牛扒 ) SIRLOIN(西冷牛扒) T-BONE(T骨牛扒) 牛扒是西餐的一种， 被现今都市所接受制作准备\r\n\r\n煎牛排(西餐)\r\n\r\n原料:牛排\r\n\r\n配料:葱头汁，黄酒，鸡蛋，辣酱油，蕃茄沙司，黄瓜片、土豆条或生菜和蕃茄片。', '地点：南村镇兴南大道33号桥兴商务大厦2楼(御水泉旁)  TEL:011-444666', '100.00', '一人西餐厅');
INSERT INTO `food` VALUES ('1003', '巧克力奶酪', '巧克力奶酪是由下层为巧克力，上层为奶酪制作而成。', '巧克力奶酪蛋糕是一道菜品，主要制作材料有奶油奶酪(Cream Cheese)200克，细砂糖100克，动物性淡奶油150克，低粉20克，可可粉20克，水滴巧克力豆20克。', '地点：珠江新城兴盛路116-117号(侨美食家旁，鸽俩好旁路口进) TEL: 012-145236', '20.00', '蒸点堡');
INSERT INTO `food` VALUES ('1004', '薯条三明治', '以两片面包夹几片肉和奶酪、各种调料制作而成，再搭配一些薯条。', '三明治是一种典型的西方食品，以两片面包夹几片肉和奶酪、各种调料制作而成，吃法简便，广泛流行于西方各国。', '地点：南村镇兴南大道33号桥兴商务大厦2楼(御水泉旁)  TEL:010-666888', '10.00', '糕点宝');
INSERT INTO `food` VALUES ('1005', '美味海鲜汤', '由几种生海鲜熬制而成，不仅保存了海鲜的鲜味，还能喝出健康。', '海鲜汤是一道汉族特色的美味海鲜汤类，制作比较简单，用料较多，制作原料主要有有腐竹、中虾、带子等，制作比较简单。', '地点：珠江新城兴盛路116-117号(侨美食家旁，鸽俩好旁路口进) TEL:010-888888', '50.00', '海鲜之家');
INSERT INTO `food` VALUES ('1006', '巧克力慕斯蛋糕', '巧克力中的糖分以及品尝美食的过程都可以刺激大脑分泌内啡肽，从而起到一定的缓解压力，消除抑郁情绪的作用。', '慕斯与布丁一样属于甜点的一种，其性质较布丁更柔软，入口即化。制作慕斯最重要的是胶冻原料如琼脂、鱼胶粉、果冻粉等，现今也有专门的慕斯粉了。另外制作时最大的特点是配方中的蛋白、蛋黄、鲜奶油都须单独与糖打发，再混入一起拌匀，所以质地较为松软，有点像打发了的鲜奶油。慕斯使用的胶冻原料是动物胶，所以需要置于低温处存放。', '地点：南村镇兴南大道33号桥兴商务大厦2楼(御水泉旁)   TEL:101-222111', '68.00', '糕点宝');

-- ----------------------------
-- Table structure for foodorder
-- ----------------------------
DROP TABLE IF EXISTS `foodorder`;
CREATE TABLE `foodorder` (
  `master` varchar(255) NOT NULL,
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `other` varchar(255) DEFAULT NULL,
  `price` float(10,2) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `fnumber` int(10) unsigned NOT NULL,
  `idd` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idd`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of foodorder
-- ----------------------------
INSERT INTO `foodorder` VALUES ('zm', '1001', '小猛', '13559635488', '广大华软', '辣的', '68.00', '小龙虾', '26491752', '0001');
INSERT INTO `foodorder` VALUES ('zm', '1002', 'xm', '13559635488', '广大华软', '辣的', '100.00', '大龙虾', '20463538', '0002');
INSERT INTO `foodorder` VALUES ('zm', '1004', '曾猛', '13559635488', '广大华软', '辣的', '10.00', '薯条三明治', '30322222', '0003');
INSERT INTO `foodorder` VALUES ('zm', '1005', 'xm', '13559635488', '广大华软', '辣的', '50.00', '美味海鲜汤', '53883914', '0004');
INSERT INTO `foodorder` VALUES ('zm', '1001', '曾猛', '13559635488', '广大华软', '辣的', '20.00', '红烧肉', '73135115', '0005');
INSERT INTO `foodorder` VALUES ('zm', '1001', '小猛', '13559635488', '广大华软', '辣的', '20.00', '红烧肉', '26608307', '0006');
INSERT INTO `foodorder` VALUES ('小裤衩', '1001', 'admin', '13559635488', '广大华软', '辣的', '20.00', '红烧肉', '47263943', '0009');

-- ----------------------------
-- Table structure for store
-- ----------------------------
DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `storeid` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `storename` varchar(255) NOT NULL,
  `storecomment` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`storeid`)
) ENGINE=InnoDB AUTO_INCREMENT=10016 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of store
-- ----------------------------
INSERT INTO `store` VALUES ('10011', '糕点堡', '网友评分：4.8    2044条      ￥50元/位', '地点：市桥街捷进二路1号骏和广场三楼(市桥地铁站B出口左转100米过丹山桥即到)');
INSERT INTO `store` VALUES ('10012', '蒸点堡', '网友评分：4.7    7015条      ￥100元/位', '地点：南村镇兴南大道33号桥兴商务大厦2楼(御水泉旁)');
INSERT INTO `store` VALUES ('10013', '濑尿虾之家', '网友评分：4.7    1042条      ￥60元/位', '地点：天河南二路六运七街1号101城迹酒店一楼(广州银行背后)');
INSERT INTO `store` VALUES ('10014', '一家人餐厅', '网友评分：4.6    5042条      ￥400元/位', '地点：阅江西路222号希望之塔103层');
INSERT INTO `store` VALUES ('10015', '爱心餐厅', '网友评分：4.6    10042条      ￥200元/位', '地点：珠江新城兴盛路116-117号(侨美食家旁，鸽俩好旁路口进)');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'zm', '123456');
INSERT INTO `user` VALUES ('2', 'zmm', '123');
INSERT INTO `user` VALUES ('3', '小裤衩', '123');
