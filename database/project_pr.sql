/*
Navicat MySQL Data Transfer

Source Server         : localhost_database
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : project_pr

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-04-23 22:39:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_article
-- ----------------------------
DROP TABLE IF EXISTS `tbl_article`;
CREATE TABLE `tbl_article` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_p_id` int(10) NOT NULL,
  `a_title` varchar(100) NOT NULL,
  `a_detail` text NOT NULL,
  `a_img` varchar(100) NOT NULL,
  `a_view` int(12) NOT NULL DEFAULT '0',
  `a_status` varchar(5) NOT NULL DEFAULT 'show',
  `a_vdo` text COMMENT 'youtube',
  `a_last_update` datetime DEFAULT NULL COMMENT 'วันที่อัพเดทล่าสุด',
  `a_datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_article
-- ----------------------------
INSERT INTO `tbl_article` VALUES ('2', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '11', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 17:43:32');
INSERT INTO `tbl_article` VALUES ('3', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '6', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 17:49:18');
INSERT INTO `tbl_article` VALUES ('4', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '7', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 19:40:23');
INSERT INTO `tbl_article` VALUES ('5', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '6', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 19:48:55');
INSERT INTO `tbl_article` VALUES ('6', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 19:48:57');
INSERT INTO `tbl_article` VALUES ('7', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 19:49:00');
INSERT INTO `tbl_article` VALUES ('8', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-19 19:49:02');
INSERT INTO `tbl_article` VALUES ('9', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '2', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-23 17:29:17');
INSERT INTO `tbl_article` VALUES ('10', '2', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'hide', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-23 17:29:17');
INSERT INTO `tbl_article` VALUES ('11', '2', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'hide', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-25 16:17:19');
INSERT INTO `tbl_article` VALUES ('12', '2', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-06-25 16:17:36');
INSERT INTO `tbl_article` VALUES ('13', '2', 'ทดสอบ', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '6', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-01-09 10:16:30', '2018-06-25 16:40:01');
INSERT INTO `tbl_article` VALUES ('16', '3', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '2', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-05 17:18:44');
INSERT INTO `tbl_article` VALUES ('17', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-05 17:38:33');
INSERT INTO `tbl_article` VALUES ('18', '3', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-05 17:50:19');
INSERT INTO `tbl_article` VALUES ('19', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-08 22:08:00');
INSERT INTO `tbl_article` VALUES ('20', '3', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2018-07-12 17:34:34', '2018-07-08 22:10:22');
INSERT INTO `tbl_article` VALUES ('21', '6', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '2', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-08 22:20:51');
INSERT INTO `tbl_article` VALUES ('22', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:10:57');
INSERT INTO `tbl_article` VALUES ('23', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:16:27');
INSERT INTO `tbl_article` VALUES ('24', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:19:30');
INSERT INTO `tbl_article` VALUES ('25', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:45:14');
INSERT INTO `tbl_article` VALUES ('26', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:45:44');
INSERT INTO `tbl_article` VALUES ('27', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:48:00');
INSERT INTO `tbl_article` VALUES ('28', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:49:11');
INSERT INTO `tbl_article` VALUES ('29', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:51:03');
INSERT INTO `tbl_article` VALUES ('30', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:51:14');
INSERT INTO `tbl_article` VALUES ('31', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:52:08');
INSERT INTO `tbl_article` VALUES ('32', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:52:16');
INSERT INTO `tbl_article` VALUES ('33', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:52:30');
INSERT INTO `tbl_article` VALUES ('34', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:54:46');
INSERT INTO `tbl_article` VALUES ('35', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 16:59:32');
INSERT INTO `tbl_article` VALUES ('36', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '2', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:03:39');
INSERT INTO `tbl_article` VALUES ('37', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '1', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:09:22');
INSERT INTO `tbl_article` VALUES ('38', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '5', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:10:09');
INSERT INTO `tbl_article` VALUES ('39', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:11:58');
INSERT INTO `tbl_article` VALUES ('42', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:16:43');
INSERT INTO `tbl_article` VALUES ('43', '1', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '1529549363photo1.png', '0', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', null, '2018-07-09 17:20:00');
INSERT INTO `tbl_article` VALUES ('49', '3', 'Neque porro quisquam est qui dolorem ipsum quia do', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '200076db4224e08174cff5cad1089a3b.png', '30', 'show', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PLEA4F1w-xYVaY4qvlDOhiJAGE2QxdABK6\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2018-07-15 11:02:42', '2018-07-09 17:33:46');
INSERT INTO `tbl_article` VALUES ('127', '2', 'A3', '<p>addd</p>\r\n', '128008.jpg', '0', 'show', 'addd', null, '2020-01-11 22:41:15');
INSERT INTO `tbl_article` VALUES ('128', '2', 'aaaaทดสอบ', '<p>aaaaaaaaaa</p>\r\n', '128024.jpg', '0', 'show', 'aaaaaaaaaaa', null, '2020-01-11 22:43:38');
INSERT INTO `tbl_article` VALUES ('129', '2', 'ssssssss', '<p>ssssssssssssssssssssss</p>\r\n', '1529549363photo11.png', '0', 'show', 'ssssssssssssssssssss', null, '2020-01-11 22:45:31');
INSERT INTO `tbl_article` VALUES ('130', '1', 'เจนเจนจิทดสอบ', '<p>asdasdasdasdasd</p>\r\n', '1529549363photo1_-_Copy.png', '0', 'show', 'asdasdasd', '2020-01-16 06:45:15', '2020-01-11 22:45:57');
INSERT INTO `tbl_article` VALUES ('131', '1', 'ทดสอบทดสอบ', '<p>ทดสอบทดสอบ</p>\r\n', 'd39bed966f9ae92d1dce06b4af32ee7b.png', '0', 'show', 'ทดสอบทดสอบ', null, '2020-01-11 22:48:57');
INSERT INTO `tbl_article` VALUES ('132', '1', 'ทดสอบทดสอบ', '<p>ทดสอบทดสอบ</p>\r\n', '661983420616d8ca7f0fd3619d0731c9.png', '0', 'show', 'ทดสอบทดสอบ', null, '2020-01-11 22:49:14');
INSERT INTO `tbl_article` VALUES ('133', '1', 'ทดสอบทดสอบ', '<p>ทดสอบทดสอบ</p>\r\n', '04094afde5cdf8d8be20b4f87f4ce1cf.jpg', '0', 'show', 'ทดสอบทดสอบ', '2020-01-21 03:53:59', '2020-01-11 22:49:33');
INSERT INTO `tbl_article` VALUES ('134', '1', 'ทดสอบทดสอบ', '<p>ทดสอบทดสอบ</p>\r\n', '1529549363photo1_-_Copy_-_Copy1.png', '0', 'show', 'ทดสอบทดสอบ', null, '2020-01-11 22:49:55');
INSERT INTO `tbl_article` VALUES ('136', '1', 'หหหหห', '<p>หหหหหหห</p>\r\n', '9f67b168a8ed9573ffdf9133dba8439d.png', '0', 'show', 'หหหหหหหห', '2020-01-16 06:44:40', '2020-01-11 23:45:40');
INSERT INTO `tbl_article` VALUES ('137', '1', 'เจนจิรา กวินชวนชิด', '<p>เจนจิรา+บัดดี้</p>\r\n', 'fca87ee2c1f928a36402adef4f53699c.jpg', '4', 'show', 'เจนจิรา กวินชวนชิด', '2020-01-16 06:57:05', '2020-01-11 23:49:17');
INSERT INTO `tbl_article` VALUES ('138', '1', 'โจน้อยโจน้อย', '<p>โจน้อย</p>\r\n', 'face4.jpg', '2', 'hide', 'โจน้อย', null, '2020-01-17 12:41:25');
INSERT INTO `tbl_article` VALUES ('139', '1', 'cccc', '<p>cccccc</p>\r\n', 'face6.jpg', '0', 'hide', 'cccc', null, '2020-01-17 14:47:17');
INSERT INTO `tbl_article` VALUES ('140', '1', '5555', '<p>ddddddd</p>\r\n', 'avatar2.png', '0', 'show', 'ddddddddddd', null, '2020-04-20 21:52:34');

-- ----------------------------
-- Table structure for tbl_counter
-- ----------------------------
DROP TABLE IF EXISTS `tbl_counter`;
CREATE TABLE `tbl_counter` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `c_ip` varchar(50) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=353 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_counter
-- ----------------------------
INSERT INTO `tbl_counter` VALUES ('1', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('2', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('3', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('4', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('5', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('6', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('7', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('8', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('9', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('10', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('11', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('12', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('13', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('14', '127.0.0.1', '2018-06-20 18:18:59');
INSERT INTO `tbl_counter` VALUES ('15', '127.0.0.1', '2018-07-03 18:32:40');
INSERT INTO `tbl_counter` VALUES ('16', '127.0.0.1', '2018-07-03 18:33:09');
INSERT INTO `tbl_counter` VALUES ('17', '127.0.0.1', '2018-07-03 18:34:21');
INSERT INTO `tbl_counter` VALUES ('18', '127.0.0.1', '2018-07-03 18:34:52');
INSERT INTO `tbl_counter` VALUES ('19', '127.0.0.1', '2018-07-03 18:37:29');
INSERT INTO `tbl_counter` VALUES ('20', '127.0.0.1', '2018-07-03 18:37:30');
INSERT INTO `tbl_counter` VALUES ('21', '127.0.0.1', '2018-07-03 18:37:32');
INSERT INTO `tbl_counter` VALUES ('22', '127.0.0.1', '2018-07-03 18:37:32');
INSERT INTO `tbl_counter` VALUES ('23', '127.0.0.1', '2018-07-03 18:37:33');
INSERT INTO `tbl_counter` VALUES ('24', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('25', '127.0.0.1', '2018-07-03 18:39:16');
INSERT INTO `tbl_counter` VALUES ('26', '127.0.0.1', '2018-07-03 18:39:18');
INSERT INTO `tbl_counter` VALUES ('27', '127.0.0.1', '2018-07-03 18:39:19');
INSERT INTO `tbl_counter` VALUES ('28', '127.0.0.1', '2018-07-03 18:41:11');
INSERT INTO `tbl_counter` VALUES ('29', '127.0.0.1', '2018-07-03 18:41:14');
INSERT INTO `tbl_counter` VALUES ('30', '127.0.0.1', '2018-07-03 18:41:47');
INSERT INTO `tbl_counter` VALUES ('31', '127.0.0.1', '2018-07-03 18:42:24');
INSERT INTO `tbl_counter` VALUES ('32', '127.0.0.1', '2018-07-03 18:42:50');
INSERT INTO `tbl_counter` VALUES ('33', '127.0.0.1', '2018-07-03 18:58:19');
INSERT INTO `tbl_counter` VALUES ('34', '127.0.0.1', '2018-07-03 19:00:23');
INSERT INTO `tbl_counter` VALUES ('35', '127.0.0.1', '2018-07-03 19:03:30');
INSERT INTO `tbl_counter` VALUES ('36', '127.0.0.1', '2018-07-03 19:03:57');
INSERT INTO `tbl_counter` VALUES ('37', '127.0.0.1', '2018-07-03 19:07:22');
INSERT INTO `tbl_counter` VALUES ('38', '127.0.0.1', '2018-07-03 19:08:34');
INSERT INTO `tbl_counter` VALUES ('39', '127.0.0.1', '2018-07-03 19:31:52');
INSERT INTO `tbl_counter` VALUES ('40', '127.0.0.1', '2018-07-03 19:32:33');
INSERT INTO `tbl_counter` VALUES ('41', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('42', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('43', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('44', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('45', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('46', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('47', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('48', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('49', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('50', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('51', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('52', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('53', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('54', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('55', '127.0.0.1', '2018-08-31 18:38:48');
INSERT INTO `tbl_counter` VALUES ('56', '127.0.0.1', '2018-07-03 20:11:25');
INSERT INTO `tbl_counter` VALUES ('57', '127.0.0.1', '2018-07-03 20:11:27');
INSERT INTO `tbl_counter` VALUES ('58', '127.0.0.1', '2018-07-03 20:11:35');
INSERT INTO `tbl_counter` VALUES ('59', '127.0.0.1', '2018-07-03 20:12:09');
INSERT INTO `tbl_counter` VALUES ('60', '127.0.0.1', '2018-07-03 20:12:10');
INSERT INTO `tbl_counter` VALUES ('61', '127.0.0.1', '2018-07-04 21:13:07');
INSERT INTO `tbl_counter` VALUES ('62', '127.0.0.1', '2018-07-05 16:38:11');
INSERT INTO `tbl_counter` VALUES ('63', '127.0.0.1', '2018-07-05 16:39:48');
INSERT INTO `tbl_counter` VALUES ('64', '127.0.0.1', '2018-07-05 16:40:47');
INSERT INTO `tbl_counter` VALUES ('65', '127.0.0.1', '2018-07-05 16:40:48');
INSERT INTO `tbl_counter` VALUES ('66', '127.0.0.1', '2018-07-05 16:40:59');
INSERT INTO `tbl_counter` VALUES ('67', '127.0.0.1', '2018-07-05 16:41:35');
INSERT INTO `tbl_counter` VALUES ('68', '127.0.0.1', '2018-07-05 16:44:48');
INSERT INTO `tbl_counter` VALUES ('69', '127.0.0.1', '2018-07-05 16:57:45');
INSERT INTO `tbl_counter` VALUES ('70', '127.0.0.1', '2018-07-05 17:03:15');
INSERT INTO `tbl_counter` VALUES ('71', '127.0.0.1', '2018-07-05 17:04:50');
INSERT INTO `tbl_counter` VALUES ('72', '127.0.0.1', '2018-07-05 17:05:13');
INSERT INTO `tbl_counter` VALUES ('73', '127.0.0.1', '2018-07-05 17:08:07');
INSERT INTO `tbl_counter` VALUES ('74', '127.0.0.1', '2018-07-05 17:08:23');
INSERT INTO `tbl_counter` VALUES ('75', '127.0.0.1', '2018-07-05 17:10:52');
INSERT INTO `tbl_counter` VALUES ('76', '127.0.0.1', '2018-07-05 17:17:43');
INSERT INTO `tbl_counter` VALUES ('77', '127.0.0.1', '2018-07-05 17:17:45');
INSERT INTO `tbl_counter` VALUES ('78', '127.0.0.1', '2018-07-05 17:17:46');
INSERT INTO `tbl_counter` VALUES ('79', '127.0.0.1', '2018-07-05 17:17:47');
INSERT INTO `tbl_counter` VALUES ('80', '127.0.0.1', '2018-07-05 17:17:59');
INSERT INTO `tbl_counter` VALUES ('81', '127.0.0.1', '2018-07-05 17:23:20');
INSERT INTO `tbl_counter` VALUES ('82', '127.0.0.1', '2018-07-05 17:23:40');
INSERT INTO `tbl_counter` VALUES ('83', '127.0.0.1', '2018-07-05 17:26:39');
INSERT INTO `tbl_counter` VALUES ('84', '127.0.0.1', '2018-07-05 17:31:24');
INSERT INTO `tbl_counter` VALUES ('85', '127.0.0.1', '2018-07-05 17:38:08');
INSERT INTO `tbl_counter` VALUES ('86', '127.0.0.1', '2018-07-05 17:39:04');
INSERT INTO `tbl_counter` VALUES ('87', '127.0.0.1', '2018-07-05 17:50:46');
INSERT INTO `tbl_counter` VALUES ('88', '127.0.0.1', '2018-07-05 17:51:02');
INSERT INTO `tbl_counter` VALUES ('89', '127.0.0.1', '2018-07-05 17:51:24');
INSERT INTO `tbl_counter` VALUES ('90', '127.0.0.1', '2018-07-05 17:51:37');
INSERT INTO `tbl_counter` VALUES ('91', '127.0.0.1', '2018-07-05 17:52:01');
INSERT INTO `tbl_counter` VALUES ('92', '127.0.0.1', '2018-07-05 17:52:18');
INSERT INTO `tbl_counter` VALUES ('93', '127.0.0.1', '2018-07-05 17:52:20');
INSERT INTO `tbl_counter` VALUES ('94', '127.0.0.1', '2018-07-05 17:54:01');
INSERT INTO `tbl_counter` VALUES ('95', '127.0.0.1', '2018-07-05 17:54:05');
INSERT INTO `tbl_counter` VALUES ('96', '127.0.0.1', '2018-07-05 17:54:25');
INSERT INTO `tbl_counter` VALUES ('97', '127.0.0.1', '2018-07-05 17:54:26');
INSERT INTO `tbl_counter` VALUES ('98', '127.0.0.1', '2018-07-05 17:56:33');
INSERT INTO `tbl_counter` VALUES ('99', '127.0.0.1', '2018-07-05 17:56:34');
INSERT INTO `tbl_counter` VALUES ('100', '127.0.0.1', '2018-07-05 17:58:06');
INSERT INTO `tbl_counter` VALUES ('101', '127.0.0.1', '2018-07-05 17:59:08');
INSERT INTO `tbl_counter` VALUES ('102', '127.0.0.1', '2018-07-07 11:27:43');
INSERT INTO `tbl_counter` VALUES ('103', '127.0.0.1', '2018-07-07 11:48:10');
INSERT INTO `tbl_counter` VALUES ('104', '127.0.0.1', '2018-07-07 11:48:18');
INSERT INTO `tbl_counter` VALUES ('105', '127.0.0.1', '2018-07-07 11:48:24');
INSERT INTO `tbl_counter` VALUES ('106', '127.0.0.1', '2018-07-08 22:06:35');
INSERT INTO `tbl_counter` VALUES ('107', '127.0.0.1', '2018-07-08 22:09:49');
INSERT INTO `tbl_counter` VALUES ('108', '127.0.0.1', '2018-07-08 22:10:48');
INSERT INTO `tbl_counter` VALUES ('109', '127.0.0.1', '2018-07-08 22:11:43');
INSERT INTO `tbl_counter` VALUES ('110', '127.0.0.1', '2018-07-08 22:12:42');
INSERT INTO `tbl_counter` VALUES ('111', '127.0.0.1', '2018-07-08 22:13:08');
INSERT INTO `tbl_counter` VALUES ('112', '127.0.0.1', '2018-07-08 22:21:19');
INSERT INTO `tbl_counter` VALUES ('113', '127.0.0.1', '2018-07-08 22:22:03');
INSERT INTO `tbl_counter` VALUES ('114', '127.0.0.1', '2018-07-08 22:23:52');
INSERT INTO `tbl_counter` VALUES ('115', '127.0.0.1', '2018-07-08 22:23:57');
INSERT INTO `tbl_counter` VALUES ('116', '127.0.0.1', '2018-07-08 22:32:32');
INSERT INTO `tbl_counter` VALUES ('117', '127.0.0.1', '2018-07-08 22:32:45');
INSERT INTO `tbl_counter` VALUES ('118', '127.0.0.1', '2018-07-08 23:03:15');
INSERT INTO `tbl_counter` VALUES ('119', '127.0.0.1', '2018-07-08 23:03:27');
INSERT INTO `tbl_counter` VALUES ('120', '127.0.0.1', '2018-07-08 23:19:53');
INSERT INTO `tbl_counter` VALUES ('121', '127.0.0.1', '2018-07-08 23:20:49');
INSERT INTO `tbl_counter` VALUES ('122', '127.0.0.1', '2018-07-09 17:23:53');
INSERT INTO `tbl_counter` VALUES ('123', '127.0.0.1', '2018-07-09 17:24:01');
INSERT INTO `tbl_counter` VALUES ('124', '127.0.0.1', '2018-07-09 17:24:42');
INSERT INTO `tbl_counter` VALUES ('125', '127.0.0.1', '2018-07-09 17:33:32');
INSERT INTO `tbl_counter` VALUES ('126', '127.0.0.1', '2018-07-09 17:35:42');
INSERT INTO `tbl_counter` VALUES ('127', '127.0.0.1', '2018-07-09 17:37:06');
INSERT INTO `tbl_counter` VALUES ('128', '127.0.0.1', '2018-07-09 17:37:08');
INSERT INTO `tbl_counter` VALUES ('129', '127.0.0.1', '2018-07-09 17:37:11');
INSERT INTO `tbl_counter` VALUES ('130', '127.0.0.1', '2018-07-09 17:37:32');
INSERT INTO `tbl_counter` VALUES ('131', '127.0.0.1', '2018-07-09 17:37:43');
INSERT INTO `tbl_counter` VALUES ('132', '127.0.0.1', '2018-07-09 17:39:56');
INSERT INTO `tbl_counter` VALUES ('133', '127.0.0.1', '2018-07-09 17:41:02');
INSERT INTO `tbl_counter` VALUES ('134', '127.0.0.1', '2018-07-09 17:41:26');
INSERT INTO `tbl_counter` VALUES ('135', '127.0.0.1', '2018-07-09 18:30:53');
INSERT INTO `tbl_counter` VALUES ('136', '127.0.0.1', '2018-07-09 18:33:02');
INSERT INTO `tbl_counter` VALUES ('137', '127.0.0.1', '2018-07-09 18:33:02');
INSERT INTO `tbl_counter` VALUES ('138', '127.0.0.1', '2018-07-09 18:33:06');
INSERT INTO `tbl_counter` VALUES ('139', '127.0.0.1', '2018-07-09 18:33:20');
INSERT INTO `tbl_counter` VALUES ('140', '127.0.0.1', '2018-07-09 18:34:55');
INSERT INTO `tbl_counter` VALUES ('141', '127.0.0.1', '2018-07-09 18:35:04');
INSERT INTO `tbl_counter` VALUES ('142', '127.0.0.1', '2018-07-09 18:43:53');
INSERT INTO `tbl_counter` VALUES ('143', '127.0.0.1', '2018-07-09 18:48:14');
INSERT INTO `tbl_counter` VALUES ('144', '127.0.0.1', '2018-07-09 18:48:15');
INSERT INTO `tbl_counter` VALUES ('145', '127.0.0.1', '2018-07-09 18:48:15');
INSERT INTO `tbl_counter` VALUES ('146', '127.0.0.1', '2018-07-09 18:50:12');
INSERT INTO `tbl_counter` VALUES ('147', '127.0.0.1', '2018-07-09 18:52:07');
INSERT INTO `tbl_counter` VALUES ('148', '127.0.0.1', '2018-07-11 11:11:34');
INSERT INTO `tbl_counter` VALUES ('149', '127.0.0.1', '2018-07-11 11:13:55');
INSERT INTO `tbl_counter` VALUES ('150', '127.0.0.1', '2018-07-12 22:20:21');
INSERT INTO `tbl_counter` VALUES ('151', '127.0.0.1', '2018-07-12 22:35:40');
INSERT INTO `tbl_counter` VALUES ('152', '127.0.0.1', '2018-07-12 22:38:33');
INSERT INTO `tbl_counter` VALUES ('153', '127.0.0.1', '2018-07-12 22:38:39');
INSERT INTO `tbl_counter` VALUES ('154', '127.0.0.1', '2018-07-14 12:48:56');
INSERT INTO `tbl_counter` VALUES ('155', '127.0.0.1', '2018-07-14 13:06:04');
INSERT INTO `tbl_counter` VALUES ('156', '127.0.0.1', '2018-07-14 16:28:13');
INSERT INTO `tbl_counter` VALUES ('157', '127.0.0.1', '2018-07-14 22:44:47');
INSERT INTO `tbl_counter` VALUES ('158', '127.0.0.1', '2018-07-15 15:54:10');
INSERT INTO `tbl_counter` VALUES ('159', '127.0.0.1', '2018-07-15 16:00:22');
INSERT INTO `tbl_counter` VALUES ('160', '127.0.0.1', '2018-07-15 16:02:51');
INSERT INTO `tbl_counter` VALUES ('161', '127.0.0.1', '2018-07-15 16:05:19');
INSERT INTO `tbl_counter` VALUES ('162', '127.0.0.1', '2018-07-15 16:07:07');
INSERT INTO `tbl_counter` VALUES ('163', '127.0.0.1', '2018-07-15 16:08:19');
INSERT INTO `tbl_counter` VALUES ('164', '127.0.0.1', '2018-07-15 16:08:22');
INSERT INTO `tbl_counter` VALUES ('165', '127.0.0.1', '2018-07-15 16:08:57');
INSERT INTO `tbl_counter` VALUES ('166', '127.0.0.1', '2018-07-15 16:08:59');
INSERT INTO `tbl_counter` VALUES ('167', '127.0.0.1', '2018-07-15 16:09:01');
INSERT INTO `tbl_counter` VALUES ('168', '127.0.0.1', '2018-07-15 16:09:19');
INSERT INTO `tbl_counter` VALUES ('169', '127.0.0.1', '2019-09-01 13:30:04');
INSERT INTO `tbl_counter` VALUES ('170', '127.0.0.1', '2019-09-01 13:30:17');
INSERT INTO `tbl_counter` VALUES ('171', '127.0.0.1', '2019-09-01 13:32:15');
INSERT INTO `tbl_counter` VALUES ('172', '127.0.0.1', '2019-09-01 13:36:03');
INSERT INTO `tbl_counter` VALUES ('173', '127.0.0.1', '2019-09-01 13:36:49');
INSERT INTO `tbl_counter` VALUES ('174', '127.0.0.1', '2019-09-01 13:42:13');
INSERT INTO `tbl_counter` VALUES ('175', '127.0.0.1', '2019-09-01 13:42:15');
INSERT INTO `tbl_counter` VALUES ('176', '127.0.0.1', '2019-09-01 13:54:34');
INSERT INTO `tbl_counter` VALUES ('177', '127.0.0.1', '2019-09-01 13:54:55');
INSERT INTO `tbl_counter` VALUES ('178', '127.0.0.1', '2019-09-01 13:57:58');
INSERT INTO `tbl_counter` VALUES ('179', '::1', '2019-12-17 00:24:31');
INSERT INTO `tbl_counter` VALUES ('180', '127.0.0.1', '2019-12-17 00:27:38');
INSERT INTO `tbl_counter` VALUES ('181', '127.0.0.1', '2019-12-17 00:28:45');
INSERT INTO `tbl_counter` VALUES ('182', '127.0.0.1', '2019-12-17 00:29:05');
INSERT INTO `tbl_counter` VALUES ('183', '127.0.0.1', '2019-12-17 00:29:22');
INSERT INTO `tbl_counter` VALUES ('184', '127.0.0.1', '2019-12-17 00:29:33');
INSERT INTO `tbl_counter` VALUES ('185', '127.0.0.1', '2019-12-17 01:13:02');
INSERT INTO `tbl_counter` VALUES ('186', '127.0.0.1', '2019-12-17 01:13:58');
INSERT INTO `tbl_counter` VALUES ('187', '127.0.0.1', '2019-12-17 01:14:06');
INSERT INTO `tbl_counter` VALUES ('188', '127.0.0.1', '2019-12-17 01:23:33');
INSERT INTO `tbl_counter` VALUES ('189', '127.0.0.1', '2019-12-17 01:53:52');
INSERT INTO `tbl_counter` VALUES ('190', '127.0.0.1', '2019-12-17 01:54:03');
INSERT INTO `tbl_counter` VALUES ('191', '127.0.0.1', '2019-12-17 02:33:29');
INSERT INTO `tbl_counter` VALUES ('192', '127.0.0.1', '2019-12-17 02:44:02');
INSERT INTO `tbl_counter` VALUES ('193', '127.0.0.1', '2019-12-17 02:45:11');
INSERT INTO `tbl_counter` VALUES ('194', '127.0.0.1', '2019-12-17 02:47:35');
INSERT INTO `tbl_counter` VALUES ('195', '::1', '2019-12-17 02:50:01');
INSERT INTO `tbl_counter` VALUES ('196', '127.0.0.1', '2019-12-17 02:50:32');
INSERT INTO `tbl_counter` VALUES ('197', '127.0.0.1', '2019-12-17 02:50:32');
INSERT INTO `tbl_counter` VALUES ('198', '127.0.0.1', '2019-12-17 02:50:50');
INSERT INTO `tbl_counter` VALUES ('199', '127.0.0.1', '2019-12-17 02:50:50');
INSERT INTO `tbl_counter` VALUES ('200', '127.0.0.1', '2019-12-17 02:53:22');
INSERT INTO `tbl_counter` VALUES ('201', '127.0.0.1', '2019-12-17 02:53:23');
INSERT INTO `tbl_counter` VALUES ('202', '::1', '2019-12-17 08:10:05');
INSERT INTO `tbl_counter` VALUES ('203', '127.0.0.1', '2019-12-17 09:34:40');
INSERT INTO `tbl_counter` VALUES ('204', '::1', '2019-12-17 11:57:40');
INSERT INTO `tbl_counter` VALUES ('205', '127.0.0.1', '2019-12-17 11:58:58');
INSERT INTO `tbl_counter` VALUES ('206', '127.0.0.1', '2019-12-17 12:02:21');
INSERT INTO `tbl_counter` VALUES ('207', '127.0.0.1', '2019-12-17 12:02:55');
INSERT INTO `tbl_counter` VALUES ('208', '127.0.0.1', '2019-12-17 12:03:30');
INSERT INTO `tbl_counter` VALUES ('209', '127.0.0.1', '2019-12-17 12:03:58');
INSERT INTO `tbl_counter` VALUES ('210', '::1', '2019-12-17 19:50:02');
INSERT INTO `tbl_counter` VALUES ('211', '127.0.0.1', '2019-12-17 19:59:27');
INSERT INTO `tbl_counter` VALUES ('212', '127.0.0.1', '2019-12-17 19:59:59');
INSERT INTO `tbl_counter` VALUES ('213', '127.0.0.1', '2019-12-17 20:03:26');
INSERT INTO `tbl_counter` VALUES ('214', '::1', '2019-12-17 23:00:57');
INSERT INTO `tbl_counter` VALUES ('215', '::1', '2019-12-18 00:34:35');
INSERT INTO `tbl_counter` VALUES ('216', '::1', '2020-01-07 19:52:47');
INSERT INTO `tbl_counter` VALUES ('217', '127.0.0.1', '2020-01-07 19:53:02');
INSERT INTO `tbl_counter` VALUES ('218', '::1', '2020-01-07 22:03:47');
INSERT INTO `tbl_counter` VALUES ('219', '127.0.0.1', '2020-01-07 22:04:07');
INSERT INTO `tbl_counter` VALUES ('220', '::1', '2020-01-09 14:34:34');
INSERT INTO `tbl_counter` VALUES ('221', '127.0.0.1', '2020-01-09 14:35:56');
INSERT INTO `tbl_counter` VALUES ('222', '127.0.0.1', '2020-01-09 14:35:58');
INSERT INTO `tbl_counter` VALUES ('223', '127.0.0.1', '2020-01-09 14:41:24');
INSERT INTO `tbl_counter` VALUES ('224', '127.0.0.1', '2020-01-09 14:46:00');
INSERT INTO `tbl_counter` VALUES ('225', '127.0.0.1', '2020-01-09 14:46:35');
INSERT INTO `tbl_counter` VALUES ('226', '127.0.0.1', '2020-01-09 14:59:12');
INSERT INTO `tbl_counter` VALUES ('227', '127.0.0.1', '2020-01-09 15:15:30');
INSERT INTO `tbl_counter` VALUES ('228', '127.0.0.1', '2020-01-09 15:16:40');
INSERT INTO `tbl_counter` VALUES ('229', '127.0.0.1', '2020-01-09 16:12:17');
INSERT INTO `tbl_counter` VALUES ('230', '127.0.0.1', '2020-01-09 16:16:34');
INSERT INTO `tbl_counter` VALUES ('231', '127.0.0.1', '2020-01-09 16:17:09');
INSERT INTO `tbl_counter` VALUES ('232', '127.0.0.1', '2020-01-09 16:18:04');
INSERT INTO `tbl_counter` VALUES ('233', '127.0.0.1', '2020-01-09 16:18:17');
INSERT INTO `tbl_counter` VALUES ('234', '127.0.0.1', '2020-01-09 16:24:04');
INSERT INTO `tbl_counter` VALUES ('235', '127.0.0.1', '2020-01-09 16:25:37');
INSERT INTO `tbl_counter` VALUES ('236', '127.0.0.1', '2020-01-09 16:25:59');
INSERT INTO `tbl_counter` VALUES ('237', '::1', '2020-01-09 17:46:10');
INSERT INTO `tbl_counter` VALUES ('238', '127.0.0.1', '2020-01-09 17:47:26');
INSERT INTO `tbl_counter` VALUES ('239', '127.0.0.1', '2020-01-09 17:52:17');
INSERT INTO `tbl_counter` VALUES ('240', '127.0.0.1', '2020-01-09 17:54:25');
INSERT INTO `tbl_counter` VALUES ('241', '127.0.0.1', '2020-01-09 17:56:47');
INSERT INTO `tbl_counter` VALUES ('242', '127.0.0.1', '2020-01-09 18:10:59');
INSERT INTO `tbl_counter` VALUES ('243', '127.0.0.1', '2020-01-09 18:27:31');
INSERT INTO `tbl_counter` VALUES ('244', '127.0.0.1', '2020-01-09 19:40:39');
INSERT INTO `tbl_counter` VALUES ('245', '127.0.0.1', '2020-01-09 19:42:31');
INSERT INTO `tbl_counter` VALUES ('246', '127.0.0.1', '2020-01-09 19:47:33');
INSERT INTO `tbl_counter` VALUES ('247', '127.0.0.1', '2020-01-09 20:14:56');
INSERT INTO `tbl_counter` VALUES ('248', '127.0.0.1', '2020-01-09 20:15:46');
INSERT INTO `tbl_counter` VALUES ('249', '127.0.0.1', '2020-01-09 20:16:08');
INSERT INTO `tbl_counter` VALUES ('250', '127.0.0.1', '2020-01-09 20:17:07');
INSERT INTO `tbl_counter` VALUES ('251', '127.0.0.1', '2020-01-09 20:17:34');
INSERT INTO `tbl_counter` VALUES ('252', '127.0.0.1', '2020-01-09 23:01:26');
INSERT INTO `tbl_counter` VALUES ('253', '127.0.0.1', '2020-01-09 23:04:17');
INSERT INTO `tbl_counter` VALUES ('254', '127.0.0.1', '2020-01-09 23:04:46');
INSERT INTO `tbl_counter` VALUES ('255', '127.0.0.1', '2020-01-09 23:26:11');
INSERT INTO `tbl_counter` VALUES ('256', '127.0.0.1', '2020-01-10 17:14:26');
INSERT INTO `tbl_counter` VALUES ('257', '127.0.0.1', '2020-01-10 18:34:48');
INSERT INTO `tbl_counter` VALUES ('258', '127.0.0.1', '2020-01-10 20:18:40');
INSERT INTO `tbl_counter` VALUES ('259', '127.0.0.1', '2020-01-11 00:06:42');
INSERT INTO `tbl_counter` VALUES ('260', '127.0.0.1', '2020-01-11 00:19:02');
INSERT INTO `tbl_counter` VALUES ('261', '::1', '2020-01-11 21:37:10');
INSERT INTO `tbl_counter` VALUES ('262', '::1', '2020-01-11 21:37:10');
INSERT INTO `tbl_counter` VALUES ('263', '127.0.0.1', '2020-01-11 21:38:18');
INSERT INTO `tbl_counter` VALUES ('264', '127.0.0.1', '2020-01-11 21:47:03');
INSERT INTO `tbl_counter` VALUES ('265', '127.0.0.1', '2020-01-11 22:41:22');
INSERT INTO `tbl_counter` VALUES ('266', '127.0.0.1', '2020-01-11 22:42:32');
INSERT INTO `tbl_counter` VALUES ('267', '127.0.0.1', '2020-01-11 22:43:53');
INSERT INTO `tbl_counter` VALUES ('268', '127.0.0.1', '2020-01-11 22:44:42');
INSERT INTO `tbl_counter` VALUES ('269', '127.0.0.1', '2020-01-11 22:45:36');
INSERT INTO `tbl_counter` VALUES ('270', '::1', '2020-01-16 11:34:07');
INSERT INTO `tbl_counter` VALUES ('271', '::1', '2020-01-16 11:34:18');
INSERT INTO `tbl_counter` VALUES ('272', '::1', '2020-01-16 11:34:19');
INSERT INTO `tbl_counter` VALUES ('273', '::1', '2020-01-16 11:34:20');
INSERT INTO `tbl_counter` VALUES ('274', '127.0.0.1', '2020-01-16 11:37:47');
INSERT INTO `tbl_counter` VALUES ('275', '::1', '2020-01-16 12:32:38');
INSERT INTO `tbl_counter` VALUES ('276', '::1', '2020-01-16 12:32:38');
INSERT INTO `tbl_counter` VALUES ('277', '::1', '2020-01-16 12:46:40');
INSERT INTO `tbl_counter` VALUES ('278', '::1', '2020-01-16 12:46:41');
INSERT INTO `tbl_counter` VALUES ('279', '::1', '2020-01-16 12:46:44');
INSERT INTO `tbl_counter` VALUES ('280', '127.0.0.1', '2020-01-16 12:47:12');
INSERT INTO `tbl_counter` VALUES ('281', '::1', '2020-01-16 12:47:47');
INSERT INTO `tbl_counter` VALUES ('282', '::1', '2020-01-16 12:47:47');
INSERT INTO `tbl_counter` VALUES ('283', '::1', '2020-01-16 12:48:12');
INSERT INTO `tbl_counter` VALUES ('284', '::1', '2020-01-16 12:48:12');
INSERT INTO `tbl_counter` VALUES ('285', '::1', '2020-01-16 12:48:37');
INSERT INTO `tbl_counter` VALUES ('286', '::1', '2020-01-16 12:48:37');
INSERT INTO `tbl_counter` VALUES ('287', '127.0.0.1', '2020-01-16 12:49:09');
INSERT INTO `tbl_counter` VALUES ('288', '127.0.0.1', '2020-01-16 12:49:36');
INSERT INTO `tbl_counter` VALUES ('289', '::1', '2020-01-16 12:54:40');
INSERT INTO `tbl_counter` VALUES ('290', '127.0.0.1', '2020-01-16 12:57:53');
INSERT INTO `tbl_counter` VALUES ('291', '127.0.0.1', '2020-01-16 16:12:22');
INSERT INTO `tbl_counter` VALUES ('292', '::1', '2020-01-16 16:31:56');
INSERT INTO `tbl_counter` VALUES ('293', '::1', '2020-01-16 16:31:57');
INSERT INTO `tbl_counter` VALUES ('294', '::1', '2020-01-16 16:32:07');
INSERT INTO `tbl_counter` VALUES ('295', '::1', '2020-01-16 16:32:09');
INSERT INTO `tbl_counter` VALUES ('296', '::1', '2020-01-16 16:32:11');
INSERT INTO `tbl_counter` VALUES ('297', '127.0.0.1', '2020-01-16 21:51:11');
INSERT INTO `tbl_counter` VALUES ('298', '::1', '2020-01-16 22:54:14');
INSERT INTO `tbl_counter` VALUES ('299', '::1', '2020-01-16 22:54:14');
INSERT INTO `tbl_counter` VALUES ('300', '::1', '2020-01-17 12:25:09');
INSERT INTO `tbl_counter` VALUES ('301', '::1', '2020-01-17 12:25:09');
INSERT INTO `tbl_counter` VALUES ('302', '::1', '2020-01-17 12:26:54');
INSERT INTO `tbl_counter` VALUES ('303', '::1', '2020-01-17 12:26:54');
INSERT INTO `tbl_counter` VALUES ('304', '::1', '2020-01-17 14:46:42');
INSERT INTO `tbl_counter` VALUES ('305', '::1', '2020-01-21 09:53:19');
INSERT INTO `tbl_counter` VALUES ('306', '::1', '2020-01-21 09:53:19');
INSERT INTO `tbl_counter` VALUES ('307', '127.0.0.1', '2020-01-21 09:54:03');
INSERT INTO `tbl_counter` VALUES ('308', '::1', '2020-01-21 13:48:21');
INSERT INTO `tbl_counter` VALUES ('309', '::1', '2020-01-21 13:48:22');
INSERT INTO `tbl_counter` VALUES ('310', '::1', '2020-01-21 13:48:35');
INSERT INTO `tbl_counter` VALUES ('311', '::1', '2020-01-21 13:48:38');
INSERT INTO `tbl_counter` VALUES ('312', '::1', '2020-01-22 13:00:04');
INSERT INTO `tbl_counter` VALUES ('313', '::1', '2020-01-22 13:00:05');
INSERT INTO `tbl_counter` VALUES ('314', '::1', '2020-01-28 13:35:02');
INSERT INTO `tbl_counter` VALUES ('315', '::1', '2020-01-28 13:35:03');
INSERT INTO `tbl_counter` VALUES ('316', '127.0.0.1', '2020-01-28 13:36:22');
INSERT INTO `tbl_counter` VALUES ('317', '::1', '2020-01-28 15:10:42');
INSERT INTO `tbl_counter` VALUES ('318', '::1', '2020-01-28 15:10:43');
INSERT INTO `tbl_counter` VALUES ('319', '::1', '2020-01-29 01:10:12');
INSERT INTO `tbl_counter` VALUES ('320', '::1', '2020-01-29 01:10:12');
INSERT INTO `tbl_counter` VALUES ('321', '127.0.0.1', '2020-01-29 01:15:25');
INSERT INTO `tbl_counter` VALUES ('322', '::1', '2020-04-20 21:42:34');
INSERT INTO `tbl_counter` VALUES ('323', '127.0.0.1', '2020-04-20 21:42:55');
INSERT INTO `tbl_counter` VALUES ('324', '127.0.0.1', '2020-04-20 21:43:15');
INSERT INTO `tbl_counter` VALUES ('325', '127.0.0.1', '2020-04-20 21:51:43');
INSERT INTO `tbl_counter` VALUES ('326', '::1', '2020-04-21 21:54:11');
INSERT INTO `tbl_counter` VALUES ('327', '::1', '2020-04-21 22:39:13');
INSERT INTO `tbl_counter` VALUES ('328', '127.0.0.1', '2020-04-21 22:41:42');
INSERT INTO `tbl_counter` VALUES ('329', '::1', '2020-04-21 23:10:05');
INSERT INTO `tbl_counter` VALUES ('330', '127.0.0.1', '2020-04-21 23:10:22');
INSERT INTO `tbl_counter` VALUES ('331', '::1', '2020-04-23 22:03:42');
INSERT INTO `tbl_counter` VALUES ('332', '127.0.0.1', '2020-04-23 22:09:06');
INSERT INTO `tbl_counter` VALUES ('333', '127.0.0.1', '2020-04-23 22:12:27');
INSERT INTO `tbl_counter` VALUES ('334', '127.0.0.1', '2020-04-23 22:12:39');
INSERT INTO `tbl_counter` VALUES ('335', '127.0.0.1', '2020-04-23 22:13:47');
INSERT INTO `tbl_counter` VALUES ('336', '127.0.0.1', '2020-04-23 22:14:54');
INSERT INTO `tbl_counter` VALUES ('337', '127.0.0.1', '2020-04-23 22:15:03');
INSERT INTO `tbl_counter` VALUES ('338', '127.0.0.1', '2020-04-23 22:15:27');
INSERT INTO `tbl_counter` VALUES ('339', '127.0.0.1', '2020-04-23 22:16:28');
INSERT INTO `tbl_counter` VALUES ('340', '127.0.0.1', '2020-04-23 22:16:29');
INSERT INTO `tbl_counter` VALUES ('341', '127.0.0.1', '2020-04-23 22:16:29');
INSERT INTO `tbl_counter` VALUES ('342', '127.0.0.1', '2020-04-23 22:16:30');
INSERT INTO `tbl_counter` VALUES ('343', '127.0.0.1', '2020-04-23 22:16:30');
INSERT INTO `tbl_counter` VALUES ('344', '127.0.0.1', '2020-04-23 22:16:30');
INSERT INTO `tbl_counter` VALUES ('345', '127.0.0.1', '2020-04-23 22:17:26');
INSERT INTO `tbl_counter` VALUES ('346', '::1', '2020-04-23 22:18:52');
INSERT INTO `tbl_counter` VALUES ('347', '::1', '2020-04-23 22:18:52');
INSERT INTO `tbl_counter` VALUES ('348', '127.0.0.1', '2020-04-23 22:20:58');
INSERT INTO `tbl_counter` VALUES ('349', '127.0.0.1', '2020-04-23 22:31:12');
INSERT INTO `tbl_counter` VALUES ('350', '127.0.0.1', '2020-04-23 22:31:51');
INSERT INTO `tbl_counter` VALUES ('351', '127.0.0.1', '2020-04-23 22:37:40');
INSERT INTO `tbl_counter` VALUES ('352', '127.0.0.1', '2020-04-23 22:37:52');

-- ----------------------------
-- Table structure for tbl_img
-- ----------------------------
DROP TABLE IF EXISTS `tbl_img`;
CREATE TABLE `tbl_img` (
  `m_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_a_id` int(10) NOT NULL,
  `m_img` varchar(100) NOT NULL,
  `m_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_img
-- ----------------------------
INSERT INTO `tbl_img` VALUES ('1', '8', '1529549363photo1.png', '2018-06-21 09:51:12');
INSERT INTO `tbl_img` VALUES ('2', '8', '1529549363photo1.png', '2018-06-21 09:51:12');
INSERT INTO `tbl_img` VALUES ('3', '8', '1529549363photo1.png', '2018-06-21 09:51:12');
INSERT INTO `tbl_img` VALUES ('4', '8', '1529549363photo1.png', '2018-06-21 09:51:12');
INSERT INTO `tbl_img` VALUES ('5', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('6', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('7', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('8', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('9', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('10', '8', '1529549363photo1.png', '2018-06-21 09:57:19');
INSERT INTO `tbl_img` VALUES ('11', '7', '1529549363photo1.png', '2018-06-21 09:59:16');
INSERT INTO `tbl_img` VALUES ('12', '7', '1529549363photo1.png', '2018-06-21 09:59:57');
INSERT INTO `tbl_img` VALUES ('13', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('14', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('15', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('16', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('17', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('18', '12', '1529549363photo1.png', '2018-06-25 16:22:04');
INSERT INTO `tbl_img` VALUES ('21', '14', '1529549363photo1.png', '2018-06-26 16:08:21');
INSERT INTO `tbl_img` VALUES ('22', '14', '1529549363photo1.png', '2018-06-26 16:08:21');
INSERT INTO `tbl_img` VALUES ('26', '14', '1529549363photo1.png', '2018-06-26 16:24:08');
INSERT INTO `tbl_img` VALUES ('28', '14', '1529549363photo1.png', '2018-06-26 16:24:08');
INSERT INTO `tbl_img` VALUES ('29', '14', '1529549363photo1.png', '2018-06-26 16:24:08');
INSERT INTO `tbl_img` VALUES ('30', '14', '1529549363photo1.png', '2018-06-26 16:24:08');
INSERT INTO `tbl_img` VALUES ('32', '11', '1529549363photo1.png', '2018-06-26 16:26:28');
INSERT INTO `tbl_img` VALUES ('33', '11', '1529549363photo1.png', '2018-06-26 16:26:28');
INSERT INTO `tbl_img` VALUES ('34', '15', '1529549363photo1.png', '2018-07-05 16:53:10');
INSERT INTO `tbl_img` VALUES ('36', '13', '1529549363photo1.png', '2018-07-05 17:24:30');
INSERT INTO `tbl_img` VALUES ('37', '17', '1529549363photo1.png', '2018-07-05 17:57:39');
INSERT INTO `tbl_img` VALUES ('38', '19', '1529549363photo1.png', '2018-07-08 22:09:35');
INSERT INTO `tbl_img` VALUES ('39', '19', '1529549363photo1.png', '2018-07-08 22:09:35');
INSERT INTO `tbl_img` VALUES ('40', '19', '1529549363photo1.png', '2018-07-08 22:09:35');
INSERT INTO `tbl_img` VALUES ('41', '19', '1529549363photo1.png', '2018-07-08 22:09:35');
INSERT INTO `tbl_img` VALUES ('42', '19', '1529549363photo1.png', '2018-07-08 22:09:35');
INSERT INTO `tbl_img` VALUES ('43', '21', '1529549363photo1.png', '2018-07-08 22:21:02');
INSERT INTO `tbl_img` VALUES ('44', '21', '1529549363photo1.png', '2018-07-08 22:21:02');
INSERT INTO `tbl_img` VALUES ('48', '48', '1529549363photo1.png', '2018-07-09 17:28:51');
INSERT INTO `tbl_img` VALUES ('49', '48', '1529549363photo1.png', '2018-07-09 17:29:43');
INSERT INTO `tbl_img` VALUES ('50', '48', '1529549363photo1.png', '2018-07-09 17:30:55');
INSERT INTO `tbl_img` VALUES ('51', '48', '1529549363photo1.png', '2018-07-09 17:32:33');
INSERT INTO `tbl_img` VALUES ('52', '49', '1529549363photo1.png', '2018-07-09 17:34:16');
INSERT INTO `tbl_img` VALUES ('53', '49', '1529549363photo1.png', '2018-07-09 17:34:16');
INSERT INTO `tbl_img` VALUES ('54', '49', '1529549363photo1.png', '2018-07-09 17:34:16');
INSERT INTO `tbl_img` VALUES ('55', '49', '1529549363photo1.png', '2018-07-09 17:34:16');
INSERT INTO `tbl_img` VALUES ('56', '46', '1576558932avatar.png', '2019-12-17 12:02:12');
INSERT INTO `tbl_img` VALUES ('57', '46', '1576558937avatar04.png', '2019-12-17 12:02:17');
INSERT INTO `tbl_img` VALUES ('58', '13', '15785566491529549363photo1.png', '2020-01-09 14:57:29');
INSERT INTO `tbl_img` VALUES ('59', '45', '15785757391529549363photo1.png', '2020-01-09 20:15:39');
INSERT INTO `tbl_img` VALUES ('60', '49', '15786634111529549363photo1.png', '2020-01-10 20:36:51');
INSERT INTO `tbl_img` VALUES ('62', '137', '15791527921529549363photo1.png', '2020-01-16 12:33:12');
INSERT INTO `tbl_img` VALUES ('63', '137', '1579152800avatar2.png', '2020-01-16 12:33:20');

-- ----------------------------
-- Table structure for tbl_level
-- ----------------------------
DROP TABLE IF EXISTS `tbl_level`;
CREATE TABLE `tbl_level` (
  `level_id` int(10) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(55) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_level
-- ----------------------------
INSERT INTO `tbl_level` VALUES ('1', 'Admin');
INSERT INTO `tbl_level` VALUES ('2', 'member');
INSERT INTO `tbl_level` VALUES ('3', 'aaaa');

-- ----------------------------
-- Table structure for tbl_personnel
-- ----------------------------
DROP TABLE IF EXISTS `tbl_personnel`;
CREATE TABLE `tbl_personnel` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_level` int(10) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `p_phone` varchar(15) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(50) NOT NULL,
  `p_regis_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_personnel
-- ----------------------------
INSERT INTO `tbl_personnel` VALUES ('1', '1', 'แอดมิน', 'gg@g.com', '09993259235', 'b507456afec786b52eb3b34290c81a2c.jpg', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2018-06-19 11:10:13');
INSERT INTO `tbl_personnel` VALUES ('2', '2', 'member', 'aassss@g.com', '0988333333', '8cfcddb5be5152064cce73f3506df4a9.png', 'member', 'aa08769cdcb26674c6706093503ff0a3', '2018-06-19 11:56:30');
INSERT INTO `tbl_personnel` VALUES ('4', '1', 'qqqq', 'qq@qq.com', '0896039898', '2ab9aab26f036bafd970399ea77038a7.jpg', 'qqqq', '3bad6af0fa4b8b330d162e19938ee981', '2020-04-22 13:37:35');
INSERT INTO `tbl_personnel` VALUES ('5', '1', 'ssss', 'eeee@ggg.com', '0896039898', 'dba421dbf9aa3134339324913084a4ff.jpg', 'ccc', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', '2020-04-22 14:43:21');
INSERT INTO `tbl_personnel` VALUES ('6', '1', 'aaaaaaaaaa', 'aaa@aa.cm', '0896039898', '08c81eaaaa6f0833ad0f840f1b39e86e.jpg', 'aaaaaa', '74b87337454200d4d33f80c4663dc5e5', '2020-04-23 22:19:16');
