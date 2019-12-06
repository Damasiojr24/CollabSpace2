-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2019 às 13:57
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `collab`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaborador`
--

CREATE TABLE `colaborador` (
  `id` int(11) NOT NULL,
  `nomecompleto` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pedidosercolaborador_id` int(11) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `escola` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidosercolaborador`
--

CREATE TABLE `pedidosercolaborador` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `cv` varchar(200) DEFAULT NULL,
  `projecto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidosercolaborador`
--

INSERT INTO `pedidosercolaborador` (`id`, `email`, `nome`, `cv`, `projecto_id`) VALUES
(5, 'damasiojunior7@gmail.com', 'teste 2', 'weqrewt', 1),
(6, 'damasiojunior7@gmail.com', 'sadsad dvdsfs', 'dsgfdsgdsgdsg', 5),
(7, 'damasiojunior7@gmail.com', 'dsfgdfsgdfs', 'dfsgfdsgdfs', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projecto`
--

CREATE TABLE `projecto` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `detalhes` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `objectivo` varchar(200) NOT NULL,
  `estado` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projecto`
--

INSERT INTO `projecto` (`id`, `nome`, `descricao`, `detalhes`, `usuario_id`, `objectivo`, `estado`) VALUES
(1, 'Projecto A', '', 'sistema para manipulacao e controlo de estuda', 1, 'ghiugiu', 50),
(4, 'Edmilson David Novela', 'adsfdsvdf', 'vfsgvdfsgvdf', 1, 'sdfds', 70),
(5, 'dsfdsaf', 'safsgffsgfgfgfgfdsssssssssgaddddddddaf', 'sdfffffffffffffffffffffafgfdsadfaaaaaaaaaaaaa', 1, 'aSFdsfsfgdsa', 93),
(6, 'Edmilson David Novela', 'fsfdsaf', 'fads', 1, 'Fazer um sis', 50),
(7, 'popola', 'adsd', 'adsd', 1, 'amadeu', 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
(1, 'marcelo', '11111111');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_colaborador_pedidosercolaborador1_idx` (`pedidosercolaborador_id`);

--
-- Índices para tabela `pedidosercolaborador`
--
ALTER TABLE `pedidosercolaborador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedidosercolaborador_projecto1_idx` (`projecto_id`);

--
-- Índices para tabela `projecto`
--
ALTER TABLE `projecto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_projecto_usuario_idx` (`usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidosercolaborador`
--
ALTER TABLE `pedidosercolaborador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `projecto`
--
ALTER TABLE `projecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `colaborador`
--
ALTER TABLE `colaborador`
  ADD CONSTRAINT `fk_colaborador_pedidosercolaborador1` FOREIGN KEY (`pedidosercolaborador_id`) REFERENCES `pedidosercolaborador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedidosercolaborador`
--
ALTER TABLE `pedidosercolaborador`
  ADD CONSTRAINT `fk_pedidosercolaborador_projecto1` FOREIGN KEY (`projecto_id`) REFERENCES `projecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `projecto`
--
ALTER TABLE `projecto`
  ADD CONSTRAINT `fk_projecto_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
