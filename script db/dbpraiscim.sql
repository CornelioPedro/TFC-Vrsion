DROP DATABASE IF EXISTS dbpraiscim;
CREATE DATABASE dbpraiscim;

USE dbpraiscim;

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int auto_increment,
  `nomeAdmin` varchar(200) NOT NULL,
  `usernameAdmin` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `senha` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `arquivos_blob` (
  `id` int(11) NOT NULL,
  `path_arquivo` varchar(250) DEFAULT NULL,
  `tipo_arquivo` varchar(250) DEFAULT NULL,
  `data_upload` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `docentes` (`id`, `Username`, `Nome`, `senha`) VALUES
(null, '2018071', 'Alberto Nhantumbo', 'ISN4A'),
(null, '2018543', 'Muhammad Lorgat', 'ISN4B');

describe docentes;
select * from docentes;