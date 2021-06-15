-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2021 às 21:08
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
CREATE DATABASE IF NOT EXISTS `pescaria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pescaria`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `peixe`
--

DROP TABLE IF EXISTS `peixe`;
CREATE TABLE `peixe` (
  `id` int(11) NOT NULL,
  `tipoPeixe` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `isca` varchar(25) NOT NULL,
  `peso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `peixe`
--

INSERT INTO `peixe` (`id`, `tipoPeixe`, `nome`, `isca`, `peso`) VALUES
(1, 1, 'pacu', 'milho', 3),
(2, 2, 'pintado', 'minhoca', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pescador`
--

DROP TABLE IF EXISTS `pescador`;
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
(2, 'Filipe Alves ', 'Candido Mota', 'SP', 29);

-- --------------------------------------------------------

--
-- Estrutura da tabela `premiacao`
--

DROP TABLE IF EXISTS `premiacao`;
CREATE TABLE `premiacao` (
  `id` int(11) NOT NULL,
  `colocacao` int(11) NOT NULL,
  `premiacao` varchar(35) NOT NULL,
  `peixe` int(11) NOT NULL,
  `pescador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `premiacao`
--

INSERT INTO `premiacao` (`id`, `colocacao`, `premiacao`, `peixe`, `pescador`) VALUES
(1, 1, 'carro', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

DROP TABLE IF EXISTS `tipo`;
CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `descricao`) VALUES
(1, 'escama'),
(2, 'couro');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `peixe`
--
ALTER TABLE `peixe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peixe_tipopeixe` (`tipoPeixe`);

--
-- Índices para tabela `pescador`
--
ALTER TABLE `pescador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `premiacao`
--
ALTER TABLE `premiacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pescador_premiacao` (`pescador`),
  ADD KEY `peixe_premiacao` (`peixe`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `peixe`
--
ALTER TABLE `peixe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pescador`
--
ALTER TABLE `pescador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `premiacao`
--
ALTER TABLE `premiacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `peixe`
--
ALTER TABLE `peixe`
  ADD CONSTRAINT `peixe_tipopeixe` FOREIGN KEY (`tipoPeixe`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `premiacao`
--
ALTER TABLE `premiacao`
  ADD CONSTRAINT `peixe_premiacao` FOREIGN KEY (`peixe`) REFERENCES `peixe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pescador_premiacao` FOREIGN KEY (`pescador`) REFERENCES `pescador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
