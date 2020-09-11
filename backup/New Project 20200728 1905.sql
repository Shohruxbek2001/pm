-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.28


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema mebel
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ mebel;
USE mebel;

--
-- Table structure for table `mebel`.`about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `phone_number` varchar(45) DEFAULT NULL,
  `home_number` varchar(45) DEFAULT NULL,
  `ofice_number` varchar(45) DEFAULT NULL,
  `detals` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mebel`.`about`
--

/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`about_id`,`phone_number`,`home_number`,`ofice_number`,`detals`) VALUES 
 (1,'23232332','454545','454545fdvdf','dfvdfvfdvdfvsdvdsv');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;


--
-- Table structure for table `mebel`.`brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_oz` varchar(255) NOT NULL,
  `brand_eng` varchar(255) NOT NULL,
  `brand_ru` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mebel`.`brand`
--

/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` (`brand_id`,`brand_oz`,`brand_eng`,`brand_ru`) VALUES 
 (1,'class','class','class'),
 (2,'zvezda','zvezda','zvezda');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;


--
-- Table structure for table `mebel`.`catalog`
--

DROP TABLE IF EXISTS `catalog`;
CREATE TABLE `catalog` (
  `catalog_id` int(11) NOT NULL AUTO_INCREMENT,
  `catalog_name_oz` varchar(255) NOT NULL,
  `catalog_name_eng` varchar(255) NOT NULL,
  `catalog_name_ru` varchar(255) NOT NULL,
  `category_type_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  PRIMARY KEY (`catalog_id`),
  KEY `fk_catalog_category_type1_idx` (`category_type_id`),
  CONSTRAINT `fk_catalog_category_type1` FOREIGN KEY (`category_type_id`) REFERENCES `category_type` (`category_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mebel`.`catalog`
--

/*!40000 ALTER TABLE `catalog` DISABLE KEYS */;
INSERT INTO `catalog` (`catalog_id`,`catalog_name_oz`,`catalog_name_eng`,`catalog_name_ru`,`category_type_id`,`alias`) VALUES 
 (1,'divan','divan','divan',1,'ascacas'),
 (2,'spalniy','spalniy','spalniy',2,'nfgngbdbdfbdf'),
 (3,'lyustra','lyustra','lyustra',3,'kjsbvsjdbvisidvb');
/*!40000 ALTER TABLE `catalog` ENABLE KEYS */;


--
-- Table structure for table `mebel`.`category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name_oz` varchar(255) NOT NULL,
  `category_name_eng` varchar(255) NOT NULL,
  `category_name_ru` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mebel`.`category`
--

/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`category_id`,`category_name_oz`,`category_name_eng`,`category_name_ru`,`alias`) VALUES 
 (1,'skidkali','skidkali','skidkali','csdasc'),
 (2,'populyarniyi','populyarniyi','populyarniyi','csdvsdv'),
 (3,'novinkiy','novinkiy','novinkiy','hrkgksnkdvskv');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


--
-- Table structure for table `mebel`.`category_type`
--

