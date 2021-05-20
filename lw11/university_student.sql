-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: university
-- ------------------------------------------------------
-- Server version	5.7.29-log

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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `birthdate` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  CONSTRAINT `group_id` FOREIGN KEY (`group_id`) REFERENCES `party` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,1,'Аронов','Ф','нг','2002-12-20'),(2,1,'Аркин','фы','нг','2002-12-20'),(3,1,'Перки','ячс','нг','2012-12-20'),(4,1,'Жаров','чс','гнг','2012-12-20'),(5,1,'Конова','см','ен','2012-12-20'),(6,2,'Сытина','ке','ке','2012-12-20'),(7,2,'Смолов','ап','ке','2012-12-20'),(8,2,'Юркин','пр','ва','2012-12-20'),(9,2,'Швыдко','ми','ап','2012-12-20'),(10,2,'Коваленко','ол','ап','2012-12-20'),(11,3,'Жданов','ит','пр','2012-12-20'),(12,3,'Петров','па','ор','2012-12-20'),(13,3,'Иванов','ро','ро','2012-12-20'),(14,3,'Сидоров','ор','ор','2012-12-20'),(15,3,'Кузнецов','Алексей','Владимирович','2012-12-20'),(16,7,'Николаев','Игнат','Анатольевич','2012-12-20'),(17,7,'Жилин','Никита','Сергеевич','2012-12-20'),(18,7,'Жмуров','Николай','Павлович','2012-12-20'),(19,7,'Донской','Дмитрий','Игоревич','2012-12-20'),(20,7,'Даволенко','Игорь','Семёнович','2012-12-20'),(21,8,'Дронов','Семён','Семёнович','2012-12-20'),(22,8,'Краснова','Ольга','Владмимировна','2012-12-20'),(23,8,'Пертушкин','Владимир','Артёмович','2012-12-20'),(24,8,'Крамов','Артём','Искандерович','2012-12-20'),(25,8,'Петренко','Искандер','Борисович','2012-12-20'),(26,9,'Глыба','Борис','Сергеевич','2012-12-20'),(27,9,'Проненеко','Сергей','Владимирович','2012-12-20'),(28,9,'Омаров','Рамзан','Ромаданович','2012-12-20'),(29,9,'Кравченко','Алексей','Антонович','2012-12-20'),(30,9,'Полушина','Антон','Тимурович','2012-12-20'),(31,10,'Кривко','Тимур','Игоревич','2012-12-20'),(32,10,'Кваша','Игорь','Егорович','2012-12-20'),(33,10,'Клошин','Егор','Степанович','2012-12-20'),(34,10,'Дмитриенко','Степан','Дмитрович','2012-12-20'),(35,10,'Махно','Дмитро','Евеньевич','2012-12-20'),(36,11,'Чумов','Евгений','Юрьевич','2012-12-20'),(37,11,'Ооржак','Юрий','Иван-Оглы','2012-12-20'),(38,11,'Рябов','Леонид','Николаевич','2012-12-20'),(39,11,'Кипятков','Николай','Андреевич','2012-12-20'),(40,11,'Плахов','Андрей','Аркадиевич','2012-12-20'),(41,12,'Крюк','Аркадий','Львович','2012-12-20'),(42,12,'Яшин','Лев','Александрович','2012-12-20'),(43,12,'Пушкин','Александр','Сергеевич','2012-12-20'),(44,12,'Клюев','Сергей','Борисович','2012-12-20'),(45,12,'Сорочкин','Петр','Геннальевич','2012-12-20');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-20 20:46:45
