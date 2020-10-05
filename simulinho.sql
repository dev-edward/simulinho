-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 01-Set-2019 às 22:43
-- Versão do servidor: 10.1.38-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vestibulator`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `TBQuestao`
--

CREATE TABLE `TBQuestao` (
  `IDQuestao` int(8) NOT NULL,
  `Numero` int(3) NOT NULL,
  `Semestre` int(2) NOT NULL,
  `Ano` int(4) NOT NULL,
  `Materia` varchar(30) DEFAULT NULL,
  `Dificuldade` int(1) DEFAULT NULL,
  `FKTextoBase` int(8) NOT NULL,
  `Enunciado` text NOT NULL,
  `AlternativaA` text NOT NULL,
  `AlternativaB` text NOT NULL,
  `AlternativaC` text NOT NULL,
  `AlternativaD` text NOT NULL,
  `AlternativaE` text NOT NULL,
  `Gabarito` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `TBQuestao`
--

INSERT INTO `TBQuestao` (`IDQuestao`, `Numero`, `Semestre`, `Ano`, `Materia`, `Dificuldade`, `FKTextoBase`, `Enunciado`, `AlternativaA`, `AlternativaB`, `AlternativaC`, `AlternativaD`, `AlternativaE`, `Gabarito`) VALUES
(20180101, 1, 1, 2018, NULL, NULL, 20180101, 'Segundo o texto, é possível afirmar que', 'o autor do texto, apesar de admitir o uso de “duzentas\r\ngramas”, afirma que há formas incorretas de\r\npronunciar palavras como “três” e “dés”', 'a forma correta a que o autor se refere tem como\r\nparâmetro a linguagem coloquial e não a norma culta\r\npadrão da língua portuguesa.', 'há formas de se expressar que não devem existir,\r\nprincipalmente em contextos sociais como o que foi\r\nretratado pela crônica.', 'a expressão que dá nome à crônica faz parte da\r\noralidade do autor e implica, também, questões de\r\nprestígio social.', 'há uma incongruência na afirmação da personagem\r\nHélio, pois o que ele afirma não acontece na\r\nvida real.', 'd'),
(20180102, 2, 1, 2018, NULL, NULL, 20180101, 'Relei o trecho<br/><div class=\"caixa\">Meu amigo Hélio [...] fica indignado quando peço na\r\npadaria duzentas gramas de presunto – quando a\r\nforma correta, insiste ele, é “duzentos” gramas.</div>\r\nHélio aponta um desvio da norma padrão na expressão\r\n<u><i>“duzentas gramas”</i></u> utilizada pelo autor no seu dia a dia.\r\nNo entanto, ele não aponta o motivo dessa expressão\r\nnão estar correta.\r\nAssinale a alternativa que contenha o tipo de problema\r\nidentificado por Hélio.', 'Concordância nominal, pois o numeral deveria\r\nconcordar em gênero com o substantivo.', 'Concordância verbal, pois deveria haver\r\nconcordância com o verbo que sucede o pedido.', 'Regência nominal, pois o numeral deveria\r\nconcordar em número com o substantivo.', 'Regência verbal, pois deveria haver concordância\r\ncom o verbo que está anteposto ao pedido.', 'Complemento nominal, pois deveria haver\r\nconcordância de número com o numeral.', 'a'),
(20180103, 3, 1, 2018, NULL, NULL, 20180103, 'Sobre a distribuição espacial dos grandes centros urbanos pelo mundo apresentados na tabela, é possível afirmar corretamente, que', 'no final do século XIX, as maiores cidades estavam concentradas nos países subdesenvolvidos.', 'no ano de 2015, a maioria das grandes aglomerações urbanas estava concentrada em um único continente.', 'no ano de 2001, duas das maiores aglomerações urbanas do planeta pertenciam à América Latina.', 'nos três momentos registrados na tabela aparece, pelo menos, uma cidade do continente europeu.', 'no ano de 2015, as três maiores aglomerações urbanas se encontravam no continente asiático.', 'b'),
(20180104, 4, 1, 2018, NULL, NULL, 20180104, 'Assinale a alternativa que apresenta um exemplo de\r\nmistura homogênea.', 'água + gasolina', 'água + óleo de cozinha', 'gás nitrogênio + gás hélio', 'ar atmosférico + fuligem', 'areia + sal de cozinha', 'c'),
(20180105, 5, 1, 2018, NULL, NULL, 20180104, 'Um procedimento que permite separar, sem o uso de\r\nqualquer fonte de calor, uma mistura de água e óleo de\r\ncozinha é a', 'decantação.', 'sublimação.', 'peneiração.', 'destilação.', 'filtração.', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `TBTextoBase`
--

CREATE TABLE `TBTextoBase` (
  `IDTextoBase` int(8) NOT NULL,
  `Conteudo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `TBTextoBase`
--

