
CREATE DATABASE /*!32312 IF NOT EXISTS*/ `almacen` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `almacen`;

CREATE TABLE `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;




CREATE TABLE `ventas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `producto_id` int(10) unsigned DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precioV` decimal(25,2) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `media` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;



CREATE TABLE `productos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `partNo` varchar(60) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precioV` decimal(25,2) DEFAULT 0.00,
  `precioC` decimal(25,2) DEFAULT 0.00,
  `categoria_id` int(10) unsigned NOT NULL,
  `destino` varchar(255) DEFAULT NULL,
  `media_id` int(11) DEFAULT 0,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `partNo` (`partNo`),
  KEY `categoria_id` (`categoria_id`),
  KEY `media_id` (`media_id`),
  CONSTRAINT `FK_productos` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;



CREATE TABLE `venta1` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) unsigned NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioV` decimal(25,2) DEFAULT 0.00,
  `precioC` decimal(25,2) DEFAULT 0.00,
  `total_venta` decimal(25,2) DEFAULT 0.00,
  -- `iva` decimal(25,2) DEFAULT 0.00,
  `destino` varchar(255) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`producto_id`),
  CONSTRAINT `SK` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;


CREATE TABLE `grupo_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grupo` varchar(150) NOT NULL,
  `nivel_grupo` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nivel_grupo` (`nivel_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;


CREATE TABLE `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nivel` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `nivel` (`nivel`),
  CONSTRAINT `FK_user` FOREIGN KEY (`nivel`) REFERENCES `grupo_us` (`nivel_grupo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
