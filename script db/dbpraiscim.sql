create database dbpraiscim;

use dbpraiscim;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int auto_increment,
  `Codigo` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`Codigo`, `Password`) VALUES
('2018071', '2018071'),
('2018100', '2018100');

DROP TABLE IF EXISTS `arquivos`;
CREATE TABLE IF NOT EXISTS `arquivos`(
	id int auto_increment,
    path_arquivo varchar(250),
    data_upload datetime,
    primary key(`id`)
);

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
(null, 'ISCIM.PF5555', 'Alberto Nhantumbo', 'ISN4A'),
(null, 'ISCIM.PF2222', 'Muhammad Lorgat', 'ISN4B');

describe docentes;

select * from docentes;