INSERT INTO `TBTextoBase` (`IDTextoBase`, `Conteudo`) VALUES
(20180101, '<div class=\"caixa\"><span class=\"titulo\">DUZENTAS GRAMAS</span>\r\nMeu amigo Hélio, que é pai do Arthur e diz sonoramente trêss e déss (ao invés de, digamos, “trêis” e “déis”) fica\r\nindignado quando peço na padaria duzentas gramas de presunto – quando a forma correta, insiste ele, é “duzentos”\r\ngramas. Sempre que acontece e estamos juntos acabamos discutindo uns dez minutos sobre modos diferentes\r\nde falar. Ele de praxe argumenta que as regras de pronúncia e ortografia, se existem, devem ser obedecidas – e\r\nque os mais cultos (como eu, um cara que traduz livros!) devem insistir na forma correta a fim de esclarecer e\r\nencaminhar gente menos iluminada, como supõe-se seja a moça que me vende na padaria o presunto e o queijo.\r\nEu sempre argumento que quando ele diz que só existe uma forma correta de falar está usurpando um termo\r\nde outro ramo, e tentando aplicar a ética à gramática: como se falar “corretamente” implicasse em algum grau\r\nde correção moral; como se dizer “duzentas” gramas fosse incorrer numa falha de caráter e dizer “duzentos”\r\nfosse prova de virtude e integridade. [...]\r\n<span class=\"fonte\">\r\n&lt;https://tinyurl.com/ya6ta9cr&gt; Acesso em: 09.11.2017.\r\n</span>\r\n</div>'),
(20180103, 'A tabela apresenta os maiores centros urbanos do planeta em três diferentes momentos: 1900, 2001 e 2015.\r\n<img width=\'100%\' src=\"bd-img/20180102.png\">'),
(20180104, '<div class=\"caixa\">A natureza apresenta diversas substâncias importantes para o dia a dia do ser humano. Porém, a grande maioria\r\ndessas substâncias encontra-se na forma de misturas homogêneas ou heterogêneas.\r\nPor essa razão, ao longo dos anos, várias  técnicas de separação de misturas  foram desenvolvidas para que a\r\nutilização de toda e qualquer substância fosse possível.\r\n<span class=\"fonte\">&lt;https://tinyurl.com/y8j567ag&gt; Acesso em: 10.11.2017.</span></div>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `TBUsuario`
--

CREATE TABLE `TBUsuario` (
  `IDUsuario` int(11) NOT NULL,
  `Usuario` varchar(15) NOT NULL,
  `Nome` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Curso` varchar(60) DEFAULT NULL,
  `Unidade` varchar(60) DEFAULT NULL,
  `Nivel` varchar(20) NOT NULL DEFAULT 'iniciante',
  `Moedas` int(11) NOT NULL DEFAULT '500',
  `Medalhas` int(11) NOT NULL DEFAULT '0',
  `Senha` varchar(36) NOT NULL,
  `DataNascimento` date DEFAULT NULL,
  `Sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `TBUsuario`
--

INSERT INTO `TBUsuario` (`IDUsuario`, `Usuario`, `Nome`, `Email`, `Curso`, `Unidade`, `Nivel`, `Moedas`, `Medalhas`, `Senha`, `DataNascimento`, `Sexo`) VALUES
(1230, 'Edward.D3v', 'Edward', 'edward@gmail.com', NULL, NULL, 'iniciante', 500, 0, 'e7d80ffeefa212b7c5c55700e4f7193e', NULL, ''),
(1231, 'edward-d3v', 'Edward', 'edward2@gmail.com', 'Desenvolvimento De Sistemas', 'Etec de São Paulo', 'iniciante', 500, 0, '250cf8b51c773f3f8dc8b4be867a9a02', '0000-00-00', 'Masculino'),
(1232, 'edward-d3v', 'Edward', 'edward3@gmail.com', '', '', 'iniciante', 500, 0, '68053af2923e00204c3ca7c6a3150cf7', '0000-00-00', 'Masculino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TBQuestao`
--
ALTER TABLE `TBQuestao`
  ADD PRIMARY KEY (`IDQuestao`),
  ADD KEY `FKTextoBase` (`FKTextoBase`);

--
-- Indexes for table `TBTextoBase`
--
ALTER TABLE `TBTextoBase`
  ADD PRIMARY KEY (`IDTextoBase`);

--
-- Indexes for table `TBUsuario`
--
ALTER TABLE `TBUsuario`
  ADD PRIMARY KEY (`IDUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TBUsuario`
--
ALTER TABLE `TBUsuario`
  MODIFY `IDUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1233;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `TBQuestao`
--
ALTER TABLE `TBQuestao`
  ADD CONSTRAINT `TBQuestao_ibfk_1` FOREIGN KEY (`FKTextoBase`) REFERENCES `TBTextoBase` (`IDTextoBase`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
