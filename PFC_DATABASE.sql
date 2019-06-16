
-- USUARIO É NOSSO CLIENTE
drop database pfc;

create database pfc;
use pfc;

create table login(
	id int not null primary key auto_increment,
    login varchar(200) not null,
    senha varchar(200) not null,
    tipo enum ('1', '2', '3', '4') not null -- 1 = prioridade máxima, 2 - Usuário, 3 - Funcionario, 4 - Cliente
);

create table usuario (
id int not null primary key auto_increment,
id_login int not null,
nome varchar(250),
data_nascimet date,
cpf varchar(11) not null unique,
email varchar(250),
sexo enum('Masculino','Feminino','Outros'),
constraint foreign key (id_login) references login(id)	
);

create table funcionario (
id int not null primary key auto_increment,
id_login int not null,
nome varchar(250),
data_nascimet date,
cpf varchar(11) not null unique,
email varchar(250),
sexo enum('Masculino','Feminino','Outros'),
constraint foreign key (id_login) references login(id)	
);

create table cliente (
id int not null primary key auto_increment,
id_login int not null,
nome varchar(250),
data_nascimet date,
cpf varchar(11) not null unique,
email varchar(250),
sexo enum('Masculino','Feminino','Outros'),
constraint foreign key (id_login) references login(id)	
);

create table endereço (
id_user int,
id_func int,
id_client int,
rua varchar(250),
numero int,
cep varchar(9),
uf varchar(2),
bairro varchar(250),
pais varchar(30),
constraint foreign key (id_user) references usuario(id),
constraint foreign key (id_func) references funcionario(id),
constraint foreign key (id_client) references cliente(id)
);

call login();

-- nome,marca,categoria,datavalidade,dataentrada,precofabric,precovend,quantid,id

create table produto(
id int not null primary key auto_increment,
marca varchar(250),
categoria varchar(100),
validade date,
entrada timestamp,
preco_fabrica decimal(7,3),
preco_venda decimal(7,3),
quant int,
nome varchar(250)
);

insert into login (login, senha, tipo) values ('Adm', md5('adm'), '1');

-- PROCEDIMENTO PARA BUSCA DE USUARIOS AO BANCO PARA O LOGIN.
-- A TABELA 'ACCOUNT_TYPE' DETERMINA TIPO DE CONTA, CRITERIO PARA O SISTEMA DEFINIR TIPO DE USUARIO

DROP procedure IF EXISTS `login`;
DELIMITER $$
USE `pfc`$$
CREATE PROCEDURE `login` ()
BEGIN

select 'USER' as 'ACCOUNT_TYPE', login as 'usuario_login',senha as 'usuario_senha' from usuario;
select 'FUNCTIONARY' as 'ACCOUNT_TYPE', login as 'funcionario_login',senha as 'funcionario_senha' from funcionario;
select 'CLIENT' as 'ACCOUNT_TYPE', login as 'cliente_login',senha as 'cliente_senha' from cliente;

END$$

DELIMITER ;x


