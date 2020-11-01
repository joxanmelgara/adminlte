CREATE DATABASE /*!32312 IF NOT EXISTS*/ `almacen` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `almacen`;

CREATE TABLE `categorias` (
  `id` int(11)  NOT NULL,
  `nombre` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `categorias` (`id`, `nombre`) VALUES
(7, 'categoria 1'),
(8, 'categoria 11');



CREATE TABLE `grupo_us` (
  `id` int(11) NOT NULL,
  `nombre_grupo` varchar(150) NOT NULL,
  `nivel_grupo` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `grupo_us` (`id`, `nombre_grupo`, `nivel_grupo`, `estado`) VALUES
(8, 'admin', 1, 'activo');



CREATE TABLE `media` (
  `id` int(11)  NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `productos` (
  `id` int(11)  NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `partNo` varchar(60) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precioV` decimal(25,2) DEFAULT 0.00,
  `precioC` decimal(25,2) DEFAULT 0.00,
  `categoria_id` int(10)  NOT NULL,
  `destino` varchar(255) DEFAULT NULL,
  `media_id` int(11) DEFAULT 0,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `productos` (`id`, `nombre`, `partNo`, `cantidad`, `precioV`, `precioC`, `categoria_id`, `destino`, `media_id`, `fecha`) VALUES
(19, 'producto 1', '5ad4', 20, '50.00', '40.00', 7, 'pepe', 2, '0000-00-00 00:00:00');



CREATE TABLE `usuarios` (
  `id` int(11)  NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nivel` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `estado` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `nivel`, `image`, `estado`) VALUES
(17, 'Joxan', '@joxan', 'asdfg', 1, 'target not found', 'activo');



CREATE TABLE `venta` (
  `id` int(11)  NOT NULL,
  `producto_id` int(11)  NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioV` decimal(25,2) DEFAULT 0.00,
  `precioC` decimal(25,2) DEFAULT 0.00,
  `total_venta` decimal(25,2) DEFAULT 0.00,
  `destino` varchar(255) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
