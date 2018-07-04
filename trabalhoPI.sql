-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: trabalhoPI
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) DEFAULT NULL,
  `qrcode` varchar(255) DEFAULT NULL,
  `idingresso` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
INSERT INTO `compra` VALUES (1,101,'904271',2),(2,101,'270542',4),(3,101,'743540',11),(4,101,'287363',11),(5,101,'889007',16),(6,101,'345751',19),(7,100,'893215',17),(8,100,'493959',17),(9,100,'915621',17),(10,100,'742860',17),(11,100,'784502',17),(12,101,'369628',13),(13,100,'203255',17),(14,101,'316660',18),(15,101,'296013',16),(16,101,'879958',12),(17,101,'224947',19),(18,108,'932404',18),(19,109,'267939',19),(20,100,'652072',19),(21,100,'467936',32),(22,100,'949591',17);
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `descricao` text,
  `imagem` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (12,'Jumanji: Bem-Vindo Ã  Selva','Filme','2018-07-09 19:00:00',15,49,'Quatro adolescentes encontram um videogame cuja aÃ§Ã£o se passa em uma floresta tropical. Empolgados com o jogo, eles escolhem seus avatares para o desafio, mas um evento inesperado faz com que eles sejam transportados para dentro do universo fictÃ­cio, transformando-os nos personagens da aventura.','55046e0095a052f770e4d12ea7a25926.jpg'),(13,'Oito Mulheres e um Segredo','Filme','2018-07-04 23:00:00',20,50,'Essa versÃ£o com mulheres promete duelar Ã  altura com os elencos masculinos de Onze Homens e um Segredo â€” contando, inclusive, com o clÃ¡ssico de 1960. Sandra Bullock interpreta Debbie Ocean, uma mulher recÃ©m-saÃ­da da prisÃ£o que planeja o assalto do sÃ©culo em pleno Met Gala, em Nova York. Para isso, ela terÃ¡ o apoio de Lou (Cate Blanchett), Nine Ball (Rihanna), Amita (Mindy Kaling), Constance (Awkwafina), Rose (Helena Bonham Carter), Daphne Kluger (Anne Hathaway) e Tammy (Sarah Paulson).','c9b6665d3c1db46b9d4da78176d2a767.jpg'),(16,'Jurassic World: Reino AmeaÃ§ado','Filme','2018-07-12 13:00:00',25,48,'ApÃ³s o sucesso estrondoso de Jurassic World - O Mundo dos Dinossauros, a franquia jurÃ¡ssica retorna sob o comando do promissor J.A. Bayona (Sete Minutos Depois da Meia-Noite), e novamente com Chris Pratt e Bryce Dallas Howard como um casal improvÃ¡vel, porÃ©m (e por isso mesmo) com uma quÃ­mica divertida.','d0b1c05d211ade953117d7ee6eacc69f.jpeg'),(17,'Os IncrÃ­veis 2','Filme','2018-07-28 12:00:00',12,38,'Quando Helena PÃªra Ã© chamada para voltar a lutar contra o crime como a super-heroÃ­na Mulher-ElÃ¡stica, cabe ao seu marido, Roberto, a tarefa de cuidar das crianÃ§as, especialmente o bebÃª ZezÃ©. O que ele nÃ£o esperava era que o caÃ§ula da famÃ­lia tambÃ©m tivesse superpoderes, que surgem sem qualquer controle.','08bd524913824ddb6e80bec0c0713c2b.jpg'),(18,'Sicario: Dia do Soldado','Filme','2018-07-10 14:00:00',13,32,'O oficial da CIA Matt Graver (Josh Brolin) volta a contactar seu sicÃ¡rio de confianÃ§a, Alejandro Gillick (Benicio Del Toro), desta vez para sequestrar a filha caÃ§ula (Isabella Moner) de um barÃ£o das drogas mexicano. Os famosos cartÃ©is agora sÃ£o considerados cÃ©lulas terroristas e o objetivo da missÃ£o, orientada secretamente pelo alto escalÃ£o do governo, Ã© fazer eclodir uma guerra entre os grupos rivais.','15c633502bc2ee677571587322292b4d.jpeg'),(19,'Venom','Filme','2018-09-04 10:00:00',23,46,'Venom Ã© um futuro filme de aÃ§Ã£o, ficÃ§Ã£o cientÃ­fica, suspense e terror estadunidense de 2018, baseado no personagem da Marvel Comics de mesmo nome, dirigido por Ruben Fleischer e escrito por Scott Rosenberg, Jeff Pinkner, Kelly Marcel e Will Beall.','5ede61f4ab83968e07f4b4e980e0a660.jpg'),(20,'MissÃ£o: ImpossÃ­vel - Efeito Fallout','Filme','2018-07-26 22:00:00',24,50,'As melhores intenÃ§Ãµes muitas vezes voltam para assombrÃ¡-lo. Em MISSÃƒO:IMPOSSÃVEL - EFEITO FALLOUT, Ethan Hunt (Tom Cruise) e sua equipe do IMF (Alec Baldwin, Simon Pegg, Ving Rhames), na companhia de aliados conhecidos (Rebecca Ferguson, Michelle Monaghan), estÃ£o em uma corrida contra o tempo depois que uma missÃ£o dÃ¡ errado. Henry Cavill, Angela Basset e Vanessa Kirby sÃ£o as novidades do elenco, com Christopher McQuarrie de volta Ã  direÃ§Ã£o.','75c687c520cfd6c17768b17995795509.jpeg'),(21,'Homem-Formiga e a Vespa','Filme','2018-07-05 22:00:00',24,50,'Scott Lang lida com as consequÃªncias de suas escolhas tanto como super-herÃ³i quanto como pai. Enquanto tenta reequilibrar sua vida com suas responsabilidades como o Homem-Formiga, ele Ã© confrontado por Hope van Dyne e Dr. Hank Pym com uma nova missÃ£o urgente. Scott deve mais uma vez vestir o uniforme e aprender a lutar ao lado da Vespa, trabalhando em conjunto para descobrir segredos do passado.','8dbb9efa4c9200af098d4fd5a2eed478.jpg'),(23,'SÃ£o Paulo Companhia de DanÃ§a','Danca','2018-07-07 18:00:00',150,299,'SerÃ¡ que o sÃ©culo 19 terÃ¡ 21 anos o repertÃ³rio da Companhia de DanÃ§a (SPCD), que estÃ¡ completando dez anos de existÃªncia. AlÃ©m de ediÃ§Ãµes clÃ¡ssicas, tambÃ©m apresenta criaÃ§Ãµes de coreÃ³grafos contemporÃ¢neos, brasileiros e estrangeiros.','39aac35bb3a66f9c382e2d445d74cb78.jpeg'),(24,'NAITSU NOITES COM MURAKAMI','Danca','2018-07-07 11:00:00',170,140,'Entre segredos e mentiras, que vÃ£o se revelando aos poucos, uma histÃ³ria comeÃ§a com o humor e o sarcasmo quando descobre uma crianÃ§a caÃ§ula de uma famÃ­lia tradicional estÃ¡ grÃ¡vida. A suspeita sobre as sÃ©ries passivas e gestantes ocultas de uma sequÃªncia familiar de revelaÃ§Ãµes.','2103f658ba682e79b49580d3d353f620.jpg'),(25,'SPCD - SuÃ­te de Raymonda; Primavera Fria; Melhor Ãšnico Dia (estreia)','Danca','2018-07-07 15:00:00',80,50,'Em 28 de janeiro de 2018, uma Companhia de DanÃ§a de SÃ£o Paulo completou 10 anos! Tempo de muitas parcerias e encontros; do descortinar de novos mundos; A descoberta do movimento e da entrega de muitas pessoas. A Companhia de Todos NÃ³s! ','8804b653ad901a0e5bf77d9e0bea12f9.jpeg'),(26,'Quatro Coreografias - BalÃ© Jovem de Salvador - VILA NA COPA E COZINHA','Danca','2018-07-07 15:00:00',45,80,'Marcado pelo profundo cunho crÃ­tico de seus espectadores, que refletem sobre a sociedade brasileira e sobre as culturas prÃ³ximas Ã  latina, o BalÃ© Jovem de Salvador apresenta como coreografias O corpo e a cidade, Eleuther, Nos acrÃ©scimos e Outras ','c9a3ddcd4455993177841790fd738eb9.jpeg'),(27,'TURMA DO PAGODE','Festa','2018-07-07 14:00:00',10,57,'O pagode romÃ¢ntico do Turma do Pagode volta ao palco do P12, no dia 21 de julho! \r\nA banda paulista com mais de 15 anos de estrada trarÃ¡ para JurerÃª Internacional os maiores sucessos da carreira, para embalar o pÃºblico com o \'Lancinho\', \'Cobertor de Orelha\' e \'Deixa em Off\', alÃ©m dos grandes sucessos do samba e do pagode nacional. ','8dae709d8c486849b813fdd5d09c0897.jpeg'),(36,'Vingadores: Guerra Infinita','Filme','2018-07-03 22:00:00',25,130,'Homem de Ferro, Thor, Hulk e os Vingadores se unem para combater seu inimigo mais poderoso, o maligno Thanos. Em uma missÃ£o para coletar todas as seis pedras infinitas, Thanos planeja usÃ¡-las para infligir sua vontade malÃ©fica sobre a realidade.','8ce79e1c1fd4f82fed7487d4041a8d11.jpeg');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` char(32) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (100,'admin','Administrador','admin@administrador.com.br','21232f297a57a5a743894a0e4a801fc3',2),(101,'user','Usuario','user@user.com','ee11cbb19052e40b07aac0ca060c23ee',1),(109,'add','add','add@add','34ec78fcc91ffb1e54cd85e4a0924332',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'trabalhoPI'
--

--
-- Dumping routines for database 'trabalhoPI'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-03 23:10:45
