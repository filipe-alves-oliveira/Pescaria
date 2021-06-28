-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2021 às 01:46
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pescaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `peixe`
--

CREATE TABLE `peixe` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `isca` varchar(25) NOT NULL,
  `peso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `peixe`
--

INSERT INTO `peixe` (`id`, `nome`, `isca`, `peso`) VALUES
(14, 'pacu', 'minhoca', 6),
(15, 'pacu', 'minhoca', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pescador`
--

CREATE TABLE `pescador` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `idade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pescador`
--

INSERT INTO `pescador` (`id`, `nome`, `cidade`, `estado`, `idade`) VALUES
(31, 'roberto', 'assis', '', 3),
(33, 'pacu', 'assis', 'sp', 2),
(34, 'roberto', 'assis', 'sp', 2),
(35, 'roberto', 'assis', 'sp', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `premiacao`
--

CREATE TABLE `premiacao` (
  `id` int(11) NOT NULL,
  `colocacao` int(11) NOT NULL,
  `pescador` varchar(35) NOT NULL,
  `premio` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `premiacao`
--

INSERT INTO `premiacao` (`id`, `colocacao`, `pescador`, `premio`) VALUES
(6, 0, 'alcir', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `especie` varchar(35) NOT NULL,
  `outros` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `descricao`, `especie`, `outros`) VALUES
(4, 'escama', 'peixe', 'grande'),
(5, 'escama', 'peixe', 'grande'),
(6, 'escama', 'peixe', 'grande'),
(7, 'escama', 'peixe', 'grande'),
(8, 'escama', 'peixe', 'grande'),
(9, 'hj,', 'peixe', 'grande'),
(10, 'escama', 'peixe', 'grande'),
(11, 'escama', 'peixe', 'grande'),
(12, 'escama', 'peixe', 'grande'),
(13, 'escama', 'peixe', 'grande'),
(14, 'escama', 'peixe', 'grande'),
(15, 'escama', 'peixe', 'grande'),
(16, 'escama', 'peixe', 'grande'),
(17, 'escama', 'peixe', 'grande'),
(18, 'escama', 'peixe', 'grande');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `nome`) VALUES
(1, 'filipe', '202cb962ac59075b964b07152d234b70', 'Filipe Alves ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `peixe`
--
ALTER TABLE `peixe`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pescador`
--
ALTER TABLE `pescador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `premiacao`
--
ALTER TABLE `premiacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `peixe`
--
ALTER TABLE `peixe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `pescador`
--
ALTER TABLE `pescador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `premiacao`
--
ALTER TABLE `premiacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
