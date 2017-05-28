-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: localbusiness
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.13-MariaDB

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
-- Table structure for table `business`
--

DROP TABLE IF EXISTS `business`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business` (
  `username` varchar(15) DEFAULT NULL,
  `business` varchar(25) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `business`
--

LOCK TABLES `business` WRITE;
/*!40000 ALTER TABLE `business` DISABLE KEYS */;
INSERT INTO `business` VALUES ('Anton','Bar Cheers','http://cdn4.thr.com/sites/default/files/imagecache/NFE_Landscape/2014/08/cheers_bar_artifacts.jpg','http://i1.wp.com/billlabrie.com/wp-content/uploads/2015/03/john-in-the-original-cheers-bar-set-pearblossom.jpg','http://www.lusterstudios.com/images/todayshowboston/cheers-boston-bar-jason-pound.jpg','restaurant','Sofia','Wonderful place, nice music and a lot of beer!!!'),('Anton','Sport magazine','https://image.isu.pub/160519111024-5f9ce7a4f16e34313bf407d8bccad925/jpg/page_1_thumb_large.jpg','https://s-media-cache-ak0.pinimg.com/236x/28/3f/65/283f659b58aa40c39a730dc36db4d39a.jpg','https://maithaalmagoodi.files.wordpress.com/2012/04/time_magazine_spread.jpg','media','Sofia, Business Park','Great pictures, stories and hot news! Only 3.99 every mounth.'),('Galq','Pizza','http://s1.dmcdn.net/ZnwRD.jpg','http://lentre-deux-pizzeria.fr/wp-content/uploads/2014/05/pizza-accueil-l2.png','http://info.chd-expert.com/hubfs/BLog/pepperoni-pizza.jpeg','restaurant','Lyulin 6','Pizza'),('Sunny','The Game of Toys','https://foodheart.org/assets/toys-main-5c1feeb193fe726a922fafb59d82d512.png','http://pngimg.com/upload/bear_PNG1185.png','https://retrenders.files.wordpress.com/2012/10/micomictrain.png','shop','','The world of toys');
/*!40000 ALTER TABLE `business` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `username` varchar(15) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('Anton','123'),('Ivan','123'),('Galq','12345'),('Sunny','12345');
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

-- Dump completed on 2016-10-11 14:57:50
