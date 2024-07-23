#exer1
CREATE DATABASE IFSP;

#exer2
USE IFSP;

CREATE TABLE Cidade (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    estado CHAR(2)
);

CREATE TABLE Cliente (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(100),
    ativo BOOL,
    cidade_id INT,
    FOREIGN KEY (cidade_id) REFERENCES Cidade(id)
);

#exer3
INSERT INTO Cidade (nome, estado) VALUES
('São Paulo', 'SP'),
('Campinas', 'SP'),
('São José dos Campos', 'SP'),
('Ribeirão Preto', 'SP'),
('Santos', 'SP');

#exer4
SELECT * FROM Cidade WHERE estado = 'SP';

#exer5
INSERT INTO Cliente (nome, email, senha, cidade_id) VALUES
('João Silva', 'joão@gmail.com', '123', 1),     -- Cidade com id = 1 é São Paulo
('Maria Souza', 'maria@gamail.com', '321', 2),    -- Cidade com id = 2 é Campinas
('Carlos Oliveira', 'carlos@gmail.com', '432', 3),-- Cidade com id = 3 é São José dos Campos
('Ana Pereira', 'ana@gmail.com', '234', 1),    -- Cidade com id = 1 é São Paulo
('Pedro Santos', 'pedro@gmail.com', '213', 5);   -- Cidade com id = 5 é Santos

#exer6
SELECT * FROM Cliente WHERE cidade_id = 1;

#exer7
UPDATE Cidade SET nome = 'Bauru' WHERE id = 1;

#exer8
UPDATE Cliente SET nome = 'Cássio Sters' WHERE id = 1;

#exer9
DELETE FROM Cidade WHERE id = 4;

#exer10
DELETE FROM Cliente WHERE id = 1;