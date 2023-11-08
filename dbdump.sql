-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: team10
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `brandID` int(11) NOT NULL AUTO_INCREMENT,
  `brandType` varchar(20) NOT NULL,
  `brandName` varchar(20) NOT NULL,
  `brandIntro` text DEFAULT NULL,
  PRIMARY KEY (`brandID`),
  KEY `FK_brands_brandType` (`brandType`),
  CONSTRAINT `FK_brands_brandType` FOREIGN KEY (`brandType`) REFERENCES `brandtype` (`type`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'headwear','Hat Haven','Perfect Style for Your Head'),(2,'headwear','Cap Creations','The Art of Hats'),(3,'headwear','Peak Performance Hat','High Performance, Top-notch Hats'),(4,'headwear','Crown Couture','Crown-Like Designs'),(5,'headwear','Shade Seeker','Coolness in Nature'),(6,'headwear','Urban Elegance Headw','Urban Elegance'),(7,'headwear','Headgear Heroes','Heroes for Your Head'),(8,'headwear','Brim Bliss','The Ultimate Hat Experience'),(9,'headwear','SunChic Hats','Elegance Even Under the Sun'),(10,'headwear','Hatopia','The Perfect World of Hats'),(11,'footwear','Sole Supreme','The Perfect Choice in Footwear'),(12,'footwear','WalkWonders','Walking Becomes Marvelous'),(13,'footwear','FootLuxe','Elegance and Comfort in Every Step'),(14,'footwear','StrideStyle','Walking in Style'),(15,'footwear','KickMaster','Mastering with Every Kick'),(16,'footwear','Urban Soles','Urban Footsteps'),(17,'footwear','Sneaker Symphony','The Music of Sneakers'),(18,'footwear','ComfortCrafted Kicks','Comfort Comes First'),(19,'footwear','Posh Peds','Premium Footsteps'),(20,'footwear','StepStylist','Fashion with Each Step'),(21,'underwear','Silk Secrets','Silk-Covered Secrets'),(22,'underwear','Lace Elegance','Elegance in Lace'),(23,'underwear','Inner Bliss Intimate','Inner Happiness'),(24,'underwear','Cotton Comfort Co','Comfortable Cotton Underwear'),(25,'underwear','LingerieLux','The Splendor of Lingerie'),(26,'underwear','Bare Essentials','Essential Essentials'),(27,'underwear','Velvet Touch Underwe','Velvet-Touched Undergarments'),(28,'underwear','Sensual Secrets','Sensuous Secrets'),(29,'underwear','Silk & Satin Sensati','The Marvel of Silk and Satin'),(30,'underwear','Undercover Elegance','Secret Elegance'),(31,'sportswear','ActiveVibe','Feeling Active'),(32,'sportswear','FitFlex Gear','Gear for Your Physique'),(33,'sportswear','SportStrike','Sports Impact'),(34,'sportswear','PowerPulse Activewea','Active Wear with Power Pulse'),(35,'sportswear','ZenAthletic','Gentle Sensation of Exercise'),(36,'sportswear','SwiftMotion Sportswe','Sportswear for Swift Movements'),(37,'sportswear','Peak Performance Ath','Sports Apparel for Peak Performance'),(38,'sportswear','GymChic','Sleek Gym Style'),(39,'sportswear','ActivePro Apparel','Professional Activewear'),(40,'sportswear','SportFusion','The Fusion of Sports and Style'),(41,'everydaywear','Everyday Elegance','Everyday Elegance'),(42,'everydaywear','Casual Comfort Co','Comfortable Casual Style'),(43,'everydaywear','Wardrobe Wonders','Wardrobe Wonders'),(44,'everydaywear','UrbanEase','Comfort in the City'),(45,'everydaywear','ChicStreet','Stylish Street Style'),(46,'everydaywear','DailyDapper','Style for Every Day'),(47,'everydaywear','EasyLiving Attire','Effortless and Comfortable Lifestyle Apparel'),(48,'everydaywear','SimpleStyle','Simplicity in Style'),(49,'everydaywear','CasualCouture','Casual Couture'),(50,'everydaywear','StreetSmart Fashion','Urban Smart Fashion');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brandtype`
--

DROP TABLE IF EXISTS `brandtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brandtype` (
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brandtype`
--

