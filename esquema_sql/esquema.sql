CREATE DATABASE /*!32312 IF NOT EXISTS*/ tienda_holbi /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE tienda_holbi;

DROP TABLE IF EXISTS carrito_usuarios;
CREATE TABLE `carrito_usuarios` (
  `id_sesion` varchar(255) NOT NULL,
  `id_producto` bigint unsigned NOT NULL,
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `carrito_usuarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS productos;
CREATE TABLE `productos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(1024) NOT NULL,
  `precio` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
