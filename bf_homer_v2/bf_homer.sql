-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Jun-2020 às 20:12
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bf_homer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alas_hmr_adar`
--

DROP TABLE IF EXISTS `alas_hmr_adar`;
CREATE TABLE IF NOT EXISTS `alas_hmr_adar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `topico` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `subtopico` varchar(85) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alas_hmr_adar`
--

INSERT INTO `alas_hmr_adar` (`id`, `cod`, `topico`, `subtopico`, `peso`) VALUES
(1, 'ADAR1', 'ACESSO INTERNO A DADOS EM REPOUSO', 'SEM ACESSO A DADOS EM REPOUSO', 1),
(2, 'ADAR2', 'ACESSO INTERNO A DADOS EM REPOUSO', 'ACESSO DE FORNECEDOR AOS DADOS É MONITORADO POR EQUIPE INTERNA', 2),
(3, 'ADAR3', 'ACESSO INTERNO A DADOS EM REPOUSO', 'ACESSO DE FORNECEDOR AOS DADOS É CONCEDIDO SOMENTE QUANDO NECESSÁRIO', 3),
(4, 'ADAR4', 'ACESSO INTERNO A DADOS EM REPOUSO', 'ACESSO DE FORNECEDOR AOS DADOS OCORRE DE FORMA AUTENTICADA E NÃO-GERENCIADA', 4),
(5, 'ADAR5', 'ACESSO INTERNO A DADOS EM REPOUSO', 'DADOS EM SISTEMAS/REDES QUE SÃO GERENCIADOS POR FORNECEDORES INTERNOS OU EXTERNOS', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alas_hmr_aexe`
--

DROP TABLE IF EXISTS `alas_hmr_aexe`;
CREATE TABLE IF NOT EXISTS `alas_hmr_aexe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `topico` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `subtopico` varchar(85) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alas_hmr_aexe`
--

