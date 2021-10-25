DROP DATABASE IMAKE;
CREATE DATABASE IMAKE;
USE IMAKE;
CREATE TABLE TipoDocumento (
    idTipoDoc int PRIMARY KEY AUTO_INCREMENT,
    nombreTipoDoc varchar(45)
);
CREATE TABLE PerfilUsuario (
    idPerfilUsuario int PRIMARY KEY AUTO_INCREMENT,
    nombrePerfilUsuario varchar(20)
);
CREATE TABLE PerfilUsuario_Usuario (
    idPerfilUsuario int,
    idUsuario int,
    fechaRegistro timestamp,
    estadoRol boolean
);
CREATE TABLE Usuario (
    idUsuario int PRIMARY KEY AUTO_INCREMENT,
    nombreUsuario varchar(45),
    apellidoUsuario varchar(45),
    contraseñaUsuario varchar(45),
    correoUsuario varchar(45),
    fechaNacimiento date,
    documentoUsuario int NOT NULL DEFAULT '000000000',
    estadoUsuario boolean,
	direccionUsuario varchar(45),
	imgUsuario varchar(255)  NOT NULL DEFAULT '/images/fotos_perfil/perfil.jpg',
    idTipoDoc int NOT NULL DEFAULT '1',
    idPerfilUsuario int,
    onlineUsuario int NOT NULL DEFAULT 0,
    current_session int NOT NULL,
    hashUsuario varchar(52)
);
CREATE TABLE TipoPago (
    idTipoPago int PRIMARY KEY AUTO_INCREMENT,
    nombreTipoPago varchar(10)
);
CREATE TABLE TipoNegocio (
    idTipoNegocio int PRIMARY KEY AUTO_INCREMENT,
    nombreTipoNegocio varchar(25)
);
CREATE TABLE Localidad (
    idLocalidad int PRIMARY KEY AUTO_INCREMENT,
    nombreLocalidad varchar(20)
);
CREATE TABLE Barrio (
    idBarrio int PRIMARY KEY AUTO_INCREMENT,
    nombreBarrio varchar(20),
    idLocalidad int
);
CREATE TABLE PeticionNegocio (
    idPeticionNegocio int PRIMARY KEY AUTO_INCREMENT,
    nombreNegocio varchar(45),
    nombrePropietario varchar(45),
    nitNegocio int,
    razonsocialNegocio varchar(45),
    telefonoNegocio int,
    fechaFundacion date,
    nombreTipoNegocio varchar(45)
);
CREATE TABLE CategoriaProducto (
    idCategoria int PRIMARY KEY AUTO_INCREMENT,
    nombreCategoria varchar(45)
);
CREATE TABLE SubCategoriaProducto (
    idSubCategoria int PRIMARY KEY AUTO_INCREMENT,
    nombreSubCategoria varchar(45),
    idCategoria int
);
CREATE TABLE Pedido (
    idPedido int PRIMARY KEY AUTO_INCREMENT,
    domicilioPedido boolean,
    nombreProductos varchar(80),
    especificacionProducto varchar(150),
    valorTotalPedido double,
    estadoPedido boolean,
    idUsuario int,
    idTipoPago int,
    idNegocio int,
    idBarrio int,
    idDomicilio int
);

