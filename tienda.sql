create database tienda;

use tienda;

create table adminis
(
	usuadmin varchar(50),
    conadmin varchar(50)
);

create table producto
(
	idpro int auto_increment primary key,
    nompro varchar(50),
    catepro varchar(50),
    precipro float,
    imagen varchar(100)
);

insert into adminis (usuadmin, conadmin) values ("admin","admin123"); 

insert into producto (nompro, catepro, precipro, imagen) values ("Papel Higinico","Higiene Personal", 10.00, "img/papelhigienico.jfif");

