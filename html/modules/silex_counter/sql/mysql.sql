CREATE TABLE `{prefix}_{dirname}_access` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL,
  `ip` varchar(255) NOT NULL DEFAULT '',
  `created` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
