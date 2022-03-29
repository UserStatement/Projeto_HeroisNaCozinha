-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Mar-2022 às 18:57
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `heroisnacozinha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `idFavoritos` int(11) NOT NULL,
  `idUtilizador` int(11) NOT NULL,
  `idReceita` int(11) DEFAULT NULL,
  `idIngrediente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `idImagem` int(11) NOT NULL,
  `idUtilizador` int(11) NOT NULL,
  `valorImagem` varchar(100) NOT NULL,
  `nomeImagem` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `idIngrediente` int(11) NOT NULL,
  `nomeIngrediente` varchar(45) DEFAULT NULL,
  `idIngredientesCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`idIngrediente`, `nomeIngrediente`, `idIngredientesCategoria`) VALUES
(1, 'nenhum', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientescategoria`
--

CREATE TABLE `ingredientescategoria` (
  `idIngredientesCategoria` int(11) NOT NULL,
  `IngredienteCategoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ingredientescategoria`
--

INSERT INTO `ingredientescategoria` (`idIngredientesCategoria`, `IngredienteCategoria`) VALUES
(4, 'nenhuma');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `idUtilizador` int(11) NOT NULL,
  `emailUtilizador` varchar(45) NOT NULL,
  `passwordUtilizador` varchar(45) NOT NULL,
  `nomeUtilizador` varchar(40) DEFAULT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idUtilizador`, `emailUtilizador`, `passwordUtilizador`, `nomeUtilizador`, `nivel`) VALUES
(1, 'elodie@gmailcom', '123', 'Elodie', 1),
(2, 'andre@gmail.com', '321', 'Andre', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `preferencias`
--

CREATE TABLE `preferencias` (
  `idPreferencias` int(11) NOT NULL,
  `idUtilizador` int(11) DEFAULT NULL,
  `ReceitaCategoria` varchar(100) NOT NULL,
  `IngredientesCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `idReceita` int(11) NOT NULL,
  `nomeReceita` varchar(45) DEFAULT NULL,
  `idReceitasCategoria` int(11) NOT NULL,
  `instrucaoReceita` varchar(200) DEFAULT NULL,
  `comentariosReceita` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitascategoria`
--

CREATE TABLE `receitascategoria` (
  `ReceitasCategoria` varchar(45) DEFAULT NULL,
  `idReceitasCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receitascategoria`
--

INSERT INTO `receitascategoria` (`ReceitasCategoria`, `idReceitasCategoria`) VALUES
('Sopas', 1),
('Bebidas', 2),
('Entradas', 3),
('Massas', 4),
('Pratos de Carne', 5),
('Sobremesas', 6),
('Pratos de Peixe', 7),
('Pratos Vegetarianos', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitasingredientes`
--

CREATE TABLE `receitasingredientes` (
  `idReceita` int(11) NOT NULL,
  `idIngrediente` int(11) NOT NULL,
  `QuantidadeIngrediente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`idFavoritos`),
  ADD KEY `idReceita` (`idReceita`),
  ADD KEY `idUtilizador` (`idUtilizador`),
  ADD KEY `idIngrediente` (`idIngrediente`);

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`idImagem`),
  ADD UNIQUE KEY `idUtilizador` (`idUtilizador`);

--
-- Índices para tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`idIngrediente`),
  ADD KEY `idIngredientesCategoria` (`idIngredientesCategoria`);

--
-- Índices para tabela `ingredientescategoria`
--
ALTER TABLE `ingredientescategoria`
  ADD PRIMARY KEY (`idIngredientesCategoria`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idUtilizador`);

--
-- Índices para tabela `preferencias`
--
ALTER TABLE `preferencias`
  ADD PRIMARY KEY (`idPreferencias`),
  ADD KEY `idUtilizador` (`idUtilizador`);

--
-- Índices para tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`idReceita`) USING BTREE,
  ADD KEY `idReceitasCategoria` (`idReceitasCategoria`);

--
-- Índices para tabela `receitascategoria`
--
ALTER TABLE `receitascategoria`
  ADD PRIMARY KEY (`idReceitasCategoria`);

--
-- Índices para tabela `receitasingredientes`
--
ALTER TABLE `receitasingredientes`
  ADD KEY `idReceita` (`idReceita`),
  ADD KEY `idIngrediente` (`idIngrediente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `idFavoritos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `idImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `idIngrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ingredientescategoria`
--
ALTER TABLE `ingredientescategoria`
  MODIFY `idIngredientesCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `idUtilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `preferencias`
--
ALTER TABLE `preferencias`
  MODIFY `idPreferencias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `idReceita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `receitascategoria`
--
ALTER TABLE `receitascategoria`
  MODIFY `idReceitasCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`idReceita`) REFERENCES `receitas` (`idReceita`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`idUtilizador`) REFERENCES `login` (`idUtilizador`),
  ADD CONSTRAINT `favoritos_ibfk_3` FOREIGN KEY (`idIngrediente`) REFERENCES `ingredientes` (`idIngrediente`);

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_ibfk_1` FOREIGN KEY (`idUtilizador`) REFERENCES `login` (`idUtilizador`);

--
-- Limitadores para a tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD CONSTRAINT `ingredientes_ibfk_1` FOREIGN KEY (`idIngredientesCategoria`) REFERENCES `ingredientescategoria` (`idIngredientesCategoria`);

--
-- Limitadores para a tabela `preferencias`
--
ALTER TABLE `preferencias`
  ADD CONSTRAINT `preferencias_ibfk_1` FOREIGN KEY (`idUtilizador`) REFERENCES `login` (`idUtilizador`);

--
-- Limitadores para a tabela `receitas`
--
ALTER TABLE `receitas`
  ADD CONSTRAINT `receitas_ibfk_1` FOREIGN KEY (`idReceitasCategoria`) REFERENCES `receitascategoria` (`idReceitasCategoria`);

--
-- Limitadores para a tabela `receitasingredientes`
--
ALTER TABLE `receitasingredientes`
  ADD CONSTRAINT `receitasingredientes_ibfk_1` FOREIGN KEY (`idReceita`) REFERENCES `receitas` (`idReceita`),
  ADD CONSTRAINT `receitasingredientes_ibfk_2` FOREIGN KEY (`idIngrediente`) REFERENCES `ingredientes` (`idIngrediente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
