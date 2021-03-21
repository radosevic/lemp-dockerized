DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES ('Pera'),('Zika'),('Laza');
UNLOCK TABLES;