CREATE DATABASE projects_level
CHARACTER SET uftmb4
COLLATE uftmb4_unicode_ci;

USE projects_level; 

CREATE TABLE usuarios (
    id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- identificador único
    nome VARCHAR(255) NOT NULL, -- nome completo do usuário
    cpf VARCHAR(14), -- CPF no formato 000.000.000-00
    data_nascimento DATE, -- data no formato yyyy-mm-dd
    celular VARCHAR(20), -- celular com DDD
    rua VARCHAR(255), -- nome da rua
    numero VARCHAR(10), -- número da residência

    bairro VARCHAR(255), -- bairro
    cidade VARCHAR(255), -- cidade
    cep VARCHAR(10), -- CEP
    estado CHAR(2), -- estado (ex: SP, RJ)
    email VARCHAR(255) NOT NULL, -- e-mail válido    
    nivel_acesso ENUM('Administrador', 'Funcionário', 'Cliente') NOT NULL, -- tipo de usuário
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);


CREATE TABLE produtos (

  id_produto BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- identificador único
    nome VARCHAR(255) NOT NULL, -- nome completo do usuário
    cpf VARCHAR(14), -- CPF no formato 000.000.000-00
    data_nascimento DATE, -- data no formato yyyy-mm-dd
    celular VARCHAR(20), -- celular com DDD
    rua VARCHAR(255), -- nome da rua
    numero VARCHAR(10), -- número da residência

    bairro VARCHAR(255), -- bairro
    cidade VARCHAR(255), -- cidade
    cep VARCHAR(10), -- CEP
    estado CHAR(2), -- estado (ex: SP, RJ)
    email VARCHAR(255) NOT NULL, -- e-mail válido    
    nivel_acesso ENUM('Administrador', 'Funcionário', 'Cliente') NOT NULL, -- tipo de usuário
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);

INSERT INTO produtos 
(nome, cpf, data_nascimento, celular, rua, numero, bairro, cidade, cep, estado, email, nivel_acesso)
VALUES
('agua com gaz chainsaw man', '123.456.789-01', '1990-03-15', '(11) 98765-4321', 'Rua das Flores', '120', 'Centro', 'São Paulo', '01001-000', 'SP', 'ana.silva@gmail.com', 'Cliente');