-- MySQL dump 10.16  Distrib 10.1.29-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: sistema_ortodoxo
-- ------------------------------------------------------
-- Server version	10.1.29-MariaDB

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
-- Table structure for table `cadastro_noiva`
--

DROP TABLE IF EXISTS `cadastro_noiva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro_noiva` (
  `id_noiva` int(11) NOT NULL AUTO_INCREMENT,
  `nome_noiva` varchar(60) DEFAULT NULL,
  `cidade_nascimento` varchar(80) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `profissao_noiva` varchar(40) DEFAULT NULL,
  `pai_noiva` varchar(60) DEFAULT NULL,
  `mae_noiva` varchar(60) DEFAULT NULL,
  `residencia_noiva` varchar(60) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `paroquia_batizada` varchar(60) DEFAULT NULL,
  `data_batizada` date DEFAULT NULL,
  `rg_noiva` varchar(25) DEFAULT NULL,
  `matrimonio` varchar(4) DEFAULT NULL,
  `data_matrimonio` date DEFAULT NULL,
  `parentesco` varchar(4) DEFAULT NULL,
  `ligatadura` varchar(4) DEFAULT NULL,
  `fk_noivo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_noiva`),
  KEY `id_fk_noivo` (`fk_noivo`),
  CONSTRAINT `id_fk_noivo` FOREIGN KEY (`fk_noivo`) REFERENCES `cadastro_noivo` (`id_noivo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_noiva`
--

LOCK TABLES `cadastro_noiva` WRITE;
/*!40000 ALTER TABLE `cadastro_noiva` DISABLE KEYS */;
INSERT INTO `cadastro_noiva` VALUES (2,'testedia03_','testedia03_','0303-03-03','testedia03_','testedia03_','','','testedia03_','(03)0330-33030','testedia03_','0000-00-00','testedia03_','Sim','0000-00-00','Sim','NÃ£o',1);
/*!40000 ALTER TABLE `cadastro_noiva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cadastro_noivo`
--

DROP TABLE IF EXISTS `cadastro_noivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro_noivo` (
  `id_noivo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_noivo` varchar(60) DEFAULT NULL,
  `cidade_nascimento` varchar(80) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `profissao_noivo` varchar(40) DEFAULT NULL,
  `pai_noivo` varchar(60) DEFAULT NULL,
  `mae_noivo` varchar(60) DEFAULT NULL,
  `residencia_noivo` varchar(60) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `paroquia_batizado` varchar(60) DEFAULT NULL,
  `data_batizado` date DEFAULT NULL,
  `rg_noivo` varchar(25) DEFAULT NULL,
  `matrimonio` varchar(4) DEFAULT NULL,
  `data_matrimonio` date DEFAULT NULL,
  `parentesco` varchar(4) DEFAULT NULL,
  `vasectomia` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id_noivo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_noivo`
--

LOCK TABLES `cadastro_noivo` WRITE;
/*!40000 ALTER TABLE `cadastro_noivo` DISABLE KEYS */;
INSERT INTO `cadastro_noivo` VALUES (1,'testedia31','testedia31','2017-12-20','testedia31','testedia31','','','testedia31','(31)3131-31313','testedia31','2017-12-19','313131313131','Sim','0000-00-00','Sim','Sim'),(2,'TESTEDIA31_2','TESTEDIA31_2','0000-00-00','TESTEDIA31_2','TESTEDIA31_2','','','TESTEDIA31_2','(31)3131-31313','TESTEDIA31_2','0000-00-00','TESTEDIA31_2','Sim','0000-00-00','Sim','Sim'),(3,'TESTEDIA31_2','TESTEDIA31_2','0044-03-31','TESTEDIA31_2','TESTEDIA31_2','','','TESTEDIA31_2','(32)1312-31233','TESTEDIA31_2','0000-00-00','TESTEDIA31_222','Sim','0000-00-00','Sim','Sim'),(4,'TESTEDIA31_2','TESTEDIA31_2','0000-00-00','TESTEDIA31_2','3131232','','','TESTEDIA31_21','(33)3333-33333','TESTEDIA31_2','0111-03-13','TESTEDIA31_213232321','Sim','0000-00-00','Sim','Sim'),(5,'teste_finish_31','teste_finish_31','0000-00-00','teste_finish_31','teste_finish_31','teste_finish_31','teste_finish_31','teste_finish_31','(31)3131-31313','teste_finish_31','0000-00-00','teste_finish_31','NÃ£o','2018-01-04','Sim','NÃ£o'),(6,'testedia02','testedia02','0000-00-00','testedia02','testedia02','testedia02','testedia02','testedia02','(32)3223-23213','testedia02','3312-02-21','testedia02','NÃ£o','0222-12-22','Sim','Sim'),(7,'testedia_03','testedia_03','0303-03-03','testedia_03','testedia_03','','','testedia_03','(03)0330-03030','testedia_03','3030-03-03','testedia_03','Sim','0000-00-00','Sim','Sim');
/*!40000 ALTER TABLE `cadastro_noivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paroquia_registrada`
--

DROP TABLE IF EXISTS `paroquia_registrada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paroquia_registrada` (
  `id_paroquia` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome_paroquia` varchar(60) DEFAULT NULL,
  `padre_paroquia` varchar(40) DEFAULT NULL,
  `bispo_responsavel` varchar(40) DEFAULT NULL,
  `comunidade_paroquia` varchar(60) DEFAULT NULL,
  `endereco_paroquia` varchar(100) DEFAULT NULL,
  `cep_paroquia` varchar(10) DEFAULT NULL,
  `cidade_paroquia` varchar(50) DEFAULT NULL,
  `estado_paroquia` varchar(2) DEFAULT NULL,
  `telefone_paroquia` varchar(16) DEFAULT NULL,
  `email_paroquia` varchar(60) DEFAULT NULL,
  `site_paroquia` varchar(50) DEFAULT NULL,
  `logo_paroquia` varchar(20) DEFAULT NULL,
  `carimbo_paroquia` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_paroquia`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paroquia_registrada`
--

LOCK TABLES `paroquia_registrada` WRITE;
/*!40000 ALTER TABLE `paroquia_registrada` DISABLE KEYS */;
INSERT INTO `paroquia_registrada` VALUES (15,'testedia21/12','testedia21/12','testedia21/12','','testedia21/12','12333-223','testedia21/12',NULL,'(32)2222-22222','','','logotipo.jpg',NULL),(16,'testedia21','testedia21','testedia21','testedia21','testedia21','22222-222','testedia21',NULL,'(22)2222-22222','','','logotipo',NULL),(17,'testedia21','testedia21','testedia21','testedia21','testedia21','21122-222','testedia21',NULL,'(11)1111-11111','','','logotipo.jpg',NULL),(18,'testedia22','testedia22','testedia22','testedia22','testedia22','12112-211','testedia22',NULL,'(23)1111-11111','','','logotipo.jpg',NULL),(19,'testedia22-2','testedia22-2','testedia22-2','testedia22-2','testedia22-2','23333-113','testedia22-2',NULL,'(23)3344-55554','','','logotipo.jpg',NULL);
/*!40000 ALTER TABLE `paroquia_registrada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teste_date`
--

DROP TABLE IF EXISTS `teste_date`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teste_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_nascimento` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teste_date`
--

LOCK TABLES `teste_date` WRITE;
/*!40000 ALTER TABLE `teste_date` DISABLE KEYS */;
INSERT INTO `teste_date` VALUES (1,'1998-06-07'),(2,'1998-06-07'),(3,'1998-06-07'),(4,'1998-06-07'),(5,'1998-06-07'),(6,'1998-06-07'),(7,'1998-06-07'),(8,'1998-06-07'),(9,'1998-06-07'),(10,'1998-06-07'),(11,'1998-06-07'),(12,'1998-06-07'),(13,'1998-06-07'),(14,'1998-06-07'),(15,'1998-06-07'),(16,'1998-06-07'),(17,'1998-06-07'),(18,'1998-06-07'),(19,'1998-06-07'),(20,'1998-06-07'),(21,'1998-06-07'),(22,'1998-06-07'),(23,'1998-06-07'),(24,'1998-06-07'),(25,'1998-06-07'),(26,'1998-06-07'),(27,'1998-06-07'),(28,'1998-06-07'),(29,'1998-06-07'),(30,'1998-06-07'),(31,'1998-06-07'),(32,'1998-06-07'),(33,'1998-06-07'),(34,'1998-06-07'),(35,'1998-06-07'),(36,'1998-06-07'),(37,'1998-06-07'),(38,'1998-06-07'),(39,'1998-06-07'),(40,'1998-06-07'),(41,'1998-06-07'),(42,'1998-06-07'),(43,'1998-06-07'),(44,'1998-06-07'),(45,'1998-06-07'),(46,'1998-06-07'),(47,'1998-06-07'),(48,'1998-06-07'),(49,'1998-06-07'),(50,'1998-06-07'),(51,'1998-06-07'),(52,'1998-06-07'),(53,'1998-06-07'),(54,'1998-06-07'),(55,'1998-06-07'),(56,'1998-06-07'),(57,'1998-06-07'),(58,'1998-06-07'),(59,'1998-06-07'),(60,'1998-06-07'),(61,'1998-06-07'),(62,'1998-06-07'),(63,'1998-06-07'),(64,'1998-06-07'),(65,'1998-06-07'),(66,'1998-06-07'),(67,'1998-06-07'),(68,'1998-06-07'),(69,'1998-06-07'),(70,'1998-06-07'),(71,'1998-06-07'),(72,'1998-06-07'),(73,'1998-06-07'),(74,'1998-06-07'),(75,'1998-06-07'),(76,'2017-12-13'),(77,'2017-11-15'),(78,'2017-11-15'),(79,'2017-11-15'),(80,'2017-11-15'),(81,'2017-11-15'),(82,'2017-11-15'),(83,'2017-11-15'),(84,'2017-11-15'),(85,'2017-11-15'),(86,'2017-11-15'),(87,'2017-11-15'),(88,'2017-11-29'),(89,'2017-11-29'),(90,'2017-11-29'),(91,'2017-11-29'),(92,'2017-11-29'),(93,'2017-11-29'),(94,'2017-11-29'),(95,'2017-11-29'),(96,'2017-11-29'),(97,'2017-11-29'),(98,'2017-11-29'),(99,'2017-11-29'),(100,'2017-11-29'),(101,'2017-11-29'),(102,'2017-11-29'),(103,'2017-11-29'),(104,'2017-11-29'),(105,'2017-11-29'),(106,'2017-11-29'),(107,'2017-11-29'),(108,'2017-11-29'),(109,'2017-11-29'),(110,'2017-11-29'),(111,'2017-11-29'),(112,'2017-11-29'),(113,'2017-11-29'),(114,'2017-11-29'),(115,'2017-11-29'),(116,'2017-11-29'),(117,'2017-11-29'),(118,'2017-11-29'),(119,'2017-11-29'),(120,'2017-11-29'),(121,'2017-11-29'),(122,'2017-11-29'),(123,'2017-11-29'),(124,'2017-11-29'),(125,'2017-11-29'),(126,'2017-11-29'),(127,'2017-11-29'),(128,'2017-11-29'),(129,'2017-11-29'),(130,'2017-11-29'),(131,'2017-11-29'),(132,'2017-11-29');
/*!40000 ALTER TABLE `teste_date` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testedeimg`
--

DROP TABLE IF EXISTS `testedeimg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testedeimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testedeimg`
--

LOCK TABLES `testedeimg` WRITE;
/*!40000 ALTER TABLE `testedeimg` DISABLE KEYS */;
INSERT INTO `testedeimg` VALUES (13,'8237fb37b20349931beb28d0d24738c9docx'),(14,'3d4a253269de1ab3b9cf9deee8b4a4ab.png'),(15,'612091c6fc1ed4a35e6600dd42f15cfd.png'),(16,'59f8297db705a33fa8dd3b540fe6acb6.jpg'),(17,'d51ffb381a259b85423b80cff7da1404jpg'),(18,'37749049d4305cf6fff7de61636b42bdjpg'),(19,'f2c835dca2a752e69d0fddbf57becf3e.jpg'),(20,'204ba8c2f7ccbfb4b400c073b15f7b5c.jpg'),(21,'2079cc11122e5a8792fa8f2588981774.jpg'),(22,'036c4097ea0bfaf129317ad4ee332871jpg'),(23,'3c6c71851632edea9eff6762b73f4de2jpg'),(24,'e7b04927555e498c4006670c0e9f240cjpg'),(25,'7211a8219889fc84612fd49c84ba9ef1jpg'),(26,'d5ff451f46bceeb3f803ae13f6f33113jpg'),(27,'d94b5572cd84f2dd10e94f34d8350b76jpg'),(28,'287438e8d789222b58cea1ba5ce7c908jpg'),(29,'ffef5a8b41ac6b7cb5901b0954efb23c.jpg'),(30,'bf30e4b49e916c8a606be00dec440c81.jpg'),(31,'c975ba79ba17332d765759f278f0c5fb.jpg'),(32,'adfbb7173c64232fcca98edea0ee9e1b.jpg'),(33,'cae908a003ddc3cf0818a5c52aff3f5djpeg'),(34,'dd9326acf0886f127c34bc33e4c9e21e.png');
/*!40000 ALTER TABLE `testedeimg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Administrador','admin@atomit.com.br','21232f297a57a5a743894a0e4a801fc3',1),(2,'Teste','teste@teste.com','698dc19d489c4e4db73e28a713eab07b',2),(3,'Teste2','teste2@teste.com','698dc19d489c4e4db73e28a713eab07b',3),(4,'Teste3','teste3@teste.com','698dc19d489c4e4db73e28a713eab07b',4);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_iniciacao_crista`
--

DROP TABLE IF EXISTS `usuarios_iniciacao_crista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_iniciacao_crista` (
  `id_iniciacao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `sacramento_batismo` varchar(7) DEFAULT NULL,
  `sacramento_crisma` varchar(7) DEFAULT NULL,
  `sacramento_eucaristia` varchar(11) DEFAULT NULL,
  `nmr_certidao` varchar(150) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `naturalidade` varchar(40) DEFAULT NULL,
  `nome_pai` varchar(60) DEFAULT NULL,
  `nome_mae` varchar(60) DEFAULT NULL,
  `avo_materno` varchar(60) DEFAULT NULL,
  `avo_materna` varchar(60) DEFAULT NULL,
  `avo_paterno` varchar(60) DEFAULT NULL,
  `avo_paterna` varchar(60) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `endereco` varchar(120) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(60) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `telefone` varchar(16) DEFAULT NULL,
  `data_celebracao` date DEFAULT NULL,
  `batizado_paroquia` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id_iniciacao`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_iniciacao_crista`
--

LOCK TABLES `usuarios_iniciacao_crista` WRITE;
/*!40000 ALTER TABLE `usuarios_iniciacao_crista` DISABLE KEYS */;
INSERT INTO `usuarios_iniciacao_crista` VALUES (1,'testedia17/12/2017','batismo','crisma','eucaristia','testedia17/12/2017','2017-11-27','masculino','testedia17/12/2017','','','','','','','','testedia17/12/2017','13999-999','testedia17/12/2017','qo','(11)1111-11111','2017-12-28','Pároquia Téste de São José'),(2,'testediia18/12/2017','NULL','crisma','eucaristia','testediia18/12/2017','1998-06-07','masculino','Boa esperansense','Sidnei Aparecido Covo','Rosana Donizete Valente','Não sei o nome dele','Luzia dos Santos Valente','Ivo Covo','Creunise dos santos covo','kaique.kng@gmail.com','Rua Dr mello peixoto, nº 550, Centro','14930-000','Boa Esperança do Sul','sp','(16)9976-59521','2017-12-18','Pároquia Téste de São José');
/*!40000 ALTER TABLE `usuarios_iniciacao_crista` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-10 17:52:21
