CREATE TABLE `usuarios` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`));
  
INSERT INTO `usuarios` VALUES (1, 'ejemplo','1234','Javier','Kainer');

SELECT * FROM `usuarios`;


CREATE TABLE `personajes` (
`id` int unsigned NOT NULL AUTO_INCREMENT,
`nombre_personaje` varchar(50) NOT NULL,
`raza` varchar(20) NOT NULL,
`clase` varchar(15) NOT NULL,
`nivel` int NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `nombre_personaje` (`nombre_personaje`));

INSERT INTO `personajes` VALUES (1, 'Jaenkita','Elfo de la noche','Pícaro', 70);

SELECT * FROM `personajes`;
  
