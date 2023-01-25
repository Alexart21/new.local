-- MariaDB dump 10.19  Distrib 10.6.7-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ssolo_m
-- ------------------------------------------------------
-- Server version	10.6.7-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `descrition` varchar(500) NOT NULL,
  `last_mod` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page` (`page`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'index','\n    test','Кухни в Чебоксарах','Мебель на заказ в Чебоксарах','Мебель на заказ в Чебоксарах',1627801020),(3,'kupe','тест','Шкафы купе в Чебоксарах \"обычные\" и радиусные шкафы купе','Шкафы купе','Частый и рекомендуемый вариант – купить шкаф-купе. Он даст возможность самым оптимальным образом использовать каждую единицу объема Вашего жилья для хранения чего бы то ни было.',1627801057),(4,'kitchen','<h2>Кухни от <i>Design21</i></h2>','Дизайн кухонной мебели в Чебоксарах','Кухни','Кухни в Чебоксарах',1627800961),(5,'racks','<section>\r\n<h1 class=\"header_shadow center-text\">Гардеробная от <i>Aristo-SGA</i></h1>\r\n<p>\r\nВсякая хозяйка, пожалуй, мечтает о вместительной и удобной гардеробной \r\nс достаточным количеством вешалок, стеллажей, \r\nполок и ящиков где все вещи доступны на расстоянии вытянутой руки.\r\n</p>\r\n<p>\r\nВ большинстве своем гардеробная классифицируется как открытая или закрытая.\r\nВ каталоге компании Aristo-SGA представлены оба вида.С применяемыми нами профилями\r\nи фурнитурой Ваша гардеробная комната примет тот практичный вид , какой Вы задумали.\r\nМы поможем Вам воплотить объемную изнутри систему при минимальных площадях помещения.\r\n</p>\r\n</section>','Дизайн гардеробной в Чебоксарах','Гардеробная прихожая','В большинстве своем гардеробная классифицируется как открытая или закрытая.В каталоге компании Aristo-SGA представлены оба вида',1627800891),(8,'lkupe','test','Шкафы-купе','Шкафы-купе','Шкафы-купе',1627800910),(9,'wall','стенки','Стенки','Стенки','Стенки',1627800888),(10,'office','office','office','office','office',1627800977),(11,'childrens','childrens','childrens','childrens','childrens',1627801070),(12,'hall','hall','hall','hall','hall',1627801029),(13,'bedroom','\n    bedroom','bedroom','bedroom','bedroom',1627800974);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galery`
--

DROP TABLE IF EXISTS `galery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  `timestamp` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `full_text` text NOT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `price` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galery`
--

