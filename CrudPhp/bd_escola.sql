create database bd_escola;
use bd_escola;
create table aluno(id int primary key auto_increment not null ,
nome varchar(50) not null ,
email varchar(50) not null,
sexo varchar(9) not null,
endereco varchar(50) not null,
num  int not null,
complemento varchar(50) not null,
bairro varchar(50) not null,
cidade varchar(50) not null,
uf varchar(2) not null,
modalidade varchar(50) not null );
drop table aluno;
