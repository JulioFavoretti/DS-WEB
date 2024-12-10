-- Criando o DATABASE da florecultura.
CREATE DATABASE Floricultura
CHARACTER SET utf8
COLLATE utf8_general_ci;


-- Criando as TABLES do DATABASE.
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,   
    nome VARCHAR(100),
    email VARCHAR(255),
    senha VARCHAR(255)
);

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,   
    nome VARCHAR(100),
    descricao TEXT,
    preco DECIMAL(10,2)
);

-- Adicionando o primeiro valor a tabela usuarios
INSERT INTO usuarios(nome, email, senha)
VALUES('Julio', 'Julio@Julio', 123);

