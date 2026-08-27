CREATE DATABASE matheus_ifood;
USE matheus_ifood;

CREATE TABLE clientes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(15),
    endereco VARCHAR(255)
);

CREATE TABLE restaurantes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(255),
    telefone VARCHAR(15),
    categoria VARCHAR(50)
);

CREATE TABLE pedidos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    cliente_id INT,
    restaurante_id INT,
    valor_pedido DECIMAL(10, 2) NOT NULL,
    data_pedido DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pendente', 'em andamento', 'entregue', 'cancelado') DEFAULT 'pendente',
    FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY (restaurante_id) REFERENCES restaurante(id)
);