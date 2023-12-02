CREATE DATABASE GiftWish;
USE GiftWish;

CREATE table item(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome CHAR(50) NOT NULL,
    descricao TEXT NOT NULL,
    categoria CHAR(50) NOT NULL,
    nivel_desejo CHAR(10) NOT NULL,
    media_preco DECIMAL(10,2) NOT NULL
)