CREATE TABLE Domicilio (
    idDomicilio int PRIMARY KEY AUTO_INCREMENT,
    ubicacionDomicilio varchar(45),
    estadoDomicilio boolean,
    idPedido int,
    idBarrio int
);
CREATE TABLE Pedido_Producto (
    idProducto int,
    idPedido int,
    cantidadPedido int,
    precioPedido double,
	idSesion varchar(255)
);
CREATE TABLE Producto (
    idProducto int PRIMARY KEY AUTO_INCREMENT,
    nombreProducto varchar(20),
    ivaProducto double,
	precioProducto double,
    especificacionProducto varchar(200),
	imgProducto varchar(255),
    estadoProducto boolean,
    idSubCategoria int
);
CREATE TABLE Producto_Negocio (
	idProductoNegocio int PRIMARY KEY AUTO_INCREMENT,
    idProducto int,
    idNegocio int,
    precioProductoNegocio double,
    cantidadProducto int,
	estadoProductoNegocio boolean
);
CREATE TABLE Negocio (
    idNegocio int PRIMARY KEY AUTO_INCREMENT,
    nombreNegocio varchar(45),
    direccionNegocio varchar(45),
    nitNegocio varchar(45),
    estadoNegocio boolean,
    fechaFundacion date,
    telefonoNegocio int,
    idTipoNegocio int,
    idBarrio int,
    idUsuario int,
    idPeticionNegocio int
);
CREATE TABLE chat (
    chatid int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    sender_userid int NOT NULL,
    reciever_userid int NOT NULL,
    message text NOT NULL,
    timestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    status int NOT NULL
);

CREATE TABLE chat_login_details(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    userid int NOT NULL,
    last_activity timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    is_typing enum('no','yes') NOT NULL
);


ALTER TABLE Usuario ADD CONSTRAINT idTipoDocFK FOREIGN KEY (idTipoDoc) REFERENCES TipoDocumento (idTipoDoc);
ALTER TABLE Usuario ADD CONSTRAINT idPerfilUsuarioFK1 FOREIGN KEY (idPerfilUsuario) REFERENCES PerfilUsuario (idPerfilUsuario);
ALTER TABLE PerfilUsuario_Usuario ADD CONSTRAINT idUsuarioFK  FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario);
ALTER TABLE PerfilUsuario_Usuario ADD CONSTRAINT idPerfilUsuarioFK  FOREIGN KEY (idPerfilUsuario) REFERENCES PerfilUsuario (idPerfilUsuario);
ALTER TABLE Pedido ADD CONSTRAINT idUsuarioFK2  FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario);
ALTER TABLE Pedido ADD CONSTRAINT idTipoPagoFK  FOREIGN KEY (idTipoPago) REFERENCES TipoPago (idTipoPago);
ALTER TABLE Pedido ADD CONSTRAINT idDomicilioFK  FOREIGN KEY (idDomicilio) REFERENCES Domicilio (idDomicilio);
ALTER TABLE Pedido ADD CONSTRAINT idNegocioFK  FOREIGN KEY (idNegocio) REFERENCES Negocio (idNegocio);
ALTER TABLE Pedido_Producto ADD CONSTRAINT idPedidoFK  FOREIGN KEY (idPedido) REFERENCES Pedido (idPedido);
ALTER TABLE Pedido_Producto ADD CONSTRAINT idProductoFK  FOREIGN KEY (idProducto) REFERENCES Producto (idProducto);
ALTER TABLE Negocio ADD CONSTRAINT idPeticionNegocioFK  FOREIGN KEY (idPeticionNegocio) REFERENCES PeticionNegocio (idPeticionNegocio);
ALTER TABLE Negocio ADD CONSTRAINT idBarrioFK  FOREIGN KEY (idBarrio) REFERENCES Barrio (idBarrio);
ALTER TABLE Negocio ADD CONSTRAINT idTipoNegocioFK  FOREIGN KEY (idTipoNegocio) REFERENCES TipoNegocio (idTipoNegocio);
ALTER TABLE Negocio ADD CONSTRAINT idUsuarioFK3  FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario);
ALTER TABLE Producto_Negocio ADD CONSTRAINT idNegocioFK2  FOREIGN KEY (idNegocio) REFERENCES Negocio (idNegocio);
ALTER TABLE Producto_Negocio ADD CONSTRAINT idProductoFK2  FOREIGN KEY (idProducto) REFERENCES Producto (idProducto);
ALTER TABLE Producto ADD CONSTRAINT idSubCategoriaFK  FOREIGN KEY (idSubCategoria) REFERENCES SubCategoriaProducto (idSubCategoria);
ALTER TABLE SubCategoriaProducto ADD CONSTRAINT idCategoriaFK  FOREIGN KEY (idCategoria) REFERENCES CategoriaProducto (idCategoria);
ALTER TABLE Barrio ADD CONSTRAINT idLocalidadFK FOREIGN KEY (idLocalidad) REFERENCES Localidad (idLocalidad);

