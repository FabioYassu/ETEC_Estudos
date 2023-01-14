-- htmlMyAdmin SQL Dump
-- version 4.0.2
-- http://www.htmlmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 23/08/2013 às 16:08
-- Versão do servidor: 5.6.11-log
-- Versão do html: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `agenda2`
--
CREATE DATABASE IF NOT EXISTS `bd_habitante` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_habitante`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_contatos`
--

CREATE TABLE IF NOT EXISTS `tb_habitante` (
  `id_habitante` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,  
  `funcao` varchar(70) COLLATE utf8_bin NOT NULL,
  `contato` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_habitante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Fazendo dump de dados para tabela `tb_contatos`
--

INSERT INTO `tb_habitante` (`id_habitante`, `nome`, `funcao`, `contato`, `celular`) VALUES
(1, 'Fabio','Coelho Branco', 'sem contato...é tarde', '(15) 466162696'),
(2, 'Mafe','Gato Risonho', '-Indefinido-', '(15) 44616665 '),
(3, 'Laila','Lebre de Março', 'tenha bolo', '(15) 4361696361 '),
(4, 'Isabelle','Rainha Branca', 'Chamar ao vento', '(15) 697361  '),
(5, 'Maria','Absolem', 'Esteja perdido', '(15) 4461726961 '),
(6, 'Cae','Chapeleiro Maluco', 'Na hora do chá', '(15) 636165 ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
