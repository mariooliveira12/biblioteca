create database bibliotecaWRA;

use bibliotecaWRA;

create table bibliotecario(
CPF varchar(20) primary key,
email varchar(50) not null,
telefone varchar(20) not null,
senha varchar(20) not null
);

create table aluno(
nome varchar(50) not null,
email varchar(40),
telefone varchar(20) not null,
senha varchar(20) not null,
primary key(email));

create table livro(
id int primary key auto_increment,
titulo varchar(45) not null unique,
numero_copia varchar(45) not null,
autor varchar(45) not null,
estado_livro varchar(45) not null,
condicao_livro varchar(45) not null
);

create table emprestimo(
id int primary key auto_increment,
nome_aluno varchar(45) not null,
data_emprestimo varchar(20) not null,
titulo_livro varchar(45) not null
);

create table reserva(
id int primary key auto_increment,
nome_livro varchar(45) not null,
nome_aluno varchar(45) not null,
aluno_fila int not null
);

select * from bibliotecario;

select * from aluno;

select * from livro;

select * from emprestimo;

select * from reserva;

truncate table reserva;
