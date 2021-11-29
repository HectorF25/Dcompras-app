DROP TABLE IF EXISTS barrio;

CREATE TABLE `barrio` (
  `idBarrio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreBarrio` varchar(20) DEFAULT NULL,
  `idLocalidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`idBarrio`),
  KEY `idLocalidadFK` (`idLocalidad`),
  CONSTRAINT `idLocalidadFK` FOREIGN KEY (`idLocalidad`) REFERENCES `localidad` (`idLocalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO barrio VALUES("1","Policarpa","1");
INSERT INTO barrio VALUES("2","La Victoria","3");
INSERT INTO barrio VALUES("3","Las Cruces","2");


DROP TABLE IF EXISTS categoriaproducto;

CREATE TABLE `categoriaproducto` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCategoria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO categoriaproducto VALUES("1","Lacteos");
INSERT INTO categoriaproducto VALUES("2","Frutas");
INSERT INTO categoriaproducto VALUES("3","Electrodomesticos");


DROP TABLE IF EXISTS chat;

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL AUTO_INCREMENT,
  `sender_userid` int(11) NOT NULL,
  `reciever_userid` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  PRIMARY KEY (`chatid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO chat VALUES("5","2","4","Hola admin","2021-11-08 15:28:49","0");
INSERT INTO chat VALUES("6","2","5","Hola luis","2021-11-08 15:29:14","0");
INSERT INTO chat VALUES("7","5","2","Hola fernando","2021-11-08 15:30:47","0");
INSERT INTO chat VALUES("8","4","2","dfsg","2021-11-29 09:40:53","1");


DROP TABLE IF EXISTS chat_login_details;

CREATE TABLE `chat_login_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_typing` enum('no','yes') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

INSERT INTO chat_login_details VALUES("1","2","2021-10-29 14:14:10","no");
INSERT INTO chat_login_details VALUES("2","2","2021-10-29 14:36:55","no");
INSERT INTO chat_login_details VALUES("3","2","2021-11-08 10:58:14","no");
INSERT INTO chat_login_details VALUES("4","2","2021-11-08 13:32:00","no");
INSERT INTO chat_login_details VALUES("5","2","2021-11-08 13:44:27","no");
INSERT INTO chat_login_details VALUES("6","5","2021-11-08 14:57:09","yes");
INSERT INTO chat_login_details VALUES("7","4","2021-11-08 15:02:05","no");
INSERT INTO chat_login_details VALUES("8","2","2021-11-08 15:22:05","no");
INSERT INTO chat_login_details VALUES("9","2","2021-11-08 15:23:45","no");
INSERT INTO chat_login_details VALUES("10","2","2021-11-14 12:05:46","no");
INSERT INTO chat_login_details VALUES("11","4","2021-11-14 12:09:49","no");
INSERT INTO chat_login_details VALUES("12","2","2021-11-29 08:00:34","no");
INSERT INTO chat_login_details VALUES("13","6","2021-11-29 08:52:03","no");
INSERT INTO chat_login_details VALUES("14","6","2021-11-29 08:52:35","no");
INSERT INTO chat_login_details VALUES("15","6","2021-11-29 08:52:49","no");
INSERT INTO chat_login_details VALUES("16","6","2021-11-29 08:53:17","no");
INSERT INTO chat_login_details VALUES("17","6","2021-11-29 08:54:14","no");
INSERT INTO chat_login_details VALUES("18","6","2021-11-29 08:54:33","no");
INSERT INTO chat_login_details VALUES("19","6","2021-11-29 08:54:53","no");
INSERT INTO chat_login_details VALUES("20","6","2021-11-29 08:55:14","no");
INSERT INTO chat_login_details VALUES("21","6","2021-11-29 08:55:28","no");
INSERT INTO chat_login_details VALUES("22","6","2021-11-29 08:56:11","no");
INSERT INTO chat_login_details VALUES("23","6","2021-11-29 08:56:30","no");
INSERT INTO chat_login_details VALUES("24","6","2021-11-29 08:57:03","no");
INSERT INTO chat_login_details VALUES("25","6","2021-11-29 08:59:53","no");
INSERT INTO chat_login_details VALUES("26","6","2021-11-29 08:59:56","no");
INSERT INTO chat_login_details VALUES("27","6","2021-11-29 09:00:17","no");
INSERT INTO chat_login_details VALUES("28","6","2021-11-29 09:00:20","no");
INSERT INTO chat_login_details VALUES("29","6","2021-11-29 09:00:28","no");
INSERT INTO chat_login_details VALUES("30","6","2021-11-29 09:01:06","no");
INSERT INTO chat_login_details VALUES("31","6","2021-11-29 09:02:03","no");
INSERT INTO chat_login_details VALUES("32","4","2021-11-29 09:40:08","no");
INSERT INTO chat_login_details VALUES("33","3","2021-11-29 11:49:27","no");
INSERT INTO chat_login_details VALUES("34","4","2021-11-29 12:18:33","no");
INSERT INTO chat_login_details VALUES("35","4","2021-11-29 12:19:05","no");
INSERT INTO chat_login_details VALUES("36","4","2021-11-29 12:21:49","no");
INSERT INTO chat_login_details VALUES("37","4","2021-11-29 12:27:40","no");
INSERT INTO chat_login_details VALUES("38","4","2021-11-29 12:48:42","no");
INSERT INTO chat_login_details VALUES("39","4","2021-11-29 12:50:05","no");
INSERT INTO chat_login_details VALUES("40","4","2021-11-29 12:50:55","no");
INSERT INTO chat_login_details VALUES("41","4","2021-11-29 12:51:03","no");
INSERT INTO chat_login_details VALUES("42","4","2021-11-29 12:51:46","no");


DROP TABLE IF EXISTS domicilio;

CREATE TABLE `domicilio` (
  `idDomicilio` int(11) NOT NULL AUTO_INCREMENT,
  `ubicacionDomicilio` varchar(45) DEFAULT NULL,
  `estadoDomicilio` tinyint(1) DEFAULT NULL,
  `idPedido` int(11) DEFAULT NULL,
  `idBarrio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDomicilio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO domicilio VALUES("1","Carrera 11 # 3-15","1","1","2");


DROP TABLE IF EXISTS localidad;

CREATE TABLE `localidad` (
  `idLocalidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombreLocalidad` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idLocalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO localidad VALUES("1","Antonio Nariño");
INSERT INTO localidad VALUES("2","Santa Fe");
INSERT INTO localidad VALUES("3","San Cristobal");


DROP TABLE IF EXISTS negocio;

CREATE TABLE `negocio` (
  `idNegocio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreNegocio` varchar(45) DEFAULT NULL,
  `direccionNegocio` varchar(45) DEFAULT NULL,
  `nitNegocio` varchar(45) DEFAULT NULL,
  `estadoNegocio` tinyint(1) DEFAULT NULL,
  `fechaFundacion` date DEFAULT NULL,
  `telefonoNegocio` int(11) DEFAULT NULL,
  `idTipoNegocio` int(11) DEFAULT NULL,
  `idBarrio` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idPeticionNegocio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idNegocio`),
  KEY `idPeticionNegocioFK` (`idPeticionNegocio`),
  KEY `idBarrioFK` (`idBarrio`),
  KEY `idTipoNegocioFK` (`idTipoNegocio`),
  KEY `idUsuarioFK3` (`idUsuario`),
  CONSTRAINT `idBarrioFK` FOREIGN KEY (`idBarrio`) REFERENCES `barrio` (`idBarrio`),
  CONSTRAINT `idPeticionNegocioFK` FOREIGN KEY (`idPeticionNegocio`) REFERENCES `peticionnegocio` (`idPeticionNegocio`),
  CONSTRAINT `idTipoNegocioFK` FOREIGN KEY (`idTipoNegocio`) REFERENCES `tiponegocio` (`idTipoNegocio`),
  CONSTRAINT `idUsuarioFK3` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO negocio VALUES("1","Salsamentaria La Mona","Carrera 11 # 4-25","58752","1","2020-05-12","6695269","1","1","2","1");


DROP TABLE IF EXISTS pedido;

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `domicilioPedido` tinyint(1) DEFAULT NULL,
  `nombreProductos` varchar(80) DEFAULT NULL,
  `especificacionProducto` varchar(150) DEFAULT NULL,
  `valorTotalPedido` double DEFAULT NULL,
  `estadoPedido` tinyint(1) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idTipoPago` int(11) DEFAULT NULL,
  `idNegocio` int(11) DEFAULT NULL,
  `idBarrio` int(11) DEFAULT NULL,
  `idDomicilio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `idUsuarioFK2` (`idUsuario`),
  KEY `idTipoPagoFK` (`idTipoPago`),
  KEY `idDomicilioFK` (`idDomicilio`),
  KEY `idNegocioFK` (`idNegocio`),
  CONSTRAINT `idDomicilioFK` FOREIGN KEY (`idDomicilio`) REFERENCES `domicilio` (`idDomicilio`),
  CONSTRAINT `idNegocioFK` FOREIGN KEY (`idNegocio`) REFERENCES `negocio` (`idNegocio`),
  CONSTRAINT `idTipoPagoFK` FOREIGN KEY (`idTipoPago`) REFERENCES `tipopago` (`idTipoPago`),
  CONSTRAINT `idUsuarioFK2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO pedido VALUES("1","1","Tres Huevos, Una bolsa de leche","Leche x1 Litro","5500","1","2","1","1","1","1");


DROP TABLE IF EXISTS pedido_producto;

CREATE TABLE `pedido_producto` (
  `idProducto` int(11) DEFAULT NULL,
  `idPedido` int(11) DEFAULT NULL,
  `cantidadPedido` int(11) DEFAULT NULL,
  `precioPedido` double DEFAULT NULL,
  `idSesion` varchar(255) DEFAULT NULL,
  KEY `idPedidoFK` (`idPedido`),
  KEY `idProductoFK` (`idProducto`),
  CONSTRAINT `idPedidoFK` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`),
  CONSTRAINT `idProductoFK` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO pedido_producto VALUES("1","1","5","10000","");
INSERT INTO pedido_producto VALUES("1","","2","15000","9aesfem3ae9pggmaop01j2anus");
INSERT INTO pedido_producto VALUES("1","","1","15000","f742bv46igffkdci8gm264vldp");
INSERT INTO pedido_producto VALUES("1","","1","15000","o58b569p8peg4d5kouce49r8t8");
INSERT INTO pedido_producto VALUES("1","","1","15000","j0grcl5de3kdnf22gt75ifjnv6");
INSERT INTO pedido_producto VALUES("1","","1","15000","41psuf2pep87pgf5tvb6h9bstg");
INSERT INTO pedido_producto VALUES("1","","1","15000","9tfku7kq6u8kd8vrtg19avhr98");
INSERT INTO pedido_producto VALUES("1","","1","15000","epi7b8q2of3sgn94jkk3f5b1ho");
INSERT INTO pedido_producto VALUES("1","","1","15000","h399m98ek401g4eqj02uuhaeic");
INSERT INTO pedido_producto VALUES("1","","1","15000","kc4ujsbh5l4pu84ode6kslkidj");
INSERT INTO pedido_producto VALUES("1","","1","15000","nl9diblg8j1iu9unnbfuh8tlqc");


DROP TABLE IF EXISTS perfilusuario;

CREATE TABLE `perfilusuario` (
  `idPerfilUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombrePerfilUsuario` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idPerfilUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO perfilusuario VALUES("1","Administrador");
INSERT INTO perfilusuario VALUES("2","Cliente");
INSERT INTO perfilusuario VALUES("3","Vendedor");
INSERT INTO perfilusuario VALUES("4","Repartidor");


DROP TABLE IF EXISTS perfilusuario_usuario;

CREATE TABLE `perfilusuario_usuario` (
  `idPerfilUsuario` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estadoRol` tinyint(1) DEFAULT NULL,
  KEY `idUsuarioFK` (`idUsuario`),
  KEY `idPerfilUsuarioFK` (`idPerfilUsuario`),
  CONSTRAINT `idPerfilUsuarioFK` FOREIGN KEY (`idPerfilUsuario`) REFERENCES `perfilusuario` (`idPerfilUsuario`),
  CONSTRAINT `idUsuarioFK` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO perfilusuario_usuario VALUES("1","1","2021-06-28 11:25:20","1");
INSERT INTO perfilusuario_usuario VALUES("2","2","2021-06-28 11:28:25","1");


DROP TABLE IF EXISTS peticionnegocio;

CREATE TABLE `peticionnegocio` (
  `idPeticionNegocio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreNegocio` varchar(45) DEFAULT NULL,
  `nombrePropietario` varchar(45) DEFAULT NULL,
  `nitNegocio` int(11) DEFAULT NULL,
  `razonsocialNegocio` varchar(45) DEFAULT NULL,
  `telefonoNegocio` int(11) DEFAULT NULL,
  `fechaFundacion` date DEFAULT NULL,
  `nombreTipoNegocio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPeticionNegocio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO peticionnegocio VALUES("1","Salsamentaria La Mona","Juan Rodriguez","25879","Salsamentaria La Mona S.A","2147483647","2018-05-11","Lacteos");
INSERT INTO peticionnegocio VALUES("2","TecnoMundo","Pedro Molina","102578","TecnoMundo S.A.S","2147483647","2020-09-10","Tecnologia");
INSERT INTO peticionnegocio VALUES("3","Supermercado los paisas","Miguel Mendez","24569","Supermercado los paisas S.A","2147483647","2018-05-12","Supermercado");


DROP TABLE IF EXISTS producto;

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(20) DEFAULT NULL,
  `ivaProducto` double DEFAULT NULL,
  `precioProducto` double DEFAULT NULL,
  `especificacionProducto` varchar(200) DEFAULT NULL,
  `imgProducto` varchar(255) DEFAULT NULL,
  `estadoProducto` tinyint(1) DEFAULT NULL,
  `idSubCategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `idSubCategoriaFK` (`idSubCategoria`),
  CONSTRAINT `idSubCategoriaFK` FOREIGN KEY (`idSubCategoria`) REFERENCES `subcategoriaproducto` (`idSubCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO producto VALUES("1","Leche Alqueria","0","2500","Leche de un litro","leche","1","1");


DROP TABLE IF EXISTS producto_negocio;

CREATE TABLE `producto_negocio` (
  `idProductoNegocio` int(11) NOT NULL AUTO_INCREMENT,
  `idProducto` int(11) DEFAULT NULL,
  `idNegocio` int(11) DEFAULT NULL,
  `precioProductoNegocio` double DEFAULT NULL,
  `cantidadProducto` int(11) DEFAULT NULL,
  `estadoProductoNegocio` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idProductoNegocio`),
  KEY `idNegocioFK2` (`idNegocio`),
  KEY `idProductoFK2` (`idProducto`),
  CONSTRAINT `idNegocioFK2` FOREIGN KEY (`idNegocio`) REFERENCES `negocio` (`idNegocio`),
  CONSTRAINT `idProductoFK2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO producto_negocio VALUES("1","1","1","15000","3","1");


DROP TABLE IF EXISTS subcategoriaproducto;

CREATE TABLE `subcategoriaproducto` (
  `idSubCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombreSubCategoria` varchar(45) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSubCategoria`),
  KEY `idCategoriaFK` (`idCategoria`),
  CONSTRAINT `idCategoriaFK` FOREIGN KEY (`idCategoria`) REFERENCES `categoriaproducto` (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO subcategoriaproducto VALUES("1","Leche","1");
INSERT INTO subcategoriaproducto VALUES("2","Verduras","2");
INSERT INTO subcategoriaproducto VALUES("3","Para el hogar","3");


DROP TABLE IF EXISTS tipodocumento;

CREATE TABLE `tipodocumento` (
  `idTipoDoc` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTipoDoc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTipoDoc`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO tipodocumento VALUES("1","Cedula");
INSERT INTO tipodocumento VALUES("2","Tarjeta de Identidad");
INSERT INTO tipodocumento VALUES("3","Cedula Extranjera");


DROP TABLE IF EXISTS tiponegocio;

CREATE TABLE `tiponegocio` (
  `idTipoNegocio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTipoNegocio` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idTipoNegocio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO tiponegocio VALUES("1","Salsamentaria y Pollos");
INSERT INTO tiponegocio VALUES("2","Tecnologia");
INSERT INTO tiponegocio VALUES("3","Supermercado");
INSERT INTO tiponegocio VALUES("4","Ropa");


DROP TABLE IF EXISTS tipopago;

CREATE TABLE `tipopago` (
  `idTipoPago` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTipoPago` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idTipoPago`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO tipopago VALUES("1","Efectivo");
INSERT INTO tipopago VALUES("2","Tarjeta");
INSERT INTO tipopago VALUES("3","PSE");


DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(45) DEFAULT NULL,
  `apellidoUsuario` varchar(45) DEFAULT NULL,
  `contraseñaUsuario` varchar(45) DEFAULT NULL,
  `correoUsuario` varchar(45) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `documentoUsuario` int(11) NOT NULL DEFAULT 0,
  `estadoUsuario` tinyint(1) DEFAULT NULL,
  `direccionUsuario` varchar(45) DEFAULT NULL,
  `imgUsuario` varchar(255) NOT NULL DEFAULT '/images/fotos_perfil/perfil.jpg',
  `idTipoDoc` int(11) NOT NULL DEFAULT 1,
  `idPerfilUsuario` int(11) DEFAULT NULL,
  `onlineUsuario` int(11) NOT NULL DEFAULT 0,
  `current_session` int(11) NOT NULL,
  `hashUsuario` varchar(52) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `idTipoDocFK` (`idTipoDoc`),
  KEY `idPerfilUsuarioFK1` (`idPerfilUsuario`),
  CONSTRAINT `idPerfilUsuarioFK1` FOREIGN KEY (`idPerfilUsuario`) REFERENCES `perfilusuario` (`idPerfilUsuario`),
  CONSTRAINT `idTipoDocFK` FOREIGN KEY (`idTipoDoc`) REFERENCES `tipodocumento` (`idTipoDoc`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO usuario VALUES("1","Santiago","Perez","SP1522","Santiago@gmail.com","2002-05-12","1023978268","1","","/images/fotos_perfil/perfil.jpg","1","1","0","0","");
INSERT INTO usuario VALUES("2","Fernando","Valencia","FV8799","FernandoValencia@gmail.com","1999-08-05","59257084","1","","/images/fotos_perfil/perfil.jpg","1","2","0","5","");
INSERT INTO usuario VALUES("3","Cristian","Alarcon","CCAM1860","cristian03@gmail.com","2003-10-30","1001299698","1","","/images/fotos_perfil/perfil.jpg","2","3","1","0","");
INSERT INTO usuario VALUES("4","Hector","Florez","HF15880","hectorf25@gmail.com","2003-02-10","1000255987","1","","/images/fotos_perfil/perfil.jpg","1","1","1","2","");
INSERT INTO usuario VALUES("5","Luis","Martinez","LM2235","","2004-06-15","102569877","1","","/images/fotos_perfil/perfil.jpg","2","2","1","2","");
INSERT INTO usuario VALUES("6","hectrda","dsadsa","12345*FH","hectorflorez25@hotmail.es","","0","1","","/images/fotos_perfil/perfil.jpg","1","4","0","0","02e74f10e0327ad868d138f2b4fdd6f0");
INSERT INTO usuario VALUES("7","sdadsa","sadsa","sdsasd423","cristian0302@gmail.com","2021-11-29","23122133","0","Caera 2 #1qa-0a","/images/fotos_perfil/Imagen1.png","1","1","0","0","");


