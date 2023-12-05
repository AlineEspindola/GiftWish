-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 04-Dez-2023 às 22:36
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `giftwish`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `nome` char(50) NOT NULL,
  `descricao` text NOT NULL,
  `categoria` char(50) NOT NULL,
  `nivel_desejo` char(10) NOT NULL,
  `media_preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`id`, `nome`, `descricao`, `categoria`, `nivel_desejo`, `media_preco`) VALUES
(1, 'Caderno', 'Gostaria de um caderno de 20 matérias para eu começar as aulas semana que vem, de preferência de capa de cor rosa', 'Material Escolar', 'Médio', '50.00'),
(2, 'PC', 'Meu atual computador esta com defeito, portanto, necessito  de um novo, desde que seja da Dell', 'Eletrônico', 'Alto', '2000.00'),
(3, 'Mouse', 'Um mouse bluetooth com leds é o que falta para meu maravilhoso setup gamer. Gostaria de fosse branco, para combinar ainda mais com o meu setup', 'Eletrônico', 'Alto', '200.00'),
(4, 'Sapato', 'Urgente, para o evento que acontecerá nesse fim de semana,que é uma festa formal', 'Vestuário', 'Médio', '200.00'),
(5, 'Guarani', 'Eu gosto muito desse tipo de romance. Gostaria de aumentar minha coleção de livros desta categoria', 'Livro', 'Médio', '30.00'),
(6, 'Monitor', 'Só falta para meu setup um monitor. Pode ser qualquer tamanho', 'Eletrônico', 'Médio', '200.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `item`
--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;