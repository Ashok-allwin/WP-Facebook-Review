CREATE TABLE IF NOT EXISTS `school` (
  `app_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `app_secret` varchar(255) CHARACTER SET utf8 NOT NULL,
  `page_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `graph_api` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `school` (`id`, `name`) VALUES
('CCC', 'Corpus Christi Catholic School'),
('HSE', 'Holy Spirit Episcopal School'),
('OLG', 'Our Lady of Guadalupe Catholic School'),
('PLS', 'Pilgrim Lutheran School'),
('SAG', 'Saint Augustine Catholic School'),
('SAN', 'Saint Anne Catholic School'),
('SCC', 'Saint Christopher Catholic School'),
('TWC', 'The Woodlands Christian Academy');