INSERT INTO `alas_hmr_aexe` (`id`, `cod`, `topico`, `subtopico`, `peso`) VALUES
(1, 'AEXE1', 'ACESSO EXTERNO', 'SEM ACESSO EXTERNO', 1),
(2, 'AEXE2', 'ACESSO EXTERNO', 'SESSÕES DE ACESSO REMOTO MONITORADAS POR EQUIPE INTERNA', 2),
(3, 'AEXE3', 'ACESSO EXTERNO', 'FORNECEDOR RECEBE ACESSO VIA ARQUIVO, APLICATIVO OU PORTAL WEB (VPN CLIENT-TO-SITE)', 3),
(4, 'AEXE4', 'ACESSO EXTERNO', 'RESTRIÇÃO DE ACESSO ENTRE SITE DO FORNECEDOR E DO CLIENTE VIA VPN SITE-TO-SITE', 4),
(5, 'AEXE5', 'ACESSO EXTERNO', 'REDES OU SISTEMAS INTERNOS HOSPEDADOS NA INFRAESTRUTURA DE FORNECEDORES', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alas_hmr_natd`
--

DROP TABLE IF EXISTS `alas_hmr_natd`;
CREATE TABLE IF NOT EXISTS `alas_hmr_natd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `topico` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `subtopico` varchar(85) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alas_hmr_natd`
--

INSERT INTO `alas_hmr_natd` (`id`, `cod`, `topico`, `subtopico`, `peso`) VALUES
(1, 'NATD1', 'NATUREZA DOS DADOS TRAMITADOS', 'DADOS SIMPLES', 1),
(2, 'NATD2', 'NATUREZA DOS DADOS TRAMITADOS', 'DADOS FINANCEIROS', 2),
(3, 'NATD3', 'NATUREZA DOS DADOS TRAMITADOS', 'DADOS COMPORTAMENTAIS', 2),
(4, 'NATD4', 'NATUREZA DOS DADOS TRAMITADOS', 'DADOS SENSÍVEIS', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alas_hmr_quest`
--

DROP TABLE IF EXISTS `alas_hmr_quest`;
CREATE TABLE IF NOT EXISTS `alas_hmr_quest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questao` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `dimensao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mand_class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `on_prem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `colocation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hosting` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `iaas` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `saas` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `paas` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `inserido_por` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `inserido_em` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=463 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alas_hmr_reln`
--

DROP TABLE IF EXISTS `alas_hmr_reln`;
CREATE TABLE IF NOT EXISTS `alas_hmr_reln` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `topico` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `subtopico` varchar(85) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alas_hmr_reln`
--

INSERT INTO `alas_hmr_reln` (`id`, `cod`, `topico`, `subtopico`, `peso`) VALUES
(1, 'RELN1', 'RELEVÂNCIA PARA O NEGÓCIO', 'SEM NECESSIDADE DE EXIGÊNCIA DE SLA (SERVICE LEVEL AGREEMENT) MÍNIMA', 1),
(2, 'RELN2', 'RELEVÂNCIA PARA O NEGÓCIO', 'SERVIÇOS PODEM FICAR INDISPONÍVEIS POR MAIS DE 1 (UM) MÊS SEM PREJUÍZO SIGNIFICATIVO', 2),
(3, 'RELN3', 'RELEVÂNCIA PARA O NEGÓCIO', 'INDISPONIBILIDADE POR MENOS DE 1 (UM) MÊS GERA PREJUÍZO SIGNIFICATIVO', 3),
(4, 'RELN4', 'RELEVÂNCIA PARA O NEGÓCIO', 'INDISPONIBILIDADE POR MENOS DE 1 (UMA) SEMANA GERA PREJUÍZO SIGNIFICATIVO', 4),
(5, 'RELN5', 'RELEVÂNCIA PARA O NEGÓCIO', 'INDISPONIBILIDADE POR MENOS DE 1 (UM) DIA GERA PREJUÍZO SIGNIFICATIVO', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alas_hmr_req`
--

DROP TABLE IF EXISTS `alas_hmr_req`;
CREATE TABLE IF NOT EXISTS `alas_hmr_req` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_servico` int(8) NOT NULL,
  `n_proj` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `servico` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `natureza_d` int(1) NOT NULL,
  `volume_v` int(1) NOT NULL,
  `requisitos_l` int(1) NOT NULL,
  `relevancia_n` int(1) NOT NULL,
  `acesso_e` int(1) NOT NULL,
  `transferencia_t` int(1) NOT NULL,
  `acesso_r` int(1) NOT NULL,
  `impacto` int(3) NOT NULL,
  `probab` int(3) NOT NULL,
  `risco` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `responsavel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `criado` datetime NOT NULL,
  `criado_por` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alas_hmr_req`
--

INSERT INTO `alas_hmr_req` (`id`, `id_servico`, `n_proj`, `servico`, `natureza_d`, `volume_v`, `requisitos_l`, `relevancia_n`, `acesso_e`, `transferencia_t`, `acesso_r`, `impacto`, `probab`, `risco`, `status`, `responsavel`, `criado`, `criado_por`, `ip`) VALUES
(31, 20206212, 'TESTE', 'On-Premises', 3, 4, 3, 3, 3, 4, 5, 72, 60, 'MODERADO', 'ATIVO', 'Admin - admin', '2020-05-23 15:22:41', 'admin', '::1'),
(32, 20205271, 'Projeto Fake', 'Hosting', 2, 4, 3, 2, 3, 4, 3, 48, 36, 'POUCO CRÍTICO', 'ATIVO', 'Admin - admin', '2020-05-23 16:07:03', 'admin', '::1'),
(33, 20207004, 'Projeto', 'Hosting', 3, 3, 2, 2, 3, 4, 3, 24, 36, 'SEVERO', 'ATIVO', 'Admin - admin', '2020-05-23 16:13:13', 'admin', '::1'),
(34, 20209180, 'Serviço', 'SaaS', 4, 5, 4, 4, 4, 5, 5, 320, 100, 'CRÍTICO', 'ATIVO', 'Admin - admin', '2020-05-26 17:18:21', 'admin', '::1'),
(35, 20209300, 'Serviço do João', 'Colocation', 4, 4, 3, 4, 3, 4, 4, 192, 48, 'MODERADO', 'ATIVO', 'JOÃƒO - jpedro17', '2020-05-26 17:33:23', 'jpedro17', '::1'),
(36, 20203732, 'Service Name', 'On-Premises', 4, 4, 3, 3, 4, 5, 3, 144, 60, 'SEVERO', 'ATIVO', 'Admin - admin', '2020-05-27 12:36:09', 'admin', '::1'),
(37, 20209354, 'Nome do Projeto', 'Hosting', 2, 4, 2, 3, 4, 4, 4, 48, 64, 'MODERADO', 'ATIVO', 'Admin - admin', '2020-05-27 18:09:58', 'admin', '::1'),
(38, 20204433, 'Servicin', 'IaaS', 4, 5, 4, 4, 3, 5, 5, 320, 75, 'SEVERO', 'ATIVO', 'Admin - admin', '2020-05-27 18:23:58', 'admin', '::1'),
(39, 20205131, 'Service Now', 'IaaS', 4, 5, 3, 2, 3, 3, 3, 120, 27, 'POUCO CRÍTICO', 'ATIVO', 'Admin - admin', '2020-05-27 18:54:09', 'admin', '::1'),
(40, 20202692, 'Serviço do Gestor', 'On-Premises', 4, 3, 4, 5, 4, 5, 5, 240, 100, 'SEVERO', 'ATIVO', 'ANDRÃ‰ - agestor84', '2020-05-29 14:33:33', 'agestor84', '::1'),
(41, 20209561, 'testest', 'SaaS', 3, 4, 3, 2, 3, 4, 3, 48, 36, 'POUCO CRÍTICO', 'ATIVO', 'Admin - admin', '2020-05-29 18:22:09', 'admin', '::1'),
(42, 20206571, 'Serviço Fernando', 'Hosting', 2, 3, 2, 3, 3, 3, 4, 36, 36, 'POUCO CRÍTICO', 'ATIVO', 'FERNANDO - fgestor51', '2020-06-01 18:46:29', 'fgestor51', '::1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alas_hmr_reql`
--

DROP TABLE IF EXISTS `alas_hmr_reql`;
CREATE TABLE IF NOT EXISTS `alas_hmr_reql` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `topico` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `subtopico` varchar(85) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alas_hmr_reql`
--

INSERT INTO `alas_hmr_reql` (`id`, `cod`, `topico`, `subtopico`, `peso`) VALUES
(1, 'REQL1', 'REQUISITOS LEGAIS E REGULATÓRIOS', 'SOMENTE A LGPD', 1),
(2, 'REQL2', 'REQUISITOS LEGAIS E REGULATÓRIOS', 'LGPD E REGULAMENTAÇÃO RESTRITA A NÍVEL LOCAL (MUNICIPAL E/OU ESTADUAL)\r\n', 2),
(3, 'REQL3', 'REQUISITOS LEGAIS E REGULATÓRIOS', 'LGPD E REGULAMENTAÇÃO RESTRITA A NÍVEL NACIONAL (MUNICIPAL, ESTADUAL, FEDERAL)', 3),
(4, 'REQL4', 'REQUISITOS LEGAIS E REGULATÓRIOS', 'LGPD E REGULAMENTAÇÃO A NÍVEL INTERNACIONAL', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alas_hmr_tdat`
--

DROP TABLE IF EXISTS `alas_hmr_tdat`;
CREATE TABLE IF NOT EXISTS `alas_hmr_tdat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `topico` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `subtopico` varchar(85) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alas_hmr_tdat`
--

INSERT INTO `alas_hmr_tdat` (`id`, `cod`, `topico`, `subtopico`, `peso`) VALUES
(1, 'TDAT1', 'TRANSFERÊNCIA DE DADOS', 'SEM TRANSFERÊNCIA DE DADOS PARA FORNECEDOR', 1),
(2, 'TDAT2', 'TRANSFERÊNCIA DE DADOS', 'USO DE PROTOCOLO DE TRANSFERÊNCIA SEGURO PARA FORNECEDOR', 2),
(3, 'TDAT3', 'TRANSFERÊNCIA DE DADOS', 'USO DE PROTOCOLO DE TRANSFERÊNCIA SEGURO ADVINDO DO FORNECEDOR', 3),
(4, 'TDAT4', 'TRANSFERÊNCIA DE DADOS', 'USO DE PROTOCOLO DE TRANSFERÊNCIA INSEGURO PARA E/OU ADVINDO DO FORNECEDOR', 4),
(5, 'TDAT5', 'TRANSFERÊNCIA DE DADOS', 'FORNECEDOR COM ACESSO DIRETO AO AMBIENTE INTERNO', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alas_hmr_users`
--

DROP TABLE IF EXISTS `alas_hmr_users`;
CREATE TABLE IF NOT EXISTS `alas_hmr_users` (
  `id_usuario` int(2) NOT NULL AUTO_INCREMENT,
  `p_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` int(2) NOT NULL,
  `perfil_desc` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `acesso` int(1) NOT NULL,
  `criado` datetime NOT NULL,
  `criado_por` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alas_hmr_users`
--

INSERT INTO `alas_hmr_users` (`id_usuario`, `p_nome`, `u_nome`, `email`, `perfil`, `perfil_desc`, `usuario`, `senha`, `acesso`, `criado`, `criado_por`, `ip`) VALUES
(2, 'Admin', 'dmin', 'admin@email.com', 7, 'Administrador', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, '2020-05-21 13:15:06', 'admin', '::1'),
(72, 'NOVO', 'COMPRAS', 'novo@email2.com', 2, 'SEGURANÇA DA INFORMAÇÃO', 'ncompras25', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-05-29 14:15:47', 'admin', '::1'),
(71, 'NOVOSEXTA', 'NOVO', 'novo@email.com', 1, 'ANALISTA DE COMPRAS', 'nnovo98', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-05-29 14:15:25', 'admin', '::1'),
(46, 'Camila', 'Sant\'Eufemia', 'camila@email.com', 1, 'Analista de Compras', 'csanteufemia21', '26b98176c74ad8d3093cdd30aec6e7c8', 2, '2020-05-26 12:34:14', 'admin', '::1'),
(48, 'Pedro', 'Beijaflore', 'pedro@email.com', 3, 'Analista de Privacidade', 'pbeijaflore35', '9fe93042dc3e7ebcd5d5b3a33f35ec7d', 2, '2020-05-26 15:42:28', 'admin', '::1'),
(49, 'Mariana', 'Werson', 'mariana@email.com', 4, 'Gestor', 'mwerson57', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-05-26 15:42:42', 'admin', '::1'),
(50, 'Lucas', 'Pedro', 'lucaspedro@email.com', 5, 'Riscos de Compliance', 'lpedro95', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-05-26 15:45:32', 'admin', '::1'),
(51, 'Rubens', 'Silva', 'rubens@email.com', 6, 'Riscos de Segurança', 'rsilva52', '5973f2f1fcdd55ac22e0df4d5ba6c3b8', 2, '2020-05-26 15:45:42', 'admin', '::1'),
(52, 'Rubens', 'Informação', 'rubens@email.com', 1, 'Analista de Compras', 'rinformacao96', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-05-26 15:45:56', 'admin', '::1'),
(73, 'OSWALDO', 'TESTE', 'oteste@email.com', 5, 'RISCOS DE COMPLIANCE', 'oteste31', '08e848bd47a4ecc67ac1fd1f8629750e', 2, '2020-05-29 18:21:35', 'admin', '::1'),
(74, 'CARLA', 'MARIA', 'carla@email.com', 3, 'ANALISTA DE PRIVACIDADE', 'cmaria74', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-06-01 18:39:10', 'admin', '::1'),
(75, 'FERNANDO', 'GESTOR', 'fernando@email.com', 4, 'GESTOR', 'fgestor51', 'b7071f0398cc7787b90bdff38e93a579', 2, '2020-06-01 18:42:07', 'admin', '::1'),
(56, 'ANDRÉ', 'ALCÂNTARA', 'andre@gmail.com', 1, 'ANALISTA DE COMPRAS', 'aalcantara96', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-05-26 17:29:53', 'admin', '::1'),
(57, 'LUCAS', 'ALCÂNTARA', 'lucas@gmail.com', 1, 'ANALISTA DE COMPRAS', 'lalcantara18', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-05-26 17:31:12', 'admin', '::1'),
(58, 'JOÃO', 'PEDRO', 'joao@gmail.com', 4, 'GESTOR', 'jpedro17', 'dccd96c256bc7dd39bae41a405f25e43', 2, '2020-05-26 17:32:26', 'admin', '::1'),
(59, 'PAULO', 'SANTANA', 'paulo@email.com', 1, 'ANALISTA DE COMPRAS', 'psantana53', 'dd41cb18c930753cbecf993f828603dc', 2, '2020-05-26 18:12:07', 'admin', '::1'),
(60, 'ANDRÉ', 'COMPRAS', 'acompras@gmail.com', 1, 'ANALISTA DE COMPRAS', 'acompras11', '000ba94d7a99a02f264e3417471f76bc', 2, '2020-05-27 12:21:34', 'admin', '::1'),
(61, 'ANDRÉ', 'PRIVACIDADE', 'aprivacidade@gmail.com', 3, 'ANALISTA DE PRIVACIDADE', 'aprivacidade63', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-05-27 12:21:51', 'admin', '::1'),
(62, 'ANDRÉ', 'GESTOR', 'agestor@gmail.com', 4, 'GESTOR', 'agestor84', '7faad4f58201bd8169c8daa3999ec6b0', 2, '2020-05-27 12:22:08', 'admin', '::1'),
(63, 'ANDRÉ', 'COMPLIANCE', 'acompliance@email.com', 5, 'RISCOS DE COMPLIANCE', 'acompliance59', '769369d1665140cd37dc86c5ecb4270c', 2, '2020-05-27 12:22:25', 'admin', '::1'),
(70, 'PEDRO', 'SANTOS', 'psantos@email.com', 2, 'SEGURANÇA DA INFORMAÇÃO', 'psantos88', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-05-27 18:51:22', 'admin', '::1'),
(65, 'SANTANA', 'ANDRÉ', 'aaaaaa@email.com', 2, 'SEGURANÇA DA INFORMAÇÃO', 'sandre82', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-05-27 12:33:55', 'admin', '::1'),
(66, 'ANDRÉ', 'INFORMAÇÃO', 'ainformacao@gmail.com', 2, 'SEGURANÇA DA INFORMAÇÃO', 'ainformacao93', '036cfcaf8217b5e64fe5c51dba3a757f', 2, '2020-05-27 12:34:25', 'admin', '::1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alas_hmr_volv`
--

DROP TABLE IF EXISTS `alas_hmr_volv`;
CREATE TABLE IF NOT EXISTS `alas_hmr_volv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `topico` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `subtopico` varchar(85) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alas_hmr_volv`
--

INSERT INTO `alas_hmr_volv` (`id`, `cod`, `topico`, `subtopico`, `peso`) VALUES
(1, 'VOLV1', 'VOLUME DE TITULARES INCLUÍDOS', '1 A 100 TITULARES', 1),
(2, 'VOLV2', 'VOLUME DE TITULARES INCLUÍDOS', '100 A 1000 TITULARES', 2),
(3, 'VOLV3', 'VOLUME DE TITULARES INCLUÍDOS', '1000 A 10000 TITULARES', 3),
(4, 'VOLV4', 'VOLUME DE TITULARES INCLUÍDOS', '10000 A 50000 TITULARES', 4),
(5, 'VOLV5', 'VOLUME DE TITULARES INCLUÍDOS', '50000 A 500000 TITULARES', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