DROP TABLE IF EXISTS `category_type`;
CREATE TABLE `category_type` (
  `category_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_type_oz` varchar(255) NOT NULL,
  `category_type_eng` varchar(255) NOT NULL,
  `category_type_ru` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`category_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mebel`.`category_type`
--

/*!40000 ALTER TABLE `category_type` DISABLE KEYS */;
INSERT INTO `category_type` (`category_type_id`,`category_type_oz`,`category_type_eng`,`category_type_ru`,`alias`,`image`) VALUES 
 (1,'mehmonxona','mehmonhona','mehomonhona','adasccas','item.jpg'),
 (2,'spalniy','spalniy','spalniy','dfbdfbdfb','bedroom.jpg'),
 (3,'kuxniya','kuxniya','kuxniya','dfbdfbdfb','kitchen.jpg'),
 (4,'dush','dush','dush','e7LQVY3xra','cFt4XQ2MuA99UK6mRIorEam2vdg.jpg');
/*!40000 ALTER TABLE `category_type` ENABLE KEYS */;


--
-- Table structure for table `mebel`.`comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `profile_image` varchar(45) DEFAULT NULL,
  `comment_text` text NOT NULL,
  `status` varchar(45) NOT NULL,
  `evaluation` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mebel`.`comment`
--

/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;


--
-- Table structure for table `mebel`.`goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `goods_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_oz` varchar(255) NOT NULL,
  `name_eng` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mebel`.`goods`
--

/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` (`goods_id`,`name_oz`,`name_eng`,`name_ru`) VALUES 
 (1,'paxta','paxta','paxta');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;


--
-- Table structure for table `mebel`.`product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `product_name_oz` varchar(255) NOT NULL,
  `product_name_eng` varchar(255) NOT NULL,
  `product_name_ru` varchar(255) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `details_oz` text NOT NULL,
  `details_eng` text NOT NULL,
  `details_ru` text NOT NULL,
  `price_name_oz` varchar(255) NOT NULL,
  `price_name_eng` varchar(255) NOT NULL,
  `price_name_ru` varchar(255) NOT NULL,
  `no_discount_oz` varchar(255) DEFAULT NULL,
  `no_discount_eng` varchar(255) DEFAULT NULL,
  `no_discount_ru` varchar(255) DEFAULT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `status` enum('Enable','Disable') NOT NULL DEFAULT 'Enable',
  `height` varchar(45) NOT NULL,
  `length` varchar(45) NOT NULL,
  `evaluation` double NOT NULL,
  `width` varchar(45) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `fk_product_catalog1_idx` (`catalog_id`),
  KEY `fk_product_goods1_idx` (`goods_id`),
  KEY `fk_product_state1_idx` (`state_id`),
  KEY `fk_product_brand1_idx` (`brand_id`),
  KEY `fk_product_category1_idx` (`category_id`),
  CONSTRAINT `fk_product_brand1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_catalog1` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`catalog_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_goods1` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`goods_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_state1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mebel`.`product`
--

/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`product_id`,`alias`,`product_name_oz`,`product_name_eng`,`product_name_ru`,`catalog_id`,`goods_id`,`state_id`,`brand_id`,`category_id`,`details_oz`,`details_eng`,`details_ru`,`price_name_oz`,`price_name_eng`,`price_name_ru`,`no_discount_oz`,`no_discount_eng`,`no_discount_ru`,`image1`,`image2`,`image3`,`image4`,`status`,`height`,`length`,`evaluation`,`width`) VALUES 
 (1,'BD7Fj2KzHW','blesk','blesk','blesk',1,1,1,1,1,'<p>Диван идеально подходит для отдыха в залах ожидания и для дома</p>','<p>Диван идеально подходит для отдыха в залах ожидания и для дома</p>','<p>Диван идеально подходит для отдыха в залах ожидания и для дома</p>','250 000 uzs','250 000 uzs','250 000 uzs','300 000 uzs','300 000 uzs','300 000 uzs','YfzkXj9W0rKAyl5uiumvotW87Up.jpg','rUxGMaxCzaKfqCiQOYF1X6MiumW.jpg','QwqlPU20mVIZGHAHNmcHXGTUsKC.jpg','ef22EdukcV9Pj98plaBnMbnbaqK.jpg','Enable','120sm','80sm',5,'40sm'),
 (2,'dsvsvsd','stul','stul','stul',1,1,1,1,2,'otiradon kursi','otiradon kursi','otiradon kursi','250 000 uzs','250 000 uzs','250 000 uzs',NULL,NULL,NULL,'1.jpg','1.jpg','1.jpg','1.jpg','Enable','120sm','80sm',5,'40sm');
