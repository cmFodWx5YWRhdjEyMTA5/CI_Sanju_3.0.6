/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ci_sanju

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-27 18:29:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `usrRole` enum('A','SA','B','AG','E','C') NOT NULL COMMENT 'A=admin,SA=sub admin,B=Branch,AG=Agent,E=employee,C=customer',
  `profileId` varchar(500) NOT NULL,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `emailaddress` varchar(80) NOT NULL,
  `dob` date DEFAULT NULL,
  `phoneno` varchar(20) NOT NULL,
  `mobno` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` int(10) NOT NULL,
  `city` int(10) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `emailvarificationKey` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `lastudpate_on` datetime NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`userid`,`gender`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('1', 'A', 'ADM007', '', 'Akash', 'Nair', 'admin', 'sanjay@1978', 'say2me84@gmail.com', null, '2780563', '8955534851', '', '0', '0', null, '', '2013-06-13 14:46:13', '2013-06-13 14:46:09', '1', '1', '1');
INSERT INTO `admin_user` VALUES ('2', 'C', 'USR000002', 'Female', 'asdfa', 'adsf', 'test', 'test', 'adsf@asdfa.com', '2013-06-03', '231231', '123123', 'asdfa', '24', '25', '3588.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1', '0');
INSERT INTO `admin_user` VALUES ('3', 'C', 'USR000003', 'Male', 'mahesh', 'mahesh', 'akash', 'nair', 'mahesh@gmail.com', '2013-06-19', '231231', '123123', 'RRRRRRRRRRRRRRR', '24', '17', '3588.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1', '1');

-- ----------------------------
-- Table structure for `districts`
-- ----------------------------
DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts` (
  `did` int(6) unsigned NOT NULL DEFAULT '0',
  `dname` varchar(255) DEFAULT '0',
  `stateid` int(11) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of districts
-- ----------------------------
INSERT INTO `districts` VALUES ('1', 'Jaipur', '1');
INSERT INTO `districts` VALUES ('2', 'Barmer', '1');
INSERT INTO `districts` VALUES ('3', 'Sikar', '1');
INSERT INTO `districts` VALUES ('4', 'Nagaur', '1');
INSERT INTO `districts` VALUES ('5', 'Dungarpur', '1');
INSERT INTO `districts` VALUES ('6', 'Jhunjhunu', '1');
INSERT INTO `districts` VALUES ('7', 'Ajmer', '1');
INSERT INTO `districts` VALUES ('8', 'Bharatpur', '1');
INSERT INTO `districts` VALUES ('9', 'Pali', '1');
INSERT INTO `districts` VALUES ('10', 'Alwar', '1');
INSERT INTO `districts` VALUES ('11', 'Udaipur', '1');
INSERT INTO `districts` VALUES ('12', 'Dholpur', '1');
INSERT INTO `districts` VALUES ('13', 'Gangapur', '1');
INSERT INTO `districts` VALUES ('14', 'Hanumangarh', '1');
INSERT INTO `districts` VALUES ('15', 'Churu', '1');
INSERT INTO `districts` VALUES ('16', 'Sirohi', '1');
INSERT INTO `districts` VALUES ('17', 'Jisalmer', '1');
INSERT INTO `districts` VALUES ('18', 'Dausa', '1');
INSERT INTO `districts` VALUES ('19', 'Banswara', '1');
INSERT INTO `districts` VALUES ('20', 'Bhilwara', '1');
INSERT INTO `districts` VALUES ('21', 'Sawai Madhopur', '1');
INSERT INTO `districts` VALUES ('22', 'Bikaner', '1');
INSERT INTO `districts` VALUES ('23', 'Kota', '1');
INSERT INTO `districts` VALUES ('24', 'Jodhpur', '1');
INSERT INTO `districts` VALUES ('25', 'Jalore', '1');
INSERT INTO `districts` VALUES ('26', 'Tonk', '1');
INSERT INTO `districts` VALUES ('27', 'Bundi', '1');
INSERT INTO `districts` VALUES ('28', 'Shri GangaNagar', '1');
INSERT INTO `districts` VALUES ('29', 'All Rajasthan', '1');
INSERT INTO `districts` VALUES ('30', 'Baran', '1');
INSERT INTO `districts` VALUES ('31', 'Chittorgarh', '1');
INSERT INTO `districts` VALUES ('32', 'Jhalawar', '1');
INSERT INTO `districts` VALUES ('33', 'Pratapgarh', '1');
INSERT INTO `districts` VALUES ('34', 'Rajsamand', '1');
INSERT INTO `districts` VALUES ('37', 'Kheda', '7');
INSERT INTO `districts` VALUES ('36', 'Karoli', '1');
INSERT INTO `districts` VALUES ('38', 'Surat', '7');
INSERT INTO `districts` VALUES ('39', 'Rajkot', '7');
INSERT INTO `districts` VALUES ('40', 'Valsad', '7');
INSERT INTO `districts` VALUES ('41', 'Bharuch', '7');
INSERT INTO `districts` VALUES ('42', 'Palanpur', '7');
INSERT INTO `districts` VALUES ('43', 'Mehsana', '7');
INSERT INTO `districts` VALUES ('44', 'Dahod', '7');
INSERT INTO `districts` VALUES ('45', 'Narmada', '7');
INSERT INTO `districts` VALUES ('46', 'Anand', '7');
INSERT INTO `districts` VALUES ('47', 'Bhavnagar', '7');
INSERT INTO `districts` VALUES ('48', 'Jamnagar', '7');
INSERT INTO `districts` VALUES ('49', 'Kutch', '7');
INSERT INTO `districts` VALUES ('50', 'Patan', '7');
INSERT INTO `districts` VALUES ('51', 'Sabarkanta', '7');
INSERT INTO `districts` VALUES ('52', 'Ahmedabad', '7');
INSERT INTO `districts` VALUES ('53', 'Junagadh', '7');
INSERT INTO `districts` VALUES ('54', 'Vapi', '7');
INSERT INTO `districts` VALUES ('55', 'Navsari', '7');
INSERT INTO `districts` VALUES ('56', 'Godhara', '7');
INSERT INTO `districts` VALUES ('57', 'Panchmahal', '7');
INSERT INTO `districts` VALUES ('58', 'Vadodara', '7');
INSERT INTO `districts` VALUES ('59', 'All Gujarat', '7');
INSERT INTO `districts` VALUES ('60', 'Tapi', '7');
INSERT INTO `districts` VALUES ('61', 'Banaskanta', '7');
INSERT INTO `districts` VALUES ('62', 'Gandhi Nagar', '7');
INSERT INTO `districts` VALUES ('63', 'Junnagarh', '7');
INSERT INTO `districts` VALUES ('64', 'Narbada', '7');
INSERT INTO `districts` VALUES ('65', 'Porbandhar', '7');
INSERT INTO `districts` VALUES ('66', 'Surendra Nagar', '7');
INSERT INTO `districts` VALUES ('67', 'Ahmednagar', '7');
INSERT INTO `districts` VALUES ('68', 'Amravati', '9');
INSERT INTO `districts` VALUES ('69', 'Beed', '9');
INSERT INTO `districts` VALUES ('70', 'Buldhana', '9');
INSERT INTO `districts` VALUES ('71', 'Dhule', '9');
INSERT INTO `districts` VALUES ('72', 'Gondia', '9');
INSERT INTO `districts` VALUES ('73', 'Jalgaon', '9');
INSERT INTO `districts` VALUES ('74', 'Kolhapur', '9');
INSERT INTO `districts` VALUES ('75', 'Mumbai Sub-urban', '9');
INSERT INTO `districts` VALUES ('76', 'Nanded', '9');
INSERT INTO `districts` VALUES ('77', 'Nashik', '9');
INSERT INTO `districts` VALUES ('78', 'Parbhani', '9');
INSERT INTO `districts` VALUES ('79', 'Raigad', '9');
INSERT INTO `districts` VALUES ('80', 'Sangali', '9');
INSERT INTO `districts` VALUES ('81', 'Sindhudurg', '9');
INSERT INTO `districts` VALUES ('82', 'Thane', '9');
INSERT INTO `districts` VALUES ('83', 'Washim', '9');
INSERT INTO `districts` VALUES ('84', 'Akola', '9');
INSERT INTO `districts` VALUES ('85', 'Aurangabad', '9');
INSERT INTO `districts` VALUES ('86', 'Bhandara', '9');
INSERT INTO `districts` VALUES ('87', 'Chandrapur', '9');
INSERT INTO `districts` VALUES ('88', 'Gadchiroli', '9');
INSERT INTO `districts` VALUES ('89', 'Hingoli', '9');
INSERT INTO `districts` VALUES ('90', 'Jalna', '9');
INSERT INTO `districts` VALUES ('91', 'Latur', '9');
INSERT INTO `districts` VALUES ('92', 'Nagpur', '9');
INSERT INTO `districts` VALUES ('93', 'Nandurbar', '9');
INSERT INTO `districts` VALUES ('94', 'Osmanabad', '9');
INSERT INTO `districts` VALUES ('95', 'Pune', '9');
INSERT INTO `districts` VALUES ('96', 'Ratnagiri', '9');
INSERT INTO `districts` VALUES ('97', 'Satara', '9');
INSERT INTO `districts` VALUES ('98', 'Solapur', '9');
INSERT INTO `districts` VALUES ('99', 'Agra', '2');
INSERT INTO `districts` VALUES ('100', 'Aligarh', '2');
INSERT INTO `districts` VALUES ('101', 'Allahabad', '2');
INSERT INTO `districts` VALUES ('102', 'Ambedkar Nagar', '2');
INSERT INTO `districts` VALUES ('103', 'Auraiya', '2');
INSERT INTO `districts` VALUES ('104', 'Azamgarh', '2');
INSERT INTO `districts` VALUES ('105', 'Bagpat', '2');
INSERT INTO `districts` VALUES ('106', 'Bahraich', '2');
INSERT INTO `districts` VALUES ('107', 'Ballia', '2');
INSERT INTO `districts` VALUES ('108', 'Balrampur', '2');
INSERT INTO `districts` VALUES ('109', 'Banda', '2');
INSERT INTO `districts` VALUES ('110', 'Barabanki', '2');
INSERT INTO `districts` VALUES ('111', 'Bareilly', '2');
INSERT INTO `districts` VALUES ('112', 'Basti', '2');
INSERT INTO `districts` VALUES ('113', 'Bijnor', '2');
INSERT INTO `districts` VALUES ('114', 'Budaun', '2');
INSERT INTO `districts` VALUES ('115', 'Bulandshahr', '2');
INSERT INTO `districts` VALUES ('116', 'Chandauli', '2');
INSERT INTO `districts` VALUES ('117', 'Chitrakoot', '2');
INSERT INTO `districts` VALUES ('118', 'Deoria', '2');
INSERT INTO `districts` VALUES ('119', 'Etah', '2');
INSERT INTO `districts` VALUES ('120', 'Etawah', '2');
INSERT INTO `districts` VALUES ('121', 'Faizabad', '2');
INSERT INTO `districts` VALUES ('122', 'Farrukhabad', '2');
INSERT INTO `districts` VALUES ('123', 'Fatehpur', '2');
INSERT INTO `districts` VALUES ('124', 'Firozabad', '2');
INSERT INTO `districts` VALUES ('125', 'Gautam Buddha Nagar', '2');
INSERT INTO `districts` VALUES ('126', 'Ghaziabad', '2');
INSERT INTO `districts` VALUES ('127', 'Ghazipur', '2');
INSERT INTO `districts` VALUES ('128', 'Gonda', '2');
INSERT INTO `districts` VALUES ('129', 'Gorakhpur', '2');
INSERT INTO `districts` VALUES ('130', 'Hamirpur', '2');
INSERT INTO `districts` VALUES ('131', 'Hardoi', '2');
INSERT INTO `districts` VALUES ('132', 'Hathras', '2');
INSERT INTO `districts` VALUES ('133', 'Jalaun', '2');
INSERT INTO `districts` VALUES ('134', 'Jaunpur', '2');
INSERT INTO `districts` VALUES ('135', 'Jhansi', '2');
INSERT INTO `districts` VALUES ('136', 'Jyotiba Phule Nagar', '2');
INSERT INTO `districts` VALUES ('137', 'Kannauj', '2');
INSERT INTO `districts` VALUES ('138', 'Kanpur Dehat', '2');
INSERT INTO `districts` VALUES ('139', 'Kanpur Nagar', '2');
INSERT INTO `districts` VALUES ('140', 'Kaushambi', '2');
INSERT INTO `districts` VALUES ('141', 'Kheri', '2');
INSERT INTO `districts` VALUES ('142', 'Kushinagar', '2');
INSERT INTO `districts` VALUES ('143', 'Lalitpur', '2');
INSERT INTO `districts` VALUES ('144', 'Lucknow', '2');
INSERT INTO `districts` VALUES ('145', 'Maharajganj', '2');
INSERT INTO `districts` VALUES ('146', 'Mahoba', '2');
INSERT INTO `districts` VALUES ('147', 'Mainpuri', '2');
INSERT INTO `districts` VALUES ('148', 'Mathura', '2');
INSERT INTO `districts` VALUES ('149', 'Mau', '2');
INSERT INTO `districts` VALUES ('150', 'Meerut', '2');
INSERT INTO `districts` VALUES ('151', 'Mirzapur', '2');
INSERT INTO `districts` VALUES ('152', 'Moradabad', '2');
INSERT INTO `districts` VALUES ('153', 'Muzaffarnagar', '2');
INSERT INTO `districts` VALUES ('154', 'Pilibhit', '2');
INSERT INTO `districts` VALUES ('155', 'Pratapgarh', '2');
INSERT INTO `districts` VALUES ('156', 'Rae Bareli', '2');
INSERT INTO `districts` VALUES ('157', 'Rampur', '2');
INSERT INTO `districts` VALUES ('158', 'Saharanpur', '2');
INSERT INTO `districts` VALUES ('159', 'Sant Kabir Nagar', '2');
INSERT INTO `districts` VALUES ('160', 'Sant Ravidas Nagar', '2');
INSERT INTO `districts` VALUES ('161', 'Shahjahanpur', '2');
INSERT INTO `districts` VALUES ('162', 'Shravasti', '2');
INSERT INTO `districts` VALUES ('163', 'Siddharthnagar', '2');
INSERT INTO `districts` VALUES ('164', 'Sonbhadra', '2');
INSERT INTO `districts` VALUES ('165', 'Sultanpur', '2');
INSERT INTO `districts` VALUES ('166', 'Unnao', '2');
INSERT INTO `districts` VALUES ('167', 'Varanasi', '2');
INSERT INTO `districts` VALUES ('168', 'Ambala', '6');
INSERT INTO `districts` VALUES ('169', 'Kurukshetra', '6');
INSERT INTO `districts` VALUES ('170', 'Sirmour ', '3');
INSERT INTO `districts` VALUES ('171', 'Hamirpur', '3');
INSERT INTO `districts` VALUES ('172', 'Kullu', '3');
INSERT INTO `districts` VALUES ('173', 'Solan', '3');
INSERT INTO `districts` VALUES ('174', 'Mandi', '3');
INSERT INTO `districts` VALUES ('175', 'Chamba', '3');
INSERT INTO `districts` VALUES ('176', 'Bilaspur', '3');
INSERT INTO `districts` VALUES ('177', 'Kangra', '3');
INSERT INTO `districts` VALUES ('178', 'Kinnaur', '3');
INSERT INTO `districts` VALUES ('179', 'Lahaul-Spiti', '3');
INSERT INTO `districts` VALUES ('180', 'Shimla', '3');
INSERT INTO `districts` VALUES ('181', 'Una', '3');
INSERT INTO `districts` VALUES ('182', 'Alirajpur', '4');
INSERT INTO `districts` VALUES ('183', 'Anuppur', '4');
INSERT INTO `districts` VALUES ('184', 'Ashoknagar', '4');
INSERT INTO `districts` VALUES ('185', 'Balaghat', '4');
INSERT INTO `districts` VALUES ('186', 'Barwani', '4');
INSERT INTO `districts` VALUES ('187', 'Betul', '4');
INSERT INTO `districts` VALUES ('188', 'Bhind', '4');
INSERT INTO `districts` VALUES ('189', 'Bhopal', '4');
INSERT INTO `districts` VALUES ('190', 'Burhanpur', '4');
INSERT INTO `districts` VALUES ('191', 'Chhatarpur', '4');
INSERT INTO `districts` VALUES ('192', 'Chhindwara', '4');
INSERT INTO `districts` VALUES ('193', 'Damoh', '4');
INSERT INTO `districts` VALUES ('194', 'Datia', '4');
INSERT INTO `districts` VALUES ('195', 'Dewas', '4');
INSERT INTO `districts` VALUES ('196', 'Dhar', '4');
INSERT INTO `districts` VALUES ('197', 'Dindori', '4');
INSERT INTO `districts` VALUES ('198', 'Guna', '4');
INSERT INTO `districts` VALUES ('199', 'Gwalior', '4');
INSERT INTO `districts` VALUES ('200', 'Harda', '4');
INSERT INTO `districts` VALUES ('201', 'Hoshangabad', '4');
INSERT INTO `districts` VALUES ('202', 'Indore', '4');
INSERT INTO `districts` VALUES ('203', 'Jabalpur', '4');
INSERT INTO `districts` VALUES ('204', 'Jhabua', '4');
INSERT INTO `districts` VALUES ('205', 'Katni', '4');
INSERT INTO `districts` VALUES ('206', 'Khandwa', '4');
INSERT INTO `districts` VALUES ('207', 'Khargone', '4');
INSERT INTO `districts` VALUES ('208', 'Mandla', '4');
INSERT INTO `districts` VALUES ('209', 'Mandsaur', '4');
INSERT INTO `districts` VALUES ('210', 'Morena', '4');
INSERT INTO `districts` VALUES ('211', 'Narsinghpur', '4');
INSERT INTO `districts` VALUES ('212', 'Neemuch', '4');
INSERT INTO `districts` VALUES ('213', 'Panna', '4');
INSERT INTO `districts` VALUES ('214', 'Raisen', '4');
INSERT INTO `districts` VALUES ('215', 'Rajgarh', '4');
INSERT INTO `districts` VALUES ('216', 'Ratlam', '4');
INSERT INTO `districts` VALUES ('217', 'Rewa', '4');
INSERT INTO `districts` VALUES ('218', 'Sagar', '4');
INSERT INTO `districts` VALUES ('219', 'Satna', '4');
INSERT INTO `districts` VALUES ('220', 'Sehore', '4');
INSERT INTO `districts` VALUES ('221', 'Seoni', '4');
INSERT INTO `districts` VALUES ('222', 'Singrauli', '4');
INSERT INTO `districts` VALUES ('223', 'Shahdol', '4');
INSERT INTO `districts` VALUES ('224', 'Shajapur', '4');
INSERT INTO `districts` VALUES ('225', 'Sheopur', '4');
INSERT INTO `districts` VALUES ('226', 'Shivpuri', '4');
INSERT INTO `districts` VALUES ('227', 'Sidhi', '4');
INSERT INTO `districts` VALUES ('228', 'Tikamgarh', '4');
INSERT INTO `districts` VALUES ('229', 'Ujjain', '4');
INSERT INTO `districts` VALUES ('230', 'Umaria', '4');
INSERT INTO `districts` VALUES ('231', 'Vidisha', '4');
INSERT INTO `districts` VALUES ('232', 'Amritsar', '5');
INSERT INTO `districts` VALUES ('233', 'Jalandhar', '5');
INSERT INTO `districts` VALUES ('234', 'Patiala', '5');
INSERT INTO `districts` VALUES ('235', 'Ludhiana', '5');
INSERT INTO `districts` VALUES ('236', 'Bathinda', '5');
INSERT INTO `districts` VALUES ('237', 'Firozpur', '5');
INSERT INTO `districts` VALUES ('238', 'Faridkot', '5');
INSERT INTO `districts` VALUES ('239', 'Kapurthala', '5');
INSERT INTO `districts` VALUES ('240', 'Mansa', '5');
INSERT INTO `districts` VALUES ('241', 'Shahid Bhagat Singh Nagar', '5');
INSERT INTO `districts` VALUES ('242', 'Moga', '5');
INSERT INTO `districts` VALUES ('243', 'Barnala', '5');
INSERT INTO `districts` VALUES ('244', 'Muktsar', '5');
INSERT INTO `districts` VALUES ('245', 'Tarn Taran', '5');
INSERT INTO `districts` VALUES ('246', 'Rupnagar', '5');
INSERT INTO `districts` VALUES ('247', 'Sahibzada Ajit Singh Nagar', '5');
INSERT INTO `districts` VALUES ('248', 'Fatehgarh Sahib', '5');
INSERT INTO `districts` VALUES ('249', 'Gurdaspur', '5');
INSERT INTO `districts` VALUES ('250', 'Hoshiarpur', '5');
INSERT INTO `districts` VALUES ('251', 'Sangrur', '5');
INSERT INTO `districts` VALUES ('252', 'North Delhi', '8');
INSERT INTO `districts` VALUES ('253', 'Central Delhi', '8');
INSERT INTO `districts` VALUES ('254', 'East Delhi', '8');
INSERT INTO `districts` VALUES ('255', 'West Delhi', '8');
INSERT INTO `districts` VALUES ('256', 'South Delhi', '8');
INSERT INTO `districts` VALUES ('257', 'New Delhi', '8');
INSERT INTO `districts` VALUES ('258', 'North East', '8');
INSERT INTO `districts` VALUES ('259', 'South West', '8');
INSERT INTO `districts` VALUES ('260', 'North West', '8');
INSERT INTO `districts` VALUES ('261', 'Adilabad', '10');
INSERT INTO `districts` VALUES ('262', 'Ananthapur', '10');
INSERT INTO `districts` VALUES ('263', 'Chittoor', '10');
INSERT INTO `districts` VALUES ('264', 'Cuddapah', '10');
INSERT INTO `districts` VALUES ('265', 'East Godavari', '10');
INSERT INTO `districts` VALUES ('266', 'Guntur', '10');
INSERT INTO `districts` VALUES ('267', 'Hyderabad', '10');
INSERT INTO `districts` VALUES ('268', 'Karimnagar', '10');
INSERT INTO `districts` VALUES ('269', 'Khammam', '10');
INSERT INTO `districts` VALUES ('270', 'Krishna', '10');
INSERT INTO `districts` VALUES ('271', 'Kurnool', '10');
INSERT INTO `districts` VALUES ('272', 'Mahaboobnagar', '10');
INSERT INTO `districts` VALUES ('273', 'Medak', '10');
INSERT INTO `districts` VALUES ('274', 'Nalgonda', '10');
INSERT INTO `districts` VALUES ('275', 'Nellore', '10');
INSERT INTO `districts` VALUES ('276', 'Prakasam', '10');
INSERT INTO `districts` VALUES ('277', 'Nizamabad', '10');
INSERT INTO `districts` VALUES ('278', 'Rangareddy', '10');
INSERT INTO `districts` VALUES ('279', 'Srikakulam', '10');
INSERT INTO `districts` VALUES ('280', 'Vishakapatnam', '10');
INSERT INTO `districts` VALUES ('281', 'Vizingaram', '10');
INSERT INTO `districts` VALUES ('282', 'Warangal', '10');
INSERT INTO `districts` VALUES ('283', 'West Godavari', '10');
INSERT INTO `districts` VALUES ('284', 'Bastar', '11');
INSERT INTO `districts` VALUES ('285', 'Dhamtari', '11');
INSERT INTO `districts` VALUES ('286', 'Jashpur', '11');
INSERT INTO `districts` VALUES ('287', 'Korba', '11');
INSERT INTO `districts` VALUES ('288', 'Raigarh', '11');
INSERT INTO `districts` VALUES ('289', 'Surguja', '11');
INSERT INTO `districts` VALUES ('290', 'Bilaspur', '11');
INSERT INTO `districts` VALUES ('291', 'Durg', '11');
INSERT INTO `districts` VALUES ('292', 'Kanker', '11');
INSERT INTO `districts` VALUES ('293', 'Koriya', '11');
INSERT INTO `districts` VALUES ('294', 'Raipur', '11');
INSERT INTO `districts` VALUES ('295', 'Dantewada', '11');
INSERT INTO `districts` VALUES ('296', 'Janjgir-Champa', '11');
INSERT INTO `districts` VALUES ('297', 'Kabirdham', '11');
INSERT INTO `districts` VALUES ('298', 'Mahasamund', '11');
INSERT INTO `districts` VALUES ('299', 'Rajnandgaon', '11');
INSERT INTO `districts` VALUES ('300', 'Bhiwani', '6');
INSERT INTO `districts` VALUES ('301', 'Faridabad', '6');
INSERT INTO `districts` VALUES ('302', 'Fatehabad', '6');
INSERT INTO `districts` VALUES ('303', 'Gurgaon', '6');
INSERT INTO `districts` VALUES ('304', 'Hissar', '6');
INSERT INTO `districts` VALUES ('305', 'Jhajjar', '6');
INSERT INTO `districts` VALUES ('306', 'Jind', '6');
INSERT INTO `districts` VALUES ('307', 'Kaithal', '6');
INSERT INTO `districts` VALUES ('308', 'Karnal', '6');
INSERT INTO `districts` VALUES ('309', 'Mahendragarh', '6');
INSERT INTO `districts` VALUES ('310', 'Mewat', '6');
INSERT INTO `districts` VALUES ('311', 'Panchkula', '6');
INSERT INTO `districts` VALUES ('312', 'Panipat', '6');
INSERT INTO `districts` VALUES ('313', 'Rewari', '6');
INSERT INTO `districts` VALUES ('314', 'Rohtak', '6');
INSERT INTO `districts` VALUES ('315', 'Sirsa', '6');
INSERT INTO `districts` VALUES ('316', 'Sonipat', '6');
INSERT INTO `districts` VALUES ('317', 'Yamunanagar', '6');
INSERT INTO `districts` VALUES ('318', 'Palwal', '6');
INSERT INTO `districts` VALUES ('319', 'AHMEDABAD RURAL', '7');
INSERT INTO `districts` VALUES ('320', 'SURAT RURAL', '7');
INSERT INTO `districts` VALUES ('321', 'Morbi', '7');
INSERT INTO `districts` VALUES ('322', 'Chota Udaipur', '7');

-- ----------------------------
-- Table structure for `jok_user`
-- ----------------------------
DROP TABLE IF EXISTS `jok_user`;
CREATE TABLE `jok_user` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `usrRole` enum('A','SA','B','AG','E','C') NOT NULL COMMENT 'A=admin,SA=sub admin,B=Branch,AG=Agent,E=employee,C=customer',
  `profileId` varchar(500) NOT NULL,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `emailaddress` varchar(80) NOT NULL,
  `dob` date DEFAULT NULL,
  `phoneno` varchar(20) NOT NULL,
  `mobno` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` int(10) NOT NULL,
  `city` int(10) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `emailvarificationKey` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `lastudpate_on` datetime NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`userid`,`gender`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jok_user
-- ----------------------------
INSERT INTO `jok_user` VALUES ('1', 'A', 'ADM007', '', 'Akash', 'Nair', 'admin', 'sanjay@1978', 'say2me84@gmail.com', null, '2780563', '8955534851', '', '0', '0', null, '', '2013-06-13 14:46:13', '2013-06-13 14:46:09', '1', '1', '1');
INSERT INTO `jok_user` VALUES ('2', 'A', 'USR000002', 'Female', 'asdfa', 'adsf', 'akash', 'terminal#123', 'adsf@asdfa.com', '2013-06-03', '231231', '123123', 'asdfa', '24', '25', '3588.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1', '0');
INSERT INTO `jok_user` VALUES ('3', 'C', 'USR000003', 'Male', 'mahesh', 'mahesh', 'akash', 'nair', 'mahesh@gmail.com', '2013-06-19', '231231', '123123', 'RRRRRRRRRRRRRRR', '24', '17', '3588.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1', '1');

-- ----------------------------
-- Table structure for `nair_aarati`
-- ----------------------------
DROP TABLE IF EXISTS `nair_aarati`;
CREATE TABLE `nair_aarati` (
  `Aarti_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Aarti_Title` varchar(222) DEFAULT NULL,
  `Aarti_Dtl` text,
  `Aarti_Pic` varchar(150) DEFAULT NULL,
  `Aarti_Thumb` varchar(150) DEFAULT NULL,
  `Aarti_Audio` varchar(150) DEFAULT NULL,
  `Aarti_Audio_Link` varchar(200) DEFAULT NULL,
  `Post_Date` date DEFAULT NULL,
  `Post_By` varchar(100) DEFAULT NULL,
  `Active` enum('No','Yes') DEFAULT NULL,
  PRIMARY KEY (`Aarti_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nair_aarati
-- ----------------------------
INSERT INTO `nair_aarati` VALUES ('1', 'श्रीराम भगवान की आरती', '<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">\r\n<div style=\"text-align: center;\"><strong>भगवान श्रीराम की आरती</strong></div>\r\n\r\n<div>\r\n<div style=\"text-align: center;\">श्री रामचंद्र कृपालु भजु मन हरण भव भय दारुणं<br />\r\nनव कंजलोचन, कंज मुख, करकंज, पद कंजारुणं।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">कंदर्प अगणित अमित छबि नवनीत नीरद सुंदरं।<br />\r\nपटपीत मानहु तडित रूचि शुचि नौमि जनक सुतावरं।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">भजु दीनबंधु दिनेश दानव दैत्यवंश निकंदनं।<br />\r\nरघुनन्द आनंदकंद कौशलचंद दशरथ नंदनं ।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">सिरा मुकुट कुंडल तिलक चारू उदारु अंग विभूषणं।<br />\r\nआजानुभुज शर चापधर संग्रामजित खरदूषणं ।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">इति वदति तुलसीदास शंकर शेष मुनि मन रंजनं ।<br />\r\nमम ह्रदय कंच निवास कुरु कामादि खलदल गंजनं।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">मनु जाहिं राचेउ मिलहि सो बरु सहज सुन्दर सांवरो।<br />\r\nकरुना निधान सुजान सिलु सनेहु जानत रावरो।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">एही भांति गौरि असीस सुनि सिया सहित हिय हरषीं अली।<br />\r\nतुलसी भवानिहि पूजी पुनिपुनि मुदित मन मंदिर चली।।</div>\r\n</div>\r\n</div>\r\n', 'ram_1423812300.jpg', 'ram_1423812300.jpg', 'Aarti_Audio_71021_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Jai%20Shree%20Hanumaan-(Anuradha%20Paudwal)/Shreeram%20Stuti-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-04', 'Admin', 'Yes');
INSERT INTO `nair_aarati` VALUES ('2', 'श्री सरस्वती देवी की आरती', '<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।</strong></div>\r\n\r\n<div><strong>आरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"text-align: center;\"><u><strong>श्री सरस्वती देवी की आरती</strong></u></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">ऊँ जय सरस्वती माता, मैया जय सरस्वती माता।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"text-align: center;\">सद्गुण वैभव शालिनी, त्रिभुवन विख्याता।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nचन्द्रवदीन पद्मासिनि, द्युति मंगलकारी।<br />\r\nसोहे शुभ हंस सवारी, अतुल तेजधारी।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nबाएँ कर में वीणा, दाएं कर माला।<br />\r\nशीश मुकुट मणि सोहे, गले मोतियन माला।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nदेवी शरण जो आए, उनका उद्धार किया।<br />\r\nपैठि मंथरा दासी, रावण संहार किया।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nविद्या ज्ञान प्रदायिनी, ज्ञान प्रकाश भरो।<br />\r\nमोह, अज्ञान और तिमिर का, जग से नाश करो।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nधूप दीप फल मेवा, माँ स्वीकार करो।<br />\r\nज्ञानचक्षु दे माता, जग निस्दर करो।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nमाँ सरस्वती की आरती, जो कोई जन गावे ।<br />\r\nहितकारी सुखकारी, ज्ञान भक्ति पावे।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n', 'sarswti_jpg-01_14238.jpg', 'sarswti_jpg-01_14238.jpg', 'Aarti_Audio_81412_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Aarti%20(Vol%203)-(Anuradha%20Paudwal)/Om%20Jai%20Saraswati%20Mata-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-04', 'Admin', 'Yes');
INSERT INTO `nair_aarati` VALUES ('3', 'श्री हनुमानजी की आरती', '<p>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</p>\r\n\r\n<p style=\"text-align:center\"><u><strong>श्री हनुमानजी की आरती</strong></u></p>\r\n\r\n<p style=\"text-align:center\">आरति कीजै हनुमान लला की। दुष्ट दलन रघुनाथ कला की।।<br />\r\nजाके बल से गिरिवर कांपै । रोग-दोष जाके निकट न झांपै ।।<br />\r\nअंजनी पुत्र महा बलदाई । संतन के प्रेम सदा सहाई ।।<br />\r\nदे बीरा रघुनाथ पठाये । लंका जारि सिया सुधि लाये ।।<br />\r\nलंका सो कोट समुद्र सी खाई । जात पवनसुत बार न लाई।।<br />\r\nलंका जारि असुर संहारे। सिया रामजी के काज संवारे ।।<br />\r\nलक्ष्मण मूर्छित पड़े सकारे । आनि सजीवन प्रान उबारे ।।<br />\r\nपैठि पताल तोरि जम-कारे । अहिरावन की भुजा उखारे ।।<br />\r\nबाईं भुजा असुर दल मारे । दाहिने भुजा संत जन तारे ।।<br />\r\nसुर नर मुनि आरती उतारे । जै जै जै हनुमान उचारे ।।<br />\r\nकंचन थार कपूर लौ छाई । आरती करत अंजना माई ।।<br />\r\nजो हनुमान जी की आरती गावै । बसि बैकुंठ परम पद पावै ।।<br />\r\nलंक विध्वंस किये रघुराई । तुलसीदास स्वामी कीर्ति गाई ।।<br />\r\nआरति कीजै हनुमान लला की। दुष्ट दलन रघुनाथ कला की ।।</p>\r\n', 'lord-hanuman_big.jpg', 'lord-hanuman_big.jpg', 'Aarti_Audio_68213_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Shree%20Hanuman%20Chalisa-(Hariharan)/Shree%20Hanuman%20Ji%20Ki%20Aarti-Hariharan[48]::Raag.Me::.mp3', '2016-08-07', 'Admin', 'Yes');
INSERT INTO `nair_aarati` VALUES ('4', 'श्री सत्यनारायण भगवान की आरती', '<div style=\"text-align: center;\"><strong>श्री सत्यनारायण भगवान की आरती</strong></div>\r\n\r\n<div style=\"text-align: center;\">&nbsp;</div>\r\n\r\n<div>\r\n<div style=\"text-align: center;\">जय श्री लक्ष्मी रमणा जय श्री लक्ष्मी रमणा।<br />\r\nसत्यनारायण स्वामी जन पातक हरणा।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय...</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">रत्न जडित सिंहासन अद्भूत छवि राजै ।<br />\r\nनारद करत निरंतर घण्टा ध्वनि बाजै ।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय...</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">प्रकट भए कलि कारण द्विज को दरश दियो ।<br />\r\nबूढ़ा ब्राह्मण बन के कंचन महल कियो।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय...</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">दुर्बल भील कराल जिन पर कृपा करी।<br />\r\nचंद्रचूड़ इक राजा तिनकी विपत हरी।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">वैश्य मनोरथ पायो श्रद्धा तज दीनी।<br />\r\nसो फल भोग्यो प्रभु जी फिर स्तुति कीन्ही।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">भाव भक्ति के कारण छिन-छिन रूप धरयो।<br />\r\nश्रद्धा धारण कीनी जन को काज सरयो।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">ग्वाल बाल संग राजा बन में भक्ति करी।<br />\r\nमनवांछित फल दीन्हों दीनदयाल हरी । ।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">चढ़त प्रसाद सवाया कदली फल मेवा।<br />\r\nधूप दीप तुलसी से राजी सत्य देवा।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">श्री सत्यनारायण जी की आरती जो कोई गावे।<br />\r\nकहत शिवानंद स्वामी मनवांछित फल पावै।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n</div>\r\n', 'satynarayan_14238151.jpg', 'satynarayan_14238151.jpg', 'Aarti_Audio_13740_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Om%20Jai%20Jagdish%20Hare-aarti%20Sangrah-(Anuradha%20Paudwal)/Jai%20Laxmi%20Ramna-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarati` VALUES ('5', 'श्री कुंजबिहारी की आरती', '<div>\r\n<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong>\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\"><strong>श्री कुंजबिहारी की आरती</strong></div>\r\n\r\n<div style=\"text-align: center;\">आरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">गले में बैजन्ती माला, बजावै मुरली मधुर बाला।</div>\r\n\r\n<div style=\"text-align: center;\">श्रवन में कुंडल झलकाला, नंद के आनंद नंदलाला।।<br />\r\nनैनन बीच, बसहि उरबीच, सुरतिया रूप उजारी की ।।<br />\r\nआरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">गगन सम अंग कांति काली, राधिका चमक रही आली।<br />\r\nलतन में ठाढ़ै बनमाली, भ्रमर सी अलक।</div>\r\n\r\n<div style=\"text-align: center;\">कस्तूरी तिलक, चंद्र सी झलक, ललित छबि श्यामा प्यारी की।।</div>\r\n\r\n<div style=\"text-align: center;\">आरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">कनकमय मोर मुकट बिलसे, देवता दरसन को तरसे।<br />\r\nगगनसों सुमन रासि बरसै, बजे मुरचंग मधुर मिरदंग।।</div>\r\n\r\n<div style=\"text-align: center;\">ग्वालनी संग, अतुल रति गोप कुमारी की।।</div>\r\n\r\n<div style=\"text-align: center;\">आरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nजहां ते प्रकट भई गंगा, कलुष कलि हारिणि श्री गंगै<br />\r\nस्मरन ते होत मोह भंगा, बसी शिव सीस जटाके बीच।</div>\r\n\r\n<div style=\"text-align: center;\">हरै अघ कीच, चरन छबि श्री बनवारी की।।</div>\r\n\r\n<div style=\"text-align: center;\">आरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">चमकती उज्जवल तट रेनू, बज रही वृन्दावन बेनू।<br />\r\nचहुं दिसि गोपी ग्वाल धेनू, हसत मृदु मंद चांदनी चंद ।</div>\r\n\r\n<div style=\"text-align: center;\">कटत भव फंद, टेर सुनु दीन भिखारी की।।</div>\r\n\r\n<div style=\"text-align: center;\">आरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n</div>\r\n</div>\r\n', 'krishna_1423809844.jpg', 'krishna_1423809844.jpg', 'Aarti_Audio_10444_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Aarti%20(Vol%203)-(Anuradha%20Paudwal)/Aarti%20Kunj%20Bihari%20Ki-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarati` VALUES ('6', 'श्री तुलसी माता की आरती', '<div>\r\n<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\"><u><strong>श्री तुलसी माता की आरती</strong></u></div>\r\n\r\n<div>\r\n<div style=\"text-align: center;\">\r\n<p>जय जय तुलसी माता</p>\r\n\r\n<p>सब जग की सुख दाता, वर दाता</p>\r\n\r\n<p>जय जय तुलसी माता ।।</p>\r\n\r\n<p>सब योगों के ऊपर, सब रोगों के ऊपर</p>\r\n\r\n<p>रुज से रक्षा करके भव त्राता</p>\r\n\r\n<p>जय जय तुलसी माता।।</p>\r\n\r\n<p>बटु पुत्री हे श्यामा, सुर बल्ली हे ग्राम्या</p>\r\n\r\n<p>विष्णु प्रिये जो तुमको सेवे, सो नर तर जाता</p>\r\n\r\n<p>जय जय तुलसी माता ।।</p>\r\n\r\n<p>हरि के शीश विराजत, त्रिभुवन से हो वन्दित</p>\r\n\r\n<p>पतित जनो की तारिणी विख्याता</p>\r\n\r\n<p>जय जय तुलसी माता ।।</p>\r\n\r\n<p>लेकर जन्म विजन में, आई दिव्य भवन में</p>\r\n\r\n<p>मानवलोक तुम्ही से सुख संपति पाता</p>\r\n\r\n<p>जय जय तुलसी माता ।।</p>\r\n\r\n<p>हरि को तुम अति प्यारी, श्यामवरण तुम्हारी</p>\r\n\r\n<p>प्रेम अजब हैं उनका तुमसे कैसा नाता</p>\r\n\r\n<p>जय जय तुलसी माता ।।</p>\r\n</div>\r\n</div>\r\n</div>\r\n', 'tulsi_1423813755.jpg', 'tulsi_1423813755.jpg', 'Aarti_Audio_23711_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Aarti%20(Vol%204)-(Anuradha%20Paudwal)/Jai%20Jai%20Tulsi%20Mata-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarati` VALUES ('7', 'भगवान शिव की आरती', '<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\"><strong>भगवान शिव की आरती</strong></div>\r\n\r\n<div style=\"text-align: center;\">कर्पूरगौरं करुणावतारं संसारसारं भुजगेन्द्रहारं ।<br />\r\nसदा वसन्तं ह्रदयारविन्दे भवं भवानी सहितं नमामि।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय शिव ओंकारा स्वामी हर शिव ओंकारा।<br />\r\nब्रम्हा विष्णु सदाशिव अद्धांर्गी धारा।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nएकानन चतुरानन पंचांनन राजे।<br />\r\nहंसासंन, गरुड़ासन, वृषवाहन साजे।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">दो भुज चार चतुर्भज दस भुज अति सोहे।<br />\r\nतीनों रुप निरखता त्रिभुवन जन मोहे।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nअक्षमाला, बनमाला, रुंडमालाधारी।<br />\r\nचंदन मृदमग सोहे, भोले शशिधारी।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">श्वेताम्बर, पीताम्बर, बाघाम्बर अंगे।<br />\r\nसनकादिक, ब्रह्मादिक, भूतादिक संगे।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">कर मध्ये सुकमंडलु चक्र, त्रिशूल धरता।<br />\r\nजगकरता, जगभरता, जगसंहारकरता ।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">ब्रम्हा विष्णु सदाशिव जानत अविवेका।<br />\r\nप्रवणाक्षर मध्ये ये तीनों एका।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">काशी में विश्वनाथ विराजत नंदी ब्रह्मचारी<br />\r\nनित उठी भोग लगावत महिमा अति भारी।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">त्रिगुण शिवजी की आरती जो कोई नर गावे।<br />\r\nकहत शिवानंद स्वामी मनवांछित फल पावे।।<br />\r\nऊँ जय शिव ओंकारा.....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">जय शिव ओंकारा, स्वामी हर शिव ओंकारा।<br />\r\nब्रह्मा विष्णु सदाशिव, अद्धांर्गी धारा।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n', 'shiva_1423813398.jpg', 'shiva_1423813398.jpg', 'Aarti_Audio_70464_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Aarti%20(Vol%203)-(Anuradha%20Paudwal)/Jai%20Shiv%20Omkara-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarati` VALUES ('8', 'श्री लक्ष्मी माता की आरती', '<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।</strong></div>\r\n\r\n<div><strong>आरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div>\r\n<div style=\"text-align: center;\"><strong>श्री लक्ष्मी माता की आरती</strong><br />\r\nऊँ जय लक्ष्मी माता, मैया जय लक्ष्मी माता।<br />\r\nतुमको निशदिन सेवत, हर विष्णु विधाता।।<br />\r\nऊँ जय लक्ष्मी माता।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">ब्रह्माणी रूद्राणी कमला, तुम ही जगमाता।<br />\r\nसूर्य चन्द्रमा ध्यावत, नारद ऋषि गाता।।<br />\r\nऊँ जय लक्ष्मी माता।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">दुर्गा रूप निरंजनि, सुख सम्पति दाता।<br />\r\nजो कोई तुमको ध्यावत, ऋद्धि सिद्धि पाता।।<br />\r\nऊँ जय लक्ष्मी माता।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">तुम पाताल निवासिनि, तुम ही शुभ दाता।<br />\r\nकर्म प्रभाव प्रकाशक, भवनिधि से त्राता।।<br />\r\nऊँ जय लक्ष्मी माता।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">जिस घर में तुम रहती सब सद्गुण आता।<br />\r\nसब सुंदर हो जाता, मन नहीं घबराता।।<br />\r\nऊँ जय लक्ष्मी माता।</div>\r\n</div>\r\n', 'laksmi_1423810302.jpg', 'laksmi_1423810302.jpg', 'Aarti_Audio_40156_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Om%20Jai%20Jagdish%20Hare-aarti%20Sangrah-(Anuradha%20Paudwal)/Jai%20Laxmi%20Mata-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarati` VALUES ('9', 'भगवान श्रीगणेश की आरती ', '<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div>\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n</div>\r\n\r\n<p style=\"text-align:center\"><strong>भगवान श्रीगणेश की आरती</strong><br />\r\nजय गणेश जय गणेश जय गणेश देवा।</p>\r\n\r\n<div style=\"text-align: center;\">माता जाकी पार्वती पिता महादेवा।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">एक दंत दयावंत चार भुजा धारी।<br />\r\nमस्तक सिंदूर सोहे मुसे की सवारी।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">पान चढ़े फूल चढ़े और चढ़े मेवा।<br />\r\nलड्डूअन का भोग लागे संत करे सेवा।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">अंधन को आंख देत कोढिन को काया<br />\r\nबांझन को पुत्र देत निर्धन को माया।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">हार चढ़े, फूल चढ़े और चढ़े मेवा।<br />\r\nसूरश्याम शरण आए सफल कीजे सेवा।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश जय गणेश जय गणेश देवा।<br />\r\nमाता जाकी पार्वती पिता महादेवा।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">विघ्नहरण मंगलकरण, काटन सकल क्लेश।<br />\r\nसबसे पहले सुमरिए गौरी-पुत्र गणेश।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n', 'Shani_Sadesati.jpg', 'Shani_Sadesati.jpg', 'Aarti_Audio_45220_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Aarti%20(Vol%203)-(Anuradha%20Paudwal)/Jai%20Ganesh%20Deva-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarati` VALUES ('10', 'श्री गणेश की आरती- शेंदुर लाल चढ़ायो...', '<p style=\"text-align:center\">&nbsp;शेंदुर लाल चढ़ायो अच्छा गजमुखको।<br />\r\n&nbsp;<br />\r\nदोंदिल लाल बिराजे सुत गौरिहरको।&nbsp; हाथ लिए गुडलद्दु सांई सुरवरको।<br />\r\n&nbsp;<br />\r\nमहिमा कहे न जाय लागत हूं पादको ॥1॥<br />\r\n&nbsp;<br />\r\nजय जय श्री गणराज विद्या सुखदाता।<br />\r\n&nbsp;<br />\r\nधन्य तुम्हारा दर्शन मेरा मन रमता ॥धृ॥<br />\r\n&nbsp;<br />\r\nअष्टौ सिद्धि दासी संकटको बैरि।<br />\r\n&nbsp;<br />\r\nविघ्नविनाशन मंगल मूरत अधिकारी।<br />\r\n&nbsp;<br />\r\nकोटीसूरजप्रकाश ऐबी छबि तेरी।<br />\r\n&nbsp;<br />\r\nगंडस्थलमदमस्तक झूले शशिबिहारि ॥2॥<br />\r\n&nbsp;<br />\r\nजय जय श्री गणराज विद्या सुखदाता।<br />\r\n&nbsp;<br />\r\nधन्य तुम्हारा दर्शन मेरा मन रमता ॥<br />\r\n&nbsp;<br />\r\nभावभगत से कोई शरणागत आवे।<br />\r\n&nbsp;<br />\r\nसंतत संपत सबही भरपूर पावे।<br />\r\n&nbsp;<br />\r\nऐसे तुम महाराज मोको अति भावे।<br />\r\n&nbsp;<br />\r\nगोसावीनंदन निशिदिन गुन गावे ॥3॥<br />\r\n&nbsp;<br />\r\nजय जय श्री गणराज विद्या सुखदाता।<br />\r\n&nbsp;<br />\r\nधन्य तुम्हारा दर्शन मेरा मन रमता ॥</p>\r\n', null, null, null, 'http://cloud2.raag.me/Marathi/Maha%20Ganpati%20Aarti%20Marathi%20Songs-()/Shendur%20Lal%20Chhadao%20Aarti-[48]::Raag.Me::.mp3', '2016-09-06', 'Admin', 'No');
INSERT INTO `nair_aarati` VALUES ('11', 'AAAAAA', '<p>AAAAAAAAAAAAAA<br></p>', null, null, null, 'AAAAAA', null, null, 'Yes');
INSERT INTO `nair_aarati` VALUES ('12', 'SSSS', '<p><br></p>', null, null, null, 'SSSS', null, null, 'Yes');
INSERT INTO `nair_aarati` VALUES ('13', 'QQQQQ', '<p>QQQQQ<br></p>', null, null, null, 'QQQQ', null, null, 'Yes');

-- ----------------------------
-- Table structure for `nair_aarti`
-- ----------------------------
DROP TABLE IF EXISTS `nair_aarti`;
CREATE TABLE `nair_aarti` (
  `Aarti_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Aarti_Title` varchar(222) DEFAULT NULL,
  `Aarti_Dtl` text,
  `Aarti_Pic` varchar(150) DEFAULT NULL,
  `Aarti_Thumb` varchar(150) DEFAULT NULL,
  `Aarti_Audio` varchar(150) DEFAULT NULL,
  `Aarti_Audio_Link` varchar(200) DEFAULT NULL,
  `Post_Date` date DEFAULT NULL,
  `Post_By` varchar(100) DEFAULT NULL,
  `Active` enum('No','Yes') DEFAULT NULL,
  PRIMARY KEY (`Aarti_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nair_aarti
-- ----------------------------
INSERT INTO `nair_aarti` VALUES ('1', 'श्रीराम भगवान की आरती', '<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">\r\n<div style=\"text-align: center;\"><strong>भगवान श्रीराम की आरती</strong></div>\r\n\r\n<div>\r\n<div style=\"text-align: center;\">श्री रामचंद्र कृपालु भजु मन हरण भव भय दारुणं<br />\r\nनव कंजलोचन, कंज मुख, करकंज, पद कंजारुणं।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">कंदर्प अगणित अमित छबि नवनीत नीरद सुंदरं।<br />\r\nपटपीत मानहु तडित रूचि शुचि नौमि जनक सुतावरं।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">भजु दीनबंधु दिनेश दानव दैत्यवंश निकंदनं।<br />\r\nरघुनन्द आनंदकंद कौशलचंद दशरथ नंदनं ।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">सिरा मुकुट कुंडल तिलक चारू उदारु अंग विभूषणं।<br />\r\nआजानुभुज शर चापधर संग्रामजित खरदूषणं ।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">इति वदति तुलसीदास शंकर शेष मुनि मन रंजनं ।<br />\r\nमम ह्रदय कंच निवास कुरु कामादि खलदल गंजनं।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">मनु जाहिं राचेउ मिलहि सो बरु सहज सुन्दर सांवरो।<br />\r\nकरुना निधान सुजान सिलु सनेहु जानत रावरो।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">एही भांति गौरि असीस सुनि सिया सहित हिय हरषीं अली।<br />\r\nतुलसी भवानिहि पूजी पुनिपुनि मुदित मन मंदिर चली।।</div>\r\n</div>\r\n</div>\r\n', 'ram_1423812300.jpg', 'ram_1423812300.jpg', 'Aarti_Audio_71021_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Jai%20Shree%20Hanumaan-(Anuradha%20Paudwal)/Shreeram%20Stuti-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-04', 'Admin', 'Yes');
INSERT INTO `nair_aarti` VALUES ('2', 'श्री सरस्वती देवी की आरती', '<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।</strong></div>\r\n\r\n<div><strong>आरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"text-align: center;\"><u><strong>श्री सरस्वती देवी की आरती</strong></u></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">ऊँ जय सरस्वती माता, मैया जय सरस्वती माता।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"text-align: center;\">सद्गुण वैभव शालिनी, त्रिभुवन विख्याता।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nचन्द्रवदीन पद्मासिनि, द्युति मंगलकारी।<br />\r\nसोहे शुभ हंस सवारी, अतुल तेजधारी।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nबाएँ कर में वीणा, दाएं कर माला।<br />\r\nशीश मुकुट मणि सोहे, गले मोतियन माला।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nदेवी शरण जो आए, उनका उद्धार किया।<br />\r\nपैठि मंथरा दासी, रावण संहार किया।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nविद्या ज्ञान प्रदायिनी, ज्ञान प्रकाश भरो।<br />\r\nमोह, अज्ञान और तिमिर का, जग से नाश करो।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nधूप दीप फल मेवा, माँ स्वीकार करो।<br />\r\nज्ञानचक्षु दे माता, जग निस्दर करो।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nमाँ सरस्वती की आरती, जो कोई जन गावे ।<br />\r\nहितकारी सुखकारी, ज्ञान भक्ति पावे।।<br />\r\nऊँ जय सरस्वती माता।</div>\r\n', 'sarswti_jpg-01_14238.jpg', 'sarswti_jpg-01_14238.jpg', 'Aarti_Audio_81412_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Aarti%20(Vol%203)-(Anuradha%20Paudwal)/Om%20Jai%20Saraswati%20Mata-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-04', 'Admin', 'Yes');
INSERT INTO `nair_aarti` VALUES ('3', 'श्री हनुमानजी की आरती', '<p>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</p>\r\n\r\n<p style=\"text-align:center\"><u><strong>श्री हनुमानजी की आरती</strong></u></p>\r\n\r\n<p style=\"text-align:center\">आरति कीजै हनुमान लला की। दुष्ट दलन रघुनाथ कला की।।<br />\r\nजाके बल से गिरिवर कांपै । रोग-दोष जाके निकट न झांपै ।।<br />\r\nअंजनी पुत्र महा बलदाई । संतन के प्रेम सदा सहाई ।।<br />\r\nदे बीरा रघुनाथ पठाये । लंका जारि सिया सुधि लाये ।।<br />\r\nलंका सो कोट समुद्र सी खाई । जात पवनसुत बार न लाई।।<br />\r\nलंका जारि असुर संहारे। सिया रामजी के काज संवारे ।।<br />\r\nलक्ष्मण मूर्छित पड़े सकारे । आनि सजीवन प्रान उबारे ।।<br />\r\nपैठि पताल तोरि जम-कारे । अहिरावन की भुजा उखारे ।।<br />\r\nबाईं भुजा असुर दल मारे । दाहिने भुजा संत जन तारे ।।<br />\r\nसुर नर मुनि आरती उतारे । जै जै जै हनुमान उचारे ।।<br />\r\nकंचन थार कपूर लौ छाई । आरती करत अंजना माई ।।<br />\r\nजो हनुमान जी की आरती गावै । बसि बैकुंठ परम पद पावै ।।<br />\r\nलंक विध्वंस किये रघुराई । तुलसीदास स्वामी कीर्ति गाई ।।<br />\r\nआरति कीजै हनुमान लला की। दुष्ट दलन रघुनाथ कला की ।।</p>\r\n', 'lord-hanuman_big.jpg', 'lord-hanuman_big.jpg', 'Aarti_Audio_68213_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Shree%20Hanuman%20Chalisa-(Hariharan)/Shree%20Hanuman%20Ji%20Ki%20Aarti-Hariharan[48]::Raag.Me::.mp3', '2016-08-07', 'Admin', 'Yes');
INSERT INTO `nair_aarti` VALUES ('4', 'श्री सत्यनारायण भगवान की आरती', '<div style=\"text-align: center;\"><strong>श्री सत्यनारायण भगवान की आरती</strong></div>\r\n\r\n<div style=\"text-align: center;\">&nbsp;</div>\r\n\r\n<div>\r\n<div style=\"text-align: center;\">जय श्री लक्ष्मी रमणा जय श्री लक्ष्मी रमणा।<br />\r\nसत्यनारायण स्वामी जन पातक हरणा।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय...</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">रत्न जडित सिंहासन अद्भूत छवि राजै ।<br />\r\nनारद करत निरंतर घण्टा ध्वनि बाजै ।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय...</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">प्रकट भए कलि कारण द्विज को दरश दियो ।<br />\r\nबूढ़ा ब्राह्मण बन के कंचन महल कियो।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय...</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">दुर्बल भील कराल जिन पर कृपा करी।<br />\r\nचंद्रचूड़ इक राजा तिनकी विपत हरी।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">वैश्य मनोरथ पायो श्रद्धा तज दीनी।<br />\r\nसो फल भोग्यो प्रभु जी फिर स्तुति कीन्ही।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">भाव भक्ति के कारण छिन-छिन रूप धरयो।<br />\r\nश्रद्धा धारण कीनी जन को काज सरयो।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">ग्वाल बाल संग राजा बन में भक्ति करी।<br />\r\nमनवांछित फल दीन्हों दीनदयाल हरी । ।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">चढ़त प्रसाद सवाया कदली फल मेवा।<br />\r\nधूप दीप तुलसी से राजी सत्य देवा।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">श्री सत्यनारायण जी की आरती जो कोई गावे।<br />\r\nकहत शिवानंद स्वामी मनवांछित फल पावै।।</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय....</div>\r\n</div>\r\n', 'satynarayan_14238151.jpg', 'satynarayan_14238151.jpg', 'Aarti_Audio_13740_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Om%20Jai%20Jagdish%20Hare-aarti%20Sangrah-(Anuradha%20Paudwal)/Jai%20Laxmi%20Ramna-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarti` VALUES ('5', 'श्री कुंजबिहारी की आरती', '<div>\r\n<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong>\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\"><strong>श्री कुंजबिहारी की आरती</strong></div>\r\n\r\n<div style=\"text-align: center;\">आरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">गले में बैजन्ती माला, बजावै मुरली मधुर बाला।</div>\r\n\r\n<div style=\"text-align: center;\">श्रवन में कुंडल झलकाला, नंद के आनंद नंदलाला।।<br />\r\nनैनन बीच, बसहि उरबीच, सुरतिया रूप उजारी की ।।<br />\r\nआरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">गगन सम अंग कांति काली, राधिका चमक रही आली।<br />\r\nलतन में ठाढ़ै बनमाली, भ्रमर सी अलक।</div>\r\n\r\n<div style=\"text-align: center;\">कस्तूरी तिलक, चंद्र सी झलक, ललित छबि श्यामा प्यारी की।।</div>\r\n\r\n<div style=\"text-align: center;\">आरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">कनकमय मोर मुकट बिलसे, देवता दरसन को तरसे।<br />\r\nगगनसों सुमन रासि बरसै, बजे मुरचंग मधुर मिरदंग।।</div>\r\n\r\n<div style=\"text-align: center;\">ग्वालनी संग, अतुल रति गोप कुमारी की।।</div>\r\n\r\n<div style=\"text-align: center;\">आरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nजहां ते प्रकट भई गंगा, कलुष कलि हारिणि श्री गंगै<br />\r\nस्मरन ते होत मोह भंगा, बसी शिव सीस जटाके बीच।</div>\r\n\r\n<div style=\"text-align: center;\">हरै अघ कीच, चरन छबि श्री बनवारी की।।</div>\r\n\r\n<div style=\"text-align: center;\">आरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">चमकती उज्जवल तट रेनू, बज रही वृन्दावन बेनू।<br />\r\nचहुं दिसि गोपी ग्वाल धेनू, हसत मृदु मंद चांदनी चंद ।</div>\r\n\r\n<div style=\"text-align: center;\">कटत भव फंद, टेर सुनु दीन भिखारी की।।</div>\r\n\r\n<div style=\"text-align: center;\">आरती कुंज बिहारी की, श्री गिरधर कृष्ण मुरारी की।</div>\r\n</div>\r\n</div>\r\n', 'krishna_1423809844.jpg', 'krishna_1423809844.jpg', 'Aarti_Audio_10444_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Aarti%20(Vol%203)-(Anuradha%20Paudwal)/Aarti%20Kunj%20Bihari%20Ki-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarti` VALUES ('6', 'श्री तुलसी माता की आरती', '<div>\r\n<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\"><u><strong>श्री तुलसी माता की आरती</strong></u></div>\r\n\r\n<div>\r\n<div style=\"text-align: center;\">\r\n<p>जय जय तुलसी माता</p>\r\n\r\n<p>सब जग की सुख दाता, वर दाता</p>\r\n\r\n<p>जय जय तुलसी माता ।।</p>\r\n\r\n<p>सब योगों के ऊपर, सब रोगों के ऊपर</p>\r\n\r\n<p>रुज से रक्षा करके भव त्राता</p>\r\n\r\n<p>जय जय तुलसी माता।।</p>\r\n\r\n<p>बटु पुत्री हे श्यामा, सुर बल्ली हे ग्राम्या</p>\r\n\r\n<p>विष्णु प्रिये जो तुमको सेवे, सो नर तर जाता</p>\r\n\r\n<p>जय जय तुलसी माता ।।</p>\r\n\r\n<p>हरि के शीश विराजत, त्रिभुवन से हो वन्दित</p>\r\n\r\n<p>पतित जनो की तारिणी विख्याता</p>\r\n\r\n<p>जय जय तुलसी माता ।।</p>\r\n\r\n<p>लेकर जन्म विजन में, आई दिव्य भवन में</p>\r\n\r\n<p>मानवलोक तुम्ही से सुख संपति पाता</p>\r\n\r\n<p>जय जय तुलसी माता ।।</p>\r\n\r\n<p>हरि को तुम अति प्यारी, श्यामवरण तुम्हारी</p>\r\n\r\n<p>प्रेम अजब हैं उनका तुमसे कैसा नाता</p>\r\n\r\n<p>जय जय तुलसी माता ।।</p>\r\n</div>\r\n</div>\r\n</div>\r\n', 'tulsi_1423813755.jpg', 'tulsi_1423813755.jpg', 'Aarti_Audio_23711_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Aarti%20(Vol%204)-(Anuradha%20Paudwal)/Jai%20Jai%20Tulsi%20Mata-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarti` VALUES ('7', 'भगवान शिव की आरती', '<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\"><strong>भगवान शिव की आरती</strong></div>\r\n\r\n<div style=\"text-align: center;\">कर्पूरगौरं करुणावतारं संसारसारं भुजगेन्द्रहारं ।<br />\r\nसदा वसन्तं ह्रदयारविन्दे भवं भवानी सहितं नमामि।।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">ऊँ जय शिव ओंकारा स्वामी हर शिव ओंकारा।<br />\r\nब्रम्हा विष्णु सदाशिव अद्धांर्गी धारा।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nएकानन चतुरानन पंचांनन राजे।<br />\r\nहंसासंन, गरुड़ासन, वृषवाहन साजे।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">दो भुज चार चतुर्भज दस भुज अति सोहे।<br />\r\nतीनों रुप निरखता त्रिभुवन जन मोहे।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"text-align: center;\"><br />\r\nअक्षमाला, बनमाला, रुंडमालाधारी।<br />\r\nचंदन मृदमग सोहे, भोले शशिधारी।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">श्वेताम्बर, पीताम्बर, बाघाम्बर अंगे।<br />\r\nसनकादिक, ब्रह्मादिक, भूतादिक संगे।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">कर मध्ये सुकमंडलु चक्र, त्रिशूल धरता।<br />\r\nजगकरता, जगभरता, जगसंहारकरता ।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">ब्रम्हा विष्णु सदाशिव जानत अविवेका।<br />\r\nप्रवणाक्षर मध्ये ये तीनों एका।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">काशी में विश्वनाथ विराजत नंदी ब्रह्मचारी<br />\r\nनित उठी भोग लगावत महिमा अति भारी।।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">त्रिगुण शिवजी की आरती जो कोई नर गावे।<br />\r\nकहत शिवानंद स्वामी मनवांछित फल पावे।।<br />\r\nऊँ जय शिव ओंकारा.....</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">जय शिव ओंकारा, स्वामी हर शिव ओंकारा।<br />\r\nब्रह्मा विष्णु सदाशिव, अद्धांर्गी धारा।<br />\r\nऊँ जय शिव ओंकारा......</div>\r\n', 'shiva_1423813398.jpg', 'shiva_1423813398.jpg', 'Aarti_Audio_70464_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Aarti%20(Vol%203)-(Anuradha%20Paudwal)/Jai%20Shiv%20Omkara-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarti` VALUES ('8', 'श्री लक्ष्मी माता की आरती', '<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।</strong></div>\r\n\r\n<div><strong>आरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div>\r\n<div style=\"text-align: center;\"><strong>श्री लक्ष्मी माता की आरती</strong><br />\r\nऊँ जय लक्ष्मी माता, मैया जय लक्ष्मी माता।<br />\r\nतुमको निशदिन सेवत, हर विष्णु विधाता।।<br />\r\nऊँ जय लक्ष्मी माता।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">ब्रह्माणी रूद्राणी कमला, तुम ही जगमाता।<br />\r\nसूर्य चन्द्रमा ध्यावत, नारद ऋषि गाता।।<br />\r\nऊँ जय लक्ष्मी माता।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">दुर्गा रूप निरंजनि, सुख सम्पति दाता।<br />\r\nजो कोई तुमको ध्यावत, ऋद्धि सिद्धि पाता।।<br />\r\nऊँ जय लक्ष्मी माता।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">तुम पाताल निवासिनि, तुम ही शुभ दाता।<br />\r\nकर्म प्रभाव प्रकाशक, भवनिधि से त्राता।।<br />\r\nऊँ जय लक्ष्मी माता।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">जिस घर में तुम रहती सब सद्गुण आता।<br />\r\nसब सुंदर हो जाता, मन नहीं घबराता।।<br />\r\nऊँ जय लक्ष्मी माता।</div>\r\n</div>\r\n', 'laksmi_1423810302.jpg', 'laksmi_1423810302.jpg', 'Aarti_Audio_40156_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Om%20Jai%20Jagdish%20Hare-aarti%20Sangrah-(Anuradha%20Paudwal)/Jai%20Laxmi%20Mata-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarti` VALUES ('9', 'भगवान श्रीगणेश की आरती ', '<div><strong>आरती का अर्थ है पूरी श्रद्धा के साथ परमात्मा की भक्ति में डूब जाना। भगवान को प्रसन्न करना। इसमें परमात्मा में लीन होकर भक्त अपने देव की सारी बलाए स्वयं पर ले लेता है और भगवान को स्वतन्त्र होने का अहसास कराता है।<br />\r\nआरती को नीराजन भी कहा जाता है। नीराजन का अर्थ है विशेष रूप से प्रकाशित करना। यानी कि देव पूजन से प्राप्त होने वाली सकारात्मक शक्ति हमारे मन को प्रकाशित कर दें। व्यक्तित्व को उज्जवल कर दें। बिना मंत्र के किए गए पूजन में भी आरती कर लेने से पूर्णता आ जाती है। आरती पूरे घर को प्रकाशमान कर देती है, जिससे कई नकारात्मक शक्तियां घर से दूर हो जाती हैं। जीवन में सुख-समृद्धि के द्वार खुलते हैं।</strong></div>\r\n\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n\r\n<div>\r\n<div style=\"height:22px;\">&nbsp;</div>\r\n</div>\r\n\r\n<p style=\"text-align:center\"><strong>भगवान श्रीगणेश की आरती</strong><br />\r\nजय गणेश जय गणेश जय गणेश देवा।</p>\r\n\r\n<div style=\"text-align: center;\">माता जाकी पार्वती पिता महादेवा।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">एक दंत दयावंत चार भुजा धारी।<br />\r\nमस्तक सिंदूर सोहे मुसे की सवारी।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">पान चढ़े फूल चढ़े और चढ़े मेवा।<br />\r\nलड्डूअन का भोग लागे संत करे सेवा।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">अंधन को आंख देत कोढिन को काया<br />\r\nबांझन को पुत्र देत निर्धन को माया।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">हार चढ़े, फूल चढ़े और चढ़े मेवा।<br />\r\nसूरश्याम शरण आए सफल कीजे सेवा।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश जय गणेश जय गणेश देवा।<br />\r\nमाता जाकी पार्वती पिता महादेवा।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n\r\n<div style=\"height: 22px; text-align: center;\">&nbsp;</div>\r\n\r\n<div style=\"text-align: center;\">विघ्नहरण मंगलकरण, काटन सकल क्लेश।<br />\r\nसबसे पहले सुमरिए गौरी-पुत्र गणेश।।</div>\r\n\r\n<div style=\"text-align: center;\">जय गणेश देवा।</div>\r\n', 'Shani_Sadesati.jpg', 'Shani_Sadesati.jpg', 'Aarti_Audio_45220_10-Aug-2016.mp3', 'http://raagtune.org//music/data/Bhakti%20Sangeet/Aarti%20(Vol%203)-(Anuradha%20Paudwal)/Jai%20Ganesh%20Deva-Anuradha%20Paudwal[48]::Raag.Me::.mp3', '2016-08-08', 'Admin', 'Yes');
INSERT INTO `nair_aarti` VALUES ('10', 'श्री गणेश की आरती- शेंदुर लाल चढ़ायो...', '<p style=\"text-align:center\">&nbsp;शेंदुर लाल चढ़ायो अच्छा गजमुखको।<br />\r\n&nbsp;<br />\r\nदोंदिल लाल बिराजे सुत गौरिहरको।&nbsp; हाथ लिए गुडलद्दु सांई सुरवरको।<br />\r\n&nbsp;<br />\r\nमहिमा कहे न जाय लागत हूं पादको ॥1॥<br />\r\n&nbsp;<br />\r\nजय जय श्री गणराज विद्या सुखदाता।<br />\r\n&nbsp;<br />\r\nधन्य तुम्हारा दर्शन मेरा मन रमता ॥धृ॥<br />\r\n&nbsp;<br />\r\nअष्टौ सिद्धि दासी संकटको बैरि।<br />\r\n&nbsp;<br />\r\nविघ्नविनाशन मंगल मूरत अधिकारी।<br />\r\n&nbsp;<br />\r\nकोटीसूरजप्रकाश ऐबी छबि तेरी।<br />\r\n&nbsp;<br />\r\nगंडस्थलमदमस्तक झूले शशिबिहारि ॥2॥<br />\r\n&nbsp;<br />\r\nजय जय श्री गणराज विद्या सुखदाता।<br />\r\n&nbsp;<br />\r\nधन्य तुम्हारा दर्शन मेरा मन रमता ॥<br />\r\n&nbsp;<br />\r\nभावभगत से कोई शरणागत आवे।<br />\r\n&nbsp;<br />\r\nसंतत संपत सबही भरपूर पावे।<br />\r\n&nbsp;<br />\r\nऐसे तुम महाराज मोको अति भावे।<br />\r\n&nbsp;<br />\r\nगोसावीनंदन निशिदिन गुन गावे ॥3॥<br />\r\n&nbsp;<br />\r\nजय जय श्री गणराज विद्या सुखदाता।<br />\r\n&nbsp;<br />\r\nधन्य तुम्हारा दर्शन मेरा मन रमता ॥</p>\r\n', null, null, null, 'http://cloud2.raag.me/Marathi/Maha%20Ganpati%20Aarti%20Marathi%20Songs-()/Shendur%20Lal%20Chhadao%20Aarti-[48]::Raag.Me::.mp3', '2016-09-06', 'Admin', 'No');
INSERT INTO `nair_aarti` VALUES ('11', 'AAAAAA', '<p>AAAAAAAAAAAAAA<br></p>', null, null, null, 'AAAAAA', null, null, 'Yes');
INSERT INTO `nair_aarti` VALUES ('12', 'SSSS', '<p><br></p>', null, null, null, 'SSSS', null, null, 'Yes');
INSERT INTO `nair_aarti` VALUES ('13', 'QQQQQ', '<p>QQQQQ<br></p>', null, null, null, 'QQQQ', null, null, 'Yes');

-- ----------------------------
-- Table structure for `nair_artical`
-- ----------------------------
DROP TABLE IF EXISTS `nair_artical`;
CREATE TABLE `nair_artical` (
  `Art_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Artical_Title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Artical_Dtl` text COLLATE utf8_unicode_ci,
  `Artical_Thumb` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Artical_Img` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Post_By` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Post_Date` date DEFAULT NULL,
  `Active` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Art_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of nair_artical
-- ----------------------------
INSERT INTO `nair_artical` VALUES ('1', 'विविध रूपों में सजे यह 11 श्री गणेश चमकाते हैं किस्मत', '<p>किसी भी कार्य में सबसे पहले श्रीगणेश का ही नाम लिया जाता है। जिस प्रकार श्रीगणेश का नाम मात्र&nbsp; लेने से सारे दु:ख व परेशानियां दूर हो जाती हैं, वैसे ही श्रीगणेश के 11 स्वरूपों में से किसी एक का विधि-विधान से पूजन कर घर में स्थापित किया जाए तो कुछ ही समय में आपकी किस्मत चमक सकती&nbsp; हैं। श्रीगणेश के विभिन्न रूप अपने भक्तों के समस्त दु:खों को हरने वाले माने गए हैं।&nbsp; आइए जानते हैं श्रीगणेश के विभिन्न रूपों के पूजन से क्या मिलेगा आपको फल...</p>\r\n\r\n<p><strong>सफेद आंकड़े के गणेश :</strong></p>\r\n\r\n<p>तंत्र क्रियाओं में सफेद आंकड़ा (एक प्रकार का पौधा) की जड़ से निर्मित श्रीगणेश का विशेष महत्व है। इसे श्वेतार्क गणपति भी कहते हैं। कई टोने-टोटकों में श्रीगणेश के इस स्वरूप का उपयोग किया जाता है। श्वेतार्क गणपति को घर में स्थापित कर विधि-विधान से पूजा करने पर घर में किसी ऊपरी बाधा का असर नहीं होता।</p>\r\n\r\n<p><strong>पन्ना के गणेश :</strong></p>\r\n\r\n<p>पन्ना भी हरे रंग का एक रत्न होता है। इससे निर्मित श्रीगणेश की प्रतिमा की पूजा स्थान पर स्थापित कर विधि-विधान से पूजा करने पर बुद्धि व यश प्राप्त होता है। विद्यार्थियों के लिए पन्ने के गणेशजी की पूजा करना श्रेष्ठ होता है।</p>\r\n\r\n<p><strong>चांदी के गणेश :</strong></p>\r\n\r\n<p>जो लोग धन की इच्छा रखते हैं, उन्हें चांदी से निर्मित गणेश प्रतिमा की पूजा करना चाहिए। इन्हें पूजा घर में स्थापित कर दूर्वा चढ़ाने से धन-संपत्ति में वृद्धि होती है और धन का आगमन भी तेजी से होने लगता है। इनकी पूजा करने से जीवन का सुख प्राप्त होता है।</p>\r\n\r\n<p><strong>मूंगे के गणेश :</strong></p>\r\n\r\n<p>मूंगा सिंदूरी रंग का एक रत्न होता है। इससे निर्मित श्रीगणेश की प्रतिमा को पूजा स्थान पर स्थापित करने व नित्य पूजा करने से शत्रुओं का भय समाप्त हो जाता है, साथ ही इससे बने श्रीगणेश अपने भक्तों की हर मनोकामना पूरी करते हैं।</p>\r\n\r\n<p><strong>पारद गणेश :</strong></p>\r\n\r\n<p>धन-संपत्ति प्राप्ति के लिए पारद यानी पारे से निर्मित गणेश प्रतिमा की पूजा भी की जाती है। यदि किसी ने आपके घर पर या घर के किसी सदस्य पर तंत्र प्रयोग किया हो, तो पारद गणेश की पूजा से उसका कोई भी प्रभाव नहीं पड़ता।</p>\r\n\r\n<p><strong>बांसुरी बजाते गणेश :</strong></p>\r\n\r\n<p>यदि आपके घर में रोज क्लेश या विवाद होता है, तो आपको बांसुरी बजाते हुए श्रीगणेश की तस्वीर या मूर्ति घर में स्थापित करना चाहिए। बांसुरी बजाते हुए श्रीगणेश की पूजा करने से घर में सुख-शांति का वातावरण रहता है।</p>\r\n\r\n<p><strong>चंदन की लकड़ी के गणेश :</strong></p>\r\n\r\n<p>चंदन की लकड़ी से निर्मित श्रीगणेश की प्रतिमा घर में कहीं भी स्थापित कर सकते हैं। इससे घर में किसी प्रकार की विपदा नहीं आती, साथ ही परिवार के सदस्यों में सामंजस्य बना रहता है व पारिवारिक माहौल खुशहाल रहता है।</p>\r\n\r\n<p><strong>हरे रंग के गणेश :</strong></p>\r\n\r\n<p>हरे रंग के श्रीगणेश की पूजा करने से ज्ञान व बुद्धि की वृद्धि होती है। विद्यार्थियों को विशेषतौर पर हरे रंग की श्रीगणेश की मूर्ति या तस्वीर का पूजन करना चाहिए।</p>\r\n\r\n<p><strong>हाथी पर बैठे गणेश :</strong></p>\r\n\r\n<p>यदि आप धन की इच्छा रखते हैं, तो आपको हाथी पर बैठे श्रीगणेश की पूजा करना चाहिए। हाथी पर विराजित श्रीगणेश की पूजा करने से पैसा, इज्जत व शोहरत मिलती है।</p>\r\n\r\n<p><strong>नाचते हुए गणेश :</strong></p>\r\n\r\n<p>नाचते हुए गणेश की पूजा करने से मन को शांति का अनुभव होता है। यदि आप किसी तनाव में हैं, तो आपको प्रतिदिन नाचते हुए श्रीगणेश की पूजा करना चाहिए।</p>\r\n\r\n<p><strong>पंचमुखी गणेश :</strong></p>\r\n\r\n<p>तंत्र क्रिया की सिद्धि के लिए पंचमुखी श्रीगणेश का पूजन किया जाता है, इससे कोई भी तंत्र क्रिया किसी भी बाधा के संपन्न हो जाती है।</p>\r\n', null, 'Artical_Img_24967_06-Sep-2016.jpg', 'Admin', '2016-07-30', 'Yes');
INSERT INTO `nair_artical` VALUES ('2', 'गणेश जी और उनकी प्रिय दूर्वा, पढ़ें 10 विशेष बातें', '<p><strong>गणेशजी को तुलसी छोड़कर सभी पत्र-पुष्प प्रिय हैं! गणपतिजी को दूर्वा अधिक प्रिय है। अतः सफेद या हरी दूर्वा चढ़ानी चाहिए। पढ़ें और भी विशेष बातें....&nbsp;</strong></p>\r\n\r\n<div>1. दूः+अवम्&zwnj;, इन शब्दों से दूर्वा शब्द बना है। &nbsp;&#39;दूः&#39; यानी दूरस्थ व &#39;अवम्&zwnj;&#39; यानी वह जो पास लाता है।&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>2. दूर्वा वह है, जो गणेश के दूरस्थ पवित्रकों को पास लाती है।&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>3. गणपति को अर्पित की जाने वाली दूर्वा कोमल होनी चाहिए। ऐसी दूर्वा को बालतृणम्&zwnj; कहते हैं। सूख जाने पर यह आम घास जैसी हो जाती है।&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>4. दूर्वा की पत्तियां विषम संख्या में (जैसे 3, 5, 7) अर्पित करनी चाहिए।&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>5 .पूर्वकाल में गणपति की मूर्ति की ऊंचाई लगभग एक मीटर होती थी, इसलिए समिधा की लंबाई जितनी लंबी दूर्वा अर्पण करते थे। मूर्ति यदि समिधा जितनी लंबी हो, तो लघु आकार की दूर्वा अर्पण करें, परंतु मूर्ति बहुत बड़ी हो, तो समिधा के आकार की ही दूर्वा चढ़ाएं।&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>6. जैसे समिधा एकत्र बांधते हैं, उसी प्रकार दूर्वा को भी बांधते हैं। ऐसे बांधने से उनकी सुगंध अधिक समय टिकी रहती है। उसे अधिक समय ताजा रखने के लिए पानी में भिगोकर चढ़ाते हैं। इन दोनों कारणों से गणपति के पवित्रक बहुत समय तक मूर्ति में रहते हैं।&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>7. गणेशजी पर तुलसी कभी भी नहीं चढ़ाई जाती। कार्तिक माहात्म्य में भी कहा गया है कि &#39;गणेश तुलसी पत्र दुर्गा नैव तु दूर्वाया&#39; अर्थात गणेशजी की तुलसी पत्र और दुर्गाजी की दूर्वा से पूजा नहीं करनी चाहिए।&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>8. भगवान गणेश को गुड़हल का लाल फूल विशेष रूप से प्रिय है।&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>9. इसके अलावा चांदनी, चमेली या पारिजात के फूलों की माला बनाकर पहनाने से भी गणेश जी प्रसन्न होते हैं।&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>10. गणपति का वर्ण लाल है, उनकी पूजा में लाल वस्त्र, लाल फूल व रक्तचंदन का प्रयोग किया जाता है।&nbsp;</div>\r\n', null, 'Artical_Img_60197_06-Sep-2016.jpg', 'Admin', '2016-07-30', 'Yes');
INSERT INTO `nair_artical` VALUES ('3', 'नटखट हनुमान ने राहू को मारा धक्का', 'नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का नटखट हनुमान ने राहू को मारा धक्का ', null, 'Artical_Img_26589_30-Jul-2016.jpg', 'Admin', '2016-07-30', 'Yes');
INSERT INTO `nair_artical` VALUES ('4', 'सुबह जल्दी नहाने से मिलती है सूर्य और शनि की कृपा', '<p>सुबह जल्दी नहाने से स्वास्थ्य लाभ के साथ ही ज्योतिषीय लाभ भी मिलते हैं। जो लोग सूर्योदय से पहले नहाते हैं, उन्हें सूर्य और शनि की विशेष कृपा मिलती है। यहां जानिए जल्दी नहाने से ज्योतिषीय लाभ कैसे मिलते हैं...</p>\r\n\r\n<p><strong>पिता-पुत्र हैं सूर्य और शनि</strong></p>\r\n\r\n<p>सूर्य शनिदेव के पिता हैं, लेकिन ज्योतिष में इन्हें एक-दूसरे का शत्रु बताया गया है। मान्यता है कि शनि की तिरछी नजर के कारण ही गणेशजी का सिर कटा था। इससे क्रोधित होकर सूर्य ने शनि को जला दिया था। तभी से इन दोनों के बीच शत्रुता का भाव है।</p>\r\n\r\n<p><strong>शरीर की गंदगी का कारक है शनि</strong></p>\r\n\r\n<p>हम दिनभर काम करते हैं, जिससे पसीना निकलता है और पसीने के कारण शाम तक शरीर पर मैल यानी गंदगी जमा हो जाती है। इस गंदगी का कारक शनि है। सुबह जब हम जागते हैं तो हमारे शरीर पर गंदगी रहती है और ऐसे में सूर्य की किरणें हम पर पड़ती है तो सूर्य के दोषों में बढ़ोतरी होती है। सूर्योदय से पूर्व नहाने से शरीर से गंदगी यानी शनि का असर साफ हो जाता है और तब सूर्य की किरणें हम पर पड़ती हैं तो हमारी त्वचा में चमक आती है, घर-परिवार और समाज में मान-सम्मान मिलता है। इससे शनि भी प्रसन्न होते हैं और साढ़ेसाती-ढय्या में लाभ मिलता है।</p>\r\n\r\n<p><strong>ऐसे महसूस होता है शनि का असर</strong></p>\r\n\r\n<p>यदि हम देरी से जागते हैं और सूर्य की रोशनी में जाते हैं तो हमारी त्वचा में एक खिंचाव होता है जो कि सूर्य और शनि के अशुभ असर को व्यक्त करता है।</p>\r\n', null, 'Artical_Img_15620_04-Aug-2016.jpg', 'Admin', '2016-07-30', 'Yes');
INSERT INTO `nair_artical` VALUES ('5', 'दुर्गा सप्तशती के अध्याय से कामनापूर्ति ', 'दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति दुर्गा सप्तशती के अध्याय से कामनापूर्ति ', null, 'Artical_Img_61480_30-Jul-2016.jpg', 'Admin', '2016-07-30', 'Yes');
INSERT INTO `nair_artical` VALUES ('6', 'महाशिवरात्रि व्रत का विधान', 'महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान महाशिवरात्रि व्रत का विधान ', null, 'Artical_Img_64639__30-Jul-2016.jpg', 'Admin', '2016-07-30', 'Yes');
INSERT INTO `nair_artical` VALUES ('7', 'तुलसी जी के मुख्या नाम और आरती ', 'तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती तुलसी जी के मुख्या नाम और आरती ', null, 'Artical_Img_74654__30-Jul-2016.jpg', 'Admin', '2016-07-30', 'Yes');
INSERT INTO `nair_artical` VALUES ('8', 'घर के मंदिर में ध्यान रखें इन 10 छोटी-छोटी बातों का', '<p>अधिकांश घरों में देवी-देवताओं के लिए एक अलग स्थान होता है। कुछ घरों में छोटे-छोटे मंदिर बनवाए जाते हैं। नियमित रूप से घर के मंदिर में पूजन करने पर चमत्कारी रूप से शुभ फल प्राप्त होते हैं। वातावरण पवित्र बना रहता है, जिससे महालक्ष्मी सहित सभी दैवीय शक्तियां घर पर अपनी कृपा बनाए रखती हैं। यहां कुछ ऐसी बातें बताई जा रही हैं जो घर के मंदिर ध्यान रखनी चाहिए। यदि इन छोटी-छोटी बातों का ध्यान रखा जाता है तो पूजन का श्रेष्ठ फल प्राप्त होता है और लक्ष्मी की कृपा से घर में धन-धान्य की कमी नहीं होती है।</p>\r\n\r\n<p><strong>1. </strong><strong>पूजा करते समय किस दिशा की ओर होना चाहिए अपना मुंह</strong></p>\r\n\r\n<p>घर में पूजा करने वाले व्यक्ति का मुंह पश्चिम दिशा की ओर होगा तो बहुत शुभ रहता है। इसके लिए पूजा स्थल का द्वार पूर्व की ओर होना चाहिए। यदि यह संभव ना हो तो पूजा करते समय व्यक्ति का मुंह पूर्व दिशा में होगा, तब भी श्रेष्ठ फल प्राप्त होते हैं।</p>\r\n\r\n<p><strong>2.</strong><strong>कैसी</strong> <strong>मूर्तियां</strong> <strong>रखनी</strong> <strong>चाहिए</strong> <strong>मंदिर</strong> <strong>में</strong></p>\r\n\r\n<p>घर के मंदिर में ज्यादा बड़ी मूर्तियां नहीं रखनी चाहिए। शास्त्रों के अनुसार बताया गया है कि यदि हम मंदिर में शिवलिंग रखना चाहते हैं तो शिवलिंग हमारे अंगूठे के आकार से बड़ा नहीं होना चाहिए। शिवलिंग बहुत संवेदनशील होता है और इसी वजह से घर के मंदिर में छोटा-सा शिवलिंग रखना शुभ होता है। अन्य देवी-देवताओं की मूर्तियां भी छोटे आकार की ही रखनी चाहिए। अधिक बड़ी मूर्तियां बड़े मंदिरों के लिए श्रेष्ठ रहती हैं, लेकिन घर के छोटे मंदिर के छोटे-छोटे आकार की प्रतिमाएं श्रेष्ठ मानी गई हैं।</p>\r\n\r\n<p><strong>3.</strong><strong>मंदिर</strong> <strong>तक</strong> <strong>पहुंचनी</strong> <strong>चाहिए</strong> <strong>सूर्य</strong> <strong>की</strong> <strong>रोशनी</strong> <strong>और</strong> <strong>ताजी</strong> <strong>हवा</strong></p>\r\n\r\n<p>घर में मंदिर ऐसे स्थान पर बनाया जाना चाहिए, जहां दिनभर में कभी भी कुछ देर के लिए सूर्य की रोशनी अवश्य पहुंचती हो। जिन घरों में सूर्य की रोशनी और ताजी हवा आती रहती है, उन घरों के कई दोष स्वत: ही शांत हो जाते हैं। सूर्य की रोशनी से वातावरण की नकारात्मक ऊर्जा खत्म होती है और सकारात्मक ऊर्जा में बढ़ोतरी होती है।</p>\r\n\r\n<p><strong>4.</strong><strong>पूजन</strong> <strong>सामग्री</strong> <strong>से</strong> <strong>जुड़ी</strong> <strong>खास</strong> <strong>बातें</strong></p>\r\n\r\n<p>पूजा में बासी फूल, पत्ते अर्पित नहीं करना चाहिए। स्वच्छ और ताजे जल का ही उपयोग करें। इस संबंध में यह बात ध्यान रखने योग्य है कि तुलसी के पत्ते और गंगाजल कभी बासी नहीं माने जाते हैं। अत: इनका उपयोग कभी भी किया जा सकता है। शेष सामग्री ताजी ही उपयोग करनी चाहिए। यदि कोई फूल सूंघा हुआ है या खराब है तो वह भगवान को अर्पित न करें।</p>\r\n\r\n<p><strong>5.</strong><strong>पूजन</strong> <strong>कक्ष</strong> <strong>में</strong> <strong>नहीं</strong> <strong>ले</strong> <strong>जाना</strong> <strong>चाहिए</strong> <strong>ये</strong> <strong>चीजें</strong></p>\r\n\r\n<p>घर में जिस स्थान पर मंदिर है, वहां चमड़े से बनी चीजें, जूते-चप्पल नहीं ले जाना चाहिए। मंदिर में मृतकों और पूर्वजों के चित्र भी नहीं लगाना चाहिए। पूर्वजों के चित्र लगाने के लिए दक्षिण दिशा क्षेत्र रहती है। घर में दक्षिण दिशा की दीवार पर मृतकों के चित्र लगाए जा सकते हैं, लेकिन मंदिर में नहीं रखना चाहिए।</p>\r\n\r\n<p>पूजन कक्ष में पूजा से संबंधित सामग्री ही रखना चाहिए। अन्य कोई वस्तु रखने से बचना चाहिए।</p>\r\n\r\n<p><strong>6.</strong><strong>पूजन</strong> <strong>कक्ष</strong> <strong>के</strong> <strong>आसपास</strong> <strong>शौचालय</strong> <strong>नहीं</strong> <strong>होना</strong> <strong>चाहिए</strong></p>\r\n\r\n<p>घर के मंदिर के आसपास शौचालय होना भी अशुभ रहता है। अत: ऐसे स्थान पर पूजन कक्ष बनाएं, जहां आसपास शौचालय न हो।</p>\r\n\r\n<p>- यदि किसी छोटे कमरे में पूजा स्थल बनाया गया है तो वहां कुछ स्थान खुला होना चाहिए, जहां आसानी से बैठा जा सके।</p>\r\n\r\n<p><strong>7.</strong><strong>रोज</strong> <strong>रात</strong> <strong>को</strong> <strong>मंदिर</strong> <strong>पर</strong> <strong>ढंके</strong> <strong>पर्दा</strong></p>\r\n\r\n<p>रोज रात को सोने से पहले मंदिर को पर्दे से ढंक देना चाहिए। जिस प्रकार हम सोते समय किसी प्रकार का व्यवधान पसंद नहीं करते हैं, ठीक उसी भाव से मंदिर पर पर्दा ढंक देना चाहिए।</p>\r\n\r\n<p><strong>8.</strong><strong>सभी</strong> <strong>मुहूर्त</strong> <strong>में</strong> <strong>करें</strong> <strong>गौमूत्र</strong> <strong>का</strong> <strong>ये</strong> <strong>उपाय</strong></p>\r\n\r\n<p>वर्षभर में जब भी श्रेष्ठ मुहूर्त आते हैं, तब पूरे घर में गौमूत्र का छिड़काव करना चाहिए। गौमूत्र के छिड़काव से पवित्रता बनी रहती है और वातावरण सकारात्मक हो जाता है। शास्त्रों के अनुसार गौमूत्र बहुत चमत्कारी होता है और इस उपाय घर पर दैवीय शक्तियों की विशेष कृपा होती है।</p>\r\n\r\n<p><strong>9.</strong><strong>खंडित</strong> <strong>मूर्तियां</strong> <strong>ना</strong> <strong>रखें</strong></p>\r\n\r\n<p>शास्त्रों के अनुसार खंडित मूर्तियों की पूजा वर्जित की गई है। जो भी मूर्ति खंडित हो जाती है, उसे पूजा के स्थल से हटा देना चाहिए और किसी पवित्र बहती नदी में प्रवाहित कर देना चाहिए। खंडित मूर्तियों की पूजा अशुभ मानी गई है। इस संबंध में यह बात ध्यान रखने योग्य है कि सिर्फ शिवलिंग कभी भी, किसी भी अवस्था में खंडित नहीं माना जाता है।</p>\r\n\r\n<p><strong>10.</strong><strong>पूजन</strong> <strong>के</strong> <strong>बाद</strong> <strong>पूरे</strong> <strong>घर</strong> <strong>में</strong> <strong>कुछ</strong> <strong>देर</strong> <strong>बजाएं</strong> <strong>घंटी</strong></p>\r\n\r\n<p>यदि घर में मंदिर है तो हर रोज सुबह और शाम पूजन अवश्य करना चाहिए। पूजन के समय घंटी अवश्य बजाएं। साथ ही, एक बार पूरे घर में घूमकर भी घंटी बजानी चाहिए। ऐसा करने पर घंटी की आवाज से नकारात्मकता नष्ट होती है और सकारात्मकता बढ़ती है।</p>\r\n', null, 'Artical_Img_71345_04-Aug-2016.jpg', 'Admin', '2016-07-30', 'Yes');
INSERT INTO `nair_artical` VALUES ('9', 'शुक्रवार के लिए ज्योतिष के 5 छोटे-छोटे उपाय', '<div>कुंडली में शुक्र ग्रह अशुभ स्थिति में हो तो व्यक्ति को पूर्ण सुख-सुविधाएं प्राप्त नहीं हो पाती हैं। साथ ही, वैवाहिक जीवन में भी परेशानियों का सामना करना पड़ सकता है। शुक्र के दोषों के दूर करने के लिए शुक्रवार को विशेष उपाय किए जा सकते हैं। शास्त्रों के अनुसार शुक्रवार को देवी लक्ष्मी के निमित्त भी उपाय किए जा सकते हैं। यहां जानिए ​छोटे-छोटे 5 उपाय...</div>\r\n\r\n<div><strong>1.</strong> हर शुक्रवार शिवलिंग पर दूध और जल अर्पित करें। साथ ही, ऊँ नम: शिवाय मंत्र का जप करें। मंत्र जप कम से कम 108 बार करना चाहिए। मंत्र जप के लिए रुद्राक्ष की माला का उपयोग करना चाहिए।</div>\r\n\r\n<div><strong>2.</strong> किसी गरीब व्यक्ति को या किसी मंदिर में दूध का दान करें।</div>\r\n\r\n<div><strong>3.</strong>शुक्रवार को किसी विवाहित स्त्री को सुहाग का सामान दान करें। सुहाग का सामान जैसे चूड़ियां, कुमकुम, लाल साड़ी। इस उपाय से देवी लक्ष्मी प्रसन्न होती हैं।</div>\r\n\r\n<div><strong>4.</strong>शुक्र से शुभ फल पाने के लिए शुक्रवार को शुक्र मंत्र का जप करें। मंत्र जप की संख्या कम से कम 108 होनी चाहिए। <strong>शुक्र मंत्र:</strong> द्रां द्रीं द्रौं स: शुक्राय नम:।</div>\r\n\r\n<p><strong>5.</strong>शुक्र ग्रह के लिए इन चीजों का दान भी किया जा सकता है... हीरा, चांदी, चावल, मिश्री, सफेद वस्त्र, दही, सफेद चंदन आदि। इन चीजों के दान से शुक्र के दोष कम हो सकते हैं।</p>\r\n\r\n<p>&nbsp;</p>\r\n', null, 'Artical_Img_67952_04-Aug-2016.jpg', 'Admin', '2016-07-30', 'Yes');
INSERT INTO `nair_artical` VALUES ('10', 'राहु-केतु से जुड़ी 10 बातें, जो अधिकतर लोग नहीं जानते हैं', '<p>राहु-केतु से जुड़ी 10 बातें, जो अधिकतर लोग नहीं जानते हैं ज्योतिष में 9 ग्रह बताए गए हैं। इन नौ ग्रहों की स्थिति के आधार पर ही व्यक्ति को जीवन में सुख और दुख प्राप्त होता है। नौ ग्रहों में 2 ग्रह ऐसे हैं, जिन्हें छाया ग्रह कहा जाता है। ये ग्रह हैं राहु और केतु। यहां जानिए राहु-केतु से जुड़ी 10 खास बातें...</p>\r\n\r\n<p>1. राहु और केतु सूर्य, चंद्र, मंगल आदि ग्रहों की तरह धरातल वाले ग्रह नहीं हैं, इसलिए इन्हें छाया ग्रह कहा जाता है।</p>\r\n\r\n<p>2. लोग शनि की तरह राहु से भी भयभीत रहते हैं। दक्षिण भारत में तो लोग राहु काल में कोई काम शुरू नहीं करते हैं।</p>\r\n\r\n<p>3. राहु के संबंध में समुद्र मंथन वाली कथा प्रचलित है।</p>\r\n\r\n<p>4.एक कथा के अनुसार दैत्यराज हिरण्यकश्यप की पुत्री सिंहिका का विवाह दैत्य विप्रचित से हुआ था। विवाह के बाद सिंहिका ने सौ पुत्रों को जन्म दिया, उनमें सबसे बड़ा पुत्र राहु था।</p>\r\n\r\n<p>5. देवासुर संग्राम में राहु ने भी भाग लिया था। समुद्र मंथन के 14 रत्नों में से अमृत भी एक था। जब भगवान विष्णु मोहिनी का रूप धारण कर देवताओं को अमृत पान करा रहे थे, तब राहु भी रूप बदलकर देवताओं के बीच बैठ गया। मोहिनी ने उसे भी अमृत पान करवा दिया, तभी सूर्य और चंद्र ने राहु को पहचान लिया। तब भगवान विष्णु ने अपने चक्र से राहु का सिर काट दिया। राहु का सिर और धड़ अलग हो गए, लेकिन अमृत पान की वजह से उसका सिर और धड़ अमर हो गए।</p>\r\n\r\n<p>6.जब राहु का सिर और धड़ अमर हो गया तो सभी देवता उससे डरने लगे। डरे हुए देवता शिवजी के पास पहुंचे और उनसे राहु का संहार करने की प्रार्थना की। तब शिवजी ने श्रेष्ठ चंडिका देवी को मातृकाओं के साथ भेजा। उस समय देवताओं ने राहु के सिर को अपने पास रोके रखा, लेकिन बिना सिर की राहु की देह मातृकाओं के साथ युद्ध कर रही थी।</p>\r\n\r\n<p>7. राहु की अमर देह किसी भी तरह से परास्त नहीं हो रही थी। तब राहु के सिर ने देवताओं को धड़ के विनाश का तरीका खुद ही बताया। राहु ने देवताओं को बताया कि धड़ को पहले फाड़ दें और उसमें से अमृत निकाल लें। इसके बाद देवी चंडिका और देवताओं ने ऐसा ही किया। जिससे राहु का धड़ नष्ट हो गया। इससे सभी देवता राहु से प्रसन्न हुए और उसे ग्रहत्व प्रदान कर दिया।</p>\r\n\r\n<p>8. ग्रहत्व प्राप्त करने के बाद भी राहु ने सूर्य और चंद्र को क्षमा नहीं किया। पूर्णिमा और अमावस्या पर राहु आज भी सूर्य-चंद्र को ग्रसता है। इसे ही सूर्य ग्रहण और चंद्र ग्रहण कहा जाता है।</p>\r\n\r\n<p>9. ज्योतिष में राहु और केतु को अन्य ग्रहों के समान महत्व दिया जाता है। ऋषि पाराशर ने राहु को तमो यानी अंधकार युक्त ग्रह बताया है।</p>\r\n\r\n<p>10.राहु और केतु को राशियों का स्वामी नहीं बनाया गया है। राहु मिथुन राशि में उच्च तथा धनु राशि में नीच का होता है।</p>\r\n', null, 'Artical_Img_76118_30-Jul-2016.jpg', 'Admin', '2016-07-30', 'Yes');
INSERT INTO `nair_artical` VALUES ('11', 'दुर्गा सप्तशती के ये 11 मंत्र कर सकते हैं आपकी हर इच्छा पूरी', '<p>धर्म ग्रंथों के अनुसार, आषाढ़ मास के गुप्त नवरात्र में दुर्गा सप्तशती के मंत्रों का जाप करने से सभी सुखों की प्राप्ति संभव है। ये मंत्र बहुत ही चमत्कारी हैं, अगर विधि-विधान से इनका जाप किया जाए तो असंभव कार्य भी संभव हो जाते हैं। (दुर्गा सप्तशती के मंत्र बहुत ही शीघ्र असर दिखाते हैं, यदि आप मंत्रों का उच्चारण ठीक से नहीं कर सकते तो किसी योग्य ब्राह्मण से इन मंत्रों का जाप करवाएं, अन्यथा इसके दुष्परिणाम भी हो सकते हैं।) मंत्र जाप की विधि इस प्रकार है-</p>\r\n\r\n<p><strong>जाप विधि</strong></p>\r\n\r\n<p><strong>1.</strong> नवरात्र में रोज सुबह जल्दी उठकर साफ वस्त्र पहनकर सबसे पहले माता दुर्गा की पूजा करें। इसके बाद एकांत में कुशा (एक प्रकार की घास) के आसन पर बैठकर लाल चंदन के मोतियों की माला से इन मंत्रों का जाप करें।</p>\r\n\r\n<p><strong>2.</strong> इन मंत्रों की प्रतिदिन ५ माला जाप करने से मन को शांति तथा प्रसन्नता मिलती है। यदि जाप का समय, स्थान, आसन, तथा माला एक ही हो तो यह मंत्र शीघ्र ही सिद्ध हो जाते हैं।</p>\r\n\r\n<p><strong>सुंदर पत्नी के लिए मंत्र</strong></p>\r\n\r\n<p>पत्नीं मनोरमां देहि मनोवृत्तानुसारिणीम्।&nbsp; तारिणीं दुर्गसंसारसागरस्य कुलोद्भवाम्।।</p>\r\n\r\n<p><strong>गरीबी मिटाने के लिए</strong></p>\r\n\r\n<p>दुर्गे स्मृता हरसि भीतिमशेषजन्तो: स्वस्थै: स्मृता मतिमतीव शुभां ददासि।<br />\r\nदारिद्रयदु:खभयहारिणि का त्वदन्या सर्वोपकारकरणाय सदार्द्रचित्ता।।</p>\r\n\r\n<p><strong>रक्षा के लिए</strong></p>\r\n\r\n<p>शूलेन पाहि नो देवि पाहि खड्गेन चाम्बिके। घण्टास्वनेन न: पाहि चापज्यानि:स्वनेन च।।</p>\r\n\r\n<p><strong>स्वर्ग और मुक्ति के लिए</strong></p>\r\n\r\n<p>सर्वस्य बुद्धिरूपेण जनस्य हदि संस्थिते। स्वर्गापर्वदे देवि नारायणि नमोस्तु ते।।</p>\r\n\r\n<p><strong>मोक्ष प्राप्ति के लिए</strong></p>\r\n\r\n<p>त्वं वैष्णवी शक्तिरनन्तवीर्या विश्वस्य बीजं परमासि माया। सम्मोहितं देवि समस्तमेतत्&nbsp; त्वं वै प्रसन्ना भुवि मुक्तिहेतु:।।</p>\r\n\r\n<p><strong>सपने में सिद्धि-असिद्धि जानने का मंत्र</strong></p>\r\n\r\n<p>दुर्गे देवि नमस्तुभ्यं सर्वकामार्थसाधिके। मम सिद्धिमसिद्धिं वा स्वप्ने सर्वं प्रदर्शय।।</p>\r\n\r\n<p><strong>सामूहिक कल्याण के लिए मंत्र</strong></p>\r\n\r\n<p>देव्या यया ततमिदं जगदात्मशक्त्या निश्शेषदेवगणशक्तिसमूहमूत्र्या।<br />\r\nतामम्बिकामखिलदेवमहर्षिपूज्यां भकत्या नता: स्म विदधातु शुभानि सा न: ।।</p>\r\n\r\n<p><strong>भय नाश के लिए</strong></p>\r\n\r\n<p><strong>यस्या: प्रभावमतुलं भगवाननन्तो ब्रह्मा हरश्च न हि वक्तुमलं बलं च।</strong><br />\r\n<strong>सा चण्डिकाखिलजगत्परिपालनाय नाशाय चाशुभभयस्य मतिं करोतु।।</strong></p>\r\n\r\n<p><strong>रोग नाश के लिए</strong></p>\r\n\r\n<p>रोगानशेषानपहंसि तुष्टा रुष्टा तु कामान् सकलानभीष्टान् ।<br />\r\nत्वामाश्रितानां न विपन्नराणां त्वामाश्रिता ह्याश्रयतां प्रयान्ति।।</p>\r\n\r\n<p><strong>बाधा शांति के लिए</strong></p>\r\n\r\n<p>सर्वाबाधाप्रशमनं त्रैलोक्यस्याखिलेश्वरि। एवमेव त्वया कार्यमस्मद्वरिविनासनम्।।</p>\r\n\r\n<p><strong>विपत्ति नाश के लिए मंत्र</strong></p>\r\n\r\n<p>देवि प्रपन्नार्तिहरे प्रसीद प्रसीद मातर्जगतोखिलस्य।<br />\r\nप्रसीद विश्वेश्वरी पाहि विश्वं त्वमीश्वरी देवि चराचरस्य।।</p>\r\n', null, 'Artical_Img_63286__04-Aug-2016.jpg', 'Admin', '2016-08-04', 'Yes');
INSERT INTO `nair_artical` VALUES ('12', 'विष्णु पुराण: किसी भी महिला से विवाह करने के पहले जांच लेना चाहिए ये 4 बातें', '<p>मनुष्य जीवन के सोलह संस्कारों में से एक महत्वपूर्ण संस्कार है विवाह। सुखी वैवाहिक जीवन के लिए आवश्यकता होती है अच्छे जीवन साथी की। शादी के लिए ऐसी लड़की का चयन करना चाहिए, जो कि अपने पति और परिवार दोनों को प्रेम पूर्वक संभाल सके। विष्णु पुराण में स्त्रियों के संबंध में कई बातें बताई गई हैं। इस पुराण में 4 ऐसी बातों के बारे में बताया गया है, जिनकी जांच किए बिना किसी भी स्त्री से विवाह नहीं करना चाहिए। जानिए कौन-सी हैं वे 4 बातें।</p>\r\n\r\n<p><strong>1. माता या पिता पक्ष की ओर से कोई रिश्ता हो-</strong></p>\r\n\r\n<p>किसी भी व्यक्ति को उस स्त्री से कभी शादी नहीं करना चाहिए, जिसका हमारे पिता या माता की ओर से कोई रिश्ता हो। शास्त्रों के अनुसार आपसी रिश्तेदारी या एक ही गोत्र में विवाह करना मना किया गया है। इससे जेनेटिक बीमारियां होने की भी संभावनाएं रहती हैं। जिस स्त्री से माता पक्ष से पांचवीं पीढ़ी तक और पिता पक्ष से सातवीं पीढ़ी तक रिश्ता जुड़ा हुआ हो, उससे शादी नहीं करना चाहिए।</p>\r\n\r\n<p><strong>2. दुष्ट पुरुष से दोस्ती रखने वाली-</strong></p>\r\n\r\n<p>स्त्री को दुष्ट पुरुष से मेल-जोल नहीं बढ़ाना चाहिए। ऐसा करने से वह कभी भी किसी मुश्किल में फंस सकती है। दुष्ट पुरुष उस स्त्री का उपयोग अपने निजी हित के लिए कर सकता है। उसकी संगत में रहने से स्त्री का स्वभाव भी वैसा हो सकता है। ऐसा होने से उसके चरित्र में भी दोष आ जाता है। इसलिए ऐसी स्त्री से विवाह नहीं करना चाहिए, जो दुष्ट पुरुष से संबंध रखती हो।</p>\r\n\r\n<p><strong>3. बुरा बोलने वाली-</strong></p>\r\n\r\n<p>कहा जाता है कि वाणी में ही मां सरस्वती का निवास होता है। जो स्त्री मधुर वाणी बोलने वाली होती है, उससे मां सरस्वती सदैव प्रसन्न रहती हैं। बुरे या कटु वचन बोलने वाली स्त्री का स्वभाव भी उसकी भाषा की तरह बुरा ही होता है। ऐसी स्त्री की वजह से घर में अशांति का वातावरण बना रहता है। इसीलिए ऐसी स्त्री से विवाह नहीं करना चाहिए।</p>\r\n\r\n<p><strong>4. देर तक सोने वाली-</strong></p>\r\n\r\n<p>देर तक सोने के कारण महिलाएं पारिवारिक जिम्मेदारी पूरी नहीं कर पाती है। देर तक सोना आलस की निशानी होती है। आलसी स्त्री घर को साफ नहीं रख सकती। घर में लक्ष्मी की कृपा बनाएं रखने के लिए साफ-सफाई रखना बहुत जरूरी होता है। घर में गंदगी होने से दरिद्रता बड़ती है। साथ ही देर तक सोना कई बिमारियों का भी कारण बन सकता हैं। इसलिए ऐसी स्त्री से विवाह नहीं करना चाहिए, जो देर तक सोती हो या आलसी प्रर्वती की हो।</p>\r\n\r\n<p>&nbsp;</p>\r\n', null, 'Artical_Img_16927_06-Sep-2016.jpg', 'Admin', '2016-08-04', 'Yes');
INSERT INTO `nair_artical` VALUES ('13', 'बुधवार व्रत कथा', '&lt;p&gt;बुध ग्रह की शांति और सर्व-सुखों की इच्छा रखने वाले स्त्री-पुरुषों को बुधवार का व्रत अवश्य करना चाहिए। कई जगह बुधवार के दिन गणेश जी के पूजा की जाती है। हालांकि बुधवार की व्रत कथा पूर्णत: भगवान बुध पर आधारित है।बुधवार व्रत कथा &lt;/p&gt;&lt;p&gt;एक समय की बात है एक साहूकार अपनी पत्नी को विदा कराने के लिए अपने ससुराल गया। कुछ दिन वहां रहने के उपरांत उसने सास-ससुर से अपनी पत्नी को विदा करने के लिए कहा किंतु सास-ससुर तथा अन्य संबंधियों ने कहा कि&nbsp; बेटा आज बुधवार है। बुधवार को किसी भी शुभ कार्य के लिए यात्रा नहीं करते। लेकिन वह नहीं माना और हठ करके बुधवार के दिन ही पत्नी को विदा करवाकर अपने नगर को चल पड़ा। राह में उसकी पत्नी को प्यास लगी, उसने पति से पीने के लिए पानी मांगा। साहूकार लोटा लेकर गाड़ी से उतरकर जल लेने चला गया। जब वह जल लेकर वापस आया तो वह बुरी तरह हैरान हो उठा, क्योंकि उसकी पत्नी के पास उसकी ही शक्ल-सूरत का एक दूसरा व्यक्ति बैठा था।&nbsp; पत्नी भी अपने पति को देखकर हैरान रह गई। वह दोनों में कोई अंतर नहीं कर पाई। साहूकार ने पास बैठे शख्स से पूछा कि तुम कौन हो और मेरी पत्नी के पास क्यों बैठे हो? उसकी बात सुनकर उस व्यक्ति ने कहा- अरे भाई, यह मेरी पत्नी है। मैं अपनी पत्नी को ससुराल से विदा करा कर लाया हूं, लेकिन तुम कौन हो जो मुझसे ऐसा प्रश्न कर रहे हो? दोनों आपस में झगड़ने लगे। तभी राज्य के सिपाही आए और उन्होंने साहूकार को पकड़ लिया और स्त्री से पूछा कि तुम्हारा असली पति कौन है? उसकी पत्नी चुप रही क्योंकि दोनों को देखकर वह खुद हैरान थी कि वह किसे अपना पति कहे? साहूकार ईश्वर से प्रार्थना करते हुए बोला&nbsp; हे भगवान, यह क्या लीला है? तभी आकाशवाणी हुई कि मूर्ख आज बुधवार के दिन तुझे शुभ कार्य के लिए गमन नहीं करना चाहिए था। तूने हठ में किसी की बात नहीं मानी। यह सब भगवान बुधदेव के प्रकोप से हो रहा है। साहूकार ने भगवान बुधदेव से प्रार्थना की और अपनी गलती के लिए क्षमा याचना की। तब मनुष्य के रूप में आए बुध देवता अंतर्ध्यान हो गए। वह अपनी स्त्री को घर ले आया। इसके पश्चात पति-पत्नी नियमपूर्वक बुधवार व्रत करने लगे। जो व्यक्ति इस कथा को कहता या सुनता है उसको बुधवार के दिन यात्रा करने का कोई दोष नहीं लगता और उसे सभी प्रकार के सुखों की प्राप्ति होती है। &lt;br&gt;&lt;/p&gt;', null, 'Artical_Img_10337__24-Aug-2016.jpg', 'Admin', '2016-08-24', 'Yes');
INSERT INTO `nair_artical` VALUES ('14', 'इन 20 विशेष सामग्री और मंत्रों से प्रसन्न होंगे श्रीगणेश', 'गणेश चतुर्थी के 10 दिन यदि उचित रीति से सही प्रकार की वनस्पति पूर्ण विधि-विधान से अर्पित की जाए तो भगवान गणेश तुरंत प्रसन्न होकर हर प्रकार की चिंता हरते हैं। आइए जानते हैं श्रीगणेश के मनपसंद पत्तों और उसके मंत्रों का शास्त्रोक्त विधान।&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;1. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;भगवान श्रीगणेश को शमी पत्र चढ़ाकर &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;सुमुखाय नम:&amp;amp;amp;amp;#39; &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;कहें।&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;इसके बाद क्रम से यह पत्ते चढ़ाएं और नाम मंत्र बोलें -&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;2. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;बिल्वपत्र चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;उमापुत्राय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;3. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;दूर्वादल चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;गजमुखाय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;5. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;धतूरे का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;हरसूनवे नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;6. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;सेम का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;वक्रतुण्डाय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;7. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;तेजपत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;चतुर्होत्रे नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;8. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;कनेर का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;विकटाय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;9. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;कदली या केले का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;हेमतुंडाय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;10. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;आक का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;विनायकाय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;11. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;अर्जुन का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;कपिलाय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;12. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;महुआ का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;भालचन्द्राय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;13. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;अगस्त्य वृक्ष का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;सर्वेश्वराय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;14. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;वनभंटा चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;एकदन्ताय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;15. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;भंगरैया का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;गणाधीशाय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;16. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;अपामार्ग का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;गुहाग्रजाय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;17. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;देवदारु का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;वटवे नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;18. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;गान्धारी वृक्ष का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;सुराग्रजाय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;19. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;सिंदूर वृक्ष का पत्ता चढ़ाते समय जपें &amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;हेरम्बाय नम:।&amp;amp;amp;amp;#39;&amp;amp;amp;amp;nbsp;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;\r\n\r\n&amp;amp;amp;lt;p&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;20. &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;केतकी पत्ता चढ़ाते समय जपें &amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;सिद्धिविनायकाय नम:।&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;strong&amp;amp;amp;gt;&amp;amp;amp;amp;#39;&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;', null, 'Artical_Img_65176_06-Sep-2016.jpg', 'Admin', '2016-08-25', 'Yes');
INSERT INTO `nair_artical` VALUES ('15', 'करवा चौथ', 'हिंदू परंपरा के अंतर्गत कार्तिक मास के कृष्ण पक्ष की चतुर्थी तिथि को करवा चौथ का पर्व मनाया जाता है। इस बार यह पर्व 19 अक्टूबर, बुधवार को है। इस दिन महिलाएं चंद्रमा की पूजा कर अपना व्रत खोलती हैं। इस दिन चंद्रमा की ही पूजा क्यों की जाती है? इस संबंध में कई कथाएं व किवंदतियां प्रचलित हैं। करवा चौथ के दिन चंद्रमा की पूजा करने के संबंध में एक मनोवैज्ञानिक पक्ष भी है, जो इस प्रकार है- रामचरितमानस के लंका कांड के अनुसार, जिस समय भगवान श्रीराम समुद्र पार कर लंका में स्थित सुबेल पर्वत पर उतरे और श्रीराम ने पूर्व दिशा की ओर चमकते हुए चंद्रमा को देखा तो अपने साथियों से पूछा - चंद्रमा में जो कालापन है, वह क्या है? सभी ने अपनी-अपनी बुद्धि के अनुसार जवाब दिया। किसी ने कहा चंद्रमा में पृथ्वी की छाया दिखाई देती है।किसी ने कहा राहु की मार के कारण चंद्रमा में कालापन है तो किसी ने कहा कि आकाश की काली छाया उसमें दिखाई देती है। तब भगवान श्रीराम ने कहा- विष यानी जहर चंद्रमा का बहुत प्यारा भाई है (क्योंकि चंद्रमा व विष समुद्र मंथन से निकले थे)। इसीलिए उसने विष को अपने ह्रदय में स्थान दे रखा है, जिसके कारण चंद्रमा में कालापन दिखाई देता है। अपनी विषयुक्त किरणों को फैलाकर वह वियोगी नर-नारियों को जलाता रहता है।इस पूरे प्रसंग का मनोवैज्ञानिक पक्ष यह है कि जो पति-पत्नी किसी कारणवश एक-दूसरे से बिछड़ जाते हैं, चंद्रमा की विषयुक्त किरणें उन्हें अधिक कष्ट पहुंचाती हैं। इसलिए करवा चौथ के दिन चंद्रमा की पूजा कर महिलाएं ये कामना करती हैं कि किसी भी कारण उन्हें अपने प्रियतम का वियोग न सहना पड़े। यही कारण है कि करवा चौथ के दिन चंद्रमा की पूजा करने का विधान है। इसलिए महिलाएं छलनी से देखती हैं अपने पति को हिंदू धर्म में हर पर्व व व्रत के साथ कई परंपराएं देखने को मिलती हैं। इनमें से कुछ परंपराओं का वैज्ञानिक पक्ष होता है, कुछ का धार्मिक तो कई परंपराओं का मनोवैज्ञानिक पक्ष भी होता है। करवा चौथ पर छलनी से चंद्रमा व पति को देखकर पूजन करने के पीछे भी मनोवैज्ञानिक पक्ष ही निहित है।परंपरा के अनुसार, करवा चौथ का पूजन करते समय सर्वप्रथम विवाहित महिलाएं छलनी से चंद्रमा को देखती हैं व बाद में अपने पति को। ऐसा करने के पीछे कोई वैज्ञानिक तर्क नहीं होता बल्कि पत्नी के ह्रदय की भावना होती है। पत्नी जब छलनी से अपने पति को देखती है तो उसका मनोवैज्ञानिक अभिप्राय यह होता है कि मैंने अपने ह्रदय के सभी विचारों व भावनाओं को छलनी में छानकर शुद्ध कर लिया है, जिससे मेरे मन के सभी दोष दूर हो चुके हैं और अब मेरे ह्रदय में पूर्ण रूप से आपके प्रति सच्चा प्रेम ही शेष है। यही प्रेम में आपको समर्पित करती हूं और अपना व्रत पूर्ण करती हूं। इसलिए महिलाएं छलनी से देखती हैं अपने पति को हिंदू धर्म में हर पर्व व व्रत के साथ कई परंपराएं देखने को मिलती हैं। इनमें से कुछ परंपराओं का वैज्ञानिक पक्ष होता है, कुछ का धार्मिक तो कई परंपराओं का मनोवैज्ञानिक पक्ष भी होता है। करवा चौथ पर छलनी से चंद्रमा व पति को देखकर पूजन करने के पीछे भी मनोवैज्ञानिक पक्ष ही निहित है। परंपरा के अनुसार, करवा चौथ का पूजन करते समय सर्वप्रथम विवाहित महिलाएं छलनी से चंद्रमा को देखती हैं व बाद में अपने पति को। ऐसा करने के पीछे कोई वैज्ञानिक तर्क नहीं होता बल्कि पत्नी के ह्रदय की भावना होती है। पत्नी जब छलनी से अपने पति को देखती है तो उसका मनोवैज्ञानिक अभिप्राय यह होता है कि मैंने अपने ह्रदय के सभी विचारों व भावनाओं को छलनी में छानकर शुद्ध कर लिया है, जिससे मेरे मन के सभी दोष दूर हो चुके हैं और अब मेरे ह्रदय में पूर्ण रूप से आपके प्रति सच्चा प्रेम ही शेष है। यही प्रेम में आपको समर्पित करती हूं और अपना व्रत पूर्ण करती हूं।करवे का पानी पीकर ही क्यों ये व्रत पूरा क्यों किया जाता है पंच तत्वों का प्रतीक है करवा मिट्टी का करवा पंच तत्व का प्रतीक है, मिट्टी को पानी में गला कर बनाते हैं जो भूमि तत्व और जल तत्व का प्रतीक है, उसे बनाकर धूप और हवा से सुखाया जाता है जो आकाश तत्व और वायु तत्व के प्रतीक हैं फिर आग में तपाकर बनाया जाता है। भारतीय संस्कृति में पानी को ही परब्रह्म माना गया है, क्योंकि जल ही सब जीवों की उत्पत्ति का केंद्र है। इस तरह मिट्टी के करवे से पानी पिलाकर पति पत्नी अपने रिश्ते में पंच तत्व और परमात्मा दोनों को साक्षी बनाकर अपने दाम्पत्य जीवन को सुखी बनाने की कामना करते हैं। ', null, null, 'Admin', '2016-10-19', 'Yes');
INSERT INTO `nair_artical` VALUES ('17', 'adfadf', '<p>asdfasdfasdf</p>\r\n', 'Artical_Thumb__28-May-2017__9940.jpg', 'Artical_Pic__34504__28-May-2017.jpg', 'Admin', '2017-05-28', 'Yes');
INSERT INTO `nair_artical` VALUES ('18', 'इन 4 कामों से दूर होती है नकारात्मकता और मिल सकती है सफलता', 'परंपराओं के अनुसार कुछ ऐसे काम बताए गए हैं जो नियमित रूप से करते रहने पर हमारे घर की नकारात्मकता दूर हो सकती है। नकारात्मकता की वजह से हमारी सोच भी नकारात्मक हो जाती है, जिससे कार्यों में बाधाओं का सामना करना पड़ता है। यहां जानिए घर की नकारात्मकता दूर करने के लिए घर में कौन-कौन से काम करते रहना चाहिए', 'Artical_Thumb__28-May-2017__9241.jpg', 'Artical_Pic__63894__28-May-2017.jpg', 'Admin', '2017-05-28', 'Yes');
INSERT INTO `nair_artical` VALUES ('19', 'test', '<p>test</p>\r\n', 'Artical_Thumb__29-May-2017__9448.jpg', 'Artical_Pic__73042__29-May-2017.jpg', 'Admin', '2017-05-29', 'Yes');
INSERT INTO `nair_artical` VALUES ('20', 'sss', '<p>sss</p>\r\n', 'Artical_Thumb__29-May-2017__9994.jpg', 'Artical_Pic__10966__29-May-2017.jpg', 'Admin', '2017-05-29', 'Yes');
INSERT INTO `nair_artical` VALUES ('21', 'ddd', '<p>dd</p>\r\n', 'Artical_Thumb__29-May-2017__9291.jpg', 'Artical_Pic__51621__29-May-2017.jpg', 'Admin', '2017-05-29', 'Yes');
INSERT INTO `nair_artical` VALUES ('22', 'aa', '<p>aaa</p>\r\n', 'Artical_Thumb__29-May-2017__9098.jpg', 'Artical_Pic__81683__29-May-2017.jpg', 'Admin', '2017-05-29', 'Yes');
INSERT INTO `nair_artical` VALUES ('23', 'dd', 'हिंदू परंपरा के अंतर्गत का', 'Artical_Thumb__29-May-2017__9272.jpg', 'Artical_Pic__64273__29-May-2017.jpg', 'Admin', '2017-05-29', 'Yes');
INSERT INTO `nair_artical` VALUES ('24', 'ff', 'सामना करना पड़ता है। यहां जानिए घर की नकारात्मकता दूर करने के लिए घर में कौन-कौन से काम करते रहना चाहिए', 'Artical_Thumb__29-May-2017__9585.jpg', 'Artical_Pic__80166__29-May-2017.jpg', 'Admin', '2017-05-29', 'Yes');

-- ----------------------------
-- Table structure for `nair_citymst`
-- ----------------------------
DROP TABLE IF EXISTS `nair_citymst`;
CREATE TABLE `nair_citymst` (
  `City_Id` int(11) NOT NULL AUTO_INCREMENT,
  `CityName` varchar(222) DEFAULT NULL,
  PRIMARY KEY (`City_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nair_citymst
-- ----------------------------
INSERT INTO `nair_citymst` VALUES ('1', 'आबू रोड');
INSERT INTO `nair_citymst` VALUES ('2', 'अहमदाबाद');
INSERT INTO `nair_citymst` VALUES ('3', 'आहोर');
INSERT INTO `nair_citymst` VALUES ('4', 'आमेट');
INSERT INTO `nair_citymst` VALUES ('5', 'बालोतरा');
INSERT INTO `nair_citymst` VALUES ('6', 'बावड़ी');
INSERT INTO `nair_citymst` VALUES ('7', 'बेडा');
INSERT INTO `nair_citymst` VALUES ('8', 'भाभर');
INSERT INTO `nair_citymst` VALUES ('9', 'बीकानेर');
INSERT INTO `nair_citymst` VALUES ('10', 'बिलाडा');
INSERT INTO `nair_citymst` VALUES ('11', 'बोरुन्दा');
INSERT INTO `nair_citymst` VALUES ('12', 'चान्दराई');
INSERT INTO `nair_citymst` VALUES ('13', 'चितोडगढ़');
INSERT INTO `nair_citymst` VALUES ('14', 'देहली');
INSERT INTO `nair_citymst` VALUES ('15', 'देसुरी');
INSERT INTO `nair_citymst` VALUES ('16', 'डीसा');
INSERT INTO `nair_citymst` VALUES ('17', 'फतहनगर');
INSERT INTO `nair_citymst` VALUES ('18', 'गोटन');
INSERT INTO `nair_citymst` VALUES ('19', 'हरजी');
INSERT INTO `nair_citymst` VALUES ('20', 'जालोर');
INSERT INTO `nair_citymst` VALUES ('21', 'जसोल');
INSERT INTO `nair_citymst` VALUES ('22', 'जेतारण');
INSERT INTO `nair_citymst` VALUES ('23', 'जोधपुर');
INSERT INTO `nair_citymst` VALUES ('24', 'कांकरोली');
INSERT INTO `nair_citymst` VALUES ('25', 'कलडवास');
INSERT INTO `nair_citymst` VALUES ('26', 'कल्याणपुरा');
INSERT INTO `nair_citymst` VALUES ('27', 'कपासन');
INSERT INTO `nair_citymst` VALUES ('28', 'केसरियाजी');
INSERT INTO `nair_citymst` VALUES ('29', 'किशनगढ़');
INSERT INTO `nair_citymst` VALUES ('30', 'मंगलवाड');
INSERT INTO `nair_citymst` VALUES ('31', 'मारवाड़  जंक्शन');
INSERT INTO `nair_citymst` VALUES ('32', 'मावली');
INSERT INTO `nair_citymst` VALUES ('33', 'मेड़ता सीटी');
INSERT INTO `nair_citymst` VALUES ('34', 'मुंडवा');
INSERT INTO `nair_citymst` VALUES ('35', 'नागोर');
INSERT INTO `nair_citymst` VALUES ('36', 'नाना');
INSERT INTO `nair_citymst` VALUES ('37', 'नाथदवारा');
INSERT INTO `nair_citymst` VALUES ('38', 'निम्बाज');
INSERT INTO `nair_citymst` VALUES ('39', 'निम्बडी');
INSERT INTO `nair_citymst` VALUES ('40', 'पाली');
INSERT INTO `nair_citymst` VALUES ('41', 'पिण्डवाडा');
INSERT INTO `nair_citymst` VALUES ('42', 'पीपाड़ सीटी');
INSERT INTO `nair_citymst` VALUES ('43', 'रेलमगरा');
INSERT INTO `nair_citymst` VALUES ('44', 'रानावास');
INSERT INTO `nair_citymst` VALUES ('45', 'रानी स्टेशन');
INSERT INTO `nair_citymst` VALUES ('46', 'रायपुर');
INSERT INTO `nair_citymst` VALUES ('47', 'रोहिट');
INSERT INTO `nair_citymst` VALUES ('48', 'सादडी');
INSERT INTO `nair_citymst` VALUES ('49', 'सरवार');
INSERT INTO `nair_citymst` VALUES ('50', 'सेवाडी');
INSERT INTO `nair_citymst` VALUES ('51', 'सिंदरी');
INSERT INTO `nair_citymst` VALUES ('52', 'सिरोही');
INSERT INTO `nair_citymst` VALUES ('53', 'सोजत सीटी');
INSERT INTO `nair_citymst` VALUES ('54', 'सोजत रोड');
INSERT INTO `nair_citymst` VALUES ('55', 'सोमेसर');
INSERT INTO `nair_citymst` VALUES ('56', 'सुमेरपुर');
INSERT INTO `nair_citymst` VALUES ('57', 'सूरत');
INSERT INTO `nair_citymst` VALUES ('58', 'सुरेन्द्र नगर');
INSERT INTO `nair_citymst` VALUES ('59', 'तखतगढ़');
INSERT INTO `nair_citymst` VALUES ('60', 'तिवरी');
INSERT INTO `nair_citymst` VALUES ('61', 'उदयपुर');
INSERT INTO `nair_citymst` VALUES ('62', 'ब्यावर');
INSERT INTO `nair_citymst` VALUES ('63', 'कुकरवारा');
INSERT INTO `nair_citymst` VALUES ('64', 'रामदेवरा');
INSERT INTO `nair_citymst` VALUES ('65', 'सांचोर');

-- ----------------------------
-- Table structure for `nair_comment`
-- ----------------------------
DROP TABLE IF EXISTS `nair_comment`;
CREATE TABLE `nair_comment` (
  `Cmt_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Temp_Id` int(11) DEFAULT NULL,
  `Aarti_Id` int(11) DEFAULT NULL,
  `Art_Id` int(11) DEFAULT NULL,
  `Video_Id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `Cmt_Type` varchar(222) DEFAULT NULL,
  `Cmt_On_Post` text,
  `Comment_Dtl` text,
  `Cmt_Date` date DEFAULT NULL,
  `Active` enum('No','Yes') DEFAULT 'No',
  PRIMARY KEY (`Cmt_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nair_comment
-- ----------------------------
INSERT INTO `nair_comment` VALUES ('1', '1', null, null, null, '1', 'मंदिर', 'आशापुरा माता', 'बहुत अच्छा', '2016-08-01', 'Yes');
INSERT INTO `nair_comment` VALUES ('2', '1', null, null, null, '2', 'मंदिर', 'आशापुरा माता', '<p>बहुत अच्छा है | hmmm</p>\r\n', '2016-08-01', 'Yes');
INSERT INTO `nair_comment` VALUES ('3', null, null, '9', null, '1', 'आर्टिकल', 'बसंत पंचमी का महत्तव ', 'Helloo very Nice', '2016-08-01', 'Yes');
INSERT INTO `nair_comment` VALUES ('4', null, null, '10', null, '3', 'आर्टिकल', 'राहु-केतु से जुड़ी 10 बातें, जो अधिकतर लोग नहीं जानते हैं', 'बहुत अच्छा', '2016-08-02', 'Yes');
INSERT INTO `nair_comment` VALUES ('5', '1', null, null, null, '2', 'मंदिर', 'आशापुरा माता', 'अच्छा', '2016-08-02', 'Yes');
INSERT INTO `nair_comment` VALUES ('6', null, null, '10', null, '2', 'आर्टिकल', 'राहु-केतु से जुड़ी 10 बातें, जो अधिकतर लोग नहीं जानते हैं', 'बहुत अच्छा', '2016-08-02', 'Yes');
INSERT INTO `nair_comment` VALUES ('7', '2', null, null, null, '1', 'मंदिर', 'आशापुरा माता', 'मस्त', '2016-08-03', 'Yes');
INSERT INTO `nair_comment` VALUES ('8', null, '3', null, null, '1', 'आरती', 'श्री हनुमानजी की आरती', 'बहुत अच्छा', '2016-08-03', 'Yes');

-- ----------------------------
-- Table structure for `nair_news`
-- ----------------------------
DROP TABLE IF EXISTS `nair_news`;
CREATE TABLE `nair_news` (
  `News_Id` int(11) NOT NULL AUTO_INCREMENT,
  `NewsTitle` varchar(222) DEFAULT NULL,
  `NewsDtl` text,
  `Post_By` varchar(222) DEFAULT NULL,
  `Post_Date` date DEFAULT NULL,
  `News_Img` varchar(150) DEFAULT NULL,
  `News_Thumb` varchar(250) DEFAULT NULL,
  `Active` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`News_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nair_news
-- ----------------------------
INSERT INTO `nair_news` VALUES ('1', 'आशापुरा माता', 'नाडोल शहर (जिला पाली,राजस्थान) का नगर रक्षक लक्ष्मण हमेशा की तरह उस रात भी अपनी नियमित गश्त पर था। नगर की परिक्रमा करते करते लक्ष्मण प्यास बुझाने हेतु नगर के बाहर समीप ही बहने वाली भारमली नदी के तट पर जा पहुंचा। पानी पीने के बाद नदी किनारे बसी चरवाहों की बस्ती पर जैसे लक्ष्मण ने अपनी सतर्क नजर डाली, तब एक झोंपड़ी पर हीरों के चमकते प्रकाश ने आकर्षित किया। वह तुरंत झोंपड़ी के पास पहुंचा और वहां रह रहे चरवाहे को बुला प्रकाशित हीरों का राज पूछा। चरवाह भी प्रकाश देख अचंभित हुआ और झोंपड़ी पर रखा वस्त्र उतारा। वस्त्र में हीरे चिपके देख चरवाह के आश्चर्य की सीमा नहीं रही, उसे समझ ही नहीं आया कि जिस वस्त्र को उसने झोपड़ी पर डाला था, उस पर तो जौ के दाने चिपके थे।\r\n', 'Admin', '2016-07-29', 'News_Img_64419_29-Jul-2016.jpg', null, 'Yes');
INSERT INTO `nair_news` VALUES ('2', 'खिंवाडा बालाजी', 'खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी खिंवाडा बालाजी ', 'Admin', '2016-07-29', 'News_Img_79370_29-Jul-2016.jpg', null, 'Yes');
INSERT INTO `nair_news` VALUES ('5', 'sasdad', 'asdasdasd', 'Admin', '2016-07-29', 'News_Img_78284_29-Jul-2016.jpg', null, 'Yes');

-- ----------------------------
-- Table structure for `nair_slider`
-- ----------------------------
DROP TABLE IF EXISTS `nair_slider`;
CREATE TABLE `nair_slider` (
  `Slide_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Slider_Text` text,
  `Slider_Img` varchar(222) DEFAULT NULL,
  `Slider_Thumb` varchar(250) DEFAULT NULL,
  `Active` enum('No','Yes') DEFAULT NULL,
  PRIMARY KEY (`Slide_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nair_slider
-- ----------------------------
INSERT INTO `nair_slider` VALUES ('1', '<p>बुरे वक्त में कठिन परिश्रम कीजिए, परिश्रम करने से</p>\r\n\r\n<p>आपका वक्त भी आसानी से कटेगा और बुरे दौर से भी</p>\r\n\r\n<p>आप निखर कर बाहर निकलेंगे.</p>\r\n', '20-Jun-2017__Slider_Pic__52539.png', '20-Jun-2017__Slider_Thumb__9914.png', 'Yes');
INSERT INTO `nair_slider` VALUES ('2', '<p>यदि कोई दुर्बल मानव तुम्हारा अपमान करे तो उसे क्षमा कर दो,</p>\r\n\r\n<p>क्योंकि क्षमा करना ही वीरों का काम है, परंतु यदि</p>\r\n\r\n<p>अपमान करने वाला बलवान हो तो उसको अवश्य दण्ड दो.</p>\r\n', '20-Jun-2017__Slider_Pic__26723.jpg', '20-Jun-2017__Slider_Thumb__9619.jpg', 'Yes');
INSERT INTO `nair_slider` VALUES ('3', '<p>गाछा समाज सुमेरपुर की तरफ से सभी समाज की महिलाओ को</p>\r\n\r\n<p>करवा चोथ की हार्दिक शुभकामनाए</p>\r\n', '22-Jun-2017__Slider_Pic__64009.jpg', '22-Jun-2017__Slider_Thumb__9444.jpg', 'Yes');

-- ----------------------------
-- Table structure for `nair_slider_copy`
-- ----------------------------
DROP TABLE IF EXISTS `nair_slider_copy`;
CREATE TABLE `nair_slider_copy` (
  `Slide_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Slider_Text` text,
  `Slider_Img` varchar(222) DEFAULT NULL,
  `Slider_Thumb` varchar(250) DEFAULT NULL,
  `Active` enum('No','Yes') DEFAULT NULL,
  PRIMARY KEY (`Slide_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nair_slider_copy
-- ----------------------------
INSERT INTO `nair_slider_copy` VALUES ('1', '<p>बुरे वक्त में कठिन परिश्रम कीजिए, परिश्रम करने से</p>\r\n\r\n<p>आपका वक्त भी आसानी से कटेगा और बुरे दौर से भी</p>\r\n\r\n<p>आप निखर कर बाहर निकलेंगे.</p>\r\n', 'Home_Slider_47017_05-Sep-2016.png', null, 'Yes');
INSERT INTO `nair_slider_copy` VALUES ('2', '<p>यदि कोई दुर्बल मानव तुम्हारा अपमान करे तो उसे क्षमा कर दो,</p>\r\n\r\n<p>क्योंकि क्षमा करना ही वीरों का काम है, परंतु यदि</p>\r\n\r\n<p>अपमान करने वाला बलवान हो तो उसको अवश्य दण्ड दो.</p>\r\n', 'Home_Slider_32672_24-Aug-2016.jpg', null, 'Yes');
INSERT INTO `nair_slider_copy` VALUES ('3', '<p>गाछा समाज सुमेरपुर की तरफ से सभी समाज की महिलाओ को</p>\r\n\r\n<p>करवा चोथ की हार्दिक शुभकामनाए</p>\r\n', 'Home_Slider_67190_19-Oct-2016.jpg', null, 'Yes');

-- ----------------------------
-- Table structure for `nair_temple`
-- ----------------------------
DROP TABLE IF EXISTS `nair_temple`;
CREATE TABLE `nair_temple` (
  `Temp_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Temp_Name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VillageName` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Dist_Name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Temp_Dtl` text COLLATE utf8_unicode_ci,
  `Temp_Thumb` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Temp_Img` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Post_By` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Post_Date` date DEFAULT NULL,
  `Active` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Temp_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of nair_temple
-- ----------------------------
INSERT INTO `nair_temple` VALUES ('1', 'आशापुरा माता', 'नाडोल', 'Pali', '<p>नाडोल शहर (जिला पाली,राजस्थान) का नगर रक्षक लक्ष्मण हमेशा की तरह उस रात भी अपनी नियमित गश्त पर था। नगर की परिक्रमा करते करते लक्ष्मण प्यास बुझाने हेतु नगर के बाहर समीप ही बहने वाली भारमली नदी के तट पर जा पहुंचा। पानी पीने के बाद नदी किनारे बसी चरवाहों की बस्ती पर जैसे लक्ष्मण ने अपनी सतर्क नजर डाली, तब एक झोंपड़ी पर हीरों के चमकते प्रकाश ने आकर्षित किया। वह तुरंत झोंपड़ी के पास पहुंचा और वहां रह रहे चरवाहे को बुला प्रकाशित हीरों का राज पूछा। चरवाह भी प्रकाश देख अचंभित हुआ और झोंपड़ी पर रखा वस्त्र उतारा। वस्त्र में हीरे चिपके देख चरवाह के आश्चर्य की सीमा नहीं रही, उसे समझ ही नहीं आया कि जिस वस्त्र को उसने झोपड़ी पर डाला था, उस पर तो जौ के दाने चिपके थे।</p>\r\n\r\n<p>लक्ष्मण द्वारा पूछने पर चरवाहे ने बताया कि वह पहाड़ी की कन्दरा में रहने वाली एक वृद्ध महिला की गाय चराता है। आज उस महिला ने गाय चराने की मजदूरी के रूप में उसे कुछ जौ दिए थे। जिसे वह बनिये को दे आया, कुछ इसके चिपक गए, जो हीरे बन गये। लक्ष्मण उसे लेकर बनिए के पास गया और बनिए हीरे बरामद वापस ग्वाले को दे दिये। लक्ष्मण इस चमत्कार से विस्मृत था अतः उसने ग्वाले से कहा- अभी तो तुम जाओ, लेकिन कल सुबह ही मुझे उस कन्दरा का रास्ता बताना जहाँ वृद्ध महिला रहती है।</p>\r\n\r\n<p>दुसरे दिन लक्ष्मण जैसे ही ग्वाले को लेकर कन्दरा में गया, कन्दरा के आगे समतल भूमि पर उनकी और पीठ किये वृद्ध महिला गाय का दूध निकाल रही थी। उसने बिना देखे लक्ष्मण को पुकारा- &ldquo;लक्ष्मण, राव लक्ष्मण आ गये बेटा, आओ।&rdquo;<br />\r\nआवाज सुनते ही लक्ष्मण आश्चर्यचकित हो गया और उसका शरीर एक अद्भुत प्रकाश से नहा उठा। उसे तुरंत आभास हो गया कि यह वृद्ध महिला कोई और नहीं, उसकी कुलदेवी माँ शाकम्भरी ही है। और लक्ष्मण सीधा माँ के चरणों में गिरने लगा, तभी आवाज आई- मेरे लिए क्या लाये हो बेटा? बोलो मेरे लिए क्या लाये हो?<br />\r\nलक्ष्मण को माँ का मर्मभरा उलाहना समझते देर नहीं लगी और उसने तुरंत साथ आये ग्वाला का सिर काट माँ के चरणों में अर्पित कर दिया।</p>\r\n\r\n<p><br />\r\nलक्ष्मण द्वारा प्रस्तुत इस अनोखे उपहार से माँ ने खुश होकर लक्ष्मण से वर मांगने को कहा। लक्ष्मण ने माँ से कहा- माँ आपने मुझे राव संबोधित किया है, अतः मुझे राव (शासक) बना दो ताकि मैं दुष्टों को दंड देकर प्रजा का पालन करूँ, मेरी जब इच्छा हो आपके दर्शन कर सकूं और इस ग्वाले को पुनर्जीवित कर देने की कृपा करें। वृद्ध महिला &ldquo;तथास्तु&rdquo; कह कर अंतर्ध्यान हो गई। जिस दिन यह घटना घटी वह वि.स. 1000, माघ सुदी 2 का दिन था। इसके बाद लक्ष्मण नाडोल शहर की सुरक्षा में तन्मयता से लगा रहा।</p>\r\n\r\n<p>उस जमाने में नाडोल एक संपन्न शहर था। अतः मेदों की लूटपाट से त्रस्त था। लक्ष्मण के आने के बाद मेदों को तकड़ी चुनौती मिलने लगी। नगरवासी अपने आपको सुरक्षित महसूस करने लगे। एक दिन मेदों ने संगठित होकर लक्ष्मण पर हमला किया। भयंकर युद्ध हुआ। मेद भाग गए, लक्ष्मण ने उनका पहाड़ों में पीछा किया और मेदों को सबक सिखाने के साथ ही खुद घायल होकर अर्धविक्षिप्त हो गया। मूर्छा टूटने पर लक्ष्मण ने माँ को याद किया। माँ को याद करते ही लक्ष्मण का शरीर तरोताजा हो गया, सामने माँ खड़ी थी बोली- बेटा ! निराश मत हो, शीघ्र ही मालव देश से असंख्य घोड़ेे तेरे पास आयेंगे। तुम उन पर केसरमिश्रित जल छिड़क देना। घोड़ों का प्राकृतिक रंग बदल जायेगा। उनसे अजेय सेना तैयार करो और अपना राज्य स्थापित करो।</p>\r\n\r\n<p>अगले दिन माँ का कहा हुआ सच हुआ। असंख्य घोड़े आये। लक्ष्मण ने केसर मिश्रित जल छिड़का, घोड़ों का रंग बदल गया। लक्ष्मण ने उन घोड़ों की बदौलत सेना संगठित की। इतिहासकार डा. दशरथ शर्मा इन घोड़ों की संख्या 12000 हजार बताते है तो मुंहता नैंणसी ने इन घोड़ों की संख्या 13000 लिखी है। अपनी नई सेना के बल पर लक्ष्मण ने लुटरे मेदों का सफाया किया। जिससे नाडोल की जनता प्रसन्न हुई और उसका अभिनंदन करते हुए नाडोल के अयोग्य शासक सामंतसिंह चावड़ा को सिंहासन से उतार लक्ष्मण को सिंहासन पर आरूढ कर पुरस्कृत किया।</p>\r\n', null, 'Temp_Img_49736_29-Jul-2016.jpg', 'Admin', '2016-07-29', 'Yes');
INSERT INTO `nair_temple` VALUES ('2', 'खिवाडा बालाजी', 'खिवाडा', 'Pali', 'खिवाडा बालाजी', null, null, 'Admin', '2016-07-29', 'Yes');
INSERT INTO `nair_temple` VALUES ('4', 'asdfasdf', 'asdfasdf', 'Kota', '<p>&lt;p&gt;asdfasdfasdf&lt;/p&gt;</p>\r\n', '27-May-2017Temple_Pic9464__Thumb__.jpg', '27-May-2017Temple_Pic9464.jpg', null, null, 'Yes');
INSERT INTO `nair_temple` VALUES ('5', 'राजस्थान का ताजमहल: यहां विष्णु ने लिया था अवतार, नाखून से बनाई थी झील', 'Rani', 'Pali', '<p>कहा जाता है कि यहां पर एक अवतारी पुरुष ने जन्म लिया था, स्थानीय मान्यताओं में उस अवतार को भगवान विष्णु का अंश माना जाता है। यह मंदिर कलाकृति और शिल्प का बेजोड़ नमूना हैं। इसे देखने के लिए लाखों लोग दुनिया के अलग-अलग हिस्सों से आते हैं।</p>\r\n\r\n<h4><strong>कहां है ये अद्भुत मंदिर</strong></h4>\r\n\r\n<p>माउंट आबू में बना ये मंदिर दिलवाड़ा के जैन मंदिर के नाम से जाना जाता है। यहां कुल पांच मंदिरों का समूह जरुर है लेकिन यहां के तीन मंदिर खास हैं। आपको बता दें दिलवाड़ा का ये मंदिर 48 खंभों पर टिका हुआ है। इसकी खूबसूरती और नक्काशी के कारण इसे राजस्थान का ताज महल भी कहा जाता है। इस मंदिर की एक-एक दीवार पर बेहग सुंदर कालाकारी और नक्काशी की गई है, जो अपना इतिहास बताती हैं। इस मंदिर से जुड़ी कई कहानियां और कई मान्यताएं हैं, जो अपने आप में अनोखी है।</p>\r\n', '27-May-2017Temple_Pic9641__Thumb__.jpg', '27-May-2017Temple_Pic9641.jpg', 'Admin', null, 'Yes');
INSERT INTO `nair_temple` VALUES ('6', 'asdfasdfa', 'asdf', 'Nagaur', '<p>asdfasdfa</p>\r\n', '27-May-2017Temple_Pic9519__Thumb__.jpg', '27-May-2017Temple_Pic9519.jpg', 'Admin', null, 'Yes');
INSERT INTO `nair_temple` VALUES ('7', 'asdfsa', 'asdfa', 'Pali', '<p>asdfasdf</p>\r\n', '27-May-2017__Temple_Pic__9154__Thumb__.jpg', '27-May-2017__Temple_Pic__9531.jpg', 'Admin', null, 'Yes');
INSERT INTO `nair_temple` VALUES ('8', 'asdfasdfa', 'asdfa', 'Nagaur', '<p>asdfasdf</p>\r\n', '27-May-2017__Temple_Pic__9531__Thumb__.jpg', '27-May-2017__Temple_Pic__9531.jpg', 'Admin', null, 'Yes');
INSERT INTO `nair_temple` VALUES ('9', 'AAAAA', 'aa', 'Udaipur', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', 'Thumb__.jpg', '27-May-2017__Temple_Pic__9228.jpg', 'Admin', null, 'No');
INSERT INTO `nair_temple` VALUES ('10', 'aaa', 'aaa', 'Kota', '<p>sdffsdfsdfsdfsdfsdfsdfsdfsdsdfsdf</p>\r\n', '27-May-2017__Temp_Thumb__9091.jpg', '27-May-2017__Temple_Pic__9969.jpg', 'Admin', null, 'Yes');

-- ----------------------------
-- Table structure for `nair_video`
-- ----------------------------
DROP TABLE IF EXISTS `nair_video`;
CREATE TABLE `nair_video` (
  `Video_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Video_Name` varchar(222) DEFAULT NULL,
  `Video_Cat` varchar(111) DEFAULT NULL,
  `Video_Link` varchar(222) DEFAULT NULL,
  `Video_File` varchar(111) DEFAULT NULL,
  `Video_Dtl` text,
  `Post_By` varchar(200) DEFAULT NULL,
  `Video_Date` date DEFAULT NULL,
  `Active` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`Video_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nair_video
-- ----------------------------
INSERT INTO `nair_video` VALUES ('1', 'मरुधर मैं ज्योत', 'Marwadi', 'https://www.youtube.com/watch?v=t0OxcT55S6A', null, '<p>मरुधर मैं ज्योत</p>\r\n', 'Admin', '2016-08-24', 'Yes');
INSERT INTO `nair_video` VALUES ('2', 'ले हाथा तलवार भवानी | सुमेरपुर 2016', 'Local City', 'https://www.youtube.com/watch?v=SJL__21NouQ', null, '<p>ले हाथा तलवार भवानी</p>\r\n', 'Admin', '2016-08-24', 'Yes');
INSERT INTO `nair_video` VALUES ('3', 'कृष्ण भजन', 'Hindi', 'https://www.youtube.com/watch?v=Hj4zrNI9bcU', null, 'कृष्ण भजन\r\n', 'Admin', '2016-08-24', 'Yes');
INSERT INTO `nair_video` VALUES ('4', 'चारभुजाजी में नाचे गोरी', 'Hindi', 'https://www.youtube.com/watch?v=11gKDhfCv_U', null, 'चारभुजाजी में नाचे गोरी', 'Admin', '2016-08-24', 'Yes');
INSERT INTO `nair_video` VALUES ('5', 'राधे राधे बोल (देवी चित्रकेखा )', 'Hindi', 'https://www.youtube.com/watch?v=mZPSHAKR_9c', null, 'राधे राधे बोल (देवी चित्रकेखा )', 'Admin', '2017-06-22', 'Yes');
INSERT INTO `nair_video` VALUES ('6', 'हनुमान चालीसा - अमेय दाते | जय हनुमान ज्ञान गुण सागर', 'Hindi', 'https://www.youtube.com/watch?v=e_5jx52UeZ4', null, 'मंगल भवन अमंगल हारी द्रुबहू सु दसरथ अजर बिहारी (राम सिया राम )', 'Admin', '2017-06-22', 'Yes');
INSERT INTO `nair_video` VALUES ('7', 'दुनिया चले न श्री राम के बिना', 'Hindi', 'https://www.youtube.com/watch?v=ZbRrAk7H3-o', null, 'सुपरहिट हनुमान भजन| दुनिया चले न श्री राम के बिना', 'Admin', '2017-06-22', 'Yes');
INSERT INTO `nair_video` VALUES ('8', 'जन्मे अवध में राम', 'Hindi', 'https://www.youtube.com/watch?v=bMFxDbXfkTU', null, 'जन्मे अवध में राम मंगल गोओं रे.....', 'Admin', '2017-06-22', 'Yes');
INSERT INTO `nair_video` VALUES ('9', 'कबीर अमृतवाणी ', 'Hindi', 'https://www.youtube.com/watch?v=AzrhxfBXWK8', null, 'कबीर अमृतवाणी ', 'Admin', '2017-06-22', 'Yes');
INSERT INTO `nair_video` VALUES ('10', 'उड़ जा हंस अकेला', 'Hindi', 'https://www.youtube.com/watch?v=OzZZ5y5ZsfA', null, 'उड़ जा हंस अकेला......', 'Admin', '2017-06-22', 'Yes');
INSERT INTO `nair_video` VALUES ('11', ' || श्री चारभुजा रो नाथ || चारभुजा भजन 2017', 'Marwadi', 'https://www.youtube.com/watch?v=m3uLxvPGhF4', null, ' || श्री चारभुजा रो नाथ || चारभुजा भजन 2017', 'Admin', '2017-06-22', 'Yes');

-- ----------------------------
-- Table structure for `nair_video_copy`
-- ----------------------------
DROP TABLE IF EXISTS `nair_video_copy`;
CREATE TABLE `nair_video_copy` (
  `Video_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Video_Name` varchar(222) DEFAULT NULL,
  `Video_Cat` varchar(111) DEFAULT NULL,
  `Video_Link` varchar(222) DEFAULT NULL,
  `Video_File` varchar(111) DEFAULT NULL,
  `Video_Dtl` text,
  `Post_By` varchar(200) DEFAULT NULL,
  `Video_Date` date DEFAULT NULL,
  `Active` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`Video_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nair_video_copy
-- ----------------------------
INSERT INTO `nair_video_copy` VALUES ('1', 'मरुधर मैं ज्योत', 'Marwadi', 't0OxcT55S6A', null, '<p>मरुधर मैं ज्योत</p>\r\n', 'Admin', '2016-08-24', 'Yes');
INSERT INTO `nair_video_copy` VALUES ('2', 'ले हाथा तलवार भवानी | सुमेरपुर 2016', 'Local', 'SJL__21NouQ', null, '<p>ले हाथा तलवार भवानी</p>\r\n', 'Admin', '2016-08-24', 'Yes');
INSERT INTO `nair_video_copy` VALUES ('3', 'कृष्ण भजन', 'Hindi', 'Hj4zrNI9bcU', null, '<p>कृष्ण भजन</p>\r\n', 'Admin', '2016-08-24', 'Yes');
INSERT INTO `nair_video_copy` VALUES ('4', 'चारभुजाजी में नाचे गोरी ', 'Marwadi', '11gKDhfCv_U', null, '<p>चारभुजाजी में नाचे गोरी</p>\r\n', 'Admin', '2016-08-24', 'Yes');

-- ----------------------------
-- Table structure for `state`
-- ----------------------------
DROP TABLE IF EXISTS `state`;
CREATE TABLE `state` (
  `StateId` int(11) NOT NULL DEFAULT '0',
  `StateName` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`StateId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of state
-- ----------------------------
INSERT INTO `state` VALUES ('1', 'Rajathan');
INSERT INTO `state` VALUES ('2', 'Uttar Pradesh');
INSERT INTO `state` VALUES ('3', 'Himachal Pradesh');
INSERT INTO `state` VALUES ('4', 'Madhya Pradesh');
INSERT INTO `state` VALUES ('5', 'Punjab');
INSERT INTO `state` VALUES ('6', 'Hariyana');
INSERT INTO `state` VALUES ('7', 'Gujarat');
INSERT INTO `state` VALUES ('8', 'Delhi');
INSERT INTO `state` VALUES ('9', 'Maharashtra');
INSERT INTO `state` VALUES ('10', 'Andhra Pradesh');
INSERT INTO `state` VALUES ('11', 'Chhattisgarh');

-- ----------------------------
-- Table structure for `tbl_about`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_about`;
CREATE TABLE `tbl_about` (
  `About_Id` int(11) NOT NULL AUTO_INCREMENT,
  `About_Name` varchar(222) DEFAULT NULL,
  `About_Phone` varchar(111) DEFAULT NULL,
  `About_Pic` varchar(111) DEFAULT NULL,
  `Active` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`About_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_about
-- ----------------------------
INSERT INTO `tbl_about` VALUES ('1', 'नरपत सिसोदिया', '9782302208', null, 'Yes');
INSERT INTO `tbl_about` VALUES ('2', 'राजेन्द्र सिसोदिया', '9001491242', null, 'Yes');
INSERT INTO `tbl_about` VALUES ('3', 'मुकेश सोलंकी', '9928682634', null, 'Yes');
INSERT INTO `tbl_about` VALUES ('4', 'अमृत सिसोदिया', '9602682121', null, 'Yes');
INSERT INTO `tbl_about` VALUES ('5', 'लाल सिंह सिसोदिया', '7728929570', null, 'Yes');
INSERT INTO `tbl_about` VALUES ('6', 'आकाश नायर 123', '2780 sdsd', 'About_Pic_88582_24-Aug-2016.jpg', 'No');

-- ----------------------------
-- Table structure for `tbl_female`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_female`;
CREATE TABLE `tbl_female` (
  `FM_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Main_Id` int(11) DEFAULT NULL,
  `FM_Name` varchar(255) DEFAULT NULL,
  `Relation_Type` varchar(255) DEFAULT NULL,
  `FM_Dob` varchar(3) DEFAULT NULL,
  `FM_Hubby` varchar(255) DEFAULT NULL,
  `FM_Fathere` varchar(255) DEFAULT NULL,
  `FM_PiharPlace` varchar(255) DEFAULT NULL,
  `FM_Education` varchar(255) DEFAULT NULL,
  `FM_JobType` varchar(255) DEFAULT NULL,
  `FM_Phone` varchar(255) DEFAULT NULL,
  `FM_OtherDtl` text,
  `FM_Pic` varchar(222) DEFAULT NULL,
  `Fm_Thumb_Pic` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`FM_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_female
-- ----------------------------
INSERT INTO `tbl_female` VALUES ('1', '1', 'किरण कँवर', 'Wife', '56', 'रामेश्वर सिंह जी', 'पृथ्वीराज जी सिसोदिया', 'दिली', 'X', 'गृहणी', '', '', 'Woman_Pic_61231__26_Jul_2016.jpg', null);
INSERT INTO `tbl_female` VALUES ('2', '1', 'रेखा', 'Bahu', '33', 'नटवर सिंह', 'जगदीश जी सिसोदिया', 'पाली', 'VIII', 'गृहणी', '', '', null, null);
INSERT INTO `tbl_female` VALUES ('3', '1', 'कृष्णा', 'Bahu', '23', 'मनीष सिंह', 'पुखराज जी परिहार', 'जोधपुर', 'VIII', 'गृहणी', '', '', 'Woman_Pic_46943__26_Jul_2016.jpg', null);
INSERT INTO `tbl_female` VALUES ('4', '2', 'शांति बाई', 'Mother', '65', 'स्व. जेठमल जी', 'बन्शीलाल जी', 'किशनगढ़', '', 'सास', '', '', 'Woman_Pic_38110__27_Jul_2016.jpg', null);
INSERT INTO `tbl_female` VALUES ('5', '2', 'कमला देवी', 'Wife', '48', 'राजेन्द्र कुमार', 'स्व. बुधमल जी', 'दिसा', '', 'गृहणी', '', '', 'Woman_Pic_34260__27_Jul_2016.jpg', null);
INSERT INTO `tbl_female` VALUES ('6', '2', 'पवन देवी', 'Bahu', '35', 'खिवराज जी', 'स्व. नेन सिंह जी', 'पाली', '', '', '', '', 'Woman_Pic_11667__27_Jul_2016.jpg', null);
INSERT INTO `tbl_female` VALUES ('7', '3', 'संतोष', 'Wife', '38', 'राजेंद्र कुमार सिसोदिया', 'सत्यनारयण जी परिहार', 'उदयपुर', 'BA + Rscit Computer diploma', 'गृहणी', '', '', 'Woman_Pic_80054__03_Aug_2016.jpg', null);
INSERT INTO `tbl_female` VALUES ('8', '4', 'गुणवती कँवर ', 'Wife', '30-', 'शंकर लाल जी ', 'स्व नरसिंह लाल जी परिहार ', 'सुमेरपुर ', 'पाचवी ', 'गहरनी ', '', '', null, null);
INSERT INTO `tbl_female` VALUES ('9', '4', 'सुनीता कन्वर ', 'Bahu', '15-', 'मुकेश सिंह ', 'नारायणलाल जी परिहार ', 'आबूरोड', 'पाचवी ', 'गृहणी', '', '', null, null);
INSERT INTO `tbl_female` VALUES ('10', '4', 'अलका कान्वर ', 'Bahu', '15-', 'राहुल सिंह ', 'जगदीश जी भाटी ', 'सादडी ', 'आठवी ', 'गहरनी ', '', '', null, null);
INSERT INTO `tbl_female` VALUES ('11', '28', 'सोनम', 'Wife', '28', 'Akash', 'Chellappan', 'Udaipur', 'Msc', '2008', '8525254252', '222', null, null);
INSERT INTO `tbl_female` VALUES ('12', '29', 'बाई', 'Wife', '65', 'किशन सिंह जी', 'गनसियाम सिंह जी', 'चितोडगढ', 'पाचवी ', 'गृहणी', '3333', 'Other', null, null);
INSERT INTO `tbl_female` VALUES ('13', '29', 'Test', 'Bahu', '25', 'Test Hubby', 'Test Fathere', 'Test Pihar', '12', 'Pali', '123', 'Hello', null, null);

-- ----------------------------
-- Table structure for `tbl_memchild`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_memchild`;
CREATE TABLE `tbl_memchild` (
  `Child_id` int(11) NOT NULL AUTO_INCREMENT,
  `Meb_id` int(11) DEFAULT NULL,
  `Main_id` int(11) DEFAULT NULL,
  `Ch_Name` varchar(255) DEFAULT NULL,
  `Ch_Father` varchar(255) DEFAULT NULL,
  `Ch_Mother` varchar(255) DEFAULT NULL,
  `Ch_Dob` varchar(255) DEFAULT NULL,
  `Ch_Eduction` varchar(255) DEFAULT NULL,
  `Ch_Phone` varchar(255) DEFAULT NULL,
  `Ch_OtherDtl` text,
  `Ch_Pic` varchar(255) DEFAULT NULL,
  `Ch_Thumb_Pic` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_memchild
-- ----------------------------
INSERT INTO `tbl_memchild` VALUES ('1', '2', '1', 'निखिल', 'नटवर सिंह', 'रेखा देवी', '13', 'VI', '7742456567', 'अन्य विवरण', 'Child_Pic_66175__27_Jul_2016.jpg', null);
INSERT INTO `tbl_memchild` VALUES ('2', '2', '1', 'सुजल', 'नटवर सिंह', 'रेखा देवी', '11', 'V', '', '', 'Child_Pic_63997__27_Jul_2016.jpg', null);
INSERT INTO `tbl_memchild` VALUES ('3', '2', '1', 'तुषार ', 'नटवर सिंह', 'रेखा देवी', '9', 'II', '', '', 'Child_Pic_49517__27_Jul_2016.jpg', null);
INSERT INTO `tbl_memchild` VALUES ('4', '3', '1', 'आयुष', 'मनीष सिंह', 'कृष्णा', '5', 'Lkg', '', '', 'Child_Pic_11889__27_Jul_2016.jpg', null);
INSERT INTO `tbl_memchild` VALUES ('5', '3', '1', 'लोचन कँवर', 'मनीष सिंह', 'कृष्णा', '3', 'Lkg', '', '', 'Child_Pic_53174__27_Jul_2016.jpg', null);
INSERT INTO `tbl_memchild` VALUES ('6', '5', '2', 'लेखराज', 'राजेन्द्र कुमार', 'कमला देवी', '20', 'XII', '7742456567', '', 'Child_Pic_41946__27_Jul_2016.jpg', null);
INSERT INTO `tbl_memchild` VALUES ('7', '5', '2', 'गजराज ', 'राजेन्द्र कुमार', 'कमला देवी', '8', '0', '', 'मंदबुधी', 'Child_Pic_73257__27_Jul_2016.jpg', null);
INSERT INTO `tbl_memchild` VALUES ('8', '5', '2', 'पायल', 'खिवराज जी', 'पवन देवी', '15', '8th', '', '', 'Child_Pic_79720__27_Jul_2016.jpg', null);
INSERT INTO `tbl_memchild` VALUES ('9', '5', '2', 'माया', 'खिवराज जी', 'पवन देवी', '14', 'VII', '', '', 'Child_Pic_71824__27_Jul_2016.jpg', null);
INSERT INTO `tbl_memchild` VALUES ('10', '5', '2', 'गायत्री', 'खिवराज जी', 'पवन देवी', '9', 'III', '', '', 'Child_Pic_75176__27_Jul_2016.jpg', null);
INSERT INTO `tbl_memchild` VALUES ('11', '8', '3', 'नेहा', 'राजेंद्र कुमार सिसोदिया', 'संतोष', '18', '2yr BA', '', '', null, null);
INSERT INTO `tbl_memchild` VALUES ('12', '8', '3', 'निशा', 'राजेंद्र कुमार सिसोदिया', 'संतोष', '17', '2yr BA', '', '', null, null);
INSERT INTO `tbl_memchild` VALUES ('13', '11', '4', 'मान्यता ', 'मुकेश सिंह ', 'सुनीता ', '14-01-2009 ', 'प्रथम ', '', '', null, null);
INSERT INTO `tbl_memchild` VALUES ('14', '11', '4', 'दर्शन सिंह ', 'मुकेश सिंह ', 'सुनीता ', '15-06-2010 ', 'एच के जी ', '', '', null, null);
INSERT INTO `tbl_memchild` VALUES ('15', '12', '4', 'चित्रक्शा', 'राहुल सिंह ', 'अलका ', '14-06-2012 ', 'एल के  जी ', '', '', null, null);
INSERT INTO `tbl_memchild` VALUES ('16', '8', '3', 'नितेश सिंह ', 'राजेंद्र कुमार सिसोदिया', 'संतोष ', '19-10-2001', 'बाहरवी ', '', '', null, null);
INSERT INTO `tbl_memchild` VALUES ('17', '8', '3', 'उर्वशी ', 'राजेंद्र कुमार सिसोदिया', 'संतोष ', '20-08-2003', 'आठवी ', '', '', null, null);
INSERT INTO `tbl_memchild` VALUES ('25', '18', '29', 'a', 'Aakash Nair', 'a', '1', 'a', '', '', null, null);
INSERT INTO `tbl_memchild` VALUES ('26', '18', '29', 'b', 'Aakash Nair', 'b', '2', 'b', '', '', null, null);
INSERT INTO `tbl_memchild` VALUES ('27', '18', '29', 'Hi testin', 'Aakash Nair', 'c', '2', 'c', '', '', null, null);
INSERT INTO `tbl_memchild` VALUES ('28', '17', '29', 'Test Child', 'Test', 'Child', '1', '2', '2780', 'singing\r\n', null, null);

-- ----------------------------
-- Table structure for `tbl_mukhiya`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mukhiya`;
CREATE TABLE `tbl_mukhiya` (
  `Main_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Main_Person` varchar(255) DEFAULT NULL,
  `Father_Hubby` varchar(255) DEFAULT NULL,
  `Mother_Name` varchar(255) DEFAULT NULL,
  `Gotra` varchar(255) DEFAULT NULL,
  `Occupation_Type` varchar(255) DEFAULT NULL,
  `Address` text,
  `District_Name` varchar(255) DEFAULT NULL,
  `City_Place` varchar(255) DEFAULT NULL,
  `Other_Dtl` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(25) DEFAULT NULL,
  `Kuldevi_Place` varchar(222) DEFAULT NULL,
  `Kul_Bhairav` varchar(222) DEFAULT NULL,
  `Jadoliya_Place` varchar(222) DEFAULT NULL,
  `Mukhiya_Ph` varchar(22) DEFAULT NULL,
  `Mukhiya_Email` varchar(150) DEFAULT NULL,
  `Active` enum('Yes','No') DEFAULT 'Yes',
  `Mukhiya_Pic` varchar(255) DEFAULT NULL,
  `Mukhiya_Thumb_Img` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Main_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_mukhiya
-- ----------------------------
INSERT INTO `tbl_mukhiya` VALUES ('1', 'रामेश्वर सिंह जी', 'स्व. देवराज जी', 'स्व. छावरी देवी', 'सोलंकी', 'व्यापार', 'झालामंड, रामबाग, मरुधरा ग्रामीण बैंक रोड, जोधपुर', 'Jodhpur', 'जोधपुर', '', null, 'खिमज माता', 'मंडोर', 'मंडोर', null, '', 'Yes', 'Mukhiya_52126__26-Jul-2016.jpg', null);
INSERT INTO `tbl_mukhiya` VALUES ('2', 'राजेन्द्र कुमार', 'स्व. जेठमल जी ', 'शान्ति बाई', 'सोलंकी', 'बसा बल़िया ', 'अमर चौक, पाल हाउस, घंटाघर, जोधपुर', 'Jodhpur', 'जोधपुर', '', null, 'खिमज माता', 'कला भैरू', 'एकलिंग जी ', null, '', 'Yes', 'Mukhiya_71966__27-Jul-2016.jpg', null);
INSERT INTO `tbl_mukhiya` VALUES ('3', 'राजेंद्र कुमार सिसोदिया ', 'मदन लाल जी ', 'फुल कवर ', 'सिसोदिया', 'ट्रांसपोर्ट ', 'विवेकानंद नगर, हाउसिंग बोर्ड, सीनव तालाब रोड, मज्जिद के पास', 'Pali', 'सुमेरपुर', '', null, 'चामुंडा माता', 'खेतलाजी', 'खेतलाजी, चारभुजा', null, 'rajendrakumarsisodiya91@gmail.com', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('4', 'शंकर लाल जी सोलंकी', 'स्व जोरावर सिंह जी ', 'स्व खमा बाई ', 'सोलंकी ', 'रिटार्यड पूर्व तहसील दार ', 'पीएल मार्केट के पीछे, विकास कोलोनी ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('5', 'विश्वजीत जी सोलंकी ', 'स्व नन्द लाल जी ', 'रामी बाई ', 'सोलंकी ', 'बिसिनेस ', 'टिम्बर मार्केट ', 'Pali', 'सुमेरपुर ', '', null, 'खिमच माता ', 'कुचिपुरा ', 'कुचिपुरा ', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('6', 'सुमेर सिंह ', 'मदन लाल जी ', 'फुल कँवर ', 'सिसोदिया ', 'बिसनेस ', 'विवेकानन्द नगर, हाऊसिंग बोर्ड , मस्जिद के पास, सिनव तालाब रोड ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('7', 'नारायण सिंह जी ', 'स्व समर्थ सिंह जी ', 'स्व वनी बाई ', 'सिसोदिया ', 'मोटरसाइकिल रिपेरिंग कार्य ', 'शिव वाटिका कोलोनी , जालोर चोराहा , बजाज कम्पनी के सामने ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('8', 'विक्रम कुमार भाटी', 'स्व सत्यनारायण जी ', 'सरस्वती देवी', 'भाठी ', 'सरकारी ३ ग्रेड अध्यापक ', 'सुआरो का बॉस , पुलिश थाने के सामने वाली गली ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, 'vikrambhati74@gmail.com', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('9', 'लक्स्मन लाल जी ', 'स्व शंकर लाल जी ', 'स्व गोमती बाई ', 'सिसोदिया ', 'बिसनेस ', 'टिम्बर मार्केट ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('10', 'अमृत लाल ', 'स्व घिसुलाल जी ', 'भगवती देवी ', 'सिसोदिया ', 'बिसनेस ', 'टिम्बर मार्केट ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('11', 'परमोद भाठी ', 'स्व मोहनलाल जी ', 'स्व कलीशी बाई ', 'भाठी ', 'नोकरी ', 'अमरनाथ कोम्प्लेक्स के पीछे , इंद्र पेलेश वाटिका रोड ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('12', 'लाल सिंह  ', 'स्व शेर सिंह जी ', 'गुनेशी बाई ', 'सिसोदिया ', 'मेकेनिक ', 'सेन समाज धर्मशाला के पीछे, उन्दरी ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('13', 'जद्दिश लाल जी ', 'स्व शंकर लाल जी ', 'स्व गोमती बाई ', 'सिसोदिया ', 'बिसनेस ', 'गुदरिया जाव मिल की गली ', 'Pali', '', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('14', 'देवराज जी ', 'स्व चुन्नी लाल जी ', 'जमना बाई ', 'सिसोदिया ', 'बिसनेस ', 'जुना जाखा माजी रोड ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('15', 'मदन लाल जी ', 'स्व चुन्नी लाल जी ', 'जमना बाई ', 'सिसोदिया ', 'बिसनेस ', 'एल आई सी ऑफिस के सामने , तखतगढ़ रोड ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('16', 'देवेन्द्र कुमार ', 'स्व विजय राज जी ', 'कुस्वन्ति देवी ', 'परिहार ', 'नोकरी ', 'कुबेर नगर , तखतगढ़ रोड ', 'Pali', 'सुमेरपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('17', 'जय नारायण जी ', 'स्व गणेश लाल जी ', 'दुर्गा देवी ', 'परिहार ', 'बिसनेस ', 'कोठारी हॉस्पिटल के पीछे , वेड मगाराम कोलोनी , सोमानी वुलन मिल के पास ', 'Nagaur', 'बीकानेर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('18', 'राजेंद्र सिंह जी ', 'शंकर लाल जी ', 'गुणवती देवी ', 'सोलंकी ', 'सरकारी नोकरी खान एव भू विभाग वरिष्ट मानचित्रकार ', '20 E /16 आदर्श नगर , चोपाशनी हाऊसिंग बोर्ड ', 'Jodhpur', 'जोधपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('19', 'ऋषि राज जी ', 'स्व नन्द लाल जी ', 'रामी बाई ', 'सोलंकी ', 'बिसनेस ', '30 प्रेम नगर , खेमा का कुआ , पाल रोड ', 'Jodhpur', 'जोधपुर ', '', null, '', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('20', 'अर्जुन सिंह जी ', 'स्व माधो सिंह जी ', 'स्व घिसी देवी ', 'परिहार ', 'केशियर एस एस बी जे बेंक ', 'गोकुल वादी के पीछे , मंडिया रोड ', 'Pali', 'पाली ', '', null, 'चामुंडा माता ', 'नाना भेरू जी ', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('21', 'दवारका परशाद जी ', 'स्व नथमल जी ', 'स्व शांति देवी ', 'सोलंकी ', 'बिसनेस ', 'वर्धमान नगर , मेन् मंडिया रोड ', 'Pali', 'पाली ', '', null, 'खिमच माता ', 'मंडोर ', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('22', 'कृष्ण गोपाल जी ', 'स्व जसराज जी ', 'छ्व्र्री देवी ', 'परिहार ', 'प्रोपटी डीलर ', '39 गान्छो का बांस ', 'Pali', 'पाली ', '', null, 'गाजन माता ', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('23', 'भेरू लाल जी ', 'स्व हेम राज जी ', 'स्व लहरी बाई ', 'सोलंकी ', 'घर पर ', 'F 143 सेंटल एरिया , महाराणा परताप स्कूल के पास ', 'Udaipur', 'उदयपुर ', '', null, 'खिमच माता', 'उदयसागर जी ', 'उदयसागर जी ', null, 'MONUSOLANKI1988@GMAIL.COM', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('24', 'सत्येन्द्र सिंह जी ', 'स्व भवर लाल जी ', 'शान्ता बाई ', 'परिहार ', 'मेनेजर बेंक ऑफ इंडिया ', '321/34 सरस्वती हॉस्पिटल के पीछे , ऊनिवरर्सिटी , गणेश नगर पहाडा ', 'Udaipur', 'उदयपुर ', '', null, 'चामुंडा ', '', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('25', 'आनंद सिंह जी ', 'स्व भंवर सिंह जी  ', 'शान्ता देवी ', 'परिहार ', 'सहायक महा प्रबंधक बी एस एन एल ', '10 धुलकोट चोराहा , पायडा रोड , पायडा ', 'Udaipur', 'उदयपुर ', '', null, 'चामुंडा ', 'नाना भेरू जी ', '', null, 'ANANDBSNL10@GMAIL.COM', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('26', 'सूरज जी परिहार ', 'स्व पर्थ्वीराज्जी ', 'सुशीला बाई ', 'परिहार ', 'मंडलीय पर्बंदक ओरिन्तल इंश्योरेंस कंपनी लिमिटेड ', '501उदय एपार्टमेंट, 100 फीट रोड  ', 'Udaipur', 'उदयपुर ', '', null, 'चामुंडा माता ', 'सोनाणा ', '', null, 'SKPARIHAR55@GMAIL.COM', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('27', 'अजय सिंह जी ', 'स्व कन्हेया लाल जी ', 'भगवती देवी ', 'सोलंकी ', 'बिसनेस ', 'श्री भगवती निवास , शिव नगर , प्रीतम पहलवान की गली ', 'Udaipur', 'उदयपुर ', '', null, '', '', '', null, 'solakiajaysinghoss4@gmail.com', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('28', 'मांगीलाल जी परिहार ', 'स्व अम्बालाल जी ', 'स्व गुलाबी बाई ', 'परिहार ', 'बिसनेस ', 'परिहार भवन , ग्लास फेक्ट्री चोराहा , पद्मिनी मार्ग , सुन्दरवास ', 'Udaipur', 'उदयपुर ', '', null, 'चामुंडा माता ', 'सादडी नदी भेरूजी ', '', null, '', 'Yes', null, null);
INSERT INTO `tbl_mukhiya` VALUES ('29', 'किशन सिंह  जी ', 'गनसियाम सिंह जी ', 'रूपा बाई ', 'परिहार ', 'बिसनेस ', 'गनरूप सदन , अशरा सिनेमा के पीछे ,', 'Chittorgarh', 'चितोडगढ', '', null, 'चामुंडा माता ', 'सादडी ', '', null, '', 'Yes', null, null);

-- ----------------------------
-- Table structure for `tbl_mukhiya_meb`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mukhiya_meb`;
CREATE TABLE `tbl_mukhiya_meb` (
  `Meb_id` int(11) NOT NULL AUTO_INCREMENT,
  `Main_Id` int(11) DEFAULT NULL,
  `Meb_Name` varchar(255) DEFAULT NULL,
  `Gender` enum('Female','Male') DEFAULT NULL,
  `Relation_Type` varchar(255) DEFAULT NULL,
  `Birth_Date` int(11) DEFAULT NULL,
  `Married` enum('No','Yes') DEFAULT NULL,
  `Job_Type` varchar(255) DEFAULT NULL,
  `No_Of_Child` int(11) DEFAULT NULL,
  `Work_Place` varchar(255) DEFAULT NULL,
  `Sasural_Place` varchar(255) DEFAULT NULL,
  `Education` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(255) DEFAULT NULL,
  `Meb_Pic` text,
  PRIMARY KEY (`Meb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_mukhiya_meb
-- ----------------------------
INSERT INTO `tbl_mukhiya_meb` VALUES ('1', '1', 'रामेश्वर सिंह जी', 'Male', 'Self', '60', 'Yes', 'व्यापार', '3', 'जोधपुर', 'देहली', '', '9785574816', 'Meb_Pic_24939__26-Jul-2016.jpg');
INSERT INTO `tbl_mukhiya_meb` VALUES ('2', '1', 'नटवर सिंह', 'Male', 'Brother', '35', 'Yes', 'व्यापार', '3', 'जोधपुर', 'पाली', '10th', '8104928328', null);
INSERT INTO `tbl_mukhiya_meb` VALUES ('3', '1', 'मनीष सिंह', 'Male', 'Son', '25', 'Yes', 'व्यापार', '2', 'जोधपुर', 'पाली', 'BA', '7351238875', 'Meb_Pic_25088__26-Jul-2016.jpg');
INSERT INTO `tbl_mukhiya_meb` VALUES ('4', '1', 'संगीता', 'Female', 'Daughter', '30', 'Yes', 'गृहणी', '2', 'फतेहनगर', 'फतेहनगर', '11th', '', 'Meb_Pic_33347__26-Jul-2016.jpg');
INSERT INTO `tbl_mukhiya_meb` VALUES ('5', '2', 'राजेन्द्र कुमार', 'Male', 'Self', '50', 'Yes', 'बास बली', '3', 'जोधपुर', 'दिसा', 'VIII', '9413113768', 'Meb_Pic_73892__27-Jul-2016.jpg');
INSERT INTO `tbl_mukhiya_meb` VALUES ('6', '2', 'मधु', 'Female', 'Daughter', '24', 'Yes', 'गृहणी', '0', 'पाली', 'पाली', 'X', '', 'Meb_Pic_58611__27-Jul-2016.jpg');
INSERT INTO `tbl_mukhiya_meb` VALUES ('7', '2', 'खिवराज जी', 'Male', 'Brother', '40', 'Yes', 'बास बली', '4', 'जोधपुर', 'पाली', 'X', '9461192043', 'Meb_Pic_79971__27-Jul-2016.jpg');
INSERT INTO `tbl_mukhiya_meb` VALUES ('8', '3', 'राजेंद्र कुमार सिसोदिया', 'Male', 'Self', '39', 'Yes', 'व्यापार', '4', 'सुमेरपुर', 'उदयपुर', 'BA', '9828584010, 9001491242', 'Meb_Pic_10520__03-Aug-2016.jpg');
INSERT INTO `tbl_mukhiya_meb` VALUES ('9', '4', 'राजेंद्र सिंह जी ', 'Male', 'Son', '30', 'Yes', 'माइनिंग ऑफिस ', '3', 'जोधपुर ', 'सरवाड ', 'एम् ऐ दो बार ', '9460282299 ', null);
INSERT INTO `tbl_mukhiya_meb` VALUES ('10', '4', 'रण जित सिंह जी ', 'Male', 'Son', '26', 'Yes', 'बिसनेस ', '3', 'जोधपुर ', 'तखतगढ़', 'एम् ऐ ', '8769826682', null);
INSERT INTO `tbl_mukhiya_meb` VALUES ('11', '4', 'मुकेश सिंह ', 'Male', 'Son', '19', 'Yes', 'मोबाईल बिसिनेस ', '2', 'सुमेर्पुर ', 'आबुरोड़', 'बाहरवी ', '9928682634  ', null);
INSERT INTO `tbl_mukhiya_meb` VALUES ('12', '4', 'राहुल सिंह ', 'Male', 'Son', '3', 'Yes', 'प्राइवेट नोकरी ', '1', 'सुमेर्पुर ', 'सादडी', 'एम् एड ', '9828081986', null);
INSERT INTO `tbl_mukhiya_meb` VALUES ('13', '4', 'शंकर लाल जी ', 'Male', 'Self', '30', 'Yes', 'पूर्व तहसीलदार ', '4', 'सुमेरपुर', 'सुमेरपुर ', 'बाहरवी ', '9983053663 ', null);

-- ----------------------------
-- Table structure for `tbl_panchang`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_panchang`;
CREATE TABLE `tbl_panchang` (
  `panchang_id` int(11) NOT NULL AUTO_INCREMENT,
  `panchang_dtl` text,
  `Active` enum('No','Yes') DEFAULT NULL,
  PRIMARY KEY (`panchang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_panchang
-- ----------------------------
INSERT INTO `tbl_panchang` VALUES ('1', '<p><strong><span xss=removed>मिति भाद्रपद 14 शक सम्वत 1938 </span></strong></p>\r\n\r\n<p>भाद्रपद शुक्ला चतुर्थी सोमवार विक्रम सम्वत 2073 सौर भाद्रपद</p>\r\n', 'Yes');

-- ----------------------------
-- Table structure for `tbl_rashifal`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_rashifal`;
CREATE TABLE `tbl_rashifal` (
  `Rashi_id` int(11) NOT NULL AUTO_INCREMENT,
  `Rashi_Name` varchar(222) DEFAULT NULL,
  `Rashi_fal` text,
  `Rashi_Img` varchar(222) DEFAULT NULL,
  `Rashi_Thumb` varchar(250) DEFAULT NULL,
  `Active` enum('No','Yes') DEFAULT NULL,
  PRIMARY KEY (`Rashi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_rashifal
-- ----------------------------
INSERT INTO `tbl_rashifal` VALUES ('1', 'मेष राशि', '&lt;div&gt;&lt;strong&gt;पॉजिटिव -&amp;nbsp;&lt;/strong&gt;दिन आपके लिए अच्छा रहेगा। सोचे हुए काम पूरे हो सकते हैं। करियर में आगे बढ़ने&amp;nbsp;के मौके मिलेंगे। सफलता भी मिल सकती है। कन्फ्यूजन खत्म होगा। अचानक फैसले लेने पड़ेंगे। आपको अच्छा फायदा भी होगा। कई सवालों के जवाब भी आज आपको मिल जाएंगे। आपने पैसों से जुड़ा कोई बड़ा फैसला किया, तो वह मामला फिर उठेगा। पैसों की स्थिति पर बारीकी से विचार करें। नौकरी बदलने का विचार भी दिमाग में रहेगा। आपकी महत्वाकांक्षाएं भी चरम पर रहेंगी। बिजनेस में कोई नई योजना बनाएंगे तो आपके इरादे भी साफ हो जाएंगे।&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;strong&gt;नेगेटिव - &amp;nbsp;&lt;/strong&gt;कुछ कामों में फालतू पैसा भी खर्च हो सकता है। आज आप न कोई बड़ा खर्च करें, न किसी बड़े खर्च का वादा करें। आज किसी से किया गया कोई बड़ा वादा आपको परेशानी में भी डाल सकता है।&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;क्या करें और क्या नहीं -&amp;nbsp;&lt;/strong&gt;मुनक्का दाख खाएं।&lt;br /&gt;\r\n&amp;nbsp;&lt;br /&gt;\r\n&lt;strong&gt;लव-&amp;nbsp;&lt;/strong&gt;पार्टनर के साथ अच्छा समय बीतेगा। प्यार और सहयोग भी मिलेगा।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;करियर - &amp;nbsp;&lt;/strong&gt;नौकरी और बिजनेस में अचानक बड़े फैसले भी लेने पड़ सकते हैं। विद्यार्थियों के लिए समय अच्छा रहेगा।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;हेल्थ-&amp;nbsp;&lt;/strong&gt;सेहत में मामूली उतार-चढ़ाव आ सकते हैं।&lt;/div&gt;\r\n', '22-Jun-2017__Rashi_Pic__32170.gif', '22-Jun-2017__Rashi_Thumb__9683.gif', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('2', 'वृष राशि', '&lt;div&gt;&lt;strong&gt;पॉजिटिव -&amp;nbsp;&lt;/strong&gt;कॉन्फिडेंस बढ़ा हुआ रहेगा। इसका प्रयोग अपने महत्वपूर्ण कामों को आगे बढ़ाने में करें। जो महत्वपूर्ण मामला पेंडिंग है, उसका कोई समाधान भी निकल जाएगा। कुछ परेशानियां खत्म हो सकती है। पुत्र से सहयोग मिलेगा। आर्थिक मामले सुलझेंगे। दाम्पत्य जीवन सुखद रहेगा। कामकाज ज्यादा रहेगा, दिनभर बिजी रहेंगे, लेकिन इससे आपको ही फायदा होगा। नए लोगों से मुलाकात होगी और उन लोगों से आपको सहयोग मिल जाएगा।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;नेगेटिव -&lt;/strong&gt;&amp;nbsp;नौकरी और धंधे की रुकावटें आज भी रहेगी। काम करने वालों को आज आपसे जलन हो सकती है। बिजनेस में लेन-देन के मामले उलझ सकते हैं। ऑफिस में किसी तरह का विवाद भी हो सकता है। कोई आपके काम या काम करने के स्टाइल का गलत अर्थ भी निकाल सकता है। खर्चा भी ज्यादा होगा। &amp;nbsp;आपका मन कमजोर भी हो सकता है और सेहत भी थोड़ी नासाज रहेगी। बोलचाल, स्वभाव और चिड़चिड़ाहट पर काबू रखें। जवाबदारी और होड़ में जल्दबाजी से नुकसान हो सकता है। दोस्तों और भाइयों से सहयोग कुछ कम ही मिलेगा।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;क्या करें और क्या नहीं -&amp;nbsp;&lt;/strong&gt;चीनी खाएं।&lt;br /&gt;\r\n&amp;nbsp;&lt;br /&gt;\r\n&lt;strong&gt;लव-&amp;nbsp;&lt;/strong&gt;आज पार्टनर से किसी भी तरह की जबरदस्ती न करें तो ही अच्छा है। प्यार का इजहार करने की सोच रहे हैं तो कर दें।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;करियर- &amp;nbsp;&lt;/strong&gt;बिजनेस में जोखिम न लें। कार्यस्थल पर विवाद की स्थिति बन सकती है। स्टूडेंट्स के लिए दिन अच्छा रहेगा।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;हेल्थ-&amp;nbsp;&lt;/strong&gt;सेहत थोड़ी नासाज हो सकती है। ध्यान रखें।&lt;/div&gt;\r\n', '22-Jun-2017__Rashi_Pic__55757.gif', '22-Jun-2017__Rashi_Thumb__9374.gif', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('3', 'मिथुन राशि', '&lt;div&gt;&lt;strong&gt;पॉजिटिव -&lt;/strong&gt;&amp;nbsp;&amp;nbsp;व्यस्तता ज्यादा रहेगी। किसी भी चुनौती को संभालने के लिए तैयार रहेंगे। महत्वपूर्ण काम खुद निपटाने होंगे। चंद्रमा की स्थिति आपके लिए शुभ है। आपको फायदा भी मिलेगा। कार्यस्थल पर आपका सम्मान और जिम्मेदारी बढ़ सकती है। इससे आपको आने वाले दिनों में फायदा भी होगा। लोग आपकी बात समझने के लिए तैयार रहेंगे। आसपास के लोग आपकी भावनाओं की भी कद्र करेंगे। किसी समस्या का समाधान आज हाथों-हाथ मिल सकता है। आज आप धैर्य रखें और एक-एक कर के सारी चीजें सुलझाएं। नौकरी धंधे के लिए दिन सामान्य है। संतान की उन्नति खुशी बढ़ाएगी। व्यापार में नई योजनाओं पर काम होगा। जीवनसाथी आपकी हिम्मत बढ़ाएगा। यात्रा में अपनी वस्तुएं संभालकर रखें। अच्छे लोगों से मुलाकात होगी।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;नेगेटिव -&amp;nbsp;&lt;/strong&gt;जल्दबाजी या जोश में आ कर लोगों से ऐसे वादे कर सकते हैं जिनको निभाना आपके लिए कठिन है। कुछ लोगों से बहस भी हो सकता है। आने वाले दिनों को लेकर किसी बात का टेंशन भी हो सकता है।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;क्या करें और क्या नहीं -&amp;nbsp;&lt;/strong&gt;पान खाएं।&lt;br /&gt;\r\n&amp;nbsp;&lt;br /&gt;\r\n&lt;strong&gt;लव-&amp;nbsp;&lt;/strong&gt;आप लव प्रपोजल भेज सकते हैं। इस राशि के अविवाहित लोगों के लिए दिन अच्छा है।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;करियर- &amp;nbsp;&lt;/strong&gt;बिजनेस के लिए दिन ज्यादा अच्छा नहीं है। नए एग्रीमेंट अभी न करें तो अच्छा है। मिथुन राशि के स्टूडेंट्स को मेहनत ज्यादा करनी पड़ सकती है।&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;हेल्थ-&amp;nbsp;&lt;/strong&gt;मौसमी&amp;nbsp;बीमारियां&amp;nbsp;भी हो सकती हैं। सावधान रहें।&lt;/div&gt;\r\n', '22-Jun-2017__Rashi_Pic__78201.gif', '22-Jun-2017__Rashi_Thumb__9810.gif', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('4', 'कर्क राशि', '&lt;div&gt;&lt;strong&gt;पॉजिटिव -&amp;nbsp;&lt;/strong&gt;रुके काम निपटाने के लिए दिन अच्छा है। आज आप पहल भी कर सकते हैं। आपकी कोशिशें भी देखने लायक होंगी। बड़े लोगों और पब्लिक से संबंध बना कर चलें। आज आपको नई जिम्मेदारी या पद मिलने के योग बन रहे हैं। आज आप व्यस्त और सक्रिय रहेंगे। पैसों से जुड़े नए सौदे भी हो सकते हैं। ऑफिस के काम में कुछ नए लोग शामिल हो सकते हैं, जो आपके लिए फायदेमंद रहेंगे। बिजनेस करते हैं, तो कोई नया निवेश भी हो सकता है। वह भी आपके लिए शुभ साबित होगा। नए लोगों से दोस्ती या मुलाकात हो सकती है। दोस्तों से संबंध सुधर जाएंगे। योग्यता और अनुभव से काम पूरे होंगे। कार्यक्षेत्र में आपको सहयोग और प्रोत्साहन भी मिलेगा। समस्याएं भी निपट जाएंगी।&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;nbsp;&lt;br /&gt;\r\n&lt;strong&gt;नेगेटिव -&amp;nbsp;&lt;/strong&gt;कर्क राशि के लोग बिजी रहेंगे। अपनी इच्छाएं मारनी पड़ेंगी। जो काम आपको पसंद नहीं, न चाहते हुए वो ही आपको करने पड़ेंगे। कुछ मामलों में आपका मूड जल्दी ही खराब भी हो सकता है। किसी का गुस्सा किसी ओर पर निकालने से आपके संबंधों पर नकारात्मक असर पड़ सकता है।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;क्या करें और क्या नहीं -&lt;/strong&gt;&amp;nbsp;दूध पीकर पानी पिएं।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;लव-&lt;/strong&gt;&amp;nbsp;आपके मन में सकारात्मक विचार आते रहेंगे, लेकिन लव लाइफ &amp;nbsp;में समस्याएं भी बनी रहेंगी।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;करियर- &amp;nbsp;&lt;/strong&gt;ऑफिस में खुद को नियंत्रण में रखें। विवाद हो सकता है। पद लाभ का योग है। विद्यार्थियों के लिए दिन अच्छा है। दोस्तों से मदद मिलेगी।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;हेल्थ-&amp;nbsp;&lt;/strong&gt;सेहत कमजोर हो सकती है। रक्त विकार होने के योग हैं।&lt;/div&gt;\r\n', '22-Jun-2017__Rashi_Pic__57481.jpg', '22-Jun-2017__Rashi_Thumb__9807.jpg', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('5', 'सिंह राशि', '&lt;div&gt;&lt;strong&gt;पॉजिटिव -&amp;nbsp;&lt;/strong&gt;गोचर कुंडली में चंद्रमा किस्मत के घर में होने से आपके लिए शुभ रहेगा। सिंह राशि के कुछ लोग आज भाग्यशाली भी हो सकते हैं। सोचे हुए काम आज पूरे होने से सफलता मिलेगी और आपको खुशी भी होगी। कुछ नया करना चाह रहे हैं तो कर लें। सब अपने आप हो जाएगा। दिन बहुत अच्छा है। मन में तरह-तरह के सपने और उमंगें रहेंगी। आप आगे बढ़ते रहें। लोगों से मुलाकात के दौरान कुछ नए, अच्छे और रोचक अवसर आज आपको मिल सकते हैं। कठिन मामलों को भी आज आप सुलझा लेंगे।&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;नेगेटिव -&amp;nbsp;&lt;/strong&gt;आसपास के लोग किसी न किसी बात पर आपसे नाराज रह सकते हैं। आज परिवार के कुछ लोग भी आपके कारण दुखी हो सकते हैं। आज किसी बात का अनजाना डर भी आपको परेशान कर सकता है। किसी पुरानी बात को लेकर टेंशन भी रहेगी। उसके कारण आपके दूसरे काम भी प्रभावित हो सकते हैं।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;क्या करें और क्या नहीं -&amp;nbsp;&lt;/strong&gt;गुलाब का फूल सूंघे।&lt;/div&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\n&lt;strong&gt;लव-&amp;nbsp;&lt;/strong&gt;लव लाइफ &amp;nbsp;में कुछ लोग रुकावटें डाल सकते हैं।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;करियर- &amp;nbsp;&lt;/strong&gt;बिजनेस में कुछ नया करने के चक्कर में थोड़े परेशान भी हो सकते हैं। स्टूडेंट्स को किस्मत का साथ मिल सकता है। अच्छे परिणाम भी मिलेंगे।&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;हेल्थ-&amp;nbsp;&lt;/strong&gt;सेहत ज्यादा अच्छी नहीं रहेगी। थोड़ी बहुत परेशानियां हो सकती है।&lt;/p&gt;\r\n', '22-Jun-2017__Rashi_Pic__88880.gif', '22-Jun-2017__Rashi_Thumb__9854.gif', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('6', 'कन्या राशि', '&lt;div&gt;&lt;strong&gt;पॉजिटिव -&amp;nbsp;&lt;/strong&gt;ऑफिस की कोई पुरानी परेशानी खत्म हो सकती है। किसी खबर का इंतजार है तो आज वो खबर आपको मिल सकती है। अधिकारियों से सहयोग मिलेगा। जरूरी काम निपटाने की कोई योजना बन सकती है। योजना पर काम भी शुरू हो सकता है। साथ के लोगों की मदद भी मिल सकती है। संपत्ति से जुड़े मामलों पर ध्यान देंगे। जीवनसाथी से सहयोग मिलेगा।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;नेगेटिव -&amp;nbsp;&lt;/strong&gt;आज आपको थोड़ी बेचैनी हो सकती है। आज आप कोई बड़ा फैसला लेने में कन्फ्यूज भी हो सकते हैं। मन पसोपेश में हो सकता है। अपने फैसले पर पुनर्विचार भी करना पड़ेगा। निजी जीवन और पैसों के मामले में कोई नया फैसला आज न लें तो ही अच्छा है। किसी अनचाही घटना का संकेत भी मिल सकता है।&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;क्या करें और क्या नहीं -&amp;nbsp;&lt;/strong&gt;धनिया पाउडर और मिश्री मिलाकर खाएं।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;&amp;nbsp;&lt;br /&gt;\r\nलव-&amp;nbsp;&lt;/strong&gt;आज पार्टनर के लिए समय निकालें, लगातार बढ़ती दूरियां संबंध भी बिगाड़ सकती है। पार्टनर को आपकी जरूरत महसूस होगी।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;करियर-&amp;nbsp;&lt;/strong&gt;&amp;nbsp;आपके फैसले आपको कई बार नुकसान भी दे सकते हैं। कन्या राशि के स्टूडेंट्स को दौड़-भाग करनी पड़ सकती है।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;हेल्थ-&amp;nbsp;&lt;/strong&gt;सेहत संबंधित सावधानी जरूर रखें।&lt;/div&gt;\r\n', '22-Jun-2017__Rashi_Pic__50063.gif', '22-Jun-2017__Rashi_Thumb__9194.gif', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('7', 'तुला राशि', '&lt;div&gt;&lt;strong&gt;पॉजिटिव -&lt;/strong&gt;&amp;nbsp;किसी काम के लिए एकदम नए सिरे से भी शुरूआत करनी पड़ सकती है। जितना हो सके, दूसरों के प्रति सहयोग की कोशिश करें। आज आप खुद को नकारात्मक विचारों से बचाकर चलेंगे। कोई नया काम शुरू करने से पहले संबंधित अनुभवी व्यक्ति से सलाह कर लें। आपके द्वारा किए गए प्रयास सही दिशा में होने से फायदा होगा। वाद-विवाद से बचने की कोशिश करेंगे और सफल भी हो जाएंगे।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;नेगेटिव -&amp;nbsp;&lt;/strong&gt;आज आप फालतू चिंता से बचें। &amp;nbsp;खर्च की स्थिति बन सकती है। मन में दबी कोई पुरानी बात आज आपको परेशान भी कर सकती है। ऐसी बातों को मन से निकालने की कोशिश करें जो आपको परेशान करती हैं। प्रणय संबंधों में नाटकीय तरह से उतार-चढ़ाव भी आ सकते हैं।&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;strong&gt;क्या करें और क्या नहीं -&amp;nbsp;&lt;/strong&gt;मंदिर में मिश्री चढ़ाएं।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;strong&gt;&amp;nbsp;&lt;br /&gt;\r\nलव-&amp;nbsp;&lt;/strong&gt;पार्टनर के साथ वाहन चलाते समय सावधानी रखें। पार्टनर की मदद से धन लाभ भी हो सकता है।&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;करियर-&amp;nbsp;&lt;/strong&gt;&amp;nbsp;नौकरीपेशा और बिजनेस करने वाले लोग विरोधियों से परेशान रहेंगे। विद्यार्थियों के लिए दिन इतना खास नहीं है, जितना सोच रहे हैं।&amp;nbsp;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;हेल्थ-&amp;nbsp;&lt;/strong&gt;आज आपकी सेहत भी थोड़ी ठीक रहेगी। पुराने रोगों में आराम भी मिलेगा।&lt;/div&gt;\r\n', '22-Jun-2017__Rashi_Pic__50684.gif', '22-Jun-2017__Rashi_Thumb__9568.gif', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('8', 'वृश्चिक राशि', '&lt;div&gt;&lt;strong&gt;पॉजिटिव -&lt;/strong&gt;&amp;nbsp;आपको अचानक धन लाभ भी हो सकता है। आप में भौतिक या शारीरिक ऊर्जा भी ज्यादा रहेगी। गृहस्थी का मेहनत वाला काम आज आप निपटा सकते हैं। आप खुद तो मेहनत करेंगे ही, परिवार के लोगों को भी सक्रिय कर देंगे। महत्वपूर्ण मामलों में कोई फैसला लेने से पहले शांति से विचार करें। लव पार्टनर के साथ समय बीतेगा। धैर्य रखना होगा। कोई नया प्रस्ताव मिल सकता है। महत्वपूर्ण मीटिंग आज कर लें समस्याएं जल्दी ही खत्म हो जाएंगी।&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;नेगेटिव -&amp;nbsp;&lt;/strong&gt;दुश्मनों से सावधान रहना चाहिए। धन हानि का डर रहेगा। आर्थिक स्थिति भी सामान्य नहीं होने से मूड खराब रहेगा। रोजमर्रा के काम पूरे होने में कुछ परेशानियां और विवाद सामने आ सकते हैं। सोचे हुए काम आज शुरू नहीं करें। किसी महत्वपूर्ण व्यक्ति के साथ कुछ अनबन भी हो सकती है।&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;क्या करें और क्या नहीं -&amp;nbsp;&lt;/strong&gt;गुलकंद खाएं।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;&amp;nbsp;&lt;br /&gt;\r\nलव-&amp;nbsp;&lt;/strong&gt;पुराने मामले फिर से सामने भी आ सकते हैं। पार्टनर से भी बहस हो सकती है।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;करियर- &amp;nbsp;&lt;/strong&gt;नई बिजनेस डील हो सकती है, लेकिन हो सकता है। आपको किस्मत का साथ न मिले और आप उसका फायदा न उठा पाएं। स्टूडेंट्स के लिए समय सामान्य रहेगा।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;हेल्थ-&amp;nbsp;&lt;/strong&gt;सेहत को लेकर आज आप सावधान ही रहें। दवाईयों और पुरानी&amp;nbsp;बीमारियों&amp;nbsp;को लेकर लापरवाही न करें तो ही अच्छा है।&lt;/div&gt;\r\n', '22-Jun-2017__Rashi_Pic__86548.jpg', '22-Jun-2017__Rashi_Thumb__9984.jpg', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('9', 'धनु राशि', '&lt;div&gt;&lt;strong&gt;पॉजिटिव -&amp;nbsp;&lt;/strong&gt;उम्मीदें पूरी होंगी। पुराने कर्मों का अच्छा फल भी मिलेगा। अच्छे कामों पर ध्यान देंगे और उससे आपको खुशी भी मिल सकती है। अचानक धन लाभ के योग भी हैं। नए लोगों से मुलाकात और दोस्ती होगी। आपको दूसरों की मदद का कोई मौका भी मिल सकता है। आप इस मौके को हाथ से न जाने दें। आज आप खुद से प्रेम करेंगे। आज अपने कामों का पूरा विश्लेषण करें। अपने सामान का ध्यान रखें। बिजनेस भी अच्छा चलेगा।&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;नेगेटिव -&amp;nbsp;&lt;/strong&gt;धनु राशि वाले लोगों को आज सावधान रहना होगा। महत्वपूर्ण फैसले लेने के लिए दिन इतना अच्छा नहीं है जितना आपको लग रहा है। आज किसी काम से संबंधित पूरी जानकारी नहीं मिलने से आप थोड़े परेशान भी रहेंगे। कोई अनजाना डर या टेंशन भी आप पर हावी हो सकती है।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;क्या करें और क्या नहीं -&lt;/strong&gt;&amp;nbsp;विष्णु भगवान के मंदिर पीला फूल चढ़ाएं।&lt;br /&gt;\r\n&amp;nbsp;&lt;br /&gt;\r\n&lt;strong&gt;लव-&amp;nbsp;&lt;/strong&gt;लव लाइफ में कोई गलतफहमी भी हो सकती है। किसी मामले में लापरवाही न करें। पार्टनर से कोई बात न छुपाएं।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;करियर- &amp;nbsp;&lt;/strong&gt;समय का सदुपयोग करेंगे। दिन सामान्य होगा। उतार-चढ़ाव भी आ सकते हैं। किस्मत का साथ मिलेगा। स्टूडेंट्स को किस्मत का साथ भी मिलेगा।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;हेल्थ-&amp;nbsp;&lt;/strong&gt;सेहत में भी उतार-चढ़ाव आ सकते हैं। पिछले कुछ दिनों से चली आ रही शारीरिक परेशानी के कारण दौड़-भाग भी करनी पड़ सकती है। ताजगी और स्फूर्ति भी रहेगी।&lt;/div&gt;\r\n', '22-Jun-2017__Rashi_Pic__47644.jpg', '22-Jun-2017__Rashi_Thumb__9381.jpg', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('10', 'मकर राशि', '&lt;div&gt;&lt;strong&gt;पॉजिटिव - &amp;nbsp;&lt;/strong&gt;मन में नए कामों की उमंग रहेंगी। अधिकारी वर्ग का सहयोग भी मिलेगा। व्यक्तिगत संबंधों में सुधार होगा। यात्रा भी करनी पड़ेगी। मीठा बोलकर अपने काम पूरे करवा सकते हैं। दोस्तों से सहयोग मिलेगा। नए विचार मन में आ सकते हैं। आसपास या साथ के लोगों से फायदेमंद सलाह मिल सकती है। कई तरह के विचार भी दिमाग में चलते रहेंगे। जिनसे आपको फायदा होगा। करियर में किसी नई योजना के साथ आगे बढ़ेंगे।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;नेगेटिव -&lt;/strong&gt;&amp;nbsp;पैसे संभाल कर रखें। किसी तिकड़म के प्रयोग में आज आप सावधान रहें। इधर की बातें उधर करने से बचें। अपनी बातें भी लोगों से शेयर करने से बचें। सावधान रहें। गोचर कुंडली के चौथे भाव में चंद्रमा होने से थोड़ी परेशानी भरा दिन भी रहेगा। थोड़ा मानसिक तनाव भी होगा।&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;strong&gt;क्या करें और क्या नहीं -&amp;nbsp;&lt;/strong&gt;हनुमान जी को सिंदूर लगाएं।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;लव-&amp;nbsp;&lt;/strong&gt;लव लाइफ के लिए भी दिन अनुकूल नहीं होगा, लेकिन पार्टनर के साथ महत्वपूर्ण वादे निभाने का दिन है।&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;br /&gt;\r\n&lt;strong&gt;करियर- &amp;nbsp;&lt;/strong&gt;अधिकारी वर्ग का सहयोग मिल सकता है। रुका हुआ पैसा भी वापस आ सकता है। विद्यार्थियों के लिए समय थोड़ा नकारात्मक हो सकता है।&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;strong&gt;हेल्थ-&amp;nbsp;&lt;/strong&gt;सेहत भी पहले से ठीक रहेगी, लेकिन काम में मन नहीं लगने से परेशान रहेंगे।&lt;/div&gt;\r\n', '22-Jun-2017__Rashi_Pic__13222.jpg', '22-Jun-2017__Rashi_Thumb__9858.jpg', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('11', 'कुंभ राशि', '&amp;amp;lt;div&amp;amp;gt;&amp;amp;lt;strong&amp;amp;gt;पॉजिटिव -&amp;amp;lt;/strong&amp;amp;gt;&amp;amp;amp;nbsp;किसी मामले को लेकर कोई कन्फ्यूजन की स्थिति चल रही थी तो दोस्तों की मदद से उससे छुटकारा मिल सकता है। आज आप अपने कामों पर ध्यान दें। इससे आपके अधूरे काम भी समय पर निपट सकते हैं। कुछ महत्वपूर्ण मामलों को जल्दी से जल्दी ही निपटाने की कोशिश करेंगे और उसमें सफल भी हो जाएंगे। रहन-सहन, स्टाइल और तौर तरीके में कुछ बदलाव भी हो सकता है। महत्वपूर्ण व्यक्तियों से भी आपकी मुलाकात हो सकती है।&amp;amp;amp;nbsp;&amp;amp;lt;/div&amp;amp;gt;\r\n\r\n&amp;amp;lt;div&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;\r\n&amp;amp;lt;strong&amp;amp;gt;नेगेटिव -&amp;amp;amp;nbsp;&amp;amp;lt;/strong&amp;amp;gt;आप कोई ऐसा फैसला न लें, जिसका असर लंबे समय के लिए होना हो। कुछ स्थितियां ऐसी हैं, जिन पर आपका नियंत्रण न के बराबर रहेगा। उनके कारण आप टेंशन में आ सकते हैं। आपके कुछ काम आधे से ज्यादा हो चूके हैं, लेकिन आज आपको नए सिरे से शुरुआत भी करनी पड़ सकती है। दिन भर मन में कुछ न कुछ चलता भी रहेगा। जिसके कारण किसी खास मामले में कन्फ्यूजन बढ़ सकता है। काम को लेकर आपके मन में तनाव और अशांति भी &amp;amp;amp;nbsp;रहेगी। जोखिम भरे काम आज टाल दें।&amp;amp;lt;/div&amp;amp;gt;\r\n\r\n&amp;amp;lt;div&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;lt;/div&amp;amp;gt;\r\n\r\n&amp;amp;lt;div&amp;amp;gt;&amp;amp;lt;strong&amp;amp;gt;क्या करें और क्या नहीं -&amp;amp;amp;nbsp;&amp;amp;lt;/strong&amp;amp;gt;तिल खाएं।&amp;amp;lt;br /&amp;amp;gt;\r\n&amp;amp;lt;br /&amp;amp;gt;\r\n&amp;amp;lt;strong&amp;amp;gt;लव-&amp;amp;amp;nbsp;&amp;amp;lt;/strong&amp;amp;gt;पार्टनर से सहयोग और सुख मिलेगा।&amp;amp;amp;nbsp;वादे&amp;amp;amp;nbsp;और नए कामों की प्लानिंग भी होगी।&amp;amp;lt;br /&amp;amp;gt;\r\n&amp;amp;lt;br /&amp;amp;gt;\r\n&amp;amp;lt;strong&amp;amp;gt;करियर- &amp;amp;amp;nbsp;&amp;amp;lt;/strong&amp;amp;gt;बिजनेस में कुछ नई योजनाओं पर काम शुरू हो सकता है। कुंभ राशि के स्टूडेंट्स का मन पढ़ाई में लगेगा। इस राशि के लोग प्रमोशन के लिए कोई न कोई तरकीब लगा सकते हैं।&amp;amp;lt;br /&amp;amp;gt;\r\n&amp;amp;lt;br /&amp;amp;gt;\r\n&amp;amp;lt;strong&amp;amp;gt;हेल्थ-&amp;amp;amp;nbsp;&amp;amp;lt;/strong&amp;amp;gt;सेहत अच्छी रहेगी। मन भी प्रसन्न रहेगा।&amp;amp;lt;/div&amp;amp;gt;\r\n', '22-Jun-2017__Rashi_Pic__79507.gif', '22-Jun-2017__Rashi_Thumb__9015.gif', 'Yes');
INSERT INTO `tbl_rashifal` VALUES ('12', 'मीन राशि', '<p><p>चंद्रमा के कारण आपको धन लाभ होगा। खरीददारी करेंगे। कोई रोचक खबर भी आज आपको मिल सकती है। आपको देखकर दूसरे लोग अपने जीवन में सुधार के लिए प्रेरित होंगे। दिन भर व्यस्त रहेंगे। ज्यादा से ज्यादा लोगों से मिलने और बातचीत करने की इच्छा भी हो सकती है। इससे आपको फायदा ही होगा। कई तरह के मामलों पर बात करने के लिहाज से अच्छा दिन है। कुछ बहुत रोचक बातें भी आज आपको पता चल सकती है। किसी के साथ विवाद में न पड़ें। कामकाज में खूब मन भी लगेगा। उत्साह भी बढ़ेगा। घर का माहौल भी ठीक रहेगा। जीवनसाथी से संबंधों में अनुकूलता बनेगी। आर्थिक समृद्धि भी बढ़ सकती है।</p> <p>आप अपने मूडी स्वभाव पर नियंत्रण रखें। लगातार भाग-दौड़ भी करनी पड़ सकती है। अचानक मन में बदलाव आने से नुकसान हो सकता है। आज भाइयों और दोस्तों से भी अनबन रहेगी।</p> <p><span xss=removed><strong>क्या करें और क्या नहीं :-</strong></span> पीली मिठाई खाएं।</p> <p><span xss=removed><strong>लव :-</strong></span> लव कपल के लिए दिन अच्छा है। पार्टनर से सरप्राइज मिलेगा।</p> <p><span xss=removed><strong>करियर :-</strong></span> ऑफिस में विवाद की स्थिति बन सकती है। शांति से काम लें, स्थिति संभल जाएगी। स्टूडेंट्स को सफलता मिलेगी। मेहनत भी ज्यादा करनी पड़ेगी।</p> <p><span xss=removed><strong>हेल्थ :-</strong></span> सेहत में भी उतार-चढ़ाव आ सकते हैं। सावधान रहें।</p></p>\r\n', '22-Jun-2017__Rashi_Pic__52437.gif', '22-Jun-2017__Rashi_Thumb__9648.gif', 'Yes');

-- ----------------------------
-- Table structure for `tbl_users`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `User_Thumb` varchar(250) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_param` varchar(255) NOT NULL,
  `user_verified` int(1) NOT NULL,
  `user_is_new` int(1) NOT NULL,
  `user_is_blocked` int(1) NOT NULL,
  `user_profile_views` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('1', 'Aakash', 'Nair', 'say2me84@gmail.com', 'User_Pic_11889__27_Jul_2016.jpg', 'User_Pic_11889__27_Jul_2016.jpg', '0192023a7bbd73250516f069df18b500', 'b3967a0e938dc2a6340e258630febd5a', '1', '0', '1', '0');
INSERT INTO `tbl_users` VALUES ('2', 'Sanjay', 'Sisodiya', 'sanju@gmail.com', '', null, '0192023a7bbd73250516f069df18b500', 'b3967a0e938dc2a6340e258630febd5a', '0', '0', '1', '0');
INSERT INTO `tbl_users` VALUES ('3', 'Sangram', 'Singh ', 'sangram@gmail.com', '', null, '0192023a7bbd73250516f069df18b500', 'ec8ce6abb3e952a85b8551ba726a1227', '0', '0', '1', '0');
INSERT INTO `tbl_users` VALUES ('4', 'papu', 'bahi', 'papu@gmail.com', '', null, 'e10adc3949ba59abbe56e057f20f883e', 'b3967a0e938dc2a6340e258630febd5a', '0', '0', '1', '0');
INSERT INTO `tbl_users` VALUES ('5', 'Praveen', 'gancha', 'PraveenKumar2613@gmail. com', '', null, '43e9c66d038ae648830cc36e753f2938', '05f971b5ec196b8c65b75d2ef8267331', '0', '1', '0', '0');
INSERT INTO `tbl_users` VALUES ('6', 'Praveen Kumar', 'gancha', 'pgancha1980@gmail. com', '', null, '43e9c66d038ae648830cc36e753f2938', '36660e59856b4de58a219bcf4e27eba3', '0', '1', '0', '0');
INSERT INTO `tbl_users` VALUES ('7', 'Praveen kumar', 'Solanki', 'praveenkumarsolanki1983@gmail.com', '', null, '10f5496b5b0af8780bf98ea5ccb13055', 'cfa0860e83a4c3a763a7e62d825349f7', '0', '1', '0', '0');
INSERT INTO `tbl_users` VALUES ('8', 'sajjan', 'bhati', 'sajjanbhati112 @gmail.com', '', null, '55d3111a555fd1749c57ee558ec248f6', '8f7d807e1f53eff5f9efbe5cb81090fb', '0', '1', '0', '0');
INSERT INTO `tbl_users` VALUES ('9', 'sumer ', 'singh', 'sumerpur1978@gmail.com', '', null, '22400f331528a569a739ecef44b31e62', '860320be12a1c050cd7731794e231bd3', '1', '1', '1', '0');
INSERT INTO `tbl_users` VALUES ('10', 'sumer singh', 'sisodiya', 'sumerpur2020@gmail.com', '', null, '8c91ca8883902edc4df3e49a1817a4f3', 'ca8155f4d27f205953f9d3d7974bdd70', '0', '1', '0', '0');
INSERT INTO `tbl_users` VALUES ('11', 'Rahul', 'Parihar', 'www.pariharr90@gmail.com', '', null, '02a24e850391541c06f430c64fc66f2e', 'c3c59e5f8b3e9753913f4d435b53c308', '0', '1', '0', '0');
INSERT INTO `tbl_users` VALUES ('12', 'Kuldeep', 'Singh', 'vijaysen2410@gmail.com', '', null, 'e7f1e70a4cb669599647ac7d6acf8549', '2d6cc4b2d139a53512fb8cbb3086ae2e', '1', '1', '1', '0');
INSERT INTO `tbl_users` VALUES ('13', 'kuldeep', 'singh', 'kuldeepsingh2420@yahoo.com', '', null, '65b5ce7c2e22fc8b1b3a48cd19b40263', 'b2f627fff19fda463cb386442eac2b3d', '0', '1', '0', '0');
INSERT INTO `tbl_users` VALUES ('14', 'karan', 'sisodiya', 'karansisodiyaganchablt@gmail.com', '', null, 'ed4074f398f47034c2542fa6b0d1d23a', 'b056eb1587586b71e2da9acfe4fbd19e', '0', '1', '0', '0');
INSERT INTO `tbl_users` VALUES ('15', 'karan', 'singh sisodia', 'karansinghsisodia@gmail.com', '', null, 'a7349dbcfc726457ffa1167b06f06ac7', '07c5807d0d927dcd0980f86024e5208b', '0', '1', '0', '0');
INSERT INTO `tbl_users` VALUES ('16', 'RAJAN SINGH', 'SOLANKI', 'rajanjana.singh@gmail.com', '', null, '0e5415bff2425d0be91851228f8904ba', '59c33016884a62116be975a9bb8257e3', '0', '1', '0', '0');
INSERT INTO `tbl_users` VALUES ('17', 'Neetu', 'Parihar', 'Neetusinghparihar142@gmail.com ', '', null, 'fa43204cd46a242e95cdb67c737c3b69', 'a7aeed74714116f3b292a982238f83d2', '1', '1', '1', '0');

-- ----------------------------
-- Table structure for `tbl_video`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_video`;
CREATE TABLE `tbl_video` (
  `Video_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Video_Name` varchar(222) DEFAULT NULL,
  `Video_Cat` varchar(111) DEFAULT NULL,
  `Video_Link` varchar(222) DEFAULT NULL,
  `Video_File` varchar(111) DEFAULT NULL,
  `Video_Dtl` text,
  `Post_By` varchar(200) DEFAULT NULL,
  `Video_Date` date DEFAULT NULL,
  `Active` enum('Yes','No') DEFAULT NULL,
  PRIMARY KEY (`Video_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_video
-- ----------------------------
