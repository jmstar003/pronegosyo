CREATE TABLE IF NOT EXISTS `pro_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT '',
  `spam` tinyint(2) NOT NULL DEFAULT '0',
  `deleted` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
TRUNCATE TABLE `pro_users`;
 
INSERT INTO `pro_users` VALUES ('1', 'pnegosyoadmin', '$P$BSV.OO/L2ZqliYcv9YHH0wRwwNEnXm1', 'pnegosyoadmin', 'info@pronegosyo.com', '', '2014-05-31 09:54:44', '', '0', 'pnegosyoadmin', '0', '0'); 
INSERT INTO `pro_users` VALUES ('2', 'yvettety', '$P$BV4IMAwpWq0f04jwlYAb4xDxrlUbTi0', 'yvettety', 'yvette.c.ty@gmail.com', '', '2014-06-03 12:15:56', '$P$BSTw0BxazF.Km6clkp2iA7a/xVuzn11', '0', 'yvettety', '0', '0'); 
INSERT INTO `pro_users` VALUES ('3', 'jcamores', '$P$ByXgTtsAc0hH6u.HtBo4CgCysOSBl51', 'jcamores', 'jcamores@xolve.co', '', '2014-06-07 11:38:43', '', '0', 'JC', '0', '0'); 
INSERT INTO `pro_users` VALUES ('4', 'micoalmeda', '$P$Bap2sbUhAr7mCyxQ80oRI4oO2jBpF6/', 'micoalmeda', 'mico.almeda@brandaction.ph', '', '2014-06-07 13:10:45', '', '0', 'Mico', '0', '0'); 
INSERT INTO `pro_users` VALUES ('5', 'admin', '$P$BjSc5cMdElEI2G9xspWQUcjRes47Q10', 'admin', 'plumdelite1v@gmail.com', '', '2014-06-16 07:56:34', '', '0', 'admin', '0', '0'); 
INSERT INTO `pro_users` VALUES ('6', 'institutesed', '$P$BRNqBzmb7iuwqo.kHcWzxBmMtUsvw0.', 'institutesed', 'institutesed@gmail.com', '', '2014-08-05 06:27:18', '', '0', 'institutesed', '0', '0');
# --------------------------------------------------------