LOCK TABLES `brandtype` WRITE;
/*!40000 ALTER TABLE `brandtype` DISABLE KEYS */;
INSERT INTO `brandtype` VALUES ('everydaywear'),('footwear'),('headwear'),('sportswear'),('underwear');
/*!40000 ALTER TABLE `brandtype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupons` (
  `couponID` int(11) NOT NULL AUTO_INCREMENT,
  `rank` varchar(20) NOT NULL,
  `expirationDate` date DEFAULT NULL,
  `discountRate` int(11) NOT NULL,
  `minFee` int(11) DEFAULT NULL,
  PRIMARY KEY (`couponID`),
  KEY `FK_coupons_levels` (`rank`),
  CONSTRAINT `FK_coupons_levels` FOREIGN KEY (`rank`) REFERENCES `levels` (`rank`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
INSERT INTO `coupons` VALUES (1,'gold','2023-12-31',20,50000),(2,'silver','2023-12-31',15,40000),(3,'bronze','2023-12-31',10,30000),(4,'gold','2023-12-31',25,60000),(5,'silver','2023-12-31',20,50000),(6,'bronze','2023-12-31',15,40000),(7,'gold','2023-12-31',30,7000),(8,'silver','2023-12-31',25,6000),(9,'bronze','2023-12-31',20,5000),(10,'gold','2023-12-31',35,8000);
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deliveries`
--

DROP TABLE IF EXISTS `deliveries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deliveries` (
  `orderID` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL CHECK (`status` in ('paid','ready','shipping','done')),
  KEY `FK_deliveries_orders` (`orderID`),
  CONSTRAINT `FK_deliveries_orders` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deliveries`
--

LOCK TABLES `deliveries` WRITE;
/*!40000 ALTER TABLE `deliveries` DISABLE KEYS */;
INSERT INTO `deliveries` VALUES (1,'done'),(2,'done'),(3,'done'),(4,'done'),(5,'done'),(6,'done'),(7,'done'),(8,'done'),(9,'done'),(10,'done'),(11,'done'),(12,'done'),(13,'done'),(14,'done'),(15,'done'),(16,'done'),(17,'done'),(18,'done'),(19,'done'),(20,'done'),(21,'done'),(22,'done'),(23,'done'),(24,'done'),(25,'done'),(26,'done'),(27,'done'),(28,'done'),(29,'done'),(30,'done'),(31,'done'),(32,'done'),(33,'done'),(34,'done'),(35,'done'),(36,'done'),(37,'done'),(38,'done'),(39,'done'),(40,'done'),(41,'done'),(42,'done'),(43,'done'),(44,'done'),(45,'done'),(46,'done'),(47,'done'),(48,'done'),(49,'done'),(50,'done'),(51,'shipping'),(52,'shipping'),(53,'ready'),(54,'paid');
/*!40000 ALTER TABLE `deliveries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `deliveryview`
--

DROP TABLE IF EXISTS `deliveryview`;
/*!50001 DROP VIEW IF EXISTS `deliveryview`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `deliveryview` AS SELECT
 1 AS `orderID`,
  1 AS `userID`,
  1 AS `orderDate`,
  1 AS `address`,
  1 AS `brandName`,
  1 AS `productName`,
  1 AS `comment`,
  1 AS `status` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `employeeID` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL CHECK (`department` in ('sales','management','hr')),
  PRIMARY KEY (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES ('CBA9012345','klmn7890','Chris','management'),('DEF6789012','opqr1234','Sara','hr'),('EFG4567890','fghi7890','Eva','sales'),('GHI3456789','stuv5678','Alex','sales'),('JKL0123456','wxyz9012','Linda','management'),('LMN1234567','uvwx1234','John','sales'),('OPQ7890123','bcde3456','Tom','hr'),('RST2345678','ghij3456','Emily','sales'),('UVW5678901','cdef9012','Mike','hr'),('XYZ8901234','yzab5678','Alice','management');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `levels`
--

DROP TABLE IF EXISTS `levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `levels` (
  `rank` varchar(20) NOT NULL,
  PRIMARY KEY (`rank`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `levels`
--

LOCK TABLES `levels` WRITE;
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
INSERT INTO `levels` VALUES ('bronze'),('gold'),('silver');
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `notiID` int(11) NOT NULL AUTO_INCREMENT,
  `writerID` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `content` text DEFAULT NULL,
  PRIMARY KEY (`notiID`),
  KEY `FK_notifications_employees` (`writerID`),
  CONSTRAINT `FK_notifications_employees` FOREIGN KEY (`writerID`) REFERENCES `employees` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,'LMN1234567','2023-10-31','New product \'Super Widget\' is now available for purchase.'),(2,'XYZ8901234','2023-10-30','We have a special offer for our valued customers. Get 20% off on all products this week.'),(3,'UVW5678901','2023-10-29','Important update: Changes in our return policy. Please read.'),(4,'RST2345678','2023-10-28','Customer support will be available 24/7 starting next month.'),(5,'CBA9012345','2023-10-27','Hurry! Limited stock available for the \'Mega Gadget.\''),(6,'DEF6789012','2023-10-26','Check out our new collection of summer apparel.'),(7,'GHI3456789','2023-10-25','Get free shipping on orders over $50. Shop now!'),(8,'JKL0123456','2023-10-24','We are hosting a customer appreciation event at our store this Saturday.'),(9,'OPQ7890123','2023-10-23','Product safety is our top priority. Learn more about our quality control.'),(10,'EFG4567890','2023-10-22','Introducing our loyalty program. Earn rewards with every purchase.');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `ordercount`
--

DROP TABLE IF EXISTS `ordercount`;
/*!50001 DROP VIEW IF EXISTS `ordercount`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `ordercount` AS SELECT
 1 AS `productID`,
  1 AS `count` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(20) NOT NULL,
  `productID` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `purchasePrice` int(11) NOT NULL,
  PRIMARY KEY (`orderID`),
  KEY `FK_orders_users` (`userID`),
  KEY `FK_orders_products` (`productID`),
  KEY `FK_orders_brands` (`brandID`),
  CONSTRAINT `FK_orders_brands` FOREIGN KEY (`brandID`) REFERENCES `brands` (`brandID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_orders_products` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_orders_users` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'ABC1234567',1,1,'2023-09-01','Please wrap the clothes for a gift.',10530),(2,'ABC1234567',17,5,'2023-09-02','',27180),(3,'ABC1234567',3,1,'2023-09-03','',17190),(4,'DEF8901234',1,1,'2023-09-04','Deliver the clothes on a specific date.\n',10530),(5,'DEF8901234',3,1,'2023-09-05','',17190),(6,'GHI5678901',20,5,'2023-09-06','',30510),(7,'GHI5678901',5,2,'2023-09-07','Send a confirmation email for the order.',29610),(8,'GHI5678901',15,4,'2023-09-08','',9720),(9,'JKL2345678',32,8,'2023-09-09','Provide care and maintenance instructions for these clothes.\n',22410),(10,'JKL2345678',10,3,'2023-09-10','Send order confirmation emails with status updates.',23940),(11,'JKL2345678',43,11,'2023-09-11','',87750),(12,'MNO9012345',51,13,'2023-09-12','',77940),(13,'MNO9012345',65,17,'2023-09-13','Expedite the delivery of these clothes.',57780),(14,'MNO9012345',46,12,'2023-09-14','',89280),(15,'PQR6789012',76,19,'2023-09-15','Can you gift wrap these clothes?',57240),(16,'PQR6789012',51,13,'2023-09-16','',77940),(17,'STU3456789',65,17,'2023-09-17','',57780),(18,'STU3456789',77,20,'2023-09-18','',57240),(19,'STU3456789',51,13,'2023-09-19','',77940),(20,'VWX0123456',52,13,'2023-09-20','I need the clothes to be delivered discreetly.',86760),(21,'VWX0123456',83,21,'2023-09-21','',36270),(22,'VWX0123456',92,23,'2023-09-22','',43650),(23,'YZA7890123',110,28,'2023-09-23','',36360),(24,'YZA7890123',97,25,'2023-09-24','Please include a gift message with the package.',38340),(25,'YZA7890123',84,21,'2023-09-25','',43920),(26,'BCD4567890',88,22,'2023-09-26','Notify me when the clothes are out for delivery.',44550),(27,'BCD4567890',92,23,'2023-09-27','Include a personalized thank-you note with the order.',43650),(28,'BCD4567890',117,30,'2023-09-28','',37080),(29,'EFG1234567',92,23,'2023-09-29','Include a receipt with the order.',43650),(30,'EFG1234567',84,21,'2023-09-30','',43920),(31,'EFG1234567',127,32,'2023-10-01','',32130),(32,'HIJ8901234',134,34,'2023-10-02','',82170),(33,'HIJ8901234',154,39,'2023-10-03','Can I schedule the delivery time for these clothes?',50760),(34,'HIJ8901234',122,31,'2023-10-04','',51930),(35,'KLM5678901',131,33,'2023-10-05','',44460),(36,'KLM5678901',134,34,'2023-10-06','Confirm the estimated arrival date for my order.',82170),(37,'KLM5678901',147,37,'2023-10-07','',42030),(38,'NOP2345678',134,34,'2023-10-08','',82170),(39,'NOP2345678',124,31,'2023-10-09','Let me know when the clothes are dispatched.',78300),(40,'NOP2345678',138,35,'2023-10-10','',35730),(41,'QRS9012345',161,41,'2023-10-11','',35280),(42,'QRS9012345',192,48,'2023-10-12','',29250),(43,'TUV6789012',199,50,'2023-10-13','Send me care instructions specific to these clothes.',52830),(44,'TUV6789012',184,46,'2023-10-14','',44100),(45,'TUV6789012',165,42,'2023-10-15','',41400),(46,'WXY3456789',186,47,'2023-10-16','Include a gift receipt in case of returns.',43110),(47,'WXY3456789',177,45,'2023-10-17','',35370),(48,'ZAB0123456',165,42,'2023-10-18','',41400),(49,'CDE7890123',171,43,'2023-10-19','',29430),(50,'FGH4567890',170,43,'2023-10-20','',41940),(51,'FGH4567890',32,8,'2023-11-02','',22410),(52,'FGH4567890',33,9,'2023-11-03','',40500),(53,'FGH4567890',34,9,'2023-11-04','',30060),(54,'FGH4567890',35,9,'2023-11-05','',32850);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `brandID` int(11) NOT NULL,
  `productName` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `salePrice` int(11) NOT NULL,
  `target` varchar(20) DEFAULT NULL CHECK (`target` in ('men','women','unisex')),
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`productID`),
  KEY `FK_products_brands` (`brandID`),
  CONSTRAINT `FK_products_brands` FOREIGN KEY (`brandID`) REFERENCES `brands` (`brandID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,'Classic Cotton Ball ',11700,10530,'unisex',91),(2,1,'Vintage Fedora Hat',41300,37170,'unisex',97),(3,1,'Beach Bliss Straw Ha',19100,17190,'unisex',66),(4,1,'Nice White Ball cap',10500,9450,'unisex',11),(5,2,'Snapback Style Snap ',32900,29610,'unisex',47),(6,2,'Leather Elegance Cap',18700,16830,'unisex',99),(7,2,'Retro Vibes Baseball',49900,44910,'unisex',11),(8,2,'Mesh Magic Trucker H',49700,44730,'unisex',97),(9,3,'Sports Enthusiast Ca',31300,28170,'unisex',89),(10,3,'Trailblazer Adventur',26600,23940,'unisex',20),(11,3,'Classic Elegance Sun',20400,18360,'unisex',71),(12,3,'Mohair Comfort Beani',41700,37530,'unisex',82),(13,4,'Tiara Crown Princess',17000,15300,'women',59),(14,4,'Royal Crown King\'s H',41600,37440,'men',73),(15,4,'Queen\'s Regal Crown ',10800,9720,'women',0),(16,4,'King\'s Jeweled Crown',20700,18630,'men',13),(17,5,'SunChaser Wide-Brim ',30200,27180,'unisex',37),(18,5,'Sporty Sun Visor',10800,9720,'unisex',56),(19,5,'Pro Golfer\'s Sun Hat',17400,15660,'men',66),(20,5,'Expedition Safari Ha',33900,30510,'unisex',49),(21,6,'Timeless Elegance To',43700,39330,'women',81),(22,6,'Vintage Bowler Hat',21000,18900,'men',60),(23,6,'Urban Flat Cap Colle',35200,31680,'unisex',11),(24,6,'Classic Newsboy Cap',10800,9720,'men',62),(25,7,'Heroic Crown Collect',31100,27990,'men',50),(26,7,'Epic Gladiator Cap',12200,10980,'men',17),(27,7,'Viking Legends Hat',40900,36810,'men',98),(28,7,'Space Odyssey Hat',48600,43740,'unisex',21),(29,8,'Elegant Wide Brim Su',39800,35820,'unisex',92),(30,8,'Seaside Straw Hat',41400,37260,'women',7),(31,8,'Panama Dreams Hat',42400,38160,'women',25),(32,8,'Vintage Cloche Colle',24900,22410,'women',86),(33,9,'Beach Ready Sun Viso',45000,40500,'unisex',41),(34,9,'Beachcomber Bucket H',33400,30060,'unisex',14),(35,9,'Bohemian Floppy Hat',36500,32850,'women',33),(36,9,'Sun-Kissed Straw Fed',20800,18720,'unisex',23),(37,10,'All-Weather Trucker ',28500,25650,'unisex',14),(38,10,'Urban Snapback Style',14000,12600,'unisex',56),(39,10,'Cozy Knit Beanie',16000,14400,'unisex',77),(40,10,'Retro Bucket Hat',35200,31680,'unisex',17),(41,11,'Classic Canvas Sneak',71200,64080,'unisex',27),(42,11,'Urban Explorer Boots',50800,45720,'men',31),(43,11,'Slip-On Comfort Loaf',97500,87750,'women',23),(44,11,'Beach Adventure Sand',66800,60120,'men',31),(45,12,'Comfort Ballet Flats',87400,78660,'women',43),(46,12,'Leather Luxury Loafe',99200,89280,'men',54),(47,12,'Casual Slip-On Flats',66000,59400,'unisex',34),(48,12,'Velvet Elegance Ankl',82700,74430,'women',75),(49,13,'SpeedRunner Running ',83500,75150,'unisex',14),(50,13,'Glamour Heel Collect',98200,88380,'women',2),(51,13,'Adventure Hiker Boot',86600,77940,'men',32),(52,13,'Sporty Comfort Sanda',96400,86760,'unisex',8),(53,14,'Street Style Sneaker',96100,86490,'unisex',32),(54,14,'Chic Wedge Sandals',81100,72990,'unisex',83),(55,14,'Cozy Indoor Slippers',53900,48510,'unisex',40),(56,14,'Modern Loafer Collec',68700,61830,'men',18),(57,15,'Performance Running ',72200,64980,'unisex',93),(58,15,'Active Adventure San',65700,59130,'men',91),(59,15,'ProCourt Tennis Shoe',62600,56340,'women',51),(60,15,'Slam Dunk Basketball',86000,77400,'men',61),(61,16,'Classic Oxford Elega',83400,75060,'unisex',25),(62,16,'Urban Chelsea Collec',67700,60930,'men',48),(63,16,'Comfort Moccasin Loa',78000,70200,'men',30),(64,16,'Beachside Espadrille',58400,52560,'women',15),(65,17,'High-Top Street Styl',64200,57780,'unisex',52),(66,17,'Urban Skater Collect',86300,77670,'unisex',46),(67,17,'SpeedRush Running Tr',80300,72270,'unisex',92),(68,17,'Slip-On Street Sneak',78900,71010,'unisex',34),(69,18,'ProGolfer Golf Shoes',61700,55530,'women',59),(70,18,'Summer Breeze Espadr',55300,49770,'unisex',51),(71,18,'ActiveStride Athleti',97800,88020,'unisex',75),(72,18,'Elegant Dress Oxford',53900,48510,'women',27),(73,19,'RunActive Running Sh',76000,68400,'unisex',35),(74,19,'Urban Slip-On Street',57200,51480,'unisex',94),(75,19,'Classic Loafer Colle',61100,54990,'men',50),(76,19,'Stylish High Heels',63600,57240,'women',87),(77,20,'Stylish Sneakers',63600,57240,'unisex',84),(78,20,'Beach Sandals',58100,52290,'women',75),(79,20,'Comfortable Indoor S',93900,84510,'unisex',33),(80,20,'Modern Loafer',54800,49320,'men',89),(81,21,'Elegant Lace Bralett',40000,36000,'women',85),(82,21,'Silk Elegance Pantie',31800,28620,'women',100),(83,21,'Comfort Seamless Bri',40300,36270,'women',26),(84,21,'Active Support Sport',48800,43920,'women',13),(85,22,'Luxurious Satin Chem',46700,42030,'women',48),(86,22,'Romantic Lace Teddy',34700,31230,'women',79),(87,22,'Silky Elegance Robe',49700,44730,'women',29),(88,22,'Sheer Temptation Bod',49500,44550,'women',43),(89,23,'Everyday Comfort Bri',41300,37170,'women',45),(90,23,'Classic Boxer Shorts',45200,40680,'women',9),(91,23,'Cozy Pajama Set',38200,34380,'unisex',47),(92,23,'Lounge Comfort Brale',48500,43650,'women',5),(93,24,'Silk Sensation Camis',36000,32400,'women',42),(94,24,'Delicate Lace Thong',48600,43740,'women',88),(95,24,'Satin Dreams Sleepwe',43500,39150,'women',4),(96,24,'Sensual Silk Robe',35800,32220,'women',64),(97,25,'Lift & Shape Push-Up',42600,38340,'women',21),(98,25,'Body Sculpting Shape',34700,31230,'women',78),(99,25,'Classic Corset Colle',45100,40590,'women',30),(100,25,'Full Comfort Coverag',46800,42120,'unisex',77),(101,26,'Lacy Elegance Linger',33500,30150,'women',8),(102,26,'Lace Allure Bralette',31500,28350,'women',15),(103,26,'Sensual Silk Chemise',48800,43920,'women',93),(104,26,'Sheer Delight Pantie',45200,40680,'women',69),(105,27,'Everyday Comfort Cam',41600,37440,'women',21),(106,27,'Classic Comfort Brie',36800,33120,'women',12),(107,27,'Cozy Sleep Shorts',43500,39150,'men',84),(108,27,'Wireless Comfort Bra',48200,43380,'women',94),(109,28,'Sheer Temptation Lin',32300,29070,'women',49),(110,28,'Romantic Lace Teddy',40400,36360,'women',55),(111,28,'Satin Elegance Robe',43000,38700,'women',35),(112,28,'Sensual Silk Chemise',49700,44730,'women',5),(113,29,'Ultra Comfort Seamle',44600,40140,'women',23),(114,29,'Seamless Bliss Panti',47700,42930,'women',15),(115,29,'Cozy Lounge Set',38600,34740,'women',22),(116,29,'Wireless Comfort Bra',49600,44640,'women',80),(117,30,'Luxurious Satin Chem',41200,37080,'women',95),(118,30,'Romantic Lace Teddy',37800,34020,'women',27),(119,30,'Silky Elegance Robe',47600,42840,'women',21),(120,30,'Sheer Tempt',32600,29340,'women',78),(121,31,'Performance Leggings',39100,35190,'women',41),(122,31,'High Impact Sports B',57700,51930,'women',86),(123,31,'FlexFit Workout Shor',59300,53370,'women',56),(124,31,'Breathable Tank Top',87000,78300,'women',89),(125,32,'Reflective Running J',88800,79920,'unisex',19),(126,32,'Zen Yoga Pants',89000,80100,'women',83),(127,32,'Elite Compression Ti',35700,32130,'women',22),(128,32,'Performance Workout ',46700,42030,'unisex',18),(129,33,'Pro Cyclist Shorts',60900,54810,'men',86),(130,33,'CrossFit Performance',71900,64710,'men',19),(131,33,'SpeedRunner Leggings',49400,44460,'women',84),(132,33,'FlexFit Workout Capr',61000,54900,'women',64),(133,34,'Performance Athletic',78400,70560,'unisex',3),(134,34,'Maximum Support Spor',91300,82170,'women',73),(135,34,'Zen Yoga Tank',39600,35640,'women',73),(136,34,'Elite Compression So',44400,39960,'unisex',46),(137,35,'SpeedRush Running Ti',75400,67860,'women',50),(138,35,'CrossFit Performance',39700,35730,'unisex',29),(139,35,'Performance Leggings',46500,41850,'men',77),(140,35,'FlexFit Workout Jack',82300,74070,'unisex',33),(141,36,'High-Waist Performan',61700,55530,'women',96),(142,36,'Seamless Sports Bra ',79600,71640,'women',61),(143,36,'FlexFit Workout Shor',76200,68580,'unisex',83),(144,36,'Moisture-Wicking Ath',67400,60660,'men',63),(145,37,'SpeedRunner Running ',92400,83160,'unisex',52),(146,37,'Zen Yoga Leggings',57500,51750,'women',51),(147,37,'Elite Compression To',46700,42030,'unisex',60),(148,37,'Performance Workout ',70500,63450,'women',0),(149,38,'CrossFit Performance',61900,55710,'women',16),(150,38,'High-Impact CrossFit',82900,74610,'women',27),(151,38,'Pro CrossFit Shorts',35700,32130,'unisex',15),(152,38,'Performance CrossFit',62200,55980,'women',71),(153,39,'SpeedRunner Running ',36300,32670,'women',24),(154,39,'Maximum Support Spor',56400,50760,'women',29),(155,39,'Zen Yoga Pants',61300,55170,'women',12),(156,39,'Elite Compression Sh',31700,28530,'unisex',37),(157,40,'SpeedRunner Running ',54800,49320,'unisex',98),(158,40,'Maximum Support Spor',50200,45180,'women',81),(159,40,'Zen Yoga Leggings',53100,47790,'women',54),(160,40,'Elite Compression To',35700,32130,'unisex',8),(161,41,'Everyday Comfort T-S',39200,35280,'unisex',31),(162,41,'Classic Denim Jeans',31200,28080,'men',90),(163,41,'Cozy Hooded Sweatshi',35100,31590,'unisex',47),(164,41,'Knit Pullover Sweate',57000,51300,'men',81),(165,42,'Casual Midi Dress',46000,41400,'women',66),(166,42,'Casual Summer Shorts',39300,35370,'men',2),(167,42,'Relaxed Fit Button-U',37800,34020,'men',35),(168,42,'Trendy Jumpsuit',50900,45810,'men',57),(169,43,'Urban Style Mini Ski',47500,42750,'women',48),(170,43,'Elegant Blouse',46600,41940,'women',37),(171,43,'Slim Fit Chino Pants',32700,29430,'men',45),(172,43,'Lightweight Cardigan',68400,61560,'unisex',3),(173,44,'Stretchy Leggings',66700,60030,'women',1),(174,44,'Comfortable Sweatpan',58800,52920,'unisex',69),(175,44,'Flowy Tunic Top',57300,51570,'women',34),(176,44,'Classic Denim Jacket',42400,38160,'men',54),(177,45,'Classic Polo Shirt',39300,35370,'unisex',50),(178,45,'Khaki Chinos',55200,49680,'men',42),(179,45,'Maxi Summer Dress',69600,62640,'women',42),(180,45,'Cozy Cardigan Sweate',68200,61380,'women',95),(181,46,'Urban Graphic T-Shir',48900,44010,'unisex',42),(182,46,'Cargo Utility Pants',44300,39870,'men',21),(183,46,'Trendy Bomber Jacket',66200,59580,'men',18),(184,46,'Skater Style Dress',49000,44100,'women',2),(185,47,'Urban Jumpsuit',52400,47160,'unisex',64),(186,47,'Street Style Graphic',47900,43110,'unisex',8),(187,47,'Denim Cutoff Shorts',56600,50940,'men',13),(188,47,'Striped Casual Top',37800,34020,'men',0),(189,48,'Stylish Midi Skirt',50300,45270,'women',75),(190,48,'Trendy Graphic Sweat',43100,38790,'unisex',100),(191,48,'Classic Denim Overal',45100,40590,'unisex',5),(192,48,'Trench Coat with Bel',32500,29250,'women',13),(193,48,'Urban Crop Top',50900,45810,'women',90),(194,49,'Pleated Midi Skirt',69700,62730,'women',10),(195,49,'Utility Style Jumpsu',54600,49140,'men',24),(196,49,'Denim Shacket with P',45500,40950,'men',85),(197,49,'Plaid Flannel Shirt',47700,42930,'women',48),(198,50,'Wide-Leg Palazzo Pan',60100,54090,'men',18),(199,50,'Casual Graphic T-Shi',58700,52830,'unisex',78),(200,50,'Cozy Knit Sweater Dr',32700,29430,'women',41);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qna`
--

DROP TABLE IF EXISTS `qna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qna` (
  `qnaID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `comment` text DEFAULT NULL,
  PRIMARY KEY (`qnaID`),
  KEY `FK_qna_users` (`userID`),
  CONSTRAINT `FK_qna_users` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qna`
--

LOCK TABLES `qna` WRITE;
/*!40000 ALTER TABLE `qna` DISABLE KEYS */;
INSERT INTO `qna` VALUES (1,'ABC1234567','General','2023-10-31','How do I use this product?'),(2,'DEF8901234','Product','2023-10-30','Is this product available in other colors?'),(3,'GHI5678901','Shipping','2023-10-29','When will my order be shipped?'),(4,'JKL2345678','General','2023-10-28','Can I return the product if I\'m not satisfied?'),(5,'MNO9012345','Product','2023-10-27','What are the features of this product?'),(6,'PQR6789012','General','2023-10-26','How can I track my order?'),(7,'STU3456789','Shipping','2023-10-25','How long does shipping take?'),(8,'VWX0123456','Product','2023-10-24','Do you have this product in a larger size?'),(9,'YZA7890123','General','2023-10-23','Is there a warranty for this product?'),(10,'BCD4567890','Shipping','2023-10-22','Can I change the delivery address?'),(11,'EFG1234567','General','2023-10-21','How can I contact customer support?'),(12,'HIJ8901234','Product','2023-10-20','What materials is the product made of?'),(13,'KLM5678901','Shipping','2023-10-19','Is international shipping available?'),(14,'NOP2345678','General','2023-10-18','How do I cancel my order?'),(15,'QRS9012345','Product','2023-10-17','Can I get a discount on bulk orders?'),(16,'TUV6789012','Shipping','2023-10-16','What courier service do you use for shipping?'),(17,'WXY3456789','General','2023-10-15','Do you have a loyalty program?'),(18,'ZAB0123456','Product','2023-10-14','Are there any upcoming product releases?'),(19,'CDE7890123','General','2023-10-13','How can I check the status of my order?'),(20,'FGH4567890','Shipping','2023-10-12','Can I change my delivery time?');
/*!40000 ALTER TABLE `qna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `replyqna`
--

DROP TABLE IF EXISTS `replyqna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `replyqna` (
  `qnaID` int(11) NOT NULL,
  `employeeID` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `comment` text DEFAULT NULL,
  PRIMARY KEY (`qnaID`),
  KEY `FK_replyqna_employees` (`employeeID`),
  CONSTRAINT `FK_replyqna_employees` FOREIGN KEY (`employeeID`) REFERENCES `employees` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_replyqna_qna` FOREIGN KEY (`qnaID`) REFERENCES `qna` (`qnaID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `replyqna`
--

LOCK TABLES `replyqna` WRITE;
/*!40000 ALTER TABLE `replyqna` DISABLE KEYS */;
INSERT INTO `replyqna` VALUES (1,'LMN1234567','2023-10-31','You can use the product by following the user manual.'),(2,'XYZ8901234','2023-10-30','Yes, the product is available in multiple colors.'),(3,'UVW5678901','2023-10-29','Your order will be shipped within 2-3 business days.'),(4,'RST2345678','2023-10-28','Yes, you can return the product within 30 days if not satisfied.'),(5,'CBA9012345','2023-10-27','The product features include...'),(6,'DEF6789012','2023-10-26','You can track your order by logging into your account.'),(7,'GHI3456789','2023-10-25','Shipping typically takes 5-7 business days.'),(8,'JKL0123456','2023-10-24','We offer larger sizes for this product.'),(9,'OPQ7890123','2023-10-23','Yes, there is a 1-year warranty for this product.'),(10,'EFG4567890','2023-10-22','You can change the delivery address by contacting customer support.');
/*!40000 ALTER TABLE `replyqna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `reviewrating`
--

DROP TABLE IF EXISTS `reviewrating`;
/*!50001 DROP VIEW IF EXISTS `reviewrating`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `reviewrating` AS SELECT
 1 AS `productID`,
  1 AS `rating` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `reviewID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(20) NOT NULL,
  `productID` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `grade` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  PRIMARY KEY (`reviewID`),
  KEY `FK_reviews_users` (`userID`),
  KEY `FK_reviews_products` (`productID`),
  CONSTRAINT `FK_reviews_products` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_reviews_users` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,'ABC1234567',1,'2023-09-06',4,'This hat brand always delivers on style and comfort. A go-to choice for completing any outfit.'),(2,'ABC1234567',17,'2023-09-07',3,'The quality of their hats is exceptional. I love their wide range of designs, from classic to trendy.'),(3,'ABC1234567',3,'2023-09-08',3,'These hats are the perfect blend of fashion and function. I\'m a fan of their versatility.'),(4,'DEF8901234',1,'2023-09-09',5,'If you\'re looking for a reliable hat brand, look no further. They\'ve got something for everyone.'),(5,'DEF8901234',3,'2023-09-10',4,'Their hats are a statement piece. You\'ll turn heads with one of these on.'),(6,'GHI5678901',20,'2023-09-11',5,'I appreciate the attention to detail in their hat designs. It\'s all about the little things.'),(7,'GHI5678901',5,'2023-09-12',3,'This brand consistently offers the latest hat trends, making it easy to stay fashionable.'),(8,'GHI5678901',15,'2023-09-13',3,'Their hats are durable and can withstand daily wear. A great investment for your headwear collection.'),(9,'JKL2345678',32,'2023-09-14',4,'I love how this brand combines classic and modern styles in their hats. Always a hit.'),(10,'JKL2345678',10,'2023-09-15',3,'You can\'t go wrong with their hats. They are a must-have accessory for any season.'),(11,'JKL2345678',43,'2023-09-16',4,'This footwear brand combines style and comfort effortlessly. Every step is a pleasure.'),(12,'MNO9012345',51,'2023-09-17',4,'The attention to detail in their shoe designs is truly impressive. It\'s all about craftsmanship.'),(13,'MNO9012345',65,'2023-09-18',5,'I love the versatility of their shoes. From casual to formal, they\'ve got you covered.'),(14,'MNO9012345',46,'2023-09-19',4,'If you\'re in search of durable and long-lasting footwear, this brand should be your go-to.'),(15,'PQR6789012',76,'2023-09-20',5,'Their shoes are like a second skin for your feet. You\'ll forget you\'re even wearing them.'),(16,'PQR6789012',51,'2023-09-21',3,'This brand offers a wide range of sizes and widths, making it easy to find your perfect fit.'),(17,'STU3456789',65,'2023-09-22',4,'The quality of materials used in their shoes is top-notch. You can feel the difference.'),(18,'STU3456789',77,'2023-09-23',3,'Their shoes are built to withstand any weather conditions. Rain or shine, they\'ve got you covered.'),(19,'STU3456789',51,'2023-09-24',4,'These shoes are worth every penny. The investment is worth it for the comfort and style.'),(20,'VWX0123456',52,'2023-09-25',4,'I\'ve never been disappointed with this shoe brand. They consistently exceed my expectations.'),(21,'VWX0123456',83,'2023-09-26',5,'This underwear brand is all about comfort. Their fabrics are incredibly soft and breathable.'),(22,'VWX0123456',92,'2023-09-27',4,'I appreciate the variety of styles and colors this brand offers. There\'s something for everyone.'),(23,'YZA7890123',110,'2023-09-28',4,'The fit of their underwear is perfect, and it stays that way even after multiple washes.'),(24,'YZA7890123',97,'2023-09-29',4,'If you\'re in search of affordable and high-quality underwear, this brand is a top choice.'),(25,'YZA7890123',84,'2023-09-30',3,'Their underwear is so comfy that you\'ll forget you\'re wearing it. A definite confidence booster.'),(26,'BCD4567890',88,'2023-10-01',5,'I love the seamless designs this brand has to offer. No more visible panty lines!'),(27,'BCD4567890',92,'2023-10-02',3,'This brand\'s underwear is perfect for everyday wear. You\'ll feel great all day long.'),(28,'BCD4567890',117,'2023-10-03',5,'The durability of their underwear is impressive. It lasts longer than most brands I\'ve tried.'),(29,'EFG1234567',92,'2023-10-04',4,'These undergarments are a great value for the price. I can\'t recommend them enough.'),(30,'EFG1234567',84,'2023-10-05',4,'Their underwear is like a second skin. You\'ll never want to wear anything else.'),(31,'EFG1234567',127,'2023-10-06',3,'This sports brand has everything you need for an active lifestyle. Quality and performance combined.'),(32,'HIJ8901234',134,'2023-10-07',4,'I\'ve been a fan of their sportswear for years. It\'s designed for athletes, and it shows.'),(33,'HIJ8901234',154,'2023-10-08',3,'The range of sports gear they offer is impressive. You\'ll find the perfect fit for your sport of choice.'),(34,'HIJ8901234',122,'2023-10-09',3,'This brand is synonymous with innovation. Their products always keep up with the latest technology.'),(35,'KLM5678901',131,'2023-10-10',3,'I trust this brand for my workouts. The durability and functionality are unbeatable.'),(36,'KLM5678901',134,'2023-10-11',3,'Their sports apparel looks great both in and out of the gym. It\'s all about style and performance.'),(37,'KLM5678901',147,'2023-10-12',3,'You\'ll feel confident and comfortable in this brand\'s sportswear. It\'s a game-changer.'),(38,'NOP2345678',134,'2023-10-13',3,'The support and flexibility in their sports bras are unmatched. Perfect for intense workouts.'),(39,'NOP2345678',124,'2023-10-14',5,'Whether you\'re a beginner or a pro athlete, this brand has something for everyone.'),(40,'NOP2345678',138,'2023-10-15',5,'I\'ve never been disappointed with this sports brand. Their products elevate my fitness journey.'),(41,'QRS9012345',161,'2023-10-16',3,'This clothing brand is my daily go-to. It\'s all about comfort and style for everyday wear.'),(42,'QRS9012345',192,'2023-10-17',5,'The variety of clothing styles they offer is fantastic. From casual to formal, they\'ve got it all.'),(43,'TUV6789012',199,'2023-10-18',4,'I appreciate the quality of their fabrics. Their clothes stand up to daily wear and tear.'),(44,'TUV6789012',184,'2023-10-19',5,'If you want a brand that offers both classic and trendy pieces, look no further.'),(45,'TUV6789012',165,'2023-10-20',4,'Their clothing is versatile and easy to mix and match. You can create countless outfits.'),(46,'WXY3456789',186,'2023-10-21',3,'I love the attention to detail in their designs. It\'s the little things that make a big difference.'),(47,'WXY3456789',177,'2023-10-22',4,'This brand consistently keeps up with fashion trends. You\'ll always be in style.'),(48,'ZAB0123456',165,'2023-10-23',4,'Their clothes are durable and can handle the demands of daily life. A must-have for your wardrobe.'),(49,'CDE7890123',171,'2023-10-24',5,'These pieces are a great value for the price. I can\'t get enough of their everyday style.'),(50,'FGH4567890',170,'2023-10-25',4,'You can trust this brand for your daily fashion needs. It\'s all about looking and feeling great.');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userID` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phoneNum` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL CHECK (`sex` in ('male','female')),
  `birthday` date DEFAULT NULL,
  `rank` varchar(20) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `FK_users_levels` (`rank`),
  CONSTRAINT `FK_users_levels` FOREIGN KEY (`rank`) REFERENCES `levels` (`rank`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('ABC1234567','abcd1234','John','123-456-7890','123 Dobong-ro, Seoul','male','1990-01-01','gold'),('BCD4567890','klmn7890','Eva','444-555-6666','707 Eulji-ro, Seoul','female','1980-08-08','gold'),('CDE7890123','vwxy3456','Ethan','345-456-5678','777 Yeoksam-dong, Seoul','male','1994-05-16','gold'),('DEF8901234','efgh5678','Alice','456-789-1230','456 Gangnam-daero, Seoul','female','1985-03-15','silver'),('EFG1234567','opqr1234','Mark','555-666-7777','808 Samseong-dong, Seoul','male','1993-06-23','silver'),('FGH4567890','zabc7890','Ava','456-567-6789','888 Sinsa-dong, Seoul','female','1984-03-08','silver'),('GHI5678901','ijkl9012','Mike','789-123-4560','789 Yeouido-dong, Seoul','male','2000-07-20','bronze'),('HIJ8901234','stuv5678','Grace','666-777-8888','909 Jamsil-dong, Seoul','female','1982-10-19','bronze'),('JKL2345678','mnop3456','Emily','321-654-9870','101 Hangangno 3-gil, Seoul','female','1992-12-05','gold'),('KLM5678901','wxyz9012','Peter','777-888-9999','111 Gwanghwamun, Seoul','male','2002-03-04','gold'),('MNO9012345','qrst7890','Chris','654-987-3210','202 Jongno-gu, Seoul','male','1988-06-10','silver'),('NOP2345678','bcde3456','Sophia','888-999-0000','222 Yongsan-gu, Seoul','female','1991-07-14','silver'),('PQR6789012','uvwx1234','Sara','987-321-6540','303 Itaewon-dong, Seoul','female','1995-09-25','bronze'),('QRS9012345','fghi7890','Oliver','999-000-1111','333 Apgujeong-ro, Seoul','male','1986-04-28','bronze'),('STU3456789','yzab5678','Alex','111-222-3333','404 Sinchon-dong, Seoul','male','1983-02-18','gold'),('TUV6789012','jklm1234','Emma','000-111-2222','444 Mapo-gu, Seoul','female','2001-01-09','gold'),('VWX0123456','cdef9012','Linda','222-333-4444','505 Sinchon-ro, Seoul','female','1979-11-30','silver'),('WXY3456789','nopq5678','Daniel','123-234-3456','555 Hongdae, Seoul','male','1997-09-03','silver'),('YZA7890123','ghij3456','Tom','333-444-5555','606 Myeongdong, Seoul','male','1998-04-12','bronze'),('ZAB0123456','rstu9012','Mia','234-345-4567','666 Sinchon-dong, Seoul','female','1987-12-11','bronze');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `wishcount`
--

DROP TABLE IF EXISTS `wishcount`;
/*!50001 DROP VIEW IF EXISTS `wishcount`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `wishcount` AS SELECT
 1 AS `productID`,
  1 AS `count` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `wishes`
--

DROP TABLE IF EXISTS `wishes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishes` (
  `userID` varchar(20) NOT NULL,
  `productID` int(11) NOT NULL,
  PRIMARY KEY (`userID`,`productID`),
  KEY `FK_wishes_products` (`productID`),
  CONSTRAINT `FK_wishes_products` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_wishes_users` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishes`
--

LOCK TABLES `wishes` WRITE;
/*!40000 ALTER TABLE `wishes` DISABLE KEYS */;
INSERT INTO `wishes` VALUES ('ABC1234567',33),('ABC1234567',34),('ABC1234567',35),('BCD4567890',58),('BCD4567890',59),('BCD4567890',60),('CDE7890123',49),('DEF8901234',36),('DEF8901234',37),('EFG1234567',29),('EFG1234567',30),('EFG1234567',31),('FGH4567890',50),('GHI5678901',38),('GHI5678901',39),('GHI5678901',40),('HIJ8901234',32),('HIJ8901234',33),('HIJ8901234',34),('JKL2345678',41),('JKL2345678',42),('JKL2345678',43),('KLM5678901',35),('KLM5678901',36),('KLM5678901',37),('MNO9012345',44),('MNO9012345',45),('MNO9012345',46),('NOP2345678',38),('NOP2345678',39),('NOP2345678',40),('PQR6789012',47),('PQR6789012',48),('QRS9012345',41),('QRS9012345',42),('STU3456789',49),('STU3456789',50),('STU3456789',51),('TUV6789012',43),('TUV6789012',44),('TUV6789012',45),('VWX0123456',52),('VWX0123456',53),('VWX0123456',54),('WXY3456789',46),('WXY3456789',47),('YZA7890123',55),('YZA7890123',56),('YZA7890123',57),('ZAB0123456',48);
/*!40000 ALTER TABLE `wishes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `deliveryview`
--

/*!50001 DROP VIEW IF EXISTS `deliveryview`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`team10`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `deliveryview` AS select `orders`.`orderID` AS `orderID`,`orders`.`userID` AS `userID`,`orders`.`date` AS `orderDate`,`users`.`address` AS `address`,`brands`.`brandName` AS `brandName`,`products`.`productName` AS `productName`,`orders`.`comment` AS `comment`,`deliveries`.`status` AS `status` from ((((`orders` join `brands` on(`orders`.`brandID` = `brands`.`brandID`)) join `products` on(`orders`.`productID` = `products`.`productID`)) join `users` on(`orders`.`userID` = `users`.`userID`)) join `deliveries` on(`orders`.`orderID` = `deliveries`.`orderID`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `ordercount`
--

/*!50001 DROP VIEW IF EXISTS `ordercount`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`team10`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `ordercount` AS select `orders`.`productID` AS `productID`,count(`orders`.`productID`) AS `count` from `orders` group by `orders`.`productID` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `reviewrating`
--

/*!50001 DROP VIEW IF EXISTS `reviewrating`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`team10`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `reviewrating` AS select `reviews`.`productID` AS `productID`,format(avg(`reviews`.`grade`),2) AS `rating` from `reviews` group by `reviews`.`productID` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `wishcount`
--

/*!50001 DROP VIEW IF EXISTS `wishcount`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`team10`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `wishcount` AS select `wishes`.`productID` AS `productID`,count(`wishes`.`productID`) AS `count` from `wishes` group by `wishes`.`productID` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-08 19:32:13
