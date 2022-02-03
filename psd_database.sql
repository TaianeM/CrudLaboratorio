create database pds;

use pds;

create table tab_laboratorio(
	laboratorio varchar(15),
    capacidade decimal (2,0),
    tipo varchar(15),
    chavelab int not null auto_increment,
    primary key(chavelab)
);

create table tab_servidor(
	nomeservidor varchar(15),
    email varchar(20),
    siape char(8) not null,
    primary key(siape)
);

