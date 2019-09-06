CREATE DATABASE carlos3;

\c carlos3

CREATE TABLE usuarios (
    id serial primary key not null,
    usuario varchar(120),
    senha varchar(220),
    nome varchar(120)
);

INSERT INTO usuarios(usuario,nome,senha) VALUES('admin','jivago','21232f297a57a5a743894a0e4a801fc3'); -- senha admin
