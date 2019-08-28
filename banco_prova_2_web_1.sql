CREATE DATABASE carlos_prova_2_web_1;

\c carlos_prova_2_web_1
SET datestyle TO "ISO, DMY";

CREATE TABLE usuarios (
    idusuario serial primary key not null,
    usuario VARCHAR(120),
    senha char(14)
);

CREATE TABLE clientes (
    idcliente serial primary key not null,
    nome varchar(120),
    cpf char(14),
    rg varchar(20),
    telefone varchar(20),
    email varchar(120)
);

CREATE TABLE categorias (
    idcategoria serial primary key not null,
    tipo varchar(120),
    descricao varchar(120)
);

CREATE TABLE servicos (
    idservico serial primary key not null,
    idcliente integer,
    idcategoria integer,
    foreign key(idcliente) references clientes(idcliente),
    foreign key(idcategoria) references categorias(idcategoria)
);

INSERT INTO clientes(nome,cpf,rg,telefone,email) VALUES('CARLOS','00571378110','14433656','6536755005','ramon.ethan@gmail.com');
INSERT INTO clientes(nome,cpf,rg,telefone,email) VALUES('LUCAS','12345678901234','1234567','6536755005','lucaskate69@hotmail.com');
INSERT INTO clientes(nome,cpf,rg,telefone,email) VALUES('MACCIELY','73042501191','1234567','6536755005','maccielysilvasandoval@gmail.com');
INSERT INTO clientes(nome,cpf,rg,telefone,email) VALUES('RAMON','123123123','123123','546452342','email@email.com');

INSERT INTO categorias(tipo,descricao) VALUES('LIVRO2','LIVRO TESTE 02');
INSERT INTO categorias(tipo,descricao) VALUES('LIVRO1','LIVRO TESTE 01');
INSERT INTO categorias(tipo,descricao) VALUES('LIVRO3','LIVRO TESTE 03');
INSERT INTO categorias(tipo,descricao) VALUES('LIVRO4','LIVRO TESTE 04');

INSERT INTO servicos(idcliente,idcategoria) VALUES(1,1);
INSERT INTO servicos(idcliente,idcategoria) VALUES(2,2);
INSERT INTO servicos(idcliente,idcategoria) VALUES(3,3);
INSERT INTO servicos(idcliente,idcategoria) VALUES(4,4);
INSERT INTO servicos(idcliente,idcategoria) VALUES(1,3);
INSERT INTO servicos(idcliente,idcategoria) VALUES(2,2);
INSERT INTO servicos(idcliente,idcategoria) VALUES(3,1);
INSERT INTO servicos(idcliente,idcategoria) VALUES(4,2);
INSERT INTO servicos(idcliente,idcategoria) VALUES(1,3);

INSERT INTO usuarios(usuario,senha) VALUES('jivago','senha');