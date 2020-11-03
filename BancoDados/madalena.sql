/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : madalena

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-11-09 16:52:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for accesses
-- ----------------------------
DROP TABLE IF EXISTS `accesses`;
CREATE TABLE `accesses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accesses_user_id_foreign` (`user_id`),
  CONSTRAINT `accesses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of accesses
-- ----------------------------
INSERT INTO `accesses` VALUES ('27', '44', 'RECEPÇÃO', null, '2019-08-31 13:05:44', '2019-08-31 13:05:44');
INSERT INTO `accesses` VALUES ('28', '1', 'Alexandre Oliveira', 'GERENTE', '2019-08-31 13:08:12', '2019-08-31 13:08:12');
INSERT INTO `accesses` VALUES ('29', '1', 'Alexandre Oliveira', 'GERENTE', '2019-08-31 13:10:28', '2019-08-31 13:10:28');
INSERT INTO `accesses` VALUES ('30', '1', 'Alexandre Oliveira', 'GERENTE', '2019-08-31 13:12:35', '2019-08-31 13:12:35');
INSERT INTO `accesses` VALUES ('31', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-01 00:13:02', '2019-09-01 00:13:02');
INSERT INTO `accesses` VALUES ('32', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-01 07:12:27', '2019-09-01 07:12:27');
INSERT INTO `accesses` VALUES ('33', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-01 10:21:35', '2019-09-01 10:21:35');
INSERT INTO `accesses` VALUES ('34', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-01 16:31:49', '2019-09-01 16:31:49');
INSERT INTO `accesses` VALUES ('35', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-01 16:32:08', '2019-09-01 16:32:08');
INSERT INTO `accesses` VALUES ('36', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-01 17:26:13', '2019-09-01 17:26:13');
INSERT INTO `accesses` VALUES ('37', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-01 17:32:20', '2019-09-01 17:32:20');
INSERT INTO `accesses` VALUES ('38', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-02 08:46:31', '2019-09-02 08:46:31');
INSERT INTO `accesses` VALUES ('39', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-02 09:38:18', '2019-09-02 09:38:18');
INSERT INTO `accesses` VALUES ('40', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-02 15:12:26', '2019-09-02 15:12:26');
INSERT INTO `accesses` VALUES ('41', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-02 20:31:02', '2019-09-02 20:31:02');
INSERT INTO `accesses` VALUES ('42', '42', 'CAIXA', 'CAIXA', '2019-09-02 20:31:55', '2019-09-02 20:31:55');
INSERT INTO `accesses` VALUES ('43', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-02 20:56:17', '2019-09-02 20:56:17');
INSERT INTO `accesses` VALUES ('44', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-02 22:34:01', '2019-09-02 22:34:01');
INSERT INTO `accesses` VALUES ('45', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-02 22:34:08', '2019-09-02 22:34:08');
INSERT INTO `accesses` VALUES ('46', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-03 22:55:28', '2019-09-03 22:55:28');
INSERT INTO `accesses` VALUES ('47', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-04 20:51:17', '2019-09-04 20:51:17');
INSERT INTO `accesses` VALUES ('48', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-13 23:30:39', '2019-09-13 23:30:39');
INSERT INTO `accesses` VALUES ('49', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-13 23:36:22', '2019-09-13 23:36:22');
INSERT INTO `accesses` VALUES ('50', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-14 18:30:05', '2019-09-14 18:30:05');
INSERT INTO `accesses` VALUES ('51', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-14 19:48:37', '2019-09-14 19:48:37');
INSERT INTO `accesses` VALUES ('52', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-14 20:09:26', '2019-09-14 20:09:26');
INSERT INTO `accesses` VALUES ('53', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-14 20:30:25', '2019-09-14 20:30:25');
INSERT INTO `accesses` VALUES ('54', '42', 'CAIXA', 'CAIXA', '2019-09-14 21:20:05', '2019-09-14 21:20:05');
INSERT INTO `accesses` VALUES ('55', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-14 21:20:29', '2019-09-14 21:20:29');
INSERT INTO `accesses` VALUES ('56', '42', 'CAIXA', 'CAIXA', '2019-09-14 21:20:49', '2019-09-14 21:20:49');
INSERT INTO `accesses` VALUES ('57', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-14 21:21:07', '2019-09-14 21:21:07');
INSERT INTO `accesses` VALUES ('58', '42', 'CAIXA', 'CAIXA', '2019-09-14 21:21:38', '2019-09-14 21:21:38');
INSERT INTO `accesses` VALUES ('59', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-14 21:23:48', '2019-09-14 21:23:48');
INSERT INTO `accesses` VALUES ('60', '42', 'CAIXA', 'CAIXA', '2019-09-14 21:27:03', '2019-09-14 21:27:03');
INSERT INTO `accesses` VALUES ('61', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-14 21:33:29', '2019-09-14 21:33:29');
INSERT INTO `accesses` VALUES ('62', '42', 'CAIXA', 'CAIXA', '2019-09-14 21:36:12', '2019-09-14 21:36:12');
INSERT INTO `accesses` VALUES ('63', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-14 21:37:30', '2019-09-14 21:37:30');
INSERT INTO `accesses` VALUES ('64', '43', 'BALCAO', 'BALCAO', '2019-09-14 21:38:34', '2019-09-14 21:38:34');
INSERT INTO `accesses` VALUES ('65', '42', 'CAIXA', 'CAIXA', '2019-09-14 21:40:45', '2019-09-14 21:40:45');
INSERT INTO `accesses` VALUES ('66', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-14 21:40:58', '2019-09-14 21:40:58');
INSERT INTO `accesses` VALUES ('67', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-15 16:08:10', '2019-09-15 16:08:10');
INSERT INTO `accesses` VALUES ('68', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-15 20:11:59', '2019-09-15 20:11:59');
INSERT INTO `accesses` VALUES ('69', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-16 19:08:53', '2019-09-16 19:08:53');
INSERT INTO `accesses` VALUES ('70', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-22 21:17:44', '2019-09-22 21:17:44');
INSERT INTO `accesses` VALUES ('71', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-22 21:22:20', '2019-09-22 21:22:20');
INSERT INTO `accesses` VALUES ('72', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-23 19:59:51', '2019-09-23 19:59:51');
INSERT INTO `accesses` VALUES ('73', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-24 19:21:46', '2019-09-24 19:21:46');
INSERT INTO `accesses` VALUES ('74', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-26 23:31:36', '2019-09-26 23:31:36');
INSERT INTO `accesses` VALUES ('75', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-28 17:52:03', '2019-09-28 17:52:03');
INSERT INTO `accesses` VALUES ('76', '1', 'Alexandre Oliveira', 'GERENTE', '2019-09-29 19:06:38', '2019-09-29 19:06:38');
INSERT INTO `accesses` VALUES ('77', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-04 21:56:41', '2019-10-04 21:56:41');
INSERT INTO `accesses` VALUES ('78', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-04 22:00:59', '2019-10-04 22:00:59');
INSERT INTO `accesses` VALUES ('79', '45', 'Admin', null, '2019-10-07 18:57:43', '2019-10-07 18:57:43');
INSERT INTO `accesses` VALUES ('80', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-07 18:57:59', '2019-10-07 18:57:59');
INSERT INTO `accesses` VALUES ('81', '45', 'Admin', null, '2019-10-07 18:58:19', '2019-10-07 18:58:19');
INSERT INTO `accesses` VALUES ('82', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-16 22:25:35', '2019-10-16 22:25:35');
INSERT INTO `accesses` VALUES ('83', '42', 'CAIXA', 'CAIXA', '2019-10-16 22:26:35', '2019-10-16 22:26:35');
INSERT INTO `accesses` VALUES ('84', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-17 10:25:12', '2019-10-17 10:25:12');
INSERT INTO `accesses` VALUES ('85', '43', 'BALCAO', 'BALCAO', '2019-10-17 10:47:28', '2019-10-17 10:47:28');
INSERT INTO `accesses` VALUES ('86', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-17 10:47:40', '2019-10-17 10:47:40');
INSERT INTO `accesses` VALUES ('87', '43', 'BALCAO', 'BALCAO', '2019-10-17 11:24:26', '2019-10-17 11:24:26');
INSERT INTO `accesses` VALUES ('88', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-17 11:25:56', '2019-10-17 11:25:56');
INSERT INTO `accesses` VALUES ('89', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-17 11:51:33', '2019-10-17 11:51:33');
INSERT INTO `accesses` VALUES ('90', '43', 'BALCAO', 'BALCAO', '2019-10-17 12:05:56', '2019-10-17 12:05:56');
INSERT INTO `accesses` VALUES ('91', '42', 'CAIXA', 'CAIXA', '2019-10-17 12:06:10', '2019-10-17 12:06:10');
INSERT INTO `accesses` VALUES ('92', '43', 'BALCAO', 'BALCAO', '2019-10-17 12:08:35', '2019-10-17 12:08:35');
INSERT INTO `accesses` VALUES ('93', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-17 12:08:50', '2019-10-17 12:08:50');
INSERT INTO `accesses` VALUES ('94', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-17 14:01:04', '2019-10-17 14:01:04');
INSERT INTO `accesses` VALUES ('95', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-17 14:11:19', '2019-10-17 14:11:19');
INSERT INTO `accesses` VALUES ('96', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-17 16:21:40', '2019-10-17 16:21:40');
INSERT INTO `accesses` VALUES ('97', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-18 13:23:20', '2019-10-18 13:23:20');
INSERT INTO `accesses` VALUES ('98', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-18 18:36:57', '2019-10-18 18:36:57');
INSERT INTO `accesses` VALUES ('99', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-21 14:26:04', '2019-10-21 14:26:04');
INSERT INTO `accesses` VALUES ('100', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-21 14:58:48', '2019-10-21 14:58:48');
INSERT INTO `accesses` VALUES ('101', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-21 15:00:43', '2019-10-21 15:00:43');
INSERT INTO `accesses` VALUES ('102', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-22 22:08:36', '2019-10-22 22:08:36');
INSERT INTO `accesses` VALUES ('103', '45', 'Admin', null, '2019-10-22 22:11:11', '2019-10-22 22:11:11');
INSERT INTO `accesses` VALUES ('104', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-23 19:08:07', '2019-10-23 19:08:07');
INSERT INTO `accesses` VALUES ('105', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-24 12:54:08', '2019-10-24 12:54:08');
INSERT INTO `accesses` VALUES ('106', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-24 18:57:37', '2019-10-24 18:57:37');
INSERT INTO `accesses` VALUES ('107', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-25 12:10:40', '2019-10-25 12:10:40');
INSERT INTO `accesses` VALUES ('108', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-25 21:42:11', '2019-10-25 21:42:11');
INSERT INTO `accesses` VALUES ('109', '43', 'BALCAO', 'BALCAO', '2019-10-25 22:44:51', '2019-10-25 22:44:51');
INSERT INTO `accesses` VALUES ('110', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-25 23:04:43', '2019-10-25 23:04:43');
INSERT INTO `accesses` VALUES ('111', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-26 08:41:39', '2019-10-26 08:41:39');
INSERT INTO `accesses` VALUES ('112', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-26 17:52:33', '2019-10-26 17:52:33');
INSERT INTO `accesses` VALUES ('113', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-27 18:12:46', '2019-10-27 18:12:46');
INSERT INTO `accesses` VALUES ('114', '42', 'CAIXA', 'CAIXA', '2019-10-27 21:10:23', '2019-10-27 21:10:23');
INSERT INTO `accesses` VALUES ('115', '43', 'BALCAO', 'BALCAO', '2019-10-27 21:10:33', '2019-10-27 21:10:33');
INSERT INTO `accesses` VALUES ('116', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-27 21:11:17', '2019-10-27 21:11:17');
INSERT INTO `accesses` VALUES ('117', '43', 'BALCAO', 'BALCAO', '2019-10-27 21:11:46', '2019-10-27 21:11:46');
INSERT INTO `accesses` VALUES ('118', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-27 21:12:49', '2019-10-27 21:12:49');
INSERT INTO `accesses` VALUES ('119', '1', 'Alexandre Oliveira', 'GERENTE', '2019-10-28 20:05:03', '2019-10-28 20:05:03');
INSERT INTO `accesses` VALUES ('120', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-01 20:50:52', '2019-11-01 20:50:52');
INSERT INTO `accesses` VALUES ('121', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-02 20:31:27', '2019-11-02 20:31:27');
INSERT INTO `accesses` VALUES ('122', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-02 20:49:51', '2019-11-02 20:49:51');
INSERT INTO `accesses` VALUES ('123', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-03 19:26:40', '2019-11-03 19:26:40');
INSERT INTO `accesses` VALUES ('124', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-03 21:04:28', '2019-11-03 21:04:28');
INSERT INTO `accesses` VALUES ('125', '43', 'BALCAO', 'BALCAO', '2019-11-03 21:04:47', '2019-11-03 21:04:47');
INSERT INTO `accesses` VALUES ('126', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-03 21:05:03', '2019-11-03 21:05:03');
INSERT INTO `accesses` VALUES ('127', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-03 21:25:01', '2019-11-03 21:25:01');
INSERT INTO `accesses` VALUES ('128', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-04 06:12:08', '2019-11-04 06:12:08');
INSERT INTO `accesses` VALUES ('129', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-04 12:49:46', '2019-11-04 12:49:46');
INSERT INTO `accesses` VALUES ('130', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-04 19:31:53', '2019-11-04 19:31:53');
INSERT INTO `accesses` VALUES ('131', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-04 23:04:43', '2019-11-04 23:04:43');
INSERT INTO `accesses` VALUES ('132', '1', 'Alexandre Oliveira', 'GERENTE', '2019-11-09 16:29:49', '2019-11-09 16:29:49');

-- ----------------------------
-- Table structure for balcaos
-- ----------------------------
DROP TABLE IF EXISTS `balcaos`;
CREATE TABLE `balcaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `balcao` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of balcaos
-- ----------------------------