LOCK TABLES `galery` WRITE;
/*!40000 ALTER TABLE `galery` DISABLE KEYS */;
INSERT INTO `galery` VALUES (1,'kitchen',1627800978,'Кухня бостон.Эмаль + шпон','','','Кухня бостон.Эмаль + шпон','100 000'),(2,'kitchen',1627801055,'Кухня в классическом стиле.','','','Кухня в классическом стиле.',''),(3,'kitchen',1627801102,'Кухня. Фасады пластик.\"Фартук\" с фотопечатью.','','','Кухня. Фасады пластик.\"Фартук\" с фотопечатью.',''),(4,'kitchen',1627800994,'Кухня в классическом стиле','','','Кухня в классическом стиле',''),(5,'kitchen',1627801021,'Кухня с барной стойкой.Фасады пластик.','','','Кухня с барной стойкой.Фасады пластик.',''),(6,'kitchen',1627801068,'Кухня в классическом стиле','','','Кухня в классическом стиле',''),(7,'kitchen',1627800917,'Кухня с пластиковыми фасадами','','','Кухня с пластиковыми фасадами',''),(8,'kitchen',1627801003,'Кухня в классическом стиле.Фасады массив березы.','','','Кухня в классическом стиле.Фасады массив березы.',''),(9,'kitchen',1627800897,'Кухня с фасадами с фотопечатью.','','','Кухня с фасадами с фотопечатью.',''),(10,'kitchen',1627801053,'Кухня фасады МДФ эмаль - краска','','','Кухня фасады МДФ эмаль - краска',''),(11,'kitchen',1627800906,'Кухня в классическом стиле','','','Кухня в классическом стиле',''),(12,'kitchen',1627800873,'Кухня с пластиковыми фасадами','','','Кухня с пластиковыми фасадами',''),(13,'kitchen',1627801077,'Кухня с пластиковыми фасадами','','','Кухня с пластиковыми фасадами',''),(14,'kitchen',1627800906,'Кухня в классическом стиле.','','','Кухня в классическом стиле.',''),(15,'kitchen',1627800975,'Кухня в классическом стиле.','','','Кухня в классическом стиле.',''),(16,'kitchen',1627801016,'Кухня.Фасады пластик.','','','Кухня.Фасады пластик.',''),(17,'kitchen',1627800886,'Кухня с пластиковыми фасадами.','','','Кухня с пластиковыми фасадами.',''),(18,'kitchen',1627800933,'Кухня фасады пластик, шпон','','','Кухня фасады пластик, шпон','100 000'),(19,'kupe',1627800927,'Радиусный шкаф-купе 1','','','Радиусный шкаф-купе 1','100 000'),(20,'kupe',1627801011,'Радиусный шкаф-купе 2','','','Радиусный шкаф-купе 2',''),(21,'kupe',1627800895,'Радиусный шкаф-купе 3','','','Радиусный шкаф-купе 3',''),(22,'kupe',1627800895,'Радиусный шкаф-купе 4','','','Радиусный шкаф-купе 4',''),(23,'kupe',1627801009,'Радиусный шкаф-купе 5','','','Радиусный шкаф-купе 5',''),(24,'kupe',1627801073,'Радиусный шкаф-купе 6','','','Радиусный шкаф-купе 6',''),(25,'kupe',1627801028,'Радиусный шкаф-купе 7','','','Радиусный шкаф-купе 7',''),(26,'kupe',1627800932,'Радиусный шкаф-купе 8','','','Радиусный шкаф-купе 8',''),(27,'kupe',1627800960,'Радиусный шкаф-купе 9','','','Радиусный шкаф-купе 9',''),(28,'kupe',1627800882,'Радиусный шкаф-купе 10','','','Радиусный шкаф-купе 10',''),(29,'kupe',1627800985,'Радиусный шкаф-купе 11','','','Радиусный шкаф-купе 11',''),(30,'kupe',1627801093,'Радиусный шкаф-купе 12','','','Радиусный шкаф-купе 12',''),(31,'kupe',1627801045,'Радиусный шкаф-купе 13','','','Радиусный шкаф-купе 13',''),(32,'kupe',1627801094,'Радиусный шкаф-купе 14','','','Радиусный шкаф-купе 14',''),(33,'kupe',1627800874,'Радиусный шкаф-купе 15','','','Радиусный шкаф-купе 15',''),(34,'kupe',1627800911,'Радиусный шкаф-купе 16','','','Радиусный шкаф-купе 16',''),(35,'kupe',1627800904,'Радиусный шкаф-купе 17','','','Радиусный шкаф-купе 17',''),(36,'kupe',1627801011,'Радиусный шкаф-купе 18','','','Радиусный шкаф-купе 18',''),(37,'kupe',1627800961,'Радиусный шкаф-купе 19','','','Радиусный шкаф-купе 19',''),(39,'lkupe',1627800871,'Шкаф-купе фото1','','','Шкаф-купе фото1',''),(40,'wall',1627801091,'Стенка фото1','','','',''),(41,'office',1627800958,'Офисная мебель фото1','','стол  + 2 шкафа','Офисная мебель фото1','36 000'),(42,'childrens',1627801012,'Детская комната фото1','','','Детская комната',''),(44,'hall',1627801105,'Прихожая фото1','','','Прихожая фото1',''),(45,'bedroom',1627800903,'Спальная комната фото1','','','',''),(46,'bedroom',1627801102,'Спальная комната фото2','','','',''),(48,'lkupe',1627801053,'Шкаф-купе фото2','','','',''),(49,'lkupe',1627800989,'Шкаф-купе фото3','','','',''),(50,'lkupe',1627801054,'Шкаф-купе фото4','','','',''),(51,'lkupe',1627800936,'Шкаф-купе фото5','','','',''),(52,'lkupe',1627800876,'Шкаф-купе фото6','','','Шкаф-купе фото6',''),(53,'lkupe',1627801032,'Шкаф-купе фото7','','','',''),(54,'lkupe',1627800871,'Шкаф-купе фото8','','','',''),(55,'lkupe',1627801061,'Шкаф-купе фото9','','','',''),(56,'lkupe',1627800927,'Шкаф-купе фото10','','','',''),(57,'lkupe',1627800920,'Шкаф-купе фото11','','','',''),(58,'lkupe',1627800980,'Шкаф-купе фото12','','','',''),(59,'lkupe',1627800977,'Шкаф-купе фото13','','','',''),(60,'lkupe',1627800944,'Шкаф-купе фото14','','','Шкаф-купе фото14',''),(61,'lkupe',1627800999,'Шкаф-купе фото15','','','',''),(62,'lkupe',1627801085,'Шкаф-купе фото16','','','',''),(63,'lkupe',1627801107,'Шкаф-купе фото17','','','',''),(64,'lkupe',1627800888,'Шкаф-купе фото18','','','',''),(65,'lkupe',1627800993,'Шкаф-купе фото19','','','',''),(66,'lkupe',1627801097,'Шкаф-купе фото20','','','',''),(67,'lkupe',1627801091,'Шкаф-купе фото21','','','',''),(68,'lkupe',1627801038,'Шкаф-купе фото22','','','',''),(69,'lkupe',1627800878,'Шкаф-купе фото23','','','',''),(70,'lkupe',1627801005,'Шкаф-купе фото24','','','',''),(71,'wall',1627800923,'Стенка фото2','','','',''),(72,'wall',1627801011,'Стенка фото3','','','',''),(73,'wall',1627801104,'Стенка фото4','','','',''),(74,'wall',1627800999,'Стенка фото5','','супер  стенка','Стенка фото5','37 000'),(75,'wall',1627800928,'Стенка фото6','','','',''),(76,'wall',1627800911,'Стенка фото7','','','',''),(78,'childrens',1627801017,'Детская комната фото2','','','',''),(79,'childrens',1627800950,'Детская комната фото3','','','',''),(80,'childrens',1627801092,'Детская комната фото4','','','',''),(81,'childrens',1627801107,'Детская комната фото5','','','',''),(82,'hall',1627800957,'Прихожая фото2','','','',''),(83,'hall',1627801061,'Прихожая фото3','','','',''),(84,'hall',1627800881,'Прихожая фото4','','','',''),(85,'hall',1627800919,'Прихожая фото5','','','',''),(86,'hall',1627801058,'Прихожая фото6','','','',''),(87,'hall',1627801087,'Прихожая фото7','','','Прихожая фото7',''),(88,'bedroom',1627801033,'Спальная комната фото3','','краткое описание','Спальная комната фото3','');
/*!40000 ALTER TABLE `galery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` int(11) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `itemId` (`itemId`),
  KEY `isMain` (`isMain`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'Galeries/Galery1/5a2d0f.jpg',1,0,'Galery','b580d906cb-2',''),(2,'Galeries/Galery2/5d964e.jpg',2,0,'Galery','300fec618d-2',''),(3,'Galeries/Galery3/455ebf.jpg',3,0,'Galery','f0819e9328-2',''),(4,'Galeries/Galery4/c4fc2e.jpg',4,0,'Galery','4a54969d19-2',''),(5,'Galeries/Galery5/073724.jpg',5,0,'Galery','e41045d8f9-2',''),(6,'Galeries/Galery6/91ede1.jpg',6,0,'Galery','eb32438403-2',''),(7,'Galeries/Galery7/455330.jpg',7,0,'Galery','d9ea118d6c-2',''),(8,'Galeries/Galery8/f943dd.jpg',8,0,'Galery','1513109bb1-2',''),(9,'Galeries/Galery9/bbc751.jpg',9,0,'Galery','e7588c02a6-2',''),(10,'Galeries/Galery10/9ea955.jpg',10,0,'Galery','8ad93a29a0-2',''),(11,'Galeries/Galery11/082a80.jpg',11,0,'Galery','27a0e934f4-2',''),(12,'Galeries/Galery12/ee3738.jpg',12,0,'Galery','a641ce1dc8-2',''),(13,'Galeries/Galery13/24c8f3.jpg',13,0,'Galery','17fd5f516d-2',''),(14,'Galeries/Galery14/fbc5b7.jpg',14,0,'Galery','b0af9ed639-2',''),(15,'Galeries/Galery15/4eaacb.jpg',15,0,'Galery','5527cf57f2-2',''),(16,'Galeries/Galery16/f15aea.jpg',16,0,'Galery','4c16cf85d5-2',''),(17,'Galeries/Galery17/079c33.jpg',17,0,'Galery','22f6f82d6b-2',''),(18,'Galeries/Galery18/62455a.jpg',18,0,'Galery','a5a0eaf1b3-2',''),(19,'Galeries/Galery19/353933.jpg',19,0,'Galery','d48c289be8-2',''),(20,'Galeries/Galery20/bfce32.jpg',20,0,'Galery','eb7b30d0f6-2',''),(21,'Galeries/Galery21/de1c96.jpg',21,0,'Galery','c908a7198b-2',''),(22,'Galeries/Galery22/01b3aa.jpg',22,0,'Galery','02def1a820-2',''),(23,'Galeries/Galery23/af8d6c.jpg',23,0,'Galery','7fd0c64d23-2',''),(24,'Galeries/Galery24/e11344.jpg',24,0,'Galery','c26200d7ea-2',''),(25,'Galeries/Galery25/a74c24.jpg',25,0,'Galery','db167621a8-2',''),(26,'Galeries/Galery26/aa6dfc.jpg',26,0,'Galery','6ea6e28340-2',''),(27,'Galeries/Galery27/743ac4.jpg',27,0,'Galery','5edc01adf7-2',''),(28,'Galeries/Galery28/4fcbe6.jpg',28,0,'Galery','5194186d78-2',''),(29,'Galeries/Galery29/54be73.jpg',29,0,'Galery','539fe1c0e4-2',''),(30,'Galeries/Galery30/124d81.jpg',30,0,'Galery','11927e21a9-2',''),(31,'Galeries/Galery31/ac336b.jpg',31,0,'Galery','a0e7024c70-2',''),(32,'Galeries/Galery32/8bc19d.jpg',32,0,'Galery','0a89788346-2',''),(33,'Galeries/Galery33/a948e0.jpg',33,0,'Galery','42f47d3a17-2',''),(34,'Galeries/Galery34/7cb0b5.jpg',34,0,'Galery','f4a74a9df9-2',''),(35,'Galeries/Galery35/e67426.jpg',35,0,'Galery','c82d768893-2',''),(36,'Galeries/Galery36/03099f.jpg',36,0,'Galery','b8e1eb8d8f-2',''),(37,'Galeries/Galery37/ed5caf.jpg',37,0,'Galery','483bafc81d-2',''),(39,'Galeries/Galery39/a8008b.jpg',39,0,'Galery','87007fc87b-2',''),(40,'Galeries/Galery40/d38e16.jpg',40,0,'Galery','c1ca884806-2',''),(41,'Galeries/Galery41/23947f.jpg',41,0,'Galery','9898c8151d-3',''),(42,'Galeries/Galery42/0c3b8c.jpg',42,0,'Galery','b9cfcaa6b8-2',''),(43,'Galeries/Galery44/802a0d.jpg',44,0,'Galery','a5476024ce-3',''),(44,'Galeries/Galery45/6396c9.jpg',45,0,'Galery','220a2bf07a-3',''),(45,'Galeries/Galery45/fcf00d.jpg',45,0,'Galery','4e73ecd5c5-2',''),(46,'Galeries/Galery44/5ee8ea.jpg',44,0,'Galery','4844bc252e-2',''),(47,'Galeries/Galery46/af9aa4.jpg',46,0,'Galery','c4ab74f03b-3',''),(48,'Galeries/Galery46/c26d93.jpg',46,0,'Galery','befc7e4995-2',''),(50,'Galeries/Galery39/45a9c0.jpg',39,1,'Galery','afcdc3d7ad-1',''),(51,'Galeries/Galery48/171322.jpg',48,1,'Galery','fc7dad5110-1',''),(52,'Galeries/Galery49/e363cd.jpg',49,1,'Galery','017060549d-1',''),(53,'Galeries/Galery50/506229.jpg',50,1,'Galery','78dac0422a-1',''),(54,'Galeries/Galery51/667b08.jpg',51,1,'Galery','b1c8082c45-1',''),(55,'Galeries/Galery52/03b565.jpg',52,1,'Galery','86d163d051-1',''),(56,'Galeries/Galery53/8f1dad.jpg',53,1,'Galery','08f99ee759-1',''),(57,'Galeries/Galery54/1e864a.jpg',54,1,'Galery','dd7f9d3d6d-1',''),(58,'Galeries/Galery55/9d505c.jpg',55,1,'Galery','0cb8f77bf6-1',''),(59,'Galeries/Galery56/62c91c.jpg',56,1,'Galery','341f16f243-1',''),(60,'Galeries/Galery57/8040f6.jpg',57,1,'Galery','d389f88ec9-1',''),(61,'Galeries/Galery58/dcfe99.jpg',58,1,'Galery','115448da72-1',''),(62,'Galeries/Galery59/63dd01.jpg',59,1,'Galery','1e8d80de2f-1',''),(63,'Galeries/Galery60/3b6f5b.jpg',60,1,'Galery','ceb2ae28e9-1',''),(64,'Galeries/Galery61/ac961f.jpg',61,1,'Galery','a50441e220-1',''),(65,'Galeries/Galery62/0f44c0.jpg',62,1,'Galery','cd7359e89b-1',''),(66,'Galeries/Galery63/264674.jpg',63,1,'Galery','6eea84f963-1',''),(67,'Galeries/Galery64/710526.jpg',64,1,'Galery','f2fb5a13f1-1',''),(68,'Galeries/Galery65/88cb45.jpg',65,1,'Galery','61fce95c81-1',''),(69,'Galeries/Galery66/86338f.jpg',66,1,'Galery','f73346ffec-1',''),(70,'Galeries/Galery67/9e1e8d.jpg',67,1,'Galery','679033982c-1',''),(71,'Galeries/Galery68/0d6399.jpg',68,1,'Galery','8ed1972e9b-1',''),(72,'Galeries/Galery69/332ae2.jpg',69,1,'Galery','461379ad4a-1',''),(73,'Galeries/Galery70/59d93a.jpg',70,1,'Galery','4377a52941-1',''),(74,'Galeries/Galery40/5eb65d.jpg',40,1,'Galery','122ef253fe-1',''),(75,'Galeries/Galery71/ada2fd.jpg',71,1,'Galery','7c8e358c5d-1',''),(76,'Galeries/Galery72/4bf018.jpg',72,1,'Galery','dfdc285d42-1',''),(77,'Galeries/Galery73/4c7ab0.jpg',73,1,'Galery','a5023c59ef-1',''),(78,'Galeries/Galery74/72a447.jpg',74,1,'Galery','c479b1c75d-1',''),(79,'Galeries/Galery75/381625.jpg',75,1,'Galery','850d63b932-1',''),(80,'Galeries/Galery76/62322f.jpg',76,1,'Galery','b0cd14978f-1',''),(82,'Galeries/Galery42/44c918.jpg',42,1,'Galery','2e4cb0b9e3-1',''),(83,'Galeries/Galery78/265317.jpg',78,1,'Galery','8231e26bf3-1',''),(84,'Galeries/Galery79/2ce6d5.jpg',79,1,'Galery','21c18153e0-1',''),(85,'Galeries/Galery80/b0e03c.jpg',80,1,'Galery','12f92eb566-1',''),(86,'Galeries/Galery81/ce7e9a.jpg',81,1,'Galery','9e8e748ce7-1',''),(87,'Galeries/Galery44/385cc1.jpg',44,1,'Galery','f7c0446857-1',''),(88,'Galeries/Galery82/b0a129.jpg',82,1,'Galery','05ed252c80-1',''),(89,'Galeries/Galery83/2ffc49.jpg',83,1,'Galery','b370a07e59-1',''),(90,'Galeries/Galery84/e200e9.jpg',84,1,'Galery','30089fc378-1',''),(91,'Galeries/Galery85/c0b583.jpg',85,1,'Galery','f3ef258340-1',''),(92,'Galeries/Galery86/5a1bf1.jpg',86,1,'Galery','2be67d0bd0-1',''),(93,'Galeries/Galery87/e85557.jpg',87,1,'Galery','7e7375fecc-1',''),(94,'Galeries/Galery45/224450.jpg',45,1,'Galery','d1711d6c04-1',''),(95,'Galeries/Galery46/2bdf92.jpg',46,1,'Galery','689bf66233-1',''),(96,'Galeries/Galery88/023e58.jpg',88,0,'Galery','bacedc0a20-3',''),(98,'Galeries/Galery1/709df3.jpg',1,1,'Galery','71a4919ce1-1',''),(99,'Galeries/Galery2/bc2882.jpg',2,1,'Galery','bd5f81129d-1',''),(100,'Galeries/Galery3/2fa207.jpg',3,1,'Galery','373157c84b-1',''),(101,'Galeries/Galery4/a91a49.jpg',4,1,'Galery','b2ce2d9480-1',''),(102,'Galeries/Galery5/2d5b8d.jpg',5,1,'Galery','f9a5f44011-1',''),(103,'Galeries/Galery6/637429.jpg',6,1,'Galery','4c14f655f9-1',''),(104,'Galeries/Galery7/6695dc.jpg',7,1,'Galery','d0964310b9-1',''),(105,'Galeries/Galery8/666f6b.jpg',8,1,'Galery','0bb3ba2efa-1',''),(106,'Galeries/Galery9/937b15.jpg',9,1,'Galery','7bab82b7e9-1',''),(107,'Galeries/Galery10/d49c87.jpg',10,1,'Galery','6aa013ee44-1',''),(108,'Galeries/Galery11/e46d56.jpg',11,1,'Galery','175c02ed16-1',''),(109,'Galeries/Galery12/8c5b24.jpg',12,1,'Galery','4a3413da00-1',''),(110,'Galeries/Galery13/1f95eb.jpg',13,1,'Galery','849db261f5-1',''),(111,'Galeries/Galery14/db5ffc.jpg',14,1,'Galery','3e5188ce0d-1',''),(112,'Galeries/Galery15/03a407.jpg',15,1,'Galery','ac8ef4dbb9-1',''),(113,'Galeries/Galery16/b31b3c.jpg',16,1,'Galery','fe7c8238c7-1',''),(114,'Galeries/Galery17/24e6e7.jpg',17,1,'Galery','381b48b39b-1',''),(115,'Galeries/Galery18/d174d9.jpg',18,1,'Galery','0fc0499f0a-1',''),(116,'Galeries/Galery19/7ff575.jpg',19,1,'Galery','7e86327906-1',''),(117,'Galeries/Galery20/1afe48.jpg',20,1,'Galery','3c7218dab2-1',''),(118,'Galeries/Galery21/7f2d5f.jpg',21,1,'Galery','8788eeda3e-1',''),(119,'Galeries/Galery22/17e62a.jpg',22,1,'Galery','2ceade0eb5-1',''),(120,'Galeries/Galery23/09528f.jpg',23,1,'Galery','789f4967ad-1',''),(121,'Galeries/Galery24/911e29.jpg',24,1,'Galery','ba8a53c8b6-1',''),(122,'Galeries/Galery25/c32e11.jpg',25,1,'Galery','66851155b8-1',''),(123,'Galeries/Galery26/03ada4.jpg',26,1,'Galery','327d23742b-1',''),(124,'Galeries/Galery27/e06b3f.jpg',27,1,'Galery','d9c6f6b33f-1',''),(125,'Galeries/Galery28/ab58ef.jpg',28,1,'Galery','d54e05cce1-1',''),(126,'Galeries/Galery29/01a8b8.jpg',29,1,'Galery','3f1b967303-1',''),(127,'Galeries/Galery30/f86a47.jpg',30,1,'Galery','d09caf71a3-1',''),(128,'Galeries/Galery31/da32d0.jpg',31,1,'Galery','a623bbf424-1',''),(129,'Galeries/Galery32/7206c5.jpg',32,1,'Galery','cd13013e82-1',''),(130,'Galeries/Galery33/61132c.jpg',33,1,'Galery','e74aaef9ce-1',''),(131,'Galeries/Galery34/77b06d.jpg',34,1,'Galery','175f85bb05-1',''),(132,'Galeries/Galery35/683777.jpg',35,1,'Galery','96f4f2d612-1',''),(133,'Galeries/Galery36/dfe234.jpg',36,1,'Galery','07b19191c5-1',''),(134,'Galeries/Galery37/bd2343.jpg',37,1,'Galery','45c183a3c3-1',''),(135,'Galeries/Galery41/9dcf85.jpg',41,0,'Galery','2b79e6847b-2',''),(136,'Galeries/Galery41/829854.jpg',41,1,'Galery','838768561d-1',''),(137,'Galeries/Galery88/95b67d.jpg',88,0,'Galery','11050cd3f7-2',''),(138,'Galeries/Galery88/55b31a.jpg',88,1,'Galery','32debaa47a-1','');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1488634107),('m140622_111540_create_image_table',1488634111),('m140622_111545_add_name_to_image_table',1488634111);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'designer','',''),(0,'solo','','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ssolo_m'
--
/*!50003 DROP PROCEDURE IF EXISTS `getBedroom` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getBedroom`(IN `lim` INT, IN `offs` INT)
    NO SQL
SELECT galery.id, galery.category, galery.title, galery.price, galery.description, image.filePath, image.urlAlias, image.isMain, image.itemId FROM galery


                INNER JOIN image


        ON (galery.id = image.itemId) AND isMain=1 WHERE galery.category = 'bedroom' LIMIT lim OFFSET offs ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getChildrens` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getChildrens`(IN `lim` INT, IN `offs` INT)
    NO SQL
SELECT galery.id, galery.category, galery.title, galery.price, galery.description, image.filePath, image.urlAlias, image.isMain, image.itemId FROM galery


                INNER JOIN image


        ON (galery.id = image.itemId) AND isMain=1 WHERE galery.category = 'childrens' LIMIT lim OFFSET offs ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getContent` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getContent`(IN `act` VARCHAR(255))
    NO SQL
SELECT * FROM content WHERE page=act ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getGaleryLastMod` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getGaleryLastMod`(IN `act` VARCHAR(30))
    NO SQL
SELECT last_mod FROM content WHERE page=act ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getHall` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getHall`(IN `lim` INT, IN `offs` INT)
    NO SQL
SELECT galery.id, galery.category, galery.title, galery.price, galery.description, image.filePath, image.urlAlias, image.isMain, image.itemId FROM galery


                INNER JOIN image


        ON (galery.id = image.itemId) AND isMain=1 WHERE galery.category = 'hall' LIMIT lim OFFSET offs ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getImgById` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getImgById`(IN `idn` INT)
    NO SQL
SELECT galery.id, galery.title, galery.price, galery.description, galery.full_text, galery.timestamp, image.filePath, image.isMain, image.itemId FROM galery


                INNER JOIN image


                ON (galery.id = idn AND image.itemId = idn) AND isMain=1 ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getKitchen` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getKitchen`(IN `lim` INT, IN `offs` INT)
    NO SQL
SELECT galery.id, galery.category, galery.title, galery.price, galery.description, image.filePath, image.urlAlias, image.isMain, image.itemId FROM galery


                INNER JOIN image


        ON (galery.id = image.itemId) AND isMain=1 WHERE galery.category = 'kitchen' LIMIT lim OFFSET offs ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getKupe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getKupe`(IN `lim` INT, IN `offs` INT)
    NO SQL
SELECT galery.id, galery.category, galery.title, galery.price, galery.description, image.filePath, image.urlAlias, image.isMain, image.itemId FROM galery


                INNER JOIN image


        ON (galery.id = image.itemId) AND isMain=1 WHERE galery.category = 'kupe' LIMIT lim OFFSET offs ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getLastFromContent` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getLastFromContent`(IN `act` VARCHAR(255))
    NO SQL
SELECT last_mod FROM content WHERE page=act ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getLastFromImg` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getLastFromImg`(IN `idn` INT)
    NO SQL
SELECT `timestamp` FROM `galery` WHERE id = idn ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getLkupe` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getLkupe`(IN `lim` INT, IN `offs` INT)
    NO SQL
SELECT galery.id, galery.category, galery.title, galery.price, galery.description, image.filePath, image.urlAlias, image.isMain, image.itemId FROM galery


                INNER JOIN image


        ON (galery.id = image.itemId) AND isMain=1 WHERE galery.category = 'lkupe' LIMIT lim OFFSET offs ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getOffice` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getOffice`(IN `lim` INT, IN `offs` INT)
    NO SQL
SELECT galery.id, galery.category, galery.title, galery.price, galery.description, image.filePath, image.urlAlias, image.isMain, image.itemId FROM galery


                INNER JOIN image


        ON (galery.id = image.itemId) AND isMain=1 WHERE galery.category = 'office' LIMIT lim OFFSET offs ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `getWall` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `getWall`(IN `lim` INT, IN `offs` INT)
    NO SQL
SELECT galery.id, galery.category, galery.title, galery.price, galery.description, image.filePath, image.urlAlias, image.isMain, image.itemId FROM galery


                INNER JOIN image


        ON (galery.id = image.itemId) AND isMain=1 WHERE galery.category = 'wall' LIMIT lim OFFSET offs ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-25 17:52:16
