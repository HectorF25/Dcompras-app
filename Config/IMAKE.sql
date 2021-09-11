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
    documentoUsuario int,
    estadoUsuario boolean,
	direccionUsuario varchar(45),
	imgUsuario varchar(255),
    idTipoDoc int,
    idPerfilUsuario int
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
    nitNegocio int,
    estadoNegocio boolean,
    idTipoNegocio int,
    idBarrio int,
    idUsuario int,
    idPeticionNegocio int
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
('',"Santiago","Perez","SP1522","Santiago@gmail.com",'2002/05/12',1023978268,1,'','',1,1),
('',"Fernando","Valencia","FV8799","FernandoValencia@gmail.com",'1999/08/05',59257084,1,'','',1,2 ),
('',"Cristian","Alarcon","CCAM1860","cristian03@gmail.com",'2003/10/30',1001299698,1,'','',2,3 ),
('',"Hector","Florez","HF15880","hectorf25@gmail.com",'2003/02/10',1000255987,1,'','',1,1 ),
('',"Luis","Martinez","LM2235","LuisMartinez10@gmail.com",'2004/06/15',102569877,1,'','',2,2);
INSERT INTO PerfilUsuario_Usuario VALUES (1,1,'2021/06/28 11:25:20',1),(2,2,'2021/06/28 11:28:25',1);
INSERT INTO TipoPago VALUES ('',"Efectivo"),('',"Tarjeta"),('',"PSE");
INSERT INTO TipoNegocio VALUES ('',"Salsamentaria y Pollos"),('',"Tecnologia"),('',"Supermercado"),('',"Ropa");
INSERT INTO Localidad VALUES ('',"Antonio Nariño"),('',"Santa Fe"),('',"San Cristobal");
INSERT INTO Barrio VALUES ('',"Policarpa",1),('',"La Victoria",3),('',"Las Cruces",2);
INSERT INTO PeticionNegocio VALUES ('',"Salsamentaria La Mona","Juan Rodriguez",25879,"Salsamentaria La Mona S.A",3144250204,'2018-05-11','Lacteos'),('',"TecnoMundo","Pedro Molina",102578,"TecnoMundo S.A.S",3124997825,'2020-09-10','Tecnologia');
INSERT INTO PeticionNegocio VALUES ('',"Supermercado los paisas","Miguel Mendez",24569,"Supermercado los paisas S.A",3112993191,'2018-05-12','Supermercado');
INSERT INTO CategoriaProducto VALUES ('',"Lacteos"),('',"Frutas"),('',"Electrodomesticos");
INSERT INTO SubCategoriaProducto VALUES ('',"Leche",1),('',"Verduras",2),('',"Para el hogar",3);
INSERT INTO Producto VALUES ('',"Leche Alqueria",0,"Leche de un litro",1,1);
INSERT INTO Domicilio VALUES ('',"Carrera 11 # 3-15",1,1,2);
INSERT INTO Negocio VALUES ('',"Salsamentaria La Mona","Carrera 11 # 4-25",58752,1,1,1,2,1);
INSERT INTO Pedido VALUES ('',1,"Tres Huevos, Una bolsa de leche","Entregar antes de las 12",5500,1,2,1,1,1,1);
INSERT INTO Pedido_Producto VALUES (1,1,5,10000);
INSERT INTO Producto_Negocio VALUES (1,1,15000,3);


SELECT 
    *
FROM
    TipoDocumento;
SELECT 
    *
FROM
    Usuario;
SELECT 
    *
FROM
    PerfilUsuario;
SELECT 
    *
FROM
    PerfilUsuario_Usuario;
SELECT 
    *
FROM
    TipoPago;
SELECT 
    *
FROM
    TipoNegocio;
SELECT 
    *
FROM
    Localidad;
SELECT 
    *
FROM
    Barrio;
SELECT 
    *
FROM
    PeticionNegocio;
SELECT 
    *
FROM
    CategoriaProducto;
SELECT 
    *
FROM
    SubCategoriaProducto;
SELECT 
    *
FROM
    Producto;
SELECT 
    *
FROM
    Pedido;
SELECT 
    *
FROM
    Domicilio;
SELECT 
    *
FROM
    Pedido_Producto;
SELECT 
    *
FROM
    Producto_Negocio;
SELECT 
    *
FROM
    Negocio;
