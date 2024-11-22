CREATE DATABASE  IF NOT EXISTS `techwarejp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `techwarejp`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: techwarejp
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `foto` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (2,'Samsung T350 - Monitor Gamer, 24\", FHD, 75Hz, HDMI, VGA, Fre',539.90,'','assets/photos/products/monitor1.png'),(3,'Monitor para PC Full HD UltraWide LG LED IPS 29” - 29WK600, ',478.45,'','assets/photos/products/monitor2.png'),(4,'Mouse Gamer Sem Fio Logitech G703 LIGHTSPEED com RGB LIGHTSY',124.45,'','assets/photos/products/mouse1.png'),(5,' Teclado HyperX Alloy Origins PBT Red BLACK',247.25,'','assets/photos/products/teclado1.png'),(6,'JBL, Fone de Ouvido Sem Fio, Tune Buds, Bluetooth 5.3',143.99,'','assets/photos/products/fone1.png'),(7,'Pc Gamer Computador Cpu Intel I5 HD 1TB Memoria Ram 16GB',2420.99,'','assets/photos/products/cpu2.png'),(8,'Teclado Gamer Rise Mode G1 Full, Rgb Rainbow, USB',420.99,'','assets/photos/products/teclado2.png'),(9,'Pc Gamer Intel Core I7 6700 SSD 1TB 32GB RAM',1290.99,'','assets/photos/products/cpu1.png'),(10,'Cadeira Gamer Ninja Hiryu, Preto e Vermelho',349.90,'','assets/photos/products/cadeira2.png'),(11,'Cadeira Gamer Colorida, Preto, Vermelho, Verde e Amarelo',400.90,'','assets/photos/products/cadeira1.png'),(12,'Cadeira Gamer Vermelha, Confortavel',520.99,'','assets/photos/products/cadeira3.png'),(13,'Controle Gamer Preto, Bluetooth, Bateria e USB',99.99,'','assets/photos/products/controle.png'),(14,'Mesa Gamer, Tamanho Pequeno, Feita de Madeira',599.99,'','assets/photos/products/mesa1.png'),(15,'Mesa Gamer e Cadeira Gamer, Tamanho Pequeno, Minimalista',999.99,'','assets/photos/products/mesacadeira1.png'),(16,'Controle Gamer, Preto, Com Carregador',199.99,'','assets/photos/products/controle1.png'),(17,'PC Gamer Completo, Teclado, Mouse, CPU i7, 16 RAM',2199.99,'','assets/photos/products/pc.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `senha` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'teste','teste@gmail.com','00000000000','000.000.000','44444444','aaaaaaaaaaaa','123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-24 19:34:37
