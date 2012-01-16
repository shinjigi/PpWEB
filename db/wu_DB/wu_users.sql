CREATE TABLE IF NOT EXISTS `wu_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(150) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `user_type` varchar(25) NOT NULL DEFAULT '',
  `register_Date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastvisit_Date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `activation` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1001 ;

ALTER TABLE `wu_users` ADD INDEX ( `user_type` ) ;

ALTER TABLE `wu_users` ADD INDEX ( `username` ) ;

ALTER TABLE `wu_users` ADD INDEX ( `email` ) ;