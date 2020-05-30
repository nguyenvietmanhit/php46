/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : mvc_demo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-30 13:14:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT 'Tên danh mục',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh danh mục',
  `description` text COMMENT 'Mô tả chi tiết cho danh mục',
  `type` tinyint(3) DEFAULT NULL COMMENT 'Kiểu danh mục: 1 - Product, 2 - News',
  `status` tinyint(3) DEFAULT '0' COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo danh mục',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Điện thoại', 'category-phone.jpg', 'Danh mục về điện thoại', '1', '1', '2020-04-26 13:15:17', '2020-04-28 13:16:11');
INSERT INTO `categories` VALUES ('2', 'Tivi', 'category-tv.png', 'Danh mục về Ti vi', '1', '1', '2020-04-26 13:16:51', null);
INSERT INTO `categories` VALUES ('3', 'Quần áo', 'category-clothes.jpg', 'Danh mục về quần áo', '1', '0', '2020-04-26 13:16:52', '2020-04-29 13:17:22');
INSERT INTO `categories` VALUES ('4', 'Tin tức thế giới', 'caetgory-world-news.jpg', 'Danh mục về tin tức thế giới', '2', '1', '2020-04-26 13:18:20', null);
INSERT INTO `categories` VALUES ('5', 'Tin tức thể thao', 'category-sport.png', 'Danh mục về tin tức thể thao', '2', '1', '2020-04-26 13:18:42', '2020-04-30 13:18:45');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL COMMENT 'Id của danh mục mà tin tức thuộc về, là khóa ngoại liên kết với bảng categories',
  `title` varchar(255) NOT NULL COMMENT 'Tiêu đề tin tức',
  `summary` varchar(255) DEFAULT NULL COMMENT 'Mô tả ngắn cho tin tức',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh tin tức',
  `content` text COMMENT 'Mô tả chi tiết cho sản phẩm',
  `status` tinyint(3) DEFAULT '0' COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', null, '', null, null, null, '0', '2020-04-26 21:28:19', null);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT 'Id của user trong trường hợp đã login và đặt hàng, là khóa ngoại liên kết với bảng users',
  `fullname` varchar(255) DEFAULT NULL COMMENT 'Tên khách hàng',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ khách hàng',
  `mobile` int(11) DEFAULT NULL COMMENT 'SĐT khách hàng',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email khách hàng',
  `note` text COMMENT 'Ghi chú từ khách hàng',
  `price_total` int(11) DEFAULT NULL COMMENT 'Tổng giá trị đơn hàng',
  `payment_status` tinyint(2) DEFAULT NULL COMMENT 'Trạng thái đơn hàng: 0 - Chưa thành toán, 1 - Đã thành toán',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo đơn',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '1', 'Mạnh', 'Hà Nội', '987599921', 'nguyenvietmanhit@gmai.com', 'Ship đúng hẹn', '100000', '1', '2020-04-26 13:42:21', null);
INSERT INTO `orders` VALUES ('2', '4', 'Vũ Quyết', 'Hà Nam', '123456789', 'vvquyet@gmail.com.vn', null, '2500000', '0', '2020-04-26 13:42:22', '2020-04-29 13:42:57');
INSERT INTO `orders` VALUES ('3', '7', 'Hằng', 'TP.HCM', '987555', 'tthang@gmail.com', 'Cần support thêm', '1200000', '1', '2020-04-26 13:42:59', '2020-04-25 13:43:51');
INSERT INTO `orders` VALUES ('4', '5', 'Nguyễn Văn An', 'Hoài Đức, Hà Nội', '987111', 'nvan@google.vn', null, '5600000', '1', '2020-04-26 13:44:47', null);
INSERT INTO `orders` VALUES ('5', '1', 'Mạnh', 'Sơn Đồng - Hoài Đức - Hà Nội', '987', 'nvmanh@cmc.com.vn', null, '8900000', '0', '2020-04-26 13:44:47', null);
INSERT INTO `orders` VALUES ('6', '3', 'Trần Liên', 'Ninh Bình', '988123456', 'tranlien@gmail.com', null, '1230000', '1', '2020-04-26 13:45:31', '2020-04-27 13:46:36');
INSERT INTO `orders` VALUES ('7', '2', 'nvmanh', 'Hà nội', '98322222', 'nvmanh@hanoi.com', 'sp giá hơi đắt', '5000000', '0', '2020-04-26 13:47:15', null);

