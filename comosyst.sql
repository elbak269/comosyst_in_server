-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2021 at 08:28 AM
-- Server version: 5.5.45
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comosyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Brand_ID` int(11) NOT NULL,
  `Brand_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Brand_ID`, `Brand_Name`) VALUES
(1, 'Hik Vision'),
(2, 'Dahua'),
(3, 'ADVISION'),
(4, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `Camera_ID` int(11) NOT NULL,
  `Model` varchar(50) DEFAULT NULL,
  `Camera_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`Camera_ID`, `Model`, `Camera_Name`) VALUES
(2, 'DS-2CE16D0T-ITPF 3.6 MM', 'Color Camera');

-- --------------------------------------------------------

--
-- Table structure for table `dvr`
--

CREATE TABLE `dvr` (
  `Dvr_ID` int(11) NOT NULL,
  `Vidéo_numérique_au_format_multimédia` smallint(6) NOT NULL,
  `Entrée_vidéo` varchar(15) NOT NULL,
  `Nombre_de_canaux` smallint(6) NOT NULL,
  `Modèle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `exchange_id` int(11) NOT NULL,
  `Currency_Name` varchar(10) NOT NULL,
  `Curenccy_Value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exchange`
--

INSERT INTO `exchange` (`exchange_id`, `Currency_Name`, `Curenccy_Value`) VALUES
(1, 'KMF', '1'),
(2, 'EUR', '490.13');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `feature_id` int(11) NOT NULL,
  `type_product` smallint(11) DEFAULT NULL,
  `feature_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`feature_id`, `type_product`, `feature_name`) VALUES
(2, 4, '4 MP HQIS Pro Image Sensor'),
(3, 4, 'Résolution 1080P');

-- --------------------------------------------------------

--
-- Table structure for table `features_cameras`
--

