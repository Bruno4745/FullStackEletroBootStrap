-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: fullstackeletro
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentario` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcomentario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT INTO `comentario` VALUES (1,'Bruno Gouveia','g','2020-11-02 18:31:43'),(2,'Aaaa','FDASDGDDG','2020-11-03 17:52:54'),(3,'Bruno Gouveia','a','2020-11-03 21:49:17'),(4,'dada','adsdada','2020-11-03 21:52:41');
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `idpedidos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(45) NOT NULL,
  `endereco` varchar(90) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `nome_produto` varchar(150) NOT NULL,
  `valor_unit` decimal(8,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_total` decimal(8,2) NOT NULL,
  PRIMARY KEY (`idpedidos`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,'teste','teste','11111','Geladeira Brastemp Frost Free Duplex 375 litros Inox',2384.10,1,2384.10),(2,'teste2','teste2','2313231','FogÃ£o Consul 4 bocas cor Inox',979.00,2,1958.00);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `descricao` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `precofinal` decimal(8,2) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem_UNIQUE` (`imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'geladeira','Geladeira Brastemp Frost Free Duplex 375 litros Inox',3479.00,2384.10,'imagens/produtos/geladeira_brastemp.png'),(2,'lavadouraroupa','Lavadoura de Roupas Samsung WD4000 Inox Look - 11kg',4359.00,3299.00,'imagens/produtos/lavaroupa_samsung.png'),(3,'microondas','Micro-ondas Brastemp 38L com Grill Ative',1567.90,879.90,'imagens/produtos/microondas_brastemp.png'),(4,'microondas','Micro-ondas Electrolux MS37R',599.00,539.10,'imagens/produtos/microondas_electrolux.png'),(5,'fogao','Fogão 5 Bocas Brastemp',1599.00,1394.10,'imagens/produtos/fogao_brastemp.png'),(6,'lavalouca','Lava Louças Electrolux 8 Servicos',3129.00,2799.00,'imagens/produtos/lavalouca_selectrolux.png'),(7,'geladeira','Geladeira Consul CRE44AK Frost Free Duplex',2879.00,2591.10,'imagens/produtos/geladeira_consul.png'),(8,'lavalouca','Lava Louças 14 Serviços Brastemp',5229.00,3397.20,'imagens/produtos/lavalouca_sbrastemp.png'),(9,'geladeira','Geladeira Cycle Defrost Inox 475L Electrolux',3339.00,2699.00,'imagens/produtos/geladeira_eletrolux.png'),(10,'fogao','Fogão Consul 4 bocas cor Inox',1059.00,979.00,'imagens/produtos/fogao_consul.png'),(11,'lavadouraroupa','Lavadora de Roupas Electrolux Automática 13kg',1699.00,1499.00,'imagens/produtos/lavaroupa_eletrolux.png'),(12,'microondas','Micro-ondas Philco 26L',629.00,499.00,'imagens/produtos/microondas_philco.png');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'fullstackeletro'
--

--
-- Dumping routines for database 'fullstackeletro'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-06 20:29:43