drop procedure insertarDatosUsuario
/*Procedimientos de Almacenado Insertar Usuario*/
DELIMITER $$
CREATE PROCEDURE insertarDatosUsuario
(
   PidUsuario int,
   PnombreUsuario varchar (10),
   PapellidoUsuario varchar (10),
   PcontraseñaUsuario varchar (8),
   PcorreoUsuario varchar (15),
   PfechaNacimiento date,
   PdocumentoUsuario int,
   PestadoUsuario boolean,
   PidTipoDoc int
)
BEGIN
INSERT INTO Usuario (idUsuario,nombreUsuario,apellidoUsuario,contraseñaUsuario,correoUsuario,fechaNacimiento,documentoUsuario,estadoUsuario,idTipoDoc,PidPerfilUsuario) VALUES 
(PidUsuario,PnombreUsuario,PapellidoUsuario,PcontraseñaUsuario,PcorreoUsuario,PfechaNacimiento,PdocumentoUsuario,PestadoUsuario,PidTipoDoc,PidPerfilUsuario);
END $$
DELIMITER ;
/*Insercion de datos a la tabla */
CALL insertarDatosUsuario ('',"Miguel","Gallego","158MG158","MiguelG58@gmail.com",'1975/08/10',5926780,1,1,2);
select 
    *
from
    Usuario;
/*Procedimiento de Alamacenado Consultar*/
drop PROCEDURE consultarDatosUsuario;
DELIMITER $$
CREATE PROCEDURE consultarDatosUsuario
(
	PidUsuario int,
	PnombreUsuario varchar (10),
	PapellidoUsuario varchar (10),
	PcontraseñaUsuario varchar (8),
	PcorreoUsuario varchar (15),
	PfechaNacimiento date,
	PdocumentoUsuario int,
	PestadoUsuario boolean,
	PidTipoDoc int
)
BEGIN
SELECT nombreUsuario AS Nombre, apellidoUsuario AS Apellido,contraseñaUsuario AS Contraseña, correoUsuario AS Correo,fechaNacimiento AS 'Fecha Nacimiento',documentoUsuario AS Documento,estadoUsuario AS Estado,idTipoDoc AS 'Codigo Tipo Documento' FROM Usuario;
END $$
DELIMITER ;
CALL consultarDatosUsuario (3,'Cristian','Alarcon','CCAM1860', 'cristian03@gmail.com','2003/10/30',1001299698,1,2);

/*Procedimiento de Almacenado Actualizar*/
DELIMITER $$
CREATE PROCEDURE ActualizarDatosUsuario
(
	IN PidUsuario int,
	IN PnombreUsuario varchar (10),
	IN PapellidoUsuario varchar (10),
	IN PcontraseñaUsuario varchar (8),
	IN PcorreoUsuario varchar (15),
	IN PfechaNacimiento date,
	IN PdocumentoUsuario int,
	IN PestadoUsuario boolean
)
BEGIN
UPDATE Usuario SET nombreUsuario = PnombreUsuario,apellidoUsuario =PapellidoUsuario,contraseñaUsuario=PcontraseñaUsuario,correoUsuario =PcorreoUsuario, 
fechaNacimiento= PfechaNacimiento, documentoUsuario = PdocumentoUsuario , estadoUsuario=PestadoUsuario WHERE idUsuario = PidUsuario;
END $$
DELIMITER ;
CALL ActualizarDatosUsuario ("Juan","Ramirez","2538Jam","James@gmail.com","1975/05/08",65700087,1);


select 
    *
from
    Negocio;
/*Procedimientos de Almacenado Insertar Negocios*/
DELIMITER $$
CREATE PROCEDURE insertarDatosNegocio
(
   PidNegocio int,
   PnombreNegocio varchar (25),
   PdireccionNegocio varchar (25),
   PnitNegocio varchar (8),
   PestadoNegocio boolean,
   PidTipoNegocio int,
   PidBarrio int,
   PidUsuario int,
   PidPeticionNegocio int
)
BEGIN
INSERT INTO Negocio (idNegocio,nombreNegocio,direccionNegocio,nitNegocio,estadoNegocio,idTipoNegocio,idBarrio,idUsuario,idPeticionNegocio) VALUES 
(PidNegocio,PnombreNegocio,PdireccionNegocio,PnitNegocio,PestadoNegocio,PidTipoNegocio,PidBarrio,PidUsuario,PidPeticionNegocio);
END $$
DELIMITER ;
/*Insercion de datos a la tabla */
CALL insertarDatosNegocio('',"Supermercado Los paisas","Carrera 11 # 4-15","24569",1,3,1,1,3 );
select 
    *
