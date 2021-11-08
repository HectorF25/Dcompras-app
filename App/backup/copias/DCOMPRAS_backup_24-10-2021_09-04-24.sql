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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO chat VALUES("1","6","5","asd","2021-10-03 21:39:04","1");
INSERT INTO chat VALUES("2","6","5","123","2021-10-03 21:39:30","1");
INSERT INTO chat VALUES("3","6","1","Hola","2021-10-03 21:47:54","1");
INSERT INTO chat VALUES("5","6","1","asdasdasdsadasdsada","2021-10-03 22:09:17","1");
INSERT INTO chat VALUES("6","5","6","Mensaje de prueba","2021-10-03 22:10:00","0");
INSERT INTO chat VALUES("12","6","5","Hola","2021-10-04 12:21:27","1");
INSERT INTO chat VALUES("13","6","5","Buenas","2021-10-11 14:10:28","1");
INSERT INTO chat VALUES("14","6","5","Hola","2021-10-24 20:57:30","1");


DROP TABLE IF EXISTS chat_login_details;

CREATE TABLE `chat_login_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_typing` enum('no','yes') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

INSERT INTO chat_login_details VALUES("1","1","2021-10-03 21:11:09","no");
INSERT INTO chat_login_details VALUES("2","1","2021-10-03 21:12:53","no");
INSERT INTO chat_login_details VALUES("3","6","2021-10-03 21:14:31","no");
INSERT INTO chat_login_details VALUES("4","6","2021-10-03 21:50:01","yes");
INSERT INTO chat_login_details VALUES("5","6","2021-10-04 12:20:55","no");
INSERT INTO chat_login_details VALUES("6","6","2021-10-04 15:25:18","no");
INSERT INTO chat_login_details VALUES("7","6","2021-10-04 15:28:22","no");
INSERT INTO chat_login_details VALUES("8","6","2021-10-04 15:28:22","no");
INSERT INTO chat_login_details VALUES("9","1","2021-10-11 13:04:38","no");
INSERT INTO chat_login_details VALUES("10","6","2021-10-11 13:53:52","no");
INSERT INTO chat_login_details VALUES("11","6","2021-10-11 13:55:18","no");
INSERT INTO chat_login_details VALUES("12","1","2021-10-11 14:00:34","no");
INSERT INTO chat_login_details VALUES("13","1","2021-10-11 14:05:12","no");
INSERT INTO chat_login_details VALUES("14","6","2021-10-11 14:05:34","no");
INSERT INTO chat_login_details VALUES("15","6","2021-10-24 20:57:10","no");
INSERT INTO chat_login_details VALUES("16","1","2021-10-24 21:00:51","no");
INSERT INTO chat_login_details VALUES("17","1","2021-10-24 21:04:15","no");


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
INSERT INTO pedido_producto VALUES("1","","1","15000","uk5pnvk6ohhlpd3bplqnr5tqh3");


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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO producto VALUES("1","Leche Alqueria","0","2500","Leche de un litro","leche","1","1");
INSERT INTO producto VALUES("2","Lavaloza Axion","","2500","900g","axion","1","3");


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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO producto_negocio VALUES("1","1","1","15000","3","1");
INSERT INTO producto_negocio VALUES("2","2","1","2300","28","1");


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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO usuario VALUES("1","Santiago","Gomez","SP1522","Santiago@gmail.com","2002-05-12","1023978268","1","Carrera 12 # 2-06 sur","/images/fotos_perfil/howie.png","1","1","1","0","");
INSERT INTO usuario VALUES("2","Fernando","Valencia","FV8799","FernandoValencia@gmail.com","1999-08-05","59257084","1","","/images/fotos_perfil/perfil.jpg","1","2","0","0","");
INSERT INTO usuario VALUES("3","Cristian","Alarcon","CCAM1860","cristian03@gmail.com","2003-10-30","1001299698","1","","/images/fotos_perfil/perfil.jpg","2","3","0","0","");
INSERT INTO usuario VALUES("4","Hector","Florez","HF15880","hectorf25@gmail.com","2003-02-10","1000255987","1","","/images/fotos_perfil/perfil.jpg","1","1","0","0","");
INSERT INTO usuario VALUES("5","Luis","Martinez","LM2235","LuisMartinez10@gmail.com","2004-06-15","102569877","1","","/images/fotos_perfil/perfil.jpg","2","2","0","0","");
INSERT INTO usuario VALUES("6","Luis Carlos","Martinez","1234","luisomg111@gmail.com","2021-10-05","1090272162","1","Av 1 de Mayo #10A","../../perfiladmin/administrador/images/fotos_perfil/howie.png","2","2","0","5","");


