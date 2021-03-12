-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Dez-2020 às 02:17
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charffbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `login` varchar(5) DEFAULT NULL,
  `senha` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`login`, `senha`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nomeProd` varchar(55) DEFAULT NULL,
  `codProd` int(10) NOT NULL,
  `descricaoProd` varchar(60) DEFAULT NULL,
  `precoProd` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nomeProd`, `codProd`, `descricaoProd`, `precoProd`) VALUES
('Bola Futebol Adidas Finale UCL20', 1, 'Bola oficial Adidas, para jogos de campo e treino', 'R$200'),
('Luvas de Goleiro NikeAX158', 2, 'Luvas de Goleiro oficial Nike, alta qualidade.', 'R$99,99'),
('Kit 10 Bolas de Ping-Pong', 3, 'Kit 10 bolas de tênis de mesa nº4, cor branca ou laranja.', 'R$39,99'),
('Bola Basquete Spalding Fastbreak NBA7', 4, 'Bola oficial Spalding, costura de altíssima qualidade.', 'R$149,99'),
('Saco de Pancadas Gorilla + Suporte + 2 Luvas', 5, 'Kit com saco de pancadas 1m + suporte + 2 luvas.', 'R$249,99'),
('Camisa Flamengo 2019/2020 OFicial', 6, 'Camisa do Flamengo (temporada 19/20) oficial.', 'R$149,99'),
('Camisa Inter de Milão 2018/2019 Oficial', 7, 'Camisa da Inter de Milão (temporada 18/19) oficial.', 'R$179,99'),
('Chuteiras Nike Mercurial RX2000', 8, 'Chuteiras Nike Mercurial, modelo branco e azul.', 'R$199,99'),
('Kit Pesos para Musculação (2kg + 5kg + 10kg, 20kg)', 9, 'Kit com 4 pesos para musculação e treino geral.', 'R$79,99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nomeUsu` varchar(50) DEFAULT NULL,
  `emailUsu` varchar(100) DEFAULT NULL,
  `cpf` varchar(12) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `idade` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nomeUsu`, `emailUsu`, `cpf`, `senha`, `idade`) VALUES
('Filipe de Araujo Christovão', 'filipeac@gmail.com', '12345678911', 'EsseèUmTesteTCC', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codProd`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codProd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
