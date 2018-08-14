-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE continente (
nome varchar(100),
id_continente int auto_increment PRIMARY KEY
);

CREATE TABLE pais (
id_pais int auto_increment PRIMARY KEY,
nome varchar(100),
id_continente int,
FOREIGN KEY(id_continente) REFERENCES continente (id_continente)
);

CREATE TABLE ponto_turistico (
hora_inicio time,
meia_entrada varchar(20),
id_pt int auto_increment PRIMARY KEY,
hora_fim time,
id_local int
);

CREATE TABLE hospedagem (
id_hospedagem int auto_increment PRIMARY KEY,
tipo_hospedagem varchar(20),
site varchar(100),
id_local int
);

CREATE TABLE restaurante (
id_restaurante int auto_increment PRIMARY KEY,
hora_inicio time,
hora_fim time,
cardapio varchar(20),
id_local int
);

CREATE TABLE usuario (
nome varchar(100),
email varchar(100),
senha varchar(20),
data_nascimento date,
tipo_user varchar(20),
id_usuario int auto_increment PRIMARY KEY
);

CREATE TABLE cidade (
nome varchar(100),
id_cidade int auto_increment PRIMARY KEY,
id_pais int,
FOREIGN KEY(id_pais) REFERENCES pais (id_pais)
);

CREATE TABLE locais (
id_local int auto_increment PRIMARY KEY,
nome varchar(100),
endereco varchar(200),
valor varchar(20),
id_cidade int,
FOREIGN KEY(id_cidade) REFERENCES cidade (id_cidade)
);

CREATE TABLE transporte (
id_transporte int auto_increment PRIMARY KEY,
tipo_transporte varchar(20),
id_local int,
FOREIGN KEY(id_local) REFERENCES locais (id_local)
);

CREATE TABLE dica (
id_usuario int,
id_pais int,
idioma varchar(100),
bagagem varchar(100),
documentacao varchar(100),
custo varchar(100),
id_dica int auto_increment PRIMARY KEY,
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario),
FOREIGN KEY(id_pais) REFERENCES pais (id_pais)
);

CREATE TABLE avaliacao_locais (
id_usuario int,
id_local int,
nota varchar(20),
id_avaliacao int auto_increment PRIMARY KEY,
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario),
FOREIGN KEY(id_local) REFERENCES locais (id_local)
);

CREATE TABLE cadastro_locais (
id_local int,
id_usuario int,
FOREIGN KEY(id_local) REFERENCES locais (id_local),
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario)
);

ALTER TABLE ponto_turistico ADD FOREIGN KEY(id_local) REFERENCES locais (id_local);
ALTER TABLE hospedagem ADD FOREIGN KEY(id_local) REFERENCES locais (id_local);
ALTER TABLE restaurante ADD FOREIGN KEY(id_local) REFERENCES locais (id_local);
