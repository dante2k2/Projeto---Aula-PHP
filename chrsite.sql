-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Abr-2017 às 11:57
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chrsite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `subtitulo` varchar(100) DEFAULT NULL,
  `texto` varchar(5000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `titulo`, `subtitulo`, `texto`) VALUES
(9, 'Mussum Ipsum, cacilds vidis litro abertis', 'Mussum Ipsum, cacilds vidis litro abertis. Si num tem leite entÃ£o bota uma pinga aÃ­ cumpadi!', 'Mussum Ipsum, cacilds vidis litro abertis. Si num tem leite entÃ£o bota uma pinga aÃ­ cumpadi! Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum. Paisis, filhis, espiritis santis. Em pÃ© sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.\r\n\r\nDelegadis gente finis, bibendum egestas augue arcu ut est. Quem num gosta di mÃ©, boa gentis num Ã©. Leite de capivaris, leite de mula manquis sem cabeÃ§a. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.\r\n\r\nAtirei o pau no gatis, per gatis num morreus. Sapien in monti palavris qui num significa nadis i pareci latim. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Quem num gosta di mim que vai caÃ§Ã¡ sua turmis!\r\n\r\nInteragi no mÃ©, cursus quis, vehicula ac nisi. Pra lÃ¡ , depois divoltis porris, paradis. A ordem dos tratores nÃ£o altera o pÃ£o duris. Si u mundo tÃ¡ muito paradis? Toma um mÃ© que o mundo vai girarzis!\r\n\r\nPer aumento de cachacis, eu reclamis. Todo mundo vÃª os porris que eu tomo, mas ninguÃ©m vÃª os tombis que eu levo! Copo furadis Ã© disculpa de bebadis, arcu quam euismod magna. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.\r\n\r\nDiuretics paradis num copo Ã© motivis de denguis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Cevadis im ampola pa arma uma pindureta. Manduma pindureta quium dia nois paga.\r\n\r\nCasamentiss faiz malandris se pirulitÃ¡. MÃ© faiz elementum girarzis, nisi eros vermeio. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. TÃ¡ deprimidis, eu conheÃ§o uma cachacis que pode alegrar sua vidis.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(10) NOT NULL,
  `senha` varchar(16) DEFAULT '123456'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `senha`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