INSERT INTO `product` (`product_id`,`alias`,`product_name_oz`,`product_name_eng`,`product_name_ru`,`catalog_id`,`goods_id`,`state_id`,`brand_id`,`category_id`,`details_oz`,`details_eng`,`details_ru`,`price_name_oz`,`price_name_eng`,`price_name_ru`,`no_discount_oz`,`no_discount_eng`,`no_discount_ru`,`image1`,`image2`,`image3`,`image4`,`status`,`height`,`length`,`evaluation`,`width`) VALUES 
 (3,'fdfbdb','stul','stul','stul',1,1,1,1,2,'otiradon kursi','otiradon kursi','otiradon kursi','250 000 uzs','250 000 uzs','250 000 uzs',NULL,NULL,NULL,'1.jpg','1.jpg','1.jpg','1.jpg','Enable','120sm','80sm',5,'40sm'),
 (4,'sdvsdvsdv','blesk','blesk','blesk',1,1,1,1,3,'otiradon kursi','otiradon kursi','otiradon kursi','250 000 uzs','250 000 uzs','250 000 uzs',NULL,NULL,NULL,'1.jpg','1.jpg','1.jpg','1.jpg','Enable','120sm','80sm',5,'40sm'),
 (5,'dfsdvdfsdv','vanna','vanna','vanna',1,1,2,1,3,'<p>acasdcascasca</p>','<p>cassacascsac</p>','<p>cascascascasc</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','JBVd1xSdrEQwZah1BFmDw4QvvtY.jpg','hqSNktXBddjPFe18y3IhixvGLr4.jpg','OshB3OcVUhvSET2MCWQPkKC7m2V.jpg','mUknnjehfgVczMCsAEDYql6K7uM.jpg','Enable','120sm','80sm',5,'40sm'),
 (6,'fdfbdb','blesk','blesk','blesk',1,1,1,1,3,'<p>sdvsdvdsv</p>','<p>vsdvsdv</p>','<p>dvsdvsdv</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','tvyzsmC49wrRSdFP8YQf8nR1RE5.jpg','rcZuG9o4FlvDgNvJXDAySRaVeFZ.jpg','iNCRLmX961ymp1WxBKs5pfAiiLj.jpg','NjINbAngpFvjrDocK5ByrERiiw8.jpg','Enable','120sm','80sm',5,'40sm');
INSERT INTO `product` (`product_id`,`alias`,`product_name_oz`,`product_name_eng`,`product_name_ru`,`catalog_id`,`goods_id`,`state_id`,`brand_id`,`category_id`,`details_oz`,`details_eng`,`details_ru`,`price_name_oz`,`price_name_eng`,`price_name_ru`,`no_discount_oz`,`no_discount_eng`,`no_discount_ru`,`image1`,`image2`,`image3`,`image4`,`status`,`height`,`length`,`evaluation`,`width`) VALUES 
 (7,'ggsdfsdsd','bobur','bobur','bobur',2,1,2,1,2,'<p>nknsdkvnksndkvnksd</p>','<p>lsndvlnsdlvnkklvsd</p>','<p>s dv,nsldv</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','0P9kpw7FFytEWtLsrAwna12nRG2.jpg','bumDwqgDqNnauWqjAoMJc3cnFqF.jpg','lxbbWA5FaOAo6ZSMhOiICN7WxeH.png','DEEpCkdupsWJwYbgCvTMgphRYop.jpg','Enable','120sm','80sm',5,'40sm'),
 (8,'dsvsvsd','blesk','vanna','bobur',2,1,2,1,1,'<p>hs;lkdvh;osdvo;dsjovkj</p>','<p>lsnelv\'svjs\'pdjvn\'sndvjbdvnsolwinvdo</p>','<p>lknrvlvsndvsndvj</p>','250 000 uzs','250 000 uzs','250 000 uzs','300 000 uzs','300 000 uzs','300 000 uzs','gz3yd20dK9H5OSA3Dl3oRtTxm68.jpg','bp1NoHHHsqzMVJLrVBAoZj6zpyy.jpg','FoSh3lSZ7Dox0AjztTP1ey28gAK.jpg','rXaHRr4dv3pFY1n1Ym6AL9PblBG.jpg','Enable','120sm','80sm',5,'40sm'),
 (9,'sdvsdvsdv','stul','stul','stul',1,1,2,1,2,'<p>fgndnfb</p>','<p>edebdrbedr</p>','<p>dfbegergegv</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','NuGazdibTIXy3775wNuZx1KYK3n.jpg','tNx3AYotj7merJR88AGGXc7bgPm.jpg','SFJIZrHzHqBpfY17Z9W4cn9Nwy7.jpg','Z6IRCRPy9ElGyUKIBtvOeg7UNi7.jpg','Enable','120sm','80sm',5,'40sm');
