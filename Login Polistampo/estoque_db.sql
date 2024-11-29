-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21/11/2024 às 17:44
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `descricao_historico`
--

DROP TABLE IF EXISTS `descricao_historico`;
CREATE TABLE IF NOT EXISTS `descricao_historico` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(191) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descricao` (`descricao`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `descricao_historico`
--

INSERT INTO `descricao_historico` (`id`, `descricao`) VALUES
(1, 'NBR6656 LNE500'),
(2, 'SAE J403 1006'),
(3, 'NBR6656 LNE380'),
(4, 'SAE 1006\\1008'),
(5, 'SAE 1006'),
(6, 'SAE 1010');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `bitola` varchar(20) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `quantidade` int NOT NULL,
  `status` enum('disponível','indisponível') NOT NULL,
  `data` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`id`, `categoria`, `codigo`, `bitola`, `descricao`, `quantidade`, `status`, `data`) VALUES
(13, 'FINAS A FRIO', '107220', '1,20', 'NES M2027 SP781 440 45/45 G  ', 9030, 'disponível', '2024-11-11 17:42:05'),
(14, 'FINAS A QUENTE', '2432173178', '1,90', 'SAE J403 1008', 6000, 'disponível', '2024-11-13 01:38:31'),
(16, 'FINAS A QUENTE', '09420460', '1,80', 'NES M2027 SP781 440 45/45 G  ', 5000, 'disponível', '2024-11-15 16:57:49'),
(17, 'FINAS A QUENTE', '09420460', '1,80', 'NES M2027 SP781 440 45/45 G  ', 5000, 'disponível', '2024-11-15 18:59:01'),
(18, 'FINAS A QUENTE', '09420460', '1,80', 'NES M2027 SP781 440 45/45 G  ', 5000, 'disponível', '2024-11-15 18:59:16'),
(19, 'FINAS A FRIO', '230324113622', '1,20', 'SAE 1006', 4000, 'indisponível', '2024-11-19 17:26:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
