/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : quiz

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-04-22 21:11:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `exams`
-- ----------------------------
DROP TABLE IF EXISTS `exams`;
CREATE TABLE `exams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `subject_code` varchar(255) DEFAULT NULL,
  `time` int(3) DEFAULT NULL,
  `starting_at` datetime DEFAULT NULL,
  `marks_per_ques` int(2) DEFAULT NULL,
  `negate` tinyint(1) DEFAULT NULL,
  `total_ques` int(3) DEFAULT NULL,
  `ending_at` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of exams
-- ----------------------------
INSERT INTO `exams` VALUES ('1', '1', 'test222', 't', 't', '1', '2016-04-22 21:10:20', '4', '1', null, '2016-04-22 21:20:00', '%Wgw$8OP', '2016-04-17 08:42:40', '2016-04-19 09:05:58');
INSERT INTO `exams` VALUES ('2', '1', 'Test', 'Data', '4200', '20', '2016-04-19 17:00:00', '6', null, null, '2016-04-19 17:20:00', 'jR/B%J_j', '2016-04-18 21:30:39', '2016-04-18 21:30:39');
INSERT INTO `exams` VALUES ('3', '1', 'First', 'Data', '4200', '20', '2016-04-19 17:00:00', '4', '1', null, '2016-04-19 17:20:00', 'lrln;HvH', '2016-04-18 22:21:07', '2016-04-18 22:21:07');

-- ----------------------------
-- Table structure for `questions`
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` longtext,
  `ans_a` text,
  `ans_b` text,
  `ans_c` text,
  `ans_d` text,
  `cor_ans` varchar(5) DEFAULT NULL,
  `exam_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('1', 'This is first question for data...????? mmmmmmmmmm', 'WA', 'CA', 'WA', 'WA', 'B', '1', '2016-04-18 22:24:46', '2016-04-19 09:12:03');
INSERT INTO `questions` VALUES ('2', 'Once again a test question??? Ha ha ha...', 'WA', 'WA', 'CA', 'WA', 'C', '1', '2016-04-19 06:10:07', '2016-04-19 09:03:28');

-- ----------------------------
-- Table structure for `students`
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `marks` int(3) DEFAULT NULL,
  `exam_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES ('3', 'islamshafiq03@gmail.com', '1007003', '01731858108', '0', '1', '2016-04-19 07:10:15', '2016-04-22 16:00:11');
INSERT INTO `students` VALUES ('4', 'islamshafiq03@gmail.com', '1007001', '01234567891', null, '1', '2016-04-19 08:28:35', '2016-04-19 08:28:35');

-- ----------------------------
-- Table structure for `teachers`
-- ----------------------------
DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `simple_pwd` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of teachers
-- ----------------------------
INSERT INTO `teachers` VALUES ('1', null, null, '51146e8937d270661ba59cb612cb512d18c3bbef', 'CSE', 'test@gmail.com', 'Test', 'Lecturer', '2016-04-16 18:49:16', '2016-04-16 18:49:16');
