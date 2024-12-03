-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/12/2024 às 05:25
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `techwarejp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `foto` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `nome`, `preco`, `descricao`, `foto`) VALUES
(2, 'Samsung T350 - Monitor Gamer, 24\", FHD, 75Hz, HDMI, VGA, Fre', 539.90, '', 'assets/photos/products/monitor1.png'),
(3, 'Monitor para PC Full HD UltraWide LG LED IPS 29” - 29WK600, ', 478.45, '', 'assets/photos/products/monitor2.png'),
(4, 'Mouse Gamer Sem Fio Logitech G703 LIGHTSPEED com RGB LIGHTSY', 124.45, '', 'assets/photos/products/mouse1.png'),
(5, ' Teclado HyperX Alloy Origins PBT Red BLACK', 247.25, '', 'assets/photos/products/teclado1.png'),
(6, 'JBL, Fone de Ouvido Sem Fio, Tune Buds, Bluetooth 5.3', 143.99, '', 'assets/photos/products/fone1.png'),
(7, 'Pc Gamer Computador Cpu Intel I5 HD 1TB Memoria Ram 16GB', 2420.99, '', 'assets/photos/products/cpu2.png'),
(8, 'Teclado Gamer Rise Mode G1 Full, Rgb Rainbow, USB', 420.99, '', 'assets/photos/products/teclado2.png'),
(9, 'Pc Gamer Intel Core I7 6700 SSD 1TB 32GB RAM', 1290.99, '', 'assets/photos/products/cpu1.png'),
(10, 'Cadeira Gamer Ninja Hiryu, Preto e Vermelho', 349.90, '', 'assets/photos/products/cadeira2.png'),
(11, 'Cadeira Gamer Colorida, Preto, Vermelho, Verde e Amarelo', 400.90, '', 'assets/photos/products/cadeira1.png'),
(12, 'Cadeira Gamer Vermelha, Confortavel', 520.99, '', 'assets/photos/products/cadeira3.png'),
(13, 'Controle Gamer Preto, Bluetooth, Bateria e USB', 99.99, '', 'assets/photos/products/controle.png'),
(14, 'Mesa Gamer, Tamanho Pequeno, Feita de Madeira', 599.99, '', 'assets/photos/products/mesa1.png'),
(15, 'Mesa Gamer e Cadeira Gamer, Tamanho Pequeno, Minimalista', 999.99, '', 'assets/photos/products/mesacadeira1.png'),
(16, 'Controle Gamer, Preto, Com Carregador', 199.99, '', 'assets/photos/products/controle1.png'),
(17, 'PC Gamer Completo, Teclado, Mouse, CPU i7, 16 RAM', 2199.99, '', 'assets/photos/products/pc.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sac`
--

CREATE TABLE `sac` (
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mensagem` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sac`
--

INSERT INTO `sac` (`nome`, `email`, `mensagem`) VALUES
('teste', 'teste@teste.com', 'teste'),
('teste2', 'teste2@teste.com', 'teste2'),
('teste3', 'teste3@teste.com', 'teste3'),
('teste4', 'teste4@gmail.com', 'teste4');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `senha` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`idUser`, `nome`, `email`, `tel`, `cpf`, `cep`, `endereco`, `senha`) VALUES
(3, 'teste', 'teste@gmail.com', '00000000000', '000.000.000', '44444444', 'aaaaaaaaaaaa', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