INSERT INTO TipoDocumento VALUES('',"Cedula"),('',"Tarjeta de Identidad"),('',"Cedula Extranjera");
INSERT INTO PerfilUsuario VALUES ('',"Administrador"),('',"Cliente"),('',"Vendedor"),('',"Repartidor");
INSERT INTO Usuario VALUES 
('',"Santiago","Perez","SP1522","Santiago@gmail.com",'2002/05/12',1023978268,1,'','/images/fotos_perfil/perfil.jpg',1,1,'','',''),
('',"Fernando","Valencia","FV8799","FernandoValencia@gmail.com",'1999/08/05',59257084,1,'','/images/fotos_perfil/perfil.jpg',1,2,'','',''),
('',"Cristian","Alarcon","CCAM1860","cristian03@gmail.com",'2003/10/30',1001299698,1,'','/images/fotos_perfil/perfil.jpg',2,3,'','',''),
('',"Hector","Florez","HF15880","hectorf25@gmail.com",'2003/02/10',1000255987,1,'','/images/fotos_perfil/perfil.jpg',1,1,'','',''),
('',"Luis","Martinez","LM2235","LuisMartinez10@gmail.com",'2004/06/15',102569877,1,'','/images/fotos_perfil/perfil.jpg',2,2,'','','');
INSERT INTO PerfilUsuario_Usuario VALUES 
(1,1,'2021/06/28 11:25:20',1),
(2,2,'2021/06/28 11:28:25',1);
INSERT INTO TipoPago VALUES 
('',"Efectivo"),
('',"Tarjeta"),
('',"PSE");
INSERT INTO TipoNegocio VALUES 
('',"Salsamentaria y Pollos"),
('',"Tecnologia"),
('',"Supermercado"),
('',"Ropa");
INSERT INTO Localidad VALUES 
('',"Antonio Nariño"),
('',"Santa Fe"),
('',"San Cristobal");
INSERT INTO Barrio VALUES 
('',"Policarpa",1),
('',"La Victoria",3),
('',"Las Cruces",2);
INSERT INTO PeticionNegocio VALUES
('',"Salsamentaria La Mona","Juan Rodriguez",25879,"Salsamentaria La Mona S.A",3144250204,'2018-05-11','Lacteos'),
('',"TecnoMundo","Pedro Molina",102578,"TecnoMundo S.A.S",3124997825,'2020-09-10','Tecnologia');
INSERT INTO PeticionNegocio VALUES 
('',"Supermercado los paisas","Miguel Mendez",24569,"Supermercado los paisas S.A",3112993191,'2018-05-12','Supermercado');
INSERT INTO CategoriaProducto VALUES 
('',"Lacteos"),
('',"Frutas"),
('',"Electrodomesticos");
INSERT INTO SubCategoriaProducto VALUES 
('',"Leche",1),
('',"Verduras",2),
('',"Para el hogar",3);
INSERT INTO Producto VALUES 
('',"Leche Alqueria",0,2500,"Leche de un litro",'leche',1,1);
INSERT INTO Domicilio VALUES 
('',"Carrera 11 # 3-15",1,1,2);
INSERT INTO Negocio VALUES 
('',"Salsamentaria La Mona","Carrera 11 # 4-25",58752,1,'2020/05/12',6695269,1,1,2,1);
INSERT INTO Pedido VALUES 
('',1,"Tres Huevos, Una bolsa de leche","Leche x1 Litro",5500,1,2,1,1,1,1);
INSERT INTO Pedido_Producto VALUES 
(1,1,5,10000,'');
INSERT INTO Producto_Negocio VALUES 
(1,1,1,15000,3,1);
