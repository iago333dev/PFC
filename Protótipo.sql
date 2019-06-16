create database prototipo;

use prototipo;

create table usuario(
	id_usuario int not null primary key auto_increment,
    usuario varchar(200) not null,
    senha varchar(32) not null
);

create table usuario2(
	id_usuario_2 int not null primary key auto_increment,
    fk_usuario_login int not null,
    nome varchar(250) not null,
    cpf varchar(20) not null,
	constraint foreign key (fk_usuario_login) references usuario(id_usuario)
);

create table endereco(
	id_endereco int not null primary key auto_increment,
    fk_usuario int not null,
    fk_usuario_2 int not null,
    endereco varchar(250) not null,
    numero int not null,
    complemento varchar(250) not null,
    uf varchar(2) not null,
    cep varchar(9) not null,
    pais varchar(20) not null,
    constraint fk_usuario foreign key (id_usuario) references usuario(id_usuario),
    constraint fk_usuario_2 foreign key (id_usuario_2) references usuario2(id_usuario_2)
);

insert into usuario (usuario, senha) values ('administrador', md5('administrador'));

select * from usuario;

drop database prototipo;