CREATE TABLE `features_cameras` (
  `Feature_ID` int(11) NOT NULL,
  `Product_ID` int(11) DEFAULT NULL,
  `Feature_Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `features_product`
--

CREATE TABLE `features_product` (
  `Feature_ID` int(11) NOT NULL,
  `Product_ID` int(11) DEFAULT NULL,
  `Feature_Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feature_offer`
--

CREATE TABLE `feature_offer` (
  `Feature_ID` int(11) NOT NULL,
  `Feature_Name` varchar(100) NOT NULL,
  `Product_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature_offer`
--

INSERT INTO `feature_offer` (`Feature_ID`, `Feature_Name`, `Product_ID`) VALUES
(1, '4 caméras ', 6),
(2, '2 externes 4MP et 2 internes 2MP', 6),
(3, 'DVR 4 canaux prend en charge jusqu\'à 5 mégapixels\r\n', 6),
(4, 'Avec installation\r\n', 6),
(5, '1 alimentation', 6),
(6, 'Fil 50m ', 6),
(7, 'Surveillance à distance via téléphone mobile et navigateur en ligne', 6);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Message_ID` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `Date_TIME` datetime NOT NULL,
  `Email` varchar(50) NOT NULL,
  `User_IP` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Message_ID`, `Subject`, `Message`, `Date_TIME`, `Email`, `User_IP`, `Phone`, `Adress`) VALUES
(0, 'probel', 'dje', '2021-04-21 22:27:12', 'elbak269@gmail.com', '', '1098090201', 'ezbat nakhl'),
(0, 'tets', 'test4', '2021-04-22 15:58:40', 'elbak1995@gmail.com', '', '3333036', 'dimadjou hamahamet'),
(0, 'fyujtygf', 't7ikjy8t', '2021-04-22 16:00:41', 'rgyhj@ghsmasd.com', '', '1098090201', 'edthg');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `Offer_id` int(11) NOT NULL,
  `Ofer_Name` varchar(50) NOT NULL,
  `Total_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offer_products`
--

CREATE TABLE `offer_products` (
  `Offer_Product_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(11) NOT NULL,
  `Date_Requested` datetime DEFAULT NULL,
  `Date_Deleivred` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Date_Requested`, `Date_Deleivred`) VALUES
(1, '2021-05-06 09:04:27', NULL),
(2, '2021-05-06 09:04:45', NULL),
(3, '2021-05-06 09:06:38', NULL),
(4, '2021-05-06 09:06:43', NULL),
(5, '2021-05-06 09:08:15', NULL),
(6, '2021-05-06 09:13:35', NULL),
(7, '2021-05-06 09:14:59', NULL),
(8, '2021-05-06 09:15:01', NULL),
(9, '2021-05-06 09:15:14', NULL),
(10, '2021-05-06 09:15:15', NULL),
(11, '2021-05-06 09:17:17', NULL),
(12, '2021-05-06 09:17:53', NULL),
(13, '2021-05-06 09:22:17', NULL),
(14, '2021-05-06 16:19:53', NULL),
(15, '2021-05-09 14:49:26', NULL),
(16, '2021-05-18 21:36:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `Order_Details_ID` int(11) NOT NULL,
  `Order_ID` int(11) DEFAULT NULL,
  `Product_ID` int(11) DEFAULT NULL,
  `Date_Requested` datetime NOT NULL,
  `Amount` varchar(50) DEFAULT NULL,
  `TotalAmount` varchar(50) DEFAULT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`Order_Details_ID`, `Order_ID`, `Product_ID`, `Date_Requested`, `Amount`, `TotalAmount`, `client_email`, `fullName`, `mobile`, `address`, `message`) VALUES
(1, 11, 1, '2021-05-06 09:17:17', '60000', '60000', 'elbak269@gmail.com', 'elbak', '156895', 'juy8', 'hukui'),
(2, 12, 1, '2021-05-06 09:17:53', '60000', '60000', 'elbak269@gmail.com', 'elbak', '156895', 'juy8', 'hukui'),
(3, 13, 1, '2021-05-06 09:22:17', '60000', '60000', 'elbak269@gmail.com', 'elbak', '156895', 'juy8', 'hukui'),
(4, 14, 1, '2021-05-06 16:19:53', '60000', '60000', 'elbak269@gmail.com', 'elbak mahmoud', '5685242', 'dimadjou hamahamet', 'dje mze'),
(5, 15, 6, '2021-05-09 14:49:26', '1000000', '1000000', 'elbak1995@gmail.com', 'elbak mahmoud', '333036', 'moroni', 'tsi kotsaha camera'),
(6, 16, 8, '2021-05-18 21:36:57', '123216', '123216', 'yhuy', 'elbak mahmoud', '5963', 'kui', 'uikui');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Type` smallint(6) DEFAULT NULL,
  `Price` varchar(100) NOT NULL,
  `Brand` int(11) DEFAULT NULL,
  `Color` varchar(25) NOT NULL,
  `Country_Made` varchar(50) NOT NULL,
  `Feature` int(11) DEFAULT NULL,
  `Description` text,
  `Product_Img` varchar(100) DEFAULT NULL,
  `Website` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Type`, `Price`, `Brand`, `Color`, `Country_Made`, `Feature`, `Description`, `Product_Img`, `Website`) VALUES
(1, 'Dhahab', 1, '346981', NULL, '', '0', NULL, '', '', 3),
(2, 'Fetha', 1, '198002', NULL, '', '0', NULL, '', '', 2),
(3, 'Bronze', 1, '98963', NULL, '', '0', NULL, '', '', 1),
(4, 'DS-2CE16D0T-ITPF 3.6 MM', 4, '15179.2', 1, '', 'China', NULL, '', '', NULL),
(5, 'AD-HFW1400R-S2 ', 4, '39209.68', 3, 'Blanc', 'China', NULL, '', 'dvr_cameras.jpg', NULL),
(6, 'elbak', 6, '172249', 1, '', '', NULL, 'Ensemble de caméras de surveillance contient 2 interne 2MP caméra et 2.8 mm objectif fixe * 2 externe 4MP caméra et 3.6 mm objectif fixe * 4 canal enregistreur prend en charge jusqu\'à 5MP', 'dvr_cameras.jpg', NULL),
(8, 'ComoApp', 7, '123216', 4, '', '', NULL, 'C\'est un programme complet qui est facile et simple à gérer toutes les activités commerciales telles que (boutiques – magasins - sociétés commerciales - expositions )\r\n', 'erp_s.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_type`
--

CREATE TABLE `products_type` (
  `Type_ID` smallint(11) NOT NULL,
  `Type_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_type`
--

INSERT INTO `products_type` (`Type_ID`, `Type_Name`) VALUES
(1, 'WebSite'),
(2, 'Android Aplication'),
(3, 'Windows Application'),
(4, 'Cameras'),
(5, 'Dvr'),
(6, 'offer'),
(7, 'ERP');

-- --------------------------------------------------------

--
-- Table structure for table `secure_web`
--

CREATE TABLE `secure_web` (
  `Secure_ID` smallint(11) NOT NULL,
  `Secure_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secure_web`
--

INSERT INTO `secure_web` (`Secure_ID`, `Secure_Name`) VALUES
(1, 'HTTPS'),
(2, 'HTTP');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `Site_ID` int(11) NOT NULL,
  `Site_Name` varchar(50) NOT NULL,
  `Pages` smallint(6) NOT NULL,
  `Secure` smallint(1) DEFAULT NULL,
  `Storage` varchar(10) NOT NULL,
  `Control_Panel` tinyint(1) NOT NULL,
  `Multi_anguage` tinyint(1) NOT NULL,
  `Ecomerce` tinyint(1) NOT NULL,
  `Domain` tinyint(1) NOT NULL,
  `Responsive` smallint(6) DEFAULT NULL,
  `Mail` smallint(6) DEFAULT NULL,
  `Month_Free_Hosting` smallint(6) DEFAULT NULL,
  `Month_Free_Domain` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`Site_ID`, `Site_Name`, `Pages`, `Secure`, `Storage`, `Control_Panel`, `Multi_anguage`, `Ecomerce`, `Domain`, `Responsive`, `Mail`, `Month_Free_Hosting`, `Month_Free_Domain`) VALUES
(1, 'Elbak', 3, 1, '4', 1, 1, 1, 0, 1, 1, 1, 12),
(2, 'Idriss', 5, 1, '15', 1, 1, 1, 1, 1, 1, 2, 12),
(3, 'Salim', 7, 1, '20', 1, 1, 1, 1, 1, 1, 3, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Brand_ID`);

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`Camera_ID`);

--
-- Indexes for table `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`exchange_id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`feature_id`),
  ADD KEY `feat_typ` (`type_product`);

--
-- Indexes for table `features_cameras`
--
ALTER TABLE `features_cameras`
  ADD PRIMARY KEY (`Feature_ID`);

--
-- Indexes for table `features_product`
--
ALTER TABLE `features_product`
  ADD PRIMARY KEY (`Feature_ID`);

--
-- Indexes for table `feature_offer`
--
ALTER TABLE `feature_offer`
  ADD PRIMARY KEY (`Feature_ID`),
  ADD KEY `feat_pr_re` (`Product_ID`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`Offer_id`);

--
-- Indexes for table `offer_products`
--
ALTER TABLE `offer_products`
  ADD PRIMARY KEY (`Offer_Product_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`Order_Details_ID`),
  ADD KEY `prod_rela` (`Product_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Type_pt` (`Type`),
  ADD KEY `bat_re` (`Brand`),
  ADD KEY `feature_re` (`Feature`),
  ADD KEY `website_re` (`Website`);

--
-- Indexes for table `products_type`
--
ALTER TABLE `products_type`
  ADD PRIMARY KEY (`Type_ID`);

--
-- Indexes for table `secure_web`
--
ALTER TABLE `secure_web`
  ADD PRIMARY KEY (`Secure_ID`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`Site_ID`),
  ADD KEY `secure` (`Secure`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `Brand_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `Camera_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exchange`
--
ALTER TABLE `exchange`
  MODIFY `exchange_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `features_cameras`
--
ALTER TABLE `features_cameras`
  MODIFY `Feature_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features_product`
--
ALTER TABLE `features_product`
  MODIFY `Feature_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_offer`
--
ALTER TABLE `feature_offer`
  MODIFY `Feature_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `Offer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_products`
--
ALTER TABLE `offer_products`
  MODIFY `Offer_Product_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `Order_Details_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products_type`
--
ALTER TABLE `products_type`
  MODIFY `Type_ID` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `secure_web`
--
ALTER TABLE `secure_web`
  MODIFY `Secure_ID` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `Site_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feature`
--
ALTER TABLE `feature`
  ADD CONSTRAINT `feat_typ` FOREIGN KEY (`type_product`) REFERENCES `products_type` (`Type_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `feature_offer`
--
ALTER TABLE `feature_offer`
  ADD CONSTRAINT `feat_pr_re` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `prod_rela` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `bat_re` FOREIGN KEY (`Brand`) REFERENCES `brand` (`Brand_ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `feature_re` FOREIGN KEY (`Feature`) REFERENCES `feature` (`feature_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `Type_pt` FOREIGN KEY (`Type`) REFERENCES `products_type` (`Type_ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `website_re` FOREIGN KEY (`Website`) REFERENCES `website` (`Site_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `website`
--
ALTER TABLE `website`
  ADD CONSTRAINT `secure` FOREIGN KEY (`Secure`) REFERENCES `secure_web` (`Secure_ID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
