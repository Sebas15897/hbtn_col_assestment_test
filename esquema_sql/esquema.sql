CREATE DATABASE IF NOT EXISTS tienda_holbi DEFAULT CHARACTER SET;
USE tienda_holbi;

DROP TABLE IF EXISTS carrito_usuarios;
CREATE TABLE `carrito_usuarios` (
  `id_sesion` varchar(255) NOT NULL,
  `id_producto` bigint unsigned NOT NULL,
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `carrito_usuarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

DROP TABLE IF EXISTS productos;
CREATE TABLE `productos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(1024) NOT NULL,
  `precio` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
  );

INSERT INTO productos(id,nombre,descripcion,precio) VALUES(4,'Pollo','Pollo adobado',1500.00),(5,'Cerveza tke','refinada cerveza',5000.00),(6,'Pan integral','Delicioso pan integral',9000.00);
