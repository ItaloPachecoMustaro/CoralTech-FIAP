-- Cria o banco de dados
CREATE DATABASE coraltech;

-- Usa o banco de dados
USE coraltech;

-- Cria a tabela users
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    perfil VARCHAR(20) NOT NULL
);
