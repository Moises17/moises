-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3308
-- Generation Time: 12-Maio-2015 às 23:28
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crude`
--


--
-- Estrutura da tabela `easysales`
--

CREATE TABLE IF NOT EXISTS `easysales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(42) NOT NULL,
  `cpf` int(15) NOT NULL,
  `nascimento` varchar(50) NOT NULL,
  `nivel` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `easysales`
--

INSERT INTO `easysales` (`id`, `nome`, `email`, `senha`, `cpf`, `nascimento`, `nivel`, `status`) VALUES
(1, 'ADMINISTRADOR ', 'admin@admin.br', 'f865b53623b121fd34ee5426c792e5c33af8c227', '12345678910','00/00/0000','2','1'),
(2, 'Usuario ', 'usuario@usuario.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', '12345678910','00/00/0000','1','1'),
(3, 'Teste ', 'teste@teste.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', '12345678910','00/00/0000','1','0'),
(4, 'Moises ', 'moises@moises.br', '7c4a8d09ca3762af61e59520943dc26494f8941b','12345678910','00/00/0000','1','0');




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