INSERT INTO `product` (`product_id`,`alias`,`product_name_oz`,`product_name_eng`,`product_name_ru`,`catalog_id`,`goods_id`,`state_id`,`brand_id`,`category_id`,`details_oz`,`details_eng`,`details_ru`,`price_name_oz`,`price_name_eng`,`price_name_ru`,`no_discount_oz`,`no_discount_eng`,`no_discount_ru`,`image1`,`image2`,`image3`,`image4`,`status`,`height`,`length`,`evaluation`,`width`) VALUES 
 (10,'dsvsvsd','blesk','blesk','blesk',2,1,2,1,2,'<p>dfbdfbdfb</p>','<p>&nbsp;sffrgfwgfsd</p>','<p>bdfbsdvsva</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','dxR4yjLeO6wq989Bcgzrr65bNbx.jpg','JJ8nWIHjNZfJS6VVS3tSbbqcQZG.jpg','wldP8LZWDCrt6i2iLGYnPhAJ5jB.jpg','RNsHQmvg8H4uTeaqIYPBeLHloJp.jpg','Enable','120sm','80sm',5,'40sm'),
 (11,'etgergerg','kreslo','kreslo','kreslo',2,1,2,1,1,'<p>effwfwefewf</p>','<p>fwefwfewef</p>','<p>wefwefwefwef</p>','250 000 uzs','250 000 uzs','250 000 uzs','300 000 uzs','300 000 uzs','300 000 uzs','V3j7RIJjQm3Cw5V6yNlLo3pau3v.jpg','Usl8nk85c6Sg5XuDFWgFESYppTr.jpg','eYTwtsOhFtpVwOaVHxxEbXBLpBx.jpg','1oOtjIFEJySozGtTjAPKqAsNDpc.jpg','Enable','120sm','80sm',5,'40sm'),
 (12,'etgergerg','kreslo','kreslo','kreslo',2,1,2,1,1,'<p>effwfwefewf</p>','<p>fwefwfewef</p>','<p>wefwefwefwef</p>','250 000 uzs','250 000 uzs','250 000 uzs','300 000 uzs','300 000 uzs','300 000 uzs','uM4rHva2nNfxAGU353t4knjAYtE.jpg','xwyJONSs3uovftevCzInnexhnqv.jpg','rSyTZgCMI9iD8ZVy96LCgq7VVp9.jpg','PYQLSjnHb7qKHxRSjdwScJmxBgY.jpg','Enable','120sm','80sm',5,'40sm');
INSERT INTO `product` (`product_id`,`alias`,`product_name_oz`,`product_name_eng`,`product_name_ru`,`catalog_id`,`goods_id`,`state_id`,`brand_id`,`category_id`,`details_oz`,`details_eng`,`details_ru`,`price_name_oz`,`price_name_eng`,`price_name_ru`,`no_discount_oz`,`no_discount_eng`,`no_discount_ru`,`image1`,`image2`,`image3`,`image4`,`status`,`height`,`length`,`evaluation`,`width`) VALUES 
 (13,'vdfvvfsdv','stul','stul','stul',2,1,1,1,3,'<p>vsdvsdvsdvs</p>','<p>vsvsdvsdvsd</p>','<p>vsdvsdv</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','kgw6KC4NmhVeetJEgCAeYW2Viqk.jpg','jpFuF6kGon4qbqGsY52XiPFb7fv.jpg','X9iYGirfOwukvG9Ni7MC14X8Btc.jpg','JrSXAUD7qGn3HipDGDBTbZst3az.jpg','Enable','120sm','80sm',5,'40sm'),
 (14,'vsdvsdvsdv','blesk','blesk','blesk',2,1,1,1,3,'<p>vsdvsdvsdv</p>','<p>hnghnghnfn</p>','<p>fgnfgnfn</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','MOrHyaLHUVl0ONHd48p2Zs1eCX3.jpg','FviLKGO4lbvYEMWJw8qzOQTuJZN.jpg','I1SyWk4ak2zebWc7GNRpFFePGAQ.jpg','61AJdMjxQUOW7vl5M3HyyK2BEdk.jpg','Enable','120sm','80sm',5,'40sm'),
 (15,'dfvdbdgbdf','blesk','blesk','stul',1,1,2,1,3,'<p>bdbdfbebef</p>','<p>bdfbdfbd</p>','<p>dfbdfbdfbfdb</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','abr6C8FuQoNTlPtKFIHAJGHQcxt.jpg','otMgPTEvPWJC3uU2WoDrvLcWT0k.jpg','Bk5BMj9k21N4oH6NzjOGBzBMkQg.jpg','TcGh2qLnNidHMgFzJjScDm5Bk8h.jpg','Enable','120sm','80sm',5,'40sm');
