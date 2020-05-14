-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 05:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `baby_products`
--

CREATE TABLE `baby_products` (
  `id` int(11) NOT NULL,
  `descpt` varchar(50) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baby_products`
--

INSERT INTO `baby_products` (`id`, `descpt`, `brand`, `qty`, `price`, `logo`) VALUES
(1, 'acqua kids comb cr smooth 250 ml', 'Acqua kids', 1, 9000, 'acquakids.jpeg'),
(2, 'acqua kids cond curly 400 ml', 'Acqua Kids', 37, 9750, 'acquakids.jpeg'),
(3, 'acqua kids cond smooth and fine 400 ml', 'Acqua kids', 12, 10000, 'acquakids.jpeg'),
(4, 'acqua kids cond titti frutti 400 ml', 'Acqua kids', 10, 10000, 'acquakids.jpeg'),
(5, 'acqua kids shp 2 in 1 milk shake 400 ml', 'Acqua kids', 0, 10000, 'acquakids.jpeg'),
(6, 'avent 2 shaped soothie stronger teat  3m+ boy', 'Avent', 1, 22500, 'avent.jpeg'),
(7, 'AVENT 2 SHAPED SOOTHIE STRONGER TEAT 3M+ BOY', 'Avent', 0, 30000, 'avent.jpeg'),
(8, 'AVENT 2 SHAPED SOOTHIE STRONGER TEAT 3M+ GIRL', 'Avent', 0, 30000, 'avent.jpeg'),
(9, 'Avent 2 Silic. Animal 6 M+', 'Avent ', 17, 11100, 'avent.jpeg'),
(10, 'Avent 2 Silic. Day Time Bear Soother 6m+ ', 'Avent ', 3, 11100, 'avent.jpeg'),
(11, ' Avent 2 Silicone Teats', 'Avent', 15, 33000, 'avent.jpeg'),
(13, 'Avent 2 Silicone Teats 6 M                        ', 'Avent                                   ', 12, 11100, 'avent.jpeg'),
(14, 'Avent 2 Silicone Teats 6 M+                       ', 'Avent                                   ', 6, 27000, 'avent.jpeg'),
(15, 'Avent 2 Silicone Teats 6 M+                       ', 'Avent                                   ', 1, 27000, 'avent.jpeg'),
(16, 'Avent 2 Silicone Teats 6 M+                       ', 'Avent                                   ', 47, 27000, 'avent.jpeg'),
(17, 'Avent 2\'s Silicone Teats 6+                       ', 'Avent                                   ', 10, 10090.9, 'avent.jpeg'),
(18, 'Avent 2\'s Translucent Soother 6-18                ', 'Avent                                   ', 4, 11100, 'avent.jpeg'),
(19, 'Avent 2\'s Translucent Soother 6-18 M              ', 'Avent                                   ', 4, 15640.9, 'avent.jpeg'),
(20, 'Avent Silicone Teats 2\'s 1m+/2 Holes              ', 'Avent                                   ', 12, 33000, 'avent.jpeg'),
(21, 'Avent Silicone Teats 2\'s 1m+/2 Holes              ', 'Avent                                   ', 13, 33000, 'avent.jpeg'),
(22, 'Avent Silicone Teats 2\'s 1m+/2 Holes              ', 'Avent                                   ', 13, 33000, 'avent.jpeg'),
(23, 'Avent Silicone Teats 2\'s 1m+/2 Holes              ', 'Avent                                   ', 12, 33000, 'avent.jpeg'),
(24, 'Avent Silicone Teats 2\'s 3 M+/ Variable           ', 'Avent                                   ', 11, 33000, 'avent.jpeg'),
(25, 'Avent Silicone Teats 2\'s 3 M+/ Variable           ', 'Avent                                   ', 12, 33000, 'avent.jpeg'),
(26, 'Avent Silicone Teats 2\'s 3 M+/ Variable           ', 'Avent                                   ', 13, 33000, 'avent.jpeg'),
(27, 'Avent Silicone Teats 2\'s 3 M+/ Variable           ', 'Avent                                   ', 6, 33000, 'avent.jpeg'),
(28, 'Avent Silicone Teats 2\'s 3 M+/ Variable           ', 'Avent                                   ', 11, 33000, 'avent.jpeg'),
(29, 'Avent Silicone teats 2\'s 3+ /3 Hole               ', 'Avent                                   ', 11, 33000, 'avent.jpeg'),
(30, 'Avent Silicone teats 2\'s 3+ /3 Hole               ', 'Avent                                   ', 18, 33000, 'avent.jpeg'),
(31, 'Avent Silicone teats 2\'s 3+ /3 Hole               ', 'Avent                                   ', 12, 33000, 'avent.jpeg'),
(32, 'Avent Silicone teats 2\'s 3+ /3 Hole               ', 'Avent                                   ', 8, 33000, 'avent.jpeg'),
(33, 'Avent Silicone Teats 2\'s 6m /4 Holes              ', 'Avent                                   ', 17, 33000, 'avent.jpeg'),
(34, 'Avent Silicone Teats 3+                           ', 'Avent                    ', 30, 10090.9, 'avent.jpeg'),
(35, 'Avent Silicone Teats Fast 4 Holes 6+              ', 'Avent                                   ', 41, 10090.9, 'avent.jpeg'),
(36, 'Avent Silicone Teats Newborn 0+                   ', 'Avent                 ', 29, 10090.9, 'avent.jpeg'),
(37, 'Avent Silicone Teats Slow 1+                      ', 'Avent                      ', 10, 10090.9, 'avent.jpeg'),
(38, 'Avent Silicone Teats Variable 3+                  ', 'Avent                      ', 15, 10090.9, 'avent.jpeg'),
(39, 'Avent Tempo Nurser Bottle 118 Ml                  ', 'Avent                             ', 2, 19172.7, 'avent.jpeg'),
(40, 'Avent Tempo Nurser Bottle 236                     ', 'Avent           ', 1, 20181.8, 'avent.jpeg'),
(41, 'Avent Therma Bag                                  ', 'Avent                                   ', 24, 106000, 'avent.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `baby_toiletries`
--

CREATE TABLE `baby_toiletries` (
  `id` int(11) NOT NULL,
  `descpt` varchar(45) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baby_toiletries`
--

INSERT INTO `baby_toiletries` (`id`, `descpt`, `brand`, `qty`, `price`, `logo`) VALUES
(1, 'Pampers 1 Prm ( 2-5 kg ) 2x33', 'Pampers', 4, 23000, 'pampers.jpeg'),
(2, 'Pampers 1 Prm ( 2-5 kg ) 50', 'Pampers', 2, 20000, 'pampers.jpeg'),
(3, 'Pampers 3 (4-9) 68pcs+ 27pcs free            ', 'Pampers                       ', 5, 27000, 'pampers.jpeg'),
(4, 'pampers 5  (12-18 kg) 70 PCS', 'Pampers                       ', 5, 55500, 'pampers.jpeg'),
(5, 'pampers 5  (12-18 kg) 70 PCS', 'Pampers                       ', 2, 55500, 'pampers.jpeg'),
(6, 'pampers 5 (11-16) 52 pcs  (+23 free)', 'Pampers                       ', 1, 28000, 'pampers.jpeg'),
(7, 'Pampers 5 (-15%) (11-25 kg) 70 pcs giant pack', 'Pampers                       ', 2, 36000, 'pampers.jpeg'),
(8, 'Pampers 6 (16+)  Xxl *36                     ', 'Pampers       ', 10, 54000, 'pampers.jpeg'),
(9, 'Pampers 6 15+ XXL offer 12% discount', 'Pampers                       ', 7, 29000, 'pampers.jpeg'),
(10, 'Pampers pants 6 (16+ KG) 44 pants', 'Pampers                       ', 1, 62000, 'pampers.jpeg'),
(11, 'Pampers premium  (4)  2x54 +bag', 'Pampers                       ', 3, 54000, 'pampers.jpeg'),
(12, 'Pampers premium 3 (5-9kg) 62diaper', 'Pampers                       ', 5, 68000, 'pampers.jpeg'),
(13, 'pampers premium 4(8-14kg) 8% offre', 'Pampers                       ', 9, 16000, 'pampers.jpeg'),
(14, 'Pampers premium 4+ (10-15) 50 pcs', 'Pampers                       ', 5, 68000, 'pampers.jpeg'),
(15, 'Pampers premium care 4(8-14) 23 diaper', 'Pampers                       ', 6, 31500, 'pampers.jpeg'),
(16, 'Pampers premium care 5 (11-18kg) 46 diaper', 'Pampers                       ', 4, 68000, 'pampers.jpeg'),
(17, 'Pampers prm  5 ( 11 a 18kg) offre 10%', 'Pampers                       ', 1, 34000, 'pampers.jpeg'),
(18, 'pampers prm (1)  (2-5kg) 50\'', 'Pampers                       ', 5, 39500, 'pampers.jpeg'),
(19, 'Pampers prm (3) ( 5-9kg) offre 8%', 'Pampers                       ', 7, 16000, 'pampers.jpeg'),
(20, 'Pampers Prm 3 ( 62 pcs ) 15%', 'Pampers                       ', 2, 32000, 'pampers.jpeg'),
(21, 'Pampers prm 4 (9-14)kg 54 pcs offre', 'Pampers                       ', 1, 32500, 'pampers.jpeg'),
(22, 'Pampers PRM 5 ( 11-18 kg ) pm 8%', 'Pampers                       ', 5, 16000, 'pampers.jpeg'),
(23, 'pampers prm 5 (11-16kg) 15%', 'Pampers                       ', 1, 32000, 'pampers.jpeg'),
(24, 'pampers prm 5 (11-16kg) 15%', 'Pampers                       ', 2, 32000, 'pampers.jpeg'),
(25, 'pampers prm 5 (11-16kg) 15%', 'Pampers                       ', 3, 32000, 'pampers.jpeg'),
(26, 'Pampers pure 1 (2-5kg)', 'Pampers                       ', 1, 56000, 'pampers.jpeg'),
(27, 'Pampers pure 2 (4-8kg)', 'Pampers                       ', 1, 56000, 'pampers.jpeg'),
(28, 'Pampers pure 3 (6-10kg)', 'Pampers                       ', 1, 56000, 'pampers.jpeg'),
(29, 'Pampers pure 4 (9-14kg)', 'Pampers                       ', 1, 56000, 'pampers.jpeg'),
(30, 'Pampers pure 5 (11+kg)', 'Pampers                       ', 1, 56000, 'pampers.jpeg'),
(31, 'pampers wipes fresh refil(*64) +25%', 'Pampers                       ', 2, 0, 'pampers.jpeg'),
(32, 'pediaderm 100g', 'Europharm                     ', 1, 19758, 'europharm.jpeg'),
(33, 'pediaderm 100g', 'Europharm                     ', 3, 19758, 'europharm.jpeg'),
(34, 'pediaderm 100g', 'Europharm                     ', 0, 19758, 'europharm.jpeg'),
(35, 'pediaderm 100g', 'Europharm                     ', 20, 19758, 'europharm.jpeg'),
(36, 'Pigeon Silicon nipple (M) ', 'Pigeon                        ', 1, 5045.45, 'pigeon.jpeg'),
(37, 'Playtex Drop Liners                          ', 'Playtex                       ', 10, 23713.6, 'playtex-logo.jpeg'),
(38, 'Princess Disney Design Soap                  ', 'Sanofi Aventis                ', 1, 5045.45, 'sanofiaventis.jpeg'),
(39, 'purborn size 4  7-12 kg', 'pureborn', 1, 22000, 'pureborn.jpeg'),
(40, 'pureborn size 1 new born 0 to 4.5 kg', 'pureborn', 2, 22000, 'pureborn.jpeg'),
(41, 'pureborn size 2  3 to 6 kg', 'pureborn', 2, 22000, 'pureborn.jpeg'),
(42, 'pureborn size 3   5.5 to 8 kg', 'pureborn', 1, 22000, 'pureborn.jpeg'),
(43, 'pureborn size 5  11-18kg', 'pureborn', 1, 22000, 'pureborn.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cosmetics`
--

CREATE TABLE `cosmetics` (
  `id` int(11) NOT NULL,
  `descpt` varchar(50) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cosmetics`
--

INSERT INTO `cosmetics` (`id`, `descpt`, `brand`, `qty`, `price`, `logo`) VALUES
(1, 'vichy  aerosol anti transpirant ', 'Vichy', 21, 48000, 'vichylogo.jpeg'),
(2, 'vichy  deo bille a trace int 50 ml', 'Vichy                                   ', 24, 48000, 'vichylogo.jpeg'),
(3, 'Vichy Aerosol Anti Traces 125 Ml                  ', 'Vichy                                   ', 27, 25000, 'vichylogo.jpeg'),
(4, 'Vichy Aminexil Spf 94 Homme                       ', 'Vichy                                   ', 1, 110000, 'vichylogo.jpeg'),
(5, 'Vichy anti dark spot 50ml', 'Vichy                                   ', 19, 52000, 'vichylogo.jpeg'),
(6, 'vichy cs anti dark spot 50 ml coffret', 'Vichy                                   ', 10, 52000, 'vichylogo.jpeg'),
(7, 'Vichy Cs Cr Onctueuse 50+                         ', 'Vichy                                   ', 12, 49000, 'vichylogo.jpeg'),
(8, 'vichy cs dry touch ip 50 coffret', 'Vichy                                   ', 16, 52000, 'vichylogo.jpeg'),
(9, 'Vichy Cs Dry Touch Tt 50 50 Ml                    ', 'Vichy                                   ', 16, 52000, 'vichylogo.jpeg'),
(10, 'Vichy Cs Dry Touch50 Ml                           ', 'Vichy                                   ', 20, 52000, 'vichylogo.jpeg'),
(11, 'Vichy Demaq Integral                              ', 'Vichy                                   ', 2, 37500, 'vichylogo.jpeg'),
(12, 'Vichy Demaq Integral                              ', 'Vichy                                   ', 12, 37500, 'vichylogo.jpeg'),
(13, 'Vichy Demaq Yeux Biphase 150 Ml                   ', 'Vichy                                   ', 6, 34000, 'vichylogo.jpeg'),
(14, 'Vichy Deo Fraich.extreme Fruite 24h               ', 'Vichy                                   ', 15, 25000, 'vichylogo.jpeg'),
(15, 'vichy deo mineral roll on 50 ml', 'Vichy                                   ', 8, 25000, 'vichylogo.jpeg'),
(16, 'vichy deo roll on anti trans green', 'Vichy                                   ', 17, 46500, 'vichylogo.jpeg'),
(17, 'Vichy Deod.anti Transpirant Spray 24h             ', 'Vichy                                   ', 3, 25000, 'vichylogo.jpeg'),
(18, 'vichy dercos aminexil women (21*6ml)', 'Vichy                                   ', 6, 110000, 'vichylogo.jpeg'),
(19, 'Vichy Dercos Ap Shp Nutri Repar                   ', 'Vichy                                   ', 5, 41000, 'vichylogo.jpeg'),
(20, 'vichy dercos apres shampoing energisant', 'Vichy                                   ', 9, 42000, 'vichylogo.jpeg'),
(21, 'Vichy dercos densi _solutions concentree', 'Vichy                                   ', 8, 69500, 'vichylogo.jpeg'),
(22, 'vichy dercos densi _solutions shampoing epaisseur ', 'Vichy                                   ', 10, 38000, 'vichylogo.jpeg'),
(23, 'vichy dercos densi _solutions shampoing epaisseur ', 'Vichy                                   ', 15, 38000, 'vichylogo.jpeg'),
(24, 'Vichy dercos densi_solutions Baume regenerant', 'Vichy                                   ', 8, 42000, 'vichylogo.jpeg'),
(25, 'Vichy Dt Anti Pellic Ccs 200 Ml                   ', 'Vichy                                   ', 12, 38000, 'vichylogo.jpeg'),
(26, 'Vichy DT Cica K sham 250 ml', 'Vichy                                   ', 14, 33500, 'vichylogo.jpeg'),
(27, 'Vichy DT kerasolution mask 200 ml', 'Vichy                                   ', 8, 42500, 'vichylogo.jpeg'),
(28, 'Vichy Dt Serum Ac Flacon 100 Ml                   ', 'Vichy                                   ', 1, 75177.3, 'vichylogo.jpeg'),
(29, 'Vichy Dt Shpoo. Energisant 400ml                  ', 'Vichy                                   ', 30, 40000, 'vichylogo.jpeg'),
(30, 'Vichy eau protection solaire spf30 200ml ', 'Vichy                                   ', 2, 48000, 'vichylogo.jpeg'),
(31, 'Vichy Homme Deo Ato                               ', 'Vichy                                   ', 10, 32000, 'vichylogo.jpeg'),
(32, 'Vichy Homme Deo Bille Ps                          ', 'Vichy                                   ', 12, 32000, 'vichylogo.jpeg'),
(33, 'Vichy Homme Gel Rasage Ps                         ', 'Vichy                                   ', 2, 34000, 'vichylogo.jpeg'),
(34, 'vichy lot de 2 deo mineral roll 50 mll', 'Vichy                                   ', 24, 48500, 'vichylogo.jpeg'),
(35, 'vichy lot de 2 deo vapo fruite 100 ml', 'Vichy                                   ', 12, 48500, 'vichylogo.jpeg'),
(36, 'Vichy Nutriext Huile 125 Ml                       ', 'Vichy                                   ', 13, 69627.3, 'vichylogo.jpeg'),
(37, 'Vichy PT  M-UP REM BIP EY F100 ml ', 'Vichy                                   ', 12, 23500, 'vichylogo.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `c_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `c_email`, `f_name`, `l_name`, `c_pass`) VALUES
(1, 'yousboud@hotmail.com', 'youssef', 'abboud', 'ya1324'),
(2, 'C.A@live.com', 'christina', 'aouad', 'ca1324');

-- --------------------------------------------------------

--
-- Table structure for table `dental_products`
--

CREATE TABLE `dental_products` (
  `id` int(11) NOT NULL,
  `descpt` varchar(45) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dental_products`
--

INSERT INTO `dental_products` (`id`, `descpt`, `brand`, `qty`, `price`, `logo`) VALUES
(1, 'corega cleansers full denture tablet 36s', 'Corega                        ', 4, 20500, 'Corega.jpeg'),
(2, 'corega cleansers full denture tablet 36s', 'Corega                        ', 3, 20500, 'Corega.jpeg'),
(3, 'corega cleansers full denture tablet 36s', 'Corega                        ', 7, 20500, 'Corega.jpeg'),
(4, 'Corega super Fix Cr. 50 Gr.                  ', 'Corega                        ', 138, 15500, 'Corega.jpeg'),
(5, 'Corega Ultra Fix Cr.                         ', 'Corega                        ', 1, 20250, 'Corega.jpeg'),
(6, 'Corega Ultra Fix Cr.                         ', 'Corega                        ', 64, 20250, 'Corega.jpeg'),
(7, 'Gum 124 Orthodontic brush 4R', 'Gum                           ', 142, 8000, 'gum.jpeg'),
(8, 'Gum 125 Orthodontic travel brush', 'Gum                           ', 24, 8000, 'gum.jpeg'),
(9, 'Gum 1412 Ultra Fine Cylindral                ', 'Gum                           ', 1, 8577.27, 'gum.jpeg'),
(10, 'Gum 1463 Bonus Pack Supertip', 'Gum                           ', 44, 7000, 'gum.jpeg'),
(11, 'Gum 1555 fine waxed (54.8m)', 'Gum                           ', 28, 6000, 'gum.jpeg'),
(12, 'Gum 156 Travel Kit (br+flo+tp)               ', 'Gum                           ', 2, 19000, 'gum.jpeg'),
(13, 'Gum 156 Travel Kit (br+flo+tp)               ', 'Gum                           ', 12, 19000, 'gum.jpeg'),
(14, 'Gum 156 Travel Kit (br+flo+tp)               ', 'Gum                           ', 6, 19000, 'gum.jpeg'),
(15, 'Gum 158 Travel Toothbrush', 'Gum                           ', 42, 10000, 'gum.jpeg'),
(16, 'Listerine Advanced tartar control 250 Ml     ', 'Listerine                     ', 10, 13000, 'listerine.jpeg'),
(17, 'Listerine Advanced tartar control 250 Ml     ', 'Listerine                     ', 3, 13000, 'listerine.jpeg'),
(18, 'Listerine Advanced tartar control 500 Ml     ', 'Listerine                     ', 3, 20000, 'listerine.jpeg'),
(19, 'Listerine Cool Mint 250 Ml                   ', 'Listerine                     ', 13, 11000, 'listerine.jpeg'),
(20, 'Listerine Coolmint 500 M                     ', 'Listerine                     ', 8, 16000, 'listerine.jpeg'),
(21, 'Listerine Coolmint 500 M                     ', 'Listerine                     ', 1, 16000, 'listerine.jpeg'),
(22, 'Listerine Coolmint 500 M                     ', 'Listerine                     ', 1, 16000, 'listerine.jpeg'),
(23, 'Listerine Freshburst 250 Ml                  ', 'Listerine                     ', 2, 11000, 'listerine.jpeg'),
(24, 'Listerine Freshburst 500 Ml                  ', 'Listerine                     ', 10, 16000, 'listerine.jpeg'),
(25, 'LISTERINE green tea 250 Ml', 'Listerine                     ', 4, 13000, 'listerine.jpeg'),
(26, 'LISTERINE green tea 250 Ml', 'Listerine                     ', 5, 13000, 'listerine.jpeg'),
(27, 'listerine green tea 250ml', 'Listerine                     ', 12, 9000, 'listerine.jpeg'),
(28, 'Listerine green tea 500ml', 'Listerine                     ', 1, 20000, 'listerine.jpeg'),
(29, 'Listerine green tea 500ml', 'Listerine                     ', 3, 20000, 'listerine.jpeg'),
(30, 'listerine mw vibrant white', 'Listerine                     ', 2, 15500, 'listerine.jpeg'),
(31, 'listerine pocket strips cool mint', 'Listerine                     ', 10, 4000, 'listerine.jpeg'),
(32, 'listerine tagd zero 250', 'Listerine                     ', 11, 10000, 'listerine.jpeg'),
(33, 'listerine tagd zero 250', 'Listerine                     ', 5, 10000, 'listerine.jpeg'),
(34, 'Mirafluor Chx 0.06 % 500 Ml                  ', 'miradent', 4, 26750, 'miradent.jpeg'),
(35, 'Novafix Extra Fort 40 G                      ', 'Novafix', 13, 16108.3, 'novafix.jpeg'),
(36, 'Oral B Cross Action B 1010                   ', 'Oral B                ', 1, 21695.5, 'oralB.jpeg'),
(37, 'Oral B mouthwash pro expert 2+1free', 'Oral B                        ', 2, 20000, 'oralB.jpeg'),
(38, 'Oral B MW 3D White perfection 500 ml', 'Oral B                        ', 2, 15000, 'oralB.jpeg'),
(39, 'oral b mw 3d whiter teeth + luxe 250 ml', 'Oral B                        ', 1, 15500, 'oralB.jpeg'),
(40, 'oral b toothpaste extra fresh', 'Oral B                        ', 5, 16000, 'oralB.jpeg'),
(41, 'Paradontax Extra Fresh toothpaste 75 ml ', 'Parodontax                    ', 1, 16000, 'parondontax.jpeg'),
(42, 'Parogencyl Sensiblite Gensive 75 Ml          ', 'Parogencyl                    ', 9, 14000, 'parogencyl.jpeg'),
(43, 'Paroguard 0.2 Bain De Douche                 ', 'miradent', 5, 13000, 'miradent.jpeg'),
(44, 'Perio Lacer gel dentifrice chlohex.0.2% 50ml', 'Lacer', 6, 15000, 'lacer.jpeg'),
(45, 'Push Button 7 Day Am/pm 67585                ', 'Synchroline                   ', 1, 14631.8, 'synchroline.jpeg'),
(46, 'Regulatpro bent', 'Regulat ', 1, 45000, 'regulat.jpeg'),
(47, 'Rinsidin 0.1% Sol. 150 Ml                    ', 'Pharmaline                    ', 9, 4000, 'pharmaline.jpeg'),
(48, 'Rinsidin 0.1% Sol. 150 Ml                    ', 'Pharmaline                    ', 111, 4000, 'pharmaline.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `Phone_nb` int(11) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `email`, `first_name`, `last_name`, `Phone_nb`, `pass`) VALUES
(1, '', 'Pamela', 'Antar', 3965117, ''),
(2, '', 'Sonia', 'Rahbani', 3637937, 'admin'),
(3, '', 'Abir', 'Sleiman', 71782639, ''),
(4, '', 'Anita', 'Abdo', 76984135, ''),
(5, '', 'Antoine', 'Khalife', 3134084, ''),
(6, '', 'Antonio', '', 3142462, ''),
(7, '', 'Boulos ', 'Kreidy', 70526076, ''),
(8, '', 'Carla', 'Dik', 3138113, ''),
(9, '', 'Elsy', 'Gerges', 76014914, ''),
(10, '', 'Fouad', 'Chaarani', 70367670, ''),
(11, '', 'Georges', 'Younes', 71954236, ''),
(12, '', 'Grace', 'Antoun', 3597889, ''),
(13, '', 'Grace', 'Touba', 3893508, ''),
(14, '', 'Hala', 'Tayson', 3335334, ''),
(15, '', 'Janin', 'Ghanem', 3707143, ''),
(16, '', 'Jessy', '', 70285335, ''),
(17, '', 'Joelle', 'Nakhoul', 76558300, ''),
(18, '', 'Judy', '', 70349795, ''),
(19, '', 'Larissa', '', 71688113, ''),
(20, '', 'Lea', 'Ziade', 81349333, ''),
(21, '', 'Mahmoud', 'Halabi', 70713297, ''),
(22, '', 'Manal', 'Ayouti', 71097985, ''),
(23, '', 'Manal', 'Malek', 3226547, ''),
(24, '', 'Maria', 'Souki', 3686770, ''),
(25, '', 'Maroun', 'Sleiman', 3135532, ''),
(26, '', 'Pascal', 'Menassa', 3978162, ''),
(27, '', 'Roula', '', 3260843, ''),
(28, '', 'Sandrea', 'Harb', 71937010, ''),
(29, '', 'Stephanie', '', 76422991, '');

-- --------------------------------------------------------

--
-- Table structure for table `para_medicals`
--

CREATE TABLE `para_medicals` (
  `id` int(11) NOT NULL,
  `descpt` varchar(45) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_medicals`
--

INSERT INTO `para_medicals` (`id`, `descpt`, `brand`, `qty`, `price`, `logo`) VALUES
(1, 'Detol spray citrus', 'Dettol                        ', 1, 25000, 'dettol.jpeg'),
(2, 'Detol spray citrus', 'Dettol                        ', 4, 25000, 'dettol.jpeg'),
(3, 'Detol spray citrus', 'Dettol                        ', 1, 25000, 'dettol.jpeg'),
(4, 'Detol spray lavender 450ml', 'Dettol                        ', 6, 25000, 'dettol.jpeg'),
(5, 'Detol spray lavender 450ml', 'Dettol                        ', 5, 25000, 'dettol.jpeg'),
(6, 'Detol spray lavender 450ml', 'Dettol                        ', 1, 25000, 'dettol.jpeg'),
(7, 'Dettol Antiseptic 250ml                      ', 'Dettol                        ', 2, 6054.55, 'dettol.jpeg'),
(8, 'Dettol Antiseptic 250ml                      ', 'Dettol                        ', 1, 6054.55, 'dettol.jpeg'),
(9, 'Dettol Antiseptic 250ml                      ', 'Dettol                        ', 1, 6054.55, 'dettol.jpeg'),
(10, 'dettol hand sanitizer  50 ml', 'Dettol                        ', 2, 6500, 'dettol.jpeg'),
(11, 'dettol hand sanitizer  Skincare', 'Dettol                        ', 10, 5500, 'dettol.jpeg'),
(12, 'dettol hand sanitizer  Skincare', 'Dettol                        ', 2, 5500, 'dettol.jpeg'),
(13, 'dettol hand sanitizer jacket gold', 'Dettol                        ', 1, 6500, 'dettol.jpeg'),
(14, 'dettol hand sanitizer original', 'Dettol                        ', 2, 5500, 'dettol.jpeg'),
(15, 'dettol hand sanitizer original', 'Dettol                        ', 3, 5500, 'dettol.jpeg'),
(16, 'dettol hand sanitizer prince 50 ml', 'Dettol                        ', 1, 8000, 'dettol.jpeg'),
(17, 'dettol hand sanitizer princess 50 ml', 'Dettol                        ', 3, 5500, 'dettol.jpeg'),
(18, 'dettol hand sanitizer princess 50 ml', 'Dettol                        ', 2, 5500, 'dettol.jpeg'),
(19, 'dettol hand sanitizer skincare 50 ml', 'Dettol                        ', 12, 5500, 'dettol.jpeg'),
(20, 'Dettol Hand Wash  Natural Invig 250 Ml       ', 'Dettol                        ', 1, 70636.4, 'dettol.jpeg'),
(21, 'Dettol Hand Wash Healthy Kids Girls', 'Dettol                        ', 1, 5297.73, 'dettol.jpeg'),
(22, 'Dettol No touch system original 250 ml', 'Dettol                        ', 3, 33000, 'dettol.jpeg'),
(23, 'Dettol Wipes 15*2                            ', 'Dettol                        ', 4, 7568.18, 'dettol.jpeg'),
(24, 'Dettol Wipes 20 Pieces                       ', 'Dettol                        ', 20, 15000, 'dettol.jpeg'),
(25, 'Dettol Wipes 20 Pieces                       ', 'Dettol                        ', 2, 15000, 'dettol.jpeg'),
(26, 'dettol wipes cool 10s', 'Dettol                        ', 20, 9000, 'dettol.jpeg'),
(27, 'dettol wipes cool 10s', 'Dettol                        ', 8, 9000, 'dettol.jpeg'),
(28, 'dettol wipes cool 10s', 'Dettol                        ', 1, 9000, 'dettol.jpeg'),
(29, 'dettol wipes fresh 40s', 'Dettol                        ', 9, 27000, 'dettol.jpeg'),
(30, 'Dettol Wipes G. M.                           ', 'Dettol                        ', 10, 27000, 'dettol.jpeg'),
(31, 'Dettol Wipes G. M.                           ', 'Dettol                        ', 3, 27000, 'dettol.jpeg'),
(32, 'Dettol wipes healthy kids girls 10s', 'Dettol                        ', 6, 4793.18, 'dettol.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `res_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`res_id`, `item_id`, `cust_id`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sport_nutrition`
--

CREATE TABLE `sport_nutrition` (
  `id` int(11) NOT NULL,
  `descpt` varchar(45) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sport_nutrition`
--

INSERT INTO `sport_nutrition` (`id`, `descpt`, `brand`, `qty`, `price`, `logo`) VALUES
(1, 'Combat crisp bar 45g', 'mp essentials', 10, 7500, 'MusclePharm.jpeg'),
(2, 'OptiFast Bar Berry Crunch ', 'Nestle                        ', 11, 5500.05, 'Nestle.jpeg'),
(3, 'OptiFast Bar Berry Crunch ', 'Nestle                        ', 13, 5500.05, 'Nestle.jpeg'),
(4, 'OptiFast Bar Berry Crunch ', 'Nestle                        ', 6, 5500.05, 'Nestle.jpeg'),
(5, 'OptiFast Bar Berry Crunch ', 'Nestle                        ', 10, 5500.05, 'Nestle.jpeg'),
(6, 'OptiFast Bar Berry Crunch ', 'Nestle                        ', 1, 5500.05, 'Nestle.jpeg'),
(7, 'OptiFast Bar Cappuccino ', 'Nestle                        ', 5, 5500, 'Nestle.jpeg'),
(8, 'OptiFast Bar Cappuccino ', 'Nestle                        ', 20, 5500, 'Nestle.jpeg'),
(9, 'OptiFast Bar Cappuccino ', 'Nestle                        ', 25, 5500, 'Nestle.jpeg'),
(10, 'OptiFast Bar Cappuccino ', 'Nestle                        ', 2, 5500, 'Nestle.jpeg'),
(11, 'Soft Shell Splint Large ', 'divers', 1, 18000, 'divers.jpeg'),
(12, 'WEIDER low carb high protein 50 g latte macch', 'Weider                        ', 21, 5000, 'weider.jpeg'),
(13, 'WEIDER low carb high protein 50 g peanut cara', 'Weider                        ', 22, 5000, 'weider.jpeg'),
(14, 'WEIDER low carb high protein 50 g red fruits', 'Weider                        ', 14, 5000, 'weider.jpeg'),
(15, 'WEIDER low carb high protein 50 g stracciatel', 'Weider                        ', 18, 5000, 'weider.jpeg'),
(16, 'WHEY AMINOS 300 TABLETS', 'Whey', 4, 130000, 'whey.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `supplements`
--

CREATE TABLE `supplements` (
  `id` int(11) NOT NULL,
  `descpt` varchar(50) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplements`
--

INSERT INTO `supplements` (`id`, `descpt`, `brand`, `qty`, `price`, `logo`) VALUES
(1, 'Solgar Acetyl L-carnitine 250mg 30 gelules        ', 'Solgar                                       ', 15, 36327, 'solgar.jpeg'),
(2, 'Solgar Acetyl L-carnitine 250mg 30 gelules        ', 'Solgar                                       ', 9, 32291, 'solgar.jpeg'),
(3, 'Solgar Acide Alpha Lipoique 200 mg 50 gelules', 'Solgar                                       ', 20, 35318, 'solgar.jpeg'),
(4, 'Solgar Acide Alpha Lipoique 200 mg 50 gelules', 'Solgar                                       ', 3, 40364, 'solgar.jpeg'),
(5, 'Solgar Acide Alpha Lipoique 200 mg 50 gelules', 'Solgar                                       ', 25, 15893, 'solgar.jpeg'),
(6, 'Solgar Acide Hyaluronique 120 Mg 30 tabs          ', 'Solgar                                       ', 11, 18164, 'solgar.jpeg'),
(7, 'Solgar Acide Pantothenique Vit B-5 550 Mg 50 gelul', 'Solgar                                       ', 125, 50455, 'solgar.jpeg'),
(8, 'Solgar Advanced Acidophilus Plus 60 gelules       ', 'Solgar                                       ', 50, 23310, 'solgar.jpeg'),
(9, 'Solgar Advanced Antioxidant 30 Veg capsules       ', 'Solgar                                       ', 4, 32291, 'solgar.jpeg'),
(10, 'Solgar Advanced Antioxidant 30 Veg capsules       ', 'Solgar                                       ', 60, 50455, 'solgar.jpeg'),
(11, 'solgar advanced multi billion dophilus 60 caps', 'Solgar                                       ', 3, 26000, 'solgar.jpeg'),
(12, 'Solgar Amino 75 30 gelules                        ', 'Solgar                                       ', 23, 83250, 'solgar.jpeg'),
(13, 'Solgar Amino 75 30 gelules                        ', 'Solgar                                       ', 1, 46670, 'solgar.jpeg'),
(14, 'Solgar Ashwagandha Root Extract 60 Gel            ', 'Solgar                                       ', 54, 26000, 'solgar.jpeg'),
(15, 'Solgar Astaxanthine 5 Mg 30 Cp                    ', 'Solgar                                       ', 10, 13000, 'solgar.jpeg'),
(16, 'Solgar Astaxanthine 5 Mg 30 Cp                    ', 'Solgar                                       ', 5, 23209, 'solgar.jpeg'),
(17, 'Solgar Astaxanthine 5 Mg 30 Cp                    ', 'Solgar                                       ', 4, 12900, 'solgar.jpeg'),
(18, 'Solgar Astaxanthine 5 Mg 30 Cp                    ', 'Solgar                                       ', 12, 59940, 'solgar.jpeg'),
(19, 'Solgar Astragalus 60 caps', 'Solgar                                       ', 10, 35318, 'solgar.jpeg'),
(20, 'Solgar B Complex 50 100 caps ', 'Solgar                                       ', 19, 29000, 'solgar.jpeg'),
(21, 'Solgar B Complex+ Vit C 100 tabs                  ', 'Solgar                                       ', 3, 29768, 'solgar.jpeg'),
(22, 'Solgar B Complex+ Vit C 100 tabs                  ', 'Solgar                                       ', 205, 29768, 'solgar.jpeg'),
(23, 'Solgar Baies de Saw Palmetto 100 gelules', 'Solgar                                       ', 23, 23500, 'solgar.jpeg'),
(24, 'Solgar Baies de Saw Palmetto 100 gelules', 'Solgar                                       ', 66, 15136, 'solgar.jpeg'),
(25, 'Solgar Baies de Saw Palmetto 100 gelules', 'Solgar                                       ', 21, 30000, 'solgar.jpeg'),
(26, 'Solgar Biotine 5000 Mcg  50cap                    ', 'Solgar                                       ', 60, 59000, 'solgar.jpeg'),
(27, 'Solgar Biotine 5000 Mcg  50cap                    ', 'Solgar                                       ', 75, 59000, 'solgar.jpeg'),
(28, 'Solgar Biotine 5000 Mcg  50cap                    ', 'Solgar                                       ', 120, 35000, 'solgar.jpeg'),
(29, 'Solgar Calcium Bisglycnate 100 tbs                ', 'Solgar                                       ', 22, 19000, 'solgar.jpeg'),
(30, 'Solgar Cannelle 100 tabs                          ', 'Solgar                                       ', 27, 65314, 'solgar.jpeg'),
(31, 'Solgar Chlorella 520 Mg 100 Cap                   ', 'Solgar                                       ', 108, 30500, 'solgar.jpeg'),
(32, 'Solgar Chromium Picolinate 100mcg 90 tabs         ', 'Solgar                                       ', 95, 35000, 'solgar.jpeg'),
(33, 'Solgar Cuivre Bisglycinate/Chelated copper 100 Tab', 'Solgar                                       ', 47, 95000, 'solgar.jpeg'),
(34, 'Solgar Curcuma (Turmeric) 60 gelules              ', 'Solgar                                       ', 141, 70636, 'solgar.jpeg'),
(35, 'Solgar Devil\'s Claw  (Griffe Du Diable) 100 Tablet', 'Solgar                                       ', 1, 49284, 'solgar.jpeg'),
(36, 'Solgar Digestive Enzymes 100tabs                  ', 'Solgar                                       ', 113, 75682, 'solgar.jpeg'),
(37, 'Solgar Magnesium Citrate 60 TABLETS               ', 'Solgar                                       ', 112, 38345, 'solgar.jpeg'),
(38, 'Solgar Magnesium Citrate 60 TABLETS               ', 'Solgar                                       ', 177, 127500, 'solgar.jpeg'),
(39, 'Solgar Melatonine 2 Mg 60 cp                      ', 'Solgar                                       ', 12, 44400, 'solgar.jpeg'),
(40, 'Solgar Melatonine Liquide 59 mL', 'Solgar                                       ', 30, 27750, 'solgar.jpeg'),
(41, 'Solgar Multi Femme 60 Tabs                        ', 'Solgar                                       ', 14, 49950, 'solgar.jpeg'),
(42, 'Solgar Multi Homme 60 Cp                          ', 'Solgar                                       ', 72, 9000, 'solgar.jpeg'),
(43, 'Solgar Noxidrim 5 Htp 30 Gelules Vege.            ', 'Solgar                                       ', 113, 58527, 'solgar.jpeg'),
(44, 'Solgar Omega 3\'700 30 Softgels                    ', 'Solgar                                       ', 90, 7316, 'solgar.jpeg'),
(45, 'Solgar Peaux Ongles, Cheveux 60 tablets           ', 'Solgar                                       ', 161, 32291, 'solgar.jpeg'),
(46, 'Solgar Peaux Ongles, Cheveux 60 tablets           ', 'Solgar                                       ', 59, 27750, 'solgar.jpeg'),
(47, 'Solgar vit D3 4000 Ui    60cp                     ', 'Solgar                                       ', 114, 111001, 'solgar.jpeg'),
(48, 'Solgar Vit E 268 Mg 400ui 50 softgels             ', 'Solgar                                       ', 19, 55500, 'solgar.jpeg'),
(49, 'Solgar Zinc Picolinate 22mg 100 tabs              ', 'Solgar                                       ', 292, 12625, 'solgar.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baby_products`
--
ALTER TABLE `baby_products`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `baby_toiletries`
--
ALTER TABLE `baby_toiletries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cosmetics`
--
ALTER TABLE `cosmetics`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `dental_products`
--
ALTER TABLE `dental_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `para_medicals`
--
ALTER TABLE `para_medicals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `id` (`item_id`,`cust_id`);

--
-- Indexes for table `sport_nutrition`
--
ALTER TABLE `sport_nutrition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplements`
--
ALTER TABLE `supplements`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baby_products`
--
ALTER TABLE `baby_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `baby_toiletries`
--
ALTER TABLE `baby_toiletries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `cosmetics`
--
ALTER TABLE `cosmetics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dental_products`
--
ALTER TABLE `dental_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `para_medicals`
--
ALTER TABLE `para_medicals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sport_nutrition`
--
ALTER TABLE `sport_nutrition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `supplements`
--
ALTER TABLE `supplements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
