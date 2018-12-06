-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2018 às 15:27
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u644261243_av`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(188) NOT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `celular` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `login` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `rua` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `numero` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `bairro` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cep` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cidade` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `estado` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `log` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `but` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `mail` int(188) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunofile`
--

CREATE TABLE `alunofile` (
  `id` int(188) NOT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cargo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `documento` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `view` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `obs` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cliente` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `alunofile`
--

INSERT INTO `alunofile` (`id`, `nome`, `cargo`, `documento`, `view`, `obs`, `cliente`) VALUES
(1, 'Sergio Mota', 'Area 2', '-250406118.jpeg', '0', 'obs', '7');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atuacao`
--

CREATE TABLE `atuacao` (
  `id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banerlateral`
--

CREATE TABLE `banerlateral` (
  `id` int(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ordem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banerlateral`
--

INSERT INTO `banerlateral` (`id`, `banner`, `img`, `link`, `ordem`) VALUES
(1, 'Lateral 1', '2814.jpg', '', '_self'),
(2, 'Lateral 2', '', 'http://127.0.0.1/isas/index.php?pg=at', '_self');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bannerfixo`
--

CREATE TABLE `bannerfixo` (
  `id` int(255) NOT NULL,
  `baner` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ordem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bannerfixo`
--

INSERT INTO `bannerfixo` (`id`, `baner`, `img`, `link`, `ordem`) VALUES
(0, 'Interno 0', 'baner-capa-fixo.jpg', 'http://www.voxa.com.br/', '_blank');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bannerfixoint`
--

CREATE TABLE `bannerfixoint` (
  `id` int(255) NOT NULL,
  `baner` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ordem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bannerfixoint`
--

INSERT INTO `bannerfixoint` (`id`, `baner`, `img`, `link`, `ordem`) VALUES
(1, 'Interno 1', '', '', '_self'),
(2, 'Lateral 2', '', '', '_self'),
(3, 'Interno 3', '', '', '_self');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ordem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `banner`, `img`, `link`, `ordem`) VALUES
(0, 'Banner 0', '', '', '_self'),
(1, 'Banner 1', 'banner-libras.png', '', '_self'),
(2, 'Banner 2', 'banner-libras.png', '', '_self'),
(3, 'Banner 3', 'banner-libras.png', '', '_self');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `linkimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `tipo`, `linkimg`) VALUES
(1, 'Informática', 'informatica.png'),
(2, 'Acessórios', '936556.jpg'),
(3, 'Escritório', 'escritoriop.jpg'),
(12, 'Pianos', 'form.jpg'),
(13, 'Feira de Santana', '0.jpg'),
(14, 'Camisetas', 'camisasacademia.png'),
(15, 'Calças', 'calca.jpg'),
(16, 'Gato', 'gatos_0051_640x480.jpg'),
(17, 'Carros', 'produto-sem-imagem.gif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `login` varchar(300) DEFAULT NULL,
  `senha` varchar(300) DEFAULT NULL,
  `rua` varchar(300) DEFAULT NULL,
  `numero` varchar(300) NOT NULL,
  `bairro` varchar(300) DEFAULT NULL,
  `cep` varchar(300) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `log` varchar(300) DEFAULT NULL,
  `but` varchar(300) NOT NULL,
  `mail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `celular`, `login`, `senha`, `rua`, `numero`, `bairro`, `cep`, `cidade`, `estado`, `log`, `but`, `mail`) VALUES
(59, 'Fernando Pessoa', '1', '1', 'login', '1', '1', '97435902500', '1', '1', '1', '1', '', 'avatar.jpg', 0),
(60, 'Maria Mota Xaviers', '1', '1', '', '1', '1', '78964259', '1', 'cep', '1', '1', '', 'avatar.jpg', 0),
(61, 'Joanna Dark', '1', '1', '', '1', '1', '98756547DC', '1', 'cep', '1', '1', '', 'WhatsApp-Image-2018-09-17-at-22.15.37-400x450.jpeg', 0),
(62, 'Maria do Carmo', '1', '75 91428548', 'login', '1', '1', '9798778954', '1', '1', '1', '1', '', 'avatar.jpg', 0),
(63, 'Marileusa Oliveira dos Santos', '1', '1', '', '1', '1', '987987987987', '1', 'cep', '1', '1', '', 'avatar.jpg', 0),
(64, 'José Farias de Azevedo', '1', '758697488', 'login', '1', '1', '87456987234', '1', '1', '1', '1', '', 'avatar.jpg', 0),
(65, 'Mariposa Livre do Casulo', '1', '1', '', '1', '1', '758987585/0001-85', '1', 'cep', '1', '1', '', 'avatar.jpg', 0),
(66, 'Escova de Cabelo Boa', '1', '75 98685.8757', 'login', '1', '1', '87589587458', '1', '1', '1', '1', '', 'avatar.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientefile`
--

CREATE TABLE `clientefile` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cargo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `documento` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `view` int(11) NOT NULL,
  `obs` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `clientefile`
--

INSERT INTO `clientefile` (`id`, `nome`, `cargo`, `documento`, `view`, `obs`, `cliente`) VALUES
(1, 'nome', 'cargo', 'documentoname', 0, 'obs', 34),
(2, 'nome', 'cargo', 'documentoname', 0, 'obs', 34),
(3, 'nome', 'cargo', 'documento', 0, 'obs', 34),
(4, 'nnnnnn', 'ccccc', 'ddddd', 0, 'oooooo', 34),
(5, '1111111', '222222', '3333333', 0, 'sssssssss', 34),
(6, 'nome', 'cargo', 'documento', 0, 'obs', 33),
(7, 'dfgdfgdfg', 'dfgdfgdfg', '-209170804.png', 0, 'obs', 34),
(8, 'Sérgio mota', 'Programador Web', '-183063835.png', 0, 'obs', 34),
(9, 'Sérgio Mota', 'Área', '-235626887.jpeg', 0, 'obs', 32),
(10, 'Sérgio Mota', 'oliveira', '-14041223.png', 0, 'obs', 34),
(11, 'Ramayan Amaral', 'Cabeleireiro', '-244302203.png', 0, 'obs', 34),
(12, 'Testovaldo', 'Aquilo', '-53875423.jpeg', 1, 'obs', 33),
(13, 'Inspeção de Rotina - 31102018', 'Área 53', '-6069966.pdf', 0, 'obs', 48),
(14, 'Sérgio Mota', 'Web Design', '-219040199.jpeg', 1, 'obs', 7),
(15, 'Sérgio Mota', 'Área', '1754790-N.JPG.jpeg', 1, 'obs', 53),
(16, 'Identidade', '', 'Software-Quality-Assurance-med.jpg.jpeg', 0, 'obs', 58),
(17, 'Identidade', '', '47117536_937768153088607_5495120770709323776_n.jpg.jpeg', 1, 'obs', 61),
(18, 'cpf', '', '46977852_206613593574177_3558920441038897152_n.jpg.jpeg', 1, 'obs', 61),
(19, 'errrrtrt', '', '14.jpg.jpeg', 0, 'obs', 63);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientez`
--

CREATE TABLE `clientez` (
  `id` int(255) NOT NULL,
  `img` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `descri` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `texto` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `configurar`
--

CREATE TABLE `configurar` (
  `id` int(11) NOT NULL,
  `corTopo` varchar(255) NOT NULL,
  `corMenu` varchar(255) NOT NULL,
  `corBase` varchar(255) NOT NULL,
  `tipoMenuLat` varchar(255) NOT NULL,
  `corPainel` varchar(255) NOT NULL,
  `logoTopo` varchar(255) NOT NULL,
  `logoPe` varchar(255) NOT NULL,
  `imgBg` varchar(255) NOT NULL,
  `configTitulo` varchar(255) NOT NULL,
  `configRodape` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `configurar`
--

INSERT INTO `configurar` (`id`, `corTopo`, `corMenu`, `corBase`, `tipoMenuLat`, `corPainel`, `logoTopo`, `logoPe`, `imgBg`, `configTitulo`, `configRodape`) VALUES
(1, 'white', 'black', 'rgba(72,151,63, 1)', 'secondary', 'default', 'logofeiralink.png', 'logoPe', 'bg.png', 'Isas - Instituto Santana de Ação Social', '© Copyright Instituto Santana 2016 - Organização Social. <i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 75 3011-6519 <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> contato@institutosantana.org.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curriculo`
--

CREATE TABLE `curriculo` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `curriculo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dica`
--

CREATE TABLE `dica` (
  `id` int(18) NOT NULL,
  `img` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dica`
--

INSERT INTO `dica` (`id`, `img`, `titulo`, `descri`, `texto`, `data`, `hora`, `view`) VALUES
(1, 'limp01.jpg', 'Limpeza de Fogões', 'Dicas e passo a passo para uma rotina de limpeza mais prática', '<p>Quem&nbsp;cozinha&nbsp;frequentemente sabe bem que ap&oacute;s poucos pratos preparados o forno e o fog&atilde;o j&aacute; ficam cobertos de gordura e outros tipos de sujeira. E n&atilde;o adianta, &eacute; preciso ter uma rotina peri&oacute;dica de limpeza desse eletrodom&eacute;stico para que as manchas de &oacute;leo e de queimado n&atilde;o se instalem de vez e se tornem cada vez mais dif&iacute;ceis de serem tiradas.</p>\r\n<h2>Primeiros cuidados</h2>\r\n<p>Antes de dar in&iacute;cio a qualquer processo de limpeza, o importante &eacute; garantir sua seguran&ccedil;a, ent&atilde;o, &ldquo;a primeira coisa &eacute; certificar que o fog&atilde;o esteja desligado da tomada (cuidado para n&atilde;o abrir as bocas de g&aacute;s enquanto manuseia as v&aacute;lvulas) e nunca use produtos de limpeza inflam&aacute;veis&rdquo;, orienta a personal organizer Tati Godoy.</p>\r\n<p>Voc&ecirc; tamb&eacute;m precisa se atentar a qual tipo de material seu fog&atilde;o possui (inox, esmaltado) para n&atilde;o passar nada que possa prejudicar sua apar&ecirc;ncia durante a limpeza. &ldquo;As melhores op&ccedil;&otilde;es s&atilde;o as fibras (buchas) brancas, amarelas ou azuis. Elas t&ecirc;m baixa abrasividade e n&atilde;o v&atilde;o danificar o aparelho. Nunca utilize esponjas abrasivas ou l&atilde; de a&ccedil;o, porque elas podem riscar na hora de fazer a limpeza&rdquo;, orienta &nbsp;Jo&atilde;o Pedro L&uacute;cio, t&eacute;cnico de servi&ccedil;o da Maria Brasileira.</p>\r\n<p>Ainda segundo Jo&atilde;o, para a limpeza do forno, o ponto a se atentar s&atilde;o os produtos escolhidos, que devem ter o aroma suave para que o cheiro n&atilde;o passe para a comida mais tarde.</p>\r\n<h2>Receitas caseiras</h2>\r\n<p>Para tirar aquela gordura complicada, voc&ecirc; tamb&eacute;m pode lan&ccedil;ar m&atilde;o de duas receitas caseiras, que v&atilde;o fazer toda a sujidade amolecer de maneira mais f&aacute;cil. S&atilde;o:</p>\r\n<p>&ndash; Espalhe vinagre branco pela superf&iacute;cie do fog&atilde;o e deixe agir por 15 minutos. Depois deste tempo, limpe com um pano seco ou com uma toalha de papel.</p>\r\n<p>&ndash; Primeiro fa&ccedil;a uma solu&ccedil;&atilde;o de &aacute;gua quente misturada a uma por&ccedil;&atilde;o de bicarbonato. Em seguida &eacute; s&oacute; embeber um pano nela e pass&aacute;-lo tanto no fog&atilde;o quanto no forno.</p>\r\n<h2>Passo a passo da limpeza</h2>\r\n<h3>Forno:</h3>\r\n<p>1. Retire a grade do forno e deixe de molho, por no m&iacute;nimo 30 minutos, dentro da pia ou de alguma bacia. &ldquo;Para o molho, fa&ccedil;a uma mistura de &aacute;gua quente com detergente neutro ou desengordurante&rdquo;, explica Jo&atilde;o Pedro.</p>\r\n<p>2. Pegue alguns panos finos, estilo perfex, e tampe os buraquinhos do forno para evitar que caia produto ou sujeiras que possam danificar o aparelho.</p>\r\n<p>3. Separe tr&ecirc;s panos de ch&atilde;o e coloque ao redor do forno para que a &aacute;gua n&atilde;o caia no&nbsp;<a href=\"https://revista.zapimoveis.com.br/tag/piso/\">piso</a>&nbsp;e escorra para o resto da cozinha.</p>\r\n<p>4. Em um recipiente, coloque um pouco de &aacute;gua morna potencializada com o produto que estiver utilizando e esfregue a &aacute;rea desejada com uma esponja n&atilde;o abrasiva. Para retirar a mistura, passe um pano seco e limpo. &ldquo;Mas lembre-se que o forno n&atilde;o pode ser enxaguado&rdquo;, completa o t&eacute;cnico de servi&ccedil;o&nbsp;da empresa Maria Brasileira.</p>\r\n<p>5. Para a parte interna do forno, troque a esponja por uma escova de cano longo e cerdas de nylon.</p>\r\n<h3>Fog&atilde;o:</h3>\r\n<p>1. Tire todas as partes desmont&aacute;veis da superf&iacute;cie, como bucais e grades, para deix&aacute;-las de molho em &aacute;gua quente e o por 30 minutos.</p>\r\n<p>2. Sobre os itens necess&aacute;rios, &ldquo;detergente, toalha de papel e um pano para lustrar s&atilde;o mais do que suficientes&rdquo;, diz a personal organizer Tati Godoy.</p>\r\n<p>3. Separe um recipiente com &aacute;gua morna e o produto da sua escolha, como foi feito para a limpeza do forno, e com uma esponja n&atilde;o abrasiva comece a esfregar, n&atilde;o muito forte.</p>\r\n<p>4. Para retirar, basta um pano seco e limpo.</p>\r\n<p>5. Se ap&oacute;s a limpeza voc&ecirc; quiser conservar o fog&atilde;o intacto por mais tempo, Jo&atilde;o Pedro&nbsp;d&aacute; a dica: &ldquo;utilize prote&ccedil;&otilde;es de alum&iacute;nio&rdquo;.<br /><br /><br /><em>Mat&eacute;ria Original: &nbsp;https://revista.zapimoveis.com.br/veja-como-tirar-gordura-do-forno-e-fogao-de-maneira-facil/</em></p>', '10-09-2017', '23:56', '0'),
(2, 'limp02.jpg', 'Limpeza de Vidros', 'Como limpar janelas e vidros: dicas e truques para uma limpeza perfeita', '<p>Para adquirir uma boa apar&ecirc;ncia, as janelas e vidros necessitam de uma limpeza regular. O ideal &eacute; que a limpeza seja feita mensalmente.</p>\r\n<div class=\"adsright\">&nbsp;</div>\r\n<p>Para quem pensa que a tarefa &eacute; muito dif&iacute;cil, est&aacute; enganado. O modo como se faz a limpeza e o uso de produtos corretos, na quantidade adequada, podem garantir que vidros e superf&iacute;cies espelhadas fiquem limpos, sem qualquer mancha ou aspecto emba&ccedil;ado.</p>\r\n<p>Seguindo alguns pequenos passos a limpeza das janelas pode ser feita sem muito esfor&ccedil;o e tempo.</p>\r\n<p>Confira a seguir um passo a passo e dicas preparadas com o aux&iacute;lio da personal Organizer Adriani Gon&ccedil;alves e aprenda a higienizar com efici&ecirc;ncia as janelas e vidros de sua casa. Abaixo voc&ecirc; tamb&eacute;m encontra uma receita de limpa vidros caseiro e v&iacute;deos explicativos sobre como limpar os vidros e as janelas de maneira correta.<br /><br /></p>\r\n<h3>Passo a passo de como limpar os vidros</h3>\r\n<p>Os passos para a limpeza dos vidros s&atilde;o bastante simples. A forma e a ordem em que s&atilde;o feitos &eacute; que garante a limpeza eficiente. Veja os tr&ecirc;s passos que voc&ecirc; deve seguir para deixar os vidros limpinhos:</p>\r\n<ol>\r\n<li>Antes de limpar os vidros &eacute; necess&aacute;rio limpar as janelas e aberturas primeiro. Uma sugest&atilde;o &eacute; passar um pincel de cerdas largas entre as frestas da janela para eliminar o p&oacute;. Tamb&eacute;m &eacute; poss&iacute;vel aspirar as partes de mais dif&iacute;cil acesso, principalmente os cantos;</li>\r\n<li>Limpe o vidro com uma solu&ccedil;&atilde;o de 5 litros de &aacute;gua para 1 colher de sopa de vinagre ou detergente neutro e 1 colher de sopa de &aacute;lcool. Passe esta solu&ccedil;&atilde;o com o lado macio da esponja, enxague e seque. Para facilitar essa etapa veja as dicas e truques do t&oacute;pico abaixo;</li>\r\n<li>Aplique o limpa vidros e seque para finalizar.</li>\r\n</ol>\r\n<h3>Dicas e truques que v&atilde;o facilitar a limpeza</h3>\r\n<ol>\r\n<li>Para evitar manchas durante a limpeza divida por etapas, comece de cima para baixo e divida uma parte primeiro depois a outra, use o pano ou esponja na mesma dire&ccedil;&atilde;o;</li>\r\n<li>O ideal &eacute; lavar a janela em dias nublados, pois a luz solar direta acaba secando o produto de limpeza antes que voc&ecirc; possa polir o vidro adequadamente;</li>\r\n<li>Polir as janelas com um jornal amassado &eacute; uma forma de obter um brilho reluzente. O papel ainda deixa uma pel&iacute;cula que &eacute; resistente &agrave; sujeira;</li>\r\n<li>Papel toalha tamb&eacute;m &eacute; excelente para finalizar a limpeza e tamb&eacute;m d&aacute; brilho;</li>\r\n<li>Camisetas de algod&atilde;o ou fraldas de tecido, esfregar um apagador de quadro-negro limpo sobre a janela recentemente lavada e seca s&atilde;o outras formas de garantir um vidro ainda mais brilhoso;</li>\r\n<li>O limpa-vidros, encontrado facilmente em supermercados, &eacute; apropriado somente para a limpeza de vidros e espelhos que n&atilde;o est&atilde;o localizados em c&ocirc;modos que acumulam sujeira gordurosa. Por&eacute;m, para &aacute;reas com tal sujidade, o ideal &eacute; usar um desengordurante neutro e l&iacute;quido, antes da aplica&ccedil;&atilde;o do limpa-vidros.</li>\r\n<li>Tenha muito cuidado ao usar cadeiras e bancos para alcan&ccedil;ar janelas altas. Prefira escadas em bom estado, com certificado do Inmetro e se for necess&aacute;rio, conte com a ajuda de algu&eacute;m.</li>\r\n</ol>\r\n<h3>Quais produtos s&atilde;o necess&aacute;rios para limpar os vidros e janelas?</h3>\r\n<p>Adriani sugere os seguintes produtos e materiais para serem usados na limpeza das janelas:</p>\r\n<ul>\r\n<li>Limpa vidros para sujeiras comuns;</li>\r\n<li>Vinagre;</li>\r\n<li>&Aacute;lcool;</li>\r\n<li>Sab&atilde;o neutro para sujeira mais pesada;</li>\r\n<li>Esponja macia;</li>\r\n<li>Rodo dupla face (possui esponja para lavagem e tecido de flanela ou algod&atilde;o para secagem);</li>\r\n<li>Cabos extensores para vidros com dif&iacute;cil acesso;</li>\r\n<li>Panos de malha, pois n&atilde;o soltam fiapos ou fraldas de pano.</li>\r\n</ul>\r\n<p>O ideal &eacute; evitar produtos a base de solvente e o uso de panos e esponjas &aacute;speras para evitar riscos e manchas nos vidros.</p>\r\n<div class=\"adblock\">\r\n<h3>Receita: limpa vidros caseiro</h3>\r\n<p>Para elaborar um limpador de vidros caseiro voc&ecirc; vai precisar de:</p>\r\n<ul>\r\n<li>2 colheres (sopa) de am&ocirc;nia;</li>\r\n<li>1/2 copo de &aacute;lcool para limpeza;</li>\r\n<li>1/4 de colher (ch&aacute;) de detergente.</li>\r\n</ul>\r\n<p>Misture todos os ingredientes em uma garrafa pequena com borrifador. Complete com &aacute;gua e chacoalhe bem. Se preferir, substitua a am&ocirc;nia por 3 colheres (sopa) de vinagre ou suco de lim&atilde;o.</p>\r\n</div>', '10-09-2017', '23:57', '0'),
(3, 'limp03.jpg', 'Limpeza de Estofados', 'Aprenda a limpar corretamente seu sofá e outros estofados', '<p>Com os produtos e o jeito de limpar certos n&atilde;o fica dif&iacute;cil fazer seu sof&aacute; parecer novo. Neste novo artigo, aprenda a limpar corretamente o sof&aacute;!</p>\r\n<p>Todo mundo gosta de estar sempre com a casa limpa e em ordem, mas se voc&ecirc; tem crian&ccedil;as ou animais de estima&ccedil;&atilde;o, isso pode se tornar uma verdadeira batalha. Ainda mais para os estofados, que costumam ser os m&oacute;veis mais dif&iacute;ceis de limpar, pois al&eacute;m de serem de tecido, s&atilde;o cheios de dobras e curvas. Por isso preparamos este artigo para que voc&ecirc; aprenda a limpar corretamente o sof&aacute;!</p>\r\n<p>Quando algu&eacute;m derrama algo no estofado e cria uma mancha que parece imposs&iacute;vel de sair, ficamos desesperados! Mas, calma. As dicas s&atilde;o caseiras, para manuten&ccedil;&atilde;o mais rotineira. Se a situa&ccedil;&atilde;o for muito complexa, prefira um profissional e evite estragar o seu estofado.</p>\r\n<p>&Eacute; por n&atilde;o saber como realizar a&nbsp;limpeza do sof&aacute;&nbsp;&ndash; ou com o que limpar &ndash; que o pr&oacute;prio dono acaba deixando seus estofados mais velhos a cada nova faxina. Para fazer uma higieniza&ccedil;&atilde;o e manuten&ccedil;&atilde;o correta, o melhor &eacute; aspirar e utilizar um pano &uacute;mido&nbsp; com um pouco de sab&atilde;o&nbsp;neutro. Na hora de passar o pano, siga sempre o sentido do tecido. Nunca esfregue em c&iacute;rculos. E se estiver manchado? Borrife a &aacute;gua com sab&atilde;o neutro&nbsp;bem em cima da mancha e coloque um papel toalha at&eacute; que ele absorva todo o l&iacute;quido. Depois disso, coloque o m&oacute;vel em algum lugar da casa que tenha bastante vento. Jamais deixe o estofado exposto diretamente ao sol!</p>\r\n<p>&nbsp;</p>\r\n<h3>Como Limpar Corretamente o Sof&aacute;</h3>\r\n<p>&nbsp;</p>\r\n<p>Antes de utilizar qualquer tipo de produto no estofado &eacute; preciso saber qual &eacute; o tecido: couro, seda, linho, camur&ccedil;a, entre outros. Outra dica importante (e b&aacute;sica!) &eacute; olhar a etiqueta. Nela, &eacute; informado qual o tipo de limpeza que deve ser feito no estofado e cada letra representa um jeito diferente de higieniza&ccedil;&atilde;o:</p>\r\n<ul>\r\n<li>A&nbsp;<strong>letra P</strong>&nbsp;significa que o m&oacute;vel deve ser lavado a seco. Voc&ecirc; pode encontrar panos para essa limpeza a seco em supermercados e, ent&atilde;o, basta completar com um aspirador de p&oacute;;</li>\r\n<li>Para as etiquetas com a&nbsp;<strong>letra W</strong>, a maneira certa de fazer a limpeza do estofado &eacute; com um pano &uacute;mido com outros produtos, como o sab&atilde;o neutro;</li>\r\n<li>Uma etiqueta com a&nbsp;<strong>letra F</strong>&nbsp;significa que a limpeza deve ser feita a seco, por&eacute;m com uma empresa profissional;</li>\r\n<li>Por fim, a&nbsp;<strong>letra O</strong>&nbsp;significa que o m&oacute;vel deve ser limpo apenas com &aacute;gua fria.</li>\r\n</ul>\r\n<p>Agora que voc&ecirc; j&aacute; tem uma no&ccedil;&atilde;o geral, que tal saber algumas dicas espec&iacute;ficas para os diferentes tecidos com produtos que voc&ecirc; pode encontrar em casa?</p>\r\n<ul>\r\n<li><strong>Para estofados de tecido, linho ou veludo:</strong>&nbsp;a dica &eacute; misturar 1 litro de &aacute;gua morna com &frac14; de vinagre branco e passar essa mistura com um pano. Se a mancha for muito dif&iacute;cil de ser retirada, voc&ecirc; pode realizar o processo usando uma esponja e depois deixar o m&oacute;vel secar naturalmente.</li>\r\n<li><strong>Para o couro, napa ou courinho:</strong>&nbsp;higienize&nbsp;com um pano, de prefer&ecirc;ncia de l&atilde;&nbsp;de carneiro, &aacute;gua e sab&atilde;o neutro. Para evitar que o tecido rasgue com o tempo, a dica &eacute; hidratar o couro a cada tr&ecirc;s meses&nbsp;(o ideal &eacute; usa hidratante para couro, e n&atilde;o hidratante de pele para pessoas).</li>\r\n<li><strong>Para estofados de camur&ccedil;a:</strong>&nbsp;apenas um pano de microfibra levemente umedecido com &aacute;gua e sab&atilde;o neutro&nbsp;est&aacute; de bom tamanho. O tecido deve ser escovado uma vez por semana.</li>\r\n</ul>\r\n<p><span data-sheets-value=\"[null,2,&quot;Fazemos sim Flu00e1via! Olu00e1 Igor! O impermeabilizante para tecidos u00e9 um polu00edmero de alta tecnologia que torna o tecido hidro-repelente, ou seja, nu00e3o absorvendo lu00edquidos nele derramados, observando que hu00e1 diferenu00e7a entre lu00edquido derramado acidentalmente e lu00edquido jogado sobre o mesmo. O tratamento nu00e3o veda os poros do tecido, mas sim cria um campo magnu00e9tico repelindo os lu00edquidos derramados atu00e9 que sejam retirados com um papel toalha. Tambu00e9m nu00e3o altera, cor, textura ou maleabilidade. Observa-se que estu00e3o excluu00eddas da garantia as manchas provocadas por barro, graxa, batom, tintas em geral e uso de produtos abrasivos. Como tambu00e9m manchas provocadas por resu00edduos orgu00e2nicos humanos, animais e vegetais. O objetivo da impermeabilizar u00e9 impedir a penetrau00e7u00e3o de manchas por lu00edquidos derramados, evitar a impregnau00e7u00e3o de poeira, evitando o encardimento, facilitar a limpeza de sujeiras secas, aumenta a vida u00fatil do tecido, dando mais resistu00eancia e proteu00e7u00e3o contra os raios solares, tornar o estofado protegido contra o u00e1caro e agentes alu00e9rgicos e evitar o mofo. Tambu00e9m u00e9 anti-chamas. Espero ter tirado suas du00favidas! :D (y)&quot;]\" data-sheets-userformat=\"[null,null,10819,[null,0],[null,2,16777215],null,null,null,null,0,null,null,0,null,[null,2,1316899],null,9]\"><strong><a href=\"http://drlavatudo.com/impermeabilizacao/impermeabilizacao-de-estofados/\">Impermeabilize seu estofado</a>:</strong>&nbsp;A&nbsp;impermeabiliza&ccedil;&atilde;o para tecidos &eacute; a aplica&ccedil;&atilde;o por press&atilde;o de um pol&iacute;mero de alta tecnologia que torna o tecido hidro-repelente, ou seja, n&atilde;o absorvendo l&iacute;quidos nele derramados. O tratamento n&atilde;o veda os poros do tecido, mas sim cria um campo magn&eacute;tico repelindo os l&iacute;quidos derramados at&eacute; que sejam retirados com um papel toalha. Tamb&eacute;m n&atilde;o altera, cor, textura ou maleabilidade.</span></p>\r\n<h3>&nbsp;Como Limpar o Sof&aacute;</h3>\r\n<p><span data-sheets-value=\"[null,2,&quot;Fazemos sim Flu00e1via! Olu00e1 Igor! O impermeabilizante para tecidos u00e9 um polu00edmero de alta tecnologia que torna o tecido hidro-repelente, ou seja, nu00e3o absorvendo lu00edquidos nele derramados, observando que hu00e1 diferenu00e7a entre lu00edquido derramado acidentalmente e lu00edquido jogado sobre o mesmo. O tratamento nu00e3o veda os poros do tecido, mas sim cria um campo magnu00e9tico repelindo os lu00edquidos derramados atu00e9 que sejam retirados com um papel toalha. Tambu00e9m nu00e3o altera, cor, textura ou maleabilidade. Observa-se que estu00e3o excluu00eddas da garantia as manchas provocadas por barro, graxa, batom, tintas em geral e uso de produtos abrasivos. Como tambu00e9m manchas provocadas por resu00edduos orgu00e2nicos humanos, animais e vegetais. O objetivo da impermeabilizar u00e9 impedir a penetrau00e7u00e3o de manchas por lu00edquidos derramados, evitar a impregnau00e7u00e3o de poeira, evitando o encardimento, facilitar a limpeza de sujeiras secas, aumenta a vida u00fatil do tecido, dando mais resistu00eancia e proteu00e7u00e3o contra os raios solares, tornar o estofado protegido contra o u00e1caro e agentes alu00e9rgicos e evitar o mofo. Tambu00e9m u00e9 anti-chamas. Espero ter tirado suas du00favidas! :D (y)&quot;]\" data-sheets-userformat=\"[null,null,10819,[null,0],[null,2,16777215],null,null,null,null,0,null,null,0,null,[null,2,1316899],null,9]\">O objetivo da impermeabiliza&ccedil;&atilde;o &eacute; impedir a penetra&ccedil;&atilde;o de manchas por l&iacute;quidos derramados, evitar a impregna&ccedil;&atilde;o de poeira, evitando o encardimento, facilitar a limpeza de sujeiras secas, aumenta a vida &uacute;til do tecido, dando mais resist&ecirc;ncia e prote&ccedil;&atilde;o contra os raios solares, tornar o estofado protegido contra o &aacute;caro e agentes al&eacute;rgicos e evitar o mofo.</span></p>\r\n<p>Dar manuten&ccedil;&atilde;o peri&oacute;dica nos seus estofados vai fazer com que seus m&oacute;veis durem muito mais e muito mais bonitos!</p>\r\n<p>Alguns produtos devem ser evitados ao m&aacute;ximo, em qualquer tecido, como cloro ou sab&atilde;o em p&oacute;. Se bater aquela d&uacute;vida, o melhor &eacute; usar um sab&atilde;o neutro&nbsp;ou shampoos neutro! Jamais utilize detergente de cozinha para lavar lou&ccedil;a no seu estofado! Al&eacute;m de n&atilde;o limpar adequadamente, o tecido vai ficar grosso e &aacute;spero!</p>\r\n<p>E ent&atilde;o, obteve dicas importantes de como limpar corretamente o sof&aacute;? Se gostou das dicas, ficou com alguma d&uacute;vida ou precisa de ajuda profissional, comente aqui ou entre em contato conosco!</p>', '10-09-2017', '23:57', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `edicao`
--

CREATE TABLE `edicao` (
  `id` int(255) NOT NULL,
  `atuacao` varchar(255) NOT NULL,
  `projeto` varchar(255) NOT NULL,
  `imagens` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `edicao`
--

INSERT INTO `edicao` (`id`, `atuacao`, `projeto`, `imagens`) VALUES
(1, '66', '8623', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `email`
--

CREATE TABLE `email` (
  `id` int(122) NOT NULL,
  `email` varchar(344) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `email`
--

INSERT INTO `email` (`id`, `email`) VALUES
(8, 'sergiomota@gmail.com'),
(9, 'motaoliveira@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `view` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menuNome` varchar(255) NOT NULL,
  `menuLink` varchar(255) NOT NULL,
  `menuTipo` varchar(255) NOT NULL,
  `menuOrdem` varchar(255) NOT NULL,
  `menuOcult` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `menuNome`, `menuLink`, `menuTipo`, `menuOrdem`, `menuOcult`) VALUES
(1, 'home', '#home', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordserv`
--

CREATE TABLE `ordserv` (
  `id` int(65) NOT NULL,
  `id_us` int(188) NOT NULL,
  `data_origem` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `cod_os` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `placa` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `marca` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `cor` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `renavan` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `proprietario` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `ordserv`
--

INSERT INTO `ordserv` (`id`, `id_us`, `data_origem`, `cod_os`, `placa`, `marca`, `cor`, `renavan`, `proprietario`, `telefone`) VALUES
(1, 61, '29/11/2018', '8586', 'JYC6892', 'Celta Wind', 'Cinza', '789846542324', 'Sérgio Mota Oliveira', '75 991429009'),
(36, 62, '02/12/2018', '8604', NULL, NULL, NULL, NULL, 'Maria do Carmo', '75 91428548'),
(51, 62, '03/12/2018', '8619', NULL, NULL, NULL, NULL, 'Maria do Carmo', '75 91428548'),
(52, 63, '03/12/2018', '8620', NULL, NULL, NULL, NULL, 'Marileusa Oliveira dos Santos', '1'),
(53, 63, '03/12/2018', '8621', NULL, NULL, NULL, NULL, 'Marileusa Oliveira dos Santos', '1'),
(116, 66, '03/12/2018', '8622', NULL, NULL, NULL, NULL, 'Escova de Cabelo Boa', '75 98685.8757'),
(118, 66, '03/12/2018', '8623', NULL, NULL, NULL, NULL, 'Escova de Cabelo Boa', '75 98685.8757');

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizar`
--

CREATE TABLE `organizar` (
  `id` int(188) NOT NULL,
  `img` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `organizar`
--

INSERT INTO `organizar` (`id`, `img`, `titulo`, `descri`, `texto`, `data`, `hora`) VALUES
(1, 'passaar.jpg', 'Passadeira', '40.00', '<h5>Descri&ccedil;&atilde;o</h5>\r\n<p>A Limp Chick Diaristas disponibiliza este servi&ccedil;o para os clientes que n&atilde;o&nbsp;querem perder tempo passando grandes quantidades de roupas. Para isso os servi&ccedil;os de uma&nbsp;passadeira s&atilde;o e', '25-08-2017', '11:28'),
(2, 'lavanderia.jpg', 'Lavanderia', '25.00', '<p>Descri&ccedil;&atilde;o</p>\r\n<p>Esta sem tempo para realizar a lavagem das roupas? A Limp Chick Diaristas tem uma profissional ideal para a sua necessidade. Contratando esse servi&ccedil;o o cliente estar&aacute; economizando tempo e dinheiro.<br />&lt', '31-08-2017', '12:38'),
(3, 'arruma.jpg', 'Arrumadeira', '', '<p>Descri&ccedil;&atilde;o</p>\r\n<p>Este &eacute; um servi&ccedil;o inovador da Limp Chick que oferece aos seus clientes a comodidade de receberem em seus lares, uma profissional capacitada para executar uma arruma&ccedil;&atilde;o personalizada que pode s', '31-08-2017', '12:47'),
(4, 'chef.jpg', 'Chef de Cozinha', '', '<h5>Descri&ccedil;&atilde;o</h5>\r\n<p>Em cada celebra&ccedil;&atilde;o e tamb&eacute;m em todos os momentos especiais a Limp&nbsp;Chick estar&aacute; lado a lado com seus clientes, atendendo sempre as suas necessidades.&nbsp;Pensando assim &eacute; que n&o', '31-08-2017', '12:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `osdetalhe`
--

CREATE TABLE `osdetalhe` (
  `id_us` int(188) NOT NULL,
  `cod_os` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `id_serv` int(11) NOT NULL,
  `servico` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `quantidade` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `osdetalhe`
--

INSERT INTO `osdetalhe` (`id_us`, `cod_os`, `id_serv`, `servico`, `quantidade`, `valor`) VALUES
(61, '8586', 3, 'Serviço 3', NULL, '20.00'),
(61, '8586', 17, 'wqerwer', NULL, '33.00'),
(62, '8604', 73, NULL, NULL, NULL),
(62, '8604', 74, 'asdasd', NULL, '44.00'),
(62, '8619', 96, NULL, NULL, NULL),
(63, '8620', 97, NULL, NULL, NULL),
(63, '8621', 98, NULL, NULL, NULL),
(0, '', 159, 'uyu', NULL, '34.00'),
(0, '<br />\n<b>Notice</b>:  Undefined variable: osCodigo in <b>C:xampphtdocsfcaradmservicoexcluir.php</b> on line <b>39</b><br />\n', 168, 'Coisa de Nerd', NULL, '125.00'),
(0, '', 169, 'Coisa de Nerd', NULL, '125.00'),
(0, '<br />\n<b>Notice</b>:  Undefined variable: osCodigo in <b>C:xampphtdocsfcaradmservicoincluir.php</b> on line <b>74</b><br />\n', 184, 'ad', NULL, '34.00'),
(0, '<br />\n<b>Notice</b>:  Undefined variable: osCodigo in <b>C:xampphtdocsfcaradmservicoincluir.php</b> on line <b>74</b><br />\n', 186, 'ad', NULL, '34.00'),
(0, '', 189, 'ad', NULL, '34.00'),
(66, '8674', 220, NULL, NULL, NULL),
(66, '8675', 221, NULL, NULL, NULL),
(66, '8676', 222, NULL, NULL, NULL),
(66, '8677', 223, NULL, NULL, NULL),
(66, '8678', 224, NULL, NULL, NULL),
(66, '8622', 243, NULL, NULL, NULL),
(66, '8623', 245, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceria`
--

CREATE TABLE `parceria` (
  `id` int(180) NOT NULL,
  `img` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `nservice` varchar(255) NOT NULL,
  `nvalor` varchar(255) NOT NULL,
  `dataexe` varchar(255) NOT NULL,
  `horaexe` varchar(255) NOT NULL,
  `executado` varchar(255) NOT NULL,
  `xservice` varchar(255) NOT NULL,
  `xvalor` varchar(255) NOT NULL,
  `solicitou` varchar(255) NOT NULL,
  `log` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `cliente`, `email`, `telefone`, `rua`, `numero`, `bairro`, `cep`, `cidade`, `cpf`, `nservice`, `nvalor`, `dataexe`, `horaexe`, `executado`, `xservice`, `xvalor`, `solicitou`, `log`) VALUES
(62, 'João Avelã de Franbueza', 'joao@gmail.com', '75 91425654', 'Rua de Joao', '25', 'Cidade Nova', 'cep', 'Feira de Santana', 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code=710A5FD8B5B5E52114410FB3727CB96D', 'Lavanderia', '25.00', '31/08/2017', '16:00', '1', 'Interior de Despensa', '12.00', '31  August, 2017, 7:34 pm', '33'),
(63, 'Alvaro Dias Solimões', 'solimoes@gmail.com', '75 86251452', 'Caminho Itapetinga ', '15', 'Cidade Nova', 'cep', 'Feira de Santana', 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code=4B6B95DE5B5B685DD4328FBF506B2987', 'Faxina Geral', '95.00', '01/09/2017', '16:00', '1', 'Interior de Despensa', '12.00', '31  August, 2017, 10:33 pm', '32'),
(65, 'Sergio Mota', 'motaoliveira@gmail.com', '75 991429009', 'Caminho Itapetinga ', '15', 'Cidade Nova', 'Feira de Santana', 'Feira de Santana', '000.000.000-00', 'Limpeza pós obra (Residenciais)', '', '29/09/2017', '15:30', '1', 'Nenhuma', 'Nenhuma', '1  September, 2017, 7:44 pm', '34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodconfig`
--

CREATE TABLE `prodconfig` (
  `id` int(11) NOT NULL,
  `prodCat` int(11) NOT NULL,
  `prodSub` int(11) DEFAULT NULL,
  `prodNome` varchar(100) NOT NULL,
  `prodPrice` varchar(255) NOT NULL,
  `prodImage0` varchar(255) NOT NULL,
  `prodImage1` varchar(255) NOT NULL,
  `prodImage2` varchar(255) NOT NULL,
  `prodImage3` varchar(255) NOT NULL,
  `prodDescri` varchar(255) NOT NULL,
  `prodEspecifi` varchar(255) NOT NULL,
  `prodJuros` varchar(255) NOT NULL,
  `prodLarg` varchar(255) NOT NULL,
  `prodAlt` varchar(255) NOT NULL,
  `prodProf` varchar(255) NOT NULL,
  `prodPriceAnt` varchar(255) NOT NULL,
  `prodPriceDiv` varchar(255) NOT NULL,
  `prodEcono` varchar(255) NOT NULL,
  `prodDivi` varchar(255) NOT NULL,
  `prodFabri` varchar(255) NOT NULL,
  `prodCod` varchar(255) NOT NULL,
  `prodAvalia` varchar(255) NOT NULL,
  `prodDestaque` varchar(255) NOT NULL,
  `prodLancamento` varchar(255) NOT NULL,
  `prodNovid` varchar(255) NOT NULL,
  `prodPromo` varchar(255) NOT NULL,
  `prodView` int(255) NOT NULL,
  `prodComp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prodconfig`
--

INSERT INTO `prodconfig` (`id`, `prodCat`, `prodSub`, `prodNome`, `prodPrice`, `prodImage0`, `prodImage1`, `prodImage2`, `prodImage3`, `prodDescri`, `prodEspecifi`, `prodJuros`, `prodLarg`, `prodAlt`, `prodProf`, `prodPriceAnt`, `prodPriceDiv`, `prodEcono`, `prodDivi`, `prodFabri`, `prodCod`, `prodAvalia`, `prodDestaque`, `prodLancamento`, `prodNovid`, `prodPromo`, `prodView`, `prodComp`) VALUES
(1, 1, 5, '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '1', '0', '1', '0', 0, '0'),
(2, 3, 20, '1', '0', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0'),
(3, 17, 21, '1', '0', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0'),
(4, 1, 22, '1', '0', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0'),
(5, 1, 23, '1', '0', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `prodCat` int(11) NOT NULL,
  `prodSub` int(11) DEFAULT NULL,
  `prodNome` varchar(100) NOT NULL,
  `prodPrice` varchar(255) NOT NULL,
  `prodImage0` varchar(255) NOT NULL,
  `prodImage1` varchar(255) NOT NULL,
  `prodImage2` varchar(255) NOT NULL,
  `prodImage3` varchar(255) NOT NULL,
  `prodDescri` varchar(255) NOT NULL,
  `prodEspecifi` varchar(255) NOT NULL,
  `prodJuros` varchar(255) NOT NULL,
  `prodLarg` varchar(255) NOT NULL,
  `prodAlt` varchar(255) NOT NULL,
  `prodProf` varchar(255) NOT NULL,
  `prodPriceAnt` varchar(255) NOT NULL,
  `prodPriceDiv` varchar(255) NOT NULL,
  `prodEcono` varchar(255) NOT NULL,
  `prodDivi` varchar(255) NOT NULL,
  `prodFabri` varchar(255) NOT NULL,
  `prodCod` varchar(255) NOT NULL,
  `prodAvalia` varchar(255) NOT NULL,
  `prodDestaque` varchar(255) NOT NULL,
  `prodLancamento` varchar(255) NOT NULL,
  `prodNovid` varchar(255) NOT NULL,
  `prodPromo` varchar(255) NOT NULL,
  `prodView` int(255) NOT NULL,
  `prodComp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `prodCat`, `prodSub`, `prodNome`, `prodPrice`, `prodImage0`, `prodImage1`, `prodImage2`, `prodImage3`, `prodDescri`, `prodEspecifi`, `prodJuros`, `prodLarg`, `prodAlt`, `prodProf`, `prodPriceAnt`, `prodPriceDiv`, `prodEcono`, `prodDivi`, `prodFabri`, `prodCod`, `prodAvalia`, `prodDestaque`, `prodLancamento`, `prodNovid`, `prodPromo`, `prodView`, `prodComp`) VALUES
(1, 2, 1, 'Câmera de ré Multilaser com visão noturna - AU001', '', 'produto-sem-imagem.gif', 'produto-sem-imagem1.gif', 'produto-sem-imagem2.gif', 'produto-sem-imagem3.gif', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 87, ''),
(2, 2, 2, 'Suporte', '', 'produto-sem-imagem.gif', 'produto-sem-imagem1.gif', 'produto-sem-imagem2.gif', 'produto-sem-imagem3.gif', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 40, ''),
(3, 2, 1, 'Camera de Segurança', '', 'produto-sem-imagem.gif', 'produto-sem-imagem1.gif', 'produto-sem-imagem2.gif', 'produto-sem-imagem3.gif', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 39, ''),
(4, 1, 4, 'Iphone 3GS', '', 'produto-sem-imagem.gif', 'produto-sem-imagem1.gif', 'produto-sem-imagem2.gif', 'produto-sem-imagem3.gif', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 282, ''),
(5, 13, 10, 'Casa 2/4, Suite, Piscina Garagem para quatro carros.', 'R$ 1.000,00', 'produto-sem-imagem.gif', 'produto-sem-imagem1.gif', 'produto-sem-imagem2.gif', 'produto-sem-imagem3.gif', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 54, ''),
(6, 1, 5, 'CPU Xinombi', '', 'produto-sem-imagem.gif', 'produto-sem-imagem1.gif', 'produto-sem-imagem2.gif', 'produto-sem-imagem3.gif', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 9, ''),
(7, 14, 11, 'Camiseta', '', 'T-shirt (2).png', 'T-shirt (3).png', 'T-shirt (1).png', 'T-shirt (4).png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 20, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `galery` varchar(255) DEFAULT NULL,
  `view` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quemsomos`
--

CREATE TABLE `quemsomos` (
  `id` int(160) NOT NULL,
  `img` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `view` int(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quemsomos`
--

INSERT INTO `quemsomos` (`id`, `img`, `titulo`, `descri`, `texto`, `data`, `hora`, `view`) VALUES
(1, 'ibantec.png', 'Quem Somos', '', '<p>&nbsp;</p>\r\n<h5>&nbsp;</h5>', 'data', 'hora', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcate`
--

CREATE TABLE `subcate` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `tipoSub` varchar(255) NOT NULL,
  `linkimgsub` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `subcate`
--

INSERT INTO `subcate` (`id`, `categoria`, `tipoSub`, `linkimgsub`) VALUES
(1, '2', 'Cameras', 'image063.jpg'),
(2, '2', 'Suporte para TV', 'produto-sem-imagem.gif'),
(3, '3', 'Conversor Digital', 'produto-sem-imagem.gif'),
(4, '1', 'Macbook', '936556.jpg'),
(5, '1', 'CPA', 'informatica.png'),
(9, '1', 'Novissimo', 'produto-sem-imagem.gif'),
(10, '13', 'Cidade Nova', 'qtyo123.jpg'),
(11, '14', 'Academia', 'maxresdefault.jpg'),
(12, '12', 'De Calda', 'produto-sem-imagem.gif'),
(13, '15', 'Legue', 'produto-sem-imagem.gif'),
(14, '15', 'Skiny', 'produto-sem-imagem.gif'),
(15, '15', 'Cintura alta', 'produto-sem-imagem.gif'),
(16, '15', 'Stress', 'produto-sem-imagem.gif'),
(17, '15', 'Boca de Sino', 'produto-sem-imagem.gif'),
(18, '15', 'Street', 'produto-sem-imagem.gif'),
(19, '16', 'Angorá', 'gatos_0051_640x480.jpg'),
(20, '3', 'loves', 'produto-sem-imagem.gif'),
(21, '17', 'Inportados', 'produto-sem-imagem.gif'),
(23, '1', 'Celulares', 'falando-ao-celular.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sugestoes`
--

CREATE TABLE `sugestoes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `emailer` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  `resp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sugestoes`
--

INSERT INTO `sugestoes` (`id`, `name`, `phone`, `emailer`, `mensagem`, `resp`) VALUES
(29, 'Sergio Mota Oliveira', '75 91429009', 'motaoliveira@gmail.com', 'minha mensagem para o site por meio do sistema ', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cult` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `tipo`, `nome`, `cult`) VALUES
(1, 'andreAv', '139292Av', '1', 'WebMaster', ''),
(2, 'mota@mota.com', 'root', '1', 'WebMaster', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alunofile`
--
ALTER TABLE `alunofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atuacao`
--
ALTER TABLE `atuacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banerlateral`
--
ALTER TABLE `banerlateral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerfixo`
--
ALTER TABLE `bannerfixo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerfixoint`
--
ALTER TABLE `bannerfixoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientefile`
--
ALTER TABLE `clientefile`
  ADD KEY `id` (`id`);

--
-- Indexes for table `clientez`
--
ALTER TABLE `clientez`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurar`
--
ALTER TABLE `configurar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculo`
--
ALTER TABLE `curriculo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dica`
--
ALTER TABLE `dica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edicao`
--
ALTER TABLE `edicao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordserv`
--
ALTER TABLE `ordserv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizar`
--
ALTER TABLE `organizar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `osdetalhe`
--
ALTER TABLE `osdetalhe`
  ADD PRIMARY KEY (`id_serv`);

--
-- Indexes for table `parceria`
--
ALTER TABLE `parceria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodconfig`
--
ALTER TABLE `prodconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quemsomos`
--
ALTER TABLE `quemsomos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcate`
--
ALTER TABLE `subcate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugestoes`
--
ALTER TABLE `sugestoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(188) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alunofile`
--
ALTER TABLE `alunofile`
  MODIFY `id` int(188) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `atuacao`
--
ALTER TABLE `atuacao`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banerlateral`
--
ALTER TABLE `banerlateral`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bannerfixo`
--
ALTER TABLE `bannerfixo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bannerfixoint`
--
ALTER TABLE `bannerfixoint`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `clientefile`
--
ALTER TABLE `clientefile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `clientez`
--
ALTER TABLE `clientez`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configurar`
--
ALTER TABLE `configurar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `curriculo`
--
ALTER TABLE `curriculo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dica`
--
ALTER TABLE `dica`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `edicao`
--
ALTER TABLE `edicao`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordserv`
--
ALTER TABLE `ordserv`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `organizar`
--
ALTER TABLE `organizar`
  MODIFY `id` int(188) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `osdetalhe`
--
ALTER TABLE `osdetalhe`
  MODIFY `id_serv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `parceria`
--
ALTER TABLE `parceria`
  MODIFY `id` int(180) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `prodconfig`
--
ALTER TABLE `prodconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quemsomos`
--
ALTER TABLE `quemsomos`
  MODIFY `id` int(160) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcate`
--
ALTER TABLE `subcate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sugestoes`
--
ALTER TABLE `sugestoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
