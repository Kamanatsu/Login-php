-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/05/2024 às 05:35
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
-- Banco de dados: `onibus`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_em_analise`
--

CREATE TABLE `cadastro_em_analise` (
  `nome` varchar(255) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `turno` varchar(200) NOT NULL,
  `cidade_estuda` varchar(100) NOT NULL,
  `parada` varchar(255) NOT NULL,
  `subida` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `onibus`
--

CREATE TABLE `onibus` (
  `cod_bus` int(12) NOT NULL,
  `rota` varchar(255) NOT NULL,
  `n_assentos` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(255) NOT NULL,
  `assento_escolhido` int(11) DEFAULT NULL,
  `cpf` bigint(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `turno` varchar(200) NOT NULL,
  `cidade_estuda` varchar(100) NOT NULL,
  `parada` varchar(255) NOT NULL,
  `subida` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `onibus`
--
ALTER TABLE `onibus`
  ADD PRIMARY KEY (`cod_bus`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `onibus`
--
ALTER TABLE `onibus`
  MODIFY `cod_bus` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
