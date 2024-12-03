-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: techwarejp
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `produto_id` (`produto_id`),
  CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinho`
--

LOCK TABLES `carrinho` WRITE;
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
INSERT INTO `carrinho` VALUES (20,2,'teste@gmail.com ',1);
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `foto` varchar(60) DEFAULT NULL,
  `marca` text DEFAULT NULL,
  `dimensoes` text DEFAULT NULL,
  `peso` text DEFAULT NULL,
  `cor` text DEFAULT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (2,'Samsung T350 - Monitor Gamer, 24\", FHD, 75Hz, HDMI, VGA, Fre',539.90,'','assets/photos/products/monitor1.png','Samsung','24\"','3,9kg','Preto com detalhes cinza'),(3,'Monitor para PC Full HD UltraWide LG LED IPS 29” - 29WK600, ',478.45,'','assets/photos/products/monitor2.png','LG',' 29”','4,7kg','Preto'),(4,'Mouse Gamer Sem Fio Logitech G703 LIGHTSPEED com RGB LIGHTSY',124.45,'','assets/photos/products/mouse1.png','Logitech','15x5 centímetros','87g','Preto com iluminação RGB'),(5,' Teclado HyperX Alloy Origins PBT Red BLACK',247.25,'','assets/photos/products/teclado1.png','HyperX','Teclado 100% keyboard','1,2kg','Preto com iluminação RGB'),(6,'JBL, Fone de Ouvido Sem Fio, Tune Buds, Bluetooth 5.3',143.99,'','assets/photos/products/fone1.png','JBL','8x5 cm','15g','Preto'),(7,'Pc Gamer Computador Cpu Intel I5 HD 1TB Memoria Ram 16GB',2420.99,'','assets/photos/products/cpu2.png','Processador INTEL','40x45 cm','24kg','Preto com iluminação azul em toda sua estrutura'),(8,'Teclado Gamer Rise Mode G1 Full, Rgb Rainbow, USB',420.99,'','assets/photos/products/teclado2.png','Rise','Teclado 75%','1kg','Preto com iluminação RGB'),(9,'Pc Gamer Intel Core I7 6700 SSD 1TB 32GB RAM',1290.99,'','assets/photos/products/cpu1.png','Processador INTEL','45x50cm','27kg','Preto com iluminação branca'),(10,'Cadeira Gamer Ninja Hiryu, Preto e Vermelho',349.90,'','assets/photos/products/cadeira2.png','Ninja Hiryu','- Tamanho total: 125cm','16kg (peso máximo suportado: 150kg)','Preto e Vermelho'),(11,'Cadeira Gamer Corsair Colorida, Preto, Vermelho, Verde e Ama',400.90,'','assets/photos/products/cadeira1.png','Corsair','- Tamanho total: 125cm','18kg (peso máximo suportado: 150kg)','Preto, Vermelho, Verde e Amarelo'),(12,'Cadeira Gamer Pichau Vermelha, Confortavel',520.99,'','assets/photos/products/cadeira3.png','Pichau','- Tamanho total: 127cm','16kg','Vermelha'),(13,'Controle Gamer Preto 8BITDO, Bluetooth, Bateria e USB',99.99,'','assets/photos/products/controle.png','8BITDO','Dimensões da embalagem ‏ : ‎ 16,51 x 13,69 x 8,41 cm','610g','Preto'),(14,'Mesa Gamer, Tamanho Pequeno, Feita de Madeira',599.99,'','assets/photos/products/mesa1.png','Tramontina (MADEIRA MDF)','80x30','19,5kg','Branca'),(15,'Kit Mesa Gamer e Cadeira Gamer Elements, Tamanho Pequeno',999.99,'','assets/photos/products/mesacadeira1.png','Elements','Mesa: 75x45\r\n- Tamanho total Cadeira: 124.5cm','Peso Mesa: 18kg\r\nPeso Cadeira: 15.3kg','Mesa: Branco\r\nCadeira: Preto'),(16,'Controle Gamer Playstation, Preto, Com Base Carregadora',199.99,'','assets/photos/products/controle1.png','Playstation','Dimensões da embalagem ‏ : ‎ 18,55 x 14,79 x 9,45 cm','680g','Preto'),(17,'PC Gamer CPU i9, 16 RAM, 3080, SSD 1TB',2199.99,'','assets/photos/products/pc.jpg','Montado pela TechWare','50x58 cm','23kg','Preto');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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

-- Dump completed on 2024-12-02 23:42:53
