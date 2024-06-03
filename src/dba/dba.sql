create database dengue;

use dengue;

create table cadastro (
    id_cadastro INT PRIMARY KEY AUTO_INCREMENT,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    sexo VARCHAR(1) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    nacionalidade VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    dia date NOT NULL       
);
create table denuncia (
    id_denuncia INT PRIMARY KEY AUTO_INCREMENT,
    envolvido VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    funcao VARCHAR(100) NOT NULL,
    destino VARCHAR(255) NOT NULL,
    uf CHAR(2) NOT NULL,
    municipio VARCHAR(50) NOT NULL,
    localidade VARCHAR(100) NOT NULL,
    organizacao VARCHAR(100) NOT NULL,
    descricao VARCHAR(100) NOT NULL,
    id_cadastro INT,
    FOREIGN KEY (id_cadastro) REFERENCES cadastro(id_cadastro)
    
);

create table usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    sintomas VARCHAR(150) NOT NULL,
    gestacao VARCHAR(150) NOT NULL,
    gravidez CHAR(100) NOT NULL,
    id_adm INT,
    FOREIGN KEY (id_adm) REFERENCES adm(id_adm)
    );

create table adm (
    id_adm INT PRIMARY KEY AUTO_INCREMENT,
    imagem MEDIUMBLOB NOT NULL,
    noticia TEXT NOT NULL,
    id_cadastro INT,
    FOREIGN KEY (id_cadastro) REFERENCES cadastro(id_cadastro)
);

create table avaliacao (
    id_avaliacao INT PRIMARY KEY AUTO_INCREMENT,
    avaliacaos VARCHAR(100) NOT NULL,
    id_adm INT,
    FOREIGN KEY (id_adm) REFERENCES adm(id_adm)

);