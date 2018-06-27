create database abradi;

use abradi;

create table tipo_usuario (
id int NOT NULL AUTO_INCREMENT,
descricao varchar(50) not null,
PRIMARY KEY (id)
);

create table usuario (
id int NOT NULL AUTO_INCREMENT,
nome char(50) not null,
idade int(3) not null,
email char(50) not null,
senha char(50) not null,
id_tipo_usuario int not null,
PRIMARY KEY(id),
FOREIGN KEY (id_tipo_usuario) REFERENCES tipo_usuario(id)
);

