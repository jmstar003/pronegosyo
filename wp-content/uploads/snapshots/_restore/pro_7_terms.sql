CREATE TABLE IF NOT EXISTS `pro_7_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
TRUNCATE TABLE `pro_7_terms`;
 
INSERT INTO `pro_7_terms` VALUES ('1', 'Uncategorized', 'uncategorized', '0');
# --------------------------------------------------------

