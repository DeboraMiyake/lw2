create database cadastro;
use cadastro;

CREATE TABLE usuario(
	nome VARCHAR(80) NOT NULL,
    senha CHAR(15) NOT NULL,
    confirmacao CHAR(15) NOT NULL,
    email VARCHAR(80) PRIMARY KEY NOT NULL,
	cpf CHAR(11) NOT NULL,
    rg CHAR(9) NOT NULL,
    endereco VARCHAR(80) NOT NULL,
    numero VARCHAR(6) NOT NULL,
    cep VARCHAR(8) NOT NULL,
    cidade VARCHAR(45) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    telefone CHAR(9));
