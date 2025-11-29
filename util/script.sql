CREATE DATABASE projects_level
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

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
    nivel_de_acesso ENUM('Administrador', 'Funcionário', 'Cliente') NOT NULL, -- tipo de usuário
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);



CREATE TABLE produtos (

  id_produto BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- identificador único
    nome VARCHAR(255) NOT NULL, -- nome completo do usuário
    comprovante VARCHAR(14), -- CPF no formato 000.000.000-00
	contato varchar(20), -- data no formato yyyy-mm-dd
    data_entrega DATE, -- data no formato yyyy-mm-dd
    cpf VARCHAR(20), -- nome da rua
    tamanho_produto ENUM ('admin', 'medio', 'pequeno') NOT NULL, -- número da residência

    cep VARCHAR(255), -- bairro
    endereco VARCHAR(255), -- cidade
    numero VARCHAR(10), -- CEP
    complemento VARCHAR(255), 
    cidade VARCHAR(255) NOT NULL, -- e-mail válido    
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);

DELETE FROM produtos
WHERE id_produto = 9
