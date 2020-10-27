CREATE DATABASE almacen;
USE almacen;

CREATE TABLE `categorias` (
  `idcategorias` int(5) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `categorias` (`idcategorias`, `nombre`) VALUES
(14, 'pro1'),


CREATE TABLE `productos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `cantidad` int(5) DEFAULT NULL,
  `precioC` decimal(10,0) DEFAULT NULL,
  `precioV` decimal(10,0) DEFAULT NULL,
  `image` mediumblob DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `productos` (`id`, `nombre`, `codigo`, `cantidad`, `precioC`, `precioV`, `image`, `fecha`) VALUES
(9, 'producto 1', 'Prod1', 10, '170', '190', NULL, '2020-10-19'),
(12, 'producto 2', 'Prod2', 50, '500', '600', NULL, '2020-10-19');



CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `usuario_cat` int(5) DEFAULT NULL,
  `categoria_usr_id_usr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `ventas` (
  `idventas` int(5) NOT NULL,
  `id_producto` int(5) DEFAULT NULL,
  `cantidad` int(5) DEFAULT NULL,
  `precioV` decimal(10,0) DEFAULT NULL,
  `precioC` decimal(10,0) DEFAULT NULL,
  `totalV` decimal(25,0) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;