from
    Negocio;

Create table DatosUsuario (
    idDatosUsuario int AUTO_INCREMENT primary key,
    usuario varchar(12),
    claveUsuario varchar(8)
);
DELIMITER $$
CREATE TRIGGER DatosUsuario AFTER INSERT ON Usuario
FOR EACH ROW 
BEGIN
INSERT INTO DatosUsuario(idDatosUsuario,usuario, claveUsuario) VALUES
('', (CONCAT(SUBSTRING(NEW.nombreUsuario, 1,2), SUBSTRING(NEW.apellidoUsuario, 1,2))), 
(REPLACE(NEW.fechaNacimiento, '-', '')));
END $$
DELIMITER ;

INSERT INTO Usuario VALUES ('',"Sandra","Mojica","SAM2005","sandra@gmail.com",'2001/04/10',1001577863,1,3,1);
SELECT 
    *
FROM
    DatosUsuario;
/*Crear una tabla para almacenar las contraseñas cambiadas*/
Create table Log_Usuario (
    idLogUsuario int AUTO_INCREMENT primary key,
    NombreUsuario varchar(50),
    passwordAntigua varchar(20),
    passwordNueva varchar(20),
    FechaCambio date
);
DELIMITER $$
CREATE TRIGGER cambiarContraseñaUsuario AFTER UPDATE ON Usuario
FOR EACH ROW 
BEGIN
INSERT INTO Log_Usuario (idLogUsuario,NombreUsuario,passwordAntigua,passwordNueva,FechaCambio)VALUES 
(null,(CONCAT(SUBSTRING(NEW.nombreUsuario, 1,2), SUBSTRING(NEW.apellidoUsuario, 1,2))), OLD.contraseñaUsuario, NEW.contraseñaUsuario, NOW());
END $$
DELIMITER ;
UPDATE Usuario 
SET 
    contraseñaUsuario = 'santiago1520'
WHERE
    idUsuario = 1;
select 
    *
from
    Log_Usuario;
/*Proceso para el cambio de la contraseña*/
DELIMITER $$
CREATE TRIGGER contraseñaUsuario AFTER UPDATE ON DatosUsuario
FOR EACH ROW 
BEGIN
INSERT INTO Log_Usuario VALUES 
(null,(NEW.usuario), (OLD.claveUsuario), (NEW.claveUsuario), NOW());
END $$
DELIMITER ;
UPDATE DatosUsuario 
SET 
    claveUsuario = 'cris1860'
WHERE
    idDatosUsuario = 1;
/*Trigger para asignar tipos de usuario*/
drop TRIGGER AsignarTipoU;
DELIMITER $$
CREATE TRIGGER AsignarTipoU AFTER INSERT ON Usuario
FOR EACH ROW 
BEGIN
INSERT INTO PerfilUsuario_Usuario(idPerfilUsuario,idUsuario, fechaRegistro,estadoRol) VALUES
(1,1,'',1);
END $$
DELIMITER ;
INSERT INTO Usuario VALUES ('','Brayan','Cortes','1256BC','BrayanCortes@gmail.com','1975/01/18',65788056,1,1,2);

/*Trigger para que los pedidos generen una venta*/


SELECT 
    *
FROM
    PerfilUsuario_Usuario;
SELECT 
    *
FROM
    Usuario;
SELECT 
    *
FROM
    negocio
        INNER JOIN
    barrio ON negocio.idBarrio = barrio.idBarrio;

select 
    *
from
    Barrio;
select 
    *
from
    Localidad;

/*CREATE TABLE ReporteUsuariosInactivos (
    idReporteUsuario int AUTO_INCREMENT primary key,
    fechaReporteUsuario date,
    idUsuario int
);
ALTER TABLE ReporteUsuariosInactivos ADD CONSTRAINT idUsuarioFKR  FOREIGN KEY (idUsuario) REFERENCES Usuario (idUsuario);
DELIMITER $$
CREATE PROCEDURE GenerarReporteUsuariosInactivos
()
BEGIN
INSERT INTO ReporteUsuariosInactivos (fechaReporteUsuario,idUsuario) SELECT NOW() AS 'Fecha Reporte', idUsuario AS 'Codigo Usuario' 
FROM Usuario WHERE estadoUsuario = 0 OR estadoUsuario IS NULL;
END $$
DELIMITER ;

ALTER TABLE usuario DROP FOREIGN KEY idPerfilUsuarioFK1*/