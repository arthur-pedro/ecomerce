-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 28-Ago-2018 às 01:30
-- Versão do servidor: 5.7.23-log
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `nome_cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_pedido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `itens_pedido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total_pagar` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `nome_cliente`, `email_cliente`, `descricao_pedido`, `itens_pedido`, `total_pagar`) VALUES
(9, 'Arthur Pedro', 'a.santos@netmake.com.br', 'Gostaria de saber sobre...', 'Banner, Vetorização, Ilustração', 460),
(10, 'arthur', 'arthurpedroweb@gmail.com', 'teste', 'Banner', 200),
(11, 'arthur', 'arthurpedroweb@gmail.com', 'teste', 'Banner', 200),
(13, 's', 's', 's', 'Banner', 200),
(14, 'ss', 'ss', 'ss', 'Banner', 200),
(15, 'ss', 'ss', 'ss', 'Banner', 200),
(16, 'sad', 'asda', 'as', 'Banner', 200),
(17, 'sda', 'das', 'as', 'Ilustração', 130),
(18, 'dsaa', 'a', 'a', 'Ilustração', 130);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `preco` double NOT NULL,
  `descricao` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `preco`, `descricao`) VALUES
(1, 'Banner', 200, 'Criação de banners personalizados para seu negócio'),
(2, 'Cartão visita', 180, 'Criação ou personalizaão de Cartões Visita'),
(3, 'Vetorização', 130, 'Vetorização de imagens pre existentes ou novas ilustrações'),
(4, 'Ilustração', 130, 'Ilustrações avulsas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha_usuario` text COLLATE utf8_unicode_ci NOT NULL,
  `adm` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `adm`) VALUES
(1, 'admin', 'arthurpedroweb@gmail.com', 'admin', 'true'),
(6, 'pedro', 'arthurpedro@gmail.com', '310896', ''),
(45, 'arthurpedro', 'teste@gmail.com', '12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nome_usuario` (`nome_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