-- ----------------------------
-- Table structure for caixas
-- ----------------------------
DROP TABLE IF EXISTS `caixas`;
CREATE TABLE `caixas` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `valorinicial` decimal(10,2) DEFAULT NULL,
  `numerocaixa` varchar(255) DEFAULT '',
  `data_abertura` datetime DEFAULT NULL,
  `data_fechamento` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `caixas_user_id_foreign` (`user_id`),
  KEY `valorinicial` (`valorinicial`),
  CONSTRAINT `caixas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of caixas
-- ----------------------------
INSERT INTO `caixas` VALUES ('1', '1', '200.00', '1', null, null, '2019-11-09 16:37:23', '2019-11-09 16:37:23', '1');

-- ----------------------------
-- Table structure for caixas_recebimentos
-- ----------------------------
DROP TABLE IF EXISTS `caixas_recebimentos`;
CREATE TABLE `caixas_recebimentos` (
  `caixas_recebimentos_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caixa_id` int(11) NOT NULL,
  `forma_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `moviment_id` int(11) NOT NULL,
  PRIMARY KEY (`caixas_recebimentos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of caixas_recebimentos
-- ----------------------------

-- ----------------------------
-- Table structure for categoriaprodutos
-- ----------------------------
DROP TABLE IF EXISTS `categoriaprodutos`;
CREATE TABLE `categoriaprodutos` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categoriaprodutos_user_id_foreign` (`user_id`) USING BTREE,
  CONSTRAINT `categoriaprodutos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categoriaprodutos
-- ----------------------------
INSERT INTO `categoriaprodutos` VALUES ('1', '1', 'SOFT DRINKS', '2019-10-17 19:45:49', '2019-10-17 19:45:52');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'teste', null, null);
INSERT INTO `categories` VALUES ('2', 'alexandre', null, null);
INSERT INTO `categories` VALUES ('3', 'cliente', null, null);

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clientes_user_id_foreign` (`user_id`),
  CONSTRAINT `clientes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', '1', 'Alexandre Oliveira', '43.825.311.5', '219.823.538-21', 'Rua 8 n.1796, floriadiana', '19996761997', 'alexandre.batista.oliveira@hotmail.com', 'teste', 'Sim', '2019-10-23 22:28:17', '2019-10-23 22:28:17');
INSERT INTO `clientes` VALUES ('2', '1', 'Alexandre Oliveira', '43.825.311.5', '219.823.538-21', 'Rua 8 n.1796, floriadiana', '19996761997', 'alexandre.batista.oliveira@hotmail.com', 'teste', 'Sim', '2019-10-26 12:14:10', '2019-10-26 12:14:10');
INSERT INTO `clientes` VALUES ('3', '1', 'FRANCISCO PINTO RAMIRO', '43.825.311-5', '12345678911', 'Rua M5 N. 1172', '19996761997', 'telvivo42@gmail.com', 'teste', 'Sim', '2019-10-26 12:14:21', '2019-10-26 12:14:21');
INSERT INTO `clientes` VALUES ('4', '1', 'cicero fracisco da 46', '43.825.311.5', '219.823.538-21', 'rua 3, SANTA ROSA', '87991790662', 'oliveiralexandre0@gmail.com', 'teste', 'Sim', '2019-10-26 12:14:41', '2019-10-26 12:14:41');
INSERT INTO `clientes` VALUES ('5', '1', 'Fabio', '11.111.111-1', '1234567891011', 'R M 5, 1172', '19996375954', 'oliveiralexandre0@gmail.com', 'teste', 'Sim', '2019-10-26 12:15:00', '2019-10-26 12:15:00');
INSERT INTO `clientes` VALUES ('6', '1', 'Carlos Eduardo', '11.111.111-1', '1234567891011', 'Rua M5 N. 1172', '19996761997', 'telvivo42@gmail.com', 'teste', 'Sim', '2019-10-26 12:15:15', '2019-10-26 12:15:15');

-- ----------------------------
-- Table structure for comandas
-- ----------------------------
DROP TABLE IF EXISTS `comandas`;
CREATE TABLE `comandas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigocomanda` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comandas
-- ----------------------------
INSERT INTO `comandas` VALUES ('1', '001', '2019-10-21 15:16:13', '2019-10-21 15:16:13');
INSERT INTO `comandas` VALUES ('2', '002', '2019-10-21 19:13:07', '2019-10-21 19:13:07');
INSERT INTO `comandas` VALUES ('3', '003', '2019-10-21 19:13:11', '2019-10-21 19:13:11');

-- ----------------------------
-- Table structure for fechamentos
-- ----------------------------
DROP TABLE IF EXISTS `fechamentos`;
CREATE TABLE `fechamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caixa_abertura_id` bigint(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `forma_pagamento_id` int(11) DEFAULT NULL,
  `valorinicial` decimal(10,2) DEFAULT NULL,
  `valordinheiro` varchar(255) DEFAULT '',
  `valorcartao` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forma_pagamento_foreign` (`forma_pagamento_id`) USING BTREE,
  CONSTRAINT `forma_pagamento_foreign` FOREIGN KEY (`forma_pagamento_id`) REFERENCES `formas_pagamento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fechamentos
-- ----------------------------

-- ----------------------------
-- Table structure for formas_pagamento
-- ----------------------------
DROP TABLE IF EXISTS `formas_pagamento`;
CREATE TABLE `formas_pagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagamentos` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pagamentos` (`pagamentos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of formas_pagamento
-- ----------------------------
INSERT INTO `formas_pagamento` VALUES ('1', 'DINHEIRO', '2019-10-17 10:35:03', '2019-10-17 10:35:10');
INSERT INTO `formas_pagamento` VALUES ('2', 'CARTÃO', '2019-10-17 10:35:05', '2019-10-17 10:35:12');
INSERT INTO `formas_pagamento` VALUES ('3', 'CHEQUE', '2019-10-17 10:35:08', '2019-10-17 10:35:15');

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES ('1', 'Teste', '2019-08-27 20:04:09', '2019-08-27 20:04:14');
INSERT INTO `items` VALUES ('2', 'alexandre', '2019-08-27 20:04:30', '2019-08-27 20:04:35');
INSERT INTO `items` VALUES ('3', 'madalena', '2019-08-27 20:04:32', '2019-08-27 20:04:37');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_24_164856_clientes', '2');
INSERT INTO `migrations` VALUES ('4', '2019_08_24_184656_create_accesses_table', '3');
INSERT INTO `migrations` VALUES ('5', '2019_08_27_200217_create_items_table', '4');
INSERT INTO `migrations` VALUES ('6', '2019_08_30_100259_create_roles_table', '5');
INSERT INTO `migrations` VALUES ('7', '2019_08_30_100357_create_permissions_table', '5');
INSERT INTO `migrations` VALUES ('8', '2019_10_23_212113_create_category_table', '6');

-- ----------------------------
-- Table structure for moviment
-- ----------------------------
DROP TABLE IF EXISTS `moviment`;
CREATE TABLE `moviment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `caixa_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `valor_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of moviment
-- ----------------------------

-- ----------------------------
-- Table structure for moviment_produtos
-- ----------------------------
DROP TABLE IF EXISTS `moviment_produtos`;
CREATE TABLE `moviment_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `moviment_id` int(11) DEFAULT NULL,
  `produto_id` varchar(255) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL,
  `comanda` varchar(255) DEFAULT NULL,
  `usuariocadastrou` varchar(255) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of moviment_produtos
-- ----------------------------
INSERT INTO `moviment_produtos` VALUES ('1', null, '61 - ÁGUA MINERAL com / sem gás - R$ 6,50', '1400,00', '001', '1', null, '2019-11-09', '2019-11-09');

-- ----------------------------
-- Table structure for papels
-- ----------------------------
DROP TABLE IF EXISTS `papels`;
CREATE TABLE `papels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of papels
-- ----------------------------
INSERT INTO `papels` VALUES ('1', 'admin', 'Administrador do sistema', '2017-11-01 17:51:58', '2017-11-01 17:51:58');
INSERT INTO `papels` VALUES ('2', 'caixa', 'Equipe de Caixa', '2017-11-01 17:51:58', '2017-11-01 17:51:58');
INSERT INTO `papels` VALUES ('3', 'balcao', 'Equipe de Balcao', '2017-11-01 17:51:58', '2017-11-01 17:51:58');
INSERT INTO `papels` VALUES ('4', 'recepcao', 'Equipe de Recepção', '2019-08-31 13:04:30', null);

-- ----------------------------
-- Table structure for papel_permissao
-- ----------------------------
DROP TABLE IF EXISTS `papel_permissao`;
CREATE TABLE `papel_permissao` (
  `permissao_id` int(10) unsigned NOT NULL,
  `papel_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permissao_id`,`papel_id`),
  KEY `papel_permissao_papel_id_foreign` (`papel_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of papel_permissao
-- ----------------------------
INSERT INTO `papel_permissao` VALUES ('1', '1');
INSERT INTO `papel_permissao` VALUES ('2', '1');
INSERT INTO `papel_permissao` VALUES ('3', '1');
INSERT INTO `papel_permissao` VALUES ('4', '1');
INSERT INTO `papel_permissao` VALUES ('5', '1');
INSERT INTO `papel_permissao` VALUES ('6', '1');
INSERT INTO `papel_permissao` VALUES ('7', '1');
INSERT INTO `papel_permissao` VALUES ('8', '1');
INSERT INTO `papel_permissao` VALUES ('33', '2');
INSERT INTO `papel_permissao` VALUES ('34', '3');
INSERT INTO `papel_permissao` VALUES ('35', '4');

-- ----------------------------
-- Table structure for papel_user
-- ----------------------------
DROP TABLE IF EXISTS `papel_user`;
CREATE TABLE `papel_user` (
  `user_id` int(10) unsigned NOT NULL,
  `papel_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`papel_id`),
  KEY `papel_user_papel_id_foreign` (`papel_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of papel_user
-- ----------------------------
INSERT INTO `papel_user` VALUES ('1', '1');
INSERT INTO `papel_user` VALUES ('42', '2');
INSERT INTO `papel_user` VALUES ('43', '3');
INSERT INTO `papel_user` VALUES ('44', '4');
INSERT INTO `papel_user` VALUES ('44', '6');
INSERT INTO `papel_user` VALUES ('45', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissaos
-- ----------------------------
DROP TABLE IF EXISTS `permissaos`;
CREATE TABLE `permissaos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permissaos
-- ----------------------------
INSERT INTO `permissaos` VALUES ('1', 'usuario_listar', 'Listar Usuários', '2017-11-01 17:56:23', '2017-11-01 17:56:23');
INSERT INTO `permissaos` VALUES ('2', 'usuario_adicionar', 'Adicionar Usuários', '2017-11-01 17:56:24', '2017-11-01 17:56:24');
INSERT INTO `permissaos` VALUES ('3', 'usuario_editar', 'Editar Usuários', '2017-11-01 17:56:24', '2017-11-01 17:56:24');
INSERT INTO `permissaos` VALUES ('4', 'usuario_deletar', 'Deletar Usuários', '2017-11-01 17:56:24', '2017-11-01 17:56:24');
INSERT INTO `permissaos` VALUES ('5', 'papel_listar', 'Listar Papéis', '2017-11-01 17:56:24', '2017-11-01 17:56:24');
INSERT INTO `permissaos` VALUES ('6', 'papel_adicionar', 'Adicionar Papéis', '2017-11-01 17:56:24', '2017-11-01 17:56:24');
INSERT INTO `permissaos` VALUES ('7', 'papel_editar', 'Editar Papéis', '2017-11-01 17:56:24', '2017-11-01 17:56:24');
INSERT INTO `permissaos` VALUES ('8', 'papel_deletar', 'Deletar Papéis', '2017-11-01 17:56:24', '2017-11-01 17:56:24');
INSERT INTO `permissaos` VALUES ('9', 'imovel_listar', 'Listar Imóveis', '2017-11-01 16:57:51', '2017-11-01 16:57:54');
INSERT INTO `permissaos` VALUES ('10', 'imovel_adicionar', 'Adicionar Imóveis', '2017-11-01 16:57:47', '2017-11-01 16:57:57');
INSERT INTO `permissaos` VALUES ('11', 'imovel_editar', 'Editar Imóveis', '2017-11-01 16:57:43', '2017-11-01 16:58:02');
INSERT INTO `permissaos` VALUES ('12', 'imovel_deletar', 'Deletar Imóveis', '2017-11-01 16:57:26', '2017-11-01 16:57:39');
INSERT INTO `permissaos` VALUES ('13', 'tipo_listar', 'Listar Tipos', '2017-11-01 17:07:33', '2017-11-01 17:07:36');
INSERT INTO `permissaos` VALUES ('14', 'tipo_adicionar', 'Adicionar Tipos', '2017-11-01 17:07:38', '2017-11-01 17:07:41');
INSERT INTO `permissaos` VALUES ('15', 'tipo_editar', 'Editar Tipos', '2017-11-01 17:07:43', '2017-11-01 17:07:45');
INSERT INTO `permissaos` VALUES ('16', 'tipo_deletar', 'Deletar Tipos', '2017-11-01 17:07:48', '2017-11-01 17:07:51');
INSERT INTO `permissaos` VALUES ('17', 'cidade_listar', 'Listar Cidades', '2017-11-01 17:12:31', '2017-11-01 17:12:34');
INSERT INTO `permissaos` VALUES ('18', 'cidade_adicionar', 'Adicionar Cidades', '2017-11-01 17:12:36', '2017-11-01 17:12:37');
INSERT INTO `permissaos` VALUES ('19', 'cidade_editar', 'Editar Cidades', '2017-11-01 17:12:39', '2017-11-01 17:12:40');
INSERT INTO `permissaos` VALUES ('20', 'cidade_deletar', 'Deletar Cidades', '2017-11-01 17:12:42', '2017-11-01 17:12:43');
INSERT INTO `permissaos` VALUES ('21', 'slide_listar', 'Listar Slides', '2017-11-01 17:13:55', '2017-11-01 17:13:56');
INSERT INTO `permissaos` VALUES ('22', 'slide_adicionar', 'Adicionar Slides', '2017-11-01 17:13:58', '2017-11-01 17:13:59');
INSERT INTO `permissaos` VALUES ('23', 'slide_editar', 'Editar Slides', '2017-11-01 17:14:00', '2017-11-01 17:14:01');
INSERT INTO `permissaos` VALUES ('24', 'slide_deletar', 'Deletar Slides', '2017-11-01 17:14:03', '2017-11-01 17:14:04');
INSERT INTO `permissaos` VALUES ('25', 'pagina_listar', 'Listar Páginas', '2017-11-01 17:15:08', '2017-11-01 17:15:09');
INSERT INTO `permissaos` VALUES ('26', 'pagina_adicionar', 'Adicionar Páginas', '2017-11-01 17:15:11', '2017-11-01 17:15:12');
INSERT INTO `permissaos` VALUES ('27', 'pagina_editar', 'Editar Páginas', '2017-11-01 17:15:14', '2017-11-01 17:15:15');
INSERT INTO `permissaos` VALUES ('28', 'pagina_deletar', 'Deletar Páginas', '2017-11-01 17:15:18', '2017-11-01 17:15:19');
INSERT INTO `permissaos` VALUES ('29', 'view_clientes', 'Acessar Página Clientes', '2019-08-31 08:32:07', null);
INSERT INTO `permissaos` VALUES ('30', 'view_produtos', 'Acessar Página Produtos', '2019-08-31 08:32:10', null);
INSERT INTO `permissaos` VALUES ('31', 'view_comandas', 'Acessar Página Comandas', '2019-08-31 08:32:12', null);
INSERT INTO `permissaos` VALUES ('32', 'view_usuarios', 'Acessar Página Usuários', '2019-08-31 08:32:15', null);
INSERT INTO `permissaos` VALUES ('33', 'view_caixa', 'Acessar Página Caixa', '2019-08-31 08:32:18', null);
INSERT INTO `permissaos` VALUES ('34', 'view_balcao', 'Acessar Página Balcao', '2019-08-31 08:32:20', null);
INSERT INTO `permissaos` VALUES ('35', 'view_recepcao', 'Acessar Página Recepção', '2019-08-31 08:32:22', null);

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigoproduto` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `produto` varchar(255) DEFAULT NULL,
  `estoque` varchar(255) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produto` (`produto`),
  KEY `codigoproduto` (`codigoproduto`),
  KEY `codigoproduto_2` (`codigoproduto`,`produto`),
  KEY `codigoproduto_3` (`codigoproduto`,`produto`,`valor`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES ('1', '61', 'SOFT DRINKS', 'ÁGUA MINERAL com / sem gás', '100', '6,50', '2019-08-24 02:35:19', '2019-10-26 10:20:37');
INSERT INTO `produtos` VALUES ('2', '62', 'SOFT DRINKS', 'ÁGUA DE COCO', '100', '8,00', '2019-08-24 02:35:49', '2019-08-24 02:35:49');
INSERT INTO `produtos` VALUES ('3', '71', 'SOFT DRINKS', 'GUARANÁ ANTÁRTICA  normal / zero', '100', '8,00', '2019-08-24 02:36:58', '2019-08-24 02:36:58');
INSERT INTO `produtos` VALUES ('4', '72', 'SOFT DRINKS', 'COCA-COLA normal/zero', '100', '8,00', '2019-08-24 02:37:53', '2019-08-24 02:37:53');
INSERT INTO `produtos` VALUES ('5', '73', 'SOFT DRINKS', 'SPRITE', '100', '8,00', '2019-08-24 14:16:12', '2019-08-24 14:16:12');
INSERT INTO `produtos` VALUES ('6', '74', 'SOFT DRINKS', 'SCHWEPPES TÔNICA', '100', '8,00', '2019-08-24 14:18:21', '2019-08-24 14:18:21');
INSERT INTO `produtos` VALUES ('8', '75', 'SOFT DRINKS', 'SCHWEPPES CITRUS', '100', '8,00', '2019-10-26 10:17:58', '2019-10-26 10:17:58');
INSERT INTO `produtos` VALUES ('9', '81', 'SOFT DRINKS', 'SUCO DEL VALLE - laranja', '100', '10,00', '2019-10-26 10:19:34', '2019-10-26 10:20:26');
INSERT INTO `produtos` VALUES ('10', '83', 'SOFT DRINKS', 'SUCO HAITAI BONBON - uva', '100', '10,00', '2019-10-26 10:21:20', '2019-10-26 10:21:20');
INSERT INTO `produtos` VALUES ('11', '91', 'BEERS', 'IMPÉRIO', '100', '10,00', '2019-10-26 10:21:52', '2019-10-26 10:21:52');
INSERT INTO `produtos` VALUES ('12', '96', 'BEERS', 'CORONA', '100', '13,00', '2019-10-26 10:22:22', '2019-10-26 10:22:22');
INSERT INTO `produtos` VALUES ('13', '97', 'BEERS', 'BUDWEISER', '100', '12,00', '2019-10-26 10:22:46', '2019-10-26 10:22:46');
INSERT INTO `produtos` VALUES ('14', '98', 'BEERS', 'HEINEKEN', '100', '12,00', '2019-10-26 10:23:53', '2019-10-26 10:23:53');
INSERT INTO `produtos` VALUES ('15', '99', 'BEERS', 'STELLA ARTOIS', '100', '12,00', '2019-10-26 10:24:10', '2019-10-26 10:24:10');
INSERT INTO `produtos` VALUES ('16', '64', 'READY TO DRINK', 'RED BULL ENERGY DRINK', '100', '19,00', '2019-10-26 10:25:24', '2019-10-26 10:25:24');
INSERT INTO `produtos` VALUES ('17', '142', 'READY TO DRINK', 'SMIRNOFF ICE', '100', '15,00', '2019-10-26 10:26:09', '2019-10-26 10:26:09');
INSERT INTO `produtos` VALUES ('18', '102/1', 'DRINKS', 'JÄGERMEISTER - dose', '100', '19,00', '2019-10-26 10:27:42', '2019-10-26 11:54:59');
INSERT INTO `produtos` VALUES ('19', '102/2', 'DRINKS', 'JÄGERMEISTER - garrafa', '100', '250,00', '2019-10-26 10:28:00', '2019-10-26 11:55:09');
INSERT INTO `produtos` VALUES ('21', '126', 'DRINKS', 'AMARULA', '100', '19,00', '2019-10-26 10:29:54', '2019-10-26 10:29:54');
INSERT INTO `produtos` VALUES ('22', '161/1', 'DRINKS', 'BACARDI BIG APPLE - dose', '100', '15,00', '2019-10-26 10:30:30', '2019-10-26 11:55:32');
INSERT INTO `produtos` VALUES ('23', '161/2', 'DRINKS', 'BACARDI BIG APPLE - garrafa', '100', '160,00', '2019-10-26 10:30:52', '2019-10-26 11:55:43');
INSERT INTO `produtos` VALUES ('24', '162/1', 'DRINKS', 'GIN TANQUERAY - dose', '100', '20,00', '2019-10-26 10:31:21', '2019-10-26 10:35:14');
INSERT INTO `produtos` VALUES ('25', '162/2', 'DRINKS', 'GIN TANQUERAY - garrafa', '100', '250,00', '2019-10-26 10:31:39', '2019-10-26 10:35:25');
INSERT INTO `produtos` VALUES ('26', '131', 'ESPUMANTES', 'BABY CHANDON - brut', '100', '38,00', '2019-10-26 10:32:10', '2019-10-26 10:32:10');
INSERT INTO `produtos` VALUES ('27', '132', 'ESPUMANTES', 'MUMM - brut, demi sec', '100', '150,00', '2019-10-26 10:32:50', '2019-10-26 10:32:50');
INSERT INTO `produtos` VALUES ('28', '133', 'CHAMPAGNES', 'VEUVE CLICQUOT - brut', '100', '400,00', '2019-10-26 10:33:39', '2019-10-26 10:33:39');
INSERT INTO `produtos` VALUES ('29', '134', 'CHAMPAGNES', 'DOM PÉRIGNON', '100', '1400,00', '2019-10-26 10:34:11', '2019-10-26 10:34:11');

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `StatusID` int(11) NOT NULL,
  `Descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`StatusID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES ('1', 'Aberto');
INSERT INTO `status` VALUES ('2', 'Fechado');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Alexandre Oliveira', 'oliveiralexandre0@gmail.com', 'GERENTE', null, '$2y$10$.ubrPhFgFPVNFP0GYfFgIu3Y1fjdwBH2SgqqNzt40RonV4zG12rvW', 'qVYktZqlDz2NWOc31xQHd7lnUQFuxtAFSaAHz8rq8b2Z8Vs2KfGkPCu4sEFR', '2019-08-21 13:29:41', '2019-08-29 10:03:11');
INSERT INTO `users` VALUES ('42', 'CAIXA', 'caixa@teste.com', 'CAIXA', null, '$2y$10$BWIqNFhpeSROhSFekFjuUevT7A3RBc9fGpl8oCHfAmntiWDJMCoM.', null, '2019-08-29 20:02:09', '2019-08-29 20:02:09');
INSERT INTO `users` VALUES ('43', 'BALCAO', 'balcao@teste.com', 'BALCAO', null, '$2y$10$U07Y2akFblErRyASpn8O.ef9To0fCA7w7JhyjfqzfnpEELwqe6GcS', null, '2019-08-29 20:02:26', '2019-08-29 20:02:26');
INSERT INTO `users` VALUES ('44', 'RECEPÇÃO2', 'recepcao@teste.com', null, null, '$2y$10$PbSyLCCMF8vlc6UXNiJDK.qR8YNafzEdGJkDWOuJ/KEx2NqMBveN.', null, '2019-08-31 13:01:46', '2019-09-01 16:34:09');
INSERT INTO `users` VALUES ('45', 'Admin', 'admin@admin.com', null, null, '$2y$10$54LQAogLbjhR3id3Mn64/eB08FCnTVQ6cxA7GsY6b9NDhzlXXJHgW', null, '2019-10-07 18:57:43', '2019-10-07 18:57:43');
