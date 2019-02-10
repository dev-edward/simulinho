-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 09-Jan-2019 às 01:15
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sim`
--
CREATE DATABASE IF NOT EXISTS `sim` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sim`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

CREATE TABLE IF NOT EXISTS `questao` (
  `id_questao` int(11) NOT NULL,
  `numero_questao` varchar(2) NOT NULL,
  `semestre_ano` varchar(7) NOT NULL,
  `materia` varchar(15) DEFAULT NULL,
  `dificuldade` int(1) DEFAULT NULL,
  `texto-base` int(8) NOT NULL,
  `enunciado` text NOT NULL,
  `alternativaA` text NOT NULL,
  `alternativaB` text NOT NULL,
  `alternativaC` text NOT NULL,
  `alternativaD` text NOT NULL,
  `alternativaE` text NOT NULL,
  `gabarito` varchar(1) NOT NULL,
  `dica` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_questao`),
  KEY `gabarito` (`gabarito`),
  KEY `gabarito_2` (`gabarito`),
  KEY `dica` (`dica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `questao`
--

INSERT INTO `questao` (`id_questao`, `numero_questao`, `semestre_ano`, `materia`, `dificuldade`, `texto-base`, `enunciado`, `alternativaA`, `alternativaB`, `alternativaC`, `alternativaD`, `alternativaE`, `gabarito`, `dica`) VALUES
(20180101, '01', '1S 2018', NULL, NULL, 20180101, 'Segundo o texto, é possível afirmar que', 'o autor do texto, apesar de admitir o uso de “duzentas\r\ngramas”, afirma que há formas incorretas de\r\npronunciar palavras como “três” e “dés”', 'a forma correta a que o autor se refere tem como\r\nparâmetro a linguagem coloquial e não a norma culta\r\npadrão da língua portuguesa.', 'há formas de se expressar que não devem existir,\r\nprincipalmente em contextos sociais como o que foi\r\nretratado pela crônica.', 'a expressão que dá nome à crônica faz parte da\r\noralidade do autor e implica, também, questões de\r\nprestígio social.', 'há uma incongruência na afirmação da personagem\r\nHélio, pois o que ele afirma não acontece na\r\nvida real.', 'd', NULL),
(20180102, '02', '1S 2018', NULL, NULL, 20180101, 'Relei o trecho<br/><div class="caixa">Meu amigo Hélio [...] fica indignado quando peço na\r\npadaria duzentas gramas de presunto – quando a\r\nforma correta, insiste ele, é “duzentos” gramas.</div>\r\nHélio aponta um desvio da norma padrão na expressão\r\n<u><i>“duzentas gramas”</i></u> utilizada pelo autor no seu dia a dia.\r\nNo entanto, ele não aponta o motivo dessa expressão\r\nnão estar correta.\r\nAssinale a alternativa que contenha o tipo de problema\r\nidentificado por Hélio.', 'Concordância nominal, pois o numeral deveria\r\nconcordar em gênero com o substantivo.', 'Concordância verbal, pois deveria haver\r\nconcordância com o verbo que sucede o pedido.', 'Regência nominal, pois o numeral deveria\r\nconcordar em número com o substantivo.', 'Regência verbal, pois deveria haver concordância\r\ncom o verbo que está anteposto ao pedido.', 'Complemento nominal, pois deveria haver\r\nconcordância de número com o numeral.', 'a', NULL),
(20180103, '03', '1S 2018', NULL, NULL, 20180103, 'Sobre a distribuição espacial dos grandes centros urbanos pelo mundo apresentados na tabela, é possível afirmar corretamente, que', 'no final do século XIX, as maiores cidades estavam concentradas nos países subdesenvolvidos.', 'no ano de 2015, a maioria das grandes aglomerações urbanas estava concentrada em um único continente.', 'no ano de 2001, duas das maiores aglomerações urbanas do planeta pertenciam à América Latina.', 'nos três momentos registrados na tabela aparece, pelo menos, uma cidade do continente europeu.', 'no ano de 2015, as três maiores aglomerações urbanas se encontravam no continente asiático.', 'b', NULL),
(20180104, '04', '1S 2018', NULL, NULL, 20180104, 'Assinale a alternativa que apresenta um exemplo de\r\nmistura homogênea.', 'água + gasolina', 'água + óleo de cozinha', 'gás nitrogênio + gás hélio', 'ar atmosférico + fuligem', 'areia + sal de cozinha', 'c', NULL),
(20180105, '05', '1S 2018', NULL, NULL, 20180104, 'Um procedimento que permite separar, sem o uso de\r\nqualquer fonte de calor, uma mistura de água e óleo de\r\ncozinha é a', 'decantação.', 'sublimação.', 'peneiração.', 'destilação.', 'filtração.', 'a', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto-base`
--

CREATE TABLE IF NOT EXISTS `texto-base` (
  `id_texto-base` int(8) NOT NULL,
  `texto` text,
  `imagens` int(2) DEFAULT NULL,
  `caminho_imagens` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_texto-base`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `texto-base`
--

INSERT INTO `texto-base` (`id_texto-base`, `texto`, `imagens`, `caminho_imagens`) VALUES
(20180101, '<div class="caixa"><span class="titulo">DUZENTAS GRAMAS</span>\r\nMeu amigo Hélio, que é pai do Arthur e diz sonoramente trêss e déss (ao invés de, digamos, “trêis” e “déis”) fica\r\nindignado quando peço na padaria duzentas gramas de presunto – quando a forma correta, insiste ele, é “duzentos”\r\ngramas. Sempre que acontece e estamos juntos acabamos discutindo uns dez minutos sobre modos diferentes\r\nde falar. Ele de praxe argumenta que as regras de pronúncia e ortografia, se existem, devem ser obedecidas – e\r\nque os mais cultos (como eu, um cara que traduz livros!) devem insistir na forma correta a fim de esclarecer e\r\nencaminhar gente menos iluminada, como supõe-se seja a moça que me vende na padaria o presunto e o queijo.\r\nEu sempre argumento que quando ele diz que só existe uma forma correta de falar está usurpando um termo\r\nde outro ramo, e tentando aplicar a ética à gramática: como se falar “corretamente” implicasse em algum grau\r\nde correção moral; como se dizer “duzentas” gramas fosse incorrer numa falha de caráter e dizer “duzentos”\r\nfosse prova de virtude e integridade. [...]\r\n<span class="fonte">\r\n&lt;https://tinyurl.com/ya6ta9cr&gt; Acesso em: 09.11.2017.\r\n</span>\r\n</div>', NULL, NULL),
(20180103, 'A tabela apresenta os maiores centros urbanos do planeta em três diferentes momentos: 1900, 2001 e 2015.', 1, 'bd-img/20180102.png'),
(20180104, '<div class="caixa">A natureza apresenta diversas substâncias importantes para o dia a dia do ser humano. Porém, a grande maioria\r\ndessas substâncias encontra-se na forma de misturas homogêneas ou heterogêneas.\r\nPor essa razão, ao longo dos anos, várias  técnicas de separação de misturas  foram desenvolvidas para que a\r\nutilização de toda e qualquer substância fosse possível.\r\n<span class="fonte">&lt;https://tinyurl.com/y8j567ag&gt; Acesso em: 10.11.2017.</span></div>', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