-- ----------------------------
-- Table structure for order_details
-- ----------------------------
DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `order_id` int(11) DEFAULT NULL COMMENT 'Id của order tương ứng, là khóa ngoại liên kết với bảng orders',
  `product_id` int(11) DEFAULT NULL COMMENT 'Id của product tương ứng, là khóa ngoại liên kết với bảng products',
  `quality` int(11) DEFAULT NULL COMMENT 'Số sản phẩm đã đặt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_details
-- ----------------------------
INSERT INTO `order_details` VALUES ('1', '1', '2');
INSERT INTO `order_details` VALUES ('1', '2', '1');
INSERT INTO `order_details` VALUES ('2', '3', '7');
INSERT INTO `order_details` VALUES ('3', '4', '1');
INSERT INTO `order_details` VALUES ('4', '5', '9');
INSERT INTO `order_details` VALUES ('5', '3', '1');
INSERT INTO `order_details` VALUES ('6', '5', '5');
INSERT INTO `order_details` VALUES ('7', '4', '4');
INSERT INTO `order_details` VALUES ('5', '1', '1');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL COMMENT 'Id của danh mục mà sản phẩm thuộc về, là khóa ngoại liên kết với bảng categories',
  `title` varchar(255) NOT NULL COMMENT 'Tên sản phẩm',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh sản phẩm',
  `price` int(11) DEFAULT NULL COMMENT 'Giá sản phẩm',
  `summary` varchar(255) DEFAULT NULL COMMENT 'Mô tả ngắn cho sản phẩm',
  `content` text COMMENT 'Mô tả chi tiết cho sản phẩm',
  `status` tinyint(3) DEFAULT '0' COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', '1', '2', '1588432245-product-hang1edit.jpg', '111111111', '11111111111111', '<p>11111111111111111</p>\r\n', '0', '2020-04-26 13:19:50', '2020-05-03 11:10:09');
