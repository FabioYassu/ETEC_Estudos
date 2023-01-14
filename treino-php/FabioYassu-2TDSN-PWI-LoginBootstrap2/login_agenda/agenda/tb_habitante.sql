-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2021 às 02:04
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_habitante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_habitante`
--

CREATE TABLE `tb_habitante` (
  `id_habitante` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `funcao` varchar(70) COLLATE utf8_bin NOT NULL,
  `contato` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_habitante`
--

INSERT INTO `tb_habitante` (`id_habitante`, `nome`, `funcao`, `contato`, `celular`) VALUES
(1, 'Fabio', 'Coelho Branco', 'sem contato...é tard', '(15) 466162696'),
(2, 'Mafe', 'Gato Risonho', '-Indefinido-', '(15) 44616665 '),
(3, 'Laila', 'Lebre de Março', 'Tenha Bolo', '(15) 4361696361 '),
(4, 'Isabelle', 'Rainha Branca', 'Chamar ao vento', '(15) 697361  '),
(5, 'Maria', 'Absolem', 'Esteja perdido', '(15) 4461726961 '),
(6, 'Cae', 'Chapeleiro Maluco', 'Na hora do chá', '(15) 636165 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_habitante`
--
ALTER TABLE `tb_habitante`
  ADD PRIMARY KEY (`id_habitante`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_habitante`
--
ALTER TABLE `tb_habitante`
  MODIFY `id_habitante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
