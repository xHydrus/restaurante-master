-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2021 às 21:16
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurant`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE `pratos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL,
  `img` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pratos`
--

INSERT INTO `pratos` (`id`, `nome`, `descricao`, `tipo`, `img`) VALUES
(1, 'Caldo Verde', 'Caldo Verde quentinho que nem sopa boa!', 2, 'caldoverde.jpg'),
(2, 'Bolinho de bacalhau', 'O bolinho de bacalhau é uma das melhores opções, pois é um alimento gostoso e pequeno. ', 1, 'bolinhodebacalhau.jpg'),
(3, 'Salada Mediterrânea', 'Caso queira uma opção ainda mais leve, a salada mediterrânea está entre as melhores sugestões de entradas de restaurantes. \r\n\r\n', 1, 'saladamedit.jpg'),
(4, 'Pães', 'Pão quente e do próprio dia.', 1, 'paes.jpg'),
(5, 'Bolo de bolacha', 'Torne o seu dia mais saboroso com este delicioso bolo de bolacha.', 3, 'bolodebolacha.jpg'),
(9, 'Bacalhau à Brás', 'O bacalhau à Brás, com bacalhau desfiado, batatas e ovo, é uma das receitas mais famosas em Portugal.', 2, 'bacalhauabras.jpeg'),
(10, 'Alheira de Mirandela', '', 2, 'AlheiradeMirandela.jpg'),
(11, 'Cozido à portuguesa', 'Cozido à portuguesa é um cozido tradicional português. Trata-se de uma iguaria composta por uma miríade de vegetais, carnes e enchidos cozidos. No que diz respeito aos vegetais, podem ser cozidos feijões, batatas, cenouras, nabos, couves e arroz.', 2, 'cozidoaportuguesa.jpg'),
(12, 'Sardinha assada', 'A sardinha na grelha é um prato tradicional da cozinha portuguesa e é uma das 7 Maravilhas da Gastronomia de Portugal.', 2, 'sardinhassada.jpg'),
(13, 'Pudim de ovos', '', 3, 'pudimdeovos.jpg'),
(14, 'Arroz de pato', 'Um arroz de pato é sempre uma boa ideia para uma festa ou para um encontro com amigos. Aprenda a fazê-lo com quem sabe. Sai sempre bem.', 2, 'arrozdepato.jpg'),
(15, 'Polvo à lagareiro', 'O polvo à lagareiro é uma das formas como os portugueses mais gostam de comer polvo. Bem regado com azeite, temperado com muito alho e acompanhado de batatinhas assadas, não há quem lhe resista.', 2, 'polvo-a-lagareiro.jpg'),
(16, 'Bacalhau assado', '', 2, 'bacalhau1.jpg'),
(17, 'Sopa da pedra', 'Um dos mais conhecidos pratos nacionais, a sopa da pedra vem do Ribatejo, mais especificamente da zona de Almeirim. Esta não leva pedra, mas é deliciosa na mesma!', 2, 'sopa-da-pedra.jpg'),
(18, 'Canja de galinha', 'Não, não é apenas uma receita para dias frios ou quando está doente. A canja de galinha sabe bem todo o ano e em todas as ocasiões.', 2, 'canja.jpg'),
(19, 'Serradura', 'Com três ingredientes apenas se faz um dos doces mais queridos entre os portugueses: serradura.', 3, 'serradura.jpg'),
(20, 'Doce da casa', '', 3, 'doce-da-casa.jpg'),
(21, 'Arroz doce', '', 3, 'arrozdoce.jpg'),
(22, 'Fruta da época', '', 3, 'frutaepoca.jpg'),
(23, 'Baba de camelo', '', 3, 'babadecamelo.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `tipo`) VALUES
(1, 'entrada'),
(2, 'principal'),
(3, 'sobremesa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pratos`
--
ALTER TABLE `pratos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pratos`
--
ALTER TABLE `pratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