INSERT INTO `products` VALUES ('2', '1', 'đâs11111111111111', '1588432245-product-hang1edit.jpg', '111111111', '11111111111111', '<p>11111111111111111</p>\r\n', '0', '2020-04-26 13:19:51', '2020-05-02 22:10:52');
INSERT INTO `products` VALUES ('3', '1', 'đâs11111111111111', '1588432245-product-hang1edit.jpg', '111111111', '11111111111111', '<p>11111111111111111</p>\r\n', '0', '2020-04-26 13:21:02', '2020-05-02 22:10:52');
INSERT INTO `products` VALUES ('4', '1', 'đâs11111111111111', '1588432245-product-hang1edit.jpg', '111111111', '11111111111111', '<p>11111111111111111</p>\r\n', '0', '2020-04-26 13:21:25', '2020-05-02 22:10:52');
INSERT INTO `products` VALUES ('5', '1', 'bbbbbbbb', '1588432245-product-hang1edit.jpg', '111111111', '11111111111111', '<p>11111111111111111</p>\r\n', '0', '2020-04-26 13:22:12', '2020-05-03 11:10:39');
INSERT INTO `products` VALUES ('6', '1', 'đâs11111111111111', '1588432245-product-hang1edit.jpg', '111111111', '11111111111111', '<p>11111111111111111</p>\r\n', '0', '2020-04-26 13:24:28', '2020-05-02 22:10:52');
INSERT INTO `products` VALUES ('7', '1', 'đâs11111111111111', '1588432245-product-hang1edit.jpg', '111111111', '11111111111111', '<p>11111111111111111</p>\r\n', '0', '2020-04-26 13:36:50', '2020-05-02 22:10:52');
INSERT INTO `products` VALUES ('8', '1', 'đâs11111111111111', '1588432245-product-hang1edit.jpg', '111111111', '11111111111111', '<p>11111111111111111</p>\r\n', '0', '2020-05-02 21:24:51', '2020-05-02 22:10:52');
INSERT INTO `products` VALUES ('9', '1', 'đâs11111111111111', '1588432245-product-hang1edit.jpg', '111111111', '11111111111111', '<p>11111111111111111</p>\r\n', '0', '2020-05-02 21:25:19', '2020-05-02 22:10:52');
INSERT INTO `products` VALUES ('10', '1', 'đâs11111111111111', '1588432245-product-hang1edit.jpg', '111111111', '11111111111111', '<p>11111111111111111</p>\r\n', '0', '2020-05-02 21:28:56', '2020-05-02 22:10:52');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(255) NOT NULL COMMENT 'Mật khẩu đăng nhập',
  `first_name` varchar(255) DEFAULT NULL COMMENT 'Fist name',
  `last_name` varchar(255) DEFAULT NULL COMMENT 'Last name',
  `phone` int(11) DEFAULT NULL COMMENT 'SĐT user',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ user',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email của user',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'File ảnh đại diện',
  `jobs` varchar(255) DEFAULT NULL COMMENT 'Nghề nghiệp',
  `last_login` datetime DEFAULT NULL COMMENT 'Lần đăng nhập gần đây nhất',
  `facebook` varchar(255) DEFAULT NULL COMMENT 'Link facebook',
  `status` tinyint(3) DEFAULT '0' COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối',
  `testtttttt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'nvmanh', '123456', 'Nguyễn', 'Viết Mạnh', '1', '1', '1', null, 'Developrt', null, null, '1', '2020-04-26 13:37:45', null, '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('2', 'nguyenvietmanhit@gmail.com', '111111', 'nguyenvietmanh', 'it', null, null, null, 'nguyenvietmanh.jpg', 'IT', '2020-04-30 13:38:21', 'https://facebook.com', '1', '2020-04-26 13:37:46', '0000-00-00 00:00:00', '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('3', 'txlien', '123456789', 'Trần', 'Xuân Liên', null, null, null, 'xuanlien.png', 'Sales', '2020-04-29 13:39:17', null, '0', '2020-04-26 13:39:23', null, '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('4', 'vvquyet', '0000', 'Vũ ', 'Văn Quyết', null, null, null, 'quyet.jpg', 'Footballer', null, null, '0', '2020-04-26 13:39:25', null, '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('5', 'nvan', '123456', 'Nguyễn ', 'Văn An', null, null, null, 'an.png', null, null, null, '0', '2020-04-26 13:40:16', null, '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('6', 'manhnv', '123123', 'Nguyễn', 'Văn Mạnh', null, null, null, 'vanmanh.png', 'Tester', '2020-05-01 13:40:41', null, '1', '2020-04-26 13:40:53', '0000-00-00 00:00:00', '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('8', 'nvmanh121', 'c4ca4238a0b923820dcc509a6f75849b', '12121', '121', '0', '', '', '', '', null, '', '0', '2020-05-03 14:01:51', null, '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('9', '1', 'c4ca4238a0b923820dcc509a6f75849b', '12121', '121', '0', '', '', '', '', null, '', '0', '2020-05-03 14:02:39', null, '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('10', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'dsa', 'dsadas', '121', '12121', 'dsadas@d.e', '1588489412-user-hang2edit.jpg', 'dsa', null, '', '1', '2020-05-03 14:03:32', null, '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('11', 'abc', '827ccb0eea8a706c4c34a16891f84e7b', null, null, null, null, null, null, null, null, null, '1', '2020-05-10 13:12:15', null, '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('12', 'root', 'c4ca4238a0b923820dcc509a6f75849b', null, null, null, null, null, null, null, null, null, '1', '2020-05-10 13:12:31', null, '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('13', 'a', '0cc175b9c0f1b6a831c399e269772661', null, null, null, null, null, null, null, null, null, '1', '2020-05-10 13:12:54', null, '2020-05-10 17:19:13');
INSERT INTO `users` VALUES ('14', '11', 'c4ca4238a0b923820dcc509a6f75849b', null, null, null, null, null, null, null, null, null, '1', '2020-05-10 13:15:30', null, '2020-05-10 17:19:13');