INSERT INTO `product` (`product_id`,`alias`,`product_name_oz`,`product_name_eng`,`product_name_ru`,`catalog_id`,`goods_id`,`state_id`,`brand_id`,`category_id`,`details_oz`,`details_eng`,`details_ru`,`price_name_oz`,`price_name_eng`,`price_name_ru`,`no_discount_oz`,`no_discount_eng`,`no_discount_ru`,`image1`,`image2`,`image3`,`image4`,`status`,`height`,`length`,`evaluation`,`width`) VALUES 
 (16,'fdbdfb','blesk','blesk','blesk',2,1,2,1,3,'<p>vdfbsvsvsfv</p>','<p>sfdsdfbvsfvs</p>','<p>vsfbsfbsd</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','RYplvky0FzIw6d82fdu6g8n90gy.jpg','ZR5aqHKkVbMs6l7m6OwAEx4mDAX.jpg','Ad0siUiotmRVmeagYVzxzu6jOEe.jpg','h251KdAOCQgqfWdxEEjlT9NZvAX.jpg','Enable','120sm','80sm',5,'40sm'),
 (17,'dfbvsvsdv','kreslo','kreslo','kreslo',3,1,2,1,3,'<p>dvsdvsdvsdv</p>','<p>fbfsvdsvsvs</p>','<p>sdvsdvsdv</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','59efxNK2R5O4fEJZoJlOyfkEziu.jpg','mFrZC58316VRjIxPLY9c1bpbNxP.jpg','7J9CQhnVjNutm51feo1I4Vjse1P.jpg','TpaCN9XC2HgEU8esudqE4xB5SMP.jpg','Enable','120sm','80sm',5,'40sm'),
 (18,'h dfgfd ggdgfdfg','blesk','blesk','blesk',3,1,2,1,3,'<p>regergergfvd</p>','<p>bdfbdbdbf</p>','<p>bbdrbfbdb</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','Yf07pYn3IGO3iqerjkncp8k8cK5.jpg','FXPI8fVueRf5Y5iUsfrwujNcvsa.jpg','ULSW5hiFNLpClxgR6PzPFj1TC5l.jpg','xVD6Jd1SDmlZ3wqjJHzwt6XjpGw.jpg','Enable','120sm','80sm',5,'40sm');
INSERT INTO `product` (`product_id`,`alias`,`product_name_oz`,`product_name_eng`,`product_name_ru`,`catalog_id`,`goods_id`,`state_id`,`brand_id`,`category_id`,`details_oz`,`details_eng`,`details_ru`,`price_name_oz`,`price_name_eng`,`price_name_ru`,`no_discount_oz`,`no_discount_eng`,`no_discount_ru`,`image1`,`image2`,`image3`,`image4`,`status`,`height`,`length`,`evaluation`,`width`) VALUES 
 (19,'svvdsvdsv','vanna','vanna','vanna',3,1,2,1,3,'<p>sdvsdvsdvs</p>','<p>vsdvvsdv</p>','<p>svsdvsv</p>','250 000 uzs','250 000 uzs','250 000 uzs','','','','qXHutrY9BytCzkFymAFBlW3L2OO.jpg','NF28u6RrNuItdqQWutfLPc1wyoo.jpg','pmF5YE8DmT0ZvSAtQMeRVo09MoY.jpg','wMxk7ZPkApAVO34diizO5vfvMcT.jpg','Enable','120sm','80sm',5,'40sm');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


--
-- Table structure for table `mebel`.`state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_oz` varchar(255) NOT NULL,
  `state_eng` varchar(255) NOT NULL,
  `state_ru` varchar(255) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mebel`.`state`
--

/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` (`state_id`,`state_oz`,`state_eng`,`state_ru`) VALUES 
 (1,'aacssc','ascac','sdfvs'),
 (2,'Xitoy','Xitoy','Xitoy');
/*!40000 ALTER TABLE `state` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
