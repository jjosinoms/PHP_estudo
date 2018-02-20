create database if not exists dbcliente;
use dbcliente;
drop table if exists cliente;
create table cliente(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
	cpf varchar(255) not null,
	nome varchar(255) not null,
	endereco varchar(255) not null,
	telefone varchar(255) not null,
	email varchar(255) not null
);

use dbcliente;
drop table if exists usuario;
create table usuario(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
	login varchar(255) not null,
	senha varchar(255) not null
	
);

insert into usuario values (null,'admin','123');
insert into usuario values (null,'maria','456');